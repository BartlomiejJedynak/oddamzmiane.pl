function change(a){
    let no=".no_"+a;
    let box_nr = document.querySelector(".box_"+a);
    let chg=document.querySelector(".chg"+a);
    let no_button = document.querySelector(no);

    box_nr.classList.remove("hiden");
    chg.classList.remove("hiden");


    no_button.addEventListener("click", () =>{
        box_nr.classList.add("hiden");
    })
}

function give_back(b){
    let no=".no_"+b;
    let box_nr = document.querySelector(".box_"+b);
    let gvb=document.querySelector(".gvb"+b);
    let no_button = document.querySelector(no);

    gvb.classList.remove("hiden");
    box_nr.classList.remove("hiden");


    no_button.addEventListener("click", () =>{
        box_nr.classList.add("hiden");
    })
    }
