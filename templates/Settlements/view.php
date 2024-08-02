<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Settlement $settlement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Settlement'), ['action' => 'edit', $settlement->settlement_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Settlement'), ['action' => 'delete', $settlement->settlement_id], ['confirm' => __('Are you sure you want to delete # {0}?', $settlement->settlement_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Settlements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Settlement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="settlements view content">
            <h3><?= h($settlement->settlement_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $settlement->hasValue('store') ? $this->Html->link($settlement->store->name, ['controller' => 'Stores', 'action' => 'view', $settlement->store->store_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Settlement Id') ?></th>
                    <td><?= $this->Number->format($settlement->settlement_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Month') ?></th>
                    <td><?= $settlement->month === null ? '' : $this->Number->format($settlement->month) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Sale') ?></th>
                    <td><?= $settlement->total_sale === null ? '' : $this->Number->format($settlement->total_sale) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $settlement->amount === null ? '' : $this->Number->format($settlement->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commission Amount') ?></th>
                    <td><?= $settlement->commission_amount === null ? '' : $this->Number->format($settlement->commission_amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('General Transfer File') ?></th>
                    <td><?= $settlement->general_transfer_file ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $settlement->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
