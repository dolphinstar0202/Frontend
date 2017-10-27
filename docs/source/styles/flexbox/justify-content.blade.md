---
extends: _layouts.markdown
title: "Justify Content - Flexbox"
category: "Flexbox"
---

# Justify Content

<div class="subnav">
    <a class="subnav-link" href="#usage">Usage</a>
    <a class="subnav-link" href="#responsive">Responsive</a>
    <a class="subnav-link" href="#customizing">Customizing</a>
</div>

Tailwind provides a comprehensive set of Flexbox utilities out of the box to make it easy for you to implement complex layouts without having to write any new CSS.

<h2>Start <span class="ml-2 font-semibold text-slate-light text-sm uppercase tracking-wide">Default</span></h2>

Use `.justify-start` to justify items against the start of the flex container's main axis:

@component('_partials.code-sample')
<div class="flex justify-start bg-smoke-light">
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endcomponent

## Center

Use `.justify-center` to justify items along the center of the flex container's main axis:

@component('_partials.code-sample')
<div class="flex justify-center bg-smoke-light">
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endcomponent

## End

Use `.justify-end` to justify items against the end of the flex container's main axis:

@component('_partials.code-sample')
<div class="flex justify-end bg-smoke-light">
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endcomponent


## Space between

Use `.justify-between` to justify items along the flex container's main axis such that there is an equal amount of space between each item:

@component('_partials.code-sample')
<div class="flex justify-between bg-smoke-light">
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endcomponent

## Space around

Use `.justify-around` to justify items along the flex container's main axis such that there is an equal amount of space around each item:

@component('_partials.code-sample')
<div class="flex justify-around bg-smoke-light">
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
    <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endcomponent
