<?php
	$active=array(
		''			=> '',
		'all'		=> '',
		'closed'	=> '',
		'archive'	=> '',
	);
	
	$active[$this->current_page]='active';
?>

<ul class="nav nav-tabs">
	<li class="<?php echo $active['']; ?>"><?php echo anchor('support','Open'); ?></li>
	<li class="<?php echo $active['closed']; ?>"><?php echo anchor('support/closed','Closed'); ?></li>
	<li class="<?php echo $active['archive']; ?>"><?php echo anchor('support/archive','Archived'); ?></li>
	<li class="<?php echo $active['all']; ?>"><?php echo anchor('support/all','All Support'); ?></li>
</ul>

<br/>
