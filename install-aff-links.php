<?php

/* STRUKTUR:
1. url = Url zur Startseite, zum Beispiel 'http://www.weg.de' UNIQUE
2. url_match = Teil der URL, der übereinstimmen muss, z. B. '.weg.de' UNIQUE
3. ap_name = Name des Netzwerks
4. ap_cat = Category, z. B. 'Reise'
5. netzwerke = Verfügbare netzwerke Kommagetrennt, z. B. 'zanox, affili.net'
    (  6. nw_aktiv = eines der Netzwerke, wird durch user gesetzt)
    (  7. aff_code = Affiliate-Code des Users für dieses Programm)
8. nw_link = Link zum Partnerporgramm beim Netzwerk

NETZWERKE
affilinet
zanox
tradedoubler

Die Netzwerkliste muss in wp2affiliate.php und aff_links.js gepflegt werden!!! 

TODO: Netzwerk-Links bei Zanox anpassen (ohne eigene Partner-ID)

######### ACHTUNG lieber Plugin-Nutzer: ########
ACHTUNG lieber Plugin-Nutzer: Du kannst hier keine eigenen Programme einpflegen! Wirklich, es wird nicht funktionieren. 
Der Deeplink wird über die wp2a-Api generiert. Wenn hier also Einträge vorhanden sind, die der wp2a-Server nicht kennt, wird das Plugin nicht wie erwartet funktionieren.
Sollte dir ein Affiliate-Programm fehlen, schreib uns einfach! http://www.wp2affiliate.com/support/
################################################ 

*/

