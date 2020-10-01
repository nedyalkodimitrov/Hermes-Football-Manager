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

        var exerciseName = $(".search-text").val();
        if (exerciseName == "") {
            return;
        }
        console.log(exerciseName);
        $.ajax({
            type: "POST",
            url: "/coache/searchExercises",
            data: {'exercisesName': exerciseName}
        })
            .done(function (data) {
                var table = '';
                var container = $('.exercises-search-results');
                var containerElement = $('#exercisesSearchTable');
                //remove old data
                console.log(JSON.parse(data));

                containerElement.remove();
                console.log( containerElement);
                //create a table with a new data
                var exercises = JSON.parse(data);
                console.log(exercises.length)
                table += drawHeadOfTable();
                for (let i = 0; i < exercises.length; i++) {
                    var exercise = exercises[i];
                    console.log(exercise["name"]);
                    var name = exercise["name"];
                    var description = exercise["description"];

                    table +=" <tr class='col-12 row exercise' id='create-training-exercise'>\n" +
                        "      <td scope=row class='col-1'> " + (i + 1).toString() + "</td>\n" +
                        "      <td class='col-3'><img src="+exercise[0]+">"+exercise[0] +"</td>\n" +
                        "      <td class='col-3 ex-name' >"+name +"</td>\n" +
                        "      <td class='col-3 ex-description'>"+ description +"</td>\n" +
                        "      <td class='col-2'><button class='addExercise' onclick='addExercise(\""+name+"\", \""+description+"\")'>Send</button></td>\n" +
                        "    </tr>";
                }
                table += drawEndOfTable();

                container.append(table);
            });
    }

    function drawHeadOfTable(){
        return ('<table class="table row col-12" id="exercisesSearchTable">\n' +
            '  <thead>\n' +
            '    <tr class="col-12 row">\n' +
            '      <th scope="col" class="col-1"></th>\n' +
            '      <th scope="col" class="col-3">Zewmq</th>\n' +
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




