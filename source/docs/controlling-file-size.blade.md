---
extends: _layouts.documentation
title: "Controlling File Size"
description: "Strategies for keeping your generated CSS small and performant."
titleBorder: true
---

<h2 style="visibility: hidden; font-size: 0; margin: 0;">Overview</h2>

Using the default configuration, the development build of Tailwind CSS is 1996kb uncompressed, 144.6kb minified and compressed with [Gzip](https://www.gnu.org/software/gzip/), and 37.kb when compressed with [Brotli](https://github.com/google/brotli).

| Uncompressed | Minified |    Gzip | Brotli |
| ------------ | ------- | ------ | ----- |
|       1996.1kb |  1599.8kb |  144.6kb | 37.6kb |

This might sound enormous but **the development build is large by design**.

To make the development experience as productive as possible, Tailwind generates thousands of utility classes for you, most of which you probably won't actually use.

For example, Tailwind generates margin utilities for every size in your spacing scale, for every side of an element you might want to apply margin to, at every breakpoint you are using in your project. This leads to hundreds of different combinations that are all important to have available, but not all likely to be needed.

**When building for production, you should always use Tailwind's `purge` option to tree-shake unused styles and optimize your final build size.** When removing unused styles with Tailwind, it's very hard to end up with more than 10kb of compressed CSS.

## Writing purgeable HTML

Before getting started with the `purge` feature, it's important to understand how it works and build the correct mental model to make sure you never accidentally remove important styles when building for production.

[PurgeCSS](https://purgecss.com/) _(the library we use under the hood)_ is intentionally very naive in the way it looks for classes in your HTML. It doesn't try to parse your HTML and look for class attributes or dynamically execute your JavaScript — it simply looks for any strings in the entire file that match this regular expression:

```js
/[^<>"'`\s]*[^<>"'`\s:]/g
```

That means that **it is important to avoid dynamically creating class strings in your templates with string concatenation**, otherwise PurgeCSS won't know to preserve those classes.

@component('_partials.tip-bad')
Don't use string concatenation to create class names
@endcomponent

<pre class="language-html mt-4" v-pre><code>&lt;div :class="text-@{{ error ? 'red' : 'green' }}-600"&gt;&lt;/div&gt;</code></pre>

@component('_partials.tip-good')
Do dynamically select a complete class name
@endcomponent

<pre class="language-html mt-4" v-pre><code>&lt;div :class="@{{ error ? 'text-red-600' : 'text-green-600' }}"&gt;&lt;/div&gt;</code></pre>

As long as a class name appears in your template _in its entirety_, PurgeCSS will not remove it.

## Removing unused CSS

### Basic usage

To get started, provide an array of paths to all of your template files using the `purge` option:

```js
// tailwind.config.js
module.exports = {
  purge: [
    './src/**/*.html',
    './src/**/*.vue',
    './src/**/*.jsx',
  ],
  theme: {},
  variants: {},
  plugins: [],
}
```

**This list should include *any* files in your project that reference any of your styles by name.** For example, if you have a JS file in your project that dynamically toggles some classes in your HTML, you should make sure to include that file in this list.

Now whenever you compile your CSS with `NODE_ENV` set to `production`, Tailwind will automatically purge unused styles from your CSS.

### Enabling manually

If you want to manually control whether unused styles should be removed (instead of depending implicitly on the environment variable), you can use an object syntax and provide the `enabled` option, specifying your templates using the `content` option:

```js
// tailwind.config.js
module.exports = {
  purge: {
    enabled: true,
    content: ['./src/**/*.html'],
  },
  // ...
}
```

We recomend only removing unused styles in production, as removing them in development means you need to recompile any time you change your templates and compiling with PurgeCSS enabled is much slower.

### Removing all unused styles

By default, Tailwind will only remove unused utility styles that it itself generates. You can conceptually think of it working like this:

```css
@tailwind base;

/* Your own custom base styles */
h1 { /* ... */ }
a { /* ... */ }

@tailwind components;

/* Your own custom component styles */
.btn { /* ... */ }
.card { /* ... */ }

/* Start purging... */
@tailwind utilities;
/* Stop purging. */

/* Your own custom utilities */
.text-shadow-sm { /* ... */ }
```

This is to avoid accidentally removing styles that you might need but not directly reference in your templates, for example base styles for elements like `html` and `body`, or classes that are only referenced deep in your `node_modules` folder that are part of some other dependency.

If you really want to remove _all_ unused styles, use the `mode: 'all'` option and **be very careful** to provide the paths to _all_ files that might reference any classes or HTML elements:

```js
// tailwind.config.js
module.exports = {
  purge: {
    mode: 'all',
    content: [
      './src/**/*.js',
      './node_modules/next/dist/pages/**/*.js',
      './node_modules/next/dist/pages/**/*.ts',
      './node_modules/next/dist/pages/**/*.ts',
      './node_modules/pikaday/pikaday.js',
    ],
  },
  // ...
}
```

**We do not recommend this**, and generally find you get 99% of the file size benefits by sticking with the more conservative default approach.

### PurgeCSS options

If you need to pass any options directly to PurgeCSS, you can do so using `options`:

```js
// tailwind.config.js
module.exports = {
  purge: {
    content: ['./src/**/*.html'],

    // These options are passed through directly to PurgeCSS
    options: {
      whitelist: ['bg-red-500', 'px-4'],
    }
  },
  // ...
}
```

## Setting up PurgeCSS manually

Under the hood, Tailwind's `purge` feature is powered by a fantastic library called [PurgeCSS](https://purgecss.com/).

If you're using a version of Tailwind older than v1.4.0 and need to setup PurgeCSS manually, start by installing `@fullhuman/postcss-purgecss`:

```bash
# Using npm
npm install @fullhuman/postcss-purgecss --save-dev

# Using yarn
yarn add @fullhuman/postcss-purgecss -D
```

Next, add it as the last plugin in your `postcss.config.js` file:

```js
// postcss.config.js
const purgecss = require('@fullhuman/postcss-purgecss')({

  // Specify the paths to all of the template files in your project
  content: [
    './src/**/*.html',
    './src/**/*.vue',
    './src/**/*.jsx',
    // etc.
  ],

  // This is the function used to extract class names from your templates
  defaultExtractor: content => {
    // Capture as liberally as possible, including things like `h-(screen-1.5)`
    const broadMatches = content.match(/[^<>"'`\s]*[^<>"'`\s:]/g) || []

    // Capture classes within other delimiters like .block(class="w-1/2") in Pug
    const innerMatches = content.match(/[^<>"'`\s.()]*[^<>"'`\s.():]/g) || []

    return broadMatches.concat(innerMatches)
  }
})

module.exports = {
  plugins: [
    require('tailwindcss'),
    require('autoprefixer'),
    ...process.env.NODE_ENV === 'production'
      ? [purgecss]
      : []
  ]
}
```

Note that in this example, **we're only enabling PurgeCSS in production**. We recommend configuring PurgeCSS this way because it can be slow to run, and during development it's nice to have every class available so you don't need to wait for a rebuild every time you change some HTML.

Finally, we recommend only applying PurgeCSS to Tailwind's utility classes, and not to [base styles](https://tailwindcss.com/docs/adding-base-styles) or [component classes](https://tailwindcss.com/docs/extracting-components#extracting-css-components-with-apply). The easiest way to do this is to use PurgeCSS's [whitelisting](https://github.com/FullHuman/purgecss-docs/blob/master/whitelisting.md) feature to disable PurgeCSS for non-utility classes:

```css
/* purgecss start ignore */
@tailwind base;
@tailwind components;
/* purgecss end ignore */

@tailwind utilities;
```

This will ensure you don't accidentally purge important base styles when working with frameworks like Next.js, Nuxt, vue-cli, create-react-app, and others that hide their base HTML template somewhere in your `node_modules` directory.

### Understanding the regex

The `/[\w-/:]+(?<!:)/g` regular expression we recommend as a starting point matches all of the non-standard characters Tailwind uses by default, like `:` and `/`.

It also uses a negative lookbehind to make sure that if a string ends in `:`, the `:` is not considered part of the string. This is to ensure compatibility with the class object syntax supported by Vue and the [Classnames](https://github.com/JedWatson/classnames) library for React:

```html
<!-- Match `hidden`, not `hidden:` -->
<div :class="{ hidden: !isOpen, ... }"><!-- ... --></div>
```

It's important to note that because of the negative lookbehind in this regex, it's only compatible with Node.js 9.11.2 and above. If you need to use an older version of Node.js to build your assets, you can use this regular expression instead:


```diff
- /[\w-/:]+(?<!:)/g
+ /[\w-/:]*[\w-/:]/g
```

### Customizing the regex

If you're using any other special characters in your class names, make sure to update the regular expression to include those as well.

For example, if you have customized Tailwind to create classes like `w-50%`, you'll want to add `%` to the regular expression:

```diff
- /[\w-/:]+(?<!:)/g
+ /[\w-/:%]+(?<!:)/g
```


<hr class="my-16">

## Alternate approaches

If you can't use PurgeCSS for one reason or another, you can also reduce Tailwind's footprint by removing unused values from [your configuration file](/docs/configuration).

The default theme provides a very generous set of colors, breakpoints, sizes, margins, etc. to make sure that when you pull Tailwind down to prototype something, create a CodePen demo, or just try out the workflow, the experience is as enjoyable and fluid as possible.

We don't want you to have to go and write new CSS because we didn't provide enough padding helpers out of the box, or because you wanted to use an orange color scheme for your demo and we only gave you blue.

This comes with a trade-off though: the default build is significantly heavier than it would be on a project with a purpose-built configuration file.

Here are a few strategies you can use to keep your generated CSS small and performant.

### Limiting your color palette

The default theme includes a whopping [93 colors](/docs/colors) used for backgrounds, borders, text, and placeholders, all of which also have `hover:` and `focus` variants, as well as responsive variants at the five default screen sizes.

This means that by default, there are 5580 classes generated from this color palette out of 12,230 classes total in the entire default build.

Very few projects actually need this many colors, and removing colors you don't need can have a huge impact on the overall file size.

Here's how using a smaller color palette affects the final size:

| Colors         | Original | Minified |   Gzip | Brotli |
| -------------- | -------: | -------: | -----: | -----: |
| 93 _(default)_ |  783.5kb |  603.3kb | 78.0kb | 22.6kb |
| 50             |  530.2kb |  399.3kb | 56.6kb | 17.5kb |
| 25             |  381.6kb |  279.5kb | 44.1kb | 14.0kb |

### Removing unused breakpoints

Since almost every Tailwind utility is copied for every screen size, using fewer screen sizes can have a huge impact on the overall file size as well.

Here's how defining fewer screens affects the output:

| Breakpoints   | Original | Minified |   Gzip | Brotli |
| ------------- | -------: | -------: | -----: | -----: |
| 4 _(default)_ |  783.5kb |  603.3kb | 78.0kb | 22.6kb |
| 3             |  624.0kb |  481.3kb | 62.7kb | 20.8kb |
| 2             |  464.6kb |  359.4kb | 47.4kb | 19.2kb |
| 1             |  305.1kb |  237.5kb | 32.1kb | 17.6kb |

If you only need 3 screen sizes and 35 colors, you're down to 39.5kb after gzip _(14.6kb after Brotli!)_ without changing anything else.

### Disabling unused utilities and variants

If you don't expect to need a certain utility plugin in your project at all, you can disable it completely by setting it to `false` in the `corePlugins` section of your config file:

```js
// tailwind.config.js
module.exports = {
  // ...
  corePlugins: {
    float: false
  }
}
```

If you need a utility but don't need the responsive versions, set its variants to an empty array to generate 80% fewer classes:

```js
module.exports = {
  // ...
  variants: {
    appearance: []
  }
}
```

These are mostly small wins compared to limiting your color palette or using fewer breakpoints, but they can still add up.

