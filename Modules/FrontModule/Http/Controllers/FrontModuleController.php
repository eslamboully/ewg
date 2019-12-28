<?php
namespace Modules\FrontModule\Http\Controllers;

use DemeterChain\C;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\PortfolioModule\Entities\Portfolio\PortfolioTranslation;
use phpDocumentor\Reflection\Project;
use Validator;
use Illuminate\Support\Facades\View;
use Modules\BlogModule\Entities\Blog;
use Modules\FrontModule\Repository\FrontRepository;
use Modules\PortfolioModule\Entities\Portfolio\Portfolio;
use Modules\PortfolioModule\Entities\PortfolioCategory\PortfolioCategory;
use Modules\ProductModule\Entities\ProductCategory;
use Modules\ServiceModule\Entities\ServiceMod\Service;
use Modules\WidgetsModule\Entities\acheive;
use Modules\WidgetsModule\Entities\Contactus;
use Modules\WidgetsModule\Entities\Booking;
use Modules\WidgetsModule\Entities\Slider\Slider;
use Modules\WidgetsModule\Entities\Subscripe;
use Modules\WidgetsModule\Entities\Team\Team;
use Modules\WidgetsModule\Entities\Testimonial;
use Modules\WidgetsModule\Entities\WhyUs;
use Modules\WidgetsModule\Entities\WorkHours;

class FrontModuleController extends Controller
{
    public function __construct()
    {
        $blogss = Blog::with(['translations'])->orderBy('created_at','desc')->take(2)->get();
        $projectsCategories = PortfolioCategory::with(['translations'])->get();
        view()->share(['blogss' => $blogss , 'projectsCategories' => $projectsCategories]);
    }

    public function subscribers_create(Request $request)
    {
        $subs = Subscripe::where('email' , $request->email)->first();
        if ($subs === null){
            $godOfWar = Subscripe::create($request->all());
        }else{
            return response()->json(['email'=> null]);
        }
    }

    public function booking_create(Request $request)
    {
        if ($request->name !== null and $request->phone !== null and $request->message !== null){
            $godOfWar = Booking::create($request->all());
        }else{
            return response()->json(['email'=> null]);
        }
    }

    public function index()
    {
        $title = 'اهلا بكم في اتقان';
        $sliders = Slider::with(['translations']);
        $acheives = acheive::with(['translations'])->get();
        $services = Service::with(['translations'])->where('feature','=',1)->orderBy('created_at','desc')->get();
        $teams = Team::with(['translations'])->get();
        $testimonials = Testimonial::all();
        $blogs = Blog::with(['translations','admin'])->orderBy('created_at','desc')->get();
        $all_projects = PortfolioTranslation::get();

        return view('frontmodule::index',compact('title','sliders','acheives','services','teams','testimonials','blogs','all_projects'));
    }

    public function about_us()
    {
        $title = 'من نحن';
        $why_us = WhyUs::query()->get();
        //dd($why_us);
        return view('frontmodule::pages.about_us',compact('why_us','title'));
    }

    public function projects()
    {
        $title = 'مشاريع اتقان';
        $all_projects = Portfolio::with(['translations'])->get();
        return view('frontmodule::pages.projects',compact('title','all_projects'));
    }

    public function projects_cat($id)
    {
        $projectsCat = PortfolioCategory::find($id);
        $title = $projectsCat->title;
        //dd($projects);
        return view('frontmodule::pages.projects_cat',compact('title','projectsCat'));
    }

    public function single_project($titlo)
    {
        $portfolios = Portfolio::with(['translations','portfolio_photo'])->get();
        foreach ($portfolios as $portfolio){
            if ($portfolio->title == str_replace('-',' ',$titlo)){
                $project = Portfolio::with(['translations','portfolio_photo','portfolio_category'])->find($portfolio->id);
            }
        }

//        $project = DB::table('portfolio')
//            ->join('portfolio_translation', 'portfolio.id','=','portfolio_translation.portfolio_id')
//            ->join('portfolio_photo', 'portfolio.id','=','portfolio_photo.portfolio_id')
//            ->select('portfolio.*', 'portfolio_translation.*','portfolio_photo.*')
//            ->where('title',str_replace('-',' ',$titlo))
//            ->first();
        //dd($project);

        $title = $project->title;
        return view('frontmodule::pages.single_project',compact('title','project'));
    }

    public function services(Request $request)
    {
        if ($request->has('search')){
//            $services = Service::with(['translations'])
//                ->where('title','like','%' . $request->search . '%')
//                ->get();
            $services = DB::table('service')
                ->join('service_translation', 'service.id','=','service_translation.service_id')
                ->select('service.*', 'service_translation.*')
                ->where('title','like','%'. $request->search .'%')
                ->orderBy('created_at','desc')
//                ->orWhere('description','like','%'. $request->search .'%')
                ->get();
        }else{
            $services = Service::with(['translations'])->orderBy('created_at','desc')->paginate(12);
        }
        $title = 'الخدمات';
        return view('frontmodule::pages.services',compact('title','services'));
    }

    public function single_service($titlo)
    {
        $services = Service::with(['translations'])->get();
        $service = Service::all()->where('title',str_replace('-',' ',$titlo))->first();
        $title = $service->title;
        return view('frontmodule::pages.single_service',compact('title','service','services'));
    }

    public function blogs()
    {
        $title = 'اخبارنا';
        $blogs = Blog::with(['translations'])->orderBy('created_at','desc')->paginate(9);
        return view('frontmodule::pages.blog',compact('title','blogs'));
    }

    public function single_blog($titlo)
    {
        $blogs = Blog::with(['translations'])->get();
        $blog = Blog::all()->where('title',str_replace('-',' ',$titlo))->first();

        $prevBlog = Blog::all()->where('id','<',$blog->id)->first();
        $nextBlog = Blog::all()->where('id','>',$blog->id)->first();
        $title = $blog->title;
        return view('frontmodule::pages.single_blog',compact('title','blog','blogs','prevBlog','nextBlog'));
    }

    public function contact()
    {
        $title = 'اتصل بنا';
        return view('frontmodule::pages.question',compact('title'));
    }

    public function contact_post(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $prof = Contactus::create($data);

        return response()->json($prof);
    }

    public function front_project_get(Request $request)
    {
        $projects = PortfolioCategory::find($request->project_category)->portfolio;
        return response()->json(['projects'=>$projects]);
    }


}
