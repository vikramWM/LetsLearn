<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Models\Course;
use App\Models\Rating; // Make sure to import your Rating model
use App\Models\Blog; // Make sure to import your Rating model

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    // Route::get('/', function () {return view('welcome');});


    Route::get('/', function () {
        $data = [
            'latestCourses' => Course::latest()->take(3)->get(),
            'ratings'       => Rating::with('user')->get()->toArray(),
            'blog'          => Blog::latest()->take(2)->get(),
            'title' => 'Find the Best Online Courses, Educational Resources, Assignments UK | Letslearn',
            'description' => 'Letslearn is a global platform for students and professionals to coordinate with qualified teachers to enhance their knowledge and skills with our Best Online Courses, Educational Resources and Assignments UK',
            'keyword' => '',
        ];
        return view('welcome', ['data' => $data]);
    });
    Route::get('/computer-science-assignment-help', function () {
        $data = [            
            'title' => 'Letslearn',
            'description' => 'Letslearn',
            'keyword' => '',
        ];
        return view('subjects.computer-science-assignment-help', ['data' => $data]);
    });
           //03-09-24 dbms by navneet
           Route::get('/database-managment-assignment-help', function () {
            $data = [            
                'title' => 'Letslearn',
                'description' => 'Letslearn',
                'keyword' => '',
            ];
            return view('subjects.database-managment-assignment-help ', ['data' => $data]);
        });

          //03-09-24 Human-Computer Interaction Assignment Writing Help by navneet
               Route::get('/human-computer-interaction-assignment-help', function () {
            $data = [            
                'title' => 'Letslearn',
                'description' => 'Letslearn',
                'keyword' => '',
            ];
            return view('subjects.human-computer-interaction-assignment-help ', ['data' => $data]);
        });

         //03-09-24 Information Technology Assignment Help by navneet
            Route::get('/information-technology-assignment-help',function(){
                $data =[
                    'title'=>'Letslearn',
                    'description'=> 'Letslearn',
                    'keyword'=> ''
                ];
                return view('subjects.information-technology.information-technology-assignment-help',['data'=>$data]);
            });

         //03-09-24 Artificial Intelligence Assignment Writing Help by navneet 
          Route::get('/artificial-intelligence-assigment-help' ,function(){
            $data =[
                'title'=>'Letslearn',
                'description'=> 'Letslearn',
                'keyword'=> ''
            ];
            return view('subjects.information-technology.artificial-intelligence-assigment-help',['data'=>$data]);
        });

        // 04-09-24 Machine Learning Assignment Writing Help by navneet
        Route::get('/machine-learning-assignment-writing-help' ,function(){
            $data =[
                'title'=>'Letslearn',
                'description'=> 'Letslearn',
                'keyword'=> ''
            ];
            return view('subjects.information-technology.machine-learning-assignment-writing-help',['data'=>$data]);
        });
   
        // 05-09-24 Software Engineering Assignment Writing Help  by navneet
        Route::get('/software-engineering-assignment-writing-help' ,function(){
            $data =[
                'title'=>'Letslearn',
                'description'=> 'Letslearn',
                'keyword'=> ''
            ];
            return view('subjects.information-technology.software-engineering-assignment-writing-help',['data'=>$data]);
        });
           
         // 06-09-24  Nursing Assignment Help by navneet
         Route::get('/nursing-assignment-writing-help',function(){
            $data=[
                'title'=> 'Letslearn',
                'description'=> 'Letslearn',
                'keyword'=>''
            ];
            return view ('subjects.nursing-assignment-help.nursing-assignment-writing-help',['data'=>$data]);
         });

         /// 06-09-24 Pharmacology Assignment Writing Help by navneet
         Route::get('/pharmacology-assignment-writing-help',function(){
            $data=[
                'title'=>'Letslearn',
                'description'=>'Letslearn',
                'keyword'=>''
            ];
            return view ('subjects.nursing-assignment-help.pharmacology-assignment-writing-help',['data'=>$data]);
         });
          

         ///   10-09-24 Medical Assignment Writing Help by navneet
         Route::get('/medical-assignment-writing-help', function(){
           $data=[
            'title'=>'Letslearn',
            'description'=>'Letslearn',
            'keyword'=>''
           ];
           return view ('subjects.nursing-assignment-help.medical-assignment-writing-help',['data'=>$data]);

         });

         /// 11-09-24 Mental Health Assignment Writing Help by navneet
          Route::get('/mental-health-assignment-writing-help', function(){
            $data=[
                'title'=>'Letslearn',
                'description'=> 'Letslearn',
                'keyword'=>''
            ];
            return view ('subjects.nursing-assignment-help.mental-health-assignment-writing-help',['data'=>$data]);
          });
              
                /// 12/09/24 Nutrition and Dietetics Assignment Writing Help by navneet
          Route::get('/nutrition-and-dietetics-assignment-writing-help', function(){
            $data=[
               'title'=>'Letslearn',
               'description'=> 'Letslearn',
               'keyword'=>''
          ];
        return view ('subjects.nursing-assignment-help.nutrition-and-dietetics-assignment-writing-help',['data'=>$data]);
       });   
       
         /// 18/09/24 Critical Care Assignment Writing Help by navneet
          
 



            Route::get('/myProfile', function () {
       
        return view('user.myProfile');
    });

  
    
    Route::get('/about', function () {
        $data = [
            
            'title' => 'Learn About Letslearn Vision, Mission, and Goals | About Us',
            'description' => 'Letslearn provides access to world-class learning by providing exclusive courses and by partnering with expert professionals from top institutions',
            'keyword' => '',
        ];
        return view('about', ['data' => $data]);
    });
    Route::get('/assignment', function () {
        $data = [
            
            'title' => 'Explore Diverse Educational Resources at Letslearn | Assignments UK',
            'description' => 'Letslearn provides a diverse selection of resources, ranging from assignments and articles to additional educational resources with exclusive discounts and offers',
            'keyword' => '',
        ];
        return view('services.assignment', ['data' => $data]);
    });
    Route::get('/sample', function () {
        $data = [
            
            'title' => 'Explore Course Samples | Try Before You Buy',
            'description' => 'Browse our course samples to get a taste of what we offer. Take a sneak peek into our comprehensive curriculum and discover the quality of our content. Start your journey today!',
            
        ];
        return view('services.sample', ['data' => $data]);
    });

   
    Route::get('/contact', [ContactController::class, 'contact']);
    Route::post('/send-contact-msg', [ContactController::class, 'sendEmail'])->name('contact.send');

    Route::post('/submit-order', [OrderController::class, 'submitOrder'])->name('submit.order');
    Route::get('/Terms-Conditions', function () {
        $data = [
            
            'title' => 'Terms and Conditions: Your Agreement to Our Services',
            'description' => 'Read our terms and conditions to understand your rights and responsibilities when using our services. Learn about our policies and guidelines | Letslearn',
            
        ];
        return view('Policy.Terms&Conditions', ['data' => $data]);
    });
    Route::get('/PrivacyPolicy', function () {
        $data = [
            
            'title' => 'Privacy Policy: Your Trust Matters to Us',
            'description' => 'Our commitment to protecting your privacy. Learn about our policies and practices regarding the collection, use, and protection of your personal information. Your privacy is our priority',
            
        ];
        return view('Policy.PrivacyPolicy', ['data' => $data]);
    });
    Route::get('/RefundPolicy', function () {
        $data = [
            
            'title' => 'Refund Policy | All About Our Return & Refund Policy',
            'description' => 'Everything you need to know about our refund policy designed to ensure your satisfaction. Learn about our guidelines for refunds and exchanges | Letslearn',
            
        ];
        return view('Policy.RefundPolicy', ['data' => $data]);
    });
    Route::get('/GuaranteedPolicy', function () {
        $data = [
            
            'title' => 'Guaranteed Policy: Our Commitment to Customer Satisfaction',
            'description' => 'Our guaranteed policy where customer satisfaction is our top priority and we prioritize your needs and ensure a smooth experience with us!',
            
        ];
        return view('Policy.GuaranteedPolicy', ['data' => $data]);
    });
    Route::get('/CancellationPolicy', function () {
        $data = [
            
            'title' => 'Letslearn | Cancellation Policy',
            'description' => 'Read about shopping terms & conditions of Letslearn including shipping and return policy',
            'keyword' => '',
        ];
       
        return view('Policy.CancellationPolicy', ['data' => $data]);
    });

    // Route::get('/blog', function () {return view('blog');});
    
    Route::get('/blog', function () {
        $data = [
            'blog' => Blog::orderBy('created_at', 'desc')->get(),
            'title' => 'Letslearn Blog | Latest Educational News for Learners & Educators',
            'description' => 'Get the latest stories and updates from Letslearn, the global online learning platform where anyone, anywhere, can transform their life by accessing the world`s best learning experience',
            'keyword' => '',
        ];
        return view('blog', ['data' => $data]);
    });
    

    Route::get('/order ', function () {
        $data = [
            
            'title' => 'Place Your Order | Smooth Checkout for Hassle-Free Shopping',
            'description' => 'A smooth checkout process. Place your order quickly and securely. Complete your purchase in an instant',
            
        ];
        return view('order_now', ['data' => $data]);
    });
});

