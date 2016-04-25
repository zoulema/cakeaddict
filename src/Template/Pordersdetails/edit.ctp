<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pordersdetail->porder_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pordersdetail->porder_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pordersdetails'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Porders'), ['controller' => 'Porders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Porder'), ['controller' => 'Porders', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="pordersdetails form large-10 medium-9 columns">
    <?= $this->Form->create($pordersdetail) ?>
    <fieldset>
        <legend><?= __('Edit Pordersdetail') ?></legend>
        <?php
            echo $this->Form->input('form');
            echo $this->Form->input('biscuit_id');
            echo $this->Form->input('nbpers');
            echo $this->Form->input('entremet_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
