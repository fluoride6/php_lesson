<?php
if (!empty($_GET['Google'])){
    header('Location: https://google.ru');
}
if (!empty($_GET['VK'])){
    header('Location: https://vk.com');
} if (!empty($_GET['Myrusakov'])){
    header('Location: https://myrusakov.ru');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="index.php" method="get">
    <input type="submit" value="Google" name="Google">
    <input type="submit" value="VK" name="VK">
    <input type="submit" value="Myrusakov" name="Myrusakov">
</form>
</body>
</html>

 <?php
//header('Location: /a.php');
//exit;

header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: no-cache, must-revalidate');
header('Cache-Control: post-check=0,pre-check=0', false);
header('Cache-Control: max-age=0', false);
header('Pragma: no-cache');
?>
