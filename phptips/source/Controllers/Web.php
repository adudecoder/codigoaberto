<?php

namespace Source\Controllers;

use Source\Models\User;

/**
 * Class Web.
 */
class Web extends Controller
{
    /**
     * Web constructor.
     */
    public function __construct($router)
    {
        parent::__construct($router);

        if (!empty($_SESSION['user'])) {
            $this->router->redirect('app.home');
        }
    }

    public function login(): void
    {
        $head = $this->seo->optimize(
            'Faça login para continuar | '.site('name'),
            site('desc'),
            $this->router->route('web.login'),
            routerImage('Login')
        )->render();

        echo $this->view->render('theme/login', [
            'head' => $head,
        ]);
    }

    public function register(): void
    {
        $head = $this->seo->optimize(
            'Crie sua conta no '.site('name'),
            site('desc'),
            $this->router->route(name: 'web.register'),
            routerImage('Register')
        )->render();

        $form_user = new \stdClass();
        $form_user->first_name = null;
        $form_user->last_name = null;
        $form_user->email = null;

        echo $this->view->render('theme/register', [
            'head' => $head,
            'user' => $form_user,
        ]);
    }

    public function forget(): void
    {
        $head = $this->seo->optimize(
            'Recupera sua senha |'.site('name'),
            site('desc'),
            $this->router->route('web.forget'),
            routerImage('Login')
        )->render();

        echo $this->view->render('theme/forget', [
            'head' => $head,
        ]);
    }

    public function reset($data): void
    {
        var_dump($data);
        exit;

        if (empty($_SESSION['forget'])) {
            flash('info', 'Informe seu E-MAIL para recuperar a senha!');
            $this->router->redirect('web.forget');
        }

        $errForget = 'Não foi possivel recuperar, tente novamente!';

        $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
        $forget = filter_var($data['forget'], FILTER_DEFAULT);
        if (!$email || !$forget) {
            flash('error', $errForget);
            $this->router->redirect('web.forget');
        }

        $user = (new User())->find('email = :e AND forget = :f', "e={$email}&f={$forget}")->fetch();
        if (!$user) {
            flash('error', $errForget);
            $this->router->redirect('web.forget');
        }

        $head = $this->seo->optimize(
            'Crie sua nova senha |'.site('name'),
            site('desc'),
            $this->router->route('web.reset'),
            routerImage('Reset')
        )->render();

        echo $this->view->render('theme/reset', [
            'head' => $head,
        ]);
    }

    public function error($data): void
    {
        $error = filter_var($data['errcode'], FILTER_VALIDATE_INT);

        $head = $this->seo->optimize(
            "ooops {$error} |".site('name'),
            site('desc'),
            $this->router->route('web.error', ['errcode' => $error]),
            routerImage($error)
        )->render();

        echo $this->view->render('theme/error', [
            'head' => $head,
            'error' => $error,
        ]);
    }
}
