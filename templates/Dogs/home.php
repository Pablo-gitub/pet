<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dog> $dogs
 */
?>

<div class="row">

    
    <div class="card container p-5 m-3 bg-dark text-white col-3">
        <h1 class="text-white">Cani</h1>
        <p>In questa pagina è possibile vedere i diversi cani registrati aggiungerne di nuovi ed applicare modifiche.</p>
        <?= $this->Html->link(__('Elenco dei cani'), ['action' => 'index'], ['class' => 'card-link btn text-white']) ?>
    </div>

    <div class="card container p-5 m-3 bg-dark text-white col-3">
        <h3 class="text-white">Passaggio di proprietà</h3>
        <p>In questa pagina è possibile gestire i passaggi di proprietà.</p>
        <?= $this->Html->link(__('Elenco passaggi'), ['controller' => 'Transfers','action' => 'index'], ['class' => 'card-link btn text-white']) ?>
    </div>

    <div class="card container p-5 m-3 bg-dark text-white col-3">
        <h1 class="text-white">Proprietari</h1>
        <p>In questa pagina è possibile vedere i diversi proprietari registrati aggiungerne di nuvi ed applicare modifiche.</p>
        <?= $this->Html->link(__('Elenco dei proprietari'), ['action' => 'index'], ['class' => 'card-link btn text-white']) ?>
    </div>

</div>
