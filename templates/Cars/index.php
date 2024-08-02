<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Car> $cars
 */
?>
<div class="cars index content">
    <?= $this->Html->link(__('New Car'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cars') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('car_id') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('displacement_id') ?></th>
                    <th><?= $this->Paginator->sort('car_kbn') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('car_registration_number_chimei') ?></th>
                    <th><?= $this->Paginator->sort('car_registration_number_suji') ?></th>
                    <th><?= $this->Paginator->sort('number_hiragana') ?></th>
                    <th><?= $this->Paginator->sort('number_suji') ?></th>
                    <th><?= $this->Paginator->sort('vin_number') ?></th>
                    <th><?= $this->Paginator->sort('maker') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('color') ?></th>
                    <th><?= $this->Paginator->sort('transmission') ?></th>
                    <th><?= $this->Paginator->sort('fuel_kbn') ?></th>
                    <th><?= $this->Paginator->sort('oil_kbn') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th><?= $this->Paginator->sort('image_file_name') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updater') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cars as $car): ?>
                <tr>
                    <td><?= $this->Number->format($car->car_id) ?></td>
                    <td><?= $car->hasValue('store') ? $this->Html->link($car->store->name, ['controller' => 'Stores', 'action' => 'view', $car->store->store_id]) : '' ?></td>
                    <td><?= $car->displacement_id === null ? '' : $this->Number->format($car->displacement_id) ?></td>
                    <td><?= $car->car_kbn === null ? '' : $this->Number->format($car->car_kbn) ?></td>
                    <td><?= h($car->name) ?></td>
                    <td><?= h($car->car_registration_number_chimei) ?></td>
                    <td><?= $car->car_registration_number_suji === null ? '' : $this->Number->format($car->car_registration_number_suji) ?></td>
                    <td><?= h($car->number_hiragana) ?></td>
                    <td><?= h($car->number_suji) ?></td>
                    <td><?= h($car->vin_number) ?></td>
                    <td><?= h($car->maker) ?></td>
                    <td><?= h($car->model) ?></td>
                    <td><?= h($car->color) ?></td>
                    <td><?= $car->transmission === null ? '' : $this->Number->format($car->transmission) ?></td>
                    <td><?= $car->fuel_kbn === null ? '' : $this->Number->format($car->fuel_kbn) ?></td>
                    <td><?= $car->oil_kbn === null ? '' : $this->Number->format($car->oil_kbn) ?></td>
                    <td><?= h($car->is_deleted) ?></td>
                    <td><?= h($car->image_file_name) ?></td>
                    <td><?= $car->creator === null ? '' : $this->Number->format($car->creator) ?></td>
                    <td><?= h($car->created_at) ?></td>
                    <td><?= $car->updater === null ? '' : $this->Number->format($car->updater) ?></td>
                    <td><?= h($car->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $car->car_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $car->car_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $car->car_id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->car_id)]) ?>
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
