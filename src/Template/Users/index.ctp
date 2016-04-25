<div class="users index large-12 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id','Numero') ?></th>
            <th><?= $this->Paginator->sort('fullname','Nom complet') ?></th>
            <th><?= $this->Paginator->sort('uname','Nom utilisateur') ?></th>
            <th><?= $this->Paginator->sort('role','Grade') ?></th>
            <th class="actions" colspan="2"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $this->Number->format($user->id) ?></td>
            <td><?= h($user->fullname) ?></td>
            <td><?= h($user->uname) ?></td>
            <td><?= h($user->role) ?></td>
            <td class="actions" colspan="2">
                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $user->id],['class'=>'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $user->id],['class'=>'btn btn-primary'], ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $user->id)]) ?>
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
