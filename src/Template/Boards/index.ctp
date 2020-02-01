<h1><?= __('board') ?></h1>
<p>
    <?= $this->Html->link(
        __('post'),
        ['action' => 'add']
    ) ?>
</p>
<p><?= __('{0} post', $count) ?></p>
<div>
    <table>
        <?= $this->Html->tableHeaders(
            ['ID', '投稿者', 'タイトル'],
            [],
            ['style' => 'color:#EEEEFF; background-color: #000099; font-weight:bold']
        ) ?>
        <?php foreach ($data as $obj): ?>
        <?= $this->Html->tableCells(
            [
                $obj['id'],
                $obj['person']['name'],
                $obj['title'],
            ],
            ['style' => 'color:#000066; background-color: #CCCCFF'],
            ['style' => 'color:#006600; background-color:#EEFFEE'],
            false,
            true
        ) ?>
        <?php endforeach; ?>
    </table>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first(' << first ') ?>
            <?= $this->Paginator->prev(' < prev ') ?>
            <?= $this->Paginator->next(' next > ') ?>
            <?= $this->Paginator->last(' last >> ') ?>
        </ul>
    </div>
</div>
