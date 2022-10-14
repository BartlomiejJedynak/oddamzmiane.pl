var show_date = document.getElementById("date");

var av_shift = document.querySelector(".av_shift");


var week_send_box = document.querySelector(".week_send"); // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

var add_day = document.getElementById("add_day");

var sub_day = document.getElementById("sub_day");

var day_before = document.getElementById("day");

var day_change = document.getElementById("day");

var day_www = document.getElementById("day_w");

var day_zzz = document.getElementById("day_z");

var month_change = document.getElementById("month");


var today = new Date();

var year = today.getFullYear();

var month = today.getMonth()+1;

var day = today.getDate();

var day_w = today.getDay();

function send_date(){

    date="<input id='get_date' class='' name='send_date' value="+year+'-'+month+'-'+day+"></input>";

    show_date_confirm.innerHTML ='<b>'+year+'-'+month+'-'+day+'</b>';

    show_date.innerHTML=date;

    year_av_box = document.querySelector(".year_av_box");

    month_av_box = document.querySelector(".month_av_box");

    day_av_box = document.querySelector(".day_av_box");

    year_av="<input class='' name='year' value="+year+"></input>";

    month_av="<input class='' name='month' value="+month+"></input>";

    day_av="<input class='today_shift ' name='day' value="+day+"></input>";

    year_av_box.innerHTML=year_av;

    month_av_box.innerHTML=month_av;

    day_av_box.innerHTML=day_av;

}

send_date();

day_of_the_weak();

document.getElementById("year").innerHTML = year;

document.getElementById("month").innerHTML = month;

document.getElementById("day").innerHTML = day;

day_www.innerHTML=day_ww;

day_zzz.innerHTML=day_ww;



function day_of_the_weak(){

    switch(day_w){

        case 0:

            day_ww="niedziela";

            break;

        case 1:

            day_ww="poniedziałek";

            break;

        case 2:

            day_ww="wtorek";

            break;

        case 3:

            day_ww="środa";

            break;

        case 4:

            day_ww="czwartek";

            break;

        case 5:

            day_ww="piątek";

            break;

        case 6:

            day_ww="sobota";

            break;

        case 7:

            day_ww="niedziela";

            break;

    }

}

function month_of_the_year(){

    switch(month){

        case 1:

        d=31;

        break;

        case 2:

            if(year==2024 || year==2028){

                d=29;

            }

            else{

                d=28;

            }

        break;

        case 3:

            d=31;

            break;

        case 4:

            d=30;

            break;

        case 5:

            d=31;

            break;

        case 6:

            d=30;

            break;

        case 7:

            d=31;

            break;

        case 8:

            d=31;

            break;

        case 9:

            d=30;

            break;

        case 10:

            d=31;

            break;

        case 11:

            d=30;

            break;

        case 12:

            d=31;

            break;

    }

}

var day_of_the_year = document.querySelector(".day_of_the_year").value;

var day_of_y = document.querySelector(".d_o_y");

var week_nr = document.querySelector(".week").value;//actual nr of the week from the input with php function value

var actual_week_nr = document.querySelector(".week").value;//actual nr of the week from the input with php function value

var actual_day_of_the_week = document.querySelector(".day_of_the_week").value; //actual day of the week from the input with php function value

var week_nr_compare=week_nr-2;// week compare -2 (it works even when the year is ending and does not need to be set) when actual week nr is 0 this value is -2

var week_send_value=week_nr; //set week send value as week_nr

function niceFunction(){

    if(day_w==7){   //DNI TYGODNIA

        day_w=0;

    }

    if(day==1){

        month++;

        }

        month_of_the_year();

    if(day==d+1){

        day=1;

        month++;

        if(month==13){

            month=1;

            year++;

            document.getElementById("year").innerHTML = year;

        }

    }

        day_of_the_weak();

        send_date();

        day_change.innerHTML=day;

        day_www.innerHTML=day_ww;  

        day_zzz.innerHTML=day_ww;  

        month_change.innerHTML=month;

        sub_day.classList.remove("hiden");

        day_before.classList.remove("day_before");

}



add_day.onclick = function(){

    day_of_the_year++;

    day_of_y.innerHTML="<input class='d_o_y' value="+day_of_the_year+"></input>";

    if(day_w==0){   //DNI TYGODNIA

        if(week_send_value==53){

            week_send_value=0;

        }

        week_send_value++; 

        week_send_box.innerHTML="<input class='ws' name='week_send' value="+week_send_value+"></input>";

    }



    if (document.querySelector('.adnw') !== null) {
        if(week_send_value!=actual_week_nr){

        if(day_w==6){ //if week compare is equal to actal nr of the week hide unable button "add_day" -> works only if user have ability to get to the next week with adding days whitch is set by the erlier conticion 

            add_day.classList.remove("qwe");
            add_day.classList.add("hiden");

            }

        }

    }

    else if (document.querySelector('.qwe') !== null){
            //alternatywny skrypt do blokowania przycisku kolejnej zmiany -> menu->give.inc->alt.give.shift
        if(day_w==6){ //if week compare is equal to actal nr of the week hide unable button "add_day" -> works only if user have ability to get to the next week with adding days whitch is set by the erlier conticion 

                add_day.classList.add("hiden");
        }

    }

    day++;

    day_w++;

    niceFunction();

}

var day_z=day;

sub_day.onclick = function(){

    day_of_the_year--;

    day_of_y.innerHTML="<input class='d_o_y' value="+day_of_the_year+"></input>";

    add_day.classList.remove("hiden");

    if(day_w==1){

        week_send_value--;

        week_send_box.innerHTML="<input class='' name='year' value="+week_send_value+"></input>";

    }

    day--;

    day_w--;

    // days of the week

    if(day_w==-1){

        day_w=6;

    }

    if(day==0){

        month--;

    }  

    month_of_the_year();

    month_change.innerHTML=month;

    for(day=day; day==0; day--){

        day=d+1;

    }

    day_of_the_weak();

    send_date();

    day_change.innerHTML=day;

    day_www.innerHTML=day_ww;

    if(day==day_z){

        sub_day.classList.add("hiden");

    }

}


