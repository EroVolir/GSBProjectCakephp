<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Specialite $specialite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Specialite'), ['action' => 'edit', $specialite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Specialite'), ['action' => 'delete', $specialite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Specialites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Specialite'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="specialites view large-9 medium-8 columns content">
    <h3><?= h($specialite->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($specialite->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($specialite->id) ?></td>
        </tr>
    </table>
</div>
