<div class="actions columns large-3 medium-4">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Biscuit Flavors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Biscuits'), ['controller' => 'Biscuits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biscuit'), ['controller' => 'Biscuits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flavors'), ['controller' => 'Flavors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flavor'), ['controller' => 'Flavors', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="biscuitFlavors form large-8 medium-8 columns">
<br>
    <?= $this->Form->create($biscuitFlavor) ?>
    <fieldset class="medium-8">
        <legend><?= __('Association Biscuit de base et saveurs') ?></legend>
        <br>
        <?= $this->Form->input('biscuit_id', ['label'=>'Biscuit','type'=>'select','options' => $biscuits, 'empty'=>'Choisissez un biscuit']); ?>
        <?= $this->Form->input('flavor_id', ['label'=>'Saveur','type'=>'select','options' => $flavors, 'empty'=>'Choisissez une saveur']); ?>

        <br>

        <?= $this->Form->button(__('Enregistrer')) ?>
    
    </fieldset>
    <?= $this->Form->end() ?>
</div>
