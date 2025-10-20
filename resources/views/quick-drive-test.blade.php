<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Drive Test - Simple Token Input</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; }
        .container { background: #f9f9f9; padding: 20px; border-radius: 8px; }
        h1 { color: #333; }
        .info { background: #e3f2fd; padding: 15px; border-radius: 5px; margin: 15px 0; }
        .steps { background: #fff3e0; padding: 15px; border-radius: 5px; margin: 15px 0; }
        textarea { width: 100%; height: 80px; padding: 10px; margin: 10px 0; font-family: monospace; }
        button { background: #4caf50; color: white; padding: 12px 24px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #45a049; }
        .quick-link { color: #1976d2; text-decoration: underline; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quick Google Drive Test</h1>
        
        <div class="info">
            <strong>Option 1:</strong> Get fresh token from OAuth Playground
            <br><br>
            <span class="quick-link" onclick="window.open('https://developers.google.com/oauthplayground/', '_blank')">
                → Open OAuth Playground (Click Here)
            </span>
        </div>

        <div class="steps">
            <strong>Quick Steps:</strong>
            <ol>
                <li>In OAuth Playground, select <strong>Drive API v3 → https://www.googleapis.com/auth/drive.file</strong></li>
                <li>Click <strong>"Authorize APIs"</strong> and login</li>
                <li>Click <strong>"Exchange authorization code for tokens"</strong></li>
                <li>Copy the <strong>Access token</strong> and paste below</li>
            </ol>
        </div>

        <form action="/set-drive-token" method="POST">
            @csrf
            <label><strong>Paste Access Token:</strong></label>
            <textarea name="token" placeholder="ya29...." required></textarea>
            <br>
            <button type="submit">Test Drive Upload</button>
        </form>

        <div class="info" style="margin-top: 20px;">
            <strong>Note:</strong> Tokens from OAuth Playground expire in ~1 hour, which is perfect for testing.
        </div>
    </div>
</body>
</html>
