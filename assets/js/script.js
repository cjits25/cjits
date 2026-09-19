function toggleMenu(){document.getElementById("mainMenu").classList.toggle("open");}
document.querySelectorAll(".drop > a").forEach(a=>{
  a.addEventListener("click",function(e){
    if(window.innerWidth<=900){e.preventDefault();this.parentElement.classList.toggle("open");}
  });
});
