@twillRepeaterTitle('Accordion item')
@twillRepeaterMax('10')

@php
    $selectOptions = [
        [
            'value' => 'facebook',
            'label' => 'Facebook'
        ],
        [
            'value' => 'instagram',
            'label' => 'Instagram'
        ],
        [
            'value' => 'youtube',
            'label' => 'Youtube'
        ],
        [
            'value' => 'x',
            'label' => 'X ( former Twitter )'
        ]
    ];
@endphp

<x-twill::select
    name="platform"
    label="Name"
    autocomplete="off"
    placeholder="Select social media platform"
    :options="$selectOptions"
/>

<x-twill::input
    name="link"
    label="Link"
/>
