<!doctype html>
<html lang="en">
    <head>
        <meta name="keywords" content="comments, input, data">
        <?php
            include 'assets/inc/meta.php';
        ?>
        <title>Comments</title>
    </head>
    <body>
        <form onsubmit='return validateInput()' action='./assets/inc/post_server_validation.php' method='get' name='basic_info'>
            <p>first name:<input type='text' id='fname' placeholder='first name' value='' name='first_name' required></p>
            <p>last name:<input type='text' id='lname' placeholder='last name' value='' name='last_name' required></p>
            <p>email:<input type='text' id='email' placeholder='email@mail.com' value='' name='email' required></p>
            <input type='submit' name='submit' value='send form'>
            <textarea type ='text' id='textfield' placeholder='comments' value='' name='comment' height='6' required></textarea>
        </form>
    </body>
<html>

