<?php include_once "header.php"; ?>
<style>
    .support-btn-wrapper {
        display: block;
        text-decoration: none;
        width: 60px;
        height: 60px;
        position: fixed;
        bottom: 80px;
        right: 20px;
        z-index: 1000;
    }
    .support-btn {
        width: 100%;
        height: 100%;
        background: #fff;
        padding: 10px;
        border-radius: 100%;
        box-shadow: 0px 0px 20px rgba(0,0,0,.1);
        overflow: hidden;
    }
    .support-btn img {
        width: 100%;
    }
    .autocomplete-wrapper {
        width: 100%;
        position: relative;
    }
    .autocomplete-list {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 1000;
        list-style: none;
        padding: 0;
        margin: 0;
        border: 1px solid #ddd;
        border-radius: 0 0 4px 4px;
        max-height: 200px;
        overflow-y: auto;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .autocomplete-list li {
        padding: 10px;
        cursor: pointer;
    }
    .autocomplete-list li:hover {
        background-color: #f0f0f0;
    }
</style>

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Shop
                <span></span> Checkout
            </div>
        </div>
    </div>
    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10">Checkout</h1>
                <div class="d-flex justify-content-between">
                    <h6 class="text-body">There are <span class="text-brand cart-count">0</span> products in your cart</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="row mb-50">
                    <div class="col-lg-8 mb-sm-15 mb-lg-0 mb-md-3">
                        <div class="toggle_info">
                            <span><i class="fi-rs-user mr-10"></i><span class="text-muted font-lg">Already have an account?</span> <a href="#loginform" data-bs-toggle="collapse" class="collapsed font-lg" aria-expanded="false">Click here to login</a></span>
                        </div>
                        <div class="panel-collapse collapse login_form" id="loginform">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="mb-30 font-sm">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                        <form method="post" action="login.php">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="Username Or Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                                        <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                                    </div>
                                                </div>
                                                <a href="reset-password.php">Forgot password?</a>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-md" name="login" type="submit">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form method="post" action="https://funmistores.com/order/initialize" id="checkoutForm">
                        <h4 class="mb-30">Order Details</h4>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" name="first_name" placeholder="First name *" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" name="last_name" placeholder="Last name *" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="email" name="email" placeholder="Email address *" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="text" name="phone_number" placeholder="Phone *" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <div class="autocomplete-wrapper">
                                    <input type="text" id="address" name="address" class="form-control" autocomplete="off" placeholder="Enter Address*" required>
                                    <input type="hidden" id="address_latitude" name="address_latitude" value="">
                                    <input type="hidden" id="address_longitude" name="address_longitude" value="">
                                    <input type="hidden" id="address_postalcode" name="address_postalcode" value="">
                                    <input type="hidden" id="address_state" name="address_state" value="">
                                    <input type="hidden" id="address_country" name="address_country" value="">
                                    <ul id="autocomplete-list-address" class="autocomplete-list"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <select name="delivery_option" class="form-control" required>
                                    <option value="">Select Delivery Type</option>
                                    <option value="pickup">Pickup at specified address</option>
                                    <option value="door-delivery">Deliver to you</option>
                                </select>
                                <small>Additional maybe added for Door Delivery.</small>
                            </div>
                        </div>
                        <div class="form-group mb-30">
                            <textarea rows="5" name="additional_info" placeholder="Additional information" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="border p-40 cart-totals ml-30 mb-50">
                    <div class="d-flex align-items-end justify-content-between mb-30">
                        <h4>Your Order</h4>
                        <h6 class="text-muted">Subtotal</h6>
                    </div>
                    <div class="divider-2 mb-30"></div>
                    <div class="table-responsive order_table checkout">
                        <table class="table no-border">
                            <tbody id="cart-items">
                                <!-- Cart items will be inserted here dynamically -->
                            </tbody>
                        </table>
                        <div class="table-responsive">
                            <table class="table no-border">
                                <tbody>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Sub Total</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end" id="subtotal">₦0.00</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Vat: 7.5%</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end" id="vat">₦0.00</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Total</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end" id="total">₦0.00</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="payment ml-30">
                    <h4 class="mb-30">Payment</h4>
                    <div class="payment-logo d-flex">
                        <img class="mr-15" src="https://funmistores.com/store/assets/imgs/theme/icons/payment-paypal.svg"
                            alt="">
                        <img class="mr-15" src="https://funmistores.com/store/assets/imgs/theme/icons/payment-visa.svg"
                            alt="">
                        <img class="mr-15" src="https://funmistores.com/store/assets/imgs/theme/icons/payment-master.svg"
                            alt="">
                        <img src="https://funmistores.com/store/assets/imgs/theme/icons/payment-zapper.svg" alt="">
                    </div>
                    <button id="place-order-btn" class="btn btn-fill-out btn-block mt-30">Place an Order<i class="fi-rs-sign-out ml-15"></i></button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once "footercheck.php"; ?>

<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    $(document).ready(function() {
        // Get cart items from localStorage
        let cart = JSON.parse(localStorage.getItem("quoteCart")) || [];
        
        // Update cart count
        updateCartCount();
        
        // Display cart items
        displayCartItems();
        
        // Calculate and display totals
        calculateTotals();
        
        // Handle place order button click
        $("#place-order-btn").on("click", function(e) {
            e.preventDefault();
            
            // Validate form
            if (!validateForm()) {
                return;
            }
            
            // Initialize Paystack payment
            initializePaystack();
        });
        
        // Function to update cart count
        function updateCartCount() {
            let totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            $(".cart-count").text(totalItems);
        }
        
        // Function to format numbers with commas after each significant place value
        function numberWithCommas(x) {
            let parts = x.toString().split(".");
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return parts.join(".");
        }
        
        // Function to display cart items
        function displayCartItems() {
            let cartContainer = $("#cart-items");
            
            if (cart.length === 0) {
                cartContainer.html("<tr><td colspan='3'>No products in cart.</td></tr>");
                return;
            }
            
            cartContainer.empty(); // Clear existing content
            
            $.each(cart, function(index, product) {
                // Remove currency symbol and commas from price
                let price = product.price;
                if (typeof price === 'string') {
                    price = price.replace(/[₦$,]/g, '');
                }
                
                let itemTotal = parseFloat(price) * product.quantity;
                
                let row = `
                    <tr>
                        <td class="image product-thumbnail">
                            <img src="${product.image}" alt="${product.name}">
                        </td>
                        <td>
                            <h6 class="w-160 mb-5">
                                <a href="product/${encodeURIComponent(product.name)}.php" class="text-heading">${product.name}</a>
                            </h6>
                        </td>
                        <td>
                            <h6 class="text-muted pl-20 pr-20">x ${product.quantity}</h6>
                        </td>
                        <td>
                            <h4 class="text-brand">₦${numberWithCommas(itemTotal.toFixed(2))}</h4>
                        </td>
                    </tr>
                `;
                
                cartContainer.append(row);
            });
        }
        
        // Function to calculate and display totals
        function calculateTotals() {
            let subtotal = 0;
            
            // Calculate subtotal
            cart.forEach(function(item) {
                let price = item.price;
                if (typeof price === 'string') {
                    price = price.replace(/[₦$,]/g, '');
                }
                
                subtotal += parseFloat(price) * item.quantity;
            });
            
            // Calculate VAT (7.5%)
            let vat = subtotal * 0.075;
            
            // Calculate total
            let total = subtotal + vat;
            
            // Display totals with proper formatting
            $("#subtotal").text(`₦${numberWithCommas(subtotal.toFixed(2))}`);
            $("#vat").text(`₦${numberWithCommas(vat.toFixed(2))}`);
            $("#total").text(`₦${numberWithCommas(total.toFixed(2))}`);
            
            return {
                subtotal: subtotal,
                vat: vat,
                total: total
            };
        }
        
       // Simplified email validation function
// Function to validate form
function validateForm() {
            let isValid = true;
            
            // Check if cart is empty
            if (cart.length === 0) {
                alert("Your cart is empty. Please add items to your cart before checking out.");
                return false;
            }
            
            // Check required fields
            $("#checkoutForm input[required], #checkoutForm select[required]").each(function() {
                if ($(this).val() === "") {
                    isValid = false;
                    $(this).addClass("is-invalid");
                } else {
                    $(this).removeClass("is-invalid");
                }
            });
            
            if (!isValid) {
                alert("Please fill in all required fields.");
            }
            
            return isValid;
        }
        
        // Function to initialize Paystack payment
        function initializePaystack() {
            let totals = calculateTotals();
            let email = $("input[name='email']").val();
            let firstName = $("input[name='first_name']").val();
            let lastName = $("input[name='last_name']").val();
            let phone = $("input[name='phone_number']").val();
            let address = $("input[name='address']").val();
            let deliveryOption = $("select[name='delivery_option']").val();
            let additionalInfo = $("textarea[name='additional_info']").val();
            
            // Format the amount for Paystack (in kobo)
            let amount = Math.round(totals.total * 100);
            
            try {
        let handler = PaystackPop.setup({
            key: 'pk_test_12a036b7b1fe2a64e0e9cf5747b7dfd8d59c5ae4',
            email: email,
            amount: amount,
            currency: 'NGN',
            ref: 'ORD_' + Math.floor((Math.random() * 1000000000) + 1),
            channels: ['card', 'bank', 'ussd', 'qr', 'bank_transfer'],
            metadata: {
                custom_fields: [
                    {
                        display_name: "First Name",
                        variable_name: "first_name",
                        value: firstName
                    },
                    {
                        display_name: "Last Name",
                        variable_name: "last_name",
                        value: lastName
                    },
                    {
                        display_name: "Phone",
                        variable_name: "phone",
                        value: phone
                    },
                    {
                        display_name: "Address",
                        variable_name: "address",
                        value: address
                    },
                    {
                        display_name: "Delivery Option",
                        variable_name: "delivery_option",
                        value: deliveryOption
                    }
                ]
            },
            callback: function(response) {
                saveOrderToDatabase(response.reference);
            },
            onClose: function() {
                alert('Payment window closed.');
            }
        });
        
        // Open in a new window/tab instead of iframe
        handler.newWindow();
    } catch (error) {
        console.error('Paystack initialization error:', error);
        alert('Unable to initialize payment. Please try again.');
    }
}

// Remove the email validation on blur
$("input[name='email']").off('blur');
  
        // Function to save order to database
        function saveOrderToDatabase(reference) {
            let formData = new FormData(document.getElementById('checkoutForm'));
            formData.append('payment_reference', reference);
            formData.append('cart_items', JSON.stringify(cart));
            
            $.ajax({
                url: 'save-order.php', // Create this PHP file to handle the database operations
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    try {
                        let result = JSON.parse(response);
                        
                        if (result.success) {
                            // Clear cart
                            localStorage.removeItem("quoteCart");
                            
                            // Redirect to order confirmation page
                            window.location.href = 'order-confirmation.php?reference=' + reference;
                        } else {
                            alert('Error: ' + result.message);
                        }
                    } catch (e) {
                        alert('An error occurred while processing your order. Please try again.');
                        console.error(e);
                    }
                },
                error: function() {
                    alert('An error occurred while processing your order. Please try again.');
                }
            });
        }
        
        // Google Maps Autocomplete for address
        function initializeAutocomplete() {
            let autocompleteService = null;
            let geocoderService = null;
            let inputElement = document.getElementById('address');
            let listElement = document.getElementById('autocomplete-list-address');
            let options = [];
            
            const GOOGLE_MAPS_API_KEY = "AIzaSyDZ4p3uN4CEWbgB3HRczY1U6kVgr9oKyT8"; // Replace with your Google Maps API key
            
            // Load Google Maps API
            if (typeof google === 'undefined' || typeof google.maps === 'undefined') {
                const script = document.createElement('script');
                script.src = `https://maps.googleapis.com/maps/api/js?key=${GOOGLE_MAPS_API_KEY}&libraries=places`;
                document.head.appendChild(script);
                script.onload = () => {
                    autocompleteService = new google.maps.places.AutocompleteService();
                    geocoderService = new google.maps.Geocoder();
                };
            } else {
                autocompleteService = new google.maps.places.AutocompleteService();
                geocoderService = new google.maps.Geocoder();
            }
            
            // Fetch predictions when user types in address field
            inputElement.addEventListener('input', function() {
                if (!autocompleteService) return;
                
                autocompleteService.getPlacePredictions({
                    input: this.value,
                    componentRestrictions: { country: 'NG' },
                    types: ['address']
                }, (results) => {
                    options = results || [];
                    showAutocompleteDropdown(options);
                });
            });
            
            // Show autocomplete dropdown
            function showAutocompleteDropdown(options) {
                listElement.innerHTML = '';
                
                if (options.length > 0) {
                    listElement.style.display = 'block';
                    
                    options.forEach((option) => {
                        const li = document.createElement('li');
                        li.textContent = option.description;
                        li.addEventListener('click', () => {
                            inputElement.value = option.description;
                            listElement.innerHTML = '';
                            listElement.style.display = 'none';
                            fetchPlaceDetails(option.place_id);
                        });
                        
                        listElement.appendChild(li);
                    });
                } else {
                    listElement.style.display = 'none';
                }
            }
            
            // Fetch place details when user selects an address
            function fetchPlaceDetails(placeId) {
                if (!geocoderService) return;
                
                geocoderService.geocode({ placeId }, function(results, status) {
                    if (status === 'OK' && results[0]) {
                        const location = results[0].geometry.location;
                        const addressComponents = results[0].address_components;
                        
                        // Update hidden input fields with values
                        document.getElementById('address_latitude').value = location.lat();
                        document.getElementById('address_longitude').value = location.lng();
                        document.getElementById('address_postalcode').value = getAddressComponent(addressComponents, 'postal_code');
                        document.getElementById('address_state').value = getAddressComponent(addressComponents, 'administrative_area_level_1');
                        document.getElementById('address_country').value = getAddressComponent(addressComponents, 'country');
                    }
                });
            }
            
            // Get address component by type
            function getAddressComponent(components, type) {
                const component = components.find(c => c.types.includes(type));
                return component ? component.long_name : '';
            }
            
            // Hide dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!inputElement.contains(e.target) && !listElement.contains(e.target)) {
                    listElement.innerHTML = '';
                    listElement.style.display = 'none';
                }
            });
        }
        
        // Initialize Google Maps Autocomplete
        initializeAutocomplete();
    });
</script>