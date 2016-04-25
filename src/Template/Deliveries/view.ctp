<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Delivery'), ['action' => 'edit', $delivery->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Delivery'), ['action' => 'delete', $delivery->id], ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $delivery->id)]) ?> </li>
        <li><?= $this->Html->link(__('Livraisons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvelle Livraison'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Voir Commandes'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Ajouter Commande'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="deliveries view large-10 medium-9 columns">
    <h2><?= h($delivery->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $delivery->has('order') ? $this->Html->link($delivery->order->id, ['controller' => 'Orders', 'action' => 'view', $delivery->order->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Method') ?></h6>
            <p><?= h($delivery->method) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($delivery->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($delivery->created) ?></p>
        </div>
    </div>
</div>
