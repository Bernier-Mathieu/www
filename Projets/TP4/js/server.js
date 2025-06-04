const express = require('express');
const app = express();
const http = require('http');
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = new Server(server);
var path = require("path");
let PORT = 8080;

server.listen(PORT,() =>{ 
    console.log('Serveur démarré sur le port:'+PORT)
});

app.get('/', (req,res)=>{
    res.sendFile(path.join(__dirname, '..', 'index.html'));
});

app.get('/client', (req,res)=>{
    res.sendFile(path.join(__dirname, 'client.js'));
});

app.get('/style.css', (req,res)=>{
    res.sendFile(path.join(__dirname, '..', '/css/style.css'));
});

app.get('/utilisateur', (req,res)=>{
    res.sendFile(path.join(__dirname, '..', '/image/utilisateur.png'));
});

app.get('/groupe', (req,res)=>{
    res.sendFile(path.join(__dirname, '..', '/image/groupe.png'));
});

io.on('connection',(socket) => {
    
socket.on('set-pseudo',(pseudo)=>{
    console.log(pseudo + " vient de se connecter à "+new Date());
     socket.pseudo = pseudo;
    io.fetchSockets().then((room) =>{
        var utilisateurs=[];
        room.forEach ((item) => {
            utilisateurs.push({
                id_client :item.id,
                pseudo_client : item.pseudo,
            })
        });
        console.log (utilisateurs);
        io.emit('reception_utilisateur',utilisateurs)
    })
});

socket.on('emission_message',(message)=>{
    socket.emit('message',message)
    console.log(socket.pseudo + " à écrit : "+ message );
    socket.message = message;
    
    io.emit('reception_message',{
        pseudo: socket.pseudo,
        message: socket.message,
    });


});
    socket.on('disconnect',()=>{
    console.log(socket.pseudo + " vient de se déconnecter à "+new Date());
    io.fetchSockets().then((room) =>{
        var utilisateurs=[];
        room.forEach ((item) => {
            utilisateurs.push({
                id_client :item.id,
                pseudo_client : item.pseudo,
            });
        });
        console.log (utilisateurs);
        io.emit('reception_utilisateur',utilisateurs)
    })
    });

});

