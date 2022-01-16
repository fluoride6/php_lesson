< CODEPAGE = 65001 %>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Farms Main</title>
</head>
<body>
<?php
$db='C:\\Users\\User\\Desktop\\project_db\\db.accdb';
if(!file_exists($db)){
    die('Could not find Database file');
}else{
    echo 'DB loaded successfully';
}
$db=new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$db; Uid=; Pwd=;");
//$query="SELECT хозяйства.[код хозяйства], хозяйства.[название хозяйства], [хозяйства беларусь].[адрес хозяйства], [общие сведения].[дата основания хозяйства], [хозяйства беларусь].[номер телефона], [общие сведения].[средняя зарплата]
//FROM (хозяйства INNER JOIN [общие сведения] ON хозяйства.[код хозяйства] = [общие сведения].[код хозяйства]) INNER JOIN [хозяйства беларусь] ON хозяйства.[код хозяйства] = [хозяйства беларусь].[код хозяйства];
//";

//$db->query('SET  utf8');
$query="select Code, CStr(First) as First_, CStr(Second) as Second_ from Master_table";
$result= $db -> query($query);

//echo "<pre>";
//print_r($result->fetchAll())
//$row = $result -> fetchAll();
//echo gettype($row);

//echo("<script>console.log('PHP: " . $row[2]['First'] . "');</script>");

?>
<p>about page</p>


<table>
    <tr>
        <th>Code</th>
        <th>First</th>
        <th>Second</th>
    </tr>
    <?php foreach ($result->fetchAll() as $key=> $row) { ?>
        <tr>
            <th><?php echo $row['Code']; ?></th>
            <th><?php echo utf8_encode($row['First_']); ?></th>
            <th><?php echo utf8_encode($row['Second_']); ?></th>
        </tr>

    <?php } ?>
</table>

<button><a href = "index.html">На главную</a></button>
</body>
</html>