// Hier werden die Aff-Programme gepflegt. Beim install oder update werden die Werte in die DB geschrieben
$rows[] = array('http://www.weg.de', '.weg.de', 'Weg.de', 'Reise', 'awin', 'http://www.zanox.com/de/');
$rows[] = array('http://www.expedia.de/', '.expedia.', 'Expedia.de', 'Reise', 'zanox, awin', 'http://www.zanox.com/de/');
$rows[] = array('http://www.ab-in-den-urlaub.de/', '.ab-in-den-urlaub.de', 'Ab-in-den-Urlaub.de', 'Reise', 'zanox', 'http://www.zanox-affiliate.de/ppc/?28216342C438668017T&ULP=[[9333]]');
$rows[] = array('http://www.lastminute.de/', '.lastminute.de', 'lastminute.de', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=4659');
$rows[] = array('http://www.amazon.de/', '.amazon.', 'Amazon', 'Allgemein', 'amazon', 'https://partnernet.amazon.de/gp/associates/join/landing/main.html');
$rows[] = array('http://www.lidl.de/', '.lidl.de', 'Lidl', 'Allgemein', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=5050');
$rows[] = array('http://www.lidl-reisen.de/', '.lidl-reisen.de', 'Lidl Reisen', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=5050');
$rows[] = array('http://www.ab-in-den-urlaub-deals.de/', '.ab-in-den-urlaub-deals.de', 'Ab-in-den-Urlaub-Deals', 'Reise', 'zanox', 'http://www.zanox-affiliate.de/ppc/?28216342C438668017T&ULP=[[10413]]');
$rows[] = array('http://www.hrs.de/', '.hrs.', 'HRS', 'Reise', 'tradedoubler', 'http://login.tradedoubler.com/pan/aProgramInfoApplyRead.action?programId=233752');
$rows[] = array('http://www.hrs-deals.de/', '.hrs-deals.', 'HRS Deals', 'Reise', 'tradedoubler', 'http://login.tradedoubler.com/pan/aProgramInfoApplyRead.action?programId=233752');
$rows[] = array('http://www.hlx.com/', '.hlx.com', 'HLX', 'Reise', 'tradedoubler', 'http://login.tradedoubler.com/pan/aProgramInfoLinksRead.action?programId=245150');
$rows[] = array('http://www.tropo.de/', '.tropo.de', 'Tropo', 'Reise', 'tradedoubler', 'http://login.tradedoubler.com/pan/aProgramInfoApplyRead.action?programId=256266');
$rows[] = array('http://www.tui.com/', '.tui.com', 'Tui', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=9881');
$rows[] = array('http://www.mydays.de', 'mydays.de', 'mydays', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=3073');
$rows[] = array('http://www.holidaycheck.de', '.holidaycheck.de', 'HolidayCheck', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=7412');
$rows[] = array('http://www.ebookers.de', '.ebookers.de', 'ebookers.de', 'Reise', 'zanox', 'http://www.zanox.com/de/');
$rows[] = array('http://www.5vorflug.de', '.5vorflug.de', '5vorFlug', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=9841');
$rows[] = array('http://www.hotels.com', '.hotels.com', 'Hotels.com', 'Reise', 'zanox', 'http://www.zanox.com/de/');
$rows[] = array('http://www.sonnenklar.tv', '.sonnenklar.tv', 'Sonnenklar.TV', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=3719');
$rows[] = array('http://www.aida.de', 'aida.de', 'AIDA', 'Reise', 'zanox, awin', 'http://www.zanox.com/de/');
$rows[] = array('http://www.zalando.de/', '.zalando.de', 'Zalando', 'Fashion', 'affilinet', 'http://publisher.affili.net/Creatives/showCreatives.aspx?pid=5643');
$rows[] = array('https://www.digistore24.com/', '.digistore24.', 'Digistore24', 'Marktplatz', 'digistore24', 'https://www.digistore24.com/');
$rows[] = array('https://www.dkb.de', '.dkb.de', 'DKB.de', 'Finanzen', 'zanox', 'http://www.zanox.com/de/');
$rows[] = array('http://www.jochen-schweizer.de', '.jochen-schweizer.', 'Jochen Schweizer', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=3511');
$rows[] = array('http://www.thalia.de/', '.thalia.', 'Thalia', 'Buecher', 'affilinet, zanox', 'http://www.zanox.com/de/');
$rows[] = array('http://www.travador.com', '.travador.com', 'Travador.com', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=12456');
$rows[] = array('http://www.conrad.de', '.conrad.de', 'Conrad Electronic', 'Elektronik', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=2945');
$rows[] = array('http://www.saturn.de', '.saturn.de', 'Saturn', 'Elektronik', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=9853');
$rows[] = array('http://meinfernbus.de', 'meinfernbus.de', 'MeinFernbus', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=11694');
$rows[] = array('http://www.skyscanner.de/', '.skyscanner.', 'Skyscanner', 'Reise', 'tradedoubler', 'http://login.tradedoubler.com/pan/aProgramInfoApplyRead.action?programId=224467');
$rows[] = array('http://www.fluege.de', '.fluege.de', 'Fluege.de', 'Reise', 'zanox', 'http://www.zanox.com/de/');
$rows[] = array('http://www.hotel.de', '.hotel.de', 'Hotel.de', 'Reise', 'zanox', 'http://www.zanox.com/de/');
$rows[] = array('http://www.wefashion.de', '.wefashion.de', 'WE Fashion', 'Fashion', 'zanox', 'http://www.zanox.com/de/');
$rows[] = array('http://www.topdeals.de/', '.topdeals.de', 'topdeals.de', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=8950');
$rows[] = array('http://www.buecher.de/', '.buecher.de', 'buecher.de', 'Buecher', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=3780');
$rows[] = array('http://www.elv.de/', '.elv.de', 'ELV.de', 'Elektronik', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=4605');
$rows[] = array('http://www.ebay.de/', 'ebay.', 'eBay', 'Allgemein', 'eBayPartnerNet', 'https://www.ebaypartnernetwork.ebay.com/');
$rows[] = array('http://travelbird.de', 'travelbird.', 'TravelBird.de', 'Reise', 'affilinet, zanox', 'http://www.zanox.com/de/');
$rows[] = array('http://www.reiseschein.de', '.reiseschein.', 'Reiseschein.de', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=12500');
$rows[] = array('http://www.bahn.de', '.bahn.', 'Bahn / Deutsche Bahn', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=2894');
$rows[] = array('http://www.travelcircus.de', '.travelcircus.', 'travelcircus', 'Reise', 'zanox, awin', 'https://marketplace.zanox.com/zanox/affiliate/1527348/1801795/merchant-profile/18384');
$rows[] = array('https://www.cyberport.de', '.cyberport.de', 'Cyberport.de', 'Elektronik', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=3908');
$rows[] = array('http://www.rueducommerce.fr', '.rueducommerce.fr', 'Rue du commerce', 'Elektronik', 'zanox', 'http://www.zanox.com/de/');
$rows[] = array('http://de.dawanda.com/', '.dawanda.', 'DaWanda', 'Marktplatz', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=5571');
$rows[] = array('https://www.etsy.com/de/', '.etsy.', 'Etsy', 'Allgemein', 'zanox', 'http://www.zanox.com/de/');
$rows[] = array('http://www.aboutyou.de/', '.aboutyou.', 'AboutYou', 'Fashion', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=13142');
$rows[] = array('https://www.galeria-kaufhof.de/', '.galeria-kaufhof.', 'Galeria-Kaufhof', 'Allgemein', 'affilinet', 'http://publisher.affili.net/Programs/ProgramInfo.aspx?pid=8040');
$rows[] = array('http://www.mytoys.de/', '.mytoys.de', 'MyToys.de', 'Kinder', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=2150');
$rows[] = array('http://www.toysrus.de/', '.toysrus.de', 'ToysRus.de', 'Kinder', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=7997');
$rows[] = array('http://www.voelkner.de/', '.voelkner.de', 'Voelkner.de', 'Elektronik', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=8928');
$rows[] = array('http://www.lego.com/de-de', '.lego.com/de-de', 'LEGO Shop', 'Kinder', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=12507');
$rows[] = array('http://www.spielemax.de/', '.spielemax.de', 'SpieleMax.de', 'Kinder', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=13665');
$rows[] = array('https://www.qipu.de/', '.qipu.de', 'Qipu.de', 'Cashback', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=13980');
$rows[] = array('http://www.babymarkt.de/', '.babymarkt.de', 'Babymarkt.de', 'Kinder', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=8689');
$rows[] = array('http://www.buttinette.com/', '.buttinette.com', 'Buttinette.com', 'Allgemein', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=3798');
$rows[] = array('http://www.stoffe-hemmers.de/', '.stoffe-hemmers.de', 'stoffe-hemmers.de', 'Allgemein', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=13766');
$rows[] = array('http://www.stoffe.de/', '.stoffe.de', 'stoffe.de', 'Allgemein', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=12547');
$rows[] = array('https://www.baur.de/', '.baur.de', 'Baur.de', 'Allgemein', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=2897');
$rows[] = array('http://www.bol.de/', '.bol.de', 'bol.de', 'Buecher', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=8753');
$rows[] = array('http://www.buch.de/', '.buch.de', 'buch.de', 'Buecher', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=6036');
$rows[] = array('http://www.hugendubel.de/', '.hugendubel.de', 'Hugendubel.de', 'Buecher', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=13245');
$rows[] = array('http://www.e-hoi.de/', '.e-hoi.de', 'e-hoi', 'Reise', 'zanox, awin', 'http://www.zanox.com/de/');
$rows[] = array('https://tuicruises.com/', 'tuicruises.com', 'TUI Cruises', 'Reise', 'zanox, awin', 'http://www.zanox.com/de/');
$rows[] = array('https://www.costakreuzfahrten.de', '.costakreuzfahrten.de', 'Costa Kreuzfahrten', 'Reise', 'zanox, awin', 'http://www.zanox.com/de/');
$rows[] = array('https://www.dreamlines.de/', '.dreamlines.de', 'Dreamlines.de', 'Reise', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=14435');
$rows[] = array('http://www.digitalo.de/', '.digitalo.de', 'digitalo.de', 'Elektronik', 'affilinet', 'http://publisher.affili.net/Programs/programInfo.aspx?pid=8931');
$rows[] = array('https://www.seetours.de/', '.seetours.de', 'Seetours.de', 'Reise', 'zanox, awin', 'http://www.zanox.com/de/');
$rows[] = array('https://www.berge-meer.de/', '.berge-meer.de', 'berge-meer.de', 'Reise', 'zanox, awin', 'http://www.zanox.com/de/');
$rows[] = array('https://www.a-rosa.de/', '.a-rosa.de', 'A-ROSA Flusskreuzfahrten', 'Reise', 'zanox, awin', 'http://www.zanox.com/de/');
$rows[] = array('https://www.msc-kreuzfahrten.de', '.msc-kreuzfahrten.de', 'MSC Kreuzfahrten', 'Reise', 'zanox', 'http://www.zanox.com/de/');
$rows[] = array('https://www.stenaline.de/', '.stenaline.de', 'StenaLine', 'Reise', 'awin', 'http://www.zanox.com/de/');

// Fürs Testing:
//$rows[] = array('http://www.whatismyreferer.com', '.whatismyreferer.com', 'Whtaismyreferer', 'Test', '', '');

// Array-Zeilen einzeln durchgehen
foreach ($rows as $row) {
    $url = $row[0];
    $url_match = $row[1];
    $ap_name = $row[2];
    $ap_cat = $row[3];
    $netzwerke = $row[4];
    $nw_link = $row[5];
    
// Jede Zeile einzeln in die DB schreiben. Falls eine URL schon vorhanden ist, wird nur nw_ids und nw_link ersetzt
		$q = "INSERT INTO {$wpdb->prefix}wp2ap_aff_links(url, url_match, ap_name, ap_cat, netzwerke, nw_link) VALUES('$url', '$url_match', '$ap_name', '$ap_cat', '$netzwerke', '$nw_link')
			  ON DUPLICATE KEY UPDATE netzwerke = '$netzwerke', ap_name ='$ap_name', ap_cat ='$ap_cat', nw_link = '$nw_link'";
		$q = $wpdb->prepare( $q, $id, current_time('mysql') );
    dbDelta( $q );

};

// Aida-Spielkram, weil wir ausnahmsweise den KEY ändern müssen 
		$q = "UPDATE {$wpdb->prefix}wp2ap_aff_links
			  SET url_match = 'aida.de'
        WHERE url_match = '.aida.de'";
		$q = $wpdb->prepare( $q, $id, current_time('mysql') );
    dbDelta( $q );

// Jetzt noch einträge entfernen, die nicht mehr gültig sind (z. B. PP wurde eingestellt oder Eintrag war falsch). Es muss nur die URL stimmen, URL_match ist hier eigentlich unnötig.

$deleterows[] = array('http://www.lidl.de', 'xx');

foreach ($deleterows as $row) {
    $url = $row[0];
    $url_match = $row[1];
    
// Jede Zeile einzeln aus der DB löschen.
		$q = "DELETE FROM {$wpdb->prefix}wp2ap_aff_links
			  WHERE url = '$url'";
		$q = $wpdb->prepare( $q, $id, current_time('mysql') );
    $wpdb->query( $q );

};

?>