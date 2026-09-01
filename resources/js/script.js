document.addEventListener("DOMContentLoaded", () => {

    console.log("Página de bienvenida cargada correctamente.");

    const buttons = document.querySelectorAll(".btn, .main-button, .secondary-button");

    buttons.forEach(button => {

        button.addEventListener("click", () => {

            console.log("Navegando a:", button.getAttribute("href"));

        });

    });

});