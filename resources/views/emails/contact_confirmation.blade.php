<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ __('We received your message') }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 30px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 600px;
            margin: auto;
        }
        .header {
            font-size: 24px;
            color: #4f46e5;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .divider {
            height: 2px;
            background-color: #e5e7eb;
            margin: 20px 0;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
        }
        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #888;
        }
        .highlight {
            color: #4f46e5;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">{{ __('Hello') }}, {{ $name }}</div>
    <div class="divider"></div>
    <div class="content">
        <p>{{ __('Thanks for reaching out to us!') }}</p>
        <p>{{ __('We have received your message and will get back to you as soon as possible.') }}</p>
        <p>{{ __('Here\'s a copy of your message:') }}</p>

        <p><strong>{{ __('Subject') }}:</strong> {{ $subject }}</p>
        <p><strong>{{ __('Message') }}:</strong></p>
        <p>"{{ $formMessage }}"</p>
    </div>
    <div class="footer">
        — NexonX Support Team<br>
        <span class="highlight">support@nexonx.de</span>
    </div>
</div>
</body>
</html>
