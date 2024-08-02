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
            <?= $this->Html->link(__('Edit Store'), ['action' => 'edit', $store->store_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Store'), ['action' => 'delete', $store->store_id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->store_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Store'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="stores view content">
            <h3><?= h($store->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($store->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone Number') ?></th>
                    <td><?= h($store->phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($store->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Post Cd') ?></th>
                    <td><?= h($store->post_cd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prefectures') ?></th>
                    <td><?= h($store->prefectures) ?></td>
                </tr>
                <tr>
                    <th><?= __('Municipalities') ?></th>
                    <td><?= h($store->municipalities) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adress Below') ?></th>
                    <td><?= h($store->adress_below) ?></td>
                </tr>
                <tr>
                    <th><?= __('Officer Name') ?></th>
                    <td><?= h($store->officer_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Officer Phone Number') ?></th>
                    <td><?= h($store->officer_phone_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Store Id') ?></th>
                    <td><?= $this->Number->format($store->store_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $store->creator === null ? '' : $this->Number->format($store->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updater') ?></th>
                    <td><?= $store->updater === null ? '' : $this->Number->format($store->updater) ?></td>
                </tr>
                <tr>
                    <th><?= __('Open At') ?></th>
                    <td><?= h($store->open_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Close At') ?></th>
                    <td><?= h($store->close_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contract Start At') ?></th>
                    <td><?= h($store->contract_start_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contract End At') ?></th>
                    <td><?= h($store->contract_end_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($store->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($store->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery Service') ?></th>
                    <td><?= $store->delivery_service ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Management Company') ?></th>
                    <td><?= $store->management_company ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $store->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($store->remarks)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
