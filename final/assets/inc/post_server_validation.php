<?php 
    include ('access_database.php');
    if(!empty($_POST['first_name'])&& !empty($_POST['last_name'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $sql='INSERT INTO `comments` (`firs_tname`,`last_name`) VALUE (?,?);';
        // $stmt=$conn-prepare($sql);
        // $stmt->bind_param('s',$first_name,$last_name);
        // $stmt->execute();
        // $result=$stmt->get_result();
    }
?>