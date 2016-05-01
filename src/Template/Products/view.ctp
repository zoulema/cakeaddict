<!-- -->
<div class="products view large-12 medium-12 margin padding columns">
    <h2><?= h($product->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Reference') ?></h6>
            <p><?= h($product->reference) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($product->name) ?></p>
            <h6 class="subheader"><?= __('Saveurs') ?></h6>
            <p><?= h($product->flavor) ?></p>
            <h6 class="subheader"><?= __('Formes') ?></h6>
            <p><?= h($product->shape) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Prix') ?></h6>
            <p><?= $this->Number->format($product->prix) ?></p>
            <h6 class="subheader"><?= __('Page') ?></h6>
            <p><?= $this->Number->format($product->page) ?></p>
            <h6 class="subheader"><?= __('Temps unitaire de réalisation (en Heure)') ?></h6>
            <p><?= $this->Number->format($product->temps_u) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Ajouté le:') ?></h6>
            <p><?= h($product->created) ?></p>
            <h6 class="subheader"><?= __('Mis à jour le:') ?></h6>
            <p><?= h($product->modified) ?></p>
        </div>
        <div class="actions columns large-2 medium-2">
            <h3><?= __('Actions') ?></h3>
            <ul class="side-nav">
                <li><?= $this->Html->link(__('Mofifier'), ['action' => 'edit', $product->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
            </ul>
        </div> 
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($product->description)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Remarque') ?></h6>
            <?= $this->Text->autoParagraph(h($product->remarque)) ?>
        </div>
    </div>
</div>


<div class="related row">
    <div class="column large-12 margin padding">
    <h4 class="subheader"><?= __('Commandes liées à ce produit') ?></h4>
    <?php if (!empty($product->orders)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Numero') ?></th>
            <th><?= __('Client') ?></th>
            <th><?= __('Forme') ?></th>
            <th><?= __('Saveur') ?></th>
            <th><?= __('Prix') ?></th>
            <th><?= __('Nb pers.') ?></th>
            <th><?= __('Quantité') ?></th>
            <th><?= __('Status') ?></th>
            <th><?= __('Date') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($product->orders as $orders): ?>
        <tr>
            <td><?= h($orders->id) ?></td>
            <td><?= h($orders->costumer_id) ?></td>
            <td><?= h($orders->shape) ?></td>
            <td><?= h($orders->flavor) ?></td>
            <td><?= h($orders->price) ?></td>
            <td><?= h($orders->nbpersonne) ?></td>
            <td><?= h($orders->quantity) ?></td>
            <td><?= h($orders->status) ?></td>
            <td><?= date("d-m-Y",strtotime($orders->created)) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