Route::get('/dashboard', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [HomeController::class, 'profile']);
    Route::post('/change-password', [HomeController::class, 'changePasswordSave'])->name('postChangePassword');
});

Route::POST('/profile/{id}', [HomeController::class, 'updateProfile'])->name('profile.update');

Route::get('/course', function () 
{
    $courseData = Course::all();
    $data['title'] = 'Explore Our Best Online Courses | Boost Your Career with Letslearn';
    $data['description'] = 'Discover a range of the best online courses tailored to your interests and goals. Explore our online teaching assistant course and start your educational journey today!';
    $data['keyword'] = '';
    
    return view('course', ['courseData' => $courseData, 'data' => $data]);
});

Route::get('/course.{slug}', [CoursesController::class, 'getCourseBySlug']);




Route::group(['middleware' => 'checkRole:1'], function () {
Route::get('/menus', [MenusController::class, 'index'])->name('menus');
Route::post('/menus', [MenusController::class, 'insert_menu'])->name('menus');
Route::delete('menus/{menu}',[MenusController::class, 'destroy'])->name('menus.destroy');
Route::put('/menu/{id}', [MenusController::class, 'update'])->name('update');




Route::get('/submenu', [MenusController::class, 'submenu'])->name('submenu');
Route::post('/submenu', [MenusController::class, 'submenu_insert'])->name('submenu');
Route::delete('submenu/{submenus}',[MenusController::class, 'delete'])->name('submenu.delete');
Route::put('/submenu/{id}', [MenusController::class, 'submenu_update'])->name('submenu_update');

Route::get('/userright', [MenusController::class, 'userright'])->name('userright');
Route::Post('/userright', [MenusController::class, 'permission'])->name('userright');
Route::get('/rolePermission', [MenuController::class, 'rolePermission'])->name('rolePermission');


Route::get('/user', [UserController::class, 'index'])->name('user'); 
Route::POST('/user/{id}', [UserController::class, 'EditUser'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'DeleteUser'])->name('user.delete');
Route::get('/usercreate', [UserController::class, 'new_user'])->name('usercreate');
Route::Post('/usercreate', [UserController::class, 'insert_new_user'])->name('usercreate');

Route::get('/Category', [CoursesController::class, 'index'])->name('Category'); 
Route::put('/Category/{id}', [CoursesController::class, 'update_course'])->name('Category.update'); 
Route::delete('/Category/{id}', [CoursesController::class, 'delete_course'])->name('Category.delete');
Route::get('/view_course', [CoursesController::class, 'view_course'])->name('view_course');
Route::get('/topic', [CoursesController::class, 'topic'])->name('topic'); 
Route::post('/topic', [CoursesController::class, 'store_topic'])->name('topic'); 
Route::delete('/topic/{id}', [CoursesController::class, 'DeleteTopic'])->name('topic.delete');
Route::post('/course', [CoursesController::class, 'store'])->name('Course');
Route::get('/update/{id}', [CoursesController::class, 'update'])->name('update');

Route::get('/Write_blog', [HomeController::class, 'blog'])->name('Write_blog');
Route::get('/blog_list', [HomeController::class, 'blogList'])->name('blog_list');
Route::post('/submit_blog', [HomeController::class, 'blog_store'])->name('submit_blog');

// Route::get('/blog.{slug}', [HomeController::class, 'getBlogBySlug']);
Route::delete('/blogs/{id}', [HomeController::class, 'destroyBlog'])->name('blogs.destroy');
Route::delete('/blog_list/{id}', [HomeController::class, 'editBlog'])->name('blog_.destroy');






});
Route::post('/rate', [CoursesController::class, 'rating'])->name('submit.rating');
Route::get('/orders', [OrderController::class, 'index'])->name('orders');

Route::get('/blog.{slug}', [HomeController::class, 'getBlogBySlug']);









require __DIR__.'/auth.php';
