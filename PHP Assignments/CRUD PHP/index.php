
<!DOCTYPE html>
<html lang="en">
<head>

<title>CRUD IN PHP</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
<script type="text/javascript">
  function validate() {
  if(game.gname.value.length==0)
  {
   document.getElementById('errfn').innerHTML="Empty field";
  }}
  function validate() {
    var gname = document.getElementById("gname").value;
    var gseries = document.getElementById("gseries").value;
    var gspace = document.getElementById("gspace").value;
    var gdeveloper = document.getElementById("gdeveloper").value;
    var gpublisher = document.getElementById("gpublisher").value;
    var ggenres = document.getElementById("ggenres").value;
 
 
    if(gname==="")
                {
                    document.getElementById("div1").innerHTML="Enter a value";
                    document.getElementById("div1").style.color="Red";
                    
                } else
                {
                    document.getElementById("div1").innerHTML="";
                }
    if(gseries==="")
                {
                    document.getElementById("div2").innerHTML="Enter a value";
                    document.getElementById("div2").style.color="Red";
                    
                }  else
                {
                    document.getElementById("div2").innerHTML="";
                }

     if(gspace==="")
                {
                    document.getElementById("div3").innerHTML="Enter a value";
                    document.getElementById("div3").style.color="Red";
                    
                }  else
                {
                    document.getElementById("div3").innerHTML="";
                }  

    if(gdeveloper==="")
                {
                    document.getElementById("div4").innerHTML="Enter a value";
                    document.getElementById("div4").style.color="Red";
                    
                }  else
                {
                    document.getElementById("div4").innerHTML="";
                }

      if(gpublisher==="")
                {
                    document.getElementById("div5").innerHTML="Enter a value";
                    document.getElementById("div5").style.color="Red";
                    
                }  else
                {
                    document.getElementById("div5").innerHTML="";
                }  

     if(ggenres==="")
                {
                    document.getElementById("div6").innerHTML="Enter a value";
                    document.getElementById("div6").style.color="Red";
                    
                }  else
                {
                    document.getElementById("div6").innerHTML="";
                }                 



  }
  </script>
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


            
                    <table border="1" id='table1' class="table table-bordered"> 
                       
                     <form  method="post" name="game" enctype="multipart/form-data" action="index.php" onsubmit="return validate();">
                        
                    <tr> 
                       <td><input type="text"   name="gname" id="gname" placeholder="Game Name" onblur="validate()" autocomplete="off" > <br>  <div id="div1"></div> </td>
                        <td><input type="text"  name="gseries" id="gseries" placeholder="Game Series" onblur="validate()" autocomplete="off"><br> <div id="div2">   </div></td> 
                        <td><input type="text"  name="gspace" id="gspace" placeholder="Space Required" onblur="validate()" autocomplete="off"><br> <div id="div3">   </div></td> 
                        <td><input type="text"  name="gdeveloper" id="gdeveloper" placeholder="Developer" onblur="validate()" autocomplete="off"><br> <div id="div4">   </div></td> 
                        <td><input type="text"  name="gpublisher" id="gpublisher" placeholder="Publisher" onblur="validate()" autocomplete="off"><br> <div id="div5">   </div></td> 
                        <td><input type="text"  name="ggenres" id="ggenres" placeholder="Genres" onblur="validate()" autocomplete="off"><br> <div id="div6">   </div></td> 
                        <td>
                            <input name="image" id="image" type="file"/></td>
                        </tr>
                        <tr><td colspan="7" align="center"> <input type="submit" value="Insert" id="insert" name ="insert" class="button1" onclick="validate();"  > 
                      &nbsp;  &nbsp;   &nbsp;   <button  id="update2" name ="update2" class="button1"  >Update</button> </td>
                    </tr></form></table> 

<?php
include('C:\xampp\htdocs\game\connection.php');

//insert
if(isset($_POST['insert'])==TRUE)
{ 
    $gname = $_POST['gname'];
    $gseries = $_POST['gseries'];
    $gspace = $_POST['gspace'];
    $gdeveloper = $_POST['gdeveloper'];
    $gpublisher = $_POST['gpublisher'];
    $ggenres = $_POST['ggenres'];
	// Get image name
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "images/". $filename;
    move_uploaded_file($tempname,$folder);


  if(!empty($gname)&&!empty($gseries)&&!empty($gspace)&&!empty($gdeveloper)&&!empty($gpublisher)&&!empty($ggenres)) {

$sql= "INSERT INTO games ( gname, gseries, gspace, gdeveloper, gpublisher, ggenres, gimage) VALUES ('$gname','$gseries','$gspace', '$gdeveloper', '$gpublisher', '$ggenres','$folder')";
if(mysqli_query($conn,$sql)){
    echo "<script> window.location='index.php';</script>";
    display();
    exit;
}
else 
{
    echo "Failed";
}}else 


echo "<center><h4 style='color:red;'>Cannot Insert</h4></center>";

}





