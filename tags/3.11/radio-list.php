<?php
function radios_port(){
	$ports = array( '0000', '9990', '9986', '9994', '9960', '9988', '9980', '9978', '9974', '9970', '9968', '9928', '9946', '9966', '9996', '9962', '9958', '9950', '9948', '9984', '9964', '9952', '9982', '9998', '9956', '9954', '9976', '9938', '9972', '9992', '9940', '9930', '9934', '9932', '9936', '9924', '9880', '9878', '9944', '9916', '9914', '9912', '9910', '9908', '9798', '9904', '9902', '9900', '9898', '9896', '9894', '9892', '9876', '9886', '9884', '9868', '9870', '9872', '9866', '9864', '9922', '9920', '9918', '9890', '9888', '9882', '9860', '9874', '9862', '9846', '9852', '9844', '9842', '9838', '9840', '9848', '9850', '9854', '9856', '9942', '9836', '9834', '9832', '9830', '9828', '9826', '9824', '9822', '9820', '9818', '9816', '9814', '9812', '9810', '9808', '9806', '9804', '9802', '9800', '9796', '9794', '9792', '9790', '9788', '9786', '9784', '9780', '9778', '9776', '9774', '9772', '9302', '9300', '9304', '9306', '9308', '9310', '9312', '9314', '9316', '9318' );
	return $ports;
}

