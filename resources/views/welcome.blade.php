<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ $data[0]->title[app()->getLocale() . '_title'] }}</title>
    <meta name="title" content="{{ $data[0]->title[app()->getLocale() . '_title'] }}">
    <meta name="description" content="{!! App\Helper::strip_tags_with_whitespace($data[0]->description[app()->getLocale() . '_description']) !!}">
    <meta name="author" content="Globalmart Group">
    <meta name="keywords" content="{{ $data[0]->keywords[app()->getLocale() . '_keywords'] }}">
    <meta name="subject" content="Globalmart Group">
    <meta name="copyright" content="Globalmart Group">
    <meta name="language" content="AZ, EN">
    <meta name="robots" content="index,follow" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:title" content="{{ $data[0]->title[app()->getLocale() . '_title'] }}">
    <meta property="og:description" content="{!! App\Helper::strip_tags_with_whitespace($data[0]->description[app()->getLocale() . '_description']) !!}">
    <meta property="og:image" content="{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[0]->logo }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ env('APP_URL') }}">
    <meta property="twitter:title" content="{{ $data[0]->title[app()->getLocale() . '_title'] }}">
    <meta property="twitter:description" content="{!! App\Helper::strip_tags_with_whitespace($data[0]->description[app()->getLocale() . '_description']) !!}">
    <meta property="twitter:image" content="{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[0]->logo }}">

    <link href="{{asset("assets/fonts/montserrat.css")}}"
        rel="stylesheet">
    <link href="assets/css/style-v=1.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[0]->favicon }}" />
    <style>
        @for ($i=1;$i<count($data);$i++)
            .{{$data[$i]->slugs[app()->getLocale().'_slug']}}-bg {
                background: linear-gradient(358deg, {{$data[$i]->colors['color1']}}, {{$data[$i]->colors['color2']}}); }
        @endfor
    </style>
</head>

