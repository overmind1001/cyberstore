<?php
    include 'adminHead.php';
    $name="Админка";
    generateHead($name, $name)
?>
<h1>Админка</h1>

<ul style="padding-top:30px;font-size: 20pt;">
    <li style="margin:20px;">
        <a href="goods/">Товары</a>
    </li>
    <li  style="margin:20px;">
        <a href="divs/">Разделы каталога</a>
    </li>
    <li style="margin:20px;"> 
        <a href="users/">Пользователи</a>
    </li>
    <li style="margin:20px;">
        <a href="salesMain.php">Продажи</a>
    </li>
</ul>

<?php
    include 'adminFoot.php';
?>