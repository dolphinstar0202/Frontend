---
extends: _layouts.documentation
title: "Line Height"
description: "Utilities for controlling the leading (line height) of an element."
features:
  responsive: true
  customizable: true
  hover: false
  focus: false
---

@include('_partials.work-in-progress')

<div class="border-t border-grey-lighter">
  <table class="w-full text-left table-collapse">
    <thead>
      <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Class</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Properties</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Description</th>
      </tr>
    </thead>
    <tbody class="align-baseline">
      <tr>
        <td class="p-2 border-t border-smoke font-mono text-xs text-purple-dark whitespace-no-wrap">.leading-none</td>
        <td class="p-2 border-t border-smoke font-mono text-xs text-blue-dark">line-height: 1;</td>
        <td class="p-2 border-t border-smoke text-sm text-grey-darker">Set the line height of an element to <code>1</code>.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark whitespace-no-wrap">.leading-tight</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">line-height: 1.25;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the line height of an element to <code>1.25</code>.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark whitespace-no-wrap">.leading-normal</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">line-height: 1.5;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the line height of an element to <code>1.5</code>.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark whitespace-no-wrap">.leading-loose</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">line-height: 2;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the line height of an element to <code>2</code>.</td>
      </tr>
    </tbody>
  </table>
</div>
