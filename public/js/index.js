const boton_izq = document.querySelector(".boton_izq"),
  boton_der = document.querySelector(".boton_der"),
  slider = document.querySelector("#slider"),
  slider_section = document.querySelectorAll(".slider_section");

let contador = 0;

boton_izq.addEventListener("click", moverIzquierda);
boton_der.addEventListener("click", moverDerecha);

function moverDerecha() {
  contador++;
  if (contador >= slider_section.length) {
    contador = 0;
  }
  actualizarSlider();
}

function moverIzquierda() {
  contador--;
  if (contador < 0) {
    contador = slider_section.length - 1;
  }
  actualizarSlider();
}

function actualizarSlider() {
  slider.style.transform = `translateX(-${contador * 100}%)`;
  slider.style.transition = "transform 0.6s ease";
}
