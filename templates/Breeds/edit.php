<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Breed $breed
 */
?>
<div class="row">
    <aside class="col-2 p-4">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $breed->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $breed->id), 'class' => 'btn side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Breeds'), ['action' => 'index'], ['class' => 'btn side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive col-10 p-4">
        <div class="breeds form content">
            <?= $this->Form->create($breed) ?>
            <fieldset>
                <legend><?= __('Edit Breed') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('origin');
                    echo $this->Form->control('description');
                    echo $this->Form->control('behaviour');
                    echo $this->Form->control('nationality');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-danger float-end mt-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
