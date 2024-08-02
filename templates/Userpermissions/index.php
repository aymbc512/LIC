<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Userpermission> $userpermissions
 */
?>
<div class="userpermissions index content">
    <?= $this->Html->link(__('New Userpermission'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Userpermissions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('userPrivilege_id') ?></th>
                    <th><?= $this->Paginator->sort('privilege_name') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userpermissions as $userpermission): ?>
                <tr>
                    <td><?= $this->Number->format($userpermission->userPrivilege_id) ?></td>
                    <td><?= h($userpermission->privilege_name) ?></td>
                    <td><?= h($userpermission->is_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $userpermission->userPrivilege_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userpermission->userPrivilege_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userpermission->userPrivilege_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userpermission->userPrivilege_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
