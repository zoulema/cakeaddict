<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'delete', $notification->id],
                ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $notification->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Notifications'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>
<div class="notifications form large-10 medium-9 columns">
    <?= $this->Form->create($notification) ?>
    <fieldset>
        <legend><?= __('Edit Notification') ?></legend>
        <?php
            echo $this->Form->input('description');
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
