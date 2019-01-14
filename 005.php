<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="demsokytu" action="" method="post">
    <P>
        <label>chuỗi :</label>
        <input type="text" name="capacity" value="" placeholder="Nhập vào chuỗi cần đếm">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>
<?php
if(isset($_REQUEST['submit'])){
    $a= $_REQUEST['capacity'];
    echo strlen($a);

}
?>