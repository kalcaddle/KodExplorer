<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.3.1
*/

@ignore_user_abort(true);
@set_time_limit(3600*2);//set_time_limit(0)  1day
@ini_set('memory_limit','2028M');//2G;

include('./../../../app/api/sso.class.php');
SSO::sessionAuth('AdminerAccess','check=roleID&value=1');
class AdminerSoftware extends Adminer {
	function login($login, $password) {return true;}
}
function adminer_object() {return new AdminerSoftware;}




error_reporting(6135);$Lc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Lc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Wh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Wh)$$X=$Wh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");header("Cache-Control: immutable");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒÞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Þn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1ÌŽs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŽŒFÃ©”vt2ž‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅŽÃžôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PÐ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛÐ889¤È ŽQØýŒî2#8Ð­£’˜6mú²†ðjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ð¼o(Úó¥ÉkÔ7½sàù>Œî†!ÐR\"*nSý\0@P\"Áè’(‹#[¶¥£@g¹oü­’znþ9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ðè!°üë*cì÷>ÎŽ¬E7DñLJ© 1ÊJ=ÓÚÞ1L‚û?Ðs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ð\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[ÝsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀÞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>ŽlÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´Ý¢gŒnË©¸¹TÐ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdÝÝ è2cˆê4²k¿Š£\rG•æE6_³¢ú=î·SZUÇ·ãŒžO—ðÅ?¡éÃ¾27£cÝÐÅhnÆ‹Üùu3…E>\$J[Áq[\räIŠ6.ÆJÑ\"EPrèGÌŠGA ÝW¡³ž\rº´6Ík†¢½`.-¡ªB2>#ìhØÀˆXµøu\r¡¸=‡Z  b€Å(¡â•ƒ!JZÈ”uªyO’×Z¥M˜Õ6lM[0©ä–€àß!ImñyÂ+pÉ#ag¡ÞŒvW˜:qp\"4ÅôòŸãheî…0 dÆAq-\"¡Êƒ§ÆÂ\"2ßÍÒ@‡)o‘,,”¤”×Rb`@©B@ÐÊÊ¯¤Q\n†èŠ·˜Z§„Â™=(r~‰l©~¯ÄhˆsAllÖ\n7»!1! Ü#é\0KË…A“LH(½!ÔÊ˜agH\0ÄT\ni˜/È\$ôöœ4GaÎIÉ!¸.—Å˜5§ÅM\rÑ2‘‚Ï	Ù;ƒ,öžLIJ†äÃd?“ÒºÅí%Õˆ:çN@b.âª2í5’«ôt:FAw²B£EŽ,Ç-\$ù£'ê:Ó©u©?¨tK;kÍàžÐ¸¨ä\0ouMD)k_Phž˜Ó5MC}7‚…È2‡w.QB¦8)ìÀ†8(DIù=©éy`Øed\0s,`É•jŒHÄ\"(b³¢Ä\\ÙÖnl’\"Ù‚^Ëì€­eE½\nèáë±X!SqXÔÀ\r©Œ€7A±ž†0ê£y7pPìºðçaüA˜4‡ƒ(yÖJwm…2…òª.¯ó‰†¬fp°ÏË;Æ„5ÂJÍcÜqŒQz\\\0[Hÿ 3‘f'b¼µFðøÆY¨\nAà9_§IÞà(›fÎÓq‘VÑÅ¨äõ³4µÜò¹‚„RIÂYå&J’ºFñ}£{FTëh9[7‚h\0à‹TÖ^ö´jËÔq×j‹õžÕ”§­€cÂWIð@`_ÑsVDçÃ[¾\"{1áÈ3‡•	ŽÚô»÷¨<…l¼l.±éÐ[¨»Þ#Ä¯º¤b°Þu­¶/Ÿ\0ä3ævaå«‘Dp>‚2½IDWÕš¢kKAŒ»hHš]¨FÆ•ã€W–!]‰Ê÷ltÜÉ•RÌ­4L[äÐÅYC cTj<c;s‡q¸p€’ Ä5ÅtóJ§m6—%J”-\\õÍeB=iß-ð*%´·¦÷¢TV‹[&M8ó*\r™bÄY\rihˆ	„ÙPŒ9T×-VÉ°ZÔúüÛ³ù49Î²™”ƒp-´`ÙÿÜÌÇGÉÙ›' ì¹ÐôM²:§Å™')0ƒYuÚcí:!«x#×¦è¦-l*®TÉ\nYläù†š³‹*D ÉXë V\\îËØÚ®ó]y¯ƒ\nÖ2r,É†åç,ÎdÐ×~Å³Ý÷s³-ç+Ö»uÛ]£\\BÀ¶¥²Iw€Ô!ƒOsØÔ¯lò YCÁÐ‚È:À@ÆœEUË._)Ë9uÿzœµvÏˆSÎ´¬1ï—é_(Sõéqé½¡r¾yuî+¥Z*ê6€uy¿<ÉÇõz\\|ØZK;áe›×–úoYåÀ;°óžÃl‘´xöà-7×ô÷4rkYY?ÔÕGWt¡¼÷[KÚšÃåzoØ<¿€Íà	têÏô†¶¾ù—É€gçýjð‡_!ào…êÊ\$ Iã¹ÀI¿.&Ü5½P\\—›]¥Àè†Æ\nCØ.ïÖ_¹ø;¿çs«iíS/gÖ:ÞPëÉ³auNÍ¨|Æaáå¯á™º¬±¢µÓâ«6ØÓŽÙž3Ö|÷¾‡Ä{©ceîXòù<°e«p>Ní}´í~âÿO¾¡÷Ò™Bl¿ÂjÊ/¢óKø¼Hdch-Ë¾ýŽºØšð/ûîÜþÎäùÈ¶·hÔž0ŽÀÐŒÈÐ‹ÌúÎH©8j6é\n+d l7\r ¾ ÀÚ…0N7eZ°0`m Ën¢ÝÃp\0Ð\0¾} Ç@[ãi0˜ðƒ	ð~…¤4P•\nÐ”bÐ¯0©p‹	P¢4@ïPŠê‡‰‚I\0``f”ë\r```˜°Yð¢zÀß	Põ€ê\rð¯°¿	pÎ¤y	HÕq¬@Øñ	QÆq‡Ñ ¬`¿±Ñbi‚”ŒUÐ¡ñš@`)™ðÁÐôàì)°ÍÑZèpj(Ñ--lÕâêÖ1Q%­póñYÑ\n1}°ÏÍ\\*¤“hÿŒ{§†C0°#€ÆHˆ˜0T‚qAäöðb”=‘Â…±f- éðÿqÒiAðs'QÏ‘ÝÑã‘Z\rRc'°å`Œ«­q¾èY’Q1±Ò2!r\"Qó1÷	Qï!qûr\0°B˜²DÑwð”\0Û±¾ªñqÑ\$òSÃÙ\"¬]qåò@`è±²@,Ÿ\"r\"ò)&Ñô&é\nt€äbèm0˜2‘)Qw\nÀÖ ó æò¦p(0«*ò³‡ÒŽ±ò¡£q\nÃ&i\nî\"ùp£’Á1Õ‘CÒá‡Ï\"Á.1y.q^òøŸ2ñòð\0Ï.òõQ×0ó¬rýÑ)/\0Ú”!/¹.S+1Rë/3:5ÀÆó11³\nBÑ43	4±G#ã€œ`ŒSa °ra6‘Îâes7Óq£,æ©¹j3q4)\$ˆ˜‰«à@*Ò×-²Í9ñá¢\n±ë\"0‹',ÑhõS}\"Ÿ3ss9ðÅ1ó½7S-=1g4	ß<pr.€Û)LA9ê¶ÍÂ´ êÁ/9ÏSÍ?“/5H}>É.«‰4LD;‘¿@2!AÑã@³áôBråÔ-/ô+016Sì˜#„)Š˜\"ÂŽi@€`P;.\n€<)Ô±ôV\nl8K#gkød|¶ƒ8ãlÁÂâ.lf.ô?œA@\rÃ†.¤\$J2tN#ôRr¢AE¢ËEéë´e€ËF‚óFÓ¦g­8*€");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°ŽÏ§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2Ý´z=š0HøžÐ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒÞo5šgòóIœÜ,2O4ãÞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ðhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9m@Ð:ƒ€æáxï)…ÐüC…Ãxä3…ñ4P7áü-4Çr\"p3Fhà…-5ƒ”U4Í‰¸\\6°ƒ<D\$®l—9ÍR4t7ƒdD3µpÞÎ“kÌ:)\\;° ÐÔð\r@Žt…\$4O£<þ†!pdÇÔÚQJ\rÌHî}:&Œ¨ˆÂÈ„Á5YWJ­˜‹±Â`ÓN£èbKNSÉÀÉa§Ž•ƒ´d>2WñÅ…bDj:9[21c„»È€:Xé@ËqË#“›4íL™'J”©+DHeÒ3¬.«O ÇKË°“ˆ…pV…át2Œwp;Æ“…íÿ\r?èOzDq.ª°Ð-†\"ìZñ®cèX3!/>PúFìsØÉ²±Ã0Í(òóˆ°Ê£€àŒ‚T63sVQo¸€SÎ‘ b²ß…^r\$É@C© r2)©Œ£ “VÀ)+nÜ·zÃÁúålÚè{³K#…À9‹{†Û¯lÀºìmÐQ¨ëh»*É—PÄ:¡c˜]´7ãàø=¡LŸŒi;”2û¿§­ÜÒ<\\Jí¤Øb¥n”…ƒ¥nÁ_iÓ´îJ\n†¢¨âòŽõC:ª„‘`N4¶Ì–È'Aw:4}ÊÛ£ÁW\080‘ÇL3õÊJ;èiú)\\„=/NŠu=ZV6&ceaè±ÂpÞÖ.[ëvŠtPZÞèX`Ö”õŒ+zú'¦ê9½.\$\$…Ó@\n\ré]_ïÙ®¢Âh¨kk¬Ms>`Ì–ƒj¹%\\9Ð¶ÆÔ('°jAˆ>BCd\"K\$	CAÆ ä„¤.Â².`‰â.EÑæ´–ÌÃyy\0‹D2Ï8t	Ð6†Ã8¬FL«´×ÞíâŒB*¬ð,Ò|\nx\\@ °@¸Ø3r ¬­ðÎWKQb,%…¯´DBfØÈ³D|ÍŒËE0/2>£Y!Ä†'õ™`æf™mHº<BãB0\r*\0Gxò‰nêY4‚¶¾Œ,žL²©º–öÅ%SÆ,ýv‡0ê‘–XòQÄ1†HId`‡!.ÔVÊ›H/ÅúÃ—ÀHãù0ÆUÁ¸0Â™©Ž`îLI©8ÖÃkŠ”2Œ4JYNÅ&8xä¥JØk:AKã¡nWØ!¦¿Iï;'ô³\":2ðê‹4Í~óJ„8ô£á’‘¨âG‡™\"MÊ=\rZ'ŽnÇi9F§œ“™rÆ’RÊt‚3\0Ÿ”Ò²Â2µy‚B^òèb'´ÒzÈÉ²(­#”d9Itµ&WØjNa¨ÚC(¥ j”Ä–?h‰ÂØj†¡™©Ö„Z\$0«¡Ò¯´J	A_\n†!TOó4Œ<{aôú?˜æo ú‚-¹–ÃÏ?Hlÿ\"2ƒy™=Úë¨ž R©ðœÑ„àš°–ÍŠëP&åG›ÀÁ4ƒË%()¤\r5Mª‚‰ÓLTí\0ÀºxBIç=ltvÄ2Jhvû´~/:èpý×:8\"Ð´5¡«‰0î#Ž*ì7ªøúÜ\nàq×>è¡G\$°â…):	ƒ»\"ù#ë¦KfI‡!vö+?{¡Íÿ¾Qg¥{ÏR÷Q øCäªŽ}Õ#¸éiIbgà„ÔXàÄÃÂù}ÅË`‹}3—%@îÁ{_kø}0ä±þÈ—Öp !°aï—<7«e•‰ÖF‡?¦¸¡î½XüDù­Ñ, ØÊCk‰ƒíU™ØL>£1‹§ÜÜ‡¥ã‡Œp0Ž#Ä\$²ÅâV)pYs5A˜:°ÊUÈ(9…5×™,F+&Ÿ*{âŒ-£Íìç:÷Ší :7¦þ:Ê™yPãè—´ŠÀXÏ+¤Ž’\nÞI;üþ\\s„÷Pà÷1‘‘ìÈr©¦NJËAT'-£”òk?ƒÙY@“¡Ïö±fÇÍbñŽ’”RîJÏiömÖB~ò©”K\rK«œtª4à÷;OŠKc”9%Hì5àÍd¢3ÙÀe8j¿P÷±[sð™9,ƒÄ˜—bzK‰µÁòW&e¢d8­ú§)ÄùÐuP°¿¾œ>‘#	P&„ÃP	ƒpbaÀ¨Í¨yñ£æß\$3}ïÐ{»áÝhyÊ(ÖdWø±ŠÅÙËÐ_±:°'AØ‚‡PæÃI\"Ù!ïŽ[`ûn8å»i/@ÈäðP	ÐfœÐŽå†©ˆV	À£ž•sÑCß8¡˜°Ny‰hÜñtEnAj.-åÄ6£ÀqwJÜ?œÃ¹”AÌhu	è™Ôsé¤AíáO7“·j›æ\n	]¿0›^Œ	ƒ\nYÁš\$„Î–_\rþ\$…u*÷Þ¡ÒEx/d¼pdRÝdÂõ:¤IÀoDÁ›®‡sQÉ™fàÜI¤öžâ8Ñ,óêKÑÏIsM@aq\n/™†ÌM˜R¹ ¢®Cþ-aÇa£¾™/·Hº!å4F…óIÿÉÅpÅ”MÏ«Šþ_Ø‡HÀ9{‚.´\$WÄûò#{ÌúÒ®Šü·:‰Súƒ£(À'lÕMY»:lÊž¤mD\$°\0¦¬×\0©ê´èº'¢~à¶ Z@º€¶ŒàVâº€L\"ãjnæ¾5€ðNlŠŽÌþþKšfj&›Mí•OøÓdbÓ°NÓð´O\$i)ÞNÐ(¿Ð!P)Ð0+Ð6HpN¦¢ØF‚àîÐ–ž¬?L\nžìÁ-h0˜Í,.e­¤\"Ž‡6m#õ	é’ýo&ò°ÒÞë¶gåZÅ@Pþk­&Ìº_ì¼%\\\\'ÀíÌ\0]\$(€5ƒN fqÎ|Ñp¨ `…â<ðîRîÎú úìÍ¸þ˜ìI\0Ñ¥þãL¦|Ç\$Žý(Þê¸Å¬TkQ6k°B@0HõŒ˜Pƒ\rÀšˆ#Îušš+ï€Ü²pTþÐZÑ±/ü\r y´Pp%\0^8ÆÒ\r¤Àµ‘˜4¬Ý\0‡¡1²¦ðQn*+B8qÂà ŽÏF§\0Ð´ÌÜ±Šâ¢\næþ«.®âŽûH’±%Ââ3ñÀ&PžF–Ñ„ÝX¢Ïð¨`O ±£Ë9R­B´’\r ì10Îì½‡O ¬X«Ì^+¯öïæÌiÐÈArD¬4ëÙ`Ê-š.i`4ò'Å,\$²VÅ,_c~;Bn<’1\$,]%Èlù‰D=âå\$Ñ).1b%gœ»z‰Ðü}ËÊG2¯1]8uPòïìD]	/z îä¼g‘+'„7D\0]ú²¾aäŽpV’ÒL€ó0÷+`Xpä˜ ÊîdË-hû+h(ÀÔäÀÐ\n„¿²fª“§s2,µ2‡@z Â.I``‡*óÌ1l?±“RËñ±W.ï.c%\$‹¢¿s+4òÑëã6Ã\$Cr‡F)0‚ô\rÓ1-ˆ`„ÓŒ ÈjÆL\r­8–²©l—0È©*.L‡KpÃ\r¤·\r£/rûLÄa8â2KÅ1nêb‚ÿ4“LíÒêË,¶Ë¬¾ïó©\nij–érói#Ç©8»1èbxÓ2à¾\$Nú\re‰ ¨\r\"8ˆ'‘³’³ª\r´-ƒPàÀYñ0°£Yb”S\0¹°ø\\jK+q6V hê1óU€z`pïò¬R±E“CÓî”X»Åöõ%”F	5ñF4f-¶tPåID6\0NFä®Nå4’_Þ0ó©\riL@Ên´¸Pé^‚¬Âîëê¾%'ËLÔ¨êG”€ïôàò\\‘Fèâ€ÊâÄ&ã4ÂÐI*5ÉO†‰OÀ·Pã)8¾)­*L;ð½4EÌ]´\$óðÌ\0L3ËE ïEk„ÑÃÎIt%eÆ\nbô(ÎëSMª}²Þ7sÇ‹Û¯)gi¤ØFà†&êº-XH° ¼ìðBÃM5~jrPjÌ¾-|Ö¤´9 ¨–p¨¢5Š¸;oŽ–5²õ¶–‰c\ndÒÕuÊ	 ÂÔ\rLÕhú'\nå''ò< O\0ðœe,. ú–\"t\r¯k^Ã{_Ã_gTµý`\0Ñ	Mk?ˆ2®\r:Db%È]UÍ[²1óùcuµ[¡[9]Õà´/ EV>k@éa\r_\"Žb6]ö E–DöQ^)È™•@Ps€ITr vT\0ØVR™W@ ëiR”2/¢b…,Xr€¬	jç^µï0•õ«ÿk’’üCÇlˆ“fl'8E–É©‘oµW¶¨ûI¤þmpë£¶ý/&ï´+´òýéX¯çk.þð\\ÿ4Ó0d“r\"“°kb\nH\$Ð¢†±KCâåo§OoíõG%\r¦äûÏl²–ùëÒö Õ]àP7\"*hPP€\rc¡_€X[`æêöî â7å:`‹˜Uà°ß¨–I¢ƒwêdã¶;·Š	—Ž“x t†À‚8d\0ž@Ôjw˜v¶ —»{÷Â bŽ	¨pü æñcyíö\n€ , u<	âÕ\"uyE:í÷Z`<LF£ë¨ü2ÑðcwþS¸d†%uw€÷u•ß€#pqNNßÀN’\n·#@ E‚#\"@|d%kwc\"* xò„àw‚˜\0uX.¦Âl&Xe‚ÎM†ÃB'“ @6ChÂ»`S¥‚wÿ‡G Êé¢ÓˆC[V×ø1àß\rÆþb\"Ð\n\0ž\n`©JÀŽ¸º+—a1¦\"lW}z–]zjdO„>!‚ŽˆG\0[\\å¢ïF|…®¾ À^\0ZJ`î¨b·`#ãŒ5€É`W÷“E;„â(à°¹!`È¯`\"»~Eß’gƒŠhVGrý‚_ï±uåj¢Q‘*d'2g/Ø-\n€h¤ ^Àda)×•E:HØhäËãvEvˆs—Bàí­‡9wƒ\0ÜßMøßÐãŒùW”NLù…•Ž Ë3Àè-ø=#@%øD!ÊXL*ô…êV…¹‰¸;…Ò1„ãÇ˜Ø‡ƒMžk‰™X‹ØŠÀñÒâ&ù™Ùr<å[%Uøeq˜WW‰#\$ÛèŒlIVàA†W_GÆVú„šF\"&fÐ(çošdV1ƒšó*wr0±F\"Œ¯¤‰H˜‰ÑvçTq hw*†“†@Œƒˆƒs….¯0g8ú1_€zfö»äA)À¢—+<¯Òu\"­F_lO#Œ®Õân{‚XYwv,ÕÇ–½ HàÓÇ“cÌ{n7á<8ÌYfB°¬Á\0øFe–\ràù:érŠ¸\$gy¬šÌÀ6=pÍ;4ó›9\0öb%a2BÉ Ê\n ¤	(€\rº@GFžª@ÙÃû%²€ß²Å 1ÓâÐ“qbÂs+£Zg´%@t%–à š3±€Ô\räD(àLÒ÷v.šð€\\\rR ^ã€é°	×A2Â\rÖ¾;yvïˆÀ€~ÀUâÂ*¢Ð@õø<š‰Ëq¢Wa¢·S¢úW¡„=yŽEš<Vº@<ù±1·³3€Ð\$»äì\$üPÅD€¾w2UÏØ;Ï]ù¡Ç%!\n¯ó²ÃD)‘¦ó„‚I/h~Çàè‚<Â+ø€î0€ÜåsÓ34‡-´ŠèåGÓØ4ïÂòŒÅT\nÏóu3ëü<TôckþÊÅWÃÎW»âGU—±Çfme÷\\¤D!*vÅx3ƒiû2ªw2§Œ1ª|Œ\$&Ô‰+€†bG\$v!rò*-ù4­quÈ\rÑyLã0üÊtXÆ…Æ·²çÚßI“b dúµSÓï<öaòÎËç¹G´~G¬Ïà„m äg¢x-T’¶ÏÉY’á™–¼ª!(wHÃ\nãš4aäg)`žñƒ%Ó@rüY%’Ž¬(qÜX¿˜à!cÕ\$Dy±]mjöbpR4RõÜRÄïuÜX†äpó/6 h€eâªÕ+ùnëš@ cHÐÉ¹ð ¹Ÿ{Å”æÅÚ.\\bmVþpPé·`bQrãP€ê\0`\$WÖWÑRq2x%bY—1ÜÛû€¬²º³±>ùÍÌ1æÌìu&b\nVÌo°Nïj\n€ÞâÄEÄ†ØC3âåG\0²ýþ epž–£Â<~B^ A¾%/9°;åv\\¥[â›Hþlž^U»ÔûÇÓžh¿š¢.\\YÉ}+	üYtÞÅýqÆ‰6¢\nsüã\0‘¾äü¦c:–3¹*}ÉÜñŒÚØ7z\$ë·d\\Âç\"«· W³£Y³û+²ûIèã³e½¢Ú\0çùSï9©½ºDt[rû×šºCÖ©bÍ~é¦³DÕw/½l—¿ÉL`Õ~ ØU‡øV_àÞ\0\rÞwó)¶bžÆ¦8–ï”¿Gò Ü%¼º¾WÞUáöA¾v(ùHFg¨ X©cº¢n9ö2—ô—Õn12lÀ˜\rä?\"tï\0XPÉsùÿ”Ymf±‚‚F?mñÒx5™}Hì_´ìXcûy”áÎºCåÕ.Ä\$¯`¶köd5.rx>Ç¢7þæîsÛn3¼“Ó<¼´g„ˆð§åO(\\@èžWò:PáÏƒ{ó­_Fà†”hgLÓ >°<¦6é~'²K„0Õ?@ãìEAå_Ü Ô8H.LG<øÄíd  Y¬oú¡ÒÜü«€­ÚkF<Òýp‘¾(Ûj\$9ò¬ª˜Ä?¥ÙV P?)ÍòØ¤DŠuŠ°Lb¨­àžj¹Áâç}	ð\0„Kp³ì7ÆÒZsÔ€àõDì)ë\rù:°™JQÖ“}¥”\$¨€bÁ³AØu)»Ü‡\"XÅÁžMÞ%pQPÑQÂÍ\$@³¦ž\\’\0ÚVõ7ªÁ¨TMøX×É*ôò #)G\\ ÐK—«ÂMë0–=¯JÜ&½`¿\"x‹_ÒËb™B`–C?/ˆ´ÅªÚBUuë«83ûNR¤Îñ_Ž]Nî‰TèÜ¿D„ª…òwI¥\n‘2«„€D:Yî‚	ôì­q1°Ð`B‚à—F!]W5‰,:˜1Ã(­0ÇtQôFÙ	ˆŠpÕ7’'!\"@€Õ8Õ0Ü`œ7ˆ\rhC’\nXÓ¡¥\rA–CÖ	m	Q€Ìß&l&€|cåL‚d¢\"#·\"ø’¨ÂPK‚‚ôß56HÊ„bÊ—&åÄ+Î#f¨V¹/Søˆh(Td±uÀ€ô‹<=ˆxdª8Š:ám!ð6ü8€,JP~RP–DüZÂÃu€±‘O¡`Å0X¦šŠA¢ˆwØ£0eh^Câ’\$Ä ¢ãÈ8A‚¡PçÅ(ê#+K×N4¡%\n•BÇÄ>âÜ2‡%ìüë{0ùÆ‹¾ò0ÏŸ¢/¦Ñzˆð Ï	P¢‘“Êš @Égæ¥Dªzöž¤D§ÔŠþYà¥“4œ¥¯,%l3WâÍUþ²¢ÃúLr[º°øÔ…9H¥ÌgT`@7È\r‚¹N£ï– èÛ€û¨ëO+òD>I‘¶(bñL“}\$úÇ…”êIXBÒž (4!îhñ!Eåœª£\"wÓ\"0qËJ\0ßUØPF\0o_\0cà£çÐ„¡\ng‹\0T}\0ÔÓ#/tÀ‡úXJ•BKçK/‚@\0yÚ PIévA1ÿiœ°ÂàÅpàm˜@Ø„yŒç9À˜ 3¤ÃHYº2!œ†„ÎéÐ`/‘<rI‘¸y ¥¾BÂs@uê• ½¶:b\"Ž¬}“%#Èê…É¾¡ª…~[ö:p¸2/.!9CÝüøB_NcqœH8¸ñÜ¤QrcyIÂš–ù\0¶©“\n7ØnBi)`?Mõ’âLÓ%XM¦NHŒ4Bã¸R\"Og‚[H0}Cã4ìƒ ,,\\f¸õÂ5òŠ ò‚d”\$_'|„Ä®‰ê&P¦\0—ÜN¨jáK\n¨ <¢?‰*%øYœÄ±`·@\"2¢“!ÆPötP¢˜.iiT|ê@2Š	‚çRÐG d¥K'&(T˜#ËWÃät\"c\rS,aœ‘@[3hG\$\$­á°+„¶RØRÌ¶åºY	6Às‘lt´–¦ÚÒ’ËI*ñv&ºz” ç4,\\²Š†‰¬YY{Gš^J>Ì¹%‰.f¬KxÀŠß:X½O.§}L[G&–äÂeÐIaK–b’ç”Ã%ÄOÉB8lÒˆ>´»å(M äC€A;oK+%—yÄ€’­%”|\"×#hGD¶\$õ 	™fB—òMdC\\ª±äàÖ±áªå¡…™L¤T(q…¬º‘\0.PäÌ\n„¯¤’ºçåZŠUjg[#P@²Ç”rãþ¢Â8m…ÑyüMQ6ò\$œsŠÑûÆDÖ¸`!8:4€¸Ñ„Œ,a£p'ªFE2€8Mµm¬” ÆD2@.…UŠ ]!ûÆÑ5IÇ€_ó\n¨Ú'(¹iu˜ÄP‘î‡€K²‹p9™…¸@LHÀŠÀ)‹àX„ÐÀPÅWòvó‰\rDë']!´Ø0ŠöB#äR:Dé.\n¹XÄè€Ø8á´H\rs^0Ë¿+9¡€ÙSb0\nBë7ùÀàa“ty<¬Ö¼Øà|&#¬gÚ@5qDáäÖÈ‚\0/‡ Aàâ¿§ú\"&¼†1¯ífF‘|gí5Õ\\ˆÂrórIJ±'2Pª£Jséž‰læÂäi\nåRŸyCa9àÀíß”™ð„àÉÛNp§\"ˆ'H7™ÓÍˆ¾3MTØRd“BŒR€àpƒ|zË:1PýhÁ)(h[BôPÆˆ“Òž¤^Ñ\0äÈ\$:6óKBŽ(©Ò˜\$ŠÈ\rx[ÀBGHŒ„ 6cn8›Ô\\Ò \nYi\rdˆ\nUß„\$©;È§”.Ë‡ì* _\n€§ äŠ=Qø”y\nÀÅ< 9OãÆxF}\rðˆ¾ÂF%¸§M4\"æ›à0\0f(×d3ñ¨ÑÜŠaù\0À„p0`Hëê¤‰DÕºdûäÒ3Yö¦ICöx£+?YiÖ ÐŸ½?„1™ félCFPà[BœåÞÅS@!Ln#su\"ì…Z\0÷:’rô¶|tÙ],7)1¤ -Ù4¦ï&Yî€`£Ÿøé Zµ¸7på¥¦°²ÃÊ›@ÓÓ½ª -®hóNð-ÓÖ›µiJ0Òˆ§3Xjõ9*Ü.T7I«ˆ`Ã@ö£‹î{`nìãÀeQ‘ý°@´Ì)`øBÍ\" Îhé©0¤ª+Z•«>KÑï*YSjDôR©œ£Iš0Ý\n´jš<Ônæð/°(Û4ú7ÑÄ‰Ãh©hGj7;š£’ä!”p­ª™Qº¦ÏœB±X¨)ŒKP òš˜u8‰Œj¸Rª+qøŒ”‰Á®*ÏMši…öìM+TNsàø@wCbFV#hùîœà(@µÀ¸êÂ€þ£\rlLÑÞ‚9Ç€Âr3×ðÈê>ñiŽ\r:ô–¬¤æê>ÕëVeî¢¤aùp¹¡êUø½íº)üÞG°2Ÿ¥trTw Ò5p£Íf¶#­umœ3üÍf›Ò`½8KI& F’m”³‚vÝ\0À 9täP1’~×¹\$õA\0ÞS5'ŠîEyz5qW‚™«\$-_K‹®EyÀîòÊô»Ò½q!‰@™kºÉTÎlÈÊ“Úe'\\ÄÊ\\cg»øˆžiüŠ_5÷™àç\0zŠìÉV»iÏBã[Œƒ]ªåÊÀ·¨8\n+ñ]:êÓ°•Ø“\"'n±ÈW}¡µQ¢.IÛXn|ËB°Åƒ]ô†klæáü9aêSuØÊ…v°¡­ì-ay<VItÇÎ™]]…K	“I¶²GÝ²‘\rBµ	ÄÌ­ë…S#öÕVs¥‰h'õ®báT¢‰Å3¹b]Ym\\¬™S(šÉá7¥Œ&ºæ{,9¬ºÒÇzå`Z&'¬o”h\"‘m“Å4½Ù8”AA}›ë‡WâÅˆÀûST¦-_Z‚e\rµ0¯«@UsÝ®F\0-y•“žê'ÌºB°ÙvàeC‚Ý€wZ‹KZmpðeÑè	|p0‡äYáÛe¡ÆÔ´ëE,èöµ{µŠqÃ  7hšÖªSËph®™T¼©MK¦Ž\0R©Eak.*Þâ\"²ø¬ÂüÓùÛLÒALœ¦&;hÙ¤à:³5´\nm!CÛUög·JœËYnâËÛÀ”Vì·-¶‰êƒF9þ´	Ù‘Øè¹ŠVYÈ”Lt³ªéi\\ºµž³tº€ên\"'j_€Ú˜NN `Ô._¢Õ©©Gö¯óTÃ\n¦‘]©dÚ‰afŒ“\nembÎ¡aIŸnÀ19U']ÁšÑ3æ¹ç:€ËXÚÌìùÜ”˜#áŒkÈd®yŸBÐW2eºXnš.K£Y2¤ñT²),†cµáèmc£‹Öû¨¡P€1q`ce¢e.{˜p* [>`ì{bùÊ]L ‚ÛSe›b|)”Y:nçcà…S9k7]5±èšçY‹]ÅU CÅÁsBC|€åîgÐ‹…t98Ä‰®ÍÕˆ“tù6]l×·.¨má©–	‡8k·˜UæÍyÐ^|¤ö¡y@Þ*×ÇóÞŒ1\$·	‹‡*'€•]f7H¼…Ëå1y0ƒ}j!å½¡cV+Î¬5·¹}ÞÊd°8U=×Þ±ê¯›zÛ˜ßF¡’—@¾o3øÖ_fŒaµ¾å)î~`¹­!iG]EÝ&BlÎ¢Î¦#¿}õÈ\0È‘6÷3\rûTn¦kÐ]\$;¾Qjn:ÚØ›ÞÜÊZ·ÐÜZbû®Z&á@gÀ3B\$·gë\n–Êd5MÕ/Ku{Ô#]µssqfÑuÜ¤ºëˆòQ3ÿØ—–ÝTµv­c©\\‘MÉuÕÙk#eB«QäODóÁ¸%ÀY<_Æ6¥¾b ²!ÉT.]>\0u=~˜®ˆp«±G×V®6×@'U¯<¢kZŠK6¹\r@ˆ”’-;ÍB.õtÆ\0UƒMa´±–“ÂU—n\0búm9#	TÝ?ZåÈÀêeÚˆ\rÓ‘\nôí°¤6€G”@+ž\rAÝ²FÆëa†ÓÈA>0ËŠ¦|7EÛQå\nî\0WŠ,7.—ÌÃá£°þ(Ì%bî×ÎÃ ´ŽºM¹U|-¡h†S™+9n·ØAQ3 ¾àjßD|ÿ6Í®gJrXnßX€åN)­|Máp°ÞRˆc&\rMö¯èÚC¨yÖÁz¸k\"d©—ÉûŽÄC›ü÷‚¥äPGå.?yüi¸ä1ÇJCl^Àë\"Þ9­ØÉÆYñ¼ÃÎâ ãý~¸q1€8†ˆÃ#Š’0é Âð)	Ì_äë¹Bœ¤¤°lï½¬8eþC,‘Ì„A]½ÆNC‰’kâðÆõk¯²iŽ(pÀ=ÀéÚ•Ã	‘Ðƒ\0¶A\\Çmüï=“ì’Ê™há¿ÚÓ€Ž¼¬ºÊâ1iM[¾	´Õ«_Êáq•Ÿ%!rèOµ}M¹úG½5%Èq.i^GÍfàýYi/dªólLRÛ0z2ê²Ì·˜Á²\r£Ò\\Ù÷ígF	µ¢n¶¸æ®	tfi_´eÍ¢RD§@õËóKiÜX‘†p]Š;6êð¢¼o\"A%¬9•7F.…éË£ZuEk˜sáæ\$ýy‹ÌcòÑÜÛf[-‡ïššás8ÊáPû4\0Çô³5aýfØ«@no¤ZRÚ¡HŒ.uób5ÌÙ¢È³“KiDFëÝ™-Nfpˆ?ìH×!¼ê¡ˆÍyúÎÞjs¼„\\ð e	.à‰]’‚†läŸpwÍÎ^†‰—À;ßù¥\"­,h”~­IÈ«‘9,a:jF7¹GægúÌô38?J£bÐHÑ+løW\0¨cÖ¹ãôWŸ”h SEsà %ËWc:X;ô-DžF(Ö­64ËTs3ä¡)ŽBj[f¢ºn¢Àº¨ð›Ó: ©AÐÐ@ð½\$¶Õ¶ê¥Z&s½W­ÿKºÌUØ—O2¼ïhZ‚úÑvšÏ»™‘©ÃÅtªÄÒŽt¦CVê…wJôÍ©‘ˆFí^,ôèpãá?ÒµL \$8€EÀ…s¨|ÙDã4(›¦˜q)'ÍNWuG.†`7[æB/™’Á]¿œ'§€ˆ£z1­Æ‰QŸEÆ’s:™£ÕžP<ºËX5ÎÍLßô\0}g“X\nÆÕz¨Â¸=Yç>¾yóÑ¬Í³ñ«É–9e›¹{áôýiüÕk<ZY,K•¹AÆ¹¡b„½Ë™êôZá‚\0èÃ\roNª}ªÁ¦åªhIa!|†ý”JX¦Õüƒ¤Ò!ŒXç­)¹«çBãœ«³µþN«À˜àTXàdJ‹¥¹£ì+bÍØ±\nLRÊ=£“H{šz•JHŠE‹`¢è}¾ÊG\$§äÞ’ý–H°§Päï*¡´ñ\"Ç 0*@€A @@ð#,	='Ì¥ˆÀXš5Ìˆbx–XyÓ‡×7§Á%èøö¶¡¶¼]\r‰J!J©´Áò€íh‰xÀ\"c§QÐðÆ\\Ý®¶ØñÐÇgyÛ‹ÄŽ	2mL;UñíEÄRQK€À’àWÃ•\\Ñ¥º\$f\\RXƒH§Œ€¶' /ó©c¹]Ë¼x°Üàe€‘²í3V•êYšF0‹‡òè	–l™Ò\$âNu°ú\$É¹‡¢í†|àbÆ\$äyJ`>SþË3œÈÍ¬É)©[ÂÐs–C…¿y-×Þa=CKŠÎ2ÅäK!F•½êÖèþ÷…e¾\rÜ¡Hã#è·Ðg–Yuœªb®éTBÓC# =:Ë©\0‘¤ƒo4ÅuñÎ@]N°€´`ÙâÖVî8OU2xX?qµ÷ô×^ Ní·¸©Îg ÝÉ‹“»áÃÈN8BlMýTU)Dày\ru¥ºÐ;c¦ÉQ5uÔg¸AÂð¯&\\yx6.Šð„¼/]§Á8šðŸ„ 2áPEÁ>¤7uÀ)¯ÂÅ’)3Çïó‰|M81ˆw`\"z eŒÃþ›ÿ¼R»8„›×à ¸ÝÀyîð+]9È\0IžJa1Wj±>úl­·Ýúîu=,Uy8'¿4örtÜ-_x¿WS‡Màõd²¤ÅPáÿuuòá‡¸­kaP=gƒààÐHB\$«ò\\âà\\¹5Ä“Ã™Èðà+á‹¹[Êþ+î‡ÂW G‡SÈB9p¯‹àtã„¦”dÕrÃrœ!ånâ^\rË–*”íŠ¼­Üï·¸E¨‹ˆ:v-/3·1íÇ9Ãr	®vBÍ½þg`ä¬9oç^\\JÂ1	Xè\\û¡ÛÎèÆ#â(sÏm¬‘ÜØ†÷ÌíÆL5\\SR¸EšODóPlN£à\nÑP·€¯‡Ó\\hBd#ÅP\"9ÝˆFØSôK”9\"0fú,Ó9Ètg£}èözÉª&Ï6Mî-£F¾ö)uIÉIŒÒXÊ_Fp­Áp‚H‡\\’#Úw¹N£š¥¡ìäjb\"mˆl?\"\0½DIIáP	à¡P–Ý€V0\0ÍDR»Ýþ€ž†è¢ep	!Î³ÔF“­Â×!9ôÇA€À\"™Ä*BObb%¬bg'+‹KÙ£12½‰Š½¾Sª¿×ZãÂVÂ-m1ñë2¨Býü®tï!=?¿Ð\\oõ\0—îÀý2 ;’\\Ä—\$ñê]Ó+4Ù´8oõ“Ìwa'AŒú†ˆú&õoŠ·Â8\nñ]HÿçÑä§ù[ZO	i8š¾Àc w•Ûð\nûf²*€´j=yùÍò¸yco\n„IyRL\"•Ý«\0È]ŸîðŸ²Oe»7³üÊ/r`9Iì‚³ngˆîyh¹Ý!	†°ýäÛŽ?¯ßÃËÓÜNWw²øÆ‘ÉÙ‡«G_\\u#ØmaÐÝ‚ZOYÂ>'>Æõ°uÁ)0#ˆÓSAÅÆ.zp·eB>[ývi£*vOXüØ;þ¾¹Hfñ0®ÎåR÷„");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌÐ==˜ÎFS	ÐÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xð¸?Ä'ƒi°SANN‘ùðxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\nŽ?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYŽÌèy6GFmYŽ8o7\n\r³0¤÷\0DbcÓ!¾Q7Ð¨d8‹Áì~‘¬N)ùEÐ³`ôNsßð`ÆS)ÐOé—·ç/º<xÆ9Žo»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿŽŽpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êÝê{n7ÀÃ¡ƒAðNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sð\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+ŽäÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XÐ]µÝY XÁeåzWâü Ž7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Þ3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ð`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆÞ±ÅáÐÝã&/¦O‚ðL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ðÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Þír_sËP‡hà¼àÐ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàýUþ„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšðÜlAüV…¨4 hà£Sq<žà@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒÐÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯Ý¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ÐÒ\nÁX; ‹ìŽêCaA¬\ráÝñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\ržP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çŽÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëÐæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàžœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gðÒö]«ÜyRÔ7\"ðæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!Ýf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ýøæ8PE5-	Ð_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²Ý‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âÐiTð1ªORäl«,5[Ý˜\$¹·)¬ôNô\n«ž[Ðb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ÐIŠCË\\ÞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ÞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Þ¡~¤M½ûÎß!áEt§ÐùP\\èÄÏ—m~c½Bð\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿á|9Þ¾/–òþ¯Eúï4æÊ/¿Wÿ[È³>–á]ÄržÊý¯v¹~B£ PB`T¡H>0¤BÒ)ð >¸N!4\"‡À¦xW-ÅX)„0BhA0à½J2P@>ÈAA)„SÎôn¼ìnìO˜Q¢¬ÇÎÊb®rõŽÔÒ¦âöàøïhèí@È‹’î®(–ð\nì†FìÂ˜ñÏ–øÆ™…(ìÎ³¤ÛP\0÷NÂõo}¯‚l«<ønÞø®ˆâîlëoq\0/Q\0of*Ê‘NÑ½P\r/îpA°Y\0p\\ãï~³ÐbÐLh °!Îã	ÐPöîd÷.¿ïy\no\0áÌËÐ¶öPptùP¡ovÐ‚knŽ¸\0z+æ›l6÷°©¬Êø0’äð¹P½oF€NìÏFô¯OpýàN`ÜÐÖ\rogðá0}PÍ\n¬–@°”ö15\r±9\$M\r \\©\nggìÀÂ Ø\$Q	\r‘“Dd‰ÆÊ8\$¶ªkþDâjÖ¢Ô†ö&€ÓÀÊ ¶àbÑ¬˜ê°¿‰›	ñ=\n0ÊÕÀúºÀPØ ~Ø¬6eö½¬2%Íx\"pß@XŠ±~«æ’?¬Ñ†Zelf\0ÒZ), ,^Ê`ß\0è8&´ì¨Ù©‘Ñr€© ©ÃkFJÂÂP>VÆœÔp¨²8%2>ÂBmÎóØ@ä’G(²ä¨s\$Ž dÕÌœv†\"Èp°wÇÆ6§æ}(VÌKË ‚K¬L Â¾¤éÄWñöqú\r‘þÃÌ¤Ê€QòL%’PÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³%ÒŒ¿DÌMü À[#¢T\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi2I\$\"@¾[`Â¢hMý3q3d’þ\0ÖµÈúys\$`ÖDÀæ\$\0äQOf1ƒ&‚\"~0€¸`ø£\"@ZG¼)	Y:S¨ê†D.S%Íˆ’ Ð3¾à d¹ÀmÓU5‹æ¬ó<£SÒSZ3â%r “ÎãÆ{óe3Cu6³o73î—³ÀdÀL\"àc7ÄLN ÜY Ê÷k‘>²Ž‚Ç.æpäì2øQôÐ÷“¼åÓ3ÀVØ°WBðDtCq#C@½I”P÷DT_D´:ÔQ<”UF²=’1ô@\$‚‰6Â<cÆrÅf%Ô¬,|“27#w7ÌTq´6sþl-1cPÕmðqªÊ\n@ÊàŠ5\0P!`\\\r@Þ\"CÆ-\0RRˆtFH8µ|NíÆ-€Ædòg€‡Ò\rÀ¾)FÆ*h—`ö €CK4Ã1‹ÊkMKCRf@w4BßJÁ2\"äŒ´Ó\r1Q4É2,\"ô¤'¼êx§Œy—R‚%RÄ“SÓ5K”¦IFz	#XP‡>¨âf­É-WX\ršÜê¤pU´ÕDÔt&7@¶ÂÑô?’©ÀÑ ªµ£}O1½2†‡2Õ#UK*¤)ôê¸‹Œ0o<> ]HŽš„Æ¿rè›LGNª›ê˜W%–™M^’Õ9X:ÕÉ¥N”òÕêÔséE¥­@xy’(HêÆ™Md×5<52B– ð–k!>\r^J`‹IžS N¡¥4'Æš*œ*`ø>€—`|¢0,™DJ£Fxbèµí4lTØ•û[¨§[é•\\‡¦¨Ô –\\{­Ò6\\Þ–’ öß(#mJÔ£,ý`©I³ûJ‚Õ­ÊÜèlß ûj…jÖŸ?Ö£kG»k¬T9ÀÛ]3ohuJ©ê¢®ÑW•\rkÕÏ)\0Ý3Õ€@xè¹,³-Ê	5B”¡¶˜=ÂÔà£#–gf¢¡&Üß·Z`ä#ÄoíæXf È\r ìJhô˜“À´5rqnzõ§­sÁ,6’oÓtD´y‡äÂb´àhþ—Ctn˜9n‘ í`§X&¨\r'tpLž7²Î—¤&—¨¼l¬Z-Í¬w£{r—¤@iUzM¿{rx×—mÒSBÀ\r@Â H*BD.7¹(Â‘3XCV Ç<WÔÑƒÝ|d‡q*@”þ@ÞÀÊ+xø÷Ì¼`á€Ï^™Ì˜ß¬__•ND­X\0Q_D]}tõYÅúp¦f€wÔÚ\"â3øz¦nÂ«MYñùZR\0÷¬Q¤?¸{†M3†•£*×1 ,¨\"Øg*U¡*²¯ˆÌ«zÒŒW5NV2O-|€¾ÉÓñ,×]‚B×dí\rŠñ/OâtÎøÃï‚Ì0‹xÆ†ðŽ½Ð®OCë8Þ-0Ò\r”ÿ0à·õ„@]¤XÌŠÐÎð\\\0¾0NÈï£Ñƒ4ëi¨;ƒØAtê¼8X—x¤\r†…Š“‘ìÁ‡øÝŠ×Ê7¬<ö@SlÈ'LÒø9WŽ ÊÎ¸òÏ¬ÖËì¢ÍÄ±•ùRçÌðÌ\r¾Ï ÂÏò|ÜXÐÖa÷ø7y€Ù\rwe¸Œù„Y!ƒ˜Eƒù’´šÂcRIdBOkË28[‡mÌJŒ+L ÈÅÙ¸OXpføÓ9ÑDÏ›·¦ßªw“@Ë“—Y—…¢Õ÷\\yäAcÙ£ƒXgš™%šôó’Â1“ï“j	œX†9CcÝ‡àR¡¹‡”QFÇpdÒ= C˜÷ýš\n\r¥Õ‘ÔóšdjŽÙ«’xE¡Â2FX§¢x_¢ØÅ£Ú5£™—}q¨Åí¿¤M%¦ZM™:\nÏzWšX7¥åí¦:ÐZi¢npY;Žù>Ê˜í£ÙÉ†:6Ú;£ZÎX0ƒ“Ì¢#ùýcàMyU…i2,q¹FËšÈb­J @ÓgGè|4ógÈÒmzWõäÊ	¬)™Èr|àX`Sc‚Õ§ÀË™„óc—¥‡û!²B²—±”»/}{4JÂ\0ÒÃn»Kuz @ÌmÚÑ®€ß­yÍžÒyÖ\"º)u¹ÊÂÙã¶Yç˜s·c¶yë‘¶š‡··y¼—Ž¹7Á|·±|—Å{Ï˜*)°Ê4Y`Ïµ[v¹‡¤­‡û^NX•†¸‰†ò‡W”©û·‚7†;¾_‚‹*x™ˆ¹Ú\rùß¼ß‰xm+¾mû¨Ú™	´»¹‹\$\n¾l˜);™²„|Ù ßÚ™¡:œNÚ :„‚Š_È8N³¸Uœ5;¨p+U–L‡ò\\‡9í¦Ùñ“›¡»ýO:I’šû zQºœ¡ƒ¡TëšÜ)ªXG¡æ»ÅJ{w8“¾ûÅ‰¸UÆù\$ôàÃøü›PxTY¾pjh·¾J×Ã€›˜JÙ{‹Âð@îÇ‚³ øðZ‡ÌÙs•¹hË˜ç–XÌ\0Û–lÓ–ÌàÌÈÎ¸Îçìó‚Y}˜Ÿ®ü^Ð@u2ÀSÚ#U‰ˆ;Ãˆ|¼¼•¥¼™P\\ŸÊ#ùÊ|ª<®Ý\\³À›žJÛ‚,öœÀ•\\ÅÌšEÌú…‚]WÍlÁÎ,£ÍìÉ–<åÎŒÛ>YnÎ),Î™rÎüûÔ¼å—âº]Èý	ª\$õÐç½Íq„DJí=•Ù÷•XI-ðÅ€äÅÌa‡llÃµ]\\“w(iÜCÄ×ƒtƒ‘<i-u[uVŽDÖ“¸QÂ¸€xb€kæLI­.kú›@ÞÀ„ÜN‹“[ñ¼l<o=-]1`è”¼ªdš ÜMÌ7‡@Û%C=]ú›êÀ/|-àÜˆ¾ÉÞáqÃã•âíùâ*¾C¾òO~ÊQâòså`·ç(âòãDÉßÉ²¿à[ãþæ>Éká¾R™uéÞ\\+>)3íûPÊßP§Óí6ÓËM%º¡¾pÔŒœÅAÐ3qmu2ÖfzƒÛ¯ì4s‹	´í`ÛŽ‘ì°-kÊS%6\"IT5½‹~Òì\"™íÂUt_	TuvàÖ½ä¶Yw¤†­0I7¤’L‡\$ú¿1Mí?íe@3Ûq{,çÀÏó\"&Vi·àžÔIŸ?¾µmõˆ™¯UWR¾´\"uiT‹‘uƒq­Ÿj\"•GÃËõßò(™ï-½‚Byîê5øcÝõ?Œàwñ®°ëTúî’`ei¾½Jtb‰gðU‹3ËëÉå@öá~ê+¾Íï\0MïGè7`ùïÍ\0¢_Ô-ùñ?\rîVÿµ?øFOÔ6á`\no†ÏšInª¼*pà™öeÙí\"T{[Ð“p^÷ä\nlh@l0[/ö„poóJKÖX“ñ€ü<ª=€9{Ç¾6ç–<eßAxãÀùÇ‚¼Éá4x[ÍžLò“~>!åOQxš{ZVFÔŽ`½éÈ~Ižß–“øL)Q[ëTûôM›àþT²*BC¤~	æâ‚ä\nƒò¡gÃˆÅ…p9zKÉ–ówzO9di^›'‰+¹ßïDz4ägHAº¯Lyô¡\nr€<IêjKQó¸Snô==\r.Âo7Â½Êé%a;‰kÏãmX¿›Zi%P¨iÏ\r­€¾ýµ/©…L`pR0¤Ž&õ—I (Øá\\.£*m„*Ž(ÚÖŽõ—\$ä†ÆÀ÷\nw×ŠÐ¥…8a“\n&´Â‘žÍUmª MÖ¨P+\"Ly„ó?¡M\n€2’	L\nbS ¥NäùÇr¶!w¥jw`¼Â\$îôƒráè…Êaáv±^Ãq­F‰Ü6•Ó¨i*™Ÿæ„ì_xõØ\n‰fðIê:B&ù6@É“KED¡úú·QD(V`.1\0Q\$íøF­¹H®’Tþ€zÐ†‹Ì\rªjkzM€ÐÀ®Y™À(61€”x‘+®%dj¸Æo\nÂ¦¬\rg°ï\"ÉŒ´ˆ—?Œ1- 3hÏXÖÁ)åyjÃ5r¢N±#Q¾¼Š¸w{_þ¡øG)ÂÎÙ1i‹Ì íç¤<Z‹ºpX³¡Ö\$â?¥=%.´€Ò®&¾­%\\±8w­!¤µa4œ<JB[ÐÄº¦u4‡%êŠ×47‹Ä%gÑä&¸€Z(@	€E¢{@’Ð#¥–2Šh@Œ#ñŸø™ÑŸ¥£@\$8\n\0UŒìjãA(×ž2ÀO€Š8Ú€ž5‘¸Œ¨@†ð&'´\n€DŽ\$i#ŽÀ#Ÿt\n PŽTs#]P*	àDÌuc› PÀO|pc—øËP	ÞŽ¼i#Ô}ˆæ:<ñí\0\0¥ÀˆÅ¥lo#}ÏFÜR‰Tp@„À'	`Q¬ycTp(ÆŠ@€eh\0‹˜Õ8\nrx› cþ<`NŽˆã:)DY\n*Dý‘2{dZ)A‹Ú4±²¤€cZLð2ÈÊ<ñò\\Œ\$r#ˆþÆö7ñÁŽ¥°!û€´ü€Nª{O¼@\$<	Ñ¢ðVƒZÒÆž52.Aù#D0 \0´ÀI¸û\"P'H	²_)¼x@Š€*úàAOh£hI)I²L1¦’ìƒäµ%áJI‚B‘þ’g¤i\"p÷§K2}’ä–Å(CËÉÍ=²t”xCøÐ&FÄ	r“ÒoÙÉ@@'”ñ€%	 ÛHÞT±áˆ	ãÔ˜:=¾)\0.ñ°]Îâ5 .ðæõ(pÈÀL!à8­\0ˆ¹	éR\0L‹YaÔbkÔ°ˆ6Ä)Y·éˆî •Ô®£	h³zZ¦õ±’IgÎVO3oœ­Lgà3ËY2ãÛ‰ÜDoPË`3Ì¸ec-‰r7í‡2Ô—Dº‚Þç‘B¼‰Z•¼¼%å/I{MÃ\0pÐÀÌ.`äÊÝo*•Ô¯%T€ý\0 &–iR\n™+Éo€ì©–\rÀ^2q”Ë©\0\\¨I@‚	KÀ#peC*!>€/á%|È…Ì’ÁÞŽüô\$è)çÀ§1P30(\r¢+\nZÆzž„))\0*®\0kà€ÙÅ2¼–Ï…(–E86å¶s—tºf&”™Š¡´“+;”Ø76&ãK–_Ž(›9fÓ,@-ÃÉ4l\$Û‚e7\0ù±:l“LÝæM7.\0ˆ³|›ðo–JÛ©ÀÎZ³u•ÌºŠ'Èy{ÅH,#\0vU@9!¼¥	Ñ'†¨&„òGôøß@_-Ù¿³ºt;Üê¡:©µ€²u¡<—ˆL†iÙÎš_ê€Ø£@U6°Îù#ä_€L'~ùæ/Öm`\\Të']=Iäât°Çž¸Âà)ÔÏqùsÉ9Âa<RPÂº|tžút&5°äs©lî@¾	ÞKÆwS®èlÍ:9úN®wSø|·göÉØOùAÐŸ<ë‰BÈ€\0/àz@´	ÍÏÁ•Òå†=?=iÞO‘ŽkÓŸ=\0E@iâÐ\$B× hO\0Á>DÖP´ó‹UäçÑ†j¥HìÂ9F¬BcCi‰é­BwMŽ§tÓx€PÀÙM‚?p“®=—äì8ÜÔý‘Ïlg~¨˜tÁa©€%]b\$àØ\rˆr„èÄa,6ÅtŒàW)Ž\0U¨›F˜	|æì“¢ˆvh¦Qú*¥Oƒl.C\$À\\ ÐÖRRÌ<lcù™&Cj3Ñý%ôZM¨öÀz9GpY’â¹£\0i\$Dµ‡d‡ñzt[')[)Q¤ØêÞkÁpi0·#cÃ¾‹ôNE¨ô(ºC2L	Æ@9hÑEJ5Ò,šh{&Jzö0n€vª©>[€j“£Û[œ]ƒK•ýRîJë>.;ù¨íF=RÚŒŽ<råÓM¡=—Ô’¤ÜhØ^Y\\RmnËÐð Nn*g‘¦ôÒÅB¬·5^QÒ‰@O¢°x¨¡HIÊT ´â9½)(‘œ&µ‡}A)PÊ\\/êô…_Õ!ÌH þÚ‘¥¤ù\0éBá­\$z4ÓTYu‚J’v\0êƒ”¨…%@æ32\0Sôm€--Gi@¸úQÅ%Ñj©YÝ+FuzlSž—”ÜW3ØÅ·OrŠU\$EÔè;¹M©¢\\€Ô±Äu/£õjeQªš¦§,#J¡ªXPÔ<UH•TVVé#Uê™ÔUbˆOU´DZ‘â¢µ£Í8êÕUJuS «À‘g)XDZK‚•¢Bî\n¼@2Š©ìx@d&ü ½eÜ«Ià@ÊFwì¬8“©\$Ù'IºV‚V†U\$²ETÎ_ð*ˆd¸/áFCÓYdp§vGƒ‰3‰ ‹Ñš‹L^(ù`áj”÷2S¸ºcÛW¨ÜJQYiÖHB”£ckœRè\nþ²U\$jê\n„ZAi€î»¢U*wKDRxW‰LÂò­ˆ€+fÚŒ@ã¨A4¢àGz…R\n²5‚b¬\\_²Ÿ ­ô‡¡á0¼C@¤\$X\0+Å]¤ÑÂè\"?‡n¦€+QIj\n»x\r€ôB`S¸âM‚ÈÑûŠ\r o°@‚À6XÀ\"{±\0µãb ¯)–ÁM¨cMðW ä¶D_áÎ±Ðv@{cÐ:¤®%[%‰C²þ1¼Ù;AÆˆÌTn› \0º a²pážóe~ÙU5 s©V†Ýe|M9‡€9 hË@æ¦\0êÙ~É@.³	l€›¦É\$?³idÀ{fB†ÙF0VZn@”ìºSt‰NÍ\0oP™ÃchGóX^V}Û´°’ÓZ,«EÄ€kÂ\rhËGDYd\\zÓm\$UfÚD¿ö˜Á­ë É€²Ó‚ª\rªë¦•^CRÑV£*ÕÇ¢7õX‰&ÓöÁm7eëYÚ\\«V¡4Í®è¾\0>ìZfSÙÆfWJÈ	ÆÕV“\$EíukKP[\r¤\n±¹ÇÇ_q}Lø««£êÁžÑ}òeM£ ÜmÐu4’V°Ý‡RZÜˆ\r‡®Á	k\r]a“)`ÇX„Bv0±2æÛ‘^;tŒà†À=\"àkƒaYBŸ8J´_«Ðk)f;ÒF†–Á±U„ÆÅ`¢GWN¢Ãw,\rq’)\n(	Ðá´e¼ëîR53\\NŽW·…Â®EàØš¾¼õåS5ÎÊBþ;ŸÀ‹W4¡J	%]5ÞÃAõ°àpmï	ËÜ‚ßÙ\$•È.-KØ!sCçEtî+Dº;›ã7 ¶ýƒêONË²ªäcjO¹PKFO\0Ýž(Ð€|œ…‘°k *YD5”äŽå;s@6´@ØQU—\"Õóó\rbØ?XJÅvç·n¯AH®äoPS\$TËpbj1+Á‹¢f3&™@Ê€Qw8@¡‡ÐÈç;\\ƒã¬ˆ‡¸Ä‰NëÙÞxb#Y½¥¯`:‹ÒËkB¨8NúoëS³(#UÝ©ý(ƒ³Y;É:×eÄ¹…ô­±kËn¿Žå e¹Xí´ZîßMi&é¿\rõÇ^»ëÛã€d\"ÔW«\r~[aV' (#Y\0Ü}`ƒW¶.u|4V§*WÞ²l:¾Ý÷mnõ\\Üà™\re¬/£ikmÚÖš”ÆUEü0#j[pæD¾®/õ^ñh„f½WøÀ¸ïÏ‚L\r_®Çá¬¹-ŒTX [*¸¢q•n\n2Ù*Ç–J±ý’¬…û\"YüvQÀT£ô2IÃß·=ÂD÷ƒGñØ‡õ¬KXK\"ð½ð£÷E)\nYmÆ4!}K®_íÂ D@á„wmá(\$@¦ƒÆ\$AŠ”jÊ+Æø\\‹4Z½Ä°vÒd¹SmÅXÚ!ho!F0l†UËzÝ8Xn#\\Íˆ_…\"Ë˜`¶âHBÅÕ]Ú3‹ü«¡\"z0)7‰‚\\”ÞÇâÔwñ.…fyÞ»«(£ôí²‡¸ pÀ0´¸\0XªS6+	*\\Q’à\r\"ÿ¹<bñ°áñ\$tŒDqŒ\"‹ü	?ð¬ñiŒ«o¬¥],ñ!È{€g|ãg¶\$(ø¤<v„…xáÅð¡Ž˜£%GèHõ™ÄœÆEŽ\r ÒX«Æf=„Xà)†ÜQKŒXqîÁ:N_¢ÿ5².Ö(ñÃkµœàgBZ768C‘cr­¸¹¸²,<Ã#y!Èþ\rÑ§’ešWtEÓZb\0Q‰%˜bÿTèÇ­ÿûrp…·\"Ä(û±A%†`xba}P™0vL1&>0þdôD c<6P™3°…‡f¨À„åVD~íÈÊ µÂ9b\\IÜ,~ïÈ\rxs\0Þ‡ÀˆaK£8CEšÈª+×Tl#‡Ž‘×¸äï«¡°V\0òå‘|>çŸ\$h®G8XIÐè@\nTð…æ¡™æ\$Ç9Œ,íBt/£†šu@sž8ÓB…7€ªsy˜¨€Õ™¹ãìþ‡‚,è]çßDy‹5–nže€àÆòÎ¼þŒ9)žjÌ^€á\n78Y¾<çU<iêÒwùÇÎH\\Âë˜êC…×4ŽcA]ïXŒê8)\0lpSŽÂCgCM`QÆâ¦)Š¯lè(ø.'¤¶=a­Ix·sÃ; …Ü™ß¨TB¦{ÞÊx¢àp¼ÐpáU¡¦lô¡§T Ë2“´>eÏ™¤fu99 Íåô\"^ìÖ75ù’uižô'@h]L9¨›^†æ×¡Üñ:»D9áÌŠ0ódbüì¹—6™Í¶n› ™³»7¹¤Îs\0_œ •ç2z¹Î°¾çÙ72N¨Q“º”ê/ 3¼èA:žƒtHÅó=´‹Dú=ÍÍ³y?£Ái8SÈ¢ˆ]´×¤¹ögCIîh~P£t§Fé^uÂàÐ5¬4· Éäè;Fãu\"þ˜ô+›yâ•?úÏâüóþ\0èÖˆ:ÌÊ˜u\r<<ËÐw:*:jÓå: -Ðƒ8IØˆ\\u%›J*wS©¬Ô¾cõ3;yúê‹KÚ6ÕHƒ‚¨œÎêKámu£æúiLùÄÓTôô¦Ý%ÓN:NÎ‘àµyª\rbfšuYª =õu«E3æÿ4Ú­WN…³>mëInôô–x&Ð„ð'šÕ\0sˆoŒ×k_RzÙ^È{u}©ŒÛé—7zBÓF·óƒ®-di¿YYÏÖeñµœ 9kCHšÒnµ'ŠÀÂ€ü¤×–ª5è´Í{ê»_:?Ó6¿5‰®\r€g/`ZLÓ–t§Ñ± -€è´Ðqªµé£÷|\"ºG\rm‰d<z{)¼B-\nÁIN\\ñ\0¼AÀsx\0žÐ›ÜÅTm}Å÷²í:h™c°NÒ8ö­`ìøà/°À°O\0\$0K=€ÀF\$y\n\0‘´ -ÚPvCx‰ZèKIžÙO6…c­›”g;;±FÅ›µ½ í¶4@J_ˆ@§Ÿá\0©€Å€¢€^yP­@OÍ0âv‰9ÑJn ‡Y.âC]¸Á”öp…ö’Áîs‹ô~â·A¸íÒXæBx·l¶-Ôîoq­ÜþTw`hmÓvÄ±gÆîw\r»½×nût[±Ý0EÀó¼3ƒxÛ«\nžï7¼ <ôùn0öèÞºxÑmiDÜÀ	÷Å´\0ðÿ|»ç²ŽúöŽò)-·}ÛHÄé#·æüCÐGu0Ó®þ6®}¬íÿk€RÚöØ6Ä\\ôí—z{ÈÝîãwE¹\0007îHû”xq¶ˆ„„;åÜÖñ÷;½m×ð?r\"Ñàžåx,þ'Ëƒ{û?w©¹íëð;qü#ÜŸ	±´Q<ðsu\\áŽèxgÁpSrÀ/58u»®ï'†\\à—¸NàºÉ \\Gàöë8•Ãî&q†ÛD‡*ø©Âþoc‹<5à¯\ræ.‰Îš»iûq×¦­¶é¿ÒÙ¼\ràgÅlïÀ^\0˜äAÀ-	T‡@Ö6]ü§û\\\nîàëÂÀ(CÑ¢oŠsÑq§AÆÙ{™|˜Éú9æŽs¸h\rSšiöÚô6ÿ%à\"g1„òAõÛz„EžÜ÷ŠØ9òå|	¶+Ê ŠB—2yäQøÎCÆM\$%sL9©¶'Æ 6ôdäm\0†H”	™!˜?(\0œ >sX\$œÙxÀeÍ^n„ü PIù€¢ *\0ÆüæçG6J¾Q‚/”éƒhV[žžl\n(E®¦ÀÌsqÊór	%\0ðÈ•Œtfàwå€ª)æqdáY8Hþ)ð¬†…<à¸ä{a)•àEØ@³@ùÄSÌ‡ œèØzW¸P!‰g¥á\0âux;Èœ¦	œÑ@8 Þ)ó¦ |éÀÄ„J®.† üÒºâ®¼<N•NJ]>€ùs{‡ó¤Œ\n¼Ø[CÕ¾“\\¬›â¸¢ºÆ~`<Ñøg©\0zÎ–‰2t–ós\ro\\æÂŽº¥§\n©mãL×n¿uå-IlÎ\0vyüÚ>	LÆw1è”Ä;ÕneÒl¨É5`ÂœëŸ‹2Ï@:L˜î†¨dç\0\$°§Ã–U°>]l\\)\$C\nQªŸÌø¦óLž€BÅ†í}‡{1×¾	;t#?á {L%1OÒ/¸€vSMeð‰¥®C×›\nË¯L<¾#Óà•@b?tºM 2t¹*ù^(ý‡,ƒ;ôÌ7˜Ø™Ï[yøþ?²¼‹¸x ±‡ÐÉ+¨3½A­˜uˆcßÑ‡g}ý3ðÇD-\$ƒt»²ìø³\\æÌg\nû±\$”\nñ*‚:(ÙQøXdžï~ÇŒ02x%ÝÞè¦ÂØÎG=ð-Á…:;C½p…ÞoÀS}ITQOô|#€pñrZ\0™Úòø“µ„du7H/6Ž…ÍM0Æ=G@*#'Ë‘ý†GG€ü«¾œ©MÔØ’Áò:\$4¦à²Ä¾G0ÅÁ<·Ü™÷¯&A(Å¢b›Í¶G\"yçòÅ@Ç…\\+ç¸ˆ>X †@“âÙùð¶Äºð˜ÍÈÿâîÊ	þcËð3Ò <ùà+ d(Â€Äú?Ò!+Â¼WêQñOzkÒA¬Ý£‚3éQ\nØ!e'9=Þç—ŒYÞKÓ©©³KÏ\"ÖÔ¦þEÆvq¦/o^ü	®ï8DEþG€û;8Åò\"èo7–Pød´EÝ‰ñ\rÜ¼8¯{EDž°´}	(.â”Üš¢Šë±Ä\004ú\\‡=Å2·ê?H¿v·Õ~(exå=~#€>SØl„÷ÍAy• ŽSÙ|§³ïœŽ”ÉÞ²2ÅÿââF†¿ ëÆèA}Ñî¯l,’C l÷¿„¾5b}ÙãàløÉÂñ¿ƒt÷Ý§ºUfWß6¥AgW½„%:”g·%b*öß¥Ä¿ëÌ¦y8.ËâfI-ónÃeÜ ¾z§’}fQï¦};Ý%×Ô}eõ0‡x¸BRõ¥:>«è›`ˆ”ÐeØ†[z}{êªÓŸ×>¡öÏ·}gË_pú¿­	UöÏiU¯×ZÊ¶VØÒû°D”Ž<;Cb;ýÅ•áüEÁ|•õO-~3ŸŠñwä¬K÷ŸÃã“é\0tgÎ!žÓÈ~cäsV}¡Â²púþ+õMû¯ä?WùNc\rÇö­ú¨mL,Ól{äe(¼Ørÿ`Ýaè!È'¥ÿ„¿Ý}(•Y1UŽ?to‚Fˆùù!ýÕˆÂh|ŽÿT\$Büoö¿®åpäXhXäýè¿Ä\\~ê°€iÇ€Õ,³dôÃ‹ÒþµòXJ†:pmÐ°AµÿŸmÿò!(Îhƒ²ÃÙ@:\0²u0\"à6,ªu0Kï€69p>®»¨Ð\"È\0(>Øey1€ˆ¤xYÁ£…£\0xBnÄ€ææ#Ã€<Š?\0#/ÂÀ²œa£;u Û‚½\0\$@2À`O 2@`ù;@Y >€7@³ÚÉè¸@B*¨«\0Ú3ã¿åÑ¿NX+´®Æ?6ìHçà:,«›±Žõ?¯Ä\n *¤ÈÁñ#ËÔ˜!¢=Øf[¬;«¢Ã¡½Âñ|L]£˜¸ÀâðÛq®ÿ»÷[”á‚–N\rª%k «P0§'<6º(DAO€Œã”B­¼nèñt/Z£rë»!1^Ï¡ÔÁû€ØäI/u…±C !k½ÖšK×`Œåû\nÀ€º\\•+Ìá<£ÕIïÏOÁ^gD ‡#Åc®áü\0Ë¹µ°Z”	£ÃpX‚8Ð*p3>ø \nNÔA„, ;†¨ïcØ¡œbìØ\"ïŠ>%P!IKTë¹JÄ·Hú[ÙÁÄ†õ«&€äóÀpR<û»çfº\\¹Û‹ «ÎùKÛèÀÌôÀä(V¼Ø;\0Ú‚y•ìµ„êÞãß!³Ú)0°x½ò(ðPz@jÂío†„„Ì\".Ë @=98!¤Aö`\ra€b‹äÏ69è\0E¯’·\nkä%ñBHøä!P“€Ù `Žé°ì\n›§¯¬‚ß€š–*d&oƒ‚T3ä‘Áö%Säh”\0ñûäëB) 6B`RÅ!‡î€èé€ÖÂ623ép¬\0çÛ 6B6Ä9|@àº.Ëp@>(Vú@•\0Âí¸*a/ºÜ²T#&¬(û±[‚+¨¬0h†„ìÛ,¡O\0È¨Ï‡†»r\rc³À9\0îÂCêÏ™ÀÌ›¯b\0Èš9e/¦.š°ó¥C9ÀàühC.„1ÈöD ¡C:p„ª¸ç8\"O†¦”Y0=€†„üØ•Oõ±áÌ5Ð]Œèù\$/Ã2ùC/Î§™\rªÅ¹ð¬7’Cf¬.`9;+ ­Àº&ÇƒÙ\n“ AªéæLê¸\0002òõKùoK?pþ\nCÐ½¿ˆò1¿t(û«Ý=ýÐ6ðÒ¿Ôc£à ÝÂšýÒaÄÃá\0l¯ÝVôHj¯€˜ÛÏnVƒà¡ÞkÎƒ\næš¢>ÔíÌp½£Y<;l¾€ÒT:1–bÞ‰ÌèÄ–O\0Ñ}n€\\\n@Bn‘>˜\$#¥Á	¸‹\nˆ!‹Í„&A8BU&kg)˜P\rdE@úÄX ÐO¦;ÔË§«z–bðHBp¼>™ÀLàB*›™ÑDˆ q>˜ætD`6\0³,Iq\$DP£ÔJ !ÄX±DEÑÄb£™ÑŠ=ÜK¥ÇÄr«™ËD´ý\\CÁ¸Ä›|êçDRý\\Jàˆ†…8n1/Dk¬LOÕÄÌþ\$(‚¯\nÀý\\H¯:ãa‘'D¡JQ7Å´E±9ÄùI;=k\\FïƒÅÜFºDåûÛ™ŽSn¦E<Œb°E8%P¼ENñÌL©j†© E\0006;Ä¼0VÄ6À%HU»\nàZ/»X«Ä •\0 Y*…á³»|VàÌ¼ìúñ1dJ¹sO[&š2Z1	»*Š \n‚=²ŠÙu1mAñ#¯hºíÀòÔí)¶Q™_säH¶Àþ*]Ž/ø¤OŽ“Û àŸú=Ü_>b=!C„2Œë3Œðp½k’c^¸Ú°¢L\0¶\0ž€È†8×*xìÎ6\"@”À E›ÊoÜ‘f;»áf˜¼.\"þ;6ÃÊŽY˜X3¤Å˜†Â«‚Ðn;èë¸‘­èÁ¦’»q3,€óªX8^»Ä ×ƒ‚ô\\.Žûº\0¢C±(Ý ‚O+¦%P#Î \n?ÓÜ	A=ÆeÃ‘AO\\]Î‚ÂÛ¥ÄÛ=Ô!c) Jõ¨ºÑ>ÅÖ”B#Dí4do½áHAª\0€:ÔnÂÆŸx`  Ôë—¡‘5PÐø „4Ô \0>\0F%X•‰!;\\f‘4”2 É'°Ö;dMsècY@ú³¬Ìã—ÈÎ3¾@8w\$äÄ? \n`ÃªBN@ £€>œu@(ø˜\né4€‰P)\0#¤?Ø	oÌ(\n`)¤¢p[À¦#ì\nCQ×\$ ’”u@ À:\0'\0Š¹8ÈäGn<°4†5´fÑ[í3hŸ‹cÊ(HÒ,êé8±ÄÇ¢}!Ž¯ÓlrM7Ç( ÄrÍ\\¶Ô|J\r´šFIéâ€v˜ùÈ÷º¬¸ÿ®n¼?\0 (° û`'¯:Õ4pañèŽà=ÇÑTq‘öÇ!ºxÑÍŒ¼‹^ žFÖ¬€aT9Bƒ\rz‚X)ýÖ×Ð‘ò€^¡z|¬àÇTƒ±ÇGÜ<¼s2µªbu*€_!LÍ’€Û!\\p’†† è'’H*D!-H ÚK–áñ'ž,ëVêG¸—ûeÑÎHœ#»jcp6î²Ê@<‚°\r­Ú\0Æx\r²5¼Ú¹MÁ6Zãdp®7¶©#<25¸ìtŽ9\0Ù#£i#|#ˆ\rÈ«(…§\$:?ú¦\$`@Àœ*ä‘h×Ë>@\0ÆhWé	1\$JÍrJ‘+\$ù1ÒG¤\$ükÁEBþS4”Dt\0[Ä”ÒQ¢\$ÓþrXÉ\\0˜à¯5%l“òIÉc	à2W—S%ürZ1[%I£É\rd–'€ŠªÿbB’GIDQ—òHÉ¥\$èR¸¸ø°\0l¯õ%ˆ Â­’îè. ÝÉÀ3˜òe†ŽÔœòqIa%œ2tÉRÔ] øIÛ'L+R{É'džtI\$	¯ù›ì4³òX†J+KxÉD¡<¬	&˜PàîÊÝ,¡Rl\0Na`Ga<É÷%³Ó²ÉÀ_ˆPèÄ±%Œ\0005É÷(BF\"ƒë'íÂÆIc9è¨ËBþDAá<Éb\"Å\"\nÓ)Ý²Q	êB‘€ß&;’‡Ê,ïD ŒžŠÞØ%C&\0käùJšû|²¤*Tª-îJ1Òª8X\nÈ2a\nÒ	ZBò=Æ¥ë€Ø+H6²³Éù(°Pœ\0ækÒ`–ÿ\$H¹JØ­Ò´€N;¢ 8\0Z¬+—Cü©Òx%t‰­Ê³*›|§sÉÇ\\© äKéLœÁiÊ¡*`Y²¯#DTt©òÇË:ß,´ÍKD“UDÆ\$¨ãœ¦²µËO,t³’ÔJª\\|*\0À1Ï,¸±’Ø\n>Þä³È×xB1Ëp·R©KFá`ä!¹.,·òÃ¬,®°\$K†#Ô«r®Ë(Ôº\"°K¦åœ©ò®ËŸ*	(Ñ\$¾!ðYÀ1¸ø¤Yè¯1É}%»òº/.’RòK×(´²RøËÔï¼–28‚+I3\$ª€[.x!ªEÊü%ðD\"_K[.Ü³!_Ê¸¢D·¬,‘.ðt²ËK—.ìÁòÊHóÊI\n2\r„¿\"‚½(@ÍÓÌ6\"ü–.e†\0#Ð‡ ®É%ÄÊZ~\nÐnoœLJ°|ÅÓÂc',¯Ó…‡1KíyÌY1¤Çs¥(À&yÌf#üÆ³-%i-’Ê£--|Â’ÌL£<¶®€ÉÓ0œ³Rë8Y,”ËL´²R«§0”±³(‹0lÀ@ËüÁêÌ*ád½²ì¤Ã2è(³Ì¥*¨g³6ÌÌÁ¡QÌõ2ÌÍèÑ\0Ä,Ïó/M£q¯HA‹3\$³7Lîá`\"MøÌ\"Œ´Î€6Lí3;|¨•‚¡Ð+\"°Êç4¬Òó>7Ë,\0\$ÁK	4,Î³/¤Q,k’¡–bón@¯JÈ0˜ORÁƒê:øB\0ÀL!)Ð)Ï4aOH#E.\\Õ²–M`lÖH…5ªI\0:Mq4¤×sGLÎè€saÍX\"“UÌR&¬W’µÀq.\$ÖÓg@ƒ6@#óeK„à‹Œ³iMDádØ#‚K¼“â@ÍÉ5œÙsO¦•+Ãç³7PSÍ’«Ò\0Æ¼=87óTM-5T–P2Ìa6ä¿ËÿMøDÁ±‘Ê÷+ì¦ñBÊt\\óM\r2™DÐHîdÔ‚Æ|ï#ÔŒÍšÈú2ô’7I>ŽCL¤@SF²ôü±3\0ç#P:4IK»ÅI#ô°J—7¿C/M-4Ñe?NŠaÓ3„°	J?ƒ]Jj¥ŒsD’°’r‡-é\"ÃÉLLé²ýÎŸ9ôÅC”Î¦#Ð­,Ÿ	)/ÌéÓžÉ:”(Ë\nÔ!Ìí“±NÜäæì\0Û'øYÒMÊ·;Ìç2ÒNÍ;ŒèrêK„à.‚N¹3äés°8Y;„ÒsÂ¹g<<Ø2°Ï,Ôð\0€Î#<ò2gO\$¤çÒ§Ï3-”ñóÎN©<ôòfÝ,K<\\ß³Æ‚ ã˜­ ¬,Jkï„\n¤òÓÎ“+œõRNLë=DéS¯Ï7)¤ð“àOy=”÷ÓKOG>SÎÏw=dâ×K#¢?“ãO¡>ø\$ÄÍ<¤ó0O©\$ŒúÓ¤O>úpãNñ#St³¾J”ôSœO5?+Ìb´ÏÐ´ýS¿OÚœç,s˜èÇ‡\rOjSÌûÓóI#;Ìý èO×+|Î³åºbÊ1!;É¡@þ4Oé@4þÓÌOÝ=\$ÌÙO%0L÷ó®²ç-ÙNI8×9Š€†‚\nLìŒ­»NM:\\å2@N—9lÒlÏ¿(˜ ³úÊ=Æ“œ°ªøÐ!;ÄŠ´OÙ<Å3÷·PãR‡£MÎBcd‰à÷ÊV2L¨À¢¹4pknP++—€£ >\n@Ã¬²Lqé\0¤\0,Q‚‰\\\n`[À\"€¬*D€ÂÐ¶>À¤¤”ÌzBTÐä0Ô:\0Š\ne \$€ŽrM4=¡l\n²N)Ð÷Cpú480ðú\0#¤ÒJ=@&ÐÈ3\0*€C6 \"€ˆéØú`#Ê>	 (Q\nŒØê”8Ñ1Ct3ECˆ\n`(Çz?b7î¸\0¨È[À¤QN>›© '\0¬x	céŽ¨ð\nÉ2ÕCpü@&\0²Ð´8Ñ\0ø\nä´¤úO\0/€„ŠA\0#Ðì@cèPÑD ÿTR\n>´ôdÑBúDTLÐÆÌå©ãÐÏDt5PØ j”p³GAoQoG8,-rÑÖðÔK#)9¥E5´TQÑGÐ4Ao\0 >ètMÑD8yRG@'PõC°	ô<PõCå\"”K\0’`ü´~\0ªe)8PìœvI(QµGb6)\0±H\r48Ñ@‚M)9\0³FØtQÒ!H•”{R… ôURpµÔO\0¥I…t8¤ÒðúèÍG]D4FÑD#ÊQ+D½'ôMÈ•À>RgIÕ´ŠQïJ¨””UÒ)EmàúTZ­Eµ'ãê#cEÝ´£ÒqFzaª¸>õ)T‹Q3HÅ#TLÒqIjMô½º…&CøRh@\nT›ÑÙK\0000´6\0ˆ¢IèÏ€“FE@'Ñ™Fp´hS5F\"ÎnÑ®M%aoS E)  €“Bí\"”eÑ›D…3´hÓAF­4tl€™J´ˆ\$ÏCŒwHÞ¡I<xá\$¥J5äÑÿ`*À\$º¤`û1á…¼ŒÝ\rtÛƒ\n?8ý48ÑûI%'ç€ªjCAªS¨½‰<#QDõ'6\0DÈ”´éÑ¥-àÌS	\0%=ñà\0ùEè\"RÓ½O]:Ô‘ÓoGe!iÓ‚”È\ntxSÕN­\"”ÞÇyNx4€QÙPû *ÓÒE;ôüÓ±L}75Ô#P,wtß…¼?íA4áÑØ²N@\$Ô*¥\rôsˆÀÿB¤B?0ýÃø\0‚èÕ5Qª“3ao#¢z:`>TKPØút5©QÝ”CRQJ{£±×\0–Ž4ÔÜ«pýáoSßR]\$‘ÕÇ‘Dð[ÃøÔJ' 'ÇVø	u\$Ñ\rRÚA@)Ó·Rò3cêÒ-µò?Ü#öÞ?ˆ0”žSžæíF•4­Q½G59Q`•GÕ3QÃS\$xÙRSõaoTEÂBÈÍ´°ý¤´€„?+hÃíÓSHUõQ]MÕ	KØ\n4Ð×CmS”‘\0N;ªÕP‚­Oí! \"RTûÕ9€S­FÈé¿U5-UÕTH(ÍÔ‡TV”¢\0J5U•N‚­T8ú•ZRð»«@,Rœ‹¤à&T@ˆèÇ‘ „u”K£6> ýà&¾ˆÿ®tQsPe\$”…UO;ªÀ%\0ŸV`	`\$Ô¢@1ÛÐ¾?ÍƒîÑ\$\nµJÔ.9¹WmÃüÕïWpu'ÕÙWä?N¢ÑR¥^ƒþP¹UsËCð£ST¥RÕ6ËTÍNGOSµ'5%V?%PÕnÈJuPcë¤ÏR­`Ô\\V<ŒåCtæP× dxT?ÓXõ<UŠRu e.•‡¤.’wà*Rœv )Q7NýˆÚÐ“ËUž­M&Õ„ÍOX[ÔÙ¹»Tõõ Ö\n°ýÑÖÇ_Q2Lõ£Òò9ôæG–êµh@£Ž‘%QÈÚ\$ÓZujõ¨TÏXeMuLT[Xkµ=V+Rýmµ³‚­V=jÔöTOT­m56Ö×Q}l•»SÍKýk£é»ZnµXÕ§[íd+Ö¨“ˆ\n•W\n\n°ûÔ6U\\ETõqÕ¹\\xt…€“F\n3tOW)KUEµUU¯PÝq•ÇVºdÕŠÑP\rsõÔ\0ƒC]t•×?IÕv5Æ×fKMWãé×>ºN@'#b=o£óPýF(üÉ8¹ÑY-uõ‡¤ñV-UÔ¹›]òCI8ÕÃ\\¨\nµrWŸ™ (TR?-Páª\$ Z3uäº›Bå`>\0®E]Tˆ#LêÐ	ƒþ£L¥)²×ž’…:@#íGõ)4ŠRÀý;ÕãVmD%8 )Ç•^ÅQõë#Žh	´HÀŽ@	ƒý¤Nõy4š#c €û´’XRí€'Ô7`\\é¨\nEÀ¦Q±`Åmõ]WùNd€«V'Z\r…5¯GXEjuTE9\0ÕTŒÑ-UB‚­O¥PÕíQæ¢65¤£É_x•z#¶?-ˆ6TE-4æ\0œ8\n  ÖX	¶#×ÍD€	oRALm\r5eG‘N	ÕVÄú64p\$—a9N¦ÇSaU?AªU \nà\"ÐØéò<µ¤£9cŽufQ_ý_¶0Ñ‰\0;ªCòTINÅ2 ,S”£ËV=Ø»d=Aà+Ø±JeˆéÓ½QÅö5€V”Íµï\0“EíŽ–>Y1H…‘@«¯DõYRYH…~O†©cÝGTKº„>¤\"£Ñ¾‘\r/UÍØÜ&Ôx’Ð?\n€/×¶>­—twÑ Œøü´¶\0¥eå˜qÔ\$ãE›”Û\$ ?%™´-Ù‰Pe™ŽgY}_-šÖg×¹E™1àY—e@0¶	Ô{FÕ\rÀ!ÒPMKõvÑ7Q-•£èQŽ?(ÿ•Ûg•\r‘á\$¡Y=Qèñ®èê<µh\0…\0=#öÕÛf-Z´®Ö£a…^Õ¤>ªAÖ³_-;Tîª’”HW±Zý@(ÔX'hšDˆØ€«f*JUH!IåLÀ'Çƒfh	4·[ÍR–<´?À /ÐKE¥v˜Ø>µ¤ÈßÚ)i¨ö¤™TX6˜Ò×iÚBÀ!Ó™gÝ\0 ÒG …Q6 Ñ4>Üx\0!Ú¡Bå§ÖC’Ô>ÝªÕQÚ™jÊ8îÕ‘Tàûv(¼~>ÀýÕöHCe¨ÖœÑ7jŠ3§¤ß`PÃèH23–²Ðòxû U›kÀ\n€:OiUŸUAÙô-xn“Õäé=?CéRMSÀûñÖQƒbx•ô\0Ž@õÍR§\0=¦`)ZzKPû¶¡Ù]lÍ³vŸËm³ÔM×‡D\r4—QsS­41QsQÄ‚nYëhµdö	ÂA`››	€gEÈ\n–½X'kõ‚u-SéO˜´ú¹²…wöã€ ‚S6Û™DÊNNlÓÑWÝ™ %¹¹l‚A\0+Û*KM²îÖClÔx &\0¿Qò4Ö¡UmlÕ!µoã“§`\$€ˆ\"3vÚ|¥3¶›Û;iÕ•ÖùÑŸm+§hí£L“%‘6%ÓMu3”ÏQ¥F¥4I&T£HÈÕªº§\\‹ªÔÊØFC¨TQW±LªJCèQezBÃê[`ê¾—#ime!hßÓ•^ÅsCøÓê%!”‡Yö+ƒòÓ‹JêNtMÜkXJ>ÍÓa e®ƒðÙÏ e|2Ö/q©SWr%£\$µX(Œá-«Wp'uE•7€ƒrEÖV¾%³vœ[ø?êCVÚVe’5ñÍIMDOÒQq2Lv©RÐç23`,Rp³ªt´T>Õ-Þ\0¥^…Ô´\\8õZ—s`ôÛ\0†ú<tK\\±jõh4W\0¾˜þ4’\\ûÏöð×Š“’JÈZ3MU²v^ÕÍVeeöªYp>•rR½RÔxõu[“UõXû×¹D½KTRA^}„uçÖS•uX¥^äxVÈTAVu>U\0¥h<yT\\]|Í¹5óØçv5ŸvG#Õ_53€>Ybà#ì[5bªD•hQ>íF”Û¯:NK<æ4È%È\0óR?IÂÌèø!Ž€æü :K ‚<].°õ]ä¥—P³² .Êƒª\r¨8!oFjwPc·}¿ú.ÐT‚;è`nâËÉ{âPi²^ó¤»ð\$>+\0O%Þ'„À€Áž\\Ãµ3ŒÁÿ6WŽ€åyÒ‰€ÜËÒîÞLÈH³7#`@„bKŠ7—Ýßy \r·–¤ª=å0²ÞwyhB\0º¿V¤ßîÛoTÈgs¼Wî•\0Ú¬H*R‘:z…é.¦^žE­ê7¦:Uz+Ò˜±¨0²ÃYuf=˜UbX€*\rà\"\0„éØ4åÇDåŠ·€†˜\nÕ]_EŸæ\$?EL´­Ò»k¥Ã´yÓ&(	´®Z{{m€@&†©sJ­Ö“KpwÒ!|e¢ÖÙÿN}÷ÅÝ)|­ˆ ß/Z‚9íÓº-ò—ÇV‡|„uƒóß4çEó—Çß1’NAo_REõwÆÓ}=4=\$åIÅ>XGT9ƒà7ÅI4Û=Ãá.‹@¨\rË±_Ž¢¡Àß’%úaÀ¿Ü\n€\r#<Mw°JËñ’¯”µï0ï%ü(—;7¤ZÁ+FHìØÎÙ¬‚Lc÷;À#ûÚj%\0¾MTÓI,‚ ðcÀ¨“ÃµFœ÷âüoD€¿•ñoŒzÇ;=£ÁhE¨YÁO	(1MþWwR÷È8Ø~íüÃ¼V§¥Io¿(‹²±rÀÐæd¯	\0ä\r»Ä\"?à#bá®ƒ“‚\"â,ÎAEÖÈ]qw!Ôwû—Rþñ˜Eî\r]ÿêN l 1À–ÿpe08¹ú;¢Žz¹èîŸ)…HçÐ:AP¹âçã¼äá€fæÀ5²Àè%SŸî€ºLÎãÛPºæÃ Žm‚jñ[¡Ž…¿@gA§ù:èh\$Â˜Ó¢wu:-wžÒŒFlÿq2ï—ÄgMâSW°¶hP¶ó¢Œw‰a\r.ü°èË¾aÁ'ù‹·ÖF9k„Ó¥Ðë:ÒõÞAŸ¬GÆŸÍpþF 3^2óˆ@]]ðšP`N\r	Tæ%€Õ€ÒOá	à5ÛÂáE·…«¥Ø	ƒbó¦×‰\"Vù<QÐÂ:ú†ïƒá¢Dj®ÔNé1&x‚Ø(þ€èÊk³Û†kÄ19„š2­âA°áÏ…¨Ç¡òa&25a\rx”	JÞ.ZX{Þ+dX7Š^Ð\$a~ü²¸U’xƒáDñ¸Ê¸r	U…Ð&áý‡ÎnNƒè^X‹\0ÊXgøW€ùˆöøUÁžíýŒ-ÀÙ…‹+ËÿC©.øTaª]À1úß¯÷Ù4LEñØÑNó’Ø¬!ï®¼@0Û˜É+œ7‰Ë®ãâhY6(÷w\0È«ß&°n7þØ§µ‡)Ze“•§	\08¸Éé‹½žb‚%Ø—7.\0 /ä›\0ˆ`‚’©4ÌNñ>74›³b/ÌÏ€¼À\nÂö\\5„ÅA†÷ûàZ*Þ&Ã¡0,-a¡	7ëúïOç…Ë*®«ã¡xŽÞÁºE«é“×¾‚\r€JÌ·;€\"øJÀìß…\0ï6c,þ@J`/¿®LL¤±qÎ|Søg™~²\nPCƒwÃ£ƒãG¸>ƒ>\0êL;Ä8ÝˆR¸În‹ÎÿpÁPâ^ôûº¯7‰x–àó‰Òß¸oábÈ3R0a”BŽ„ÅÇ˜rãºÙ©ŒFt›#`Ï€øcÄ`v Ú=9Ê'÷‘ï‡ÍÐß¯y#¥Á3€î[—®ç°qyŽ>À5„‹{[j·ŸäêÛa)”ÑV@Ž¸&@ÒÁ®Ü³¡m¿È\nÀ59ˆþ	'Ñ¨¶8\0EûªaÁAAÉ5êY_~^Añ˜ä&	¦!‘˜ºí`JOX)’¨höáÀ\rB I‘«yY(È,adà<€Û„«„!ªBÄXÎ\0ÜÙ´kï=MéycÞ\09…œñ\n?B.^Ct	`ßÀD:d	c8:érºw£»ã¥üÉödÄýÎL÷u+ï“<Qx„¦ÄO¨†ó¨73þdÜ¥YÑ‘rê}™dòØ@‡0lþ`V÷®:ÓxP\r·®JÑz\$Ü·¯aqylÙ9Gˆñ‹ùI^b\n(6K]Ý“>SN„o–S¹N&•ynSà<å:%¤;•6TyIåQ•.S³dåšV>ð²å#•¦?J]•Ä,¹Le+•æSÒ‘aq•®X9Pe•%ybea–UUe–NW9WåW–W9C^½ c·ªÅãz¸#™m@ùz†M™n^²Íé®…^¥•.\\¡ªFF ™Eñ2Úî”Ír€Q€\\Ñ„Ÿl…,ƒ†Ç\0\n9A…V‡±rNa``¢Ñt@‡Ì{ñÝù‚?‹„Ã‚=8IŽ5‰Ðü0y‚˜pÇToX¼ÆØübŒæ*m˜Ñ‹æ6dB\r‘æb¦=\0Â:ø°á.e9æX¾bÌw™_™ªwð@ã±\0kq°wÞÑ˜|By vpÒC¿s™¬À–Sú%9‡Mšl2À‡½šðw~!Âs&kY˜0\$/çfk€EþøtgCÂÙ¡ˆM› ôâ?û›ç 4O^Ôè!¡&€åˆŽg°úæà/þf1=«›V aE:#Ìy¡N`»)`Šë›Npò’ã\\.\"B»Aåœ¤£—úqx“V“ ™¬:aÁ8y¹f¯™®sóŒæœóŽy›7¯˜¾gyÊgS›&gYÔ5;€@ÅäÕc¬3æt™Ôçn]t¬˜o/7™­og¨Åà8`3ž\08ˆ“m\0€\"\0®æ°‰[®X¯ç?¾q™F¾Söv™¬B¡\nðZçÆÎ!AÊùšŒŒÖþo¹ƒ„šÃöÏC¬Ä-yñ:ÒNãŸO^xz¹‡·ë~¢Ž.Ñ19¢¶šký„D¸8!C˜Nônf¯ëâÀËhg\r\r(iâpeé²ß…<+#ø -€ZdJ…jÞh6îgAªXFƒî‚h4dLÿà‡hNè¹Z¹9¡nxÓC«ËP‘YhE˜~sá£`‘>F…kÃ\n·¡^ƒ¥}D)Zk§ þ,ì`ÜÞ§zÁ1Kc†dluf>û	-ÏŽ¾ºÉöqŸç#aâ“å›˜háPè`¾ÝþPÂha P`€8]Æ\nÖ‚`ÜæÜ3†a¡ýŸ`8Ú'»‹˜|0ùÈc‹ƒ1\08ç¢\0\"Z˜X†…dÇhV/hY¢UhM üØ—g9N‹açYŽÞs`7g?¤¨!ùØÐ6sùØÎnÞ“.‚?ÜÇVÒ¢…ÿ¥NdÃJ…¥fŠ„¢ƒ¡†sá¦pÔ¤\"KÊ.‘æDÏ{¡^…1´JB#þ…c¥ãiŸV…x©`<S÷dÃ·¦f˜šã¼¤ã9¤49/‘hy øn?€á¡\\<šF»c®€’:Fpoò4°ùÞŒ^+ÄÄÆ¼	T&:jhŒ­fdîþiÜ¸+2nÌÎìÞ®Š˜õ§v› ©hž(þ]“j\0å¤&Zm™ôNØ€ JýE\0ZˆS‚@ÑóíèæÖ%Ãƒæ¯>ÞÓ¿]í¤Özá9zôÒz²ªó¸::æ)0ÁPžüàÖ…c|hVääÄ`Íh?ÜÅÚd‹þþrÈ•2}ü,O=	ØŽ…yÎ»Æ0£ú•ë¤I`Ô	=ªX7:§¦äû÷ð_Éª°ÕzçG®ª8	ºðädºƒNœ¹jÑ ø¡\$ÛBo©)‘2¾é¬mn˜yŸK ü[Zé{¡úÊû«Y‘0Ãƒu”\r/n\0ï¦NOáâi¡œF±¨ãRèNœö:\rŽ…q‘ê’ì>©€É«0@˜©¿–N¬*tèK¬Ãá¢ëBñ[¢òn·©Tâë¼Np·hz	åJ¾êtdNÄDY>›ÚÈ”¡ªF„ ë8þøÎ·ºã8vÖ¸xk‹¥öµº¯9ë‹´]z¾è>ôÖ©0Ñ“‚Êd#àèW,3æ:‰/7Œ†FR¡fó{®Z=¤‘ùOÃ|hºÊcÂÀÖœ3þx†é‹îñ¯F„÷^¾Áˆr]t¯Hi.èuþ@ØÂA°\0h@Ø¹°ŸŽ•Òß§¨smNÃã‰y•çV¬F2†5ç?~ÞÂÙÔ†Ñ°fsú`ì[üRiÿŒ¨c”+Œ1°fµ@‡éƒ\n ÑúÁL^36Xãt9û=:õ‚(äè ;èŸ¨ÁSýF¶@`;ìx,>y4_ñ&†”ä¼Ì×ŸŒÿeÑƒƒ,çêCFL0\r‡Æâû°£úKêQ3æùl9øÛìÏš×Âöï@~»ÿŸóà2«‰Ô¥¡+gÁVøN^\"+ b_Fd¬H„ø‹ìëwÐ~î\rb¿‹è\"0@Ás³ñ18¾ìÞ²¦pÏH#:K—ƒ¢¬X³~è¦Î š‚›˜Åø…º›ŽÓy¾^\$d!5wt²»­!':µx©âÀîÕÕmT + î½O¥À5~Íû´>»P@ÃµV£PA¡Ž×¹ÝßÓ²&\";XhŠ~tË¼!)5aD€Ö3˜8'I×¶^ˆØ®â·¶>ÄØší°ý»l;Â“Aó×àèöÆÛŸäº~§;jÜ[>šmÓ¶ÆPÛuf˜.ÞA)„=·#Ùæmß¶fzáI¶ÄÇSmÉ¶cÓA+…®ÞDù`/¶ÄddÕê<Tìø˜¸n¸>€/ðû¾Ù›må9¾WÏäiŒ÷ª›,ÈI\0¼÷ñê™-Fä`äi6ä;”ë‡`„±{î[€©SªÂÁ±¹6ŽRj¥¦Û•Cå“ô›Ú#m©=9gWˆÅ:ghÔ&ÄÈ†€ù¯VË”I¡ºxÅ[ƒh¸I¡IÂöž½ZNm›®’û®îš±tW€[´+æ@k¤¹*Ú/§ ÷ÄAEw€L_8m{).Ïó¥-v\r:L½¹£†à·‰`-@íY§m£¹Þð{ƒhíŸ¼jÚLh|:þžYîÀ#@^Ëº<éÂî¾ò›ŸKs¤ÆÑ8¯è›F“Ëèõ@XD šj7¤½x¾ï:LNóïÐ9OÚOlŠZNsDàˆÿ¹†“F¾d¥ç;Ñì‹ÁÃZPî§@^À Šg47Æ“Û`8 6ù#.Eˆ£Ôß ÖÂi¤ÀS£.7ë†È¸Äãe¹[–zL4s™0`‹~ºw› –f›“>ä[áïÈöØ;ßã†ý[{Y#üºÏw¿þ[ˆI«ºÎ‘¨oÖ	fùYÕoÒü4Ž;üçÇ›ë•üoË6ŽÐTŒø”ž@©B¹~ê;U‰ î.åùþh¾r¾3…N·£×»ïî†î6³P‚ÉžÇ„µV0Ëok1ÁEþSŒ˜O¾œóÈ•ð`7øl®Ò…ñIOÙ«‰€7¹Øït€þ÷‡QcŸ9µ ëf-¯\0-¡\0ê®ÿšà/¸.‡Ùø^RÊf’û‚î½µÂÈ<-nÆ,95JÂcM«ÔÂèÂþv</h¸ïÿ\rZK\0ïœp\"FÐˆRó¦à¢Fð«¯þ‰Ü;ð®|nv<\rpƒºŸ@äEdí	ÅbóÃûðÛàhcžX+ÎÐ²ý¡Œjû³Ãê7™˜¬Gy/€…“ŒÛ‡hì÷¶XÀ°.nXtÏõ¸.sû^ðÄD]r­í~î´†1LC·@+@Ødƒ¥\"i!Oj¥»tH\"/¾Y¶Ž“œ_æ¬¸t\n³~ñƒŸ¾qÚ>ìÝ¦Ï[û!º¶áû»ÿ½oNî§Æ¦Í\0q¨V˜5˜,Æá O â„æ \\^¾b+b*ñ¼	{Óçc§à7roN!ÃÖqÜwÉ¹Ç‘OÜ;,P¶’à:b#3+\rèS\$ØÊÎû´píoK ëÁ§~Òœ…»Ñšx’š!_Èq-™§¹ûÆW`àm–‘xÂò9©Ø&™¨íý¤[e“ò>dI*€œáÇÉ8¥¯ŽNHz«Ö·—³—3Âµ—Ð(ôÐ¨-\n‚S/ZkË1(k5í!‚„*C!§(Hn§TD‡ ž©Šz-d‰Ð†ç(A¸³¬åíBõÖkµ@¹5— \0.²&!þcY­LÆ\"\0g÷)r,¡·Ë\"Š5çÊO*²'òˆÒ„|¤rÏËO) òŸ‡*-‘ò¾—ü€)×H‘Ë.2§ï\"‹–í—ràcàht¶ªÚ¸m€:`Å#[€M¡„š0@1·Hß#µdÚ˜óAC<mÿ\n¹Ì2s”s*³hŠ1¾\0¨Æ‘É\n1TÌ/6Ø=žÙK'6F~Š>x	ßÜÜJÖGG7,ó}/ü|à‹ù8¬Ñ²ÿ„óG9ÜÉ„?9³p:	-o:3ÃLÅÏ:³É‰•;¤”Sbjxa|îÍY+6Ö|ìƒvlÀœóOx˜¯<\\äãèw?=S]b/;’‹M‰³˜#Üøå\rÏŽ3œø†„ÏKt<øµxà×@R\\ƒM)·=¼çd¤7>3H·kÐLÜt:\$}	08ÙÌ/4\rþ¶­ÍgÉ+	Í3güËsTÿ5“5€^Àxi0–b\r|û¶ÊŸb€|Ù£pÇP \0”ê“ØÀì¤9, #ù¤9³hI	ºf¡ûÊ£6`Á¹½».\$µzöKW%ÈÂJ?¢c¨RMK>Ñ8AELÁÍn:a¥:ŒãÊP•Ì^_ =*Ûa´2GŸ—B¯&ƒNrÆ2ö_LëØnu!TÔ¯DÝVƒôÝiqd©9V]`\r€n©¤çPMáotõjxú÷ Ö)`\rv	PÛ`­µ#tëÓïNöØ-Ô•ƒ5šÖ°’•Òö	ØYcå‚µ™XùPåŒž£ÕDxTæÜãalxôãV·txö\0X¿ÔªÃç£µVõH\0Ø¤Žˆ #×ËÕÍkõXÁQÕF5|ÔU OW-ñSTê·W4~Úµ^ÇW6Æu‰X=94¬@	ÕÍ‰Ö(]oÖKÈÜÃiWW=Põ¹Z¥o}qÔyITvxu‹UÏ]]jXKT\rH\\ÝQEÇ^@,È×5XuG‘guÂ–Õ™hP	}GZGhm˜µgWhwönu¢`(Z[—WU_ÙGh‡b€ÚGØ¯S—RÐÛ[wX5ÝZ/Ø…aµÖÝÖW_ýˆuU%PƒéUcQÀûõ·TŸ[w[6(Ú\rØ‡[ÃìÚU[w\\]œRGf/bˆ\\§[pÿ½tU[ueý¢SsDcË]£T…Tg•?ØJ-¢uíÚm‡@Õ‰ÙMb•º\$-pÕ4•E£j=R™ÕUÇb=^u}ÛUµ¨V\rVSt]v<êVÈÛ‹hýeöØ\n·dýWÕiÖ•V•'ÕiÙ[}<ÈÖýX½²uÅU \n]öï]Ê]Åöƒhÿ]=ÅÖ_UíB½¦w%]ÅX^ö§Ü_jõcQ„êÕ•É7Ñb>ÒMõeº­k¥½•iPÛm•[Õ\0¤êµ_öêÛûY=vòôùsÈ•'ÖGr]f=Ku#h_Q’Ø; €ÿ¨Í£ÿxÖ>[ƒJ÷q5QÙ±KõJî«#§eýD¶S¶å×vÔÕÏf´ñV±Ndx4¤vU\\‡p}›TMj4vtÃvÓC—|½ïV¡ßAýƒ³‡a•ýùq—‡~Ú/á÷©Ÿ±?Å¿zÄ{Tucå›Ao\0´’•\"üé§Œ4XÜ3ÛŒMD–WYX“MÖ;ØåcðO×…`M¨ôÓH%eœ7c:­uò†	~Bê ;ƒO0›ÃUø·×YEÍ•¶@6×UÛWßœçyÔÁm»Ï‚´:ý=±ƒÍ˜2:•ƒ3 ylÃG,0-†]Žhènš~ø *Ó¢<áÊñ°>˜r”è«¢øA<†>_úì>i‚Þ\n)¹í‚“Ÿ.~†ù¢Žá;3œ…üSÍ_¼DÖÃBªfù|äW\nì.•`w‚\0#¸#>u~ÅûC	ê¦[®ç3;o šF¾fÏà!äHx¦Ê¿G!+@ööÆX¿ AäèÌT;BŠ¾â†»Bæ¤EiÏ¦Þ@ÅÙš†µ ‹†Ù~\0ƒ„ÎJ Ïƒà‹Ç·C#ƒ…õÜÊË	‡oœIð)ya•þJ»j2­ûø…<éˆ:}Ž âFo÷q“‡jx„¼ÄØN‚âöŒL¯@DêxÇ¡5‚9…v‡TR	ÃC9Ä©ç7˜_™éA®†P¡¥_›X|çÀ6#>^qñßÖÆO÷µÎO\no¢T&ÐdàÚ¤à„Rî.LâUgé—ëø¡w€•PV#ôè9*„áêÄT\$Ìº{“f]È‹’ÿ‘™p³gD¹.€<k¥Úca‚„ôäzkµ†3žšð16pYºvî_é¼3×–á|®Ä=Ì¤8àú›Cè…Fv„S““ƒ<3¾iêŽÏô¾‰þ«è«êy|^ªbzW«LNc]uú¯Ž&8ÙÈc‘‰|d9‹zÖèþ9N~oÄ±Õä®ƒ:è¦=N~6çæ=dç	<Öü£>M-A~ 3ºì‡âº]ìFü.Ã{“ðQPÔÃ-@Nl{Å?žQîQAï³A;€ñì_²{R:]6<ÒcÇo´Øô^-ŒB¾Œù9Ï°9FjŽc–šŽAÌÆæèa³N0s5{w¥_·³Ð@©¹~ä™ˆgÀï¸¹õ{†`ìûþã{—•\0XÖ:/ä¼Ž!&él¼íPµù/)µ¡ËPÝ)ÍÞì‚ØÔï23Ðnr¯¾‹îÔÁ¯3ížÜãmÞÉÅDí–1|«¾ø\rÄo½¢nì›ï¹•þöû‚¿{'ûú>ôþû|ïž£|Hü\rï—’þöÂ eÃS¸E=´Ååá=Òs¾vscKð³ÿ¾KËO¿Â¥Ò|:Ôï8Æ|7ñÃÓüN:gÄa&©ñ ¿F}5ßÅÞÌù/…ôeÚ~CJ\"ï¼`/á|Lbóî_ÇÇŸ!­06 ×|{…ó*¤ªßåÐB#fì¬—_\"µ;…ö12Âkëò¾åòIü­ðN÷c\r²ù„íG<77GÌ±œøü3›4ß4·;{ƒþÜâ\\†žâ‘ÑgÇ¯üA?¸v»Ây.eøYþüïñéCCfçµï’âµ|ø[ý?DÂô_Ñ»;I›Îù/ßÏÒ¹Ôà7ÒþÜ}2ÔîÐ%ý8ÔïÓù²cb§Ç¿Ræž÷Òòr\0Û½Žê~KìÅÆ³ðß?ìû3ç[I¡¢¨¼q°µ;¾¿Ì?\\áÎqSoÍûö“Yß}	 Ñi¼7ÂL…Äî5>K™Ñöž¿Üz—1Ÿ’üý¯3Û:á|{öðŸlz±ÂÇ?nfé÷/ÜÿjHúÚßvom÷wÛ\\\"|{öÿÞ|1ç¤tiãåæ¼^½1eïÓ|ä]8ò±*F¸Ý…=/FkþÃ¡/âáøGáÀºïÛ®Dåñ~Ñ°%…A‹‡âŸŽ³ù€[­äåøßáà¬…£\$Ç›û­m¡ù8%_„þ-ù—\0z`Êó¤ßþS\$»ìEIù¼eŽê~Qø²i ú~{@[§_~gø¨%Žx„­´Oã_˜þ™ùáÿ§rk<§™¹zE³¹¿01g¿`1¹¾‹Ò®»Á+Gë›7qï‹›Ì8¸;ç³ÇŸÚèÄ´rzMû=ÏîéÅ×(O~{¡þièÞoòé×ïÿ¢€Ëú95NG T@¢Ïæóåy?Bù\\	saïÇ1‡”\"Gì¸™:hÇwÏéág¿sî/“x5gá\\›°ànÛ…8>·îÚŸfˆîÛ„”\r_®„‰ÁŽt8Ù|ñ¶ÿ¥ùø\"Mf¿ß­†€8 =\0ôpÔãÜð¹ßá\\ý	oøE»žgOÃèá…Ç«¾¦ß¦îÞ{©Èfåí\"+øÀîn‡…”éë.ÅÏu”µ€<öN“Ö—»Á²»«ûÛÒl\$tðv¿gsÂ‰Ÿ{´ãŸþzçüTÿ'—†üIè\"…üÃ„dÒ óÂŸ†x±^z\$‡m¼Ë¤û§í‚·ÚAŸ™ô!þLD÷<bg|ƒ‰y,ÆºìÒŸ%C¢Âî\0ì@ôé¦‘cÛ) ûvô/Ã.7InD±+;Pœ 7crF¾ËÏ\$.ˆ¯`À6€€3±ìióF¶€Ù¸¹>D6ÉÉ3ìSóëÓQ^&|–Ûø¸'»ÏD‚þ6ªb’˜Zò7º˜à2¦Ý>% Ç¸ 0„&Ô=ñàqÝvaíö‘«08zˆ\$x	bCþo&þ=¶’ãì»jDïMéÒÃ1=jb0á‘d†û¬¿[K¸»jó\0<b1ötMŸQ°¶—\$ÐèãOÆpBßÞv0@0ß¸èºqHUŽG\0|pPU±áF+ìñ#õ€>ý‹p‰pN¯´+h¥¥[kÔo@nŽ5À!’0\"&qÍÐÔ³•þÙeû‰ˆ¶—ŒêI+‹bàt£(còÅ¾ á`Ýõ€Aîsï¡SIŒ8qlml\rÖv,çØAÛN!pðÚw—((˜¶²AqBú¯sÆÀ€¤dõ¼™~ ÌÄ#VvsçB`|?©jôÎ¥½æ2?E—@ûTÞ‰ç¹Øh ÏÄR©>Ç~øÕ½ð‹8—¢-ß[Ê¿g>eòª]H¯Ä\r³Ÿn>zíœúd6Š§Ä›¾¸Éc^Ò9L˜\"uœv³ÙÈÇ3ç­ÔÙ\$ºwèóQ€\r' ,YøÆ=à -*èl¦û?àxžl²_½Hº˜¨ŸQŽ´—jVÙeý+QHŽ §¥¨rO±±ÀÇ§m%àQ/ò‚šÐ„(! ‹¸Ë@d”ä1èÐT0X =¦=oažÚ-ˆ,Ð[h¶ù½¾ òz\$‡dÁy|ŸÌô³xt;p_€Ž.?ð~ ‹5\0+Á×ã>Ý­úpêa6À“L8Àt;H«0ÀPeAŒ;ÏMðü5ÆâÁ6ÕpÐÝL\nðÎjY³„~^yê\rP/àhvàÖ3-i/Õ@üÖû°m[¦|M	ÿ\n6çK¡‹Ð#1hFTÜ)ß˜(DìmË\n=%½u#\$N™émÞÂ ˜:ÀÙX\$>ÛO´ÝøËÞ\0Mæ\"¸Cq4ÍÙ§ë‡£/O\\K\"ãd(ÝBx=ˆÔ[ä‚Np°ßI†“dVélÛRyŸÒ}ÒÓÉôˆW÷â|š€¿~¬ýB3¡Ø1LÂúÂ	˜Ý®bñ×äOÕ›µ³Â:]9Åƒh#»†ŽRÔ?P„69‘†ØŒñ³\0g„8B.\$¦†{`Ñ–hŒõ™û?öhçmG]n‚Q8õ¬	¨FÐiZ	7qìÏu¢yãxF¯ñF±+·ö 0qëÀÖJšvð¢+J2p”ŸþŸÛr‡Ö\nì%'’œ?Ín°håèÉÂFê0˜F=B'~ ×ŽÃã\nÌä5„2|e1“<ä\rÐ›À5Âqn‡	Ò‹f@>­™ƒe1h‚\$”‰sX3Û\r²@‡µÜzº+é¶©éÆ9¡ '2ñGüèÊä…åÍa¹FÜÐ¡ˆ(ÓT)\rJ\$7GÎkËÚD9£Ñý)\0€\0œ\\)f“£+œ«(Y\0P¤-b’§`ŽWM’rÄPŒc˜7Ro(Ir¹t(7\n`Ôü) þ‰\r’#è5ÆåIËø/70 OÁ¤S…X‘=Ì:EˆVð«*š·(‘IÌêr¤0®\\Æ¹¡t7hqµ§5æÛ“‚Iæèe#Ü-ñŽp¸“—­J¼”tÐO ‚{¤¢…Ý%&ü/h^\":w¥…Ü#¡&º…\"HÐ¾Ã\$¸IuÁ£€Ž„¾pÀ„ÏÃhàù*y¾X_âƒ¯C8Y¹.ü1T³PÄ¡xÁj†4˜)A·³Ó‘¹ŽsE€\$qÀ …ÀWSµÃPbbVcàd.…¡‘¼¡rnœÛ´.¡•Ð¸œ‡¤Ç†A¾˜/3’®!’—†V_ÃZH·Mg-Ô+Â’…\\ëÉRS¯µË…ì’qZÊGØrÕQNØa«*ÐvúëYÜ’¤¥W®æ[»ëVèî•Nb¬Çu‹HÉ)(y\\”1ÝÒ@ÕïJÌä«ÙY~êµ`²‡z ]ë©v £çBÖ%PVGvêA`»¾%'ª°Õß) SëZR˜•™Ši”Å)5S¦áD49Jb”;)3‡,¦9M46E–Pß”˜Ã›‡&¢ª˜Èt\nÜÔa*\$unAÕ¢£¥½êŽ–åºôT¢³Ä?âÕ%©Dž2‡×XÎtt‘Ú…Ÿê’ÖTÀ·Yh‰Õe£Æ‹­&v’³‘\"ÍpûK1–d,ÚZQUfšÍõ¥n±Ý°­q\\þ¡\\6\"DJà–§ªŒZ¤´UP\nÆT‚Yh)’U’¹¾Zæç`ÊæÃò­qUÔµü>¢Ø5°¤iÍ£­ˆT¢ëIlrÜ•}kiÖ}‘ŸÈ´U_*Ÿ´Êï”•)\$@FÅmr­ÀúJ»VÞ+ºVhï-cJé³ªËpÈÍ­Ë[¤ì0?¸Õ‰‹N¬\\xþ!9Ô Ñ\n—‘œ:„¸EYÒ‹…¶\n.§V…`?ŠâÂ3êM€>,[@´ir>5ÇÊ|D‡Øˆ‚¬MYB”Gxë“Ö\néÌ°qhÚµXsÐê—Q«×:¦º¹hùÌÕ×*5ì©ò]¤@ˆb“=ËËÅG\"ãsøxZü†G@”Å¿¶Mš›<óªW#¶è^ÂD=ABxgÄG6'M˜Ö‹âCt˜[úûä,«ð<'äˆ@ã¢ò¥úLŽ˜\"µónæÞÝ_%üÑ[º8…f:É%¼ð¤K8Ÿ‹=&­â™Ðõç¬‰03`~PŽ\n¢.àÁD^±í^õ„“œ´OàA\0ˆ¿õ{F\\d V­\\ŽÃ=vc´õä	SìF^(Á_¹?tÚËâ,*æ•ïÍÛ´\\gbÞ²‰Í¢JD¼Dãqö÷ë­×™Ø´¶ØPuxfÊ, ¡=°×œPd´håŠ i\$å€dzÖè4}èU~(ý1¨Abg1 @¼júíþ[dðZã†™²0œJJ×î3v¶öLò›¬@Iq&%ŠÌ&±3LJ¾‡Ln„€u%Ò×®€Õ‘ûƒÏõéF7h.˜«/ñLnú¾'{ÿ°Gp•O¥ÁâL0|Åî¼Røð“Û/¹mn|á©k]\0%«ñâtº€Ëí…˜DNN›ñ\"ØnìÒ*4T2Ðbâ‡3÷t|™Œ eg½gJ¡žOŒÈ¡,A(N‡©‘Š¶vF@ë§\"gñ^oÅb;S’*\0â†_nLß95…sTÑyP0fxGé‰æŽ4œ)D|.]MŽBŸHt\0¶9²8®íFa`‰ÍH“\nÙ ¬X8+B|¡k<\0»\n¤ž)«8f€’bÅBèHÌ9Ì âÊHƒÙƒ?,–¬| 4P¸Á‚¶1’\nPs˜\0@%#E¤¸€ \r\0Å¯\0ç¨À0ä?\0Å©,à\0Ôh¶Ñj€\08\0l\0Ö.[±lbäÅ´\0p\0Þ.f@qn¢è€0\0i>.\\ðu¢ì€7‹uB-D[pnbãEÙ,à\0ÈÌ]Ð ¢ÞE¾‹r\0Ú/l[pà\rÀ\0000‹k†-P@\rÎEî\0g.ÌZÈÀ~\"çÅÿ\0q&/©g¼À\râëÅÉ\0kÚ.D`H¼‘x\"ÞÅò\0n\0äœ`xÀ‘m\0Åý‹å”a¨Â K2EèŒ#Ž-\\ZØÄQl\"Ú\0006‹„\nPÿ`q„\"øÅª‹c‘4 Ñ|âéÆ'ŒcÎ1^˜ÂQlcÅÏŒ¾1D^xÂ‘o€YŒ… Ì[˜Äñ£ÅÙ\0s21\\^ @\rbìF‹ö\0Â2D[¾±Œâä€7‹z-À\0±”âñE¹`¿/üdXÍÑ˜bñFM‹&.ü_xÄqw¢ÕÆ5‹çÈ¡! qˆ@EôŒbê4\$]xÉq‡âøFŒ%Ú4\\Z¨É±xâõFŒ÷Ò.ô]˜É c'Æ1‹ç ™„`HÇq™¢ìÅû‹Y–.,gè¶€ã6F6Œ¶/½‚ÀÆ­‹½z5bˆÇ`\r£GF(JMf.Le±§@1\0005IÂ5´eª£(Æ‘‹b2|[à \r#5ÅêŒ1V0|k˜Å‘ªâê€49U‚üg(¿ñš\"ñÆmš5äe`€\r£4Eô‹­F.”[¸»1Œ¢ÿÅêåâ0diÈË1k\"ãFoŒ	~7ÜgØÛñ¾#oF™Œ½þ/4[¨à1´ãÆI\0i7\0XÎ‘n#LF¥\0iª0tf×±l#Æ³Œaê4ü[HÝQŒ£FWŽ'Î.\\m¨Î±¬£‰ÅÏ§ú30(ÏQo¢ïF\rŒ	N1tp˜ç1¨£PEÝ‹§’.ØHÒ1lc^F~‡Þ4¼_XÙÑqc*Ç7Œ/:/ÜqxÀ1·£rFµ\0en/H¶‘®OùFŽ/¶.ìaxßqr£ÆV‹ò4ô_ÀÖ#F`K‘:]Èãñ¨ã«ÆíYZ-ðØqÕcjFzŽÓ;0(åQ€Æ§\$Â.´f¨Þq™£XEÚŽgŠ2¼lh¹±Çc°ÇZ‹»n3ôl(í‘Ë¢àÆÝk&<ÄkÓþQoØ/ÆÑ‹Å^7¬j(Á‘œ£G#‹y\":sa±â#ŠÅø‹¥ú2L_hà1”£¡Æf-2¼zhµQðcáFfKœn¸ññ£ZÆHŽ»\$Œn¸Á\0IcáEÆŽ×ö64}ˆú1ÂcG\0sò-Üv8Ó‘˜#nÆ¤ŽoR:är×ñbã\0001ŒõÂ7|lHÆQ¬£‰FŽ…2ärxëQöã¹Æ@‹—š8||¸íd½#÷Çˆ‹¯Ö1)fHÁGãÝÆMŒ‹7\$c¸ì±¿ã3GÕ‹õz.l}øøE™\"ëÇƒŽPKÒ1Ìaˆ»ññcoF”Ï b=TaØñqä£ÃÆ„,á>?„f92£QFWŽ‡>?4bˆ¸1”dÇ'‹u Ò3Ü|˜Êñsc‡ÆÎ§6Bmèí\0¤EÆj=ÙfHðrÇ>«þ5dlIQ|ã…ÆÆÉ^9”c˜ÔqtãýH;5äcèÇQŒãÇÕé!.?œ`húqçã	HYÏn.|ûñ³¢òG—´aˆÙÑÍcXGóáÚ?¼tè¾àd\rÅöŽIz>LdØïÒ\$HÇWŒ­¢9ðXùqÍd0È-‹·J@,†ˆÙqôãÔÆ(¹.:Ôx8Ä±Á£=ÇJŒýÖ/¬gˆíqó€1G¤Ù\"^.dsx»r£HFó‚?‹‰Ñï£XGz‹W.0|v`ˆŒ]Eð‹½^0\$ZÈúQ¾#sGlŒÿÎ3Ä[ór\$?G±\"Z0\$dÐ‘‘bïHtÁ~@eyÑ’bõÈª‘\"61œxÙ²cH‹‹Î=,c˜·ñÕä)È\\‘}\"ÆG_¨Ö­cäÅæŒ;V/<nØØrãÛEö\rÎFtpøà1w£;ÆCY\"¶3TŒ8¾±õbïF8ñÖADk¨Ùr&ãäÅåE®>¬|Ñ‡#[GZNH¬k¨ê2%äMF´Ž[Ö8„oˆ¸Ñ“c\0É;‹mþ-œ’øËÑšä„F‘yJAôl¹RMdÈÉ\"Þ8\$n8â1ÐäÈîYŽ0|ˆá2\$Gœ–<,™ñ¾#aGPŒÁ \nFtŒR^’£(ÈŒ 6JÔa(áñ»bÙIaU#®3hXìq}\$˜Å©ã!N;\\â?2%\$¹Ç›‹UnG´˜Ã2&ã~Æ¶‹eþLlhÌ8\$SGjŒ­bB\$w¨Õâ¤®É\\Œ÷>Lôm(Âò@âÜÇ›Ç†8ôg¹1ò!cSF‚’#\$òHüghçÒ\"cE´“ò:DsHÜÑº£ÿÇ‡Ó~HÔ›Äqt¤ÔÉ~’60(ÃÑòbÙÅú‰º7ÄdIq™£vÆœ~-ÌkXÿ’)¢ÕÈ‹ƒ\"²N4’YòI¤ÏÅúŽO¢Ex	xd	Èç“„É‚ü\\xá±˜€’G%é z6rØíq~ãpIÎk&\n=I=±´¤%EæK\"ÒGÜ‚	²#]F’'&.l_¹&ñnc\\Œé—î/[¤@’…ãÆíÙ'nMŽ8ô°ã˜Fì’Ü’G\$”Þq÷äMÈ°Ý‚<œ[˜ÓQâc2ÈšŽ%‚<\\Y1Ãã“ÅÆ’&:|q™òCcÂÉ-%é'ž2äƒx×ñ¼âôH|‘Ç#ö0ì€)b¤lHXŽ×ªJtš¨Ír‰äeÆxŽ%#Â3\$ØèR5£ÈSŽ­!ò.´¥(ËåÀ’GÓ”Eþ:ôl¼r	\$qÆŽÿ&B1üa	råI©ŽC„†ÈË±žãNJa“‡ÚBD[è¸²XäŒJC‘MÆC†ÈÕ‘©c[Æ‹á.>4€	#Ñ¯£5I“ã(Î6¬z©Q1x£èÇ;s(‚3l‘I]¤ÊÈ*±(*T<xXå±Œ£÷:aP’ü,¬4õ½êHã¨–P¸¤áušÄ°ü¡óÖBÏQ.ðEI¸U‚ë\$¥e*FT­@>™%Í+åf’\n•ž±Qnø-å÷²µU#«ÌUº£Hj¸—]Ò¶À:þx1+™Ûk¬'UKçVmC£•Ð¡}s)ÍØp‹V,‡VÂºT¤7ˆv.«QZÊåu{+Ð\nD¯§e¿\n¬px.°|À\0)Œ}I<0\0„IÌZÆå\$k	!µ¨ñYh²Í”°€RÂ‡d¯Q¾¼S°%.Á%‘­9•Ä©bW\"Öÿª¥\0)€Yv*VÒÜWXŠZe–Ë/:õ,ÅO¬¯Õ¡áô”xÃ†Q!,õ`B‰	_. %©Å–tm•\n“²JK¥VÀ­y}¾ÙMµñ,€	å–¦Àl+qap0®ÖÔ’;]R ¼ü#(‡ö*^¯º~–Èï >ºµ-T¡Ñª‰#8¤@°éY \n!ô;Gvž®æÂPjŠ%»)9‡E-îV:™òºUÝJë–ö¹¹ jÛD‘ˆàK‡wF•ÝÌð0 R%È­ôU’Fü?[«¥Aï–DTwP¸£ú€Q€Â¬ú—<«É”aÇ1>@Na(2†¨¢ycã±ÕhºÝ•ÊÌ\0P¢:]yWƒòíÔâ¬3[¾<¤@‰àÕ%»gB»Œîp…½Ê;ÔHKsWÞ³…àÄ±Yr`fí‹']Ø¼¬\nbUˆ‰%Ý©ÊS2£ÁGdBpjŠºebËäRÓøó»YZké”µ\0U\0„ª4Jçƒù•Ú¬–UÌ	dÒÉ•ðŠ'TˆH]ÖŠÐGœJUØ/ vÝ.ÍZÛB%ûì’×	/\n±í¡Ô&RkÁÁW…\\ ¦Q rùÕ^²ÊâÌW\$²Yp~IfæÌ—ä¦R;eK?ÔÊ´%B¦QQòø±-+€Â«,Q¯Áfòˆdê‰¥rL6–Ò©îW±Iƒs&©¨\\˜¹ÞaÂÒ)‰*/ˆCˆu1-ùÕšªE~‚ÞVs,D*26¼&ÌPu\\¤aC¼•;Êd¦1¬3ÎFÐÚ0wƒÿË9øD2²g„·&Èl|^ H¨¯.c¼9p0ªýÝç;ãuÞ\rQHòœ00¬.ŒôÀ¸†–\"dÃég€a]é»U\\æµY{œÈ•{kb–«Ý\nºø¢»Åé€ÂÄ_™2¯¡Fð…ÙKí&N¬¬‡éa[´Å‘ªg&J!ùG”º-\\b“·b®Ý‰Ì‹‡HíTŒÂÃ…2ûPÃŠvôi ynjÛƒþL!#9,Þa\$Ì7bÃæ&*&[,£:fS´åkÒ´VÿÌ»™e3IZú<yqª7ÝŠºw—˜³’e¼ÇàúÎ½‰<*Ò\0 ¯ §P	ê0WÌ¾UßrgrÃe¥ŠÏVŠº£Hf¬¸i›“4¹+ZÐ¦6_”³‰ž+RV¥ÌñS%,ŠgÛµUÄ‰%ô‘å™ó0&hLÇé¡n¨ÔàÌ`™Â¬QNº’Yv!þTjÌñš32QRt9	¢3FÄ’ouF¯-ÝtÑåÓD&‹¨qˆ°¢\ni\n’éž*5HØÌñ˜‡4\ni¥U8+­ÔÓ;S™â¾•}¸·o3E•·M@Xj¬Bf»µUU‹¦¤Ì~RA-6iÊÊ þƒ•*|Ô¬QMÑYxsTWÈ£ÀTpºýX¢“B9<f^Í\\#¥2ÙÙÔÊh\nÞæxÊßT°µ*g¬ÖÕ¼ó=%¡ì™ï4>j#³ÕG³Uæ¶«Œ™ ¨=ÚÌi„`\nå”»=\0²¢[’ø©«ŠiÝ¢K›4újâöi«Š±æxÌWUÿ.ÕgÑp[È~•\r«{u6¤’ÑeV“-^ÊÔ–èí’eÉ)™—sPf²Í§wÖŽÌ?„Ì'}Jó&bË6Õ4âmr¼É™Š]]:’Q™¡6ÍZÄÍI}rÜ²LÙZ7[2‰©›êýUZLãQDstDÎy¶ê©ÃîÌìQ}-mÛ\$ÏÙ¹<¡îMt™ì¹¡aÌÒÇn3<À«Lÿ™É5W#·DKRƒèÍÛšïor©õ’ú¦ðÍ¢vÉ4MQâ¡×ƒ\n­&Í&V±4rW”Ý‡}sI8M1S8	^dàI¤á÷¦”ÎUE1Jps­Y¦S„VKœÝšk8Ri¼Ì™»hê,SQf:nÜÔeó³PæAM¹Vn¾²_dÔ‰Ä+‹UU×›·5>n#¾¸wÓU& MWV’¤µ]üÝµcÓWåpª§X‡8èŽDãy“Yç!)Lvw7mÙôä‰®`U¦¸K?œ)5¹Q4äÙ»ó>%õÍöw×+~kääõxr°§\$M~‡Ó2Fr|Ø)™a&\"ª´–[6\"YtÝµ4ðØÝ¨KmvÉ8~r+¯™ºó‰¡Ö)yœ)6YkÂ¯Å±“væÎì›<¾‚má	XŽ»¦ÔÍõXk6µÕÌÛ	˜*1–AÎ„–k0Šs®IÑ*ÏTLú0¬>ìÛÉº“o¥æÎT°·¦V”Þ\"°&o-™Á:’g\$Ý3:&uMÖ‡Fë%idéåDÓ?fï*šï9Vq,ë	»³yUQÍ\0—Ù:I×ZŽÕóB'Kª&›ð¢ÂoÔë%\$JI&;jW¥8v,ì¹£S”—¨ˆuÝ8)]\$àÅó3µ•,N\$x0êåO|ì *ÓM'oÎÁœ39’[›«™Ã“OBM¢ª|Ü¾ÉÛÓ¸•ÌÎñšƒ8ªväÌéÅŠCçzN0é8Îcôå‰Ç«ç§M[ß5tê–‰àj#•(€_;qÜð©¬3ç|¬™Bë†!œïIÉ3Åf Mo\0«5Æxâ«UO“Ç¦zÎ¶›Á6®uÌìàS¨ç•M{ž;žv®éÑó1æéÎèè¦×”Øéàód§ƒÍ”žC9áWÂ§uVS½'>»ŒT]6}ÞJ@KðýZžGÞÙ•„kOV#ª\$ž¤H\$Z›ÓÕ€(\0_V&¨?h	3Ø'‡ÏGƒ6ÅF2Ÿ×pj,ç°K.Sè±‘|öiíËqgµJÑÒIÆvøCšê‰\0+\0GYn‰Ljèd\0Õ1\0M>ð‚dÀu†jCWSO\0†amU7ê<XE­îQâ°¾|º¢¤JDgÁÏ…Ÿ.©r|(÷WrÏCè-Q–”¤’W\\÷S0Èä\0_#6±<T³Õ¼S×Ôo¯¡S¹>ª{dûUYÊw\0)€_™º‚YèäzJ©'ÜO¬\$Hë.l´¹ùc%¥Í&XÈ8ü‰SígäÏ‹Y)?ZUòçµ 39\0/¨ž\0œ¹õA¾%ìk2ë© T=ÂÌ%›K5&ÌÃÔ^Ê«u{¶É–\nì”½-,[¶±–_ˆ}	ýÖÖ–OÅŸër~,àyn“GóO±ŸùMo|ÿõDi€#P\nŸi@>’øÉþ²Ü×µOû–è\nzñ•/@–sKg|³þm¬Þ’7ôÀ,Î  =3‘gý)¹Äv@,©ô‡vµâY­ª”•±P&–·@ŽC¯dvs9ÈÔý–Èêñ¶BCJgTâÌX–é@0>šÖ…\"y”QP  c1‚eÊÏg^Ð9•ÉAEgú;\$x4%‹¼1YŽI¦}r˜%24×iÍ;SÉA\\õå;j£å¼Ðd[¶§úqmº\rÁÿVòO¹ ½A¥s¹¾J¥¥ÃÍ™Të@Zƒü¼¹Ú \n(?ÐTê¶2„¾š!¨E*²Ÿý.•_MúŠ÷áÑ¬ú[×;®ƒ=@úòÛÉ8K§Xå2QM<à©—aônÐ’œ<®„”»ÐŠúVŒ‡Ø\0š£BZ\"µµÐ3óhN…¡U\rá`Lß©þjí¥×‘œX¾´zV,»{t/UÆ¢H¡‡BÙU”ãšËßÐ_R²ù`rÎuAô3ÝÁ€MŸz³þ€ÊÈ 0«ìÖ‡Ò¡¦´™eìùjt8(l«ê–â²ötÃIyT9çç‡ÖXC°?ê‰©{jK§·Ð’SßCÙÖµ5~ªr–žÍ±œçCð•:È…xt<–pÏ½\0¦©ñÕ~I˜4?À)ÐÇ—”N_RIŠVÄµKãnª±B‡‚Ê´§·Ðˆ:°Î}z½éÚ\n5@’Q\"UÉBInÌç0ú\"ZfÅ\0(ãB\rið5E§Óè”¨k\\ú¥ÖÑeÚ”€*£Ÿ10=”z@ÝÇÍË¢„¯ÑeŸ©yë\r	!ÀY|¤|â™J)´8g¸Ñ¡ËEHúË×gÔUæQS¡%D€\r5Â\n¥§„Í`˜<:!õuÑè¦(lCõ0¡CòË…¼Th¨UÉ?êw\"úµË”—Ò)\n2¾‘Nlùºªr–0*9È¾,?Lç26dÔå+èXŸ9B€x\0\nà»¸_FN‚ˆ5BA„ƒ¨‘¨ˆ¾MBš¥[ªàÕøOá£J:‚2ãY•³\rHß­„P×0áZù&5Š‹¨Ö+˜›\rÊuÄ˜‚Êü?î˜¦ºbšÝª\"t(àÊ½‡¢£N{ôÃU(”Kh­Ñ¢·@<?j¹îó(;NP¡\$ê‘ûéþ\n&ýQ×\\™GmP‚¼5;Âƒ€An8YiNCÒ,I”éÏež>mUÚ›¥ÑK¯•CÑ£®sžc1 ÉlÊtÕÆO½¢¨°e´€fÌ­WúUCÂé}Ë’gƒOžS¦«€²¦%[´WRG…=Æ}5Ñtteî\\INòŸY’k1)Ñ\rQæ³jýÅBÜÝ{)‡žíH•-\"zDŠtÔú¨ £µ9Î{ÄÇyšŠM”f-„]2¨>d¢Š(ts%]Ñ\$ñHŒ?%\"•†n¼ÖÍ#ÒT§@¼Çwjt§8RœáBIHñrBÓ\$¦ÓÓw2!\n#4„(®¾›2Y†ã\nãÝn€Ø‚ŸEÆd½&4šÂ/€d£ËGœ[XV%´ž‡½ÿŠSØ*í÷o¿Qƒ?\0r€k`s°Ø¯0¯Þ‘%âÊ+á¬€Ð±’Í4âfyG¨‚ƒ\0\nÀÆŸŽXq3`“`f€Îž¥D9çàä‚¶iDÅ–PTddôI³àÍá#’?¹¨x(Ä‘ŒÀ÷YTt¢€à£èÇ‚\0aÒÚPàæëd°\rî¥’”P-­,ÈºÔ³’lÁ^ð­-@=ôµ©i\0006¥µª–¼|z[ô·¾\08¥ÇK*–ˆWÀ4¹éhØ¥˜’—aöÅô±œÚ¥«K¢—u,b¡4){Òí¥çK6—å-º_¿éiÓ¥ÀBœ	--š`Ô·)cRÞ¦L˜DhZ^ …éˆÒæ¦Kú˜.ºbô¼©„Rð¦7LR<úbt²éÒû¥íL\n˜Å2k4ÇéeÆ3Œ›LŽ–2êdÃJ©~ÓŽL¾™e-fôÌégÓ6¦Lž˜=3p”Ì)wS7¦M–å3zaÔÒ)ˆS7\0oM1}3zbÔÓ)ŒS7¦5MR™õ1êkÅ#lÒõ¦iL¢˜ämšg”Íi®S?¦¿L6Í4:g4»£lÓG¦ÏKr6Í4ºmôÄ#lÓO¦Ö¾6Í5:ntÆ#lÓW¦÷M†2h\nj\0ãÓ\"¦ïN@u88¾´Î)­ÒË§MŽ›1JqtÊéÆÒÑ§Mªœ­.êqtÛ©žÓ’”N*—8zqtÞ©ÎÓŽ©N‚šÕ7úsÔá©Ì†/‹ëêE9JuTé£èÓ¨§9M’¥7*t´´bÖÓŒ§gNð	-9\n`ôïiÙS»¥ÝNöœÅ;ú]Ò.é¯SÆ_\"îž-ÉtñiÜRÑ‘wO&žpùtíéÈÒË‘wNêž­<ºt4ëií%§IO†ž}:zpñvéÔÓÙ§ÙO6ŸE>ZvúäISƒ§ÙObŸ>Ê{”ÁéöSà§»OZ2m7j|”û)óÓÿ§Å’Ÿ´k*pTý\$åT	‹ÙP:ž¥@j}1ÕêSû§¥² u@*yUêÓ¥OÂ ù\nTôiˆHR¨#Px	-?Š„2ªT%§?NB•Aª{2ªÒÜ¥Mú¡8pe™)ÖT¨EN&¡…?Zˆ4íj!Ô-¦1PòŸõBˆµ•ãIÔL¨Q<DÊ´áÂ¾S¾§³QV¡%1ŠŠµ	ér%¦O’¢­Djc•j\$Ô]§ÇM}.]<[UbûTkKP¦£rhÚa5RÜÔ/¦OQ²¡’jºŽR2ê:%Ä§ÕQÞ£}>ÚUj¦Ö¨åOÎ¤Hz‚5j\"T‰©	Or¤e?ê‘•@ÔŒ¨R2¡ÅH:Õi€Ôi¨§R:¤Ý9\n“Õ\"ê7Ô©;R–¤…JZ’U)jJTž©/R–›ð0\r1~£±JŒ©=RÆ¥œbÉÑ¯j4Æ3¨ú—RHuKó–q}ªQTo‹§S\rÜˆŠ™\0ãTË‘S:-ÕM\n•õ‰zTÎŽSZ¡F™u5ªRTrŽµSZ¥MMê•u7ªVÔo‹¯SZ¤ÍIZñƒêgEÀ©ÛSv£¬[:µ8jxÔã©ãS–£”eÊµ:j4Åõ©²§ýLZŽQŒªÔ*©ûSÒ£ôbêŸõ>*:ÅÅ©ÿSò£|ZÚ™Ñ*‰Õ¨ëz¨Pj¢5B*`Eôª'T2£ô[¢uD*9EÛ©®©=QjÑnj“ÕªKTr¦\\j¤õH*`EãªOT’£©fJ™Ñ‡jÕ*©b©ÝRê§5L*dÇßªwTÒ¦e§uNâ|©–’¦ÊXÙESê6Ô§M’ªTØÍUU*{UZªì	%M4· I*¦%ÔB?P.¥Vjµ&ªµU>9f„~§…TÚ‘µ*©GzªžMf«½Uø¶ñjª»ÕeªßRr«MWúª5UêÕVªÇÊª}Jj°5X#-Õ‰ª»Uš/ÝXš¬USbôUO©}VªlxZ²Õ[ª°TÇ«1Uš>MYj¨‘mêhÕŸªßf¬µWê¬5êÓU««UŽ¦ÝZØ¶ñm*§Ôß«eF­ªZ¶µ^£èÕ“ªÍzª}NÊ¶ñ±ªàÕœ‹o\"j®\rUš¬ÑšêàÕªß,op0>\0‚äåI·©ÕU^®€,ŠºM\0€3UÕŒž—.;ÕAª»uu#÷E¼«ÁSê®Z¨¶õ?ªÛÕ\0«ÛWšÍW¬Ñ¯*§ÅÇ«ëW:«cº¾µoª·ÈªŸTJ­½QJÀ5|*ŒV«•U¾35_ú¿…ªÿÕüªÁ^ª|lºÂ5|ª·Çk¬#Væ©•[x¹õSêU·ªyXz¯…T\nÃÕê°Fµ¬9X.1%`è¶ñ§*eÒÆ¬[Ê±}a@7qà«œª·VÊ<`¸ðU^£ÁV*WªNUVŠ®‰£dåU¯K‰WV±l~êÉ5dåU£“•Xê¢]cŠ¯•”« U€¬†–æ/eddº‘{*ãEì¬dr¬UezÈõckEÁ¬[VF³-cê²¡4\nÃBFJ¶|ì¨Êƒ•{O›µ<…h©\$µŒ½!ô\0Kœ÷<†wœòÜ5 kNpè)]z¢ùä+zÃé®eS.¢iF:ÚÑj<Ä´‡Ð­«ñV:ªéÞŽ÷^\nO![`¤ny\n¨ 	k­çzMK ãZ•vÂ¾™ßóW§‰:›T;þr\rkRä‚•D8Qß<ir+¹!µ®'dÏ!–Z©^‰l5s3ÈTQñžo<é×¬â	ä3Ï\\Ï>•Œëòu<A*ˆ§€Î^\$¡9€>|ñùÉÊDW\rK@XÏ[z¶Û±Ç`Ò¯æ®LÙšM3Æn1…N³@çXÍ\\i;Œ”ÔÐ5˜‹—g»#\\ŽG\0“LÍjµŸk?Íšvñ4®kÌÍ*Ðu¿–>©.­\r5r´B¢	¦`e‡¬¹š¹Z2´©)•¦+IW®!Z:¸izu¦¦®Vœ‡F­º´ý*à•¨«RM\\®H±LŽÑÉ§õºë“Nû£i\\ŽµLÖ§b§‰¬šÉZÆk4ÅI‰áÿk[PêšÖ¹Jk“´)©®¢À(W,®	9œ’”æ™±jnfxÖÅv™]6yÓµ*ÙUÁ'8,B®U6F¶êÙÒÛ¦[Ku­¥3âduma-JƒææÖãœç76…¢Ã9¼s<'\nVïY/[Æ»mo:ÏuÜCëÖø˜õ9ÒW¨:ÏÓÐç\nV®ñ\\ýpiÝÊ­+„ÖŠ®ðJf¸mwuV•ÅëKWœê£»ÅxÊâU¤+Ç×®ñ\\znÝrzSˆU#W%®ñZšwäáE?µÑÄL9˜~®fo„áIµ®â+V´Qa\\ö»S¶J(®ºg\$M‡®“DµÜ¥l:ïÓ”§Îjžtîjº|	«vè\n;džxîzs³ÃYPÚWÎÄ5—<ï€DÅYê¥èK¥¯¡_Jcý…ZröÕnÑ ž±_Úã•k^+m,3\\aBerÄ¹Jj+ÖÐFwƒ;Þ)\$9Œ®Û]N’\$\0¦°P‚ÂÙµªÇÝYL_œK1òfµ%É–Ç;Ï÷ñaâmK°¹\"‡\0Ö“¤ö%ä 6úï.ë?Üw\nÀ¹Ï‡­K l”ûxÞ)ùæ€Ya§¤Ø‘´#_>M(3Ôì—–šm¨ºP9h3Ó»¥¨°b0~Á¨À“ˆ[âX4N Ü¹á„HaÉ¨†YkÆAžv„t£6^:Qì_‚l\"Â9°€NöRÔ	¹A\nQ¶Â¸kìLl+½®°ŽöÀ–Ô@#Ìt¬ ½¸K¾õ“¿vÐB”Ì;^…¦	œ!gl9ØHD2ƒ.À{^æŽÍ; `¡4‚4íz\rŒ–G\r\0[\0ÄŒé¹\$é\\ŠD\"ÄžÓÃœ qŒ›…7 ™´½ƒ{âRN „(Šuq¯Q¦¶%ˆ¡ÿ±HxmêÉt0_&EahÐÒôEøÏÝØ7gn8¡åúX¿v\r×þ%Mf^Óäh°0¨1ìÉ±‡=ÇðRI\ryÚqØ±†æëÍ¡\r/&XÔ±Lüc\n\$@ÚìJ‚0Dˆá}Ž)­/Üd—.‚/—Ÿ6,t’é–!Ä@!š„°±\0VäÃ.ÅægFW°Ø^Â—e€‘5i­Ð ´\"²ÚÇDR»¡ Z/´\"Ã¡ì–,ïÓÁ˜6=!dD1}‘6/ÖFÄTc;`x+#ì“±ƒ“¬Ž7ƒ²0ß*ÈäJÛ!l·Q¼*hDÔ	PbçòBöšYÙ0\0ÞÉ\nÉ›!\r¬„KVÑ1è5G¤VP˜µ4«°ø=;w+%ŒlžYIÈÛFÅ” æ–T„1²âïe 9¥•g˜íÁ¬1m²„âi:»ç\0‘¢èS3¿N²¾¼Í38Ôv¬±ÙaN x¡]ƒËEl²>¸±<éLÈT\rÁEbh½H²Î.ŒþÛ. +6‹ÇaÖÓAá€Ÿ àJ—þY‚³\"ÌlÅ5Ìºb\0o³\")”X‹f¡SdžR³(òfu™ôµÿ¼²>{\"ÇAìqÎæ8§AÞÂ½£{8œÞÍp8k2‡LúY”ˆË©âµ›ˆ64¬VÄ‘TX\\Å› ‹ï¬àÌY±å1fÇ ÖqÌ:ìuØÂ|ýØ\\}‡‹ì,O0{ddsÍ‚Cÿ	B5¤à#H1zl\0%o“„,0Hide‘'†?6x½Ö±®à¾5žQ¬öyÚ|¢p¶\rŸ+=†p×²X\rž`!°q,÷>³§gÎÐ\$Û@¬Ô³ËÉpÙ¸\\¡6Õþ£\${¾^&Ï›{<ÌyØòZ6jÇ¾Çeš¬ö†³¤jo¶\$MXá«(v‰lŒ•@Mh°˜d¶EíX“¬„‹DÀVì§y|jHæÐu¢`TpZ­/FeÎÒ-†{E–sNÚØüªdíp€\$°uPddÄ£5“þo2ÚL ªØ¿\nc«ÌË8¡^fXŠ\nó:Z{£žo<ìt1´Íi,:õE6šC*Å+–=iÀÝ¦û(Ô¬V½_rÛEæ!—šlDìvZƒ´¦ý†Å¦pÊ¶N<=K´Î“r	Ü#@;°\0ŽÂ4ŠvÔÐ7YkA¸ì°º±œ¬`(KÖ¨#Ìƒ2ª\rQŒH!/v7l/…°Ác±íb!ÐXìÆxÂÍ(¥¤4—6®@¢€cLjðJ±!Ð7£€£fzXî“å¬	v°6ÚÈµŠ¯=pTqX-`5µ€zjÖ\0À¡µ¶°ÿcåk%òióý¶²MúÚÀ€x:tLc1,—Å…v4†­)°áN”/9B‘„ð¹é€ŠÎ\rš9¨NŒ8IG©Ê@ Û{¡·:ö¨´/M¢›xJ¢áº'EÉ(€(¶#rHE '¤2`qˆÑS|èaªØØ`R€ÏÜ9¶@â¼°ƒÃÅ^Ú€s¶BFˆ«Wkd&ö’Ý¥MOn\0œ¸!ï0#6ËzÛ/)Y´åÃ¦ë]–¾Ÿƒæq^x‰´ü–OÌúÞK/ˆ\nƒ[G ab:™9;3dôMS¹?‹9ž¨üå£R×û\r‚Ù?\"s1g~x×");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôža8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wþ\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹ž”ªÓ²Þ»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($u){$Vd=substr($u,-1);return
str_replace($Vd.$Vd,$Vd,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($Qf,$Lc=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($Qf)){foreach($X
as$Kd=>$W){unset($Qf[$y][$Kd]);if(is_array($W)){$Qf[$y][stripslashes($Kd)]=$W;$Qf[]=&$Qf[$y][stripslashes($Kd)];}else$Qf[$y][stripslashes($Kd)]=($Lc?$W:stripslashes($W));}}}}function
bracket_escape($u,$Na=false){static$Gh=array(':'=>':1',']'=>':2','['=>':3','"'=>':4');return
strtr($u,($Na?array_flip($Gh):$Gh));}function
charset($g){return(version_compare($g->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($Q){return
str_replace("\0","&#0;",htmlspecialchars($Q,ENT_QUOTES,'utf-8'));}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$db,$Rd="",$Ve="",$ib="",$Sd=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($db?" checked":"").($Sd?" aria-labelledby='$Sd'":"").($Ve?' onclick="'.h($Ve).'"':'').">";return($Rd!=""||$ib?"<label".($ib?" class='$ib'":"").">$J".h($Rd)."</label>":$J);}function
optionlist($bf,$Bg=null,$ei=false){$J="";foreach($bf
as$Kd=>$W){$cf=array($Kd=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Kd).'">';$cf=$W;}foreach($cf
as$y=>$X)$J.='<option'.($ei||is_string($y)?' value="'.h($y).'"':'').(($ei||is_string($y)?(string)$y:$X)===$Bg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$bf,$Y="",$Ue=true,$Sd=""){if($Ue)return"<select name='".h($C)."'".(is_string($Ue)?' onchange="'.h($Ue).'"':"").($Sd?" aria-labelledby='$Sd'":"").">".optionlist($bf,$Y)."</select>";$J="";foreach($bf
as$y=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ja,$bf,$Y="",$Cf=""){return($bf?"<select$Ja><option value=''>$Cf".optionlist($bf,$Y,true)."</select>":"<input$Ja size='10' value='".h($Y)."' placeholder='$Cf'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($t,$ae,$pi=false,$Ve=""){echo"<fieldset><legend><a href='#fieldset-$t' onclick=\"".h($Ve)."return !toggle('fieldset-$t');\">$ae</a></legend><div id='fieldset-$t'".($pi?"":" class='hidden'").">\n";}function
bold($Va,$ib=""){return($Va?" class='active $ib'":($ib?" class='$ib'":""));}function
odd($J=' class="odd"'){static$s=0;if(!$J)$s=-1;return($s++%2?$J:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Mc=true;if($Mc)echo"{";if($y!=""){echo($Mc?"":",")."\n\t\"".addcslashes($y,"\r\n\t\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'null');$Mc=false;}else{echo"\n}\n";$Mc=true;}}function
ini_bool($xd){$X=ini_get($xd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($li,$N,$V,$G){$_SESSION["pwds"][$li][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($Q){global$g;return$g->quote($Q);}function
get_vals($H,$d=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$d];}return$J;}function
get_key_vals($H,$h=null,$wh=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$wh;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$n="<p class='error'>"){global$g;$vb=(is_object($h)?$h:$g);$J=array();$I=$vb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
unique_array($K,$w){foreach($w
as$v){if(preg_match("~PRIMARY|UNIQUE~",$v["type"])){$J=array();foreach($v["columns"]as$y){if(!isset($K[$y]))continue
2;$J[$y]=$K[$y];}return$J;}}}function
escape_key($y){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$y,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($y);}function
where($Z,$p=array()){global$g,$x;$J=array();foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$d=escape_key($y);$J[]=$d.($x=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X)?" LIKE ".q(addcslashes($X,"%_\\")):($x=="mssql"?" LIKE ".q(preg_replace('~[_%[]~','[\0]',$X)):" = ".unconvert_field($p[$y],q($X))));if($x=="sql"&&preg_match('~char|text~',$p[$y]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$d = ".q($X)." COLLATE ".charset($g)."_bin";}foreach((array)$Z["null"]as$y)$J[]=escape_key($y)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$p=array()){parse_str($X,$bb);remove_slashes(array(&$bb));return
where($bb,$p);}function
where_link($s,$d,$Y,$Xe="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($d)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Xe:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($e,$p,$M=array()){$J="";foreach($e
as$y=>$X){if($M&&!in_array(idf_escape($y),$M))continue;$Ga=convert_field($p[$y]);if($Ga)$J.=", $Ga AS ".idf_escape($y);}return$J;}function
cookie($C,$Y,$de=2592000){global$ba;return
header("Set-Cookie: $C=".urlencode($Y).($de?"; expires=".gmdate("D, d M Y H:i:s",time()+$de)." GMT":"")."; path=".preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]).($ba?"; secure":"")."; HttpOnly; SameSite=lax",false);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($li,$N,$V,$m=null){global$Yb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Yb))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($li!="server"||$N!=""?urlencode($li)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$se=null){if($se!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$se;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$se,$ag=true,$xc=true,$Ec=false,$vh=""){global$g,$n,$b;if($xc){$Vg=microtime(true);$Ec=!$g->query($H);$vh=format_time($Vg);}$Tg="";if($H)$Tg=$b->messageQuery($H,$vh);if($Ec){$n=error().$Tg;return
false;}if($ag)redirect($A,$se.$Tg);return
true;}function
queries($H){global$g;static$Uf=array();static$Vg;if(!$Vg)$Vg=microtime(true);if($H===null)return
array(implode("\n",$Uf),format_time($Vg));$Uf[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$g->query($H);}function
apply_queries($H,$T,$tc='table'){foreach($T
as$R){if(!queries("$H ".$tc($R)))return
false;}return
true;}function
queries_redirect($A,$se,$ag){list($Uf,$vh)=queries(null);return
query_redirect($Uf,$A,$se,$ag,false,!$ag,$vh);}function
format_time($Vg){return
lang(1,max(0,microtime(true)-$Vg));}function
remove_from_uri($qf=""){return
substr(preg_replace("~(?<=[?&])($qf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Eb){return" ".($E==$Eb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($y,$Lb=false){$Jc=$_FILES[$y];if(!$Jc)return
null;foreach($Jc
as$y=>$X)$Jc[$y]=(array)$X;$J='';foreach($Jc["error"]as$y=>$n){if($n)return$n;$C=$Jc["name"][$y];$Ch=$Jc["tmp_name"][$y];$xb=file_get_contents($Lb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$Ch":$Ch);if($Lb){$Vg=substr($xb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Vg,$gg))$xb=iconv("utf-16","utf-8",$xb);elseif($Vg=="\xEF\xBB\xBF")$xb=substr($xb,3);$J.=$xb."\n\n";}else$J.=$xb;}return$J;}function
upload_error($n){$pe=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($pe?" ".lang(3,$pe):""):lang(4));}function
repeat_pattern($Af,$be){return
str_repeat("$Af{0,65535}",$be/65535)."$Af{0,".($be%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$be=80,$bh=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{10FFFF}]",$be).")($)?)u",$Q,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$be).")($)?)",$Q,$B);return
h($B[1]).$bh.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Qf,$qd=array()){while(list($y,$X)=each($Qf)){if(!in_array($y,$qd)){if(is_array($X)){foreach($X
as$Kd=>$W)$Qf[$y."[$Kd]"]=$W;}else
echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Fc=false){$J=table_status($R,$Fc);return($J?$J:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$q){foreach($q["source"]as$X)$J[$X][]=$q;}return$J;}function
enum_input($U,$Ja,$o,$Y,$nc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$ke);$J=($nc!==null?"<label><input type='$U'$Ja value='$nc'".((is_array($Y)?in_array($nc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($ke[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ja value='".($s+1)."'".($db?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
input($o,$Y,$r){global$g,$Rh,$b,$x;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Ea=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ea[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ea);$r="json";}$jg=($x=="mssql"&&$o["auto_increment"]);if($jg&&!$_POST["save"])$r=null;$Zc=(isset($_GET["select"])||$jg?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ja=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($Zc[""])."<td>".$b->editInput($_GET["edit"],$o,$Ja,$Y);else{$Mc=0;foreach($Zc
as$y=>$X){if($y===""||!$X)break;$Mc++;}$Ue=($Mc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($Mc > f.selectedIndex) f.selectedIndex = $Mc;\" onkeyup='keyupChange.call(this);'":"");$Ja.=$Ue;$hd=(in_array($r,$Zc)||isset($Zc[$r]));echo(count($Zc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Zc,$r===null||$hd?$r:"")."</select>":nbsp(reset($Zc))).'<td>';$zd=$b->editInput($_GET["edit"],$o,$Ja,$Y);if($zd!="")echo$zd;elseif(preg_match('~bool~',$o["type"]))echo"<input type='hidden'$Ja value='0'>"."<input type='checkbox'".(in_array(strtolower($Y),array('1','t','true','y','yes','on'))?" checked='checked'":"")."$Ja value='1'>";elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$ke);foreach($ke[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($db?' checked':'')."$Ue>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Ue>";elseif(($th=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($th&&$x!="sqlite")$Ja.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ja.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ja>".h($Y).'</textarea>';}elseif($r=="json"||preg_match('~^jsonb?$~',$o["type"]))echo"<textarea$Ja cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$re=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($Rh[$o["type"]]?$Rh[$o["type"]]+($o["unsigned"]?0:1):0));if($x=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$o["type"]))$re+=7;echo"<input".((!$hd||$r==="")&&preg_match('~(?<!o)int~',$o["type"])&&!preg_match('~\[\]~',$o["full_type"])?" type='number'":"")." value='".h($Y)."'".($re?" data-maxlength='$re'":"").(preg_match('~char|binary~',$o["type"])&&$re>20?" size='40'":"")."$Ja>";}}}function
process_input($o){global$b;$u=bracket_escape($o["field"]);$r=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Jc=get_file("fields-$u");if(!is_string($Jc))return
false;return
q($Jc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$Xb;$J=array();foreach((array)$_POST["field_keys"]as$y=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$y];$_POST["fields"][$X]=$_POST["field_vals"][$y];}}foreach((array)$_POST["fields"]as$y=>$X){$C=bracket_escape($y,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($y==$Xb->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Vc=false;foreach(table_status('',true)as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){if(!$Vc){echo"<ul>\n";$Vc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Vc?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($od,$Ae=false){global$b;$J=$b->dumpHeaders($od,$Ae);$of=$_POST["output"];if($of!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($od).".$J".($of!="file"&&!preg_match('~[^0-9a-z]~',$of)?".$of":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($r,$d){return($r?($r=="unixepoch"?"DATETIME($d, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$d)"):$d);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Kc=@tempnam("","");if(!$Kc)return
false;$J=dirname($Kc);unlink($Kc);}}return$J;}function
password_file($i){$Kc=get_temp_dir()."/adminer.key";$J=@file_get_contents($Kc);if($J||!$i)return$J;$Xc=@fopen($Kc,"w");if($Xc){chmod($Kc,0660);$J=rand_string();fwrite($Xc,$J);fclose($Xc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$uh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Kd=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Kd):"")."<td>".select_value($W,$_,$o,$uh);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($Sf=is_url($X))$_=(($Sf=="http"&&$ba)||preg_match('~WebKit|Firefox~i',$_SERVER["HTTP_USER_AGENT"])?$X:"https://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$o);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($uh!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$uh));else$J=h($J);}return$b->selectVal($J,$_,$o,$X);}function
is_mail($kc){$Ha='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Wb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Af="$Ha+(\\.$Ha+)*@($Wb?\\.)+$Wb";return
is_string($kc)&&preg_match("(^$Af(,\\s*$Af)*\$)i",$kc);}function
is_url($Q){$Wb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Wb?\\.)+$Wb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string|bytea~',$o["type"]);}function
count_rows($R,$Z,$Ed,$cd){global$x;$H=" FROM ".table($R).($Z?" WHERE ".implode(" AND ",$Z):"");return($Ed&&($x=="sql"||count($cd)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$cd).")$H":"SELECT COUNT(*)".($Ed?" FROM (SELECT 1$H$dd) x":$H));}function
slow_query($H){global$b,$Dh;$m=$b->database();$wh=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($m==""||$h->select_db($m))){$Pd=$h->result(connection_id());echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Dh,'&kill=',$Pd,'\');
}, ',1000*$wh,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$wh);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$Xf=rand(1,1e6);return($Xf^$_SESSION["token"]).":$Xf";}function
verify_token(){list($Dh,$Xf)=explode(":",$_POST["token"]);return($Xf^$_SESSION["token"])==$Dh;}function
lzw_decompress($Ra){$Sb=256;$Sa=8;$kb=array();$lg=0;$mg=0;for($s=0;$s<strlen($Ra);$s++){$lg=($lg<<8)+ord($Ra[$s]);$mg+=8;if($mg>=$Sa){$mg-=$Sa;$kb[]=$lg>>$mg;$lg&=(1<<$mg)-1;$Sb++;if($Sb>>$Sa)$Sa++;}}$Rb=range("\0","\xFF");$J="";foreach($kb
as$s=>$jb){$jc=$Rb[$jb];if(!isset($jc))$jc=$ti.$ti[0];$J.=$jc;if($s)$Rb[]=$ti.$jc[0];$ti=$jc;}return$J;}function
on_help($qb,$Kg=0){return" onmouseover='helpMouseover(this, event, ".h($qb).", $Kg);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$p,$K,$Zh){global$b,$x,$Dh,$n;$gh=$b->tableName(table_status1($a,true));page_header(($Zh?lang(10):lang(11)),$n,array("select"=>array($a,$gh)),$gh);if($K===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Mb=$_GET["set"][bracket_escape($C)];if($Mb===null){$Mb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Mb,$gg))$Mb=$gg[1];}$Y=($K!==null?($K[$C]!=""&&$x=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$Zh&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Mb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($Zh&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Zh?lang(15)."' onclick='return !ajaxForm(this.form, \"".lang(16).'...", this)':lang(17))."' title='Ctrl+Shift+Enter'>\n";}echo($Zh?"<input type='submit' name='delete' value='".lang(18)."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Dh,'">
</form>
';}global$b,$g,$Yb,$gc,$qc,$n,$Zc,$ed,$ba,$yd,$x,$ca,$Ud,$Te,$Bf,$Yg,$id,$Dh,$Ih,$Rh,$Yh,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Lc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Ud=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bg'=>'Ð‘ÑŠÐ»Ð³Ð°Ñ€ÑÐºÐ¸','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','bs'=>'Bosanski','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','da'=>'Dansk','de'=>'Deutsch','el'=>'Î•Î»Î»Î·Î½Î¹ÎºÎ¬','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fi'=>'Suomi','fr'=>'FranÃ§ais','gl'=>'Galego','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èªž','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ð ÑƒÑÑÐºÐ¸Ð¹','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ð¡Ñ€Ð¿ÑÐºÐ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°','vi'=>'Tiáº¿ng Viá»‡t','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡',);function
get_lang(){global$ca;return$ca;}function
lang($u,$Ke=null){if(is_string($u)){$Ef=array_search($u,get_translations("en"));if($Ef!==false)$u=$Ef;}global$ca,$Ih;$Hh=($Ih[$u]?$Ih[$u]:$u);if(is_array($Hh)){$Ef=($Ke==1?0:($ca=='cs'||$ca=='sk'?($Ke&&$Ke<5?1:2):($ca=='fr'?(!$Ke?0:1):($ca=='pl'?($Ke%10>1&&$Ke%10<5&&$Ke/10%10!=1?1:2):($ca=='sl'?($Ke%100==1?0:($Ke%100==2?1:($Ke%100==3||$Ke%100==4?2:3))):($ca=='lt'?($Ke%10==1&&$Ke%100!=11?0:($Ke%10>1&&$Ke/10%10!=1?1:2)):($ca=='bs'||$ca=='ru'||$ca=='sr'||$ca=='uk'?($Ke%10==1&&$Ke%100!=11?0:($Ke%10>1&&$Ke%10<5&&$Ke/10%10!=1?1:2)):1)))))));$Hh=$Hh[$Ef];}$Ea=func_get_args();array_shift($Ea);$Uc=str_replace("%d","%s",$Hh);if($Uc!=$Hh)$Ea[0]=format_number($Ke);return
vsprintf($Uc,$Ea);}function
switch_lang(){global$ca,$Ud;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$Ud,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($Ud[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($Ud[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$ua=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$ke,PREG_SET_ORDER);foreach($ke
as$B)$ua[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ua);foreach($ua
as$y=>$Tf){if(isset($Ud[$y])){$ca=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ua[$y])&&isset($Ud[$y])){$ca=$y;break;}}}$Ih=$_SESSION["translations"];if($_SESSION["translations_version"]!=1854356247){$Ih=array();$_SESSION["translations_version"]=1854356247;}function
get_translations($Td){switch($Td){case"en":$f="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Þr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ÐY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚ž0Ê\nÒãdFé	ŒÞn:ZÎ°)­ãQŒµ™öú£°Ak¾ßÄê}äˆe‹çADÍéœêaÊÄ¯ ¢„\\Ã}ö5ð#|@èhÚ3·ÃN¾}@¡ÑiÕ¦¦t´Œç>•û.y8RmÒóûè\"3ˆz¶#kN!-cä²‰Ã(è;¬ãX#Œ£|ø,¢bzöµÊ¢°µó9>£’):Ž¸çC \0.#®Ó‰ƒzÔ7:‹ðÚÞŒ­€@FàPx‘Ì„C@è:˜t…ã¼¤\$jÖ¿Ë8ÎÇ²ãÅŽo(Ü„MäÊŽ’@¾‹7£XD	+/6à^0‡Éú}|®À¦(ÃLëHä£šÍ®-Dú; ï€ëE!-8‚63£@ÉŒ£¸KÓ-\n,ÓÁ´‚ñ©Ä<³ MRUlëè!ãb_\nÃOZ\r³¢ò Ž¬Âö1 5ô^2ŒÃëLSc\rlÓŠtEÃ¨ÝELO ‚3ŒèÎÎLQ1\0Sz<ŽïÔ,ëÈÈ¤Œqêîù9ikl*8±üz3»ôý°×Ú–XÙQ'˜ÆÞµ @×W°ÌüÇ›MOÓµŠÆx¥Cƒ<Ø! 0\nr,#^ÎcÆ9’ºŒ“(ýN#…Ú£Æd¿ãù;‚4ø¼déŠy&<¾¢ö114îÃ0Ù+¥¨Î‚¯\" ÞGcpò¯”â9Žc5—ÆÎ\0XËÁi¾µ·ãr~ÊÃu‚Ñ:¶±sëˆ@Ç¯ì;³mÛ 0í›e_¸îl2ö;YÃJB!ŠbŒËã\\z‹|ï C2Î˜pk^£jˆ>¼¤ï£e°LOXà4 #&ÎŽŒ±žÉí\\ Ü”%Pý48EQbB§õý1!±R4‘%I’t¡)ò É¸ËÔ¹1¸³Å2LÓDÕ6\rÓtá9,1èé;OÐA>OÜ§Ö0òÍúšüŽZÏÍÕÌ-L8fêj\\TU´\"ŠŒ2ƒöO#\0-çÓ.xÛý& €(€ zÏù/€€\0RHˆ	\"q„˜Ñ‡ãMk±|Á¥gbTK	q0nA´þ©¨³‰œ\$§ 2âž¼I©5sUÚ‚Ö±\")=èˆB]É	K)¥õÍ™ò|@C‰³€˜Á“\0‚ôÒºšs¸1‘ã°wÍÀ2¤¡»+ÓxS\n€‹¹€¤MT™ž(Ì¢©¨ŽÈc<(,×’Sœ—ú.älÒPÒXY½3\$x(ÜÜË\n&äÉ’0Œ º7å‰v¿\"IH:\"KP³†RÒÛœ²F¸™H”pÂp \n¡@\"¨@T¸\"„À‹/ØúµVç0¢€ ‚¦j>È/µúËÙSá’(œRRÍQ›æ¨£‡tqÃlà4ð§’|ŒÉB0e&XÅš£úc¡ƒ‘	´UÊú»gQí± `Ûâ?C`(+ ¨X¨Ï¡ï3ŠGr:X9±`\rÁ túŽùƒ¡œ4AH-Óú(-RBuèý+Žñp¤®Ui-hÒ¸4TD+´,œýQ&uIô^ƒsŒ¬Ž†x€KC'd…N)à¬Tè\n\n†Š¤.ðð~•ö-uxý2\n—ZAI¡é¶M¥l¯Æ­…¸«{h-&UtóO|3`Ôòœùœ¢­Q+Ÿ@ŠcMÿeåÚ³µ[¥ðT!\$²_ªÁ>ig¦AÛ?(r0qù·YôC	/ÀÁE\\HL…ADÙ¶’ž¢[™!	á-³ªûrHšmCˆ@&Þæ·oÃÁâÛƒ	h®JŠŸ††5˜zû®ƒs%\n¾×\\ú¿tj%Ó	`ºÛÙë{hO]À½7ºÞz‚†’±M·'Ð¢‚9%uý WüÝûF]Ø”(r à¢0Ã(bÁ§ÚM§ª*µ‰!E5d8@ÖÜ_­ZŽ0˜x6\\ûTYÏ HCeœ²„3¬‰±x&%´\$™Ò`bÉô÷mË¼äÏÌjXLQ×€3àŽ(Ì}¤8Èm¸àê‰\rAÇ!–|Iô~`-jTyK%“3?*Þ[ÉXé…Ð<³˜IÄÔ,É+¬u’²ÊmJ‹H¤¿—‡Zªó¡±§'ÒgçZs3E\rYçÐ½ÖB}=HdYÙ,èRžÉù™*Ø6¶àPEÏ‘ß%ºh²z\nv3TÇy^~O*—3!š™gS;mC>\"BÕ”Wd-Å^1¨hI[j)òçÞYh57Tkíc“õÖÄÕí»E—éøáÅ‹X)_bëpMn­µR†ìäð¬dÙrD™m†ß¶®Àf¹YfÄå,v®£Ø`¡×Ï,+[Ü{7\\îÙ]½ëžùÞ9–ÊÏÊÌBW‰«@•­HM)ßùMÑ<1\$\r#ád?-ÎB#\0M[m«Ø{Š=Þ-½¢7Ég-x&ÅßZ)¥=\rï]ÝÀ+¥[Lü5‘v>bÏ’–›œ9[ÐÊ°¤7Þ¸Ÿ•]Nð<­¼ú_Gà{gÐ57ÑÙ¥âZ÷*êL³cß7ß–£­u<ÌJ+\nš½jÊ2.Öù°Ú\n/!Öu›0c%?9.´È”™U´Žâë›Ë`’Á´üSŸ,ø@·TË=¤’-eþŽ<¡‘\rëÄ2)^ÚÎÛ×§>|y¯9ç£¸t!-»-\0ËgùwNëÊØpŸ#ÙÑµò/lï'®%OºôŸÙòê´®½—PÌÿ#Ûð_~¨}oÃú!R»WÏ“ák­{>Ý'FFÏ«öýç’í\0ø}¤HÈ8-z®è*ÓOØ\r‚%úûÓù}Ï|J©Áìß8”ƒ®<\\ñÌÚéþ(îÇ*4å^ôÇPà`Ö\$Â.€«Û†ÀžƒLË°Ü¬²ÅÃ¶¶†Ø#\"â- —R:æ6./T¢ Ùâ¢¢cèUåNÆïxÛÔ»P%lÐð.ÑMºÙãà\r€VŒª0\rnH\$lä#°OÀÒÆ¶/Ò'>?¦Ú—@¨ÀZœZð”>KÆºÎ÷‚Z‚PoÐtžÍ}+NË\"&Ê#0hŠ†ä®z4à›	P˜¢£–Ãè6¢òÿ#h.âš°Pˆ3	Ò.ð˜ãAâP™ã£b¢¥‚@71n	Zã]%j B!0ËBæÈ0ÌŸ\$ZídÊ\n!Í×ÉÒ1¬Î§qLË£\\uìÁŽ&ÌŽžûÑÑ>mÍ€@ª{qJ”Jª¢'j­\nJæ>§fhÍƒˆÓÂF	‰¬\\­\0AÍ2\\©ä\0Œ #NÜt¡«¢%é‚›\$¬'e>-€ó€†<\0ÆBJ,pØO,@)Ç	ã±(žqæ™ à,¥¢÷J\"d:çÀ‚)¢Ô².ýËh ZGbLàh¨*KÛ!R\rËéñ!à\\";break;case"ar":$f="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0Se\\¶\r…ŒbÙ@¶0´,\nQ,l)ÅÀ¦Âµ°¬†Aòéj_1CÐM…«e€¢S™\ng@ŸOgë¨ô’XÙDMë)˜°0Œ†cA¨Øn8Çe*y#au4¡ ´Ir*;rSÁUµdJ	}‰ÎÑ*zªU@¦ŠX;ai1l(nóÕòýÃ[Óy™dÞu'c(€ÜoF“±¤Øe3™Nb¦ êp2NšS¡ Ó³:LZúz¶PØ\\bæ¼uÄ.•[¶Q`u	!Š)èÍ&ã<Òq)æÖ ˜ÈF>Ø¡Ps7Xì5g5¸K®K¦Â¦àØ÷á—0Ê‡Æ¢¶§\nS ü›r\$ ¯jÄ(î¢v†°Ì¶!Jbž¸¡‰q««0\n¸šj\nÙˆé­¥jƒù@Åzšl<\$W¿ÈrØ“£åsœô§Ì†U&…[Í*¯³lƒêŽ (B&÷¾ÆÉè4_!ÄÀËd\\B¾ñ=Èt[¢	ãë?‰:²X£ªØ¢eJ	\$£éÚ\n&Œ3Þœ:îšã•ÊÃ‡OìK¦‰Ð¬ÈJÓ\0x0´#Ê3¡Ð:ƒ€æáxïQ…ÃÈ6»c(ä\rãÎŒ£u`<7cpæ4õDÚ5pÊ:S\"û†0ÃXD	#hà×µˆèã|¥¶vkz7Œ£l9´¢˜¢&\r-Úž–&ÁmI\n¬ôÈH=ËsºŒ2NAª¥D–êÅÔ\n	r\\ÓìeE]\r¥Lij«&î²\$‹[2B€Ý¯ÚZ¬Æ’ÄQ?ió®A_Å–¿!)tå*£ÀP‰KŒ#¨Ø:°Â6£+ï/sÊIÅÊÊã'	j>\\¦—²lU­HóÒE*èŒõ\\¹¬‘>ÈfÁdöAx©oÍˆAk”¸MÊóB6T6WŽJ9Œv\$ÂDIÍ¼&-HqZš8Ï0ë H^G:Mn¤ð OhNï|ï3\$\nlüCÆ¼ÌŠaq%»ÛÃò(Z×o´ÿuÏŽ£]Z•ÙµéÚþ‡`÷Înl<’;Î¿±tâÈo“µÓ<ê7l0†òVå…Fƒè6LóA^´£xÌ3\r•K\nü+WÓ©MÉ¸*\rí@Ûb!\0ë[£ÆÙc6T\rƒxÎíŽach9{£Î0»aêÛ5@Ü:·a@æ\nJy'!¢È0¦‚1*„|’”C¨+Arl!«•\0 ¥Ê{ËŠèDl„†£tÖ›[ê1z…Â“•ô\\*ƒ„hu;˜Òú[ ƒ‹!ìC–PR€Ø…\\C9eÌK„F)Ð½=\nJ\nŒ`dÌ&†ænÃ‘©‰ÁÌ;ªÕ²CÀp\r*X2A&¥Tº™SjuOªFÕ*§U*­Vªõb¬Õª·W ½]œ|°Â\r‹c,…”³rÐZKP-`Ð¶Ô…!¬Ò®RªžØnYËŒº‘*JOÚú1©iÃråJ?ˆDÈ\nøUI*C¥mŠ¹òŒ×a©\rÂ	 sö`Èk¶eZU¦(}J{›w+¢%(éO#PdØT“6DÈ4/+lx…Fù)Ž¡(e£Ÿ#–”Ôt•i¨2O&!âÔ&a\$“> i[&–-ÀÜ¶Mé¿\nX8³ž0r\rá´Õ\$¢‰½V €1¾•¸m\rñ³È2ÌâÆT4†Á@'…0¨BÈ‹\\®ØÀÄ”Óö/iMBM™ìµ£âXóŸJ»Rt)Õ½™s!	CF@®…ÓMX2@P3³½´†ç¼²Ãz¦\nP1Î}\0005Æ”Ö©@Œ…SžïÙe*ÖY#¨\r#j¨Ò*³ÚqÐ¡U±­†þ‘”òd\$|T\0 ž\0U\n …@‹_¬\0D¡0\"ØdÃ	”•–=1»².ÓÔjîÊ¡³jŠr…±@%.Ú¼¢¢ìAÒ“y›Ñ—”MjH«?¢³à”¢´…a8«f&L˜\rA1“a`KíK:FK¢Þ®Ä.á×“z·4ñ¿.§ssŽ·	ÎÝB×qošD§îy¯Bèånœnt›(3ìƒ*Ë\r-¤:+€ÜŒiï@ÉØ¦\0u!,=qÄˆ#ÇzQš<\"°”Ë‰TKÒPsÂ¯dFNps¿uM‡4Õêw›AL4‡¦dèpŒÈ)†S^ÍØdn„ˆ”97z-æ;™EÄØ Y~%«dÖ†PîMà¶ÄåCÙaH‘ìúø`'˜ü£eK«CÕ¢­¢ƒä´”™’k]	Åvd§Q©¸\$»Zí¡'vŒ‚fÙJM2öÇM’&XáÝ0¬F¥ŸJðP^«5ºóeª™ˆ)™üs®µÆž‹la“:`°¡P „0'êª\r&Ê©©cLç©·›!ÌäšP\"” ®Z¡(86~›j`\0€‚]{‰³%í1—´NJOx°ƒOC\\‚ûµÛ˜›\n\rìe“¡A™¦L¼²:È3:M¤,Ÿ-PHø°„»Ô«²vÌ`»9í’B!y5À&]»öZc(\"Xïh\\d!‹!ßû¤.PË(w#˜t!’}—¸¡*‚HjšÜøcÊ „¢Ät%Ó˜8±/¿¨grd¾›|µä§x;´4Œ2SC{¢—GlM™ÈØdÞŠ3”.»SY:ú‚PÜ’6ÀˆåÉžöç”°”@PûžÜt75˜1\$Ýqlõ’ä~Ú×bÁùü‰èÑÚ p±ìh/¯0ba;Yúo\n °)ÃÚô¥æîÙ3‘YOˆœ16^wá){*Ûs)m-‚Ù\"Öò†˜¡mÊÚÚs[„Cã²«ÏSïé·ïX‰ÿ*ö«PVQNNÊÖÉ1@@\n,Ó(×çî¹Ý.C{»·VïÜë‰\r³ù!KÍõ?!’>«ƒ˜·eÊæ¡NçàzwÂºŽjë[îçÞœ%±ûNfÞ}ßên1?²Øßë¸Ïá¿gy_ý˜þ+Ì;`õ:Þ[~ùÌ+mÇÜÚEÐÚ¬édÔÛ\"ä¿ˆºÁël®dÈ8ìÍ˜Í'nûïæõd2ò(a\0ªëï\0ýÇ_08ÌíÄð)ëX!¯¶ML²•\$Ëcçb>/¡PˆNHd%è0lÞãŽf²EÜ*°mz10vä‚\0Hi,?Z•-ÜiæbO‡LºGoˆp\nj²È(`¯ž!pjIÒÀB÷	0Žbi|·NG° F0PÍeïÐ4L¨il¾P,ÂÎfúö¤&þNÊõeÜ\\ÎÇîÞ-¡lý£ÊÿÂ‚É\"žû,”ß±¸B&p1îø.N€èQ»#Ñ‘9çl9Ñ?ƒ”^Â&èÇXµjlÒ`†ê9ö1­¦('[¯ô÷ïÒëïþ+0îö]\r1!\r­+ÇŸ	ˆçÑE,þ/§L2Q[0F0-´»“o\$2+^öÞ•…ïŒiÈq0“ñÔ¸oRü¦PdH¶q×\"	±êHÑM1ÞHÑÌî¦,öÙd0Dò	^%Q¸ðRhÑåÐÎÄ½OÃ\"f¢òå\"„>õC§#É[Q\$KðGÇ9 /ÔMDXäò-r\\LÒa1±#’fÓjd/¨*¦+£®ÊÞÜMÜc‘Z>kÌÉâäk±¨¼Ð¶ô¤÷ãckDé\"ò	œ!ô×îxpÆzbñ[*ÌæHš‰åT#c‚€ê#€¦cI-Cu-²”\"r˜À# `ð?ðƒâ’)p`è@Øj¾`ÖrªfZeæb‘ Ú[\0ÒÇº\\\"fÊ¶²Úe€Ä‘ªœ\n ¨ÀZ\0@V Ç2C¸îmn½büÚ-¬kâ:b\$n–º\nˆðçd	³%2Œm¦F]±åî×{ƒ Ï@@R@WcÕ+b†«ŽäØñ£øÛbè%)˜F¨Dœcì	Š¢ž#¸á³¾¥Z4£r8\$L¯fú”âÑÊ'+pq/bï¬Bïñ\$DêXðb>Î¸¿\$?Cï# Pã>®ð\nƒ„5ãf4Rã3ª\ràà¾¥PÄÐ:ŠK@+c1À‚³&„èMi\nTK8²Ï\"h³pæ0æ®fÁT)ôU0œÊ	D?é@™…ÐñEîé“^@¬ Æ ê\r¥ü&Ï> ôŠ’«k;ˆ9C¤ág>K_?2Ž(Ë¤»‹¨ú¯„LµËP¥“Ó+£©¬.¶°ÐNr|h¦ç(l?‘6F€	\0t	 š@¦\n`";break;case"bg":$f="ÐP´\r›EÑ@4°!Awh Z(&‚Ô~\n‹†faÌÐNÅ`Ñ‚þDˆ…4ÐÕü\"Ð]4\r;Ae2”­a°µ€¢„œ.aÂèúrpº’@×“ˆ|.W.X4òå«FPµ”Ìâ“Ø\$ªhRàsÉÜÊ}@¨Ð—pÙÐ”æB¢4”sE²Î¢7fŠ&EŠ, Ói•X\nFC1 Ôl7còØMEo)_G×ÒèÎ_<‡GÓ­}†Íœ,kë†ŠqPX”}F³+9¤¬7i†£Zè´šiíQ¡³_a·–—ZŠË*¨n^¹ÉÕS¦Ü9¾ÿ£YŸVÚ¨~³]ÐX\\Ró‰6±õÔ}±jâ}	¬lê4v±ø=ˆHî·ƒâ’ÀDê²¹%’>L*H›8ß@¤ª¤——P|.Õ3dŠ¯m XúÂé3’‡²ð!rÔ'HS†˜¹1k6A>éÂ¦”6Ëÿ5	êÜ¸®kJ¾®&êªj½\"Kºüª°Ùß9‰{/¢­Ê^ä:Dfã5Mb(¬<¨ùOÈhù(™G°Zi4=æ„Î›¹-bk¨®1l™#äšÀä©j©Î4ˆúùÉ-jAA1c‰A/ˆK»ÃÆ>•BOÃÇKí\r%4!1<ðh1²Ìã§\\èhF‰\n¯äœO°“K8\0Px0„@ä2ŒÁèD4ƒ à9‡Ax^;ÙpÂ2\r£HÜ2ŽApÞ9áxÊ7ZÃÀékŽcHßlA\0è0Úƒ(é_ãØ0ÃXD	#hà6£m®:xÂpA{ƒ@Þ2\\Cx@:Žc(@)Š\"`Óm®4›’˜²Ð£€²«ÒSS”4«¤Oè;*“étøá¬¤®¡ïÎI“7m.R²G´»ËC\r¼Y-Šú±>ÅÄ1‚RëJ&„º#U£+hù5+Éä¬Õ¦†Ÿ>GQê’Ú)¬:“0ŸIò+W5ª5¤ª€5J„§/q¤´–UŽ›/.ºu­7‰Ô[S‚¹0h[ø——aÂ)zM¸0ùEF¤ŠÆôÐ0H“J¤pížþ€Ã­®óµÇpVä–\"ú•#í‹óíeÀ¤q³rÁÉ©º¿ä¼:š•'ÄzïG.ô[š<O\$óÇ V&!±ƒˆ”¿Lš½ŠBûò>ëAv_Næ9VS¥ÂøÍJ”ð´–`^eh‰UyüÑ¦íœ;/oØÇ{U,}ö¸Ÿ¶ŠøSJ¤;Ê’›sº†ŠZ&!L¡g`– [B~(]ú>7†iÞ+g<ä}ðbÆ•2‡mñý%§~õ`°\n\rÐ953¢ÜNù›(=!Òâ„\n›£8ïm×”Ätï\r1Ú3Ä¬œ’7|IŠ©(Gd4äŸ2(}Ÿ	\r0PèZ\"2½Š\n,n‡íÞ³ãŽ¿Z!bEÄ­‚àù”³Ôe­Ž •è†^b2‰/’&=“juUSU‘Z&©ˆ²—âÙ0‹±¬ZF…é#‰éD¬ CÊ©‘>Gý˜ÒúóK¨Ž&€¸†±\"JoÚ~;ñ@™s(ûÉ€'êP„¾„žˆDyP‰† í'n…ä{Ø8\r´¶6BI\n±˜.\$& )bVåêRQDÆ¹ˆR‹ÅN@)B)-IQqOPÐÂÈI‰›Ü†“I#ø/#aóT+2q[«•v¯UúÁXkc¬•–³VzÑZkUk­•¶–êßë…q®UÎ—Jë]«¼hC….UOÂ,_+í~‡9Ÿ(\$VƒÐŸö1'à4~E°)&™¶e:Ù\"¬8ð-Ã§v)\0_Yp‡†šSTw`ú£/FÜ©Ñ¯J	Ã9èÔËLrä‰{\$\$\rç#\"ñ	›¥RA;¼´@P¨ˆFI©dvi\0(-À¤¼Ì“@ÍÓœÙgS ¨Èógà‚RÍáL¢|Lb„ |…Ä£²’óÝÙþ!¢Å˜–è§¥\\¤gÛL%'FDóDÁ¶jÑ*NŠ?k†ö\"1x`‹e- •òžE±ÜwçIKp@VbÎZjT'©™©—>ÍÅÏžc\n†¥1PQQ,’ÉNV#T?ˆ….!D\nôŽì!*'=ŸE¢¼jŸq\\e7>‘\"KKeK—”E¶‹9NÚKª³MøôSšŽL\rªPCç%;Þ:sq/&©xïÄ;ÒXX[\r,åÐµ“Ck‚0T«D2ŽØˆR €€sÆVë#7ïTÔyPb'óšŠðGÞq³G)QŠCÈ¡)Ù='g1£JU*KÞµ\r4Ð\\®<ârfóðB	õÿN¦¬SýSÅiêÄbÆ§ÄôŸ?°‰3‚p`©>4fÈßØxû’a¨~¥gL¯Œá†[4	aˆ<¾sßÆ1\$5°ÕªG¾¨Ÿ5ä}P±[ø‹näP°’ÅUß…,¬U^9ÎxÉ»ÊÇýUypÐS'Ámœ/»„J\rD¸qtïmb”5ÓòÀR¼Ð\\vÎRgÈ•Be^a¤1†è·ƒq¢Ç*»ãü¨®™+º¬U¦íQŽ3¡¼Ž9×’1añyX®—‡\\â?’NË;µO	§R¬Fâû®*/ß>\\‰¤BŸ‡	¬÷_ücC¬!·¹4*¼ÔX\$rW<î[ô€n˜’,¬ÏHK€Ë\r–ÄÛpkq=\r‹­¡æ){Ê#¹«áÂ4#mMn…MxxKÝjNË'6—Ó”­XÃ¤SBLé\"å	šëäþ>ý±)¢¤ÍÒWÒÊn=¢:•Õ!^Ö ‘sC§bÃ7¦é[\"ÒfóeŸîYœŸ+~P	‹þq5’å\"4!*@‚Â@ !ÕhËE—#\n\rÁ¼:Ðê‚Ó[a’m[rPÅ\"”x&wª—´Ö’x hhÔü´†qžŽ÷ï{böÊ4K(	ÉYD}ÿÄL›RïŠÁžÇ1›ÅZ®ûN‘%Áw^Džy?¥’ÂE‹¥sË–5hÎeBTo:ê¼EÞ½ŸôgSœ¿\0;ç ed·ÝÃóÓá»×ž\"ø®ZˆWýåÐßÿ>PûÒ>&Éyb©ìÓÔ:ËÇ‰úkÌFœ´\rÕø/×U£Ãò–¯½åKŸ©ø¸‰âð^ðÂÔŠ9F£¬HBÖÙÍ÷O ‡çnýŒQæÝC¾”è  ª|wîh„äRÑËŠ4Ë:Tp \$ãzÎâ>¦`;Ln+®œâ+öÌ(RzcF@@Pä*@BjÃá BÈÖÔ»ô.b\"bãÇòk)¡ðvå©°±èÜ„ Eü<gLÏ©¤}\r,+#j.-´fÇŽ•¹B®×NˆÐ0µ\nÃRà|è~©ÒàP°·ÐË„7‡æ''‰nÇæƒ&nƒb’³åm†¾üÃ0†NˆL¥jxRç‚@£bb®–rcRTQ„LvêÃO1*Åf;&ÞR„š|¤ öÎ»°œÏ…FÅfô7F¨Î¬Vjâ¾ÇÌ\nVôdîÈá`(mlê€†Ï+¼ÍÀ=ã+SgÆ®Ì±e,Â\$¼½\re@Î‰¯ðÑ‚£­í´Ò(BÏQŒ´F°©Ô˜gð»0s.s¨Œ§÷0ÞŽpâêf5Q°c­ë0‹M@øÌ6å†+­©1ôÓ+H+ËêeLPPÃò\$c*ôÏ‹ã¾õ¯3¯8T2´R¾ŒÓ.Ž6R,&R0ñÞ¸¯’óºÐAq âÀäoÃq£íÛ­ìÓÎD¸NI±»ç¹ ±ÚËòlóð·Ñ¿qÃ ÍªSÑlÎðxkî&CÔé\n®C†¦í4ï˜–fäuc@slšF¨Df<¦Ã|¾äH¨c>’Ìlj1MÐ‚â„Á¬ HƒxlÑÄ¯1žÐr|çL<Û0ÇqRBgÜâŽ2}TåŽ:;l£.†¡ÌV¡ÍúÊ’—\$2	\r\"–ã/3gW3²8Ñèómÿ4Œ'2šêëÑøÑ§…/5†ªêQ¾/×(q¥ðÐOèÑnš³‰'1Õo¢­H'8³{5Ä“ä)ÒháFg,˜ÇnÑrœýNa:3œgBf&ªÚu¬:ar7'#¥\\A*~¢HŽô;e ˜,bÓÒO\"®• Pºä0¿'‘±?(é2€Ts‘3ñØ¨éK?qã!³_² èÎ4}OÈp+à?¥B“ álüÓRQ?s¸êÆ8¡	C³u;´K\$ÔA¢¡mv0dB+nŠbSâÊ„¨:ÁcAóNÏòvÐT¼õ)QG§BRq)“£;±üb4Œ‡YG\næ´™@Ñå\rÓ}+µ4§GLª®´|è´WD\"TÆutvQGwK%Ó[NU?óTU\rå4Ñ½Ió`GS«B´ÂH„¯Dh+6¦TvÈväÄ&3Ê!KS=5†}ð­Q´ïO’ˆÓó@†ÇRÕS÷:ScKìTæ\nä%õkh'E”Öx•=UESHG7;+ù;föÙ3v®ªÁ7Òt&q“ÎiW\r–Lw@ô¸ô”¤KjæëIa´!OÔ%	 °9mÖèÔ_%,VþÍl ’,Úd\nþÉ¯pïñÕ\"ƒéW“üsHóo‘\\í7%ÑN>¹øwÒd.&Ÿj¿ï&ÄF¿]‡|zÀš æ[`ä#¥Æ†yEÖÆa-]aõÍG¬°h5²9&5)]ö19Ps	åGc¯^l\"ˆhX\r€V/£¦&,¶gKT–Oâ¶¶Œâ£²M9JDHƒ\njRêpÁ¤\0ª\n€Œ p“IÇXb‚ˆòQcsúÂÂHžo(ÍjS8°vHù£Mjì&|rf­hâ˜•Ç¦oµZƒ#ÑT‚³=«[¢—NE%ŠýCCÿ\0qE(Ei\0VõC)Œ\\(£94;:ìâÒLïÕNªÈ6‚}J‡\$UÄìê†ô>72¯NAäŠMlñ0gÊúüÀôhèØÛ…\r*•ç\n	”ÂCJ—M\n÷YCIªÏué'L²S/¤äÖÞÛ«­wW`yÐlÄàsu×‰1t…WÒyl·yP³y–¾Ž¢Z‰ìŒBõ­v·ƒu²ö´3p„G>²`bæU–eWªE…=Å„­¿òãPqÌ|—Üç1y6ÑI^Ï˜QàRöš)ÉtÊKFEHJ†ÿ‰wÅ<Wºoì“{/²ex&³jÏƒäã7B!.J“ËÎñ‹h0+!s\nV'kMfy3Ò–b·íÙw¯Õ*(í_Õor´È’ÔÍf¨DºBöS¯Å!%>u¢ƒVB>8\0";break;case"bn":$f="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÐP²D§±©êêzê¦.SÉõE<ùOS«éékbÊOÌafêhb\0§Bïðør¦ª)—öªå²QŒÁWð²ëE‹{K§ÔPP~Í9\\§ël*‹_W	ãÞ7ôâÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Üº¸%3–©5Š!n€nJµmk”Åü©,qŸÁî«@á­‹œ(n+LÝ9ˆx£¡ÎkŠIB›Ä4Ã< ŒÀ šâ5mÊnÂ6\0êÀîjÀ€9èzžÐ ª,X‘¶í2À§§Î,(_)ìã7*¬è¶n¢\rÁ%3l¥ÃM”ˆ¨ \r²öã¢m¢ä‡KÑKp€LKÂúÙC	‹€S.ëIL•G3ÔW9ÊSÁ°³“TŒJzÜDÉ‹d†¾6­ò[Àí\$ßK’+¬ŒÓl÷CÔT»ODu;t§««tÖIÑTÒˆJ©î}F¶ ñC\rYÔËÄNÝÍ5,áaR‹nWFóò‰,ÏÔ²L-õÕ?Ö+Å –­ŠpSÍv”ÞP©å\nÙrÃ”a8§Ää½TAÓyJªÜ’2xÞ`Px0¼Ê3¡Ð:ƒ€æáxï‡…ÃÈ6Æƒ(ä\rãÎŒ£v8<?Cpæ4øðDùŒ8ÐÊ:`¢ü0ÃXD	#hà÷\r¸èèã|¸¾YËø7Œ›ê9¼‚˜¢&\r/Ô	aÞõaHl+r¼\"í¥!‘j}äSãF4‘|°Œ5lÞâ/”_BúâŸ9-ÍÍ‘DYpýÀâíÉ-i\"«ÚÕWdAwÍWf°È\"7¢ÃŽ-l„¼eVíYÛÊ—3%`nuU'·³z=Ôw®­\\ÇLÞëÑSÂ×ìl*¯Yˆ˜Â:ƒ @;#`ê2ïú¢¦¶k7¤¨âÀó¬ÍËüÇAF/üDØV\nñ Ã(ÝñJö¿I|{¸µ­£Lü©„ÉÕ§e2…ö8¥Åê@}¶Vé70ª¤€2\$E›ÄÁD4Oáê,„\\ŠÎ@Fw±” #ÈÃ0F-,¦âb¾Uú§â\0Ñ›4N²ŽSÔBD\n=LºŽ*ìt…¸¸ Vô)›cü;.™@,‡¬ôÐBÈHEÑ¼²jÜŽ\no&°Ù8—ü†;[}DÉu–Ã9\\B#XÔGX)’Ëw6êø·?%°LÁaj©Ä§¦ˆF²ãÿR.uF7cyŸüIM1ÄÓ‹Òd4M1äu‘Üš%^Žä9\0£ºwÙIä\rá˜3Æ*Ó×à¦%‚™l	ðyç\r¬À<‚\0êÈƒ¨cgÄ9†gp`oèÐ9‚Ãæ¤èaá…	jäA\rÁÔý€æ\nZy[t‘S‚\0†ÂFS¯„Ö–â SK4j Ä­Æ§èp^\n/\nHÉ9*Ú‘#Mï-÷¿uv×©nN¥áZ£’htD\$8‰¨ÁnPUÊŒ(ÅîW	&Õçq/Í~g7”fyN	¡„9Ÿ äz(`sìe¢†PðK€¸/öÀØ+a,-†°ðîÄX›bìe±Ö>ÈY%ì\0002¦X™plfÉš3fpÎ™ã>hå•††ˆÑ¥Èa\rg‘¦ž†-&Ãs:iæu6\"¢°däyeF3ÅxA“dþq³Õ/›%t›f(èÛ”©ÖØ›y'}gL\0j0¯‘dTÏ\\æ­Æ\0 S5Ñé\\¨µ|?µºbÍŒX ñ¾¬µÇ\n¤êPs®¥@XQ}š+	+Rg_É±Õ\0S;5VP*¡€Qa:;_¦œJ{äyO£4œ²tÜ>åÀóf’«+)Ýv»\"ìˆmº¡l§’>Nð ¥¢žgtÒsE?‡ø0 âïèh ÁÈ7†Ð@iMQ¡çñŽ‚\0Ç*ZAó?§È8K ÊÓÕQ(6ÊêÂ˜T!Ð¡è•[aLE„.©	‘ƒRl(2¸\$ò5z† \nQgY\r}sUWR£ùD23©×èd›ívk²û3	<ÍÃ{\0001ÎPL½G´òÆ\0‚¥xf\r4³f2îªmë½¤‹6.]ŸýMÐq@%bÃ3H‘ÐÃn\nIœEÔ£\$¶cyp¢-,,Òš`ù_S‡dƒEX2´Ž*ÁY`Û­Êâ)–ûcˆò\0º\\ÆqR {Å…&¼i(ÞÔÜQ¯e³?•Ó\nèÅƒƒeÝ§í¥5¢G%>aB£ž!1žJ-ã9RñÊƒÕ©ª'E¸\\åÓäï¸sì¤%EçÀ¦žVùGYg\nµ„-V8¥7ÚÇ‹Œ—LvÕñl‡!O Ò6vRzz.íSJVò%DäÖ«ë‡Ý”’zÁ¯Ä ÊÍÃLŒ76x4þLrMW'zí^-Dg­Š2ÁÎ,ç \n´!Ö†År6|“áÔë·^¹»‰	Ê|W3JMFg5—“v&ÑÓš7qmËr78S\r!éà;Ú%ãÀ\na”÷3ôzQ×“G_Ä±M0ŒäÄÒPÕúÝ@Bèpiw¼¬2´SØC¾öY&67R0,—ª\"úmæ<èƒÖ’6·åæp7¶ÛÖ¹Æ	xX\n—Ñ¼/²­ö>¨L²ØlrÂi+Fw‡þ×VsðÄjj6m¿u’F‹}û¿Ç§È^6rXè<…”ù¼åLÂQÍü—Kn®ØÿüÑ)\\Ÿ¯›%Á\n\"kô‰óháê¥ßDÖpb\rí\0‚ Aa ^v,OŽ;`G”7Ýóì2Miõ¢VX4ýOÕQ¾IëÎ.x qgW<÷ ä¸œ9m^—æn„¶»ÑÂìÐÉÁNSo¯7ïàWFéé¿¨ãmƒ»ëÐ‚ÎÎèâì¨`D&ÄýÍˆïâûˆ\nþ­¶þçÃôœÏú².Nœ.ÎpH~SMt 'À®ˆü¹,V\"F¦rƒÈ(*uH.üÅI\0d\n,äOŸ\0ƒˆó¯Û\0/ø(ï¾È)\0šóÈìG0:°`'­jÓ°.oplœp \rxî\"ˆînüP i†(wKØâBxç(Pé©\0§6|%Ñ…oÊ/BÂ´í–„…v¸¨EJÀn\nÄœîŒ@¥Ì0° [†¢-Éš)ë.6ãrü)+G¢T.L°qÈÞk%Œ-„`p8ô/è¸âÜJÎ+lä±†ÌÌ'2k<-¬5M¼}‡Mc°lbÜl¢ñïL¶Î\"Ýì\$m @¢jo“2mñg!Lp¤×(x ítp.v×Ñ*ˆ°-ŠUå…Çq\r¬0¾ÌÃn±Ð6¬+Œÿpœ·ë\"ä±œpñ‚p/V}ÏüçÂÑ°âŸµ…äŽ¯ntJnìç±±1·oêËI[±ÓoßŽªÿÞÚÏhŽQ¯Q³’2	.Ïí™ÂˆI¥ÑÌØxëJN0:ˆªÞç*Y•OdáŠ2oœž?òBÌ\$œýjõ%¡LyLû¬êè¥cg2ëí8úu†ø;1ÿ!r\r<ì7'f5hM¥€\0PÅïh0­\nKàRx%¼õ­ÖÚeÝîâ£5ñë	±ØØÍ¤â…2[f§*àX”B²‡ÒË+M]-ßr.2É²èÖˆîÚŽÅÙRß!Rå/ˆ‚0¨†~²¼œîy,SŸ1”è’M!R\r³\nØ-‡2pêÓÓŠl\$ýQq0h‹!38ER‹2Œàã+‡Ð¦oQ rCÅ*.ºO‹¸ðÖ¥„¯Ò‰+¨ÿä1R.Bódz“#oà.'%Óp:ò¡SyÇ©BÉR(ÂÎSnüö¢¿-;,*9³»5“¾­§Àý.mqû0ˆç÷!®ìC´uHå3(‘/S>ÃŒJÖUCrE;\$ˆÍ•-Í:­BÚÁm¥@ðºBñå\0ÚÎ*LHžŸ²ý%”VÔÏ3­.+AÓ¥'LëhäM\n!ÓÁ>ìJt-ð„ô Í8í0À|caMBÅ“ãr¬„ô!…=n	=¯µ.²cCò9!Ñxë\r #vÔR^Îž¶/[4ª‹%¯(s4ó™;“W3ô¸’“±ç2Å8…L¦Òöp]>rÇ?òMÒñN06Jå3Ò(MëJ¿1óÏMs<PbÝO”eI§™0CÓ76•\n²5­¯SNóûQó‡R%¬ôôúR4½4Ñ±O/\0ôÕœU=N/>tõ&k†Ha\nŠÂå†í´z‘B{ÐùVñVS„LEpüáLJHÊGDÞB\nA&G—PÕR¿3õ]Y•?Q³å6u3ZeZ²ý95PHrL5¥.pÈu2G02`î’TUjA¢Y2Õ~[‘o\nUUUFPµÐlSù\\QwVCW^(˜XUëRÖ\0·UFŠìøœt\$PÇ>ÍK†««s=óÉ,«>•€Qu5bGba£NS#ctÆ³gBJ6@Õ¯]’õdÔØ²+…cë‹e•Õ4µ±L”çöR°WfÈàüVs±†ÏSÌâÖK3µ¸²(T-Ô)\\6G[DÅi•ÍC¶ ‡¯Jm/\nhéiâ[dSÅ_O\n€«yFö-P5¡iU	i¶Ê‡6Îño_³\\•·jïÌŠìH 6ƒa6Im¶ñ\rÖã\$µï>6uk÷âòK_åõhnÄÍõ&õýSe°I²KYÔÑi-\\³ô×+m(5ój“ë(ÏaKW róS>ÇÞùÂð*0Ç8õ˜kËq\0ULŒ–Ìôì¾ûso7Ç¨ªƒ:³v}Ó{‚”íõt”è;pwwð\n~„*‰'WŽóÙOÓý=3>ŒîAJ¢¢µb¾,\$Ös¡@õi!÷“R¶†¡jbÂ@@\0è¢B\njt<wâ?7éwÕ¾uÑšá±ÀÔB	;;Sƒpž`è@ØkîÞ ÖJÇgvw§~©\0Úh€ÒÉ:i¢êÌˆ—7èw@Ä©€Ü\0ª\n€Œ p:x4F¢ê—¡B7W¬!ÂÜŒf­n×ZØ·Ÿ±c74F7‡k@Wµu—K5‘ÝpCImkÇ\0â©„Œä(Z\0›ƒX9\náIeynwî¤Ðâ§¬lDJK’‡²jñnŒ—E>O&Á2WlZùÄÃmE3ã0v”l\rÂYwÅU‰í\n¬r»dk‘uƒ/†?Œ@å	\0BÒ4-a tž!ÂŒ8±\$;W·5y4ä±l(”|Ò±‚µ8f:ÖˆÛå\08‘Ot™YmÔ”˜hóËc4ç{ƒ\n„=Ãä<7ñ„«ê\rààÞf(åŠ7”y`ÔXC°ŒXTßx²w•Ñô‹M:{B\0{‘v-Á=\"¯E/«0áwT¹2ª9•6)LÏ”µ¸¹Ð€Bžtf¢KóŒð,þuh\nÀÂ`ê ÚÔ†÷6.PÇ»”…\"ØB²?\\NÝiá9‡Ú²9:/>®V=Ÿ+rì‹Ž‡G­@}4¨[•Ý2ºD}:Ik¹Ul™b4ö=eVkV	å(äK}7¢ÛdEVð<ÖùX@	\0t	 š@¦\n`";break;case"bs":$f="D0ˆ\r†‘Ìèe‚šLçS‘¸Ò?	EÃ34S6MÆ¨AÂt7ÁÍpˆtp@u9œ¦Ãx¸N0šŽÆV\"d7žŽÆódpÝ™ÀØˆÓLüAH¡a)Ì….€RL¦¸	ºp7Áæ£L¸X\nFC1 Ôl7AG‘„ôn7‚ç(UÂlŒ§¡ÐÂb•˜eÄ“Ñ´Ó>4‚Š¦Ó)Òy½ˆFYÁÛ\n,›Î¢A†f ¸-†“±¤Øe3™NwÓ|œáH„\r]øÅ§—Ì43®XÕÝ£w³ÏA!“D‰–6eàiMÆ~ó}Å“á£˜è!Î2Mý!ŠèÅPâIW³I¬K¹í˜’lðÒmþ0cL@ð#A\0Þ24Ë*š¨#é\n¦ <M²+‰p¨© Ï{ö‡(cZù«\r*ò9+`R¢:¿ ìº#Œbò»!«ˆšÉ˜¥ðÂã(ÞÆ‘dn&>N€§ ¨¸Ê9&c”4ºpáý8±p˜œ¨ª¢ò· *Â0ÊÂ„|ËB¢Ú5(ÍÔÏFáâ42c0z\r è8aÐ^ŽóÈ\\0ŒŒ2¬9Ë˜Î¹Ô ðƒÃ˜Ò7ÁxD¾Œ#“R:Mâûn\ra|\$£ƒNÆ\rÃ xŒ!ôÕÇƒDÖ\$ãš)Š2ÁKüŽ‚KHúFKÏhÃ»±èê5Žˆ`ê1ª4ÌpÎÓŒ–E”ºY­²Wc‰Ã{,‚¯Ã´¬Àƒb:7\0Aq\rKõËpÜvÔný\r‘B0#„5P/ÒP‚:¤kF¶½ó~\"£0Â:ƒ @Ë^/%jÀ.€PŒ:ÃXÆÃÈRàëOLî}xÉÇ£ÏŒM3Z3Œˆåx¹¹‰Šä8O‰ˆêšº:Ú‡q¸ˆ:Ø\n2DäY³Šc[&‡fé3õN´ìsc[4è½büÇhÒ<¹‰Þ\"”ÀÌM’_YvmÄ=3uÊý+kûˆô£mŽ#.l5›¶mÀQŠPm¨Æ«Àhü¹')Þ¢*§cÐÂp©xÂ¶94ƒx[³¾ìñ¾ï¼CN[XL”Ì³tŠ7ŒÃ2«%Â~S4L#{Z6£CÊODŽ£ÆÕc6\rã:Š9…‹èåÙdC\nŠâÐT	?_ƒ(P9…)pœ2²Ñ«Ä‚b˜¤#jƒ \\KÊË¾Ê?»âà„6â:¥ÂªR2½\n43²Ép­_”(\r]ELïúCYx)˜äŸå\\„Ÿ9-A5päh0såÍPða”{é¨Î&ÔÞœSšuNéä;§´úQR:RJFÁe¢”bŽR\nHÆ©U.ÅTÒœSÍ´ç*%H©Šh U*¬D\$¸ÿØQ*NÀ«*\\}KiþGnõ™ˆsú®r=¬Í«R\nj˜Á./Eðœ%´¬˜Áy*­-E¤lCƒCà	@£¹FþhÄu Ìl='¨¯Åñâ#®žR\\—›Ëly\$™Øµìa\\è5GRtODq+ôÁê@ÏÁ½<KŒ„ ·ECÉš(á¥«ƒr6FÐÉPâMS\nÈüNŸËèh9À€1’È,Í[052É”ÚA€O\naQ	Fg¿ùQ0®æÌ—)BDÌšÊF‹¡p ÍP7bCQ„v¬CI)C™.t\0±²XŸz!@XÇÒiˆA¥ !*GF¬”JÀraGõôËÈ¾’!Id2J\0†¦f#^¡‰\ne´;³HF™PO	À€*…\0ˆB E\0 Ñ6–€ƒ™3F© †R©P &ZcLé©íGrLÚRŠ|âƒÑ¤j‹Ä6•j¡T™mG…µ3Á|]ª\0pbì¨\"7Ù*w£K×egi[ P@ÙekcÒ·‡\0Ta‰zfÑÆRVô–&«~*‘ˆ·7ÈÌþŒÛš<Õ5Ô8w6]ócmíÅfK%`\\©ƒÎpÀÞíìãGl`7ÙïFˆù(AH2©àÒÎOšŒ\"&­\$ÕÎ•:\r¡¼š™°¡ã©HA%09±ö†ibùù!¾ÜÚN_…_\"ô’“f<‚BsG@!£°àólqfåÄòžsÒÝ›Ã°š¾]C/ pi.÷mPÊÙZÏ2‰…¨#p“,PÃ^ZvVJ”SÃ#˜sZAÓöÒµue#ÕžJ;Gê#ÅÄá#ˆðÑÁL)Œ£5jáÉI´bMÄÚµù\n3½7bD˜˜ ßX¹/[XY\ržÕ Aa Kunj¨	“4„‚±º\"AÞò8F‚…™¶6V:æà€ˆ C&\\µ#Ù‡/®ãQ&%`Ž?Zæ‘\\Šx+›/¿ê€Ù¸.!W4glÖÆ3qÅ'QhPœìç—Œ¥ˆÎíƒüõŸ(¦jÅ9´Pšá¡43ÊÌK»;HÔ\\#‘imX‚Eí.z)á%Ë›+æ’Ÿô¦–Ðr+=jÌÑ¢µƒðÒ¹¿Yè]˜uiÒY³]k,ã¯ SˆÐ†% f‰½Å#¢m\$¬Êµ»!lÐÐ’c½µ\n:\r\$F\\ÝQt’Î··6q…†PÅ¹’:7ÆíçBƒ¢à\nL«‚éMªXgÊjí^•FÉYÃ\r»­üèƒä|S8t¨pþXêÙ\$®…¨[Û	ÿ‡«g4w¸|w‹“íÈ·PLAÛÌÂE{°ãøæ‚ãäk—_Üìæ¹)Îæ¼Ã;5ÎZô‹uRZÍDƒIFVkd­—Z„Î€É:ŸGcˆ¬u\"8ÔTå†êg@+tî boþQY7As’…—«ÈìK¼ž/\"\n%^.Ôÿ¬¥x½7ù2IœÒÂwxíÞK`e>ç9wr…`;Ç1çÚøËø~ýaù¹…´œ˜—9{Õ{8÷{ä>[ÅrÏåoO1çOHrsŽÙY:æ™Ø9bò¡óÏôãTQ‰7­>~¿Meý§´i]ö®ÕûŸ\\}†e[d›àY]AF™¾'´Èó0Ünp©ùúeÈöo±ô~Õûœ­üåhÖŠ±Øbä÷ô¯äB-Úc3l”ùœR´Ëêõù”oÜª¢þ*þ¬À&n \"ÎægÎm\0B\nOˆÜ#è°¸N:ÿØÏ #O¤üAÁoú .†FïF1bÂj¦^EŽÆëô@0ûËòZªóOMnzóÏÌqJú‹VÆ&FŒh’¯0úÂ ÆP|8Zô¯ŒgÂñpnÁìŽ°{ðp¤í¨Æâ†1¤¸=äÆ\"ä1-öé€B@@V­Ž1­ò\nO+2ðØ÷oDòB|òŒ]Pjü®C\nšwF*¬eƒˆ³Çnî/ZÅh—\n0ühJ=ådI¥ŒedV#é\$D^sPÜä¥BL}QÏ12/°žöi*!Ç&r\nŽÓ0dDA-hZM\n10`‰Ü!ÃÐCåêÃ)X816±„Ãaû°u,Büp›Ð“I*Ä†(q\n1©\0ë¦0EÊË\nf\\>˜!À×°“Ci‘•Ð’?QÆ=±l×Â\\	\rtùÂã*À¬©. jÂôäD\\ÑÉÔCÀÜ_j@’Ý€æÊÒ_ƒÌ2æ%†(¥øFvµÐ¾Xf64%À1FJ7è ÄŽ[‹RÚB23ãX«Š\\Äï/›\0ò\$…½	§BögPÌ2Z ™&Èdz\r€V€1àÄ®¼BpÏè9ÇØbJˆBPaC\0y\nX\n€Œ pœd( ÎÕm^§IúìÈÑ.È”G¬×ìè28ÍRÄðˆüˆH¨Ü-VÃ&?†Xã\r¢|:TCmêIcäEBö‹²âã6[Nš.¾ûîh-gÅ1ÄÎ1L8[®2Â‰3ð\r@Þ=0oàvãZ2fÈa,ZåâW&ìq„j9ë5CNì/tÛ16SX^S?,sr».È±O57ç5€Þæ0Àôð³‰5c°+VÆÆ@`\n¾³F\$ç0'`úJgfzrk«³¾íD0h‚XD4/µrØLî`êE\nÃ9'4¬'âª0¾| ì#†\"ÆðrÅ-ó¤m¦0?“°é\0ê!eÎ-ÆÊïíå.ôê#.oP\nD¢+ö\n²ŽÞéÏ£ *À";break;case"ca":$f="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&\"ÀPÀb2£a¸àr\n1e€£yÈÒg4›Œ&ÀQ:¸h4ˆ\rC„à ’M†¡’Xa‰› ç+âûÀàÄ\\>RñÊLK&ó®ÂvŽÖÄ±ØÓ3ÐñÃ©ÂptŽ0Y\$lË1\"Pò ƒ„ådøé\$ŒSÓÞLà®\$ÓyÉò¨ü†ðËÎ)ínÔ+OoŸŠ§M|°õ)àN°S†,ê,}†ÏtÒD¢£¨â\n2\rÃ\$4ì’ 9ªŠ²’¬I¤4«ë\nb!£îú†\nƒHàù„\nxØ¾cªJ4²ãhÄÊn Â’8ÌêÈKÌN	(ðÈã+Ð2Ž‹³ &?ŠüZø«ïH¦—µÃ\"ëÄ1 ç.ÀP‡È#\n71¤´Ž©éÂ‰#pÒ1)£ƒ(hÉ†Y¹óhÓ7µjÂ7;ã &ƒC(3¡Ð:ƒ€æáxïE…Èúm<&¨Î»ô¤\nï£0H^1	+b:P\"ú7;a|Š>£*„‘‡xÂAi¬€4\rã#fü á\0¦(‰‰c8£ƒÑ¨°ÌZ&¢òÈA¨rê1ŽˆS!d1É[e¦riÖ£M­5&ŒKË´©EU<¡µ°Ä<·\0HKu]Ü®6£jõCÏœ­¤q¼Ê1²•Xè?OBön Ê3,V;/c¨Ë`¶{ˆÉ†ÉBÎÏ3Dß+%ì(š10ØƒŽÃzR6\rƒ~'ŽJ5ï1Œnþm=	†Z›gJñhÖÊ2RÜ@¸î-‘ã9…:ß Ì(Üfƒ#)]W‹¤W‰Ìvå«3Ü\0Å/Ä3ŒZ–öÁe„êSU2(ÿ\rÉ8ç·½(ñ\0[É0ìâƒZ×¡¢&Š®© \"°åÅnC.épá·Ç\\ð»âOK=\nH0ØÙ MJ’££xÌ3?“Ã€¡ŒpLñh2 Þ®'ÒãòÉYùÊ031VXÞ¼2OÄ‚<£Ã8Â¼¸Û­Þš¯/ÐÊaJcÛ\rnø@!ŠbæŽÈø2Ál9/HòN75É*N«.£kõãŸb7O	äéØŽL§hLIšl#	ÌYšbºHrEïº¾“¬™“A%©áÝ˜ÆÐ–Á&	h9‡rê­\$2'ÃŸÔ\nƒPªD¨°î£C\"%à¹I)@Ü¥2™†êp’%>¨UnTªœŠ‘Æ«Uz±(FéZ«r|öN3(ÉÜ§”.^ÁonÇ°„˜¦N…ADh€§x‚PbV0ÅvÀC.`ŒÉ„hˆÙ HÛ\0P	@ƒ÷‹Ö0 D¢(E“1¾BðŒïÁVø7!L™¨8Ë‰cï+G¡­“RvO[)›\$UþÀSÉ4*\$Ä\$‘òi\$2¶+l\r-«ct…”mä•#Ð1/%dÝ= ÆÌUÌ·>„ØÀd˜P	áL*dÞÝIñ&Œ};ÊP¤C#,+.gÈ¸^Xç_­ôÇ?ãØÄ%÷%d&2(*Ý,°jGäú†ò>úƒwk0¤À@ûA\0F\n‘ñ;«bzã˜™Òø6¦Àäj	‚V>Ä3#4ð‹]‰™ˆÚ{5@œ¨P*ZL E	–¥Darõ^åúŠ´cVIHK2„ÈÅÃâ>dxpch´ †bv‰IÜ;Ç9d:tB^ÓÕU ,ËXOL¨\nMý³&9 (’†\rº¥:¾Ð'!ró>²”2b’Ö&•ÎPÍZä\\›~sÕ¤G@ß\rc2M¤\\dNMò- ‘=MóêØb	±¤½7Ou¬ebm‘ÙL@IC£áQ_oáŠÙC6zÒS~‰»âz ÛÄd1¸*9T6|CÓJäUé1E¡8yâ¬•½9ØøkA7&!5’ôÒ.\n¶5Á”;ØÛ‡©b47`ð±Öêß}äŸ^T‹B2XaDŸ6‹ÒØíN63Œÿ™³ìJ¨ñ+@4±œªeú9Dˆ`L“Â(nf„aŠtëºè\nn\$›™ã†,©ú˜vHÔ4Z=€wjá*\"ŠXC	e‰cdê\$Ü´6´BpGú]_[}~éMÑ™žÁé—.ÐUÜ­œþM¯ñ¡‡!\"\\ÏÕGµïöÖÊ4ò~~Qt\$Öû˜Pè€JWw™®±\\²N2ÜîËÄ0e˜èH(mÌ¨¾4¡ƒHhi?+(7CÒbóòUÍ¹`’gùœ˜hÑQÑÇ\\¯›Í–ËºEÅéw¯k„¾õ0\$aƒ\n¹J&@œ2jPÝ=¥©³‘l¶R‰ƒª9Tn§m&tžy&*-–¨ëÜ¸eZwB¡\$V“Z0+ ¤ÞØÉ6%òûh¬ƒ@M\nÙ:)·¬“ãü‚C bÉ!\\šßXB)Ì µZ4õZÉ¥nŠ’efDh¬sä©4d+D½ŸÖ¿gVgàhìû]ÂøßåWÖ¸«WÌ37Þ1]øÔéEüzð“y(x½áYè:\$ûÌpFlµ:ã€ Œl ÛLì\\‚œˆÐ‚%aò› Ð¹Û#ååÕ#ð±žØ(½‚¶÷^w®¾Jp'½·™}¯EìMC1\rÍ:†@RŠx^ùâ»ò½ÖJ®˜ùšjO·¨’ÃÊ;mƒíõÛ´™¶çÁûÊ`°Äœõû_Ï|â{èžïÆÚç‡„ïÎKƒøö÷ä³×äk3Èé‡{ë\0Ã¾\\â\"õrYŸÌ~eµflÑÄý·o¡ËÓQ˜‘gõ¹óÉxÎ,a/ýEëÌxd×1Øn\0ø|g¹wü…ðpÎ ®Ç¯Qð@]K»Ú0)Œ\nÓLÝc)Y§ÄøÜN3Ø‡Ã™øøôç¯ëo»ƒ'‡¯6óe£€»ÙOä¾F¦šÌ­„¢Bb\$.ú–¼æ¯¥š¾¤0}Œ\\ÁKø}/¨§CàãOX[ïH[BH÷®×+òNEÅ¶‘g\$‚ª»ï«FÄ®âp.³Vßï`ùÅ™‹¦Ïpb9ÌTÛPX_eVÂ¬0¦ÆBpµc&bL˜Ëp#ˆzï¯|íJ=ˆï°^ã¤Öö¤ùƒ	‚imï4o§€ÕèÜm+Ô(ëg#`D¬npMjKfë\r)À¬œC¯ÐÉnZ}_	ÐTMb#ºaQ´òo6ß ËAy‘ø¯4ô‘q\n‚0À÷fûq¤Ó\r°J¿±5È#ÊÞ“\"Žüãçî±ðÎhî±Æè1c1Jò®À¢>.± ÷qp×O(m‘rÁê3ÆÖDq‹m£Lñ˜C…TPÇ±l<oD§é\nŒJL[O7Ñ¶	´\r\nOj@Žøk*¦Z{.úEå¤`gŸ\r\"˜A€ßëH…m‚0\"ð\nXŒ”{NZ\$‚ø-¦Zh0+%¶Z\$Ž1cP Ë(_P\\ðÇž\\Í#.œ÷P0*@ßÌL&.n ¬d‚\r€V˜äÎ}Lb`æPª‚Fc\$‡&£æ``Ä#§˜\n ¨ÀZÖv#ìo\$¡çälÂÎãC#))LìõDX•‡€f  êòbçÜå'æ¾Åª+f%vçðêqCÖ= è=ëFÂCÂ°1Í`Šr<lL)vaâ÷Ž€1fn\$£(BdŸÒŠ:`™0ŒÈjãn2@iEŒªŽ›\0l€àãd\\O#¤Æ>¬(ï73+|’r:v(4#y4o­°ÿ4Cï‹z²#M\"rv{Hü=‚l»'¯4dcEäd¥Š¬Ç´ÿ4½÷0nÆ%ŽÊå	ÊsS9&ˆå´êŽ¸ 6þãø!F&Ø±¦B¥êj€á7úc¢ô?’Ö2\0¬ºÅ¿,nr2\0003€¾s=\\ÇFÚ°“é-ó@JÍ×4äã‘D\r\$6	fJ ‚Ålô`DBX„ô	\0@š	 t\n`¦";break;case"cs":$f="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt¬@\nFC1 Ôl7APèÉ4TÚØªùÍ¾j\nb¯dWeH€èa1M†³Ì¬«šN€¢´eŠ¾Å^/Jà‚-{ÂJâpßlPÌDÜÒle2bçcèu:F¯ø×\rŽÈbÊ»ŒP€Ã77šàLDn¯[?j1F¤U5›/r(ß?y\$ßºâ¡±Š¡»”Í¦Ö´JòMxÃÉŠ‹(¨³So\0ë4šŽ‘Êu¾˜=\n Ü1µc(Ö*\nšª99*Ó^®¯ÀÊ:4ƒÐÆ2¹ïÃXýƒ˜Öa¯£ ò8 QˆF&£˜Ø0B#Z:¾­ûˆ0¡ÂÒžŽM0)¦¦)Jã(Þ6ÂcÓ\nc(ô\r±(¦<¨Ñ\0ÛŒ£’€9C,„6 B@Ë\rñkZÀ-°À ‹\r#C¤PŽmèç\n’°Âé/£„Ñ5\$Núx»¾(Ôì‹ÏôÓ@!\0¦(‰ŒR87é\0Ê3¡Ð:ƒ€æáxïM…ÃÈ6Æò¨\\”ŒáxÆ9…êËö7M£xÜ„KðÂ9ð\"/ŒQXÜ5„Aò`8'r Ý¿aà^0‡ÁˆØ °@æ•ŠÑæã¢‹ø-\rïsÉ7ŠXÖ×©`P 7CkH77¨”ÔÔ\\W%ÌÒ·­›5Ž¨{Vê\"MÀ×£ @1/Ð~ßøEßØô¹ÇhÈê8£*D`P—!§ƒ¤òLB`	0ä2ØLX¬a—£Ñr&¡V·öµ£K<Â0ë]ÂøèÏ‘Œîd1hÝv¨5Œ2t4ŽÒ¢-O23z¶84dØDÔX‰0mûö<˜`‚5ç/Šç•\"a/:VM£	Ñ	».VßcÐ˜Œ£¶ÞÅ°C{ðø]×;{jÌ…ôç\\w.ü£åR”YhŽ‰ÌÑÄ\rTwÄ•/¹1ŒS(€\$-£	#j\$91b(ñÑäÃÏ½\"ísyÞ¼3ÁI£ÆÖ“Ì6[¯:ŒÏÃ2„7©Xž2P3ká·¨Ný”7\rù[zk˜A?Nó]š…\0õê?kò5%µoû‚Ts`Û392šù©ðÛèzH—©ë{´PÏeoº÷Ã«¿|OyègÌ‚óé6ö¼ÀÒóŸ›ÑOÇ\0¿†Üþ“Ëü4ÏýðÃc+Þ|ð%›4DQXt&‚õñ²xS\nAŽNù;|!˜”†ÓÆáxÏ!ý¿Òn|ƒ¤MDh;.e¡SKê´7ôF“Ò+{©ý4¢³¾øS|G>b´ú¾H„¸¡KÐ(Ì¹š\"jôƒB_EqX€ÅÃ\rTc.djAI)E,¦ÒœSÏ¥Q*ELªQ<ŠŠÁY+El•ÂºW€ùÐ¬HÆJâÅXë%e‘2˜Té€\$Þ‘‚4”E	;ŠAÎ*F%Þ‹‚Ê€,µÌ‹ÒHN	Ò{\$¬¼—¹b|ƒÑßG¢eþøŒ\n)¯j€Ëé}3ŽŒãB¶T€H\n\0‚`L!ZE¢0(*\0¦¬[,bâj\"¢„ã6Z0ÅÑB<†È.‘Ä…çŒ—™ÂfËeÁ;…g}KrtMa¨Zw1|ŽÆ}PJí^‹ø5@%WÈ‘SÄ\rr\$Š“˜i{À€ ©õB@žé@æ¾”g:®ß3v˜‡ì•¾çáÉñ@0gP(ð¦¹¡+	=>\0UÉCÞ¡fu—7 kÐ\n®Á¤3‡S†#T!©dk}¤J:\"Š\n…Š&RNUƒis1èLŽâ@H¨0m\ró¸›`©6Íú¿%&Å\rÔ×¼GzVJ¦Ø0Ò™iÑ&³èµ’“VOC±\"GOº‘8cJih!§ŽÄ\nt“,ML=œÚiC‚³+-pµqRÖLa:H–Ê-W.w\0­³39³rLI+q)^¯¹/Ûã`w	Ó†ëhÅ‘\0æh#q>vI”•¢ãf™Wüõ”dN—>aOeÌ¨.ÁžÇVãï³¼©%%Ú¸Ä…Þ¨¯\\GÊW—v_ÚHR…¤1šÐÒ«ŒbUE=K¬éîæÄÚ›‹’oNT-Ü]ƒ0¼5ˆ–s›PÈ®3åtlž.áQ×˜4KX\nD(Èì‰Bj_ÌXO½³êû<{ºº.j_ºÄ9»hîK\rjU\r4„=MVPp\níÉ8‘µ\"ÆBÑCÅ´o«À’#| ‰BÐd>AªÂ¿¯+ðêh¶Ç6Äk+N#HÁZ‡+i˜Ž:Ýª™·5Ã¥›q1Œ¡§€ k…ó®f¢«J3~™»`CT2)’s®³‹uN9Ö‚î–²	;E¬ÄôÒ@¨C	^Š’c4ìq¬.¬!†ƒÚvnAKÕ‚ò¾Á\"{E\rl Ë>ø uæ¹\rl2›7É¢H›MG\"ŒëàÈ½í³žÖYÏÀ‡¼[R`.¯¿cM‘§µ¨u†`:í´÷¥zç«ËúÎÞÔ›¶¶+qÙƒfn8¡¹nÉÝs‘¦	»Ras—†LÊ§òjÜew(\nÉP‚¿¸6ÝÞ{+pÄíuçáM5J=Å°ŸcãG‘ëPí“÷¯ ¦¸}b¶¨ouÊ!ä~—²Ò‘Y×Næ„‹¨NnRž³ÄP”žòV¬UJëÔªsŒG\0w¤¢È¹R7`—S:&äµÑ¥ø]6i•Û0¶Óƒ Á×¶m]lÒèi(Ä¥#žÃ‰Üºéº1ØÞ·gø»WÑ¿ÚFü9ÙË%×ß&ÿüˆ½ì÷ˆ'Mè_/²¡âÉù¸'˜ÿ&/?=MýÜ[·ysùÌJ¾üÆÔô¤¯ÎµŸ0îo<Ä#ÆjÐ¶•æ‰g¼‹öa“²–W™jk0D@().@Èi\nšiãèÑZ-¦Àq4‰üàØ½BENf(—'•™G´¥ª4·Š\0A•ŠÏLaÌ@1‚\0Q£mzû\$>Ð¦+®í<Ç¢ NéÔ#žàÔXO öoì¼\0ô¬ö/6º§0»üP\nl|ß\"4ÿOH4®Œrg\"r¯>ßO`ÒŽŠ*p*ÚGÆÝ04èâ'CÌO¤. ¢õ0VMb<ÜÍ§ªßí°µmà>P^ªÐ>7ãÊ'0h0lü0pÝm®pD˜\\Ðc0fððmíùM¬àVàK\n°ë:LÐ­òzàÈÆåÎÕ¼ÌÐÀ8ÇPÐøÏ\r¥pD\rÎŽË@Þ\rEî/£~®‚2ê¢ýd.–@æe¢b¢Ž?`Ô eª^èXD@à{¢<_ÐýÅA\"L›‰heHhª¦€«\$üàÜÊ}†âÈË¤Lq84ä8Àé\rð¾±aË¯žòl¶\0´Ì–\"ël´oØÉBva)êßk.4ªjz1‡p0sñ’h0Ç'X'… ÒgX]1”]ÑÈ×\0001šõcžÑ©R™/SqÇ°LòM¨7 ëB2ÅgÒ‘áI’ì\\3£Öbçˆb@–\"¡|Ñ¯|]«@Lhe£Êl„6ÐP\n0ãJñ}\nƒÏøåm/dÇñvpà@Ñp9ÒBÊ‹ß\në±®\$’Hl%‹Ð¡Ò^«LÃßÂüb¤’\rb€@pŽr%d\r'ñ\0002=¤©'Ây(ðQÝ‚7)„&1¬½ß*ƒšbdGÊôq+Ír“ÅÛã\\b²dÒ± ÍLæJ²½Ñ‘-ÌÙ.ç\rÒèÍ±£*ïdèò¤ÎRêKÖ^,ÖÎ„NF‘ÃƒtCM3.2Áä²i.ðp0ÓC’÷’ÌB>lŒ.0Ÿ#…Ûƒ#3„>pCÌž‰ì²¨^äR*Yà5IG5…\\Æ•&„¾“T#Sl4s\\z\r­7Kâ%`–#(\n<Ælè\\Jc¡6á2\"Zwä(Ä^!À¦«\0ÆSTzã´i\r«P™“fÜãV(CDÝP³mß<íõ=3Äß³Û<ªÒíX[ Øc¢(f¢|. _1h(‡º[äª™†TBçÃ-éÈ}¢l–¢H‰¤>iç¦Z\n ¨ÀZW;êôt>­ÜÛShüçD¯p	Pµ=ó{EQ\0­üÝ“Ý‚ šB*\"íôŒ'rf‡\\mEë\$ìp1€ô/í\\F Nø1`–#Ä/Ä@ƒæ^©éF\"M.?'ÂÏ-I#+î¥åö±¤T5>çcB:„ÞæjÞ\$kn›ËÆFÎÈë\"´Æ×F&ôï¾Üôzs¢Ü»ïYO\róJ©À·§ÔDTþmTòú¼(€à&®X³ÏÉPÁ’ä\rÕ#Qzààë£Æ(LŠçµ.öñN]Q†Äàòh%©ˆš^Jv&TA†Ot\$ox(\"‡†„ÅnoÐ\nÂt–1îd\"3~.î(Ã\" 8ñò\"<ú><À´@Eºòrs”º=ƒAO¬Â·‹â4\rDn™‹¦v‹v¸§ 6¯Q•—(ÄÍƒrêFbx€";break;case"da":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"©ÀØo0™#cI°\\\n&˜MpciÔÚ :IM’¤ŽJs:0×#‘”ØsŒB„S™\nNF’™MÂ,¬Ó8…P£FY8€0Œ†cA¨Øn8‚Ž†óh(Þr4™Í&ã	°I7éS	Š|l…IÊFS%¦o7l51Ór¥œ°‹È(‰6˜n7ˆôé13š/”)‰°@a:0˜ì\n•º]—ƒtœŽe²ëåæó8€Íg:`ð¢	íöåh¸‚¶FÛþÈA´ŒàwZv \n)Þ0Å3Ëh\n!Ž¦~Çkjv¥-3Še,Ã’k\$SøV¢‰G¤Òä˜)ÎNS:On&^ïn:#‚þ'%Î äÇ4{ŽÚ¦##°µ°8œ2Žƒ´\"5¸C*É\n-\0P˜§¦°8¦<ª(¦…<;²ÿK`ì7\"czD³ÁÂ#@ºŒ*<ä-pp …2(¸ÜÐ£ëT`!\0ÐžŒÁèD42ã€æáxï+…ÉÚµ¯+8Î©S\0ðšÈ0Þ7áè9.C¤œ/ŒI˜Ü5„Að’6£Í‚”:xÂ(c˜@âƒDd˜ACª€\nbŒ>š¤â³66£\$n\nÊz\nüŽ£Xè:ÀæÒ#°Ò2ŽàUER5)ð'-`‹¡£ @1V#(ÖÕÂj9Æ(ú,þ\nø%¬Ž\$†0§°8‚:¬aà1§¶S\"£0Â:ì¶Ž¯å\$SR€PŒŠÓÃLÎ¿ŠcÛe[C Üµ»‚štî\r²Î9¬ŒÒ~é·ý´6\$O¤<4Ël0¨¦§cF3¤@PÉƒsà•hØŽc\$èQÁh×dâƒ}TB®ÑƒeUTc#KK‘ÄuUåÈÀæ„² PžêÂˆ.p0ÁˆÅ¾¹ø(-2ðµ/ó¸á€Àâ*W§ŽL6vËc@Va™?‚žLØì,è%˜Œ\rã0Í‹*‘Ûj:ÁÂ ßH#Ê92Ž£ÆúŽc5¸H«Xæ&–ì0Œã\nÖä¨u´¶7Z(P9…)8ª38\"ÒÐˆb˜¤#«¥…¡_y¹JUlÛŽVRN&98@ð5cË:>ûåÕ!)ˆá‡³CÒöûÂñ´1ê2Ä\$éJ 9dQ”49\$U—}Š§^\\IT™'J¤¥*JÒÄµ.At½0M,Æ¥LÓDÕ˜Í¤ß8²S¤í</²ŸSùåPhQébÎ `14\0€3“¦^ÏP­2IíÜ‡7âAHëT4,Ü¶»4\"Í˜p¥g¦t“—G\"¦=hê7dH›¹\"Dàs6€H\n\0µ¸B¢|P((€¥Þ“KE1û<EÉË9‡4\\œ<0'\"GPoÞi*%„¸Ï¬³<‰òò(½´\"–noYë¥^îÍã†sÈ{Ëy-”•lƒ|uDÀ4)¢zW	äÇX—„ÈãÌáš)aŒ¨µ\n¦ƒƒˆm¤¤•Ã€žÂ¡Fñ7Æ`×À /d\r½ÚÃØ)Ÿ\"-l¦²…á¡;'§°¥†•ôCq\$ê€Ð;²”IÌx \rfHŽâA™8€ê4&ÓÒìÃJIÁP( ²2ž•2\r\$ÄS/×2Õ8æ‹€Îe\0Rüj¤)z3 œ¨P*YÜ E	z¬Î£0\n1w!CÛ@Pô¨\\E´îÃƒ	( 9¢˜ç„`Ø¬b¢æ¢ç0¾.`Ô{@S—s&úM4&‰0»C( ¡'Êx ÙÒ&®áL)5+JZ#:g†…­Ò£øÒ{{gˆç…e™4ir\"f*}`²<Xñ1Lä5AFgv B¦I0æÃØíÈÁDmÉ´ä«eøjÅbtèõ‡Q@ÂÉY¹j´*Rî»Hz?²\"¦(b×:ÁÂÄã}ÙüYD3DñW¥l©•B˜Tê¦ºš£\0H‰Yf†•°ÂþÉ+	£R–ë6±	(f'A¨ÛN\"ù9g:Ä-œßÚ€Ùj…Å¬?%¤ß´tÒ€-h`½‡5¹R×1g2&)-ÐÄ+/èÙ˜Ó¦°ŽñžP „0\$ì>¦|ÒÇˆ7Xd(á”5élë¨pÅÈö+P@Ê²¼7†,„«µlb…1Œ@á,¶«fán¨ 	á-Â_¬\0còª˜9—pp#Àð8Ðà¼ïáBÂXSBSöRÙïd¥\ná²vÛoÔÃÃA“aÐ–¯ôÂÀ°£à¬nDàsa&ð7‡u€Rñ#ä…sQ•1â-C´Œönpå7QA\ná”1Mâ3¨b	p8ÛS XÃ„luw°·6	„EM¶lbH€³zÞN‹,£/Ð*W\0 ŠH»Ö ´É\n|ÿ dàpfFšhpÊQ2ŒG¤žÊ×r–Pª¦zR»Jí.@n‰–Ó†¨Öh“-¦ë~EÈÀ6Ç’Ï™Ø¢Ì…(D¾—úÕCMR)g,Âc®µ¶¾×.ì9êºj)ž¢§@åÂÌD\nY¨\"K5¦›1† ?– ´¸’ R«èEÔkš}[—Ša ôÖ…h;%,Ãm”ÎeÕt¢“R½Mºi¦â§Û“Pî¦¼l=Óšoó#Àˆo§z£ƒp¿i¦A×4˜»Â…‹š®¿xâ0Ó…t(	â‰srq€éÆ°y	 <{S@k§\"÷Ô¼|eca8í‡3Ú\n“—sr\\Ê\nÔûªÐ0@ÊéND§´¬arðhŒlÙwJJh3„†Lú¡mPe©ô’¸IAÚF7Ó'ùJp‡\"VVsx¶J‰=PFw®æˆ\n6]ö¿™ËGiZ®´õ¾ÔÚ¹„újâ²| ÑmEd•GŒÓ0Úš)Ÿ# º5UôbÈ*‘tkäòz£ÏíCx'ô§ÒZo(Ií:JôÕ«³ÐÑìÑÑø×Ç@6-\$ŠTÁ|6Ës@êÀ­ézÌ\\‹tþ^®wÍñ¼óèq^Âx^êö-ù9ë¦X«­A/Š€þ{SC÷MSüØDë7²O~ZTY®”ÓÀ™~¾èõçCû?òó/öDàÖþíì•ïûFZ4¢\0gàºÆ{p­åŒôOŸDÜ\0Õbþ408\n‹f¶°(óP@·‚¢ß¦J¶NõÐ5\"0·pX@ï×Kz\nˆìºL¾¤WOôÕ{¯R?°}-Ôb`æ3K˜ú#øàÒÏÙ	â’i„ˆÀØhbä¾ÏÂ¨IT¨e Óls¦øÅ€Íö	e„¾ÂÆf\"Ü0Î÷£yÄBSc@QOxêpì©‹ìVb0åŒJÇ0üåkHÄÔcò\r€V\rcÄ\rl\"´ˆëÍ’#>4-ú4ÃZÉ­Jê<ëâ2ž\0¨Àpt ÊäæFEè\$ìÄ(Ša4ÑŒqn8(B¤›	Öñì–¬ ëÅ)-:5¾f¯â&m€@ãzÏpˆíã|Ëæ-ÇY¯¦f±0Û1\$/£î«éÒŽÃžÙŠÚˆ/¨eå._Â0îKŽ4(Õ-H=¢‚ *\\ÜãÎdi×Qˆ‹ì¨£mPÒ©\\E±ÚÜª^g¦F\r•‘×Ì£±ø2Ÿ \rÎáBb2*‰Ô®î;ë&XìœÎ¯ï¢PÕÄÜM¸bøÚ‚W\$¦\"åélko–\$%Ø'!pËŒ;†w\"\"Ú)ë´-Š/À¨£ëˆ©\"Y ä0Ê,£èb‚æ§ªs)#Y]úÿ«B<cà¡ÔŒˆŒAÂ.\r@";break;case"de":$f="S4›Œ‚”@s4˜ÍSü%ÌÐpQ ß\n6L†Sp€ìoŽ‘'C)¤@f2š\r†s)Î0a–…À¢i„ði6˜M‚ddêb’\$RCIœäÃ[0ÓðcIÌè œÈS:–y7§a”ót\$Ðt™ˆCˆÈf4†ãÈ(Øe†‰ç*,t\n%ÉMÐb¡„Äe6[æ@¢”Âr¿šd†àQfa¯&7‹Ôªn9°Ô‡CÑ–g/ÑÁ¯* )aRA`€êm+G;æ=DYÐë:¦ÖŽQÌùÂK\n†c\n|j÷']ä²C‚ÿ‡ÄâÁ\\¾</‡ÛærQÓ¯@Ýš…S´—¬†J97%?,äaäa#‡\\ç”ÎÂ1J*Ž£nªªÅ.2:¨ºÏÛ8âP:®¦ŽŽž—\r	f-;¨ãL:;L(Üþ3£’63 0²ù½âÐÂ•=ê^ç pã\0<å ä	Ã+8éCX#Œ£xÛ.ƒ(&B‘ŠFŽCÜ5 ƒËÔ6»h`ì¸ÄQ\"â(#˜æ;ãéÉãt£)ÉcxÎ€SÅ2LÈ;Âï1àÂÐ¸c0z+ã à9‡Ax^;Ñr46 (`]2Œáz9IZá@:0é`é?‹ã3)„Að’6Ž|Žø‡xÂ*˜A#ŽÊ:\rísh‚\n2bHªM-Øë1³Qƒ”:C«z:º²“:¢½â²´;„ÒäKêþÛÚ¥%®ñÇƒ(ê†(SHæ‘Hz!) ÝwjZð'I%³¯5WNGbø7…¢L¦áß`P­H4rž”)Ë{&Ë„zb\$\0PŒò·£J@÷ˆ#:Œ2Œé4½¹C«Æ[jÐÄ¢®Q6H/ÏU ?XøÜÜÏø¨2Ò£e¬–B3Šâì\r6¿-è8Ç);uèZ%ßRÈ7æºK‡ÉãLÐÅÍr¥­¹NBsnÛû\n±¡SnÆ2úì02§ SRÕÉU8á2Â¨cÞ\"¼Ìá=öÓ¤í)&×­Ê”„)ìC‰=ãeí«H:ã0Ì6Q©˜‚1Hãb6ÆMÐì­pƒÌ7¥c`ß]‰“rŠÛNL……Á\0…\0 Ã€ä7å{Ò:Ð%¡¨ bjþ Ãr.4'ˆ\nr6ÀOJu2Õõ½z\rØÍãwiÛ9Ïww½ÿ‚áø|¯‹ãÞ•±aœ…z#w¦™ˆb˜¤\0T\ræ˜ò3“\"äŠ+æw†ÅÊ„dÊC©DËä®\"žÌHQ	€ŽyÐ\0È‰ãªuŒ|¯óÎ8s…q¬ÐÄK	ñ(\rÆµ•¾ˆB^Ïá»Py%dMOPr©É1·‡ŒSÜ/0²;@ž“àeOÊ(5\n¡ÔJ‹Q¡ÉG‡%\"FÔ¢–dje£Åä|¨ŠT­ÙUÆòûj¯ ŽTÙdQò¶¦µ¼SŒ‰Ë\$)æåYŸ‚`Â©ñp¦Fs\"uB€H\n\0´)’Õ.fšÃVFñ\nºr¶AËÑ3/*4PätŒQ?Æ€”âtç\nÙ””ˆçBœdLãõ’2NSJƒ©*Èè(* ¦#”ò>×‘^@‚X;tA•€†çW 0aÊ“’nôá	>(h‡¤^Nå F‡‡U\n-Qx_Ã’. ™;¨ƒ`h)™…r8ûH4uWsD3yžWM[#¡2(ÂöuIa´Zå<ÑøfÒ‰QZ)FÐP\"\r%eI3\n<)…@ZÄAÐ…7”§rj`øzp`ŽQÊIK¾Z%¸½N(ÙãŽtÒOäêƒ<´jX¢¬É²`Í\0k)¹’?’\rK(Ú¼	”¬‚þ0T\n…ç‘—F\rŠR#¤|ØIPåOž2¨oÌ™„fÃ>‰ˆÀ/“SËNT(@‚-(A&[½”ÿ)Y:ˆ¬“÷V¥%³ô”Ã‚›DT€›“ÚdÂt†§tZÊ¿ƒÊv‚)ñ>l½¶¸£žà:ë®8£HÖegÖÌ°8„Õm¡bÄ‹ã5ØBÚŒqwæu19ÃÔÁŒ8iiÕNàæÜƒ*©!6ÚÏF¬AÒ±Vf(K°[/Nœªg*Å ³–á ¸lP—Ñ¡ã€B~#6ˆÆ8'MÊEA¬¸#LÚ\nÃ%ÝbÙà| «fn	î„ðAn&mº&dÔê]§8gHžìi­“l[ÀS6WS Óu#`AVx»ãü‚Ó¨CB6V-]ëÉ‘¯„ì4ZPëiÜ	tcÅÄ*e\"Xurk7ÉæE¬BÓDŽ  I‰²SÀÄWnü›	œ)óø£Ld¦jù Ú\\côý-Ïp×FÃ…@‚Â@ 0´Ù›³†ýƒz¡Á¿@É]IIoˆr6œçè)0IOÄ–'âe×9œ]äP¤ÐC™™÷\$–ÐÐ™nŸ\\Ë¡¬‡3@N˜ ÄVE##«Ã¦±Ô‹›SÝjïÜÒ”du¨ÙÔØ¤ÈjHCKU½u¦¡Ü„ã^êäÌõ_ŽÕ»]‰½¸FpÊòÂz·_íü\"öòNRÛƒölg[e]'77jæð¨Rå(†¿Q½Qñ3`õµ-ü¥o\\ˆH¨¸‚Mrw‰Œ0¤šu#š‘19fV\r\"¹sW=á!\n&PógE³o1ns|wÊ–Ö—Us\0RÅÅÔîàóæ¾VíáÔ!ésÂ6þwa’¸¸¤ôçµlŽOSÅä«aðËÑ÷wTë=8;‹jR9±\\ˆð!Ø…l_\nJ`ñy„•²Ã£=öe\nàJfk’Ç|1LŒ÷öŠ‰\$?}d`*£/leÞ),ì3ÀZÁËá\0€Ë<\nl­”¶©LèöK‡ÖzMÇôt×ÑjÕÐ“MÎë®³zŸeÙ<’Þ@·Æ6t÷×a‡@5f}Æú^{ÙL¼ø¿¯û®‘„h.O=ù·7—¿ÓöîíØ/#t­h_õ¶É&@'ê!_­×~È¼Øî™é±õº®ÍÂ¼Œ”m	ß³ëŽâÿ0Úþ¢Tþã\0úîŒùÍÜÿÐ\0¯L—\0rBf\n%Æ0 Z­‚0\0æ# Û\0JÖHÌ>-ãš\$\$Ò„”5§Š‚Ä–¥È¬ð*¿P0äGò*&+.\0<¢Ž @O§„¦NíGëjö¢PnïäÉíªûå8[l`ÈŒŒóK\"4,œÊZ@ÊZ˜ònZpôïùð·)âÏk‹E¨ö‡ÎBŠÍÂÿcâ&pÜðá°¸°ëïMïj1­ÑÂšÇ%±q\r‹¢\neøLëb#`	@ËËR	h_ÍàÝ¨@Ÿ02nLÜüÎÆøðÅq8ú±>éïr[ëŠü©Höpüù*êc	…À\n§.Jìbä§1ïqjƒã«¬¢6V@¤2 Æ\rfB/æ^i*Ðb8Pø.bød³oË ÷€Ë¥P3ñº\\q³¯‘¥Eî¦çñª+âfóÙ‘·0KÑå¬¢(¬¯,1e²ÊÅÉw2:±é\r\r…ÉGH:`á\0ÎbšÎä½!MKŠK¤#Oò#?R\"¤Â!`Éq=	Ä=à®\r\$\nY(d]KÛ°V¢%pÑ‚ÀÔrn\rë¨Wrt\ròx”G\\eçâ•ª\"²dÎš.B;H€Ì)\\»Ã¶#\$¶ ëºXrl&þ4Âvü\r‰ e\r€V	g9&\"Fc\n;píEdñ¢Z*‡*BPTV@ª\n€Œ p4ªxBÐL0mdçC9ößí¿'ÍJ3mŒêÂ;0æþùñ,éÎíCªìBNÒ.%M41¤ÇCRÀoeæéRãDß\n†íB:Ìd¨7#a-³L~ª=..ìqÄ•\"ÜGÀô^À˜#D”\r^ý @¬ÃÞH…Î\r£¨ÌÌÐÅÐ ·îŠ#¨`.ê<¦–\$€S.¶­fÒ!G€BÄ#³/ÀàBÓ¹9óÉ:\"y#8‡~·9Ç:z#²ˆB¥ùóÆ­Ô»à¦vâ˜#³Æí£šíærQ«Œ(Ì)lj#`ñAŠrIOæ8GtoB¼¸Ã31Žä?\0ê5âä´\"pÂ	¢'D¬Âh22j500I'ØIs¨4“¬Y Ý; Êô‡D\n2Ïb¶Ê|CTZ3¾É Êµ†¡<ìñÐE²\$Tl€ä¤¤%ŒÌ#ƒHFÄÎ/b";break;case"el":$f="ÎJ³•ìô=ÎZˆ &rÍœ¿g¡Yè{=;	EÃ30€æ\ng%!åè‚F¯’3–,åÌ™i”¬`Ìôd’L½•I¥s…«9e'…A×ó¨›='‡‹¤\nH|™xÎVÃeH56Ï@TÐ‘:ºhÎ§Ïg;B¥=\\EPTD\r‘d‡.g2©MF2AÙV2iì¢q+–‰Nd*S:™d™[h÷Ú²ÒG%ˆÖÊÊ..YJ¥#!˜Ðj6Ž2Ö>h\n¬QQ34dÎ%Y_Èìý\\RkÉ_®šU¬[\n•ÉOWÕx¤:ñXÈ +˜\\­g´©+¶[JæÞyžó\"ŠÝô‚Eb“w1uXK;rÒÊàh›ÔÞs3ŠD6%ü±œ®…ï`þY”J¶F((zlÜ¦&sÒÂ’/¡œ´•Ð2®‰/%ºA¶[ï7°œ[¤ÏJXë¦	ÃÄ‘®KÚº‘¸mëŠ•!iBdA\$šž*¬M\n@Pd0ÈÂ0œ7‘ä7®‰lHæ¡®‚W/Jj°¥(\nï>Îr¸™Ï¼bgfyª/.JŒ®?éœPEˆ¢WK¤rC«…º¹)ï”¹/ª£ö§Jª\"½\0*®b×§¥ÒªÊ;\nšÖÁ0¬:Ø·1Š\"¬²ŒTHÂ“JD ±©fy%³)2ª°‘¢‹’Ó: I.²ÅPž[¥1t‰KÒ»¼˜%o<Ó¤(e­¨|¶Þ½‹àä\$Ú=*ñœQÓÖ…h§¹6K>ª{˜‚ ïÅ¤š¬oiœÙÔv²@M:õÖÚD\\“;ï5d³®zZ„jRÇ7³18¯§¤‡iÓ×ú¯‡ƒ@4C(Ì„C@è:˜t…ã¾<# Ú4Ã(ä\rãÎŒ£vX<™hæ4ùpDƒT2Ž˜ ¾1\rƒÜ5„Að’6Ž`Ê6å£ xŒ!ð@Á`è4\rã&p7„¨æ2„˜¢&\r9‹~É.EÚÌ_<‰rFÇ[·ÂT\nãêŸ¾»T™{n7:ø¾RQ9B(R¼ø§Ðô‹oè«ç\nðh\\9/ðu²N¬Ñ2z‡9óQŸ,ºA.´19ˆÑ&bá¹\rÓ´ûçiZ“‚kµ.MNÈ¿ëÕJ¶!•\\7Én›´O´¤hrž¨§šƒ:HÑ×¾²]›#¨LŒV”7¶”²\\xÖúõ	À¥³ïRøŒ’vª¢j–º8k•ó'øs1M7R“š5µMŒ3„â4¤AA›ÃìòÒ‰9EÔ®ã²ÜÓ;¯?Q9‚ò¥N£…zdàV+óØ¾È\$}I°¶2AW)ryP@™!T€ƒÞ!†nÎÈ?V¼‰\n†n=94AJ:\r[±Æ,®}ŸÓÛ=ñÄ7²ítB.pàJVêâ™eD°-ñ%cØõ¡	Ã‹ÇE*DwröŠ’¶pÈÌÝÁd¼×±=n•æ/¥ù_Çz‘6@äH‘Õ!ip‚ø¯ÏùDøœ0\$w]Ùó ²28Ã€VIÚuñ#E&MéY9‹H,ópáÈ©RˆZ½ÙÂ˜Ã@±·SJÁ”CmÑˆ”ŠÃ¯!š£¯”&°\0—¥&	J´mRq¹Jâè%®”§XÔ¸	Tdåaö•ÅRJHä\"E¥£|AÒáhYy%ù	˜-ªaqXaRÊ†\"GÅ\"?¤þJIhC\naH#G¨~Èb]OnýÏ“B¸¶	4ç2h!ÀU‹#I/&IíX\$Ù£)\n:.0¢]PöÞuK™Q™rì„KGÔ•Ü²\\KÔvXM’E(Tï\$\"adRI‹\"ìSïúeØ{uKÍ†°ö\"ÄØ«c,mŽ±öBÈÙ+'e,­–²öb™›5ìÝœ³¶z™ûAhm£DV©rT‡í§µ‡#¢>­Á©‡2L\\K™@'Ô’ èPUè ¼`¤¼S¶pPù1æéóˆT«Aöˆï1ƒ¹3_*J¬¦ÉªQèäW`Ž\$†Ù›YLI¤¹#XfLü¨¥Ö]\nz¶E‰ý\0¨\"eÈ„…NOø[õ6´hµªPö¶Û\0\0(0@¥·åR2¾%e¤î–-Û9K\$­µIÒæH‘+hœ®ñó¿ábaE)’;„P»¹\$øTKŠÐJWQ•É†ý¯UWÛã’ÏƒñÁ4˜Ûw)Z,X§µÌ\0æ‚	´qD\0”6ª'!°Q¬¯dégxŽ‰¡i4Ãa‘2FMI¤M4³±gÈSùyeQ-¨”ëÎÝS¯—ÑÆq]âöxS\n‘Â\0§“W‹	{86€«»eab¹DÁoŸ\$*TÑö4¸Ä¶¯ç„øâŒ\$ù‘DóE+ÔÏ\$dýDX1e2P!Ðuµƒ*[á(L½åPD‚\0Œ.E)HÕéöHwÅ`tºÄ*\0¡6å·\0âÒÐÆþ’œ­’&,.JøV\0 ÆÃcAŒÐ7Zñ\"a•9&)Š¼N£qœ³–v§FB_Sj#ª†uX\"eSŒäd(uë÷Öƒ9r/|•!PlËˆ»¸ä©1JZËJYŽ£”ôó©R;‹J+Ê”,ƒM-p¾ù<±À¨›“\\lp–rTSÔkpaA´Ú™gt›­Öä÷lŠÝõø™ˆ”}vÖ~f†3Æ4W¨aDý‰àú8º9ÛX–U¢­žQ:ò¢Û(§Œ±jý@ÓI¸Ö¯Å»í_+ŒœÒñ\$ÞhÕÄì¢¶í~—\$ã¡ ¤ZHia‡Q³R3]‹1¥nHW\\öAsê'*6¯šÈ«rw£Ìo¹fÚu[¬ÔîUA—`õ¢Ô˜âÆ#µ¥\0o…ÚÃ:ô¡]³|KÍ‚^_ŠâÈWœ¢ÛáÉa-î	<ÊiTˆ%êô=EA&®öøxÍâ	Xdã×d@§¦\"¯RQjÞë­\nW¨z	¢„	¡ZF	ÿAŠ<óPÒùßnz®áñˆ¢áêã¹oÚÓKÚ3¾êÊ‹ÿqEœÓ×¸_¸‰ŠÕøX_Õ@Á©ë›¬.ÿDTpD9|Â!kcjÚè	ÀDÝy|òPóò­½{÷ˆÇ\"Li.k£**PB T!\$\0â¦L\r Ê®Ætl\0Ü\ràè#Àê\0àe&bƒ\nZ„²ÎƒÚ¾Dš-¤¾öÏ¸u\0^2kKˆ+Xtð@Q#´*ŠQÃˆW04.e\n<Ž,ZÄ0\$ÎIÂ”\"¦-¬Ìµ‹ugQ\"(éDUÉ\$fÔº¬¬7hÐl¾‚‹nf“N\$jpJHë¨d¨<&µ…,;)_\"„„Œ¡ê\0‰Ê E*Ð‹0Ž/gP¸PÓ{	Á©ŠÕ4(°àÃíßpÑ	Pí	©Ÿ	á4Ò‹V¤O¨TÄÐV(ÎÎäßPMÎT×¤Dq#Ž¡Òškô¦iJHÈZ±ÎLqÄî“BÒ/¬6ÍBìE–Qã,=kFGËh÷ˆÚn%¾³\$}\"(i‚ÑnÝ1pÒ@@àÊHo´p±;1>[Qn2Lb5®h@k.ƒ,T+´›º‚0sBÀsìÔ%Ì¯ŽXHÎäJ,’D&uèœ‚2¾L˜]îbBÌ|Q&ZKR8KäâòVÂ¾K¨>UÉs„¯FöºD“1Äâ\"£r!dXtÇðÞBÒ² ý÷!	‚;\"?Ž-+°\$>nÊò…!N2Ž C%&Eƒp+g\0‡ŠÒBòI&M&G+%FÜŒÎ:Ed'cx0­™¢³%( VbÜ“'¢Û£ëson¸ŽR,±\0{(jÞì8ƒ‡Þ)è¤Âå³)18)’ÈwÈž}ææò±.¨òãÈßRmË\"­R0¥.&v'%bµeLŸä.™k’,­À-@R„¢-táqlJÒ%òŽUÈá2•¥Ê)ð«#272(OâIr÷2­rä\0\\‡\"‚‡rð>Ò‹\nÒ}å\$‰’Ë2%%Óa#SdD“BþÑ4’6-Q6hð¡\r¤õ’s5ó=\"«‰bTÊ8†cü‘ÀócêK\nPt\$s;Ð³\$ƒs¦pª±‰;—CyëÅ;¢{;ð¯ñ+pÚ,‘øÒÐZ²‚ÈÅdH^Á_6Ò[!²y8¯g³÷Ou?ã@3“']4³‰*ö°?3A‚(3€ð…7.Cí\$ûH, ‚²ô¬¢ÐL6OOPð)P;‚³L Dd¤@s4\$Ìj‰VvB¤Ô^±\r=ñ®Îôe.p’‚¬&³“l'E³úH£ÜÉT†RÔj¯³óBË&Ê¨Žl|Òh-´,t2ôòR&‚LôãZõ/¬uì,Œ„Î†bòøô’Ù)e ‰ªñìrÆ2îód+/S‡7SOO&ïOtT	4Ó¦Ý§o4S7å½(c£BU\$SE8.?P•‚R¶.ÑÅáPó'Dv,ë „UCAó[PI@ÕL!Õ@‘EíRô='UZ“X²(|`èTïÕ-¯ßR3Fãõ^ý*\rX\nh/â¸8eLYÄY‹^ƒ±Ræ%­ì#QÉmS‚ÚÈæºK2N#óOÌ*³Ñ23oQ3‰<®:ü‹URóVÓ›PuÇ]ŒÓR‘S™@µq&ó[WjàÓH‰V¤]5ró’Á\\ÅÝÃýuhãËdYÒ@{6&Ž7XU0¶Ra#`qô¼EÀ¾Ê\n¿&¥ªvr.†Ô¤lê2*2.rYQ)],9e)5eb%e¤M^ÈÏVµóQVf“o\rfõ3O³•B5‡UùWO;göTã¶qa”;aÂæ»–fÂÝc’z&txú6_Tuã\$öµ/ô9bÖyR–‘/½ÖÂ>d§X5ïbl”+v¶ÜÐTÎ…7Ä«\\öcPVêù\$59‰BY^6ûYVÿeÐgn=g´'`²¾½Ë&Oƒ-Ž×RÖ¢‰QÁYW'ïšåtüò­V%¥\$åÎL…­VVºáõ[tèÁ´‘]Ïq•u—L·WQq5%Cõâ§ñl€wcRÃ]s¬Ç&DàKè(†.¶›üÞçÞV1Þ s´'p°á‘KcbUb™z†äom>fµ×®E¥¢SöÜ·G³èD,r='yê{±ð¨@	 ÂfbB<g èkÀ\nf‚ÆÁyÉ+í‘WÃ*Ò:töµ#µ3åñ*X¸‚\"å	„öhü\r€V`Øç@Ö\$øD«k1\nîOµÚöÃ!p5VÊŒÝo‚¬ÒÑœRTF+Í\$GFE¨µ_¶–\n ¨ÀZ”“Ã#&ÐÒB-ÒH˜³éX5Šó\$R0IúX+œ1‹ %×ØÂæöÜM°@D—'Ìõt!_Î¤ðLÜL¤ŽZPq—Çè þÖúbœ´V’i`ûpÜ±Rã×°DÊðDÍ	†UßŽL²!,­†+Òeù”rLPêC.XEÂ@~ï¼ô\"R;9: ÔÀëÊà–âM’Â4¶ý¨E rð-¶b*û0ÔùrMDR—&i·F1æ Â½{éŸD%C—tÎ™Ó3\"pP\"“†'y‰MÒ™ÇÖyöõ6—9Š>Ùvîõf­rã›2˜™Â~'ª*i‘´%šè#œudCÄ*U7=e¥ybV|ÃðÃ×!•¦âŽ¨?I'ô”ó¬ìÍ¨NB*\r©1/¢^´¸_ìÜúVO-HðºÇ¦äDÂ\rL¼±å²x­.2ºdÓÂîaœP”P1å}'a¸HEL¦Žì-Ï›‚Oy”„”Ìq¹NVæ‘ÄûØž?9SMÈo5(«§ù•¨M;³ƒ'¢Ôöh™VœY”âqö,±ß~zM£Ù!Q„<-:…äRDà-­˜5Ö%€";break;case"es":$f="E9jÌÊg:œãðP”\\33AADãx€Ês\rç3IˆØeM±£‘ÐÂr‹s Òv7‹DYT˜Úaa¬b¦ØâE2H%’é„Z0%9¦P\nÊ[/Š›¢¦YôË2†Ìh5\rÇQ¸Òn3°×U Q¼äi3ÙÌ&ÈNªt2›„hñ„ç2&›Ì†“1¤Ç'Lç(>\")»ÞDËŒMçQ ÂvT£6ó±¦>g‹Þâ§SÃx½Ë£ÈüÈŽu“ëŽ@­¾æN <ˆfóqÒÏ¸”prcqÞ\n)çìæ}ç#u› Ò]üri¼Þ&fÉËvIÁ›æà¢©ÏP·Ùÿ‰Ö :›Œ\"\n€Ø¿2Ã´4¸J¥¾ê à?j Ò«&BÂ ¿@P¨4£HÂ‚Â¬Îr0’%/Àæä@ˆšÔ6Œ¬¸#©köàpÂO4J)9MàÊõ£ äa•±˜™¤Ã˜ÀŽ‹ú1/Éú×I20§´®svöÄŽx†âGÒjsˆRkù'5èØ&\rëˆÜê·ÉC†âŽRñc‡ØÐÆÁèD4ƒ à9‡Ax^;Ðt&6¬ñH\\·ázóG8âáö“µ¤ô/¯£pÖÂJFÅ(xŒ!ð@¤@éŒTD\nbŒ†¼&B´Ü<ƒÓ7ÀCK#£rë’Ë£è„ÆlÂ°éCJ€Ù¬Ã7í¤f'£*‹2±óžÖ#ò¼7 As/4¶6£l+£@T·R¤Ë{ž\$Ã|\"£ë\$§…ŒáB ÊùŽ£`èË»b2Ì@ŒüŒp Ü‹±,[^Î#Œ˜eœÖç9©\r‰ã”(Ä(#˜Æ¼°oË3¼¯Ð´\r6]bþ¯‹ž Œy&Má©¨ÂeL<×{Œ.j+Z‰€PÛbÎ-Ü˜X–}°”L/¼Ÿ2ÈÖu¯h¨Ãºõˆlc~‹íC+Ö€n)¼ÇuÌ[¢\n\r#LƒÀ’5D’_)˜ñÂ1hËléoø&lS&÷ºmq›)\"EXsvÍ3‰:@7ŒÃ3ÉÂ1N²‚¢ãNK5Šƒzw¨¸/ÌG¢¢ã˜Í†¿ÓJÎ9…‹ØäàŒ#8Â³»5]cD\rØÊaJeÖl†)ŠB3²; o#œµº6b)Z,74­øØ¿›\$Æ•ËpÛ†¤ð\"e)£[ä¹W°›÷7„RO’Kóu/ØÃ†E’þê >dÁc¯â:~ÑÂ?æ»¼•¼LR9~/ 8àæËr±*À4˜ÀÈ÷©O	é>'å\0 ” wPÁ‘ä(¥£ƒrRLiJ©pä¦TÚSê…Q·#Â©ÕJ«#\n¹X+\"nôI¤›±³ŠL˜Pb2D]|™Ö–i™ëú#üŒe&ÆÌÁ3ÇªC³ˆDÎ™ù?gö2 óÍHP	@‚†÷kˆÀ()\0¤£\"`Ã™,Í0™%‡âECÈ/\"¡Ž	¤â„í™,ç9Å”JXxff×çöÔN1®xäô‘G2@aÉèŠaÉDJ’6÷(gÅ/‚@ÀPI\"!äÍŸÅ„\n“ Ç4Ø ó&[‰>D(6‚\0ƒ\rI(UæJJ²@«æt5È(ð¦I&LdÜŽ!2*bÚ‰A{ˆâ£ˆI±8'@€¯m)¦4ž8Ï„þ¦ó\nB‹F/SÎ&¢~ƒçBoˆ1\0@Õ¹b¤ý„`©'‰!–\$–(Í3Ôê‘ HFJ‘ˆÚŠOÒF8gþ…™5‚T\n¡&´B•6'… ¥P¨mF1»Ó5â…H¥J©‡ô(r«ˆRg8…ÅŸ\0 žÊHÆ(ÊƒJ‰\\ë´4°ÂŽy4<§èÝ¶-:_D›-Ô\nP#Dš†œ“è§‘äF(GÚ+7õÙ»¥Ìâ¬[y°)!­FîS3“)+?Ç&Xhâˆ­ƒÂ²)~¬š%¨”ø’ëØ6€Rôýª¤{‰UhÔNã„zƒ}®)\0)cÌœHo¦Ž©£…G_Ž€iLÝ{‡”t,-/ñ×3å‘û,ï`P½¨0Mz)£ŠôåQ°ÊÀRºZˆZçÌša˜ãfZü³²68ËKya1p³œûô×ØíeMÒV;\$*|N)YŽVCJ\$FÆì\"†êhH%œUfÇ@¹¬\$fŸreo–dåSÂ™‚) 8©˜\"6EìÛ‰DŽ_F\$*@‚Â@ n%¼Ô¹éæQ¬p‡(¥ÉÙxJƒ(jE¬\r_œDFÃ‘šêåeu9s,×J±ËË‰wef:²ŽS´A…Þå×—ÉXf»S¸\0”¶v³:\rÊA*ìÛ˜³~dÎ9Í#jPÉ£Y§>EÒÌZQz8qUíÕc2Ð‚Ç(g¼úþëÞs—ÙÕui‚ó¦£.œ\"Ú{5‘‰9_53Õ†!!ËS&Ã»‚¤qu­¯½vhSw×¶\09™â=3\\X\"çôí¥RÜbJqD(©*,#âÃ(b·aY’€ƒ´Jƒ|\$í¿Ií¦E²q»0,T”I“ÿ/·A\n¸à(\$\$FJ[ØEÓXpå­“™—˜*v¹i^œ»^€°cƒ®%XîÑM¢ƒ8¾’›¼kž}ÏU«Zýñ‹éÅWó‹ãÕF¥×sþ¥ËëVÉ>Î¾{ŽhÎR=Šœ3URJa¬TÙüÙƒ±¦9É*™ çœáÕßæ[˜âü¿Äc`,¼J¯´*C _vfÈW‚ò?`¡ó³Æ|\njO%¯ÎF¼Rî~¸õŒoO Æ*¤þ‰—j²g	·v›%Ùxß\nîÌ9·TÙó§|ïÝÓ‘A‹ÀÝ¸Kgð!3wÜœñ–5^jg® äûÛÎÙ›ÈhÍ?Ÿü¯é™ËÌËuíƒ)~ïü^¾„?P¤iûñ<wÖúø6~¼'{	ˆ§u«h[°	z8,Äã\"ƒ‹ÑÛ}jµµr÷ÔÝïÇ\$8€ÂSð^º­þ|høG_{L~_ÄÀ§æ?.žN§£‡91Å£ ‘>±6¢¯ø7RÃ?ôý‡ªãü'àBØÀå¢Á,.·î²B«äOf[=\0ïV°°H‡öî¯ZÇ\n6¾lbÅî-ÏÆD’ï/Ò°.ÆorÒ°\0007ðBI,nqbQåö,ÊÂEbÎ^Çô1\"TÒj\"G£~Š¤E,V\réFÅÐD°n.ƒûÌZQ1.œŒX0p‘NBð0J%._«˜Mp¦4p	ÃÀÆpR7ço\nÎŠ²9	°èÜæ\"åÆîÇ¾\$Ë°ÏÕ®\n¯¤§P­.EÌ§p<öƒ\0ã†¾uðÓP¾Ý°û\$\r02æ‡žêpF¼ñmŒ^°ÈùåêÂ	Üd­®Ðƒ4ÃQ;	O18>0£‘&7ñLÂmžÂÇ„%ZÃn¤nEëƒØDiÏÇD	ðƒ|’nêƒ\0/ÀÐ¸†.FB_®b<âFÅ£v]K1É2Le‚óQ¨Å‹7òÚÃ0õÃˆ1Ô2D’\$ÂèaPvÝH4E\"\n\$Å–JLZ‘âÒÂRˆÐD/HâMH„EHÅïFÐLd|\r€V’ƒ®JD0Ö>,4\"ÍúGÎ&@ŒoåZ>ÆýÇˆ\n ¨ÀZÆ8c-dÍÏ,“MM\$â0\$HþôÍCâ6ÑM¨±\nÂ®Š\0[Fº0€ò¸‹Ø|HÑHJãŒ<†fD\"òÃæîÅ­ƒ!æÜ\$Ü*”p)È dÔFbÔaÂ~«D&:r¸xî',\"ìòýl#ðP÷cf¹â03Ï’ÚÆ!(»64¤R8‰M-bú3(ûÈüýbüã2÷‰0B?-¯î]`Ê2Hü8ÅºhNÿd\08%¦H¤h>ÆÐ±Ê\\/E´l®V7fv«€êgë&«N½4fîû+ðïˆ:¬#ü#£'ÒXèÌø^*¼ºC#õ*B\$bIƒv´Æ7mô£Ô\rêÚŸ„ºoÉ3JÙ„¶„ƒå»F:f„fÃ¤Bjæ\0;&FÍè	\0t	 š@¦\n`";break;case"et":$f="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$ÔX\nFC1 Ôl7AGHñ Ò\n7œ&xTŒØ\n*LPÚ|ž ¨Ôê³jÂ\n)šNfS™Òÿ9àÍf\\U}:¤“RÉ¼ê 4NÒ“q¾Uj;FŒ¦| €éž:œ/ÇIIÒÍÃ ³RœË7…Ãí°˜a¨Ã½a©˜±¶†t“áp¨QŸ–lÛï7×ŒüÕÁ9äóÐQ.SÃwL°Þìëá(LŽ¦èG›ye:^#&X_v ¤RèÓ©‹~2§,X2­Cj*@(Ò2<ªß,…â<1A`Pœ:£Ô  Îê†88#(ìÞ·ãZ‘-!-£ä\nÉxä5„Bz:ëHÖB8Ê7¯èµ/âd\nˆ(\\‚ÿ )0Þ7´ñx§3qz-ðÜ“,ïHå'­òHÉ%¤h°˜7­ˆ«ÁBS‚Þ;h<‚†¡€PxßÊ3¡Ð:ƒ€æáxïC…É#·ËHÎ¾”€ðÖ\rÉÐÞ7áM4ƒ¤ú/¶L`ÖÂHÚ8 ²Ü:xÂ?‚×\rè;N(ÉH¦(ÈÍbj+\$mã1®°³‚©7ì*Š5ªj\"Î&¯­û\$’¯ˆP+	\"(¯Z\n£~Ø¡¨å”:ÙŠÔHÃœJ4ŽCPÊˆ ïò¤„·Š2:,â³Æì®ò<8;²TÃEÀP‚óÈ6>*ˆúD@P‰=Œ#®2C`ëw»Ì’.õÙ”µ/\nÈÊ•	ã¢t2CEª•%ŒÓÜì[2žã# (\r7bÿ'7ÂT4cZŒ¸4qŽ#bÃe6Ù%#˜ÆÆ0àZ(;h7Xíä5Š°kR-u:\rÛ~Ÿ©£rÿn¯Á‡2I«å¼ŠÈw%›sÌìõÇr¨˜4”2É‰Ò+£ha’«]sTÉXä’B*sÇrÍp£iï&ßÀL¬ë¾Eú6=†Eì«/%#xÌ3#iêk3Í)qH67Ë„žâ±ƒÍqJŽ£ÆÂc6,¼MPæ4Ã—t0ŒèËØ…?’óŒ¡@æ¶ƒ|(6Œ*˜@!ŠbäSØ•ÁL3IŒ-#o.Ý5ûƒÚ&^-Ž–£rzÂ¨Í§€RyìRí¸Ñž²¨ù3Ä-¬¡¿ÔbC)5&æ¢ÑË”<ØAp Næa='Äü „PÊ!E€ä£NÊSqJ)e0¦Œ1ÙZª}P†åF©U:©>Š±W+qV¨hV¦˜Ï=ÄL\n‘*@pžª·üb`# áÀ2™¢H@ÕI¿cGø½PŠT\nyz>A¤úC¾`¢0LÀ‚‘ÑxŸÍ4ëUî•@@@Pq´ûTjRÃ‘?Á¬´§¦BcœÙ{&èîÂZüÍñmÁÉ‘â\na£,,9=·˜JOÈ\n	\$P<™`@IH9a±´Óð@žƒ‹Á™/¾à‚˜átµ>€€1†ÀÞ`å¬s|¦š…\0žÂ -sf±Ü'ò{Øi&L5sBÒÆc²eÒ™õ¹´Æ	zâ\\Ñ¶S«T€-0kP:I\\ÔÏa©˜Ñ|ß¡@ÎØL˜Ñ1‰´0TK(*vgŒ¼HV8Âô`KÑ‘.§ Ç€ÌZJxg=ˆ˜<£ÂÈ)rà-á<'\0ª A\n”RÐˆB`E¦hÁ}™t¶IÙÚ.)Í!‘Ê~—Z#F\"Ë\0™•EÐuN\0¤;,’†sÎoäñ„%lÆªÕvÜ	[ ®EÂ“\"ü\\Zc­¹¿¸j˜›: ðƒ.I¶BýWŒ¨À™Ç6àWC·(d\n¿¹Ð —ÙSÿ“Tý\0.ÅžqÃ¬™sË£… ÊªKS_\n\\ˆ\$ªÈƒp:V/ Å¥ˆÕ \$mIñ¸6Z\"`Y)˜Å°½Zâ,XÜ¦_´¢>2Þ\\mò0!éw„4€¤p ¡ŒÖ Ã¼ÿS{DÅï7÷ “ÝŽUöâsBC½|{¬ü¹@’cP\nm†ü…Âr±B\r`h„Ø'ùŸÛ•g]+JŒY8K×Ã;8'4b\n*(g4É_²U€Å&F¡P)ŽÂ(RG`^§Zè»³\rU¤‹¾Õ‚ÎìAƒË92<’œZ5¡X\"„à¨ÑåpC®ZÁžÔ°íiT!\$	s+¨ÈŠš—sfkY\rÕXBQg‹Y^ €‚á-ÐYkHæ¿‡ônÊ3È\r¤¿ÊúAËTnµÅì%àDir\n¡ý&¹mfL§ãq‹bá­cš@Urô‹yJ«ë Ž„§Cfòktž•©äœø¥ðîEŠaŽÄVO¨PY)«\$„‘êbQ5ÈAã\$Uí)ÉÈärµ\rÖÍŠÛÝ\n²(@gqt½-(»ÉÑ=9'‘Ž­\"3w¶&ÑIùUfvLÉ¸¿(–t”=t*¯%ùþ2kn'c÷Üoì©îcº»tG®š»”,\\/+NÞuÛA×^îá­‹¹žÍ]Î1TZº#|[íaÁØ¼ÆV¼3€ê*Ž¬*MµI@´×Æˆ—²;µ¥åðÊ¢Ê[¨!Ë“Ú+ÉŠ—.Éisò7*¯A:š’G‡ïF/e5{¼÷¹Á!ÿO\$ÿy¢”dx¹¦:p<÷~iý½ú’eêšB;!˜+c7ýo­½k}õÎ%‹ßYI­Ñe·r9Ðöê;±þ¹îÚ¹ºÝw©Gƒ{…7>ÝûÏµ|3¿wr‰àO	!•ïLiE‘Š†*ïŸT´. 3Vl¯Qû8‡\\æü…­Às²÷®¯^Ñ¡¿ÔjŽp4ƒÁtU8¥÷…—¿Sè¯÷¤àÜøøö~x¨‘5'ó6#ô\\‹ÅÙ\0ÁHä÷>#	ú«èM5ü/ óÈ'_}ÕbÓ¾PbŒ”âá\0å›â‡9æyüÐæÕÏ>Q’ù„ëç«±EýUÿ£eœÀ§ðZ¥M¶©åÔcº¼I4Zå²[oönõ\rZ%0[@Snöóomäj[%o|/lxs§\0ð4[c\0ÅäÆsJß­ÀÖL8ÉçR>.àï°[vöP:‚E¢\"°kæþd‹s\0ç¬dÆŒlÇ&4ÛO€¨¸< ’y¥Ð%ðšÜ&ª#yaxÆ¬òÅ`åNá‹ò*êYÏ\\1ÐcŒSðÃ\rprÛjdP€+n`á\rðÀ,ð> G„‡Ðî³þ3ðÍ\rðy­ÊèÏ°M¢H7ð×®ÃÆÛO/`•ðñOkFæ“\$Švñ@_¤\$ûÅn(úàá‘/ÆÛˆ<°#=Œ_i0Æ/lÇæˆtæþö.}î‚á‹p LûÑsîÍ°é,#€X€51\$(ÂÌ0ÃFEL]0N\"Ä®ªã§QPÎƒÜK#˜áhñ‘×ñÞâ#ª¯`À‚Ì@P	eÀÈÃpø\\ÆümJÈ{€Ø¬ðÊ±#o”ßé -©‚¤ù0Þ‹^°'\rrÞà–â@Ü`.šÎm†¼bl #Y#pÝ£\0\$C6nˆú\"ÀšóR !%Ú.¯>æª¤ä9A'¾H`Ø`Ö&eÄDâ)jÃâ.oÒ¥À¨ÀZ6\rÀÆV£š&§-\"JhL¶Î Â@íò#†2K‚zƒcüÝlÑ&R°ÀòŽ	ŽC¯/äcÒvW2zÙbrÇÊ¼á2|\$\"!'^¦\\Ð‚>9ÏÚŠ…ÞLâHkSNJ@•òL\n…Ž\\,4Æ,p®o\"ŽÐs\"7Ox4ÂÊ]Ñ‹â6JTœðäg­Þî+5QêÒ Þ‹ˆåÓNÓS4eS\\.B@34%\"æ˜sf_N»²Ä¸\":e¦¹¦PåM¦®\$•H‚p¨†{«@oÅˆšŽ˜©Npè‚9;æŽXü–â†¨\0¤A`ê¯€Ç=&PŒ_bÎI\"dúæV	e.Hb#nVXf4iØ©ç7ƒY'ðÒp0ý5Š®`3h\\ñ2/Ì0l*ÃÇ#|1f<I/Þ7ÊRDÂÞ	\0@š	 t\n`¦";break;case"fa":$f="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+XÄ!(A²„„¡¢Ètí^.§2•[\"S¶•-…\\ŽJ§ƒÒ)Cfh§›!(iª2o	D6›\n¾sRXÄ¨\0Sm`Û˜¬›k6ÚÑ¶µm­›kvÚá¶¹6Ò	¼C!ZáQ˜dJÉŠ°X¬‘+<NCiWÇQ»Mb\"´ÀÄí*Ì5o#™dìv\\¬Â%ZAôüö#—°g+­…¥>m±c‘ùƒ[—ŸPõvræsö\r¦ZUÍÄs³½LÂv4›ŒýK©\"ÑÊ[˜–±GXU°+)6\r‡ž*«’>n?a ¥&IYd„—ÈcC1È[fâÁê„U6©	Pœ¶H*|¡jÚ®¬¡\$+TÉ¬ÉZU9KIh‡*°sƒ²i	r)MrTX¿c,×¡É‚vW<ê¢	41\"Èˆ=ÑYP¥?Ä:¢‰–oñÄèR@ÒÊ‘a\nÒ¤lœp¨ª,h¥²ïªbÅÉ„#®é½i4¼ŽÁ,òZÂM‘ÛúC³RêË<–1\"K ÒØx0„@ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r¯Ê9Ãxä3…ã(ÝP¥D9#}F ÃOŒ£¥/ŒC`Â7\ra|\$£€Ø2µèã}è4\rã%Z7„¨æ2„˜¢&\r53•	G¬-?¥sº:C6NâJ†¤,(Ë°/‚­Hnã4Ý3ÍâJÆ¿®À”IÛõ18%z|‹YÏ­êU!.\n•`òãôá¾ñ‚ÂÀE‹\nôˆ•±zhú^­ëF·c®Çi!²_\\ÊâÒ[Eðœ*“08zV•b¢Æ€âŒlNÉêXÆ¬iNŽ +L)Æ¬Âqªl|¦Å Š=òö¢%SßQXû½n¾ž•êÑ4˜„d:õîá&íó/Z¶»†*zK®:.ÓüìÂLãºÓ­Ã»Þ—2ytÇ·cw¡2œku¤rç	ÆdÛÙ9ªóøç°ˆ\nÛª{ó2¬Û“û®\$9ÛÎ¬L:wÄD·Æ8+¼¢P©\\\\UÔ˜e¶îfC ØØ6I)D«?ìòÀ»‚ìˆ§ìNÕO’4ÔÁ“@£ÉOÀïzDF(X+úA&ÄgrmJý‰[{^\$c’ËÞ’º³úÎ°A{Lûh÷ZØ|)?‘çÊùÛáNE´¾õÈüNH\naL)ežÕø ‡±£À§JCt,-Á>¦Â.I“c‚,½xÕI*Þ8¢°’¢·ÐZšb+Dè Ý¡\$mÊáú!o€ÿ2¯˜2]:hÄâ¢SbÞj] /tÄ’@ÉÁ¼A¦ÑÂô½Š%3 A¨U¢TZQêEI©U.¦Cr›Sª}Pª0Ê©U:©UjµW†ub¬Õª·W ù““·/	1X‹1Ä×fºÞÇB€¨\nº\nœdñiÍ°b^ág‡D8õ/TNjI¡ì*á9™ˆq&Ò‹2‰‚\r£ÔnÏd)gY€JÆÐZ-~á@\$xŠäë“ï‚-'p@\n\n)…¥„ÕË8ò_rO[i¶›„ƒcÔs3q3¨RJYM\$ˆõ.fVPk÷ Ž\"*E¦àŒæl!ˆ¨0É9~çXìðD\$‘ òÃ¨ ¥gàÞÚ¢YË,4‡0@¡Ãˆu¡Îˆ`äÃh *aM%Z Èc\r½iÒz*€aÓ˜É0ììÓ*èŠÈÝ¸¢X>Š\n55’‘m²¶<ÐÙd‡ç‘–…‘?ŸT…re,´’tú\ny\\cŽ\n¤<Ã”lRÈ™ŒÉ	T”>W‰ÂÖ	•p•æÐ1%4éì„`©1¢K@\"lpÔDAÿãG™„5>–LX]ð+°E4“ä¬g¡‰®­¬ÄgÊ‚xNT(@‚-˜³A\"„À‹hba\\ìU¥ËDÅ&Ó*aG¨á\0/£ðº¤2!Ìj/º3ÔŽrÜ?D~U’—g2 c¹¸f,’x–äúí9gÊØ@—+Pæu®œˆÜ­¹'eÞœÌ¦é±wjÜáÁöwK~ê¾”évÂõuñ97ÛàžQù&g~•ê®Ñèº:I\\É‹cÖ¿€PRªø4†0Â#ÓL!¢¸”FuSÙ”'*¬¢f’TãÑ5‰¹6–\$}°¹Cmò%Î\nƒÜ…\r>.+ÂÆ6„Ô‹žó7ÀÜë”ËÐ¼Ís•Ç8²a™Ä¶\$en•ÒªÚ¢ã\\¦¯–Ó“ªº5J(ºÁ7—ý––Z±í¨³F|c„\nó;FìÐOò¨Y^=y–E2Ù;ga*WÍÉà!DÏ+OÃFŠõ\r@¼è¿²\$_•y=æÿŽ/ª\"7ÍœYogÂ Aa Q•6hØ UëR‡Q\0æC€pSÊ˜2£iÐ{êI…„SWÖyl€„ò¹°–\niœn³ µôÚÚá\r¡»Ø­\n`#µ#LÁÊJWb&gîJö5Lš‰ù'šç›6µLûlƒñ¶ZQ8MRRkÈ•ž¡\"s%ç\"\"V|¯¼Ir>™›8§ÉTq)üÛ{¶7ÆöˆžAà–såëöñ—Ý¬|×™3X³dud\nÅPk¬4cGîÂtmçš²òö!I­~/âPOÜÃbþ¥£ÕaJœbps.óíú-Í9u6†|ôå:æ²÷¹DÊ­8Üæ¾=Ìú7\0usº|Úž^À]y×,,É/¢+‰»‹)&Œ¯˜4”“Ð. ]–{v‚½—¯W%]›2uøom6Y)yom8¿\r¦ÖRbfúÿföÃ\\Ï¶¤Üõd·{ný÷æ¿ªÚëéuŸ>}cc~GEw]öv”ã©ŸÎ•ä=ãé¼¥s90íæõåéNÙÂÁïJâ}q+öõ¼¾ÿzE©H\$§ÑÑ˜qqYWºF<òf¾W\\ÚÓŒ]è¢¿òWOË'S2|íÜÉœÑ+ú}W98˜dhÐ/²ü‚¦ü¢_ÎXO½Í+òþë%(=¼N½>¨‚£,:Ššø\$JJ¦ ±éJK'6¼ìdE®ä›*®(êÎˆf=Î¢'¬?¬ÒÀ\$;KxÍææµfµ¬š ,º÷Åìò°FpOÔÜÇàþgêŽf¾IÝ¦:øÌºNÏ&æKÒ°­ôÐKÎg‡˜êdôÏ*þN=GhÒCƒÐ”NÅøó„ä‰µ¤œDDð!Ä˜¤@=ãöp”ü¹ˆ¸·o¬‹0Wo—ÐpPƒ\ro		¯p•ðÚËçÌÐ~ãÂäÍdnµËâÿ/6BÃ×	‹æ“0øK®ãV¯Hš½K|Äæ(1.)\r(£Pã®gÐó\rÐèïÐOQê‘ArôåÈðp_ÐY®Uñ)¬2fj¯©[®ªÎëÜ°ñ<õ«ÒÏÌñða®œpQ}1CÑŠÐšHf–Ñ°†?€ÒªªQ)ÈÒÏydh4MØy±¤â±`ÿH¢¹Â\nèÄGäY.psqšFK*Ý'ÚJ”tF–€’¿¤žú#âofDjc8(,H®FØM/œºN“ã~5àš*8Sb6UÀèZ@\nelÅ¨£Œ\"væ¥þú/ÄM×Ç„è2@\$/Ææjx²6ËänâÃRëÊœ`è@ØjTÁ ÖLi–•îÆ Táðºa„6\n ¨ÀZ	J7ˆ\"ÙK*°í¼ú’œú˜3NîÈ‹ÔBˆdÈ0*'0`rZ7Œfd\0¼	ŒÚ”# â”õpLcÒVþ1´ËZdŒŽDÄX*êˆý¶ø¸§0CjLæÔlx8ð \rl¯\$æ¯Æ%h°%iTÝ¬d“‡åp°,åÖun–_PLËMó>&óB¸B=G4‹ÐŠ0+\0Ä˜ÃŽzð.±4ÓJ½3c7,H7çg7s`ÆÐ©Ph&ÒÐhc‚gcV@¯T=ÎÊÅöëM¨¶†°8\"ñh²ï/!†Ôãh·90Ï¾Ìka-çfÞ!S€‘¸Åð¼iíî8¢Ò.ƒ‚ -„]bQ‡H*+–¸²@aRòëÜºóZOìð¹SV•q¢ý“i?ÃLpHKÔªÌ£cìkHP¿Çœ3€";break;case"fi":$f="O6N†³x€ìa9L#ðP”\\33`¢¡¤Êd7œÎ†ó€ÊiƒÍ&Hé°Ã\$:GNaØÊl4›eðp(¦u:œ&è”²`t:DH´b4o‚Aùà”æBšÅbñ˜Üv?Kš…€¡€Äd3\rFÃqÀät<š\rL5 *Xk:œ§+dìÊnd“©°êj0ÍI§ZA¬Âa\r';e²ó K­jI©Nw}“G¤ø\r,Òk2h«©ØÓ@Æ©(vÃ¥²†a¾p1IõÜÝˆ*mMÛqzaÇM¸C^ÂmÅÊv†Èî‡¼ny›hîúaŒRkŽz–\n(H£X‚\\Z`\n%Û:Ûo¥Ië×ò™Ø‚œ-“M[c©¬æä¶j’Œ©iã82¡C˜æÙ‰«›Š4¾Csæô=MAHÉ§‹@ò84àPœ:¦C”&(4¯Pæß„>ÄIÛR\rË¸+AÈ #Œ£zd:'L@˜: C¢_	‰K`äý£IxÚÇ\n	b\\˜/sÖöC	ˆÒ›%ƒÛ¢ˆ²6Ã\rÎSË#¶ ê		cdžÈæ<µÃXÓ24C¬b»±â:4C(Ì„CB€8aÐ^ŽôH\\“¹ˆä\rãÎ®ô ñ!\rÏú˜„M}\$PøÄ“\rÃXD	#hà€¦SxŒ!óíÇc@Þ2(h(êí„˜¢ÅHI¨¬–4õâPÄ	Ð«\\î´pÁ´HèÜ¶\rcÌ–ì­¶‚R×¶,@«]¯rô€†×	Hì:!-Ê0Üì@¦„-(<ÃpãÑUª è-tÃ¨²xëÄÀR\0Wh@ì7Æv èíB4ì5¨˜‚3ŒóèÏ€\r0œÒ2L3?9%ŽP˜ý4ò·9£*Jâ“ôÜ¯ò‰64éÂ&*\$Ul82dZ‚¯‹ö¶Cƒ[Õ0Êõð˜ —Îv0ë;u.[Hêˆ)Ãªë!ŒƒÇÌ&Äï7ö»¯ìl@žÏ´:ö*0šdf‹nÑþˆØ/Ë>Õ0L[@ƒ§ø€Ù`Èè¥ŒÃ4 2…ª\"M6s\0:ÌÁúŒ±#HÓ¯j™mŒ£‚Ø¦\rÎLìÑ[oû°¶T³Ÿ. ¹zt´#K`Y±)û:œhAut,»Dú®ò€ÙÀKÏ§¾tÅ'QÕ\rÝb;×5=ŒéÚ1cÏo7=Ú“ß¼×02øJmqF§¾ÄØùm˜­9*g¦‚0-eä¥ ð\\al'°ÅþhS@:eÜš…XÓ“ßDñë‘ êI¨IƒÉ„‚pÜþS«™Ù&R„ð	›ú\rÆ	-\$ äP[“kÅXÍ™ÒîjI	1KH.§ @Ÿò€PAÑB(e¢”avQêEI©PÊ¥Ëºš\rÊqOu@•¤TÀùž\$%¢«ÕŠ³¨í[’¶†Yª1lÔÿ‚Ú›Ã²Ô?ð†‘²‚œ)X\\Æ‘lÂØMKÔ\r0çìÝ«³”M;Ý(i\0  \0@@P?,þé,\n\np)3Eaô´£Þ±¦AR»‡'òþÎÛ‹ƒ.Î\r³¦	¨K.ì»“Ó˜ÊJw&+\\Å­tŒkƒÉ?H!æ„´´AÖÛ\n#ŠÌš„£8â l\nH.Àõš±Hµã²ôL#[\0‚is@ì9—Ó÷7§ÿ\\äÕçº	ÚNI\0P	áL*Õ1…!t2’]¼c\\±ÚÒ*láÎhÙ¤GJs¼\rÁ˜4†rrHšc[@df\"#2DâÉ2Ç\"Dá>“ÆœäJ)T)€€#@ ‰á†{H  «w·/Où@—¤¬–’òbKÉJÂ\"Çtà\"’O×Ù9Œq†ðœ¨P*V\rSÂ E	ª¥…˜h%ë©9x#´`+W\nå]¯Ébe‹uæ¨í“—e“&r:ð«ÒY\"g…\0%Ö¸à!ãb%ä­\0·ö¼mÜ]+ŠT„Ã•ã[Kíy“6k4ÚÎPPDGm“¯#ß‰A0\rÎÓ€¤éI€c8t¼Q\\”Ð:Vr^LÉ³õ'NÝKVn\$6(Z^Ì²B©QØËtS¥jrw'¶kÔÃhýº6dða,2~h”<¢Qš\0Ùc!¤6sç^ÂªÐµ±ŽY\"‘j­{®ßBHnhy}¶w~ÎÙ“10) /pÑZÍrˆ˜¹¥ªŒŠ‹ÃÏ%f.¤`¥±\\ö?åà(&àóMRPAäQÍ‘3|Ø`Rxäí›’V ‘ÀAà6R)’™lÀUP*†\0qHéö\"”ûZ#L9\$ ÉP¥t¥MÄ½7…Èx ÊæD4®•q—pKÊa°< WSƒKæ\røÕ‰—	ÛÍÌW2ÁÙ+š³fh>Ù|4šlâcÝãR7ÓµHšt‚Õ\r¹5x‹W:flÚót^cN«;Aó*a½®?T|ŽåÊ@Œr¥L«¸ì“©ñ2:vÈÉJN;ü§‰>Ÿ9û,¬ÌFhÔ7ë=RLÈìç0Ý0)§))9C¥%]‡#‹¯uBP£Tªá“}\n¶ÏeöÃ§cæSM”_d2CË(ÕTry·åzû	'B›‚Ó#šÙ8‡³²7?aŠé²g% ¹èg¾v4º€çò¥¾h‹œ›“c wÚIyeE¾)pÍA¼S‡Ò²ü|øÝ÷NÕ¡+\0§D|ÈÙ:¸…‡&¾Âzš\$J¥°e5Ì\"×\$¬a—!;ó€)“âïÇBõ\r:ôÉm5xA\0P‡\n\n»({’ð{@Gl•”è»ã«ÈÅ2àŒ1‚rÄH?e»%œ0ýŒñ3Ñy8•ßÒæòv~çÛÚ¡Âèœ2\\š)Ûk±[©~l=Ö\\ð3n{Â€œTQ1gƒ¯/ÃøœßŸ{»÷Á¨ª^³¿;wš;§“µ·JøÅ•ä>‹yÔÀÌ'h\"“¹PA=¯-^&€‘ËÒ‚@_MÕ'¤)­6¤5ÒÝÓ¼÷=7ÞóëïßÑX37ÿ¤\"ŠîÏ’¶Üîx”ë\0ÜîÏaë^ŸIûT?[¹°3râ«=ø£ã=Òò¾wÖ zŽ÷Ú?ñÒ‰³­vïòœ<ö.BoKÞ¾ô6Œ^vŽ°ÿ@í\\,`øŽØõN),bìÐ0OÚ5ð,øƒ³ÀÃ£(g\"&	za&šÃ&ÂêÌ‡Ê~mÎ%‡jOßÃ7Ž\$ínÅt/îä0zðPä4Z @Æ&b«Q	\0à´b.¤ï\0”T¦+â	â3\n)ð¬‚LN¢4éEì\nfj%Å2Ž¯?nC€×ËKŒ&ÐÊ‹#þ5Ïìí®Ðl#·\r°è\r#\0÷\rÃþ^eê\$âß®\rB@îÌþl/ŽCþ³Ñs ÒÃO=P)‘,zpï,\$EL7óba±@ôÌlÃLÂ‚ð\$W!D(”ë˜5Qï‘fÇ\$.ˆS\rþJD,èQßäÒgòlð\$®	¤àÃvÌ#Ì\rƒx´´ˆêÂåŒ¼ŽÐ ´¢K0(—()†ªÑdTAã 11À1\0š†¢æ\"Oº­ ¦\$Â]€­¦„Ï)*ñK4H\rÂ‚€/ÏG‰§ô;nÆdx\r€V6å6	¢ç®ô{Eâ´ˆ@ÕF›ÏÄÎ«„\n ¨€ pc(Ê:òãL’cæîq¶ÌT¦¯ á®*±&g\"aÑØý¢l¥Eö8c\nj±€5Ò|8£?vAò„µ#?ÇØ/cX5Ê2¬úLìü&F1\"NÆ¦½+\r`Ã\næ\nd&†’h.äM\\{HpéÈ\"Ð-Cl™n8yIùË.D²*b×¦:g2â/ððâ²ð)`à(‡E/’îE\râþŽM\0Â}*[‚ü° š\rîPÐ¬fÆ¦pê\"&çî‘3fta«ÙBMÏ01ÊðafÝ0¢b\$Eø6ìÈs\\7-œ°¦„LÝ-Ñž-ªþ¯B6Žo|±Æ¿+szÌ2õ5ÐÙD;Ãh¤ÎàâÐÞ\$REd¸#à";break;case"fr":$f="ÃE§1iØÞu9ˆfS‘ÐÂi7\n¢‘\0ü%ÌÂ˜(’m8Îg3IˆØeæ™¾IÄcIŒÐi†DÃ‚i6L¦Ä°Ã22@æsY¼2:JeS™\ntL”M&Óƒ‚  ˆPs±†LeCˆÈf4†ãÈ(ìi¤‚¥Æ“<BŽ\n LgSt¢gMæCLÒ7Øj“–?ƒ7Y3™ÔÙ:NŠÐxI¸Na;OB†'„™,f“¤&Bu®›L§K¡†  õØ^ó\rf“Îˆ¦ì­ôç½9¹g!uz¢c7›Ž‘¬Ã'Œíöz\\Ã/;{ºíxúkG'•®œ,shy»¤f3a}á¸ÎîB«¶6\r#›+£ª€“µc¬¦`NÂ%\nJž< LˆÒì¡*¢®¬©Šâ¼¢¹ë@!	†W0¨è¨<Ž\nT @£\nÜBpÞ6ŒLª:\"FÉCv\rK*KðÓB“82Œ#¨#²qÛ&±'	Ü\n#¢˜òç˜eCt\nhcS@Q ç ÇR¢¤µt\r\$5Ð¬*ìÌšÀAÒ+´Æ¦±´6û0#¤üí«T²Ö!Š\ní Pxž¨Ì„CCx8aÐ^Žõ\\0Œƒj œ¥Ã8^2Õ\\1V\$ŽÈ^'Ãä3·tÀ¾“#pÖÈøà“½ xŒ!ð@ª\rÕÅ§Ãx@„%˜¢&6‘0‚ü)Š”2OÒ;m«R*º6'®xäÁÅ\"Å1Œr»\n´xPŠzÃ¤ñÊÈ2&62v*.2xÆ€HK„aXb:!ãdñHÅñŒOØ¨|Ž\$Ã6TØ¡¢:Gtã\0\nÊ<8«£#&üÁÓ&2át\nèˆÎÎs0>F3ÑO°¥œ\\É³Ó%‰\n_„˜eÈ*Jà™9ßÍoM±S IÛ²ÿåã êŸµ{Ÿ¾Â˜Ç^ªVŒ”]ªÏ&Œ¹Y†U A¬&/C¨íªº5c›-¾\0Uñy&)èÅ:î7\0Ý<•3ß&Cšm‚Œ1>F˜0ˆç7’s»pÑÎn;¯r7*ŽŠªï‚Â;a%È¢\"wuÏOW›»_½\\ì”õÓßMÎP2O…Lû¢Ñ¡ø¥\r	s^¾0©ÐˆÉ»žÓAêká¸ü,*‹`ZÏ²:ÜAb¼‘Œ#ËU8uÿ(¥5ì:Â0nn`¸µ@ÞùÓƒé|o±ð>÷âüÓ[ö5fü?§”8dË.\0Ä¸N‚ o\rj°0¦‚1í,¨¤T‚Š÷2¡¸ƒ?eÎVIpm3Ìym6s*A’X )«2ÚC‚KOOÉ3 ·îAž«'Pëä®ÁH,jRŠY¡½7’ƒZHÉA=‰(TU&‘²˜SAÑN)å@¨•\$U\nÝUªÖÒ†b2³VªÝ\\‚%vºòÀXL’*Â–:Éq«5+½”à³	43)À™C3e”j½Æ‰ÄãV~ŽÙ©†ä%5ÎR¯CJ,°–7r‰—^ˆYÇ‰N€H\np:‡|¸\0(*„PÓóÉn\$§%>(i yá304ƒ§¨´þ‘á•Y¥–PÚúI )ç<”™8¾d£( …òy“PÎ±I‚L¥zšH*iÍI«‹åzðòdÈQ»o¦U½=r¤Q	*•S‡'äQÞÑ3Q¯Üâ·ÓZ®óÉ!!@'…0¨OŸ0 hJõTœ*[25mÔŸÃ¤lhÓ	léFwÈgîÝa[e*fÆ\r·WÂMørh­Æ\\…E=¼ùZk7ªG@fZ\")el˜7ö`0T—i\rX ¦ú„šk¹&&„ RbJ0rLçQÈB•êþL)0°ÀÆº#	á8P T *½‚\0ˆB`E°KúoÉBzv³â±„¥³šÚ„S	½lGøî£€ž&’ã8MÎšÃæŠH€\n{â¥aŸ¢a(y(E,ÖÕÚÓö½Jug¬ûŸ“öbprNP¥V^1X!/Ø§w'0ÉQJô\0ÎËæ«fy:\nlÝ¶3¹ñmÏuïÊ¼\"Qx.KH–—ÚfH@\ne­VX%Ó@ÍZ:ÃP3JùåÜV`:Yd\$»“Ô%Õ…ÿ¨¸fÅ2i@!!;@•’ŒUl‘¨H¬­@î«ºr¬*_V¦CáŠ'(æ63aRóæ•ÄÌ¦Iz|‰ayn’{hŽìÛ‡¼4ãéÐ¤B²\0Ä­ÝðâŒ\\T¬ä\$ˆdäÈpÈZ'™k¿(¯#hÝÒÓxuÞ€Wzëš‘µuÝV4£qhˆ>at-c62ŠŽÄ\$F!ÉGHl®CRË=ÏˆÙ&çNGF‰É„Â¬Tz‚ŸxKM¦´ntlT!\$aCºÕJR¶%è¨ÝW|C!ÊFTÜ?Ó#\"è#ðzìðA­ g0¬9„k”ZÞ(+}m/'¦LjC¼a0‡7äÃÉ‹Ü%·.†™¬Z>ÁHAãbd7+±ÙÆÊÙ‚£gAÍ£®ŠVÔ^;Zì§Ã0JÀmQÉÂ\nl6³i	ÖÐÖ-ïamÍï·£ÈÜ[6o¦ó¬’â#Û³\0Ôn;²ø!ÒßÆ\rßµõ³(÷>¿w¿I®V¬	Y-!µ\r8qâa1Œä \r:-Ê½àËYm‰LÉdC<M‹g­5¬pÊ¸–Ý[ÕL¦éW¿99™mæÄÍXtLQÚ>ÈÏb9\r”Êö«HÄt\$%²÷…mí®:0…E½Öcù`½\\žÝ1S/.±,2e\\ö©„ûh©ÛÝ™@w2wÝqk;RAö÷²!:W_rÁ“x\\ ~ÔÖ'~,³øÞÝß0-òo0øîÞÈŒŸ’GV5ºyEûµ4½òeÙ¾«µ†h\0PPVÇo“-ì}™´”öNÇ3hùi'ÍæC'yÙ*š0B¤¬7ef)d^(²-Üc_GæïEÎ¸„'¼÷½Muü‘<·nBôÞ-CçŒÒ¬cŸ…Ç~OµÃ?G ?³ñÜÞëü·z «¾ù¢°tGNÇººŒnüÊ'jÐtb†ÿ.öþNüÿç5\0000\0nÞÿ2'@‚—Æ\0íz•Ã¶xp(áMþ‰mÌ×Í¦Ú­®üP<TðÂ&Ø§*ÙízÚBÍØ o!IðªâÍP›PB¯ Ùü±ðvÌÊåï:òðlþŒÈíð‘Ð€þ&Fü\"”².¹¢8Ë„‹ª_îHkcRÂmø›FÌ‘T7B|ùGä(6€@-Žkm&Ê¦Ò—Ž1ÅD-	¤=ƒ`yÌ!&FÃÞÍ©€\\VêçÆDªØpŽïPzÍ,Nò¢îÈì ìí0Ì\nžÞ*bï6^Ð–ÿP+Š^¬ƒ0†þ‘E¯?\n¯4Ò'‚ÌBQNþ2m\ríÐûîå\0îÒ1snðý›n­¯/Ðrêž}±”`Ñd¼¬ÅMo`µb†ëNÆQªDäRì(2.f+¦V¤‚Ge†íÏ7pA°ë“­\r0™Ñê3QïpMÎ' ÌgËù I>F;åÜ¼‘:&r|‘«!ò†ÌHæ2xã*eð]#&Â¦CÐî+±iÑ\$Â s\$ã»\$2UòÚ¥ô#’?%ì³\"kÍ&ÁS%\"ÿàèùRUË°‹R‚F2UÃ&‹K(å#'Q¯)Ðœ¦²\$ììeðC(B§Á*ÌÜ+°Cè´Î’¼ÎòÁ\nCò™òÈÍ²ÌËìã2Û*äp\nŒFS€Ñ1¦ÏÎ@FdÒÒ°ý„·ÐBm*M’Ï-×0²üF­/)1`'@?PÐ¤f0¤¦®/`hâ„mi\"«àûÐVÃ6oŽæ×‹Ü!bFz«£4n4ÁRù ;#ÚøeÅ ƒ5ç~	£\\Ì#žFËâ\neÐ5\"8¾â:Úìd²ÃÎ\na–Â5³ÿ³d,@Øjî\r,*5c;'jrÕ£o oŒ'0!.LJapÈo‰´Í£3‰ø¯ ¨ÀZ\rómÑ%JÂ!­®ÚM:pÉ‚ÀäN\0ùp”Ï*N	ÐÆu&¥øËÖš'ÈhåÐ´ ÃM2þ¦æè'2T4Ei<sÊ8Š¯V­dW®!‰•„PVÅq„Rƒâ\r‡ªü¯¶FF3£>FÉø;nÐ)T#@K¥@‚Ä;&ôÝ«”ó”ý°¶ÅÄCâHæ@p€ðnùŸK©@“ò4HËëK\"¢T@ý;eLÈïÉqHqD#¦Ži@åO\r\\¶4®ÄÄÜæ€˜lk:f%¾½U³Št&/˜ÊÀŠ™\\=³´Ý:\nË°‹@%„ Ó\0Ü(ä¾@ìˆËÊN²Ã€ÀÜÂ£¢¶¥Ð¶ëa‰Ú7¯êxë†\\KTœÕV1æ(‰,u&ìÚO`%Èy/!í¨d£ä|\nGô\rÀ";break;case"gl":$f="E9jÌÊg:œãðP”\\33AADãy¸@ÃTˆó™¤Äl2ˆ\r&ØÙÈèa9\râ1¤Æh2šaBàQ<A'6˜XkY¶x‘ÊÌ’l¾c\nNFÓIÐÒd•Æ1\0”æBšM¨³	”¬Ýh,Ð@\nFC1 Ôl7AF#‚º\n7œ4uÖ&e7B\rÆƒÞb7˜f„S%6P\n\$› ×£•ÿÃ]EŽFS™ÔÙ'¨M\"‘c¦r5z;däjQ…0˜Î‡[©¤õ(°Àp°% Â\n#Ê˜þ	Ë‡)ƒA`çY•‡'7T8#DßÀÚq·NJ•ÍƒB;ºPQ\nòrÇ“;°ùTç(^e†·ÈëÉ:àð¼3„ðÒ²CI†Y²J¨æ¬¥‰r¸¤*Ä4¬‰ †0¨mø¨4£oê†–Ê{Z‰[îì.¸œÌ\rªR8ƒ\nN°„BòßˆNêQBÊ¡BÀÊ7Å# äa•­ûÔÝ`P§4©Ì”¥5*ƒ*÷DŽ¸†ŠÈC\n:¾,´ªŽéÊãpÊÙ>\nRs3jP@1¢³;@ë‡Œ(ÐÍŒÁèD4ƒ à9‡Ax^;Ðt(¦LÃ\\¼Œá{G?ì:Š…án”ã(é=èûª5„Að’’\$HÜ:xÂ@Áƒ‰¼DäŠb‹ÔÒ¦‚˜ÊcJ¾¥3V ¨ã¶€ŽC«d„·âhÞÆ¨­ÃRÝVu —7\rã|‰ïªÃR°XŒCËJ„·%ÌÎR¸Ø:«è£wlpÆî»\"1³u4Æ#¬ÆŸ*tà\nË«ä’ªc(Í9:õÕy_\"¬xŒü×Ð\$#;63Â‘X„ûŒlz*ª Ðjjã0z†9Í®Â2Bdˆ¦<‚b* 6uŠ ›¬Wƒ^ÀP €d³2W8T”Ò„Ý°ìMí5çõ¨˜#(dÓ+k\r6ŠR!Køj§E{ÄÜŽ#¨Ë'lÝ¶ííúº';2èäÌ;D’(5\rTÔi*NÊˆ£ÇÇî#-³¨·ûÜÁ0oÚ8ç¼7è6'_·ìû*Ñèìá3(Ð(Lì#Îh£tYº£¹úñÜ-j©ÑÁøÐX‘T÷Â„«öó\0ªÖ4F7\"'`4ö]ä1ÃIqÒÀßiSŒ=øAà¥~ÓW;¾<’*\rã_†!ŠbÞÈÙÁ\0Š7}¥o'íÛ©_m¿*iXÌ^Ciž_\$ÑÔðÞ}É	… Äu&òÀFàoBHQe@v\0r cÕ#GÈ3CälSiÃlÏq:4²–Ë©§;ªø8B–J ¨u~)Õ§„ôŸò€PJ;¨`È¢\nR‹J5G´\$¯Ôª—ˆjiN)àÜ¨M_Á…Tª²T«ˆÂcgåX×ƒæ›Q	I)gU™“@‚`[­z!‰á™ÇŒZÉª1ÇðÑ\0uÁ8õŸ“ÙÏìF@,hþ…\0(oqgð‚¬\nMÉ¼*h@“²<H‘›(a¹_!#Qù, ¾BcÑ\nd;¯´P¾ò Ú8x„%<Â•äPŠ¢À¡(³2RH‡ÓQMCÈSO©)`+ø•erð€5&Ä˜HtRX3­a¬Ê+„~wSrá¡ÁÔ é®	ú6Eð(ð¦i9v,ýV^üQÔ06ä©\r?È-2Ùœ1¦lÙì~Þ‘%¤ ô1” \"Ï4Æt1Óò‚J1]\rY³OSHIÉ;%oÔÂ„`©\"ä¿\$Ì*m•BVdÒ‰y]¦;hŒ‹êI¼3½¦KCM)›? ¡8ÀØ‹•ø)c„Ø „0¨BL	!h …)Âp \n¡@\"¨jPA&Á'… ¥Uj½Y&Z¿Rˆ¢)lð9w¯\\_¸P%\r ¦jÎÊhuG<8Pæ6üÙ9G‰Þ­Uº›‰Az.–:šÌ¢è^Î¸E}ê Ç¶Føåƒ¼NÊ‚sfÎé!Gy€×\$ô[;Ð™îmŠ¶6Êß^‚ínVÚÏÛV‘ÑyT)6‡4VÂKÓY\$	\$€'4rCƒïd¥8Š°‚•0:U¦ìô>ÑS?cÄG¥RCH‚¬½“bsËí^ttª?G´òŸódR5D\rõ¤Z”ƒã¤èž.Òêà•bIžÃ4{P°³˜}¹ø0„˜aIÍAy¼Ûœ<,µ0½jCF\\»RØ%)\\VV^Ù£Ê 'tëâ›åb¡Í%çÐÓuä\$¡¯JK³X£áièJLÔ4²\0õ8ÓTd±¡LÚáà\0B9`HÚæSUNŠÑm¹q¦á*/–8¥M	\0º£LJ&€t ¡Ô88dvbí!^0®ŒÎ™ó~÷Áx ]\nÇ@®4Qô‡KW£>¢òÄ™Ø.íï’ÚŽÀzh8`¸¦]ƒƒÆ4Mâh£útÎ£–€Â›×=ù¯?Úˆ”G¿ŸöŽÔ8#QÀëHœ©eÑ:ã?Hw¤de£´»Þ˜½Žáòc87[E¸RóÊÙG_T¨“ØfÍ¶JëÑfÇ-FM1•.9AÊ˜™PŒ‚¶Óf¦x”‡pÊ4±Ö“xzôz	KÃd·³ªü±1È@e‡<¤“z`í»pŽsÖÊÏ³8>œ—º¸2ù4ÆÜtñöÞíI¡‘2iEuwÉòüÎÁÄrÖ¡ˆŒUŽZéÃ›nq&Qÿ=[F&:×(EÐÍúÅLfU„¢„iÑÚš˜%öWºrQ6m¬2»þlÈE¹ÑŒ/\\%Îµ„0ª„ÇùJµDWÜXcn)4^k·âuí]KìD!¹žX Ë\\¿3Q’¹&Ì°¥‚:+è§Â_\rnç@ñ ƒÇÚ#Î›	.ò~VßK5Í\nÿ-{®]·Ÿ%è›g¥ç<ÔÇ0„Œ!92¡ØøBIN/ºQXíM1°4Þö¼·Ûû”mï57¿ÓIjÓú'Žé­á§­gùžxrsÝ4ÇªGéú°›þ×Ò/±™Ñ_µáN[1yÆÁ—û§±“ª¸ÎKÂœFÝÙC‡ù&Qb,î¤Ú{d´®Ï\0dÂÌhFö´\$ð¿	8y‰^a¯àÿŒfQJfÇÄ7îðð+ì\rª*1ìŠÇOÌ®Ï0(¯&ZkLðNjûðTç',.è¤ÂðXô.<,,¼LnDú°Põ°v‚Ktè0r°ƒ®v7\0‹0‡	P˜2.Æ:íÞuÄ&ÃÀ‚id€º%47Ö¨0nð‚V¸`Þ„.aŽÐ¨0À4ðÆê%ýPbõÅÛ	¬7/çLÆÃq0Øv°š˜æ0ìŒÆ%0ø(pÚ^d0{JéÆ>£>ãoœç¢Á\0“¯¼#•ú’òq&mÑ7†×ñ*yÿ1@“«˜ãPþðÜ3pÓÑDÅBo1OÐ¾õŽÉ&CÏY1vÈBóè¯,•pOŒ€É„ökv—Œ–\n†Þ^°—Ï>ðoP”\"õQ~ä A„K…fJ¢h	´&\0ÈËOt7äËƒ*GCê¾G¿Ží\\(bœ4-ÃZëVa±öòà†ïc{ç†LbNK§•ÀšKJ‚ ¢N6d’\njŽú#u\"åðÚùDæÓ’äBÕ „„\r€Vk¤‘&µamdGcD\$ÜŽæè’#pN’gçF«@¨ÀZ\r÷ÂF‘cÑ-¨vm¸ÒMV*\"2C).\$'4Á‡8™N|[põ%v6#ºI2dÚÝÞÉËÆÇ®à›QxUÐ}ˆÜ\$2_À %ä3>(,ˆma/&º—)>ñ\0¨Mrd+×EÄâ‚ŽíkY\0n–œ»ËVûû1¤\$‘D3\"3&À/šQ2R²1)`°‚œ)ŒŸ3Ù3SBÑsF^I&FfpñÂ4Œ±Î–¯îø°0ó³tï³{\0h ZB„’€Þ’Â>fÞ¨ó`.¢Ž1óHæƒn2 ‚Kƒlq²!Bé+‘x2³&C1ë %F‹Ï90Èös,1åuQTcB:*î%dš#gxîBB¾\rÀ";break;case"hu":$f="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ü@\nFC1 Ôl7AL5å æ\nL”“LtÒn1ÁeJ°Ã7)ž£F³)Î\n!aOL5ÑÊíx‚›L¦sT¢ÃV\r–*DAq2QÇ™¹dÞu'c-LÞ 8'cI³'…ëÎ§!†³!4Pd&é–nM„J•6þA»•«ÁpØ<W>do6N›è¡ÌÂ\n)êîæpW7­Ñc\r[è6+Ž*JÎUn\\tó(;‰1º(6?Oàôÿ'ïZ`AJ–‚cJ²92¬3ž:)é’h6¢²­«¯[5 Œ”5Oëþa–izTVŽªÞÀ¢ƒh\"\"‰@ô\r##:Ä.è£d·‰9f=7ÀPŽ2¤ªKdï‰Š¶œ7£ ÄŠ+q{95ŒtF6D°„	IC\rJ\rô¦PÊ¬BP«Žˆ\"¯£=A\0åAâb4)0z\r è8aÐ^ŽôH\\0´+º4\rãÎ¡ ð¬Ã˜Ò7ÁxDáÒJLþ/¯£Ü5„Að’6Ž\r³\$çxÂAh’’4\"íÈA5¢˜£&«)¸¨0ŽNØØ’¼ ä:iSï‰Ê»¥\"ešH9³Û¼>+âü‰E½²î»æ45\$*º³\0£\"š€MÛw¨—ç3C '°Ö8án3k˜É²£8òÅ¾¢ê­ò¹*i[Xú-â Ê3#ªRÃØ:Œ P–Ù¿ð´Ã­N11@Öœã:3Äè®D¸Û¬Î9W\0§HŒIŠ7.xBÞ¼¥c[7Gc]\"«7Ôa2mJÃ<¦)c‰©9F5;n(@9Œu3Á_¶%L¼LÎÑÁÛk“2ÊR£…jÜLÍÈð*ømÁk —*ïŠ{êc\r)ÃÁî“<«±ðÀP Ù6 Î4Ž£hß—Õc…\"½êxŠ<sÖ.op÷W7ñvÝ3nÑ#ŽÙ,\$îIKÓ5#Z7ŒÃ2€…&ùé6¾¢ Þ×á­wLŽ£ÆÂŽc65ü½2\$#ò˜ã\nî|w˜Ú»ác(P9…)¹†DË\n»Gu¡\0†)ŠB2`=Sœô,Áp 	e°6EÜzƒ‘1)Õ­0Âç¡à+Œà ×ŽtN;*\ra…W””2CR>pÊ›cœœÓ©=\"è5@“Ž{iaÌ;©Ü] i)’\0§£RŸSúPjC¨î¢Ôi\nJAI)E;ÂšSŠyPuD•!~Tê¥Îªã’¬Ušµ2Fi\\2ta!J#!Éæœ”*`Ô!\$2†²ÁëzŠl7 ¢ƒ!W;%hÖARP†!0n\r'Ç—˜*ƒˆÒ I¸'ydÞúk(æl:ÕÒ(\\Óá j\0\$z’GXÄÈûî~ÔT¿3,‰‚Qsq¼“ÓþÝÊÑLr€7”©4±K”Z-R«`ÎgÌ„€é“p’DCÉ§‘šâ•,!À8E 8²\0æRƒ0r\$ € Ä’4p¨cXòÂqPàb²Â1ˆ`‹G‚bxS\n’äßì¶³J9!Íw@ºµ\n¹H9PŽO‡¾¦e\rV¤ÿ•fôE`‹¼\r–\\µŽ£	\r3=_ÂdmMi´&!*J…L»‰ë¥)H8™N¢A,ÂA\$¹ÅipØÓl“Öð:J\nØoG-§âT-™Ñª«í~†ðàTÃ)¬rM¨£CX‚CWKì82Æ\\È˜‘INryÅ8µÞÒÙ'>€(&1y4›ÉIÇaÁ÷Þüe©Ú–ô=Çž”li%11ÛìAÂvŽÚI¸ÉÛf{ˆ®*¼€ó\ró›AXÿ3,ÙxÃ!°¿A\0ƒ*­\r-”:GÂARÉ[EP¦=ÉL.!o1/Ö\\–Pê•N¬¦”Ü·KéeáL€²†IQiY<X1•É`,¡k–oÊÅBg *Xl/Aá¥]ÕÜm(w#«I®Ý‚ýPÚ\$8Ž¸\0¹‡†þÞVÑßÊE;³`‡ *áÌž¢zRH-u®î0*&bF–æŠÁÉ«'B)†ÖØH6fù§:ÖDOcšúÁq±¹›nÂË½ª²ÀÑ–èÊ\"@…XYâZí lðT\n!„€A9HÔ‹ ®úo63wN¦Iú\r-”›`×DZ)Ñ á¸†®à^W×™KÉwf¬ØØÔ|Ž¹€­…4asõ–ŒÊÑ†òÇ^æiR'¤£—r² p	¯¹|£æ–Øàžy—íÄçàé \n^mÐtGC”)¢³žÎº?;³ŒôUóáªÏá‡@é¬I§vž&òTÈ1ÍQ¥WÉª%Y{À“ MóN‘7{:4bokN©ÒÕðžÓÉÔËxFBäÈ”U{rÙ	PÚuëkcmEeÅ½%6Y¤²Œê\0\ná”1:ƒ‰\nŠ)Œ£m°³·‚rÖ\\0·ZZÌê:‚ÞŸÆ§-Ý¢\$ÂÎæ>G(…/£ãV¡kÐÌÁ\$®a¾Ø'¤¬…ÓV	Xl5ˆV‰ñê¡ÖÏ#·üqužÔÆcw!9/j”ÏÀPßeKÿæk}¼F5y‘æ–Š‹méù¡þ'åÍ3m­]fIi”®¤UÌ#/\nÞ²Å8Íl’t%bÛ¶[l;']ìõ‚±Xs•ÖIÂu.ø:ÌçjOíqÛC¡'\0àdVÀŽúü•|j\$\noßKî61Øó[)ÌS«¯ÖÌ£Yä\$Œ>FÈxÞˆJú?›ñžWóâlß/1²|ßr8_R†]T ôG×7îzùùÇ2a Ì¥Ž%Ãn÷‚´;i«ô.±Ñ\0'ßÛßƒîýïÆÕÚÙ|­?ó_Âú:³Lç‘õt<Âµ\náë9Ïã~µ 6HïoîjEý›Ïôn€uÃ–\r:<1È @ €ô_Ç6\rÀÂŸÇø\rÂ]\$XEÃ\0¨>`Èæ\rg¸&/ú\$1\0æÀBZmî{ƒÐOlVŒZ˜¢”uàé\0<]B´‘CZ0‹hšÏäÂïÚ-ìÉ>T«Vµ§XÞê¹\0*¼ÈÌNÉ¶'.”ZoJ÷O	ø˜Îlç+	(<þ®ŽZ!S	KD´‹<N­öÇ¯Ï\nOëÙ	oàôPÈ±/`+è®ŽÇb?¯n°£¿ÁgXo`–+KÎÙ¬<°6Ìƒ\$ã*hÊª™Ã:B¶ãe–ùÐÂæ\$ìøÍ	±#Ð¬‚&Ren×j>[`Š\rˆB/õ	pèkÑ4EÖYKG'ñCpðu£¾\nÊ¢Hƒ”Nã–%î®+¶R'X=WF~Qm0ÚöcÑŠýïOq~¢\0º&÷Ñ‹&ö>0²P¢Ü‘°`Q`õ†b8ßºb¬³Çº¥lGîræLDñ˜þå•‰ßå…,I±¯Q¿…¶¨„wËØãjôK¬‡ƒÈD…oï!¤L'ñQc6¼ï°Ì€Š\rÉ\0CîhËW£Vëæl^`Ì´ËP)Cl£®R/ìß%#³%h?%Ã2²Òc%F%€Ë&Í.ç –È­bVâö—ÚÎR|<¨`éÎ7Ä\\<ü²ž\$BÞ^nJC\r`ü-+]+O“+Œß+/¨Ó®Že”\r€VžKv8¥&:cãZŒÇ4›€Ì{ä&àŒ¦œãÚ|‰p\n ¨ÀZ>/.<m€újrsãÿ'Ž|…Y1Â22e‹1îr#Â@\$BH\$6'æLTÂ^&.vF£Ë12î¶äÖ*Ü`ÝÎ00ã÷\"iš&3d:£Ð8&;ÑY/Â´~±vø\"¢(qBn;z@;±6\0˜\rå<jù:EÜsB›c|\\¡m(Ë\$‡lzZŽß‚u\r¨\rƒ8Šï&îr¿ÎF£6qÂ‘“Ü(ðF¢|\"ÎE=®„jñ!sÚ8ƒlÃ#V5¢~ª¼·§Î0HxéüÐ‚\n‚²eðö-ÐGsüh,È	©ŠÎ š¢&ºïŒ\njÎ(n†ÆH†‚¼ï_ËV Æ¬l	àáAKêqdâ?\$Q>„Ñ\$@”5e²ÈÑEÖ_Kd3BQ\$#Ñ?\"¸ôdªh\"Ö4‘>L\"\"«fÑ¨µ+b‚²\r²D9Â\$‰HG#:ÌbÖk†\0à@Ú\r ";break;case"id":$f="A7\"É„Öi7ÁBQpÌÌ 9‚Š†˜¬A8N‚i”Üg:ÇÌæ@€Äe9Ì'1p(„e9˜NRiD¨ç0Çâæ“Iê*70#d@%9¥²ùL¬@tŠA¨P)l´`1ÆƒQ°Üp9Íç3||+6bUµt0ÉÍ’Òœ†¡f)šNf“…×©ÀÌS+Ô´²o:ˆ\r±”@n7ˆ#IØÒl2™æü‰Ôá:cŽ†‹Õ>ã˜ºM±“p*ó«œÅö4Sq¨ëŽ›7hAŸ]ŒÞëµZÍ•÷{¾ìdùC^ßta'¬D…\$•ôò4ç£2éˆ\$îïÃE’ÌN˜“)¬ç¡7^èòÉtÖœs:À¤¶ë¡Ó(³	HóJ8#Ã;Æè :T‰'03Îâ„ºõ¥ÈC	L\">ïã(ÞŽ¿ËPˆ0ŒË€äá=ã(Ú×%lN(@°;~€­N»ŽÙ.\0Pš•Ž£\\u\"Ð ä6§(ð c@ä2ŒÁèD4ƒ à9‡Ax^;Ër†6¡	@\\7ŽC8^LcÃà½¬¡xDÓL#(é'ãh5„Að’Õ³\rÈèã|ù£“pÐ7ŒŒà@ê±Â˜¢&\r-\nZ(2ãJJÐ:c½ã”zõÄâ«’®\r[.ïSÊ2à¹B(Ý¤Éê…Ð£è	cxÙÃ#ZÏI\$Ã\\—^¾Bxé£KÐ\"Iƒê6#c³Î:Œ U ´\0PŒŒëØ ŒòZGop¸È4£‰Êê5¢­4:/ÍÈëM5®ºàˆŠ	ÈÕ©ïj\"‰ /-¬„ WEN20¥C…¬”!‚KE	€PÅºÛavÓõloJU+Ò5ÅN€„:£H†I\"5Ù[•´¹\0 Ê2ÌÀçjÎã„ÁT½ÙÔO“å88Ù‹f	¾@)åÀPáHÛ6„NÃ±)“7ŒÃ2Ò7©h—„e8¨7²2#uC¾#¨Æ1¦˜ÍgáCxÎ„abž9*F„ÀKBËƒsn2…˜R–ëù\"‚!ŠbŒ§­ˆ‚HXÒÊ\r´;h3„4À6Ùüš–”1kÞ’\ršêè˜]]e¸¢t¿²‹·¥±ÜR™£#˜æ;Ì(Ê<irXÉÈIT—&ÉòŒ§*ÊòÌ·.ŽRüÃ1Ó,Î4Í3\\LÍMáã9Î¹ÌòOsìþ¤P-	CH™&òÈ[È–ˆ‘í¸Øæï“M&ð˜Ò‰hE=Ï]ÆÜÏIñ]@\$pN—8d~Äè€SJ‘ü[ç¸Í•\0LCAt?%Ì+%&Ciè\nh§>Ö5\n {˜\\äôŸ“— tƒ‘á<¤5ºòKBI& ¨S ¦ò…4f•%‡¨{ÜÈrCà€ †FúJ\nxh#À€1«voPa3OÐ0 Â˜T_¡È¢ºRhL^‹‘^h5t)B„\\JB\$ñÀ¤°ÖTyb\rÁ˜4’r|¡ø\njpØ™ånPÊ& Š9“.cŒ±ÁR•\npÓQ±F)³pä‹šÑ!k¡˜bÄQVðO	À€*…\0ˆB ERÈ@Š,¹A80¤@A+ÕÄÄ˜Äf¢Pµ—Ò\r—iLµIŠÇY¹¡=>a†xD—™!;çPë4Tp[Ül )sš;·BeÉÙ‹œŠ=¦1æcIs(#f\rÏ„F‰I‘’ŠOäc\\XA®.¬ˆ… ÊHcY%–‚’‰•\0d@¦Å@HŠB?v\$@2˜6îš,\$e4Ö«Ya5hCC/!éj„4>u\r\n,3ŒÐ†IÆuYk%ƒZu#óBe9=ªËPîƒ´AŠ¡`Q£ÜÈXë_Æº³\"Ÿªtæ†éVP‹ÙfF	p1ªù¬Xê­Š½™®¢Šd‰Cò5§IÑ-§6F€PR6ä!T˜ÓZˆÑË@~Äî-ð¨C	\0‚'16ÔŒxoSyŸSÒZÏ;)(“c­C(¬\0/ Á™Ewi—Dîf±¹7µ[k£ZCjj—ø2@«ÁÿbMõ‘eÎ¾Óœ6µ5ˆ@å;ØMÇ´+å!›’kTb\\#qH;‘ªHŠ1Ë&Ì<­ÂFbÊ\râ)Ë\"¥\$”ó<¦kä‹%¥7XœºûÔDBCä‡†Ä5`3ÅhC¡ß9æš¨ºòFQpHR\r(H‚à’˜^ÃA~.ª¬ÞÒG8tR¬¶NŠx3«\0U]ñÄsÁsÇ¥\\qB!}®è—¬lrCs„¦7:èbYçTØF<¶dì:©üt\\²\$\\ì\\Ù”[éˆ\n#µ¦aª;bP‘Þ_!È¨%ä»æ†\\ÆÓve“,ºZ‚vVWädœXr+W!¸ÒÕZ·K¢˜(5‹ì‚œÈÉ§deÍØÖybr] K†ƒ'dùŠNH,ëŸº'¼˜4”÷ÒŽƒ!®|ãoZEBÒ«ŸBŸMC1µiÒåÑ—h­=‘¦\"Tf¶Áuû\n±j\rmöÐ£«Mê=º¥aÖÞ„¹U++K˜Õ:–TÖm‘‡uNŸÙµžVì­9’µTúkJÚRÕØ°@5`(/ìê¨¸ZH8 \rJêsÃ‘†xr¤Çq¥\\MÈîç‡‹¢­ä!”Ñ¶uû‘þ•@±¶uh83[\$oCÀÇ	%c(Ó!Öö–m5vpÖ[Yñ™T8¹ÊÚù¿UÏ–ƒ1y	­¶bcéÊâÞÑÖÂôò<kÉY ¶“¾v‘‚jÏ›Ôè˜t0¦›ƒIÓaùpì]CÌÊY»6èzÕ¼l¾\\Kz§5¹úwg.³ÆyÃmd}os“&XêZóç®en-ë@»DDè:}„ŠŒi;Ë1%Ï¾m´7|MÝƒm,²Qàù–rç4k¾ö¿›³™¥êØÿºy.ÿ’ü/9Ý}×µùµ•ZÃMmå¸ÿÐz/o})‰Õ=„£W/B«û®­ (+¡5_Í/\";žC#Eîý:±‡“ÂdÓ¾âÐdVÁ¯V ƒe¨ìïç`+Þ­/ÖÙc—‡€pá~vÕˆPº€Ê)ü¤j [gÉ|v\r·„´!ŸàØ\nâï¡\"Å–H­'J4FÂP‡þn¥% Œ’â8:®üo\"‚\n ¨ÀZt¬Ð#âZ¶ËZòÎ¶Û	@z/°ŒDß)êhDu\0@Ì+a`CðÃ‚Ì;cÈuã&®Â¢îÑ‹ˆG¥¼¦:Î‚ŠßŒè%£¤(¦ÄJŽ ÃHDà˜\râ†80–’\0ÚLhæ¸·ì¯®È-R,BÈa‹•&Õ&–`,3ìvÕ\"bjìO.RN®ÈÃ\r Þ H€ØúðÀBBå \\«âŽËFr°H	§P5¥ò6¥ø±¡ìøsìªñ^ŸµÊ\n*Ú…	§£Î/Â\0©#Žéhx&.–0möàâÆ,¤ËF\$‡^}ÉøÓBñ\r°Ê5 ¦©+ðìC ÈBF†_+€BHþ1*Ž>(2\0";break;case"it":$f="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,¶Z0Œ†cA¨Øn8‚ŽÇS|\\oˆ™Í&ã€NŒ&(Ü‚ZM7™\r1ã„Išb2“M¾¢s:Û\$Æ“9†ZY7Dƒ	ÚC#\"'j	ž¢ ‹ˆ§!†© 4NzØS¶¯ÛfÊ  1É–³®Ï+k3ëö3	\r¬ç‚ÕJ´R[iÒ\n\"›&V»ñ3½NwîÔÃ0)µ¤Òln4ÑNtš]¡RÓÚ˜j	iOÀ4AECIÃÒ#ÏCvŒ­£`N:¼ª¢Þ:¢ˆˆ\"4Î @´/Â©\nC,#Œ£z(ûº­T€*c*r×°L°äìÁ/Ð cºÐ2AðˆÄ?BŠ·kèôó¿B`Þµ\$£ƒœÑãô&@ä2ŒÁèD4ƒ à9‡Ax^;ËpÂ2\r«[-8^ŠÌãÃÊš¤xDÖLðé)ãØ0ÃXD	#hà&c xŒ!óÔCãBòÐ#	BB)Š.²¨–ŠÍSzéCÓÀÓ0´«¶4Ê`©ŽP@è¯ËÂô¾&â§T¯+Ú\$Ö.ü',ƒ²0ÄÑàÞƒŒ\0Ä<ª€HK`Øj¢!ãbH¶?oíf\r´\r4+XÇ'ÚÐ| 0Ž£`è6C`êý\nuä~’/Â3u½\0P‚3Œò{x?B¾¬ëÜ8ÜàPž9/V‚ô”¢¨Ò- ºpP˜ÄŒïÍDÐ<–½ð]Ïh¦¥3ÂO\"1H	€PÂÍ0®ÛkXUu›J¹Fî8UVKê1¿18‡'ÔyÄLÙçÉî^¹Ç\0P Í³¬,ú8-“ 9éƒ–Œ©†`º¯Úcth+óŽ^õÅ²’ ã0ÌéI)hŠÂ?cz1\$.[1Œl8Íp„tˆ9…\0åºŒ,jÖpö=Þ*@æ¥¢ Þ5¢¡\0†)ŠB2œ’Ü£NDÊÖÎ&»œ\r/#ì°‹’¡µCU<\"Ü)û¾òï« fòü0ð7‰Iªb‘W=Îf*ƒ“3FX\" <?ÒxÉÐIŒœŸ(Êr¬¯,Ërì¿0É#”É8ÌãtÓ5¼ótá9N“´ñ=O“õPt-DÑm\nråBãHÁÉ\$#ÂZ		Ç'gœÿ†Utf9‚\$%Ì’³LUZ{ì\$‡¤‘¤TžqÈ±…	Æï“ãÄHO!M‡ \0a£j%ÈÓ‚‚Œ\nI‹Pƒaˆ ’Ö¨Â‘ú sk‘P§\"Aþ7Lÿ:\0 `ˆé•-M#ÆÎzŠI&D˜¬F¸áÁ†¤Õ¤ö\0yé\r € ¦Äó£•k8ãšƒTóÌôG\rñ\$ÿ©ÅÈI€P	áL*:\0¤çˆOq‘…À b»¦/I=*†“l^ n#ÁT/ˆ°›,K\$¦g%ð@L!àg ×H0T†…Ä'æ›\0cJ!ˆ¥1ãRoÏ{ÍI (Ü«f.Âp \n¡@\"¨XÉ&Yž[Ðñ!˜«=[Í—žˆš9ì<71Ê¨˜p^y–¦ zNiÏ\nm1WÃ_=tîR6«“\n„‚8ˆnuÏ£ZHÙÓ-†íÝ6Î¦è:ùg’1¢3#¢EMÉ™ ŽÜš€ ¬D\$<:F¾+ô2ŸÈ‘»\$”xÁB²BQÒ‡•ð¤óx[ÏRòGp„¾šrE)‰F^KÐ›% ³&2@?eÌº®…B¾PðpGh 2¨\nhä˜AØˆt¨(M‚äEP Ê°Làeô°½TµjËøn/D©™«Xâ+‘0¡M2¤¦Œ–WìÑVT9Ý9OHfŠf0’¹@ò~ËIžEs´4Î÷c,‘.-a¬Ì¤tñ_¤9ˆ\\F™_„bÐNK0R2&îa„S-h1…j‡y¯ ¨C	\0‚3‘?âü1‰-6³¶àäA\$RIVÖñs¸5€x ¹å¤0¬e‚ZOËO¤\nOMo[¨O	nÅ]JðóL:À%·Ý°ëwZÅÌ0W†ñ”[®cÍç‚Dî’ØFNÌK´Z¬„ŒSÞdàiIäµÅ^‚]q¹\$®ØÃ»›­|œ¤®m;PêÞ0«n8ø&Í&ÆAºË¤õkJÕóŠç	#0°x(t©)-Bpã‡\$T‚¸eXõbês{pN.¤‘î•ëª¤Tk4Œs¥“®E{\"äDÜ´eÂrL-„Vj*«ú/‹hKä´¹ûã)OQEyY_jñI[Ê\n•2åæ“¨\\œŽ|tÁ¶»R—Wžëy0[mW@M‚(­À\nÐ™lýQõœDhÕgJ¬•˜T^Ô•\r³¨¯O›¹×£‰p\"š¥ibÐÒ«ÉÊÐŒ¶ž†—\"´«Åsª87 P¹§+S@§TPj+\n–j%›­˜²G²žU\0Øæážl½¥³u›5Íf½®•\r“ŸÞPSÛº/mî*¸¢4-=yA_¢{T‚¸Ý¨Fò_s~ ùÛÐ\0'wÚÉµ¼Ë–õ1s›|^•&Æ,Xg±¡•ºçêêí2O±€‚Çniz¸Gá\\S†mMêàC´×‰\$†WÖmÈÑS:—Â«²w¡2Î!‹(9—q6 i–=øôà×®¡Ë›zôð@ÞT[\$ô	Ãr0ô½¸\$¢\rã!—‰ØêÝ|C}€’ªè‡8x_¬¥–èkAO:í²«4oe8›‡©DE¢¶««¶qýW^hxvÛµÊû‹m­—ÞóväÙy‰›@å|C¨Ÿ†ÆUÇPÚTÄÀ¸Tì#5òj˜>Š[<ûµ{Ç¼èÝû¼{>†%¾’x'Wá	ƒ{ê+ÔQ ÞÞC\"¨ñ\rTŽ®ú•ÜÌ×¯¬þÉªzŒhÊFEŸ¨vºµ£WOÄS\\{Œ|•Ïñ{ïhôû¥Q†_”_»™ÇúëE¦äžP!â@è·o||õ®œ4&—ñS³OàžW­7wô ,\n~îÏé¿ìü\$ýÃô\n‹\"Š:ÏP\nyÏBÝHŽ³ þîú‹.^ƒöf­&œ\"ÌÎîWàªü%°>IO¢¥'•nO\0	t?\$hô„\\HëŸhõâüqOr£‚0-gš ŒÊ½pp£gvß|ê@†×nX'\"âä-Ãª¢Ì'˜Š^Tâ\ndîçPª%þ#ƒ\\*J“#à8¢JqExZËÖ)C´PÂÂPÆ¯ìÛÅz„\"ZÀÂ= †9ÀØhæ +81–«è¦ÔpJ/ äYÐê=Éú*e…‰”\n€Œ p*\0Ü7&\nìÞÂ`&Hf½L.»Š–Æ¤¿ª¨œçx»Æ¬ÐJº)âNu¦X/kC\$îÔð;ƒ¶q8m‹9±	©Œâ¦#ÊŠbZEäˆ/ÐÀ&Cª\rä¾8]…‚Ð‰h`ƒ#¾´bÌä&®„îJ3ª\"Æ,±I\"H#Â!‰ñ¢C¦9.f‚çh?ÑÜÒ¼æ±À†øè0Ñ@5c(çBèr¨ö7dÂ¬Ç®êñ¼\$%\\AEôFl¹B›ô/\r(%Æ ØJ WéÈœÆ&çâ?J\0=#¤.„0¿\r*\"A†’²SEä-…1&E˜\"ÂVÉö?¢ 6qÆiÉæ\réêpéâþê\"žò„jhö†ùòd\n	\0=\n&(–Í2UêDÏ0V	\0t	 š@¦\n`";break;case"ja":$f="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<†Ìh5\rÇSRº9P¨:¢aKI ÐT\n\n>ŠœYgn4\nê·T:Shiê1zR‚ xL&ˆ±Îg`¢É¼ê 4NÆQ¸Þ 8'cI°Êg2œÄMyÔàd05‡CA§tt0˜¶ÂàS‘~­¦9¼þ†¦s­“=”Ð(§ª4›Œý>…rt/×®TR‚ò‰E:S*LÒ¡\0èU'¹«Õû(T#d	ƒHûE ÅqÌE”')xZœÅJA—©1Èþ Å®ƒè1@ƒ#Ð 9ªˆò¬£°D	séIUº*òÀƒ±\$ÊzKêÙ.r‘º¨S/äl˜ ÑÎ_')<E§¤©a'¤¹Js,r8H*ìAU*‰¹•dB8WÈ*Ô–EÂ>U#‰ÂŽRT™8#åÊ8D*„<‚_£ˆa˜EÉÎTÇIBý#êdÿ+Çò	lr’j¨HÎ³þA‘3Ì÷>È%Ê¨—E‚®Y§¥pîäÔ£•Eu x0µÊ3¡Ð:ƒ€æáxïa…ÃÈ6¼#(ä\rãÎŒ£u <8Cpæ4öDÝŒ6pÊ:W\"û”0ÃXD	#hàÛ\r¶ˆèã}„kˆ7ŒÛz9µ‚˜¢&\r.˜ŽOTY_§¥9tr8I£…,‚I(\$IÌM–‹í.À«	]ŠâøÉÒP§96WA0¹8s‚%|Êê¼ñGÓ”ÐYÍ¨æq0XaFs’²à‰[Œ#¨Ø:°Â6£.z@—1ý\$±DsIÙë'HO1HNå¡Dæ—eÙÌBóD+Eç‘‘²‘ám°‘¼rVÇqìt’¥¼@¼‘d®TÚ0Ùn9M`æ1ÜŽõþçdöt™g¤´@í.sÊé`”Ù?P±Š˜¶14tI~ØOd=*AuI‰O=/[Û„áxjzT/–]Q£„í/<#ë2P>‡m˜â”IeYg~Aà´ùÏÓ½B?Ø£š¦¡©?Z8äÒ4ÁºÖ\rã0Ì6Y8\\ÕéI g‚ Þ×· ò¶°êÃ¹a™£\0ØÃ9á`°Ý‡'öC8a< ‚	‚Uò²pu8@ 9‚“˜9ÀÂµ\rTÂ˜RÉÝ2¹39D3oçh R˜CÈ€ƒ7UZü	A~A²TGÛðƒ(láá>ï‘âzDÆÃõBð;&‡Z!Èv Qu	¡„9œ äl# së5|†PðJ¶€¸+5j­ÕÊ»Wªý`¬0î±V:ÉYk5g­¦µVºÙëlä-åÀ—l\\‹™t.¥Ø»—‚ò^‹Ø4/…ô½Ck5ŒØ,§ò—sˆ±AD˜–I‰ð‰=‰ÙVCxr‡D\nŒôž Ä„èB†ƒã@Y1<\n ( ”ƒPzBbô‡ˆ‚¢CÉš*#ñ/ÂÁJfèƒ,H˜ÂC•W2\r „Pƒ&ÇßÕ‚¤H©\$ˆñ_0¬&'Å\0¡ÄL†›a%S\raW‰!Ð-b40ÜO˜ÁTA&¢ˆ„%VX¥¼_Œ48’,_(d\r+ä×4…ø—ÉÄ8À[›A\0fA¼6‚\0ƒ eDg8‹D8¿\rÙÅ7AÂS˜xS\nŽuƒ'ÄTPI¨&â†huLzÊ\$¦ˆ!uD…„¸D2à†'.\"× èµ\"Ñ)ûT¢ô¶®2ê0¾CNãsü]a½c>`@ƒHgø&Sjk\r¢´ÁP(>jQRÍi’™S@@¿‘«YeäR	aÒ Þ3±.¢SµÆà9EÓi	á8P T *Õ‚\0ˆB`E¶Eå©\$9Dx‚ –ùž·ÖÿZ«`®;®Ôöè@\"Žh¸I‡ÈR-tg\\%ÏT½w@TÕMSŒÑ1Cáu\"ád,DF­]ÛÆèI0é{íN.Q™sá«obò!azÊÙiT%ª‚#(@}Å0§³ŒY¬Žq-‡0…IH2®°Òã¢Ø\rÄH9³š¢S:!âh¨˜Á&XP™òþiO„F§ß†#*%Rwá+%dI3#žÒZa@!­Ci#…ùæ’C¼CÓNtÐ8A¦œÃ)¶g2óâ|Ë¨„A¢*Z&Ç’ì¹úŒq˜4´¼WÉ´¡Üª1Ä“ûÌvO8º¶\$%s¨¢Îè%Ö±’>ÚÝ\nhzê\0YDvyŸlåž´m‰ÜÇoÙÇÇHeí&LXöŽaÂ\rJ:²8—™ÚbÒ*ÄŠòò!ÅÑìeä^ç¡yŠÃl,é4„ý¨oÕÝQ¬!º7£€mˆT!\$\n\\²ƒI¹|ÊØÖ†úLoƒ…’Í©ä\rG¦@‚ÚÂ¤˜2ð@ÁÞ3i£j§FÅ	›½1r†˜Ø,7S£Ï»®†ÒAYA	È¹511)‡13'ojW‹¹”è [âÞ¢DH€)€,†‘LÃº\$ŸÅ«¼øƒ8p—S<m”‚JÇ¸ú`ä-²lˆÁÏ–¥™4!i¡E;\$°¢Äû–[ß‰…pÊªãlæè˜£rl_É:)‚Þ\\ñ4m²þÇ‡( p¬ŽQÊÅkcàâns†P EùœRÊ,R˜­c#˜[Ê#…Úª²Ðì\$e%dôJóŸ=ézÙë\$dÛdI2Ì%•\rÝ˜s¼ø9`eŒÇáùÈÀt«Í•ÉŠÞ¹\rùmçæ¼œÈ¥c__÷¥ä„\rìy9’K‰ÖÙÂiÖƒ SôŠ9Dô#šuÙá†¥i‰jMKûï+µ§»ø¤ãü&uq=Áôl:¹:GMý“úyï¨&vi5[ã~Œ`¼©0,5Ë½î¿ËÞ³êMÞS¹ñHŽQM÷“¥ Ô+‡ÚýKø¾JÀ°ýïT»\0»ì¾úÆBõØËç¸vnøó{LÀÓÇFÓP*uð\"rOòúð*¡\"ÊÕÂ*ŠvMfÔåb‰úÝª_-ã†1+:³ëBboíÑ0tÑÎóâÅ0€Ñp.á-\0°ŠñlþþaxÍ#í\nœ*cæô\"´þ2ä–æHL Å(Šbñ,¼˜ãD,ê³\0\rÐÎÝ!VûaxD#:àHgãF\"¾‹„Ø0Ê0ÐàJ™*8ºÐ„(lèÑh\$Í4Í¦#‡K°~añ'núó0šóaÍÌá	OLe°7ñ3PÊÏÝ¯ƒð—®?qRj¡¦.¡jAÈC(Á^ÁÊcô Ve¡ÊÃg4:0PRðVö'¡g§\"9*ÝcÖG'\0g¤r¦®IÌù§\\œH¬‰%\0ÄJcñÈdF¬ †SŒäƒQã&XÀ¡ú,øLèH!c«Ë±Wï'æ\r 0X¼°5ïƒ!21-’!å!Ob-!/ P–×e\0HdþždNP' ªô!~’BH‹”ž’M#Ô¹±K%‚?\$PI%òJIr7%e%Ä'a#í*ÒPyqJÔM-AäÞÒ!Òñ!&cÛ)\$é*.Ÿ‘µ)ò–ëÒ>Jj¢x*ínNòA&òNË9&Ä…\"QË-{qR	È\rÑñ¸V'vw¡3\0¡\\v@ÒöwÌøá,íŠGÍÞ%ˆ¬À²nnAÏqz/ÒL‡Þm‰ä­A*ªAÓ&ç2Ñ|HÆŒ¥”²ã€êD€¦’CW5Ãƒ6.\ntoñ*`è@Øj|ÂàÖ²¯Æ”iƒ†ð\r Ìf9€Œ°åë6&IF¯ ª\n€Œ p¢sš<C˜ÝðjxxFÙ1rÿÏVó¯HKäj+è*¢ªiÐ,óU9³Ÿœ1ÁÎîÃ&Æ‘ºy%@#\"2mò¬Â¨@¬>'¢2£	Šø¤CÄâ”*^¥š5ƒ€9ò®Æ¡ Á<‘yÂM7çúÃ\0Ë¯Xò³â#v§EÓàãÍø#(éò)=Ô_=)~\nƒ’6Ãt53k;\nx\rààÃ%É(çDäRÚÑ@Û°õ7F¾útNmµ¬@T¾ü,òÎôÄ.Ê¾ªC4 Š@¬ Æ ê\r´ äI!ºäxÔHzmfB†%gŽ:f>I\0\n€åEc‚iÄxbNPz‡=IhTáOFg.µ'FŒðruJÒ,#ò0¼_ /dÍå.c*G+•,xî2ÀTòB0@";break;case"ko":$f="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú°0Œ†cA¨Øn8È¡´R`ìM¤iëóµXZ:×	JÔêÓ>€Ð]¨åÃ±N‘¿ —µô,Š	v%çqU°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ‚ìP +ê[ÿG§bu,æÝ”#±õ¦“qŸ«ÒO){¡þM%K¤#Ëd£©`€Ì«z	Ëú[*KŒÉXvEJôLd£ ÄÉ*é„\n`¾©J<A@p*Ä€?DY8v\"¦9ªê#@N±%ypÄCµ² QÖV2¤ñ ÐÀ'd1*ûäèAðaÚL«ùUÇËü<û‹üPËI§YL©6Fªr\r\"P’Å-È§YTT¥ÄìdF–\nÑÚBBhj´‡ÄREÌÇa˜RluÇ±²´u”Ò‰rBo¹ÖYq3Í1D×6¡ÒyRFIyÔ[²¤í'Qk”	ØN‰rgSRôÍ-Xä2ŒÁèD4ƒ à9‡Ax^;×pÂ2\r¯ Ê9Ãxä3…ã(Ýd(Ü9#}–7Ã\rŽ2Ž•¾æŒ#pÖÂHÚ87#m”:xÂDaÌãã#|àmx¦(‰ƒKŠ sDÕ6K´ùØP–‘fZBOif@!…êDÃÏì^†XrVÌEKÚS‘‰‰I	#7•\nÆQÒªþKÀ3’þ^’‡YRL¹4|u‘äÉØS¯³ð\"Vê6\0ì0ƒ¨Ê¿…ÚAÌÈ9Pv'û.ƒÀÈc¤A‘1‘TT&%ªJeY“¿DCøý¬ØtgÆùBLœªÌr€ zÈŸ–«š×ŽcºðßiT–”ÎOºÏMÒ}'‰á«ý&vE!ÖS‘†+É \\¯/Ì¦u€Àx\$º[K«ù:\\Aª1‘ÄàðNØ°ÌCJcxé'Ø`·íZQô=\"¯R|ç)ËsF•¦Z\0äÓµ!¬×ã0Ì6XWå-L,Îé6AB ÞÙ\r¶èò¶xê1Œmàæ3gá\0Ø7Œï æ7Ã—ÖC8a<€‚‚Uä°Cpu8  9‚“ža»b@™„0¦‚1Í(@‹\0\\{H	\naF%ÙŽÁFJZCè…ï·À%_äNÆTB“—.ÇEŒƒç¹×¾ªÜ)!N¼ „ÐÂÎ(r6q9‡uŒ¼ƒ(x¥W†H>«r°VJÑ[+…t¯º¾X	b,e²–bÎZH­C–µÖÈ\"[a±n­õÂ¸×*ç]+­v®ðÐ¼Wšî!¬×¯£f°ßHn\\ç<BCDJ“Ú<ˆ0ª\"\$„’4‰š` ‚\rAç¤‚¨\nYÑJc°\\  BP,EÅy:ŒJúPJ\nCè\\ªšûoB*E§TGŠHë)dÑB\"n‚(¼#Ä€ì‹Â‹!(ŒuÍÚ_TˆHzJ„’:^¨d\r+ÈØ´ê—‘Ç9 W‡\0fA¼6‚\0ƒäTJ8ë(7î½MñÈ7¡Â\0R‚xS\n‡µ(äÙ*R‘k…m,‹ÓJdh£ÃQå4§•»4‡`¤;¨ u&‚—jv‰Ä)§”…PÕ7àÜû oWïX ÒÁ÷	“äÜón«B0T”+uy•Æ±š†ŸSð/Päk–!\"àu‹b˜òÚûala<'\0ª A\nVÀ@(LµÍÃ‘äP Ð°2¬•ŠÄÄg[‰ZiÌP\$WB}O¹b¿Ã_›Ec/ðB]Á5OE^\"lxÎ:™‰â[6—å x©¹I9i¼ŽÐ “^[”Eœm­¤ò©ç‰Ù'éÛÂq–ŽÖ»Ö<Èh”P„¾§™\nfl-¨Y‹&ÒÏàR«4·àè´Cq7ªîŠTUäŸ”#¶KÊB¨¥eø HŽÉ²^„NÔ¬¥±0÷tbÏiM!ÏÀáš8S¦ä1œPÈ~OÝ›—Rð™§–çÀTF‰!¥¢` Ê¼¸eìÛ°WrÄD¥’\$™M©¥ú,nuÓbŒ8ïW’ÒØ Ÿ`ØÎ±VJÌAœõ¯tVE˜ÖJqKq2Uœ9 ùÙð§ð¬cb,¶7BLÔNDé\n1P;DZ9¯âÉ*(»…n<G×ß²\näC	\0‚{,0Òo²¯6¾wáV0ùÏê–œL'_7Kô\0¼2Aþƒœ6ì€\"	m&Ê0›z)ºÓVÃtÁ=ÓG=ºirk3å‘|w–°‹™6hõ¦ÑC³IS)©DN¡£öÛJ·P¾VAŸaÝ2±JÅ†Èîà¡’rVKIy1!gÝa8&BD¼ØÖ2á;ÞCBÓ¹×\0(+†PÅ*“Á*ØÅún²²'d†ãÐâ•·*\n•)&['¢ïH0‘Cèy²'¼!lšÓ\\dØÉ™S.^˜ÂcBÖÀýë«QÄÊ>ØÀE´¡-¶µÙA*„Óˆ£Ýà…ÌÝ¦âÚŽÿbŽ& ­³ãöÔÉ1\nþbôö3åf›óvHJ¡»4<ƒ‹óÓÄ“údæ0S¤Ù2,ÅÁöE_0&˜kÕ_V0¤“ªŽÈk_ŒOJêI:²Ü`¤íÞ2ÔÏLšlY‹îs*G–Ä¢€R“»\nQµVŠÖ<‹]J9‡í›nÛf{Cn{ö†¯êš‹ê/Œ®Ùæ–ßÃÜNýÚXçBò]µøkVñÓ‡iÓìWË‡&çœÆ”ð6ËÒëÏNó^BÉÞ´çú÷?è¹×ƒä8öý#,½˜\n÷'QY_Ú5å§y?jôžë‹ŽÊÇYk>A¥Ë\${L{ô2sB÷ë|ì}ô~×AwýÉ˜Ôh°ç´¥ŽË&Jþ	LfŒØ“{?H“b`Ë‰½\0i¬¤Èµž®#Áv°Á>%â¯ÎÊìêf/äïa`•&+ÂÀ â¼¯ÿ\0.XûÏ°­Œwlvr.æ±çFºlJ÷ÖèŽY	2µïVæPX4Ð\\¤É¼üJfóo_n*Ppd(õ™¯Fû‡2üpt÷o”mP’x”Cá<3ØBZ‡\$dç,Q\nÄ;¡\"i q#¨o~Ì,Ù\nÌËðÑ	¯}\r‚·çp¦ž'	…\rÈ†:/¶/Pê†ÐŸ	ÉPäx!`f2',¶N¢¡\0:NÐµï¨¥ÏºCÑÏµÃîû¦ÌNÂað‹D>Ü0ñ‘Æ0þv)\"@¬Ö¦„„HöäðƒOÊGqTFÂ<±©…!:âl†»„úGñq¤æ°÷1ƒäƒ\\NÒ¹”Èê\\Ò‘\"¬È¬—q<÷0fF1±D&öFuñ¢)ê]q¿Ð}æ\n!D˜ïÌ¬Ó¤1ç0ñ×`	Ž\r?\rï€tçRTêÌ4&ÆGPþÂ<æžÁÑË’¹qB2±šCìAëd#Ð­Æ:•ïÈó\najÂ\"?ÈK¡a#L+#°°ˆÈXjº9`è¤H\nhè5Òf8’ld+vãb\0ãÑº¶À†€ä\r€V Ëº\r`@ZJˆhfŠ8ÇÐ^ ÒÇÖ_B‚Êš]Òlh Äª~\n ¨ÀZ\0@Y@Ç*ƒÊäOŽ3îNu@uÁ21’Dæ«þçëxik|Ôëª1ÒêÃ2©*Äº†dšá£,3.Ê„µ12d+ÂÉ)f.k ˜¨IÔ<­3EÜXÃ^8c–á&ºB!eafŽZçÄ-(ÇÚ»ÀËîlèòðD\\!‚Q/ðBç“\$„öõ³W6Ž^æ/¬\nƒ˜7#z5’u+ê\ràà»å‚Àh­8'vš£Û¯(¤f¬ýÆ²4.˜ïOð*NêÌP¹ÓÆdä†¼×À¬ Æ ê\r¢þ)# Ê’æFAmÆš’å4`ÁjÊ'ÊS^8†Ž'éºEo<ï@íîOækºrJC§’DËjC¤±­ÄÚdôCÀt¬¡B>\0";break;case"lt":$f="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF €0Œ†cA¨Øn8‚©Ui0‚ç#IœÒn–P!ÌD¼@l2›Ž‘³Kg\$)L†=&:\nb+ uÃÍül·F0j´²o:ˆ\r#(€Ý8YÆ›œË/:EŽ§ÝÌ@t4M´æÂHI®Ì'S9¾ÿ°Pì¶›hñ¤å§b&NqÑÊõ|‰J˜ˆPQO’n3‚·­¯}Wâð±ãY¤éË,—#H(—,1XIÛ3&òì7÷tÙ»,AuPˆËdtÜº–iÈæž§ézˆ£8jJ–’\nƒ*P:-B°Â94-Ô»4ãJ\"òŠcZ¯,(ˆ0Â»~6 ò\"Ã(Ô2Â:lð¬ã\\P†ˆã(Þ6Æ\"–æ¹lZæ¨ã*VæŒ£”Z²!°”(Û)KP§Š_\ré¬V¤Çƒt0ôK`(IƒHÔ:ºø  4#²\\ýL³; •-AàÂÉ8Ã0z\r è8aÐ^Žô(\\0ŒƒjÏ\$…ËÎ®4€ð¹ÉHÞ7áV93Ã¤ö/µ£Ü5„Að’6¿r2â:xÂ@AxÔK-;D9²¢˜¢&;Ã*H ŽÖâ’âãŠRË¶†X#­†b•c“À¼¯këxÈ ô2Zn=¬â.’6à½ãª–—±C\n¸µ£ @ô»Ê\0vÝè Î‚^wuà:.Îj6¢€\"(h—ÕpšÔ Ž­@\$Ã.Ž€Pˆ2¤ª9l%ƒ¨ÊXþ#MXÇ3\rèh‚3¸×¾O‰#*¸Š¯ìØæ:Ž@P¤€+óÊ•Êë`Ô•\"Ã¥²9CÀUyEBá¢ÌâÍ&Œ¨æ•¡¹ Ø65mk*9Œu›]„¬¯6m\r+ØäíOÃ¨÷Z‹æ|X¸D½\0Ì —ª¸höÀ4HÏ\0§gg'Â¹‚%½Þ³	.—ñr<È4³lîP†Ôã‚Ç¦B*QÏB’—\n#×\næþ Vó.Ëã\$æŒ|\$dO*9œ±ìŒ&Êã0Ì6Quøè”ÎC:þ*\rè²V7;-*:Œc>9ŒØÒÞ7¬Ô¨XÓíá³¾ãrswQCv2…˜R’!ëšl³Þéx†)ŠB5l-@•3>M}\08>XÃk)o<Õ6à@‡¡Ë\$)hôHò@g?¦UõbRpÒ3)\$LÏ¹°@½Þ!JN„½xA§&Ap rðaQ«ÓîW±³\rDŒ’¦Ä’~Š\0såwPð\rñz†)Ù<1„öŸSúPj;¨u¢Ã’SŠALDe(¥”ÂšB\nq)õB¨Õ+.QVªõb¬ÃBµaÄ¬pè~’KÏUpŽ¡tDQA-`Ó³‚<–Ä#%¦¿ÏÙý\r!¤7–²ÚÊ>†^Ÿ™\0ŠQÚ\n (£ø%Ïò\0\0 >òŒô#Æeù¼–‰ÛÐy@`(+ãÓU‘'%\$¬–’òàÛR¹`\r¨a°è†ê&ÐÅ5“Rk\rM1:5ä,<™ðÛL±¶!…ÅwƒTqƒ‹8d|9#°@b¹B7æ ¸‚\0ÆH•Á§5\$¼ˆ™âH!ù{6È'…0©.w äk\ryqš¥‡ÄL@šÔ<ÓPÜ‹*Ð l¾>£†‰\$ö›@)ÞÏeDÙOØoQ‰w–ZÙ)p[€`©)`	÷U~;NÉÜ®RŒ:Ep±£\"qI:1R\0<½ØVÈ¡h\\ÅQ1Sp°jár_Ìi€Â˜€¶f½WMd\rYÎÚÎ¢“X:A±©â\\„¤ƒHn]nJƒ¸w\0inE\núvŠâý°DhŽä®‘ƒÈnLk¨P’ÂÎa¥ƒó:	Þˆ¹ú%É#ŽoNÅÉOÅDŠl¼\"²d¥ÜÐŠ\$ß’äpá­Ä‘ë;i\"d\rïX9ÌÄƒePK²á…E\"ãÊ ©q,%äý†–ÂGT¹%é-ät¬X	¿”r–H×àÝE‰ÒcN0dà’ô<†®½áXi¡žF•Uk‰j	Š­q¹4ˆ˜øCGaÁõ¤‚àË˜d²k­â^çã,lÙv©¦CÒæY,µø]ÇÐ;ËÅ´^Èmó\\RœéàÈÓÒu[æ÷4ò\\†( %’¥µdnÎ–ó>¼M¶IIÚ›wì1Xg€ñT’ˆq}8•€Ï-!_jÓiƒ³´½Ô±B‹\\Yµ[§¬))0¸‰Ô‡h’ìº9®œâ4t*R\0A\nP „0'N?3ô^N&n&\$.@—¶ÊÙÑA.)L}zòœ½Jëkäì\$ Ó£4IŒ`(*èÒÈÆ]&hBjw04AÙ¸éQ|Ú	v˜úhÂ”Èe§Š9Ô:8j]-ªNÆ¬Óš¼tï¬ì¡’Å»MJÙµ>·¥Üƒ®í‘ª\r–¹\"šl¦hÍŸ² V™Úfmmo²ökÚ„+m²þÒÎñÅ\ráÝ¬“°ËcÄ®DøÎ!‚1¼¾ò(vF_*BK’€+z#ub~'I,’Wrî%–Hã†®æ³M‘ã?W`~}Ä++!2A0ÁÒjø°›…²†\"nìÛ˜„KÏÅ`.[û-òø¯i<»åÚŒÌÉÍ0Ó«-‘\\2IÐo¯7Óø7¤J~}m/G¾’žÓV‹âCZ9x„4¼¸Ke¦…Y†‡™NÐûÌC¦øá¬¹úKiÝAÌÿ¤>×ÜÏù˜\"UÀÿ×.ºúÿaÃ¸|”Tò#Îé¯Ä¤¡¢¡¤¤¿ë)ª\rH››'Õ»éjÌ½Èô2\"Zç3´.>Ü	xð’»æœbÞ’Ø9.žâpo›³ÖÇÓx~—ðY+è–Wú §îS»7êûàt­}¹71åÊÅê‘j­u«¶ŠøÜçZü¼°´~væú»Høm`à~¬íÊÿ7pî7Ï£vûþ¨ÜcyÏTwÙè¼Î]þÓÇûÖñý|Óû#\"^ÇI€øO`—lRÅddj)æÅÏüYŠÈ`I\n,…Þ‘\"<aÂ\"#¬æ#§<{â:%\n™F¾ò6\$_éHr£Ú)i,ï6N`7ë:—PH(æ|ßáBýÏþþ[‚ÎègT¾«&ñ”,Œ„pP@?ŒŽB@Ò[oôñi	œ´Ïæ‘¬-	¬0õçJ—kf¶¦9À0,º5Oä÷‹†çL¸\"ÈÿpÑg(çévåE®ÛMàÈðºu\rÂ#ÄQ	’,\$Ö…¢Â<âM¦™\$ÞnCf:°Š·o˜ûv²ÏD¼QúâÜöÏOÇÐê#ÌÓâ<{%FeãÀoâlXifüQZNÔÌ‘>d±Eo‡ñ&¤CÀñT™.úñ¦\nI=ïzÁ¨I±6÷Ä’öÏq<œmá¼W–F†ÐÎA\rï†æ‘H€Ð0âQbC àÇ‚ÈÈ°×\n®hÇ±Ä´Ð —qÌÇñ­\0qÖ'ÀÇÌŒÌqºÈ„“@˜E\"ÕƒºI¤&ÌåÎ“®e\nÄ dqðeÏÀÂÄžBÍ÷nhÅ ÒÀä/Ì«(,'~QL«ÖYÂþ^ƒ3\\ì…‚6oòÔ’EdÉF r@†\r\$kxCÕ\$ò@Á¬øRìd^ŽfÉ*	Ò_%þ\$È@7êN)Jc(Y„HÄä×/Îû­I*1’ú++&R¬×Â_+\r„e‚\r€Vžëœ\r`@Rêhäæ<VÅdK2&z#¼'£82 Ú®åÞ2§È\n ¨ÀZhb2Ü:I+\röÞëÚ³#Ó±­k+Ä1oT!â0yävNçpF¥Àêo	²ÜÀòg@ò+Œ€8ÅªÆ@œ,bØ/e8¬bZãŒëÁBì3ãÚ€sXZ£’.È,d²‚DÆ%Ä¨Ff\n¶ŒXiJdšã¢	“-£Œo¨FlßcŒF4¯å3G&]àêÆ¢+‚¶#ü4)vé®Âôë<N¤ÃsÊ}B*‰ÎJÇ;©Âäµ@¨5‚à%ã&E²îž ÞJ¢U	¨”iSäDÐ¿	ÃÊf&fZën@0‚ê†>IÎ´FodC(sf¢®„g\"m;‹¦¢“Äæ«€<¤\$`ê Ú@Ÿ@:ƒÜ\"Ðx”`MFØ K.ùL¨&Æà\n†Í<rLd“<ó°Ãä>Ôó§Z±k<¦=Ìe,µÀÂ¤T®Ì˜0£\"+huÃXB`";break;case"nl":$f="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9¬Ô`1ÆƒQ°Üp9 &pQ¼äi3šMÐ`(¢É¤fË”ÐY;ÃM`¢¤þÃ@™ß°¹ªÈ\n,›à¦ƒ	ÚXn7ˆs±¦å©4'S’‡,:*R£	Šå5'œt)<_u¼¢ÌÄã”ÈåFÄœ¡†àQO;zºnwf8°A®0œÆñ—æ¡§xÿ\"Tê_oæ#‘ÔÓ‹õû}âOÃ7›<!”ð¢jðæ*ƒš°­%\n2Jê c’2@Ìb’²OcÜ†JPÊ™ËÐÒa•hkø:#‚HÉ\$Ì#\"\"(iãúÀ¼¬:ô00p@Ž,	š,' NKà2ãj»Œ P˜¤±Z†ÚŒ#šH<É#(Úæ¡®\$*ùC›¶0Êb¸Â1 î¦¸ TXÁI²(’7%ã;ÀÃ£ÃR(ê\rÈä„6€Pxî\rpÌ„SèÝAx^;Ñrb6¯Hh\\»ázgI?ñÐÒ±áh9#ƒ¥\0/¶É8ÖÂHÚ—JI˜èã}„b7¥-R	'˜£#¥iªÿÊœœ¹i\\æ1«*:=¶(ê:Ž@P¬¯áè8I²uÚ£¶²OlvÐ'+Ã­ª4¥r˜J”ŒCÊVÝiÝ‰oÌ‚ÆD²(‡ ÈCrLìBë[\rÉä„»Î³0Ê3#¨ØŽÃØ:È¢\\Ã¨ÝbâìlRÈ‹Iû–º¸˜“š»XÌˆ‚3%ñ2PÃŒ±3•	\ri(@ÂŒé^ŽDøËÚ6É`æ1·µÐ˜\ríhå/Ì+®\\Èé.›{3É•Å¯l²\"œÁ); Ô=/Î¶6»›&GªSJ+±Œ P¤2Ì\n SBÈˆ£Æê9e6Ûo##F×Ms›¶C^/‡Ú,Ê\nì¥ƒxÍ–Q©¨«tM³}“X¤ãÊ	`Ž£Æ’c6›£kÐæëYœðÂ3ÆŠ*ôª%4f\n•…˜RÜN¨èÈ¼¦)Éó–2:Yî:ŒË²v!º@à®Œ·7-Ì#on’7ƒ8ÉËZ²uÂ¯**›‰–¬ÿê3Þ·±s*,\nYÌ²é¼’ãÜœÆqOëzF¨mä'²Ÿ”‚PŠDu²ŽR\nH7)D\0¥àªš\$Êp)õB•¥TåÉ~ªµZ«Êª± A¡Zç8C\n‰fM½¯âjÝ\"V\$ü¢=ô¾IžDD\$˜bþpôH±¢”~G\0P	B\0Ä¢¦HÚ²\rm¤ì‚\0PU]Ùw©á°º‚òïV&ää“ÔèŠN¾8DðèòT,#hš„’(LÑ×\r%p§Rf­M‘SAÁÅŠ3`ÌS	èA‚\n4ã›„Éz¸6&ÍlÂjxS\n€µÂÃfT\nYMŽï\$Å'f!aÞ/„At–Ò¡ÄAœë’ÈRËë@¡•âjãD(¦°—“¬HžFt¹0Òw0TŠ…l¨ªvQfœÁÈâPŒ]ƒ)x(¤1(\0©€a&)b\"á8P T³Ì@Š,úKÔ—†Ô¶”ÂÙK„†ÐtŒLÙÊE71…cò~ÍŽ'é¼'†ÙvEÃkáZGŒò·s˜F\"te”­¥'VÐš_U\$\rGñ¦d—Kn\rö›8RX1‘\n1Ñ›´‘Ùšæ\r¬’g˜E›y.\r- O(Rqe@¥YE§T´¾\"Á“§g|µƒb@´Œí.SsÜð¢†1n\"£˜ÃI\nKíS°4‹!+O/)¯jOâ{k íš“u5Èñ\n%&”2‡u¤µ+¡ƒneŒ<ÖL¬éEjë„È„\"˜s!?/µ7?Ó#9ã¨ga•×z‚²ºn!¤X*[’8qê‚¨D6*§î^Œ[—†=hÛÈPÀUC\rîŒ2-NLòþ\"ÍQ+¡w«pYù\n!„€A#l:r\0€Ð0ækÝ‚œÆh»;ÐƒÉ% ¼_£(G×)2¦D(±KðAA`'çë/*÷Ú[‚Žà'×<{ƒ¦\nDX7øæF¯\rÁØ—ÀC\$pšHdimÄáa‚TK.a—^7ÝÏ^÷DIlÁdï`·Ç€o>JUÐÔ\\sŽðÒe¹XÄæ\$uƒCxw\"Åe ™˜L	‘ÌÊ…#,’Ù›—Mž5	‚á'‚jºNœ„4\0ÅšŽ\"\nË•¯-ÍÌ1“iªºh©§}\0PE„uè×ãXŒ‰‹%{,•,ÚT—AEQ^Ê˜«<ºcˆr°¨Š>é„èGwnk¦š£ wé©èoçMœRkª–îŸf)7Qku¬®xkÖµÖ‡QžJÙÔ€ßae›¢vbU/këlvøº½	ÙôRöD»±lõœpƒZGÝ´‰5^Äô3‚V\nWÖ§­WS*iK©»j çhŸ†ÚkKÚµek˜KxSí·¬É,7mšgVÓVµbÎæ¸:šëp‡¾×›â{w/Ô*ˆ†î¶HÇ¸mÚ_üýoø^ºWSŒæ.7ƒ8î‰¤7ß;clÜö¬¤º¹ŒN‰Ô'fÿÔ<ºtÛ.qm7þ¹ÔV˜±Ô^uíPkÜköÐÂŠÄJ+Ï!A°3ÉJJ—ÌD\rA¸ë=R4B™z´É:=iz÷úQ\n}.\$×È¿#¦½Î¯ù†¶÷˜&kT`ˆíl+t›qPSºwÌŠÓ²¼ënÙÌ©žœñËW…oÏ&à-¾»\$äÙ=Ýä®ÂªwÆp5è½'•áž8\\s=­¼7dg–’ÜÐÛwff³ðÃÊhi:G‹ÝTmä7Äº|ak.wò¹'Íß]\ns1¦yëšÁÌä2Ÿ­ÿ²Æ>¶ÔökâñŸÆÛˆÐ0+å*^†7»t×3àÁ—÷:>ƒËkýü<ñæþ¢XâÂ®ïèÿOìó ¨ë/òPDÏîòÐ\0/û\0eñÐ·Ç«nh·¢ð·ïJÖ°0¸¦ÿ8·PDµ¯¿°<üà¨'DŠö*>+¼8ð4¦°d=ë¾ßOŸä1ïV/ã8bO ¤¾~1¢&hj³e˜!fF^#Fùb¦5ôÂp âëHåbJi-D‰˜ªbZ%âvcT_âú\nlôeÂlÖ‡ªAjž9¢„~0Ü¢-m=MºÈÐJB¦ùÏe˜\r€V\rb<\$&’?£„Øƒ²?„‚—¢ÅãÒÎô4ÂX'fl\$gêž ¨ÀZ^˜~N¢jÁÂ>ôh†#ŒB›Æù,ƒ,(¯:8QPñT%o\$#4(\">\$/\0ÇB Xjvð€šV€ÒËòmâ„¢‚,\$d|»£æ?‚<„\0@Q˜1E5¢eñ8£aF¿\0i>uäf.\$I\$ŒË†	Œ°‡dl” Ç\"ä±\$½æA‹2#£Ñ¸åbä(\rR®±ó.ž!¢]°º6\08FÀënÐi\"½’ë oâò066¢ä*c8~\"FÅ\0àˆ²M_\".Ž²Œ¤FC	'd(ªVM-N­~j†n¢t³ãý&dêgRd\nÃ*mÌ<<\$¾Yä¦¢btbB¥&;`ØJ_eü)‘úZ ·bV/ ˜2Ã ƒx‚¦Kk€,qÚÞ'yR\n(b,^ à+ÅŽÿ\"f¨§f¢@àßå€%Db	\0@š	 t\n`¦";break;case"no":$f="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤@\nFC1 Ôl7AGCy´o9Læ“q„Ø\n\$›Œô¹‘„Å?6B¥%#)’Õ\nÌ³hÌZárºŒ&KÐ(‰6˜nW˜úmj4`éqƒ–e>¹ä¶\rKM7'Ð*\\^ëw6^MÒ’a„Ï>mvò>Œät á4Â	õúç¸ÝOŽ[¶¬ß½à0´È½Gy›`N-1¬B9{Åmi²Õ¼&½@€Âvœl±”ÝçH¥S\$Ñc/ß:4;¾õ¡C ò80r`6° Â²zd4ŒŽúØa”ÍÀœÁŽƒ²ïã*ÊÁ­-Ê 9b˜ò¨¬Ìå9oÄ…-£°Ü\nó:9B°pè»#Ã+rç·«dn(!LŠ.7:Ccž¶AàÂ\r	ðÌ„CBl8aÐ^Žó\\Å«bô´áz—5	\0Üƒ\rãp^.£’æ:KøÄŽÃXD	#hà¼Á’`xŒ!óìAƒ Ð7Œ‰Þª@)Š\"`Ò%/ ØÞŒxÂ\nÊ‚\0<C êåˆ­KV;\r#(îU­R1¶xœ<¸ŒZHŒCÊ@„¶„þ¢c|œþB¤!	k-¹@P‚:¬‹`ÖŸZlpÊ3#¨ØéËpë!SÃ8#\"©hÕ8°˜Â6Ð·\0è7-—P¦»Ã@ì´3£k2 Œ\nÑS,ú¥±Œ\r¶É!6jœ¶C>\$2C#Ì¹]wØ×¯hæ1²L\r2v–27M0à‹HëwZUÈÅC\\H9¥l‚cPÊÈBzFË:Cž{ŸÔqô€ èÙö€(-5‚òµ°áƒ°*[«·ú‡d\rˆ›ér§£è(æCÓ|\0002…©˜Ø	ØòÜ#z0¹Ã0Íª²ÎÞÛhßIÉUâ*9Ž£ÆþŽc5ÄŽIóxXÏ×°Â¶0ª%#…[(P9…)Hª3#bü¹¦)ÛˆÞ„©m/†:yæœ0°hÈÏŸ6`Pª:IÜòCÍˆò„0iI†L\rn•°6'cƒ¥Ûm£sÌ3½,Š‹ƒ†7XC¢R•ª#Z8GKE\"¡ú~¯ÌJR¤­,KC¤¹/LÈ™ƒ.M	©9TÚRÓ‚rN‹Q;§”öÄûVP…-(u{Tj#˜ÒS|iM;¿'f¬Æ\$’TyÏ@:2 èNÉ±\r§;!ƒVÑdR/ˆR’’â\\ÊbØVÌ ˜x€{ŒTðÀD  €-ˆHPŸ”\\\n\n())¤¹;ò–\\ÞÛtî¥Õ½÷´‘É\rÐråÞðIYO%äÄÉ#óbIIú÷=å07£p_]ëØ)olô/ÃíˆˆyoD	\n\0ÜÚ+¸QÊ˜ŸÎz0r3Á20¢†£‹ cIÊZIš'Ø\\ÊA¤#æ‘²(V,FKºi4ÂPH­‹æ079rðPä1:'„øúÈx}™Bq\$ÁUÆäâËñ>z!¥>cAY’#„x›’\"H]%YS0’f>¬˜F\nA¤UÖ!!t“)N\\#–Râ¹~@ŽÑBùh!8P T´@Š-\nY+-%Ç´pß™šHÕ„Évºrê£Î\r	±óªHXl|¨D‘ÒšVEÐ¨FgÔmá:‡TZˆ¢I”´ªwˆÀho‡¤ó@æv	Ö]4åœDV„vÛd§é	¨ö™QÑ= -%Ú4~ª›Y|Pa¥’4âCM~àéEÎ€AâŒSˆ„`¢¸\$îîX\rl®¡àMé2TðTbgxP ¨]¥ú)\r!é!2Ê\n¤¤,\"Iª[é»¬i­!ó òKu‹/¯!X«5J¬–mˆlEÄÆÖ²ÍL-­—L“°Ðši‹zµ9–’7\"K>Kìü0·…BÒàÊ‘¹·†öß Ô€’DmIi4¥±øã]e È°P¤¶ ´m¬!¥Ãzz‘™Ë¡!P „0\$µŸ?§¸ÕÈöŠIX… 2’r2oëâ'…·¬P@Ê¾1A‘b)`Yncë`3B3¤Â[—ÁF-ðše`ˆKæ8F;áL,0ÆÁÆ,¡ÃÌ?ˆañˆ)Œ¥z2¹€iñ1<p8lâPé…Iæ	`»‚{„ñþ'Ã¤%†¨F‰“)Ò“AÝµ””œHÈé YZoe’fb	T¤¤ÖkcAHR0A\\2†)êB§-þ®¹6Ÿÿ7žE£×ô·¶£Òß Þ|A!–…b³IÙ1³m[ò„’RÅ…0¡Ôt8ó@V’—‘n–nKÙ‹ƒÚU\$ŒJl:¹.šV¤iS/ô¡a†[TZ£e§&óDÕÚÚŽ0™ YJ?5-ð2#ü`É¿*¼¡¡ä+²I˜sÙ‡/hl¹Ÿ¯O\"<V'.Ö13êPõž˜Û¤µ Š&œb»1€¤ê-O’	L¨D=©¶‹«f¶ðŠÉR¡áQJa'\0töop×áŽùà»ïp3Y¬ÙÝÛ½Õš_‡¶‡xtŠ¹â„§ˆK>1¬¸vLÂZfð\$½9ŽMþ*W°ïœ@ó@MßËú¬€ò€éÊ°yÅÜ».»>×á	ÖüO„Ï†>®Äæ†¡[f^ÒzKã]Ú:¦á;Te¸™4P¡Ã3OPˆ*óA•1¬÷/	zÉ§†¨d¡ÂÙl°é§ëÍÍ”õÉ{Ö!õ`'o•\"|h­÷^)¥=ô¸ÍÑîA'äªÜ+‚ðÎ­Ý½¿Ý×t.‹KÄ¹MS¾_]ñæÕ—˜Óºêk©JÕ…¨·¥én©êà§KÜ3[Ø\$Î¥Â*I)·E\nñµê a/½«Íñ‚…0Ø¶(HÍG‘H¹#c&\"–.ë”åó\$Í¬|÷äœÏì{2÷É}¿¿÷>B\r®Ý¥YýÛá“E27t…SÚ!%üÑ¿ß·U‹ïîÓ&\rUîVÌ)ÆÚá‚õÏÆ0@×\0/ÂôŽ9\0öNBüŒÑ\0èþ¦À(0\$MåšYí9\0]N2÷\r0ý/ýƒ	kŒ¹â¤û8šÐN¹@Ó¼Y«Ž8ðûPEc\0þÀ¹Ð\\Y¤(ÐfŠ¤„FB\0o>@kÒéi	Šôo´c\0æ3+¼ü\0éb;i¨)F¨9kŒ)ÃØnJvb,þê®‰\nŽùaoÖr†=ðÎê€–Ye~RHì` ‚ÐÞ`§ÐENAå*:ãÞ3Š¿ì6åJÅðÒÅcçNZåé¬d\0\r€V\rcÌ!â=­Œ–(Ø„”fÉî]còí'†É`  ¨Àpn+xO¥ _\"S­8\r)Þ7í@È®s1fE	¬Â.ÜyŒòSånÖÂ–üöË-¦CŠÑÐ˜ïƒŒÎ\rÔƒcH8mÂ5‚,5Ñ3à¦Š‰þ«#˜}1º:D—%DF#þ\\J¾0kRÕC\\ÞjˆÞÈe1i‘…ª†Þ£oçÊ×qØ¨1î¨£¤e àÛqé°7í^6-¾Þ’\0¥‚f2#Ì—\n±.°õ,¨0)l‹þñÒ9`š’Ð1ÅEã¶RHÌÅbì2Å‚'pð¥ÔhR´+f\"Ú¥Kf\nf|!ö}…«ñä` Œ¥PJ¿Ã\$äÊ¤g2†|¥“ eã„Þ0\0¨B€æPfJ\n†-hbBd*\"àÒ";break;case"pl":$f="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I°€0Œ†cA¨Øn8‚ŽX1”b2ž„£i¦<\n!GjÇC\rÀÙ6\"™'C©¨D7™8kÌä@r2ÑŽFFÌï6ÆÕŽ§éÞZÅB’³.Æj4ˆ æ­UöˆiŒ'\nÍÊév7v;=¨ƒSF7&ã®A¥<éØ‰ÞÒvwCù»ÝN¬ A¹g\rÈ(ªs:èD®\\×<˜¡ç#Ð( r7œÏ\\±…xy¤Àô¦ã)žV¹>Óä2½ˆA\n‚¦ª o³|­!êà*2(0ÞšBcÈà>ÌŒÏ\$c'£läOã0¯ð@1C\n2!\r*\0å\nhz’ã(ßƒ’ì	ŠË„\nLLbÖC\n\np\"h9;ÉŒ=£ï8‘%#zñ'(,Sr1\rØØ7Œî0æ4¹nhÂº¹kãX9 £TÚ(#C 3¡Ð:ƒ€æáxïC…ÃÈº¿ƒ\\7ŽC8^ˆRcÂ7McxÜ„Mm\"2Ž“è¾1\rˆðÖÂHÚ8\r‰r :xÂA#˜A \rKT•­ƒ(@)Š2*©ãXÂ˜´HòÜ)È#¨ÖÂ#­jüØK¬…Àƒšg#¼Ûj¡í¤¢M¢t.2È‰Œ‰3:!-Û&NãyÝì¨î	cxÙ¨Èá~GõxÂöBê§HÜ1²3‚`êrü´cjPM§ñábØåà#£pÖÓ­Â\n8þŒ9D =YÌX3ŒƒÒ£\rŠÎ)Ò#žÕ³±\n1ËÒ*ê:0éHêÿbêR0€R\0áÊ<v+§ƒÎ ¡‰Køÿ!p(çcj®‚> ¯–›šÁº5õ€&Cxè;²¸Dbç=·¯&¾dÍ“1Ì»ÕÄ9Ì‰tXïn{ªåÂ\r6)ð©èéw ;û“2Š¬àÃ\"³ë+ü³}UV>9i*uÓé¯Y½—Ù6ï“\n=ËÊÎOïfBºàPÙ ¼h*„„xÌ3\$Oâm¬LóKÙ4O²V–Ž³/°²£AèÂîˆÂ#çºãcû*Z¹¨7•oánX\\úƒ'¬«Œ¾Ïo2{…Ÿ¼ø1v|‹h9>sXúRÁ F(%v¨Æ_›õ~ïaí?ÇÌÿžúh|-žÁpÄúÔ	WÐ-÷@àèM‚qsD82%Ðî@Špk\"\0€!…0¤r¿ƒÇ‡2ROÈfR´:ªWcãÏ0\0¶>ÆˆI?!äÙ(‡0ÔPa{[‡Â	ñ¾Ç¢š“c~‰µç²ªÓA\0hK‘prR¾šù+‹1¬0Ã”ñSÚ}OêA¨UeÔRŒ@Š=H‚õX¥Tº™Sjt¾)õB•¥dÊ Ù•V«X“>V*Ì¡Cðæ† …Vê€ÄŸB ùê Îm6¢K\n«%\$ÔôÖ¶PÑy!Š-´¹bMHw@\$0^Œxo@Nõ¶p1EÚŠ?…ÎdÌ´ïWÄ\nÔ—“f]šc{l|”Ê`çUòk>…É¾J,ÿAP/â\\¹3Fv„ÉÜ–¤2Â°ÓIQ4oêú&6r¦CYðF…[“’vÐ%¢\$HÀ1@àeKø D8å“¢ä‚ž)15óÒ‡ra%›È5da ©¢\\‚\n‹F¨.£ÚÈù¬a‹ªÐw{âis\$óÙûÁPÑV©[>Rí;	–,R\nUF{áÕïª8&hñsZÁºˆ‚€ƒJi#³ˆ5UÚ@ã\rWÊ°‘š–Þ­É€¼ ¥È;‘È€R¥ÂtIL…†÷x\\A\0F\n“n¿®Ôc%d!á´›µÿ9åØc-Îž8-ÖÚ\\Ê\0kt]°à¢‰%Z7êÎ;Ä5h	)ld±„1¤0œ“Ž…^_Ì\0ÝZú¬×:oTÈ:´‘ÒÚ°‡A<82ãuå„ø;†è÷ÓóÂhfgn©¶æ[žP•%'xð)ùf	ñq\r41¾*Œfuæa ¹ŸøJeU«N2Ñ¬©®å¥Fq\rÑØNÄ~oZDHÍr…WHÞªâË/†Œ…)ûDÑeã\rÄilÅuj‚\nƒì¯¤¼1Îâ ™ Óf Q\\£a‚2áh›(dÄ÷)+\0a™tP×*Ò4CÊ-Á¸j4£vŠYhzSE¸ïÜôG\nŒìÿ…Ä	Æ8âlµQb.Ä‹!6f¸¶VÙÂ:»,´ˆ±¡~DL82!Stà\n5Ì¤èÝQsE\0KÁ¢¬x®9‹«Ö<¹ðÅ8E·T³œÃ˜œõôABuícˆ\"óO>f\rÃ„h†áÏxo²OØ9#R™+' ‡ ÅLÔ†V…¹uÐÀ•ŒÂB T!\$\0âr‘_5W&xƒ¬4¦br¼°ÝÛa·¯¸•çÜºT€d^æ<Èíó´ö“ÀæÏd’^pVcqH2¾CnçhfÏÚ¦NíÂøúöúšÜ1?q’ÝÍVð‘O]»dÁnÔ7»öðyÜOzEíh·CU›Qu/¨QMrà[ÊƒbØ Ç7‡()÷lŽ\0M@HPGû×€ð=ôû7ûâ~|‹‹îB…ÆªÝËBD­Àaš0irgÀ;‘’6G_]l\$„hŽYn‚UWÔõåû…¼ãbF•4=È3×ž¢Nõ¼Lˆþjt+zl’	'¦²aZk>-bœ¢eûbÕŒ²9\$Ý¬Á\0 ‘”‚CkÁ£³`ááò\$5,º¯l²GÔðôãFë°×»F¾ÅžIðiÊ®Ü›x}£†rŠâ/h›fˆP}\rï–«ÇTèê„ñ¯¨òÿ„ýåé}‰õE…ÒcÙíÑ°mÔØ68~hñƒuÖñZŠ‚ƒ9!ªüŸ¢ê>™n¶ÖÆÏýƒNl»ù†Ã2fou£i~øÈ~•\ràÝšÏ_á¶\\Šph)ø6Ý/Àº¤õ-÷Œ\"ø…„r‹ÔpÎöÎöÂ€½ü½põfæR…ïúvÐ\0ýP0rrP&ñ‹ä©Ï!o{Ê\\Š‡trp8ñpÂO \n®´W Ú=Ì\nÓdñOyä~ÂJkÎNßŽW`êZ0càêëbêÞMî!ð¯\$‚C	”öoWž(¢á0¨á£,±¬ø²*_PHõ£…šÏ¬ÿïEpZ_ÊÏÉÅP*÷ãr&ÌÜÎä¶#ªÓBˆ|+dþipˆƒäÂN?\"l\0æ·FÀ8BÖ|†>!ÂZ\rÄ‚Z?,ÔB©`â+\$Lâh5†p`@RœVâØ>iDHÑ6ª-ÂOd\"\nÈéË\r°ÌöÅËlÐÕLõ¯èºŒº[‹c	okB§¬¿p°\nË€ä[L¼²Ñœ>°óï^uËøˆñ˜[¤Úk\rJw§×%y\0kæ‰QÆ&?ð<¾€óqËEy/ÖÎÅÂºâ`ñÈ:Q¸qN_C¤äD`”&ž`‚ZcÐ8ŒhŒŽWÅŒ<ÉmLkˆœ@¢E±KzÓ-7	0z÷pÓ\0_#ÃK\$¯P1\$ÐyðWO^Í\0@ÔL9C™&C9M8M±þ¿²fÔ2l¿r'2>E¾êÆvãTCD 2\"haì-Y\$ˆ©)Ñi*0´÷‘íò­*C\0001’ødN€×)òƒ'§c,’Ì©¦QÑÏØð÷Ð.òeR…'Òðk\rFÝ!/ƒ Ðcm\rU0 ó/³\nôR_.¬žÎñõ1Ròv-0m dÔ‘øª>íZD­2Fñâl\n§@tBGs4³NÕÐF:Ï87hÔerlÂÝ%’@;ÈWä†È¥Ä3c;7„Dº­ã…Ú[Á\niðŽ™†Ìäót Ó9d¤æ3 Ë5c3bª0¥Ø»ÀZÐu9€Ó\"c€èÃ¤'ÚJXE‚ØJJÉÒÁsÚÁ\ròápŒ~‰>Ðª‚3òÝPÄ2æ¤H Ø`Ö*ªr(OÄi©P\$âÃ)Ã )+1+­s·DÖ\$Ãð)BØ/‚Èq>\n ¨ÀZm?Í£5@Â±zƒp­E'T¥ôVUt[6ÇçF(2ÑÚ}”XùlDLŽWÇôK¢0Œ*úB:c\$.FÒ5ñð@Ï\"ÐmGAó¹4Ãî5 \$£ûíwAgƒè:–i¨¨¥¦ò‘4üøËâZ#TÚÐëX£X¿H^¾Ó(ðO:OLU°& JüÎcÉiO¨GB¯âZ‘U\nÆµñL˜(Ãhƒu/ÕFsF©Õ*(•.ýÚ„h5RqRÄ\\!‘¦Ë%º´fŒì…|ç¢OgùIíL ¦\roB¤™Bê`éÞL¤’6õ¢t³eüše¬\rG-ÄŠ¢‚‚ß‹6Eú¸K‰T/2f\"€Ê“¸\nhV…¡tø(V¸h/PsÇ<)ÐyFýÃøI‹ÓX5Ô3á6`ƒi[òºeÄ·#HB®Ðr	ç,\r¤^F\$Ö-ÂZ";break;case"pt":$f="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘ZÔž»	&))„ç8&›Ì†™ŽX\n\$›Žpy­ò1~4× \"‘–ï^Î&ó¨€Ða’V#'¬¨Ùž2œÄHÉÔàd0ÂvfŒÎÏ¯œÎ²ÍÁÈÂâK\$ðSy¸éxáË`†\\[\rOZõƒ?£ÅåÞ2wYné6M”[Æ<“‹7ÏESž<¡tµƒ®L@:§pÙ+ˆK\$a–­ŠžÃJ¢d«##R„Ì3IÀ†0Œ‰ Âœ(óe¦pÒ¤6C‚JÚ¹ïZ¤8È±t6 èø\"7.›LºCbð¡.«¤ê®8ÊøŒ¯:V	ŒËŠ1-¢[„2ÀR£q;(:U\"²\$ªÿÅ#LVºK)ôs)Ëò¼d\"¹Ã“& +¤Äå ŒœÌˆ ÐÎŒÁèD4ƒ à9‡Ax^;Ñt06¯8\\ºázQI0æ¸ÁxDßC<‹?ãØža|\$£ƒ_9Áà^0‡ÐXA‰øÈÙ¶¯ð¦(É*ü²×ŒtÃ•5IˆûÎå6/8ê:³pÄ±lk”•+ÐÝ Æ&6B¼9Yvl6'\rã²3³í¢[ŒCÊ„·EÔØBÞ6«Ì8^2#.,€Ü1³µch6[â¡9ãä\"¯Ðê6ÝzH\"šJ2Ø.k#^®´x.«¯¢‚‚l1ÛÎ0âá™Z\rƒ{½‰ã”2¼¸ÐÎ\0Ø Îtƒ\$ÑˆJr§©üŒ¡4ªä ãÈÄ‡¤ÌE*lpÝ|§ƒrWb`Á¼€PÎïÍìU°Ç%²“ý(X–~Íi%­Ž\\ùk­µ¹Ãb(ç¼KûT­+C–L4µÈÚïUòÇˆ£ÇÁ8ÛªV–êL(1MgŠo[ÀÎÜ±– ã4m*Y*\rã0ÌõÃ*p€Tfp‰¶)œ*\rêz<¿ìê1 É\0Í‡æzîÉ˜åÞ#8Â¼…ÛYºHP9…=xÞ5¥\0†)ŠB7¢”¨OZbTå%ë Û‡¥‹‹T·`]t²/¨Obö·bÝûµ&ïÝÛ·MPÀay.(üŸ¶â›[ûó€a4Ã?¢:aƒ˜w.ŠÜ®juBy4Éñ?(¡2ˆê(2;%¤’™@¤¡KœÕ4§ðtT\n‰R*gªÉ@tUÊÁY+El®˜a{Eˆ¢gbOb	8&ÈÉ¿†H•I!Y)Ðç–äEŒ¸hBpÍ´àœJB\0 ˆ¿)f>l‚€H\nLÛCAP\$œ¯!3Èò\"\$°œø‚ÙÃM#%à;>TFIÀQ8g:G¥‚PÊ,kJ†9T‘ò:AÚ\n#“Åpƒ´Hú¹-?Kˆé ‚•\n„…\"AäÒ \$Fj˜ŠvVêÔÞ™Ö\\WÉ6 L†9Bfˆ+1?Òñ¼×ìxS\nˆ	¥Rx¥Ü é¹­:à@Ã u!d¸ß5–-C®gÄ[Ø»&Ž`n&\r7H¤h¥«V?ê¨7¡‰Ø‹³\\W‡ä4šö\$JÁ\0F\n‘Ìž«rŠãâdÁ>.Ð9@ä…9\$@‹lž©èEPlTg<æ€ ž\0U\n …@‹I©@D¡0\"ÒäºŒ&¡Ì^‹ÙpS„ 	`ÃJÐô©Ì\\‚xpcÌ2b°‰i¬bÌ¢fÝE ºn ²f«²ðàK#˜\r!á',›òisoŽFŠÍ\$+BSCîsÖì JbË¨%3]“’9U¥Í%„’µRù¬fPŠgâP‰!™=+T¤\0¤~ª–Í\$jáXƒÀT•‘¹MÒ4T¡ó¦¥a¡}Ž1Ì¨\$‚í6XQF´´ ¬ÂôœÜŠó‘']Û˜3\nEšbH+ÉT¬¶*ÅÃ	–Z³{&ß\$dŽ|ë<Ü™KnŽ¥¡Üc2Ë-ÃC0ŠŒ1Ö‰ŠðZíÀ\nÛÐði1uSÁµ¬’ð\\¯ZÙ8Õ9Œ»0‡FR¢É›”ygKä§ƒ‘¿•õ#|‚„ Š9˜€ÖvdH­75÷’äÉ¬Y‹`I¬’ädÅ‚%«.‚§4¹KB Aa 2âê‚<¸ŽÁÇÂÒŠ¹yž0ˆ!·¦ËÓt	(7®Åo’Í^Nû\"—æ0²àKÉÉF{&0Ì‘\\.9O\",¬Ê#¼\n)ù?.e½˜%9ÿPÓWX3>X¢ëŸ!°üÌÞÉ1\\Êù¤ædÀýsÓaYQ%‘0ã CÆƒ¯:w¹^Nn’8Í\0004±lÈ£‰ŽÇ(Æ”³Ñ¨œ\\öJ•W3ë;ÍÁ8„dñ¥´Èƒµ1GÖ‰jQÐîC=:G4jBªS0…`n\$Ç2€røXÉ¸–ìçêIö‰		*©—Vk•KŒ1lD½µÉ—I)ì/7OsšfÛÖÎìÍ¦Ð¨>3Ç(}¾TuÛu@óxÈ!FZ;Æ¸®\0A[¶±¦î\0ßp\0Q’uÝ/EÑÄ€þ«ÂX¨\"§±ª¢™8ÙÏ©kÂžðÎBdWf&tŠ^kÞ‚¸ˆÎ!QìûÛËÀU!^¤*Ž\nx]qmvWwù\\,'D3„¡\"oî…V'%|+¤ÍJëÌV—\ns¡Ô€>ºà[ë½K0Üþ¸€zÆñ€wý¢[iô‘¸ËY±ÐæøîMóÍÌ½Ãb÷,×ÒÝ	²9» ÎØjp*Ý{~ð¯€hànÀœxï€#âÇò^/²p¨§N¹Ýs%×Éî·ò½}âÁ›<mY›Œlù«ÉC> ¿“Sþ@‰/\$ð@›.t^}ôá¸­ÎL ÀÓá%lû<ísßó8ÅÞ#\nšo·ÄmÜ\r´TÓNW¿CwzÄvŸ-\\?&fÝ<gô\$¢À:pÅTjžœJÀÿ[üì?Ü y^Ê¯øó¨&ÿÂ[\0‚.Oç\0ÌL_ÂDc\$(¥â, å„´N‚2¶%TÌŒÄ	J(°ßŽ2€p8:<ÄÍÞûŽËlEïàì«òm\nc«xÚPPª&OŒF^&ì•Pd;æ±P;.h#Ä¾bcðJ@åœK&VaT_êÿ-Ö®-	°žù;\n€Ë\nÐ òPáP^9C'™G&vÈ%b)b¶ëîË\r1öðþcž_.ÌôuìeïÍ\rðþ%°ZºpÂ%°òÁËœÁn<Áâ\0“¯í\0ãæL\$Æn0Üº`«Ç%±Q8Eâ@0ÀÐ²ÀÞ9åìÊiJ¹ÇƒŒzp€€Cf”úÉÂ;â@“Î0ÿOf&pÏˆW/n6Mè*eåªY‹€TcScúÏ:3oÎðzq¦2Nìsd,<àØ`Æ=f\\bBAMœC:œŒª,ñƒ¦b*j\nJ‡Þ˜|jR\n€Œ p÷f1o\$'¶îªÔgÏŽ“Ò\nqlâŒš#„<RévŠù¢àÇ,½`ò¹…Fäb)#lZ»	Èu€×éŠ´/Gô%‚p\n„xä6atbŠ.@˜Ÿ²\0;²rŸÂ#p0G>6,ü¶ã%Í#F6E”_í&ç¥¹)Â{*š6R”0ÃòG(Ä¶0Íþ5ãdó{¦ƒÌ|óç+)r²MÈµ2¼¼RÀ4ÃPJ’Æ™\0ÞžQ‹°þ·ã–Z„–Âä£2XjÖøßCmÎ\"¨ÆŠæÆÛ1Â|æÏrûä‚oJ¾:Â2I ì3«˜ð.\$e\0¤Òò¼ ‚/\$T1ë8.¦à¹Š¾Ú‚s*/º1*°<Ê´ê¦Û6‹œ^@á#pª°¬SÆµ&a\0Fê´C1{\nf¾äp";break;case"pt-br":$f="V7˜Øj¡ÐÊmÌ§(1èÂ?	EÃ30€æ\n'0Ôfñ\rR 8Îg6´ìe6¦ã±¤ÂrG%ç©¤ìoŠ†i„ÜhŽXjÁ¤Û2LŽSI´pá6šN†šLv>%9§\$\\Ön 7F£†Z)Î\r9†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘‹ªË„&)A„ç9\"™*RðQ\$Üs…šNXHÞÓfƒˆF[ý˜å\"œ–MçQ Ã'°S¯²ÓfÊs‚Ç§!†\r4gà¸½¬ä§‚»føæÎLªo7TÍÇY|«%Š7RA\\yi¸ÏÛäuL¢bû0Õ4à¢\$ ËŠÍ’rFùè(ªsÊ/‚6¿ö:³\0êž„\rëp² Ì¹†Z¶á°­«ªh@5(ló@œˆcÈ•Œ)ÐÒ·ØÌÀ*‰@”7C˜ê¡¯«Ò2]\r¨ZDö7Ãœ Pè„ÀE‹È)°Ø#Œ¯£Þ¾Ã¢c>Å\"âœ–ƒÃ¢š–©,Ûï”1k¶•µÀP„Ç<pÜ\rFb+£³b`Þ¿Ñ8äžÉZ‘°ÐÑŒÁèD4ƒ à9‡Ax^;Ðt4¨Î#\\¾ázWGHæ¼ÁxDáŽC;ß=ãØŸ\ra|\$£ƒkº!à^0‡ÐsqŽŠ\0ÈÜÀP¦(ÉK<¶ÚŒt£ªÞ©(¸š‘=OL:Žƒ¬r#b\r4	jHÙ–rc=VE•‰Ãz¿ 4¯RôÖcòƒ7 As È¸†7ƒ«\$ UßT‘êôËmðŽ6Cè¡ªcôö¿£­h°C¨Ë]Œµë Ê×‘†SÁm½˜ÉbøÊ.(4ã¶Í¦Œh…„bÁBxå\r°,Ü7~¶èS£‡ÉJŒæÎ\n\nñ ÔŠô ã¶¦*6%,U<ñŽc}{>‰ò«[‰€SóOÃ˜ÊY¶{«/À3ë¶º`Ûäï¨‡\$lãžÓˆ»vL[Ã0Ì˜ûf4ˆòÿÔ‰\nÊ£Çø^Ûc†ÆSàPÅ0gó‚n;~²÷bYˆg3mSX—¼cxÌ3\rŒ\0Êã,Òt7¨)ðó2ã¨Æ…\$c6”Ío(X‚Ž]xÂ3õ3kVtE2…˜RœŠƒxÖ•„¦)Ï\"X¡ôªH\\LÉkªŽËàÛ…%ëËb»_;À’··[C!L“zã6öšÇÃ3PÐÃÝðOãüLPgaÀµ\0†å¼O“ê	¦9g’Ã¹|Ve8¤‚öÓ©­O	é>'å\0 ” wPÁ‘Dµ¦Tr•A­I,¦ÐtSŠyP*'©Ó’ªUŠ¸+d­	ëÏ<Ñ7'äqÙ|7èØÌ6<ÏÍ·>´Å·Ã&öŒá\rV™u(FâFÈÃ)(ž@P\"Ñ%ÁÆ@PVI*,ÈTÉ2B‰±(''É9”FÓš)0Ùì@ÂNB‰Ô:21\"ˆQ£ãiÊ•ôÞT‘*ÆL½³ôLé7&…À•]È¨y5hªˆfÉÀ8F“–cøiÈ@A„Ž˜˜+ ÙRV'8;÷ÔxS\n‰ŒÅ3òz¤Ó  èäìºp@ u!ÄÄá³Ò9*å#éŽ2ìäX0nDp	ÈNœñ	'È	Sô58×Y~\rPþ7ÃÆ÷\0F\n‘©©I(C\"·>„Y)Âeìk‰:4ÄùM?’.ÁšA¾‹á<'\0ª A\n–ÑÐˆB`E¤da#&3ž¼WšÝF.D(ñ†(•ëg„ø 2ÐàÇPa—A¥ÌPàiÊ)GK“Ê5z}jc(1n¤<¤€Qêj^r\r‰¼½i(^Ì‡Y€»9Æniœsà?6!QI…e«ŽMµ’êãVÛÃ“IEšH’BýQ˜V|¥“™÷)_Ò@TÕ\0ˆ[öUÀêäs!J!FÑvÉFˆÔV\0Rj­¤qƒ{)h\nÉ0A¤‡µÞ§ä	:1f5&ÚÆ½ÃƒÇ­ä2,ÊØá’P«Ò,@µžK(zH+D4†PïcÌùb¶N1Œ1vj#l«@’Ý‡hËKêš\r§²)†µ“C¨Šø˜: xÛŠÅ;Á•ü“«Â¦ƒ•B2UÁÞëð‚P'ÉÉ”˜\0ÖúÅi½Añê¬Î‘Žr„œè£0ˆÞ\\Mv£È©},À¨C	\0“—Ôè%tk¹@äiË6(©g!ÕÔËJê4k„Ó®•gŽÒY§]ÇCLÒÈÄVCúwxèÒddzdÀ%w»ja²AŠ7¹/äÓL‰ƒPËF¢0ôsÓU˜¨ç,2#àNWV3aS5·œ›ŸÑÏÅùEôå<ã‘3™Ž\"ÁÇ;Œ²þÃÏf+>¹M\ržIF*Fˆ7‡r.àbQÕ&ey}Ðs;“›)¨„ÛœH­–«AÄ0Í R8y’¡|YˆD¯•]`‰I€w¡‰WhíL\náL&ø\0—ž\"Óƒ™H<d,õ¬:&L6LâÙˆÌ\$\$±†,Ëë´%5¹C¯8ÚC-šùyqÀßZÙµÌdä'î<xø7<ãµW')n%Á“ŠÆæ­G”ÌÅTNî¦ú%N•D?¢¶8àF	¯VíÿlÔÿ_¤º·S&ðâÌh\n(áÓYX&ThÍÄÅÉlMY&*uqj]Mue±ãÅñóqu®ò\r|(ä„pÅ®°^bÙDtVó–¡L°(Ñ”ð7‚šXŒkr¯(š´Ö·Áºxr]Sxš8ŒzÆªê]n´o'Øk'Z¬ü.ôuÚå[š6ê¡†ßÅŽßpP'UìýÙîwŽå¼yò9‹¸ž@¥„›Ñù'-¼CE¹1†aÊ/hø|#›|cûñÙ/›%˜Ì}cð†ÂøÍJ+›;ŸuÕ/F÷÷Ûåéûýjð=£Ñß\n'|ßÏI;D¯å “|/ÏA»–kÍ{(*¨Ä9”rÐÚŠ&Væ{»~öZg<z\nŒ{ýHÏþ49ÄsÎnTðBÉZ½š?KeýECÍ¶õ÷Ñeðž\"Ø¯,©a¼ÉGö¸¿kØ¥ï~¬`¬º#:înÚáÀA\0«\$õ.¯P0®ô÷jÄ®£ªZK¤íì(ãŽî¢pÜ@‹màöPð4NPF!/wå†ÿ«&C2:°bÂ£*,!ZbL(ÅìE˜´ƒèTÌ¢&\nŽ6ä¦k‰®ñ°õo,ñ.Øá°	OcN(Õ.Ú”,c¨»jŒ¯ã\$_ðgBÃ‚õÐ‰@¨èG\".Î>r#Fã€äÿMTJBh `ÜýP˜­¯WVPö%Ïu\nîõ\nB·*1ýPÇñd:Ý°Ú\$0úÞ±1\rÐ&â?ÉzèQ&*eëîe´mØáR”±Z\n‘_­ëQ\\¿Â½Kù‘t3`¨ åë®8ÜD®_Q6ï‘ŽK'ÍnÌ6K[È°	\r\n†¡dƒgH'T]JŽ +\0àEžà¯)Jþ\$n¸ç‚\n*èìeG4]OÄãƒ0n`2ˆ4\r 1E’I¥>6\nù \"\"Vb¤4.æÌL¤ÇÈ†…ÍÏ>o\$0=@Øi€\r&N\"ÀÞCF›à?lÖ³c® ZeBrÉü‡¤\0ˆƒzÊ<\n€Œ p%Pöÿƒ\0ìàË­ÞàM¸Ó1Ó'Œœì±Ý'èÚÌ‚23¢<\$DRbN%#0WFÏìC°ZÀòGãå‚/\n¢¦¹'BÀ Ü\rc¬2pˆØ¨{'üm£\$/Þ\n†M‹ªEœ(ÂôMD5'+BžÇŠæ‰˜C®@Ð\"ª´°… ‚7«(‚xw…äiÄ+sâ\rçs«	ô.\0006£põ£—àÞ‚¬[1.2“!PÒC2+§3ˆ¨6>M³B*b¢¹@Èy“L9Ð\"¨\$¼@œ&Ö03&º…„Â\rd§b~èjÎ¶I¼r/®»+˜¦.#„”ÃG+MÞ\"ëdDe³hµ†¸0-è3k /²Û+RG\0å1ñø[ÆQ\$bbYØìs–ª+]42³\"%Ê„SC²C­TG	#ñâC§~/€Â";break;case"ro":$f="S:›Ž†VBlÒ 9šLçS¡ˆƒÁBQpÌÍŽ¢	´@p:\$\"¸Üc‡œŒf˜ÒÈLšL§#©²>e„LÎÓ1p(/˜Ìæ¢i„ðiL†ÓIÌ@-	NdùéÆe9%´	‘È@n™hõ˜|ôX\nFC1 Ôl7AFsy°o9B&ã\rÙ†Ž7FÔ°É82`uøÙÎZ:LFSa–zE2`xHx(’n9ÌÌ¹Äg’IŽf;ÌÌÓ=,›ãfƒî¾oÞNÆœ©ž° :n§N,èh¦ð2YYéNû;Ò¹ÆÎê ˜AÌføìë×2ær'-Kk{3ùºš>²±1¢`÷½“¢ÈL@Î[àQ2ÁBz2§Ë¨Þ„ ¨:Ã/a6¡îÂò2¡Ä´J©'©û²¡&Ëš::ì8Ô0§¯ÀÒš/!%cÂ1¿P ¨4¤l^·ƒK\nà¯-4 AŽ@PˆÅ%ŽË€¤\$´n80KÜ&\nH!6òˆã(Þ6Œ££ZþÄp §0®’t™ÈLBq\r‘ó¼B„&ºŒ P„Â0ÌC3òó:&\rã<&œ	šŠ7¨:%ƒCÈ3¡Ð:ƒ€æáxïM…ÊR™DArð3…ôMJ<CK¸„NS÷.Ò\"øÄ6#pÖÂHÚ82²âã|¨©ÒãŽ7ŒŽ„Ð„˜¢ÿ nk(2Æc: ÆQ#Ü¬¦‘¢:‰¶@Ò—%sÈ8<ƒÕñ¼·3r:ì‹&6& RþÐ5Šêp76LèKdö¨èßáÁ P‡V¬ìŸ…Kw\\&4Ž¸SÈ˜F©`ÂËlS:\"£666+C²ú:ÌVªèˆÈÇ0ÎòPO&‡¤4î¼ ,;¤¼]€SÕ¼\\#8?Ê`èþ #:Ñ¸ºj:æ*´€À™hØ›^P«WZºVx@8åó¡+‘Ÿn}¬ÒÝ×Ór°SÄ]= `Vãx[{PÊ¢âÛ~„oÒ¥Â¥ŒÔƒÅî,(7MàË§f5Ðá 3¢(ñËŽZX†û=®UæqSÌ]=ðãFÿ:´,®VöY\$ŠØ£t3Ómž‰(\"c›\nƒ{qC0s@:Œj¸æ9ŒÊÙ@¾c³#”à´úB2…˜Ržˆb˜¤#YC]I8Ò17pA*ËÊC4œËÂŠªÁ?G|ÍF\r?’V	ê7WeÐ’†ˆâsh¬Å= ä HA×Ç\\í¨„h_É™0+ð:“ÐšJÉ3#ð€9‡rð²KpEg…÷(À@£™\n‘RjUK©•6ÔéK/dñQªPÜ©ÕHiUj´ñ›àè¬UšµVêå]«ÕÖ°Ä(‰t4,…”|_3è+J9(uÖ´ 0nrOL2†&¨N™×%Ê¼F%¢i´!Q¨âbÏ9’7‡^12nº‰!1 á´<{AR{é¥\n£°èQùx!nÀõiÉÃ3khž‘¤†M	±E(äy’UðkQÑMrñ‰ö!RXýJÉ‘æ÷AðÔ^ ÁXŽð‹‡“d‹ƒJÉ_…hÐ†å’qÎIäl…`­hG‚:TÕÆóÖdÈ)ÁÀ0›è<Vj(a@'…0©&\rËP(§‘÷BòÒ’±(¤ •éÌ[m#r|—Ë©¸Œ–4 Fp—´d‚C+Œ…hÐ4“´6Í„¿%fá¼ò•_`gY­ˆ—!SvK0T\nrc>…vÐ\"Ñ-™ää9µBÂQ!ÉD\0£¶­IÜPiÔ&ÀÚ¸—#:§§¼ýælÈL>Ô‹(†c'–œ•#©vP5F˜šr\\@,¼ƒ5„bC¨g:ò™r·¢€Ý%1¡Î³\nÐI·­‡â¢ Dîè\\i£1eí“&ÐÈYS±„ª.5=‘Â7,\nÓ&f„ª 6êa[¼ø@Ž}Á:[\"ã“Y%‹¡€•ƒ(œ³FTé4ª¯™ŠˆA¸kÅA,*@ê)2Âª\$i%@\$R2¤€_É{KÆ)ioËú»áÌ8!ÞÄ)Á§O\0É-3¤¬š[\$\rä)²¢\0Ut&gð)¸S®^ÎÙäF–Ÿ«t›WRÉ7a”;¥@Êº*ê Lè*]RìgÌ8x!ŒÅ½·;Ï1‹:D24š[ÊÃƒz¨ÒÍ7Xs~&QÌ™†æ>µ n&	½ajÂ¼KÈg¨À€y®­q@5}¢x¹”Q¥Hæ-“#²Í‚3ö1IÆ•pÉ€Ïyy¤˜I3¨ê);ŒJù¼ã»&èºlMÉ\0…@¨BHlm”™çm0ëPps—|ž„v.&Ml¬uÂe¶b&²Ax Îæ¦S¯¦²e3D+¬Ä(¶WŠX–£9I‚èòhŠ&%rpèRg¡ÃÆ‰2:,¨èU£Ñm?]ö¦7Çc@¨¾N0œh‹m¦ÉëÎºcM ]Ÿó—¹#Wh¢qm«Sÿ¢\0)Íi¤þüŠÔõ±{£èKü ^Ær’ªvVöŸ+Ó0œ\\\"gªði=dÞ–Râ|WRP»•4l]_·BE»¬üX A%äÑ0Î+]l¢PÞ„ÁùÎ	´Ï’ñn˜Q!äÌž'pZZ÷fˆHb*!£[‡i†î&·´¯@åjS/Ã5`8““â”ì©q~Fú\r3ðÿ>E,lWæ‹Ï›Þ_¨›–“çfSžñƒY^·‰µ)¨/.ˆ½ŒÂ6†‹T²÷?oy¹3þî-F¯’7Jé„°ÐÕË`†“ŠªiyŠà^eu‡çúI=ÀpPËÞjlÅ…ÔÓ®\n¥Xiá‡£pè½,\r°‘ãŸs2føÝ€®î™Çréby=Iäâžù;/ay¹ZèüÏÄùOAãJ×@¨2qÔº¿-b|ã—•Õ_^Œ·¬öž»ÐéG¤ì\0AP¦Tè„QµªÚ76w#£-§³î÷¾«RPñ¸Æ½ÓxÛ\"ž¿óóæ‚5ÖãýM&e©…	%”Ïï{bŸtÇõÛŠhuþŸtõŸÏõaÏîýÏŽôoöa…•Â¼KÈÊjˆ\"ýÇÖÿ®øŠâêLñ`ÊzPŒÌ6Á¨L+\$²%5ÀÜ¡F:ä” .`À-È¦íÿ\0 Â°H¸K\0ÿŒ6ý†¿ÎÈ;l\"ÀªÊÄÌ0©Z3«N]&\$©oò÷ïIkó¦ ýïbþ+	Kô]†5\0/sl°\\Ëï‹öfÌ¢Q&ž NŠåîrØp¾Êe×ibüÍlØŒ¥\"D&Ïz)FpP@èƒÍ\$<ÞÊ‡p@Ëdºã¢®»c¤Á†@ä;&–'å¨gC¦:¤J8màŒFÚfÇ ù…¾öïàò/8È‘0FOo\rYì/{\0KÙ#ÜÉnÌ\\TùqJFG4‚ZeÊgB³‘baÎî&ÃÈ\$Oþ/&bAVì¬¤  ÂAwPŸ‚{‘ŒQ1‘Oo;©á71—î‚ôx:ñ°q´!ñ•Å±³A7ÁvDo±˜?M†²‘hêCnƒ¬\$÷åâGÐ=ÑðäÑàÅ*\rOaˆ ÓÏW!\" °å\nÎ‘n‚ÅMìt'âÅDÐ€L#ðà@ª‘ëàMê	Ò\$RHËbñ Ï}ðï%I!\$Ò]\0Bz	@uKÁ¼C:\n~c< M¾ndû^?E>¸†H\0úîä–2”JC)¯º±†yëbvîYC\"&Åÿ‚ý¦ô„ô!\r6­c¤Vƒl³BD­’‘\roô:íÓéP2Ò ü¯ô'êú\"ò|¼\r€Všææ\rmÈ7\núßî,P¢&ˆxnèC¨Æ\rªÖ+C&æ\0@\n ¨ÀZ,\$åÄ«\rbY ä”Å’}':ÖÍq4¢Lù£æ¤óRÔ§j#Ë¶\$gZZƒ#è4tC)\"€Ìläªº.Ð<#4gN©1HØ°¢]%ïV‚‡jœD€(hÌ8\"Àê\0AÍÂzNFœ/€&©p\0)CÐ?­þY*~âÃŠN® Ó<^«ú^j¢’ŽŒáAß>e¦î/Ê×Î†2³üèÌ ·Fó?”'íbãoÑ>c*)Ãh6Ã&|ì!<+°”'”\\ð¸[D‚f6ùJÒéËHaôD;­6j,aEj‘ôVtÎòëÂb:I¸jíî}dÐ^ïÄH+B¶Î–@ž0]OŠ/‹à¹æ1¢ê¹ëNBc:sðá†à\$,æ0\"úùGD¦ð@€›JÃJahT:1ˆ»±É€Ëñ.fb:ã¤–€bl¶ÃÈ @	\0@š	 t\n`¦";break;case"ru":$f="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤CE#©¢êµyl²Ÿ\n@N'R)û‰\0”	Nd*;AEJ’K¤–©îF°žÇ\$ÐVŠ&…'AAæ0¤@\nFC1 Ôl7c+ü&\"IšIÐ·˜ü>Ä¹Œ¤¥K,q¡Ï´Í.ÄÈu’9¢ê †ì¼LÒ¾¢,&²NsDšM‘‘˜ÞÞe!_Ìé‹Z­ÕG*„r;i¬«9Xƒàpdû‘‘÷'ËŒ6ky«}÷VÍì\nêP¤¢†Ø»N’3\0\$¤,°:)ºfó(nB>ä\$e´\n›«mz”û¸ËËÃ!0<=	óä¦–±¾nZS±LòB„A±zD«Ð;î´(P1 W¥j¡tæ¬EŒ#\$Â˜ìÂŠ’´ƒ1ÚU	,òTúè#ìâ¶‹#Äh‘Ò¾Š²äº”‹YvŽš±j 0Œ2ÏLZjÿ¹n;†™£+»èÎ f„˜‘IÐòA­ŽãPhîÒ‚¿£\$¥ÜÊï2^\$}\"¢9	¡°¬på1Ža I¡®BÏ<»TÑ¡\0;-ö\\Sq¤Ú¼ÈuzŠ¢-JL¼ËÊ¢F&O}&†ª5q?CÏV2¯«)ü56d+RüCˆÉ<ç%¯\\Á‘ïGQ8!\0Ð9£0z\r è8aÐ^Ž÷È\\0ŒƒhÒ7£\\7ŽC8^2Ø8ð:a˜Ò7á!@:8(Ê:]âøÄ6#pÖÆƒ€î\$-äƒ(Gaà^0‡ÉUVÄÂKˆæ „;îäHÔ\reAØv+“˜¢&\r8bê€È²<}e¹ÓZå:S‚l@&.#	ªuòÌ†Åº––ägDÄI L&K< ?FƒvíÈ+©C9W¯A\\Ž˜J25iÒjï{êúýpæÝ¿f;7aD+²š_£\$Òò§íH{r¡Ì¨É Åq*~ íSóœöäMúú¹S–ÊŒ’ë•Ðì¶¬˜©òm?&„t‰·iU1H˜§ÊY¦Ö†‡6—ÌkÓ•á¦–RóYW%’T¨‘Ü=U—0ñÜT˜K“Õ½I“fräí}Ñ M©ª{£MäÉóD)q•7E[•¶ÍÍýÏâWÙ-uBsÛyý`)¡ÀZÝÏ:\$d’˜’–ÕZH)ˆ­¡s¦ÙÛK\\‚Î	“’£„lˆ´kE:\r#TàhÎâ˜k\$iº,\n! °GPÁÏAÂ´ `ùa„CA¦?×&€TûÍWÅ=&=Â2+NK@-PA\"¢dld\0?ƒE¸Â³X´O\\9Z°Ì†¹â2ZIXI°:\$ˆm”±bgˆ€Þ)cF„š9TJ'ÄÀèÊsØÂÌ½–G”:ŸZ¯ñ@3s‡! ÄªÀ–pLc™‚(/øð³UvwË„‡Ð‡ˆ3– Áp	WQÙ0´ç¯	#Ü}DÄÆ(H(Bm[ÁÈ®\$]H„¨,\$\\</29Þ2ƒ›Êd”'ãEÐ¡™2áŸQS“ÄØEÊFv¥+“Eæ>%hý+\$:–\nY«‰l´åÌB2ôª¥)‚Ý\$²<“ÆdÙ:Û™Ü#ïÑ: UT1caL)`[!šqò—+lÄÀ–ÆtL9\$¤2¤nW’ñ+Ž\$Î·‚¸•_ãN“„Æ6”ÃB¹H*xORÕ\rOCî!qANtyQòlWÅÓ4™JÜ÷.9„zÈAÈ’\"áqQå¹\ni	HPæx´@s²r–j¥ÅxáÈµÐº—bî^Éz/eð¾—âþ`	‚0fÂ˜`naÌ@±&(Å˜À\"cLq2DCY)MIó–_²¦Xöa¤fLÒbHfr¸ç™lj8îMWd·	(,ä^÷²PO¥<CHRš#WZñiÏRb5Ãý<O*G\$é…¦B«<l™Î&'fš Ä¦†¥K³ŒV1BU\\Ÿáže\rD?P ‰µÈ—Sªé–éMg¯ùÒŸE0Ý™â…XÎ|î,”®\rHXD º©\"Jg¤|ìÁìâúJ„ø/.”–>ë;i,¦ŠszÅ˜'ÛÄƒ–-\\Ë‘F¯/™(JIœŒ‰R™LRDÖ“–\"ÿvŠ[@\"•Ã°„I5×K!~¯öL°´IORF`%²\nÔ‘cp¨3<šMNkhŒŽôê×¤aA\0P	áL*@xµ+ç\nL1Ú_×‚§Œ­!c=ƒDETÁy‰l ¸7^Žbu]È­âí^BÉUò!äæðµuóÉ²?BÒÄ“‹‚Y•{!7%&îÓz“AØÁBdŒ×gù9/¤òX‚\0Œ‚•:ë–ëÄH–‡'ß°…éÙž3¶Pòºhó]0Ÿ3]fÆˆŽ³ªÑÛØóå‹b(‡Åµ¬§1R®«„©òjõ¸êÅ#kEéçKtUv»&Zõ]”—ÊÃìÄùÎYê}5Þpô \$p\$HÊËP’•¥Ë2¯	‚Ö—[mUÞ\rªB4ð·#7üádEMqôÉ½ÍÚ+| µ2Ï,¶YiØ¹^›7mž™®í#F&½½R~÷ß×'È¡Á÷ØƒáYJ«7®A%xt¬ žý³%öçq¨\"Ä)—W[ÎáÙdÙâ**Õ®Z)òá.@é™r„ÿ¶qß6ëèò\\£:œŽø#<>iÐ€žpó	‘–F­îrã–WÜçŸl«‹¹ûŽÍÆÖõ¢ªÄDÔxpLS>[6ì*–r”­®Z‡\\0¾.Èª…uÇkK\rÒÅÞ´ ò[\n2ÖWÃl¶\rUÕ¼#ŽëMÃfA‚}`_‰„nV\rì¿ `úêJ3Ä–AÕr)§¼m\rm2\$¡´·­(Ûò¯N”Ò¬žìà‡O½æ>GÎa×}EÉ„Ê²ð—¥{.®û7äÙ©º§[3ÇböÀª:\\~X›2i¡pÄš‘‘KŠnwÍïèšö¯¿)àÑ\$æ‡Š‚äKŠ¹Io¡ÃVžÕº+–]5²@PA\nP „0€ìB‘Ï0ö·EvÔÅ¼ÔBl\$á.¥¶É#XÏÄ0 Ê\"Føãp+T¤b@p¬QÁq:WX%°<fîÞ\$À©z¦Nöò„N0	5\0&ò™ÇZÂãŽÃ0V(°Z+ð^ÃNBDÂÂŒ+.q+æÆæ»`ƒ\$NDä­°VE¸ÄzÌ(~@hÊ¬Á+ö\$pˆE°œã0xŒÊÂ#¨”¢ãÜ”0±HZPÜpÎ/j*;0è\$ìpÐ¤<0ß§f“Âƒï§wŽØ}œ@°CÁ¡\"\\&%vÐBªÐ‡Ü\\dxÞ0N\$'&\"YOÄMQuÑHÓ‹\rhFè4—\"Þ/M-Mbä=CÀ!¤Œ¥QdQNkñÒ£±~[MTéäÕì„)°\"q¢îÆ'FJnxpê4I.Jtå3‚ÖïLéã„8‹jþË20m±0²0bR›\nãbëEcM`˜MX}Ñï\"N‘‚ý+RÏñ\\.®²pî¶ZGÆ/î\0íqìO¢Z€.Z=rZPbƒR&ñRñ’0*’ ÕÊ.ì…y\$Í 7*Šn¹\"„ÿ%€PN½Ça\rdM‡jP‡n|®œ5«ÝÄ^I’~Z2‚òRPØrT0CÑ\$¬°†ItË­¸O2m!¯\"gP©M!Gºò®;‹Ï*z> @4}¢@&ç%'pq¥ ÞÍúâ‰a#'Þë!-ô‹&›K.ÁÅ¥Ç“°¬|‘ý/räùä» ’Fã¨Ÿ\$ÑpâÂÒú¿RíPe/E^6Žë.íû²NýJ@ƒÖ¦êS3ˆS43P†31#“4i”°h.2EB¨%ˆ=pû¦Â“Â°fîo\n>Eó.®P‡é6“\0§o0ÓÃxÌÁa8	 a#)­#pªJ³“6³˜,Sq2¶ãCƒ:S©Ž.QRþ-“³+qÓoXD^Ô\rDóÖMqèP>„õ¤ËÏc>óZ>P]?‘?ï`Ô)‰@RI.bë,«nBbØBÃLÑ¤zAÄ¨“‚ð=ï´TE2©^¦G¤˜Ê8ËDÄ0DuLŸ\rïœq„Ý/ÒÚ´4òá¦Ož5Â?q*ˆ¨˜ZT\$B°Š0i<NGê…£¥@ÑõÔAOdåNÏ­ k0ÏŠm²,xr ôsŽé¯N=tþGlÁ>ðÒl}>èû;R¹O\nðLÍ‹1ý/àÔL†Û!ÏNM*/3G;àáä¯½L³@Úœg%Dt³±\"2ót‘ïÕN58Ó3RÑQLßQ“kO£‘Oõ!KO(÷sSDQP,õuJ³O%:®!|r,Ò(A\rVBBBÆÂýï€ì‹Ø¹0 êî¤@H+K”Çs£7Ò;ÕN#X¯¹<µ‘\$3—@t×Y³¡ZMß1ÕA\$õD¶Ñšübx.Zw/'\\ZéäûèW4Oã\\/ÈxC´|ÕÝPR‡]O½7Æä ü1HÅJˆºŽRXOàAWWe84Œô\$ªµASñN“A25ë<Mb[ÅÃ`ÍSa)åakª½O‚:V (ö4i•x²f~—ìûa£%!Zû25¾ô¦£cH‹c–P{ö=ÖbQ6@AfÐòÕ”%gV>X–ye¶r`PU—«Sòæ0484öPBëff×¬Þr#1öCÏftâôöÌÁ1–Ÿ@¶Æ)¯kvÑRË=?vÖ÷¶Ì-6ÑA¨?k3Üƒoyl¢‹gè¢ö|!cšy+ŸQ5YQeoëe/CA–%mWg·hÌû@Vá@–årk¥qÖA•¹AÏ­?±×9ÕbÖµ[\r“qsÂ²”¹·…M9MÄ0Y\n0â“Sv±ó»0	­vÐ|L0­ÐØãc()p”Wh\$wWÂaxJ1wUÕxä<.§%y†Ö{ÕR9ªTÒ‰Ù7nì¨&ä«Og<§âŸñev†WÆóo‡N,¯ev°Í/}„y*—#V÷w‰Ó‡w«±s2¸²Óƒ+!€W™f5\nóª;Ò;±\"q†º#€†Œ Øa )îSæšeÈB+¬dÒr&Rl¶Á¯†lq*þ!«\r€†º»‚3ÑBMvQHå/íÏÔ2Ò\$öMàª\n‰üôÑÊJ.ùp9e°=y(1ˆÇ¹t­‰Ñ.i¢f™ÆÑŠzC«§z&ù¦›‰bKï(k¶“ÑÊkÔn¹§÷JÒ]*¶÷KŠ	a·¡\r\0l6{´ŒTÖµ†1æÂW›„ëàÎjiÐTPgj0¬„—6ª5h6MXýddtjrU\"ç»æÈ4¥3qá8&O““ñ6kd„Í¬¢æTÌÓ2,‰1D¬drè›#Ô®ß’2²O8;GU+²)&h©—j²Sî±m@Ž–ØÞ¢‚‚¾Qó{Cb³ù”ëy…0ÃŒ™‘+Ù€ë‹^3ŒÞ™1=‡Ù£™2–ætûu×PÎ®ãå:)ŠIDh¥!£”ÜDýiØÜëe´wŒš+ôW1MÄéLlÉÒÀ¤¨“1ÁdDJrzË`ïÒ¦óy*œerD6“Â™ó›ËÐïx¹e%Lõ”ùÄôÕœXÄyK4¹\r¨GÅ·­Ìin@Ü·dEç¤ûÙL%é=„¦ƒ¹V‹mÆRç²ÛÅLrN§£m\$:vKhv–vê‚ggÎ¼‰Ee-æÌ5Zw¡„ëpÙ<:¢j";break;case"sk":$f="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹H€0Œ†cA¨Øn8‚Ž)èÉDÍ&sLêb\nb¯M&}0èa1gæ³Ì¤«k02pQZ@Å_bÔ·‹Õò0 _0’’É¾’hÄÓ\rÒY§83™Nb¤„êpŽ/ÆƒN®þbœa±ùaWw’M\ræ¹+o;I”³ÁCv˜ÍìMÔÎ\nßò±ÛDb#Ì&Æ*…†­¦0•ì<šñ§“—P9P¼æÙçÐÊ96JPÊ·©#Ð@ Ã4Œ£Zš9ª*2¨«¶ªÒ¸\nC*Nöc+°È<îKdŸŽcY†TµƒÈà<F!óŽc`Â‰‚´þ\"Î0Â†ˆKª`9.œÆã(Þ6Œ££2ô I˜Û\ncÊ³¨sþžŽ@P ÏDlDŸÀPÕ\$ ÂÛ­±›ð4b`9¸œf*NLÝ4³lÞœÁ€Px‹\$ƒ(Ì„C@è:˜t…ã½/ƒjêÿ…È˜Î§4ÀðÙ\rÓ€Þ7áXŽµ#¥/·Ü5„Að’6Ž	Ä7à^0‡ÐxA\$ƒB6Ö5Ãš˜)Š\"`ÒÙ%\"´U9A\0ÉFbÐÞú½ŽË%£Xèˆ)Mfà#CB~¾[ÓâˆÛ°J\0ê	ÎBv7c\\fŒ\0Ä‚€Mé{_ÍõzÞãSZ;!Ã¡ˆ](Æ\n‘P%ÈéÍ¶PË\"êÖ„L9µ˜éPCê6‰ãÆ:ÃÖPáf1‚0ëUŒsè‚3ãƒ;¢½¾w|¾9@PÖ2A£z~ž¾V”•Œ=(JÐà¸XÔ–>\"`ì…äÖ*ø yŒg—\rƒeFÜ)ƒ˜ÇU!Ö(@µ¼÷ô¸Ž‰²<ÆdnÓxÉ½W3–Ø°m×-Vú‰³\r¥×en+—épÈwT½vtÏ¾”#ÔX'í…ìŒ\rÙÅ^@\0PŠ<tÿ¹8CuïƒÓÇp¼„f;YeläÆd’Ë:¤£ª`Þ3Ãe&”‰ã\$ôPÎ`¨7¤/XÜ<„xæ:Œpèæ9ŒÙ@.”èXÖ^€Â3Œ+¨Aó_tÝ‹Œ¡@æ¥\"r3‰Ñ{`\riÈ@!ŠbŒÅ;DÅc”ÀÌDÃk#Gà€=3’ñ2ny	ð¦°Êƒ*m\$!Ùµ—#4J‰ªSÁ¸þ–³ÊxÃßO0H¬¶Rh~C™û80’’WH pGaÌ;‘5êUÃ€ic’\0'ð@ T…Pê%E¨Õ¤T˜rR¡ÉK©–²Na¡TqQ\$ªuRªÕkŸVLI[+…t¯òõc­ü¾vJÂC“ÎbP…ë†•>ÚØâ³'H¢§,ƒÉD&¤Üœ¢rR^KÙ}3òžv8çPðNAˆ	g4Ó_ÁÛ2Å1 ÈèBªbôéH°õ#El<à€çà»šg“­ÊbSBá›Ç„~N4…~ç¬–’òbóàìÁç\"B?iJ¼<\0G@^­x+!‘N%!\$…‡“<³ƒJõ4l•aèÔm\r[, ¬‚\0Ì~OàA¨ÿšÀÐþƒ XSØÚ¶·ÆIIø<ïò“ÄÀ‰‘@P	áL*,å¡4•™å€´8P—ó‚N”š“Z#‘¹ÆRP@f.aÔâˆÐÊ§[H…èM îÁg„†¼Ã‚½‹˜ X2wò˜bˆ°F\n@àÎgÎ¬›%XóºxÄ®¥\0PC¡=I0ÖOÈ„Á-DLäc“\$\0PO	À€*…\0ˆB E¬5Œ\"P˜kJì-§ †0fÙë“•®è’«ÂJ©@FaY¡é\0–ˆñ<ˆòcÐ~\rS/\"_1ËdIÐº(›®¸µcòneÍ‘gZšIHDrn¹Ê½\$ð+%°P¹É|í{µmøù¸–çn“C•]kJ†øZÃ{Ö9^=\"v\nbPÃó\r-œ:G`ÜcOýU\"Å8+¤:‚€H¨‡æSØé\$ÊuˆM²aƒwoHOP9¥%³òæÉ…_O¡PÀ.“CƒHzCÁ\r#‡Ø•‰Àc6A’°†KfLí¡–/ÕÇzá²g?åíá`%êbƒ(wKA½.Kø`L3cM\0<\"Æó„NYuÅ˜¸2ÕTPa?\\¸ÂõX£–ê˜z•u\\_U‘Ãðg5/‡¬Ö’úZ?ñÉZ?kbq”ed×€ µˆ¹(\rn\"ÀªG'ÕÕF‹BÞº‰—2*^ÃK­…@¨BH¯\rš£‚Ç¸oœ†½Ò 2RÃAô;²T¿à\"½Ay^_ffÎµþf\$I„ÒúP °J+[t¾ƒ\nù±AÇA¦C«ßµð1YÞÕ÷œªNÀ'Oê-¨åî¦ƒÙ`¤ÚðÓ«	Ì…E¼¶¤ã­f =šŠë˜;§5é7\$.`ÌàÐSW®°¸¡´äHs+\"›fÊrÄˆþ …Tƒ	L¼Ô§ÅOÊ'î¾ìæÖ{«_»MÍ&7†‚>Ïin]Ûµ¶ÆŒ=›tùîcÔjYùä4€MÎÙP’Ýá¶Ðè[Y'J÷\"òL¥ÁÒlN#Ù)ZU9:ŸõÖTŠ:º&`€;Áy˜%#Ä;”ãÄOJ;/æ*Aêc¢`ÂLZ•T¢•ïÏÏ¢,	Ta‹4–²Ž2iF’óÃ–*I(8xÇònwCÉë eÚ€í&­×‘•î+G\0ÊÉ×²ò)ËÛ¯“Ãw!E	)Ä÷û´kd’°‡xïW÷÷NÓµ-·yažÁxnÁo¼yiqÕXD\rú%\rùjRFšªS#LãEH4\nräötx­\$2†ÄX«œ#~°6.°‘G´,Åe^×}â6zEOžs~O]˜Hc•’À¯ Sä®]ª¸\$Çe|m|ÒrŸR×Âö:N{q0µ6íÊ÷Óûä;ÚµŸsºüÞð¿æïöÓÄ•ãõ]§èüNÁ*~oÜÿ`´1.¾>ãòC¥žBJú¢ãéD-T—¯þÝí²Ø«ŒÖcðÌp/ºFBíë`ÿí‡mb¸Íð[ý°\r¦Õ®\0ØJÛ€ìÐì‚Èj°CŒðÏ¬ð°~ÐlªpÈ°t°y0‚ÈAZ@ðsmVÿ&ä˜NDÆ Þ\rEÜE,–â\nêê`ààC¥v¨üWeš¾âfDÇî6%Ü~àèEG¾&eëA}\re%ªî¸Í~©V6PBêü'îÆB®¦â6mÏÂEž¢¢,¢ö(+)B\$ð“lŒÇÀ]ÁBlnøÇkê±%š+0¼aLFÄ¦`”nËxþoF\\qJÝoô¥’+|\\I°Í„(7~ÿlÎ<qz9p6ÿïiõÎë\n&ò.¨:¢ˆªqˆ(c&tç9q©fð.¢Lã†aå>A†	bLÅžó¬F’¤˜\"u	b:IBcðPÌþLÏêÌPSðï°2üÑœ•OÅã€{&`\r+†pOQ\0±ì[±°·éÜeæ»!ŒÛ(ñ¸]o`sBJ`iFE àJÀÖ'¤±/èò ¦A²PkÏñÐ¢ýò`'2eò\0ì¯N2o%'&’4XRO'0a árY±Pa‡	ò„•QhÄrz\\æ\"gRaÄè.l—)O®¶Ò§+l \"W	‘+‰ë*fäR|ÐK2°\\ì’ÉdZ„wqª>ìàD,æÒ½P¤Ä`êK¤¾'ðò¦KsÎ3/ÒÕ&²›\0#@<±’\"MI˜ôîrDÏÊ1Ôz1Ú¤Ì¬_kzÍø¶²SñÜÂ³I\"\0æØíÔ5ÓB˜IK5¬Æn	b@†ƒ_d:\r‚‚J «4&”†ãd\"‚²LðÄ!Äd'ªë9B4ŽÌ2\$ðÂB9b'76€ÐÐä”\r€V\rg„\rg:@.VšZ8Â‚{å´\"l*:D:@2ª%¼§ÐÂ¨0øŠÈ\n€Œ qÄ#c¬Ý)z%ÇKÛMd-è¨ô«óY·6\rû@Ê“kBDœàŽöub**©<#¢>ƒgjvã&	´ÄX\nÉN¢FEƒ^ê±:“…f)#d`BBô/rƒ³¢q\nÙtcSè\nqô^J¶F\$~À	€Þ/ƒ­Itš^­¸ÐøS\$i©I\r*ñlPñ°6v‡2-Ñ÷C´¼î¨,zgÖboK£ðÍ~óFV•1Mnøú±Lc\0'V4œƒô\rààº¥\$ÃÔè0gÄƒ±IE`ó…›*,ò3ƒ¥)ÒJ\nÊª(tÕ/ÏˆÅ‡°©0RCT5¤0Ó4V,€¤ªsí&g ‚&o]Uã\ndIM¤9#sd1†T¶”ÅFtÐ²fö\$%&¥Nµ«/Xk42f!N+îg²_(²RMH\$ºà­9è½¤t! 	\0t	 š@¦\n`";break;case"sl":$f="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†^ #!˜Ðj6Ž ¨!„ôn7‚£F“9¦<l‹IŽ†”Ù/*ÁL†QZ¨v¾¤Çc”øÒc—–MçQ Ã3Ž›àg#N\0Øe3™Nb	P€êp”@s†ƒNnæbËËÊfƒ”.ù«ÖÃèé†Pl5MBÖz67Q ¢ž>Ügâk5Û3tâÿr¡ÏD“Ñ‹(ÅPß	FSÔìU8F®—ÂÊzi6‹3ÞiŠI2Ôósy’Oõ”ÏÂ\nE.š¡¾Ššæ›%ìºï½‹¢ì\rkÒ8/†)@€²Ã¦ƒª8Ú!#\n*!-Ãä†Bj\n‘D‚8Ê7£(è9!1 ¦î#Ãk^Ò .—È`×<CP§œZECš@K4,ò)³\0Š P¨ÖHó'(±ð°x›µƒ(Ì„C@è:˜t…ã¼Ü6Ñ² 9ÈÐÎ¾3Àð€Ã˜Ò7ÁxDÎDLÈé2íB5„Að’6Ž¼Z7à^0‡Ïã7ŽƒCêÎ2C¨æ\nbˆ˜÷¥î¢êÊ oÀè–B€Þ5Œ)L=íhÈ1-\"š2Òi3Â3²ã#‰_Ø4\"ë%‰Ã{÷_Œ”âûIˆè„¶¥¬0ÛÐÔ’Û¡«oÙÎ\"T6(Ç+AàP—>+˜äâ(ÈÈ2Ë,“Â™¡#(ì…¨Ð¼Ä0Ž£bƒ¬«U¬ #£pÖ1Ê2¨´2C­m\n:nÂ¾\rj0äž'N\"4’Ë#l˜÷èSÆËœ.7•´´–*˜€â`Ùe2è Æ…»õ£{R‰‹PÈƒC›•YŠMjUî¢ÙiÖÒ*§×ýY¬£.M€›ê’«Êãr¨ª;\rð;©¶@úàé¯.K¢ì´ê³W±CK«†¯˜5æÅ1‘¢3ÉÒ —‰ã\$¤“Tr°ÞÉ\r¨XòÏO£¨Ç´Žc˜Í‚„	Û>½Q.0¾m£il„ê€…˜SßË´¤øÔ	kš!ŠbŒ“°Ü=á\0Ì\r¸,D;†\$ÖŽ‰|¡)&õÒì#ÍUð›¨ÕjX6*ÞÍ?#/SÂ´ËD©-ñè\n^&ÃÈäÃÃ˜î>Ã(ñ/^¾cH*cL©4¦´Ú›Ó‰na©Ô9'tòþ“â~P\n	B@Ô\\¢SQª=H¬â¥”Âšu¨¹Oc:åJ!\$ l5Ê•(ôª	7„ÝQ½Ò2kW\$\$È°7†vZ#O‰VI„Þ†E\\~ˆ±Rw\n|ð´°äICA÷4'ê¼\0()\0¤Ž’d´Û\rÀov„å)&Ú	q0&DÐF½Ó°…I >ñ€£È¢xMÁ{ªýQ’#ãŸç|ªµ~¥¾QÃš©\"aäÅ’pÒ}‹A?TaºC6AC‹\n'ÏóÀ‚´`SóS®à1’FhÍ+ô3/H‚“’v¾¢:ÎŠ¡@'…0¨ðÔ-\rGak(Þ¿£Œ°ŠrÈ¬%%éµ9èR*ŸÐáC9¦|`@Ù` i8#\0MÂ0T‹,ûƒØOáPf“©P94è•Ñ&\rfà:±ðuCI±`\$V‡3ðjØu,Š°ëV@”y'ÌÐ843¦‹_¡­S†µ™³RFG‘)!G¤ô’³2PnÈòJ¡à™„žFÃk6PùyžVÇJ‰4F.4ŸíMÁKMä—¤ÐõBŒz1áÊ?8³¦ßè!fkmu5:”q¢õ2a½Î.U|FÏ‹ÄÊÀ€0ªˆ1:hd•@ÖwI²šP‰_¤XÉ½BŠÑ`¤+(”£ÉÍ'Òµ×PžÉš¶Ah÷O¤ª±—8ù*„4XzUFf\\1Œª\"ñ’C@ÐØßy)pŸŸc\0Cº±‡«¾X…–…‚L”:&½«’bÜ½Ã[‘mäh8â–=XDü´2nç™¹!7G|_.%\"„æ†Ä|¬aa^.„·#ó©	AD`¥Í™gJmU5™ÃàÉ{”S/Éº´‚°A\nP „0\$Ë€3S\\‚™\$gç=#@¡„8R’n³Ã{~&jì¾:À^Va„0Í\rpá¢JÅ0é…Ãá—á»U„©Õ}ouëW°d±@d|¨9µxê÷\n=¦ÄF«\0•eŒqT§Å˜×\nÕŒqÓ¸QÕÈ3ùŽ°ØiØû‡¬'cÑÅ¸¼ÙåjG’q®K>5'“ŒvÚrž?ËÊîe“=‘2æH8Ó5(¢÷pÎg@¤˜:´ie\\²b;ùÃ#,„@‰ànC¯ƒ2žZã×Ð¤S'J}¢É3¬ÑÙ¬÷e=#‘_Tþ}z\\…45•r¹.:.hpA©ù’ÔùTæ²øÌ!QæäT'klP	Q,-:õð:K°\nk(¥D¨˜|¿KA/7´×#Òv…ÆÉ)ðÒ‡M›¥â>1•ÖÌTZbÉæƒ.iL©\\|šµ\$dQz™\"=»ØµîYÈ†Õ1ó‚){'ä|¸Rå¢‹¶^] ¡Ì…ÊÊF§8IáŸÑ€ÁÃ¡Há!Ø¿×’_k‹¶8†f¢Ä.A£îaƒÔ•ì¥kÈ•sDXÝTÑN]’ªÃ¬©@;SóDa)hßêÈÖ‡¥îN•mªè½’:@OF.Ý5*…bõÐ¨í±·	øŠhlêC8ú9m½.uÒâÍ2fÁ„“º’bNá5’èƒO{”{ §¢?¯þ[O¹…L\\Ó¸×.S×â{r½Î¡òSUgü^Cæ^»¶/#B¼D0žd F—À—Xˆ_	=Ìÿ‰¥Òó¦bKYã(aü{çñáÍ{¾Ž~úb‡êy^LÒ„ß<å§ì&—¢Ž>Ô7úp¤ã®d÷¸ßúd@½§¥ø¾ß%{œíÂ~Y‡ãæëWÏBã;¯ž#ïÞÊ¾Gâ\nŸräÏ_ÍäšôuÖ­±ÛcšÅ\rÃXìË©Öž\$ŒEËl0ÅZ˜gÒAÀàx\0ž@Bª\$¯ú‡n:#jš+~ŽÍ(¡†(Š#h*B¨&Ð†æX¼\$Äa£âF)Œ¾O¶ü‹”«{bnæçÀ¸.Vº‹¥Ð]KTXŠFüî¾†p>ÇºîŠˆîÀÝ…Šá.bþ/Ä¾ŠšU°z½£ê(oÁ/Ä¸‹Ý\nõB–‡°žÙOàæoÄªðb>ðªGð”Uˆk%ú%…ÜPlãŠRlÊ‚¥/Ê\rc\ræž<Š8úp¸ P€¨¨`½P¬ó°½/m¬Þòoå’sæ\$b€ÔjË„˜Ñ\$Ñbd¢©o'‘/£ZÑcd\$ àª\0Ö&`Ühp¢ñÑMÓÏð„gããð®úÎ[\0Úk‡Ñ8¾¥G‘R- ¨ìP~ñ°„ì áëj3…Û°¹…lºÂvá#ê¦ª½q¨\$q­Ð>1ªëªGÑ™	¹F¤ÉQÊ;Ñ¥‘ªºáˆ„=	ËpHÛÇ»\$_bðA\$…ñný1¸<ï Lµ/Ä³x/cb-%e¦fŒøq®zX<P:ùí<Ç8÷ò4!D´*’:ªƒ4õòB9mDÓR<3L¤%ÞÑRD\r,îÇ*¦ª ì%ï>P	ò&#‰Ì7e³\r²e'Çà'Æ÷d2\" ¦| *’—‘ÄwX2nEÌ§NX†Œ%’®.r²ëç ÖCìZ9%ò´É’k#²¾YÂ^d^\r€Vóm”‹î®£ˆª£~«Â^Éºu®b\\B6€ª\n€Œ pj>£Ž/Øä¯°õ¬xÓÓLš÷“\$b“(£LÆë¬ÊÃÃÕF×3)*³@1,#4XzêYdª	³ÀòJÀ| kÙ/JF¾r\0x³xgn ˜îéÍ¸#bÝ8C8›Òî0ÃU Ý\r*H&Æ^\rãl8óªšÈn CBBÆÒgîŠ¼kÐäìÉ7D°—Š<“<Y\nRåˆÓ=MD'‡ø»N>±,Éð…=âè2ã61Ã .¨–JFËK>³`9˜µ†:%û\0có8e”ä ÑêÊ\nÎ¦'‰6‰£ò\\´,'T0d·\$ž–%ž|c;L\nÀÂ`êC@	ô=ý'«€\"ßFfR¥ÉÝBÊ0<áC'Ê\\…d?f0¨|\\JŸHsÛ#3æ¸gÆÔþ¤HË´#„:jèÂb";break;case"sr":$f="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAèBÀPÀb2£a¸às\$_ÅàTù²úI0Œ.\"uÌZîH‘™-á0ÕƒAcYXZç5åV\$Q´4«YŒiq—ÌÂc9m:¡MçQ Âv2ˆ\rÆñÀäi;M†S9”æ :q§!„éÁ:\r<ó¡„ÅËµÉ«èx­b¾˜’xš>Dšq„M«÷|];Ù´RT‰RÔ)·ãHÜ3½)CØ÷‚öµmjˆ\$í¢¥?ÆƒFÏ1EÁ¢D4æ„8±ª‘t’%L‚nú5æ8¦¤ì‘x‚&‘45-èJÌh%¬éz‚)Å¢«!I‹:Û¬ˆÐµ *úð±H¨\"ŽÖh\"|˜>‰‚r\\-ed]H\$H·2)ã\\õ¬ºÉJjÄRH±R²I\$¡,_ª,RÆÕ¶”€Œ#LtU;²’i’PÊòX\$ŠTf·À´|˜^@­b1'¢òüe1+K!|ø5HuD)²âØ3ª‚¯4Ç2Š’ôRs!ÐfDÅ<ï”¥Y>´x0·£Ê3¡Ð:ƒ€æáxïg…ÃÈ6ÀC(ä\rãÎŒ£u¸<:ãpæ4öðDè6ÐÊ:X¢û¾0ÃXD	#hàå¶èèã|-òìã# én¦(‰ƒK®Ñ1Œë?KN•bÚšBµ‹#\"Ð0|º‹¼²å‹«Q@%¯ŒÒYÂ1ÆNÙÇó8Ï'ù1 ¢6Ê\\»^Ôá.\rš<è`Ÿ Œþ‚ÎhyþŒœ,54“©Ê²I-M{VŒÈTÉ H'ixZžÑHÂ¾Dk/@‰aŒ#¨Ø:°Â6£*IâJC\"’*5.ÉºÍ³²ãÚÄªŠûûXNÓŽÄÉÑ™£\$  ™b[ŒÌ\nCöó±ë«;V“	Ü)BW	´5¾ñ¤£ËAOYÔ™.>œi ™š;ì5YÀ²æa1ìIJkÔ)òÖ!«›6Åâp‹ÿ†FcKf<jÂ¬F@Rxñ¼­ºq—¦YNŠÅ–è¬¥U¹NhyF=µY±IÊ´°×sÃi‘y›’— 1‹¦-%1SŠRxÏ‘èöæc ·(f,Ä¸³ìðÛ©clÙ£1¾KkV¯Õ;«S\$ª™£5í¬9“vIÁ\rá˜3ÅªZÄò8Qm8*óˆW€yÕqPÆÎpsÍ¨ÀÞÐs‡@9C ÂÃ\nI¢-@ÜN¸(`¤µ”BÆ‘PAá)… ŒòQè. Œh»2ÖRK«QE…H„ˆGØEK[å\"\$øÖ!Âºø!™·-n]ø2xk‹³gE˜ø3²àIÅ„Kl	…Y¦¤k!à¹z&†æuÃ‘Å“ÁÌ;­–CÀp\r+2F¥~°VÅXë%e¬ÕžÖŠÓZ«]l­µº·×\nã\\ ½sÕÔ»î\r‹Áy/Eì¾Òü_Ì\0ç°0ÐÁX;!¬à°ãŠµ¡Àn_E­¢gø]:,\"„YGU *pDU!	ßˆqk3€¦A‡ùœiD‘HI#Äq&E¡ŠPO1\rP@@PŸ¯5W>¡µcîÅ‹ØºL£&¦Ö\"Ç~ZãdleUW–ì\$J¡3¤×4TÚ{ÙŒ\0zDª4ÇC£< Q©Rb\$‹Þ­\"hä­#€ ’HCÌ'¥ƒ6ØÂCs;'l, âÜdø ÁÈ7†Ð@eÔâ”'en‚\0Ç˜IÐ;G<8DðËJOE©–‡„ð¦(D&ur«ˆàŽPƒËwHh±XþLÕìæ1T²è,Ÿ2}K±¡¬Gc%:ì3²E	˜¾ä·;ŠÁgeÝÀÆ¼!Ú÷\rëJ\0ÄC8 aa2±£‚rV\0F\n”Ix0`Ò½–Ël›ÕŽ²’%¬p¹éqTu:%Á2NÊÜ_C¢…ÐÙ‚Tdž³‡	á8P T €I2%d”ñªG„ò½P³ÜJ…€)WŒ@Š-ê½—¹Ç‘'xœÅŠŠ\"._¦n÷²³…\0›!Rˆªp‹ß+î-D+„ÞéÌ£†&%Ù”*ÿè£ð\".ý˜Æ\$R'ÞSvN‘ý–\"g):a*ô‘ßš‚É…\rt,hÎ÷+Hÿg¬q¢Š¡ª‚žJlugD,Aª¡‚SÂ¬B15c_ÃÝmáöwÞöÕKÞÉO…þ«RLO²#Wd`˜7Ùîãcf8kRð*\"JÖY\nAH2¯pÓkÃ¢ä\rÄtçÚ“ˆTX:š’dÒ“6÷¨…§9-&âi¨â\$¢½>äDº›¤‹A\$×Ð™:‹¥¬]÷ÏÉj¼`¦CÓru”8E†äÃ)Ëg\\2@|®¢â)ƒ”Ê‹Ð9îéò“‡Yk–ß®+9!”;«	Õš›Ä49:`‡_+0{FSs:Ìü…Ê“ZÄÜL½„\$ŠqCœ\"N†#\nyv5Re¢…o|>‹A‰¡’U¢©ØbsëÒªndó8h! úÑ5ŠKÃ@P5Ó)‰öù_‰_oOäâì YºŠ4`§D«ïHT!\$\n¿µNt(XG7Õs¦.NÙ-bMÄÏ&u•O/dduƒðAÓ\r“Ùi=F‚u7ÌÎ\\i©éT´‡“¸öR#ñMÊÉÖx•X–ÑG\\“8ÔýP\\`'[ÓÝxºÇÓØìÇe§Ýƒ>i\r•;Yn?tú¡÷´MÄjî‘ñø§ÞðÈ@½ïSM›~Õ’»gƒ1³èØß_¹S¦Iƒý’Bë!jP»E±ž(‹uþíãˆ”ò»«z¤…¾úG­î¾7±{Iä|/©.¶2E“¯uã;\nŸ÷ÝåøøBƒ±½ù§a«Q¶V@îHÉ,wTd¶¼ùˆ°ª¡)Ö\nw~çŠÉAý+Å€·¤SÃ”ñ’˜lI¿îþÚ,À^šN&BÆ{¯äV¬`)Çl4ÃâÍ¼vÆ.%ZUÈÀŠöÀç\"è¢Èc\$2cŒÄ=ç¦üP&?.ŒB§:J¥xIMTL…\$C¤.jêjÕ„*»†f(ê,ÓÏ|ËNºƒpÏð^Ó©÷Ä?­¤ºPr./ñjHÍnÖˆB’.ôphÎ0~VÍÄ‚OŠ.G£Mð£	Pe\0l†t\"¬£ì0¼!	,zT#X«¨ôc:R¡\0(dqlÅÃÌÂ¤œ³\"ìÎJÅ¤Z‚ðòÜÐÊ'#V°0¤B¡%Ä©,&ÍÚ'FÍPª?K\"\$å@ôàzfžÈ–½ª=§P>Lü30Un±ðcp˜åÇ™ñH‚ÌÖ°QR&®VÈpäO°çìœÉ'öÊI\rp¸ÌÐló‘JÊ,™âkãYÑt\r–yp–1›q›ð¦ßÆ`´ÑZ-q­¨1¬ðo\rÂ g,^T‘sæ@\"ÄÎ>O&í0deoöÛˆ+®æd±ØÄ1ÞÝL¦ÍQä&5îá‘ÓÃdãÇR’&\0ï±üë/ .ÚùÃÂß‡DßË®\"Á-ŽË*;\"¥qjjv2=r9Ï¶#2AËªßò4òñƒRTú\râO‘’!,J*‹Hw‘4.*áÌÔ3ïˆ>0Nüg†M‰gbÞ…t¾14*ò~lG·(q+MÝ&Hÿ(ŠJDÑðfgŠ Ò r®þ1j#\nÑ¬­'˜.rW\$R[\$®\ræCRtuP³,¡D:ß.)ËFfÐÜeŒXGÐeRR£Ðó0‡³\$ñ¦ËS¯ÆÒ`P±ŠMO0¯é2nDàóQY&bÙ3ÎÚ<òO3HÅY3óQs-Èò|Ð\nä3NzìåM£6³LänJL‡€¤HáÄ\nHŽ\$sjb¯z„˜CâbpBHã±÷!s4q›:‹QU!B×;QÛ;‡w62áíÒ{&<†ôvJs°=-îÎbÜÎÈdd‡ÔÌ±µSØ=¦÷)gg?.3SP½Ìê{#ñ0Hæ°Ç‚fQ&h?:ò<GJ?B.æŽÔ2ô )óS;óI>KJÙ¨\r733ã]Df¨'´%´(zQÛ“a3dÞÔBµ~þƒX³ÇD~\$ÍAá †.àtW	Ó#H\$át;nÜà4ƒIb&T4|“háŽ@ÌÉC.JŽJÁ¡¦`OJq“n= D®]DáuHq¨-tÍ#ÔÑI3-dcLì\r2´e\$BÖ®Á@ƒ:r>S;+dZà\$Ó¤Ôê\r)iõ‡ÄÒTêuÎÏòH/sQ¤o †‰R\"Áu(UO¤é\$[8†CTOgÌ}SÃÐ“©>ZÂD; è¢F\ni–8^:ÕdêvV‘fM¿ P®íîÐu¢°cpð5€ðNêÕ‰=r% bš(@†€ä\r€VÇôë)®ó=K4.éè~ñ”k(@Œ·ÆVFØIº\rËÊ\n€Œ pºf\n@@Îõ1®æ=«êöŽÑÎþ{Ê’,hÂÚN­!ãÍQ•ÿ\"Œ„ *\"lÔ±|‚%\0©¼f¬Æ	µîÀòà\"[[ä;\\lƒL§+ãââ,ÔôS¼§ÌÔ²ëÕ¾ÒßÃ³\nwN³Ð1pØ|®	g°Ö¥¢`Ò ¥>Å>Pâ‚c8!ÂÖ§Xðjåc:ÓŸ6£‚tðÜƒ¨ú)#Lôö·+ö»`„“V-ÖÊ+.»kÑWBl·m±j‚œ11Ú}£ëç\n¥&ï0Ä:¥2,uÓXÖ	c0¥\rejEpÏ\r&\"5L?ÌChå^ A:ÍØ´ì@¬(3è0ö{ó§=N°@¬ Æ ê\rµµõ4Èuâ¬¯m }í@Žleöï7n&ÚàtWslv>ì«\rãÊlÐÉ÷tlÚÏ/Sq5#K\r\\ÁïG×J>j‚ÝCQ\\'6û¶b~Ä*.`";break;case"ta":$f="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆ¯CˆÈf4†ãÍ~ùL›âg²Éù”Úp:E5ûe&­Ö@.•î¬£ƒËqu­¢»ƒW[•è¬\"¿+@ñm´î\0µ«,-ô­Ò»[Ü×‹&ó¨€Ða;Dãx€àr4&Ã)œÊs<´!„éâ:\r?¡„Äö8\nRl‰¬Êüž¬Î[zR.ì<›ªË\nú¤8N\"ÀÑ0íêä†AN¬*ÚÃ…q`½Ã	\no\0Ò7ð2k,îSD)Y¤,«:Ò„)\rkfä¸.b¬á:®C• ÁlJ¾ä”ÂNr\$ƒÂÅ¢¯‘)2¬ª0©\n¶Ëq\$&‚ í¹±*A\$€:S®·ºPz±Çik\0Ò¸Ü9#xÜ£ ÊU-¬P¼	J8“\r,suY©ËÔBæÀ.Š­'â˜èôE\\µªŠÒW\"¥u,ˆÍ±»Ÿ·(²­J!\nù€7\rê/Ö‘<›-Ë2W*ÉÃ{cQkRÄTÚPãÖ+C£+ c@Ù¥+ä-VÉìòæ·ºæ³Ô­änã(Þ6Œ´ûTãÛíêéÜ­õŸ2AåÂœOÙÑàP)#›î6ÔJº¬Z*ÄÊœ°ØWøÊ9<#–\r¢7­OTÕsb|\n£ž‚×hùqC\nRR¥BÍ„Áä5|BÆåhŽ3)Ö¶¬1+%’\\à«I‘5À•NB¤I’pD!ÔSG‡ƒ¼9£0z\r è8aÐ^Žúè\\¢±^\rãÎŒ£vÑ<í3äü„OˆÃ³]º˜¾ÿŒ#pÖÂKNö]ƒpèã|¿¾cò7Œ‹ç˜¢&\r/»\"9n\r—·0¥™nMór•3^ë„ClDŠa¤C)JVêá•Ms×-ôEe’/ºZ¾á0Ö2RÒîg;U=òu%/wQå6Ñ\rsÖKŽ®ƒãØþD3 X7\$AM²!Aôò¸KÆÒ=e°üqÅ£åÇý¾eÒÚÍ”1pÕŽ›soeŸ¼ŽœAþûWÄ{ÔY* €\n•ú‰Â#Q!Ô6@@ƒl¡•Ý¹òœ_QIL¥5Z„`êƒtO©î\n ôF¯ ºi3†v Ï´#`§›#õl@Rº\"…5:\"WJæd}P™jbtÂX\\>w.™ÕCµ¤CÂ¬€êE)=Ç†²Òiy€è¸¥´—9``lnGüñ0ÆÞQC“)iö+7ôP{À‘qÄXqfY¤7„i#ÔwïXÖºµ\"í\"Y0HèEw¦h^©}6,ÑÖ?è•\"Ö‹Ñ)Z%§6…d“1}ÑåsJ%Tƒd*Ñ’ÉºE=GXæ•ê5èa	JøÜyH ÑÄ¸˜ˆ–œK<†\n©Ò“hä“Ò:Äx,5¿Ê,’DÇä¾+‘òûy¤EçÁÃ«'ž™^PÇÆY6å,æfQmäÌ)V²b\\Œ‚¤ÅØ1. ÙOYð49\0£¶w[™â\rá˜3ÆÄpùy-érc\$ ¨Ï(mo!äAðæCc=áÌ3@À@PÃ:+`°ø‡*(a‚+©ô¶ÜO¸(`¤¯0¦‚1H6fÛL4v« Ô]^Æôš@D Ar8[éÊ?\$™\0Íp®voÊD¬£ZŽÞñdiLÐFÐ‰òñ\n‡gñ6£&r‘Bf\"ôYñrDâ©JrÈ@3ä[•jâuEU/ÐåÖªŒÃýg-ñµà—Ú’hêSyQ* 4R\0Ñâñƒ\r,¯ÐÂÀ˜yæ²áÌ;¶WCÀp\r-@2T–šÓÚ‹Sj­]¬µ¶ºÚød¥Í²¶vÒÚÓÓnmMÄþ·@èÝ›Ãzo“5À6—á\\:wqA¡Æ8àADƒYâr§™‡Ñ Ýq«B®¨†»Aá=’M&ì§«u/PÑsA¥ð›X§ÛW*ôDNPªÐ[›ÈšËA(P¡˜ç:‚€H\n\"ïÖ3ŸxÓ}ò,öNa«Ò~`/Ù×¨‡fY\"L*8þàa]TL(G—’=›ù'V	|Ö,ôõÍ?åâJYŒGµ÷—^B°ÜäQòù KßwEr·ªE8Ü(y@ôˆ=Q˜îµQ²)µajBL.âº88ššwÅ(†°,†–â\nDšy/fQ¢'jÂêÚŒA\$‡“¸ iq§’1àÜãOÉû\r@8Á60r]`€ Û&Äˆhm €1”7!žO€p¥”à LkŽMnd˜r?\rc  Â˜TÊSqK2açVe¯•\rØ!‰8ÜÖS'ÔÒý–œÞN©UKâZ\n~Á¤3‡PåSöp´a–žË~ä~]Í\$ íføÎ¨©B(Ž5§-ˆäcVÃ=<4´àŒ0yq¡¤ÓÌúW´ƒcÌA±™ê×\\pBãL„³2ËÊVav»‹<'„à@B€D!P\"€®\n E	†3ª…{õ^¨26â42™–›5›i¡‡ºOÂƒs.)¾ª„½Uoª*R®oié×•NW	'{Ñ”¦H“ã›ºY´ù0ÂB¢!C–2ÂRBUEœtÆm0ÝA¨üËX=hï¬u3>W‘?Zý†kîµ!Ž_§jX¿P#»3Äõe\$Ê£Ñù-é|<æ'ˆÎÙ©,—a”ÌÏ­t5=VÎÊÓë‘uþwûMË~zÎ‹µì7’ÚqÚ€Å*¦0ˆ»D·Ô].û×ðVn{–2S6uX‘8%\$	˜õ:C uõÁH2” Óá~#gÃ&ãIÖ`?::†pÐ0¾­¶¸…à©+´NæŠ·ä˜¡ÎoÇAÖ{Í{ÃC J†ð›p%LéfÊòço=õëÂ\n0Ê=ˆB Èë‰ÈJ	4i*ÇƒF“\nžýÆ4ìè\nHo7Â0\0’\rÈ  Ç\n`ÆÑJ\$¦€²Ãî=\"þÐÜ€Êéæw­ðæ§’°yÈÞ5®ÀÂÇìßŒcp.‹@(é'®Ì,ã¨›ÂpzXhœË§¬&*­xäC¼Ðœ¯H’\$¤óNx’2ßN6è‚lèÌÐÊ‡tAPšçDü&ÇÏ ðÊ½Íóé¨,äOh,äâgªú¤W\rzCO2Ÿ.h­¨²±iÊbÆ¨Ç@™Lœ_ÀŒlª\$š¾M¤,}Œ’€¢|õïN±âëo`õ|Õ)†ÕfT|*û*ŒfdÚòŒÌ“¯.”Œá`¨ †	\0@Ï¦\r#Þ\n<`ÞÎ¢‚™Àä>ëJÞÄèñïJYHîÕl¼˜ƒzð„”})r#gÈ×0Cr}¦ã0àîŽE:”‹úèŽ@íï‹‡°HNòuÌnyŒ ¤‡Ó4:¨Í¥1Ë©\0Ã„uÎ<ñeêoAÄìB\"ÅÎöÆ\rmÑ²ZdprãÐªl™Bu0\"íh¹hôYRèÐÆB\0ÈPðH×lb¡Pq\rIà¨\$¿Â»K®Ý#±þŸ2«N÷ä½Õ!20¨à]g²j0Ô¨r>C'ÑîÉåL\"³#‰Ó)¯ÀãŒr†ÂÍâB0ŒwÊžéOØH'â‚(b‹ÒÄüD\"*,Ê†¡§ª«’ÔÛRÛr‚ï'Qä€W®I*r4ßc@t´ö¥•ä1\$£šæÃ@FÉtéñàYE.ÒûÒß\"¤sÊž*p¤ÕKZhâšJÁ)¯<h‚Þ¬C4ÂÎ²\"zRP±Šð¨Ë3ð4Š«¬<¯Hžd€6m~cØnf\nªå¢ð©37BÄ¢K+3KXFmrý.PÖÃ€œ¸|3°zñó:ÌW2þïS(%1:‘V«3Ô~I˜`kö@ñW\nlC=2=qØ\"3Ûò¥Ÿ5Óµ=Ã?’S(N@,@i,—!;ÔþRŽçT{¬8“ëÏÒ-’Ê€þ4C)¹¯?'ž†á\\Ñ8GGJRe*N	iÌ¾È­ ÅS4‰r’çÑÂß)ì¡6QªÀô€–ñ?7Ž5Ò=EPlé4}3ÉiI~çqâZ4ƒÌî´ÞÚ’®2 AÑñAG““±À–°‹Kàð\0¨ àÙî,Zçç!Ñ¬4€Q;.f€æ'JGêñ®ÛDÉÒò0ž±±+7©‡BR/?±òïç3Ò\r0¬¾R2­>ñæx´ÉCÒ±Dµ\"wu µ“sªÁ49?4Qô?ñAMKúðnÈJqéS³õ*4-?ÃDpGéáƒªîÍaLµ?=•z’iÝFiXUQ=ô7Xµ=;´EYTPŠ’ø’‘VåXÕ©W‹’f/×D\n¨ª*Š€5³i;t­\\Ò	‚Rfm;!ŠÏOM÷[u9[µO@q2½qWe÷QuÓ.LfÕÛ@Ó=6è—0‰N»‚!^Ó/!ô¹I•7-\nÂÖnG‡Y21bé*Žm.É©pá@Žïa•^_Y4•dÒÓ•óc4![ÒRÐt6eR‹f¥U)ÅQŒ[0]BŒI4iÈƒ'ã^3On8,ãa5eKtùÀñG¬¸ß~¨¢xìCµsCð`Ôu&d‘Âü¦¢aæÒ£GáQb¿g5\rÇú1\nþA³+2zíëæðÝk­Q	\$H±O	;_Ø\"E‹k’[eíhŒi®1q ­ô`ãÏBö§æÁh…G4ä  «ö¿†…oS/Öú½¶pKcE‘gî7BµA”1qÁeiS§Að”œ·\$ß7)9ðäè©AU‡C%°Wv•/VÕ÷\"–[Lõ`w—iVµ‰h–qBuªAPY_ˆšãÓÁUU¥lugWªP°”I'Yô5|—!xGj`ñ67©vü€Š<'¿w³]×§A•a¬ÊöMödâ'÷ò¸ÔÅ[—¥hÖ]i—±5~Ô_ôšÜ~q[lW·h÷»‚13aWë€ÊÕO˜vmx\$¥€I‡€Šƒ„‘×øOƒƒZàó	ÊCötîv–+é[:ïÉIA`«ð/8o+‡Ä1s³³R¨árôS5±U/ÂPÕW7×˜ž¶ç1Èûe˜z–a`u]`Å•\"hZvr^uaXË‹¥•|v‡ØÃ€’ƒÈ@ø-±x#k\"8~Õï_Wœ’XðÙ­“†·ßŽq]Ï%9xÔ3ƒJÿ‘¯†ÄLŠ•î&sb¶¡[)eWËU¸ƒöŸ_9@Šøåƒw•õwT9=•šç¸ù|IŒUÃ–.7•0pÌW¡°¯x°q’9{•V…•ƒŠŠ#×ãSN·ùQxé>9K\\\n‘™IÉ™”èÙø3™+lYoŽÙswIj‡—/›…8ûM¹%›o-›°¦JC…\r·ce,©ø¿›Öx!ž0ù‹™éjÑ–Ùó{™¨rðÙŸ³vÑå‘Y)ŠõŽ¹_gyùÊ©Ÿùe—ØÑIçžYý¡Y×¡™¹¡×~‹¾˜A€xF_~úæ+4\n£‘NéùE{XÕAœU£ jÞGz_`ºcJrçLrï•ÏE\r©¥˜þ¿1¦1¦ZAºEƒ¹§T ²í\0xµõÐþ@Qtª^±+úJ°®£€³Êòef/7“rm¶¤î³_)ÒCWWrS‰­MY]ZØ7šÜ\\Ó\\®õ‰×ÏA-:8QTwü“OÔì4d-9Òð}9¬+šû.®,ñ—9É\$²Ë0Ñ>ÏtE\0Ø<Ê÷Cá]|wÿ<z2Éqª–>xR…®ûSU;W„,–§~Seã¶6÷0Îü@†SàØm÷àÖ\r’iÐ2‚kœ\r§\r Ì¢‡*+ÀŒ=cÄ\r¯tÀÄºM°\n ¨ÀZ\0Am»¢E‚½µOq)wÄJÅPŠÝ±ƒ>²p)Åë¨•°Ûi½r!H+ÈÉxq«É–ü‰š™ûèåûíªZa°·q(-V›¹s×žÏ¾£zT°‰x˜¼¶Ñ­ì&g ›º;§=Ì–Á”º÷›GO]:9’¼–\0Ç;_‰óÍ4	fâ¤œYiuqÜ ’Î;ZtP«”w–²š‘¦—ÃèØZ7î@˜ÛdVE¼ž(«žl£Ä>£û‰H–g	àãŒ2A¸Ãh1Á¶uÁè¯kõµÈ›ñ}TSè>øýw<ÍžÛë:ç x= ¼È^dçÂ·8\"a‚¹pÌz‰'ZˆzaVIÁÃnŠùï•º!®µ’\nƒü=ƒà;ãÂºÑ`Þ5\rÙÑ‡Î}RV–÷ŠoIO8õ³V1ü:½Ì½˜³s˜†ÒF ]‚“Z\0ŠE†Ä†{ZáffDÌ×NgÙ%žƒìÜÆ ‚™u¿´°õ@Æ ê\r³Ýh°ýÃŠ'àŸÔÂþæ\n±ÎqÐóÇ1*Üé›˜C{<Ë‘òˆeRæ'ös P\n€åÍãí±·kwÁlÍTì'=b5ÀM?ÂZ¼îî¢I~©Þ\"êýt»øZ9ˆ¾v7a4ÏÎ¾9ß\$H×IšÇá9.6\0	\0t	 š@¦\n`";break;case"th":$f="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv2° #!˜Ðj6Ž5˜Æ:ïi\\ (µzÊ³y¾W eÂj‡\0MLrS«‚{q\0¼×§Ú|\\Iq	¾në[­Rã|¸”é¦›©ž7;ZÁá4	=j„¸´Þ.óùê°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€èù£€È0Žxè4\r/èè0ŒOËÚ¶í‘p—²\0@«-±p¢BP¤,ã»JQpXD1’™«jCb¹2ÂÎ±;èó¤…—\$3€¸\$›Ú4Ã<3«°ô/¬m£Jæ¹î‹®®å†á'ê6¯¹DÚ²Š6ªÉ@»•)[t‡¯ÌÀÁ+.Ú~¶ Êñs0/íŠpé#\r“Rµ'éL[IÎ“Ê•EhD)1q7±óŒhæ§ Þ\rlŸ\n(‹ÂE¤£9ÁîÂÀ¨*P“³>—t\\›8Ò*/¸0äãCŽÜºŸ+*5NeÄ·	 âÌÀMhÚÚ<)é2×Â2<DA4’ˆ€VŽlã,5È;›,+dƒµE„;˜€&iüdÇÛ(UGT6Ý­§©œÓ;ªËÉ?IééGwYü³i Z…ZÕrb¢¬¯åÅ¾ï×U“6LV\nz¤9D×SÖ€ZÎ»6‘bw”·60»Ñ+;¤ŸÄ…ïF«ùApYÞ7ó›¸Y\ná’^ÐÓƒ,EŠªg+ƒÖ9£0z\r è8aÐ^Žúh\\0Œƒlx2ŽApÞ9áxÊ7kCÄ\n7cHß®OðÃ¬£¦†/Á£Ü5„Að’6ŽÈÛ­Žà^0‡Ô¸A»ÀãxÈÿ@›Þ)Š\"`Ó¸¶š:ï»y†5]¬MÓ·D©“r­Û¬\r6-ÍYKûQFŽßIÏN3±OÑÄ]5á9uQÂàÞM=–Øõòc…Q;}Í{†·ŒrCÁªpÒ]ÛŽü±'q¡€.s±(¬Ò‰Ú{<¹´£‚\\\\ÒJàËbÛ)ÂÞSQU‘¿Õ	'pã‚ZB&‚0Ž£`èÃØC*æK!‚œ„O	ÈS¬H˜õ†ï“Š'éÄP•’lJê”Z*àº\"c¶FŽ’Ú_\n(ìª<ùYJ7*0žœ†vŸÊ~+&=ó´8õÞh¸N\$ôª\"zœJÚá.(EW²²æYbµ+©Ø®¼ŒŸÈllÈ4÷‡0ÆÛ ±\0|Ê&–€@âc°QeQ¾„‚@üV®¬\\;(Lí\rZ0LbáŠ¬%Ä˜œš£r°Ž6FçP‰c`‡X4PÚJÊ‰#†ÄòÈ0Ç!d8\n\nr>C3èïãœu.nIF1ÉJp¸æ!(’ËÓPŽy@Y>päcžwù=¼7²C\nÌšBRqÉé'\$\$D#€n@? äAêlç¼7†`Ìš•©=r&eêÉÈT\rçÊC†àò«`¡Œ1ŸÀæŸÈ \r¼3£Àæðr›á„3†x'¸%pmH7T\n\n˜)q°åo#‡=-Ýø aL)bLrŽ±\0JH¼í›bx«Žrñ•Á-Î’,„§mÎ¥5%4œ.óY³XFOá*¢‚Qáx*TÄ)ÊÀSœÍˆ7(*æQcÛ ní#(*Xš	Êµfõ™29®†´¶x«€·¢ï”ŠÀ+40‡4\n]aÝ«¸0Ê€ihzÏÚCh­¤´¶šÚ{QjmU«µ–¶×Zûal`½² ¶ÐÚl\r¹¸7&èÝ›ÃzoùÀ‡áøa\rg½ÅŸ6©7[Â¨¦Žhæ«'¬_UûžXQ~¶3ŠuMêö£JÈ©@tÌcãª¶Í>(‡|‰ÜA‹Á@\$\0@\n@)PHR7(˜xxè•¨a+\\åR®Vhã”,vÀéQ4ŸEŽùæ†qh¹ÛG?\n‰-ŽfáG2Â’ÁUS¨°®–Âìp…W‡4íÄÊŒïªBjI‘%ÉŠF¥ÊÀI\$¡äô‚\0È\\ñn784‚A@0¯\0Ìƒxm½æ¨¤-=s­ÃbŒ0' eA÷f=%‹˜\\(Ñ¨•ÅÂR¶WIéU¿Bà»ekHR‚&xçBÇ|%¨~QgHP‚ÔE{žA*wZPºfýbÙ·„,µE*›§UÓÑçÁ±^ž ÖÔ>A¤3Å÷‡Áï>ìø#KŒÛœin]ýÙÜ?ˆdT=ÍV,ÆÚj§I›\"\".D¸B*¬îOŠN&=\n, Âp \n¡@\"¨tþ¡&]Nõªòaç¨Ç¥¬˜9úbçå3špQd‹zpæ¨È|EÖ#èXÑÊ!wÃbïñ9E%(nTÒµ5t4ÖìxxPÔ„ØñQ%ƒÂX×&–K®:-}½Eèê0¢ÂïUkÁ&/ÝØÑŽ]ôv÷]DTð	ÇÉƒ·.˜½£Þ,u:J—=Â#º ál2¡iw}{`K¾d¨jómEæöT€ˆÅ©)GdF‚en¡¦+‡JxHOî\0.deñpÄW!]·’íÙ½°Aq.1ˆ•éÅ‡²˜K’È/5èE¤Ç,…ÓN²eºf	Ò¨9§¹¼-H4‡¨ñpŸÐÆC\"W7\0*BIZw~õ¢¶ŽñUÊ¾_÷]®û†Pî²c½Ó=hðDt\"ÀJé0ŽÄ¸Gó aJ¾.~(ã)MÐç·ávò„=¸Äé|j|v±Ê+WÅ•!Í1 úA]äm)JÊN©#ý…³ò™×ž9ÐýÌtDS¼”îñýÞwø^]ÇTïÊç|‹Ê1Æª1ãr¸¹žõCâÊ(ƒJ_3ï<‹ÛqÍ‚²\",ðíLsÓÚ˜*†j¤þg€|~@!ÃBw´&lÂ¤Ã5àßÊ(}Ê.[Iô\0^3D¤¤ðEdf„ZYårDP\0-HºsN\0¦å;y¸ßæR”çª.n<µê¦QŽŽ¼‹ÏcÂÆã¤1æKi®'p,æâ&+ÖpIè„h— ¦ÇxAðl¥°*DF\nc§jGöÄ\0îb²}¡pú\"¶òÄ¨2e8êD ;ä9Nš¾%6ÞO†rF´ï¶‘fRCAéª„eô_lõ`\nàÊGMÏòRïcÆBPæ9C)šTKÖÌ‚~B‡Í¥Qr.Ejšej'â@D§00%j6v^±._c›EbãCº~BP\\ÂfôÞöäJ9ÎE	B«*QˆpQN*ãÐ‚ªÎ		J°^Ð–-ƒÂÚGð;	\"²;PQ‘ÅîHFôä—DFlêikq‚rÏii.–quÑ½/ÂáÈç¤5†¢1°‡D`1*ë)hëo\$BPØã\rôbÎ\"Þ´‹&%- E­îÜQB–:B„ì„ø+g2B³!-„”2H\rpÖQø9Ð!ko!Ï®y¤ôóã\"tïDŽ-Ìò\$ÂSÎMa§Ï#g2C%íEjE§¤¸íˆ.èz.áN22¤)rßn»Q{§Óò\\ñhäÂçdâŽ““*p•ïÄwMÛÒª-úªC õÂ¡òœô¤ñÏG%2ºäÏ¾,r™+)~íÒ“R[.I(ñ§\rNÛòî§2ò’ÐG\0èÖñ’Ó\$ð²vÒþ\\Ê`vc‘\rå€LžùD%’ÑÍ¦ºPàbÐ>%ðB¡ã·2ê|ðMPŒJþª¤òõ†Òn#\0sGòã5315hrÒDJ\\g=2ËK0ÒLŽô“õ-6åHõóa0dž¶Òý+ŠƒãXsÐdÀ¢X¦Ê[0¯8ÉÈß#bg'C‡¥Ã‘ó&°âRV§2õHtIóÀÉN\nEîˆE4|òhòe—	’Þ_oÆ<\$Xø	.ˆSºDG O‚¥;Æó¤ý6T,g77O\n‡/ÇCW;\$ZóÑbW„P÷”Q”ŽT\nNM‡=¯.³)ïC8!9Ï\0uÓb7ô\\;´a9J­9“û8oM °p¶çzV¯²ƒ±x»\r0HŽJ£6o°äÙHt‹E{ESE“FtI‘ ¯W4tpwT­J2Ñ7çS%<{´±\r´´”´º8T,x3I®§H³G“Å\$+Î:#hçOµ\$)Nj\\Âw¥k9ƒÂ1åONÓ<%åÒåÌM/t6RÊà`¥Qæ§RS	LJvtÇ82SEÕ.ŸÕ3K‡AKÔ•,õ:õ> @Š\0Üìî_UMJuZvÃæÄ	Ê€êhµIVdlu~Ûõr\rõwW¨Ž&hV¥nB“¸.{:hr0¨›@ŽÖ§OåV#ßF2—R²][H[•59uOM“\\F¶œµÊDÕ9V´ÄäS…EÕÕ\\”¡L•áSÕåT2â’@Ë[uÙTÉaG2±åf„uŸ[Ô“\\³Y‘D9¶FÇ/\\ñ»a“Ÿ\"¦+p–Y¢Yõ‹G3ƒY¶ ”/ÊW“ µF\nƒêï{]²•amåöT÷ŒO^õAUrÕ_QIVge–kbRû`•SE4Ã_OWz÷¶>4àAi&¨\\ÐrZ4¯Mô³H‘I.`ÏÏdïÕ1M)¶‰gòukS521ýFqÓ/ÖÊüÖÏekò²	\nº\r©2ÅHkèûKî'¥Û1É„¶èÇ³>Ið(ã•Éòøƒ‡ÌZ\nkU7_\$ÄgŽPR6RÎ§ñedDóÊ¸«ÌN«Ä°¬\nk=ÉA`ét‘›3Ð{4ÑhI‹oZðÃmC¶RÀ†€ä\r€VÅnX\rl¢ ŸPC·V3\$CZ+\0ŒÏ&ÿt‡öK8§ ª\n€Œ pÖpDxðxy4Wd+³J©tu\0«Î×­0(%j˜n\rÑÊsBfºÀ	·¸ÀòÑ­ŠE¥|ÃŸ<\0”g˜8×9E‘mèå@Ð“Ac\rxr8Ö*CaÇÐª5ß*\$‚îr2+®é¤ht.ÔbKÎ½`	€Þj»„¸NŸf®=äAf‚–²á…k³T_Å;•Qa‹w‰Âå Ê M“B³FO/ÆO7!\$6'Í‡UÑ-©7(ìk8oèç–±EÀ¨Aƒò?£Ùu¤k`@\rààåÆ¤ëÊÙˆx­gdDd§ZÙEO.›:¤À+¸œtSÊ¶ì°ßû-Ø¤“Òz8R~8H<r¾“¯5-zØôM&Oòr&qè0ùDáZQñ|-\nÀÂ`ê ÛCËud)¯PéB”hÆVâzÔ^„jJ'¦J„J8.ªeEEÙª©,c¶_KpÓ-®ƒ•BmÇˆí°vd8<2©?i0×-ÅˆÄ›sgÍ£ir•êœ°¬IçÌR‚ºs4G‡tMqÈ8Ã·›\"æzà	\0t	 š@¦\n`";break;case"tr":$f="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùœ@\nFC1 Ôl7ASv*|%4š F`(¨a1\râ	!®Ã^¦2Q×|%˜O3ã¥ÐßvMóÃA†\\ 7\\Îó´ÀÎe9ˆ—3©ÀÈa:sFƒNdépÉð'˜éÐ«ÖËtFKÅèÝ!¦vtÓ	´@e×ñÐ#>¿±ÇœÍæã‘„×ßßÌ ¢œ‚%Ö%M†Ã	º™:ž»§I÷r…?ÏÀÌF˜ù¸Ò 5ö»”	ý\"iñh`tÊtê„2í{äî§Ã†:/’BºŒÊ0ŽKt 4\r@ñ\r®êPX9ã`Ò*˜#Œ£z˜:A‚cJÐÁn¤V‘:ƒ¨Ü:©ð·01b\n€ÞîB²^-ãq½ƒJÊI‹ÞÆ¼…Œ0Aâ.4C(Ì„C@è:˜t…ã¼Ì#\"7#ÁrJ3…éŒâ<?H3–„LÔ ËŽ’à¾¸»£XD	#hàÜ&# xŒ!òˆÌÄã@Þ23LàæÑ\nbŒTÐ¤ò>ˆ¦NÄŒ#‚|Á–(Â49´0ˆŽKÀÜ¼\r«Â¢2ªrQ>:=’âœ'Š’¨²×ˆ³'>qb×´¤Œ<Ž€Mš›0Mp—¹ktÄ¤£¨Ú	ìÜ3^\ra\0‚9J0ˆ‰-.Ó\n;-ƒ«¦)Ô5Œåh2HÛÂ\r}h2Ñš4•Ö9.ˆò:ê(+d¨0¼O˜9§Ï¥ˆ(od6ª˜ê¾-Ä\$ß4õüôæÃ.¥4øDÉÖ>0Ô@PÖã¸‡’Ç¥o\\Ø•éŠO\$VVwa×yö„øëb°<÷çÒË â‘ÚR•¶èô7QHbÖÓÝIòË(zöÁ_.ZN9¦B)u?¨§ÀV âw¨6Eây4CxÌ3CÓbNaéð×±,Â Þ¹Ã#pòFCœh1³˜ÌíÎac49qãÎ0¥‰e§5§C(P9…)<I®H0ô¦)ÁH@58Xê¸ä6§Öæá	\$n“ˆCÆóä(½EÃq¥JòŒ‰òOpé¶ò!³zf6ƒ¯<6/ Ì˜³C/#JËëTÏ¨&Œ5b<ÈæÉ*”¡à8ÀÊV	a-%Ä¼˜dLÁÝ4&¢›Szq\rÉÍ:†”îž[|OÊ\0007(%¡”@nQJ1GRp’”3dç ÒaCqª%í“°ä÷ˆëúW&ü:òÐÈl'Ïe)pªx¡QC.¤HÌ<bB›P	@èÅux‚È ` ¢»¦\n)Ø9ï?…<Â¬\"ªˆ×©vGÀ4†Ô<b¹,mÄÀ¾ÀÌÄà aÄ9¬¦« ‹+Ø{@€&>—Ö@árÂ#Ñ€÷H%ÐPX©'	\$<’,Ò¥‰…RäpÑšP@–CŠòU€€3\$L¹ ²laÐ4>ÀÆ\\”¼¥3/ôË¸1aÉ±x%ár…\0žÂ¡²#äÏG°ò{ØlJ\$š™õ ˆ³É#RÈËi*CÈgFM©çèƒÈä˜~Æ(ž3ºä8oM2›ÎÈL•„À–†’.‚¤\\;ªR:‡Jaa¼¬•ÆùK‡&ÜR©Ý)yfd„\$H±;‹ ²ž\0U\n …@ŠíDKO÷š³[<h¤};Ê\nW &ZMJ)Pf¥€‚—,¹ðH=6§\\¹4ÒÜQë(8	fADÀØØu\rgR8¦Ã¤„B2=\$@åœØºtÂÍZlŠ¤ÓÑ”@ØÊšyÂ}¸RÚëÅ<r!)¨p§I{Q<Åƒ8Èlo¯ÌéK³žž’3:iM±\r–SpæQyŠ”È5—¶´êß\nA•C†™Ü¯Ì.h%Z¥ç¡tZ‹º/SÞLüä9«•Í‘÷æEŸ«ä{HH½\n1](Õs],¥\"—*,uKÐ\nh˜8:š¸HC¡ˆº»Çc^Úš\$ïáVÏä<^”¡•¡Ý«d­@o:ía„B@£CWKãÜs€U)#¡šÍ´Kø(ÿ¢Œ\"Ú0¨pM_-ØAràÓ‘ÉCHÅLù¥á6A¥QGU¸Œüv_¡<î=œKÑ±ó@¥É«¶šˆ T!\$	RKÌÄ–4R„ˆÚº 9'\ni¼:Íd •˜/*ëM™ª…¢´ÓIÀY9XêdÅ¨óÕ<TE±Ä.™,m‚”Ë&*Òó€‡I‡À'%‡)Å—Äýkz ƒ1áŠ8”³>iª¹k6Ôlß3–ùXçóÎw'rå\rl´Â—RN´ÎVv'‰0÷Ÿs,ê¸BÇ9åƒc¦s¾œÏ/C1\n}£³<¾Õêì €¤T@L,®äD¤“R2FÈêê>ê«`ò\"5ú\r™)#Lš†¡pw¡‹\"£2žäŠ‰÷j¤HûªŒù«³ö´JXÐ|jÓd)QÆçŽ¹H¹l©×ïè“GD@R^ !è¾Ei{ÅáQ6¶zþÒûlG¨Äd^ç(vó	¨¡Ò`Ò9Ânisàü\\“ñ›ôÏi¦‰ãØÖ§ËÇMAs©èì6†ó6Ó„…UÍ¡É6µXQšü˜\"ÙôÈìtÂç¼þ°t%iU[1üÙu_v²Â#w \$&û5„‰ká¯[v:'Ã­87nÇ·SÆôOe±lUŠ‚K±ú3ê|'µYhÚñ´?|Žý›X®ìª{ŠÅîd¹´ŽÑÂ|.æï—½øFŽEü\nI|œ%Âã¸ÌV(7»Ë	ý4kËyº\"è‹|Î)ó…OÏ“í¡L.‡ŠýSÑ6ÀD*G\"^×ñþåäè†ò{~H÷|mý¿ë”ÇË\\Ë*iæ›ê=™®°Gèl‰>ºÔ rÏ4Ö°ýX1¤eöÕIÕAÛäNÿ«Ê„HÑŸùÑ,€~ó%.Xý«Ú˜9jÎ½¡lV.èï\"ä.Uðà\n÷-PVn|mF–ï.Lï!(²ŒX0Op°Î§\0ï\\[p,ù0D(pÐ<øêÀ®d€Éc¼¥&C4-ä2ÅFÒh~C-¶õ/6ðâOC}€ÄïU.\$åî„¢*ƒÄf÷Ëø)¶4.àWW°ž_ Ò_pP‡Ã\nâE,nD…>6‚6/æAy\0‹æ=ð‰0ÌïNOê‹î™ð¨W®ª=ð`[Pßîã¤°›P	¤\"ßÑ,\\‘÷Q\"Â1±*\\°˜ù1*ˆpã¬) CzCPDÆ\$pGQ&Ñ#²FãéPòâDîï¯àB>j­ÃÐà@SÑ~ôªˆ-ˆ˜B%¦WK.9Eø-\0£H˜Ô¬Ô61•±™E.´,H6Pï6Y¬»±Ž~çòU¢ 4âv\" ¦;ƒ“@ê\",¨YObô¯fôíLÐ‘èÙLyƒØæ°ÓOúxgÜíÌJ n=£DdP\r€VJ\"þY@Ý	Éøx‰VHl `ª\n€Œ p7îRcˆÒå(ö¯%>9ÆÀÖ%¥qôÊÒNHrT­mFåL±¡N&˜°çï\$@Ì\$6CÂÊÎ\"6‚òàŽ”Hp)…ÊÄ’r&Nk\"˜ZŒ8<b|j¦t>1\\“\$(þbe³\nÁx:CÜ\$…Ô¢b.íø\"ïª˜rÆ/Ü¡‡|f.2úBÈÏ&ðÖ+âúJÚ¹&Ëœ~\r'‰Rê~ç0ì iÀœB1¢B#!\0Gçà1í%hE³šÏªœ²zåîú=ê°ëÆ=24J³4à„\rçæiîŠ,\nÀÂ)å¼/³œ)Ç2DO…zp‚4S6:eÖM“dÁÃ{àŠ5ÓZlfðIŠæfjø²r\"òún\"Þ­Å¯0„ó89Ã*ŽÄ>iè®BñJ#„¨1¥P@";break;case"uk":$f="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”žCˆÈf4†ãÌj¾¯SdRêBû\rh¡åSEÕ6\rVG!TI´ÂV±‘ÌÐÔ{Z‚L•¬éòÊ”i%QÏB×ØÜvUXh£ÚÊZ<,›Î¢A„ìeâÈÒv4›¦s)Ì@tåNC	Ót4zÇC	‹¥kK´4\\L+U0\\F½>¿kCß5ˆAø™2@ƒ\$M›à¬4é‹TA¥ŠJ\\GB›Œ4Ã;äõ!/«î¿(+`˜²ê’P¤¿ê{\\’µ\r'¬²TÏSX6„‹VZ(è\"I(L©` Œ¹ Ê±\nËf@¦‘\\¦‹’š¦.)Dæ‰™«(S³kZÚ±-êê„—.í*bÞED’¡~ÈHMƒVƒF: ‚£E:f¡FèÑ(É³ËšlÉGÔ4ß'R½’ªdX#Dš#Ïa¯+°a P ó¼ÖøÒó¼’ª6ëJb”ÍSÚZ™¨Õ1D¡tJ4MM”õ'NŠ4O²jÊ@£ˆÑ#QÔ1*ÙÕ&GAšCá[¦%àNÜ¦‘„º½’\"èGAàÂâC(Ì„C@è:˜t…ã½Ô# Û£\\7ŽC8^2×¸ðï\rÃ˜Ò7ß!®0Þ£(épï0Â7\ra|\$£ƒ¤6ß xŒ!ô°b\0Þ2:îÈæä\nbˆ˜4»ËZ©–1|<Ý¦)q-f\$Ñ ”ÚOÄ‰I\rZYÒ„&®7Ö_irÝèsži¶-HÙ´vÃjÿ¤ª¾n˜Í*\n'B‹^„»A±3Û&Ìœ¥ó™eW©©\"@†ÇHÔÎ©—û… ‡%Ìõ)™š„4˜oyËfÉIºÞZßW’–ø‡Á‚%¼0Ž£`èÃØ:Œ±Y—YkcWº-èK£\\UEi1‡LÜæ’–|e°DhF¹kUM›mi>L¬:l¡!	]„‡êÑkAH¦R·!Ak\n’X3¨rÄF)JB7*6`o39Œx\\“Cé^ºA#E”æÞ11=8”¾chôèŠOä‚lùºžRÙŠ¨i­™­4ˆ!HëÙ\$Ðƒ\$\nÎ†Œ3p*›g¨ØZÚjxë[¿Ic¨Pu(¬Íc¡¨üºÂfzû¼V/íh¡F¦éF‹V¬â\0*x9`’ Q†É—œ°rGá°CÃ0f\r‹Á•5“ZyË\r¬,<‚\0ê¿C¨cgT9†g*`oè@9£Àè¢èaá…êÙXâ§x0RZÌÑ»Ni!/µ@Â˜RÏUš·À\\AãÆ+©L£E&#±+…”hˆ’	X·Š©¨ƒ\"Väb´”&¬Ýá«#l.Z«*%ÐG¾˜XÑL‰%FåDF#Ä\\í‘©¡G	­“ei ä–˜\"ÊV¤5?&Ðù\rHÄð&†æwƒ‘ÌšÁÌ;¯F@CÀp\r+t2Hõ´·òà\\K‘s.…Ô×bî^Éz/eð¾—âþ`\0½F\nÁÁ	\rŒ-†°ö\"ÄØ«c,mŽ††>ÈXàa\rg!”ÅãÃs–(Uk\r.~‘QS!¬Éþö^šÜ\r4)XˆH,“ßòS6j(Æ£|JJJà€(€ Oå1Jñ‚‚Î\nQä)E8ß#FxPé0Žm¢0¨ˆù|âOònA ¸Òâ~â4DW„<KCÚÈ`©ý)å­=˜„ˆnšJ`Z\$¢BÂ„Të­c!°\\Þ´¢oSt˜f¹ß)–Œ!i»mÒ<´£9ƒ.ÑÉ*—ÏÑ9¸ÑWdºX'\$‹‡“„ id)Ë²0ÜÈât8¹É®0r\rá´åFfÉà_\0€1Æ–FuÏ	ÖÈ2žˆ\$œ\$¨!MMM¬’HŠÏObòžð¦Ì‚61üTK/2¬ÐºEP‚ú—eaGvW‚#\nÂ¤[i_fÍë#dÆÓ[s&ä•²ç^%ÎŸ|¡º/1 Þ»AÛA¤3‚J-Ñ9Am„`¨0M§ŽÌEz9z+lm™^'y!6°Ìœu\$Me©'&g[r%d §`4Á¦ô“èHG2ÌÇD€‰‡´àF€›¬Žd2°ƒÃH¤,ýš5-\$iJ¡x¨½P)\$^ô[Ò¯h°§_üÀjõJwxá\n¥R¢‚+’!m% ½•p««£¤ÙÈƒ,6nç™Eêq\\ZôßâÀ‚÷hB–µ(e^Œ¤¨!©Ê‚§)ª –-o)ÐJ¸vÿôú‚*ª@ç÷‰eÔ6fg†”o…Ñú?Ž–Ž6èœoÍ\0@€ ¤Xi|¡Ñ†äF¢e™¹K\0êüSº{Oê\nQ¦GÖ‘´»¨YÜôÆY	\"U!ƒt.¶fØ¶i#h¦Ù¾}ÌíR¼l¥“=æ†î™†ôçB³íÎ…0ÊtƒÞšL?,žBŸqt+5ï)D‰5êñ\r.k{V@t(wÐ\r\$£¡hÝ‰‹R4XÞÒ˜Bžºe\r;A—2“Éë²o€(-A-\\ÜˆÐ¦²¥[´ôË[t/%8žIÖKŠáÊ¶LÐy¤ªÅ9Ð3CPé™µØ½…	NlIu*hßw¹è\"ûë>«\"h¶ÀâˆKÐ›õ!ÜÛ°Ö!	R4*		šLš< ‰oc†\$Â¿^;óØwéÅ„¨C	\0‚Öñ#«‚VéÉ\rö”í;Å‹^…Tnb#Ùlúûxåê<)N<SEÓj7œÊ‹Ué™…}mã@ô¾¨¥¯ËÓDD§4¬™Tå8“úV{éÙ¨.>Ñ®{xˆ¡«ß»¤Ï¢ü>þK»øÍ-2K—íTÊ÷B\0’§S1Iø?aÇüVAì†ê«ÑÏÀVÝ\0	?Ï)¿Gjˆòx¶öÏÄÿFæü¯xú|D•\0pü&Ž\$¯ÈTïÌ*ý!}fÁ¯@ÝOÆÿpüíÓÉF÷*ö5¦N]ç.¶@î#/˜Æfb†¤Í\"ÂY\"FBp\\ï#bíú“\$¸’¢\n–Ã@Ð\nyÁj=	ZU‚Uˆ†Kphkðá…ZEÂ…	ÚïOÀ?p(*Pd-Áv>CVM-D>	xÖD„±/6iMèÍ‰”.dpÃ:çjþ•câHõ¢44mØÎ©hE‰r™ÐÄt#Lî\$\r\r¦ŽZmÁÒcBÿ\$|Óˆ¸Ð(1”æ¶ý‘æº\"Ïj–ÝhjÆÚ-mâ†ÎFÑ9„H&,jšQDä\$LÖˆ.v©„úï†zqZÞNF–©d6ïªh%J\\Ò¢†®DjŽÆh+ÖY\$'£\$yÄ})l#ÄBNOÝâ¨#CLJ	“ìä0ñ°+Q¶jlŸCnÚ1Â{#Ó‡æˆFåëêH‘«qw‚·±XäðåÎMè(pŒ¨B£F“\0P°lÂ\$ªö1ÆË(†ÑçüÕM%q;-åE\r’€%‰ê@ÏæyÊNWÅFÔIO¥c\"’Õ*Ì°ò5±ì#éb‚¨&ÕRM\"-/QBÔŽÔnüÍÙÒvˆ&ÃW„€’(elW€S„dÒ…BGÃ*¹†m\nÜ1àNæ²BÍ/šHr_²•O—*1fÿR¬¸ðÈíãN¤ÈŒG,.µ,r’§2Ì±²¤‚ò¨DÉˆÑœWMhî2á+Òç%­ò ÿ2É/îùŽ‰&dèòªé!%ñ'R(=3\"Å) “*Å²íÒC2Å3î‘4SÊNù%3J×DTÊ¤3d|ÚªÊˆLÓÂ®.¢V*«œ¾Á%¥P©'L¯Ã,?\$6ki73m ÎÂv¦_+.XæRkò¬¤2XB ªñÊÛój2\nî˜N’’ê«Ón¬ä¼.ÈR K3³RP“@iLZç0àEG©‘^ÊÎzÐlÏ)ó]6r\0ç‚\0¿†”ãÓG&0.ãt7s1\"MÝ1ò˜ã¹#RPÒ)6R„Ôæ‘A®?\rNíÓZˆ‘4¯4F…¯A2Ë1ôN+´E'ô(S7.î|MPçErÔ“^ÔÓ¦It\\v%\0ÊatUï†‡z`\$)¬èƒ¢èO\r•\0%ZR„§Ô¢~ŒÚ!Ä.ƒ³+näh4'2'DÍgKÒá'ÒŽ¼ôi(a?L²ÞîtÑ*R€Ô­©&Sú†thXuæ¬åhÔó©LÔàhNö\$ÎüZtòÎ÷GõCs§MÓ	Pqð ê’“Ïó9åX.*¦ª®ªÕòÏ¤¼ªtÂÔ1WNÐÔ.°|¥AIõE5´/N´Tô ©¤TÅ°°Ta&WTÔý0å<U=UJÈ°4uPÄÛµU5kT)/Rs‡Ds3LsnâBÒƒ6W´jz¦ñXµjÐnÎ¦Q5GDµ§\\b½ESTÁE]åF_õc[NZ¾4UÕ†sw]Äê2m{DpRÔ’ð+\nV¥\\³54¶M¯5–Dsû3aee–^¯CJ¤*Js°D¹-Õ\"ËìJT†çBü‚¨4jWÔÓ1ÚÙªûFÁP*8ùRõim	4¨ý²¿-²´£“Ý,ö_gpª²å~šV06D–c~nå=…jYpÃ>Â?öxg­§µ kÉªšåâ#È€ê# ¦ clƒ»lö]NQiWoÜþ¤‡gÑ)IiS‡g6ñAV—E<þ@hÞ\r€Vé\raXk30ST­;U,=VãWÄÔ'M\rNÀŒÂF9lç.J(À€ª\n€Œ pðf>B\0ÎÿïÞøòÖ5\\7Â<…Ì§\$Xõ÷`û´-v…2Î±ýwewO¸–ó^}v×‚ü¯çBd¹ˆ÷ZˆÓwÍçG ›u`Ì\$&Ež7BSÃêD¤=¥9)a—n5e”“÷~ëI„Ýâmracrµ·0i¢2qšÝòfp†þ)&ë<Hjÿ 	Œ´\$#€¸c…è9¸<‡ÚÖ©0>­R¯Å¢íÍzÎG75r1\$6i=\"‘G¨qƒ–ŠS-]SP§4¸G?d3W7Â)­Ó–?Zx5ØM*IIBV¥®Aq„Ô\$ö>îèdfQo˜‚C4:ã«æ#APgÔ\0ìSr™“õzáÔa \nL»ñ”ÜcÔ¼k¨ÕhŒK¢+§Gtæ-Ô5Óîq&ˆ*.áŠö@\nÀÂ`ê ÚÌ˜Šª}‚¶¦L§ú0}’žÕ£êá5L²˜íÐ\\àÍÇ¤7’ŒïN¬òÎCýG1\n>Õ\r##¹“1“dÊPÐB×ÍSµ”ÄøRg&·*¤Æ5Óˆ*Äÿ_Â4f@";break;case"vi":$f="Bp®”&á†³‚š *ó(J.™„0Q,ÐÃZŒâ¤)vƒŽ@Tf™\nípj£pº*ÃV˜ÍÃC`á]¦ÌrY<•#\$b\$L2–€@%9¥ÅIÄô×ŒÆÎ“„œ§4Ë…€¡€Äd3\rFÃqÀät9N1 QŠE3Ú¡±hÄj[—J;±ºŠo—ç\nÓ(©Ubµ´da¬®ÆIÂ¾Ri¦Då\0\0A)÷XÞ8@q:žg!ÏC½_#yÃÌ¸™6:‚¶ëÑÚ‹Ì.—òŠšíK;×.ð€¢™„ìi¶n÷»øì¬ÛÀ€ðÁEƒ{\rB\n'î¹»Ší_ÌÁˆ2œka§‚!W¹&Asv6Î'HáÈÞÆ»ÉÛä÷ ÉvO„IvL®Ã˜Â:‡J8æ¥©©B‚a”kºjÈ!ªpK(«0³N)b()Á7&hÐÐb,+]’/ÄP!\0Ï“ P›k¼<ÈH\n3°Ã|•/Ð\"1‚'\0\0P¦¦‹RÙ!”1êdœì2V‚#I²pN¾¦ï&	¨	Zþ)è	RÜˆf1B‰§CÖË\r‘9Ü˜„ˆA¯¯™Z8B<NË(4=9%3÷.—sd|4Ê Px¡Ê3¡Ð:ƒ€æáxïW…ÃÈ6º(ä\rãÎŒ£ux<•èæ4¿áxDŽ5ÐÊ:T¢øÄ6J£XD	#hà6£mz:xÂBR-–4\rã\"87„¨æ2„˜¢&\r6\n\\,[/S*Ë³2Õ‚h	KŽFt†Æì @§Ž´I†V\rÏC”Ø-òcë!×0Ä<Ø!@æÃïÐèÝIÊÄ>‹—I¢`™0Ô’¤œEql¶•6?ƒ°Â6£+·lÃð\nœ)ØÝ•0ÉÁ*»#Å*an¸Öà—ìRôR¿—évTÊDÜ°EÑ^”Í¤N»(]>lNM¤š‘Ää4È	 íI/+|´¢ÊÙt&\n#©†T¿ƒ£ºP ‹t¼¯on´Í\rŠl­w	€Pñž\rÃ41î\\J¤‚¦\"r¬?;(hÉ æ™[,*˜]XÑÖã¥ÕþþàIßEÒ\\T]µëR‚Ò”N¥ÔîíÄ]¶?×”7Cb¶sÔùÞÏ5ð“7=—iË±Y ä#{5dÝƒxÌ3P#pÊ¥ÜŽö>Ð qñ†Z¢c\nH:(©\"žÈKá§pIí7 ` \"â‘ÓÒäJÃù3@•s&q•\$¹!¡–žN×-\rÑ ŒþCL	hõ)BR’‰ bDâÍ‘t*Ã©.P©ŽÑBÁÿä¸(€Ò™Ê  :ç<¦“´.†O˜¿©9á\"ÊŒÛÇ…åb'\$è|Ó»YŠdþ6âZü\nTJ‘S*…T«r°VJÑ÷+ur®Õê¿X!¹a¬UŽHgYk5g­¦aÏI\$Ê\$†Õº·ÝASkÝ«	\"‹ÃA.=Í øŸ2Fã™¡Î>’ÓiÐ @rq\"§Ô~‹a €\$ººt-ÏàP	@š54G„¹ý'd™.‚Rßë\\…¾?  ‚‹\\+öVH°uLH.\0¢¡ìš…Ø£?œ¶Ô•QÁýœt»R~”\nÅ•D\\TœCü~ñy†pÔ€Ã€RK‚I/˜õ•Ìƒyü]a¹sÐÒÐHe5ŒþcüuÂ\n³V¡Èš+Ò\nzë—´@8K‚\"÷P&dŸBˆKxP	áL*@#½ÉÌg	VI—¶œÉÉ™œèž‰—-ÉÜÖQ•Kö•DFrT´P’B‘?Ìüç•0:Iy>qIé*%‡©7`Œ%á¾(Ð´]M*Ôºª{9)ú•((rÏd\\Ê‡Ç‘ÕRÚÄR*1d’jM*Øœì ˆ'y3V6¬~ÜØa:ç%¨SõY©†DBì„&1v#Xk1'`á(Ä@ja¬EY€’ÆGjùlµ‘°ÉPÑ)Ü±Žì&LÚðî½‰íä]ˆ»¤Ñ´\0‚Þ4Was.\nSJ¤Ì9¥‹H/íeOK!	¨ZÒhJ‘¯ÁH2­pÒÃtXŒ6\"ÄzÆôÐ’)n]KÀÊ°ë¾Llbþz­ÁL÷ìÝS®›eYqiQÛ÷l‰y1¨\$Ô›“’Ój0ddâÐ¸|s`m(oý¤L2PäI4½*ÙN(ôW1Ï¡ÜÅ°“fEØeYq©1+N35ìü]ãôqÑÕ›* *á&ríN~03×ÔJÃ–Ë+Â\$¸Èñ'K.“W/š‚E“‚.JÍ%€ ¤ù¯Sî\"ˆÝÁòLÃiKÚ¥orç=É:ÓjoA*@‚ÂDÅ’Œ>ƒ7BH˜uÁ\\¬É&‹Æ(D‡ö!v·N>‚€€‚D’I“uLwT³½Ç#P\$·“<(ŸK²-8DQê’5rH³@ ñ\nÉ\"H*æ®Kì’íFA´þ(Ô\$Îá¦2H»ˆ&d¨¿Y«×Ùº\r*ÐþàîE}_B´½†ãÖ®Ð¦¹\"{®ÕÆ+‰q¦ ¥\r´¢²²²M=¢BFL92”Íþî+LDy2ãÝ¯QR™8eØ§ØM2ˆÑ.îÇúÃPÓ„Hn‘tŒ9\"·XÆ\nPÊ»Tx…ï4\$K(aÐH–”XpéÌaáˆ\r³-ìâ®7/%ÒË\\‰réÜúè„ná”À(êJJ3Í2÷±\\YùÂ%&âafÕMËB.•µ\"Ká¨ŠÖ—äFbèX–ÎÎ(ˆ%G‘igªIÞÑ«ë(QÝ¼7‘rÇÞÝ;\nõ®a\r¶VÈ™œdƒÜ‚ÏäÜJ.-º–9ÝPýÁçý‹¡rÔ3Òpc·œá•|ýèüñ4éMÐ]Ié.=7{Ø‹Øzgcˆ`ß©#¾­Ô‘?pK‚>Dº³kp3üsˆe>î+{Ýzduù‹¯dkÅ\\>ìy‡Ò¦ÿRx1#ÓÎA¯%Ä[éå_»Ó~ÿ…ê.ÂMO“Ê\$IÝjÌ\n]á)ç¼‹ºo`óîÊ¹>×Ipño©)î© k/ìþDþ{eõC®&I|þê\\8¢ªª„<ü¶üÆDépeLù¡vt6:Ïæcâ,ÆÈ²©ï¼ü÷0NaFókŠûÆD0` ÑlB‹žanõ.^zìê_ojs@õ£“g\$ö®¥O÷	lž(p“	ìîÏ§be¨Ô,tãø×AN7 –Ëãª`d’n>\"ÇýFHh‡†-\nöøï“¯y\"I…k	‹ŸGÜ~îõ­²1P>’/Z«N\$¬zÑp¬Ô4ïdöì0fì\"ö\0ì5d¦§‹)N‚¹u	£ ‡®/`äb‡dz²‘äÛ‹)èŸbÕJnÎÈiŒý\nîäð¨†‡²P\níñyÄöÿËdIQNÈq±Q•+Ÿ¦Â C‰=\"ñ¤IG6MbHGå:Î²a­Y\$ÒÂ¥4>Ï¢Õ‘PÏñÐÐ1ÖæOK	±ÏÊÈMè8HŒ¦oh”ÀOìi+L_ÂP5~5ƒ¨bw ƒVa­F½C²»&ÚŽŒC#Öâh†9€Â®	èQ‚â!w\"Ä„ æX*9\$kÒ]C˜Z\0ì]’L’PÔiV>\rìù‘CÀœ>aJ €†-\0Ù~jh–¿ä~ïŽÄeÂA(àïü\$Œï\nn/NÚ4¤BNÂ\n ¨ÀZ`°âPªÈÕQƒŠî.‚¢S@|ÂÏe\n'z¤ªBšQQoô/Át¡L‡(ÏUÅ7(f6‚\\„g¨¶†ª6d”Q…è„Nu-1†pÆø¸2`ìÊy¬¬ìBU¤ï¢én†°rýGó#G\r0¯'¦é’&Þðhç®ŠH˜n¢GH7BÇr|(Ð|ÆêžLÁXiÆ lÊê¥‚ÐÓ©'sVCç¬ÚÁ~ëcxë£Î	j€&’1Åó:ì¨L*¨‹<ñŒƒ#Ñ…8Ä¶¦’Í|IŒò¹fÎ&–-Sn7€íâ¬¨L„DDlÈk<ã\n	Œ•ðÌ=¤Bwå\$¦Ø §¬®s°{‰”@+_@Ðp'ò14Éëqa«,–é ä\$²¿Ã:S5dgÌÄÃCF* ";break;case"zh":$f="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªX,#!˜Ðj6Ž §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdÞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükžó{¾”òf“qŸw¹ß-œ×ü\n–2‹Œ #*«B!@éL©N…zµÐ¨@F«÷:QQãW­àÏs¡~™r.“ndJ¥ÊX’¨ËŠ;.ÚM(ìbx¦¥¹dè*Œb KœåaLŒ–K#Üs¹ÎX—g)<·Ì<&Â©q>så±ÒK–ˆÁtF>ÄÙÊDË!zH¸\$âÐC”*r“eñÊ^”Né.º=ç9f]¸(r\\§‘E	ÊLÉ°Ü:„‘«A^Cå–°ìJ\n]k!3—¤«vs„	Ï5Èópx0²#Ê3¡Ð:ƒ€æáxïC…ÃÈ6¹ƒ(ä\rãÎŒ£u(<5cpæ4ô°DÒ4Ê:O¢ûf0ÃXD	#hàÏ´¨èã|£4u‹Z7Œ#L9²¢˜¢&\r-[jtIÌE•1+Å%¤Á|s”…Ó‚IœÄñÛÇ1(\\9\r\"Öå½p.ªQ`r—eÕ3!õì&tIdnK¬‘EeAÒC‘OU¤QPr”DõþGB\$ö0Ž£`èÃØ:Œ U‘eY‘ù{gcDÝÆH	i Nå¤’“—g1¡—¤iÎ^•ÉiÀXcÀ§ç/AÈ‘Šx—‡5¥jO!Ç8)P€GÂ6\"6T\r›*9Œu@a	‡)\"oøIœ¥ãÒr6íÍÍoÝìQË4meÉÌTJÅæÆ×nçºá›lÏlÄÐSLg1:AéRñxêñG)³ïau&L–~þ–î›.udÙeH‰LkT,¨Þ3ÃeÚœ×éÒJ=\" ÞÌ\rµ@ò´Ðê1Œmæ3b!\0Ø7Œî`æ4ƒ—n0Œã˜yá-{F\rÃ«VaOXÂÄ¤@@!ŠbŒ\$å!ÎD‘ŠµþF¤—YHÙ	ªêr‘¤¬×væ–Eì`¦ï”àn4YaŠˆb4>/­ö§4Øý‹¸M!ÌÕ‡#3Ã˜wR*ô2‡€àSÐdÀ;§”öŸSúPjC‡u¢ÔjR*MJ©u2¦Ôè/SæÅQ*@D©ƒb¨UJ±W+d­²¸\nè4+Å}Ãk2«Ì¨çj•‘µáÎ@!Ê/Ä(é\"ìt\n!VBEyí.Ä°säò\0-åÄN,¡(+Ó‚r'@€(€ #ÿHb>4žâ\"\n9()î	Qã…jf1ƒ [XK‰20\$Ô›“‘„Ç0®«9…•cÈ-Ø@ž`¢\\À’DÃË£¥^™v&°r½5¦¼' âÆ   ÁÈ7†Ð@a„X‚ÆµJ‚\0ÆðÖ¤5ÆŒ8<ÀÊmI‹‡=…\0žÂ¤€L¦(«8áPD‹~C…è@YS*âPé¬Éš5æÀ)aŽ2\rfw†¢  A¤3‚¹0Œñ•3©à#HþªèiUÊE‰ÅI‡1AÀFQG–H%{5Â+\nñr‚xNT(@‚-(¥A\"„À‹L@­ò„Z¥ÂÐ#ÄÎ§Ã¤J‹öÞ)˜ÒÉŒTœë’è#™€0D`\\¢*.ê ‹ªåS‹³ÀØ¤hˆoÍ¼I¡\$Îùá¬i Æ1·;ZÓK‘oSË£QÎ*Z÷rƒ”G‰†YQÒ	Œ)U^ZÈt€\$<Ñ¾zÄ'b‘\"ðF>C×£èP(\\&¨à·²AÌî‹wÚKi å¤Çt…0Ò˜ÈC˜¡Áë1—þgÃ«‡v´ž!Ò'Dó­­íÍÈ%CKµá•^™ÐÊÏâ\\–±&²¦Ê››BÝ[ì¤Q]rZ.„dktPvâKEº!B€˜Ò(ÍW¦¯‚E+žúääÅ=ò}÷Ô´	±tA„Ðébøsã^Û#µ-»S‘!]ëË=?'`”9Uá}íT¼*†¿QÁ¤Ñ:Dôeƒ|·4áÂŠ\\ÇX'Å)ä»®=×‰•âx Æõ<–ãd=O Õ@W‰XôBâ]#‹Ê\$Äj\nÑÖ{>XÊ*òO1™!Ã|+îêLˆœ‚(_IwË9 ,EÄæ w´ˆ,”òB(\nQ=)µW;åqÎá#R\n¸Å¥6\n•’À\n\ná”1hd«}s ¶³§ØHTý\"ÚH”(°[Q'0­ebìB´e¦µq©äå G.1†G0¸Œ'„¼¢ø`Wðƒ¾ÕœïUú–9ïfC˜M‹GÛ¯ö	w€•Dêì\\‚vV¼·©3a]•Ïµ6Š\råÉ—Y&üÄ‚]ºã˜Iˆæ4.ÄÁ6ƒ”@Ãº¸ÄbÖ_HwŽ]ã½w>Ý›ºmk·u…ä%—rë¡ôC½¼‡¨•]\niZ7	£iUúá°Ÿ\\öKœ_lß~8½vþnUÒ²l*ÑÅœËväÛmÉ\\NU¶y.òLX8Õƒ°ƒoù\\tsXÕ‘ÕíOÊù7'å;¯O\rí¤;T_Ý¡sÒ¯+Û@Åæ«À½Ç(’›ò~±#!¶š:ìpBzÙ:oÜ}À’¦*:å#ëÂ K‘ø¿cr@¢àUpNtHÈ”à§ºOV>ÁÐ„k£×¹š÷Êå9ha2­{ñAeÈ—\nãH¼¯iÝ/7Ñöç™\\ˆK–.ßD‘|·'<8L¦tÎë	GRr^À”—~EíîÜ÷\r”˜ÒÈ.ÖÀJB½»Šê \"XÍ Þ¨	ê·X­ÁõãzåÎT>žæ~É}ŽrÎLg\"qÌ|Ã·\r„=ÏÝÿ“‰ßÏ^¿ðBlOvÎÅzK9^þÉvó¯öæšúïôîÃ\0%¾ÿÎèý/û\0eðùî|ÍæoøÞNOm\0ÁrþÂÜÃ\"õ0¾+æ¾¯¬[ð@¿d±pJ¾Oî+øýËó-Ó„^F/vÿÌKAop3P&Ã0v.à‚`Ð¹Žpú†zÀªÄpâÐA>«ìn;jì¯üjÄÔJ<)äp-\n\"l\"Œ·cƒ\nä’‚H(QÊ26 è«H\nh‚2Ò5PÙ\n.øÙÊøÉ]azÉÌ 1€†€ä\r€V™ë\r`@Sªb¦.5‡hW€ÒÇnX£jÊ‰pØb`ÄŠh\n ¨ÀZ\0@R ÇÃš6¬ÈJÎç0OÂ#B8ªÜYƒÈÆ%Ò	±¸aÐ!(mâ-V8Íl/£æQ„9ÀŒpÃ­fßjÚ!j·ä’“ÜÀ˜\rå9ƒ*\0\r¥\"2£R6\"Z!\0.E®[\$|Ùmd,­ºñHzŠ®ÛXIž´ö®@ÛM¦ÛÂî\nƒd3ãF2Pá)š\ràà±E¶DºŽ²F<\\®ÞI„ÆN»†ü-ÜÌoÎ¨âÈà+\$.ÂÃÄ^C-,ü ¬ Æ ê\r¢0‚¤,Ýå²¼!ÌqÎÆ¸&\$ºÖ!ÃÇj®FåÖ­:Á®Š»&™	©Ï.zhNíäàëÂ„`@	\0t	 š@¦\n`";break;case"zh-tw":$f="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ðj6Ž1uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ða;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAÐÂbÒ¥¨E•E1»ÞÔ£Êg:åxç]#0, (§˜4›Œü\r÷ñˆÅG‘qäZ†–¢SÅ )ÐªOLP\0¨ýÎ”«:}µï»áÚr¢òå´yZî¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ª²*‰.Ocê÷°D\nt”\$ñÊO-Ç1*\\CJY.R®DùÌLGI,I½ŽIÒ@H‹–Å‘Ð[°§)r_ «ÂK¯oŠì¼')tUœå™w/ax].J2«¥Áft(qÊWÈÐº®ëÌ¤U¢äÉv—ªY`\\…É\nsÎS ,°ä2ŒÁèD4ƒ à9‡Ax^;ÒpÂ2\r®ˆÊ9Ãxä3…ã(ÝN\r€Ü9#}>5#\r62Ž”0¾Ü#pÖÂHÚ84ƒm<:xÂAíEtÙ\rã#RÕŽlÐ¦(‰ƒK`Ý\$	qód D…yÎRPa s-¯a~WÄ¡r’GALKI·ÉsZËÍÚë±\$ñÒPOdÙ\\‡ØÃòØ˜S%Û,N·&%ÙÐS”o1U¤Y+hÄÌP\"Pƒê6\0ì0ƒ¨ËlZV¢ZC—±Qqld1ÊH\nY N(KqÈ]—g1GÇÇ9{}œÄq%)öÁ2¨ÅPQŠÅÁ7§‰ò\nƒ-B\$©o)Én\$€€P•KpÍcbçY‡)\"^æï)ÌD’q²Ür·õÝr—7Œ£)ïw„Ÿy/–õÁ»—vëç¿I¼5Ã¿Mç1<[pêYX§©iWÏÇ/6råÒ[Äœü_½/7O7õSoPTqËu£i’d8ŽL“(ULÐÞ3Ãe,ÝO“ŸCª\rìèÛX!\0ëQŽ£ÆÓŽc66\rƒxÎèŽacR9y£Î0º!ÊØÔ¨Ü:àˆŒÅDBib˜¤#Xã]<¿>DYÒ!Äi×O‚ñ“ø9D°®B\" Ÿ¡>ñ]\0º2!Mê*PÜ ²Z\"9Áÿ_ü0ð@BŠS\"Cs6ÈÏBæÔÒÆjÁÀ4¨0È€PJC(…£rêIJ)e0¦”âžT\n‰R*`^ª\r²«U ‰W†Åb¬Õª·W*í^«õ‚hX«0ôù˜èpRï,7+³uœM‚ã”_¢1@\"@¢c”JÀóàdHÁ@¨ ´c‰fâí\$®Q^9„x´~a@\$„*AH0BÁR`‰ÀJ¿\"j9„0‘¶Q³Ì-‘Ä¸˜'æ†‡0®¬©ÿ”IN'?(%þ5ê9DP B¸\$†`@]Ød\r+Î1Õ’–1²6€A‡E\n\0fA¼6‚\0ƒcl,6Jx7²²MI³5ÁñStxS\n€È\nF PóMe\nU:qÌ\"b\"˜ó&/¿2b+H1˜’¸É™VÕÍcÙRnð ÒÁË	“„Ñ™£D B0T\nòl>en¦˜êÎœ3Žr¬äfTÁ-‚Xrá:Dhµ)b€P”\$~Âp \n¡@\"¨@UH\"„À‹SÒ[/Gã”Gˆ6UV‡92[\ri®2Ap½Ä)†;xíÃ¼x	Ñg°\\ºäEÅ8»<„^RJaä™‘°í\nŸ“Æ&E!‘vkRÁº7\"ìjd£œH&‘P\"Ú!ùIŽ¤t\náÊˆ¸‹˜B–à¤UÀimAÒðæ9ÄHˆ.B°†	¢Ö\0ƒrRKH93!dâÁN5èFBŠ.­©H[\0ë˜1Ÿ‡5D¨Îµ(.Ð¦CÓ#s8>ÆG\r c6ðØsË _tî4Z­òÛ	Íz—\r,‚ìUŒhƒ(w)b©t®µÚãHç‚ˆr‹Ä”9|ÀXÊ|9…Ð\"ëé‰—.kTÇ§töŸÔÌ)ÅÄ©~Ç:[!ˆ1\$ÉÝ<¢1\0(Öñæˆ±ãÝyZ-a³é¢ŽAtvÅØ¶º…çŸ3ÚˆB\"U8*†Þ¾FÞ(36æ±¬Âû¡Ì'Å(è\"Šžñ>:\\Ùç<¯ ð@¿y-âÜÇåüÃ˜ÂxKƒÏ ÇÕÃö/EˆéâþD6ÜÜØ¤«Žs9˜ô2…W».¤rèÑB#zÆ@(0f!D†t°ŒK5J±ÙÆÃû'8’gªŠi:ÕÐds‹a'cØˆ‹êØ–Òî#*ÚÖ\r\n96\0œKÂ¡	‹…¥s¦—Ù¬œ]f‰.ºÂ´QÑˆÅ\nÚ[›[5> L. B±pˆìA0&\rÎQP:Dñ;|Šè3®,5{ƒ#˜M‹C¯Z:úÑâÉz®¾¦Y,ÖšÛ€ØŒ\0_ewƒ8!w‹›zà:ãóºä›X+¨G-@\$(z-å—ÝÖÁ‘Aáæ§¯š^mÊÏ2%¼‹®lÊ¤åH‘s›5'šË[BšP’Ñ #k\nY°pgŠØ™]a\nômõjÁð±Êé3®Mü/‘¸.Õ`zý…<G“‹»ÍÚ,‡ vµÃöÎŠß{×vëâGˆôáŽ¬Êà‡=†CÀ4‚Ðs¹Ø‚O)õ@½ûŽù|9æ»½óÞf ™9„	ñú¢HåaAP”}Tu^â —yÂQ`9DÕ¿tÆŠ£°õÞÁ\rêßeäJ\0@]2<%9R ½]«ãûB¥ðPÎô•„®O_Åð¾1N@ýt4{ß×Bê]…ó³yQIúo÷ìî&÷¼×Æ8—õ¿Ÿ©vùKÌÇÌ€Ï8o\0fðþnÎ±ð\nÈ/LïðÈPÄÐ[,³ÂpÁ:!ÁÌæŠø\"Š'Á|†ðBÏÌë¯Ç\\Â¢RïBÄÐ[ðó¦P´Ú(6ÇLŠ³nEpz^â|*P^%¡6DÂD÷ÎœîKÌ³#õ)ŒÇ‹5as	Á/¦ù\nÐ{Oü<”p Îq	]0¿0ÇïÜalB,nKð©\rŒRÿNïå\rÍ…àÅðÄ\"qpù\râ¬FdjFäs\0000Ôÿä>>’°¨ÈñDPÃCÉ\\	R\rì\"ë.h‚–ËdrçFJöÍ6\0 œg¦Ž P4àRŸˆôAÛmºHZ¡F¢.z%ÁbÓ(0@B.±fÛ€…TRà@…C^­R\nh¬31–6ÀéÅøÓnßÁ?a1\"Ðc\"`è@ØiÜµ@ÖL£†>d#byEŠ\r Ìy¥œ7@Œ¤¨ÁÆ:C4| ª\n€Œ p<qâ:Ctë‡>„¬øÒéF#B8±gjÌD„ïQ1æ[.ÐÝ\rä9ƒƒ–Þ„vÆÚÃr±MŒ)i€°F;…î-F\rå&:#¦	’h}%43C\\6Â–+F.gÆÂàmÞâÊâîz*å)N2ïN&ÖñnrüÍjb„Z²¤ýÃ\"\nƒn4ƒP2ñ¥‰Ø\rààµ…*»(nÈg^õp@ÿoâLª°aÌffj%¬å’Üê*Êù†&¬Ž§-ÒÚ¡,\"Ìë\0¬ Æ ê\r²X\0g<ÎtrL\$]ì]Ò\\-ÜObÊ<Òš®Cò1\nÂk#4jò<Ò«*ð´h!%‚Áê#„lG\0	\0t	 š@¦\n`";break;}$Ih=array();foreach(explode("\n",lzw_decompress($f))as$X)$Ih[]=(strpos($X,"\t")?explode("\t",$X):$X);return$Ih;}if(!$Ih){$Ih=get_translations($ca);$_SESSION["translations"]=$Ih;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Ef=array_search("SQL",$b->operators);if($Ef!==false)unset($b->operators[$Ef]);}function
dsn($dc,$V,$G){try{parent::__construct($dc,$V,$G);}catch(Exception$vc){auth_error(h($vc->getMessage()));}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=@$this->getAttribute(4);}function
query($H,$Sh=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$o];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Yb=array();class
Min_SQL{var$_conn;function
__construct($g){$this->_conn=$g;}function
select($R,$M,$Z,$cd,$df=array(),$z=1,$E=0,$Mf=false){global$b,$x;$Ed=(count($cd)<count($M));$H=$b->selectQueryBuild($M,$Z,$cd,$df,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$cd&&$Ed&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($R),($Z?"\nWHERE ".implode(" AND ",$Z):"").($cd&&$Ed?"\nGROUP BY ".implode(", ",$cd):"").($df?"\nORDER BY ".implode(", ",$df):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$Vg=microtime(true);$J=$this->_conn->query($H);if($Mf)echo$b->selectQuery($H,format_time($Vg));return$J;}function
delete($R,$Vf,$z=0){$H="FROM ".table($R);return
queries("DELETE".($z?limit1($H,$Vf):" $H$Vf"));}function
update($R,$O,$Vf,$z=0,$Dg="\n"){$ji=array();foreach($O
as$y=>$X)$ji[]="$y = $X";$H=table($R)." SET$Dg".implode(",$Dg",$ji);return
queries("UPDATE".($z?limit1($H,$Vf):" $H$Vf"));}function
insert($R,$O){return
queries("INSERT INTO ".table($R).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($R,$L,$Kf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Yb["sqlite"]="SQLite 3";$Yb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Hf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
__construct($Kc){$this->_link=new
SQLite3($Kc);$mi=$this->_link->version();$this->server_info=$mi["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$d=$this->_offset++;$U=$this->_result->columnType($d);return(object)array("name"=>$this->_result->columnName($d),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
__construct($Kc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Kc);}function
query($H,$Sh=false){$ye=($Sh?"unbufferedQuery":"query");$I=@$this->_link->$ye($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$y=>$X)$J[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$Af='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Af\\.)?$Af\$~",$C,$B)){$R=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
__construct($Kc){$this->dsn(DRIVER.":$Kc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
__construct(){parent::__construct(":memory:");}function
select_db($Kc){if(is_readable($Kc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Kc)?$Kc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Kc")." AS a")){parent::__construct($Kc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Kf){$ji=array();foreach($L
as$O)$ji[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$ji));}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$Dg=" "){return" $H$Z".($z!==null?$Dg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($m,$ob){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){global$g;$J=array();$Kf="";foreach(get_rows("PRAGMA table_info(".table($R).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Mb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Mb,$B)?str_replace("''","'",$B[1]):($Mb=="NULL"?null:$Mb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($Kf!="")$J[$Kf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$Kf=$C;}}$Tg=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Tg,$ke,PREG_SET_ORDER);foreach($ke
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Tg=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Tg,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$ke,PREG_SET_ORDER);foreach($ke
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($R)as$C=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$Ug=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($R),$h);foreach(get_rows("PRAGMA index_list(".table($R).")",$h)as$K){$C=$K["name"];$v=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$v["lengths"]=array();$v["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$ug){$v["columns"][]=$ug["name"];$v["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($R),'~').' \((.*)\)$~i',$Ug[$C],$gg)){preg_match_all('/("[^"]*+")+( DESC)?/',$gg[2],$ke);foreach($ke[2]as$y=>$X){if($X)$v["descs"][$y]='1';}}if(!$J[""]||$v["type"]!="UNIQUE"||$v["columns"]!=$J[""]["columns"]||$v["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$v;}return$J;}function
foreign_keys($R){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$K){$q=&$J[$K["id"]];if(!$q)$q=$K;$q["source"][]=$K["from"];$q["target"][]=$K["to"];}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$Dc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Dc)\$~",$C)){$g->error=lang(21,str_replace("|",", ",$Dc));return
false;}return
true;}function
create_database($m,$nb){global$g;if(file_exists($m)){$g->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$vc){$g->error=$vc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$g;$g->__construct(":memory:");foreach($l
as$m){if(!@unlink($m)){$g->error=lang(22);return
false;}}return
true;}function
rename_database($C,$nb){global$g;if(!check_sqlite_name($C))return
false;$g->__construct(":memory:");$g->error=lang(22);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){$di=($R==""||$Rc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$di=true;break;}}$c=array();$mf=array();foreach($p
as$o){if($o[1]){$c[]=($di?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$mf[$o[0]]=$o[1][0];}}if(!$di){foreach($c
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($R,$C,$c,$mf,$Rc))return
false;if($La)queries("UPDATE sqlite_sequence SET seq = $La WHERE name = ".q($C));return
true;}function
recreate_table($R,$C,$p,$mf,$Rc,$w=array()){if($R!=""){if(!$p){foreach(fields($R)as$y=>$o){$p[]=process_field($o,$o);$mf[$y]=idf_escape($y);}}$Lf=false;foreach($p
as$o){if($o[6])$Lf=true;}$bc=array();foreach($w
as$y=>$X){if($X[2]=="DROP"){$bc[$X[1]]=true;unset($w[$y]);}}foreach(indexes($R)as$Nd=>$v){$e=array();foreach($v["columns"]as$y=>$d){if(!$mf[$d])continue
2;$e[]=$mf[$d].($v["descs"][$y]?" DESC":"");}if(!$bc[$Nd]){if($v["type"]!="PRIMARY"||!$Lf)$w[]=array($v["type"],$Nd,$e);}}foreach($w
as$y=>$X){if($X[0]=="PRIMARY"){unset($w[$y]);$Rc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($R)as$Nd=>$q){foreach($q["source"]as$y=>$d){if(!$mf[$d])continue
2;$q["source"][$y]=idf_unescape($mf[$d]);}if(!isset($Rc[" $Nd"]))$Rc[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$y=>$o)$p[$y]="  ".implode($o);$p=array_merge($p,array_filter($Rc));if(!queries("CREATE TABLE ".table($R!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($R!=""){if($mf&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$mf).") SELECT ".implode(", ",array_map('idf_escape',array_keys($mf)))." FROM ".table($R)))return
false;$Oh=array();foreach(triggers($R)as$Mh=>$xh){$Lh=trigger($Mh);$Oh[]="CREATE TRIGGER ".idf_escape($Mh)." ".implode(" ",$xh)." ON ".table($C)."\n$Lh[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$w))return
false;foreach($Oh
as$Lh){if(!queries($Lh))return
false;}queries("COMMIT");}return
true;}function
index_sql($R,$U,$C,$e){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($R."_"))." ON ".table($R)." $e";}function
alter_indexes($R,$c){foreach($c
as$Kf){if($Kf[0]=="PRIMARY")return
recreate_table($R,$R,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($oi){return
apply_queries("DROP VIEW",$oi);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$oi,$oh){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$u='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$Nh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$u\\s*(".implode("|",$Nh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($u))?\\s+ON\\s*$u\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Me=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Me?" OF":""),"Of"=>($Me[0]=='`'||$Me[0]=='"'?idf_unescape($Me):$Me),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($R){$J=array();$Nh=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$Nh["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN QUERY PLAN $H");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($yg){return
true;}function
create_sql($R,$La){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$C=>$v){if($C=='')continue;$J.=";\n\n".index_sql($R,$v['type'],$C,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$J;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($k){}function
trigger_sql($R,$Zg){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$J[$y]=$g->result("PRAGMA $y");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$af){list($y,$X)=explode("=",$af,2);$J[$y]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Gc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Gc);}$x="sqlite";$Rh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Yg=array_keys($Rh);$Yh=array();$Ye=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Zc=array("hex","length","lower","round","unixepoch","upper");$ed=array("avg","count","count distinct","group_concat","max","min","sum");$gc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Yb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Hf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($rc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$mi=pg_version($this->_link);$this->server_info=$mi["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($k){global$b;if($k==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($k,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$Sh=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$d=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$d);$J->name=pg_field_name($this->_result,$d);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$d);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$m=$b->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($k){global$b;return($b->database()==$k);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Kf){global$g;foreach($L
as$O){$Zh=array();$Z=array();foreach($O
as$y=>$X){$Zh[]="$y = $X";if(isset($Kf[idf_unescape($y)]))$Z[]="$y = $X";}if(!(($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Zh)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b,$Rh,$Yg;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){if($g->server_info>=9){$g->query("SET application_name = 'Adminer'");if($g->server_info>=9.2){$Yg[lang(23)][]="json";$Rh["json"]=4294967295;if($g->server_info>=9.4){$Yg[lang(23)][]="jsonb";$Rh["jsonb"]=4294967295;}}}return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database WHERE has_database_privilege(datname, 'CONNECT') ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$Dg=" "){return" $H$Z".($z!==null?$Dg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$ob){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){$H="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$H.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$H.="
ORDER BY 1";return
get_key_vals($H);}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT c.relname AS \"Name\", CASE c.relkind WHEN 'r' THEN 'table' WHEN 'm' THEN 'materialized view' ELSE 'view' END AS \"Engine\", pg_relation_size(c.oid) AS \"Data_length\", pg_total_relation_size(c.oid) - pg_relation_size(c.oid) AS \"Index_length\", obj_description(c.oid, 'pg_class') AS \"Comment\", c.relhasoids::int AS \"Oid\", c.reltuples as \"Rows\", n.nspname
FROM pg_class c
JOIN pg_namespace n ON(n.nspname = current_schema() AND n.oid = c.relnamespace)
WHERE relkind IN ('r', 'm', 'v')
".($C!=""?"AND relname = ".q($C):"ORDER BY c.oid"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($S){return
in_array($S["Engine"],array("view","materialized view"));}function
fk_support($S){return
true;}function
fields($R){$J=array();$Ca=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$be,$K["length"],$wa,$Fa)=$B;$K["length"].=$Fa;$cb=$U.$wa;if(isset($Ca[$cb])){$K["type"]=$Ca[$cb];$K["full_type"]=$K["type"].$be.$Fa;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$be.$wa.$Fa;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($R,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$hh=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$e=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $hh AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption , (indpred IS NOT NULL)::int as indispartial FROM pg_index i, pg_class ci WHERE i.indrelid = $hh AND ci.oid = i.indexrelid",$h)as$K){$hg=$K["relname"];$J[$hg]["type"]=($K["indispartial"]?"INDEX":($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX")));$J[$hg]["columns"]=array();foreach(explode(" ",$K["indkey"])as$ud)$J[$hg]["columns"][]=$e[$ud];$J[$hg]["descs"]=array();foreach(explode(" ",$K["indoption"])as$vd)$J[$hg]["descs"][]=($vd&1?'1':null);$J[$hg]["lengths"]=array();}return$J;}function
foreign_keys($R){global$Te;$J=array();foreach(get_rows("SELECT conname, condeferrable::int AS deferrable, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$je)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$je[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$je[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($Te)~",$B[4],$je)?$je[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Te)~",$B[4],$je)?$je[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$g;return
array("select"=>trim($g->result("SELECT pg_get_viewdef(".q($C).")")));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($m,$nb){return
queries("CREATE DATABASE ".idf_escape($m).($nb?" ENCODING ".idf_escape($nb):""));}function
drop_databases($l){global$g;$g->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($C,$nb){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){$c=array();$Uf=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $d";else{$ii=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($R!=""?"ADD ":"  ").implode($X);else{if($d!=$X[0])$Uf[]="ALTER TABLE ".table($R)." RENAME $d TO $X[0]";$c[]="ALTER $d TYPE$X[1]";if(!$X[6]){$c[]="ALTER $d ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $d ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$ii!="")$Uf[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($ii!=""?substr($ii,9):"''");}}$c=array_merge($c,$Rc);if($R=="")array_unshift($Uf,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Uf,"ALTER TABLE ".table($R)."\n".implode(",\n",$c));if($R!=""&&$R!=$C)$Uf[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);if($R!=""||$sb!="")$Uf[]="COMMENT ON TABLE ".table($C)." IS ".q($sb);if($La!=""){}foreach($Uf
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($R,$c){$i=array();$Zb=array();$Uf=array();foreach($c
as$X){if($X[0]!="INDEX")$i[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Zb[]=idf_escape($X[1]);else$Uf[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." (".implode(", ",$X[2]).")";}if($i)array_unshift($Uf,"ALTER TABLE ".table($R).implode(",",$i));if($Zb)array_unshift($Uf,"DROP INDEX ".implode(", ",$Zb));foreach($Uf
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($oi){return
drop_tables($oi);}function
drop_tables($T){foreach($T
as$R){$P=table_status($R);if(!queries("DROP ".strtoupper($P["Engine"])." ".table($R)))return
false;}return
true;}function
move_tables($T,$oi,$oh){foreach(array_merge($T,$oi)as$R){$P=table_status($R);if(!queries("ALTER ".strtoupper($P["Engine"])." ".table($R)." SET SCHEMA ".idf_escape($oh)))return
false;}return
true;}function
trigger($C,$R=null){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");if($R===null)$R=$_GET['trigger'];$L=get_rows('SELECT t.trigger_name AS "Trigger", t.action_timing AS "Timing", (SELECT STRING_AGG(event_manipulation, \' OR \') FROM information_schema.triggers WHERE event_object_table = t.event_object_table AND trigger_name = t.trigger_name ) AS "Events", t.event_manipulation AS "Event", \'FOR EACH \' || t.action_orientation AS "Type", t.action_statement AS "Statement" FROM information_schema.triggers t WHERE t.event_object_table = '.q($R).' AND t.trigger_name = '.q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$K)$J[$K["trigger_name"]]=array($K["action_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($S,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$gg))return$gg[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($xg){global$g,$Rh,$Yg;$J=$g->query("SET search_path TO ".idf_escape($xg));foreach(types()as$U){if(!isset($Rh[$U])){$Rh[$U]=0;$Yg[lang(24)][]=$U;}}return$J;}function
create_sql($R,$La){global$g;$J='';$ng=array();$Fg=array();$P=table_status($R);$p=fields($R);$w=indexes($R);ksort($w);$Pc=foreign_keys($R);ksort($Pc);$Oh=triggers($R);if(!$P||empty($p))return
false;$J="CREATE TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." (\n    ";foreach($p
as$Ic=>$o){$tf=idf_escape($o['field']).' '.$o['full_type'].(is_null($o['default'])?"":" DEFAULT $o[default]").($o['attnotnull']?" NOT NULL":"");$ng[]=$tf;if(preg_match('~nextval\(\'([^\']+)\'\)~',$o['default'],$ke)){$Eg=$ke[1];$Sg=reset(get_rows("SELECT * FROM $Eg"));$Fg[]="CREATE SEQUENCE $Eg INCREMENT $Sg[increment_by] MINVALUE $Sg[min_value] MAXVALUE $Sg[max_value] START ".($La?$Sg['last_value']:1)." CACHE $Sg[cache_value];";}}if(!empty($Fg))$J=implode("\n\n",$Fg)."\n\n$J";foreach($w
as$sd=>$v){switch($v['type']){case'UNIQUE':$ng[]="CONSTRAINT ".idf_escape($sd)." UNIQUE (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;case'PRIMARY':$ng[]="CONSTRAINT ".idf_escape($sd)." PRIMARY KEY (".implode(', ',array_map('idf_escape',$v['columns'])).")";break;}}foreach($Pc
as$Oc=>$Nc)$ng[]="CONSTRAINT ".idf_escape($Oc)." $Nc[definition] ".($Nc['deferrable']?'DEFERRABLE':'NOT DEFERRABLE');$J.=implode(",\n    ",$ng)."\n) WITH (oids = ".($P['Oid']?'true':'false').");";foreach($w
as$sd=>$v){if($v['type']=='INDEX')$J.="\n\nCREATE INDEX ".idf_escape($sd)." ON ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." USING btree (".implode(', ',array_map('idf_escape',$v['columns'])).");";}if($P['Comment'])$J.="\n\nCOMMENT ON TABLE ".idf_escape($P['nspname']).".".idf_escape($P['Name'])." IS ".q($P['Comment']).";";foreach($p
as$Ic=>$o){if($o['comment'])$J.="\n\nCOMMENT ON COLUMN ".idf_escape($P['nspname']).".".idf_escape($P['Name']).".".idf_escape($Ic)." IS ".q($o['comment']).";";}foreach($Oh
as$Kh=>$Jh){$Lh=trigger($Kh,$P['Name']);$J.="\n\nCREATE TRIGGER ".idf_escape($Lh['Trigger'])." $Lh[Timing] $Lh[Events] ON ".idf_escape($P["nspname"]).".".idf_escape($P['Name'])." $Lh[Type] $Lh[Statement];";}return
rtrim($J,';');}function
trigger_sql($R,$Zg){$J="";return
false;}function
use_sql($k){return"\connect ".idf_escape($k);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Gc){global$g;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($g->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col|kill|dump)$~',$Gc);}function
kill_process($X){return
queries("SELECT pg_terminate_backend(".number($X).")");}function
connection_id(){return"SELECT pg_backend_pid()";}function
max_connections(){global$g;return$g->result("SHOW max_connections");}$x="pgsql";$Rh=array();$Yg=array();foreach(array(lang(25)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(26)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(23)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$Rh+=$X;$Yg[$y]=array_keys($X);}$Yh=array();$Ye=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Zc=array("char_length","lower","round","to_hex","to_timestamp","upper");$ed=array("avg","count","count distinct","max","min","sum");$gc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Yb["oracle"]="Oracle";if(isset($_GET["oracle"])){$Hf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($rc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
true;}function
query($H,$Sh=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$o);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'OCI-Lob'))$K[$y]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$d=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$d);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$d);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($k){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$D=0,$Dg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$ob){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();$zg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $zg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $zg":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$be="$K[DATA_PRECISION],$K[DATA_SCALE]";if($be==",")$be=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($be?"($be)":""),"type"=>strtolower($U),"length"=>$be,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$sd=$K["INDEX_NAME"];$J[$sd]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$sd]["columns"][]=$K["COLUMN_NAME"];$J[$sd]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$sd]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){$c=$Zb=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($R!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$Zb[]=idf_escape($o[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($R)."\n".implode("\n",$c)))&&(!$Zb||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$Zb).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
foreign_keys($R){$J=array();$H="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($R);foreach(get_rows($H)as$K)$J[$K['NAME']]=array("db"=>$K['DEST_DB'],"table"=>$K['DEST_TABLE'],"source"=>array($K['SRC_COLUMN']),"target"=>array($K['DEST_COLUMN']),"on_delete"=>$K['ON_DELETE'],"on_update"=>null,);return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($oi){return
apply_queries("DROP VIEW",$oi);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($yg){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($yg));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Gc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Gc);}$x="oracle";$Rh=array();$Yg=array();foreach(array(lang(25)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(26)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(23)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$Rh+=$X;$Yg[$y]=array_keys($X);}$Yh=array();$Ye=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Zc=array("length","lower","round","upper");$ed=array("avg","count","count distinct","max","min","sum");$gc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Yb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Hf=array("SQLSRV","MSSQL","PDO_DBLIB");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$wd=sqlsrv_server_info($this->_link);$this->server_info=$wd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$Sh=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(!$I)return
false;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return$this->_result?sqlsrv_next_result($this->_result):null;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'DateTime'))$K[$y]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$o["Name"];$J->orgname=$o["Name"];$J->type=($o["Type"]==1?254:0);return$J;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return
mssql_select_db($k);}function
query($H,$Sh=false){$I=@mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result->_result);}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$o);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
__construct($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}elseif(extension_loaded("pdo_dblib")){class
Min_DB
extends
Min_PDO{var$extension="PDO_DBLIB";function
connect($N,$V,$G){$this->dsn("dblib:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
select_db($k){return$this->query("USE ".idf_escape($k));}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($R,$L,$Kf){foreach($L
as$O){$Zh=array();$Z=array();foreach($O
as$y=>$X){$Zh[]="$y = $X";if(isset($Kf[idf_unescape($y)]))$Z[]="$y = $X";}if(!queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Zh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT name FROM sys.databases WHERE name NOT IN ('master', 'tempdb', 'model', 'msdb')");}function
limit($H,$Z,$z,$D=0,$Dg=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$g;$J=array();foreach($l
as$m){$g->select_db($m);$J[$m]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$K){$U=$K["type"];$be=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($be?"($be)":""),"type"=>$U,"length"=>$be,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$h)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$nb)$J[preg_replace('~_.*~','',$nb)][]=$nb;return$J;}function
information_schema($m){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($m,$nb){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$nb)?" COLLATE $nb":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($C,$nb){if(preg_match('~^[a-z0-9_]+$~i',$nb))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $nb");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){$c=array();foreach($p
as$o){$d=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $d";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($R==""?substr($Rc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($d!=$X[0])queries("EXEC sp_rename ".q(table($R).".$d").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($Rc)$c[""]=$Rc;foreach($c
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$c){$v=array();$Zb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Zb[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$Zb||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$Zb)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($S,$Z){}function
foreign_keys($R){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$K){$q=&$J[$K["FK_NAME"]];$q["table"]=$K["PKTABLE_NAME"];$q["source"][]=$K["FKCOLUMN_NAME"];$q["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($oi){return
queries("DROP VIEW ".implode(", ",array_map('table',$oi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$oi,$oh){return
apply_queries("ALTER SCHEMA ".idf_escape($oh)." TRANSFER",array_merge($T,$oi));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($R){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($xg){return
true;}function
use_sql($k){return"USE ".idf_escape($k);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Gc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Gc);}$x="mssql";$Rh=array();$Yg=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(26)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(23)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$Rh+=$X;$Yg[$y]=array_keys($X);}$Yh=array();$Ye=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Zc=array("len","lower","round","upper");$ed=array("avg","count","count distinct","max","min","sum");$gc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Yb['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$Hf=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$bi=explode(':',$N);$this->service_link=ibase_service_attach($bi[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($k){return($k=="domain");}function
query($H,$Sh=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
false;}$this->error="";if($I===true){$this->affected_rows=ibase_affected_rows($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;$K=$I->fetch_row();return$K[$o];}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
get_databases($Qc){return
array("domain");}function
limit($H,$Z,$z,$D=0,$Dg=" "){$J='';$J.=($z!==null?$Dg."FIRST $z".($D?" SKIP $D":""):"");$J.=" $H$Z";return$J;}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){}function
engines(){return
array();}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
tables_list(){global$g;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($g->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($l){return
array();}function
table_status($C="",$Fc=false){global$g;$J=array();$Gb=tables_list();foreach($Gb
as$v=>$X){$v=trim($v);$J[$v]=array('Name'=>$v,'Engine'=>'standard',);if($C==$v)return$J[$v];}return$J;}function
is_view($S){return
false;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){global$g;$J=array();$H='SELECT r.RDB$FIELD_NAME AS field_name,
r.RDB$DESCRIPTION AS field_description,
r.RDB$DEFAULT_VALUE AS field_default_value,
r.RDB$NULL_FLAG AS field_not_null_constraint,
f.RDB$FIELD_LENGTH AS field_length,
f.RDB$FIELD_PRECISION AS field_precision,
f.RDB$FIELD_SCALE AS field_scale,
CASE f.RDB$FIELD_TYPE
WHEN 261 THEN \'BLOB\'
WHEN 14 THEN \'CHAR\'
WHEN 40 THEN \'CSTRING\'
WHEN 11 THEN \'D_FLOAT\'
WHEN 27 THEN \'DOUBLE\'
WHEN 10 THEN \'FLOAT\'
WHEN 16 THEN \'INT64\'
WHEN 8 THEN \'INTEGER\'
WHEN 9 THEN \'QUAD\'
WHEN 7 THEN \'SMALLINT\'
WHEN 12 THEN \'DATE\'
WHEN 13 THEN \'TIME\'
WHEN 35 THEN \'TIMESTAMP\'
WHEN 37 THEN \'VARCHAR\'
ELSE \'UNKNOWN\'
END AS field_type,
f.RDB$FIELD_SUB_TYPE AS field_subtype,
coll.RDB$COLLATION_NAME AS field_collation,
cset.RDB$CHARACTER_SET_NAME AS field_charset
FROM RDB$RELATION_FIELDS r
LEFT JOIN RDB$FIELDS f ON r.RDB$FIELD_SOURCE = f.RDB$FIELD_NAME
LEFT JOIN RDB$COLLATIONS coll ON f.RDB$COLLATION_ID = coll.RDB$COLLATION_ID
LEFT JOIN RDB$CHARACTER_SETS cset ON f.RDB$CHARACTER_SET_ID = cset.RDB$CHARACTER_SET_ID
WHERE r.RDB$RELATION_NAME = '.q($R).'
ORDER BY r.RDB$FIELD_POSITION';$I=ibase_query($g->_link,$H);while($K=ibase_fetch_assoc($I))$J[trim($K['FIELD_NAME'])]=array("field"=>trim($K["FIELD_NAME"]),"full_type"=>trim($K["FIELD_TYPE"]),"type"=>trim($K["FIELD_SUB_TYPE"]),"default"=>trim($K['FIELD_DEFAULT_VALUE']),"null"=>(trim($K["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($K["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($K["FIELD_DESCRIPTION"]),);return$J;}function
indexes($R,$h=null){$J=array();return$J;}function
foreign_keys($R){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$g;return
h($g->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($xg){return
true;}function
support($Gc){return
preg_match("~^(columns|sql|status|table)$~",$Gc);}$x="firebird";$Ye=array("=");$Zc=array();$ed=array();$gc=array();}$Yb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$Hf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($k){return($k=="domain");}function
query($H,$Sh=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$ch=0;foreach($I
as$Id)$ch+=$Id->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$ch,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
__construct($I){foreach($I
as$Id){$K=array();if($Id->Name!='')$K['itemName()']=(string)$Id->Name;foreach($Id->Attribute
as$Ia){$C=$this->_processValue($Ia->Name);$Y=$this->_processValue($Ia->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($jc){return(is_object($jc)&&$jc['encoding']=='base64'?base64_decode($jc):(string)$jc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Od=array_keys($this->_rows[0]);return(object)array('name'=>$Od[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Kf="itemName()";function
_chunkRequest($pd,$va,$F,$zc=array()){global$g;foreach(array_chunk($pd,25)as$gb){$rf=$F;foreach($gb
as$s=>$t){$rf["Item.$s.ItemName"]=$t;foreach($zc
as$y=>$X)$rf["Item.$s.$y"]=$X;}if(!sdb_request($va,$rf))return
false;}$g->affected_rows=count($pd);return
true;}function
_extractIds($R,$Vf,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Vf,$ke))$J=array_map('idf_unescape',$ke[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($R).$Vf.($z?" LIMIT 1":"")))as$Id)$J[]=$Id->Name;}return$J;}function
select($R,$M,$Z,$cd,$df=array(),$z=1,$E=0,$Mf=false){global$g;$g->next=$_GET["next"];$J=parent::select($R,$M,$Z,$cd,$df,$z,$E,$Mf);$g->next=0;return$J;}function
delete($R,$Vf,$z=0){return$this->_chunkRequest($this->_extractIds($R,$Vf,$z),'BatchDeleteAttributes',array('DomainName'=>$R));}function
update($R,$O,$Vf,$z=0,$Dg="\n"){$Nb=array();$_d=array();$s=0;$pd=$this->_extractIds($R,$Vf,$z);$t=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$y=>$X){$y=idf_unescape($y);if($X=="NULL"||($t!=""&&array($t)!=$pd))$Nb["Attribute.".count($Nb).".Name"]=$y;if($X!="NULL"){foreach((array)$X
as$Kd=>$W){$_d["Attribute.$s.Name"]=$y;$_d["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Kd)$_d["Attribute.$s.Replace"]="true";$s++;}}}$F=array('DomainName'=>$R);return(!$_d||$this->_chunkRequest(($t!=""?array($t):$pd),'BatchPutAttributes',$F,$_d))&&(!$Nb||$this->_chunkRequest($pd,'BatchDeleteAttributes',$F,$Nb));}function
insert($R,$O){$F=array("DomainName"=>$R);$s=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$s.Name"]=$C;$F["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($R,$L,$Kf){foreach($L
as$O){if(!$this->update($R,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Gc){return
preg_match('~sql~',$Gc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$ob){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$R)$J[(string)$R]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Fc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$R=>$U){$K=array("Name"=>$R,"Auto_increment"=>"");if(!$Fc){$xe=sdb_request('DomainMetadata',array('DomainName'=>$R));if($xe){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$y=>$X)$K[$y]=(string)$xe->$X;}}if($C!="")return$K;$J[$R]=$K;}return$J;}function
explain($g,$H){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($R){return
fields_from_edit();}function
foreign_keys($R){return
array();}function
table($u){return
idf_escape($u);}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
limit($H,$Z,$z,$D=0,$Dg=" "){return" $H$Z".($z!==null?$Dg."LIMIT $z":"");}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
engines(){return
array();}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){return($R==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($T){foreach($T
as$R){if(!sdb_request('DeleteDomain',array('DomainName'=>$R)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($S,$Z){return($Z?null:$S["Rows"]);}function
last_id(){}function
hmac($Ba,$Gb,$y,$Zf=false){$Ua=64;if(strlen($y)>$Ua)$y=pack("H*",$Ba($y));$y=str_pad($y,$Ua,"\0");$Ld=$y^str_repeat("\x36",$Ua);$Md=$y^str_repeat("\x5C",$Ua);$J=$Ba($Md.pack("H*",$Ba($Ld.$Gb)));if($Zf)$J=pack("H*",$J);return$J;}function
sdb_request($va,$F=array()){global$b,$g;list($md,$F['AWSAccessKeyId'],$_g)=$b->credentials();$F['Action']=$va;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$y=>$X)$H.='&'.rawurlencode($y).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$md)."\n/\n$H",$_g,true)));@ini_set('track_errors',1);$Jc=@file_get_contents((preg_match('~^https?://~',$md)?$md:"http://$md"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Jc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$ui=simplexml_load_string($Jc);if(!$ui){$n=libxml_get_last_error();$g->error=$n->message;return
false;}if($ui->Errors){$n=$ui->Errors->Error;$g->error="$n->Message ($n->Code)";return
false;}$g->error='';$nh=$va."Result";return($ui->$nh?$ui->$nh:true);}function
sdb_request_all($va,$nh,$F=array(),$wh=0){$J=array();$Vg=($wh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$ui=sdb_request($va,$F);if(!$ui)break;foreach($ui->$nh
as$jc)$J[]=$jc;if($z&&count($J)>=$z){$_GET["next"]=$ui->NextToken;break;}if($wh&&microtime(true)-$Vg>$wh)return
false;$F['NextToken']=$ui->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($ui->NextToken);return$J;}$x="simpledb";$Ye=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Zc=array();$ed=array("count");$gc=array(array("json"));}$Yb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$Hf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$m=$b->database();$bf=array();if($V!=""){$bf["username"]=$V;$bf["password"]=$G;}if($m!="")$bf["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$bf);return
true;}catch(Exception$vc){$this->error=$vc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($k){try{$this->_db=$this->_link->selectDB($k);return
true;}catch(Exception$vc){$this->error=$vc->getMessage();return
false;}}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
__construct($I){foreach($I
as$Id){$K=array();foreach($Id
as$y=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$y]=63;$K[$y]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$y=>$X){if(!isset($this->_rows[0][$y]))$this->_rows[0][$y]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$y=>$X)$J[$y]=$K[$y];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Od=array_keys($this->_rows[0]);$C=$Od[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$Kf="_id";function
select($R,$M,$Z,$cd,$df=array(),$z=1,$E=0,$Mf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$Pg=array();foreach($df
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Bb);$Pg[$X]=($Bb?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($R)->find(array(),$M)->sort($Pg)->limit(+$z)->skip($E*$z));}function
insert($R,$O){try{$J=$this->_conn->_db->selectCollection($R)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$vc){$this->_conn->error=$vc->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases($Qc){global$g;$J=array();$Kb=$g->_link->listDBs();foreach($Kb['databases']as$m)$J[]=$m['name'];return$J;}function
collations(){return
array();}function
db_collation($m,$ob){}function
count_tables($l){global$g;$J=array();foreach($l
as$m)$J[$m]=count($g->_link->selectDB($m)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Fc=false){$J=array();foreach(tables_list()as$R=>$U){$J[$R]=array("Name"=>$R);if($C==$R)return$J[$R];}return$J;}function
information_schema(){}function
is_view($S){}function
drop_databases($l){global$g;foreach($l
as$m){$kg=$g->_link->selectDB($m)->drop();if(!$kg['ok'])return
false;}return
true;}function
indexes($R,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($R)->getIndexInfo()as$v){$Qb=array();foreach($v["key"]as$d=>$U)$Qb[]=($U==-1?'1':null);$J[$v["name"]]=array("type"=>($v["name"]=="_id_"?"PRIMARY":($v["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($v["key"]),"lengths"=>array(),"descs"=>$Qb,);}return$J;}function
fields($R){return
fields_from_edit();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
foreign_keys($R){return
array();}function
fk_support($S){}function
engines(){return
array();}function
found_rows($S,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){global$g;if($R==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($T){global$g;foreach($T
as$R){$kg=$g->_db->selectCollection($R)->drop();if(!$kg['ok'])return
false;}return
true;}function
truncate_tables($T){global$g;foreach($T
as$R){$kg=$g->_db->selectCollection($R)->remove();if(!$kg['ok'])return
false;}return
true;}function
alter_indexes($R,$c){global$g;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$g->_db->command(array("deleteIndexes"=>$R,"index"=>$C));else{$e=array();foreach($O
as$d){$d=preg_replace('~ DESC$~','',$d,1,$Bb);$e[$d]=($Bb?-1:1);}$J=$g->_db->selectCollection($R)->ensureIndex($e,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$g->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$g;return$g->last_id;}function
table($u){return$u;}function
idf_escape($u){return$u;}function
support($Gc){return
preg_match("~database|indexes~",$Gc);}$x="mongo";$Ye=array("=");$Zc=array();$ed=array();$gc=array(array("json"));}$Yb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$Hf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($zf,$xb=array(),$ye='GET'){@ini_set('track_errors',1);$Jc=@file_get_contents($this->_url.'/'.ltrim($zf,'/'),false,stream_context_create(array('http'=>array('method'=>$ye,'content'=>json_encode($xb),'ignore_errors'=>1,))));if(!$Jc){$this->error=$php_errormsg;return$Jc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Jc;return
false;}$J=json_decode($Jc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$wb=get_defined_constants(true);foreach($wb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($zf,$xb=array(),$ye='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($zf,'/'),$xb,$ye);}function
connect($N,$V,$G){preg_match('~^(https?://)?(.*)~',$N,$B);$this->_url=($B[1]?$B[1]:"http://")."$V:$G@$B[2]/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($k){$this->_db=$k;return
true;}function
quote($Q){return$Q;}}class
Min_Result{var$num_rows,$_rows;function
__construct($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($R,$M,$Z,$cd,$df=array(),$z=1,$E=0,$Mf=false){global$b;$Gb=array();$H="$R/_search";if($M!=array("*"))$Gb["fields"]=$M;if($df){$Pg=array();foreach($df
as$lb){$lb=preg_replace('~ DESC$~','',$lb,1,$Bb);$Pg[]=($Bb?array($lb=>"desc"):$lb);}$Gb["sort"]=$Pg;}if($z){$Gb["size"]=+$z;if($E)$Gb["from"]=($E*$z);}foreach($Z
as$X){list($lb,$We,$X)=explode(" ",$X,3);if($lb=="_id")$Gb["query"]["ids"]["values"][]=$X;elseif($lb.$X!=""){$rh=array("term"=>array(($lb!=""?$lb:"_all")=>$X));if($We=="=")$Gb["query"]["filtered"]["filter"]["and"][]=$rh;else$Gb["query"]["filtered"]["query"]["bool"]["must"][]=$rh;}}if($Gb["query"]&&!$Gb["query"]["filtered"]["query"]&&!$Gb["query"]["ids"])$Gb["query"]["filtered"]["query"]=array("match_all"=>array());$Vg=microtime(true);$zg=$this->_conn->query($H,$Gb);if($Mf)echo$b->selectQuery("$H: ".print_r($Gb,true),format_time($Vg));if(!$zg)return
false;$J=array();foreach($zg['hits']['hits']as$ld){$K=array();if($M==array("*"))$K["_id"]=$ld["_id"];$p=$ld['_source'];if($M!=array("*")){$p=array();foreach($M
as$y)$p[$y]=$ld['fields'][$y];}foreach($p
as$y=>$X){if($Gb["fields"])$X=$X[0];$K[$y]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2]))return$g;return$g->error;}function
support($Gc){return
preg_match("~database|table|columns~",$Gc);}function
logged_user(){global$b;$j=$b->credentials();return$j[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($m,$ob){}function
engines(){return
array();}function
count_tables($l){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$g->_db]["mappings"]),'table');return$J;}function
table_status($C="",$Fc=false){global$g;$zg=$g->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($zg){foreach($zg["facets"]["count_by_type"]["terms"]as$R){$J[$R["term"]]=array("Name"=>$R["term"],"Engine"=>"table","Rows"=>$R["count"],);if($C!=""&&$C==$R["term"])return$J[$C];}}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($S){}function
indexes($R,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($R){global$g;$I=$g->query("$R/_mapping");$J=array();if($I){$he=$I[$R]['properties'];if(!$he)$he=$I[$g->_db]['mappings'][$R]['properties'];if($he){foreach($he
as$C=>$o){$J[$C]=array("field"=>$C,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($J[$C]["privileges"]["insert"]);unset($J[$C]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($R){return
array();}function
table($u){return$u;}function
idf_escape($u){return$u;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
fk_support($S){}function
found_rows($S,$Z){return
null;}function
create_database($m){global$g;return$g->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$g;return$g->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($T){global$g;$J=true;foreach($T
as$R)$J=$J&&$g->query(urlencode($R),array(),'DELETE');return$J;}$x="elastic";$Ye=array("=","query");$Zc=array();$ed=array();$gc=array(array("json"));}$Yb=array("server"=>"MySQL")+$Yb;if(!defined("DRIVER")){$Hf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
__construct(){parent::init();}function
connect($N="",$V="",$G="",$k=null,$Df=null,$Og=null){mysqli_report(MYSQLI_REPORT_OFF);list($md,$Df)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$md:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),$k,(is_numeric($Df)?$Df:ini_get("mysqli.default_port")),(!is_numeric($Df)?$Df:$Og));return$J;}function
set_charset($ab){if(parent::set_charset($ab))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $ab");}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$o];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($ab){if(function_exists('mysql_set_charset')){if(mysql_set_charset($ab,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $ab");}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($k){return
mysql_select_db($k,$this->_link);}function
query($H,$Sh=false){$I=@($Sh?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$o=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$o);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
__construct($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
set_charset($ab){$this->query("SET NAMES $ab");}function
select_db($k){return$this->query("USE ".idf_escape($k));}function
query($H,$Sh=false){$this->setAttribute(1000,!$Sh);return
parent::query($H,$Sh);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$O){return($O?parent::insert($R,$O):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$L,$Kf){$e=array_keys(reset($L));$If="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$ji=array();foreach($e
as$y)$ji[$y]="$y = VALUES($y)";$bh="\nON DUPLICATE KEY UPDATE ".implode(", ",$ji);$ji=array();$be=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($ji&&(strlen($If)+$be+strlen($Y)+strlen($bh)>1e6)){if(!queries($If.implode(",\n",$ji).$bh))return
false;$ji=array();$be=0;}$ji[]=$Y;$be+=strlen($Y)+2;}return
queries($If.implode(",\n",$ji).$bh);}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$b,$Rh,$Yg;$g=new
Min_DB;$j=$b->credentials();if($g->connect($j[0],$j[1],$j[2])){$g->set_charset(charset($g));$g->query("SET sql_quote_show_create = 1, autocommit = 1");if(version_compare($g->server_info,'5.7.8')>=0){$Yg[lang(23)][]="json";$Rh["json"]=4294967295;}return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($vg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$vg;return$J;}function
get_databases($Qc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Qc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$Dg=" "){return" $H$Z".($z!==null?$Dg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$ob){global$g;$J=null;$i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$i,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$i,$B))$J=$ob[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$J=array();foreach($l
as$m)$J[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$J;}function
table_status($C="",$Fc=false){global$g;$J=array();foreach(get_rows($Fc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, ENGINE AS Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){global$g;return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"])||(preg_match('~NDB~i',$S["Engine"])&&version_compare($g->server_info,'5.6')>=0);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$C=$K["Key_name"];$J[$C]["type"]=($C=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?($K["Index_type"]=="SPATIAL"?"SPATIAL":"INDEX"):"UNIQUE")));$J[$C]["columns"][]=$K["Column_name"];$J[$C]["lengths"][]=($K["Index_type"]=="SPATIAL"?null:$K["Sub_part"]);$J[$C]["descs"][]=null;}return$J;}function
foreign_keys($R){global$g,$Te;static$Af='`(?:[^`]|``)+`';$J=array();$Cb=$g->result("SHOW CREATE TABLE ".table($R),1);if($Cb){preg_match_all("~CONSTRAINT ($Af) FOREIGN KEY ?\\(((?:$Af,? ?)+)\\) REFERENCES ($Af)(?:\\.($Af))? \\(((?:$Af,? ?)+)\\)(?: ON DELETE ($Te))?(?: ON UPDATE ($Te))?~",$Cb,$ke,PREG_SET_ORDER);foreach($ke
as$B){preg_match_all("~$Af~",$B[2],$Qg);preg_match_all("~$Af~",$B[5],$oh);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Qg[0]),"target"=>array_map('idf_unescape',$oh[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$y=>$X)asort($J[$y]);return$J;}function
information_schema($m){global$g;return($g->server_info>=5&&$m=="information_schema")||($g->server_info>=5.5&&$m=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
create_database($m,$nb){return
queries("CREATE DATABASE ".idf_escape($m).($nb?" COLLATE ".q($nb):""));}function
drop_databases($l){$J=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($C,$nb){$J=false;if(create_database($C,$nb)){$ig=array();foreach(tables_list()as$R=>$U)$ig[]=table($R)." TO ".idf_escape($C).".".table($R);$J=(!$ig||queries("RENAME TABLE ".implode(", ",$ig)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$Ma=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$Ma="";break;}if($v["type"]=="PRIMARY")$Ma=" UNIQUE";}}return" AUTO_INCREMENT$Ma";}function
alter_table($R,$C,$p,$Rc,$sb,$oc,$nb,$La,$wf){$c=array();foreach($p
as$o)$c[]=($o[1]?($R!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($R!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Rc);$P=($sb!==null?" COMMENT=".q($sb):"").($oc?" ENGINE=".q($oc):"").($nb?" COLLATE ".q($nb):"").($La!=""?" AUTO_INCREMENT=$La":"");if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$P$wf");if($R!=$C)$c[]="RENAME TO ".table($C);if($P)$c[]=ltrim($P);return($c||$wf?queries("ALTER TABLE ".table($R)."\n".implode(",\n",$c).$wf):true);}function
alter_indexes($R,$c){foreach($c
as$y=>$X)$c[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($R).implode(",",$c));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($oi){return
queries("DROP VIEW ".implode(", ",array_map('table',$oi)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$oi,$oh){$ig=array();foreach(array_merge($T,$oi)as$R)$ig[]=table($R)." TO ".idf_escape($oh).".".table($R);return
queries("RENAME TABLE ".implode(", ",$ig));}function
copy_tables($T,$oi,$oh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($oh==DB?table("copy_$R"):idf_escape($oh).".".table($R));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($oi
as$R){$C=($oh==DB?table("copy_$R"):idf_escape($oh).".".table($R));$ni=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $ni[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$qc,$yd,$Rh;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Qh="((".implode("|",array_merge(array_keys($Rh),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$qc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$Af="\\s*(".($U=="FUNCTION"?"":$yd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Qh";$i=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$Af\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Qh\\s+":"")."(.*)~is",$i,$B);$p=array();preg_match_all("~$Af\\s*,?~is",$B[1],$ke,PREG_SET_ORDER);foreach($ke
as$qf){$C=str_replace("``","`",$qf[2]).$qf[3];$p[]=array("field"=>$C,"type"=>strtolower($qf[5]),"length"=>preg_replace_callback("~$qc~s",'normalize_enum',$qf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$qf[8] $qf[7]"))),"null"=>1,"full_type"=>$qf[4],"inout"=>strtoupper($qf[1]),"collation"=>strtolower($qf[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($xg){return
true;}function
create_sql($R,$La){global$g;$J=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$La)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($k){return"USE ".idf_escape($k);}function
trigger_sql($R,$Zg){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$K)$J.="\n".($Zg=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
replication_status($U){return
get_rows("SHOW $U STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J="GeomFromText($J)";return$J;}function
support($Gc){global$g;return!preg_match("~scheme|sequence|type|view_trigger|materializedview".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Gc);}function
kill_process($X){return
queries("KILL ".number($X));}function
connection_id(){return"SELECT CONNECTION_ID()";}function
max_connections(){global$g;return$g->result("SELECT @@max_connections");}$x="sql";$Rh=array();$Yg=array();foreach(array(lang(25)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(26)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(23)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$Rh+=$X;$Yg[$y]=array_keys($X);}$Yh=array("unsigned","zerofill","unsigned zerofill");$Ye=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Zc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$ed=array("avg","count","count distinct","group_concat","max","min","sum");$gc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.3.1";class
Adminer{var$operators;function
name(){return"<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($i=false){return
password_file($i);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Qc=true){return
get_databases($Qc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Yb;echo'<table cellspacing="0">
<tr><th>',lang(31),'<td>',html_select("auth[driver]",$Yb,DRIVER),'<tr><th>',lang(32),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
<tr><th>',lang(35),'<td><input name="auth[db]" value="',h($_GET["db"]),'" autocapitalize="off">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(36)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";}function
login($fe,$G){global$x;if($x=="sqlite")return
lang(38,'<code>login()</code>');return
true;}function
tableName($fh){return
h($fh["Name"]);}function
fieldName($o,$df=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($fh,$O=""){echo'<p class="links">';$ee=array("select"=>lang(39));if(support("table")||support("indexes"))$ee["table"]=lang(40);if(support("table")){if(is_view($fh))$ee["view"]=lang(41);else$ee["create"]=lang(42);}if($O!==null)$ee["edit"]=lang(43);foreach($ee
as$y=>$X)echo" <a href='".h(ME)."$y=".urlencode($fh["Name"]).($y=="edit"?$O:"")."'".bold(isset($_GET[$y])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$eh){return
array();}function
backwardKeysPrint($Oa,$K){}function
selectQuery($H,$vh){global$x;return"<p><code class='jush-$x'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($vh)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>":"")."</p>";}function
sqlCommandQuery($H){return
shorten_utf8(trim($H),1000);}function
rowDescription($R){return"";}function
rowDescriptions($L,$Sc){return$L;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$lf){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$J="<i>".lang(44,strlen($lf))."</i>";if(preg_match('~json~',$o["type"]))$J="<code class='jush-js'>$J</code>";return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$o){return$X;}function
tableStructurePrint($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(45)."<td>".lang(46).(support("comment")?"<td>".lang(47):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(48)."</i>":""),(isset($o["default"])?" <span title='".lang(49)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}function
tableIndexesPrint($w){echo"<table cellspacing='0'>\n";foreach($w
as$C=>$v){ksort($v["columns"]);$Mf=array();foreach($v["columns"]as$y=>$X)$Mf[]="<i>".h($X)."</i>".($v["lengths"][$y]?"(".$v["lengths"][$y].")":"").($v["descs"][$y]?" DESC":"");echo"<tr title='".h($C)."'><th>$v[type]<td>".implode(", ",$Mf)."\n";}echo"</table>\n";}function
selectColumnsPrint($M,$e){global$Zc,$ed;print_fieldset("select",lang(50),$M);$s=0;$M[""]=array();foreach($M
as$y=>$X){$X=$_GET["columns"][$y];$d=select_input(" name='columns[$s][col]' onchange='".($y!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$e,$X["col"]);echo"<div>".($Zc||$ed?"<select name='columns[$s][fun]' onchange='helpClose();".($y!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(51)=>$Zc,lang(52)=>$ed)),$X["fun"])."</select>"."($d)":$d)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$e,$w){print_fieldset("search",lang(53),$Z);foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$v["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Za="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]' onchange='$Za'",$e,$X["col"],"(".lang(54).")"),html_select("where[$s][op]",$this->operators,$X["op"],$Za),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($df,$e,$w){print_fieldset("sort",lang(55),$df);$s=0;foreach((array)$_GET["order"]as$y=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' onchange='selectFieldChange(this.form);'",$e,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$y]),lang(56))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' onchange='selectAddRow(this);'",$e),checkbox("desc[$s]",1,false,lang(56))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(57)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($uh){if($uh!==null){echo"<fieldset><legend>".lang(58)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($uh)."'>","</div></fieldset>\n";}}function
selectActionPrint($w){echo"<fieldset><legend>".lang(59)."</legend><div>","<input type='submit' value='".lang(50)."'>"," <span id='noindex' title='".lang(60)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$e=array();foreach($w
as$v){$Fb=reset($v["columns"]);if($v["type"]!="FULLTEXT"&&$Fb)$e[$Fb]=1;}$e[""]=1;foreach($e
as$y=>$X)json_row($y);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($lc,$e){}function
selectColumnsProcess($e,$w){global$Zc,$ed;$M=array();$cd=array();foreach((array)$_GET["columns"]as$y=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Zc)||in_array($X["fun"],$ed)))){$M[$y]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$ed))$cd[]=$M[$y];}}return
array($M,$cd);}function
selectSearchProcess($p,$w){global$g,$x;$J=array();foreach($w
as$s=>$v){if($v["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$v["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$ub=" $X[op]";if(preg_match('~IN$~',$X["op"])){$rd=process_length($X["val"]);$ub.=" ".($rd!=""?$rd:"(NULL)");}elseif($X["op"]=="SQL")$ub=" $X[val]";elseif($X["op"]=="LIKE %%")$ub=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$ub=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$ub.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$ub;else{$pb=array();foreach($p
as$C=>$o){$Gd=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Gd)){$C=idf_escape($C);$pb[]=($x=="sql"&&$Gd&&!preg_match("~^utf8_~",$o["collation"])?"CONVERT($C USING ".charset($g).")":$C);}}$J[]=($pb?"(".implode("$ub OR ",$pb)."$ub)":"0");}}}return$J;}function
selectOrderProcess($p,$w){$J=array();foreach((array)$_GET["order"]as$y=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$y])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Sc){return
false;}function
selectQueryBuild($M,$Z,$cd,$df,$z,$E){return"";}function
messageQuery($H,$vh){global$x;restart_session();$jd=&get_session("queries");$t="sql-".count($jd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$jd[$_GET["db"]][]=array($H,time(),$vh);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$t' onclick=\"return !toggle('$t');\">".lang(61)."</a>"."<div id='$t' class='hidden'><pre><code class='jush-$x'>".shorten_utf8($H,1000).'</code></pre>'.($vh?" <span class='time'>($vh)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($jd[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$gc;$J=($o["null"]?"NULL/":"");foreach($gc
as$y=>$Zc){if(!$y||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Zc
as$Af=>$X){if(!$Af||preg_match("~$Af~",$o["type"]))$J.="/$X";}if($y&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$J.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J=lang(48);return
explode("/",$J);}function
editInput($R,$o,$Ja,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ja value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ja value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ja,$o,$Y,0);return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$J="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$J=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$J=idf_escape($C)." $r $J";elseif(preg_match('~^[+-] interval$~',$r))$J=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$J="$r(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$J="$r($J)";return
unconvert_field($o,$J);}function
dumpOutput(){$J=array('text'=>lang(62),'file'=>lang(63));if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($R,$Zg,$Hd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Zg)dump_csv(array_keys(fields($R)));}else{if($Hd==2){$p=array();foreach(fields($R)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$i="CREATE TABLE ".table($R)." (".implode(", ",$p).")";}else$i=create_sql($R,$_POST["auto_increment"]);set_utf8mb4($i);if($Zg&&$i){if($Zg=="DROP+CREATE"||$Hd==1)echo"DROP ".($Hd==2?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Hd==1)$i=remove_definer($i);echo"$i;\n\n";}}}function
dumpData($R,$Zg,$H){global$g,$x;$me=($x=="sqlite"?0:1048576);if($Zg){if($_POST["format"]=="sql"){if($Zg=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";$p=fields($R);}$I=$g->query($H,1);if($I){$_d="";$Xa="";$Od=array();$bh="";$Hc=($R!=''?'fetch_assoc':'fetch_row');while($K=$I->$Hc()){if(!$Od){$ji=array();foreach($K
as$X){$o=$I->fetch_field();$Od[]=$o->name;$y=idf_escape($o->name);$ji[]="$y = VALUES($y)";}$bh=($Zg=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$ji):"").";\n";}if($_POST["format"]!="sql"){if($Zg=="table"){dump_csv($Od);$Zg="INSERT";}dump_csv($K);}else{if(!$_d)$_d="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',$Od)).") VALUES";foreach($K
as$y=>$X){$o=$p[$y];$K[$y]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$vg=($me?"\n":" ")."(".implode(",\t",$K).")";if(!$Xa)$Xa=$_d.$vg;elseif(strlen($Xa)+4+strlen($vg)+strlen($bh)<$me)$Xa.=",$vg";else{echo$Xa.$bh;$Xa=$_d.$vg;}}}if($Xa)echo$Xa.$bh;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($od){return
friendly_url($od!=""?$od:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($od,$Ae=false){$of=$_POST["output"];$Bc=(preg_match('~sql~',$_POST["format"])?"sql":($Ae?"tar":"csv"));header("Content-Type: ".($of=="gz"?"application/x-gzip":($Bc=="tar"?"application/x-tar":($Bc=="sql"||$of!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($of=="gz")ob_start('ob_gzencode',1e6);return$Bc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(64)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(65):lang(66))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(67)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(68)."</a>\n":"");return
true;}function
navigation($_e){global$ia,$x,$Yb,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($_e=="auth"){$Mc=true;foreach((array)$_SESSION["pwds"]as$li=>$Ig){foreach($Ig
as$N=>$gi){foreach($gi
as$V=>$G){if($G!==null){if($Mc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Mc=false;}$Kb=$_SESSION["db"][$li][$N][$V];foreach(($Kb?array_keys($Kb):array(""))as$m)echo"<a href='".h(auth_url($li,$N,$V,$m))."'>($Yb[$li]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$_e&&DB!=""){$g->select_db(DB);$T=table_status('',true);}echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.3.1",'"></script>
';if(support("sql")){echo'<script type="text/javascript">
';if($T){$ee=array();foreach($T
as$R=>$U)$ee[]=preg_quote($R,'/');echo"var jushLinks = { $x: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$ee).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$x;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($_e);if(DB==""||!$_e){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(61)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(69)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(70)."</a>\n";}if($_GET["ns"]!==""&&!$_e&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(71)."</a>\n";if(!$T)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($T);}}}function
databasesPrint($_e){global$b,$g;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Ib=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(72)."'>DB</span>: ".($l?"<select name='db'$Ib>".optionlist(array(""=>"")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($_e!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".lang(73).": <select name='ns'$Ib>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($T){echo"<ul id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$R=>$P){echo'<li><a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R||$_GET["edit"]==$R,"select").">".lang(74)."</a> ";$C=$this->tableName($P);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($R).'"'.bold(in_array($R,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($P)?"view":"structure"))." title='".lang(40)."'>$C</a>":"<span>$C</span>")."\n";}echo"</ul>\n";}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Ye;function
page_header($yh,$n="",$Wa=array(),$zh=""){global$ca,$ia,$b,$Yb,$x;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$_h=$yh.($zh!=""?": $zh":"");$Ah=strip_tags($_h.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(75),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$Ah,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.3.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.3.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.1",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.3.1",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(75),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(76)),'\';
</script>

<div id="help" class="jush-',$x,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Wa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Yb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(32));if($Wa===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Wa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Wa
as$y=>$X){$Pb=(is_array($X)?$X[1]:h($X));if($Pb!="")echo"<a href='".h(ME."$y=").urlencode(is_array($X)?$X[0]:$X)."'>$Pb</a> &raquo; ";}}echo"$yh\n";}}echo"<h2>$_h</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$ai=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$we=$_SESSION["messages"][$ai];if($we){echo"<div class='message'>".implode("</div>\n<div class='message'>",$we)."</div>\n";unset($_SESSION["messages"][$ai]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($_e=""){global$b,$Dh;echo'</div>

';switch_lang();if($_e!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(77),'" id="logout">
<input type="hidden" name="token" value="',$Dh,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($_e);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($Ce){while($Ce>=2147483648)$Ce-=4294967296;while($Ce<=-2147483649)$Ce+=4294967296;return(int)$Ce;}function
long2str($W,$qi){$vg='';foreach($W
as$X)$vg.=pack('V',$X);if($qi)return
substr($vg,0,end($W));return$vg;}function
str2long($vg,$qi){$W=array_values(unpack('V*',str_pad($vg,4*ceil(strlen($vg)/4),"\0")));if($qi)$W[]=strlen($vg);return$W;}function
xxtea_mx($wi,$vi,$ch,$Kd){return
int32((($wi>>5&0x7FFFFFF)^$vi<<2)+(($vi>>3&0x1FFFFFFF)^$wi<<4))^int32(($ch^$vi)+($Kd^$wi));}function
encrypt_string($Xg,$y){if($Xg=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Xg,true);$Ce=count($W)-1;$wi=$W[$Ce];$vi=$W[0];$Tf=floor(6+52/($Ce+1));$ch=0;while($Tf-->0){$ch=int32($ch+0x9E3779B9);$fc=$ch>>2&3;for($pf=0;$pf<$Ce;$pf++){$vi=$W[$pf+1];$Be=xxtea_mx($wi,$vi,$ch,$y[$pf&3^$fc]);$wi=int32($W[$pf]+$Be);$W[$pf]=$wi;}$vi=$W[0];$Be=xxtea_mx($wi,$vi,$ch,$y[$pf&3^$fc]);$wi=int32($W[$Ce]+$Be);$W[$Ce]=$wi;}return
long2str($W,false);}function
decrypt_string($Xg,$y){if($Xg=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Xg,false);$Ce=count($W)-1;$wi=$W[$Ce];$vi=$W[0];$Tf=floor(6+52/($Ce+1));$ch=int32($Tf*0x9E3779B9);while($ch){$fc=$ch>>2&3;for($pf=$Ce;$pf>0;$pf--){$wi=$W[$pf-1];$Be=xxtea_mx($wi,$vi,$ch,$y[$pf&3^$fc]);$vi=int32($W[$pf]-$Be);$W[$pf]=$vi;}$wi=$W[$Ce];$Be=xxtea_mx($wi,$vi,$ch,$y[$pf&3^$fc]);$vi=int32($W[0]-$Be);$W[0]=$vi;$ch=int32($ch-0x9E3779B9);}return
long2str($W,true);}$g='';$id=$_SESSION["token"];if(!$id)$_SESSION["token"]=rand(1,1e6);$Dh=get_token();$Bf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$Bf[$y]=$X;}}function
add_invalid_login(){global$b;$Kc=get_temp_dir()."/adminer.invalid";$Xc=@fopen($Kc,"r+");if(!$Xc){$Xc=@fopen($Kc,"w");if(!$Xc)return;}flock($Xc,LOCK_EX);$Cd=unserialize(stream_get_contents($Xc));$vh=time();if($Cd){foreach($Cd
as$Dd=>$X){if($X[0]<$vh)unset($Cd[$Dd]);}}$Bd=&$Cd[$b->bruteForceKey()];if(!$Bd)$Bd=array($vh+30*60,0);$Bd[1]++;$Gg=serialize($Cd);rewind($Xc);fwrite($Xc,$Gg);ftruncate($Xc,strlen($Gg));flock($Xc,LOCK_UN);fclose($Xc);}$Ka=$_POST["auth"];if($Ka){$Cd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$Bd=$Cd[$b->bruteForceKey()];$Ie=($Bd[1]>30?$Bd[0]-time():0);if($Ie>0)auth_error(lang(78,ceil($Ie/60)));session_regenerate_id();$li=$Ka["driver"];$N=$Ka["server"];$V=$Ka["username"];$G=(string)$Ka["password"];$m=$Ka["db"];set_password($li,$N,$V,$G);$_SESSION["db"][$li][$N][$V][$m]=true;if($Ka["permanent"]){$y=base64_encode($li)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$Nf=$b->permanentLogin(true);$Bf[$y]="$y:".base64_encode($Nf?encrypt_string($G,$Nf):"");cookie("adminer_permanent",implode(" ",$Bf));}if(count($_POST)==1||DRIVER!=$li||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($li,$N,$V,$m));}elseif($_POST["logout"]){if($id&&!verify_token()){page_header(lang(77),lang(79));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(80));}}elseif($Bf&&!$_SESSION["pwds"]){session_regenerate_id();$Nf=$b->permanentLogin();foreach($Bf
as$y=>$X){list(,$hb)=explode(":",$X);list($li,$N,$V,$m)=array_map('base64_decode',explode("-",$y));set_password($li,$N,$V,decrypt_string(base64_decode($hb),$Nf));$_SESSION["db"][$li][$N][$V][$m]=true;}}function
unset_permanent(){global$Bf;foreach($Bf
as$y=>$X){list($li,$N,$V,$m)=array_map('base64_decode',explode("-",$y));if($li==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($Bf[$y]);}cookie("adminer_permanent",implode(" ",$Bf));}function
auth_error($n){global$b,$id;$Jg=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$Jg]||$_GET[$Jg])&&!$id)$n=lang(81);else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.lang(82,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$Jg]&&$_GET[$Jg]&&ini_bool("session.use_only_cookies"))$n=lang(83);$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header(lang(36),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(84),lang(85,implode(", ",$Hf)),false);page_footer("auth");exit;}$g=connect();}$Xb=new
Min_Driver($g);if(!is_object($g)||($fe=$b->login($_GET["username"],get_password()))!==true)auth_error((is_string($g)?h($g):(is_string($fe)?$fe:lang(86))));if($Ka&&$_POST["token"])$_POST["token"]=$Dh;$n='';if($_POST){if(!verify_token()){$xd="max_input_vars";$qe=ini_get($xd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$qe||$X<$qe)){$xd=$y;$qe=$X;}}}$n=(!$_POST["token"]&&$qe?lang(87,"'$xd'"):lang(79).' '.lang(88));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(89,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(90);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$h=null,$gf=array(),$z=0){global$x;$ee=array();$w=array();$e=array();$Ta=array();$Rh=array();$J=array();odd('');for($s=0;(!$z||$s<$z)&&($K=$I->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Jd=0;$Jd<count($K);$Jd++){$o=$I->fetch_field();$C=$o->name;$ff=$o->orgtable;$ef=$o->orgname;$J[$o->table]=$ff;if($gf&&$x=="sql")$ee[$Jd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($ff!=""){if(!isset($w[$ff])){$w[$ff]=array();foreach(indexes($ff,$h)as$v){if($v["type"]=="PRIMARY"){$w[$ff]=array_flip($v["columns"]);break;}}$e[$ff]=$w[$ff];}if(isset($e[$ff][$ef])){unset($e[$ff][$ef]);$w[$ff][$ef]=$Jd;$ee[$Jd]=$ff;}}if($o->charsetnr==63)$Ta[$Jd]=true;$Rh[$Jd]=$o->type;echo"<th".($ff!=""||$o->name!=$ef?" title='".h(($ff!=""?"$ff.":"").$ef)."'":"").">".h($C).($gf?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$y=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ta[$y]&&!is_utf8($X))$X="<i>".lang(44,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($Rh[$y]==254)$X="<code>$X</code>";}if(isset($ee[$y])&&!$e[$ee[$y]]){if($gf&&$x=="sql"){$R=$K[array_search("table=",$ee)];$_=$ee[$y].urlencode($gf[$R]!=""?$gf[$R]:$R);}else{$_="edit=".urlencode($ee[$y]);foreach($w[$ee[$y]]as$lb=>$Jd)$_.="&where".urlencode("[".bracket_escape($lb)."]")."=".urlencode($K[$Jd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$J;}function
referencable_primary($Cg){$J=array();foreach(table_status('',true)as$gh=>$R){if($gh!=$Cg&&fk_support($R)){foreach(fields($gh)as$o){if($o["primary"]){if($J[$gh]){unset($J[$gh]);break;}$J[$gh]=$o;}}}}return$J;}function
textarea($C,$Y,$L=10,$pb=80){global$x;echo"<textarea name='$C' rows='$L' cols='$pb' class='sqlarea jush-$x' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($y,$o,$ob,$Tc=array()){global$Yg,$Rh,$Yh,$Te;$U=$o["type"];echo'<td><select name="',h($y),'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),' aria-labelledby="label-type">';if($U&&!isset($Rh[$U])&&!isset($Tc[$U]))array_unshift($Yg,$U);if($Tc)$Yg[lang(91)]=$Tc;echo
optionlist($Yg,$U),'</select>
<td><input name="',h($y),'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();" aria-labelledby="label-length"><td class="options">';echo"<select name='".h($y)."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(92).')'.optionlist($ob,$o["collation"]).'</select>',($Yh?"<select name='".h($y)."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Yh,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='".h($y)."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(93).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Tc?"<select name='".h($y)."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(94).")".optionlist(explode("|",$Te),$o["on_delete"])."</select> ":" ");}function
process_length($be){global$qc;return(preg_match("~^\\s*\\(?\\s*$qc(?:\\s*,\\s*$qc)*+\\s*\\)?\\s*\$~",$be)&&preg_match_all("~$qc~",$be,$ke)?"(".implode(",",$ke[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$be)));}function
process_type($o,$mb="COLLATE"){global$Yh;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$Yh)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $mb ".q($o["collation"]):"");}function
process_field($o,$Ph){global$x;$Mb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($Ph),($o["null"]?" NULL":" NOT NULL"),(isset($Mb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Mb))||($x=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Mb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Mb))||($x=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Mb))?$Mb:q($Mb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$y=>$X){if(preg_match("~$y|$X~",$U))return" class='$y'";}}function
edit_fields($p,$ob,$U="TABLE",$Tc=array(),$tb=false){global$g,$yd;$p=array_values($p);echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th id="label-name">',($U=="TABLE"?lang(95):lang(96)),'<td id="label-type">',lang(46),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td id="label-length">',lang(97),'<td>',lang(98);if($U=="TABLE"){echo'<td id="label-null">NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym id="label-ai" title="',lang(48),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td id="label-default">',lang(49),(support("comment")?"<td id='label-comment'".($tb?"":" class='hidden'").">".lang(47):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.1' alt='+' title='".lang(99)."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$s=>$o){$s++;$hf=$o[($_POST?"orig":"field")];$Tb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$hf=="");echo'<tr',($Tb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$yd),$o["inout"]):""),'<th>';if($Tb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="editingNameChange(this);',($o["field"]!=""||count($p)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off" aria-labelledby="label-name">';}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($hf),'">
';edit_type("fields[$s]",$o,$ob,$Tc);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block","label-null"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }" aria-labelledby="label-ai"></label><td><?php
echo
checkbox("fields[$s][has_default]",1,$o["has_default"],"","","","label-default"),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;" aria-labelledby="label-default">
',(support("comment")?"<td".($tb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."' aria-labelledby='label-comment'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.1' alt='+' title='".lang(99)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.3.1' alt='^' title='".lang(100)."' onclick='return !editingMoveRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.3.1' alt='v' title='".lang(101)."' onclick='return !editingMoveRow(this, 0);'>&nbsp;":""),($hf==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.1' alt='x' title='".lang(102)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$p){$D=0;if($_POST["up"]){$Vd=0;foreach($p
as$y=>$o){if(key($_POST["up"])==$y){unset($p[$y]);array_splice($p,$Vd,0,array($o));break;}if(isset($o["field"]))$Vd=$D;$D++;}}elseif($_POST["down"]){$Vc=false;foreach($p
as$y=>$o){if(isset($o["field"])&&$Vc){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($Vc));break;}if(key($_POST["down"])==$y)$Vc=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($ad,$Pf,$e,$Se){if(!$Pf)return
true;if($Pf==array("ALL PRIVILEGES","GRANT OPTION"))return($ad=="GRANT"?queries("$ad ALL PRIVILEGES$Se WITH GRANT OPTION"):queries("$ad ALL PRIVILEGES$Se")&&queries("$ad GRANT OPTION$Se"));return
queries("$ad ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$e, ",$Pf).$e).$Se);}function
drop_create($Zb,$i,$ac,$sh,$cc,$A,$ve,$te,$ue,$Pe,$Fe){if($_POST["drop"])query_redirect($Zb,$A,$ve);elseif($Pe=="")query_redirect($i,$A,$ue);elseif($Pe!=$Fe){$Db=queries($i);queries_redirect($A,$te,$Db&&queries($Zb));if($Db)queries($ac);}else
queries_redirect($A,$te,queries($sh)&&queries($cc)&&queries($Zb)&&queries($i));}function
create_trigger($Se,$K){global$x;$xh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($x=="mssql"?$Se.$xh:$xh.$Se).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($rg,$K){global$yd;$O=array();$p=(array)$K["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($yd)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $rg ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($q){global$Te;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($Te)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($Te)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Kc,$Bh){$J=pack("a100a8a8a8a12a12",$Kc,644,0,0,decoct($Bh->size),decoct(time()));$fb=8*32;for($s=0;$s<strlen($J);$s++)$fb+=ord($J[$s]);$J.=sprintf("%06o",$fb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$Bh->send();echo
str_repeat("\0",511-($Bh->size+511)%512);}function
ini_bytes($xd){$X=ini_get($xd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($_f){global$x,$g;$ci=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($_f[$x]?"<a href='$ci[$x]$_f[$x]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($Q){return
gzencode($Q);}function
db_size($m){global$g;if(!$g->select_db($m))return"?";$J=0;foreach(table_status()as$S)$J+=$S["Data_length"]+$S["Index_length"];return
format_number($J);}function
set_utf8mb4($i){global$g;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$i)){$O=true;echo"SET NAMES ".charset($g).";\n\n";}}function
connect_error(){global$b,$g,$Dh,$n,$Yb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(35).": ".h(DB),lang(103),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(104),drop_databases($_POST["db"]));page_header(lang(105),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(106),'privileges'=>lang(68),'processlist'=>lang(107),'variables'=>lang(108),'status'=>lang(109),'replication'=>lang(110),)as$y=>$X){if(support($y))echo"<a href='".h(ME)."$y='>$X</a>\n";}echo"<p>".lang(111,$Yb[DRIVER],"<b>".h($g->server_info)."</b>","<b>$g->extension</b>")."\n","<p>".lang(112,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$yg=support("scheme");$ob=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(35)." - <a href='".h(ME)."refresh=1'>".lang(113)."</a>"."<td>".lang(114)."<td>".lang(115)."<td>".lang(116)." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".h(js_escape(ME))."script=connect');\">".lang(117)."</a>"."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$T){$qg=h(ME)."db=".urlencode($m);$t=h("Db-".$m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"]),"","","",$t):""),"<th><a href='$qg' id='$m'>".h($m)."</a>";$nb=nbsp(db_collation($m,$ob));echo"<td>".(support("database")?"<a href='$qg".($yg?"&amp;ns=":"")."&amp;database=' title='".lang(64)."'>$nb</a>":$nb),"<td align='right'><a href='$qg&amp;schema=' id='tables-".h($m)."' title='".lang(67)."'>".($_GET["dbsize"]?$T:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(118)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$Dh'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["replication"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(73).": ".h($_GET["ns"]),lang(120),true);page_footer("ns");exit;}}$Te="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
__construct(){$this->handler=tmpfile();}function
write($yb){$this->size+=strlen($yb);fwrite($this->handler,$yb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$qc="'(?:''|[^'\\\\]|\\\\.)*'";$yd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$Xb->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$S=table_status1($a,true);page_header(($p&&is_view($S)?$S['Engine']=='materialized view'?lang(121):lang(122):lang(123)).": ".h($a),$n);$b->selectLinks($S);$sb=$S["Comment"];if($sb!="")echo"<p>".lang(47).": ".h($sb)."\n";if($p)$b->tableStructurePrint($p);if(!is_view($S)){if(support("indexes")){echo"<h3 id='indexes'>".lang(124)."</h3>\n";$w=indexes($a);if($w)$b->tableIndexesPrint($w);echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(125)."</a>\n";}if(fk_support($S)){echo"<h3 id='foreign-keys'>".lang(91)."</h3>\n";$Tc=foreign_keys($a);if($Tc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(126)."<td>".lang(127)."<td>".lang(94)."<td>".lang(93)."<td>&nbsp;</thead>\n";foreach($Tc
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.lang(128).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(129)."</a>\n";}}if(support(is_view($S)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(130)."</h3>\n";$Oh=triggers($a);if($Oh){echo"<table cellspacing='0'>\n";foreach($Oh
as$y=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($y)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($y))."'>".lang(128)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(131)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(67),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$ih=array();$jh=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$ke,PREG_SET_ORDER);foreach($ke
as$s=>$B){$ih[$B[1]]=array($B[2],$B[3]);$jh[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$Eh=0;$Qa=-1;$xg=array();$eg=array();$Zd=array();foreach(table_status('',true)as$R=>$S){if(is_view($S))continue;$Ef=0;$xg[$R]["fields"]=array();foreach(fields($R)as$C=>$o){$Ef+=1.25;$o["pos"]=$Ef;$xg[$R]["fields"][$C]=$o;}$xg[$R]["pos"]=($ih[$R]?$ih[$R]:array($Eh,0));foreach($b->foreignKeys($R)as$X){if(!$X["db"]){$Xd=$Qa;if($ih[$R][1]||$ih[$X["table"]][1])$Xd=min(floatval($ih[$R][1]),floatval($ih[$X["table"]][1]))-1;else$Qa-=.1;while($Zd[(string)$Xd])$Xd-=.0001;$xg[$R]["references"][$X["table"]][(string)$Xd]=array($X["source"],$X["target"]);$eg[$X["table"]][$R][(string)$Xd]=$X["target"];$Zd[(string)$Xd]=true;}}$Eh=max($Eh,$xg[$R]["pos"][0]+2.5+$Ef);}echo'<div id="schema" style="height: ',$Eh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$jh)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$Eh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($xg
as$C=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($R["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$ph=>$fg){foreach($fg
as$Xd=>$bg){$Yd=$Xd-$ih[$C][1];$s=0;foreach($bg[0]as$Qg)echo"\n<div class='references' title='".h($ph)."' id='refs$Xd-".($s++)."' style='left: $Yd"."em; top: ".$R["fields"][$Qg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Yd)."em;'></div></div>";}}foreach((array)$eg[$C]as$ph=>$fg){foreach($fg
as$Xd=>$e){$Yd=$Xd-$ih[$C][1];$s=0;foreach($e
as$oh)echo"\n<div class='references' title='".h($ph)."' id='refd$Xd-".($s++)."' style='left: $Yd"."em; top: ".$R["fields"][$oh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.3.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Yd)."em;'></div></div>";}}echo"\n</div>\n";}foreach($xg
as$C=>$R){foreach((array)$R["references"]as$ph=>$fg){foreach($fg
as$Xd=>$bg){$ze=$Eh;$oe=-10;foreach($bg[0]as$y=>$Qg){$Ff=$R["pos"][0]+$R["fields"][$Qg]["pos"];$Gf=$xg[$ph]["pos"][0]+$xg[$ph]["fields"][$bg[1][$y]]["pos"];$ze=min($ze,$Ff,$Gf);$oe=max($oe,$Ff,$Gf);}echo"<div class='references' id='refl$Xd' style='left: $Xd"."em; top: $ze"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($oe-$ze)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(132),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$Ab="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$y)$Ab.="&$y=".urlencode($_POST[$y]);cookie("adminer_export",substr($Ab,1));$T=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Bc=dump_headers((count($T)==1?key($T):DB),(DB==""||count($T)>1));$Fd=preg_match('~sql~',$_POST["format"]);if($Fd){echo"-- Adminer $ia ".$Yb[DRIVER]." dump\n\n";if($x=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$g->query("SET time_zone = '+00:00';");}}$Zg=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($g->select_db($m)){if($Fd&&preg_match('~CREATE~',$Zg)&&($i=$g->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($i);if($Zg=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$i;\n";}if($Fd){if($Zg)echo
use_sql($m).";\n\n";$nf="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$rg){foreach(get_rows("SHOW $rg STATUS WHERE Db = ".q($m),null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE $rg ".idf_escape($K["Name"]),2));set_utf8mb4($i);$nf.=($Zg!='DROP+CREATE'?"DROP $rg IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$i=remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($i);$nf.=($Zg!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$i;;\n\n";}}if($nf)echo"DELIMITER ;;\n\n$nf"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$oi=array();foreach(table_status('',true)as$C=>$S){$R=(DB==""||in_array($C,(array)$_POST["tables"]));$Gb=(DB==""||in_array($C,(array)$_POST["data"]));if($R||$Gb){if($Bc=="tar"){$Bh=new
TmpFile;ob_start(array($Bh,'write'),1e5);}$b->dumpTable($C,($R?$_POST["table_style"]:""),(is_view($S)?2:0));if(is_view($S))$oi[]=$C;elseif($Gb){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($Fd&&$_POST["triggers"]&&$R&&($Oh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$Oh\nDELIMITER ;\n";if($Bc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$Bh);}elseif($Fd)echo"\n";}}foreach($oi
as$ni)$b->dumpTable($ni,$_POST["table_style"],1);if($Bc=="tar")echo
pack("x512");}}}if($Fd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header(lang(70),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Jb=array('','USE','DROP+CREATE','CREATE');$kh=array('','DROP+CREATE','CREATE');$Hb=array('','TRUNCATE+INSERT','INSERT');if($x=="sql")$Hb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".lang(133)."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".lang(134)."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($x=="sqlite"?"":"<tr><th>".lang(35)."<td>".html_select('db_style',$Jb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],lang(135)):"").(support("event")?checkbox("events",1,$K["events"],lang(136)):"")),"<tr><th>".lang(115)."<td>".html_select('table_style',$kh,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],lang(48)).(support("trigger")?checkbox("triggers",1,$K["triggers"],lang(130)):""),"<tr><th>".lang(137)."<td>".html_select('data_style',$Hb,$K["data_style"]),'</table>
<p><input type="submit" value="',lang(70),'">
<input type="hidden" name="token" value="',$Dh,'">

<table cellspacing="0">
';$Jf=array();if(DB!=""){$db=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$db onclick='formCheck(this, /^tables\\[/);'>".lang(115)."</label>","<th style='text-align: right;'><label class='block'>".lang(137)."<input type='checkbox' id='check-data'$db onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$oi="";$lh=tables_list();foreach($lh
as$C=>$U){$If=preg_replace('~_.*~','',$C);$db=($a==""||$a==(substr($a,-1)=="%"?"$If%":$C));$Mf="<tr><td>".checkbox("tables[]",$C,$db,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$oi.="$Mf\n";else
echo"$Mf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$db,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Jf[$If]++;}echo$oi;if($lh)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(35)."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$If=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$If%",$m,"formUncheck('check-databases');","block")."\n";$Jf[$If]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Mc=true;foreach($Jf
as$y=>$X){if($y!=""&&$X>1){echo($Mc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$y%")."'>".h($y)."</a>";$Mc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(68));echo'<p class="links"><a href="'.h(ME).'user=">'.lang(138)."</a>";$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$ad=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($ad?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(33)."<th>".lang(32)."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.lang(10)."</a>\n";if(!$ad||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$kd=&get_session("queries");$jd=&$kd[DB];if(!$n&&$_POST["clear"]){$jd=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(69):lang(61)),$n);if(!$n&&$_POST){$Xc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Xc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Xc?fread($Xc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Tf=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$jd||reset(end($jd))!=$Tf){restart_session();$jd[]=array($Tf,time());set_session("queries",$kd);stop_session();}}$Rg="(?:\\s|/\\*[\s\S]*?\\*/|(?:#|-- )[^\n]*\n?|--\r?\n)";$Ob=";";$D=0;$nc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$rb=0;$sc=array();$sf='[\'"'.($x=="sql"?'`#':($x=="sqlite"?'`[':($x=="mssql"?'[':''))).']|/\\*|-- |$'.($x=="pgsql"?'|\\$[^$]*\\$':'');$Fh=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$ec=$b->dumpFormat();unset($ec["sql"]);while($H!=""){if(!$D&&preg_match("~^$Rg*+DELIMITER\\s+(\\S+)~i",$H,$B)){$Ob=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Ob)."\\s*|$sf)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($Vc,$Ef)=$B[0];if(!$Vc&&$Xc&&!feof($Xc))$H.=fread($Xc,1e5);else{if(!$Vc&&rtrim($H)=="")break;$D=$Ef+strlen($Vc);if($Vc&&rtrim($Vc)!=$Ob){while(preg_match('('.($Vc=='/*'?'\\*/':($Vc=='['?']':(preg_match('~^-- |^#~',$Vc)?"\n":preg_quote($Vc)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$vg=$B[0][0];if(!$vg&&$Xc&&!feof($Xc))$H.=fread($Xc,1e5);else{$D=$B[0][1]+strlen($vg);if($vg[0]!="\\")break;}}}else{$nc=false;$Tf=substr($H,0,$Ef);$rb++;$Mf="<pre id='sql-$rb'><code class='jush-$x'>".$b->sqlCommandQuery($Tf)."</code></pre>\n";if($x=="sqlite"&&preg_match("~^$Rg*+ATTACH\\b~i",$Tf,$B)){echo$Mf,"<p class='error'>".lang(139)."\n";$sc[]=" <a href='#sql-$rb'>$rb</a>";if($_POST["error_stops"])break;}else{if(!$_POST["only_errors"]){echo$Mf;ob_flush();flush();}$Vg=microtime(true);if($g->multi_query($Tf)&&is_object($h)&&preg_match("~^$Rg*+USE\\b~i",$Tf))$h->query($Tf);do{$I=$g->store_result();$vh=" <span class='time'>(".format_time($Vg).")</span>".(strlen($Tf)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Tf))."'>".lang(10)."</a>":"");if($g->error){echo($_POST["only_errors"]?$Mf:""),"<p class='error'>".lang(140).($g->errno?" ($g->errno)":"").": ".error()."\n";$sc[]=" <a href='#sql-$rb'>$rb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$z=$_POST["limit"];$gf=select($I,$h,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$Je=$I->num_rows;echo"<p>".($Je?($z&&$Je>$z?lang(141,$z):"").lang(142,$Je):""),$vh;$t="export-$rb";$Ac=", <a href='#$t' onclick=\"return !toggle('$t');\">".lang(70)."</a><span id='$t' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$ec,$xa["format"])."<input type='hidden' name='query' value='".h($Tf)."'>"." <input type='submit' name='export' value='".lang(70)."'><input type='hidden' name='token' value='$Dh'></span>\n";if($h&&preg_match("~^($Rg|\\()*+SELECT\\b~i",$Tf)&&($_c=explain($h,$Tf))){$t="explain-$rb";echo", <a href='#$t' onclick=\"return !toggle('$t');\">EXPLAIN</a>$Ac","<div id='$t' class='hidden'>\n";select($_c,$h,$gf);echo"</div>\n";}else
echo$Ac;echo"</form>\n";}}else{if(preg_match("~^$Rg*+(CREATE|DROP|ALTER)$Rg++(DATABASE|SCHEMA)\\b~i",$Tf)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(143,$g->affected_rows)."$vh\n";}$Vg=microtime(true);}while($g->next_result());}$H=substr($H,$D);$D=0;}}}}if($nc)echo"<p class='message'>".lang(144)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(145,$rb-count($sc))," <span class='time'>(".format_time($Fh).")</span>\n";}elseif($sc&&$rb>1)echo"<p class='error'>".lang(140).": ".implode("",$sc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$xc="<input type='submit' value='".lang(146)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Tf=$_GET["sql"];if($_POST)$Tf=$_POST["query"];elseif($_GET["history"]=="all")$Tf=$jd;elseif($_GET["history"]!="")$Tf=$jd[$_GET["history"]][0];echo"<p>";textarea("query",$Tf,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>$xc\n",lang(147).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(148)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$xc":lang(149)),"</div></fieldset>\n","<fieldset><legend>".lang(150)."</legend><div>",lang(151,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(152).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(153))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(154))."\n","<input type='hidden' name='token' value='$Dh'>\n";if(!isset($_GET["import"])&&$jd){print_fieldset("history",lang(155),$_GET["history"]!="");for($X=end($jd);$X;$X=prev($jd)){$y=key($jd);list($Tf,$vh,$ic)=$X;echo'<a href="'.h(ME."sql=&history=$y").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$vh)."'>".@date("H:i:s",$vh)."</span>"." <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Tf)))),80,"</code>").($ic?" <span class='time'>($ic)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(156)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(157)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Zh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if(!isset($o["privileges"][$Zh?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($Zh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$w=indexes($a);$Uh=unique_array($_GET["where"],$w);$Wf="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(158),$Xb->delete($a,$Wf,!$Uh));else{$O=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($Zh){if(!$O)redirect($A);queries_redirect($A,lang(159),$Xb->update($a,$O,$Wf,!$Uh));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$Xb->insert($a,$O);$Wd=($I?last_id():0);queries_redirect($A,lang(160,($Wd?" $Wd":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$C=>$o){if(isset($o["privileges"]["select"])){$Ga=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ga="''";if($x=="sql"&&preg_match("~enum|set~",$o["type"]))$Ga="1*".idf_escape($C);$M[]=($Ga?"$Ga AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$Xb->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$Xb->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($Xb->primary=>"");}if($K){foreach($K
as$y=>$X){if(!$Z)$K[$y]=null;$p[$y]=array("field"=>$y,"null"=>($y!=$Xb->primary),"auto_increment"=>($y==$Xb->primary));}}}edit_form($a,$p,$K,$Zh);}elseif(isset($_GET["create"])){$a=$_GET["create"];$uf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$y)$uf[$y]=$y;$dg=referencable_primary($a);$Tc=array();foreach($dg
as$gh=>$o)$Tc[str_replace("`","``",$gh)."`".str_replace("`","``",$o["field"])]=$gh;$jf=array();$S=array();if($a!=""){$jf=fields($a);$S=table_status($a);if(!$S)$n=lang(9);}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(161),drop_tables(array($a)));else{$p=array();$Da=array();$di=false;$Rc=array();$if=reset($jf);$Aa=" FIRST";foreach($K["fields"]as$y=>$o){$q=$Tc[$o["type"]];$Ph=($q!==null?$dg[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($y==$K["auto_increment_col"])$o["auto_increment"]=true;$Rf=process_field($o,$Ph);$Da[]=array($o["orig"],$Rf,$Aa);if($Rf!=process_field($if,$if)){$p[]=array($o["orig"],$Rf,$Aa);if($o["orig"]!=""||$Aa)$di=true;}if($q!==null)$Rc[idf_escape($o["field"])]=($a!=""&&$x!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Tc[$o["type"]],'source'=>array($o["field"]),'target'=>array($Ph["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$di=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$if=next($jf);if(!$if)$Aa="";}}$wf="";if($uf[$K["partition_by"]]){$xf=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$y=>$X){$Y=$K["partition_values"][$y];$xf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$wf.="\nPARTITION BY $K[partition_by]($K[partition])".($xf?" (".implode(",",$xf)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$S["Create_options"]))$wf.="\nREMOVE PARTITIONING";$se=lang(162);if($a==""){cookie("adminer_engine",$K["Engine"]);$se=lang(163);}$C=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$se,alter_table($a,$C,($x=="sqlite"&&($di||$Rc)?$Da:$p),$Rc,($K["Comment"]!=$S["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$S["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$S["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$wf));}}page_header(($a!=""?lang(42):lang(71)),$n,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Rh["int"])?"int":(isset($Rh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$S;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($jf
as$o){$o["has_default"]=isset($o["default"]);$K["fields"][]=$o;}if(support("partitioning")){$Yc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Yc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$xf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Yc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$xf[""]="";$K["partition_names"]=array_keys($xf);$K["partition_values"]=array_values($xf);}}}$ob=collations();$pc=engines();foreach($pc
as$oc){if(!strcasecmp($oc,$K["Engine"])){$K["Engine"]=$oc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(164),': <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($pc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(165).")")+$pc,$K["Engine"])."</select>":""),' ',($ob&&!preg_match("~sqlite|mssql~",$x)?html_select("Collation",array(""=>"(".lang(92).")")+$ob,$K["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$tb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$tb){foreach($K["fields"]as$o){if($o["comment"]!=""){$tb=true;break;}}}edit_fields($K["fields"],$ob,"TABLE",$Tc,$tb);echo'</table>
<p>
',lang(48),': <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(166),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($tb?" checked":"").">".lang(47)."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($tb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}if(support("partitioning")){$vf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",lang(167),$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$uf,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
',lang(168),': <input type="number" name="partitions" class="size',($vf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($vf?"":" class='hidden'"),'>
<thead><tr><th>',lang(169),'<th>',lang(170),'</thead>
';foreach($K["partition_names"]as$y=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($y==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$y]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$td=array("PRIMARY","UNIQUE","INDEX");$S=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$S["Engine"]))$td[]="FULLTEXT";if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.7?'|InnoDB':'').'~i',$S["Engine"]))$td[]="SPATIAL";$w=indexes($a);$Kf=array();if($x=="mongo"){$Kf=$w["_id_"];unset($td[0]);unset($w["_id_"]);}$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$v){$C=$v["name"];if(in_array($v["type"],$td)){$e=array();$ce=array();$Qb=array();$O=array();ksort($v["columns"]);foreach($v["columns"]as$y=>$d){if($d!=""){$be=$v["lengths"][$y];$Pb=$v["descs"][$y];$O[]=idf_escape($d).($be?"(".(+$be).")":"").($Pb?" DESC":"");$e[]=$d;$ce[]=($be?$be:null);$Qb[]=$Pb;}}if($e){$yc=$w[$C];if($yc){ksort($yc["columns"]);ksort($yc["lengths"]);ksort($yc["descs"]);if($v["type"]==$yc["type"]&&array_values($yc["columns"])===$e&&(!$yc["lengths"]||array_values($yc["lengths"])===$ce)&&array_values($yc["descs"])===$Qb){unset($w[$C]);continue;}}$c[]=array($v["type"],$C,$O);}}}foreach($w
as$C=>$yc)$c[]=array($yc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(171),alter_indexes($a,$c));}page_header(lang(124),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$y=>$v){if($v["columns"][count($v["columns"])]!="")$K["indexes"][$y]["columns"][]="";}$v=end($K["indexes"]);if($v["type"]||array_filter($v["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($w
as$y=>$v){$w[$y]["name"]=$y;$w[$y]["columns"][]="";}$w[]=array("columns"=>array(1=>""));$K["indexes"]=$w;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th id="label-type">',lang(172),'<th><input type="submit" class="wayoff">',lang(173),'<th id="label-name">',lang(174);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.3.1' alt='+' title='<?php echo
lang(99),'\'></noscript>&nbsp;
</thead>
';if($Kf){echo"<tr><td>PRIMARY<td>";foreach($Kf["columns"]as$y=>$d){echo
select_input(" disabled",$p,$d),"<label><input disabled type='checkbox'>".lang(56)."</label> ";}echo"<td><td>\n";}$Jd=1;foreach($K["indexes"]as$v){if(!$_POST["drop_col"]||$Jd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Jd][type]",array(-1=>"")+$td,$v["type"],($Jd==count($K["indexes"])?"indexesAddRow(this);":1),"label-type"),"<td>";ksort($v["columns"]);$s=1;foreach($v["columns"]as$y=>$d){echo"<span>".select_input(" name='indexes[$Jd][columns][$s]' onchange=\"".($s==count($v["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".h(js_escape($x=="sql"?"":$_GET["indexes"]."_"))."');\" title='".lang(45)."'",($p?array_combine($p,$p):$p),$d),($x=="sql"||$x=="mssql"?"<input type='number' name='indexes[$Jd][lengths][$s]' class='size' value='".h($v["lengths"][$y])."' title='".lang(97)."'>":""),($x!="sql"?checkbox("indexes[$Jd][descs][$s]",1,$v["descs"][$y],lang(56)):"")," </span>";$s++;}echo"<td><input name='indexes[$Jd][name]' value='".h($v["name"])."' autocapitalize='off' aria-labelledby='label-name'>\n","<td><input type='image' class='icon' name='drop_col[$Jd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.3.1' alt='x' title='".lang(102)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Jd++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(175),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),lang(176),rename_database($C,$K["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$ah=true;$Vd="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$K["collation"]))$ah=false;$Vd=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($Vd),lang(177),$ah);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),lang(178));}}page_header(DB!=""?lang(64):lang(106),$n,array(),h(DB));$ob=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$ob);elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$ad){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$ad,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($ob?html_select("collation",array(""=>"(".lang(92).")")+$ob,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.3.1' alt='+' title='".lang(99)."'>\n";echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(179));else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(180));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(181));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(65):lang(66),$n);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(182).": ".h($da),$n);$rg=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$rd=array();$nf=array();foreach($rg["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$nf[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$rd[]=$s;}if(!$n&&$_POST){$Ya=array();foreach($rg["fields"]as$y=>$o){if(in_array($y,$rd)){$X=process_input($o);if($X===false)$X="''";if(isset($nf[$y]))$g->query("SET @".idf_escape($o["field"])." = $X");}$Ya[]=(isset($nf[$y])?"@".idf_escape($o["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".table($da)."(".implode(", ",$Ya).")";echo"<p><code class='jush-$x'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(183,$g->affected_rows)."\n";}while($g->next_result());if($nf)select($g->query("SELECT ".implode(", ",$nf)));}}echo'
<form action="" method="post">
';if($rd){echo"<table cellspacing='0'>\n";foreach($rd
as$y){$o=$rg["fields"][$y];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(182),'">
<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$se=($_POST["drop"]?lang(184):($C!=""?lang(185):lang(186)));$A=ME."table=".urlencode($a);if(!$_POST["drop"]){$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$oh=array();foreach($K["source"]as$y=>$X)$oh[$y]=$K["target"][$y];$K["target"]=$oh;}if($x=="sqlite")queries_redirect($A,$se,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Zb="\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$Zb,$A,$se);else{query_redirect($c.($C!=""?"$Zb,":"")."\nADD".format_foreign_key($K),$A,$se);$n=lang(187)."<br>$n";}}}page_header(lang(188),$n,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Tc=foreign_keys($a);$K=$Tc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$Qg=array_keys(fields($a));$oh=($a===$K["table"]?$Qg:array_keys(fields($K["table"])));$cg=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo
lang(189),':
',html_select("table",$cg,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(190),'"></noscript>
<table cellspacing="0">
<thead><tr><th id="label-source">',lang(126),'<th id="label-target">',lang(127),'</thead>
';$Jd=0;foreach($K["source"]as$y=>$X){echo"<tr>","<td>".html_select("source[".(+$y)."]",array(-1=>"")+$Qg,$X,($Jd==count($K["source"])-1?"foreignAddRow(this);":1),"label-source"),"<td>".html_select("target[".(+$y)."]",$oh,$K["target"][$y],1,"label-target");$Jd++;}echo'</table>
<p>
',lang(94),': ',html_select("on_delete",array(-1=>"")+explode("|",$Te),$K["on_delete"]),' ',lang(93),': ',html_select("on_update",array(-1=>"")+explode("|",$Te),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(191),'"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;$kf="VIEW";if($x=="pgsql"&&$a!=""){$P=table_status($a);$kf=strtoupper($P["Engine"]);}if($_POST&&!$n){$C=trim($K["name"]);$Ga=" AS\n$K[select]";$A=ME."table=".urlencode($C);$se=lang(192);$U=($_POST["materialized"]?"MATERIALIZED VIEW":"VIEW");if(!$_POST["drop"]&&$a==$C&&$x!="sqlite"&&$U=="VIEW"&&$kf=="VIEW")query_redirect(($x=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ga,$A,$se);else{$qh=$C."_adminer_".uniqid();drop_create("DROP $kf ".table($a),"CREATE $U ".table($C).$Ga,"DROP $U ".table($C),"CREATE $U ".table($qh).$Ga,"DROP $U ".table($qh),($_POST["drop"]?substr(ME,0,-1):$A),lang(193),$se,lang(194),$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;$K["materialized"]=($kf!="VIEW");if(!$n)$n=error();}page_header(($a!=""?lang(41):lang(195)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(174),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',(support("materializedview")?" ".checkbox("materialized",1,$K["materialized"],lang(121)):""),'<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Ad=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Wg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(196));elseif(in_array($K["INTERVAL_FIELD"],$Ad)&&isset($Wg[$K["STATUS"]])){$wg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(197):lang(198)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$wg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$wg)."\n".$Wg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(199).": ".h($aa):lang(200)),$n);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(174),'<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(201),'<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">',lang(202),'<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>',lang(203),'<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$Ad,$K["INTERVAL_FIELD"]),'<tr><th>',lang(109),'<td>',html_select("STATUS",$Wg,$K["STATUS"]),'<tr><th>',lang(47),'<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",lang(204)),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$rg=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$n){$qh="$K[name]_adminer_".uniqid();drop_create("DROP $rg ".idf_escape($da),create_routine($rg,$K),"DROP $rg ".idf_escape($K["name"]),create_routine($rg,array("name"=>$qh)+$K),"DROP $rg ".idf_escape($qh),substr(ME,0,-1),lang(205),lang(206),lang(207),$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(208):lang(209)).": ".h($da):(isset($_GET["function"])?lang(210):lang(211))),$n);if(!$_POST&&$da!=""){$K=routine($da,$rg);$K["name"]=$da;}$ob=get_vals("SHOW CHARACTER SET");sort($ob);$sg=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(174),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($sg?lang(19).": ".html_select("language",$sg,$K["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$ob,$rg);if(isset($_GET["function"])){echo"<tr><td>".lang(212);edit_type("returns",$K["returns"],$ob);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,lang(213));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(214));elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,lang(215));else
redirect($_);}page_header($fa!=""?lang(216).": ".h($fa):lang(217),$n);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,lang(218));else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,lang(219));}page_header($ga!=""?lang(220).": ".h($ga):lang(221),$n);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(119)."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$Nh=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$Nh["Timing"])&&in_array($_POST["Event"],$Nh["Event"])&&in_array($_POST["Type"],$Nh["Type"])){$Se=" ON ".table($a);$Zb="DROP TRIGGER ".idf_escape($C).($x=="pgsql"?$Se:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Zb,$A,lang(222));else{if($C!="")queries($Zb);queries_redirect($A,($C!=""?lang(223):lang(224)),queries(create_trigger($Se,$_POST)));if($C!="")queries(create_trigger($Se,$K+array("Type"=>reset($Nh["Type"]))));}}$K=$_POST;}page_header(($C!=""?lang(225).": ".h($C):lang(226)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(227),'<td>',html_select("Timing",$Nh["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(228),'<td>',html_select("Event",$Nh["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$Nh["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>',lang(46),'<td>',html_select("Type",$Nh["Type"],$K["Type"]),'</table>
<p>',lang(174),': <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($C!=""){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Pf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$zb)$Pf[$zb][$K["Privilege"]]=$K["Comment"];}$Pf["Server Admin"]+=$Pf["File access on server"];$Pf["Databases"]["Create routine"]=$Pf["Procedures"]["Create routine"];unset($Pf["Procedures"]["Create routine"]);$Pf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Pf["Columns"][$X]=$Pf["Tables"][$X];unset($Pf["Server Admin"]["Usage"]);foreach($Pf["Tables"]as$y=>$X)unset($Pf["Databases"][$y]);$Ee=array();if($_POST){foreach($_POST["objects"]as$y=>$X)$Ee[$X]=(array)$Ee[$X]+(array)$_POST["grants"][$y];}$bd=array();$Qe="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$ke,PREG_SET_ORDER)){foreach($ke
as$X){if($X[1]!="USAGE")$bd["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$bd["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Qe=$B[1];}}if($_POST&&!$n){$Re=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Re",ME."privileges=",lang(229));else{$Ge=q($_POST["user"])."@".q($_POST["host"]);$yf=$_POST["pass"];if($yf!=''&&!$_POST["hashed"]){$yf=$g->result("SELECT PASSWORD(".q($yf).")");$n=!$yf;}$Db=false;if(!$n){if($Re!=$Ge){$Db=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ge IDENTIFIED BY PASSWORD ".q($yf));$n=!$Db;}elseif($yf!=$Qe)queries("SET PASSWORD FOR $Ge = ".q($yf));}if(!$n){$og=array();foreach($Ee
as$Le=>$ad){if(isset($_GET["grant"]))$ad=array_filter($ad);$ad=array_keys($ad);if(isset($_GET["grant"]))$og=array_diff(array_keys(array_filter($Ee[$Le],'strlen')),$ad);elseif($Re==$Ge){$Oe=array_keys((array)$bd[$Le]);$og=array_diff($Oe,$ad);$ad=array_diff($ad,$Oe);unset($bd[$Le]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Le,$B)&&(!grant("REVOKE",$og,$B[2]," ON $B[1] FROM $Ge")||!grant("GRANT",$ad,$B[2]," ON $B[1] TO $Ge"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Re!=$Ge)queries("DROP USER $Re");elseif(!isset($_GET["grant"])){foreach($bd
as$Le=>$og){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Le,$B))grant("REVOKE",array_keys($og),$B[2]," ON $B[1] FROM $Ge");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(230):lang(231)),!$n);if($Db)$g->query("DROP USER $Ge");}}page_header((isset($_GET["host"])?lang(33).": ".h("$ha@$_GET[host]"):lang(138)),$n,array("privileges"=>array('',lang(68))));if($_POST){$K=$_POST;$bd=$Ee;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Qe;if($Qe!="")$K["hashed"]=true;$bd[(DB==""||$bd?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(32),'<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],lang(232),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(68).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($bd
as$Le=>$ad){echo'<th>'.($Le!="*.*"?"<input name='objects[$s]' value='".h($Le)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(32),"Databases"=>lang(35),"Tables"=>lang(123),"Columns"=>lang(45),"Procedures"=>lang(233),)as$zb=>$Pb){foreach((array)$Pf[$zb]as$Of=>$sb){echo"<tr".odd()."><td".($Pb?">$Pb<td":" colspan='2'").' lang="en" title="'.h($sb).'">'.h($Of);$s=0;foreach($bd
as$Le=>$ad){$C="'grants[$s][".h(strtoupper($Of))."]'";$Y=$ad[strtoupper($Of)];if($zb=="Server Admin"&&$Le!=(isset($bd["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(234)."<option value='0'".($Y=="0"?" selected":"").">".lang(235)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($Of=="All privileges"?" id='grants-$s-all'":($Of=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(119),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Qd=0;foreach((array)$_POST["kill"]as$X){if(kill_process($X))$Qd++;}queries_redirect(ME."processlist=",lang(236,$Qd),$Qd||!$_POST["kill"]);}page_header(lang(107),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$K){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$y=>$X)echo"<th>$y".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($y),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K[$x=="sql"?"Id":"pid"],0):"");foreach($K
as$y=>$X)echo"<td>".(($x=="sql"&&$y=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($x=="pgsql"&&$y=="current_query"&&$X!="<IDLE>")||($x=="oracle"&&$y=="sql_text"&&$X!="")?"<code class='jush-$x'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.lang(237).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".lang(238,max_connections()),"<p><input type='submit' value='".lang(239)."'>\n";}echo'<input type="hidden" name="token" value="',$Dh,'">
</form>
';}elseif(isset($_GET["replication"])){page_header(lang(110));echo"<h3>".lang(240).doc_link(array("sql"=>"show-master-status.html"))."</h3>\n";$ie=replication_status("MASTER");if(!$ie)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($ie[0]as$y=>$X){echo"<tr>","<th>".h($y),"<td>".nbsp($X);}echo"</table>\n";}$Ng=replication_status("SLAVE");if($Ng){echo"<h3>".lang(241).doc_link(array("sql"=>"show-slave-status.html"))."</h3>\n";foreach($Ng[0]as$Mg){echo"<table cellspacing='0'>\n";foreach($Mg
as$y=>$X){echo"<tr>","<th>".h($y),"<td>".nbsp($X);}echo"</table>\n";}}}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$w=indexes($a);$p=fields($a);$Tc=column_foreign_keys($a);$Ne="";if($S["Oid"]){$Ne=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Ne));}parse_str($_COOKIE["adminer_import"],$ya);$pg=array();$e=array();$uh=null;foreach($p
as$y=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){$e[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$uh=$b->selectLengthProcess();}$pg+=$o["privileges"];}list($M,$cd)=$b->selectColumnsProcess($e,$w);$Ed=count($cd)<count($M);$Z=$b->selectSearchProcess($p,$w);$df=$b->selectOrderProcess($p,$w);$z=$b->selectLimitProcess();$Yc=($M?implode(", ",$M):"*".($Ne?", $Ne":"")).convert_fields($e,$p,$M)."\nFROM ".table($a);$dd=($cd&&$Ed?"\nGROUP BY ".implode(", ",$cd):"").($df?"\nORDER BY ".implode(", ",$df):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Vh=>$K){$Ga=convert_field($p[key($K)]);$M=array($Ga?$Ga:idf_escape(key($K)));$Z[]=where_check($Vh,$p);$J=$Xb->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$n){$si=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$eb=array();foreach($_POST["check"]as$bb)$eb[]=where_check($bb,$p);$si[]="((".implode(") OR (",$eb)."))";}$si=($si?"\nWHERE ".implode(" AND ",$si):"");$Kf=$Xh=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$Kf=array_flip($v["columns"]);$Xh=($M?$Kf:array());break;}}foreach((array)$Xh
as$y=>$X){if(in_array(idf_escape($y),$M))unset($Xh[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Xh===array())$H="SELECT $Yc$si$dd";else{$Th=array();foreach($_POST["check"]as$X)$Th[]="(SELECT".limit($Yc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$dd,1).")";$H=implode(" UNION ALL ",$Th);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Tc)){if($_POST["save"]||$_POST["delete"]){$I=true;$za=0;$O=array();if(!$_POST["delete"]){foreach($e
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($Xh===array()&&is_array($_POST["check"]))||$Ed){$I=($_POST["delete"]?$Xb->delete($a,$si):($_POST["clone"]?queries("INSERT $H$si"):$Xb->update($a,$O,$si)));$za=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$ri="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$Xb->delete($a,$ri,1):($_POST["clone"]?queries("INSERT".limit1($H,$ri)):$Xb->update($a,$O,$ri)));if(!$I)break;$za+=$g->affected_rows;}}}$se=lang(242,$za);if($_POST["clone"]&&$I&&$za==1){$Wd=last_id();if($Wd)$se=lang(160," $Wd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$se,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(243);else{$I=true;$za=0;foreach($_POST["val"]as$Vh=>$K){$O=array();foreach($K
as$y=>$X){$y=bracket_escape($y,1);$O[idf_escape($y)]=(preg_match('~char|text~',$p[$y]["type"])||$X!=""?$b->processInput($p[$y],$X):"NULL");}$I=$Xb->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Vh,$p),!($Ed||$Xh===array())," ");if(!$I)break;$za+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(242,$za),$I);}}elseif(!is_string($Jc=get_file("csv_file",true)))$n=upload_error($Jc);elseif(!preg_match('~~u',$Jc))$n=lang(244);else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$I=true;$pb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Jc,$ke);$za=count($ke[0]);$Xb->begin();$Dg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($ke[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Dg]*)$Dg~",$X.$Dg,$le);if(!$y&&!array_diff($le[1],$pb)){$pb=$le[1];$za--;}else{$O=array();foreach($le[1]as$s=>$lb)$O[idf_escape($pb[$s])]=($lb==""&&$p[$pb[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$lb))));$L[]=$O;}}$I=(!$L||$Xb->insertUpdate($a,$L,$Kf));if($I)$I=$Xb->commit();queries_redirect(remove_from_uri("page"),lang(245,$za),$I);$Xb->rollback();}}}$gh=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(50).": $gh",$n);$O=null;if(isset($pg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Tc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($S,$O);if(!$e&&support("table"))echo"<p class='error'>".lang(246).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$e);$b->selectSearchPrint($Z,$e,$w);$b->selectOrderPrint($df,$e,$w);$b->selectLimitPrint($z);$b->selectLengthPrint($uh);$b->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Wc=$g->result(count_rows($a,$Z,$Ed,$cd));$E=floor(max(0,$Wc-1)/$z);}$Ag=$M;if(!$Ag){$Ag[]="*";if($Ne)$Ag[]=$Ne;}$_b=convert_fields($e,$p,$M);if($_b)$Ag[]=substr($_b,2);$I=$Xb->select($a,$Ag,$Z,$cd,$df,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$I->seek($z*$E);$mc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$x=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$cd&&$Ed&&$x=="sql")$Wc=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".lang(12)."\n";else{$Pa=$b->backwardKeys($a,$gh);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$cd&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);' class='jsonly'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(247)."</a>");$De=array();$Zc=array();reset($M);$Yf=1;foreach($L[0]as$y=>$X){if($y!=$Ne){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$y];$C=($o?$b->fieldName($o,$Yf):($X["fun"]?"*":$y));if($C!=""){$Yf++;$De[$y]=$C;$d=idf_escape($y);$nd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Pb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($nd.($df[0]==$d||$df[0]==$y||(!$df&&$Ed&&$cd[0]==$d)?$Pb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($nd.$Pb)."' title='".lang(56)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(53).'" class="text jsonly"> =</a>';echo"</span>";}$Zc[$y]=$X["fun"];next($M);}}$ce=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$y=>$X)$ce[$y]=max($ce[$y],min(40,strlen(utf8_decode($X))));}}echo($Pa?"<th>".lang(248):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Tc)as$Ce=>$K){$Uh=unique_array($L[$Ce],$w);if(!$Uh){$Uh=array();foreach($L[$Ce]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$Uh[$y]=$X;}}$Vh="";foreach($Uh
as$y=>$X){if(($x=="sql"||$x=="pgsql")&&strlen($X)>64){$y=(strpos($y,'(')?$y:idf_escape($y));$y="MD5(".($x=='sql'&&preg_match("~^utf8_~",$p[$y]["collation"])?$y:"CONVERT($y USING ".charset($g).")").")";$X=md5($X);}$Vh.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$cd&&$M?"":"<td>".checkbox("check[]",substr($Vh,1),in_array(substr($Vh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Ed||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Vh)."'>".lang(249)."</a>"));foreach($K
as$y=>$X){if(isset($De[$y])){$o=$p[$y];if($X!=""&&(!isset($mc[$y])||$mc[$y]!=""))$mc[$y]=(is_mail($X)?$De[$y]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($y).$Vh;if(!$_&&$X!==null){foreach((array)$Tc[$y]as$q){if(count($Tc[$y])==1||end($q["source"])==$y){$_="";foreach($q["source"]as$s=>$Qg)$_.=where_link($s,$q["target"][$s],$L[$Ce][$Qg]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if($q["ns"])$_=preg_replace('~([?&]ns=)[^&]+~','\\1'.urlencode($q["ns"]),$_);if(count($q["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Uh))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Uh
as$Kd=>$W)$_.=where_link($s++,$Kd,$W);}$X=select_value($X,$_,$o,$uh);$t=h("val[$Vh][".bracket_escape($y)."]");$Y=$_POST["val"][$Vh][bracket_escape($y)];$hc=!is_array($K[$y])&&is_utf8($X)&&$L[$Ce][$y]==$K[$y]&&!$Zc[$y];$th=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$hc)||$Y!==null){$fd=h($Y!==null?$Y:$K[$y]);echo"<td>".($th?"<textarea name='$t' cols='30' rows='".(substr_count($K[$y],"\n")+1)."'>$fd</textarea>":"<input name='$t' value='$fd' size='$ce[$y]'>");}else{$ge=strpos($X,"<i>...</i>");echo"<td id='$t' onclick=\"selectClick(this, event, ".($ge?2:($th?1:0)).($hc?"":", '".h(lang(250))."'").");\">$X";}}}if($Pa)echo"<td>";$b->backwardKeysPrint($Pa,$L[$Ce]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$wc=true;if($_GET["page"]!="last"){if(!+$z)$Wc=count($L);elseif($x!="sql"||!$Ed){$Wc=($Ed?false:found_rows($S,$Z));if($Wc<max(1e4,2*($E+1)*$z))$Wc=reset(slow_query(count_rows($a,$Z,$Ed,$cd)));else$wc=false;}}if(+$z&&($Wc===false||$Wc>$z||$E)){echo"<p class='pages'>";$ne=($Wc===false?$E+(count($L)>=$z?2:1):floor(($Wc-1)/$z));if($x!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(251)."', '".($E+1)."'), event); return false;\">".lang(251)."</a>:",pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($ne,$E+5);$s++)echo
pagination($s,$E);if($ne>0){echo($E+5<$ne?" ...":""),($wc&&$Wc!==false?pagination($ne,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ne'>".lang(252)."</a>");}echo(($Wc===false?count($L)+1:$Wc-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(253).'...\');" class="loadmore">'.lang(254).'</a>':'');}else{echo
lang(251).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($ne>$E?pagination($E+1,$E).($ne>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Wc!==false?"(".($wc?"":"~ ").lang(142,$Wc).") ":"");$Ub=($wc?"":"~ ").$Wc;echo
checkbox("all",1,0,lang(255),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Ub' : checked); selectCount('selected2', this.checked || !checked ? '$Ub' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(247),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(243).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(118),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(237),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$Uc=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Uc['sql']);break;}}if($Uc){print_fieldset("export",lang(70)." <span id='selected2'></span>");$of=$b->dumpOutput();echo($of?html_select("output",$of,$ya["output"])." ":""),html_select("format",$Uc,$ya["format"])," <input type='submit' name='export' value='".lang(70)."'>\n","</div></fieldset>\n";}echo(!$cd&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(69),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".lang(69)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($mc,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$Dh'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$P=isset($_GET["status"]);page_header($P?lang(109):lang(108));$ki=($P?show_status():show_variables());if(!$ki)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($ki
as$y=>$X){echo"<tr>","<th><code class='jush-".$x.($P?"status":"set")."'>".h($y)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$dh=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$S){json_row("Comment-$C",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$y)json_row("$y-$C",nbsp($S[$y]));foreach($dh+array("Auto_increment"=>0,"Rows"=>0)as$y=>$X){if($S[$y]!=""){$X=format_number($S[$y]);json_row("$y-$C",($y=="Rows"&&$X&&$S["Engine"]==($Tg=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($dh[$y]))$dh[$y]+=($S["Engine"]!="InnoDB"||$y!="Data_free"?$S[$y]:0);}elseif(array_key_exists($y,$S))json_row("$y-$C");}}}foreach($dh
as$y=>$X)json_row("sum-$y",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$mh=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($mh&&!$n&&!$_POST["search"]){$I=true;$se="";if($x=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$se=lang(256);}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$se=lang(257);}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$se=lang(258);}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$se=lang(259);}elseif($x!="sql"){$I=($x=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$se=lang(260);}elseif(!$_POST["tables"])$se=lang(9);elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$se.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$se,$I);}page_header(($_GET["ns"]==""?lang(35).": ".h(DB):lang(73).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(261)."</h3>\n";$lh=tables_list();if(!$lh)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(262)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(53)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}$Vb=doc_link(array('sql'=>'show-table-status.html'));echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);" class="jsonly">','<th>'.lang(123),'<td>'.lang(263).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(114).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(264).$Vb,'<td>'.lang(265).$Vb,'<td>'.lang(266).$Vb,'<td>'.lang(48).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(267).$Vb,(support("comment")?'<td>'.lang(47).$Vb:''),"</thead>\n";$T=0;foreach($lh
as$C=>$U){$ni=($U!==null&&!preg_match('~table~i',$U));$t=h("Table-".$C);echo'<tr'.odd().'><td>'.checkbox(($ni?"views[]":"tables[]"),$C,in_array($C,$mh,true),"","formUncheck('check-all');","",$t),'<th>'.(support("table")||support("indexes")?"<a href='".h(ME)."table=".urlencode($C)."' title='".lang(40)."' id='$t'>".h($C).'</a>':h($C));if($ni){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(41).'">'.(preg_match('~materialized~i',$U)?lang(121):lang(122)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(39).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(42)),"Index_length"=>array("indexes",lang(125)),"Data_free"=>array("edit",lang(43)),"Auto_increment"=>array("auto_increment=1&create",lang(42)),"Rows"=>array("select",lang(39)),)as$y=>$_){$t=" id='$y-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$y=="Rows"||(support("indexes")&&$y!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$t title='$_[1]'>?</a>":"<span$t>?</span>"):"<td id='$y-".h($C)."'>&nbsp;");}$T++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(238,count($lh)),"<td>".nbsp($x=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$y)echo"<td align='right' id='sum-$y'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$hi="<input type='submit' value='".lang(268)."'".on_help("'VACUUM'")."> ";$Ze="<input type='submit' name='optimize' value='".lang(269)."'".on_help($x=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(118)." <span id='selected'></span></legend><div>".($x=="sqlite"?$hi:($x=="pgsql"?$hi.$Ze:($x=="sql"?"<input type='submit' value='".lang(270)."'".on_help("'ANALYZE TABLE'")."> ".$Ze."<input type='submit' name='check' value='".lang(271)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(272)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(273)."'".confirm().on_help($x=="sqlite"?"'DELETE'":"'TRUNCATE".($x=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(119)."'".confirm().on_help("'DROP TABLE'").">\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$x!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(274).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(275)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(276)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $T);":"")."\">\n";echo"<input type='hidden' name='token' value='$Dh'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(71)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(195)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(135)."</h3>\n";$tg=routines();if($tg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(174).'<td>'.lang(46).'<td>'.lang(212)."<td>&nbsp;</thead>\n";odd('');foreach($tg
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.lang(128)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(211).'</a>':'').'<a href="'.h(ME).'function=">'.lang(210)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(277)."</h3>\n";$Fg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($Fg){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."</thead>\n";odd('');foreach($Fg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(217)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(24)."</h3>\n";$fi=types();if($fi){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."</thead>\n";odd('');foreach($fi
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(221)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(136)."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(174)."<td>".lang(278)."<td>".lang(201)."<td>".lang(202)."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?lang(279)."<td>".$K["Execute at"]:lang(203)." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.lang(128).'</a>';}echo"</table>\n";$uc=$g->result("SELECT @@event_scheduler");if($uc&&$uc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($uc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(200)."</a>\n";}if($lh)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();