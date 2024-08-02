<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $cars
 * @var string[]|\Cake\Collection\CollectionInterface $stores
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reservation->reservationManegement_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->reservationManegement_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Reservations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="reservations form content">
            <?= $this->Form->create($reservation) ?>
            <fieldset>
                <legend><?= __('Edit Reservation') ?></legend>
                <?php
                    echo $this->Form->control('customer_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('vehicle_id', ['options' => $cars, 'empty' => true]);
                    echo $this->Form->control('reservation_store_id', ['options' => $stores, 'empty' => true]);
                    echo $this->Form->control('reservation_start_date', ['empty' => true]);
                    echo $this->Form->control('reservation_start_time', ['empty' => true]);
                    echo $this->Form->control('scheduled_return_date', ['empty' => true]);
                    echo $this->Form->control('scheduled_return_time', ['empty' => true]);
                    echo $this->Form->control('scheduled_usage_time', ['empty' => true]);
                    echo $this->Form->control('status');
                    echo $this->Form->control('childsheet_kbn');
                    echo $this->Form->control('etccard_rental');
                    echo $this->Form->control('delivery_service');
                    echo $this->Form->control('prefecture');
                    echo $this->Form->control('municipalities');
                    echo $this->Form->control('adress_below');
                    echo $this->Form->control('compensation');
                    echo $this->Form->control('total_basic_fee');
                    echo $this->Form->control('total_optional_fee');
                    echo $this->Form->control('reservation_total_amount');
                    echo $this->Form->control('point_usage');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('created_at', ['empty' => true]);
                    echo $this->Form->control('updater');
                    echo $this->Form->control('updated_at');
                    echo $this->Form->control('is_deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
