@extends('panel.layouts.master')

@section('styles')
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/select/select2.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/summernote.min.css">
@endsection

@section('content')

    <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        @include('panel.errors.errors')
        <div class="grid grid-cols-12 gap-x-4">
            <div class="col-span-full lg:col-span-7 card p-4 lg:p-6">
                <h6 class="card-title">Create New Category</h6>
                <div class="mt-7">
                    <div>
                        <label for="parent_id" class="form-label">Category Parent *</label>
                        <select type="text" id="parent_id" name="parent_id" class="form-input" autocomplete="off">
                            <option value="">Select Language</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="title" class="form-label">Title *</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Title" class="form-input" autocomplete="off" required>
                    </div>
                    <div>
                        <label for="language_id" class="form-label">Language *</label>
                        <select type="text" id="language_id" name="language_id" class="form-input" autocomplete="off" required>
                            <option value="0">Select Language</option>
                            @foreach($languages as $language)
                                <option value="{{ $language->id }}">{{ $language->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center gap-2 mt-5">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" checked value="1" class="appearance-none peer" name="status">
                            <span class="switcher switcher-primary-solid"></span>
                        </label>
                        <div class="text-gray-900 font-medium">Activate</div>
                    </div>
                </div>
                <button type="submit" class="btn b-solid btn-primary-solid btn-lg w-max mt-5">Save</button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="/assets/js/vendor/select/select2.min.js"></script>
    <script src="/assets/js/vendor/flowbite.min.js"></script>
    <script src="/assets/js/vendor/summernote.min.js"></script>
@endsection
