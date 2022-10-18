function change(a){
    // let box=".box_"+a;
    let no=".no_"+a;
    let box_nr = document.querySelector(".box_"+a);
    let change_box=document.querySelector(".change_box");
    let show_change_box_nr=document.querySelector(".show_change_box_"+a);
    let chg=document.querySelector(".chg"+a);


    // box_nr.style.height = '100%';
    show_change_box_nr.style.margin= '70px 0px 0px 0px';
    // box_nr.style.padding='60px 0px 0px 0px';
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
    let box_nr = document.querySelector(".box_"+b);
    let change_box=document.querySelector(".change_box");
    let gvb=document.querySelector(".gvb"+b);
    let show_change_box_nr=document.querySelector(".show_change_box_"+b);

    show_change_box_nr.style.margin='50px 0px 0px 0px';
    gvb.classList.remove("hiden");
    box_nr.classList.remove("hiden");
    box_nr.style.height = '100%';
    let no_button = document.querySelector(no);
    no_button.addEventListener("click", () =>{
    box_nr.classList.add("hiden");
    // alert(box);
    })
    }
