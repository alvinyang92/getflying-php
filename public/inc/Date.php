<div class="">
    <form class="relative" style="margin-block-end: 0px;">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-gray-500">
                <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
            </svg>
        </div>

        <input type="text" class="datepicker block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300   bg-gray-50 focus:ring-0" placeholder="Select your date">
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        flatpickr(".datepicker", {
            mode: "range",
            minDate: "today",
            dateFormat: "Y-m-d",
            // disable: [
            //     function(date) {
            //         // disable every multiple of 8
            //         return !(date.getDate() % 8);
            //     }
            // ]
        });
    });
</script>