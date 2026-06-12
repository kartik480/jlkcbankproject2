<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Successful - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/site-nav.js') }}" defer></script>
    <style>
        .pay-result-page { background: #f4f6fb; min-height: 100vh; display: flex; flex-direction: column; }
        .pay-result-wrap {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 24px 60px;
        }
        .pay-result-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 40px rgba(0,0,0,.10);
            padding: 56px 48px;
            max-width: 480px;
            width: 100%;
            text-align: center;
        }
        .pay-result-icon {
            width: 72px; height: 72px;
            border-radius: 50%;
            background: #dcfce7;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 24px;
            font-size: 2rem;
        }
        .pay-result-card h1 { font-size: 1.6rem; font-weight: 700; color: #16a34a; margin: 0 0 10px; }
        .pay-result-card p  { color: #555; font-size: .95rem; margin: 0 0 28px; }
        .pay-detail-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
            font-size: .88rem;
        }
        .pay-detail-row:last-of-type { border-bottom: none; }
        .pay-detail-label { color: #888; }
        .pay-detail-value { font-weight: 600; color: #1a1a2e; }
        .pay-back-btn {
            display: inline-block;
            margin-top: 32px;
            background: #0d6efd;
            color: #fff;
            padding: 13px 40px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: .95rem;
        }
    </style>
</head>
<body class="pay-result-page">
@include('partials.site-nav', ['navActive' => ''])

<div class="pay-result-wrap">
    <div class="pay-result-card">
        <div class="pay-result-icon">✓</div>
        <h1>Payment Successful!</h1>
        <p>Your payment has been received. Thank you for your transaction.</p>

        @if(isset($payment))
        @if(!empty($payment['payment_id']))
        <div class="pay-detail-row">
            <span class="pay-detail-label">Payment ID</span>
            <span class="pay-detail-value">{{ $payment['payment_id'] }}</span>
        </div>
        @endif
        @if(!empty($payment['amount']))
        <div class="pay-detail-row">
            <span class="pay-detail-label">Amount Paid</span>
            <span class="pay-detail-value">₹{{ $payment['amount'] }}</span>
        </div>
        @endif
        @endif

        <a href="{{ url('/') }}" class="pay-back-btn">Back to Home</a>
    </div>
</div>
</body>
</html>
