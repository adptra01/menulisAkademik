<x-app>
    <x-slot name="title">Home</x-slot>
    <div class="pb-6 bg-white sm:pb-8 lg:pb-12">
        <div class="max-w-screen-xl px-4 mx-auto md:px-8">
            <section
                class="relative flex items-center justify-center flex-1 py-16 overflow-hidden bg-gray-100 rounded-lg shadow-lg min-h-96 shrink-0 md:py-20 xl:py-48">
                <!-- image - start -->
                <img src="https://images.unsplash.com/photo-1618004652321-13a63e576b80?auto=format&q=75&fit=crop&w=1500"
                    loading="lazy" alt="Photo by Fakurian Design"
                    class="absolute inset-0 object-cover object-center w-full h-full" />
                <!-- image - end -->

                <!-- overlay - start -->
                <div class="absolute inset-0 bg-indigo-500 mix-blend-multiply"></div>
                <!-- overlay - end -->

                <!-- text start -->
                <div class="relative flex flex-col items-center p-4 sm:max-w-xl">
                    <p class="mb-4 text-lg font-semibold text-center text-indigo-200 sm:text-xl md:mb-8">Kami
                        memperkenalkan
                    </p>
                    <h1 class="mb-8 text-4xl font-bold text-center text-white sm:text-5xl md:mb-12 md:text-6xl">
                        Seni Menulis Akademik dan Keterampilan Argumentasi</h1>

                    <div class="flex w-full flex-col gap-2.5 sm:flex-row sm:justify-center">
                        <a href="#"
                            class="inline-block px-8 py-3 text-sm font-semibold text-center text-white transition duration-100 bg-indigo-500 rounded-lg outline-none ring-indigo-300 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">Start
                            now</a>

                        <a href="#"
                            class="inline-block px-8 py-3 text-sm font-semibold text-center text-gray-500 transition duration-100 bg-gray-200 rounded-lg outline-none ring-indigo-300 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">Take
                            tour</a>
                    </div>
                </div>
                <!-- text end -->
            </section>
        </div>
    </div>

    <!-- feature -->
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-10 lg:grid-cols-2">
            <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
                <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-teal-accent-400">
                    <svg class="text-teal-900 w-7 h-7" viewBox="0 0 24 24">
                        <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-miterlimit="10" points=" 8,5 8,1 16,1 16,5" stroke-linejoin="round"></polyline>
                        <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-miterlimit="10" points="9,15 1,15 1,5 23,5 23,15 15,15" stroke-linejoin="round">
                        </polyline>
                        <polyline fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-miterlimit="10" points="22,18 22,23 2,23 2,18" stroke-linejoin="round">
                        </polyline>
                        <rect x="9" y="13" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-miterlimit="10" width="6" height="4"
                            stroke-linejoin="round"></rect>
                    </svg>
                </div>
                <div class="max-w-xl mb-6">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                        Apa itu<br class="hidden md:block" />
                        Seni Menulis Akademik dan Keterampilan Argumentasi ?

                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        Seni Menulis Akademik dan Keterampilan Argumentasi merupakan keterampilan penting dalam dunia
                        akademik yang melibatkan kemampuan untuk menghasilkan tulisan yang jelas, koheren, dan
                        persuasif.
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center -mx-4 lg:pl-8">
                <div class="flex flex-col items-end px-3">
                    <img class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56"
                        src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                        alt="" />
                    <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40"
                        src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                        alt="" />
                </div>
                <div class="px-3">
                    <img class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80"
                        src="https://images.pexels.com/photos/3182739/pexels-photo-3182739.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
                        alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h2
                class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor"
                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="bebc38d1-bf72-4c77-a073-f0fe5abe0753" x="0" y="0"
                                width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#bebc38d1-bf72-4c77-a073-f0fe5abe0753)" width="52" height="24">
                        </rect>
                    </svg>
                    <span class="relative">Kenapa</span>
                </span>
                Seni Menulis Akademik dan Keterampilan Argumentasi Penting ?
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                Karena seni menulis akademik dan keterampilan argumentasi penting dalam mengembangkan kemampuan berpikir
                kritis dan menyampaikan ide dengan efektif.
            </p>
        </div>
        <div class="grid gap-8 row-gap-12 lg:grid-cols-2">
            <div class="max-w-md sm:mx-auto sm:text-center">
                <div
                    class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50 sm:mx-auto sm:w-24 sm:h-24">
                    <i class="text-4xl fa-solid fa-graduation-cap"></i>
                </div>
                <h6 class="mb-3 text-xl font-bold leading-5">Seni Menulis Akademik </h6>
                <p class="mb-3 text-sm text-gray-900">
                    melibatkan kemampuan untuk menghasilkan tulisan yang jelas, terstruktur, dan didukung oleh bukti
                    yang valid. Ini memungkinkan komunikasi yang efektif dan dapat meningkatkan kemampuan berpikir
                    kritis.
                </p>
                <a href="{{ route('courses.academies') }}" aria-label=""
                    class="inline-flex items-center font-semibold transition-colors duration-200 text-base-400 hover:text-blue-500 ">Lihat
                    lebih!</a>
            </div>
            <div class="max-w-md sm:mx-auto sm:text-center">
                <div
                    class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50 sm:mx-auto sm:w-24 sm:h-24">
                    <i class="text-4xl fa-solid fa-blog"></i>
                </div>
                <h6 class="mb-3 text-xl font-bold leading-5">Keterampilan Argumentasi</h6>
                <p class="mb-3 text-sm text-gray-900">
                    di sisi lain, menggunakan logika yang tepat, dan mendukung pendapat dengan bukti yang meyakinkan.
                    Ini membantu dalam menyusun pendapat yang persuasif dan mempengaruhi pemikiran orang lain.
                </p>
                <a href="{{ route('courses.arguments') }}" aria-label=""
                    class="inline-flex items-center font-semibold transition-colors duration-200 text-base-400 hover:text-blue-500 ">Lihat
                    lebih!</a>
            </div>
        </div>
    </div>
    <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Materi Populer</h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">Temukan materi terbaik untuk meningkatkan pengetahuan dan
                keterampilan Anda.</p>
        </div>
        <!-- End Title -->
        <div class="gap-4 carousel rounded-box">
            @foreach ($random['academies'] as $item)
                <div class="carousel-item">
                    <!-- Card -->
                    <a class="group flex flex-col w-96 h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4]"
                        href="{{ route('details', $item->slug) }}">
                        <div class="aspect-w-16 aspect-h-11">
                            <img class="object-cover w-full h-52 rounded-xl"
                                src="{{ Storage::url($item->thumbnail) }}" alt="Image Description">
                        </div>
                        <div class="my-6">
                            <h3
                                class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
                                {{ $item->title }}
                            </h3>
                            <p class="mt-5 text-gray-600 dark:text-gray-400">
                                At Wake, our mission has always been focused on bringing openness.
                            </p>
                        </div>
                        <div class="flex items-center mt-auto gap-x-3">
                            <img class="w-8 h-8 rounded-full"
                                src="https://api.dicebear.com/6.x/lorelei/svg?seed={{ rand(0, 100) }}"
                                alt="Image Description">
                            <div>
                                <h5 class="text-sm text-gray-800 dark:text-gray-200">By Admin,
                                    {{ Carbon\carbon::parse($item->created_at)->diffForHumans() }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            @foreach ($random['arguments'] as $item)
                <div class="carousel-item">
                    <!-- Card -->
                    <a class="group flex flex-col w-96 h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4]"
                        href="{{ route('details', $item->slug) }}">
                        <div class="aspect-w-16 aspect-h-11">
                            <img class="object-cover w-full h-52 rounded-xl"
                                src="{{ Storage::url($item->thumbnail) }}" alt="Image Description">
                        </div>
                        <div class="my-6">
                            <h3
                                class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
                                {{ $item->title }}
                            </h3>
                            <p class="mt-5 text-gray-600 dark:text-gray-400">
                                At Wake, our mission has always been focused on bringing openness.
                            </p>
                        </div>
                        <div class="flex items-center mt-auto gap-x-3">
                            <img class="w-8 h-8 rounded-full"
                                src="https://api.dicebear.com/6.x/lorelei/svg?seed={{ rand(0, 100) }}"
                                alt="Image Description">
                            <div>
                                <h5 class="text-sm text-gray-800 dark:text-gray-200">By Admin,
                                    {{ Carbon\carbon::parse($item->created_at)->diffForHumans() }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
    <!-- End Card Blog -->
    <!-- Clients -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="w-2/3 sm:w-1/2 lg:w-1/3 mx-auto text-center mb-6">
            <h2 class="text-gray-600 dark:text-gray-400">Trusted by Open Source, enterprise, and more than 99,000 of
                you</h2>
        </div>
        <!-- End Title -->

        <div class="flex justify-center gap-x-6 sm:gap-x-12 lg:gap-x-24">
            <img src="/assets/img/logo-unja.svg"
                class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto sm:mx-0 text-gray-500" alt="logo-unja">

            <svg class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto sm:mx-0 text-gray-500"
                viewBox="0 -8.881784197001252e-16 267.51517722360785 65.24679557585003"
                xmlns="http://www.w3.org/2000/svg" width="2500" height="610">
                <path
                    d="M263.043 56.411a4.418 4.418 0 1 0 .085 0zm0 8.33a3.874 3.874 0 1 1 3.809-3.938v.065a3.791 3.791 0 0 1-3.708 3.871h-.1m-16.96-9.535h-9.6V40.17c0-3.585-.064-8.2-4.993-8.2-5 0-5.765 3.906-5.765 7.939v15.294h-9.6V24.287h9.216v4.225h.129a10.1 10.1 0 0 1 9.093-4.994c9.73 0 11.524 6.4 11.524 14.726zm-40.79-35.143a5.571 5.571 0 1 1 5.57-5.572 5.571 5.571 0 0 1-5.57 5.572m4.8 35.143h-9.61V24.287h9.61zM250.87.004h-55.21a4.728 4.728 0 0 0-4.781 4.67v55.439a4.731 4.731 0 0 0 4.781 4.675h55.21a4.741 4.741 0 0 0 4.8-4.675V4.67a4.738 4.738 0 0 0-4.8-4.67m-86.12 31.749c-4.8 0-7.68 3.205-7.68 7.875s2.879 7.878 7.68 7.878 7.687-3.2 7.687-7.878-2.881-7.875-7.687-7.875m16.525 23.437h-8.838v-4.1h-.131a12.071 12.071 0 0 1-9.544 4.868c-9.224 0-15.3-6.657-15.3-16.071 0-8.646 5.377-16.585 14.216-16.585 3.973 0 7.684 1.087 9.861 4.1h.126V9.577h9.609zm-46.139-19.048a5.756 5.756 0 0 0-5.894-5.89 6.406 6.406 0 0 0-6.784 5.89zm8.132 13.7a16.909 16.909 0 0 1-13.128 6.151c-9.6 0-17.286-6.408-17.286-16.331s7.685-16.328 17.286-16.328c8.973 0 14.6 6.4 14.6 16.328v3.01h-22.282a7.171 7.171 0 0 0 7.235 6.019 8.193 8.193 0 0 0 6.851-3.778zM47.834 24.279h9.219v4.225h.131a10.085 10.085 0 0 1 9.09-4.994c9.735 0 11.527 6.405 11.527 14.726V55.19h-9.6V40.159c0-3.588-.066-8.2-5-8.2-4.99 0-5.76 3.907-5.76 7.939v15.288h-9.6zM82.669 9.58h9.6v27.265l10.88-12.583h11.77l-12.6 14.313 12.335 16.63h-12.066L92.397 39.923h-.126v15.28h-9.6zM32.911 24.276h9.6v30.916h-9.6zm4.8-15.37a5.569 5.569 0 1 1-5.57 5.569 5.569 5.569 0 0 1 5.57-5.569M0 9.587h9.993v36.4h18.5v9.222H0zm263.744 51.522a1.2 1.2 0 0 0 1.21-1.269c0-.9-.543-1.33-1.657-1.33h-1.8v4.712h.677v-2.054h.832l.019.025 1.291 2.029h.724l-1.389-2.1zm-.783-.472h-.785v-1.593h.995c.514 0 1.1.084 1.1.757 0 .774-.593.836-1.314.836"
                    fill="currentColor" />
            </svg>
        </div>
    </div>
    <!-- End Clients -->
</x-app>
