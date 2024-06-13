document.addEventListener("DOMContentLoaded", function(e) {
    fetch('/.netlify/functions/getApiKey')
        .then(response => response.json())
        .then(data => {
            ConveyThis_Initializer.init({
                api_key: data.apiKey,
            });
        })
        .catch(error => console.error('Error fetching API key:', error));
});
