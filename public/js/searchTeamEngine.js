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

        var teamName = $(".search-text").val();
        if (teamName == "") {
            return;
        }
        console.log(teamName);
        $.ajax({
            type: "POST",
            url: "/player/searchTeam/" + teamName,
            data: {'teamName': teamName}
        })
            .done(function (data) {
                var table = '';
                var container = $('.teamSearchResult');
                var containerElement = $('#teamSearchTable');
                //remove old data
                containerElement.remove();
                //create a table with a new data
                table += drawHeadOfTable();
                for (let i = 0; i < data.length; i++) {
                  table +=" <tr class='col-12 row'>\n" +
                        "      <td scope=row class='col-1'> " + (i + 1).toString() + "</td>\n" +
                        "      <td class='col-3'><img src="+data[i][2]+">"+data[i][0] +"</td>\n" +
                        "      <td class='col-3'>"+data[i][1] +"</td>\n" +
                        "      <td class='col-3'>"+ data[i][3] +"</td>\n" +
                        "      <td class='col-2'><button class='sendRequest' value onclick='SendRequest(this.value)'>Send</button></td>\n" +
                        "    </tr>";
                }
                table += drawEndOfTable();

                container.append(table);
            });
    }

    function drawHeadOfTable(){
        return ('<table class="table row" id="teamSearchTable">\n' +
            '  <thead>\n' +
            '    <tr class="col-12 row">\n' +
            '      <th scope="col" class="col-1"></th>\n' +
            '      <th scope="col" class="col-3">Отбор</th>\n' +
            '      <th scope="col" class="col-3">Град</th>\n' +
            '      <th scope="col" class="col-3">Лига</th>\n' +
            '      <th scope="col" class="col-2">Деиствия</th>\n' +
            '    </tr>\n' +
            '  </thead>' +
            '<tbody class="col-12 row p-0 m-0 ">');
    }

    function drawEndOfTable(){
        return ("</tbody>\n" +
            "</table>");
    }
});




