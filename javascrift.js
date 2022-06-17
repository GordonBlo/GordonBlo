const date = new Date();

const renderCalendar = () => {
  date.setDate(1);

  const monthDays = document.querySelector(".days");
 
  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth() + 1, 0
  ).getDate();

  const prevLastDay = new Date(
    date.getFullYear(),
    date.getMonth(), 0
  ).getDate();

  const firstDayIndex = date.getDay();

  const lastDayIndex = new Date(
    date.getFullYear(),
    date.getMonth() + 1, 0
  ).getDay();

  const nextDays = 7 - lastDayIndex - 1;

  //
  //  Megadni a datumokat (nap/hopnap/ev...)
  //  --->

  const months = [
    "Januar",
    "Februar",
    "Marcius",
    "Aprilis",
    "Majus",
    "Junius",
    "Julius",
    "Augusztus",
    "Szeptember",
    "Oktober",
    "November",
    "December",
  ];

  document.querySelector(".date h1").innerHTML = months[date.getMonth()];

  document.querySelector(".date p").innerHTML = new Date().toDateString();

  let days = "";

  for (let x = firstDayIndex; x > 0; x--) {
    days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
  }

  for (let i = 1; i <= lastDay; i++) {
    if (
      i === new Date().getDate() &&
      date.getMonth() === new Date().getMonth()
    ) {
      days += `<div class="today">${i}</div>`;
    } else {
      days += `<div>${i}</div>`;
    }
  }

  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="next-date">${j}</div>`;
    monthDays.innerHTML = days;
  } // <--- vege

  //
  //  Ha ra click elunk egy szamra 1-31 ig akkor kidob egy ablakot
  //  ahova be lehet irni az adott napit tevekenysegetek.
  //  --->

  let day_list = document.querySelector(".jumpPage")
  let day_picker = document.querySelectorAll(".calendar .days > div");
  day_picker.forEach((e) => {
    e.addEventListener('click', (event) => {
      day_list.classList.add("show")
    });
  });
  // <---

  // ok click
  let button = document.querySelector(".exit");
  button.onclick = () => {
    day_list.classList.remove("show");
  }

  // Ez a textBox nak a kodja, hogy nem menjunk tul es kovessen mindek iras kozben
  const textarea = document.querySelector("textarea")
  textarea.addEventListener("keyup", e => {
    textarea.style.height="auto";
    let scHeight = e.target.scrollHeight;
    textarea.style.height = `${scHeight}px`;
  })

  // a textbox ban levo datum
  const date2 = new Date();
  document.querySelector(".date2").innerHTML = new Date().toDateString();

};

document.querySelector(".prev").addEventListener("click", () => {
  date.setMonth(date.getMonth() - 1);
  renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
  date.setMonth(date.getMonth() + 1);
  renderCalendar();
});

renderCalendar();