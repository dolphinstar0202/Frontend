---
extends: _layouts.documentation
title: "Customizing Colors"
description: "Customizing the default color palette for your project."
titleBorder: true
---

<h2 style="font-size: 0" class="invisible m-0 -mb-6">Overview</h2>

The `theme.colors` section of your `tailwind.config.js` file allows you to override Tailwind's [default color palette](#default-color-palette).

```js
// tailwind.config.js
module.exports = {
  theme: {
    colors: {
      indigo: '#5c6ac4',
      blue: '#007ace',
      red: '#de3618',
    }
  }
}
```

By default these colors are automatically shared by the `textColor`, `borderColor`, and `backgroundColor` utilities, so the above configuration would generate classes like `.text-indigo`, `.border-blue`, and `.bg-red`.

### Nested object syntax

You can define your colors as a simple list of key-value pairs as we've done above, or using a nested object notation where the nested keys are added to the base color name as modifiers:

```js
// tailwind.config.js
module.exports = {
  theme: {
    colors: {
      indigo: {
        lighter: '#b3bcf5',
        default: '#5c6ac4',
        dark: '#202e78',
      }
    }
  }
}
```

Like many other places in Tailwind, the `default` key is special and means "no modifier", so this configuration would generate classes like `.text-indigo-lighter`, `.text-indigo`, and `.text-indigo-dark`.

Note that you need to use dot notation to access nested colors when using the `theme()` function — the colors are only converted to dash-case for the actual CSS class names.

@component('_partials.tip-bad')
Don't use the dash syntax to access nested color values with theme()
@endcomponent

```css
.btn-blue {
  background-color: theme('colors.blue-500');
}
```

@component('_partials.tip-good')
Use dot notation to access nested color values with theme()
@endcomponent

```css
.btn-blue {
  background-color: theme('colors.blue.500');
}
```

---

## Overriding the default color palette

