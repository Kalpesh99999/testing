@component('mail::message')
# AutomationTubeCentral

Hi {{ $data['name'] }},<br>

Thank you for contacting us. We have received your query and will respond as soon as possible. <br><br>

Message received:<br>
{{ $data['contactMessage'] }}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
The AutomationTubeCentral Team
@endcomponent
