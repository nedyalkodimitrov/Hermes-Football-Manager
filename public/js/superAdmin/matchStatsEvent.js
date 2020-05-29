$('.sendInformation').on('click', function(){
  var homeTeamPlayers = [];
  var awayTeamPlayers = [];
  var homeTeamPlayersElements = document.getElementsByClassName("homeTeamPlayer");
  var awayTeamPlayersElements = document.getElementsByClassName("awayTeamPlayer");

  pushPlayersDataIntoArray(homeTeamPlayers, homeTeamPlayersElements);
  pushPlayersDataIntoArray(awayTeamPlayers, awayTeamPlayersElements);

   console.log(homeTeamPlayers);

   $.ajax({
       type: "POST",
       url: window.location.pathname,
       data: {
         'homeTeamPlayers': JSON.stringify(homeTeamPlayers[0]),
         'awayTeamPlayers': awayTeamPlayers,
       }
   })
   .done(function( msg ) {
       console.log(  msg );
       console.log(homeTeamPlayers);
   });
});


function pushPlayersDataIntoArray(array, data){
  for (var i = 0; i < data.length; i++) {
    var teamPlayer = data[i].getElementsByTagName("input");
    var player = [];
    //player goals
    player[0] =  teamPlayer[0].value;
    // player assists
    player[1] = teamPlayer[1].value;
    // player shoots
    player[2] = teamPlayer[2].value;
    // is player playes a match
    player[3] = teamPlayer[3].checked;
    // player start minutes
    player[4] = teamPlayer[4].value;
    // player end minutes
    player[5] = teamPlayer[5].value;
    // is player start a match
    player[6] = teamPlayer[6].value;

    if (player[6] == true) {
      if (player[5] == 0) {
        messege("Всички титуляри трябва да имат попълнено до коя минута са играли мача")
        break;
      }
    }
    if (player[3] && player[6] == 0 ) {

      if (player[4] == 0 || player[5] == 0  ) {
            messege("Всички резерви, които са започнали мача трябва да имат попълнени в коя минута са започнали и в коч минута са завършили мача!")
            break;
      }
      if (player[4] >= player[5]) {
        messege("Не може минутата в която е влязла резервата да е по-голяма от минутата в която е излязла")
        break;
      }

    }
      array.push(player);
  }

}

function messege( messege) {
  iziToast.warning({
      title: 'Грешни данни',
      message: messege ,
      overlay: false,
      color: "red",
      layout: 1,
      zindex: 1000,
      position: 'topRight',
      timeout: 8000,
      closeOnClick: true,
  });
}
