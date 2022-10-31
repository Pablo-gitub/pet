<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Clinic> $clinics
 */
?>
<div class="clinics pt-4 index content">
    <?= $this->Html->link(__('New Clinic'), ['action' => 'add'], ['class' => 'btn btn-danger float-end']) ?>
    <h3><?= __('Cliniche') ?></h3>
    <div class="table-responsive">
        <table class="table table-dark table-stripped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clinics as $clinic): ?>
                <tr>
                    <td><?= $this->Number->format($clinic->id) ?></td>
                    <td><?= h($clinic->name) ?></td>
                    <td><?= h($clinic->created) ?></td>
                    <td><?= h($clinic->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $clinic->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clinic->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clinic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clinic->id)]) ?>
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
