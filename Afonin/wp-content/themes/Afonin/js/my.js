// переход между модальными окнами
function myFunction1() {
    var element = document.body;
    element.classList.add("modal-open");
}
function myFunction() {
    setTimeout(myFunction1, 500);
}
