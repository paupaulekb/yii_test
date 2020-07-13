<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
/**
 * Инициализатор RBAC выполняется в консоли php yii my-rbac/init
 */
class MyRbacController extends Controller {

    public function actionInit() {echo "123";
        /*$auth = Yii::$app->authManager;
        
        $auth->removeAll(); //На всякий случай удаляем старые данные из БД...
        /*
        // Создадим роли админа и редактора новостей
        $admin = $auth->createRole('admin');
        $editor = $auth->createRole('editor');
        
        // запишем их в БД
        $auth->add($admin);
        $auth->add($editor);
        
        // Создаем разрешения. Например, просмотр админки viewAdminPage и редактирование новости updateNews
        $viewFormPhone = $auth->createPermission('viewFormPhone');
        $viewFormPhone->description = 'Просмотр телефонов';
        
        $updatePhones = $auth->createPermission('updatePhones');
        $updatePhones->description = 'Редактирование новости';
        
        // Запишем эти разрешения в БД
        $auth->add($viewFormPhone);
        $auth->add($updatePhones);
        
        // Теперь добавим наследования. Для роли editor мы добавим разрешение updateNews,
        // а для админа добавим наследование от роли editor и еще добавим собственное разрешение viewAdminPage
        
        // Роли «Редактор новостей» присваиваем разрешение «Редактирование новости»
        $auth->addChild($editor,$viewFormPhone);

        // админ наследует роль редактора новостей. Он же админ, должен уметь всё! :D
        $auth->addChild($admin, $editor);
        
        // Еще админ имеет собственное разрешение - «Просмотр админки»
        $auth->addChild($admin, $updatePhones);

        // Назначаем роль admin пользователю с ID 1
        $auth->assign($admin, 100);
        
        // Назначаем роль editor пользователю с ID 2
        $auth->assign($editor, 2);*/
    }
}