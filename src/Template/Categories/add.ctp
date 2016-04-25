<div class="order pad margin form large-9 medium-8 left">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend class="titlecenter"><?= __('Ajouter une Ajouter Catégorie') ?></legend><br>
        <?php
            echo $this->Form->input('name',['label'=> 'Nom de la catégorie']);
            echo $this->Form->input('description',['label'=> 'Veuillez décrire la catégorie']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Voir Catégories'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('Liste des  Produits'), ['controller' => 'Products', 'action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
        <li><?= $this->Html->link(__('Ajouter Produit'), ['controller' => 'Products', 'action' => 'add'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>