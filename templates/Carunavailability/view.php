<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carunavailability $carunavailability
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Carunavailability'), ['action' => 'edit', $carunavailability->carUnavairable_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carunavailability'), ['action' => 'delete', $carunavailability->carUnavairable_id], ['confirm' => __('Are you sure you want to delete # {0}?', $carunavailability->carUnavairable_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carunavailability'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carunavailability'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="carunavailability view content">
            <h3><?= h($carunavailability->carUnavairable_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Car') ?></th>
                    <td><?= $carunavailability->hasValue('car') ? $this->Html->link($carunavailability->car->name, ['controller' => 'Cars', 'action' => 'view', $carunavailability->car->car_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $carunavailability->hasValue('store') ? $this->Html->link($carunavailability->store->name, ['controller' => 'Stores', 'action' => 'view', $carunavailability->store->store_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('CarUnavairable Id') ?></th>
                    <td><?= $this->Number->format($carunavailability->carUnavairable_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $carunavailability->creator === null ? '' : $this->Number->format($carunavailability->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updater') ?></th>
                    <td><?= $carunavailability->updater === null ? '' : $this->Number->format($carunavailability->updater) ?></td>
                </tr>
                <tr>
                    <th><?= __('Started On') ?></th>
                    <td><?= h($carunavailability->started_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Started At') ?></th>
                    <td><?= h($carunavailability->started_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('End On') ?></th>
                    <td><?= h($carunavailability->end_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('End At') ?></th>
                    <td><?= h($carunavailability->end_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($carunavailability->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($carunavailability->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $carunavailability->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Unavailable Reason') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($carunavailability->unavailable_reason)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
