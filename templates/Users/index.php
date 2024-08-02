<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('furigana') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('passward') ?></th>
                    <th><?= $this->Paginator->sort('post_cd') ?></th>
                    <th><?= $this->Paginator->sort('prefecture') ?></th>
                    <th><?= $this->Paginator->sort('municipalities') ?></th>
                    <th><?= $this->Paginator->sort('adress_below') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('register_at') ?></th>
                    <th><?= $this->Paginator->sort('update_at') ?></th>
                    <th><?= $this->Paginator->sort('privilege') ?></th>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('user_status') ?></th>
                    <th><?= $this->Paginator->sort('usage_term') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->user_id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->furigana) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->passward) ?></td>
                    <td><?= h($user->post_cd) ?></td>
                    <td><?= h($user->prefecture) ?></td>
                    <td><?= h($user->municipalities) ?></td>
                    <td><?= h($user->adress_below) ?></td>
                    <td><?= h($user->phone_number) ?></td>
                    <td><?= h($user->register_at) ?></td>
                    <td><?= h($user->update_at) ?></td>
                    <td><?= h($user->privilege) ?></td>
                    <td><?= $user->hasValue('store') ? $this->Html->link($user->store->name, ['controller' => 'Stores', 'action' => 'view', $user->store->store_id]) : '' ?></td>
                    <td><?= h($user->user_status) ?></td>
                    <td><?= h($user->usage_term) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->user_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->user_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
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
