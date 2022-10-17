function change(a){
    let box=".box_"+a;
    let no=".no_"+a;
    let box_nr = document.querySelector(box);
    let change_box=document.querySelector(".change_box");
    let show_change_box=document.querySelector(".show_change_box");
    let chg=document.querySelector(".chg");


    change_box.style.height = '115px';
    change_box.style.margin= '135px 0px 0px 0px';
    show_change_box.style.margin='10px 0px 0px 0px';
    box_nr.classList.remove("hiden");
    chg.classList.remove("hiden");
    let no_button = document.querySelector(no);
    no_button.addEventListener("click", () =>{
    box_nr.classList.add("hiden");
    // alert(box);
    })
}

function give_back(b){
    let box=".box_"+b;
    let no=".no_"+b;
    let box_nr = document.querySelector(box);
    let change_box=document.querySelector(".change_box");
    let gvb=document.querySelector(".gvb");
    gvb.classList.remove("hiden");
    box_nr.classList.remove("hiden");
    let no_button = document.querySelector(no);
    no_button.addEventListener("click", () =>{
    box_nr.classList.add("hiden");
    // alert(box);
    })
    }
