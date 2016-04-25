<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Entremets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orderdetails'), ['controller' => 'Orderdetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orderdetail'), ['controller' => 'Orderdetails', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="entremets form large-10 medium-9 columns">
    <?= $this->Form->create($entremet) ?>
    <fieldset>
        <legend><?= __('Add Entremet') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('prix');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
