
<?php 

$user_id = $_GET['user_id'];

// $query_user = "SELECT * FROM user";
// $user = mysqli_query($con,$query_user) or die(mysqli_error());
// $row_user = mysqli_fetch_assoc($user);
// $totalRows_user = mysqli_num_rows($user);


// $query_learning = "SELECT * FROM testing as tt , user_testing as ut , user_learning where ut.user_id = '$user_id' ";
// $learning = mysqli_query($con,$query_learning) or die(mysqli_error());
// $row_learning = mysqli_fetch_array($learning);
// $totalRows_learning = mysqli_num_rows($learning);

$query_usertesting = "SELECT * FROM user_testing where user_bf = 'bff' and user_id = '$user_id'";
$usertesting = mysqli_query($con,$query_usertesting) or die(mysqli_error());
$row_usertesting = mysqli_fetch_array($usertesting);
$totalRows_usertesting = mysqli_num_rows($usertesting);

$query_usertestingaf = "SELECT * FROM user_testing where user_bf = 'af' and user_id = '$user_id'";
$usertestingaf = mysqli_query($con,$query_usertestingaf) or die(mysqli_error());
$row_usertestingaf = mysqli_fetch_array($usertestingaf);
$totalRows_usertestingaf = mysqli_num_rows($usertestingaf);


$query_learning = "SELECT * FROM user_learning where user_id = '$user_id' ";
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_array($learning);
$totalRows_learning = mysqli_num_rows($learning);

$user = "SELECT Firstname,Lastname FROM user where ID = '$user_id' ";
$usera = mysqli_query($con,$user) or die(mysqli_error());
$row_usera = mysqli_fetch_array($usera);


?>

<div class="col-md-9">
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center" >ข้อมูลคะแนน <?php echo $row_usera['Firstname']."  ".$row_usera['Lastname']; ?></h1>
				<hr>
			</div>
		</div>
	</div>
	

	<div class="py-3">
		<div class="container">
			<div class="row">


				<div class="col-md-6">
					<center><h3>ก่อนเรียน</h3></center>
					<?php if ($row_learning['user_learning_bf'] != '') {?>
						<div class="text-right">
							<h4>คะแนน <?php echo $row_learning['user_learning_bf']; ?></h4>
						</div>
						<select class="custom-select" multiple disabled size="15">

							<?php 
							$i = 1;

							do{
								
								$query_testing = "SELECT * FROM testing where id = ".$row_usertesting['testing_id'];
								$testing = mysqli_query($con,$query_testing) or die(mysqli_error());
								$row_testing = mysqli_fetch_array($testing);
								$totalRows_testing = mysqli_num_rows($testing);




								do {
									$c1 = '';
									$c2 = '';
									$c3 = '';
									$c4 = '';

									if ($row_usertesting['testing_id'] == $row_testing["id"] && $row_usertesting['user_anw'] == $row_testing["answer"]) {
										$c1 = 'selected';
									}elseif ($row_usertesting['testing_id'] == $row_testing["id"] && $row_usertesting['user_anw'] == $row_testing["answer"]) {
										$c2 = 'selected';
									}elseif ($row_usertesting['testing_id'] == $row_testing["id"] && $row_usertesting['user_anw'] == $row_testing["answer"]) {
										$c3 = 'selected';
									}elseif ($row_usertesting['testing_id'] == $row_testing["id"] && $row_usertesting['user_anw'] == $row_testing["answer"]) {
										$c4 = 'selected';
									}
									?>
									<option value="0"><?php echo $i ?>).<?php echo $row_testing["question"]; ?></option>
									<option value="1" <?php echo $c1; ?> >ก. <?php echo $row_testing["c1"];?></option>
									<option value="2" <?php echo $c2; ?> >ข. <?php echo $row_testing["c2"];?></option>
									<option value="3" <?php echo $c3; ?> >ค. <?php echo $row_testing["c3"];?></option>
									<option value="4" <?php echo $c4; ?> >ง. <?php echo $row_testing["c4"];?></option>
									<option value=""></option>

									<?php

								} while ( $row_testing = mysqli_fetch_assoc($testing) );

								$i++;

							} while ( $row_usertesting = mysqli_fetch_array($usertesting));


							

							?>


						</select>
					<?php }else{
						echo '<center><h4>ยังไม่ทำ</h4></center>';
					} ?>

				</div>

				<div class="col-md-6">
					<center><h3>หลังเรียน</h3></center>

					<?php if ($row_learning['user_learning_af'] != '') {?>
						<div class="text-right">
							<h4>คะแนน <?php echo $row_learning['user_learning_af']; ?></h4>
						</div>
						<select class="custom-select" multiple disabled size="15">

							<?php 
							$i = 1;

							do{
								
								$query_testing = "SELECT * FROM testing where id = ".$row_usertestingaf['testing_id'];
								$testing = mysqli_query($con,$query_testing) or die(mysqli_error());
								$row_testing = mysqli_fetch_array($testing);
								$totalRows_testing = mysqli_num_rows($testing);



								do {
									$c1 = '';
									$c2 = '';
									$c3 = '';
									$c4 = '';

									if ($row_usertestingaf['testing_id'] == $row_testing["id"] && $row_usertestingaf['user_anw'] == $row_testing["answer"]) {
										$c1 = 'selected';
									}elseif ($row_usertestingaf['testing_id'] == $row_testing["id"] && $row_usertestingaf['user_anw'] == $row_testing["answer"]) {
										$c2 = 'selected';
									}elseif ($row_usertestingaf['testing_id'] == $row_testing["id"] && $row_usertestingaf['user_anw'] == $row_testing["answer"]) {
										$c3 = 'selected';
									}elseif ($row_usertestingaf['testing_id'] == $row_testing["id"] && $row_usertestingaf['user_anw'] == $row_testing["answer"]) {
										$c4 = 'selected';
									}
									?>
									<option value="0"><?php echo $i ?>).<?php echo $row_testing["question"]; ?></option>
									<option value="1" <?php echo $c1; ?> >ก. <?php echo $row_testing["c1"];?></option>
									<option value="2" <?php echo $c2; ?> >ข. <?php echo $row_testing["c2"];?></option>
									<option value="3" <?php echo $c3; ?> >ค. <?php echo $row_testing["c3"];?></option>
									<option value="4" <?php echo $c4; ?> >ง. <?php echo $row_testing["c4"];?></option>
									<option value=""></option>

									<?php

								} while ( $row_testing = mysqli_fetch_assoc($testing) );

								$i++;

							} while ( $row_usertestingaf = mysqli_fetch_array($usertestingaf));


							
							
							?>


						</select>

					<?php }else{
						echo '<center><h4>ยังไม่ทำ</h4></center>';
					} ?>
				</div>
				

			</div>
		</div>
	</div>
	<div class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12"></div>
			</div>
		</div>
	</div>
</div>

