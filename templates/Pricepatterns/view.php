<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pricepattern $pricepattern
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pricepattern'), ['action' => 'edit', $pricepattern->price_pattern_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pricepattern'), ['action' => 'delete', $pricepattern->price_pattern_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pricepattern->price_pattern_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pricepatterns'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pricepattern'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pricepatterns view content">
            <h3><?= h($pricepattern->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($pricepattern->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unit Time') ?></th>
                    <td><?= h($pricepattern->unit_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price Pattern Id') ?></th>
                    <td><?= $this->Number->format($pricepattern->price_pattern_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Displacement Id') ?></th>
                    <td><?= $pricepattern->displacement_id === null ? '' : $this->Number->format($pricepattern->displacement_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fee Kbn') ?></th>
                    <td><?= $pricepattern->fee_kbn === null ? '' : $this->Number->format($pricepattern->fee_kbn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creator') ?></th>
                    <td><?= $pricepattern->creator === null ? '' : $this->Number->format($pricepattern->creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updater') ?></th>
                    <td><?= $pricepattern->updater === null ? '' : $this->Number->format($pricepattern->updater) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($pricepattern->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($pricepattern->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $pricepattern->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
