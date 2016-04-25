<div class="costumers index large-12 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id','Num') ?></th>
            <th><?= $this->Paginator->sort('firstname','Prénom') ?></th>
            <th><?= $this->Paginator->sort('lastname','Nom') ?></th>
            <th><?= $this->Paginator->sort('phone','Téléphone') ?></th>
            <th><?= $this->Paginator->sort('city','Ville') ?></th>
            <th><?= $this->Paginator->sort('area','Quartier/village') ?></th>
            <th><?= $this->Paginator->sort('housenumber','N° Carré') ?></th>
            <th class="actions" colspan="3"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($costumers as $costumer): ?>
        <tr>
            <td><?= $this->Number->format($costumer->id) ?></td>
            <td><?= h($costumer->firstname) ?></td>
            <td><?= h($costumer->lastname) ?></td>
            <td><?= h($costumer->phone) ?></td>
            <td><?= h($costumer->city) ?></td>
            <td><?= h($costumer->area) ?></td>
            <td><?= h($costumer->housenumber) ?></td>
            <td class="actions" colspan="3">
                <?= $this->Html->link(__('Voir'), ['action' => 'view', $costumer->id],['class'=>'btn btn-primary']) ?>
                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $costumer->id],['class'=>'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $costumer->id],['class'=>'btn btn-primary'], ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $costumer->id)]) ?>
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
