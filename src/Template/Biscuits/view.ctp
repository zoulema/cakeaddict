<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Biscuit'), ['action' => 'edit', $biscuit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Biscuit'), ['action' => 'delete', $biscuit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $biscuit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Biscuits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biscuit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Biscuit Entremets'), ['controller' => 'BiscuitEntremets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biscuit Entremet'), ['controller' => 'BiscuitEntremets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="biscuits view large-10 medium-9 columns">
    <h2><?= h($biscuit->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($biscuit->name) ?></p>
            <h6 class="subheader"><?= __('Saveur') ?></h6>
            <p><?= h($biscuit->saveur) ?></p>
            <h6 class="subheader"><?= __('Entremet') ?></h6>
            <p><?= h($biscuit->entremet) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($biscuit->id) ?></p>
            <h6 class="subheader"><?= __('Prix') ?></h6>
            <p><?= $this->Number->format($biscuit->prix) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Biscuit Entremets') ?></h4>
    <?php if (!empty($biscuit->biscuit_entremets)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Biscuit Id') ?></th>
            <th><?= __('Entremet Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($biscuit->biscuit_entremets as $biscuitEntremets): ?>
        <tr>
            <td><?= h($biscuitEntremets->biscuit_id) ?></td>
            <td><?= h($biscuitEntremets->entremet_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'BiscuitEntremets', 'action' => 'view', $biscuitEntremets->biscuit_id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'BiscuitEntremets', 'action' => 'edit', $biscuitEntremets->biscuit_id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'BiscuitEntremets', 'action' => 'delete', $biscuitEntremets->biscuit_id], ['confirm' => __('Are you sure you want to delete # {0}?', $biscuitEntremets->biscuit_id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
