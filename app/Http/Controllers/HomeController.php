<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Message;
use App\Models\Room;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\exactly;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $slider = Hotel::select('id','title', 'image','category_id','city','slug')->limit(4)->get();
        $setting = Setting::first();
        $firsat = Hotel::select('id','title', 'image','category_id','city','slug','address','country')->limit(3)->inRandomOrder()->get();
        $last= Hotel::select('id','title', 'image','category_id','city','slug','address','country')->limit(3)->orderByDesc('id')->get();
        $picked = Hotel::select('id','title', 'image','category_id','city','slug','address','country')->limit(3)->inRandomOrder()->get();
#print_r($picked);
#exit();
        $data = [
            'setting' => $setting,
            'slider'=>$slider,
            'firsat'=>$firsat,
            'last'=>$last,
            'picked'=>$picked,
            'page' => 'home'
        ];
        return view('home.index', $data);
    }

    public function hotel($id,$slug)
    {
        $setting=Setting::first();
        $data=Hotel::find($id);
        $rooms=Room::where('hotel_id',$id)->get();
        $datalist=Image::where('hotel_id',$id)->get();
        return view('home.hotel_detail',['setting'=>$setting,'data'=>$data,'datalist'=>$datalist,'rooms'=>$rooms]);
    }

    public function categoryhotels($id,$slug)
    {
        $datalist=Hotel::where('category_id',$id)->get();
        $data=Category::find($id);

        return view('home.category_hotels',['data'=>$data,'datalist'=>$datalist]);
    }
    public function addtocard($id)
    {
        echo "Add to Cart <br>";
        $data=Hotel::find($id);
    print_r($data);
    exit();
    }
    public function aboutus()
    {

        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
    }

    public function fag()
    {
        return view('home.fag');
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('success', 'Mesajınız başarılı bir şekilde kaydedilmiştir!');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');

            }
            return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',]
            );

        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
