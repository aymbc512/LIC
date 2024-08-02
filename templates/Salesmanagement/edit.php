<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salesmanagement $salesmanagement
 * @var string[]|\Cake\Collection\CollectionInterface $reservations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $salesmanagement->salesManegement_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $salesmanagement->salesManegement_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Salesmanagement'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="salesmanagement form content">
            <?= $this->Form->create($salesmanagement) ?>
            <fieldset>
                <legend><?= __('Edit Salesmanagement') ?></legend>
                <?php
                    echo $this->Form->control('reservation_id', ['options' => $reservations, 'empty' => true]);
                    echo $this->Form->control('vehicle_id');
                    echo $this->Form->control('reservation_store_id');
                    echo $this->Form->control('status_kbn');
                    echo $this->Form->control('start_on', ['empty' => true]);
                    echo $this->Form->control('start_at', ['empty' => true]);
                    echo $this->Form->control('end_on', ['empty' => true]);
                    echo $this->Form->control('end_at', ['empty' => true]);
                    echo $this->Form->control('usage_time', ['empty' => true]);
                    echo $this->Form->control('late_time', ['empty' => true]);
                    echo $this->Form->control('option_amount');
                    echo $this->Form->control('other_additional_fee');
                    echo $this->Form->control('other_additional_fee_contents');
                    echo $this->Form->control('reduced_fee');
                    echo $this->Form->control('reduced_fee_contents');
                    echo $this->Form->control('basic_fee');
                    echo $this->Form->control('late_fee');
                    echo $this->Form->control('amount_of_points_used');
                    echo $this->Form->control('reward_points');
                    echo $this->Form->control('total_amount');
                    echo $this->Form->control('accounting_amount');
                    echo $this->Form->control('commission');
                    echo $this->Form->control('amount_paid_to_store');
                    echo $this->Form->control('liquidated');
                    echo $this->Form->control('creator');
                    echo $this->Form->control('created_at', ['empty' => true]);
                    echo $this->Form->control('updater');
                    echo $this->Form->control('updated_at');
                    echo $this->Form->control('is_deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
