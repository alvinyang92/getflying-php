<div x-data="searchData()" class="">
    <!-- input -->
    <div class="">
        <form class="relative" style="margin-block-end: 0px;">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input x-on:click="open = !open" type="search" x-model="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 border-r border-b-0 sm:border-b sm:border-r-0  bg-gray-50 focus:gray-300 focus:ring-0" placeholder="Search your desination" required>
        </form>
    </div>
    <!-- dropdown -->
    <div id="toplayer" class="relative">
        <div x-show="open" x-on:click.outside="open = !open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate" x-transition:enter-end="opacity-100 translate" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate" x-transition:leave-end="opacity-0 translate" class="mt-1 shadow-lg rounded-md py-2 border  max-h-[540px] overflow-y-auto bg-white absolute w-full z-[9999] ">
            <template x-for="item in filteredItems" :key="item" class="hover:bg-gray-50">
                <div class="flex items-center gap-2 hover:bg-gray-100">
                    <div class="pl-4">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <button class="py-2 block w-full text-left" x-text="item" x-on:click="selectItem(item)"></button>
                </div>
            </template>
            <div class="pl-4" x-show="items!== '' && filteredItems.length===0">No destination Available</div>
        </div>
    </div>
</div>

<script>
    const searchData = () => {
        return {
            search: '',
            open: false,
            selectedItem: '',
            items: [
                'Malaysia',
                'Vietnam',
                'Thailand',
                'Hong Kong',
                'Cambodia',
                'United States',
                'Russia'
            ],
            get filteredItems() {
                return this.items.filter(
                    i => i.toLowerCase().startsWith(this.search.toLowerCase())
                );
            },
            selectItem(item) {
                this.selectedItem = item;
                this.search = item;
                this.open = false;
            }
        };
    };
</script>