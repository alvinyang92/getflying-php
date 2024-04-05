<div class="z-10 relative h-[500px] flex flex-col items-center justify-center overflow-hidden my-auto isolate px-6 py-24 sm:py-32 lg:px-8">
        <!-- image -->
        <img v-if="blok.image?.filename" class="absolute inset-0 -z-10 h-[500px] overflow-hidden w-full object-cover" :src="blok.image.filename + '/m/'" :alt="blok.image.alt" />
        <!-- overlay -->
        <div class="absolute inset-0 h-[500px] overflow-hidden bg-black/20 z-30 "></div>
        <!-- content -->
        <div class="mx-auto max-w-2xl text-center z-50 relative ">
            <p class="text-lg leading-8 text-white"> {{ blok.label }}</p>
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl"> {{ blok.title }}</h2>
            <p class="mt-6 text-lg leading-8 text-white"> {{ blok.desc }}</p>
        </div>
    </div>