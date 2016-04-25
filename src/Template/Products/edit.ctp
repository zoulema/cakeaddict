<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Flavors'), ['controller' => 'Flavors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flavor'), ['controller' => 'Flavors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Category Products'), ['controller' => 'CategoryProducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category Product'), ['controller' => 'CategoryProducts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="products form large-10 medium-9 columns">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->input('reference');
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('flavor_id', ['options' => $flavors]);
            echo $this->Form->input('shape');
            echo $this->Form->input('prix');
            echo $this->Form->input('page');
            echo $this->Form->input('temps_u');
            echo $this->Form->input('remarque');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
