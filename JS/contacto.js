document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.getElementById("contact-form");

    contactForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const formData = new FormData(contactForm);

        // Aquí puedes agregar el código para enviar los datos al servidor, como a través de fetch() o XMLHttpRequest
        // Por ahora, solo mostraré los datos en la consola como ejemplo

        for (const entry of formData.entries()) {
            console.log(entry[0] + ": " + entry[1]);
        }

        // Puedes agregar aquí el código para mostrar un mensaje de éxito o error al usuario
    });
});
