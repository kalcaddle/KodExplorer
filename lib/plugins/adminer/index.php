<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.0.3
*/error_reporting(6135);$Hc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Hc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$zh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($zh)$$X=$zh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒÞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Þn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1ÌŽs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŽŒFÃ©”vt2ž‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅŽÃžôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PÐ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛÐ889¤È ŽQØýŒî2#8Ð­£’˜6mú²†ðjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ð¼o(Úó¥ÉkÔ7½sàù>Œî†!ÐR\"*nSý\0@P\"Áè’(‹#[¶¥£@g¹oü­’znþ9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ðè!°üë*cì÷>ÎŽ¬E7DñLJ© 1ÊJ=ÓÚÞ1L‚û?Ðs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ð\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[ÝsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀÞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>ŽlÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´Ý¢gŒnË©¸¹TÐ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdÝÝ è2cˆê4²k¿Š£\rG•æE6_²ªÊØÞ‰b‹ž/Œ«HB%ò0ë¢>ÈÈðhoWÃnxlÖ æµƒCQ^€°ÐÔÿßñ\r„Š¾¶4lK{þZÆü:†ÐÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´‘(ëTòŸ%®µJ›0ªlØT¶`+É-Á¾@BÚáÛ„Vá’Ä\0ÂÏC¼,ì¯0tâàŒF‡‰å?Ä Ë\na@ÉŒ>‚âZEC“ôOŽ-æ›¤^Q€&ßÖù)I)®¤ÄÀR„]\r¡”9”7_ˆ¢\rÉF80µObù	€‘î>ºäý\nRý_ˆÑ8æ‚ØÙ«äov0¤bCA¸F!Ñt—–Äƒ%0”/‘zAYO(4«‹¡ˆ¨Ò	'Ÿ] Iéí8hHÂ05˜3ò@x&nˆ’|TÓ³³)`.“s6eY˜D¦z¸Œ®¥ƒJÑ“ôž.„ñ{GEb¹Ó‹¡˜‹†2Õ×{\$**ý¾@ÝCž-:zYHZIôà5F]¦²YúùCªOêAÂÚó`x'´.*9t'{ÿ(êšwP¶¾ Ñ=¢*‰†ú*üxwråÔ*c‚žÌc|„DŸ“ÚV—–\r†V.‡0âÆ™V¤dˆ?Ò€üê,EÍ`T¦É6Ûˆ-“Åì¾ÅÚŽT[Ñªz©‚.Ar±£Í€Pøºnƒc=aÔ9Fònß!ÙuáÎA©Þƒ0iPó¬”îºJ6eäT]VØ[\rXÌáaŸ–vkõ\n+EˆáÜ•*\0¶~¶Æù@g\"ÌNCI\$àÉŒƒ€êx@WÃy¼*vuD‚8÷=ë­ª-v´®4›dÃD’yI‚Ò¤­¼_hÞÀ'z’VÍ¶• žÜ6€YzŽ:íQcž³Ú²”õwŒª0ÀÅ]xrÄ!å@¶½/-¡*Ì5©«¤I.±]ÐYxuÁÝé½o&Ö:Pß|CyÖ²wÖûÇÀ@L¯´Õ£GfØ†å¯)^¤Æ¢+–ÍQ5‚ºÀÆL4\$Mpo‰0i¦\rÛ»Ïk­ô4*w7•¯S'’—ZÝ„nAb¨!1‡)ñoÝ–9öc\0bÊïo-~2w4X,,…¶8m'™Ž›˜ìªY•ƒFH–Á3GqQZ-l™\0ãÊwìe‹d5¥¢»ÁðéiÏ.«–™dã)\\çh~\\WÌ€æ™LÃ¡¸ÜÐmgòu«2lbš•àZçCÐ-6Èê–dœl£¨b\re×Mu§gra6ZD†­ƒUÊ™!K-œŸ0Ó9–beH”\"ê×[JË'¨¾»Z¼¡oµaº)‹XÉÆƒ&—tÒ8ºì€GZ.®ÅÚ˜Âë+³lr£ÊíÌ¯]kÙ#£Àj-§¹ëúW´ÉP,¡àè>@ä` \rc3\"\\ÒŠq2‰z›âê@Mï¾poà‘ª0p­ò¤d~OÙ™Ç¦ö…½¸]¡´aï»;IxÆùxh°aÌÍ‡ò¬0NŽàâ~gâï?	€äLŒcuÍäw”£}úŠªt™æ<±…¥ÃÅ·¼qS’vÚ°@gsW}òL¸(kyÈ¹/6»CÐ8\rŒ‡°]\\£çLUöÞ^•nqiQÏn™T>A9\"ô´—kFôÕÚú.*îß¹²¹íŽßT†òóCµ‘r?:ÀÜ„üwžMß,î\$m|‘xîm‘øÿ“¡÷©Bmu	®ð=é[ˆÆ ynÃ'÷½h¾ûÚì@óÞCœv¥S2dSVÑ ¨(‡ñ\">H‰{¾-G˜ºmM¼b+hBb›cp€Ãh_ Á¶}qöþïÖ«¿e¶†_ÂmÁinüæà8€àÃ#çý`·öþÿÀm?õÿ«ü~ˆÿcDþoþþ ÆÐª¯úýÜþoô4@ïÜéØ‚é<I\0``fˆÌŠº8	€ÉD”OªýôzÀÞþpM\0ê\rð\0üÐþ\"¤xþhð^§ÀØðjþpp¿ptƒ0x§à¿0oPdbi<+àùïó0j•à`)SpýðLàì)° ýð²1‹0ºÐ,ò¥ìù\n`ýðjZÏ½ð‡p±P^ÿPÓ0#)Íhð‹èýçºxd0ÂÐ:++ô·É<úgß	ÐO`ÎûHûƒÙˆ\rbÒÛÑ%àÆ°ÔüQ'ñ-‘1P_°²\r¤cß+@®\rqèÑ(˜ÑGð‰ñk1AwñwoÑ‚nþq2qd®‘\0×G\$ aÍOæ\0Û1ŒJ©Ñ'ñ³CÙ‘“‘„ŠÔ«ÆL`\$q±s±=‘JŒGHF.‚0Öö©=1÷Ïþ™Àó\0Q‘ ‘„7æÿÒ§h3\nÙ 1à¯þ2fª`Â/ÌÿPq!0Ù!pªò?që\$Ðz,A°WrH§ë÷%pL\0Ï\$°×%‘?#&Òq	°Ñ&’s Úª&P­%²M(²'’ƒ'rF5ÀÆ™rM\$PÙ*R©(ržð7\0…,1^üF%ÒËì„&P_)…-0‚0\"Á¨Ä¬Öžï¹ò¦“±ØH‰B–PÁñ¹#pûÌí° ªØ­Ã®+#òÕ\rppûBšÓüRS2&ò2¯Ñ-Ž®þr±3nhÑö€Å0è§À§Jy%*°VÁò])²G\r\"­5,¾ù°õ]6Q7Ñ\$ƒ3€üPM8rÓ\$s‹3’Gàe0	<8B8©<,( ¨8²Ùàè	Ó&šJÙ;€¦Ï)¤«ÀR6pÖ­lðGË\"12ð6Ë¾.\"æ¿bï7¡\$: Ü8bêA1Ù:Ã';?;G*\$¼,³Ànõ<`òTÓÊ/3Ï¨Ñf¬");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIî(.‹Äq¨àöO)ŒÆÌ¢ã‘”á1™E#)œŠx8\nâ‚ñð¸\\9ŠDâ¹„®d+¡ÑÎgÁ%(R,‰BqH®' ‘Gâq.›,2Ž„õÁÙö‚AGCyœÏ#L’S±„ä\nŠL†óÖ8n:ŒæS¡G‡:\$“%æö;—Æ)ÒØ™²Qš´G¢sEèÉØÄö­)“Nn¶MN‡S‘¸@t9L¶Û|1›Íæ³LêTi3›…†C	æ’{¾ßù±é¸Êw0±@¤wÓ™œñ®çƒãíÎ«¼Îw{…ÈJ8\\C(÷É¨ÄZ¦j9´a[ÀÞ -òä;!ƒHÌ<ŠÈ`æß…(äš±	+‚á¸ªÂ2\r£K¬9ð@å Áè`…‹¼èPPä™0L#±#jô±Ã+ ¡EÉ’Ù£pæ9aèØÂ;mø\\8CzèàŠ€^Žò¨]\rÃ°ø\\7ŽC8_Dƒp^ÂP é\0Ì± w &c4^ŽRãN9DÓ\\Ü™Ãjü3ÃÂ@Êä\r8a;Mïl7ƒd<3´cpÞÐ“Àæ:)\\;¯C ÐÑ†ïå!6HT¥,4Oã=Ñ†!pdÇTøÌSs;Éc}&&Œ¨ˆÂÅ„Á5cYÊíp‹1`ÓI£èbKPRtªf2Xé»›F Ã-!\rŒ–icYú„ŽWL\\PÞ®#r'b–]^2ÝØääCÍŽ1É(4—&ÉôD¥*JÒÄ<†]Ã:¸è/ÀTô:tÜ¿7áèPaH^?ƒ(ÇsÆs¦0»ÐPQƒá0³ç„÷ô?á‘*—\rØb.Å.ðû™…ƒ2ñfO|fÄ<ìk2L¢…07êä®8øÈ!´£c+6fW#~<I+!-ÐQªâ×H÷:â!\"šèÊ2	5“ø’¶M£m±1+èØÝ-±fá³‡»„¶8\\£˜·½nûFÔ<¡ÞÚÚ…ÞÊìò¸èÜ\r#ê…ŽaväÝƒàö>…2’1ÁN(Èð<¶²´ô¨XñtÀ‹†§cŠ•Û:•Úù‚¦®«®'‰ò€¡ÊWÚŒê€RE8ÒØ±›p@š…Ü èÎú5ÚÑ¨À·(8/Ñ§b3ö~\"J;é©Ò)^„=‡dŠv²JÀ¤þäÌ'\rí:ÛÃ¶È§[ íÆ˜ÅƒYvåüÜ×ä÷ŸYæà¶’CLÐ(7a„ÀÎŠ	z¤a­³±ÕÖgƒ2\\\rªô“ÂäBÛ%Q œ.ÂHA¡I	\r±-%ß|/„ðÆ…ØjEÃL;¥´·=–¦Üo /L½h”…CÙâ :ÐØeb‰éœÑ³TZžZ‰eA£U¤NA@/ö {np•P^ÊÁe+¥p®\"¶\n‡ƒƒ“@èø˜¶|Žš“iåí%½Óý\r<~oÔ™Èdrd™’{å¡éd&°4§PÒ\$‚ÄŒ7u4šÁ[`…þT¦yjßƒK…cÒÕè‡–“C˜uHvP,¹<äØÒÇ\$\$Œ20ãƒâê'fLÍ©(L_üB}„€Ž@3\0cÐ%„LQŸ˜€æå¤”Àñ²†×++%ph–ÉMÂfôŒê:—ú{˜s>‚Ü¹%jLØ3ƒ ;Ô|ÎêfœEuÅÉÚ–³\0fõ\$r\rHS%Ñ¤™2l™*4µŽôéó®“Îò?<gšê%£˜+æY:)Q‰=rôém3ä©ëÑ”Fj\r’Ó”:R*HG)0r”)rQ°PÔCP<7ºVÊðÕ,I-€I…°Õƒ1þRm04´à]ZQt­:ˆÑ'ø¦¸U T0½Mã!ÍK‘! È³½AàÛxfÁ°ñP¢C£Ø¢dkÑvÎìçì³TÞ‚§TY;g:\r³’ÁÔÙÑU'Rƒ”ö‚UÒù^k_UóÚŸ):>Átý…ÔYÈ:íðd–1ü‚þÞÕ'!Ñ\0®ÄhE¡¸kB×Fg]2UøoV’)¸µÊænåÞBucÄ•Câ2ö|6ÙìRéŒcT¾JÚNŸHs{îÎÕ)ýl‹Íú%b“‡ÀÂ%¨|uNÕÇÜ\0IÔ£I&ŽÎ Þø-¸WÜ¹´ºðl;Ñ\rƒÛcCëð3ÐGÉBÛŠ«}j®M42cã\\èKÄ—H“ë‚A\rˆ ¦`Ïlw¡ýÑˆaö±M¬DÝX)Æt\"tDbå‡Æ¹¸‚Èà‚g¬Î¬zç3ÀæiC0t	a”<«ÐPr•–Žg8ÐG='Ÿ³{‚ŒëBþ±8Öàƒ£pn£ô´˜õ6Hàé~ßd§-ÁI‰4õ©+ÊÑe±YÅ4C¥RÒuË{[Wg•°–R“EƒÙoCÓ±yÑvågœÀL©–ž•³OÐ:n>M€2Õ™K½[­œÌµ4Iˆe=®h\"‹\$¡‰†¼7´emH7&í™³2(xƒÞ¡oêjeb¢¤V‹\n+WëÛ`æ•‘-\n¾ëºÇ·eí¤ÓÖ“¬^ñì’F’@™¡ä> M	†ŒàÄÃ€;R¦Æ^Áˆgá@÷|ÄJìö”q§\n\nØ4®Xfƒ‚¶N·Ø¼c˜»(uaMÈ¨­vùHs¸aöâó›ÔÞá‹Ë@ 4PÌ:	Ì­y°,r4GI*÷©¾ŠC0+aÝ'	ƒÆ	ºJê*ì2‚ÔTZ‹bó^¡¸upÍÇ:4Dš¤Ã‡PžˆŸK›Á†÷Ëá!¯›¬—x	ð±ø€a6L¶ƒ4R	`:¿ü„R\nêd4ï‹§ñþDÆy°È¦»05‡*…g%´D’8w4aÙcóU­Ü·3#ýÙÉòrN³T°oõþÄÑ†&£ùùrn×+´\n+IàF·d`ÑâŒ^&ÜÇv(ÝàŒqZsLûëêcY®Ì§GàÆ¿[ñÄ4X“}‘Z¼è~®‹M>‰j—y\0z¤	ÌÒàÎ“€Nn\n¦JªÔ‹T†à«Š`ÕBKª„Ï\$ KhŒÂp'@^`Â ô ¸hà`^+\0HÀb-*‡Çm#Nê­X“ïú»Oþ©ŠœÓ\n ÓI?\0ðE­JÑpµëbÕð,FŒŸ„ñ\0Â7°?0G¢³J„rãê-d×z4a‚ÜþÏ@ôPÊ’†Ži%dÇ\0Pþ\$®æà»¢üa,Ö%f\\ÇØïL]¨8(’4ãD fs.–Ðûãê bV ÃÅe6îo¸¯p²oöjÀéDˆ\r4a.NlOOWé\"®\nÖÆ†ÉÏÃù.>jd 0ÀÜ	¨”<Gf,íp³O\rËCëK0Ó1wËRMp{‘xÔð¥^ñb\r¤Ä¶§§kq	»1‘°À% Oã`+Ñ¬§2-j\"îq.k±:\r\0P³+ØF#à°*>©‹\n(OÊŠ@[ñ6-ƒ2¨ÂRXZ\0í­å\0*GBtòŠWrmR¶1þ\r ì0R\$Ÿmb}GÁ mêÚ‚±\0Ïn°nbu#QLÆr:#D³-¨ ÂÚÆf—cE!±”SBK\$ÌdÇM\$ƒª&C¿\"R7%ª¯oÚg2€Î²:­äd\"PÞ{KÊ7¯Gðð\"Q*ë…Ú#‡k¯È%ÚÐêù\"½äö¾R¤y£j?eÚÁ‰\r+2H`Ç\0\0é,@ÂÀÈ0ëï‡\$qâ£2ÊLòÈ¾'¦ïMc-ƒÀÔæ@Ð\nƒøÁ’\\¬3©1S1ÇV{ Â-¯r ð/*‘’‘`ù³G…{#%02>»Ì1ó4Á\r6¿ó1\"D6ˆ†cÒú.€Ý2S	)Hw7â‡ÌvÉm¾âÓs8‹F˜)†ä¬—9¨B0²˜pÒÐ6ÌNÛ‹ŠÐí¹ÒíÌ•DY7.úÑó4\rbÀ3<R¢]\0S-ÌÌÍÔÍ9¬#0\n˜IˆóZð“_0‚°–¬:‰Ç<ÀNâDñ@ÖR¤\n€Ò#ˆ”zq%8I\r9Ç«0ƒFâ`Y‘*®æÎä¥/+µàÀDÍ‘4@hä13S f)óÝ4CSðnÎjÓôSÓH´Z,c¬unh\$E5`Nåïi´’æÆÿC9±H&t®oô~•©tƒìÝ5Í\"“âƒ:%ÀÙKT•K‰ý?í TÄÍÌ`a2:à†üä ÊädäÔ¬ÑÎ*!NÚƒ4æ’”ê’”ñDB\r@)\rOËþœS¬Ék‹;s8]eÚÌä>¬ÚÀC<4HôL¹í4<@ä˜§Þ]\0¦.‚ƒ0Õ\"fó¹;#nÛrèîoÄ•¢tn	¼ÙFôšæþ»ÍhH0™	À¼îp©¢¹K§FkUl¦IxKƒ\n‰}-ömMü·õš]àÏZ	~—“ó­{YÀÎ	 Â&Õ\r\\Ödõ\\‹\\žLÆÖbj\r¯„ ‚qåß/²])àSP®×³ò4lâs–E¥_ZõŸZ-x™û`•³Z2.ÖuÁ\\UÔÕ\0|DÖ15Ó\\©ã\\õ¿[!c	^feH\r€à!Ål=Ré ëdo¯V¸cÅ4Xòv7L'eç*ÕærìhgO@£Jr¯Ùeƒ½f†È–o^§' ð´E…T>{OËVcþ¯¤›ÏàØŽ:Ïèôöü¬¿Ïô–àzÿÒ©°\0”¥+Q!qŒÔÕó!ééÈ}T6-¶´vV¸ÒBÂhËÑ\rF–ÆÚ»JRþÖ~û4*srè Õ\\`P6‚*^…Pš\rc–;f8³Bj#tRf»%hŠ€èys\n~ã¬;<	—At@Ët‹l tV<X\0‚7Ä\0ž@Ôk·Lwwj —ow7v b„	¨‚I æóu.\n€ +€u;iüÖ7/s&½zª~ob>q&6,` 	à¦\n”˜à‹|B¯qˆ<6m—[zÖ‡tw¬OÄ6!‚„‰#F€[[E¬ðæ†îÖàð¤ªàZšà[q‚>8#N‚Øç—Û{(¥~\n~Dæ(@°¸\$Y\0È¯7_B±y‡u—\\˜³±„hjFòîRcÒa/ÆûK'e¥_{&&’].õN=4XBÈer…†GXfxK}ÃÄVWÕr†d¸¸}p÷ºŠhªŠ÷Ðk‹qq†jûx|¦X|T#¶æI¼cb\\nB„xX¶?îS€Ë3*–ÑY¤Z ÷Öû¸œÝPûrgjpú¢=)¦§Š€ðÈDúD…ÀnÉ/‡'8¿r€zg\n½„\0šëH“OÖÔµk&¶ÜÝÔÍ\"ÌÈÖâ8}NZ,.\0cÀ_X+î€^\r1¤z“òñ‘Bt÷Ø6rÓRLÆUàC•d\" Œ,\0øEå \ràù:	ˆŠÒ\$g•ùbÂ\rŒ|ÎÌç4íõ8Ó‚f6Is+ø ª\n@’‰ ÛŒähz‰ú*))œ9Æ\rùÊZ£À4Û610+‡H»Õ’|ÌDYk\$—¦Û¸Á›`Ô\rä<(@MCÝ(®ùì‡’’\0¸Ã4 E¡ã@|ees‘*\0xò£oõqŒLœpš\\­c—®r™œŸ)+@Ð~«ÿ¤×†ˆÏ@¸à\\P¨+‚ ,drƒ¿‘ÐÅŠx—qsÝŠø_‹8é¡…¿£º ˜ÊW8Î<XÕ}792ÌÎ\$³ÌîÚPTÀèç‰}J;	2ç¡Ú¤\\G;lq\0™¾+”:šxðc’è‰”’<égi1àXâü\rÍ¤³SÍGrÍ>WFÓÞF”Ç5Úý(,q@m6s2Á»#@rðìÌF=°ƒk°ø¦\$uFV\nÚL /õÀCÂ©jã\0äã@˜¡S©s(Õ)ñµ¢@ÉðfrqÜgdjFâ.H%1âÆÁs5I–Ï[É Ðûø\\“@ËÐôé`{«n—RtƒE`z@o”•+>ë¼†3,Ø}G¾Ñ`„n`å\r Ø-d“öƒ¶ Üàîá{|!(ˆdXç8Âc\$_V€žó#ÀFn['\$òtÇ3²l~Â1'¿D?[ 1/€&e0ôå7\\E4O7²h€FLõ\0b€XQ*\0àÃ1ö¨»D\0<\$šq(Ò„Ä\nþtbÚcµÝÇÃÇ½nCF€ê\0`\$OÃ1|ÒÒ0vyg;m§o'ÄcÍáÃËÅ/÷-…¼Ç&ºIDm%Â\nRŠpÏÆO5â\n€Þäd=0¥ÛÅ#=ÏeF€²ÿ\\1`el<æ–SÃ¸;Ý\n eÎ„ÎÒåH\$2ýÒ(¤¥eÏæý8(VDQÑã½À2§ÇW“‚Û²{e¶–ç²vöiPØØ€vŠVR\nsøä ‘¬E\0¨.—“ªæSzUì4@e–çüIÊí®Œ*yØ4ùÝœ™Íž}\\/yÔ\\x±å'‹]ÁÃÇj6`æWºªâ<m½í{n]ÓªýØu|;W£ëÛhˆØ­gnPµÞ¬ñß	xn†õF€ÅmÞ¾ ÝCàÉÏÌZÒÌÜË›/ßÍÌ‘1Í›Œ¼áhåV\$½B(XXEçª@X©yY8nsÑÜæn—ï”»À˜\rä7‚jQIˆ„ŽC{<®J\$cìÝ_¿¼/îÝè®Üoèî7çå •­bíÂJñÕß^6Šr6Ž(NÜy™p6Ý˜íÚ™ºÚ<³Ã¸cãÍ¤p©ŠM<\"Ø“ÃèÛöã;ûl=Ç†Õ9Í6Ç­ªOoF‘Ö–ýîGê7ÓðÒî r:B™8žxä¾®þïC\r²AÙ¯N(ÜénÝÇ°›§K…•ÞÊäÎªXì€WÇG9éÞé¿Ž6 €è\$}ói¦¦éuN\rõSDìÉRµP\nšè.×T²ß÷ÿ‚Wn×9N*\$ÜöñBr\r€„˜BÂÛFèÜ±-×\0á×S¢Š}}¬ŽÆLÂJÔ`Ž=ÝÇ&@b†áý³2]ý8³VÀô®¤6Ê¤°û°~”°m•ÖS::å×oÜ3XÅ6’O·ÜEI·QÌý‡í×°uüzlC/\0½™%0@žƒÌ¢ûŒLŸ\nÜX3ÕÅ„.ˆÐ+Ã˜Š	jÈ\$ëx[Úg™-B°›·“Õ¾!´&š9 ^”³î\rÚ\0f&]˜°|`…@E:K4_LÆ¼@à†8%C[€V\rû‚PÐÛp==Ì›å‚Á:‚²‚0Í€ë˜Ig°M€ÕÂÁ:\nÐGƒ;	¬Ws’°X‚RaLD`ðÏ5}1©´¹TÌÕÈA¿¹3h2#ú¡ÉF¹?ÝËi·d»þÐ‚ƒGV AþF­BJÃUø­`@\r?Êšx¨‚f¤VáÙIi%©Ç‘Í8±¥!¿bÊÀÈÚb™žÛ;…Å”p]‹¢É@D,Â\rSÅBÜ!ƒ5U`Ì“—Ç¡4\r4˜	Â¸c*Ð¸}±5 €eÕ¨Dª>öÏWÃ%µÝ.‡òZÁ%N^ÇC†dþpîNðw !\08	¢\0Ð~vJvÂ°6\0É.‰áy¨†ÉF2–l¶…vh6„W“‡Œ|æÀk\0YÌ%<\rÀkóÃ!G!5…]q†ýü+iûù .09â,zî€{™&Z'˜\0TM@ÔÇ£6tÂh+FàÄú(\0y*Pc¦=Å%wQK!ò¯ÚtÒ Âpàmp@Ø…H¬ŒçFÐ˜‚–4D¿¾	ÑZxâ´&ÄE‚- /‹<B	§¡YD11‚ÆˆØsâ``º¶\"Bˆ¤Mâ÷Bsö&¥€£YÌ;\$n’PE\nO(®Ê8Žóx£Åð’H;s5	Tb’œx‰€*Šh€Â°\")úkÀÎ¤~#\\å¹‰„g’]â}¯¤åèköaðýØš,ê!5+«Ì‹(B#ïŸI„'af_ÄÿÄc2Qm±¥z®ŽÔž“uŠJ®Ž°á`{”ü@%@wìÙLS’°È'Wêú‰”å¦=IƒÜŒy\0äÀÁ™Ðaê	 æãŒ\0¡#‰ð\rÀDyÞ\0É X_§”¨ëuHÌ‚\0ä`CIŽuÈ‘ )[Ž£D\"6Nš\0P „Ê¶Pð¬´5â(€ÔWŽJXÖÚ@é(‰¦ð1'´\rI\0P\0Äü˜\"Ô«†G4‘hs 2D©{2ì¤djà9ÈÉ=Nb‘¸MTžs -™è&@]\r¿°/ó€HÚGOô”‚9%F¿V?òFYZÔMî*ù#%BêLš‚Tµ€ˆHPi,<œ”y4§¸W²Z’qÌdºÊ 2Å	Zfý’ÁêÖå'ÉÉBKÒü“e'÷{IRJÊÕ(LÇ´7äŸ†L§ä!7ƒ†0åÂ·ÑŒÓ–\nžvçÇ>äªŽœ&ŒƒD,ŽœW¬«\0¢L\"’&-ÁÞÅÿNê¬g@5´œ„ä«P‰ÉVb±»òXE£„‹–P’	œI«)12«\$há\0Hò%ˆ@@Za2‘0—xo'ü5§E.5dXã]?ÐË\0zËáò0&c€\0º11ŠŒ\\oDý5ˆË%<	t\ruŸqË!@Ë\\Ð¨>è¤,?ÐÜ¥–¹ƒ¼*r˜ZÜGNk(1ÅŽ(//2,Îc7€¼	€IX@ø \"¯\0P•À\nt¦9—L\0004s#™,(ÆäP0¿+ÌŒŠ	Hû\n°Û'xÅçX€Ø9‘¹–SìºeØâeÜËél@!o—´¾\0ð1iuŒÏe2eð@ìp>=Ãb L@¸òZDJ€Ã‚ íñ]3ró1ÃÌÖX‰@¿ók–¤Ð¡ù‡\$Š]Jº˜ŒÂ#\"ÉŠ¯¦i%ÀDÇ€¶%^‰B(sd\rHZÀu1DEÇBˆ•˜„äÉ–Ëì×2Ñ¦4»0þLuIšT°Yt’Ô—ÎhUó|„JÙ0ùŒˆx³s\\é'M;©Ôfwˆ¼/üÒå¬mÒâ‡\rÈäC7CÂ„(éàˆ¢eÀk\"ø	ÀBGÖÕ„ 5Ãx8J]¢\$‘,Ê¨–\r;äHUÌ\$ª¡<0¦>°Ñ„*\0_\nX¦Úðû\0®~À|˜tþ@Å3€9LéƒÑx_ÐˆªRs8xn\0P\"¦?È/@f(Åè4‘­Í\0•Š±@À…@0¨æQÚ´U¨ýDÞ3Áù]í@ÁI  5?±mÚÐŸé_¤×”Èeh\\Mxæ…<à[OÌÂÏôû£F'äoc}–¼2Bô™L:…Îý•U#H€´dÞšxÃÆ\"\n/ö_31*l¬Z\0Ò¹\0^‚²¢xBÓZ*+HdB½Ÿí§DàðLYÇ”˜\nè>€®\nôÏ£G¬ÁÌ2¶ÎÁ&•~œáe¯<0ÌL‘)KYRqö…†-H›éÉI‘KQðW4žV,…þUqA•d¥®¬*ù,ŠN™@°ø¬æ±Ÿê7§îo£ò|²ÅŸ<úH®7*PuÊc¥Ù1>€:Ïª˜Þ¦	ÌuG€ôÍ\0ÃtÐ @wH£S>à+\n´\\Ô8ÁÁ ¼ØÔ\rÝ—²iK>ÜZ&>`œp3`f©K¢àvÆ.ð Œ4ùu>€5i¬3bWr4A„Á€a0ÓØe´“ø¶\nÔ&?`[¤›'aPçn\024Z¬ƒ)âÈ¸c—ôÓƒ¸.Ó¡áØSú!ºF‘£rYvåJÿig#»Õ# \$eHË6TáB–„ª9oÒº¦È„hêˆ«à›8ù`0h@]0„Â¨¡UC(G™H×•\nªÈ/uleªZÿT‚Tíƒ“{Mª[Sš—Õ… ÄAê×Í[0n ô¦–â1ª*ÔfFâ¨éú>0]\0¾!ç6†BmÂˆ\\(Ì âªq¯«‰oY©-SŠÕv±•{ªÁn/T—Ð”Î®UMªxÄj¢¾’5neÊØô¦ÂÏ\0ÈRê\n)é>*p’&J²e[“˜Qš‚¢@ðWƒ­kc[Zô%FÊ°ÕŽ5üÓ*PrÊmº§&}:ÅŠÕê çè®9›¤fÉj.‡þR»ÝD¬	p'U8j¢\r”Ž‰•-}0,X­rXZ¸Z×<&UÑu²%›ºìL»Nõ‡@Ìª0u ˆœpÓà\"ÙpåzýZW8•¡<W€‚)ßQô¿)ƒ?,²è{aà'9‘V¡}\0¶äÔ\"jH%3ÙúO¤ùCÑ>^…~?+©Í_ºyTˆs®&IÄ‘jXR6à‹¤¿¥¹Ø%DD­_ÕtYfY§Óx¶• uè•Ceu€´Ô:m¼à’HA%ƒUÒ:¢¦ó%	ÚR ²z‰V^AÁ¬Bïd•Ñkm¢1—‡ö_…ø€bmtz¦ðO‹¬Vvq•œìêø†W2ÄÁdþÉLÏvÖc†2Îñ­³ÈÒOgCÚ\$]6­s‰ý(aÓ­Ìâ•îxòÞÛê@&ïZ5?A\0íYË\n9EÙ¤#PÙõÀç[ºÕÒar³µ!OÂ6—Æ¶‡‡ê²ÀÒl4OkVVð!TF–:£Y§\\YãÙžvÀ¢”.[6Èr\nA/äˆƒPÆ^Ùñ³\0tM8ƒ\ri+E–ÚÐfÅ ýš#²[VAáÉ=´`ß!ÛjFÚÁ°¶Åœ\niað7”AÏ,Êyý·L ‘Ö¨tz1¥+ifïZ¦Üö¬0ÖSG‘ÛH‚6ò\r5µÌ;Z°ªÔöägA­m˜»†Ï”1’¸»í¦+ŠOnÞŒ½ ý ®²\0Š,ŒHè¶ ˆAëâJÕ¢º&]¸”Í\"½Pÿ^Ûa	šÛefmYÐ\$v¸1m¬¬5¡ø©ñ\r\nN“ò”EÙCZ].—7=Î``ìK¶ ™´.R¹¬m!mëDJÜ(ÓgÔº›'uE(W¦ë	)/ùgéÖö¦µ%É­¶‡m	jh\0ª)Ùß´%–8Ã™W=Ð¨]4zsIüÍì˜€‡ôÌÞ†îÉ¤ÙG’Gp\0‰È\0\"•fœ»ÌDšó“—K~PÒøDŽ„Nk±=L-+\0œQÖ:Å:ÏX)k×ØÜ4b9±íï	_ØnÜÚÁW]W\\ÐBRoXVð•Ýp(¢ÚûÂQRðV™#H¨‡b\0007NñSëMãB«Ñ\0®fô|rZyÖœÞZô!k¼åå[w~°¬^pw¢½a[¯\\-Ýj÷¢¼%ýìl-;ÙTâhæFðÚgOà‘8nhÐ*4eÛ‰V\0È’((T%`)ú Z×´­’¦(;S–ŠY!Š¼Êç¶ÔùR°2×3Lµø+“žÌIq[•—ˆ–ºã¯CO¸:¥0À\r²qX\$ñQ<U.BB8¢pz“| =ÿ@'&¾\nÒk§\"±ê’À.Ï ªÀªø#Ûóìƒ~+ÁýÀx]T@‡bý0H N_ &F¾ÐÝ¶Êå‘•É®&Z\"ËÈŽ!dˆp`\"Œ=a—÷á—é¾ºp­éØv‚›ß°2ÖÜ@‹”¯\n¾îT\"€âD7øƒ	 ÖCs%’™-Øš5t%7ú’Åjõ(‡uG”ÂµëŠÒù©IÅ™[«j)W)ºB7§CZßªTzs×,¼k†ù	…JêvØ>ì4.Æ\r~ÏÞ]¥«CÌ4ïß @øî¦#ý 6«õ:«Zjfÿ¨Ð 0ÿ–a>ê&+,#ØvóÍ:—¸V\0b‚v…cš«EÞE]UÅÚc_n³ÅíêjUùàŠç'ÏÆZà’ˆ«La*\$\$¨”Æ~*±¤¬|Ÿ©k³Ø–N9±·‚xÎTóø–î8ðCÌyVÂ`!Ç=R/ÒÊñÁŠå\nEÂB¢	ÐSirUW˜‰A†=åDƒZ—5®¦b•L¶ì¶J„!c‘	6hÊeòO· ‹%ˆ&B³’%a[KL¡‹\"'Ò‚ÞG;Å¾ãùp	tÊE\ngT.e®¼­0ª²@L„\0É\nºŽ {Æó=ßÙV2P?ÀÏ“ÃTÆœ`Hü`CPG5˜´2Øš¬ÞréW»º¸6Ó7O	Ô¶ KF[ìžÃ•\$	™çÖhƒ!ŽÄêº¡vQª•/fž¡P ['µ¨õXŒ±¤\0+Ìšbš.eÐŽ¹);r¾µ,»æ§,˜ÌÈ:á!ÌÞôŠç+ÓÃÍÂG³t~ŒŠv™›!†gP—Ž·ù§ÁXÍiJ6ÀdÎ#ã,Ö@é05[L@Ip\0Š€\n÷;(ªÉ¦8‘1D°ß¤;\$]Ä>=P^s±½SœÉræÀX±£ÜiÝ’êGù‘¦6‘½—¬Œå´k©\n@R1¥½˜¸dŽŒ¤¹uº¯)¡lçäž^Ù+A&S2_¡\\÷Õm¹6„j\r\r<=`nU”©òÚòƒ˜Q,jz%áž4k¡œÏ ƒ)ZB®‡å^°…hÎM˜Êr¢q<|X½nÙ ^^r°†ÊaØ™(l,xäßÂæ}xà€yŸ*'©—ªHhy}à«Ò¨_a„€ýºhC?…ÚÍ„•\"(¬:XS0Ð`ˆW>Ñ‚øÀpP&fØãO@núd]>¹Øâ4é>V—ÀÃ¦+Ä\\å2ÐvÌ'(9+›ýT¬aQ|Ff‘‡°3áÅsèaTñT­÷Z¡¶¨Ý×Äj \r²4HiR4±¢š±\$\$ÿW½blŽÑ)¢ÒS¤Ó0.bH©P‘ÂEØ‘P'8,Ò@ˆìWÕ:0æZÒ¡ô,gF``ZµªÔ\rl/T0 p\r¦~ó¬8¤êxÞ¸H|û ‘túë¶»uŠP-xJZö³¤kºyƒÒ=÷Z²Pë,|y@€öCD¤&n»žŒcZ>xèÀ.£F!’ÝI£^ä>R¹„õb‚J—SàtØK‰\0Ð'–ƒÐÌèÓnÈÀS!­‡XÓdbFØ@TZ“ô€•”'\n®ªä‚ÈS\n\\ó›\nÙvlÔDòŽ‡Ù6ÊÍC=‘€·ec/Ù{Ž¶?³#ÊlÐÍ 2Ú8¤6?³´lú¹4q¦¶‰´½®·xÎÿbi@@ÈQÍ^öï™ÖŽF…°íqìDÛ{Ø¤Ô¶-~`¬\r€\$É}Ÿu°•Tcg£P~ÀõRžWÝ:q;Øãmqªblä [H¦¿v@=ª£kx6Ïñ&û Þ÷WÝÛÐZ*G_€÷i¡!’ª\0cºp8;'m }ÝVÖ5@gãÊ\0¯h¤{Ù¾ïv‚ªÙodâY –áÇi¹âm#u;lfÛ¤©7á™êUÜ‡­ÙžÈöÓ½«Û“ßU{‰>Íõn}GjAe\"ç\\ûŒ½­KÊNP¯ÌÔâiÅÑU0°ë³|µ?2NQQ¿Á.RJ•¢Õžu\r«g€º„ÓÖ©†\$#¡ÂïkS”Ð-e·à¹”åO°ý\0V‡Ð¨¨{M–›5è7æ=ìüH‹r’#\0_ÂÇ)@Ã#ÞPMž^ÅR`ü+áo¸arp„	¬âvÃ<‘§®KÈkœÊ1„Û˜bp”4\$ê;e±„;La¡®˜‰ñ\\×î°øfJ@®“œBáôÐ‡þ\"\n\nO@-\n\\º°9€°j•øÁq>ô5BÖæ IMx´º=¬OêA^7Ç«`þ ½Gö2ª:;òzS6AZæ+\$¹¤ÐÃÅ4V­ÂÍÀ!Äÿ\"BŽ&k,Í0%ÿãº§2\"ÌOñ7\rmÄø[1>ú÷»>Å1à;Œ\\pÊÖ{VÜÅ˜#–'ðý‰wBg)9¤†‰¿\\±ñxÞå}7†Üú* £[äHÎ‰sÆ4,T¢Äšew+Í§_ŒH@:å7È§Í±t‘íÆbænÐvgÍ±íGš§ÿ9tûƒÕØóÛ`8=æêpùÍ„p»'N4ß8¹‹Xqž÷Lä’È¸ðñ:òw£¹é„Ûç¦ÈdÀÑðâ‡\"áFÁÊP„—ü”§@\\^å+šô’w3PùxÖˆÌq;øKån%mæ´¨-…´");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌÐ==˜ÎFS	ÐÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xð¸?Ä'ƒi°SANN‘ùðxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\nŽ?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYŽÌèy6GFmYŽ8o7\n\r³0¤÷\0DbcÓ!¾Q7Ð¨d8‹Áì~‘¬N)ùEÐ³`ôNsßð`ÆS)ÐOé—·ç/º<xÆ9Žo»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿŽŽpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êÝê{n7ÀÃ¡ƒAðNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sð\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+ŽäÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XÐ]µÝY XÁeåzWâü Ž7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Þ3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ð`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆÞ±ÅáÐÝã&/¦O‚ðL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ðÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Þír_sËP‡hà¼àÐ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàýUþ„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšðÜlAüV…¨4 hà£Sq<žà@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒÐÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯Ý¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ÐÒ\nÁX; ‹ìŽêCaA¬\ráÝñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\ržP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çŽÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëÐæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàžœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gðÒö]«ÜyRÔ7\"ðæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!Ýf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ýøæ8PE5-	Ð_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²Ý‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âÐiTð1ªORäl«,5[Ý˜\$¹·)¬ôNô\n«ž[Ðb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ÐIŠCË\\ÞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ÞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Þ¡~¤M½ûÎß!áEt§ÐùP\\èÄÏ—m~c½Bð\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿²vDT!è%XK•‡'ñ§‡ò¾[Ëú½ë¼Ó›(¶,üŸ3èÀßÕ×ÿ[È³>–á]ÝôN!ã;§ÀërßÈT`Ä\nL\n)À†‚(Aüað\" žçè	Á&„PøÂ@O\nå¸«0†	\0Š	 ‚0à^R†J\0ˆý@‚@‚\n`Š<ïFëÎÀæîÄû¥*Ì|ì¦*ç/XíM*n/\nðâ&Þ¯kx\"m8È‹’î®(ûxiŽÈdnÌ)¹p-%(ìÎ³Ž¤ÛP\"øŽÂù®>ùë<ú&Ê³Ï¦íïªî.ç¯…OQH*Ê‘nÑÐŒÐCë.à÷°Jñ°xø.døn¿\n/O¬½ìŒ °¹	p½	°ÂûpÇ\nŠç®çŒÊú0ßp-ï²îÎ¹ÎÃ\nf¶èë€ b¾i¶ÃnüùÐ=l½’ðÐºñPäûOæ\0NìÏFô¯Oñp<`ÜÐú\rpI1	ðÑŒ–@±+QYñ]¤Mà\\©\ng«\0‹ Â Ø\$OuÑ8úïç¼W(œl£‚Kj¦¿äN&­j!ÍH`¦_bh\r1² ºn!ÍÉŽ«ncq5qcí\\«¬\rŠíŠÃ`V_kÚÃ\"]à×1xˆ«@Ê¾`AƒúÀ±óÅ¦VÆ`\r%¢’ÂÅì¦\ròƒ‚k@NÀ±jñÍš™Ó²@€© ©ÃkFJÂÂP>VÆÂÔp¨²\\%2bÂfmÎóØ@ä’G(²?MšM\\ÉÇhb/jÜD’ù¸}(VÌKË ‚K¬L Â¾¤!IÄWòr \r’\$ÃÌ¤Ê€QRp%’tÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³(¨¿DÌMü À[%âT\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi4	\$\"@¾[`Â¢hMý4Ãq5\$’þ\0ÖµÈúys@`ÖDÀæ\$\0äQPH1ƒ&‚\"~0€¸`ø£\nbþG¼)	Y<\0[<N¨dBå3’€Ø‰*\r\0c=ÎK|Ý7t¾`ºÀÀO5Š5?\0å7`C@\0ÂW*	>ÀN<g¿8P7S‡8³@É{=æLÂ.3˜DÄê\rÅš¯Š¹	*¨,rîg±I1@å/Mo2Î]3Xm‹ôLì4eB”Utm5ËÔ™@e”cGÔiE‰\rFóçG4‰#S÷%QåEà@‚H(‘Óˆ ÃÆ<g,V`R]@úÂÇÉ4ãr7s˜ÅGK³ƒAÀvÂÓ25\rVß¬ ¤ Î£PÀÔ\râ\$<bÐ%(‡Ddƒ‹PWÄîÐÌbØfO æx\0è} Üâ”lb &‰vj4ÑN4¼¨Ö´ÔÒ5&ds` Mñ6lÓ\".HËM2“-31Ns<ÂÂ/L óàú§`Ø§µBUF\"UJI5OSm3S´×LD”g ’5…sõjšM|5\$¨s\$ŽÞ*¤pU,´ÕbÔtD7@¶ÂÒ?’Å\" Ñ\"hªµ£}Qã4F‡4•@y”Ú@Ò)õ¸‹Œ0o<> ]Jnš„Æ¿s›LGPŠ›ê™j™M^’ÕVÉ\$µ]‰¥PuÕêÔséE¥­@xy’LHêÆ™Md×5Z52f– ð–k!?í`J`‹IžS N¡¥4'Æš*œ*`ø>€—`|¢0T™DJ£Fxbè¶\rTLTØ“W5õÜ·é‰=õèz`ZJ	gÇºÝ CgÍéci\"mñcçÇA”¾ÕrÜÖ*‘T¹l…'mÚq zß ûl¥lãmL´ÁlvÙmÀö\rµó8¶©êžª úíkR¶ôºÓYS AC€èŽ‹’ç4‘â “p)Jk£Ü-N\n99hvŠY‚BmÍð;uÆ@‚<FþÑ ¾e†j€ÒÄ¦Všà+CY\0ð0ç ¿\\qŽÑ1í=òßkFý9\0KG™*ràhþ—]v˜9ˆ‘ íbÍa•¡(ò’pLž7ÎÎ—¸&—¼¼l¬Z-M¬w·|Lr—¸@iU{¿|¯l¢·¦ÐÒSBÀ\r@Â h*BD.7Í*‚‘3/a€\\5bp#ÅzW¨?£Ý}¤‡`O}Õ@ÞÀ×é­~Æ\$õéœÉúÅökÈ;a€QaD]µ[Åúp¦f€wÔø\"â3 M÷Å|*´Õ¿!õÅ\"`¿|\0u¸÷¹\"¸zÓ8\\2Ét²(Ê‚-‡ÒÁ\\Ç,¸¢Ê·Á*…r§€ÊVRO-‚Œ˜Ý8s‚qSwx:-voY£Ý\0ÍQÂtÎøÙŒï¢Ì0AŒØÜÒ°ŽÌ0ÙxõŒW2ÌÍUon€˜Y€ãvE€ÌÈ­ïÀãìŽú=IP˜MP\$­…U€µ¼8l—x»øÁ:ØÎÌ•1Ís,£‡€Sf6Ì‚tÍ/£–ÐÖÌl³Œ¾Ê ÚÍyzËŒÜK\0ÊÎ¸æçìóƒ¬ú,ÿ)ª)	‘6^x‘Ø!wë’2 Ï“Y“djŽØY…9a‚6´Èp5\$–D\$ö¼³?†øŒÑ¬Á‡ˆÂ´ÀÂŒ]dõˆfoŠm3žùòLùÙ{­ûVÆ…”÷rÌxšXW€Ù«DAeÙ½„µ½“™Ç“øY”B1”š\r‹ê	ž8føëx•– Mšöð@îÇ‚³­%£Z!‘º%e Ú]Y3QÀW•“ÙË”8[£¤e‹ÙO¤X‘¤™YˆúN¡ºUQkLöÒ=¡ÙAQ9¢l÷§¿¢ùÂ^Ú3§õ£‚3¨yM¤:•L©¤ºžzI¥›•·tÎX.0ƒ•,¢#úeàMzØ\rkRQmšæ’Úë6õÚ[‹¯õ¤¸¶ Zâ?·¬Ê	±ö¾|¥œ+GÎ€f6X-Z™›e˜“­{>¹²O;E‡zI´»N!ÛRJÂ\0ÒÃp›Khâf ÌmÚðËšõwÌ- \0çŸB+­9_¤™ëŸùñ¸:Ÿx‰·û“¸Z	“½;”>yÚ—Ž¹7Õ}÷Å}×Ù|Wã™Ù¯´Ø£E–ûu`JžÜø7|X•¸äåŠ¸‰ø…\"¸‹² W½˜tJÙé…Â‹,8¯Šø\rùý¾;ÿŠØƒ,Ò+Àmû¦Y©¦š³¶»öñÑ¬\r²™·›­ý«¸}£}šzÇ¿ÀØ_È8b³¸iâ5=ˆp+U¶L‡ò€‡:¬Ú²{@É*ÁÕª™¢<#Ç-\r¢¹5«Úy“µ	œœ@ÐZÉÅ|l­'„Ûå‰Ø±†œ7„±ÈON?€ËU%†€uÇ¡6­}\$­}x!»„¬ÛàùŒ‰U¥š]ª@øðM¿ÎYhÏŒÁ–üó—9ŠÌ™xÏ¹€Í9†ÎÁ®™ŒçÌñ¡Y”Ìü(ÛÅˆÂ™ÇSH1ã£ü£Ä\\Á;¯Êù5Ë5#Ëœ¼?œÁÌ@CÌÕÌÜ)ÍD®@›¿Íy•ÍÜæÅú[«;Öz ËoÎùq˜8ý—L¹ÝÏL£Ð|û¯;	Ðìï™,÷™yšéù à€ÒDõÒ‡½-q…„Jí:ÄÐGÛMÎßÖ¼ßXL\\ÆŒÆÈ;UõÊ×Œ€{+Å¼ey·b9ä’×j5·okMk[¥‹ˆ€f(\0æ¾dÄšÓ¿©´\rìMÄáŠœ¾|«ÔrâK#J\0š ÜMÌ7ˆ Û'ƒ=_ž›À1=5ÁèÃÆóÔ>+åÑéä•ãíø¦^5ã“Zk^SâX¡å¼·åþæ2‘æ`·èhãòEäDÉá)²¿à[äþç|©ç¾)Ë¾aé¼^±ã\n+>qu*­õ(pM>Óm<´ÒuMŠãþ‡ìnT¡8ÌT£M>g¨=½ÙqEI7>á~Þ+¾ãmÊS%6\"IT5½€çï\"™ï4‘É\rë^‹±Þç–\rkÞKe—{ˆjÓ“{‰(ôÈrO«óäßî¤˜T=·÷Åô.|ÿH\"ef›~Ö~íõ\\X¿R‰›·ÕETžËdÔŠ	w#q¯Ÿ‚\"Ÿ‡C0T<¿fMÿ8‰ŸÛØ:'U8ãùÃÝöŸ¢àwó°	‹ÍJ @ÚV½í4Åù‰d~…p	{>žÝüþd~üS^áúþçú\n7`øøƒ@Iñf¡7â= ÷¥¾AæpR„dþnø¦*my¤—«R§	¡,¾dB°¨÷g¦'½ïüðýÀÌÀ€‹ý¡\rHßþ” ¬ñ~b1øyT˜üR÷|mÏ4yÁÞ–òG…¼5ôïU»Êž&òç«=Dy¨­nŸÆœµ%Æ/zuŸ¨g·ë/Î\ndÀÖû“U?\r¦ø@,†,‹¦Ø éß‚É¸ ÍPü¨•I(•ƒ9Ø˜å7\0«‘ê¯|cäž†É‚6¼Åé0>WóÂžœõ!ÁÝâ/SƒÔ øLÇ¢!ëORb“]ØœW¥Bé©„y¾—2ò›ù^ní[rµ[ˆÛÀ7‡ÙU\n¦QK¡aR }ý\nnS‚œ€à¥QHMë>7:–\0P°Âä]FUS\nÕ:8W5í K>JA\rŒ\n îO¹2aa >ÃR­y…{AZˆ v=²_Ð©4’¬!ZËÈq´20³) ”Þ§9ŠTîO§w‚ò0V§{‹Ì\"NúHÐ!æˆb&VË!†D:z—8s+æ ÐÝûù!ÀÖØÙìï¶cÂ`u0î£ð\"ož`8•n²4]A’Ðˆ¨–R4ãÀ5Žê„²ßT©\n\\—\0	¡\r˜TòØ¢\0°k£fÙ±ˆÐµªÄ¹_o(&!FðÂÂ*ÕbdÊwÈ¡ŒLe¬¶.À!‰Á\$fzÀ>š1¯Êól¸U.u‘÷@tV;¾•œGõB]J†w!‹L^at½J/,^8m]ä¼¡\"±r&(Š*’¼š¬µ¥zÅÝ°NŠ(®XÕ€ñ)E*ÀnØ—Tì§€ä¼å\\æ‚G‰x„¬úâ„Á‰7p@‚\0(0 TOà@št¹ÆmC`-H€¤D“:4Ñ¨ ´cV'@\n±¤”iãS`3Æt	àBP@‡ÀÆÎ7ñœhÀžÄþP‘Ë\\s€˜s÷T\nÑŽœmc˜@!<€YŽäu#‚Ð*	àOŽDt£ÍÐ*\"<±Þ\\|OÓ2gGº>‘ç £æp1´£à-ŽqcXß\nQ,Ah€˜ð!,\n Udl@NÔÈ, - c¡ 'NC o`³d€Ð\"Ç¨	ÑÈ‘Ti(aŒHÒ-Oä(\"{F²71»Dm	žYÇº?1ò‘¼q HâG9Ê V\0Ä?pŸÔ	ÀUOáûÀ¨':52%\nÐkB¡È×FÂF±¯?¬jFà	2\"¤Xð)6LÅ7@@°@ Ÿ )ünÀ©%™9É¢5²d´˜dÊ)I3Èn@²J,Žä\\ôèÉ‚P’c“¥cé='òOr–È\0ZÈÜ.SQ©#´ãq©%È\$ò¥0¢äÙJ²=ø<|SAÈ<:p»ÆÁw“‹Ôža0­Ô¡Ã#0‡€à2´\n£,'¥H21åoQ‰¬¼sRÈ ÛbæÅ™]˜Í²àg•òWá-w¸¸Þ \"–bE@é-AÊååf/b#‹%-Å{Æ,Þ‚+ÏÉ+Óz€žY€#˜eÑ+‰oºq{®–Ère{/KÑÓrë^ì¸e¹/™}Ëö_âÓq ÀL03 LaÒ¾w”°¥œT€ AÀ&–™R\n™,)s\0ì©–Iõ€^2q”Ë©\0\\¨I@‚	‘K(À#peC*!>€/á%|Ê…Ì“áÞŽüô\$è‘çÀ§.ð™‚ÀmX@Rò0cÐ€üô!IH˜UŽÀ³_\0ÄÎ5–±¦Œ)D¹)ý¸\rÂ˜ÔÁÓ#5?rfgr›IæÖÜ¹v3ö]ÒÛ˜äÜ%”¸&ºn`\$›¨L¦îÝeîÍ¶]ó}–Ù½g\0Àvps…\ròÍ[ªÎÉÅMòa	W›ôË¡ü'È{ÅH*–†fU@9!¾Å	Ñ'¬¨÷-òÈøß@_.IÃ3öu;Üì¡;)¹\0²v¡<—ÐL†iÝÎ¸ Êù	Ôð§lÀMÈóÆI‰Ãà	ã~zËÿ›”ô'i<ùè€¾zdèl4§žð¸Êv3æ~´øÃ)ö\r4ábpî‚dIäOi³ö\r™£Øˆ¹ØŠ6x _„ñ%õ<éâOŽó« ìç…@YÛË’· Q£Ã 	ý…’`.\"x@‚Ð-‚ta2BÈCçÿ@JO~4\$säâa¥A\0PJS¸`…¯A‰Û‚|iº¡ÀO'\$«P‹ìÕJŸÙ„(ˆcX„Æˆ(Ö\$\nSv„öPÉ´\"ð\0 3²›~á'\\ã3	Ø6q¸\r©ü£6ÀBØ7á™ÑVŠçL›ÂPaáEÑmh\"N\r€Ø‡(NœF(‚ÃlWÈÎr™ÀQª‹m€—ÎnÉú.f‹Å£\0ÚU6Âä2|Ê\rh%:ÀæÍ½¹“ä6£\"Ò‚Q±œQôm£”wY™F+š>’BDKÈvH²ž“e±¢íMŽ´°\0gJñ¥\"àMº5Ñd9n¤0¢é\$Éð'\0æ4‰£¥èïI´Ò™£¬¥)é“…6-¸Ú\0(*¥Yn<QªTmpQ{¥Ø)ŽÀJdÉyiåÇ{u ¨ØGªbQÁÉB.]\"e©Ò'¢ƒÓ2“ÔË+êS®{@^„ÅMÒ#Þœ¡rà•kH\n*>Œ!â¢Ý\$'6ã}ÔJ‘Ôñ9½é@Q¶&<µ¨ÍDê9LfSú’,¤™),ÂRd ”« +B!­Fœ*š.°BijNÀR rI¨`Îf@\n¢Ì¥±©e+9Jø©:bœ‘}§==©•Nµ{SX[u(¥UD]Os»”Ú›åÈ\rNÜ_SêEQÖ¨5)ªjS²4ªV§e\rDMW€ÉVfžv§´«UPª&ª·D5ôcXmŽGŠ’Ôn´ò«µX)óM‚VÂE¨¸+%,èT>ŠkÅ©J\n+0\0006**¥E>\$qhŠ@O\nüd‹PëYZb”V­N¢ò¡\0èœæØ„d€B\0…5E•˜;ÔF¢uŸ¬ƒHþI%\0…h?¤=	…â2! (¶¹!^*è&Ÿ\\¼n§ôŒ+QIj&¼A¡´B`S¸âM‚ÉûŠ\r o°@‚À6WB¹B{¯@µ_ ¯)Òº%M©fÍðW ä¶˜_áÎ°v@{`P:¤®%[%{C³\na¼Ø8;AÆˆðÌTn›\0¸#ÂN°°áŸa‘hÒÃ©·˜J´6ë›âjìÉFZ57‡VÅuŠŒ€C`\0å»S±0uMÒ%;½D0\ržÜaayXô\rôkoÊÆKMd’­bI²€ul˜Ue‘p\rë^²¨Õ»dòÿÙ*f·¬éH_<Ë-ð(¶h²ˆ‘,ØRX†°©°ß{%˜\rf!œDoðSµ˜JµF²4ÙfÄöH³ðul¾i›.ÙŒÝ {™Õ`q™Æ³Âq³xìÕZ4ÙºÐ–w*Õ¡ì©h[%lÜããuqé¢]	2°E=ˆ{F·Ï6­µxÎ\n*I*ð€ö¼uåIûv+Âºè¥ä5u”MtG^‘	×â½Ë¨nÅk«F²\0ô‹®\r€Ö§[gÑ–ÔÂI#CK]8’¦Ôû®™#„ J\rÜ°4€,·ˆ¤( 'C¶ÉV¸µ)íkTÉ[Ü>Ð¶™ƒbjúØ’µåA-<!Mpxjß@t)A\$­Î±!ûÚè>µä\r¯aMkûrÛ;5È¶5¯í“]Óœ=ç¬@k)‚;Ûo[–Ô•À·m¿\\«•‘þÝ#jP5Á+NR+„ÅÂÚ“¬³\"–\rdK2!âëÆ²qÜ§ªiÁhkYB‚[žÀ¬[çîž9ÊÙV–æÅC¹É½@xŠl/4-Áˆ¨Ä®”.‰œÌºf*EÐ\0à\0.†wC#,ËNT³ 8jã%8S®óvAˆfìâ–^ ‘\nF§Z§RºÁâËh„\0P7²;Ák@<ˆHÏF5`•\$›\$é7JÐJÐÁŠ¥ý¥³èA«j \nÛ¼\$£!éÓÞ»ó€¾L™ÄÐ»~/†2pµJŠ»²€Ý2m¬ÒVf¶ð´ëEu+¬Þ”\rJ.%áÉh›QBšÝàe·ˆì”µjÖYt¸†é¾Í¨[;PYŽÜ\$Z‹=e/»iË8;¶Ñ‚¿\nM¶zR‹Gßœ\r§µ(C+p-•©Ì6õ‹};êÙ(ÝêÈ·õÿ®¤˜ûùYà*Ë‚&m;€ë+àDÂÓ¾ukJC|›.ß~ù÷áÀª„ZÚVØ»W÷`Fp1}ìZ„b&¹%Ãà1H|ÖáÎ,œDeH\0Û‡ÂŽ6°%„¬a+CîÁ–…5†D°)\0„„„p÷Ãëjë}ÚÛÐ¦®aßÚ—6– Eà'|1GîR¹Ú¤hBúHdºž'cL#Ã	.æÂ`H€L6‡ŒHƒ(Õ†W¤/ð\"¹¨ÇŠN\rDâ¢¦ž~M.ÐÞBŒöàØ,«–»¸¨°Ü^¹òF–PAå—0ÁmÄ…‹ªµ”søW\\DôiÒŸd¹)½Å©z¢›ŠÎ^eÿ½kpHÜÅp@à€auq #/qZ§\\W’:U˜¦%ÀEþr,- xÅù#±‚/I#\nû˜Gø1¢9\\eã6Ô‹9WË@ràâßXÏ¯aGÀÍ\"P;°<\$,¾N3ë\n=*@\"G¼†!€\\ÒÐš,°m’Åp|q„\"À‡L6âŠ\\ÈBÀ[†R¢ü¦ÁC1M‚{ôYm]˜)¶¹¯’Šÿ•l\rËm1U€2.3`Ë#€yÁ–GðrŽl“­µ‚(·8ŠÓ,Œ*âR#7ô§¾=«rK°ô[´!mØ¯JC«àIa˜†ØbTžLCµ”lKŒ?™?Ï\r”FRãt!aÙ§ºíF„Gð!¹CµŸ»v2Œ\"qW·ÖÑ»ôÃ^À7áñFâRì\0ÎÑf°*àA\nõÆí®Háã¤¾)9=Çð—\\+`¬ä=Ê\"ø}Ï>HÑ\\Žp°“¨Öç“;ÐNž‰Š)>ˆB'ÞÁê\0€€#%Y+'æ)Ü^{%£@TÊ†JzÒ¢à]…šd±Üú#q¸X&à£‹{4)×?™ý@¦só\"O AŽ9ù3€L\nòp&py 0	™º@pÀ§%€'x)‘ýˆs‰%y,ç\0àw€œP+§R9ùÍ<°iïšIýÏN‰sË{ìni9ÿ3ô¦y±4{}¨)CZ€¾‡Cg\"þf\0[™¬ÎP”9 ºNkZ¥šYèf¢„YªŸ\ng¡\0gñÄth€€€YüO(^sø ˜Ã&}øû8’@p\$~óø\né¡û\0Ÿv0¸æK>™”4~lÆ†¼Ë€¿39›Ìî‚Æ; Ýæ¾{Óýd;lðÐ¨ú&FŽ…çŸTI‡Õ|aíÏÃˆØ‰Ÿ½&N'?ô6O4¤!è'3ÓôÍ…‚W¡)\0²v€2	æ•4@]RL.ºVÖ4šŠ\0¿J¹óÒ¾ŸÚ%ª„óPyŒÍ}è3?mBDuVããÑî–Hî²Ø,Oˆ5 v°ÐO£] 6€¼AÀ/n§Œ¼ñjß÷¢G’žeäÕê`Ü¢m6§u?<}Q[Tš¦fª/~osG,7 -°È´õ… <P;XÑÞÖì!Ûixß 8ñn²u¡ £kÆšË`ž¶S9­}nÄd¤.°lD¿¬¡_Èg[0û&¸÷­RâÃ[šï0˜Â¼¢yëgYÅ\\Öà,\0ë°à×óÃ5à-yk¤R’O>±Y®†WÖ¶·”ÌÀ9la!EHÜu«\\9‹\\Xzà1VÓ\"@º†ïd†s¾Ã†Ž'­•ì›`[1Ùn¹ @ˆ‡Ãf…i1 Avw¬—XR›%Ùht!°˜kpdºà.Ïó\\ÝniÁÚ†Â€N4 îíLBÄ?Öã\r„v'k£c’\n	\\Mƒµ­Í×´fá6Æ¸\$K”í°íC,P®ÉîXÍpatïOŒè0dƒ;\\Ä¯€‘\nÒÄè‹Ï[‚„–0p@ZŒP•lGaÚ®ØØ&— €‰L9O=>\\=ip¼0£ûžüévÈÐÛ‹99ñÝ€BU¹ñi€3›¥Ž´@ó¹\"´„®Ccä2™Gñ·(ï°­!µÝè³¶“µaB	LÛº¢ã5ˆåU+wÞ6ð\0Nv`È bÝ½z×\\òïYÞA€¢žÐwC¹Ý×îÓc²ïÙ>ê73º½òd9æÝné7Mµuîƒ~»éßº§wõ¾fª²,[x¹Ž\r¼-ý‹7~œ\0–ú¶È–oû&Lç÷G¿ÍÚÆÔÇ€h°ÜwâXÎn»€;÷9Ü¸+¿þðƒ '&Ø²Mj•ƒƒâÃß6ì÷ïÂÙp¿†2há>ìwgÃ‰\r´52f!ð³€Ç­ZK½>½ r×ÞÁ8]uBªìS‰8åâf1µùµmñÊ_ŠœMÖæ©O¢V”Ó¥Œ¼8m%÷¬Ká’ú¢Ñá™¸kE>aq\"ÍãVæøz+ýÙqÃ~ûMI‚€B½²àØk€#Ç.ÝÞëÄ…È/ëƒu#\0#Ñ@[r­nr.ÛœŽÙÎÙö­É!aò8`˜%nÊ¹#\\I…hÀ-äW(93Ê én#”sËäùùBp®^{˜ÝVæø»<pÛ…tsàˆ`1ÑÆÝùîƒ—[ë–ß09=Ëž=p¯|sÇÝNæ£;Çp¢ñç~Jß¿-ÎóüÓã7™Ã(ók˜\\ÉÈÏyÅÃîr\nPT|çæG77î!²ó³š<Ã „)ÑaóÈ\rœÒ,gB\$E.:ó?|¼ãçw\nâlû‰ø¬5Jæ‡>ùé½}ìì{œúçà°øãÁ]j¿nÜKW·ta1=ol>§_€`8èÞmóôLüðP€óžŒnEh=oG¬7½^‘Ó¤œÏé>ÛyÑÍÁž¦åé6ÆOmÈâj„sìfüúsÓ¾š„¦üx†^n”ô[~ý1WÜµÞH¨ô§R	^ó÷•Èé÷õd\\qé°}z]®=á{vý\rè¯ZøH`î¤q‡™7ëPr8âÁm–ïOwÛÇÜ¶áŽ@=Ã„ß?çé2“]©UjSOé¬ƒf¦µkÅã/jƒW cÕÙôu}ª­`ŠPc¸ÂSpÜï˜zž‡{1¼!,¦@zäÞÀ‡·9Ã@ö¼tÛ±ØZûuÚí^&¸:ØÉ®¸×Ï• ãž£r¬.Ê6GÛÀ©öûW‰—æ¯p{cÜNGœ§¸äz+NP	)È.ëwX}ÆÜw\nÔCžðqºúÃí^€ÚÝ£kÇ°œûïokwûÝ®òòÛº=Né`@wo\"P3ïÿ¢Ý¿ï¸¢;·ß®Üw÷­þ\0Ý}B×þüu7uû\rßnzƒ¯Ž<x;¾Ü„»oÆâ´…b½¾î‘ôS/à¯îCx2â\0E)ÞOv÷©ÍÊñt<Ý?x¿>íÇ6ÅßNÖx?Ãžñç¼I×ïs(£üKðÿ0|mâS/&_ž°ÚÇ|— ?sš>Y,?Ž7ï•&w·jðÜÏ|»Uä\rù+‰’ó…¼È,ï3x7Í*ÛDzcÇx±QVó^Æ|ÛÞþøí#Ìàsíi%\0ðáHÈ	ßb~|ó§¼ÇèùyËÐžBæSp|›å®}ùs.»£qéM]ªÝIæÏg«\rÕO5i©Î×ökT}¯ìþ°:_´?+ùûÔ~oÚ?¤wbdnÖá`àxõç£<Ùë?HwÌ~¸ô§cèŠi¾É1ãGáïÛ¯–u ýa­éðÔ’Òˆ·@ÄsðŸŒ\nA†\n´‡dÕžp)€,@sž‰+‚˜-à\"X²+/¶OÉíÀÉfTç%O¼@Œoy)žðHÀ'}C*Òxw¾½Ú~/w†`[Çá<œ\0“&ûˆ,a˜¨½½€\"‡õÏì~0&Cà‘¢:§¼>/î‰{”¢÷€À£3þÇ.ßÈ·‚‘òsòò7\0VxÏÈuAoZMgû÷iüÀ˜-ÞÿøÒî~0/ÉüàBÄƒÀïYü>çøþHSóèÓé_\nöìŠ~1îr{Ü¡¢÷Gº¤V5O°Ÿ«ì`:÷Î>Ð°|¯ë€+7Åc¸Ièü&û7Ê>Ó÷Ÿs|`P?pþ2—oƒ\0£î?ƒû'¼@ïŸz?Þþù÷ßå~*™	ŸØ[ß}gÂ\$ïïP)ç\"Jÿ[üTn\$:Àý‹Þ „œ\$òŸ½üò?“ûŸÝœoÃü«ñ\"Þï¿~</ØýËÞpñú#CœO€ûÃáŸø‡ÊO)ñO‹~ÿã_øð?iû¯’þWîßÖûÐP?+òï˜\0­ÀCù˜>jo›þüü¿;ùïÏþ÷ô,ô\rPý§ïþ_åþ0üËóoŒ>öýrNÏýÜƒöd\0¿jx\nOÜ?ÿ\0000¯u€ˆ¢JÈÓ\0’úKé`'¾šúx¯¨À4ú£òà'¾®óë/Ö?ˆúóò/ç\0‚KÛoÊ¾˜úsáð¾¥êÏ¬\$!3ë¯‚†¨“sÞè#†?õ\0\"³¬üè×³¼ûû< «\0’š9ãõ3±#Ý)@v?È\nïx?Hcïhë\0ªjD0)ôùjOè×¾<ûÛÝ`#¾0%(0£üôù°3\0°ùÓû ,@„ãçÀ,‰Kô\n¯ÊÀ®ûÛñ‰@„šT\0)€©Ä¬èÀ€ó:¬ë¤²ûÜCõ\0«@5@òû *Ð=ÀDIAø	 À‡[ñ@+\$òLª=Üû@\0Ìø\"Eûþ@ ÂAO\$I5#Dò;\0'£´äo˜€¤÷Pü°^€VýÓõ/è\0ø@bB(í@Nø(üÌâ\0ô\rÐf¿JÎ;¯¼@OàA†{8(ã\0—Z4Pn¤\"œppìýä\r€AV@\\£ÿ\0@0t¬ú´À\"ÁpŽÈþy?Ô?\$ó?´(ÑAŠütÏ±½{ç)£D?ZC£ÿîþÀ\"A¸ÿØ\ntÁÖ@cE°wA`\$\"¶½ÖÑ¬#°J¾üÏEP¿ükñãôÙ\0<€#Áë¼CøBL@tð„ÂYLäB		3ø #¿	XýðƒÂi\n\" «?ð»E`,?žÀ|A@ˆì3ºÑ«8O‹#D?)\0\0&àÄ&Â¸“Ãô¡o#B¬Í\0”|)€%€“šAà ³šöéOÑÜøˆ*Ðl=´Ñp	ð·>ê@T/½@•Œ/°·€VÀž\0>#tøì \0ÂíÓêÀ)´bÍì1/›ÀþÐAáz6sC0?¬(Oœ¿œdÃô\$Ý¹°»ÃDÐ=ÔÑ‹:ï@\r0Ä¿tÑ‹çŸîòIPÛ€©9,å€¤øÔO…£v?È\nPÇC‚\n´ÛÂ[4\no@i#ÉÃ™X*Ãÿ³†Î,	7ïl:¨çÃA	\$;pê\0VŽrEp‡£v“„:lôÃ«ü\"ÐÉÁÛ|2ðãÃÇd'ðÃÕœ Ð£>‡´=°VB3„0ô½Ðt,°ÊÃ¸Xüƒ÷C‹à*Ð©C¥d1PÒÁµh\nGÄ ?{ÝpsD\n´,p²Ä7	8	/¡#DøôCð\0ˆ¬*ðD\$ñ¬D°ÕC?ÌQ€‚÷TEPGD>ýÔF±D!	ëøñ€®“È	ÈÜ\0Hþï~¾Œ?ºO\0)Cv?ìEÑ\$BƒdFcû?>‘,ôÄ;\ncóé,€øŽÔq)£Eãø#E‹çOm>äà\nà\$BÖüŠ5­€˜@r5¡ª?œÑ¤KiÂÖ¢?¯¿?”ü«ü\0ÀwLIpaÀŒ›;ììAŽ,,£ó\0žh	¯‡ãô\0%Àw‹ö¨Ü4j?sô±H¿ˆ|JBÐûx0 ¤>*\ncë0oÂpœOÐ4ÃP\n´2ãEW8H×Ã±B4p\n3²öê;IP>´?[Ð:Â„K¡ª#qr=q1ÅoR<CûE‡dÈ×¿Ó\r@€*€ƒ´.±dÄÐøx	o?C\0kÝ¥3»P	ÐSCÎú7°¤¥0°%¾tÍüU‘@°,\"\0*\0®+Ý`>=ÿ^1yÅë\nd^ðhEÂú(#ûÅüˆü1w€P“´	`*Cè*Ñ„Db \nñl?›ò;PÁtø´]€¥@ùôL\0\$ÃmdcQ?#\0ýB”ÑŒdÀ(DåÜdhöAxø°‰8\0øÂN¸\$PÿÔD!ªC“\0kî»ä ñ.Íô#ï¨£M<h‰ÆŒÍòOÂðúÐüQ£ÆžöÌhðFÆœØq ÄÏÄiq)\0©ÊJñ¦éT])ÁøúÛÝ !¿·>5<eãð¾?±°^ý³Ýlë¤¯\r\\\"õBT\n>0cÆúÐÿÐ·AÏ\n«û°ëEe¼éÌ{E¨ëC¿:9ð-´U ‡Å\r\$H×Å-TNÉ)Ç(t\r¿yð	ìëF‡,fP‹Á[s:£ö\0‚Èãü’í”v‘FÏJ8É,¾4@Lw(Ü#wŒv`/¿×ðýˆãCA	SÛÀ ÄQ	CÑÙ¾3Lné½µlH0Að?da1rÂAè	ÈãÝ\nD\"ƒöE¥èý#ÿÄÜÑkÝ`!Ç!œO­4føÔa\r€Œ?E ##GSß¼€¨¤)°¶€¨Ä)±™Fý\$oÀ\"Ä\nl.p¦ÅÜ?ôð\\ÁvÎèQ\0ùPà\$\0¾übK§Æ°\n@/Çt?txñ˜HA!xCõÈO!+ãQ#>ƒõð8AëƒÜ8Au\nòD1¼Ç5\r\\RÀÀà R€g!ü€KH	´:Àè,Í#ï‰À#4j•Q²)¾0“ËEÐ3Ãx	p¼H,x\nò\r’îþ¤`0ÅÈBÎ°	€/Á€lvšA€ûñÑ%>6?T}QF€ˆ\"4QÏÇ±…ÝÈXøÜ…0Èþj<HÖ¤×\\Y° @_\0äÏ©¾«^ÑwFb÷¼;Q-D0ÑT±F¾“‹äQC@*’Ì`±€³˜ùÌ†ñ˜Ç†?,†ò¿Ž4	qCH8@°ÃBQ<%PÃ¿»4–èû´ct1É=\0‰\0Ü-Çô?”mmÄÆÑhþHØ4bœƒûC`Kº8íÄ*“ED»È2Ñ¬2À Á]|n²Hû!\$w±˜‘‡pÊ´dÎ#û¿U\$¯ÔÉX“Pcû¾_'’4@,?\$ìKOôD)«åñÉ©\"ƒýG\0Žü4QçÉé#€ü1¬£Ôø¬—ññÃŒù|xÄ?K(\$RƒHÑBO)+È-ìrk€¿<)ÙÇ®ÃîO4RþôŒîB×\"„GœÄó“âÐn?>ýN±RÄë\rk<ïAœKÒ(AD`\n°9ÁD”qLï¾s*2(DÓ¬©p•F#õÆh?(#ôÈC\$\"Ep¨>’?tÐ,.ÆN¸‚C4N»\0l¡O‚\$Ëm€>\$‘\$­@7¤H`c 9‰(¯„­ \\¬­2¼©\\×¼­A„¬à˜!§ÿ‚@Ú@[ÂF’Ä^xc êƒj3€»ARèZ'ÿ†`â\rß \\\ryd 2\nâÿá<¸£+0#Á<7Q-˜ <·¡, >¡-KÁ@<ËTµ²³\0ÜËaªËdÈH’µ\$JSâ€ù+°\r ºËk-ä¸\0ºËr’àòá‰<@sRß ©fáµ\nëh\"ò×6ÖÈ“ÀØäbD€<€ÎD·êÉ‚¤Œ‚Á 6ËÄåL»ró/\r’ïKÁ.£¥ÎM±#ÐjïFz”gà/ÂþD]\" €Þ O€óXþ“„p`)€­ä¨‘5Fù\rB#üÁÂþàþÑý\$:xüp	ƒ\nkã²L 	¡ª3‘TsP\$€VýàÉpüŒÄi+ÂItÅ0@ÅÐDÅ³Å1@[Ð-@¹„Æ³Ã‘1K8CüLE(ÌÆÓ@I\"¼ €‘2Ä“LNËÞ|¤òûÜ¡X3€9… 7…¢rÑ˜­ì\"2€)‚è¯„Ì*W8™,ˆ8!žƒ\nÌ 3LÆ\$ÍáÀ†¨9,C<:Y+èJÅ­Ú],ÏoÌôK+dB‚ lYÍ ä74+ká+\0î%S¦`>î°I3Af™:¨ð]4ª`/“pŒÒ®ž€ø2²®°IðÀ‹‰<;P“À×,3ÒD¦{€¾\rxÎ\r·„ó.Y¢Oo,Ñág<\$ Å!;Í(‰´³@ë,6KS=[.âòð%Ìf+kÀ á›\rðÍ˜´Ú[Í 0˜SÄç­§5Û@Ö\"ÞHÅ%›²f)*›¢ì—|ÜÆËs4ÑvÁOÍtà³TW5Þ†¨mÔLæI}‚Þ:`c †‚²nø+2 …iÍ© ¤ßÓB¬P`È‚\rlËÁ=M\rDÒ©…š\$ðc¯\0K–<ˆ/\0HaÑ\"­Ë¹5©@%×²%R¹2Í7²\rafå\rÎc+ˆ\"?…?8kÍÀ‰v) Î,û¦l/šÑÍ¡/Ë8£|³òÎ8€Þúî †gÄ³¢÷:,éÁòK;-s… <¥:¸gêõƒ²Dë€3:H\\ì2Ó8¸\"í‘M*š˜`@0µ=;Y& Õ€Ò\0¬\0>'5|ÓÃ9„¾\$ñîÓ¬Ë~8ø63YÍx¬î¨›Á†S˜\"l Ç³¯-ùs€4N¶Pàà¶7|,éòÍNé2ó¦\0ø2š¸Ë¢Z³A¡\0ÆhÊ²Ï†Ã=Dí£‡É,à|“Õ5=,ä³î(Ï<âŒ´C>Ops}Ó¨Ov–4öâ°Nð—ÒÒOY=0Sã*Î²%P%S_OH%TîOCÏ-ì`>NÇ;ôìaŸÎÌ“íÏºÜDìrÔLÕ:\n¸àÂˆP8Ì›Íêâ\0Taª9à°`‹aÌægÛžÎ—l	ŸaÏí8y/JÂŸa5³Gv2²CÏôçÅ\0§9îY´þ´\0Ú  >\$HL»#Í@©Ü³Ò•ÆY¹\\r‹?èOSèPÝDÿÀØÍ 4ýÎ{88ì†,M( £ä±9à3µÒù<%4@‹î~ˆS:ˆ„£ƒÍ:\"á3­‰T£oA+Pvì\0Çëa–nîð2è„ëX ³Ñ<þý\n3îP«-S|2úK6ÃÒ²s»MŠ´ì€Øø	Pc´1'´	U	¡)Í^XÃ40LÂ1}\n/ÐÜ\$£¸…Gp!9™‹¥1ø7kƒØ`hO:2œY¸8!CÍàL¬³@:Ñ¸Îs›:ù3˜ÁPÏÞbæIÎ7D˜Ïã.Åa+2þ\\è8Ó»:#CäÐóÅÎÿ6à“ÒÑRÔÙ¦|È¸Ï€øQ\\_ªXÓs<ím×¸Ù´nø„w9Ø¹ 9Ëb8à5½¯9ãA\0Ø7ø\ra\"ƒ\nh[j¾ýFÜÁ)”ï+¨¯ÓÐIF£m“i:±-ø[n*°\rM?‚@Ê\0•Tj\0`c´iM`°@“‹2ÿF¼»\0002Ñ´%Uª8Q¿G&“æQÎgdúÁ²ÑÙ?p¡ OE:\0004,pp 3\n>ç±˜´|ÏLfà<ÐHm!ô_†¨]p;ÄP¯jD þP¼ë·\nK–nt³I\0ˆ¸ïõ\rá§-pJc¦7P3„Ô2×-Ï.ºÁ 3ÌôŸÅ'URq+ŠÞ´œPÞ–Ý\rá,O,Ò‰Ó´O.•(”|¼î–Øc©üRœj[sFþ`µrøNµ, .²ø7~£¦Òù:Èl·.›RÇ.86³Ë|\n--)©ËrÝD¼”µQ•K„½´¹,IÅ.ÒîRëKt·À1\0ÉK 4¼Òü½/`•ÒÊê•,I©Ñ‹-å,ÔÅQ.È‹ô±Ó-û•4ÉSKƒm”ËK‰L%04ÇKyKÅ3Ô½S:	]2t¿SLÔ­@2S9ME+Rù+Í/½tKÔå64¢Sg/®²ñS9.øc´¡Sv^€0®ÀKêOy}Œ·ÍJ%3ï 4Ú3R/i´|#¸i«¹èŽ	C¤Ü¢\\ìÝŠJKxí‚î	 #Šö—vhÝ‡}LËNÔó+n¢,8BÔ;\$HôS4ó»Hbb­Ï7`;€ðÓåNí>€•%=;mçÌ7½HŒ¿Ôþ)H3¡›ÓÞëôöYF…?bTHuA2·F:e>4îLž;lÔR¾Ê˜t˜TPÜÐÕ¹ìq0#Œ§ëGÅDsÖ€Ã5ybÅG\"iPEÅÝ·tKÚAÖ£Ô55yîÀƒB°F“XèI¡ïQe=#4Y5\"»†CÎ€3˜†°\"ïCÔ9+-Gìs‹ÿO`Há‚ÔŠhQEVâ]DTô2€Êp6†_ÔiP\r²„š+p\$57ÐÁC€7`0Ò>7 ‰N=QûÀ!·QÄû•@8TaJöÔíRµBsAT1P%=@ÔT}Quå7`íì@3åPÕ+U4Á•FÀU	Q£ÐÕB\r¸+Ã€áE\rGõR“ˆä \"\0®ÕH‚À…ÐåTó¢5&SæÝQµ#UuOã‚ 64È|Ã¯Î(œÉQøÈÃ¼­;á'Th\r ôÓI=wCME®Õ„v¸çÏ:Uø„ÍdÑ¥F#‹´L¹h*7ÔASM>uqD½£.;uF”(ÍË}D!+°”…†!€Ù.ûƒaO\nÉNè`™(¡²ö5\0»Txj€ÖX3À€™(óÐ!Õ‡\0º.U`Õ™‹XUJ´*\0á:Xn 7KÛXM?•@†7»Ä@ÍVºh«u‰VXQÅÀÂ•ÇOaNõÏEM¹3\nèÐ“.Åc\rÈ#!OÈ_æ\nƒ\\¨’Á;Î‰XÀàÌ ®ÊióÏÖ1?=Eï\0Ž\rcéÍ}9…cy„­\0­Uô\rÈƒÍ¤K)Oå^MÆY½Tþ\0ïCÍ”ˆ2¥aµƒ:YX‘†ÀøV\$LåbBö¸8ýe@‰OÝSõPõ¢„CO˜µRºYT\roÀ‡Õ)\\o•+U)V´ôõÁ¸3›tü7)Yí?õÉË±YÕrM­ƒ²ª»àÂÖ1T\r%Á€…°\ròƒ[i’V%X„âÁ¥M%Xét?WF#ýbTM]uv•ƒo9µwÅV\rB½uUƒ¿]ñ’•cTë^\ru 5‚¥X£õZ×L çæNÖK6©Ä`…ÔÎ(ùÄÊäÎÈñðÇôPCA3\\€•97D#ÅAK==@uòSÅ;MO.~„ºÞ©fíÖJ½yG]A358nâVó9…y\0.ÍZ%n\rÔ]>ãÌÖ\$!LÞãG¼§Zè>S÷`¯§ØVÚ¯µ8[œÓÔ‡X•€³î8É`€5¤ÊCWx5‰\rñX•bÔ6_[¨9Oˆõ]¨¿õ\",`ã(\r¿ƒ>ãÓe\0€ÙX”ãÓ@`5`Á¸ÖæX³Ïó>ÏÐ\rÍƒ€úØ’óíˆÓ@€åbHëuƒX 3½x€.Ô;àœÀ¯Nøä%v¡!P‡`½`ÕæÎ7]@¢„“‰5]ŒJ7ŠÝýbEÆWW8‚FJ68µŒ†àÖSX5v:XÒílàÝsbøT,tWjpa\0ß×WXÙQß„-P·à‰W˜ÀCËjÖ\$ì‡€ŽÊË@‹¡P2%UW–!ƒåd«lÓ’XX5ŠõÝ¬Ù\r!Ö6YX“ŒŠ…=\\õ‰7!;ôÖXÙHXµe×–o_­‘å/…£aåÙw^]xN‘…›^P+Va€áeUŽæJY[AõŽÀ;Ö\$Þ-„µ†8\nY½J£X•}!NÖ7QË‰rÄW!_l²²ØÄàm³N‚PØã|VŽÊ\r\0ÖœK5èTÐˆ\rÝž³Í-5…˜MrYùZÐI\r×œMT¤å³_c!õ ¡¡c\"	ŽõÌPÕ3}~'Ø¯q\"UïTkªËÙN4}P3;˜ïYhˆÖ3]e¤EÆN, XÊ‚÷6ˆ¸Ã‘YP}u–‹\rcèçà­O˜+÷3x~Ýíõ6O¬\r¦µ+Q;`IÄlt<íd+Ï6D\rj °à0½G¥pq‚VæÅ[;`\rU2µ®šäÊ\0Ø|Å´ëT\\Ðªø<%[M5ôv¤H\nÃ¢ÖgÙ^æ`µˆc4E\\ÕÊYñ9±h5µTæ+²Á3§N§kì³ÓáZÿ,’F\nÉˆN¡óÁØIA5¬ ˆÙClY2ö°×kè~ó·PLÝè#6²›Yô°îµ×+\\ÔÒ\0Ô aChÌÓ¶ÎßRð ÓŒÔ¿,ù‘äÜÔ-+€Nó­5\rµµRÐ3A<Ò¨Ë“qm¸€¶Ü’Ï^Å|Á1Ë	m”6Ö’`…¶ö+ØsO]RE‹QETÝ€†Úšô=·µ—¨LÜIuæbÛ¬MÈQ 5Œæ	Ä—Í?_+™“ÿ[ÇOkÛ¶Öó‚\$ëVHÔ2ÑuÖdÛ¶Üe&`‡‡2\r…½ÓWƒbà½Öýˆ¿oí+VþÔ5p5–þ¹\nõ¼6þ[·Uãgþ¹0äm¾ÕòÙ©W³(þ”AÝ»t\$Y]A3ÆŠ\\:¸>–vŒT%U»wÜSH°<³O†p¤ëvV¸ˆJàˆ Uq•QÍ-ZókM‰¶ÑvÒÕ­ÆbÜqqøJÖM]-‰Ó_:ôpBÓ2ÔåqÝU“36EnÍ¯b°¬j…£²R=RÆ}ºüGØ–w\\³T¥ÕÂ˜‡pe]M’Í/s(Zõ¿ËjÊuËC\\1[ùÞ–áÛ+(+XUQ\\3bsSÜªžÐ¦ô! Z…•óYFçý¹Õ\0ÛTh#Êõº]8ýO³ŽË™mû¥×*Íi4íW.ÛbïuÒöt``!éDÑÓju_LtWÁjÜ×÷R\\ µœ÷QÔ´EmN7QNa‹04UÕR]ÖvsÖÉu˜D š]Ak%T¶°Û!RM\\wW=4ÝÏµR–µSá9â?Ô]u˜‘­ÔÐL…,—]ÕJêaÄÕ@×u%¡@ŠTø7ÅÖwfÌó4%T¡[TÌ¤3­`Ö‚§;T¶o]Av5\n¶´8AubÕoÝ­+E•ÒqTuÙ7|=n˜NõiU'wèJw×¬â n¯\nQÓwð%‹ av DW…Þ\n	eÜV±T)vá…ê^°ØÎrÍ5Kx\n”@°²	¤²‚›Ð(\n•bí-\\³IÛKUqÜªs%xeVK«uÝæ7zÛ',¢´	M.íê&ÌxÔÀ‹óAÒA@“º7žÜrìUJ—uOyãbt]Ž\0\$°-Œ†U‘µÿÞ-wå>7h ReÚ¶t×Âµ=öpˆô`h@:ƒ«x„ÕÔÜ/YEqµ8U)p½Ì×;¬{…Í ‡ÏUeO²ÞéZ5ííêMs5®w½Öþ½N\0‰b!LÖw‰{e¬‹rÝJµ»”0_W]Ìw>Þ\\D½³hUÖ\rÓÊT‚Þ/h%²·lÕU}‹WlV2&­L·¹P9zÝAÁfË\\5õ—Fß\\MÍÓó­Ù£Uˆ8µ*OUj5ÂöæŒáx­ò´ø³dµäÏ6KYNä5Á—MÉ:Ôôé©M³r`%Ž(€¾Ò}ó›¶‘s™˜µo»b£­uÂß­oN³Ôåy½[Õ^_±~ø!ö¹ÝoW%î¶²_×Põ)•…?RQ2åqƒY8]þw—ñDúVÁß¥~¥ÀsÛ(ñd³æ7QuýR•ö6BéR¾È\\Þ|Æ-\\¦ëõñxÏO€KÐíÍZÙ{bù¬â±Ö”[‰+-ìW/¶ÊV¥F¹™Qˆ’•–‹M{ šÛÀÅ§÷ñÔéFpwÆàÖëBkg“Oe¦Uƒ9¶¸!¤\r€˜ ™([p(äë‡ª»‘=Tæzì“Pïj‚ŽõÐÀƒ‚È”Ë¹€ÒÔŠ¦^hk?J¨JÓ‚HqôU\r„Ò­7XžÛNt!Ðd36”è½¯Œ\nÝ3r\n°w@¹4BÚ\r>`Âc¹¯J3\"hf\rŒù3ƒRê#´vˆQŽø<4ƒ!À0`ÎÏö\r8Eáƒs@Ø9'´^¸A‘¬Ñ\"M;a‡=9í@( ÔYÎÈ¡Å„³RîÊ€^¾\nQ\0é2óSáf€ÎìØaTLÈV£ Zí¥îÈ5]„£VÊªŸ®Ù…Ú°®Ìá}†Wøáˆ26ïW6:2ð­¥¶Ñ‡N,aÀ±£ç†Ù&}áÔÎá6E†mn:0âŠ-ÁºˆçúÒØ{:ˆðajaüæš©Nf7ÞFX‚<,8½¸@Ûµ…ÀäˆsÇ­â^ýˆN!î4b0ñêjŠ<A-jc¸:kùs¯\0âDð®°b6ñ+X•º^%Ï\n†„Ýíø˜ª”	@ <âlÜ{^ÀÓó‰Ø`9\0Í‰Þ˜™ï<[ZOác†^Xám†ŽX^a¬9vºá·†3³— 9ÂîHN¸p¹dãÀà*€‡‡…u\0	@.©ÜlÊDm÷8ÚBDm»…†É-hÔµ6»u®˜,˜:Ï	<\\%Nî5ì0 R‚F@¥šˆÔ»šøQMõ X‚¸¿ÖÎ4¶)IåŒ!†aÄx¦€ö4®&Ø½žKÚ8)P…ÏjÓ¤ŽtQ‡ÂÅPýßÂn÷ˆ\nòœÉe'8ýâE,KI=@†÷ð[Ãýcd?D˜ðÄÅ÷TR¯vE0dSQcYž8øäÁ·\rÔÇ),Ê9´UÑ@Å1'4P0DÀž\n´yÈø¾Ô	Ò|Å^ÎäððAV6ÑoãpÑPüðÈåZhìE<PòA„AQ„n˜ý>ë\\mA„ûì|0ðA… þaA£Z°ÊyËÛXÞ´g0ÄfPac¯„Bq\0d1È¯ÐÇÃîB0úÁ…\$'YAµ)l8ÿ>ËFy\rÃ;èÑ¹ÅLq %ã‹4}ñÇÁdQqsÅLtÃ÷Ç xøÆK<QÂGM’\$s’•=Ù’JK8ûÇ7’&?‚¾åù\0P¦Aõ\$	Ëä‰FJÑ^Bÿ!ŒYÅ¥NH‘d(?,YäÛDù\"I³“8YÊƒþNÍAõÆ;Çd÷ÆD¹<¾&´'ù=äY“Œ? Ë÷”p£Ç“,ð†G”“Ì\"0ÜB~HØùå/|<pÒÂ‰ŽŒtƒòcñ	6J¹Rd\nd\$Ù.CÁ	6L“A£	6LÙÂM“PýQÖã_¼\$À)dá”øÿ¹\rBg“´}°ˆã_\rœ'™@A	æP›e8ÿvE°“e	6QÐ	B’ùýi;B–ÑTQ¯Â¡t‡®È³ËEP¶¾5)´ÕÅï#f6sÉ T0ÓÅ.÷Kþ±GÅ2Î\$‹¸á´eü›ÜI¢@r4HãÅü“ûûÙ]GÃÛÿÙpD·LðQ?ÙØ’ŸÊƒ„YZ@Ã1Ì4ë?““Þ9	åkD}ÌäÀ\r”æbOæC«˜¬«Q=5žd×KfS>˜Ï—CK?™u§Þø?Sø‘£…¼ÒK/ÈæS^4(2¯7ƒ*ðSFa¼f2þ\0QÌ^‘€QdH±FÇ—ÜfÍÊ–ÑT¤íì\$Ën„R¹+¢ó/5]FT—Æ`þ¸üÊ½2¸ûâÍÜáó…Nm˜SŠPØ%Q3SŒÊÝ>à\r—IBÞôä““ÏE9I\"ÿNZ	\\ÚûÏKQX>“ÒÎd3<æÓœÒ#%:Õ,¾3‚%8\$à!'\0Ý86‚YOœÞsÀÂÑ'3ùt´‰!4C£—NÐ%aýÜbP\$â[03d-¹7L»slMê==s:ÊÕÐ’ÖP\0f+žÔX¨rÜÕ9Ùg¸“ÙÝP@ˆÌ·±\\Þx¶ú…C6\\ÓVy^çiI€ÜË\"TéUƒ¢_4äÙÄNM«ž`ów³S“‘f6€äfwSO›3 \r#<O›7¦V¶Q;¼ýô/¬Þäõ×•JËq¦€ÀÐ ¤ù²ÔÏ›= Ê©ü\$Ÿ>äù¹–LçbÕ(×8fY:ˆ!ùöÎœ•i•V\0æ\"ñç9‚R\nbó·ß¡ÇNô0ö„XÈhS7`7&ØË)90É ðÜ«iÍXÀ3Ný€VeFè%9à»S„ÌÌ{µÑ\$pÅ(©†…,ÓsAË)Iè-”£Y_E€Bhï.•IVJÛ5	,DèÍbT8Ë¹+M7éúÎx¯ÖöÑÂg»„³JÙ#|Ív7]¨<ì”:\0×míxz;^péÕ˜òè£/£¥·²ÜÎs-ECú¾†A¸›c3)“·øM)FÞÿ,'GR8_~’O:Mk¤©Ä×h­Î_f“3æË·¤åcYÞå=f“”HQ%S“…ó<ë>ä­m/Q+P¶•óBÐ”°ÑïCY+Œº‚R™4-†i€ð}ƒ>Lài`3ÍC¦9ˆtHË]¦e:fQòQfÚf\0å\"™–;RE¦Ë×—Í7°¸g”áEØ7×ÑVm5­MÐíEŽœôZQzó-ô]i×§–˜´°!p×Íêé	†Ödâ'Ð}™H*4Ð›¨	•\\u‹Y¿†|Uy‹•ÍÙM3+KVÏ3¨^¢/XÐí9¶z-R„›IpNô&ÙRµ\rHTà‘¨Þ\0ú€¹¯¨ýÚ9Ðê+UÒØÛÇ@4àWÚ¬Xµ‹EqŒ^Ý˜…Å×êinÐLõXØ³ ÈYÖ«•1©~£ºjgjÆ§ƒÕ½©Î¨ZšêzÚÜz£ê‡žŽ¦Ô 	j9PÔ^p\r5¯g¢Ýž«eØê½R³–óM_ªæ¬w„ž«6ã¦jÓVö¬:·j®j’ú¶jÐ3…¯úºREžŒîå †Â¢õ ×jQ;¹3SîjøÒÓ`B.ëyiÖÿ O¬<Òo8T/G°#:xë hYÍ{\n?¬V²ô*·¹AÞ²í}ë9R¶ªŒT]püÑ”÷¤¼\n‹Â”	:¬a‰ºÖ¶K­~µeš±. \0úâK£õ€×èÃj+!EZ%uDæèƒÙo¦·º”,45J¶R×·­öŒ§0e©E¸úè€×®žz#†ËZg£™N»µCÍeH¦»øa„­¯¤»Ìó‹î¼•+kÑRuaÊjQ¯}F3­ë¾ÙC“¶²g£r¿U+:˜èµRšì¶'Yð¼rëkHó6ª;\0ëH…M=zÿº×°P\"Ts®5]zç©rî¥{—}‘™èì4ÜÕÒ··J\rŽ¥™ì?vmôTAç£±0›\rìC|•ö[l3±nÄ<Ø-±UJÛßf\r^ÄW­ìg±vÆÕ8.›NCåTå.“NcØøÑã0Ž4Ø=âÌ½AOU²~-“pÛóu×±ì©²àrŒS¡fË`ºÝz)˜»0‚Y‹>Ë—4Û¿JC{4lÄ\nÈZ-ißÒEÍ[6U³vÌû(lÄT¼	8ÞÌÔJlâÇŽ£³-Ô³üû›@¦¤¦Ð•R„„_fÍ»=ló²¨Çá&XI´†ÎûIÇ´¤ß×âÙB-éOF%°ÚÒ…-î\0ûSN-S]±.8\$]uT.¬ÄåzêÌ‘%ûRmg¡å}Õuß1}~g®¿\\Bë[‚3r\r\r¡µæû<P×´eý8m¶VÑ`2íMÆÑáQËbË:1ƒ3.†\$Þ±ý-&\0ìŠÁ·	ˆz4°Hƒ†“´5|Õ´Ož6ÁÍº„P-˜D²SØ%‹×?N½VeÑû{K*â5ÏÓ¤íeRÀ€s_mCŠå„vøÏ	i7WJèÅz˜8€=\0õhq ßUt5g×«#¸m+óžð,=&3uÒÇ¥')íR%UXiË—º1î×SE`DSÀÅÓG\\T[t<XýfIM;v÷8ÙŽà‰`.¸;c8^ÂV·®:MÖw•¢×æ–FÀx™•\"öN€nL¯€_Ô{ÖØÞPB‰×¿IôÒWYÝWu•ZÝâ¬+Êõr]akMS¹ÞœµPÄß]iÖíDçîÙTøÏ“èîÖ1HJÃÓº,Få\0äîýÐ\0>Ë—-ƒnŠ½£ˆR3€—ûÂƒé¼=»;ÅLÍ¡–ñ·¶ñ7]Ùf#Çw—×Žn	fæà•X\"ü»î¥:-}Sg+àŽß\nM[@Tÿw±€Ö„Ú‰\rñb¾ö{Ú¸™:Þ÷5{„|5ä;ÖVÀÊ¾ð!=MÇ¤!&<¼á~¹á!=Lç€h÷M¶©uû{ÓÿØDb.W7ç3\r:€…ï¥OmŽ{®™eÖ•x	Oíé7ÐÍÝ­1qšo×S-ÜVŸœGa¡PÞ}>PCÁ!P)bõ#snÛ´E äk}°À\r\nl0!Mg¶+Óì\rÕ=`š“/R5#aTáy½ÙU;Ôžàn×šÛ„aT:KÅÎÐoZtÝt×mt…€{·mûT=HÓ­Õ®]¬ûGðW°fÀ>Õ9È»{apa{½µI¯› 7ôŠØí©{S˜ˆ\nŒ½\0š†Ûute;|Õ{¼´-Ú³])Ž\0¸–\n’×p–MÅ×Z UÂ¹Q»,ZÏÂÔ»ÂV‘¢…p›³ÝçT/û¯ï·Ã@KüÕ]ZñaYô³H_ÃCÍÓõÁž£•_] âŽÜ3÷^Ýsí­{Ï[<\$´7?X4f.ÞÀãRMU+vce]À@xmð83ÕØ%Û\\M;~ŒW¨¶z¶aj%©wt,ºüŸÆþWÈÜáT¦2s_\0ÏÄóbaª!€ôýçÐîŸ@Ú›Æ×·ëñuG§¶ð6Å¿wëÜ/bÛÀžÜãC>q•\\5Üb~¾þ<gÔæ1pàÒ¸ÑíQ•Á›Nè¬*Ð%—=í+8y8&¶þi}Åç6ñÊØÁDqÑ3ð€:ÞáMtƒ]Hs,&—ßÛT +À8ŒéÇìõ;:l×B÷Áºï ÷T/sï!6åíÓÈM¢Ž~¹à=°Œ=œ‘Œ}E:¥\r•A{~s´¶Ù_3º÷±¨ßvo»>Ø{,cÚÌ\rI–PÚ¡A·%˜àq±ÖŒO™¨ç&×h6/U¶Ö•öíÓ²õAÓ¿ÑºUâÙÊ\rÜ¡'\\ázUÝ—RU}À¹‚­r]É¥šãÍ]¸Ù@5øm•´îü²×r·q€‡²-~Óœ°qÅ»ß,›.r¹Ç€|ò¾eõ@1\0ÏX³»KòåË \"\0Œ[§sÞå¹š]Ä¿/TÛ¼\r=êóSÅRE\\¸aÔC DýÌ\\¦]€#“‹NÓs‡1áâ])hÏ¼ÉŸ1DìùœÆÍ^ß,ýbí¶mA\rNdŒn„6Æ¤•w[GÀ\0j ß™H¨G{¥”8-{¶Pñ[\\eLŽÍ+H_,#ÙÅO'<Vòñ´½KtOoÕÎ+ÑM„Xÿ3Û(4œq\\¿9Œ§sy¾ÕœçZá<%X¼ÎÃ¼››Zƒ¥Q7»P	zEÊ•i[Ï%}xÓö¾\n,Æ(Kƒ…­/àÌ¡n„¨xh|û4Ó;@¸8`åƒ©Ží\0¶Ð\0'\$Òaªàòö°(ïÆE§€[¸@I…2yxBàÀÓ÷A'>l˜Òé¼ù44cï>ª”—?-\0004ÊÐ\0­4`âÍn­<a«D¡ÜaÌ›²F?ˆîÔKP]á'ÐSÔxW5ÑÐ^nÈàÏÐPhoRá¡…Ê„¢’â©†öOPœùŠvø[ôsçIX_á¼’hH\rÚ6ÝÒÉ`;	îÖàU¼žàî{jÝ0‘öÙŸL.0Ø¯L½5\"2×«^ý-ÖµÒëŠÍp\$·ÒÎ°­Ð7ïÓ1C¡¯tôá_L. tüÝO},‚º?Pn<==ÒkUã1ôW_HÝ)\nçÒ¦âºîÿPUã\nãð’õc+Ò}/J\rLõ%Ñ«pXkàVØÛŸ}+†HÝ¯SãMQÕEpÝ\r=—Ô·ì75Œö‡HY(…‡=ø==±‘TpFâú<“cõ\$ñR9À(FR4yJõ—\n†UÐÀe‹fYãe•\n.Q°ýå­\r)®É’	Ï|ñ—|0ÏÁ—ä71.DÏ\$P™.æÎ \n¹†?%’#èQ%GÏ4gQDdµ‘ìQØæåé˜»÷ «Jg*\0p8ö	\0LiÏâ@ý´gKÀtûý†áØsä=ˆ@·[Y£?yØ³Þ¯Úv4ÿ»èpScÜÑ®=p^HïäŠOœÆ´nÒxã»ü\\ÐÅ LpPfÇ\nìR.Ìu¾:Y'd—NOÑ¤Æý’üF‹i¥F•ÚdjÐ™CÜÑly²ƒ=½OXÝ«ö•ü~1îGµ+Epg4W‚NÒ{´kÛ,¨ëÃW¼-rË Lh×E ty0H)\"„M²BT0þ±ÌÄÏtzhÜG5%†œÂ¿%ÔRÙQCs\"D]`>J@ÑT‰HÑH¥\"ÌŠ±{Iëßñ{F]ºJpi÷;ëóRI€\$¬“ßÉI%<0ÑhIeÐ|›RW¿nä[q€Ç=&BE#òeƒ%ì7VÉ“›L™ýsâ÷èÑGÂ‘—¶FðÝ?½Ø|‘€æËE]ƒÊ{ ¶aÐ9Êšüˆ\"3pÒu-±S³¿Ž¹‘çô7Ú!36ˆ\$žéÐ>Ž·’„Ñ”	¢¨Hú*˜¼slüvµÍgœÞ•³—2´·“,fÝ4.k;S÷¯NÜÍÔ…Í>\$ï&ZÂìžÓBw«Äf¹ûw{ÔÓîLâ<Ù|oƒªöpôhKwœH‹–lM·h‰¼RMÏ ‚’áŸçw=&YÎ“lð@‚#ºœØ¡8£¥V–ÒìiuE5M³ä„œ\n6éèì‚ö4]_õi²gXBä×#³Ç~¾\\ûtÈh^ÓÂGäÜ4NÖŽ®ŒÿöÂígs5R•Ð×²Õ°ÎÕ…jÞoç­gRHÅFð%S°Ü•6S¾/…ó\\ÜÌµž)ÐÞÒG9“ @°ônÿÀg!{Bn.S€ZçTl@3u×ÓÇÛoCñÅ¦]t°²(ƒ7ÍrGr§NÖM¢£…\n…1gÉç\";xYk¾ññ\0úÍÉDlþüu6àƒ	&ú’·_~Î£Ž>ÛßÍ] V²à6ëó’´jeåÈŠ^2ñ6	lÌh¹+uß˜~LÊw×˜»„…uÞ®9Ð—ª6¥ÝU‚òÍE€‡7±Ì¶Õ“Ï“+s‡›-Ôï‰ÌžôîßÓ?Gœ)'ù’q§Aœö¨‘‚ŸTA/´ŸØò Á‰Bë\rÏ‡QÉ‚a5Ï¡ŠLÿôUÏûIMˆf7=óðÓ¸.Ý€Û…_žÖ‹”Ñðà.ôŸÒ‡ýFz†oR&_€ÈrÃHÑàúÂ`•€_ÊÃ¿ØdN³J~ˆ\0€n	*5>•€nÀ \0géˆ~–\0p˜ãDúUéÊÇ €d·§–\0lÀÀú‹é˜¾™ú—é°\0úŠ±h~žz¦€ž¨ú‹êˆ¬z¶¿§ž©zéÐ~¤z¶±È@ú¾È^Ÿ\0OéX€mëw¦@€l‡¦þ±úZîƒzë—©^½z]êO«àúê_®ëúÎ¿«>¥€këÇ°>·úÿë/¬^Éz\\¸>²ú·é°>¿z]ê@@z¯ëO²>¸z\\‡´^±ûì7¨…€Ä°~Èzéê¦`úÕípù~°\0gìŽØ\0aí¶þËzãéŸ¶~–\0oìgµ¾ázÑì¯®\0&Åî®\0úwí/²~ÍzôÏ±žÔû„¾­zõëàäúeë¿¶>¥€oê³Þ¸€`¯ºž²N%êØ>Ã{‹ëª¾ñzîw¨^¥úÃëÏ²Þ°z÷ï7¶\0\$2´ zíîK¿ú³îg§>™úçð¯^®ú­ë×¹Þ¸ú×ì'µ^»zÁêß¹Àûƒíï¸þ´¦që×·>ö€qëç¥ß\0|Oêª¿{Ž§ÄÞ®úÓìX>öúÁëÄ~á–·ÂáJ›©~é\0kðø@‚IëŸÆÞé|WíPžé|ê7³>èz€ÏÆ|=ïç¥kûñÏ¦@zmòÇ§+ü›ò—¶Þ¼zÛë?°Þôúwé§¼ÀüyêßÊ€{=ë·«'ú©éï«~Ø{\rë_Ï&|=î×¦^¤{ßë×Ä?@z€­?2{îÇÌ–zùë·Í§{¯ó¬à|\rê¿·~ûzuð×«`\0iég±Þðü{é—¬¿ûqñ¦ß8\0ií‡±Þì}5î?©¿.{ïíÿÓ^¨ü©î/Ö\0}êˆ~Æý&·Ö¾¹}këšÅ¾Â€góWÎ¾¥ú§×!üûïïÎŸ'ú‘ó_ÎÌ}¥ëçÓþø|›ïOÆ¿OzŸé·Ç:4{3ôÿ¥þ¯û1ô7³þ¡}ÑêÌÿSúúÇÔúïó—Àz½÷wÓß9ý3ñ0?!ý¹ñ‡¿Ÿz{ìWºþ¡}eî7ØþÊüêïÒß—ïg±~ý«ò7ÅŸ%û…ñÞ>ã|eò¦ŸŒýmêªÿ&ümñ—Çº4zƒ8—ÌŸ[|÷ñ'±žùú»ó×þ·~êÇ×Æ	ü	êïÓž±ú©ô¹^¼}×îŸÉÿX|½ê»”þ‹ôWË ý{õgÐŸû“÷× ýWì@\$¿”úŽ§è>óüSðÏÈß|×ò ?~ò\nÅ¿M|Åï?Õ^Ç£Sø¶?Ez‘ïÞ¿†{1û_µþØû¹ö±Ÿi}ûë7ÉŸOþKû¯·þ¦ý+ëÇ³i~ûùùŸ«>â¬[ñ±\0ýAð¹Þù‚KëïÏ?±ý	ï?å?D|›ú ß2|ÅêïÍ©~þéìÏ¬?E|›ð·ÒÍþYìïò¿Š\$ù¿µ~ãïðŸ?}‹ñ'» ûûG»ÿÎýÑô_ì>ý{1ø?¬&þƒò÷ÒÿIû­ïï×¾¶Gê¯©i|©ù¯®úaùgñÞÂÿ³ô'·°z«î?Ýÿ·ø¿­Ÿ€û_î?¾¾§ú‡îæ{yü¬¿«z«ëw·¾Øû\rýÿ®ÿüÑòö~¨ûÒþt>[æ‡õpžé=¡|òöeö“üWáÏl_;=x~°ûUë›ç¨Oçž¼?L\$\0‰÷ÜçüÐ_o=×}`ö«è×ø¯®ŸÙ¾nþÁê;ë‡¼­_ð?áöðÛÚ§®ï³Þñ¿´{ôûÁúx'äï½ >’€õuþ#ÚúO¢ße?b}ªû•úãã¾w_5=ç~õíCà7®oXÌ½ð{‘\0Ýé«à¸ïðŸx=k€÷]ékî·¬_?R{çõÛÛ ¿ÕzØüê£ú§²ÏUõ½‹~xùuîÃñ—Ñoaß?(~èû±ô³îg»Ð:>}ø™ñ«ë×¬ïg_”½h|æù\rîÃé‡ëoÍ )¾–€Äöíùsõ§êÚŸ¿ù´ú)ë¼'®\n`>½~øøéékôg³žÎ>6|¼\0Éþ#×w¿/‰l?}vúÙõ«ãWù/^¤=Î{áõéÃØg¦°,N½ìövæçÕï©_½ç€Óéë;ÞÎoM @s{ ýì²ïÞÇ¿|Ð÷IöSæçÚ@I_cÀ\\|æù	ö»Þ\r/_~ý~¬÷J‹Ú‡çïx`F¾–|æôÒ+òÈ\r¯¼Ÿ?¿zíÎ³ÓÈ	ï¼ÇÀ€2ýJûÝÇó@Þ²À\"}üé«÷÷ÈÏx`2=p{î‹ñ·ï¯¿_\0@u{TôÒÚ§±ðH`B?ú€Á)ùdâïO_·=5~ø¢“íˆÐžü=…€õéé´¨\rÚ=eøÁøP7ýÏØ_â>t{<õQõ4¶ÏcŸD=~}zôÕôCí÷úï´À	4ö©ðóäµÏNßñ?{júíê§Ë0Ÿð¾‚˜üúä&íà€À_|töÄá[F„âOR_Ù@2HøÄ—ëüGÈO°_f@\r}Ž÷ÍüìWäÐ\"`·=Ñ|šü¸	,—ÝèŸ’ý~övCäg×_`\\½;|r3áñ;×ÇùÀ¥ Ì=m{0ùÍó”ˆÏ³ pÁ›} ùÊˆHð0 À€kyñ#Úâ¯®À’À~¹Ýðkå¸\r/ñ_m=á€ŠõÝñ£û§¼/ºªA|˜Kõõ{ÞxoLŸ-¿ÿzÒûI÷„Gé¯Ü¦ÁÒ{”õ…ì,×é°' ^=ìƒSEíSé˜U`m?X€ôö&{íØ:V]¾/€Äô¶ŒGé°Jþ¾JMõû£Û—ÓÏßÞß=»Ìöåê«ãÓ¯ûž¸¿ôá-ðkåxOô<½qƒA\rì,¨ð^Ý¾|n÷ÁëœX;õ_O¿)Jÿñþä‡ÇÏzß‡=þ}´ûŒ'¹OX‘½°{Ò÷ýcýÈ1RŸa¾ÇznêÄö˜Ëó2¯Q·ð#œ|TöÒÄHÈ³Cûà?JÍ	0Ð~\0	Çîx2ôF+	5K­ÄŽ\$•ÒxrFu	9ÖâFdW©!+ÂQEh‚üKÂ˜K@U“*¢ðuüÍ)‚VT}Øð¢Çv˜ÍJ,°nß«:ý„Ô{uJdÃ(:]x;)cÈ\nÂ4't ¡>ºò„þëõ“4j€R\0èLKZ­íÀ\"OH¤‘x\"(EL\0­×\$¦j'îÒ:&KEBbhí1t§Ü\0dn}Á|*„wˆil ¨„Ê~Iz\n`QF£I¡	m\n0T­úŸÅ\0‡\ná¹ö;Ð•¡a2@>àìˆP¨x!CÂÅ%P~ì’ÊQ§a	fÃ‚BÔðÎ³ˆ€¢}!l´9)è?IúVR'äRÇ¥sR¸rl.c¡ú!u#ËCí%c4gZøápBKFpŠø+±Ä'ÇÏÐ¢o?\"{­D/£øàÕ	C>-	­•&Ø`‰=\$8=´­1™'fZý¡‰\0C…bª<6ZpÅ… fÆ‚A–È÷5­»WÍä\nø£·\$Ä)tÀµrb’@j‡Ç‘@±ö†™9D33FàaO†’†f1› „Æ\0Õ»¢¨°Ý¸”­µ‘t’Dì¹dXLÒ¡L¦3yLYºW0T‚çAÃ\0?6Ù\rNò.\nhPAŸŠw>\rQT\$p0°ÚOô»±¼Ëžªdä€‡\0IIðÍ*b#”c(YÀ!#F8˜l?\"8Sã˜a­'ßÀC.X]ì”a›Ÿ€W<–¤rZ¸T`aQ{«	i–ù,€*ð0©%Ð\n3E	Œ\\*ô’ð®áZÂ¾…qu	\"FhÉ(ÐT&(@(Fì•BD	ˆ„»¢ \0P†Àø'\$HlaV2!‡C	p,;†6¨/¡Ž‡zƒjx~„šlÒƒô#¥‡t†ÕJ)^ŒzXòÃŽ‡oHˆ-ä7Ð¥:[`RŠM£(6=L—P²úLf“ŽI›„\r Ý¡cb›ÞÓ’›èQ³fZ˜¢ùÄ-€ŸÑ²CûFxË06c\0;Ì¨ÈÝë‰@#Ž%ª:î…è s\$Eh÷@! ˆ\"A1š€j‰PÑˆ +#ÒŒÔ+½4bš¯€(JŸ\nz!21 *Èa\0&\"­dJ‚A*‹­NàÕ\0,ßGŒˆ¬ýÛ\$FS áb:÷eF|—ˆM¨Äâ ú3’ t\$È‡Ì•Ù>Â¼…l%â;±FQ0¤ú ¨H8‘‘Ø\"c—\\i!‘]Ä9e‡Îáx‹(zÏŒ¡IÙ›\"ÂOèT€(\"j…~Ç(yô\$ÂñþDtv¦†%r9–;&ŒÀ!Ä\\†J\"d'8Žè€ÃóÄjc·þ\"R§j¡ø¢4 …O˜ÂEpÛÈöD~‡SALI&;(áë2[HIÚ¨€¨N±&ÑÄŸ\$î‹øý|F„\nñïLe©	I×b§ç‘ Ÿ¡v¦%\"4Dn\"4C …^ƒèÍò(DZˆ0ÙCÄhL{•TK&Q11Ó!–ˆ½éøä–‘3ÙŒ¡…§-˜À~„ŒÆ7BaCœ~¹F„4H.’¢!‰?jG>'øšˆbHìÄ‰±±“„F„›1<~ Úˆò|>'¢T=â=¤ïˆ…^'|%øx±:ÑÄA ƒêœ:XVð™!àEúd÷ü\$¸eqCb»Š(È¢#C,È ŽÁšDhB¢Û.\$&“âŠD,AˆŽ‰úRIPõ“D;ˆ{´+¨ˆ`U˜ë³u¹lD˜¦ÐÇb'C¦Š)	4ECçÑ’1¤Šv‡V\"Ü7ò(I¢0#‹ŠŽ‡âqú´`ÑSŸ\"@DF¾#lEŽ¡~\0(eIÞ*{Ä8QDD|‰-±|V\$a¨øbª¦N…^Ê‘J<è‘€aP“DŽeñ>\$ÔIHJ‘?â´2œŠò|Åû4¦U1)¢P¡`@E>%\\J•bº1¯‹œ?ì?È•ñcYNDÉAQÖâè©çÕ¢^E˜‡\nº(jh˜)OâDÅ‹<ˆq2\"dè²Ñ`˜×ÄÌE:*|M%1RØ×ÄÖ‹hÊr&Ñ!X Q7äDà†1R(œñ‘\"ÅŠŸÖ.NØ¶î·]D%Bfˆ*zFèžÀb=EÑ‰ëî.£ ÿ±Y¡¸Å}u¹tüt]Hi4âåÅGµV.ŒSØ¡q\"\"ôÅ…i> #­˜_p¼™aÅ¦Š¼Æ½/ÜTø£ñp\"¡yCæ.RfW©7\"”²ýŠ\0ÇÂ)ŒWÄÄÑr!#C¾Šqèø<`è¡0¯bõÂ¯cà‡\rŽüGøÁ¨6¢¡ Úˆ¯0Š\r¨Jq%‘‚:Ä>ÃF#<bc‘[b«‘ŸˆÜÆ®#ˆ˜ŽqŠ½¡þŒKú+S\$X»1?b>ÅÝ‹/mÜH8­q!a»ÄQŒ€ˆ\$HøÈèÃO·D›‹‚™Ö\$Xø°¡øbÃÆ4BD~–%c&8±‘’Ï¾E„‰[ewÑjã1 Ú‹5YÔK¶iH0¢_E\rŒØþ-#\"³Fq™b+E©‰‘Æ1ú(µÑIÐwÆ7Œ<’Ìü„gD[IPbk²Lqä[ÄÄño€#Æ‚ŠiK´\\@gÃP`ÿfdiœÑq£4Fd,Þ3ò˜ºš\"éEØ‹«’.¼V8»Gú¢îF\nŒÖë/j·q¤£6ÄJA…N\"|Fø½‘š\"2#e“]Ö\$_˜Í~ã.EýBýMÄhä0a<#> °Œ­Yv4¬bÐÇà#œÌB)‰!\0	i‘d ¦²HDúŒ;¸ÛÀ\0/¡ALøH˜ÜñgCðÖˆ}ë!8j»b„ uEÉ	\$@l+D±¼]qÆ¶\$ñ¬ è[ø\0+FEà”‘\0jGT Ðr\0M>}”ô3hSGØóŽ~HÂð®!áÄ\0CN…Ê\"e3ì¬c3Ÿ’Ž6\"\rèá ØøÂÇÂÆúXM±¿%D‰#ž| B>0±Ò4Ææ…„•äsHÞgä‘Ê¦;KôÌ!0Ì,p	ÆyÙ.ÇBŽlH­PxZ1ÔbD`‰@‹‘×,3¸èŒ¨c‰ÇDŽ¤˜Îü;hì(ÐªGŒˆ\0øðä †wP‰Ev’—ä?AúQ½Òû¥ùv 6ìvôh±°É	v…ãÝ±ÿ¨Žé‘rÃvÃÒ+¤GxéÑà£GNŒ¶ƒ®9ÈxçqâCñ£n|dl5(òÀúÇ—L[\n*\0(ñW£ÑG>HªTVÔÅ¾@&Åo#¨Ì%8õ1“G®ŽÏÕ\"c³8õ‘í£Ø uvgÊ+¤zøöŒ‹äÄm#^‰~>\$P½DGk\0qÉïwvÌ‡áƒG·\0³î(j>ØöðƒÅl‡\n¾>Ô|39u£ã#7@\"—à“„s„\0QùÑ\$\"Œá	<~„„\$”âœÅ]D¦-”M8`‘ü‘ã QŒAÆ?jO¸`‘“PuÃ‡úƒÖ=€ˆÆQ–äG¦AêÈ\"@J&¹¤	 ø\\pÿbH\$à '|~óò\$k‘zD†R¢!H€‘”‘]ÆT\0 j2”kPÍ\0/ õG:¤iõ6ì—R8BÑ‰AÌƒ¤[è£bÀÇ€DY!7ùxlðÏÑ¢Á˜ˆUü„à‚\"pÃ<Að‰\n=dh(2µ ´ÈLh3êhí#Ó&JLPŽBò:”hÈ\0Â¢0Fš@Z4¨ïPí¤8ÈkŠØ‹\n*ŒÓã0ÔÏ×Æö4ºCú¨Á%ÇîêÍD)*äaH‘¤=ÃbGŒ‚ýŽ¸Yè°€)ÈR@—!,D‰taù¼Ch\\äÅ†C`‚Ã±èã{G¦w\$˜Î9Ê&Ê¬ÒÐ\$‘T…–@ÒF«¡ø„»Å~Á0ÜnÄ{Ë¿žêJé’”cô«äÀ#áEb\rPÏ:1I22D2Š¥\"…´BWsèœaÍ’I#Žü*cd’5¤5ÂI‘”„²@ÈÐlÈà;#VG©Qã¤\\\0(I.ƒ®4ÌNXs§ºÝØÈó\0œ”9¬9¸sÑ!ÕýJH‘¥0Žcò'Ã²Ç‡‹8Í)1N9 a@(4\n3\$1s°©!ù\$\"\"àLyªH`¨«¤n‰ KDÔˆ5,z`\n\0À\"1¨eÔ˜ŠI\$~ä@Õ		’LF½ÛòØx(\nÐš\"\nDå²I¼|øwH[¤CÁ#Œ(÷T;¤<„š˜°Âì’|>/”x¦Q;¡æ»ŠDäï1™“âÈœƒýFå@¶„Aš2>8ìi@‘9ÅŠ'#–EŽXôÁÿ‘F÷ˆÍ5,¦;D–RýEEUKQ8ï‰NŠ2íXÒÄhd»\0yŽ<Ÿ•ŒnÈÓ2DH²%@v”A*\nDiRZ€(Ç]>\\‹JJ2	Er¤) ‚\$:Yü™x¨çQ?€U=î€ì¬7Cø±oÐH [“@„Ò=I5XÒý£Æ’Ã&´œ–4©áÿÏÍ;£‘ò‚E²%×iˆäÜŸrv™&ÖT›ˆõ©\$µ vF±&é<›Ä2c¾FÿDñlý¹ôÔI5ÐHD>DÍ ÂSù\$Ÿääõ“&Ý‘DnXwdhu#Š5ŽO<zh£RÏ‘Î\$;6:Aù;L„âÉnˆ&¢EšØôÉPáþ€V7|Ð¤˜¡°6 †d¿°8“ü:P  ’]ä¼É{\0PŸ´(*6¨§5Þ67Ç\n•U2›ÃÔ¬*rØ/™ŒŒóáÐéŸ R\$¾€¹0›yúPIçû¢Ç /B\0»Ÿ\nPˆXÀ3àbŒÕ\0.&|lÐÀ3ÒÀÇ4:<håè´¡öÎ©‹\0+ÿt”¼\$q«€AÌ0@1€d\0^	í³ÛÅ–,\0]¨x(ÀIXd1Ž6¨À¬BÍR—–Ð/\nø\0ÒS´6Øò˜¾\0005”Ò¾SX[YL/xe7¸`sPð¼§YN2À’€8”ôm>ScõYOò—å9\$I*S)'Çò¢ÊŠ{*2S¯¤%9J’”ÐBST¨	R°‡åJ9¨•\$\0ÚTèbùRRžeLJp•5*zSìªQÀeU@°•*–S´ª'¹Áè¥XJ{•dú\"Ul©UOl^çJ»JBÂU¬ªpÅï¥¥^ÊÁ•æ¢V\$¬eÒ¦ecÊÃ”Å+TL¬IRò²åSJÍ\0¿+St­	Q²±%PJÚ”Á+U\$­IV2µåTÊÞ”å+Ud®iYs€Jªƒ›+ºUü¯	Rrºƒ¾[•¦4ÞVd¨—Ër¶eqJ¶\0¾ùnVì¯ÙXR¿ßÉÊò”ý+ÒX 	]2À¥k=•_,2WÔ«9^®%„=w•‹,BTl±iYR¾%jÊ‰–,\0ÎUT±i^ò™%ŒÊœ–+&Y°Ydïj%”Ë\n–S,>Xä®7®ïã¥—Ë–I)‚Yœ²	dïÔ¥—Êü–c+úYœ°gòÀÞ—Ë–‡+ZZ,³i_2£e¢Ë:–1)‚Z,²9ir˜  J´–Ÿ)Ê´©c²£` KN–*&µ)krÕ%“KWsQZ³ykÊ¥³/€,[høÂå¯Ë\\•Ù*©êì³IaÞe­Jã–ó-z[T¶w¹ÒØ¥¿=ø–ð÷:[Lµ9moK¥Ã½,—-Ò\\¶ç·ò»e½½¿–­-Ö[#ÖÙpï®¥ÍË„•üøÊYô¹nO­%ÍÊá—1-­íª¢Å²Ñ¥ÑK«–û+ú]\\¸	qNj%ÕËž–.®]»0ÅòêåÄËc”å.®]4ºÙ\\²ÜeÕË—t|±l³	xRÞ¥â?‘—U*êXD¼™vÒµ¥äË¹—}.Ò\\D¼ùq’ô_\nËÚ—/^]Ü¹9yà¥ËË¢\nù.²^<¾yuòÀåóË²—Á)ÍêÄª©|òõ¥qËç—{/Ô	+àiMçexÊ¥—ù+ÎV¤¿ùlRÿåëKÿ—{/þ^	\"ó|²ðåŽKÿ—¿/ò^TÀ¦ ’Ä¥ÿL–)0`´¾é‚\0æL˜-0`´Àó%¸L\r˜-0>`\\	s\neòÌ8@öþZÔ¿És“f	¾ž˜W0Ö`ôÃY„\rfL2˜Jua¬·@`_D>çz[1a{Ö’ÍSßD=-:øö_ãÛ†óßcÌS8hùšb±Æç¯¦¾½˜²oÍì„Åð7pf1\0szñ0öbìÃù…ÓÉ~Ìez±.R`ÄÁ7ÓóŸfLt˜¹1Ê`äÇ)‡3ßUÌt˜Ñ1ÊcTÂ9o“f7=™0Æ`\\³f½ì™0îdlÇù‘³ eþ>C˜ÜõÞd¼ÂÙSÞ¹Ì—˜ï0½ñäÉysß`L—™%2’d¤À·ó³ž—Ì¬™5/ñéìÊÉ“óÞÆL¬™G1ië´ÊÉ”ó.&TÌ{11¹êìÌ	•óßÌÀ™g1i÷„Ì	–ó¤LÀ™w32eìÂòÇ3‹ÌÔ™‡0MëdÍI˜ó*LÔ™—1ûÍI™ó8&hÌW|=1”+äÎ‰}&ÎAª™Õ3l\rØI‘‡\r »Ìê™!3Ò_ÔÃI²Ë&}Lø˜PÄütÇ	„Ó@%æM™Û0^h4ÏG¾3:%žLý8Üþ:fûÓ’lSC&qÍ™Ë4=í´Î‰…SCùÁMš52\"hÃ9Ž3;fM™â÷rhÔÏy¡ï_&Mš;1*i3Ó™ŠSL^øÌ×™ÚœJgCÕY§3<æ‡½»šs4UïŒÒéž3fš>–™Ñ1Îj,Ò	¯M¦£Í<š:øÂj<Ò©©óP¬ÍG™ÿ3¶d4ÓGÈÓ:¡M\\™àôåé¬ÕÉ¢/¿f©Lñz›1,€ ¹|N¦vLôšÎ ö® ÓZÞàœ}û.škŒÖ§¾/[¦»=Ýš¹5^g¤É‰¦œ¦tL›5|›Ôéž/RfÂÍezr.l,Ô)±ó`&‡Ì­šhõögDË²ób&ZÍ—šÇ2æl¼Ô¦sffÊM™‹4ÑéÜÎ‰™3j&±ÌÍ›Q5f¬ÓG³³:&lÍ²›3vm”Ö9œ3l¦É=¶›JîT”ÆXRŽ@°š¿ÂlPiÇ½sp¥:M1a4V„Ù(oÃNLšÚqº_\$Ói¸³B&\$MÛ›46iÝ¹¢2ù&ÇKä›¡.:ntÑ™¹ÓFæðÍØ—É7\n\\ÔÞ¹¸óIfö›ózÛ7êß	ºêfõË„pÁNPü#ÈÄÎÚP»Æ\\ˆë¡É%\$\\²‘Ì€S\0—2äfHÍÉY qŠ5(R#41š\$HœÂ€\\øÉôd³‡¹	wœ>}%t%±²™ÆÀ‡|Üüäf„'@ÒžFÊóq’UÄMq²¢qÆšc£†4ìN©Çö!Kˆ\0Ž‹ž6TŒÖNòRc.Ik_úœœ¸ÙQ¯]b2\$?¡9N5üå8¾È0£¾ Âˆgu‘ô˜Üè\">ÄD)jsòHÁacÂµŽÅ\"#B>æGqWY(#fˆgå-S=b;F6œúƒ°@rdy'Sž'¤:Œ)&itÁ%Î“9âp”QHä¨>7Nœñ8eF‚T¤ÛÄ½œJ“²qâ™ÄqE'Î&%A8¢qž‰Åsž'Ähœa®(¤ã9Æ³ž'YDÃ#ÂGŽ&4çÉÖ‘ \$È ú@û:ê(¤<(Óh¥¢tÄEdˆì\nÉóÈèGâyF£Š)9)–O \n°\"„E\$³¾sÄuVH“•§&2{œ³;f/³(cFh±'\\NxŽøƒê6\$/8©iëAIr œ^tS'E]Š™ ús¼_vS“ç}:ÜŒr{Î>„V”hé9#²¤†*ð)ÁÓ„\"Á²‹½.Gk­Sõó¥§~‚Þ18nxª0	3§!ÿÏD\"{juê„?GþbàN¥žC8†yx”sÇ§VÅÀ^gž-‹/IÖsÇ§É‘BM:þqÜ\\˜wgÀ±Ew‹“9\nyû/9Ù(>çeÃ¶e~Èzrb9ÚÑD¢ø (žš|^VPnÇbøEöBxÊw\$ð–S‘ßhN£u¾È-e,Å@\$1Îø{à@löXzhN!Ÿ¡S†¦…vETô8€‰…\$d!yŒv˜ˆK´wh\nYxC‡¯=\nã¼IçÈ\$aóCå†jíò\$U3áëO@ŸQ×ŒP€1døHRfÜ™Í7òg6ãéã•Ò¦sV°dü¡)A°¦s ÏÖ}2·¤çŒç“9³žŽÓ%?s‚’¡Lé„Ü'Í'ñ\n@áz~% Òâ'âà–¡8RZt¦ëÂ­¬kp--AÞ\$ÐSñ†ÏÊ^~uT!+ƒÈq\nÌ—\"%¨L´ÈTýb¾\0âgë)p…?Y4Lþ£“õ”¦OäQw?™glýeyé¿‚Hµ¸WîÀáS9àõõŽÖ´õkpùQÄûùþí?C´û2¦©a™‰,dµ6’Í€bq\0O½ÀˆYÚ\"^“Ä8ð\nJ…µŸ\nÍH.([]ÖàD.jY°. RÓó¨l5ÇU\\YÐwÐRQF\0™ª®dØ4\0èdÝÍhÓ\\ìöhº£o¼\rÜ*êÀCèP9 a?è¢…óIÆ	T`šæµ;`@JXP@né@Ñ.™ÑÆ”UM¦ëŸ˜š€ä0pjŒñÀšP[kÕ>†€Š½ÔmµŒ­;LÖ¡ôJ\nf¶{ÇEšVØ1]83Ú\rí¥“·Ps †5•]8\"%mŒØh=¨(WNÑ˜€TÀQ•Ó±}KÖ–…™’¶Åqô!D2«lMn­±6Âœ4×´Dz-NKêÅœ*_YõB=‚¥õO\"½ßÓµa VhA«	g‚¬\$‡jåZ\0€Ó+	nñL£ƒœ`K\n	èW/P\\¡`VJô-ÛâÐµMØ×n‚ê¹êïhZ®â¡|`È=<9abÊÂT…¦rW<—*pÛ´!²PÐR,£å¤Z¹ê´6€6GÜ§Œ05Fô8”«=WµCNˆ6E¼ètŠ†·ÃM æ”<„2©· pÐ9¥eåM\$çÝ‘¶C‰U±ÜµAEE×ým;D„ÁÏÐ5¥[Ñ¢\ntX×!Cesï@Â„¢Ø=.QW‰«Œ!ÈÑ¢7@_ #Ð  Õ(s©Á:šž±]íEA€J“PQ*\0î¡’‰jœ5ÔIU\0o¢b)ÐY\nnÉô´Lˆ°3áDÒ‰è•\n(@¤4ÚTå¦¢Å	M5Åö(‘MBÓ%}{MÓµtTAÃQ4ü+\"ƒM€è”IÅQ\\o£A¶ŠËÀ€…Jé\0€Ñ^°š˜§JêphHwPž±¡ùU	âçqÐïDd:aÞô&Ó€Oí|Î(\"À™0\n²WH+ÆÔn‚Dðà'¦÷hÔÞŒC“:1ë;Z¥«£t¡ãÈÚ2îj\0006·ÑmFmVRôlã‰€¬•ì\0ÃF€mcª0(Â7˜Ýmš5´jv	ÄŸF4[Š2Ã]ÚvÑŽQfÓ®óN©þÀïž¦÷ê›ÜÔòï&í'HšQÈ¡lU<0×z9*wA/‚u!G9_5Å\n/èì[Ÿ˜wµ«Ñ\$\n6TrAQº‡£°\nŒË­ãˆs¨¸Ï¬\nÎz‹ó2Äøâ*UKZ\r,ZŒù´}ÒÀCùª%–ªãZ”{ÛüG¤\n†‘ä¸dÁC*¥»¤¬Ñ - 64Yi‚;¤HU.ê@ëðR¤Gµ=M\0Õ4éÐ×o'H-ŸÌ-PŠ¡ƒœÆs @¥s·ÀÂ¨ˆˆþ‰Øn5©T(jPÈ¤4š\r#S*à„(P=}G\0,ÿZ\0T’ZxOÙ¤’¬ )*Ær­ÞªQå5íIT\n,¤ÔàT–²6¸ÇCfP}%–åÆåÒbŸÃI”Àtš^Ð@FóyF&ð}TšjR\\,B¦’ã6²´“©0Œ‡k\$âÆ“A¬šKÔN:9ëx€ç¸ëŽå;²ˆ÷:t¹Ñ	¦CLÎ¯]!R‰ƒJ.R«9I`‰ÓE‚'	(À\0ìÐSàr%\0­ùL\0ôšøó*H\rÖ€GQ•é1­À\n+JB€RkÌ¸ 8’5%Æ˜’˜m¥rH4ÒAi_/Ä¥ƒJX-+3°t®)c”\0ª±Â•ø@	ç¿–Ê\0¬_â–I½Cwô´N!Íÿl”¤Ê”PEˆ¯'Rì¶ŸZ†(ð*Æ÷Þ¨\0Æ\rQß]bìHÝò¥ÙMÂ	M3+‹%M\0Õ@+T!RÀó½ôÌÊDÒú¹sØ§0");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôža8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wþ\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹ž”ªÓ²Þ»\0\0;";break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$b;return$b;}function
idf_unescape($t){$Ld=substr($t,-1);return
str_replace($Ld.$Ld,$Ld,substr($t,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($Af,$Hc=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($Af)){foreach($X
as$Bd=>$W){unset($Af[$x][$Bd]);if(is_array($W)){$Af[$x][stripslashes($Bd)]=$W;$Af[]=&$Af[$x][stripslashes($Bd)];}else$Af[$x][stripslashes($Bd)]=($Hc?$W:stripslashes($W));}}}}function
bracket_escape($t,$Ma=false){static$kh=array(':'=>':1',']'=>':2','['=>':3');return
strtr($t,($Ma?array_flip($kh):$kh));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$ab,$Id="",$Ie="",$eb=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($ab?" checked":"").($Ie?' onclick="'.h($Ie).'"':'').">";return($Id!=""||$eb?"<label".($eb?" class='$eb'":"").">$J".h($Id)."</label>":$J);}function
optionlist($Ne,$lg=null,$Fh=false){$J="";foreach($Ne
as$Bd=>$W){$Oe=array($Bd=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Bd).'">';$Oe=$W;}foreach($Oe
as$x=>$X)$J.='<option'.($Fh||is_string($x)?' value="'.h($x).'"':'').(($Fh||is_string($x)?(string)$x:$X)===$lg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Ne,$Y="",$He=true){if($He)return"<select name='".h($C)."'".(is_string($He)?' onchange="'.h($He).'"':"").">".optionlist($Ne,$Y)."</select>";$J="";foreach($Ne
as$x=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ia,$Ne,$Y="",$nf=""){return($Ne?"<select$Ia><option value=''>$nf".optionlist($Ne,$Y,true)."</select>":"<input$Ia size='10' value='".h($Y)."' placeholder='$nf'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($s,$Qd,$Qh=false,$Ie=""){echo"<fieldset><legend><a href='#fieldset-$s' onclick=\"".h($Ie)."return !toggle('fieldset-$s');\">$Qd</a></legend><div id='fieldset-$s'".($Qh?"":" class='hidden'").">\n";}function
bold($Ua,$eb=""){return($Ua?" class='active $eb'":($eb?" class='$eb'":""));}function
odd($J=' class="odd"'){static$r=0;if(!$J)$r=-1;return($r++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($x,$X=null){static$Ic=true;if($Ic)echo"{";if($x!=""){echo($Ic?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$Ic=false;}else{echo"\n}\n";$Ic=true;}}function
ini_bool($rd){$X=ini_get($rd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($P){global$l;return$l->quote($P);}function
get_vals($H,$e=0){global$h;$J=array();$I=$h->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$i=null,$ah=0){global$h;if(!is_object($i))$i=$h;$J=array();$i->timeout=$ah;$I=$i->query($H);$i->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$i=null,$m="<p class='error'>"){global$h;$qb=(is_object($i)?$i:$h);$J=array();$I=$qb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($i)&&$m&&defined("PAGE_HEADER"))echo$m.error()."\n";return$J;}function
unique_array($K,$v){foreach($v
as$u){if(preg_match("~PRIMARY|UNIQUE~",$u["type"])){$J=array();foreach($u["columns"]as$x){if(!isset($K[$x]))continue
2;$J[$x]=$K[$x];}return$J;}}}function
where($Z,$o=array()){global$w;$J=array();$Sc='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$Z["where"]as$x=>$X){$x=bracket_escape($x,1);$e=(preg_match($Sc,$x)?$x:idf_escape($x));$J[]=$e.(($w=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$w=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($o[$x],q($X)));if($w=="sql"&&preg_match("~[^ -@]~",$X))$J[]="$e = ".q($X)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$x)$J[]=(preg_match($Sc,$x)?$x:idf_escape($x))." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$o=array()){parse_str($X,$Za);remove_slashes(array(&$Za));return
where($Za,$o);}function
where_link($r,$e,$Y,$Je="="){return"&where%5B$r%5D%5Bcol%5D=".urlencode($e)."&where%5B$r%5D%5Bop%5D=".urlencode(($Y!==null?$Je:"IS NULL"))."&where%5B$r%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$o,$M=array()){$J="";foreach($f
as$x=>$X){if($M&&!in_array(idf_escape($x),$M))continue;$Fa=convert_field($o[$x]);if($Fa)$J.=", $Fa AS ".idf_escape($x);}return$J;}function
cookie($C,$Y,$Sd=2592000){global$ba;$F=array($C,(preg_match("~\n~",$Y)?"":$Y),($Sd?time()+$Sd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;return
call_user_func_array('setcookie',$F);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Mh,$N,$V,$k=null){global$Ub;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Ub))."|username|".($k!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($Mh!="server"||$N!=""?urlencode($Mh)."=".urlencode($N)."&":"")."username=".urlencode($V).($k!=""?"&db=".urlencode($k):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$he=null){if($he!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$he;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$he,$Kf=true,$uc=true,$Bc=false){global$h,$m,$b;$Zg="";if($uc){$zg=microtime(true);$Bc=!$h->query($H);$Zg="; -- ".format_time($zg,microtime(true));}$xg="";if($H)$xg=$b->messageQuery($H.$Zg);if($Bc){$m=error().$xg;return
false;}if($Kf)redirect($A,$he.$xg);return
true;}function
queries($H=null){global$h;static$Ef=array();if($H===null)return
implode("\n",$Ef);$zg=microtime(true);$J=$h->query($H);$Ef[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H)."; -- ".format_time($zg,microtime(true));return$J;}function
apply_queries($H,$S,$pc='table'){foreach($S
as$Q){if(!queries("$H ".$pc($Q)))return
false;}return
true;}function
queries_redirect($A,$he,$Kf){return
query_redirect(queries(),$A,$he,$Kf,false,!$Kf);}function
format_time($zg,$jc){return
lang(1,max(0,$jc-$zg));}function
remove_from_uri($bf=""){return
substr(preg_replace("~(?<=[?&])($bf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Bb){return" ".($E==$Bb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($x,$Ib=false){$Fc=$_FILES[$x];if(!$Fc)return
null;foreach($Fc
as$x=>$X)$Fc[$x]=(array)$X;$J='';foreach($Fc["error"]as$x=>$m){if($m)return$m;$C=$Fc["name"][$x];$hh=$Fc["tmp_name"][$x];$sb=file_get_contents($Ib&&preg_match('~\\.gz$~',$C)?"compress.zlib://$hh":$hh);if($Ib){$zg=substr($sb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$zg,$Qf))$sb=iconv("utf-16","utf-8",$sb);elseif($zg=="\xEF\xBB\xBF")$sb=substr($sb,3);$J.=$sb."\n\n";}else$J.=$sb;}return$J;}function
upload_error($m){$ee=($m==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($m?lang(2).($ee?" ".lang(3,$ee):""):lang(4));}function
repeat_pattern($lf,$y){return
str_repeat("$lf{0,65535}",$y/65535)."$lf{0,".($y%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$y=80,$Fg=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$y).")($)?)u",$P,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$y).")($)?)",$P,$B);return
h($B[1]).$Fg.(isset($B[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($Af,$kd=array()){while(list($x,$X)=each($Af)){if(is_array($X)){foreach($X
as$Bd=>$W)$Af[$x."[$Bd]"]=$W;}elseif(!in_array($x,$kd))echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$Cc=false){$J=table_status($Q,$Cc);return($J?$J:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$J=array();foreach($b->foreignKeys($Q)as$p){foreach($p["source"]as$X)$J[$X][]=$p;}return$J;}function
enum_input($U,$Ia,$n,$Y,$ic=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$Zd);$J=($ic!==null?"<label><input type='$U'$Ia value='$ic'".((is_array($Y)?in_array($ic,$Y):$Y===0)?" checked":"")."><i>".lang(5)."</i></label>":"");foreach($Zd[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$ab=(is_int($Y)?$Y==$r+1:(is_array($Y)?in_array($r+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ia value='".($r+1)."'".($ab?' checked':'').'>'.h($b->editVal($X,$n)).'</label>';}return$J;}function
input($n,$Y,$q){global$h,$uh,$b,$w;$C=h(bracket_escape($n["field"]));echo"<td class='function'>";if(is_array($Y)&&!$q){$Da=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Da[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Da);$q="json";}$Tf=($w=="mssql"&&$n["auto_increment"]);if($Tf&&!$_POST["save"])$q=null;$Tc=(isset($_GET["select"])||$Tf?array("orig"=>lang(6)):array())+$b->editFunctions($n);$Ia=" name='fields[$C]'";if($n["type"]=="enum")echo
nbsp($Tc[""])."<td>".$b->editInput($_GET["edit"],$n,$Ia,$Y);else{$Ic=0;foreach($Tc
as$x=>$X){if($x===""||!$X)break;$Ic++;}$He=($Ic?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($n["field"])))."]']; if ($Ic > f.selectedIndex) f.selectedIndex = $Ic;\" onkeyup='keyupChange.call(this);'":"");$Ia.=$He;$bd=(in_array($q,$Tc)||isset($Tc[$q]));echo(count($Tc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Tc,$q===null||$bd?$q:"")."</select>":nbsp(reset($Tc))).'<td>';$td=$b->editInput($_GET["edit"],$n,$Ia,$Y);if($td!="")echo$td;elseif($n["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$Zd);foreach($Zd[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$ab=(is_int($Y)?($Y>>$r)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$r]' value='".(1<<$r)."'".($ab?' checked':'')."$He>".h($b->editVal($X,$n)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$He>";elseif(($Xg=preg_match('~text|lob~',$n["type"]))||preg_match("~\n~",$Y)){if($Xg&&$w!="sqlite")$Ia.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ia.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ia>".h($Y).'</textarea>';}elseif($q=="json")echo"<textarea$Ia cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$ge=(!preg_match('~int~',$n["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$n["length"],$B)?((preg_match("~binary~",$n["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$n["unsigned"]?1:0)):($uh[$n["type"]]?$uh[$n["type"]]+($n["unsigned"]?0:1):0));if($w=='sql'&&$h->server_info>=5.6&&preg_match('~time~',$n["type"]))$ge+=7;echo"<input".((!$bd||$q==="")&&preg_match('~(?<!o)int~',$n["type"])?" type='number'":"")." value='".h($Y)."'".($ge?" maxlength='$ge'":"").(preg_match('~char|binary~',$n["type"])&&$ge>20?" size='40'":"")."$Ia>";}}}function
process_input($n){global$b;$t=bracket_escape($n["field"]);$q=$_POST["function"][$t];$Y=$_POST["fields"][$t];if($n["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($n["auto_increment"]&&$Y=="")return
null;if($q=="orig")return($n["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($n["field"]):false);if($q=="NULL")$Y=null;if($n["type"]=="set")return
array_sum((array)$Y);if($q=="json"){$q="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads")){$Fc=get_file("fields-$t");if(!is_string($Fc))return
false;return
q($Fc);}return$b->processInput($n,$Y,$q);}function
fields_from_edit(){global$l;$J=array();foreach((array)$_POST["field_keys"]as$x=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$x];$_POST["fields"][$X]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$X){$C=bracket_escape($x,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($x==$l->primary),);}return$J;}function
search_tables(){global$b,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Oc=false;foreach(table_status('',true)as$Q=>$R){$C=$b->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$h->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Oc){echo"<ul>\n";$Oc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Oc?"</ul>":"<p class='message'>".lang(7))."\n";}function
dump_headers($id,$qe=false){global$b;$J=$b->dumpHeaders($id,$qe);$Ze=$_POST["output"];if($Ze!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($id).".$J".($Ze!="file"&&!preg_match('~[^0-9a-z]~',$Ze)?".$Ze":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($q,$e){return($q?($q=="unixepoch"?"DATETIME($e, '$q')":($q=="count distinct"?"COUNT(DISTINCT ":strtoupper("$q("))."$e)"):$e);}function
password_file($yb){$Qb=ini_get("upload_tmp_dir");if(!$Qb){if(function_exists('sys_get_temp_dir'))$Qb=sys_get_temp_dir();else{$Gc=@tempnam("","");if(!$Gc)return
false;$Qb=dirname($Gc);unlink($Gc);}}$Gc="$Qb/adminer.key";$J=@file_get_contents($Gc);if($J||!$yb)return$J;$Qc=@fopen($Gc,"w");if($Qc){$J=rand_string();fwrite($Qc,$J);fclose($Qc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$n,$Yg){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Bd=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Bd):"")."<td>".select_value($W,$_,$n,$Yg);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$n);if($_===null){if(is_mail($X))$_="mailto:$X";if($Cf=is_url($X))$_=($Cf=="http"&&$ba?$X:"$Cf://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$n);if($J!==null){if($J==="")$J="&nbsp;";elseif($Yg!=""&&is_shortable($n)&&is_utf8($J))$J=shorten_utf8($J,max(0,+$Yg));else$J=h($J);}return$b->selectVal($J,$_,$n,$X);}function
is_mail($fc){$Ga='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Tb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$lf="$Ga+(\\.$Ga+)*@($Tb?\\.)+$Tb";return
is_string($fc)&&preg_match("(^$lf(,\\s*$lf)*\$)i",$fc);}function
is_url($P){$Tb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Tb?\\.)+$Tb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$B)?strtolower($B[1]):"");}function
is_shortable($n){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$n["type"]);}function
count_rows($Q,$Z,$wd,$Wc){global$w;$H=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($wd&&($w=="sql"||count($Wc)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Wc).")$H":"SELECT COUNT(*)".($wd?" FROM (SELECT 1$H$Xc) x":$H));}function
slow_query($H){global$b,$T;$k=$b->database();$ah=$b->queryTimeout();if(support("kill")&&is_object($i=connect())&&($k==""||$i->select_db($k))){$Gd=$i->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$T,'&kill=',$Gd,'\');
}, ',1000*$ah,');
</script>
';}else$i=null;ob_flush();flush();$J=@get_key_vals($H,$i,$ah);if($i){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$Hf=rand(1,1e6);return($Hf^$_SESSION["token"]).":$Hf";}function
verify_token(){list($T,$Hf)=explode(":",$_POST["token"]);return($Hf^$_SESSION["token"])==$T;}function
lzw_decompress($Qa){$Pb=256;$Ra=8;$gb=array();$Vf=0;$Wf=0;for($r=0;$r<strlen($Qa);$r++){$Vf=($Vf<<8)+ord($Qa[$r]);$Wf+=8;if($Wf>=$Ra){$Wf-=$Ra;$gb[]=$Vf>>$Wf;$Vf&=(1<<$Wf)-1;$Pb++;if($Pb>>$Ra)$Ra++;}}$Ob=range("\0","\xFF");$J="";foreach($gb
as$r=>$fb){$ec=$Ob[$fb];if(!isset($ec))$ec=$Uh.$Uh[0];$J.=$ec;if($r)$Ob[]=$Uh.$ec[0];$Uh=$ec;}return$J;}function
on_help($lb,$sg=0){return" onmouseover='helpMouseover(this, event, ".h($lb).", $sg);' onmouseout='helpMouseout(this, event);'";}global$b,$h,$Ub,$cc,$mc,$m,$Tc,$Yc,$ba,$sd,$w,$ca,$Kd,$Ge,$mf,$Cg,$cd,$T,$mh,$uh,$Ah,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Hc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Kd=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','de'=>'Deutsch','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fr'=>'FranÃ§ais','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èªž','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','nl'=>'Nederlands','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ð ÑƒÑÑÐºÐ¸Ð¹ ÑÐ·Ñ‹Ðº','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ð¡Ñ€Ð¿ÑÐºÐ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡','no'=>'Norsk',);function
get_lang(){global$ca;return$ca;}function
lang($t,$ze=null){if(is_string($t)){$pf=array_search($t,get_translations("en"));if($pf!==false)$t=$pf;}global$ca,$mh;$lh=($mh[$t]?$mh[$t]:$t);if(is_array($lh)){$pf=($ze==1?0:($ca=='cs'||$ca=='sk'?($ze&&$ze<5?1:2):($ca=='fr'?(!$ze?0:1):($ca=='pl'?($ze%10>1&&$ze%10<5&&$ze/10%10!=1?1:2):($ca=='sl'?($ze%100==1?0:($ze%100==2?1:($ze%100==3||$ze%100==4?2:3))):($ca=='lt'?($ze%10==1&&$ze%100!=11?0:($ze%10>1&&$ze/10%10!=1?1:2)):($ca=='ru'||$ca=='sr'||$ca=='uk'?($ze%10==1&&$ze%100!=11?0:($ze%10>1&&$ze%10<5&&$ze/10%10!=1?1:2)):1)))))));$lh=$lh[$pf];}$Da=func_get_args();array_shift($Da);$Nc=str_replace("%d","%s",$lh);if($Nc!=$lh)$Da[0]=number_format($ze,0,".",lang(8));return
vsprintf($Nc,$Da);}function
switch_lang(){global$ca,$Kd;echo"<form action='' method='post'>\n<div id='lang'>",lang(9).": ".html_select("lang",$Kd,$ca,"this.form.submit();")," <input type='submit' value='".lang(10)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($Kd[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($Kd[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$ua=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Zd,PREG_SET_ORDER);foreach($Zd
as$B)$ua[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ua);foreach($ua
as$x=>$Df){if(isset($Kd[$x])){$ca=$x;break;}$x=preg_replace('~-.*~','',$x);if(!isset($ua[$x])&&isset($Kd[$x])){$ca=$x;break;}}}$mh=&$_SESSION["translations"];if($_SESSION["translations_version"]!=1342986762){$mh=array();$_SESSION["translations_version"]=1342986762;}function
get_translations($Jd){switch($Jd){case"en":$g="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%SiÀèyÎF“9¦(l£GH¬\\ç(‰†qœêa3™bG;‘B.aºFï&ótß: Tó¡”Üs4ß'Ô\nP:YîfS‚®p¤Øeæ,¡ÌD0ádFé	Ò[r)+vÜñ\n¼a9V	ÆS¡Þ´kÌ¦ónÓcjžäAE3ÍF©ÃÊ²™3”Sz\n(^{c‘“?¡ŠÞ.DÃ}tÝÐÊm˜jl{½È‹˜é¦NÇÐo;ÁõG_T&äA6ar§cI”î?Ó,²®M›â4°£h\"ŒBŒCË\n„°„\$ÌŠc+Ò:B0ê7=LK\0ã:3´1Øc@¶#»€¸jÔ82)#\r­®\0Û\nŒ @‹­¬¯èê™@h²9Œkc†(‰\0ÆÞ<M\$\0:£!\0“ -èÝ\rìÃ¾9Œ.T\0ü²Ø²NÔ×JÄhC'Åª ÂëÎÒ>Îâ‚¶þ\"ë‹<\$ª±³>—ŽÄôÑN¸7»+ :ÏÔÜ42½@Sò9-NêKã°Â6\r)†)ŠB3,7l0\\C-#,Á\$ŠÒ`¸*òPîõ:úGC˜æ3IiD3eDV8à8FÁ\\¨„âœŠIÃ%œ¤±ã8\r(ÈèËA<ÊòEX@USUÕ²µÌò\r5[\$•8Ì¨àé:‰\nŸr\\Õ¸x‘Ì„C@è:Ð^Žø¨\\Gëèä+C8^ÃcãÃ\nÃÄAxEŽKˆé†è²Ø5„AõuLC xŒ!ò~Ÿ7¬ÞÒ£OjAKÂñÌiBÄÇäw¾±/¡ÿ]Éèå¨90© \$\nc\r§'ÁB€¤H\nEU\$Ð\"P•%‰r`73sn§U¦iªHþƒ\"|§ÇIªk[®×Zò¯sÒòÆB ÞJà@(	â˜©7;¸¤š¾ˆÅyLjL¯	ÃsH+/‰*Ü9E7€Ä.RP, ²²Ø£¨úB‘ñ£=q*néÃø‘ˆÂ¦º¶\$)n®¦è£0äÞ îK(”^ubCLN+¢PÐP+¢|4M(8ÃMÞ]§¿½Öìz«”óu´KëãêNT0ßd§Õb¢\nÍ…ó'3ÍKBLó£9AÉ§¦v®ÞXuá¡ÇµÆ¼É@T¨•»ˆ\r‚o&N¤ï…DÿTùê&¦}ñ\0§.òŠJ.\nj?½ê§J#O,;™ ŒVƒ)\\\rÀZœP•àÙ¦I!<'\0ª A\nD@@(L±-<A¢_Îqu6…ž¦Ø²âCÉ˜-F3¤`žU‘ž”3–SUPl¦f†Öj€!!/¬ˆ”†ó”í#ì(áÜï¹pÛ‹V?§þ\$è«ƒißKèà<”›Jô”C9#§lRs9a<«Ò¡àe+P­ÁH	\r,­.*(4rú˜Ò^7<<xš—‚\\CªøÐÂeNWŒÈE9IŽ5×ÖžËÑË¡Éå¹èvc™¿B ‚!BC\rðQ›!äÇª¸Ý‚xK]n ÌŸ33ˆÊNBŸ9šÈ 3®oŸ|g|ñ[Å„%xìñ	ò]žáŽs’‰·6'¬å¡“æt‚é¼([)4Js’*‚ä­.EœÂ<HéŽ¤ÎÚ¶dšéCydÀº(‚¸eTÖ»×Dg‚’§ÇŒ‡¥Ì¤Õ=ÇÂ£†Éí5\nÑž	­€†]Õ\"h­Ñy @÷	óß‡hà‹µ—¡W«Ù¯€Ž&÷ÈPK£­5‰¢s)Y—•vk\0)Øg¹ÊZéPåE+7i[•Ù=I¤œá½ÛÞ#¤Lez9”ä‡ši+ÁžÇ+\"W©©Mhr5ÖRå#IÅs­uñŠjª|\n¬ý>KaWËÅj|ö[d\"üd™@Øh…ÐÄk\"4Ü«Œ´bûùŽFfIÏw¶÷mÔ;¶†R·šBž¤a}QZH‚\0P‘#(h%†.'°¦m¹®’Ö¾KÞúmÅaµspÃ^Ú}Ô²‡vñ=ß÷Ñ€o•û»lI[×(öMD,¿7eð¦[\\³°–^ÖöÂ´ìÂ0M³M˜0!ÕÀ¥1ÚŽJ\$ÈšÏÉ¹S(ð„Kxât¹20tÅd]s“ùû\rgv2¯ÞS†xwqÍû¾˜YòdHs‘¥LäÃX/&Ã‰Q’1R“|NN#£Fie´t’@Ã­h\0Skû¡ ÷·’3.WA»™™l-§g&núâÎL¡•f8¯?ÕÓ\n»ˆ»9Å®SJyÁ(y[(CÙ>Ês•}Op¶ŸyK\"»ø‘y'[Z\"öœµ™3Oé¼³‡	DÏ4Gðÿ ¹—š1£|teMDLtñ(Ö²ãSàRQ%Ì¨eÕø6hl#ÉQ.*KZÔß„üoUÇ°E%çLloŠuŽÖd£m±~´íÜ {wkÚñ°	\"It–Žƒ!öØ†‰f\"¼Èî~na9pèBaÞo9CBk|—¶øsà»›-†^	—²ž#|› ºp÷Õ–žoŒcƒ_[_xµ¾ÜøŒË^-ñÉc¬+’ÏŽêBQÊ¥v·Ê–¾Y&Þ@÷Aªåg/UŽj©¡§ÕÛ*Ó^[Â:/6Û<Ì”t“+ÍÉ@H/ënBún]Bc„Û	Z)·¾Ÿ¦·\rd›Qn¿»×Í8S±âÊUËç^x¼¦*°û\"h•£¥ÐgÙž*	ºñþºcªMPlaV0×QÉ Ž6U.Èt§\"1¤ãCÖªë‚ F ám¥txèv?ÖïO)Ù?­Ç„¿~±¬>B'oÒétCmRÅ— šÏÃO˜ëa²âjƒºM–hª°7xÿ+ð<Å‰'ÞL2’ƒ¢\\UxC‡pYµJH´8Í )A¢@HAù“ïóØ½ëö|Ñ¾ýe›öáIr­|þ¸é2ŸßòýŽÖ¾n<åïõ\0+öL£LGâvÿïè²-X†¤V“¨s…ÜÒC<¢Ú¸kÞ\0˜Œ„Œº ñ<EÐ6Â.LOò¡‚^‰¨ÑCî+àò'dð0Oëeþ\\§MÔOi#4)„fÍ§Óèª°C.,¤úÞ%,\"š+©–2Î„›`Ê£Ä\$Ín.†’¢ð¯ ØðoÜ|¸*@";break;case"ar":$g="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0T2]6QM…ŒO!bù#eØ\\É¥¤\$¸\\\nl+[\nÈdÊk4—O¡è&ÂÕ²‰…ÀQ)Ì…7lIçò„‚E\$…Ê‘¶Ím_7—Td…Ôâ¥¢ÊQÔ%Fª®ÎâPEdJ£]MÅ–iEµtØTß'í…œ9sBGeHh\\½m(AÁ¸L6#%9‰QèJXd:&§»hCªaÎ¡RÄPcÕ¹åzÀ†¸Ìnø<*©°®Ì¡g\n9††%‚‡h5ut.—³¼QS…œ\nÅÍÄ¶p{š¯l-\nˆ†;„Dð¸Ê\nã ën¹…ÅßÕgÜhðÌwk0ÄGPs<û:á«eŠ:¢4ÊìT ŽâF“¡\rpÛ0©á(H™\\¼:0‚¹	 k´.DBóÒœ@Å‰°[(PRï¡1\"Ç6hs†ý¤eC¼Ã30â	Äð{zùÇQŠêùÄ‹„ªÂå 7ñÄ€\"Ã\$»¤nY°É·„’8#g'‰RF\\§²tU£¤\nD™JË»GÑ4´íÁî£@Y-IÂtW§¼0ÿIÒZˆ°\"0ê6\r\0è0ŒC`ÊŒcÜœ2o»¶¤ä(@)Š\"d|YJ‹š”@†Ã¬µ¬-±[=,%Ä}IèÊ±VìcA‹¬ÛV	BÔ!­Ánlô£¨í4\n²ÛØ–#fXe»Z@ñJ¯\\ÁÑ‹8†Îs½uJ2“œLùGÒL™Jö:ÅeIpÄj\"pC·kÎÑk‘`Ù¶*=ªóàä:\r‘ô#_C¯‚ZÖB¦)Á\0¨7c(Ü‚>6iLMÌbÂÇ¦¬ŠÑX2ñ3\n©3w:á0Ù,îƒÝ”Ä‹R ·¬,<tê=´Ê„ž-¹¨3ˆBàC¡9Ûœñ›f3iã™ž?QCP•~çBÐÂÀ—–¢]5¡Ø‚³ê²*n&Œ#˜è2ŽA\0á²Žc¸Þ9JC(ð8\r#Ê2càÂ\r°Ì„C@è:Ð^ŽüH\\0ŒƒhÒ7mvÞ3…ø—*<lãpæ4ãp^QCä3Œ£§\0/Ñ´ÖÂHÚ8QÃn\$:xÂ4¡d:\r|¤:\rýÐÃˆ„Héµmm%ÙèëlÏÔI\nF’µjâ½c[÷ …@àÿ!¨›!·—¤¬z­l°&ª!^·®I:·P!Qk÷Æ(2ˆ£)êryZ±zep¤#†KÉ‰1…5•‚jùÐ \n<)…BDQR&^I¨±ˆ\0¦ŽÚ£<ÄÔ‘‹RN“àÅà†š\"AŠ\\Jiá-¯y›åw-m6›u®Xáq³‚A (p²Ã¨ R,L:»\0Þã{A¤3©µ:0iQÀ€;–ö‚ PŠ!¹)—^ÛÞ;Æ‹È7†Ò6Ú³‘]èj¯4½_«Xb™˜*8@N…ª<Ån:?‚Î®#Ã@Y†Ùê*Uj¼¤:ôE‰Xƒƒ´)–œ…VÒ\"IÇ5LgdÎ2eÕqB·Þqd*ò•+¢Îv\rA0¦áÐ@i%±ø1‹4á¡1d¥KÐÈP(DCJaQ`ˆV\$T¦¥IéMN*“ˆ8ü’€Sª81¶pÈ ¤GËð‘¦…î´qXKŠ(öûr£5…ÌêcÐNÙQa4E\\VÂò¸BT°9Ò2j'@ž\0U\n …@Š¨8 &Z¸l ,æ­\$Ù¡Fá¶|ë¢X›€Ÿ’)8BénVXq(Ú©ˆœëªöd —\0¶.ä¾P–ÙìžH<\0VDÔ¶›Å.QÈé°„d.¢ƒššŒIö'(¹i¬fiIø£©òsŠC³LÕÚ?™uv¯ÒÙÎ¹’áÈh‡Îq\$æ	NiÙý#Ä¾{™üO(\"8	á=ºàIéá¯…‰>Œ[W“Ð=(ÜÛ.iV¸\rÄ¥‡\0£2ÿ@‹j\0š‘ààÄöX“A¨ðAl´¾²VY÷7ÌÝìÓ§X£1­p³©S*¦ %JU:^L†hl	y…•Kå2\ne»~åÞU†Ig:½±ÀS³Iæþ!ƒ/z•4¸\\®,\np™55;†¶—=×%Bêhh.1úßÃÁ±yí­éRì¾[«ÚB/y9¼7’ï“ˆLq5­·Š`åÖA0;,&eQ]O™vÁ‘ô5%V[@©Û†i*â¢¤–ñ„ðQ»9&ªòÂtb¼—á[sµaŠ5Àg7“®Ô5²ˆ¾«¬½6ë<ÂªºÜ×Ì‚P¾†bp”\$ŽQI&™5‹\$Üž’EŽR2äNÉdã©–l–]`*#ÄÐcˆ \rÏ8 ÓTs¤j)àÄÐÈ[:Š\r§9¨µJ€­U«ƒAñpqŽ1b°å	^#™³šxgšÊ·D.œÅj?„™©ä¹\0PRX/6û#µ2ÚÚ¶¤´Ë\"S3½D!\$UÕÉ%,0ŒÌR³ÖKÎBE‡f!„WÐµ{Qý®¶.Ù9/F«UWŽÖYÄ¥o	=¡ZhÛÕ}à¡Ò‚\nNÔš|ª«95Oc²+Â³!¢¥sz|•²#ÄO¤~­¤Œw’ykKZ}[¹·¾è“›¯feFµ#£®ùÝF‹0ïå•À\$}íßKO_}A­§X·ßš¯Î~3¿6mcãçX™íß)µUé|\\t³Ù¤´AîF÷˜u_\$­mtíº4øNº)úþgüvfŠj©h!ÎÊŸ=¾3  ®†üê \"¹œíÐ+ÇBÉ|pÐ\nN¦nê×	?•¡êsQZÍQ#.¢¢’Âà~Ñ»;—\0Â(cr\n¿kí¬i	÷?kk33»]êbÖ>gaµj3;—³îu²&.¬Ú¹v£¶L¥ßo/jŽ¾¥ã>zWW7e\rQ3§9µ -Wèã¢oyU«EÆ®`ÍJÁNv8Ë]'\"þ6º´Å÷ËKêÓ{Um÷¼F6|Uò\rîoÌ÷ÿv¥ëvq˜\"s›®|o˜¸±ÆÚ[Õ¬“õ’´(ØÐòéQ[YëùyGÉ°¸òñ\róºŽ¦`öoûê¯€øÎZþ¥|ÿ¯n™‰^ûD”Bä”¡BøŽ ƒ>9Ã°û¥Ø”jgª‚ÚŒ¼+Ë'¬˜âæ+¦ÿÏ¨(F\\eÁRÿ]ÐD®BH0OPÕ…Ù+Ün,öJJÚ§ãÖ6+Âùâ6\r©l\"aæ,ë>PTû0˜^¢¿}\n*û/òC°š£Ïþ]¶«ƒPD”8¾þP@6‚µb	ð\rm\rA°h…KT7,-¤T«Ž]\0mrŒ|XÌüÎdd©H]h\"Ó&¸öÃ8—Êvü«’5ã(Ä¢¶hzÖÄÂ¤ÅÓ‹\0EÂ&æoØ4°…NpÞ¢•æ€ä\r€V`Ø\r Æ\r`@s¨¢‹€Â\r€êQç€wG|\r Ì'Š‚nÈ´QàÚ¦Ì\0ÄQç¡ ¨ÀZ\0@b@Ç`Üâ ¹n€¹Îl?T@%ªµÂ–çMr—jF|<?ivK\n\n8Mf]À›qzf+pTªÃ*02¢h(IJFÅ¤Ont\nOV!?Ê^|¢ (Â^'M€ÇiV;À˜‰àÈÒ \"( \r¦ÞQìîQj’ ¢êÞ¢\"S0d¾…fXmªIbîlO’©OôšíS\$‰d6íg%-GÐt9Ò]%@¨Q…ÎlÎÍ1’bQb\0èŒÀÒFîéP›dñ¬¬ÿj¬„\$Ï’g)ƒê!¢t×ˆOë£+d¶B ÛÏ ðjÊê‚gÒ(R²Fìtæ¤\nÀÂ`ê Úœm„Baœfdª2(¥À°î|]òLÄª–]\"j®ñ/Ý¬v%¡0„ :‰f8\\4¡¥h_¤ÒMc’h£:³äø	\0@š	 t\n`¦";break;case"bn":$g="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÚzZØ²„SåØHÝMS àè]þOâ”ÕE2þÕ\\¶J1‚Ê|úÐ¦[ÉiõL¢™_?€Pµë\n~bÂ¨‡#óªm\r/ƒÚÔt7½Bš'Ÿ¹C¶˜]¾sl¾ðæö2G©ÓÔ¶ÐæŠÌï^TÈ˜s±¢ìñ<\neU>¢‚€c¶½Uõ>Ý£³ŽëÄÖS ïL^>Ê#–Â²Í4\nÙ¾jRñ©êêÜâ’hªòÀ\r©*§½ÏÚÙÂOù~ÿ1êÃdÁ#\nå­Åt°­t.§­ÏbÞ÷¹‰³×ÆÉjØ¨Ã¥;‹¨…\nžP­’[q “Š{ SëJ¶¥*«% d+Ë/QQÒó÷!ÂNÛ\nÒ/»>í&\n|ÊP0Ç ±Íy&Ö£Lƒ¶©s^±¡éÄè°)ñ£pÒ¼*ÂÐËÅC,Ú‚Îp\$\$ØÌ\$eM ‘½'#PîkúŒŽ“æO5e\\×Ãq„¿1sLÒ\n“k8(rÛ¾××.{[P•Ív¯­ËÁ>‡PÐŠv×”lk=NJ°òŽ¿;”íG4­Ôn¼=ÍzºE·ª#-¨M«,¼ái¿¨Ë¨ŽR=‘ªˆL(…}Ów#ûd#£`ØƒÄ6©\0Æ0ÀP¦(‰k˜Ì4B@K“}µ Ë1`¯%\\ÌÏJ\"®ÒÚÖì¯zª-ý|6­‰Mj¦RŠØÚ-Ë…¢R¹m¥ä.%—Ö†o	4“u5N¦®ÝÑDHÆ˜‡ E=û_LT^®SJ\r|¤ëJ‹^³^éŒ•ÔŒ5Ð“!*4WŒµ²k¤â)îpÂª;ÍüÚ“ôkDÒnZâ¯»{\rñ_l{-Ÿ´VÎkµéq~6ªkdå3ƒ å+ *XõÞÊz·´kå8@!ŠbŒÐ3ÌÂÜˆ)«7Â•É]éÍ|ñ?;¬áM2 <}gèt+PÚØõÒ{¼íWŒÁ­Ö5Ý õ¼äeì>¿<Zo“G¢xòôû•Âø!Ô\"ÝƒPèwÒ·êFòÈ>¨Xï#À%éa-=ª¦ÍAé'Åyã¼à@Kgoi@ÆÐÂÃ e@€8ApæÃxrU¡”<\0Òƒ(dÀ€@!@f ˆ4@èÐ/áÞàÂhi\rÐhBÎÃ(n‰â†àæC|JL00‡ ÎC¤3ì=Š°D‚Hm@6ÄèxaÅÄ9‚Ê@oU¡Ð7ÆàÂØˆir\rÖ)‹«O\"™¿2ul½ÊQÏ/EvoÁ\0P	Aí«ã\n÷‘JÌÔù\$`Ar0:=5‚‰2JHeáë:§ž§!aQea·\$š€Ï‰Qok\0S2ô\$VU²¹?GRSº´Tø»½Qe!ÒžcîH«+ªq,°G¤}ÃÜ@…dè¥34X™q\rQjqÜ<cô§\nl¢òH„ð¦s’^ÅVh6F|q¦È6`É˜RÊØŒ\nà€1±ò¢Î„“*LH/hæ¹ÃjžÞË+›éìÂËçÈÕ€PY\ráÔ10Ü¬c\rðüBàÄC8 bá0`ÒÄ\0v\r0¸#I(ÅhiŒP†=ÇªZƒxm\$h;DE	S=lÎQº™ä|{@=¯5e?QVÙßH,Íý §ø[ž«ÅIóÜ¼U\"Þ›&Ô¼sô]:œÖ»9'dJmÅ5çã :ŒHÓYö•kÒ¼¿sIÉ+“U%6UÓI“³¥šöì)‘ÔÚ*'\0¹¨ØÿÎŒ’’„B¯™ç'Ÿr‰H'Å•tÖÑ3än6uzTk-Yxó5².›f·]µ¡Lö|·8ˆaÅ:ÊbÁ•ˆ82\nz„SUÝUºÚx‘\$`”.ÅW2Ò&ŠSu­¨ÂÝeéX¤ß@–U˜·ŒYÎÛ·[Œ€á·2ÃnNq\\•ÊuÓ¨d \\-ÙS­–[+ÛòãÙšÌ2·•6æ<“!‚OÁUg­	iO_“i€»æ¡–5cW¥¹£:¬¹®KÏŸÉLê#urmÖêå·n¢l+é˜åä»ï\\Åÿ›Çž¼Å1/wqîã)®VØ!žYá’\r¾xöÛ\0àV°®qÖ8¸'”1O”ŠýUyªP¶)w4{8Ž0N‘¿A‰rÚ¨RÊ¨»8;Ôrq÷[X¦A×–ÆƒÚ}´Gv}ðÐƒ°ñ9žÅU²½czkØ6WLda“7ÙôàLó{¿ï*yÍˆòQ]±‹À§µ8qP‘JÊfåÓE¦´®£±5)ÉÝƒÔ—,0ÕÙ°hFÆo¥6®ê“Àµ9RE3§¬&1Yd6ž¬UnÆºnàêIÇtÝwÙ™qT©ÕÚõ\n=˜Ù2sšöølŠž3oêÕ\r†)\0NÏÏ£ifœ[šö¶¹¬d¸í»`ÓÚtÖÜ9*½-ËVC×+ûSx@fo¬Ný×\nt¥PãD–•´­3†9ºÏæí“˜sSUep6¦¨Þ;ýêìŠTÆ8®¸ÚŽ…e…o³UÒã™c½Ü¡¹ÑÚó8½ªf‰—s«ƒleÝ-lê^‹\nNXr°ðô{oÒkDûk3Y	>4é>6æ™ü	qÝdš‹s¶)ðEÃì¦÷¸OD=D¨¹fÜ!V	xÉ©ýR2/8´±nnx¿°,ÂÆE7t¾02ÓKØ×P…uîÚ¼qLŸKÇ‚-ÓkéÍ”*õ²7&»f¦Œ…¼ÊSò™Qd	U eÌ«]êSó·ûÖÐ¢½TÒ-úß\0/±¢yŽ=wîM±À}£T>×Ó)ÍT.ts,:«¾mýïålù<yÑ-Ñª8\rEº:‡\0äi“Šñ¶:R\0àa 4þFÄ\$œW&ZM³¬‹œõ [ 3H@ÎnèŽùÄäîFRdŽlÝbÏ²ˆ@ÎÄÆnÿE:g‚2Æ¢ôÌâfÏ¦ùkä+ë–¶K¤õ\n^ì”Ø”ëP(ùÏ\\Þo€·DR.óÉÁ\0jØë[¢“«z#\r€k§L0oåKÁb¶âøÀ„ŠLÂˆ\\­BmÎºª\$¡´‚Ø´Ë~P¤¡Df#3%Ÿ	lÉÅnÆi8Y-œrì L*¨7-§Œ¼ëŠàv0pÞÊî*eã,È¯6Dà@ZÖ†öÂ£¨%x/š©æÎ¬Æ„åð?#D«ƒ®ä`Õ*¶&è´d†­é‘°Óïøù¯|çw\n˜®…I-2úŽkÐÖçíªôdùñUªämq\nîº¦´”ðOKšõð«Ñ~}‚ˆ»ÐÒùÑˆÙqz7MÐ÷1Žë:Ýï>”ðï‘œõð^À\r:ªí@è.à÷['üÞ§h¼ŽÌ!±\r.`)FÛænßbÉ1ÌzÍÒWÏW®\r±Ç ´ÛQæÛÍ¸ßîøñöÒÍÀr…zß°sPŽ½\rN½oQ¬_Kg5ò8“Ò=\0001wN!PŒ=2NÍæpqÑªq°‡%Ò5ºoapÿÆKp¼™«ð|Œš~I4\$êâ±¯œlâÜB{Âð&¦ºÅãthÿ©´š¤7(„O-üÅë;\n†Õ§oÏþ!ËÒélÜÄEl&fz¿þ |PÅ¾“§!Ò 8oœtãH}+}kÏ-f©L((	(p`ÜL–U¤@†ö?ìWdˆù06ªe„æ„\$PRTà²X|²pÜå\0W³5upW3ñ73ä®±`¯[qžxÆã5q^ãLìÔ¬Œ´	#óJõsO6âÜgnAÐçk‘Ý\$‘h=3†Ôó6­kñá53Ÿ7L=3qÃÎ…7‰-ƒ‰5“m;§Ü<çÃ^Ÿ²îÀÇÂñæì3Ð/Ô *ºC±œ7p+2è(†u ê0pr\nÔ3yS}\$p‰\$°vÓÍ+@Sµ93:÷³PAP¨rkS©A6-…Šq¾h´;‡!=†n*\$\$¿‰JHT¯6òÔ@«u<S§Í>c-DÊ”BSì>4/4hlsÁg¡(´>«ôšiô]tõAM\$Q0šñ³%çŒšJ®“t•:D#&ë]J2sJi_I\"\r8ôAE”µJÉ6+çIÊ<I•	;t[<MJˆJÔÃKñEÊ éƒéIpAñß´\$=2˜%´eK3©PT¥0´‹¢1ãk2COuO}OM×1ªÀp=7´›P™MøÏ(	?VUTË#3ATk ÏU8Ös[U3«õ2#7ETÝ•PlLÏµ]W{5ÔFy«ÿ:óŠp“pÖã4”	SëT3ƒ9Òå2ÍeCð9RB5KU•TÕa<s=[Tº)åÚÚ)8éR	Ap;0îí\\ÎD¿ókÞ#m¶Ô\rò|*û'²\"Ë#s\"m2ÌÓ£9t9­ÐØ²ÅƒÅ_1+ÑôVmC`wC6`c\n½ÕÖ—G:åâÂ8¡Tø#šÌåìó6\r^Ð’öeöÅ7^ñû\"ÉiÒ@†t@Ø`Æ\r€Ò`Ö¢¤ªb Ø¦\"ü ÚŽ@ÒÀòô. Œ¥æ\"\r êƒ\0@Hò£àª\n€Œ p’vŒ\rÀÎ.¶Jï\rîÙuöåå•\"dj¯fõ`5³f`µëlƒÞ¼–Ï\r…umE¦pI-dv%TP‘1M€áªÒsÑØ2Ò¦ 0\$FÀ›hÖçÇo£/rßD&hoÌ^i‰Z5›S Á„~´C©LU®”ë 3&V±ƒH7MdÎÐŽ2i¿dALxfic<§ð@˜¤`É×ywÈÜ„&\"ýrŠöþb‰õ?@Å†L‘¥zØŒ5ò\n••eA£	/8(’ó\0sÀÆµeQUÇ10J|…\r!ÖßÏZ'}a”ýÕŸ`tÐ\nÞ¨Úûµjˆ“g€àŠt\r ô…/ã~§'Ä\n!Óf=m˜Ê—«d?BÂ[&-Á=	â0ÅqlÖL'rQCÓp)Kîì%ò—öql(`\$ÐMWGS´Öëº@¬ Æ ê\r¬…B±¦KG,ÉRü/Gðÿp¤q©ôgFh~NZgz¢ñzéHæ)-[Æ‚ã÷¼Ç×ÃUôõ.¸µtF¦>4ô&·ÓM4ªmðÐ°óï…‚Ev2Å=Óèhu@	\0t	 š@¦\n`";break;case"ca":$g="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&&#¬°o9Læ“q„Ø\n'W\r‘¢hc0œC©°Ã1DÌ†“|øU:M’ÃÑ„Sº`§ñÔX :âqgLnbÚ §Ç ¦SÁÐÊnŒ›õR­I¬š¦šCM~Ã1*N-tØ'Éd¦›†Är¡‚ˆ† ‚èh´cˆqý?\$…lá‚‹SÆ8ŽeÂ™N–œq3_9ãöºl1N^v›Ú8¦Ý\0çÂ´‚ˆz¯†7,p„ÿ#ªzp£=\"HÜ4ŒcJh¿ Ê2a–l|\$4Â€9'ÃsN:BÈàÇµJ+¨ô‰¨»ú7êÆ:Œc¢ÇE,V¼E‰£à€Æƒ|mAé¢ø¿8£ªNŽ(I\"°i\"2òÓ!,¡)4ÏKÝD‹h#\$RëÒ Œî@Î0Á°£ô—¯\0Rh8¸Cb;\réHØ6\rã'ŽJ4½m<ý	†Z›PR×J\n2RÓ4 PƒÃ¬Á;¯c\n6ŽŽkÀÝ=Ï®@@)Š\"b&7nD’:#ÌË\n±3ÐÞãŒ TÇñÄ 1@ëAQ¨ÓÁá:‡8¬0†ä&‰N9Ù2h¨­òi^ õôäŠKàŽ-pJ*´IÂ(ð‹Ru–2Ù¬ü†Ç[,`Xã­’ÇLÏ[ô”¡ŒmT=±Â Þ5´á\0†)ŠB3œ7È2Á93íž!\$Ê8Ì´\r«ë†˜ˆ˜ÚC8ää`‰‹¦”Ù{„®ÚtT ­ûx§ èÃÔ&)œ#ŸC+²º8\r#“˜ËŽ‹F3‡Á˜à[3ËûôäOÐjÜ‚­˜‰A‰µ¶üÓ\$Ãƒü9ŽëD ÒiÆ*&ƒC3¡Ð:ƒ€t…ã¾ü#é´<˜-8^Óðí+NÔÁxELŽC;Åº‹èØÂ7\ra|Š2–L>ã|Ö&¯¡(i©¨Ã„9ÕfmËÃùrò®´ÍE*â®®zïÙ´*iÅçè( \$\n0ßt9‘8@*!K@Ú¢Ð]6˜Ša>³Î©dŽ­8ÕtP'¢ž¼\"­hAU<òFš*:}møBx¦* Ð ÝÕ#	¤ËËüÂÊ±aE½åÂØúUZAyì°Ä‡eªn%d%¥&‘fk	ˆY\réOƒ(ÈùJ%©QªRGð&*<W.”	êèUh3#\n„Cv%äÅ­”òšë&íYê—gî}ÃiQ‚¯œ¼ÐCÔ%•J\"T¢¯aújë±ª½ÈáôP9'˜õÀø’žP‘AXá©£D’Ñâ \nÄ½	Ár¢ a\r¡‰,gíÉOxo¨Ÿ¦NÁc\r±âBŸ²*KYm‚À(*úrRÜT4ÁÇ‡X’OK\0xOú°´×²ÒZ¤šD¾MÉ‰qw%ÕÝ—¥ò@NC.2¤´¤<zdSf’)¡Û„ðœ¨P*T÷1Â E	fŸ5|„l¡µ/ÄQÛ0r eñ«SrnÏIæ\$©œœ'°à˜£Yn-L¬”`Í&•¬ŽCçd Ïw%\0Š9ã^!õƒá8_´#-pÂXdìŸ(T@+FY)%’!û›SpÇ1Š0xEùa¤ŽAT5 4‡¤#Åþ@T5W&:~‰CC•%GE/)8Gçš’ŸÔÝg&Š~E\rÉÜ0Œ1N†Š°IKšà¦¹\"_d2Q™’ØrB,:\$g¤åÅ¥Ö»LÁ÷;!•–‚NýæÁª>ëôÇ%`A-ç*UJá}ÈcP_Ni¤Š†d—rÑ#Ò2õÚ¾ÐÛI tÀ\$ý×úèWl\$'BÃÉ«Hì]{!éßXúf	Ó/R*“ò³`ƒ„&	>ÎYkK­š°Ì®Ï*»'] sK6bÜ¼¦Ub-òK·IDsVqW)DÈ†Kœªª¾ºQÑ™3zQˆiÄàª?z{ÏˆrKæÀ“zJH<9½ €;†PÅr¬É³5åbõdÒ«y{†Êð“,â_\r¯R)—Ð­“¢›IÉ=mG¤\$±†,%‰R…%¤ÐÂN{\rè‚\"“H‡Ò-IÄÇ½biQ“‰Œ9‘ö)ÜœJÃï‰\$U˜©õGÚ©ïŽƒI»C§¸†–ñŠ¦ÄÔÉâpi‹ÙsÉ‘¸2²B†c™)D9ÈD„ÓwþK¾\$'À7z_+qÁ/Ë×À„PJäö¢ß“ÜR¨ÄDÅÄÖÈ\$wžÔÏo§¡ß,a¹¡Ð	Ç´ÛÔôáV/.W 	.“ÒÓzk“ý2ÔSTlOOÄlùið…)¤-†s³°Oª\$†£f|'ŒÊK¨d'ÏRâlã³ü`^Jþ(ëØ åáR¬(ø7Nì%´‰ôFÐ›xìý‹í5%/R,F+R³\"îÕ‹2c=çX–‹eZ÷Ú%ÝfcµºIöëÔûkBîõ¨Ë‹LíÆê¦!ìåW‹m¡®öŽ\\Xìû¶ìžûß:šoóÀJ…¢\\3”‚í›\"Øs¦¿ÜåÞK×/žš7ÏÈæqÚyÈ7bìØ4æKS¹|Õ‚c¾›3n_‚ÐZ˜ItAVËGîÏ'©G'Æš™ÐeëŽ³Z´Ãž´`É»É!&-”†Âå³E±ósÍWaåjnžmI—\\·%é*È–Ò.¦'MÔ*m\0‰†é[‘m¾HŽÉ&òÜÙÞÆ]å´û¿~‹kµQn3D±JÆ¬VKºp}ê|_Ý¸ÓÈÓ-éå(5g3ÄŸÅÈd“S©¡xW‡êÂ×ëã˜ë÷˜\$s¨ìn÷¿¸(ÞvG’pã±ä¹Wµö\$Åa,NH“·÷´špCe`Õ_ƒ‹¿ì&¯4³£?Ç”	+VS‘£‹n\$Ü¼k¾pãA¨ëžã†!¾/?ãñº¡}ïÁøš×¼ñÜ“÷~àƒ¾Wqüß¿®zï¸ÙE7C\$ü\0/pl/†GŽèÃ\$ÿ'ï„´ûoÝÊŒ¼J€¶m°ñÐ(¼+Æ-°+«g%‹0/Â=N\n…’Ò¬,ßH”ñ#‚doÖÞÝ¢Óæt­Pv@?ÀÐêºáã¼—Ä@Äèa\rŒ9„fUŠìú\"˜5 Ä§ï	Æ•\n ú(Òµ-l®¦×ìF-Å\$¿ê¬ÏnêÆjìÆ§c\n¬\\~ðÓDŽÇ¦ÂÒ\nYÀ†<`ØjrAˆDYÈÔj \$ÐÒ@ZObÌ”&£\$U€Ä#¢Ø™\0¨ÀZ\nÞ`#Ì­ä†%É\rN\$´Ž\rãœ\\eÓÎâeö&'8\"â2Sd\"K†~\$®H]ï,Àò”bP˜,Ëäœ1ÆLh©bü©ÃêËè-ofHL% (RžKf\nüOâJ9”&HA,Ì	‘²Ï…DÉãi«PÂö°™-L”ÀàôvwÄ†(mÖçâ†2ŠšíÊ1\rzõGŽAÑÚÊi.ãDõè˜S27¨ ¬Š#±a'Ž1\"lGÿ!Ënð9 †M„LAêñÞ¤m\rnQ‰®€ˆµ’F×)®ÕáZ¥ID Ì.„î\r\"V±èØ¶)¶Ò ÆE\$-£61¨Ö%íé	Â”å://@¥ñèôþc%úÀ\rÄÛÒ™qì?L.i\n¬¯Îý\$9 :#ò/6±åV4JD\0	\0t	 š@¦\n`";break;case"cs":$g="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt®\"=&ŠQÁŠ¯œØ¦ ¦*öEjTˆ†ÔØk<ÊÄ\0¢Q„ôy5‚ŠÇ“è\n(¨³SlÞLÅ_MGHå:ÅL=(†ã¾€kT*uS‚²i­×AE\\¤ìaÊf¶Äèy8ALDdÔæl0‚ˆ›®4Â b#L0æ*`Êtb&ÏF3((„ižœ¦ŠÐQNjÅR‚ˆæSy·žr4õJfSÔxÛº)žhÛSotÊr µzÝ~Ä\$­øÞá6¢ÀêŠ°Ò4\r‰æ4¨î¨¨ü0jâ³\"ðbDb”)âÖÁŽ›`\"‹˜-\rì*ý!£¢–5Žƒª–Ä\rãÐÚèÑb%£\$iGbæº®ãªÏ\$Lr2È\rnª€ p‚2ÂÉ!,©+2cÌ³-Êã¢ÎÁ7#£pÖêBÎ9£8Ã60qäJ\rc Ê¢(C³ì‹#\$¤9À1ˆà7: P˜˜JB#j»¸ì ñ1ól×K8Æ4\"a©.K¢ì¼;¢ˆ˜›¢É¬š=M£¨è	,äàó\rÌ8ÞÊÕIZÃ®Ã{ZÃŠ¬nMÇ)\$K#ÐÓØv*M¾Ž:'0Rh#k‚)ÛÔIŒP8€\$%íDX‹X’6¢C“\"kiÚ¨ºI!Ôr5pÙ.¨çn¸#´ÊØCd]qŒÑC°è€àà‰¡z¹\rãZxb˜¤#Á\0Ÿ=C‰Û(ÉHÚ»CdÈ@ö³ÃªWáPä<› 1K£#C³T”# ×—>Ãœ7É»f¬aN9¦²©†^¤‰Âu*œ¡è¸™8eQ¸æGBhÌYZÆåƒ¶‡bL1ì%=9é¦tŠ5B†Ú¢¤bíÓ\0Ñ\0¸	ûqLÃ®:8é\0Ê3¡Ð:ƒ€t…ã¿4P#k°û…ÉHÎŒc˜^¬²ƒv°„Uä3¹üˆ¾18PD]xxËZF,˜Êã}¥9èš˜¨kË ò›âÂ4ù”)ÚV¶­úK=CŽù3™¡ùœI¾´;j2¯ÆÌ¢C%Û¹âTØ@(	€Aëû%j-ï\n€R•ˆCÈØ×ÓÙŠ9,]mòbôNÙŽ'\$í‰èÔIÑ5c¡i6\"8ÍZcg4!Ì• ‘2MJ'åÚà Â˜T[åÎ	«FdÈÖ9W%®\n’28§·)†l3ÎŒƒ	É*	8#\\òÍ‚„<5LII9V\r¥œÈò8G‰\"‚´7†6š‚£ò8äÁy76úFƒÑP‡àû¶´W×1=…k\"4’³†Ð:UÏ,‰”bºqyLˆ©c.À²×¢¾^ÄtÏhæ¿Qö=¡„Æ³S¨Ó‰<¨à±ÒæŸ‚±÷0lA¸\0ß{ñ~hÕú¿xTB\nf(u¢† ÂQ%,°X&)s’ ìHŽØ\n\nŠˆ»› Ÿ\$àcñø0¬UÆƒqžJKp4-ºã„½.+þj­ÂôËs=i,ñŸH †CÓM\rh4VÀ2ÊJLñ=—â†`ÁàÒÊÖj‰žÄ5mN™èZÂrgH	ð¦Ê¿YÐp\$ó\"äŒ\rÁÂQé4Á Än‚³OShÕ¦Ã‰¢mÀPK<¤ð:2™bEÑ*ß\rÖ“ ÒI‰\$X%)Ré¢«žý+R¬|2ÈDh¦Ä¢LŒ¾ÊÀR±OAàÝ,€±aØ©fè-C€PC„f¥)íJCèS°äÌ#ÐÝ€r©¨*”¢è}Zk1¯A¬L‰ª°¼‘‚iål8\0 ŒÉ¢Ñˆ1GP‚Ö @qÃ2iRæ¬2&ø²ãºÒ+RE\"Àê\rA:¡4CŽÎƒ\"·/É->H>ÏSÚ_´Å¼¼Z©ÈäÊºUm”13wÿBdU¬­z‹¿úŸ \r\nTŸÒL6‚à•Q~¶–ØŸ³»NÏ­Üz\r.ß£ˆ‘p‹î/7Ù\\¦kmDÚ¹¤J×Ý{'ÊÄ#V–ážâÏ82»¥üÍ8c70 ’Sk÷%ô«Áx­Åå¸Ö•_Ç—wí³ËÀ7=Ÿà4©Ej«,÷.ð‘›ÇnYî\r°I T”bG×,	)E„ìA/¯Á6Äe+	†ç¼Ô `o%aj5sò‘Š¦\$”Äxz{‡lkÆçt8RŒ‹1Y)Dç.O£¤§¬íàDè¤,¨ e›0†è\$…^z©ƒ99y)\$ò‘b¹C¨Ñ%‹ä›tŽ8sŸ³oæÅ}›Ž=½8òÝ¡YÐ’'¦uX9µ&•àOói<Î¡[6¥\"!Ùo›2¦£Ô!‹’®#Ká\"’°«£L>ŸÎè°ã‘ Ö@ŽN˜gZX¹ÖW:ËzIP†¯PX}¨ä-+%¬)ÏÖ	0Ò&oÏ@‚>¢éšŽ3®ÀTyåÿ{ª±6MBÙŽYI]h<igZqR7mØ”HRF¡è”( 	Û±¢¶éú±&ë\r‰\$:>nªQYyvöê^™Jè€pH¬ãŠŠ*8 4T©\0S»¨B÷CìXÿ²#´†â›\rPÔ­4ã<NQì=ª½tW#Ž„saìþD™6´‹_rî°¤F¸¶Ç½EO›^w\rÌIæ2æ³uosî]Ð‚Ñ'LMXH¡Ã×JAºÞ?éðŽÅÁewfJ\\nšz-êYÓªÝ>®±.·Z½²Ríõû´öwcêœß³È×vMîä®sÎ’m¬'hº[ÂfHùX»ýdðV÷º£ßŒ×Šð|žEÌgUƒxjÃšÚ/nÏ7AÔiY¦“v‹xô\rD©!‰›pà×ˆòTó¤f_‹×<Cx=aôpe§5HãÎÇ!àaº¥ëjê_ŸbI†-/J•¥^|}c&µ–­yéæ¨v	ÁUu`VÄGè*=?'io«rè:Ó·ƒç>ñ#ß'dù@n%r%kê€lkÑoœT2x^0±‹(Î ßÌêÿ\$ŽLþ*åêœû€@¯ò#,<þ‰Éc’‹Dö¤&ˆü –\"¡|±¡zSdh{ã6™&šê*6?¬6éÂÿüÚ:°nÁî[\0f‹°jî~þ,êûd‚\$‹MM]\n j0h°¤„YdÖ‘þ©-¤Œ àì0ÏX.J\"=`Ö(8åšðŒë¼ôPè_Ây\rÂåÍXP‚#p»\r° æ,OpÎYnýOûo˜CpýðÔüë~HJ#	…î¢\$&­ãïÐbþJÍÃJñÍjÑïò‰\\Æp­Ñ2?Q.JÎ®x9p\0ÿL<5ƒ\"?¢ƒ\0X<³bðq/ƒ\\³'ÿp¢{q\$é Ð\"¦ä5é:íÈ€FˆJN’„®¢0çúàëábì	ˆ81žyq¢h‰’ºæÊ’ë·â5ei¢ëP¦“ö¤\"2š0X´¥>bÃê\n±¤JQžØ€ìO«€½Ž¸¸±°qñNÓŽòí‹R5ÎìíQú½ê²EÀØiÖ(eÐdlx\"O(†¼Fî|e6:†Gàè4ltù‚l\\/|gChkBžh\n ¨ÀZøêÈÈ%/ž˜ ±ý.]’pä1¼ícß çü#Rn]ÎBîî·'’aÂ&\"¢.ÂÆÈkDÌûò«‚0@ô.k:GÂÌä¤	b8Ùâä6¥^pMìVì1ã\"wÍà¶rÂJ2F“ÌB¢‚\$7äz˜,L‹%ÌÖC«/¥Ê×'êŽ`Sè˜ö²ôOCÙIŠºLpâÀ,K¬à\n„ßr\0ã æM%\\S/ ebˆj—‰3Ó/4/×2ª‚Ø30ìÍ\$‚`ÏÀõ(S-5ÍlGoÆ£\0òNÄF†-¶¨BE†M¾\$e”\"„(Nó”(oöà€ðL`¬'F’ôÂŒ@cšµ“¨,ÆÈã d[B…6°X\"<ºsÌ`€´3d\\'HÌ\\d Íç2E’,J¼~ó6¦åŒ#@Ô;Ææeú¥³ö¦O4sK>0Ùãê`Ü0E¾£“\\";break;case"de":$g="S4›Œ‚”@s4˜ÍS€~\n‹†fh8(o…&C)¸@v7Çˆ†¡”Ò 3MÃ9”ç0ËMÂàQ4Âx4›L&Á24u1ID9)¤Îra­Žg81¤æt	Nd)¥M=œSÍ0Êºh:M\r†X`(žr£@g`¢\\˜Ý*LFSeŽf\nŠg‘†e£§S¡èên3àM'Jº: ŽCjØ³ÉÃR\\ÍØCÔv«\$«™k'JÙÊ¡/4Hf˜,Þ-Ž :ZS+Œ2½Åêmò\"Ô˜é¹“_ÍÆ³.3pB€°Ô‡ Q;šz;Ã\r`¢9”ÞmæÚ0Êt”Ü\n«ŒF\\óO2›oPÃµ—Yœ²”4³¹¿Lô4SØí‰ƒxÎ€OÓøÿ4ì²¾†<ïH@0Ž£˜îé78¦:C¨Ö:¨kØÎ¨ÍÀ¬­Žá¤B\0Râ¹®¨4VÈ¼î°ê†(pæ’@Q†BEƒ“Î bò’2 A#\$£œ\0ó\"d¤ PŒÃÃãJBÜ*8Ê3¤’Òß\r®P+cŒ³C\$Æ.O„J02øäŽ°ÌD\\ÑƒdV–B³*Êë¨@:.K1½‹Ð¢&¢Œn947…¢K—;¼s¤É”ž“TpÛÅ¢šþEE\$ƒŒ±¸æ‚Uc\rJõ¹mCã[\nC*’BHÚ8A+p\"#ÿ.’éE!„cÀ5Ã·U!iÐ)7d9@ŒO\0ØŽ<â¦)Á\0¨7¹ˆó3˜eå¼£Ò[¡ŠØ@#?ÃhêM°\n{!V*„â…!7jh Ü+ Éwàc0Þ–Nêúh€0·{6Þ*[0Ë#³hƒ­Ø»<Œã˜É\nG’ZŸ¥#pXÌÞè4!‚ÂcuÅr&‚«xÞih@ çXpËLØä4’Úî›>hàýÂÏòÑLî2^¡àÂ\r¸Ì„K\0è8Ax^;ír66 (`\\ÿáz;»2…á0ŽIhé²ã4å„Aõ„8,tèèã|¨Öo\0èÔ c Þ'N`@Å„¶–ö#«\nØÇ(äì±hf4 *zv66>âÈG:J9)÷‹(\n@ õ]gw×„B¤óê|¨9\rfxô_IÒp'‰ô(  Ú ôÝ§Ž£!¯,T^.}â´9Éìçr˜Ð¤¡k¸ 'Šb£ ’kì0@QÃyK^ªõ‡‡¥ŒGˆ)_A¤¢˜pNõp05\$\"¾—  \nåqøpCBY!6A¦T‚Èo F.çÈÚfœ‚(òPTS\"ká*r@ÉÊÊ*€3#¾É”3ç™kÞÐ\r g‰duk÷JJR¦=15\n!d0]Žª± Ñm ˜ŒgJ[´>\0(+8\0Ò¢MÂ\$ˆV6-ÄåÓ”fmÀ¨<†ñN3®1Q@˜ƒâÑ˜0lqä©\0 †ÄÈÓM<è½gÇè¯‰(dAOE„Þ ‘;)Ð½+YJ¶Zù^Wïþ(/Gl[ÑÉæ&NCPŸ…ã\r…²HBcÎÂp \n¡@\"¨K4Á&YŽ^ššÞ#¡¸0ž«5H1Vgè¾¹e¢‹Œ¨\n	‰üÀðá\$‘3tYÇdÓbRSË¢„!µÇ8,@L0f^*ˆ'àÐpLÔ×!Q9O,y:ÍÏ:'¡Ý,äc4	ÚÀSKæ4,cB­Uà(*»Âø»ÍÉ[—hþËCã-ˆË)„ð4O€ë>…â¢\n… 3’Ó©LÊ56lº˜*\"F¤Þˆfw`€ò¹6²V)Xî2†\"¼“—ã£8áB3†VÏ;ªT5<¦*XÂ¤ÒYƒ5ÇQñ›ÇÊGŽSQàµ†DRb`QéGf\$:ätrà­Í\n.’Ú`ØC£3®(é“ÂÃ31À&¶—Úø…kòñ°\n»#ªðgl2±*W‚	æNˆ›\$Aéå¤‘,E‰¥â¾„ì€e¯æšÅ¤ªÕj™[Vd1‰1C“?ëí²²VÑK;foM'ˆ5&¬,‡sy \$W%†\"Zj(‰Í&‹‚BËÃL‰(àÉÈKËn9ç0Dž²–4DžŒÒF¨…}’«ÜÎVáç	”ÿ)Y8ŸK%Í(Æ#EK\\ÃÓÿ.…\$ÔE«apR¨¸•ÉŠZŒ5‘¦.šýáŠ_>ÍÄ)…oDú‚\0ÜæËàidSÄ—(w6Cƒ+(N\\§7÷Xº/é\nh[ô!AÆGÍÀ7Z†ƒ\"OEïAc@ÃqÒ!GÀayóˆ*Í`’N‡-´§‰¤”À„·	:lÄ´á%.®š~ž>º²é€Éˆ<9<CÜPK€4’JÄãå73Úb7¶l£\0bÓ\nƒs¶‹QL[™q‘tÔLÑÓl(„Òy3WÐS5æ´d=±]`è˜€óñš=™[ê…£š–ôSTÁ¯é¸Md±Š‘•l+°@Ñ	ÁIø¥+ýq•ž½Uš½gºm”×ô‚AtÁ—¡Öc/'£ÒsvÞØ<5dÊ•oV¹Ù«g€MŸÛPÔ&mÝ¾i¬¦º\rÁÎËmË·9w¤Á¶”ºT]	î_tÛï~Ë‰u­v”³–²ß½œÓ³qÍÙ­¶Ž‡:>bžOw\nÌ-R,ZÇ%ÉL#Ä€àrÆƒî™æ†U’gÇÐ¯ ¤6ñÒéÅ¸‘=ƒÚP<ƒËŸxÒù ÍŠ¥aƒhcÐ— cÄxÑsþ‹Â©?ä%Ò—EŒ>H½Ýšw‡©ê&E#IJŠu\$YìÝff½ŽÁg`kJ0U¢Søt“Î›»~ñ´{,›b½ûöÝcàªÞ5ÂUgÁ÷\rTAÿ“„pª¬`'í8{Rã\\6 C/‰æŒÁ¼ÎÕ~óÞÉ¥Tô•Zúx\roèý-ôðÜ\r,I,\n‹}W±!¾.¯d®rä—½çÖS~Y6\0R^!Œ5¦ç;ió(ßl<±¾S¿M<w=a³¾ßÔÁ>ºâ}¯¹õ}æ¹üßŠp­±KaåžÏù~ïy¥þô•’tÒvX§\njGÈÌÏøGèEÐ\n÷mlÇ\0§L¬Ãêb7Š1`àö¯îâœN£Z3¢ÿÇL>êÆì_8ÿ.Ü\"Ãö!i4\nCÏT'ê\nÂMCš7”ø‚–ÁBž\rààœëj ppë®sPztÀ–\r†œ\"€Þk®š£ŽhCÂ#L\r#˜'î³kLd8\r€V\rghù„¢7êÂÈ©âefÑdš–hp ÅüyÂæsâ<\n ¨ÀZc„ (¥	MäÁ>¹ðªÖêëíê×í‚1ë—kˆó€î|ÞÌéÜ¾Ë®&D	°öÅ*W©\"ÐCÎ÷H1èƒ*ŠÖƒ8\n¬ÑŠB\\Å°Ô%Æ. ,g~<h`_\$ô@¨b\r£ü›'ø;‚]	Â%ª1\$#Â Nò,h8?¤Ú1àPCƒQ‚J,ÂÎ.FZ\"\rã5î°1íâ<\rpx6‘¼ÿQONÔ§’ˆŒ¬¡¬nVlHÞÂÈ#Ðx4†àô±ÎZl€î\$PIÀ¦L¢LáãÏ4:ƒÒ(ì«®y!È0\nL4ªÂb¢Àíê‚ü£~,ÉÎ')Hh‚v=éHª…âÚåzjcÄ¹«ÿŠ°y1¤\rÑ¨­>SH~©Mä‰¨\$5ÒDÑ´¥ªš7Bk.ŠúOÙfÎpãr¾ƒØ%±ˆ#£)B,	\0t	 š@¦\n`";break;case"es":$g="E9jÌÊg:œãðP”\\33AADãx€Ês\rç3IˆØeM±£‘ÐÂrIÌfƒIØÞ.&Ó\rc6ÀÏ(©’A*–K¢Ñ)Ì…0 œ¥rØ©º*eÀL³q¤Üga®©À£yÈÒg«M‘:}Dèe7\$Ñã	Î` L†“|ÐU9ÉÁE\nè€Ìa—J°aÔÜaO„ËlXñg7G\ræè¸‚‹H¥Pb§œE@ÓR˜\r1¨ÄøÍV4™\"²H±³\ns:Éî‘:É´Ë\n9‚ˆÆY^ ò 4WL ¢†}‡¬5ãx(¤e2ˆæ[©”èra«xdÌü›rM7/¸£¶AŠ2|[’žÜí©®Ýö.i'×óM¸d/6'Îõ#`P˜7¬s¤ØŽOJP1¾ã“òX¸b³>ØƒHô“„`ÜÈ>\0SÀ€ÁÉB.ëŽ£è„¸oæÓŒpÃÞ€Å#|V4Ž#ªAŽQ,O\"q²„ç¬›\r1bôŒ\0Ä<¬àL‘%Iˆ¼<¿“tÃk£(Üˆ#8äƒŒ2Ë')>Ãrç,˜eœÕLÉá‰ðJÐ½'Ã˜Æ´.kBÏ\$CHé2kO\$±K;æˆ#Ñ5Jãc\\µ£è,[>É¤ÌŠŠbˆ˜¸Ã¾ÛCh¨Â:¼IÉB:\r0`6Ê‘ )’œg¥ãô@üe\"Õ0Â/Œ«°‡/×Ã€» ;ò?µÃÖ½«Ïz>°@\"JF®¤Ò°Š<\$“ý†2Ãƒ†òÖïýŸ_ÆË´¿ ºðØëÐ8ßR&#xÖ´¦)ÉÜ; p«T´l6ÌC;0ÀØ±5Ëü×ÊèÚ:±Žb`)¬MK:½c\n`\"£ñÃ@Â1\r0ªLô£b0ƒ2RÞ6‹3JÒ¨Lô…ˆÊú¿°7ô¼‹ÍÃ¬2ÆÏ:@7GÉzâãÕ4Ä´ªØCdPòÚ³¥‚Ú9Žêì“žgÎ†1D¾3¡Ð:ƒ€t…ã¾ô8Ãj¬Û…ÊèÎ­#´f¡xDµ\$ã;­¸‹ë`Ü5„Aõ¬8#õ\0èã|Ë#\r°èàÉ/@š^éèŒ¶ô´ô˜\"Ž\0Âßª†j‰ªÈCÿ1lokÄKL¨ \$\n(ßn¸ÌhP¢…*‚.cš4ª£Ê›ˆ0Ãx÷N\$VZAÚèÀáÖÏÏ‚0¨Në›T·âQ¢/µ42ëØž)Š˜ŠLÿ&ˆãŒERóØ'Ìç†@ê‘i­q„Ð›UD_›½1-¥×¼†L™§!9E–—êWš{ÌóŒJRQ_\nd&æZHyˆÁQâÀ\"BµÉ+ª/Ä(6SÜàJÍ\\ÌA¬°<L±•YÌ@2¡VüaÙƒ7#ê)-!ˆ’ïJÏ	%]/˜F XJJˆOé\0Ä`ï\nNáÍ\0…cdÊÈù¹ ¼æ…cnGÓ N‚†\0*M*7pæEœ¦§Úññ\\ª*ÈöQN o1t˜ÇÚlS,çD\"Äã–sƒ(f‹ªÐ,•Òpå2Á1­Ÿ`YNêø]gtÜ\0†Ó«;„ÊIt\$ä*	á8P T *a‚\0ˆB`E™E6†\$¾ï%ü9RjÍs	9tD(˜š3š€Êº~§D'‡®”£s‹¤e/“æÁßù¹R©èú\0¤ººËÑài¤ “•ãÊ”è)<¡¨æÉÔúaÒ²Fä™É\"&ÑÃ‹i)\$DŒJ\nµ7)Ä¯–€É	VHjîÏæŽÐÀc—ø®9zLJðgqÁÉ.RõÃNiÜ¥\rÒL>0äëØe”«ql¦8×\rÓ@@7¾”úžEiª„Ü„Erq!(/ Ù„PäB‘iCFÁwœ4Ÿ,ÒNI5ÁvÏ£'[Øe\rFñR<–ƒ[È<´TA˜ÞG@\\S-x3µì1×Ö€e«HD`0ØDM>e{²7è1KHÆÄƒˆµŒ¯¡È˜\$ò\rRTë\r ¡Ä×WªøËÌB¬ö™§¢§\\¡õ¨K&5cZÛElÅ²Kö]ù“\0‹oËÓ—©´Ì«”ISÁwŠÀ—HæÊˆó-OÏý‘‘sAƒ‘ï5IX¤”²…wÏqð%Ý’È›kÐÅå3Eì“«êÔ[Iê7¬çÅ¥WŒc ‰·­	H\$Òº@Tn·kh¹­’ÔŒ\n@°F¶‡ÝÉ@»S§¥Šõá{QWõà°Ôº€%h@Ò™SM:zØ^ãˆÃ¦¡Â,’FgÜcÕ& ¤IÐP ³gÜ« ‚-ƒ`Íc‡¼«ãô¯±	·ÁÇ†rPéð•¨©ŒÂ“àôš-†•›ÉËÅ±¬L»5&³N‚K‰Užã8	*©Š­‡7’uQ;ÍÌÜÍ.ó8gyƒ‚K]JTmT™UY˜_Y¡œÎðì¦mEèÈ >t¨0SšüA\\±‘óÉè ×b¼K#	|§MÜÅ¦³TYb\nzEêÇªE¹oÅm_WåI4Ëe‡ë›c™š–¾Ì\nóYµ ™€Õ‰cæäXû†,´`v\"»ì»|6u‘ÚRËGBÜq)›¿Nî&á]i¸\\>ã1bjyn`\$`wz³S„Ã6Ci‡ €®ÒRÒoÓª¨Å„ù“›ÀÄÝ9ŸU…ªs4	 Žë>0¥§FÑÂ,†æ»2ƒc|˜Ò|k¸\r*ÈP*ºa–ÞmËE»‘œ<ÇqI¸7ŽÞG,Á~BVèò½¼”ùÉ*3‚NîëÖZž‰W=Ñ:eÕ²Ú°‚^I¥-[tÛ—.l¤N:½êý+s•h*ÕX¬€”vB§3‘ÍÅYëž™ük¬ã˜:Èb4´‹Â^‚„j:]Pë¸ Ô»ÍUïmú¬l4‡|\rVð÷zaÞ¼†2XÏþ=°÷¢çâÏcC›É3¯5å|—\r=ˆÑ§xÂg“¼]qw%WÎSjº¦¼k§¶ÆúýÒäÇ®µ=D5ß)½¯»óÿ{º)¢ýÑ^›Æµ/~ª×Ãú4*Toß°·Õ+ôïÃaÆ¥ö©××ù¤Ãßþ\nƒ?Ó(üÆÞr¬£Ù¼Íc>Ÿcÿ#™÷v)0þÅÓ®aÐ- Ð9ÅH,)\"S£ ý‡.ïd¬IèÒðHØ?Ä8ÚpïHØ0\"#ilÒ„ŽlâÒ<BL,fH2ØIã²,èz²­¤%ëpOÅ‚2°P²í8ƒ®\r€V¦ERxÌö‰®œÐ&Â¾¬Ž»`äaâ`íe\"bâIB@*ÉŠ\n€Œ pâä.b®´­´ÂbDy%\n«&†ð±È(f„#‡ª‡È¦jæ1Ø£Ì9é€LcrÝŠZ\n¥PB¤îBÐ¨‡yt#0|X„*BâPaë‚&fYÀ  d\n8b²]âxPŒw1I%X›ÃÔ8hºÚÉî\">ó.j#åG”D…:=@Ê&nÃCÞ6ã&w¬b’Í¿¨0g§“ñ\\þ‚ÚÌhâvLTdÅðxåPoÀômI*-‚07îž’à„0n¾Ö.Ç&dJcÄJÉÐPIÖ‹\n¿iÔP‚@â­ ÄLC#­2ÂK&Ð‚	˜~BÂô#í’.°<¤¬9ë>/La¤¬ O®1¨1ÈÕ*¿„¬>ÑdJÏhø«v§¤ð8`‚8…ÈÓà	\0@š	 t\n`¦";break;case"et":$g="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$Ôé4AFó‘¤Ï\n‘›EC	ŠOƒÓÄT,Ì°ÛŒêt0‚Š#©ºv¼GW†ƒ¥®2e…ÑŽ†Sž‘K \rGS„@eœšq·:éŠk\0¡^\rFºò<b4™Dã©´Å] Á®43ƒ\rHe;d²Æ¸lˆÂe3ØóÝH(…`0œEiyÈÖ ON‡zá¬R\n#™MæÛ™Ò»y&fŽœR/¹•€Éæó¥pS2œŽß®„Ã£7I«W³—®ÄòŒ:F‹	ƒz¾Š³C˜Ê	M³“¡a¸†¡ŽZFÀŒ/2ÐÕ¶Ê“,Æ¨£Z¦¢+Bj†22Ã²F†0¡@¬\$ˆ¢»¯*Œ²ð³#h«¼:ÄJº<#›v4ŽCTE‚Êª@HK%£/g\"ëìD=oËTðªP„'Ž‰Ð\r+\n• ¯z¸Å¾*ÐÖ0Ëp™‹ÐÓ\"/\"£†ñ¥CHÖ5¨ÎÎÜP\"0ê6\rn‚¢£2÷Š\"`Z(6ÊèÜàˆ+»·ÁCc\n¡(ŒCp\rÐë×Œ*4Ú‹HCcæÆ²Éúš7/2C-À#+Ñ1VÑÔCÇð(ß_G–\0\0@OJ*Þ£ha’ªõTÕ	#jV9\$ PŠœÚöÍ„(hnºWMYÇª @J”ó•ÀéqH64sSP6´ƒ¨@!ŠbŒ%Kâü•¸‹ÅÊàÛp¬cÆš¹—›F6@ÏÒzŽ–£rzÆ¨É«à9Ë|´•£Tƒ¥—ÂÖÊ_+v?¯Ù@ßŒëê©€×ŠàêŽ'Y\0Êšˆ¬¨Ö®LÄÂƒfpÒÜ›³c–:–Ã.<\"ã,4i#0z0ƒ àáxïµ…É\$¼9ÊàÎ± ðÅÒÀÜ„TS“AŽ›¾1\$CpÖÖ¨à‚»ƒpèã|)”Ì4\rè;Û	'	J¥’WÂ{ÇhŠ‚ž¶°ÃK21O{âù«¨Ð”«\\öÌÙh@(	‡SÕ±Xs ¤)ªnÌß	âZÛ^‰\"Rä·(ò\n¼-ºâö6/¨¬}ÕŒ8;½	â˜¨Ü³2S|0ˆü3§´¢zÙÕå2¡~ïŸ\r58B_ {¯¼ìƒ@p¨)çBjCzúQÅø:¸°ÞI˜ 5œ5\"1%¯´`¨ï•À \$Ë\\Â¹ðÌXZ\n>GÄš…Bú€WËMW*ìš¬…t€ßË2 Èñ÷(8õ\n£&Dqò«´€zØaˆ¨½Ö–È\rI)?'p„£ôhTÍª\neá|‘g*ì€:rÍ€&óìêã¾\r§­ÖÈÄRz	%,P¯–ØÞE‚¡¶L«Œ±DpqOf,Õ³]ËÈUa¯Ô÷®…ŒÃz÷†!Íf/†=“yiÁ‡VNÄ	yÍ%ÂÔ:Â\n1\\)áœ¿ÀòuÊ¸¤e”ºðœ¨P*P-\0D¡0\"ËÓ–gÔS?g\$0¡3¼G&Qc#Äx8'dþ B´CPªl§ãôNŸÐ¤R¥MHS¶ãbâï3FX5)PÎ—’wf¦éÂVK'ŠÒC\n 0ÏtÒVi2I3dÒ'™hX‚±œ8!&M“T¯HQ'(l ¨„ü@c‰„hæ›\"sÁ:ßÐµ”D½))IÄ)\$Û:<3¨0äuÒ	–6´ž”\0¨‚HGá)u(/	ÑpËinÅ²ÄW¤/\"ì)ÄÓÙ9Qô€#Ç™i\0Š‚(N\nLëÃd·	>ËÖ“)fj@Œa( AØ¯”ž\nêI¬¤*\nö4ÃŠ3\0\r¤¼É½Gu\\C¬o-Á,ÛIBU'LòJ%JVºwX›ÔñCµ² TœAéf.ö:Y×dÐóÕ.6€¼r€G'©!ElY”Â6C 7Ä•/>¢\\É¢>­Ø§[\\E]z«ŽöŒR›(¬Jzd¥µ²S.N‰é'S©M‘’|Í%Ë¢ŒL:³RôSŠ°£¨ÖÉláüÍ%b»±ÀæMdSÜ¶µÙÎC>‘3•‡V=÷[%ÐUâé8Ÿ0@–p+µ°‚¨5Ä°àj(1j(¬®\"ÊAXñ2Uö”)á¦;'bMèH¡ÊSÄ{Ù5tÅ\n»›¢×H'h¤S¼”^‚§icñ\r¶ÐîÈX}ïùc ñ§c»ùdCj'LÑ!#ŒgL+s93£™£ÏLk=‡¸þ4ÂRÌËYy˜\\ºT³.?G,ÛN5¦¨e'XMò²‚ýs>~¶‹8œ28if¤Ç>0P5™®Î¸NÍpÙ]äüzB\$=•†¨kFß¼ `qñÍGsI,}(€ôuý™3FC…ˆºJë¾W®úW‹ßðF†KšF«ô}¨lö‘È1o[Mq”u.‘ÚßKhü’U2]ƒ´…ä(Dê¡¯¥ŒQO™áOWªù\"E€°R‚‘SåIæÅ‡ºêÑÍ»·å!ÜÖm3qdŒ•¹eÞ”z§vì¦[‚dz1`·£|Ï‰TdŒšgã6›YQ£ ká•\$&Tùt\0¼k,NŒöB‰”17e«Ý'Nêˆœ<Ô¥ØBwÂ\\:ð6NeÌÏ+²[6nyF”‚˜i0€¶>^4“LXE\nBÏ8è\"ôb\nuþ\$Ù•’”\\Œ—IÇûc&PKaÓú?IÊN³|V\rdŠº'XFG¾© e½t…é·]—\$ ­×¬æÏ\\­—vÎÏò>öë^íÛŸ)Å[õ„9÷ú­V*Õ]{‹|‹^7iBHg<¿ÇÞ¥:drðÄÈTæ–ë5÷hêzwfÔøv‰;IØè³&z_?±;Æ—ëy1^†d­—ó>¦[;Ó¬¼@½³†÷‹XD’Uï=Ê,žJ÷qª‰!–ô[“&}QÖ¶	5úßKØìmßí;ìY<#ñM#MÄº—Ô-Ñçó‡±½ûåäùÅioüâõ›iAã9ÿOµzßð¥%ôå®Ðîl‚‘Gdÿïôýîö÷K¦õ\0'ð«íc\0ðOÊl§\nt§Šº8ÈŠ¨\"Ã@‘ÿŒ€´PB4EnÈ®Ðõm’3ã\0>ï¸î+úkD	\n+'P\0 \$ÊŠ|ù|ÓÅh[J\rŠä÷†@é.6 °rIçŠ)²#gPÁOLŠ	O	Ð”¹l‚	l¤\rÂâ\ré®°K” ¢lÚë*!ð-\r¶ÍŽDœ‡ÎÄ«¤äÀ†;ÀØ`Ö&f€7¢)h4Äƒ‚G</Àª\n€Œ p2àÜg2®‚jqJŒ*B8­êâ(ZÈfˆkj†íZ½Âm`Ì'\\\réÊOV/&\"ÍÎÜØìLABr¬IéQV¨B& ˜¤Ê³â>8*Ø&\"zˆâHÅD\n‚Öi @ÂDòC¢OÎ*gÍð¢51–ÈnàÚƒ\n4 ÐHÌöê¨†uø‡/»iôÈ,«Ðd³ÀÞãdÚé¥(ÿnòí0JÊŒ.1€@À¢R,Ã `à<bNF¶É±’ îì	—ì¾!\rf‡Î¬qƒz†`ÓÅrÂm‡Ìà¡©Á\"é°,£,(£Z+@¥,b†YÀŸbL3‚´<¢dšj€+@–dC¼ ‚6/I˜‘Ùç¸Ÿ)æFÂžð\r>=2|‘¿~ûiNA@â‘`Æ1Šº4dÞJƒÊu`cx,@	\0t	 š@¦\n`";break;case"fa":$g="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+X¶QP”‚dÙBBPÓ(d:x¯§2•[\"S¶Pm…\\ŽKICR)CfkIEN#µy¼å²ˆl++ñ)ÕIc6Ód\$BÓ!ZÎ-Ö•~äŒ„Ø,V}–'!³Ð•”šl†·ÏUUiZ¾B@±ŠqA´©ˆSêp•ô2íQÇBÔùšœB#SàðëT­Q:‚HTÚkí“ˆN!([îÉ+†ª­ð{…r ËÌ0ËJæ¥@Ö`4ÊëÌ–©¨ZlëIò¢´ã¯•ø…Ï¸¨ËãáZ¸šÏÕmˆðaRO¹Š€}dv>f®’B¡*[\0å¦Héœ 	A°ç\$ëúÎ«	jlï9ïT±¨¢U5©_\nèêvì4Å¢J†¤+\\8À-*9`«6\"\"Z#¤CL³´qšJV.¤B´lM3\0.…{iÆéJ‹‰L”ˆ•@HK&°ÑÊ\r5‹\\<´±k=Ë‹\n\\­1ãƒ1êX¹1áNŽ +<8×¹,\n*k³á8\n;Ä‰HKJ+ÈÄApKà•¸B0ê6\r\0è0ŒC`ÊŒcÜð¿s4YÀ)¹ÕŽjÂÊÑ2Õ91d«<©sµ—•Éâc®Ï¼pžDÆÌ ™BJL(¿®µÄlˆÇ,N•ÅI‚ÞÓMÍüPÖÅiõº*u|›Vb4.ž\$5D®âµìêºÑÔ™©WLï'®‰\nû\"ÏHín¯öûÇ§¶Åªæ0òË\\C Ø´­iŠõ<?ð[X•\$Ž\$³úTÀAHirÌ½\$3h\nƒxÖ2Á\0†)ŠB2Ó·k±'…RK-5bJî1Ïºm»Œ[ï¸‰šVY,®ãƒ'+Åàš¹ÊJs	0+CW¥!Ìå¸Ã¡/º’š±hZðœ2J¾2±ãoÛ½t09Ýr´%ntæ˜DíZÅx*8ŽäåBhÂ9Žƒ(äøæ;ã”š2€Ò9£&0!\0ÑÈÁèD4ƒ àáxïÑ…ÃÈ6#wq#8_”uãÇ7cHÞ7á\$0ŽC8Ê:sBý+M\ra|\$£…,6å xŒ!ò„9„`è4\ròhè7ú£N\r#§	Á\r´×š_Lô|Ð,»Ö'kkOwÖ²WÍ!Nm!ªð‘b¯kXYÕ4Í,0RIPáÎ\\´¤’šI\"ÑiXÜ™B“ÍÚõ3d¬ó·vD˜Ãd m˜Ûƒ(«Ošª4)>¦\$ˆ¸RE½'qdKTû(Ð¹Œ¯öÖ€¡Kgäüê®FbGÖ!\$„¨âÁ|MÕ‰&=„ÈÕ*v·\n[>}d7‡P@¦YHuyA½Ó*ƒHgL(„À@ƒJ–Ø4¹PŒ„f\rÉ44¼—øŸoA¼6‘·[éB+õaÃçÚ˜ßz[‹zF¯cæe!j/0|Ç°‡Á¯[r-	ÃÙ,ˆW¢Ñ/²`HÉL±QÙugÆ@ž4³YÅ7“Ä¥m%Ñ¨ØÊ\$ûœ#VCU©Þ6ÀééÀ‚ÆÇŠ¨¾~ÏàÎ’‡0Xq¿\$èP\\œD¼Aæd×5‚Ü“‘™Qê<L2©`ÆàC\$“L½£®H¤\"–ºÔYÌ}	@[Û?SX™“z†ñÊ(¥EÁtrÍÎP¬.hrr\n‰Ì‚xNT(@‚-£A\"„À‹H\0Yiu;ŸêU(á4¼ZÓy0%bQQ¦@d†cÂ>½‘¼ÕGRÞa%ÂÆ-0­TÇìñƒ\r‹™P'ÔüÝE\$(ÑŠo`¦.ªš¬Ö‘É¹Q¸«\"#b’×Å7S«ÍžÃ’{äYÑUVÓA[æ	*\$©23 REsU5,ªTÓ*K¹¿gž‰ÄÃADcT˜ÙS¡‚	–\"l·2B-åy¦%3°ÒV+eLLSâLÖ[TÔ¬›6øú\"žDeR9TÖÎI1fÕ	`Çî|%5—A’T!´;†LZ1!G‘0l3Æ1q‰í³ø¬««t`_A\">H]£1E¸f®™© åò„ 2qŠUÎ¸—¢IÃzjÓiM„¸˜EC&Wg¡€BD½Ž4k¸¶šl‡'	£¬¹²s\rµÿ+%x°!òƒë1ØW„Ñn#úX ‘ƒü¢ø­‘âŒb¾#BvÕ“Á]\"ŠUß]ˆÕ[b“Öo%BAJªÖÉ»ªÜ1Ñ>HŒP±´ƒQÙûg„Yê\$…,Ùa¾Ïð°€¨¹ƒ@a‘\0€7=ÀàƒLtRÎùê=°Aƒ ap*H4œÊ¥µáVˆÝ€g5UU&Øà¼¤›òÓ©å§;6£«•ÕOP;ÎƒÅUk&>Éu¤ÝW(L²±ùÐGš>¯%ks¦iJDÓkå–ºµŒ1k<ç°Òj{—=5TR4æ¸·œxJµRpÄÕd[zÜ*Lñ¢Ï¶LdºhqÒ~¿!‡ê–€QM‰À)Ô8Á~JTAäÕö¥ÈVmU…+Í\rÛ&÷yx˜©%71'šc/½ÑµÛz»>ê«IéãX%nÖ†¡i¬Ùýržý[,W{/n³8ÃÒèëP\rjR¶3µúTš£…W7òLœ(W(-¥Jà|œ<L¯qU˜q`J,—båñå³ÈudhuœšM#}¹‘^ö,°ÐeÂî¯8±6ˆ ;SÖ†÷á»î’¢ÿi÷ZDùõÉv™\0Èq¤<úÐïëx8{\0W9±TD¹ê5wË­€5‚èòëÛ(žl5k1t,²xfÆDuÓlbõYøg7û×¤ðné]Ö–\\÷I7eÎ·¿wïœ7Çœþ‘n:VÆçýã ÔËf½­¼^þV¤°.š<Š§T¶!ã„¸zD,(ÆLl†²cU\$'ÄÍú½Íü§(Â™ûbøï…åýÚó~Mj×ËÐP²I9[zéSÒ¾m5ðKßéW?©žØj…\")¿’vX'Ä?I—}öòŸîá^sz5o–ªI/îô:ýlÛOÎAoÝìøŠ‡\0/Òþ\rŽ±ë44ïØn8²¨þo&Òp#®ð¯\0­ˆá.²+6ÿo°³0@Õ®0ïzóæ¬@CPbþÔâ@p\\Þ,Rüf{kv4æ›\0ƒ ›nºH‹ Z†\0›&„­†\$Ä†È—ÅFÜ¬f¾L—\"²}‰x.Ì@ñ£ HFâ‚«êl)Êãcà\n‰\nÀ»‚Hh2Z®`g‹’\$°Î¥î>\$0Ö-\0†€ä\r€V`Ø\r Æ\r`@vèÌŽ`Â\r€êRìÌ\r§²\r Ì'À‡ÐÈâRàÚ§\0\0ÄRçR£`¨ÀZ\0@e\0Ç ÜçÐåŽ:‚¼].EË´m6gê~ÄP¸ªI@5ÉbÓ‚tëçFû1;C\\2FÖ®/î­Ê!#à ã/ð9h0òQš®ÈŽ,ÌöÂd(XýÄú`D5« @˜Œ€ÈÐQÁGªq%.Í%&MDmd6•-ON¬9chAFxì\r(‘çvª®˜Ó1ðìÉÔ5#ÒšNT“¦á QôØN 	<\nŒà§¨Ë,·æQààˆú\r ôr+Ã!N¬+ìP­±†¶¤Ì5‚ö4‘þ¸ò×ML?…OMÒ•÷JÄ\"JÞS‰N3Jr\"#¤ÑŽZVãè\nÀÂ`ê Úeâ¬F:hê'q’T±œ€ž›¯b×£ÒÔÉJ]i:“ñú«Ð|2ÁR¬Ûí®Ñf©+Êºì+ Ë^EþK'ê¤\$ífÑ’è²äÆ¬BÞd#>";break;case"fr":$g="ÃE§1iØÞu9ˆfS‘ÐÂi7à¡(¸ffÁD“iÀÞs9šLFÃ(€È'4ÇMðØ`‚H 3LfƒL0\\\n&DãI²^m0ž%&y’0™M!˜ÒM%œÈSrd–c3šœ„Ñ@èrƒŒ23,Üìi£¥f“<Bˆ\n LgSt–d›‹'qœêeN“ÓIÎ\n+N³Ù!è@uÁ›0²Ó`žé%£S#t„ßTj•jMf·B9À¦åCÉÂÂÌ0#©ÈN7›LG((‰³’™iÆŒVðC4Xjë¬h…n4ï#E&§a:‚ˆý]ÏV¿5œa`Q¢™çRÃTp8aÛ‹ÈáxPQ4ßN£\0„þ3Ã>7:­êâ:8ƒs«¶cK>¸2L™A¬ûô†(¬À#2®â+I\"2@p*5Ãì¢tÔŽKèÚ°°È4¦)k.Ëûê7Æq¬B.é#n°Œ£`@êŽ«ÕGqê²Š\0Þ1 C Ê2œªòH£,¨Ìü©3«€Î9:£<*7B”½&l8Ü”%Id¤a— P¨9Iã#ª1¬+e&	‰HÒ'úüâ¤Ãªv2³päÇˆÃª|¬ixæ1¯“hÊ8Ž¦T˜¢&B Þ®Ô\0Ë%Ž‹Pê;O°Ê77‹lXÃÆQ£L6'C\0§¤Ñ)RÞ×±ò\\’ÓcD”0¸óEŽ­.ˆÊggB®T¨%€XL5‰\rÐ%Ž\nâÏ\$•;zŽ#Écl\"ŠÛv”lºÓ pÀ6-ËVm°Ã\$’øØ¯·ÓüHL“ÐÞ5Öá\0†)ŠB5X±2J0\\1,Z|2±×ÐÜƒ,¢¬•´²Þ&ëˆ@Þ Îˆ@±S’Æ÷D*;Lƒšnöhµ 8:0(YgYƒ!ì#[Âii†Ptˆìf:¼_SŒ-?<\n›‰¯åîý?ƒ˜î•Ê:[¢2Œ˜øx\r\ràÌ„C@è:Ð^ŽüH\\0Œƒj ›%c8_[òt‹;2á09]Ã§\0/¤kàÖ×‚IXxÂ4(KÕG‰ÝV bŠêœ×PÎ°›ÞŒã<ˆ«ËgLÃ‹”nÌ´ýöŠ\n@ ŒŽ£…íB¢ë¡:¹ŽhðÜ‘\$ºÜ·i*€¡e£mˆ™Œ(ê˜Ô¤Î«ö:¸þC±ÎÀÏX%­|±Š8P	áL*²Àg/†eARY†1Ë|ž22žˆà	 íYýµ†x·ØâŒ?%D“Â·ÃŸ&%ø9&µˆóB70mN¢{Œg«€¶*UNR	yg'A*<øWS©NPäÀ°>£š7?ëˆü®EÌQÈƒ-”œv\0ˆÐ\\éI\$qR«ÐzIð6¢fŽ’óf\\¨©p,8«VŠZ‹ñ€.8ð¡MJ!!À°²@B@aOòä^¬LHrwë§ZŽI:2ªAå!h`ëUJWÑ¥ŠèÊ¨	,–*\$m\r‡ Æ°ê°OR1l¥Ô¨ÞËÑ„¤Ã… Â¡iË+Ùm,å¸´&*Ïce-¶æDVsRÒ8›„4’u£1_/œô Wˆd¯n*½¬\0 ž\0U\n …@‹9§@D¡0\"Îä†úÌ(\rðâ9ÏuÜ!lm|ÀÃ\\¢Ké><8G\"4Š!År)øŠÌvˆC7*Á—¡ÀÔAÛy/‰Lä‘*C‚À!ei BrJrL…'¥,ø–ÒÕ—HÐECÔÐÛdt!ÇŸl>V`ð“Uó*!\$B£-’+Œ\0C|ÅT“lhù_d–WÆ“½KìÝ ©ð3®é\$\\*ËoZ§~²˜u\nÅ]ÃºI‹Ñ{p¦JÌ€L.äÙ¦Ú@ãÈÐÃ!ØôU`F‚\$x_1èÇÃcâl¢óFðÚÂS@·Íâ TJ!,âØ]RºQ2Aœæ©ë4¨ÎxOæA³ÓÜÞ€cg 9´û;h×àmª¤Åµ€”ÝiÕ\"µq¡cÚä½lm˜¨¶¦†ÑYòn’tnB>®Q¸IZÙ§¸dÙ(35>¨mEÚ%ÎâPÃkîE´Ö†ï\\p¯¬ŒwžãÍ+ez€Rô»fÙxW…öR\nÅnN‹Ú”>ižÙÕ6Lýµ›àÊ 7‰ç¸úcJÿQŽÂj0+†PÅ~mUñ¤&“\0Õ{'fÉkSˆíY3Þ}Q¼+FKNHÊˆŠÞ.6¤h\$\"×*/Í;¥lHÈ¡U‰À'I	)¬C³½f”k%/×\$äµ¹“IÖO9Ý†œ¨2P©šêÂe˜ÏH€s:«H›„“;šÌ<3QÇ\$÷>3ôº‰èe]Ä%Uðà;&™ñâ;Åqž2¿*áœ\"gÌn/åhê£8ä¶o9ú,9hØ•›ÅN2Îô‡¦ÊuEò9_¤¿3\\B·°nªH7šlÆœo9TH'f|¶ ®\r7à’ÁJƒn¬ˆ\n\n(ÁÇ\"êVÙ¶Ùd5C´Yý>IÖÑÙ¬FˆLwQT†\\º'XÕšÓ0JuM£Sñ~‰ø¢Í¨)žåîœ0¬õ5nP—Q³X¬íb¹	ß9lÞ5àÛuÎô±Þ1~B––ýÞ±û†ð-k–õ¾^á6-iØÒKÂø*«Zc-Þ”eß|LcëÝ]°N_Y‹o“q}Å(ÅK1zItÛj§…¤u¦Z¼W‘§\\Ë=i6]·¼ú¿¯Î|:\"Ç¶×7¤:î”¹õÑ\nšóf°MÁPo9t¤Ö'UUÜ·WæÝbì<c«ÅÎËÖûEaëý_q\rƒÙ\n<)Ý…ü‡:žBÊÙøZG†ðÒ{£-›ìC#*#ÔN÷3O'«%‡›]á£Ú¬¨ÏA žôÃãð‘ËÀ¬¸1ÅY™ÕÙÁV½DIáòk:tã÷Ï×k³,’c5,z«E «z?½ïDsÝ5wâ_µêýQòËÿÍæ7Ž|?•EM„,snQ¿9ÏØû_r2ðÿ•øsÕüxØ§pÿ§øVI¦Z¿ªÂþÈóÇŸÙþ²È\",ü\\6À¨C_’È\n43£Ú%¥@ˆèR#©®¸èççù¯¾ÊnÈ'P\$éÎlüîÝšùÒýè¸þ(èÄÄÒðHGíF¶hFîøpLU­.ú¨ö\$ªGˆ 8Ê`#xUCèÕOz•[·®¢2:°„ðÜâ0/	!S	pˆæíqlºŽ‚/ð‡ðk\n¤‹¯ 5Ð(ßp,|@èÜÏ¥	ÆÙ\næƒ*¢_O3êäjØ¬ÐÆÊNUê%¯ÌêðÌ¬í	®ï\rdœ¿ðöªêÓÑ\0000ð}À°OÖ–LÀ6\$²éîÆ*ƒ,±ãæ+PúÜq5ƒä²0Ó`	|˜Êü6ê;JÀV\$Ü Æ(»°n i¤âÎ„‘DÐTgê½‘jè4ñ.ëK6ÁIªŸƒ³£°vB\r‚àÄëP6Ë:ÊÅ`ù¯Î½q¦ÌL˜AQ‚)Î„üæŒ8â¾\r€V•àÒ•šPº„+*#Ë*[î2»Œ,'â)ÀÄ\$¢  ¨ÀZ¶Uªª/¢n¶ëœù¢Rzmr½‹p(í æÒ¯¤¿¦ˆ÷núŽ&ŽpTÖo~%<X\nQâ6Ã6(>Ø¢j\" E\$'5Âµ\$\"8EIhÙeÜBŒG¾÷ ˜‡\$f/¥‡KtñcfZ	¢šcgêòç¢ŽÖqºæÂ¾3ë4ëºÐ‚É)®„OÊP¥K¤*²¨ÇèHRi’·)iŒ‘¼î Êìb5rÊÎŽ>¦*\rêPÀôoÙ*¯Jøã¦MéÂD,¥ÒºYî=òv¡(DïˆþQJ+IòÝ\nš§º¦…YOz<.ª‘\"æ ÚœÒæqÈž.\0Ü(ƒÌ0à¬ÍlÍ£‚À\rÉP6Ïû+*xj	\$ãÆ¬ Ž&áŽ¦JT0ê4iŠí	P´ÑN%j;á\0±¬¹©Oãà@š	 t\n`¦";break;case"hu":$g="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ý†¼¤ÁQ£)’’iŽšMÆ8,©Bb6fâéæPv'3Ñº(l¼Þï·óTÄÂ(=\nipSY¦²r5o’¥IÌéO™M\r‚\nµbµ\\›‘¥Œú~ÃYËåJÓÖÄS=E\r ¢\$RE «ÁM&F*D°•Œ¦pTLr ÞoúƒÑ„è\n#™d´žA„L :Ä'8Å­ëÏQ®È¢6i/šj²ÌJ”_5ŽéÓ¾¡ðñes†ä\"¬èÖ­A\0äÙB Â9;CbJßŽƒê5¥EÐäë	Ê»Æ¥\"ešH9˜ejÜ9ºÂ¢(¸&0ì?Än±†M\rI\n®¬°\r‚5²hhÈƒ&ƒ Ço¸ÕHâˆç‰cHì¿°QÎ:ÃXÆ4µZp3Œê@Îå¢ P–²D¨ûŽC@ßãÄ˜©rÌØÌKbV5Àcsz\rsJ¬P¹îlááÌ9¯€Pšb–.Ø¤Éãc6í.(@9ŒcÜßŠ\"`@8At²Øœ¨Úç+r¦à¿sÚáÃËUcsžî;Ï‚‰5\\DŠDú¯Q×ò	WŽ°§_¦,ì\"2ÌÍŠ*í¾¯»ÃIÙ\0P äÃK:3#¨Ú7ÊÂHÚ8M+tö±£ÅÉK‹L·®,äf¤Y¶(0Ú5²Å0ÔsÄ•&2uà”¼ÒK:þÌF9IeM[!\0†)ŠB2`=\rãu‡]–ap@%«ã`É˜eÐÕâá9.7#.ß«“\0@ÆàíË06ÊXÃX©#(Ö…\ra\0P9²C˜ÓŒ±H@Î²ªãbì=8YšPÍÑhHÒ2¦âns¡\nK82H¤Žª:@cÔ\nƒ„.N¹XV«áéF#|9×²½±ôÚö9ŽóLv2ÝCJ2cÁâb4)0z\r è8Ax^;óuð6­HÐ]4ŒázÑ\nÈÝ£c!xDÁzXéÇ‹ñD¢×áEÖ# xŒ!ó‰)34v§P@ÇShÕF…VI¸œµ-™›28Åç­h+†<„LÊ¤·±‘CoŒûÏ\$\n@¡é1þªÜèJc¢\r¹ºvž¯õ½V=7¯—ÆÊSÞ+. !”þJÚ«P%iŸtbÉº&Fl‹4bxS\n„Àú‚\$ˆ²t!Ð9£°Â[Â*å ÊFÈƒg{…ú²\"`ïÈ9*ÊìŠ²ð²Ã¨ R¡¸Wn×Ä7A¥@…52L–Ò’[\$Ä#GÖ¥‘Ù=]e)ä`äIT™äsÍÅ…°ÖêÕ`âµ?§¯˜Öö™oPÂ6Æ¥¦cRY?I«Ù£R´ŽHFLáå·”¬‹ù6\"Í+1£ƒ.!¤ò•³QÊcd}!BL „ªCÂ“§þs„er'OiX)·`Ç\0ÏüqGœä(Eˆ˜–8©_­Ê3–!ãp{F6b‹Cà/uÃ”eZMÂIfiq5‡PØ§ÞÜ¦)'ú/@®Ìªy<Ä¨[2Ãs8€PO/ˆ880Êp–²(Íô…OLk\rqy Š'‡¦•IÃ-…hÑý”’•@ÊºJÁ4á™dœ €í ­>š³—Âö=œÎpËG\n¼±-ÁÙ3¬Dº†EJA2¨ëN õ;\0PIMÎŸSf\nºE§4 tºÚj†W,m'M†Äf¬× ´^Œ¬ôrÁ©ñ1¥‡%ÛQ©ªô\$\$£œžVrè]K•/Öºsär'ÆÜ%BZ—ÿ~Ð<ŸCœyÍ¥9bÎ«Õ‘CVÎµ]MpÝE†¸V›ÍÉRé‹\$~ŽìmRi¦Xbbª“f%…ˆ°Ô²³\nC†\r’Æ&–ÚQËQYr@¸„Æ}aÊÓðhÈÎDK<½-t´e.ÈZhWjh5¬µÖX9Y‚lÓ*ö|ÒZ Ãi-íV·êÊà–—²-½ Hf•WÅ8…ÞÉ7±–lÉ5û‰q‰¼ˆ72Üžs4L‰Dä%&ä2“ƒ2QÝ¾R¡¯Ý…,HVÕºnÙ† äoL\0W¡ˆ¾F*¬TLÙL½×à™*µNì12Sm‡<¶OÌ\0CDYA“îÐYÆ^Èšr™Bsñdæa\"YB;ŽxÃ’8}æVú“˜ZJ”å%a°áŒ~e¬ß·MbI£#<fÈ9òBÑÐýe#Íâ	¤j,iM­ˆ¢ÒËhoˆ¡Àú© èºQmfŸê¬Ÿ…²ÇêþiŠªpS+d7Lß3‹&9ÄÉ-Jç),Xú–=Ùe•4bðE59Íf_¤QBò+!°‹kWJô’§%áo3ÌXt\r)MŒ®×ºÚ‰DñAš­*HÍeª§ý|ž·Õ¹JN)j,ÁáŸaèòJjÁÚ+´Ûa£)ð¯ipo  £BÀRGJ¹x0¢7-8´†Ü_Ù}6Ôù®Ú†LÛq§rFý4²ôîŸÝqÿr¢¢	¥£®íZk)zU…í.VßŽx\rdný8Jôÿ\0ÒkJ“epÃB!/»UDHÄEhv·v–éZ‹©jÀO-X{Œq«Ÿo,Ÿ9|ËòßÅ¸‡ãwFÓò»TËê4ÓfsYèð,©ÎjG< »Û†ó‰¥ÐjWl#K“*z¯-9m4J_´—\0n0YŒ1¢ÚˆMj ]m¯Ã&ºÛ!1êb¤ÍõiØ¸=7¾;Eöf€Ùƒ‹«Í¢¬@•\nzÓAYEh75v¤£¦‡GšTØø‘@\n‘þEayÓ:ö•}£‘{’ýJZ÷DßÛÏ¡½I8˜ô­{~t½<ËéG¦õ«Ö§n¼73žç>nÚ¹°ç¹è¸w¼#õÓ¥o^}ê­§5{|‡ïºW´W©|=O%rï¨MØD ýs#D'7¡È­ßd%Å}>à÷h—ü¾Šf??#õ¿Ð³sû©2½¡±°Š|èm(ÿ#¬ÏìÖ¯¢ßÊœÿoúÿð¬#¬\nÉ¼9£(@ã*%ê)XM*°Ðot&à§P\$ø®™Ð@Ðo€eð>‹ðBè7ðJ)OgzžîÂý/R¥mŸ¬©…MˆynÀTÐcËìB*¨#PlÒBª\nªýÏFÇÐ™	çj¦ª*­Êv\n¢ªÐ†^É¢Nïœ÷ì£ƒÔ0cN¯;jò=j÷	Ï‚¾Ò¯PÏO^&âôi’úÎDRàŠÏ¦˜í†ž?Ð Æ¬öÕ¤ºH¬ìiÉ\0Ê‡DXŽ‹%)TqÄEqkñ,ÀBn	cÚc@ôn!lÆ¬6ˆ„€£Ñ:GLœFŽj¸@H¬îXµ‘dFl€ºnn&à†B Ø`Æ(\0Æh&2†è`\r€êÌÌÄ[àÈ\r Ì{ƒ4(¢\"C\\)FØä`ª\n€Œ p{¢Ö\"âÔëÄæˆ´\\¢ÿÈ\\qÌ'ñÐå'EÙ‰„#âB\$hÀ\0 E,%âb-Âà6Å\rž­£ö-rLÇ-\n9ðïÈl&2Î‡àÍ`ïŠÂ€#Æˆ.Åâ(Y¢nLãº0BLä@=À˜‰šÏ£¯%B\$M%\$>¤]¬{Iš®„8T#œó¯ ^*8/€ÂMo9æà]ñþ&‚6É’iÂ´È­A(ò’O‚|\"Ì‰(©T\"†ƒ\r\$R*–Ïe\$ æ\"ÚMTsƒÆqž•n¢ÔD6¦¤¾,.ó'²°Me.	¨\0²€š…e¦MšPe\nV‚•(„òî®\$ Æ¥¼ á,`Â(œ0ö#ê –&ªüs&	LöEŠð\r“\0£\$Dn!ÌâQ+3*b¸Ý‰\0d×4E)‘G.â*¤¤»06 i‚²\r³&¡‡Ê\$‡Î7cz±Fâi.(\r Ú";break;case"id":$g="A7\"É„Öi7„¢á™˜@s\r0#X‚p0Ó)¸ÎuÌ&ˆÊr5˜NbàQÊs0œ¤²yIÎaE&“Ô\"Rn`FÉ€K61N†dºQ*\"piÑÐÊm:Ïå†³yÌßÎF“œ ÂlˆšhP:\\˜Ù,¦ÈåFQAœ‰	ÀA7^(\n\$’`t:ˆ¦³XÝe£Jå³JÌë’Zå„¨í@pŽ™ðHžSœh¬ñiÀ€ïÄŠgK€…“‚‰SDŠG2›ã›CH(ˆa3RÎ[+%XÛ²“·%\re82qHR¬ô\n–\n&Ê«>W@r6Î# ¢¤Øi’w®„Ï„f´¬â9eS–6Žròþ?Ã\nÜ£sˆ’¦#¬ìŽˆPÈ’©K£Ú÷\0PŒë( ŒãÊ‘CÂx;(ÚpŽ	\0*ŽCª–„£ƒpë¡/ Ú¥=‰ÀÔÔª,Z ‰ ,Ø„ CJ££`@64)Hàö\$èB–’\nbˆ˜	hèÂ4§á\0ž:8HÊÈJÊè²Àú’?«*lùEóz5ªë „:¾Ãœðô¶Sú8»¨Ì,±ŽÏr^2BL\0±A`áHOo²Û&ÍäçCSôò@0À66’ä›>9b ß<(¦)Á;,è˜\\	cJÆ6„ªˆœŒË°÷ŽJjN4;’tð6U	`ˆ¬Ãhæ—ÉVDb›6HÌ–\nv Ad)#˜X‡ÀSÒË\"ª Î4¥‚—ÖCuh÷Œ‰cÂÆ¤ìúT9Žë&2Ez„â4DC0z\r è8Ax^;âr…É8\\±áz;rÊ¯…á–9ã(é…‹ã~5„Aõ8J¨èã|È£yPÐ7Âs\$U<VHÓÎôã0RX\"±™”©\"’åi»+¦™|1òP \$\n	ºrìŒ–‚r(áJ¢©¢ª¶¦2ê¬Øê6°¡b¨=,`Ò¬Wˆ.¾§£tÂìÊ\rz¥[¯c’ú03Â£ÙÔ0@(	â˜©©(–bf˜XµÄnÔÉO’‚¥±/:MÌ3í\nø’+ƒpÌ4£ü3!ÆBÈÞÄŒmhëš\rêƒ\ná²&\\ Q(Œ*k®ÅeGŽHÒ•àŽNèãIm4Ö)wç[zÓ—±AØöJudE¬”.øAžôéJ£T%7ì¿±‹Œä9Lÿ£i¢³y&-\rš2_É'uáÌ3ÀÈéŠBiÎ=®Èº™ý\$A¦”t¸Ê\"\nðè%\0ÆUƒ!z/°\0è\"žBBš‚P)åí+UêZKZ,fH%’\0Æ’Žá`+dâ„ðœ¨P*P\0D¡0\"ÄPƒ	éìáDø¢‹áémFèÎ‘\0 LGx' \$”Myy	gŽœ£PS²Ó*Æ7X¬˜Š7EÅíòÆõB^`Úa²*„’“©EI )¶òLrÂ™spÄ%!˜7\n(k†Ðà²–ÚÐt—NÈP„dkZ9ê!-]Iœ²öYK@FXDd\$dB¤3*F½ù÷ØéI	wTÆ¹‡b˜uJ¨J&xj•I˜rYÁq‚T&üLój4y†‚XD¡‰çJÅ‚*vQû/'²kL™¡#æ™î'S¤œ£tYçª\$%G“T¨Gá\"Y~•³“ë~eé‡#¤rÊq5¡´<×PÅÜê †PˆˆÛBJ QL—ÏŠ£©lŠ*…0§‰‰IÂi5ä”âÊ	úyëL¬5dC'ƒâ;/’\0004ºß°'N‰®ÄQÊ<Ñž)8ì§ Ò'°S,•^œ»#²“ˆ\rïØ4¨” ÊI³Bvçx2•Ñ6P2P[ÜŒBŠèkH@mPž‘æØ\$Š‰,i6Ìe¥VêÁ­oNô¢Kˆù	\$\nMªUú¾Y¾ÿ,J;!Õ7ÙrÝfg‘ÙM\$d–E¤¥ËA“¨õæÕºûŒ_µ±’+¯«fqc-Q²ÆZ\n¨lá#3qtHhc ¼„W€¢º£ò<\nb²€;o©ÇT5ej+ÝP¯Â¤ÚXN\n“ˆŠåÆê]É¥e-t¼—mð^{¯pfñ-Oµë§HS.µÞ¨†JûÅ+óoïJÜPVø_YÉ\n!2Ø©W¤šQNÍu4GºjÍsyZI<Û„ÁÖo\0œBqÂ&¥u†Ì+3pÀrÃSu.I²ƒ']íÿ|pŽbèsŒní¿ÀØ´7C|^op%¢¾d²A½#-Íy!òHÖ­jøGÙï à€5\\G=bòYéVù^1“Pi6Ê¹0\$©orSžF!©5œ¶DÆØÀÔYü¼_\$¢oéÚ*ù/èÝî»Øï?à¬ƒv–…Wú\0ß%-JðT¹9´ÊöÕ<ge´‘ÒšIu¦ñ–B´’\$’N-5/%þ¦—eÐ&«ä¿i)Å[¥H¾Ë”¯>LaO©7XËYo tµCÆ„³ì)Žö.ŒÈz‘à¡Ä=%_±]mˆßG Í³ŽÕóÚ-SjÀÜgîR/!“²­~Övå}¸ähÝÈˆ·^‚ÇVwf@}áµH¶ê‹›|¤nÍ…¦6öàßÁ§Fí«¿7ÇLò|ÄêÃL Ó›Ó†l­G´%\"Õ<Es`ƒ´ö“—‡R`˜Ï°çù¢.üNár“GÅ¯T\"a¡¶­}ƒL™c5Œ5ÌÀàý×‡æˆ*ÀŽv4íL…,´Qî‰Nglm¡“iÓ#âÍ laŒ÷†2*WÝÚó™EF±†Ö€¶ƒËE%E¸º×Œ@\nƒƒ{9˜ZèzèXº0a\$I;1¡„–ÂogÁæZàô=_Ð‰v0)…Ð#3„ê\n+5ô§m¿cWN/e¤\0¦ÔA«yË	Žäì–Vî»2\"{ðv=J§l—+…xOk\"“¸rH´â…{ýaEž÷<t{ÀÃxp*G¤6{ë1’þ€Hš†9éŽ¯-AàZ„'\\çzqÎÿåHD~‚K“‹Ö†`)ýJß¾™g§\$Z§-\$1„,\$ãúÌ¨.÷ƒL/#ÚøjZ­§Ü{äžKïÈIF§)\"=âÝæTžàÈ5âÐ‹êF5àÖ1¤1Ãb\rÀÞ";break;case"it":$g="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,´ìu7ÅÁFø‰œÒn0ÈDèÁÐÂbÈ%²Òe|Îu0‚Š§;Î`u°O”ÚRi67h§:M.ƒP©Uæ‚ZT4œ0Q¨öé“°›ç[õRÆuŠDADC\rš  ®\\JgH‰¸Îh2‚ˆUø¤R2çˆæS|SXi¸Ûj{r\n)™NGnUË;±(NŽgzá“G¥³Î¶\$äW.c0ž°a¾½%8r§&îöÄ¬i9Ü\r†“Ñê`dÒí½ÿÓì†5Œàè®\"hÞ2\r(óÀÏ‚Ì@ÐD˜,ËBö¸‰ÊÀìŒ#c*f­B0J\$ƒŒ\0Ä<ª€HKÄê¢ä¤H¸ˆËÄdÀBÎ3ŽC(Îð¼hs”ð+j¸Ü8Ž­ˆž9A\0%(ª4‹<‰’Vò/\rxÊúÂ‹èßÆíŒj½„ªš”Œ#rÞÍ#\"0)Š\"drÎ#\nøÇÃòøÂ84K Ø;@°<E¿«µPPš1¶8‡¦	MÕQóîìT8 ˆÁ©¼	#hà®Aâ#@8!Ô„Ê³­+\nìŽm%KUŒbÀ.#cX©Kl*\rãZ*b˜¤#)É-\0ùÍÁp@Ü+ðj`6&4¯£\nZ¹¥M0Ê3ÍÌìžøŒc¢9ëbCX§l&2ÃiXÇ¡Î¥m*ªä]o0ŒŒàÂ_Nê,‰Iªb‘CWmR2ÊoûdÁê4–‰©Ò¨9ƒ¤êIŠ€ðÉG£%œ&Dz3¡Ð:ƒ€t…ã¾t`ƒj¾åÊàÎ¢º ð¿&© ^UcÎÜæ\"øÅj\rÃXDT#‚A‡xÂ0a|4@ó*0œØAW½SK¼–×ºEåŒOŠ‹¼Û	×Zðû­)\núŠé,@(	‚:Žä³1ABŒ¦#FÀŒJ‚q,ÁQ\r6p å#£7|Œ-¼ˆ\$*7.7ó(Ëó8ž)Š–p¤4à£•òÌ2íFõ¨˜Ç¹ Ó@a÷0Ü-ã”€›°ih²7Ž·,Òq`ß‚_Q0Ò3„€˜ )¶@#\nœ4ÛµTU&Ô:#¨ Ú†9N`ä–´”5cŒY}Æ\$þUƒ~>lø°rZŒÚ¸uÏèØ¨ðÊLsp^\0Ü¹™	]KÄcj¾Ï™Èq‰|+§êC˜:l/™¿—÷ á1FNft‰uÊoC,*†A7¡tÂ‚¢¬/g†2¨u‚,6ˆå“`ä“‚š•8ñEI¿Æ4Ä›É;od™ï­¢\r1|ö\0¥Í’O	À€*…\0ˆB EQ¨@Š,q,pâ½ Ü“‹!d\$@‰›’	Š_	‰dØ%Èæ¹ú,%pÁ7S(WÉY¶‡µ<ÄÂ¼–La5‰|)ª2¦¤C©È”ÆšO›rd†ÓWñ	j&¸ü“‚HnA©D!\"\$Ú¥Ñ6ÁM¡ØæåWÇKè…	ÉàÓ(é\\¯|’¬ ó\nëOS:hôvsKkUmÈõÌezâ{·>*èÒ¥ðŒW	ÉZ\nOPËÆPŠsY×2ìL»œõxî¦‘\"U \$©®Šââ?EH”®›x¬Ha/O‚‡ òxKa ®“¾Ç×YØÀ%^†Z\"ÀˆÒ ‰&‹QŠ4Qhcß6µüKbÉñ\$«šN&Ò0~B>¡¥’ÚEh»v-ëö’UÑ×e#¨ô²¤«–bžS‡]+­‰RZ–C«›;Ä`¦@ÚÃ!Hµd0éB/ÒXuÈâø~À(+†PÅ\\e0t>¡*Ëc‡*¨‚¦óˆd=#œùØ2h\\”\\À((Sæ¯¥êƒBˆ	/Ä”=XÊ„J€µu­Ú\0ÃJå£n–´”i€¾	[—6ÂÌ=7ª!^Éñã”žÛ3Ø\n‡HÁp2ÿ\ne…@‹˜L	Êž¥Âç Ó]s“ýÐµç(ø§°Ie‡‰)Y'D,ðÈÝä¤QZ\0Ú¢a¬^¼Ô\r;ÀòÍN#âU *÷‘{\nt\\YôG¦mà/\$cÜ‚dXÁç´h¥Ì»0W¾_\r\"À—p6ÅGò`\ndŒKgØà“c\0Ëû½0v¿…0v¢á#Å•¿cë‹gÔlWÃ1(¥àaÈŠWBÑcˆ¨¥—*­ùžáK5[Â`\"eÆy™Æ~¹r”ñ`ôÂ„Ñä¨iµ÷9VzÝ²v(Ý1KTÐåR¨Kgz=š€‚kZÕ}ÀVqšažj†Z/“žxÏYÏ:ã|ð.Ž=–%§ÓNFŠ™´¢Diz¡Âw›h™8dì²È“Ow´£~Òëä¼a¢»ì³ÃŒä¼ ‚}¤KÕðÁ2üÚ˜¶Ðyó:gëÙyÉ€o™\rÖ\0ÚåKŠ:“æ¹Íh¢â~Í6€¾\$·hdLï¶®I¾Ñ{»	N¯'Ä6ÅfÒ·Ï{A´±ëpÜ\$cC1)™/×¥cŸ…CuªŒ³Ë?ŽyðÛ8Çà!!nµÉÔyé•÷‹Ù“+î‹×Ã4^†‹Û½†dlx¡0O½u;’ã·x¶¸H;wñÔmÍÉ\$¡Ð<ž–AuÆÖÆqxäóÿÄ 8eæ×»^¾2ý9ÞóV=Èa™.e©ù™3g?;c6%Ñiúß“Øü¾—£·kç©—Ot{bëº³\n3ÛtËôn¥Ò;šìFÄ*M—AÂqÇm{óká^ãÛ™Y³**oM­çßNjK6¶wz…^™Ü+†ÑÜ;ÄôÎô	Ñ°:Ü@è©“ÊÚD¡–®fÊ\0Ímƒ<q€ùâñ‰hCÅÆ„öÌY‹¹cïÈÉ*8Dg\\#©¦\$úê‡SÍ#)QsÜÎßvƒ½é%÷ö³]Í`laŒù†0×`µ*Ë 8ºÙ äö³‡\r¤¡ø‰ F à¨Aukª6j£ÏµÅÒ/EC}ïôq—)é:¿JT\$bJ\$å|Aé˜šãpZŒáÂä.†Ô#ƒæœNœoºBeò ¢¦#´¨«(´è–²Ã.8ãÊ`‚Ü%Ç¶D«Þ_%^J>9B0÷@¢\\¸©h]âHÓOö!‚®+*oeV¼ðl^ÉN1G\$\rð†_íæú±0…%Ì2P{	0\0Lðn@üé­È_ëÌ\$€·˜DÀÊXgY#èbƒ£NA£†H@äAcØˆp”ˆe¿Ä°5É?å\n‘LDKL]Iô0Cæ-Dvä´ƒ Â C@ŽgŒgÉ\"À>i‡‚, „.•Ì5PvAéKÃLõËÂé,ƒm¾‡ åä’æ+(8™ ‚L¤<Ã.B¥ø+@	\0t	 š@¦\n`";break;case"ja":$g="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<sªW@§*TCL#‰i\$\nAGÑS‹,íÆ€A…€§B¡\0èU'NEêýÎ”TFÐ(H2j?wEÁ•ÎdZ…Ê¼Z¹•0\$öMŒ_Á”pe4PA£Ù:Î©«Qî¨c™/)@ªëuÚý†ø™ªkPsÚa\0M9×Ê—*y=J¬+iyê]JæLà\\Éd?mÊˆîG{Ú\rUT› åh4Dq_rAVºÑ´â>U#‰èŽN«¯#åÊ8D*„;ðÔhc—œåA\\t”,R>¦Bd ä¿±ÊHª¡#¾Ë‘DÁ°z9	9…Ê¨—E‚®Y§¥ps–Î‰4Ê8(äi7DpŽAÐ™_§¥9t¨I£…+ðI(\$IÌM–‹„Tº+	],ËréÒP§96W3La8sùÎ[•I6C\"C @õ*ðaÒ@—1Å\$±Ds; TìCDpaÌR‡9hQ1eÙvs„{øÓC³ñ2FÌóÃÎ[RD\"zò<ÏC4t’¥»d¶d¬ÜÃ¨Ø6 Â1\rƒ(@9ŒcÜ\nbˆ˜–há<ŽY1]@g9*÷Ð¬ÉM…ù:áÅ²T!E°RKRãùI|:OL—5Ãu&\$<tåéÊEJG4(_%ARt“0ünŽ±TŽbY/C³”IMÓ†AÉ.e¾üFW|UBP6ƒ”fÈ‰IåA‡!pFœÅkV@•B¦)Ð[ðûÈËùrÕ\0@Û)\nÖ5ÍƒdƒTÒH”#ùCø]¥Hý\\A¨vMÄŸ7¼ èd[kèÄg¤Zƒå©#š«4Ÿø óÁÄ\nÀiQ®ƒÍE£¯h¤c±i^W–åð]¥È±Àš0Žc Ê9‡9Žãxå=£Àà4ŽC(ÈàÂ\rèÌ„C@è:Ð^Žýˆ\\0ŒƒhÒ7qáw,3…ã(ÝÞpÜ9#~W#ä3Œ£§P/×–ÖÂHÚ8W£o|:xÂ6¡´:\r|ô:\rÿÂ5×ÃHéÈñãm…í…Éë:Ï´-ÐÒ®È2ò ‹Ùc'\$ì\0[÷4ˆÒÒ\"\n‰&fð¶cæ}D)lâ±‚î×Òd,Äðè#¨#Å{û4ÌÀŸ„G\rÁ«C¤•¨„ˆ\$‡@¶€'Ö5Ñ>ÎŠŠ{\\C”Q_5íù£™6uBxS\n‰!Â‚MD	7\$0@ˆãŽÎ¢¢ÞCe4A¢L9E„K6q,†%¬\"ß	…§B3Âø²ßbK}oíŒÞAÁ\rÀ€:½€Þí£A¤3‚Š\0f\r*ô`ÒèÂ0T\n\$7' ÒõÜ³ï}ÒD9ðÚ¯Üxvw.	–2âá˜©bé)Œ±D\\„XÄg\")€6ºYŒ,YË•ÄŸÔ\nƒoq)°ÇÃÆ,@¦‰pÒX¤¹‹-\r8½MéÄªÔhÔ¹eFS\nrØ¹!°\nâ([a\nuÊŠ|IGùª,Â&§‹?(Ã=ßÑ¥6¬Ïr£:„(§Qª„r‹¥4G‹\r\$‹2«ÐÆãƒ!l—rôª8b< ÅcQMLR®r>¼Tê†xE5´8i;0„þ—‚ô_!çÃ¤A–ÒL(E\n\"†PàÂp \n¡@\"¨j=I&Zž[B#D£”Gˆ(mV‹aûUŠ¹±AQÅpš0“HèQ\0)âÍ@K5/Eì¾ŠpG^^”,”Ò­@¢	~‰žs¸¤…Ÿ³©IØ£4»RéSˆÄþ!˜,š‰ôœë•.×êyO©Bâ®ËÝ)3cÜGé	Ë*‡ÖÓˆ+RLS£¯q®²8|k¢g'äþSãïLS¥°C‹¥î&Ë`½±\"ò‡•„: Vaü)Jº-Ö,ˆQÎ\\LFnû~X-:LD~ð\nš€	SÑ‡òïÛ£˜–\rêos\0ƒCózòˆs¡._6öDH¦‘l™‘³V[9EtÕÿÀE/ÅÞ¼—º3ßX¯ ÀZõÃŠUØ{Lƒsy\"Ì<nJA%¼pfÌâD;Ä`ç¥mhš³ø‡‰ë¼X¬áÀÃ(bŒhw‚Šh'ÈåÖ!ãì& ï5âLb€Z(Ò²9D\noªS'å`›¿ b sŠBÖ9E‰ß©tsa9Dp»2Qq­ŠdæSºŠM	©6D:6&eö¿ùé4¦²L™f}þ‡ÄH9¦}ŸDæ‚ü¶¥i ô–”´–?H\0ÐeP \rÏ¤8 Ó%•ëÌjåôÈPÈ\\r¹\r§U«¥x_ªÙ[epÅ­£‡2Ñà™G•¨)ênõî»<GÛ\$¤9sýp°tH¬géy 4TÁa‹Å‡G[9¶o®Û.y1ˆM¦%¸0Öâl:°dö­=8ƒ¶«Ä¸ˆ#WHÛMÑ¶ˆ«zïv¦ÕQ6ü#ûû|¤jÁ[«…ˆ±×ïoé}Â…á³LgîÃ@úÆl ‘lD„`X]ie5ÑŒºÚú¾m©‡ÇåÄØLUkh~A¡æ˜RÚ1ržCv÷2qÝÎjË>n¸øn‚Ñ|žkseÃ¹fÛ¦þÛmi{Îé7L^+.Ñ/[IÔ×Mè	—¨Q\"/-Å,%R/¡nÒÇ_ Ë&Ìzi§ëœ;mYê{LRRXÚ=tRS¾ïÔ¶÷sè]×¾Ùþñ{îáëî›†ÉK‘O¬±³n&5T JÐ.âc¢iC­YDíÈƒ#oC\0)Á~nËÙœßåÅ_6eß—þÏÏK±Ã+Å® èË¿¦¥ø:–xŸ_¼>êaÖm2Õˆ:µ³iPA¥nód:ÇÓ°?_½ø½ÒG>§ÖñçÅx?ö¾ªWñ4k‘÷ÎƒÉw‰ýß7õ­QÊ“§PµC]'Ìá¡61B\0007¤â¡|.áV×E¸.«žaNpé.ÈENÎjÎ¶]ËœìÐ é\$QE†Ë¿‹\"ƒ†êjc˜ž†^LpEÅ;\$Úü‰»£ñ_Dàœá?fÐIAcÐïOÚûÉ„ß}LÙÎ±Ã™ëw/±ƒùÂ?	Æ¬+!\ncñ\nÄýb89C˜9Ã–„£¦@ÎDéð¥äB9êÒ„ÐÌêªîoïÌûá?NÁ\r°Ê:Ð³\rK³\rƒ£aÄµ«_í±\r1\n¥ñîKûKY„¯	Q A\\.NWkML¤ýcÀE\n'‚®º„»Ã\r¥°×ÐGÃš›0\$	\r=pHÂz_ÆÜM¡vTÑr_æ±áÌÚ‡ƒ¸Â0HpæÊèã>åFïôÿ‚ã\r#òiD:G0¡*\n3ñ£oúO(„Ò\$¸Ñ0¤fB\r€V`Ø\r Æ\r`@xÉ’ Â\r€êWÇÐ|GÌ\r Ì @}ÇêÉ&WÀÚ§\0Ä}©\n ¨ÀZ\0@wÀÇ Üçê¿ô\$ç`†û*\"ÛÈ™<ô´ÁâÎ@›±ÿ…²0,îQj;~RbNâÀ¢¨2Éæ'¢C	‰ŽR„‘\0ÚrÅ|Õåt-\nÌjÌÁ8ùMÈd ê\rÅ‚qÒ@°«&ÁNaÊV2ºÚŒBÀâ8‘1ng\$-Ç+í¡rØ@¨WezÕm>Ô2wÑæ\0è“àÒG<~­§\$DÂ¼Â°Nh˜†®R'(Ü·° Þ<IjÆ±‹–³.-(Ì‹*f7¥\nÀÂ`ê Û'Á\0Oã¨Šþ<á\r*f&º(bV·…²Lc§.€å+2¶ª°ÒÄÙ1nP\\\n`P1,EbRÃ,kYÒ°P™\n°€ê0~?¯¶^!V'¡<ªÓãÎÎQ>S\\B0@";break;case"ko":$g="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú\r‰ÖŠL‰´ƒ­=qv¡kGZá)ZZgÐ²ä–\\;ËK’	XìM*dP‡Z\nFƒ&Rµõ(‚ °·©e1ìvASb€+aNÄÂ’¦s«Ñ0§Z½qO\"0V¼&7‘¯¤#ÊÞaÚ˜JÜ‘\n¾\rÉX!Nµf%<v%ñ•§bŸ¤ëB@‘X”Ú1ÛNƒrYû§’ëU*eÉÞš5aZv¡4Þâ+\\ã³d[èv‰dé+€ë¶…3¾\\‡Y`@e‘ã—«îN–Ëö‡CˆyHé¥çQnÄ“°ËX@E«P'a8^%ÉœkEÉÖû?Ó×…	`é–e£>e™\0†©ôÚ/ÒD•&2ekàTÉ9˜”ŒúDG1%9\"ŒŒ’A`¿Ã‡kÆ¹…ÚA¾ˆ9Pv'”Äƒ²Ha\0vdK¦U	‰@¹8‡Y@V.D»TD”!8³I®£¬ì;I2r¨EÚÏÂ0ê6\r\0è0ŒC`ÊcÂ7B˜¢&IRZP+“®u‘äÉØS§T'D»eöO°Ô{¿­t“%–RlDvE!ÖS‘•™g?Ö…¥j#Å±)_û!=e³ÌJÑ·ØP6ídº¨¾¨(é/+ÚúJK2Ù'wÈqÜ7¿P¬@¯?Ë•³hÚi	7N\0PØ:Q\"¬Ä\"æAÖÄÃà]d‚f!ŠbŒƒÓqXÒB…JKá¯iAÕ9÷rƒâ„®,Mã#B²éTß´èCRÕµª|vhÉÖQ‘™J–gËQ™é\n3ã±´KŠE Pš0Žc Ê9†È9Žãxå2Œ£Àà4ŽC(É”‡ƒ@4n£0z\r è8Ax^;ñpÂ2\r£HÝ³…ÛpÎŒ£w(<lÃpæ4ü°EQ#Î2Ž›ø¿RÕcXD	#háS\r¼¨èã|×„ˆè4\ró(è7÷#×S#¦Ó³µ_d¶³Lã<¨´-™.¢RØ\n@ Ì³v @*MÀ<'asKÜ7K\"<³·~½ÖâÒð›Bƒ¦jB”¦ ðŠdMØÐ¥„x¡f/ºz¦ ñ×\0’Apb˜Çµ†jÒ^ÀO\naQ\$#ÄÒ~Ÿà-b°­žqzõŒ\$_èx¦”÷¡`¤bÈpu@eÂÌÑ–ö5<kAd7‡P@ªƒp ®¼7¸°@ÞƒiàW+\0ÌU0 Á¥½`¨öÕZe\r.¹·<gŠ0r\ráµT6pìäØªcŒz,v²Jù-ŒÞ0ˆOô€h\$Õ\n9_‰½_ÑØþH¥jo­]š(ø0Ÿ¬‹ƒñý‚,¤´—ðí^hÕ¥Ÿåb|…	ôYiÐ¸§Á›ÔiTIu’¢¨Ù{cµæ½â¨Ä‘À F½B	U¢ªPŠ´2ª`ÆÙƒ!ª6L#S<,Èp¹0…©c›ù`ël©Ç¤õ	é¼kC°L‹Ö-ŸâÑ˜³ðœ¨P*Yë=Â E	~¬<‡ š%!±X|)\"=J`­&Èvq[Ðbá_	\"ä/D ë\"a5\"¥¼¸ƒ%Éi[!§b:H²…'Ð‚ü°)H‰\$È©£±bˆ–²T‚’°TÞ³úDZåÊvÎùã#ä'Wô–	”ølHU†¥HvU%ÂŠÑh¬K2¼§6^’YrF^t˜\nŠ€ªb vˆ³·B‘âGQõãLpZrûKÃ°_£H€ft. •2©Âåaj¬‚#Êl‚Hˆ:™MŒ Ä¥5›e§Kò²‚\$ƒ“iXûzø¢\n\\ÎyÖ¬Õ„°Ô>Z;A\n']£6\$œ	Š%	C·‡d–’òbt)wk¤ìÀ«BoP\"bÂ\\ì [&@ˆ \n\ná”1>K¤A®—äŒ¬V…n¬H¥2ê]f™\n¸)‰Ý«æ¶Å/’\$TyÏQ&¨ÇM%Ö£O‚dØv¦º˜È:V>&ŽB_ûoÒªW4júŸˆ´Ü%®u¸(2Ëá!:Ð„½8>ÌÜD'¨ŒDˆÁ 0Æð@ž\0pA¦-ªgFÕÀ‰a0¶eDN8Tj”2´¥„g\"Ã¥ŠhÅ„0U¸µÇ|’g2dØePìN’[¨·Vú¿Á²'/býƒÓÄ^dÓdÐJ–ZLÍf÷6—ÌÏ‡ì;øggUïAËâQ%üïzê}Ú†z ¼MÓ\n=ÐTt¹SÑOäÎ6Zö•¥´Áÿ=Gd­‚Š(‡N•Ð'~¾0'l–cúvË½y5£¼ŽRÚ„ÃÔÎ:…ñ‰ÏzycI½s¬4ÔŸ_w7bkt=±Ñ’Ób÷9µ­«˜@Zké~MÅ´ÂuŽiÁÚÒçÎ¹Ç¸!…^Ú­+s­M¥g¶¦äÃU0ÄÍ£§\\ë©^Ïb¶n²§clæxÚ{¯zTâÂ!„†«|˜ðm¿¦·‡©³ÃƒÕó³5­Ð.‰\$Û¡!’\n\\®%{è¦+…tIßÄu“gº¸ÃY @•>QîSŽÛðG…Ýä£/Óº|ˆ§g%Õ¢Áñ¤¼X9^¼Ç™â^ÅÖe™U*¡¬ÁJ+AŸÝë_‚u˜_ ÷†ë´Ï¯ñ}‡Æv°·*[nPV¾Ã¬óæ%à{ËvÍ—Ù÷+7ÞOemÓV'“ìDµ¨wÅ¤…ªc‚Äƒ	¶…‘Ö&÷®•Û<¥æŸäÊÞÓò[çÊ¯å+5ßš5k\n ¬Ó&œÉÇH~’÷ß,,) ™'5Áé Þ™|*pÃž;}ÆÑÝ9„@pÅtzÞrî;ãÝoEïþ¦îÝù\n›1Èå¹ãYpÏ«õÎ&»ö‚wn¯–ü¾ù×8oÓ– /J³¿IÂûÏí~ï§(jÍÀ†ÚÇÞªô4 ëÎÎòªÐª/ˆÿð«oÞ«	Ý\0/TöÅ|A\nð¯JüAoäíð2úÏÔôOã`l€ÐnÏ6®ÅÊ\\älž²QÔ\\ÎRnNjˆL‚”b^”®,WÃ6Â<ðfžKk˜ï\ræI!j¿âä:ßãÖz0€ð«²L( .î'®f \r€V`Ø\r Æ\r`@s¨ž‹@Â\r€êTç~w'z\r Ì @x¢‚È°TàÚ¦Ê\0Äxˆ’\n ¨ÀZ\0@r Ç\r Üì6à\ntÏÔ]‚<\"þíÚ¦¬ìÍçÈa‰&&¨\00001\$lPÛ\rãÖ„–eèÀÄÄïŠÈ¬L\nL,Ã.+ÂÈï‡ÚBNOÀ˜‰ ÈÊ èœ\r¦ÜTìxTdþÀLœNˆ€î¤ÍÃFb\0ê\rÅTlÏÿ…îÁ0Â%:ÏÌîÎgãÚ±“¬ÐÍP\nk@¨T…LÇXÅÐör°Æ\0èŒ`ÒFílÌ[èIÔØ¨ü3ÁdOdúÐcºÕˆV?GžS-*Í.¨\rN;a.1á8Pk\nÀÂ`ê Ú.B’]i_¦ÏN'šl0Œ¬ \n€å±ž£¦ (ã®†Ú	%íxW-TäÄ‰Å!O€÷\$F6J0¾Gæ²c AžIÞ€t#á";break;case"lt":$g="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF%!Š¡b#M&Q¼äi3šMÒÊ9ˆ—ˆ\r†SqÒ6ib¬ä‚\0Q.XbªŒ'S!¾;¹ÝMf›0€ìi²1¢B„@p6Wã¦ëBÎrsžÏåôJ1Î‘J¦ŠÆ‘ÒíJ´ˆ#±H(¦k‚TjzR!„èaÂ¬PMD4¨e”ká¤C±”Ôe×Ö¦À¨¸Öl®‘Ì¦óo¯KÓ` tø&šŽe•éŒ§-í^›ÎçépÒŸ á¯b¯ó]Ý'šnÐÜUðQC¼i5MÆ{¹B€ÏÉsû¿/ÚT®ˆ#¢®ã#¡\0È÷,Ž¤õ0k,9£Xèb•c“\nC(È0ŒêL; ƒÐÉÄ1J»#ËÊ˜„Êð:¼h¹^é”*ì[DÍ(J2‚ø 2Š‚è\$“\"HÐÙfA0\\4ÒˆÏÐÖ1¿z Œã’ˆ0ËŽ€’2©èªî¿Žc¨å #L‚%oJ¾5%H°éM@&%R;lÜ2È°Ò6+.øÊ€ŽiZ,ƒcD0ŒK1Œ#sL(‰\0êô¸ë˜æª#«<	#pÇ1=ã ×\r1å\n´¬-F:Œñ„AH„>så­´[,cÐìCâœ37BÖU˜BB%€øŒ/™.—Ù6[²û\r+úÆ¬Rð\$£‚¬ÝB*Qu3³œ5ÚŠÈ³11´æ,–Å´[®Â¨×JËº97Á)L\nþ4¨zÌ›+Rj^!ŠbŒÑ\rèÒ¶È2™¯kêR´Øèú¬6ËÕýøÆ%õ@Ô3¬H%C‰{]…?C;2„r’†:ùC íaM\n\"ä #ÍÑMÈðÅA¨ÆÝ\$‚˜Ë…e2hØ4©P:_#gVØÒpã/™ãž®w*I‡XØŠ<8@™Ìó•=ãÎ†“2ÎÛ cº­\"£Àà4ÌC&È6DÄ3¡Ð:ƒ€t…ã¿4# Ú­;ar¬3…ë'J<,ÃrR7ÁxEIŽC;È‹ô­25„AõÐÄ;¸xŒ!ó9£ Ðõã\"OµŒ;¶•¨K.Þ¯¬,C4ëŠòÀØ(Hòþ²PÊ~ÿ¤\"£kB(	ƒÄ’ì[	ÐR’\nÜBŸ\n¨RQ¥©zÆ¬OIS|Æ8ËPØ9¡/fà›6CüMI«h/¤è’üˆÕÃe	áL*7…úZÎN¢ø­2x¾Ï|\n0¬Œ8\\ü„­¥—ºÀÌVáL¬¥Ÿc\\ÒŒ\$d7‡P@¦rž1½ÎÂäŠV!\nœ#êžó`‚£êcæt®³óC0r9„0íÖÞp‰û6¢¤µ´I³+_Å|—‘¶œK*^‚¥ÄBTnX‹Íz¶ÄqdsFÇØ7†6®hC™Ò'P†„²´kÜù¾4¡	š–B¨N‹ñÛaA„<8lŸCêzÏ´­BÒt}[©ûF¤¼Ô—,cÓøy+&1G'õîÙÚ,aŒ³Cë\$Ñë[,¦••´q%Í(SZGe¸1Ô¥Öñ™	ÏPØ„xZI I)åXá@@@ÐÑÕhòèáKÙšÛJÒ™UÓˆP ©âYM1H€åœ‹QZôÇ o17ùÿ;Jé\0\"\$4\$¨ƒ†‰q¯(ê¢SÃltoíižª`òûÅZ-•šòCW+•Œ¼¾!ø,ŸHÛQåùû\nÒ}NÙ#„xô€ò¦ñÔ™EÜÍ†”TWBd¿}“æ@†·CpdP”U^\"ôVª‘(%À(bŠXû²Œ95ÕcKJ^¹„œh.Î€è‡Â¡WvE\\êÖŠW=«™˜ê¿ÑÒ¬zÊ¢îkÁvOCz±Ô{'5ÅvFHàÉW0ÄÄL½XâÞO\"Ï3¯xÎã<øKiO*KŠPe éoL„’­iÔ\r)=Mô¦m2¢›¢¾Ê3_žYG6ÁÚã mÀ¾T\$ºÝÛ×ñpÑG#×@]r-ÍÌGW:ß¶[ƒ‰Í¬¸¥>p=¢ÃoNa¡S÷*Ó‡;Ê’¯]ËTwlŠ[â™m/íe\$bîG«ñvoqŽ¿—Öç™¬]Éò‡\"Äb	v·/pHl480¯à÷òaZ™@œ/ˆ9ÆS¶öpÃ%í¯Ì>ð0k·Äx(u›DT¦+\r^y2ûGEP¢\r#¡¯DGC)Ï*––+Ev‹’\r4M¤6É]\\FSç±eÃ@+&ÜfÿtaóCÊ²RP&Õègrž[9\"D`ÐD™ànŸ¥]qF®òC¨pDeõãe&¥C.*Ý\\—yéŸóˆ4RÍ¸”HD‰RÍÑís”ýUÍ•±Ìh5×]êJ3}þ¡Is3¦WÁ_ÊëßËí5¨²òÐÓõ*Oç;Bj| 5<Ó°äe•¥%šÕÄ3uM>½1“ô‰jùx”Xk£ÑsÕ¦Üîùœ;8”'©lWBœú©ÙØ(u\nf=Øç¶9,%³¨£±´ÓÑÁkîe´óŽæÆÔ¶^6¬1.C,ÖóÝ²{‘±©d%›ƒÒa£i¥6täÉÝfši›\rS˜¯\rÔw	ú`zÏ¬t9¹¸¦^k•·ö¤Ã@&Æ¢.5}1UÏãÚJsr¥uù-C¼o”ÝÛ©26Ñ33Òr2ÉÎIÍ×	%šy¡óÄ«sùåÙg=sÞ‘ÐÏj•r¯S½†lMb8Ksmr^R\nºEjyS‘;›Íod”L¨Ï ,û\räß´ÎÂÓÅZ\r™ÅÔ¥´º±Tñ²\rë»ã(QÒMèä¿¤ÖÛ+wº2Ô\"^cïþ.¬kOq©Õê¢ÔxëÎšÇý\n¡å?EÔwÎSà(¢µ©d¬¦v\":w)e«&E=— \$žÃÜ-ÏRÐë.IÀp°WšmòG¾z>Îv\0•CüØ\n¡nÉžß@­‹ž}âò7“s?IÂù'éz—ðýî¤fB^¤Å‰i2ÚŒ•ÐÜæHyjz¿Öq¿oõøÿÇŒ¡Ô>ïè€)xÚÊ;CPûì¤j£páÏSPüoÐýHÈ…ôËä,7\nàÚï>öŽ¦¡OQÌ¦ý+¤ë àÅð,ì‰lÒÂ°Ãð6áOj\$Šãc¼ân˜8Šåñ‡FJ¯¶¯Oì4PnCÏŠ	ƒh+¯x/c¾³£ÄÂì ÒïM	‹>&E€ðÆlc5\nC0÷Ðt\$Šº\r(ÂDËãº oŒaä®J„6G¤2.ä”n¸Tb‚TÂ\r®G\rðÈTb<gÄ.d®ºðñ#Cê\"H´GXNd”mdØÅ\n!°Ú¬ï@åkÆG«Ž?Ï-‹ªlnInn¼‚Ô@†A@Ø`Æk`ÆÇ‡X‰ÄP%¦xTæP& Ì(¾'¨¨xŠ\"H¦Ô‰ ª\n€Œ pÆeT=f\"\$‘?Ät§K~¶ŽXù2¦19ì'â8›@Ê# 9ƒ``ˆü^ÍN˜ ›‘fD\0ò)ãVM¬Â*Â¾Dg>œêªÉ\$Ä¢áB£!2Âô†‘ÒÑP¯ÈÄõÈ*%ÃÌ8j^ŠÀOè˜‚ Ï!šeÄAËDØ\$ÄH¢JÕ…¶H êÇÂž¥>ž©.MLòhê§*c\$@˜æ\"§?#>hrV}Zèhòh`¨R‚Æ%ìÎ7±t,€@\rãÎP ôDBI&j4ÐDP¨ÄF4¤ÎM%|‘#òRXµCÀÖc†Þ‰ÛÃ†U*²e¡ÂÂm#Â^{ã<úq7 Æ ê\r 	ò†sò,W@‚+f·.£úVš	Ž8 æÈÀ©\$#?²P§dt¥ŠÞ0r¤I0âî¤’^^Cp\\Ð\0(n6¢MÌrˆÇÈ Dbà@";break;case"nl":$g="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9©²gÎF“9¤Ý6ˆð,šFl³MSR¡„Ãq¹˜ŽGSI®äeÁa\$#ÚO7›#–1”ñD9×Žcª¡Î±Z”Q¤·èÊdÏañ8Xm(Ë23[,5\\6e*<œ\$˜y5âf\n\"Pç™[¬|È\n*Bä ¢¸ÂiÓ#–	œX;Ãp×3y¶k2‚‰‘ù.ÿƒv0œä‡Ÿ)”Ú\n)ÃNÐÝVXr9›¯Þò¹„Æ4ƒºš98ï8Â1=/’7%ã;&æ#ÃR(¿\rÈã¼68ë›¨7*oRÌ1¥m0Üä)ª*JÁÄ¨ê9B²¼;„ àô½Qú»Æ)<f9Æ Pœ¯±€Ò•½êË²90Á*R1)X%\$Rkv%³@PŒ:Ñª*)Ëû~-'èdF7¾c’þø-Q~ ŒÉ{t”9ƒ+u\$9R¼ŒéX ËMÜ®¼%P:ÌŠŒi;à(‰\0Þ8“3þ:Oc¨è7„rxï-pªÓ7·ôXæ¡PÐ4õG#twŠoûÜ0„º>=-ýRƒµek18\nÐ• Â\nC-ß‰#há4¡­øŠ<Xã’VúFèíK[·ã%uQ¼#UZC\\ª6‘`«!Á°z0 Œ‹`@!ŠbŒŸLAp@+5£¤T9 È@Ìµ'hòE\nèË ¦·ér¦n’IPã\"jøÇŒÐ@ XJ8ÿƒKæÛ!(úô*ÆV\"–*Lj7,ç>x ª+ªY„/W:;t£·:c+ç&©»Ë|TðÊÙŽƒ_y•`ÐÓÁèE\0ƒ€t…ã¾´&#jÜ†…ËPÎ¦{#.ê+^P#’8:jBøÄ¡\rÃXDX©sÜ™Žà^0‡Ìî&\rzSIâc\n¨ sj·Ã¢j¹á,³0¯0ø¶oX„€(iºHÑ?ì,0ßBªè)ÂtáÂîMa)LÂòWšÂ£lêj(	â˜¨ÚÉ2¢©ª\nZ›ÜÞ’BÌ·\r¿Ÿ.8Ò”øµ`ÞŠL½àÏè¥Š¨@1¬MˆÏ¨jòj,è-\n¢Ž©r`”ÕƒÔ)ÑcAŽÃMX‚£ +eEc&—þŠa==AÉ2“Vl†ãÙ[ÕQ ’¦™Upj&H\n-ux‡–jDhý—£P\n\n01°³È¤³¨ÅÝYeìEŸe3!”Î>#¼@Üó rÍ¡ð‘`‚IÐ³7F!°Í™ÐÌ‰Bc'…h›äF|Pù+8ï6Á³~óYyÙŠëm_Àöp¯U[“.€€µ†¢È•‹Pe-…†ÀùÃé,D\\'\0ª A\n>\0ˆB`E`(%™º~ƒ	ï\n¢H±På\$xT7'„&4òxBxpŠdX)”…¬ê	Hw/ÈßÅ\0ÚwœŒ«E¦DÉ›u&Ï‰úæ\r¯x‹†Ö‹Hl]Y(Pîr9‘’8÷ ²d!cš#C~Šb#„ü¸ÄuM5‘FŽ1ÌGU¦âøT-h8Öœ‰ÖGÂZˆŒ(×ß™n0Ë-fÂ Á‹	ôœAÉZ”8U\rz+7aŸ‡B,©Š_óÊtNÚ@Þ€q¤4<‘SR}#æü(Ñ°äH\"C,ýÂ©HƒS\nLÎ)É\0šKG)Ht¥fÚ—%Úæ©˜krNd¢¨µ	0„¨PDMR…§Ì:†8ZËl§4îRAT©:ªµ^¬Õ¹pm§úC©Ó\\Ð—âKÉl4eø?*âQY-K#‹h4N„0MaŠ&>GÐ€(™M¦‰Åf¹ÖêÕK!ª‹Mäˆ¿ª.‚+uZKíI0•&ä=|+ÄÈ®‘`®T‘èA7ÅL‘¤upR#&S\n\0«`{•)GuÛ†×Å-éÛ\r/„þ€ ÷ØAkë-\rÊP8·úY«Ù>%¯–@ÐÉK±fÁÁO¡B/wEa)–\r”k\\¬ƒýSR†î’z])äº¬–÷/Ì0æB8ƒÞÚÅ[rœMC¿ÈQê„_&Hl“\0*O5øTêË,S\r€`õœÒ¬“ÂñMJŸ°eDÑ™÷þÝ“YœeÁº™d¼ž‚„ðJÁJ>ÃÐUR_¸4m éèT„K“ðÚÃ•Î:%˜UÓLr®Õ&DÄ¹\$d2O<Ï„d¶VÓ +5Wè.Ê*ù…A•ap«Ht­sÒ„JYªpd§´Â™`jk\nÃ|-ÌÇF½Vz[Kãe#(³Ã7Zƒ<t´£A¼Ÿç\$æÉX?N=9tXÏ§2l‚Óˆôfàk™’Á‰“òˆcLy„(6cnöqI,V¨7RåþÅk-ØŒ‘š3¢ß\nÓD*:i·+x—Æ°¦Dt¡Y	Þ6µ\$ÄŸF»}NÜ.Ó)æ•»ñ#qa>¬è>b£\rIl/Êwó mÝ%‘‘nâ¢Šâ†7ÅZÇ4.8³7w´}¿P÷k‘Þ¯Ò\$d\\µ¾HÕG‹+zn¸k„‚“Ø×¬”ã*‘2€¦†–yAó	:;ÆÚçå™÷»¿Ì¼ƒ~åš†•ÒÎàH÷q¬7øáK	ös«Ž[œù~PX+ÚKê“àj’Y%œs*ô\n7Ð·>Z>=åÕ^[:/L%™yXÅ~ŒLúnP“Fëqã{û&úNìQõ²YÖ§zÿè…ó´Ïû’çQlž‡¶w*&Ž§îîÝ¸ŒÑSN\0¢'ß®èhÔjÈg|·Z3Áøžèaëès ç)Q|—Y3´-pµp”.o*uï…S_AB9‹\n\$ª.¡„JÞaiôJAIì²ã)l‘¿övÇÕä†{ŠŸ!‰ë„6°ÖG‰¸r«¨¢zLˆQ*%–´íFðŒT;\$¥˜Çà¨h88‘t¡Z¡›9)#ƒWÀU±˜u^§åô¹¯Ùû–}µ#h ‘òBÚj´*@Dð	§\r Ì£¥‚ŠDªú„è0#ì\$#n#Æê\0EÆìùÇÀú/˜Øâ ìˆÞ’bÚ?@T\nO@˜~n/\"bÓ£¢{ «\"ÌŒãLª…À4‹ò#¢òßg4,Â€È«oê(¤Ê%ÃHÜ€º¬mVÏbQb¼ÞP‚a0†ð°¤PGF¹/¦oX'@Ò!P	m~1¤^\"ÄÀó*ð(¨\$A+0B¬@Æt“ÄôÄàñ\$*OPà\nÈÚXôE£üECÞ”&2V¢<=Cè#ô\rƒØØÈž,EÂ21	ê™I:Û‚Â†*i ž\"ÇèP<'›\n™`à+ÄDçî¤”…TÌÂÌ»ëþCbT8À	\0@š	 t\n`¦";break;case"pl":$g="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I±Àë2‚ŒFSÐ€ôm4ÇD(íXèa±›&Â\0Q)ˆ™€šãG“<äzFó™êî :ÌO4˜”Èn2™åv\\ë\ne¿Âƒ¡B§UâW‚\nÉÒ·5'ˆòt£ãæ³(œu6æ&3Ö@D0Ûô‚\rá†2T2Î©ÓKY¦€rßáôQÊoÜVQ3JyæCÑ„Õ&0ÀAE<ÄÐä\n*â¶ý”ŒHãJMö¿MÈ7c@-'ÃxÎ:¼ã˜Ò»Àcà0­ºß £T(\rí¢b?î‹´:c êŽ„zâ4ÀkC4…³š#¼-EF)	®\n\$'>ˆääãÈ£#_\"c#Ð5€HK%O0è<ÉÒ„¤a–c¸8C#\nbÃ¨Ü5Œh  £ŒˆÃ2¬\"˜õ<ÀPÎò!ê0Ø¡¯Bœƒ\r@Rz6°±\n1¿nòÐ:7éHêÉ!,bå R\0<ÃrŽê\néàÂ3¨(bRÈ2H[29¶”°î-1ÄOµ‹zZ\nbˆ™3Žªp@\$Ã~ÜÔ@Þ:òÂþ<£‚²ÀFˆ|lô0ÄÌ9\0p“ŽvŠ\\à¾„²Ú£E¯D\nv²z:Yˆ;\0¾‚:ú¢K\\ù¾£\\±-	#l¸9Q*u{Ñ­´Y¯õTtL¬Oíž7]í¿-³#8Øb¯üú6;KØÙIru(pÈýèœ5¢\0†)ŠB0]X]RÀÅ(CÈæ”Œ,`Í £¨Ø0à2åL–¦ÔÎ.ÉTô²ì%Ú~‡è4Õ8 1¨0@7ŒY™E¨#œ*4¨A\0 \$\n	³Ø9JCNjÃX³@°<ÙÙóé 6ØÝÖ4ãéRiƒŒ¡†úUƒ/”µ¥\rÉ ŒéMçP%{?Áâ‚4Gã0z\r è8Ax^;ôpÂ2-€äH#8^8\rxÊ< ãt7ÁxEC8Ê:sbøÅÌa}\r7µ^Oà^0‡Êh9Ø€@ì¼l:¡µ®\rj\rŽÁjR–k+zRÔ-‰È@Ê²ìÊ>Ú˜¥ßNÈ,ßXÞËLÇóeëâƒKÉ‰3-*1 ŽJX¼]­õrÊ”L0…`ð\0RUÛéjAÂBîS3!¬Á›ÇpJÉé:SDýë#xŒ8pKÈ¢]ÉÑe3ÆQ³FŒ‰:ä†ˆ•®u¢ÊÑ¡[0­L1!a2Sœ<Z-ø:†\"Í\rÄÌ9,È©J½bŒƒ0i@äv†§«¡ØWnå¾»F×ˆLzäÀ^RÊÈã5)MA­#ÜÑ×Sù,¡*?éc›cÉ_Ž\0–†ÒlÆ›é½'Å4ÂuËƒA6G¥s-\0ÐY ê^Oy17ÓKëúY†# %ü°XeTÏZJÉ<wM*„¤y¢’¥SioDDd+¢ÖÊgC™œ*\r±£’ðÆõŠ‚\roí6R2ˆÊN=ª‰\"P’Y5(å@²ˆCHaT9˜‘‚{e\r/®¼¸Û¨ecŒy&¸äÑm}i!/2lÃ`uQ01–ï7) ’S…-uD@Pxd\$‘l´°‚5EÍ[§£e~R—pÆwqéTà;Š=JCÕ+Aätì‡%\"jƒ‚‰jê0¤yàag‘@MÒt8ÒI?,!,ìÞ°Â!ã<ÏƒAú<`ŸÌíYaÜu„…Õîk¡‘,“áV§xPE¨½)ªyÆ\\M­L¡!´ \0¥pI;—È¬çWˆT†(¹›bÍ¼Ÿ°†Q+Ú67õHó†ºo(aàS4ÄŸ&·óbØ“1²ŒìÞ˜ý(ˆ\"Li}§³ÂYÔÂLál ßCbr Mp3&\$È™”Éÿ}Çpàê£fWy±6fÔ!@†\"×V)¯U\nE'Ð2Œ’­ÎH)è£ûŸY'U³y˜Åò=jCJ%­¬³Ëù*Ñ®mÖº`¸Ý«”«Ù\rÞ~‰p6´––o\$\\¼å=%^¤„oeîUÄ‚ø»‹¿3oµã£‹¶K^š	v¼\r!Ž£ÝÜûÊá¾øX ^„•rp5(búÔ›ào•üm—ob<5‰ñIÃè:å#f›w“é#ª¾7B4G&î<*«Í¨®FCq¡4!@d`ö™ƒjU	È|™2??¢Âi²Ñ;×©vˆ	=<õr@Ò4IC1À¥Ô6”Ê)+Í\"»¤cîiR	ÜS&ñ¤DŠ‘ó…fFÀ‡Ú{¯(ù)1´¡,¡®žˆ|Â	¶\"êOƒHz‘š<)`ù—¦´N”ƒ‹œ›[ôâúJ°uŸdµeÁÀ@cØjk„ó¢bˆŠ.ÒÇ£ˆVk¦¹Ò˜n¬ÃX&TÃv9ÁŸ^Ä¶¹¨ê™@ª¢f	Ù;«yD(:ƒI”I£b{‚Û,ïIJ-·~°16\n““mÊhbAÓEGÒ¢ƒ­‰\nTŒÒQÂ*±„ûøÀðƒL)—ÖU	|zO]ƒu~'{””+Ëƒ2U84œF¼©åKŠ(o*-KˆpRm·±ü<²cŠ8½Iwõ²’^VòÝÏy·O*?Ò{›o\0ï¼¹Ì›å|×nnlGùÌ¯[r­gJÓÖ¸Ž-åû)¶. ¹:.ŠV¼ü¿»=–ÿRâý!„l±BƒAØ‡–¼Ç\"=Û¨vöYí%£_žq‡®’B½–ºØvîzˆûAØ¼í«£ß¼eÞR7{—vÇ·íÓÜ¼uð¸6þàú¨E\n,­Rõ-¿)´™²s‹ní)Øï?¡±þl1yÞ³¥:ß@ì¶Á%‹Jölbô®–×B‚ÎL,´1e(ƒªæ„‰+Jeyµ¥ÂKCq¤+GL¥WÚó”àå\r÷j–úæ«Ò	ézå~ý#MõåÆ`ˆF\\•è½dÜgûÝ8;õ5ûÔ¹Ö³’­¯èÏPç*ÔD\\ÿéºïí”ÍÅ\0°F\nVõí¼Þ.ºÞ…²–zÿÐ A‹rg‡òUï^%o>BCQ«v’/L2mÐÉPMê%.|öCPZj¶+uÌ®_æd0nlÚ7† Qï0wbö‹æ`P‰ò¥ƒŒfyÅÚS¢VâGR‘€ÒR.øí¤IN§ˆDíç°Ð·p¼ö0*ÜPhFëjLmŒ`ÚTPÄDdéIbÞ¶ðïBÊ]PêDfèÈ@J5iÌ\rbhW)\r0BMÄ=‘ý±ôÐ&ëç#“dË\0-ß°ØF¤nkQ'û¹q(AŽ4õð¾ÑÍÔ5o=æÑðæùp.éqp²eN³‚ËÐF‰í‹*²]±†+6²Ñg¼&Ðæd1–³°ñq•«,RCÊ˜m\nZ>ä¸L£NÍ&çoLòof>!x5ñÄ*Ñ\\Úf@‡nÒh­þñnÜ]%Öú¸Úå–ÕQþ¼Ìž3+>ïd¥ñGó!,U!m	!ÃÚ#Ò#*(Ô­T*¤¹ª¸¤T‡’!ÌÆÅ¼à…¦ìŒT¿ÀÈÀ0W%lÀÛ%ï%.c´\r€V±ÂF#ìÆ¨nJ{‚N g¬Ö–J<p°²8üd\$Ï†ÑbÞ!Çpo¦ \n ¨ÀZlÁÍàÂ‘DöÓkÙ+Ë¦ô­BâÒÂ^ÒÇRÊò«®ÈB‘2Øá©¨ˆð–£þ?B0nŽB:1Žˆ`Mò	£Æ\r Ì<\r:³„Í(Ä‘Àò<ëD£mŠÖ@@{¯\nQÃTîpæÄ;LIBüâ4Ïà¯4Ê¦‹\n<îœd)Sm ÀÖÐ­Ö.0Q-&¦e¡f&.È5nœîZ I%§nã)É7-&ŸÂŒXÉ8“8q^‰ó¡7¤Ó@àJdþÓ3žÝS¢k‚\0ÊØF+\$fDÞ6ŒÆo ï6mŠmðMd\n`Öß’–<'î-x“ì¼³òúÂt— ®ûÇèE@ÔZ¢Â;È^(2lœ@¬Mm†\rª;M0Mäú\"€\$T(=iöcátå	ö§ë7ÀÒOª°bÂ£œ2Î‚	:a£\$TLp†XÄ‘Q8LÃñ\nÈN4 	è&\r£‰m\n% ";break;case"pt":$g="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8;OF“x(Þr4™Í&ã	²+Z“×a0#¡„Å%0œç\0Q\$ÉdžŠ§9`(¡gŒ'lAÔæeg‚%æã	7HV¦S>ô\nªLªÑ“U\nâi¯gCL{:d2Ì\rÆšFtá%ŒN†“a¦H9[×FØ<|D0Ýdâ	ùÈÂ\n!˜v°Q\n×B´YJF]€(Že7ñ–Žy3QuŠMçLFÀ@B¼ä=Ù]¨(§•p\"¾–CtÞ7Î’Îû%Cžø1ì£å\"‚(Üñ°¢j³À)jÇ§Î{î6£È¶%¯£Œõ+ÎrZÎ<mÐêçORþ˜i`@•+Î|\\4Æ”P9EQ`œ7±¶µ+Ë,o¸!(ÈCÊÉRdœÎ@ä<7Ä\r\0ê¬”æ6Š+ù‡.Ëì2l1Ål(â:­³Z\rƒ|b·	ã“a,¶äÎ ÐxÊ<ÃhÒ„§)ÚzŸ²ˆÊ<=€Pƒ1«RÐØ“.£8‰Æ#s ð§ª@@)Š\"bú7OH\nPötð¨MØÆ²®ËC‚3Í“´\"7ÅéŒe?¬¤×ÅuŽss!¼–%Œçˆ¶(ê€ uyWÏ¨ ´%Cb6µ8ÂHÚ!(Š<\\«ƒd%im*¼CãjDH£9eSÜˆö\"ƒcÆœ ô@‰³‰\n0œãZPb˜¤#Xì¡7ª@\\AÉTd—¬ãhê6%‹\"± 'u;U\$‚9_Î’	W C˜êƒ\$	½Î±ù,¿\$ˆQ9#JÂÏ¾ù*0¸Ž	®T#¬CÆDð|÷j\rÒd¿TöcHhxv Ú)Àš¼äèêò9Žë<–®h³ØÉ‰‡ˆ Ñ=ŒÁèD4ƒ àáxï½…Î•üƒ…Ë8Î¥%”pø^0Î2Ž›¿K'£XD[Ã„8âAáà^0‡Ìð@ñ'ò]Pž`ØhèŽß©íNœ\"ÚÐÓ+ŒÆ²‰Ð+%h²Ý¯/3\0 \$\n˜ëråLèP¨):¼Ó/ãš<Ù¤ƒbp(Í~¸÷(*‹h²¾õ™EÚ|Šâ¿¶¸›–él@ÂÉdLòp(	â˜©_9M‚xâP ç87&vÃ u!d¹Æ¨b|FCxu oÑ?3(M\\ƒ>|,hsšÁ*à,Á\nOL‹š\rçJ\"Ò§Õ	‰7†A‹\0Œ*a¯Œ„:£M™iøpUwŸ4ÃIK[2¤á^ômI9½e&U T:‡ÕÜE‰çt#&¢XRdZZ§ó#U¨;8ÁYŽ”\"Hj\0RÍ.¥ bíÌð:tG\$ç0ñRkÈ#¾3%Áá¼R  Le¾=Hp†Øä!P¥ÝŽD6‡HHdGl£C‚C¢l7¤,à¬Õé)–y“kB…ˆ³'bVË‘Øó‘òpÐ1\$3¨ìž¸öŒEz“g©`ðœ¨P*Y‹1Â E	fŸ³ˆ¯ àlKg=ÍsÜ	`ÃGˆ›“ZYIÑ<ó8)ËŠ{6Í©È/ÒÖ¯ä{œ‡`²(âþ•×ühbÌ¢e'›Î ¯~ƒ¦ðàK\"î\r!àí!9=MD¢B²MvHù´[\0PÃ°˜¥DŽ°ÈÐ­¤ŒÂb–‡N:(-i`¤‰üLbÁ-—,ÈKÀÝ/‘`T¥Î<9&	ÿN\\mC æÖ†åNœXkŽ+³®cìI•4dä–U®œŽáETç\"’DqŽAõ‹¤´ÿÊ4)C‘W-pÌ±²êC’\\´H©B¼†UïÃ._R<!ÓtÑÊ}}¯ä39€L®¶¸ØhæZBQ¯KâÆXçÚE]ÑeŠtŒÐúW,±,'	EWÙ3”±I5¨M^W>U|®–ô0ãll-³y6Õ=—[pN©8.fª£\$`Rç-Ì\\0…j\\óGŒ!»,1,ã‘“Ê47@£Ýãðú	hw¡ˆÏU;•L0ÔAÚ\"òQéíq¦ˆ•3ùH96\" óÐ2Ð«äBß\\EýÕ–ÒÜå¬Q(³Ý‰Iºý„J2¹F8W\$R¡.ûè'\$Ìrj¡,—&A¨‘Õ±ÜyUÊ—\rD\rRÌŒ#«S*pqé,Çç.Ö›°Ü­`µa’ALÅ–°Îw±ò:Ä˜–ÁÆYB,RžçII–‹eÜË¥áÑÓUu˜‹¶dOD®îMÔŽ—aF=‡pŠp–’à¾yÚw%LÝ63©»’SÀ³¥JEJÞjÈ0ÕÎu¨H´@\n˜3l‹Œ¡Ãx)šÉýiÄh Ipžak±éçÈžÚ‰ÄeQ21/\ny.æ‹fwE#›¹ZÏ~­Wò¡ha(¦Ìµá“Ív>8¬í{­s;2§dñsØía-I•³6+†É½‘ÙÖRÙX}¥bežH¦wkYélt1[ÎBü«eýCª÷E<ÝP M‘†õ;\$›Î^îÝ_›5A3ºL¶Dâ]K˜9ý+ÔÍœK+¾¢]œ(Î6s´ƒa¾Êáç&¦Di	ÿOZq2ÜË:e‹L³|¨ØrP‡ §¥ÈšË}ÓO·­c‹Ã“ÓL4aSw_ü’ŒFmï¼±çÝÑOQô˜Í°õºÉF}*8ÖeQ¨5ýÈêÅ3a½Ö÷þÄ¤èÄ–ÖZÆt:—f¬êŒ‘%s@QNƒ*LÆpü3Â2ËÕŽÎ‘¤¿Ï¢·˜6%_}uŠ³æ^…|aïÝ‡\nö4d’Ü’ñÄ¶4VûÙõÀfò)uë+àûôæ#ËP°Ï¨½§•þ@‰¬aŠ¥HJõöÔgßÖzîaã=˜eö¾¿{uÝáäØ»æ¡tüëë}á5ž¬aFeòû¾°f_\0Ý‘ïˆŒ¾¬è©HŸÀaZ„Zj'†Ñ{íøÏ§ï‰oßõ›Ðeú¿a\0|}W³…Sw[Ž±Ì,Ëû ~1ŽÂ¯úÿêd	ò\r	6=iîSeH;Š–s*ÂI\$–óèÔq©ìÿk J0,f,e-:âK\$¢Å£Ø.¢ÜÎ£\nJ%–MÊÛ6IpZ3+:Û>cÆ\r€VczMÄf!G‚¿ÀÄiâ2ô£´ÉÁ€Â¤â*hftcubî‰	\n€Œ p\$åHX*~µm¨H¨vy\$·NV3¢‹MÎ•â4#ƒ\\q'ª`¬©Ìf8X^,,’\$ÈJŽŽ807ÎRª\0Ü\roÄI\n ‚ÚdëT0Â„-J@at_BŠ, ˜…bþ§åÌÊiìj9éäÙå<ï8Q°è2ÄRT‹†ÒÄy\"pà@A£:ÂÎ'lÊ?\"ò5bìCƒ:Ý\"î`å^h£¹ìdÍ)*11jgO»)'ƒ˜ÞQ~\rÂ\\vP@õntw®¦F¢(\næ£PFM\\à±cÂòXæP©ÔQ\rLùHƒ ãÊJØªLb2<ÀìOl,¯â(„Ð2I‹ª6\"Ø­Ã‚ŽÂÐ¦Ã·	¹nÈ¡¬ª7JÖHÆ=\$€©iðöŽöÂVL€£ža\09‘jAFNé€ Ï ";break;case"pt-br":$g="E9jÌÊg:œãðP”\\33AADæŒÞ aªDyÌæÃVŒ¦Á”Üv4˜NB¼¨âu4âàQPÂm0›slði6ÅÌ’Ó”¾cŒˆ§2ÐƒE˜L„è¬\\Ë?€™f‡c	èÒoÎF“9¤Üa6Dê²ZÁÐÊm&)„ç4‰&JüàU9ÊE€Ìa™JÎ°aÖp 2]­–ãt}je9Ò®àª}¤jÛ\r5™¡PÓÌ™¦k1¦‡‘ÅñgXŽÁ]L°£˜(ˆa¹ID³‘„C0ê¬à¢›k_Œº QÊoÝ,|bfŽå½&›Î˜]P€…v2ä=9ô§»”PÎWóžÑC¶{ç\\o>3Êö# PŠ7;L¦´+‰[ô48ÏxØ2ŒjúÎ•À;¥lÃ´:ŽˆKŒð¯`Æ•	BñÓÃ(åCÈ˜Þ©:K,\\°DLDÁ£ @1+pÇò0ü¤p„\$ÁÃª¨S˜l»z ¯†¡)0hPÇ>izÐ—·a\0Ø7ÄkHž99LT1ŽLÀÆ“-ÀSº63Šlœ'JÒ·9+* Tš6\$‹Å ±Üã»	Ë^)Š\"bô7M‹|à‹ˆ0ã°Ž‘ZÀ ÅÌ6+´U<ÏCÔÈ90sÅ³ü!»uˆê·¸Èd0ÕoëÖõÕ­è ±¥b2²À\"HÚŽK“æ\"eœãÖ«ŠæºCTÿØ S1]Sllí@#c´üŒ#Kæ*\rãZLb˜¤#0ìrf@iDH‹ŒËÚ:‰R¾©Æi¼à­]\ruxº.¬Þ¾2) ˆ2¤K„5AƒÓ|®L‹2É Èô¢Ì&~L‹-ƒ…ÔäŒ!b6Â°ìJKM¨(ë^pbEUÑšf½9Tìw@e—µñ‡&‚jì·%c‚ì9Žë|«åÓhÈåx4M£0z\r è8Ax^;ís“:\rÍØ\\±ázM»O©0ç	á¬9ã(é±‹ô:r5„Aõ”8AíÔã|ÍÊw<|¨Ãw^££`9O‚hŠeƒCB«²›ØßE‰É0ÐÇW™'½dìÈ \$\nÕ¥˜3!B–¤¨B¾hàÜ˜¤i £À˜sÊž”)ûòÄvZ;ÏÎ”ëÚ¶bwÒî0‰^jÂŒ,vÍ&‚€ž)Š•c‚Õ'ÝZî(ÜÕkŽÈ:Uâ.\\“Á;%Ô>W[ )]N˜»ÒÝY¬!¤r–MÈo€Š(Æ¸ÀÞr`KàHÃÇÏJþ*;•½^²Ís¦…1àÜŽbÛXm¥\nòÅaË%UhT’¯–àïJIB.­+è†·U¡)%m®#øt«jr;Ð8¥£0ÐV`Ä‘4‰Ê\n\nÆì²Â–œ¡À8«ÜTš•xê£,vîä¥§ Þßœ(1Â>„0ÞÁ`©5Zì÷D¢Ü‰oFfìÎ!ÒÐ_êÏk]+saûCt…X¶–ð@¸Žñ¼&ŒôÄƒXˆq.À*(C€„€PO	À€*…\0ˆB E—2ì\"P˜f\n27J°KTœq‚qØWï€•1DvHQ54å;“’w.C‚€K‰1¦Ó2Ó‚7q,ÈhsËTEi-¨§¤Ž\$™+(D¿E>–Ði€éÿ;_2fEF\n£dÏCF¿tV‘Õz+D„‚‹&óz™Ë!o7Èh³O…N`§”KBkÁŸ–¥ˆe8ÁP±†w’™|¥HíJn`çY9N	ˆ³´´KÓ@ä€È¨&pÃL‡L )szI@&þv­S\0}ÀED(©«È eX!r!¨úT#t‡[<©@2´.hî‚fÉ\"VÕÉC3‚U ¸×Cë]‹eyd,Ä¥WÆo,‚=®×éš£_¹jGÄ¥µœM%g°çM’B¯b™…—¬v\n•ªßeë©ß ¡ÆÓW‹<ï-Rm€,š-P|Ü]ID„¸¨–‚³CUw£š“0\\×Ë fXÌR‰b3…@£™/uîÉ+á”1ªoÁ¸¦•\"ILˆã«7sdðªW-i%¬h\$á†,Ë‹K,ÁRøç‹AiFµÊ\"”Í`ä'ˆ¥Q¢†M0Z7)kÔÊ›µôMN,gÎÀJZÂ\"é1…Ì¹êŒ Ñ­eÃ:¤@È\"÷[:™ÚÀê8° rPƒ:èÇHg]uÕ\0×!œjRuÈ¸ï°|@&Ô9^O–²´Í;qhÌ³#–ÁA<gÌ(¥;NÚÚÍ«44Î\$™VÔÎ’&r\$E(ì®ËØUÙ9´G]§A–ZHyžD\0›Á¼Ì­–ãÛ\$x8³Ä\r1Þºmh&êéÄ§a)ÓÑ^\"h4w\"ŒMÕ‹vN«Œ;µ1ú§k¬»…5{C•„àùØjÓ]íA‘¯–;ÈI…uvd[}•ce=qFìg¬W‰ãÀr,úß,†¿+]žâ×ùs}ÀÞwVbÕ[´ ™™œYîq,¦«½_Jz˜ÉL&¼Ý2‚\\fÛ25Lü«ìŸe´Ufçhô™-îdý\$h'‹×êÈØMÙ&B/Ï…žž¿ƒ–çá›Àåå²ëøÕ&Ð”¢OK/DNXV‹nW`amÛÎ‘>äÓ¼ÿëÍ`µQ5j«\n_¡kÚ²æuv×=<‹ôf‡FUGK«KR)/Î¨¤ÉKPE\0ã³9ÕNÃŒ°SÔÌTžì*ÙcN´>áU;—<ËýÚ/ÎóÕšo=U	5'¨°‰'ESïÊ_®\"@Ì“¤N±ž¾*ªõ³M¢)\\œª­qNlŠIxÃJP”ôØ€{ý£ä{ËRúƒiê½/QÐ»·ÃßAëý!Æò\\Ôû“{åûžœÂÖapíxAñ¤­NüªiO“›×–šÓ~õÌþ7Ï¦É‡À|‰>Õ?¥<ÛðÉ@¨[þWZOÕ~xzf‡û»öXCøoŠÐÂAv\rDñ`õRƒ¦’‡ªƒæH£Ëâj¦µð‹ç¯L²#©VLd&­lP<bä-,æG„|N©LÙË\$Ú\$‰Ã*²- 3`†;@Ø`Æ_\$ÀD ÊI\\Œ\0Äg\".óC\n³hîÈ`ZLbhÈPr£sÂèÃ‰x\n€Œ pfè /Œ´\r˜Fè`wl.µî<zâ\n\$-FX)#PobD\$‚Aìà.\\¡å^)\"‘®Hïæ>`ªSª=\"._ Ü\ro®V6½¨\n\\Ãv%GÒ bÊ9a†EÌ(À	ˆ?	Ì“H@(&rÆ#ŒœÍŽ5éíDýã\$Ce(·\r\"Eñ:-ÀR)Ã3C2¥ânçƒâ.ÃJº	\\Äâè]è eÃ§¬¸3/¤Ü£6Ëd31`¥Þ\rààS¤éF¶¡¢ëJ‹czCUˆß\0AÏ¼Íi€\$ô‹›¤òÑ!ZÐ(ÎjD¬\"ãºÄÚÂ*ä7¨ÄKc—1ˆ“\nP,ê0HÖ,e`’0t]q@E¼Ÿì ³?D, éÔõÏD÷Ã8p'î8À‚8bÄÐ è` Ï\" ";break;case"ro":$g="Ed&N†‘Àäe1šNcðP”\\33`¢qÔ@a6ÁN§HØ†®7Øˆ3‘ŒÂ 3`&“)Èêl‚™bRÓ´´\\\n#J“2ÉtÀÚa<c&!¶ ˆ§2|Üƒ“ÊerÑº,e œÎ’9¹œÞlÎF“9¤Üa°0ÑÆáˆÂz“™&FC	ÒeV‰MÇAÐÂb2›³q`(™B·ˆ8#9–q_7œåI¸%êãfNFÙÐÞaƒà„‹±»%¥Íç59è‚äj“Ö!U´Ü¨i8f —,ÌØi¸g¬qC®rH\n\"]dò»ís`d&\r0}tÊLr0˜îÐpVÜám³hE#+!6e0‚ˆæSy´Êt±ã°õ¬qOfeŸ‚ŠsIoÜê·£K~à¬@P Ð+ïH„·®+šêÇ	+Øä‘°ÃxÎÐ&C‚ZŸÃ*÷\n?l´ôP ‚ì6ˆ“à:»LÓÒ&ã Ò”¤D@ƒ Ã(õ/ÎäaF‰ú¿°)xµ4Ãâê\rÃxë\n±’ì·Â(È\rñèÊÒÄFó\r/Ó„Jq)œ/CÁ0ˆ#:»‚FÃ\nÆ½.OÒÅ±Ëç%³û;°ê0èÃ/K+Ü“®ÃÂ86³dÔÊ/LpŒ—¦ðÄÑOãÜý\n\"`@8Ž©hòh:í½º6ö®°¤ü1Lò9­	¬©3Çñ˜Ó­°d\0º.ÀU{ ÆÓøÐü=5LI!\rè•hüDš`ÇmÜbŠjÆ\r3’6ŽÜ(\"8£…Pƒ×r\0°-Ë…‡VU™zÌqv\r€€'sˆ¦)ËèÞ5ÃÁœÈ##à¡\r+²P±'êtÀÑ¥kàÆ‹q`Ç@¦ïÛ\$½@I“à2ŒTŠd9ÈIL2±\rØ«î¹Ézg“æ¨#b<šêFð²%!bÃd-eMÛ1&Ž©º*÷4Mâ78ªÄ‰(°á\r‹èMÏ*vÚ&âhÂúH.Ö9Žë®¬h(8Éˆ‰8ÐƒŒÁèD4ƒ àáxïÃ…Ê\"ŽArÄ3…ð÷#GCÌÞ7á†91£¦ü/ÓtðÖ×àÁ=ËØxŒ!ò”9„pè4F87b0áRù\r3tôy©*ûIÊ¥Ž#G±Œ#°Ò¿ÀRj„Ë\r(Ó%‹ÍÊ9/ÑHP¥…>ŒÖ§ê\n2Þ#òL—§w.k‡4J‹\"¾.«0çˆmCRÄ0ãmM@Œ#VtxS\n‹#’NOÈ;\n…CS(íÈ!¹Lt× ö¸Ežù“‚&€ŒóZÜ¹)è¹0VœAÎÐi&¦¡ù€ ²“&-ÕÓ™ô®IØpgMP’†RQ'ÁP(pÜ•Ø[ØwD 9Òf‰«H-3,3ÐÅ‹0v-\nØ®E2Þ\\ÖÙ2k¬\\­VKC›71a”Æ­„V*Î]«Ex¤#x±ºNB‡Ì¿XšÈãKJ@(+–ûª|‘ 4©RNRÁÓ¯†%]é™\"NDE)f)–cà]aˆa’2l! ”ÀåÓ¨TH†	1\"\"ì\0QÑ;f5#ˆåÉ_IYéœ)­cÓ/VYÆaD„±&HºEKÉ{#Ä?¾rnÖ\\,oHí¡Ð§,ë°Ã@tb¯Ž¹ò9d–˜Ó¸ñÅ:j¶lô:˜ZšcmÇaÙÕ\"ÎPLQ%Ç'#f´…iH`“–h4Z¤¥u(öF˜¢èC:B|¨Õc¥€ùKÉ	´Z‰\0@ýˆœ²œ¦8ò#”v^åL«UAO!D\"\\ƒÁŽXêý!j`}LÓ0—uS:(h}FËL‚<0ä§àYdœÓö ´‚Æç5 ôè˜»Ô:‡Ó8Eh	ìäAcxÙ§Ywªn¥Ê\rÔf'd¡4¦¶¸\"ÒÅ¤ÕšÐ³rcŠìŠ­]µ©bj™e±R*b•ß,Í'•.X‰˜’‰âa\n*”9—¤B th‰vÄÙZLƒlßFŠÄÚ€›&©¬»{6nÇ>k\"ìm¿Aïd±ãÚ‡šj\0+aì“t»al­©³ ºÆª;(Ami·vª1òòä7«Vñ\n\$ƒ®°\n‘;%©ë2KA!ñ¬0-m@Å‚öKZm:&ó ˜Äø¢N	Ñ<gE.öÆ˜ nªf7Äþ„ôsÚI±°'qÚC\\gÛke &q¢ÄòÕAš\$g™u%l»Lò‡I	¼Ùƒ¨û£,g4ªZ†ì8V°ôbŒ…ñò¤Ö+pÜlÃ´úbøü‰m¤&èFûK¸]CÉ1ú2“ìñ™à¾«\\_Ì%W8ø)å5Ús!{,É=Vv+AÓÉ,ÁŸ0×	wZˆ!? ˜â½!JDçtª]ìëV£·s’E&ÖÐ¤d\r´«Î˜®®Í\0r'IF]‹»=Orº‹Rä4ýÏöQ¢\n¶ŠU±§K3Ô\r'¨uT¾Ý¾Ò,Ÿ}°ÏÄ˜»cpÎ©±X%óÞRÐ0ÜB\rÊ(ô–p„^^QÞg\\D±\$Tù3:·m‹Í®ÂÙ{B(u´—›Ï–ÇVEØåWŽÓÒ’ø‹èM‰&ÌÜº¢2ífÐ~·&ÛÕ{\\ ¡£¾Â„¹ve!jÍZ˜ƒµ–ÅYý×ªsìàÇ@'|îÂù¾ÞÎýõŸ	p\"•kx,ÓŒ|;Up­Zª&ŒÔ%¥³cNM‘3ù\rFäš„Ú=4!7\"¨üvèiŸKëím¬­–J¨XjB;)Œ0ŒQ>A4}iØ…Ù¢sÆ\\ÑòéYbÙ0Þ7ÂZY†(£HG0½L:a{gk¾l ·¬Éí½Ê\\¥G;²¬“§ðßOvâ&©µœ!JJAé:|\$ûËEÞîŽ‘åàä©OdwàËI¼‹Î»»ofÔlŽ;Ç‰1ÕÍOÂ÷ øägäëþºyeÍç-Ï÷KÎÐ¿1ªJ\"sBúŸ\$ ËéQâë¹Ÿ×ùWe‰Y¹PáL;1D˜íð!	×*æeÛZ…ûfªàîVVGÀ;Þæœ˜Ž.üî(v=åßW‰ý³ã6­FÁš¶™D_ÜQ¶þùè»Ù.ßÈHa/íŠ¿«ë¡C¼Îˆ9¨÷yp€¡„m8®ƒÌ!„o²ÜèºÿðCÐ\0¯¾ÐÐ\0\0A7\0ï¶ü/ÐpbG\0¯äHP:p)!vg\r^Ïo¤ÎéžñÃš;æ m06ÑðFFÍ* ÞL*’ª·2äÌð©éÌôèÊôMX6Ð‰ðŠðhÕjœ©CúÛð£É6åÈólö ª7Æ²8PŒ/4…°ºk5°0ô`ªû€Õ-Ü&àme––¬à(\n6fÍF¼àäi¦F1M%/–”ºþ‡æáNÕ1!H-î&)žiD:_d`Âü&¬;°öÖäÎá®ÛŒ³‹IcNYF-‹\\êéž>\0Ø`Æ7àÆ\rkÚZ(´ c¨CD\$\"ÂNZ0#T‡àÚ¨Ê0	†\0ª\n€Œ p4iˆFMv·Ä®GÊ‰ÈObê¸„»Â@à×'°¶gŒ#4#‚ø\$È.*¼340%Œ´EN<‰²2„ÂËÉ Lfh,%/´Ïä„¹ÇúUãZe£<*Å  ÿ	P&ä,¢ÎB^ cò	ˆlÌd*(‹`:…ˆ=,2Fäu\"bêHÌò0MLÚ®+\0n?\$©äãn³&o%’NãŠxye‹&HÅlCRbÊ‚&¢ÚöbØíò(8\nÎÐ%Þ&C˜ò\0«†fºE*1éX;ÅPSÂ{%Zéc*Lµ+ˆÞÖ*b?F¾L,7ã\0dã\$Â¦>8 ¿ÒŽGmð,äÇÉJBB¾ÇÊJ4\n%0@W‚6£®H_¤„Ž¤m+Å0¤Î”¦‚_oþÒ°(°D¬¤Ü#J9¥ÈgF> âö@	\0t	 š@¦\n`";break;case"ru":$g="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤D6}EÕjòÙe>€œN¤Sñh€Js!QÚ\n*T’]\$´Ègr5„ö9&‚´Q4):\n1… ®KüIšIÐ·hý‚«IJ–6HãB?!¯Àš([ö&	†æäsD5AWÊê‹¬ÅQcCXMe”Å1v¨£6PeÌ×:¾ÏC¯Õ¼Æši7\nìÒµå.,Vû’’Ô»Ž´×ù:„ã,±[•ÓµŒ´7üŽË‘Üá»>Âæ2S¦jbF_#\$¢@ã/©šTõ:êq¢G£%t†9Òg¨ŽBhCªk\n¬è>PŠ„›ˆÉ&†¹4'\0ÂBù@*,\\CC´ñÂ±Î¢,íäG¥OšD©%¼ýHqi?Â’Jh,äÏ¹KFÌ.Î+\ró\0Ô(ÊPÀH:¸ÎÂÌÚ¬-º°ÝIò\\+)N\n&˜©i³Ì@ ±òÊ¯@1\$‚­³ÒúZ„?ŽÊ?)ÔiAAƒU\0Óê4»?zT–\$-û\"Ýš*O0›LÄˆÈÍ'I¨Õt•ZÔUõ‹6½8Ï¼ÙI:uI R&)ò–C)²á —P…œb&’RìÈš\r¤Í!‘Õ”R•ELqk\$³ä¶¡ÈÓžù¼-ºÂü;&‰Œ“jjŸGÃ\r[”¾Í6XCí\rQb0ê6\r\0è0ŒC`Ê‹ŒcÜ\nbˆ™M¥¬d(“#6;ÔÃE2<!Q’ìZÐhc­°nÂ|í[i#Œ¥Ï„\\à)‰)\nÜ]5ñ0™,ÙªoY+(*U*49qFg9<êÀ2sU,Ü4Ö†©÷Ä\\Ñê	þxÙ>:;+š’ÖŸc),9fÇÊ{æ˜PÂC³[‰“?£Ì›YKVé”¦–è2¾Ÿ5\$ËÕ6×­ØØ:UÜµÒîÂ?}1Ñµêú²Ê°†)ŠB3N»BÙ0\\•KÌ6%CÐ+úsnÁÄT…&‰\"±«+’±±‚¸åÒ0¦¡è3W3ÓòAx‚®Q~:¦;EÆ~à<Pë4ÑPJ\$,¨‘ÆŽ9ø7£ãñLY3øj4IÐXž¦/Á3ì,º_yCiDä»úC~rúTíwó,„}R*aqêh¦»´`nRiÁ(á40‡0èC 49‡pÞ•XeÀ4‡ ÊØ< €4AàÌAhÐ8 ^Ã¼1Á„2ÐÒ €.‚áœ†PÝCÄ\rÁÌ4†ø~˜aAœ2‡HPØ+\n\r`ˆÚ0m‡ÁÐðÂ‹psh:€ÞªÃ oŒa„5°pÒ ”\r¬*-¿4Fë¢¦QÆ]Ä¼rJaI‰¿|çd•ƒ*]–Sµ:dœê¨FŒ™NÑÍFä£³Æv—CJh@€ðR\\4D)Ü«•°Rž\"\$/ää2dOËÓdæuF6z1øÉ~@µ³I\$ËYýsc@Q£ÂÖ†ÓúŒ/c»-Jr¬>‰Œ®œ‚¬]¸Šj\0€(ð¦iÉ4úa§)3fRdÓP¦Ís‘6fÜâJ¦Š_§vLHAûcs\$Î›øKQQ6-D»òrv‰z{Ye4äô²ñÙØT²`L°Cxu\$7\0ë|4Œ1ÎkÁ¥ƒ\0ìaF\nB‘†åVb¼Ž¼`äÃi‚Ú‘”–€Ú¡¹L­ÕN<yÆ•„)rJ,õ¬·‰|xR¢‰,¸Û8RÕÊÓ¦žMå¡¢âìK{Í}'¨óåXÏkZª‰O3®|—\0ÑXuLTbŠÕY2QušQ1„¢™H’(¯MðuJÜ	@È¹ÏDlDÑ-é±õ’R»±!V>Íª%ævlæ9ûÌÒ‹K¡©™ªTE°ÀÊÁƒ„fbÕ•¨ò²­vý'¡&“*ˆËô¯`¢Ob¥,q’j¢Â;fìŒ„ÂKùÙË9\\ó×SÒBêÔÄÎr-Z‘Q\n9Ôb†÷ç{´(•ibÞæD–ýÌ–ip•”Ãb´ÓE·ô™.‹¼í§ûkDfàŒžäB42ò–äª¯²šÊDºó¼VfàÂSæšœdÑu4]Š{EA¾>J®ãžk¨°i-·Ç†·ÞiŸ\$Â²ãE¶N‚u(’Ì[ÛÉäjÙ{]P‚Ñ{ß8öÊmŠ²É©bymCh#RfäùÅ¯bOmFƒ7Oøs!¬¸CJ^_7Š±(¥¤)ˆiÁh—±_bæëŒÙ»“žYÍ{ÀôD>\rÅ‹)er†/­QäÝÐ‚îZë*1Ä”G¥T_-v„ŒŠÜ½\$ÛBlj’PËJêäUIÞtDš‘‘JÍ%›¿,2¹Ï’Zö¡SÝACDB,ì³B/ï16©ç¬ÛmhHìíÿ¤E0ÆÝíK¶]YZÝuõ©&ªªü=kB­vêMF{‚^n\"3†Tíy,BÖèbºÉŸÌG*À—Õa».Á€€¸\rÑrô–øÇiówíã\$wÜy[ßl#g¿7óÝ\\\nÅðQ{ÁÙÂ€°.×†)ÍòPnÓ‰&¤ªh5”-9QL­þ`>#Ê?âLOu˜rÂÿ÷¡#¦ø¡ÖÁ¿9–éæ[–sŽ^^‰¿»¤“ +=¶J	÷AeS£(	yŠJÏ1]õ]“÷ù/O„–uòòUIâó{…îr[Ø‰‰,ÚÚðï©‚ü½9l(»áÏã-êð{Yàmõ_û!Ú¦1·ï>\n¿áŽ%Ö2\n'%è‘”½k/–x«î~ømC6æpiÀ*RÖBùê—\rî“½ûI/65\r×ÈÊ¢qR¢üìõÅÔÉ8‘íÊu4’co»ÿ»ãìîøÜ;éu>u\$â0·¼²Â_=ÅêµÒÂ®y5EèÌ\$5èÔi¥ì&F(ÓGƒ€d0=€Óù˜#™ŒËX\\E¸hÿ¯fA\\JKi.häTŒ‚Tê¬eûhnïîfkô¸‡öú\$ÀóGN<æRBCô+l’Ê&ä¯F¬\\ÂÖ^‚<*\0ùæ%°6Êçöã+ø0J¶L§¢¨ú\nìÙIÇŒ%ŒÂç/(Ðä@ïb3ŒºÉš>p†¿ÐŠÐå.¿ÐveXmÌâð„–Á)ÔNìÀËi*ËÍtáŠ+Â=¢šðVÌê\$)Œªy°ÚÀP9,\$\$\0R¹#9	ëªfì©ÍŽ4pSB•pFªD¥\nÉf¬ëDŽ¬¿ï¨#0ì©ªÆªåxùâ±‘jÍN“q#Måð\\ØP¤öêÀgÑ®f¦¸æ¢«EêÏ¢üi­0ºFù‹ŒºpVÌnsb\0*tÙdž0fè‘yQ\n¯-nÉŠÆè/†«ð<ú:ãEæâDå‘{æBeQŽ0\"±nœb.{ñž9p½N~ß±«‘±„Û1»1ÀïŽ?±v±£§huÍèëc´ÏÅ¨zP÷PüsK¶ç¥ ¡ Q6<ó1øÏn|®I ! q(häÊÂ×\roö#ïüyEÜÁj¾’ŒÌ.£îÕ.=íu#FÞ!d,c°¬\$\0cz&J,JÊã”s(ü-cÆdÏœÌ®NÍLÞ123¢>åPVlÆT[Ñ0yÌ¢£\0<ÆJÂÆšD’#!û\"²Ð+M&bb82l­£Î©PzÊE(ðŒÄá/ìÂ	°tôš'¥,ì–É«ÖÃƒ;±ññôçëìTrôúpy!®‘³Âå/0«é\n‘N£1öÙ)ÄÈNúP¯­0Ð°‘\"D	]/Ò	1oç4\$·/±ƒ/ðY.¹4Í4Qî¼ó-0LÃ5¦ŒR+63S±Z­-7m‰3ëú¼Pü@ŒL ¢„Â2ÄâB<l˜Ù\r\"é‚âÜ½‘beP\0¬“1Ñ¹0‘“@Èðÿ0mm<q<Qo-Ð];ÓÎqQ½Q­6mlæÌ\$×Å†@,K-°¾ÿQá=Ç3€÷Íz Å…ŒI@‘}sÞ×`d°9t:c\$)4,P‚A„s¦@EFöÈ8FÀ—CÀ÷ñW>ÓA>©aèH:Ô‚Q2@€D•”MEFiÍF´C+,â¹í\$NQ=q=E“üÎ‚oFkVµÔnU‡D”ŠD”QAoIÍ%JEG4ˆ°¢QJðJ=óJ«SOEÔ`å„?5!~.T—?\rM”°nÆÐFD.í\n!r11TÍNÂšÐŽ÷!´‘ÚÐmOU#&ñMÓqÍO‹Ne  TÿPá\0006¤¦Û7Œ.¯É¦8HJM£ÐgL¢½1¯ET»Jr!î_U>>ÔqU•2´\\.AK!F\\'i<Ð9>“SÌ\ny`â.„DrßrãÎœò„á”{±©5s¬&,/¡ÃÐ(+©U¨ºõšTv‚ÜV5¢Ó%1#r:]0\\Cjäîã‹wXÄyZÕ“\$0\\ÞÑÂ÷…>ßu½G¿_N^¢±˜ùN`2;Ps[úãâ\"Žg\r€V …äBÆNÃÉ^@ée?‡ÆzEs'O^6gMö@Œ¥†\r êÀ@HÜ£ ª\n€Œ p|hÏ5)Å»\0olíMîÜ§o[³ohÐUx|öŠ\rÅa6’Ô¡Wq‰^MÂs«TÉDóoD<Ï\\y²’•É#-0NÐà›g Ì0†Ú!AKÇ\0/ii”pTßeœ”Ö:–,ž”ã|Îæ¤„ÄLjÜÓ1‚F`AFv¸”xB\$VÄp8jTŸFÂ§mä 	ŠBW4¤@Ú‚æýFoÃÐ÷Ä&’È5\r[òÔncã¯:õÒr«oC×a‡¿Ë‡©v÷^¯R¨cËÑnŒ\r7l÷c'ERwà¨þ ÊŒ@ÐûffH|\0Þ\0è§\0ÒH?WqxCãwró3³\"ÚF¼Zt}Å#ä¬¬DºW\\kÍ©èò×íËlÒ¯ªÌ!âÔ‡õ\ní'r(G ¬ Æ ê\r·ø1“R]âejÅPTŽ–	‚ç­ƒ\$ãƒêÿX¯Rà\rÉ/Z|ÞÇÕ2—Zl˜ìe­ªÞ8q—ÊüÆ¸ò%A#Šë]¦_GÔ·rÔ…TghõôÄTCrë.Äk31K€äj\r¤@NA )!9‹^ ";break;case"sk":$g="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹IÀå0=#\0¨™¤ÎiLALUé¤Ãb¦&#¬üÖy”ˆD£	èòk&),œP9P˜jÓlóe9)”»\$ô  ›Œfó±¤Êk¦œê4j¥\\ÓY­™e%V*ûv0ä§ç3[\rR :NS‹9› ¢\$Âµ‹1¦iHË'¾˜Ì ¢¢`r±”óØb9”Þm2#Ü2Ô\nfmÞÏ5±¶žœ°æó®·_±Ÿ/Dƒ/Þâ6+šÀá±HÐ6&˜Ò¢n¨96Cn¯@ÐAB9§,óÝ8	1JŽ3È7°‹ì˜¥Ä:c¢ ¤BÓÀ7Dá44'ë|cÆ«’è» PœÎ'hÒ@Önª¯,ëŒ\0Ä‚€L¡)JƒÌ­(ÊcPèÎCc„:ÃÃ¨Ü5ŒpÐ‚3ŽC(Î˜M.Ë|<\rc#>7§éë\0ò¼LðÉCÒ„­˜—\r#£ˆbRB,Éøì3BÜL£`ØÜ.iÂ1Œ#r(‰‘²¾VÉ#Õ0:Ëá\0’ÍM±7Ž‰²<Ã²9}BFPÊˆŽGË‚( Qä1l‚ÁW+-—f•#l‚)Ùj-b@E\nü	êò`;#£†\$¨Ó\"£ÅÕGZÔz¹®ªƒnP9Û6«†;C…lÃ\rÀ2@ðM'#.è­ÀÞ5§!\0†)ŠB0\\	ã ß”j˜3\"v´,ŠCs80¥8îÃ*b¼2ŒC,ŽÑ²Ê·cª¢þÁCxÝU±štÛÚÐR,1*\"j›§-¶~9è:\0¯E#„UP¬É\"µSÆNV”áƒ†£ë°;™•Í*b Ž+‰S˜É\"ƒƒ˜9Žèœ¢«ŽLÚ2caâ,’£0z\r è8Ax^;òrÞ6­€\\‰ŒázsÏR©Îª„U\0ä3¼<X¾18S8D]VŠœŽà^0‡Í@ðƒB7‰wc(Q±³ 6Ô½¢R¶-Ë€@ÄQK6ÆŽ˜œÏ)Jf<ÔQ-°@Öù¨ÆË—VWˆYžzé¾£\npR”ˆI¾ˆ5±.V£ˆù	j^LCpygOè:3¢lN@hgH V±°´†½E-€¯63S‰Iˆ1l…“ÃòmM¸P	áL*\"E‘š)dP™f´Í	z‚IÇ|X•ÁI3!˜³RJþƒR pF}\nÖ\0hIHY>€R40êÚƒyo\r,³\0¦ª<TFt‹`¨\"˜nJ\$¹w¼H\nŒICAÍ\$#ú¸…\nä[h|­æX€*Þ€DI‚6VJø¡\\­I\r¢U‡2Z*í²¨ .‘ˆ[Éò²Âc`©Òi€Ä;0ÜÑÈqrRáXÈ¢ÜhAÓº:F\\(ˆÀôcÔ{8Ã‘æ^†„S(2¦Z,ƒ¹¥CAQzcÒIÀc2A‘ƒÈ`0OR9B-…¨ò#sj6-±~Mxîó{â<a»’†C\$¦)¬Ÿ‘ôŸ4ÀŽ3é„ðœ¨P*UÁ=Â E	~¤\"Àg`tRÁRPe½BÑ%w„”Ct£Ô‰@NIð_4ÃVa@‚²£r‚Yßv‡^Z†’8Q kO²ZŸÔÌD\n#¾M´Ô9Óu\"‡ØðlH,uQJ|Ó¢:˜ˆþJC\nViè<Åƒ4ùhª•X2Ô‚ž'èíaTtKÐøcé÷ÎÃ\\.ŽU#ÁÔ#yYÐñ¸®uÔÃ¼w’˜|Ó¾®ÅÜD×„{Šq’œijÎ’!UØR8H\nÈi8ˆŠE/&œ}´F?æ°ƒE™Ë.Aèé¥yÆÄÒÛÏy¥ÞØÎ2‚¥àÒ¬/­š»å>ÎWU³­r>6TfþÊjQ­‹xó‚ànUm¼fÏÚà3¹ÈRcài¸Äå¨›t¯rä±è¹×BÝ³;{uÕ¶»ÞÜxr[)`<æqå–ÙÂÌ•Z­€DÌÇ™èý.¡hJ–Á%{T_nsõ¬ÿ6Ì®éx8)œ`\"g{ð}«¾ˆnÿb\0I'¡E*hÃÈ! žÀs4’ü‹½‚—šƒG%'”† µñ[º¿ÞhÕˆñÖÌ ÌVŒ[ºMF¨R&ZfjŒj*&(¥)äÓoA§EÂÌñ¡³•–”\"K\$©9‡dRxJ	óWÉ%){P^A-0fö),Úp¥ÑZkA¥Cçš˜ý)ÙÞÔ+æ¢(IHVWÊ%Ð“Jc*k¦tœ:€æð\"zÄ.! ÓªXj¬®‹0ÁWQ!òhÄáøeeœ‘™‰ÖaÉA¸3êt.·¦È6SDd_S½K^¹²>hþx¦~‡%;»4¼Ýväˆ¢³hC\"öUÏº{a›Â!¢Í¡ÿ\nD	=AÄ>Fƒ%¤cªdÀAÙÉÝ•ý‘ºLo*™WdÞí«Ý!(°px‘ˆ«­z.ƒ…P~¦Œ¤S¶“\0D’Dkly´IO<Sb´DfùÉ‡â{;<0\r±ŸøÒÝã›?]Ìþ¼V•@âk]~¼Ž*&t‚Û3YmmnL®¹ß5ä„[–ñŒ‘Ó¹ˆ²–É]¬@úAi¸Û¢Ü‹¿|¤½ã16Eô6Ê“swRÎû÷Ýë•Ö/Ïë}3®ôþÀëI‡S\$Aý¾ž¯s\$¾œó¦¶ÎÚà#s½ƒç2^Îj×ßkyÊð=Uˆxnø+LÇ~ñWŸ‘7÷Œêèo\rIÛ‘fâOüå	¡gIÝäINò\n\$¿&fÕˆ¬DˆÄMÈpk„Í(ùñ}ëÜÇ¢á\n“Ü´—ÞÓ‰-ˆÕ¢¯ì­äÝÂßJÒ¦+:¬”Vä+tîµ‚±{|O·6md«¶´{®TVEIKSøZŽZŸâÛ'Æþôëüv¿@þ¼ÂF3¯Ô²«.(Bˆã¯æçLþ²Æµ\0D>ã¯ä0\"‡mžò§ÜÚLÄÉBˆ 0ÏøF°4³@ÂËãbbjPhC<ª –\$Á|D!zÖ%D&hGô'O  jB6éN¸²n½\0®ŽÙÎžßí¥NšëÐ(Û*®F ÌLÅ4’…”ÜîÖé¥ž)	Ð M0¯&\n¤^H-ÞŽ\"JRËö#Þ\rbz3IO\0ŽpÙ\rÀ¦3ðÖN.}õPè'0íŒÎŽŠF¤1\rPø\r0º³Ä?pëÊ*7O/®òðòÏêY(Ñ±4¢ä,ÊëðÞâñ#êè2ý­–¯qQŽN‚,g\njõ ³®cqN>C|9\nÌ´\\´CdÑDðq\"Yë0t?1RåÑ`>q’>ñ†ð0–þ°DÑäRùkª(YX„@cÁ@@Eh®¬J)2?¬ß‘Ê30j{Ä¯`æÂL)ñÎî¨nÖ“`ì% –\$	Nä®:@Ø(#Ü\n±à¥	lêWã>ÎâB3†Ô%ÉIÌ<@Ø`Öd ÖF†À¿„Œ1c”(&¸E¢&{Å˜:FÁ/ªÂ>)†’€¦jàið\n€Œ pú#4#bÐì\0SèÈ±ˆ¾À¹¬'Ò†2/—(ÎÑËØx…Ó(Œü¤öìîð\r¬6Ù…ìl\"0Ý:#ì*LFNà›'ÀÌ7€¬z!J\$cx‰ìÆP‰:Ú’2D¼\$*JW#Q’…b6º2áª\npàLã†#C‚é† @˜Š%Ö“1ÇvòÉ\".@ Ë†scÃ+‰ct\"ÂèÓ<ëÆf§ ÜV3Íö­Ã,‰~ÀRÙm©3ìñþ©bpÒí'¤¤*Æ†\ràà…µ‡Új˜.ïFïá-@òýJòù¢ä'À(à\r\$0(?HX^·.ª…ž£†ØsúKà\nKg-@Â­@ê=ÅÃ8‡d,úNà‚&`Ø3ê0À¦3#Ä½ƒ`š-^PƒŽG.DÛ5\np¨Bs(‚_À®ô§Ã¥3`úÓdBÅL\nÊT£8¹•€	\0t	 š@¦\n`";break;case"sl":$g="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†_0žÆðThÒg4Ç‘i1ÐÂb2›%â\0Q(Êz‚Š§ÕœÒ\n(§¦“h°@uº®Ð– g››Ì’|T¦xvR)tÚ&§f›KîwS1Š¡5ÙM'»A;M†U0èuŽXD“Tœi¸ˆV	Ê\n&Ád[ò9”Þm2PùNß6ÝÊf™ñ”Ú\n€p—ÐÃ]ËgÏh\râá”Å9È7UeäÓ6ÔÅ<ÅLª=9{Ì'ma\$ô´?(:%«ÀÞ5Œ)L=ìÈ1+‚šë0É2è3ƒ(ÈìBnB,ËCÔ'\rì„&29¢ä‚Œ‹¸JÅŒIˆèÅáb5,Ñ¤a\r1ÔmD Sý\0.â0ê7\rcÞóC ä:ÁMD„Ï¡+¸Ö£Iâtì#I+ê\nP5\rèKÌ&/‰#X\"\rãdû¥Š£Z2¦ÃrŒHÃ`Ù,ðÊ(1¡k”=˜¢&;\n22NŠÜ™ÌÏäìó1H89›Â±øõÓý0ë+‚ª|þ@52ì\r²oO2òý#Ì*ŽÃ{rÿW-ÍL:U*Î´«•ƒYU5Äˆ\rŽP'Œ‚L9¼Èºrø0Ñlˆb˜¤#Á\0 ”#`Ô’ C246Ž­Xä3è5°C¢^÷>	¸ê9Ž+>^ôªêI½¨£Ë\$‰3Ž7Œó)Ã*ÎÄè›á¢XÕÜ+ÊöŒ¯Ë¢¶;QÖ£ðý5(\n_k-/‚ üV•²^&¶¨\rß0Žc˜î1c(ðÒE—x›Ó#(Ì„C@è:Ð^Žúˆ]1:*€ä#C8^ÃkcÂ7cHÞ7áø9îN/ŒM\\ÂHÚ8C0ðèã|ÈŽxK’41VÖ0¨‰\"2ŽCjÃ^ÍÒB‹*VÏºˆ\"J41‰D	à‰¸ \$\n\0P¤(êLû×70ß•¦4„3íCTñò=jŒ†s‹¥Ìc(-¨‘0Ý}Ä½l9š!QÂŽ9Þè*r¼|ÃÐ`·ž)Š—µÅNÌüdv£+R@\\ó#ð´Kæ|hîkZ5ø—‹#xêPrþÝzb}Œ03¨U1ª F¤›„`¨éHY‹/†Ÿ¸`Ì^ˆâÔDÍ«‘gÌËOÙ÷XÄ¼!’ÏÁÉâ^ÜA&V\n•S›×V‰O3bÅiE€Þ­¡@vC„lÃ.`Ò)\0!iÜ+8‚àM›à:o‡à¡»‡\$MÞË£t¥ ¼“àïßñ<‘J. ÄTÒw\n‹\r±d2È\nGì9žÉš\nUŠº-xBÁ•kŠedš“åjKÂ u\\à€5®`ê•@Qÿ,ót\n	CmN¡¨:¦Ès‰ru¹BrT‚€HG ›ÕrL\n\n†ŒÖ¦ÔÞki!;dô’ÅØŽ¬L\$+CEnC\0 –qÜa½–©ù™†QŒD]UÁ­±å4œTÔ\$ÎD±­|¦‹ºãCh»Æ´Dkm_¡!åÛCBˆ|°Îõ¨ƒÒ¹šáÕ©ä‡‹ºl™†¼5HÉBbº5Gr€˜Ú\n¿Ò\n\r‡p¼8‡Àã:Iá^—süà[]¥˜³'…ÖJP1>\ráÀÐËV\")jã}EÝ_¬þgá¬	Á…0 ‚p€Á3Aè¸ÅÈRJ õFV¨õÔ¥mRC”†‹Ž ¡¤b|Š)_kõž:ª\rY~¢ÍÝ±‚QjG*À&ªOš¬ÁžZ_‹øP¨ê¿XH¢¡wkL³ÑTƒH.­¾¯ÕvLÂ*Ýt®Õº°Å^Œ4'<u6´«R]`ì-p«%þ¹ÕÓÉc+ÅcCÕíÎ0‹)T¤Po`›ØW^\\¬íu<vÀÜm\r]~¨1Ø%MW-‘¯¬šÛ[‚LK¥…° &ßØ«glí«c·žÝÔ\"Ño­‹%®22é§Ñr,%¼…ö0»Ó²@‚Š*%…ró¤ïIB\rvm±ªF\"™ŠÙ/P“}²všÌ¥>>ëñ‡B¡NUý;î2 ‘|§\\õò†…˜ø•'åOg\nÁËME2=ORe/D¦ñ%YŠQi?#åŒ¼¡¤SfÖT¡!oG›6]\$ÁRŒÑ’‘fÃ±TØìl„]ßËû\rì(âùÃ+io¤©ÿ¹âAÔO´—*ÉÁ—ˆY&6Dx”Hê\n¡©“gYDšÜóôÙ\nR†O§Ä \r&~rÆÊÌèa\\-b³˜´çûDa«,ˆÏÖm}¬{¢e^W’Uˆ64`ƒÒŒ'HK•4I	ž‘@ZcO¬Ì‘dÄ—¡&wgu§lì‘ŒòjÙá:%<ëtÓr[‚’`\\\"%{,\"BÌÀ^Ã HLò²2ÅvÑª£Hm7¡ÔžÈ¦°ÙO!Ÿö.‚%áOoèÈj´†äUÛ_X±UÇ#H@.á,?Û7ÓÞ8%Kô5Øø‰¶sý§­Vz+R½ÍT—ßeVE:U-ÕN¹|{0ñÂ©_¯;ýÝÙ.#eY	âœ‹põÆwïáÎòÍð),¤U“„&Íî\"9Œæb7vqÃ\rÎ(/:‘üòÄnwwxçÖr“õQkÊØK<¤”òHgÒõÙ!¢„'™r«ÕU­ÖÍôû¤¥ÍË)T¨INpÙ\"¨M»uL€€‚†gaŽcî¦}™t0?;97D:¡Y–Lnêéèq˜¶¶:?ŒC>8snäÖæÑÛ£Ëí´…ü.1EšÇHZRô¬ïç¼¯ÔRÿIÑ|ß‘B[þmú’‡l<ßµõÇv9¦bY1¯¬ìÈ.YB—	AÄhka½LæSÂïžÄôÜßçòWhüºã¥[óÍmO/ìç™&É\$žõAí8Æü÷Ûñ¤„”™?^Üäÿ«Tp‡É(pbÁ¬™†å\0ô­Øæ*9Ïø0Ålû­bÆ(oû\0ïÝ­ÆC¥EÂjlZ\nÿÂ¸–`á\0\rŒòð98\rÐ\"ýòþ\$ïf¡J&'kè‰¾’H¡*\$;®Ñ¾ YÏ`ûÐfü\n\0ãpv./<Zpu¢â6¯Dã¼§\\a-²3C¾3°¢„íc\nÐ ú*äö/.ŽbxE¥4+´ú	ju¢îZ\0ìV#¢øn!Gü´ÃH€à‹ºÙë„&ë/H€­i,Â\"‹'°ü¦Ãåè‡È€D¢^Þ†Æ’iü\no”L*\nEðà6‘*Ö.[Ìj^ÀpÀjû±B­qHÛ-^·DNE+—kIè¨Ç¢TÂ^c”\r€VÞæuR—‡ìÍ&.Rb^Èa-FÂ6@ª\n€Œ p0°4E¬Þ3ErÐQh©ÊÖW	táñN¯êŽ¹q¼…®<åÎC­Ž\r+JºŠœeb0#C¬³é@%%„DCÌ—\$ZÀò@¤Ð¯Þj[„[	ãŒã	ŒÖyhTò¦C¢Ã!iƒ)Üc”P(æ„ì5€˜€1¬Î:€F G<5…lOm0¤jPÐ„ü…(^‚b|H\\–M'ˆ¨›-²Ë²XãÂxhÑQñ&Ï-&iÌC&úÉbg‡,J:%b’€-1šÏ@œ„¦\$ÌêäÙcÆðcV\rÒÈš'Bx'Ò´rrÆz’Ìž¬î=§\$tt¥BØÕ\n¤È Â`ê6Ÿ)„Ò.¾\"Ä7(šH8Ã\"°5#±&\0Ô|IüÅ²p‚NIæ\"Û©°pƒ~˜ò}°(ÿÅn7Ââ2PÀãf!@æ“­2& ";break;case"sr":$g="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAíkø¼\nŸ6_I&…ÄN¹~]É3%¼&°h,k+\n²HˆÆD—RIVowƒÉ”Ù>yšg—©Ž®Å	³4%¹ìœ´‚Uµ˜úÆBâ ´Zà5ûÅŠÉW£­i0IôÃA0œ®-yÛî®#ÕÖæmÖG\\b¯½	'hiàðE•öÆ¼‡IS%Öï‡¯Æ#X‚sÜhÈHI¦JsàåNªòX\$ŠS¬·¤‰4ãŠŒ9(»8·0‰ã°h»JjÓ>&‚”§**4¸¾ì‚ «¹­’Úß@F?',‚ú¯§*ê{/ÑÚHœÅìŒ.õ»Ñ“ˆ²©\$nÂ8ðÖÝ¢ïCë¢Ä*’oúZ„I¥šN±–“Å+·Œ’Æ]Ëæ‚ˆï©mÜŠãÈëü›<!(È‚2RÏÔŠ˜–\$ÿ%PI{{<É3sª’DVhÉºÍ7ÏBøª+éT£=Ï:0ÈLÑã\$Â¨\$Ì–Ôdü8¤J+º²\ršp©U'Ï”ÄjJ=U:¸Ï«A	„ÕÇ0³êŒ,pýN”¦­KÒº ÐBl‡ÑTÞøŠbˆ˜Ô4ƒi'\$„‚v—…²;k‘BpÁ&*•&ž+ä;ÑÞæ„ÃjFS%§¢®cI]7‘f5»ŒÃß8”•›àÕÚäÂ‰=3‰P™]T4\\šÆ8bý‡ 1B°§[³V§Èó´èü¨kòùS«äÚŸÎ8<_…6ñœðhã—RHÂÒ2[Â6ƒ’HO6P]9&QÜ¬åAÁ\0†)ŠB5ÐÛ…È\$¦»Lø*ß 0ZBbÈª×0¢)ó”ÌHM¾¥­m='®3HŠ\"Ðs[´’Ë0úh&~ž9H ‡-uª¾Ì |byÇò«4G;.	9`9’\$t›µüfÐýåkZˆ±êÐ°š¥¹R¥3¨BhÂ9Žƒ(ä¸æ;ã”þ2€Ò9£&Â!\0ÑäÁèD4ƒ àáxïí…ÃÈ6#wtx#8^2ß8ñÜÃ˜Ò7ý!@:#Î2Žž¾1\rƒÜÁ>	!´8ÀÊ_@t€¼0ƒã€Á 7§ðèàˆa\ra”èïÐmÐ\$µ˜²ÆcQ“AIèÑGšñµan¾ ÖjÄ( \n (ÈT¸MúÁsP¥,5pFK[c=ä¡ŽRò]RÎqËlÈc° 8‡Åý}EªMáÉÞ*°ŸÓHA1	ˆÈd¥(ÒVpR‘ÿ9&”²€ Â˜Tp]FVôÛ:N\"QlæHÂãâ#4­¢6(s^TSYû7m|ŒØa\\€S&§2˜Æ¡Ý90<¡ÞA\0cÀ€:ÀPÞ÷ÍA¤3‚Ê¹Ã0i€À€;—š‚¤=Éü4ÀGƒàð ÁÈ7†ÒDîƒ³ãf¥Œë/\$î™ñKI¬šBRü-ÉL{…gˆ0’\$TŠ\n\"+¬Z–´_”’‘ìù8”C ÍÓºduµÄ¨Æ?Y,|F¤˜ŸMS|èHÁ0S.5¶6üµc9(E{%ÂG`X9Da °uÛAð&m„Ã¸{\nRq17ñ>Ç:ŽYÌƒ.…Ä¦ÑòÑEÁí%F€*#å<\nÊQ\na–7r‘AF`ð<O#šÆ\$Œ~%£Ê©\rÊš&³V|:2­7¡9	`ŽÄÞ–±B©¡ŠL>¢d•·XhI*À§TH”Sàž\0U\n …@ŠDÖU†it›j L¡±½[À€ªî E	¿XÑê(vuØ»Õ<’…o³[BTXQù/È´#ÃæaEùåX§á§¤97Ò“X‚#'¶­'¤…c0	Ú¦™Õ·Dz-ýÅºŒ}MVT<êÕ’®™Œò±]-*ëE¶ZÀ‹%¤;ä§&kžšQí@\\hòã^\$jn„R®™&9F•…òTs½}H)‰¸™MW\n¦²šSsKºÀŠë:¶amNÝ)+xD\$mp‘òÀä”y\r ·f-ÄÏ©F,K‰  ]æQàeR4\\‘yºXTóÉ»M5d53©>' ¯Ö£DœŒ%O:D¾¡SŠ¬WÔd¤ÖÌÙu!†ÀlHÜÌŠ*µ/D×A’+T.ˆÆìcª€MàÊB1F¢xÜ²ûËW!-\\¾ŸÓ[•!t¿–åkÌ¦ieÔ×fÒw•óŠ\"œùÓ/ñp™žmL¹øª”ÚÀSä¤Q¿	1Ÿè¼¹¡rw<Dl×¡²±uËËO8lÏ“µ3¤N¹ï7h†é¢šFŒÒº\$kær®o)Ü_g=?tµIØõÀ“mD]1a>ˆÕ¨5·yUæ•Ø´²çWW`[v“2Šr™Ô2©Ï.à-ó´H<:XÅŽåC	-]5œÁ0^ÑÝn ’	rQ•—	à¡J4D«•+‡D­ŒÂÓKy—æ×á…_¶dèˆcOD|ÖÔ”÷ì:£¬æð£Ò¸‡®lÙŸ­;Ž¸òL‡ÉÓÑHTDÛ–r4î\\wm,¥q·Ürcxå4¨\r†h‚\0Ý€r\r2ö?x!å`p…Ü¿0Ðzxa–³…ýÕ±%ëËü¢¢;¬±ÎnÈ9ýlT.ˆøC:œD“%{zRo \"7œ¤+Ú“ÊM]L§æA79í%Ê1âëå‡ÏÂ?ÌNW3«þ\rqxnt´É” ñNªoÑ#z“9\$µ‚´ë“ …Q´ˆ\\iæÞKãwÉÊkQ‰)\"]¸èÐ¾åe%}i¢íg’/TþØ_{ãïodg4…vÀ¸XŒ±¹¥Ÿö(”Å²4ajuæ£ÄóI½õ§@ûLÿ¢H¾Ìþò-/ÿ^ýLÿ.\n _õþÝãÊ‡Á×e­Š™æ.ÃfDŸïìdäjªæBçO³ŽV-püoà`4ý!¡¯ÞÎoôÐ’Ä#H<\\ËnVÐÄ¼\"ÂXç>ÑÌ–M\r\$Ì(Z¬Ðõ'eí¹#º*Ìïé5Œø¼°VûÌÒÞÐ<ñP@ÅpI¬ž7°RÏ¢`Ïã\0¬ËZOƒPŒjÚÿ\n•Ci	„g­p£ í¨¢®ô°žÁ¤@ÒO0šŒÈ¸Vk€;‹n*‹€[KÜŠfPIúUgã…o>¶tž¢\$…O–›JDGåÄÈXïxrïä*ñ\rc<+¥Âð­œ ‘TíÜj\"0†Ðò \$ž&‚èi\rå¿\nÏäÇP ÁËþÀ.hóï½n<Ò¬(¹‹FùdâÞËÌ¾°¥ð¿Ã¼ð¤ð\"°3Q„òïã8žêäIT¼íÓB¾Æ+šûp¦åP«c\r®ËòæLÏŒ_ÐÍhbmæ ‹qÊì)ìÇ\nb¥ÚHÈãe¼7Ã8Ãd,jÃ¶ß¢üp±;\rI-–[ÍøUCñoºòrQ_|øNY!0gÐŸLme,YËnâ¾ˆ`õˆ²¡f¢K¦(Äï4â	#ãë\$2VÿÂnc.¡Kê'pBõÌ¸-®Abzf±I\"Qˆq~…Í0Û†Ù&#Ò…)1±Òœaò:Ç¬D´ààR¬ø‚{!©ãºñÏ#Q˜Àl˜gB\$¶\"Ø9I.X*™²‚©Ì0WA+Ñµæ Â2é±ÅŒ \"R÷RÉ2Í\$¬//N¼ÄÒ™\0I1ú\$l`„‚QÄ65D<3Rì Ñ~:;g/#nÇ“@RÆó0Ò\$JØrj­#ù\"Ò€*Ñ¹ÆX® F\" N„úQiñ'Õ”…èÉI­8øœ§=ð6*¿8Ó~XJ³˜«OÎ8LŠôKLŠÎDüeÓšÔ‰ÊåÎLðu	/öÉÅ–+E9FÐÌ°”.lÐÉÖä¤®ˆpU=®@†i ØkÃ3Q^¸,˜’BîqI´×.>mÀÉtƒ€Ú§p\0Äƒ‡Â¯ ¨ÀZ\0@}\0Æ‚®à(LÁ¸ìÆuÓ‹Dh`ÏL‰DÆ¯”T¥w8J¢ÛO9°Ÿ£fÎqb?ãO¦x`	´@Àò¶¢[@ÊáAQi2éÕ(æ·” ’©úN‚é'¨a@Ã[°F£šÛ¤Ð±dÔÂnµtÊÖMB=,¨&\0hXS¤DCþ·‚\n¢¯)Ât÷ê¸XmÓåO*ƒ=É¬‰fæ)-*µö“Ü=àuQP+Ó\$ÏP.õ\$ñ*[µ)Âù(./ïÑS/AS’Î¥ÎñOÕN¥\"=¬ˆgkÖŠƒD)H†ïÖ=+dùò›jG…‰WHøÑd,´ƒ\$h-YÄG@ÉŒ \nÀÂ`ê Ú¶µ>\"UBáá0]®hŽŠ:c5UK'\nºg,G ¼eI2B4¹GD²ˆÇ\0004¥WÉÆaÈ”çÕàeÕ4Š¤js7ŒR%H»#dL§UÍKKŽ\$‚æ";break;case"ta":$g="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆÁÕàôÉ¾&{,Ÿ™M§¡äS_¶RjØÝéÓ^êÊ8<·ZÔ+±õáe~`Š€- uôLš­TÂÈìÕõ&þ÷‰¤R²œ	MºûHI@ˆbÍÒ·õ¬öœÆ2x:MÇ3I¼ÝG€oe[û‚ßaØÅá\\´JQ‘øa¥r™^)\\õjrôù•ÎqÈ®P\" ˆ­%r*W@h‹¦„)ª¬ø²­\0¡\nù€5Œ6”8‰ªÚ©r¬œ61aË‘ªB˜ºJ²`F«ë´XFÉðP)ŽƒÒ7ìúÆ– J¬é¸hfÊ4éJøÜÐšRøGªæì¸îºžÑÇÂ8Ê7£,‚Ï+ðJ#(´Ë|ØK*JÞ\\)Äü{\nGãÈæð²2®«Š±2§,+2~)Œ£íDÏÓR«A°|\"ìO¨çF+ï”Öã¯¨*êƒÊ\"ÛµP#QÀ”›íÉÏ«t–+è½@‘››%Ç°t4¨Õ´é]WÃ2ü¾Eõ\\ââÀ”ÔµS5ªCœ›JÏ£ŸO)jmX¸@“a];@‰…‚ýÈísÝ]Ñø÷Ð”å‹Ä®+ªÎs›f§·\$X”ÅÍ-·:Ô¨ŒC`¸'{)×Ìb­Òô¤=P‹p=vËw•ò£à@£c\"•Ø2ˆãWÚØ´ö-•D˜¥ §XŽK'kG0ê7c£ÊñÄµœFØå¡@‚3ŒãÊ3Œ9³Í?Yù0€Cåuø¢Šl¼î]yL\\[«SYâerlÀš|®ú¦5sÉHb¿Gs½Î¾·”¥ÅÎÝåö\"ÒfC`ØƒÄ6©\0Æ0ÀP¦(‰ŠFOm[ˆŒ8D+äzu²j+FïËÛ¼F´›«Ù7ìáTrWŠœç`\\ÍïËîÅWo±öËØ`§Eõ÷~–W46ô·êµôYÜ³M)bºÐ|°ÂwöB#“í›ßW\r®þ/Ú6/ìRúøõß%«G^µ}|KÊ|åÜêãÚØ²bÏá[¯¯Âô&ÉÕPÁ@’fÃxr†|\"S6¾œƒ¦\\¦µk.&}^i„lnÅÒ=8©à«vk+]àÀÃ÷\\ÃÆ5«µ•³Ã¨œ–©OD± ¶¶ò€XR&wÀ(!…0¤ŠA§0Ï=ú¤–´r9²s(1´¶—ž«^o%U·XÉ!\n1vMQá›å‡L‰|2Žôœ%æN­‹Aç1\nÂôÝ¢ég*‹’5–x¸bLŒ@ÂÝH5£(ô‘¬WZmyG¬•Ò‚Ž[od¾eÌÒ‘„qo1ÑÈ¤¸Ðy4\\‘%ÆuÈ¡EüeKÐ%DG¾+ât‡_nÙ­#5Š°#éX’%¤¹,Ú\$!oQ€€6'ÒÊ¡¯ˆFÄÙ€ šSÚ‰Â`0ï\0XÐeÀ4´ ÉAàa¡¡`zƒ@tÀð^ç\0.(¡µ!¨]\0C8/<S¨ð#Èyx\"p„9tÍ5Âûƒq¬çþPŒÑâ€ð†|_Ã˜ L¡Ð4ö4}\n!­Â†é0ÔHmq\n,–÷ä´‹ð(™G„ñË£¢Z	Aè’ìÇ,Ð@P)Ý¬J¨NvŽÄH>¬#P`)QŒ+f´Èš¨DŸág‡Œž@¥¶HöM	©EÆ§—Êãl§h©µ¦›(d^Q0˜Dç=XŠk_’v8,ãôr9ŒP¿â^ŠØ,Q¡!€”Š¢{åubDUÂV/Z¦¯Ô•‹Í\$‘€ Â˜T­Î•a¦]D·’†>¬B\${¬6”’æÄÁdêŽ}vOìJ\$'w¸ÛÉh(g˜3ÎC“Efà€2LÐÊÍCJ‹¥Q‰Ø/…Õ+Èo Ã†à@PJEH1[`@âÜmµp€€;™¤‚¥2qh4À(° ÁÉ2¢Ã‘‘öÕ¾enª[qÉ°1©Ì Öiˆ…òT–UfZKæª¥µô§¨ÈƒÄê–ûÞíUM®h†`+)*¬µ÷u5°ØºÅ–‰’uÉ«×9žÍóz˜fÌ¡QàsË>’^±»ù\nl\r<-ò:#1( èî!•KÒJÃ¿j|§¥Þpa”9§åe‘MÉNÉøáC¸èri¡1XˆÕ*ÐAÕ{¡—°:†pÐ)…2¤sºÝ˜Ó[Ðc™†	[0æã¨a“å‡Ðq‘’—\"²×ô#Qš†PÈ¬plz	¤ú l¾Š@R·¯&„ýlýZ´kã¯§é¦ž.œwYé*Êû'qa²#ø7`ÂK\naŒ4 Â\nbÍûZ‹Š¡KÊ‰otâc–vœO†xt:’G\0 ž\0U\n …@‹³¶€D¡0\"ím\nY.€§%œ¥;š»i	YË•ÙóHêÃ‰øPž†…¨Æ6ÞS~¥ZòQmøbÒÉÕ7@­„K[Œ¸%0À³°íh->šL0‡XYpêN|û)—Á,Ÿ„Ñ¯_.\"•	`šW¸ëÛC\"¸!Ñ–BN¯šACá•0U·Ó¯*é¿¸{]¦7òÇe'0Â_û}(A\ru±WÖ+Ge¿rË|«\$Ê(ýFQý‹IøI\rÝd<\\7]^`¡0EV\r§þZ‡iìè´Äì¿ÚöÄÜ¬¹Ðâa:4•ý®'çíªqÒ×9ÞQ2Y5¹ õ}Zœ£D5ÂÍ©RD{P9[Šì]IØS†-hœÉJøƒ,k“¢¬}O‚4£P¯¡4¨ä4M(BžW(+õ>lH5‹U-[A|Kœ!òäUHOï§˜æj_uÆgoãd6µ|ä¢.}FÅU f2…z~åcì†úî=wÕš¶Äm=&ûwÍÕOåNaˆÔß^jpà…ÿòIN¼ïeêw†\nÂâþéÿ \\/¦ÔïØNÜ•(‚MÂðL4Ëì%\0ìº1/ödÀêd¼ê¬kL‚è¯ì­Jž‘¬tÞý¬¸‘(ui¥m	né¶ØÏ†´i×ªZ+¯¿l)ªYæõ/ä‰L[¬úÿ2/°€ýmÄ¥Ð´ŠäÕ0\$äl;\0Z”lüRRZWÌ|þl:úK@?Gju§Båï>wÂ~ºˆ(Î:0Ô„7)&\rzîîèXÐâ(Pæ#.X¬þ´TÝÌ#\0Ð&§¨4AÂ…(Ä/ü-ãóOœW¨–ÆÆò?kôêfxÝi?.4®¢CÍÜíy³H¢Ñ„¼XrÅß\0ªÔÜéÊqj|Q`,éQ*Éð&Fê°\\‰D,ª”ëDâ&Ö¦¢´`ˆ(ÑÉF¶ †p‰èÒìöX.|ðGâ,>b­yQ2ƒåÎ_eW¬P-‹P@îáÑÉ¢éè?Æ1/ê,‘…£\"å}	QÌ“'üOŠTäå(å)o PlðQÜ`ç¡	K’¹`Ð%\0Ü¢ àHKºp‰ì¡* ¹àà†Špª\r2DpG‘GB`a~tm&\$zMî}ÈücœbÃë L<boÌE€§#†òd°Òk\0’n;f´40'kç'ñë\"0_\"qÐè0Ñ*\n×EþÁ‰@è0¸­0—\nè¨²Ëã­+ð\rêÏ2ÉÐ™,îEò¼wR\0ùìh´1×Ð¿ë/òîÓ&´Ý1XJÄ< <Sñq¯Í*ò§\r‘1éWã2mJ§QpÞèRß3®êØKÍA\n¤â4.¤æp>ƒÏ§ÎÄìŒ˜ìÑ ¸Ñ²ˆŽ¸À“Pò˜ß…šë	”\0¨ à¬œo0'³R3\0Q+-ÚŒ*RÑ“;CˆæP¦ƒ¿3˜ïñ÷rý.rÂÈ-7ƒ:îÛ3ÆßPöîse;qm-1ý:l/:¯éä`aŒd2R÷Rû=Ó\0Å³O<g±<²Ûbo,p³.Òé?ÏkðÃŒa>ÑÆ‚1Zâ\r<ó‡á§q,Ó/’á@óA+Óô.UmD‰’òÆgT;³ûD4-\rCC4‹”\rE›!ëXjTÒ÷)4ŠüÊ+?;QR÷}Ó›6ÿ¯ÂwPG\0t±#NX0fƒ3¿Môöî	,/u?NH/}HtU!”¶X´UO×Ip;7/Ï2Ç¿6'/ŽƒÔ«TÏ*îÒÜ¦î¨wFé,SgR»Do@„\\ñíwMð^.3jŽõPÔù9/›%H”W”Zíòr‚cüIð]9tÜÂÏçe?ó3TnÂìn´E*ðît³­E2•4‹'<*mm\"Òe<@ÆÐÀ@Ú€¨*Tdïä@’ç²„°Í°†àO6Št³Vð‹N±@”g™I±‚@…Ét’O¢u·8õ½TŒö‘ï‹<U¢ü²\nqˆˆ3€  ªT¤ô~ÈGY³ï;HÊt5“Zµ#\\5êçAá-ŠW['¦Æ®[NfW®šØuÒì'!5d`èt÷NGwd4Éa“lbŽ‰Jœ´”ÿBj™VÓ»,Ó¿d\r;ÿ>õ/Lva?”n¾CÚè²¥/pú\$çozUê­1’¥\rÈCV;?råfVNòï„\"6Z–’¶˜ SaQeñjU	Ïx–ö²…·iv›iñÅRÖˆ´4kVôAFOlâ•m.À»iÖ¿Oh)n…\0÷öð…S•ovÙfô#mõ<]²‚l6‹DŒ' Š@OÊN/„¥Gœå¥}bÏN®3K²›]rnAñ¤P´SC“*à4³G´¸Ç“³gS¹g”@ö×X‰×]dvkQ´<Âv«v–¦4÷lkTO?OKÖKCöffFhhËFnñQXƒn]çu¶(_7”¸ÍBÝ?1ÃFaC©cW{·‹{ì½dn`ôÖ0‡)\noþƒ×¦xö¡eÖãf1jµEM·çhW{Ëéxó½V3r©QRÝ~÷efwáO«?«>òWq\\1›ÕG|GÃp•*‚{óy9C;8jUeµ1€V©R¦C„3‰{˜9€_v7=øRò,w7¸Yoµ\$‚˜?z¸\\WÖrî'¢ ïL¶\0/K˜KgxgE¯ZoØxzÖÀ'X‰¶z]¸‹ZŽóŠx/WÏ€8™ltq‰ï\niX†ÊÉ=OA‹X¡%xxƒqezZ7jÖpE<tic¸ôîùQE~¸—†OpõƒîÍäÏyÇå%·øMdJÄùu‘ï\r‘@‘øéƒ¸Å‘f`˜\rjÐå)KU©x-Ø¨ï]&«’b—Ii2ënðÄf~ÄMz\\K7…õJ”¢ÞûS ª–åJð¡—ÌqHåˆ-˜‡;U¡wvdýc\"¨ˆGû£Í8—4J–ƒ9‚§Í/Y‡e™‹šŽ™w‡L‘éIõŒ*J0ˆÇ‹öÄ°õsžŒ}žÔòd‚\r€Vm``Ö¶šM\\\r€ë%\n\"\rª\r Ì+Ð‚¼ÀÒ»`ÚË\n.J*¹Àª\n€Œ p¢äˆ+Ù—m‹ß\\¯C42ŸèpìH6-ó’±ýŸ8R™œ¥zjÆ³A–Zr¼Úxß§øÇy±03¼’…ÿ|†“=\nAŠæoI?Î\nŠï¬×Å`	º/£.-ó+5b~Ò@Ø·CÌË2{âmsË–,O2w®\"÷®n!±1ªô;†ôM£€‡eÑu±‘–#C—Tqè<ø2b	ç(à²Ë¥¢Æ„·†Š74”èBÜÉa®ãësŠAª–eªÇtbçqj53Û…`äfg<\"-±\nv›Sã«YwTmD¸Çò×5O·#„+–.dÇõ’o‘6«¸·‘µˆ™„—a=»wf`©%Œ˜šr0pºH<Z3‹Ê\r ôÐÛu!»­í\\F·’æY5Fw”]Ë9a{ª5xm¬uØ†OPi“iWEoDˆœ¦‘›yƒT¸UEÙ5³9œD€‰³à@Æ„¹Í1ðA5`É\0Æ¨á8c¸Âbâ~	ûÌœ›Ó8¥|D;‘&s-óu/‚Å¨0Ê¥±Ô…×G!.<³Ëb\n›jf’NOÚñŸõr³L2Ãô“—¦î5<æ;~ç®jwû}WV9—ÿ¹oÓ€¸!}é í•q¿Z«¿…a*ÈÓ)u´Ä_¯*X@	\0t	 š@¦\n`";break;case"th":$g="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv3¸Œc®ö•Ê‹PÇ¬«7›år\\&¨pÔÇ%:¸'µÍz}›¬+*º¦W®‡ß°‹NÙ3Y„íî‹ˆ5ysÁ¿ég¬Ä«;jŸÊrŠá=âÂô·%Âˆ@1“.:xøÆ›¯êÊ6“.\\Q4¼X×m(ÃŽlºvZ¬\n‚¤Ó#Æî¬É²\$±8e;.£9E‚Ï\rápüjøç ‹Pâ§®;hÕº¯z(­+/jˆ÷91\\,÷½±[E¿);¹—K|Ÿ5ÐÄV­’Ôòò\n\0™§èó©\$ \nC¨ž”RS”­§©›šíªÊ*>Ë¹G/ ³RÖJÄZ…(Mº¢¬¯åÄœÇ¼ép³Ãîƒ‡!S!pþÅéÁqÊsê\"¸Ò‹†ò'k:Å+JMB{AOz35MJ²Ç©¢\0YÌ-²8÷Ò+½(¸RíœÎ¼)QÚª™“r´VÂ¼ŽMKÑ¨›\\äÐTë8­ÉŒá7RKD­\nEpSïFü âGNÑOcÕ¶Tf—E„Ú§²û¬mE¦ø¶Öc“n¯¯ëDWs>™IÈ“5õZ]7Âõmhû++^â¡+#…º‘3”öÓ)ûÚP«(J®¿±¼6ÝÎJ4êI7Ë•<¶WP-±ãZù§¸\r`ë5\$ªˆSõ^Ja±ÒzÙ‰ëÚ­ÊÜ_#jÍ;P=êë´®ÜùèŒ:ƒ`@:#Ø2„˜Æ0Ù‰qPOÓC„˜¢&JÍ‘p”º‰Þ>¯äJ>Ñf<‘{H­«©ÞÜ”Z›–¬Ó1zºü×æ5mA+…˜ñ9<‹DD´TíÑÅ.ëdðN·VëšÐ2£\n³ATv+‰¨Œ|¿2\n}00½9Å…Ä.u½ÑëS´ü•ñhÅo‰=vÉZóo‹JðGClÎ87R¬õG\\ùñ W-ÓÖHìÚ@C`è9+=ýBúÇ·%14cVä¸g>UÊb˜¤#^‰Ö€(3½BÒe+CÓÞÚ\nÕô\nƒÉ6	<·¾¹Ò#2ïz>’ªUYª=äýŽ,ÆÿØêàB&]ü&Ó8†¡Ú*©èý˜&ºC˜s\r!¼7€§\n!T,=/©NžDÀ] Ñ¥ç¦±C˜NU!ÃRhyK&UU €Ž>hZ»Ïq…Aùê£ŽLGb¬ÐÂÃ e@€8EðæÃxr^a”<\0Òƒ(dÀ€:€Ñ0=A :@àx/òÈCHnŒ@º4†p^Ct„7C\"šXaAœ2‡HôÚsT\r`ˆÚxm’ÐðÂ\0 •AÐ4õæ|²!­¨é#™‘A¸:µêüÅÃbS/ðöž\$0ç‘45ÑU²ÀY˜u¦zä;DíÕ9ð €  ž“ðµ–3LOÐ¾¢%„âW©U*êm– ‰šZ”qÅPE±NÍÓŠXNÒ+*¨òÒØ]±¤€H}–‡!l9¤°÷¶&ÈcÉÙäc‚\0E0®V|ç.ò¸§<€ÔR'°Œ¤‹‚ìf}!G¤™Ñ\"Õ:•ô^ˆb‹BUlý.t¬©Ï\"ÜàLt±IsÕ¬—:ÕcDu-)•€²Ã¨ ja¸YPä0 uˆ4†vº×Á\0f\r-<`Òê0Tœ-Qy†™Oeü¾­!È7†Ö£ƒ´‹y‰ÿ8º@Xæ¡ŠïÞEË¢l+ùŠk>ÅÀdW‘Œz¯œ—šWb•‡x+Í¨{	h]c‰+­?CvŠ•àò¡‚\nf{ÀeºhÑA™ri\0µ?W.!g¤ŸF\nªRƒ;åÎk¼å®•ßœ&\"Ñ¢âÔ§Xå5 ·\"ê*ŒmXS,bgÜS—Žé+Oq„2›.kŠÙý K¦®ÇJèœÓÓs/ÆúÎÇí¢ÒH˜Ö\$ù £’ýY½±ª/ðrgH:&jTƒ«jœr*…àGF<ü\"PÂp \n¡@\"¨pþ!&\\Nœ´K&g‘¢òvx„f0|ñ-±`ÃæÙÁµ<Š¢çš±í§Ô‹ÞT^fRÖ³¬ÅBÁ7mF;+/©0óúmEÃaÊçÍo1Ûl¹«/*jÅ<<ÚÉì¥UlïfìÌŠÎ)c|eg²3ªÝŒÅåÇÇ«cDQð‹>E	Ä®“þµ\\ŠØpÍ¡èÂ^»Sù XV¢ÿ¸í²áÝqæEe¹%ž3vš°&g\\%0«Škedü•ÝCSnDÕ4\\4°åYdãÜU§hâ°äo‘Òc,¬a6¼\nL›l=G“f·ã”£Š2S9øŸ¨êDW¶_‡Ö¼Ÿgo§‰ØˆK	;'‚,ˆ%¼•-«–¦´·ð!@vfÆ¯%éòjÎ‚íìŠÉ›X5{2®#Ò€Ì:ó¿Ña´;œŽ\\÷&¿§nìÔÎÖö‘p1é™\np4tŠø9X¼KVp¦	È7Õÿ9,ý4.1:øiBoˆùð[”ìYÑŸ7Æ  T í÷\"mEûg¢,õ^S7T0…´tá;Ÿê%2ð9&¤ØŽõÐW¡ˆ9ØÅZk[P»·'Ä×©”Ñ4µfOË¼¹ÇmHÇ¼§4Ö†öV.:a^­ô0j1ìF=þòAÀ¢6nm+7!™µÖ±|+¾”Ÿˆžÿa¥­Zý'˜ñLûæ—:+<•)ŸXrÎ.e\\ÜâÌÃ¤KÌEÄ.þÍQ›*Àiæc‰^ÕqLoƒª¨À\nªõd4t¹þ·4ù9påÅ]0Æ–OØi­<Ë·’æß6·æA£ÍÙ›æ˜ï^=\\Z”Ûßp†Ë)ÑÒ|éæðEö úý¢ \\F4§­VöNî9LÒ+åêÍŒú½ÅT[…ÈxŽr3	Œ9/â*b·Ã•ˆõMÔÎÃ‹Êy\nZ~p2BLtÿÉ6ÇNld)ü´Ë Ýt MÄ?´N&ômFBei’ç~š0„PÆ\nRg0zÈŠ0ÊƒBÔjÔ­\$r(ÈÄÀÐ†ª„‹p»m.ÞG*)ÄÞŒ”>l˜3\0SçÐ±ëK(ßeZ³ÃP°Ðœ>þ‡^Ó¯P³PJsÇ´ê>þÍàyJaq\0ÑåŸML[0¹Ñ °Ñ%Ð]¬åìâþ­:t‡L¿n¤²Ãg¨]gQ¥xxQomKð÷Ðø=çP¶Yã9OŒ\\Œ óhHªmæÚîBA~cH(ôiÚOhLÀ®\"ßëü=±žd.,A‡¡FÁÈ\nÕÍèÂ„JNak/ŠjÌ `L&AÌ,ÙJÖíNÔ…®p‘îZaÌÚÕçí­dXQ¶šMHAëä©ÎBÕj(ýÄf„\rÖÓ#¶†ðnÕÖnC¬@ìXJQ\r\r\0¨QACÞ»®=£’oJhÊPb±¬í,©!\0Yâå ävØžXLfU¬m#m>sÍB<±ÄÕ¬#±å mÞ¤±8ÔHÔOà0ê^0øBw'¥Ÿ'ãÜÈ¬þZQi :‘Aí'¥¢GQÕñˆE©£PøXg:´²Ð¢²±--cMÄ9oHÜÍ.1×.¤1/bÙ/²¯7\"Q2Ò1õ‘…!.ËÄq0ª¡/ÒÃ.R'pÿq|ÒÉrÏ0s'\nîs1 ó\$ª3(¼ÒüJÍlÕh´`ÅlƒP+©önê2rÄ¬ï§ÐcR8£6c†hŠ PCŠ™ \nJ°‰j/02Û9€ë9ÉŽe,QðÌÓ,ó§9³Ÿ;M Ño0Q÷ºr€@hàÜ½hVj³µ1òóGŒŠøhâ¨à´ræxóÖ³Û9ÈY?“3>Àß?\0É?@Êõnx=ä4?.aÇÀ¤C¨0Žo+dÐ…àâ©!?ÄT3¥3h\\´7C³¡1j´‡2]CT9=´Oó;1s?,ñE”GD´aCó<ó>¹«ÑGT=2óÉ.‘EA„*cT:2ÙDT”U4¨òÔ‘J¦ó‡ý1Ô¤C@’põò\" šçíÝmäÃÀ¨×àÎØ4xýÐüèñÛMm€ìòÃFrÇSÓ1ñûN”ÛNÔQ”W<ÓO3ç,ÓÕOÍƒLŒD¬çÄo5,Á4ˆ~vñ×LÒ©)ßoS23PÓ¹HSDòÈÔÓSÑ4ñoTÍßSŽ³UQr	¾\rüÛÈ\n`ÏH ¨|¡zK±¤EI¢{¬åj!IeV¶¯InòU¬»-ªŽd¼5fßÒv¯=’('faZ5*N9ð/KÍnhh)£8Ês-?à†{`Ø`Æ\r€Ò`Ö§pxÆ\$éK/ä¥4\$%b°ÎÒ–@êŒ\0@Iz«€ª\n€Œ p:–ÏþåN\$Aì2â»§wG	¦ãe§Œ(5„³…jxµÇ‚fž@	¶\$ÀòÉ\"î'edÅapv¥ðAð;*£UPErt€ðÝ_=_ŽÇu÷K[>3Ðª‡ÀÑ¢*2ãú<E%…\nXiø@˜¬\0Èÿöµk‰d& û†˜OÆàÐv=ï-g…#Š¡S6œG·@¦Œ Rƒ–ß ’âÎ§<Îµ í‚ZiëTWÐs2Io÷x•ôôúühPšùö’\0@\ràá9ÉHãoÍnžLÃÚZL©6ªZ¢ƒ‚+·XÐ½•¯÷\$mÒÕâ;pæÁ0Íñvbgv¦h.÷pg%:Ò¢æÑÖŽI×L¼iÐ3,öÓ@¬ Æ ê\r­v§Ï ýå†vb\0v­\0CBzÒÜÕD0|ÂzLÆ/+Ì4Ïó†M¬üëÖ’1£’MI¤GÔ¼siuˆ3o¬ÖZåÿóqþâàÎ’'Õšjô‡Eóðl0Þ²(+¥;0Ösu&5RR1ã’d¦nà	\0t	 š@¦\n`";break;case"tr":$g="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùžnÅO‚¤¦“TÂl&#a¼A\$5ÉÄ)\0(–u6&èYÌ@u=\\Î“ë•\n~d¹Í1óq¤@k¸\\¨úDÒ/y:L`”ÚyÒOo¸ÜçÆ:Ñ†¼9Hcà¢™„ó|0œ¬:“I¢Ze^M·;aèÎe”,\rrH(ƒSÌ¦úaÓFL4œò:-''\"mÒMÇZ}»šXç ¢†¤ßr¥â‹±ÁÁšk\0¢Çh0ÞÖ:‡Æs2°Ôà¢É„àŸ4åŠ09Hó‚LøÜÏ¬ú¢2ªoQ>:0mZÈœ'Š’¨¬BP²÷0í2|:\"Løô˜¤(XÈ›4Ã Åo0ó\noËö#\rãpÖƒ\$ƒrú·Aƒ*B¦7Ã“ê4\r/ÐÄÁ¬èò:Ò(*ûê0¯,P9§Ì\\=*(kÃ¤6ª˜ê£Ì†Õ¡\0è±¬³SR0¶m ¢&0î\"u1‰ã£ˆø#X@ ŽO“T0¿@PÖÓ#±#ÄÍÏ3ÅÁðŒ9\n˜¤òE@PÔ%T­.;ã¬8:µT[\r5ÑÊ±KËÚR•ÇÐ2Rý<b×5µB\"45Á´ÛPÔmR]FU=W8¿(ØãFŸ\rióÖáVƒ’=@†)ŠB0R\rC,ôé…Áp9\r©ã\"5ÈÃ’Îï®I8„0«\rL\0¹Õ¡ië;ü¾‰òO<Ôƒ¬ÒŽÀ°ˆAq7h¾Ù‰öùàiØåƒ\"øä2 Ê‹¾2¡`@63ã ÌÉ]wj0ô«óþÆ81²=k°ãHÚ6O©8š0À·pážcºKŒ£ÀàÁŒ£%Ê\"ãF63¡Ð:ƒ€t…ã¾´#\"7#ÁrJ3…éŽÊ<2#r\r…áÜ96ã¦¢/¬‹˜ÖÂHÚ8Hiˆèã|¢.Î(Ð7ÅsÒ0m€Ò:‚<Ùìs,\n«Ï,¡­–9u¤<¨@(	†5ô0£D#¨P¢ÛòD”ô²jr¡M\r‰=^–Xi‚ÉÒ¥ñ) c1V„¡?€`A\0™’äè‹H“è÷VÂù4\nƒ,¤öpß?LøòÏÏÂ€ž)Šz>ƒd]èòÃJŠûä¦¬	ä¢×wÆ£Íºö¨yçIP×ËA{lÀ,†òxÌuo½®¼“Á\0SN`€3ZH¸F\nŽ˜¹¢¶l	+qðp9B G–'Z‚™‡Ô©ËØ\$ê™b£åì€ˆ38#¦ž8zPÖIûCïaÞ¨Ó±UT†ä¬\$6Fs˜á½ˆA\r‰÷¬UË:L9±¤œ#\"zn‘ÓWPßŽI†&Ö¦ôüÙbý\"Ì¼613.jJÁ¨C…8žRÊÑ©!fD2ÒÀX‘:)SÉÆÃU°±Ã@.@´…øòCpajf¥¨på E‰rgÍ8„ðœ¨P*U²HeË¬Ãµ0ä\"Ú’Bg¥œ-`Ê\n@T®\"„À‹-e¼¹—qº^Ëø2o,Æ™,ï£—’ÄÎâo8¬no“âÂÆœÀzKáÔ5šFdØ#z¥5/\0˜§¨õ4\rbç@!#\0ñQÊFtè¤,ÎÈ~›¥A¾^¥LÎ¼©ÌËhGA)^È`Þ[¦ét„ Ê6¬[ÔShV_™C;eÁÎza)À‰'Ëœ¢WÜEÄŸNe6B‰ú7\"™|ÄNÉC<ÅLÅ\"\$¿(:¶W5g‹o9‚IìØþ44àÂyrLÆ¤û30bŒÙCXHÕ6Æ_±ðMh©É´^ŠÚêâ­¨ŒÒVtX½Kõ[_\"œ¯¯ÅóŒj®\n&¹‹ Ãðdˆ€&³7xy«Â÷\"çê¾‹V_£é>°S~¹(y6ÂÃ¡»t6)îˆ{+eÍDOÁ­;IÇ¾IÑ®Ö@OÃúõe*¨•1ú·ÙÇ í›Ê¶ËâÜWèfE¥´èL ‘#€ÈÙW7<ŒÝ^@m\r¤Näè2Ÿ?ã w¡ˆˆ#¨Cš1Ê¶ç¤^îZ‚A ø‘zÆ©1QŠf”Ž†3aZ’‘~ºö#bzé±H¤* Ê(/\nŠ&Eâ’¢2!6-!nšÄd^ëü\\IŽÂ¶éÓÜC\$oª¤ðøà@‹0p#áØ˜?äÔY ‘€2)©\$ePHdÒ‰ÃAæÂbàÉ„•‰L&ÀŽ‡dáh\r aÆ¸3ä<Šl.\0nHÌ4Ãbi¯‹4Au˜¢‹R%&GãîdM…š±±bàÈ	>ek³˜6†ôôj§éÓ‡ÄØ2AxÍÍÀBÏ¨0æh!mŸ“Ns;sêš\rGèéÌÓ4a @ði 3ô`²ºä¼“Ÿ³  ÈÕM”†bˆqbC•–AÉ»\nk3’3©â:Í¬>‡]YJ™‹”Jâq««`X*uK</°Ì“¾Û*²fý}³þ´ÒšÛ,àÃCUF4ÙB§f›®.BÏakhì\\úÜ—ÃsØ7»l5Ù±8¢—ÙeûLeîÕZZ˜J¤ÐîÜ“ÛúPS#SÖ“Tœ×‚\0Ñ4“®/¯áHDÓ=¦°é€¬BÍqn1k8Ñ©~Ö)Xbàt¹\"ÅÖÐ;kÃJc¶r>Êð¶[À*])—J4²ÒÈº§&æ¦ˆ[ œ:ƒ8DÄÃ4K¦àôÓÀñGTéÈ/?ñ\r«¯a•éýw]šª²i¶~c`uk¨ì^×Ú;/™5h¡í¥9ÙÃÏ^bÇ±å\nÌ]%Âî6FÐ±6nœ½¬Ÿlòso,ŸÖ	?Ž`ûZæŸ#U“Oqì\0)#¢*QÊòšPþ§,HŒ7vB¾u†”{Þ¢˜YôÇ?Ø£„£293ì·ôãja¼‡¿ö½ËHvÞïßmø]–sšÓªþjîóYÃè ïTj´ÏÒÚî'ßŸ†~ê~úÿðü?7÷XW×Î4Ý?|Àµâ§x:ÆdÅ¯¿Š*ùØþßË:À¨-tûmxú‹è]æ1IÀòCø±\0@Qp´)ª¹T¶\$\$ŠÌ³Ž·‹bÝmbŠ¢D¶H|Cæ°.\ràà\"ÃÀOFøÉä`®°Bbp&Emð°ð Þ\0\\·°9mõÃØI„4<o®)„üªBXÂC6\0†8ÀØcäu0\rÂNÈ<]#”&Ç `ª\n€Œ pal<qëaI¬ªCÆq…qp°uÅ\r~¹âÍh^?B`)‹@›\0Ì#rg°´DÈáxDåbèÐ€ôd;McÂdÉúEŠˆ/B|U¥ 1è{Œ¢'‚Järô¡xã\n\$…r”B.x,\"èš|qBE.>êïBPª,ãb®¶¥—ŒÀãdÖ•Ed.ãkYçˆÑráïƒn2H€b>B#\nníÑŠ]Ì\\º®¶Ð„\r\rÇPÎHÐôÎÂJ«£s)ÖLO	ÔÔÌ@Þe¥LÈdFGà¬\"ž`ÄÈ q–€‘œ6âB¥œ#@õ<l\0èÁ„àI€ŠD‘Ø^¥–ï‘ZØ)B¡–;bÄ¡)¹CÀÒ\nrqŒhfãzTÇB6/à0\0>@";break;case"uk":$g="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”µÂÕêlŠ]H_F¯M<ªhº¦ÁªÑ¨ä*‰6˜JÖ29š<Oq2¨Òy ±¾,*Q¤= ´£Á\$š*!`,‚bš‹ÝeqQ˜HZeÌÒåM¦\\eŠÓE3¬Â¯öc®Ûb·×hRë½­E%„@öqûæÝ/ÓA´Hx„4§™Ðµq¤¦#s›au‘¥Æ™ˆ\\{ ¾YÖÓöK3Eªø…\$E‚4I¡É=JòºG£E\nô»oÉ¡	;Íò¨• „Šb”»OjZ™°Š¾ Ð\0NãlÜ<,1ì2²(ÄcIÃ:b†¶ñ) Q¿æƒz˜BÑªV^æ‰š4RBl¡@NúèG#H\n¦Ð+2Šk%¨„h¦µÆ‚S/ q\0Ó(j¡5hÑ.ª<²¤Ø¤¥šG'4ó”èK)-¼¥(3ì£nËKÛ6«%	‹² ¾ˆr˜•–qŒÐ‰Œˆ#&±%àHKLÐ´ã#OTÜŒðP”²’Ër2 2Ë¡.…*ä×L5k'LkÙ6#MÓ¨ál|ZÄÍ«Ác¼M&“®¨BWI©)uÏ2pZdå!ð ö·I’¦†–‚ ;ósÙB0ê6\r\0è0ŒC`ÊŒcÜ\nbˆ™F¥ty\\?mÌ740ŠK~”´rã!Èj]q7tîîÚX„O^R²Dü®P´¥PÌÊz—Ä™ê™Ðnù\nŽ©ðŠhƒ6¹‚j¨ælvkš9îMGŽÕ±;HDû»\"¤nhÐÛ5ÍÉe¥jY²aœc”#B¤”9£DÔÓ>WÈ VxŽ³ˆ\\¶Ð´c`è9Ujµ¤ÆÙzé¤ª¸†)ŠB5Ô1P\\‚#–ººã¨Ë¤F,tè²š\$Jâ%eº×-OÂH“íÕ?/–ò›Ó\r*«\\%*«¤º½t8²!M)ó¼|%9Ã(å\"TO+IØ#g:áª›V¨‘ƒ>Ó5ƒ(Ö;mzmh?›ËÁç]42˜gË,Ì¤·Jz×¼íC¡ä¶Ïô¶:ñBhÂ9Žƒ(ä˜æ;ã•2CÀp\r!È2†G \r3ÐD t\0è‚ðïÁpa´4†çìŸègá”7B0ðýCps\r!¾‚%ìCg¡Òõò¿ƒX\"Á\$6‡ôa t€¼0ƒã˜\"\0t\r½L‡@ßk_a¤:?‡ìWôA|m±t—ÇpÅ\rº¼/äi@‚åÓ0 \n (Ø¼ÊN<ab¦¤pRl©J)Ìhðg&ØÞ¹Qï(á;t`±ÈAq-k’A+Ó¨”!Dxe©É'Ðº!@bEá—EÚjd4Ÿ‘\n ºòšãH+‡-/2P<sZJžS<¬Ma¸ãRYËZsDn(Ü§‚ØPªF „€X¤ÓÚ/#PO\naQe4tI*“šÞ%ÒÕëÌ3?1Š¡2QêYI±qŠë”Æ‰.¡´W™\\r!I´’˜¨ŽvÉ.'MJ¦õ|ëIàY\ráÔ/ÐÜ¬>\rðh@ÄC8 `,3•ô°i!*\n\n”Èi‡¯ö*Å@@ƒo\r¤aûh>°Uì»hŽeÌä‚ZÐõ,hÌ± »EŽØSÁSsÑÌKµ¸Ü;eeI‚R\$!BÍÜ’‚Kä5ð½ê„÷©sALh¨‡JtëâðÑj.±T²æJúZÑîv¢U¢¢¢]yÌS½ÒÆ¸ÛÅ¼`@ke>L‚ÎÝ^šE7®4ˆógZëºgív“Ók¢â:óm°Õ¤ÄÃ*úoÔ27Z‰cYÐ3Õ1·-*ŽÐŠ!Œ!Ìd¾I†Öc‰T[µu5×æ6ªeÉ›%ÅÐãÛ92žÄq„LKTò›»\nJì;\\)Œú‰‚œÉóQ#‚â\rŒ@.rã\näM*¢®]¢¥‡‰)“EÊùL²âq/~î!9ÈLP\\}m§\\©‹óô¹Içm¦zð:ÔüºjàbìáçÂyƒ,båQÙ¤”r\0ºQ™W&—,³‚5ªŽ±cÈöNA“ÒÎN8E»õdípºLÖZÔ¤,–•éFµÄjÅ¶*°‚-G5Y¶Ö¢CJdë.¨Zh²üL\\ÊN9’jZÄŸ¢E„Ì¡šY”z½),ÊäLØ”®[fÅ-œÂ;eÜ£1 (šZzªˆ[))4ïz§£X(Á½0éL^ä£ÏÈ·ZI­4Áî‚A<§ÙÔKf¬‘D%éøÉäŒŽû\nr7«JIÚ›jPj±úL8*£µº’í£”MXùR‚ªe\rq±xL1)ò°Ÿ\nc„Tšž×!]Vƒµlš<ÃB]!5NgIDkP¨'Ëm±Oì9ðe3¬¹³À'Z(æa®òèØµŽ=å‚?°™&Ä©›V#ãñ²ökÙî‡h²Íyo6LÛ½p}M²-|©´V¯Q³zÊÝ²Ü¨‹“ÍL÷÷·Ü˜Ós==Ñµ…öËßéŸ[;mõÁ5ß×Î-ðp¥AÃ5\"©ÚCiëÝ«mHû›\$»íikSÄCÚýñÌå…#4ýpú„ÐîÊ´“rÝ*Ï\0P¬æxÜ!k.]5TE&‡@w;äÁ!F*\"†>˜·	N×¥K•ótäiŽÎPtï9ò›lÞ†Þ5ŽÁHÕÂ!õ-™ÐlÞB½O’CðFŒµ…YÕ Î¼SpÎ±õ!Kbzµl.]p†µQâ›dqN÷m±à%Â¹õ¶Kåü4@–­ò„¸>%,÷~a‰€TúŸ 0Ò`@¢xpA¦ˆ¯¨d×´O !0¿UìO°^ëä2Û\\Ù\n¯Ù¾ýfwÕ¢N›åJ\r^wÌ‰Í¥ƒ¡ŸBaÒðSOÇó-|ÅeGÀ~ðÞ(Ä«K™;¢<¾ù\$¾#ÉeòcùŒª=XÏ?ÇîÍtu¿z†±Õ¥åÓt8îæ¸ŒKR»KÈÿæ¾þÄ@*	jHÅ\"wòÿFN/P{í PÐw/þFð,É¬6Nkð0«ôÆnYl†À-øx/úðÇ¾ò„á,X;€ÇÖ*,6Ò£6!2Ç \r’ Ëâ×@S\"XGg2¨j¢¯Òðâb±\n˜¦Ìª\nh”°VñÄ&ÂcÊšC6×p¡ð¤m¨þo\0\$ó‚Ó\n'Öi—¯í	êÃ\0.ð¥fSêŠfË@¨pÄó×	°^uGÜ{°—†sË>fŠœ4Ð¬+pÚä+,1	€5Å¤4¯ü].æYŽº;Š¶Y	ìzNÙÃ½\rq«ïÙ‘\$þ‘*äq.«\rcQ£aï’‘DØo#	ñMzáñ,¥O/q\\Ñ©`ÛŽtðmï\n©¹ÐúOÌ¬âŒ²*ì¶\rcdýÜÙ±šÝ#ø¶ì¸0‘kÐÌNq²Ë·,»+»Â¾¯ŽvdvOŽÐF¼)¢®.¤–o¥Ô½°ÒDˆðV¤ö0þ»¦ ÑÜëñâÑŒvÑ2/j¾ÈEÙgØÏ¦Ž\"	ÿêü“LÞÇgžR\$±ä.bê:Žü Kckk±B4ÉŽÔ\\¨»\0ïô¼,ždÏ„Ì¬ rDðx²ÄôÅCOñòÅ-Qö(±—(òƒ)1Z‘Ó¯ÛàÇçC)ìVÃˆÌ+¡)JuÌì‡­+ò¢þ±Hý²ÈÒÇ\n‘oÚÇª¿+a-…*Í/gÞJìÖ>QØDXÝ‹GLb/¯¾Ã\$h:DöÿŽèdÖ8ðG1…\nÉ±11ZÑ„ßtýRÃ)’Æ«1ƒ31ÿÇAmµŒ#41rÜÒÒáòäëDÒ…dxe~Q3c'µ!­ïmgòðg,~&ójV’½\ròòKóy40+Ú,tàÃ¢â#¾\\NÈ.©PÕ\"Êé>yÐó3‹/)³²=Lö¶C¤š²ÏJçóÊOf5=	==SÃ-O(Ós,í<Óãs¿9…!ƒ¹?~}\$a0‹Ø òÁ<pÍA!5¢M=³Q?3†I@ºgt,½Ì¾Ì&?Aq­5ÀÌÄÏ\r’ÓôFO4?=r§5ô'T+CÄUC^kÔh+ÃÎ0ÊÉ+‡¬\\LdÓEžÓå3p™3ÏÛH\$^Óe¢>R‰E3QIGNj´›H³I'‘Ôý¡JDã&GÁ2Ñ55dº½ð\nÆo@ê#&ç“d4”ŒçSbÛ“–wíÁñ°ÎŸ2\rŠßôæJ²Q4¯MÔò\$<Ûtù5J¸ÞS\nsâí\$ãòßï3 Sê4ÞŽ2Q •u4Ñn)Qdò”ëMµ9ñˆã(CSq•N5?Ë`@†n`Øq¢PÊéÄ×E+„¶Èò˜“í7B'B@Ã\"xÊ_`Ú§è\0ÄŠiþ\n ¨ÀZ\0@„€Æ‰¦ßÍŽµ­’ªóÖP<jqØäñpÝõ¼>ä¿>°²ÎÆ©\"UÏ[­P“¢5Å]ÕÊÜËTCb@\$I€g\rpU¤Ð]KÅä°	µ´ÀòOÁdIªü%.Þ®o¤Å\r3IuÊ7ƒ}#lâ5k&Ó¢3õƒ3{WdeW¤ÃrÁ\"’5Â4Îú\0˜ `Èú`fj\r§ú_oh^â4èc¾r\næ®*n(ìÏË&¬û>£¸0£nÁïÛi/ÏitÛT%OÔÿ6¦øö™bš×î[KÔUkL_k‘t;Q«,GÒÿ/.;B@|´,Û,ª%–×6ÚìCá+3GÄ,Ù'lüÏ§²Pÿj¤@v°#:šá¢˜ñúm+5r\$eò ¬ífLš)	\nd‚¢«cé^mdU@¬ Æ ê\r·nB†<¶‰QÆÚIQv%¢³,\$®kIFï„Å2óå¤Îì°´Ïw0u†NÕ0fb‚öuÆPD'q7ŒçÎîBÃü×æÇvR¹;SÎÊÔU+kÖ<„³ri„a£æ} ";break;case"zh":$g="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªXçT®NTr}Ê§EËVJr%Ð¡ªÊÁBÀS¡^­t*…êýÎ”T[UëxÚðè_¦\\‹¤Û™©r¬R±•lå	@FUPÄÕ­Jž­œ«u•B¥TËÝÕdBÝÎ±]¹SÖ2UaPKËRêYr}Ì—[:RëJÚµ.çV)£+(Âé€M¹Q`Sz‘s®Ó•´:‚\0•r¦×ÎUêŠ¶ˆKÙï.ušï£—SÑJ*gÇxÒ-á(ÚÚ½çP eºç26\n]ni2Ô—¤ª0_“§1@œð¹\$seKZX?¥rZLÇ9H]:\$™ÌO9\\s…ÉÐSÎÉ}ERÐ¥5åÙuÃ.ixKñ\"‡Œ`tId#	Â®¡{GI7’BZH‡9hï\$åÙÌB(eéçCG1I¥Ñ&“*|Ì¶‘„²Þ'‰qXsCñtt“\$ƒ”æ¤QP€:b0ê6\r\0è0ŒC`ÊcÂ7B˜¢&¤Š<]”‹iUO¥AÊQÇI3°Ä™Ê^.g\$ÏFLpÿL°\rUÕÅCØ^LîS“ÕµOR?•„\0sÄÐS?G1:AÏƒê^¤)Kgœ¤:µ]±³ÄýÃ^Öó<\n PØ:IifT\$¢æÛ¤d©b˜¤#	9Hs‘\$b­Q©#^G’0Šj´¤i*Ëœ×]Ú@4“ÑO²â˜Ê9ŽcHÞ7HEù\nt”%ÙÐQhI^Ñb¸¾3ÈLã\0C¶¨cŽ½àakUàÖ‘©[²âhÂ9Žƒ(äæ;ã”‚2€Ò9£ \\ƒ@4jƒ0z\r è8Ax^;ípÂ2\r£HÝ£ÚhÎŒ£vè<h£vW»T0Â9ã(é¯‹ôM5„Að’6ŽPÛºŽà^0‡Ê0æqã Ð7È# ßÌ#]4ŽšFŒ6Ñü€\\±,„ä&Ã±01Ì±¬±A_A‰Ð@(	€@Ã1QÊGäëÂD(èaË±—¥É‚eh¦©»ØÅqkÔDz¬·>UúPrÌºcN…;Ý‰â˜©ßØ%r­j‘ê	#WÄäDx@´ù<øÜ° \"/‹Ò\n¥—Ñ—!¼:‚Ç«\rí¬5 ÄC8 RA0`Ò¢\0v\r-h#G|£Òiq5ÒºH:ƒxmQ;7d¼DCøV/˜Î¡@ž\$:@]q¡X„€VÂ¼Èaø«Ú/ÄØç,åfðÄÃÝ9¢([a\0~Š90äN\nÃ(òEàŒ_%ÔÑ;À ð‹–@LàÑÎÉh =‚¼\\–ÔfÅ”Pch¡ïÃñ2¦NP·`Dµ_+„š'Dó\r«_°Á.¼Vëò-DÄK.ÔÃ‡,|A<'\0ª A\nQÊPˆB`E•fôK½‘j|ÊØH^\\sRjÒh•é”S\$Ô\$È#èéb`›\nAÊ âê]‚Ep\"Ìgƒ˜G¦E¥5„QsXEÎ#š)ÅÜ@-¨±GâóNjWTèY£¬(§™-K8s‰´N(:­£˜[š‘(\$äžb™á‰Û;ÄB»H®†0JVÄØº Âht‰1|˜–œ¡ZX¶‹åMI0 Z8¨	¥Yƒ›¡n#˜’ˆ¥%¢|R–éðµ—h™H\0‚mSºz+Å†óhƒM±^%Y%H50G‰s¸,G(“¬1Ú:å*¥Å##u*mz¤ïÄéd§”øÍ‹&\"ŸM°‰©b…3ªåQIáL#ä„PŠô.	\"¬Cd2†t'iê›=)ôöàÃ(b±g®‡×’QŒ\0›VY>T(&M¹š\"ps\nÔ°.Ä*tC¨~ –á^VÄr-çs†?!ÑÒ<GËEv9ßDD†“\"~É¢Y[G0›Œ\nâOèy[¦êÑ·4Wfutfü¡ 0ÃP@œøpA¦(§åÜð ‚!0´UMèQ\n)Õª¡:«/±ž¢ä[Ô.Ìj;G¨ü)ÝÖÜÐ=÷*7î.ÝJFfÀ¸2\"àUHYÕ[aô@<W>z¢œ7&îÃä°ñK‰æ9„˜Ž;è´F\"Pj‹	ÊÅ‹\\Dc<M4\nÙœÃ¢æ{Ï3C<…à•—ØÀï±x\"LÂ˜(­‰¾)Å†93· D{žÀ*ùóÊØƒ)Ñ,·qñÐ¿V‚ç/ü½PRÃ2J+‹ŸMókÞË˜ï8¼Á` Í½¥ÑM2ˆúÄ:3¹¢ª5NºV*¯VjÞ\\Ís8RIÑ)q²–;¡:?7Ñ³F´lža“î*ŽQ\$#.-)úu2R!dS®Ÿ¢à„êtþ2«fELTjHøåÔ¬„²™%r#\"Ryš#µÙ©Áf‚Mésgö¢[xì­¾*<+n;Eh´íi[…¶Ñv•ÄS³nÉ½,¶·\"/ÃRCÓ\"™‡31ÝÄ£qi}æJKV;Þù›{ªfŸA_,(…e^®EtÛ	èHëòTsVì™Â·=Óå˜–’â”¿>ïTmKxâf2úHC¤³]@™}/ßœ’¤ÊoÊbœOØ‚lOkcp.}Š¼z&nwœ÷Š)çGƒ‘ôsÐÍ7éFásnyÓ·ÏFæÜ¯Kþo”öø§¢´8÷oÇE(mç‚‹uÞ£×ú×a±Ü¿´öRóhMÑ¼ß{¯¦Ó‘o×§·véýèµ††®zä*GC•–VÅÐŸUœÉŠ_`ÅÜ9´ÅlRó–VÄ(±&Â„£HC£äŽ÷ŒÂ—QáÕakÅíX«F\\!®€Ø\nÃl\r!Œ5‚XÖƒ°a\rÕEÞÚçHf Ò:°ÔXm­'FÇ¨TÀ´êþ\0nî®³ÔÈz+Ö‚ÒädhŽØŠ*Ku=Fa7à|/0,Ç@Š¨²^9ð>.…ûZÿ–\n£Ê@YLèÏÒ™áxˆB¡Ò£¼z\"Å@˜‚`ÈÀà((÷æ¨ØPâZ& ÕAvDA<:k¶Â°¢bÐ¹áÐ¡XœLFÌ0ò¤öÛÌ5\"Ô\n‹æbæ¶»¥ùÆêöÀàˆT\r ôj§VÄ­>Ü´+b¨<CÄ¨žçð+l‚ÅT’˜at˜­€°²˜Šj?ÐN7Cˆ³nN\nÀÂ`ê Ú#x*AÌVDeœÁFb\nxDÂb>‹j°N-°XœC”5á\n3A\\hZ(òÄøçÃÀ-¬ï\rhAMF îà7`	\0@š	 t\n`¦";break;case"zh-tw":$g="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ¢.©‚ ’Ôr}Ê§EÒÖI'2qèY¡ÜÉdË¡B¨•K€§B©=1@ ÷:R¬èU¢ïwÕDyåD%åËhò¶<€r ndšÒ\\…s*.uªAH¸Òä´×*ÝeQ©Õt8;ó¡\0…t¨SÎTõ…Ì•\\TRô´º–ÊŸs&PN”²NZ­KÇ–W¥Ò1Ò€Y@±u²ÉÐ·WËW+èV[‰·_í6´Ë•t«s¬×yÅéxº²Ô5g*áfèLÃœªô4¶´-KcÌU¢äÉv—ªY`\\…É\nsÀÐ@t%Ã(CÀ\$&P•ç9H]3„Ì°/Eù\\s…ÊHQ1,ðÄ±<S­‘‚ÖX¥<t”y6W\"å¹PtŽÈJ2ò:¡@æÂp¬.–åën\\BdÙr’B–HŠÂreÙÌBî‘Î^È1I<Ä|&Lª1TB„ñÌ\\r‚xŸ àP¨2 @t’¥»ÌS%¤Z:^“€PŒ:ƒ`@:#Ø2„˜Æ0ÀP¦(‰‡)\"^Ì…\"èC•G-<Ç\$ò–D’n\"Âr:¥ÅÌhò¼õäfñÆ«|CÖåÜ@À×ï\rWðÌOÖB–V'iêZFð‘Ën¤9t–ÙG=™b-«zét@w\\t•zÃ\nBÄ™\rƒ åÀ÷.Œ¶äBhÏb˜¤#RãxÖ2Ë‹\0E\$9Âãž˜-ç),W4'1ŸDü!~—M¦2Žc˜Ò7ÁÊ_¶tEYÊJäKöM”eYf\\ÓB„s~†˜~#‰’Å†G4(Â4JàI©ÌC'AZD´\"hÂ9Éƒ@8kc˜î7ŽRE8\r#Ê2Á\0x0„FÔ3¡Ð:ƒ€t…ã¾ü# Ú4Ã(älƒ8_†qt.žÁxEKŒ#Î2Ž›¨¿MTXD	#háM¸`èã|ÏŽaJ:\r|:\rýpÃ…„M8pÃmAÓ×ú4Ê²ìË6Î¬K\"Í2nìPWœÄyiŠ@ Ê2Ä+0Í3„\"D)f°•®…³`@‘Ér`™`mÑÌW²¾\"¢jDã  2%æÀÖ')(\rä\n<)…@@´E\"­(Å=‰²„ÕWCEæ½þ¿÷X1¤„£BCxu\n}–‡WFÜ nˆ4†p@¨Â` Á¥M‚\0ì[€F\nBä]dPÎê ÞTë†Îà´æWaç4+DóšSN\"Q<†…z!x¨*å0(Þ/—A2%G8?¢ Ã‹¡bº0¸E%r.\"Ä\0æ¥„¤q\"(¬!‚h¤(q\0#ÚÕzïí<gºëàé‚¢‹©R\nX %é¬ÕÔÉÔØcIïÅ‘2ªš<d‚%	Iåâ-Q\$‰ÍB(.õ,C,e”³ŠhIø–‚øC‘-dÌ›L'„à@B€D!P\"€©š E	jó\$˜åâ\r+¥Á9É’6fÕ	¨•”EÂ<¨LP	4þK ¨c SŠ2–ÒU‰†1ãœVˆbôGÈ » â.„‘qN.âÑ¢Eˆº9.„a¸´C”^áÈ‰•èç£TrLAÌ.„GædL¬!s?ÑÂ:˜3bÌrè)ÅÃ§Ír,±?)È™”ì«dƒM€€h…m­Õü‘\rÊþÂ‚¡‹Äå:#jr‚èÁ±l»Ôa§Æ±!šò–'Å(è\"‰Š—Ñ?\$…yuUI·ÂZ'Å½uÕ¢µ\n žÚ%t—ÓˆÅÑb:Dø¿y2ñS*v)'Ý¯Ö`4@–Ä@©¶N_ôdL|­sÎWb˜NHù!fˆœëRH¢°çÂMš3a'\$ÀÂxróãQ ²G‚ÞŸ8|…E§BÍ×™}r’ º®A[n9…h¢%¢Ø!Ä=t–år&1Ô@šD \$„)bàØJt‚Ò).¤A—ñSp‘èçGñZÚ˜‰Lª¢°æbÑÏ+ôÇ& ë#øKº±P‚€ÃÁ\0nv¡À9˜n¦Ü»­v€‚@Â“¸h\r8‰L©·‚®Ð˜%ªäÔáL9ÅÈ¼ç4s¤\$ˆvBžpŸãm„QÕ‚PkýDm³ÉòžWE:,ÆM5FBç+Kl°ti)Ë§ðÎiÐ{i!”Ç}-ˆÛÐl¢·´¼˜Œé™§LøŠÙjÒ::Ósð•63¯9	w¾¢PºÏˆ–ÎÏXU4ÙN-à–€Ä°Š§œÑ~ÊšxÅOâˆ«Ó¹ña®ô04üeŠÚRW/-;X—6 ËÒ¾Xˆ½G˜UöWÖ’ç‰†#Ð%XN7ñšÜÚë`C%u¿¶ÄX­W\"Õ3˜“Zë|·´©®ÕÒÚzŸm¨jé5(Ž”IÌK70G‚ —yy~ÈÜÄÕ_è<âÑ\n¢ñ¥b ò˜’tËÙŒ€yy.ÐR*7Gq±”ÂKSÉÀ7Y¨ß3\0RL-§M·>ü•Ôº˜+¢bInY×­¢òß«ö„§ä”S“í½aÅUäÅÃéþWÌùW¿õn®‹m¬¯yâdçÜ»Oô¼jõÇF«ü¼ÁUÎ„„Ä±‡–RàNáÌ+Ó–ù Â1á|#1¨ç:SaFî~ŠJˆì¢?WéþÓÚúF×J±ÛR–ƒV)î±\\)XÜw“	ñRíd´M›2E½§fÏ¿ûÄöÝ»£‡g>0K÷{å;õY£*-xmÑ)÷žòÈ§ÏyŸKç2¥8§GÏÉTWÍ	f«Õ>ª¡TOF¯½¥C§3×{Zyu!Æé]”ŠJÈk„/’øæ¿Çk—ò_ Hka¡µ‘xØœJXŽar\n*\"‘Ùq’B#6x\n@)€ìÔÎ+±v‡@¤CŒ^‘qp/Ip±³ß„°þßÞ!àÈ´Ë1pÙ‹4 †_@Ø`Æ\r€Ò`Ö|n\0ì Ø¥8Ä`Úv@ÒÀòw èx Œ†…8\r êk„’S‡™à¨ÀZ\0@a€ÇÀÜì^ÒeÀ¡J°I~|ˆœ#ˆº^ÊÔ:Ít@›Ð@Ba.Ð¼«ÞÇâô¢ø/Ìz¾^9ê––\nhî¨¸)gì®¾1ë†@˜…\0ÈÈpÑ\rG\\l…8ÄÅ0Vhò,ÅŽÅ\"À+Øâ°Ê­¶z*ÂX•Ì¢¶äèç+db„C\rtÒƒB\nŒZeâÂå8@Êa(\0èˆ\0ÒFÖx1Ü®n¢âª‹áÌLÄ%ª:ÍM -î¤‘fÑQc‹¤Â,¯Nú\nÀÂ`ê ÛA\0 f[á,Í…¦¥\$V¯dËPÈ+ÖAâ°.‘¡01bhË¡âé1óÜNðß!Ìƒ€8 	\0@š	 t\n`¦";break;case"no":$g="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤èo6‚ç#IœÒn0›D“qž—20˜§æÈT¤@\n)œL5)¬B9nÅjY¸Ù]ˆW“]6˜a;N-†ã\$þƒ¢éªdš,eÉ]ð£¡äá\n¦ÝÃWÌó#I’àtŸYt*û\rM>Ð™fÇhUØŽe¬n«€¢eB@r¸j5’œ+yÈ¼^¡V±¸Pëzí1ÒÓ2ñ5ZºÿX¡\n6˜bæã¤sU__\rš³&œÃñ¨Av£¡×\"±‰ð@;\r#(î@\$ï-CbÄ'!\0ä0µÂÊ2+­\0J20CÊ@Ãpê@9¾)øÎÈªZ5\rè»)Œ#kH7Í8Ü¯Äâšv»\r²¶í\r£C:.\nÛŽ\rªúÆ<\"˜×	ÈH*)Èû3± Põ‹úË°rÑhæ1½K€¢&£Z°ô±ƒx Žª¼”ŸFr\"è8\"àR:3·LúÁ\0£˜Ö5¯H'¤iòl‚Ñtkîî»ê\rFQÂ‚¹-Šó@\$£„ŒÒ¦…H·OlµT%2ðÓt³ñ7ƒr>Ÿ©œÊ4'cËp&<aê\n£8ò6C(@!Šb^òX@„kŒ¢Ô¥80·HÈÏF\rÉHª:\rq­cÊÝ%&05Ž“0è¦ÈÀÚº@m´E/#\$88.—æöÎ£bv8=¶År¿0mÒ3¼–îR„t<:\\ÖU™u¼¸š¼² Ñ¢¶ôŽqeÊ•#Î8Z8;.Úš€á8^8ƒ@4'Ã0z\r	°àáxï£…Ð¤“ÊØÎ©z€ðWCLZ„K@ä³™ø¾1#²ˆDTƒ‚Ù<¡Aà^0‡Ì0@Ò*ìjJ­²;š~\\iÝp³ã”à¥ã‹d¦N°# <+\"ÌÃ±;’t\\_; \$\no\nÖ±ÊZ0(¡NfÖ>w\"Ì¿¬ÉJV§¥é‹ÔïLC2~::Š`Þçà½Ã‡)}#²*Fèî•”g,#M½K^,¨(„¥øƒpX¦ÁÊyÇ§¼Ê™‹²3lZ“ïò=•pÂ}z\r-ç\" ƒ[ÔŽe©\nG·x§5…©0Ù9ÐŒ©<Š•S·³*„È)Î*L­d¬´0}°b<¥LA#F@a -€4©0æ[Ë>PAB”ˆM[ PEC)àÞ¦ ùÆ<!Z\r?ÖÀh™Þ?¨¢®ÀäÊQh:n¨97*åÜ9A2'‰Š.ÊAJÄB(©M*‡C´Ž:8Je¤µšh|Ò DD‰UuÉ1\\QEÁJ¨èÇÖrµ=\$¥Åt&cC‘HO2äv[DW‹)|'„à@B€D!P\"¨ù(L²0‰†õÒeÝ‰×ƒHÄÝ3u‚¡ž<!1è%˜¾ŽNñŒƒAç¡ƒ@Ó{€ƒF‚R1G@ÆLÁ E±š’G.åé5ÁF#¬*\n‘qIY.ŸK!%¦A<T™4Î@K\$éd&—BÅ5N e–Êø’Ç´/…Âï,AP®DÕ‡8\\ä6t³ƒÎßS€#…-)RZ©¢À\nBÁÍ0Ã¤PÉÍ=N¥~j+”Ž¦!9«0gHä`ÊIÈËv3žÄˆcº C‘ÞW–öC3z=¡<%½:@…@È„±Àé2Æ”¤žRºZQ)(tÈ4ÓEààœX MÈÉ.÷¬Æ)Cz*¤5>äÅTiè ¥€º‘TªsV\"ÅZ	d¤%†¦ôŠ	<d#¤~-•ÒHëY36Dª:jàB4y§<pÊ«Ù\n4b)ÖVôb|d]ˆq×un`¥™%¢åˆ\$b¶R™;&1Èû¼´2@i1á\nU¦8>«j=£1¶”€ÆEg	Mª‡¶˜ÓžÓÊJNj“< )ö6óÔäU¥u!5EV	‘±áÍ»øRÐQµfAW½VV!BÃ»\$„Õ†dŒPTšü'Ð<©Q|r.Â€»&Ý-Ò.TK„ H“-2{M|ª=ô‹¶°Ã]~®³ŸŒŠH_ù˜\$Èm\räØ­É¨°TQC7†¸ì`ø€‹°q3ÂáÎL—Àå+ŽDÑJ®iÏÝ%&¹”S9™\0P•Ìh)42~ÞBÃÎàÑ‚/ðzü>¼lYàÉ¥\"•I±¬‹'à¦?¿˜ÔcèK}ˆ&¨ê@¹*ØW“ãbß\\7ß&ÛˆÚ¸iCÉ‡/e¬Ã”TC§4)P³Öçë\0t¥Õ—JgMjæm®YBSÈ±œÐ•B 5£W‰ÍQÙ	1n~ÓæDQ¡çDêÏ™KC(Øù¤tV|Ìx²M°Ê¶\rSo›Ïzg”5öÆ ÉF&“+šyDôÌiíÔëôÛ”\"˜Wæ•Ì{š2¦íJô ­Ä‰á:ëÎf%¾³J°ÈŸG­-9ôI?%SzêÍõ8g×Ø¶Ìœ·š/ñ)™o\\{¸¶ög—ÙWG^–3/P\"A;>hÝ9¼Ü“Í\$¤\"ïL–«4tÕ)´9UîÌÃÁ!ÌHL6'Tˆ+á|±‰„6gç2`ƒ(vƒT+=ßÍíjsvúÜ<r†oþ\rQøfEX]CÝcÊdXG‡*`BKÊÙWæÅÊ¡~g@Ñþ3¦|¸åsòæŽ9¡¯£é®½ú_M¿šS~(ˆÓ\nZ\$æ¹X õ…t”åŒÜý€Ïà.ŸÊ:·Cæ<™b¹Ù= _bË©NvÏ^E‰û§p6=›“¸<çw:ÊÞz¥3Z–®ƒ™3TSsw3¢Bwxñù‹³¸¶î/\$O¡ã'ÒR•È…8Â«è\$”‘<†\0€ÄAþ¼*ïª37Öo]£‚\\—ª„Ë–ˆ}·\r&Þî;ÓíQsÅ]¤šãèRRÍ€la¬¿ŒÆ<­x×y»ýŽ­jÌž‹ÖaÙ<Y08W³‰(†õšÉM/C…NE‹aò´Ÿ\r?Ôãæ§Þ®£x>b0Ú¢–å£pBÊÖÂ#¼k>ñc‰ê¬`#¸¹Ï¼åË¦2´)kps\0 Ëà»¢½Zmâ†V@HBØ¸J\rˆt7H¶¾£ È,tƒ£Ú1ÜþÌ\rH0Ç(8R`Ì—À¨6ÇcÚMÀà@¨°%0ˆÄŽ’Þðž2‡ãÚ\$Bf=\"þy°v‹«Z5mâäHGIÒÕª3\0ƒ	¬Á¥1g×0Ü¯\$\nÕªÐC^'ol¤NR²,\" 4\0‚,	xy¢àQ‚è`¼äæÐrH€E\\£ÔÍåd‚ÃÃæ6’°–‡Œë#@\nƒZfÌM  om\0o\"àÒ";break;}$mh=array();foreach(explode("\n",lzw_decompress($g))as$X)$mh[]=(strpos($X,"\t")?explode("\t",$X):$X);return$mh;}if(!$mh)$mh=get_translations($ca);if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$pf=array_search("SQL",$b->operators);if($pf!==false)unset($b->operators[$pf]);}function
dsn($Zb,$V,$G){try{parent::__construct($Zb,$V,$G);}catch(Exception$rc){auth_error($rc);exit;}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$vh=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$n=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$n];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Ub=array();class
Min_SQL{var$_conn;function
Min_SQL($h){$this->_conn=$h;}function
quote($Y){return($Y===null?"NULL":$this->_conn->quote($Y));}function
select($Q,$M,$Z,$Wc,$Pe=array(),$z=1,$E=0,$xf=false){global$b,$w;$wd=(count($Wc)<count($M));$H=$b->selectQueryBuild($M,$Z,$Wc,$Pe,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$Wc&&$wd&&$w=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Wc&&$wd?"\nGROUP BY ".implode(", ",$Wc):"").($Pe?"\nORDER BY ".implode(", ",$Pe):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");if($xf)echo$b->selectQuery($H);return$this->_conn->query($H);}function
delete($Q,$Ff,$z=0){$H="FROM ".table($Q);return
queries("DELETE".($z?limit1($H,$Ff):" $H$Ff"));}function
update($Q,$O,$Ff,$z=0,$ng="\n"){$Kh=array();foreach($O
as$x=>$X)$Kh[]="$x = $X";$H=table($Q)." SET$ng".implode(",$ng",$Kh);return
queries("UPDATE".($z?limit1($H,$Ff):" $H$Ff"));}function
insert($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$L,$vf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Ub["sqlite"]="SQLite 3";$Ub["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$sf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($Gc){$this->_link=new
SQLite3($Gc);$Nh=$this->_link->version();$this->server_info=$Nh["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Gc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Gc);}function
query($H,$vh=false){$ne=($vh?"unbufferedQuery":"query");$I=@$this->_link->$ne($H,SQLITE_BOTH,$m);$this->error="";if(!$I){$this->error=$m;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$x=>$X)$J[($x[0]=='"'?idf_unescape($x):$x)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$lf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($lf\\.)?$lf\$~",$C,$B)){$Q=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Gc){$this->dsn(DRIVER.":$Gc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Gc){if(is_readable($Gc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Gc)?$Gc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Gc")." AS a")){$this->Min_SQLite($Gc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$vf){$Kh=array();foreach($L
as$O)$Kh[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$Kh));}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$ng=" "){return" $H$Z".($z!==null?$ng."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($k,$jb){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($j){return
array();}function
table_status($C=""){global$h;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$h->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$h;$J=array();$vf="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Jb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Jb,$B)?str_replace("''","'",$B[1]):($Jb=="NULL"?null:$Jb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($vf!="")$J[$vf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$vf=$C;}}$xg=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$xg,$Zd,PREG_SET_ORDER);foreach($Zd
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($Q,$i=null){global$h;if(!is_object($i))$i=$h;$J=array();$xg=$i->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$xg,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$Zd,PREG_SET_ORDER);foreach($Zd
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($Q)as$C=>$n){if($n["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$yg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$i);foreach(get_rows("PRAGMA index_list(".table($Q).")",$i)as$K){$C=$K["name"];if(!preg_match("~^sqlite_~",$C)){$J[$C]["type"]=($K["unique"]?"UNIQUE":"INDEX");$J[$C]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$i)as$dg)$J[$C]["columns"][]=$dg["name"];$J[$C]["descs"]=array();if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$yg[$C],$Qf)){preg_match_all('/("[^"]*+")+( DESC)?/',$Qf[2],$Zd);foreach($Zd[2]as$X)$J[$C]["descs"][]=($X?'1':null);}}}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$p=&$J[$K["id"]];if(!$p)$p=$K;$p["source"][]=$K["from"];$p["target"][]=$K["to"];}return$J;}function
view($C){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($k){return
false;}function
error(){global$h;return
h($h->error);}function
check_sqlite_name($C){global$h;$Ac="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Ac)\$~",$C)){$h->error=lang(11,str_replace("|",", ",$Ac));return
false;}return
true;}function
create_database($k,$d){global$h;if(file_exists($k)){$h->error=lang(12);return
false;}if(!check_sqlite_name($k))return
false;try{$_=new
Min_SQLite($k);}catch(Exception$rc){$h->error=$rc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($j){global$h;$h->Min_SQLite(":memory:");foreach($j
as$k){if(!@unlink($k)){$h->error=lang(12);return
false;}}return
true;}function
rename_database($C,$d){global$h;if(!check_sqlite_name($C))return
false;$h->Min_SQLite(":memory:");$h->error=lang(12);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$o,$Kc,$nb,$kc,$d,$Ka,$gf){$Eh=($Q==""||$Kc);foreach($o
as$n){if($n[0]!=""||!$n[1]||$n[2]){$Eh=true;break;}}$c=array();$Xe=array();foreach($o
as$n){if($n[1]){$c[]=($Eh?$n[1]:"ADD ".implode($n[1]));if($n[0]!="")$Xe[$n[0]]=$n[1][0];}}if(!$Eh){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($Q,$C,$c,$Xe,$Kc))return
false;if($Ka)queries("UPDATE sqlite_sequence SET seq = $Ka WHERE name = ".q($C));return
true;}function
recreate_table($Q,$C,$o,$Xe,$Kc,$v=array()){if($Q!=""){if(!$o){foreach(fields($Q)as$x=>$n){$o[]=process_field($n,$n);$Xe[$x]=idf_escape($x);}}$wf=false;foreach($o
as$n){if($n[6])$wf=true;}$Xb=array();foreach($v
as$x=>$X){if($X[2]=="DROP"){$Xb[$X[1]]=true;unset($v[$x]);}}foreach(indexes($Q)as$Ed=>$u){$f=array();foreach($u["columns"]as$x=>$e){if(!$Xe[$e])continue
2;$f[]=$Xe[$e].($u["descs"][$x]?" DESC":"");}if(!$Xb[$Ed]){if($u["type"]!="PRIMARY"||!$wf)$v[]=array($u["type"],$Ed,$f);}}foreach($v
as$x=>$X){if($X[0]=="PRIMARY"){unset($v[$x]);$Kc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($Q)as$Ed=>$p){foreach($p["source"]as$x=>$e){if(!$Xe[$e])continue
2;$p["source"][$x]=idf_unescape($Xe[$e]);}if(!isset($Kc[" $Ed"]))$Kc[]=" ".format_foreign_key($p);}queries("BEGIN");}foreach($o
as$x=>$n)$o[$x]="  ".implode($n);$o=array_merge($o,array_filter($Kc));if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$o)."\n)"))return
false;if($Q!=""){if($Xe&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$Xe).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Xe)))." FROM ".table($Q)))return
false;$rh=array();foreach(triggers($Q)as$ph=>$bh){$nh=trigger($ph);$rh[]="CREATE TRIGGER ".idf_escape($ph)." ".implode(" ",$bh)." ON ".table($C)."\n$nh[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$v))return
false;foreach($rh
as$nh){if(!queries($nh))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$U,$C,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($Q."_"))." ON ".table($Q)." $f";}function
alter_indexes($Q,$c){foreach($c
as$vf){if($vf[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Ph){return
apply_queries("DROP VIEW",$Ph);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Ph,$Sg){return
false;}function
trigger($C){global$h;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(BEFORE|AFTER|INSTEAD\\s+OF)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$h->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]),"Trigger"=>$C,"Statement"=>$B[3]);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$H){return$h->query("EXPLAIN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($hg){return
true;}function
create_sql($Q,$Ka){global$h;$J=$h->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$C=>$u){if($C=='')continue;$J.=";\n\n".index_sql($Q,$u['type'],$C,"(".implode(", ",array_map('idf_escape',$u['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($Eb){}function
trigger_sql($Q,$Dg){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$h;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$x)$J[$x]=$h->result("PRAGMA $x");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Me){list($x,$X)=explode("=",$Me,2);$J[$x]=$X;}return$J;}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Dc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Dc);}$w="sqlite";$uh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Cg=array_keys($uh);$Ah=array();$Ke=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Tc=array("hex","length","lower","round","unixepoch","upper");$Yc=array("avg","count","count distinct","group_concat","max","min","sum");$cc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Ub["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$sf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($nc,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($N,$V,$G){global$b;$k=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$k!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Nh=pg_version($this->_link);$this->server_info=$Nh["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($Eb){global$b;if($Eb==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($Eb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$vh=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$e);$J->name=pg_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$e);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$k=$b->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($Eb){global$b;return($b->database()==$Eb);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$vf){global$h;foreach($L
as$O){$Bh=array();$Z=array();foreach($O
as$x=>$X){$Bh[]="$x = $X";if(isset($vf[idf_unescape($x)]))$Z[]="$x = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$Bh)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$Ab=$b->credentials();if($h->connect($Ab[0],$Ab[1],$Ab[2])){if($h->server_info>=9)$h->query("SET application_name = 'Adminer'");return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$ng=" "){return" $H$Z".($z!==null?$ng."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($k,$jb){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($j){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();$Ba=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$y,$K["length"],$Ea)=$B;$K["length"].=$Ea;$K["type"]=($Ba[$U]?$Ba[$U]:$U);$K["full_type"]=$K["type"].$y.$Ea;$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$i=null){global$h;if(!is_object($i))$i=$h;$J=array();$Lg=$i->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Lg AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Lg AND ci.oid = i.indexrelid",$i)as$K){$Rf=$K["relname"];$J[$Rf]["type"]=($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX"));$J[$Rf]["columns"]=array();foreach(explode(" ",$K["indkey"])as$od)$J[$Rf]["columns"][]=$f[$od];$J[$Rf]["descs"]=array();foreach(explode(" ",$K["indoption"])as$pd)$J[$Rf]["descs"][]=($pd&1?'1':null);$J[$Rf]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$Ge;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$Yd)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Yd[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Yd[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($Ge)~",$B[4],$Yd)?$Yd[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Ge)~",$B[4],$Yd)?$Yd[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($k){return($k=="information_schema");}function
error(){global$h;$J=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($k,$d){return
queries("CREATE DATABASE ".idf_escape($k).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($j){global$h;$h->close();return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($C,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$o,$Kc,$nb,$kc,$d,$Ka,$gf){$c=array();$Ef=array();foreach($o
as$n){$e=idf_escape($n[0]);$X=$n[1];if(!$X)$c[]="DROP $e";else{$Jh=$X[5];unset($X[5]);if(isset($X[6])&&$n[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($n[0]=="")$c[]=($Q!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$Ef[]="ALTER TABLE ".table($Q)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($n[0]!=""||$Jh!="")$Ef[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Jh!=""?substr($Jh,9):"''");}}$c=array_merge($c,$Kc);if($Q=="")array_unshift($Ef,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Ef,"ALTER TABLE ".table($Q)."\n".implode(",\n",$c));if($Q!=""&&$Q!=$C)$Ef[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$nb!="")$Ef[]="COMMENT ON TABLE ".table($C)." IS ".q($nb);if($Ka!=""){}foreach($Ef
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$c){$yb=array();$Vb=array();$Ef=array();foreach($c
as$X){if($X[0]!="INDEX")$yb[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Vb[]=idf_escape($X[1]);else$Ef[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." (".implode(", ",$X[2]).")";}if($yb)array_unshift($Ef,"ALTER TABLE ".table($Q).implode(",",$yb));if($Vb)array_unshift($Ef,"DROP INDEX ".implode(", ",$Vb));foreach($Ef
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Ph){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ph)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Ph,$Sg){foreach($S
as$Q){if(!queries("ALTER TABLE ".table($Q)." SET SCHEMA ".idf_escape($Sg)))return
false;}foreach($Ph
as$Q){if(!queries("ALTER VIEW ".table($Q)." SET SCHEMA ".idf_escape($Sg)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$L=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($Q))as$K)$J[$K["trigger_name"]]=array($K["condition_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
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
explain($h,$H){return$h->query("EXPLAIN $H");}function
found_rows($R,$Z){global$h;if(preg_match("~ rows=([0-9]+)~",$h->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Qf))return$Qf[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($gg){global$h,$uh,$Cg;$J=$h->query("SET search_path TO ".idf_escape($gg));foreach(types()as$U){if(!isset($uh[$U])){$uh[$U]=0;$Cg[lang(13)][]=$U;}}return$J;}function
use_sql($Eb){return"\connect ".idf_escape($Eb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$h;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($h->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Dc){return
preg_match('~^(database|table|columns|sql|indexes|comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$Dc);}$w="pgsql";$uh=array();$Cg=array();foreach(array(lang(14)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(15)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(16)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(17)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(18)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(19)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$x=>$X){$uh+=$X;$Cg[$x]=array_keys($X);}$Ah=array();$Ke=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Tc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Yc=array("avg","count","count distinct","max","min","sum");$cc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Ub["oracle"]="Oracle";if(isset($_GET["oracle"])){$sf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($nc,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$m=oci_error();$this->error=$m["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Eb){return
true;}function
query($H,$vh=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$m=oci_error($this->_link);$this->errno=$m["code"];$this->error=$m["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$n);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'OCI-Lob'))$K[$x]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$e);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($Eb){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$Ab=$b->credentials();if($h->connect($Ab[0],$Ab[1],$Ab[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$D=0,$ng=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($k,$jb){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($j){return
array();}function
table_status($C=""){$J=array();$ig=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $ig":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $ig":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$y="$K[DATA_PRECISION],$K[DATA_SCALE]";if($y==",")$y=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($y?"($y)":""),"type"=>strtolower($U),"length"=>$y,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$i=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$K){$md=$K["INDEX_NAME"];$J[$md]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$md]["columns"][]=$K["COLUMN_NAME"];$J[$md]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$md]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($k){return
false;}function
error(){global$h;return
h($h->error);}function
explain($h,$H){$h->query("EXPLAIN PLAN FOR $H");return$h->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$o,$Kc,$nb,$kc,$d,$Ka,$gf){$c=$Vb=array();foreach($o
as$n){$X=$n[1];if($X&&$n[0]!=""&&idf_escape($n[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($n[0])." TO $X[0]");if($X)$c[]=($Q!=""?($n[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$Vb[]=idf_escape($n[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$c)))&&(!$Vb||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$Vb).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){return
array();}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Ph){return
apply_queries("DROP VIEW",$Ph);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$h;return$h->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($hg){global$h;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($hg));}function
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
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Dc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Dc);}$w="oracle";$uh=array();$Cg=array();foreach(array(lang(14)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(15)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(16)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(17)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$x=>$X){$uh+=$X;$Cg[$x]=array_keys($X);}$Ah=array();$Ke=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Tc=array("length","lower","round","upper");$Yc=array("avg","count","count distinct","max","min","sum");$cc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Ub["mssql"]="MS SQL";if(isset($_GET["mssql"])){$sf=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$m){$this->errno=$m["code"];$this->error.="$m[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$qd=sqlsrv_server_info($this->_link);$this->server_info=$qd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Eb){return$this->query("USE ".idf_escape($Eb));}function
query($H,$vh=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'DateTime'))$K[$x]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$n=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$n["Name"];$J->orgname=$n["Name"];$J->type=($n["Type"]==1?254:0);return$J;}function
seek($D){for($r=0;$r<$D;$r++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Eb){return
mssql_select_db($Eb);}function
query($H,$vh=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$vf){foreach($L
as$O){$Bh=array();$Z=array();foreach($O
as$x=>$X){$Bh[]="$x = $X";if(isset($vf[idf_unescape($x)]))$Z[]="$x = $X";}if(!queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Bh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($t){return"[".str_replace("]","]]",$t)."]";}function
table($t){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$Ab=$b->credentials();if($h->connect($Ab[0],$Ab[1],$Ab[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($H,$Z,$z,$D=0,$ng=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($k,$jb){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($k));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($j){global$h;$J=array();foreach($j
as$k){$h->select_db($k);$J[$k]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$K){$U=$K["type"];$y=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($y?"($y)":""),"type"=>$U,"length"=>$y,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($Q,$i=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$i)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$J[preg_replace('~_.*~','',$d)][]=$d;return$J;}function
information_schema($k){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
create_database($k,$d){return
queries("CREATE DATABASE ".idf_escape($k).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($j){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$j)));}function
rename_database($C,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$o,$Kc,$nb,$kc,$d,$Ka,$gf){$c=array();foreach($o
as$n){$e=idf_escape($n[0]);$X=$n[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($n[0]=="")$c["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Kc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Kc)$c[""]=$Kc;foreach($c
as$x=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $x".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$c){$u=array();$Vb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Vb[]=idf_escape($X[1]);else$u[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$u||queries("DROP INDEX ".implode(", ",$u)))&&(!$Vb||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$Vb)));}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$H){$h->query("SET SHOWPLAN_ALL ON");$J=$h->query($H);$h->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$p=&$J[$K["FK_NAME"]];$p["table"]=$K["PKTABLE_NAME"];$p["source"][]=$K["FKCOLUMN_NAME"];$p["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Ph){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ph)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Ph,$Sg){return
apply_queries("ALTER SCHEMA ".idf_escape($Sg)." TRANSFER",array_merge($S,$Ph));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($Q){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($Q))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!="")return$_GET["ns"];return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($gg){return
true;}function
use_sql($Eb){return"USE ".idf_escape($Eb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Dc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Dc);}$w="mssql";$uh=array();$Cg=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(15)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(16)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(17)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$x=>$X){$uh+=$X;$Cg[$x]=array_keys($X);}$Ah=array();$Ke=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Tc=array("len","lower","round","upper");$Yc=array("avg","count","count distinct","max","min","sum");$cc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Ub["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$sf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($Eb){return($Eb=="domain");}function
query($H,$vh=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$Gg=0;foreach($I
as$_d)$Gg+=$_d->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Gg,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
Min_Result($I){foreach($I
as$_d){$K=array();if($_d->Name!='')$K['itemName()']=(string)$_d->Name;foreach($_d->Attribute
as$Ha){$C=$this->_processValue($Ha->Name);$Y=$this->_processValue($Ha->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($ec){return(is_object($ec)&&$ec['encoding']=='base64'?base64_decode($ec):(string)$ec);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Fd=array_keys($this->_rows[0]);return(object)array('name'=>$Fd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$vf="itemName()";function
_chunkRequest($jd,$va,$F,$wc=array()){global$h;foreach(array_chunk($jd,25)as$cb){$cf=$F;foreach($cb
as$r=>$s){$cf["Item.$r.ItemName"]=$s;foreach($wc
as$x=>$X)$cf["Item.$r.$x"]=$X;}if(!sdb_request($va,$cf))return
false;}$h->affected_rows=count($jd);return
true;}function
_extractIds($Q,$Ff,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Ff,$Zd))$J=array_map('idf_unescape',$Zd[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($Q).$Ff.($z?" LIMIT 1":"")))as$_d)$J[]=$_d->Name;}return$J;}function
select($Q,$M,$Z,$Wc,$Pe=array(),$z=1,$E=0,$xf=false){global$h;$h->next=$_GET["next"];$J=parent::select($Q,$M,$Z,$Wc,$Pe,$z,$E,$xf);$h->next=0;return$J;}function
delete($Q,$Ff,$z=0){return$this->_chunkRequest($this->_extractIds($Q,$Ff,$z),'BatchDeleteAttributes',array('DomainName'=>$Q));}function
update($Q,$O,$Ff,$z=0,$ng="\n"){$Kb=array();$ud=array();$r=0;$jd=$this->_extractIds($Q,$Ff,$z);$s=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$x=>$X){$x=idf_unescape($x);if($X=="NULL"||($s!=""&&array($s)!=$jd))$Kb["Attribute.".count($Kb).".Name"]=$x;if($X!="NULL"){foreach((array)$X
as$Bd=>$W){$ud["Attribute.$r.Name"]=$x;$ud["Attribute.$r.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Bd)$ud["Attribute.$r.Replace"]="true";$r++;}}}$F=array('DomainName'=>$Q);return(!$ud||$this->_chunkRequest(($s!=""?array($s):$jd),'BatchPutAttributes',$F,$ud))&&(!$Kb||$this->_chunkRequest($jd,'BatchDeleteAttributes',$F,$Kb));}function
insert($Q,$O){$F=array("DomainName"=>$Q);$r=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$r.Name"]=$C;$F["Attribute.$r.Value"]=(is_array($Y)?$X:idf_unescape($Y));$r++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($Q,$L,$vf){foreach($L
as$O){if(!$this->update($Q,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
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
support($Dc){return
preg_match('~sql~',$Dc);}function
logged_user(){global$b;$Ab=$b->credentials();return$Ab[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($k,$jb){}function
tables_list(){global$h;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$Q)$J[(string)$Q]='table';if($h->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Cc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$Q=>$U){$K=array("Name"=>$Q,"Auto_increment"=>"");if(!$Cc){$me=sdb_request('DomainMetadata',array('DomainName'=>$Q));if($me){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$x=>$X)$K[$x]=(string)$me->$X;}}if($C!="")return$K;$J[$Q]=$K;}return$J;}function
explain($h,$H){}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($Q){return
fields_from_edit();}function
foreign_keys($Q){return
array();}function
table($t){return
idf_escape($t);}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
limit($H,$Z,$z,$D=0,$ng=" "){return" $H$Z".($z!==null?$ng."LIMIT $z":"");}function
unconvert_field($n,$J){return$J;}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$C,$o,$Kc,$nb,$kc,$d,$Ka,$gf){return($Q==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($S){foreach($S
as$Q){if(!sdb_request('DeleteDomain',array('DomainName'=>$Q)))return
false;}return
true;}function
count_tables($j){foreach($j
as$k)return
array($k=>count(tables_list()));}function
found_rows($R,$Z){return($Z?null:$R["Rows"]);}function
last_id(){}function
hmac($Aa,$Cb,$x,$Jf=false){$Ta=64;if(strlen($x)>$Ta)$x=pack("H*",$Aa($x));$x=str_pad($x,$Ta,"\0");$Cd=$x^str_repeat("\x36",$Ta);$Dd=$x^str_repeat("\x5C",$Ta);$J=$Aa($Dd.pack("H*",$Aa($Cd.$Cb)));if($Jf)$J=pack("H*",$J);return$J;}function
sdb_request($va,$F=array()){global$b,$h;list($gd,$F['AWSAccessKeyId'],$jg)=$b->credentials();$F['Action']=$va;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$x=>$X)$H.='&'.rawurlencode($x).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$gd)."\n/\n$H",$jg,true)));@ini_set('track_errors',1);$Fc=@file_get_contents((preg_match('~^https?://~',$gd)?$gd:"http://$gd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Fc){$h->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Vh=simplexml_load_string($Fc);if(!$Vh){$m=libxml_get_last_error();$h->error=$m->message;return
false;}if($Vh->Errors){$m=$Vh->Errors->Error;$h->error="$m->Message ($m->Code)";return
false;}$h->error='';$Rg=$va."Result";return($Vh->$Rg?$Vh->$Rg:true);}function
sdb_request_all($va,$Rg,$F=array(),$ah=0){$J=array();$zg=($ah?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$Vh=sdb_request($va,$F);if(!$Vh)break;foreach($Vh->$Rg
as$ec)$J[]=$ec;if($z&&count($J)>=$z){$_GET["next"]=$Vh->NextToken;break;}if($ah&&microtime(true)-$zg>$ah)return
false;$F['NextToken']=$Vh->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($Vh->NextToken);return$J;}$w="simpledb";$Ke=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Tc=array();$Yc=array("count");$cc=array(array("json"));}$Ub["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$sf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$k=$b->database();$Ne=array();if($V!=""){$Ne["username"]=$V;$Ne["password"]=$G;}if($k!="")$Ne["db"]=$k;try{$this->_link=@new
MongoClient("mongodb://$N",$Ne);return
true;}catch(Exception$rc){$this->error=$rc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($Eb){try{$this->_db=$this->_link->selectDB($Eb);return
true;}catch(Exception$rc){$this->error=$rc->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
Min_Result($I){foreach($I
as$_d){$K=array();foreach($_d
as$x=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$x]=63;$K[$x]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Fd=array_keys($this->_rows[0]);$C=$Fd[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$vf="_id";function
quote($Y){return($Y===null?$Y:parent::quote($Y));}function
select($Q,$M,$Z,$Wc,$Pe=array(),$z=1,$E=0,$xf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$ug=array();foreach($Pe
as$X){$X=preg_replace('~ DESC$~','',$X,1,$xb);$ug[$X]=($xb?-1:1);}return
new
Min_Result(iterator_to_array($this->_conn->_db->selectCollection($Q)->find(array(),$M)->sort($ug)->limit(+$z)->skip($E*$z)));}function
insert($Q,$O){try{$J=$this->_conn->_db->selectCollection($Q)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$rc){$this->_conn->error=$rc->getMessage();return
false;}}}function
connect(){global$b;$h=new
Min_DB;$Ab=$b->credentials();if($h->connect($Ab[0],$Ab[1],$Ab[2]))return$h;return$h->error;}function
error(){global$h;return
h($h->error);}function
logged_user(){global$b;$Ab=$b->credentials();return$Ab[1];}function
get_databases($Jc){global$h;$J=array();$Hb=$h->_link->listDBs();foreach($Hb['databases']as$k)$J[]=$k['name'];return$J;}function
collations(){return
array();}function
db_collation($k,$jb){}function
count_tables($j){global$h;$J=array();foreach($j
as$k)$J[$k]=count($h->_link->selectDB($k)->getCollectionNames(true));return$J;}function
tables_list(){global$h;return
array_fill_keys($h->_db->getCollectionNames(true),'table');}function
table_status($C="",$Cc=false){$J=array();foreach(tables_list()as$Q=>$U){$J[$Q]=array("Name"=>$Q);if($C==$Q)return$J[$Q];}return$J;}function
information_schema(){}function
is_view($R){}function
drop_databases($j){global$h;foreach($j
as$k){$Uf=$h->_link->selectDB($k)->drop();if(!$Uf['ok'])return
false;}return
true;}function
indexes($Q,$i=null){global$h;$J=array();foreach($h->_db->selectCollection($Q)->getIndexInfo()as$u){$Nb=array();foreach($u["key"]as$e=>$U)$Nb[]=($U==-1?'1':null);$J[$u["name"]]=array("type"=>($u["name"]=="_id_"?"PRIMARY":($u["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($u["key"]),"lengths"=>array(),"descs"=>$Nb,);}return$J;}function
fields($Q){return
fields_from_edit();}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
foreign_keys($Q){return
array();}function
fk_support($R){}function
engines(){return
array();}function
found_rows($R,$Z){global$h;return$h->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($Q,$C,$o,$Kc,$nb,$kc,$d,$Ka,$gf){global$h;if($Q==""){$h->_db->createCollection($C);return
true;}}function
drop_tables($S){global$h;foreach($S
as$Q){$Uf=$h->_db->selectCollection($Q)->drop();if(!$Uf['ok'])return
false;}return
true;}function
truncate_tables($S){global$h;foreach($S
as$Q){$Uf=$h->_db->selectCollection($Q)->remove();if(!$Uf['ok'])return
false;}return
true;}function
alter_indexes($Q,$c){global$h;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$h->_db->command(array("deleteIndexes"=>$Q,"index"=>$C));else{$f=array();foreach($O
as$e){$e=preg_replace('~ DESC$~','',$e,1,$xb);$f[$e]=($xb?-1:1);}$J=$h->_db->selectCollection($Q)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$h->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$h;return$h->last_id;}function
table($t){return$t;}function
idf_escape($t){return$t;}function
support($Dc){return
preg_match("~database|indexes~",$Dc);}$w="mongo";$Ke=array("=");$Tc=array();$Yc=array();$cc=array(array("json"));}$Ub["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$sf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($jf,$sb=array(),$ne='GET'){@ini_set('track_errors',1);$Fc=@file_get_contents($this->_url.'/'.ltrim($jf,'/'),false,stream_context_create(array('http'=>array('method'=>$ne,'content'=>json_encode($sb),'ignore_errors'=>1,))));if(!$Fc){$this->error=$php_errormsg;return$Fc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Fc;return
false;}$J=json_decode($Fc,true);if(!$J){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$rb=get_defined_constants(true);foreach($rb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($jf,$sb=array(),$ne='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($jf,'/'),$sb,$ne);}function
connect($N,$V,$G){$this->_url="http://$V:$G@$N/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($Eb){$this->_db=$Eb;return
true;}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows;function
Min_Result($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$M,$Z,$Wc,$Pe=array(),$z=1,$E=0,$xf=false){global$b;$Cb=array();$H="$Q/_search";if($M!=array("*"))$Cb["fields"]=$M;if($Pe){$ug=array();foreach($Pe
as$hb){$hb=preg_replace('~ DESC$~','',$hb,1,$xb);$ug[]=($xb?array($hb=>"desc"):$hb);}$Cb["sort"]=$ug;}if($z){$Cb["size"]=+$z;if($E)$Cb["from"]=($E*$z);}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""){$Vg=array("match"=>array(($X["col"]!=""?$X["col"]:"_all")=>$X["val"]));if($X["op"]=="=")$Cb["query"]["filtered"]["filter"]["and"][]=$Vg;else$Cb["query"]["filtered"]["query"]["bool"]["must"][]=$Vg;}}if($Cb["query"]&&!$Cb["query"]["filtered"]["query"])$Cb["query"]["filtered"]["query"]=array("match_all"=>array());if($xf)echo$b->selectQuery("$H: ".print_r($Cb,true));$ig=$this->_conn->query($H,$Cb);if(!$ig)return
false;$J=array();foreach($ig['hits']['hits']as$fd){$K=array();$o=$fd['_source'];if($M!=array("*")){$o=array();foreach($M
as$x)$o[$x]=$fd['fields'][$x];}foreach($o
as$x=>$X)$K[$x]=(is_array($X)?json_encode($X):$X);$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$h=new
Min_DB;$Ab=$b->credentials();if($h->connect($Ab[0],$Ab[1],$Ab[2]))return$h;return$h->error;}function
support($Dc){return
preg_match("~database|table|columns~",$Dc);}function
logged_user(){global$b;$Ab=$b->credentials();return$Ab[1];}function
get_databases(){global$h;$J=$h->rootQuery('_aliases');if($J)$J=array_keys($J);return$J;}function
collations(){return
array();}function
db_collation($k,$jb){}function
count_tables($j){global$h;$J=$h->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$h;$J=$h->query('_mapping');if($J)$J=array_fill_keys(array_keys(reset($J)),'table');return$J;}function
table_status($C="",$Cc=false){$J=tables_list();if($J){foreach($J
as$x=>$U)$J[$x]=array("Name"=>$x,"Engine"=>$U);if($C!="")return$J[$C];}return$J;}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($Q){global$h;$Xd=$h->query("$Q/_mapping");$J=array();if($Xd){foreach($Xd[$Q]['properties']as$C=>$n)$J[$C]=array("field"=>$C,"full_type"=>$n["type"],"type"=>$n["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
foreign_keys($Q){return
array();}function
table($t){return$t;}function
idf_escape($t){return$t;}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
fk_support($R){}function
found_rows($R,$Z){return
null;}function
create_database($k){global$h;return$h->rootQuery(urlencode($k),array(),'PUT');}function
drop_databases($j){global$h;return$h->rootQuery(urlencode(implode(',',$j)),array(),'DELETE');}function
drop_tables($S){global$h;$J=true;foreach($S
as$Q)$J=$J&&$h->query(urlencode($Q),array(),'DELETE');return$J;}$w="elastic";$Ke=array("=","query");$Tc=array();$Yc=array();$cc=array(array("json"));}$Ub=array("server"=>"MySQL")+$Ub;if(!defined("DRIVER")){$sf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$G){mysqli_report(MYSQLI_REPORT_OFF);list($gd,$of)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$gd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($of)?$of:ini_get("mysqli.default_port")),(!is_numeric($of)?$of:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$n=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$n];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Eb){return
mysql_select_db($Eb,$this->_link);}function
query($H,$vh=false){$I=@($vh?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$n);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($Eb){return$this->query("USE ".idf_escape($Eb));}function
query($H,$vh=false){$this->setAttribute(1000,!$vh);return
parent::query($H,$vh);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$O){return($O?parent::insert($Q,$O):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$L,$vf){$f=array_keys(reset($L));$tf="INSERT INTO ".table($Q)." (".implode(", ",$f).") VALUES\n";$Kh=array();foreach($f
as$x)$Kh[$x]="$x = VALUES($x)";$Fg="\nON DUPLICATE KEY UPDATE ".implode(", ",$Kh);$Kh=array();$y=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($Kh&&(strlen($tf)+$y+strlen($Y)+strlen($Fg)>1e6)){if(!queries($tf.implode(",\n",$Kh).$Fg))return
false;$Kh=array();$y=0;}$Kh[]=$Y;$y+=strlen($Y)+2;}return
queries($tf.implode(",\n",$Kh).$Fg);}}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
table($t){return
idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$Ab=$b->credentials();if($h->connect($Ab[0],$Ab[1],$Ab[2])){$h->query("SET sql_quote_show_create = 1, autocommit = 1");return$h;}$J=$h->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($eg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$eg;return$J;}function
get_databases($Jc){global$h;$J=get_session("dbs");if($J===null){$H=($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Jc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$ng=" "){return" $H$Z".($z!==null?$ng."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($k,$jb){global$h;$J=null;$yb=$h->result("SHOW CREATE DATABASE ".idf_escape($k),1);if(preg_match('~ COLLATE ([^ ]+)~',$yb,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$yb,$B))$J=$jb[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals($h->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($j){$J=array();foreach($j
as$k)$J[$k]=count(get_vals("SHOW TABLES IN ".idf_escape($k)));return$J;}function
table_status($C="",$Cc=false){global$h;$J=array();foreach(get_rows($Cc&&$h->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"]);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$i=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$i)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($Q){global$h,$Ge;static$lf='`(?:[^`]|``)+`';$J=array();$zb=$h->result("SHOW CREATE TABLE ".table($Q),1);if($zb){preg_match_all("~CONSTRAINT ($lf) FOREIGN KEY \\(((?:$lf,? ?)+)\\) REFERENCES ($lf)(?:\\.($lf))? \\(((?:$lf,? ?)+)\\)(?: ON DELETE ($Ge))?(?: ON UPDATE ($Ge))?~",$zb,$Zd,PREG_SET_ORDER);foreach($Zd
as$B){preg_match_all("~$lf~",$B[2],$vg);preg_match_all("~$lf~",$B[5],$Sg);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$vg[0]),"target"=>array_map('idf_unescape',$Sg[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
view($C){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$x=>$X)asort($J[$x]);return$J;}function
information_schema($k){global$h;return($h->server_info>=5&&$k=="information_schema")||($h->server_info>=5.5&&$k=="performance_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
error_line(){global$h;if(preg_match('~ at line ([0-9]+)$~',$h->error,$Qf))return$Qf[1]-1;}function
create_database($k,$d){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($k).($d?" COLLATE ".q($d):""));}function
drop_databases($j){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($C,$d){if(create_database($C,$d)){$Sf=array();foreach(tables_list()as$Q=>$U)$Sf[]=table($Q)." TO ".idf_escape($C).".".table($Q);if(!$Sf||queries("RENAME TABLE ".implode(", ",$Sf))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$La=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$u){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$u["columns"],true)){$La="";break;}if($u["type"]=="PRIMARY")$La=" UNIQUE";}}return" AUTO_INCREMENT$La";}function
alter_table($Q,$C,$o,$Kc,$nb,$kc,$d,$Ka,$gf){$c=array();foreach($o
as$n)$c[]=($n[1]?($Q!=""?($n[0]!=""?"CHANGE ".idf_escape($n[0]):"ADD"):" ")." ".implode($n[1]).($Q!=""?$n[2]:""):"DROP ".idf_escape($n[0]));$c=array_merge($c,$Kc);$_g="COMMENT=".q($nb).($kc?" ENGINE=".q($kc):"").($d?" COLLATE ".q($d):"").($Ka!=""?" AUTO_INCREMENT=$Ka":"").$gf;if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n) $_g");if($Q!=$C)$c[]="RENAME TO ".table($C);$c[]=$_g;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c));}function
alter_indexes($Q,$c){foreach($c
as$x=>$X)$c[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Ph){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ph)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Ph,$Sg){$Sf=array();foreach(array_merge($S,$Ph)as$Q)$Sf[]=table($Q)." TO ".idf_escape($Sg).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Sf));}function
copy_tables($S,$Ph,$Sg){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($Sg==DB?table("copy_$Q"):idf_escape($Sg).".".table($Q));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($Ph
as$Q){$C=($Sg==DB?table("copy_$Q"):idf_escape($Sg).".".table($Q));$Oh=view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Oh[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$h,$mc,$sd,$uh;$Ba=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$th="((".implode("|",array_merge(array_keys($uh),$Ba)).")\\b(?:\\s*\\(((?:[^'\")]*|$mc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$lf="\\s*(".($U=="FUNCTION"?"":$sd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$th";$yb=$h->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$lf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$th\\s+":"")."(.*)~is",$yb,$B);$o=array();preg_match_all("~$lf\\s*,?~is",$B[1],$Zd,PREG_SET_ORDER);foreach($Zd
as$bf){$C=str_replace("``","`",$bf[2]).$bf[3];$o[]=array("field"=>$C,"type"=>strtolower($bf[5]),"length"=>preg_replace_callback("~$mc~s",'normalize_enum',$bf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$bf[8] $bf[7]"))),"null"=>1,"full_type"=>$bf[4],"inout"=>strtoupper($bf[1]),"collation"=>strtolower($bf[9]),);}if($U!="FUNCTION")return
array("fields"=>$o,"definition"=>$B[11]);return
array("fields"=>$o,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$H){return$h->query("EXPLAIN ".($h->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($gg){return
true;}function
create_sql($Q,$Ka){global$h;$J=$h->result("SHOW CREATE TABLE ".table($Q),1);if(!$Ka)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Eb){return"USE ".idf_escape($Eb);}function
trigger_sql($Q,$Dg){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$K)$J.="\n".($Dg=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($n){if(preg_match("~binary~",$n["type"]))return"HEX(".idf_escape($n["field"]).")";if($n["type"]=="bit")return"BIN(".idf_escape($n["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))return"AsWKT(".idf_escape($n["field"]).")";}function
unconvert_field($n,$J){if(preg_match("~binary~",$n["type"]))$J="UNHEX($J)";if($n["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))$J="GeomFromText($J)";return$J;}function
support($Dc){global$h;return!preg_match("~scheme|sequence|type|view_trigger".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|routine|trigger|view":""):"")."~",$Dc);}$w="sql";$uh=array();$Cg=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(15)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(16)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(20)=>array("enum"=>65535,"set"=>64),lang(17)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(19)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$x=>$X){$uh+=$X;$Cg[$x]=array_keys($X);}$Ah=array("unsigned","zerofill","unsigned zerofill");$Ke=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Tc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Yc=array("avg","count","count distinct","group_concat","max","min","sum");$cc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.0.3";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($yb=false){return
password_file($yb);}function
database(){return
DB;}function
databases($Jc=true){return
get_databases($Jc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Ub;echo'<table cellspacing="0">
<tr><th>',lang(21),'<td>',html_select("auth[driver]",$Ub,DRIVER,"loginDriver(this);"),'<tr><th>',lang(22),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(23),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(24),'<td><input type="password" name="auth[password]">
<tr><th>',lang(25),'<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
focus(username);
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".lang(26)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(27))."\n";}function
login($Vd,$G){return
true;}function
tableName($Jg){return
h($Jg["Name"]);}function
fieldName($n,$Pe=0){return'<span title="'.h($n["full_type"]).'">'.h($n["field"]).'</span>';}function
selectLinks($Jg,$O=""){echo'<p class="links">';$Ud=array("select"=>lang(28));if(support("table")||support("indexes"))$Ud["table"]=lang(29);if(support("table")){if(is_view($Jg))$Ud["view"]=lang(30);else$Ud["create"]=lang(31);}if($O!==null)$Ud["edit"]=lang(32);foreach($Ud
as$x=>$X)echo" <a href='".h(ME)."$x=".urlencode($Jg["Name"]).($x=="edit"?$O:"")."'".bold(isset($_GET[$x])).">$X</a>";echo"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Ig){return
array();}function
backwardKeysPrint($Na,$K){}function
selectQuery($H){global$w;return"<p><code class='jush-$w'>".h(str_replace("\n"," ",$H))."</code>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".lang(33)."</a>":"")."</p>";}function
rowDescription($Q){return"";}function
rowDescriptions($L,$Lc){return$L;}function
selectLink($X,$n){}function
selectVal($X,$_,$n,$We){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$n["type"])&&!preg_match("~var~",$n["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$n["type"])&&!is_utf8($X))$J=lang(34,strlen($We));return($_?"<a href='".h($_)."'>$J</a>":$J);}function
editVal($X,$n){return$X;}function
selectColumnsPrint($M,$f){global$Tc,$Yc;print_fieldset("select",lang(35),$M);$r=0;$M[""]=array();foreach($M
as$x=>$X){$X=$_GET["columns"][$x];$e=select_input(" name='columns[$r][col]' onchange='".($x!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Tc||$Yc?"<select name='columns[$r][fun]' onchange='helpClose();".($x!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(36)=>$Tc,lang(37)=>$Yc)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$r++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$v){print_fieldset("search",lang(38),$Z);foreach($v
as$r=>$u){if($u["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$u["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$r]' value='".h($_GET["fulltext"][$r])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$r]",1,isset($_GET["boolean"][$r]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Ya="this.nextSibling.onchange();";for($r=0;$r<=count($_GET["where"]);$r++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$r][col]' onchange='$Ya'",$f,$X["col"],"(".lang(39).")"),html_select("where[$r][op]",$this->operators,$X["op"],$Ya),"<input type='search' name='where[$r][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($Pe,$f,$v){print_fieldset("sort",lang(40),$Pe);$r=0;foreach((array)$_GET["order"]as$x=>$X){if($X!=""){echo"<div>".select_input(" name='order[$r]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$r]",1,isset($_GET["desc"][$x]),lang(41))."</div>\n";$r++;}}echo"<div>".select_input(" name='order[$r]' onchange='selectAddRow(this);'",$f),checkbox("desc[$r]",1,false,lang(41))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(42)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Yg){if($Yg!==null){echo"<fieldset><legend>".lang(43)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Yg)."'>","</div></fieldset>\n";}}function
selectActionPrint($v){echo"<fieldset><legend>".lang(44)."</legend><div>","<input type='submit' value='".lang(35)."'>"," <span id='noindex' title='".lang(45)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($v
as$u){if($u["type"]!="FULLTEXT")$f[reset($u["columns"])]=1;}$f[""]=1;foreach($f
as$x=>$X)json_row($x);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($gc,$f){}function
selectColumnsProcess($f,$v){global$Tc,$Yc;$M=array();$Wc=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Tc)||in_array($X["fun"],$Yc)))){$M[$x]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Yc))$Wc[]=$M[$x];}}return
array($M,$Wc);}function
selectSearchProcess($o,$v){global$w;$J=array();foreach($v
as$r=>$u){if($u["type"]=="FULLTEXT"&&$_GET["fulltext"][$r]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$u["columns"])).") AGAINST (".q($_GET["fulltext"][$r]).(isset($_GET["boolean"][$r])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$pb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$ld=process_length($X["val"]);$pb.=" ".($ld!=""?$ld:"(NULL)");}elseif($X["op"]=="SQL")$pb=" $X[val]";elseif($X["op"]=="LIKE %%")$pb=" LIKE ".$this->processInput($o[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$pb.=" ".$this->processInput($o[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$pb;else{$kb=array();foreach($o
as$C=>$n){$yd=preg_match('~char|text|enum|set~',$n["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$n["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$yd)){$C=idf_escape($C);$kb[]=($w=="sql"&&$yd&&!preg_match('~^utf8~',$n["collation"])?"CONVERT($C USING utf8)":$C);}}$J[]=($kb?"(".implode("$pb OR ",$kb)."$pb)":"0");}}}return$J;}function
selectOrderProcess($o,$v){$J=array();foreach((array)$_GET["order"]as$x=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$x])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Lc){return
false;}function
selectQueryBuild($M,$Z,$Wc,$Pe,$z,$E){return"";}function
messageQuery($H){global$w;restart_session();$dd=&get_session("queries");$s="sql-".count($dd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$dd[$_GET["db"]][]=array($H,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$s' onclick=\"return !toggle('$s');\">".lang(46)."</a>"."<div id='$s' class='hidden'><pre><code class='jush-$w'>".shorten_utf8($H,1000).'</code></pre>'.(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($dd[$_GET["db"]])-1)).'">'.lang(33).'</a>':'').'</div>';}function
editFunctions($n){global$cc;$J=($n["null"]?"NULL/":"");foreach($cc
as$x=>$Tc){if(!$x||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Tc
as$lf=>$X){if(!$lf||preg_match("~$lf~",$n["type"]))$J.="/$X";}if($x&&!preg_match('~set|blob|bytea|raw|file~',$n["type"]))$J.="/SQL";}}if($n["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J=lang(47);return
explode("/",$J);}function
editInput($Q,$n,$Ia,$Y){if($n["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ia value='-1' checked><i>".lang(6)."</i></label> ":"").($n["null"]?"<label><input type='radio'$Ia value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ia,$n,$Y,0);return"";}function
processInput($n,$Y,$q=""){if($q=="SQL")return$Y;$C=$n["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$q))$J="$q()";elseif(preg_match('~^current_(date|timestamp)$~',$q))$J=$q;elseif(preg_match('~^([+-]|\\|\\|)$~',$q))$J=idf_escape($C)." $q $J";elseif(preg_match('~^[+-] interval$~',$q))$J=idf_escape($C)." $q ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$q))$J="$q(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$q))$J="$q($J)";return
unconvert_field($n,$J);}function
dumpOutput(){$J=array('text'=>lang(48),'file'=>lang(49));if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($k){}function
dumpTable($Q,$Dg,$zd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Dg)dump_csv(array_keys(fields($Q)));}elseif($Dg){if($zd==2){$o=array();foreach(fields($Q)as$C=>$n)$o[]=idf_escape($C)." $n[full_type]";$yb="CREATE TABLE ".table($Q)." (".implode(", ",$o).")";}else$yb=create_sql($Q,$_POST["auto_increment"]);if($yb){if($Dg=="DROP+CREATE"||$zd==1)echo"DROP ".($zd==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($zd==1)$yb=remove_definer($yb);echo"$yb;\n\n";}}}function
dumpData($Q,$Dg,$H){global$h,$w;$be=($w=="sqlite"?0:1048576);if($Dg){if($_POST["format"]=="sql"){if($Dg=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$o=fields($Q);}$I=$h->query($H,1);if($I){$ud="";$Wa="";$Fd=array();$Fg="";$Ec=($Q!=''?'fetch_assoc':'fetch_row');while($K=$I->$Ec()){if(!$Fd){$Kh=array();foreach($K
as$X){$n=$I->fetch_field();$Fd[]=$n->name;$x=idf_escape($n->name);$Kh[]="$x = VALUES($x)";}$Fg=($Dg=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Kh):"").";\n";}if($_POST["format"]!="sql"){if($Dg=="table"){dump_csv($Fd);$Dg="INSERT";}dump_csv($K);}else{if(!$ud)$ud="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$Fd)).") VALUES";foreach($K
as$x=>$X){$n=$o[$x];$K[$x]=($X!==null?unconvert_field($n,preg_match('~(^|[^o])int|float|double|decimal~',$n["type"])&&$X!=''?$X:q($X)):"NULL");}$eg=($be?"\n":" ")."(".implode(",\t",$K).")";if(!$Wa)$Wa=$ud.$eg;elseif(strlen($Wa)+4+strlen($eg)+strlen($Fg)<$be)$Wa.=",$eg";else{echo$Wa.$Fg;$Wa=$ud.$eg;}}}if($Wa)echo$Wa.$Fg;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$h->error)."\n";}}function
dumpFilename($id){return
friendly_url($id!=""?$id:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($id,$qe=false){$Ze=$_POST["output"];$zc=(preg_match('~sql~',$_POST["format"])?"sql":($qe?"tar":"csv"));header("Content-Type: ".($Ze=="gz"?"application/x-gzip":($zc=="tar"?"application/x-tar":($zc=="sql"||$Ze!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($Ze=="gz")ob_start('gzencode',1e6);return$zc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(50)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(51):lang(52))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(53)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(54)."</a>\n":"");return
true;}function
navigation($pe){global$ia,$w,$Ub,$h;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($pe=="auth"){$Ic=true;foreach((array)$_SESSION["pwds"]as$Mh=>$qg){foreach($qg
as$N=>$Hh){foreach($Hh
as$V=>$G){if($G!==null){if($Ic){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Ic=false;}$Hb=$_SESSION["db"][$Mh][$N][$V];foreach(($Hb?array_keys($Hb):array(""))as$k)echo"<a href='".h(auth_url($Mh,$N,$V,$k))."'>($Ub[$Mh]) ".h($V.($N!=""?"@$N":"").($k!=""?" - $k":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$pe&&DB!=""){$h->select_db(DB);$S=table_status('',true);}if(support("sql")){echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.0.3",'"></script>
<script type="text/javascript">
';if($S){$Ud=array();foreach($S
as$Q=>$U)$Ud[]=preg_quote($Q,'/');echo"var jushLinks = { $w: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Ud).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$w;\n";}echo'bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($pe);if(DB==""||!$pe){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(46)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(55)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(56)."</a>\n";}if($_GET["ns"]!==""&&!$pe&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(57)."</a>\n";if(!$S)echo"<p class='message'>".lang(7)."\n";else$this->tablesPrint($S);}}}function
databasesPrint($pe){global$b,$h;$j=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Fb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(58)."'>DB</span>: ".($j?"<select name='db'$Fb>".optionlist(array(""=>"")+$j,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(10)."'".($j?" class='hidden'":"").">\n";if($pe!="db"&&DB!=""&&$h->select_db(DB)){if(support("scheme")){echo"<br><select name='ns'$Fb>".optionlist(array(""=>"(".lang(59).")")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$Q=>$_g){echo'<a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q).">".lang(60)."</a> ";$C=$this->tableName($_g);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($_g)?"view":""))." title='".lang(29)."'>$C</a>":"<span>$C</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Ke;function
page_header($ch,$m="",$Va=array(),$dh=""){global$ca,$ia,$b,$Ub,$w;page_headers();$eh=$ch.($dh!=""?": $dh":"");$fh=strip_tags($eh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(61),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$fh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.0.3",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.0.3",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.3",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.3",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(61),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\""),'>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="help" class="jush-',$w,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Va!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Ub[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(22));if($Va===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Va)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Va)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Va
as$x=>$X){$Mb=(is_array($X)?$X[1]:h($X));if($Mb!="")echo"<a href='".h(ME."$x=").urlencode(is_array($X)?$X[0]:$X)."'>$Mb</a> &raquo; ";}}echo"$ch\n";}}echo"<h2>$eh</h2>\n";restart_session();page_messages($m);$j=&get_session("dbs");if(DB!=""&&$j&&!in_array(DB,$j,true))$j=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($m){$Ch=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$le=$_SESSION["messages"][$Ch];if($le){echo"<div class='message'>".implode("</div>\n<div class='message'>",$le)."</div>\n";unset($_SESSION["messages"][$Ch]);}if($m)echo"<div class='error'>$m</div>\n";}function
page_footer($pe=""){global$b,$T;echo'</div>

';switch_lang();if($pe!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(62),'" id="logout">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($pe);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($se){while($se>=2147483648)$se-=4294967296;while($se<=-2147483649)$se+=4294967296;return(int)$se;}function
long2str($W,$Rh){$eg='';foreach($W
as$X)$eg.=pack('V',$X);if($Rh)return
substr($eg,0,end($W));return$eg;}function
str2long($eg,$Rh){$W=array_values(unpack('V*',str_pad($eg,4*ceil(strlen($eg)/4),"\0")));if($Rh)$W[]=strlen($eg);return$W;}function
xxtea_mx($Xh,$Wh,$Gg,$Bd){return
int32((($Xh>>5&0x7FFFFFF)^$Wh<<2)+(($Wh>>3&0x1FFFFFFF)^$Xh<<4))^int32(($Gg^$Wh)+($Bd^$Xh));}function
encrypt_string($Bg,$x){if($Bg=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Bg,true);$se=count($W)-1;$Xh=$W[$se];$Wh=$W[0];$Df=floor(6+52/($se+1));$Gg=0;while($Df-->0){$Gg=int32($Gg+0x9E3779B9);$bc=$Gg>>2&3;for($af=0;$af<$se;$af++){$Wh=$W[$af+1];$re=xxtea_mx($Xh,$Wh,$Gg,$x[$af&3^$bc]);$Xh=int32($W[$af]+$re);$W[$af]=$Xh;}$Wh=$W[0];$re=xxtea_mx($Xh,$Wh,$Gg,$x[$af&3^$bc]);$Xh=int32($W[$se]+$re);$W[$se]=$Xh;}return
long2str($W,false);}function
decrypt_string($Bg,$x){if($Bg=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Bg,false);$se=count($W)-1;$Xh=$W[$se];$Wh=$W[0];$Df=floor(6+52/($se+1));$Gg=int32($Df*0x9E3779B9);while($Gg){$bc=$Gg>>2&3;for($af=$se;$af>0;$af--){$Xh=$W[$af-1];$re=xxtea_mx($Xh,$Wh,$Gg,$x[$af&3^$bc]);$Wh=int32($W[$af]-$re);$W[$af]=$Wh;}$Xh=$W[$se];$re=xxtea_mx($Xh,$Wh,$Gg,$x[$af&3^$bc]);$Wh=int32($W[0]-$re);$W[0]=$Wh;$Gg=int32($Gg-0x9E3779B9);}return
long2str($W,true);}$h='';$cd=$_SESSION["token"];if(!$cd)$_SESSION["token"]=rand(1,1e6);$T=get_token();$mf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$mf[$x]=$X;}}$Ja=$_POST["auth"];if($Ja){session_regenerate_id();$l=$Ja["driver"];$N=$Ja["server"];$V=$Ja["username"];$G=$Ja["password"];$k=$Ja["db"];set_password($l,$N,$V,$G);$_SESSION["db"][$l][$N][$V][$k]=true;if($Ja["permanent"]){$x=base64_encode($l)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($k);$yf=$b->permanentLogin(true);$mf[$x]="$x:".base64_encode($yf?encrypt_string($G,$yf):"");cookie("adminer_permanent",implode(" ",$mf));}if(count($_POST)==1||DRIVER!=$l||SERVER!=$N||$_GET["username"]!==$V||DB!=$k)redirect(auth_url($l,$N,$V,$k));}elseif($_POST["logout"]){if($cd&&!verify_token()){page_header(lang(62),lang(63));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(64));}}elseif($mf&&!$_SESSION["pwds"]){session_regenerate_id();$yf=$b->permanentLogin();foreach($mf
as$x=>$X){list(,$db)=explode(":",$X);list($Mh,$N,$V,$k)=array_map('base64_decode',explode("-",$x));set_password($Mh,$N,$V,decrypt_string(base64_decode($db),$yf));$_SESSION["db"][$Mh][$N][$V][$k]=true;}}function
unset_permanent(){global$mf;foreach($mf
as$x=>$X){list($Mh,$N,$V,$k)=array_map('base64_decode',explode("-",$x));if($Mh==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$k==DB)unset($mf[$x]);}cookie("adminer_permanent",implode(" ",$mf));}function
auth_error($tc=null){global$h,$b,$cd;$rg=session_name();$m="";if(!$_COOKIE[$rg]&&$_GET[$rg]&&ini_bool("session.use_only_cookies"))$m=lang(65);elseif(isset($_GET["username"])){if(($_COOKIE[$rg]||$_GET[$rg])&&!$cd)$m=lang(66);else{$G=get_password();if($G!==null){$m=h($tc?$tc->getMessage():(is_string($h)?$h:lang(67)));if($G===false)$m.='<br>'.lang(68,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header(lang(26),$m,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}function
set_password($Mh,$N,$V,$G){$_SESSION["pwds"][$Mh][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(69),lang(70,implode(", ",$sf)),false);page_footer("auth");exit;}$h=connect();}if(!is_object($h)||!$b->login($_GET["username"],get_password())){auth_error();exit;}$l=new
Min_Driver($h);if($Ja&&$_POST["token"])$_POST["token"]=$T;$m='';if($_POST){if(!verify_token()){$rd="max_input_vars";$fe=ini_get($rd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$x){$X=ini_get($x);if($X&&(!$fe||$X<$fe)){$rd=$x;$fe=$X;}}}$m=(!$_POST["token"]&&$fe?lang(71,"'$rd'"):lang(63));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$m=lang(72,"'post_max_size'");if(isset($_GET["sql"]))$m.=' '.lang(73);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
connect_error(){global$b,$h,$T,$m,$Ub;$j=array();if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(25).": ".h(DB),lang(74),true);}else{if($_POST["db"]&&!$m)queries_redirect(substr(ME,0,-1),lang(75),drop_databases($_POST["db"]));page_header(lang(76),$m,false);echo"<p class='links'>\n";foreach(array('database'=>lang(77),'privileges'=>lang(54),'processlist'=>lang(78),'variables'=>lang(79),'status'=>lang(80),)as$x=>$X){if(support($x))echo"<a href='".h(ME)."$x='>$X</a>\n";}echo"<p>".lang(81,$Ub[DRIVER],"<b>$h->server_info</b>","<b>$h->extension</b>")."\n","<p>".lang(82,"<b>".h(logged_user())."</b>")."\n";$j=$b->databases();if($j){$hg=support("scheme");$jb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(25)."<td>".lang(83)."<td>".lang(84)."</thead>\n";foreach($j
as$k){$Zf=h(ME)."db=".urlencode($k);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$k,in_array($k,(array)$_POST["db"])):""),"<th><a href='$Zf'>".h($k)."</a>";$d=nbsp(db_collation($k,$jb));echo"<td>".(support("database")?"<a href='$Zf".($hg?"&amp;ns=":"")."&amp;database=' title='".lang(50)."'>$d</a>":$d),"<td align='right'><a href='$Zf&amp;schema=' id='tables-".h($k)."' title='".lang(53)."'>?</a>","\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(85)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(86)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$T'>\n","</form>\n";}echo"<p><a href='".h(ME)."refresh=1'>".lang(87)."</a>\n";}page_footer("db");if($j)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$h->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(88).": ".h($_GET["ns"]),lang(89),true);page_footer("ns");exit;}}function
select($I,$i=null,$Se=array()){global$w;$Ud=array();$v=array();$f=array();$Sa=array();$uh=array();$J=array();odd('');for($r=0;$K=$I->fetch_row();$r++){if(!$r){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Ad=0;$Ad<count($K);$Ad++){$n=$I->fetch_field();$C=$n->name;$Re=$n->orgtable;$Qe=$n->orgname;$J[$n->table]=$Re;if($Se&&$w=="sql")$Ud[$Ad]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($Re!=""){if(!isset($v[$Re])){$v[$Re]=array();foreach(indexes($Re,$i)as$u){if($u["type"]=="PRIMARY"){$v[$Re]=array_flip($u["columns"]);break;}}$f[$Re]=$v[$Re];}if(isset($f[$Re][$Qe])){unset($f[$Re][$Qe]);$v[$Re][$Qe]=$Ad;$Ud[$Ad]=$Re;}}if($n->charsetnr==63)$Sa[$Ad]=true;$uh[$Ad]=$n->type;echo"<th".($Re!=""||$n->name!=$Qe?" title='".h(($Re!=""?"$Re.":"").$Qe)."'":"").">".h($C).($Se?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$x=>$X){if($X===null)$X="<i>NULL</i>";elseif($Sa[$x]&&!is_utf8($X))$X="<i>".lang(34,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($uh[$x]==254)$X="<code>$X</code>";}if(isset($Ud[$x])&&!$f[$Ud[$x]]){if($Se&&$w=="sql"){$Q=$K[array_search("table=",$Ud)];$_=$Ud[$x].urlencode($Se[$Q]!=""?$Se[$Q]:$Q);}else{$_="edit=".urlencode($Ud[$x]);foreach($v[$Ud[$x]]as$hb=>$Ad)$_.="&where".urlencode("[".bracket_escape($hb)."]")."=".urlencode($K[$Ad]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($r?"</table>":"<p class='message'>".lang(90))."\n";return$J;}function
referencable_primary($mg){$J=array();foreach(table_status('',true)as$Kg=>$Q){if($Kg!=$mg&&fk_support($Q)){foreach(fields($Kg)as$n){if($n["primary"]){if($J[$Kg]){unset($J[$Kg]);break;}$J[$Kg]=$n;}}}}return$J;}function
textarea($C,$Y,$L=10,$kb=80){global$w;echo"<textarea name='$C' rows='$L' cols='$kb' class='sqlarea jush-$w' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($x,$n,$jb,$Mc=array()){global$Cg,$uh,$Ah,$Ge;$U=$n["type"];echo'<td><select name="',$x,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),'>';if($U&&!isset($uh[$U])&&!isset($Mc[$U]))array_unshift($Cg,$U);if($Mc)$Cg[lang(91)]=$Mc;echo
optionlist($Cg,$U),'</select>
<td><input name="',$x,'[length]" value="',h($n["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$n["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();"><td class="options">';echo"<select name='$x"."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(92).')'.optionlist($jb,$n["collation"]).'</select>',($Ah?"<select name='$x"."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Ah,$n["unsigned"]).'</select>':''),(isset($n['on_update'])?"<select name='$x"."[on_update]'".($U=="timestamp"?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(93).")","CURRENT_TIMESTAMP"),$n["on_update"]).'</select>':''),($Mc?"<select name='$x"."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(94).")".optionlist(explode("|",$Ge),$n["on_delete"])."</select> ":" ");}function
process_length($y){global$mc;return(preg_match("~^\\s*\\(?\\s*$mc(?:\\s*,\\s*$mc)*+\\s*\\)?\\s*\$~",$y)&&preg_match_all("~$mc~",$y,$Zd)?"(".implode(",",$Zd[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$y)));}function
process_type($n,$ib="COLLATE"){global$Ah;return" $n[type]".process_length($n["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$n["type"])&&in_array($n["unsigned"],$Ah)?" $n[unsigned]":"").(preg_match('~char|text|enum|set~',$n["type"])&&$n["collation"]?" $ib ".q($n["collation"]):"");}function
process_field($n,$sh){global$w;$Jb=$n["default"];return
array(idf_escape(trim($n["field"])),process_type($sh),($n["null"]?" NULL":" NOT NULL"),(isset($Jb)?" DEFAULT ".((preg_match('~time~',$n["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Jb))||($n["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Jb))||($w=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Jb))?$Jb:q($Jb)):""),($n["type"]=="timestamp"&&$n["on_update"]?" ON UPDATE $n[on_update]":""),(support("comment")&&$n["comment"]!=""?" COMMENT ".q($n["comment"]):""),($n["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(preg_match("~$x|$X~",$U))return" class='$x'";}}function
edit_fields($o,$jb,$U="TABLE",$Mc=array(),$ob=false){global$h,$sd;echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?lang(95):lang(96)),'<td>',lang(97),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>',lang(98),'<td>',lang(99);if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="',lang(47),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td>',lang(100),(support("comment")?"<td".($ob?"":" class='hidden'").">".lang(101):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.3' alt='+' title='".lang(102)."'>",'<script type="text/javascript">row_count = ',count($o),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($o
as$r=>$n){$r++;$Te=$n[($_POST?"orig":"field")];$Rb=(isset($_POST["add"][$r-1])||(isset($n["field"])&&!$_POST["drop_col"][$r]))&&(support("drop_col")||$Te=="");echo'<tr',($Rb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$r][inout]",explode("|",$sd),$n["inout"]):""),'<th>';if($Rb){echo'<input name="fields[',$r,'][field]" value="',h($n["field"]),'" onchange="editingNameChange(this);',($n["field"]!=""||count($o)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$r,'][orig]" value="',h($Te),'">
';edit_type("fields[$r]",$n,$jb,$Mc);if($U=="TABLE"){echo'<td>',checkbox("fields[$r][null]",1,$n["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$r,'"';if($n["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$r][has_default]",1,$n["has_default"]),'<input name="fields[',$r,'][default]" value="',h($n["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($ob?"":" class='hidden'")."><input name='fields[$r][comment]' value='".h($n["comment"])."' maxlength='".($h->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.3' alt='+' title='".lang(102)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.0.3' alt='^' title='".lang(103)."'>&nbsp;"."<input type='image' class='icon' name='down[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.0.3' alt='v' title='".lang(104)."'>&nbsp;":""),($Te==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.0.3' alt='x' title='".lang(105)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$o){ksort($o);$D=0;if($_POST["up"]){$Ld=0;foreach($o
as$x=>$n){if(key($_POST["up"])==$x){unset($o[$x]);array_splice($o,$Ld,0,array($n));break;}if(isset($n["field"]))$Ld=$D;$D++;}}elseif($_POST["down"]){$Oc=false;foreach($o
as$x=>$n){if(isset($n["field"])&&$Oc){unset($o[key($_POST["down"])]);array_splice($o,$D,0,array($Oc));break;}if(key($_POST["down"])==$x)$Oc=$n;$D++;}}elseif($_POST["add"]){$o=array_values($o);array_splice($o,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($Uc,$_f,$f,$Fe){if(!$_f)return
true;if($_f==array("ALL PRIVILEGES","GRANT OPTION"))return($Uc=="GRANT"?queries("$Uc ALL PRIVILEGES$Fe WITH GRANT OPTION"):queries("$Uc ALL PRIVILEGES$Fe")&&queries("$Uc GRANT OPTION$Fe"));return
queries("$Uc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$_f).$f).$Fe);}function
drop_create($Vb,$yb,$Wb,$Wg,$Yb,$A,$ke,$ie,$je,$Ce,$ve){if($_POST["drop"])query_redirect($Vb,$A,$ke);elseif($Ce=="")query_redirect($yb,$A,$je);elseif($Ce!=$ve){$_b=queries($yb);queries_redirect($A,$ie,$_b&&queries($Vb));if($_b)queries($Wb);}else
queries_redirect($A,$ie,queries($Wg)&&queries($Yb)&&queries($Vb)&&queries($yb));}function
create_trigger($Fe,$K){global$w;$bh=" $K[Timing] $K[Event]";return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($w=="mssql"?$Fe.$bh:$bh.$Fe).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($ag,$K){global$sd;$O=array();$o=(array)$K["fields"];ksort($o);foreach($o
as$n){if($n["field"]!="")$O[]=(preg_match("~^($sd)\$~",$n["inout"])?"$n[inout] ":"").idf_escape($n["field"]).process_type($n,"CHARACTER SET");}return"CREATE $ag ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($p){global$Ge;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$p["source"])).") REFERENCES ".table($p["table"])." (".implode(", ",array_map('idf_escape',$p["target"])).")".(preg_match("~^($Ge)\$~",$p["on_delete"])?" ON DELETE $p[on_delete]":"").(preg_match("~^($Ge)\$~",$p["on_update"])?" ON UPDATE $p[on_update]":"");}function
tar_file($Gc,$gh){$J=pack("a100a8a8a8a12a12",$Gc,644,0,0,decoct($gh->size),decoct(time()));$bb=8*32;for($r=0;$r<strlen($J);$r++)$bb+=ord($J[$r]);$J.=sprintf("%06o",$bb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$gh->send();echo
str_repeat("\0",511-($gh->size+511)%512);}function
ini_bytes($rd){$X=ini_get($rd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($kf){global$w,$h;$Dh=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($h->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($h->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($kf[$w]?"<a href='$Dh[$w]$kf[$w]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}$Ge="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
TmpFile(){$this->handler=tmpfile();}function
write($tb){$this->size+=strlen($tb);fwrite($this->handler,$tb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$mc="'(?:''|[^'\\\\]|\\\\.)*+'";$sd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$o=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$l->select($a,$M,array(where($_GET,$o)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$o=fields($a);if(!$o)$m=error();$R=table_status1($a,true);page_header(($o&&is_view($R)?lang(106):lang(107)).": ".h($a),$m);$b->selectLinks($R);$nb=$R["Comment"];if($nb!="")echo"<p>".lang(101).": ".h($nb)."\n";if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(108)."<td>".lang(97).(support("comment")?"<td>".lang(101):"")."</thead>\n";foreach($o
as$n){echo"<tr".odd()."><th>".h($n["field"]),"<td title='".h($n["collation"])."'>".h($n["full_type"]).($n["null"]?" <i>NULL</i>":"").($n["auto_increment"]?" <i>".lang(47)."</i>":""),(isset($n["default"])?" [<b>".h($n["default"])."</b>]":""),(support("comment")?"<td>".nbsp($n["comment"]):""),"\n";}echo"</table>\n";}if(!is_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".lang(109)."</h3>\n";$v=indexes($a);if($v){echo"<table cellspacing='0'>\n";foreach($v
as$C=>$u){ksort($u["columns"]);$xf=array();foreach($u["columns"]as$x=>$X)$xf[]="<i>".h($X)."</i>".($u["lengths"][$x]?"(".$u["lengths"][$x].")":"").($u["descs"][$x]?" DESC":"");echo"<tr title='".h($C)."'><th>$u[type]<td>".implode(", ",$xf)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(110)."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".lang(91)."</h3>\n";$Mc=foreign_keys($a);if($Mc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(111)."<td>".lang(112)."<td>".lang(94)."<td>".lang(93)."<td>&nbsp;</thead>\n";foreach($Mc
as$C=>$p){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$p["source"]))."</i>","<td><a href='".h($p["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($p["db"]),ME):($p["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($p["ns"]),ME):ME))."table=".urlencode($p["table"])."'>".($p["db"]!=""?"<b>".h($p["db"])."</b>.":"").($p["ns"]!=""?"<b>".h($p["ns"])."</b>.":"").h($p["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$p["target"]))."</i>)","<td>".nbsp($p["on_delete"])."\n","<td>".nbsp($p["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.lang(113).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(114)."</a>\n";}}if(support(is_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(115)."</h3>\n";$rh=triggers($a);if($rh){echo"<table cellspacing='0'>\n";foreach($rh
as$x=>$X)echo"<tr valign='top'><td>$X[0]<td>$X[1]<th>".h($x)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($x))."'>".lang(113)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(116)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(53),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Mg=array();$Ng=array();$C="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$C-".DB]?"$C-".DB:$C)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$Zd,PREG_SET_ORDER);foreach($Zd
as$r=>$B){$Mg[$B[1]]=array($B[2],$B[3]);$Ng[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$ih=0;$Pa=-1;$gg=array();$Of=array();$Pd=array();foreach(table_status('',true)as$Q=>$R){if(is_view($R))continue;$pf=0;$gg[$Q]["fields"]=array();foreach(fields($Q)as$C=>$n){$pf+=1.25;$n["pos"]=$pf;$gg[$Q]["fields"][$C]=$n;}$gg[$Q]["pos"]=($Mg[$Q]?$Mg[$Q]:array($ih,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$Nd=$Pa;if($Mg[$Q][1]||$Mg[$X["table"]][1])$Nd=min(floatval($Mg[$Q][1]),floatval($Mg[$X["table"]][1]))-1;else$Pa-=.1;while($Pd[(string)$Nd])$Nd-=.0001;$gg[$Q]["references"][$X["table"]][(string)$Nd]=array($X["source"],$X["target"]);$Of[$X["table"]][$Q][(string)$Nd]=$X["target"];$Pd[(string)$Nd]=true;}}$ih=max($ih,$gg[$Q]["pos"][0]+2.5+$pf);}echo'<div id="schema" style="height: ',$ih,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Ng)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$ih,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($gg
as$C=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($Q["fields"]as$n){$X='<span'.type_class($n["type"]).' title="'.h($n["full_type"].($n["null"]?" NULL":'')).'">'.h($n["field"]).'</span>';echo"<br>".($n["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$Tg=>$Pf){foreach($Pf
as$Nd=>$Lf){$Od=$Nd-$Mg[$C][1];$r=0;foreach($Lf[0]as$vg)echo"\n<div class='references' title='".h($Tg)."' id='refs$Nd-".($r++)."' style='left: $Od"."em; top: ".$Q["fields"][$vg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Od)."em;'></div></div>";}}foreach((array)$Of[$C]as$Tg=>$Pf){foreach($Pf
as$Nd=>$f){$Od=$Nd-$Mg[$C][1];$r=0;foreach($f
as$Sg)echo"\n<div class='references' title='".h($Tg)."' id='refd$Nd-".($r++)."' style='left: $Od"."em; top: ".$Q["fields"][$Sg]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.0.3'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Od)."em;'></div></div>";}}echo"\n</div>\n";}foreach($gg
as$C=>$Q){foreach((array)$Q["references"]as$Tg=>$Pf){foreach($Pf
as$Nd=>$Lf){$oe=$ih;$de=-10;foreach($Lf[0]as$x=>$vg){$qf=$Q["pos"][0]+$Q["fields"][$vg]["pos"];$rf=$gg[$Tg]["pos"][0]+$gg[$Tg]["fields"][$Lf[1][$x]]["pos"];$oe=min($oe,$qf,$rf);$de=max($de,$qf,$rf);}echo"<div class='references' id='refl$Nd' style='left: $Nd"."em; top: $oe"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($de-$oe)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(117),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$m){$wb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$x)$wb.="&$x=".urlencode($_POST[$x]);cookie("adminer_export",substr($wb,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$zc=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$xd=preg_match('~sql~',$_POST["format"]);if($xd)echo"-- Adminer $ia ".$Ub[DRIVER]." dump

".($w!="sql"?"":"SET NAMES utf8;
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET time_zone = ".q(substr(preg_replace('~^[^-]~','+\0',$h->result("SELECT TIMEDIFF(NOW(), UTC_TIMESTAMP)")),0,6)).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
");$Dg=$_POST["db_style"];$j=array(DB);if(DB==""){$j=$_POST["databases"];if(is_string($j))$j=explode("\n",rtrim(str_replace("\r","",$j),"\n"));}foreach((array)$j
as$k){$b->dumpDatabase($k);if($h->select_db($k)){if($xd&&preg_match('~CREATE~',$Dg)&&($yb=$h->result("SHOW CREATE DATABASE ".idf_escape($k),1))){if($Dg=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($k).";\n";echo"$yb;\n";}if($xd){if($Dg)echo
use_sql($k).";\n\n";$Ye="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$ag){foreach(get_rows("SHOW $ag STATUS WHERE Db = ".q($k),null,"-- ")as$K)$Ye.=($Dg!='DROP+CREATE'?"DROP $ag IF EXISTS ".idf_escape($K["Name"]).";;\n":"").remove_definer($h->result("SHOW CREATE $ag ".idf_escape($K["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K)$Ye.=($Dg!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"").remove_definer($h->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3)).";;\n\n";}if($Ye)echo"DELIMITER ;;\n\n$Ye"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Ph=array();foreach(table_status('',true)as$C=>$R){$Q=(DB==""||in_array($C,(array)$_POST["tables"]));$Cb=(DB==""||in_array($C,(array)$_POST["data"]));if($Q||$Cb){if($zc=="tar"){$gh=new
TmpFile;ob_start(array($gh,'write'),1e5);}$b->dumpTable($C,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$Ph[]=$C;elseif($Cb){$o=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($o,$o)." FROM ".table($C));}if($xd&&$_POST["triggers"]&&$Q&&($rh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$rh\nDELIMITER ;\n";if($zc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$k/")."$C.csv",$gh);}elseif($xd)echo"\n";}}foreach($Ph
as$Oh)$b->dumpTable($Oh,$_POST["table_style"],1);if($zc=="tar")echo
pack("x512");}}}if($xd)echo"-- ".$h->result("SELECT NOW()")."\n";exit;}page_header(lang(118),$m,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Gb=array('','USE','DROP+CREATE','CREATE');$Og=array('','DROP+CREATE','CREATE');$Db=array('','TRUNCATE+INSERT','INSERT');if($w=="sql")$Db[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".lang(119)."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".lang(120)."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($w=="sqlite"?"":"<tr><th>".lang(25)."<td>".html_select('db_style',$Gb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],lang(121)):"").(support("event")?checkbox("events",1,$K["events"],lang(122)):"")),"<tr><th>".lang(84)."<td>".html_select('table_style',$Og,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],lang(47)).(support("trigger")?checkbox("triggers",1,$K["triggers"],lang(115)):""),"<tr><th>".lang(123)."<td>".html_select('data_style',$Db,$K["data_style"]),'</table>
<p><input type="submit" value="',lang(118),'">
<input type="hidden" name="token" value="',$T,'">

<table cellspacing="0">
';$uf=array();if(DB!=""){$ab=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$ab onclick='formCheck(this, /^tables\\[/);'>".lang(84)."</label>","<th style='text-align: right;'><label class='block'>".lang(123)."<input type='checkbox' id='check-data'$ab onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Ph="";$Pg=tables_list();foreach($Pg
as$C=>$U){$tf=preg_replace('~_.*~','',$C);$ab=($a==""||$a==(substr($a,-1)=="%"?"$tf%":$C));$xf="<tr><td>".checkbox("tables[]",$C,$ab,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Ph.="$xf\n";else
echo"$xf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$ab,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$uf[$tf]++;}echo$Ph;if($Pg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(25)."</label></thead>\n";$j=$b->databases();if($j){foreach($j
as$k){if(!information_schema($k)){$tf=preg_replace('~_.*~','',$k);echo"<tr><td>".checkbox("databases[]",$k,$a==""||$a=="$tf%",$k,"formUncheck('check-databases');","block")."\n";$uf[$tf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Ic=true;foreach($uf
as$x=>$X){if($x!=""&&$X>1){echo($Ic?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$x%")."'>".h($x)."</a>";$Ic=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(54));$I=$h->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Uc=$I;if(!$I)$I=$h->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Uc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(23)."<th>".lang(22)."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.lang(33)."</a>\n";if(!$Uc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(33)."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.lang(124)."</a>";}elseif(isset($_GET["sql"])){if(!$m&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$ed=&get_session("queries");$dd=&$ed[DB];if(!$m&&$_POST["clear"]){$dd=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(55):lang(46)),$m);if(!$m&&$_POST){$Qc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Qc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Qc?fread($Qc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Df=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$dd||reset(end($dd))!=$Df){restart_session();$dd[]=array($Df,time());set_session("queries",$ed);stop_session();}}$wg="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\r?\n)";$Lb=";";$D=0;$ic=true;$i=connect();if(is_object($i)&&DB!="")$i->select_db(DB);$mb=0;$oc=array();$Td=0;$df='[\'"'.($w=="sql"?'`#':($w=="sqlite"?'`[':($w=="mssql"?'[':''))).']|/\\*|-- |$'.($w=="pgsql"?'|\\$[^$]*\\$':'');$jh=microtime(true);parse_str($_COOKIE["adminer_export"],$wa);$ac=$b->dumpFormat();unset($ac["sql"]);while($H!=""){if(!$D&&preg_match("~^$wg*DELIMITER\\s+(\\S+)~i",$H,$B)){$Lb=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Lb)."\\s*|$df)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($Oc,$pf)=$B[0];if(!$Oc&&$Qc&&!feof($Qc))$H.=fread($Qc,1e5);else{if(!$Oc&&rtrim($H)=="")break;$D=$pf+strlen($Oc);if($Oc&&rtrim($Oc)!=$Lb){while(preg_match('('.($Oc=='/*'?'\\*/':($Oc=='['?']':(preg_match('~^-- |^#~',$Oc)?"\n":preg_quote($Oc)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$eg=$B[0][0];if(!$eg&&$Qc&&!feof($Qc))$H.=fread($Qc,1e5);else{$D=$B[0][1]+strlen($eg);if($eg[0]!="\\")break;}}}else{$ic=false;$Df=substr($H,0,$pf);$mb++;$xf="<pre id='sql-$mb'><code class='jush-$w'>".shorten_utf8(trim($Df),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$xf;ob_flush();flush();}$zg=microtime(true);if($h->multi_query($Df)&&is_object($i)&&preg_match("~^$wg*USE\\b~isU",$Df))$i->query($Df);do{$I=$h->store_result();$jc=microtime(true);$Zg=" <span class='time'>(".format_time($zg,$jc).")</span>".(strlen($Df)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Df))."'>".lang(33)."</a>":"");if($h->error){echo($_POST["only_errors"]?$xf:""),"<p class='error'>".lang(125).($h->errno?" ($h->errno)":"").": ".error()."\n";$oc[]=" <a href='#sql-$mb'>$mb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$Se=select($I,$i);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($I->num_rows?lang(126,$I->num_rows):"").$Zg;$s="export-$mb";$yc=", <a href='#$s' onclick=\"return !toggle('$s');\">".lang(118)."</a><span id='$s' class='hidden'>: ".html_select("output",$b->dumpOutput(),$wa["output"])." ".html_select("format",$ac,$wa["format"])."<input type='hidden' name='query' value='".h($Df)."'>"." <input type='submit' name='export' value='".lang(118)."'><input type='hidden' name='token' value='$T'></span>\n";if($i&&preg_match("~^($wg|\\()*SELECT\\b~isU",$Df)&&($xc=explain($i,$Df))){$s="explain-$mb";echo", <a href='#$s' onclick=\"return !toggle('$s');\">EXPLAIN</a>$yc","<div id='$s' class='hidden'>\n";select($xc,$i,$Se);echo"</div>\n";}else
echo$yc;echo"</form>\n";}}else{if(preg_match("~^$wg*(CREATE|DROP|ALTER)$wg+(DATABASE|SCHEMA)\\b~isU",$Df)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($h->info)."'>".lang(127,$h->affected_rows)."$Zg\n";}$zg=$jc;}while($h->next_result());$Td+=substr_count($Df.$Oc,"\n");$H=substr($H,$D);$D=0;}}}}if($ic)echo"<p class='message'>".lang(128)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(129,$mb-count($oc))," <span class='time'>(".format_time($jh,microtime(true)).")</span>\n";}elseif($oc&&$mb>1)echo"<p class='error'>".lang(125).": ".implode("",$oc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$uc="<input type='submit' value='".lang(130)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Df=$_GET["sql"];if($_POST)$Df=$_POST["query"];elseif($_GET["history"]=="all")$Df=$dd;elseif($_GET["history"]!="")$Df=$dd[$_GET["history"]][0];echo"<p>";textarea("query",$Df,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$uc\n";}else{echo"<fieldset><legend>".lang(131)."</legend><div>",(ini_bool("file_uploads")?'<input type="file" name="sql_file[]" multiple> (&lt; '.ini_get("upload_max_filesize").'B)':lang(132)),"\n$uc","</div></fieldset>\n","<fieldset><legend>".lang(133)."</legend><div>",lang(134,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(135).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(136))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(137))."\n","<input type='hidden' name='token' value='$T'>\n";if(!isset($_GET["import"])&&$dd){print_fieldset("history",lang(138),$_GET["history"]!="");for($X=end($dd);$X;$X=prev($dd)){$x=key($dd);list($Df,$Zg)=$X;echo'<a href="'.h(ME."sql=&history=$x").'">'.lang(33)."</a> <span class='time' title='".@date('Y-m-d',$Zg)."'>".@date("H:i:s",$Zg)."</span> <code class='jush-$w'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Df)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(139)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(140)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$o=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$o):""):where($_GET,$o));$Bh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($o
as$C=>$n){if(!isset($n["privileges"][$Bh?"update":"insert"])||$b->fieldName($n)=="")unset($o[$C]);}if($_POST&&!$m&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($Bh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$v=indexes($a);$xh=unique_array($_GET["where"],$v);$Gf="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(141),$l->delete($a,$Gf,!$xh));else{$O=array();foreach($o
as$C=>$n){$X=process_input($n);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($Bh){if(!$O)redirect($A);queries_redirect($A,lang(142),$l->update($a,$O,$Gf,!$xh));if(is_ajax()){page_headers();page_messages($m);exit;}}else{$I=$l->insert($a,$O);$Md=($I?last_id():0);queries_redirect($A,lang(143,($Md?" $Md":"")),$I);}}}$Kg=$b->tableName(table_status1($a,true));page_header(($Bh?lang(33):lang(144)),$m,array("select"=>array($a,$Kg)),$Kg);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($o
as$C=>$n){if(isset($n["privileges"]["select"])){$Fa=convert_field($n);if($_POST["clone"]&&$n["auto_increment"])$Fa="''";if($w=="sql"&&preg_match("~enum|set~",$n["type"]))$Fa="1*".idf_escape($C);$M[]=($Fa?"$Fa AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$l->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$o){if(!$Z){$I=$l->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($l->primary=>"");}if($K){foreach($K
as$x=>$X){if(!$Z)$K[$x]=null;$o[$x]=array("field"=>$x,"null"=>($x!=$l->primary),"auto_increment"=>($x==$l->primary));}}}if($K===false)echo"<p class='error'>".lang(90)."\n";echo'
<div id="message"></div>

<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$o)echo"<p class='error'>".lang(145)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($o
as$C=>$n){echo"<tr><th>".$b->fieldName($n);$Jb=$_GET["set"][bracket_escape($C)];if($Jb===null){$Jb=$n["default"];if($n["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Jb,$Qf))$Jb=$Qf[1];}$Y=($K!==null?($K[$C]!=""&&$w=="sql"&&preg_match("~enum|set~",$n["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$Bh&&$n["auto_increment"]?"":(isset($_GET["select"])?false:$Jb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$n);$q=($_POST["save"]?(string)$_POST["function"][$C]:($Bh&&$n["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$n["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$q="now";}input($n,$Y,$q);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo'<p>
';if($o){echo"<input type='submit' value='".lang(146)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Bh?lang(147)."' onclick='return !ajaxForm(this.form, \"".lang(148).'...", this)':lang(149))."' title='Ctrl+Shift+Enter'>\n";}echo($Bh?"<input type='submit' name='delete' value='".lang(150)."'".confirm().">\n":($_POST||!$o?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$ef=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$x)$ef[$x]=$x;$Nf=referencable_primary($a);$Mc=array();foreach($Nf
as$Kg=>$n)$Mc[str_replace("`","``",$Kg)."`".str_replace("`","``",$n["field"])]=$Kg;$Ve=array();$R=array();if($a!=""){$Ve=fields($a);$R=table_status($a);if(!$R)$m=lang(7);}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$m){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(151),drop_tables(array($a)));else{$o=array();$Ca=array();$Eh=false;$Kc=array();ksort($K["fields"]);$Ue=reset($Ve);$_a=" FIRST";foreach($K["fields"]as$x=>$n){$p=$Mc[$n["type"]];$sh=($p!==null?$Nf[$p]:$n);if($n["field"]!=""){if(!$n["has_default"])$n["default"]=null;if($x==$K["auto_increment_col"])$n["auto_increment"]=true;$Bf=process_field($n,$sh);$Ca[]=array($n["orig"],$Bf,$_a);if($Bf!=process_field($Ue,$Ue)){$o[]=array($n["orig"],$Bf,$_a);if($n["orig"]!=""||$_a)$Eh=true;}if($p!==null)$Kc[idf_escape($n["field"])]=($a!=""&&$w!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Mc[$n["type"]],'source'=>array($n["field"]),'target'=>array($sh["field"]),'on_delete'=>$n["on_delete"],));$_a=" AFTER ".idf_escape($n["field"]);}elseif($n["orig"]!=""){$Eh=true;$o[]=array($n["orig"]);}if($n["orig"]!=""){$Ue=next($Ve);if(!$Ue)$_a="";}}$gf="";if($ef[$K["partition_by"]]){$hf=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$x=>$X){$Y=$K["partition_values"][$x];$hf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$gf.="\nPARTITION BY $K[partition_by]($K[partition])".($hf?" (".implode(",",$hf)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$gf.="\nREMOVE PARTITIONING";$he=lang(152);if($a==""){cookie("adminer_engine",$K["Engine"]);$he=lang(153);}$C=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$he,alter_table($a,$C,($w=="sqlite"&&($Eh||$Kc)?$Ca:$o),$Kc,$K["Comment"],($K["Engine"]&&$K["Engine"]!=$R["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$R["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?+$K["Auto_increment"]:""),$gf));}}page_header(($a!=""?lang(31):lang(57)),$m,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($uh["int"])?"int":(isset($uh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$R;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($Ve
as$n){$n["has_default"]=isset($n["default"]);$K["fields"][]=$n;}if(support("partitioning")){$Rc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$h->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Rc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$hf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Rc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$hf[""]="";$K["partition_names"]=array_keys($hf);$K["partition_values"]=array_values($hf);}}}$jb=collations();$lc=engines();foreach($lc
as$kc){if(!strcasecmp($kc,$K["Engine"])){$K["Engine"]=$kc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(154),': <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($lc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(155).")")+$lc,$K["Engine"])."</select>":""),' ',($jb&&!preg_match("~sqlite|mssql~",$w)?html_select("Collation",array(""=>"(".lang(92).")")+$jb,$K["Collation"]):""),' <input type="submit" value="',lang(146),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$ob=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$ob){foreach($K["fields"]as$n){if($n["comment"]!=""){$ob=true;break;}}}edit_fields($K["fields"],$jb,"TABLE",$Mc,$ob);echo'</table>
<p>
',lang(47),': <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(100),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($ob?" checked":"").">".lang(101)."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($h->server_info>=5.5?2048:60).'"'.($ob?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(146),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}if(support("partitioning")){$ff=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",lang(156),$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$ef,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
',lang(157),': <input type="number" name="partitions" class="size',($ff||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($ff?"":" class='hidden'"),'>
<thead><tr><th>',lang(158),'<th>',lang(159),'</thead>
';foreach($K["partition_names"]as$x=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($x==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$x]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$nd=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($h->server_info>=5.6?'|InnoDB':'').'~i',$R["Engine"]))$nd[]="FULLTEXT";$v=indexes($a);$vf=array();if($w=="mongo"){$vf=$v["_id_"];unset($nd[0]);unset($v["_id_"]);}$K=$_POST;if($_POST&&!$m&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$u){$C=$u["name"];if(in_array($u["type"],$nd)){$f=array();$Rd=array();$Nb=array();$O=array();ksort($u["columns"]);foreach($u["columns"]as$x=>$e){if($e!=""){$y=$u["lengths"][$x];$Mb=$u["descs"][$x];$O[]=idf_escape($e).($y?"(".(+$y).")":"").($Mb?" DESC":"");$f[]=$e;$Rd[]=($y?$y:null);$Nb[]=$Mb;}}if($f){$vc=$v[$C];if($vc){ksort($vc["columns"]);ksort($vc["lengths"]);ksort($vc["descs"]);if($u["type"]==$vc["type"]&&array_values($vc["columns"])===$f&&(!$vc["lengths"]||array_values($vc["lengths"])===$Rd)&&array_values($vc["descs"])===$Nb){unset($v[$C]);continue;}}$c[]=array($u["type"],$C,$O);}}}foreach($v
as$C=>$vc)$c[]=array($vc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(160),alter_indexes($a,$c));}page_header(lang(109),$m,array("table"=>$a),h($a));$o=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$x=>$u){if($u["columns"][count($u["columns"])]!="")$K["indexes"][$x]["columns"][]="";}$u=end($K["indexes"]);if($u["type"]||array_filter($u["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($v
as$x=>$u){$v[$x]["name"]=$x;$v[$x]["columns"][]="";}$v[]=array("columns"=>array(1=>""));$K["indexes"]=$v;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th>',lang(161),'<th><input type="submit" style="left: -1000px; position: absolute;">',lang(162),'<th>',lang(163);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.0.3' alt='+' title='<?php echo
lang(102),'\'></noscript>&nbsp;
</thead>
';if($vf){echo"<tr><td>PRIMARY<td>";foreach($vf["columns"]as$x=>$e){echo
select_input(" disabled",$o,$e),"<label><input disabled type='checkbox'>".lang(41)."</label> ";}echo"<td><td>\n";}$Ad=1;foreach($K["indexes"]as$u){if(!$_POST["drop_col"]||$Ad!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Ad][type]",array(-1=>"")+$nd,$u["type"],($Ad==count($K["indexes"])?"indexesAddRow(this);":1)),"<td>";ksort($u["columns"]);$r=1;foreach($u["columns"]as$x=>$e){echo"<span>".select_input(" name='indexes[$Ad][columns][$r]' onchange=\"".($r==count($u["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($w=="sql"?"":$_GET["indexes"]."_")."');\"",($o?array_combine($o,$o):$o),$e),($w=="sql"||$w=="mssql"?"<input type='number' name='indexes[$Ad][lengths][$r]' class='size' value='".h($u["lengths"][$x])."'>":""),($w!="sql"?checkbox("indexes[$Ad][descs][$r]",1,$u["descs"][$x],lang(41)):"")," </span>";$r++;}echo"<td><input name='indexes[$Ad][name]' value='".h($u["name"])."' autocapitalize='off'>\n","<td><input type='image' class='icon' name='drop_col[$Ad]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.0.3' alt='x' title='".lang(105)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Ad++;}echo'</table>
<p>
<input type="submit" value="',lang(146),'">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$m&&!isset($_POST["add_x"])){restart_session();$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(164),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),lang(165),rename_database($C,$K["collation"]));}else{$j=explode("\n",str_replace("\r","",$C));$Eg=true;$Ld="";foreach($j
as$k){if(count($j)==1||$k!=""){if(!create_database($k,$K["collation"]))$Eg=false;$Ld=$k;}}queries_redirect(ME."db=".urlencode($Ld),lang(166),$Eg);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),lang(167));}}page_header(DB!=""?lang(50):lang(168),$m,array(),h(DB));$jb=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$jb);elseif($w=="sql"){foreach(get_vals("SHOW GRANTS")as$Uc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Uc,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($jb?html_select("collation",array(""=>"(".lang(92).")")+$jb,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(146),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(86)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.3' alt='+' title='".lang(102)."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$m){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(169));else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(170));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(171));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(51):lang(52),$m);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(146),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(86)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(172).": ".h($da),$m);$ag=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$ld=array();$Ye=array();foreach($ag["fields"]as$r=>$n){if(substr($n["inout"],-3)=="OUT")$Ye[$r]="@".idf_escape($n["field"])." AS ".idf_escape($n["field"]);if(!$n["inout"]||substr($n["inout"],0,2)=="IN")$ld[]=$r;}if(!$m&&$_POST){$Xa=array();foreach($ag["fields"]as$x=>$n){if(in_array($x,$ld)){$X=process_input($n);if($X===false)$X="''";if(isset($Ye[$x]))$h->query("SET @".idf_escape($n["field"])." = $X");}$Xa[]=(isset($Ye[$x])?"@".idf_escape($n["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Xa).")";echo"<p><code class='jush-$w'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(33)."</a>\n";if(!$h->multi_query($H))echo"<p class='error'>".error()."\n";else{$i=connect();if(is_object($i))$i->select_db(DB);do{$I=$h->store_result();if(is_object($I))select($I,$i);else
echo"<p class='message'>".lang(173,$h->affected_rows)."\n";}while($h->next_result());if($Ye)select($h->query("SELECT ".implode(", ",$Ye)));}}echo'
<form action="" method="post">
';if($ld){echo"<table cellspacing='0'>\n";foreach($ld
as$x){$n=$ag["fields"][$x];$C=$n["field"];echo"<tr><th>".$b->fieldName($n);$Y=$_POST["fields"][$C];if($Y!=""){if($n["type"]=="enum")$Y=+$Y;if($n["type"]=="set")$Y=array_sum($Y);}input($n,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(172),'">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$m&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$he=($_POST["drop"]?lang(174):($C!=""?lang(175):lang(176)));$A=ME."table=".urlencode($a);$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$Sg=array();foreach($K["source"]as$x=>$X)$Sg[$x]=$K["target"][$x];$K["target"]=$Sg;if($w=="sqlite")queries_redirect($A,$he,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Vb="\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$Vb,$A,$he);else{query_redirect($c.($C!=""?"$Vb,":"")."\nADD".format_foreign_key($K),$A,$he);$m=lang(177)."<br>$m";}}}page_header(lang(178),$m,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Mc=foreign_keys($a);$K=$Mc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$vg=array_keys(fields($a));$Sg=($a===$K["table"]?$vg:array_keys(fields($K["table"])));$Mf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo
lang(179),':
',html_select("table",$Mf,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(180),'"></noscript>
<table cellspacing="0">
<thead><tr><th>',lang(111),'<th>',lang(112),'</thead>
';$Ad=0;foreach($K["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$vg,$X,($Ad==count($K["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$x)."]",$Sg,$K["target"][$x]);$Ad++;}echo'</table>
<p>
',lang(94),': ',html_select("on_delete",array(-1=>"")+explode("|",$Ge),$K["on_delete"]),' ',lang(93),': ',html_select("on_update",array(-1=>"")+explode("|",$Ge),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(146),'">
<noscript><p><input type="submit" name="add" value="',lang(181),'"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;if($_POST&&!$m){$C=trim($K["name"]);$Fa=" AS\n$K[select]";$A=ME."table=".urlencode($C);$he=lang(182);if(!$_POST["drop"]&&$a==$C&&$w!="sqlite")query_redirect(($w=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Fa,$A,$he);else{$Ug=$C."_adminer_".uniqid();drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($C).$Fa,"DROP VIEW ".table($C),"CREATE VIEW ".table($Ug).$Fa,"DROP VIEW ".table($Ug),($_POST["drop"]?substr(ME,0,-1):$A),lang(183),$he,lang(184),$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;if(!$m)$m=$h->error;}page_header(($a!=""?lang(30):lang(185)),$m,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(163),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="',lang(146),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$vd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Ag=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$m){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(186));elseif(in_array($K["INTERVAL_FIELD"],$vd)&&isset($Ag[$K["STATUS"]])){$fg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(187):lang(188)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$fg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$fg)."\n".$Ag[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(189).": ".h($aa):lang(190)),$m);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(163),'<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(191),'<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">',lang(192),'<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>',lang(193),'<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$vd,$K["INTERVAL_FIELD"]),'<tr><th>',lang(80),'<td>',html_select("STATUS",$Ag,$K["STATUS"]),'<tr><th>',lang(101),'<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",lang(194)),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(146),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$ag=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$m){$Ug="$K[name]_adminer_".uniqid();drop_create("DROP $ag ".idf_escape($da),create_routine($ag,$K),"DROP $ag ".idf_escape($K["name"]),create_routine($ag,array("name"=>$Ug)+$K),"DROP $ag ".idf_escape($Ug),substr(ME,0,-1),lang(195),lang(196),lang(197),$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(198):lang(199)).": ".h($da):(isset($_GET["function"])?lang(200):lang(201))),$m);if(!$_POST&&$da!=""){$K=routine($da,$ag);$K["name"]=$da;}$jb=get_vals("SHOW CHARACTER SET");sort($jb);$bg=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(163),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($bg?lang(9).": ".html_select("language",$bg,$K["language"]):""),'<input type="submit" value="',lang(146),'">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$jb,$ag);if(isset($_GET["function"])){echo"<tr><td>".lang(202);edit_type("returns",$K["returns"],$jb);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="',lang(146),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$m){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,lang(203));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(204));elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,lang(205));else
redirect($_);}page_header($fa!=""?lang(206).": ".h($fa):lang(207),$m);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(146),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(86)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$m){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,lang(208));else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,lang(209));}page_header($ga!=""?lang(210).": ".h($ga):lang(211),$m);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(86)."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".lang(146)."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$qh=trigger_options();$oh=array("INSERT","UPDATE","DELETE");$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$m&&in_array($_POST["Timing"],$qh["Timing"])&&in_array($_POST["Event"],$oh)&&in_array($_POST["Type"],$qh["Type"])){$Fe=" ON ".table($a);$Vb="DROP TRIGGER ".idf_escape($C).($w=="pgsql"?$Fe:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Vb,$A,lang(212));else{if($C!="")queries($Vb);queries_redirect($A,($C!=""?lang(213):lang(214)),queries(create_trigger($Fe,$_POST)));if($C!="")queries(create_trigger($Fe,$K+array("Type"=>reset($qh["Type"]))));}}$K=$_POST;}page_header(($C!=""?lang(215).": ".h($C):lang(216)),$m,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(217),'<td>',html_select("Timing",$qh["Timing"],$K["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>',lang(218),'<td>',html_select("Event",$oh,$K["Event"],"this.form['Timing'].onchange();"),'<tr><th>',lang(97),'<td>',html_select("Type",$qh["Type"],$K["Type"]),'</table>
<p>',lang(163),': <input name="Trigger" value="',h($K["Trigger"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="',lang(146),'">
';if($C!=""){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$_f=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$ub)$_f[$ub][$K["Privilege"]]=$K["Comment"];}$_f["Server Admin"]+=$_f["File access on server"];$_f["Databases"]["Create routine"]=$_f["Procedures"]["Create routine"];unset($_f["Procedures"]["Create routine"]);$_f["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$_f["Columns"][$X]=$_f["Tables"][$X];unset($_f["Server Admin"]["Usage"]);foreach($_f["Tables"]as$x=>$X)unset($_f["Databases"][$x]);$ue=array();if($_POST){foreach($_POST["objects"]as$x=>$X)$ue[$X]=(array)$ue[$X]+(array)$_POST["grants"][$x];}$Vc=array();$De="";if(isset($_GET["host"])&&($I=$h->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$Zd,PREG_SET_ORDER)){foreach($Zd
as$X){if($X[1]!="USAGE")$Vc["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$Vc["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$De=$B[1];}}if($_POST&&!$m){$Ee=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Ee",ME."privileges=",lang(219));else{$we=q($_POST["user"])."@".q($_POST["host"]);$if=$_POST["pass"];if($if!=''&&!$_POST["hashed"]){$if=$h->result("SELECT PASSWORD(".q($if).")");$m=!$if;}$_b=false;if(!$m){if($Ee!=$we){$_b=queries(($h->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $we IDENTIFIED BY PASSWORD ".q($if));$m=!$_b;}elseif($if!=$De)queries("SET PASSWORD FOR $we = ".q($if));}if(!$m){$Xf=array();foreach($ue
as$_e=>$Uc){if(isset($_GET["grant"]))$Uc=array_filter($Uc);$Uc=array_keys($Uc);if(isset($_GET["grant"]))$Xf=array_diff(array_keys(array_filter($ue[$_e],'strlen')),$Uc);elseif($Ee==$we){$Be=array_keys((array)$Vc[$_e]);$Xf=array_diff($Be,$Uc);$Uc=array_diff($Uc,$Be);unset($Vc[$_e]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$_e,$B)&&(!grant("REVOKE",$Xf,$B[2]," ON $B[1] FROM $we")||!grant("GRANT",$Uc,$B[2]," ON $B[1] TO $we"))){$m=true;break;}}}if(!$m&&isset($_GET["host"])){if($Ee!=$we)queries("DROP USER $Ee");elseif(!isset($_GET["grant"])){foreach($Vc
as$_e=>$Xf){if(preg_match('~^(.+)(\\(.*\\))?$~U',$_e,$B))grant("REVOKE",array_keys($Xf),$B[2]," ON $B[1] FROM $we");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(220):lang(221)),!$m);if($_b)$h->query("DROP USER $we");}}page_header((isset($_GET["host"])?lang(23).": ".h("$ha@$_GET[host]"):lang(124)),$m,array("privileges"=>array('',lang(54))));if($_POST){$K=$_POST;$Vc=$ue;}else{$K=$_GET+array("host"=>$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$De;if($De!="")$K["hashed"]=true;$Vc[(DB==""||$Vc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(22),'<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>',lang(23),'<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>',lang(24),'<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],lang(222),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(54).doc_link(array('sql'=>"grant.html#priv_level"));$r=0;foreach($Vc
as$_e=>$Uc){echo'<th>'.($_e!="*.*"?"<input name='objects[$r]' value='".h($_e)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$r]' value='*.*' size='10'>*.*");$r++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(22),"Databases"=>lang(25),"Tables"=>lang(107),"Columns"=>lang(108),"Procedures"=>lang(223),)as$ub=>$Mb){foreach((array)$_f[$ub]as$zf=>$nb){echo"<tr".odd()."><td".($Mb?">$Mb<td":" colspan='2'").' lang="en" title="'.h($nb).'">'.h($zf);$r=0;foreach($Vc
as$_e=>$Uc){$C="'grants[$r][".h(strtoupper($zf))."]'";$Y=$Uc[strtoupper($zf)];if($ub=="Server Admin"&&$_e!=(isset($Vc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(224)."<option value='0'".($Y=="0"?" selected":"").">".lang(225)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($zf=="All privileges"?" id='grants-$r-all'":($zf=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$r-all');\""))."></label>";$r++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(146),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(86),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$m){$Hd=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".(+$X)))$Hd++;}queries_redirect(ME."processlist=",lang(226,$Hd),$Hd||!$_POST["kill"]);}page_header(lang(78),$m);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$r=-1;foreach(process_list()as$r=>$K){if(!$r){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$x=>$X)echo"<th>$x".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($x),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K["Id"],0):"");foreach($K
as$x=>$X)echo"<td>".(($w=="sql"&&$x=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($w=="pgsql"&&$x=="current_query"&&$X!="<IDLE>")||($w=="oracle"&&$x=="sql_text"&&$X!="")?"<code class='jush-$w'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.lang(227).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($r+1)."/".lang(228,$h->result("SELECT @@max_connections")),"<p><input type='submit' value='".lang(229)."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$v=indexes($a);$o=fields($a);$Mc=column_foreign_keys($a);$Ae="";if($R["Oid"]){$Ae=($w=="sqlite"?"rowid":"oid");$v[]=array("type"=>"PRIMARY","columns"=>array($Ae));}parse_str($_COOKIE["adminer_import"],$xa);$Yf=array();$f=array();$Yg=null;foreach($o
as$x=>$n){$C=$b->fieldName($n);if(isset($n["privileges"]["select"])&&$C!=""){$f[$x]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($n))$Yg=$b->selectLengthProcess();}$Yf+=$n["privileges"];}list($M,$Wc)=$b->selectColumnsProcess($f,$v);$wd=count($Wc)<count($M);$Z=$b->selectSearchProcess($o,$v);$Pe=$b->selectOrderProcess($o,$v);$z=$b->selectLimitProcess();$Rc=($M?implode(", ",$M):"*".($Ae?", $Ae":"")).convert_fields($f,$o,$M)."\nFROM ".table($a);$Xc=($Wc&&$wd?"\nGROUP BY ".implode(", ",$Wc):"").($Pe?"\nORDER BY ".implode(", ",$Pe):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$yh=>$K){$Fa=convert_field($o[key($K)]);$M=array($Fa?$Fa:idf_escape(key($K)));$Z[]=where_check($yh,$o);$J=$l->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$m){$Th=$Z;if(!$_POST["all"]&&is_array($_POST["check"]))$Th[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Th=($Th?"\nWHERE ".implode(" AND ",$Th):"");$vf=$_h=null;foreach($v
as$u){if($u["type"]=="PRIMARY"){$vf=array_flip($u["columns"]);$_h=($M?$vf:array());break;}}foreach((array)$_h
as$x=>$X){if(in_array(idf_escape($x),$M))unset($_h[$x]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$_h===array())$H="SELECT $Rc$Th$Xc";else{$wh=array();foreach($_POST["check"]as$X)$wh[]="(SELECT".limit($Rc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o).$Xc,1).")";$H=implode(" UNION ALL ",$wh);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Mc)){if($_POST["save"]||$_POST["delete"]){$I=true;$ya=0;$O=array();if(!$_POST["delete"]){foreach($f
as$C=>$X){$X=process_input($o[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($_h===array()&&is_array($_POST["check"]))||$wd){$I=($_POST["delete"]?$l->delete($a,$Th):($_POST["clone"]?queries("INSERT $H$Th"):$l->update($a,$O,$Th)));$ya=$h->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Sh="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o);$I=($_POST["delete"]?$l->delete($a,$Sh,1):($_POST["clone"]?queries("INSERT".limit1($H,$Sh)):$l->update($a,$O,$Sh)));if(!$I)break;$ya+=$h->affected_rows;}}}$he=lang(230,$ya);if($_POST["clone"]&&$I&&$ya==1){$Md=last_id();if($Md)$he=lang(143," $Md");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$he,$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$m=lang(231);else{$I=true;$ya=0;foreach($_POST["val"]as$yh=>$K){$O=array();foreach($K
as$x=>$X){$x=bracket_escape($x,1);$O[idf_escape($x)]=(preg_match('~char|text~',$o[$x]["type"])||$X!=""?$b->processInput($o[$x],$X):"NULL");}$I=$l->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($yh,$o),!($wd||$_h===array())," ");if(!$I)break;$ya+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(230,$ya),$I);}}elseif(!is_string($Fc=get_file("csv_file",true)))$m=upload_error($Fc);elseif(!preg_match('~~u',$Fc))$m=lang(232);else{cookie("adminer_import","output=".urlencode($xa["output"])."&format=".urlencode($_POST["separator"]));$I=true;$kb=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Fc,$Zd);$ya=count($Zd[0]);$l->begin();$ng=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($Zd[0]as$x=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$ng]*)$ng~",$X.$ng,$ae);if(!$x&&!array_diff($ae[1],$kb)){$kb=$ae[1];$ya--;}else{$O=array();foreach($ae[1]as$r=>$hb)$O[idf_escape($kb[$r])]=($hb==""&&$o[$kb[$r]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$hb))));$L[]=$O;}}$I=(!$L||$l->insertUpdate($a,$L,$vf));if($I)$l->commit();queries_redirect(remove_from_uri("page"),lang(233,$ya),$I);$l->rollback();}}}$Kg=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(35).": $Kg",$m);$O=null;if(isset($Yf["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Mc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$O);if(!$f&&support("table"))echo"<p class='error'>".lang(234).($o?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($Z,$f,$v);$b->selectOrderPrint($Pe,$f,$v);$b->selectLimitPrint($z);$b->selectLengthPrint($Yg);$b->selectActionPrint($v);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Pc=$h->result(count_rows($a,$Z,$wd,$Wc));$E=floor(max(0,$Pc-1)/$z);}$kg=$M;if(!$kg){$kg[]="*";if($Ae)$kg[]=$Ae;}$vb=convert_fields($f,$o,$M);if($vb)$kg[]=substr($vb,2);$I=$l->select($a,$kg,$Z,$Wc,$Pe,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($w=="mssql"&&$E)$I->seek($z*$E);$hc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$w=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$Wc&&$wd&&$w=="sql")$Pc=$h->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".lang(90)."\n";else{$Oa=$b->backwardKeys($a,$Kg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Wc&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(235)."</a>");$te=array();$Tc=array();reset($M);$If=1;foreach($L[0]as$x=>$X){if($x!=$Ae){$X=$_GET["columns"][key($M)];$n=$o[$M?($X?$X["col"]:current($M)):$x];$C=($n?$b->fieldName($n,$If):($X["fun"]?"*":$x));if($C!=""){$If++;$te[$x]=$C;$e=idf_escape($x);$hd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$Mb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($hd.($Pe[0]==$e||$Pe[0]==$x||(!$Pe&&$wd&&$Wc[0]==$e)?$Mb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($hd.$Mb)."' title='".lang(41)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.lang(38).'" class="text jsonly"> =</a>';echo"</span>";}$Tc[$x]=$X["fun"];next($M);}}$Rd=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$x=>$X)$Rd[$x]=max($Rd[$x],min(40,strlen(utf8_decode($X))));}}echo($Oa?"<th>".lang(236):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Mc)as$se=>$K){$xh=unique_array($L[$se],$v);if(!$xh){$xh=array();foreach($L[$se]as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$xh[$x]=$X;}}$yh="";foreach($xh
as$x=>$X){if(($w=="sql"||$w=="pgsql")&&strlen($X)>64){$x="MD5(".(strpos($x,'(')?$x:idf_escape($x)).")";$X=md5($X);}$yh.="&".($X!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$Wc&&$M?"":"<td>".checkbox("check[]",substr($yh,1),in_array(substr($yh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($wd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$yh)."'>".lang(237)."</a>"));foreach($K
as$x=>$X){if(isset($te[$x])){$n=$o[$x];if($X!=""&&(!isset($hc[$x])||$hc[$x]!=""))$hc[$x]=(is_mail($X)?$te[$x]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$n["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($x).$yh;if(!$_&&$X!==null){foreach((array)$Mc[$x]as$p){if(count($Mc[$x])==1||end($p["source"])==$x){$_="";foreach($p["source"]as$r=>$vg)$_.=where_link($r,$p["target"][$r],$L[$se][$vg]);$_=($p["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($p["db"]),ME):ME).'select='.urlencode($p["table"]).$_;if(count($p["source"])==1)break;}}}if($x=="COUNT(*)"){$_=ME."select=".urlencode($a);$r=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$xh))$_.=where_link($r++,$W["col"],$W["val"],$W["op"]);}foreach($xh
as$Bd=>$W)$_.=where_link($r++,$Bd,$W);}$X=select_value($X,$_,$n,$Yg);$s=h("val[$yh][".bracket_escape($x)."]");$Y=$_POST["val"][$yh][bracket_escape($x)];$dc=!is_array($K[$x])&&is_utf8($X)&&$L[$se][$x]==$K[$x]&&!$Tc[$x];$Xg=preg_match('~text|lob~',$n["type"]);if(($_GET["modify"]&&$dc)||$Y!==null){$Zc=h($Y!==null?$Y:$K[$x]);echo"<td>".($Xg?"<textarea name='$s' cols='30' rows='".(substr_count($K[$x],"\n")+1)."'>$Zc</textarea>":"<input name='$s' value='$Zc' size='$Rd[$x]'>");}else{$Wd=strpos($X,"<i>...</i>");echo"<td id='$s' onclick=\"selectClick(this, event, ".($Wd?2:($Xg?1:0)).($dc?"":", '".h(lang(238))."'").");\">$X";}}}if($Oa)echo"<td>";$b->backwardKeysPrint($Oa,$L[$se]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$sc=true;if($_GET["page"]!="last"){if(!+$z)$Pc=count($L);elseif($w!="sql"||!$wd){$Pc=($wd?false:found_rows($R,$Z));if($Pc<max(1e4,2*($E+1)*$z))$Pc=reset(slow_query(count_rows($a,$Z,$wd,$Wc)));else$sc=false;}}if(+$z&&($Pc===false||$Pc>$z||$E)){echo"<p class='pages'>";$ce=($Pc===false?$E+(count($L)>=$z?2:1):floor(($Pc-1)/$z));if($w!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(239)."', '".($E+1)."'), event); return false;\">".lang(239)."</a>:",pagination(0,$E).($E>5?" ...":"");for($r=max(1,$E-4);$r<min($ce,$E+5);$r++)echo
pagination($r,$E);if($ce>0){echo($E+5<$ce?" ...":""),($sc&&$Pc!==false?pagination($ce,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ce'>".lang(240)."</a>");}echo(($Pc===false?count($L)+1:$Pc-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(241).'...\');">'.lang(242).'</a>':'');}else{echo
lang(239).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($ce>$E?pagination($E+1,$E).($ce>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Pc!==false?"(".($sc?"":"~ ").lang(126,$Pc).") ":"");$Sb=($sc?"":"~ ").$Pc;echo
checkbox("all",1,0,lang(243),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Sb' : checked); selectCount('selected2', this.checked || !checked ? '$Sb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(235),'</legend><div>
<input type="submit" value="',lang(146),'"',($_GET["modify"]?'':' title="'.lang(231).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(85),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(33),'">
<input type="submit" name="clone" value="',lang(227),'">
<input type="submit" name="delete" value="',lang(150),'"',confirm(),'>
</div></fieldset>
';}$Nc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Nc['sql']);break;}}if($Nc){print_fieldset("export",lang(118)." <span id='selected2'></span>");$Ze=$b->dumpOutput();echo($Ze?html_select("output",$Ze,$xa["output"])." ":""),html_select("format",$Nc,$xa["format"])," <input type='submit' name='export' value='".lang(118)."'>\n","</div></fieldset>\n";}echo(!$Wc&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(55),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$xa["format"],1);echo" <input type='submit' name='import' value='".lang(55)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($hc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$T'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$_g=isset($_GET["status"]);page_header($_g?lang(80):lang(79));$Lh=($_g?show_status():show_variables());if(!$Lh)echo"<p class='message'>".lang(90)."\n";else{echo"<table cellspacing='0'>\n";foreach($Lh
as$x=>$X){echo"<tr>","<th><code class='jush-".$w.($_g?"status":"set")."'>".h($x)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Hg=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$R){$s=js_escape($C);json_row("Comment-$s",nbsp($R["Comment"]));if(!is_view($R)){foreach(array("Engine","Collation")as$x)json_row("$x-$s",nbsp($R[$x]));foreach($Hg+array("Auto_increment"=>0,"Rows"=>0)as$x=>$X){if($R[$x]!=""){$X=number_format($R[$x],0,'.',lang(8));json_row("$x-$s",($x=="Rows"&&$X&&$R["Engine"]==($xg=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Hg[$x]))$Hg[$x]+=($R["Engine"]!="InnoDB"||$x!="Data_free"?$R[$x]:0);}elseif(array_key_exists($x,$R))json_row("$x-$s");}}}foreach($Hg
as$x=>$X)json_row("sum-$x",number_format($X,0,'.',lang(8)));json_row("");}elseif($_GET["script"]=="kill")$h->query("KILL ".(+$_POST["kill"]));else{foreach(count_tables($b->databases())as$k=>$X)json_row("tables-".js_escape($k),$X);json_row("");}exit;}else{$Qg=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Qg&&!$m&&!$_POST["search"]){$I=true;$he="";if($w=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$he=lang(244);}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$he=lang(245);}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$he=lang(246);}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$he=lang(247);}elseif($w!="sql"){$I=($w=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$he=lang(248);}elseif(!$_POST["tables"])$he=lang(7);elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$he.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$he,$I);}page_header(($_GET["ns"]==""?lang(25).": ".h(DB):lang(88).": ".h($_GET["ns"])),$m,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(249)."</h3>\n";$Pg=tables_list();if(!$Pg)echo"<p class='message'>".lang(7)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(250)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(38)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.lang(107),'<td>'.lang(251),'<td>'.lang(83),'<td>'.lang(252),'<td>'.lang(253),'<td>'.lang(254),'<td>'.lang(47),'<td>'.lang(255),(support("comment")?'<td>'.lang(101):''),"</thead>\n";$S=0;foreach($Pg
as$C=>$U){$Oh=($U!==null&&!preg_match('~table~i',$U));echo'<tr'.odd().'><td>'.checkbox(($Oh?"views[]":"tables[]"),$C,in_array($C,$Qg,true),"","formUncheck('check-all');"),'<th>'.(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($C).'" title="'.lang(29).'">'.h($C).'</a>':h($C));if($Oh){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(30).'">'.lang(106).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(28).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(31)),"Index_length"=>array("indexes",lang(110)),"Data_free"=>array("edit",lang(32)),"Auto_increment"=>array("auto_increment=1&create",lang(31)),"Rows"=>array("select",lang(28)),)as$x=>$_){$s=" id='$x-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$x=="Rows"||(support("indexes")&&$x!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$s title='$_[1]'>?</a>":"<span$s>?</span>"):"<td id='$x-".h($C)."'>&nbsp;");}$S++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(228,count($Pg)),"<td>".nbsp($w=="sql"?$h->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$x)echo"<td align='right' id='sum-$x'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Ih="<input type='submit' value='".lang(256)."'".on_help("'VACUUM'")."> ";$Le="<input type='submit' name='optimize' value='".lang(257)."'".on_help($w=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(85)." <span id='selected'></span></legend><div>".($w=="sqlite"?$Ih:($w=="pgsql"?$Ih.$Le:($w=="sql"?"<input type='submit' value='".lang(258)."'".on_help("'ANALYZE TABLE'")."> ".$Le."<input type='submit' name='check' value='".lang(259)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(260)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(261)."'".confirm().on_help($w=="sqlite"?"'DELETE'":"'TRUNCATE".($w=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(86)."'".confirm().on_help("'DROP TABLE'").">\n";$j=(support("scheme")?$b->schemas():$b->databases());if(count($j)!=1&&$w!="sqlite"){$k=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(262).": ",($j?html_select("target",$j,$k):'<input name="target" value="'.h($k).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(263)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(264)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")."\">\n";echo"<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(57)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(185)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(121)."</h3>\n";$cg=routines();if($cg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(163).'<td>'.lang(97).'<td>'.lang(202)."<td>&nbsp;</thead>\n";odd('');foreach($cg
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.lang(113)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(201).'</a>':'').'<a href="'.h(ME).'function=">'.lang(200)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(265)."</h3>\n";$og=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($og){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(163)."</thead>\n";odd('');foreach($og
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(207)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(13)."</h3>\n";$Gh=types();if($Gh){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(163)."</thead>\n";odd('');foreach($Gh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(211)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(122)."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(163)."<td>".lang(266)."<td>".lang(191)."<td>".lang(192)."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?lang(267)."<td>".$K["Execute at"]:lang(193)." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.lang(113).'</a>';}echo"</table>\n";$qc=$h->result("SELECT @@event_scheduler");if($qc&&$qc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($qc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(190)."</a>\n";}if($Pg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();