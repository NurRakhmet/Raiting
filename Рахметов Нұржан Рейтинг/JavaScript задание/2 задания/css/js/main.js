const form = document.forms["form"];
const formArr = Array.from(form);
const validFormArr = [];
const button = form.elements["button"];

formArr.forEach((el) => {
  if (el.hasAttribute("data-reg")) {
    el.setAttribute("is-valid", "0");
    validFormArr.push(el);
  }
});

form.addEventListener("input", inputHandler);
button.addEventListener("click", buttonHandler);

function inputHandler({ target }) {
  if (target.hasAttribute("data-reg")) {
    inputCheck(target);
  }
}

function inputCheck(el) {
  const inputValue = el.value;
  const inputReg = el.getAttribute("data-reg");
  const reg = new RegExp(inputReg);
  if (reg.test(inputValue)) {
    el.setAttribute("is-valid", "1");
    el.style.border = "2px solid rgb(0, 196, 0)";
  } else {
    el.setAttribute("is-valid", "0");
    el.style.border = "2px solid rgb(255, 0, 0)";
  }
}

function buttonHandler(e) {
  const allValid = [];
  validFormArr.forEach((el) => {
    allValid.push(el.getAttribute("is-valid"));
  });
  const isAllValid = allValid.reduce((acc, current) => {
    return acc && current;
  });

  if (!Boolean(Number(isAllValid))) {
    e.preventDefault();
  }
}

function isNotMax(e){
  e = e || window.event;
  var target = e.target || e.srcElement;
  var code=e.keyCode?e.keyCode:(e.which?e.which:e.charCode)

  switch (code){
      case 13:
      case 8:
      case 9:
      case 46:
      case 37:
      case 38:
      case 39:
      case 40:
      return true;
  }
  return target.value.length <= target.getAttribute('maxlength');
}

function out() {
  let value1 = document.getElementById('name').value;
  let value2 = document.getElementById('mail').value;
  let value3 = document.getElementById('phone').value;
  let value4 = document.getElementById('message').value;
  if (!value1, !value2, !value3, !value4) 
    return;
  let container=document.createElement('div');
  container.className = "container";
  container.innerHTML = "<br>" + "<b>Имя: </b>" + value1 + "<br>" + "<b>E-mail: </b>" + value2 + "<br>" + "<b>Телефон: </b>" + value3 + "<br>" + "<b>Комментария: </b>" + value4;
  document.getElementById('out').appendChild(container)
}