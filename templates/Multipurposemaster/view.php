<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Multipurposemaster $multipurposemaster
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Multipurposemaster'), ['action' => 'edit', $multipurposemaster->multi_purpose_master_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Multipurposemaster'), ['action' => 'delete', $multipurposemaster->multi_purpose_master_id], ['confirm' => __('Are you sure you want to delete # {0}?', $multipurposemaster->multi_purpose_master_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Multipurposemaster'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Multipurposemaster'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="multipurposemaster view content">
            <h3><?= h($multipurposemaster->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($multipurposemaster->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Multi Purpose Master Id') ?></th>
                    <td><?= $this->Number->format($multipurposemaster->multi_purpose_master_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Id') ?></th>
                    <td><?= $multipurposemaster->data_id === null ? '' : $this->Number->format($multipurposemaster->data_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Detail Id') ?></th>
                    <td><?= $multipurposemaster->detail_id === null ? '' : $this->Number->format($multipurposemaster->detail_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Deleted') ?></th>
                    <td><?= $multipurposemaster->is_deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
