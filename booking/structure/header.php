<nav class="navbar navbar-light bg-light">
		

	<?php 
	require_once('dbconfig.php');
	session_start();
	?>
		<?php 
		if (!isset($_SESSION['user'])) {

			?>
			<div class="container p-0 justify-content-end">
				<div class="pl-3 pr-3 border-right">
					<a href="registerict.php" class="text-secondary">สมัครสมาชิก</a>
				</div>
				<div class="pl-3">
					<a href="loginict.php" class="text-secondary">เข้าสู่ระบบ</a>
				</div>
			</div><!-- container -->
			<?php 
		}else{

			$sql = "SELECT * FROM user WHERE student_id = ".$_SESSION['user'];
			
			if($result=$conn->query($sql)){
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
						?>
						<div class="container p-0 justify-content-end">
										
								<div class="col-lg-1">

									 <?php echo "ID : ". $row['student_id'];?>
									</div>


								<div class="col-lg-1" >
									
				                    <a href="loginict.php">
				                        <a href="structure/api_logout.php" role="button" class="btn btn-outline-primary " style="float: right;" onclick="return confirm('ออกจากระบบหรือไม่!')">Logout</a>
                				</div>
							</div><!-- container -->
							<?php 
						}
					}
				}
			}
			?>
		</nav>