<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Breed $breed
 */
?>
<div class="breeds row view content mt-4 row">
    <aside class="col-2 mr-2 p-4">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Breed'), ['action' => 'edit', $breed->id], ['class' => 'btn side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Breed'), ['action' => 'delete', $breed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $breed->id), 'class' => 'btn side-nav-item']) ?>
            <?= $this->Html->link(__('List Breeds'), ['action' => 'index'], ['class' => 'btn side-nav-item']) ?>
            <?= $this->Html->link(__('New Breed'), ['action' => 'add'], ['class' => 'btn side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive p-4 col-10">
        <div class="breeds view content">
            <h3><?= h($breed->name) ?></h3>
            <table class="table table-striped">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($breed->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nationality') ?></th>
                    <td><?= h($breed->nationality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($breed->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($breed->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($breed->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Origin') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($breed->origin)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($breed->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Behaviour') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($breed->behaviour)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Dogs') ?></h4>
                <?php if (!empty($breed->dogs)) : ?>
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
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
                        <?php foreach ($breed->dogs as $dogs) : ?>
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
                                <?= $this->Html->link(__('View'), ['controller' => 'Dogs', 'action' => 'view', $dogs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Dogs', 'action' => 'edit', $dogs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dogs', 'action' => 'delete', $dogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dogs->id)]) ?>
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
