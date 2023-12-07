<?php
$conn = mysqli_connect('localhost','root','','lms');

if(!$conn)
    echo "error";
else{
    $sql = "SELECT * FROM adminstrator";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
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
        #nav-bar{
            height:70%;
            width:25%;
            background-color:rgb(199, 207, 161);
            margin:5% 0 0 -30%;
            border-radius:20px;
        }
        .visible{
            transform:translate(130%,0);
            transition:0.5s ease;
        }
        img{
           border-radius:50%;
           margin:1.4% 0 0 2%;
           cursor:pointer;
        }
        .frame{
            background-color:rgb(199, 207, 161);
            height:65%;
            width:70%;
            box-shadow:6px 6px 46px black;
            border-radius:20px;
            margin:-35% 0 0 15%;
        }
        a{
            text-decoration:none;
            color:black;
            cursor:pointer;
        }
        a:hover{
            font-size:2.5vw;
            transition:0.5s;
        }
        </style>
    </head>
    <body>
        <div class="head">
        <img width="50" height="50" src="icon.webp" onclick="toggle()">
        <h2 style="margin:-7% 0 0 30%;padding-top:2%">User-Adminstrator</h2>
        </div>
        <div id="nav-bar">
        <h2 style="border-bottom:1px solid white;padding:10% 0 10% 15%;">Hello <?php echo $row['first']; ?></h2>
        </div>
        <div class=frame>
        <h2 style="padding:1% 0 1% 40%;font-size:3vw;border-bottom:2px solid white">User-Control</h2>
        <a style="font-size:2vw;padding:3.5% 13% 12% 13%;border-bottom:2px solid white;border-right:2px solid white" href="admin.php">User-Authorization</a>
        <a style="font-size:2vw;padding:3.5% 14% 12% 14%;border-bottom:2px solid white" href=#>Borrowed Books</a>
        <div style="height:50%;width:50%;margin-top:20%;font-size:2vw"><a style="margin-top:2%;margin-left:25%" href=#>Remove User</a></div>
        <div style="height:29%;width:50%;transform:translate(98%,-146%);font-size:2vw;border-left:2px solid white;padding-top:8%;padding-bottom:-20%"><a style="padding:8% 20% 0% 30%" href=#>Borrowed Books</a></div>
        </div>
        <script>
            let a = document.getElementById("nav-bar");
            function toggle(){
                a.classList.toggle("visible");
            }
        </script>
    </body>
</html>