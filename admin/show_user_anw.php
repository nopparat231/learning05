
<?php 

$query_user = "SELECT * FROM user";
$user = mysqli_query($con,$query_user) or die(mysqli_error());
$row_user = mysqli_fetch_assoc($user);
$totalRows_user = mysqli_num_rows($user);




?>

<div class="col-md-9">
	<div class="py-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center" >จัดการผู้ใช้</h1>
					<hr>
				</div>
			</div>
		</div>
	</div>

	<div class="py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="table table-hover">

						<table class="table table-striped table-bordered" id="example">
							<?php if ($totalRows_user > 0) {?>

								<thead>
									<tr class="text-center">
										<th scope="col" width="5">ลำดับ</th>
										<th scope="col">สมาชิก</th>
										<th scope="col">ชื่อ  - สกุล</th>
										<th scope="col">จัดการ</th>

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
											


											<td>
												<a href="index.php?anws&user_id=<?php echo $row_user['ID'];?>" class="btn btn-outline-warning my-2 my-sm-0" >ตรวจสอบ</a>


												<?php if ($row_user['Userlevel'] <> 'E' ): ?>

													<a href="del_user.php?User_id=<?php echo $row_user['ID'];?>&Userlevel=E" class="btn btn-outline-danger my-2 my-sm-0" onClick="return confirm('ยืนยันการยกเลิกผู้ใช้');"><i class="fas fa-ban"></i></a>
											
												<?php else: ?>
											
														<a href="del_user.php?User_id=<?php echo $row_user['ID'];?>&Userlevel=M" class="btn btn-outline-secondary my-2 my-sm-0" onClick="return confirm('ยืนยันการใช้งานผู้ใช้');"><i class="fas fa-redo-alt"></i></a>
													
												<?php endif ?>
											</td>
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

