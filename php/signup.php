<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'dbconnect.php';
        $name= $_POST["name"];
        $email= $_POST["email"];
        $password= $_POST["password"];
        $confirm=$_POST["confirm"];

        //$query="SELECT * FROM users WHERE (email=$email)";
        //$res= mysqli_query($conn,$query);
        //if($res){
          //  echo '<script>
            //    alert("user already exists please login with another email");
              //  window.location.href="http://localhost/online-compiler/";
           // </script>';
        //}
        //else{
            $sql="INSERT INTO `users` (`name`, `email`, `password`, `confirm`) VALUES ('$name', '$email', '$password', '$confirm')";
            $result= mysqli_query($conn,$sql);
            if($result){
                echo '<script>
                alert("successfully registered");
                window.location.href="http://localhost/online-compiler/";
                </script>';
            }
            else{
                echo '<script>
                alert("error in registering the user please try again (user may already be existing)");
                window.location.href="http://localhost/online-compiler/";
                </script>';
            }
        }
    //}
?>
