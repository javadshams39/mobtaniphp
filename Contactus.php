<?php

$mjsh = new mysqli('sql102.b6b.ir', 'b6bi_27935585', 'mohammad991400', 'bitpaydb'); 
$sql = "INSERT INTO message(title, body)
		VALUES('{$_POST['title']}', '{$_POST['body']}')";
$result = $mjsh -> query( $sql );
 
$mjsh -> close();

echo 'پیام با موفقیت ثبت شد';
?>