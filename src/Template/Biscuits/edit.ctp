<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $biscuit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $biscuit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Biscuits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Biscuit Entremets'), ['controller' => 'BiscuitEntremets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biscuit Entremet'), ['controller' => 'BiscuitEntremets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="biscuits form large-10 medium-9 columns">
    <?= $this->Form->create($biscuit) ?>
    <fieldset>
        <legend><?= __('Edit Biscuit') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('saveur');
            echo $this->Form->input('entremet');
            echo $this->Form->input('prix');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
