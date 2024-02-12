<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Section;
use App\Models\Assignment;
use App\Models\AdminAccess;
use Illuminate\Support\Str;
use App\Models\Announcement;
use App\Models\SectionVideo;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\Ebook;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $data['ann'] = Announcement::latest()->get();
        $data['assignments'] = Assignment::latest()->get();
        $data['user'] = $user = Auth::user();
        $data['courses'] = Course::where('user_id',$user->id)->latest()->get();

        if (Auth::user()->type == 1) {

            return view('admin.index', $data);
        } else {
            return redirect()->route('student_dashboard');
        }
    }
    public function fetchsection(Request $request)
    {
        $sections = Section::where('course_id', $request->course_id)->get();
        return $sections;
    }
    public function profile()
    {
        return 'this is the profile page';
    }
    public function course()
    {
        $data['courses'] = Course::latest()->get();
        $data['ann'] = Announcement::latest()->get();
        $data['assignments'] = Assignment::latest()->get();

        if (Auth::user()->type == 1) {

            return view('courses.course', $data);
        } else {
            return redirect()->route('student_dashboard');
        }
    }
    public function dashboard()
    {
        $data['user'] = $user = Auth::user();
        $data['courses'] = Course::where('user_id', $user->id)->latest()->get();
        $data['allcourses'] = Course::latest()->get();
        $data['allebooks'] = Ebook::latest()->get();
        $data['ann'] = Announcement::where('user_id', $user->id)->latest()->get();
        $data['assignments'] = Assignment::where('user_id', $user->id)->latest()->get();
        $data['categories'] = CourseCategory::orderBy('name')->get();
       
        if (Auth::user()->type == 1) {

            return view('admin.index', $data);
        } else {
            return redirect()->route('student_dashboard');
        }
    }
    public function admindashboard()
    {
        $data['user'] = $user = Auth::user();
        $assignadmin = AdminAccess::where('admins', $user->id)->get();
        // foreach ($assignadmin as $add) {

        //     $data['courses'] = Course::whereIn('id', explode(',', $add->course_id))->get();
        // }
        $data['courses'] = [];

        foreach ($assignadmin as $add) {
            $courseIds = explode(',', $add->course_id);
            // Retrieve courses for each admin and add them to the $data['courses'] array
            $courses = Course::whereIn('id', $courseIds)->get();
            $data['courses'] = array_merge($data['courses'], $courses->toArray());
        }
        
        // Now $data['courses'] contains all courses associated with the admins linked to the user
        // dd($data['courses']);

        // Now $data['courses'] contains the courses associated with the admins linked to the user


        $data['ann'] = Announcement::where('user_id', $user->id)->latest()->get();
        $data['assignments'] = Assignment::where('user_id', $user->id)->latest()->get();
        $data['categories'] = CourseCategory::orderBy('name')->get();
        return view('student.admin', $data);
    }
    public function admin_access()
    {
        $data['user'] = $user = Auth::user();
        $data['users'] = User::orderBy('firstname')->get();
        $data['courses'] = Course::where('user_id', $user->id)->latest()->get();
        $data['ann'] = Announcement::where('user_id', $user->id)->latest()->get();
        $data['assignments'] = Assignment::where('user_id', $user->id)->latest()->get();
        $data['admins'] = AdminAccess::where('user_id', $user->id)->latest()->get();
        $data['categories'] = CourseCategory::orderBy('name')->get();

        if (Auth::user()->type == 1) {

            return view('admin.admin_access', $data);
        } else {
            return redirect()->route('student_dashboard');
        }
    }
    public function assignadmin(Request $request)
    {
        $this->validate($request, [
            'course_id' => 'required',
            'access' => 'required',
        ]);
        $user = Auth::user();

        // dd($request->all());
        $access = AdminAccess::create([
            'user_id' => $user->id,
            'course_id' => $request->course_id,
            'access' => $request->access,
            'admins' => $request->admin,
        ]);
        return redirect()->back()->with('message', 'Access Granted Successfully!');
    }
    public function deleteAccess($id)
    {
        $access = AdminAccess::find($id);
        $user = Auth::user();


        if ($user->id !== $access->user_id) {
            $access->delete();
            return redirect()->back()->with('message', 'Access Deleteted Successfully!');
        } else {
            return redirect()->back()->with('error', 'Access Denied');
        }
    }
    public function student_dashboard()
    {
        $data['user'] = $user = Auth::user();
        $data['courses'] = Course::latest()->get();
        $data['allcourses'] = Course::latest()->get();
        $data['allebooks'] = Ebook::latest()->get();
        $data['ann'] = Announcement::latest()->get();
        $data['categories'] = CourseCategory::orderBy('name')->get();
        $data['assignments'] = Assignment::latest()->get();
        $data['course_enrolled'] = $enroll = Enroll::where('user_id', Auth::user()->id)->pluck('course_id');
        $status = [];
        $expenses = DB::table('transactions')
            ->where('userId', $user->userId)
            ->where('transactionType', '!=', 'Deposit')
            ->where('status', 'CONFIRM')
            ->sum('amount');

        $walletamount = DB::table('funds')
            ->where('userId', $user->userId)
            ->where('status', 'success')
            ->sum('amount');

        $data['balance'] = $walletamount - $expenses;

        $progress = Enroll::whereIn('course_id', $enroll)->get();
        foreach ($progress as $pro) {
            $status += array_add($status, $pro->course_id, [$pro->course_id => $pro->progress]);
        }

        $completed = Enroll::whereIn('course_id', $enroll)->pluck('completed');
        $good = $data['enrolled_courses'] = Course::whereIn('id', $enroll)->get();
        // dd($status, $good);
        $data['status'] = $status;
        return view('student.dashboard', $data);
    }


    public function ann()
    {
        $data['ann'] = Announcement::latest()->get();
        $data['courses'] = Course::latest()->get();
        $data['user'] = Auth::user();
        $data['assignments'] = Assignment::latest()->get();
        return view('ann.index', $data);
    }
    public function createann(Request $request)
    {
        $user = Auth::user();

        $ann = Announcement::create([
            'uid' => Str::uuid(),
            'user_id' => $user->id,
            'name' => $request->name,
            'description' => $request->description,
            'course_id' => $request->course_id,

        ]);
        return $ann;
    }
    public function coursedetails($id)
    {
        $data['course'] = $course = Course::where('uid',$id)->first();
        $data['courses']  = Course::latest()->get();
        $data['sections'] = Section::where('course_id', $course->id)->orderBy('rank')->get();
        $data['sectionvideos'] = SectionVideo::where('course_id', $course->id)->get();
        $data['user'] = Auth::user();
        return view('courses.coursedetails', $data);
    }
    public function admincoursedetails($id)
    {
        $data['course'] = $course = Course::where('uid',$id)->first();
        $data['courses']  = Course::latest()->get();
        $data['sections'] = Section::where('course_id', $course->id)->orderBy('rank')->get();
        $data['sectionvideos'] = SectionVideo::where('course_id', $course->id)->get();
        $data['user'] = Auth::user();
        return view('student.coursedetails', $data);
    }
    public function lesson($id)
    {
        $data['user'] = $user = Auth::user();
        $data['course'] = $course = Course::where('uid', $id)->firstOrFail();

        $data['ass'] = $ass = Assignment::where('course_id', $course->id)->latest()->get();
        $data['payment'] = false;

        if ($ass->isNotEmpty()) {
            $ass = $ass[0];
            if ($ass->paid_user == null) {
                $realass = array($ass->paid_user);
            } else {
                $realass = $ass->paid_user;
            }
            if (in_array($user->id, $realass)) {
                $data['payment'] = true;
            }
        }

        $data['sections'] = Section::where('course_id', $course->id)->get();

        $expenses = DB::table('transactions')
            ->where('userId', $user->userId)
            ->where('transactionType', '!=', 'Deposit')
            ->where('status', 'CONFIRM')
            ->sum('amount');

        $walletamount = DB::table('funds')
            ->where('userId', $user->userId)
            ->where('status', 'success')
            ->sum('amount');

        $data['balance'] = $walletamount - $expenses;




        $data['sectionvideos'] = SectionVideo::where('course_id', $course->id)->get();
        return view('courses.lesson', $data);
    }
    public function markdone($course_id)
    {
        $course = Course::find($course_id);
        $enrol = Enroll::where('course_id', $course->id)->first();
        $enrol->progress += 1;
        $enrol->save();
        return redirect()->back()->with('message', 'Mark Completed');
    }
    public function students($id)
    {
        $data['course'] = $course = Course::where('uid', $id)->firstOrFail();
        $data['courses']  = Course::latest()->get();
        $user_id = Enroll::where('course_id', $course->id)->pluck('user_id');
        $data['users'] = User::whereIn('id', $user_id)->latest()->get();
        $data['user'] = Auth::user();
        return view('courses.courseusers', $data);
    }
    public function coursestudents($id)
    {
        $data['course'] = $course = Course::where('uid', $id)->firstOrFail();
        $data['courses']  = Course::latest()->get();
        $user_id = Enroll::where('course_id', $course->id)->pluck('user_id');
        $data['users'] = User::whereIn('id', $user_id)->latest()->get();
        $data['user'] = Auth::user();
        return view('student.coursestudent', $data);
    }
    public function downloadsectionvideo($id)
    {
        $section = SectionVideo::find($id);
        $path = public_path() . '/sectionvideos/' . $section->video;
        return response()->download($path);
    }
    public function deletesectionvideo(Request $request)
    {
        $section = SectionVideo::find($request->id);
        $section->delete();
        return 'topic deleted';
    }
    public function createsection(Request $request)
    {
        $this->validate($request, [
            'course_id' => 'required',
            'title' => 'required',
           

        ]);
        Section::create([
            'course_id' => $request->course_id,
            'user_id' => Auth::user()->id,
            'title' => $request->title,
           
        ]);
        return redirect()->back()->with('message', 'Section Created Successfully');
        return 'section created';
    }
    public function deletesection($id)
    {
        $section = Section::find($id);
        $sectionvideos = SectionVideo::where('section_id', $section->id)->delete();
        $section->delete();
        return redirect()->back()->with('message', 'Section Deleted Successfully!');
    }
    public function createsectionvideo(Request $request)
    {
        // $this->validate($request,[
        //     'video' => ''
        // ])
        // dd($request->all());
        if ($request->has('video')) {
            foreach ($request->video as $key => $video) {
                $videofile = $video;
                $ext = $video->extension();
                $filename = $videofile->hashName();
                $videofile->move(public_path() . '/sectionvideos/', $filename);
                // dd($filename);
                SectionVideo::create([
                    'user_id' => Auth::user()->id,
                    'course_id' => $request->course_id,
                    'section_id' => $request->section_id,
                    'status' => $request->options,
                    'ext' => $ext,
                    'title' => $request->title . ' ' . ++$key,
                    'video' => $filename
                ]);
            }
        } else {
            SectionVideo::create([
                'user_id' => Auth::user()->id,
                'course_id' => $request->course_id,
                'section_id' => $request->section_id,
                'status' => $request->options,
                'ext' => 'drive',
                'link' => $request->link,
                'title' => $request->title,
                'video' => null
            ]);
        }

        return redirect()->back()->with('message', 'Materials Uploaded Successfully');
        return 'video uploaded successfully';
    }
    public function loadann(Request $request)
    {
        $id = $request->id;
        $ann = Announcement::find($id);
        // dd($request->all(),$ann);
        return $ann;
    }
    public function editann(Request $request)
    {
        $ann = Announcement::find($request->id);


        $ann->name = $request->name;
        $ann->description = $request->description;
        $ann->course_id = $request->course_id;


        $ann->save();


        return $ann;
    }
    public function deleteann(Request $request)
    {
        $id = $request->id;
        $ann = Announcement::find($id);
        $ann->delete();
        return 'course deleted';
    }


    public function assignment()
    {
        $data['user'] = Auth::user();
        $data['ann'] = Announcement::latest()->get();
        $data['courses'] = Course::latest()->get();
        $data['assignments'] = Assignment::latest()->get();
        return view('ass.index', $data);
    }
    public function createassignment(Request $request)
    {
        $user = Auth::user();

        // dd($request->all());
        if ($request->has('file') && $request->type == 'file') {
            $ext = $request->file->extension();
            $videofile = $request->file;
            $filename = $videofile->hashName();
            $videofile->move(public_path() . '/assignment_content/', $filename);

            $ann = Assignment::create([
                'uid' => Str::uuid(),
                'user_id' => $user->id,
                'title' => $request->title,
                'description' => $request->description,
                'course_id' => $request->course_id,
                'section_id' => $request->section_id,
                'type' => $request->type,
                'file' => $filename,
                'price' => $request->price,
                'ext' => $ext
            ]);
        } else {
            $ann = Assignment::create([
                'uid' => Str::uuid(),
                'user_id' => $user->id,
                'title' => $request->title,
                'description' => $request->description,
                'course_id' => $request->course_id,
                'section_id' => $request->section_id,
                'type' => $request->type,
                'minutes' => 10,
                'price' => $request->price,
                'link' => $request->link,

            ]);
        }
        return $ann;
    }
    public function loadassignment(Request $request)
    {
        $id = $request->id;
        $ann = Assignment::find($id);
        $section = Section::where('course_id', $ann->course_id)->get();
        return array($ann, $section);
    }
    public function viewass($id)
    {
        $ann = Assignment::where('uid', $id)->firstOrFail();
        if ($ann->file == null) {
            return $ann->link;
        } else {

            $path = public_path() . '/assignment_content/' . $ann->file;
            return response()->download($path);
        }
    }
    public function editassignment(Request $request)
    {

        $ann = Assignment::find($request->id);


        $ann->title = $request->name;
        $ann->description = $request->description;
        $ann->course_id = $request->course_id;
        $ann->link = $request->link;
        $ann->section_id = $request->section_id;
        $ann->course_id = $request->course_id;

        if ($request->has('file')) {
            $oldFilePath = public_path('assignment_content/' . $ann->file);

            // Check if a file with the same name already exists
            if (file_exists($oldFilePath)) {
                // If it exists, delete the existing file
                unlink($oldFilePath);
            }

            // Save the new file
            $videofile = $request->file('file');
            $filename = $videofile->hashName();
            $destinationPath = public_path('assignment_content/');
            $videofile->move($destinationPath, $filename);

            // Update the model with the new file path
            $ann->file = $filename;
        }


        $ann->save();


        return $ann;
    }
    public function deleteassignment(Request $request)
    {
        $id = $request->id;
        $ann = Assignment::find($id);
        $ann->delete();
        return 'assignment deleted';
    }
    public function deleteass(Request $request)
    {
        $id = $request->id;
        $ann = Assignment::find($id);
        $ann->delete();
        return redirect()->back()->with('message', 'Assignment deleted successfully!');
        return 'assignment deleted';
    }

    public function courseindex()
    {
        // dd('here');
        return view('courses.index');
    }
    public function allcourses()
    {
        $data['user'] = Auth::user();
        $enroll = Enroll::where('user_id', Auth::user()->id)->pluck('course_id');
        $data['courses'] = Course::whereNotIn('id', $enroll)->latest()->get();
        $data['ann'] = Announcement::latest()->get();
        $data['assignments'] = Assignment::latest()->get();
        return view('student.allcourses', $data);
    }
    public function live_preview($id)
    {


        $data['course'] = $course = Course::where('uid', $id)->firstOrFail();
        $data['sections'] = Section::where('course_id', $course->id)->orderBy('rank')->get();
        $data['sectionvideos'] = SectionVideo::where('course_id', $course->id)->get();

        return view('student.course_preview', $data);
    }

    public function createcourse(Request $request)
    {

        $package = explode(', ', $request->package);


        $user = Auth::user();
        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->move(public_path() . '/courseimage/', $imageName);
        $course = Course::create([
            'uid' => Str::uuid(),
            'user_id' => $user->id,
            'title' => $request->title,
            'course_code' => $request->course_code,
            'description' => $request->description,
            'duration' => $request->duration,
            'price' => $request->price,
            'slashed_price' => $request->slashed_price,
            'category' => $request->category,
            'packages' => $package,
            'image' => $imageName,
        ]);
        return $course;
        return redirect()->back()->with('message', 'Course Created Successfully');
    }
    public function loadcourse(Request $request)
    {
        $id = $request->id;
        $course = Course::find($id);
        return $course;
    }
    public function editcourse(Request $request)
    {
        // dd($request->all());
        $course = Course::find($request->id);
        $package = explode(', ', $request->package);
        // $package = array($myarray);
        if ($request->has('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path() . '/courseimage/', $imageName);
            $course->image = $imageName;
        }
        $course->title = $request->title;
        $course->course_code = $request->course_code;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->slashed_price = $request->slashed_price;
        $course->category = $request->category;
        $course->packages = $package;

        $course->save();


        return $course;
    }
    public function loadsection(Request $request)
    {
        $id = $request->id;
        $section = Section::find($id);
        return $section;
    }
    public function editsection(Request $request)
    {
        // dd($request->all());
        $section = Section::find($request->id);
      
        $section->title = $request->title;
        $section->rank = $request->rank;
       

        $section->save();


        return $section;
    }
    public function deletecourse(Request $request)
    {
        $id = $request->id;
        $course = Course::find($id);
        $course->delete();
        return 'course deleted';
    }

    public function searchCourse(Request $request)
    {
        $search = $request->search;
        // dd($request->all(),$search);
        $data['ann'] = Announcement::latest()->get();
        $data['assignments'] = Assignment::latest()->get();
        $enroll = Enroll::where('user_id', Auth::user()->id)->pluck('course_id');
        $data['user'] = $user =  Auth::user();
        $data['courses'] = Course::whereNotIn('id', $enroll)
            ->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('course_code', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            })
            ->paginate(9);


        $data['categories'] = CourseCategory::orderBy('name')->get();
        return view('admin.index', $data);
    }
    public function searchCourseStudent(Request $request)
    {
        $search = $request->search;
        // dd($request->all(),$search);
        $data['user'] = $user =  Auth::user();
        // dd($request->search);
        $enroll = Enroll::where('user_id', Auth::user()->id)->pluck('course_id');


        $data['courses'] = Course::whereNotIn('id', $enroll)
            ->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('course_code', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            })
            ->paginate(9);

        $data['categories'] = CourseCategory::orderBy('name')->get();
        // dd($data);
        return view('student.allcourses', $data);
    }
    public function searchCourseTitle(Request $request)
    {
        $search = $request->search;
        $enroll = Enroll::where('user_id', Auth::user()->id)->pluck('course_id');
        $Courses = Course::whereNotIn('id', $enroll)
            ->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('course_code', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            })
            ->get();


        // $Courses = Course::whereNotIn('id', $enroll)->where('title', 'like', '%' . $request->search . '%')
        //     ->orWhere('course_code', 'like', '%' . $request->search . '%')
        //     ->orWhere('description', 'like', '%' . $request->search . '%')
        //     ->get();
        return response()->json($Courses);
    }


    public function enroll($course_id)
    {
        $course = Course::where('uid', $course_id)->first();
        $user = Auth::user();
        if ($course->price == 0) {
            Enroll::create([
                'user_id' => $user->id,
                'course_id' => $course->id
            ]);
            return redirect('/dashboard')->with('message', "You have been enrolled for the course:" . $course->title);
        }

        return redirect()->back()->with('message', "You cannot enroll for this course because it requires payment!");
    }
}
