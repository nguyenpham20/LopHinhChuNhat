<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "index.php";
//Khoi tao doi tuong thuoc lop Rectangle
$width=10;
$height = 20;

$rectangle = new Rectangle($width, $height);
//goi phuong thuc cua lop thong qua doi tuong rectangle  de hien thi
echo $rectangle->width;
echo $rectangle->height;

$rectangle ->width = 30;
$rectangle->height = 20;

echo $rectangle->height;
echo $rectangle->width;
echo $rectangle->getArea();
echo $rectangle->getPerimeter();
echo ("your rectangle" . $rectangle->display());
?>


</body>
</html>