<?php
$conn=mysqli_connect("localhost","root",'',"lms");

if($conn==false){
    dir('Error:Cannot connect');
}
$sql="Select * from `book_details`";
$result=mysqli_query($conn,$sql);
?>

<html>
    <head>
        <style>
        body{
            margin:0;
            background-color: rgb(199, 207, 161);
        }
        .head{
            width:100%;
            height:15%;
            background-color: aliceblue;
        }
        table{
            width:60%;
            margin-left:15%;
            margin-top:5%;
        }
        #search{
            margin-left:35%;
            margin-top:5%;
            font-size:1.5vw;
            background-color: transparent;
            padding:1% 0 1% 1%;
            width:20%;
        }
        </style>
    </head>
    <body>
        <div class="head">
            <h1 style="margin-left:25%;padding-top:1%;font-size:4vw;">Welcome to Search Page...</h1>
        </div>
        <input type="text" id="search" placeholder="Search Books...">
        <table id="myTable" border="1" class="table table-bordered" cellpadding="10" cellspacing="0">
            <tr>
                <th>
                Book Name:
                </th>
                <th>
                    Author:
                </th>
                <th>
                    Price:
                </th>
                <th>Quantity:</th>
                <th>Edit:</th>
                <th>Delete:</th>
            </tr>
            <tr>
                <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                ?>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['author'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['quantity'] ?></td>
                </tr>
                <?php
                 }
                 ?>
        </table>
        <script>
            document.getElementById('search').addEventListener('input',function search_name(){
             var filter = this.value.toUpperCase();
             var table =document.getElementById('myTable');
             var tr=table.getElementsByTagName('tr');

             for(var i=0;i<tr.length;i++){
                var td=tr[i].getElementsByTagName('td')[0];
                if(td){
                    var txtValue = td.textContent || td.innerHTML;
                    if(txtValue.toUpperCase().indexOf(filter)> -1){
                        tr[i].style.display = "block";
                    }
                else{
                    tr[i].style.display='none';
                }
                }
             }
            });
        </script>
    </body>
</html>