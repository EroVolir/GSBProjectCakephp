<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Visiteurs'), ['controller' => 'Visiteurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visiteur'), ['controller' => 'Visiteurs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Api Key') ?></th>
            <td><?= h($user->api_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Api Key Plain') ?></th>
            <td><?= h($user->api_key_plain) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Visiteurs') ?></h4>
        <?php if (!empty($user->visiteurs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Matricule') ?></th>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Prenom') ?></th>
                <th scope="col"><?= __('Tel') ?></th>
                <th scope="col"><?= __('Mail') ?></th>
                <th scope="col"><?= __('DateEmbauche') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->visiteurs as $visiteurs): ?>
            <tr>
                <td><?= h($visiteurs->id) ?></td>
                <td><?= h($visiteurs->matricule) ?></td>
                <td><?= h($visiteurs->nom) ?></td>
                <td><?= h($visiteurs->prenom) ?></td>
                <td><?= h($visiteurs->tel) ?></td>
                <td><?= h($visiteurs->mail) ?></td>
                <td><?= h($visiteurs->dateEmbauche) ?></td>
                <td><?= h($visiteurs->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Visiteurs', 'action' => 'view', $visiteurs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Visiteurs', 'action' => 'edit', $visiteurs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Visiteurs', 'action' => 'delete', $visiteurs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visiteurs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
