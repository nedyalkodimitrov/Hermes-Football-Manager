$(document).ready(function () {
    const seperator = '-';
    var players = [];
    var soccerScheme = '4-4-2';
    const goalkeeperCount = 3;
    const playerInGroup = 18;
    var goalkeepers = 0;
    var defenders = 0;
    var midfielders = 0;
    var attackers = 0;
    $('.fut-player-card').on('click', function () {
        var position = $(this);
        var playerInfo = position.attr('id');
        var playerId = parseInt(playerInfo.split(seperator)[0]);
        var playerPosition = playerInfo.split(seperator)[1];

        var found = players.find(function(player) {
             return player == playerId;

        });

        console.log(goalkeepers);
        console.log(defenders);
        console.log(midfielders);
        console.log(attackers);

        if (found === undefined){
            if( addPlayer(playerId, playerPosition)) {
                $(this).addClass("fut-player-card-clicked");
            }
        }else {
            if(removePlayers(playerId, playerPosition)){
                $(this).removeClass("fut-player-card-clicked");
            }
        }
        console.log(players)
    });


    $('.sendPlayers').on('click', function () {
        $.ajax({
            type: "POST",
            url: window.location.pathname,
            data: {'players': players}
        })
            .done(function( msg ) {
                window.location.replace(window.location.pathname);
            });

    });

    function addPlayer(playerId, playerPosition) {
        if (playerPosition === "Goalkeeper") {
            if (goalkeepers < goalkeeperCount && players.length <= playerInGroup) {
                players.push(playerId);
                goalkeepers++;
                return true;
            }
        }else  if (playerPosition === "Defender"){
            if (players.length <= playerInGroup ) {
                players.push(playerId);
                defenders++;
                return true;
            }
        }else  if (playerPosition === "Midfielder") {
            if (players.length <= playerInGroup) {
                players.push(playerId);
                midfielders++;
                return true;
            }
        }else if (playerPosition === "Attacker"){
            if (players.length <= playerInGroup ){
                players.push(playerId);
                attackers++;
                return  true;
            }
        }
    }

    function removePlayers(playerId, playerPosition) {
        var playerPositionInArray = players.indexOf(playerId);
        if (playerPosition === "Goalkeeper") {
                players.splice(playerPositionInArray, 1);
                goalkeepers--;
                return true;
        }else  if (playerPosition === "Defender"){
                players.splice(playerPositionInArray, 1);
                defenders--;
                return true;
        }else  if (playerPosition === "Midfielder") {
                players.splice(playerPositionInArray, 1);
                midfielders--;
                return true;
        }else if (playerPosition === "Attacker"){
                players.splice(playerPositionInArray, 1);
                attackers--;
                return  true;
        }
    }



});
