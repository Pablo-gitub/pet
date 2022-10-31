<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visit $visit
 * @var \Cake\Collection\CollectionInterface|string[] $dogs
 * @var \Cake\Collection\CollectionInterface|string[] $clinics
 */
?>
<div class="row">
    <aside class="col-2 p-4">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Visits'), ['action' => 'index'], ['class' => 'nav-item side-nav-item text-dark']) ?>
        </div>
    </aside>
    <div class="column-responsive col-10 p-4">
        <div class="visits form content">
            <?= $this->Form->create($visit) ?>
            <fieldset>
                <legend><?= __('Add Visit') ?></legend>
                <?php
                    echo $this->Form->control('date');
                    echo $this->Form->control('dog_id', ['options' => $dogs]);
                    echo $this->Form->control('clinic_id', ['options' => $clinics]);
                    echo $this->Form->control('doctor');
                    echo $this->Form->control('esito');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-danger float-end mt-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
