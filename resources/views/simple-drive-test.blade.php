<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Google Drive Test</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; background: #f0f0f0; }
        .container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; text-align: center; }
        .info { background: #e8f5e8; padding: 15px; border-radius: 5px; margin: 15px 0; border-left: 4px solid #4caf50; }
        .warning { background: #fff3cd; padding: 15px; border-radius: 5px; margin: 15px 0; border-left: 4px solid #ffc107; }
        textarea { width: 100%; height: 100px; padding: 15px; margin: 10px 0; font-family: monospace; font-size: 12px; border: 2px solid #ddd; border-radius: 4px; }
        button { background: #4caf50; color: white; padding: 15px 30px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; width: 100%; }
        button:hover { background: #45a049; }
        .link { color: #1976d2; text-decoration: underline; cursor: pointer; }
        .steps { background: #f8f9fa; padding: 15px; border-radius: 5px; margin: 15px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Simple Google Drive API Test</h1>
        
        <div class="info">
            <strong>✨ New Approach:</strong> This version bypasses Google Client library token validation and uses direct HTTP API calls!
        </div>

        <div class="warning">
            <strong>📋 Quick Steps:</strong>
            <ol>
                <li><span class="link" onclick="window.open('https://developers.google.com/oauthplayground/', '_blank')">Open OAuth Playground</span></li>
                <li>Select <strong>Drive API v3 → https://www.googleapis.com/auth/drive.file</strong></li>
                <li>Click <strong>"Authorize APIs"</strong> → Login → Grant permissions</li>
                <li>Click <strong>"Exchange authorization code for tokens"</strong></li>
                <li>Copy the <strong>Access token</strong> and paste below</li>
            </ol>
        </div>

        <form action="/simple-drive-token" method="POST">
            @csrf
            <label><strong>🔑 Google Access Token:</strong></label>
            <textarea name="token" placeholder="ya29.A0..." required></textarea>
            <button type="submit">🎯 Test Drive Upload (Direct API)</button>
        </form>

        <div class="info" style="margin-top: 20px;">
            <strong>💡 What's Different:</strong>
            <ul>
                <li>✅ Direct HTTP calls to Google Drive API</li>
                <li>✅ No Google Client library token validation</li>
                <li>✅ Better error messages</li>
                <li>✅ Token validation via API test call</li>
            </ul>
        </div>
    </div>
</body>
</html>
