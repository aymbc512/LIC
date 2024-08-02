<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Multipurposemaster $multipurposemaster
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Multipurposemaster'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="multipurposemaster form content">
            <?= $this->Form->create($multipurposemaster) ?>
            <fieldset>
                <legend><?= __('Add Multipurposemaster') ?></legend>
                <?php
                    echo $this->Form->control('data_id');
                    echo $this->Form->control('detail_id');
                    echo $this->Form->control('name');
                    echo $this->Form->control('is_deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
