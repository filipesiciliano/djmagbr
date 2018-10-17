<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dj $dj
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dj'), ['action' => 'edit', $dj->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dj'), ['action' => 'delete', $dj->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dj->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Djs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dj'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="djs view large-9 medium-8 columns content">
    <h3><?= h($dj->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($dj->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($dj->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dj->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dj->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($dj->modified) ?></td>
        </tr>
    </table>
</div>
