<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Flavor'), ['action' => 'edit', $flavor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flavor'), ['action' => 'delete', $flavor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flavor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flavors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flavor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="flavors view large-10 medium-9 columns">
    <h2><?= h($flavor->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($flavor->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($flavor->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($flavor->description)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Orders') ?></h4>
    <?php if (!empty($flavor->orders)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Costumer Id') ?></th>
            <th><?= __('Product Id') ?></th>
            <th><?= __('Shape') ?></th>
            <th><?= __('Flavor Id') ?></th>
            <th><?= __('Price') ?></th>
            <th><?= __('Nbpersonne') ?></th>
            <th><?= __('Quantity') ?></th>
            <th><?= __('Occasion') ?></th>
            <th><?= __('Decor') ?></th>
            <th><?= __('Inscription') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('Comment') ?></th>
            <th><?= __('Status') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($flavor->orders as $orders): ?>
        <tr>
            <td><?= h($orders->id) ?></td>
            <td><?= h($orders->costumer_id) ?></td>
            <td><?= h($orders->product_id) ?></td>
            <td><?= h($orders->shape) ?></td>
            <td><?= h($orders->flavor_id) ?></td>
            <td><?= h($orders->price) ?></td>
            <td><?= h($orders->nbpersonne) ?></td>
            <td><?= h($orders->quantity) ?></td>
            <td><?= h($orders->occasion) ?></td>
            <td><?= h($orders->decor) ?></td>
            <td><?= h($orders->inscription) ?></td>
            <td><?= h($orders->address) ?></td>
            <td><?= h($orders->comment) ?></td>
            <td><?= h($orders->status) ?></td>
            <td><?= h($orders->created) ?></td>
            <td><?= h($orders->modified) ?></td>

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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($flavor->products)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Reference') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Flavor Id') ?></th>
            <th><?= __('Shape') ?></th>
            <th><?= __('Prix') ?></th>
            <th><?= __('Page') ?></th>
            <th><?= __('Temps U') ?></th>
            <th><?= __('Remarque') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($flavor->products as $products): ?>
        <tr>
            <td><?= h($products->id) ?></td>
            <td><?= h($products->reference) ?></td>
            <td><?= h($products->name) ?></td>
            <td><?= h($products->description) ?></td>
            <td><?= h($products->flavor_id) ?></td>
            <td><?= h($products->shape) ?></td>
            <td><?= h($products->prix) ?></td>
            <td><?= h($products->page) ?></td>
            <td><?= h($products->temps_u) ?></td>
            <td><?= h($products->remarque) ?></td>
            <td><?= h($products->created) ?></td>
            <td><?= h($products->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
