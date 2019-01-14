<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="hienthicauhinh" action="" method="post">
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>
<?php
    if(isset($_REQUEST['submit'])) {
        echo phpinfo();
    }

?>