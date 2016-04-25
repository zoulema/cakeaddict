<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Livraisons'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('Voir Commandes'), ['controller' => 'Orders', 'action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('Ajouter Commande'), ['controller' => 'Orders', 'action' => 'add'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>
<div class="users form large-8 medium-7">
    <?= $this->Form->create($delivery) ?>
    <fieldset>
        <legend><?= __('Add Delivery') ?></legend>
        <?php
            echo $this->Form->input('order_id', ['options' => $orders]);
            echo $this->Form->input('method');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
