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
            <th colspan="2"><?= $this->Paginator->sort('product_id','Item') ?></th>
            <th><?= $this->Paginator->sort('shape','Forme') ?></th>
            <th><?= $this->Paginator->sort('flavor_id','Saveur') ?></th>
            <th><?= $this->Paginator->sort('price','Prix') ?></th>
            <th><?= $this->Paginator->sort('nbpersonne','Nb. Pers.') ?></th>
            <th><?= $this->Paginator->sort('quantity','Qté') ?></th>
            <th><?= $this->Paginator->sort('created','Date') ?></th>
            <th><?= $this->Paginator->sort('status','Status') ?></th>
            <th class="actions" colspan="3"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= $this->Number->format($order->id) ?></td>
            <td colspan="2">
            <?= $order->has('costumer') ? $this->Html->link($order->costumer->name, ['controller' => 'Costumers', 'action' => 'view', $order->costumer->id]) : '' ?>
            </td>
            <td colspan="2">
                <?= $order->has('product') ? $this->Html->link($order->product->name, ['controller' => 'Products', 'action' => 'view', $order->product->id]) : '' ?>
            </td>
            <td><?= h($shapes[$order->shape]) ?></td>
            <td><?= h($flavors[$order->flavor_id]) ?></td>
            <td><?= $this->Number->format($order->price) ?></td>
            <td><?= $this->Number->format($order->nbpersonne) ?></td>
            <td><?= $this->Number->format($order->quantity) ?></td>
            <td><?= date('d-m-Y',time($order->created)) ?></td>
            <td><?= h($order->status) ?></td>
            <td class="actions" colspan="3">
                <?= $this->Html->link(__('Détails'), ['action' => 'view', $order->id],['class'=>'btn btn-primary','title'=>'Cliquer ici pour voir les Détails de cette commande']) ?>
                <?= $this->Html->link(__('Mod.'), ['action' => 'edit', $order->id],['class'=>'btn btn-primary','title'=>'Cliquer ici pour modifier cette commande']) ?>
                <?= $this->Form->postLink(__('Sup.'), ['action' => 'delete', $order->id],['class'=>'btn btn-primary','title'=>'Cliquer ici pour supprimer cette commande'], ['confirm' => __('Etes-vous sûr de vouloir supprimer la commande # {0}?', $order->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Précédent')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Suivant') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
