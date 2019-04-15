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
                    <button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?></button>
                </ul>
            </div>
        </div>
        <div class="col-sm-8 col-md-8">
            <?= $this->Form->create($group) ?>
            <fieldset>
                <legend><?= __('Add Group') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

