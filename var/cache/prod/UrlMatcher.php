<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'adminHomeAction', '_controller' => 'App\\Controller\\AdminController::CoachViewAction'], null, null, null, false, false, null]],
        '/admin/team' => [[['_route' => 'manTeam', '_controller' => 'App\\Controller\\AdminController::ManTeam'], null, null, null, false, false, null]],
        '/admin/youthTeams' => [[['_route' => 'youthTeams', '_controller' => 'App\\Controller\\AdminController::ListTeams'], null, null, null, false, false, null]],
        '/admin/createYouthTeam' => [[['_route' => 'createYouthTeam', '_controller' => 'App\\Controller\\AdminController::CreateYouthTeam'], null, null, null, false, false, null]],
        '/admin/coaches' => [[['_route' => 'coaches', '_controller' => 'App\\Controller\\AdminController::Coaches'], null, null, null, true, false, null]],
        '/admin/getPlayersByName' => [[['_route' => 'deleteCoache', '_controller' => 'App\\Controller\\AdminController::GetPlayersByName'], null, null, null, false, false, null]],
        '/coache' => [[['_route' => 'coacheViewAction', '_controller' => 'App\\Controller\\CoachController::CoacheViewAction'], null, null, null, false, false, null]],
        '/coache/trainings' => [[['_route' => 'trainingView', '_controller' => 'App\\Controller\\CoachController::TrainingView'], null, ['GET' => 0], null, false, false, null]],
        '/coache/trainingsw' => [[['_route' => 'trainingAction', '_controller' => 'App\\Controller\\CoachController::TrainingAction'], null, null, null, false, false, null]],
        '/coache/trainingCalendar' => [[['_route' => 'trainingCalendarActionView', '_controller' => 'App\\Controller\\CoachController::TrainingCalendarViewAction'], null, null, null, false, false, null]],
        '/coache/settings' => [[['_route' => 'coache_settings', '_controller' => 'App\\Controller\\CoachController::SettingsView'], null, null, null, false, false, null]],
        '/coache/searchEngine' => [[['_route' => 'searchEngine', '_controller' => 'App\\Controller\\CoachController::SearchEngine'], null, null, null, false, false, null]],
        '/player' => [[['_route' => 'playerView', '_controller' => 'App\\Controller\\PlayerController::IndexView'], null, null, null, false, false, null]],
        '/player/removeWaterGlasses' => [[['_route' => 'removeWaterGlassAction', '_controller' => 'App\\Controller\\PlayerController::RemoveWaterGlassesAction'], null, null, null, false, false, null]],
        '/player/addWaterGlasses' => [[['_route' => 'addWaterGlassAction', '_controller' => 'App\\Controller\\PlayerController::AddWaterGlassesAction'], null, null, null, false, false, null]],
        '/player/settings' => [[['_route' => 'player_settings', '_controller' => 'App\\Controller\\PlayerController::SettingsView'], null, null, null, false, false, null]],
        '/player/training' => [[['_route' => 'playerTraining', '_controller' => 'App\\Controller\\PlayerController::TrainingView'], null, null, null, false, false, null]],
        '/player/getOutOfTeam' => [[['_route' => 'getOutOfteam', '_controller' => 'App\\Controller\\PlayerController::getOutOfTeam'], null, null, null, false, false, null]],
        '/player/removeCurrentClub' => [[['_route' => 'app_player_removecurrentclub', '_controller' => 'App\\Controller\\PlayerController::removeCurrentClubAction'], null, null, null, false, false, null]],
        '/player/getPlayerRequests' => [[['_route' => 'app_player_getteamrequest', '_controller' => 'App\\Controller\\PlayerController::getTeamRequest'], null, null, null, false, false, null]],
        '/admin/sendRequestToPlayer' => [[['_route' => 'sendRequestToPlayer', '_controller' => 'App\\Controller\\RequestController::SendRequestToPlayer'], null, null, null, false, false, null]],
        '/admin/sendRequestToCoach' => [[['_route' => 'sendRequestToCoach', '_controller' => 'App\\Controller\\RequestController::SendRequestToCoach'], null, null, null, false, false, null]],
        '/coache/setTraining' => [[['_route' => 'setTraining', '_controller' => 'App\\Controller\\ScheduleController::TrainingSetAction'], null, ['POST' => 0], null, false, false, null]],
        '/coache/deleteTraining' => [[['_route' => 'deleteTraining', '_controller' => 'App\\Controller\\ScheduleController::TrainingDeleteAction'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|deleteYouthTeam/([^/]++)(*:41)'
                    .'|youthTeam/([^/]++)(*:66)'
                    .'|coaches/([^/]++)(*:89)'
                    .'|removePlayerFromTeam/([^/]++)(*:125)'
                .')'
                .'|/coache/(?'
                    .'|player/([^/]++)(*:160)'
                    .'|sendPlayerRequest/([^/]++)(*:194)'
                    .'|removePlayer(?'
                        .'|Request/([^/]++)(*:233)'
                        .'|FromTeam/([^/]++)(*:258)'
                    .')'
                    .'|acceptPlayerRequest/([^/]++)(*:295)'
                .')'
                .'|/player/(?'
                    .'|deleteStat/([^/]++)(*:334)'
                    .'|se(?'
                        .'|archTeam/([^/]++)(*:364)'
                        .'|ndRequestToClub/([^/]++)/([^/]++)(*:405)'
                    .')'
                    .'|acceptCoachRequest/([^/]++)(*:441)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'deleteYouthTeam', '_controller' => 'App\\Controller\\AdminController::DeleteYouthTeam'], ['id'], null, null, false, true, null]],
        66 => [[['_route' => 'youthTeam', '_controller' => 'App\\Controller\\AdminController::YouthTeam'], ['id'], null, null, false, true, null]],
        89 => [[['_route' => 'coacheAction', '_controller' => 'App\\Controller\\AdminController::CoachesAction'], ['id'], null, null, false, true, null]],
        125 => [[['_route' => 'deletePlayer', '_controller' => 'App\\Controller\\AdminController::DeletePlayer'], ['id'], null, null, false, true, null]],
        160 => [[['_route' => 'playerAction', '_controller' => 'App\\Controller\\CoachController::PlayerAction'], ['id'], null, null, false, true, null]],
        194 => [[['_route' => 'playerStats', '_controller' => 'App\\Controller\\CoachController::sendPlayerRequestAction'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'app_coach_removeplayerrequest', '_controller' => 'App\\Controller\\CoachController::removePlayerRequestAction'], ['id'], null, null, false, true, null]],
        258 => [[['_route' => 'app_coach_removeplayerfromteam', '_controller' => 'App\\Controller\\CoachController::removePlayerFromTeam'], ['id'], null, null, false, true, null]],
        295 => [[['_route' => 'app_coach_acceptplayerrequest', '_controller' => 'App\\Controller\\CoachController::acceptPlayerRequest'], ['playerId'], null, null, false, true, null]],
        334 => [[['_route' => 'playerStatDeleting', '_controller' => 'App\\Controller\\PlayerController::StatRemove'], ['id'], null, null, false, true, null]],
        364 => [[['_route' => 'app_player_searchteam', '_controller' => 'App\\Controller\\PlayerController::searchTeam'], ['name'], null, null, false, true, null]],
        405 => [[['_route' => 'app_player_sendrequesttoteam', '_controller' => 'App\\Controller\\PlayerController::sendRequestToTeam'], ['id', 'message'], null, null, false, true, null]],
        441 => [
            [['_route' => 'app_player_acceptcoachrequest', '_controller' => 'App\\Controller\\PlayerController::acceptCoachRequest'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
