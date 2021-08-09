<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Productcategory;
use Illuminate\Support\Str;

class ProductcategoryController extends Controller
{
    public function productcategory(){
		$productcategories = Productcategory::all();         
		return view('backend.products.productcategory', compact('productcategories'));
	}
    public function createpcategory(){
		return view('backend.products.addproductcategory');
	}
	
	/*public function addproductcategory(Request $request)
    {
		$this->validate($request,[
			'pcategoryname'=>'required'
		]);
		$data['pcategoryname']  = $request->input('pcategoryname');
		$data['pcategoryslug']  = $request->input('pcategoryname');
		$data['pcategorydescription']  = $request->input('pcategoryname');
        $data['createddate']  = time();
        DB::table('productcategories')->insert($data);
		return view('backend.products.productcategory');
    }*/
	public function addproductcategory(Request $request)
    {
		$this->validate($request,[
			'pcategoryname'=>'required'
		]);
		
		$data['pcategoryname']  = $request->input('pcategoryname');
		$data['pcategoryslug'] = Str::slug($request->input('pcategoryname'), '-');
		$data['pcategorydescription']  = $request->input('pcategoryname');
		$data['createddate']  = time();
        DB::table('productcategories')->insert($data);
		//return redirect('product-category');
		//return back()->with('message', 'Product Category save successfully');
		Session::flash('message', 'Product Category saved successfully');
		return back();
	}
	public function pcatinactive ($pcategoryid){
		$productcategories=Productcategory::where('pcategoryid', '=', $pcategoryid)->first();
		//$productcategories=Productcategory::where('pcategoryid', $pcategoryid)->get();
		//$productcategories=Productcategory::find($pcategoryid);
		$productcategories->pcategorystatus=0;
		//Productcategory::where('pcategoryid', $pcategoryid)->update($request->all());
$info = array('pcategorystatus' =>0);
DB::table('productcategories')->where('pcategoryid', $pcategoryid)->update($info);
		//$productcategories->save();
Session::flash('message', 'Product Category inactived successfully');
return back();
	}
	public function pcatactive ($pcategoryid){
$info = array('pcategorystatus' =>1);
DB::table('productcategories')->where('pcategoryid', $pcategoryid)->update($info);
Session::flash('message', 'Product Category actived successfully');
return back();
	}
	
	
	public function deletepcat ($pcategoryid){
		$info = array('pcategorystatus' =>1);
		DB::table('productcategories')->where('pcategoryid',$pcategoryid)->delete();
		Session::flash('message', 'Product Category deleted successfully');
		return back();
	}
	public function editpcat ($pcategoryid){
		$productcategory=DB::Table('productcategories')->where('pcategoryid',$pcategoryid)->get(); 
		//return $productcategory; die();
		return view('backend.products.editpcategory', compact('productcategory'));
	}
	
	
	public function updatepcategory(Request $request)
    {
		$this->validate($request,[
			'pcategoryname'=>'required'
		]);
		//return $request; die();
		$pcategoryname  = $request->input('pcategoryname');
		$pcategoryslug = Str::slug($request->input('pcategoryname'), '-');
		$pcategoryid  = $request->input('pcategoryid');
$info = array('pcategoryname' =>$pcategoryname, 'pcategoryslug' =>$pcategoryslug);
DB::table('productcategories')->where('pcategoryid', $pcategoryid)->update($info);
		
		Session::flash('message', 'Product Category updated successfully');
		return redirect('product-category');
	}
	
}
