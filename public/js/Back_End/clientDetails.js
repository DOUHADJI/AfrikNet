
 
// Getting the informations from the form to modify  client informations


let modifiyClientInformationsForm = document.getElementById('modifiyClientInformationsForm');


var clientName;
var clientPrenom;
var clientContact;
var clientEmail;
var clientPays;
var clientVille;
var clientType;


//-----------------------Name----------------------------------
var nameInput = document.getElementById('modifiyClientInformationsForm_name');

clientName = nameInput.value ;





//------------------------Prenom------------------------

var prenomInput = document.getElementById('modifiyClientInformationsForm_prenom');

clientPrenom = prenomInput.value ;



//-----------------------Contact----------------------------


var contactInput = document.getElementById('modifiyClientInformationsForm_contact');

clientContact = contactInput.value ;



//---------------------------Email------------------------------------


var emailInput = document.getElementById('modifiyClientInformationsForm_email');

clientEmail = emailInput.value ;




//---------------------------Pays------------------------------------


var paysInput = document.getElementById('modifiyClientInformationsForm_pays');

clientPays = paysInput.value ;




//---------------------------Ville------------------------------------


var villeInput = document.getElementById('modifiyClientInformationsForm_ville');

clientVille = villeInput.value ;




//----------------------Type----------------------------------------------

var typeInput = document.getElementById('modifiyClientInformationsForm_type');

    clientType = typeInput.value ;



//------------------Creating formData object---and---submit form event--------------------------------



modifiyClientInformationsForm.addEventListener('submit' , function(e) {

    e.preventDefault();

var data = new FormData();

var action= modifiyClientInformationsForm.getAttribute("action");


    data.append('name', clientName);
    data.append('prenom', clientPrenom);
    data.append('contact', clientContact);
    data.append('email', clientEmail);
    data.append('ville', clientVille);
    data.append('pays', clientPays);
    data.append('type', clientType);


    const request = new XMLHttpRequest();

request.open('POST', action , true);

request.onreadystatechange = function() {

    if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
      
      console.log(this.responseText);

      $ (function(){
        alert('Informations submitted');
    });
      
    }

 
};

request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

request.send(data);




}); 








