const mes = document.getElementById("mes");
const dia = document.getElementById("dia");

const mesesArr = [
  "Enero",
  "Febrero",
  "Marzo",
  "Abril",
  "Mayo",
  "Junio",
  "Agosto",
  "Septiembre",
  "Octubre",
  "Noviembre",
  "Diciembre",
];

window.onload = () => {
  let fragment1 = document.createDocumentFragment();
  
  for (let i = 0; i < 11; i++) {
    let option1 = document.createElement("option");
    option1.setAttribute("value", mesesArr[i]);
    option1.innerText = mesesArr[i];
    fragment1.appendChild(option1);
  }
  mes.appendChild(fragment1);

  let fragment2 = document.createDocumentFragment();
  for (let i = 1; i <= 31; i++) {
    let option2 = document.createElement("option");
    option2.setAttribute("value", i);
    option2.innerText = i;
    fragment2.appendChild(option2);
  }
  
  dia.appendChild(fragment2);
};

