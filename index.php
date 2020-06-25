<?

$connection = New PDO('mysql:host=localhost; dbname=fort; charset=utf8', 'root', '');
$aboutData = $connection->query("SELECT * FROM position");
$aboutData = $aboutData->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <link href="src/css/common.css" rel="stylesheet">
        <link href="src/css/common-adaptive.css" rel="stylesheet">
        <link href="src/css/faq.css" rel="stylesheet">
        <link href="src/css/faq-adaptive.css" rel="stylesheet">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Тестовое задание FORT IT</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="">
    <input type="submit">
</form>

</body>
</html>

