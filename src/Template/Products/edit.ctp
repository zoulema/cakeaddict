
<div class="products form large-10 medium-9 columns">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->input('reference',['label'=>'Référence']);
            echo $this->Form->input('name',['label'=>'Nom du produit']);
            echo $this->Form->input('description');
            echo $this->Form->input('flavor', ['options' => $flavors,'label'=>'Saveurs','multiple'=>true]);
            echo $this->Form->input('shape',['label'=>'Forme','multiple'=>true]);
            echo $this->Form->input('prix');
            echo $this->Form->input('page');
            echo $this->Form->input('temps_u',['label'=>'Temps unitaire de réalisation (en Heure)']);
            echo $this->Form->input('remarque');
            echo $this->Form->input('image',['label'=>'Changer l\'image du gâteau','type'=>'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Produits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Saveurs'), ['controller' => 'Flavors', 'action' => 'index']) ?></li>
    </ul>
</div>