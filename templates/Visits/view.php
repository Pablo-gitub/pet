<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visit $visit
 */
?>
<div class="row">
    <aside class="col-2 p-4">
        <div class="side-nav nav flex-column">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Visit'), ['action' => 'edit', $visit->id], ['class' => 'nav-item side-nav-item text-dark']) ?>
            <?= $this->Form->postLink(__('Delete Visit'), ['action' => 'delete', $visit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id), 'class' => 'nav-item side-nav-item text-dark']) ?>
            <?= $this->Html->link(__('List Visits'), ['action' => 'index'], ['class' => 'nav-item side-nav-item text-dark']) ?>
            <?= $this->Html->link(__('New Visit'), ['action' => 'add'], ['class' => 'nav-item side-nav-item text-dark']) ?>
        </div>
    </aside>
    <div class="column-responsive col-10 p-4">
        <div class="visits view content">
            <h3><?= h($visit->date) ?></h3>
            <table class="table table-striped">
                <tr>
                    <th><?= __('Dog') ?></th>
                    <td><?= $visit->has('dog') ? $this->Html->link($visit->dog->name, ['controller' => 'Dogs', 'action' => 'view', $visit->dog->id], ['class' =>'btn']) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Clinic') ?></th>
                    <td><?= $visit->has('clinic') ? $this->Html->link($visit->clinic->name, ['controller' => 'Clinics', 'action' => 'view', $visit->clinic->id], ['class' =>'btn']) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Doctor') ?></th>
                    <td><?= h($visit->doctor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($visit->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($visit->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($visit->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($visit->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Esito') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($visit->esito)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
