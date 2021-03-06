<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'defaults' => [
        'page_description' => 'osu! - Der Rhythmus ist nur einen *Klick* entfernt!  Mit Ouendan/EBA, Taiko und eigenen Spielmodi, zusätzlich zu einem voll funktionalen Leveleditor',
    ],

    'header' => [
        'admin' => [
            'beatmapset' => 'beatmapset',
            'beatmapset_covers' => 'beatmapset covers',
            'contest' => 'wettbewerb',
            'contests' => 'wettbewerbe',
            'root' => 'konsole',
            'store_orders' => 'store admin',
        ],

        'artists' => [
            'index' => 'liste',
        ],

        'changelog' => [
            'index' => 'liste',
        ],

        'help' => [
            'index' => 'index',
            'sitemap' => '',
        ],

        'store' => [
            'cart' => 'warenkorb',
            'orders' => 'bestellverlauf',
            'products' => 'produkte',
        ],

        'tournaments' => [
            'index' => 'liste',
        ],

        'users' => [
            'modding' => 'modding',
            'show' => 'info',
        ],
    ],

    'gallery' => [
        'close' => 'Schließen (Esc)',
        'fullscreen' => 'Vollbild umschalten',
        'zoom' => 'Vergrößern/Verkleinern',
        'previous' => 'Vorheriges (Pfeil links)',
        'next' => 'Weiter (Pfeil rechts)',
    ],

    'menu' => [
        'beatmaps' => [
            '_' => 'beatmaps',
            'artists' => 'featured artists',
            'index' => 'auflistung',
            'packs' => 'pakete',
        ],
        'community' => [
            '_' => 'community',
            'chat' => 'chat',
            'contests' => 'wettbewerbe',
            'dev' => 'entwicklung',
            'forum-forums-index' => 'forum',
            'getLive' => 'live',
            'tournaments' => 'turniere',
        ],
        'help' => [
            '_' => 'hilfe',
            'getFaq' => 'faq',
            'getRules' => 'regeln',
            'getSupport' => 'ich brauche wirklich hilfe!',
            'getWiki' => 'wiki',
        ],
        'home' => [
            '_' => 'home',
            'changelog-index' => 'changelog',
            'getDownload' => 'download',
            'news-index' => 'news',
            'search' => 'suche',
            'team' => 'team',
        ],
        'rankings' => [
            '_' => 'ranglisten',
            'charts' => 'charts',
            'country' => 'länder',
            'index' => 'performance',
            'kudosu' => 'kudosu',
            'score' => 'punkte',
        ],
        'store' => [
            '_' => 'shop',
            'cart-show' => 'warenkorb',
            'getListing' => 'produkte',
            'orders-index' => 'bestellverlauf',
        ],
    ],

    'footer' => [
        'general' => [
            '_' => 'Allgemein',
            'home' => 'Home',
            'changelog-index' => 'Changelog',
            'beatmaps' => 'Beatmap-Auflistung',
            'download' => 'osu! herunterladen',
        ],
        'help' => [
            '_' => 'Hilfe & Community',
            'faq' => '\'Frequently Asked Questions\'',
            'forum' => 'Community-Foren',
            'livestreams' => 'Livestreams',
            'report' => 'Einen Fehler melden',
            'wiki' => '',
        ],
        'legal' => [
            '_' => 'Rechtliches & Status',
            'copyright' => 'Copyright (DMCA)',
            'privacy' => 'Privatsphäre',
            'server_status' => 'Serverstatus',
            'source_code' => 'Quellcode',
            'terms' => 'Nutzungsbedingungen',
        ],
    ],

    'errors' => [
        '400' => [
            'error' => '',
            'description' => '',
        ],
        '404' => [
            'error' => 'Seite fehlt',
            'description' => "Sorry, aber die angeforderte Seite existiert nicht!",
        ],
        '403' => [
            'error' => "Du solltest nicht hier sein.",
            'description' => 'Du könntest versuchen, zurückzugehen.',
        ],
        '401' => [
            'error' => "Du solltest nicht hier sein.",
            'description' => 'Du könntest versuchen, zurückzugehen. Oder dich einloggen.',
        ],
        '405' => [
            'error' => 'Seite fehlt',
            'description' => "Sorry, aber die angeforderte Seite existiert nicht!",
        ],
        '422' => [
            'error' => '',
            'description' => '',
        ],
        '500' => [
            'error' => 'Oh nein! Irgendwas ist schief gelaufen! ;_;',
            'description' => "Wir werden automatisch über jeden Fehler benachrichtigt.",
        ],
        'fatal' => [
            'error' => 'Oh nein! Irgendwas ist extrem schief gelaufen! ;_;',
            'description' => "Wir werden automatisch über jeden Fehler benachrichtigt.",
        ],
        '503' => [
            'error' => 'Wegen Wartung nicht erreichbar!',
            'description' => "Wartungen können von 5 Sekunden bis zu 10 Minuten dauern. Sollten wir länger nicht erreichbar sein, schau bei :link für mehr Informationen.",
            'link' => [
                'text' => '@osustatus',
                'href' => 'https://twitter.com/osustatus',
            ],
        ],
        // used by sentry if it returns an error
        'reference' => "Nur zur Sicherheit ist hier noch ein Code, den du dem Support geben kannst!",
    ],

    'popup_login' => [
        'login' => [
            'forgot' => "Passwort vergessen",
            'password' => 'passwort',
            'title' => 'Zum Fortfahren einloggen',
            'username' => 'Benutzername',

            'error' => [
                'email' => "Nutzername oder E-Mail-Adresse existiert nicht",
                'password' => 'Falsches Passwort',
            ],
        ],

        'register' => [
            'download' => 'Herunterladen',
            'info' => 'Sie brauchen einen Account, Sir. Warum besitzen Sie noch keinen?',
            'title' => "Kein Account?",
        ],
    ],

    'popup_user' => [
        'links' => [
            'account-edit' => 'Einstellungen',
            'friends' => 'Freunde',
            'logout' => 'Ausloggen',
            'profile' => 'Mein Profil',
        ],
    ],

    'popup_search' => [
        'initial' => 'Zum Suchen Text eingeben!',
        'retry' => 'Suche fehlgeschlagen. Klicke, um es erneut zu versuchen.',
    ],
];
