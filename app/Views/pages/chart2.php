<!-- tes start -->
<!-- Snippet -->
<section class="flex flex-col justify-center antialiased bg-gray-100 text-gray-600 min-h-screen">
    <div class="max-w-3xl mx-auto p-4 sm:px-6 h-full">
        <!-- Chart widget -->
        <div class="flex flex-col col-span-full xl:col-span-8 bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100 flex items-center">
                <h2 class="font-semibold text-gray-800">Analytics</h2>
            </header>
            <div class="px-5 py-1">
                <div class="flex flex-wrap">
                    <!-- Unique Visitors -->
                    <div class="flex items-center py-2">
                        <div class="mr-5">
                            <div class="flex items-center">
                                <div class="text-3xl font-bold text-gray-800 mr-2">24.7K</div>
                                <div class="text-sm font-medium text-green-500">+49%</div>
                            </div>
                            <div class="text-sm text-gray-500">Unique Visitors</div>
                        </div>
                        <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                    </div>
                    <!-- Total Pageviews -->
                    <div class="flex items-center py-2">
                        <div class="mr-5">
                            <div class="flex items-center">
                                <div class="text-3xl font-bold text-gray-800 mr-2">56.9K</div>
                                <div class="text-sm font-medium text-green-500">+7%</div>
                            </div>
                            <div class="text-sm text-gray-500">Total Pageviews</div>
                        </div>
                        <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                    </div>
                    <!-- Bounce Rate -->
                    <div class="flex items-center py-2">
                        <div class="mr-5">
                            <div class="flex items-center">
                                <div class="text-3xl font-bold text-gray-800 mr-2">54%</div>
                                <div class="text-sm font-medium text-yellow-500">-7%</div>
                            </div>
                            <div class="text-sm text-gray-500">Bounce Rate</div>
                        </div>
                        <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                    </div>
                    <!-- Visit Duration-->
                    <div class="flex items-center">
                        <div>
                            <div class="flex items-center">
                                <div class="text-3xl font-bold text-gray-800 mr-2">2m 56s</div>
                                <div class="text-sm font-medium text-yellow-500">+7%</div>
                            </div>
                            <div class="text-sm text-gray-500">Visit Duration</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart built with Chart.js 3 -->
            <div class="flex-grow">
                <canvas id="analytics-card-01" width="800" height="300"></canvas>
            </div>
        </div>
    </div>
</section>
<!-- tes end -->