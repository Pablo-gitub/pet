<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Owner $owner
 */
?>
<div class="row">
    <aside class="col-2 p-4">
        <div class="side-nav  nav flex-column">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Owners'), ['action' => 'index'], ['class' => 'nav-item side-nav-item text-dark']) ?>
        </div>
    </aside>
    <div class="column-responsive col-10 p-4">
        <div class="owners form content">
            <?= $this->Form->create($owner) ?>
            <fieldset>
                <legend><?= __('Add Owner') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('fiscalCode');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-danger float-end mt-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
