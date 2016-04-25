<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Pordersdetail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Porders'), ['controller' => 'Porders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Porder'), ['controller' => 'Porders', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="pordersdetails index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('porder_id') ?></th>
            <th><?= $this->Paginator->sort('position') ?></th>
            <th><?= $this->Paginator->sort('form') ?></th>
            <th><?= $this->Paginator->sort('biscuit_id') ?></th>
            <th><?= $this->Paginator->sort('nbpers') ?></th>
            <th><?= $this->Paginator->sort('entremet_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pordersdetails as $pordersdetail): ?>
        <tr>
            <td>
                <?= $pordersdetail->has('porder') ? $this->Html->link($pordersdetail->porder->id, ['controller' => 'Porders', 'action' => 'view', $pordersdetail->porder->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($pordersdetail->position) ?></td>
            <td><?= $this->Number->format($pordersdetail->form) ?></td>
            <td><?= $this->Number->format($pordersdetail->biscuit_id) ?></td>
            <td><?= $this->Number->format($pordersdetail->nbpers) ?></td>
            <td><?= $this->Number->format($pordersdetail->entremet_id) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $pordersdetail->porder_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pordersdetail->porder_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pordersdetail->porder_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pordersdetail->porder_id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
