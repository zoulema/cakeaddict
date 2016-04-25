
<div class="categories view large-8 medium-9 columns left pad margin">
    <h2><?= h($category->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($category->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($category->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($category->description)) ?>
        </div>
    </div>
</div>
<div class="actions columns large-3 medium-3 left">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id],["class"=>"btn btn-primary"]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id],["class"=>"btn btn-primary"], ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('Voir Catégories'), ['action' => 'index'],["class"=>"btn btn-primary"]) ?> </li>
        <li><?= $this->Html->link(__('Ajouter Catégorie'), ['action' => 'add'],["class"=>"btn btn-primary"]) ?> </li>
        <li><?= $this->Html->link(__('Voir Produits'), ['controller' => 'Products', 'action' => 'index'],["class"=>"btn btn-primary"]) ?> </li>
        <li><?= $this->Html->link(__('Ajouter Produit'), ['controller' => 'Products', 'action' => 'add'],["class"=>"btn btn-primary"]) ?> </li>
    </ul>
</div>
<div class="related row pad margin">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Voir Produits') ?></h4>
    <?php if (!empty($category->products)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Reference') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Flavor') ?></th>
            <th><?= __('Shape') ?></th>
            <th><?= __('Prix') ?></th>
            <th><?= __('Category Id') ?></th>
            <th><?= __('Page') ?></th>
            <th><?= __('Remarque') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($category->products as $products): ?>
        <tr>
            <td><?= h($products->id) ?></td>
            <td><?= h($products->reference) ?></td>
            <td><?= h($products->name) ?></td>
            <td><?= h($products->flavor) ?></td>
            <td><?= h($products->shape) ?></td>
            <td><?= h($products->prix) ?></td>
            <td><?= h($products->category_id) ?></td>
            <td><?= h($products->page) ?></td>
            <td><?= h($products->remarque) ?></td>
            <td><?= h($products->created) ?></td>
            <td><?= h($products->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('Voir'), ['controller' => 'Products', 'action' => 'view', $products->id],["class"=>"btn btn-primary"]) ?>

                <?= $this->Html->link(__('Modifier'), ['controller' => 'Products', 'action' => 'edit', $products->id],["class"=>"btn btn-primary"]) ?>

                <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Products', 'action' => 'delete', $products->id],["class"=>"btn btn-primary"], ['confirm' => __('Etes-vous sûr de vouloir supprimer  # {0}?', $products->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
