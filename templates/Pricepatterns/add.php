<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pricepattern $pricepattern
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pricepatterns'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pricepatterns form content">
            <?= $this->Form->create($pricepattern) ?>
            <fieldset>
                <legend><?= __('Add Pricepattern') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('unit_time');
                    echo $this->Form->control('displacement_id');
                    echo $this->Form->control('is_deleted');
                    echo $this->Form->control('fee_kbn');
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
