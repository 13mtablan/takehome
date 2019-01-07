(function(){
    var hamburger = document.querySelector('.nav-bar__hamburger-container');
    hamburger.addEventListener('click',function(){
       
        var menu = document.querySelector('.nav-bar-overlay');
       

        if(menu.style.display == 'block'){
            menu.style.display = 'none';
        } else {
            menu.style.display = 'block';
        }
    })
})();
