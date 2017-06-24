<?php
	$active=array(
		'admin'		=> '',
		'projects'	=> '',
		'support'	=> '',
	);
	
	//Set the current page as active.
	$active[$this->current_system]='active';
?>
<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
		<?php
			if($this->session->userdata('employee_admin')=="CHECKED"){
		?>
		<li class="dropdown <?php echo $active['admin']; ?>">
            <a href="#" class="dropdown-toggle" aria-expanded="false" role="button" data-toggle="dropdown">Admin <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><?php echo anchor('admin/departments', 'Departments'); ?></li>
                <li><?php echo anchor('admin/employees', 'Employees'); ?></li>
                <li><?php echo anchor('admin/customers', 'Customers'); ?></li>
            </ul>
        </li>
		<?php
			}
		?>
		<li class="<?php echo $active['projects']; ?>"><?php echo anchor('projects','Projects'); ?></li>
		<li class="<?php echo $active['support']; ?>"><?php echo anchor('support','Support'); ?></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
			<a href="#" class="dropdown-toggle" aria-expanded="false" role="button" data-toggle="dropdown"><?php echo $this->session->userdata('employee_name'); ?> <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><?php echo anchor('user/settings', 'Settings'); ?></li>
				<li class="divider"></li>
				<li><?php echo anchor('employee/logout', 'Sign Out'); ?></li>
			</ul>
		</li>
    </ul>
</div>
