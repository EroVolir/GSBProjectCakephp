<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visite $visite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Visite'), ['action' => 'edit', $visite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Visite'), ['action' => 'delete', $visite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Visites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visite'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Practiciens'), ['controller' => 'Practiciens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Practicien'), ['controller' => 'Practiciens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Visiteurs'), ['controller' => 'Visiteurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visiteur'), ['controller' => 'Visiteurs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="visites view large-9 medium-8 columns content">
    <h3><?= h($visite->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Commentaire') ?></th>
            <td><?= h($visite->commentaire) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bilan') ?></th>
            <td><?= h($visite->bilan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Practicien') ?></th>
            <td><?= $visite->has('practicien') ? $this->Html->link($visite->practicien->id, ['controller' => 'Practiciens', 'action' => 'view', $visite->practicien->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visiteur') ?></th>
            <td><?= $visite->has('visiteur') ? $this->Html->link($visite->visiteur->id, ['controller' => 'Visiteurs', 'action' => 'view', $visite->visiteur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($visite->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateVisite') ?></th>
            <td><?= h($visite->dateVisite) ?></td>
        </tr>
    </table>
</div>
