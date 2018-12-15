<!-- formDetail.php -->
<html>
	
	<body>

		<?php
			  
			require_once('dbconfig.php');
	 	
			if(isset($_GET['id'])){
				$id = $_GET['id'];


				$sql = "SELECT * FROM device Where ID_device = '$id' ";
				if($result=$conn->query($sql)){
					if($result->num_rows>0){
						while($row = $result->fetch_assoc()){
		?>
				<div class="container" >
					<div class="col-12 mt-4">
						<h3><a href="alluser.php"><<ย้อนกลับ</a></h3>
					</div>
					<div class="col-12 ">
						<h1>รายละเอียด</h1>
					<div style="padding-bottom: 30px;">
						
						<h5 class="card-title"><?php echo $row['device_name'] ?></h5>
						<h5 class="card-title"><?php echo $row['ID_device'] ?></h5>
						
						
						<a href="#" class="card-link">facebook</a>
						<a href="#" class="card-link" style="color: green;">@line</a>


					</div>
					</div>
				</div>

		<?php
						}
					}
				}
			}
		?>
	</body>
	

	
</html>
