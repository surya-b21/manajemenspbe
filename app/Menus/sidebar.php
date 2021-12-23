<?php

return [
  [
    'gate' => 'administrator.account',
    'name' => 'Account',
    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    'route' => null,
    'isActive' => null,
    /**
     * You can use fontawesome or svg file, the svg file is viewable in the resources/assets/icons directory
     * Example to Custom SVG file 'icon' => 'somefolder.customsvgfile' --> resources/assets/icons/somefolder/customsvgfile.svg
     * Exampe for fontawesome 'icon' => 'fas fa-user',
     */
    'icon' => 'user-group',
    'id' => '',
    'gates' => [],
    'submenus' => [

      [
        'gate' => 'administrator.account.admin.index',
        'name' => 'Data User',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        /**
         * Declaration route Example
         * ['administrator.account.admin.show', ['uuid-uuid-uuid', 'foo' => 'bar']] --> https://domain.com/administrator/account/admin/uuid-uuid-uuid?foo=bar
         */
        'route' => ['administrator.account.admin.index', []],
        'isActive' => 'account/admin*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.account.admin.create',
            'title' => 'Create admin',
            'description' => 'User can create new admin'
          ],
          [
            'gate' => 'administrator.account.admin.update',
            'title' => 'Update admin',
            'description' => 'User can update admin'
          ],
          [
            'gate' => 'administrator.account.admin.destroy',
            'title' => 'Delete account',
            'description' => 'User can delete account'
          ]
        ],
      ],
      [
        'gate' => 'administrator.account.opd.index',
        'name' => 'Data OPD',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.account.opd.index', []],
        'isActive' => 'account/opd*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.account.opd.create',
            'title' => 'Create opd',
            'description' => 'User can create new opd'
          ],
          [
            'gate' => 'administrator.account.opd.update',
            'title' => 'Update opd',
            'description' => 'User can update opd'
          ],
          [
            'gate' => 'administrator.account.opd.destroy',
            'title' => 'Delete account',
            'description' => 'User can delete account'
          ]
        ],
      ]

    ]
  ],

  [
    'gate' => 'administrator.access',
    'name' => 'Access',
    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    'route' => null,
    'isActive' => null,
    'icon' => 'lock-open',
    'id' => '',
    'gates' => [],
    'submenus' => [

      [
        'gate' => 'administrator.access.role.index',
        'name' => 'Role',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.access.role.index', []],
        'isActive' => 'access/role*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.access.role.create',
            'title' => 'Create Role',
            'description' => 'User can create new role'
          ],
          [
            'gate' => 'administrator.access.role.update',
            'title' => 'Update Role',
            'description' => 'User can update role'
          ],
          [
            'gate' => 'administrator.access.role.destroy',
            'title' => 'Delete Role',
            'description' => 'User can delete role'
          ]
        ],
      ],

      [
        'gate' => 'administrator.access.permission.index',
        'name' => 'Permission',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.access.permission.index', []],
        'isActive' => 'access/permission*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.access.permission.show',
            'title' => 'Views detail Permission',
            'description' => 'User can view detail for all permission'
          ],
          [
            'gate' => 'administrator.access.permission.assign',
            'title' => 'Assign Permission',
            'description' => 'User can assign for all permission'
          ],

        ],
      ]
    ]
  ],

  [
    'gate' => 'administrator.kelola',
    'name' => 'Kelola',
    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
    'route' => null,
    'isActive' => null,
    'icon' => 'fas fa-tasks',
    'id' => '',
    'gates' => [],
    'submenus' => [

      [
        'gate' => 'administrator.kelola.kategori-umum.index',
        'name' => 'Kategori umum',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.kelola.kategori-umum.index', []],
        'isActive' => 'kelola/kategori-umum*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.kelola.kategori-umum.create',
            'title' => 'Create kategori-umum',
            'description' => 'User can create new kategori-umum'
          ],
          [
            'gate' => 'administrator.kelola.kategori-umum.update',
            'title' => 'Update kategori-umum',
            'description' => 'User can update kategori-umum'
          ],
          [
            'gate' => 'administrator.kelola.kategori-umum.destroy',
            'title' => 'Delete kategori-umum',
            'description' => 'User can delete kategori-umum'
          ]
        ],
      ],

      [
        'gate' => 'administrator.kelola.elemen-smart.index',
        'name' => 'Elemen smart',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.kelola.elemen-smart.index', []],
        'isActive' => 'kelola/elemen-smart*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.kelola.elemen-smart.create',
            'title' => 'Create elemen-smart',
            'description' => 'User can create new elemen-smart'
          ],
          [
            'gate' => 'administrator.kelola.elemen-smart.update',
            'title' => 'Update elemen-smart',
            'description' => 'User can update elemen-smart'
          ],
          [
            'gate' => 'administrator.kelola.elemen-smart.destroy',
            'title' => 'Delete elemen-smart',
            'description' => 'User can delete elemen-smart'
          ]
        ],
      ],

      [
        'gate' => 'administrator.kelola.dokumen.index',
        'name' => 'Dokumen',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.kelola.dokumen.index', []],
        'isActive' => 'kelola/dokumen*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.kelola.dokumen.create',
            'title' => 'Create dokumen',
            'description' => 'User can create new dokumen'
          ],
          [
            'gate' => 'administrator.kelola.dokumen.show',
            'title' => 'Show dokumen',
            'description' => 'User can show new dokumen'
          ],
          [
            'gate' => 'administrator.kelola.dokumen.update',
            'title' => 'Update dokumen',
            'description' => 'User can update dokumen'
          ],
          [
            'gate' => 'administrator.kelola.dokumen.destroy',
            'title' => 'Delete dokumen',
            'description' => 'User can delete dokumen'
          ]
        ],
      ],

      [
        'gate' => 'administrator.kelola.developer.index',
        'name' => 'Developer',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.kelola.developer.index', []],
        'isActive' => 'kelola/developer*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.kelola.developer.create',
            'title' => 'Create developer',
            'description' => 'User can create new developer'
          ],
          [
            'gate' => 'administrator.kelola.developer.show',
            'title' => 'Show developer',
            'description' => 'User can show developer data'
          ],
          [
            'gate' => 'administrator.kelola.developer.update',
            'title' => 'Update developer',
            'description' => 'User can update developer'
          ],
          [
            'gate' => 'administrator.kelola.developer.destroy',
            'title' => 'Delete developer',
            'description' => 'User can delete developer'
          ]
        ],
      ],

      [
        'gate' => 'administrator.kelola.inovasi.index',
        'name' => 'Inovasi',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.kelola.inovasi.index', []],
        'isActive' => 'kelola/inovasi*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.kelola.inovasi.create',
            'title' => 'Create inovasi',
            'description' => 'User can create new inovasi'
          ],
          [
            'gate' => 'administrator.kelola.inovasi.show',
            'title' => 'Show inovasi',
            'description' => 'User can show new inovasi'
          ],
          [
            'gate' => 'administrator.kelola.inovasi.update',
            'title' => 'Update inovasi',
            'description' => 'User can update inovasi'
          ],
          [
            'gate' => 'administrator.kelola.inovasi.destroy',
            'title' => 'Delete inovasi',
            'description' => 'User can delete inovasi'
          ]
        ],
      ],

      [
        'gate' => 'administrator.kelola.versi.index',
        'name' => 'Versi',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.kelola.versi.index', []],
        'isActive' => 'kelola/versi*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.kelola.versi.create',
            'title' => 'Create versi',
            'description' => 'User can create new versi'
          ],
          [
            'gate' => 'administrator.kelola.versi.show',
            'title' => 'Show inovasi',
            'description' => 'User can show new inovasi'
          ],
          [
            'gate' => 'administrator.kelola.versi.update',
            'title' => 'Update versi',
            'description' => 'User can update versi'
          ],
          [
            'gate' => 'administrator.kelola.versi.destroy',
            'title' => 'Delete versi',
            'description' => 'User can delete versi'
          ]
        ],
      ],

      [
        'gate' => 'administrator.kelola.kategori-forum.index',
        'name' => 'Kategori Forum',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.kelola.kategori-forum.index', []],
        'isActive' => 'kelola/kategori-forum*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.kelola.kategori-forum.create',
            'title' => 'Create kategori-forum',
            'description' => 'User can create new kategori-forum'
          ],
          [
            'gate' => 'administrator.kelola.kategori-forum.show',
            'title' => 'Show kategori-forum',
            'description' => 'User can show new kategori-forum'
          ],
          [
            'gate' => 'administrator.kelola.kategori-forum.update',
            'title' => 'Update kategori-forum',
            'description' => 'User can update kategori-forum'
          ],
          [
            'gate' => 'administrator.kelola.kategori-forum.destroy',
            'title' => 'Delete kategori-forum',
            'description' => 'User can delete kategori-forum'
          ]
        ],
      ],
      // topik forum
      [
        'gate' => 'administrator.kelola.topik-forum.index',
        'name' => 'Topik Forum',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        'route' => ['administrator.kelola.topik-forum.index', []],
        'isActive' => 'kelola/topik-forum*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.kelola.topik-forum.create',
            'title' => 'Create topik-forum',
            'description' => 'User can create new topik-forum'
          ],
          [
            'gate' => 'administrator.kelola.topik-forum.show',
            'title' => 'Show topik-forum',
            'description' => 'User can show new topik-forum'
          ],
          [
            'gate' => 'administrator.kelola.topik-forum.update',
            'title' => 'Update topik-forum',
            'description' => 'User can update topik-forum'
          ],
          [
            'gate' => 'administrator.kelola.topik-forum.destroy',
            'title' => 'Delete topik-forum',
            'description' => 'User can delete topik-forum'
          ]
        ],
      ],
    ]
  ],

  [
    'gate' => 'administrator.verifikasi',
    'name' => 'Verifikasi',
    'description' => 'Verifikasi data',
    'route' => null,
    'isActive' => null,
    'icon' => 'check-circle',
    'id' => '',
    'gates' => [],
    'submenus' => [
      [
        'gate' => 'administrator.verifikasi.inovasi.index',
        'name' => 'Inovasi',
        'description' => 'Daftar inovasi yang akan diverifikasi',
        'route' => ['administrator.verifikasi.inovasi.index', []],
        'isActive' => 'verifikasi/inovasi*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.verifikasi.inovasi.verified',
            'title' => 'Verifikasi Inovasi',
            'description' => 'Verifikasi Inovasi'
          ],
        ]
      ],

      [
        'gate' => 'administrator.verifikasi.versi.index',
        'name' => 'Versi',
        'description' => 'Daftar versi yang akan diverifikassi',
        'route' => ['administrator.verifikasi.versi.index', []],
        'isActive' => 'verifikasi/versi*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.verifikasi.versi.verified',
            'title' => 'Verifikasi Versi',
            'description' => 'Verifikasi Versi'
          ],
        ]
      ]
    ]
  ],

  [
    'gate' => 'administrator.system',
    'name' => 'System',
    'description' => 'System application control',
    'route' => null,
    'isActive' => null,
    'icon' => 'cog',
    'id' => '',
    'gates' => [],
    'submenus' => [
      [
        'gate' => 'administrator.system.activity.index',
        'name' => 'User Activity',
        'description' => 'List of User activity',
        'route' => ['administrator.system.activity.index', []],
        'isActive' => 'system/activity*',
        'id' => '',
        'gates' => [
          [
            'gate' => 'administrator.system.activity.delete',
            'title' => 'Delete',
            'description' => 'Delete log activity after 7 days'
          ],
        ]
      ],

      [
        'gate' => 'administrator.system.log.index',
        'name' => 'System Log',
        'description' => 'Display for Ladmin error log',
        'route' => ['administrator.system.log.index', []],
        'isActive' => 'system/log*',
        'id' => '',
        'gates' => []
      ]
    ]
  ],

];