<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carschedule $carschedule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Carschedule'), ['action' => 'edit', $carschedule->carSchedule_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carschedule'), ['action' => 'delete', $carschedule->carSchedule_id], ['confirm' => __('Are you sure you want to delete # {0}?', $carschedule->carSchedule_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carschedule'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carschedule'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="carschedule view content">
            <h3><?= h($carschedule->carSchedule_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $carschedule->hasValue('store') ? $this->Html->link($carschedule->store->name, ['controller' => 'Stores', 'action' => 'view', $carschedule->store->store_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Car') ?></th>
                    <td><?= $carschedule->hasValue('car') ? $this->Html->link($carschedule->car->name, ['controller' => 'Cars', 'action' => 'view', $carschedule->car->car_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Carunavailability') ?></th>
                    <td><?= $carschedule->hasValue('carunavailability') ? $this->Html->link($carschedule->carunavailability->carUnavairable_id, ['controller' => 'Carunavailability', 'action' => 'view', $carschedule->carunavailability->carUnavairable_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('CarSchedule Id') ?></th>
                    <td><?= $this->Number->format($carschedule->carSchedule_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($carschedule->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($carschedule->time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Unavailable') ?></th>
                    <td><?= $carschedule->is_unavailable ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $carschedule->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Unavailable Reason') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($carschedule->unavailable_reason)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
