<?php 
    include 'adminHeader.php';
    require_once '../Controllers/bikeController.php';
	$bikes = getAllNewBikes();


?>

<div class="center">
	<h3 class="text">New Bikes</h3>
	<table class="table table-striped">
		<thead>
			<th>Bike ID</th>
			<th>Bike Name</th>
			<th>Manufacturer Name</th>
			<th></th>
			<th></th>
			<th></th>
		</thead>
		<tbody>
            <?php
                if(count($bikes)>0)
                {
                    foreach($bikes as $bike)
                    {
                        echo "<tr>";
							echo "<td>".$bike["id"]."</td>";
                            echo "<td>".$bike["name"]."</td>";
                            echo "<td>".$bike["manufacturer"]."</td>";
							echo '<td><a href="adminBikes.php?id='.$bike["id"].'" class="btn btn-success">Add</a></td>';
							echo '<td><a class="btn btn-info">Simulation</td>';
							echo '<td><a href="adminBikes.php?key='.$bike["id"].'" class="btn btn-danger">Delete</td>';
						echo "<tr>";
					}
				}
			?>
		</tbody>
	</table>
</div>

<?php 
    include 'adminFooter.php';
?>

<!-- echo '<td><a href="adminNewBikes.php" name="addBike" class="btn btn-success">Add</td>';
echo '<td><input type="submit" name="addBike" class="btn btn-success" value="Add" class="form-control"></td>'; -->