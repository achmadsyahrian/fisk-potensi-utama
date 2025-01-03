@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Program Studi Pendidikan Bahasa Inggris - ' . env('APP_NAME'))
@section('meta_description', 'Program Studi Pendidikan Bahasa Inggris - ' . env('APP_NAME'))
@section('meta_keywords', 'ps upu, pendidikan bahasa inggris potensi utama, visi misi pendidikan bahasa inggris upu, berita pendidikan bahasa inggris potensi utama')
@section('canonical', env('APP_URL') . '/program-studi/pendidikan-bahasa-inggris')
@section('json-ld')
<script type="application/ld+json">{"@context": "https://schema.org","@type": "EducationalOrganization","name": "Pendidikan Bahasa Inggris","url": "{{env('APP_URL')}}/program-studi/pendidikan-bahasa-inggris","address": {"@type": "PostalAddress","addressLocality": "Medan","addressRegion": "Sumatera Utara","postalCode": "20241","streetAddress": "Jl. K.L Yos Sudarso, Gg. Famili No.247, Tj. Mulia, Kec. Medan Deli" },"department": {"@type": "EducationalOrganization","name": "{{env('APP_NAME')}}","url": "{{env('APP_URL')}}"}}</script>
@endsection
@section('content')

    @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix"
        style="background-image: url({{ asset('landing/assets/img/prodi-img/pbi-header.png') }})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>{{__('partials/navbar.navbar.academy')}}</span></p>
                        <p class="post-title">{{__('partials/navbar.navbar.english')}}</p>
                        {{-- <div class="d-flex align-items-center">
                            <span class="post-date mr-30">June 20, 2018</span>
                            <span class="post-date">By Michael Smith</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Post Details Title Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">{{__('academy/english.english.purpose.title')}}</h1>
                        <h4 class="mb-30">{{__('academy/english.english.purpose.subtitle_vision')}}</h4>
                        <p class="mb-30">{{__('academy/english.english.purpose.description_vision')}}</p>

                        <h4 class="mb-30">{{__('academy/english.english.purpose.subtitle_mission')}}</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                           @foreach (trans('academy/english.english.purpose.description_mission') as $key => $mission)
                              <tr>
                                 <td style="width: 3%; vertical-align: top;">{{ $key }}</td>
                                 <td>{{ $mission }}</td>
                              </tr>
                           @endforeach
                        </table>

                        <h4 class="mb-30">{{__('academy/english.english.purpose.subtitle_purpose')}}</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                           @foreach (trans('academy/english.english.purpose.description_purpose') as $key => $mission)
                              <tr>
                                 <td style="width: 3%; vertical-align: top;">{{ $key }}</td>
                                 <td>{{ $mission }}</td>
                              </tr>
                           @endforeach
                        </table>
                    </div>

                    {{-- Berita Prodi --}}
                    <x-academic-news :latestPosts="$latestPosts"></x-academic-news>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

@endsection
