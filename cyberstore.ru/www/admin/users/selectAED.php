<?php
    if(isset($_POST['formAddUser']))    {
        include 'formAddUser.php';
    }   
    else if(isset($_POST['formEditUser']))  {
        include 'formEditUser.php';
    }
    else if(isset($_POST['formDeleteUser']))  {
        include 'deleteUser.php';
    }
?>
