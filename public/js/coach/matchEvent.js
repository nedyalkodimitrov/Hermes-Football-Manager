$(document).ready(function () {
    const seperator = '-';
    var players = [];
    var soccerScheme = '4-4-2';
    const goalkeeperCount = 1;
    const defendersCount = soccerScheme.split(seperator)[0];
    const midfieldersCount = soccerScheme.split(seperator)[1];
    const attackersCount = soccerScheme.split(seperator)[2];
    var goalkeepers = 0;
    var defenders = 0;
    var midfielders = 0;
    var attackers = 0;
    $('.fut-player-card').on('click', function () {
        var position = $(this);
        var playerInfo = position.attr('id');
        var playerId = playerInfo.split(seperator)[0];
        var playerPosition = playerInfo.split(seperator)[1];

        var found = players.find(function(element, playerId) {
            let elements = 0;
            if ( element == playerId){
                 element++;
             }
             return elements;

        });
        if (found == 0){
            addPlayer(playerId, playerPosition);
            $(this).addClass("fut-player-card-clicked");
        }else {
            $(this).removeClass("fut-player-card-clicked");
            removePlayers(playerId, playerPosition);
        }
    });

    function addPlayer(playerId, playerPosition) {
        if (playerPosition == "Goalkeeper") {
        if (goalkeepers < goalkeeperCount) {
            players.push(playerId);
            goalkeepers++;
            return true;
        }
        }else  if (playerPosition == "Defender"){
            if (defenders < defendersCount ) {
                players.push(playerId);
                defenders++;
                return true;
            }
        }else  if (playerPosition == "Midfielder") {
            if (midfielders < midfieldersCount) {
                players.push(playerId);
                midfielders++;
                return true;
            }
        }else if (playerPosition == "Attacker"){
            if (attackers < attackersCount ){
                players.push(playerId);
                attackers++;
                return  true;
            }
        }
    }

    function removePlayers(playerId, playerPosition) {
        var playerPositionInArray = players.indexOf(playerId);
        if (playerPosition == "Goalkeeper") {
            if (goalkeepers < goalkeeperCount) {
                players.splice(playerPositionInArray, 1);
                goalkeepers--;
                return true;
            }
        }else  if (playerPosition == "Defender"){
            if (defenders < defendersCount ) {
                players.splice(playerPositionInArray, 1);
                defenders--;
                return true;
            }
        }else  if (playerPosition == "Midfielder") {
            if (midfielders < midfieldersCount) {
                players.splice(playerPositionInArray, 1);
                midfielders--;
                return true;
            }
        }else if (playerPosition == "Attacker"){
            if (attackers < attackersCount ){
                players.splice(playerPositionInArray, 1);
                attackers--;
                return  true;
            }
        }
    }



});