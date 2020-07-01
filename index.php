<?php 
// check connection
$conn = mysqli_connect('localhost', 'robot', 'robot1234', 'robot controller path');

// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

if (isset($_POST['save'])) {
						$pathName = mysqli_real_escape_string($conn, $_POST['PathName']);
						$forwards = mysqli_real_escape_string($conn, $_POST['Forwards']);
						$right = mysqli_real_escape_string($conn, $_POST['Right']);
						$left = mysqli_real_escape_string($conn, $_POST['Left']);
						$orderOfDirections = mysqli_real_escape_string($conn, $_POST['OrderOfDirection']);

				$sql = "INSERT INTO `paths` (`id`, `Path Name`, `Forwards`, `Right`, `Left`, `Order of Directions`) VALUES (NULL, '$pathName', '$forwards','$right', '$left' , '$orderOfDirections')";
				if(mysqli_query($conn, $sql)){
							// success
						} else {
							echo 'query error: '. mysqli_error($conn);
						}
									mysqli_close($conn);

	}



		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div>
					<form  action="index.php" method="POST">
							<label>Path Name:</label>
							<input type="text" name="PathName" class="inputT"><br>
							<label>Order of Directions(3 Letters in capital, such as FLR): </label>
							<input type="text" name="OrderOfDirection" class="OOD" ><br>
							<label>Forwards :</label>
							<input type="text" name="Forwards" class = "Forwards inputF"><br>
							<label>Right    :</label>
							<input type="text" name="Right" class = "Right inputR"><br>
							<label>Left     :</label>
							<input type="text" name="Left" class = "Left inputL"><br>
							<div class = "mahrez">
								<input type="submit" name="start" value="start" id="start" >
								<input type="submit" name="save" value="save">
								<input type="reset" name="delete" value="reset">
							</div>
					</form>
		</div>
		<div class="wrapper">	
		<button class="buttonH">draw</button>
		</div>

	
		  	<<?php  	if(isset($_POST['start'])){
									$sql = 'SELECT * FROM `paths`';

							// get the result set (set of rows)
							$result = mysqli_query($conn, $sql);

							// fetch the resulting rows as an array
							$paths = mysqli_fetch_all($result, MYSQLI_ASSOC);
						 	
						 		
							
							// free the $result from memory (good practise)
							

			  ?>

			  <table style="width:100%">
		  <tr>
		    <th>Path name</th>
		    <th>Forwards</th>
		    <th>Right</th>
		    <th>Left</th>
		    <th>Order of Directions</th>
		  </tr>
		  <tr>
		    <td><?php echo  $paths[count($paths)-1]['Path Name']; ?></td>
		    <td><?php echo  $paths[count($paths)-1]['Forwards']; ?></td>
		    <td><?php echo  $paths[count($paths)-1]['Right']; ?></td>
		    <td><?php echo  $paths[count($paths)-1]['Left']; ?></td>
		    <td><?php echo  $paths[count($paths)-1]['Order of Directions']; ?></td>
		  </tr>
		  <?php mysqli_free_result($result);
			mysqli_close($conn); }?>
	          </table>
		<canvas></canvas>

		<script type="text/javascript" src="code.js"></script>
</body>
</html>

