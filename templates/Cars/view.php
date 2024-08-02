<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Car'), ['action' => 'edit', $car->car_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Car'), ['action' => 'delete', $car->car_id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->car_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Car'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cars view content">
            <h3><?= h($car->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $car->hasValue('store') ? $this->Html->link($car->store->name, ['controller' => 'Stores', 'action' => 'view', $car->store->store_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($car->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Car Registration Number Chimei') ?></th>
                    <td><?= h($car->car_registration_number_chimei) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number Hiragana') ?></th>
                    <td><?= h($car->number_hiragana) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number Suji') ?></th>
                    <td><?= h($car->number_suji) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vin Number') ?></th>
                    <td><?= h($car->vin_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Maker') ?></th>
                    <td><?= h($car->maker) ?></td>
                </tr>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= h($car->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Color') ?></th>
                    <td><?= h($car->color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image File Name') ?></th>
                    <td><?= h($car->image_file_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Car Id') ?></th>
                    <td><?= $this->Number->format($car->car_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Displacement Id') ?></th>
                    <td><?= $car->displacement_id === null ? '' : $this->Number->format($car->displacement_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Car Kbn') ?></th>
                    <td><?= $car->car_kbn === null ? '' : $this->Number->format($car->car_kbn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Car Registration Number Suji') ?></th>
                    <td><?= $car->car_registration_number_suji === null ? '' : $this->Number->format($car->car_registration_number_suji) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transmission') ?></th>
                    <td><?= $car->transmission === null ? '' : $this->Number->format($car->transmission) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fuel Kbn') ?></th>
                    <td><?= $car->fuel_kbn === null ? '' : $this->Number->format($car->fuel_kbn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Oil Kbn') ?></th>
                    <td><?= $car->oil_kbn === null ? '' : $this->Number->format($car->oil_kbn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $car->creator === null ? '' : $this->Number->format($car->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updater') ?></th>
                    <td><?= $car->updater === null ? '' : $this->Number->format($car->updater) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($car->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($car->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $car->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
