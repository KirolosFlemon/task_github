var perPage = document.getElementById("perpage");
var page = document.getElementById("page");
var date = document.getElementById("date");
var language = document.getElementById("language");
var search = document.getElementById("search");

var result = [];
fetch('/task/api')
    .then((response) => response.json())
    .then((data) => {
        result = data.items;
        viewData();
    });


function viewData() {

    var contianerTable = '';
    for (i = 0; i < result.length; i++) {
        contianerTable += `  
        <tr>
        <td>${i}</td>
        <td>${result[i].description}</td>
        <td>${result[i].language}</td>
        <td>${result[i].full_name}</td>
        <td>${result[i].created_at}</td>
      </tr>`
    }
    console.log(contianerTable);
    document.getElementById('tableBody').innerHTML = contianerTable;
}


search.addEventListener("click", function() {

    fetch('/task/api', {
            method: 'POST',
            body: JSON.stringify({

                perpage: perPage.value,
                page: page.value,
                date: date.value,
                language: language.value
            }),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
        })
        .then((response) => response.json())
        .then((data) => {
            result = data.items;
            viewData();
        });

})