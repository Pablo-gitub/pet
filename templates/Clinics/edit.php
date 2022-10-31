<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clinic $clinic
 */
?>
<div class="row">
    <aside class="col-2 p-4">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clinic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clinic->id), 'class' => 'btn side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Clinics'), ['action' => 'index'], ['class' => 'btn side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive col-10 p-4">
        <div class="clinics form content">
            <?= $this->Form->create($clinic) ?>
            <fieldset>
                <legend><?= __('Edit Clinic') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-danger float-end mt-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
