<?php 
    include 'adminHeader.php';
    require_once '../Controllers/bikeController.php';
    $bikes = getAllApprovedBikes();

    if(!empty($_REQUEST["id"]))
    {
        $c_id = $_REQUEST["id"];
        addThisBike($c_id);
    }
    if(!empty($_REQUEST["key"]))
    {
        $dbid = $_REQUEST["key"];
        deleteThisBike($dbid);
    }
    if(!empty($_REQUEST["key1"]))
    {
        $dbid = $_REQUEST["key1"];
        deleteThisBike1($dbid);
    }
    
?>

<div class="center">
	<h3 class="text">All Bikes</h3>
	<table class="table table-striped">
		<thead>
			<th>Bike ID</th>
			<th>Bike Name</th>
			<th>Manufacturer Name</th>
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
                            echo '<td><a class="btn btn-info">Simulation</td>';
                            echo '<td><a href="adminBikes.php?key1='.$bike["id"].'" class="btn btn-danger">Delete</td>';
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