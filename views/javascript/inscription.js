const form=document.getElementById('form');
const password1 = document.getElementById('password1');
const password2 = document.getElementById('password2');


form.addEventListener('submit', e=>{
    e.preventDefault();
    verify();
    confirmation();
})
function verify(){
    const password1_value=password1.value.trim();
    const password2_value=password2.value.trim();
    if(password1_value!==password2_value){
        alert('les mots de passes ne corespondent pas');
        return false;
    }else{
        return true;
    }

}
    
 function confirmation(){
    if(verify()){
      var value = confirm("voulez-vous confirmer votre inscription avec ces information ?");
     if(value){
         alert("inscription reussie");
     }else{
         alert("soumission annulee ");
     }
    }
}