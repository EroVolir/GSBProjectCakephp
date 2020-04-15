<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Praticien $praticien
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Praticiens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Specialites'), ['controller' => 'Specialites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Specialite'), ['controller' => 'Specialites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visiteurs'), ['controller' => 'Visiteurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visiteur'), ['controller' => 'Visiteurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="praticiens form large-9 medium-8 columns content">
    <?= $this->Form->create($praticien) ?>
    <fieldset>
        <legend><?= __('Add Praticien') ?></legend>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('tel');
            echo $this->Form->control('mail');
            echo $this->Form->control('adresse');
            echo $this->Form->control('codepostal');
            echo $this->Form->control('ville');
            echo $this->Form->control('Specialite_id', ['options' => $specialites, 'empty' => true]);
            echo $this->Form->control('Type_id', ['options' => $types, 'empty' => true]);
            echo $this->Form->control('Visiteur_id', ['options' => $visiteurs, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
