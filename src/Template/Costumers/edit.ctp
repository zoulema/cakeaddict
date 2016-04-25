<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'delete', $costumer->id],
                ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $costumer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Costumers'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>
<div class="costumers form large-10 medium-9 columns">
    <?= $this->Form->create($costumer) ?>
    <fieldset>
        <legend><?= __('Modification des informations d\'un client') ?></legend>
        <?php
            echo $this->Form->input('lastname',['label'=>'Nom de famille']);
            echo $this->Form->input('firstname',['label'=>'Prénom']);
            echo $this->Form->input('phone',['label'=>'Numéro de téléphone']);
            echo $this->Form->input('city',['label'=>'Ville']);
            echo $this->Form->input('area',['label'=>'Quartier/Village']);
            echo $this->Form->input('housenumber',['label'=>'Numéro de Caré']);
            echo $this->Form->input('presentation',['label'=>'Présentation du client']);
            echo $this->Form->input('place',['label'=>'Lieu public proche']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
