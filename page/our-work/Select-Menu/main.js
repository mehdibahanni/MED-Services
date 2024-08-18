let list = document.querySelector('#list')
let selectText = document.querySelector('.select-text')
let icon = document.querySelector('#arrow')



selectText.addEventListener('click',()=>{
    list.classList.toggle('hide')
    icon.classList.toggle('rotate')
})