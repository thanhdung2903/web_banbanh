<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){					
    	$slide =Slide::all();						
    	return view('page.trangchu',['slide'=>$slide]);						
        $new_product = Product::where('new',1)->paginate(8);							
        ($new_product);							
    	return view('page.trangchu',compact('slide','new_product'));						
    }
      
    // public function getLoaiSp(){				
    // 	return view('page.loai_sanpham');			
    // }
    public function getLoaiSp($type){
        $type_product = ProductType::all();
        $sp_theoloai = Product::where('id_type', $type)->get();
        $sp_khac = Product::where('id_type','<>', $type)->paginate(3);				
    	return view('page.loai_sanpham', compact('sp_theoloai','type_product','sp_khac'));			
    }
    public function geChitiet(){				
    	return view('page.chitiet_sanpham');			
    }
    public function geLienhe(){				
    	return view('page.lienhe');			
    }
    public function getAbout(){				
    	return view('page.about');			
    }
}