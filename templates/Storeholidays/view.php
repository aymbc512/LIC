<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Storeholiday $storeholiday
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Storeholiday'), ['action' => 'edit', $storeholiday->storeHoliday_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Storeholiday'), ['action' => 'delete', $storeholiday->storeHoliday_id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeholiday->storeHoliday_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Storeholidays'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Storeholiday'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="storeholidays view content">
            <h3><?= h($storeholiday->storeHoliday_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $storeholiday->hasValue('store') ? $this->Html->link($storeholiday->store->name, ['controller' => 'Stores', 'action' => 'view', $storeholiday->store->store_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('StoreHoliday Id') ?></th>
                    <td><?= $this->Number->format($storeholiday->storeHoliday_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $storeholiday->creator === null ? '' : $this->Number->format($storeholiday->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updater') ?></th>
                    <td><?= $storeholiday->updater === null ? '' : $this->Number->format($storeholiday->updater) ?></td>
                </tr>
                <tr>
                    <th><?= __('Starded On') ?></th>
                    <td><?= h($storeholiday->starded_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Started At') ?></th>
                    <td><?= h($storeholiday->started_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('End On') ?></th>
                    <td><?= h($storeholiday->end_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('End At') ?></th>
                    <td><?= h($storeholiday->end_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($storeholiday->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($storeholiday->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $storeholiday->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Holiday Reason') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($storeholiday->holiday_reason)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
