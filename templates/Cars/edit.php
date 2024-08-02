<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 * @var string[]|\Cake\Collection\CollectionInterface $stores
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $car->car_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $car->car_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cars form content">
            <?= $this->Form->create($car) ?>
            <fieldset>
                <legend><?= __('Edit Car') ?></legend>
                <?php
                    echo $this->Form->control('store_id', ['options' => $stores, 'empty' => true]);
                    echo $this->Form->control('displacement_id');
                    echo $this->Form->control('car_kbn');
                    echo $this->Form->control('name');
                    echo $this->Form->control('car_registration_number_chimei');
                    echo $this->Form->control('car_registration_number_suji');
                    echo $this->Form->control('number_hiragana');
                    echo $this->Form->control('number_suji');
                    echo $this->Form->control('vin_number');
                    echo $this->Form->control('maker');
                    echo $this->Form->control('model');
                    echo $this->Form->control('color');
                    echo $this->Form->control('transmission');
                    echo $this->Form->control('fuel_kbn');
                    echo $this->Form->control('oil_kbn');
                    echo $this->Form->control('is_deleted');
                    echo $this->Form->control('image_file_name');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('created_at', ['empty' => true]);
                    echo $this->Form->control('updater');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
