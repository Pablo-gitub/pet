<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transfer $transfer
 * @var string[]|\Cake\Collection\CollectionInterface $dogs
 * @var string[]|\Cake\Collection\CollectionInterface $clinics
 */
?>
<div class="row">
    <aside class="col-2 p-4">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transfer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transfer->id), 'class' => 'btn side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Transfers'), ['action' => 'index'], ['class' => 'btn side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive col-10 p-4">
        <div class="transfers form content">
            <?= $this->Form->create($transfer) ?>
            <fieldset>
                <legend><?= __('Edit Transfer') ?></legend>
                <?php
                    echo $this->Form->control('date');
                    echo $this->Form->control('seller_id', ['options' => $owners]);
                    echo $this->Form->control('buyer_id', ['options' => $owners]);
                    echo $this->Form->control('dog_id', ['options' => $dogs]);
                    echo $this->Form->control('clinic_id', ['options' => $clinics]);
                    echo $this->Form->control('prize', ['min' => 0.0]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-danger float-end mt-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
