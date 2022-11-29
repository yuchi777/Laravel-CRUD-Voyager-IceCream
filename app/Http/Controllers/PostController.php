<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Ice_type;
use App\Ice_img;
use App\Actives;

class PostController extends Controller
{
    //
    public function index(){

        $banners = Banner::get();
        // return dd($banners);

        $iceTypesCups = Ice_type::where('ice_type','杯裝系列')->get();
        $iceTypesCupTitles = Ice_type::where('ice_type','杯裝系列')->first();

        $iceTypesSticks = Ice_type::where('ice_type','冰棒系列')->get();
        $iceTypesStickTitles = Ice_type::where('ice_type','冰棒系列')->first();

        $iceTypesCones = Ice_type::where('ice_type','甜筒系列')->get();
        $iceTypesConeTitles = Ice_type::where('ice_type','甜筒系列')->first();

        $iceNotes = Ice_type::where('ice_type','冰淇淋須知')->get();
        
        $iceImgs = Ice_img::get();
        $actives = Actives::get();

        return view('index',compact(
            'banners',
            'iceTypesCups',
            'iceTypesCupTitles',
            'iceTypesSticks',
            'iceTypesStickTitles',
            'iceTypesCones',
            'iceTypesConeTitles',
            'iceNotes',
            'iceImgs',
            'actives'
        ));
    }
}
