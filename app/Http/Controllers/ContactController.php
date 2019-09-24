<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ContactController extends Controller
{
    public function AllContact()
    {

        // database connect
        $contact = DB::table('contacts')->get();

        // 
        return view('contact')->with('parson', $contact);
    }

    public function InsertData()
    {
        return view('insertdata');
    }

    public function DataAdded(Request $request)
    {
        $data = array();

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['description'] = $request->description;

        $ins = DB::table('contacts')->insert($data);

        return Redirect()->route('all.contacts');
    }

    public function Delete($id)
    {
        $dlt = DB::table('contacts')->where('id', $id)->delete();
        return Redirect()->route('all.contacts');
    }

    public function Edit($id)
    {
        $edit = DB::table('contacts')->where('id', $id)->first();
        return view('editcontacts', compact('edit'));
    }

    public function Update(Request $request, $id)
    {
        $data = array();

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['description'] = $request->description;

        $upd = DB::table('contacts')->where('id', $id)->update($data);
        return Redirect()->route('all.contacts');
    }

    public function View($id)
    {
        $view = DB::table('contacts')->where('id', $id)->first();
        return view('view', compact('view'));
    }
}
