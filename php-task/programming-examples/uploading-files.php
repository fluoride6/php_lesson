<?php
if (isset($_POST['upload'])) {
    $blacklist = ['.php', '.phtml', '.php3', '.php4', '.html', '.htm'];
    foreach ($blacklist as $item) {
        if (preg_match("/$item$/", $_FILES['mus']['name'])) exit('Расширение файла не подходит!');
    }
    $upload = 'music/'.$_FILES['mus']['name'];
    move_uploaded_file($_FILES['mus']['tmp_name'], $upload);
}
?>
<form name="upload" action="uploading-files.php" method="post" enctype="multipart/form-data">
    <p>
        <input type="file" name="mus" />
    </p>
    <p>
        <input type="submit" name="upload" value="Отправить" />
    </p>
</form>
