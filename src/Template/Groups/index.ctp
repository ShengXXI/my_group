<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group[]|\Cake\Collection\CollectionInterface $groups
 */
?>

<!DOCTYPE html>  
<html>  
      <head>  
           <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
		   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
		   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
		   
      </head>  
<body>
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
			<div class="table-responsive">  
            <table id="employee_data" class="table table-striped table-bordered">  
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
			</div>
        <hr>
        </div>
    </div>
</div>
</body>
</html>  
<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
</script>  


