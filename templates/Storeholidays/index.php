<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Storeholiday> $storeholidays
 */
?>
<div class="storeholidays index content">
    <?= $this->Html->link(__('New Storeholiday'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Storeholidays') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('storeHoliday_id') ?></th>
                    <th><?= $this->Paginator->sort('starded_on') ?></th>
                    <th><?= $this->Paginator->sort('started_at') ?></th>
                    <th><?= $this->Paginator->sort('end_on') ?></th>
                    <th><?= $this->Paginator->sort('end_at') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updater') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($storeholidays as $storeholiday): ?>
                <tr>
                    <td><?= $this->Number->format($storeholiday->storeHoliday_id) ?></td>
                    <td><?= h($storeholiday->starded_on) ?></td>
                    <td><?= h($storeholiday->started_at) ?></td>
                    <td><?= h($storeholiday->end_on) ?></td>
                    <td><?= h($storeholiday->end_at) ?></td>
                    <td><?= $storeholiday->hasValue('store') ? $this->Html->link($storeholiday->store->name, ['controller' => 'Stores', 'action' => 'view', $storeholiday->store->store_id]) : '' ?></td>
                    <td><?= $storeholiday->creator === null ? '' : $this->Number->format($storeholiday->creator) ?></td>
                    <td><?= h($storeholiday->created_at) ?></td>
                    <td><?= $storeholiday->updater === null ? '' : $this->Number->format($storeholiday->updater) ?></td>
                    <td><?= h($storeholiday->updated_at) ?></td>
                    <td><?= h($storeholiday->is_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $storeholiday->storeHoliday_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $storeholiday->storeHoliday_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storeholiday->storeHoliday_id], ['confirm' => __('Are you sure you want to delete # {0}?', $storeholiday->storeHoliday_id)]) ?>
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
