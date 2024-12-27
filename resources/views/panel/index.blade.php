@extends('panel.layouts.master')

@section('content')
    <div class="grid grid-cols-12 gap-x-4">
        <!-- Start Bread Crumb Section -->
        <div class="col-span-full card flex-center-btween">
            <h5 class="card-title">Admin</h5>
            <ul class="flex items-center flex-wrap gap-1.5 *:flex-center *:gap-1.5 leading-none text-gray-900 dark:text-dark-text mt-2">
                <li class="text-primary-500 after:font-remix after:flex-center after:font-thin after:text-gray-900 after:size-5 after:content-['\ea6d'] after:translate-y-[1.4px] last:after:hidden [&.current-page]:text-gray-500 dark:[&.current-page]:text-dark-text-two">
                    <a href="index.html">Home</a>
                </li>
                <li class="text-primary-500 after:font-remix after:flex-center after:font-thin after:text-gray-900 after:size-5 after:content-['\ea6d'] after:translate-y-[1.4px] last:after:hidden [&.current-page]:text-gray-500 dark:[&.current-page]:text-dark-text-two current-page">
                    <a href="#">Admin Dashboard</a>
                </li>
            </ul>
        </div>
        <!-- End Bread Crumb Section -->
        <!-- Start Short Progress Card Section -->
        <div class="col-span-full grid grid-cols-12 gap-4 card">
            <!-- Overall revenue Progress Card -->
            <div class="col-span-full md:col-span-6 2xl:col-span-3 p-[10px_16px] dk-border-one rounded-xl dk-theme-card-square h-full">
                <div class="flex-center-between">
                    <h6 class="leading-none text-gray-500 dark:text-white font-semibold">Overall revenue</h6>
                    <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
                </div>
                <div class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                    <div class="pb-8 shrink-0">
                        <div class="flex items-center gap-2 mb-3">
                            <div class="card-title">
                                $<span class="counter-value" data-value="30000">0</span>
                            </div>
                            <div class="flex-center text-primary-500 size-5 rounded-50 border border-primary-500">
                                <i class="ri-arrow-up-line text-inherit text-sm"></i>
                            </div>
                        </div>
                        <div class="leading-none text-gray-900 dark:text-dark-text font-semibold">
                            <span class="text-primary-500">09%</span>
                            Below Target
                        </div>
                    </div>
                    <div class="grow self-center pb-3">
                        <div id="admin-overall-revenue-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Total registrations Progress Card -->
            <div class="col-span-full md:col-span-6 2xl:col-span-3 p-[10px_16px] dk-border-one rounded-xl dk-theme-card-square h-full">
                <div class="flex-center-between">
                    <h6 class="leading-none text-gray-500 dark:text-white font-semibold">Total registrations</h6>
                    <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
                </div>
                <div class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                    <div class="pb-8 shrink-0">
                        <div class="flex items-center gap-2 mb-3">
                            <div class="counter-value card-title" data-value="21000">0</div>
                            <div class="flex-center text-danger size-5 rounded-50 border border-danger">
                                <i class="ri-arrow-down-line text-inherit text-sm"></i>
                            </div>
                        </div>
                        <div class="leading-none text-gray-900 dark:text-dark-text font-semibold">
                            <span class="text-danger">05%</span>
                            Below Target
                        </div>
                    </div>
                    <div class="grow self-center pb-3">
                        <div id="admin-total-registration-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Total Courses Progress Card -->
            <div class="col-span-full md:col-span-6 2xl:col-span-3 p-[10px_16px] dk-border-one rounded-xl dk-theme-card-square h-full">
                <div class="flex-center-between">
                    <h6 class="leading-none text-gray-500 dark:text-white font-semibold">Total courses</h6>
                    <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
                </div>
                <div class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                    <div class="pb-8 shrink-0">
                        <div class="flex items-center gap-2 mb-3">
                            <div class="counter-value card-title" data-value="25000">0</div>
                            <div class="flex-center text-primary-500 size-5 rounded-50 border border-primary-500">
                                <i class="ri-arrow-up-line text-inherit text-sm"></i>
                            </div>
                        </div>
                        <div class="leading-none text-gray-900 dark:text-dark-text font-semibold">
                            <span class="text-primary-500">50%</span>
                            Below Target
                        </div>
                    </div>
                    <div class="grow self-center pb-3">
                        <div id="admin-total-course-chart"></div>
                    </div>
                </div>
            </div>
            <!-- Average review Progress Card -->
            <div class="col-span-full md:col-span-6 2xl:col-span-3 p-[10px_16px] dk-border-one rounded-xl dk-theme-card-square h-full">
                <div class="flex-center-between">
                    <h6 class="leading-none text-gray-500 dark:text-white font-semibold">Average review</h6>
                    <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
                </div>
                <div class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                    <div class="pb-8 shrink-0">
                        <div class="flex items-center gap-2 mb-3">
                            <div class="counter-value card-title" data-value="4.5">0</div>
                            <div class="flex-center text-primary-500 size-5 rounded-50 border border-primary-500">
                                <i class="ri-arrow-up-line text-inherit text-sm"></i>
                            </div>
                        </div>
                        <div class="leading-none text-gray-900 dark:text-dark-text font-semibold">
                            <span class="text-primary-500">05%</span>
                            Below Target
                        </div>
                    </div>
                    <div class="grow self-center pb-3">
                        <div id="admin-average-review-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Short Progress Card Section -->
        <!-- Start Average Registration rate Chart Section -->
        <div class="col-span-full 3xl:col-span-8 card">
            <div class="flex-center-between">
                <h6 class="card-title">Average Registration rate</h6>
                <select class="form-input form-select">
                    <option value="this-month">This Year</option>
                    <option value="last-month">This Month</option>
                </select>
            </div>
            <div id="admin-average-registration-chart"></div>
        </div>
        <!-- End Average Registration rate Chart Section -->
        <!-- Start Highest rated courses Section -->
        <div class="col-span-full lg:col-span-6 3xl:col-span-4 card">
            <div class="flex-center-between">
                <h6 class="card-title">Highest rated coursess</h6>
                <a href="#" class="btn b-solid btn-primary-solid btn-sm">See all</a>
            </div>
            <!-- Course Table -->
            <div class="overflow-x-auto scrollbar-table">
                <table class="table-auto w-full whitespace-nowrap text-left text-xs text-gray-500 dark:text-dark-text font-semibold leading-none">
                    <thead class="border-b border-dashed border-gray-900/40 dark:border-dark-border-three">
                    <tr>
                        <th class="px-3.5 py-4">Course</th>
                        <th class="px-3.5 py-4">Rating</th>
                        <th class="px-3.5 py-4">Enrolled</th>
                        <th class="px-3.5 py-4">Price</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-dashed divide-gray-900/40 dark:divide-dark-border-three">
                    <tr>
                        <td class="flex items-center gap-2 px-3.5 py-4">
                            <a href="#" class="size-10 rounded-50 overflow-hidden dk-theme-card-square">
                                <img src="/assets/images/admin/top-course/top-course-1.png" alt="thumb">
                            </a>
                            <div>
                                <h6 class="text-heading font-semibold mb-1.5 line-clamp-1">
                                    <a href="#">Digital marketing base...</a>
                                </h6>
                                <p class="font-normal">Author - Jane Howard</p>
                            </div>
                        </td>
                        <td class="px-3.5 py-4">4.9</td>
                        <td class="px-3.5 py-4">55k</td>
                        <td class="px-3.5 py-4">$190.00</td>
                    </tr>
                    <tr>
                        <td class="flex items-center gap-2 px-3.5 py-4">
                            <a href="#" class="size-10 rounded-50 overflow-hidden dk-theme-card-square">
                                <img src="/assets/images/admin/top-course/top-course-2.png" alt="thumb">
                            </a>
                            <div>
                                <h6 class="text-heading font-semibold mb-1.5 line-clamp-1">
                                    <a href="#">Web Development Essentials</a>
                                </h6>
                                <p class="font-normal">Author - John Doe</p>
                            </div>
                        </td>
                        <td class="px-3.5 py-4">4.8</td>
                        <td class="px-3.5 py-4">60k</td>
                        <td class="px-3.5 py-4">$200.00</td>
                    </tr>
                    <tr>
                        <td class="flex items-center gap-2 px-3.5 py-4">
                            <a href="#" class="size-10 rounded-50 overflow-hidden dk-theme-card-square">
                                <img src="/assets/images/admin/top-course/top-course-3.png" alt="thumb">
                            </a>
                            <div>
                                <h6 class="text-heading font-semibold mb-1.5 line-clamp-1">
                                    <a href="#">Graphic Design Masterclass</a>
                                </h6>
                                <p class="font-normal">Author - Emily Clark</p>
                            </div>
                        </td>
                        <td class="px-3.5 py-4">4.7</td>
                        <td class="px-3.5 py-4">45k</td>
                        <td class="px-3.5 py-4">$180.00</td>
                    </tr>
                    <tr>
                        <td class="flex items-center gap-2 px-3.5 py-4">
                            <a href="#" class="size-10 rounded-50 overflow-hidden dk-theme-card-square">
                                <img src="/assets/images/admin/top-course/top-course-4.png" alt="thumb">
                            </a>
                            <div>
                                <h6 class="text-heading font-semibold mb-1.5 line-clamp-1">
                                    <a href="#">Data Science Bootcamp</a>
                                </h6>
                                <p class="font-normal">Author - Michael Smith</p>
                            </div>
                        </td>
                        <td class="px-3.5 py-4">4.6</td>
                        <td class="px-3.5 py-4">50k</td>
                        <td class="px-3.5 py-4">$210.00</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Highest rated courses Section -->
        <!-- Start Popular categories Section -->
        <div class="col-span-full lg:col-span-6 3xl:col-span-4 card px-0 ">
            <div class="flex-center-between px-6 mb-7">
                <h6 class="card-title">Popular categories</h6>
                <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
            </div>
            <div class="max-h-[350px] smooth-scrollbar" data-scrollbar>
                <ul class="divide-y divide-gray-200 dark:divide-dark-border-three space-y-5 *:pt-5 overflow-hidden px-6">
                    <li class="flex-center-between first:pt-0">
                        <div class="flex items-center gap-2.5">
                            <div class="size-12 rounded-50 bg-primary-200 dark:bg-dark-icon flex-center flex-shrink-0 dk-theme-card-square">
                                <img src="/assets/images/icons/category/graphic-design.svg" alt="icon">
                            </div>
                            <div>
                                <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">
                                    <a href="#" class="truncate">Graphic Design</a>
                                </h6>
                                <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">90+ Courses</p>
                            </div>
                        </div>
                        <div class="ms-auto mr-5">
                            <div id="category-one"></div>
                        </div>
                        <a href="#" class="flex-center size-6 rounded-md bg-primary-200 dark:bg-dark-icon shrink-0 dk-theme-card-square">
                            <i class="ri-arrow-right-line text-gray-500 dark:text-dark-text text-[14px]"></i>
                        </a>
                    </li>
                    <li class="flex-center-between first:pt-0">
                        <div class="flex items-center gap-2.5">
                            <div class="size-12 rounded-50 bg-primary-200 dark:bg-dark-icon flex-center flex-shrink-0 dk-theme-card-square">
                                <img src="/assets/images/icons/category/ui-ux.svg" alt="icon">
                            </div>
                            <div>
                                <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">
                                    <a href="#" class="truncate">UI/UX Design</a>
                                </h6>
                                <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">90+ Courses</p>
                            </div>
                        </div>
                        <div class="ms-auto mr-5">
                            <div id="category-two"></div>
                        </div>
                        <a href="#" class="flex-center size-6 rounded-md bg-primary-200 dark:bg-dark-icon shrink-0 dk-theme-card-square">
                            <i class="ri-arrow-right-line text-gray-500 dark:text-dark-text text-[14px]"></i>
                        </a>
                    </li>
                    <li class="flex-center-between first:pt-0">
                        <div class="flex items-center gap-2.5">
                            <div class="size-12 rounded-50 bg-primary-200 dark:bg-dark-icon flex-center flex-shrink-0 dk-theme-card-square">
                                <img src="/assets/images/icons/category/web-dev.svg" alt="icon">
                            </div>
                            <div>
                                <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">
                                    <a href="#" class="truncate">Web Development</a>
                                </h6>
                                <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">90+ Courses</p>
                            </div>
                        </div>
                        <div class="ms-auto mr-5">
                            <div id="category-three"></div>
                        </div>
                        <a href="#" class="flex-center size-6 rounded-md bg-primary-200 dark:bg-dark-icon shrink-0 dk-theme-card-square">
                            <i class="ri-arrow-right-line text-gray-500 dark:text-dark-text text-[14px]"></i>
                        </a>
                    </li>
                    <li class="flex-center-between first:pt-0">
                        <div class="flex items-center gap-2.5">
                            <div class="size-12 rounded-50 bg-primary-200 dark:bg-dark-icon flex-center flex-shrink-0 dk-theme-card-square">
                                <img src="/assets/images/icons/category/digital-mar.svg" alt="icon">
                            </div>
                            <div>
                                <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">
                                    <a href="#" class="truncate">Digital Marketing</a>
                                </h6>
                                <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">90+ Courses</p>
                            </div>
                        </div>
                        <div class="ms-auto mr-5">
                            <div id="category-four"></div>
                        </div>
                        <a href="#" class="flex-center size-6 rounded-md bg-primary-200 dark:bg-dark-icon shrink-0 dk-theme-card-square">
                            <i class="ri-arrow-right-line text-gray-500 dark:text-dark-text text-[14px]"></i>
                        </a>
                    </li>
                    <li class="flex-center-between first:pt-0">
                        <div class="flex items-center gap-2.5">
                            <div class="size-12 rounded-50 bg-primary-200 dark:bg-dark-icon flex-center flex-shrink-0 dk-theme-card-square">
                                <img src="/assets/images/icons/category/bus-dev.svg" alt="icon">
                            </div>
                            <div>
                                <h6 class="leading-none text-heading font-semibold mb-2 line-clamp-1">
                                    <a href="#" class="truncate">Business Dev...</a>
                                </h6>
                                <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold">90+ Courses</p>
                            </div>
                        </div>
                        <div class="ms-auto mr-5">
                            <div id="category-five"></div>
                        </div>
                        <a href="#" class="flex-center size-6 rounded-md bg-primary-200 dark:bg-dark-icon shrink-0 dk-theme-card-square">
                            <i class="ri-arrow-right-line text-gray-500 dark:text-dark-text text-[14px]"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Popular categories Section -->
        <!-- Start Course Activity Chart Section -->
        <div class="col-span-full lg:col-span-6 3xl:col-span-4 card">
            <div class="flex-center-between">
                <h6 class="card-title">Course Activity</h6>
                <div class="leading-none shrink-0 text-xs text-gray-500 dark:text-dark-text dk-border-one rounded-full px-2 py-1 dk-theme-card-square">07 Days</div>
            </div>
            <div id="admin-learn-activity-chart" class="min-h-80"></div>
        </div>
        <!-- End Course Activity Chart Section -->
        <!-- Start Recent Support Tickets Section -->
        <div class="col-span-full lg:col-span-6 3xl:col-span-4 card px-0">
            <div class="flex-center-between px-6 mb-7">
                <h6 class="card-title">Recent Support Tickets</h6>
                <a href="#" class="btn b-solid btn-primary-solid btn-sm">See all</a>
            </div>
            <div class="min-h-15 max-h-[350px] smooth-scrollbar" data-scrollbar>
                <ul class="divide-y divide-gray-200 dark:divide-dark-border-three space-y-5 *:pt-5 overflow-hidden px-6">
                    <li class="flex items-center gap-2.5 first:pt-0">
                        <a href="#" class="size-12 rounded-50 flex-shrink-0 overflow-hidden dk-theme-card-square">
                            <img src="/assets/images/user/user-5.png" alt="user">
                        </a>
                        <div>
                            <h6 class="card-title text-[16px]">
                                <a href="#">Robert Fox</a>
                            </h6>
                            <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold line-clamp-1 mt-1">
                                Duis at consectetur lorem donec massa consectetur lorem donec...
                            </p>
                            <div class="leading-none text-xs text-gray-500 dark:text-dark-text-two mt-1.5">10 : 00 pm</div>
                        </div>
                    </li>
                    <li class="flex items-center gap-2.5 first:pt-0">
                        <a href="#" class="size-12 rounded-50 flex-shrink-0 overflow-hidden dk-theme-card-square">
                            <img src="/assets/images/user/user-6.png" alt="user">
                        </a>
                        <div>
                            <h6 class="card-title text-[16px]">
                                <a href="#">Emily Johnson</a>
                            </h6>
                            <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold line-clamp-1 mt-1">
                                Vivamus suscipit tortor eget felis porttitor volutpat...
                            </p>
                            <div class="leading-none text-xs text-gray-500 dark:text-dark-text-two mt-1.5">11 : 15 am</div>
                        </div>
                    </li>
                    <li class="flex items-center gap-2.5 first:pt-0">
                        <a href="#" class="size-12 rounded-50 flex-shrink-0 overflow-hidden dk-theme-card-square">
                            <img src="/assets/images/user/user-7.png" alt="user">
                        </a>
                        <div>
                            <h6 class="card-title text-[16px]">
                                <a href="#">Michael Brown</a>
                            </h6>
                            <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold line-clamp-1 mt-1">
                                Curabitur aliquet quam id dui posuere blandit...
                            </p>
                            <div class="leading-none text-xs text-gray-500 dark:text-dark-text-two mt-1.5">09 : 30 am</div>
                        </div>
                    </li>
                    <li class="flex items-center gap-2.5 first:pt-0">
                        <a href="#" class="size-12 rounded-50 flex-shrink-0 overflow-hidden dk-theme-card-square">
                            <img src="/assets/images/user/user-8.png" alt="user">
                        </a>
                        <div>
                            <h6 class="card-title text-[16px]">
                                <a href="#">Sarah Williams</a>
                            </h6>
                            <p class="leading-none text-xs text-gray-500 dark:text-dark-text-two font-semibold line-clamp-1 mt-1">
                                Nulla quis lorem ut libero malesuada feugiat...
                            </p>
                            <div class="leading-none text-xs text-gray-500 dark:text-dark-text-two mt-1.5">02 : 45 pm</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Recent Support Tickets Section -->
    </div>
@endsection
