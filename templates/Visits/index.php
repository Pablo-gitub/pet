<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Visit> $visits
 */
?>
<div class="visits pt-4 index content">
    <?= $this->Html->link(__('Nuova Visita'), ['action' => 'add'], ['class' => 'btn btn-danger float-end']) ?>
    <h3><?= __('Visite') ?></h3>
    <div class="table-responsive">
        <table class="table table-dark table-stripped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('dog_id') ?></th>
                    <th><?= $this->Paginator->sort('clinic_id') ?></th>
                    <th><?= $this->Paginator->sort('doctor') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visits as $visit): ?>
                <tr>
                    <td><?= $this->Number->format($visit->id) ?></td>
                    <td><?= h($visit->date) ?></td>
                    <td><?= $visit->has('dog') ? $this->Html->link($visit->dog->name, ['controller' => 'Dogs', 'action' => 'view', $visit->dog->id]) : '' ?></td>
                    <td><?= $visit->has('clinic') ? $this->Html->link($visit->clinic->name, ['controller' => 'Clinics', 'action' => 'view', $visit->clinic->id]) : '' ?></td>
                    <td><?= h($visit->doctor) ?></td>
                    <td><?= h($visit->created) ?></td>
                    <td><?= h($visit->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $visit->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visit->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visit->id)]) ?>
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
