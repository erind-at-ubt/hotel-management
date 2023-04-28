function getCurrentDateEuropeanFormat() {
    const date = new Date();
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const year = date.getFullYear();
    return `${day}/${month}/${year}`;
}

function currentDay() {
    const daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    const todayIndex = (new Date().getDay() + 6) % 7;
    return daysOfWeek[todayIndex];
}
  

let current_day_text = document.getElementById("current_day");
let current_date_text = document.getElementById("current_date");

current_day_text.innerHTML = currentDay();
current_date_text.innerHTML = getCurrentDateEuropeanFormat();