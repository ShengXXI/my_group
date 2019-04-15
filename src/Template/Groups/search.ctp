<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group[]|\Cake\Collection\CollectionInterface $groups
 */
?>
<marquee behavior="alternate"><h2>Danh sách Groups</h2></marquee>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-4">
            <div class="btn-group-vertical" data-toggle="buttons">
                <ul>
                    <h2><?= __('Actions') ?></h2>
                    <button type="button" class="btn btn-outline-primary"><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?></button>
                </ul>
            </div>
        </div>
        <div class="col-sm-8 col-md-8">
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                      <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                      <th scope="col" class="actions"><?= __('Actions') ?></th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($groups as $group): ?>
                  <tr>
                      <td><?= $this->Number->format($group->id) ?></td>
                      <td><?= h($group->name) ?></td>
                      <td><?= h($group->created) ?></td>
                      <td><?= h($group->updated) ?></td>
                      <td class="actions">
                          <button type="button" class="btn btn-outline-success"><?= $this->Html->link(__('View'), ['action' => 'view', $group->id]) ?></button>
                          <button type="button" class="btn btn-outline-info"><?= $this->Html->link(__('Edit'), ['action' => 'edit', $group->id]) ?></button>
                          <button type="button" class="btn btn-outline-danger"><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?></button>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
        <hr>
        </div>
          <div class="col-sm-4"></div>
          <div class="col-sm-4">

              <ul class="pagination">
                  <?= $this->Paginator->first('<< ' . __('first')) ?>
                  <?= $this->Paginator->prev('< ' . __('previous')) ?>
                  <p>|</p>
                  <p><?= $this->Paginator->counter(['format' => __('{{page}}')]) ?></p>
                  <p>|</p>
                  <?= $this->Paginator->next(__('next') . ' >') ?>
                  <?= $this->Paginator->last(__('last') . ' >>') ?>
              </ul>

              <center>
              <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
              </center>
          </div>
          <div class="col-sm-4"></div>
    </div>
</div>
