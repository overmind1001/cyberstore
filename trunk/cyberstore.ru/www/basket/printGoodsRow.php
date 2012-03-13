<?php
    function printGoodsRow($goodInBasket)
    {
        $good = $goodInBasket->getGoods();
        
        $name=$good->getname();
        $description=$good->getDescription();
        $price=$good->getPriceCurrent();
                                    
        if($good->getPictureId()!=NULL)
        {
            $picture_path = './../pictures/'."m".$good->getPictureId().'.jpg';
        }
        else
        {
            $picture_path='./../pictures/m0.jpg';
        }
                                    
        echo "<tr>";
        echo "<td class='pic'>
                <table style='align: center;'>
                    <tr><td class='mainLeft'><img src='$picture_path'></td></tr>
                    <tr><td class='mainLeft'>$name</td></tr>
                    <tr><td class='mainLeft'>Цена: $price квазибит</td></tr>
                </table>
              </td>
              <td class='descr'>$description</td>";
        echo '</tr>';
    }
?>
