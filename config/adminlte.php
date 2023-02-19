<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Caupolicán',
    'title_prefix' => 'CFC | ',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>CAUPOLICAN</b>',
    'logo_img' => '/img/cfc-512x512.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-danger',
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
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => false,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-danger',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-danger',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => 'text-sm',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-danger elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-dark navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
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
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
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
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
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
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'text' => 'Dashboard',
            'url'  => 'home',
        ],
        [
            'text'    => 'Accesos',
            'icon' => 'fas fa-fw fa-lock',
            //'can'  => 'access',
            'submenu' => [
                [
                    'text' => 'Usuarios',
                    'route'  => 'access.user.index',
                    'icon' => 'fas fa-fw fa-user',
                  //  'can'  => 'access',
                ],
                [
                    'text' => 'Roles',
                    'route'  => 'access.role.index',
                    'icon' => 'fas fa-fw fa-user',
                //    'can'  => 'access',
                ],
                [
                    'text' => 'Permisos',
                    'route'  => 'access.permission.index',
                    'icon' => 'fas fa-fw fa-user',
                //    'can'  => 'access',
                ],
            ],
        ],
        [
            'text'    => 'CRM',
            'can'  => 'access',
            'icon' => '',
            'submenu' => [
                [
                    'text' => 'Contactos',
                    'icon' => '',
                    'route'  => 'crm.contact.index',
                    'can'  => '',
                ],
            ],
        ],
        [
            'text'    => 'Ventas',
            'can'  => 'access',
            'icon' => '',
            'submenu' => [
                [
                    'text' => 'Pintura',
                    'icon' => 'fas fa-fw fa-user',
                    'submenu' => [
                        [
                            'text' => 'Formula',
                            'route'  => 'sales.picture.formula.index',
                            'icon' => 'fas fa-fw fa-user',
                            'can'  => '',
                        ],
                    ],
                ],
                [
                    'text' => 'Concursos',
                    'route'  => 'sales.contest.index',
                    'icon' => 'fas fa-fw fa-user',
                    'can'  => '',
                ],
            ],
        ],
        [
            'text'    => 'Recursos Humanos',
            'can'  => 'access',
            'icon'    => '',
            'submenu' => [
                [
                    'text'  => 'Registro de permisos',
                    'icon'  => '',
                    'route' => 'worker.worker_permissions.create',
                ],
                [
                    'text'  => 'Registro de vacaciones',
                    'icon'  => '',
                    'route' => 'worker.worker_vacation.index',
                ],
                [
                    'text'  => 'Horarios',
                    'icon'  => '',
                    'route' => 'worker.worker_hours.index',
                ],
                [
                
                    'text'    => 'Configurar',
                    'icon'    => '',
                    'submenu' => [
                        [
                            'text'  => 'Trabajadores Listado',
                            'icon'  => '',
                            'route' => 'worker.worker.index',
                        ],
                        [
                            'text'  => 'Vendedores',
                            'icon'  => '',
                            'route' => 'worker.worker_seller.index',
                        ],
                        [
                            'text'  => 'Sueldos fijos',
                            'icon'  => '',
                            'route' => 'worker.worker_salary.index',
                        ],
                    ],
                ],
            ],
        ],
        [
            'text'    => 'Proveedores',
            'can'  => 'access',
            'icon'    => '',
            'submenu' => [
                [
                    'text'  => 'Listado',
                    'icon'    => '',
                    'route' => 'provider.provider.index',
                ],
                [
                    'text'  => 'Tipo',
                    'icon'    => '',
                    'route' => 'provider.provider_type.index',
                ],
                [
                    'text'  => 'Contacto',
                    'icon'    => '',
                    'route' => 'provider.provider_contact.index',
                ],
                [
                    'text'  => 'Reuniones',
                    'icon'    => '',
                    'route' => 'provider.provider_meeting.index',
                ],
            ],
        ],
        [
            'text'    => 'Sitio Web',
            'can'  => 'access',
            'icon'    => '',
            'submenu' => [
                [
                
                    'text'    => 'Configurar',
                    'icon'    => '',
                    'submenu' => [
                        [
                            'text'  => 'Menu Web',
                            'icon'    => '',
                            'route' => 'web.web_menu.index',
                        ],
                        [
                            'text'  => 'Ambientes',
                            'icon'    => '',
                            'route' => 'web.web_ambiance.index',
                        ],
                    ],
                ],
            ],
        ],
        [
            'text'    => 'Productos',
            'can'  => 'access',
            'icon'    => '',
            'submenu' => [
                [
                    'text'  => 'Productos',
                    'icon'    => '',
                    'route' => 'product.product.index',
                ],
                [
                    'text'  => 'Empaquetamiento',
                    'icon'    => '',
                    'route' => 'product.package.index',
                ],
                [
                
                    'text'    => 'Configurar',
                    'icon'    => '',
                    'submenu' => [
                        [
                            'text'  => 'Familia producto',
                            'icon'    => '',
                            'route' => 'product.family.index',
                        ],
                        [
                            'text'  => 'Marca producto',
                            'icon'    => '',
                            'route' => 'product.brand.index',
                        ],
                        [
                            'text'  => 'Unidades producto',
                            'icon'    => '',
                            'route' => 'product.unit.index',
                        ],
                    ],
                ],
            ],
        ],
        [
            'text'    => 'Abastecimiento',

            'icon'    => '',
            'submenu' => [
                [
                
                    'text'    => 'Nacional',
                    'icon'    => '',
                    'submenu' => [
                        [
                            'text'  => 'Guia Despacho',
                            'icon'    => '',
                            'route' => 'supplying.delivery.note.index',
                        ],
                    ],
                ],
            ],
        ],          
        [
            'text'    => 'Documentos',
            'can'  => 'access',
            'icon' => '',
            'submenu' => [
                [
                    'text' => 'Documentos',
                    'icon' => '',
                    'route'  => 'document.document.index',
                    'can'  => '',
                ],
                [
                    'text' => 'Archivos',
                    'icon' => '',
                    'route'  => 'document.file.index',
                    'can'  => '',
                ],
            ],
        ],

        [
            'text'    => 'Control',
            'can'  => 'access',
            'icon' => '',
            'submenu' => [
                [
                    'text' => 'Documentos Perdidos',
                    'icon' => '',
                    'route'  => 'control.invoice_lost.index',
                    'can'  => '',
                ],
                [
                    'text' => 'No conformes',
                    'icon' => '',
                    'route'  => 'control.not_conforming.index',
                    'can'  => '',
                ],
                [
                    'text' => 'Productos Pendientes',
                    'icon' => '',
                    'route'  => 'control.product_pendens.index',
                    'can'  => '',
                ],
            ],
        ],

        [
            'text'    => 'Configuración',
            'can'  => 'access',
            'icon'    => '',
            'submenu' => [
                [
                    'text'  => 'Tags',
                    'icon'    => '',
                    'route' => 'config.tags.index',
                ],
                [
                    'text'  => 'Areas Administrativas',
                    'icon'    => '',
                    'route' => 'config.administrative_area.index',
                ],
                [
                    'text'  => 'Areas Comerciales',
                    'icon'    => '',
                    'route' => 'config.commercial_area.index',
                ],
            ],
        ], 
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
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
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
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

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
