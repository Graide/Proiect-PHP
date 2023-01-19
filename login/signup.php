<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $parola = $_POST['parola'];
        $telefon = $_POST['telefon'];
        $email= $_POST['email'];
        $oras = $_POST['oras'];
        $judet = $_POST['judet'];

        if(!empty($nume) && !empty($prenume) && !empty($parola) && !empty($telefon) && !empty($email) && !empty($oras) && !empty($judet) && !is_numeric($nume) && !is_numeric($prenume) && is_numeric($telefon) && is_numeric($telefon) && !is_numeric($oras) && !is_numeric($judet)) {

            $user_id = random_num(20);
            $query = "insert into clienti (id_client,nume,prenume,parola,telefon,email,oras,judet) values ('$id_client','$nume','$prenume','$parola','$telefon','$email','$oras','$judet')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;

        }else{
            
            echo "Please enter some valid information!";
        }
    }

?>

<!DOCTYPE html>
<html>
    <title>Signup</title>
    <body>
        
        <style type="text/css">
            #text{

                height: 25px;
                border-radius: 5px;
                padding: 4px;
                border: solid thin #aaa;
                width: 100%;
            }

            #button{
                
                padding: 10px;
                width: 100px;
                color: white;
                background-color: Lightblue;
                border: none;
            }

            #box{

                background-color: grey;
                margin: auto;
                width: 300px;
                padding: 20px;
            }
        
        </style>

        <div id="box">

            <form method="post">
                <div style="font-size: 20px; margin: 10px; color: white;">Signup</div>

                <input id="text" name="username"><br></br>
                <input id="text" name="password"><br></br>

                <input id="button" type="submit" value="Signup"><br></br>

                <a href="login.php">Click to Login</a><br></br>

            </form>
        </div>

    </body>
</html>