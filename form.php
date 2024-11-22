<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$names = $_POST['fullName'];
		$parname = $_POST['parName'];
		$birthDate = $_POST['date'];
		$parEmail = $_POST['paremail'];
		$logEmail = $_POST['logemail'];
		$province = $_POST['location'];
		$playerZone = $_POST['Zone'];
		$playerPosition = $_POST['Position'];
		$tel = $_POST['telNumber'];
		$timeOfRegistering = $_POST['time'];  
		$skillRange = $_POST['skillRange'];
		$color = $_POST['color'];
		$health = $_POST['health'];
  }		
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<style>
			body{
				background-color: <?php echo $color?>;
			}
			table{
				width: 100%;
			}
			table,th,tr,td{
				border: 1px solid black;
				border-collapse: collapse; 
			}
			th{
				background-color: rgb(120,120,120);
			}
			td{
				text-align: center;
			}
			h1{
				text-align: center;
			}
		</style>
	</head>
	  <h1>Your submition was received</h1>
	<body>

		<table>
			<tr>
				<th colspan= "2">Names</th>
				<th colspan= "3">Email/Phone</th>
				<th>Date of birth</th>
				<th>Location</th>
				<th colspan="2">Position/zone</th>
				<th>Tactics and skills</th>
				<th>Health issues<br> and disabilities</th>
				<th colspan="2">Color</th>
			</tr>
			<tr>
				<td><?php echo $names; ?></td>
				<td><?php echo $parname; ?></td>
				<td><?php echo $logEmail; ?></td>
				<td><?php echo $parEmail; ?></td>
				<td><?php echo $tel; ?></td>
				<td><?php echo $birthDate;?></td>
				<td><?php echo $province;?></td>
				<td><?php echo "Position:<br>";echo $playerPosition; ?></td>
				<td><?php echo "Zone:<br>";echo $playerZone; ?></td>
				<td><?php echo "$skillRange/5";?></td>
				<td><?php echo "$health"?></td>
				<td><?php echo "$color"; ?></td>
				<td style="background-color: white;">
					<p style="background-color: <?php echo $color; $color;?>; height: 32px; line-height: 32px;">
						color
					</p>
				</td>
			</tr>
		</table><br><br>
		<?php
		  echo "Time of registeration: $timeOfRegistering";
		?>
  </body>
</html>
