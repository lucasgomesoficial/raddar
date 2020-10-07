<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'Raddar Consultoria',
    'title_prefix' => '',
    'title_postfix' => '| Área do Cliente',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<b>Consul</b>toria',
    'logo_img' => 'public/vendor/adminlte/dist/img/logo-power-128.png',
    'logo_img_class' => 'brand-image',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => '',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#661-authentication-views-classes
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#662-admin-panel-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#67-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#68-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#69-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'principal',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#610-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'public/css/app.css',
    'laravel_mix_js_path' => 'public/js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#611-menu
    |
    */

    'menu' => [
        [
            'text' => 'pesquise',
            'search' => false,
            'topnav' => true,
        ],
        [
            'text'        => 'Principal',
            'url'         => 'principal',
            'icon'        => 'fas fa-home',
            // 'label'       => 4,
            'label_color' => 'success',
        ],
        [
            'text'        => 'Administrativo',
            'url'         => 'setup',
            'icon'        => 'fas fa-cog',
            // 'label'       => 4,
            'label_color' => 'success',
            'can'  => 'manage-Administrativo',
        ],
        [
            'text' => 'blog',
            'url'  => '#',
            'can'  => 'manage-blog', //permissão: niveis de acesso
        ],
        // ['header' => 'PROFILE'],
        [
            'text' => 'Perfil',
            'url'  => 'profile/perfil',
            'icon' => 'fas fa-fw fa-user',
            'can'  => 'manage-blog',
        ],
        // [
        //     'text' => 'change_password',
        //     'url'  => 'admin/settings',
        //     'icon' => 'fas fa-fw fa-lock',
        // ],
        [
            'text' => 'Cadastros',
            'url'  => '#',
            'icon' => 'fas fa-users-cog',
            'can'  => 'manage-Cadastros',
        ],
        ['header' => 'DASHBOARD'],
        [
            'text'    => 'Planos',
            'icon'    => 'fas fa-map',
            'submenu' => [
                [
                    'text' => 'Planos de Ação',
                    'url'  => 'planos/planos-de-acao',
                ],
            ],
            // 'can'  => 'manage-Resultados',
        ],
        [
            'text'    => 'Resultados',
            'icon'    => 'fas fa-poll-h',
            'submenu' => [
                [
                    'text' => 'Gerencial do Grupo',
                    'url'  => 'resultados/gerencial-grupo',
                ],
                [
                    'text' => 'Previsto x Realizado',
                    'url'  => '#',
                    'can'  => 'manage-Previsto x Realizado',
                ],
            ],
            // 'can'  => 'manage-Resultados',
        ],
        [
            'text'    => 'Comercial Varejo',
            'icon'    => 'fas fa-dumpster-fire',
            'submenu' => [
                [
                    'text' => 'Meta x Realizado',
                    'url'  => 'comercial-varejo/meta-realizado',
                ],
                [
                    'text' => 'Indicadores Comerciais',
                    'url'  => 'comercial-varejo/indicadores-comerciais',
                    // 'can'  => 'manage-Indicadores Comerciais',
                ],
            ],
            // 'can'  => 'manage-Comercial - Varejo',
        ],
        [
            'text'    => 'Comercial VD',
            'icon'    => 'fas fa-briefcase',
            'submenu' => [
                [
                    'text' => 'Indicadores VD',
                    'url'  => 'comercial-vd/indicadores-vd',
                ],
            ],
            // 'can'  => 'manage-Comercial - VD',
        ],
        [
            'text'    => 'Estoque',
            'icon'    => 'fas fa-boxes',
            'submenu' => [
                [
                    'text' => 'Mapa do Estoque',
                    'url'  => 'estoque/mapa-estoque',
                ],
                [
                    'text' => 'Sugestão de Compra',
                    'url'  => '#',
                    'can'  => 'manage-Sugestão de Compra',
                ],
            ],
            // 'can'  => 'manage-Estoque',
        ],
        [
            'text'    => 'Fluxo de Caixa',
            'icon'    => 'fas fa-money-bill-alt',
            'submenu' => [
                [
                    'text' => 'Caixa Diário',
                    'url'  => '#',
                ],
                [
                    'text' => 'Caixa Mensal',
                    'url'  => '#',
                ],
                [
                    'text' => 'Previsto x Realizado',
                    'url'  => '#',
                ],
            ],
            'can'  => 'manage-Fluxo de Caixa',
        ],
        ['header' => ''],
        [
            'text'        => 'Agenda',
            'url'         => 'agenda',
            'icon'        => 'fas fa-calendar-alt',
            // 'label'       => 4,
            'label_color' => 'success',
        ],
        [
            'text'        => 'Videos',
            'url'         => 'videos',
            'icon'        => 'fas fa-video',
            // 'label'       => 4,
            'label_color' => 'success',
            'can'  => 'manage-videos',
        ],
        [
            'text'        => 'Trello',
            'url'         => 'trello',
            'icon'        => 'fas fa-project-diagram',
            // 'label'       => 4,
            'label_color' => 'success',
        ],
        // ['header' => 'ALERTAS'],
        // [
        //     'text'       => 'Cuidados',
        //     'icon_color' => 'red',
        //     'url'        => '#',
        // ],
        // [
        //     'text'       => 'Atenção',
        //     'icon_color' => 'yellow',
        //     'url'        => '#',
        // ],
        // [
        //     'text'       => 'Informações',
        //     'icon_color' => 'cyan',
        //     'url'        => '#',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#612-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#613-plugins
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
