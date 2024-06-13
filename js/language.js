require('dotenv').config();

document.addEventListener("DOMContentLoaded", function (e) {
  ConveyThis_Initializer.init({
    api_key: process.env.API_KEY,
  });
});