
<?php // controller with topbar

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Topbar, Category, Tag, Post, Page, FrontNavbar, typesatu, Contact, Jumbotron, Link, PmbLink};

class FrontController extends Controller
{

    public function index()
    {
        $data = [
        'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
        'contact' => Contact::first(),
        'topbar' => Topbar::first(),
        'pmb' => PmbLink::first(),
        'jumbotron' => Jumbotron::first(),
        'postsNews' => Post::where('category_id', 2)->latest()->limit(4)->get(),
        'page' => Page::first(),
        'navbarmenu' => FrontNavbar::get(),
        'link' => Link::get(),
        'top' => typesatu::where('status',1)->where('alt3',1)->first(),
        'mid' => typesatu::where('status',1)->where('alt3',2)->first(),
        'bottom' => typesatu::where('status',1)->where('alt3',3)->first()
        ];

        return view('index', $data);
    }

    public function kontakku()
    {
        $data = [
        'contact' => Contact::first(),
        'page' => Page::first(),
        'pmb' => PmbLink::first(),
        'link' => Link::get(),
        'navbarmenu' => FrontNavbar::get(),
        ];

        return view('contact', $data);
    }

    public function topbar()
    {
        $data = [
        'topbar' => Topbar::first(),
        'page' => Page::first(),
        'pmb' => PmbLink::first(),
        'link' => Link::get(),
        'navbarmenu' => FrontNavbar::get(),
        ];

        return view('contact', $data);
    }
    

    public function show($slug)
    {
        $getPost = Post::where('slug', $slug)->first();
        if(__('cek.lang') == 'id'){
            $judul = $getPost->title;
            $isi = $getPost->desc;
        }else{
            $judul = $getPost->engtitle;
            $isi = $getPost->eng;
        }
        $data = [
            'post' => Post::where('slug', $slug)->first(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'kategori' => Category::get(),
            'link' => Link::get(),
            'judul' => $judul,
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
        'pmb' => PmbLink::first(),
        'isi' => $isi,
            ];

        return view('showPost', $data);
    }

    public function showNav($pages=null, $slug)
    {
        $getData = FrontNavbar::where('slug', $slug)->first();

        if($getData == null){
            abort(404);
        }

        if(__('cek.lang') == 'id'){
            $judul = $getData->indtitle;
            $isi = $getData->content;
        }else{
            $judul = $getData->engtitle;
            $isi = $getData->inggris;
        }

        $data = [
            'post' => FrontNavbar::where('slug', $slug)->first(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'judul' => $judul,
            'isi' => $isi,
            'link' => Link::get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
        'pmb' => PmbLink::first(),
        'slug' => $slug,
            ];
        return view('showNav', $data);
    }

    public function showNavs($slug)
    {
        $getData = FrontNavbar::where('slug', $slug)->first();

        if($getData == null){
            abort(404);
        }

        // dd($slug);
        if(__('cek.lang') == 'id'){
            $judul = $getData->indtitle;
            $isi = $getData->content;
        }else{
            $judul = $getData->engtitle;
            $isi = $getData->inggris;
        }

        $data = [
            'post' => FrontNavbar::where('slug', $slug)->first(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'judul' => $judul,
            'isi' => $isi,
            'link' => Link::get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
        'pmb' => PmbLink::first(),
        'slug' => $slug,
            ];
        return view('showNav', $data);
    }

    public function category(Category $category)
    {
        $posts = $category->posts()->latest()->get();
        return view ('welcome',compact('category','posts'));
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts()->latest()->get();

        $data = [
            'page' => Page::first(),
        'pmb' => PmbLink::first(),
        'link' => Link::get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'navbarmenu' => FrontNavbar::get(),
            ];
        return view ('showTags',compact('tag','posts'),$data);
    }

    public function search(Request $request)
    {
        if ($request->search) {
            if(__('cek.lang') == 'id') {
                $post =Post::latest()->with(['user'])->where('title', 'like', '%' . $request->search . '%');
            }else{
                $post =Post::latest()->with(['user'])->where('engtitle', 'like', '%' . $request->search . '%');
            }
            $data = [
                'page' => Page::first(),
        'pmb' => PmbLink::first(),
            'link' => Link::get(),
            'navbarmenu' => FrontNavbar::get(),
                'contact' => Contact::first(),
                'topbar' => Topbar::first(),
                'serchPost' => $post->paginate(6)->withQueryString(),
                ];
        }else{
            $data = [
                'page' => Page::first(),
        'pmb' => PmbLink::first(),
            'link' => Link::get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'navbarmenu' => FrontNavbar::get(),
                // 'serchPost' => $post->paginate(4)->withQueryString(),
                ];
        }

        return view('showSearch', $data);

    }

    public function byCategory(Request $request)
    {
        if ($request->id) {
                $post =Post::latest()->with(['user'])->where('category_id', $request->id);
                $titles =Post::latest()->with(['user'])->where('category_id', $request->id)->first();
        }
        $data = [
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
        'pmb' => PmbLink::first(),
        'link' => Link::get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'titles' => $titles,
            'serchPost' => $post->paginate(6)->withQueryString(),
            ];
        return view('showSearch', $data);

    }

}

