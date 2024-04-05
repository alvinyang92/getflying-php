<nav class="bg-gray-100" aria-label="Progress">

  <div class=" mx-auto max-w-md py-20 px-3 ">
    <ol role=" list" class="w-full flex items-center">
      <!-- booking -->
      <li class="relative w-full flex">
        <!-- line -->
        <div class="absolute inset-0 flex justify-center left-4 top-4 z-10" aria-hidden="true">
          <div class="h-0.5 w-full bg-blue-800"></div>
        </div>
        <div class="flex flex-col gap-3 items-center ">
          <!-- circle -->
          <div class="relative flex h-8 w-8 items-center justify-center rounded-full bg-blue-800 z-20">
            <div class="flex flex-col ">
              <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
              </svg>
              <span class="sr-only">Step 1</span>
            </div>
          </div>
          <!-- word -->
          <span class="text-sm">Booking</span>
        </div>
      </li>


      <!-- payment -->
      <li class="relative flex ">
        <!-- line -->
        <div class="absolute inset-0 flex justify-center right-4 top-4 z-10" aria-hidden="true">
          <div class="h-0.5 w-full bg-blue-800"></div>
        </div>
        <div class="flex flex-col items-center gap-3">
          <!-- circle -->
          <div class="relative flex h-8 w-8 items-center justify-center rounded-full border-2 border-bluebg-blue-800 bg-white z-20" aria-current="step">
            <span class="h-2.5 w-2.5 rounded-full bg-blue-800" aria-hidden="true"></span>
            <span class="sr-only">Step 3</span>
          </div>
          <!-- word -->
          <span class="text-sm">Payment</span>
        </div>
      </li>

    </ol>
  </div>



</nav>