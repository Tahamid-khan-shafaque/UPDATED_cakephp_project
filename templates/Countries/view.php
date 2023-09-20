<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countries view content">
            <h3><?= h($country->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Country Code') ?></th>
                    <td><?= h($country->country_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country Name') ?></th>
                    <td><?= h($country->country_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($country->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($country->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($country->updated_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
