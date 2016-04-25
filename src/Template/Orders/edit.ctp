<div class="order pad margin form large-8 medium-4 left">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Modification de commande') ?></legend><br>
        <?php
            echo $this->Form->input('costumer_id',['label'=>'Client']);
            echo $this->Form->input('product_id', ['options' => $products,'label'=>'Produit']);
            echo $this->Form->input('shape',['options' => $shapes,'label'=>'Forme','empty'=>'Quelle est la forme du gâteau?']);
            echo $this->Form->input('flavor_id',['label'=>'Saveur','empty'=>'Choisissez une Saveur']);
            echo $this->Form->input('price',['label'=>'Prix']);
            echo $this->Form->input('nbpersonne',['label'=>'Nombre de part']);
            echo $this->Form->input('quantity',['label'=>'Quantité']);
            echo $this->Form->input('occasion',['options' => $occasions,'label'=>'Occasion','empty'=>'A quelle occasion?']);
            echo $this->Form->input('address',['label'=>'Adresse de livraison']);
            echo $this->Form->input('comment',['label'=>'Commentaire']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
<div class="actions columns large-3 medium-4 left"><br>
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'delete', $order->id],["class"=>"btn btn-primary"],
                ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $order->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Voir Commandes'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('Voir Produits'), ['controller' => 'Products', 'action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('Ajouter Produit'), ['controller' => 'Products', 'action' => 'add'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('Livraisons'), ['controller' => 'Deliveries', 'action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('Nouvelle Livraison'), ['controller' => 'Deliveries', 'action' => 'add'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>