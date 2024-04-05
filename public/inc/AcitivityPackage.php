<div id="package" class="pb-5 border-b-[1px] border-gray-200">
    <!-- About This Tour-->
    <div class="mt-10">
        <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Tour Package</h2>
    </div>
    <!-- accoradian -->
    <div class="divide-y space-y-5">
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <div class="flex gap-4 items-center">
                        <span class="text-base font-semibold leading-7">May 2023</span>
                        <span class="inline-flex items-center gap-x-1.5 border border-[#F05A28] rounded-full bg-[#FFEAE6] px-2 py-1 text-xs font-bold text-[#F05A28]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 fill-[#F05A28]]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            Last Call
                        </span>
                    </div>

                    <span class="ml-6 flex h-7 items-center">
                        <svg x-description="Icon when question is collapsed." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6 hidden" :class="{ 'hidden': open }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"></path>
                        </svg>
                        <svg x-description="Icon when question is expanded." x-state:on="Item expanded" x-state:off="Item collapsed" class="h-6 w-6" :class="{ 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"></path>
                        </svg>
                    </span>
                </button>
            </dt>
            <dd class="mt-5 pr-12" id="faq-1" x-show="open">
                <div class="grid grid-cols-2 gap-x-5 pt-4">
                    <?php include './inc/Calander.php'; ?>
                    <?php include './inc/PlusMinus.php'; ?>

            </dd>
        </div>



    </div>

</div>
</div>