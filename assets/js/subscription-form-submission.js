
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
                .then(res => res.text())
                .then(text => {
                    console.log("RAW RESPONSE:", text);

                    // 1️⃣ Hide loader
                    if (loadingSpinner) {
                        loadingSpinner.style.display = "none";
                    }

                    // 2️⃣ Close popup first
                    try {
                        // 2️⃣ Trigger popup submission event
                        const successEvent = new CustomEvent('popupSubmittedSuccess');
                        document.dispatchEvent(successEvent);
                        // 🔒 BLOCK POPUP FOR 30 MINUTES
                        localStorage.setItem("happycows_popup_submitted_at", Date.now());
                        closePopup();
                    } catch (e) {
                        console.warn("closePopup() not defined or failed", e);
                    }


                    // Small delay so DOM updates cleanly
                    setTimeout(() => {
                        // 3️⃣ Show SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Subscription Received!',
                            html: `
                <p>Your subscription request has been<br>
                received. A <b>Happy Cows Milk</b> representative<br>
                will contact you within <b>24–48 hours</b> for<br>
                verification.</p>
                <br>
                <b>Thank you!</b>
            `,
                            confirmButtonColor: '#7db931'
                        });

                        subscriptionForm.reset();
                    }, 200);
                })
                .catch(err => {
                    console.error("FETCH ERROR:", err);

                    // Hide loader even on error
                    if (loadingSpinner) {
                        loadingSpinner.style.display = "none";
                    }
// In the catch block, add:
                    const failureEvent = new CustomEvent('popupSubmittedFailed');
                    document.dispatchEvent(failureEvent);
                    Swal.fire({
                        icon: 'error',
                        title: 'Submission Failed',
                        text: 'Something went wrong. Please try again.',
                        confirmButtonColor: '#d33'
                    });
                });

        });
    }
});


document.addEventListener("DOMContentLoaded", function () {
    const subscriptionForms = document.querySelector(".subscribeForm2");
    if (subscriptionForms) {
        subscriptionForms.addEventListener("submit", function (e) {
            e.preventDefault();

            if (loadingSpinner) loadingSpinner.style.display = "block";

            const formData = new FormData(subscriptionForms);

            fetch(url, {
                method: "POST",
                body: formData
            })
                .then(res => res.text())
                .then(text => {
                    console.log("RAW RESPONSE:", text);

                    // 1️⃣ Hide loader
                    if (loadingSpinner) {
                        loadingSpinner.style.display = "none";
                    }

                    // 2️⃣ Close popup first
                    try {
                        // 🔒 BLOCK POPUP FOR 30 MINUTES
                        localStorage.setItem("happycows_popup_submitted_at", Date.now());
                        const successEvent = new CustomEvent('popupSubmittedSuccess');
                        document.dispatchEvent(successEvent);
                        closePopup();
                    } catch (e) {
                        console.warn("closePopup() not defined or failed", e);
                    }


                    // Small delay so DOM updates cleanly
                    setTimeout(() => {
                        // 3️⃣ Show SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Subscription Received!',
                            html: `
                <p>Your subscription request has been<br>
                received. A <b>Happy Cows Milk</b> representative<br>
                will contact you within <b>24–48 hours</b> for<br>
                verification.</p>
                <br>
                <b>Thank you!</b>
            `,
                            confirmButtonColor: '#7db931'
                        });

                        subscriptionForms.reset();
                    }, 200);
                })
                .catch(err => {
                    console.error("FETCH ERROR:", err);

                    // Hide loader even on error
                    if (loadingSpinner) {
                        loadingSpinner.style.display = "none";
                    }
// In the catch block, add:
                    const failureEvent = new CustomEvent('popupSubmittedFailed');
                    document.dispatchEvent(failureEvent);
                    Swal.fire({
                        icon: 'error',
                        title: 'Submission Failed',
                        text: 'Something went wrong. Please try again.',
                        confirmButtonColor: '#d33'
                    });
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
                .then(res => res.text())
                .then(text => {
                    console.log("RAW RESPONSE:", text);

                    // 1️⃣ Hide loader
                    if (loadingSpinner) {
                        loadingSpinner.style.display = "none";
                    }



                    // Small delay so DOM updates cleanly
                    setTimeout(() => {
                        // 3️⃣ Show SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Information Received!',
                            html: `
                <p>Your request has been received. <br>A <b>Happy Cows </b> representative<br>
                will contact you within <b>24–48 hours</b> for<br>
                your query.</p>
                <br>
                <b>Thank you!</b>
            `,
                            confirmButtonColor: '#7db931'
                        });

                        contactForm.reset();
                    }, 200);
                })
                .catch(err => {
                    console.error("FETCH ERROR:", err);

                    // Hide loader even on error
                    if (loadingSpinner) {
                        loadingSpinner.style.display = "none";
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Submission Failed',
                        text: 'Something went wrong. Please try again.',
                        confirmButtonColor: '#d33'
                    });
                });


        });
    }
});
