<style>
    /* --- STICKY CLOSE BUTTON --- */
    .close-btn {
        /* Sticky/Absolute positioning relative to the main popup box */
        position: absolute;
        top: 15px;
        right: 15px;

        /* Size & Shape */
        width: 45px;
        height: 45px;
        font-size: 35px; /* Large 'X' */
        border-radius: 50%; /* Makes it circular */

        /* Colors & Visibility */
        background: #ffffff;
        color: #333333;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);

        /* Alignment */
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        line-height: 0; /* Prevents the X from shifting down */

        /* Layers */
        z-index: 100002; /* Ensures it stays above form content and Select2 */

        /* Smooth Effects */
        transition: all 0.3s ease;
    }

    .close-btn:hover {
        background: #7db931; /* Happy Cows Green on hover */
        color: #ffffff;
        transform: rotate(90deg) scale(1.1);
    }

    /* Mobile Adjustment to keep it visible on small screens */
    @media (max-width: 768px) {
        .close-btn {
            top: 10px;
            right: 10px;
            width: 40px;
            height: 40px;
            font-size: 30px;
        }
    }
    /* Container for the searchable input */
    /* --- SEARCHABLE DROPDOWN CONTAINER --- */
    .searchable-dropdown {
        position: relative;
        width: 100%;
        margin-bottom: 12px; /* Reduced margin to tighten form spacing */
    }

    .dropdown-wrapper {
        position: relative;
        display: flex;
        align-items: center;
    }

    /* --- THE INPUT FIELD --- */
    #locationInput {
        width: 100%;
        height: 48px;        /* Fixed height to match system selects */
        padding: 0 40px 0 15px; /* Right padding ensures text doesn't hit the arrow */
        border: 1px solid #ddd;
        border-radius: 10px; /* Rounded corners to match image */
        font-size: 14px;
        color: #333;
        outline: none;
        background-color: #fff;
        box-sizing: border-box;
        transition: border-color 0.3s ease;
    }

    #locationInput:focus {
        border-color: #7db931; /* Happy Cows Green */
    }

    /* --- THE DROPDOWN ARROW --- */
    .dropdown-arrow {
        position: absolute;
        right: 18px;
        top: 42%; /* Slightly higher than center per your request */
        width: 8px;
        height: 8px;
        border-right: 2px solid #7db931;
        border-bottom: 2px solid #7db931;
        transform: translateY(-50%) rotate(45deg);
        pointer-events: none;
        transition: transform 0.3s ease;
    }

    /* --- THE SEARCH RESULTS LIST --- */
    .dropdown-content {
        display: none; /* Controlled by JavaScript */
        position: absolute;
        background-color: #ffffff;
        width: 100%;
        max-height: 200px;
        overflow-y: auto;
        border: 1px solid #ddd;
        z-index: 100005;
        padding: 0;
        margin-top: 2px; /* Snaps list closer to input */
        list-style: none;
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        border-radius: 10px;
    }

    .dropdown-content li {
        padding: 12px 15px;
        cursor: pointer;
        font-size: 14px;
        color: #333;
        border-bottom: 1px solid #f9f9f9;
    }

    .dropdown-content li:hover {
        background-color: #f1f8e9;
        color: #7db931;
    }

    /* Scrollbar styling */
    .dropdown-content::-webkit-scrollbar {
        width: 5px;
    }
    .dropdown-content::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 10px;
    }

    /* --- Match the Searchable Dropdown UI to System Dropdowns --- */

    .searchable-dropdown {
        position: relative;
        width: 100%;
        margin-bottom: 0px; /* Reset this to 0 to prevent double-spacing */
    }

    #locationInput {
        width: 100%;
        padding: 12px 15px; /* Use standard padding to match other fields */
        padding-right: 40px;
        border: 1px solid #ddd;
        border-radius: 10px;
        font-size: 14px;
        outline: none;
        box-sizing: border-box;
        transition: all 0.3s ease;

        /* FIX: Match the darker hint/placeholder color of your system dropdowns */
        color: #333;
    }

    /* Specific selector for the placeholder text color */
    #locationInput::placeholder {
        color: #333; /* Makes "Choose Location" dark like the others */
        opacity: 1;
    }

    /* --- Position the arrow precisely --- */
    .dropdown-arrow {
        position: absolute;
        right: 18px;
        top: 50%; /* Center it vertically */
        width: 8px;
        height: 8px;
        border-right: 2px solid #7db931;
        border-bottom: 2px solid #7db931;
        transform: translateY(-70%) rotate(45deg); /* Adjusted to look "upwards" */
        pointer-events: none;
    }

    /* --- Tighten the list spacing --- */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        width: 100%;
        max-height: 200px;
        overflow-y: auto;
        border: 1px solid #ddd;
        z-index: 100005;
        padding: 0;
        margin-top: 1px; /* Sits directly against the input */
        list-style: none;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        border-radius: 10px;
    }
    /* Increase font size and darken the hint text */
    #locationInput::placeholder {
        font-size: 16px;    /* Matches the system dropdown font size */
        color: #333333;    /* Matches the dark text of other fields */
        opacity: 1;        /* Ensures the color isn't faded */
    }

    /* Also ensure the typed text/selected value matches */
    #locationInput {
        font-size: 16px;
        color: #333333;
    }

