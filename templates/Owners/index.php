<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Owner> $owners
 */
?>
<div class="owners pt-4 index content">
    <?= $this->Html->link(__('Nuovo Proprietario'), ['action' => 'add'],['class' => 'btn btn-danger float-end']) ?>
    <h3><?= __('Proprietari') ?></h3>
    <div class="table-responsive">
        <table class="table table-dark table-stripped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('lastname') ?></th>
                    <th><?= $this->Paginator->sort('fiscalCode') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($owners as $owner): ?>
                <tr>
                    <td><?= $this->Number->format($owner->id) ?></td>
                    <td><?= $this->Html->link($owner->name, ['action' => 'view', $owner->id]) ?></td>
                    <td><?= h($owner->lastname) ?></td>
                    <td><?= h($owner->fiscalCode) ?></td>
                    <td><?= h($owner->created) ?></td>
                    <td><?= h($owner->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $owner->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $owner->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $owner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id)]) ?>
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
