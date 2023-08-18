<?php $v->layout('theme/_theme'); ?>

<div class="main_content_box">
    <div class="login">
        <form class="form" action="<?php echo $router->route('auth.login'); ?>" method="post" autocomplete="off">
            <div class="form_social">
                <a href="<?php echo $router->route('auth.facebook'); ?>" class="btn btn-facebook">Facebook Login</a>
                <a href="<?php echo $router->route('auth.google'); ?>" class="btn btn-google">Google Login</a>
            </div>

            <div class="login_form_callback">
                <?php echo flash(); ?>
            </div>

            <label>
                <span class="field">E-mail:</span>
                <input value="" type="email" name="email" placeholder="Informe seu e-mail:"/>
            </label>
            <label>
                <span class="field">Senha:</span>
                <input autocomplete="" type="password" name="passwd" placeholder="Informe sua senha:"/>
            </label>

            <div class="form_actions">
                <button class="btn btn-green">Logar-se</button>
                <a href="<?php echo $router->route('web.forget'); ?>" title="Recuperar Senha">Recuperar Senha</a>
            </div>
        </form>

        <div class="form_register_action">
            <p>Ainda não tem conta?</p>
            <a href="<?php echo $router->route('web.register'); ?>" class="btn btn-blue">Cadastre-se Aqui</a>
        </div>
    </div>
</div>

<?php $v->start('scripts'); ?>
<script src="<?php echo asset('/js/form.js'); ?>"></script>
<?php $v->end(); ?>
