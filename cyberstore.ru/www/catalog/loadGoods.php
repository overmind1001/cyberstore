<?
  /**
    * Параметры передаются POST-запросом
    * @param categoryId - id запрашиваемой категории
    * @param count - запрашиваемое кол-во товаров (6, 12, 24, 48)
    * @param skip - сколько товаров надо пропустить (для загрузки второй и последующих страниц)
    * @param sessionId - id текущей сессии
    * @returns JSON-ответ
    * Поля возвращаемого JSON-объекта:
    * - pageCount - количество страниц всего
    * - currentPage - текущая страница
    * - goodsCount - количество товаров
    * - goods[] - массив товаров
    */

include_once './../propel.inc.php';

function alreadyInBasket($good, $col)
{
    //TODO написать нормальный (быстрый) поиск
    foreach ($col as $current) {
        if ($current["GoodId"] == $good->getId())
            return true;
    }
    return false;
}

$cid = $_POST["categoryId"];
$count = $_POST["count"];
$skip = $_POST["skip"];
$ssid = $_POST["sessionId"];

$basket = BasketQuery::create()->findOneBySessionId($ssid);

$goodsinbasket = $basket->getGoodInBaskets()->toArray();

$goodsCount = GoodsQuery::create()
    ->findByCatalogId($cid)
    ->count();

$pageCount = ($goodsCount > 0) ? (int)($goodsCount / $count) : 0;
if ($goodsCount % $count > 0)
    $pageCount++;
$currentPage = (int)($skip / $count) + 1;

$goods = GoodsQuery::create()
    ->findByCatalogId($cid);

$N = count($goods);

if ($goodsCount > $N - $skip)
    $goodsCount = $N - $skip;

$goodsResponse = '"goods":[';
$firsttime = true;
for ($i = $skip; $i < ($count + $skip) && $i < ($goodsCount + $skip); $i++) {
    $good = $goods[$i];
    $contains = alreadyInBasket($good, $goodsinbasket) ? "true" : "false";
    if ($firsttime)        
        $firsttime = false;
    else $goodsResponse .= ",";
    $con = ',"already":'.$contains;
    $goodsResponse .= $good->toJSON();
    $goodsResponse = substr($goodsResponse, 0, strlen($goodsResponse) - 1);
    $goodsResponse .= $con.'}';
}
$goodsResponse .= ']';

echo '{"pageCount":'.$pageCount.',"goodsCount":'.$goodsCount.','.$goodsResponse.',"currentPage":'.$currentPage.'}';

?>