#!/bin/bash
# VIP折扣互斥修复 - 恢复脚本
# 当子比主题更新后运行此脚本恢复修改

THEME_DIR="/www/wwwroot/xingxy.manyuzo.com/wp-content/themes/zibll"
DISCOUNT_PHP="$THEME_DIR/inc/functions/shop/inc/discount.php"
MAIN_JS="$THEME_DIR/inc/functions/shop/assets/js/main.js"

echo "=========================================="
echo "VIP折扣互斥修复 - 恢复脚本"
echo "=========================================="

# 检查文件是否存在
if [ ! -f "$DISCOUNT_PHP" ]; then
    echo "❌ 错误: discount.php 文件不存在"
    exit 1
fi

if [ ! -f "$MAIN_JS" ]; then
    echo "❌ 错误: main.js 文件不存在"
    exit 1
fi

# 备份原文件
echo "📦 备份原文件..."
cp "$DISCOUNT_PHP" "$DISCOUNT_PHP.bak.$(date +%Y%m%d%H%M%S)"
cp "$MAIN_JS" "$MAIN_JS.bak.$(date +%Y%m%d%H%M%S)"

# 修改 discount.php
echo "🔧 修改 discount.php..."
sed -i "s/return \$_user_data\['vip_level'\] >= 1;/return \$_user_data['vip_level'] == 1; \/\/ 自定义修改：仅VIP1可用，VIP2不叠加此折扣/g" "$DISCOUNT_PHP"

# 修改 main.js
echo "🔧 修改 main.js..."
sed -i "s/discount_dependency__user_data\['vip_level'\] < 1)/discount_dependency__user_data['vip_level'] !== 1) \/\/ 自定义修改：仅VIP1可用/g" "$MAIN_JS"

echo ""
echo "✅ 修改完成！"
echo ""
echo "修改内容："
echo "  - discount.php: VIP1及以上 => 仅VIP1"
echo "  - main.js: VIP1及以上 => 仅VIP1"
echo ""
echo "请清除网站缓存后验证效果。"
