<div id="itinerary" class="pb-5 border-b-[1px] border-gray-200">
    <!-- About This Tour-->
    <div class="mt-10">
        <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Itenerary</h2>
    </div>
    <!-- accoradian -->
    <div class="divide-y space-y-5">
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <span class="text-base font-semibold leading-7">Day 1 - KLIA Assemble</span>
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
            <dd class="mt-2 pr-12" id="faq-1" x-show="open">
                <article class="prose">
                    <ul>
                        <li>Breakfast at the hotel</li>
                        <li>Breakfast at the hotel</li>
                        <li>Then Explore the Canals & Dam Square.</li>
                        <li>City Tour Amsterdam: Amsterdam - Windmills at Zaanse Schans, Traditional chees - making demostration and Harbour of Volendam.</li>
                        <li>Dinner and overnight at Amsterdam.</li>
                    </ul>
                </article>
            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <span class="text-base font-semibold leading-7">Day 1 - KLIA Assemble</span>
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
            <dd class="mt-2 pr-12" id="faq-1" x-show="open">
                <article class="prose">
                    <ul>
                        <li>Breakfast at the hotel</li>
                        <li>Breakfast at the hotel</li>
                        <li>Then Explore the Canals & Dam Square.</li>
                        <li>City Tour Amsterdam: Amsterdam - Windmills at Zaanse Schans, Traditional chees - making demostration and Harbour of Volendam.</li>
                        <li>Dinner and overnight at Amsterdam.</li>
                    </ul>
                </article>
            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <span class="text-base font-semibold leading-7">Day 1 - KLIA Assemble</span>
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
            <dd class="mt-2 pr-12" id="faq-1" x-show="open">
                <article class="prose">
                    <ul>
                        <li>Breakfast at the hotel</li>
                        <li>Breakfast at the hotel</li>
                        <li>Then Explore the Canals & Dam Square.</li>
                        <li>City Tour Amsterdam: Amsterdam - Windmills at Zaanse Schans, Traditional chees - making demostration and Harbour of Volendam.</li>
                        <li>Dinner and overnight at Amsterdam.</li>
                    </ul>
                </article>
            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <span class="text-base font-semibold leading-7">Day 1 - KLIA Assemble</span>
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
            <dd class="mt-2 pr-12" id="faq-1" x-show="open">
                <article class="prose">
                    <ul>
                        <li>Breakfast at the hotel</li>
                        <li>Breakfast at the hotel</li>
                        <li>Then Explore the Canals & Dam Square.</li>
                        <li>City Tour Amsterdam: Amsterdam - Windmills at Zaanse Schans, Traditional chees - making demostration and Harbour of Volendam.</li>
                        <li>Dinner and overnight at Amsterdam.</li>
                    </ul>
                </article>
            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <span class="text-base font-semibold leading-7">Day 1 - KLIA Assemble</span>
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
            <dd class="mt-2 pr-12" id="faq-1" x-show="open">
                <article class="prose">
                    <ul>
                        <li>Breakfast at the hotel</li>
                        <li>Breakfast at the hotel</li>
                        <li>Then Explore the Canals & Dam Square.</li>
                        <li>City Tour Amsterdam: Amsterdam - Windmills at Zaanse Schans, Traditional chees - making demostration and Harbour of Volendam.</li>
                        <li>Dinner and overnight at Amsterdam.</li>
                    </ul>
                </article>
            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <span class="text-base font-semibold leading-7">Day 1 - KLIA Assemble</span>
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
            <dd class="mt-2 pr-12" id="faq-1" x-show="open">
                <article class="prose">
                    <ul>
                        <li>Breakfast at the hotel</li>
                        <li>Breakfast at the hotel</li>
                        <li>Then Explore the Canals & Dam Square.</li>
                        <li>City Tour Amsterdam: Amsterdam - Windmills at Zaanse Schans, Traditional chees - making demostration and Harbour of Volendam.</li>
                        <li>Dinner and overnight at Amsterdam.</li>
                    </ul>
                </article>
            </dd>
        </div>
        <!-- item1 -->
        <div x-data="{ open: false }" class="pt-6">
            <dt>
                <button type="button" x-description="Expand/collapse question button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-1" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
                    <span class="text-base font-semibold leading-7">Day 1 - KLIA Assemble</span>
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
            <dd class="mt-2 pr-12" id="faq-1" x-show="open">
                <article class="prose">
                    <ul>
                        <li>Breakfast at the hotel</li>
                        <li>Breakfast at the hotel</li>
                        <li>Then Explore the Canals & Dam Square.</li>
                        <li>City Tour Amsterdam: Amsterdam - Windmills at Zaanse Schans, Traditional chees - making demostration and Harbour of Volendam.</li>
                        <li>Dinner and overnight at Amsterdam.</li>
                    </ul>
                </article>
            </dd>
        </div>
    </div>
</div>