<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Praticien[]|\Cake\Collection\CollectionInterface $praticiens
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Praticien'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Specialites'), ['controller' => 'Specialites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Specialite'), ['controller' => 'Specialites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visiteurs'), ['controller' => 'Visiteurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visiteur'), ['controller' => 'Visiteurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="praticiens index large-9 medium-8 columns content">
    <h3><?= __('Praticiens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codepostal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ville') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Specialite_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Visiteur_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($praticiens as $praticien): ?>
            <tr>
                <td><?= $this->Number->format($praticien->id) ?></td>
                <td><?= h($praticien->nom) ?></td>
                <td><?= h($praticien->prenom) ?></td>
                <td><?= h($praticien->tel) ?></td>
                <td><?= h($praticien->mail) ?></td>
                <td><?= h($praticien->adresse) ?></td>
                <td><?= $this->Number->format($praticien->codepostal) ?></td>
                <td><?= h($praticien->ville) ?></td>
                <td><?= $praticien->has('specialite') ? $this->Html->link($praticien->specialite->id, ['controller' => 'Specialites', 'action' => 'view', $praticien->specialite->id]) : '' ?></td>
                <td><?= $praticien->has('type') ? $this->Html->link($praticien->type->id, ['controller' => 'Types', 'action' => 'view', $praticien->type->id]) : '' ?></td>
                <td><?= $praticien->has('visiteur') ? $this->Html->link($praticien->visiteur->id, ['controller' => 'Visiteurs', 'action' => 'view', $praticien->visiteur->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $praticien->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $praticien->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $praticien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $praticien->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
