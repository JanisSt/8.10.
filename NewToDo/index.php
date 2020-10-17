<?php
require_once 'Task.php';

require_once 'TaskStorage.php';

$todo = $_POST['add'] ?? null;
$delete = $_POST['delete'] ?? null;

$file = new TaskStorage('todo.csv');

$file->addNew($todo);
$file->toCSV($delete);

?>

<html lang="en">
<body>

<form action="index.php" method="post">
    <label for="add">Add New</label>
    <input type="text" id="add" name="add"/>
    <button type="submit">Add</button>
</form>

<form action="index.php" method="post">

    <?php foreach ($file->getToDos() as $todo): ?>
            <li>
                <label for="delete"><?= $todo->getTask(); ?></label>
                <button type="submit" id="delete" name="delete" value="<?= $todo->getID(); ?>">[X]</button>
            <?php if ($delete) {header("Refresh:0");}
?>
            </li>

    <?php endforeach;?>
</form>
</body>
</html>
