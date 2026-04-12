<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>IOS OPTIMIZER ULTIMATE</title>
    <style>
        :root {
            --bg: #000000;
            --card-bg: rgba(20, 20, 20, 0.8);
            --primary: #ff0000;
            --glow: 0 0 12px #ff0000;
            --text: #ffffff;
            --ios-blur: blur(20px);
        }

        * {
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            user-select: none;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        /* Khung máy giả lập iOS */
        .iphone-frame {
            width: 380px;
            height: 780px;
            background: var(--bg);
            border: 3px solid #1a1a1a;
            border-radius: 50px;
            position: relative;
            box-shadow: 0 0 40px rgba(255, 0, 0, 0.2);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        /* Hiệu ứng viền đỏ chạy quanh */
        .iphone-frame::before {
            content: '';
            position: absolute;
            top: -2px; left: -2px; right: -2px; bottom: -2px;
            border-radius: 50px;
            border: 2px solid var(--primary);
            box-shadow: var(--glow);
            z-index: 10;
            pointer-events: none;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 0.5; }
            50% { opacity: 1; }
            100% { opacity: 0.5; }
        }

        /* Header iOS */
        .status-bar {
            height: 44px;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            font-weight: 600;
        }

        .content {
            padding: 20px;
            flex: 1;
            overflow-y: auto;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--primary);
            text-shadow: var(--glow);
        }

        p.subtitle {
            font-size: 12px;
            color: #888;
            margin-bottom: 25px;
        }

        /* Menu 6 chức năng Aim */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-bottom: 25px;
        }

        .feature-card {
            background: var(--card-bg);
            border: 1px solid #333;
            border-radius: 20px;
            padding: 15px;
            text-align: left;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            cursor: pointer;
        }

        .feature-card.active {
            border-color: var(--primary);
            box-shadow: inset 0 0 10px rgba(255, 0, 0, 0.3);
        }

        .feature-card:active {
            transform: scale(0.95);
        }

        .feature-card .dot {
            width: 8px;
            height: 8px;
            background: #333;
            border-radius: 50%;
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .feature-card.active .dot {
            background: var(--primary);
            box-shadow: var(--glow);
        }

        .feature-name {
            font-size: 14px;
            font-weight: 600;
            display: block;
            margin-top: 10px;
        }

        /* Khu vực Inject */
        .inject-box {
            background: rgba(255, 0, 0, 0.05);
            border-radius: 25px;
            padding: 20px;
            border: 1px dashed var(--primary);
            text-align: center;
            margin-top: 10px;
        }

        .btn-action {
            background: var(--primary);
            color: white;
            border: none;
            width: 100%;
            padding: 15px;
            border-radius: 15px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            box-shadow: var(--glow);
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-action:active {
            transform: scale(0.98);
            filter: brightness(1.2);
        }

        /* Progress Bar */
        .progress-container {
            width: 100%;
            height: 6px;
            background: #222;
            border-radius: 10px;
            margin-top: 15px;
            display: none;
            overflow: hidden;
        }

        #progress-fill {
            height: 100%;
            width: 0%;
            background: var(--primary);
            box-shadow: var(--glow);
            transition: width 0.1s;
        }

        /* Bottom Tab */
        .tab-bar {
            height: 80px;
            background: rgba(10, 10, 10, 0.9);
            backdrop-filter: var(--ios-blur);
            display: flex;
            justify-content: space-around;
            align-items: center;
            border-top: 1px solid #222;
        }

        .tab-item {
            font-size: 20px;
            opacity: 0.5;
            transition: 0.3s;
        }

        .tab-item.active {
            opacity: 1;
            color: var(--primary);
            text-shadow: var(--glow);
        }
    </style>
</head>
<body>

<div class="iphone-frame">
    <div class="status-bar">
        <span>9:41</span>
        <div style="display: flex; gap: 5px;">📶 🛜 🔋</div>
    </div>

    <div class="content">
        <h2>System Injector</h2>
        <p class="subtitle">Trình tối ưu & Hỗ trợ kéo tâm v4.0</p>

        <div class="menu-grid">
            <div class="feature-card" onclick="toggleFeature(this)">
                <div class="dot"></div>
                <span class="feature-name">AIM LOCK 100%</span>
            </div>
            <div class="feature-card" onclick="toggleFeature(this)">
                <div class="dot"></div>
                <span class="feature-name">AUTO HEADSHOT</span>
            </div>
            <div class="feature-card" onclick="toggleFeature(this)">
                <div class="dot"></div>
                <span class="feature-name">ANTI RECOIL</span>
            </div>
            <div class="feature-card" onclick="toggleFeature(this)">
                <div class="dot"></div>
                <span class="feature-name">FPS BOOSTER</span>
            </div>
            <div class="feature-card" onclick="toggleFeature(this)">
                <div class="dot"></div>
                <span class="feature-name">SPEED TOUCH</span>
            </div>
            <div class="feature-card" onclick="toggleFeature(this)">
                <div class="dot"></div>
                <span class="feature-name">FIX LAG 0.1S</span>
            </div>
        </div>

        <div class="inject-box">
            <span style="font-size: 13px; color: #ccc;">FILE CONFIG (.LUA, .DATA)</span>
            <button class="btn-action" onclick="startInject()">BẮT ĐẦU INJECT</button>
            
            <div class="progress-container" id="p-container">
                <div id="progress-fill"></div>
            </div>
            <div id="status-text" style="font-size: 11px; margin-top: 10px; color: var(--primary);"></div>
        </div>
    </div>

    <nav class="tab-bar">
        <div class="tab-item active">⚡</div>
        <div class="tab-item">🛡️</div>
        <div class="tab-item">⚙️</div>
    </nav>
</div>

<script>
    // Hiệu ứng bật tắt chức năng
    function toggleFeature(el) {
        el.classList.toggle('active');
        // Giả lập rung phản hồi
        if (navigator.vibrate) navigator.vibrate(10);
    }

    // Giả lập quá trình Inject file
    function startInject() {
        const btn = document.querySelector('.btn-action');
        const container = document.getElementById('p-container');
        const fill = document.getElementById('progress-fill');
        const status = document.getElementById('status-text');
        
        btn.disabled = true;
        btn.innerText = "ĐANG XỬ LÝ...";
        container.style.display = "block";
        
        let width = 0;
        const steps = [
            "Đang quét hệ thống...",
            "Bypass Anticheat...",
            "Đang nạp file Inject...",
            "Tối ưu độ nhạy...",
            "Hoàn tất!"
        ];

        let stepIdx = 0;
        const interval = setInterval(() => {
            if (width >= 100) {
                clearInterval(interval);
                btn.disabled = false;
                btn.innerText = "INJECT THÀNH CÔNG";
                setTimeout(() => {
                    alert("Đã áp dụng các thông số tối ưu vào Game!");
                    container.style.display = "none";
                    fill.style.width = "0%";
                    status.innerText = "";
                    btn.innerText = "BẮT ĐẦU INJECT";
                }, 500);
            } else {
                width += Math.random() * 5;
                if (width > 100) width = 100;
                fill.style.width = width + "%";
                
                // Cập nhật text trạng thái dựa trên %
                let currentStep = Math.floor((width / 100) * steps.length);
                if (currentStep < steps.length) {
                    status.innerText = steps[currentStep];
                }
            }
        }, 100);
    }
</script>

</body>
</html>
