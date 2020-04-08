<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visiteur $visiteur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Visiteur'), ['action' => 'edit', $visiteur->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Visiteur'), ['action' => 'delete', $visiteur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visiteur->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Visiteurs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visiteur'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="visiteurs view large-9 medium-8 columns content">
    <h3><?= h($visiteur->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($visiteur->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($visiteur->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($visiteur->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($visiteur->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($visiteur->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matricule') ?></th>
            <td><?= $this->Number->format($visiteur->matricule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateEmbauche') ?></th>
            <td><?= h($visiteur->dateEmbauche) ?></td>
        </tr>
    </table>
</div>
