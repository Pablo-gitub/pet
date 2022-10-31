<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clinic $clinic
 */
?>
<div class="clinics view content mt-4 row">
    <aside class="col-2 mr-2 p-4">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Clinic'), ['action' => 'edit', $clinic->id], ['class' => 'btn side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Clinic'), ['action' => 'delete', $clinic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clinic->id), 'class' => 'btn side-nav-item']) ?>
            <?= $this->Html->link(__('List Clinics'), ['action' => 'index'], ['class' => 'btn side-nav-item']) ?>
            <?= $this->Html->link(__('New Clinic'), ['action' => 'add'], ['class' => 'btn side-nav-item']) ?>
        </div>
    </aside>
    <div class="p-4 col-10">
        <div class="clinics view content">
            <h3><?= h($clinic->name) ?></h3>
            <table class="table table-striped">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($clinic->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($clinic->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($clinic->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($clinic->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Transfers') ?></h4>
                <?php if (!empty($clinic->transfers)) : ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Seller Id') ?></th>
                            <th><?= __('Buyer Id') ?></th>
                            <th><?= __('Dog Id') ?></th>
                            <th><?= __('Clinic Id') ?></th>
                            <th><?= __('FiscalCode') ?></th>
                            <th><?= __('Prize') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($clinic->transfers as $transfers) : ?>
                        <tr>
                            <td><?= h($transfers->id) ?></td>
                            <td><?= h($transfers->date) ?></td>
                            <td><?= h($transfers->seller_id) ?></td>
                            <td><?= h($transfers->buyer_id) ?></td>
                            <td><?= h($transfers->dog_id) ?></td>
                            <td><?= h($transfers->clinic_id) ?></td>
                            <td><?= h($transfers->fiscalCode) ?></td>
                            <td><?= h($transfers->prize) ?></td>
                            <td><?= h($transfers->created) ?></td>
                            <td><?= h($transfers->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Transfers', 'action' => 'view', $transfers->id], ['class' => 'btn']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Transfers', 'action' => 'edit', $transfers->id], ['class' => 'btn']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transfers', 'action' => 'delete', $transfers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfers->id), 'class' => 'btn']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Visits') ?></h4>
                <?php if (!empty($clinic->visits)) : ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Dog Id') ?></th>
                            <th><?= __('Clinic Id') ?></th>
                            <th><?= __('Doctor') ?></th>
                            <th><?= __('Esito') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($clinic->visits as $visits) : ?>
                        <tr>
                            <td><?= h($visits->id) ?></td>
                            <td><?= h($visits->date) ?></td>
                            <td><?= h($visits->dog_id) ?></td>
                            <td><?= h($visits->clinic_id) ?></td>
                            <td><?= h($visits->doctor) ?></td>
                            <td><?= h($visits->esito) ?></td>
                            <td><?= h($visits->created) ?></td>
                            <td><?= h($visits->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Visits', 'action' => 'view', $visits->id], ['class' => 'btn']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Visits', 'action' => 'edit', $visits->id], ['class' => 'btn']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Visits', 'action' => 'delete', $visits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visits->id), 'class' => 'btn']) ?>
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
