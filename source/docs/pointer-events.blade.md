---
extends: _layouts.documentation
title: "Pointer Events"
description: "Utilities for controlling whether an element responds to pointer events."
features:
  responsive: true
  customizable: false
  hover: false
  focus: false
---

@include('_partials.class-table', [
  'rows' => [
    [
      '.pointer-events-none',
      'pointer-events: none;',
      "Make element not react to pointer events, like <code>:hover</code> or <code>click</code>.",
    ],
    [
      '.pointer-events-auto',
      'pointer-events: auto;',
      "Make element react to pointer events, like <code>:hover</code> or <code>click</code>.",
    ],
  ]
])

## Usage

Use `.pointer-events-auto` to revert to the default browser behavior for pointer events (like `:hover` and `click`).

Use `.pointer-events-none` to make an element ignore pointer events. The pointer events will still trigger on child elements and pass-through to elements that are "beneath" the target.

@component('_partials.code-sample', [])
<div class="max-w-sm">
  <p class="text-sm text-gray-700">Try clicking the caret icon to open the dropdown</p>

  <p class="text-sm text-gray-600 my-4">.pointer-events-auto (event captured)</p>
  <div class="relative">
    <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      <option>Indiana</option>
      <option>Michigan</option>
      <option>Ohio</option>
    </select>
    <div class="absolute flex inset-y-0 items-center px-3 right-0 text-gray-700 bg-gray-300 rounded-r pointer-events-auto">
      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
    </div>
  </div>

  <p class="text-sm text-gray-600 my-4">.pointer-events-none (event passes through)</p>
  <div class="relative">
    <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
      <option>Indiana</option>
      <option>Michigan</option>
      <option>Ohio</option>
    </select>
    <div class="absolute flex inset-y-0 items-center px-3 right-0 text-gray-700 bg-gray-300 rounded-r pointer-events-none">
      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
    </div>
  </div>
</div>
@slot('code')
<div class="relative">
  <select class="...">
    <option>Indiana</option>
    <option>Michigan</option>
    <option>Ohio</option>
  </select>
  <div class="pointer-events-auto ...">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
  </div>
</div>

<div class="relative">
  <select class="...">
    <option>Indiana</option>
    <option>Michigan</option>
    <option>Ohio</option>
  </select>
  <div class="pointer-events-none ...">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
  </div>
</div>
@endslot
@endcomponent

## Customizing

@include('_partials.variants-and-disabling', [
    'utility' => [
        'name' => 'pointer event',
        'property' => 'pointerEvents',
    ],
    'variants' => [
        'responsive',
    ],
])
