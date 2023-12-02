// Create new XMLHTTP request and Get Data from another php file
function fetchDataFromServer() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "pnetwarning_squall.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var extractedData = JSON.parse(xhr.responseText);
            generateList(extractedData);
        }
    };
    xhr.send();
}

// Logic to handle data
function generateList(data) {
    var listContainer = document.getElementById('warning');

    if (data > 0){
        var messages = document.createElement('h1');
        messages.textContent('Hello');
        listContainer.appendChild(messages);
    } else {
        messages.textContent('Boo');
        listContainer.appendChild(messages);
    }
}

fetchDataFromServer();
