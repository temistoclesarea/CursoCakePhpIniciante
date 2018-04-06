<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link('Listar Páginas', ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($page) ?>
    <fieldset>
        <legend>Nova Página</legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('url');
            echo $this->Form->input('body');
        ?>
    </fieldset>
    <?= $this->Form->button('Enviar') ?>
    <?= $this->Form->end() ?>
</div>

<!--
<?php //$this->start('script'); ?>
<script>
    alert('javascript');
</script>
<?php //$this->end(); ?>
-->