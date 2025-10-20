<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Drive Test - Token Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .info {
            background: #e3f2fd;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border-left: 4px solid #2196f3;
        }
        .error {
            background: #ffebee;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border-left: 4px solid #f44336;
            color: #d32f2f;
        }
        textarea {
            width: 100%;
            height: 120px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: monospace;
            font-size: 12px;
        }
        button {
            background: #4caf50;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        button:hover {
            background: #45a049;
        }
        .oauth-btn {
            background: #1976d2;
            margin-right: 10px;
        }
        .oauth-btn:hover {
            background: #1565c0;
        }
        ol {
            text-align: left;
        }
        .steps {
            background: #fff3e0;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Google Drive API Test</h1>
        
        <div class="error">
            <strong>No Google Access Token Found</strong><br>
            You need a valid Google OAuth access token to test the Drive API integration.
        </div>

        <div class="info">
            <strong>Option 1 (Recommended):</strong> Use Google OAuth Flow
        </div>
        
        <a href="/auth/google">
            <button type="button" class="oauth-btn">Login with Google OAuth</button>
        </a>
        
        <div class="info" style="margin-top: 20px;">
            <strong>Option 2:</strong> Manually enter access token for testing
        </div>
        
        <div class="steps">
            <strong>To get a manual access token:</strong>
            <ol>
                <li>Go to <a href="https://developers.google.com/oauthplayground/" target="_blank">Google OAuth 2.0 Playground</a></li>
                <li>In "Step 1", find and select <strong>Drive API v3</strong> → <strong>https://www.googleapis.com/auth/drive.file</strong></li>
                <li>Click <strong>"Authorize APIs"</strong></li>
                <li>Login with your Google account and grant permissions</li>
                <li>In "Step 2", click <strong>"Exchange authorization code for tokens"</strong></li>
                <li>Copy the <strong>"Access token"</strong> value and paste it below</li>
            </ol>
        </div>

        <form action="/set-drive-token" method="POST">
            @csrf
            <label for="token"><strong>Google Access Token:</strong></label>
            <textarea name="token" id="token" placeholder="Paste your Google access token here..." required></textarea>
            <br>
            <button type="submit">Set Token & Test Drive Upload</button>
        </form>

        <div class="info" style="margin-top: 20px;">
            <strong>Note:</strong> This is a temporary testing method. In production, you should only use the OAuth flow.
        </div>
    </div>
</body>
</html>
