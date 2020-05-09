<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('permiso','PermisoController@index');
//Route::post('permiso','PermisoController@store');
Route::get('/','InicioController@index')->name('inicio');
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');
Route::post('ajax-sesion', 'AjaxController@setSession')->name('ajax')->middleware('auth');
//Route::group(['prefix'=>'admin','namespace'=>'Admin', 'middleware' => ['auth', 'superadmin']]
Route::group(['prefix'=>'admin','namespace'=>'Admin', 'middleware' => 'auth'], function(){
        Route::get('' , 'AdminController@index');
        //RUTAS DE USUARIOS
        Route::get('usuario','UsuarioController@index')->name('usuario');
        Route::get('usuario/crear','UsuarioController@crear')->name('crear_usuario');
        Route::post('usuario/guardar','UsuarioController@guardar')->name('guardar_usuario');
        Route::get('usuario/{id}/editar', 'UsuarioController@editar')->name('editar_usuario');
        Route::put('usuario/{id}', 'UsuarioController@actualizar')->name('actualizar_usuario');
        Route::delete('usuario/{id}/eliminar', 'UsuarioController@eliminar')->name('eliminar_usuario');
        //RUTAS DE PERMISOS

        Route::get('permiso','PermisoController@index')->name('permiso');
        Route::get('permiso/crear','PermisoController@crear')->name('crear_permiso');
        Route::post('permiso/guardar','PermisoController@guardar')->name('guardar_permiso');
        Route::get('permiso/{id}/editar', 'PermisoController@editar')->name('editar_permiso');
        Route::put('permiso/{id}', 'PermisoController@actualizar')->name('actualizar_permiso');
        Route::delete('permiso/{id}/eliminar', 'PermisoController@eliminar')->name('eliminar_permiso');

        //RUTAS DE MENU
        Route::get('menu','MenuController@index')->name('menu');
        Route::get('menu/crear','MenuController@crear')->name('crear_menu');
        Route::post('menu/guardar','MenuController@guardar')->name('guardar_menu');
        Route::post('menu/guardar-orden','MenuController@guardarOrden')->name('guardar_orden');
        Route::get('menu/{id}/editar', 'MenuController@editar')->name('editar_menu');
        Route::put('menu/{id}', 'MenuController@actualizar')->name('actualizar_menu');
        Route::get('menu/{id}/eliminar', 'MenuController@eliminar')->name('eliminar_menu');
        Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');

        /*RUTAS ROL*/
        Route::get('rol', 'RolController@index')->name('rol');
        Route::get('rol/crear', 'RolController@crear')->name('crear_rol');
        Route::post('rol', 'RolController@guardar')->name('guardar_rol');
        Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
        Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
        Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');

        /**Rutas de Menu-Rol */

        Route::get('menu-rol','MenuRolController@index')->name('menu_rol');
        Route::post('menu-rol','MenuController@guardar')->name('guardar_menu_rol');

        /*RUTAS PERMISO_ROL*/
        Route::get('permiso-rol', 'PermisoRolController@index')->name('permiso_rol');
        Route::post('permiso-rol', 'PermisoRolController@guardar')->name('guardar_permiso_rol');

  });

  //RUTAS DE LIBROS
   Route::get('libro', 'LibroController@index')->name('libro')->middleware('auth');
    Route::get('libro/crear', 'LibroController@crear')->name('crear_libro')->middleware('auth');
    Route::post('libro', 'LibroController@guardar')->name('guardar_libro')->middleware('auth');
    Route::post('libro/{libro}', 'LibroController@ver')->name('ver_libro')->middleware('auth');
    Route::get('libro/{id}/editar', 'LibroController@editar')->name('editar_libro')->middleware('auth');
    Route::put('libro/{id}', 'LibroController@actualizar')->name('actualizar_libro')->middleware('auth');
    Route::delete('libro/{id}', 'LibroController@eliminar')->name('eliminar_libro')->middleware('auth');


