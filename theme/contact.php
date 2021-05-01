<?php $v->layout("_theme"); ?>

<div class="contact">
    <h2>Fale Conosco!</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, autem?</p>

    <form action="<?= url("contact"); ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Seu Nome:" />
        <input type="email" name="email" placeholder="Seu E-mail:" />
        <textarea name="message" placeholder="Mensagem:" rows="3"></textarea>
        <button>Enviar Mensagem!</button>
    </form>
</div>

<?php $v->start("scripts"); ?>

<script>
    $(function() {
        $("button").after('<button type="reset">Limpar</button>');
    });
</script>

<?php $v->end(); ?>