<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $biscuitEntremet->biscuit_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $biscuitEntremet->biscuit_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Biscuit Entremets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Biscuits'), ['controller' => 'Biscuits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biscuit'), ['controller' => 'Biscuits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entremets'), ['controller' => 'Entremets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entremet'), ['controller' => 'Entremets', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="biscuitEntremets form large-10 medium-9 columns">
    <?= $this->Form->create($biscuitEntremet) ?>
    <fieldset>
        <legend><?= __('Edit Biscuit Entremet') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
