// ================================
// FORMULARIO DE LOGIN
// ================================

const loginForm = document.getElementById("loginForm");

loginForm.addEventListener("submit", function (event) {

    event.preventDefault();

    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    const message = document.getElementById("message");


    // Validar campos
    if (email === "" || password === "") {

        message.textContent = "Por favor completa todos los campos.";

        message.className = "message-error";

        return;
    }


    // Validar correo
    const emailRegex =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {

        message.textContent =
            "Ingresa un correo electrónico válido.";

        message.className = "message-error";

        return;
    }


    // Simulación de login
    message.textContent =
        "Iniciando sesión...";

    message.className =
        "message-success";


    setTimeout(() => {

        console.log("Correo:", email);
        console.log("Contraseña:", password);

        // Aquí posteriormente puedes conectar Laravel
        // o tu API de autenticación.

        message.textContent =
            "Inicio de sesión correcto.";

    }, 1000);

});


// ================================
// MOSTRAR / OCULTAR CONTRASEÑA
// ================================

function togglePassword() {

    const password =
        document.getElementById("password");

    const button =
        document.querySelector(".show-password");


    if (password.type === "password") {

        password.type = "text";

        button.textContent = "🙈";

    } else {

        password.type = "password";

        button.textContent = "👁";

    }
}


// ================================
// IR A REGISTRO
// ================================

function goToRegister() {

    // Cambia esta dirección cuando tengas
    // creada tu página de registro.

    window.location.href = "register.html";
}


// ================================
// CONTRASEÑA OLVIDADA
// ================================

function forgotPassword() {

    alert(
        "Aquí puedes colocar posteriormente el sistema para recuperar la contraseña."
    );
}


// ================================
// FUNCIÓN LOGIN
// ================================

function login() {

    document
        .getElementById("email")
        .focus();

    document
        .querySelector(".login-card")
        .scrollIntoView({
            behavior: "smooth",
            block: "center"
        });
}