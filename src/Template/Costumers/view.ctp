<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Costumer'), ['action' => 'edit', $costumer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Costumer'), ['action' => 'delete', $costumer->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $costumer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Costumers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Costumer'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="costumers view large-10 medium-9 columns">
    <h2><?= h($costumer->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($costumer->phone) ?></p>
            <h6 class="subheader"><?= __('Firstname') ?></h6>
            <p><?= h($costumer->firstname) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($costumer->lastname) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($costumer->city) ?></p>
            <h6 class="subheader"><?= __('Area') ?></h6>
            <p><?= h($costumer->area) ?></p>
            <h6 class="subheader"><?= __('Housenumber') ?></h6>
            <p><?= h($costumer->housenumber) ?></p>
            <h6 class="subheader"><?= __('Presentation') ?></h6>
            <p><?= h($costumer->presentation) ?></p>
            <h6 class="subheader"><?= __('Place') ?></h6>
            <p><?= h($costumer->place) ?></p>
            <h6 class="subheader"><?= __('Account') ?></h6>
            <p><?= h($costumer->account) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($costumer->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($costumer->created) ?></p>
        </div>
    </div>
</div>
