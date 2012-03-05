function goodToDiv(good, letter)
{
    result = '<div class="ui-block-'+ letter + '">';
    result += '<div class="ui-bar ui-bar-c" style="height:200px;">';
    result += '<h3>' + good.Name + '</h3>';
    result += '<p>' + good.Description + '</p>';
    result += '</div>'
    result += '</div';
    return result;
}

function categoryClicked(id)
{
    //Загрузить товары
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

            $('#category' + id).addClass('ui-btn-active');
            $('#topPagesLine').html('');
            $('#bottomPagesLine').html('');
            for (i = 0; i < pageCount; ++i) {
                $("#topPagesLine").append("<a id=\"btnpt" + i + "\" href=\"#\" data-role=\"button\" data-inline=\"true\">" + (i+1) + "</a>");
                $("#bottomPagesLine").append("<a id=\"btnpb" + i + "\" href=\"#\" data-role=\"button\" data-inline=\"true\">" + (i+1) + "</a>");
                $("#btnpt" + i).buttonMarkup({ inline: "true"});
                $("#btnpb" + i).buttonMarkup({ inline: "true"});
                if ((i+1) == currentPage) {
                    $("#btnpt" + i).addClass('ui-btn-active');
                    $("#btnpb" + i).addClass('ui-btn-active');
                }
            }
            $('#catalogGrid').html('');
            lts = ['a','b','c'];
            for (i = 0; i < goodsCount; ++i) {
                good = goods[i];
                $('#catalogGrid').append(goodToDiv(good, lts[i%3]));
            }
        },
        "text"        
    );
} 