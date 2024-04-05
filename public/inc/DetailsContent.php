<?php
// JSON data
$titleContent = '[
     {
         "title": "Title",
         "content": "Mr"
     },
     {
         "title": "Given name / First Name",
         "content": "Alvin"
     },
     {
         "title": "Last name / Surname",
         "content": "Ng"
     },
     {
         "title": "NRIC Number",
         "content": "880504032121"
     },
     {
         "title": "Passport Number",
         "content": "A5856969A"
     },
     {
         "title": "Passport Expiry Date",
         "content": "9 April 2022"
     },
     {
         "title": "Date of Birth",
         "content": "09 June 1998"
     }
   


 ]';



$contact = '[
  {
      "title": "Given name / First Name",
      "content": "Alvin"
  },
  {
      "title": "Last name / Surname",
      "content": "Ng"
  },
  {
      "title": "Nationality",
      "content": "Malaysia"
  },
  {
      "title": "Address",
      "content": "123 Jalan Raya"
  },
  {
      "title": "City",
      "content": "Kuala Lumpur"
  },
  {
      "title": "Postcode",
      "content": "50200"
  },
  {
      "title": "State",
      "content": "Wilayah Persekutuan Kuala Lumpur"
  },
  {
      "title": "Country",
      "content": "Malaysia"
  },
  {
      "title": "Phone Number",
      "content": "(+60) 16 497 4366"
  },
  {
      "title": "Email Address",
      "content": "alvinngtzeyang@gmail.com"
  }
]';


// Decode JSON data
$items = json_decode($titleContent);
$contacts = json_decode($contact);
?>



