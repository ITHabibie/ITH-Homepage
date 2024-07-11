<?php

namespace App\Http\Controllers;

use App\Models\{Topbar, Category, Tag, Post, Page, FrontNavbar, typesatu, Contact, Jumbotron, Link, PmbLink};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('index', $data);
    }

    public function dokumen()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('tentangITH.dokumen', $data);
    }

    public function profil()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('tentangITH.profil', $data);
    }

    public function fasilitas()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('kehidupanKampus.fasilitas', $data);
    }

    public function kantin()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('kehidupanKampus.kantin', $data);
    }
    public function prestasi()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('tentangITH.prestasi', $data);
    }
    public function organisasi()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('tentangITH.organisasi', $data);
    }

    public function peta()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('kehidupanKampus.peta-kampus', $data);
    }

    public function ukm()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('kehidupanKampus.peta-kampus', $data);
    }
    public function pkm()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('penelitian.pkm', $data);
    }

    public function perpustakaan()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('kehidupanKampus.perpustakaan', $data);
    }

    public function profileJurusan()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('tentangITH.profil-lulusan', $data);
    }

    public function visi_misi()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('tentangITH.visi_misi', $data);
    }

    public function kalender()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('akademik.kalender', $data);
    }

    public function akreditasi()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('akademik.akreditasi', $data);
    }

    public function seleksi()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('akademik.seleksiMasuk', $data);
    }

    public function beasiswa()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('akademik.beasiswa', $data);
    }

    public function programSarjana()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('akademik.programSarjana', $data);
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

    public function mars()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('tentangITH.mars', $data);
    }

    public function sejarah()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('tentangITH.sejarah', $data);
    }

    public function camaba()
    {
        $data = [
            'postsInfo' => Post::where('category_id', 1)->latest()->limit(4)->get(),
            'contact' => Contact::first(),
            'topbar' => Topbar::first(),
            'pmb' => PmbLink::first(),
            'jumbotron' => Jumbotron::first(),
            'postsNews' => Post::where('category_id', 3)->latest()->limit(3)->get(),
            'postsEvents' => Post::where('category_id', 4)->latest()->limit(5)->get(),
            'postsAnnounce' => Post::where('category_id', 5)->latest()->limit(5)->get(),
            'page' => Page::first(),
            'navbarmenu' => FrontNavbar::get(),
            'link' => Link::get(),
            'top' => typesatu::where('status', 1)->where('alt3', 1)->first(),
            'mid' => typesatu::where('status', 1)->where('alt3', 2)->first(),
            'bottom' => typesatu::where('status', 1)->where('alt3', 3)->first()
        ];

        return view('topbar.camaba', $data);
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
        if (__('cek.lang') == 'id') {
            $judul = $getPost->title;
            $isi = $getPost->desc;
        } else {
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

    public function showNav($pages = null, $slug)
    {
        $getData = FrontNavbar::where('slug', $slug)->first();

        if ($getData == null) {
            abort(404);
        }

        if (__('cek.lang') == 'id') {
            $judul = $getData->indtitle;
            $isi = $getData->content;
        } else {
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

        if ($getData == null) {
            abort(404);
        }

        // dd($slug);
        if (__('cek.lang') == 'id') {
            $judul = $getData->indtitle;
            $isi = $getData->content;
        } else {
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
        return view('welcome', compact('category', 'posts'));
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
        return view('showTags', compact('tag', 'posts'), $data);
    }

    public function search(Request $request)
    {
        if ($request->search) {
            if (__('cek.lang') == 'id') {
                $post = Post::latest()->with(['user'])->where('title', 'like', '%' . $request->search . '%');
            } else {
                $post = Post::latest()->with(['user'])->where('engtitle', 'like', '%' . $request->search . '%');
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
        } else {
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
            $post = Post::latest()->with(['user'])->where('category_id', $request->id);
            $titles = Post::latest()->with(['user'])->where('category_id', $request->id)->first();
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

    public function checkSlug(Request $request)
    {
        $halo = 'halo';
        echo $halo;
    }
}
