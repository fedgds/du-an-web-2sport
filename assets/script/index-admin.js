//menu-down-admin
var menuItems = document.querySelectorAll('.menu-list li');
for (var i = 0; i < menuItems.length; i++) {
if (menuItems[i].querySelector('.menu-item')) {
        menuItems[i].addEventListener('click', function() {
        var dropdownMenu = this.querySelector('.menu-item');
        this.classList.toggle('active'); 
        dropdownMenu.classList.toggle('active');   
    });
}
}
//show-menu-admin
var bars=document.querySelector('.bars');
var listMenu=document.querySelector('.menu-list');
var btnExit=document.querySelector('.btn-exit');
var showOverlay=document.querySelector('.overlay');

bars.addEventListener('click',()=>{
    listMenu.classList.toggle('show-menu');
    showOverlay.classList.toggle('show-overlay');
    btnExit.addEventListener('click',()=>{
        listMenu.classList.remove('show-menu');
        showOverlay.classList.remove('show-overlay');
    });
});
showOverlay.addEventListener('click',()=>{
    listMenu.classList.remove('show-menu');
    showOverlay.classList.remove('show-overlay');
});
btnMenuLisst.addEventListener('click',()=>{
    showMenuItem.classList.toggle('show-menu-item');
});


