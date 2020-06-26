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
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Тестовое задание FORT IT</title>
</head>
<body>
<div id="header">
    <div>
        <div class="title">Добавление позиций</div>
        <form action="" method="post">
            <div class="text-descr">Введите название позиции</div>
            <input type="text" name="name" required>
            <div class="text-descr">Введите описание позиции</div>
            <textarea name="description" id="" cols="20" rows="5"></textarea>
            <button type="submit">Добавить</button>
        </form>
        <?
        if ($_POST['name'] && $_POST['description']) {
            $newName = $_POST['name'];
            $newDesc = $_POST['description'];
            $connection->query("INSERT INTO position (name,description) VALUE ('$newName', '$newDesc')");
        } ?>
        <div class="text-delete"> Удаление позиций по ID</div>
        <form action="" method="post">
            <input type="text" name="delete">
            <button type="submit">Удалить</button>
        </form>
        <?
        if ($_POST['delete']) {
            $delete = $_POST['delete'];
            $deleteID = $connection->query("DELETE FROM position WHERE id = '$delete'");
        } ?>

        <div class="text-delete"> Удаление позиций по названию</div>
        <form action="" method="post">
            <input type="text" name="deleteName">
            <button type="submit">Удалить</button>
        </form>
        <?
        if ($_POST['deleteName']) {
            $deleteName = $_POST['deleteName'];
            $connection->query("DELETE FROM position WHERE name = '$deleteName'");
        } ?>
        <div class="text-delete"> Удаление позиций по описанию</div>
        <form action="" method="post">
            <input type="text" name="deleteDescr">
            <button type="submit">Удалить</button>
        </form>
        <?
        if ($_POST['deleteDescr']) {
            $deleteDescr = $_POST['deleteDescr'];
            $connection->query("DELETE FROM position WHERE description = '$deleteDescr'");
        } ?>
        <div id="search-title">Поиск</div>
        <form action="" method="post">
            <input type="search" id="search" name="search">
            <button type="submit" id="search-btn">Поиск</button>
        </form>
        <div id="search-show">
            <?
            if ($_POST['search']) {
                $search = $_POST['search'];
                $searchEC = $connection->query("SELECT * FROM position WHERE description LIKE '%" . $search . "%'");
                $searchName = $connection->query("SELECT * FROM position WHERE name LIKE '%" . $search . "%'");
                $searchID = $connection->query("SELECT * FROM position WHERE id LIKE '%" . $search . "%'");
                foreach ($searchEC as $search) {
                    echo "id=" . $search['id'] . " " . $search['name'] . " " . $search['description'] . "<br>";
                };
                foreach ($searchName as $search) {
                    echo "id=" . $search['id'] . " " . $search['name'] . " " . $search['description'] . "<br>";
                };
                foreach ($searchID as $search) {
                    echo "id=" . $search['id'] . " " . $search['name'] . " " . $search['description'] . "<br>";
                };

                if (empty($search['id'])) {
                    echo "Поиск не дал результатов" . "</br>";
                }
            }

            ?>
        </div>
    </div>
    <div id="show-position">
        <div class="title">Позиции</div>
        <?
        $allNames = $connection->query('SELECT * FROM position');
        foreach ($allNames as $name) {
            echo "<div class='Search-tile'>ID:</div>" . $name['id'] . "<div class='Search-tile'>Название:</div> " . $name['name'] . "<div class='Search-tile'>Описание:</div> " . $name['description'] . "<div class='search-tile-descr'></div>" . "<br>";
        };
        if (empty($name['id'])) {
            echo "Нет пока позиций" . "</br>";
        }
        ?>
    </div>
</div>
</body>
</html>

