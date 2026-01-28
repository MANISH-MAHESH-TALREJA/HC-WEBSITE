// document.getElementById("subscribeForm").addEventListener("submit", function(e) {
//     e.preventDefault();
//     console.log("Form submitted");

//     var formData = new FormData(this);

//     fetch("https://script.google.com/macros/s/AKfycbwzTsYddYHYdctLMwH_LzPlGZDn_ZUtXUyyeUqJIWbTyz79-DKyiCkXVXy8bpzAO6Ch/exec", {
//         method: "POST",
//         body: formData
//     })
//     .then(response => response.json())
//     .then(data => {
//         console.log(data);
//         document.getElementById("formMsg").innerHTML = `<p style="color:green">${data.message}</p>`;
//         document.getElementById("subscribeForm").reset();
//     })
//     .catch(error => {
//         document.getElementById("formMsg").innerHTML = `<p style="color:red">Error submitting form.</p>`;
//         console.error("Error!", error);
//     });
// });
// const url = "https://script.google.com/macros/s/AKfycbwzTsYddYHYdctLMwH_LzPlGZDn_ZUtXUyyeUqJIWbTyz79-DKyiCkXVXy8bpzAO6Ch/exec";
const url = "https://script.google.com/macros/s/AKfycbwzTsYddYHYdctLMwH_LzPlGZDn_ZUtXUyyeUqJIWbTyz79-DKyiCkXVXy8bpzAO6Ch/exec";
const loadingSpinner = document.getElementById("loadingSpinner");

// ========== Subscription Form ==========
document.addEventListener("DOMContentLoaded", function () {
    const subscriptionForm = document.querySelector(".subscribeForm");
    if (subscriptionForm) {
        subscriptionForm.addEventListener("submit", function (e) {
            e.preventDefault();

            if (loadingSpinner) loadingSpinner.style.display = "block";

            const formData = new FormData(subscriptionForm);

            fetch(url, {
                method: "POST",
                body: formData
            })
                .then(res => res.json())
                .then(data => {
                    if (loadingSpinner) loadingSpinner.style.display = "none";
                    alert(data.message);
                    subscriptionForm.reset();
                })
                .catch(error => {
                    if (loadingSpinner) loadingSpinner.style.display = "none";
                    console.log(error);
                    alert("Error: " + error);
                });
        });
    }
});


// ========== Contact Form ==========
document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.getElementById("contactForm");

    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();

            if (loadingSpinner) loadingSpinner.style.display = "block";

            const formData = new FormData(contactForm);

            fetch(url, {
                method: "POST",
                body: formData
            })
                .then(res => res.json())
                .then(data => {
                    if (loadingSpinner) loadingSpinner.style.display = "none";
                    alert(data.message);
                    contactForm.reset();
                })
                .catch(error => {
                    if (loadingSpinner) loadingSpinner.style.display = "none";
                    alert("Error: " + error);
                });
        });
    }
});
