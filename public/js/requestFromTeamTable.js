$(document).ready(function () {


        console.log("the searching begin...");
        $.ajax({
            type: "POST",
            url: "/player/getPlayerRequests",
            data: {}
        })
            .done(function (data) {
                console.log(data);
                console.log(data[0]["id"]);
                console.log(data[0]["coach"]);
                var table = '';
                var container = $('.requestsFromTeam');
                var containerElement = $('#teamSearchTable');
                //remove old data
                containerElement.remove();
                //create a table with a new data
                table += drawHeadOfTable();
                for (let i = 0; i < data.length; i++) {
                    table +=" <tr>\n" +
                        "      <td scope=row> " + (i + 1).toString() + "</td>\n" +
                        "      <td><img src="+data[i]["coach"]["team"]["image"]+">"+data[i]["coach"]["team"]["name"] +"</td>\n" +
                        "      <td>"+data[i]["coach"]["team"]["division"]["name"] +"</td>\n" +
                        "      <td>"+ data[i]["coach"]["team"]["city"]["name"] +"</td>\n" +
                        "      <td><button class='sendRequest' value="+data[i]["id"]+" onclick='acceptRequestFromTeam(this.value)'>Приемане</button></td>\n" +
                        "      <td><button class='sendRequest' value="+data[i]["id"]+" onclick='RemoveRequestFromTeam(this.value)'>Премахване</button></td>\n" +
                        "    </tr>";
                }
                table += drawEndOfTable();

                container.append(table);
            });


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




