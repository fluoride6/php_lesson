<?php

class Valid
{
    public static function validEmail($email)
    {
        $reg = '/[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+([a-z]){2,4}/';
        if (empty($email)) {
            throw new Exception('E-mail не указан');
            return;
        } else if (strlen($email) > 40) {
            throw new Exception('Слишков длинный e-mail');
            return;
        } else if (preg_match($reg, $email)) return;
        else {
            throw new Exception('E-mail указан не правильно!');
            return;
        }
    }
}

$email = '';
try {
    Valid::validEmail($email);
} catch (Exception $e) {
    echo $e->getMessage() . '<br/>';
}
$email = 'HelloHelloHello';
try {
    Valid::validEmail($email);
} catch (Exception $e) {
    echo $e->getMessage() . '<br/>';
}
$email = 'hellohellohellohellohellohellohellohellohellohellohellohellohellohellohellohello';
try {
    Valid::validEmail($email);
} catch (Exception $e) {
    echo $e->getMessage() . '<br/>';
}
?>
