---
extends: _layouts.documentation
title: "Customizing Spacing"
description: "Customizing the default spacing scale for your project."
titleBorder: true
---

The `theme.spacing` section of your `tailwind.config.js` file allows you to override Tailwind's [default spacing/sizing scale](#default-spacing-scale).

```js
// tailwind.config.js
module.exports = {
  theme: {
    spacing: {
      '1': '8px',
      '2': '12px',
      '3': '16px',
      '4': '24px',
      '5': '32px',
      '6': '48px',
    }
  }
}
```

By default the spacing scale is shared by the [padding](/docs/padding), [margin](/docs/margin), [width](/docs/width), and [height](/docs/height) utilities so the above configuration would generate classes like `.p-2`, `.mt-3`, `.w-5`, `.h-6`, etc.

---

## Overriding the default spacing scale

As described in the [theme documentation](/docs/theme#overriding-the-default-theme), if you'd like to override the default spacing scale, you can do so using the `theme.spacing` section of your `tailwind.config.js` file:

```js
// tailwind.config.js
module.exports = {
  theme: {
    spacing: {
      sm: '8px',
      md: '12px',
      lg: '16px',
      xl: '24px',
    }
  }
}
```

This will disable Tailwind's default spacing scale and generate classes like `p-sm`, `m-md`, `w-lg`, and `h-xl` instead.

---

## Extending the default spacing scale


As described in the [theme documentation](/docs/theme#extending-the-default-theme), if you'd like to extend the default spacing scale, you can do so using the `theme.extend.spacing` section of your `tailwind.config.js` file:

```js
// tailwind.config.js
module.exports = {
  theme: {
    extend: {
      spacing: {
        '72': '18rem',
        '84': '21rem',
        '96': '24rem',
      }
    }
  }
}
```

This will generate classes like `p-72`, `m-84`, and `h-96` in addition to all of Tailwind's default spacing/sizing utilities.

---

## Default spacing scale

By default, Tailwind includes a generous and comprehensive numeric spacing scale. The values are proportional, so `16` is twice as much spacing as `8` for example. One spacing unit is equal to `0.25rem`, which translates to `4px` by default in common browsers.

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Size</th>
      <th>Pixels</th>
      <th class="hidden sm:table-cell"></th>
    </tr>
  </thead>
  <tbody>
    @foreach (collect([0 => '0', 'px' => '1px'])->union($page->config['theme']['spacing']->except(['0', 'px'])) as $name => $width)
    <tr>
      <td>{{ $name }}</td>
      <td>{{ $width }}</td>
      <td>{{ strpos($width, 'px') === false ? str_replace('rem', '', $width) * 16  . 'px' : $width }}</td>
      <td class="hidden sm:table-cell">
        <div class="h-4 bg-gray-400 w-{{ $name }}"></div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
