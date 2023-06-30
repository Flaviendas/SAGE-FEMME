let navs= document.querySelectorAll('.navbar .navbar-nav a');
console.log(navs);

navs.forEach((nav,index)=>{

   nav.addEventListener('click',()=>{
    navs.forEach((nav,index)=>{
        navs[index].classList.remove('active');
    })
    navs[index].classList.add('active');
   });
})

