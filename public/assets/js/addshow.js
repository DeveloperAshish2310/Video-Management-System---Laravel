function fetch_api(show_code) {
    var id = document.getElementById("tmdb_id").value;
    $url = "https://api.themoviedb.org/3/tv/"+show_code+"?api_key="+id+"&language=en-US";
    fetch($url).then(response => response.json()).then(data =>{
        document.getElementById("show_name").value = data.name;
        document.getElementById("show_release_date").value = data.first_air_date;
        document.getElementById("imdb_rating").value = data.vote_average;
        document.getElementById("show_duration").value = data.episode_run_time;

        document.getElementById("show_des").value = data.overview;

        document.getElementById("poster_url").value = "https://image.tmdb.org/t/p/original"+data.poster_path;
        document.getElementById("thumbnail_url").value = "https://image.tmdb.org/t/p/original"+data.backdrop_path;
        document.getElementById("Poster_Demo").src = "https://image.tmdb.org/t/p/original"+data.poster_path;
        document.getElementById("thumbnail_Demo").src = "https://image.tmdb.org/t/p/original"+data.backdrop_path;


    });//end of fetch api

};

// change Thumbnail 
function changethumb(a) {
    if (a == "") {
        document.getElementById("thumbnail_Demo").src = "../assets/img/600x373.png";
    }else{
        document.getElementById("thumbnail_Demo").src = a;
    }
}

// change Poster 
function changeposter(a) {
    if (a == "") {
        document.getElementById("Poster_Demo").src = "../assets/img/300x373.png";
    }else{
        document.getElementById("Poster_Demo").src = a;
    }
}
