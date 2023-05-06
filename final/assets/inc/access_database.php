<?php
    $conn = mysqli_connect('localhost','fx6164','Polyhedron2&perimeter','fx6164');
    if(!$conn){
        echo 'connection failed: ' . mysqli_connect_error();
        exit();
    }else{
        echo 'connected';
    }
?>
