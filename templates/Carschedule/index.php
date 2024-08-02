<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Carschedule> $carschedule
 */
?>
<div class="carschedule index content">
    <?= $this->Html->link(__('New Carschedule'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carschedule') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('carSchedule_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('time') ?></th>
                    <th><?= $this->Paginator->sort('is_unavailable') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('car_id') ?></th>
                    <th><?= $this->Paginator->sort('carUnavairable_id') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carschedule as $carschedule): ?>
                <tr>
                    <td><?= $this->Number->format($carschedule->carSchedule_id) ?></td>
                    <td><?= h($carschedule->date) ?></td>
                    <td><?= h($carschedule->time) ?></td>
                    <td><?= h($carschedule->is_unavailable) ?></td>
                    <td><?= $carschedule->hasValue('store') ? $this->Html->link($carschedule->store->name, ['controller' => 'Stores', 'action' => 'view', $carschedule->store->store_id]) : '' ?></td>
                    <td><?= $carschedule->hasValue('car') ? $this->Html->link($carschedule->car->name, ['controller' => 'Cars', 'action' => 'view', $carschedule->car->car_id]) : '' ?></td>
                    <td><?= $carschedule->hasValue('carunavailability') ? $this->Html->link($carschedule->carunavailability->carUnavairable_id, ['controller' => 'Carunavailability', 'action' => 'view', $carschedule->carunavailability->carUnavairable_id]) : '' ?></td>
                    <td><?= h($carschedule->is_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carschedule->carSchedule_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carschedule->carSchedule_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carschedule->carSchedule_id], ['confirm' => __('Are you sure you want to delete # {0}?', $carschedule->carSchedule_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
