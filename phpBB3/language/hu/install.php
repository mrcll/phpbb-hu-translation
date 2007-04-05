<?php
/** 
*
* install [Hungarian]
*
* @package language
* @version $Id: install.php,v 1.5 2007-04-05 19:14:44 fberci Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADMIN_CONFIG'				=> 'Adminisztrátor beállítása', //? configuration
	'ADMIN_PASSWORD'			=> 'Adminisztrátor jelszó',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Adminisztrátor jelszó megerősítés',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(6 és 30 karakter közötti jelszót adj meg.)',
	'ADMIN_TEST'				=> 'Adminisztrátor adatok ellenőrzése',
	'ADMIN_USERNAME'			=> 'Adminisztrátor felhasználónév',
	'ADMIN_USERNAME_EXPLAIN'	=> '(3 és 20 karakter közötti felhasználónevet adj meg.)',
	'APP_MAGICK'				=> 'Imagemagick támogatás [ csatolmányok ]',
	'AUTHOR_NOTES'				=> 'Készítő megjegyzései<br />» %s',
	'AVAILABLE'					=> 'Elérhető',
	'AVAILABLE_CONVERTORS'		=> 'Elérhető konvertálók', //? elérhető

	'BEGIN_CONVERT'					=> 'Konvertálás elkezdése', //? konverzió, megkezdés
	'BLANK_PREFIX_FOUND'			=> 'Az adatbázis tábláid azt mutatják, hogy van már egy telepített phpBB-d, mely nem használ tábla előtagot.', //? "A scan of your tables has shown a valid installation using no table prefix."
	'BOARD_NOT_INSTALLED'			=> 'Nem található telepített phpBB.',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Az Egyesített phpBB Konvertáló Keretrendszer működéséhez szükség van egy telepített phpBB3-ra, kérjük először <a href="%s">telepítsd a phpBB3-at</a>.', //? "phpBB Unified Convertor Framework"

	'CATEGORY'					=> 'Kategória',
	'CACHE_STORE'				=> 'Gyorsítótár típusa', //? "Cache type" 'Gyorsítótárazás típusa' 'Gyorsítótárazás módja' 'Gyorsítótár-fajta' stb. (egy egész rendszerről, működésről van szó)
	'CACHE_STORE_EXPLAIN'		=> 'Az adatok gyorsítárazásának fizikai helye. A fájlrendszer ajánlott.', //??
	'CAT_CONVERT'				=> 'Konvertálás',
	'CAT_INSTALL'				=> 'Telepítés',
	'CAT_OVERVIEW'				=> 'Áttekintés',
	'CAT_UPDATE'				=> 'Frissítés',
	'CHANGE'					=> 'Változtatás',
	'CHECK_TABLE_PREFIX'		=> 'Kérjük ellenőrizd le az adatbázis előtagot, és próbálkozz újra.',
	'CLEAN_VERIFY'				=> 'Végleges struktúra rendbe tétele és ellenőrzése', //? "Cleaning up and verifying the final structure"
	'COLLIDING_CLEAN_USERNAME'	=> 'A <strong>%s</strong> egyszerűsített felhasználónév a következő felhasználókhoz tartozik:', //? "<strong>%s</strong> is the clean username for:"
	'COLLIDING_USERNAMES_FOUND'	=> 'A régi fórumodon ütköző felhasználónevek fordultak elő. Kérjük töröld, vagy nevezd át ezeket a felhasználókat, hogy minden egyszerűsített felhasználónévhez csak egy felhasználó tartozzon.', //? clean username = egyszerűsített?
	'COLLIDING_USER'			=> '» felhasználói azonosító: <strong>%d</strong>, felhasználónév: <strong>%s</strong> (%d hozzászólás)',
	'CONFIG_CONVERT'			=> 'Konfiguráció konvertálása', //? "Converting the configuration" - configuration?
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Nem sikerült kiírni a konfigurációs állományt. Alább találod ezen állomány létrehozásának alternatív módjait.',
	'CONFIG_FILE_WRITTEN'		=> 'A konfigurációs állomány kiírásra került. Továbbléphetsz a telepítés következő lépésére.', //? "_Most_már_ továbbléphetsz..."
	'CONFIG_PHPBB_EMPTY'		=> 'A phpBB 3 "%s" konfigurációs változója üres.', //? "The phpBB3 config variable for "%s" is empty." jelentés/értelem, fogalmazás
	'CONFIG_RETRY'				=> 'Újra', //??
	'CONTACT_EMAIL_CONFIRM'		=> 'Kapcsolat e-mail cím megerősítés', //? kapcsolat e-mail
	'CONTINUE_CONVERT'			=> 'Konvertálás folytatása',
	'CONTINUE_CONVERT_BODY'		=> 'Egy korábbi nem befejezett konverzió lett észlelve. Választhatsz, hogy vagy ezt folytatod, vagy egy újat kezdesz.',
	'CONTINUE_LAST'				=> 'Végső műveletek folytatása', //?? "Continue last statements" statement? egyáltalán hol használják?
	'CONTINUE_OLD_CONVERSION'	=> 'Korábban megkezdett konverzió folytatása', //?
	'CONVERT'					=> 'Konvertálás',
	'CONVERT_COMPLETE'			=> 'Konvertálás befejeződött',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Sikeresen átkonvertáltad a fórumod phpBB 3.0-sra. Most már bejelentkezhetsz, és <a href="../">hozzáférhetsz a fórumodhoz</a>. Ne feledkezz meg róla, hogy a phpBB-vel kapcsolatban segítséget nyújt az angol <a href="http://www.phpbb.com/support/documentation/3.0/">Felhasználói kézikönyv</a> és a <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">phpbb.com megfelelő fóruma</a>.', //? 'hozzáfér' - 'használatba vesz' TODO - magyar lokalizálás
	'CONVERT_INTRO'				=> 'Üdvözlünk az Egytesített phpBB Konvertáló Keretrendszerben!',
	'CONVERT_INTRO_BODY'		=> 'Itt adatokat importálhatsz másik (telepített) fórumrendszerekből. Az alábbi lista tartalmazza az elérhető konvertálókat. Ha a listában nem szerepel a kívánt fórumszoftverről konvertáló modul, látogass el a phpBB weboldalára, ahonnan lehet, hogy letöltheted.', //?
	'CONVERT_NEW_CONVERSION'	=> 'Új konvertálás',
	'CONVERT_NOT_EXIST'			=> 'A megadott konvertáló nem létezik.',
	'CONVERT_SETTINGS_VERIFIED'	=> 'A megadott információk leellenőrzésre kerültek. A koverzió megkezdéséhez nyomd meg az alábbi gombot.', //? verify
	'CONV_ERR_FATAL'					=> 'Súlyos konvertálási hiba', //? végzetes?

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'A régi fórumon engedélyezve volt az FTP-n keresztüli csatolmányfeltöltés. Kérjük kapcsold ki az FTP feltöltést, bizonyosodj meg róla, hogy egy helyes feltöltési könyvtár került megadásra, majd másold át az összes csatolmány állományt az új webről is elérhető könyvtárba. Ha végeztél ezzel, indítsd újra a konvertálót.', //? igazából nem teljesen értem...
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nincs elérhető konfigurációs információ a konvertáláshoz.', //?? "http://www.glumbert.com/media/supermarket"
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nem sikerült lekérdezni a fórum hozzáférési jogosultságokat.', //? "Unable to get forum access information." ezt jelenti? lekérdezni/megkapni
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nem sikerült lekérdezni a kategóriákat.', //? "Unable to get categories."
	'CONV_ERROR_GET_CONFIG'				=> 'Nem sikerült lekérdezni a fórum konfigurációját.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nem sikerült hozzáférni/olvasni: "%s"', //? rendes idézőjel?
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nem sikerült lekérdezni a csoport jogosultságokat.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Az add_bots() függvény végrehajtása során ellentmondást találtunk a csoportok táblában – az összes speciális csoportot hozzá kell adnod, ha manuálisan csinálod.', //??? "Inconsistency in groups table detected in add_bots() - you need to add all special groups if you do it manually." ellentmondás vagy következetlenség (inconsistency)
	'CONV_ERROR_INSERT_BOT'				=> 'Nem sikerült beilleszteni egy robotot a felhasználók táblába.', //? angolul nem _egy_ van...
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nem sikerült beilleszteni egy robotot a robotok táblába.', //? angolul így van, bár nincs "bots table" (a botgroup más)
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nem sikerült beilleszteni egy felhasználót a csoportok táblába.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Üzenetfeldolgozó hiba', //?? "Message parser error" feldolgozó/elemző
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'avatar_path\'] értékét.', //? értékét
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Nem került megadásra a relatív elérési út az eredeti fórumhoz.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'avatar_gallery_path\'] értékét.',
	'CONV_ERROR_NO_GROUP'				=> 'A „%1$s” csoport nem található a %2$s-ban.', //??? "Group "%1$s" could not be found in %2$s." miről van szó?
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'ranks_path\'] értékét.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'smilies_path\'] értékét.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Megjegyzés fejlesztőknek: a %s használatához meg kell adnod a $convertor[\'upload_path\'] értékét.',
	'CONV_ERROR_PERM_SETTING'			=> 'Nem sikerült beilleszteni/frissíteni a jogosultság beállításokat.',
	'CONV_ERROR_PM_COUNT'				=> 'Nem sikerült lekérdezni egy mappa PÜ-inek számát.', //? "Unable to select folder pm count."
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nem sikerült beilleszteni egy régi kategóriát helyettesítő új fórumot.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nem sikerült beilleszteni egy régi fórumot helyettesítő új fórumot.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nem sikerült lekérdezni a felhasználóazonosítói információkat.', //?
	'CONV_ERROR_WRONG_GROUP'			=> 'Rossz csoport („%1$s”) került meghatározásra a %2$s-ban.',
	'CONV_SAVED_MESSAGES'				=> 'Elmentett üzenetek', //? biztosan elmentett és nem feljegyzett?

	'COULD_NOT_COPY'			=> 'Nem sikerült átmásolni a <strong>%1$s</strong> állományt a <strong>%2$s</strong> helyre.<br /><br />Kérjük ellenőrizd le, hogy a célkönyvtár létezik, és írható a webszerver által.',
	'COULD_NOT_FIND_PATH'		=> 'Nem sikerült megtalálni az elérési utat az eredeti fórumodhoz. Kérjük ellenőrizd le a beállításokat, és próbálkozz újra.<br />» Megadott elérési út: %s', //? "Could not find path to your former forum. Please check your settings and try again.<br />» Specified source path was %s" szó szerrinti fordítás, de a 'nem jó az elérési út stb.' valószínűleg jobb lenne

	'DBMS'						=> 'Adatbázis típusa',
	'DB_CONFIG'					=> 'Adatbázis konfiguráció',
	'DB_CONNECTION'				=> 'Adatbázis kapcsolat',
	'DB_ERR_INSERT'				=> 'Hiba <code>INSERT</code> parancs végrehajtása közben.', //?
	'DB_ERR_LAST'				=> 'Hiba a <var>query_last</var> végrehajtása közben.',
	'DB_ERR_QUERY_FIRST'		=> 'Hiba a <var>query_first</var> végrahjtása közben.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Hiba a <var>query_first</var> végrahjtása közben, %s ("%s")', //??
	'DB_ERR_SELECT'				=> 'Hiba <code>SELECT</code> lekérdezés végrehajtása közben.',
	'DB_HOST'					=> 'Adatbázis szerver hosztneve vagy DSN', //? biztos, hogy egybeírják; nem 'DSN-je'?
	'DB_HOST_EXPLAIN'			=> 'A DSN az angol Data Source Name rövidítése, csak ODBC telepítéskor érdekes.', //? érdekes, lényeges
	'DB_NAME'					=> 'Adatbázis neve',
	'DB_PASSWORD'				=> 'Adatbázis jelszó',
	'DB_PORT'					=> 'Adatbázis szerver portja',
	'DB_PORT_EXPLAIN'			=> 'Hagyd üresen, hacsak nem tudod, hogy a szerver egy nem szabványos porton üzemel.',
	'DB_USERNAME'				=> 'Adatbázis felhasználónév',
	'DB_TEST'					=> 'Kapcsolat tesztelése',
	'DEFAULT_LANG'				=> 'Fórum alapértelmezett nyelve', //? alapértelmezett?
	'DEFAULT_PREFIX_IS'			=> 'A kovertáló nem talált táblákat a megadott előtaggal. Kérünk győződj meg róla, hogy helyesen adtad meg az eredeti fórum adatait. A %1$s alapértelmezett tábla előtagja <strong>%2$s</strong>.', //?
	'DEV_NO_TEST_FILE'			=> 'Nem került megadásra a test_file változó értéke a konvertálóban. Ha csak egy használója vagy ennek a konvertálónak, nem szabadna ezt a hibaüzenetet látnod – kérjük értesítsd a konvertáló készítőjét. Ha a konvertáló készítője vagy, meg kell adnod egy az eredeti fórumban lévő állomány helyét, hogy le lehessen ellenőrizni az eredeti fórum elérési útját.',
	'DIRECTORIES_AND_FILES'		=> 'Könyvtárak és állományok beállítása', ///? "Directory and file setup" egyáltalán ha használják
	'DISABLE_KEYS'				=> 'Kulcsok kikapcsolása', //?
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Távoli FTP támogatás [ telepítés ]', //? remote =? külső??
	'DLL_GD'					=> 'GD grafikai támogatás [ vizuális megerősítés ]',
	'DLL_MBSTRING'				=> 'Multibyte karakterkódolás támogatás', //? "Multi-byte character support"
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ ODBC-n keresztül',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL MySQLi kiterjesztéssel',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML támogatás [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib tömörítés támogatás [ gz, .tar.gz, .zip ]', //? nem egybe írják?
	'DL_CONFIG'					=> 'Konfiguráció letöltése', //?
	'DL_CONFIG_EXPLAIN'			=> 'Letöltheted a teljes conifg.php-t a saját számítógépedre. Ezután fel kell töltened ezt az állományt kézzel a phpBB gyökérkönyvtárába, felülírva a már létező config.php-t. Ne feledkezz meg róla, hogy az állományt ASCII módban töltsd fel (ha ezt nem tudod hogyan teheted meg, nézd meg az FTP programod dokumentációját). Ha felöltötted a config.php-t, kattints a „Kész” gombra, hogy továbblépj a következő lépésre.', //?
	'DL_DOWNLOAD'				=> 'Letöltés',
	'DONE'						=> 'Kész', //?

	'ENABLE_KEYS'				=> 'Kulcsok újra bekapcsolása… Ez eltarthat egy ideig.', //? bekapcsolás??

	'FILES_OPTIONAL'			=> 'Opcionális könyvtárak és állományok',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opcionális</strong> – Ezen könyvtárak, állományok, illetve jogosultságbeállítások megléte nem feltétlenül szükséges. A telepítő rendszer különböző módokon megpróbálja majd helyettesíteni őket, azonban a meglétük felgyorsítja a telepítést.', //? helyettesíteni???
	'FILES_REQUIRED'			=> 'Könyvtárak és állományok',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Szükséges</strong> – A phpBB-nek a helyes működéshez hozzá kell tudnia férnie, illetve tudnia kell írnia néhány állományba vagy könyvtárba. Ha a „Nem található” feliratot látod, akkor létre kell hoznod a megfelelő állományt vagy könyvtárat. Ha a „Nem írható” feliratot látod, akkor meg kell változtatnod az adott állomány vagy könyvtár jogosultságát, hogy a phpBB írni tudjon bele.',
	'FILLING_TABLE'				=> '<strong>%s</strong> tábla feltöltése',
	'FILLING_TABLES'			=> 'Táblák feltöltése',
	'FINAL_STEP'				=> 'Végső lépés végrehajtása', //? "Processing final step"
	'FORUM_ADDRESS'				=> 'Fórum webcíme',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Az eredeti fórumod URL-je, például <samp>http://www.pelda.hu/phpBB2/</samp>. Ha megadod, ez a régi cím lecserélésre kerül az új webcímre a hozzászólásokban, a privát üzenetekben és az aláírásokban.',
	'FORUM_PATH'				=> 'Fórum elérési útja',
	'FORUM_PATH_EXPLAIN'		=> 'Az eredeti fórum <strong>relatív</strong> elérési útja a <strong>jelenlegi phpBB-d gyökérkönyvtárához viszonyítva</strong>.',
	'FOUND'						=> 'Létezik',
	'FTP_CONFIG'				=> 'Konfiguráció átvitele FTP-n',
	'FTP_CONFIG_EXPLAIN'		=> 'A phpBB észrevette az FTP modul elérhetőségét a szerveren. Megpróbálhatod így átmásolni a config.php-t. Ehhez meg kell adnod az alábbi információkat. Ne feledkezz meg róla, hogy ez a felhasználónév és jelszó a szerverhez tartozik! (Ha nem vagy biztos benne mik ezek, kérdezd meg a hoszting szolgáltatódat.)', //? "phpBB has detected the presence of the FTP module on this server. You may attempt to install your config.php via this if you wish. You will need to supply the information listed below. Remember your username and password are those to your server! (ask your hosting provider for details if you are unsure what these are)" létrehozni/átmásolni + fogalmazás
	'FTP_PATH'					=> 'FTP elérési út',
	'FTP_PATH_EXPLAIN'			=> 'Az elérési út a gyökérkönyvtáradtól a phpBB-hez, pl. htdocs/phpBB3/.',
	'FTP_UPLOAD'				=> 'Feltöltés',

	'GPL'						=> 'Általános Nyilvános Licenc', //? "General Public License" maradjon az eredeti angol (még nem igazán találkoztam a magyar megfelelőjével)?
	
	'INITIAL_CONFIG'			=> 'Alap konfiguráció', //? egyáltalán használják?
	'INITIAL_CONFIG_EXPLAIN'	=> 'Ahozz, hogy a phpBB működni tudjon, meg kell adnod néhány egyedi információt. Ha nem tudod, hogyan tudsz csatlakozni az adatábizodhoz, kérünk lépj kapcsolatba a hoszting szolgáltatóddal, vagy fordulj a phpBB-t támogató fórumokhoz. Mielőtt bármilyen adatot megadsz, kérünk alaposan győződj meg annak helyességéről.', //????? "Now that install has determined your server can run phpBB you need to supply some specific information. If you do not know how to connect to your database please contact your hosting provider (in the first instance) or use the phpBB support forums. When entering data please ensure you check it thoroughly before continuing." nincs értelme... vajon hol használhatják (szerintem sehol!)??
	'INSTALL_CONGRATS'			=> 'Gratulálunk!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>Sikeresen telepítetted a phpBB %1$s-t. Most két dolgot tehetesz az újonnan telepített phpBB3-addal:</p>
		<h2>Már meglévő fórum átkonvertálása</h2>
		<p>A phpBB Egyesített Konvertáló Keretrendszer segítségével át lehet konvertálni phpBB 2.0.x-es és más fórumrendszert használó fórumokat phpBB3-assá. Ha át szeretnél konvertálni egy már meglévő fórumot, <a href="%2$s">lépj tovább a konvertálóhoz.</a>.</p>
		<h2>phpBB3 használatva vétele</h2>
		<p>Az alábbi gombra kattintva az adminisztrátori vezérlőpultra jutsz. Szánj rá egy kis időt, és vizsgáld meg a beállítási lehetőségeket. Ne feledkezz meg róla, hogy a phpBB-vel kapcsolatban segítséget nyújt az angol <a href="http://www.phpbb.com/support/documentation/3.0/">Felhasználói kézikönyv</a> és a <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">phpbb.com megfelelő fóruma</a>, további információkat a <a href="%3$s">README/a>-ben találsz.</p><p><strong>Most kérjük töröld, helyezd át, vagy nevezd át az install könyvtárat, mert amíg ez a könyvtár létezik, csak az adminisztrátori vezérlőpult lesz elérhető.</strong></p>', //? teljes átfogalmazás... TODO (béta)
	'INSTALL_INTRO'				=> 'Üdvözlünk a telepítőben', //? "Welcome to Installation" 'Üdvözlünk a telepítésnél'
	'INSTALL_INTRO_BODY'		=> 'Ezen menüpont segítségével feltelepítheted a phpBB-t a szerveredre.</p><p>A folytatás során szükséged lesz a következő információkra:</p>
	<ul>
	<li>az adatbázis szerver hosztnevére,</li>
	<li>az adatbázis nevére,</li>
	<li>az adatbázis felhasználónévre és az ehhez tartozó jelszóra.</li>
	</ul>
	<p>További bevezető szöveg…', //? TODO fogalmazás menüpont???
	'INSTALL_INTRO_NEXT'		=> 'A telepítés megkezdéséhez nyomd meg az alábbi gombot.',
	'INSTALL_LOGIN'				=> 'Belépés',
	'INSTALL_NEXT'				=> 'Következő lépés', //? stage =! lépés
	'INSTALL_NEXT_FAIL'			=> 'Néhány teszt nem volt sikeres. Mielőtt továbbléphetnél a következő lépésre, ezeket a problémákat meg kell oldanod. A hibák hiányos telepítéshez vezethetnek.', //?? főleg utolsó mondat ("Failure to do so may result in an incomplete installation.")
	'INSTALL_NEXT_PASS'			=> 'Minden szükséges teszt sikeres volt, továbbléphetsz a következő lépésre. Ha megváltoztattál volna valamit, és újra szeretnéd tesztelni a beállításokat, azt is megteheted.',
	'INSTALL_PANEL'				=> 'Telepítő', //? "Installation Panel" frissítésnél és konvertálásnál is ez van...
	'INSTALL_SEND_CONFIG'		=> 'Sajnos a phpBB nem tudta kiírni a konfigurációs információkat közvetlenül a config.php-be. Ez azért lehet, mert ez az állomány vagy nem létezik, vagy nem írható. A config.php létrehozására több lehetőséged van, melyeket az alábbi lista sorol fel.', //? "A number of options will be listed below enabling you to complete installation of config.php."
	'INSTALL_START'				=> 'Telepítés megkezdése',
	'INSTALL_TEST'				=> 'Tesztelés újra', //? "Test again" 'Új teszt'
	'INST_ERR'					=> 'Telepítési hiba',
	'INST_ERR_DB_CONNECT'		=> 'Nem sikerült csatlakozni az adatbázishoz. A hibaüzenetet lásd alább.', //? a második mondat kell?
	'INST_ERR_DB_FORUM_PATH'	=> 'A megadott adatbázis állomány a fórum könyvtárán belül van. Ezt az állományt egy webről nem elérhető könyvtárba kell raknod.', //? "The database file specified is within your forum directory tree. You should put this file in a non web-accessible location" könyvtárfáján belül?
	'INST_ERR_DB_NO_ERROR'		=> 'Nincs hibaüzenet.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'A szerveren lévő MySQL nem kompatibilis a kiválasztott „MySQL MySQLi kiterjesztéssel” csatolakozási móddal. Kérjük a „MySQL”-t válaszd ki.', //?
	'INST_ERR_DB_NO_SQLITE'		=> 'Az SQLite kiterjesztés verziója túl régi, frissíteni kell legalább a 2.8.2-es verzióra.',
	'INST_ERR_DB_NO_ORACLE'		=> 'A szerveren lévő Oracle verziója megköveteli, hogy a <var>NLS_CHARACTERSET</var> paraméter <var>UTF8</var>-ra legyen állítva. Frissítsd az Oracle verzióját legalább 9.2-esre, vagy változtasd meg a paraméter értékét.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'A szerveren lévő Firebird verziója régebbi, mint 2.0, kérünk frissíts egy újabb verzióra. ', //? régebbi, mint 2.0??
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'A kiválasztott Firebird adatbázis „page size” értéke kisebb, mint 8192, legalább ennyinek kell lennie.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'A kiválasztott adatbázis nem <var>UNICODE</var> vagy <var>UTF8</var> karakterkódolással került létrehozásra. Próbáld meg a telepítést egy <var>UNICODE</var> vagy <var>UTF8</var> karakterkódolású adatbázissalú. ', //? "The database you have selected was not created in <var>UNICODE</var> or <var>UTF8</var> encoding. Try installing with a database in <var>UNICODE</var> or <var>UTF8</var> encoding" próbáld meg a telepítést??
	'INST_ERR_DB_NO_NAME'		=> 'Nem adatad meg az adatbázis nevét.',
	'INST_ERR_EMAIL_INVALID'	=> 'A megadott e-mail cím hibás.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'A megadott e-mail címek nem egyeznek meg.',
	'INST_ERR_FATAL'			=> 'Súlyos telepítési hiba', //? fatális?
	'INST_ERR_FATAL_DB'			=> 'Egy súlyos és nem helyreállítható adatbázis hiba lépett fel. Lehet, hogy azért mert, az adatbázis felhasználónak nincs jogosultsága néhány művelet elvégzéséhez (<code>CREATE TABLES</code>, <code>INSERT</code> stb.). További információkat alább találhatsz. Lépj kapcsolatba a hoszting szolgáltatóddal, és/vagy fordulj a phpBB-t támogató fórumokhoz.', //? "A fatal and unrecoverable database error has occurred. This may be because the specified user does not have appropriate rights to <code>CREATE TABLES</code> or <code>INSERT</code> data, etc. Further information may be given below. Please contact your hosting provider in the first instance or the support forums of phpBB for further assistance." unrecoverable - nem javítható/helyreállítható
	'INST_ERR_FTP_PATH'			=> 'Nem sikerült elérni a megadott könyvtárat, kérjük ellenőrizd le az elérési utat.', //? "Could not change to the given directory, please check the path." elérni a könyvtárat?
	'INST_ERR_FTP_LOGIN'		=> 'Nem sikerült belépni az FTP szerverre, ellenőrizd le a megadott felhasználónevet és jelszót.',
	'INST_ERR_MISSING_DATA'		=> 'A blokkban található összes mezőt ki kell töltened.', //? blokk, tömb
	'INST_ERR_NO_DB'			=> 'Nem sikerült betölteni a megadott adatbázis típushoz tartozó PHP modult.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'A negadott jelszavak nem egyeznek meg.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'A megadott jelszó túl hosszú, legfeljebb 30 karakter lehet.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'A megadott jelszó túl rövid, legalább 6 karakternek kell lennie.',
	'INST_ERR_PREFIX'			=> 'Már léteznek táblák a megadott előtaggal, kérünk válassz egy másikat.',
	'INST_ERR_PREFIX_INVALID'	=> 'A megadott adatbázis előtag nem megfelelő az adatbázisnak. Kérünk változtasd meg, például próbáld meg eltávolítani a jelenlegiből a kötőjeleket és az ehhez hasonló karaktereket.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'A meagdott tábla előtag túl hosszú, legfeljebb %d karakter lehet.',
	'INST_ERR_USER_TOO_LONG'	=> 'A megadott felhasználónév túl hosszú, legfeljebb 20 karakter lehet.',
	'INST_ERR_USER_TOO_SHORT'	=> 'A megadott felhasználónév túl rövid, legalább 3 karakternek kell lennie.',
	'INVALID_PRIMARY_KEY'		=> 'Hibás elsődleges kulcs: %s', //? érvénytelen

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> kiterjesztés ellenőrzése', //? check - ellenőrzés
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Szükséges</strong> – Az <samp>mbstring</samp> egy PHP kiterjesztés, mely multibyte szövegekkel kapcsolatos funkciókért felelős. Néhány funkciója nem kompatibilis a phpBB-vel, ezért ezeknek kikapcsolva kell lenniük.', //? multibyte magyarul? + értelem - fogalmazás
	'MBSTRING_FUNC_OVERLOAD'				=> 'Függvény felülírás',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> 'Az <var>mbstring.func_overload</var> értékének 0-nak vagy 4-nek kell lennie.', //? "must be set to" =? értéke
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Automatikus karakterkészlet konverzió', //? "Transparent character encoding" a konverzió magyar szó?
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> 'Az <var>mbstring.encoding_translation</var> értékének 0-nak kell lennie.',
	'MBSTRING_HTTP_INPUT'					=> 'Bemeneti HTTP karakterkészlet konverzió', //?
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> 'Az <var>mbstring.http_input</var> értékének <samp>pass</samp>-nak kell lennie.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Kimeneti HTTP karakterkészlet konverzió', //?
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> 'Az <var>mbstring.http_output</var> értékének <samp>pass</samp>-nak kell lennie.',

	'MAKE_FOLDER_WRITABLE'		=> 'Kérünk győződj meg róla, hogy a következő könyvtár létezik, és írható a webszerver által, majd próbálkozz újra:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Kérünk győződj meg róla, hogy a következő könyvtárak léteznek, és írhatóak a webszerver által, majd próbálkozz újra:<br />»<strong>%s</strong>',

	'NAMING_CONFLICT'			=> 'Nevezési ütközés: a %s és a %s is fedőnév.<br /><br />%s', //?
	'NEXT_STEP'					=> 'Tovább a következő lépésre', //? -hez?
	'NOT_FOUND'					=> 'Nem található',
	'NOT_UNDERSTAND'			=> 'Nem sikerült értelmezni: %s #%d, %s tábla ("%s").',
	'NO_CONVERTORS'				=> 'Nincs elérhető kovnertáló.', //? "No convertors are available for use" használható
	'NO_CONVERT_SPECIFIED'		=> 'Nem került konvertáló kiválasztásra.', //? "No convertor specified"
	'NO_LOCATION'				=> 'Nem sikerült meghatározni a helyét. Ha tudod, hogy az Imagemagick telepítve van, később megadhatod az elérési helyét az adminisztrátori vezérlőpultban.', //? elérési hely stb.
	'NO_TABLES_FOUND'			=> 'Nem taláhatók adatbázis táblák.',
// TODO: Write some explanatory introduction text
	'OVERVIEW_BODY'					=> 'Ide valami szép kis szöveg jön, de már csak ha kijött az RC (addig úgyse lesz használva)…</p><p>Ez a telepítőrendszer végigvezet a phpBB telepítésének, más fórumszoftverről való konvertálásnak vagy a legújabb verzióra való frissítésnek folyamatán. További információt az egyes lehetőségekről a fenti menü megfelelő elemére kattintva kaphatsz.
	', //? TODO "installation system"? nyelvtan? "This installation system will guide you through the process of installing phpBB, converting from a different software package or updating to the latest version of phpBB. For more information on each option, select it from the menu above."
	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 támogatás',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'A phpBB <strong>nem</strong> fog működni, ha a PHP a PCRE kiterjesztés UTF-8 támogatása nélkül került fordításra.', //? fogalmazás...
	'PHP_OPTIONAL_MODULE'			=> 'Opcionális modulok', //? erre is van valamilyen magyar kifejezés...
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcionális</strong> – Ezek a modulok vagy alkalmazások opcionálisak. Azonban ha elérhetők, extra funkciók használata válik lehetségessé.',
	'PHP_SUPPORTED_DB'				=> 'Támogatott adatbázisok',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Szükséges</strong> – A PHP-dnak legalább egy adatbázist támogatnia kell az alább felsoroltak közül. Ha egy adatbázis modul sem elérhető, lépj kapcsolatba a hoszting szolgáltatóddal, vagy nézd át a megfelelő PHP telepítési dokumentációt tanácsért.', //? compatible => alább felsoroltak közül; hoszting; tanácsért? - fogalmazás
	'PHP_REGISTER_GLOBALS'			=> '<var>register_globals</var> PHP beállítás kikapcsolva',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'A phpBB akkor is működni fog, ha ez a beállítás be van kapcsolva, azonban biztonsági szempontból ajánlott a kikapcsolása.',
	'PHP_SAFE_MODE'					=> 'Biztonságos mód', //? ennek ez a magyar fordítása?
	'PHP_SETTINGS'					=> 'PHP verzió és beállítások',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Szükséges</strong> – A phpBB telepítéséhez legalább 4.3.3-as verziójú PHP-vel kell rendelkezned. Ha alább megjelenik a <var>biztonságos mód</var> felirat, akkor a PHP ebben módban fut. Ez korlátozásokkal jár a távoli adminisztrációhoz hasonló funkciók terén.', //? Szükséges a szöveg elején... távoli adminisztráció...
	'PHP_VERSION_REQD'				=> 'PHP verzió >= 4.3.3',
	'POST_ID'						=> 'Hozzászólás azonosító', //? ID?
	'PREFIX_FOUND'					=> 'Az adatbázis tábláid azt mutatják, hogy van már egy telepített phpBB-d, melynek a tábla előtagja <strong>%s</strong>.',
	'PREPROCESS_STEP'				=> 'Függvények/parancsok előfeldolgozásának végrehajtása', //? " Executing pre-processing functions/queries"
	'PRE_CONVERT_COMPLETE'			=> 'Az előfedlgozó lépések sikeresen végrehajtásra kerültek. Most már elkezdtheted a tényleges konvertálást. Kérjük vedd figyelembe, hogy néhány dolgot, lehet hogy neked kell majd kézzel beállítanod. A konvertálás után különösen is ellenőrizd le a jogosultságokat, ha szükséges építsd újra a kereső indexet, és ellenőrizd le, hogy az állományok sikeresen átmásolásra kerültek-e (például avatarok, emotikonok).', //? adjust - helyrehoz, beállít, igazít; rebuild search index; correctly - helyesen, pontosan, gond nélkül, (sikeresen)
	'PROCESS_LAST'					=> 'Végső műveletek végrehajtása', //? "Processing last statements" befejező?

	'REFRESH_PAGE'				=> 'Automatikus továbblépés', //? "Refresh page to continue conversion"
	'REFRESH_PAGE_EXPLAIN'		=> 'Ha igenre állítod, a konvertáló egy lépés befejezése után mindig újratölti az oldalt, ezzel továbblépve a következő lépésre. Ha most konvertálsz az első alkalommal, és csak tesztelni szeretnél, előre tájékozódni az esetlegesen felmerülő hibákról, ajánljuk, hogy állítsd ezt a beállítást nemre.',
//	'REQUIRED'					=> 'Required',
	'REQUIREMENTS_TITLE'		=> 'Telepítési követelmények', //? "Installation compatibility" nem volt jó ötletem az angol verzióra, úgyhogy ez lett a cím :)
	'REQUIREMENTS_EXPLAIN'		=> 'A phpBB telepítése előtt még lefuttatunk néhány tesztet a szerveren, hogy meggyőződjünk, biztosan sikeresen telepíteni és üzemeltetni tudod a phpBB-t. Kérjük nézd át alaposan az eredményeket, és ne lépj tovább addig, amíg az összes szükséges teszt sikeres nem lesz. Ha opcionális tesztekhez kapcsolódó funkciókat is használni szeretnél, győződj meg arról is, hogy a megfelelő opcionális tesztek is sikeresek.',
	'RETRY_WRITE'				=> 'Konfiguráció kiírásának újra megpróbálása', //? "Retry writing config"
	'RETRY_WRITE_EXPLAIN'		=> 'Megváltoztathatod a config.php jogosultságait, hogy a phpBB írni tudja azt. Ezután kattints az Újra gombra. Miután befejezted a phpBB telepítését, ne felejtsd el a config.php jogosultságait visszaállítani.', //? "If you wish you can change the permissions on config.php to allow phpBB to write to it. Should you wish to do that you can click Retry below to try again. Remember to return the permissions on config.php after phpBB has finished installation."

	'SCRIPT_PATH'				=> 'phpBB elérési út', //? erre jó lenne valami jó kis kifjezés, mivel sokszor szokott probléma lenni vele
	'SCRIPT_PATH_EXPLAIN'		=> 'A phpBB domain névhez viszonyított relatív elérési útja, pl. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Nyelv kiválasztása',
	'SERVER_CONFIG'				=> 'Szerver beállítások', // "Server configuration" konfiguráció
	'SOFTWARE'					=> 'Fórumszoftver', //? külön?
	'SPECIFY_OPTIONS'			=> 'Konvertálási beállítások megadása', //? hol? megadása kell?
	'STAGE_ADMINISTRATOR'		=> 'Adminisztrátor adatok', //? 'Adminisztrátor adatai'
	'STAGE_ADVANCED'			=> 'Haladó beállítások', //? nagyon nem szeretem a haladó szót, ide más kéne! 'További', 'Speciális' stb.
	'STAGE_ADVANCED_EXPLAIN'	=> 'Ezeket a beállításokat csak akkor add meg, ha biztosan tudod, hogy az alap beállítástól valami eltérőre van szükséged. Ha nem vagy benne biztos, lépj tovább a következő lépésre, ezeket a beállításokat később az adminisztrátori vezérlőpultról is megváltoztathatod.', //? "The settings on this page are only necessary to set if you know that you require something different from the default. If you are unsure, just proceed to the next page, as these settings can be altered from the Administration Control Panel later."
	'STAGE_CONFIG_FILE'			=> 'Konfigurációs állomány', //?
	'STAGE_CREATE_TABLE'		=> 'Adatbázis táblák létrehozása',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'A phpBB 3.0 adatbázis táblái sikeresen létrehozásra kerültek bennük néhány kezdeti adattal. Lépj tovább a következő oldalra, hogy befejezd a phpBB telepítését.', //? "The database tables used by phpBB 3.0 have been created and populated with some initial data. Proceed to the next screen to finish installing phpBB." 'A phpBB telepítésének befejezéséhez lépj tovább a köv. ...' 'A phpBB 3.0 adatbázis táblái sikeresen létrehozásra kerültek, és feltöltésre kerültek néhány kezdeti adattal.' stb. adat!, kezdeti, néhány
	'STAGE_DATABASE'			=> 'Adatbázis adatok', //? 'Adatbázis beállítások'
	'STAGE_FINAL'				=> 'Befejező lépés',
	'STAGE_INTRO'				=> 'Bevezető', //? 'Bevezetés'
	'STAGE_IN_PROGRESS'			=> 'Konvertálás folyamatban',
	'STAGE_REQUIREMENTS'		=> 'Követelmények',
	'STAGE_SETTINGS'			=> 'Beállítások',
	'STARTING_CONVERT'			=> 'Konvertálás elkezdése',
	'STEP_PERCENT_COMPLETED'	=> 'Lépés: <strong>%d</strong> / <strong>%d</strong>',
	'SUB_INTRO'					=> 'Bevezető', //? 'Bevezetés'
	'SUB_LICENSE'				=> 'Licenc',
	'SUB_SUPPORT'				=> 'Támogatás',
	'SUCCESSFUL_CONNECT'		=> 'Sikeres kapcsolódás',
// TODO: Write some text on obtaining support
	'SUPPORT_BODY'				=> 'A béta fázis alatt csupán minimális támogatás érhető el a <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">phpBB.com megfelelő fórumában</a>. Ez a támogatás általános telepítési kérdések megválaszolására, konfigurációs, illetve hibákkal kapcsolatos problémák megoldására terjed ki. Nem foglalja magában viszont a modok, egyedi kód/megjelenés változtatások, illetve élesben üzemeltett fórumok támogatását.</p><p>Segítséget találhatsz az <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">angol gyorstalpalóban</a> is.</p><p>Hogy mindig azonnal értesülj a phpBB frissítéseiről, <a href="http://www.phpbb.com/support/">iratkozz fel a hírlevelünkre</a>.', //? TODO fogalmazás (bár úgyis változik)
	'SYNC_FORUMS'				=> 'Fórumok szinkronizációjának megkezdése', //? elkezdés - kell egyáltalán ez a szó (tesztelni kell)
	'SYNC_TOPICS'				=> 'Témák szinkronizációjának megkezdése',
	'SYNC_TOPIC_ID'				=> 'Témák szinkronizálása; <var>topic_id</var>: %1$s – %2$s', //? mínusz jel jobban mutatna?

	'TABLES_MISSING'			=> 'Az alábbi táblák nem találhatók:<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Adatbázis tábláinak előtagja',
	'TABLE_PREFIX_SAME'			=> 'Annak a szoftvernek a tábla előtagját add meg, amelyről konvertálsz.<br />» A megadott tábla előtag %s volt.',
	'TESTS_PASSED'				=> 'Sikeres teszt', //? "Tests passed"
	'TESTS_FAILED'				=> 'Sikertelen teszt', //? "Tests failed"

	'UNABLE_WRITE_LOCK'			=> 'Nem sikerült írni a lock állományt.', //? lock-ot fordítsuk le? (lezáró, foglaltságot mutató??)
	'UNAVAILABLE'				=> 'Nem elérhető',
	'UNWRITEABLE'				=> 'Nem írható',
	'UPDATE_TOPICS_POSTED'		=> 'Téma információk generálása', //? "Generating topics posted informations" nem tudom mit jelent, nem tudom tulajdonképp mire is használják stb.

	'VERSION'					=> 'Verzió',

	'WELCOME_INSTALL'			=> 'Üdvözlünk a phpBB 3 telepítésnél', //? "Welcome to phpBB 3 Installation" 'Üdvözlünk a phpBB 3 telepítőjében'
	'WRITEABLE'					=> 'Írható',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'All files are up to date with the latest phpBB version. You should now <a href="../ucp.php?mode=login">login to your board</a> and check if everything is working fine. Do not forget to delete, rename or move your install directory!',
	'ARCHIVE_FILE'				=> 'Source file within archive',

	'BACK'				=> 'Back',
	'BINARY_FILE'		=> 'Binary file',

	'CHECK_FILES'					=> 'Check files',
	'CHECK_FILES_AGAIN'				=> 'Check files again',
	'CHECK_FILES_EXPLAIN'			=> 'Within the next step all files will be checked against the update files - this can take a while if this is the first file check.',
	'CHECK_FILES_UP_TO_DATE'		=> 'According to your database your version is up to date. You may want to proceed with the file check to make sure all files are really up to date with the latest phpBB version.',
	'CHECK_UPDATE_DATABASE'			=> 'Continue update process',
	'COLLECTED_INFORMATION'			=> 'Information on collected files',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'The list below shows information about the files needing an update. Please read the information in front of every status block to see what they mean and what you may need to do to perform a successful update.',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'You should now <a href="../ucp.php?mode=login">login to your board</a> and check if everything is working fine. Do not forget to delete, rename or move your install directory!',
	'CONTINUE_UPDATE_NOW'			=> 'Continue the update process now',
	'CURRENT_FILE'					=> 'Current original file',
	'CURRENT_VERSION'				=> 'Current version',

	'DATABASE_TYPE'						=> 'Database type',
	'DATABASE_UPDATE_INFO_OLD'			=> 'The database update file within the install directory is outdated. Please make sure you uploaded the correct version of the file.',
	'DESTINATION'						=> 'Destination file',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'End of current file / Begin of new updated file',
	'DIFF_SIDE_BY_SIDE'					=> 'Side by Side',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Do not update this file',
	'DONE'								=> 'Done',
	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_AS'						=> 'Download as',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download modified files archive',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Once downloaded you should unpack the archive. You will find the modified files you need to upload to your phpBB root directory within it. Please upload the files to their respective locations then. After you have uploaded all files, please check the files again with the other button below.',

	'ERROR'		=> 'Error',

	'FILE_ALREADY_UP_TO_DATE'		=> 'File is already up to date',
	'FILE_DIFF_NOT_ALLOWED'			=> 'File not allowed to be diffed',
	'FILE_USED'						=> 'Information used from',			// Single file
	'FILES_CONFLICT'				=> 'Conflict files',
	'FILES_CONFLICT_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. phpBB determined that these files create conflicts if they are tried to be merged. Please investigate the conflicts and try to manually resolve them or continue the update choosing the preferred merging method. If you resolve the conflicts manually check the files again after you modified the them. You are also able to choose between the preferred merge method for every file. The first one will result in a file where the conflicting lines from your old file will be lost, the other one will result in loosing the changes from the newer file.',
	'FILES_MODIFIED'				=> 'Modified files',
	'FILES_MODIFIED_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. The updated file will be a merge between your modifications and the new file.',
	'FILES_NEW'						=> 'New files',
	'FILES_NEW_EXPLAIN'				=> 'The following files currently do not exist within your installation.',
	'FILES_NEW_CONFLICT'			=> 'New conflicting files',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'The following files are new within the latest version but it has been determined that there is already a file with the same name within the same position. This file will be overwritten by the new file.',
	'FILES_NOT_MODIFIED'			=> 'Not modified files',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'The following files were not modified and represent the original phpBB files from the version you want to update from.',
	'FILES_UP_TO_DATE'				=> 'Already updated files',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'The following files are already up to date and do not need to be updated.',
	'FTP_SETTINGS'					=> 'FTP settings',
	'FTP_UPDATE_METHOD'				=> 'FTP upload',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'The update files are incomplete',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'The database update was successful. Now you need to continue the update process.',

	'LATEST_VERSION'		=> 'Latest version',
	'LINE'					=> 'Line',
	'LINE_ADDED'			=> 'Added',
	'LINE_MODIFIED'			=> 'Modified',
	'LINE_REMOVED'			=> 'Removed',
	'LINE_UNMODIFIED'		=> 'Unmodified',
	'LOGIN_UPDATE_EXPLAIN'	=> 'In order to update your installation you need to login first.',

	'MAPPING_FILE_STRUCTURE'	=> 'To ease the upload here are the file locations which map your phpBB installation.',
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Do not merge - use new file',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Do not merge - use currently installed file',
	'MERGE_MOD_FILE_OPTION'		=> 'Merge differences and use modified code within conflicting block',
	'MERGE_NEW_FILE_OPTION'		=> 'Merge differences and use new file code within conflicting block',
	'MERGE_SELECT_ERROR'		=> 'Conflicting file merge modes are not correctly selected.',

	'NEW_FILE'						=> 'New updated file',
	'NO_AUTH_UPDATE'				=> 'Not authorised to update',
	'NO_ERRORS'						=> 'No errors',
	'NO_UPDATE_FILES'				=> 'Not updating the following files',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'The following files are new or modified but the directory they normally reside in could not be found on your installation. If this list contains files to other directories than language/ or styles/ than you may have modified your directory structure and the update may be incomplete.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'No valid update directory was found, please make sure you uploaded the relevant files.<br /><br />Your installation does <strong>not</strong> seem to be up to date. Updates are available for your version of phpBB %1$s, please visit <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> to obtain the correct package to update from Version %2$s to Version %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Your version is up to date. There is no need to run the update tool. If you want to make an integrity check on your files make sure you uploaded the correct update files.',
	'NO_UPDATE_INFO'				=> 'Update file information could not be found.',
	'NO_UPDATES_REQUIRED'			=> 'No updates required',
	'NO_VISIBLE_CHANGES'			=> 'No visible changes',
	'NOTICE'						=> 'Notice',
	'NUM_CONFLICTS'					=> 'Number of conflicts',

	'OLD_UPDATE_FILES'		=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',

	'PERFORM_DATABASE_UPDATE'			=> 'Perform database update',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Below you will find a link to the database update script. This script needs to be run seperatly because updating the database might result in unexpected behaviour if you are logged in. The database update can take a while, so please do not stop the execution if it seems to hang. After you performed the database update, close the database update window and continue the update process.',
	'PREVIOUS_VERSION'					=> 'Previous version',
	'PROGRESS'							=> 'Progress',

	'RESULT'					=> 'Result',
	'RUN_DATABASE_SCRIPT'		=> 'Update my database now',

	'SELECT_DIFF_MODE'			=> 'Select diff mode',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Select download archive format',
	'SELECT_FTP_SETTINGS'		=> 'Select FTP settings',
	'SHOW_DIFF_CONFLICT'		=> 'Show differences/conflicts',
	'SHOW_DIFF_FINAL'			=> 'Show resulting file',
	'SHOW_DIFF_MODIFIED'		=> 'Show merged differences',
	'SHOW_DIFF_NEW'				=> 'Show file contents',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Show differences',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Show differences',
	'SOME_QUERIES_FAILED'		=> 'Some queries failed, the statements and errors are listing below',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'This is probably nothing to worry about, update will continue. Should this fail to complete you may need to seek help at our support forums. See <a href="../docs/README.html">README</a> for details on how to obtain advice.',
	'STAGE_FILE_CHECK'			=> 'Check files',
	'STAGE_UPDATE_DB'			=> 'Update database',
	'STAGE_UPDATE_FILES'		=> 'Update files',
	'STAGE_VERSION_CHECK'		=> 'Version check',
	'STATUS_CONFLICT'			=> 'Modified file producing conflicts',
	'STATUS_MODIFIED'			=> 'Modified file',
	'STATUS_NEW'				=> 'New file',
	'STATUS_NEW_CONFLICT'		=> 'Conflicting new file',
	'STATUS_NOT_MODIFIED'		=> 'Not modified file',
	'STATUS_UP_TO_DATE'			=> 'Already updated file',

	'UPDATE_COMPLETED'				=> 'Update completed',
	'UPDATE_DATABASE'				=> 'Update database',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Within the next step the database will be updated.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Updating database schema',
	'UPDATE_FILES'					=> 'Update files',
	'UPDATE_FILES_NOTICE'			=> 'Please make sure you have updated your board files too, this file is only updating your database.',
	'UPDATE_INSTALLATION'			=> 'Update phpBB installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'With this option, it is possible to update your phpBB installation to the latest version.<br />During the process all of your files will be checked for their integrity. You are able to review all differences and files before the update.<br /><br />The file update itself can be done in two different ways.</p><h2>Manual Update</h2><p>With this update you only download your personal set of changed files to make sure you do not lose your file modifications you may have done. After you downloaded this package you need to manually upload the files to their correct position under your phpBB root directory. Once done, you are able to do the file check stage again to see if you moved the files to their correct location.</p><h2>Automatic Update with FTP</h2><p>This method is similar to the first one but without the need to download the changed files and uploading them on your own. This will be done for you. In order to use this method you need to know your FTP login details since you will be asked for them. Once finished you will be redirected to the file check again to make sure everything got updated correctly.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Release announcement</h1>

		<p>Please read <a href="%1$s" title="%1$s">the release announcement for the latest version</a> before you continue your update process, it may contain useful information. It also contains full download links as well as the change log.</p>

		<br />

		<h1>How to update your installation</h1>

		<p>The recommended way of updating your installation only takes the following steps:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="http://www.phpbb.com/downloads.php" title="http://www.phpbb.com/downloads.php">phpBB.com downloads page</a> and download the correct "phpBB Update Package" archive.<br /><br /></li>
			<li>Unpack the archive.<br /><br /></li>
			<li>Upload the complete uncompressed install folder to your phpBB root directory (where your config.php file is).<br /><br /></li>
		</ul>

		<p>Once uploaded your board will be offline for normal users due to the install directory you uploaded now present.<br /><br />
		<strong><a href="%2$s" title="%2$s">Now start the update process by pointing your browser to the install folder</a>.</strong><br />
		<br />
		You will then be guided through the update process. You will be notified after the update is complete.
		</p>
	',
	'UPDATE_METHOD'					=> 'Update method',
	'UPDATE_METHOD_EXPLAIN'			=> 'You are now able to choose your preferred update method. Using the FTP upload will present you with a form you need to enter your FTP account details into. With this method the files will be automatically moved to the new location and backups of the old files being created by appending .bak to the filename. If you choose to download the modified files you are able to unpack and upload them to their correct location manually later.',
	'UPDATE_SUCCESS'				=> 'Update was successful',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Successfully updated all files. The next step involves checking all files again to make sure the files got updated correctly.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Updating version and optimizing tables',
	'UPDATING_DATA'					=> 'Updating data',
	'UPDATING_TO_LATEST_STABLE'		=> 'Updating database to latest stable release',
	'UPDATED_VERSION'				=> 'Updated version',
	'UPLOAD_METHOD'					=> 'Upload method',

	'UPDATE_DB_SUCCESS'				=> 'Database update was successful',

	'VERSION_CHECK'				=> 'Version check',
	'VERSION_CHECK_EXPLAIN'		=> 'Checks to see if the version of phpBB you are currently running is up to date.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Your version of phpBB is not up to date. Please continue the update process.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Your version of phpBB is not up to date.<br />Below you will find a link to the release announcement for the latest version as well as instructions on how to perform the update.',
	'VERSION_UP_TO_DATE'		=> 'Your installation is up to date, no updates are available for your version of phpBB. You may want to continue anyway to perform a file validity check.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Your installation is up to date, no updates are available for your version of phpBB. You do not need to update your installation.',
	'VIEWING_FILE_CONTENTS'		=> 'Viewing file contents',
	'VIEWING_FILE_DIFF'			=> 'Viewing file differences',

	'WRONG_INFO_FILE_FORMAT'	=> 'Wrong info file format',
));

?>