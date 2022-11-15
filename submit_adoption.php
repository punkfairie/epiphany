<?php

$name = $_POST['name'] ?: null;
$email = $_POST['email'] ?: null;
$site = $_POST['site'] ?: null;
$petz = $_POST['petz'] ?: null;

$log = fopen('adoption_log.txt', 'a');

$txt = $name . "\n" . $email . "\n";
$txt = $site ? $txt . $site . "\n" : $txt;
$txt .= $petz . "\n\n";

fwrite($log, $txt);
fclose($log);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/stuff.css">
    <title></title>
</head>
<body>

<div class="text">
    <h2>Success!</h2>
</div>

</body>
</html>