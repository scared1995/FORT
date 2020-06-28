<?
require 'data.php';
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
        <div class="text-delete"> Удаление позиций по ID</div>
        <form action="" method="post">
            <input type="text" name="delete">
            <button type="submit">Удалить</button>
        </form>
        <div class="text-delete"> Удаление позиций по названию</div>
        <form action="" method="post">
            <input type="text" name="deleteName">
            <button type="submit">Удалить</button>
        </form>

        <div class="text-delete"> Удаление позиций по описанию</div>
        <form action="" method="post">
            <input type="text" name="deleteDescr">
            <button type="submit">Удалить</button>
        </form>

        <div id="search-title">Поиск</div>
        <form action="" method="post">
            <input type="search" id="search" name="search">
            <button type="submit" id="search-btn">Поиск</button>
        </form>
        <div id="search-show">
            <? $position->search($_POST['search']);?>
        </div>
    </div>
    <div id="show-position">
        <div class="title">Позиции</div>
        <? $position->showPos();?>
    </div>
</div>
</body>
</html>

