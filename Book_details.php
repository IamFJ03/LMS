<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','lms');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn==false){
    dir('Error:Cannot connect');
}
if(isset($_POST["submit"])){
    if (empty($username) || empty($email) || empty($password)){
        $error= 'all fields are required' ;
    }
    if(!empty($_POST['name']) && !empty($_POST['author']) && !empty($_POST['price']) && !empty($_POST['quantity'])){
        $name = $_POST['name'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $quantity=$_POST['quantity'];
            // Store the user data in a database or a file
            $sql="INSERT INTO `book_details`(`name`, `author`, `price`,`quantity`) VALUES('$name', '$author', '$price','$quantity');";
            $result=mysqli_query($conn,$sql);
            if($result){
                // Redirect the user to the dashboard
                
                $_SESSION['logged_in'] = true;
                echo '<script>alert("Row Entered")</script>';
                header('Location: main.html');
               }
               else{
                echo "Book is already entered in database";
               }
                exit;
            }
        }
        ?>        

<html>
    <head>
        <style>
        body{
            background-color: rgb(199, 207, 161);
            padding:0;
            margin:0;
        }
        .head{
            width:100%;
            height:15%;
            background-color: aliceblue;
        }
        .frame{
            height:110%;
            width:50%;
            margin-left:25%;
            margin-top:5%;
            border-radius: 20px;
            background-color: aliceblue;
        }
        </style>
    </head>
    <body>
        <div class="head"></div>
        <div class="frame">
            <form method="POST">
             <h3 style="margin-left:5%;padding-top:4%;font-size:2vw">Book Name:</h3>
                 <input style="margin-top:-2%;margin-left:5%;width:70%;padding:2% 0 2% 0;font-size:2vw" name="name" type="text" placeholder="Enter Book Name">
                 <h3 style="margin-left:5%;padding-top:4%;font-size:2vw">Author:</h3>
                 <input style="margin-top:-2%;margin-left:5%;width:70%;padding:2% 0 2% 0;font-size:2vw" name="author" type="text" placeholder="Enter Author Name">
                 <h3 style="margin-left:5%;padding-top:4%;font-size:2vw">Price:</h3>
                 <input style="margin-top:-2%;margin-left:5%;width:70%;padding:2% 0 2% 0;font-size:2vw" name="price" type="number" placeholder="Enter Price">
                 <h3 style="margin-left:5%;padding-top:4%;font-size:2vw">Quantity:</h3>
                 <input style="margin-top:-2%;margin-left:5%;width:70%;padding:2% 0 2% 0;font-size:2vw" name="quantity" type="number" value="1" min="0" max="99" placeholder="Book Quantity"><br>
                 <button style="font-size:2vw;margin-top:3%;margin-left:28%;padding:2%" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>