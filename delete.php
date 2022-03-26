<?php

$title = "delete";
require_once 'includes/header.php';
require_once 'db/conn.php';

if (!$_GET['id']) {
    echo "Error";
} else {
    $id = $_GET['id'];

    $result = $crud->deleteEmploye($id);

    if ($result) {
        header("Location:attendees");
    } else {
        echo "Something went wrong";
    }
}


