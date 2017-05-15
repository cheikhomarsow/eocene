<?php

namespace Controller;

use Model\UserManager;
use Model\ArticleManager;


class DefaultController extends BaseController
{
    public function homeAction()
    {



        echo $this->renderView(        'home.html.twig');
    }



    public function adminAction()
    {
        $manager = UserManager::getInstance();
        if (!empty($_SESSION['user_id']) && $_SESSION['user_username'] == 'cosinus94'){

            $users = $manager->getAllUsers();
            echo $this->renderView('admin.html.twig',['users'=>$users]);
        }
        else
            $this->redirect('login');
    }

    public function admin_responsableAction()
    {
        if (!empty($_SESSION['user_id']) && $_SESSION['user_username'] == 'cosinus94') {


            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                header('Location:?action=admin_responsable');
            }
            echo $this->renderView('admin_responsable.html.twig');
        }
        else
            $this->redirect('login');
    }

    public function admin_contributeurAction()
    {
        if (!empty($_SESSION['user_id']) && $_SESSION['user_username'] == 'cosinus94') {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                header('Location:?action=admin_contributeur');
            }
            echo $this->renderView('admin_contributeur.html.twig');
        }else
            $this->redirect('login');
    }


    public function errorAction()
    {
        echo $this->renderView('error.html.twig');
    }
}
