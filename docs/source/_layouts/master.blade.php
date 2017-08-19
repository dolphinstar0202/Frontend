<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $page->title ? $page->title . ' - Tailwind CSS' : 'Tailwind CSS' }}</title>
        <link rel="stylesheet" href="/css/main.css">
        <script type="text/javascript" src="/js/prism.js" defer=""></script>
    </head>
    <body class="pb-12">
        <div class="bg-gradient-brand h-3"></div>
        <header class="container">
            <div class="py-6 flex-y-center flex-spaced">
                <div class="flex-y-center">
                    <div class="pill h-12 w-12 bg-light p-2 flex-center flex-inline shadow-2 mr-4">
                        <svg class="fit w-full" viewBox="0 0 60 36" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient x1="0%" y1="0%" y2="100%" id="a"><stop stop-color="#2383AE" offset="0%"></stop><stop stop-color="#6DD7B9" offset="100%"></stop></linearGradient></defs><path d="M15 12c2-8 7-12 15-12 12 0 13.5 9 19.5 10.5 4 1 7.5-.5 10.5-4.5-2 8-7 12-15 12-12 0-13.5-9-19.5-10.5-4-1-7.5.5-10.5 4.5zM0 30c2-8 7-12 15-12 12 0 13.5 9 19.5 10.5 4 1 7.5-.5 10.5-4.5-2 8-7 12-15 12-12 0-13.5-9-19.5-10.5-4-1-7.5.5-10.5 4.5z" fill="url(#a)" fill-rule="evenodd"></path></svg>
                    </div>
                    <svg class="h-4" viewBox="0 0 136 19" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Tailwind CSS">
                        <title>Tailwind CSS</title>
                        <path d="M8.638 18h-3.01V3.645H.563V1.09H13.69v2.555H8.637V18zm8.456-2.004c1.652 0 2.976-1.1 2.976-2.6v-.95l-2.87.175c-1.407.095-2.216.728-2.216 1.712 0 1.02.844 1.664 2.11 1.664zm-.88 2.203c-2.4 0-4.148-1.512-4.148-3.75 0-2.204 1.7-3.528 4.723-3.716l3.28-.187v-.89c0-1.302-.88-2.052-2.32-2.052-1.383 0-2.262.668-2.45 1.7h-2.706c.13-2.32 2.11-3.985 5.273-3.985 3.082 0 5.086 1.63 5.086 4.125V18H20.14v-1.98h-.058c-.715 1.347-2.273 2.18-3.867 2.18zm9.153-.2h2.918V5.578h-2.918V18zM26.82 3.95c.914 0 1.63-.704 1.63-1.583 0-.89-.716-1.594-1.63-1.594-.902 0-1.617.704-1.617 1.594 0 .88.715 1.582 1.617 1.582zM30.816 18h2.918V1.09h-2.918V18zM53.07 5.578h-2.883l-2.097 9.54h-.07l-2.426-9.54h-2.8l-2.427 9.54h-.058l-2.1-9.54h-2.93L38.646 18h3.046l2.44-9.082h.057L46.638 18h3.07L53.07 5.578zM54.594 18h2.918V5.578h-2.918V18zm1.453-14.05c.914 0 1.63-.704 1.63-1.583 0-.89-.716-1.594-1.63-1.594-.902 0-1.617.704-1.617 1.594 0 .88.715 1.582 1.617 1.582zM59.96 18h2.92v-7.195c0-1.782 1.065-2.99 2.74-2.99 1.665 0 2.485.986 2.485 2.744V18h2.918V9.973c0-2.87-1.558-4.63-4.3-4.63-1.91 0-3.235.89-3.903 2.368h-.058V5.58h-2.8V18zm18.036.2c-3.13 0-5.156-2.473-5.156-6.423 0-3.925 2.027-6.41 5.156-6.41 1.78 0 3.188.926 3.844 2.297h.07V1.09h2.918V18h-2.86v-2.12h-.046c-.68 1.393-2.11 2.32-3.926 2.32zm.88-10.43c-1.876 0-3.048 1.558-3.048 4.02 0 2.472 1.16 4.02 3.047 4.02 1.84 0 3.047-1.56 3.047-4.02 0-2.438-1.207-4.02-3.047-4.02zm20.788 10.51c3.996 0 6.762-2.19 7.29-5.81h-2.966c-.468 2.038-2.074 3.245-4.312 3.245-2.93 0-4.78-2.38-4.78-6.176 0-3.774 1.862-6.165 4.768-6.165 2.19 0 3.914 1.395 4.313 3.516h2.976c-.375-3.632-3.363-6.08-7.29-6.08-4.804 0-7.862 3.338-7.862 8.73 0 5.425 3.036 8.74 7.864 8.74zm8.283-5.038c.13 3.117 2.683 5.04 6.574 5.04 4.09 0 6.67-2.016 6.67-5.227 0-2.52-1.454-3.938-4.888-4.723l-1.945-.445c-2.074-.492-2.93-1.15-2.93-2.274 0-1.406 1.29-2.343 3.2-2.343 1.933 0 3.257.95 3.398 2.53h2.883c-.07-2.976-2.53-4.99-6.258-4.99-3.68 0-6.293 2.026-6.293 5.026 0 2.414 1.477 3.914 4.594 4.63l2.192.514c2.133.504 3 1.207 3 2.426 0 1.406-1.418 2.414-3.457 2.414-2.062 0-3.62-1.02-3.808-2.578h-2.93zm14.424 0c.13 3.117 2.685 5.04 6.575 5.04 4.09 0 6.668-2.016 6.668-5.227 0-2.52-1.453-3.938-4.886-4.723l-1.946-.445c-2.073-.492-2.928-1.15-2.928-2.274 0-1.406 1.29-2.343 3.2-2.343 1.932 0 3.257.95 3.397 2.53h2.882c-.07-2.976-2.53-4.99-6.258-4.99-3.68 0-6.293 2.026-6.293 5.026 0 2.414 1.478 3.914 4.595 4.63l2.19.514c2.134.504 3 1.207 3 2.426 0 1.406-1.417 2.414-3.456 2.414-2.063 0-3.622-1.02-3.81-2.578h-2.93z" fill="#3A3F46" fill-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    Some other info
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-12 sm:col-3">
                    <nav class="py-4 text-light text-lg">
                        <div>
                            <p class="mb-4 text-dark-softer text-uppercase tracking-wide text-medium text-sm">Introduction</p>
                            <ul>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/">Welcome</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/installation' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/installation">Installation</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/changelog' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/changelog">Changelog</a></li>
                            </ul>
                        </div>
                        <div class="mt-8">
                            <p class="mb-4 text-dark-softer text-uppercase tracking-wide text-medium text-sm">Concepts</p>
                            <ul>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/principles' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/principles">Principles</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/customization' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/customization">Customization</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/responsive' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/responsive">Responsive</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/colors' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/colors">Colors</a></li>
                            </ul>
                        </div>
                        <div class="mt-8">
                            <p class="mb-4 text-dark-softer text-uppercase tracking-wide text-medium text-sm">Utilities</p>
                            <ul>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/backgrounds' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/backgrounds">Backgrounds</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/borders' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/borders">Borders</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/constrain' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/constrain">Constrain</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/display' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/display">Display</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/flexbox' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/flexbox">Flexbox</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/grid' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/grid">Grid</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/images' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/images">Images</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/position' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/position">Position</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/shadows' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/shadows">Shadows</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/spacing' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/spacing">Spacing</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/text' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/text">Text</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/z-index' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/z-index">Z-Index</a></li>
                            </ul>
                        </div>
                        <div class="mt-8">
                            <p class="mb-4 text-dark-softer text-uppercase tracking-wide text-medium text-sm">Components</p>
                            <ul>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/buttons' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/buttons">Buttons</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/forms' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/forms">Forms</a></li>
                                <li class="mb-2"><a class="{{ $page->getUrl() === '/examples' ? 'text-dark text-medium' : 'text-dark-soft' }}" href="{{ $page->baseUrl }}/examples">Examples</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-12 sm:col-9">
                    <div class="p-12 rounded-lg bg-light shadow-2">
                        @yield('body')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
