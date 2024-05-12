@props(["term" => "", "description" => ""])

<div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
    <dt class="text-md leading-6">{{ $term }}</dt>
    <dd class="text-md mt-1 leading-6 text-gray-500 sm:col-span-2 sm:mt-0">
        {{ $description }}
    </dd>
</div>
