@extends('user.layouts.home')
@section('content')
    <style>
        /* Custom styles for email verification page */
        .verification-container {
            min-height: 100vh;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .verification-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            padding: 2.5rem;
            max-width: 28rem;
            width: 100%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .verification-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #0891b2, #ec4899);
        }

        .email-icon {
            width: 4rem;
            height: 4rem;
            background: linear-gradient(135deg, #0891b2, #06b6d4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            position: relative;
        }

        .email-icon::after {
            content: '✉';
            font-size: 1.5rem;
            color: white;
        }

        .verification-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.75rem;
            line-height: 1.2;
        }

        .verification-message {
            color: #6b7280;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .status-message {
            background: linear-gradient(135deg, #dcfce7, #bbf7d0);
            border: 1px solid #86efac;
            color: #166534;
            padding: 1rem;
            border-radius: 0.75rem;
            margin-bottom: 1.5rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .status-message::before {
            content: '✓';
            background: #22c55e;
            color: white;
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: bold;
            flex-shrink: 0;
        }

        .resend-form {
            margin-bottom: 1.5rem;
        }

        .resend-button {
            background: linear-gradient(135deg, #0891b2, #06b6d4);
            color: white;
            border: none;
            padding: 0.875rem 2rem;
            border-radius: 0.75rem;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.2s ease;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .resend-button:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 15px -3px rgba(8, 145, 178, 0.3);
        }

        .resend-button:active {
            transform: translateY(0);
        }

        .logout-form {
            border-top: 1px solid #e5e7eb;
            padding-top: 1.5rem;
        }

        .logout-button {
            background: none;
            border: none;
            color: #6b7280;
            font-size: 0.875rem;
            text-decoration: underline;
            cursor: pointer;
            transition: color 0.2s ease;
            padding: 0.5rem;
        }

        .logout-button:hover {
            color: #374151;
        }

        .help-text {
            color: #9ca3af;
            font-size: 0.875rem;
            margin-top: 1rem;
            line-height: 1.5;
        }

        .security-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
            background: #f3f4f6;
            color: #6b7280;
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.75rem;
            margin-top: 1rem;
        }

        .security-badge::before {
            content: '🔒';
            font-size: 0.875rem;
        }

        /* Responsive adjustments */
        @media (max-width: 640px) {
            .verification-container {
                padding: 0.5rem;
            }

            .verification-card {
                padding: 2rem 1.5rem;
            }

            .verification-title {
                font-size: 1.5rem;
            }
        }

        /* Animation for the email icon */
        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .email-icon {
            animation: pulse 2s infinite;
        }
    </style>

    <div class="verification-container">
        <div class="verification-card">
            <div class="email-icon"></div>

            <h1 class="verification-title">Xác thực email</h1>

            <p class="verification-message">
                Chúng tôi đã gửi một liên kết xác thực tới email của bạn.
                Vui lòng kiểm tra hộp thư và nhấp vào liên kết để hoàn tất quá trình xác thực.
            </p>

            @if (session('status'))
                <div class="status-message">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}" class="resend-form">
                @csrf
                <button type="submit" class="resend-button">
                    Gửi lại email xác thực
                </button>
            </form>

            <p class="help-text">
                Không nhận được email? Kiểm tra thư mục spam hoặc nhấp vào nút gửi lại ở trên.
            </p>

            <div class="security-badge">
                Thông tin của bạn được bảo mật
            </div>

            <form method="POST" action="{{ route('user.logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="logout-button">
                    Đăng xuất
                </button>
            </form>
        </div>
    </div>
@endsection
