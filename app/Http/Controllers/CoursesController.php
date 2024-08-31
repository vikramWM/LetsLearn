<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use App\Models\Course;
use App\Models\Topic;
use App\Models\Rating;
use Auth;
use Illuminate\Support\Str;






class CoursesController extends Controller
{


    public function index()
    {
        $role = Auth::user()->role;
        $premission = DB::table('permission')->where('role_id', $role)->get();

        $data['category'] = Course::orderBy('created_at', 'desc')->paginate(5); // Change '10' to the number of items per page you desire.
        return view("courses.category", compact("premission", "data"));
    }


    public function topic()
    {
        $role =  Auth::user()->role;

        $data['category'] = Course::orderBy('created_at', 'desc')->get();
        $premission = DB::table('permission')->where('role_id', $role)->get();
        return view("courses.topic  ", compact("premission" , "data"));
    }
    
        public function store(Request $request)
        {
           
            $existingCourse = Course::where('category', $request->input('category'))->first();
            if ($existingCourse) {
                return redirect()->back()->with('error', 'Same Tittle Course Already Exist Please Try Anain With New One');
            }


            $course = new Course();
            $course->category = $request->input('category');
            // $course->images = $request->input('icon');
            $course->status = $request->input('status');
            $course->price = $request->input('price');
            $course->disscount = $request->input('disccount');
            $course->slug = Str::slug($request->input('category'), '-');

            if ($request->hasFile('icon')) {
                $photoFile = $request->file('icon');
                $photoName = uniqid() . '_' . $photoFile->getClientOriginalName();
                $photoPath = public_path('assets/media/course');
                $photoFile->move($photoPath, $photoName);
                $course->images = 'assets/media/course/' . $photoName;
            } else {
                $course->images = 'assets/media/avatars/blank.png';
            }
    
            // dd($course);
            $course->save();
            return redirect()->back()->with('success', 'Course created successfully');
        }

        public function update_course(Request $request, $id)
        {


             $existingCourse = Course::where('category', $request->input('category'))->first();
            if ($existingCourse) {
                return redirect()->back()->with('error', 'Same Tittle Course Already Exist Please Try Anain With New One');
            }

            $course = Course::findOrFail($id);
            $course->category = $request->input('category');
            $course->status = $request->input('status');
            $course->price = $request->input('price');
            $course->disscount = $request->input('disccount');
            $course->slug = Str::slug($request->input('category'), '-');
            if ($request->hasFile('icon')) {
                $photoFile = $request->file('icon');
                $photoName = uniqid() . '_' . $photoFile->getClientOriginalName();
                $photoPath = public_path('assets/media/course');
                $photoFile->move($photoPath, $photoName);
                $course->images = 'assets/media/course/' . $photoName;
            } else {
                $course->images = 'assets/media/avatars/blank.png';
            }
            $course->save();
            return redirect()->back()->with('success', 'Course Updated Successfully');
        }

        public function delete_course(Request $request, $id) 
        {
            $course = Course::find($id);
            if (!$course) {
                return redirect()->back()->with('error', 'Course not found.');
            }
            $course->delete();

            return redirect()->back()->with('success', 'Course deleted successfully.');
        }

       public function store_topic(Request $request)
        {

            // Create a new topic record with the uploaded data
            $topic = new Topic;
            $topic->topic = $request->input('topic');
            $topic->category_id = $request->input('category');
            $topic->description = $request->input('description');
            $topic->thumbnail = $request->input('photo');; // Use the uploaded path if available, or an empty string
            $topic->video = $request->input('video'); // Use the uploaded path if available, or an empty string
            
            if ($request->hasFile('photo')) {
                $photoFile = $request->file('photo');
                $photoName = uniqid() . '_' . $photoFile->getClientOriginalName();
                $photoPath = public_path('assets/media/thumbnail');
                $photoFile->move($photoPath, $photoName);
                $topic->thumbnail = 'assets/media/thumbnail/' . $photoName;
            } else {
                $topic->thumbnail = 'assets/media/avatars/blank.png';
            }

            // Handle video upload and move it to the designated folder
            if ($request->hasFile('video')) {
                $videoFile = $request->file('video');
                $videoName = uniqid() . '_' . $videoFile->getClientOriginalName();
                $videoPath = 'assets/media/topic/'; // Specify the correct path to the video folder
                $videoFile->move($videoPath, $videoName);
                $topic->video = $videoPath . $videoName;
            }
            $topic->save();
            return redirect()->back()->with('success', 'Topic created successfully.');
        }



