---
extends: _layouts.documentation
title: "Utility-First"
description: "Building complex components from a constrained set of primitive utilities."
titleBorder: true
---

<h2 style="font-size: 0" class="invisible m-0 -mb-6">Overview</h2>

Traditionally, whenever you need to style something on the web, you write CSS.

@component('_partials.tip-bad')
Using a traditional approach where custom designs require custom CSS
@endcomponent

@component('_partials.code-sample', ['class' => 'bg-gray-200 px-8 py-12'])
<div class="max-w-sm mx-auto flex p-6 bg-white rounded-lg shadow-xl">
  <div class="flex-shrink-0">
    <svg class="h-12 w-12" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="a"><stop stop-color="#2397B3" offset="0%"/><stop stop-color="#13577E" offset="100%"/></linearGradient><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="b"><stop stop-color="#73DFF2" offset="0%"/><stop stop-color="#47B1EB" offset="100%"/></linearGradient></defs><g fill="none" fill-rule="evenodd"><path d="M28.872 22.096c.084.622.128 1.258.128 1.904 0 7.732-6.268 14-14 14-2.176 0-4.236-.496-6.073-1.382l-6.022 2.007c-1.564.521-3.051-.966-2.53-2.53l2.007-6.022A13.944 13.944 0 0 1 1 24c0-7.331 5.635-13.346 12.81-13.95A9.967 9.967 0 0 0 13 14c0 5.523 4.477 10 10 10a9.955 9.955 0 0 0 5.872-1.904z" fill="url(#a)" transform="translate(1 1)"/><path d="M35.618 20.073l2.007 6.022c.521 1.564-.966 3.051-2.53 2.53l-6.022-2.007A13.944 13.944 0 0 1 23 28c-7.732 0-14-6.268-14-14S15.268 0 23 0s14 6.268 14 14c0 2.176-.496 4.236-1.382 6.073z" fill="url(#b)" transform="translate(1 1)"/><path d="M18 17a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM24 17a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM30 17a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" fill="#FFF"/></g></svg>
  </div>
  <div class="ml-6 pt-1">
    <div class="text-xl text-gray-900 leading-tight">ChitChat</div>
    <p class="text-base text-gray-600 leading-normal">You have a new message!</p>
  </div>
</div>

@slot('code')
<div class="chat-notification">
  <div class="chat-notification-logo-wrapper">
    <img class="chat-notification-logo" src="/img/logo.svg" alt="ChitChat Logo">
  </div>
  <div class="chat-notification-content">
    <h4 class="chat-notification-title">ChitChat</h4>
    <p class="chat-notification-message">You have a new message!</p>
  </div>
</div>

