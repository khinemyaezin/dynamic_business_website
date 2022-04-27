@extends('layouts.app')
@section('style')
    <style>
        .header.header-transparent {
            background-color: rgba(22, 28, 45, 0.9);
        }
    </style>
@endsection
@section('content')
    <div style="position: relative">
        <div class="jarallax bg-gradient pt-5 pb-6 pt-md-7">
            <img class="jarallax-img" src="{{ asset('storage/essential/contact_us_bgcover.jpg') }}">
            <span class="position-absolute top-0 start-0 w-100 h-100"
                style="background-image: linear-gradient(to right, #1b2a4e 0%, #1b2a4e 30%, #1b2a4e 100%); opacity:0.8"></span>
                <x-framework.wave />
            <div class="container position-relative pt-6">
                <div class="row justify-content-center">
                    <div class="col">
                        <h1 class="text-light">About Us</h1>
                        <p class="text-light">Get in touch with by completing the below form or call us now</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="headlines mn-vh-100"></div>
   
@endsection
@push('scripts')
    <script type="text/javascript">
        let groups = {!! json_encode($group, JSON_HEX_TAG) !!};
        document.addEventListener("DOMContentLoaded", function(event) {
            for (let g of groups) {
                $('.headlines').append(ThemeBuilder.export(new Theme(g, g.type, g.group_theme, g.articles)))
            }
        });
    </script>
@endpush
