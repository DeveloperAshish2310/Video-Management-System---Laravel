// Search movies
$(document).ready(function(){
    $("#searchbxmovie").on("keyup",function(){
        var a = $(this).val();
        var b = $("#tablecon");
        $.ajax({
            url: "action/search-movie.php",
            type: "POST",
            data:{
                query: a
            },
            success: function(data){
                b.html(data)
            },
            error: function(data){
                b.html("Error Bro! Fix me Up Fast....... ")
            }
        })
    });


    $("#searchbxshow").on("keyup",function(){
        var a = $(this).val();
        var b = $("#tablecon");
        $.ajax({
            url: "action/search-show.php",
            type: "POST",
            data:{
                query: a
            },
            success: function(data){
                b.html(data)
            },
            error: function(data){
                b.html("Error Bro! Fix me Up Fast....... ")
            }
        })
    });


    $("#searchbxepisode").on("keyup",function(){
        var a = $(this).val();
        var b = $("#tablecon");
        $.ajax({
            url: "action/search_episode.php",
            type: "POST",
            data:{
                query: a
            },
            success: function(data){
                b.html(data)
            },
            error: function(data){
                b.html("Error Bro! Fix me Up Fast....... ")
            }
        })
    });


    $("#searchbxtodolist").on("keyup",function(){
        var a = $(this).val();
        var b = $("#tablecon");
        $.ajax({
            url: "action/search_todo.php",
            type: "GET",
            data:{
                query: a
            },
            success: function(data){
                b.html(data)
            },
            error: function(data){
                b.html("Error Bro! Fix me Up Fast....... ")
            }
        })
    });




})
