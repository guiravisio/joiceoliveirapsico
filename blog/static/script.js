
/* Abre e fecha navegação */
const menuMobile = document.querySelector('.menu-mobile')
const body = document.querySelector('body')
const menuIcon = menuMobile ? menuMobile.querySelector('i') : null

if (menuMobile && menuIcon) {
  menuMobile.addEventListener('click', () =>  {
    const open = body.classList.toggle("menu-nav-active")
    menuMobile.setAttribute('aria-expanded', open ? 'true' : 'false')
    menuMobile.setAttribute('aria-label', open ? 'Fechar o menu de navegação' : 'Abrir o menu de navegação')
    menuIcon.classList.contains("bi-list")
      ? menuIcon.classList.replace("bi-list", "bi-x")
      : menuIcon.classList.replace("bi-x" , "bi-list");
  })
}

/* Fecha ao selecionar nav */
const navItem = document.querySelectorAll('.nav-item')

navItem.forEach(item => {
    item.addEventListener("click", () =>{
        if(body.classList.contains("menu-nav-active")){
            body.classList.remove("menu-nav-active")
            if (menuMobile && menuIcon) {
              menuMobile.setAttribute('aria-expanded', 'false')
              menuMobile.setAttribute('aria-label', 'Abrir o menu de navegação')
              menuIcon.classList.replace("bi-x" , "bi-list");
            }
        }
    })
})

/* Animação */

const item = document.querySelectorAll("[data-anime]");

const animeScroll = () => {
  const windowTop = window.scrollY + window.innerHeight * 0.85;

  item.forEach(element => {
    if (windowTop > element.offsetTop){
      element.classList.add("animate");
    }
  })

}

animeScroll()

window.addEventListener("scroll", ()=>{
  animeScroll();
})

const btnEnviar = document.querySelector('#btn-enviar')
const btnEnviando = document.querySelector('#btn-enviando')
const formContato = document.querySelector('#contato form')

if (formContato && btnEnviar && btnEnviando) {
  formContato.addEventListener("submit", () => {
    btnEnviando.style.display = "inline-flex";
    btnEnviar.style.display = "none"
  })
}

const alerta = document.querySelector('#alerta')
if (alerta) {
  setTimeout(()=>{
    alerta.style.display = 'none';
  }, 5000)
}

if (typeof $ !== 'undefined' && $.fn.slick) {
  $('.slider-responsive').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      }
    ]
  });
}
