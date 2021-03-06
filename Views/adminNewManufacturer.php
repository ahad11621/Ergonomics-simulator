<?php 
    include 'adminHeader.php';
    require_once '../Controllers/manufacturerController.php';
    
    $manufacturers = getAllNewManufacturers();


    if(!empty($_REQUEST["mid"]))
    {
        $m_id = $_REQUEST["mid"];
        addThisManufacturer($m_id);  
    }
    if(!empty($_REQUEST["mid1"]))
    {
        $dmid1 = $_REQUEST["mid1"];
        deleteThisManufacturer1($dmid1);  
    }

?>

<div class="center">
	<h3 class="text">All Manufacturer</h3>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Owner Name</th>
			<th>Email</th>
            <th>Phone</th>
            <th></th>
            <th></th>
		</thead>
		<tbody>
            <?php
                if(count($manufacturers)>0)
                {
                    foreach($manufacturers as $manufacturer)
                    {
                        echo "<tr>";
							echo "<td>".$manufacturer["id"]."</td>";
                            echo "<td>".$manufacturer["name"]."</td>";
                            echo "<td>".$manufacturer["owner_name"]."</td>";
                            echo "<td>".$manufacturer["email"]."</td>";
                            echo "<td>".$manufacturer["phone"]."</td>";
                            echo '<td><a href="adminNewManufacturer.php?mid='.$manufacturer["id"].'" class="btn btn-success">Add</a></td>';
							echo '<td><a href="adminNewManufacturer.php?mid1='.$manufacturer["id"].'" class="btn btn-danger">Delete</td>';
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