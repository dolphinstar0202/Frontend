---
extends: _layouts.documentation
title: "Positioning"
---

# Positioning

<div class="text-xl text-slate-light mb-4">
    Utilities for controlling how an element is positioned in the DOM.
</div>

@include('_partials.feature-badges', [
    'responsive' => true,
    'customizable' => false,
    'hover' => false,
    'focus' => false
])

<div class="border-t border-grey-lighter">
    <table class="w-full text-left" style="border-collapse: collapse;">
        <thead>
          <tr>
              <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Class</th>
              <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Properties</th>
              <th class="w-3/5 text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Description</th>
          </tr>
        </thead>
        <tbody class="align-baseline">
            <tr>
                <td class="p-2 border-t border-smoke font-mono text-xs text-purple-dark">.static</td>
                <td class="p-2 border-t border-smoke font-mono text-xs text-blue-dark">position: static;</td>
                <td class="p-2 border-t border-smoke text-sm text-grey-darker">Position an element according to the normal flow of the document.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.fixed</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">position: fixed;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Position an element relative to the browser window.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.absolute</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">position: absolute;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Position an element outside of the normal flow of the document, causing neighboring elements to act as if the element doesn't exist.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.relative</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">position: relative;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Position an element according to the normal flow of the document.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.pin-t</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">top: 0;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Anchor absolutely positioned element to the top edge of the nearest positioned parent.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.pin-r</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">right: 0;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Anchor absolutely positioned element to the right edge of the nearest positioned parent.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.pin-b</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">bottom: 0;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Anchor absolutely positioned element to the bottom edge of the nearest positioned parent.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.pin-l</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">left: 0;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Anchor absolutely positioned element to the left edge of the nearest positioned parent.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.pin-y</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">
                    top: 0;<br>
                    bottom: 0;
                </td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Anchor absolutely positioned element to the top and bottom edges of the nearest positioned parent.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.pin-x</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">
                    right: 0;<br>
                    left: 0;
                </td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Anchor absolutely positioned element to the left and right edges of the nearest positioned parent.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.pin</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">
                    top: 0;<br>
                    right: 0;<br>
                    bottom: 0;<br>
                    left: 0;<br>
                    width: 100%;<br>
                    height: 100%;
                </td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Anchor absolutely positioned element to all the edges of the nearest positioned parent.</td>
            </tr>
        </tbody>
    </table>
</div>

### Static <span class="ml-2 font-semibold text-slate-light text-sm uppercase tracking-wide">Default</span>

Use `.static` to position an element according to the normal flow of the document.

Any offsets will be ignored and the element will not act as a position reference for absolutely positioned children.

@component('_partials.code-sample')
<div class="relative bg-smoke p-4">
  <div class="static h-32 bg-smoke-darker p-4 text-slate-darker">
    <p>Static parent</p>
    <div class="absolute pin-b pin-l bg-slate-dark p-4 text-smoke">
      <p>Absolute child</p>
    </div>
  </div>
</div>

@slot('code')
<div class="static bg-smoke-darker">
  Static parent
  <div class="absolute pin-b pin-l bg-slate-dark">
    Absolute child
  </div>
</div>
@endslot
@endcomponent

### Relative

Use `.relative` to position an element according to the normal flow of the document.

Offsets are calculated relative to the element's normal position and the element *will* act as a position reference for absolutely positioned children.

@component('_partials.code-sample')
<div class="relative bg-smoke p-4">
  <div class="relative h-32 bg-smoke-darker p-4 text-slate-darker">
    <p>Relative parent</p>
    <div class="absolute pin-b pin-l bg-slate-dark p-4 text-smoke">
      <p>Absolute child</p>
    </div>
  </div>
</div>

@slot('code')
<div class="relative bg-smoke-darker">
  Relative parent
  <div class="absolute pin-b pin-l bg-slate-dark">
    Absolute child
  </div>
</div>
@endslot
@endcomponent

### Absolute

Use `.absolute` to position an element *outside* of the normal flow of the document, causing neighboring elements to act as if the element doesn't exist.

Offsets are calculated relative to the nearest parent that has a position other than `static`, and the element *will* act as a position reference for other absolutely positioned children.

@component('_partials.code-sample')

<p class="text-sm text-slate-light mb-1">With static positioning</p>
<div class="relative bg-smoke px-4 pt-2 pb-4 mb-6">
  <p class="mb-2 text-slate">Relative parent</p>
  <div class="static bg-smoke-dark p-4 text-slate">
    <p class="mb-2">Static parent</p>
    <div class="static pin-b pin-l bg-slate-dark p-4 text-smoke inline-block">
      <p>Static child</p>
    </div>
    <div class="bg-smoke p-4 text-slate inline-block">
      <p>Static sibling</p>
    </div>
  </div>
</div>

<p class="text-sm text-slate-light mb-1">With absolute positioning</p>
<div class="relative bg-smoke px-4 pt-2 pb-4">
  <p class="mb-2 text-slate">Relative parent</p>
  <div class="static bg-smoke-dark p-4 text-slate">
    <p class="mb-2">Static parent</p>
    <div class="absolute pin-t pin-r bg-slate-dark p-4 text-smoke inline-block">
      <p>Absolute child</p>
    </div>
    <div class="bg-smoke p-4  text-slate inline-block">
      <p>Static sibling</p>
    </div>
  </div>
