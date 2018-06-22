    
function checkCompatibilty () {
    if(!('speechSynthesis' in window)){
        alert('Your browser is not supported. If google chrome, please upgrade!!');
    }
};

checkCompatibilty();

var voiceOptions = document.getElementById('voiceOptions');
var volumeSlider = 1.0;
var pitchSlider = 0.5;
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

function speak (myText) {
    var msg = new SpeechSynthesisUtterance();
    msg.volume = volumeSlider;
    msg.voice = voiceMap[voiceOptions.value];
    msg.rate = 0.5;
    msg.Pitch = pitchSlider;
    msg.text = myText;
    msg.lang= 'en-IN';
    window.speechSynthesis.speak(msg);
};