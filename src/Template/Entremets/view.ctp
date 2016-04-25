<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Entremet'), ['action' => 'edit', $entremet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entremet'), ['action' => 'delete', $entremet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entremet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entremets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entremet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orderdetails'), ['controller' => 'Orderdetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orderdetail'), ['controller' => 'Orderdetails', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="entremets view large-10 medium-9 columns">
    <h2><?= h($entremet->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($entremet->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($entremet->id) ?></p>
            <h6 class="subheader"><?= __('Prix') ?></h6>
            <p><?= $this->Number->format($entremet->prix) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Orderdetails') ?></h4>
    <?php if (!empty($entremet->orderdetails)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Order Id') ?></th>
            <th><?= __('Biscuit Id') ?></th>
            <th><?= __('Flavor Id') ?></th>
            <th><?= __('Shape') ?></th>
            <th><?= __('Entremet Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($entremet->orderdetails as $orderdetails): ?>
        <tr>
            <td><?= h($orderdetails->id) ?></td>
            <td><?= h($orderdetails->order_id) ?></td>
            <td><?= h($orderdetails->biscuit_id) ?></td>
            <td><?= h($orderdetails->flavor_id) ?></td>
            <td><?= h($orderdetails->shape) ?></td>
            <td><?= h($orderdetails->entremet_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Orderdetails', 'action' => 'view', $orderdetails->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Orderdetails', 'action' => 'edit', $orderdetails->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orderdetails', 'action' => 'delete', $orderdetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetails->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
