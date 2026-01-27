<?php
/**
 * Template name: VIP-INTRO PAGE
 * Description:   会员介绍页面 - Horizontal Redesign
 * @Author        : Antigravity
 * @Date          : 2026-01-06
 */

get_header();
?>

    <!-- CRITICAL SECURITY PROTOCOL (Early Execution) -->
    <script>
    (function() {
        const stop = (e) => { e.preventDefault(); e.stopPropagation(); return false; };
        
        // 1. Block Context Menu
        document.addEventListener('contextmenu', stop, true);
        
        // 2. Block Shortcuts (Bubble Capture Phase)
        window.addEventListener('keydown', (e) => {
            if (e.key === 'F12' || 
               (e.ctrlKey && (e.key === 'u' || e.key === 'U' || e.key === 's' || e.key === 'S')) ||
               (e.ctrlKey && e.shiftKey && (e.key === 'i' || e.key === 'I' || e.key === 'j' || e.key === 'J'))) {
                stop(e);
            }
        }, true); // Capture phase is critical!
        
        // 3. Copyright Stamp
        const msg = "%cSTOP STEALING.\n%c© 2026 XINGXY. All Rights Reserved.";
        const style1 = "color: red; font-size: 20px; font-weight: bold;";
        const style2 = "color: #fbbf24; font-size: 14px;";
        console.clear();
        console.log(msg, style1, style2);
    })();
    </script>

    <main class="vip-intro-main">
        <!-- Full Page Holographic Background -->
        <div class="holo-bg-layer"></div>

        <div class="vip-intro-container">
            
            <div class="vip-header-card glass-panel">
                <div class="header-content">
                    <div class="header-icon-box">
                        <img src="<?php echo ZIB_TEMPLATE_DIRECTORY_URI; ?>/custom-projects/vip-intro/img/IMG_20260106_211017_018.webp" alt="Crown" class="header-crown">
                    </div>
                    <h1 class="header-title">VIP MEMBERSHIP</h1>
                    <div class="header-features-row">
                        <span><i class="fa fa-diamond"></i> 全站免费 任你下载</span>
                        <span><i class="fa fa-check-circle"></i> 专属客服 极速响应</span>
                        <span><i class="fa fa-bolt"></i> 回复资料 标享无忧</span>
                        <span><i class="fa fa-shield"></i> 全站优选 独享无漏</span>
                        <span><i class="fa fa-star"></i> 优民新品 快人一步</span>
                    </div>
                </div>
            </div>

            <div class="vip-plans-container">
                
                <div class="plan-card lv0-card">
                    <div class="card-glass-layer"></div>
                    <div class="plan-badge">星途开启</div>
                    <div class="plan-content">
                        <div class="card-watermark-icon">
                            <img src="<?php echo ZIB_TEMPLATE_DIRECTORY_URI; ?>/custom-projects/vip-intro/img/crown-silver.webp" alt="Watermark">
                        </div>
                        <div class="plan-header">
                            <div class="plan-icon">
                                <img src="<?php echo ZIB_TEMPLATE_DIRECTORY_URI; ?>/custom-projects/vip-intro/img/crown-silver.webp" alt="LV0">
                            </div>
                            <div class="plan-info">
                                <h3>极光会员</h3>
                                <p class="sub-eng">AURORA PROLOGUE</p>
                                <p>于星河之始，点亮属于你的第一抹极光</p>
                            </div>
                        </div>
                        <div class="plan-footer">
                            <div class="plan-price">
                                <small>￥</small>188
                            </div>
                            <a href="javascript:;" class="plan-btn btn-silver pay-vip" data-plan="vip_1">探测序幕</a>
                        </div>
                    </div>
                </div>

                <div class="plan-card lv6-card">
                    <div class="card-glass-layer"></div>
                    <div class="plan-badge">尊崇加冕</div>
                    <div class="plan-content">
                        <div class="card-watermark-icon">
                            <img src="<?php echo ZIB_TEMPLATE_DIRECTORY_URI; ?>/custom-projects/vip-intro/img/IMG_20260106_211017_760.webp" alt="Watermark">
                        </div>
                        <div class="plan-header">
                            <div class="plan-icon">
                                <img src="<?php echo ZIB_TEMPLATE_DIRECTORY_URI; ?>/custom-projects/vip-intro/img/IMG_20260106_211017_760.webp" alt="LV6">
                            </div>
                            <div class="plan-info">
                                <h3>星冕会员</h3>
                                <p class="sub-eng">THE STELLAR CORONATION</p>
                                <p>为独具慧眼的你，举行一场星光下的加冕</p>
                            </div>
                        </div>
                        <div class="plan-footer">
                            <div class="plan-price">
                                <small>￥</small>288
                            </div>
                            <div class="plan-pointer-decor">
                                <img src="<?php echo ZIB_TEMPLATE_DIRECTORY_URI; ?>/custom-projects/vip-intro/img/IMG_20260106_211016_857.webp" alt="Star Dust">
                            </div>
                            <a href="javascript:;" class="plan-btn btn-iridescent pay-vip" data-plan="vip_2">开启加冕</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- 3. New VIP Privileges Section -->
            <div class="vip-privilege-container">
            
                <div class="privilege-section-header">
                    <h2><span class="icon-sparkles">✨</span> 核心特权·矩阵对比 <span class="icon-sparkles">✨</span></h2>
                    <p>一目了然的权益差异，选择适合您的进阶之路</p>
                </div>
                <div class="privilege-compare-box glass-panel">
                    <div class="compare-table-wrapper">
                        <table class="compare-table">
                            <thead>
                                <tr>
                                    <th class="feature-col">特权项目</th>
                                    <th class="lv0-col">
                                        极光会员
                                        <img src="<?php echo ZIB_TEMPLATE_DIRECTORY_URI; ?>/custom-projects/vip-intro/img/crown-silver.webp" class="th-icon" alt="LV0">
                                    </th>
                                    <th class="lv6-col">
                                        星冕会员
                                        <img src="<?php echo ZIB_TEMPLATE_DIRECTORY_URI; ?>/custom-projects/vip-intro/img/IMG_20260106_211017_760.webp" class="th-icon" alt="LV6">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="priority-row">
                                    <td class="feature-name"><i class="fa fa-shopping-bag"></i> 全站付费资源</td>
                                    <td>7折 购买</td>
                                    <td class="highlight-cell">5折 购买</td>
                                </tr>
                                <tr class="priority-row">
                                    <td class="feature-name"><i class="fa fa-percent"></i> 推广返佣计划</td>
                                    <td>每笔 45%</td>
                                    <td class="highlight-cell">每笔 60%</td>
                                </tr>
                                <tr class="priority-row">
                                    <td class="feature-name"><i class="fa fa-paint-brush"></i> 创作分成</td>
                                    <td>支持</td>
                                    <td class="highlight-cell">高达 65%</td>
                                </tr>
                                <tr>
                                    <td class="feature-name"><i class="fa fa-unlock-alt"></i> 会员专属内容</td>
                                    <td>无限访问</td>
                                    <td class="highlight-cell">无限访问</td>
                                </tr>
                                <tr>
                                    <td class="feature-name"><i class="fa fa-user-md"></i> 1v1 指导</td>
                                    <td>喂饭级指导</td>
                                    <td class="highlight-cell">喂饭级指导</td>
                                </tr>
                                <tr>
                                    <td class="feature-name"><i class="fa fa-cloud-download"></i> 资源下载</td>
                                    <td>每日 3次</td>
                                    <td class="highlight-cell">不限次 / 不限速</td>
                                </tr>
                                <tr>
                                    <td class="feature-name"><i class="fa fa-rocket"></i> 网络优化加速</td>
                                    <td>专享 1个月</td>
                                    <td class="highlight-cell">专享 1个月 (加速包)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Section B: Privilege Deep Dive (Wealth Loop) -->
                <div class="privilege-section-header golden-header">
                    <h2>权益深度解析</h2>
                    <div class="golden-statement">
                        <span class="hairline"></span>
                        <p class="gradient-text">不止于省钱，更是一套被动收入的组合拳</p>
                        <span class="hairline"></span>
                    </div>
                </div>
                <div class="wealth-loop-container">
                    
                    <!-- Card 1: Savings (Pink) -->
                    <div class="wealth-card wealth-card-savings glass-panel">
                        <div class="wealth-icon-box savings-gradient">
                            <i class="fa fa-tags"></i>
                        </div>
                        <h3>全站资源 尊享折扣</h3>
                        <div class="wealth-highlight">
                            <span class="big-num">5</span>折 <span class="sub-text badge-pink">半价购</span>
                        </div>
                        <p>只要是付费内容，会员即享超低折扣。<br><strong>极光会员</strong>享 7 折优惠，<strong>星冕会员</strong>更尊享 5 折半价。每一分投入，都物超所值。</p>
                    </div>

                    <!-- Card 2: Referral (Blue) -->
                    <div class="wealth-card wealth-card-referral glass-panel">
                        <div class="wealth-icon-box referral-gradient">
                            <i class="fa fa-users"></i>
                        </div>
                        <h3>高额返佣 躺赚收益</h3>
                        <div class="wealth-highlight">
                            <span class="big-num">60</span>% <span class="sub-text badge-blue">顶格佣金</span>
                        </div>
                        <p>专属链接一键推广，访客登录即<strong>永久绑定</strong>。<br><strong>星冕会员</strong>独享 60% 佣金（例：100元商品立赚60元）。每一次分享，都是管道收入的开始。</p>
                    </div>

                    <!-- Card 3: Creator (Gold) -->
                    <div class="wealth-card wealth-card-creator glass-panel highlight-border">
                        <div class="wealth-icon-box creator-gradient">
                            <i class="fa fa-diamond"></i>
                        </div>
                        <h3>创作分成 互利共生</h3>
                        <div class="wealth-highlight gold-text">
                            <span class="big-num">86</span>% <span class="sub-text badge-gold">综合回报</span>
                        </div>
                        <p>加入创作者计划，收益多重叠加！<br>在 60% 返佣基础上，再享剩余利润的 <strong>65%</strong> 分成。</p>
                        <div class="calc-box">
                            <span class="calc-label">💰 收益演示 (100元商品)</span>
                            <div class="calc-formula">
                                <span>60元(佣)</span> + <span>26元(分)</span> = <strong>86元</strong>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="white-label-section">
                    <div class="wl-content">
                        <span class="wl-badge">Ultimate Privilege · 终极特权</span>
                        <h2>拥有您的旗舰平台</h2>
                        <h3 class="gradient-text-gold">You Become the Owner</h3>
                        <p>我们将精心打磨每个细节的完美移动端着陆页，直接交付给您。<br>
                        模型中您看到的每个按钮、每个链接，都将替换为您专属的购买链接和指向您私域的链接。</p>
                        <ul class="wl-features">
                            <li><i class="fa fa-check-circle"></i> <span>独立品牌 (White Label Branding)</span></li>
                            <li><i class="fa fa-link"></i> <span>专属链接 (Custom Affiliate Links)</span></li>
                            <li><i class="fa fa-users"></i> <span>私域流量 (Traffic Sovereignty)</span></li>
                        </ul>
                        <div class="wl-action-hint">
                            <i class="fa fa-hand-pointer-o"></i> <span class="text-desktop">右侧</span><span class="text-mobile">下方为</span> <strong>实时交互</strong> 演示，可滑动体验
                        </div>
                    </div>
                    <div class="wl-visual">
                         <div class="phone-mockup">
                             <div class="dynamic-island"></div>
                             <div class="phone-screen">
                                 <iframe 
                                     class="lazy-iframe"
                                     data-src="https://mobile-landing-1zi.pages.dev" 
                                     title="Mobile Landing Demo"
                                     frameborder="0"
                                     scrolling="yes"
                                     loading="lazy">
                                 </iframe>
                             </div>
                             <div class="phone-glare"></div>
                         </div>
                         <!-- Decorative elements to reinforce 'Owner' status -->
                         <div class="owner-tag">
                             <i class="fa fa-user-circle"></i> 归属者：<strong>您</strong>
                         </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <link rel="stylesheet" href="<?php echo ZIB_TEMPLATE_DIRECTORY_URI; ?>/css/vip-intro.css?v=<?php echo time(); ?>">

    <script>
    (function() {
        const lv6Card = document.querySelector('.lv6-card');
        if (!lv6Card) return;

        const content = lv6Card.querySelector('.plan-content');
        const watermark = lv6Card.querySelector('.card-watermark-icon img');

        // --- PC: Mouse Move ---
        lv6Card.addEventListener('mousemove', (e) => {
            if (window.innerWidth <= 767) return; // Disable 3D tilt on mobile as requested

            const rect = lv6Card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (centerY - y) / 10;
            const rotateY = (x - centerX) / 15;

            content.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            if(watermark) watermark.style.transform = `translateZ(-15px) translateX(${-rotateY * 2}px) translateY(${rotateX * 2}px)`;
        });

        lv6Card.addEventListener('mouseleave', () => {
            content.style.transform = `rotateX(0deg) rotateY(0deg)`;
            if(watermark) watermark.style.transform = `translateZ(-15px) translateX(0) translateY(0)`;
        });
    })();
    </script>
    
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const iframe = document.querySelector('.lazy-iframe');
        if (iframe && 'IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        iframe.src = iframe.dataset.src;
                        observer.unobserve(iframe);
                    }
                });
            }, { rootMargin: "50% 0px" }); // Load when within 50% viewport height
            observer.observe(iframe);
        } else if (iframe) {
            // Fallback for very old browsers
            iframe.src = iframe.dataset.src;
        }
    });
    </script>

    <!-- Shield & Copyright Protocol (L1 + L3) -->



<?php get_footer(); ?>