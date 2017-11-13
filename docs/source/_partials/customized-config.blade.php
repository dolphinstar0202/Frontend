<div class="border-2 border-smoke radius-md mb-8">
  <div class="bg-smoke-lighter p-4 font-mono text-sm">
    <div class="whitespace-pre text-grey-dark">{</div>
    <div class="whitespace-pre text-grey-light">  // ...</div>
    <div class="whitespace-pre text-grey-dark"><span class="text-purple-dark">  {{ $key }}</span>: {</div>
    <div>{!! collect(explode("\n", $slot))->map(function ($line) {
      if (starts_with($line, '+')) {
        return '<div class="text-blue-dark"><span class="text-blue-light">+</span>&nbsp;&nbsp;&nbsp;' . e(trim(substr($line, 1))) . '</div>';
      }
      if (starts_with($line, '-')) {
        return '<div class="text-grey"><span class="text-grey">-</span>&nbsp;&nbsp;&nbsp;' . e(trim(substr($line, 1))) . '</div>';
      }
      return '<div class="text-grey-darker">&nbsp;&nbsp;&nbsp;&nbsp;' . e(trim($line)) . '</div>';
    })->implode("\n") !!}</div>
    <div class="whitespace-pre text-grey-dark">  }</div>
    <div class="whitespace-pre text-grey-dark">}</div>
  </div>
</div>
