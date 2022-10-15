function ques_show(){
    let confirm_box = document.querySelector(".confirm_box");
    let no_button = document.querySelector(".nope");
        confirm_box.classList.remove("hiden");
        
    no_button.addEventListener("click", () =>{
        confirm_box.classList.add("hiden");
    });
}