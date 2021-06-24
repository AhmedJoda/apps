<?php
return  [
    'items'=>[
        'main'  => [
            'title' =>  'الرئيسية',
            'icon'  =>  'icon-devices_other nav-icon',
            'url'   =>  'admin'
        ],
        'front' =>  [
            'title' =>  'زيارة الواجهة',
            'icon'  =>  'icon-package nav-icon',
            'url'   =>  '/'
        ],
        'settings' =>  [
            'title' =>  ' الاعدادات',
            'icon'  =>  'icon-book-open nav-icon',
            'permission'    =>  'settings.view',
            'subs'  =>  [
                [
                    'title' =>  ' الاعدادات العامة',
                    'url'   =>  'admin/settings',
                ],
                [
                    'title' =>  'اعدادت التواصل',
                    'url'   =>  'admin/social-settings',
                ],
                [
                    'title' =>  'اعدادات الواجهة',
                    'url'   =>  'admin/front-settings',
                ],
            ]
        ],
        'user_admins' =>  [
            'title' =>  ' الاعضاء',
            'icon'  =>  'icon-edit1 nav-icon',
            'subs'  =>  [
                [
                    'title' =>  'التحكم بالاعضاء',
                    'url'   =>  'admin/users',
                    'permission'    =>  'users.view'
                ],
                [
                    'title' =>  'اضافة عضو جديد',
                    'url'   =>  'admin/users/create',
                    'permission'    =>  'users.create'
                ],
                [
                    'title' =>  'التحكم بالمشرفين',
                    'url'   =>  'admin/admins',
                    'permission'    =>  'admins.view'
                ],
                [
                    'title' =>  'اضافة مشرف جديد',
                    'url'   =>  'admin/admins/create',
                    'permission'    =>  'admins.create'
                ],
            ]
        ],
        'pages' =>  [
            'title' =>  'الصفحات',
            'icon'  =>  'icon-edit1 nav-icon',
            'subs'  =>  [
                [
                    'title' =>  'من نحن',
                    'url'   =>  'admin/about-us',
                ],
                [
                    'title' =>  'شروط الاشتراك',
                    'url'   =>  'admin/conditions',
                ],
            ]
        ],
        'categories' =>  [
            'title' =>  'الأقسام',
            'icon'  =>  'icon-layers2 nav-icon',
            'permission'  =>  'categories.view',
            'subs'  =>  [
                [
                    'title' =>  'التحكم بالأقسام',
                    'url'   =>  'admin/categories',
                ],
                [
                    'title' =>  'اضافة قسم جديد',
                    'url'   =>  'admin/categories/create',
                    'permission'    =>  'categories.create',
                ],
            ]
        ],
        'cities' =>  [
            'title' =>  'المدن',
            'icon'  =>  'icon-layers2 nav-icon',
            'permission'  =>  'cities.view',
            'subs'  =>  [
                [
                    'title' =>  'التحكم بالمدن',
                    'url'   =>  'admin/cities',
                ],
                [
                    'title' =>  'اضافة مدينة جديدة',
                    'url'   =>  'admin/cities/create',
                    'permission'    =>  'cities.create',
                ],
            ]
        ],
        'posts' =>  [
            'title' =>  'المواضيع',
            'icon'  =>  'icon-layers2 nav-icon',
            'permission'  =>  'posts.view',
            'subs'  =>  [
                [
                    'title' =>  'التحكم بالمواضيع',
                    'url'   =>  'admin/posts',
                ],
            ]
        ],
        'contacts' =>  [
            'title' =>  'رسائل اتصل بنا',
            'icon'  =>  'icon-layers2 nav-icon',
            'permission'  =>  'contacts.view',
            'subs'  =>  [
                [
                    'title' =>  'عرض كل الرسائل',
                    'url'   =>  'admin/contacts',
                ],
            ]
        ],
    ]
];
