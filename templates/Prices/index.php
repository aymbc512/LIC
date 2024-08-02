<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Price> $prices
 */
?>
<div class="prices index content">
    <?= $this->Html->link(__('New Price'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Prices') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('price_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('price_pattern_id') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('apply_start_on') ?></th>
                    <th><?= $this->Paginator->sort('apply_end_on') ?></th>
                    <th><?= $this->Paginator->sort('is_deleted') ?></th>
                    <th><?= $this->Paginator->sort('creator') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updater') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prices as $price): ?>
                <tr>
                    <td><?= $this->Number->format($price->price_id) ?></td>
                    <td><?= h($price->name) ?></td>
                    <td><?= $price->hasValue('pricepattern') ? $this->Html->link($price->pricepattern->name, ['controller' => 'Pricepatterns', 'action' => 'view', $price->pricepattern->price_pattern_id]) : '' ?></td>
                    <td><?= $price->amount === null ? '' : $this->Number->format($price->amount) ?></td>
                    <td><?= h($price->apply_start_on) ?></td>
                    <td><?= h($price->apply_end_on) ?></td>
                    <td><?= h($price->is_deleted) ?></td>
                    <td><?= $price->creator === null ? '' : $this->Number->format($price->creator) ?></td>
                    <td><?= h($price->created_at) ?></td>
                    <td><?= $price->updater === null ? '' : $this->Number->format($price->updater) ?></td>
                    <td><?= h($price->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $price->price_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $price->price_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $price->price_id], ['confirm' => __('Are you sure you want to delete # {0}?', $price->price_id)]) ?>
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
