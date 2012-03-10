<?php
    function redirectToPage($pageAddr) {
?>
<html>
    <head>
        <meta http-equiv="Refresh" content="1;URL=<?php echo $pageAddr; ?>">
    </head>
    <body>
        Пожалуйста, ждите. Перенаправление...
        <script language="javascript" type="text/javascript">
            document.location=<?php echo $pageAddr; ?>;
        </script>
    </body>
</html>
<?php
}
?>
