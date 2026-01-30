// popup-manager.js - Complete Popup Solution
(function() {
    'use strict';

    // ========== CONFIGURATION ==========
    const POPUP_KEY = "happycows_popup_submitted_at";
    const COOLDOWN_TIME = 15 * 60 * 1000; // 30 minutes
    const SHOW_DELAY = 4000; // 4 seconds
    const INITIAL_DELAY = 3500; // 3.5 seconds (from original popup.js)

    // ========== STATE ==========
    let isPopupOpen = false;
    let pendingSubmission = false;

    // ========== UTILITY FUNCTIONS ==========
    function shouldShowPopup() {
        try {
            const submittedAt = localStorage.getItem(POPUP_KEY);

            // If never submitted, show popup
            if (!submittedAt) return true;

            // Check if 30 minutes have passed
            const elapsed = Date.now() - parseInt(submittedAt, 10);
            return elapsed > COOLDOWN_TIME;
        } catch (e) {
            console.error("Popup check error:", e);
            return true; // Show popup on error
        }
    }

    function markPopupAsShown() {
        try {
            localStorage.setItem(POPUP_KEY, Date.now());
            console.log("Popup marked as shown at:", new Date().toLocaleTimeString());
        } catch (e) {
            console.error("Failed to save popup state:", e);
        }
    }

    // ========== POPUP CONTROLS ==========
    function openPopup() {
        // Check if we should show popup
        if (!shouldShowPopup()) {
            console.log("Popup not shown - within cooldown period");
            return;
        }

        // Don't show if already open
        if (isPopupOpen) return;

        // Find and show the popup
        const popup = document.getElementById('popupOverlay');
        if (popup) {
            popup.style.display = 'flex';

            // If there's a show class, add it
            const popupBox = document.getElementById('popupBox');
            if (popupBox) {
                popupBox.classList.add('show');
            }

            isPopupOpen = true;

            // Setup close button if exists
            const closeBtn = popup.querySelector('.close-btn');
            if (closeBtn && !closeBtn.hasAttribute('data-initialized')) {
                closeBtn.setAttribute('data-initialized', 'true');
                closeBtn.addEventListener('click', closePopup);
            }

            // Close when clicking outside
            popup.addEventListener('click', function(e) {
                if (e.target === this) {
                    closePopup();
                }
            });
        }
    }

    function closePopup() {
        const popup = document.getElementById('popupOverlay');
        if (popup) {
            popup.style.display = 'none';

            const popupBox = document.getElementById('popupBox');
            if (popupBox) {
                popupBox.classList.remove('show');
            }

            isPopupOpen = false;
        }
    }

    // ========== FORM SUBMISSION HANDLING ==========
    function setupFormSubmissionHandling() {
        // Mark popup as shown when any subscription form is submitted
        document.addEventListener('submit', function(e) {
            const form = e.target;
            if (form.closest('.popup-overlay') ||
                form.classList.contains('subscribeForm') ||
                form.classList.contains('subscribeForm2')) {

                // Set flag to indicate submission is in progress
                pendingSubmission = true;
                console.log("Form submission started, popup will close after success");
            }
        });

        // Listen for successful submission event
        document.addEventListener('popupSubmittedSuccess', function() {
            markPopupAsShown();
            closePopup();
            pendingSubmission = false;
        });

        // Listen for failed submission event
        document.addEventListener('popupSubmittedFailed', function() {
            pendingSubmission = false;
            // Don't close popup on failure
            console.log("Submission failed, popup remains open");
        });
    }

    // ========== CAROUSEL CLICK HANDLER ==========
    function setupCarouselClickHandler() {
        document.querySelectorAll('.carousel-item').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                openPopup();
            });
        });
    }

    // ========== INITIALIZATION ==========
    function init() {
        // Setup form submission handling
        setupFormSubmissionHandling();

        // Setup carousel click handlers
        setupCarouselClickHandler();

        // Check if we should show popup on page load
        if (shouldShowPopup()) {
            setTimeout(() => {
                openPopup();
            }, Math.max(SHOW_DELAY, INITIAL_DELAY)); // Use the longer delay
        } else {
            console.log("Popup not shown - within cooldown period");
        }
    }

    // ========== PUBLIC API ==========
    window.popupManager = {
        open: openPopup,
        close: closePopup,
        reset: function() {
            localStorage.removeItem(POPUP_KEY);
            console.log("Popup cooldown reset");
        },
        status: function() {
            const time = localStorage.getItem(POPUP_KEY);
            if (!time) {
                return "Popup NEVER submitted";
            }

            const elapsed = Date.now() - parseInt(time, 10);
            const remaining = Math.max(0, COOLDOWN_TIME - elapsed);
            const mins = Math.floor(remaining / 60000);
            const secs = Math.floor((remaining % 60000) / 1000);

            return {
                submittedAt: new Date(parseInt(time)),
                elapsedMinutes: Math.floor(elapsed / 60000),
                remainingCooldown: `${mins} mins ${secs} secs`,
                shouldShow: elapsed > COOLDOWN_TIME
            };
        }
    };

    // ========== START WHEN DOM IS READY ==========
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();