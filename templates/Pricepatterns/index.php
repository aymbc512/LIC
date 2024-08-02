<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pricepattern> $pricepatterns
 */
?>
<div class="pricepatterns index content">
    <?= $this->Html->link(__('New Pricepattern'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pricepatterns') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('price_pattern_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('unit_time') ?></th>
                    <th><?= $this->Paginator->sort('displacement_id') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th><?= $this->Paginator->sort('fee_kbn') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updater') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pricepatterns as $pricepattern): ?>
                <tr>
                    <td><?= $this->Number->format($pricepattern->price_pattern_id) ?></td>
                    <td><?= h($pricepattern->name) ?></td>
                    <td><?= h($pricepattern->unit_time) ?></td>
                    <td><?= $pricepattern->displacement_id === null ? '' : $this->Number->format($pricepattern->displacement_id) ?></td>
                    <td><?= h($pricepattern->is_deleted) ?></td>
                    <td><?= $pricepattern->fee_kbn === null ? '' : $this->Number->format($pricepattern->fee_kbn) ?></td>
                    <td><?= $pricepattern->creator === null ? '' : $this->Number->format($pricepattern->creator) ?></td>
                    <td><?= h($pricepattern->created_at) ?></td>
                    <td><?= $pricepattern->updater === null ? '' : $this->Number->format($pricepattern->updater) ?></td>
                    <td><?= h($pricepattern->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pricepattern->price_pattern_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pricepattern->price_pattern_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pricepattern->price_pattern_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pricepattern->price_pattern_id)]) ?>
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
