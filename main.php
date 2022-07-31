<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CODE</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<?php
    include 'php/dbconnect.php';
    session_start();
    $email = $_SESSION['sname'];
    $password = $_SESSION['spwd'];
    //$link = mysqli_connect('localhost', 'root', '', 'online-compiler');
    //if(!$link){
      //  die('connection failed: ');
//}
$query="SELECT * FROM users WHERE email='$email'";#needs work from login page
$result=mysqli_query($conn, $query);
while($row=mysqli_fetch_array($result))
{
  $universalemail=$row['email'];
  //echo "<h1>$universalemail</h1>";
}
?>


    <nav class="navbar">
        <div class="container-fluid">
            <span class="heading">ONLINE CODE EDITOR PROJECT</span>
        </div>
    </nav>
  <div class="maindiv">
    <div class="files">
        <p><b>Files</b></p>
        <br>
        <?php
        //$qu="SELECT "
        
        ?>
    </div>
    <div class="codearea">
        <div class="editor">
            

            <ul class="nav justify-content-end editor_nav">
                <li class="nav-item">
                    <div class="choices" style="margin: 5px;">
                        <select class="form-select" aria-label="Default select example" name="language" id="language" onchange="changeLanguage()">
                            <option value="c">C</option>
                            <option value="cpp">C++</option>
                            <option value="java">Java</option>
                            <option value="python">Python</option>
                        </select>
                    </div>
                </li>
                <li class="nav-item">
                    <button class="btn btn-success" onclick="executeCode()" style="margin: 5px;">Run</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-secondary" style="margin: 5px;" onclick="downloadCode()">Download</button>
                </li>
                <li class="nav-item">
                    <button type='button' class='btn btn-light' style="margin: 5px;" data-bs-toggle='modal' data-bs-target='#exampleModal'>Save</button>
                </li>
              </ul>
            <div class="edit" id="ace_editor">
                
            </div>
        </div>
        <div class="output">
            <div class="output_heading">
                <p>Output<p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Save as</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="savefile.php" method="post">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="filename" id="filename">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Save changes</button>
                </div>

                </form>
                
          </div>
        </div>
      </div>




  </div>
<!--<script>
    let langu = $("#language").val();
    document.cookie = "js_lang_var = " + langu
</script>
   
    // $myPhpVar= $_COOKIE['js_lang_var'];
    
-->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--<script src="js/test.js"></script>-->
<script src="js/ide.JS"></script>
<script src="js/lib/ace.js"></script>
<script src="js/lib/theme-nord_dark.js"></script>
<script src="js/lib/theme-monokai.js"></script>
<script src="js/lib/theme-one_dark.js"></script>

</body>
</html>