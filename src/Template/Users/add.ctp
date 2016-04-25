<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Tout afficher'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>
<div class="users form large-8 medium-7">

<br><br>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Ajouter un utilisateur') ?></legend>

        <?php
            echo $this->Form->input('fullname',["label"=>"Nom complet"]);
            echo $this->Form->input('uname',["label"=>"Nom d'utilisateur"]);
            echo $this->Form->input('passwd',["label"=>"Mot de passe"]);
            echo $this->Form->input('role',["options"=>['admin'=>"Administrateur","operator"=>"Operateur"]]);
        ?>
    <br>
    <?= $this->Form->button(__('Enregistrer'),["class"=>"btn btn-primary"]) ?>
    </fieldset>
    <?= $this->Form->end() ?>
</div>
