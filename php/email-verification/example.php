<?php
include_once 'class.verifyEmail.php';

$email = 'noreplybbbbbbb@gmail.com';

$vmail = new verifyEmail();

if ($vmail->check($email)) {
    echo 'email &lt;' . $email . '&gt; exist!';
} elseif ($vmail->isValid($email)) {
    echo 'email &lt;' . $email . '&gt; valid, but not exist!';
} else {
    echo 'email &lt;' . $email . '&gt; not valid and not exist!';
}
?>
