<?php echo $this->getContent(); ?>

<ul class="pager">
    <li class="previous pull-left">
        <?php echo $this->tag->linkTo(array('profiles/index', '&larr; Go Back')); ?>
    </li>
    <li class="pull-right">
        <?php echo $this->tag->linkTo(array('profiles/create', 'Create profiles', 'class' => 'btn btn-primary')); ?>
    </li>
</ul>

<?php $v40286456951iterated = false; ?><?php $v40286456951iterator = $page->items; $v40286456951incr = 0; $v40286456951loop = new stdClass(); $v40286456951loop->length = count($v40286456951iterator); $v40286456951loop->index = 1; $v40286456951loop->index0 = 1; $v40286456951loop->revindex = $v40286456951loop->length; $v40286456951loop->revindex0 = $v40286456951loop->length - 1; ?><?php foreach ($v40286456951iterator as $profile) { ?><?php $v40286456951loop->first = ($v40286456951incr == 0); $v40286456951loop->index = $v40286456951incr + 1; $v40286456951loop->index0 = $v40286456951incr; $v40286456951loop->revindex = $v40286456951loop->length - $v40286456951incr; $v40286456951loop->revindex0 = $v40286456951loop->length - ($v40286456951incr + 1); $v40286456951loop->last = ($v40286456951incr == ($v40286456951loop->length - 1)); ?><?php $v40286456951iterated = true; ?>
<?php if ($v40286456951loop->first) { ?>
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Active?</th>
        </tr>
    </thead>
<?php } ?>
    <tbody>
        <tr>
            <td><?php echo $profile->id; ?></td>
            <td><?php echo $profile->name; ?></td>
            <td><?php echo ($profile->active == 'Y' ? 'Yes' : 'No'); ?></td>
            <td width="12%"><?php echo $this->tag->linkTo(array('profiles/edit/' . $profile->id, '<i class="icon-pencil"></i> Edit', 'class' => 'btn')); ?></td>
            <td width="12%"><?php echo $this->tag->linkTo(array('profiles/delete/' . $profile->id, '<i class="icon-remove"></i> Delete', 'class' => 'btn')); ?></td>
        </tr>
    </tbody>
<?php if ($v40286456951loop->last) { ?>
    <tbody>
        <tr>
            <td colspan="10" align="right">
                <div class="btn-group">
                    <?php echo $this->tag->linkTo(array('profiles/search', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('profiles/search?page=' . $page->before, '<i class="icon-step-backward"></i> Previous', 'class' => 'btn ')); ?>
                    <?php echo $this->tag->linkTo(array('profiles/search?page=' . $page->next, '<i class="icon-step-forward"></i> Next', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('profiles/search?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline"><?php echo $page->current; ?>/<?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    <tbody>
</table>
<?php } ?>
<?php $v40286456951incr++; } if (!$v40286456951iterated) { ?>
    No profiles are recorded
<?php } ?>
