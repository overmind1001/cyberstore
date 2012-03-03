<?
    //Надо выдать количество страниц, текущую страницу
    //Выдать товары

require_once './../vendor/propel/runtime/lib/Propel.php';
Propel::init("./../cyberstore/build/conf/cyberstore-conf.php");
set_include_path("./../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());

$cid = $_POST["categoryId"];
$count = $_POST["count"];
$skip = $_POST["skip"];

//echo '{hello:"asdf"}';

$goodsCount = GoodsQuery::create()
    ->findByCatalogId($cid)
    ->count();

$pageCount = $goodsCount ? (int)($goodsCount / $count) + 1 : 0;

$goods = GoodsQuery::create()
    ->limit($skip, $count)
    ->findByCatalogId($cid);

$N = count($goods);

$goodsResponse = '"goods[]":[';
for ($i = 0; $i < $count && $i < $N; $i++) {
    $goodsResponse .= '{';
    $good = $goods[$i];
    $goodsResponse .= '"id":'.$good->getId();
    $goodsResponse .= ',"name":"'.$good->getName().'"';
    $goodsResponse .= '}';
}
$goodsResponse .= ']';

echo '{"pageCount":'.$pageCount.',"goodsCount":'.$goodsCount.','.$goodsResponse.'}';

?>