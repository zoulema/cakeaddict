<!-- <div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Flavors'), ['controller' => 'Flavors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flavor'), ['controller' => 'Flavors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Category Products'), ['controller' => 'CategoryProducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category Product'), ['controller' => 'CategoryProducts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</div> -->
<div class="products form large-12 medium-9 columns">
<br>
<br>
    <?= $this->Form->create($product,['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Ajouter un produit') ?></legend>
<br>
        <?php
            echo $this->Form->input('reference',['label'=>'Référence']);
            echo $this->Form->input('name',['label'=>'Nom du produit']);
            echo $this->Form->input('description');
            echo $this->Form->input('flavor', ['options' => $flavors,'label'=>'Saveurs','multiple'=>true]);
            echo $this->Form->input('shape',['label'=>'Forme','multiple'=>true]);
            echo $this->Form->input('prix');
            echo $this->Form->input('page');
            echo $this->Form->input('temps_u',['label'=>'Temps unitaire de réalisation (en Heure)']);
            echo $this->Form->input('remarque');
            echo $this->Form->input('image',['label'=>'Image du gâteau','type'=>'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
