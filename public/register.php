<?php
$title = "Register - Getflying ";
$conical_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include './inc/meta.php';
?>

<div class="w-full min-h-screen flex items-center justify-center">
    <div class="w-full h-screen flex items-center justify-center">
        <!-- image -->
        <div class="hidden lg:flex sm:w-1/2 h-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1541410965313-d53b3c16ef17?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3200&q=80');">
            <div class="w-full h-full flex flex-col items-center justify-center bg-black bg-opacity-30">
                <div class="flex flex-col items-center justify-center space-x-2">
                    <p class="text-lg leading-8 text-white">Open your eyes to</p>
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">The Hidden World</h2>
                </div>
            </div>
        </div>
        <!-- loginform -->
        <div class="w-full lg:w-1/2 xl:w-2/3 2xl:w-3/4  h-full bg-white flex items-center justify-center">
            <div class="w-full mx-auto max-w-3xl px-3 sm:p-20">

                <!-- title -->
                <h2 class="text-center text-3xl sm:text-5xl font-bold text-gray-800">Sign Up</h2>
                <p class="text-center text-gray-800 mt-2 sm:mt-4">Already have an account? <a href="login.php" class="text-gray-600 underline" title="Login">Login</a></p>

                <!-- social media -->
                <!-- <div class="text-sm mt-16 w-full">

                 
                    <a href="#" class="flex items-center justify-center space-x-2 text-white my-2 py-3 bg-[#1778f2] rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 fill-white ">
                            <path d="M21 12.1c0-5-4-9-9-9s-9 4-9 9c0 4.5 3.3 8.2 7.6 8.9v-6.3H8.3v-2.6h2.3v-2c0-2.2 1.4-3.5 3.4-3.5 1 0 2 .2 2 .2V9h-1c-1.1 0-1.4.7-1.4 1.4v1.7H16l-.4 2.6h-2.1V21c4.2-.7 7.5-4.4 7.5-8.9"></path>
                        </svg>
                        <span class="font-medium">Sign up with Facebook</span>
                    </a>

              
                    <a href="#" class="flex items-center justify-center space-x-2 text-white my-2 py-4 bg-black rounded">
                        <svg class="w-4 h-4 -ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 326667 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M326667 170370c0-13704-1112-23704-3518-34074H166667v61851h91851c-1851 15371-11851 38519-34074 54074l-311 2071 49476 38329 3428 342c31481-29074 49630-71852 49630-122593m0 0z" fill="#4285f4"></path>
                            <path d="M166667 333333c44999 0 82776-14815 110370-40370l-52593-40742c-14074 9815-32963 16667-57777 16667-44074 0-81481-29073-94816-69258l-1954 166-51447 39815-673 1870c27407 54444 83704 91852 148890 91852z" fill="#34a853"></path>
                            <path d="M71851 199630c-3518-10370-5555-21482-5555-32963 0-11482 2036-22593 5370-32963l-93-2209-52091-40455-1704 811C6482 114444 1 139814 1 166666s6482 52221 17777 74814l54074-41851m0 0z" fill="#fbbc04"></path>
                            <path d="M166667 64444c31296 0 52406 13519 64444 24816l47037-45926C249260 16482 211666 1 166667 1 101481 1 45185 37408 17777 91852l53889 41853c13520-40185 50927-69260 95001-69260m0 0z" fill="#ea4335"></path>
                        </svg>
                        <span class="font-medium">Sign up with Google</span>
                    </a>
               
                    <div class="w-full text-center mt-5 ">
                        <span class="text-base">or</span>
                    </div>
                </div> -->

                <!-- form -->
                <form class="mt-10 text-sm grid grid-cols-2 gap-x-5 gap-y-6">
                    <!-- first name -->
                    <div class="flex flex-col">
                        <label for="user[first_name]" class="text-black font-medium">First Name</label>
                        <input type="text" name="user[first_name]" id="user[first_name]" class="mt-2 p-2 h-10 border border-black focus:outline-none focus:ring-0 focus:border-black rounded text-gray-900">
                    </div>

                    <!-- last name -->
                    <div class="flex flex-col">
                        <label for="user[last_name]" class="text-black font-medium">Last Name</label>
                        <input type="text" name="user[first_name]" id="user[first_name]" class="mt-2 p-2 h-10 border border-black focus:outline-none focus:ring-0 focus:border-black rounded text-gray-900">
                    </div>

                    <!-- email -->
                    <div class="flex flex-col col-span-2">
                        <label for="email" class="text-black font-medium">Email Address</label>
                        <input type="email" name="email" id="email" class="mt-2 p-2 h-10 border border-black focus:outline-none focus:ring-0 focus:border-black rounded text-gray-900">
                    </div>

                    <!-- phone -->
                    <div class="flex flex-col col-span-2">
                        <label for="phone" class="text-black font-medium">Phone Number</label>
                        <input type="tel name="phone" id="phone" class="mt-2 p-2 h-10 border border-black focus:outline-none focus:ring-0 focus:border-black rounded text-gray-900">
                    </div>
                    <!-- email -->
                    <div class="flex flex-col col-span-2">
                        <label for="email" class="text-black font-medium">Email Address</label>
                        <input type="email" name="email" id="email" class="mt-2 p-2 h-10 border border-black focus:outline-none focus:ring-0 focus:border-black rounded text-gray-900">
                    </div>

                    <!-- username -->
                    <div class="flex flex-col col-span-2">
                        <div class="flex items-center gap-2">
                            <label for="user_username" class="text-black font-medium">Username</label>
                            <span class="text-gray-600 text-base">(only letters, numbers, and underscores)</span>
                        </div>
                        <input type="text" pattern="[a-zA-Z0-9_]*[a-zA-Z][a-zA-Z0-9_]*" name="user[username]" id="user[username]" class="mt-2 p-2 h-10 border border-black focus:outline-none focus:ring-0 focus:border-black rounded text-gray-900">
                    </div>

                    <!-- password -->
                    <div class="flex flex-col col-span-2">
                        <label for="user_password" class="text-black font-medium">Password</label>
                        <div x-data="{ show: false }" class="relative flex items-center mt-2">
                            <input :type=" show ? 'text': 'password' " autocomplete="new-password" minlength="8" required="required" type="password" name="user[password]" id="user_password" aria-autocomplete="list" class="flex-1 p-2 pr-10 h-10 border border-black focus:outline-none focus:ring-0 focus:border-black rounded text-gray-900">
                            <button @click="show = !show" type="button" class="absolute right-2 bg-transparent flex items-center justify-center text-gray-700">
                                <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                </svg>

                                <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- confirm password -->
                    <!-- <div class="flex flex-col col-span-2">
                        <label for="user_password" class="text-black font-medium">Confirm Password</label>
                        <div x-data="{ show: false }" class="relative flex items-center mt-2">
                            <input :type=" show ? 'text': 'password' " autocomplete="new-password" minlength="8" required="required" type="password" name="user[password]" id="user_password" aria-autocomplete="list" class="flex-1 p-2 pr-10 h-10 border border-black focus:outline-none focus:ring-0 focus:border-black rounded text-gray-900">
                            <button @click="show = !show" type="button" class="absolute right-2 bg-transparent flex items-center justify-center text-gray-700">
                                <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                </svg>

                                <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </div>
                    </div> -->

                    <!-- join button -->
                    <div class="col-span-2">
                        <div class="">
                            <!-- <button type="button" class="w-full rounded-md bg-gf-light-blue px-3.5 py-3.5 font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Join</button> -->

                            <input 
                            type="submit" 
                            name="commit" 
                            value="Join" 
                            class="w-full rounded-md bg-gf-light-blue px-3.5 py-3.5 font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2" 
                          >

                            <p class="mt-6 text-black font-medium text-sm text-center">By joining, you agree to the
                                 <a class="underline text-gray-700" href="#">Terms</a> and 
                                 <a class="underline text-gray-700" href="#">Privacy Policy</a>.
                                </p>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>