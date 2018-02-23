---
extends: _layouts.documentation
title: "Style &amp; Decoration"
description: "Utilities for controlling the style of text."
features:
  responsive: true
  customizable: true
  hover: true
  focus: false
---

@include('_partials.work-in-progress')

@include('_partials.class-table', [
  'rows' => [
    [
      '.italic',
      'font-style: italic;',
      'Italicizes the text within an element.',
    ],
    [
      '.roman',
      'font-style: normal;',
      'Sets the text to roman (disables italics) within an element.',
    ],
    [
      '.uppercase',
      'text-transform: uppercase;',
      'Makes all text uppercase within an element.',
    ],
    [
      '.lowercase',
      'text-transform: lowercase;',
      'Makes all text lowercase within an element.',
    ],
    [
      '.capitalize',
      'text-transform: capitalize;',
      'Capitalizes the text within an element.',
    ],
    [
      '.normal-case',
      'text-transform: none;',
      'Disables any text transformations previously applied to an element.',
    ],
    [
      '.underline',
      'text-decoration: underline;',
      'Underlines the text within an element.',
    ],
    [
      '.line-through',
      'text-decoration: line-through;',
      'Adds a line through the text within an element.',
    ],
    [
      '.no-underline',
      'text-decoration: none;',
      'Disables any text decorations previously applied to an element.',
    ],
    [
      '.antialiased',
      "-webkit-font-smoothing: antialiased;\n-moz-osx-font-smoothing: grayscale;",
      'Set the font smoothing of an element to antialiased.',
    ],
    [
      '.subpixel-antialiased',
      "-webkit-font-smoothing: auto;\n-moz-osx-font-smoothing: auto;",
      'Set the font smoothing of an element to subpixel antialiasing (the default).',
    ],
  ]
])

## Hover

In addition to the standard responsive variations, text style utilties also come in `hover:` variations that apply the given text style on hover.

@component('_partials.code-sample', ['class' => 'text-center'])
<a href="#" class="no-underline hover:underline text-blue text-lg">Link</a>
@endcomponent

Hover utilities can also be combined with responsive utilities by adding the responsive `{screen}:` prefix *before* the `hover:` prefix.

```html
<a href="#" class="... md:no-underline md:hover:underline ...">Link</a>
```

## Customizing

@include('_partials.variants-and-disabling', [
    'utility' => [
        'name' => 'text style',
        'property' => 'textStyle',
    ],
    'variants' => [
        'responsive',
        'hover',
    ],
])
