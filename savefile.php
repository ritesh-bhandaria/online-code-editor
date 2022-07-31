<?php
    include 'php/dbconnect.php';
    include 'main.php';
   echo "<h1>$myPhpVar</h1>";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $filename= $_POST["filename"];
    $sql="INSERT INTO `files` (`owner`, `filename`, `type`, `data`) VALUES ('$universalemail', '$filename', 'null', '$data')";
        $result= mysqli_query($conn,$sql);
        if($result){
            echo '<script>
            alert("successfully saved");
            window.location.href="http://localhost/online-compiler/main.php";
            </script>';
        }
        else{
            echo '<script>
            alert("error in saving the file");
            window.location.href="http://localhost/online-compiler/main.php";
            </script>';
        }
    }
?>