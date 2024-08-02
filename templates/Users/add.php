<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $stores
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('furigana');
                    echo $this->Form->control('email');
                    echo $this->Form->control('passward');
                    echo $this->Form->control('post_cd');
                    echo $this->Form->control('prefecture');
                    echo $this->Form->control('municipalities');
                    echo $this->Form->control('adress_below');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('register_at');
                    echo $this->Form->control('update_at');
                    echo $this->Form->control('privilege');
                    echo $this->Form->control('store_id', ['options' => $stores, 'empty' => true]);
                    echo $this->Form->control('user_status');
                    echo $this->Form->control('usage_term');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
