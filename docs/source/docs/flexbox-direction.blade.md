---
extends: _layouts.documentation
title: "Flex Direction"
description: "Utilities for controlling the direction of flex items."
features:
  responsive: true
  customizable: false
  hover: false
  focus: false
---

<div class="border-t border-grey-lighter">
  <table class="w-full text-left table-collapse">
    <thead>
      <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Class</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Properties</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Description</th>
      </tr>
    </thead>
    <tbody class="align-baseline">
      <tr>
        <td class="p-2 border-t border-smoke font-mono text-xs text-purple-dark">.flex-row</td>
        <td class="p-2 border-t border-smoke font-mono text-xs text-blue-dark">flex-direction: row;</td>
        <td class="p-2 border-t border-smoke text-sm text-grey-darker">Position flex items in the normal horizontal direction.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.flex-row-reverse</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">flex-direction: row-reverse;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Position flex items in the reverse horizontal direction.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.flex-col</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">flex-direction: column;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Position flex items vertically.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.flex-col-reverse</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">flex-direction: column-reverse;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Position flex items vertically in the reverse direction.</td>
      </tr>
    </tbody>
  </table>
</div>

### Row <span class="ml-2 font-semibold text-slate-light text-sm uppercase tracking-wide">Default</span>

Use `.flex-row` to position flex items horizontally in the same direction as text:

@component('_partials.code-sample')
<div class="flex flex-row bg-smoke-light">
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endcomponent

### Row reversed

Use `.flex-row-reverse` to position flex items horizontally in the opposite direction:

@component('_partials.code-sample')
<div class="flex flex-row-reverse bg-smoke-light">
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endcomponent

### Column

Use `.flex-col` to position flex items vertically:

@component('_partials.code-sample')
<div class="flex flex-col bg-smoke-light">
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endcomponent

### Column reversed

Use `.flex-col-reverse` to position flex items vertically in the opposite direction:

@component('_partials.code-sample')
<div class="flex flex-col-reverse bg-smoke-light">
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endcomponent

## Responsive

To apply a flex direction utility only at a specific breakpoint, add a `{screen}:` prefix to the existing class name. For example, adding the class `md:flex-row` to an element would apply the `flex-row` utility at medium screen sizes and above.

For more information about Tailwind's responsive design features, check out the [Responsive Design](/docs/responsive-design) documentation.

@component('_partials.responsive-code-sample')
@slot('none')
<div class="flex flex-row bg-smoke-light">
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endslot
@slot('sm')
<div class="flex flex-col bg-smoke-light">
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endslot
@slot('md')
<div class="flex flex-row-reverse bg-smoke-light">
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endslot
@slot('lg')
<div class="flex flex-col-reverse bg-smoke-light">
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endslot
@slot('xl')
<div class="flex flex-row bg-smoke-light">
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">1</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">2</div>
  <div class="text-slate text-center bg-smoke px-4 py-2 m-2">3</div>
</div>
@endslot
@slot('code')
<div class="none:flex-row sm:flex-col md:flex-row-reverse lg:flex-col-reverse xl:flex-row ...">
  <!-- ... -->
</div>
@endslot
@endcomponent
