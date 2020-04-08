<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Practicien $practicien
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Practicien'), ['action' => 'edit', $practicien->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Practicien'), ['action' => 'delete', $practicien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $practicien->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Practiciens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Practicien'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Specialites'), ['controller' => 'Specialites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Specialite'), ['controller' => 'Specialites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Visiteurs'), ['controller' => 'Visiteurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visiteur'), ['controller' => 'Visiteurs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="practiciens view large-9 medium-8 columns content">
    <h3><?= h($practicien->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($practicien->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($practicien->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($practicien->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($practicien->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($practicien->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td><?= h($practicien->ville) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specialite') ?></th>
            <td><?= $practicien->has('specialite') ? $this->Html->link($practicien->specialite->id, ['controller' => 'Specialites', 'action' => 'view', $practicien->specialite->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $practicien->has('type') ? $this->Html->link($practicien->type->id, ['controller' => 'Types', 'action' => 'view', $practicien->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visiteur') ?></th>
            <td><?= $practicien->has('visiteur') ? $this->Html->link($practicien->visiteur->id, ['controller' => 'Visiteurs', 'action' => 'view', $practicien->visiteur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($practicien->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codepostal') ?></th>
            <td><?= $this->Number->format($practicien->codepostal) ?></td>
        </tr>
    </table>
</div>
