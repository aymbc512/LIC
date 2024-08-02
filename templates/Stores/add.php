<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Stores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="stores form content">
            <?= $this->Form->create($store) ?>
            <fieldset>
                <legend><?= __('Add Store') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('email');
                    echo $this->Form->control('post_cd');
                    echo $this->Form->control('prefectures');
                    echo $this->Form->control('municipalities');
                    echo $this->Form->control('adress_below');
                    echo $this->Form->control('officer_name');
                    echo $this->Form->control('officer_phone_number');
                    echo $this->Form->control('open_at', ['empty' => true]);
                    echo $this->Form->control('close_at', ['empty' => true]);
                    echo $this->Form->control('contract_start_at', ['empty' => true]);
                    echo $this->Form->control('contract_end_at', ['empty' => true]);
                    echo $this->Form->control('delivery_service');
                    echo $this->Form->control('management_company');
                    echo $this->Form->control('remarks');
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
