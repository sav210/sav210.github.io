function refresh_stata(count = false){
    $.getJSON('https://cymonprojects.000webhostapp.com/crashprotect/main_page.json', function(data) {
        if(count){
            count("servers", Number(document.getElementById("servers").innerHTML), data["servers"], 1)
            count("shards", Number(document.getElementById("shards").innerHTML), data["shards"], 1)
        }
        else{
            document.getElementById("servers").innerHTML = data["servers"];
            document.getElementById("shards").innerHTML = data["shards"];
        }
    });
}