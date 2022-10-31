<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transfer $transfer
 * @var \Cake\Collection\CollectionInterface|string[] $dogs
 * @var \Cake\Collection\CollectionInterface|string[] $clinics
 */
?>
<div class="row">
    <aside class="col-2 p-4">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Transfers'), ['action' => 'index'], ['class' => 'btn side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive col-10 p-4">
        <div class="transfers form content">
            <?= $this->Form->create($transfer) ?>
            <fieldset>
                <legend><?= __('Add Transfer') ?></legend>
                <?php
                    echo $this->Form->control('date');
                    echo $this->Form->control('dog_id', ['options' => $dogs]);
                    echo $this->Form->control('seller_id', ['options' => $owners]);
                    echo $this->Form->control('buyer_id', ['options' => $owners]);
                    echo $this->Form->control('clinic_id', ['options' => $clinics]);
                    echo $this->Form->control('prize', ['min' => 0.0]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-danger mt-2 float-end']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
