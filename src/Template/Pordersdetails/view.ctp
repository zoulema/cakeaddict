<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Pordersdetail'), ['action' => 'edit', $pordersdetail->porder_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pordersdetail'), ['action' => 'delete', $pordersdetail->porder_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pordersdetail->porder_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pordersdetails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pordersdetail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Porders'), ['controller' => 'Porders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Porder'), ['controller' => 'Porders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="pordersdetails view large-10 medium-9 columns">
    <h2><?= h($pordersdetail->porder_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Porder') ?></h6>
            <p><?= $pordersdetail->has('porder') ? $this->Html->link($pordersdetail->porder->id, ['controller' => 'Porders', 'action' => 'view', $pordersdetail->porder->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Position') ?></h6>
            <p><?= $this->Number->format($pordersdetail->position) ?></p>
            <h6 class="subheader"><?= __('Form') ?></h6>
            <p><?= $this->Number->format($pordersdetail->form) ?></p>
            <h6 class="subheader"><?= __('Biscuit Id') ?></h6>
            <p><?= $this->Number->format($pordersdetail->biscuit_id) ?></p>
            <h6 class="subheader"><?= __('Nbpers') ?></h6>
            <p><?= $this->Number->format($pordersdetail->nbpers) ?></p>
            <h6 class="subheader"><?= __('Entremet Id') ?></h6>
            <p><?= $this->Number->format($pordersdetail->entremet_id) ?></p>
        </div>
    </div>
</div>
