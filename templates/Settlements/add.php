<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Settlement $settlement
 * @var \Cake\Collection\CollectionInterface|string[] $stores
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Settlements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="settlements form content">
            <?= $this->Form->create($settlement) ?>
            <fieldset>
                <legend><?= __('Add Settlement') ?></legend>
                <?php
                    echo $this->Form->control('store_id', ['options' => $stores, 'empty' => true]);
                    echo $this->Form->control('month');
                    echo $this->Form->control('total_sale');
                    echo $this->Form->control('amount');
                    echo $this->Form->control('commission_amount');
                    echo $this->Form->control('general_transfer_file');
                    echo $this->Form->control('is_deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
