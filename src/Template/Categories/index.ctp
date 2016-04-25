<div class="categories pad margin index large-12 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id','Numéro') ?></th>
            <th><?= $this->Paginator->sort('name','Intitulé') ?></th>
            <th><?= $this->Paginator->sort('description','Description') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $this->Number->format($category->id) ?></td>
            <td><?= h($category->name) ?></td>
            <td><?= h($category->description) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Voir'), ['action' => 'view', $category->id],["class"=>"btn btn-primary"]) ?>
                <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $category->id],["class"=>"btn btn-primary"]) ?>
                <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $category->id],["class"=>"btn btn-primary"], ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $category->id)]) ?>
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
