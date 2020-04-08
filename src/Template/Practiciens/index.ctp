<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Practicien[]|\Cake\Collection\CollectionInterface $practiciens
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Practicien'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Specialites'), ['controller' => 'Specialites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Specialite'), ['controller' => 'Specialites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Visiteurs'), ['controller' => 'Visiteurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Visiteur'), ['controller' => 'Visiteurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="practiciens index large-9 medium-8 columns content">
    <h3><?= __('Practiciens') ?></h3>
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
            <?php foreach ($practiciens as $practicien): ?>
            <tr>
                <td><?= $this->Number->format($practicien->id) ?></td>
                <td><?= h($practicien->nom) ?></td>
                <td><?= h($practicien->prenom) ?></td>
                <td><?= h($practicien->tel) ?></td>
                <td><?= h($practicien->mail) ?></td>
                <td><?= h($practicien->adresse) ?></td>
                <td><?= $this->Number->format($practicien->codepostal) ?></td>
                <td><?= h($practicien->ville) ?></td>
                <td><?= $practicien->has('specialite') ? $this->Html->link($practicien->specialite->id, ['controller' => 'Specialites', 'action' => 'view', $practicien->specialite->id]) : '' ?></td>
                <td><?= $practicien->has('type') ? $this->Html->link($practicien->type->id, ['controller' => 'Types', 'action' => 'view', $practicien->type->id]) : '' ?></td>
                <td><?= $practicien->has('visiteur') ? $this->Html->link($practicien->visiteur->id, ['controller' => 'Visiteurs', 'action' => 'view', $practicien->visiteur->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $practicien->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $practicien->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $practicien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $practicien->id)]) ?>
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
