<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $userName = $_POST['un'];
    $password = $_POST['pwd'];
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'project';
    $mysqli = new mysqli($server, $user, $pass, $db);
    if(!$mysqli){
        die('Connection failed');
    }else{
        if(isset($_POST['submit'])){
            $insert_query = "insert into login(username, password) values ('$userName', '$password')";
            $insert_result = mysqli_query($mysqli, $insert_query);
            if($insert_result){
                if(mysqli_affected_rows($mysqli)>0){
                    echo("You have been Registered.");
                }
                else{
                    echo("Failed to register.");
                }
            }
        }
    }
    ?>
</body>
<p class="link"><a href="login.php">Go to login page</a></p>
</html>