<?php

namespace Nilnice\Payment;

final class Constant
{
    public const VERSION = '0.1.0';

    /**
     * 支付宝公共 API 列表
     */
    public const ALI_PAY = 'alipay';
    public const ALI_PAY_PRO_URI = 'https://openapi.alipay.com/gateway.do';
    public const ALI_PAY_DEV_URI = 'https://openapi.alipaydev.com/gateway.do';
    public const ALI_PAY_REFUND = 'alipay.trade.refund'; // 统一收单交易退款接口
    public const ALI_PAY_REFUND_QUERY = 'alipay.trade.fastpay.refund.query'; // 统一收单交易退款查询接口
    public const ALI_PAY_QUERY = 'alipay.trade.query'; // 统一收单线下交易查询接口
    public const ALI_PAY_CLOSE = 'alipay.trade.close'; // 统一收单交易关闭接口
    public const ALI_PAY_BILL_QUERY = 'alipay.data.dataservice.bill.downloadurl.query'; // 查询对账单下载地址

    /**
     * 支付宝电脑网站支付 - 用户在商家网站上完成付款
     */
    public const ALI_PAY_WEB = 'ali_web'; // 支付宝 Web 支付
    public const ALI_PAY_WEB_PRO_CODE = ['product_code' => 'FAST_INSTANT_TRADE_PAY'];
    public const ALI_PAY_WEB_PAY = 'alipay.trade.page.pay'; // 统一收单下单并支付页面接口

    /**
     * 支付宝手机网站支付 - 用户在商家手机网站进行付款
     */
    public const ALI_PAY_WAP_PRO_CODE = ['product_code' => 'QUICK_WAP_WAY'];
    public const ALI_PAY_WAP_PAY = 'alipay.trade.wap.pay'; // 手机网页支付接口

    /**
     * 支付宝 APP 支付 - 用户在商家 app 内进行付款
     */
    public const ALI_PAY_APP_PRO_CODE = ['product_code' => 'QUICK_MSECURITY_PAY'];
    public const ALI_PAY_APP_PAY = 'alipay.trade.app.pay'; // 统一收单下单并支付页面接口


    /**
     * 支付宝当面付 - 用户扫描商家的二维码完成付款
     */
    public const ALI_PAY_SCAN_PRO_CODE = ['product_code' => ''];
    public const ALI_PAY_SCAN_PAY = 'alipay.trade.precreate'; // 统一收单线下交易预创建（扫码支付）

    /**
     * 支付宝当面付 - 商家扫描用户的付款码完成付款
     */
    public const ALI_PAY_BAR_PRO_CODE = ['product_code' => 'FACE_TO_FACE_PAYMENT'];
    public const ALI_PAY_BAR_PAY = 'alipay.trade.pay'; // 统一收单交易支付接口（条码支付）

    /**
     * 微信支付公共 API 列表
     */
    public const WX_PAY_PRO_URI = 'https://api.mch.weixin.qq.com/'; // 国内接入点
    public const WX_PAY_DEV_URI = 'https://api.mch.weixin.qq.com/sandboxnew/'; // 仿真接入点
    public const WX_PAY_PRO_HK_URI = 'https://apihk.mch.weixin.qq.com/'; // 东南亚接入点
    public const WX_PAY_PREPARE_URI = 'pay/unifiedorder'; // 统一下单
    public const WX_PAY_QUERY = 'pay/orderquery'; // 查询订单

    /**
     * 微信刷卡支付 - 用户打开微信钱包的刷卡的界面，商户扫码后提交完成支付
     */
    public const WX_PAY_BAR_PAY = '';

    /**
     * 微信扫码支付 - 用户打开微信扫一扫，扫描商户的二维码后完成支付
     */
    public const WX_PAY_WAP_TYPE = 'MWEB';

    /**
     * 微信公众号支付 - 用户在微信内进入商家 H5 页面，页面内调用 JSSDK 完成支付
     */

    /**
     * 微信 APP 支付 - 商户 APP 中集成微信 SDK，用户点击后跳转到微信内完成支付
     */

    /**
     * 微信 H5 支付 - 用户在微信以外的手机浏览器请求微信支付的场景唤起微信支付
     */

    /**
     * 微信小程序支付 - 用户在微信小程序中使用微信支付的场景
     */

    /**
     * 异常代码
     */
    public const ALI_PAY_PUBLIC_KEY_INVALID = 1001;
    public const ALI_PAY_PRIVATE_KEY_INVALID = 1002;
    public const WX_PAY_KEY_INVALID = 1101;
}
