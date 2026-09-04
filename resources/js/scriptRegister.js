const registerForm = document.getElementById("registerForm");

registerForm.addEventListener("submit", function (event) {

    event.preventDefault();


    const name =
        document.getElementById("name").value.trim();

    const email =
        document.getElementById("email").value.trim();

    const password =
        document.getElementById("password").value;

    const confirmPassword =
        document.getElementById("confirmPassword").value;

    const terms =
        document.getElementById("terms").checked;

    const message =
        document.getElementById("message");


    // =========================
    // VALIDAR NOMBRE
    // =========================

    if (name === "") {

        showError("Ingresa tu nombre completo.");

        return;
    }


    // =========================
    // VALIDAR EMAIL
    // =========================

    const emailRegex =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


    if (!emailRegex.test(email)) {

        showError(
            "Ingresa un correo electrónico válido."
        );

        return;
    }


    // =========================
    // VALIDAR CONTRASEÑA
    // =========================

    if (password.length < 8) {

        showError(
            "La contraseña debe tener mínimo 8 caracteres."
        );

        return;
    }


    // =========================
    // CONFIRMAR PASSWORD
    // =========================

    if (password !== confirmPassword) {

        showError(
            "Las contraseñas no coinciden."
        );

        return;
    }


    // =========================
    // TÉRMINOS
    // =========================

    if (!terms) {

        showError(
            "Debes aceptar los términos y condiciones."
        );

        return;
    }


    // =========================
    // REGISTRO
    // =========================

    message.textContent =
        "Creando tu cuenta...";

    message.className =
        "message-success";


    setTimeout(() => {

        console.log("Nombre:", name);
        console.log("Email:", email);
        console.log("Password:", password);

        message.textContent =
            "Cuenta creada correctamente.";

    }, 1000);

});


// =========================
// MOSTRAR ERROR
// =========================

function showError(text) {

    const message =
        document.getElementById("message");

    message.textContent = text;

    message.className =
        "message-error";
}


// =========================
// MOSTRAR / OCULTAR PASSWORD
// =========================

function togglePassword(inputId, button) {

    const input =
        document.getElementById(inputId);


    if (input.type === "password") {

        input.type = "text";

        button.textContent = "🙈";

    } else {

        input.type = "password";

        button.textContent = "👁";
    }
}


// =========================
// IR AL LOGIN
// =========================

function goToLogin() {

    window.location.href = "index.html";
}