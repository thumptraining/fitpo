@if ($errors->any())
    
    <div {{ $attributes }}>
        <div class="alert flex rounded-lg bg-error px-4 py-4 text-white sm:px-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </div>
    
@endif
