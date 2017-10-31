@extends('_layouts.master')

@section('body')

<div class="min-h-screen">
    <div id="sidebar" class="hidden z-50 fixed pin-y pin-l overflow-y-scroll bg-smoke-light w-4/5 md:w-full md:max-w-xs flex-none border-r-2 border-smoke md:flex flex-col">
        <div class="border-b border-smoke flex-none p-8">
            <div class="hidden md:block text-center mb-8">
                <a href="/" class="inline-block">
                    <svg class="h-8" viewBox="0 0 60 36" xmlns="http://www.w3.org/2000/svg"><path d="M15 12c2-8 7-12 15-12 12 0 13.5 9 19.5 10.5 4 1 7.5-.5 10.5-4.5-2 8-7 12-15 12-12 0-13.5-9-19.5-10.5-4-1-7.5.5-10.5 4.5zM0 30c2-8 7-12 15-12 12 0 13.5 9 19.5 10.5 4 1 7.5-.5 10.5-4.5-2 8-7 12-15 12-12 0-13.5-9-19.5-10.5-4-1-7.5.5-10.5 4.5z" fill="url(#logoGradient)" fill-rule="evenodd"></path></svg>
                </a>
            </div>
            <div class="relative">
                <input class="rounded bg-white border border-smoke py-2 pr-4 pl-10 block w-full" type="text" placeholder="Search">
                <div class="pointer-events-none absolute pin-y pin-l pl-3 flex items-center">
                    <svg class="pointer-events-none text-slate h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
                </div>
            </div>
        </div>
        <div class="p-8 flex-1 overflow-y-scroll">
            <nav id="nav" class="text-base overflow-y-scroll">
                <div class="mb-8">
                    <p class="mb-4 text-slate-light uppercase tracking-wide font-bold text-xs">Introduction</p>
                    <ul>
                        <li class="mb-3"><a class="{{ $page->active('/docs/what-is-tailwind') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}" href="{{ $page->baseUrl }}/docs/what-is-tailwind">What is Tailwind?</a></li>
                    </ul>
                </div>
                <div class="mb-8">
                    <p class="mb-4 text-slate-light uppercase tracking-wide font-bold text-xs">Getting Started</p>
                    <ul>
                        <li class="mb-3"><a class="{{ $page->active('/docs/installation') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}" href="{{ $page->baseUrl }}/docs/installation">Installation</a></li>
                        <li class="mb-3">
                            <a class="{{ $page->active('/docs/configuration') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}" href="{{ $page->baseUrl }}/docs/configuration">
                                Configuration
                            </a>
                        </li>
                        <li class="mb-3">
                            <a class="{{ $page->active('/docs/colors') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}" href="{{ $page->baseUrl }}/docs/colors">
                                Colors
                            </a>
                        </li>
                        <li class="mb-3">
                            <a class="{{ $page->active('/docs/responsive-design') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}" href="{{ $page->baseUrl }}/docs/responsive-design">
                                Responsive Design
                            </a>
                        </li>
                        <li class="mb-3">
                            <a class="{{ $page->active('/docs/adding-new-utilities') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}" href="{{ $page->baseUrl }}/docs/adding-new-utilities">
                                Adding New Utilities
                            </a>
                        </li>
                        <li class="mb-3">
                            <a class="{{ $page->active('/docs/extracting-components') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}" href="{{ $page->baseUrl }}/docs/extracting-components">
                                Extracting Components
                            </a>
                        </li>
                        <li class="mb-3">
                            <a class="{{ $page->active('/docs/functions-and-directives') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}" href="{{ $page->baseUrl }}/docs/functions-and-directives">
                                Functions &amp; Directives
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mt-8">
                    <p class="mb-4 text-slate-light uppercase tracking-wide font-bold text-xs">Styles</p>
                    <ul class="mb-8">
                        <li class="mb-3">
                            <a href="{{ $page->baseUrl }}/docs/background-color" class="block mb-2 {{ $page->active('/docs/background-') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Backgrounds</a>
                            <ul class="pl-4 {{ $page->active('/docs/background-') ? 'block' : 'hidden' }}">
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/background-color" class="{{ $page->active('/docs/background-color') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Color</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/background-position" class="{{ $page->active('/docs/background-position') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Position</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/background-size" class="{{ $page->active('/docs/background-size') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Size</a></li>
                            </ul>
                        </li>
                        <li class="mb-3">
                            <a href="{{ $page->baseUrl }}/docs/border-width" class="block mb-2 {{ $page->active(['/docs/border-width', '/docs/border-color', '/docs/border-style']) ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Borders</a>
                            <ul class="pl-4 {{ $page->active(['/docs/border-width', '/docs/border-color', '/docs/border-style']) ? 'block' : 'hidden' }}">
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/border-width" class="{{ $page->active('/docs/border-width') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Width</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/border-color" class="{{ $page->active('/docs/border-color') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Color</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/border-style" class="{{ $page->active('/docs/border-style') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Style</a></li>
                            </ul>
                        </li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/border-radius" class="{{ $page->active('/docs/border-radius') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Border Radius</a></li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/container" class="{{ $page->active('/docs/container') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Container</a></li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/display" class="{{ $page->active('/docs/display') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Display</a></li>
                        <li class="mb-3">
                            <a href="{{ $page->baseUrl }}/docs/flexbox-display" class="block mb-2 {{ $page->active('/docs/flexbox-') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Flexbox</a>
                            <ul class="pl-4 {{ $page->active('/docs/flexbox-') ? 'block' : 'hidden' }}">
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/flexbox-display" class="{{ $page->active('/docs/flexbox-display') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Display</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/flexbox-direction" class="{{ $page->active('/docs/flexbox-direction') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Direction</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/flexbox-wrapping" class="{{ $page->active('/docs/flexbox-wrapping') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Wrapping</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/flexbox-justify-content" class="{{ $page->active('/docs/flexbox-justify-content') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Justify Content</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/flexbox-align-items" class="{{ $page->active('/docs/flexbox-align-items') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Align Items</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/flexbox-align-content" class="{{ $page->active('/docs/flexbox-align-content') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Align Content</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/flexbox-align-self" class="{{ $page->active('/docs/flexbox-align-self') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Align Self</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/flexbox-flex-grow-shrink" class="{{ $page->active('/docs/flexbox-flex-grow-shrink') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Flex, Grow, &amp; Shrink</a></li>
                            </ul>
                        </li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/floats" class="{{ $page->active('/docs/floats') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Floats</a></li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/forms" class="{{ $page->active('/docs/forms') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Forms</a></li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/grid" class="{{ $page->active('/docs/grid') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Grid</a></li>
                        <li class="mb-3">
                            <a href="{{ $page->baseUrl }}/docs/cursor" class="block mb-2 {{ $page->active(['/docs/cursor', '/docs/resize', '/docs/pointer-events', '/docs/user-select']) ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Interactivity</a>
                            <ul class="pl-4 {{ $page->active(['/docs/cursor', '/docs/resize', '/docs/pointer-events', '/docs/user-select']) ? 'block' : 'hidden' }}">
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/cursor" class="{{ $page->active('/docs/cursor') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Cursor</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/resize" class="{{ $page->active('/docs/resize') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Resize</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/pointer-events" class="{{ $page->active('/docs/pointer-events') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Pointer Events</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/user-select" class="{{ $page->active('/docs/user-select') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">User Select</a></li>
                            </ul>
                        </li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/lists" class="{{ $page->active('/docs/lists') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Lists</a></li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/opacity" class="{{ $page->active('/docs/opacity') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Opacity</a></li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/overflow" class="{{ $page->active('/docs/overflow') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Overflow</a></li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/positioning" class="{{ $page->active('/docs/positioning') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Positioning</a></li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/shadows" class="{{ $page->active('/docs/shadows') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Shadows</a></li>
                        <li class="mb-3">
                            <a href="{{ $page->baseUrl }}/docs/width" class="block mb-2 {{ $page->active(['/docs/width', '/docs/min-width', '/docs/max-width', '/docs/height', '/docs/min-height', '/docs/max-height']) ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Sizing</a>
                            <ul class="pl-4 {{ $page->active(['/docs/width', '/docs/min-width', '/docs/max-width', '/docs/height', '/docs/min-height', '/docs/max-height']) ? 'block' : 'hidden' }}">
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/width" class="{{ $page->active('/docs/width') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Width</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/min-width" class="{{ $page->active('/docs/min-width') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Min-Width</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/max-width" class="{{ $page->active('/docs/max-width') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Max-Width</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/height" class="{{ $page->active('/docs/height') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Height</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/min-height" class="{{ $page->active('/docs/min-height') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Min-Height</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/max-height" class="{{ $page->active('/docs/max-height') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Max-Height</a></li>
                            </ul>
                        </li>
                        <li class="mb-3">
                            <a href="{{ $page->baseUrl }}/docs/padding" class="block mb-2 {{ $page->active(['/docs/padding', '/docs/margin', '/docs/negative-margin']) ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Spacing</a>
                            <ul class="pl-4 {{ $page->active(['/docs/padding', '/docs/margin', '/docs/negative-margin']) ? 'block' : 'hidden' }}">
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/padding" class="{{ $page->active('/docs/padding') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Padding</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/margin" class="{{ $page->active('/docs/margin') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Margin</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/negative-margin" class="{{ $page->active('/docs/negative-margin') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Negative Margin</a></li>
                            </ul>
                        </li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/svg" class="{{ $page->active('/docs/svg') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">SVG</a></li>
                        <li class="mb-3">
                            <a href="{{ $page->baseUrl }}/docs/fonts" class="block mb-2 {{ $page->active(['/docs/fonts', '/docs/text-color', '/docs/text-sizing', '/docs/font-weight', '/docs/line-height', '/docs/letter-spacing', '/docs/whitespace-and-wrapping', '/docs/text-style']) ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Typography</a>
                            <ul class="pl-4 {{ $page->active(['/docs/fonts', '/docs/text-color', '/docs/text-sizing', '/docs/font-weight', '/docs/line-height', '/docs/letter-spacing', '/docs/whitespace-and-wrapping', '/docs/text-style']) ? 'block' : 'hidden' }}">
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/fonts" class="{{ $page->active('/docs/fonts') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Fonts</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/text-color" class="{{ $page->active('/docs/text-color') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Color</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/text-sizing" class="{{ $page->active('/docs/text-sizing') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Sizing</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/font-weight" class="{{ $page->active('/docs/font-weight') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Weight</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/line-height" class="{{ $page->active('/docs/line-height') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Line Height</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/letter-spacing" class="{{ $page->active('/docs/letter-spacing') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Letter Spacing</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/text-style" class="{{ $page->active('/docs/text-style') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Style &amp; Decoration</a></li>
                                <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/whitespace-and-wrapping" class="{{ $page->active('/docs/whitespace-and-wrapping') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Whitespace &amp; Wrapping</a></li>
                            </ul>
                        </li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/vertical-alignment" class="{{ $page->active('/docs/vertical-alignment') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Vertical Alignment</a></li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/visibility" class="{{ $page->active('/docs/visibility') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Visibility</a></li>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/z-index" class="{{ $page->active('/docs/z-index') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Z-Index</a></li>
                    </ul>
                </div>
                <div class="mb-8">
                    <p class="mb-4 text-slate-light uppercase tracking-wide font-bold text-xs">Examples</p>
                    <ul>
                        <li class="mb-3"><a href="{{ $page->baseUrl }}/docs/examples/buttons" class="{{ $page->active('/docs/examples/buttons') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}">Buttons</a></li>
                        <li class="mb-3"><a class="{{ $page->active('/docs/examples/alerts') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}" href="{{ $page->baseUrl }}/docs/examples/alerts">Alerts</a></li>
                        <li class="mb-3"><a class="{{ $page->active('/docs/examples/cards') ? 'text-slate-darker font-bold' : 'text-slate-dark' }}" href="{{ $page->baseUrl }}/docs/examples/cards">Cards</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="md:ml-80">
        <div class="fixed w-full">
            <div class="pin-t bg-white md:hidden relative border-b border-dark h-12 flex items-center">
                  <div class="js-open-sidebar absolute pin-l pin-y px-4 flex items-center">
                      <svg class="h-4" fill="#777" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                  </div>
                  <div class="mx-auto inline-flex items-center">
                      <svg class="h-4" viewBox="0 0 60 36" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15 12c2-8 7-12 15-12 12 0 13.5 9 19.5 10.5 4 1 7.5-.5 10.5-4.5-2 8-7 12-15 12-12 0-13.5-9-19.5-10.5-4-1-7.5.5-10.5 4.5zM0 30c2-8 7-12 15-12 12 0 13.5 9 19.5 10.5 4 1 7.5-.5 10.5-4.5-2 8-7 12-15 12-12 0-13.5-9-19.5-10.5-4-1-7.5.5-10.5 4.5z" fill="url(#logoGradient)" fill-rule="evenodd"></path>
                      </svg>
                  </div>
                  <div class="js-close-sidebar">
                    <div class="flex items-center absolute pin-r pin-y px-4">
                      <svg class="h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
                    </div>
                  </div>
            </div>
        </div>
        <div id="content" class="px-6 pb-8 pt-20 md:pt-8 w-full max-w-xl mx-auto">
            <div id="app">
                <div class="markdown">
                    @if ($page->category)
                        <div class="font-semibold text-slate-light text-base uppercase tracking-wide mb-2">{{ $page->category }}</div>
                    @endif
                    @yield('content')
                </div>
            </div>
            <script src="/js/app.js"></script>
            <script>
                var closeSidebar = function () {
                    $('#sidebar').addClass("hidden");
                    $('.js-close-sidebar').addClass("hidden");
                }

                $('.js-close-sidebar').on('click', function () {
                  closeSidebar();
                });

                $('.js-open-sidebar').on('click', function () {
                    $('#sidebar').removeClass("hidden");
                    $('.js-close-sidebar').removeClass("hidden");
                });
            </script>
        </div>
    </div>
</div>

<svg>
  <defs>
    <linearGradient x1="0%" y1="0%" y2="100%" id="logoGradient">
      <stop stop-color="#2383AE" offset="0%"></stop>
      <stop stop-color="#6DD7B9" offset="100%"></stop>
    </linearGradient>
  </defs>
</svg>

@endsection
