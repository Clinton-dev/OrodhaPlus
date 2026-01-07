@props(['label', 'name'])

<div class="mb-4">
    <x-forms.label :label :name />

    {{ $slot }}

    <x-forms.error error="{{ $errors->first($name)  }}" />
</div>


{{--<x-forms.field label="Task name"  name="name" >--}}
{{--    <x-forms.input name="name"/>--}}
{{--</x-forms.field>--}}
