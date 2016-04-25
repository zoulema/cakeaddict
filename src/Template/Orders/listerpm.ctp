<?php //var_dump($order);die(); ?>
<div>
    <form>
        
    </form>
</div>
<div class="orders index large-12 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id','Numéro') ?></th>
            <th colspan="2"><?= $this->Paginator->sort('costumer_id','Client') ?></th>
            <th ><?= $this->Paginator->sort('nbpieces','Nombre de pièce') ?></th>
            <th><?= $this->Paginator->sort('taille') ?></th>
            <th><?= $this->Paginator->sort('theme') ?></th>
            <th><?= $this->Paginator->sort('prix') ?></th>
            <th><?= $this->Paginator->sort('couleurs') ?></th>
            <th><?= $this->Paginator->sort('designer','Cake Designer') ?></th>
            <th><?= $this->Paginator->sort('created','Date') ?></th>
            <th><?= $this->Paginator->sort('status','Status') ?></th>
            <th class="actions" colspan="3"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= $this->Number->format($order['id']) ?></td>
            <td colspan="2">
            <?= $this->Html->link($order['customer_id'], ['controller' => 'Costumers', 'action' => 'view', $order['customer_id']])?>
            </td>
            <td><?= $order['nbpieces'] ?>
            </td>

            <td><?= $this->Number->format($order['taille']) ?></td>
            <td><?= $this->Number->format($order['theme']) ?></td>
            <td><?= $this->Number->format($order['prix']) ?></td>

            <td><?= h($order['couleurs']) ?></td>
            <td><?=  $order['designer']  ?></td>

            <td><?= date('d-m-Y',time($order['created'])) ?></td>
            <td><?= h($order['status']) ?></td>

            <td class="actions" colspan="3">
                <?= $this->Html->link(__('Détails'), ['action' => 'view', $order['id']],['class'=>'btn btn-primary','title'=>'Cliquer ici pour voir les Détails de cette commande']) ?>
              <!--   <?= $this->Html->link(__('Mod.'), ['action' => 'edit', $order['id']],['class'=>'btn btn-primary','title'=>'Cliquer ici pour modifier cette commande']) ?> -->
                <?= $this->Form->postLink(__('Sup.'), ['action' => 'delete', $order['id']],['class'=>'btn btn-primary','title'=>'Cliquer ici pour supprimer cette commande'], ['confirm' => __('Etes-vous sûr de vouloir supprimer la commande # {0}?', $order['id'])]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
 <!--    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Précédent')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Suivant') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div> -->
</div>
