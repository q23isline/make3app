<h1>Databaseサンプル</h1>
<?= $this->Form->create($entity, ['url' => ['action' => 'addRecord']]) ?>
<fieldset>
    <?= $this->Form->input('name', ['type' => 'text']) ?>
    <?= $this->Form->input('title', ['type' => 'text']) ?>
    <?= $this->Form->input('content') ?>
</fieldset>
<?= $this->Form->button('送信') ?>
<?= $this->Form->end() ?>

<table>
    <?php foreach ($data as $obj) : ?>
    <tr>
        <td><?= $obj ?></td>
    </tr>
    <?php endforeach; ?>
</table>
