# Подключение к БД #

```php

$db = mysql_connect('localhost','root','');
mysql_select_db('db_cyberstore', $db);
$result = mysql_query("SELECT max(picture_id) FROM goods",$db);
$myrow = mysql_fetch_array($result);
$max_picture_id=$myrow['max(picture_id)'];
```