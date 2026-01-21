<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background: #0f172a;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-width: 150px;
        }

        .content {
            padding: 30px;
            background: #fff;
        }

        .field {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #64748b;
            font-size: 0.9em;
            text-transform: uppercase;
        }

        .value {
            color: #0f172a;
            font-size: 1.1em;
        }

        .footer {
            background: #f8fafc;
            padding: 15px;
            text-align: center;
            font-size: 0.8em;
            color: #94a3b8;
        }

        .highlight {
            color: #0ea5e9;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- Referencing the logo we moved to public/images -->
            <img src="{{ asset('images/logo.png') }}" alt="Adil Steels Logo">
        </div>
        <div class="content">
            <h2 style="margin-top:0;">New Enquiry Received</h2>
            <p>You have received a new enquiry from the website.</p>

            <div style="background: #f1f5f9; padding: 20px; border-radius: 8px; margin: 20px 0;">
                <div class="field">
                    <div class="label">Name</div>
                    <div class="value">{{ $enquiry->name }}</div>
                </div>

                <div class="field">
                    <div class="label">Phone</div>
                    <div class="value highlights">{{ $enquiry->phone }}</div>
                </div>

                @if($enquiry->email)
                <div class="field">
                    <div class="label">Email</div>
                    <div class="value"><a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a></div>
                </div>
                @endif

                <div class="field">
                    <div class="label">Interested In</div>
                    <div class="value">{{ ucfirst($enquiry->subject ?? 'General Inquiry') }}</div>
                </div>

                @if($enquiry->message)
                <div class="field">
                    <div class="label">Message</div>
                    <div class="value" style="white-space: pre-wrap;">{{ $enquiry->message }}</div>
                </div>
                @endif

                <div class="field">
                    <div class="label">Source</div>
                    <div class="value">{{ ucfirst($enquiry->type) }} Form</div>
                </div>
            </div>

            <p style="margin-bottom: 0;">Please contact the client as soon as possible.</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Adil Steels & Glasses. All rights reserved.
        </div>
    </div>
</body>

</html>