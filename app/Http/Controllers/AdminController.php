<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Project;

class AdminController extends Controller
{

    public function adminDashboard()
    {
        if(Auth::check() && Auth::user()->usertype == 1)
        {
            return view('admin.home');
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function adminUnit()
    {
        $data = Unit::all();
        return view('admin.admin-unit', compact('data'));
    }   
    public function addUnitPage()
    {
        return view('admin.add-unit');
    }
    public function addUnit(Request $request)
    {
        $data = new unit;
        $data->proyek = $request->proyek;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->photo = $imagename;

        $data->save();
        return redirect('admin-unit')->with('message','Unit baru berhasil ditambahkan');
    }
    public function deleteUnit($id)
    {
        $data = unit::find($id);
        $data->delete();
        return redirect()->back()->with('message','Unit berhasil dihapus');
    }
    public function updateUnit(Request $request, $id)
    {
        $data = Unit::find($id);
        $data->proyek = $request->proyek;

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images',$imagename);
            $data->photo = $imagename;
        }

        $data->save();
        return redirect('admin-unit')->with('message','Unit baru berhasil ditambahkan');
    }
    public function updateUnitPage($id)
    {
        $data = unit::find($id);
        return view('admin.update-unit', compact('data'));
    }


    public function adminProject()
    {
        $data = Project::all();
        return view('admin.admin-project', compact('data'));
    }   
    public function addProjectPage()
    {
        return view('admin.add-project');
    }
    public function addProject(Request $request)
    {
        $data = new Project;
        $data->nama = $request->nama;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $data->gambar = $imagename;

        $data->save();
        return redirect('admin-project')->with('message','Proyek baru berhasil diedit');
    }
    public function deleteProject($id)
    {
        $data = Project::find($id);
        $data->delete();
        return redirect()->back()->with('message','Project berhasil dihapus');
    }
    public function updateProject(Request $request, $id)
    {
        $data = Project::find($id);
        $data->nama = $request->nama;

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('images',$imagename);
            $data->gambar = $imagename;
        }

        $data->save();
        return redirect('admin-project')->with('message','Project baru berhasil diedit');
    }
    public function updateProjectPage($id)
    {
        $data = Project::find($id);
        return view('admin.update-project', compact('data'));
    }
}
