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
        $n = $_POST['name'];
        $m = $_POST['message'];
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'project';
        $mysqli = new mysqli($server, $user, $pass, $db);
        if(!$mysqli){
        die('Connection failed');
        }else{
            if(isset($_POST['submit'])){
                $insert_query = "insert into message(name, message) values ('$n', '$m')";
                $insert_result = mysqli_query($mysqli, $insert_query);
                if($insert_result){
                    if(mysqli_affected_rows($mysqli)>0){
                        echo("message sent successfully");
                    }
                    else{
                        echo("please try again");
                    }
            }
        }
    }
    ?>
</body>
<p class="link"><a href="contact.php">Go to contact page</a></p>
</html>