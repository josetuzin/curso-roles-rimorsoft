<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission; // saco de la carpeta vendor

class PermissionsTableSeeder extends Seeder
{
    
    public function run()
    {
        // permisos sobre usuarios
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index', //debe coincidir con una ruta
            'description' => 'Lista y navega los usuarios del sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de usuario',
            'slug' => 'users.show', //debe coincidir con una ruta
            'description' => 'Ver detalle completo de usuario',
        ]);
        
        Permission::create([
            'name' => 'Edición de usuarios',
            'slug' => 'users.edit', //debe coincidir con una ruta
            'description' => 'Editar los usuarios del sistema',
        ]);

        Permission::create([
            'name' => 'Borrar usuarios',
            'slug' => 'users.destroy', //debe coincidir con una ruta
            'description' => 'Eliminar los usuarios del sistema',
        ]);


        // permisos sobre roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index', //debe coincidir con una ruta
            'description' => 'Lista y navega los roles del sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de rol',
            'slug' => 'roles.show', //debe coincidir con una ruta
            'description' => 'Ver detalle completo de rol',
        ]);
        
        Permission::create([
            'name' => 'Creación de roles',
            'slug' => 'roles.create', //debe coincidir con una ruta
            'description' => 'Editar los roles del sistema',
        ]);    

        Permission::create([
            'name' => 'Edición de roles',
            'slug' => 'roles.edit', //debe coincidir con una ruta
            'description' => 'Editar los roles del sistema',
        ]);

        Permission::create([
            'name' => 'Borrar roles',
            'slug' => 'roles.destroy', //debe coincidir con una ruta
            'description' => 'Eliminar los roles del sistema',
        ]);


        // permisos sobre productos
        Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'products.index', //debe coincidir con una ruta
            'description' => 'Lista y navega los productos del sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de producto',
            'slug' => 'products.show', //debe coincidir con una ruta
            'description' => 'Ver detalle completo de producto',
        ]);
        
        Permission::create([
            'name' => 'Creación de productos',
            'slug' => 'products.create', //debe coincidir con una ruta
            'description' => 'Editar los productos del sistema',
        ]);    

        Permission::create([
            'name' => 'Edición de productos',
            'slug' => 'products.edit', //debe coincidir con una ruta
            'description' => 'Editar los productos del sistema',
        ]);

        Permission::create([
            'name' => 'Borrar productos',
            'slug' => 'products.destroy', //debe coincidir con una ruta
            'description' => 'Eliminar los productos del sistema',
        ]);




    }
}
