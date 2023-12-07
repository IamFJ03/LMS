<?php
$conn = mysqli_connect('localhost','root','','lms');

if(!$conn)
  echo "Database Error";
else{
  if(isset($_POST['authenticate'])){
  $name=$_POST['name'];
  $pass = $_POST['password'];
  $sql = "SELECT * FROM `adminstrator` WHERE password='$pass';";
  $result = mysqli_query($conn,$sql);
  if($result)
  header('location:profile.php');
  else
  $alert = "<script>alert('Username or password is incorrect');</script>";
  echo $alert;
}
}
?>

<html>
    <head>
        <style>
        body{
            margin:0;
            padding:0;
        }
        .head{
            height:15%;
            width:100%;
            background-color: rgb(199, 207, 161);
            font-size:2vw;
        }
        .frame{
            height:45%;
            width:35%;
            border-radius:10px;
            background-color: rgb(199, 207, 161);
            margin:10% 0 0 30%;
            box-shadow:6px 6px 40px black;
        }
        input{
            font-size:1.5vw;
            margin-left:5%;
            margin-top:-4%;
        }
        </style>
    </head>
    <body>
        <div class="head">
        <h2 style="margin-left:30%;padding-top:2%">USER-AUTHENTICATION</h2>
        </div>
        <form class="frame" method="post">
        <h3 style="font-size:2vw;margin-left:5%;padding-top:2%">User name:</h3>
        <input type="text" name="name" placeholder="Enter Admin-name">
        <h3 style="font-size:2vw;margin-left:5%;padding-top:2%">Password:</h3>
        <input type="password" name="password" placeholder="Enter User Password"><br>
        <button style="margin:4% 0 0 5%;font-size:1.5vw;cursor:pointer" name="authenticate">Authenticate</button>
        </form>
    </body>
</html>