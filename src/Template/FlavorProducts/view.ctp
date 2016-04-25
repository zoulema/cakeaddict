<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Flavor Product'), ['action' => 'edit', $flavorProduct->flavor_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flavor Product'), ['action' => 'delete', $flavorProduct->flavor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $flavorProduct->flavor_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flavor Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flavor Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flavors'), ['controller' => 'Flavors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flavor'), ['controller' => 'Flavors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="flavorProducts view large-10 medium-9 columns">
    <h2><?= h($flavorProduct->flavor_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Flavor') ?></h6>
            <p><?= $flavorProduct->has('flavor') ? $this->Html->link($flavorProduct->flavor->name, ['controller' => 'Flavors', 'action' => 'view', $flavorProduct->flavor->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Product') ?></h6>
            <p><?= $flavorProduct->has('product') ? $this->Html->link($flavorProduct->product->name, ['controller' => 'Products', 'action' => 'view', $flavorProduct->product->id]) : '' ?></p>
        </div>
    </div>
</div>
