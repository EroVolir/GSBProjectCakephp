<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visite $visite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $visite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $visite->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Visites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Practiciens'), ['controller' => 'Practiciens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Practicien'), ['controller' => 'Practiciens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visiteurs'), ['controller' => 'Visiteurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visiteur'), ['controller' => 'Visiteurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="visites form large-9 medium-8 columns content">
    <?= $this->Form->create($visite) ?>
    <fieldset>
        <legend><?= __('Edit Visite') ?></legend>
        <?php
            echo $this->Form->control('dateVisite', ['empty' => true]);
            echo $this->Form->control('commentaire');
            echo $this->Form->control('bilan');
            echo $this->Form->control('Practicien_id', ['options' => $practiciens, 'empty' => true]);
            echo $this->Form->control('Visiteur_id', ['options' => $visiteurs, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
