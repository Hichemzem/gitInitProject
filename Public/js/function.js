// declaration de la fonction
/*const checkAdmis = function (nbr){
    let note,moyenne,admis;
    let somme = 0;
    
    for(let i =0; i<nbr; i++)
    {
        note = parseInt(prompt('saisir la note'+(i+1)));
        somme += note;
    }
    
    moyenne = calculMoy(somme,nbr)
    
    if(moyenne>=10) admis=true;
    else admis=false;

    return admis;
}

const calculMoy = function (somme,nbr){
    moyenne = somme/nbr;
    return moyenne;
}


//appel et execution de la fonction
let nbr = parseInt(prompt('donner le nombre de notes a saisir'));
let result1 = checkAdmis(nbr)
console.log('moyenne',result1)  

let tab1 = [];
console.log(tab1)
tab1.push(2);
tab1.push(12);
tab1.push(5);
tab1.push(10);
tab1.push(5);
console.log(tab1)
tab1[1] = 'new 12';
console.log(tab1)

for(let i=0; i < tab1.length; i++){
    console.log('la colonne ',i, 'contient : ',tab1[i])
    tab1[i]=0;
}
console.log(tab1)

    

let etudiant1obj = {
    tel : "055586765",
    adresse : 'adresse',
    nom : 'ouarass',
    prenom : 'zinou',
    age : 20,
    showName : function (){
        alert('bienvenue '+this.nom)
    }
}
console.log(etudiant1obj)
etudiant1obj.nom = 'new nom';
etudiant1obj.showName()
*/


//declaration de la fonction de calcule dela somme

const somme = function (a,b){
    let s;
    s = a+b;
    return s;
}

//execution de la fonction de calcule de la somme
let s1 = somme(6,9)
console.log(s1)


const tabinsert= function(tablengh,valUp,valInit){
    let tab1 = [];
    let valAug = valInit;

for(let i = 0; i<tablengh; i++){
    tab1.push(valAug)
    valAug+=valUp;
}

return tab1;

}

let result1= tabinsert(8,2,0)
let result2= tabinsert(3,5,0)
let result3= tabinsert(5,8,0)
console.log(result1)
console.log(result2)
console.log(result3)

