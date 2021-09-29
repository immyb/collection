<?php


$db = new PDO('mysql:host=db; dbname=ukgamesfunded', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `title`, `year` , `theme` , `genre` , `rating`  FROM `game`");

$query->execute();

$result = $query->fetchAll();

echo '<h2>UK Games Funded</h2>';

?>
<table>
    <tr>
        <th>Title</th>
        <th>Year Funded</th>
        <th>Theme</th>
        <th>Genre</th>
        <th>Add Rating</th>
    </tr>
<?php
foreach ($result as $game) {
    echo '<tr>';
    echo '<td>' . $game['title'] . '</td>';
    echo '<td>' . $game['year'] . '</td>';
    echo '<td>' . $game['theme'] . '</td>';
    echo '<td>' . $game['genre'] . '</td>';
    echo '<td>' . $game['rating'] . '</td>';
    echo '</tr>';
}
?>
</table>


