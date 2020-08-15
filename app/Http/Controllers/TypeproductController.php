<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
class TypeproductController extends Controller
{
    public function list_type()
    {   
        $list_type = DB::table('typeproduct')->get();
        $manager_list = view('admin/typeproduct/typeproduct-list')->with('list_type',$list_type);
        return view('admin/layouts-admin/index')->with('admin/typeproduct/typeproduct-list',$manager_list);
    }
    public function add_type()
    {
        return view('admin.typeproduct.typeproduct-add');
    }
    
    public function save_type(Request $request)
    {
        // $data = array();
        // $data['Typeid'] = $request->txtTypeid;
        // $data['Typename'] = $request->txtTypename;
        // $data['Description'] = $request->txtTypeDescription;

        // DB::table('typeproduct')->insert($data);

        $Typeid = $request->input('txtTypeid');
            $checkTypeid = DB::table('typeproduct')->where('Typeid', $Typeid)->first();
            if ($checkTypeid) {
            return redirect()->back()->with('idMessage', 'ID đã có');
            }
            
        $Typename = $request->input('txtTypename');
            $checkTypename = DB::table('typeproduct')->where('Typename', $Typename)->first();
            if ($checkTypename) {
            return redirect()->back()->with('nameMessage', 'Tên Loại đã có');
            }
        $Description = $request->input('txtTypeDescription');

        DB::table('typeproduct')->insert([
            'Typeid' => $Typeid,
            'Typename' => $Typename,
            'Description' => $Description,
        ]);
        return Redirect::to('admin/typeproduct/typeproduct-list');
    }
 
    public function edit_type($Typeid)
    {
        $edit_type = DB::table('typeproduct')->where('Typeid',$Typeid)->get();
        $manager_list = view('admin/typeproduct/typeproduct-edit')->with('edit_type',$edit_type);
        return view('admin/layouts-admin/index')->with('admin/typeproduct/typeproduct-edit',$manager_list);
    }

    public function update_type(Request $request,$Typeid)
    {
        $data = array();
        $data['Typename'] = $request->txtTypename;
        $data['Description'] = $request->txtTypeDescription;
        
        DB::table('typeproduct')->where('Typeid',$Typeid)->update($data);
        // $Typename = $request->input('txtTypename');
        // $Description = $request->input('txtTypeDescription');
        
        // DB::table('typeproduct')->where('Typeid',$Typeid)->update([
        //     'Typename' => $Typename,
        //     'Description' => $Description,
        // ]);

        return Redirect::to('admin/typeproduct/typeproduct-list');
    }

    public function delete_type($Typeid)
    {
        DB::table('typeproduct')->where('Typeid',$Typeid)->delete();
        return Redirect::to('admin/typeproduct/typeproduct-list');
    }

    //END FUNCTION ADMIN PAGE
    public function show_type(Request $request, $Typeid)
    {
        $type = DB::table('typeproduct')->orderby('Typeid','desc')->get();
        $type_by_id = DB::table('product')->join('typeproduct','product.Typeid','=','typeproduct.Typeid')
        ->where('product.Typeid',$Typeid)->where('Status',1)->get();

        if($request->sort)
        {
            $sort = $request->sort;
            switch($sort)
            {
                case '1':
                    $type_by_id = DB::table('product')->join('typeproduct','product.Typeid','=','typeproduct.Typeid')
                    ->where('product.Typeid',$Typeid)->orderby('Price','desc')->get();
                    return view('frontend/Hien_Thi_Theo_Danh_Muc/showtype')->with('type',$type)->with('type_by_id',$type_by_id);
                break;

                case '2':
                    $type_by_id = DB::table('product')->join('typeproduct','product.Typeid','=','typeproduct.Typeid')
                    ->where('product.Typeid',$Typeid)->orderby('Price','asc')->get();
                    return view('frontend/Hien_Thi_Theo_Danh_Muc/showtype')->with('type',$type)->with('type_by_id',$type_by_id);
                break;

                default:
                $type = DB::table('typeproduct')->orderby('Typeid','desc')->get();
                $type_by_id = DB::table('product')->join('typeproduct','product.Typeid','=','typeproduct.Typeid')
                ->where('product.Typeid',$Typeid)->get();
                    return view('frontend/Hien_Thi_Theo_Danh_Muc/showtype')->with('type',$type)->with('type_by_id',$type_by_id);
            }
        }
        return view('frontend/Hien_Thi_Theo_Danh_Muc/showtype')->with('type',$type)->with('type_by_id',$type_by_id);
    }
}
