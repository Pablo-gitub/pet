<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transfer $transfer
 */
?>
<div class="row">
    <aside class="col-2 p-4">
        <div class="side-nav nav flex-column">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transfer'), ['action' => 'edit', $transfer->id], ['class' => 'nav-item side-nav-item text-dark']) ?>
            <?= $this->Form->postLink(__('Delete Transfer'), ['action' => 'delete', $transfer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfer->id), 'class' => 'nav-item side-nav-item text-dark']) ?>
            <?= $this->Html->link(__('List Transfers'), ['action' => 'index'], ['class' => 'nav-item side-nav-item text-dark']) ?>
            <?= $this->Html->link(__('New Transfer'), ['action' => 'add'], ['class' => 'nav-item side-nav-item text-dark']) ?>
        </div>
    </aside>
    <div class="column-responsive col-10 p-4">
        <div class="transfers view content">
            <h3><?= h($transfer->dog->name) ?></h3>
            <table class="table table-striped">
                <tr>
                    <th><?= __('Dog') ?></th>
                    <td><?= $transfer->has('dog') ? $this->Html->link($transfer->dog->name, ['controller' => 'Dogs', 'action' => 'view', $transfer->dog->id], ['class' => 'btn side-nav-item']) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Clinic') ?></th>
                    <td><?= $transfer->has('clinic') ? $this->Html->link($transfer->clinic->name, ['controller' => 'Clinics', 'action' => 'view', $transfer->clinic->id], ['class' => 'btn side-nav-item']) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transfer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seller Id') ?></th>
                    <td><?= $transfer->has('owner') ? $this->Html->link($transfer->seller_id, ['controller' => 'Owners', 'action' => 'view', $transfer->seller_id], ['class' => 'btn side-nav-item']) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Buyer Id') ?></th>
                    <td><?= $transfer->has('owner') ? $this->Html->link($transfer->buyer_id, ['controller' => 'Owners', 'action' => 'view', $transfer->buyer_id], ['class' => 'btn side-nav-item']) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Prize') ?></th>
                    <td><?= $this->Number->format($transfer->prize) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($transfer->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($transfer->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($transfer->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
