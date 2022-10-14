
function change(a){
let box=".box_"+a;
let no=".no_"+a;
let box_nr = document.querySelector(box);

let change_box=document.querySelector(".change_box");
box_nr.classList.remove("hiden");

let no_button = document.querySelector(no);

no_button.addEventListener("click", () =>{

box_nr.classList.add("hiden");
// alert(box);
})
}
