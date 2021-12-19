<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>games/add">Add more Games</a>
	<?php endif; ?>
<?php
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
   <th style='width: 200px';  align:'center' >  Actions</th>
</tr></thead>";?>
	<?php foreach($viewmodel as $row) : ?>
	<?php	echo "<tr><td>" . $row["gname"] . "</td> <td>". $row["gseries"] . "</td>  <td>". $row["gspace"] . "</td> <td>". $row["gdeveloper"] . "</td>  
        <td>". $row["gpublisher"] . "</td>
        <td>". $row["ggenres"] . "</td> 
        <td><button type='submit' name='delete' id='delete' class='button2' value=" . $row["gameID"] . ">delete</button> <br><br>
<button name='update1' id='update1' class='button3' value=" . $row["gameID"] . ">Update </button></td></tr>";
    $updateid = $row["gameID"];?>
	<?php endforeach; 
	echo "</form>";
    echo "</table>";
	echo "</div>";
    echo "</div>";?>
</div>