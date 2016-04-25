<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Category Product'), ['action' => 'edit', $categoryProduct->category_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category Product'), ['action' => 'delete', $categoryProduct->category_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryProduct->category_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Category Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="categoryProducts view large-10 medium-9 columns">
    <h2><?= h($categoryProduct->category_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $categoryProduct->has('category') ? $this->Html->link($categoryProduct->category->name, ['controller' => 'Categories', 'action' => 'view', $categoryProduct->category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Product') ?></h6>
            <p><?= $categoryProduct->has('product') ? $this->Html->link($categoryProduct->product->name, ['controller' => 'Products', 'action' => 'view', $categoryProduct->product->id]) : '' ?></p>
        </div>
    </div>
</div>
