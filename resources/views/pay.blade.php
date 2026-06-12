<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pay Now - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/site-nav.js') }}" defer></script>
    <style>
        .pay-page { background: #f4f6fb; min-height: 100vh; padding-top: 80px; }

        .pay-hero {
            background: linear-gradient(135deg, #0d6efd 0%, #0a4fcf 100%);
            padding: 60px 24px 48px;
            text-align: center;
            color: #fff;
        }
        .pay-hero h1 { font-size: 2rem; font-weight: 700; margin: 0 0 10px; }
        .pay-hero p  { font-size: 1rem; opacity: .85; margin: 0; }

        .pay-main {
            max-width: 580px;
            margin: -32px auto 60px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 32px rgba(0,0,0,.10);
            padding: 40px 40px 48px;
        }

        .pay-section-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1a1a2e;
            margin: 0 0 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .pay-section-title::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e5e9f0;
        }

        .pay-purpose-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 28px;
        }
        .pay-purpose-card {
            border: 2px solid #e5e9f0;
            border-radius: 10px;
            padding: 14px 16px;
            cursor: pointer;
            transition: border-color .2s, background .2s;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .pay-purpose-card input[type="radio"] { display: none; }
        .pay-purpose-card .pay-purpose-icon { font-size: 1.4rem; }
        .pay-purpose-card .pay-purpose-label { font-size: .88rem; font-weight: 600; color: #333; }
        .pay-purpose-card .pay-purpose-sub   { font-size: .75rem; color: #888; }
        .pay-purpose-card:hover { border-color: #0d6efd; background: #f0f5ff; }
        .pay-purpose-card.selected { border-color: #0d6efd; background: #eef3ff; }

        .pay-field { margin-bottom: 20px; }
        .pay-label {
            display: block;
            font-size: .82rem;
            font-weight: 600;
            color: #555;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: .04em;
        }
        .pay-input {
            width: 100%;
            border: 1.5px solid #d1d9e6;
            border-radius: 8px;
            padding: 12px 14px;
            font-size: .95rem;
            color: #1a1a2e;
            box-sizing: border-box;
            outline: none;
            transition: border-color .2s;
        }
        .pay-input:focus { border-color: #0d6efd; }

        .pay-amount-wrap { position: relative; }
        .pay-amount-prefix {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            font-size: .95rem;
            font-weight: 700;
            color: #555;
        }
        .pay-amount-wrap .pay-input { padding-left: 32px; }

        .pay-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

        .pay-error {
            background: #fff0f0;
            border: 1px solid #fca5a5;
            border-radius: 8px;
            padding: 12px 16px;
            margin-bottom: 20px;
            font-size: .88rem;
            color: #dc2626;
        }

        .pay-submit-btn {
            width: 100%;
            background: #16a34a;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 15px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            margin-top: 8px;
            letter-spacing: .03em;
            transition: background .2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .pay-submit-btn:hover { background: #15803d; }

        .pay-secure-note {
            text-align: center;
            font-size: .78rem;
            color: #888;
            margin-top: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        @media (max-width: 600px) {
            .pay-main { padding: 28px 20px 36px; margin: -20px 16px 40px; }
            .pay-purpose-grid { grid-template-columns: 1fr; }
            .pay-row { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body class="pay-page">

@include('partials.site-nav', ['navActive' => ''])

<div class="pay-hero">
    <h1>Make a Payment</h1>
    <p>Secure online payments powered by Instamojo</p>
</div>

<div class="pay-main">

    @if ($errors->any())
        <div class="pay-error">
            @foreach ($errors->all() as $err)
                <div>{{ $err }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('payment.initiate') }}" method="POST" id="payForm">
        @csrf

        {{-- Hidden purpose field updated by card selection --}}
        <input type="hidden" name="purpose" id="purposeInput" value="{{ old('purpose', '') }}">

        <div class="pay-section-title">Select Payment Purpose</div>

        <div class="pay-purpose-grid">
            @php
            $purposes = [
                ['value' => 'Fixed Deposit',         'icon' => '🏦', 'label' => 'Fixed Deposit',         'sub' => 'FD instalment'],
                ['value' => 'Recurring Deposit',     'icon' => '💰', 'label' => 'Recurring Deposit',     'sub' => 'RD instalment'],
                ['value' => 'Loan EMI',              'icon' => '🏠', 'label' => 'Loan EMI',              'sub' => 'Home / Auto / Business'],
                ['value' => 'Monthly Income Scheme', 'icon' => '📈', 'label' => 'Monthly Income',        'sub' => 'MIS instalment'],
                ['value' => 'Daily Deposit',         'icon' => '📅', 'label' => 'Daily Deposit',         'sub' => 'DDS instalment'],
                ['value' => 'Membership Fee',        'icon' => '🪪', 'label' => 'Membership Fee',        'sub' => 'New / Renewal'],
            ];
            @endphp

            @foreach ($purposes as $p)
            <label class="pay-purpose-card {{ old('purpose') === $p['value'] ? 'selected' : '' }}"
                   onclick="selectPurpose(this, '{{ $p['value'] }}')">
                <input type="radio" name="_purpose_radio" value="{{ $p['value'] }}"
                    {{ old('purpose') === $p['value'] ? 'checked' : '' }}>
                <span class="pay-purpose-icon">{{ $p['icon'] }}</span>
                <div>
                    <div class="pay-purpose-label">{{ $p['label'] }}</div>
                    <div class="pay-purpose-sub">{{ $p['sub'] }}</div>
                </div>
            </label>
            @endforeach
        </div>

        <div class="pay-section-title">Your Details</div>

        <div class="pay-row">
            <div class="pay-field">
                <label class="pay-label" for="pay-name">Full Name</label>
                <input class="pay-input" type="text" id="pay-name" name="name"
                    value="{{ old('name') }}" placeholder="Your full name" required>
            </div>
            <div class="pay-field">
                <label class="pay-label" for="pay-phone">Phone Number</label>
                <input class="pay-input" type="tel" id="pay-phone" name="phone"
                    value="{{ old('phone') }}" placeholder="10-digit number" required>
            </div>
        </div>

        <div class="pay-field">
            <label class="pay-label" for="pay-email">Email Address</label>
            <input class="pay-input" type="email" id="pay-email" name="email"
                value="{{ old('email') }}" placeholder="you@example.com" required>
        </div>

        <div class="pay-field">
            <label class="pay-label" for="pay-amount">Amount (₹)</label>
            <div class="pay-amount-wrap">
                <span class="pay-amount-prefix">₹</span>
                <input class="pay-input" type="number" id="pay-amount" name="amount"
                    value="{{ old('amount') }}" placeholder="Enter amount" min="1" required>
            </div>
        </div>

        <button type="submit" class="pay-submit-btn">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Proceed to Pay Securely
        </button>

        <div class="pay-secure-note">
            <svg width="13" height="13" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
            Secured by Instamojo &mdash; UPI, Cards, Net Banking &amp; Wallets accepted
        </div>
    </form>
</div>

<script>
function selectPurpose(card, value) {
    document.querySelectorAll('.pay-purpose-card').forEach(c => c.classList.remove('selected'));
    card.classList.add('selected');
    document.getElementById('purposeInput').value = value;
}
// Restore selection on validation error
document.addEventListener('DOMContentLoaded', function () {
    const val = document.getElementById('purposeInput').value;
    if (val) {
        document.querySelectorAll('.pay-purpose-card').forEach(function (c) {
            const radio = c.querySelector('input[type="radio"]');
            if (radio && radio.value === val) c.classList.add('selected');
        });
    }
});
</script>

</body>
</html>
