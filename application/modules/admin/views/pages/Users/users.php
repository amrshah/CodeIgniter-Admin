 <?php include (dirname(dirname(dirname(__FILE__))) . '/partials/top-layout.php')?>

<!-- Content Wrapper. Contains this page's content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Users Management</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo $adminUrl?>"><i class="fa fa-dashboard"></i>
					Home</a></li>
			<li><a href="#">Users & Roles</a></li>
			<li class="active">Users</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Users</h3>

				<div class="box-tools">
					<div class="input-group input-group-sm" style="width: 150px;">
						<input type="text" name="table_search"
							class="form-control pull-right" placeholder="Search">

						<div class="input-group-btn">
							<button type="submit" class="btn btn-default">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<tbody>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Roles</th>
							<th>Date Created</th>
							<th>Actions</th>
						</tr>
                <?php
                	$users = $this->auth->users ()->result ();
                	foreach ( $users as $user ) {
                		$groups = $this->auth->get_users_groups ( $user->id )->result ();
                ?>
                <tr>
					<td><?php echo $user->id?></td>
					<td><?php echo $user->first_name . ' '. $user->last_name ?></td>
					<td><?php echo $user->username?></td>
					<td><?php echo $user->email?></td>
					
					<td>
                  	<?php
                  	foreach ( $groups as $group )
                  		echo '<span class="label label-success">' . $group->name . '</span> ';
                  	?>
					</td>
					<td><?php echo Date::fromLong($user->created_on)?></td>
				</tr>
                <?php
					}//end foreach $users
				?>
                </tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php 
	//$includeDataTables = true;
	$pageScripts['datatable_script'] = "<script>
  $(function () {
    
    $('#usersDataTable').DataTable();
  })
</script>";
?>

 <?php include (dirname(dirname(dirname(__FILE__)))  . '/partials/bottom-layout.php')?>
 