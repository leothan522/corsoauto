<?php
//Funciones Personalizadas para el Proyecto
use Illuminate\Support\Facades\Auth;

function comprobarPermisos($routeName = null)
{

    if (leerJson(Auth::user()->permisos, $routeName) || Auth::user()->role == 1 || Auth::user()->role == 100) {
        return true;
    } else {
        return false;
    }

}

function allPermisos()
{
    $permisos = [
        'Bienes' => [
            'route' => 'bienes.index',
            'submenu' => [
                'Crear Bienes' => 'bienes.create',
                'Editar Bienes' => 'bienes.edit',
                'Borrar Bienes' => 'bienes.destroy'
            ]
        ],
        'Tipos' => [
            'route' => 'tipos.index',
            'submenu' => [
                'Crear Tipos' => 'tipos.create',
                'Editar Tipos' => 'tipos.edit',
                'Borrar Tipos' => 'tipos.destroy'

            ]
        ],
        'Marcas' => [
            'route' => 'marcas.index',
            'submenu' => [
                'Crear Marcas' => 'marcas.create',
                'Editar Marcas' => 'marcas.edit',
                'Borrar Marcas' => 'marcas.destroy'

            ]
        ],
        'Modelos' => [
            'route' => 'modelos.index',
            'submenu' => [
                'Crear Modelos' => 'modelos.create',
                'Editar Modelos' => 'modelos.edit',
                'Borrar Modelos' => 'modelos.destroy'

            ]
        ],
        'Colores' => [
            'route' => 'colores.index',
            'submenu' => [
                'Crear Colores' => 'colores.create',
                'Editar Colores' => 'colores.edit',
                'Borrar Colores' => 'colores.destroy'

            ]
        ],
        'Condiciones' => [
            'route' => 'condiciones.index',
            'submenu' => [
                'Crear Condiciones' => 'condiciones.create',
                'Editar Condiciones' => 'condiciones.edit',
                'Borrar Condiciones' => 'condiciones.destroy'

            ]
        ],
        'Sedes' => [
            'route' => 'sedes.index',
            'submenu' => [
                'Crear Sedes' => 'sedes.create',
                'Editar Sedes' => 'sedes.edit',
                'Borrar Sedes' => 'sedes.destroy'

            ]
        ],
        'Personal' => [
            'route' => 'personal.index',
            'submenu' => [
                'Crear Personal' => 'personal.create',
                'Editar Personal' => 'personal.edit',
                'Borrar Personal' => 'personal.destroy'

            ]
        ],
        'Cargos' => [
            'route' => 'cargos.index',
            'submenu' => [
                'Crear Cargos' => 'cargos.create',
                'Editar Cargos' => 'cargos.edit',
                'Borrar Cargos' => 'cargos.destroy'

            ]
        ],
        'Usuarios' => [
            'route' => 'usuarios.index',
            'submenu' => [
                'Crear Usuarios' => 'usuarios.create',
                'Editar Usuarios' => 'usuarios.edit',
                'Suspender Usuarios' => 'usuarios.estatus',
                'Reestablecer Contraseña' => 'usuarios.password',
                'Descargar Excel' => 'usuarios.excel',
                'Eliminar Usuarios' => 'usuarios.destroy',
            ]
        ],
    ];
    return $permisos;
}
