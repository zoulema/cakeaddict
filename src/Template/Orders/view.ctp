<div class="orders view large-7 medium-6 columns pad margin left">
    <h2><?= h($order->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Product') ?></h6>
            <p><?= $order->has('product') ? $this->Html->link($order->product->name, ['controller' => 'Products', 'action' => 'view', $order->product->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Shape') ?></h6>
            <p><?= h($order->shape) ?></p>
            <h6 class="subheader"><?= __('Flavor') ?></h6>
            <p><?= h($order->flavor) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($order->id) ?></p>
            <h6 class="subheader"><?= __('Costumer Id') ?></h6>
            <p><?= $this->Number->format($order->costumer_id) ?></p>
            <h6 class="subheader"><?= __('Price') ?></h6>
            <p><?= $this->Number->format($order->price) ?></p>
            <h6 class="subheader"><?= __('Nbpersonne') ?></h6>
            <p><?= $this->Number->format($order->nbpersonne) ?></p>
            <h6 class="subheader"><?= __('Quantity') ?></h6>
            <p><?= $this->Number->format($order->quantity) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($order->created) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Occasion') ?></h6>
            <?= $this->Text->autoParagraph(h($order->occasion)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Address') ?></h6>
            <?= $this->Text->autoParagraph(h($order->address)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Comment') ?></h6>
            <?= $this->Text->autoParagraph(h($order->comment)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <?= $this->Text->autoParagraph(h($order->status)) ?>
        </div>
    </div>
</div>
<div class="actions columns large-3 medium-3 left pad margin">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Modifier'), ['action' => 'edit', $order->id],["class"=>"btn btn-primary"]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $order->id],["class"=>"btn btn-primary"], ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('Voir Commandes'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?> </li>
        <li><?= $this->Html->link(__('Ajouter Commande'), ['action' => 'add'],["class"=>"btn btn-primary"]) ?> </li>
        <li><?= $this->Html->link(__('Voir Produits'), ['controller' => 'Products', 'action' => 'index'],["class"=>"btn btn-primary"]) ?> </li>
        <li><?= $this->Html->link(__('Ajouter Produit'), ['controller' => 'Products', 'action' => 'add'],["class"=>"btn btn-primary"]) ?> </li>
        <li><?= $this->Html->link(__('Livraisons'), ['controller' => 'Deliveries', 'action' => 'index'],["class"=>"btn btn-primary"]) ?> </li>
        <li><?= $this->Html->link(__('Livrer'), ['controller' => 'Deliveries', 'action' => 'add'],["class"=>"btn btn-primary"]) ?> </li>
    </ul>
</div>
