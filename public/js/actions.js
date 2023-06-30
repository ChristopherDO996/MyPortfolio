/* All functions project */
const functions = {
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
    educationalModal = document.querySelector("#showModalEducation"),
    jobModal = document.querySelector("#showModalProfessional"),
    abilityModal = document.querySelector("#showModalAbilities");

/* Show Modal in Personal Section */
personalModal.addEventListener("click", () => {
    showModals.showModal('modalPersonal')
});

educationalModal.addEventListener("click", () => {
    showModals.showModal('modalEducation')
});

jobModal.addEventListener("click", () => {
    showModals.showModal('modalProfessional')
});

abilityModal.addEventListener("click", () => {
    showModals.showModal('modalAbilities')
});

/* Clear and Send Form */
clear.addEventListener("click", function (e) {
    functions.clearForm(e);
});

send.addEventListener("click", function (e) {
    functions.dataForm(e);
});
