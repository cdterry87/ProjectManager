<?php echo form_open('projects/action'); ?>
<?php echo form_hidden('project_id'); ?>

<div><?php echo form_label('Project Name:','project_name'); ?></div>
<p><?php echo form_input('project_name','','class="form-control" maxlength="100" data-required'); ?></p>

<div><?php echo form_label('Project Type:','project_type'); ?></div>
<p><?php echo form_dropdown('project_type',$project_type,'','class="form-control" data-required'); ?></p>

<div><?php echo form_label('Requesting Customer:','customer_id'); ?></div>
<p><?php echo form_dropdown('customer_id',$customers,'','class="form-control" data-required data-label="Requesting Customer"'); ?></p>

<div><?php echo form_label('Project Details:','project_details'); ?></div>
<p><?php echo form_textarea('project_details'); ?></p>

<table>
	<tbody>
		<tr>
			<td>
				<div><?php echo form_label('Project Date:','project_date_mo'); ?></div>
				<p>
					<?php echo form_input('project_date_mo','','class="form-control" maxlength="2" size="2" data-required data-month data-autotab data-label="Project Date Month"'); ?> /
					<?php echo form_input('project_date_day','','class="form-control" maxlength="2" size="2" data-required data-day data-autotab data-label="Project Date Day"'); ?> /
					<?php echo form_input('project_date_yr','','class="form-control" maxlength="4" size="4" data-required data-year data-label="Project Date Year"'); ?>
				</p>
			</td>
			<td>
				<div><?php echo form_label('Project Due Date:','project_due_date_mo'); ?></div>
				<p>
					<?php echo form_input('project_due_date_mo','','class="form-control" maxlength="2" size="2" data-month data-autotab'); ?> /
					<?php echo form_input('project_due_date_day','','class="form-control" maxlength="2" size="2" data-day data-autotab'); ?> /
					<?php echo form_input('project_due_date_yr','','class="form-control" maxlength="4" size="4" data-year'); ?>
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<div><?php echo form_label('Project Approved Date:','project_approved_date_mo'); ?></div>
				<p>
					<?php echo form_input('project_approved_date_mo','','class="form-control" maxlength="2" size="2" data-month data-autotab'); ?> /
					<?php echo form_input('project_approved_date_day','','class="form-control" maxlength="2" size="2" data-day data-autotab'); ?> /
					<?php echo form_input('project_approved_date_yr','','class="form-control" maxlength="4" size="4" data-year'); ?>
				</p>
			</td>
			<td>
				<div><?php echo form_label('Project Start Date:','project_start_date_mo'); ?></div>
				<p>
					<?php echo form_input('project_start_date_mo','','class="form-control" maxlength="2" size="2" data-month data-autotab'); ?> /
					<?php echo form_input('project_start_date_day','','class="form-control" maxlength="2" size="2" data-day data-autotab'); ?> /
					<?php echo form_input('project_start_date_yr','','class="form-control" maxlength="4" size="4" data-year'); ?>
				</p>
			</td>
			<td>
				<div><?php echo form_label('Project Completed Date:','project_completed_date_mo'); ?></div>
				<p>
					<?php echo form_input('project_completed_date_mo','','class="form-control" maxlength="2" size="2" data-month data-autotab'); ?> /
					<?php echo form_input('project_completed_date_day','','class="form-control" maxlength="2" size="2" data-day data-autotab'); ?> /
					<?php echo form_input('project_completed_date_yr','','class="form-control" maxlength="4" size="4" data-year'); ?>
				</p>
			</td>
		</tr>
	</tbody>
</table>

<div><?php echo form_label('Project Labor (in days):','project_labor'); ?></div>
<p><?php echo form_input('project_labor','','class="form-control" maxlength="2" data-numeric'); ?></p>

<div><?php echo form_label('Project Quote:','project_quote'); ?></div>
<p><?php echo form_input('project_quote','','class="form-control" maxlength="15"'); ?></p>

<div><?php echo form_label('Project Tag(s):','project_tags'); ?></div>
<p><?php echo form_input('project_tags','','class="form-control" maxlength="100"'); ?></p>

<hr/>

<p>
	<?php echo form_label('Assigned Department(s):','');  ?>
	<?php
		if(!empty($departments)){
			foreach($departments as $row){
	?>
	<div class="col-md-4">
		<?php echo form_checkbox('department['.$row['department_id'].']',$row['department_id']); ?>
		<?php echo form_label($row['department_name'],'department['.$row['department_id'].']'); ?>
	</div>
	<?php
			}
		}else{
	?>
	There are currently no departments in the system.  <?php echo anchor('admin/departments/form','Click here to add one.'); ?>
	<?php
		}
	?>
</p>

<div class="clear"></div>

<hr/>

<p>
	<?php echo form_label('Assigned Employee(s):','');  ?>
	<?php
		if(!empty($employees)){
			foreach($employees as $row){
	?>
	<div class="col-md-4">
		<?php echo form_checkbox('employee['.$row['employee_id'].']',$row['employee_id']); ?>
		<?php echo form_label($row['employee_name'],'employee['.$row['employee_id'].']'); ?>
	</div>
	<?php
			}
		}else{
	?>
	There are currently no employees in the system.  <?php echo anchor('admin/employees/form','Click here to add one.'); ?>
	<?php
		}
	?>
</p>

<div class="clear"></div>

<br/>

<p><?php echo form_submit('action','Save','class="btn btn-lg btn-primary btn-block"'); ?></p>
<p><?php echo anchor('projects', 'Cancel', 'class="btn btn-lg btn-warning btn-block"'); ?></p>

<?php echo form_close(); ?>
