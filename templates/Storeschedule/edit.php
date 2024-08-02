<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Storeschedule $storeschedule
 * @var string[]|\Cake\Collection\CollectionInterface $stores
 * @var string[]|\Cake\Collection\CollectionInterface $storeholidays
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $storeschedule->storeSchedule_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $storeschedule->storeSchedule_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Storeschedule'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="storeschedule form content">
            <?= $this->Form->create($storeschedule) ?>
            <fieldset>
                <legend><?= __('Edit Storeschedule') ?></legend>
                <?php
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('time', ['empty' => true]);
                    echo $this->Form->control('is_unavailable');
                    echo $this->Form->control('unavailable_reason');
                    echo $this->Form->control('store_id', ['options' => $stores, 'empty' => true]);
                    echo $this->Form->control('storeHoliday_id', ['options' => $storeholidays, 'empty' => true]);
                    echo $this->Form->control('is_deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