</style>
<div class="popup-overlay" id="popupOverlay">
    <div class="popup" id="popupBox">
        <span class="close-btn" onclick="closePopup()">&times;</span>

        <div class="popup-left">
            <img src="assets/images/contact/00.png" alt="Happy Cows Milk Packet">
            <h2>Pure, Fresh A2 Milk!</h2>
            <p>
                Experience the natural goodness of Happy Cows Milk. Our A2 milk comes from healthy,
                happy cows, ensuring premium quality and taste delivered right to your doorstep.
                Subscribe today for a healthier, happier family!
            </p>
        </div>

        <div class="popup-right">
            <form class="contact-form subscribeForm">
                <input type="hidden" name="secret" value="SASYAMRIT123">

                <input type="text" name="fullname" id="fullname" placeholder="Full Name" required>

                <input type="tel" name="phone" id="phone" placeholder="Phone Number" required>

                <textarea name="address" id="address" rows="3" placeholder="Address" required></textarea>

                <input type="number" name="pincode" id="pincode" placeholder="Pin Code" required>

                <select name="how_much" id="how_much" required>
                    <option value="" disabled selected>How Much (e.g., 1 Litre)</option>
                    <option value="500ml">500 ml</option>
                    <option value="1litre">1 Litre</option>
                    <option value="2litre">2 Litres</option>
                    <option value="5litre">5 Litres</option>
                    <option value="Other">Other</option>
                </select>

                <select name="how_often" id="how_often" required>
                    <option value="" disabled selected>How Often (e.g., Daily)</option>
                    <option value="daily">Daily</option>
                    <option value="alternate">Alternate Days</option>
                    <option value="weekly">Weekly</option>
                </select>
                <div class="searchable-dropdown">
                    <div class="dropdown-wrapper">
                        <input type="text" id="locationInput"
                               placeholder="Choose Location"
                               onkeyup="filterLocations()"
                               onfocus="showDropdown()"
                               autocomplete="off"
                               required>
                        <span class="dropdown-arrow"></span>
                    </div>

                    <input type="hidden" name="location" id="locationValue">

                    <ul id="locationList" class="dropdown-content">
                        <li onclick="selectLocation('Airoli')">Airoli</li>
                        <li onclick="selectLocation('Ambernath')">Ambernath</li>
                        <li onclick="selectLocation('Andheri')">Andheri</li>
                        <li onclick="selectLocation('Badlapur')">Badlapur</li>
                        <li onclick="selectLocation('Bandra')">Bandra</li>
                        <li onclick="selectLocation('Belapur')">Belapur</li>
                        <li onclick="selectLocation('Bhandup')">Bhandup</li>
                        <li onclick="selectLocation('Bhayandar')">Bhayandar</li>
                        <li onclick="selectLocation('Bhiwandi')">Bhiwandi</li>
                        <li onclick="selectLocation('Borivali')">Borivali</li>
                        <li onclick="selectLocation('Byculla')">Byculla</li>
                        <li onclick="selectLocation('Charni Road')">Charni Road</li>
                        <li onclick="selectLocation('Chembur')">Chembur</li>
                        <li onclick="selectLocation('Colaba')">Colaba</li>
                        <li onclick="selectLocation('Dadar')">Dadar</li>
                        <li onclick="selectLocation('Dahisar')">Dahisar</li>
                        <li onclick="selectLocation('Dombivli')">Dombivli</li>
                        <li onclick="selectLocation('Dronagiri')">Dronagiri</li>
                        <li onclick="selectLocation('Fort')">Fort</li>
                        <li onclick="selectLocation('Ghatkopar')">Ghatkopar</li>
                        <li onclick="selectLocation('Govandi')">Govandi</li>
                        <li onclick="selectLocation('Grant Road')">Grant Road</li>
                        <li onclick="selectLocation('Jogeshwari')">Jogeshwari</li>
                        <li onclick="selectLocation('Kalwa')">Kalwa</li>
                        <li onclick="selectLocation('Kalyan')">Kalyan</li>
                        <li onclick="selectLocation('Kandivali')">Kandivali</li>
                        <li onclick="selectLocation('Kanjurmarg')">Kanjurmarg</li>
                        <li onclick="selectLocation('Khar')">Khar</li>
                        <li onclick="selectLocation('Kharghar')">Kharghar</li>
                        <li onclick="selectLocation('Koparkhairane')">Koparkhairane</li>
                        <li onclick="selectLocation('Kurla')">Kurla</li>
                        <li onclick="selectLocation('Lower Parel')">Lower Parel</li>
                        <li onclick="selectLocation('Malad')">Malad</li>
                        <li onclick="selectLocation('Mankhurd')">Mankhurd</li>
                        <li onclick="selectLocation('Marine Lines')">Marine Lines</li>
                        <li onclick="selectLocation('Mira Road')">Mira Road</li>
                        <li onclick="selectLocation('Mulund')">Mulund</li>
                        <li onclick="selectLocation('Mumbra')">Mumbra</li>
                        <li onclick="selectLocation('Mumbai Central')">Mumbai Central</li>
                        <li onclick="selectLocation('Nerul')">Nerul</li>
                        <li onclick="selectLocation('Panvel')">Panvel</li>
                        <li onclick="selectLocation('Prabhadevi')">Prabhadevi</li>
                        <li onclick="selectLocation('Santacruz')">Santacruz</li>
                        <li onclick="selectLocation('Sion')">Sion</li>
                        <li onclick="selectLocation('Thane City')">Thane City</li>
                        <li onclick="selectLocation('Ulwe')">Ulwe</li>
                        <li onclick="selectLocation('Vasai')">Vasai</li>
                        <li onclick="selectLocation('Vashi')">Vashi</li>
                        <li onclick="selectLocation('Vidyavihar')">Vidyavihar</li>
                        <li onclick="selectLocation('Vikhroli')">Vikhroli</li>
                        <li onclick="selectLocation('Virar')">Virar</li>
                        <li onclick="selectLocation('Other / Not Listed')">Other / Not Listed</li>
                    </ul>
                </div>

                <select name="how_long" id="how_long" required>
                    <option value="" disabled selected>How Long (e.g., 30 Days)</option>
                    <option value="Not Decided Yet">Not Decided Yet</option>
                    <option value="7days">7 Days</option>
                    <option value="15days">15 Days</option>
                    <option value="30days">30 Days</option>
                    <option value="90days">3 Months</option>
                </select>

                <button type="submit">Subscribe Now</button>
            </form>
        </div>
    </div>
</div>

<a href="subscribe.php" class="milkSubscribeBtn">
    <i class="fa fa-tint"></i> Subscribe
</a>