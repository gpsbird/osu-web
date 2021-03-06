<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'defaults' => [
        'page_description' => 'osu! - Rytmen er bare et *klikk* unna! Med Ouendan/EBA, Taiko og originale spillmoduser, samt en fullt funskjonell nivåredigerer.',
    ],

    'header' => [
        'admin' => [
            'beatmapset' => '',
            'beatmapset_covers' => '',
            'contest' => '',
            'contests' => '',
            'root' => '',
            'store_orders' => '',
        ],

        'artists' => [
            'index' => '',
        ],

        'changelog' => [
            'index' => '',
        ],

        'help' => [
            'index' => '',
            'sitemap' => '',
        ],

        'store' => [
            'cart' => '',
            'orders' => '',
            'products' => '',
        ],

        'tournaments' => [
            'index' => '',
        ],

        'users' => [
            'modding' => '',
            'show' => '',
        ],
    ],

    'gallery' => [
        'close' => 'Lukk (Esc)',
        'fullscreen' => '',
        'zoom' => 'Zoom inn/ut',
        'previous' => '',
        'next' => '',
    ],

    'menu' => [
        'beatmaps' => [
            '_' => 'beatmaps',
            'artists' => 'featured artists',
            'index' => 'liste',
            'packs' => 'pakker',
        ],
        'community' => [
            '_' => 'samfunnet',
            'chat' => 'chat',
            'contests' => 'konkurranser',
            'dev' => 'utvikling',
            'forum-forums-index' => 'forum',
            'getLive' => 'direktesendinger',
            'tournaments' => 'turneringer',
        ],
        'help' => [
            '_' => 'hjelp',
            'getFaq' => 'faq',
            'getRules' => 'regler',
            'getSupport' => 'nei, virkelig, jeg trenger hjelp!',
            'getWiki' => 'wiki',
        ],
        'home' => [
            '_' => 'hjem',
            'changelog-index' => 'endringslogg',
            'getDownload' => 'last ned',
            'news-index' => 'nyheter',
            'search' => 'søk',
            'team' => 'skapere',
        ],
        'rankings' => [
            '_' => 'rangering',
            'charts' => 'rampelyset',
            'country' => 'land',
            'index' => 'prestasjon',
            'kudosu' => 'kudosu',
            'score' => 'poengsum',
        ],
        'store' => [
            '_' => 'butikk',
            'cart-show' => 'handlekurv',
            'getListing' => 'katalog',
            'orders-index' => 'bestillingshistorikk',
        ],
    ],

    'footer' => [
        'general' => [
            '_' => 'Generelt',
            'home' => 'Hjem',
            'changelog-index' => 'Endringslogg',
            'beatmaps' => 'Beatmapliste',
            'download' => 'Last ned osu!',
        ],
        'help' => [
            '_' => 'Hjelp & Samfunn',
            'faq' => 'Ofte Stilte Spørsmål',
            'forum' => 'Brukerforum',
            'livestreams' => 'Direktesendinger',
            'report' => 'Rapportér en feil',
            'wiki' => '',
        ],
        'legal' => [
            '_' => 'Juridisk & Status',
            'copyright' => 'Opphavsrett (DMCA)',
            'privacy' => 'Personvern',
            'server_status' => 'Serverstatus',
            'source_code' => 'Kildekode',
            'terms' => 'Vilkår for bruk',
        ],
    ],

    'errors' => [
        '400' => [
            'error' => '',
            'description' => '',
        ],
        '404' => [
            'error' => 'Siden mangler',
            'description' => "Beklager, men siden som du forespurte er ikke her!",
        ],
        '403' => [
            'error' => "Du burde ikke være her.",
            'description' => 'Du kan derimot forsøke å gå tilbake.',
        ],
        '401' => [
            'error' => "Du burde ikke være her.",
            'description' => 'Du kan derimot forsøke å gå tilbake. Eller kanskje logge inn.',
        ],
        '405' => [
            'error' => 'Siden mangler',
            'description' => "Beklager, men siden du forespurte er ikke her!",
        ],
        '422' => [
            'error' => '',
            'description' => '',
        ],
        '500' => [
            'error' => 'Åh nei! Noe gikk i stykker! ;_;',
            'description' => "Vi blir automatisk informert om hver feilstilling.",
        ],
        'fatal' => [
            'error' => 'Åh nei! noe gikk virkelig i stykker! ;_;',
            'description' => "Vi blir automatisk informert om hver feilstilling.",
        ],
        '503' => [
            'error' => 'Nede for vedlikehold!',
            'description' => "Vedlikehold tar vanligvis noen steder mellom 5 sekunder til 10 minutter. Hvis vi er nede lengre enn dette, se :link for mer informasjon.",
            'link' => [
                'text' => '',
                'href' => '',
            ],
        ],
        // used by sentry if it returns an error
        'reference' => "Bare i tilfelle, her er en kode du kan gi til brukerstøtte!",
    ],

    'popup_login' => [
        'login' => [
            'forgot' => "Jeg har glemt kontoinformasjonen min",
            'password' => 'passord',
            'title' => 'Logg på for å fortsette',
            'username' => '',

            'error' => [
                'email' => "Brukernavn eller e-postadresse eksisterer ikke",
                'password' => 'Ugyldig passord',
            ],
        ],

        'register' => [
            'download' => 'Last ned',
            'info' => 'Du trenger en konto, min gode mann. Hvorfor har du ikke en allerede?',
            'title' => "Har du ikke en konto?",
        ],
    ],

    'popup_user' => [
        'links' => [
            'account-edit' => 'Innstillinger',
            'friends' => 'Venner',
            'logout' => 'Logg Ut',
            'profile' => 'Min Profil',
        ],
    ],

    'popup_search' => [
        'initial' => 'Skriv for å søke!',
        'retry' => 'Søk mislykket. Klikk for å prøve på nytt.',
    ],
];
