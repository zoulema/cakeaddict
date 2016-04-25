<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Biscuit Entremet'), ['action' => 'edit', $biscuitEntremet->biscuit_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Biscuit Entremet'), ['action' => 'delete', $biscuitEntremet->biscuit_id], ['confirm' => __('Are you sure you want to delete # {0}?', $biscuitEntremet->biscuit_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Biscuit Entremets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biscuit Entremet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Biscuits'), ['controller' => 'Biscuits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biscuit'), ['controller' => 'Biscuits', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entremets'), ['controller' => 'Entremets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entremet'), ['controller' => 'Entremets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="biscuitEntremets view large-10 medium-9 columns">
    <h2><?= h($biscuitEntremet->biscuit_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Biscuit') ?></h6>
            <p><?= $biscuitEntremet->has('biscuit') ? $this->Html->link($biscuitEntremet->biscuit->name, ['controller' => 'Biscuits', 'action' => 'view', $biscuitEntremet->biscuit->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Entremet') ?></h6>
            <p><?= $biscuitEntremet->has('entremet') ? $this->Html->link($biscuitEntremet->entremet->name, ['controller' => 'Entremets', 'action' => 'view', $biscuitEntremet->entremet->id]) : '' ?></p>
        </div>
    </div>
</div>
