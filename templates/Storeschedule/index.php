<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Storeschedule> $storeschedule
 */
?>
<div class="storeschedule index content">
    <?= $this->Html->link(__('New Storeschedule'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Storeschedule') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('storeSchedule_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('time') ?></th>
                    <th><?= $this->Paginator->sort('is_unavailable') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('storeHoliday_id') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($storeschedule as $storeschedule): ?>
                <tr>
                    <td><?= $this->Number->format($storeschedule->storeSchedule_id) ?></td>
                    <td><?= h($storeschedule->date) ?></td>
                    <td><?= h($storeschedule->time) ?></td>
                    <td><?= h($storeschedule->is_unavailable) ?></td>
                    <td><?= $storeschedule->hasValue('store') ? $this->Html->link($storeschedule->store->name, ['controller' => 'Stores', 'action' => 'view', $storeschedule->store->store_id]) : '' ?></td>
                    <td><?= $storeschedule->hasValue('storeholiday') ? $this->Html->link($storeschedule->storeholiday->storeHoliday_id, ['controller' => 'Storeholidays', 'action' => 'view', $storeschedule->storeholiday->storeHoliday_id]) : '' ?></td>
                    <td><?= h($storeschedule->is_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $storeschedule->storeSchedule_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $storeschedule->storeSchedule_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storeschedule->storeSchedule_id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeschedule->storeSchedule_id)]) ?>
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
