<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Failed - JAYALAKSHMI MUTUALLY AIDED COOPERATIVE</title>
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
            max-width: 440px;
            width: 100%;
            text-align: center;
        }
        .pay-result-icon {
            width: 72px; height: 72px;
            border-radius: 50%;
            background: #fee2e2;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 24px;
            font-size: 2rem;
        }
        .pay-result-card h1 { font-size: 1.6rem; font-weight: 700; color: #dc2626; margin: 0 0 10px; }
        .pay-result-card p  { color: #555; font-size: .95rem; margin: 0 0 28px; }
        .pay-retry-btn {
            display: inline-block;
            background: #16a34a;
            color: #fff;
            padding: 13px 40px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: .95rem;
            margin-right: 12px;
        }
        .pay-home-btn {
            display: inline-block;
            background: #f1f5f9;
            color: #333;
            padding: 13px 32px;
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
        <div class="pay-result-icon">✕</div>
        <h1>Payment Failed</h1>
        <p>We were unable to process your payment. No amount has been charged. Please try again or contact us for help.</p>
        <div>
            <a href="{{ route('payment.form') }}" class="pay-retry-btn">Try Again</a>
            <a href="{{ url('/') }}" class="pay-home-btn">Home</a>
        </div>
    </div>
</div>
</body>
</html>
