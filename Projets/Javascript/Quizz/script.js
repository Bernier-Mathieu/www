let Quizz = {
    Question : ["Quelle est la capitale de la France ?", "Quelle est la capitale de l'Allemagne ?" ] ,
    Answer : ["Paris", "Berlin" ]
};


function CheckAnswer(PlayerAnswer,Boucle){
    if(PlayerAnswer.toLowerCase()===Quizz.Answer[Boucle].toLowerCase()){
        alert("Bonne réponse");
    }
    else{
        alert("Mauvaise réponse");
    }
}


for(Boucle=0;Boucle<2;Boucle++){
    let PlayerAnswer = prompt(Quizz.Question[Boucle]);
    CheckAnswer(PlayerAnswer, Boucle);
}
