
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link('Nova Página', ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3>Páginas</h3>
    <?php //debug($pages); ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Título</th>
                <th>Url</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pages as $page): ?>
            <?php //debug($page->title_url); ?>
            <tr>
                <td><?= $page->title ?></td>
                <td><?= $page->url ?></td>
                <td class="actions">
                    <?= $this->Html->link('Ver', '/pages/view/' . $page->id) ?> 
                    <?= $this->Html->link('Editar', ['action' => 'edit', $page->id]) ?> 
                    <?= $this->Form->postLink('Remover', ['action' => 'delete', $page->id], ['confirm' => 'Você tem certeza que quer remover ' . $page->title]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de um total de {{count}}')]) ?></p>
    </div>
</div>
