<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-4">
            <div class="btn-group-vertical" data-toggle="buttons">
                <ul>
                    <h2><?= __('Actions') ?></h2>
					<button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->id]) ?></button>
					<br><br>
					<button type="button" class="btn btn-outline-primary"><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?></button>
					<br><br>
					<button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?></button>
					<br><br>
					<button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?></button>
                </ul>
            </div>
        </div>
		<div class="col-sm-8 col-md-8">
			<h3><?= h($group->name) ?></h3>
			<table class="vertical-table">
				<tr>
					<th scope="row"><?= __('Name') ?></th>
					<td><?= h($group->name) ?></td>
				</tr>
				<tr>
					<th scope="row"><?= __('Id') ?></th>
					<td><?= $this->Number->format($group->id) ?></td>
				</tr>
				<tr>	
					<th scope="row"><?= __('Created') ?></th>
					<td><?= h($group->created) ?></td>
				</tr>
				<tr>
					<th scope="row"><?= __('Updated') ?></th>
					<td><?= h($group->updated) ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
