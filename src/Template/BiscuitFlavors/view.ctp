<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Biscuit Flavor'), ['action' => 'edit', $biscuitFlavor->biscuit_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Biscuit Flavor'), ['action' => 'delete', $biscuitFlavor->biscuit_id], ['confirm' => __('Are you sure you want to delete # {0}?', $biscuitFlavor->biscuit_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Biscuit Flavors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biscuit Flavor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Biscuits'), ['controller' => 'Biscuits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biscuit'), ['controller' => 'Biscuits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flavors'), ['controller' => 'Flavors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flavor'), ['controller' => 'Flavors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="biscuitFlavors view large-10 medium-9 columns">
    <h2><?= h($biscuitFlavor->biscuit_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Biscuit') ?></h6>
            <p><?= $biscuitFlavor->has('biscuit') ? $this->Html->link($biscuitFlavor->biscuit->name, ['controller' => 'Biscuits', 'action' => 'view', $biscuitFlavor->biscuit->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Flavor') ?></h6>
            <p><?= $biscuitFlavor->has('flavor') ? $this->Html->link($biscuitFlavor->flavor->name, ['controller' => 'Flavors', 'action' => 'view', $biscuitFlavor->flavor->id]) : '' ?></p>
        </div>
    </div>
</div>
