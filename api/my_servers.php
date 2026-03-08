<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Ali Hosting - بوابة الدخول</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Outfit:wght@400;700;800&display=swap');
        
        :root { 
            --primary: #3b82f6; 
            --primary-hover: #2563eb;
            --secondary: #8b5cf6;
            --bg-dark: #020617; 
            --card-bg: rgba(15, 23, 42, 0.6);
            --text: #f8fafc; 
            --text-muted: #94a3b8;
        }

        * { box-sizing: border-box; }

        body { 
            margin: 0; min-height: 100vh; 
            font-family: 'Cairo', sans-serif; 
            background: var(--bg-dark); 
            color: var(--text); 
            display: flex; align-items: center; justify-content: center; 
            overflow-x: hidden; position: relative; 
        }

        /* 🌟 الخلفية المتحركة */
        .bg-anim { position: fixed; width: 100vw; height: 100vh; z-index: -1; overflow: hidden; top:0; left:0; }
        .circle { position: absolute; border-radius: 50%; filter: blur(100px); opacity: 0.5; animation: float 12s infinite alternate ease-in-out; }
        .c1 { width: 350px; height: 350px; background: var(--primary); top: -10%; left: -10%; }
        .c2 { width: 450px; height: 450px; background: var(--secondary); bottom: -10%; right: -10%; animation-delay: -6s; }
        @keyframes float { 0% { transform: translate(0, 0) scale(1); } 100% { transform: translate(50px, 80px) scale(1.1); } }

        /* 🌟 البطاقة الزجاجية الرئيسية */
        .auth-container { width: 100%; max-width: 440px; padding: 20px; position: relative; z-index: 10; }
        .auth-card { 
            background: var(--card-bg); 
            backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.08); 
            border-radius: 28px; 
            padding: 45px 35px; 
            box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255,255,255,0.1); 
        }
        
        .logo-area { text-align: center; margin-bottom: 30px; }
        .logo-icon { font-size: 45px; color: var(--primary); margin-bottom: 12px; display: inline-block; filter: drop-shadow(0 0 15px rgba(59,130,246,0.5)); }
        .logo-text { font-size: 28px; font-weight: 800; font-family: 'Outfit', sans-serif; letter-spacing: -0.5px; }

        /* 🌟 التبويبات (Tabs) */
        .tabs { display: flex; background: rgba(0,0,0,0.3); padding: 6px; border-radius: 16px; margin-bottom: 25px; border: 1px solid rgba(255,255,255,0.03); }
        .tab-btn { 
            flex: 1; padding: 12px; border: none; background: transparent; 
            color: var(--text-muted); font-family: 'Cairo'; font-weight: 700; font-size: 15px;
            cursor: pointer; border-radius: 12px; transition: all 0.3s ease; 
        }
        .tab-btn.active { background: rgba(255,255,255,0.1); color: white; box-shadow: 0 4px 15px rgba(0,0,0,0.2); }

        /* 🌟 الحقول (Inputs) */
        .inp-group { position: relative; margin-bottom: 20px; }
        .inp-icon { position: absolute; top: 50%; transform: translateY(-50%); right: 18px; color: #64748b; font-size: 18px; transition: 0.3s; }
        .inp { 
            width: 100%; padding: 16px 50px 16px 16px; 
            background: rgba(0, 0, 0, 0.2); 
            border: 1px solid rgba(255,255,255,0.1); border-radius: 16px; 
            color: white; font-family: 'Cairo'; font-size: 15px; 
            outline: none; transition: all 0.3s ease; 
        }
        .inp:focus { 
            border-color: var(--primary); background: rgba(0, 0, 0, 0.4); 
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15); 
        }
        .inp:focus + .inp-icon { color: var(--primary); }

        /* 🌟 الأزرار */
        .btn { 
            width: 100%; padding: 16px; 
            background: linear-gradient(135deg, var(--primary), var(--primary-hover)); 
            border: none; border-radius: 16px; color: white; 
            font-weight: 800; font-family: 'Cairo'; font-size: 16px; 
            cursor: pointer; transition: all 0.3s ease; 
            margin-top: 10px; text-decoration: none; display: block; text-align: center; 
            box-shadow: 0 10px 20px -10px var(--primary);
        }
        .btn:hover { transform: translateY(-3px); box-shadow: 0 15px 25px -10px var(--primary); filter: brightness(1.1); }
        .btn:active { transform: translateY(0); }
        
        .btn-cancel { 
            background: transparent; border: 1px solid rgba(255,255,255,0.15); 
            margin-top: 12px; color: var(--text-muted); box-shadow: none;
        }
        .btn-cancel:hover { background: rgba(255,255,255,0.05); color: white; box-shadow: none; }
        .btn-green { background: linear-gradient(135deg, #10b981, #059669); box-shadow: 0 10px 20px -10px #10b981; }
        .btn-orange { background: linear-gradient(135deg, #f59e0b, #d97706); box-shadow: 0 10px 20px -10px #f59e0b; }

        /* 🌟 التنبيهات */
        .alert { padding: 15px 20px; border-radius: 14px; font-size: 14px; margin-bottom: 25px; text-align: center; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 10px; }
        .alert-error { background: rgba(239, 68, 68, 0.15); color: #fca5a5; border: 1px solid rgba(239, 68, 68, 0.3); }
        .alert-success { background: rgba(16, 185, 129, 0.15); color: #6ee7b7; border: 1px solid rgba(16, 185, 129, 0.3); }

        /* 🌟 متفرقات */
        .recaptcha-wrapper { display: flex; justify-content: center; margin-bottom: 20px; overflow: hidden; border-radius: 12px; }
        .desc-text { text-align: center; color: var(--text-muted); font-size: 15px; margin-bottom: 25px; line-height: 1.6; }
        .desc-text b { color: #fff; background: rgba(255,255,255,0.1); padding: 2px 8px; border-radius: 6px; }
        
        .footer-links { text-align: center; margin-top: 25px; font-size: 14px; }
        .footer-links a { color: var(--text-muted); text-decoration: none; transition: 0.3s; font-weight: 600; }
        .footer-links a:hover { color: var(--primary); }

        .divider { display: flex; align-items: center; text-align: center; margin: 25px 0; color: #475569; font-size: 13px; font-weight: bold; }
        .divider::before, .divider::after { content: ''; flex: 1; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .divider::before { margin-left: 15px; } .divider::after { margin-right: 15px; }

        /* 🌟 الهواتف المحمولة */
        @media (max-width: 480px) {
            .auth-card { padding: 35px 20px; border-radius: 20px; border-left: none; border-right: none; }
            .g-recaptcha { transform: scale(0.85); transform-origin: center; } /* تصغير الريكابتشا للموبايل */
            .logo-text { font-size: 24px; }
            .btn { font-size: 15px; }
        }
    </style>
</head>
<body>

    <div class="bg-anim">
        <div class="circle c1"></div>
        <div class="circle c2"></div>
    </div>

    <div class="auth-container">
        <div class="auth-card">
            
            <div class="logo-area">
                <i class="fa fa-cloud-bolt logo-icon"></i>
                <div class="logo-text">Ali Hosting</div>
            </div>

                        
                            <div class="tabs">
                    <button class="tab-btn active" onclick="document.getElementById('login').style.display='block'; document.getElementById('register').style.display='none'; this.classList.add('active'); this.nextElementSibling.classList.remove('active');">تسجيل الدخول</button>
                    <button class="tab-btn" onclick="document.getElementById('register').style.display='block'; document.getElementById('login').style.display='none'; this.classList.add('active'); this.previousElementSibling.classList.remove('active');">حساب جديد</button>
                </div>

                <form method="POST" id="login">
                    <input type="hidden" name="csrf_token" value="c24ca775318066b7d8f8b3798e115f17fe12bc17f8c813c89d8d9d53258abd84">
                    <div class="inp-group">
                        <input type="email" name="log_email" class="inp" placeholder="البريد الإلكتروني" required>
                        <i class="fa fa-envelope inp-icon"></i>
                    </div>
                    <div class="inp-group">
                        <input type="password" name="log_password" class="inp" placeholder="كلمة المرور" required>
                        <i class="fa fa-lock inp-icon"></i>
                    </div>
                    
                    <div class="recaptcha-wrapper">
                        <div class="g-recaptcha" data-sitekey="6LeM31MsAAAAABEgoPmNBJZFA2eztcP-BYCFbhOg" data-theme="dark"></div>
                    </div>
                    
                    <button type="submit" name="login" class="btn">تسجيل الدخول <i class="fa fa-arrow-left" style="margin-right:5px; font-size:14px;"></i></button>
                    
                    <div class="divider">أو عبر تليجرام</div>
                    <div style="text-align:center;">
                        <script async src="https://telegram.org/js/telegram-widget.js?22" data-telegram-login="oo9tebot" data-size="large" data-userpic="false" data-radius="16" data-auth-url="https://ali-hosting.net/auth_telegram.php" data-request-access="write"></script>
                    </div>

                    <div class="footer-links">
                        <a href="login.php?step=forgot">هل نسيت كلمة المرور؟</a>
                    </div>
                </form>

                <form method="POST" id="register" style="display:none;">
                    <input type="hidden" name="csrf_token" value="c24ca775318066b7d8f8b3798e115f17fe12bc17f8c813c89d8d9d53258abd84">
                    <div class="inp-group">
                        <input type="text" name="reg_name" class="inp" placeholder="الاسم الكامل" required>
                        <i class="fa fa-user inp-icon"></i>
                    </div>
                    <div class="inp-group">
                        <input type="email" name="reg_email" class="inp" placeholder="البريد الإلكتروني" required>
                        <i class="fa fa-envelope inp-icon"></i>
                    </div>
                    <div class="inp-group">
                        <input type="password" name="reg_password" class="inp" placeholder="كلمة المرور (6+ أحرف)" minlength="6" required>
                        <i class="fa fa-lock inp-icon"></i>
                    </div>
                    
                    <div class="recaptcha-wrapper">
                        <div class="g-recaptcha" data-sitekey="6LeM31MsAAAAABEgoPmNBJZFA2eztcP-BYCFbhOg" data-theme="dark"></div>
                    </div>
                    
                    <button type="submit" name="register" class="btn btn-green">إنشاء حساب جديد</button>
                </form>

            
        </div>
    </div>

</body>
</html>