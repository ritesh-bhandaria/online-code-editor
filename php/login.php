<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'dbconnect.php';
        session_start();
        $email= $_POST["sname"];
        $password= $_POST["spwd"];

            $sql="SELECT * FROM users WHERE email='$email' AND confirm='$password'";

            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            $rows = mysqli_num_rows($result);

           // $result= mysqli_query($conn,$sql);
            echo "<h1>working</h1>";
            if ($rows==1) {
               //$rows = mysqli_fetch_assoc($result);
               $_SESSION['sname']  = htmlentities($_POST['sname']);
               $_SESSION['spwd']  = htmlentities($_POST['spwd']);
               echo "<script> alert('Logged in!')</script>";
               header("Location: http://localhost/online-compiler/main.php");//change here
                 exit();   
                   // header("Location: main.html");
                    //exit();
                }
            }else{
                echo "problem";
                header("Location: index.html?error=Incorect User name or password");
                exit();
            }
?>