//display
function display($conn){
$sql = "SELECT gameID, gname , gseries, gspace, gdeveloper , gpublisher, ggenres , gimage from games";
$result = mysqli_query($conn,$sql);
echo " <div class='container-lg'>";
echo "<div class='table-responsive'>";
echo "<div class='table-wrapper'>";
echo "<div class='table-title'>  ";
echo  "<div class='row'>";
echo "<div class='col-sm-8'><h2>TOP GAMES IN <b>2021</b></h2></div>";
echo "</div> </div>";

   echo "<table id='table2' border='1' class='table table-bordered'>";
   echo "<form action='index.php' method='post'>";
   echo "<thead>
   <th>Name</th>
   <th>Series</th>
   <th>Space</th>
   <th>Developer</th>
   <th>Publisher</th>
   <th>Genres</th>
   <th>Image</th>
   <th style='width: 200px';  align:'center' >  Actions</th>
</tr></thead>";
if(mysqli_num_rows($result)>0){
 
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr><td>" . $row["gname"] . "</td> <td>". $row["gseries"] . "</td>  <td>". $row["gspace"] . "</td> <td>". $row["gdeveloper"] . "</td>  
        <td>". $row["gpublisher"] . "</td>
        <td>". $row["ggenres"] . "</td>  <td><a href='$row[gimage]'><img src='" . $row['gimage'] . "' width='100' height='100' /></a>
        </td> <td><button type='submit' name='delete' id='delete' class='button2' value=" . $row["gameID"] . ">delete</button> <br><br>
<button name='update1' id='update1' class='button3' value=" . $row["gameID"] . ">Update </button></td></tr>";
    $updateid = $row["gameID"];
    }
    echo "</form>";
    echo "</table>";
}
    echo "</div>";
    echo "</div>";

mysqli_free_result($result);
}
display($conn);



//update1
if(isset($_POST['update1'])==TRUE)

{

    $gid = $_POST['update1'];
    
    // $gname1 = $_POST['gname'];
    // $gseries1 = $_POST['gseries'];
    // $gspace1 = $_POST['gspace'];
    // $gdeveloper1 = $_POST['gdeveloper'];
    // $gpublisher1 = $_POST['gpublisher'];
    // $ggenres1 = $_POST['ggenres'];
    // $gimage1 = $_POST['gimage'];
//in text box
$sql = "SELECT gameID, gname, gseries, gspace, gdeveloper, gpublisher, ggenres FROM games WHERE gameID='$gid'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
    $gid = $row['gameID'];
    $gname = $row['gname'];
    $gseries = $row['gseries'];
    $gspace = $row['gspace'];
    $gdeveloper = $row['gdeveloper'];
    $gpublisher = $row['gpublisher'];
    $ggenres = $row['ggenres'];
echo "<script> document.getElementById('update2').value = '$gid' </script>";
echo "<script> document.getElementById('gname').value = '$gname' </script>";
echo "<script> document.getElementById('gseries').value = '$gseries' </script>";
echo "<script> document.getElementById('gspace').value = '$gspace' </script>";
echo "<script> document.getElementById('gdeveloper').value = '$gdeveloper' </script>";
echo "<script> document.getElementById('gpublisher').value = '$gpublisher' </script>";
echo "<script> document.getElementById('ggenres').value = '$ggenres' </script>";
}}

//update2
if(isset($_POST['update2'])==TRUE)

{
   
    $gid = $_POST['update2'];
    
    $gname = $_POST['gname'];
    $gseries = $_POST['gseries'];
    $gspace = $_POST['gspace'];
    $gdeveloper = $_POST['gdeveloper'];
    $gpublisher = $_POST['gpublisher'];
    $ggenres = $_POST['ggenres'];
    $sql= "UPDATE games SET gname='$gname', gseries='$gseries', gspace='$gspace', gdeveloper='$gdeveloper', gpublisher='$gpublisher', ggenres='$ggenres'  WHERE gameID='$gid' ";

if(mysqli_query($conn,$sql)){
    echo "<script> window.location='index.php';</script>";
    display();
    exit;
}
else 
{
    echo "Invalid Data";
}
}

//delete
if(isset($_POST['delete'])==TRUE)
{ 
    $gid = $_POST['delete'];

$sql= "DELETE from games where gameID='$gid'";
if(mysqli_query($conn,$sql)){
    echo "<script> window.location='index.php';</script>";  
    display();
    exit;
}
else 
{
    echo "Invalid Data";
}
}

?>
</ul>
</form>
</div>
</body> 
</html>