<div class="departments view">
<h2><?php echo h($department['Department']['dept_name']); ?></h2>

</div>
<div class="related">
	<h3><?php echo __('Users'); ?></h3>
	<?php if (!empty($department['User'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<tr>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Ext'); ?></th>
		<th><?php echo __('Emailaddress'); ?></th>
		<th><?php echo __('Pto Balance'); ?></th>
		<th><?php echo __('Hire Date'); ?></th>
		<!-- <th class="actions"><?php echo __('Actions'); ?></th> -->
	</tr>
	<?php
		$i = 0;
		foreach ($department['User'] as $user): ?>
		<tr>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['ext']; ?></td>
			<td><?php echo $user['emailaddress']; ?></td>
			<td><?php echo $user['pto_balance']; ?></td>
			<td><?php echo $user['hire_date']; ?></td>
			<!-- <td class="actions"> -->
				<?php //echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php //echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php //echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			<!-- </td> -->
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


<?php
/**
*<div class="actions">
*	<h3><?php echo __('Actions'); ?></h3>
*	<ul>
*		<li><?php echo $this->Html->link(__('Edit Department'), array('action' => 'edit', $department['Department']['id'])); ?> </li>
*		<li><?php echo $this->Form->postLink(__('Delete Department'), array('action' => 'delete', $department['Department']['id']), null, __('Are you sure you want to delete # %s?', $department['Department']['id'])); ?> </li>
*		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?> </li>
*		<li><?php echo $this->Html->link(__('New Department'), array('action' => 'add')); ?> </li>
*		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
*		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
*	</ul>
*</div>
**/
?>