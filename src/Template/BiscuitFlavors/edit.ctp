<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $biscuitFlavor->biscuit_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $biscuitFlavor->biscuit_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Biscuit Flavors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Biscuits'), ['controller' => 'Biscuits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biscuit'), ['controller' => 'Biscuits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flavors'), ['controller' => 'Flavors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flavor'), ['controller' => 'Flavors', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="biscuitFlavors form large-10 medium-9 columns">
    <?= $this->Form->create($biscuitFlavor) ?>
    <fieldset>
        <legend><?= __('Edit Biscuit Flavor') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
