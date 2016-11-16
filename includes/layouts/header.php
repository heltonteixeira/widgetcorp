<?php
if (!isset($layout_context)) {
    $layout_context = "public";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiget Corp <?php echo $layout_context == ("admin") ? "Admin" : "" ; ?></title>
    <link rel="stylesheet" href="css/public.css">
</head>
<body>
    <div id="header">
        <h1>Widget Corp <?php echo $layout_context == ("admin") ? "Admin" : ""; ?></h1>
    </div>