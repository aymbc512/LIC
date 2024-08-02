<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Salesmanagement> $salesmanagement
 */
?>
<div class="salesmanagement index content">
    <?= $this->Html->link(__('New Salesmanagement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Salesmanagement') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('salesManegement_id') ?></th>
                    <th><?= $this->Paginator->sort('reservation_id') ?></th>
                    <th><?= $this->Paginator->sort('vehicle_id') ?></th>
                    <th><?= $this->Paginator->sort('reservation_store_id') ?></th>
                    <th><?= $this->Paginator->sort('status_kbn') ?></th>
                    <th><?= $this->Paginator->sort('start_on') ?></th>
                    <th><?= $this->Paginator->sort('start_at') ?></th>
                    <th><?= $this->Paginator->sort('end_on') ?></th>
                    <th><?= $this->Paginator->sort('end_at') ?></th>
                    <th><?= $this->Paginator->sort('usage_time') ?></th>
                    <th><?= $this->Paginator->sort('late_time') ?></th>
                    <th><?= $this->Paginator->sort('option_amount') ?></th>
                    <th><?= $this->Paginator->sort('other_additional_fee') ?></th>
                    <th><?= $this->Paginator->sort('reduced_fee') ?></th>
                    <th><?= $this->Paginator->sort('reduced_fee_contents') ?></th>
                    <th><?= $this->Paginator->sort('basic_fee') ?></th>
                    <th><?= $this->Paginator->sort('late_fee') ?></th>
                    <th><?= $this->Paginator->sort('amount_of_points_used') ?></th>
                    <th><?= $this->Paginator->sort('reward_points') ?></th>
                    <th><?= $this->Paginator->sort('total_amount') ?></th>
                    <th><?= $this->Paginator->sort('accounting_amount') ?></th>
                    <th><?= $this->Paginator->sort('commission') ?></th>
                    <th><?= $this->Paginator->sort('amount_paid_to_store') ?></th>
                    <th><?= $this->Paginator->sort('liquidated') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updater') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salesmanagement as $salesmanagement): ?>
                <tr>
                    <td><?= $this->Number->format($salesmanagement->salesManegement_id) ?></td>
                    <td><?= $salesmanagement->hasValue('reservation') ? $this->Html->link($salesmanagement->reservation->reservationManegement_id, ['controller' => 'Reservations', 'action' => 'view', $salesmanagement->reservation->reservationManegement_id]) : '' ?></td>
                    <td><?= $salesmanagement->vehicle_id === null ? '' : $this->Number->format($salesmanagement->vehicle_id) ?></td>
                    <td><?= $salesmanagement->reservation_store_id === null ? '' : $this->Number->format($salesmanagement->reservation_store_id) ?></td>
                    <td><?= $salesmanagement->status_kbn === null ? '' : $this->Number->format($salesmanagement->status_kbn) ?></td>
                    <td><?= h($salesmanagement->start_on) ?></td>
                    <td><?= h($salesmanagement->start_at) ?></td>
                    <td><?= h($salesmanagement->end_on) ?></td>
                    <td><?= h($salesmanagement->end_at) ?></td>
                    <td><?= h($salesmanagement->usage_time) ?></td>
                    <td><?= h($salesmanagement->late_time) ?></td>
                    <td><?= $salesmanagement->option_amount === null ? '' : $this->Number->format($salesmanagement->option_amount) ?></td>
                    <td><?= $salesmanagement->other_additional_fee === null ? '' : $this->Number->format($salesmanagement->other_additional_fee) ?></td>
                    <td><?= $salesmanagement->reduced_fee === null ? '' : $this->Number->format($salesmanagement->reduced_fee) ?></td>
                    <td><?= $salesmanagement->reduced_fee_contents === null ? '' : $this->Number->format($salesmanagement->reduced_fee_contents) ?></td>
                    <td><?= $salesmanagement->basic_fee === null ? '' : $this->Number->format($salesmanagement->basic_fee) ?></td>
                    <td><?= $salesmanagement->late_fee === null ? '' : $this->Number->format($salesmanagement->late_fee) ?></td>
                    <td><?= $salesmanagement->amount_of_points_used === null ? '' : $this->Number->format($salesmanagement->amount_of_points_used) ?></td>
                    <td><?= $salesmanagement->reward_points === null ? '' : $this->Number->format($salesmanagement->reward_points) ?></td>
                    <td><?= $salesmanagement->total_amount === null ? '' : $this->Number->format($salesmanagement->total_amount) ?></td>
                    <td><?= $salesmanagement->accounting_amount === null ? '' : $this->Number->format($salesmanagement->accounting_amount) ?></td>
                    <td><?= $salesmanagement->commission === null ? '' : $this->Number->format($salesmanagement->commission) ?></td>
                    <td><?= $salesmanagement->amount_paid_to_store === null ? '' : $this->Number->format($salesmanagement->amount_paid_to_store) ?></td>
                    <td><?= h($salesmanagement->liquidated) ?></td>
                    <td><?= $salesmanagement->creator === null ? '' : $this->Number->format($salesmanagement->creator) ?></td>
                    <td><?= h($salesmanagement->created_at) ?></td>
                    <td><?= $salesmanagement->updater === null ? '' : $this->Number->format($salesmanagement->updater) ?></td>
                    <td><?= h($salesmanagement->updated_at) ?></td>
                    <td><?= h($salesmanagement->is_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $salesmanagement->salesManegement_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salesmanagement->salesManegement_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salesmanagement->salesManegement_id], ['confirm' => __('Are you sure you want to delete # {0}?', $salesmanagement->salesManegement_id)]) ?>
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
