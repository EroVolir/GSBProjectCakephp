<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produit $produit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produit'), ['action' => 'edit', $produit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produit'), ['action' => 'delete', $produit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Familles'), ['controller' => 'Familles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Famille'), ['controller' => 'Familles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produits view large-9 medium-8 columns content">
    <h3><?= h($produit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($produit->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Famille') ?></th>
            <td><?= $produit->has('famille') ? $this->Html->link($produit->famille->id, ['controller' => 'Familles', 'action' => 'view', $produit->famille->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produit->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= $this->Number->format($produit->prix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumeroDepot') ?></th>
            <td><?= $this->Number->format($produit->numeroDepot) ?></td>
        </tr>
    </table>
</div>
