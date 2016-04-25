<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Category Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="categoryProducts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('category_id') ?></th>
            <th><?= $this->Paginator->sort('product_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($categoryProducts as $categoryProduct): ?>
        <tr>
            <td>
                <?= $categoryProduct->has('category') ? $this->Html->link($categoryProduct->category->name, ['controller' => 'Categories', 'action' => 'view', $categoryProduct->category->id]) : '' ?>
            </td>
            <td>
                <?= $categoryProduct->has('product') ? $this->Html->link($categoryProduct->product->name, ['controller' => 'Products', 'action' => 'view', $categoryProduct->product->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $categoryProduct->category_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoryProduct->category_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoryProduct->category_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryProduct->category_id)]) ?>
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
