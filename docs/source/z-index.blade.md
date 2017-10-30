---
extends: _layouts.markdown
title: "Z-Index"
---

# Z-Index

<div class="text-xl text-slate-light mb-4">
    Utilities for controlling the stack order of an element.
</div>

@include('_partials.feature-badges', [
    'responsive' => true,
    'customizable' => true,
    'hover' => false,
    'focus' => false
])

<div class="border-t border-grey-lighter">
    <table class="w-full text-left" style="border-collapse: collapse;">
      <colgroup>
        <col class="w-1/4">
        <col class="w-1/4">
        <col class="w-1/2">
      </colgroup>
        <thead>
          <tr>
              <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Class</th>
              <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Properties</th>
              <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Description</th>
          </tr>
        </thead>
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.z-{index}</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">z-index: {index};</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the z-index of the element to the given value.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.z-0</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">z-index: 0;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the z-index of the element to the given value.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.z-10</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">z-index: 10;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the z-index of the element to the given value.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.z-20</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">z-index: 20;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the z-index of the element to the given value.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.z-30</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">z-index: 30;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the z-index of the element to the given value.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.z-40</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">z-index: 40;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the z-index of the element to the given value.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.z-50</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">z-index: 50;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the z-index of the element to the given value.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.z-auto</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">z-index: auto;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Don't create a new stacking context.</td>
            </tr>
        </tbody>
    </table>
</div>

Control the stack order (or three-dimensional positioning) of an element in Tailwind, regardless of order it has been displayed, using the `.z-{index}` utilities.

@component('_partials.code-sample')
<div class="relative h-32 text-center">
    <div class="z-40 absolute w-24 h-24 ml-0 mt-0 bg-slate-lighter flex justify-center items-center">z-40</div>
    <div class="z-30 absolute w-24 h-24 ml-2 mt-2 bg-slate-light flex justify-center items-center">z-30</div>
    <div class="z-20 absolute w-24 h-24 ml-4 mt-4 bg-slate flex justify-center items-center">z-20</div>
    <div class="z-10 absolute w-24 h-24 ml-6 mt-6 bg-slate-dark flex justify-center items-center">z-10</div>
    <div class="z-0 absolute w-24 h-24 ml-8 mt-8 bg-slate-darker flex justify-center items-center">z-0</div>
</div>
@slot('code')
<div class="z-40 ml-0 mt-0 bg-slate-lighter">z-40</div>
<div class="z-30 ml-2 mt-2 bg-slate-light">z-30</div>
<div class="z-20 ml-4 mt-4 bg-slate">z-20</div>
<div class="z-10 ml-6 mt-6 bg-slate-dark">z-10</div>
<div class="z-0 ml-8 mt-8 bg-slate-darker">z-0</div>
@endslot
@endcomponent

## Responsive

To control the z-index of an element at a specific breakpoint, add a `{breakpoint}:` prefix to any existing z-index utility. For example, use `md:z-50` to apply the `z-50` utility at only medium screen sizes and above.

For more information about Tailwind's responsive design features, check out the [Responsive Design](/workflow/responsive-design) documentation.

@component('_partials.responsive-code-sample')
@slot('none')
<div class="relative w-full h-32 text-center">
    <div class="z-0 absolute w-full h-12 mt-12 bg-yellow-light flex justify-center items-center">yellow</div>
    <div class="z-40 absolute w-24 h-24 ml-4 mt-0 bg-slate-lighter flex justify-center items-center">z-40</div>
    <div class="z-30 absolute w-24 h-24 ml-6 mt-2 bg-slate-light flex justify-center items-center">z-30</div>
    <div class="z-20 absolute w-24 h-24 ml-8 mt-4 bg-slate flex justify-center items-center">z-20</div>
    <div class="z-10 absolute w-24 h-24 ml-10 mt-6 bg-slate-dark flex justify-center items-center">z-10</div>
    <div class="z-0 absolute w-24 h-24 ml-12 mt-8 bg-slate-darker flex justify-center items-center">z-0</div>
</div>
@endslot
@slot('sm')
<div class="relative h-32 text-center">
    <div class="z-10 absolute w-full h-12 mt-12 bg-yellow-light flex justify-center items-center">yellow</div>
    <div class="z-40 absolute w-24 h-24 ml-4 mt-0 bg-slate-lighter flex justify-center items-center">z-40</div>
    <div class="z-30 absolute w-24 h-24 ml-6 mt-2 bg-slate-light flex justify-center items-center">z-30</div>
    <div class="z-20 absolute w-24 h-24 ml-8 mt-4 bg-slate flex justify-center items-center">z-20</div>
    <div class="z-10 absolute w-24 h-24 ml-10 mt-6 bg-slate-dark flex justify-center items-center">z-10</div>
    <div class="z-0 absolute w-24 h-24 ml-12 mt-8 bg-slate-darker flex justify-center items-center">z-0</div>
