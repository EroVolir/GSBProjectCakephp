<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visiteur $visiteur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Visiteurs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="visiteurs form large-9 medium-8 columns content">
    <?= $this->Form->create($visiteur) ?>
    <fieldset>
        <legend><?= __('Add Visiteur') ?></legend>
        <?php
            echo $this->Form->control('matricule');
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('tel');
            echo $this->Form->control('mail');
            echo $this->Form->control('dateEmbauche', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
