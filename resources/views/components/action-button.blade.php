@props(['href', 'color' => 'emerald'])

<a href="{{ $href }}" 
   class="inline-block px-4 py-1.5 rounded-md text-sm font-medium transition bg-{{ $color }}-50 text-{{ $color }}-700 hover:bg-{{ $color }}-600 hover:text-white border border-{{ $color }}-200">
    {{ $slot }}
</a>