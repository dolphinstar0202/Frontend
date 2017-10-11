---
extends: _layouts.markdown
title: "Padding"
---

# Padding

<div class="subnav">
    <a class="subnav-link" href="#usage">Usage</a>
    <a class="subnav-link" href="#responsive">Responsive</a>
    <a class="subnav-link" href="#customizing">Customizing</a>
</div>

<h2 id="usage">Using</h2>

The syntax below is combined to create a system for padding and margins. For example, `.pt-2` would add padding to the top of the element to the value of `0.5rem` and `.mx-0` would make the horizontal margin zero.

<div class="flex items-start mt-8 text-sm">
    <div class="pr-12">
        <div class="mb-3 text-dark-soft text-uppercase">Class</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">p</code> Padding</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">m</code> Margin</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">pull</code> Negative Margin</div>
    </div>
    <div class="pl-12 pr-12 border-l">
        <div class="mb-3 text-dark-soft"><span class="text-uppercase">Position</span> <span class="text-dark-softer text-xs">(optional)</span></div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">t</code> Top</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">r</code> Right</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">b</code> Bottom</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">l</code> Left</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">x</code> Horizontal</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">y</code> Vertical</div>
    </div>
    <div class="pl-12 border-l">
        <div class="mb-3 text-dark-soft text-uppercase">Space</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">0</code> 0</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">1</code> 0.25rem</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">2</code> 0.5rem</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">3</code> 0.75rem</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">4</code> 1rem</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">6</code> 1.5rem</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 mono border rounded">8</code> 2rem</div>
    </div>
</div>

<h2 id="customizing">Customizing the spacing scale</h2>

You can customize the margin and padding utilities using the `@sizing-scale` variable. Please note that the entire scale must be redefined. It's not possible to add a new value to the existing scale.

```less
// The default sizing scale
@sizing-scale:
  '1' 0.25rem,
  '2' 0.5rem,
  '3' 0.75rem,
  '4' 1rem,
  '6' 1.5rem,
  '8' 2rem,
  '12' 3rem,
  '16' 4rem,
;
```

By default the `@sizing-scale` is automatically applied to the margin, negative margin (pull) and padding scales. However, it's possible to customize each scale individually using the `@margin-scale`, `@pull-scale` and `@padding-scale` variables.

```less
// Override the margin scale
@margin-scale:
  '1' 0.25rem,
  '2' 0.5rem,
  // ...
;

// Override the pull scale
@pull-scale:
  '1' 0.25rem,
  '2' 0.5rem,
  // ...
;

// Override the padding scale
@padding-scale:
  '1' 0.25rem,
  '2' 0.5rem,
  // ...
;
```

<h2 id="responsive">Responsive spacing utilities</h2>

The spacing utilities can also be used with <a href="/responsive">responsive</a> prefixes:

```html
<div class="p-1 sm:p-2 md:p-3 lg:p-4"></div>
<div class="m-1 sm:m-2 md:m-3 lg:m-4"></div>
<div class="pull-1 sm:pull-2 md:pull-3 lg:pull-4"></div>
```

```less
div {
  .screen(lg, {
    .mt-6;
  });
}
```

