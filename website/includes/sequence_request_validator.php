<?php
$to      = 'walter.dastru@gmail.com';
$subject = 'the subject';
$message = 'hello';

mail($to, $subject, $message, $headers);
?>