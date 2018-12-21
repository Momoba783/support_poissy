// var http = require('http');
// // Appel a la bibliothe  Issu de NPM
// var server = http.createServer(function (req, res) {
//     // On lance le serveur web
//     res.writeHead(200);
//     res.end('Salut tout le monde ! ');
//     //Fonction a executé quand le user se connecte. C'est une Fonction callback
// });
// server.listen(8080);
// // req: requete user - page, params,champs froms
// // res: resultat - souvent code HTML a envoyer


// ------------------- Pour L'HTTP -------------------
// var http = require('http');
// var server = http.createServer(function (req, res) {
//     res.writeHead(200, { "Content-Type": "text/html" });
//     res.end('<p> Voici un paragraphe <strong>HTML</strong> !</p>');
// });
// server.listen(8080);


// ------------------- Pour l'URL -------------------
// var http = require('http');
// var url = require('url');

// var server = http.createServer(function (req, res) {
//     var page = url.parse(req.url).pathname;
//     console.log(page);
//     res.writeHead(200, { "Content-Type": "text/plain" });
//     res.write('Bien le bonjour');
//     res.end();
// });
// server.listen(8080);

// --------------- Condition apres le / -----------
var http = require('http');
var url = require('url');

var server = http.createServer(function (req, res) {
    var page = url.parse(req.url).pathname;
    console.log(page);
    res.writeHead(200, { "Content-Type": "text/plain" });
    if (page == '/') {
        res.write('Vous etes a la page d\'accueil, que puis-je pour vous ?');
    } else if (page == '/sous-sol') {
        res.write('Vous etes dans la cave a vins, ces bouteilles sont à moi !');
    }else if (page == '/etage/1/chambre') {
        res.write('Hé ho, c\'est privé ici !');
    }
    res.end();
});
server.listen(8080);
