<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flavors'), ['controller' => 'Flavors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flavor'), ['controller' => 'Flavors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category Products'), ['controller' => 'CategoryProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category Product'), ['controller' => 'CategoryProducts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="products view large-10 medium-9 columns">
    <h2><?= h($product->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Reference') ?></h6>
            <p><?= h($product->reference) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($product->name) ?></p>
            <h6 class="subheader"><?= __('Flavor') ?></h6>
            <p><?= $product->has('flavor') ? $this->Html->link($product->flavor->name, ['controller' => 'Flavors', 'action' => 'view', $product->flavor->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Shape') ?></h6>
            <p><?= h($product->shape) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($product->id) ?></p>
            <h6 class="subheader"><?= __('Prix') ?></h6>
            <p><?= $this->Number->format($product->prix) ?></p>
            <h6 class="subheader"><?= __('Page') ?></h6>
            <p><?= $this->Number->format($product->page) ?></p>
            <h6 class="subheader"><?= __('Temps U') ?></h6>
            <p><?= $this->Number->format($product->temps_u) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($product->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($product->modified) ?></p>
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
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Category Products') ?></h4>
    <?php if (!empty($product->category_products)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Category Id') ?></th>
            <th><?= __('Product Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($product->category_products as $categoryProducts): ?>
        <tr>
            <td><?= h($categoryProducts->category_id) ?></td>
            <td><?= h($categoryProducts->product_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'CategoryProducts', 'action' => 'view', $categoryProducts->category_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'CategoryProducts', 'action' => 'edit', $categoryProducts->category_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CategoryProducts', 'action' => 'delete', $categoryProducts->category_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoryProducts->category_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Orders') ?></h4>
    <?php if (!empty($product->orders)): ?>
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
        <?php foreach ($product->orders as $orders): ?>
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
