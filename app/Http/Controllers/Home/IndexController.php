<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Models\News;

class IndexController extends Controller
{

	public function index()
	{
        //轮播图
        $banner = \DB::table('carousels')->select('id', 'img', 'link')->where('is_show', '=', 1)->orderBy('id','desc')->limit('2')->get();

        //关于我们
        $about = \DB::table('abouts')->select('id', 'jianjie')->first();

        //我们的服务
        $service = \DB::table('Services')->where('is_show', '=', 1)->orderBy('id', 'desc')->limit(8)->get();
        
        //精品案例
        $case = \DB::table('cases')->where('is_show', '=', 1)->orderBy('id', 'desc')->get();
        
        //服务流程
        $flow = \DB::table('Flows')->where('is_show', '=', 1)->orderBy('id', 'desc')->limit(8)->get();

        //新闻
        $new = News::where('is_show', '=', 1)->orderBy('id', 'desc')->limit('6')->get();

        return view('home.index.index', compact('banner', 'about', 'service', 'case','flow', 'new') );
	}

    public function index_1()
    {

    }


    
}
