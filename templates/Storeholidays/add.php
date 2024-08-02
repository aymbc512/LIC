<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Storeholiday $storeholiday
 * @var \Cake\Collection\CollectionInterface|string[] $stores
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Storeholidays'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="storeholidays form content">
            <?= $this->Form->create($storeholiday) ?>
            <fieldset>
                <legend><?= __('Add Storeholiday') ?></legend>
                <?php
                    echo $this->Form->control('starded_on', ['empty' => true]);
                    echo $this->Form->control('started_at', ['empty' => true]);
                    echo $this->Form->control('end_on', ['empty' => true]);
                    echo $this->Form->control('end_at', ['empty' => true]);
                    echo $this->Form->control('holiday_reason');
                    echo $this->Form->control('store_id', ['options' => $stores, 'empty' => true]);
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
