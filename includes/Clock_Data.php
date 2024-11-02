<?php



// This is form element array (set default parameters)
$Form_Elements_Array=
array(
'title'=>'Clock', 
'clock_type'=>'analog',
'width' => 150,
'height' =>150, 
'time_style'=>12,
// face & body flare options
'bodyflare'=>'on',
'faceflare'=>'on',
// Set gmt zone
'gmt'=>'local',
// Set background style
'imagearray'=>'',
// Set color variables
// Body color:
'bodycolor'=>'#0066ff',
// Face background color
'facecolor'=>'#cccccc',
// Clock-face color:
'numeralcolor'=>'#000000',
// Second hand color:
'scolor'=>'#ff0000'
);





















// Set Clock background image 
// &imagearray=&
// &imagearray=flags/dz.gif&
$‘lock_background_Image=Array(
Array('value'=>'1','text'=>'No image','imagearray'=>''),
Array('value'=>'2','text'=>'Afghanistan','imagearray'=>'af'),
Array('value'=>'3','text'=>'Aland Islands','imagearray'=>'ax'),
Array('value'=>'4','text'=>'Albania','imagearray'=>'al'),
Array('value'=>'5','text'=>'Algeria','imagearray'=>'dz'),
Array('value'=>'6','text'=>'American Samoa','imagearray'=>'as'),
Array('value'=>'7','text'=>'Andorra','imagearray'=>'ad'),
Array('value'=>'8','text'=>'Angola','imagearray'=>'ao'),
Array('value'=>'9','text'=>'Anguilla','imagearray'=>'ai'),
Array('value'=>'10','text'=>'Antarctica','imagearray'=>'aq'),
Array('value'=>'11','text'=>'Antigua and Barbuda','imagearray'=>'ag'),
Array('value'=>'12','text'=>'Argentina','imagearray'=>'ar'),
Array('value'=>'13','text'=>'Australia','imagearray'=>'au'),
Array('value'=>'14','text'=>'Austria','imagearray'=>'at'),
Array('value'=>'15','text'=>'Azerbaijan','imagearray'=>'az'),
Array('value'=>'16','text'=>'Bahamas','imagearray'=>'bs'),
Array('value'=>'17','text'=>'Bahrain','imagearray'=>'bh'),
Array('value'=>'18','text'=>'Bangladesh','imagearray'=>'bd'),
Array('value'=>'19','text'=>'Barbados','imagearray'=>'bb'),
Array('value'=>'20','text'=>'Belarus','imagearray'=>'by'),
Array('value'=>'21','text'=>'Belgium','imagearray'=>'be'),
Array('value'=>'22','text'=>'Belize','imagearray'=>'bz'),
Array('value'=>'23','text'=>'Benin','imagearray'=>'bj'),
Array('value'=>'24','text'=>'Bermuda','imagearray'=>'bm'),
Array('value'=>'25','text'=>'Bhutan','imagearray'=>'bt'),
Array('value'=>'26','text'=>'Bolivia','imagearray'=>'bo'),
Array('value'=>'27','text'=>'Bosnia and Herzegovina','imagearray'=>'ba'),
Array('value'=>'28','text'=>'Botswana','imagearray'=>'bw'),
Array('value'=>'29','text'=>'Bouvet Island','imagearray'=>'bv'),
Array('value'=>'30','text'=>'Brazil','imagearray'=>'br'),
Array('value'=>'31','text'=>'British Indian Ocean Territory','imagearray'=>'io'),
Array('value'=>'32','text'=>'Brunei Darussalam','imagearray'=>'bn'),
Array('value'=>'33','text'=>'Bulgaria','imagearray'=>'bg'),
Array('value'=>'34','text'=>'Burkina Faso','imagearray'=>'bf'),
Array('value'=>'35','text'=>'Burundi','imagearray'=>'bi'),
Array('value'=>'36','text'=>'Cambodia','imagearray'=>'kh'),
Array('value'=>'37','text'=>'Cameroon','imagearray'=>'cm'),
Array('value'=>'38','text'=>'Canada','imagearray'=>'ca'),
Array('value'=>'39','text'=>'Cape Verde','imagearray'=>'cv'),
Array('value'=>'40','text'=>'Cayman Islands','imagearray'=>'ky'),
Array('value'=>'41','text'=>'Central African Republic','imagearray'=>'cf'),
Array('value'=>'42','text'=>'Chad','imagearray'=>'td'),
Array('value'=>'43','text'=>'Chile','imagearray'=>'cl'),
Array('value'=>'44','text'=>'China','imagearray'=>'cn'),
Array('value'=>'45','text'=>'Christmas Island','imagearray'=>'cx'),
Array('value'=>'46','text'=>'Cocos (Keeling) Islands','imagearray'=>'cc'),
Array('value'=>'47','text'=>'Colombia','imagearray'=>'co'),
Array('value'=>'48','text'=>'Comoros','imagearray'=>'km'),
Array('value'=>'49','text'=>'Congo','imagearray'=>'cg'),
Array('value'=>'50','text'=>'Congo','imagearray'=>'cd'),
Array('value'=>'51','text'=>'Cook Islands','imagearray'=>'ck'),
Array('value'=>'52','text'=>'Costa Rica','imagearray'=>'cr'),
Array('value'=>'53','text'=>'Cote D\'Ivoire','imagearray'=>'ci'),
Array('value'=>'54','text'=>'Croatia','imagearray'=>'hr'),
Array('value'=>'55','text'=>'Cuba','imagearray'=>'cu'),
Array('value'=>'56','text'=>'Cyprus','imagearray'=>'cy'),
Array('value'=>'57','text'=>'Czech Republic','imagearray'=>'cz'),
Array('value'=>'58','text'=>'Denmark','imagearray'=>'dk'),
Array('value'=>'59','text'=>'Djibouti','imagearray'=>'dj'),
Array('value'=>'60','text'=>'Dominica','imagearray'=>'dm'),
Array('value'=>'61','text'=>'Dominican Republic','imagearray'=>'do'),
Array('value'=>'62','text'=>'Ecuador','imagearray'=>'ec'),
Array('value'=>'63','text'=>'Egypt','imagearray'=>'eg'),
Array('value'=>'64','text'=>'El Salvador','imagearray'=>'sv'),
Array('value'=>'65','text'=>'Equatorial Guinea','imagearray'=>'gq'),
Array('value'=>'66','text'=>'Eritrea','imagearray'=>'er'),
Array('value'=>'67','text'=>'Estonia','imagearray'=>'ee'),
Array('value'=>'68','text'=>'Ethiopia','imagearray'=>'et'),
Array('value'=>'69','text'=>'Falkland Islands (Malvinas)','imagearray'=>'fk'),
Array('value'=>'70','text'=>'Faroe Islands','imagearray'=>'fo'),
Array('value'=>'71','text'=>'Fiji','imagearray'=>'fj'),
Array('value'=>'72','text'=>'Finland','imagearray'=>'fi'),
Array('value'=>'73','text'=>'France','imagearray'=>'fr'),
Array('value'=>'74','text'=>'French Guiana','imagearray'=>'gf'),
Array('value'=>'75','text'=>'French Polynesia','imagearray'=>'pf'),
Array('value'=>'76','text'=>'French Southern Territories','imagearray'=>'tf'),
Array('value'=>'77','text'=>'Gabon','imagearray'=>'ga'),
Array('value'=>'78','text'=>'Gambia','imagearray'=>'gm'),
Array('value'=>'79','text'=>'Georgia','imagearray'=>'ge'),
Array('value'=>'80','text'=>'Germany','imagearray'=>'de'),
Array('value'=>'81','text'=>'Ghana','imagearray'=>'gh'),
Array('value'=>'82','text'=>'Gibraltar','imagearray'=>'gi'),
Array('value'=>'83','text'=>'Greece','imagearray'=>'gr'),
Array('value'=>'84','text'=>'Greenland','imagearray'=>'gl'),
Array('value'=>'85','text'=>'Grenada','imagearray'=>'gd'),
Array('value'=>'86','text'=>'Guadeloupe','imagearray'=>'gp'),
Array('value'=>'87','text'=>'Guam','imagearray'=>'gu'),
Array('value'=>'88','text'=>'Guatemala','imagearray'=>'gt'),
Array('value'=>'89','text'=>'Guernsey','imagearray'=>'gg'),
Array('value'=>'90','text'=>'Guinea','imagearray'=>'gn'),
Array('value'=>'91','text'=>'Guinea-Bissau','imagearray'=>'gw'),
Array('value'=>'92','text'=>'Guyana','imagearray'=>'gy'),
Array('value'=>'93','text'=>'Haiti','imagearray'=>'ht'),
Array('value'=>'94','text'=>'Heard Island and Mcdonald Islands','imagearray'=>'hm'),
Array('value'=>'95','text'=>'Holy See (Vatican City State)','imagearray'=>'va'),
Array('value'=>'96','text'=>'Honduras','imagearray'=>'hn'),
Array('value'=>'97','text'=>'Hong Kong','imagearray'=>'hk'),
Array('value'=>'98','text'=>'Hungary','imagearray'=>'hu'),
Array('value'=>'99','text'=>'Iceland','imagearray'=>'is'),
Array('value'=>'100','text'=>'India','imagearray'=>'in'),
Array('value'=>'101','text'=>'Indonesia','imagearray'=>'id'),
Array('value'=>'102','text'=>'Iran','imagearray'=>'ir'),
Array('value'=>'103','text'=>'Iraq','imagearray'=>'iq'),
Array('value'=>'104','text'=>'Ireland','imagearray'=>'ie'),
Array('value'=>'105','text'=>'Isle of Man','imagearray'=>'im'),
Array('value'=>'106','text'=>'Israel','imagearray'=>'il'),
Array('value'=>'107','text'=>'Italy','imagearray'=>'it'),
Array('value'=>'108','text'=>'Jamaica','imagearray'=>'jm'),
Array('value'=>'109','text'=>'Japan','imagearray'=>'jp'),
Array('value'=>'110','text'=>'Jersey','imagearray'=>'je'),
Array('value'=>'111','text'=>'Jordan','imagearray'=>'jo'),
Array('value'=>'112','text'=>'Kazakhstan','imagearray'=>'kz'),
Array('value'=>'113','text'=>'KENYA','imagearray'=>'ke'),
Array('value'=>'114','text'=>'Kiribati','imagearray'=>'ki'),
Array('value'=>'115','text'=>'Korea','imagearray'=>'kp'),
Array('value'=>'116','text'=>'Korea','imagearray'=>'kr'),
Array('value'=>'117','text'=>'Kuwait','imagearray'=>'kw'),
Array('value'=>'118','text'=>'Kyrgyzstan','imagearray'=>'kg'),
Array('value'=>'119','text'=>'Lao People\'s Democratic Republic','imagearray'=>'la'),
Array('value'=>'120','text'=>'Latvia','imagearray'=>'lv'),
Array('value'=>'121','text'=>'Lebanon','imagearray'=>'lb'),
Array('value'=>'122','text'=>'Lesotho','imagearray'=>'ls'),
Array('value'=>'123','text'=>'Liberia','imagearray'=>'lr'),
Array('value'=>'124','text'=>'Libyan Arab Jamahiriya','imagearray'=>'ly'),
Array('value'=>'125','text'=>'Liechtenstein','imagearray'=>'li'),
Array('value'=>'126','text'=>'Lithuania','imagearray'=>'lt'),
Array('value'=>'127','text'=>'Luxembourg','imagearray'=>'lu'),
Array('value'=>'128','text'=>'Macao','imagearray'=>'mo'),
Array('value'=>'129','text'=>'Macedonia','imagearray'=>'mk'),
Array('value'=>'130','text'=>'Madagascar','imagearray'=>'mg'),
Array('value'=>'131','text'=>'Malawi','imagearray'=>'mw'),
Array('value'=>'132','text'=>'Malaysia','imagearray'=>'my'),
Array('value'=>'133','text'=>'Maldives','imagearray'=>'mv'),
Array('value'=>'134','text'=>'Mali','imagearray'=>'ml'),
Array('value'=>'135','text'=>'Malta','imagearray'=>'mt'),
Array('value'=>'136','text'=>'Marshall Islands','imagearray'=>'mh'),
Array('value'=>'137','text'=>'Martinique','imagearray'=>'mq'),
Array('value'=>'138','text'=>'Mauritania','imagearray'=>'mr'),
Array('value'=>'139','text'=>'Mauritius','imagearray'=>'mu'),
Array('value'=>'140','text'=>'Mayotte','imagearray'=>'yt'),
Array('value'=>'141','text'=>'Mexico','imagearray'=>'mx'),
Array('value'=>'142','text'=>'Micronesia','imagearray'=>'fm'),
Array('value'=>'143','text'=>'Moldova','imagearray'=>'md'),
Array('value'=>'144','text'=>'Monaco','imagearray'=>'mc'),
Array('value'=>'145','text'=>'Mongolia','imagearray'=>'mn'),
Array('value'=>'146','text'=>'Montenegro','imagearray'=>'me'),
Array('value'=>'147','text'=>'Montserrat','imagearray'=>'ms'),
Array('value'=>'148','text'=>'Morocco','imagearray'=>'ma'),
Array('value'=>'149','text'=>'Mozambique','imagearray'=>'mz'),
Array('value'=>'150','text'=>'Myanmar','imagearray'=>'mm'),
Array('value'=>'151','text'=>'Namibia','imagearray'=>'na'),
Array('value'=>'152','text'=>'Nauru','imagearray'=>'nr'),
Array('value'=>'153','text'=>'Nepal','imagearray'=>'np'),
Array('value'=>'154','text'=>'Netherlands','imagearray'=>'nl'),
Array('value'=>'155','text'=>'Netherlands Antilles','imagearray'=>'an'),
Array('value'=>'156','text'=>'New Caledonia','imagearray'=>'nc'),
Array('value'=>'157','text'=>'New Zealand','imagearray'=>'nz'),
Array('value'=>'158','text'=>'Nicaragua','imagearray'=>'ni'),
Array('value'=>'159','text'=>'Niger','imagearray'=>'ne'),
Array('value'=>'160','text'=>'Nigeria','imagearray'=>'ng'),
Array('value'=>'161','text'=>'Niue','imagearray'=>'nu'),
Array('value'=>'162','text'=>'Norfolk Island','imagearray'=>'nf'),
Array('value'=>'163','text'=>'Northern Mariana Islands','imagearray'=>'mp'),
Array('value'=>'164','text'=>'Norway','imagearray'=>'no'),
Array('value'=>'165','text'=>'Oman','imagearray'=>'om'),
Array('value'=>'166','text'=>'Pakistan','imagearray'=>'pk'),
Array('value'=>'167','text'=>'Palau','imagearray'=>'pw'),
Array('value'=>'168','text'=>'Palestinian Territory','imagearray'=>'ps'),
Array('value'=>'169','text'=>'Panama','imagearray'=>'pa'),
Array('value'=>'170','text'=>'Papua New Guinea','imagearray'=>'pg'),
Array('value'=>'171','text'=>'Paraguay','imagearray'=>'py'),
Array('value'=>'172','text'=>'Peru','imagearray'=>'pe'),
Array('value'=>'173','text'=>'Philippines','imagearray'=>'ph'),
Array('value'=>'174','text'=>'Pitcairn','imagearray'=>'pn'),
Array('value'=>'175','text'=>'Poland','imagearray'=>'pl'),
Array('value'=>'176','text'=>'Portugal','imagearray'=>'pt'),
Array('value'=>'177','text'=>'Puerto Rico','imagearray'=>'pr'),
Array('value'=>'178','text'=>'Qatar','imagearray'=>'qa'),
Array('value'=>'179','text'=>'Reunion','imagearray'=>'re'),
Array('value'=>'180','text'=>'Romania','imagearray'=>'ro'),
Array('value'=>'181','text'=>'Russian Federation','imagearray'=>'ru'),
Array('value'=>'182','text'=>'Rwanda','imagearray'=>'rw'),
Array('value'=>'183','text'=>'Saint Helena','imagearray'=>'sh'),
Array('value'=>'184','text'=>'Saint Kitts and Nevis','imagearray'=>'kn'),
Array('value'=>'185','text'=>'Saint Lucia','imagearray'=>'lc'),
Array('value'=>'186','text'=>'Saint Pierre and Miquelon','imagearray'=>'pm'),
Array('value'=>'187','text'=>'Saint Vincent and the Grenadines','imagearray'=>'vc'),
Array('value'=>'188','text'=>'Samoa','imagearray'=>'ws'),
Array('value'=>'189','text'=>'San Marino','imagearray'=>'sm'),
Array('value'=>'190','text'=>'Sao Tome and Principe','imagearray'=>'st'),
Array('value'=>'191','text'=>'Saudi Arabia','imagearray'=>'sa'),
Array('value'=>'192','text'=>'Senegal','imagearray'=>'sn'),
Array('value'=>'193','text'=>'Serbia','imagearray'=>'rs'),
Array('value'=>'194','text'=>'Seychelles','imagearray'=>'sc'),
Array('value'=>'195','text'=>'Sierra Leone','imagearray'=>'sl'),
Array('value'=>'196','text'=>'Singapore','imagearray'=>'sg'),
Array('value'=>'197','text'=>'Slovakia','imagearray'=>'sk'),
Array('value'=>'198','text'=>'Slovenia','imagearray'=>'si'),
Array('value'=>'199','text'=>'Solomon Islands','imagearray'=>'sb'),
Array('value'=>'200','text'=>'Somalia','imagearray'=>'so'),
Array('value'=>'201','text'=>'South Africa','imagearray'=>'za'),
Array('value'=>'202','text'=>'South Georgia and the South Sandwich Islands','imagearray'=>'gs'),
Array('value'=>'203','text'=>'Spain','imagearray'=>'es'),
Array('value'=>'204','text'=>'Sri Lanka','imagearray'=>'lk'),
Array('value'=>'205','text'=>'Sudan','imagearray'=>'sd'),
Array('value'=>'206','text'=>'Suriname','imagearray'=>'sr'),
Array('value'=>'207','text'=>'Svalbard and Jan Mayen','imagearray'=>'sj'),
Array('value'=>'208','text'=>'Swaziland','imagearray'=>'sz'),
Array('value'=>'209','text'=>'Sweden','imagearray'=>'se'),
Array('value'=>'210','text'=>'Switzerland','imagearray'=>'ch'),
Array('value'=>'211','text'=>'Syrian Arab Republic','imagearray'=>'sy'),
Array('value'=>'212','text'=>'Taiwan','imagearray'=>'tw'),
Array('value'=>'213','text'=>'Tajikistan','imagearray'=>'tj'),
Array('value'=>'214','text'=>'Tanzania','imagearray'=>'tz'),
Array('value'=>'215','text'=>'Thailand','imagearray'=>'th'),
Array('value'=>'216','text'=>'Timor-Leste','imagearray'=>'tl'),
Array('value'=>'217','text'=>'Togo','imagearray'=>'tg'),
Array('value'=>'218','text'=>'Tokelau','imagearray'=>'tk'),
Array('value'=>'219','text'=>'Tonga','imagearray'=>'to'),
Array('value'=>'220','text'=>'Trinidad and Tobago','imagearray'=>'tt'),
Array('value'=>'221','text'=>'Tunisia','imagearray'=>'tn'),
Array('value'=>'222','text'=>'Turkey','imagearray'=>'tr'),
Array('value'=>'223','text'=>'Turkmenistan','imagearray'=>'tm'),
Array('value'=>'224','text'=>'Turks and Caicos Islands','imagearray'=>'tc'),
Array('value'=>'225','text'=>'Tuvalu','imagearray'=>'tv'),
Array('value'=>'226','text'=>'Uganda','imagearray'=>'ug'),
Array('value'=>'227','text'=>'Ukraine','imagearray'=>'ua'),
Array('value'=>'228','text'=>'United Arab Emirates','imagearray'=>'ae'),
Array('value'=>'229','text'=>'United Kingdom','imagearray'=>'gb'),
Array('value'=>'230','text'=>'United States','imagearray'=>'us'),
Array('value'=>'231','text'=>'United States Minor Outlying Islands','imagearray'=>'um'),
Array('value'=>'232','text'=>'Uruguay','imagearray'=>'uy'),
Array('value'=>'233','text'=>'Uzbekistan','imagearray'=>'uz'),
Array('value'=>'234','text'=>'Vanuatu','imagearray'=>'vu'),
Array('value'=>'235','text'=>'Vatican City State','imagearray'=>'va'),
Array('value'=>'236','text'=>'Venezuela','imagearray'=>'ve'),
Array('value'=>'237','text'=>'Viet Nam','imagearray'=>'vn'),
Array('value'=>'238','text'=>'Virgin Islands','imagearray'=>'vg'),
Array('value'=>'239','text'=>'Virgin Islands','imagearray'=>'vi'),
Array('value'=>'240','text'=>'Wallis and Futuna','imagearray'=>'wf'),
Array('value'=>'241','text'=>'Western Sahara','imagearray'=>'eh'),
Array('value'=>'242','text'=>'Yemen','imagearray'=>'ye'),
Array('value'=>'243','text'=>'Zaire','imagearray'=>'cd'),
Array('value'=>'244','text'=>'Zambia','imagearray'=>'zm'),
Array('value'=>'245','text'=>'Zimbabwe','imagearray'=>'zw'),
);





































