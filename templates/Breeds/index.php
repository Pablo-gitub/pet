<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Breed> $breeds
 */
?>
<div class="breeds pt-4 index content">
    <?= $this->Html->link(__('New Breed'), ['action' => 'add'], ['class' => 'btn btn-danger float-end']) ?>
    <h3><?= __('Razze') ?></h3>
    <div class="table-responsive">
        <table class="table table-dark table-stripped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('nationality') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($breeds as $breed): ?>
                <tr>
                    <td><?= $this->Number->format($breed->id) ?></td>
                    <td><?= h($breed->name) ?></td>
                    <td><?= h($breed->nationality) ?></td>
                    <td><?= h($breed->created) ?></td>
                    <td><?= h($breed->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $breed->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $breed->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $breed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $breed->id)]) ?>
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
