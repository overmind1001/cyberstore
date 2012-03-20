<?php
    function printGoodsRow($goodInBasket)
    {
        $good = $goodInBasket->getGoods();
        
        $name=$good->getname();
        $description=$good->getDescription();
        $price=$good->getPriceCurrent();
        $count=$goodInBasket->getCount(); 
                                    
        if($good->getPictureId()!=NULL)
        {
            $picture_path = './../pictures/'."m".$good->getPictureId().'.jpg';
        }
        else
        {
            $picture_path='./../pictures/m0.jpg';
        }
                                    
        echo "<tr>";
        echo "<td class='pic' >
                <table style='align: center;'>
                    <tr><td class='mainLeft'><img src='$picture_path'></td></tr>
                    <tr><td class='mainLeft'>$name</td></tr>
                    <tr><td class='mainLeft'>Цена: $price квазибит</td></tr>
                </table>
              </td>
              <td class='descr'>$description</td>
              <td>
        
                    <table>
                        <tr><td align='top | left'>
                            <button>X</button>
                        </td></tr>
                        <tr align='bottom'><td align='center | bottom'>$count</td></tr>
                        <tr align='bottom'><td align='center | bottom'>
                            <div id='set'>
                                <button>+</button>
                                <button>-</button>
                            </div>
                        </td></tr>
                    </table>
        
              </td>";
        echo '</tr>';
    }
?>
