<?php
require('stripe-php-master/init.php');

$publishableKey=
"pk_test_51JfUdxE7o9QwvWvs82U9u42Ej91ArS46nsLLREjkbmEZZo9oqMEghIU7wopP6kMfahEYQcL2YjVt0IoPxEkvzZXN00SNMDTZSw";

$secretKey=
"sk_test_51JfUdxE7o9QwvWvs2hUtkMpihgpwutQIRCS8JI0WYJYlUFpKdiEeLMej2WXHInQ12ZVQwqTUPrunjMLMAm8j8Olr00wi6kb1ul";

\Stripe\Stripe::setApiKey($secretKey);
?>