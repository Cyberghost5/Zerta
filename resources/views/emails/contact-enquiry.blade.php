<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>New Contact Enquiry</title></head>
<body style="font-family:Arial,sans-serif;background:#f8fafc;padding:32px;">
<div style="max-width:600px;margin:0 auto;background:#fff;border-radius:12px;overflow:hidden;border:1px solid #e2e8f0;">
    <div style="background:#150958;padding:28px 32px;">
        <h1 style="color:#8dc63f;margin:0;font-size:20px;">New Contact Enquiry</h1>
        <p style="color:#94a3b8;margin:6px 0 0;font-size:13px;">Received via zertahq.com contact form</p>
    </div>
    <div style="padding:32px;">
        <table style="width:100%;border-collapse:collapse;">
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;width:140px;">Name</td><td style="padding:8px 0;font-weight:600;color:#1e293b;">{{ $submission->full_name }}</td></tr>
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;">Email</td><td style="padding:8px 0;color:#1e293b;"><a href="mailto:{{ $submission->email }}">{{ $submission->email }}</a></td></tr>
            @if($submission->company)
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;">Company</td><td style="padding:8px 0;color:#1e293b;">{{ $submission->company }}</td></tr>
            @endif
            @if($submission->service)
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;">Service</td><td style="padding:8px 0;color:#1e293b;">{{ str_replace('_', ' ', $submission->service) }}</td></tr>
            @endif
            @if($submission->budget)
            <tr><td style="padding:8px 0;color:#64748b;font-size:13px;">Budget</td><td style="padding:8px 0;color:#1e293b;">{{ str_replace('_', ' ', $submission->budget) }}</td></tr>
            @endif
        </table>
        <hr style="border:none;border-top:1px solid #e2e8f0;margin:20px 0;">
        <p style="color:#64748b;font-size:13px;margin-bottom:10px;font-weight:600;">Message</p>
        <p style="color:#1e293b;font-size:15px;line-height:1.6;white-space:pre-wrap;">{{ $submission->message }}</p>
        <div style="margin-top:28px;padding:16px;background:#f0fdf4;border-radius:8px;border-left:3px solid #8dc63f;">
            <p style="margin:0;font-size:12px;color:#16a34a;">Reply directly to this email to respond to {{ $submission->first_name }}. Their reply-to address is {{ $submission->email }}.</p>
        </div>
    </div>
    <div style="padding:16px 32px;background:#f8fafc;border-top:1px solid #e2e8f0;text-align:center;">
        <p style="margin:0;font-size:11px;color:#94a3b8;">Zerta Technology · info@zertahq.com</p>
    </div>
</div>
</body>
</html>
