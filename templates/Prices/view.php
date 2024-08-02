<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Price $price
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Price'), ['action' => 'edit', $price->price_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Price'), ['action' => 'delete', $price->price_id], ['confirm' => __('Are you sure you want to delete # {0}?', $price->price_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Prices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Price'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="prices view content">
            <h3><?= h($price->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($price->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pricepattern') ?></th>
                    <td><?= $price->hasValue('pricepattern') ? $this->Html->link($price->pricepattern->name, ['controller' => 'Pricepatterns', 'action' => 'view', $price->pricepattern->price_pattern_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Price Id') ?></th>
                    <td><?= $this->Number->format($price->price_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $price->amount === null ? '' : $this->Number->format($price->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $price->creator === null ? '' : $this->Number->format($price->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updater') ?></th>
                    <td><?= $price->updater === null ? '' : $this->Number->format($price->updater) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apply Start On') ?></th>
                    <td><?= h($price->apply_start_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apply End On') ?></th>
                    <td><?= h($price->apply_end_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($price->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($price->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $price->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
