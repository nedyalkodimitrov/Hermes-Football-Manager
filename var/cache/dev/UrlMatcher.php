<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'adminHomeAction', '_controller' => 'App\\Controller\\AdminController::CoachViewAction'], null, null, null, false, false, null]],
        '/admin/team' => [[['_route' => 'manTeam', '_controller' => 'App\\Controller\\AdminController::MenTeam'], null, null, null, false, false, null]],
        '/admin/youthTeams' => [[['_route' => 'youthTeams', '_controller' => 'App\\Controller\\AdminController::ListTeams'], null, null, null, false, false, null]],
        '/admin/createYouthTeam' => [[['_route' => 'createYouthTeam', '_controller' => 'App\\Controller\\AdminController::CreateYouthTeam'], null, null, null, false, false, null]],
        '/admin/coaches' => [[['_route' => 'coaches', '_controller' => 'App\\Controller\\AdminController::Coaches'], null, null, null, true, false, null]],
        '/admin/getPlayersByName' => [[['_route' => 'deleteCoache', '_controller' => 'App\\Controller\\AdminController::GetPlayersByName'], null, null, null, false, false, null]],
        '/admin/getCoachesByName' => [[['_route' => 'getCoachesByName', '_controller' => 'App\\Controller\\AdminController::GetCoachesByName'], null, null, null, false, false, null]],
        '/coache' => [[['_route' => 'coacheViewAction', '_controller' => 'App\\Controller\\CoachController::CoacheViewAction'], null, null, null, false, false, null]],
        '/coache/trainings' => [[['_route' => 'trainingView', '_controller' => 'App\\Controller\\CoachController::TrainingView'], null, ['GET' => 0], null, false, false, null]],
        '/coache/trainingsw' => [[['_route' => 'trainingAction', '_controller' => 'App\\Controller\\CoachController::TrainingAction'], null, null, null, false, false, null]],
        '/coache/trainingCalendar' => [[['_route' => 'trainingCalendarActionView', '_controller' => 'App\\Controller\\CoachController::TrainingCalendarViewAction'], null, null, null, false, false, null]],
        '/coache/settings' => [[['_route' => 'coache_settings', '_controller' => 'App\\Controller\\CoachController::SettingsView'], null, null, null, false, false, null]],
        '/coache/searchEngine' => [[['_route' => 'searchEngine', '_controller' => 'App\\Controller\\CoachController::SearchEngine'], null, null, null, false, false, null]],
        '/coache/matches' => [[['_route' => 'wsasd', '_controller' => 'App\\Controller\\MatchController::matchesView'], null, null, null, false, false, null]],
        '/player' => [[['_route' => 'playerView', '_controller' => 'App\\Controller\\PlayerController::IndexView'], null, null, null, false, false, null]],
        '/player/removeWaterGlasses' => [[['_route' => 'removeWaterGlassAction', '_controller' => 'App\\Controller\\PlayerController::RemoveWaterGlassesAction'], null, null, null, false, false, null]],
        '/player/addWaterGlasses' => [[['_route' => 'addWaterGlassAction', '_controller' => 'App\\Controller\\PlayerController::AddWaterGlassesAction'], null, null, null, false, false, null]],
        '/player/settings' => [[['_route' => 'player_settings', '_controller' => 'App\\Controller\\PlayerController::SettingsView'], null, null, null, false, false, null]],
        '/player/training' => [[['_route' => 'playerTraining', '_controller' => 'App\\Controller\\PlayerController::TrainingView'], null, null, null, false, false, null]],
        '/player/requests' => [[['_route' => 'playerRequestes', '_controller' => 'App\\Controller\\PlayerController::PlayerRequests'], null, null, null, false, false, null]],
        '/player/stats' => [[['_route' => 'playerStats', '_controller' => 'App\\Controller\\PlayerController::PlayerStats'], null, null, null, false, false, null]],
        '/player/getOutOfTeam' => [[['_route' => 'getOutOfteam', '_controller' => 'App\\Controller\\PlayerController::getOutOfTeam'], null, null, null, false, false, null]],
        '/player/removeCurrentClub' => [[['_route' => 'app_player_removecurrentclub', '_controller' => 'App\\Controller\\PlayerController::removeCurrentClubAction'], null, null, null, false, false, null]],
        '/player/getPlayerRequests' => [[['_route' => 'app_player_getteamrequest', '_controller' => 'App\\Controller\\PlayerController::getTeamRequest'], null, null, null, false, false, null]],
        '/admin/sendRequestToPlayer' => [[['_route' => 'sendRequestToPlayer', '_controller' => 'App\\Controller\\RequestController::SendRequestToPlayer'], null, null, null, false, false, null]],
        '/admin/sendRasequestToCoach' => [[['_route' => 'sendRequestToCoach', '_controller' => 'App\\Controller\\RequestController::SendRequestToCoach'], null, null, null, false, false, null]],
        '/coache/setTraining' => [[['_route' => 'setTraining', '_controller' => 'App\\Controller\\ScheduleController::TrainingSetAction'], null, ['POST' => 0], null, false, false, null]],
        '/coache/deleteTraining' => [[['_route' => 'deleteTraining', '_controller' => 'App\\Controller\\ScheduleController::TrainingDeleteAction'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/superAdmin' => [[['_route' => 'superAdminHome', '_controller' => 'App\\Controller\\SuperAdminController::signInView'], null, null, null, false, false, null]],
        '/superAdmin/countries' => [[['_route' => 'superAdminCountries', '_controller' => 'App\\Controller\\SuperAdminController::TeamsCountry'], null, null, null, false, false, null]],
        '/superAdmin/divisionsCountry' => [[['_route' => 'superAdminDivisionsCountry', '_controller' => 'App\\Controller\\SuperAdminController::DivisionsCountry'], null, null, null, false, false, null]],
        '/superAdmin/createTeams' => [[['_route' => 'superAdminCreateTeam', '_controller' => 'App\\Controller\\SuperAdminController::CreateTeams'], null, null, null, false, false, null]],
        '/superAdmin/deleteDivision' => [[['_route' => 'superAdminDeleteDivision', '_controller' => 'App\\Controller\\SuperAdminController::DeleteDivision'], null, null, null, false, false, null]],
        '/superAdmin/createMatch' => [[['_route' => 'createMatch', '_controller' => 'App\\Controller\\SuperAdminController::createMatch'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|deleteYouthTeam/([^/]++)(*:203)'
                    .'|youthTeam/([^/]++)(*:229)'
                    .'|coaches/([^/]++)(*:253)'
                    .'|removePlayerFromTeam/([^/]++)(*:290)'
                .')'
                .'|/coache/(?'
                    .'|player/([^/]++)(*:325)'
                    .'|removePlayer(?'
                        .'|Request/([^/]++)(*:364)'
                        .'|FromTeam/([^/]++)(*:389)'
                    .')'
                    .'|acceptPlayerRequest/([^/]++)(*:426)'
                    .'|match/([^/]++)(?'
                        .'|(*:451)'
                    .')'
                .')'
                .'|/player/(?'
                    .'|deleteStat/([^/]++)(*:491)'
                    .'|se(?'
                        .'|archTeam/([^/]++)(*:521)'
                        .'|ndRequestToClub/([^/]++)/([^/]++)(*:562)'
                    .')'
                    .'|acceptCoachRequest/([^/]++)(*:598)'
                .')'
                .'|/superAdmin/(?'
                    .'|teams(?'
                        .'|/([^/]++)(*:639)'
                        .'|Divisions/([^/]++)(*:665)'
                    .')'
                    .'|d(?'
                        .'|ivisions/([^/]++)(*:695)'
                        .'|eleteTeam/([^/]++)(*:721)'
                    .')'
                    .'|matches/([^/]++)(?'
                        .'|(*:749)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        203 => [[['_route' => 'deleteYouthTeam', '_controller' => 'App\\Controller\\AdminController::DeleteYouthTeam'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'youthTeam', '_controller' => 'App\\Controller\\AdminController::YouthTeam'], ['id'], null, null, false, true, null]],
        253 => [[['_route' => 'coacheAction', '_controller' => 'App\\Controller\\AdminController::CoachesAction'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'deletePlayer', '_controller' => 'App\\Controller\\AdminController::DeletePlayer'], ['id'], null, null, false, true, null]],
        325 => [[['_route' => 'playerAction', '_controller' => 'App\\Controller\\CoachController::PlayerAction'], ['id'], null, null, false, true, null]],
        364 => [[['_route' => 'app_coach_removeplayerrequest', '_controller' => 'App\\Controller\\CoachController::removePlayerRequestAction'], ['id'], null, null, false, true, null]],
        389 => [[['_route' => 'app_coach_removeplayerfromteam', '_controller' => 'App\\Controller\\CoachController::removePlayerFromTeam'], ['id'], null, null, false, true, null]],
        426 => [[['_route' => 'app_coach_acceptplayerrequest', '_controller' => 'App\\Controller\\CoachController::acceptPlayerRequest'], ['playerId'], null, null, false, true, null]],
        451 => [
            [['_route' => 'matchList', '_controller' => 'App\\Controller\\MatchController::matchView'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'createMatchList', '_controller' => 'App\\Controller\\MatchController::matchListAction'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        491 => [[['_route' => 'playerStatDeleting', '_controller' => 'App\\Controller\\PlayerController::StatRemove'], ['id'], null, null, false, true, null]],
        521 => [[['_route' => 'app_player_searchteam', '_controller' => 'App\\Controller\\PlayerController::searchTeam'], ['name'], null, null, false, true, null]],
        562 => [[['_route' => 'app_player_sendrequesttoteam', '_controller' => 'App\\Controller\\PlayerController::sendRequestToTeam'], ['id', 'message'], null, null, false, true, null]],
        598 => [[['_route' => 'app_player_acceptcoachrequest', '_controller' => 'App\\Controller\\PlayerController::acceptCoachRequest'], ['id'], null, null, false, true, null]],
        639 => [[['_route' => 'superAdminTeams', '_controller' => 'App\\Controller\\SuperAdminController::Teams'], ['id'], null, null, false, true, null]],
        665 => [[['_route' => 'superAdminTeamsDivisions', '_controller' => 'App\\Controller\\SuperAdminController::SuperAdminTeamsDivisions'], ['id'], null, null, false, true, null]],
        695 => [[['_route' => 'superAdminDivisions', '_controller' => 'App\\Controller\\SuperAdminController::SuperAdminDivisions'], ['id'], null, null, false, true, null]],
        721 => [[['_route' => 'superAdminDeleteTeam', '_controller' => 'App\\Controller\\SuperAdminController::DeleteTeam'], ['id'], null, null, false, true, null]],
        749 => [
            [['_route' => 'matchView', '_controller' => 'App\\Controller\\SuperAdminController::MatchView'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'matchPlayerDetailList', '_controller' => 'App\\Controller\\SuperAdminController::MatchPlayerDetailList'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
