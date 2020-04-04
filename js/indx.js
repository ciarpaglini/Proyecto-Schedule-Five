function sendJSON() {

    let result = document.querySelector('.result');
    let channel = document.querySelector('#channel');
    let to = document.querySelector('#to');
    let content = document.querySelector('#content');

    // Creating a XHR object 
    let xhr = new XMLHttpRequest();
    let url = "https://platform.clickatell.com/v1/message";

    // open a connection 
    xhr.open("POST", url, true);

    // Set the request header i.e. which type of content you are sending 
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.setRequestHeader('Authorization', '_arCcVrzR3GvOX0qY3E-Gw==');

    // Create a state change callback 
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {

            console.log('success');

            // Print received data from server 
            result.innerHTML = this.responseText;

        }
    };

    // Converting JSON data to string 
    var data = JSON.stringify({ "channel": channel.value, "to": to.value, "content": content.value });

    // Sending data with the request 
    xhr.send(data);
}