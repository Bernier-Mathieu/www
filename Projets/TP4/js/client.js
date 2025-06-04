var socket = io();

socket.emit('set-pseudo',prompt("Pseudo ?"));

var id_salon = 'salon';
var lesMessages = [];
var idUser = document.getElementById('utilisateurs');
var messages = document.getElementById('messages');
var form = document.getElementById('form');
var input = document.getElementById('input');
form.onsubmit = () => { return false }


form.addEventListener('submit',(e) => {
    socket.envoie = e
    if(input.value != '');
        socket.emit('emission_message', input.value);
    input.value="";
    var dest_ID = salon(id);
    console.log(dest_id);

});

socket.on('reception_message', (contenu)=> {
    console.log(contenu.pseudo+" : "+ contenu.message);
    const li = document.createElement('li');
    li.innerText = contenu.pseudo+" : "+ contenu.message;
    messages.appendChild(li)
});

socket.on('reception_utilisateur', (contenu)=> { 
    idUser.innerHTML ='<img src="/groupe"><a href="#" id="'+id_salon+'"  onClick ="salon(this.id);">' + "salon" +  '</a>';
    contenu.forEach((item) => {
        const li = document.createElement('li');   
        console.log(item.pseudo_client);
        id1 = item.id_client;
        li.innerHTML = '<a href="#" id="'+id1+'"  onClick ="salon(this.id);">' + item.pseudo_client +  '</a>';
        utilisateurs.appendChild(li);
        console.log(id1);
    });
});

function salon(id){ 
    console.log(id);
}
function check_unread(){
    
}