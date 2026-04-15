<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>New Job Application</title></head>
<body style="font-family:Arial,sans-serif;background:#f8fafc;padding:32px;">
<div style="max-width:600px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;border:1px solid #e2e8f0;">
    <div style="background:#150958;padding:28px 32px;">
        <h1 style="color:#8dc63f;margin:0;font-size:20px;">New Application</h1>
        <p style="color:#94a3b8;margin:6px 0 0;font-size:13px;">{{ $application->role }} &mdash; {{ $application->department }}</p>
    </div>
    <div style="padding:32px;">
        <table style="width:100%;border-collapse:collapse;">
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;width:140px;">Name</td><td style="padding:8px 0;font-weight:600;color:#1e293b;">{{ $application->name }}</td></tr>
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;">Email</td><td style="padding:8px 0;color:#1e293b;"><a href="mailto:{{ $application->email }}">{{ $application->email }}</a></td></tr>
            @if($application->phone)
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;">Phone</td><td style="padding:8px 0;color:#1e293b;">{{ $application->phone }}</td></tr>
            @endif
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;">LinkedIn</td><td style="padding:8px 0;color:#1e293b;"><a href="{{ $application->linkedin }}">{{ $application->linkedin }}</a></td></tr>
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;">Role</td><td style="padding:8px 0;color:#1e293b;">{{ $application->role }}</td></tr>
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;">Department</td><td style="padding:8px 0;color:#1e293b;">{{ $application->department }}</td></tr>
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;">CV</td><td style="padding:8px 0;color:#1e293b;">Attached / stored on server</td></tr>
        </table>

        @if($application->extra_data)
        <hr style="border:none;border-top:1px solid #e2e8f0;margin:20px 0;">
        <p style="color:#64748b;font-size:13px;margin-bottom:10px;font-weight:600;">Additional Details</p>
        <table style="width:100%;border-collapse:collapse;">
            @foreach($application->extra_data as $key => $value)
            @if($value)
            <tr><td style="padding:6px 0;color:#64748b;font-size:13px;width:180px;">{{ ucwords(str_replace('_', ' ', $key)) }}</td><td style="padding:6px 0;color:#1e293b;font-size:13px;">{{ $value }}</td></tr>
            @endif
            @endforeach
        </table>
        @endif

        <hr style="border:none;border-top:1px solid #e2e8f0;margin:20px 0;">
        <p style="color:#64748b;font-size:13px;margin-bottom:10px;font-weight:600;">Why Zerta?</p>
        <p style="color:#1e293b;font-size:15px;line-height:1.6;white-space:pre-wrap;">{{ $application->cover_note }}</p>
        <div style="margin-top:28px;padding:16px;background:#f0fdf4;border-radius:8px;border-left:3px solid #8dc63f;">
            <p style="margin:0;font-size:12px;color:#16a34a;">Reply to this email to contact {{ $application->name }} at {{ $application->email }}.</p>
        </div>
    </div>
    <div style="padding:16px 32px;background:#f8fafc;border-top:1px solid #e2e8f0;text-align:center;">
        <p style="margin:0;font-size:11px;color:#94a3b8;">Zerta Technology · info@zertahq.com</p>
    </div>
</div>
</body>
</html>
