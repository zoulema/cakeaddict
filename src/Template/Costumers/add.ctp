<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Liste  des clients'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>
<div class="users form large-8 medium-7">
<br><br>
    <?= $this->Form->create($costumer) ?>
    <fieldset>
        <legend><?= __('Ajouter un nouveau client') ?></legend>
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
    <?= $this->Form->button(__('Enregistrer'),["class"=>"btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