function radios_list(){
	$source_url = 'http://www.qurantranslations.net';
	$source_radio = 'http://quraan.us';
	$radio_info = array();
	
	$radio_info["1"] = array(
	'title' => "Translation of the Quran in English",
	'book' => $source_url."/quran/pdf/en_Translation_of_the_Meanings_Quran.pdf",
	'rss' => $source_url."/podcast/English/AbdulBaset__AbdulSamad.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/recitation-by-abdulbaset-abdul/id878595831",
	'txt' => $source_url."/txt/English/AbdulBaset_AbdulSamad.txt",
	'asx' => $source_url."/radio/quraan3/MediaPlayer.asx",
	'qtl' => $source_url."/radio/quraan3/QuickTime.qtl",
	'ram' => $source_url."/radio/quraan3/RealPlayer.ram",
	'pls' => $source_url."/radio/quraan3/Winamp.pls",
	'radio' => $source_radio.":9990",
	'tunein' => "http://tunein.com/radio/Quran-in-English-s191103/",
	'url' => $source_url."/index.php?moshaf=8&amp;id=8",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-in-english-by-edc',
	'twitter' => 'https://twitter.com/QuraninEng',
	'facebook' => ''
	);

	$radio_info["2"] = array(
	'title' => "Translation of the Quran in Deutsch",
	'book' => $source_url."/quran/pdf/de_translation_of_the_meaning_of_the_holy_quran_in_deutsch.pdf",
	'rss' => $source_url."/podcast/Deutsch/DER_QURAN_IN_DEUTSCHER_UBERSETZUNG.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id878103346",
	'txt' => $source_url."/txt/Deutsch/DER_QURAN_IN_DEUTSCHER_UBERSETZUNG.txt",
	'asx' => $source_url."/radio/dequraan/MediaPlayer.asx",
	'qtl' => $source_url."/radio/dequraan/QuickTime.qtl",
	'ram' => $source_url."/radio/dequraan/RealPlayer.ram",
	'pls' => $source_url."/radio/dequraan/Winamp.pls",
	'radio' => $source_radio.":9986",
	'tunein' => "http://tunein.com/radio/Koran-Auf-Deutsch-von-EDC-s190967/",
	'url' => $source_url."/index.php?moshaf=1&amp;id=1",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-in-german-by-edc',
	'twitter' => 'https://twitter.com/KoranAufDeutsch',
	'facebook' => ''
	);

	$radio_info["3"] =  array(
	'title' => "Translation of the Quran in Bosnian",
	'book' => $source_url."/quran/pdf/bs_Prevod_Kuran_na_bos.pdf",
	'rss' => $source_url."/podcast/Bosnian/Mahmoud_Khalil_Al-Husari.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/recitation-by-mahmoud-khalil/id878087243",
	'txt' => $source_url."/txt/Bosnian/Mahmoud_Khalil_Al-Husari.txt",
	'asx' => $source_url."/radio/bosquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/bosquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/bosquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/bosquraa/Winamp.pls",
	'radio' => $source_radio.":9994",
	'tunein' => "http://tunein.com/radio/Quran-in-Bosnian-s191065/",
	'url' => $source_url."/index.php?moshaf=23&amp;id=7",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-bosnian',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["4"] = array(
	'title' => "Translation of the Quran in Spanish",
	'book' => $source_url."/quran/pdf/es_The_Quran_Nobleman.pdf",
	'rss' => $source_url."/podcast/Spanish/Abu-Mujahid.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558770",
	'txt' => $source_url."/txt/Spanish/Abu-Mujahid.txt",
	'asx' => $source_url."/radio/esquraan/MediaPlayer.asx",
	'qtl' => $source_url."/radio/esquraan/QuickTime.qtl",
	'ram' => $source_url."/radio/esquraan/RealPlayer.ram",
	'pls' => $source_url."/radio/esquraan/Winamp.pls",
	'radio' => $source_radio.":9960",
	'tunein' => "http://tunein.com/radio/Coran-En-Espanol-mi-EDC-s190827/",
	'url' => $source_url."/index.php?moshaf=4&amp;id=4",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-in-spanish-by-edc',
	'twitter' => 'https://twitter.com/CoranEnEspanol',
	'facebook' => ''
	);

	$radio_info["5"] = array(
	'title' => "Translation of the Quran in French",
	'book' => $source_url."/quran/pdf/fr_Quran_Translation_of_the_meaning.pdf",
	'rss' => $source_url."/podcast/French/Abdour-Rahman_Al-Houdhaifi.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/recitation-by-sheikh-abdour/id880082885",
	'txt' => $source_url."/txt/French/Abdour-Rahman_Al-Houdhaifi.txt",
	'asx' => $source_url."/radio/frquraan/MediaPlayer.asx",
	'qtl' => $source_url."/radio/frquraan/QuickTime.qtl",
	'ram' => $source_url."/radio/frquraan/RealPlayer.ram",
	'pls' => $source_url."/radio/frquraan/Winamp.pls",
	'radio' => $source_radio.":9988",
	'tunein' => "http://tunein.com/radio/Le-Quran-Sacre-s190787/",
	'url' => $source_url."/index.php?moshaf=13&amp;id=13",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-in-french-by-edc',
	'twitter' => 'https://twitter.com/CoranEnFrancais',
	'facebook' => ''
	);

	$radio_info["6"] = array(
	'title' => "Translation of the Quran in Hungarian",
	'book' => $source_url."/quran/pdf/hu_A_Kegyes_Kor&aacute;n_magyar.pdf",
	'rss' => $source_url."/podcast/Hungarian/Holy_Quran_in_the_Hungarian_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558132",
	'txt' => $source_url."/txt/Hungarian/Holy_Quran_in_the_Hungarian_Language.txt",
	'asx' => $source_url."/radio/hungaria/MediaPlayer.asx",
	'qtl' => $source_url."/radio/hungaria/QuickTime.qtl",
	'ram' => $source_url."/radio/hungaria/RealPlayer.ram",
	'pls' => $source_url."/radio/hungaria/Winamp.pls",
	'radio' => $source_radio.":9980",
	'tunein' => "http://tunein.com/radio/Quran-in-Hungarian-s191112/",
	'url' => $source_url."/index.php?moshaf=51&amp;id=42",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-hungarian',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["7"] = array(
	'title' => "Translation of the Quran in Indonesian",
	'book' => $source_url."/quran/pdf/id_translation_of_the_meaning_of_the_holy_quran_in_indonesian.pdf",
	'rss' => $source_url."/podcast/Indonesian/Holy_Quran_in_the_Indonesia_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558189",
	'txt' => $source_url."/txt/Indonesian/Holy_Quran_in_the_Indonesia_Language.txt",
	'asx' => $source_url."/radio/indquran/MediaPlayer.asx",
	'qtl' => $source_url."/radio/indquran/QuickTime.qtl",
	'ram' => $source_url."/radio/indquran/RealPlayer.ram",
	'pls' => $source_url."/radio/indquran/Winamp.pls",
	'radio' => $source_radio.":9978",
	'tunein' => "http://tunein.com/radio/Quran-in-Indonesian-s191111/",
	'url' => $source_url."/index.php?moshaf=52&amp;id=43",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-indonesian',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["8"] = array(
	'title' => "Translation of the Quran in Kashmiri",
	'book' => $source_url."/quran/pdf/ks_Translation_of_the_Meaning_of_the_Holy_Quran_in_Kashmiri.pdf",
	'rss' => $source_url."/podcast/Kashmiri/Translation_of_alFatihah_and_Ammah_Part_meanings.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880559905",
	'txt' => $source_url."/txt/Kashmiri/Translation_of_alFatihah_and_Ammah_Part_meanings.txt",
	'asx' => $source_url."/radio/kasquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/kasquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/kasquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/kasquraa/Winamp.pls",
	'radio' => $source_radio.":9974",
	'tunein' => "http://tunein.com/radio/Quran-in-Kashmiri-s191107/",
	'url' => $source_url."/index.php?moshaf=53&amp;id=44",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-kashmiri',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["9"] = array(
	'title' => "Translation of the Quran in Kurdish",
	'rss' => $source_url."/podcast/Kurdish/Saad_Al_Ghamedi_with_Kurdish_Translation.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558968",
	'txt' => $source_url."/txt/Kurdish/Saad_Al_Ghamedi_with_Kurdish_Translation.txt",
	'asx' => $source_url."/radio/kurquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/kurquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/kurquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/kurquraa/Winamp.pls",
	'radio' => $source_radio.":9970",
	'tunein' => "http://tunein.com/radio/Quran-in-Kurdish-s191104/",
	'url' => $source_url."/index.php?moshaf=5&amp;id=5",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-kurdish',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["10"] = array(
	'title' => "Translation of the Quran in Malayalam",
	'rss' => $source_url."/podcast/Hindi/Holy_Quran_in_the_Malayalam_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880085396",
	'txt' => $source_url."/txt/Hindi/Holy_Quran_in_the_Malayalam_Language.txt",
	'asx' => $source_url."/radio/malquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/malquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/malquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/malquraa/Winamp.pls",
	'radio' => $source_radio.":9968",
	'tunein' => "http://tunein.com/radio/Quran-in-Malayalam-by-EDC-s191519/",
	'url' => $source_url."/index.php?moshaf=10&amp;id=10",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-in-malayalam',
	'twitter' => 'https://twitter.com/Quran_malayalam',
	'facebook' => ''
	);

	$radio_info["11"] = array(
	'title' => "Translation of the Quran in Oromigna",
	'rss' => $source_url."/podcast/Oromigna/Holy_Quran_in_the_Oromigna_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558539",
	'txt' => $source_url."/txt/Oromigna/Holy_Quran_in_the_Oromigna_Language.txt",
	'asx' => $source_url."/radio/oromigna/MediaPlayer.asx",
	'qtl' => "http://www.mp3qurantranslation.com/radio/oromigna/QuickTime.qtl",
	'ram' => $source_url."/radio/oromigna/RealPlayer.ram",
	'pls' => $source_url."/radio/oromigna/Winamp.pls",
	'radio' => $source_radio.":9928",
	'tunein' => "http://tunein.com/radio/Quran-in-Oromigna-by-EDC-s223624/",
	'url' => $source_url."/index.php?moshaf=45&amp;id=40",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-oromigna-by-edc',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["12"] = array(
	'title' => "Translation of the Quran in philippines",
	'url' => $source_url."/images/tl_Interpretation_of_the_Facilitator_Part1.pdf",
	'rss' => $source_url."/podcast/philippines/Tagalog.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880564959",
	'txt' => $source_url."/txt/philippines/Tagalog.txt",
	'asx' => $source_url."/radio/tagalog/MediaPlayer.asx",
	'qtl' => $source_url."/radio/tagalog/QuickTime.qtl",
	'ram' => $source_url."/radio/tagalog/RealPlayer.ram",
	'pls' => $source_url."/radio/tagalog/Winamp.pls",
	'radio' => $source_radio.":9946",
	'tunein' => "http://tunein.com/radio/Quran-in-Tagalog-by-EDC-s191063/",
	'url' => $source_url."/index.php?moshaf=40&amp;id=38",
	'soundcloud' => '',
	'twitter' => 'https://twitter.com/QuranSaFilipino',
	'facebook' => ''
	);

	$radio_info["13"] = array(
	'title' => "Translation of the Quran in Portuguese",
	'book' => $source_url."/quran/pdf/pt_Portuguese_translation_of_the_meanings_of_quran.pdf",
	'rss' => $source_url."/podcast/Portuguese/Holy_Quran_in_the_Portuguese_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/leitura-da-traducao-sura-al/id880560062",
	'txt' => $source_url."/txt/Portuguese/Holy_Quran_in_the_Portuguese_Language.txt",
	'asx' => $source_url."/radio/porquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/porquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/porquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/porquraa/Winamp.pls",
	'radio' => $source_radio.":9966",
	'tunein' => "http://tunein.com/radio/O-Sagrado-Alcor%c3%a3o-em-portugu%c3%aas-pela-EDC-s190966/",
	'url' => $source_url."/index.php?moshaf=12&amp;id=12",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-in-portuguese-by-edc',
	'twitter' => 'https://twitter.com/ONobreAlcorao',
	'facebook' => ''
	);

	$radio_info["14"] = array(
	'title' => "Translation of the Quran in Albanian",
	'book' => $source_url."/quran/pdf/sq_translation_of_meaning_of_holy_quran_in_albanian.pdf",
	'rss' => $source_url."/podcast/Albanian/Albania.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id878066202",
	'txt' => $source_url."/txt/Albanian/Holy_Quran_in_the_Albanian_Language.txt",
	'asx' => $source_url."/radio/albanian/MediaPlayer.asx",
	'qtl' => $source_url."/radio/albanian/QuickTime.qtl",
	'ram' => $source_url."/radio/albanian/RealPlayer.ram",
	'pls' => $source_url."/radio/albanian/Winamp.pls",
	'radio' => $source_radio.":9996",
	'tunein' => "http://tunein.com/radio/Quran-in-Albanian-s191058/",
	'url' => $source_url."/index.php?moshaf=47&amp;id=41",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-albanian',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["15"] = array(
	'title' => "Translation of the Quran in Sinhalese",
	'url' => $source_url."/images/si_Translation_of_the_Meaning_of_Amma_and_AlMulk_Chapter_in_Sinhalese.pdf",
	'rss' => $source_url."/podcast/Sinhalese/Holy_Quran_in_the_Sinhalese_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880561079",
	'txt' => $source_url."/txt/Sinhalese/Holy_Quran_in_the_Sinhalese_Language.txt",
	'asx' => $source_url."/radio/sinquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/sinquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/sinquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/sinquraa/Winamp.pls",
	'radio' => $source_radio.":9962",
	'tunein' => "http://tunein.com/radio/Quran-in-sinhala-by-EDC-s191036/",
	'url' => $source_url."/index.php?moshaf=44&amp;id=39",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-sinhala',
	'twitter' => 'https://twitter.com/QuranInSinhala',
	'facebook' => ''
	);

	$radio_info["16"] = array(
	'title' => "Translation of the Quran in Tamazight",
	'rss' => $source_url."/podcast/Tamazight/Holy_Quran_in_the_Tamazight_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558775",
	'txt' => $source_url."/txt/Tamazight/Holy_Quran_in_the_Tamazight_Language.txt",
	'asx' => $source_url."/radio/tamaqura/MediaPlayer.asx",
	'qtl' => $source_url."/radio/tamaqura/QuickTime.qtl",
	'ram' => $source_url."/radio/tamaqura/RealPlayer.ram",
	'pls' => $source_url."/radio/tamaqura/Winamp.pls",
	'radio' => $source_radio.":9958",
	'tunein' => "http://tunein.com/radio/Quran-in-Tamazight-s191101/",
	'url' => $source_url."/index.php?moshaf=22&amp;id=22"
	);

	$radio_info["17"] = array(
	'title' => "Translation of the Quran in Uyghur",
	'book' => $source_url."/quran/pdf/ug_kuran_kerimning_terjimisi.pdf",
	'rss' => $source_url."/podcast/Uyghur/Holy_Quran_in_the_Uyghur_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880563410",
	'txt' => $source_url."/txt/Uyghur/Holy_Quran_in_the_Uyghur_Language.txt",
	'asx' => $source_url."/radio/uygquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/uygquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/uygquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/uygquraa/Winamp.pls",
	'radio' => $source_radio.":9950",
	'tunein' => "http://tunein.com/radio/Quran-in-Uyghur-s191099/",
	'url' => $source_url."/index.php?moshaf=6&amp;id=6"
	);

	$radio_info["18"] = array(
	'title' => "Translation of the Quran in Vietnamese",
	'rss' => $source_url."/podcast/Vietnamese/Holy_Quran_in_the_Vietnamese_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880563437",
	'txt' => $source_url."/txt/Vietnamese/Holy_Quran_in_the_Vietnamese_Language.txt",
	'asx' => $source_url."/radio/viquraan/MediaPlayer.asx",
	'qtl' => $source_url."/radio/viquraan/QuickTime.qtl",
	'ram' => $source_url."/radio/viquraan/RealPlayer.ram",
	'pls' => $source_url."/radio/viquraan/Winamp.pls",
	'radio' => $source_radio.":9948",
	'tunein' => "http://tunein.com/radio/Quran-in-Vietnamese-s191098/",
	'url' => $source_url."/index.php?moshaf=21&amp;id=21",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-vietnam',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["19"] = array(
	'title' => "Translation of the Quran in Greek",
	'book' => $source_url."/quran/pdf/el_To_epo_Kopanio.pdf",
	'rss' => $source_url."/podcast/Greek/Holy_Quran_in_the_Greek_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880085003",
	'txt' => $source_url."/txt/Greek/Holy_Quran_in_the_Greek_Language.txt",
	'asx' => $source_url."/radio/grequraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/grequraa/QuickTime.qtl",
	'ram' => $source_url."/radio/grequraa/RealPlayer.ram",
	'pls' => $source_url."/radio/grequraa/Winamp.pls",
	'radio' => $source_radio.":9984",
	'tunein' => "http://tunein.com/radio/Quran-in-Greek-s191110/",
	'url' => $source_url."/index.php?moshaf=20&amp;id=20",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-greece-by',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["20"] = array(
	'title' => "Translation of the Quran in Russian",
	'book' => $source_url."/quran/pdf/ru_quran_russian.pdf",
	'rss' => $source_url."/podcast/Russian/Holy_Quran_in_the_Russian_Language_1.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558588",
	'txt' => $source_url."/txt/Russian/Holy_Quran_in_the_Russian_Language_1.txt",
	'asx' => $source_url."/radio/ruquraan/MediaPlayer.asx",
	'qtl' => $source_url."/radio/ruquraan/QuickTime.qtl",
	'ram' => $source_url."/radio/ruquraan/RealPlayer.ram",
	'pls' => $source_url."/radio/ruquraan/Winamp.pls",
	'radio' => $source_radio.":9964",
	'tunein' => "http://tunein.com/radio/EDC-s190958/",
	'url' => $source_url."/index.php?moshaf=16&amp;id=16",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-in-russian-by-edc',
	'twitter' => 'https://twitter.com/KoranPoRuski',
	'facebook' => ''
	);

	$radio_info["21"] = array(
	'title' => "Translation of the Quran in Urdu",
	'book' => $source_url."/quran/pdf/ur_Translation_of_the_meaning_of_the_Holy_Quran_in_Urdu.pdf",
	'rss' => $source_url."/podcast/Urdu/Sudais_and_Shuraym.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/recitation-by-sheikh-sudais/id880563387",
	'txt' => $source_url."/txt/Urdu/Sudais_and_Shuraym.txt",
	'asx' => $source_url."/radio/urdquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/urdquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/urdquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/urdquraa/Winamp.pls",
	'radio' => $source_radio.":9952",
	'tunein' => "http://tunein.com/radio/Quran-in-Urdu-s191100/",
	'url' => $source_url."/index.php?moshaf=27&amp;id=3",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-urdu-by',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["22"] = array(
	'title' => "Translation of the Quran in Hindi",
	'rss' => $source_url."/podcast/Hindi/Holy_Quran_in_the_Hindi_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880085088",
	'txt' => $source_url."/txt/Hindi/Holy_Quran_in_the_Hindi_Language.txt",
	'asx' => $source_url."/radio/hiquraan/MediaPlayer.asx",
	'qtl' => $source_url."/radio/hiquraan/QuickTime.qtl",
	'ram' => $source_url."/radio/hiquraan/RealPlayer.ram",
	'pls' => $source_url."/radio/hiquraan/Winamp.pls",
	'radio' => $source_radio.":9982",
	'tunein' => "http://tunein.com/radio/Quran-in-Hindi-By-EDC-s190828/",
	'url' => $source_url."/index.php?moshaf=17&amp;id=17",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-in-hindi-by-edc',
	'twitter' => 'https://twitter.com/QuranInHindi',
	'facebook' => 'https://www.facebook.com/Quran-in-Hindi-496748057048940'
	);

	$radio_info["23"] = array(
	'title' => "Translation of the Quran in Bengali",
	'rss' => $source_url."/podcast/Bengali/Ali_Abdur-Rahman_Al-Huthaify.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/recitation-by-ali-abdur-rahman/id878083346",
	'txt' => $source_url."/txt/Bengali/Ali_Abdur-Rahman_Al-Huthaify.txt",
	'asx' => $source_url."/radio/banquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/banquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/banquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/banquraa/Winamp.pls",
	'radio' => $source_radio.":9998",
	'tunein' => "http://tunein.com/radio/Quran-in-Bengali-by-EDC-s191520/",
	'url' => $source_url."/index.php?moshaf=32&amp;id=32",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/translation-of-the-quran-in',
	'twitter' => 'https://twitter.com/QuranInBengali',
	'facebook' => ''
	);

	$radio_info["24"] = array(
	'title' => "Translation of the Quran in Tamil",
	'rss' => $source_url."/podcast/Hindi/Holy_Quran_in_the_Tamil_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880085397",
	'txt' => $source_url."/txt/Hindi/Holy_Quran_in_the_Tamil_Language.txt",
	'asx' => $source_url."/radio/tamquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/tamquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/tamquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/tamquraa/Winamp.pls",
	'radio' => $source_radio.":9956",
	'tunein' => "http://tunein.com/radio/Quran-in-Tamil-by-EDC-s191051/",
	'url' => $source_url."/index.php?moshaf=14&amp;id=14",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/translation-of-the-quran-in-tamil',
	'twitter' => 'https://twitter.com/tamil_Quran',
	'facebook' => ''
	);

	$radio_info["25"] = array(
	'title' => "Translation of the Quran in Telugu",
	'book' => $source_url."/quran/pdf/te_Mushaf_new.pdf",
	'rss' => $source_url."/podcast/Hindi/Holy_Quran_in_the_Telugu_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880080653",
	'txt' => $source_url."/txt/Hindi/Holy_Quran_in_the_Telugu_Language.txt",
	'asx' => $source_url."/radio/telquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/telquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/telquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/telquraa/Winamp.pls",
	'radio' => $source_radio.":9954",
	'tunein' => "http://tunein.com/radio/Quran-in-Telugu-by-EDC-s191044/",
	'url' => $source_url."/index.php?moshaf=15&amp;id=15",
	'soundcloud' => '',
	'twitter' => 'https://twitter.com/QuranInTelugu',
	'facebook' => ''
	);

	$radio_info["26"] = array(
	'title' => "Translation of the Quran in Kannada",
	'rss' => $source_url."/podcast/Hindi/Holy_Quran_in_the_kannada_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880084499",
	'txt' => $source_url."/txt/Hindi/Holy_Quran_in_the_kannada_Language.txt",
	'asx' => $source_url."/radio/kaquraan/MediaPlayer.asx",
	'qtl' => $source_url."/radio/kaquraan/QuickTime.qtl",
	'ram' => $source_url."/radio/kaquraan/RealPlayer.ram",
	'pls' => $source_url."/radio/kaquraan/Winamp.pls",
	'radio' => $source_radio.":9976",
	'tunein' => "http://tunein.com/radio/Quran-in-Kannada-s191108/",
	'url' => $source_url."/index.php?moshaf=19&amp;id=19",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/translation-of-the-quran-in-kannada-1',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["27"] = array(
	'title' => "Translation of the Quran in Thai",
	'book' => $source_url."/quran/pdf/th_Holy_Quran_and_the_translation_of_the_Meaning_of_the_Thai_language.pdf",
	'rss' => $source_url."/podcast/Thai/Holy_Quran_in_the_Thai_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558776",
	'txt' => $source_url."/txt/Thai/Holy_Quran_in_the_Thai_Language.txt",
	'asx' => $source_url."/radio/thai/MediaPlayer.asx",
	'qtl' => "http://www.mp3qurantranslation.com/radio/thai/QuickTime.qtl",
	'ram' => $source_url."/radio/thai/RealPlayer.ram",
	'pls' => $source_url."/radio/thai/Winamp.pls",
	'radio' => $source_radio.":9938",
	'tunein' => "http://tunein.com/radio/Quran-in-Thai-by-EDC-s223626/",
	'url' => $source_url."/index.php?moshaf=18&amp;id=18",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-thai-by',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["28"] = array(
	'title' => "Translation of the Quran in Korean",
	'url' => $source_url."/images/ko_Translation_of_the_Meanings_of_the_noble_quran_in_the_korean_Language.pdf",
	'rss' => $source_url."/podcast/Korean/Holy_Quran_in_the_Korean_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558270",
	'txt' => $source_url."/txt/Korean/Holy_Quran_in_the_Korean_Language.txt",
	'asx' => $source_url."/radio/korquraa/MediaPlayer.asx",
	'qtl' => $source_url."/radio/korquraa/QuickTime.qtl",
	'ram' => $source_url."/radio/korquraa/RealPlayer.ram",
	'pls' => $source_url."/radio/korquraa/Winamp.pls",
	'radio' => $source_radio.":9972",
	'tunein' => "http://tunein.com/radio/Quran-in-Korean-s191105/",
	'url' => $source_url."/index.php?moshaf=35&amp;id=35",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-korean-by',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["29"] = array(
	'title' => "Translation of the Quran in Chinese",
	'book' => $source_url."/quran/pdf/zh_quran_chinese.pdf",
	'rss' => $source_url."/podcast/Chinese/Holy_Quran_in_the_Chinese_Language_1.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id878091030",
	'txt' => $source_url."/txt/Chinese/Holy_Quran_in_the_Chinese_Language_1.txt",
	'asx' => $source_url."/radio/chquraan/MediaPlayer.asx",
	'qtl' => $source_url."/radio/chquraan/QuickTime.qtl",
	'ram' => $source_url."/radio/chquraan/RealPlayer.ram",
	'pls' => $source_url."/radio/chquraan/Winamp.pls",
	'radio' => $source_radio.":9992",
	'tunein' => "http://tunein.com/radio/EDC-s190956/",
	'url' => $source_url."/index.php?moshaf=58&amp;id=2",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-in-chinese-by-edc',
	'twitter' => 'https://twitter.com/QuranInChinese',
	'facebook' => ''
	);

	$radio_info["30"] = array(
	'title' => "Translation of the Quran in Punjabi",
	'rss' => $source_url."/podcast/Punjabi/Holy_Quran_in_the_Punjabi_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558587",
	'txt' => $source_url."/txt/Punjabi/Holy_Quran_in_the_Punjabi_Language.txt",
	'asx' => $source_url."/radio/punjabi/MediaPlayer.asx",
	'qtl' => $source_url."/radio/punjabi/QuickTime.qtl",
	'ram' => $source_url."/radio/punjabi/RealPlayer.ram",
	'pls' => $source_url."/radio/punjabi/Winamp.pls",
	'radio' => $source_radio.":9940",
	'tunein' => "http://tunein.com/radio/Quran-in-Punjabi-s198667/",
	'url' => $source_url."/index.php?moshaf=59&amp;id=45",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-punjabi-by-edc',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["31"] = array(
	'title' => "Translation of the Quran in Soomaali",
	'book' => $source_url."/quran/pdf/so_Quraanka_Kariimka_Iyo_Tarjamada_Macnihiisa_Ee_Afka_Soomaaliga.pdf",
	'rss' => $source_url."/podcast/Soomaali/Holy_Quran_in_the_Soomaali_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558705",
	'txt' => $source_url."/txt/Soomaali/Holy_Quran_in_the_Soomaali_Language.txt",
	'asx' => $source_url."/radio/somali/MediaPlayer.asx",
	'qtl' => "http://www.mp3qurantranslation.com/radio/somali/QuickTime.qtl",
	'ram' => $source_url."/radio/somali/RealPlayer.ram",
	'pls' => $source_url."/radio/somali/Winamp.pls",
	'radio' => $source_radio.":9930",
	'url' => $source_url."/index.php?moshaf=63&amp;id=47",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-soomaali',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["32"] = array(
	'title' => "Translation of the Quran in Nigerian",
	'rss' => $source_url."/podcast/Nigerian/Holy_Quran_in_the_Nigerian_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558374",
	'txt' => $source_url."/txt/Nigerian/Holy_Quran_in_the_Nigerian_Language.txt",
	'asx' => $source_url."/radio/nigerian/MediaPlayer.asx",
	'qtl' => "http://www.mp3qurantranslation.com/radio/nigerian/QuickTime.qtl",
	'ram' => $source_url."/radio/nigerian/RealPlayer.ram",
	'pls' => $source_url."/radio/nigerian/Winamp.pls",
	'radio' => $source_radio.":9934",
	'url' => $source_url."/index.php?moshaf=64&amp;id=48",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-nigerian',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["33"] = array(
	'title' => "Translation of the Quran in Malay",
	'rss' => $source_url."/podcast/Malawi/Holy_Quran_in_the_Malawi_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558363",
	'txt' => $source_url."/txt/Malawi/Holy_Quran_in_the_Malawi_Language.txt",
	'asx' => $source_url."/radio/malawian/MediaPlayer.asx",
	'qtl' => "http://www.mp3qurantranslation.com/radio/malawian/QuickTime.qtl",
	'ram' => $source_url."/radio/malawian/RealPlayer.ram",
	'pls' => $source_url."/radio/malawian/Winamp.pls",
	'radio' => $source_radio.":9932",
	'url' => $source_url."/index.php?moshaf=65&amp;id=49",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-malay',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["34"] = array(
	'title' => "Translation of the Quran in Farsi",
	'book' => $source_url."/quran/pdf/fa_tarjome_maani_quran_gamshadzehi.pdf",
	'rss' => $source_url."/podcast/Farsi/Farsi.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880069432",
	'txt' => $source_url."/txt/Farsi/Farsi.txt",
	'asx' => $source_url."/radio/persian/MediaPlayer.asx",
	'qtl' => "http://www.mp3qurantranslation.com/radio/persian/QuickTime.qtl",
	'ram' => $source_url."/radio/persian/RealPlayer.ram",
	'pls' => $source_url."/radio/persian/Winamp.pls",
	'radio' => $source_radio.":9936",
	'tunein' => "http://tunein.com/radio/Quran-in-Farsi-by-EDC-s223625/",
	'url' => $source_url."/index.php?moshaf=66&amp;id=50",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-farsi-by',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["35"] = array(
	'title' => "Translation of the Quran in Italiano",
	'book' => "http://www.muslim-library.com/dl/books/it4137.pdf",
	'rss' => $source_url."/podcast/Italiano/Italiano-e-arabo.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880557550",
	'txt' => $source_url."/txt/Italiano/Italiano-e-arabo.txt",
	'asx' => $source_url."/radio/italiano/MediaPlayer.asx",
	'qtl' => $source_url."/radio/italiano/QuickTime.qtl",
	'ram' => $source_url."/radio/italiano/RealPlayer.ram",
	'pls' => $source_url."/radio/italiano/Winamp.pls",
	'radio' => $source_radio.":9924",
	'url' => $source_url."/index.php?id=51",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-italiano',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["36"] = array(
	'title' => "Tafsir in Amharic",
	'rss' => $source_url."/podcast/Amharic/Amharic_tafseer_alquran.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id878077329",
	'txt' => $source_url."/txt/Amharic/Amharic_tafseer_alquran.txt",
	'asx' => $source_url."/radio/amharic/MediaPlayer.asx",
	'qtl' => $source_url."/radio/amharic/QuickTime.qtl",
	'ram' => $source_url."/radio/amharic/RealPlayer.ram",
	'pls' => $source_url."/radio/amharic/Winamp.pls",
	'radio' => $source_radio.":9880",
	'url' => $source_url."/index.php?id=52"
	);

	$radio_info["37"] = array(
	'title' => "Translation of the Quran in Yoruba",
	'rss' => $source_url."/podcast/Yoruba/Holy_Quran_in_the_Yoruba_Language.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880564887",
	'txt' => $source_url."/txt/Yoruba/Holy_Quran_in_the_Yoruba_Language.txt",
	'asx' => $source_url."/radio/yoruba/MediaPlayer.asx",
	'qtl' => $source_url."/radio/yoruba/QuickTime.qtl",
	'ram' => $source_url."/radio/yoruba/RealPlayer.ram",
	'pls' => $source_url."/radio/yoruba/Winamp.pls",
	'radio' => $source_radio.":9878",
	'url' => $source_url."/index.php?id=53"
	);

	$radio_info["38"] = array(
	'title' => "Tafsir by Al-Sa`di",
	'asx' => $source_url."/radio/arabic/MediaPlayer.asx",
	'qtl' => $source_url."/radio/arabic/QuickTime.qtl",
	'ram' => $source_url."/radio/arabic/RealPlayer.ram",
	'pls' => $source_url."/radio/arabic/Winamp.pls",
	'radio' => $source_radio.":9944"
	);

	$radio_info["39"] = array(
	'title' => "Quran Recitation by Sheikh Abdul Basit Abdul Samad",
	'asx' => $source_url."/radio/abdulbas/MediaPlayer.asx",
	'qtl' => $source_url."/radio/abdulbas/QuickTime.qtl",
	'ram' => $source_url."/radio/abdulbas/RealPlayer.ram",
	'pls' => $source_url."/radio/abdulbas/Winamp.pls",
	'radio' => $source_radio.":9916"
	);

	$radio_info["40"] = array(
	'title' => "Quran Recitation by Sheikh Abdul Azeez al-Ahmad",
	'asx' => $source_url."/radio/alahmad/MediaPlayer.asx",
	'qtl' => $source_url."/radio/alahmad/QuickTime.qtl",
	'ram' => $source_url."/radio/alahmad/RealPlayer.ram",
	'pls' => $source_url."/radio/alahmad/Winamp.pls",
	'radio' => $source_radio.":9914"
	);

	$radio_info["41"] = array(
	'title' => "Quran Recitation by Sheikh Abdullah Ali Jabir",
	'asx' => $source_url."/radio/alijabir/MediaPlayer.asx",
	'qtl' => $source_url."/radio/alijabir/QuickTime.qtl",
	'ram' => $source_url."/radio/alijabir/RealPlayer.ram",
	'pls' => $source_url."/radio/alijabir/Winamp.pls",
	'radio' => $source_radio.":9912"
	);

	$radio_info["42"] = array(
	'title' => "Quran Recitation by Sheikh Abdullah `Awad al-Juhani",
	'asx' => $source_url."/radio/aljuhani/MediaPlayer.asx",
	'qtl' => $source_url."/radio/aljuhani/QuickTime.qtl",
	'ram' => $source_url."/radio/aljuhani/RealPlayer.ram",
	'pls' => $source_url."/radio/aljuhani/Winamp.pls",
	'radio' => $source_radio.":9910"
	);

	$radio_info["43"] = array(
	'title' => "Quran Recitation by Sheikh Abdullah Khayat",
	'asx' => $source_url."/radio/khayat/MediaPlayer.asx",
	'qtl' => $source_url."/radio/khayat/QuickTime.qtl",
	'ram' => $source_url."/radio/khayat/RealPlayer.ram",
	'pls' => $source_url."/radio/khayat/Winamp.pls",
	'radio' => $source_radio.":9908"
	);

	$radio_info["44"] = array(
	'title' => "Al-Ruqyah al-Shariyyah",
	'asx' => $source_url."/radio/9798/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9798/QuickTime.qtl",
	'ram' => $source_url."/radio/9798/RealPlayer.ram",
	'pls' => $source_url."/radio/9798/Winamp.pls",
	'radio' => $source_radio.":9798"
	);

	$radio_info["45"] = array(
	'title' => "Quran Recitation by Sheikh Faris `Abbad",
	'asx' => $source_url."/radio/fares/MediaPlayer.asx",
	'qtl' => $source_url."/radio/fares/QuickTime.qtl",
	'ram' => $source_url."/radio/fares/RealPlayer.ram",
	'pls' => $source_url."/radio/fares/Winamp.pls",
	'radio' => $source_radio.":9904"
	);

	$radio_info["46"] = array(
	'title' => "Quran Recitation by Sheikh Hani ar-Rifa`i",
	'asx' => $source_url."/radio/hani/MediaPlayer.asx",
	'qtl' => $source_url."/radio/hani/QuickTime.qtl",
	'ram' => $source_url."/radio/hani/RealPlayer.ram",
	'pls' => $source_url."/radio/hani/Winamp.pls",
	'radio' => $source_radio.":9902"
	);

	$radio_info["47"] = array(
	'title' => "Quran Recitation by Sheikh Khalid al-Qahtani",
	'asx' => $source_url."/radio/qahtani/MediaPlayer.asx",
	'qtl' => $source_url."/radio/qahtani/QuickTime.qtl",
	'ram' => $source_url."/radio/qahtani/RealPlayer.ram",
	'pls' => $source_url."/radio/qahtani/Winamp.pls",
	'radio' => $source_radio.":9900"
	);

	$radio_info["48"] = array(
	'title' => "Quran Recitation by Sheikh Muhammad al-Luhaidan",
	'asx' => $source_url."/radio/luhaidan/MediaPlayer.asx",
	'qtl' => $source_url."/radio/luhaidan/QuickTime.qtl",
	'ram' => $source_url."/radio/luhaidan/RealPlayer.ram",
	'pls' => $source_url."/radio/luhaidan/Winamp.pls",
	'radio' => $source_radio.":9898"
	);

	$radio_info["49"] = array(
	'title' => "Quran Recitation by Sheikh Muhammad Ayyub",
	'asx' => $source_url."/radio/ayyub/MediaPlayer.asx",
	'qtl' => $source_url."/radio/ayyub/QuickTime.qtl",
	'ram' => $source_url."/radio/ayyub/RealPlayer.ram",
	'pls' => $source_url."/radio/ayyub/Winamp.pls",
	'radio' => $source_radio.":9896"
	);

	$radio_info["50"] = array(
	'title' => "Quran Recitation by Sheikh Muhammad Jibreel",
	'asx' => $source_url."/radio/jibreel/MediaPlayer.asx",
	'qtl' => $source_url."/radio/jibreel/QuickTime.qtl",
	'ram' => $source_url."/radio/jibreel/RealPlayer.ram",
	'pls' => $source_url."/radio/jibreel/Winamp.pls",
	'radio' => $source_radio.":9894"
	);

	$radio_info["51"] = array(
	'title' => "Quran Recitation by Sheikh Abu Bakr al-Shatiri",
	'asx' => $source_url."/radio/shatri/MediaPlayer.asx",
	'qtl' => $source_url."/radio/shatri/QuickTime.qtl",
	'ram' => $source_url."/radio/shatri/RealPlayer.ram",
	'pls' => $source_url."/radio/shatri/Winamp.pls",
	'radio' => $source_radio.":9892"
	);

	$radio_info["52"] = array(
	'title' => "Quran Recitation with the Reading of Warsh from Nafi`",
	'asx' => $source_url."/radio/alkouchi/MediaPlayer.asx",
	'qtl' => $source_url."/radio/alkouchi/QuickTime.qtl",
	'ram' => $source_url."/radio/alkouchi/RealPlayer.ram",
	'pls' => $source_url."/radio/alkouchi/Winamp.pls",
	'radio' => $source_radio.":9876"
	);

	$radio_info["53"] = array(
	'title' => "Quran Recitation by Sheikh Nasser Al-Qatami",
	'asx' => $source_url."/radio/qatam/MediaPlayer.asx",
	'qtl' => $source_url."/radio/qatam/QuickTime.qtl",
	'ram' => $source_url."/radio/qatam/RealPlayer.ram",
	'pls' => $source_url."/radio/qatam/Winamp.pls",
	'radio' => $source_radio.":9886"
	);

	$radio_info["54"] = array(
	'title' => "Quran Recitation by Sheikh Yasser Al-Dosari",
	'asx' => $source_url."/radio/aldosari/MediaPlayer.asx",
	'qtl' => $source_url."/radio/aldosari/QuickTime.qtl",
	'ram' => $source_url."/radio/aldosari/RealPlayer.ram",
	'pls' => $source_url."/radio/aldosari/Winamp.pls",
	'radio' => $source_radio.":9884"
	);

	$radio_info["55"] = array(
	'title' => "Quran Recitation with the Reading of Al-Bizzi from Ibn Kathir",
	'asx' => $source_url."/radio/bazzi/MediaPlayer.asx",
	'qtl' => $source_url."/radio/bazzi/QuickTime.qtl",
	'ram' => $source_url."/radio/bazzi/RealPlayer.ram",
	'pls' => $source_url."/radio/bazzi/Winamp.pls",
	'radio' => $source_radio.":9868"
	);

	$radio_info["56"] = array(
	'title' => "Quran Recitation with the Reading of Al-Duri from Abi `Amr",
	'asx' => $source_url."/radio/dori/MediaPlayer.asx",
	'qtl' => $source_url."/radio/dori/QuickTime.qtl",
	'ram' => $source_url."/radio/dori/RealPlayer.ram",
	'pls' => $source_url."/radio/dori/Winamp.pls",
	'radio' => $source_radio.":9870"
	);

	$radio_info["57"] = array(
	'title' => "Quran Recitation with the Reading of Ruh from Ya`qub al-Hadrami",
	'asx' => $source_url."/radio/rooh/MediaPlayer.asx",
	'qtl' => $source_url."/radio/rooh/QuickTime.qtl",
	'ram' => $source_url."/radio/rooh/RealPlayer.ram",
	'pls' => $source_url."/radio/rooh/Winamp.pls",
	'radio' => $source_radio.":9872"
	);

	$radio_info["58"] = array(
	'title' => "Quran Recitation with the Reading of Shu`bah from `Asim ibn Abi al-Nujud",
	'asx' => $source_url."/radio/sofi/MediaPlayer.asx",
	'qtl' => $source_url."/radio/sofi/QuickTime.qtl",
	'ram' => $source_url."/radio/sofi/RealPlayer.ram",
	'pls' => $source_url."/radio/sofi/Winamp.pls",
	'radio' => $source_radio.":9866"
	);

	$radio_info["59"] = array(
	'title' => "Quran Recitation with the Reading of Ibn Dhakwan from Ibn `Amir",
	'asx' => $source_url."/radio/zakwan/MediaPlayer.asx",
	'qtl' => $source_url."/radio/zakwan/QuickTime.qtl",
	'ram' => $source_url."/radio/zakwan/RealPlayer.ram",
	'pls' => $source_url."/radio/zakwan/Winamp.pls",
	'radio' => $source_radio.":9864"
	);

	$radio_info["60"] = array(
	'title' => "Quran Recitation by Sheikh Mishary Al-Ifasy",
	'asx' => $source_url."/radio/alafasy/MediaPlayer.asx",
	'qtl' => $source_url."/radio/alafasy/QuickTime.qtl",
	'ram' => $source_url."/radio/alafasy/RealPlayer.ram",
	'pls' => $source_url."/radio/alafasy/Winamp.pls",
	'radio' => $source_radio.":9922"
	);

	$radio_info["61"] = array(
	'title' => "Quran Recitation by Sheikh Mahmoud Khalil Al-Husary",
	'asx' => $source_url."/radio/alhusary/MediaPlayer.asx",
	'qtl' => $source_url."/radio/alhusary/QuickTime.qtl",
	'ram' => $source_url."/radio/alhusary/RealPlayer.ram",
	'pls' => $source_url."/radio/alhusary/Winamp.pls",
	'radio' => $source_radio.":9920"
	);

	$radio_info["62"] = array(
	'title' => "Quran Recitation by Sheikh Muhammad Siddiq al-Minshawi",
	'asx' => $source_url."/radio/minshaaw/MediaPlayer.asx",
	'qtl' => $source_url."/radio/minshaaw/QuickTime.qtl",
	'ram' => $source_url."/radio/minshaaw/RealPlayer.ram",
	'pls' => $source_url."/radio/minshaaw/Winamp.pls",
	'radio' => $source_radio.":9918"
	);

	$radio_info["63"] = array(
	'title' => "Fatwas by Ibn `Uthaymin",
	'asx' => $source_url."/radio/othaimen/MediaPlayer.asx",
	'qtl' => $source_url."/radio/othaimen/QuickTime.qtl",
	'ram' => $source_url."/radio/othaimen/RealPlayer.ram",
	'pls' => $source_url."/radio/othaimen/Winamp.pls",
	'radio' => $source_radio.":9890"
	);

	$radio_info["64"] = array(
	'title' => "Tafsir by Al-Sha`rawi (Arabic)",
	'asx' => $source_url."/radio/sharawy/MediaPlayer.asx",
	'qtl' => $source_url."/radio/sharawy/QuickTime.qtl",
	'ram' => $source_url."/radio/sharawy/RealPlayer.ram",
	'pls' => $source_url."/radio/sharawy/Winamp.pls",
	'radio' => $source_radio.":9888"
	);

	$radio_info["65"] = array(
	'title' => "Quran Recitation by Sheikh Mohammad Al-Tablawi",
	'asx' => $source_url."/radio/ltablawi/MediaPlayer.asx",
	'qtl' => $source_url."/radio/ltablawi/QuickTime.qtl",
	'ram' => $source_url."/radio/ltablawi/RealPlayer.ram",
	'pls' => $source_url."/radio/ltablawi/Winamp.pls",
	'radio' => $source_radio.":9882"
	);

	$radio_info["66"] = array(
	'title' => "Translation of the Quran in Swahili",
	'book' => $source_url."/quran/pdf/Translation_of_the_Quran_in_Swahili.pdf",
	'rss' => $source_url."/podcast/Swahili/Translation_of_the_Quran_in_Swahili.rss",
	'txt' => $source_url."/txt/Swahili/Translation_of_the_Quran_in_Swahili.txt",
	'asx' => $source_url."/radio/swahili/MediaPlayer.asx",
	'qtl' => $source_url."/radio/swahili/QuickTime.qtl",
	'ram' => $source_url."/radio/swahili/RealPlayer.ram",
	'pls' => $source_url."/radio/swahili/Winamp.pls",
	'radio' => $source_radio.":9860",
	'url' => $source_url."/index.php?moshaf=72&amp;id=55"
	);

	$radio_info["67"] = array(
	'title' => "Translation of the Quran in Pashto",
	'rss' => $source_url."/podcast/Pashto/Holy_Quran_in_the_Pashto_Language.rss",
	'txt' => $source_url."/txt/Pashto/Holy_Quran_in_the_Pashto_Language.txt",
	'asx' => $source_url."/radio/pashtoqu/MediaPlayer.asx",
	'qtl' => $source_url."/radio/pashtoqu/QuickTime.qtl",
	'ram' => $source_url."/radio/pashtoqu/RealPlayer.ram",
	'pls' => $source_url."/radio/pashtoqu/Winamp.pls",
	'radio' => $source_radio.":9874",
	'url' => $source_url."/index.php?moshaf=72&amp;id=54",
	'soundcloud' => 'https://soundcloud.com/edc-kuwait/sets/quran-translation-in-pashto-by-edc',
	'twitter' => '',
	'facebook' => ''
	);

	$radio_info["68"] = array(
	'title' => "Tafsir by Al-Sa`di in Russian",
	'book' => $source_url."/quran/pdf/ru_quran_russian.pdf",
	'rss' => $source_url."/podcast/Russian/Holy_Quran_in_the_Russian_Language_1.rss",
	'podcast' => "https://itunes.apple.com/kw/podcast/translation-meaning-quran/id880558588",
	'txt' => $source_url."/txt/Russian/Holy_Quran_in_the_Russian_Language_1.txt",
	'asx' => $source_url."/radio/saadirussian/MediaPlayer.asx",
	'qtl' => $source_url."/radio/saadirussian/QuickTime.qtl",
	'ram' => $source_url."/radio/saadirussian/RealPlayer.ram",
	'pls' => $source_url."/radio/saadirussian/Winamp.pls",
	'radio' => $source_radio.":9862",
	'tunein' => "http://tunein.com/radio/EDC-s190958/",
	'url' => $source_url."/index.php?moshaf=16&amp;id=16"
	);

	$radio_info["69"] = array(
	'title' => "Quran Recitation by Sheikh Abdullah Basfar",
	'asx' => $source_url."/radio/9846/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9846/QuickTime.qtl",
	'ram' => $source_url."/radio/9846/RealPlayer.ram",
	'pls' => $source_url."/radio/9846/Winamp.pls",
	'radio' => $source_radio.":9846"
	);

	$radio_info["70"] = array(
	'title' => "Quran Recitation by Sheikh Ahmad al-`Ajmi",
	'asx' => $source_url."/radio/9852/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9852/QuickTime.qtl",
	'ram' => $source_url."/radio/9852/RealPlayer.ram",
	'pls' => $source_url."/radio/9852/Winamp.pls",
	'radio' => $source_radio.":9852"
	);

	$radio_info["71"] = array(
	'title' => "Quran Recitation by Sheikh Ali Al-Hudhaifi",
	'asx' => $source_url."/radio/9844/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9844/QuickTime.qtl",
	'ram' => $source_url."/radio/9844/RealPlayer.ram",
	'pls' => $source_url."/radio/9844/Winamp.pls",
	'radio' => $source_radio.":9844"
	);

	$radio_info["72"] = array(
	'title' => "Quran Recitation by Sheikh Abdul Mohsin Al-Qasim",
	'asx' => $source_url."/radio/9842/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9842/QuickTime.qtl",
	'ram' => $source_url."/radio/9842/RealPlayer.ram",
	'pls' => $source_url."/radio/9842/Winamp.pls",
	'radio' => $source_radio.":9842"
	);

	$radio_info["73"] = array(
	'title' => "Quran Recitation by Sheikh Khalifah Al-Tunaiji",
	'asx' => $source_url."/radio/altunaiji/MediaPlayer.asx",
	'qtl' => $source_url."/radio/altunaiji/QuickTime.qtl",
	'ram' => $source_url."/radio/altunaiji/RealPlayer.ram",
	'pls' => $source_url."/radio/altunaiji/Winamp.pls",
	'radio' => $source_radio.":9838"
	);

	$radio_info["74"] = array(
	'title' => "Quran Recitation by Sheikh Ibrahim Al-Akhdar",
	'asx' => $source_url."/radio/alakhdar/MediaPlayer.asx",
	'qtl' => $source_url."/radio/alakhdar/QuickTime.qtl",
	'ram' => $source_url."/radio/alakhdar/RealPlayer.ram",
	'pls' => $source_url."/radio/alakhdar/Winamp.pls",
	'radio' => $source_radio.":9840"
	);

	$radio_info["75"] = array(
	'title' => "Quran Recitation by Sheikh Saud Al-Shuraim",
	'asx' => $source_url."/radio/alshuraim/MediaPlayer.asx",
	'qtl' => $source_url."/radio/alshuraim/QuickTime.qtl",
	'ram' => $source_url."/radio/alshuraim/RealPlayer.ram",
	'pls' => $source_url."/radio/alshuraim/Winamp.pls",
	'radio' => $source_radio.":9848"
	);

	$radio_info["76"] = array(
	'title' => "Quran Recitation by Abdul Rahman Al-Sudais",
	'asx' => $source_url."/radio/alsudais/MediaPlayer.asx",
	'qtl' => $source_url."/radio/alsudais/QuickTime.qtl",
	'ram' => $source_url."/radio/alsudais/RealPlayer.ram",
	'pls' => $source_url."/radio/alsudais/Winamp.pls",
	'radio' => $source_radio.":9850"
	);

	$radio_info["77"] = array(
	'title' => "Quran Recitation by Sheikh Sa`d Al-Ghamidi",
	'asx' => $source_url."/radio/alghamidi/MediaPlayer.asx",
	'qtl' => $source_url."/radio/alghamidi/QuickTime.qtl",
	'ram' => $source_url."/radio/alghamidi/RealPlayer.ram",
	'pls' => $source_url."/radio/alghamidi/Winamp.pls",
	'radio' => $source_radio.":9854"
	);

	$radio_info["78"] = array(
	'title' => "Quran Recitation by Sheikh Maher Al Muaiqly",
	'asx' => $source_url."/radio/muaiqlyen/MediaPlayer.asx",
	'qtl' => $source_url."/radio/muaiqlyen/QuickTime.qtl",
	'ram' => $source_url."/radio/muaiqlyen/RealPlayer.ram",
	'pls' => $source_url."/radio/muaiqlyen/Winamp.pls",
	'radio' => $source_radio.":9856"
	);

	$radio_info["79"] = array(
	'title' => "Reading of Ibn Jummaz from Abu Jafar by Al-Sultani",
	'asx' => $source_url."/radio/alsultani/MediaPlayer.asx",
	'qtl' => $source_url."/radio/alsultani/QuickTime.qtl",
	'ram' => $source_url."/radio/alsultani/RealPlayer.ram",
	'pls' => $source_url."/radio/alsultani/Winamp.pls",
	'radio' => $source_radio.":9942"
	);

	$radio_info["80"] = array(
	'title' => "Reading of Abu Al-Harith from Al-Kisai",
	'asx' => $source_url."/radio/9836/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9836/QuickTime.qtl",
	'ram' => $source_url."/radio/9836/RealPlayer.ram",
	'pls' => $source_url."/radio/9836/Winamp.pls",
	'radio' => $source_radio.":9836"
	);

	$radio_info["81"] = array(
	'title' => "Translation of the Quran in Falata",
	'asx' => $source_url."/radio/falata/MediaPlayer.asx",
	'qtl' => $source_url."/radio/falata/QuickTime.qtl",
	'ram' => $source_url."/radio/falata/RealPlayer.ram",
	'pls' => $source_url."/radio/falata/Winamp.pls",
	'radio' => $source_radio.":9834"
	);

	$radio_info["82"] = array(
	'title' => "Reading of Al-Duri from Abu Amr by Al-Fatih Muhammad Az-Zubayr",
	'asx' => $source_url."/radio/9832/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9832/QuickTime.qtl",
	'ram' => $source_url."/radio/9832/RealPlayer.ram",
	'pls' => $source_url."/radio/9832/Winamp.pls",
	'radio' => $source_radio.":9832"
	);

	$radio_info["83"] = array(
	'title' => "Reading of Al-Duri from Abu Amr by Abul-Rashid Al-Sufi",
	'asx' => $source_url."/radio/9830/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9830/QuickTime.qtl",
	'ram' => $source_url."/radio/9830/RealPlayer.ram",
	'pls' => $source_url."/radio/9830/Winamp.pls",
	'radio' => $source_radio.":9830"
	);

	$radio_info["84"] = array(
	'title' => "Reading of Al-Duri from Abu Amr by Muftah Al-Saltani",
	'asx' => $source_url."/radio/9828/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9828/QuickTime.qtl",
	'ram' => $source_url."/radio/9828/RealPlayer.ram",
	'pls' => $source_url."/radio/9828/Winamp.pls",
	'radio' => $source_radio.":9828"
	);

	$radio_info["85"] = array(
	'title' => "Reading of Al-Susi from Abu Amr by Abdul-Rashid Al-Sufi",
	'asx' => $source_url."/radio/9826/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9826/QuickTime.qtl",
	'ram' => $source_url."/radio/9826/RealPlayer.ram",
	'pls' => $source_url."/radio/9826/Winamp.pls",
	'radio' => $source_radio.":9826"
	);

	$radio_info["86"] = array(
	'title' => "Reading of Khalaf from Hamzah by Abdul-Rashid Al-Sufi",
	'asx' => $source_url."/radio/9824/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9824/QuickTime.qtl",
	'ram' => $source_url."/radio/9824/RealPlayer.ram",
	'pls' => $source_url."/radio/9824/Winamp.pls",
	'radio' => $source_radio.":9824"
	);

	$radio_info["87"] = array(
	'title' => "Reading of Ruways from Yaqub Al-Hadrami by Yasir Al-Mazrui",
	'asx' => $source_url."/radio/9822/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9822/QuickTime.qtl",
	'ram' => $source_url."/radio/9822/RealPlayer.ram",
	'pls' => $source_url."/radio/9822/Winamp.pls",
	'radio' => $source_radio.":9822"
	);

	$radio_info["88"] = array(
	'title' => "Reading of Qalun from Nafi by Ahmad Khidr Al-Tarabulsi",
	'asx' => $source_url."/radio/9820/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9820/QuickTime.qtl",
	'ram' => $source_url."/radio/9820/RealPlayer.ram",
	'pls' => $source_url."/radio/9820/Winamp.pls",
	'radio' => $source_radio.":9820"
	);

	$radio_info["89"] = array(
	'title' => "Reading of Qalun from Nafi by Al-Dukali Muhammad Al-Alim",
	'asx' => $source_url."/radio/9818/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9818/QuickTime.qtl",
	'ram' => $source_url."/radio/9818/RealPlayer.ram",
	'pls' => $source_url."/radio/9818/Winamp.pls",
	'radio' => $source_radio.":9818"
	);

	$radio_info["90"] = array(
	'title' => "Reading of Qalun from Nafi by Ali l-Hudhaifi",
	'asx' => $source_url."/radio/9816/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9816/QuickTime.qtl",
	'ram' => $source_url."/radio/9816/RealPlayer.ram",
	'pls' => $source_url."/radio/9816/Winamp.pls",
	'radio' => $source_radio.":9816"
	);

	$radio_info["91"] = array(
	'title' => "Reading of Qalun from Nafi by Mahmoud Khalil Al-Husari",
	'asx' => $source_url."/radio/9814/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9814/QuickTime.qtl",
	'ram' => $source_url."/radio/9814/RealPlayer.ram",
	'pls' => $source_url."/radio/9814/Winamp.pls",
	'radio' => $source_radio.":9814"
	);

	$radio_info["92"] = array(
	'title' => "Reading of Warsh from Nafi by Ibrahim Al-Dusari",
	'asx' => $source_url."/radio/9812/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9812/QuickTime.qtl",
	'ram' => $source_url."/radio/9812/RealPlayer.ram",
	'pls' => $source_url."/radio/9812/Winamp.pls",
	'radio' => $source_radio.":9812"
	);

	$radio_info["93"] = array(
	'title' => "Reading of Warsh from Nafi by Abdul-Basit Abdul-Samad",
	'asx' => $source_url."/radio/9810/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9810/QuickTime.qtl",
	'ram' => $source_url."/radio/9810/RealPlayer.ram",
	'pls' => $source_url."/radio/9810/Winamp.pls",
	'radio' => $source_radio.":9810"
	);

	$radio_info["94"] = array(
	'title' => "Reading of Warsh from Nafi by Umar Al-Qazabri",
	'asx' => $source_url."/radio/9808/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9808/QuickTime.qtl",
	'ram' => $source_url."/radio/9808/RealPlayer.ram",
	'pls' => $source_url."/radio/9808/Winamp.pls",
	'radio' => $source_radio.":9808"
	);

	$radio_info["95"] = array(
	'title' => "Reading of Warsh from Nafi by Muhammad Al-Tayyib Himdan",
	'asx' => $source_url."/radio/9806/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9806/QuickTime.qtl",
	'ram' => $source_url."/radio/9806/RealPlayer.ram",
	'pls' => $source_url."/radio/9806/Winamp.pls",
	'radio' => $source_radio.":9806"
	);

	$radio_info["96"] = array(
	'title' => "Reading of Warsh from Nafi by Mustafa Gharbi",
	'asx' => $source_url."/radio/9804/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9804/QuickTime.qtl",
	'ram' => $source_url."/radio/9804/RealPlayer.ram",
	'pls' => $source_url."/radio/9804/Winamp.pls",
	'radio' => $source_radio.":9804"
	);

	$radio_info["97"] = array(
	'title' => "Reading of Warsh from Nafi by Yasin Al-Jazairi",
	'asx' => $source_url."/radio/9802/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9802/QuickTime.qtl",
	'ram' => $source_url."/radio/9802/RealPlayer.ram",
	'pls' => $source_url."/radio/9802/Winamp.pls",
	'radio' => $source_radio.":9802"
	);

	$radio_info["98"] = array(
	'title' => "Reading of Ruways from Yaqub al-Hadrami by Mufah Muhammad Al-Saltani",
	'asx' => $source_url."/radio/9800/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9800/QuickTime.qtl",
	'ram' => $source_url."/radio/9800/RealPlayer.ram",
	'pls' => $source_url."/radio/9800/Winamp.pls",
	'radio' => $source_radio.":9800"
	);

	$radio_info["99"] = array(
	'title' => "Quran Recitation by Sheikh Tawfiq Al-Saigh",
	'asx' => $source_url."/radio/9796/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9796/QuickTime.qtl",
	'ram' => $source_url."/radio/9796/RealPlayer.ram",
	'pls' => $source_url."/radio/9796/Winamp.pls",
	'radio' => $source_radio.":9796"
	);

	$radio_info["100"] = array(
	'title' => "Quran Recitation by Sheikh Khalid AL-Jalil",
	'asx' => $source_url."/radio/9794/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9794/QuickTime.qtl",
	'ram' => $source_url."/radio/9794/RealPlayer.ram",
	'pls' => $source_url."/radio/9794/Winamp.pls",
	'radio' => $source_radio.":9794"
	);

	$radio_info["101"] = array(
	'title' => "Quran Recitation by Sheikh Zaki Daghistani",
	'asx' => $source_url."/radio/9792/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9792/QuickTime.qtl",
	'ram' => $source_url."/radio/9792/RealPlayer.ram",
	'pls' => $source_url."/radio/9792/Winamp.pls",
	'radio' => $source_radio.":9792"
	);

	$radio_info["102"] = array(
	'title' => "Quran Recitation by Sheikh Abdulbari Al-Thubayti",
	'asx' => $source_url."/radio/9790/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9790/QuickTime.qtl",
	'ram' => $source_url."/radio/9790/RealPlayer.ram",
	'pls' => $source_url."/radio/9790/Winamp.pls",
	'radio' => $source_radio.":9790"
	);

	$radio_info["103"] = array(
	'title' => "Quran Recitation by Sheikh Mahmud Ali Al-Banna",
	'asx' => $source_url."/radio/9788/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9788/QuickTime.qtl",
	'ram' => $source_url."/radio/9788/RealPlayer.ram",
	'pls' => $source_url."/radio/9788/Winamp.pls",
	'radio' => $source_radio.":9788"
	);

	$radio_info["104"] = array(
	'title' => "Quran Recitation by Sheikh Mustafa Ismail",
	'asx' => $source_url."/radio/9786/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9786/QuickTime.qtl",
	'ram' => $source_url."/radio/9786/RealPlayer.ram",
	'pls' => $source_url."/radio/9786/Winamp.pls",
	'radio' => $source_radio.":9786"
	);

	$radio_info["105"] = array(
	'title' => "Quran Recitation by Sheikh Wadi Al-Yamani",
	'asx' => $source_url."/radio/9784/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9784/QuickTime.qtl",
	'ram' => $source_url."/radio/9784/RealPlayer.ram",
	'pls' => $source_url."/radio/9784/Winamp.pls",
	'radio' => $source_radio.":9784"
	);

	$radio_info["106"] = array(
	'title' => "Quran Recitation by Jaza Al-Suweilih",
	'asx' => $source_url."/radio/9780/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9780/QuickTime.qtl",
	'ram' => $source_url."/radio/9780/RealPlayer.ram",
	'pls' => $source_url."/radio/9780/Winamp.pls",
	'radio' => $source_radio.":9780"
	);

	$radio_info["107"] = array(
	'title' => "Quran Recitation by Abdul-Rahman Al-Usi",
	'asx' => $source_url."/radio/9778/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9778/QuickTime.qtl",
	'ram' => $source_url."/radio/9778/RealPlayer.ram",
	'pls' => $source_url."/radio/9778/Winamp.pls",
	'radio' => $source_radio.":9778"
	);

	$radio_info["108"] = array(
	'title' => "Quran Recitation by Muhammad Siddiq AL-Minshawi (Al-Mushaf Al-Mujawwad)",
	'asx' => $source_url."/radio/9776/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9776/QuickTime.qtl",
	'ram' => $source_url."/radio/9776/RealPlayer.ram",
	'pls' => $source_url."/radio/9776/Winamp.pls",
	'radio' => $source_radio.":9776"
	);

	$radio_info["109"] = array(
	'title' => "Translation of the Quran in Romanian",
	'asx' => $source_url."/radio/9774/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9774/QuickTime.qtl",
	'ram' => $source_url."/radio/9774/RealPlayer.ram",
	'pls' => $source_url."/radio/9774/Winamp.pls",
	'radio' => $source_radio.":9774"
	);

	$radio_info["110"] = array(
	'title' => "Translation of the Quran in Swedish",
	'asx' => $source_url."/radio/9772/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9772/QuickTime.qtl",
	'ram' => $source_url."/radio/9772/RealPlayer.ram",
	'pls' => $source_url."/radio/9772/Winamp.pls",
	'radio' => $source_radio.":9772"
	);
	
	$radio_info["111"] = array(
	'title' => "Quran Recitation by Sheikh Abdulaziz Az-Zahrani",
	'asx' => $source_url."/radio/9302/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9302/QuickTime.qtl",
	'ram' => $source_url."/radio/9302/RealPlayer.ram",
	'pls' => $source_url."/radio/9302/Winamp.pls",
	'radio' => $source_radio.":9302"
	);
	
	$radio_info["112"] = array(
	'title' => "Quran Recitation by Sheikh Idris Abkar",
	'asx' => $source_url."/radio/9300/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9300/QuickTime.qtl",
	'ram' => $source_url."/radio/9300/RealPlayer.ram",
	'pls' => $source_url."/radio/9300/Winamp.pls",
	'radio' => $source_radio.":9300"
	);
	
	$radio_info["113"] = array(
	'title' => "Quran Recitation by Sheikh Abdulwali Al-Arkani",
	'asx' => $source_url."/radio/9304/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9304/QuickTime.qtl",
	'ram' => $source_url."/radio/9304/RealPlayer.ram",
	'pls' => $source_url."/radio/9304/Winamp.pls",
	'radio' => $source_radio.":9304"
	);
	
	$radio_info["114"] = array(
	'title' => "Quran Recitation by Sheikh Fahd Al-Kandari",
	'asx' => $source_url."/radio/9306/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9306/QuickTime.qtl",
	'ram' => $source_url."/radio/9306/RealPlayer.ram",
	'pls' => $source_url."/radio/9306/Winamp.pls",
	'radio' => $source_radio.":9306"
	);
	
	$radio_info["115"] = array(
	'title' => "Al-Mushaf Al-Mu`allim by Sheikh Muhammad Siddiq Al-Minshawi",
	'asx' => $source_url."/radio/9308/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9308/QuickTime.qtl",
	'ram' => $source_url."/radio/9308/RealPlayer.ram",
	'pls' => $source_url."/radio/9308/Winamp.pls",
	'radio' => $source_radio.":9308"
	);

	$radio_info["116"] = array(
	'title' => "Mabahith fi Ulum al-Quran",
	'asx' => $source_url."/radio/9310/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9310/QuickTime.qtl",
	'ram' => $source_url."/radio/9310/RealPlayer.ram",
	'pls' => $source_url."/radio/9310/Winamp.pls",
	'radio' => $source_radio.":9310"
	);
	
	$radio_info["117"] = array(
	'title' => "Funun al-Afnan fi Ajaib Ulum al-Quran",
	'asx' => $source_url."/radio/9312/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9312/QuickTime.qtl",
	'ram' => $source_url."/radio/9312/RealPlayer.ram",
	'pls' => $source_url."/radio/9312/Winamp.pls",
	'radio' => $source_radio.":9312"
	);
	
	$radio_info["118"] = array(
	'title' => "Ghayat al-Mureed fi Ilm al-Tajweed",
	'asx' => $source_url."/radio/9314/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9314/QuickTime.qtl",
	'ram' => $source_url."/radio/9314/RealPlayer.ram",
	'pls' => $source_url."/radio/9314/Winamp.pls",
	'radio' => $source_radio.":9314"
	);
	
	$radio_info["119"] = array(
	'title' => "Al-Ameed fi Ilm al-Tajweed",
	'asx' => $source_url."/radio/9316/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9316/QuickTime.qtl",
	'ram' => $source_url."/radio/9316/RealPlayer.ram",
	'pls' => $source_url."/radio/9316/Winamp.pls",
	'radio' => $source_radio.":9316"
	);
	
	$radio_info["120"] = array(
	'title' => "Al-Tafseer al-Mawdui il-ayat al-Tawheed fi al-Quran",
	'asx' => $source_url."/radio/9318/MediaPlayer.asx",
	'qtl' => $source_url."/radio/9318/QuickTime.qtl",
	'ram' => $source_url."/radio/9318/RealPlayer.ram",
	'pls' => $source_url."/radio/9318/Winamp.pls",
	'radio' => $source_radio.":9318"
	);

	return $radio_info;
}

