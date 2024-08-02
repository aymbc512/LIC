<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reservation'), ['action' => 'edit', $reservation->reservationManegement_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reservation'), ['action' => 'delete', $reservation->reservationManegement_id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->reservationManegement_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reservations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reservation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="reservations view content">
            <h3><?= h($reservation->reservationManegement_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $reservation->hasValue('user') ? $this->Html->link($reservation->user->name, ['controller' => 'Users', 'action' => 'view', $reservation->user->user_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Car') ?></th>
                    <td><?= $reservation->hasValue('car') ? $this->Html->link($reservation->car->name, ['controller' => 'Cars', 'action' => 'view', $reservation->car->car_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $reservation->hasValue('store') ? $this->Html->link($reservation->store->name, ['controller' => 'Stores', 'action' => 'view', $reservation->store->store_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($reservation->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prefecture') ?></th>
                    <td><?= h($reservation->prefecture) ?></td>
                </tr>
                <tr>
                    <th><?= __('Municipalities') ?></th>
                    <td><?= h($reservation->municipalities) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adress Below') ?></th>
                    <td><?= h($reservation->adress_below) ?></td>
                </tr>
                <tr>
                    <th><?= __('ReservationManegement Id') ?></th>
                    <td><?= $this->Number->format($reservation->reservationManegement_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Childsheet Kbn') ?></th>
                    <td><?= $reservation->childsheet_kbn === null ? '' : $this->Number->format($reservation->childsheet_kbn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Basic Fee') ?></th>
                    <td><?= $reservation->total_basic_fee === null ? '' : $this->Number->format($reservation->total_basic_fee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Optional Fee') ?></th>
                    <td><?= $reservation->total_optional_fee === null ? '' : $this->Number->format($reservation->total_optional_fee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reservation Total Amount') ?></th>
                    <td><?= $reservation->reservation_total_amount === null ? '' : $this->Number->format($reservation->reservation_total_amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Point Usage') ?></th>
                    <td><?= $reservation->point_usage === null ? '' : $this->Number->format($reservation->point_usage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $reservation->creator === null ? '' : $this->Number->format($reservation->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updater') ?></th>
                    <td><?= $reservation->updater === null ? '' : $this->Number->format($reservation->updater) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reservation Start Date') ?></th>
                    <td><?= h($reservation->reservation_start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reservation Start Time') ?></th>
                    <td><?= h($reservation->reservation_start_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Scheduled Return Date') ?></th>
                    <td><?= h($reservation->scheduled_return_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Scheduled Return Time') ?></th>
                    <td><?= h($reservation->scheduled_return_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Scheduled Usage Time') ?></th>
                    <td><?= h($reservation->scheduled_usage_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($reservation->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($reservation->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Etccard Rental') ?></th>
                    <td><?= $reservation->etccard_rental ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery Service') ?></th>
                    <td><?= $reservation->delivery_service ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Compensation') ?></th>
                    <td><?= $reservation->compensation ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $reservation->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Salesmanagement') ?></h4>
                <?php if (!empty($reservation->salesmanagement)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('SalesManegement Id') ?></th>
                            <th><?= __('Reservation Id') ?></th>
                            <th><?= __('Vehicle Id') ?></th>
                            <th><?= __('Reservation Store Id') ?></th>
                            <th><?= __('Status Kbn') ?></th>
                            <th><?= __('Start On') ?></th>
                            <th><?= __('Start At') ?></th>
                            <th><?= __('End On') ?></th>
                            <th><?= __('End At') ?></th>
                            <th><?= __('Usage Time') ?></th>
                            <th><?= __('Late Time') ?></th>
                            <th><?= __('Option Amount') ?></th>
                            <th><?= __('Other Additional Fee') ?></th>
                            <th><?= __('Other Additional Fee Contents') ?></th>
                            <th><?= __('Reduced Fee') ?></th>
                            <th><?= __('Reduced Fee Contents') ?></th>
                            <th><?= __('Basic Fee') ?></th>
                            <th><?= __('Late Fee') ?></th>
                            <th><?= __('Amount Of Points Used') ?></th>
                            <th><?= __('Reward Points') ?></th>
                            <th><?= __('Total Amount') ?></th>
                            <th><?= __('Accounting Amount') ?></th>
                            <th><?= __('Commission') ?></th>
                            <th><?= __('Amount Paid To Store') ?></th>
                            <th><?= __('Liquidated') ?></th>
                            <th><?= __('Creator') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Updater') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th><?= __('Is Deleted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($reservation->salesmanagement as $salesmanagement) : ?>
                        <tr>
                            <td><?= h($salesmanagement->salesManegement_id) ?></td>
                            <td><?= h($salesmanagement->reservation_id) ?></td>
                            <td><?= h($salesmanagement->vehicle_id) ?></td>
                            <td><?= h($salesmanagement->reservation_store_id) ?></td>
                            <td><?= h($salesmanagement->status_kbn) ?></td>
                            <td><?= h($salesmanagement->start_on) ?></td>
                            <td><?= h($salesmanagement->start_at) ?></td>
                            <td><?= h($salesmanagement->end_on) ?></td>
                            <td><?= h($salesmanagement->end_at) ?></td>
                            <td><?= h($salesmanagement->usage_time) ?></td>
                            <td><?= h($salesmanagement->late_time) ?></td>
                            <td><?= h($salesmanagement->option_amount) ?></td>
                            <td><?= h($salesmanagement->other_additional_fee) ?></td>
                            <td><?= h($salesmanagement->other_additional_fee_contents) ?></td>
                            <td><?= h($salesmanagement->reduced_fee) ?></td>
                            <td><?= h($salesmanagement->reduced_fee_contents) ?></td>
                            <td><?= h($salesmanagement->basic_fee) ?></td>
                            <td><?= h($salesmanagement->late_fee) ?></td>
                            <td><?= h($salesmanagement->amount_of_points_used) ?></td>
                            <td><?= h($salesmanagement->reward_points) ?></td>
                            <td><?= h($salesmanagement->total_amount) ?></td>
                            <td><?= h($salesmanagement->accounting_amount) ?></td>
                            <td><?= h($salesmanagement->commission) ?></td>
                            <td><?= h($salesmanagement->amount_paid_to_store) ?></td>
                            <td><?= h($salesmanagement->liquidated) ?></td>
                            <td><?= h($salesmanagement->creator) ?></td>
                            <td><?= h($salesmanagement->created_at) ?></td>
                            <td><?= h($salesmanagement->updater) ?></td>
                            <td><?= h($salesmanagement->updated_at) ?></td>
                            <td><?= h($salesmanagement->is_deleted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Salesmanagement', 'action' => 'view', $salesmanagement->salesManegement_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Salesmanagement', 'action' => 'edit', $salesmanagement->salesManegement_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Salesmanagement', 'action' => 'delete', $salesmanagement->salesManegement_id], ['confirm' => __('Are you sure you want to delete # {0}?', $salesmanagement->salesManegement_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
