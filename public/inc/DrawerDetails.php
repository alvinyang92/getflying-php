<div id="drawer-<?php echo $items->id; ?>" class=" fixed top-0 right-0 z-40 h-screen  overflow-y-auto transition-transform translate-x-full bg-white w-[50%]" tabindex="-1" aria-labelledby="drawer-right-label">
    <div>
        <!-- Detail + close button -->
        <div class="p-3 flex justify-between items-center border-b">
            <!-- title -->
            <h5 id="drawer-right-label" class="font-semibold">Details</h5>
            <!-- close button -->
            <div class="">
                <button id="close-modal" type="button" data-drawer-hide="drawer-<?php echo $items->id; ?>" aria-controls="drawer-<?php echo $items->id; ?>" class="mx-auto w-8 h-8 ">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
            </div>
        </div>
        <!-- title + badges  -->
        <div class="p-3 px-6 space-y-3">
            <h3 class="text-2xl font-semibold"><?php echo $items->title; ?></h3>
            <div class="flex flex-wrap gap-3">
                <span class="inline-flex items-center rounded-full bg-gray-50 px-2 py-1 text-sm text-black ring-1 ring-inset ring-gray-800/10">No Cancellation</span>
                <span class="inline-flex items-center rounded-full bg-gray-50 px-2 py-1 text-sm text-black ring-1 ring-inset ring-gray-800/10">Instant Confirmation</span>
                <span class="inline-flex items-center rounded-full bg-gray-50 px-2 py-1 text-sm text-black ring-1 ring-inset ring-gray-800/10">Fixed Date Booking</span>
                <span class="inline-flex items-center rounded-full bg-gray-50 px-2 py-1 text-sm text-black ring-1 ring-inset ring-gray-800/10">Collect physical Ticket</span>
                <span class="inline-flex items-center rounded-full bg-[#FFEAE6] px-2 py-1 text-sm text-[#F05A28] ring-1 ring-inset ring-[#F05A28]">Save 10%</span>
            </div>
        </div>
        <!-- intro details -->
        <div class="p-3 px-6 prose text-black">
            <ul>
                <li>Book now for today</li>
                <li>Instant confirmation</li>
                <li>Collect physical ticket</li>
                <li>Valid on the selected date</li>
                <li>Free cancellation (24-hours notice)</li>
            </ul>
        </div>

        <!-- list of accordian -->
        <div class="p-3 px-6">

            <!-- package details item -->
            <div x-data="{selected:null}">
                <!-- package details + arrow up -->
                <button class="w-full flex justify-between bg-gray-50 p-3 font-semibold" @click="selected !== 1 ? selected = 1 : selected = null">
                    <h3 class="text-xl font-semibold">Package Details</h3>
                    <!-- arrow -->
                    <div :class="{'rotate-180': selected == 1, 'rotate-0': selected !== 1}" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>

                <!-- expand -->
                <dd class="relative overflow-hidden max-h-0 " x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs['container1'].scrollHeight + 'px' : ''">

                    <!-- Included/Excluded -->
                    <div class="mt-5 space-y-10 px-6">
                        <!-- included -->
                        <div>
                            <h2 class=" font-semibold">What's included</h2>

                            <div class="mt-4 space-y-3">
                                <div class="flex items-start gap-2">
                                    <img class="w-[24px]" src="./assets/images/tour-gallery/check-icon.svg">
                                    <p class="">Admission to: All 6 parks: Amusement Park, Wildlife Park, Extreme Park, Scream Park, Water Park, and Sunway Lost Lagoon</p>
                                </div>
                                <div class="flex items-start gap-2">
                                    <img class="w-[24px]" src="./assets/images/tour-gallery/check-icon.svg">
                                    <p class="">dmission to: Night Park (6PM - 11PM)</p>
                                </div>
                            </div>
                        </div>

                        <!-- excluded -->
                        <div>
                            <h2 class="font-semibold">Not included</h2>

                            <div class="mt-4 space-y-3">
                                <div class="flex items-start gap-2">
                                    <img class="w-[24px]" src="./assets/images/tour-gallery/close-icon.svg">
                                    <p class="">Quack Xpress wristband, skip regular lines for these selected</p>
                                </div>
                                <div class="flex items-start gap-2">
                                    <img class="w-[24px]" src="./assets/images/tour-gallery/close-icon.svg">
                                    <p class="">Equipment combo (includes double tube rental, locker rental)</p>
                                </div>
                                <div class="flex items-start gap-2">
                                    <img class="w-[24px]" src="./assets/images/tour-gallery/close-icon.svg">
                                    <p class="">Extreme park pay-per-ride activities: (available for purchase as optional package)</p>
                                </div>
                                <div class="flex items-start gap-2">
                                    <img class="w-[24px]" src="./assets/images/tour-gallery/close-icon.svg">
                                    <p class="">Tickets</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </dd>

            </div>


            <!-- How to Use -->
            <div x-data="{selected:null}" class="mt-5">
                <!--title + arrow up -->
                <button class="w-full flex justify-between bg-gray-50 p-3 font-semibold" @click="selected !== 3 ? selected = 3 : selected = null">
                    <h3 class="text-xl font-semibold">How to use</h3>
                    <!-- arrow -->
                    <div :class="{'rotate-180': selected == 3, 'rotate-0': selected !== 3}" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>

                <!-- expand -->
                <dd class="relative overflow-hidden max-h-0 " x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs['container3'].scrollHeight + 'px' : ''">
                    <div class="prose text-black p-3 px-6">
                        <h4>Opening hours</h4>
                        <ul>
                            <li>Sunway Lagoon</li>
                            <li>Wednesday-Monday: 10:00-18:00</li>
                            <li>Night Park</li>
                            <li>Wednesday-Monday: 18:00-23:00</li>
                        </ul>

                        <h4>Voucher type</h4>
                        <ul>
                            <li>Present your mobile voucher and your passport / valid ID</li>
                        </ul>

                        <h4>How to redeem</h4>
                        <ul>
                            <li>Present your voucher and exchange it for a physical ticket</li>
                            <li>For local Malaysians, please present your MyKad at the time of redemption
                            </li>
                            <li>For foreign nationals, please present a proof of identity at the time of redemption
                            </li>
                            <li>For e-vouchers: Sunway Lagoon Main Entrance's ticket counter 1 to 5
                            </li>
                            <li>Please redeem your park entry wristband at the Sunway Lagoon main entrance's ticket counters
                            </li>
                        </ul>

                    </div>
                </dd>

            </div>


            <!-- Terms and condition -->
            <div x-data="{selected:null}" class="mt-5">
                <!--title + arrow up -->
                <button class="w-full flex justify-between bg-gray-50 p-3 font-semibold" @click="selected !== 2 ? selected = 2 : selected = null">
                    <h3 class="text-xl font-semibold">Terms & Conditions</h3>
                    <!-- arrow -->
                    <div :class="{'rotate-180': selected == 2, 'rotate-0': selected !== 2}" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>

                <!-- expand -->
                <dd class="relative overflow-hidden max-h-0 " x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs['container2'].scrollHeight + 'px' : ''">
                    <div class="prose text-black">
                        <ul>
                            <li>Re-entry is not allowed after you leave the venue</li>
                            <li>Children aged 0-11 must be supervised at all times</li>
                            <li>Guests are solely responsible for their own belongings</li>
                            <li>Kindly note that there is an MYR 100 charge to switch from a local Malaysian ticket to a foreign national ticket for wrong purchases</li>
                        </ul>
                    </div>
                </dd>

            </div>


        </div>
    </div>




</div>