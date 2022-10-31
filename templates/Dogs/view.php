<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dog $dog
 */
?>
<div class="dogs view content mt-4 row">
    <aside class="col-2 mr-2 p-4">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dog'), ['action' => 'edit', $dog->id], ['class' => 'btn side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dog'), ['action' => 'delete', $dog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dog->id), 'class' => 'btn side-nav-item']) ?>
            <?= $this->Html->link(__('List Dogs'), ['action' => 'index'], ['class' => 'btn side-nav-item']) ?>
            <?= $this->Html->link(__('New Dog'), ['action' => 'add'], ['class' => 'btn side-nav-item']) ?>
            <?= $this->Html->image($dog->imagineLink, ['alt' => $dog->name, 'class'=>'img-thumbnail'])?>
        </div>
    </aside>
    <div class="p-4 col-10">
        <div class="dogs view content">
            <h3><?= h($dog->name) ?></h3>
            <table class="table table-striped">
                <tr>
                    <th><?= __('Owner') ?></th>
                    <td><?= $dog->has('owner') ? $this->Html->link($dog->owner->name, ['controller' => 'Owners', 'action' => 'view', $dog->owner->id], ['class' => 'btn']) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Breed') ?></th>
                    <td><?= $dog->has('breed') ? $this->Html->link($dog->breed->name, ['controller' => 'Breeds', 'action' => 'view', $dog->breed->id], ['class' => 'btn']) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($dog->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($dog->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dog->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Microchip') ?></th>
                    <td><?= h($dog->microchip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mom Chip') ?></th>
                    <td><?= h($dog->mom_chip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dad Chip') ?></th>
                    <td><?= h($dog->dad_chip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weight') ?></th>
                    <td><?= $this->Number->format($dog->weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthday') ?></th>
                    <td><?= h($dog->birthday) ?></td>
                </tr>
                <tr>
                    <th><?= __('imagineLink') ?></th>
                    <td><?= h($dog->imagineLink) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($dog->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($dog->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Transfers') ?></h4>
                <?php if (!empty($dog->transfers)) : ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Seller Id') ?></th>
                            <th><?= __('Buyer Id') ?></th>
                            <th><?= __('Dog Id') ?></th>
                            <th><?= __('Clinic Id') ?></th>
                            <th><?= __('Prize') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($dog->transfers as $transfers) : ?>
                        <tr>
                            <td><?= h($transfers->id) ?></td>
                            <td><?= h($transfers->date) ?></td>
                            <td><?= h($transfers->seller_id) ?></td>
                            <td><?= h($transfers->buyer_id) ?></td>
                            <td><?= h($transfers->dog_id) ?></td>
                            <td><?= h($transfers->clinic_id) ?></td>
                            <td><?= h($transfers->prize) ?></td>
                            <td><?= h($transfers->created) ?></td>
                            <td><?= h($transfers->modified) ?></td>
                            <td class="actions  btn-group">
                                <?= $this->Html->link(__('View'), ['controller' => 'Transfers', 'action' => 'view', $transfers->id], ['class' => 'btn btn-primary ']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Transfers', 'action' => 'edit', $transfers->id], ['class' => 'btn btn-primary ']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transfers', 'action' => 'delete', $transfers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfers->id), 'class' => 'btn btn-danger ']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Visits') ?></h4>
                <?php if (!empty($dog->visits)) : ?>
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
                        <?php foreach ($dog->visits as $visits) : ?>
                        <tr>
                            <td><?= h($visits->id) ?></td>
                            <td><?= h($visits->date) ?></td>
                            <td><?= h($visits->dog_id) ?></td>
                            <td><?= h($visits->clinic_id) ?></td>
                            <td><?= h($visits->doctor) ?></td>
                            <td><?= h($visits->esito) ?></td>
                            <td><?= h($visits->created) ?></td>
                            <td><?= h($visits->modified) ?></td>
                            <td class="actions btn-group">
                                <?= $this->Html->link(__('View'), ['controller' => 'Visits', 'action' => 'view', $visits->id], ['class' => 'btn btn-primary ']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Visits', 'action' => 'edit', $visits->id], ['class' => 'btn btn-primary ']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Visits', 'action' => 'delete', $visits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visits->id), 'class' => 'btn btn-danger ']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <?php if (!empty($dog->mom_chip||$dog->dad_chip)) : ?>
                <h4><?= __('Related Parents') ?></h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th><?= __('parent') ?></th>
                            <th><?= __('microchip') ?></th>
                            <th><?= __('name') ?></th>
                            <th><?= __('owner') ?></th>
                            
                        </tr>
                        <?php if (!empty($dog->mom_chip)) : ?>
                        <tr>
                            <td><?= __('mom') ?></td>
                            <td><?= $mom && $momy ? $this->Html->link($mom->microchip, ['controller' => 'Dogs', 'action' => 'view', $mom->id], ['class' => 'btn']) : $dog->mom_chip .' not present in the db anymore'?></td>
                            <td><?= $mom && $momy ? $this->Html->link($mom->name, ['controller' => 'Dogs', 'action' => 'view', $mom->id], ['class' => 'btn']) : '' ?></td>
                            <td><?= $mom && $momy ? $this->Html->link($momy->owner->name, ['controller' => 'Owners', 'action' => 'view', $mom->owner_id], ['class' => 'btn']) : '' ?></td>
                            
                        </tr>
                        <?php endif; ?>
                        <?php if (!empty($dog->dad_chip)) : ?>
                        <tr>
                            <td><?= __('dad') ?></td>
                            <td><?= $dad && $dady? $this->Html->link($dad->microchip, ['controller' => 'Dogs', 'action' => 'view', $dad->id], ['class' => 'btn']) : $dog->dad_chip .' not present in the db anymore'?></td>
                            <td><?= $dad && $dady? $this->Html->link($dad->name, ['controller' => 'Dogs', 'action' => 'view', $dad->id], ['class' => 'btn']) : '' ?></td>
                            <td><?= $dad && $dady? $this->Html->link($dady->owner->name, ['controller' => 'Owners', 'action' => 'view', $dad->owner_id], ['class' => 'btn']) : '' ?></td>
                            
                        </tr>
                        <?php endif; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <?php if (!empty($kids)) : ?>
                    <h4><?= __('Related Kids') ?></h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th><?= __('Kid') ?></th>
                                <th><?= __('microchip') ?></th>
                                <th><?= __('name') ?></th>
                                
                            </tr>
                            <?php foreach($kids as $kid) : ?>
                            <tr>
                                <td><?= h($kid->gender) ?></td>
                                <td><?= $kid ? $this->Html->link($kid->microchip, ['controller' => 'Dogs', 'action' => 'view', $kid->id], ['class' => 'btn']) : $kid->microchip .' not present in the db anymore'?></td>
                                <td><?= $kid ? $this->Html->link($kid->name, ['controller' => 'Dogs', 'action' => 'view', $kid->id], ['class' => 'btn']) : '' ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
