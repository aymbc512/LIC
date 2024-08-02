<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Furigana') ?></th>
                    <td><?= h($user->furigana) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Passward') ?></th>
                    <td><?= h($user->passward) ?></td>
                </tr>
                <tr>
                    <th><?= __('Post Cd') ?></th>
                    <td><?= h($user->post_cd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prefecture') ?></th>
                    <td><?= h($user->prefecture) ?></td>
                </tr>
                <tr>
                    <th><?= __('Municipalities') ?></th>
                    <td><?= h($user->municipalities) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adress Below') ?></th>
                    <td><?= h($user->adress_below) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($user->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Privilege') ?></th>
                    <td><?= h($user->privilege) ?></td>
                </tr>
                <tr>
                    <th><?= __('Store') ?></th>
                    <td><?= $user->hasValue('store') ? $this->Html->link($user->store->name, ['controller' => 'Stores', 'action' => 'view', $user->store->store_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User Status') ?></th>
                    <td><?= h($user->user_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $this->Number->format($user->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Register At') ?></th>
                    <td><?= h($user->register_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Update At') ?></th>
                    <td><?= h($user->update_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usage Term') ?></th>
                    <td><?= $user->usage_term ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
