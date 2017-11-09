---
extends: _layouts.documentation
title: "Whitespace &amp; Wrapping"
description: "Utilities for controlling the whitespace and wrapping of an element."
features:
  responsive: true
  customizable: true
  hover: false
  focus: false
---

@include('_partials.work-in-progress')

<div class="border-t border-grey-lighter">
  <table class="w-full text-left" style="border-collapse: collapse;">
    <colgroup>
      <col class="w-1/4">
      <col class="w-1/4">
      <col>
    </colgroup>
    <thead>
      <tr>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Class</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Properties</th>
        <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Description</th>
      </tr>
    </thead>
    <tbody class="align-baseline">
      <tr>
        <td class="p-2 border-t border-smoke font-mono text-xs text-purple-dark">.whitespace-normal</td>
        <td class="p-2 border-t border-smoke font-mono text-xs text-blue-dark">white-space: normal;</td>
        <td class="p-2 border-t border-smoke text-sm text-grey-darker">Cause text to wrap normally within an element.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.whitespace-no-wrap</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">white-space: nowrap;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Prevent text from wrapping within an element.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.whitespace-pre</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">white-space: pre;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Preserve line returns and spaces within an element.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.whitespace-pre-line</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">white-space: pre-line;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Preserve line returns but not spaces within an element.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.whitespace-pre-wrap</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">white-space: pre-wrap;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Preserve spaces but not line returns within an element.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.break-words</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">word-wrap: break-word;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Add line breaks mid-word if needed.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.break-normal</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">word-wrap: normal;</td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Only add line breaks at normal word break points.</td>
      </tr>
      <tr>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.truncate</td>
        <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">
          overflow: hidden;<br>
          text-overflow: ellipsis;<br>
          white-space: nowrap;
        </td>
        <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Truncate overflowing text with an ellipsis (<code>…</code>) if needed.</td>
      </tr>
    </tbody>
  </table>
</div>
