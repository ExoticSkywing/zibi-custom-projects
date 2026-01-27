# VIP 折扣互斥修复

## 问题描述

星冕会员（VIP2）购买商品时，同时享受了"极光会员7折"和"星冕会员5折"两个折扣，导致最终折扣变成 35折（0.5×0.7）而非预期的 5折。

## 解决方案

将后台"VIP1及以上"选项的判断逻辑从 `>=1` 改为 `==1`，使其变为"仅VIP1可用"。

## 修改的文件

### 1. PHP 后端逻辑
**文件**: `inc/functions/shop/inc/discount.php`  
**位置**: 第142行

```php
// 原代码
return $_user_data['vip_level'] >= 1;

// 修改后
return $_user_data['vip_level'] == 1; // 自定义修改：仅VIP1可用，VIP2不叠加此折扣
```

### 2. JS 前端逻辑
**文件**: `inc/functions/shop/assets/js/main.js`  
**位置**: 第790行

```javascript
// 原代码
discount_dependency__user_data['vip_level'] < 1

// 修改后
discount_dependency__user_data['vip_level'] !== 1 // 自定义修改：仅VIP1可用
```

## 主题更新后恢复

运行恢复脚本：
```bash
cd /www/wwwroot/xingxy.manyuzo.com/wp-content/themes/zibll/custom-projects/vip-discount-fix
bash restore.sh
```

## 修改日期

- 2026-01-27: 首次修改
