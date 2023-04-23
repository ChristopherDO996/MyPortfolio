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

const clear = document.querySelector("#clear"),
    send = document.querySelector("#send");

clear.addEventListener("click", function (e) {
    functions.clearForm(e);
})
send.addEventListener("click", function (e) {
    functions.dataForm(e);
})