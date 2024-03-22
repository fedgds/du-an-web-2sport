//menu-bar
var btnBars=document.querySelector('.btn-bars');
var showCategory=document.querySelector('.category');
var btnExit=document.querySelector('.btn-exit');
var showOverlay=document.querySelector('.overlay');
btnBars.addEventListener('click', ()=>{
    showCategory.classList.toggle('show-category');
    showOverlay.classList.toggle('show-overlay');
    showSearch.classList.remove('show-search');
    //
    btnExit.addEventListener('click', ()=>{
        showCategory.classList.remove('show-category');
        showOverlay.classList.remove('show-overlay');
    });
});
showOverlay.addEventListener('click',()=>{
    showCategory.classList.remove('show-category');
    showOverlay.classList.remove('show-overlay');
});
//show-reg-log
var btnUser=document.querySelector('.circle-user');
var showRegLog=document.querySelector('.reg-log');
btnUser.addEventListener('click',()=>{
    showRegLog.classList.toggle('show-reg-log');
});
// search-show-none 
var btnSearch=document.querySelector('.search-res');
var showSearch=document.querySelector('.search-wp-none');
btnSearch.addEventListener('click',()=>{
    showSearch.classList.toggle('show-search');
});

// slide banner
var images = [];
var imageNames = ["banner1.png", "banner2.png", "banner3.png"];
for (var i = 0; i < 3; i++) {
    images[i] = new Image();
    images[i].src = 'assets/img/' + imageNames[i];
}
var index = 0;
function prev() {
    index--;
    if (index < 0) {
        index = 2;
    }
    let banner = document.getElementById('banner');
    banner.src = images[index].src;
}
function next() {
    index++;
    if (index >= 3)
        index = 0;
    let banner = document.getElementById('banner');
    banner.src = images[index].src;
}
setInterval(next, 5000);