</div>

@slot('code')
<div class="relative bg-smoke">
  Relative parent
  <div class="static bg-smoke-darker">
    Static parent
    <div class="absolute pin-t pin-r bg-slate-dark">
      Absolute child
    </div>
    <div class="bg-smoke inline-block">
      Static sibling
    </div>
  </div>
</div>
@endslot
@endcomponent

### Fixed

Use `.fixed` to position an element relative to the browser window.

Offsets are calculated relative to the viewport and the element *will* act as a position reference for absolutely positioned children.

@component('_partials.code-sample')
<div class="rounded-b overflow-hidden max-w-md mx-auto mt-4 mb-4">
  <div class="rounded-t border-t border-l border-r border-smoke bg-smoke-light flex px-4 py-3">
    <div class="mr-6">
      <span class="inline-block rounded-full bg-smoke-dark h-3 w-3 mr-1"></span>
      <span class="inline-block rounded-full bg-smoke-dark h-3 w-3 mr-1"></span>
      <span class="inline-block rounded-full bg-smoke-dark h-3 w-3"></span>
    </div>
    <div class="flex-1 bg-white border border-smoke rounded mr-4"></div>
  </div>
  <div class="relative bg-smoke h-64">

    <!-- Hey fellow nerd! Yes, we're using position absolute instead of position fixed in the demo; it's the best way we could come up with to demonstrate how position fixed works without totally jacking up the layout of the entire documentation site. Forgive us! 😄 -->

    <div class="absolute pin-l pin-r pin-t bg-slate-dark text-smoke z-10 px-4 py-3">
      Fixed child
      <div class="absolute pin-t pin-b pin-r px-4 py-3 bg-smoke-dark text-slate-dark">
        Absolute child
      </div>
    </div>
    <div class="absolute pin overflow-auto pt-16 px-4 pb-4">
      <p class="mb-4">Scroll me!</p>

      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. </p>

      <p class="mb-4">Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>

      <p class="mb-4">Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. </p>

      <p class="mb-4">Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. </p>

      <p class="mb-4">Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo. Sed pretium blandit orci. Ut eu diam at pede suscipit sodales. Aenean lectus elit, fermentum non, convallis id, sagittis at, neque. </p>

      <p class="mb-4">Nullam mauris orci, aliquet et, iaculis et, viverra vitae, ligula. Nulla ut felis in purus aliquam imperdiet. Maecenas aliquet mollis lectus. Vivamus consectetuer risus et tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. </p>

      <p class="mb-4">Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. </p>

      <p>Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. </p>
    </div>
  </div>
</div>

@slot('code')
<div class="bg-smoke pt-16">
  <div class="fixed bg-smoke-darker">
    Fixed child
    <div class="absolute pin-t pin-r bg-slate-dark">
      Absolute child
    </div>
  </div>

  Scroll me!

  Lorem ipsum...
</div>
@endslot
@endcomponent

### Pinning edges

Use the `.pin{-edge?}` utilities to anchor absolutely positioned elements against any of the edges of the nearest positioned parent.

Combined with Tailwind's [spacing utilities](/docs/spacing), you'll probably find that these are all you need to precisely control absolutely positioned elements.

<div class="flex items-start mt-8 text-sm leading-none mb-8">
    <div class="pr-12">
        <div class="mb-3 text-slate uppercase">Class</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 font-mono border rounded">pin</code></div>
    </div>
    <div class="pl-12 pr-12 border-l">
        <div class="mb-3 text-slate"><span class="uppercase">Edge</span> <span class="text-slate-light text-xs">(optional)</span></div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 font-mono border rounded bg-smoke-light">&nbsp;</code> All <em class="text-xs text-slate-light">(default)</em></div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 font-mono border rounded">t</code> Top</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 font-mono border rounded">r</code> Right</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 font-mono border rounded">b</code> Bottom</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 font-mono border rounded">l</code> Left</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 font-mono border rounded">y</code> Top and Bottom</div>
        <div><code class="inline-block my-1 mr-1 px-2 py-1 font-mono border rounded">x</code> Left and Right</div>
    </div>
</div>

@component('_partials.code-sample')
<div class="flex justify-around mb-8">
  <div>
    <p class="text-center text-sm text-slate-light mb-1">.pin-x.pin-t</p>
    <div class="relative h-24 w-24 bg-smoke">
      <div class="absolute pin-x pin-t h-8 bg-slate"></div>
    </div>
  </div>
  <div>
    <p class="text-center text-sm text-slate-light mb-1">.pin-y.pin-r</p>
    <div class="relative h-24 w-24 bg-smoke">
      <div class="absolute pin-y pin-r w-8 bg-slate"></div>
    </div>
  </div>
  <div>
    <p class="text-center text-sm text-slate-light mb-1">.pin-x.pin-b</p>
    <div class="relative h-24 w-24 bg-smoke">
      <div class="absolute pin-x pin-b h-8 bg-slate"></div>
    </div>
  </div>
  <div>
    <p class="text-center text-sm text-slate-light mb-1">.pin-y.pin-l</p>
    <div class="relative h-24 w-24 bg-smoke">
      <div class="absolute pin-y pin-l w-8 bg-slate"></div>
    </div>
  </div>
  <div>
    <p class="text-center text-sm text-slate-light mb-1">.pin</p>
    <div class="relative h-24 w-24 bg-smoke">
      <div class="absolute pin bg-slate"></div>
    </div>
  </div>
