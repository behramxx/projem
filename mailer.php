<?php

$sSubject = $_POST['name']; //bu index sayfasında söylediğim name parametresi ile gelen datanın alınması ve başka ssubject değişkenine atıyor. Aşağıda da bu değişkendeki değer, mailler ile post ediliyor.
$sBody = $_POST['email']; // burasıda aynı mantık.

echo $sSubject.'<br>';
echo $sBody;