<!-- <div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Porder'), ['action' => 'add'],['class'=>'btn btn-primary']) ?></li>
        <li><?= $this->Html->link(__('List Costumers'), ['controller' => 'Costumers', 'action' => 'index'],['class'=>'btn btn-primary']) ?></li>
        <li><?= $this->Html->link(__('New Costumer'), ['controller' => 'Costumers', 'action' => 'add'],['class'=>'btn btn-primary']) ?></li>
        <li><?= $this->Html->link(__('List Pordersdetails'), ['controller' => 'Pordersdetails', 'action' => 'index'],['class'=>'btn btn-primary']) ?></li>
        <li><?= $this->Html->link(__('New Pordersdetail'), ['controller' => 'Pordersdetails', 'action' => 'add'],['class'=>'btn btn-primary']) ?></li>
    </ul>
</div> -->
<div class="porders index large-12 medium-12 columns pad margin">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('costumer_id') ?></th>
            <th><?= $this->Paginator->sort('nbpieces') ?></th>
            <th><?= $this->Paginator->sort('taille') ?></th>
            <th><?= $this->Paginator->sort('theme_id') ?></th>
            <th><?= $this->Paginator->sort('prix') ?></th>
            <th><?= $this->Paginator->sort('couleurs') ?></th>
            <th colspan="2" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($porders as $porder): ?>
        <tr>
            <td><?= $this->Number->format($porder->id) ?></td>
            <td>
                <?= $porder->has('costumer') ? $this->Html->link($porder->costumer->name, ['controller' => 'Costumers', 'action' => 'view', $porder->costumer->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($porder->nbpieces) ?></td>
            <td><?= $this->Number->format($porder->taille) ?></td>
            <td><?= $this->Number->format($porder->theme_id) ?></td>
            <td><?= $this->Number->format($porder->prix) ?></td>
            <td><?= h($porder->couleurs) ?></td>
            <td colspan="2"  class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $porder->id],['class'=>'btn btn-primary']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $porder->id],['class'=>'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $porder->id],['class'=>'btn btn-primary'], ['confirm' => __('Are you sure you want to delete # {0}?', $porder->id)]) ?>
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
