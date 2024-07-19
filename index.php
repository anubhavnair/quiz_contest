<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <title>Ask Shopkeeper</title>
</head>

<div class='banner' src="" alt="" style=""></div>
<div class="relative">
    <?php
    if (isset($_GET['success'])) {
        echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">Your response has been submitted successfully.</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        </span>
        </div>
        <br/>';
    } elseif (isset($_GET['error'])) {
        echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">Something went wrong. Please try again.</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        </span>
        </div>
        <br/>';
    }
    ?>

    <div class="wrapper shadow-md rounded ">
        <form action="php/store.php" method="POST" class="">
            <div class="flex items-start justify-center relative" style="">
                <!-- <div class="w-1/2 m-5">
                    <img src="assets/img/flyer.jpg" alt="">
                </div> -->
                <!-- Left part of the form -->
                <div class="inner-form space-y-4 mt-4">
                    <div>
                        <label class="block text-gray-700 text-red-500  font-bold mb-2">Ask The Shopkeeper* | दुकानदार
                            से
                            क्या पूछे ? *</label>
                        <div class="flex flex-col">
                            <label class="inline-flex items-center mb-2">
                                <input type="radio" class="form-radio" name="answer" value="new_collections" required>
                                <span class="ml-2">New Collections</span>
                            </label>
                            <label class="inline-flex items-center mb-2">
                                <input type="radio" class="form-radio" name="answer" value="bills" required>
                                <span class="ml-2">Bills</span>
                            </label>
                            <label class="inline-flex items-center mb-2">
                                <input type="radio" class="form-radio" name="answer" value="discounts" required>
                                <span class="ml-2">Discounts</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="answer" value="offers" required>
                                <span class="ml-2">Offers</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label for="user_type" class="block text-gray-700 text-red-500 font-bold mb-2 ">Please select
                            User Type* </label>
                        <select
                            class="block appearance-none w-full bg-white border border-black hover:border-gray-500 px-4 py-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            name="user_type" id="user_type"
                            class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="">Select </option>
                            <option value="customer">Customer</option>
                            <option value="business">Business</option>
                        </select>
                    </div>
                    <div class="transition-all delay-500" id="organization">
                        <label for="organization" class="block text-gray-700 text-red-500  font-bold mb-2">Organization
                            Name</label>
                        <input type="text" name="organization" placeholder="Enter your Organization Name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div>
                        <label for="fname" class="block text-gray-700 text-red-500  font-bold mb-2">First Name</label>
                        <input type="text" name="fname" placeholder="Enter your First Name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div>
                        <label for="lname" class="block text-gray-700 text-red-500  font-bold mb-2">Last Name</label>
                        <input type="text" name="lname" placeholder="Enter your Last Name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 text-red-500  font-bold mb-2">Email</label>
                        <input type="text" name="email" placeholder="Enter your Email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 text-red-500  font-bold mb-2">Phone</label>
                        <input type="text" name="phone" placeholder="Enter your Phone"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div>
                        <label for="pincode" class="block text-gray-700 text-red-500  font-bold mb-2">Pincode</label>
                        <input type="text" name="pincode" placeholder="Enter your Pincode"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div>
                        <label for="meet" class="block text-gray-700 text-red-500  font-bold mb-2">Where Did we
                            meet?</label>
                        <select name="meet" id="meet"
                            class="block appearance-none w-full bg-white border border-black hover:border-gray-500 px-4 py-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="">Select One</option>
                            <option value="facebook" <?php
                            if (isset($_REQUEST['meet'])) {
                                if ($_REQUEST['meet'] == "fb") {

                                    echo "selected";
                                }
                            }
                            ?>>Facebook</option>
                            <option value="newspaper" <?php
                            if (isset($_REQUEST['meet'])) {
                                if ($_REQUEST['meet'] == "news") {

                                    echo "selected";
                                }
                            }
                            ?>>Newspaper</option>
                            <option value="ads" <?php
                            if (isset($_REQUEST['meet'])) {
                                if ($_REQUEST['meet'] == "ads") {

                                    echo "selected";
                                }
                            }
                            ?>>Advertisement</option>
                            <option value="social" <?php
                            if (isset($_REQUEST['meet'])) {
                                if ($_REQUEST['meet'] == "scl") {

                                    echo "selected";
                                }
                            }
                            ?>>Social Media</option>
                            <!-- hoarding  -->
                            <option value="hord" <?php
                            if (isset($_REQUEST['meet'])) {
                                if ($_REQUEST['meet'] == "hod") {

                                    echo "selected";
                                }
                            }
                            ?>>Hoarding</option>

                            <!-- other  -->
                            <option value="other" <?php
                            if (isset($_REQUEST['meet'])) {
                                if ($_REQUEST['meet'] == "other") {

                                    echo "selected";
                                }
                            }
                            ?>>Other</option>
                        </select>
                    </div>
                    <br>
                    <label for="terms" class="pt-5">
                        <input id="terms" required type="checkbox" name="acceptTerms" />
                        <span class="text-red-500 " style="font-size:1rem">I accept the <a href="terms.php"
                                target="_blank" style="color: gray; text-decoration:none; font-weight:400;">terms and
                                conditions</a></span>
                    </label>
                    <div class=" text-left ">
                        <!-- Submit button -->
                        <input type="submit" name="submit" value="Submit"
                            class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    </div>
                </div>
        </form>
    </div>
    <div class="side-image"><img src="assets/img/gift.png" alt=""></div>
    <footer class="p-2 mt-2 text-center">
        <div class="font-sm">
            <p style="font-size:1rem" class="text-gray-700">© 2024 Ask Shopkeeper. All rights reserved. |
                <a class="font-sm" href="#">Terms & Conditions</a>
                | <a class="font-sm" href="#">Privacy Policy</a>
            </p>

        </div>
    </footer>
    </body>
    <script>

        user_typ = document.getElementById('user_type');
        org_name = document.getElementById('organization');
        org_name.style.display = 'none';
        user_typ.onchange = function () {
            if (this.value == 'business') {
                org_name.style.display = 'block';
            } else {
                org_name.style.display = 'none';
            }
        }
    </script>

</html>