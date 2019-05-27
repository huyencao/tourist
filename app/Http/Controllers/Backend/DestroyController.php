<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class DestroyController extends Controller
{
    public function delete($id)
    {
        $delete = Menu::findOrFail($id);
        $delete->delete();

        return redirect()->route('menu.index');
    }
}
