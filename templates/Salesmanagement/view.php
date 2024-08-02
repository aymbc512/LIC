<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salesmanagement $salesmanagement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Salesmanagement'), ['action' => 'edit', $salesmanagement->salesManegement_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Salesmanagement'), ['action' => 'delete', $salesmanagement->salesManegement_id], ['confirm' => __('Are you sure you want to delete # {0}?', $salesmanagement->salesManegement_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Salesmanagement'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Salesmanagement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="salesmanagement view content">
            <h3><?= h($salesmanagement->salesManegement_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Reservation') ?></th>
                    <td><?= $salesmanagement->hasValue('reservation') ? $this->Html->link($salesmanagement->reservation->reservationManegement_id, ['controller' => 'Reservations', 'action' => 'view', $salesmanagement->reservation->reservationManegement_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('SalesManegement Id') ?></th>
                    <td><?= $this->Number->format($salesmanagement->salesManegement_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vehicle Id') ?></th>
                    <td><?= $salesmanagement->vehicle_id === null ? '' : $this->Number->format($salesmanagement->vehicle_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reservation Store Id') ?></th>
                    <td><?= $salesmanagement->reservation_store_id === null ? '' : $this->Number->format($salesmanagement->reservation_store_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status Kbn') ?></th>
                    <td><?= $salesmanagement->status_kbn === null ? '' : $this->Number->format($salesmanagement->status_kbn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Option Amount') ?></th>
                    <td><?= $salesmanagement->option_amount === null ? '' : $this->Number->format($salesmanagement->option_amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Other Additional Fee') ?></th>
                    <td><?= $salesmanagement->other_additional_fee === null ? '' : $this->Number->format($salesmanagement->other_additional_fee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reduced Fee') ?></th>
                    <td><?= $salesmanagement->reduced_fee === null ? '' : $this->Number->format($salesmanagement->reduced_fee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reduced Fee Contents') ?></th>
                    <td><?= $salesmanagement->reduced_fee_contents === null ? '' : $this->Number->format($salesmanagement->reduced_fee_contents) ?></td>
                </tr>
                <tr>
                    <th><?= __('Basic Fee') ?></th>
                    <td><?= $salesmanagement->basic_fee === null ? '' : $this->Number->format($salesmanagement->basic_fee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Late Fee') ?></th>
                    <td><?= $salesmanagement->late_fee === null ? '' : $this->Number->format($salesmanagement->late_fee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount Of Points Used') ?></th>
                    <td><?= $salesmanagement->amount_of_points_used === null ? '' : $this->Number->format($salesmanagement->amount_of_points_used) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reward Points') ?></th>
                    <td><?= $salesmanagement->reward_points === null ? '' : $this->Number->format($salesmanagement->reward_points) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Amount') ?></th>
                    <td><?= $salesmanagement->total_amount === null ? '' : $this->Number->format($salesmanagement->total_amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accounting Amount') ?></th>
                    <td><?= $salesmanagement->accounting_amount === null ? '' : $this->Number->format($salesmanagement->accounting_amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commission') ?></th>
                    <td><?= $salesmanagement->commission === null ? '' : $this->Number->format($salesmanagement->commission) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount Paid To Store') ?></th>
                    <td><?= $salesmanagement->amount_paid_to_store === null ? '' : $this->Number->format($salesmanagement->amount_paid_to_store) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $salesmanagement->creator === null ? '' : $this->Number->format($salesmanagement->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updater') ?></th>
                    <td><?= $salesmanagement->updater === null ? '' : $this->Number->format($salesmanagement->updater) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start On') ?></th>
                    <td><?= h($salesmanagement->start_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start At') ?></th>
                    <td><?= h($salesmanagement->start_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('End On') ?></th>
                    <td><?= h($salesmanagement->end_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('End At') ?></th>
                    <td><?= h($salesmanagement->end_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usage Time') ?></th>
                    <td><?= h($salesmanagement->usage_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Late Time') ?></th>
                    <td><?= h($salesmanagement->late_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($salesmanagement->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($salesmanagement->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Liquidated') ?></th>
                    <td><?= $salesmanagement->liquidated ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $salesmanagement->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Other Additional Fee Contents') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($salesmanagement->other_additional_fee_contents)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
