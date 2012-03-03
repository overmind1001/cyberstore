function categoryClicked(id)
{
    //Надо узнать количество страниц, текущую страницу
    //загрузить товары
    $.post(
        "loadGoods.php",
        {
            categoryId: id,
            count: 6,
            skip: 0
        },
        function (data, textStatus, jqXHR){
            response = eval("(" + data + ")");
        },
        "text"        
    );
} 