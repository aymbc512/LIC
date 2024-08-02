<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Schedulepolicy> $schedulepolicy
 */
?>
<div class="schedulepolicy index content">
    <?= $this->Html->link(__('New Schedulepolicy'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Schedulepolicy') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('schedule_id') ?></th>
                    <th><?= $this->Paginator->sort('open_at') ?></th>
                    <th><?= $this->Paginator->sort('closed_at') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('days_of_the_week') ?></th>
                    <th><?= $this->Paginator->sort('available_on') ?></th>
                    <th><?= $this->Paginator->sort('unavairable_on') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updater') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schedulepolicy as $schedulepolicy): ?>
                <tr>
                    <td><?= $this->Number->format($schedulepolicy->schedule_id) ?></td>
                    <td><?= h($schedulepolicy->open_at) ?></td>
                    <td><?= h($schedulepolicy->closed_at) ?></td>
                    <td><?= $schedulepolicy->hasValue('store') ? $this->Html->link($schedulepolicy->store->name, ['controller' => 'Stores', 'action' => 'view', $schedulepolicy->store->store_id]) : '' ?></td>
                    <td><?= h($schedulepolicy->days_of_the_week) ?></td>
                    <td><?= h($schedulepolicy->available_on) ?></td>
                    <td><?= h($schedulepolicy->unavairable_on) ?></td>
                    <td><?= $schedulepolicy->creator === null ? '' : $this->Number->format($schedulepolicy->creator) ?></td>
                    <td><?= h($schedulepolicy->created_at) ?></td>
                    <td><?= $schedulepolicy->updater === null ? '' : $this->Number->format($schedulepolicy->updater) ?></td>
                    <td><?= h($schedulepolicy->updated_at) ?></td>
                    <td><?= h($schedulepolicy->is_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $schedulepolicy->schedule_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schedulepolicy->schedule_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schedulepolicy->schedule_id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedulepolicy->schedule_id)]) ?>
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
