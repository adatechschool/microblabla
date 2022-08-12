@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-blackish-800']) }}>
    {{ $value ?? $slot }}
</label>
