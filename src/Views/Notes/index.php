<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
<body>
    <h1>Tasks</h1>
    <div>
        <a href= "./CRUD_mvc/Notes/create/" class="">+ Add new note</a>
        <ul>
            <li>ID</li>
            <li>Tile</li>
            <li>Description</li>
            <li class="">Action</li>
        </ul>
        <?php
        foreach ($notes as $note){
            echo '<ul class ="">';
            echo "<li>".$note['id']."</li>";
            echo "<li>".$note['title']."</li>";
            echo "<li>".$note['description']."</li>";
            echo "<li>"."</li>";
            echo '</ul>';
        }
        ?>
    </div>
</body>
</html>