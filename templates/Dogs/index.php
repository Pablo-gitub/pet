<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dog> $dogs
 */
?>
<div class="dogs index content mt-4">
    <?= $this->Html->link(__('New Dog'), ['action' => 'add'], ['class' => 'btn btn-danger float-end']) ?>
    <h3><?= __('Cani') ?></h3>
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <!--<th><?= $this->Paginator->sort('id') ?></th>-->
                    <th><?= $this->Paginator->sort('microchip') ?></th>
                    <th><?= $this->Paginator->sort('owner_id') ?></th>
                    <th><?= $this->Paginator->sort('breed_id') ?></th>
                    <th><?= $this->Paginator->sort('mom_chip') ?></th>
                    <th><?= $this->Paginator->sort('dad_chip') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('weight') ?></th>
                    <th><?= $this->Paginator->sort('birthday') ?></th>
                    <!--<th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>-->
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dogs as $dog): ?>
                <tr>
                    <!--<td><?= $this->Number->format($dog->id) ?></td>-->
                    <td><?= h($dog->microchip) ? $this->Html->link($dog->microchip, ['action' => 'view', $dog->id]) : '' ?></td>
                    <td><?= $dog->has('owner') ? $this->Html->link($dog->owner->name, ['controller' => 'Owners', 'action' => 'view', $dog->owner->id]) : '' ?></td>
                    <td><?= $dog->has('breed') ? $this->Html->link($dog->breed->name, ['controller' => 'Breeds', 'action' => 'view', $dog->breed->id]) : '' ?></td>
                    <td><?= h($dog->mom_chip) ?></td>
                    <td><?= h($dog->dad_chip) ?></td>
                    <td><?= h($dog->name) ?></td>
                    <td><?= h($dog->gender) ?></td>
                    <td><?= $this->Number->format($dog->weight) ?></td>
                    <td><?= h($dog->birthday) ?></td>
                    <!--<td><?= h($dog->created) ?></td>
                    <td><?= h($dog->modified) ?></td>-->
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dog->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dog->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dog->id)]) ?>
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
