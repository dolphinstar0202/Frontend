---
extends: _layouts.documentation
title: "Adding Base Styles"
description: "Best practices for adding your own global base styles on top of Tailwind."
titleBorder: true
---

Base (or global) styles are the styles at the beginning of a stylesheet that set useful defaults for basic HTML elements like `<a>` tags, headings, etc. or apply opinionated resets like the popular [box-sizing reset](https://www.paulirish.com/2012/box-sizing-border-box-ftw/).

Tailwind includes a useful set of base styles out of the box that we call [Preflight](/docs/preflight), which is really just [normalize.css](https://github.com/necolas/normalize.css/) plus a thin layer of additional more opinionated styles.

Preflight is a great starting point for most projects, but if you'd ever like to add your own additional base styles, here are some recommendations for doing it idiomatically.

---

## Using classes in your HTML

If you just want to apply some global styling to the `html` or `body` elements, consider just adding existing classes to those elements in your HTML instead of writing new CSS:

```html
<!doctype html>
<html lang="en" class="text-gray-900 antialiased leading-tight">
  <!-- ... -->
  <body class="min-h-screen bg-gray-100">
    <!-- ... -->
  </body>
</html>
```

---

## Using CSS

If you want to apply some base styles to specific elements, the easiest way is to simply add them in your CSS.

Define any of your own custom base styles directly after `@@tailwind base` and before `@@tailwind components` to avoid specificity issues:

```css
@@tailwind base;

h1 {
  @@apply text-2xl;
}
h2 {
  @@apply text-xl;
}
h3 {
  @@apply text-lg;
}
a {
  @@apply text-blue-600 underline;
}

@@tailwind components;

@@tailwind utilities;
```

It's a good idea to use [@@apply](/docs/functions-and-directives#apply) or [theme()](/docs/functions-and-directives#theme) to define these styles to avoid introducing new magic values or accidentally deviating from your design system.

### @@font-face rules

You can use the same approach to add your `@font-face` rules for any custom fonts you are using:

```css
@@tailwind base;

@font-face {
  font-family: Proxima Nova;
  font-weight: 400;
  src: url(/fonts/proxima-nova/400-regular.woff) format("woff");
}
@font-face {
  font-family: Proxima Nova;
  font-weight: 500;
  src: url(/fonts/proxima-nova/500-medium.woff) format("woff");
}

@@tailwind components;

@@tailwind utilities;
```

---

## Using a plugin

You can also add base styles by [writing a plugin](/docs/plugins#adding-base-styles) and using the `addBase` function:

```js
// tailwind.config.js
module.exports = {
  plugins: [
    function({ addBase, config }) {
      addBase({
        'h1': { fontSize: config('theme.fontSize.2xl') },
        'h2': { fontSize: config('theme.fontSize.xl') },
        'h3': { fontSize: config('theme.fontSize.lg') },
      })
    },
  ]
}
```

Any styles you added using `addBase` will automatically be included in your `@@tailwind base` styles.

### When to use a plugin

In general, it's simpler to add base styles to your project in CSS than it is to write a plugin.

You should prefer a plugin if:

- You want to publish your base styles publicly and make them easy for other users to install.
- You want to re-use your base styles across multiple projects in your company and prefer sharing JS dependencies instead of CSS dependencies.
