<div class="messages index large-9 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('costumer_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($messages as $message): ?>
        <tr>
            <td><?= $this->Number->format($message->id) ?></td>
            <td><?= $this->Number->format($message->costumer_id) ?></td>
            <td><?= h($message->created) ?></td>
            <td><?= h($message->status) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Voir'), ['action' => 'view', $message->id]) ?>
                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $message->id]) ?>
                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $message->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $message->id)]) ?>
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
<div class="actions columns large-3 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Rédiger'), ['action' => 'add'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('Messages envoyés'), ['controller' => 'Users', 'action' => 'add'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>