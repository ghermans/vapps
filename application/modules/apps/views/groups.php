<div class="page-header">
    <h1>Applicatie groepen</h1>
</div>
<div class="col-md-3">
<ul class="list-group">
    <?php foreach ($groups as $groups_item): ?>
    <li class="list-group-item"><span class="<?php echo $groups_item['apps_group_icon']; ?>"> <?php echo $groups_item['apps_group_name']; ?></span>
    <div class="pull-right">
         <a href="#"><i class="fa fa-pencil"></i></a> <a href="#"><i class="fa fa-times"></i></a>
    </div>
    </li>
    
    <?php endforeach ?>
</ul>
    </div>

