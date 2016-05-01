<?php //var_dump($products); ?>

<div class="products index large-12 medium-12 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('Numéro') ?></th>
            <th><?= $this->Paginator->sort('reference') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('flavor') ?></th>
            <th><?= $this->Paginator->sort('shape') ?></th>
            <th><?= $this->Paginator->sort('prix') ?></th>
            <th><?= $this->Paginator->sort('page') ?></th>
            <th><?= $this->Paginator->sort('Image') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $this->Number->format($product->id) ?></td>
            <td><?= h($product->reference) ?></td>
            <td><?= h($product->name) ?></td>
            <td>
                <?= $product->flavor?>
            </td>
            <td><?= h($product->shape) ?></td>
            <td><?= $this->Number->format($product->prix) ?></td>
            <td><?= $this->Number->format($product->page) ?></td>
            <td><?= $this->Html->image("/prod/".$product->image) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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