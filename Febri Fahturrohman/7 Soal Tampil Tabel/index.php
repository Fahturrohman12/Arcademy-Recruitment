<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="../assets/jquery/jquery-1.12.4.min.js"></script>
</head>
<body>
	<?php
include "config.php";
$query = mysqli_query($connection,"SELECT hobbies.person_id , categories.person_name , hobbies.name FROM categories INNER JOIN hobbies WHERE categories.id = hobbies.person_id GROUP BY hobbies.person_id");
?>
<form action="" method="post">
	<div class="container" style="padding-top: 100px;">
        <h3>Data Tabel</h3>
		<table class="table table-hovered table-condensed table-stripped" style="padding: 5px;">
        <tr>
            <th>Person_id</th>
            <th>Name</th>
            <th>Person_Hobbies</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["person_id"];?></td>
            <td><?php echo $data["person_name"];?></td>
            <td><?php echo $data["name"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
	</div>
    
</form>
</body>
</html>