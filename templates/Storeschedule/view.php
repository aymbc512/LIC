<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Storeschedule $storeschedule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Storeschedule'), ['action' => 'edit', $storeschedule->storeSchedule_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Storeschedule'), ['action' => 'delete', $storeschedule->storeSchedule_id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeschedule->storeSchedule_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Storeschedule'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Storeschedule'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="storeschedule view content">
            <h3><?= h($storeschedule->storeSchedule_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $storeschedule->hasValue('store') ? $this->Html->link($storeschedule->store->name, ['controller' => 'Stores', 'action' => 'view', $storeschedule->store->store_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Storeholiday') ?></th>
                    <td><?= $storeschedule->hasValue('storeholiday') ? $this->Html->link($storeschedule->storeholiday->storeHoliday_id, ['controller' => 'Storeholidays', 'action' => 'view', $storeschedule->storeholiday->storeHoliday_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('StoreSchedule Id') ?></th>
                    <td><?= $this->Number->format($storeschedule->storeSchedule_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($storeschedule->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($storeschedule->time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Unavailable') ?></th>
                    <td><?= $storeschedule->is_unavailable ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $storeschedule->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Unavailable Reason') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($storeschedule->unavailable_reason)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
