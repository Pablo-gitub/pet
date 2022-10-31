<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dog $dog
 * @var \Cake\Collection\CollectionInterface|string[] $owners
 * @var \Cake\Collection\CollectionInterface|string[] $breeds
 */
?>
<div class="row">
    <aside  class="col-2 p-4">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Dogs'), ['action' => 'index'], ['class' => 'btn side-nav-item']) ?>
        </div>
    </aside>
    <div class="bg-light column-responsive col-10 p-4">
        <div class="dogs form content">
            <?= $this->Form->create($dog) ?>
            <fieldset class="row">
                <legend><?= __('Add Dog') ?></legend>
                <?php echo $this->Form->control('microchip');?>
                <div class="col-9">
                    <?php echo $this->Form->control('owner_id', ['options' => $owners]); ?>
                </div>
                <div class="col-3">
                    <?php echo $this->Html->link(__('Aggiungi Proprietario'), ['controller' => 'Owners', 'action' => 'add'], ['class' => 'mt-4 btn btn-danger']); ?>
                </div>
                <div class="col-9">
                    <?php echo $this->Form->control('breed_id', ['options' => $breeds]); ?>
                </div>
                <div class="col-3">
                    <?php echo $this->Html->link(__('Aggiungi Razza'), ['controller' => 'Owners', 'action' => 'add'], ['class' => 'mt-4 btn btn-danger']); ?>
                </div>
                <fieldset>
                    <?php echo $this->Form->control('mom_chip', [ 
                        'label'=>'Mom microchip:',
                        'type'=>'text',
                        'id'=>'female_dogs', 
                        'list'=>'female_dog',
                        'autocomplete' => 'off' 
                        ]);?>
                    <datalist id="female_dog">
                        <?php foreach ($females as $female) { ?>
                            <option value="<?php echo $female['microchip']; ?>">
                            <?php echo $female['microchip']; ?></option>
                        <?php } ?>
                    </datalist>
                </fieldset>
                <fieldset>
                    <?php echo $this->Form->control('dad_chip', [ 
                        'label'=>'Dad microchip:',
                        'type'=>'text',
                        'id'=>'male_dogs', 
                        'list'=>'male_dog',
                        'autocomplete' => 'off' 
                        ]);?>
                    <datalist id="male_dog">
                        <?php foreach ($males as $male) { ?>
                            <option value="<?php echo $male['microchip']; ?>">
                            <?php echo $male['microchip']; ?></option>
                        <?php } ?>
                    </datalist>
                </fieldset>
                <?php
                    
                    echo $this->Form->control('name', ['autocomplete' => 'off']);
                    echo $this-> Form->radio( 'gender', $genderOptions );
                               
                    echo $this->Form->control('weight', 
                        ['min' => 0.0,
                        'max' => 200.0]);
                    echo $this->Form->control('birthday');

                    echo $this->Form->control('imagineLink');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-danger float-end mt-2']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
