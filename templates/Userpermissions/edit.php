<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Userpermission $userpermission
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userpermission->userPrivilege_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userpermission->userPrivilege_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Userpermissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="userpermissions form content">
            <?= $this->Form->create($userpermission) ?>
            <fieldset>
                <legend><?= __('Edit Userpermission') ?></legend>
                <?php
                    echo $this->Form->control('privilege_name');
                    echo $this->Form->control('is_deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
