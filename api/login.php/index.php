<!DOCTYPE html>

<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>L3A9ID Hosting | الحل الأمثل لاستضافة البوتات والمواقع</title>
<meta content="استضافة سحابية متقدمة تدعم Python, Node.js, PHP. تحكم كامل في ملفاتك، تشغيل 24/7، وحماية فائقة. ابدأ رحلتك الآن مجاناً." name="description"/>
<link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" referrerpolicy="no-referrer" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&amp;family=Outfit:wght@400;700&amp;display=swap" rel="stylesheet"/>
<style>
        /* --- إعدادات التصميم العامة --- */
        /* ============================================ */
        /* جميع الحقوق محفوظة © 2026 L3A9ID */
        /* ============================================ */
        :root {
            --bg-dark: #020617;
            --bg-card: #0f172a;
            --primary: #3b82f6;
            --secondary: #8b5cf6;
            --accent: #06b6d4;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-main);
            font-family: 'Cairo', sans-serif;
            margin: 0;
            overflow-x: hidden;
            line-height: 1.6;
        }

        a { text-decoration: none; color: inherit; transition: 0.3s; }
        ul { list-style: none; padding: 0; }

        /* --- الهيدر والناف بار --- */
        .navbar {
            display: flex; justify-content: space-between; align-items: center;
            padding: 20px 5%; position: absolute; top: 0; left: 0; right: 0; z-index: 100;
        }
        .brand { font-size: 1.5rem; font-weight: 900; display: flex; align-items: center; gap: 10px; }
        .brand i { color: var(--primary); }
        .nav-links { display: flex; gap: 20px; }
        .nav-btn {
            padding: 10px 25px; border-radius: 50px; font-weight: 700; font-size: 0.9rem;
        }
        .btn-login { border: 1px solid rgba(255,255,255,0.2); color: white; }
        .btn-login:hover { background: white; color: var(--bg-dark); }
        .btn-reg { background: var(--primary); color: white; border: 1px solid var(--primary); }
        .btn-reg:hover { background: var(--secondary); border-color: var(--secondary); }

        /* --- قسم الهيرو (الرئيسي) --- */
        .hero {
            min-height: 100vh;
            display: flex; flex-direction: column; justify-content: center; align-items: center;
            text-align: center; padding: 100px 20px;
            background: radial-gradient(circle at top, rgba(59, 130, 246, 0.15), transparent 60%);
            position: relative;
        }
        .hero h1 {
            font-size: 3.5rem; font-weight: 900; margin-bottom: 20px; line-height: 1.2;
            background: linear-gradient(to right, #fff, #94a3b8); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }
        .hero h1 span { color: var(--primary); -webkit-text-fill-color: var(--primary); }
        .hero p { font-size: 1.2rem; color: var(--text-muted); max-width: 700px; margin-bottom: 40px; }
        
        .cta-box { display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; }
        .btn-lg { padding: 15px 40px; font-size: 1.1rem; border-radius: 12px; font-weight: 700; display: flex; align-items: center; gap: 10px; }
        .btn-glow { background: var(--primary); box-shadow: 0 0 30px rgba(59, 130, 246, 0.4); }
        .btn-glow:hover { transform: translateY(-5px); box-shadow: 0 10px 40px rgba(59, 130, 246, 0.6); }

        /* --- شريط الإحصائيات --- */
        .stats-bar {
            display: flex; justify-content: center; gap: 50px; margin-top: 60px; flex-wrap: wrap;
            padding: 30px; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);
            background: rgba(15, 23, 42, 0.5); backdrop-filter: blur(10px); width: 100%;
        }
        .stat-item h3 { font-size: 2rem; margin: 0; color: white; font-family: 'Outfit'; }
        .stat-item p { color: var(--text-muted); margin: 0; font-size: 0.9rem; }

        /* --- المميزات --- */
        .section { padding: 80px 5%; max-width: 1200px; margin: 0 auto; }
        .sec-title { text-align: center; margin-bottom: 60px; }
        .sec-title h2 { font-size: 2.5rem; margin-bottom: 10px; }
        .sec-title p { color: var(--text-muted); }

        .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .feature-card {
            background: var(--bg-card); padding: 30px; border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.05); transition: 0.3s;
        }
        .feature-card:hover { transform: translateY(-10px); border-color: var(--primary); }
        .f-icon { width: 60px; height: 60px; background: rgba(59, 130, 246, 0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; font-size: 25px; color: var(--primary); margin-bottom: 20px; }
        .feature-card h3 { font-size: 1.3rem; margin-bottom: 10px; }
        .feature-card p { color: var(--text-muted); font-size: 0.95rem; }

        /* --- اللغات المدعومة --- */
        .tech-section { background: #0f172a; padding: 80px 5%; text-align: center; }
        .tech-grid { display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; margin-top: 40px; }
        .tech-item {
            background: rgba(255,255,255,0.03); padding: 20px 40px; border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.05); display: flex; align-items: center; gap: 15px;
            font-weight: bold; font-size: 1.2rem;
        }
        .tech-item i { font-size: 2rem; }

        /* --- الأسئلة الشائعة --- */
        .faq-grid { display: grid; gap: 20px; max-width: 800px; margin: 0 auto; }
        .faq-item { background: var(--bg-card); padding: 25px; border-radius: 15px; border: 1px solid rgba(255,255,255,0.05); }
        .faq-item h4 { margin: 0 0 10px; color: var(--accent); }
        .faq-item p { margin: 0; color: var(--text-muted); font-size: 0.95rem; }

        /* --- الفوتر --- */
        footer {
            border-top: 1px solid rgba(255,255,255,0.05); padding: 40px 5%;
            text-align: center; color: var(--text-muted); font-size: 0.9rem; margin-top: 80px;
        }
        
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

        /* --- Responsive --- */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .navbar { padding: 20px; }
            .nav-links { display: none; } /* يمكن إضافة قائمة منسدلة لاحقاً */
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
<nav class="navbar">
<a class="brand" href="index.php">
<i class="fa-solid fa-layer-group"></i> L3A9ID Hosting
        </a>
<div class="nav-links">
<a class="nav-btn btn-login" href="login.php">تسجيل الدخول</a>
<a class="nav-btn btn-reg" href="login.php">حساب جديد</a>
</div>
</nav>
<section class="hero">
<div style="background: rgba(59, 130, 246, 0.1); color:var(--primary); padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; margin-bottom: 20px; border: 1px solid rgba(59, 130, 246, 0.2);">
            ✨ الجيل الجديد من الاستضافة السحابية <span class="signature-badge"><i class="fa-regular fa-copyright"></i> L3A9ID</span>
</div>
<h1>استضف مشاريعك البرمجية<br/>بأداء <span>خارق</span> وحماية متكاملة</h1>
<p>
            منصة متكاملة للمطورين لاستضافة بوتات التيليجرام، الديسكورد، وتطبيقات الويب.
            <br/>
            نقدم لك بيئة عمل معزولة، مدير ملفات متطور، وتشغيل دائم 24/7 بدون توقف.
        </p>
<div class="cta-box">
<a class="btn-lg btn-glow" href="login.php" style="color: white;">
<i class="fa-solid fa-rocket"></i> ابدأ تجربتك المجانية
            </a>
<a class="btn-lg" href="#features" style="background: rgba(255,255,255,0.05); color: white;">
<i class="fa-solid fa-circle-info"></i> اكتشف المزيد
            </a>
</div>
<div class="stats-bar">
<div class="stat-item">
<h3>+3</h3>
<p>سيرفر يعمل حالياً</p>
</div>
<div class="stat-item">
<h3>+90</h3>
<p>مطور يثق بنا</p>
</div>
<div class="stat-item">
<h3>99.9%</h3>
<p>نسبة التشغيل (Uptime)</p>
</div>
</div>
</section>
<!-- [ L3A9ID ] - بداية قسم المميزات -->
<section class="section" id="features">
<div class="sec-title">
<h2>لماذا تختار L3A9ID Hosting؟ <span style="font-size: 1rem; color: var(--primary);">تصميم L3A9ID</span></h2>
<p>نقدم لك أدوات احترافية تجعل إدارة مشاريعك أسهل وأسرع</p>
</div>
<div class="features-grid">
<div class="feature-card">
<div class="f-icon"><i class="fa-solid fa-microchip"></i></div>
<h3>أداء عالي (High Performance)</h3>
<p>نستخدم معالجات قوية وأقراص NVMe فائقة السرعة لضمان استجابة فورية لبوتاتك وتطبيقاتك دون أي تأخير.</p>
</div>
<div class="feature-card">
<div class="f-icon"><i class="fa-solid fa-shield-halved"></i></div>
<h3>بيئة معزولة وآمنة</h3>
<p>كل سيرفر يعمل داخل حاوية Docker معزولة تماماً، مما يضمن أمان ملفاتك وعدم تأثرك بالمستخدمين الآخرين.</p>
</div>
<div class="feature-card">
<div class="f-icon"><i class="fa-solid fa-folder-tree"></i></div>
<h3>مدير ملفات متطور</h3>
<p>لا حاجة لاستخدام FTP! يمكنك رفع، تعديل، حذف، وفك ضغط الملفات مباشرة من المتصفح عبر لوحة تحكم سلسة.</p>
</div>
<div class="feature-card">
<div class="f-icon"><i class="fa-solid fa-terminal"></i></div>
<h3>لوحة تحكم (Console)</h3>
<p>شاهد سجلات التشغيل (Logs) مباشرة، وقم بإيقاف وتشغيل السيرفر بضغطة زر واحدة مع تحديث فوري للحالة.</p>
</div>
<div class="feature-card">
<div class="f-icon"><i class="fa-solid fa-code"></i></div>
<h3>تثبيت تلقائي للمكاتب</h3>
<p>نقوم بتثبيت مكاتب `pip` للبايثون و `npm` للنود تلقائياً عند التشغيل، لتوفر عليك عناء الإعداد اليدوي.</p>
</div>
<div class="feature-card">
<div class="f-icon"><i class="fa-solid fa-headset"></i></div>
<h3>دعم فني متواصل</h3>
<p>فريقنا جاهز دائماً لمساعدتك في حل أي مشكلة برمجية أو تقنية تواجهك لضمان استمرار عمل مشاريعك.</p>
</div>
</div>
<!-- جميع الحقوق محفوظة - L3A9ID 2026 -->
</section>
<!-- [ L3A9ID ] - نهاية قسم المميزات -->
<section class="tech-section">
<div class="sec-title">
<h2>ندعم تقنياتك المفضلة <span style="color: var(--primary);">| L3A9ID</span></h2>
<p>بيئة تشغيل مرنة تدعم أشهر لغات البرمجة</p>
</div>
<div class="tech-grid">
<div class="tech-item" style="border-color: #3776AB;">
<i class="fa-brands fa-python" style="color: #3776AB;"></i> Python 3.10
            </div>
<div class="tech-item" style="border-color: #68a063;">
<i class="fa-brands fa-node-js" style="color: #68a063;"></i> Node.js 18
            </div>
<div class="tech-item" style="border-color: #777BB4;">
<i class="fa-brands fa-php" style="color: #777BB4;"></i> PHP 8.2
            </div>
</div>
<p style="margin-top:20px; color:#94a3b8;">ندعم كافة المكتبات الشهيرة: Telethon, Pyrogram, Discord.js, Flask, وغيرها.</p>
</section>
<!-- [ L3A9ID ] - الأسئلة الشائعة مع حقوق النشر -->
<section class="section">
<div class="sec-title">
<h2>الأسئلة الشائعة <span style="font-size: 0.9rem; background: var(--primary); color: white; padding: 3px 10px; border-radius: 30px;">L3A9ID</span></h2>
<p>إجابات على أكثر الاستفسارات التي تصلنا</p>
</div>
<div class="faq-grid">
<div class="faq-item">
<h4>هل الاستضافة مجانية؟</h4>
<p>نعم، نوفر باقات مجانية للتجربة، بالإضافة إلى نظام "المحفظة" الذي يمكنك من تجميع النقاط عبر مشاهدة الإعلانات وشراء سيرفرات مدفوعة مجاناً.</p>
</div>
<div class="faq-item">
<h4>كيف أرفع ملفاتي للسيرفر؟</h4>
<p>بعد إنشاء السيرفر، ستجد زر "مدير الملفات". يمكنك رفع الملفات، إنشاء مجلدات، وحتى تعديل الكود مباشرة من المتصفح.</p>
</div>
<div class="faq-item">
<h4>ماذا يحدث إذا أغلقت الصفحة؟</h4>
<p>سيرفراتنا سحابية وتعمل 24/7. حتى لو أغلقت المتصفح أو أطفأت جهازك، سيستمر البوت أو الموقع بالعمل دون توقف.</p>
</div>
<div class="faq-item">
<h4>هل يمكنني ترقية السيرفر لاحقاً؟</h4>
<p>بالتأكيد. يمكنك في أي وقت شراء باقة أعلى بموارد أكبر (RAM/CPU) ونقل ملفاتك بسهولة.</p>
</div>
</div>
</section>
<!-- [ L3A9ID ] - الفوتر مع حقوق النشر -->
<footer>
<div style="margin-bottom: 20px;">
<a href="#" style="margin:0 10px;"><i class="fa-brands fa-telegram fa-lg"></i></a>
<a href="#" style="margin:0 10px;"><i class="fa-brands fa-discord fa-lg"></i></a>
<a href="#" style="margin:0 10px;"><i class="fa-brands fa-twitter fa-lg"></i></a>
</div>
<p>جميع الحقوق محفوظة © 2026 L3A9ID Hosting - تم التطوير بحب للمطورين العرب.</p>
<p style="font-size: 0.8rem; opacity: 0.6; margin-top: 10px;">All Rights Reserved | Designed & Developed by <strong style="color: var(--primary);">L3A9ID</strong> 🔥</p>
</footer>
<!-- ====================================================== -->
// كل جزء في هذا السورس يحمل توقيع L3A9ID
// Copyright © 2026 L3A9ID - جميع الحقوق محفوظة
// لا يُسمح بنسخ أو إعادة استخدام الكود دون الإشارة إلى المصدر
/* ====================================================== */
</body>
</html>