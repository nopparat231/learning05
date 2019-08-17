
<?php 
date_default_timezone_set('Asia/Bangkok');

$query_user = "SELECT * FROM user ORDER BY ID desc";
$user = mysqli_query($con,$query_user) or die(mysqli_error());
$row_user = mysqli_fetch_assoc($user);
$totalRows_user = mysqli_num_rows($user);




?>
<?php include 'add_user.php';
 ?>
<div class="col-md-12">
	<div class="py-2">
		<div class="container">
			<div class="row" align="center">
				<div class="col-md-12">
					<a href="index.php" class="myButton" data-toggle='modal' data-target='#addMemModal'>+</a>
			<!-- 		  <a href="index.php" class="myButton" data-toggle='modal' data-target='#EditChoiceModal'>+</a> -->
				</div>
			</div>
		</div>
	</div>

	<div class="py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive text-center">
						<?php if ($totalRows_user > 0) {?>
							<table class="table table-hover" id="example" bgcolor="white">


								<thead class="thead-dark">
									<tr class="text-center">
										<th scope="col" width="5">ลำดับ</th>
										<th scope="col">ชื่อผู้ใช้</th>
										<th scope="col">ชื่อ - สกุล</th>
										<th scope="col">ข้อมูลติดต่อ</th>
										<!-- <th scope="col">วันหมดอายุ</th> -->
										<th scope="col">สถานะ</th>

										<th scope="col" width="5">แก้ไข</th>
										<th scope="col" width="5">ยกเลิก</th>
									</tr>
								</thead>
								<tbody>

									<?php
									$i = 1 ;
									do { ?>


										<tr class="text-center">

											<td><?php echo $i ?></td>
											<td><?php echo $row_user['Username']; ?></td>
											<td><?php echo $row_user['Firstname'] . "  " . $row_user['Lastname']; ?></td>
											<td class="text-left"><?php echo " รหัสประจำตัว : " . $row_user['user_stid'] . " <br />  " . " เบอร์โทร : " . $row_user['phone'] . " <br /> อีเมล์ : " . $row_user['email']; ?></td>
									
											<td>
												<?php 

												if ($row_user['Userlevel'] == 'A' ){
													echo "คุณครู";
												}elseif ($row_user['Userlevel'] == 'M') {
													echo "นักเรียน";
												}elseif ($row_user['Userlevel'] == 'E') {
													echo "<font color='red' >ยกเลิก</font>";
												}

												?>

											</td>


											<td>
												<a href="index.php?su&eus&user_id=<?php echo $row_user['ID'];?>" class="btn btn-outline-warning my-2 my-sm-0" ><i class="fa fa-pencil" aria-hidden="true"></i></a>
											</td>

											<?php if ($row_user['Userlevel'] <> 'E' ): ?>
												<td>
													<a href="del_user.php?User_id=<?php echo $row_user['ID'];?>&Userlevel=E" class="btn btn-outline-danger my-2 my-sm-0" onClick="return confirm('ยืนยันการยกเลิกผู้ใช้');"><i class="fa fa-ban" aria-hidden="true"></i></a>
												</td>
												<?php else: ?>
													<td>
														<a href="del_user.php?User_id=<?php echo $row_user['ID'];?>&Userlevel=M" class="btn btn-outline-secondary my-2 my-sm-0" onClick="return confirm('ยืนยันการใช้งานผู้ใช้');"><i class="fa fa-repeat" aria-hidden="true"></i></a>
													</td>
												<?php endif ?>

											</tr>

											<?php 
											$i += 1;
										} while ($row_user = mysqli_fetch_assoc($user)); ?>

									</tbody>
								</table>
							<?php }else {
								echo "<h3> ยังไม่มีคะแนน </h3>";
							}

							mysqli_free_result($user);?>

						</div>
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

	<br><br><br><br><br><br><br><br><br><br>