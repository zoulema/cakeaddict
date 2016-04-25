
<div class="deliveries index large-12 medium-12 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('order_id') ?></th>
            <th><?= $this->Paginator->sort('method') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($deliveries as $delivery): ?>
        <tr>
            <td><?= $this->Number->format($delivery->id) ?></td>
            <td>
                <?= $delivery->has('order') ? $this->Html->link($delivery->order->id, ['controller' => 'Orders', 'action' => 'view', $delivery->order->id]) : '' ?>
            </td>
            <td><?= h($delivery->method) ?></td>
            <td><?= h($delivery->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Voir'), ['action' => 'view', $delivery->id]) ?>
                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $delivery->id]) ?>
                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $delivery->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $delivery->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Précédent')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Suivant') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>