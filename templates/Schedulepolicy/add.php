<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedulepolicy $schedulepolicy
 * @var \Cake\Collection\CollectionInterface|string[] $stores
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Schedulepolicy'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="schedulepolicy form content">
            <?= $this->Form->create($schedulepolicy) ?>
            <fieldset>
                <legend><?= __('Add Schedulepolicy') ?></legend>
                <?php
                    echo $this->Form->control('open_at', ['empty' => true]);
                    echo $this->Form->control('closed_at', ['empty' => true]);
                    echo $this->Form->control('store_id', ['options' => $stores, 'empty' => true]);
                    echo $this->Form->control('days_of_the_week');
                    echo $this->Form->control('available_on', ['empty' => true]);
                    echo $this->Form->control('unavairable_on', ['empty' => true]);
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
