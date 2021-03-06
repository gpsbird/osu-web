<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'availability' => [
        'disabled' => 'Questa beatmap non è al momento disponibile per il download.',
        'parts-removed' => 'Porzioni di questa beatmap sono state rimosse su richiesta del creatore o di un titolare di copyright di terze parti.',
        'more-info' => 'Controlla qui per maggiori informazioni.',
    ],

    'index' => [
        'title' => 'Lista Beatmap',
        'guest_title' => 'Beatmap',
    ],

    'panel' => [
        'download' => [
            'all' => '',
            'video' => '',
            'no_video' => '',
            'direct' => '',
        ],
    ],

    'show' => [
        'discussion' => 'Discussione',

        'details' => [
            'favourite' => 'Mi piace questo beatmapset',
            'logged-out' => 'Devi avere effettuato il login prima di scaricare qualsiasi beatmap!',
            'mapped_by' => 'mappata da :mapper',
            'unfavourite' => 'Non mi piace questo set di beatmap',
            'updated_timeago' => 'ultimo aggiornamento :timeago',

            'download' => [
                '_' => 'Scarica',
                'direct' => 'osu!direct',
                'no-video' => 'senza Video',
                'video' => 'con Video',
            ],

            'login_required' => [
                'bottom' => 'per accedere a maggiori funzionalità',
                'top' => 'Accedi',
            ],
        ],

        'details_date' => [
            'approved' => 'approvata :timeago',
            'loved' => 'amata :timeago',
            'qualified' => 'qualificata :timeago',
            'ranked' => 'rankata :timeago',
            'submitted' => 'inviata :timeago',
            'updated' => 'ultimo aggiornamento :timeago',
        ],

        'favourites' => [
            'limit_reached' => 'Hai troppe beatmap preferite! Rimuovine qualcuna prima di riprovare.',
        ],

        'hype' => [
            'action' => 'Lascia Hype a questa beatmap se ti sei divertito a giocarla per aiutare a renderla <strong>Classificata</strong>.',

            'current' => [
                '_' => 'Questa mappa è attualmente :status.',

                'status' => [
                    'pending' => 'in attesa',
                    'qualified' => 'qualificata',
                    'wip' => 'work in progress',
                ],
            ],

            'disqualify' => [
                '_' => 'Se trovi un errore in questa beatmap, per favore segnalalo :link.',
                'button_title' => 'Squalifica una beatmap qualificata.',
            ],

            'report' => [
                '_' => 'Se trovi un problema con questa beatmap, segnalalo :link per avvisare il team.',
                'button' => 'Segnala un Problema',
                'button_title' => 'Segnala un problema di una beatmap qualificata.',
                'link' => 'qui',
            ],
        ],

        'info' => [
            'description' => 'Descrizione',
            'genre' => 'Genere',
            'language' => 'Lingua',
            'no_scores' => 'Dati ancora in elaborazione...',
            'points-of-failure' => 'Punti di Fallimento',
            'source' => 'Sorgente',
            'success-rate' => 'Rateo di Successo',
            'tags' => 'Tag',
            'unranked' => 'Beatmap non classificata',
        ],

        'scoreboard' => [
            'achieved' => 'ottenuto :when',
            'country' => 'Rank del Paese',
            'friend' => 'Rank degli Amici',
            'global' => 'Rank Globale',
            'supporter-link' => 'Clicca <a href=":link">qui</a> per vedere tutte le fantastiche funzionalità che otterrai!',
            'supporter-only' => 'Devi essere un osu!supporter per vedere i rank degli amici e del paese!',
            'title' => 'Classifica',

            'headers' => [
                'accuracy' => 'Precisione',
                'combo' => 'Max Combo',
                'miss' => 'Miss',
                'mods' => 'Mod',
                'player' => 'Giocatore',
                'pp' => '',
                'rank' => 'Rank',
                'score_total' => 'Punteggio Totale',
                'score' => 'Punteggio',
            ],

            'no_scores' => [
                'country' => 'Nessuno dal tuo paese ha fatto un punteggio in questa mappa!',
                'friend' => 'Nessuno dei tuoi amici ha fatto un punteggio in questa mappa!',
                'global' => 'Ancora nessun punteggio. Perché non provi a farne uno?',
                'loading' => 'Caricamento punteggi...',
                'unranked' => 'Beatmap non classificata.',
            ],
            'score' => [
                'first' => 'In testa',
                'own' => 'Il tuo miglior punteggio',
            ],
        ],

        'stats' => [
            'cs' => 'Dimensione Cerchi',
            'cs-mania' => 'Numero di Tasti',
            'drain' => 'Drenaggio HP',
            'accuracy' => 'Precisione',
            'ar' => 'Approach Rate',
            'stars' => 'Stelle di Difficoltà',
            'total_length' => 'Durata (Lunghezza drenaggio: :hit_length)',
            'bpm' => 'BPM',
            'count_circles' => 'Numero di Cerchi',
            'count_sliders' => 'Numero di Slider',
            'user-rating' => 'Voto degli Utenti',
            'rating-spread' => 'Diffusione della Valutazione',
            'nominations' => 'Nomine',
            'playcount' => 'Volte giocata',
        ],

        'status' => [
            'ranked' => 'Classificata',
            'approved' => 'Approvata',
            'loved' => 'Amata',
            'qualified' => 'Qualificata',
            'wip' => 'WIP',
            'pending' => 'In attesa',
            'graveyard' => 'Abbandonata',
        ],
    ],
];