<style>
  .chat-notification {
    display: flex;
    max-width: 24rem;
    margin: 0 auto;
    padding: 1.5rem;
    border-radius: 0.5rem;
    background-color: #fff;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  }
  .chat-notification-logo-wrapper {
    flex-shrink: 0;
  }
  .chat-notification-logo {
    height: 3rem;
    width: 3rem;
  }
  .chat-notification-content {
    margin-left: 1.5rem;
    padding-top: 0.25rem;
  }
  .chat-notification-title {
    color: #1a202c;
    font-size: 1.25rem;
    line-height: 1.25;
  }
  .chat-notification-message {
    color: #718096;
    font-size: 1rem;
    line-height: 1.5;
  }
</style>
@endslot
@endcomponent

With Tailwind, you style elements by applying pre-existing classes directly in your HTML.

@component('_partials.tip-good')
Using utility classes to build custom designs without writing CSS
@endcomponent

@component('_partials.code-sample', ['class' => 'bg-gray-200 px-8 py-12'])
<div class="max-w-sm mx-auto flex p-6 bg-white rounded-lg shadow-xl">
  <div class="flex-shrink-0">
    <svg class="h-12 w-12" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="a"><stop stop-color="#2397B3" offset="0%"/><stop stop-color="#13577E" offset="100%"/></linearGradient><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="b"><stop stop-color="#73DFF2" offset="0%"/><stop stop-color="#47B1EB" offset="100%"/></linearGradient></defs><g fill="none" fill-rule="evenodd"><path d="M28.872 22.096c.084.622.128 1.258.128 1.904 0 7.732-6.268 14-14 14-2.176 0-4.236-.496-6.073-1.382l-6.022 2.007c-1.564.521-3.051-.966-2.53-2.53l2.007-6.022A13.944 13.944 0 0 1 1 24c0-7.331 5.635-13.346 12.81-13.95A9.967 9.967 0 0 0 13 14c0 5.523 4.477 10 10 10a9.955 9.955 0 0 0 5.872-1.904z" fill="url(#a)" transform="translate(1 1)"/><path d="M35.618 20.073l2.007 6.022c.521 1.564-.966 3.051-2.53 2.53l-6.022-2.007A13.944 13.944 0 0 1 23 28c-7.732 0-14-6.268-14-14S15.268 0 23 0s14 6.268 14 14c0 2.176-.496 4.236-1.382 6.073z" fill="url(#b)" transform="translate(1 1)"/><path d="M18 17a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM24 17a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM30 17a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" fill="#FFF"/></g></svg>
  </div>
  <div class="ml-6 pt-1">
    <div class="text-xl text-gray-900 leading-tight">ChitChat</div>
    <p class="text-base text-gray-600 leading-normal">You have a new message!</p>
  </div>
</div>

@slot('code')
<div class="max-w-sm mx-auto flex p-6 bg-white rounded-lg shadow-xl">
  <div class="flex-shrink-0">
    <img class="h-12 w-12" src="/img/logo.svg" alt="ChitChat Logo">
  </div>
  <div class="ml-6 pt-1">
    <h4 class="text-xl text-gray-900 leading-tight">ChitChat</h4>
    <p class="text-base text-gray-600 leading-normal">You have a new message!</p>
  </div>
</div>
@endslot
@endcomponent


In the example above, we've used:

- Tailwind's [flexbox](/docs/display#flex) and [padding](/docs/padding) utilities (`flex`, `flex-shrink-0`, and `p-6`) to control the overall card layout
- The [max-width](/docs/max-width) and [margin](/docs/margin) utilities (`max-w-sm` and `mx-auto`) to constrain the card width and center it horizontally
- The [background color](/docs/background-color), [border radius](/docs/border-radius), and [box-shadow](/docs/box-shadow) utilities (`bg-white`, `rounded-lg`, and `shadow-xl`) to style the card's appearance
- The [width](/docs/width) and [height](/docs/height) utilities (`w-12` and `h-12`) to size the logo image
- The [margin](/docs/margin) and [padding](/docs/padding) utilities (`ml-6` and `pt-1`) to position the card text
- The [font size](/docs/font-size), [text color](/docs/text-color), and [line-height](/docs/line-height) utilities (`text-xl`, `text-gray-900`, `leading-tight`, etc.) to style the card text

...allowing us to implement a completely custom component design, without writing a single line of custom CSS.

Now I know what you're thinking, _"this is an atrocity, what a horrible mess!"_ and you're right, it's kind of ugly. In fact it's just about impossible to think this is a good idea the first time you see it — **you have to actually try it**.

But once you've actually built something this way, you'll quickly notice some really important benefits:

- **You aren't wasting energy inventing class names**. No more adding silly class names like `sidebar-inner-wrapper` just to be able to style something, and no more agonizing over the perfect abstract name for something that's really just a flex container.
- **Your CSS stops growing**. Using a traditional approach, your CSS files get bigger every time you add a new feature. With utilities, everything is reusable so you rarely need to write new CSS.
- **Making changes feels safer**. CSS is global and you never know what you're breaking when you make a change. Classes in your HTML are local, so you can change them without worrying about something else breaking.

When you realize how productive you can be working exclusively in HTML with predefined utility classes, working any other way will feel like torture.

---

## Why not just use inline styles?

A common reaction to this approach is wondering, "isn't this just inline styles?" and in some ways it is — you're applying styles directly to elements instead of assigning them a class name and then styling that class.

But using utility classes has a few important advantages over inline styles:

- **Designing with constraints**. Using inline styles, every value is a magic number. With utilities, you're choosing styles from a predefined [design system](/docs/theme), which makes it much easier to build visually consistent UIs.
- **Responsive design**. You can't use media queries in inline styles, but you can use Tailwind's [responsive utilities](/docs/responsive-design) to build fully responsive interfaces easily.
- **Pseudo-classes**. Inline styles can't target states like hover or focus, but Tailwind's [pseudo-class variants](/docs/pseudo-class-variants) make it easy to style those states with utility classes.

This component is fully responsive and includes a button with hover styles, and is built entirely with utility classes:

@component('_partials.code-sample', ['class' => 'p-8 bg-gray-200'])
<div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
  <div class="sm:flex sm:items-center px-6 py-4">
    <img class="block mx-auto sm:mx-0 sm:flex-shrink-0 h-16 sm:h-24 rounded-full" src="/img/erin-lindford.jpg" alt="Woman's Face">
    <div class="mt-4 sm:mt-0 sm:ml-4 text-center sm:text-left">
      <p class="text-xl leading-tight">Erin Lindford</p>
      <p class="text-sm leading-tight text-gray-600">Product Engineer</p>
      <div class="mt-4">
        <button class="text-purple-500 hover:text-white hover:bg-purple-500 border border-purple-500 text-xs font-semibold rounded-full px-4 py-1 leading-normal">Message</button>
      </div>
    </div>
  </div>
</div>
@endcomponent

---

## Maintainability concerns

The biggest maintainability concern when using a utility-first approach is managing commonly repeated utility combinations.

This is easily solved by [extracting components](/docs/extracting-components), either as template partials/JavaScript components, or using Tailwind's `@@apply` feature to create abstractions around common utility patterns.

@component('_partials.code-sample', ['class' => 'text-center'])
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Button
</button>

@slot('code')
<!-- Using utilities -->
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Button
</button>

<!-- Extracting classes using @@apply -->
<button class="btn btn-blue">
  Button
</button>

<style>
  .btn {
    @@apply font-bold py-2 px-4 rounded;
  }
  .btn-blue {
    @@apply bg-blue-500 text-white;
  }
  .btn-blue:hover {
    @@apply bg-blue-700;
  }
</style>
@endslot
@endcomponent

Aside from that, maintaining a utility-first CSS project turns out to be a lot easier than maintaining a large CSS codebase, simply because HTML is so much easier to maintain than CSS. Large companies like GitHub, Heroku, Kickstarter, Twitch, Segment, and more are using this approach with great success.

If you'd like to hear about others' experiences with this approach, check out the following resources:

- [By The Numbers: A Year and a Half with Atomic CSS](https://medium.com/@johnpolacek/by-the-numbers-a-year-and-half-with-atomic-css-39d75b1263b4) by John Polacek
- [Building a Scalable CSS Architecture](https://blog.algolia.com/redesigning-our-docs-part-4-building-a-scalable-css-architecture/) by Sarah Dayan of Algolia
- [Diana Mounter on using utility classes at GitHub](http://www.fullstackradio.com/75), a podcast interview

For even more, check out [The Case for Atomic/Utility-First CSS](https://johnpolacek.github.io/the-case-for-atomic-css/), curated by [John Polacek](https://twitter.com/johnpolacek).
