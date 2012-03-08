var currentCategory = -1;
var goodsOnPage = 6;
var currentPage = -1;
var currentSkip = 0;

function goodToDiv(good, letter)
{
    if (good.PictureId == null)
        picpath = './../0a.jpg';
    else picpath = './../pictures/m' + good.PictureId + '.jpg';
    if (good.Description.length > 60)
        description = good.Description.substring(0, 60) + '...';
    else description = good.Description;
    result =  '<div class="ui-block-'+ letter + '">';
    result += '<div class="ui-bar ui-bar-c" style="height:250px;">';
    result += '<table border="0px" width="100%" height="100%">';
    result += '<tr><td align="center" colspan="2">' + good.Name + '</td></tr>';
    result += '<tr><td align="center" colspan="2"><img src="' + picpath + '"/></td></tr>';
    result += '<tr><td valign="bottom" colspan="2">' + description + '</td></tr>';
    result += '<tr><td align="left" width="50%"><a href="good.php?goodId=' + good.Id + '" target="_blank" id="showgood' + good.Id +
                '">Подробнее</a></td>';
    result += '<td align="right" width="50%"><a href="#" id="buygood' + good.Id +
                '">Купить: ' + good.PriceCurrent + ' кб</a></td></tr>';
    result += '</table';
    result += '</div>';
    result += '</div';
    return result;
}

function categoryClicked(id)
{
    currentCategory = id;
    $.post(
        "loadGoods.php",
        {
            categoryId: id,
            count: goodsOnPage,
            skip: currentSkip
        },
        function(data, textStatus, jqXHR) {
            response = eval("(" + data + ")");
            pageCount = response.pageCount;
            currentPage = response.currentPage - 1;
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
                if (i == currentPage) {
                    $("#btnpt" + i).addClass('ui-btn-active');
                    $("#btnpb" + i).addClass('ui-btn-active');
                } else {
                    $("#btnpt" + i).attr('onclick', 'pageClicked(' + i + ');');
                    $("#btnpb" + i).attr('onclick', 'pageClicked(' + i + ');');
                }
            }
            $('#catalogGrid').html('');
            lts = ['a','b'];
            for (i = 0; i < goodsOnPage; ++i) {
                good = goods[i];
                $('#catalogGrid').append(goodToDiv(good, lts[i%2]));
                $('#showgood' + good.Id).button();
                $('#buygood' + good.Id).button();
            }
        },
        "text"        
    );
}

function pageClicked(num)
{
    $.mobile.silentScroll(0);
    currentPage = num;
    currentSkip = num * goodsOnPage;
    categoryClicked(currentCategory);
}

function countChanged()
{
    goodsOnPage = $('#select-count').val();
    categoryClicked(currentCategory);
}