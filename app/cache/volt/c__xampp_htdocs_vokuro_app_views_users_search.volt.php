
<ul class="pager">
    <li class="previous pull-left">
        <?php echo $this->tag->linkTo(array('users/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo $this->tag->linkTo(array('users/create', 'Create users', 'class' => 'btn btn-primary')); ?>
    </li>
</ul>

<?php $v32442890051iterated = false; ?><?php $v32442890051iterator = $page->items; $v32442890051incr = 0; $v32442890051loop = new stdClass(); $v32442890051loop->length = count($v32442890051iterator); $v32442890051loop->index = 1; $v32442890051loop->index0 = 1; $v32442890051loop->revindex = $v32442890051loop->length; $v32442890051loop->revindex0 = $v32442890051loop->length - 1; ?><?php foreach ($v32442890051iterator as $user) { ?><?php $v32442890051loop->first = ($v32442890051incr == 0); $v32442890051loop->index = $v32442890051incr + 1; $v32442890051loop->index0 = $v32442890051incr; $v32442890051loop->revindex = $v32442890051loop->length - $v32442890051incr; $v32442890051loop->revindex0 = $v32442890051loop->length - ($v32442890051incr + 1); $v32442890051loop->last = ($v32442890051incr == ($v32442890051loop->length - 1)); ?><?php $v32442890051iterated = true; ?>
<?php if ($v32442890051loop->first) { ?>
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Profile</th>
            <th>Banned?</th>
            <th>Suspended?</th>
            <th>Confirmed?</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->profile->name; ?></td>
            <td><?php echo ($user->banned == 'Y' ? 'Yes' : 'No'); ?></td>
            <td><?php echo ($user->suspended == 'Y' ? 'Yes' : 'No'); ?></td>
            <td><?php echo ($user->active == 'Y' ? 'Yes' : 'No'); ?></td>
            <td width="12%"><?php echo $this->tag->linkTo(array('users/edit/' . $user->id, '<i class="icon-pencil"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo $this->tag->linkTo(array('users/delete/' . $user->id, '<i class="icon-remove"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v32442890051loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo $this->tag->linkTo(array('users/search', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('users/search?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo $this->tag->linkTo(array('users/search?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('users/search?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v32442890051incr++; } if (!$v32442890051iterated) { ?>
    No users are recorded
<?php } ?>
