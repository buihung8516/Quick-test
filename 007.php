<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình chuyển hướng khi người dùng chọn trang và click submit</h1>
<?PHP
if(isset($_REQUEST['web'])){
    $ten = $_REQUEST['web'];
    header('Location:'.$ten);
}
?>
<form name="aa" method="post" action="">
    <p>
        Nhập trang web cần chuyển hướng đến :
        <input type="text" name="web" value="">
    </p>
    <input type="submit" value="Chuyển hướng">
</form>






</body>
</html>