<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionMenu;
use App\Models\Admin\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=Menu::getMenu();
        return view('admin.menu.index' , compact('menus'));
        //dd($menus);
      // $menus= Menu::orderBy('id')->get();
        //return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('admin.menu.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionMenu $request)
    {
       // $menu = Menu::create($request->all());
        //return view('admin.menu.crear');
        Menu::create($request->all());
      return redirect('admin/menu')->with('mensaje','Menu creado con exito');
       //dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $data = Menu::findOrfail($id);
        return view('admin.menu.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionMenu $request, $id)
    {
        //dd($id);
        Menu::findOrfail($id)->update($request->all());
        return redirect('admin/menu')->with('mensaje','Menu actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        Menu::destroy($id);
        return redirect('admin/menu')->with('mensaje', 'Menu eliminado con exito');
    }

    public function guardarOrden(Request $request)
    {
        if($request->ajax()){
            $menu = new Menu;
            $menu->guardarOrden($request->menu);
            return response()->json(['respuesta'=>'ok']);
        } else {
            abort(404);
        }
    }
}

