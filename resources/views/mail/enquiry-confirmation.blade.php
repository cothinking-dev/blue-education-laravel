@php
    $org = config('seo.organization');
@endphp

<p>Hi {{ $firstName }},</p>

<p>Thank you for getting in touch with Blue Education. We've received your enquiry and one of our team will be in touch shortly — usually within one business day.</p>

<p>For your records, here's a copy of what you sent:</p>

<table cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px; border: 1px solid #e5e7eb;">
    @if($enquiry->enquiry_type)
    <tr>
        <td style="font-weight: bold; vertical-align: top; width: 140px; background: #f9fafb;">Enquiry type</td>
        <td>{{ $enquiry->enquiry_type }}</td>
    </tr>
    @endif
    @if($enquiry->country)
    <tr>
        <td style="font-weight: bold; vertical-align: top; background: #f9fafb;">Country</td>
        <td>{{ $enquiry->country }}</td>
    </tr>
    @endif
    @if($enquiry->message)
    <tr>
        <td style="font-weight: bold; vertical-align: top; background: #f9fafb;">Message</td>
        <td>{{ $enquiry->message }}</td>
    </tr>
    @endif
</table>

<p style="margin-top: 24px;">If your question is urgent, please call us on
    <a href="tel:{{ str_replace(' ', '', $org['phone_national']) }}">{{ $org['phone_national'] }}</a> (Australia-wide)
    or <a href="tel:{{ str_replace(' ', '', $org['phone']) }}">{{ $org['phone'] }}</a> (Perth),
    or message us on WhatsApp at
    <a href="https://wa.me/{{ $org['whatsapp'] }}">+{{ $org['whatsapp'] }}</a>.
</p>

<p>Warm regards,<br>The Blue Education team</p>

<hr style="margin-top: 32px; border: none; border-top: 1px solid #e5e7eb;">

<p style="color: #6b7280; font-size: 13px;">
    {{ $org['name'] }} &middot; {{ $org['address']['street'] }}, {{ $org['address']['city'] }} {{ $org['address']['state'] }} {{ $org['address']['postal_code'] }}<br>
    <a href="{{ $org['url'] }}" style="color: #6b7280;">{{ $org['url'] }}</a>
</p>
