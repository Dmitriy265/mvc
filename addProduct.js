"use strict"

let form = document.querySelector("form");

form.onsubmit = function (event) {
  event.preventDefault();
  let formData = new FormData(form);
  fetch('http://y95327t3.beget.tech/mvc/products/add',{
    method: 'POST',
    body: formData,
  })
    .then(response =>response.text())
    .then(result => {console.log(result)});
}
