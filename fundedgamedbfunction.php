<?php

//creating a re-useable function
// you need to create the function name
function dbConnection()
{
//    then add the command you want the function to use
    $db = new PDO('mysql:host=db; dbname=ukgamesfunded', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//    you need to tell the function to return/send the data
    return $db;
}

function dbMake($db)
{
    $query = $db->prepare("SELECT `title`, `year` , `theme` , `genre` , `rating`  FROM `game`");
    $query->execute();
    $result = $query->fetchAll();

    return $result;
}

function gamefundedlist($result)
{
    $output = '';
//    telling us the output can be found within the 4 each parameters and to follow the format as listed
    foreach ($result as $game) {
        $output .= '<tr>';
        $output .= '<td>' . $game['title'] . '</td>';
        $output .= '<td>' . $game['year'] . '</td>';
        $output .= '<td>' . $game['theme'] . '</td>';
        $output .= '<td>' . $game['genre'] . '</td>';
        $output .= '<td>' . $game['rating'] . '</td>';
        $output .= '</tr>';
    }
    return $output;
}