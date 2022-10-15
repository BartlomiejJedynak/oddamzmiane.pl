const data_shift_table = document.querySelectorAll(".popup_trigger");
const popup_for_take = document.querySelectorAll(".popup_for_take");
for (let i = 0; i <= data_shift_table.length; i++) {
      data_shift_table[i].onclick = function(){
          popup_for_take[i].classList.toggle("hiden");
      }
}
