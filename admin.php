<?php
$conn = mysqli_connect('localhost','root','','lms');

if(!$conn)
    echo "Error";
else{
    if(isset($_POST["submit"])){
        if (empty($_POST['first']) || empty($_POST['admin']) || empty($_POST['pass'])){
            $error= 'all fields are required' ;
        }
        if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['admin']) && !empty($_POST['pass'])){
            $first = $_POST['first'];
            $last = $_POST['last'];
            $admin = $_POST['admin'];
            $password=$_POST['pass'];
                // Store the user data in a database or a file
                $sql="INSERT INTO `adminstrator`(`first`, `last`, `admin`,`password`) VALUES('$first', '$last', '$admin','$password');";
                $result=mysqli_query($conn,$sql);
                if($result){
                    // Redirect the user to the dashboard
                    
                    $_SESSION['logged_in'] = true;
                    echo '<script>alert("Profile Created")</script>';
                    header('Location: profile.html');
                   }
                    exit;
                }
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
            font-size:2vw;
            background-color: rgb(199, 207, 161);
        }
        .frame{
         height:120%;
         width:60%;
         margin:10% 0 0 20%;
         background-color:rgb(199, 207, 161);
         border-radius:10px;
        }
        </style>
    </head>
    <body>
         <div class="head">
             <h2 style="margin-left:30%;padding-top:2%">User-Adminstrator</h2>
         </div>
         <form class="frame" method="POST">
                 <h3 style="margin-left:5%;padding-top:4%;font-size:2vw">First Name:</h3>
                 <input style="margin-top:-2%;margin-left:5%;width:70%;padding:2% 0 2% 0;font-size:2vw" name="first" type="text" placeholder="Enter First Name">
                 <h3 style="margin-left:5%;padding-top:4%;font-size:2vw">Last Name:</h3>
                 <input style="margin-top:-2%;margin-left:5%;width:70%;padding:2% 0 2% 0;font-size:2vw" name="last" type="text" placeholder="Enter Last Name">
                 <h3 style="margin-left:5%;padding-top:4%;font-size:2vw">Admin Name:</h3>
                 <input style="margin-top:-2%;margin-left:5%;width:70%;padding:2% 0 2% 0;font-size:2vw" name="admin" type="text" placeholder="Enter Admin name">
                 <h3 style="margin-left:5%;padding-top:4%;font-size:2vw">Password:</h3>
                 <input style="margin-top:-2%;margin-left:5%;width:70%;padding:2% 0 2% 0;font-size:2vw" name="pass" type="password" placeholder="Enter Password"><br>
                 <button style="font-size:2vw;margin-top:3%;margin-left:28%;padding:2%" name="submit">Submit</button>
            </form>
    </body>
</html>