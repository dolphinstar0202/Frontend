---
extends: _layouts.documentation
title: "Functions & Directives"
description: "A reference for the custom functions and directives Tailwind exposes to your CSS."
titleBorder: true
---

## @@tailwind

Use the `@@tailwind` directive to insert Tailwind's `base`, `components`, `utilities` and `screens` styles into your CSS.

```css
/**
 * This injects Tailwind's base styles and any base styles registered by
 * plugins.
 */
@@tailwind base;

/**
 * This injects Tailwind's component classes and any component classes
 * registered by plugins.
 */
@@tailwind components;

/**
 * This injects Tailwind's utility classes and any utility classes registered
 * by plugins.
 */
@@tailwind utilities;

/**
 * Use this directive to control where Tailwind injects the responsive
 * variations of each utility.
 *
 * If omitted, Tailwind will append these classes to the very end of
 * your stylesheet by default.
 */
 @@tailwind screens;
```

---

## @@apply

Use `@@apply` to inline any existing utility classes into your own custom CSS.

This is useful when you find a common utility pattern in your HTML that you'd like to extract to a new component.

```css
.btn {
  @@apply font-bold py-2 px-4 rounded;
}
.btn-blue {
  @@apply bg-blue-500 text-white;
}
.btn-blue:hover {
  @@apply bg-blue-700;
}
```

Rules can be listed on a single line or with multiple calls to `@@apply`:

```css
.btn {
  @@apply font-bold;
  @@apply py-2;
  @@apply px-4;
  @@apply rounded;
}
```

You can mix `@@apply` declarations with normal CSS declarations too of course:

```css
.btn:hover {
  @@apply bg-blue-700;
  transform: translateY(-1px);
}
```

Any rules inlined with `@@apply` will have `!important` **removed** by default to avoid specificity issues:

```css
/* Input */
.foo {
  color: blue !important;
}

.bar {
  @@apply foo;
}

/* Output */
.foo {
  color: blue !important;
}

.bar {
  color: blue;
}
```

If you'd like to `@@apply` an existing class and make it `!important`, simply add `!important` to the end of the declaration:


```css
/* Input */
.btn {
  @@apply font-bold py-2 px-4 rounded !important;
}

/* Output */
.btn {
  font-weight: 700 !important;
  padding-top: .5rem !important;
  padding-bottom: .5rem !important;
  padding-right: 1rem !important;
  padding-left: 1rem !important;
  border-radius: .25rem !important;
}
```

Note that if you're using Sass/SCSS, you'll need to use Sass' interpolation feature to get this to work:

```scss
.btn {
  @@apply font-bold py-2 px-4 rounded #{!important};
}
```

It's important to understand that `@@apply` **will not work** for inlining pseudo-class or responsive variants of another utility. Instead, apply the plain version of that utility into the appropriate pseudo-selector or a new media query:

```css
/* Won't work: */
.btn {
  @@apply block bg-red-500;
  @@apply hover:bg-blue-500;
  @@apply md:inline-block;
}

/* Do this instead: */
.btn {
  @@apply block bg-red-500;
}
.btn:hover {
  @@apply bg-blue-500;
}
@@screen md {
  .btn {
    @@apply inline-block;
  }
}
```

If you've [configured a prefix](/docs/configuration#prefix) for your utilities, you can optionally omit the prefix when using `@@apply` if you prefer a terser syntax:

```css
/* Both of these will work */
.btn {
  @@apply tw-font-bold tw-py-2 tw-px-4 tw-rounded;
}
.btn {
  @@apply font-bold py-2 px-4 rounded;
}
```

---

## @@variants

You can generate `responsive`, `hover`, `focus`, `active`, and `group-hover` versions of your own utilities by wrapping their definitions in the `@variants` directive

```css
@@variants focus, hover {
  .rotate-0 {
    transform: rotate(0deg);
  }
  .rotate-90 {
    transform: rotate(90deg);
  }
}
```

This will generate the following CSS:

```css
.rotate-0 {
  transform: rotate(0deg);
}
.rotate-90 {
  transform: rotate(90deg);
}

.focus\:rotate-0:focus {
  transform: rotate(0deg);
}
.focus\:rotate-90:focus {
  transform: rotate(90deg);
}

.hover\:rotate-0:hover {
  transform: rotate(0deg);
}
.hover\:rotate-90:hover {
  transform: rotate(90deg);
}
```

It's important to note that **variants are generated in the order you specify them**.

So if you want focus utilities to take priority over hover utilities for example, make sure focus comes *after* hover in the list:

```css
/* Input */
@@variants hover, focus {
  .banana {
    color: yellow;
  }
}

/* Output */
.banana {
  color: yellow;
}
.hover\:banana:hover {
  color: yellow;
}
.focus\:banana:focus {
  color: yellow;
}
```

The `@variants` at-rule supports all of the values that are supported in the `variants` section of your config file:

- `responsive`
- `hover`
- `focus`
- `active`
- `group-hover`
- `focus-within`

...as well as any [custom variants](/docs/plugins#adding-variants) added through plugins.

---

## @@responsive

You can generate responsive variants of your own classes by wrapping their definitions in the `@responsive` directive:

```css
@@responsive {
  .bg-gradient-brand {
    background-image: linear-gradient(blue, green);
  }
}
```

Using the default breakpoints, this would generate these classes:

```css
.bg-gradient-brand {
  background-image: linear-gradient(blue, green);
}

/* ... */

@media (min-width: 640px) {
  .sm\:bg-gradient-brand {
    background-image: linear-gradient(blue, green);
  }
  /* ... */
}

@media  (min-width: 768px) {
  .md\:bg-gradient-brand {
    background-image: linear-gradient(blue, green);
  }
  /* ... */
}

@media (min-width: 1024px) {
  .lg\:bg-gradient-brand {
    background-image: linear-gradient(blue, green);
  }
  /* ... */
}

@media (min-width: 1280px) {
  .xl\:bg-gradient-brand {
    background-image: linear-gradient(blue, green);
  }
  /* ... */
}
```

The responsive variants will be added to Tailwind's existing media queries at the end of your stylesheet. This makes sure that classes with a responsive prefix always defeat non-responsive classes that are targeting the same CSS property.

---

## @@screen

The `@@screen` directive allows you to create media queries that reference your breakpoints by name instead of duplicating their values in your own CSS.

For example, say you have a `sm` breakpoint at `640px` and you need to write some custom CSS that references this breakpoint.

Instead of writing a raw media query that duplicates that value like this:

```css
{{ '@media (min-width: 640px) {' }}
  /* ... */
}
```

...you can use the `@@screen` directive and reference the breakpoint by name:

```css
@@screen sm {
  /* ... */
}
```

---

## theme()

Use the `theme()` function to access your Tailwind config values using dot notation.

This can be a useful alternative to `@@apply` when you want to reference a value from your theme configuration for only part of a declaration:

```css
.content-area {
  height: calc(100vh - theme('spacing.12'));
}
```

Since Tailwind uses the [nested object syntax](/docs/colors#nested-object-syntax) to define its default color palette, make sure to use dot notation to access the nested colors.

@component('_partials.tip-bad')
Don't use the dash syntax when accessing nested color values
@endcomponent

```css
.btn-blue {
  background-color: theme('colors.blue-500');
}
```

@component('_partials.tip-good')
Use dot notation to access nested color values
@endcomponent

```css
.btn-blue {
  background-color: theme('colors.blue.500');
}
```
