<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Transfer> $transfers
 */
?>
<div class="transfers pt-4 index content">
    <?= $this->Html->link(__('Nuovo passaggio'), ['action' => 'add'],['class' => 'btn btn-danger float-end']) ?>
    <h3><?= __('Passaggi di proprietà') ?></h3>
    <div class="table-responsive">
        <table class="table table-dark table-stripped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('seller_id') ?></th>
                    <th><?= $this->Paginator->sort('buyer_id') ?></th>
                    <th><?= $this->Paginator->sort('dog_id') ?></th>
                    <th><?= $this->Paginator->sort('clinic_id') ?></th>
                    <th><?= $this->Paginator->sort('prize') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transfers as $transfer): ?>
                <tr>
                    <td><?= $this->Number->format($transfer->id) ?></td>
                    <td><?= h($transfer->date) ?></td>
                    <td><?= $transfer->has('owner') ? $this->Html->link($transfer->seller_id, ['controller' => 'Owners', 'action' => 'view', $transfer->seller_id]) : '' ?></td>
                    <td><?= $transfer->has('owner') ? $this->Html->link($transfer->buyer_id, ['controller' => 'Owners', 'action' => 'view', $transfer->buyer_id]) : '' ?></td>
                    <td><?= $transfer->has('dog') ? $this->Html->link($transfer->dog->name, ['controller' => 'Dogs', 'action' => 'view', $transfer->dog->id]) : '' ?></td>
                    <td><?= $transfer->has('clinic') ? $this->Html->link($transfer->clinic->name, ['controller' => 'Clinics', 'action' => 'view', $transfer->clinic->id]) : '' ?></td>
                    <td><?= $this->Number->format($transfer->prize) ?></td>
                    <td><?= h($transfer->created) ?></td>
                    <td><?= h($transfer->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $transfer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transfer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transfer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfer->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
