const form = document.querySelector('.wrapper form');
const fullrul = document.querySelector('input');
const shortenbnt = document.querySelector('button');
let blurEffect = document.querySelector('.blur-effect');
let popupBox = document.querySelector('.popup-box');
let input = popupBox.querySelector('input');

form.onsubmit = (e) => {
    e.preventDefault();
};

shortenbnt.addEventListener('click', () => {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'index.php', true);
    xhr.onload = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let responseStat = xhr.responseText; // Corrected response handling
            if (responseStat.length <= 5) {
                let domain = 'localhost/url?u='; // Corrected domain name

                input.value = domain + responseStat;
                popupBox.style.display = 'block';
                blurEffect.style.display = 'block';
            } else {
                alert(responseStat);
            }
        }
    };
    let formData = new FormData(form);
    xhr.send(formData);
});
