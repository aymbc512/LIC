<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedulepolicy $schedulepolicy
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Schedulepolicy'), ['action' => 'edit', $schedulepolicy->schedule_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Schedulepolicy'), ['action' => 'delete', $schedulepolicy->schedule_id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedulepolicy->schedule_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Schedulepolicy'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Schedulepolicy'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="schedulepolicy view content">
            <h3><?= h($schedulepolicy->schedule_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $schedulepolicy->hasValue('store') ? $this->Html->link($schedulepolicy->store->name, ['controller' => 'Stores', 'action' => 'view', $schedulepolicy->store->store_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Days Of The Week') ?></th>
                    <td><?= h($schedulepolicy->days_of_the_week) ?></td>
                </tr>
                <tr>
                    <th><?= __('Schedule Id') ?></th>
                    <td><?= $this->Number->format($schedulepolicy->schedule_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $schedulepolicy->creator === null ? '' : $this->Number->format($schedulepolicy->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updater') ?></th>
                    <td><?= $schedulepolicy->updater === null ? '' : $this->Number->format($schedulepolicy->updater) ?></td>
                </tr>
                <tr>
                    <th><?= __('Open At') ?></th>
                    <td><?= h($schedulepolicy->open_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Closed At') ?></th>
                    <td><?= h($schedulepolicy->closed_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Available On') ?></th>
                    <td><?= h($schedulepolicy->available_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unavairable On') ?></th>
                    <td><?= h($schedulepolicy->unavairable_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($schedulepolicy->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($schedulepolicy->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $schedulepolicy->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
