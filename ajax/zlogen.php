<?php
	function zlogen() {
		$phrases = [
			'ЖЫВТОНЕЧОЧОУПЯЧКА1111111',
			'ОЯЕБУ!!!!!!11!!адинадин',
			'ОНОТОЛЕ НЕГОДУЕ!111',
			'ВОЕНЕ УПЧК СТРАШНЕ ОТАКЕ ДДоСЕ!111',
			'ПОПЯЧТС!11!!!1',
			'ЪЕЧЧОЖА!!!!11',
			'ЛуЧИ ПОНОСА!!!1111111',
			'СВОБОДА РАВЕНСТВО УПЯЧКА!11111!1С.Р.У111111111!!!',
			'ОН КАГБЕ ГОВОРИ НАМ -',
			'ОТАКе ВОЕНЕ!111',
			'ПОТС ЗОХВАЧЕН111',
			'ЕБАНЕМСЯ НА ОТЛИЧНЕНЬКО!!!111',
			'ОНОТОЛЕ ПРОКЛИНАЕ УГ!!111',
			'ЖЕПЬ ЕБРИЛО!!11111111адинадин',
			'ХУРЬ!!!1',
			'ЧАКЕ СТРАШНЕ ГНЕВЕ!111адин11',
			'ДОЛГОПЯТ КАКБЕ ЛЮБИМЕ ЖЫВТОНЕ ОНОТОЛЕ!!!111',
			'УПЯЧКОЧАТ11!!!!адин1',
			'МЖВЯЧНИ ПРДУНЬ–ПРДУНЬ1111',
			'ЪЖЧЛО!адин11111!!!!!',

			'ЖАЖА11!',
			'СЛАВА ЛЕОНИДЕ!111',
			'ГЛАНДЭ ОЯЕБУ ПОПЯЧТС!1111аДИН',
			'ПыЩЩЩЩЩЩ!!!!!!1111 ПЫЩЩЩЩЩЩ!!111 ПыЩЩЩЩЩЩЩЩЩ!!!!!!1111111СТОАДИНАЦАТЬ',
			'ОНОТОЛЕ КАКБЕ БЛАГОСЛОВЛЯЕ ДОБЛЕСТНЕ ВОЕНЕ УПЧК!!111адинадин',
			'СМОТРИ БАЛЕТ СУКА!1111',
			'УГ НА ГЛАГНЕ!!111',
			'ЭЕКСТЕЛР ТЫОЙ ЯЕБАНЕЙУ КОТУ111111111',
			'Я ИДИОТ1УБЕЙТЕ МЕНЯ КТО–НИБУДЬ!',
			'ОНОТОЛЕ СЕРЧАЕ!!111адинадин',
			'ЖРИ ПЯНИ СУКА!111',
			'НЕ ПОТСЬ УГ НА ГЛАГНЕ!!!!1111111АДИН',
			'СЛАВА ОНОТОЛЕ!111',
			'Медведев — шмель11111111 ЖЖЖЖЖ1111111!111',
			'ОНОТОЛЕ КАКБЕ БЛАГОСЛОВЛЯЕ ДОБЛЕСТНЕ ВОЕНЕ УПЧК!!111адинадин',
			'ЕБАНИСТЫД!!1',
			'ПЕПЯКОТУТСЯ!11111адин',
			'ОНОТОЛЕЙ!!!11',
			'А ТЫ ЗНАЕШЬ В ЧЁМ СОЛЬ, %USERNAME%?!1711',
			'СКОЛОПЕНДРЕ БОДРЕ И МОГУЧЕ ЖЫВТОНЕ - НАСЕКОМЕ!!11',
			'ПЫЩЩЩЩЩЩ!!111аДИН',
			'ТЫ ПРОБОВАЛ ЛИЗАТЬ ОКТАЭДР??777!1',
			'С.Р.У11!!111',
			'УПЯЧКА СЛЕДИТ ЗА ТОБОЙадин1!111111!!!',
			'СИСЬКЕ!111'
		];
		$power = $_GET['power'];
		if( $power > 0 ) {
			for ($i=0; $i < $power+1; $i++) { 
				echo " " . $phrases[array_rand($phrases)] . " ";
			}
		} else {
			echo "АЛЯРМА!!11";
		}
	}
	function zlogen_with_links() {
		$phrases = [
			'ЖЫВТОНЕЧОЧОУПЯЧКА1111111',
			'ОЯЕБУ!!!!!!11!!адинадин',
			'ОНОТОЛЕ НЕГОДУЕ!111',
			'ВОЕНЕ УПЧК СТРАШНЕ ОТАКЕ ДДоСЕ!111',
			'ПОПЯЧТС!11!!!1',
			'ЪЕЧЧОЖА!!!!11',
			'ЛуЧИ ПОНОСА!!!1111111',
			'СВОБОДА РАВЕНСТВО УПЯЧКА!11111!1С.Р.У111111111!!!',
			'ОН КАГБЕ ГОВОРИ НАМ -',
			'ОТАКе ВОЕНЕ!111',
			'ПОТС ЗОХВАЧЕН111',
			'ЕБАНЕМСЯ НА ОТЛИЧНЕНЬКО!!!111',
			'ОНОТОЛЕ ПРОКЛИНАЕ УГ!!111',
			'ЖЕПЬ ЕБРИЛО!!11111111адинадин',
			'ХУРЬ!!!1',
			'ЧАКЕ СТРАШНЕ ГНЕВЕ!111адин11',
			'ДОЛГОПЯТ КАКБЕ ЛЮБИМЕ ЖЫВТОНЕ ОНОТОЛЕ!!!111',
			'УПЯЧКОЧАТ11!!!!адин1',
			'МЖВЯЧНИ ПРДУНЬ–ПРДУНЬ1111',
			'ЪЖЧЛО!адин11111!!!!!',

			'ЖАЖА11!',
			'СЛАВА ЛЕОНИДЕ!111',
			'ГЛАНДЭ ОЯЕБУ ПОПЯЧТС!1111аДИН',
			'ПыЩЩЩЩЩЩ!!!!!!1111 ПЫЩЩЩЩЩЩ!!111 ПыЩЩЩЩЩЩЩЩЩ!!!!!!1111111СТОАДИНАЦАТЬ',
			'ОНОТОЛЕ КАКБЕ БЛАГОСЛОВЛЯЕ ДОБЛЕСТНЕ ВОЕНЕ УПЧК!!111адинадин',
			'СМОТРИ БАЛЕТ СУКА!1111',
			'УГ НА ГЛАГНЕ!!111',
			'ЭЕКСТЕЛР ТЫОЙ ЯЕБАНЕЙУ КОТУ111111111',
			'Я ИДИОТ1УБЕЙТЕ МЕНЯ КТО–НИБУДЬ!',
			'ОНОТОЛЕ СЕРЧАЕ!!111адинадин',
			'ЖРИ ПЯНИ СУКА!111',
			'НЕ ПОТСЬ УГ НА ГЛАГНЕ!!!!1111111АДИН',
			'СЛАВА ОНОТОЛЕ!111',
			'Медведев — шмель11111111 ЖЖЖЖЖ1111111!111',
			'ОНОТОЛЕ КАКБЕ БЛАГОСЛОВЛЯЕ ДОБЛЕСТНЕ ВОЕНЕ УПЧК!!111адинадин',
			'ЕБАНИСТЫД!!1',
			'ПЕПЯКОТУТСЯ!11111адин',
			'ОНОТОЛЕЙ!!!11',
			'А ТЫ ЗНАЕШЬ В ЧЁМ СОЛЬ, %USERNAME%?!1711',
			'СКОЛОПЕНДРЕ БОДРЕ И МОГУЧЕ ЖЫВТОНЕ - НАСЕКОМЕ!!11',
			'ПЫЩЩЩЩЩЩ!!111аДИН',
			'ТЫ ПРОБОВАЛ ЛИЗАТЬ ОКТАЭДР??777!1',
			'С.Р.У11!!111',
			'УПЯЧКА СЛЕДИТ ЗА ТОБОЙадин1!111111!!!',
			'СИСЬКЕ!111',
			'http://otake.tk/',
			'http://otake.tk/',
			'http://otake.tk/',
			'http://otake.tk/',
			'http://otake.tk/',
		];
		$power = $_GET['power'];
		if( $power > 0 ) {
			for ($i=0; $i < $power+1; $i++) { 
				echo " " . $phrases[array_rand($phrases)] . " ";
			}
		} else {
			echo "АЛЯРМА!!111";
		}
	}
	if($_GET['with_links'] == 1) {
		zlogen_with_links();
	} else {
		zlogen();
	}
?>
