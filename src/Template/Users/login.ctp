<div class="actions columns large-2 medium-3">
    <h3><? __('Actions') ?></h3>
    <ul class="side-nav">
    <li></li>
    </ul>
</div>
<div class="users form large-8 medium-7">

<br><br>
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __("Merci de rentrer vos nom d'utilisateur et mot de passe") ?></legend>

        <?php
            echo $this->Form->input('uname',["label"=>"Nom d'utilisateur"]);
            echo $this->Form->input('passwd',["label"=>"Mot de passe"]);
        ?>
    <br>
    <?= $this->Form->button(__('Se Connecter'),["class"=>"btn btn-primary"]) ?>
    </fieldset>
    <?= $this->Form->end() ?>
</div>
