<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Biscuit Entremet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Biscuits'), ['controller' => 'Biscuits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biscuit'), ['controller' => 'Biscuits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entremets'), ['controller' => 'Entremets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entremet'), ['controller' => 'Entremets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="biscuitEntremets index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('biscuit_id') ?></th>
            <th><?= $this->Paginator->sort('entremet_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($biscuitEntremets as $biscuitEntremet): ?>
        <tr>
            <td>
                <?= $biscuitEntremet->has('biscuit') ? $this->Html->link($biscuitEntremet->biscuit->name, ['controller' => 'Biscuits', 'action' => 'view', $biscuitEntremet->biscuit->id]) : '' ?>
            </td>
            <td>
                <?= $biscuitEntremet->has('entremet') ? $this->Html->link($biscuitEntremet->entremet->name, ['controller' => 'Entremets', 'action' => 'view', $biscuitEntremet->entremet->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $biscuitEntremet->biscuit_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $biscuitEntremet->biscuit_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $biscuitEntremet->biscuit_id], ['confirm' => __('Are you sure you want to delete # {0}?', $biscuitEntremet->biscuit_id)]) ?>
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
