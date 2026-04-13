@extends('layouts.app')
@section('title', 'Home')
@section ('content')
    <div class="home-bg">

        <livewire: home-page />
        @import('partials.side-bar')
        @import('partials.side-bar2')
        @import('partials.preloader')
        @import('partials.progress-area')
        <div id="anywhere-home" class="">
        </div>

        <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i>
        </div>



        <div class="rtl-ltr-switcher-btn ">
            <span class="rtl">View RTL</span>
            <span class="ltr show">View LTR</span>
        </div>

    </div>
@endsection
