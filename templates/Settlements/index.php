<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Settlement> $settlements
 */
?>
<div class="settlements index content">
    <?= $this->Html->link(__('New Settlement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Settlements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('settlement_id') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('month') ?></th>
                    <th><?= $this->Paginator->sort('total_sale') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('commission_amount') ?></th>
                    <th><?= $this->Paginator->sort('general_transfer_file') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($settlements as $settlement): ?>
                <tr>
                    <td><?= $this->Number->format($settlement->settlement_id) ?></td>
                    <td><?= $settlement->hasValue('store') ? $this->Html->link($settlement->store->name, ['controller' => 'Stores', 'action' => 'view', $settlement->store->store_id]) : '' ?></td>
                    <td><?= $settlement->month === null ? '' : $this->Number->format($settlement->month) ?></td>
                    <td><?= $settlement->total_sale === null ? '' : $this->Number->format($settlement->total_sale) ?></td>
                    <td><?= $settlement->amount === null ? '' : $this->Number->format($settlement->amount) ?></td>
                    <td><?= $settlement->commission_amount === null ? '' : $this->Number->format($settlement->commission_amount) ?></td>
                    <td><?= h($settlement->general_transfer_file) ?></td>
                    <td><?= h($settlement->is_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $settlement->settlement_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $settlement->settlement_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $settlement->settlement_id], ['confirm' => __('Are you sure you want to delete # {0}?', $settlement->settlement_id)]) ?>
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
