#!/bin/bash
# VIP折扣互斥修复 + 数量限制功能 - 恢复脚本
# 当子比主题更新后运行此脚本恢复修改

THEME_DIR="/www/wwwroot/xingxy.manyuzo.com/wp-content/themes/zibll"

echo "=========================================="
echo "子比主题自定义修改 - 恢复脚本"
echo "=========================================="

# 备份原文件
echo "📦 备份原文件..."
BACKUP_DIR="$THEME_DIR/custom-projects/vip-discount-fix/backup_$(date +%Y%m%d%H%M%S)"
mkdir -p "$BACKUP_DIR"
cp "$THEME_DIR/inc/functions/shop/inc/discount.php" "$BACKUP_DIR/"
cp "$THEME_DIR/inc/functions/shop/inc/order.php" "$BACKUP_DIR/"
cp "$THEME_DIR/inc/functions/shop/assets/js/main.js" "$BACKUP_DIR/"
cp "$THEME_DIR/inc/functions/shop/admin/options/term-option.php" "$BACKUP_DIR/"
cp "$THEME_DIR/inc/functions/shop/page/dis.php" "$BACKUP_DIR/"
echo "   备份目录: $BACKUP_DIR"

echo ""
echo "🔧 修改 1/5: discount.php (VIP1精确匹配 + 数量限制函数)"
sed -i "s/return \$_user_data\['vip_level'\] >= 1;/return \$_user_data['vip_level'] == 1; \/\/ 自定义修改：仅VIP1可用，VIP2不叠加此折扣/g" "$THEME_DIR/inc/functions/shop/inc/discount.php"

echo "🔧 修改 2/5: main.js (VIP1精确匹配)"
sed -i "s/discount_dependency__user_data\['vip_level'\] < 1)/discount_dependency__user_data['vip_level'] !== 1) \/\/ 自定义修改：仅VIP1可用/g" "$THEME_DIR/inc/functions/shop/assets/js/main.js"

echo ""
echo "⚠️  以下修改需要手动恢复（涉及多行代码）:"
echo "   - discount.php: 添加 zib_shop_discount_count_limit_check 函数"
echo "   - discount.php: 添加 count_limit 数据字段"
echo "   - order.php: 添加数量限制判断调用"
echo "   - main.js: 添加数量限制判断"
echo "   - term-option.php: 添加数量限制输入框"
echo "   - dis.php: 添加满X件可用标签"
echo ""
echo "📋 详细修改内容请查看 README.md"
echo ""
echo "✅ 基础修改完成！请手动恢复复杂修改或联系开发者。"
