<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Messages'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>
<div class="users form large-8 medium-7">
    <?= $this->Form->create($message) ?>
    <fieldset>
        <legend><?= __('Add Message') ?></legend>
        <?php
            echo $this->Form->input('content');
            echo $this->Form->input('costumer_id');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
