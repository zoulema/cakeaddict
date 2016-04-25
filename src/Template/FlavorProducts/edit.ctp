<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $flavorProduct->flavor_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $flavorProduct->flavor_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Flavor Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Flavors'), ['controller' => 'Flavors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flavor'), ['controller' => 'Flavors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="flavorProducts form large-10 medium-9 columns">
    <?= $this->Form->create($flavorProduct) ?>
    <fieldset>
        <legend><?= __('Edit Flavor Product') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
