<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
<?php
	ob_start();
	ob_clean();
    $page_title ="Success";
    $step = 'Congratulations';
    $step_name = 'Congratulations you have successfully added your payment information!';
    include('header.php');
    
?>
</html>