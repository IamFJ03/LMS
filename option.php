<?php
$conn = mysqli_connect('localhost','root','','lms');

if(!$conn)
echo "Error";
else{
    if(isset($_POST["redirect"])){
        $sql="SELECT * FROM adminstrator";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_num_rows($result);
        if($rows == 0)
        header('location:admin.php');
        else
        header('location:User.html');
    }
}
?>

<html>
    <head>
        <style>
        body{
            padding:0;
            margin:0;
        }
        .cover{
            width:100%;
            height:100%;
            background-color: rgb(199, 207, 161);
        }
        .head{
            width:100%;
            height:15%;
            background-color: aliceblue;
        }
        .half{
            width:40%;
            height:85%;
            margin-left:60%;
            background-color: black;
        }
        .frame{
            width:50%;
            height:50%;
            margin-left:7%;
            background-color: aliceblue;
            margin-top:-35%;
            border-radius:5px;
            box-shadow: 6px 6px 46px black;
        }
        a{
            color:white;
            text-decoration:none;
            font-size:2vw;
        }
        .one:hover{
            color:black;
            background-color: aliceblue;
        }
        .frame2{
            width:35%;
            height:50%;
            margin-top:-25%;
            margin-left:63%;
            border-radius:5px;
            box-shadow:6px 6px 46px aliceblue;
            background-color: aliceblue;
            position:fixed;
        }
        .label{
            animation:anime 2s normal forwards ease-in-out;
        }
        @keyframes anime{
            0%{
                
                opacity:0;
            }
            100%{
                opacity:1;
                margin-top:0%;
            }
        }
        </style>
    </head>
    <body>
        <div class="cover">
            <div class="head">
            <h2 style="margin-left:2%;padding-top:1.5%;font-size:4vw">LMS
                <a style="color:black;margin-left:55%;padding-top:-15%;font-size:2.5vw" href="main.html">Home</a>
                <a style="color:black;margin-left:2%;font-size:2.5vw" href="#cover2">About</a>
                <a style="color:black;margin-left:2%;font-size:2.5vw" href="Contact">Contact</a></h2>

            </div>
            <div class="half"></div>
            <div class="frame">
                <div class="one" style="width:100%;padding-top:2%;height:16%;text-align:center;border-radius:5px;background-color:black;border-bottom: 1px solid white;">
                <a href="Book_details.php">Enter Book Details</a>
            </div>
            <form method="post" class="three" style="width:100%;padding-top:2%;height:16%;text-align:center;border-radius:5px;background-color:black;border-bottom: 1px solid white;">
                <button style="cursor:pointer;background-color: rgb(0,0,0,0);color:white;font-size:1.8vw;" name="redirect">User-Adminstrator</button>
            </form>
            <div class="two" style="width:100%;margin-top:-3.5%;padding-top:2%;height:16%;text-align:center;border-radius:5px;background-color:black;border-bottom: 1px solid white;">
                <a href="search.php">Search for Books</a>
            </div>
            <div class="four" style="width:100%;padding-top:2%;height:16%;text-align:center;border-radius:5px;background-color:black;border-bottom: 1px solid white;">
                <a href="">Borrowed Books</a>
            </div>
            <div class="five" style="width:100%;padding-top:2%;height:16%;text-align:center;border-radius:5px;background-color:black;border-bottom: 1px solid white;">
                <a href="User.html">Faculty Purpose</a>
            </div>
                </div>
                <div class="frame2">
                    <h3 class="label" style="font-size:4vw;padding-top:10%;margin-left:4%;">LMS provides you easy customization...</h3>
                </div>
        </div>
    </body>
</html>