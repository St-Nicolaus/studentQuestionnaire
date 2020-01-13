        /*
        Function loads json file containing questions for questionnaire.
        */
        function loadDoc(){
        var request = new XMLHttpRequest();
        request.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
                getJSON(this);
            }
        }
        request.open("GET", "questions.json", true);
        request.send();
        }

        /**
         * This cycles thruough each question, which are numbered, and provides
         * radio buttons with yes/no responses. 
         */
        function getJSON(que) {
            var que2 = JSON.parse(que.responseText);
            var end = que2.questionnaire.length;
            var btns = '<form action="QuestionsSubmitPg.php" method="POST" name="questionnaire"><h3>Student\'s First Name: <input type="text" name="sfname" required></h3><h3>Student\'s Last Name: <input type="text" name="slname" required></h3><ol>';
            var inputType = '<input type = "radio" name = "q';
            var valueForY = '" value="1" id="yes';
            var valueForN = '" value="0" id="no';
            var labelForY = '<label for="yes';
            var labelForN = '<label for="no';
            
            for (var i=0; i<end; i++){
                var j = i + 1;
                btns += '<li>' + que2.questionnaire[i] + '<br/>' + inputType + j + valueForY + j + '" required>' +
                labelForY + j + '">yes</label>'+ inputType + j + valueForN + j + '">' + 
                labelForN + j + '">no</label></li><br />';
            }
            btns += '</ol><input type="submit" value="submit" id="submitBtn"></form>';
            document.getElementById("questionnaire").innerHTML = btns;
        }