<?php

return [

    'next'                  => 'Далее',
    'refresh'               => 'Обновить',

    'steps' => [
        'requirements'      => 'Пожалуйста, попросите вашего хостинг-провайдера исправить ошибки!',
        'language'          => 'Шаг 1/3: Выбор языка',
        'database'          => 'Шаг 2/3: Настройка базы данных',
        'settings'          => 'Шаг 3/3: Компании и данные Администратора',
    ],

    'language' => [
        'select'            => 'Выбрать язык',
    ],

    'requirements' => [
        'enabled'           => ':feature должно быть включено!',
        'disabled'          => ':feature должно быть отключено!',
        'extension'         => 'Расширение :extension должно быть установлено и загружено!',
        'directory'         => ':directory директория должна быть доступна для записи!',
    ],

    'database' => [
        'hostname'          => 'Имя хоста',
        'username'          => 'Имя пользователя',
        'password'          => 'Пароль',
        'name'              => 'База данных',
    ],

    'settings' => [
        'company_name'      => 'Название компании',
        'company_email'     => 'E-mail компании',
        'admin_email'       => 'E-mail Администратора',
        'admin_password'    => 'Пароль Администратора',
    ],

    'error' => [
        'connection'        => 'Ошибка: не удалось подключиться к базе данных! Пожалуйста, убедитесь, что данные являются правильными.',
    ],

];
