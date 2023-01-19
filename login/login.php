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

            $query = "select * from clienti where nume = '$nume' limit 1";

            $result =  mysqli_query($con, $query);

            if($result) {

                if($result && mysqli_num_rows($result) > 0) {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['parola'] === $parola){
                        
                        $_SESSION['id_client'] = $user_data['id_client'];
                        header("Location: index.php");
                        die;
                    }
                }
            }

            

        }else{
        
            echo "Please enter some valid information!";
        }
}

?>

<!DOCTYPE html>
<html>
    <title>Login</title>
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
                <div style="font-size: 20px; margin: 10px; color: white;">Login</div>

                <input id="text" name="username"><br></br>
                <input id="text" name="password"><br></br>

                <input id="button" type="submit" value="Login"><br></br>

                <a href="signup.php">Click to Signup</a><br></br>

            </form>
        </div>

    </body>
</html>