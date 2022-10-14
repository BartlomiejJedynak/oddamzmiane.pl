function ques_show(){

    let confirm_box = document.querySelector(".confirm_box");

        confirm_box.classList.remove("hiden");

        

        let no_button = document.querySelector(".nope");

        no_button.addEventListener("click", () =>{

    confirm_box.classList.add("hiden");



});

}