</div>
@endslot
@slot('md')
<div class="relative h-32 text-center">
    <div class="z-20 absolute w-full h-12 mt-12 bg-yellow-light flex justify-center items-center">yellow</div>
    <div class="z-40 absolute w-24 h-24 ml-4 mt-0 bg-slate-lighter flex justify-center items-center">z-40</div>
    <div class="z-30 absolute w-24 h-24 ml-6 mt-2 bg-slate-light flex justify-center items-center">z-30</div>
    <div class="z-20 absolute w-24 h-24 ml-8 mt-4 bg-slate flex justify-center items-center">z-20</div>
    <div class="z-10 absolute w-24 h-24 ml-10 mt-6 bg-slate-dark flex justify-center items-center">z-10</div>
    <div class="z-0 absolute w-24 h-24 ml-12 mt-8 bg-slate-darker flex justify-center items-center">z-0</div>
</div>
@endslot
@slot('lg')
<div class="relative h-32 text-center">
    <div class="z-30 absolute w-full h-12 mt-12 bg-yellow-light flex justify-center items-center">yellow</div>
    <div class="z-40 absolute w-24 h-24 ml-4 mt-0 bg-slate-lighter flex justify-center items-center">z-40</div>
    <div class="z-30 absolute w-24 h-24 ml-6 mt-2 bg-slate-light flex justify-center items-center">z-30</div>
    <div class="z-20 absolute w-24 h-24 ml-8 mt-4 bg-slate flex justify-center items-center">z-20</div>
    <div class="z-10 absolute w-24 h-24 ml-10 mt-6 bg-slate-dark flex justify-center items-center">z-10</div>
    <div class="z-0 absolute w-24 h-24 ml-12 mt-8 bg-slate-darker flex justify-center items-center">z-0</div>
</div>
@endslot
@slot('xl')
<div class="relative h-32 text-center">
    <div class="z-40 absolute w-full h-12 mt-12 bg-yellow-light flex justify-center items-center">yellow</div>
    <div class="z-40 absolute w-24 h-24 ml-4 mt-0 bg-slate-lighter flex justify-center items-center">z-40</div>
    <div class="z-30 absolute w-24 h-24 ml-6 mt-2 bg-slate-light flex justify-center items-center">z-30</div>
    <div class="z-20 absolute w-24 h-24 ml-8 mt-4 bg-slate flex justify-center items-center">z-20</div>
    <div class="z-10 absolute w-24 h-24 ml-10 mt-6 bg-slate-dark flex justify-center items-center">z-10</div>
    <div class="z-0 absolute w-24 h-24 ml-12 mt-8 bg-slate-darker flex justify-center items-center">z-0</div>
</div>
@endslot
@slot('code')
<div class="none:z-0 sm:z-10 md:z-20 lg:z-30 xl:z-40 bg-yellow-light">yellow</div>
<div class="z-40 ml-4 mt-0 bg-slate-lighter">z-40</div>
<div class="z-30 ml-6 mt-2 bg-slate-light">z-30</div>
<div class="z-20 ml-8 mt-4 bg-slate">z-20</div>
<div class="z-10 ml-10 mt-6 bg-slate-dark">z-10</div>
<div class="z-0 ml-12 mt-8 bg-slate-darker">z-0</div>
@endslot
@endcomponent

## Customizing

By default Tailwind provides a sensible numeric z-index scale. You can, of course, modify these values as needed. This is done in the `zIndex` section of your Tailwind config.

@component('_partials.customized-config')
@slot('default')
{
  // ...
  zIndex: {
    '0': 0,
    '10': 10,
    '20': 20,
    '30': 30,
    '40': 40,
    '50': 50,
    'auto': 'auto',
  },
}
@endslot
@slot('customized')
{
  // ...
  zIndex: {
    '0': 0,
    '10': 10,
    '20': 20,
    '30': 30,
    '40': 40,
    '50': 50,
    '60': 60,
    '70': 70,
    '80': 80,
    '90': 90,
    '100': 100,
    'auto': 'auto',
  },
}
@endslot
@endcomponent
