<!DOCTYPE html>

<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>دخول - L3A9ID Hosting</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
<script async="" defer="" src="https://www.google.com/recaptcha/api.js"></script>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&family=Outfit:wght@300;600&display=swap');
        
        :root { --primary: #3b82f6; --bg-dark: #0f172a; --text: #f1f5f9; }
        
        body { margin: 0; min-height: 100vh; font-family: 'Cairo', sans-serif; background: var(--bg-dark); color: var(--text); display: flex; align-items: center; justify-content: center; overflow-x: hidden; position: relative; }
        .bg-anim { position: absolute; width: 100%; height: 100%; z-index: -1; overflow: hidden; }
        .circle { position: absolute; border-radius: 50%; filter: blur(80px); opacity: 0.4; animation: float 10s infinite alternate; }
        .c1 { width: 300px; height: 300px; background: #3b82f6; top: -50px; left: -50px; }
        .c2 { width: 400px; height: 400px; background: #8b5cf6; bottom: -100px; right: -100px; animation-delay: -5s; }
        @keyframes float { 0% { transform: translate(0, 0); } 100% { transform: translate(30px, 50px); } }

        .auth-container { width: 100%; max-width: 420px; padding: 20px; position: relative; z-index: 10; }
        .auth-card { background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 24px; padding: 40px 30px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5); }
        
        .logo-area { text-align: center; margin-bottom: 30px; }
        .logo-icon { font-size: 40px; color: var(--primary); margin-bottom: 10px; display: inline-block; }
        .logo-text { font-size: 24px; font-weight: 800; font-family: 'Outfit', sans-serif; letter-spacing: 1px; }

        .tabs { display: flex; background: rgba(0,0,0,0.2); padding: 5px; border-radius: 12px; margin-bottom: 25px; }
        .tab-btn { flex: 1; padding: 10px; border: none; background: transparent; color: #94a3b8; font-family: 'Cairo'; font-weight: bold; cursor: pointer; border-radius: 8px; transition: 0.3s; }
        .tab-btn.active { background: var(--primary); color: white; }

        .inp-group { position: relative; margin-bottom: 20px; }
        .inp-icon { position: absolute; top: 50%; transform: translateY(-50%); right: 15px; color: #64748b; }
        .inp { width: 100%; padding: 14px 45px 14px 15px; background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; color: white; font-family: 'Cairo'; font-size: 14px; outline: none; box-sizing: border-box; transition: 0.3s; }
        .inp:focus { border-color: var(--primary); background: rgba(15, 23, 42, 0.8); }

        .btn { width: 100%; padding: 14px; background: var(--primary); border: none; border-radius: 12px; color: white; font-weight: bold; font-family: 'Cairo'; font-size: 16px; cursor: pointer; transition: 0.3s; margin-top: 10px; }
        .btn:hover { background: #2563eb; transform: translateY(-2px); }

        .alert { padding: 15px; border-radius: 10px; font-size: 14px; margin-bottom: 20px; text-align: center; line-height: 1.6; }
        .alert-error { background: rgba(239, 68, 68, 0.2); color: #fca5a5; border: 1px solid rgba(239, 68, 68, 0.3); }
        .alert-success { background: rgba(16, 185, 129, 0.2); color: #6ee7b7; border: 1px solid rgba(16, 185, 129, 0.3); }

        .form-section { display: none; animation: fadeIn 0.4s; }
        .form-section.active { display: block; }
        @keyframes fadeIn { from{opacity:0; transform:translateY(10px);} to{opacity:1; transform:translateY(0);} }
        .g-recaptcha { display: flex; justify-content: center; margin-bottom: 15px; transform: scale(0.9); transform-origin: center; }
        .footer-links { text-align: center; margin-top: 20px; font-size: 13px; color: #64748b; }
        .footer-links a { color: #94a3b8; text-decoration: none; transition: 0.2s; }
        .footer-links a:hover { color: white; }
        
        .telegram-login-container { text-align: center; margin-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; }
        
        /* --- حقوق L3A9ID في كل مكان --- */
        .watermark {
            position: fixed; bottom: 10px; left: 10px; 
            background: rgba(0,0,0,0.5); color: rgba(255,255,255,0.3);
            font-size: 10px; padding: 2px 8px; border-radius: 20px;
            z-index: 9999; backdrop-filter: blur(5px);
            pointer-events: none; letter-spacing: 1px;
        }
        .signature-badge {
            display: inline-block; background: rgba(59,130,246,0.1); 
            border: 1px solid rgba(59,130,246,0.3); border-radius: 30px;
            padding: 5px 15px; font-size: 0.8rem; margin-right: 10px;
            color: var(--primary);
        }
    </style>
</head>
<body>
<!-- ================================================================== -->
<!-- جميع الحقوق محفوظة والمصدر كامل باسم L3A9ID -->
// رمز البداية - تصميم وتطوير L3A9ID
// لا يجوز استخدام هذا الكود أو نسخه دون إذن صريح
// ------------------------------------------------------------------
<!-- ================================================================== -->
<div class="watermark">© 2026 L3A9ID</div>
<div class="bg-anim">
<div class="circle c1"></div>
<div class="circle c2"></div>
</div>
<div class="auth-container">
<div class="auth-card">
<div class="logo-area">
<i class="fa fa-cloud-bolt logo-icon"></i>
<div class="logo-text">L3A9ID Hosting <span class="signature-badge"><i class="fa-regular fa-copyright"></i> L3A9ID</span></div>
</div>
<div class="tabs">
<button class="tab-btn active" onclick="showTab('login')">تسجيل الدخول</button>
<button class="tab-btn" onclick="showTab('register')">حساب جديد</button>
</div>
<form class="form-section active" id="login" method="POST">
<div class="inp-group">
<i class="fa fa-envelope inp-icon"></i>
<input class="inp" name="log_email" placeholder="البريد الإلكتروني" required="" type="email"/>
</div>
<div class="inp-group">
<i class="fa fa-lock inp-icon"></i>
<input class="inp" name="log_password" placeholder="كلمة المرور" required="" type="password"/>
</div>
<div class="g-recaptcha" data-sitekey="6LeM31MsAAAAABEgoPmNBJZFA2eztcP-BYCFbhOg" data-theme="dark"></div>
<button class="btn" name="login" type="submit">دخول للوحة</button>
<div class="telegram-login-container">
<p style="font-size: 12px; color: #64748b; margin-bottom: 10px;">أو سجل الدخول عبر</p>
<script async="" data-auth-url="https://l3a9id-hosting.net/auth_telegram.php" data-radius="10" data-request-access="write" data-size="large" data-telegram-login="oo9tebot" data-userpic="false" src="https://telegram.org/js/telegram-widget.js?22">
</script>
</div>
<div class="footer-links">
<a href="forgot_password.php">نسيت كلمة المرور؟</a> | <span style="color: #3b82f6;">L3A9ID</span>
</div>
</form>
<form class="form-section" id="register" method="POST">
<div class="inp-group">
<i class="fa fa-user inp-icon"></i>
<input class="inp" name="reg_name" placeholder="الاسم الكامل" required="" type="text"/>
</div>
<div class="inp-group">
<i class="fa fa-envelope inp-icon"></i>
<input class="inp" name="reg_email" placeholder="البريد الإلكتروني" required="" type="email"/>
</div>
<div class="inp-group">
<i class="fa fa-lock inp-icon"></i>
<input class="inp" minlength="6" name="reg_password" placeholder="كلمة المرور (6+ أحرف)" required="" type="password"/>
</div>
<div class="g-recaptcha" data-sitekey="6LeM31MsAAAAABEgoPmNBJZFA2eztcP-BYCFbhOg" data-theme="dark"></div>
<div style="font-size:12px; color:#64748b; margin-bottom:15px; text-align:right;">
<input id="terms" required="" type="checkbox"/> <label for="terms">أوافق على <a href="#">الشروط والأحكام</a> الخاصة بـ <strong style="color: var(--primary);">L3A9ID</strong></label>
</div>
<button class="btn" name="register" style="background:#10b981;" type="submit">إنشاء حساب</button>
</form>
<div style="text-align: center; margin-top: 15px; font-size: 12px; color: #475569;">
تم التطوير بواسطة <strong style="color: var(--primary);">L3A9ID</strong> © 2026
</div>
</div>
</div>
<script>
        function showTab(id) {
            document.querySelectorAll('.form-section').forEach(el => el.classList.remove('active'));
            document.getElementById(id).classList.add('active');
            document.querySelectorAll('.tab-btn').forEach(el => el.classList.remove('active'));
            event.target.classList.add('active');
        }
    </script>
</body>
</html>
