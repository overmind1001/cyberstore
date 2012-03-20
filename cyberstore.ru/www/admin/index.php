<?php
    include 'protection.php';
    if(!isAdmin()){
        echo "Access denied.";
        return;
    }

    include 'adminHead.php';
    $name="Админка";
    generateHead($name, $name, "default", "");
?>
<center>
<ul class="admin_main">
    <li>
        <a href="goods/">Товары</a>
    </li>
    <li>
        <a href="divs/">Разделы каталога</a>
    </li>
    <li> 
        <a href="users/">Пользователи</a>
    </li>
    <!--li>
        <a href="salesMain.php">Продажи</a>
    </li-->
</ul>
</center>
<?php
    include 'adminFoot.php';
?>