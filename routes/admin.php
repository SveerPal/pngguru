<?php 
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Admin\ClientelesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\Image_CategoriesController;
use App\Http\Controllers\Admin\Image_TagsController;
use App\Http\Controllers\Admin\ImagesController;

use Illuminate\Support\Facades\DB;
/*use App\Models\Slider;
use App\Models\Image;
use App\Models\User;
*/


Auth::routes();
Route::group(['prefix'  =>  'admin'], function () {

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
	Route::post('/login', [LoginController::class, 'login'])->name('admin.login.post');
	Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');



    Route::group(['middleware' => ['auth:admin']], function () {

	    Route::get('/', function () {
	    	$icnt = DB::table('images')->count();
	    	$icat_cnt = DB::table('image_categories')->count();
	    	$itag_cnt = DB::table('image_tags')->count();
	    	$ucnt = DB::table('users')->count();	    	
	        return view('admin.dashboard.index',['icnt'=>$icnt,'itag_cnt'=>$itag_cnt,'icat_cnt'=>$icat_cnt,'ucnt'=>$ucnt]);
	    })->name('admin.dashboard');
        
        //Password
         Route::get('/password/', [SettingController::class,'editpassword'])->name('admin.update-password');
         Route::post('/updatepassword/{id}', [SettingController::class,'updatepassword'])->name('admin.updatepassword');
        
	    //Settings
	    Route::get('/settings', [SettingController::class,'index'])->name('admin.settings');
		Route::post('/settings', [SettingController::class,'update'])->name('admin.settings.update');

		//Pages
		Route::get('/pages', [PagesController::class, 'index'])->name('admin.pages');
		Route::get('/pages/show/{id}', [PagesController::class, 'show'])->name('admin.pages.show');
		Route::get('/pages/create', [PagesController::class, 'create'])->name('admin.pages.create');
		Route::post('/pages/store', [PagesController::class, 'store'])->name('admin.pages.store');	
		Route::get('/pages/edit/{id}', [PagesController::class, 'edit'])->name('admin.pages.edit');
		Route::post('/pages/update/{id}', [PagesController::class, 'update'])->name('admin.pages.update');
		Route::get('/pages/delete/{id}', [PagesController::class, 'destroy'])->name('admin.pages.delete');

		//Sliders
		Route::get('/sliders', [SlidersController::class, 'index'])->name('admin.sliders');
		Route::get('/sliders/show/{id}', [SlidersController::class, 'show'])->name('admin.sliders.show');
		Route::get('/sliders/create', [SlidersController::class, 'create'])->name('admin.sliders.create');
		Route::post('/sliders/store', [SlidersController::class, 'store'])->name('admin.sliders.store');	
		Route::get('/sliders/edit/{id}', [SlidersController::class, 'edit'])->name('admin.sliders.edit');
		Route::post('/sliders/update/{id}', [SlidersController::class, 'update'])->name('admin.sliders.update');
		Route::get('/sliders/delete/{id}', [SlidersController::class, 'destroy'])->name('admin.sliders.delete');

		//Testimonials
		Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('admin.testimonials');
		Route::get('/testimonials/show/{id}', [TestimonialsController::class, 'show'])->name('admin.testimonials.show');
		Route::get('/testimonials/create', [TestimonialsController::class, 'create'])->name('admin.testimonials.create');
		Route::post('/testimonials/store', [TestimonialsController::class, 'store'])->name('admin.testimonials.store');	
		Route::get('/testimonials/edit/{id}', [TestimonialsController::class, 'edit'])->name('admin.testimonials.edit');
		Route::post('/testimonials/update/{id}', [TestimonialsController::class, 'update'])->name('admin.testimonials.update');
		Route::get('/testimonials/delete/{id}', [TestimonialsController::class, 'destroy'])->name('admin.testimonials.delete');

		//Clienteles
		Route::get('/clienteles', [ClientelesController::class, 'index'])->name('admin.clienteles');
		Route::get('/clienteles/show/{id}', [ClientelesController::class, 'show'])->name('admin.clienteles.show');
		Route::get('/clienteles/create', [ClientelesController::class, 'create'])->name('admin.clienteles.create');
		Route::post('/clienteles/store', [ClientelesController::class, 'store'])->name('admin.clienteles.store');	
		Route::get('/clienteles/edit/{id}', [ClientelesController::class, 'edit'])->name('admin.clienteles.edit');
		Route::post('/clienteles/update/{id}', [ClientelesController::class, 'update'])->name('admin.clienteles.update');
		Route::get('/clienteles/delete/{id}', [ClientelesController::class, 'destroy'])->name('admin.clienteles.delete');

		//Newsletters
		Route::get('/newsletters', [PagesController::class, 'index'])->name('admin.newsletters');
		Route::get('/newsletters/show/{id}', [PagesController::class, 'show'])->name('admin.newsletters.show');
		Route::get('/newsletters/create', [PagesController::class, 'create'])->name('admin.newsletters.create');
		Route::post('/newsletters/store', [PagesController::class, 'store'])->name('admin.newsletters.store');	
		Route::get('/newsletters/edit/{id}', [PagesController::class, 'edit'])->name('admin.newsletters.edit');
		Route::post('/newsletters/update/{id}', [PagesController::class, 'update'])->name('admin.newsletters.update');
		Route::get('/newsletters/delete/{id}', [PagesController::class, 'destroy'])->name('admin.newsletters.delete');

		//Users
		Route::get('/users', [UsersController::class, 'index'])->name('admin.users');
		Route::get('/users/show/{id}', [UsersController::class, 'show'])->name('admin.users.show');
		Route::get('/users/create', [UsersController::class, 'create'])->name('admin.users.create');
		Route::post('/users/store', [UsersController::class, 'store'])->name('admin.users.store');	
		Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('admin.users.edit');
		Route::post('/users/update/{id}', [UsersController::class, 'update'])->name('admin.users.update');
		Route::get('/users/delete/{id}', [UsersController::class, 'destroy'])->name('admin.users.delete');

		/* Images */
		Route::get('/images', [ImagesController::class, 'index'])->name('admin.images');
		Route::get('/images/show/{id}', [ImagesController::class, 'show'])->name('admin.images.show');
		Route::get('/images/create', [ImagesController::class, 'create'])->name('admin.images.create');
		Route::post('/images/store', [ImagesController::class, 'store'])->name('admin.images.store');	
		Route::get('/images/edit/{id}', [ImagesController::class, 'edit'])->name('admin.images.edit');
		Route::post('/images/update/{id}', [ImagesController::class, 'update'])->name('admin.images.update');
		Route::get('/images/delete/{id}', [ImagesController::class, 'destroy'])->name('admin.images.delete');

		//Image Category
		Route::get('/image-categories', [Image_CategoriesController::class, 'index'])->name('admin.image-categories');
		Route::get('/image-categories/show/{id}', [Image_CategoriesController::class, 'show'])->name('admin.image-categories.show');
		Route::get('/image-categories/create', [Image_CategoriesController::class, 'create'])->name('admin.image-categories.create');
		Route::post('/image-categories/store', [Image_CategoriesController::class, 'store'])->name('admin.image-categories.store');	
		Route::get('/image-categories/edit/{id}', [Image_CategoriesController::class, 'edit'])->name('admin.image-categories.edit');
		Route::post('/image-categories/update/{id}', [Image_CategoriesController::class, 'update'])->name('admin.image-categories.update');
		Route::get('/image-categories/delete/{id}', [Image_CategoriesController::class, 'destroy'])->name('admin.image-categories.delete');

		//Image tag
		Route::get('/image-tags', [Image_TagsController::class, 'index'])->name('admin.image-tags');
		Route::get('/image-tags/show/{id}', [Image_TagsController::class, 'show'])->name('admin.image-tags.show');
		Route::get('/image-tags/create', [Image_TagsController::class, 'create'])->name('admin.image-tags.create');
		Route::post('/image-tags/store', [Image_TagsController::class, 'store'])->name('admin.image-tags.store');	
		Route::get('/image-tags/edit/{id}', [Image_TagsController::class, 'edit'])->name('admin.image-tags.edit');
		Route::post('/image-tags/update/{id}', [Image_TagsController::class, 'update'])->name('admin.image-tags.update');
		Route::get('/image-tags/delete/{id}', [Image_TagsController::class, 'destroy'])->name('admin.image-tags.delete');




	});


});