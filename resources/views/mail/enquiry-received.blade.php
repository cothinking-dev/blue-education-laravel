<h2>New Enquiry Received</h2>

<table cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;">
    <tr>
        <td style="font-weight: bold; vertical-align: top; width: 160px;">Name</td>
        <td>{{ $enquiry->full_name }}</td>
    </tr>
    <tr>
        <td style="font-weight: bold; vertical-align: top;">Email</td>
        <td><a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a></td>
    </tr>
    @if($enquiry->phone)
    <tr>
        <td style="font-weight: bold; vertical-align: top;">Phone</td>
        <td>{{ $enquiry->phone }}</td>
    </tr>
    @endif
    @if($enquiry->country)
    <tr>
        <td style="font-weight: bold; vertical-align: top;">Country</td>
        <td>{{ $enquiry->country }}</td>
    </tr>
    @endif
    @if($enquiry->enquiry_type)
    <tr>
        <td style="font-weight: bold; vertical-align: top;">Enquiry Type</td>
        <td>{{ $enquiry->enquiry_type }}</td>
    </tr>
    @endif
    @if($enquiry->preferred_language)
    <tr>
        <td style="font-weight: bold; vertical-align: top;">Preferred Language</td>
        <td>{{ $enquiry->preferred_language }}</td>
    </tr>
    @endif
    @if($enquiry->message)
    <tr>
        <td style="font-weight: bold; vertical-align: top;">Message</td>
        <td>{{ $enquiry->message }}</td>
    </tr>
    @endif
</table>

<p style="margin-top: 16px; color: #666; font-size: 14px;">
    Submitted on {{ $enquiry->created_at->format('j M Y \\a\\t g:i A') }}
</p>
