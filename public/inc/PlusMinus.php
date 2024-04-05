<div class="">
    <!-- adult twin -->
    <div class="flex justify-between border-b-[1px] border-gray-200 py-6">
        <!-- title -->
        <div class="flex flex-col gap-2">
            <h3 class="font-bold">Adult Twin</h3>
            <p class="">RM8,499</p>
        </div>
        <!-- counter -->
        <div class="custom-number-input h-10 w-32">
            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                <button data-action="decrement" class=" bg-gray-200 text-gray-600 h-full w-full rounded-l cursor-pointer outline-none">
                    <span class="m-auto text-2xl ">−</span>
                </button>

                <input type="number" class="focus:outline-none border-none text-center w-full bg-white font-semibold text-md hover:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>

                <button data-action="increment" class="bg-gray-200 text-gray-600 h-full w-full rounded-r cursor-pointer">
                    <span class="m-auto text-2xl ">+</span>
                </button>
            </div>

        </div>
    </div>

    <!-- adult single -->
    <div class="flex justify-between border-b-[1px] border-gray-200 py-6">
        <!-- title -->
        <div class="flex flex-col gap-2">
            <h3 class="font-bold">Adult Single</h3>
            <p class="">RM8,499</p>
        </div>
        <!-- counter -->
        <div class="custom-number-input h-10 w-32">
            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                <button data-action="decrement" class=" bg-gray-200 text-gray-600 h-full w-full rounded-l cursor-pointer outline-none">
                    <span class="m-auto text-2xl ">−</span>
                </button>

                <input type="number" class="focus:outline-none border-none text-center w-full bg-white font-semibold text-md hover:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>

                <button data-action="increment" class="bg-gray-200 text-gray-600 h-full w-full rounded-r cursor-pointer">
                    <span class="m-auto text-2xl ">+</span>
                </button>
            </div>

        </div>
    </div>

    <!-- adult triple sharing -->
    <div class="flex justify-between border-b-[1px] border-gray-200 py-6">
        <!-- title -->
        <div class="flex flex-col gap-2">
            <h3 class="font-bold">Adult Triple Sharing</h3>
            <p class="">RM8,499</p>
        </div>
        <!-- counter -->
        <div class="custom-number-input h-10 w-32">
            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                <button data-action="decrement" class=" bg-gray-200 text-gray-600 h-full w-full rounded-l cursor-pointer outline-none">
                    <span class="m-auto text-2xl ">−</span>
                </button>

                <input type="number" class="focus:outline-none border-none text-center w-full bg-white font-semibold text-md hover:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>

                <button data-action="increment" class="bg-gray-200 text-gray-600 h-full w-full rounded-r cursor-pointer">
                    <span class="m-auto text-2xl ">+</span>
                </button>
            </div>

        </div>
    </div>

    <!-- child with bed -->
    <div class="flex justify-between border-b-[1px] border-gray-200 py-6">
        <!-- title -->
        <div class="flex flex-col gap-2">
            <h3 class="font-bold">Child with Bed</h3>
            <p class="">RM8,499</p>
        </div>
        <!-- counter -->
        <div class="custom-number-input h-10 w-32">
            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                <button data-action="decrement" class=" bg-gray-200 text-gray-600 h-full w-full rounded-l cursor-pointer outline-none">
                    <span class="m-auto text-2xl ">−</span>
                </button>

                <input type="number" class="focus:outline-none border-none text-center w-full bg-white font-semibold text-md hover:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>

                <button data-action="increment" class="bg-gray-200 text-gray-600 h-full w-full rounded-r cursor-pointer">
                    <span class="m-auto text-2xl ">+</span>
                </button>
            </div>

        </div>
    </div>

    <!-- child without bed -->
    <div class="flex justify-between py-6">
        <!-- title -->
        <div class="flex flex-col gap-2">
            <h3 class="font-bold">Child without Bed</h3>
            <p class="">RM8,499</p>
        </div>
        <!-- counter -->
        <div class="custom-number-input h-10 w-32">
            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                <button data-action="decrement" class=" bg-gray-200 text-gray-600 h-full w-full rounded-l cursor-pointer outline-none">
                    <span class="m-auto text-2xl ">−</span>
                </button>

                <input type="number" class="focus:outline-none border-none text-center w-full bg-white font-semibold text-md hover:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>

                <button data-action="increment" class="bg-gray-200 text-gray-600 h-full w-full rounded-r cursor-pointer">
                    <span class="m-auto text-2xl ">+</span>
                </button>
            </div>

        </div>
    </div>
    <a href="details.php" type="submit" class="mt-5 flex w-full items-center justify-center rounded-md border border-transparent bg-gf-light-blue px-8 py-3 text-base font-medium text-white">Book Now
</a>
</div>



<style>
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .custom-number-input input:focus {
        outline: none !important;
    }

    .custom-number-input button:focus {
        outline: none !important;
    }
</style>

<script>
    function decrement(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value--;
        target.value = value;
    }

    function increment(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value++;
        target.value = value;
    }

    const decrementButtons = document.querySelectorAll(
        `button[data-action="decrement"]`
    );

    const incrementButtons = document.querySelectorAll(
        `button[data-action="increment"]`
    );

    decrementButtons.forEach(btn => {
        btn.addEventListener("click", decrement);
    });

    incrementButtons.forEach(btn => {
        btn.addEventListener("click", increment);
    });
</script>