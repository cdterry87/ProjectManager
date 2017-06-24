<?php echo anchor('admin/customers/form/'.$customer['customer_id'],'Edit Customer','class="btn btn-block btn-lg btn-primary"'); ?>

<h1><?php echo $customer['customer_name']; ?></h1>

<table class="table table-condensed">
	<tr>
		<td width="10%"><strong>Address:</strong></td>
		<td><?php echo $customer['customer_address']; ?></td>
	</tr>
	<tr>
		<td><strong>City/State/Zip:</strong></td>
		<td><?php echo $customer['customer_city'].", ".$customer['customer_state']." ".$customer['customer_zip']; ?></td>
	</tr>
	<tr>
		<td><strong>Phone:</strong></td>
		<td><?php echo $this->format->phone($customer['customer_phone']); ?></td>
	</tr>
	<tr>
		<td colspan="2"><strong>Details:</strong></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo $customer['customer_info']; ?></td>
	</tr>
</table>

<hr/>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h2 class="panel-title">Quotes</h2>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<tbody>
				<?php
					if(empty($projects_quotes)){
				?>
				<tr>
					<td>There are currently no quotes for this customer.</td>
				</tr>
				<?php
					}else{
						foreach($projects_quotes as $row){
							$link='projects/form/'.$row['project_id'];
				?>
				<tr>
					<td><?php echo anchor($link, $row['project_name']); ?></td>
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
		<h2 class="panel-title">Projects</h2>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th><?php echo anchor('projects/incomplete','Incomplete'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
					if(empty($projects_incomplete)){
				?>
				<tr>
					<td>There are currently no incomplete projects for this customer.</td>
				</tr>
				<?php
					}else{
						foreach($projects_incomplete as $row){
							$link='projects/form/'.$row['project_id'];
				?>
				<tr>
					<td><?php echo anchor($link, $row['project_name']); ?></td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
		
		<hr/>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th><?php echo anchor('projects/complete','Complete'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
					if(empty($projects_complete)){
				?>
				<tr>
					<td>There are currently no complete projects for this customer.</td>
				</tr>
				<?php
					}else{
						foreach($projects_complete as $row){
							$link='projects/form/'.$row['project_id'];
				?>
				<tr>
					<td><?php echo anchor($link, $row['project_name']); ?></td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
		
		<hr/>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th><?php echo anchor('projects/archive','Archived'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
					if(empty($projects_archived)){
				?>
				<tr>
					<td>There are currently no archived projects for this customer.</td>
				</tr>
				<?php
					}else{
						foreach($projects_archived as $row){
							$link='projects/form/'.$row['project_id'];
				?>
				<tr>
					<td><?php echo anchor($link, $row['project_name']); ?></td>
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
		<h2 class="panel-title">Support</h2>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th><?php echo anchor('support/open','Open'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
					if(empty($support_open)){
				?>
				<tr>
					<td>There are currently no open support issues for this customer.</td>
				</tr>
				<?php
					}else{
						foreach($support_open as $row){
							$link='support/form/'.$row['support_id'];
				?>
				<tr>
					<td><?php echo anchor($link, $row['support_name']); ?></td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
		
		<hr/>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th><?php echo anchor('support/closed','Closed'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
					if(empty($support_closed)){
				?>
				<tr>
					<td>There are currently no closed support issues for this customer.</td>
				</tr>
				<?php
					}else{
						foreach($support_closed as $row){
							$link='support/form/'.$row['support_id'];
				?>
				<tr>
					<td><?php echo anchor($link, $row['support_name']); ?></td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
		
		<hr/>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th><?php echo anchor('support/archive','Archived'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
					if(empty($support_archived)){
				?>
				<tr>
					<td>There are currently no archived support issues for this customer.</td>
				</tr>
				<?php
					}else{
						foreach($support_archived as $row){
							$link='support/form/'.$row['support_id'];
				?>
				<tr>
					<td><?php echo anchor($link, $row['support_name']); ?></td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
	</div>
</div>
