<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Store> $stores
 */
?>
<div class="stores index content">
    <?= $this->Html->link(__('New Store'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Stores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('store_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('post_cd') ?></th>
                    <th><?= $this->Paginator->sort('prefectures') ?></th>
                    <th><?= $this->Paginator->sort('municipalities') ?></th>
                    <th><?= $this->Paginator->sort('adress_below') ?></th>
                    <th><?= $this->Paginator->sort('officer_name') ?></th>
                    <th><?= $this->Paginator->sort('officer_phone_number') ?></th>
                    <th><?= $this->Paginator->sort('open_at') ?></th>
                    <th><?= $this->Paginator->sort('close_at') ?></th>
                    <th><?= $this->Paginator->sort('contract_start_at') ?></th>
                    <th><?= $this->Paginator->sort('contract_end_at') ?></th>
                    <th><?= $this->Paginator->sort('delivery_service') ?></th>
                    <th><?= $this->Paginator->sort('management_company') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updater') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stores as $store): ?>
                <tr>
                    <td><?= $this->Number->format($store->store_id) ?></td>
                    <td><?= h($store->name) ?></td>
                    <td><?= h($store->phone_number) ?></td>
                    <td><?= h($store->email) ?></td>
                    <td><?= h($store->post_cd) ?></td>
                    <td><?= h($store->prefectures) ?></td>
                    <td><?= h($store->municipalities) ?></td>
                    <td><?= h($store->adress_below) ?></td>
                    <td><?= h($store->officer_name) ?></td>
                    <td><?= h($store->officer_phone_number) ?></td>
                    <td><?= h($store->open_at) ?></td>
                    <td><?= h($store->close_at) ?></td>
                    <td><?= h($store->contract_start_at) ?></td>
                    <td><?= h($store->contract_end_at) ?></td>
                    <td><?= h($store->delivery_service) ?></td>
                    <td><?= h($store->management_company) ?></td>
                    <td><?= $store->creator === null ? '' : $this->Number->format($store->creator) ?></td>
                    <td><?= h($store->created_at) ?></td>
                    <td><?= $store->updater === null ? '' : $this->Number->format($store->updater) ?></td>
                    <td><?= h($store->updated_at) ?></td>
                    <td><?= h($store->is_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $store->store_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $store->store_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $store->store_id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->store_id)]) ?>
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
