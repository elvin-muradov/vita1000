@extends('index')

@section('title')
    - Blog details
@endsection

@section('content')
    @include('partials.header')

    <section class="page-section">
        <div class="container">
            <p class="page-subtitle my-3">Blog, Sentyabr 10, 2022</p>
            <h1 class="page-title">Vita1000 Mineral Sular şirkəti olaraq biz sizləri düşünür və
                sizlərə yüksək keyfiyyətli xidmətimizlə qürur duyuruq.</h1>
            <img src="{{ asset('assets/img/blog-details.jpg') }}" class="blog-img w-100 my-8" alt="Blog Details" />
            <p class="blog-body-text">
                I was on a flight from Lisbon to Paris recently.

                Sitting on an airplane is one of those moments where I eventually get bored enough to start exploring my
                iPhone settings.

                While I was reorganizing my phone, I had a sudden realization: Settings are typically seen as the result of
                design failure.

                The thinking goes that as designers, our goal is to create product experiences that don’t require any
                adjustments by the user.

                Consequently, offering customization options is interpreted as a failure to make firm product decisions.I
                think there is a misunderstanding about what settings really are.

                Users love settingsThere certainly are moments where I find myself on the settings page of a product because
                it failed to deliver the experience I really wanted.

                But not all settings are created equal.There’s a difference between product settings that a product needs to
                get right by default and preferences that designers deliberately shouldn’t have a strong opinion on.
            </p>
            <img src="{{ asset('assets/img/blog-details-2.jpg') }}" class="blog-img w-100 my-8" alt="Blog Details" />
        </div>
    </section>
@endsection
