<?php
    $error=false;
    if(!isset($_POST['name'])) {
        $error=true;
    }
    if(!isset($_POST['description'])) {
        $error=true;
    }
    if(!isset($_POST['price'])) {
        $error=true;
    }
    if(!isset($_POST['count'])) {
        $error=true;
    }
    if(!isset($_POST['catalog_name'])) {
        $error=true;
    }
    if($error)  {
        echo "Ошибка!";
        return;
    }

    $good_name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $count=$_POST['count'];
    $catalog_name=$_POST['catalog_name'];
    
    include_once '../../initPropel.php';
    Propel::init("../../cyberstore/build/conf/cyberstore-conf.php");
    set_include_path("../../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
        
    $good=  GoodsQuery::create()->findOneByName($good_name);
    if($good!=NULL) {
        echo 'Товар с таки именем уже существует';
        return;
    }
    
    $catalog = CatalogDivQuery::create()->findOneByName($catalog_name);
    if($catalog==NULL)  {
        echo "Нет каталога.";
        return;
    }
    $catalog_id = $catalog->getId();
    //надо узнать свободный id-картинки
    $db = mysql_connect('localhost','root','');
    mysql_select_db('db_cyberstore', $db);
    $result = mysql_query("SELECT max(picture_id) FROM goods",$db);
    $myrow = mysql_fetch_array($result);
    $max_picture_id=$myrow['max(picture_id)'];
    if($max_picture_id==NULL)    {
        $max_picture_id=1;
    }
    else    {
        $max_picture_id++;
    }
    
    $uploaddir = '../../pictures/';
    if (isset($_FILES["picture"])) {
	if (is_uploaded_file($_FILES['picture']['tmp_name'])) {
            if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploaddir . $max_picture_id.".jpg")) {
                //print "File is valid, and was successfully uploaded.";
            } 
            else {
                print "Файл не загружен!";
                return;
            }
        }
    }
    else    {
        $max_picture_id=NULL;
    }
    
    $good = new Goods();
    $good->setName($good_name);
    $good->setDescription($description);
    $good->setPriceCurrent($price);
    $good->setCount($count);
    $good->setCatalogId($catalog_id);
    $good->setPictureId($max_picture_id);
    $good->save();
?>
<?php
    include '../adminHead.php';
    $name="Товар добавлен";
    generateHead($name, $name, "default", "");
?>
<h2>
    <?php
        echo "Товар $good_name успешно добавлен!"
    ?>
</h2>

<?php
    include '../adminFoot.php';
?>
<script>
    window.alert("Сейчас произойдет возврат к добавлению товаров!");
    window.location = "formAddGood.php";
</script>

