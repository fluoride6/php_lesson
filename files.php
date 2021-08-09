<?php
$textarea = false;
if (isset($_POST['submit'])) {
    $textarea = htmlspecialchars($_POST['textarea']);   //преобразунм в html сущности
    if ($textarea !== false) {
        file_put_contents('a.txt', $textarea);
        echo 'Сохранение прошло успешно';
    }
    if (empty($textarea)) echo 'Вы не ввели текст';
}
if (isset($_POST['submit2'])) {
    $filename = 'a.txt';
    if (file_exists($filename)) {
        $str = file_get_contents('a.txt');
        echo '<br/> В файл записано: ' . $str . '<br/>';
    } else  echo "Файл не существует";
}
if (isset($_POST['submit3'])) {
    unlink('a.txt');
    echo '<br/> Файл не существует';
}

?>
<form name="myform" action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
    <div>
        Введите текст: <textarea rows="10" cols="45" name="textarea"><?= $textarea ?></textarea>
    </div>
    <div>
        <input type="submit" name="submit" value="Сохранить"/>
        <div>
            <input type="submit" name="submit2" value="Загрузить"/>
        </div>
        <div>
            <input type="submit" name="submit3" value="Удалить"/>
        </div>
    </div>
</form>
