<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    
body {
    color: #3a76df;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 1100px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>
<link rel="stylesheet" href="index.css">
</head>
<body>
    
    <div class="area" >
        <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>


            
                    <table border="1" class="table table-bordered"> 
                       
                     <form action="" >
                        
                    <tr> 
                        <td><input type="text"  class="form-control" name="gname" id="gname" placeholder="Game Name"></td> 
                        <td><input type="text"  class="form-control" name="series" id="gseries" placeholder="Game Series"></td>
                        <td><input type="text"  class="form-control" name="space" id="gspace" placeholder="Space Required"></td>
                        <td><input type="text" class="form-control" name="developer" id="gdeveloper" placeholder="Developer"></td>
                        <td><input type="text" class="form-control" name="publisher" id="gpublisher" placeholder="Publisher"></td>
                        <td><input type="text" class="form-control" name="genres" id="ggenres" placeholder="Genres"></td>
                        <td> <button id="add" class="add" >ADD</button>  </td>
                    </tr></form>
                  
<input type = "submit" name="display" value="display">&nbsp;&nbsp;&nbsp;
<input type = "submit" name="delete" value="delete">&nbsp;&nbsp;&nbsp;
<input type = "submit" name="update" value="update">&nbsp;&nbsp;&nbsp; </table>



         
     
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>TOP GAMES IN <b>2021</b></h2></div>
                   
                </div>
            </div>
            <!-- <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Series</th>
                        <th>Space</th>
                        <th>Developer</th>
                        <th>Publisher</th>
                        <th>Genres</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="gamedetails">
                    <tr>
                        <td class="gid">${gid + 1}</td>
                        <td class ="gname">$g.gname</td>
                        <td class="gseries">$g.gseries</td>
                        <td class="gspace">$g.gspace</td>
                        <td class="gdeveloper">$g.gdeveloper</td>
                        <td class="gpublisher">$g.gpublsher</td>
                        <td class="ggenres">$g.ggenres</td>
                        <td>
                            <a class="delete" title="Delete"><i class="material-icons">&#xE254;</i></a>
                            <a  class="edit" title="Edit"  ><i class="material-icons"> &#xE872;</i></a>                        
                        </td>
                    </tr>   
                </tbody>
            </table> -->
        </div>
    </div>
</div>  
</ul>
</div >
<?php
if(isset($_POST['add'])==TRUE)
{
    $gname= $_POST['gname'];
    $gseries= $_POST['gseries'];
    $gspace= $_POST['gspace'];
 $gdeveloper= $_POST['gdeveloper'];
 $gpublisher= $_POST['gpublisher'];
 $ggenres= $_POST['ggenres'];
 $gimage= $_POST['gimage'];
$dbroot = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'game';
$conn = mysqli_connect($dbroot,$dbuser,$dbpass,$dbname);

$sql = "INSERT INTO games  VALUES ('$gname', '$gseries', '$gspace', '$gdeveloper', '$gpublisher', '$ggenres', '$gimage')";
    $insert = mysqli_query($conn,$sql);
    if (!$insert){
        die ("Data is not inserted :" . mysqli_error($conn));
    }
    echo "Data is inserted";

    
mysqli_close($conn);
}
echo "<br>";
</body> 
</html>