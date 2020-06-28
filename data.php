<?php


class Position
{
    private $connection;


    public function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost; dbname=fort; charset=utf8', 'root', '');
    }

    public function insert($name, $description)
    {
        $result = null;
        if ($name && $description) {
            $result = $this->connection->query("INSERT INTO position (name,description) VALUE ('$name', '$description')");
        }
        return $result;
    }

    public function delete($id)
    {
        $result = null;
        if ($id) {
            $result = $this->connection->query("DELETE FROM position WHERE id = '$id'");
        }
        return $result;
    }

    public function deletePosName($deleteName)
    {
        $result = null;
        if ($deleteName) {
            $result = $this->connection->query("DELETE FROM position WHERE name = '$deleteName'");
        }
        return $result;
    }

    public function deletePosDesr($deleteDescr)
    {
        $result = null;
        if ($deleteDescr) {
            $result = $this->connection->query("DELETE FROM position WHERE description= '$deleteDescr'");
        }
        return $result;
    }

    public function search($search)
    {
        $result = null;
        if ($search) {
            $searchEC = $this->connection->query("SELECT * FROM position WHERE description LIKE '%" . $search . "%'
            or name LIKE '%" . $search . "%' or id LIKE '%" . $search . "%'");
            foreach ($searchEC as $search) {
                echo "id=" . $search['id'] . " " . $search['name'] . " " . $search['description'] . "<br>";
            };
            if (empty($search['id'])) {
                echo "Поиск не дал результатов" . "</br>";
            }

        }

    }


    public function showPos()
    {

        $allNames = $this->connection->query('SELECT * FROM position');
        foreach ($allNames as $name) {
            echo "<div class='Search-tile'>ID:</div>" . $name['id'] . "<div class='Search-tile'>Название:</div> " . $name['name'] . "<div class='Search-tile'>Описание:</div> " . $name['description'] . "<div class='search-tile-descr'></div>" . "<br>";
        };
        if (empty($name['id'])) {
            echo "Нет пока позиций" . "</br>";
        }
    }
}

$position = new Position();
$position->insert($_POST['name'], $_POST['description']);
$position->delete($_POST['delete']);
$position->deletePosName($_POST['deleteName']);
$position->deletePosDesr($_POST['deleteDescr']);
