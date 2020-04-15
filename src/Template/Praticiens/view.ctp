<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Praticien $praticien
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Praticien'), ['action' => 'edit', $praticien->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Praticien'), ['action' => 'delete', $praticien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $praticien->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Praticiens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Praticien'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Specialites'), ['controller' => 'Specialites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Specialite'), ['controller' => 'Specialites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Visiteurs'), ['controller' => 'Visiteurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visiteur'), ['controller' => 'Visiteurs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="praticiens view large-9 medium-8 columns content">
    <h3><?= h($praticien->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($praticien->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($praticien->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($praticien->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($praticien->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse') ?></th>
            <td><?= h($praticien->adresse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td><?= h($praticien->ville) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specialite') ?></th>
            <td><?= $praticien->has('specialite') ? $this->Html->link($praticien->specialite->id, ['controller' => 'Specialites', 'action' => 'view', $praticien->specialite->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $praticien->has('type') ? $this->Html->link($praticien->type->id, ['controller' => 'Types', 'action' => 'view', $praticien->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visiteur') ?></th>
            <td><?= $praticien->has('visiteur') ? $this->Html->link($praticien->visiteur->id, ['controller' => 'Visiteurs', 'action' => 'view', $praticien->visiteur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($praticien->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codepostal') ?></th>
            <td><?= $this->Number->format($praticien->codepostal) ?></td>
        </tr>
    </table>
</div>
