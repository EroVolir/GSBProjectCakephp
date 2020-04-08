<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Specialite $specialite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Specialites'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="specialites form large-9 medium-8 columns content">
    <?= $this->Form->create($specialite) ?>
    <fieldset>
        <legend><?= __('Add Specialite') ?></legend>
        <?php
            echo $this->Form->control('libelle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
