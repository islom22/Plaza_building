<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\AboutPagePhoto;
use App\Models\Application;
use App\Models\Catalog;
use App\Models\Lang;
use App\Models\Partner;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Certificate;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;
use App\Models\Info;
use App\Models\Work;
use App\Models\Member;

use App\Models\Banner;
use App\Models\Project;
use App\Models\Post;
use App\Models\ProjectImage;
use App\Models\TeamPhoto;
use PhpParser\Node\Expr\Cast\Object_;

class WebController extends Controller
{
  public function certificates()
  {
    $langs = Lang::all();
    $translations = Translation::all();
    $lang = \App::getLocale();

    // $certificates = Certificate::latest()->get();

    return view('certificates', compact('langs', 'translations', 'lang', 'certificates'));
  }

  public function projects()
  {
    $langs = Lang::all();
    $translations = Translation::all();
    $lang = \App::getLocale();

    // $projects = Project::all();
    $projects = Project::latest()->with('projectimage')->get();
    $images = ProjectImage::all();
    $infos = Info::all();

    return view('projects', compact('langs', 'translations', 'lang', 'projects', 'images', 'infos'));
  }

  public function projects_show($id)
  {
    $langs = Lang::all();
    $translations = Translation::all();   
    $lang = \App::getLocale();
    
    $projects = Project::with('projectimage')->find($id);
    $images = ProjectImage::find($id);
    $infos = Info::all();


    return view('project_show', compact('langs', 'translations', 'lang', 'projects', 'images', 'infos'));
  }

  public function real_projects()
  {
    $langs = Lang::all();
    $translations = Translation::all();
    $lang = \App::getLocale();

    // $projects = Project::where('is_completed', 0)->latest()->get();

    return view('real_projects', compact('langs', 'translations', 'lang', 'projects'));
  }

  public function index()
  {
    $langs = Lang::all();
    $translations = Translation::all();
    $lang = \App::getLocale();

    //   $projects = Project::latest()->get();
    $objects = Product::latest()->get();
    $services = Service::all();
    $partners = Partner::all();
    $applications = Application::all();
    $infos = Info::all();
    $projects = Project::latest()->with('projectimage')->get();
    $images = ProjectImage::all();

    return view('welcome', compact('langs', 'translations', 'lang', 'applications', 'projects', 'services', 'partners', 'images', 'infos'));
  }

  public function about()
  {
    $langs = Lang::all();
    $translations = Translation::all();
    $lang = \App::getLocale();

    // $team_photos = TeamPhoto::latest()->get();
    $infos = Info::all();

    return view('about', compact('langs', 'translations', 'lang', 'infos'));
  }

  public function application(Request $request)
  {

    $data = $request->all();

    $validator = Validator::make($data, [
      'phone_number' => 'required|max:255',
      // 'email' => 'required|max:255',
      'name' => 'required|max:255'
    ]);

    if ($validator->fails()) {
      return back()->with(['message' => 'Error! Message not sent!']);
    }

    Application::create($data);

    // for mail
    // $to = 'info@ppholding.uz';
    // $from = 'info@ppholding.uz';
    // $subject = 'Запрос с сайта PPH';

    // Mail::send('mail', [
    //     'name' => $request->name,
    //     'email' => $request->email,
    //     'phone_number' => $request->phone_number
    // ], function ($message) {
    //     $message->to($to, 'to text')->subject($subject);
    //     $message->from($from, 'Сайт ppholding.uz');
    // });

    // return response(['success' => true], 200);
    return back()->with(['message' => 'Succesfully sent!']);
  }

  // upload image for CKEditor
  public function uploadImage(Request $request)
  {
    if ($request->hasFile('upload')) {
      $fileName = time() . '.' . $request->file('upload')->getClientOriginalExtension();

      $request->file('upload')->move(public_path('upload'), $fileName);

      $CKEditorFuncNum = $request->input('CKEditorFuncNum');
      $url = asset('upload/' . $fileName);
      $msg = 'Image upload successfully!';
      $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

      @header('Content-type: text/html; charset=utf-8');
      echo $response;
    }
  }

  // public function services() {
  //     $services = Service::with('serviceImages')->get();
  //     $works = Service::first()->works()->paginate(1);
  //     return response(['services' => $services, 'works' => $works], 200);
  // }

  public function services()
  {
    $langs = Lang::all();
    $translations = Translation::all();
    $lang = \App::getLocale();

    $services = Service::all();
    $infos = Info::all();

    return view('service', compact('langs', 'translations', 'lang', 'infos', 'services'));
  }

  public function service($id)
  {
    $service = Service::with('serviceProcesses', 'serviceImages')->find($id);
    $works = $service->works()->paginate(1);
    return response(['service' => $service, 'works' => $works], 200);
  }

  public function info()
  {
    $langs = Lang::all();
    $translations = Translation::all();
    $lang = \App::getLocale();

    $infos = Info::all();

    return view('infos', compact('langs', 'translations', 'lang', 'infos'));
  }

  public function partners()
  {
    $partners = Partner::all();
    return response(['partners' => $partners], 200);
  }

  // public function members() {
  //     $members = Member::all();
  //     return response(['members' => $members], 200);
  // }

  // public function works(Request $request) {
  //     $service = Service::find($request->service);
  //     if(!$service) return response(['message' => 'Net rabot'], 400);
  //     $works = $service->works()->paginate(1);
  //     return response(['works' => $works], 200);
  // }

  // public function work($id) {
  //     $work = Work::find($id);
  //     return response(['work' => $work], 200);
  // }
}
