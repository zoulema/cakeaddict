<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Flavor Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flavors'), ['controller' => 'Flavors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flavor'), ['controller' => 'Flavors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="flavorProducts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('flavor_id') ?></th>
            <th><?= $this->Paginator->sort('product_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($flavorProducts as $flavorProduct): ?>
        <tr>
            <td>
                <?= $flavorProduct->has('flavor') ? $this->Html->link($flavorProduct->flavor->name, ['controller' => 'Flavors', 'action' => 'view', $flavorProduct->flavor->id]) : '' ?>
            </td>
            <td>
                <?= $flavorProduct->has('product') ? $this->Html->link($flavorProduct->product->name, ['controller' => 'Products', 'action' => 'view', $flavorProduct->product->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $flavorProduct->flavor_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flavorProduct->flavor_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flavorProduct->flavor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $flavorProduct->flavor_id)]) ?>
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
