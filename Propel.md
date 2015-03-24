# Добавление объекта в базу #

```

$user = new User($login,$password);
$user->save();
//or
$user = new User();
$user->seLogin("login");
$user->setPassword("password");
$user->save();
```


# Поиск объекта в базе #

```

$divs = CatalogDivQuery::create()->findById($parentDivId);
$div = $divs[0];
echo $div->getName();
//or
$div = CatalogDivQuery::create()->findOneById($parentDivId);
echo $div->getName();
//or
$users=UserQuery::create()->find();
foreach ($users as $user)   {
$login=$user->getLogin();
echo $login;
}
```

# Удаление объекта из базы #


```

$users = UserQuery::create()->findByLogin($login);
$user=$users[0];
$user->delete();
```