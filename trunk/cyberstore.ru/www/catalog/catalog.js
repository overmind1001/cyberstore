function goodToDiv(good, letter)
{
    result =  '<div class="ui-block-'+ letter + '">';
    result += '<div class="ui-bar ui-bar-c" style="height:250px;">';
    result += '<table border="0px" width="100%" height="100%">';
    result += '<tr><td align="center" colspan="2">' + good.Name + '</td></tr>';
    result += '<tr><td align="center" colspan="2"><img src="./../0a.jpg"/></td></tr>';
    result += '<tr><td valign="top" colspan="2">' + good.Description + '</td></tr>';
    result += '<tr><td align="left" width="50%"><a href="#" id="showgood' + good.Id +
                '">Подробнее</a></td>';
    result += '<td align="right" width="50%"><a href="#" id="buygood' + good.Id +
                '">Купить</a></td></tr>';
    result += '</table';
    result += '</div>'
    result += '</div';
    return result;
}

function categoryClicked(id)
{
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
                $('#topPagesLine').append('<a id="btnpt' + i + '" href="#">' + (i+1) + '</a>');
                $('#bottomPagesLine').append('<a id="btnpb' + i + '" href="#">' + (i+1) + '</a>');
                $('#btnpt' + i).buttonMarkup({ inline: "true"});
                $('#btnpb' + i).buttonMarkup({ inline: "true"});
                if ((i+1) == currentPage) {
                    $("#btnpt" + i).addClass('ui-btn-active');
                    $("#btnpb" + i).addClass('ui-btn-active');
                }
            }
            $('#catalogGrid').html('');
            lts = ['a','b'];
            for (i = 0; i < 6; ++i) {
                good = goods[i];
                $('#catalogGrid').append(goodToDiv(good, lts[i%2]));
                $('#showgood' + good.Id).button();
                $('#buygood' + good.Id).button();
            }
        },
        "text"        
    );
} 