function radio_check($port=''){
	if( empty($port) ){
		return false;
	}else{
		$radio_info = radios_list();
		$ports = radios_port();
		if( preg_match('/^[0-9]{4}$/', $port) ){
			if( in_array($port, $ports) ){
				$radio_id = array_search($port, $ports);
				if( array_key_exists($radio_id, $radio_info) ){
					return $radio_info[$radio_id];
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			if( preg_match('/^[0-9]{1,3}$/', $port) ){
				if( array_key_exists($port, $radio_info) ){
					$get_port = $ports[$port];
					return $radio_info[$port];
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}
}

function get_radio_icons($arr=array()){
	if(is_array($arr)){
		$code = '';
		foreach($arr as $k => $v){
			$url = ( isset($v['link']) ? $v['link'] : '' );
			$allow = ( isset($v['allow']) ? $v['allow'] : 0 );
			if($allow == '1'){
				if($url != ""){
					$code .= '<a target="_blank" href="'.$v['link'].'"><img src="'.plugin_dir_url( __FILE__ ).'/i/'.$k.'.png" alt="'.$v['link'].'"></a> ';
				}
			}
		}
	}else{
		$code = '';
	}
	if($code == ""){
		$icons = '';
	}else{
		$icons = '<div class="radio_icons">'.$code.'</div>';
	}
	return $icons;
}

function get_radio($get_id, $shownotes=0, $widget_data=''){
	global $post;
	if( get_option('hidden_radio_player') == 1 && $shownotes == 0 ){
		$code = '';
	}else{
		if(isset($widget_data) && is_array($widget_data)){
			$radeo_key = $get_id;
			$autostart = ( $widget_data['autostart'] == 1 ? ' autoplay="autoplay"' : '' );
			$radio_player = ( $widget_data['type'] == "jplayer" ? 'jplayer' : 'html5' );
			
			$allow_url = (isset($widget_data['url']) ? $widget_data['url'] : 0 );
			$allow_podcast = (isset($widget_data['podcast']) ? $widget_data['podcast'] : 0 );
			$allow_pdf = (isset($widget_data['pdf']) ? $widget_data['pdf'] : 0 );
			$allow_txt = (isset($widget_data['txt']) ? $widget_data['txt'] : 0 );
			$allow_asx = (isset($widget_data['asx']) ? $widget_data['asx'] : 0 );
			$allow_qtl = (isset($widget_data['qtl']) ? $widget_data['qtl'] : 0 );
			$allow_ram = (isset($widget_data['ram']) ? $widget_data['ram'] : 0 );
			$allow_pls = (isset($widget_data['pls']) ? $widget_data['pls'] : 0 );
			$allow_tunein = (isset($widget_data['tunein']) ? $widget_data['tunein'] : 0 );
			$allow_soundcloud = (isset($widget_data['soundcloud']) ? $widget_data['soundcloud'] : 0 );
			$allow_twitter = (isset($widget_data['twitter']) ? $widget_data['twitter'] : 0 );
			$allow_facebook = (isset($widget_data['facebook']) ? $widget_data['facebook'] : 0 );
			$show_title = (isset($widget_data['show_title']) ? $widget_data['show_title'] : 0 );
					
			$RADIO = radio_check($radeo_key);
			$radio_title = ( trim(get_option('radio_title')) == "" ? $RADIO['title'] : strip_tags(get_option('radio_title')) );
			
			$url = (isset($RADIO['url']) ? $RADIO['url'] : '' );
			$pdf = (isset($RADIO['book']) ? $RADIO['book'] : '' );
			$podcast = (isset($RADIO['podcast']) ? $RADIO['podcast'] : '' );
			$txt = (isset($RADIO['txt']) ? $RADIO['txt'] : '' );
			$asx = (isset($RADIO['asx']) ? $RADIO['asx'] : '' );
			$qtl = (isset($RADIO['qtl']) ? $RADIO['qtl'] : '' );
			$ram = (isset($RADIO['ram']) ? $RADIO['ram'] : '' );
			$pls = (isset($RADIO['pls']) ? $RADIO['pls'] : '' );
			$tunein = (isset($RADIO['tunein']) ? $RADIO['tunein'] : '' );
			$soundcloud = (isset($RADIO['soundcloud']) ? $RADIO['soundcloud'] : '' );
			$twitter = (isset($RADIO['twitter']) ? $RADIO['twitter'] : '' );
			$facebook = (isset($RADIO['facebook']) ? $RADIO['facebook'] : '' );
			
			$icons = array(
				'url' => array( 'link' => $url, 'allow' => $allow_url ),
				'pdf' => array( 'link' => $pdf, 'allow' => $allow_pdf ),
				'podcast' => array( 'link' => $podcast, 'allow' => $allow_podcast ),
				'alllinks' => array( 'link' => $txt, 'allow' => $allow_txt ),
				'MediaPlayer' => array( 'link' => $asx, 'allow' => $allow_asx ),
				'QuickTime' => array( 'link' => $qtl, 'allow' => $allow_qtl ),
				'realplayer' => array( 'link' => $ram, 'allow' => $allow_ram ),
				'Winamp' => array( 'link' => $pls, 'allow' => $allow_pls ),
				'tunein' => array( 'link' => $tunein, 'allow' => $allow_tunein )
			);
			
			$get_radio_icons = get_radio_icons($icons);
			
		}else{
			$radeo_key = ( $shownotes == 1 ? $get_id : $get_id[1] );
			$autostart = ( get_option('check_autostart') == '1' ? ' autoplay="autoplay"' : '' );
			$radio_player = ( get_option('radio_player') == "jplayer" ? 'jplayer' : 'html5' );
			
			$RADIO = radio_check($radeo_key);
			$radio_title = ( trim(get_option('radio_title')) == "" ? $RADIO['title'] : strip_tags(get_option('radio_title')) );
			
			$allow_url = (get_option('show_radio_url') == 1 ? 1 : 0 );
			$allow_podcast = (get_option('show_radio_podcast') == 1 ? 1 : 0 );
			$allow_pdf = (get_option('show_radio_pdf') == 1 ? 1 : 0 );
			$allow_txt = (get_option('show_radio_alllinks') == 1 ? 1 : 0 );
			$allow_asx = (get_option('show_radio_MediaPlayer') == 1 ? 1 : 0 );
			$allow_qtl = (get_option('show_radio_QuickTime') == 1 ? 1 : 0 );
			$allow_ram = (get_option('show_radio_realplayer') == 1 ? 1 : 0 );
			$allow_pls = (get_option('show_radio_Winamp') == 1 ? 1 : 0 );
			$allow_tunein = (get_option('show_radio_tunein') == 1 ? 1 : 0 );
			$allow_soundcloud = (get_option('show_radio_soundcloud') == 1 ? 1 : 0 );
			$allow_twitter = (get_option('show_radio_twitter') == 1 ? 1 : 0 );
			$allow_facebook = (get_option('show_radio_facebook') == 1 ? 1 : 0 );
			
			$url = (isset($RADIO['url']) ? $RADIO['url'] : '' );
			$pdf = (isset($RADIO['book']) ? $RADIO['book'] : '' );
			$podcast = (isset($RADIO['podcast']) ? $RADIO['podcast'] : '' );
			$txt = (isset($RADIO['txt']) ? $RADIO['txt'] : '' );
			$asx = (isset($RADIO['asx']) ? $RADIO['asx'] : '' );
			$qtl = (isset($RADIO['qtl']) ? $RADIO['qtl'] : '' );
			$ram = (isset($RADIO['ram']) ? $RADIO['ram'] : '' );
			$pls = (isset($RADIO['pls']) ? $RADIO['pls'] : '' );
			$tunein = (isset($RADIO['tunein']) ? $RADIO['tunein'] : '' );
			$soundcloud = (isset($RADIO['soundcloud']) ? $RADIO['soundcloud'] : '' );
			$twitter = (isset($RADIO['twitter']) ? $RADIO['twitter'] : '' );
			$facebook = (isset($RADIO['facebook']) ? $RADIO['facebook'] : '' );
			
			$icons = array(
				'url' => array( 'link' => $url, 'allow' => $allow_url ),
				'pdf' => array( 'link' => $pdf, 'allow' => $allow_pdf ),
				'podcast' => array( 'link' => $podcast, 'allow' => $allow_podcast ),
				'alllinks' => array( 'link' => $txt, 'allow' => $allow_txt ),
				'MediaPlayer' => array( 'link' => $asx, 'allow' => $allow_asx ),
				'QuickTime' => array( 'link' => $qtl, 'allow' => $allow_qtl ),
				'realplayer' => array( 'link' => $ram, 'allow' => $allow_ram ),
				'Winamp' => array( 'link' => $pls, 'allow' => $allow_pls ),
				'tunein' => array( 'link' => $tunein, 'allow' => $allow_tunein )
			);
			
			$get_radio_icons = get_radio_icons($icons);
			$show_title = 1;
		}

		$code = '';
		if($RADIO == false){
			$code .= '<p class="radio_error">'.__('Not Found', 'the-quran-radio').'</p>';
		}else{
			if($radio_player == "html5"){
				$code .= '<div id="quran-radio">';
				if($show_title == 1){
				$code .= '<div class="lang">'.$radio_title.'</div>'."\n";
				}
				$code .= '<div class="radio_container">'."\n";
				$code .= '<audio controls'.$autostart.' preload="none">'; //src="'.$RADIO['radio'].'/;*.mp3"
				$code .= '<source src="'.$RADIO['radio'].'/;" type="audio/mpeg">';
				$code .= '</audio>';
				$code .= '</div>';
				$code .= $get_radio_icons;
				if($shownotes == 1){
					$code .= '<div class="radio_notes">'. __('Copy this code', 'the-quran-radio') .' <span>radio['.$radeo_key.']</span> '. __('and past in post or page', 'the-quran-radio') .'</div>';
				}
				$code .= '</div>';
			}else{
				$code .= '<script type="text/javascript">';
				$code .= '$(document).ready(function(){';
				$code .= 'var stream = {';
				$code .= 'title: "'.$radio_title.'",';
				$code .= 'mp3: "'.$RADIO['radio'].'/;*.mp3"';
				$code .= '},';
				$code .= 'ready = false;';
				$code .= '$("#jquery_jplayer_'.$radeo_key.'").jPlayer({';
				$code .= 'ready: function (event) {';
				$code .= 'ready = true;';
				$code .= '$(this).jPlayer("setMedia", stream);';
				$code .= '},';
				$code .= 'pause: function() {';
				$code .= '$(this).jPlayer("clearMedia");';
				$code .= '},';
				$code .= 'error: function(event) {';
				$code .= 'if(ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET) {';
				$code .= '$(this).jPlayer("setMedia", stream).jPlayer("play");';
				$code .= '}';
				$code .= '},';
				$code .= 'swfPath: "/js/jplayer",';
				$code .= 'supplied: "mp3",';
				$code .= 'preload: "none",';
				$code .= 'wmode: "window",';
				$code .= 'useStateClassSkin: true,';
				$code .= 'autoBlur: true,';
				$code .= 'keyEnabled: true';
				$code .= '});';
				$code .= '});';
				$code .= '</script>';

				$code .= '<div id="jquery_jplayer_'.$radeo_key.'" class="jp-jplayer"></div>';
				$code .= '<div id="jp_container_1" class="jplayer-audio" role="application" aria-label="media player">';
				$code .= '<div class="jp-type-single">';
				$code .= '<div class="jplayer-contents">';
				if($show_title == 1){
				$code .= '<div class="jplayer-full-width">';
				$code .= '<h2 class="jp-title" aria-label="title">&nbsp;</h2>';
				$code .= '</div>';
				$code .= '<div class="radio_clear"></div>';
				}
				
				$code .= '<div class="jplayer-full-width">';
				$code .= '<div class="jp-controls">';
				$code .= '<button class="jp-play" role="button" tabindex="0">play</button>';
				$code .= '<button class="jp-stop" role="button" tabindex="0">stop</button>';
				$code .= '</div>';
				$code .= '</div>';
				$code .= '<div class="radio_clear"></div>';
				$code .= '<div class="jplayer-full-width">';
				$code .= '<div class="jp-volume-controls">';
				$code .= '<button class="jp-mute" role="button" tabindex="0">mute</button>';
				$code .= '<button class="jp-volume-max" role="button" tabindex="0">max volume</button>';
				$code .= '<div class="jp-volume-bar">';
				$code .= '<div class="jp-volume-bar-value"></div>';
				$code .= '</div>';
				$code .= '</div>';
				$code .= '<div class="radio_clear"></div>';
				$code .= '<div class="jplayer-full-width">';
				$code .= '<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>';
				$code .= '</div>';
				$code .= $get_radio_icons;
				$code .= '</div>';
				$code .= '</div>';
				$code .= '</div>';
				$code .= '</div>';
				
				if($shownotes == 1){
					$code .= '<div class="radio_notes">'. __('Copy this code', 'the-quran-radio') .' <span>radio['.$radeo_key.']</span> '. __('and past in post or page', 'the-quran-radio') .'</div>';
				}
			}

		}
	}
	return $code;
}

?>