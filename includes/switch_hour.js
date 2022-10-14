function hours_show() {
    let from_hour = document.getElementById("from_hour").value;
    let to_hour = document.getElementById("to_hour").value;
    let from_min = document.getElementById("from_min").value;
    let to_min = document.getElementById("to_min").value;

    let show_from_h = document.getElementById("show_from_h");
    let show_to_h = document.getElementById("show_to_h");
    let show_from_m = document.getElementById("show_from_m");
    let show_to_m = document.getElementById("show_to_m");
    let show_msg = document.getElementById("msg");
    let confirm_box = document.querySelector(".confirm_box");
                // alerts
    alert_pg = "błędny przedział godzin";
    alert_zm = "ta zmiana jest zbyt krótka";
    emp="";
                //if shif has les then 2.5h
    if(to_hour-from_hour<3 && to_min-from_min<30){
        if(from_hour>=to_hour){ //if hour period is wrong
            show_msg.innerHTML = alert_pg;
        }
        else{
        show_msg.innerHTML = alert_zm;
        }
    }
    else{
        confirm_box.classList.remove("hiden");
        show_msg.innerHTML = emp;
        show_from_h.innerHTML = from_hour;
        show_to_h.innerHTML = to_hour;
        show_from_m.innerHTML = from_min;
        show_to_m.innerHTML = to_min;
    }
    let c_q = document.querySelector(".close-q");
    let no_button = document.querySelector(".no-button");
    c_q.addEventListener("click", () =>{
        confirm_box.classList.add("hiden");
    });

    no_button.addEventListener("click", () =>{
        confirm_box.classList.add("hiden");
    });
}

