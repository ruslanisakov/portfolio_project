const
    body       = document.querySelector('body'),
    sidebar    = body.querySelector('nav'),
    toggle     = body.querySelector(".toggle"),
    searchBtn  = body.querySelector(".search-box"),
    // modeSwitch = body.querySelector(".toggle-switch"), //Night-Mode
    modeText   = body.querySelector(".mode-text");

toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

//Night-Mode
// modeSwitch.addEventListener("click" , () =>{
//     body.classList.toggle("dark");
//     if(body.classList.contains("dark")) modeText.innerText = "Light mode";
//     else                                modeText.innerText = "Dark mode";
// });
//Night-Mode
