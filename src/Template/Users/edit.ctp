<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?></li>
    </ul>
</div>
<div class="users form large-8 medium-7">
    <br><br>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?php __('Edit User') ?></legend>
        <?php 
            echo $this->Form->input('fullname',["label"=>"Nom complet"]);
            echo $this->Form->input('uname',["label"=>"Nom d'utilisateur"]);
            echo $this->Form->input('passwd',["label"=>"Mot de passe"]);
            echo $this->Form->input('role',["options"=>['admin'=>"Administrateur","operator"=>"Operateur"]]);
          ?>
        <br>
        <?= $this->Form->button(__('Modifier'),["class"=>"btn btn-primary"],["class"=>"success"],["class"=>"btn btn-primary"]) ?>
    </fieldset>
    <?= $this->Form->end() ?>
</div>
