

const iconMenu = document.querySelector('.header__icon-menu');
   if (iconMenu) {
      const headerMenu = document.querySelector('.header__menu');
      iconMenu.addEventListener("click", function(e){
         iconMenu.classList.toggle('_active');
         headerMenu.classList.toggle('_active');
      });
   }