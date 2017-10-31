---
extends: _layouts.documentation
title: "Min-Width"
---

# Min-Width

<div class="text-xl text-slate-light mb-4">
    Utilities for setting the minimum width of an element
</div>

@include('_partials.feature-badges', [
    'responsive' => true,
    'customizable' => true,
    'hover' => false,
    'focus' => false
])

@include('_partials.work-in-progress')

<div class="border-t border-grey-lighter">
    <table class="w-full text-left" style="border-collapse: collapse;">
      <colgroup>
        <col class="w-1/5">
        <col class="w-1/3">
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
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.min-w-0</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">min-width: 0;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the element's minimum width to <code>0.25rem</code>.</td>
            </tr>
            <tr>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-purple-dark">.min-w-full</td>
                <td class="p-2 border-t border-smoke-light font-mono text-xs text-blue-dark">min-width: 100%;</td>
                <td class="p-2 border-t border-smoke-light text-sm text-grey-darker">Set the element's minimum width to <code>0.5rem</code>.</td>
            </tr>
        </tbody>
    </table>
</div>