<body>

    <div class="pages" id="pages">
        <div class="cursor"></div>
        <div id="fullpage">
            <section
                class="vertical-scrolling section {{ $data[0]->slugs[app()->getLocale() . '_slug'] }}"
                id="hero">
                <div class="container">
                    <div class="page dark">
                        <div class="page__content">
                            <div class="col-row">
                                <div class="col-7 md-auto">
                                    <div class="content text-center">

                                        <img src="{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[0]->logo }}"
                                            alt="{{ isset($data[0]->slogan[app()->getLocale() . '_slogan']) }}"
                                            class="content--logo" >
                                        <p class="content--text" >
                                            {!! $data[0]->description[app()->getLocale() . '_description'] !!}
                                        </p>
                                    </div>
                                </div>

                                <div class="col-7 md-auto text-center" >
                                    <ul class="content__nav">
                                        @for ($i = 1; $i < count($data); $i++)
                                            @if((new \Jenssegers\Agent\Agent())->isDesktop())
                                                <li class="content__nav--item"><a class="content--link"
                                                        href="#{{ $data[$i]->slugs[app()->getLocale() . '_slug'] }}">{{ $data[$i]->title[app()->getLocale() . '_title'] }}</a>
                                                </li>
                                            @elseif ((new \Jenssegers\Agent\Agent())->isMobile())
                                                <li class="content__nav--item"><a class="content--link"
                                                            href="#{{ $data[$i]->slugs[app()->getLocale() . '_slug'] }}">{!! $data[$i]->title[app()->getLocale() . '_mobile_title'] !!}</a>
                                                </li>
                                            @endif
                                        @endfor

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="page__footer">
                            <div class="footer">
                                <div class="footer__lang">
                                    @if (app()->getLocale() == 'az')
                                        <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"
                                            class="footer__lang--link" style="margin-right:10px">English</a>
                                            <a href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}"
                                            class="footer__lang--link">Russian</a>
                                    @elseif(app()->getLocale() == 'en')
                                        <a href="{{ LaravelLocalization::getLocalizedURL('az', null, [], true) }}"
                                            class="footer__lang--link" style="margin-right:10px">Azərbaycan</a>
                                            <a href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}"
                                            class="footer__lang--link">Russian</a>
                                    @elseif(app()->getLocale() == 'ru')
                                        <a href="{{ LaravelLocalization::getLocalizedURL('az', null, [], true) }}"
                                            class="footer__lang--link" style="margin-right:10px">Azərbaycan</a>
                                            <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"
                                            class="footer__lang--link">English</a>
                                    @endif
                                </div>
                                <div class="footer__next" style="display:none">


                                </div>
                                <div class="footer__social">
                                    @if ($data[0]->social_media['instagram_url'] !=null && $data[0]->social_media['instagram_url'] !="" && $data[0]->social_media['instagram_url'] !=" ")
                                        <div class="footer__social--item">
                                            <a href="{{ $data[0]->social_media['instagram_url'] }}"
                                                class="footer__social--link" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                                                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                        <circle cx="17.5" cy="17.5" r="17.5" stroke="currentColor" />
                                                        <g fill="currentColor" transform="translate(10 10)">
                                                            <path fill-rule="nonzero"
                                                                d="M10.531 0H4.47A4.474 4.474 0 0 0 0 4.469v6.062A4.474 4.474 0 0 0 4.469 15h6.062A4.474 4.474 0 0 0 15 10.531V4.47A4.474 4.474 0 0 0 10.531 0zm2.96 10.531a2.96 2.96 0 0 1-2.96 2.96H4.47a2.96 2.96 0 0 1-2.96-2.96V4.47a2.96 2.96 0 0 1 2.96-2.96h6.062a2.96 2.96 0 0 1 2.96 2.96v6.062z" />
                                                            <path fill-rule="nonzero"
                                                                d="M7.5 3.673A3.83 3.83 0 0 0 3.673 7.5 3.83 3.83 0 0 0 7.5 11.327 3.83 3.83 0 0 0 11.327 7.5 3.83 3.83 0 0 0 7.5 3.673zm0 6.165a2.338 2.338 0 1 1 0-4.676 2.338 2.338 0 0 1 0 4.676z" />
                                                            <circle cx="11.327" cy="3.673" r="1" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                    @if ($data[0]->social_media['facebook_url'] !=null && $data[0]->social_media['facebook_url'] !="" && $data[0]->social_media['facebook_url'] !=" ")
                                        <div class="footer__social--item">
                                            <a href="{{ $data[0]->social_media['facebook_url'] }}"
                                                class="footer__social--link" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                                                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                        <circle cx="17.5" cy="17.5" r="17.5" stroke="currentColor" />
                                                        <path fill="currentColor"
                                                            d="M20.746 10.003L18.818 10c-2.165 0-3.565 1.436-3.565 3.658v1.687h-1.938a.303.303 0 0 0-.303.303v2.444c0 .167.136.303.303.303h1.938v6.166c0 .168.136.303.303.303h2.529a.303.303 0 0 0 .303-.303v-6.166h2.266a.303.303 0 0 0 .303-.303l.001-2.444a.304.304 0 0 0-.303-.303h-2.267v-1.43c0-.687.164-1.036 1.059-1.036h1.298a.303.303 0 0 0 .303-.304v-2.269a.303.303 0 0 0-.302-.303z" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                    @if ($data[0]->social_media['linkedin_url'] !=null && $data[0]->social_media['linkedin_url'] !="" && $data[0]->social_media['linkedin_url'] !=" ")
                                        <div class="footer__social--item">
                                            <a href="{{ $data[0]->social_media['linkedin_url'] }}"
                                                class="footer__social--link" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                                                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                        <circle cx="17.5" cy="17.5" r="17.5" stroke="currentColor" />
                                                        <g fill="currentColor">
                                                            <path
                                                                d="M10.189 14.889h3.289v10.105h-3.289zM24.272 15.812c-.69-.771-1.605-1.157-2.74-1.157-.42 0-.8.052-1.142.158a2.568 2.568 0 0 0-.867.443c-.236.19-.424.367-.563.53a4.372 4.372 0 0 0-.389.54v-1.437h-3.279l.01.49c.007.326.01 1.332.01 3.018 0 1.686-.006 3.885-.02 6.597h3.28v-5.639c0-.347.036-.622.109-.826.14-.347.35-.637.633-.872.282-.234.633-.352 1.051-.352.572 0 .992.203 1.261.607.27.405.404.964.404 1.677v5.405h3.279v-5.792c0-1.489-.346-2.619-1.037-3.39zM11.854 10.025c-.552 0-.998.165-1.34.495-.343.33-.514.746-.514 1.249 0 .496.166.91.498 1.244.332.333.771.5 1.316.5h.02c.558 0 1.008-.167 1.35-.5.342-.333.51-.748.504-1.244-.007-.503-.177-.92-.509-1.25-.332-.329-.774-.494-1.325-.494z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                    @if ($data[0]->social_media['youtube_url'] !=null && $data[0]->social_media['youtube_url'] !="" && $data[0]->social_media['youtube_url'] !=" ")
                                        <div class="footer__social--item">
                                            <a href="{{ $data[0]->social_media['youtube_url'] }}"
                                                class="footer__social--link" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                                                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                        <circle cx="17.5" cy="17.5" r="17.5" stroke="currentColor" />
                                                        <path fill="currentColor" fill-rule="nonzero"
                                                            d="M27.894 12.368a2.673 2.673 0 0 0-1.88-1.88c-1.67-.457-8.348-.457-8.348-.457s-6.677 0-8.346.44a2.727 2.727 0 0 0-1.88 1.897C7 14.038 7 17.499 7 17.499s0 3.48.44 5.131a2.673 2.673 0 0 0 1.88 1.88c1.687.457 8.347.457 8.347.457s6.677 0 8.347-.44a2.673 2.673 0 0 0 1.88-1.88c.44-1.669.44-5.13.44-5.13s.017-3.48-.44-5.15zm-12.354 8.33V14.3l5.553 3.198-5.553 3.198z" />
                                                     </g>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                    @if ($data[0]->social_media['email'] !=null && $data[0]->social_media['email'] !="" && $data[0]->social_media['email'] !=" ")
                                        <div class="footer__social--item">
                                            <a href="mailto:{{ $data[0]->social_media['email'] }}"
                                                class="footer__social--link" target="_blank" style="position: relative;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                                                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                        <circle cx="20" cy="20" r="20" stroke="currentColor" />
                                                        <svg
                                                        x="8px" y="8px"
                                                        xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 30 30" width="30px" fill="currentcolor">
                                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                                            <path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/>
                                                        </svg>
                                                     </g>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                    @if ($data[0]->social_media['gmaps_url'] !=null && $data[0]->social_media['gmaps_url'] !="" && $data[0]->social_media['gmaps_url'] !=" ")
                                        <div class="footer__social--item">
                                            <a href="{{ $data[0]->social_media['gmaps_url'] }}"
                                                class="footer__social--link" target="_blank" style="position: relative;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                                                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                        <circle cx="21" cy="21" r="21" stroke="currentColor" />
                                                        <svg
                                                        x="9px" y="9px"
                                                        xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 30 30" width="30px" fill="currentcolor">
                                                            <path
                                                                fill="currentColor" fill-rule="nonzero"
                                                                d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/>
                                                        </svg>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                    @if ($data[0]->social_media['phone'] !=null && $data[0]->social_media['phone'] !="" && $data[0]->social_media['phone'] !=" ")
                                        <div class="footer__social--item">
                                            <a href="tel:{{ $data[0]->social_media['phone'] }}"
                                                class="footer__social--link" target="_blank" style="position: relative;">
                                                <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 22 22"
                                                fill="none"
                                                stroke="currentColor" stroke-width="0.5"
                                                >
                                                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                        <circle cx="10" cy="10" r="10" stroke="currentColor" />
                                                        <svg
                                                        x="4px" y="4px"
                                                        xmlns="http://www.w3.org/2000/svg" height="13px" viewBox="0 0 25 25" width="13px" fill="currentcolor">
                                                            <path
                                                            d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                            </path>
                                                        </svg>
                                                        <circle cx="10" cy="10" r="10" stroke="currentColor" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @for ($i = 1; $i < count($data); $i++)
                <!-- Sections -->
                <section
                    class="vertical-scrolling section {{ $data[$i]->slugs[app()->getLocale() . '_slug'] }}"
                    >
                    <div class="container">
                        <div class="page">
                            <div class="page__header">
                                <div class="header">
                                    @if((new \Jenssegers\Agent\Agent())->isDesktop())

                                        <img src="{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[$i]->logo }}"
                                            alt="{{ $data[$i]->title[app()->getLocale() . '_title'] }}"
                                            class="header--logo">

                                    @endif



                                    @if((new \Jenssegers\Agent\Agent())->isMobile())

                                        <img src="{{ env('APP_ADMIN_URL') . '/uploads/' . 'settings/' . $data[$i]->logo_mobile }}"
                                                alt="{{ $data[$i]->title[app()->getLocale() . '_title'] }}"
                                                class="header--logo_mobile">

                                    @endif

                                    <a href="#{{$data[0]->slugs[app()->getLocale() . '_slug']}}" class="header--home">@lang('additional.home')</a>
                                </div>
                            </div>
                            <div class="page__content">
                                <div class="col-row">
                                    <div class="col-8">
                                        <div class="content">
                                            <h2 class="content--heading">
                                                {{ $data[$i]->slogan[app()->getLocale() . '_slogan'] }}</h2>
                                            <div class="col-row">
                                                <div class="col-10">
                                                    <p class="content--text">
                                                        {{ $data[$i]->description[app()->getLocale() . '_description'] }}
                                                    </p>
                                                    <div
                                                        style="width:100%; height:40px;  margin-bottom 3rem !important">
                                                    </div>
                                                    @if ($data[$i]->social_media['website_url'] != null && $data[$i]->social_media['website_url'] != "" && $data[$i]->social_media['website_url'] != " ")
                                                        <a target="_blank"
                                                            href="{{ $data[$i]->social_media['website_url'] }}"
                                                            class="content--visit">@lang('additional.visit_website')</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page__footer">
                                <div class="footer">
                                    <div class="footer__lang">
                                        @if (app()->getLocale() == 'az')
                                        <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"
                                            class="footer__lang--link" style="margin-right:10px">English</a>
                                            <a href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}"
                                            class="footer__lang--link">Russian</a>
                                    @elseif(app()->getLocale() == 'en')
                                        <a href="{{ LaravelLocalization::getLocalizedURL('az', null, [], true) }}"
                                            class="footer__lang--link" style="margin-right:10px">Azərbaycan</a>
                                            <a href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}"
                                            class="footer__lang--link">Russian</a>
                                    @elseif(app()->getLocale() == 'ru')
                                        <a href="{{ LaravelLocalization::getLocalizedURL('az', null, [], true) }}"
                                            class="footer__lang--link" style="margin-right:10px">Azərbaycan</a>
                                            <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"
                                            class="footer__lang--link">English</a>
                                    @endif
                                    </div>

                                        <div class="footer__next">
                                    @if($i!=count($data)-1)

                                            <a href="#{{ isset($data[$i+1]) ? $data[$i+1]->slugs[app()->getLocale() . '_slug'] : $data[$i]->slugs[app()->getLocale() . '_slug'] }}"
                                                class="footer__next--link">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 25"
                                                    class="scroll">
                                                    <g fill="none" fill-rule="evenodd" stroke="currentColor">
                                                        <rect width="15" height="23.571" x=".5" y=".5" rx="7.5" />
                                                        <path stroke-linecap="round" d="M8 4.942v4.942" />
                                                    </g>
                                                </svg>
                                                <span>
                                                    {{ isset($data[$i+1]) ? $data[$i+1]->title[app()->getLocale() . '_title'] : $data[0]->title[app()->getLocale() . '_title'] }}
                                                </span>
                                            </a>
                                            @else
                                    <a class="footer__next--link" href="https://globalmart.az" target="_blank">Developed By Globalmart Group</a>

                                    @endif

                                        </div>

                                    <div class="footer__social">
                                        @if ($data[$i]->social_media['instagram_url'] !=null && $data[$i]->social_media['instagram_url'] !="" && $data[$i]->social_media['instagram_url'] !=" ")
                                            <div class="footer__social--item">
                                                <a href="{{ $data[$i]->social_media['instagram_url'] }}"
                                                    class="footer__social--link" target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                                                        <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                            <circle cx="17.5" cy="17.5" r="17.5"
                                                                stroke="currentColor" />
                                                            <g fill="currentColor" transform="translate(10 10)">
                                                                <path fill-rule="nonzero"
                                                                    d="M10.531 0H4.47A4.474 4.474 0 0 0 0 4.469v6.062A4.474 4.474 0 0 0 4.469 15h6.062A4.474 4.474 0 0 0 15 10.531V4.47A4.474 4.474 0 0 0 10.531 0zm2.96 10.531a2.96 2.96 0 0 1-2.96 2.96H4.47a2.96 2.96 0 0 1-2.96-2.96V4.47a2.96 2.96 0 0 1 2.96-2.96h6.062a2.96 2.96 0 0 1 2.96 2.96v6.062z" />
                                                                <path fill-rule="nonzero"
                                                                    d="M7.5 3.673A3.83 3.83 0 0 0 3.673 7.5 3.83 3.83 0 0 0 7.5 11.327 3.83 3.83 0 0 0 11.327 7.5 3.83 3.83 0 0 0 7.5 3.673zm0 6.165a2.338 2.338 0 1 1 0-4.676 2.338 2.338 0 0 1 0 4.676z" />
                                                                <circle cx="11.327" cy="3.673" r="1" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($data[$i]->social_media['facebook_url'] !=null && $data[$i]->social_media['facebook_url'] !="" && $data[$i]->social_media['facebook_url'] !=" ")
                                            <div class="footer__social--item">
                                                <a href="{{ $data[$i]->social_media['facebook_url'] }}"
                                                    class="footer__social--link" target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                                                        <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                            <circle cx="17.5" cy="17.5" r="17.5"
                                                                stroke="currentColor" />
                                                            <path fill="currentColor"
                                                                d="M20.746 10.003L18.818 10c-2.165 0-3.565 1.436-3.565 3.658v1.687h-1.938a.303.303 0 0 0-.303.303v2.444c0 .167.136.303.303.303h1.938v6.166c0 .168.136.303.303.303h2.529a.303.303 0 0 0 .303-.303v-6.166h2.266a.303.303 0 0 0 .303-.303l.001-2.444a.304.304 0 0 0-.303-.303h-2.267v-1.43c0-.687.164-1.036 1.059-1.036h1.298a.303.303 0 0 0 .303-.304v-2.269a.303.303 0 0 0-.302-.303z" />
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($data[$i]->social_media['linkedin_url'] !=null && $data[$i]->social_media['linkedin_url'] !="" && $data[$i]->social_media['linkedin_url'] !=" ")
                                            <div class="footer__social--item">
                                                <a href="{{ $data[$i]->social_media['linkedin_url'] }}"
                                                    class="footer__social--link" target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                                                        <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                            <circle cx="17.5" cy="17.5" r="17.5"
                                                                stroke="currentColor" />
                                                            <g fill="currentColor">
                                                                <path
                                                                    d="M10.189 14.889h3.289v10.105h-3.289zM24.272 15.812c-.69-.771-1.605-1.157-2.74-1.157-.42 0-.8.052-1.142.158a2.568 2.568 0 0 0-.867.443c-.236.19-.424.367-.563.53a4.372 4.372 0 0 0-.389.54v-1.437h-3.279l.01.49c.007.326.01 1.332.01 3.018 0 1.686-.006 3.885-.02 6.597h3.28v-5.639c0-.347.036-.622.109-.826.14-.347.35-.637.633-.872.282-.234.633-.352 1.051-.352.572 0 .992.203 1.261.607.27.405.404.964.404 1.677v5.405h3.279v-5.792c0-1.489-.346-2.619-1.037-3.39zM11.854 10.025c-.552 0-.998.165-1.34.495-.343.33-.514.746-.514 1.249 0 .496.166.91.498 1.244.332.333.771.5 1.316.5h.02c.558 0 1.008-.167 1.35-.5.342-.333.51-.748.504-1.244-.007-.503-.177-.92-.509-1.25-.332-.329-.774-.494-1.325-.494z" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($data[$i]->social_media['youtube_url'] !=null && $data[$i]->social_media['youtube_url'] !="" && $data[$i]->social_media['youtube_url'] !=" ")
                                            <div class="footer__social--item">
                                                <a href="{{ $data[$i]->social_media['youtube_url'] }}"
                                                    class="footer__social--link" target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                                                        <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                            <circle cx="17.5" cy="17.5" r="17.5"
                                                                stroke="currentColor" />
                                                            <path fill="currentColor" fill-rule="nonzero"
                                                                d="M27.894 12.368a2.673 2.673 0 0 0-1.88-1.88c-1.67-.457-8.348-.457-8.348-.457s-6.677 0-8.346.44a2.727 2.727 0 0 0-1.88 1.897C7 14.038 7 17.499 7 17.499s0 3.48.44 5.131a2.673 2.673 0 0 0 1.88 1.88c1.687.457 8.347.457 8.347.457s6.677 0 8.347-.44a2.673 2.673 0 0 0 1.88-1.88c.44-1.669.44-5.13.44-5.13s.017-3.48-.44-5.15zm-12.354 8.33V14.3l5.553 3.198-5.553 3.198z" />
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($data[$i]->social_media['email'] !=null && $data[$i]->social_media['email'] !="" && $data[$i]->social_media['email'] !=" ")
                                            <div class="footer__social--item">
                                                <a href="mailto:{{ $data[$i]->social_media['email'] }}"
                                                    class="footer__social--link" target="_blank" style="position: relative;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42">
                                                        <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                            <circle cx="20" cy="20" r="20" stroke="currentColor" />
                                                            <svg
                                                            x="8px" y="8px"
                                                            xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 30 30" width="30px" fill="currentcolor">
                                                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                                                <path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/>
                                                            </svg>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($data[$i]->social_media['gmaps_url'] !=null && $data[$i]->social_media['gmaps_url'] !="" && $data[$i]->social_media['gmaps_url'] !=" ")
                                        <div class="footer__social--item">
                                            <a href="{{ $data[$i]->social_media['gmaps_url'] }}"
                                                class="footer__social--link" target="_blank" style="position: relative;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44">
                                                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                        <circle cx="21" cy="21" r="21" stroke="currentColor" />
                                                        <svg
                                                        x="9px" y="9px"
                                                        xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 30 30" width="30px" fill="currentcolor">
                                                            <path
                                                                fill="currentColor" fill-rule="nonzero"
                                                                d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/>
                                                        </svg>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                    @if ($data[$i]->social_media['phone'] !=null && $data[$i]->social_media['phone'] !="" && $data[$i]->social_media['phone'] !=" ")
                                        <div class="footer__social--item">
                                            <a href="tel:{{ $data[$i]->social_media['phone'] }}"
                                                class="footer__social--link" target="_blank" style="position: relative;">
                                                <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 22 22"
                                                fill="none"
                                                stroke="currentColor" stroke-width="0.5"
                                                >
                                                    <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                                                        <circle cx="10" cy="10" r="10" stroke="currentColor" />
                                                        <svg
                                                        x="4px" y="4px"
                                                        xmlns="http://www.w3.org/2000/svg" height="13px" viewBox="0 0 25 25" width="13px" fill="currentcolor">
                                                            <path
                                                            d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                            </path>
                                                        </svg>
                                                        <circle cx="10" cy="10" r="10" stroke="currentColor" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Sections -->
            @endfor

        </div>
    </div>



    <script type="text/javascript" src='/assets/js/jquery.js'></script>
    <script type="text/javascript" src="/assets/js/jquery.fullPage.min.js"></script>
    <script type="text/javascript" src="/assets/js/three.r95.min.js"></script>
    <script type="text/javascript" src="/assets/js/vanta.net.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

     <script async src="https://www.googletagmanager.com/gtag/js?id="></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '');
    </script>
    @include('function.script',['data'=>$data])


</body>

</html>
