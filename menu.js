let btnMenu = document.getElementById('btn_menu')
let menu = document.getElementById('menu_mobile')
let overlay = document.getElementById('overlay_menu')

// abrir o menu
btnMenu.addEventListener('click', ()=> {
    menu.classList.add('open-menu')
})

// fechar o menu
menu.addEventListener('click', ()=> {
    menu.classList.remove('open-menu')
})

// fechar o menu clicando fora do 'x'
overlay.addEventListener('click', ()=> {
    menu.classList.remove('open-menu')
})