</div>
<div class="flex justify-around">
  <div>
    <p class="text-center text-sm text-slate-light mb-1">.pin-l.pin-t</p>
    <div class="relative h-24 w-24 bg-smoke">
      <div class="absolute pin-l pin-t h-8 w-8 bg-slate"></div>
    </div>
  </div>
  <div>
    <p class="text-center text-sm text-slate-light mb-1">.pin-t.pin-r</p>
    <div class="relative h-24 w-24 bg-smoke">
      <div class="absolute pin-t pin-r h-8 w-8 bg-slate"></div>
    </div>
  </div>
  <div>
    <p class="text-center text-sm text-slate-light mb-1">.pin-r.pin-b</p>
    <div class="relative h-24 w-24 bg-smoke">
      <div class="absolute pin-r pin-b h-8 w-8 bg-slate"></div>
    </div>
  </div>
  <div>
    <p class="text-center text-sm text-slate-light mb-1">.pin-b.pin-l</p>
    <div class="relative h-24 w-24 bg-smoke">
      <div class="absolute pin-b pin-l h-8 w-8 bg-slate"></div>
    </div>
  </div>
  <div class="relative h-24 w-24 opacity-0"></div>
</div>

@slot('code')
<!-- Span top edge -->
<div class="relative h-24 w-24 bg-smoke">
  <div class="absolute pin-x pin-t h-8 bg-slate"></div>
</div>

<!-- Span right edge -->
<div class="relative h-24 w-24 bg-smoke">
  <div class="absolute pin-y pin-r w-8 bg-slate"></div>
</div>

<!-- Span bottom edge -->
<div class="relative h-24 w-24 bg-smoke">
  <div class="absolute pin-x pin-b h-8 bg-slate"></div>
</div>

<!-- Span left edge -->
<div class="relative h-24 w-24 bg-smoke">
  <div class="absolute pin-y pin-l bg-slate"></div>
</div>

<!-- Fill entire parent -->
<div class="relative h-24 w-24 bg-smoke">
  <div class="absolute pin bg-slate"></div>
</div>

<!-- Pin to top left corner -->
<div class="relative h-24 w-24 bg-smoke">
  <div class="absolute pin-l pin-t h-8 w-8 bg-slate"></div>
</div>

<!-- Pin to top right corner -->
<div class="relative h-24 w-24 bg-smoke">
  <div class="absolute pin-t pin-r h-8 w-8 bg-slate"></div>
</div>

<!-- Pin to bottom right corner -->
<div class="relative h-24 w-24 bg-smoke">
  <div class="absolute pin-b pin-r h-8 w-8 bg-slate"></div>
</div>

<!-- Pin to bottom left corner -->
<div class="relative h-24 w-24 bg-smoke">
  <div class="absolute pin-b pin-l h-8 w-8 bg-slate"></div>
</div>
@endslot
@endcomponent

## Responsive

To position an element only at a specific breakpoint, add a `{screen}:` prefix to any existing positioning utility. For example, adding the class `md:absolute` to an element would apply the `absolute` utility at medium screen sizes and above, and adding `lg:pin-y` would apply `pin-y` at large screens and above.

For more information about Tailwind's responsive design features, check out the [Responsive Design](/workflow/responsive-design) documentation.

@component('_partials.responsive-code-sample')
@slot('none')
<div class="relative h-32 bg-smoke p-4">
  <div class="relative bg-slate-dark p-4 text-smoke-dark">Responsive element</div>
</div>
@endslot

@slot('sm')
<div class="relative h-32 bg-smoke p-4">
  <div class="absolute pin-b pin-l bg-slate-dark p-4 text-smoke-dark">Responsive element</div>
</div>
@endslot

@slot('md')
<div class="relative h-32 bg-smoke p-4">
  <div class="absolute pin-t pin-x bg-slate-dark p-4 text-smoke-dark">Responsive element</div>
</div>
@endslot

@slot('lg')
<div class="relative h-32 bg-smoke p-4">
  <div class="absolute pin-r pin-y bg-slate-dark p-4 text-smoke-dark">Responsive element</div>
</div>
@endslot

@slot('xl')
<div class="relative h-32 bg-smoke p-4">
  <div class="absolute pin-b pin-x bg-slate-dark p-4 text-smoke-dark">Responsive element</div>
</div>
@endslot

@slot('code')
<div class="relative h-32 bg-smoke p-4">
  <div class="none:relative sm:absolute sm:pin-b sm:pin-l md:pin-t md:pin-x lg:pin-r lg:pin-y xl:pin-b xl:pin-x"></div>
</div>
@endslot
@endcomponent
