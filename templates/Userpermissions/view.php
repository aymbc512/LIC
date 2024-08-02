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
            <?= $this->Html->link(__('Edit Userpermission'), ['action' => 'edit', $userpermission->userPrivilege_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Userpermission'), ['action' => 'delete', $userpermission->userPrivilege_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userpermission->userPrivilege_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Userpermissions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Userpermission'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="userpermissions view content">
            <h3><?= h($userpermission->userPrivilege_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Privilege Name') ?></th>
                    <td><?= h($userpermission->privilege_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('UserPrivilege Id') ?></th>
                    <td><?= $this->Number->format($userpermission->userPrivilege_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $userpermission->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
