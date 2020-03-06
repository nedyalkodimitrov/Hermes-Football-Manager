$(document).ready(function () {
    var typingTimer;                //timer identifier
    var doneTypingInterval = 500;  //time in ms, 5 second for example
    var input = $('.search-text');

    //on keyup, start the countdown
    input.on('keyup', function () {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(doneTyping, doneTypingInterval);
    });

    //on keydown, clear the countdown
    input.on('keydown', function () {
        clearTimeout(typingTimer);
    });

    function doneTyping() {

        var coachName = $(".search-text").val();
        if (coachName == "") {
            return;
        }
        console.log(coachName);
        $.ajax({
            method: "POST",
            data: {"coachInfo": coachName},
            url: "/admin/getCoachByName",
        })
            .done(function (data) {
                console.log(data);
                var table = '';
                var container = $('.coachSearchResult');
                var containerElement = $('#coachSearchTable');
                //remove old data
                containerElement.remove();
                //create a table with a new data
                table += drawHeadOfTable();
                for (let i = 0; i < data.length; i++) {
                    var playerTeam = data[i][3]["name"];
                    if (playerTeam == null){
                        playerTeam = "Няма";
                    }
                    table +=" <tr>\n" +
                        "      <td scope=row> " + (i + 1).toString() + "</td>\n" +
                        "      <td><img src=>"+data[i][0]["name"] + " " + data[i][0]["fName"] +"</td>\n" +
                        "      <td>"+playerTeam +"</td>\n" +
                        "      <td>"+ data[i][0]["player"]["position"]["name"] +"</td>\n" +
                        "      <td>"+ data[i][0]["phone"] +"</td>\n" +
                        "      <td><button class='sendRequestToCoach' onclick='SendRequestToPlayer(this.value)' value="+data[i][4] +">Send</button></td>\n" +
                        "    </tr>";
                }
                table += drawEndOfTable();

                container.append(table);
            });
    }

    function drawHeadOfTable(){
        return ('<table class="table table-dark mt-5 p-0" id="coachSearchTable">\n' +
            '  <thead>\n' +
            '    <tr>\n' +
            '      <th scope="col">#</th>\n' +
            '      <th scope="col">Име</th>\n' +
            '      <th scope="col">Отбор</th>\n' +
            '      <th scope="col">Позиция</th>\n' +
            '      <th scope="col">Телфонен номер</th>\n' +
            '      <th scope="col">Заявка</th>\n' +
            '    </tr>\n' +
            '  </thead>');
    }

    function drawEndOfTable(){
        return ("</tbody>\n" +
            "</table>");
    }
});




