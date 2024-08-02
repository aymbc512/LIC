<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Carunavailability> $carunavailability
 */
?>
<div class="carunavailability index content">
    <?= $this->Html->link(__('New Carunavailability'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carunavailability') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('carUnavairable_id') ?></th>
                    <th><?= $this->Paginator->sort('started_on') ?></th>
                    <th><?= $this->Paginator->sort('started_at') ?></th>
                    <th><?= $this->Paginator->sort('end_on') ?></th>
                    <th><?= $this->Paginator->sort('end_at') ?></th>
                    <th><?= $this->Paginator->sort('car_id') ?></th>
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
                <?php foreach ($carunavailability as $carunavailability): ?>
                <tr>
                    <td><?= $this->Number->format($carunavailability->carUnavairable_id) ?></td>
                    <td><?= h($carunavailability->started_on) ?></td>
                    <td><?= h($carunavailability->started_at) ?></td>
                    <td><?= h($carunavailability->end_on) ?></td>
                    <td><?= h($carunavailability->end_at) ?></td>
                    <td><?= $carunavailability->hasValue('car') ? $this->Html->link($carunavailability->car->name, ['controller' => 'Cars', 'action' => 'view', $carunavailability->car->car_id]) : '' ?></td>
                    <td><?= $carunavailability->hasValue('store') ? $this->Html->link($carunavailability->store->name, ['controller' => 'Stores', 'action' => 'view', $carunavailability->store->store_id]) : '' ?></td>
                    <td><?= $carunavailability->creator === null ? '' : $this->Number->format($carunavailability->creator) ?></td>
                    <td><?= h($carunavailability->created_at) ?></td>
                    <td><?= $carunavailability->updater === null ? '' : $this->Number->format($carunavailability->updater) ?></td>
                    <td><?= h($carunavailability->updated_at) ?></td>
                    <td><?= h($carunavailability->is_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carunavailability->carUnavairable_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carunavailability->carUnavairable_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carunavailability->carUnavairable_id], ['confirm' => __('Are you sure you want to delete # {0}?', $carunavailability->carUnavairable_id)]) ?>
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
