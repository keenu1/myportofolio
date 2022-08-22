const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle','nav-menu')

/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll('.navlink');   

function linkAction(){
    /*Active link*/
    navLink.forEach(n => n.classList.remove('active'));
    this.classList.add('active');
    
    /*Remove menu mobile*/
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show')
}
navLink.forEach(n => n.addEventListener('click', linkAction));

const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

sr.reveal('.homejudul',{}); 
sr.reveal('.button',{delay: 200}); 
sr.reveal('.homegambar',{delay: 400}); 
sr.reveal('.homesocialicon',{ interval: 200}); 

sr.reveal('.aboutgambar',{}); 
sr.reveal('.aboutsubtittle',{delay: 400}); 
sr.reveal('.abouttext',{delay: 400}); 

sr.reveal('.skillssubtittle',{}); 
sr.reveal('.skillstext',{}); 
sr.reveal('.skillsdata',{interval: 200}); 
sr.reveal('.skillsimg',{delay: 600});

sr.reveal('.workgambar',{interval: 200}); 

sr.reveal('.contactinput',{interval: 200}); 