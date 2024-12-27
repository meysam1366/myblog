@if(count($errors) > 0)
    <ul class="bg-red-500">
        @foreach($errors->all() as $error)
            <li class="text-white">{{ $error }}</li>
        @endforeach
    </ul>
@endif
