function btnSearchDisabled()
{
    $(document).ready(function(){
        const valInputSearch = $(".input-search").val();
        var btn = $(".btn-search");
        if(valInputSearch !== "" ){
            btn.removeAttr("disabled");
        }else if(valInputSearch === ""){
            btn.attr("disabled", true);
        }
        console.log(valInputSearch);
    });
}

function durationTrack()
{
    var audio = document.getElementById('audio');
    formatdDuration(audio.duration);
}

function formatdDuration(time)
{
    var duration = "";
    time = Math.floor(time);
    var horas   = Math.floor(time / 3600);
    var minutos = Math.floor((time - (horas * 3600)) / 60);
    var segundos = time - (horas * 3600) - (minutos * 60);

    if(horas < 10 && horas != 0){
        horas = `0${horas}:`;
    }else if(horas == 0){
        horas = "";
    };

    if(minutos < 10) minutos = `0${minutos}`;
    if(segundos < 10) segundos = `0${segundos}`;

    duration = `${horas}${minutos}:${segundos}`;

    console.log(duration);
    return duration;
}

function test(event)
{
    var file = event.target.files[0];
    var audio = document.getElementsByTagName('audio');
    var src_audio = document.getElementById("src-audio-form");

    audio.src = file.name;

    var objectURL = URL.createObjectURL(file);

    console.log(objectURL);
}