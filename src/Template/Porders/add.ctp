<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Porders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Costumers'), ['controller' => 'Costumers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Costumer'), ['controller' => 'Costumers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pordersdetails'), ['controller' => 'Pordersdetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pordersdetail'), ['controller' => 'Pordersdetails', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="porders form large-10 medium-9 columns">
    <?= $this->Form->create($porder) ?>
    <fieldset>
        <legend><?= __('Add Porder') ?></legend>
        <?php
            echo $this->Form->input('costumer_id', ['options' => $costumers]);
            echo $this->Form->input('nbpieces');
            echo $this->Form->input('taille');
            echo $this->Form->input('theme_id');
            echo $this->Form->input('prix');
            echo $this->Form->input('couleurs');
            echo $this->Form->input('description');
            echo $this->Form->input('photo');
            echo $this->Form->input('designer');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
