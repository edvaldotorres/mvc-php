<?php $v->layout("_theme"); ?>

<div class="users">
    <?php if ($users) :
        foreach ($users as $user) :
    ?>
            <article class="users_user">
                <h3><?= $user->first_name, " ", $user->last_name; ?></h3>
            </article>
        <?php endforeach;
    else : ?>
        <h4>Não existe usuários cadastrados</h4>
        <p>Teste</p>
    <?php endif; ?>
</div>