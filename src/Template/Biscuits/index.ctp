<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Biscuit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Biscuit Entremets'), ['controller' => 'BiscuitEntremets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biscuit Entremet'), ['controller' => 'BiscuitEntremets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="biscuits index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('saveur') ?></th>
            <th><?= $this->Paginator->sort('entremet') ?></th>
            <th><?= $this->Paginator->sort('prix') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($biscuits as $biscuit): ?>
        <tr>
            <td><?= $this->Number->format($biscuit->id) ?></td>
            <td><?= h($biscuit->name) ?></td>
            <td><?= h($biscuit->saveur) ?></td>
            <td><?= h($biscuit->entremet) ?></td>
            <td><?= $this->Number->format($biscuit->prix) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $biscuit->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $biscuit->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $biscuit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $biscuit->id)]) ?>
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
