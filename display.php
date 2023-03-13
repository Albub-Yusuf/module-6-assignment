<?php
if(isset($_GET['redirected'])){
    session_start();
    if(isset($_SESSION['user'])){
    $current_user = $_SESSION['user'];
    echo '<a href="logout.php?logout=true">Log Out</a>';
    }
}
else{
    $current_user = "Guest User";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            text-align: center;
        }
   
        table{
            width: 70vw;
            margin:10px auto;
        }
        </style>
</head>
<body>

    <h2>Welcome <?=$current_user?></h2>    
    <h3>User List</h3>
	<table border="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Profile Picture</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Open CSV file
				$file = fopen("users.csv", "r");

				// Loop through CSV data and add to table
				while (($data = fgetcsv($file)) !== FALSE) {
					echo "<tr>";
					echo "<td>" . $data[0] . "</td>";
					echo "<td>" . $data[1] . "</td>";
					echo "<td><img src='uploads/" . $data[2] . "' width='100'></td>";
					echo "</tr>";
				}

				// Close CSV file
				fclose($file);
			?>
		</tbody>
	</table>

</body>
</html>