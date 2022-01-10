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
   <th>Created at</th>
   <th style='width: 80px';  align:'center' >  Actions</th>
</thead>";?>
 <?php foreach($viewmodel as $item) : ?>
                                <tr>
                                    <td><?php echo $item['gname']; ?></td>
                                    <td><?php echo $item['gseries'] ?></td>
                                    <td><?php echo $item['gspace'] ?></td> 
                                    <td><?php echo $item['gdeveloper'] ?></td>
                                    <td><?php echo $item['gpublisher'] ?></td>
                                    <td><?php echo $item['ggenres'] ?></td>
                                    <?php $time = strtotime($item['created_at']);
                                    $myFormatForView = date("d-M-Y g:i A", $time);?>  
                                    <td><?php echo $myFormatForView; ?></td>
                                    <td>
                                        <form action="<?php echo ROOT_URL?>games/edit" method="post">
                                            <input type="hidden" value="<?php echo $item['gameID'];?>" name="update_id"/>
                                            <button type="submit" name="edit" value="Edit" class="btn btn-info">
                                           UPDATE                 
                                            </button>
                                            </form>
                                        <form action="<?php echo ROOT_URL?>games/delete" method="post">
                                            <input type="hidden" value="<?php echo $item['gameID'];?>" name="delete_id"/>
                                            <button type="submit" name="delete" value="Delete" class="btn btn-danger">
                                               DELETE
</button>
                                        </form>
                                    </td>
                                </tr>

	<?php endforeach; 
	 echo "</form>";
    echo "</table>";
	echo "</div>";
    echo "</div>";?>
</div>