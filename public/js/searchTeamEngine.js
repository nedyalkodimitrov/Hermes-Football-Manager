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
                  table +=" <tr>\n" +
                        "      <td scope=row> " + (i + 1).toString() + "</td>\n" +
                        "      <td><img src="+data[i][2]+">"+data[i][0] +"</td>\n" +
                        "      <td>"+data[i][1] +"</td>\n" +
                        "      <td>"+ data[i][3] +"</td>\n" +
                        "      <td><button class='sendRequest' value onclick='SendRequest(this.value)'>Send</button></td>\n" +
                        "    </tr>";
                }
                table += drawEndOfTable();

                container.append(table);
            });
    }

    function drawHeadOfTable(){
        return ('<table class="table table-dark" id="teamSearchTable">\n' +
            '  <thead>\n' +
            '    <tr>\n' +
            '      <th scope="col">#</th>\n' +
            '      <th scope="col">First</th>\n' +
            '      <th scope="col">Last</th>\n' +
            '      <th scope="col">Handle</th>\n' +
            '      <th scope="col">Handle</th>\n' +
            '    </tr>\n' +
            '  </thead>');
    }

    function drawEndOfTable(){
        return ("</tbody>\n" +
            "</table>");
    }
});




