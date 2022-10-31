<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visit $visit
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
                ['action' => 'delete', $visit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id), 'class' => 'btn side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Visits'), ['action' => 'index'], ['class' => 'btn side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive col-10 p-4">
        <div class="visits form content">
            <?= $this->Form->create($visit) ?>
            <fieldset>
                <legend><?= __('Edit Visit') ?></legend>
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
