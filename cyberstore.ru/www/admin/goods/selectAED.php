<?php
    if(isset($_POST['formAddGood']))    {
        include 'formAddGood.php';
    }   
    else if(isset($_POST['formEditGood']))  {
        include 'formEditGood.php';
    }
    else if(isset($_POST['formDeleteGood']))  {
        include 'formDeleteGood.php';
    }
?>
