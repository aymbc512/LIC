<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Storeschedule $storeschedule
 * @var \Cake\Collection\CollectionInterface|string[] $stores
 * @var \Cake\Collection\CollectionInterface|string[] $storeholidays
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Storeschedule'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="storeschedule form content">
            <?= $this->Form->create($storeschedule) ?>
            <fieldset>
                <legend><?= __('Add Storeschedule') ?></legend>
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
