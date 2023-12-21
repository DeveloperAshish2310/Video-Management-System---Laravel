<!-- Swiper Slider Component -->
<div {{ $attributes->merge(['class' => 'swiper-container']) }} style="overflow:hidden; position:relative">
    <div class="swiper-wrapper">
        {{ $slot }}
    </div>
    <!-- Add Pagination -->
    {{-- <div class="swiper-pagination"></div> --}}
    <!-- Add Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

