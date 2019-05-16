---
extends: _layouts.homepage
title: "Most CSS frameworks do too much."
description: null
titleBorder: false
---

<h2 style="font-size: 0" class="invisible m-0 -mb-6">Utility-first</h2>

They come with all sorts of predesigned components like buttons, cards, and alerts that might help you move quickly at first, but cause more pain than they cure when it comes time to make your site stand out with a custom design.

Tailwind is different.

Instead of opinionated predesigned components, Tailwind provides low-level utility classes that let you build completely custom designs without ever leaving your HTML.

@component('_partials.code-sample', ['class' => 'p-8'])
<div class="md:flex">
  <div class="md:flex-shrink-0">
    <img class="rounded-lg md:w-56" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=448&q=80" alt="Woman paying for a purchase">
  </div>
  <div class="mt-4 md:mt-0 md:ml-6">
    <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">Marketing</div>
    <a href="#" class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Finding customers for your new business</a>
    <p class="mt-2 text-gray-600">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
  </div>
</div>
@endcomponent

If you're sick of fighting the framework, overriding unwanted styles, and battling specificity wars, Tailwind was made for you.

[Learn more about Tailwind's utility-first workflow &rarr;](/docs/utility-first)

---

## Responsive to the core

Every Tailwind utility also comes with responsive variants, making it extremely easy to build responsive interfaces without resorting to custom CSS.

Tailwind uses an intuitive `{screen}:` prefix that makes it easy to notice responsive classes in your markup while keeping the original class name recognizable and intact.

@component('_partials.responsive-code-sample')
@slot('none')
<div class="flex justify-start bg-gray-200">
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">1</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">2</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">3</div>
</div>
@endslot
@slot('sm')
<div class="flex justify-center bg-gray-200">
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">1</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">2</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">3</div>
</div>
@endslot
@slot('md')
<div class="flex justify-end bg-gray-200">
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">1</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">2</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">3</div>
</div>
@endslot
@slot('lg')
<div class="flex justify-between bg-gray-200">
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">1</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">2</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">3</div>
</div>
@endslot
@slot('xl')
<div class="flex justify-around bg-gray-200">
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">1</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">2</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">3</div>
</div>
@endslot
@slot('code')
<div class="none:justify-start sm:justify-center md:justify-end lg:justify-between xl:justify-around ...">
  <!-- ... -->
</div>
@endslot
@endcomponent

[Learn more about responsive design with Tailwind &rarr;](/docs/responsive-design)

---

## Component-friendly

While you can do a *lot* with just utility classes, as a project grows it can be useful to codify common patterns into higher level abstractions.

Tailwind provides tools for [extracting component classes](/docs/extracting-components) from repeated utility patterns, making it easy to update multiple instances of a component from one place:

@component('_partials.code-sample', ['lang' => 'html', 'class' => 'text-center'])
<button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
  Button
</button>

@slot('code')
<!-- Using utilities: -->
<button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
  Button
</button>

<!-- Extracting component classes: -->
<button class="btn btn-blue">
  Button
</button>

<style>
  .btn {
    @@apply font-bold py-2 px-4 rounded;
  }
  .btn-blue {
    @@apply bg-blue-500 text-white;
  }
  .btn-blue:hover {
    @@apply bg-blue-600;
  }
</style>
@endslot
@endcomponent

[Learn more about extracting components with Tailwind &rarr;](/docs/extracting-components)

---

## Designed to be customized

If it makes sense to be customizable, Tailwind lets you customize it. This includes colors, border sizes, font weights, spacing utilities, breakpoints, shadows, and tons more.

Tailwind is written in [PostCSS](http://postcss.org/) and configured in JavaScript, which means you have the full power of a real programming language at your fingertips.

Tailwind is more than a CSS framework, *it's an engine for creating design systems.*

```js
// tailwind.config.js
module.exports = {
  theme: {
    screens: {
      tablet: '768px',
      desktop: '1024px',
    },
    colors: {
      primary: {
        100: '#ebf8ff',
        300: '#90cdf4',
        500: '#4299e1',
        700: '#2b6cb0',
        900: '#2a4365',
      },
      secondary: {
        100: '#fffff0',
        300: '#faf089',
        500: '#ecc94b',
        700: '#b7791f',
        900: '#744210',
      },
    },
    extend: {
      boxShadow: {
        huge: '0 30px 60px -15px rgba(0, 0, 0, .25)'
      }
    }
  }
}
```

[Learn more about customizing Tailwind &rarr;](/docs/configuration)

