<?php

namespace App\Http\Controllers;

use \App\Mail\MyMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Auth;
use App\Models\Image_Category;
use App\Models\Image_Tag;
use App\Models\Image;
use App\Models\Page;
use Validator; 


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth'); 
       
        
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
        
        $searchbanners = DB::table('sliders')->select('image','heading_first','heading_second','alt')->first();
        $belowsearchcategories = DB::table('image_categories')->select('slug','name')->whereRaw('banner_search_below = ?',[1])->get();
        $popularcategories = DB::table('image_categories')->select('slug','name','image_webp','alt')->whereRaw('popular = ?',[1])->get();
        
        
        $pngcategories = DB::table('image_categories')->select('slug','name','description')->whereRaw('id = ?',[1])->first();
        $pngimages = DB::table('images')->whereRaw('image_category_id = ?',[1])->orderBy('id','DESC')->paginate(15);
        $bgcategories = DB::table('image_categories')->select('slug','name','description')->whereRaw('id = ?',[2])->first();
        $backgroundimages = DB::table('images')->whereRaw('image_category_id = ?',[2])->orderBy('id','DESC')->paginate(15);
        $templatecategories = DB::table('image_categories')->select('slug','name','description')->whereRaw('id = ?',[3])->first();
        $templateimages = DB::table('images')->whereRaw('image_category_id = ?',[3])->orderBy('id','DESC')->paginate(15);//10
        
        
        return view('index',['searchbanners'=>$searchbanners,'belowsearchcategories'=>$belowsearchcategories,'popularcategories'=>$popularcategories,'pngcategories'=>$pngcategories,'pngimages'=>$pngimages,
                            'bgcategories'=>$bgcategories,'backgroundimages'=>$backgroundimages,'templatecategories'=>$templatecategories,'templateimages'=>$templateimages]);
    }
    public function categoryList($slug)
    {
        $categories = DB::table('image_categories')->select('*')->whereRaw('slug = ?',[$slug])->first();
	//dd($categories);
        $image = DB::table('images')
		//->whereRaw('image_category_id = ?',[$categories->id])
		->whereRaw("FIND_IN_SET(?, image_category_id) > 0", $categories->id)
		->orderBy('id','DESC')
		->paginate(15);
	
       return view('category',['categories'=>$categories,'images'=>$image]);
    }
    public function tagList($slug)
    {
        $categories = DB::table('image_tags')->select('*')->whereRaw('slug = ?',[$slug])->first();
        $image = DB::table('images')
		//->whereRaw('image_tag_id = ?',[$categories->id])
		->whereRaw("FIND_IN_SET(?, image_tag_id) > 0", $categories->id)
		->orderBy('id','DESC')
		->paginate(15);
        
        
        return view('category',['categories'=>$categories,'images'=>$image]);
    }
    public function page($slug)
    {       
        $pages = DB::table('pages')->select('*')->whereRaw('slug = ?',[$slug])->first();
        return view('page',['pages'=>$pages]);
    }
    public function searchList(Request $request)
    {
        //$categories = DB::table('image_categories')->select('*')->whereRaw('slug = ?',[1])->first();
        $searchcategories = DB::table('image_categories')->select('id','name')->whereNull('parent_id')->get();
        $image = DB::table('images')
                        ->where('name', 'LIKE', "%{$request->q}%") 
                        ->where('image_category_id', 'LIKE', "%{$request->cat}%") 
                        ->paginate(15)->withQueryString();
        
        return view('search',['images'=>$image,'query'=>$request->q]);
    }
    public function show($slug)
    {
        $images = DB::table('images')->whereRaw('slug = ?',[$slug])->first();
        $categories = DB::table('image_categories')->select('*')->WhereIn('id',explode(",",$images->image_category_id))->get();
        $tags = DB::table('image_tags')->select('*')->WhereIn('id',explode(",",$images->image_tag_id))->get();
       // $relventimages = DB::table('images')->WhereIn('image_category_id',explode(",",$images->image_category_id))->paginate(8);
       $imgcat=explode(",",$images->image_category_id);
       $imgcat=end($imgcat);
        $relventimages = DB::table('images')->whereRaw("FIND_IN_SET(?, image_category_id) > 0", $imgcat)->whereNotIn('id', array($images->id))->paginate(8);
       
        $similarimages = DB::table('images')->WhereIn('image_tag_id',explode(",",$images->image_tag_id))->paginate(8);
        return view('imagedetail',['images'=>$images,'categories'=>$categories,'tags'=>$tags,'relventimages'=>$relventimages,'similarimages'=>$similarimages]);
    }
    
    public function downloadcount(Request $request){  
    	if(Auth::check()){
    	    $user = Auth::user();

            if($user->hasVerifiedEmail()){
        		$images = DB::table('images')->whereRaw('id = ?',[$request->imageid])->first();
        		DB::table('images')
        		        ->where('id',$request->imageid)
        		        ->update(['download_count' => $images->download_count+1]);
        		return  response()->json(['sts'=>1,'image_png'=>$images->image_png]);  
            }else{
                //return redirect()->route('verification.notice');
                return  response()->json(['sts'=>3,'verifyurl'=>route('verification.notice')]); 
            }
            
    	}else{
    		return  response()->json(['sts'=>2]);  
    	}    
    }
    public function contactus(Request $request){  
	
	$validator = Validator::make($request->all(), [            
           
                'name'                 =>  'required',
                'email'                =>  'required',
                'phone'                =>  'nullable|numeric',
                'subject'              =>  'required',
                'message'              =>  'required',                
            ]);
	if ($validator->fails()) {
            return response()->json(array('status' => false,'errors' => $validator->getMessageBag()->toArray()));
        }
	$details=[
			'name'=>$request->name,
			'email'=>$request->email,
			'phone'=>$request->phone,
			'subject'=>$request->subject,
			'message'=>$request->message
		];
	\Mail::to('pngguru.in@gmail.com')->send(new MyMail($details));

		return  response()->json(['sts'=>1]);  
	
	    
    }
    public function sitemap() {
        $pages = Page::all();
	$images = Image::all();
	$images_categories = Image_Category::all();
	$images_tags = Image_Tag::all();
        return response()->view('sitemap', ['pages' => $pages,'images' => $images,'images_categories' => $images_categories,'images_tags' => $images_tags])->header('Content-Type', 'text/xml');
    }
    
}
