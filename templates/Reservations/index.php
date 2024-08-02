<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Reservation> $reservations
 */
?>
<div class="reservations index content">
    <?= $this->Html->link(__('New Reservation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reservations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('reservationManegement_id') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('vehicle_id') ?></th>
                    <th><?= $this->Paginator->sort('reservation_store_id') ?></th>
                    <th><?= $this->Paginator->sort('reservation_start_date') ?></th>
                    <th><?= $this->Paginator->sort('reservation_start_time') ?></th>
                    <th><?= $this->Paginator->sort('scheduled_return_date') ?></th>
                    <th><?= $this->Paginator->sort('scheduled_return_time') ?></th>
                    <th><?= $this->Paginator->sort('scheduled_usage_time') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('childsheet_kbn') ?></th>
                    <th><?= $this->Paginator->sort('etccard_rental') ?></th>
                    <th><?= $this->Paginator->sort('delivery_service') ?></th>
                    <th><?= $this->Paginator->sort('prefecture') ?></th>
                    <th><?= $this->Paginator->sort('municipalities') ?></th>
                    <th><?= $this->Paginator->sort('adress_below') ?></th>
                    <th><?= $this->Paginator->sort('compensation') ?></th>
                    <th><?= $this->Paginator->sort('total_basic_fee') ?></th>
                    <th><?= $this->Paginator->sort('total_optional_fee') ?></th>
                    <th><?= $this->Paginator->sort('reservation_total_amount') ?></th>
                    <th><?= $this->Paginator->sort('point_usage') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updater') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation): ?>
                <tr>
                    <td><?= $this->Number->format($reservation->reservationManegement_id) ?></td>
                    <td><?= $reservation->hasValue('user') ? $this->Html->link($reservation->user->name, ['controller' => 'Users', 'action' => 'view', $reservation->user->user_id]) : '' ?></td>
                    <td><?= $reservation->hasValue('car') ? $this->Html->link($reservation->car->name, ['controller' => 'Cars', 'action' => 'view', $reservation->car->car_id]) : '' ?></td>
                    <td><?= $reservation->hasValue('store') ? $this->Html->link($reservation->store->name, ['controller' => 'Stores', 'action' => 'view', $reservation->store->store_id]) : '' ?></td>
                    <td><?= h($reservation->reservation_start_date) ?></td>
                    <td><?= h($reservation->reservation_start_time) ?></td>
                    <td><?= h($reservation->scheduled_return_date) ?></td>
                    <td><?= h($reservation->scheduled_return_time) ?></td>
                    <td><?= h($reservation->scheduled_usage_time) ?></td>
                    <td><?= h($reservation->status) ?></td>
                    <td><?= $reservation->childsheet_kbn === null ? '' : $this->Number->format($reservation->childsheet_kbn) ?></td>
                    <td><?= h($reservation->etccard_rental) ?></td>
                    <td><?= h($reservation->delivery_service) ?></td>
                    <td><?= h($reservation->prefecture) ?></td>
                    <td><?= h($reservation->municipalities) ?></td>
                    <td><?= h($reservation->adress_below) ?></td>
                    <td><?= h($reservation->compensation) ?></td>
                    <td><?= $reservation->total_basic_fee === null ? '' : $this->Number->format($reservation->total_basic_fee) ?></td>
                    <td><?= $reservation->total_optional_fee === null ? '' : $this->Number->format($reservation->total_optional_fee) ?></td>
                    <td><?= $reservation->reservation_total_amount === null ? '' : $this->Number->format($reservation->reservation_total_amount) ?></td>
                    <td><?= $reservation->point_usage === null ? '' : $this->Number->format($reservation->point_usage) ?></td>
                    <td><?= $reservation->creator === null ? '' : $this->Number->format($reservation->creator) ?></td>
                    <td><?= h($reservation->created_at) ?></td>
                    <td><?= $reservation->updater === null ? '' : $this->Number->format($reservation->updater) ?></td>
                    <td><?= h($reservation->updated_at) ?></td>
                    <td><?= h($reservation->is_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reservation->reservationManegement_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reservation->reservationManegement_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reservation->reservationManegement_id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->reservationManegement_id)]) ?>
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
