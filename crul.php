<!-- Menggunakan CRUL -->
<?php
$web = curl_init('https://himasif.id/');
curl_setopt($web,CURLOPT_RETURNTRANSFER,true);
curl_setopt($web,CURLOPT_HTTPHEADER,array('Content-Type' => 'application/json'));
echo $data = curl_exec($web);curl_close($web);
?>