// Set clock face & body flare
$Clock_bodyflare=Array(
Array('value'=>'1','bodyflare'=>'true'),
Array('value'=>'2','bodyflare'=>'false'),
);



$Clock_faceflare=Array(
Array('value'=>'1','faceflare'=>'true'),
Array('value'=>'2','faceflare'=>'false'),
);
































// Set Clock hours style 12/24
$Clock_Hours_Style=Array(
Array('value'=>'1','text'=>'12 hours style','time_style'=>'12'),
Array('value'=>'2','text'=>'24 hours style','time_style'=>'24'),
);




                              






























  // Set clock type
$‘lock_Type=Array(
Array('value'=>'1','text'=>'analog','type'=>'analog'),
Array('value'=>'2','text'=>'digital','type'=>'digital'),
);











































// set time zones
$Time_Zones=Array(


Array('value'=>'1','text'=>'Local Computer time','gmt_in_min'=>'local','dl_start'=>'','dl_end'=>''),
Array('value'=>'2','text'=>'International Date Line West (Eniwetok, Kwajalein)','gmt_in_min'=>'-720','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'3','text'=>'Midway Island, Samoa','gmt_in_min'=>'-660','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'4','text'=>'Hawaii','gmt_in_min'=>'-600','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'5','text'=>'Alaska','gmt_in_min'=>'-540','dl_start'=>'3|2SU|2','dl_end'=>'11|1SU|2'),
Array('value'=>'6','text'=>'Pacific Time (US & Canada)','gmt_in_min'=>'Tijuana','dl_start'=>'-480','dl_end'=>'3|2SU|2'),
Array('value'=>'7','text'=>'Arizona','gmt_in_min'=>'-420','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'8','text'=>'Mountain Time (US & Canada)','gmt_in_min'=>'-420','dl_start'=>'3|2SU|2','dl_end'=>'11|1SU|2'),
Array('value'=>'9','text'=>'Central Time (US & Canada)','gmt_in_min'=>'-360','dl_start'=>'3|2SU|2','dl_end'=>'11|1SU|2'),
Array('value'=>'10','text'=>'Mexico City','gmt_in_min'=>'-360','dl_start'=>'4|1SU|2','dl_end'=>'10|-1SU|2'),
Array('value'=>'11','text'=>'Central America','gmt_in_min'=>'-360','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'12','text'=>'Saskatchewan','gmt_in_min'=>'-360','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'13','text'=>'Eastern Time (US & Canada)','gmt_in_min'=>'-300','dl_start'=>'3|2SU|2','dl_end'=>'11|1SU|2'),
Array('value'=>'14','text'=>'Bogota, Lima, Quito','gmt_in_min'=>'-300','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'15','text'=>'Indiana (East)','gmt_in_min'=>'-300','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'16','text'=>'Atlantic Time (Canada)','gmt_in_min'=>'-240','dl_start'=>'3|2SU|2','dl_end'=>'11|1SU|2'),
Array('value'=>'17','text'=>'Santiago','gmt_in_min'=>'-240','dl_start'=>'10|2SA|','dl_end'=>'3|2SA|'),
Array('value'=>'18','text'=>'Caracas, La Paz','gmt_in_min'=>'-240','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'19','text'=>'Newfoundland','gmt_in_min'=>'-210','dl_start'=>'4|1SU|2','dl_end'=>'10|-1SU|2'),
Array('value'=>'20','text'=>'Brasilia','gmt_in_min'=>'-180','dl_start'=>'10|3SU|2','dl_end'=>'2|2SU|2'),
Array('value'=>'21','text'=>'Greenland','gmt_in_min'=>'-180','dl_start'=>'4|1SU|2','dl_end'=>'10|-1SU|2'),
Array('value'=>'22','text'=>'Buenos Aires, Georgetown','gmt_in_min'=>'-180','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'23','text'=>'Mid-Atlantic','gmt_in_min'=>'-120','dl_start'=>'3|-1SU|2','dl_end'=>'9|-1SU|2'),
Array('value'=>'24','text'=>'Azores','gmt_in_min'=>'-60','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'25','text'=>'Cape Verde Is.','gmt_in_min'=>'-60','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'26','text'=>'Casablanca, Monrovia','gmt_in_min'=>'0','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'27','text'=>'Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London','gmt_in_min'=>'0','dl_start'=>'3|-1SU|1','dl_end'=>'10|-1SU|2'),
Array('value'=>'28','text'=>'West Central Africa','gmt_in_min'=>'60','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'29','text'=>'Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna','gmt_in_min'=>'60','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'30','text'=>'Belgrade, Bratislava, Budapest, Ljubljana, Prague','gmt_in_min'=>'60','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'31','text'=>'Brussels, Copenhagen, Madrid, Paris','gmt_in_min'=>'60','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'32','text'=>'Sarajevo, Skopje, Warsaw, Zagreb','gmt_in_min'=>'60','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'33','text'=>'Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius','gmt_in_min'=>'120','dl_start'=>'3|-1SU|3','dl_end'=>'10|-1SU|4'),
Array('value'=>'34','text'=>'Harare, Pretoria','gmt_in_min'=>'120','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'35','text'=>'Jerusalem','gmt_in_min'=>'120','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'36','text'=>'Bucharest','gmt_in_min'=>'120','dl_start'=>'3|-1SU|','dl_end'=>'10|-1SU|1'),
Array('value'=>'37','text'=>'Cairo','gmt_in_min'=>'120','dl_start'=>'5|1FR|','dl_end'=>'9|-1FR|'),
Array('value'=>'38','text'=>'Athens, Istanbul, Minsk','gmt_in_min'=>'120','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'39','text'=>'Europe/Moscow','gmt_in_min'=>'180','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'40','text'=>'Kuwait, Riyadh','gmt_in_min'=>'180','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'41','text'=>'Nairobi','gmt_in_min'=>'180','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'42','text'=>'Baghdad','gmt_in_min'=>'180','dl_start'=>'4|1SU|3','dl_end'=>'10|1SU|4'),
Array('value'=>'43','text'=>'Moscow, St. Petersburg, Volgograd','gmt_in_min'=>'180','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'44','text'=>'Tehran','gmt_in_min'=>'210','dl_start'=>'3|1SU|2','dl_end'=>'9|4TU|2'),
Array('value'=>'45','text'=>'Abu Dhabi, Muscat','gmt_in_min'=>'240','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'46','text'=>'Baku, Tbilisi, Yerevan','gmt_in_min'=>'240','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'47','text'=>'Kabul','gmt_in_min'=>'270','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'48','text'=>'Islamabad, Karachi, Tashkent','gmt_in_min'=>'300','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'49','text'=>'Ekaterinburg','gmt_in_min'=>'300','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'50','text'=>'Chennai, Kolkata, Mumbai, New Delhi','gmt_in_min'=>'330','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'51','text'=>'Kathmandu','gmt_in_min'=>'345','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'52','text'=>'Astana, Dhaka','gmt_in_min'=>'360','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'53','text'=>'Sri Jayawardenepura','gmt_in_min'=>'360','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'54','text'=>'Almaty, Novosibirsk','gmt_in_min'=>'360','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'55','text'=>'Rangoon','gmt_in_min'=>'390','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'56','text'=>'Bangkok, Hanoi, Jakarta','gmt_in_min'=>'420','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'57','text'=>'Krasnoyarsk','gmt_in_min'=>'420','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'58','text'=>'Perth','gmt_in_min'=>'480','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'59','text'=>'Taipei','gmt_in_min'=>'480','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'60','text'=>'Beijing, Chongqing, Hong Kong, Urumqi','gmt_in_min'=>'480','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'61','text'=>'Kuala Lumpur, Singapore','gmt_in_min'=>'480','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'62','text'=>'Irkutsk, Ulaan Bataar','gmt_in_min'=>'480','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'63','text'=>'Osaka, Sapporo, Tokyo','gmt_in_min'=>'540','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'64','text'=>'Seoul','gmt_in_min'=>'540','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'65','text'=>'Yakutsk','gmt_in_min'=>'540','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'66','text'=>'Darwin','gmt_in_min'=>'570','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'67','text'=>'Adelaide','gmt_in_min'=>'570','dl_start'=>'10|-1SU|2','dl_end'=>'3|-1SU|2'),
Array('value'=>'68','text'=>'Brisbane','gmt_in_min'=>'600','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'69','text'=>'Guam, Port Moresby','gmt_in_min'=>'600','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'70','text'=>'Hobart','gmt_in_min'=>'600','dl_start'=>'10|1SU|2','dl_end'=>'3|-1SU|2'),
Array('value'=>'71','text'=>'Vladivostok','gmt_in_min'=>'600','dl_start'=>'3|-1SU|2','dl_end'=>'10|-1SU|3'),
Array('value'=>'72','text'=>'Canberra, Melbourne, Sydney','gmt_in_min'=>'600','dl_start'=>'10|-1SU|2','dl_end'=>'3|-1SU|2'),
Array('value'=>'73','text'=>'Magadan, Solomon Is., New Caledonia','gmt_in_min'=>'660','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'74','text'=>'Fiji, Kamchatka, Marshall Is.','gmt_in_min'=>'720','dl_start'=>'No','dl_end'=>'No'),
Array('value'=>'75','text'=>'Auckland, Wellington','gmt_in_min'=>'720','dl_start'=>'10|1SU|2','dl_end'=>'3|3SU|2'),
Array('value'=>'76','text'=>'Nuku\'alofa','gmt_in_min'=>'780','dl_start'=>'No','dl_end'=>'No')
);




?>