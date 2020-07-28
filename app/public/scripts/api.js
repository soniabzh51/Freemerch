function getAddress() {
    document.getElementById('foundAddress').innerHTML = '';
    let postAddress = document.getElementById('address').value;

    fetch("https://api-adresse.data.gouv.fr/search/?q=" + postAddress)
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {


            json.features.forEach(function (feature) {
                let li = document.createElement('li');
                li.innerText = feature.properties.label;
                document.getElementById('foundAddress').appendChild(li);

                li.addEventListener('click', function () {
                    let address = document.getElementById('address');
                    address.value = li.textContent;
                    li.innerHTML = "";
                })
            })
        })
}