@props(['errors'])

@if ($errors->any())
    <div  class="bg-red-100 border border-red-400 text-red-700 mb-3 px-4 py-3 rounded relative" role="alert" {{ $attributes }}>
        <div class="font-medium text-red-800">
            {{ __('Ops! Algo deu errado.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
