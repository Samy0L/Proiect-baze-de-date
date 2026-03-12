const form = document.getElementById("patientForm");

if(form){

form.addEventListener("submit", function(e){

let cnp = document.querySelector("input[name='cnp']").value;

if(cnp.length !== 13){
alert("CNP invalid");
e.preventDefault();
}

});

}

document.addEventListener("DOMContentLoaded",function(){

console.log("Aplicatia spital a pornit");

});