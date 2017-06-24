<?php echo anchor('projects/form/'.$project['project_id'],'Edit Project','class="btn btn-block btn-lg btn-primary"'); ?>

<?php echo form_open_multipart('projects/action'); ?>
<?php echo form_hidden('project_id',$project['project_id']); ?>

<h1><?php echo $project['project_name']; ?></h1>

<table class="table table-condensed">
	<tr>
		<td width="15%"><strong>Project Date:</strong></td>
		<td><?php echo $this->format->date($project['project_date']); ?></td>
	</tr>
	<tr>
		<td><strong>Labor:</strong></td>
		<td><?php echo $project['project_labor']; ?> days</td>
	</tr>
	<tr>
		<td><strong>Quote:</strong></td>
		<td><?php echo $project['project_quote']; ?></td>
	</tr>
	<tr>
		<td colspan="2"><strong>Details:</strong></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo $project['project_details']; ?></td>
	</tr>
	<tr>
		<td><strong>Project Tag(s):</strong></td>
		<td><?php echo $project['project_tags']; ?></td>
	</tr>
</table>

<hr/>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h2 class="panel-title">Customer</h2>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<tbody>
				<?php
					if(empty($customer)){
				?>
				<tr>
					<td>Project is not currently assigned to a customer.</td>
				</tr>
				<?php
					}else{
						foreach($customer as $row){
				?>
				<tr>
					<td><?php echo $row['customer_name']; ?></td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h2 class="panel-title">Assigned Department(s)</h2>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<tbody>
				<?php
					if(empty($departments)){
				?>
				<tr>
					<td>Project is not currently assigned to any departments.</td>
				</tr>
				<?php
					}else{
						foreach($departments as $row){
				?>
				<tr>
					<td><?php echo $row['department_name']; ?></td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h2 class="panel-title">Assigned Employee(s)</h2>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<tbody>
				<?php
					if(empty($employees)){
				?>
				<tr>
					<td>Project is not currently assigned to any employees.</td>
				</tr>
				<?php
					}else{
						foreach($employees as $row){
				?>
				<tr>
					<td><?php echo $row['employee_name']; ?></td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<hr/>

<h3>Task Manager</h3>
<table class="table table-striped">
	<thead>
		<tr>
			<td></td>
			<td width="5%"></td>
			<td width="5%"></td>
		</tr>
		<tr>
			<td><?php echo form_input('task','','class="form-control" maxlength="250" data-required'); ?></td>
			<td colspan="2"><?php echo form_submit('action','Add Task','class="btn btn-block btn-primary"'); ?></td>
		</tr>
	</thead>
	<tbody>
		<?php
			if(empty($tasks)){
		?>
		<tr>
			<td colspan="3">Project does not currently have any tasks.</td>
		</tr>
		<?php
			}else{
				$task_num=0;
				foreach($tasks as $row){
					$task_num++;
		?>
		<tr>
			<td><?php echo $task_num.". ".$row['task']; ?></td>
			<?php
				if($row['task_status']=="C"){
			?>
			<td><span class="btn btn-block btn-success glyphicon glyphicon-ok"></span></td>
			<?php
				}else{
			?>
			<td><?php echo anchor('projects/complete_task/'.$row['project_id'].'/'.$row['task_id'],'<span class=""></span>','class="btn btn-block btn-danger glyphicon glyphicon-remove"'); ?></td>
			<?php
				}
			?>
			<td><?php echo anchor('projects/delete_task/'.$row['project_id'].'/'.$row['task_id'],'','class="btn btn-danger glyphicon glyphicon-trash"'); ?></td>
		</tr>
		<?php
				}
			}
		?>
	</tbody>
</table>

<hr/>

<h3>Attached Files</h3>
<table class="table table-striped">
	<thead>
		<tr>
			<td>
				<?php echo form_upload('userfile'); ?>
			</td>
			<td width="10%">
				<?php echo form_submit('action','Add File','class="btn btn-block btn-primary"'); ?>
			</td>
		</tr>
	</thead>
	<tbody>
		<?php
			$file_num=0;
			if(empty($files)){
		?>
		<tr>
			<td colspan="2">Project does not currently have any attached files.</td>
		</tr>
		<?php
			}else{
				foreach($files as $row){
					$file_num++;
		?>
		<tr>
			<td><?php echo anchor('public/files/projects/'.$row['project_id']."/".$row['file_name'],$file_num.". ".$row['file_name'],'target="_blank"'); ?></td>
			<td><?php echo anchor('projects/delete_file/'.$row['project_id'].'/'.$row['file_id'],'','class="btn btn-danger glyphicon glyphicon-trash"'); ?></td>
		</tr>
		<?php
				}
			}
		?>
	</tbody>
</table>

<?php
switch($project['project_status']){
	case "A":
		echo form_submit('action','Restore Project','class="btn btn-lg btn-success btn-block" data-confirm="Are you sure you want to restore this project?"');
		break;
	case "C":
		echo form_submit('action','Incomplete Project','class="btn btn-lg btn-success btn-block" data-confirm="Are you sure you want to incomplete this project?"');
		echo form_submit('action','Archive Project','class="btn btn-lg btn-warning btn-block" data-confirm="Are you sure you want to archive this project?"');
		break;
	case "I":
		echo form_submit('action','Complete Project','class="btn btn-lg btn-success btn-block" data-confirm="Are you sure you want to complete this project?"');
		echo form_submit('action','Archive Project','class="btn btn-lg btn-warning btn-block" data-confirm="Are you sure you want to archive this project?"');
		break;
	
}
?>

<?php echo form_close(); ?>
