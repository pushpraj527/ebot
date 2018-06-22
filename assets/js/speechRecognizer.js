var r = document.getElementById('result');
function startConverting () {
	if('webkitSpeechRecognition' in window){
		var speechRecognizer = new webkitSpeechRecognition();
		speechRecognizer.continuous = true;
		speechRecognizer.interimResults = true;
		speechRecognizer.lang = 'en-IN';
		speechRecognizer.start();

		var finalTranscripts = '';

		speechRecognizer.onresult = function(event){
			var interimTranscripts = '';
			for(var i = event.resultIndex; i < event.results.length; i++){
				var transcript = event.results[i][0].transcript;
				transcript.replace("\n", "<br>");
				if(event.results[i].isFinal){
					finalTranscripts += transcript;
				}else{
					interimTranscripts += transcript;
				}
			}
			r.innerHTML = finalTranscripts + '<span style="color:#999">' + interimTranscripts + '</span>';
		};
		speechRecognizer.onerror = function (event) {
		};
	}else{
		r.innerHTML = 'Your browser is not supported. If google chrome, please upgrade!';
	}
};
/*===========================================*/
var accessToken ="c92973db564744e08d1ac1115a0f71fa";
    var baseUrl = "https://api.dialogflow.com/v1/";
    $(document).ready(function() {
        $("#input").keypress(function(event) {
            if (event.which == 13) {
                event.preventDefault();
                send();
this.value = ''; //add this line to auto clear your text field so that you won't have to press backspace to clear the text field
            }
        });
        $("#rec").click(function(event) {
            switchRecognition();
        });
    });
    var recognition;
    function startRecognition() {
        recognition = new webkitSpeechRecognition();
        recognition.onstart = function(event) {
            updateRec();
        };
        recognition.onresult = function(event) {
            var text = "";
            for (var i = event.resultIndex; i < event.results.length; ++i) {
                text += event.results[i][0].transcript;
            }
            setInput(text);
            stopRecognition();
        };
        recognition.onend = function() {
            stopRecognition();
        };
        recognition.lang = "en-US";
        recognition.start();
    }
    function stopRecognition() {
        if (recognition) {
            recognition.stop();
            recognition = null;
        }
        updateRec();
    }
    function switchRecognition() {
        if (recognition) {
            stopRecognition();
        } else {
            startRecognition();
        }
    }
    function setInput(text) {
        $("#input").val(text);
        send();
    }
    function updateRec() {
        $("#rec").text(recognition ? "Stop" : "Speak");
    }
function send() {
        var text = $("#input").val();
        var a = ""
    conversation.push("Me: " + text + '\r\n');
        $.ajax({
            type: "POST",
            url: baseUrl + "query?v=20150910",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            headers: {
                "Authorization": "Bearer " + accessToken
            },
            data: JSON.stringify({ query: text, lang: "en", sessionId: "somerandomthing" }),
            success: function(data) {
                var respText = data.result.fulfillment.speech;
                console.log("Respuesta: " + respText);
                setResponse(respText);
            },
            error: function() {
                setResponse("Internal Server Error");
            }
        });
    }
    function setResponse(val) {
	    //Edit "AI: " to change name
        conversation.push("eBot: " + val + '\r\n');
        /*alert(val);*/
        $("#response").text(conversation.join(""));
        speakoutloud(val);
    }
    var conversation = [];
    /*88888888888888888888888888888888888888888888888888*/

    function speakoutloud(val){
    	function checkCompatibilty () {
                if(!('speechSynthesis' in window)){
                    alert('Your browser is not supported. If google chrome, please upgrade!!');
                }
            };

            checkCompatibilty();

            var voiceOptions = 'Google हिन्दी';
            var volumeSlider = 0.7;
            var rateSlider = 0.7;
            var pitchSlider = 0.6;
            var myText = val;

            var voiceMap = [];

            function loadVoices () {
                var voices = speechSynthesis.getVoices();
                for (var i = 0; i < voices.length; i++) {
                    var voice = voices[i];
                    var option = document.createElement('option');
                    option.value = voice.name;
                    option.innerHTML = voice.name;
                    voiceOptions.appendChild(option);
                    voiceMap[voice.name] = voice;
                };
            };

            window.speechSynthesis.onvoiceschanged = function(e){
                loadVoices();
            };

            function speak () {
                var msg = new SpeechSynthesisUtterance();
                msg.volume = volumeSlider.value;
                msg.voice = voiceMap[voiceOptions.value];
                msg.rate = rateSlider.value;
                msg.Pitch = pitchSlider.value;
                msg.text = myText.value;
                window.speechSynthesis.speak(msg);
            };
    }