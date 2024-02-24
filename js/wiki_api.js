
var url = "http://en.wikipedia.org//w/api.php?action=query&origin=*&format=json&prop=revisions&titles=List_of_social_platforms_with_at_least_100_million_active_users&formatversion=2&rvprop=content&rvslots=*";

var xhr = new XMLHttpRequest();
xhr.open('GET', url, true);

xhr.onload = function () {
    // Parse the request into JSON
    var data = JSON.parse(this.response);

    console.log(data);

    const header = document.getElementById("wiki-header");
    const desc = document.getElementById("wiki-description");


    // Pulling out the titles of each page
    for (var i in data.query.pages) {
        const v1 = data.query.pages[i].title
        const v2 = data.query.pages[i].revisions[0].slots.main.content

        console.log(v1);
        console.log(v2);

        header.innerHTML += v1;
        desc.innerHTML += v2;
    }
}

// Send request to the server
xhr.send();