            public function view_course(Request $request)
            {
                $role = Auth::user()->role;
                $premission = DB::table('permission')->where('role_id', $role)->get();

                $data['category'] = Course::all();
                $categoryFilter = $request->input('category'); // Corrected variable name
                $query = Topic::with('course')
                    ->orderBy('created_at', 'desc');
                if ($categoryFilter) {
                    $query->where('category_id', $categoryFilter);
                }
                $data['course'] = $query->paginate(7);
                return view("courses.all_course", compact("premission", "data"));
            }

            public function DeleteTopic($id)
            {
                $topic = Topic::find($id);
                if (!$topic) {
                    return redirect()->back()->with('error', 'User not found');
                }
                $topic->delete();
                return redirect()->back()->with('success', 'User deleted successfully');
            }

            public function update()
            {
                $role = Auth::user()->role;
                $premission = DB::table('permission')->where('role_id', $role)->get();
                $data['category'] = Course::all();
                return view("courses.edit_course", compact("premission", 'data'));

            }

            public function getCourseBySlug($slug)
            {
                $course = Course::where('slug', $slug)->first();
                
               
                $data = [
                    'price'        => $course->price,
                    'disscount'     => $course->discount,
                    'tittle'        => $course->category,
                    'last_update'  => date('F j, Y', strtotime($course->updated_at)),
                    'total_videos' => Topic::where('category_id', $course->id)->count(),
                    'video'       => Topic::with('course')->where('category_id', $course->id)->get()->toArray(),
                    'c_id'    => $course->id,
                    'rating'      => Rating::with('topic', 'user')->get()->toArray(),
                    'title'        => '',
                    'description'  => '',
                ];
                // Set title and description based on slug
                if ($slug == "artificial-intelligence-machine-learning") {
                    $data['title'] = 'Master Artificial Intelligence & Machine Learning Courses with Letslearn';
                    $data['description'] = 'Dive deep into the world of artificial intelligence and machine learning with our comprehensive online course & stay ahead in this rapidly evolving field';
                } elseif ($slug == "business-intelligence-data-analytics-with-excel-power-bi-and-tableau") {
                    $data['title'] = 'The Ultimate Course for Power BI & Data Analytics with Excel, Power BI, and Tableau | Letslearn';
                    $data['description'] = 'Master BI & Data Analytics with Excel, Power BI, and Tableau. Boost your knowledge with our comprehensive course including live sessions with experts';
                }elseif ($slug == "cpp-programming") {
                    $data['title'] = 'Master C++ Programming: Unlock Your Coding Potential | Learn C++ Course';
                    $data['description'] = 'Get our comprehensive C++ programming course and unleash your coding skills. From basics to advanced concepts, master C++ with expert guidance and practical exercises';
                }elseif ($slug == "c-programming") {
                    $data['title'] = 'Unlock the Power of C Programming: Enroll in Our Comprehensive Course Today';
                    $data['description'] = 'Become an expert in C programming concepts with our expert-led course. Gain essential coding skills, enroll now and become a proficient C programmer';
                }elseif ($slug == "data-science") {
                    $data['title'] = 'Refine Your Data Science Skills: Enroll in Our Expert-Led Course Now';
                    $data['description'] = 'Master the fundamentals of data science and machine learning with our exclusive course. Gain hands-on experience. Enroll today to fast-track your success!';
                }elseif ($slug == "data-structure") {
                    $data['title'] = 'Explore the Foundations of Data Structures: Enroll in Our Specialized Course Today';
                    $data['description'] = 'Dive deep into the world of data structures with our expert-led course. Master essential concepts, implement algorithms, join now to unlock the key to efficient software development!';
                }elseif ($slug == "python-programming") {
                    $data['title'] = 'Top Python Courses - Learn Python Online | Letslearn ';
                    $data['description'] = 'Master the expertise in Python programming with our expert-led online python course, learn from industry experts and hands-on projects';
                }    
            
                // Uncomment the following line to print the data in the <pre> tag
                // echo '<pre>' ; print_r($data['rating']); exit;
            
                return view("coursepage", compact('data'));
            }
            

            public function rating(Request $request)
            {
                $rating = new Rating;
                $rating->rating = $request->input('rating');
                $rating->message = $request->input('message');
                $rating->uid = $request->input('uid');
                $rating->c_id = $request->input('cid');

                $rating->save();
                return redirect()->back()->with('success', 'Course Updated Successfully');
               
            }
    }

       

