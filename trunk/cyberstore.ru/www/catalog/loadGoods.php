<?
  /**
    * Параметры передаются POST-запросом
    * @param categoryId - id запрашиваемой категории
    * @param count - запрашиваемое кол-во товаров (6, 12, 24, 48)
    * @param skip - сколько товаров надо пропустить (для загрузки второй и последующих страниц)
    * @returns JSON-ответ
    * Поля возвращаемого JSON-объекта:
    * - pageCount - количество страниц всего
    * - currentPage - текущая страница
    * - goodsCount - количество товаров
    * - goods[] - массив товаров
    */

include_once './../propel.inc.php';

$cid = $_POST["categoryId"];
$count = $_POST["count"];
$skip = $_POST["skip"];

$goodsCount = GoodsQuery::create()
    ->findByCatalogId($cid)
    ->count();

$pageCount = ($goodsCount > 0) ? (int)($goodsCount / $count) : 0;
if ($goodsCount % $count > 0)
    $pageCount++;
$currentPage = (int)($skip / $count) + 1;

$goods = GoodsQuery::create()
    //->limit($skip, $count)
    ->findByCatalogId($cid);

$N = count($goods);

if ($goodsCount > $N - $skip)
    $goodsCount = $N - $skip;

$goodsResponse = '"goods":[';
$firsttime = true;
for ($i = $skip; $i < ($count + $skip) && $i < ($goodsCount + $skip); $i++) {
    $good = $goods[$i];
    if ($firsttime)        
        $firsttime = false;
    else $goodsResponse .= ",";
    $goodsResponse .= $good->toJSON();
}
$goodsResponse .= ']';

echo '{"pageCount":'.$pageCount.',"goodsCount":'.$goodsCount.','.$goodsResponse.',"currentPage":'.$currentPage.'}';

?>