@extends('panel.layouts.master')

@section('styles')
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/select/select2.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/summernote.min.css">
@endsection

@section('content')

    <form action="{{ route('admin.languages.update', $language->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        @include('panel.errors.errors')
        <div class="grid grid-cols-12 gap-x-4">
            <div class="col-span-full lg:col-span-7 card p-4 lg:p-6">
                <h6 class="card-title">Edit Language</h6>
                <div class="mt-7">
                    <div>
                        <label for="title" class="form-label">Title *</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $language->title) }}" placeholder="Title" class="form-input" autocomplete="off" required>
                    </div>
                    <div>
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $language->name) }}" placeholder="Name" class="form-input" autocomplete="off" required>
                    </div>
                    <div>
                        <label for="lang" class="form-label">Lang *</label>
                        <input type="text" id="lang" name="lang" value="{{ old('lang', $language->lang) }}" placeholder="Lang" class="form-input" autocomplete="off" required>
                    </div>
                    <div class="flex items-center gap-2 mt-5">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" {{ $language->id == 1 ? 'checked' : '' }} value="1" class="appearance-none peer" name="status">
                            <span class="switcher switcher-primary-solid"></span>
                        </label>
                        <div class="text-gray-900 font-medium">Activate</div>
                    </div>
                </div>
            </div>
            <div class="col-span-full lg:col-span-5 card p-4 lg:p-6">
                <h6 class="card-title">Add Blog Icon</h6>
                <div class="mt-7 pt-0.5">
                    <p class="text-xs text-gray-500 dark:text-dark-text-two leading-none font-semibold mb-3">Icon (200x200)</p>
                    <label for="icon" class="file-container ac-bg text-xs leading-none font-semibold mb-3 cursor-pointer size-[200px] flex flex-col items-center justify-center gap-2.5 border border-dashed border-gray-900 dark:border-dark-border-four rounded-10 dk-theme-card-square">
                        <input type="file" id="icon" name="icon" hidden class="img-src peer/file">
                        <span class="flex-center flex-col peer-[.uploaded]/file:hidden">
                            <span class="size-10 lg:size-15 flex-center bg-primary-200 dark:bg-dark-icon rounded-50">
                                <img src="{{ $language->icon != null ? $language->icon : '/assets/images/icons/upload-file.svg' }}" alt="icon" class="dark:brightness-200 dark:contrast-100 w-1/2 lg:w-auto">
                            </span>
                            <span class="mt-2 text-gray-500 dark:text-dark-text">Choose file</span>
                        </span>
                    </label>
                </div>
                <button type="submit" class="btn b-solid btn-primary-solid btn-lg w-max">Save</button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="/assets/js/vendor/select/select2.min.js"></script>
    <script src="/assets/js/vendor/flowbite.min.js"></script>
    <script src="/assets/js/vendor/summernote.min.js"></script>
@endsection
