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
        function(data, textStatus, jqXHR) {
            response = eval("(" + data + ")");
            pageCount = response.pageCount;
            currentPage = response.currentPage;
            goodsCount = response.goodsCount;
            goods = response.goods;

            html = "";
            $("#topPagesLine").html('');
            for (i = 0; i < pageCount; ++i) {
                $("#topPagesLine").append("<a id=\"btnp" + i + "\" href=\"#\" data-role=\"button\" data-inline=\"true\">" + (i+1) + "</a>");
                //$("#btnp" + i).button();
                $("#btnp" + i).buttonMarkup({ inline: "true"});
                //if ((i+1) == currentPage)
                //    $("#btnp" + i).buttonMarkup({ active: "true" });
            }
        },
        "text"        
    );
} 