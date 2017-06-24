<div id="home">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title">Open Support</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Support</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(empty($support_open)){
					?>
					<tr>
						<td colspan="2">No open support at this time.</td>
					</tr>
					<?php
						}else{
							foreach($support_open as $row){
								$link='support/view/'.$row['support_id'];
					?>
					<tr>
						<td><?php echo anchor($link, $row['support_name']); ?></td>
						<td><?php echo anchor($link, $this->format->date($row['support_date'])." ".$this->format->time($row['support_time'])); ?></td>
					</tr>
					<?php
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
	<div class="clear"></div>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Incomplete Projects</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Project</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(empty($projects_incomplete)){
					?>
					<tr>
						<td colspan="2">No incomplete projects at this time.</td>
					</tr>
					<?php
						}else{
							foreach($projects_incomplete as $row){
								$link='projects/view/'.$row['project_id'];
					?>
					<tr>
						<td><?php echo anchor($link, $row['project_name']); ?></td>
						<td><?php echo anchor($link, $this->format->date($row['project_date'])); ?></td>
					</tr>
					<?php
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
	<div class="clear"></div>
	
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Recent Quotes</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Quote</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(empty($quotes)){
					?>
					<tr>
						<td colspan="2">No quotes at this time.</td>
					</tr>
					<?php
						}else{
							foreach($quotes as $row){
								$link='projects/view/'.$row['project_id'];
					?>
					<tr>
						<td><?php echo anchor($link, $row['project_name']); ?></td>
						<td><?php echo anchor($link, $this->format->date($row['project_date'])); ?></td>
					</tr>
					<?php
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
