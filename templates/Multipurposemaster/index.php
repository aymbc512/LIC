<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Multipurposemaster> $multipurposemaster
 */
?>
<div class="multipurposemaster index content">
    <?= $this->Html->link(__('New Multipurposemaster'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Multipurposemaster') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('multi_purpose_master_id') ?></th>
                    <th><?= $this->Paginator->sort('data_id') ?></th>
                    <th><?= $this->Paginator->sort('detail_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($multipurposemaster as $multipurposemaster): ?>
                <tr>
                    <td><?= $this->Number->format($multipurposemaster->multi_purpose_master_id) ?></td>
                    <td><?= $multipurposemaster->data_id === null ? '' : $this->Number->format($multipurposemaster->data_id) ?></td>
                    <td><?= $multipurposemaster->detail_id === null ? '' : $this->Number->format($multipurposemaster->detail_id) ?></td>
                    <td><?= h($multipurposemaster->name) ?></td>
                    <td><?= h($multipurposemaster->is_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $multipurposemaster->multi_purpose_master_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $multipurposemaster->multi_purpose_master_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $multipurposemaster->multi_purpose_master_id], ['confirm' => __('Are you sure you want to delete # {0}?', $multipurposemaster->multi_purpose_master_id)]) ?>
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
