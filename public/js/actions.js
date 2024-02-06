/* All functions project */
const functions = {

    fillJobExperience: () => {
        /* Get container and clear it */
        const container = document.querySelector("#showContentExperience");
        container.innerHTML = "";
        /* Build html to fill */
        const html = `
            <section id="timeline">
                <div class="tl-item">
                    <div class="tl-bg"
                        style="background-image: url(https://lh3.googleusercontent.com/p/AF1QipNF4m3T0WWMTjfsBm7UGJ_5gbD9TkCWuE0yjTuW=s680-w680-h510)">
                    </div>

                    <div class="tl-year">
                        <p class="f2 heading--sanSerif">Feb/2019 - Jun/2020</p>
                    </div>

                    <div class="tl-content">
                        <h1>
                            <a href="https://virket.com/" target="_blank">
                                Virket
                            </a>
                        </h1>
                        <p>Diseño de sitios web estáticos con partner GoDaddy.
                        </p>
                        <p>
                            <i>HTML5, CSS, Wordpress, Google PageSpeed</i>
                        </p>
                    </div>
                </div>

                <div class="tl-item">
                    <div class="tl-bg"
                        style="background-image: url(https://lh3.googleusercontent.com/p/AF1QipNoHf-6p-mw0M5fTdMd-Zy9KYe4-st2irw5wQgz=s680-w680-h510)">
                    </div>

                    <div class="tl-year">
                        <p class="f2 heading--sanSerif">May/2020 - Actualidad
                        </p>
                    </div>

                    <div class="tl-content">
                        <h1>
                            <a href="https://pruebas.epoem50.edu.mx/"
                                target="_blank">
                                EPOEM 50
                            </a>
                        </h1>
                        <p>Desarrollo de plataforma CRM educativa que continúa
                            en
                            operación.
                        </p>
                        <p>
                            <i>HTML5, CSS (Bootstrap 4), JS (jQuery y
                                librerías),
                                PHP (MVC), APIs, Git (Github y Webhooks) y
                                MySQL</i>
                        </p>
                    </div>
                </div>

                <div class="tl-item">
                    <div class="tl-bg"
                        style="background-image: url(https://arqa.com/comunidad/wp-content/uploads/sites/3/2022/11/1667847303_yeshiv%C3%A1%20k%C3%A9ter%20tor%C3%A1%20-%20arco%20arquitectura%20contempor%C3%A1nea%20-%20f-660x1024.jpg)">
                    </div>

                    <div class="tl-year">
                        <p class="f2 heading--sanSerif">Jun/2021 - May/2022</p>
                    </div>

                    <div class="tl-content">
                        <h1>
                            <a href="http://servykt.homeip.net:8083/wykt/externo/index.html"
                                target="_blank">
                                Colegio YKT
                            </a>
                        </h1>
                        <p>Seguimiento a desarrollos, refactorización y creación
                            de
                            plataformas para control interno del colegio.</p>
                        <p>
                            <i>HTML5, CSS (Bootstrap 4), JS (jQuery y
                                librerías),
                                PHP (Laravel 7 y API's|API RestFul), GIT y
                                MySQL</i>
                        </p>
                    </div>
                </div>

                <div class="tl-item">
                    <div class="tl-bg"
                        style="background-image: url(https://lh3.googleusercontent.com/p/AF1QipPtDjzf1wgOwvueb2ZdZTN4vQFqngZlOfao1-A3=s680-w680-h510)">
                    </div>

                    <div class="tl-year">
                        <p class="f2 heading--sanSerif">May/2022 - Julio/2023
                        </p>
                    </div>

                    <div class="tl-content">
                        <h1>
                            <a href="https://www.mck.agency/" target="_blank">
                                MCK Agency
                            </a>
                        </h1>
                        <p>Creación de proyectos a gran escala, refactorización
                            y
                            seguimiento a desarrollos en diferentes tecnologías
                        </p>
                        <p>
                            <i>HTML5, CSS (Bootstrap 4 y 5, Tailwind 3, Less y
                                SCSS),
                                JS (Node JS, Vue JS), PHP
                                (Laravel 7, API's|APIRest, CodeIgniter), GIT,
                                MySQL,
                                Google Cloud Platform, Linux y Docker.</i>
                        </p>
                    </div>
                </div>

                <div class="tl-item">
                    <div class="tl-bg"
                        style="background-image: url(https://lh3.googleusercontent.com/p/AF1QipN6YWm4HtCWJnwrQjeID8NO8uILDQnrBbf7PTev=s680-w680-h510)">
                    </div>

                    <div class="tl-year">
                        <p class="f2 heading--sanSerif">Ago/2023 - Actualidad
                        </p>
                    </div>

                    <div class="tl-content">
                        <h1>
                            <a href="https://www.truper.com/" target="_blank">
                                Corporativo Truper
                            </a>
                        </h1>
                        <p>Proyectos con impacto a nivel nacional e
                            internacional
                        </p>
                        <p>
                            <i>-</i>
                        </p>
                    </div>
                </div>
            </section>
        `;
        /* Fill container with html */
        container.innerHTML = html;
    },

    fillAbilities: () => {
        /* Get container and clear it */
        const container = document.querySelector("#showContentExperience");
        container.innerHTML = "";
        /* Build html to fill */
        const html = `
            <div id="abilitiesCircles" style="overflow-y:hidden"></div>
        `;
        /* Fill container with html */
        container.innerHTML = html;
    },

    fillGallery: () => {
        const galleryComplete = document.querySelector("#galleryComplete"),
            spinner = document.querySelector(".spinner-box");

        galleryComplete.style.display = "none";
        spinner.style.display = "block";

        setTimeout(() => {
            spinner.style.display = "none";
            galleryComplete.style.display = "flex";
        }, 3000);
    },

    dataForm: (e) => {
        e.preventDefault();
        let arrayData, arrayTicket = [];
        /* Form Content */
        const name = document.querySelector("#name"),
            mail = document.querySelector("#email"),
            phone = document.querySelector("#phone"),
            ticket1 = document.querySelector("#opt-1"),
            ticket2 = document.querySelector("#opt-2"),
            ticket3 = document.querySelector("#opt-3"),
            ticket4 = document.querySelector("#opt-4"),
            ticket5 = document.querySelector("#opt-5"),
            ticket6 = document.querySelector("#opt-6");
        /* Validations */
        if (name.value == "") {
            name.style.borderColor = "red";
            return;
        } else {
            name.style.borderColor = "white";
        }
        if (mail.value == "") {
            mail.style.borderColor = "red";
            return;
        } else {
            mail.style.borderColor = "white";
        }
        if (phone.value == "") {
            phone.style.borderColor = "red";
            return;
        } else {
            phone.style.borderColor = "white";
        }
        /* Building Data */
        arrayData = {
            name: name.value,
            mail: mail.value,
            phone: phone.value,
            tickets: []
        }
        /* Checking checkboxes */
        if (ticket1.checked) {
            arrayTicket.push(ticket1.value)
        }
        if (ticket2.checked) {
            arrayTicket.push(ticket2.value)
        }
        if (ticket3.checked) {
            arrayTicket.push(ticket3.value)
        }
        if (ticket4.checked) {
            arrayTicket.push(ticket4.value)
        }
        if (ticket5.checked) {
            arrayTicket.push(ticket5.value)
        }
        if (ticket6.checked) {
            arrayTicket.push(ticket6.value)
        }
        arrayData.tickets.push(arrayTicket);
        /* Sending Data to backend */
        /* const route = "/home/sendData"; */
        functions.sendForm(/* route, */ arrayData);
    },

    clearForm: (e) => {
        const name = document.querySelector("#name"),
            mail = document.querySelector("#email"),
            phone = document.querySelector("#phone"),
            form = document.querySelector("#formContact");
        form.reset();
        name.classList.remove("has-value");
        mail.classList.remove("has-value");
        phone.classList.remove("has-value");
    },

    sendForm(/* route, */ data) {
        fetch('/home/sendData', {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            },
        }).then(response => response.json())
            .then(response => {
                console.log(response);
            })
    }
}
/* Showing Modals Functions */
const showModals = {
    showModal: (type) => {
        const show = document.querySelector(`#${type}`);
        show.style.display = "flex";
        let op = 0.1,
            timer = setInterval(function () {
                if (op >= 1) {
                    clearInterval(timer);
                }
                show.style.opacity = op;
                show.style.filter = 'alpha(opacity=' + op * 100 + ")";
                op += op * 0.1;
            }, 10);
    },
    hideModals: (e) => {
        const modal = e.parentNode.parentNode.parentNode.parentNode;
        let op = 1,
            timer = setInterval(function () {
                if (op <= 0.1) {
                    clearInterval(timer);
                    modal.style.display = 'none';
                }
                modal.style.opacity = op;
                modal.style.filter = 'alpha(opacity=' + op * 100 + ")";
                op -= op * 0.1;
            }, 50);
    }
}
/* Events */
const clear = document.querySelector("#clear"),
    send = document.querySelector("#send"),
    personalModal = document.querySelector("#showModalPersonal"),
    educationalModal = document.querySelector("#showModalEducation");

/* Show Modal in Personal Section */
personalModal.addEventListener("click", () => {
    showModals.showModal('modalPersonal')
});

educationalModal.addEventListener("click", () => {
    showModals.showModal('modalEducation')
});

/* Clear and Send Form */
clear.addEventListener("click", function (e) {
    functions.clearForm(e);
});

send.addEventListener("click", function (e) {
    functions.dataForm(e);
});
