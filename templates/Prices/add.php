<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Price $price
 * @var \Cake\Collection\CollectionInterface|string[] $pricepatterns
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Prices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="prices form content">
            <?= $this->Form->create($price) ?>
            <fieldset>
                <legend><?= __('Add Price') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('price_pattern_id', ['options' => $pricepatterns, 'empty' => true]);
                    echo $this->Form->control('amount');
                    echo $this->Form->control('apply_start_on', ['empty' => true]);
                    echo $this->Form->control('apply_end_on', ['empty' => true]);
                    echo $this->Form->control('is_deleted');
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
