var express = require('express');
var mysql = require('mysql');
var app = express();
const path = require('path');
const port = 8080;
var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "root",
    database: "sitemiage"
});

con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
});

app.get("/bonjour",function (req,res){
    res.writeHead(200, {"Content-Type": "text/html"});
    var sql = "select * from personne;";
    con.query(sql, function (err, result) {
        if (err) throw err;
        console.log(result);
        res.write("Bonjour " + result[0].Nom + " " + result[0].Prenom)
    });
});

app.get('/inscription', (req, res) => {
    res.sendFile(path.join(__dirname, 'inscription.html'));
});

app.get('/connexion', (req, res) => {
    res.sendFile(path.join(__dirname, 'connexion.html'));
});

app.listen(port, () => {
    console.log(`Serveur en cours d'exécution sur le port ${port}`);
});