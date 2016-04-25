<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'delete', $delivery->id],
                ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $delivery->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Livraisons'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('Voir Commandes'), ['controller' => 'Orders', 'action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('Ajouter Commande'), ['controller' => 'Orders', 'action' => 'add'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>
<div class="deliveries form large-10 medium-9 columns">
    <?= $this->Form->create($delivery) ?>
    <fieldset>
        <legend><?= __('Edit Delivery') ?></legend>
        <?php
            echo $this->Form->input('order_id', ['options' => $orders]);
            echo $this->Form->input('method');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