<main class="bg-gray-100">

  <div class="mx-auto max-w-7xl px-4 pb-16 sm:px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 grid-rows-1 items-start gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">

      <!-- right side bar -->
      <div class="lg:col-start-3 lg:row-end-1 sm:top-3 sm:sticky">

        <!-- quantity section -->
        <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5 mb-5">
          <!-- title + content -->
          <dl class="flex flex-wrap">
            <div class="flex-auto pl-6 pt-6">
              <dt class="font-semibold leading-6 text-gray-900">13 days 10 nights discovery of South Africa</dt>
              <dd class="mt-1 font-medium leading-6 text-gray-400">13 days - 20 June - 02 July 2023</dd>
            </div>
            <!-- quantity guest -->
            <div class="mt-6 flex w-full justify-between gap-x-4 border-t border-gray-900/5 px-6 pt-6">
              <!-- title -->
              <dt class="flex-none">
                <span class="font-bold leading-6 text-gray-900">Quantity</span>
              </dt>
              <!-- content -->
              <dd class="text-end  font-medium leading-6 text-gray-900">
                <ul class="space-y-3">
                  <li>Adult Twin x 2</li>
                  <li>Adult Single x 1</li>
                  <li>Adult Triple Sharing x 1</li>
                  <li>Child with bed x 1</li>
                  <li>Child without bed x 1</li>
                </ul>
              </dd>
            </div>
          </dl>
          <!-- total -->
          <div class="mt-6 border-t border-gray-900/5 px-6 py-6">
            <div class="flex justify-between">
              <div class="font-semibold">Total</div>
              <span class="font-semibold leading-6 text-gray-900">RM9876.90</span>
            </div>
          </div>
        </div>

        <!-- add ons section -->
        <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5 mb-5">
          <dl class="flex flex-wrap">
            <!-- title -->
            <div class="flex-auto pl-6 pt-6">
              <dt class="font-semibold leading-6 text-gray-900">Add Ons</dt>
              <!-- <dd class="mt-1 text-base font-medium leading-6 text-gray-400">13 days - 20 June - 02 July 2023</dd> -->
            </div>
            <!-- add on content -->
            <div class="mt-6 flex flex-col w-full justify-between gap-4 border-t border-gray-900/5 px-6 pt-6">

              <!-- item -->
              <div class="flex w-full justify-between">
                <!-- title -->
                <dt class="">
                  <span class=" font-medium leading-6 text-gray-500">Visa</span>
                </dt>
                <!-- price -->
                <dd class=" text-end font-semibold leading-6 text-gray-900">RM99 x 6</dd>

              </div>

              <!-- item -->
              <div class="flex w-full justify-between">
                <!-- title -->
                <dt class="">
                  <span class="font-medium leading-6 text-gray-500">Ripping Guide</span>
                </dt>
                <!-- price -->
                <dd class=" text-end font-semibold leading-6 text-gray-900">RM99 x 6</dd>

              </div>

              <!-- item -->
              <div class="flex w-full justify-between">
                <!-- title -->
                <dt class="">
                  <span class="font-medium leading-6 text-gray-500">Travel Insurance</span>
                </dt>
                <!-- price -->
                <dd class=" text-end font-semibold leading-6 text-gray-900">RM99 x 6</dd>

              </div>

            </div>
          </dl>

          <div class="mt-6 border-t border-gray-900/5 px-6 py-6">
            <div class="flex justify-between">
              <div class="font-semibold">Total</div>
              <span class="font-semibold leading-6 text-gray-900">RM876.90</span>
            </div>
          </div>

        </div>

        <!-- Payment section -->
        <div x-data="{selected:null}" class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5">
          <dl class="flex flex-wrap">
            <!-- title -->
            <div class="flex-auto pl-6 pt-6">
              <dt class="font-semibold leading-6 text-gray-900">Payment</dt>
              <!-- <dd class="mt-1 text-base font-medium leading-6 text-gray-400">13 days - 20 June - 02 July 2023</dd> -->
            </div>
            <!-- add on content -->
            <div class="mt-6 flex flex-col w-full justify-between gap-4 border-t border-gray-900/5 px-6 pt-6">
              <!-- choices deposit or full -->

              <!-- full amount -->
              <button>
                <label class="selected selectable-item relative flex cursor-pointer rounded-lg border-2  p-4 shadow-sm focus:outline-none " onclick="toggleSelection(this)">

                  <input type="radio" name="project-type" value="Newsletter" class="sr-only" aria-labelledby="project-type-0-label" aria-describedby="project-type-0-description-0 project-type-0-description-1">
                  <span class="flex flex-1 ">
                    <span class="selected selectable-item flex flex-col ">
                      <span class="font-medium">Pay Full Amount</span>
                      <span class="mt-3 font-bold">RM10,876.90</span>
                    </span>
                  </span>
                  <!-- Not Checked: "invisible" -->
                  <svg class="h-6 w-6 selected selectable-item" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                  </svg>
                </label>
              </button>

              <!-- half amount -->
              <button>
                <label class="selectable-item relative flex cursor-pointer rounded-lg border-2 p-4 shadow-sm focus:outline-none border-gray-300" onclick="toggleSelection(this)">
                  <input type="radio" name="project-type" value="Newsletter" class="sr-only" aria-labelledby="project-type-0-label" aria-describedby="project-type-0-description-0 project-type-0-description-1">
                  <span class="flex flex-1">
                    <span class="selectable-item flex flex-col text-left">
                      <span class="font-medium">Pay 50% Deposit NOW</span>
                      <span class="mt-3 font-bold">RM5,438.45</span>
                      <span class="text-sm mt-3 ">Balance payment RM 5,438.45</span>
                      <span class="text-sm  ">Pay before 31 Oct 2023</span>
                    </span>
                  </span>
                  <!-- Not Checked: "invisible" -->
                  <svg class="h-6 w-6 selectable-item" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                  </svg>
                </label>
              </button>

            </div>
          </dl>

          <div class="mt-6 border-t border-gray-900/5 px-6 py-6">
            <!-- item -->
            <div class="flex w-full justify-between">
              <!-- title -->
              <dt class="">
                <span class="  font-medium leading-6 text-gray-500">Total Cost</span>
              </dt>
              <!-- price -->
              <dd class=" text-end font-semibold leading-6 text-gray-900">RM10,876.90</dd>

            </div>

            <!-- item -->
            <div class="mt-3 flex w-full justify-between">
              <!-- title -->
              <dt class="">
                <span class="font-medium leading-6 text-gray-500">Payment Amount</span>
              </dt>
              <!-- price -->
              <dd class="text-end text-lg font-bold leading-6 text-gf-light-blue">RM10,876.90</dd>

            </div>

          </div>

        </div>

      </div>

      <!-- left content -->
      <div class="lg:col-span-2 lg:row-span-2 lg:row-end-2 ">

        <!-- travel info -->
        <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5 mb-5">
          <!-- title + content -->
          <dl class="flex flex-wrap">
            <div class="flex-auto pl-6 pt-6">
              <dt class="text-lg font-bold leading-6 text-gray-900">Travel Info</dt>
            </div>
            <!-- quantity guest -->
            <div class="mt-6 flex w-full gap-x-4 border-t border-gray-900/5 px-6 py-6">

              <!-- image -->
              <img class="w-[200px] h-[144px] object-cover rounded-md" src="../assets/images/card-img.jpg" alt="">
              <!-- content -->
              <div class="flex flex-col justify-center">
                <dt class="font-semibold leading-6 text-gray-900">13 days 10 nights discovery of South Africa</dt>
                <dd class="mt-1 font-medium leading-6 text-gray-400">13 days - 20 June - 02 July 2023</dd>
              </div>

            </div>
          </dl>

        </div>

        <!-- add on info -->
        <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5 mb-5">
          <!-- title + content -->
          <dl class="flex flex-wrap">
            <div class="flex-auto pl-6 pt-6">
              <dt class="text-lg font-bold leading-6 text-gray-900">Add Ons</dt>
            </div>

            <!-- checked boxes -->
            <div class="mt-6 flex w-full gap-x-4 border-t border-gray-900/5 px-6 py-6">

              <div class="w-full flex flex-col">

                <!-- item -->
                <div class="flex justify-between w-full py-6">
                  <!-- checkbox -->
                  <div class="relative flex items-start">
                    <!-- checkbox -->
                    <div class="flex h-6 items-center">
                      <input id="comments" aria-describedby="comments-description" checked="true" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-800 focus:ring-blue-800">
                    </div>
                    <!-- text -->
                    <div class="ml-3 leading-6">
                      <label for="comments" class="font-medium text-gray-900">Travel Visa</label>
                    </div>
                  </div>
                  <!-- price -->
                  <div class="flex gap-2 items-center justify-center">
                    <span class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Compulsory</span>
                    <span class="font-bold text-gray-900">RM 99.90/person</span>
                  </div>
                </div>

                <!-- item -->
                <div class="flex justify-between w-full border-t border-gray-900/5 py-6">
                  <!-- checkbox -->
                  <div class="relative flex items-start">
                    <!-- checkbox -->
                    <div class="flex h-6 items-center">
                      <input id="comments" aria-describedby="comments-description" checked="true" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-800 focus:ring-blue-800">
                    </div>
                    <!-- text -->
                    <div class="ml-3 leading-6">
                      <label for="comments" class="font-medium text-gray-900">Travel Insurance</label>
                    </div>
                  </div>
                  <!-- price -->
                  <div class="flex gap-2 items-center justify-center">
                    <span class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Compulsory</span>
                    <span class="font-bold text-gray-900">RM 99.90/person</span>
                  </div>
                </div>

                <!-- item -->
                <div class="flex justify-between w-full border-t border-gray-900/5 py-6">
                  <!-- checkbox -->
                  <div class="relative flex items-start">
                    <!-- checkbox -->
                    <div class="flex h-6 items-center">
                      <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-800 focus:ring-blue-800">
                    </div>
                    <!-- text -->
                    <div class="ml-3 leading-6">
                      <label for="comments" class="font-medium text-gray-900">Tipping / Guide</label>
                    </div>
                  </div>
                  <!-- price -->
                  <div class="flex gap-2 items-center justify-center">
                    <!-- <span class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Compulsory</span> -->
                    <span class="font-bold text-gray-900">RM 99.90/person</span>
                  </div>
                </div>

                <!-- item -->
                <div class="flex justify-between w-full border-t border-gray-900/5 py-6">
                  <!-- checkbox -->
                  <div class="relative flex items-start">
                    <!-- checkbox -->
                    <div class="flex h-6 items-center">
                      <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-800 focus:ring-blue-800">
                    </div>
                    <!-- text -->
                    <div class="ml-3 leading-6">
                      <label for="comments" class="font-medium text-gray-900">Entrance Fess</label>
                    </div>
                  </div>
                  <!-- price -->
                  <div class="flex gap-2 items-center justify-center">
                    <!-- <span class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Compulsory</span> -->
                    <span class="font-bold text-gray-900">RM 99.90/person</span>
                  </div>
                </div>

                <!-- item -->
                <div class="flex justify-between w-full border-t border-gray-900/5 py-6">
                  <!-- checkbox -->
                  <div class="relative flex items-start">
                    <!-- checkbox -->
                    <div class="flex h-6 items-center">
                      <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-800 focus:ring-blue-800">
                    </div>
                    <!-- text -->
                    <div class="ml-3 leading-6">
                      <label for="comments" class="font-medium text-gray-900">Tour Guide</label>
                    </div>
                  </div>
                  <!-- price -->
                  <div class="flex gap-2 items-center justify-center">
                    <!-- <span class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Compulsory</span> -->
                    <span class="font-bold text-gray-900">RM 99.90/person</span>
                  </div>
                </div>

              </div>



            </div>
          </dl>

        </div>

        <!-- Traveler Info -->
        <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5 mb-5">
          <!-- title + content -->
          <dl class="flex flex-wrap">
            <div class="flex-auto pl-6 pt-6">
              <dt class="text-lg font-bold leading-6 text-gray-900">Traveler Info</dt>
            </div>

            <!-- tab and details -->
            <div class="mt-6 flex w-full gap-x-4 border-t border-gray-900/5 px-6 py-6">

              <div class="flex gap-2">
                <!-- item -->
                <div class="">
                  <a href="#" class="bg-blue-50 text-blue-800 border-2 border-blue-800 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Alex Wong</a>
                </div>
                <!-- item -->
                <div class="">
                  <a href="#" class="bg-gray-100 text-black rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Alex Wong</a>
                </div>
                <!-- item -->
                <div class="">
                  <a href="#" class="bg-gray-100 text-black rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Alex Wong</a>
                </div>
                <!-- item -->
                <div class="">
                  <a href="#" class="bg-gray-100 text-black rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Alex Wong</a>
                </div>
                <!-- item -->
                <div class="">
                  <a href="#" class="bg-gray-100 text-black rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Alex Wong</a>
                </div>
                <!-- item -->
                <div class="">
                  <a href="#" class="bg-gray-100 text-black rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Alex Wong</a>
                </div>
                <!-- item -->
                <div class="">
                  <a href="#" class="bg-gray-100 text-black rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Alex Wong</a>
                </div>
              </div>
            </div>

            <div class="px-6 py-7 w-full">
              <div class="space-y-3">

                <!-- Title -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Title</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option>Mr</option>
                        <!-- <option>Mr</option>
                        <option>Mrs</option> -->
                      </select>
                    </div>
                  </div>
                </div>

                <!-- first name -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">First Name</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>

                <!-- last Name -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Last Name</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>

                <!-- NRIC -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">NRIC Number</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>

                <!-- Passport Number -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Passport Number</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>

                <!-- Passport Expiry Date-->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Passport Expiry Date
                  </span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>

                <!-- Date of Birtth -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Date of Birtth </span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option>6 July 1999</option>
                        <!-- <option>6/7/1999</option> -->

                      </select>
                    </div>
                  </div>
                </div>

                <!-- nationality -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Nationality</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option>Malaysia</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                      </select>
                    </div>
                  </div>
                </div>

                <!-- Phone number -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Phone number</span>
                  <div class="text-left w-[70%] flex gap-2">

                    <!-- country code -->
                    <div class="mt-2 text-left w-[60%]">
                      <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option>Malaysia (+60)</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                      </select>
                    </div>

                    <!-- number -->
                    <div class="text-left w-full">
                      <div class="mt-2 ">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                    </div>

                  </div>
                </div>

                <!-- Email -->
                <!-- <div class="flex justify-between w-full">
                  <span class="text-left py-2">Email</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div> -->



              </div>
            </div>
          </dl>

        </div>

        <!-- Traveler Info -->
        <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5 mb-5">

          <!-- title + content -->
          <dl class="flex flex-wrap">
            <div class="flex-auto pl-6 pt-6">
              <dt class="text-lg font-bold leading-6 text-gray-900">Contact / Billing Details</dt>
            </div>


            <div class="px-6 py-7 w-full mt-6 border-t border-gray-900/5 ">
              <div class="space-y-3">

                <!-- First Name -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">First Name</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>


                <!-- last Name -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Last Name</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>

                <!-- nationality -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Nationality</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option>Malaysia</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                      </select>
                    </div>
                  </div>
                </div>

                <!-- Address -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Address</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>

                <!-- City -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">City</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>

                <!-- Postcode -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Postcode</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>

                <!-- State -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">State</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option>Penang</option>
                      </select>
                    </div>
                  </div>
                </div>

                <!-- Country -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Country</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option>Malaysia</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                      </select>
                    </div>
                  </div>
                </div>

                <!-- Phone number -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Phone number</span>
                  <div class="text-left w-[70%] flex gap-2">

                    <!-- country code -->
                    <div class="mt-2 text-left w-[60%]">
                      <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option>Malaysia (+60)</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                      </select>
                    </div>

                    <!-- number -->
                    <div class="text-left w-full">
                      <div class="mt-2 ">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                      </div>
                    </div>

                  </div>
                </div>

                <!-- Email -->
                <div class="flex justify-between w-full">
                  <span class="text-left py-2">Email</span>
                  <div class="text-left w-[70%]">
                    <div class="mt-2">
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </dl>

        </div>

        <!-- tnc-->
        <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5 mb-5 p-5">
          <div class="flex justify-between items-center">
            <span class="w-[600px] text-sm">By continuing, you acknowledge and agree to Getflying’s <span class="text-gf-light-blue underline">General Terms of Use</span> and <span class="text-gf-light-blue underline">Privacy Policy Use</span></span>
            <a href="payment.php">
              <button type="button" class="rounded-md bg-gf-light-blue px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gf-light-blue ">Make Payment</button>

            </a>

          </div>

        </div>


      </div>


    </div>
  </div>
</main>

<script>
  // function toggleSelection(element) {
  //   // Remove selected class from all items
  //   document.querySelectorAll('.selectable-item').forEach(item => {
  //     item.classList.remove('paymentselected', 'radioselected');
  //   });
  //   // Add selected class to clicked item
  //   element.classList.add('paymentselected', 'radioselected');
  // }

  function toggleSelection(element) {
    // Remove selected class from all items
    document.querySelectorAll('.selectable-item').forEach(item => {
      item.classList.remove('selected');
    });
    // Add selected class to clicked item
    element.classList.add('selected');
  }
</script>

<style>
  .selected {
    /* Add your selected styles here */
    background-color: #eff6ff;
    border-color: #1e40af;
    color: #1e40af;
  }

  .graytext {
    color: #6b7280;
  }
</style>