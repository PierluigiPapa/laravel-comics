<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $links = [
        [
            'url' => '/',
            'label' => 'CHARACTERS',
            'active' => true
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false
        ],
    ];

    $mainLinks = [
        [
            'image' => "buy-comics-digital-comics.png",
            'text' => "DIGITAL COMICS"
        ],
        [
            'image' => "buy-comics-merchandise.png",
            'text' => "DC MERCHANDISE"
        ],
        [
            'image' => "buy-comics-subscriptions.png",
            'text' => "SUBSCRIPTION"
        ],
        [
            'image' => "buy-comics-shop-locator.png",
            'text' => "COMIC SHOP LOCATOR"
        ],
        [
            'image' => "buy-dc-power-visa.svg",
            'text' => "DC POWER VISA"
        ],
    ];
    $footerLinks = [
        "DC COMICS" => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        "DC" => [
            'Terms of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        "SITES" => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        "SHOP" => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];
    $socialNetworkLinks = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ];

    $comics = config('comics');

    return view('subpages.characters', compact('links', 'comics', 'mainLinks','footerLinks', 'socialNetworkLinks'));
});

Route::get('/comics', function () {
    $links = [
        [
            'url' => '/',
            'label' => 'CHARACTERS',
            'active' => true
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false
        ],
    ];

    $mainLinks = [
        [
            'image' => "buy-comics-digital-comics.png",
            'text' => "DIGITAL COMICS"
        ],
        [
            'image' => "buy-comics-merchandise.png",
            'text' => "DC MERCHANDISE"
        ],
        [
            'image' => "buy-comics-subscriptions.png",
            'text' => "SUBSCRIPTION"
        ],
        [
            'image' => "buy-comics-shop-locator.png",
            'text' => "COMIC SHOP LOCATOR"
        ],
        [
            'image' => "buy-dc-power-visa.svg",
            'text' => "DC POWER VISA"
        ],
    ];
    $footerLinks = [
        "DC COMICS" => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        "DC" => [
            'Terms of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        "SITES" => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        "SHOP" => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];
    $socialNetworkLinks = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ];

    $comics = config('comics');

    return view('subpages.comics', compact('links', 'comics', 'mainLinks','footerLinks', 'socialNetworkLinks'));
});

Route::get('/collectibles', function () {
    $links = [
        [
            'url' => '/',
            'label' => 'CHARACTERS',
            'active' => true
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false
        ],
    ];

    $mainLinks = [
        [
            'image' => "buy-comics-digital-comics.png",
            'text' => "DIGITAL COMICS"
        ],
        [
            'image' => "buy-comics-merchandise.png",
            'text' => "DC MERCHANDISE"
        ],
        [
            'image' => "buy-comics-subscriptions.png",
            'text' => "SUBSCRIPTION"
        ],
        [
            'image' => "buy-comics-shop-locator.png",
            'text' => "COMIC SHOP LOCATOR"
        ],
        [
            'image' => "buy-dc-power-visa.svg",
            'text' => "DC POWER VISA"
        ],
    ];
    $footerLinks = [
        "DC COMICS" => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        "DC" => [
            'Terms of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        "SITES" => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        "SHOP" => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];
    $socialNetworkLinks = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ];

    $comics = config('comics');

    return view('subpages.collectibles', compact('links', 'comics', 'mainLinks','footerLinks', 'socialNetworkLinks'));
});

Route::get('/fans', function () {
    $links = [
        [
            'url' => '/',
            'label' => 'CHARACTERS',
            'active' => true
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false
        ],
    ];

    $mainLinks = [
        [
            'image' => "buy-comics-digital-comics.png",
            'text' => "DIGITAL COMICS"
        ],
        [
            'image' => "buy-comics-merchandise.png",
            'text' => "DC MERCHANDISE"
        ],
        [
            'image' => "buy-comics-subscriptions.png",
            'text' => "SUBSCRIPTION"
        ],
        [
            'image' => "buy-comics-shop-locator.png",
            'text' => "COMIC SHOP LOCATOR"
        ],
        [
            'image' => "buy-dc-power-visa.svg",
            'text' => "DC POWER VISA"
        ],
    ];
    $footerLinks = [
        "DC COMICS" => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        "DC" => [
            'Terms of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        "SITES" => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        "SHOP" => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];
    $socialNetworkLinks = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ];

    $comics = config('comics');

    return view('subpages.fans', compact('links', 'comics', 'mainLinks','footerLinks', 'socialNetworkLinks'));
});


Route::get('/games', function () {
    $links = [
        [
            'url' => '/',
            'label' => 'CHARACTERS',
            'active' => true
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false
        ],
    ];

    $mainLinks = [
        [
            'image' => "buy-comics-digital-comics.png",
            'text' => "DIGITAL COMICS"
        ],
        [
            'image' => "buy-comics-merchandise.png",
            'text' => "DC MERCHANDISE"
        ],
        [
            'image' => "buy-comics-subscriptions.png",
            'text' => "SUBSCRIPTION"
        ],
        [
            'image' => "buy-comics-shop-locator.png",
            'text' => "COMIC SHOP LOCATOR"
        ],
        [
            'image' => "buy-dc-power-visa.svg",
            'text' => "DC POWER VISA"
        ],
    ];
    $footerLinks = [
        "DC COMICS" => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        "DC" => [
            'Terms of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        "SITES" => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        "SHOP" => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];
    $socialNetworkLinks = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ];

    $comics = config('comics');

    return view('subpages.games', compact('links', 'comics', 'mainLinks','footerLinks', 'socialNetworkLinks'));
});

Route::get('/movies', function () {
    $links = [
        [
            'url' => '/',
            'label' => 'CHARACTERS',
            'active' => true
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false
        ],
    ];

    $mainLinks = [
        [
            'image' => "buy-comics-digital-comics.png",
            'text' => "DIGITAL COMICS"
        ],
        [
            'image' => "buy-comics-merchandise.png",
            'text' => "DC MERCHANDISE"
        ],
        [
            'image' => "buy-comics-subscriptions.png",
            'text' => "SUBSCRIPTION"
        ],
        [
            'image' => "buy-comics-shop-locator.png",
            'text' => "COMIC SHOP LOCATOR"
        ],
        [
            'image' => "buy-dc-power-visa.svg",
            'text' => "DC POWER VISA"
        ],
    ];
    $footerLinks = [
        "DC COMICS" => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        "DC" => [
            'Terms of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        "SITES" => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        "SHOP" => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];
    $socialNetworkLinks = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ];

    $comics = config('comics');

    return view('subpages.movies', compact('links', 'comics', 'mainLinks','footerLinks', 'socialNetworkLinks'));
});

Route::get('/news', function () {
    $links = [
        [
            'url' => '/',
            'label' => 'CHARACTERS',
            'active' => true
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false
        ],
    ];

    $mainLinks = [
        [
            'image' => "buy-comics-digital-comics.png",
            'text' => "DIGITAL COMICS"
        ],
        [
            'image' => "buy-comics-merchandise.png",
            'text' => "DC MERCHANDISE"
        ],
        [
            'image' => "buy-comics-subscriptions.png",
            'text' => "SUBSCRIPTION"
        ],
        [
            'image' => "buy-comics-shop-locator.png",
            'text' => "COMIC SHOP LOCATOR"
        ],
        [
            'image' => "buy-dc-power-visa.svg",
            'text' => "DC POWER VISA"
        ],
    ];
    $footerLinks = [
        "DC COMICS" => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        "DC" => [
            'Terms of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        "SITES" => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        "SHOP" => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];
    $socialNetworkLinks = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ];

    $comics = config('comics');

    return view('subpages.news', compact('links', 'comics', 'mainLinks','footerLinks', 'socialNetworkLinks'));
});

Route::get('/shop', function () {
    $links = [
        [
            'url' => '/',
            'label' => 'CHARACTERS',
            'active' => true
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false
        ],
    ];

    $mainLinks = [
        [
            'image' => "buy-comics-digital-comics.png",
            'text' => "DIGITAL COMICS"
        ],
        [
            'image' => "buy-comics-merchandise.png",
            'text' => "DC MERCHANDISE"
        ],
        [
            'image' => "buy-comics-subscriptions.png",
            'text' => "SUBSCRIPTION"
        ],
        [
            'image' => "buy-comics-shop-locator.png",
            'text' => "COMIC SHOP LOCATOR"
        ],
        [
            'image' => "buy-dc-power-visa.svg",
            'text' => "DC POWER VISA"
        ],
    ];
    $footerLinks = [
        "DC COMICS" => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        "DC" => [
            'Terms of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        "SITES" => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        "SHOP" => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];
    $socialNetworkLinks = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ];

    $comics = config('comics');

    return view('subpages.shop', compact('links', 'comics', 'mainLinks','footerLinks', 'socialNetworkLinks'));
});

Route::get('/tv', function () {
    $links = [
        [
            'url' => '/',
            'label' => 'CHARACTERS',
            'active' => true
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false
        ],
    ];

    $mainLinks = [
        [
            'image' => "buy-comics-digital-comics.png",
            'text' => "DIGITAL COMICS"
        ],
        [
            'image' => "buy-comics-merchandise.png",
            'text' => "DC MERCHANDISE"
        ],
        [
            'image' => "buy-comics-subscriptions.png",
            'text' => "SUBSCRIPTION"
        ],
        [
            'image' => "buy-comics-shop-locator.png",
            'text' => "COMIC SHOP LOCATOR"
        ],
        [
            'image' => "buy-dc-power-visa.svg",
            'text' => "DC POWER VISA"
        ],
    ];
    $footerLinks = [
        "DC COMICS" => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        "DC" => [
            'Terms of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        "SITES" => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        "SHOP" => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];
    $socialNetworkLinks = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ];

    $comics = config('comics');

    return view('subpages.tv', compact('links', 'comics', 'mainLinks','footerLinks', 'socialNetworkLinks'));
});

Route::get('/videos', function () {
    $links = [
        [
            'url' => '/',
            'label' => 'CHARACTERS',
            'active' => true
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false
        ],
    ];

    $mainLinks = [
        [
            'image' => "buy-comics-digital-comics.png",
            'text' => "DIGITAL COMICS"
        ],
        [
            'image' => "buy-comics-merchandise.png",
            'text' => "DC MERCHANDISE"
        ],
        [
            'image' => "buy-comics-subscriptions.png",
            'text' => "SUBSCRIPTION"
        ],
        [
            'image' => "buy-comics-shop-locator.png",
            'text' => "COMIC SHOP LOCATOR"
        ],
        [
            'image' => "buy-dc-power-visa.svg",
            'text' => "DC POWER VISA"
        ],
    ];
    $footerLinks = [
        "DC COMICS" => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News',
        ],
        "DC" => [
            'Terms of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        "SITES" => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa'
        ],
        "SHOP" => [
            'Shop DC',
            'Shop DC Collectibles'
        ]
    ];
    $socialNetworkLinks = [
        'footer-facebook.png',
        'footer-twitter.png',
        'footer-youtube.png',
        'footer-pinterest.png',
        'footer-periscope.png'
    ];

    $comics = config('comics');

    return view('subpages.videos', compact('links', 'comics', 'mainLinks','footerLinks', 'socialNetworkLinks'));
});
