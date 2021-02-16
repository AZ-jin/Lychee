<?php

namespace App\Locale;

use App\Contracts\Language;

final class Czech implements Language
{
	public function code(): string
	{
		return 'cz';
	}

	public function get_locale(): array
	{
		$locale = [
			'USERNAME' => 'Uživatelské jméno',
			'PASSWORD' => 'Heslo',
			'ENTER' => 'Vložit',
			'CANCEL' => 'Storno',
			'SIGN_IN' => 'Příhlásit se',
			'CLOSE' => 'Zavřít',
			'SETTINGS' => 'Nastavení',
			'SEARCH' => 'Hledat ...',
			'MORE' => 'Rozšířená nastavení',
			'DEFAULT' => 'Default',

			'USERS' => 'Uživatelé',
			'U2F' => 'U2F',
			'SHARING' => 'Sdílení',
			'CHANGE_LOGIN' => 'Změnit přihlášení',
			'CHANGE_SORTING' => 'Změnt řazení',
			'SET_DROPBOX' => 'Nastavit Dropbox',
			'ABOUT_LYCHEE' => 'O Lychee',
			'DIAGNOSTICS' => 'Diagnostika',
			'DIAGNOSTICS_GET_SIZE' => 'Request space usage',
			'LOGS' => 'Protokoly',
			'SIGN_OUT' => 'Odhlásit se',
			'UPDATE_AVAILABLE' => 'Update je k dispozici!',
			'MIGRATION_AVAILABLE' => 'Migration available!',
			'DEFAULT_LICENSE' => 'Výchozí licence pro nové uploady:',
			'SET_LICENSE' => 'Nastavit licenci',
			'SET_OVERLAY_TYPE' => 'Nastavit překrytí',
			'SET_MAP_PROVIDER' => 'Nastavit providera OpenStreetMap',
			'SAVE_RISK' => 'Uložit změny, rizika jsou mi známa!',

			'SMART_ALBUMS' => 'Chytrá alba',
			'SHARED_ALBUMS' => 'Sdílená alba',
			'ALBUMS' => 'Alba',
			'PHOTOS' => 'Obrázky',
			'SEARCH_RESULTS' => 'Výsledky hledání',

			'RENAME' => 'Přejmenovat',
			'RENAME_ALL' => 'Přejmenovat vybrané',
			'MERGE' => 'Sloučit',
			'MERGE_ALL' => 'Sloučit vybrané',
			'MAKE_PUBLIC' => 'Zveřejnit',
			'SHARE_ALBUM' => 'Sdílet album',
			'SHARE_PHOTO' => 'Sdílet fotografii',
			'VISIBILITY_ALBUM' => 'Viditelnost alba',
			'VISIBILITY_PHOTO' => 'Viditelnost fotografie',
			'DOWNLOAD_ALBUM' => 'Stáhnout album',
			'ABOUT_ALBUM' => 'O albu',
			'DELETE_ALBUM' => 'Smazat album',
			'MOVE_ALBUM' => 'Přesunout album',
			'FULLSCREEN_ENTER' => 'Spustit režim celé obrazovky',
			'FULLSCREEN_EXIT' => 'Ukončit režim celé obrazovky',

			'SHARING_ALBUM_USERS' => 'Share this album with users',
			'WAIT_FETCH_DATA' => 'Please wait while we get the data...',
			'SHARING_ALBUM_USERS_NO_USERS' => 'There are no users to share the album with',
			'SHARING_ALBUM_USERS_LONG_MESSAGE' => 'Select the users to share this album with',

			'DELETE_ALBUM_QUESTION' => 'Mazání alba a fotografie',
			'KEEP_ALBUM' => 'Ponechat album',
			'DELETE_ALBUM_CONFIRMATION_1' => 'Opravdu smazat album',
			'DELETE_ALBUM_CONFIRMATION_2' => 'a všechny fotografie, které obsahuje? Tento krok je nevratný!',

			'DELETE_ALBUMS_QUESTION' => 'Mazání alb a fotografií',
			'KEEP_ALBUMS' => 'Ponechat alba',
			'DELETE_ALBUMS_CONFIRMATION_1' => 'Opravdu smazat všechna vybraná',
			'DELETE_ALBUMS_CONFIRMATION_2' => 'alba a fotografie, které obsahují? Tento krok je nevratný!',

			'DELETE_UNSORTED_CONFIRM' => 'Opravdu odstranit všechny \'Nesetříděné\' fotografie?<br> Tento krok je nevratný!',
			'CLEAR_UNSORTED' => 'Odstranit Nesetříděné',
			'KEEP_UNSORTED' => 'Ponechat Nesetříděné',

			'EDIT_SHARING' => 'Upravit sdílení',
			'MAKE_PRIVATE' => 'Nastavit jako privátní',

			'CLOSE_ALBUM' => 'Zavřít album',
			'CLOSE_PHOTO' => 'Zavřít fotografii',
			'CLOSE_MAP' => 'Zavřít mapu',

			'ADD' => 'Přidat',
			'MOVE' => 'Přesunout',
			'MOVE_ALL' => 'Přesunout vybrané',
			'DUPLICATE' => 'Duplikovat',
			'DUPLICATE_ALL' => 'Duplikovat vybrané',
			'COPY_TO' => 'Kopírovat do...',
			'COPY_ALL_TO' => 'Kopírovat vybrané do...',
			'DELETE' => 'Odstranit',
			'DELETE_ALL' => 'Odstranit vybrané',
			'DOWNLOAD' => 'Stáhnout',
			'DOWNLOAD_ALL' => 'Stánout vybrané',
			'UPLOAD_PHOTO' => 'Odeslat fotografii',
			'IMPORT_LINK' => 'Importovat z odkazu',
			'IMPORT_DROPBOX' => 'Importovat z Dropboxu',
			'IMPORT_SERVER' => 'Importovat ze serveru',
			'NEW_ALBUM' => 'Nové album',
			'NEW_TAG_ALBUM' => 'Nové tag album',

			'TITLE_NEW_ALBUM' => 'Zadejte název nového alba:',
			'UNTITLED' => 'Bezejmanné',
			'UNSORTED' => 'Nesetříděné',
			'STARRED' => 'Oblíbené',
			'RECENT' => 'Poslední',
			'PUBLIC' => 'Veřejné',
			'NUM_PHOTOS' => 'fotografií',

			'CREATE_ALBUM' => 'Vytvořit album',
			'CREATE_TAG_ALBUM' => 'Vytvořit Tag album',

			'STAR_PHOTO' => 'Označit jako oblíbené',
			'STAR' => 'Označit jako oblíbené',
			'STAR_ALL' => 'Vše označit jako oblíbené',
			'TAGS' => 'Štítek',
			'TAGS_ALL' => 'Oštítkovat vše',
			'UNSTAR_PHOTO' => 'Odebrat z oblíbených',
			'SET_COVER' => 'Set Album Cover',
			'REMOVE_COVER' => 'Remove Album Cover',

			'FULL_PHOTO' => 'Otevřít originál',
			'ABOUT_PHOTO' => 'O fotografii',
			'DISPLAY_FULL_MAP' => 'Mapa',
			'DIRECT_LINK' => 'Přímý odkaz',
			'DIRECT_LINKS' => 'Přímé odkazy',

			'ALBUM_ABOUT' => 'O albu',
			'ALBUM_BASICS' => 'Základní informace',
			'ALBUM_TITLE' => 'Název',
			'ALBUM_NEW_TITLE' => 'Zadat nový název alba:',
			'ALBUMS_NEW_TITLE_1' => 'Zadat nový název pro',
			'ALBUMS_NEW_TITLE_2' => 'vybraná alba:',
			'ALBUM_SET_TITLE' => 'Uložit název',
			'ALBUM_DESCRIPTION' => 'Popis',
			'ALBUM_SHOW_TAGS' => 'Zobrazené tagy',
			'ALBUM_NEW_DESCRIPTION' => 'Zadat nový popis pro album:',
			'ALBUM_SET_DESCRIPTION' => 'Uložit popis',
			'ALBUM_NEW_SHOWTAGS' => 'Zadejte tagy fotografií, které budou viditelné v albu:',
			'ALBUM_SET_SHOWTAGS' => 'Tagy k zobrazení',
			'ALBUM_ALBUM' => 'Album',
			'ALBUM_CREATED' => 'Vytvořeno',
			'ALBUM_IMAGES' => 'Obrázky',
			'ALBUM_VIDEOS' => 'Videa',
			'ALBUM_SUBALBUMS' => 'Subalba',
			'ALBUM_SHARING' => 'Sdílení',
			'ALBUM_SHR_YES' => 'Ano',
			'ALBUM_SHR_NO' => 'Ne',
			'ALBUM_PUBLIC' => 'Veřejné',
			'ALBUM_PUBLIC_EXPL' => 'Album může být zobrazeno ostatním s následujícím omezením:',
			'ALBUM_FULL' => 'Originál',
			'ALBUM_FULL_EXPL' => 'Plné rozlišení k dispozici.',
			'ALBUM_HIDDEN' => 'Skryté',
			'ALBUM_HIDDEN_EXPL' => 'Pouze pro návštěvníky s přímým odkazem alba.',
			'ALBUM_MARK_NSFW' => 'Mark album as sensitive',
			'ALBUM_UNMARK_NSFW' => 'Unmark album as sensitive',
			'ALBUM_NSFW' => 'Sensitive',
			'ALBUM_NSFW_EXPL' => 'Album is marked to contain sensitive content.',
			'ALBUM_DOWNLOADABLE' => 'Stažitelné',
			'ALBUM_DOWNLOADABLE_EXPL' => 'Album mouhou stáhnout pouze jeho návštěvníci.',
			'ALBUM_SHARE_BUTTON_VISIBLE' => 'Tlačítko sdílet je viditelné',
			'ALBUM_SHARE_BUTTON_VISIBLE_EXPL' => 'Zobrazit odkazy pro sdílení na socíálních sítích.',
			'ALBUM_PASSWORD' => 'Heslo',
			'ALBUM_PASSWORD_PROT' => 'Chráněné heslem',
			'ALBUM_PASSWORD_PROT_EXPL' => 'Přístup do alba pouze s platným heslem.',
			'ALBUM_PASSWORD_REQUIRED' => 'Toto album je chráněno heslem. K jeho zobrazení zadejte prosím platné heslo:',
			'ALBUM_MERGE_1' => 'Sloučení vybraných alb',
			'ALBUM_MERGE_2' => 'do jednoho alba',
			'ALBUMS_MERGE' => 'Sloučit',
			'MERGE_ALBUM' => 'Sloučit alba',
			'DONT_MERGE' => 'Neslučovat',
			'ALBUM_MOVE_1' => 'Opravdu přesunout album',
			'ALBUM_MOVE_2' => 'do alba',
			'ALBUMS_MOVE' => 'Opravdu přesunout vybraná alba do alba',
			'MOVE_ALBUMS' => 'Přesunout album',
			'NOT_MOVE_ALBUMS' => 'Nepřesouvat',
			'ROOT' => 'Alba',
			'ALBUM_REUSE' => 'Použití',
			'ALBUM_LICENSE' => 'Licence',
			'ALBUM_SET_LICENSE' => 'Nastavit licenci',
			'ALBUM_LICENSE_HELP' => 'Potřebujete pomoci s výběrem?',
			'ALBUM_LICENSE_NONE' => 'Žádná',
			'ALBUM_RESERVED' => 'Všechna práva vyhrazena',
			'ALBUM_SET_ORDER' => 'Set Order',
			'ALBUM_ORDERING' => 'Order by',

			'PHOTO_ABOUT' => 'O fotografii',
			'PHOTO_BASICS' => 'Základní informace',
			'PHOTO_TITLE' => 'Název',
			'PHOTO_NEW_TITLE' => 'Zadat nový název fotografie:',
			'PHOTO_SET_TITLE' => 'Uložit název',
			'PHOTO_UPLOADED' => 'Odesláno',
			'PHOTO_DESCRIPTION' => 'Popis',
			'PHOTO_NEW_DESCRIPTION' => 'Zadejte nový název pro tuto fotografii:',
			'PHOTO_SET_DESCRIPTION' => 'Uložit popis',
			'PHOTO_NEW_LICENSE' => 'Přidat licenci',
			'PHOTO_SET_LICENSE' => 'Uložit licenci',
			'PHOTO_LICENSE' => 'Licence',
			'PHOTO_REUSE' => 'Opakované použití',
			'PHOTO_LICENSE_NONE' => 'Žádná',
			'PHOTO_RESERVED' => 'Všechna práva vyhrazena',
			'PHOTO_LATITUDE' => 'Zeměpisná šířka',
			'PHOTO_LONGITUDE' => 'Zeměpisná délka',
			'PHOTO_ALTITUDE' => 'Nadmořská výška',
			'PHOTO_IMGDIRECTION' => 'Směr',
			'PHOTO_LOCATION' => 'Location',
			'PHOTO_IMAGE' => 'Fotografie',
			'PHOTO_VIDEO' => 'Video',
			'PHOTO_SIZE' => 'Velikost',
			'PHOTO_FORMAT' => 'Formát',
			'PHOTO_RESOLUTION' => 'Rozlišení',
			'PHOTO_DURATION' => 'Trvání',
			'PHOTO_FPS' => 'Frekvence snímků',
			'PHOTO_TAGS' => 'Štítky',
			'PHOTO_NOTAGS' => 'Bez štítků',
			'PHOTO_NEW_TAGS' => 'Zadejte štítky pro tento obrázek. Jednotlivé štítky oddělte čárkou:',
			'PHOTO_NEW_TAGS_1' => 'Zadejte štítky pro všechny',
			'PHOTO_NEW_TAGS_2' => 'vybrané fotografie. Stávající štítky budou přepsány. Jednotlivé štítky oddělte čárkou:',
			'PHOTO_SET_TAGS' => 'Uložit štítky',
			'PHOTO_CAMERA' => 'Fotoaparát',
			'PHOTO_CAPTURED' => 'Pořízeno',
			'PHOTO_MAKE' => 'Značka',
			'PHOTO_TYPE' => 'Typ/model',
			'PHOTO_LENS' => 'Objektiv',
			'PHOTO_SHUTTER' => 'Uzávěrka',
			'PHOTO_APERTURE' => 'Clona',
			'PHOTO_FOCAL' => 'Fokus',
			'PHOTO_ISO' => 'ISO',
			'PHOTO_SHARING' => 'Sdílet',
			'PHOTO_SHR_PLUBLIC' => 'Veřejné',
			'PHOTO_SHR_ALB' => 'Ano (Album)',
			'PHOTO_SHR_PHT' => 'Ano (Foto)',
			'PHOTO_SHR_NO' => 'Ne',
			'PHOTO_DELETE' => 'Odstranit fotografii',
			'PHOTO_KEEP' => 'Ponechat fotografii',
			'PHOTO_DELETE_1' => 'Opravdu odstranit fotografii',
			'PHOTO_DELETE_2' => '? Tento krok je nevratný!',
			'PHOTO_DELETE_ALL_1' => 'Opravdu odstranit všechny',
			'PHOTO_DELETE_ALL_2' => 'vybrané fotografie? Tento krok je nevratný!',
			'PHOTOS_NEW_TITLE_1' => 'Zadejte nový název pro všechny',
			'PHOTOS_NEW_TITLE_2' => 'vybrané fotografie:',
			'PHOTO_MAKE_PRIVATE_ALBUM' => 'Tato fotografie je umístěna ve veřejném albu. Fotografii jako veřejnou nebo soukromou musíte nastavit v albu, v nemž je umístěna.',
			'PHOTO_SHOW_ALBUM' => 'Zobrazit album',
			'PHOTO_PUBLIC' => 'Veřejné',
			'PHOTO_PUBLIC_EXPL' => 'Fotografie může být zobrazena ostatním s následujícím omezením.',
			'PHOTO_FULL' => 'Originál',
			'PHOTO_FULL_EXPL' => 'Plné rozlišení k dispozici.',
			'PHOTO_HIDDEN' => 'Skrytá',
			'PHOTO_HIDDEN_EXPL' => 'Fotografii mohou zobrazit jen návštěvnící z přímého odkazu.',
			'PHOTO_DOWNLOADABLE' => 'Stažitelná',
			'PHOTO_DOWNLOADABLE_EXPL' => 'Fotografii mohou stáhnout pouze návštěvnící alba.',
			'PHOTO_SHARE_BUTTON_VISIBLE' => 'Share button is visible',
			'PHOTO_SHARE_BUTTON_VISIBLE_EXPL' => 'Display social media sharing links.',
			'PHOTO_PASSWORD_PROT' => 'Zabezpečená heslem',
			'PHOTO_PASSWORD_PROT_EXPL' => 'Přístup k fotografii pouze s platným heslem.',
			'PHOTO_EDIT_SHARING_TEXT' => 'Vlastnosti sdílení fotografie budou změněny takto:',
			'PHOTO_NO_EDIT_SHARING_TEXT' => 'Protože je tato fotografie umístěna ve veřejném albu, zdědí i nastavení tohoto veřejného alba. Aktuální stav viditelnosti je uveden pouze pro informaci.',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => 'Viditelnost této fotografie lze doladit pomocí globálních nastavení. Aktuální stav viditelnosti je uveden pouze pro informaci.',
			'PHOTO_SHARING_CONFIRM' => 'Uložit',

			'LOADING' => 'Probíhá příprava',
			'ERROR' => 'Chyba',
			'ERROR_TEXT' => 'Něco není v pořádku. Obnovte stránku a postup zopakujte!',
			'ERROR_DB_1' => 'Nelze se připojit k databázi, přístup byl odmítnut. Zkontrolujte hostitele, uživatelské jméno a heslo a ověřte si, že máte povolen přístup k databázi ze současné lokality.',
			'ERROR_DB_2' => 'Nelze vytvořit databázi. Zkontrolujte hostitele, uživatelské jméno a heslo a ověřte si, že máte práva ke zápisu/změnám obsahu databáze.',
			'ERROR_CONFIG_FILE' => "Konfiguraci nelze uložit. Přístup odmítnut v <b>'data/'</b>. Nastavte správně RWE práva pro ostatní v <b>'data/'</b> a <b>'uploads/'</b>. Další informace jsou k dispozici v souboru README.",
			'ERROR_UNKNOWN' => 'Neočekávaná chyba. Postup prosím opakujte a ujistěte se o správnosti instalace na serveru. Další informace jsou k dispozici v souboru README.',
			'ERROR_LOGIN' => 'Nelze uložit přihlašovací informace. Opakujte prosím postup s jiným uřivatelským jménem a heslem!',
			'ERROR_MAP_DEACTIVATED' => 'Funkce Mapy byla v nastavení deaktivována.',
			'ERROR_SEARCH_DEACTIVATED' => 'Funkce hledání byla v nastavení deaktivována.',
			'SUCCESS' => 'OK',
			'RETRY' => 'Opakovat',

			'SETTINGS_WARNING' => 'Změna rozšířených nastavení může mít negativní vliv na stabilitu, bezpečnost a rychlost Lychee. Měňte pouze to, co opravdu dobře chápete.',
			'SETTINGS_SUCCESS_LOGIN' => 'Přihlašovací údaje byly aktualizovány.',
			'SETTINGS_SUCCESS_SORT' => 'Stav řazení byl aktulizován.',
			'SETTINGS_SUCCESS_DROPBOX' => 'Dropbox Key byl aktualizován.',
			'SETTINGS_SUCCESS_LANG' => 'Jazyk byl aktualizován',
			'SETTINGS_SUCCESS_LAYOUT' => 'Vzhled byl aktualizován',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'EXIF překryv byl aktulizován',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => 'Veřejné vyhledávání bylo aktulizováno',
			'SETTINGS_SUCCESS_LICENSE' => 'Výchozí licence byla aktualizována',
			'SETTINGS_SUCCESS_CSS' => 'CSS aktualizováno',
			'SETTINGS_SUCCESS_UPDATE' => 'Nastavení úspešně aktualizováno',
			'SETTINGS_SUCCESS_MAP_DISPLAY' => 'Nastavení zobrazeni Map bylo aktualizováno',
			'SETTINGS_SUCCESS_MAP_DISPLAY_PUBLIC' => 'Nastavení zobrazeni Map pro veřejná alba bylo aktualizováno',
			'SETTINGS_SUCCESS_MAP_PROVIDER' => 'Poskytovatel Map byl aktualizován',

			'U2F_NOT_SUPPORTED' => 'U2F not supported. Sorry.',
			'U2F_NOT_SECURE' => 'Environment not secured. U2F not available.',
			'U2F_REGISTER_KEY' => 'Register new device.',
			'U2F_REGISTRATION_SUCCESS' => 'Registration successful!',
			'U2F_AUTHENTIFICATION_SUCCESS' => 'Authentication successful!',
			'U2F_CREDENTIALS' => 'Credentials',
			'U2F_CREDENTIALS_DELETED' => 'Credentials deleted!',

			'DB_INFO_TITLE' => 'Níže zadejte parametry připojení k databázi:',
			'DB_INFO_HOST' => 'Hostitel (volitelný)',
			'DB_INFO_USER' => 'Jméno uživatele databáze',
			'DB_INFO_PASSWORD' => 'Heslo uživatele databáze',
			'DB_INFO_TEXT' => 'Lychee vytvoří svou vlastní databázi. Pokud již databáze existuje, zadejte její název:',
			'DB_NAME' => 'Název databáze (volitelné)',
			'DB_PREFIX' => 'Prefix tabulek (volitelné)',
			'DB_CONNECT' => 'Připojit',

			'LOGIN_TITLE' => 'Zadejte jméno uživatele a heslo pro svoji instalaci:',
			'LOGIN_USERNAME' => 'Jméno uživatele',
			'LOGIN_PASSWORD' => 'Heslo',
			'LOGIN_PASSWORD_CONFIRM' => 'Zopakujte heslo',
			'LOGIN_CREATE' => 'Vytvořit uživatele',

			'PASSWORD_TITLE' => 'Zadejte aktuální heslo:',
			'USERNAME_CURRENT' => 'Aktuální uživatelské jméno',
			'PASSWORD_CURRENT' => 'Aktuální heslo',
			'PASSWORD_TEXT' => 'Vaše uživatelské jméno a heslo budou změněny následovně:',
			'PASSWORD_CHANGE' => 'Změnit přihlášení',

			'EDIT_SHARING_TITLE' => 'Editace sdílení',
			'EDIT_SHARING_TEXT' => 'Vlastnosti sdílení tohoto alba budou změněny následovně:',
			'SHARE_ALBUM_TEXT' => 'Album bude sdíleno s následujícími parametry:',
			'ALBUM_SHARING_CONFIRM' => 'Uložit',

			'SORT_ALBUM_BY_1' => 'Řadit alba podle',
			'SORT_ALBUM_BY_2' => 've',
			'SORT_ALBUM_BY_3' => 'pořadí.',

			'SORT_ALBUM_SELECT_1' => 'Data vytvoření',
			'SORT_ALBUM_SELECT_2' => 'Názvu',
			'SORT_ALBUM_SELECT_3' => 'Popisu',
			'SORT_ALBUM_SELECT_4' => 'Stavu zveřejnění',
			'SORT_ALBUM_SELECT_5' => 'Nejmladšího data snímku',
			'SORT_ALBUM_SELECT_6' => 'Nejstaršího data snímku',

			'SORT_PHOTO_BY_1' => 'Řadit alba podle',
			'SORT_PHOTO_BY_2' => 've',
			'SORT_PHOTO_BY_3' => 'pořadí.',

			'SORT_PHOTO_SELECT_1' => 'Data uložení',
			'SORT_PHOTO_SELECT_2' => 'Data záznamu',
			'SORT_PHOTO_SELECT_3' => 'Názvu',
			'SORT_PHOTO_SELECT_4' => 'Popisu',
			'SORT_PHOTO_SELECT_5' => 'Stavu zveřejnění',
			'SORT_PHOTO_SELECT_6' => 'Oblíbenosti',
			'SORT_PHOTO_SELECT_7' => 'Formátu',

			'SORT_ASCENDING' => 'Vzestupném',
			'SORT_DESCENDING' => 'Sestupném',
			'SORT_CHANGE' => 'Změnit řazení',

			'DROPBOX_TITLE' => 'Dropbox - nastavení',
			'DROPBOX_TEXT' => "Pro uspěšný import fotografií z Dropboxu je řeba platný API klíč, který lze získat na stránkách <a href='https://www.dropbox.com/developers/apps/create'>Dropboxu</a>. Vygenerovaný osobní klíč zadejte níže:",

			'LANG_TEXT' => 'Změnit jazyk Lychee na:',
			'LANG_TITLE' => 'Změnit jazyk',

			'CSS_TEXT' => 'Vlastní CSS:',
			'CSS_TITLE' => 'Změnit CSS',
			'PUBLIC_SEARCH_TEXT' => 'Veřejné vyhledávání povoleno:',
			'IMAGE_OVERLAY_TEXT' => 'Výchozí nastavení překryvného textu:',
			'OVERLAY_TYPE' => 'Data, která budou použita na překryvu:',
			'OVERLAY_EXIF' => 'EXIF data',
			'OVERLAY_DESCRIPTION' => 'Popis',
			'OVERLAY_DATE' => 'Datum pořízení',
			'MAP_DISPLAY_TEXT' => 'Povolit Mapy (poskytovatel OpenStreetMap):',
			'MAP_DISPLAY_PUBLIC_TEXT' => 'Povolit mapy pro veřejná alba (poskytovatel OpenStreetMap):',
			'MAP_PROVIDER' => 'Poskytovatel OpenStreetMap názvů:',
			'MAP_PROVIDER_WIKIMEDIA' => 'Wikimedia',
			'MAP_PROVIDER_OSM_ORG' => 'OpenStreetMap.org (bez HiDPI)',
			'MAP_PROVIDER_OSM_DE' => 'OpenStreetMap.de (bez HiDPI)',
			'MAP_PROVIDER_OSM_FR' => 'OpenStreetMap.fr (bez HiDPI)',
			'MAP_PROVIDER_RRZE' => 'Universita v Erlangenu, Německo (pouze HiDPI)',
			'MAP_INCLUDE_SUBALBUMS_TEXT' => 'Včetně fotografií v subalbech:',
			'LOCATION_DECODING' => 'Přeložít GPS data na název místa',
			'LOCATION_SHOW' => 'Zobrazit název místa',
			'LOCATION_SHOW_PUBLIC' => 'Zobrazit název místa v public módu',
			'LAYOUT_TYPE' => 'Vzhled fotografií:',
			'LAYOUT_SQUARES' => 'Čtvercové náhledy',
			'LAYOUT_JUSTIFIED' => 'V poměru stran, zarovnáno',
			'LAYOUT_UNJUSTIFIED' => 'V poměru stran, nezarovnáno',
			'SET_LAYOUT' => 'Změnit vzhled',

			'NSFW_VISIBLE_TEXT_1' => 'Make Sensitive albums visible by default.',
			'NSFW_VISIBLE_TEXT_2' => 'If the album is public, it is still accessible, just hidden from the view and <b>can be revealed by pressing <hkb>H</hkb></b>.',
			'SETTINGS_SUCCESS_NSFW_VISIBLE' => 'Default sensitive album visibility updated with success.',

			'VIEW_NO_RESULT' => 'Bez výsledku',
			'VIEW_NO_PUBLIC_ALBUMS' => 'Veřejná alba nejsou k dispozici',
			'VIEW_NO_CONFIGURATION' => 'Žádná konfigurace',
			'VIEW_PHOTO_NOT_FOUND' => 'Fotografie nenalezena',

			'NO_TAGS' => 'Žádné štítky',

			'UPLOAD_MANAGE_NEW_PHOTOS' => 'Nyní můžete spravovat nové nové obrázky.',
			'UPLOAD_COMPLETE' => 'Upload dokončen',
			'UPLOAD_COMPLETE_FAILED' => 'Chyba při uploadu jedné nebo více fotografií.',
			'UPLOAD_IMPORTING' => 'Import',
			'UPLOAD_IMPORTING_URL' => 'URL pro import',
			'UPLOAD_UPLOADING' => 'Probíhá upload',
			'UPLOAD_FINISHED' => 'Dokončeno',
			'UPLOAD_PROCESSING' => 'Zpracovává se',
			'UPLOAD_FAILED' => 'Selhání',
			'UPLOAD_FAILED_ERROR' => 'Upload selhal. Server vrátil chybu!',
			'UPLOAD_FAILED_WARNING' => 'Upload selhal. Server vrátil upozornění!',
			'UPLOAD_CANCELLED' => 'Cancelled',
			'UPLOAD_SKIPPED' => 'Vynecháno',
			'UPLOAD_UPDATED' => 'Updated',
			'UPLOAD_IMPORT_SKIPPED_DUPLICATE' => 'This photo has been skipped because it\'s already in your library.',
			'UPLOAD_IMPORT_RESYNCED_DUPLICATE' => 'This photo has been skipped because it\'s already in your library, but its metadata has been updated.',
			'UPLOAD_ERROR_CONSOLE' => 'Podrobnosti získáte v konzoli svého prohlížeče.',
			'UPLOAD_UNKNOWN' => 'Server vrátil neočkávanou dopověď. Podrobnosti získáte v konzoli svého prohlížeče.',
			'UPLOAD_ERROR_UNKNOWN' => 'Upload selhal. Server vrátil neznámou chybu!',
			'UPLOAD_ERROR_POSTSIZE' => 'Upload failed. The PHP post_max_size limit is too small!',
			'UPLOAD_ERROR_FILESIZE' => 'Upload failed. The PHP upload_max_filesize limit is too small!',
			'UPLOAD_IN_PROGRESS' => 'Právě probíhá upload na Lychee!',
			'UPLOAD_IMPORT_WARN_ERR' => 'Import byl dokončen s upozorněními nebo chybami. Podrobnosti si prosím prohlédněte v protokolu (Nastavení -> Protokoly).',
			'UPLOAD_IMPORT_COMPLETE' => 'Import dokončen',
			'UPLOAD_IMPORT_INSTR' => 'Zadejte prosím přímý odkaz k fotografii, která má být naimportována:',
			'UPLOAD_IMPORT' => 'Importovat',
			'UPLOAD_IMPORT_SERVER' => 'Import ze serveru',
			'UPLOAD_IMPORT_SERVER_FOLD' => 'Složka je prázdná nebo neobsahuje soubory, které lze zpracovat. Podrobnosti si prosím prohlédněte v protokolu (Nastavení -> Protokoly).',
			'UPLOAD_IMPORT_SERVER_INSTR' => 'Tato akce importuje všechny fotografie, včetně složek a podsložek, které jsou v uvedeném umístění k dispozici.',
			'UPLOAD_ABSOLUTE_PATH' => 'Absolutní cesta ke složce',
			'UPLOAD_IMPORT_SERVER_EMPT' => 'Import neproběhl, protože složka je prázdná!',
			'UPLOAD_IMPORT_DELETE_ORIGINALS' => 'Odstranit původní soubory',
			'UPLOAD_IMPORT_DELETE_ORIGINALS_EXPL' => 'Pokud to bude možné, původní soubory budou po importu odstraněny.',
			'UPLOAD_IMPORT_VIA_SYMLINK' => 'Symbolic links',
			'UPLOAD_IMPORT_VIA_SYMLINK_EXPL' => 'Import files using symbolic links to originals.',
			'UPLOAD_IMPORT_SKIP_DUPLICATES' => 'Skip duplicates',
			'UPLOAD_IMPORT_SKIP_DUPLICATES_EXPL' => 'Existing media files are skipped.',
			'UPLOAD_IMPORT_RESYNC_METADATA' => 'Re-sync metadata',
			'UPLOAD_IMPORT_RESYNC_METADATA_EXPL' => 'Update metadata of existing media files.',
			'UPLOAD_IMPORT_LOW_MEMORY' => 'Není dostatek paměti!',
			'UPLOAD_IMPORT_LOW_MEMORY_EXPL' => 'Proces importu alokuje příliš mnoho paměti serveru a může být tedy neočekávaně přerušen.',
			'UPLOAD_WARNING' => 'Upozornění',
			'UPLOAD_IMPORT_NOT_A_DIRECTORY' => 'Uvedená cesta není čitelnou složkou!',
			'UPLOAD_IMPORT_PATH_RESERVED' => 'Uvedená cesta je rezervována pro Lychee!',
			'UPLOAD_IMPORT_UNREADABLE' => 'Soubor nelze přečíst!',
			'UPLOAD_IMPORT_FAILED' => 'Soubor nelze importovat!',
			'UPLOAD_IMPORT_UNSUPPORTED' => 'Nepodporovaný typ souboru!',
			'UPLOAD_IMPORT_ALBUM_FAILED' => 'Album nelze vytvořit!',
			'UPLOAD_IMPORT_CANCELLED' => 'Import cancelled',

			'ABOUT_SUBTITLE' => 'Ideální řešení vlastního hostování a správy fotografií',
			'ABOUT_DESCRIPTION' => 'je open-source nástroj na správu fotogragfií na Vašem serveru nebo webu. Instalace je hotova dílem okmažiku. Upload, správa a sdílení fotografií se provádí běžnými aplikacemi. Lychee přináší vše, co je třeba pro bezpečné online uložení Vašich fotografií.',
			'FOOTER_COPYRIGHT' => 'Všechny fotografie na tomto webu jsou ve vlastnictví Copyright ',
			'HOSTED_WITH_LYCHEE' => 'Hostováno na Lychee',

			'URL_COPY_TO_CLIPBOARD' => 'Kopírovat do schránky',
			'URL_COPIED_TO_CLIPBOARD' => 'URL zkopírována do schránky!',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => 'Přímý odkaz k souborům:',
			'PHOTO_MEDIUM' => 'Střední',
			'PHOTO_MEDIUM_HIDPI' => 'Střední HiDPI',
			'PHOTO_SMALL' => 'Náhled',
			'PHOTO_SMALL_HIDPI' => 'Náhled HiDPI',
			'PHOTO_THUMB' => 'Čtvercový náhled',
			'PHOTO_THUMB_HIDPI' => 'Čtvercový náhled HiDPI',
			'PHOTO_LIVE_VIDEO' => 'Video part of live-photo',
			'PHOTO_VIEW' => 'Zobrazení foto Lychee:',

			'PHOTO_EDIT_ROTATECWISE' => 'Otočit doprava',
			'PHOTO_EDIT_ROTATECCWISE' => 'Otočit doleva',
		];

		return $locale;
	}
}
