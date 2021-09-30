

 <?php

 require_once 'fundedgamedbfunction.php';
 $db = dbConnection();
 $result = dbMake($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>collection</title>
</head>
<body>
<h2>UK Games Funded</h2>
<table>
    <tr>
        <th>Title</th>
        <th>Year Funded</th>
        <th>Theme</th>
        <th>Genre</th>
        <th>Add Rating</th>
    </tr>

<?php
    echo gamefundedlist($result);
?>


</table>
</body>
</html>