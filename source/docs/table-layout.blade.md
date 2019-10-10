---
extends: _layouts.documentation
title: "Table Layout"
description: "Utilities for controlling the table layout algorithm."
features:
  responsive: true
  customizable: false
  hover: false
  focus: false
---

@include('_partials.class-table', [
  'rows' => [
    [
      '.table-auto',
      'table-layout: auto;',
      "Use an automatic table layout algorithm.",
    ],
    [
      '.table-fixed',
      'table-layout: fixed;',
      "Sets a fixed table layout algorithm.",
    ],
  ]
])

## Auto

Use `.table-auto` to allow the table to automatically size columns to fit the contents of the cell.

@component('_partials.code-sample')
<table class="table-auto">
  <thead>
    <tr>
      <th class="px-4 py-2">Title</th>
      <th class="px-4 py-2">Author</th>
      <th class="px-4 py-2">Views</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border px-4 py-2">Intro to CSS</td>
      <td class="border px-4 py-2">Adam</td>
      <td class="border px-4 py-2">858</td>
    </tr>
    <tr class="bg-gray-100">
      <td class="border px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
      <td class="border px-4 py-2">Adam</td>
      <td class="border px-4 py-2">112</td>
    </tr>
    <tr>
      <td class="border px-4 py-2">Into to JavaScript</td>
      <td class="border px-4 py-2">Chris</td>
      <td class="border px-4 py-2">1,280</td>
    </tr>
  </tbody>
</table>
@endcomponent

## Fixed

Use `.table-fixed` to allow the table to ignore the content and use fixed widths for columns. The width of the first row will set the column widths for the whole table.

You can manually set the widths for some columns and the rest of the available width will be divided evenly amongst the columns without explicit width.

@component('_partials.code-sample')
<table class="table-fixed">
  <thead>
    <tr>
      <th class="w-1/2 px-4 py-2">Title</th>
      <th class="w-1/4 px-4 py-2">Author</th>
      <th class="w-1/4 px-4 py-2">Views</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border px-4 py-2">Intro to CSS</td>
      <td class="border px-4 py-2">Adam</td>
      <td class="border px-4 py-2">858</td>
    </tr>
    <tr class="bg-gray-100">
      <td class="border px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
      <td class="border px-4 py-2">Adam</td>
      <td class="border px-4 py-2">112</td>
    </tr>
    <tr>
      <td class="border px-4 py-2">Into to JavaScript</td>
      <td class="border px-4 py-2">Chris</td>
      <td class="border px-4 py-2">1,280</td>
    </tr>
  </tbody>
</table>
@endcomponent

## Customizing

@include('_partials.variants-and-disabling', [
    'utility' => [
        'name' => 'table layout',
        'property' => 'tableLayout',
    ],
    'variants' => [
        'responsive',
    ],
])
