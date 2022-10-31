<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Owner $owner
 */
?>
<div class="row">
    <aside class="column p-4 col-1">
        <div class="side-nav  nav flex-column">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Owner'), ['action' => 'edit', $owner->id], ['class' => 'nav-item side-nav-item text-dark']) ?>
            <?= $this->Form->postLink(__('Delete Owner'), ['action' => 'delete', $owner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id), 'class' => 'nav-item side-nav-item text-dark']) ?>
            <?= $this->Html->link(__('List Owners'), ['action' => 'index'], ['class' => 'nav-item side-nav-item text-dark']) ?>
            <?= $this->Html->link(__('New Owner'), ['action' => 'add'], ['class' => 'nav-item side-nav-item text-dark']) ?>
        </div>
    </aside>
    <div class="column-responsive p-4 col-11">
        <div class="owners view content">
            <h3><?= h($owner->name) ?></h3>
            <table class="table table-striped">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($owner->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= h($owner->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('FiscalCode') ?></th>
                    <td><?= h($owner->fiscalCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($owner->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($owner->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($owner->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Dogs') ?></h4>
                <?php if (!empty($owner->dogs)) : ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Microchip') ?></th>
                            <th><?= __('Owner Id') ?></th>
                            <th><?= __('Breed Id') ?></th>
                            <th><?= __('Mom Chip') ?></th>
                            <th><?= __('Dad Chip') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Weight') ?></th>
                            <th><?= __('Birthday') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($owner->dogs as $dogs) : ?>
                        <tr>
                            <td><?= h($dogs->id) ?></td>
                            <td><?= h($dogs->microchip) ?></td>
                            <td><?= h($dogs->owner_id) ?></td>
                            <td><?= h($dogs->breed_id) ?></td>
                            <td><?= h($dogs->mom_chip) ?></td>
                            <td><?= h($dogs->dad_chip) ?></td>
                            <td><?= h($dogs->name) ?></td>
                            <td><?= h($dogs->gender) ?></td>
                            <td><?= h($dogs->weight) ?></td>
                            <td><?= h($dogs->birthday) ?></td>
                            <td><?= h($dogs->created) ?></td>
                            <td><?= h($dogs->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Dogs', 'action' => 'view', $dogs->id],['class' => 'btn']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Dogs', 'action' => 'edit', $dogs->id],['class' => 'btn']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dogs', 'action' => 'delete', $dogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dogs->id), 'class' => 'btn']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
