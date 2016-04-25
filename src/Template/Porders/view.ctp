<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Porder'), ['action' => 'edit', $porder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Porder'), ['action' => 'delete', $porder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $porder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Porders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Porder'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Costumers'), ['controller' => 'Costumers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Costumer'), ['controller' => 'Costumers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pordersdetails'), ['controller' => 'Pordersdetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pordersdetail'), ['controller' => 'Pordersdetails', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="porders view large-10 medium-9 columns">
    <h2><?= h($porder->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Costumer') ?></h6>
            <p><?= $porder->has('costumer') ? $this->Html->link($porder->costumer->name, ['controller' => 'Costumers', 'action' => 'view', $porder->costumer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Couleurs') ?></h6>
            <p><?= h($porder->couleurs) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($porder->description) ?></p>
            <h6 class="subheader"><?= __('Photo') ?></h6>
            <p><?= h($porder->photo) ?></p>
            <h6 class="subheader"><?= __('Designer') ?></h6>
            <p><?= h($porder->designer) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= h($porder->status) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($porder->id) ?></p>
            <h6 class="subheader"><?= __('Nbpieces') ?></h6>
            <p><?= $this->Number->format($porder->nbpieces) ?></p>
            <h6 class="subheader"><?= __('Taille') ?></h6>
            <p><?= $this->Number->format($porder->taille) ?></p>
            <h6 class="subheader"><?= __('Theme Id') ?></h6>
            <p><?= $this->Number->format($porder->theme_id) ?></p>
            <h6 class="subheader"><?= __('Prix') ?></h6>
            <p><?= $this->Number->format($porder->prix) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($porder->created) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Pordersdetails') ?></h4>
    <?php if (!empty($porder->pordersdetails)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Porder Id') ?></th>
            <th><?= __('Position') ?></th>
            <th><?= __('Form') ?></th>
            <th><?= __('Biscuit Id') ?></th>
            <th><?= __('Nbpers') ?></th>
            <th><?= __('Entremet Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($porder->pordersdetails as $pordersdetails): ?>
        <tr>
            <td><?= h($pordersdetails->porder_id) ?></td>
            <td><?= h($pordersdetails->position) ?></td>
            <td><?= h($pordersdetails->form) ?></td>
            <td><?= h($pordersdetails->biscuit_id) ?></td>
            <td><?= h($pordersdetails->nbpers) ?></td>
            <td><?= h($pordersdetails->entremet_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Pordersdetails', 'action' => 'view', $pordersdetails->porder_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Pordersdetails', 'action' => 'edit', $pordersdetails->porder_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pordersdetails', 'action' => 'delete', $pordersdetails->porder_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pordersdetails->porder_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
