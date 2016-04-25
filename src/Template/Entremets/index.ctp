<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Entremet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orderdetails'), ['controller' => 'Orderdetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orderdetail'), ['controller' => 'Orderdetails', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="entremets index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('prix') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($entremets as $entremet): ?>
        <tr>
            <td><?= $this->Number->format($entremet->id) ?></td>
            <td><?= h($entremet->name) ?></td>
            <td><?= $this->Number->format($entremet->prix) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $entremet->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entremet->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entremet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entremet->id)]) ?>
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
