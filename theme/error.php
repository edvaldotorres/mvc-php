<?php $v->layout("_theme"); ?>

<div class="error">
    <h2>Oooooops erro <?= $error; ?>!</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda!</p>
</div>

<?php $v->start("siddebar"); ?>

<a href="<?= url(); ?>" title="Voltar ao inicio!">Voltar</a>

<?php $v->end(); ?>