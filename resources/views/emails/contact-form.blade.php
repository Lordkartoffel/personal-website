<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Form Message</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 20px;
        }
        .label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }
        .value {
            background: white;
            padding: 15px;
            border-radius: 4px;
            border-left: 4px solid #667eea;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Message</h1>
        <p>You have received a new message from your personal website</p>
    </div>
    
    <div class="content">
        <div class="field">
            <span class="label">Name:</span>
            <div class="value">{{ $data['name'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Email:</span>
            <div class="value">{{ $data['email'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Message:</span>
            <div class="value">{{ $data['message'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Date & Time:</span>
            <div class="value">{{ now()->format('F j, Y \a\t g:i A') }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>This message was sent from your personal website contact form.</p>
        <p>You can reply directly to this email to respond to the sender.</p>
    </div>
</body>
</html> 