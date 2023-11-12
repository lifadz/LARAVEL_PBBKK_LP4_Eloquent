<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //function ini berisikan function index yang berfungsi untuk mengambil data customer menggunakan method "all" dan mengembalikan tampilann
    //DataCustomer yang berada di dalam folder Admin dan meneruskan data customer yang diambil ke tampilan menggunakan method "compact"
    public function index(Request $request){ 

        if($request->has('search')){
            $data = Customer::where('nama','LIKE','%'.$request->search.'%')->paginate(5);
        }else{
            $data = Customer::paginate(5); 
            
        }
        return view('Admin.DataCustomer',compact('data'));
        
    }

    // Function ini untuk mengembalikan view "TambahData" atau menampilkan isi kode dari "TambahData"
    public function tambahdata(){
        return view('Admin.TambahData');
    }

    //Function insertdata yang menerima objek request sebagai parameter.Hal itu akan membuat data customer baru di dalam database dengan menggunakan data dari request dan akan diarahkan pengguna ke route customer dengan pesan sukses
    public function insertdata(Request $request){
        $data = Customer::create($request->except('foto'));
        
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotocustomer/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            
        }else{
            $data->foto = 'blank.png';
        }
        $data->save();
        return redirect()->route('customer')->with('success','Data Berhasil Ditambahkan');
    }
    
    //Function ini  akan mengambil data customer yang dipanggil menggunakan method "find" pada class customer dengan id yang diberikan. Lalu,akan menampilkan "TampilData" dan meneruskan data customer yang diambil ke view
    public function tampilkandata($id){
        $data = Customer::find($id);
        //dd($data);

        return view('Admin.TampilData',compact('data'));
    }


    //Function ini akan mengambil objek request dan parameter id sebagai input. Function ini akan mencari objek customer dengan id yang sesuai. Lalu, objek tersebut akan diperbarui atau update atribut objek customer dari objek request. Nantinya akan diarahkan ke route customer dengan menampilkan pesan sukses
    public function updatedata(Request $request, $id){
        $data = Customer::find($id);
        $data->update($request->all());
        return redirect()->route('customer')->with('success','Data Berhasil Di Update');
    }


    //Function ini akan menggunakan id sebagai parameter.Nantinya, function akan menemukan data yang ingin dicari sesuai dengan id yang diberikan. Lalu,menghapusnya dari database dan akan mengarahkan user ke  route customer dengan pesan berhasil dihapus
    public function delete($id){
        $data = Customer::find($id);
        $data->delete();
        return redirect()->route('customer')->with('success','Data Berhasil Di Hapus');
        
    }
}