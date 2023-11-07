//Menu
window?.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("abajo", window.scrollY > 0);
})
//Menu

//Inicio carrusel//
if (document.querySelector('#container-slider')) {
    setInterval('funcionEjecutar("siguiente")', 5000);
}
//------------------------------ LIST SLIDER -------------------------
if (document.querySelector('.listslider')) {
    let link = document.querySelectorAll(".listslider li a");
    link.forEach(function (link) {
        link?.addEventListener('click', function (e) {
            e.anteriorentDefault();
            let item = this.getAttribute('itlist');
            let arrItem = item.split("_");
            funcionEjecutar(arrItem[1]);
            return false;
        });
    });
}

function funcionEjecutar(side) {
    let parentTarget = document.getElementById('slider');
    let elements = parentTarget.getElementsByTagName('li');
    let curElement, siguienteElement;

    for (var i = 0; i < elements.length; i++) {

        if (elements[i].style.opacity == 1) {
            curElement = i;
            break;
        }
    }
    if (side == 'anterior' || side == 'siguiente') {

        if (side == "anterior") {
            siguienteElement = (curElement == 0) ? elements.length - 1 : curElement - 1;
        } else {
            siguienteElement = (curElement == elements.length - 1) ? 0 : curElement + 1;
        }
    } else {
        siguienteElement = side;
        side = (curElement > siguienteElement) ? 'anterior' : 'siguiente';

    }

    //PUNTOS INFERIORES
    let elementSel = document.getElementsByClassName("listslider")[0].getElementsByTagName("a");
    elementSel[curElement].classList.remove("item-select-slid");
    elementSel[siguienteElement].classList.add("item-select-slid");
    elements[curElement].style.opacity = 0;
    elements[curElement].style.zIndex = 0;
    elements[siguienteElement].style.opacity = 1;
    elements[siguienteElement].style.zIndex = 1;
}
//Fin carrusel

//Inicio modal
document.querySelectorAll('.open-modal-btn').forEach(function (btn) {
    btn?.addEventListener('click', function () {
        var modalId = this.getAttribute('data-modal');
        var modal = document.getElementById(modalId);
        modal.style.display = 'block';
    });
});

document.querySelectorAll('.modal-close-btn').forEach(function (btn) {
    btn?.addEventListener('click', function () {
        var modal = this.closest('.modal');
        modal.style.display = 'none';
    });
});
//Fin modal

//Inicio "APRENDE SOBRE"
//Inicio modal
document.getElementById('modal1-button')?.addEventListener('click', function () {
    document.getElementById('modal1').style.display = 'block';
});

document.getElementById('modal2-button')?.addEventListener('click', function () {
    document.getElementById('modal2').style.display = 'block';
});

document.getElementById('modal3-button')?.addEventListener('click', function () {
    document.getElementById('modal3').style.display = 'block';
});

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

document.getElementById('modal1-close')?.addEventListener('click', function () {
    closeModal('modal1');
});

document.getElementById('modal2-close')?.addEventListener('click', function () {
    closeModal('modal2');
});

document.getElementById('modal3-close')?.addEventListener('click', function () {
    closeModal('modal3');
});

document.getElementById('modal1-close-button')?.addEventListener('click', function () {
    closeModal('modal1');
});

document.getElementById('modal2-close-button')?.addEventListener('click', function () {
    closeModal('modal2');
});

document.getElementById('modal3-close-button')?.addEventListener('click', function () {
    closeModal('modal3');
});
//Fin modal

//Inicio cuadros desplegables dentro del modal
// Función para manejar los clics en los botones
// Función para manejar los clics en los botones
const customButtons = document.querySelectorAll('.custom-button');
customButtons.forEach((button, index) => {
  button.addEventListener('click', function() {
    this.classList.toggle('active');
    const panel = document.getElementById('panel' + (index + 1));
    if (panel.style.display === 'block') {
      panel.style.display = 'none';
    } else {
      panel.style.display = 'block';
    }
  });
});
//Fin cuados desplegables dentro del modal
//Fin "APRENDE SOBRE"

//Inicio "RECOMENDACIONES"
document.getElementById('modal4-button')?.addEventListener('click', function() {
    document.getElementById('modal4').style.display = 'block';
});

document.getElementById('modal5-button')?.addEventListener('click', function() {
    document.getElementById('modal5').style.display = 'block';
});

document.getElementById('modal6-button')?.addEventListener('click', function() {
    document.getElementById('modal6').style.display = 'block';
});

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

document.getElementById('modal4-close')?.addEventListener('click', function() {
    closeModal('modal4');
});

document.getElementById('modal5-close')?.addEventListener('click', function() {
    closeModal('modal5');
});

document.getElementById('modal6-close')?.addEventListener('click', function() {
    closeModal('modal6');
});

document.getElementById('modal4-close-button')?.addEventListener('click', function() {
    closeModal('modal4');
});

document.getElementById('modal5-close-button')?.addEventListener('click', function() {
    closeModal('modal5');
});

document.getElementById('modal6-close-button')?.addEventListener('click', function() {
    closeModal('modal6');
});
//Fin "RECOMENDACIONES"

//Inicio circulos paso a paso
const circles = document.querySelectorAll('.circle');
const text = document.getElementById('text');

circles.forEach((circle, index) => {
    circle.addEventListener('click', () => {
        text.style.display = 'block';

        // Ocultar todos los párrafos de información
        for (let i = 1; i <= 4; i++) {
            document.getElementById(`info${i}`).style.display = 'none';
        }

        // Mostrar el párrafo de información correspondiente al círculo clicado
        document.getElementById(`info${index + 1}`).style.display = 'block';
    });
});
//Fin circulos paso a paso
