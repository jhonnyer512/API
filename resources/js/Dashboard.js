/* =========================
   MENU RESPONSIVE
========================= */

const menuToggle =
    document.getElementById("menuToggle");

const sidebar =
    document.getElementById("sidebar");


menuToggle.addEventListener(
    "click",
    function () {

        sidebar.classList.toggle("show");

    }
);


/* =========================
   FECHA ACTUAL
========================= */

const currentDate =
    document.getElementById("currentDate");


const today =
    new Date();


const options = {

    day: "numeric",

    month: "long",

    year: "numeric"

};


currentDate.textContent =
    today.toLocaleDateString(
        "es-ES",
        options
    );


/* =========================
   BOTONES DEL MENU
========================= */

const menuItems =
    document.querySelectorAll(
        ".menu-item"
    );


menuItems.forEach(
    function (item) {

        item.addEventListener(
            "click",
            function () {

                menuItems.forEach(
                    function (menuItem) {

                        menuItem.classList.remove(
                            "active"
                        );

                    }
                );


                this.classList.add(
                    "active"
                );

            }
        );

    }
);


/* =========================
   ACCESOS RAPIDOS
========================= */

const quickButtons =
    document.querySelectorAll(
        ".quick-button"
    );


quickButtons.forEach(
    function (button) {

        button.addEventListener(
            "click",
            function () {

                const action =
                    this.innerText.trim();


                alert(
                    "Acción seleccionada: " +
                    action
                );

            }
        );

    }
);


/* =========================
   NOTIFICACIONES
========================= */

const notificationButton =
    document.querySelector(
        ".notification-btn"
    );


notificationButton.addEventListener(
    "click",
    function () {

        alert(
            "Tienes 3 notificaciones nuevas."
        );

    }
);


/* =========================
   VER TODO
========================= */

const textButton =
    document.querySelector(
        ".text-button"
    );


textButton.addEventListener(
    "click",
    function () {

        alert(
            "Aquí se mostraría toda la actividad."
        );

    }
);