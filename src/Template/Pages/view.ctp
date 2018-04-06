<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link('Listar Páginas', ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3>Visualizando páginas</h3>
    <ul>
        <li><?= $page->title ?></li>
        <li><?= $page->url ?></li>
        <li><?= $page->body ?></li>
        <li><?= $page->title_url ?></li>
    </ul>
    
</div>
