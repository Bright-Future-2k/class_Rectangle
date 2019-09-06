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
<link rel="stylesheet" type="text/css" href="rect.css">
<?php include "Rectangle.php"; ?>
<form method="post">
    <table>
        <tr><th colspan="3">Rectangular Calculator</th></tr>
        <tr>
            <td>Width: <input id="width" type="text" name="width" placeholder="enter width"></td>
            <td>Height: <input id="height" type="text" name="height" placeholder="enter height"></td>
            <td><input type="submit" name="result" value="Result"></td>
        </tr>
    </table>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] = 'POST'){
    $width = $_POST['width'];
    $height = $_POST['height'];
    $result = $_POST['result'];

    $rect = new Rectangle($width,$height);

    echo "Width: ".$rect->width."<br>";
    echo "Height: ".$rect->height."<br>";
    echo "Area: ".$rect->areaRect()."<br>";
    echo "Display: ".$rect->perimeter()."<br>";
    echo $rect->display()."<br>";
}
?>



</body>
</html>




