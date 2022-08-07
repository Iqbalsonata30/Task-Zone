const session    = document.getElementById('message')
const checkbox   = document.getElementById('checkbox')
const changeMode = document.querySelector('html');
if(session){
  setTimeout(() =>{ 
    session.classList.add('hidden');
  },2000)
}

checkbox.addEventListener('click',()=>{
  (checkbox.checked == false) 
  ? changeMode.setAttribute('data-theme','light') 
  : changeMode.setAttribute('data-theme','dark') 

})

