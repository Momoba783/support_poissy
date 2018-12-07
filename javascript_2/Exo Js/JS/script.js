

var td = document.getElementsByTagName('td');
var input = document.getElementsByTagName('input');
var button = document.getElementsByTagName('button');
// ton erreur c est que tas oublier button""[0]"" car  TagName renvoie automatiquement un tableau
button[0].onclick = function(e){
    e.preventDefault();
    td[4].innerHTML = input[0].value;
    td[5].innerHTML = input[1]. value;
    td[6].innerHTML = input[2].value;
    td[7].innerHTML = input[3].value;
};

// var nom = document.getElementsByClassName('Nom');
// var td1 = document.getElementById('Lenom');

// var prenom = document.getElementsByClassName('Prenom');
// var td2 = document.getElementById('Leprenom');

// var email = document.getElementsByClassName('Email');
// var td3 = document.getElementById('Lemail');

// var tel = document.getElementsByClassName('Tel');
// var td4 = document.getElementById('Letel');

// var button = document.getElementsByTagName('button');

// button.onclick = function(e){
//     e.preventDefault();
//     td1[0].innerHTML = nom.value;
//     td2[0].innerHTML = prenom.value;
//     td3[0].innerHTML = email.value;
//     td4[0].innerHTML = tel.value;
// };

// console.log(td1);

