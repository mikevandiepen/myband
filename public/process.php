<?php

if (isset($_POST['fill'])) {
    for ($i = 1; $i <= 100; $i++) {
        insert_line($i);
    }
    echo "Inserted 100 rows.";
}

if (isset($_POST['empty'])) {
    empty_table();
    echo "Cleared table content.";
}

function con_db() {
    $mysqli = new mysqli('localhost', 'root', '', '25700_db');
    if ($mysqli->connect_errno) {
        echo 'Connection error: ' . $mysqli->connect_errno;
    }
    return $mysqli;
}

function insert_line($i) {
    $mysqli = con_db();
    $title = 'Title '.  $i;
    $content = 'Content '. $i;
    $image = 'Image '. $i;
    $query = "INSERT INTO articles VALUES (0,?,?,?)";
    $stmt = $mysqli->prepare($query) or die ('Error preparing');
    $stmt->bind_param('sss', $title, $content, $image) or die ('Error binding Params');
    $stmt->execute() or die ('Error executing');
}

function empty_table() {
    $mysqli = con_db();
    $query = "TRUNCATE articles";
    $stmt = $mysqli->prepare($query) or die ("Error preparing 2.");
    $stmt->execute() or die ("Error executing.");
}

function get_mailadresses() {
    $mysqli = con_db();
    $query = "SELECT mailadres FROM niewsbrief";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_result($mailadresses);
    $stmt->execute();
    $result = array();

    while ($stmt->fetch()) {
        $results[] = $mailadresses;
    }

    return $result;
}


function get_articles() {
    $mysqli = con_db();
    $query = "SELECT title FROM articles";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_result($title);
    $stmt->execute();
    $result = array();

    while ($stmt->fetch()) {
        $results[] = $title;
    }

    return $result;
}
