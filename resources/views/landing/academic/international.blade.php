@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Program Studi Hubungan Internasional - '. env('APP_NAME'))
@section('meta_description', 'Program Studi Hubungan Internasional - '. env('APP_NAME'))
@section('meta_keywords', 'hubungan internasional upu, hubungan internasional potensi utama, visi misi hubungan internasional upu, berita hubungan internasional potensi utama')
@section('canonical', env('APP_URL').'/program-studi/hubungan-internasional')
@section('json-ld')
<script type="application/ld+json">{"@context": "https://schema.org","@type": "EducationalOrganization","name": "Hubungan Internasional","url": "{{env('APP_URL')}}/program-studi/hubungan-internasional","address": {"@type": "PostalAddress","addressLocality": "Medan","addressRegion": "Sumatera Utara","postalCode": "20241","streetAddress": "Jl. K.L Yos Sudarso, Gg. Famili No.247, Tj. Mulia, Kec. Medan Deli" },"department": {"@type": "EducationalOrganization","name": "{{env('APP_NAME')}}","url": "{{env('APP_URL')}}"}}</script>
@endsection
@section('content')

   @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix"
        style="background-image: url({{ asset('landing/assets/img/prodi-img/hubungan-internasional-header.jpg') }})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                     <p class="tag"><span>{{__('partials/navbar.navbar.academy')}}</span></p>
                     <p class="post-title">{{__('partials/navbar.navbar.international')}}</p>
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
                        <h1 class="mb-30">{{__('academy/international.international.purpose.title')}}</h1>
                        <h4 class="mb-30">{{__('academy/international.international.purpose.subtitle_vision')}}</h4>
                        <p class="mb-30">{{__('academy/international.international.purpose.description_vision')}}</p>

                        <h4 class="mb-30">{{__('academy/international.international.purpose.subtitle_mission')}}</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                           @foreach (trans('academy/international.international.purpose.description_mission') as $key => $mission)
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
