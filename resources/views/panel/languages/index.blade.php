@extends('panel.layouts.master')

@section('styles')
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/prism.min.css">
@endsection

@section('content')
    <div class="card">
        <h2 class="card-title">Languages</h2>
    </div>
    <div class="grid grid-cols-12">
        <!-- INITIALIZE CSS CLASS -->
        <div class="hidden">
            <div class="self-center md:col-span-6 md:place-self-end lg:col-span-full inline-block w-auto ml-2 dark:bg-dark-card-two dark:text-white align-middle"></div>
            <div class="hover:bg-primary-500 hover:text-white dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"></div>
            <div class="text-slate-300 border-slate-300 dark:!bg-gray-400 dark:text-slate-300 bg-slate-200/50 first:rounded-l-lg last:rounded-r-lg"></div>
            <div class=" dark:bg-gray-700 dark:!rounded-none transition-all duration-150 ease-linear [&.selected]:bg-[#F2F4F9] dark:[&.selected]:bg-dark-icon"></div>
            <div class="group-[.bordered]:rounded-none group-[.bordered]:border group-[.bordered]:border-gray-200 dark:group-[.bordered]:border-dark-border"></div>
        </div>
        <!-- INITIALIZE CSS CLASS -->
        <div class="tablejs sr-only size-0"></div>
        <!-- BASIC DATA TABLE -->
        <div class="col-span-full">
            <div class="card p-0">
                <div class="flex-center-between p-6 pb-4 border-b border-gray-200 dark:border-dark-border">
                    <h3 class="text-lg card-title leading-none">Languages Table</h3>
                    <button type="button" class="btn b-light btn-primary-light btn-sm prism-toggle !py-2.5 focus:bg-primary-500 focus:text-white dark:!bg-dark-icon">
                        <span class="shrink-0">View Code</span>
                        <i class="ri-code-line text-inherit text-[15px]"></i>
                    </button>
                </div>
                <div class="p-6 space-y-4">
                    <table id="basicDataTable">
                        <thead>
                        <tr>
                            <th class="bg-[#B2E8D9]">ID</th>
                            <th class="bg-[#B2E8D9]">Name</th>
                            <th class="bg-[#B2E8D9]">Title</th>
                            <th class="bg-[#B2E8D9]">Lang</th>
                            <th class="bg-[#B2E8D9]">Status</th>
                            <th class="bg-[#B2E8D9]">Start date</th>
                            <th class="bg-[#B2E8D9]">Operator</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-dark-border">
                            @foreach($languages as $language)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $language->name }}</td>
                                    <td>{{ $language->title }}</td>
                                    <td>{{ $language->lang }}</td>
                                    <td>{{ $language->status }}</td>
                                    <td>{{ $language->created_at }}</td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="{{ route('admin.languages.edit', $language->id) }}" class="btn-icon btn-primary-icon-light size-7">
                                                <i class="ri-edit-2-line text-inherit text-[13px]"></i>
                                            </a>
                                            <form action="{{ route('admin.languages.destroy', $language->id) }}" method="post" onclick="return confirm('Are you sure?')" class="cursor-pointer btn-icon btn-danger-icon-light size-7">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">
                                                    <i class="ri-delete-bin-line text-inherit text-[13px]"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Prism Code -->
                <div class="p-6 hidden">
                        <pre>
                            <code class="language-markup">
                                &lt;p>Sorry we can't show the huge data table&lt;/p>
                            </code>
                        </pre>
                </div>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/assets/js/vendor/prism.min.js"></script>
    <!-- datatable -->
    <script src="/assets/js/vendor/datatables/data-tables.min.js"></script>
    <script src="/assets/js/vendor/datatables/data-tables.tailwindcss.min.js"></script>
    <script src="/assets/js/vendor/datatables/datatables.buttons.min.js"></script>
    <script src="/assets/js/vendor/datatables/datatables.init.js"></script>
    <!-- datatable -->
    <script src="/assets/js/component/prism-custom.js"></script>
@endsection