As described in the [theme documentation](/docs/theme#overriding-the-default-theme), if you'd like to override the default color palette, you can do so using the `theme.colors` section of your `tailwind.config.js` file:

```js
// tailwind.config.js
module.exports = {
  theme: {
    colors: {
      indigo: '#5c6ac4',
      blue: '#007ace',
      red: '#de3618',
    }
  }
}
```

This will disable Tailwind's default color palette and generate classes like `bg-indigo`, `text-blue`, and `border-red` instead.

---

## Extending the default palette


As described in the [theme documentation](/docs/theme#extending-the-default-theme), if you'd like to extend the default color palette, you can do so using the `theme.extend.colors` section of your `tailwind.config.js` file:

```js
// tailwind.config.js
module.exports = {
  theme: {
    extend: {
      colors: {
        'regal-blue': '#243c5a',
      }
    }
  }
}
```

This will generate classes like `bg-regal-blue` in addition to all of Tailwind's default colors.

---

## Overriding a default color

If you'd like to override one of Tailwind's default colors but preserve the rest, simply provide the new values in the `theme.extend.colors` section of your `tailwind.config.js` file.

For example, here we've replaced the default cool grays with a neutral gray palette:

```js
// tailwind.config.js
module.exports = {
  theme: {
    extend: {
      colors: {
        gray: {
          '100': '#f5f5f5',
          '200': '#eeeeee',
          '300': '#e0e0e0',
          '400': '#bdbdbd',
          '500': '#9e9e9e',
          '600': '#757575',
          '700': '#616161',
          '800': '#424242',
          '900': '#212121',
        }
      }
    }
  }
}
```

### Overriding a single shade

Since values in the `theme.extend` section of your config file are only merged shallowly, overriding a single shade is slightly more complicated.

The easiest option is to import the default theme and [spread](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_syntax) in the color you want to customize along with the new shade value:

```js
// tailwind.config.js
const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    extend: {
      colors: {
        blue: {
          ...colors.blue,
          '900': '#1e3656',
        }
      }
    }
  }
}
```

---

## Disabling a default color

If you'd like to disable a default color because you aren't using it in your project, the easiest approach is to just build a new color palette that references the default theme.

For example, this `tailwind.config.js` file excludes teal, orange, and pink, but includes the rest of the default colors:

```js
// tailwind.config.js
const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      yellow: colors.yellow,
      green: colors.green,
      blue: colors.blue,
      indigo: colors.indigo,
      purple: colors.purple,
    }
  }
}
```

You could also use [destructuring](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment) to simplify the above example if you're comfortable with it:

```js
// tailwind.config.js
const { colors: { teal, orange, pink, ...colors } } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    colors: colors
  }
}
```

---

## Naming your colors

Tailwind uses literal color names _(like red, green, etc.)_ and a numeric scale _(where 100 is light and 900 is dark)_ by default. This ends up being fairly practical for most projects, but there are good reasons to use other naming conventions as well.

For example, if you're working on a project that needs to support multiple themes, it might make sense to use more abstract names like `primary` and `secondary`:

```js
// tailwind.config.js
module.exports = {
  theme: {
    colors: {
      primary: '#5c6ac4',
      secondary: '#ecc94b',
      // ...
    }
  }
}
```

You can configure those colors explicitly like we have above, or you could even pull in Tailwind's default colors and alias the ones you need:

```js
// tailwind.config.js
const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    colors: {
      primary: colors.indigo,
      secondary: colors.yellow,
      neutral: colors.gray,
    }
  }
}
```

You could even define these colors using CSS custom properties (variables) to make it easy to switch themes on the client:

```js
// tailwind.config.js
module.exports = {
  theme: {
    colors: {
      primary: 'var(--color-primary)',
      secondary: 'var(--color-secondary)',
      // ...
    }
  }
}
```

```css
/* In your CSS */
:root {
  --color-primary: #5c6ac4;
  --color-secondary: #ecc94b;
  /* ... */
}

@tailwind base;
@tailwind components;
@tailwind utilities;
```

---

## Generating custom color palettes

A common question we get is "how do I generate the 100–900 shades of my own custom colors?".

Bad news: color is complicated and we've yet to find a tool that does a good job generating these sorts of color palettes. We picked all of Tailwind's default colors by hand, balancing them by eye. Sorry!

---

## Default color palette

Tailwind includes a generous palette of great-looking, well-balanced colors that are perfect for prototyping or for kicking off a brand new project.

<div class="flex flex-wrap -mx-2 mt-0">
  <div class="px-2 w-full relative">
    <h3 class="markdown no-toc mb-4 mt-8">Black & White</h3>
    <div class="-mx-2 -mt-5 flex flex-wrap">
      <div class="w-1/2 md:w-1/3 px-2">
        <div class="flex items-center mt-5">
          <div class="h-12 w-12 rounded-lg shadow-inner bg-black"></div>
          <div class="ml-2 text-gray-800 text-xs leading-none pl-1">
            <div class="font-semibold">Black</div>
            <div class="mt-1 font-normal opacity-75">#000000</div>
          </div>
        </div>
      </div>
      <div class="w-1/2 md:w-1/3 px-2">
        <div class="flex items-center mt-5">
          <div class="h-12 w-12 rounded-lg shadow-inner bg-white"></div>
          <div class="ml-2 text-gray-800 text-xs leading-none pl-1">
            <div class="font-semibold">White</div>
            <div class="mt-1 font-normal opacity-75">#FFFFFF</div>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('_partials.color-palette', [
  'colorName' => 'Gray',
  'color' => 'gray',
  'breakpoint' => '500',
])

@include('_partials.color-palette', [
  'colorName' => 'Red',
  'color' => 'red',
  'breakpoint' => '500',
])

@include('_partials.color-palette', [
  'colorName' => 'Orange',
  'color' => 'orange',
  'breakpoint' => '500',
])

@include('_partials.color-palette', [
  'colorName' => 'Yellow',
  'color' => 'yellow',
  'breakpoint' => '500',
])

@include('_partials.color-palette', [
  'colorName' => 'Green',
  'color' => 'green',
  'breakpoint' => '400',
])

@include('_partials.color-palette', [
  'colorName' => 'Teal',
  'color' => 'teal',
  'breakpoint' => '400',
])

@include('_partials.color-palette', [
  'colorName' => 'Blue',
  'color' => 'blue',
  'breakpoint' => '400',
])

@include('_partials.color-palette', [
  'colorName' => 'Indigo',
  'color' => 'indigo',
  'breakpoint' => '400',
])

@include('_partials.color-palette', [
  'colorName' => 'Purple',
  'color' => 'purple',
  'breakpoint' => '400',
])

@include('_partials.color-palette', [
  'colorName' => 'Pink',
  'color' => 'pink',
  'breakpoint' => '400',
])
</div>
