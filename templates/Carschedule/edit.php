<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carschedule $carschedule
 * @var string[]|\Cake\Collection\CollectionInterface $stores
 * @var string[]|\Cake\Collection\CollectionInterface $cars
 * @var string[]|\Cake\Collection\CollectionInterface $carunavailability
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carschedule->carSchedule_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carschedule->carSchedule_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Carschedule'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="carschedule form content">
            <?= $this->Form->create($carschedule) ?>
            <fieldset>
                <legend><?= __('Edit Carschedule') ?></legend>
                <?php
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('time', ['empty' => true]);
                    echo $this->Form->control('is_unavailable');
                    echo $this->Form->control('unavailable_reason');
                    echo $this->Form->control('store_id', ['options' => $stores, 'empty' => true]);
                    echo $this->Form->control('car_id', ['options' => $cars, 'empty' => true]);
                    echo $this->Form->control('carUnavairable_id', ['options' => $carunavailability, 'empty' => true]);
                    echo $this->Form->control('is_deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
