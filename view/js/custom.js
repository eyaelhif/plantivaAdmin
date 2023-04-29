function openModal(idU, firstU, lastU, phoneU, addressU) {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";

    document.getElementById("idU").value = idU;
    document.getElementById("firstU").value = firstU;
    document.getElementById("lastU").value = lastU;
    document.getElementById("phoneU").value = phoneU;
    document.getElementById("addressU").value = addressU;
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

window.onclick = function(event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function validatePhoneLength(input) {
    var phone = input.value;
    var phoneLength = phone.length;

    if (phoneLength < 8 || phoneLength > 8) {
        input.setCustomValidity("Phone number must be exactly 8 digits.");
    } else {
        input.setCustomValidity("");
    }
}

function openAddUserModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "block";

    document.getElementById("addIdU").value = "";
    document.getElementById("addFirstU").value = "";
    document.getElementById("addLastU").value = "";
    document.getElementById("addPhoneU").value = "";
    document.getElementById("addAddressU").value = "";
}

  
function closeModalAdd() {
    var modal1 = document.getElementById("add");
    var modal2 = document.getElementById("addUserModal");
  
    modal1.style.display = "none";
    modal2.style.display = "none";
}
  
$(document).ready(function() {
    $('#addUserBtn').click(function() {
      openAddUserModal("addUserModal");
    });
});
function estUnTexte(chaine) {
    return /^[a-zA-Z]+$/.test(chaine);
}

const champTexte = document.getElementById('champ_texte');


document.getElementById('mon_formulaire').addEventListener('submit', function(event) {
 
  const texte = champTexte.value.trim();

 
  if (texte === '') {
    alert('Le champ de texte est vide');
    event.preventDefault();
  }
 
  else if (!/^[a-zA-Z]+$/.test(texte)) {
    alert('Le champ de texte ne doit contenir que des lettres');
    event.preventDefault(); 
  }
  else {
    
    alert('Le champ de texte est valide');
  }
});


