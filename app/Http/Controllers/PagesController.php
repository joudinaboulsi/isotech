<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Repositories\PagesRepository;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Mail;
use SEO;
use SEOMeta;

class PagesController extends Controller
{
    public function __construct(PagesRepository $pagesRepository)
    {
        $this->pagesRepository = $pagesRepository;
    }

    //Home page
    public function home()
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle('Isotech Co Aluminum & Glass - Since 1992', false);
        SEO::setDescription(
            'Isotech Co is a well-established professional company that specializes in the manufacturing, assembly and the installation of all kinds of architectural designs that have to do with aluminum and glass production, Isotech Co has a very strong reputation in the market earned thanks to its imposing presence and the hard work it gave for 25 years. Making it one of the most reputable and professional companies in the market.'
        );
        SEOMeta::setKeywords(
            'Isotech, Isotech Co, Aluminum & Glass, Aluminium, aluminum and glass production, manufacturing, assembly, installation, architectural designs'
        );
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('/images/og-image.jpg');

        $featured = $this->pagesRepository->showFeatured();
        return view('home', compact('featured'));
    }

    //about page
    public function about()
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle('Isotech Co Aluminum & Glass - Since 1992', false);
        SEO::setDescription(
            'Isotech Co is a well-established professional company that specializes in the manufacturing, assembly and the installation of all kinds of architectural designs that have to do with aluminum and glass production, Isotech Co has a very strong reputation in the market earned thanks to its imposing presence and the hard work it gave for 25 years. Making it one of the most reputable and professional companies in the market.'
        );
        SEOMeta::setKeywords(
            'Isotech, Isotech Co, Aluminum & Glass, Aluminium, aluminum and glass production, manufacturing, assembly, installation, architectural designs'
        );
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('/images/og-image.jpg');

        return view('about');
    }

    //portfolio page
    public function portfolio()
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle('Isotech Co Aluminum & Glass - Since 1992', false);
        SEO::setDescription(
            'Isotech Co is a well-established professional company that specializes in the manufacturing, assembly and the installation of all kinds of architectural designs that have to do with aluminum and glass production, Isotech Co has a very strong reputation in the market earned thanks to its imposing presence and the hard work it gave for 25 years. Making it one of the most reputable and professional companies in the market.'
        );
        SEOMeta::setKeywords(
            'Isotech, Isotech Co, Aluminum & Glass, Aluminium, aluminum and glass production, manufacturing, assembly, installation, architectural designs'
        );
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('/images/og-image.jpg');

        $projects = $this->pagesRepository->show();
        // dd($projects);
        return view('portfolio', compact('projects'));
    }

    //products page
    public function products()
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle('Isotech Co Aluminum & Glass - Since 1992', false);
        SEO::setDescription(
            'Isotech Co is a well-established professional company that specializes in the manufacturing, assembly and the installation of all kinds of architectural designs that have to do with aluminum and glass production, Isotech Co has a very strong reputation in the market earned thanks to its imposing presence and the hard work it gave for 25 years. Making it one of the most reputable and professional companies in the market.'
        );
        SEOMeta::setKeywords(
            'Isotech, Isotech Co, Aluminum & Glass, Aluminium, aluminum and glass production, manufacturing, assembly, installation, architectural designs'
        );
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('/images/og-image.jpg');

        $categories = $this->pagesRepository->getCategories();
        $products = $this->pagesRepository->getProducts();
        return view('products', compact('categories', 'products'));
    }

    //quality page
    public function quality()
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle('Isotech Co Aluminum & Glass - Since 1992', false);
        SEO::setDescription(
            'Isotech Co is a well-established professional company that specializes in the manufacturing, assembly and the installation of all kinds of architectural designs that have to do with aluminum and glass production, Isotech Co has a very strong reputation in the market earned thanks to its imposing presence and the hard work it gave for 25 years. Making it one of the most reputable and professional companies in the market.'
        );
        SEOMeta::setKeywords(
            'Isotech, Isotech Co, Aluminum & Glass, Aluminium, aluminum and glass production, manufacturing, assembly, installation, architectural designs'
        );
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('/images/og-image.jpg');

        return view('quality');
    }

    //contact page
    public function contact()
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle('Isotech Co Aluminum & Glass - Since 1992', false);
        SEO::setDescription(
            'Isotech Co is a well-established professional company that specializes in the manufacturing, assembly and the installation of all kinds of architectural designs that have to do with aluminum and glass production, Isotech Co has a very strong reputation in the market earned thanks to its imposing presence and the hard work it gave for 25 years. Making it one of the most reputable and professional companies in the market.'
        );
        SEOMeta::setKeywords(
            'Isotech, Isotech Co, Aluminum & Glass, Aluminium, aluminum and glass production, manufacturing, assembly, installation, architectural designs'
        );
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('/images/og-image.jpg');

        return view('contact');
    }

    //Get the contact form details and send the mail
    public function getContactForm(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $email_client = $request->input('email');
        $msg_client = $request->input('message');

        // initialize an instance of Nocaptcha
        $captcha = new \Anhskohbo\NoCaptcha\NoCaptcha(
            env('NOCAPTCHA_SECRET'),
            env('NOCAPTCHA_SITEKEY')
        );

        // if form is full
        if (!empty($_POST)) {
            $captcha_resp = $captcha->verifyResponse(
                $_POST['g-recaptcha-response']
            );
            if ($captcha_resp == true) {
                // send email to admin
                Mail::send(
                    'emails.contact',
                    [
                        'name' => $name,
                        'email_client' => $email_client,
                        'subject' => $subject,
                        'phone' => $phone,
                        'msg_client' => $msg_client,
                    ],
                    function ($message) use ($email_client, $name, $subject) {
                        $message->from($email_client, $name);
                        $message
                            ->to('info@isotechlb.com')
                            ->subject('Message from Website: ' . $subject); //info@webneoo.com
                    }
                );

                \Session::flash('msg', 'Successfully sent!');
                return redirect()->back();
            }
        }
    }
}
