<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Notifications'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>
<div class="notifications form large-10 medium-9 columns">
    <?= $this->Form->create($notification) ?>
    <fieldset>
        <legend><?= __('Add Notification') ?></legend>
        <?php
            echo $this->Form->input('description');
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
