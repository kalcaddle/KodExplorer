<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.2.1
*/error_reporting(6135);$Jc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Jc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Gh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Gh)$$X=$Gh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃþÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ýÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒÞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Þn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1ÌŽs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŽŒFÃ©”vt2ž‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅŽÃžôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PÐ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛÐ889¤È ŽQØýŒî2#8Ð­£’˜6mú²†ðjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ð¼o(Úó¥ÉkÔ7½sàù>Œî†!ÐR\"*nSý\0@P\"Áè’(‹#[¶¥£@g¹oü­’znþ9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ðè!°üë*cì÷>ÎŽ¬E7DñLJ© 1ÊJ=ÓÚÞ1L‚û?Ðs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ð\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[ÝsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀÞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>ŽlÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´Ý¢gŒnË©¸¹TÐ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdÝÝ è2cˆê4²k¿Š£\rG•æE6_²ªÊØÞ‰b‹ž/Œ«HB%ò0ë¢>ÈÈðhoWÃnxlÖ æµƒCQ^€°ÐÔÿßñ\r„Š¾¶4lK{þZÆü:†ÐÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´‘(ëTòŸ%®µJ›0ªlØT¶`+É-Á¾@BÚáÛ„Vá’Ä\0ÂÏC¼,ì¯0tâàŒF‡‰å?Ä Ë\na@ÉŒ>‚âZEC“ôOŽ-æ›¤^Q€&ßÖù)I)®¤ÄÀR„]\r¡”9”7_ˆ¢\rÉF80µObù	€‘î>ºäý\nRý_ˆÑ8æ‚ØÙ«äov0¤bCA¸F!Ñt—–Äƒ%0”/‘zAYO(4«‹¡ˆ¨Ò	'Ÿ] Iéí8hHÂ05˜3ò@x&nˆ’|TÓ³³)`.“s6eY˜D¦z¸Œ®¥ƒJÑ“ôž.„ñ{GEb¹Ó‹¡˜‹†2Õ×{\$**ý¾@ÝCž-:zYHZIôà5F]¦²YúùCªOêAÂÚó`x'´.*9t'{ÿ(êšwP¶¾ Ñ=¢*‰†ú*üxwråÔ*c‚žÌc|„DŸ“ÚV—–\r†V.‡0âÆ™V¤dˆ?Ò€üê,EÍ`T¦É6Ûˆ-“Åì¾ÅÚŽT[Ñªz©‚.Ar±£Í€Pøºnƒc=aÔ9Fònß!ÙuáÎA©Þƒ0iPó¬”îºJ6eäT]VØ[\rXÌáaŸ–vkõ\n+EˆáÜ•*\0¶~¶Æù@g\"ÌNCI\$àÉŒƒ€êx@WÃy¼*vuDÙ\0ÞvœëŒ†V\0èV`Gç½uµE®Ö•ÂÁf“l˜h’@ï)0@šT•°7‹íÛÂ§RAÊÙ·ò´3Û˜Ð«/QÇ]ª,sÖ{VRž±¡ŽöF«¡A˜„<¨v×¥î´%@9‚ÀF¢Õ5t‰%Ö+º/¢8;¾WÑäÚÇJïÐo:ÖNÿ`ø	•ÿš´hìÁ{Ü£•î ËÔ8ÔEuª&°W|É†„‰®Uú&\r\"ÔÁ»‰|-uÇ†…Në¶:nc²©fV­‹ÂÃè#U20å>\"®²Ç>Ì`œk]î-¯ÇxùSØÍ‡Ð¢©‰‚êcâ¡óB’—}Ø&`ˆîr+E­“\$œyNýŒ±b,†´´Wx þ-9åÕrÓ,’ü`å+œïíËŠù’CœÓ)˜˜7Ûx\r¬þWµfMŒSR¼\\èz¦ÙQ²Ì“”uA¬ºê2Ž±õ4îL&ËHi Âµ°²¹S\$)e³“æg rÈŒ©ƒ\$]ZëiYs¤õ×kW–n>µ7E1k8ÐdÃró®škÁý¢ëEÞÙÛwÂwcmŽTy¹•ë¿a›\$tx\rB´÷=Šö¢*”<Èƒ l¡fôKœ‘N/¶¼	ÃlÕáükH“õ8 .‘‘ù?f÷›Úÿã6†Ñ‡¼{gi/\"à@–K›ñ@2ãça|#,Z¤±‡	³ñwˆd¬™“²…¼å6w™^&Áêt™çœP±…¥Äù]À¼›.àãÚí¡TìîkroÀ‰÷\ro=—%æ×h`:\0á±‚ö«”|êŠ£«a“Ô®6*:ÍÓ*‡ÊrO-^–’ñén«Íó§MÆ}æ»÷ÆAya±Ý\nƒu^ì–ÀrnO\r±»¡`þT~</ð¶wÄyþ}æ:›|£ÏÐûÖÌ¡6»¤×ø®Ÿvî\rc<·b#ûàô§†î–\$ùsµê|ç‡‡V)«h‹TCùñ(Ä½ñ£Ì]6¦Þ1´!1M±¸@a´/`Û>Ù¸üß£ðÕßÈÛC/ì6à´·#p@pá‘óÿ`Zÿôýchý°\0ïë\0oæ€ð4OýOøi\0-\n«îÿ/ý\0£Dð.ÿ ¾ˆ.“Ä\0fiŒÀÈ«£€˜\0Œ”IDüç\0§¬\rïý0f ßoãÿ€ÊGüˆðeJ|\r€¿ýl	¨3ê~ðiP›¦&“É¿/µ\09	^\0r•0]¯õ ¾Â›oõŽ.ý\"	°ÐÑM¥íðvÿP€ZÐÕmpËP°ùÚœÐÞ¹ïô{§†C?²ÀkŽ“Ï¼}ð®þdöïÊ°~=‘.Ô- é	Ðm1>hûÏÛÐ•1;QI‘OPÈ\rºcßpApV«k\rQ*èQ}ÏçŸq>˜Ðu15BqQ[1fûñl«Â€apå¯ü\0Û‘*ŒJ©Q=ñÃ£Ù‘GÜäŠÕÁ±Ÿ±_ñ—ñbŒGHF.‚0Ôø	= 2P™Àó æòÏçP!ò#(3 \nÙ!1&72fª`Â/å\0°‡\"PÁUõ\$ñ\r0Ìð,QrU&2fšÒ_²Xààò]ð9\"’S'òƒ'²yð8\r¨ú§òkW)Oõ)’*Ra%ã\\i—%ò‰&Ò³+r…’3ðS`…,ñvý¦&2×L–&Pu*›-ð˜0\"Á%HÄ¬ÔžïÏ@Ø“±°H‰B–P(ÃÉ\$p&ý,1MÂ ªØ­Ã®;\rnÁ.¯Ê I­.Õ',1ò)Ó4ý²å2°u+ó3æ `ÈSŽŠpL\nt§’_*²S3;6r'h35¤55äœ‹d2q+6ñ8‘O7sC\"pm8Ò­³“6³—9òm\n@e0É<8B8©<,( ¨8²Û\0è	Ó0šJÙ<@¦ÐI¤«ÀR6pÔ­mGË\"11¤6ËÐ.\"æÀ‚ï5Ì‚ûÇ:àÜ8bêA1±;ƒ';Â?<*\$È,³Ìo= òTÓÖ/3Û#«ºÒ†¬");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIìÒf‰›\$±At^ sG²Étf6eŒ§yŒÊ()LäSÁÀP'…ÂáÌR'Ífq]\"˜s>	)â‘`œH2ŠEq9ˆÊ?ˆ*)‰”t'°ŽÏ§Ø\n	\ræs<ŒPi2INÆ*(=2ÌgXá¸è.3™N„Y4èB<’L—üîi©Ì¥2Ý´z=š0HøžÐ'·êŒšÃuÆtt:œÂ¡Èêe¹]`pX9ŒÞo5šgòóIœÜ,2O4ãÞÑ…MÆS¸(ˆa…Š#¾Äàç’ïø|¹G‚bèôüxœ^Z[Çä™G¼ÎuTvª(Òm@Vò¸(†¼ÈbN<ŠÈ`æâXä1É+Œä9J8Â2\r£K¶9ðhå	 Áè`…‹ÆëI8ä›±S±ãt÷2ƒ+,£ÆIºã £pæ9aèØÅ< \\8Czôã\rŠ¨^ŽòÈ]Ä1\\7ŽC8_Ep^ÂÐÀéM1Àw\"'4fŽSX9ES|ä›…Ãk3ÄB@ÊæXa=No4t7ƒdD3µpÞÑàæ:)\\;° ÐÔð\r)8HÔÅ44Pc=\nÔ!pdÇÕQN\rÌHï'ô¸š2¢#\"Õ¥m-¶b,Ç	ƒM.¡‰-IKÓ)ÀÉe'Ž•\"ƒ´¤>2XÑÅ“eÄj:9^²1c„»ÈŽ:YÉ@ËuËã“›4òXÇ& Ò|£)Ñ’´±-K‘xŒëªÂSðè1Óó\$â¡@\\…!x]\0Œ£ÕÎÀÂñ¤áF†COÄ:à1K‡Å*†F4aˆ»¼k˜úÈKÏš¾‘»ö2l¬pÌ3J<Èâ,2Øà8#ã †Õ\rŒÜášÜî ó¤h¬„·áF±ŒÝ‰2PëèŒŠl(È\$Ö°\nJÛ·-ÞÊÇ°cc~¹FžÔîrøátbÞû½m{hð.‡{ƒtkÛBµKc£z4ŒCª9…Û«~>ƒØúÈÚ`Æ“¹C Âs:âÝÔ!cÅÙ®Úµ”*WÉHX:WÌ;Nà ¨j*Ž/(á_p3ª¡HIãKlÉn!trã£Gã­º¤tCƒ	vƒ?mã¤£¾ Ÿ¢–\0CÙö¨§oÜ¥cbf6Iþû'\ríbåÅ7h§`‚È9½iìd5’—taMè={É©ð»`NoK‰	!d4ÐƒzWXdmH°š*€ÆÛS ]ÏÐ3&\0Ú°	d%A´-²…	Âì(„šÙùQÐ}ø‚èU!t7°ä‹†˜>x‹‘t{mY¹„0Þ@^±€\"Ñ=‡³Î@t\r¡°ÎÄ+Y§.¼·¼X¿\n«I'KTŸ€^(ìD.@öÜø++@¼3•ÒÔX‹	aEì!,Yéö2-432ÔŒõMOàÖI\$q%	Ä‹G¦X9™‡Â[R\0nÁÐ¸Â PŒJy\r òBÈp\\HÃpgSÉ¼±Faejk—.4¸†C.^ yi‘ˆ9‡PÄˆe\"Î”NYŽ¬¢BHÃ#8ÑB1\"¶j\\Ú©x‡ð#¾â@G 9†2¨Âf.ÐŒpsršTJ xÚk˜–È4KIlÈfù8z¤¥KÈ‡>AKñŸ¡n^’Ø=&ŒƒAÀ*?'³^%;ðî4Ü€³†Œ9¤Q’“hâN‡™>MÊ=['ŽvHIÝJ§‘ž“ÙvÆâ’RÊtƒó<Ÿ”Ò²Å^¢¼zÔÂ‰B^öhâ'µ‚É©Ð)-'#”¤9JTÁ)Ø@jO!¨Úc,e˜j–¤–‡@H,‰ÂØjˆa™©vžZŒ>­¡Ò·µ)E`\0\n‡áTPó8L<‰c•:F˜æ‰\$\nƒííœ†ÃÏCHm\"j‹y·AÛS¶ ÜSªžQ„ðœÎÎ{T']WªUÚ)_L¥˜i¬mˆOš‚¥è„þÔP:g¡{¸’ZÄ—ø.ÿ{”¨‡Dh\n»ÑÁ‡a­\r]9¥tÜà!XA½[È°¦ã—Cœ»×\n:•”haœÎÚå\"Ý¢a2Lmƒ·Í\\	ûëp5÷@ú«@m£ì|Wö•ÀÂ%È|u®áÈ+hKÃL&¢Ï Þ3ü.XWÜÙººÈñ*qƒÛcÃé‡%.K¿“€ÈA\r“xh¹â¨I\\ë¨d®Hžº5\nÈq%Ôv*ÏãérIaÈ0Ê\"]8k,ÝÄAõŒ{Bç\\K/p<aëŸˆ1–0%–o2 ÏÃ™ªÁÐ%†Pò°@!ÊÔiµ9Ìçf1Ôù4ùŒ›àapØŽw¡`ÿAX¼upÁÑ½7ò\\Lº¡Ÿ°t¿„VÓÆ“a\$äžWÒæèâãŸè:¹Èˆe}\rjC•X—º]ÚúÁ=m”¶•8Ëº\$ž‹þŽ·hÓ=¿K75±™RŽƒP°{rrŒ—,Ö_ëMzç%É§IZ—:ig”y%Hì5á½‚¤4QÀfØ¦ÇP÷¡lûþ›hƒÅx³âê…‹vùX&¦\$sE¯úã0’äüé5•°íílW¤dÀ.DHŒ\$@š\r@&\rÁˆ9‡\0v¥7!çÈoÓ…ÎÃÁîÿ‰5áî)#XÈi]Îržo¹~ÆËéwPêÂ›”QÛ=òàçqCíÇç×)«=ã#—@h'A˜tb;™Û0YDh'Žœ\nVW}(2†`VÄzv% tä\rÕ•ðe¨¸·—ì¾p.ë›ô¸“6H9¡=;n¡8C=¾	þù÷ýq€@a+¸Š†kÖ0aKá˜3Ep™×C +òA¿ÊEp®§C@>òX±ûâï'åL—ŸŠ{µƒXz´ÐoDÁ™%‡sP–W:[=ßv0’?ÞÜ·,%žÀœ{\"í.á¨.YIôBðÜÂ	³\nWpVÂ)µ¾µqÉA£ÇM»V¼å5Ÿ÷IÿÙÇPýšÎ¿ËŽ¾ßè‰Á(ûb.¶\$ÇÕýò[ÒšÍjëÀ@¯êh\nF-4í8nj¬Õ+VMàxnj¾¦mb\$° ¨¬õª\n¶ÈÖ'¢~à¶ Z@º€¶Ž Vâº€L\"ã†p†Ø5€ðO,¨\0K¹\0Šžª-6¥\r:”pÕDbÕnÕÐ\$¶mm\$i	)þO6(ÛÐAPIÐP+ÐVHpn¨§4?BàMð¶·ãJF¾.öô€èá0Ðá+Ôi…jÇ Pþ«(¯&æ»ãaŒÚ%l]'Üïì^@(œ5ƒN fsŽ Ñcô bz ÃÏå>ïÂ¯x²°\0k éÄ\r<aŽXÌGé¨{\roL­ŒxÇ&Ï†Õ\$ŽHjÄ¨1€Ü	¨ž<çl-Œú³\rËGKOÑ0•q+c	Pñj\r¤Ì¶ç­j‹‰Á‡½¯bdñ¢6¢Ç\0Ês‚à¢ŽñfÁ Ð¶±z½Äj>«¤Jž°âŽýH®±'ââ3ê…(F¦Ñ‚ß¤Ðzª`O q¥ËX’`¶r\r ì1,ŸÏ¿gk lv­Ì|+°òækfì'ò=R@®4ë6Û`Ê-º.i~4ò#Å<\$²RÇ|u2N;Bn<’-#ì{%ˆˆû‰b=âå#Ìï(ÈJ1b%g¸¼ãz‹ü‹èG2«1^8wòòb^%/œ ï¾G­*ç 7D\0^‘rºc„Žp\n’ÎL,€ó0÷+ Xr§\$ Ê8ð„×-)+(D‚ÓÀÔæàÐ\n„Á’b¬“©s1ìÓ2G\\{àÂ.I~`‡*³Îl]±“NÍÑ± X.#%\$KÀÁS'3ÌÓÌ6ƒ\$Cr‰C0Bô\rÓ--H|†“ˆ È†È,ž\"Ž57Ó’´©Š˜îTÉó¥)în‰ŽÄíÄ¸íÃ/2÷LÄa7Ï2Kã1/d\"ÿ4SHïòæÍÔÍŒÜò¤Â1óª™\0O6R8|S|+©rÁÓ²œÓÐà¾\$O\re(Šà¨\r\"8‰ç­ÓŽ‘s¦\r§©2ðÊ‘!*òmNTQòü»ø]jk+15ÓR hæ1óQ€z`pò¨R­E-SÒÒS\r1@vo.tÔTUFqEâÐ;g\\ç\"DQã`ä æ±sIÎv`¯þ0ó¥	+K€ÊpTŠ–)|„làñ¿ç8%'çLŸLJ@\r&+¨ òÔƒ²X“äÀÊå&åt¶á\\*'4ÇåNÆ£O\0·OTùDb\r1’ÕPL\0œ² ÉóºgMÄÌÅàÍ\"O>ÌÞÀC<tJôNº-:<àä™\"V]`¦/BŒðÕ*Ü§÷-£w<1f›MØüò’q±8œ-¢o¨~pKÀ×d‹	ð¢Îñ\nñð,4ÇWFÁ\$Æºnl\0Ù­ˆLš\n‰…®m®¸)Z€ÏZÉ†˜õ¦^@Î	 Â.Õíj×Dý]K`ž ú˜t\r¯Œ'\$^S'àO]éæSÐ´Ø“ô5ã ¤b%»\\ÕÀ\$‚L×Vau«Zï×U½]àÕà|EM†™•ß]ié]µÊ9¶1d	f.eP\r€à!Ås)Uj ñ¶W)\"ü&BSÅ•'Ã~Âvps	_'_fŒuT5G0þ5r<vzlàéhôrÕù¤YiqMD¸ýUqf¯Ôœ/êØä–;oó\rýTä¿ïþ—`{\0rªÓ”\n¥‹U!ÐÕµÿ\"iï(‡£PãÄv¶ÈÒ¢Ìi0Úi°áOÜúòŽý¾²±// Â\rUÒr\"¥îQ Å\n\0Ö:ÀñEÆnÓk€Ê#~Ræ\"»en‹ èƒtJ„ã¶;·P	—Uu—Ctg¬ tLÀ‚8d\0ž@Ôl`w×~ —ƒxwŠ bŽ	¨ŒJ æóƒvn\n€ , u;Ê×uuÅ.ð V<o&|1ö×ÆQ|e/|ÀæHbQs·>w]7Ê70ã äãî ò!\"Ë4\0zWè2 DÆ\\W—<2\"ª€_ xwï|‡qJŒ&Âe‚·òæø24\"qX:d6ˆø+¢âã-Íƒ˜/ƒÑÈëâÓ„£[V7À1àß\rÇcÂÐ\n\0ž\n`©J Ž¸~+—'1f<m÷n¨V™u·pPD>!‚Ž‰ÃG\0[a§™\r¨vî\0^\0ZK î¨~·&#ãŒ5€É…7¿w—‰%/‰Äî(à°¸˜¨FÔ¯?`»zÇ%vØjyøj‡\$w/—Þ!fqT,¶˜Ó‰Y7óI*jà¼F,ŸyRåK~r Ùrè’§_…Wí|x;`ÜáŽâãƒnnù<'%xåÑ€³8‚ß€ í€b_€¢J å\" óh`Ev\\€Ëø#\"Ø<xY~>4Ù›ƒÉ–Ù„xdLÈûîFq9TlåjV#q-Ù=qÙD2MÞ‹˜ŠÆud+rTtgÁ“ÉÂcÂfn¢Žx¹^@™d<ùjy20±F\"ˆïÄ‹´‹‘sGpq¢h“*F­‚ Œ„Ïª„ÀY€â;9sŒ³™ìg½Ä\n‡ëL“QIS!ó¡'ìÞ‡ç#LÌ×Ân}BXZw<,Í¬d9 ­‚F€^\r1¨zõ®òYÙÙœcw;Ó@ly BªÂÀð„fZ`Þ“úå@ù§‚I§Ú€Ÿl!¨qÈìñ¬#O£’usdŸ2ÉŒ Ê\n ¤	(œ\r¹dGF ª@ØÈÅÚÝ®\0ß®E°1ÓßN3ø¼ÂtëÁYÇÐ%@u¨§U{¦mžÆ=1ÀÞDBŽÍ>a&ÄÉÍ\nÐ×\0Bî|š¨:I+àÐ,³7'š8À¸à\\P®,\"ª-scÉsv÷œG£÷'žWžš\$=}Ø[~ YŸycYi2sw³4\rKº.äP…U@èçœ\nAi2×Ù‚¹Y~'AmqˆÓšØ,4<šús˜sòò‰¬œ€È#Ì@Á`Xã\rÍ²³“Ñ1E=G4vG\0RÚ‚Ï×'’Y@7:Á¼Á@fPÁÌÊV{÷¿«Ž!\"zÛô7M²o[ÄD!*–ÇWùÊ2j—2g8ñ¦Ÿ|L\$DÖiG}ìGRb!rî‚Ó&-3Ô£mõÈ™‚\r0÷qh1Ki,|ÈeÖ·zê—HôYF€dúiS3ë<ºc’ÊÍÇÕÀ“c£.nÀäiBx-r”v•ÅYJãÙN¼j!(“HfçÙîc„g) žó£%ÏCo[é(‘X‚G9ÐìŠB1ÝÎDG–¼•eL'8õe?]<O·#ÐèŠGTõ€b€XQ * àÃ\rpÁv¸»„\n<õ\$ûY\n:™±¸šmý`è@×Oë\0îUæ%ô5\0¸ `\0‚E}#M3!‹!GœtêwR¦BÞÙV¼“³œþûÝ¹¦ÀIÜx=À¤þCÇÜ\"q^Ä\n€ÞåE-eáÔ#ìcì€²ÿýØVÒý;fX²<=Öý\0dO¯Þï–¼àò“á(®¥kÞ[\0þ(žV¤YÝƒÇÏþ¨']¥‚åÐüWÎ°¿Ð÷\rì}Íç,<h¯f@¦˜É	¬PŠ†3©;R£Õ¼\\ e‰‘×ÆÞ]äéb«²ÀW¯#Y¯zã®{äÃ®åÍžyT¦»”â»™–¼ÑgCõëyû¹§]Òµ„?^©¢3@×Võ¾ÌÏ^Ò˜æ8—ËTèW>Íîb\rã>î]·»¬ÑÛÚ:þ—Ü~ôî=Î!}Ói'à]Ü¾2(ù\nFgª X©ºXn}â#Ü—œšñÒn`˜\rä?tñ XQÉ‘õLZny<îT\$cöá\\ç¹OÐ€îjîx)öÙLä–Cå×æ\$¯%^µï_')jŽîgŸèyÞî}tå{…<óÇÇ]ôG||©êS<bâ“ÇøèäÅë³&<Ÿ}Qè´÷Ø¥Wiw	å¿Ä ó1ë/Š\r%„1¥€xúÃ•? ÿˆi=3ò„‡…É`ëözI×Nêu×Z¡EÍ>~¨…´?ÇÎ¤n²ûïÞNr\0‚Ð\$oj7Z&Ž ª¶¹9S	tU`¢tc¸*¦Œ7s\rÅ|wç›•ÊNú<pO€Ø\"c˜©a¾7ËÐ\0€8<Í:ÄXy»vÐ& ’”µ Fnh\"ÃÉF €°npXºnDwÏ–qmhvIÚR„@­Á‹r%ZÝâSFƒ¼Éæ‡*y°ª›®(Q¶åÅP(\nFlú1èA&pLƒ³Î ò|e¹<íW¡‚ü¬—á’eBƒÙ0F˜`m‹u°¹\nëÏXK–Š¥A™‚Å\\ÂºœËäNj}ïa@#d¨¢úf&\0ˆuÓå„*	DÈ ²Ñ“Çä(!	x×¡ÓÂä”ƒ·‚\$+Q5\n§5„o0³8\$-¡pX]B¢Ê…ü á‚A8bFÐK†D5ÂÂ˜#CVã9†Â'a´oÐÑ·E–©žˆüÓ™yˆíÄ†%0ZHÞh3»Q7'FI+Š·X88àrË\"\$9­Õ¤LÅ†¢‰ÿTóÜ.à=\"ÀB‰.NFŽ˜LÂ”}Íœ @‘È¦¡,‰·…”èñfœlX‚ÜX·â`j˜’\$ÇŽ‰@Cp©ašÀ.%ƒ’B€!4=`„*9|IâSâ¼¼ðåŠPT(}Sðö*C5oZ^Oî¶°½Ï\0ùþ\"Ân˜Bpt‚h¡BRôn=\"€2OýŸJ!òSŒ±££!n‚d¦™\0–¿p _9ØÄ\n”ô\0‰AapÀD= Ã€ˆRGKeèC\0D+(¼ˆœ8Q[ŒÀòÐ@7QraÔ€×ˆØÑ(éïÁ(OÑç\0`548ÍÀ]0š&KƒFÁÎËÄGˆFÂ7 ]ÜlZ[°D1@\\xC¦6!^9@cyÒÄü&`¨\r0‘ÈmttÀçÁ6†::Aô˜ã³¢kÅò¨9nˆ²cFê%@/@mŒ ˆ£\r„ÈGº0Árn j¡\nÝ†íÕ.b‡ÓÎ+â£ÈÞïív‰T•øä7	D\r…]CÉ&[@”Ü) )nˆa&[ã–é†~sØï©!˜¦0äþLZ”Ð)¨AÁÔ\rw¤!Ç­\"ã‘À–*\$&?!õÚ.B°n\nHCH{I\"!qªý	A2J8Ž=%\"ç½OÐ^q;Ù¦Å<+ €ó%³€™ÁfrdÔ¢=àˆÉ`Lg¨½ÆŽÕ‡Hè{‚K\0€ˆ/#¾’O1O9R–ú>)=\$Z'Ë€	a!#UºÈ•e^iaÚâ0‰-´à°‹ŽÊ€Ë!ñëJDÏ`fd0ˆ)R¯H+¬×d¤I ´¢´6Afv’Û“x°TÃ{•™Cæ 1&GOº  \\¥EóŽxË(š•ê.nP\"(™02•ì®‡äædö„¢W²¿=Â.@¶gÀŽG['µ¥¦©jœÞZí2–Ì=žÝ'!«K5f‰)¬³R«¥(r1j\rX1i5Â\$”´ª	ŒÄ»”t,	oË\0p2Ø,m%¶uÙnõoS—ÀåÉ0PòJú\\6˜sÙãˆp)„jÄL?ûÖ²~’„9d<BùU¤AÄ¡BšP„H~ÈYÐ{-ÒE€Ó¸lCuÒ˜™¢ŒûÄ·*Ñ¡…™‘”\$r§°>é\rš-,@%ZŒfÂüâQY‘‰•,û¤pˆXRCiJ!3#Y nc|@	­Ìþ(É²\"q±\nÌÿÆ_)1â˜!8 •\0¸Ñ‹`cC}(®_2 8M¥Y£ª‘ù^3.…U†à]!ÿÆë4ÉÃ€a“ˆ\n¨Ýg·‘ÕàJ‘ …¨€KÐ‹`9™Á³àLHÀŠÀ)ˆ X„Ïná00ÜŒS¤4EêP`Â+à¨	I4YÁFåXIÀØ9Áº„–h³WI JE9!†k#H]fï7<fm(´Qž<@0Øà|&›¤'Ê@4Ø väÔÈž\0/‡ Aàâ»çê\"&«0yS<¡€'Ý5UZÂqé%œ\"¯ç3 ª‰Rré‹žIp…:\0-‰PXT¬ùÃ\\\0NYÄI2\0£&ná;2g“|™û“ç9ÁÃN}ANžPæ¬«\0>¤Á&T	DÿÀáÈ5†sb\",íèVSPÐž‡“2í‘€`	åÐÀ.eÇ@\\€RDƒw4\$(â’¢ ‹'b²2\0œ\$‚‡ØBf7°€¹ã¥Ü\"q%†WÖ@\0‚`E]BJ°SÅŠxo\r8Bªð¨Šy(Ø\nèôÉÇÑôS¸”î‘ =@7UþA\r€{èü\$bc\n\\Õ\".h^\0`\"Ì^ãLôð\0@9†¸W\0RŽ•O­Ú`e˜ùþ®N=©ìô8 ogv3ƒý–Ùn -¹ÿÖCùF•Åq!üB¨p-§êq‡ÿa¹£Óô7áÀMb'€sî§K'·MqÎÃH›ÀZÐ“†mòž \$1IìOj™³5lkg¦þmzi‡•6A§§\\£@d,\n@Ó®‚4ñtæiJ‹\0®”l(<žƒP‰ÄeVAr¡’Lä*´„aáìáÀeQ\"ð@´É)àûÂÍÈEÀQõÕ@yR%eJ\"4%[ Y©ºV\"[©3.+J²éŽ=œ\0À |£LÑè×FÒ.\rÖ¤G„êzL€†Q°´nª8j‡=á\nÓð!sÀ0ÝTƒôÔ4äf@ª±Y®ú\0…ŽFÇª±Cj¾´…šÅ@{”©yô@È}0;€¡£ƒ8……8§¡)0 š‰à\\u^€N‘4qìçÿAœáåb:‹tâÛ‚ui%<ù7n¢í,]Õcªt>ék²«å“Š¶VË†þ¯\0ŠøOò¸iÈ­m(9štÊÛ‰ÊÐ…æA\0­fT•~\$Ž¥S]”\\…dŽ[9€ÊgÁ2‘\rpØB¶Ö x\0-È§‚ˆ”6¶eEA€á“1\"ºêã†y,‚+V]Ù”­²iñ™mt¤W[Bî<&µµ¸™`å«bmàÊÀqÚH|ˆfÀSZâÉ-?gËÐÄDãÀËOÄQƒ¯‰AVôŠóÎ¸E¿3ÅÌQ`T&×AÆ©\0\n%a\\ÊçS •ÑiÒ	'b®hHŸ^|}µO!Ì.ÉžWæÂ!\$LµyÐ¸:¦Ý»µÀ[:HD\0¿˜v•\0Ÿv*¬‹l{µ(.uÅ•ŠâR’äÃ•„¬Ztªm+lˆÑLY<‡+1œ!Ñ0€5/>ÙTÁ—:è˜Z6ä åIˆSÓóÇ¯Õ ?L‡«a,l›.¸=Ÿµ[±3tÕl¬öh­…Ê²Ì0XâhÈFâ§‚xPF³hÂ‚øú¸Vu0aÏ,ØŒÕ9\n`†n°TÅ¬«ëb7lÈ\$œM9Æ+Ldl®®6Y€5+Zµ°Ör®eþIñ	šqP‡äZáÛ¥ †ï40Ya­»¥E’Å°Û'5³pªùm«K`ÞØ¢|¥Ø\r©|âê\$œ‚ÍC­ÙKê¾ÒBx’¾åœRÕµÉÍm’tÄ8„ogIu1À¶·ZeÐ˜¦Ï“àœO%éýµ×MC™»Sƒ	nÛw¿Ý§ÍAutì\$2{ð6µX2Vñ'Ý¼á/o[€\\]–û±ÛsŠ0«!”É%}xÜY7+Ü?aîåI‚[”#UÙ÷\0çc{Î2f÷*FÀàÚ2}Ó\0ýöÓb†m@ÌzdXà!TË”áMd&˜Û’I·8 ˆ£.‹tJd/ì©\0XÙû{ÉÂ¸Iî		K~¹^ä7C¹ @D&áµ]&SÐá•ÓCVÛ§Èd¦öšyDÝæÕ—áÂ41\$Æ	‰‡F'à•\\2ëºÔÃîEt@ƒ}fAå»8.˜iK§6~å‹ïk•OÝrËÝòÆW['ÍÉ/FÉL`×J”ü8®ÍEðÚÝ¦”vü¼VR²±%¢ê’¡´*É€ÑJÓ^rì„cH€È7töÆ:Ñn³7µÔmðx]è·ÑéÁÉ&ze)Ì5JÂtA®—›Ö«Æ)ÛZÛ‰£K%/âßàneÂ®¯|6ÃÎÐ÷É˜¥òÉc|Ô–\\>Û–K~Ô‚Û¾oÍ€žà\0-¥Mli®··R¥ìd…B«|!ëO\$ó·¶=\$ÀY;z]½¤Ìa8p!ÐT\0.\r>(2—8¹±þi,’ÊX»W4ØZ¶²8¤­hë%Š”Z6¯ÁjDs³ÝßêÏ2èÅôM_\n´àÒ¤œ6¿Õ–RT”Q¨ÓYÅú¦Íþ,`Fà/S\"Ó`nœHW¦y€!º€ê2à\"\\íê\0ë‚=6Ï6—Bˆ	ð)\\-³UµÎ¹Œ¸Wp ¼)à}q!¥¬p\\ì\nRÿXlµ€µ°J-ƒŒ#¥ Sm=\\K†E1»#H©2	_Mmƒ.Hð£Ò¥Œïo&!›Îƒå9ÛV¾¢'¶Ýìˆ+*U_¾¶ô«)L›.‹ˆ&JŽì÷¡	pêÔ5kB¼Ø5ë†T,Mš\"7Q¡\"ëëúÒî\$aEŠ7):Å¢úñr…„…·:*.5|=áôúª–aë¦6‚À„8˜½€JŽZLivBx€‚æ òtŒ>¡øm¤Y9NÞ²ú\"4UŒbŠô,Çpº1·wP>¬ÛA–:n—WqâøhªRÆÆ;ÀZÿ\0®§b,=C‰p’\0îôë,½R^rk7ŸÈÆGô>MiVÂiÁ)ÍÝh9Áú+2J“Õ½!~³†4°èV4ç–®âl…²=áÓeàæº­Ö‰¾­,¬Õd‚òË#‡öZýi¢ÃYÅ¿äŠiH®þ#¢[™¨âJkÈ¶Ú­É•kKaˆóx\nèPT‚Ù²”ºµc8r~õ9d·O,Àâá DA^dìú™=?ÞOìï”5¯E˜5Oß²ÑjÅîç)‹j¯#Ò[ªúeM”Ý¾Vi˜åaáq¹pŽú	Kˆ…t ²-9‹®Ê+ªÄ‹²Ì™ØYN¯¿˜˜6Ä\ròH[Å¹™K:€fQ\n¹—AJ]Û»eo™ ËñõòÒ¸—?Ë-”ÂËr:s)1ú¥lŠS+dFí†z×Î3µ²<k^6\0ØAeõîƒ8f²ifôj*r“fi&V>L©®zu¿'º3ÐI5™ëµk5Æ‘#¡la|@ŸçÌ—´lhÉò9‚C¦æ‹‘Í,•K,¬×&ní±B¸UzeÓø7ä\n:X@ð¼ÿ¶I²Š\n¥<+‡\r—Ùç&˜mõÎf… £—[ŠdÖ++A¯3‘Dm7BµÑDÆ`‘9EÄh—(NÌ“kˆ†Û ®è:™U)1€àëµ™üçÄ'ùøžØ\nL& \$8€EÀ…¤lÏDiêÁ¦hq%\"ôNcïI@íšŒŸ6|Peæ,{¾Â ý”¼Å›ˆÙæ¯fuÂÐ\"f(lŒ-œØÐ\\ºËP5ÇÊÔÝóf‚|ÚækP\nÁËh(º¶„péÓ™Û&Nzb\r3ö*ðÖˆL{zÍu ›LeoPù˜Í²ÅV­z\nµ<Âã|ÍÄN1–lÞ‹)9åÉz*‹j#øh¦­)y˜_!‡g•¨ut!^ÈMyÁ\rj€¤4xÀºçêÒž´šÌ¢¹ƒ\"U]	X°j¿>µC›­r:§”w\n„öæ×­Å‰t`¥¤%!‚ÄCø£ë´zÈ\0^ŸJxaÒ4Éø–†.·…cÏX€mŠ<m@ª\0\"\n€E\0ÀŒÂ”óŸp–`hÎ=ÊM\n OÒÆ/d²ú¢‚Ú(¨¾ãú\"vF†Å‹Á¬È…+&Ä‡æ´¢%ßlq2K €èys5€îÖ[2pŽ\0³Aú3	B7Æy»H3±´\\ˆøøÂê¯ÆÄŒ'0umœ\"âïQ‹î‚Ff±ˆ‹¼4Êw¸b6ñ>éU›Y¶Öö|×ûí€\r²¼HÉRö%©#N\$0ÿø0.øšæ·:Þ2ãO™í“Aºù&\0ž2‚	óy<‘g€d¼(öÂAÒãÊÔˆ•¯áh:[Âß¸æÚnD ¡€¥¥cÀi˜ÝÀ91fSà÷4D8„Ž±E*Ý.éÇ¨û9‚€ëtÛˆ€Âv„ž¦í©CÍ2©æ\0bÙG š;®Üå@\0¼t°Zx£ÌÆ¢¶‘’¢©xÂixJ—‚Kµp:nýÓ€hëe-’t¹Ä\0·{\0)”vë­]½%nø*¢±Jß±2—|Ã+ónUòÁP¦2)íào`;ëj@F½‡€oo{¢é¶Nö\0[¾™o‘Ö[Ôß¨N7ÑÀ\rþ\nS•ëÔžüì‹jíûŠ|G˜—\\®g!mÔ €d(™g0a~×öbkãEÞ!Ž·Œîo&z›ËÂÈWN–Àfj—Ì7Ýú«½‚îÜÒ[¹Û\nyØnðp3ˆNð¹~ØwŸ¾â!ïI#\0vÞ®›–ªÎ­¤ëµòÈ>Ñ0a·pYñCÎ\0{À „IU€1âèƒÁà>ñ|ç˜4	æ\0W¿¢@o³ŽQÛ\0„ºAnßˆüyßèöè.ÇhFPÛö±½Ž\nx<\r¤Dàx}.BàÓhÛÇ\0Ê³!uBŽE´ä6Ÿ1¨ª¥žûUÝ`®i“¶ü“¥9Á”Äå™Ž†=Kmiß{?ÛHˆ½Ë­žíwkâ>G)v¡-Ù¥Zó:m¡ç+C¨sðÔQàh\n¨[ÀWÀ)ª3™ÑÃ¯\n‘ì´H\0¿›îË\n©†9®\rîsd3|Ûh|â9½Îpó,¤ä^šÞõ¿£Ws´¶¤¦Õ£íÂŒC/³c\">AaNÝhÒ0½	©¦€{8š”ˆBÈ‡„@0!tOÀ-\n„¯^¬°9€°j•¸Â/Nô7D˜\"€pHs¬½±q«^Ÿ“ÇÆ5NÇË¢ß	Ÿù¿É—p½ÙçWo¥yYrÁç‹Ó4ÎŠôý-Œš9SXÅž&À'CuÄaz~€d\nþ7§éßÈûˆ?¦?±mnËvîKÒ¶ˆkòW§Çm+b ¦a9‹©À…\\Ñô/º~Ë¸Ý¸—|‰t¯’›c«“ý±p%Fñ0}pz«\0Z5àÀœé=‚â žqtÆöTU\"…¨€uÕîÍ<à .ªugW¹&¾Â¿ê“]ˆfÎ3ØÂ×™¯±ý9?h6m‹ÝöØõ\0tÅf‘Ä,]€½è\$€u^«ÑÓÓ-¤Å_¦ÄUê GÄóÔ¾—ð%&éë™õi(ªÅ]æ0îkGr'z•—ÝÕ\$î?PûÀ~µKq\\*_gW2tè´È");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌÐ==˜ÎFS	ÐÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xð¸?Ä'ƒi°SANN‘ùðxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\nŽ?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYŽÌèy6GFmYŽ8o7\n\r³0¤÷\0DbcÓ!¾Q7Ð¨d8‹Áì~‘¬N)ùEÐ³`ôNsßð`ÆS)ÐOé—·ç/º<xÆ9Žo»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿŽŽpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êÝê{n7ÀÃ¡ƒAðNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sð\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+ŽäÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XÐ]µÝY XÁeåzWâü Ž7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Þ3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ð`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆÞ±ÅáÐÝã&/¦O‚ðL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ðÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Þír_sËP‡hà¼àÐ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàýUþ„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšðÜlAüV…¨4 hà£Sq<žà@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒÐÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯Ý¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ÐÒ\nÁX; ‹ìŽêCaA¬\ráÝñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\ržP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çŽÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëÐæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàžœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gðÒö]«ÜyRÔ7\"ðæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!Ýf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ýøæ8PE5-	Ð_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²Ý‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âÐiTð1ªORäl«,5[Ý˜\$¹·)¬ôNô\n«ž[Ðb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ÐIŠCË\\ÞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ÞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Þ¡~¤M½ûÎß!áEt§ÐùP\\èÄÏ—m~c½Bð\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿á|9Þ¾/–òþ¯Eúï4æÊ/¿Wÿ[È³>–á]ÄržÊý¯v¹~B£ PB`T¡H>0¤BÒ)ð >¸N!4\"‡À¦xW-ÅX)„0BhA0à½J2P@>ÈAA)„SÎôn¼ìnìO˜Q¢¬ÇÎÊb®rõŽÔÒ¦âöàøïhèí@È‹’î®(–ð\nì†FìÂ˜ñÏ–øÆ™…(ìÎ³¤ÛP\0÷NÂõo}¯‚l«<ønÞø®ˆâîlëoq\0/Q\0of*Ê‘NÑ½P\r/îpA°Y\0p\\ãï~³ÐbÐLh °!Îã	ÐPöîd÷.¿ïy\no\0áÌËÐ¶öPptùP¡ovÐ‚knŽ¸\0z+æ›l6÷°©¬Êø0’äð¹P½oF€NìÏFô¯OpýàN`ÜÐÖ\rogðá0}PÍ\n¬–@°”ö15\r±9\$M\r \\©\nggìÀÂ Ø\$Q	\r‘“Dd‰ÆÊ8\$¶ªkþDâjÖ¢Ô†ö&€ÓÀÊ ¶àbÑ¬˜ê°¿‰›	ñ=\n0ÊÕÀúºÀPØ ~Ø¬6eö½¬2%Íx\"pß@XŠ±~«æ’?¬Ñ†Zelf\0ÒZ), ,^Ê`ß\0è8&´ì¨Ù©‘Ñr€© ©ÃkFJÂÂP>VÆœÔp¨²8%2>ÂBmÎóØ@ä’G(²ä¨s\$Ž dÕÌœv†\"Èp°wÇÆ6§æ}(VÌKË ‚K¬L Â¾¤éÄWñöqú\r‘þÃÌ¤Ê€QòL%’PÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³%ÒŒ¿DÌMü À[#¢T\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi2I\$\"@¾[`Â¢hMý3q3d’þ\0ÖµÈúys\$`ÖDÀæ\$\0äQOf1ƒ&‚\"~0€¸`ø£\"@ZG¼)	Y:S¨ê†D.S%Íˆ’ Ð3¾à d¹ÀmÓU5‹æ¬ó<£SÒSZ3â%r “ÎãÆ{óe3Cu6³o73î—³ÀdÀL\"àc7ÄLN ÜY Ê÷k‘>²Ž‚Ç.æpäì2øQôÐ÷“¼åÓ3ÀVØ°WBðDtCq#C@½I”P÷DT_D´:ÔQ<”UF²=’1ô@\$‚‰6Â<cÆrÅf%Ô¬,|“27#w7ÌTq´6sþl-1cPÕmðqªÊ\n@ÊàŠ5\0P!`\\\r@Þ\"CÆ-\0RRˆtFH8µ|NíÆ-€Ædòg€‡Ò\rÀ¾)FÆ*h—`ö €CK4Ã1‹ÊkMKCRf@w4BßJÁ2\"äŒ´Ó\r1Q4É2,\"ô¤'¼êx§Œy—R‚%RÄ“SÓ5K”¦IFz	#XP‡>¨âf­É-WX\ršÜê¤pU´ÕDÔt&7@¶ÂÑô?’©ÀÑ ªµ£}O1½2†‡2Õ#UK*¤)ôê¸‹Œ0o<> ]HŽš„Æ¿rè›LGNª›ê˜W%–™M^’Õ9X:ÕÉ¥N”òÕêÔséE¥­@xy’(HêÆ™Md×5<52B– ð–k!>\r^J`‹IžS N¡¥4'Æš*œ*`ø>€—`|¢0,™DJ£Fxbèµí4lTØ•û[¨§[é•\\‡¦¨Ô –\\{­Ò6\\Þ–’ öß(#mJÔ£,ý`©I³ûJ‚Õ­ÊÜèlß ûj…jÖŸ?Ö£kG»k¬T9ÀÛ]3ohuJ©ê¢®ÑW•\rkÕÏ)\0Ý3Õ€@xè¹,³-Ê	5B”¡¶˜=ÂÔà£#–gf¢¡&Üß·Z`ä#ÄoíæXf È\r ìJhô˜“À´5rqnzõ§­sÁ,6’oÓtD´y‡äÂb´àhþ—Ctn˜9n‘ í`§X&¨\r'tpLž7²Î—¤&—¨¼l¬Z-Í¬w£{r—¤@iUzM¿{rx×—mÒSBÀ\r@Â H*BD.7¹(Â‘3XCV Ç<WÔÑƒÝ|d‡q*@”þ@ÞÀÊ+xø÷Ì¼`á€Ï^™Ì˜ß¬__•ND­X\0Q_D]}tõYÅúp¦f€wÔÚ\"â3øz¦nÂ«MYñùZR\0÷¬Q¤?¸{†M3†•£*×1 ,¨\"Øg*U¡*²¯ˆÌ«zÒŒW5NV2O-|€¾ÉÓñ,×]‚B×dí\rŠñ/OâtÎøÃï‚Ì0‹xÆ†ðŽ½Ð®OCë8Þ-0Ò\r”ÿ0à·õ„@]¤XÌŠÐÎð\\\0¾0NÈï£Ñƒ4ëi¨;ƒØAtê¼8X—x¤\r†…Š“‘ìÁ‡øÝŠ×Ê7¬<ö@SlÈ'LÒø9WŽ ÊÎ¸òÏ¬ÖËì¢ÍÄ±•ùRçÌðÌ\r¾Ï ÂÏò|ÜXÐÖa÷ø7y€Ù\rwe¸Œù„Y!ƒ˜Eƒù’´šÂcRIdBOkË28[‡mÌJŒ+L ÈÅÙ¸OXpføÓ9ÑDÏ›·¦ßªw“@Ë“—Y—…¢Õ÷\\yäAcÙ£ƒXgš™%šôó’Â1“ï“j	œX†9CcÝ‡àR¡¹‡”QFÇpdÒ= C˜÷ýš\n\r¥Õ‘ÔóšdjŽÙ«’xE¡Â2FX§¢x_¢ØÅ£Ú5£™—}q¨Åí¿¤M%¦ZM™:\nÏzWšX7¥åí¦:ÐZi¢npY;Žù>Ê˜í£ÙÉ†:6Ú;£ZÎX0ƒ“Ì¢#ùýcàMyU…i2,q¹FËšÈb­J @ÓgGè|4ógÈÒmzWõäÊ	¬)™Èr|àX`Sc‚Õ§ÀË™„óc—¥‡û!²B²—±”»/}{4JÂ\0ÒÃn»Kuz @ÌmÚÑ®€ß­yÍžÒyÖ\"º)u¹ÊÂÙã¶Yç˜s·c¶yë‘¶š‡··y¼—Ž¹7Á|·±|—Å{Ï˜*)°Ê4Y`Ïµ[v¹‡¤­‡û^NX•†¸‰†ò‡W”©û·‚7†;¾_‚‹*x™ˆ¹Ú\rùß¼ß‰xm+¾mû¨Ú™	´»¹‹\$\n¾l˜);™²„|Ù ßÚ™¡:œNÚ :„‚Š_È8N³¸Uœ5;¨p+U–L‡ò\\‡9í¦Ùñ“›¡»ýO:I’šû zQºœ¡ƒ¡TëšÜ)ªXG¡æ»ÅJ{w8“¾ûÅ‰¸UÆù\$ôàÃøü›PxTY¾pjh·¾J×Ã€›˜JÙ{‹Âð@îÇ‚³ øðZ‡ÌÙs•¹hË˜ç–XÌ\0Û–lÓ–ÌàÌÈÎ¸Îçìó‚Y}˜Ÿ®ü^Ð@u2ÀSÚ#U‰ˆ;Ãˆ|¼¼•¥¼™P\\ŸÊ#ùÊ|ª<®Ý\\³À›žJÛ‚,öœÀ•\\ÅÌšEÌú…‚]WÍlÁÎ,£ÍìÉ–<åÎŒÛ>YnÎ),Î™rÎüûÔ¼å—âº]Èý	ª\$õÐç½Íq„DJí=•Ù÷•XI-ðÅ€äÅÌa‡llÃµ]\\“w(iÜCÄ×ƒtƒ‘<i-u[uVŽDÖ“¸QÂ¸€xb€kæLI­.kú›@ÞÀ„ÜN‹“[ñ¼l<o=-]1`è”¼ªdš ÜMÌ7‡@Û%C=]ú›êÀ/|-àÜˆ¾ÉÞáqÃã•âíùâ*¾C¾òO~ÊQâòså`·ç(âòãDÉßÉ²¿à[ãþæ>Éká¾R™uéÞ\\+>)3íûPÊßP§Óí6ÓËM%º¡¾pÔŒœÅAÐ3qmu2ÖfzƒÛ¯ì4s‹	´í`ÛŽ‘ì°-kÊS%6\"IT5½‹~Òì\"™íÂUt_	TuvàÖ½ä¶Yw¤†­0I7¤’L‡\$ú¿1Mí?íe@3Ûq{,çÀÏó\"&Vi·àžÔIŸ?¾µmõˆ™¯UWR¾´\"uiT‹‘uƒq­Ÿj\"•GÃËõßò(™ï-½‚Byîê5øcÝõ?Œàwñ®°ëTúî’`ei¾½Jtb‰gðU‹3ËëÉå@öá~ê+¾Íï\0MïGè7`ùïÍ\0¢_Ô-ùñ?\rîVÿµ?øFOÔ6á`\no†ÏšInª¼*pà™öeÙí\"T{[Ð“p^÷ä\nlh@l0[/ö„poóJKÖX“ñ€ü<ª=€9{Ç¾6ç–<eßAxãÀùÇ‚¼Éá4x[ÍžLò“~>!åOQxš{ZVFÔŽ`½éÈ~Ižß–“øL)Q[ëTûôM›àþT²*BC¤~	æâ‚ä\nƒò¡gÃˆÅ…p9zKÉ–ówzO9di^›'‰+¹ßïDz4ägHAº¯Lyô¡\nr€<IêjKQó¸Snô==\r.Âo7Â½Êé%a;‰kÏãmX¿›Zi%P¨iÏ\r­€¾ýµ/©…L`pR0¤Ž&õ—I (Øá\\.£*m„*Ž(ÚÖŽõ—\$ä†ÆÀ÷\nw×ŠÐ¥…8a“\n&´Â‘žÍUmª MÖ¨P+\"Ly„ó?¡M\n€2’	L\nbS ¥NäùÇr¶!w¥jw`¼Â\$îôƒráè…Êaáv±^Ãq­F‰Ü6•Ó¨i*™Ÿæ„ì_xõØ\n‰fðIê:B&ù6@É“KED¡úú·QD(V`.1\0Q\$íøF­¹H®’Tþ€zÐ†‹Ì\rªjkzM€ÐÀ®Y™À(61€”x‘+®%dj¸Æo\nÂ¦¬\rg°ï\"ÉŒ´ˆ—?Œ1- 3hÏXÖÁ)åyjÃ5r¢N±#Q¾¼Š¸w{_þ¡øG)ÂÎÙ1i‹Ì íç¤<Z‹ºpX³¡Ö\$â?¥=%.´€Ò®&¾­%\\±8w­!¤µa4œ<JB[ÐÄº¦u4‡%êŠ×47‹Ä%gÑä&¸€Z(@	€E¢{@’Ð#¥–2Šh@Œ#ñŸø™ÑŸ¥£@\$8\n\0UŒìjãA(×ž2ÀO€Š8Ú€ž5‘¸Œ¨@†ð&'´\n€DŽ\$i#ŽÀ#Ÿt\n PŽTs#]P*	àDÌuc› PÀO|pc—øËP	ÞŽ¼i#Ô}ˆæ:<ñí\0\0¥ÀˆÅ¥lo#}ÏFÜR‰Tp@„À'	`Q¬ycTp(ÆŠ@€eh\0‹˜Õ8\nrx› cþ<`NŽˆã:)DY\n*Dý‘2{dZ)A‹Ú4±²¤€cZLð2ÈÊ<ñò\\Œ\$r#ˆþÆö7ñÁŽ¥°!û€´ü€Nª{O¼@\$<	Ñ¢ðVƒZÒÆž52.Aù#D0 \0´ÀI¸û\"P'H	²_)¼x@Š€*úàAOh£hI)I²L1¦’ìƒäµ%áJI‚B‘þ’g¤i\"p÷§K2}’ä–Å(CËÉÍ=²t”xCøÐ&FÄ	r“ÒoÙÉ@@'”ñ€%	 ÛHÞT±áˆ	ãÔ˜:=¾)\0.ñ°]Îâ5 .ðæõ(pÈÀL!à8­\0ˆ¹	éR\0L‹YaÔbkÔ°ˆ6Ä)Y·éˆî •Ô®£	h³zZ¦õ±’IgÎVO3oœ­Lgà3ËY2ãÛ‰ÜDoPË`3Ì¸ec-‰r7í‡2Ô—Dº‚Þç‘B¼‰Z•¼¼%å/I{MÃ\0pÐÀÌ.`äÊÝo*•Ô¯%T€ý\0 &–iR\n™+Éo€ì©–\rÀ^2q”Ë©\0\\¨I@‚	KÀ#peC*!>€/á%|È…Ì’ÁÞŽüô\$è)çÀ§1P30(\r¢+\nZÆzž„))\0*®\0kà€ÙÅ2¼–Ï…(–E86å¶s—tºf&”™Š¡´“+;”Ø76&ãK–_Ž(›9fÓ,@-ÃÉ4l\$Û‚e7\0ù±:l“LÝæM7.\0ˆ³|›ðo–JÛ©ÀÎZ³u•ÌºŠ'Èy{ÅH,#\0vU@9!¼¥	Ñ'†¨&„òGôøß@_-Ù¿³ºt;Üê¡:©µ€²u¡<—ˆL†iÙÎš_ê€Ø£@U6°Îù#ä_€L'~ùæ/Öm`\\Të']=Iäât°Çž¸Âà)ÔÏqùsÉ9Âa<RPÂº|tžút&5°äs©lî@¾	ÞKÆwS®èlÍ:9úN®wSø|·göÉØOùAÐŸ<ë‰BÈ€\0/àz@´	ÍÏÁ•Òå†=?=iÞO‘ŽkÓŸ=\0E@iâÐ\$B× hO\0Á>DÖP´ó‹UäçÑ†j¥HìÂ9F¬BcCi‰é­BwMŽ§tÓx€PÀÙM‚?p“®=—äì8ÜÔý‘Ïlg~¨˜tÁa©€%]b\$àØ\rˆr„èÄa,6ÅtŒàW)Ž\0U¨›F˜	|æì“¢ˆvh¦Qú*¥Oƒl.C\$À\\ ÐÖRRÌ<lcù™&Cj3Ñý%ôZM¨öÀz9GpY’â¹£\0i\$Dµ‡d‡ñzt[')[)Q¤ØêÞkÁpi0·#cÃ¾‹ôNE¨ô(ºC2L	Æ@9hÑEJ5Ò,šh{&Jzö0n€vª©>[€j“£Û[œ]ƒK•ýRîJë>.;ù¨íF=RÚŒŽ<råÓM¡=—Ô’¤ÜhØ^Y\\RmnËÐð Nn*g‘¦ôÒÅB¬·5^QÒ‰@O¢°x¨¡HIÊT ´â9½)(‘œ&µ‡}A)PÊ\\/êô…_Õ!ÌH þÚ‘¥¤ù\0éBá­\$z4ÓTYu‚J’v\0êƒ”¨…%@æ32\0Sôm€--Gi@¸úQÅ%Ñj©YÝ+FuzlSž—”ÜW3ØÅ·OrŠU\$EÔè;¹M©¢\\€Ô±Äu/£õjeQªš¦§,#J¡ªXPÔ<UH•TVVé#Uê™ÔUbˆOU´DZ‘â¢µ£Í8êÕUJuS «À‘g)XDZK‚•¢Bî\n¼@2Š©ìx@d&ü ½eÜ«Ià@ÊFwì¬8“©\$Ù'IºV‚V†U\$²ETÎ_ð*ˆd¸/áFCÓYdp§vGƒ‰3‰ ‹Ñš‹L^(ù`áj”÷2S¸ºcÛW¨ÜJQYiÖHB”£ckœRè\nþ²U\$jê\n„ZAi€î»¢U*wKDRxW‰LÂò­ˆ€+fÚŒ@ã¨A4¢àGz…R\n²5‚b¬\\_²Ÿ ­ô‡¡á0¼C@¤\$X\0+Å]¤ÑÂè\"?‡n¦€+QIj\n»x\r€ôB`S¸âM‚ÈÑûŠ\r o°@‚À6XÀ\"{±\0µãb ¯)–ÁM¨cMðW ä¶D_áÎ±Ðv@{cÐ:¤®%[%‰C²þ1¼Ù;AÆˆÌTn› \0º a²pážóe~ÙU5 s©V†Ýe|M9‡€9 hË@æ¦\0êÙ~É@.³	l€· Jv]©ºD§f€7¨FÌá±³ËùŒ,/+:¾‹íÚXIi­\0U¢â@Nµá´\r Ê¢,².½i¶‡ª³m_ûFŒàÖõäÀYiUÔÓJ¯!©gûLj‹ãÑú¬D“iKAà6²õª-U«KfÖ_N€\0ö-3©ìÀã3+¥dãiûD	\"ö¯µM¥ml‹L…XÜãã¯¸Œ>‹&|UÕÑõ`Ïh¾ù2¦ÑÐn6Ý…·ÉI+ØnÃ©-nDÃ×`„µ†®°É”°@ã¬B!;X™smÈ¯·†pC`‘p5Á°¬¡O‰%Z/Õè5”³é#CK`‚XˆªÂcb°Q#«§Qa»–Ž…ƒ¸q…èpÚÝ÷)™®G+~Û–ß÷\"ðlM_^zò©šæ!ÌÉàE«”Ð¥’®šÀ‡ïa úØp86ì„åˆn+oì’Jâ¶ö¥¾,¹¡ó‡¢ºw\n¢]ÍƒpëŠÛRÁõ'§eÖJÕqµ'Ü¨%£'€nlO‹h@>NBÈŠX5,ˆ‡‹¢ÊrGr¹ Z l\r(ªË‘jIù†±lŸ¬%b‡;s+±× ¤Wg7¨)’*e…¸1µ•ÞÑ3“L e@(»p\0 ÐÃŽèds®AñÖD\0Ã\\bD§\nuê/&1¬ÞXR×¥Eæ¥‚5¡Tœ\r§}7õ§”ªîÔþ”AÙ¬áÉkâ\\–øöÍµ´ŸÇqà2Ü€öZ-wo´“tßZùƒ‹¯]ó-yq2j+Õ†¾Õ­Ã«¬€n¾XA«Û\0†\0º¾+S•+ïY6_BúV7z®nZ@Ì†²Ô·Æ´]´-UMJc*¢ü¸´®í¢s\"ß+\0·ï¯x´B3^«öà0\r÷ÜÀÎïÁcðÖ\\jÆÆ*¬P-\\Q8ˆÊŽ·…l•cË%XþÉVB‡}‘,€þ;(‰`*Qú	\$áïÛrßÂ{ÁKøìCúÖ%¬\r¥ˆx	ÞøQû…,¶Ø¾¥×/‰vàä\" pÁã¶ð~ Óáã ÅJ5eãü®Eš-^âX;c²\\©¶×¬m‹´7£?˜6C*åº®†,7®HfÄ/Â9eÌ0[@ñ¤!bê®íÅþUÐ‘=›Äi.Jocñj;ø—B³\0¼ƒï]Õ”ÑúvÙGÃÜ8àO\\\0ÀÇŠüO©›\$Ž•.&	p‘\\‹H1bØpø’:F\"8Å¶…þ‰ŠøVx©ÅýµR®–xä=À3Æf1Š+|Ò»\0ÂBÀ¼kbÌPÇLÑ’£ô\$zÌáàÎc	¢ÇÐi,Pcb,pÃn(¥Æ,¸ì`'/»~êÙkÖµ‚Îp€q-›ÁÈ±¹VÀÜÜ†Ü\rÙž	\0á‘‹dSˆÓÈÚÍ+º\"Šéˆ­1\0(Ä-’Ì1~útcªþfý¸àBÛ‘b}Ø ’Ã0<1\r°¨¨L’€»\$¸ˆ2d\"1ž&ì™Æ€BÃ³N…Ô\ràB\rrƒ«\"?vädäZá±.\".\0?wä¼9€oÃà\rÄ0¥Ñœ!¢ÍdR€‚ë¤¶\0‘ÃÇHëÜra%ÐŠØ+\0yrƒH¾sÏ’4W#œ,\$èô \0„*xBó\nPÌòü|„ 8@/ \0ø2U’°ábíÝè¢ÂÎÎªxÀ!¨d§°óúNÿ3SÔ?£ÑP»…€(òg\n8·‡ppŸˆü€S9õ@‘'  Ç\0úyµÿ\0¦y46¡H<‚öÌ×ô\n`S’ˆ…¼ÈûCY¹’„”³jp:\0N(ÓŒáX4ŒkÌÈÓgßDy‹<–n4™£ØrS<ÒÏýˆó¯?¥\nÀÇBãúf('™Ì~dgÓ™SËÏ?<³ÓVg(1™éãæƒ2ù£ž­—²)ÕôŸf`éZ€¼a“>t{ÀœÉŸô’>ñø\0ŠìPû`O¼\\sŒ<õ?4äwÞ~³ÜÇf@z™ÿÍ~hBW Ìø³á´ŠxhA¡¡ÜO'=úPÖŒ×²Üö±ë=óúc[ysèÌûgâ|¹‹ÏæŽ³%™Mè,Q³ÆÒ8'X žhlUs®…§Ù¢ú é4ËÃqDýÂx*8g§NLšBÈ–¨;§}%eû@YìŸv ho!\$æ›NcCXì³@Ð;YH'Á°@^ à·Rf^x„\0^osÜ_fª—“;¨Ópj]²:’Ô¤ïõ.mLêl\rš®V¨\0ó@Ü€¶Ê\"ÓÕÄ1%Œ!_êô@-]8f¤ç -Õþ±äa]Y¯WšÏˆh`(‘¬äJë@…ÁÖ\rˆ—õ€Y	kB(€xÖÂ:5˜B\\QkO[:Õ0˜Â¼¡­uk›X¥\\×P\0ë[öx¹ÀÅ®`ŠRIGÕÐk5°ðª§YzÍ×PÒ™¬=†l=áõÖe€\0ç•2=k` Å[K¼‡Bê½Ìû8ž¶C±Í}k«c{#ÖØ¢„ølŸdfF.Ìµü-›AºÿÙ6º†K­’•¤ÐÖ×Pàv„'¢lHiAÝÚ8C¶“®	G„`GbyÙ¾·Í- 0•Ä¬;[*_ˆ¡ãmlH{(;Uo¶ÕÑ*Ä]Š,Ä‹åŒÖÆÈþôXË“¡80Cµ°K	­!N¼õÔ(I`¨³	V¾Dv½§íšwá·rpc,ðåŒÃÓ\0ää 9~s»Xnã¦‡¢žŸr[ec·4dçpÅi	\\…Èe2âãl±ÄaZCk»gl÷bB„™¶7x%¿êè½ží€Å»Ùk`ì\nÁ(@Åº«®„5åÝ˜¥Ï­cÌ‡#t›–Ü–éãE½}Å„sñ–Lvö÷E¹ï\nQQÛ”Þæú76}õ‹Or»çj§b¯%@7‹˜àÛµßh³wÍ¹÷n£kÙ`Víq·±Íòï³~›™ß~ø„4{Œßþå÷ë¾óË;òßï8p2mP+ dÖaX8&,=Òn›}ü!/øK&\rŠÿt´H™Ó)/øYÜ”†6@å¯=}ðŠðEU§lKÃü\\kÓb[×â1Gø®­M­)™J¨xXÚEïTä¾	/¸\"-‘ë…<4ßxDˆ¥ÅíÐpÄ(¼3ÞÊŸ·ß´'È+Û\$\r†¶<rí×n`H\\t\"þ¶70=ä·Y×Wéhsð­\rÏw¼~°!ù0@6l‹\\† •§/þBò7’¼‰–ßÏ>Fÿ‘Ü‰\\¶¼RÙ¾-Çn‡€þÜ§\n¸?F~†œaÞ×+xÉÁýëñ¨\rœl,fúCß+­Žîw•i¢GøÛËî.X!¼_à71ymÌ~ñ„œDå¦È7åÊé	÷š¼ÆåîûÅGÍ¾gówƒàb/89¯ËxÑ@!R–9¸eÍJq˜Y¼hß'3¹ÏÍÄ¬*÷ñXw‹Ë®^—ÛË	¾7ŸÎî5óÀûåÖ`ö:î#È+Û­0˜ž·œS¯ˆ@0óo7:&~r(Z·‘G1zÐþˆ€·¢pÝÎñdNŒï“£›`ç¿/Fz@8Ñt0ŠZÌ_ ‰ªÎ0³™{Úè¿Lén•‡×‡oEËÃÑâ=rû¡‚Gj]õ H•¥›²Ò·…»ÞAf+ªÈèVº•º­mžœ7ýåßB‹ÛÓî*q‚þ}cãwØ³=Û„g¥»wE¢-H·°€»·¦½&Rh4—ªMêžZÕ_L½©]WV'ÁÕ¦§Íñ\"uŒ@-ÜaMÃsº@9êL:ÈÕ’]ù#‚ÝaëoybÝ\n\0[Øêrðp*}Qí‚bwßÛÓ¦?†ºâÿ;Vc¾Ê°›»	«.Ûsç´¢XíÖ°ûy·R=§&d”ã·rûO«žçõ2Åj!Ïux¥ÜÎÔ§R{NÖ&øµÑ»®5ö„}£ßvyÛ°Ž1o8Z#žþ{ÛNärû½ÝÑï‡Q:BÕHzW{òïW{:ìržÞ÷ó¶}D\$§j7)àP€÷ëÁÐÝCvV¬X—¾ýdí¨D7óá®€·¼,Ôh»÷á_ø]·^í—qÏƒÜŸxO»]­ïŠö¬?p{Æ\"ˆðOŠ8Qáµ?xw}ùJâ?9kâÞüx½5buÛ&÷øÏo›ÅÆ^ñ†õ¼Ÿ¬>õw“g]çíh¼#ä?+÷‹ mï(³¼¹àÿ/ngŒ	é5â5<ù;‡ñüòÈ…¼Ë³½œxÍ%‡³‘;ì(³ÞVóŸ–;Çço-ìóË½ëòÿ.eänkpËÂÀ_ËFäXõ9ÓWjQ¥ÓàCBØ§åv3R=°ì†¦;aÙ][yËÈ»4Þ/¢|óÃ##v	@_Ç­}UçM>ùßÌþ1§»\rC£MúqƒCÞÄÆädÄ˜U#[ÓÉ¦Ÿm\n\\Ä\r6ô'Ï>‰ôÃiI;€R\0X€ç<rW0[ÀE°dHSèH\n^×\\”¥3ÂTû´ÀF÷xB™îÀ\$	Òi÷´-‚­'ûÛÝÕ÷Xf¼}\0#É¤	1êo·BÆ€*;Û1±(\0ø~@)ü§Òh>³ª{³â~Ûøw·ÉH/vL\n9È?doÒÑð°,‹x)#>˜#b`',úgTð¤È~¯tˆ	€YÐ}Ùï°/]-'Òüž\0¾(ØÈ þñ@Ï¡î/Ÿëä…>¶Š~ðolH‹âžÜöÿ·½À/qû–DƒTúéö~¾¡o|ÓìaÉþ°°#|F8ÍûdœÏ¥ò/±|“ì¿u÷¿€Vîâ©hø\n>Û÷ÿ°{´	Þõ÷ˆýçï_{þGâ IaùE½÷&{VNñžod¡õÃFÆBÀXûï×½ÙñÀ(I¦N@Yû¿Çÿøÿ·ýÇð9»üÉ¿\n-èû{çã@RýoÛ½Ù&‘o^3Y¹÷ï»>ð¯†|”òŸø—îþ-ñóö¶ùä~åý/»ò?*ù`\nÏú?—Sæ!VùŸîÏ©óœüïîÿ>ÎèÕ¸}ïãþOâŸ•ü¿Å>îýRMïûºƒõãø?b@\nOÚ?þà0¯s\0ˆ¢IèÏ€’ú+èà'¾’úX¯¦À,úƒò`'¾¦óê¯Ô?€úÓñ¯å\0‚Kà¯¸¬úCéO…À2út©>¨LO¬¾¢Lïv3ŠàúÒ\0ŠÎ[ï£PÎ›ïlë¬H\nhä²Îlr\$/Àý\0+½Øý\0	»£ž¨	©\r@ ?Kå)<#PøÓîïs\0Žø ” ÂÎ?Kæ@Ì@\0ÃæÏê€±ø\0²%,p)?#£îïÄ\$ø\niL€¦¤°3è[Ìå3˜’“îð?²¬ @Ï´O¼\0ªýö°A|P\0™ôD?²N@\$Á,£Ý/ÞÀÿ€\$B?0ýÃø\0‚\$¯²\0Vú’LhÍ…¼Žˆ	èé€ùŒ£é½Ê>¤#6ý+ù€>öR:p¾>«7#÷…½\\Ð³lÎ“ãAoãüÉ<3lø	pe#7ÚA@)À±ðü¯Ü@ÒÔ#ýAV?hýãøƒ	0*ÐZ\0“°*Ð\\AuƒüÐ_>kÃöÐb?>«ïÀ\"…½cæ©#6>ÒBÃö’Òü \"\0ž>Ü\0psÁÒ?ÛDPvA\\#þà(>Ò÷3EPŒ¿>ûÓ:­Â<\n´OÅ\0ˆüd\"ï@A\0ô°AêŽûð‘Áò”ð”Â5ìÞÁÿ	“ø #¿‡	´ cþ©	“þ€+´@ÃùhØ€ø÷¤€\$\0øŽ‹:M3nø’3cêÞ`ûèØÂ„ÑT+I8¿Bò3@*ÀÆÐø	@'Â”\\pM¤8Olòüøû¯†‚­»ÝM€Ÿcî#üÂíÄð7B÷h`,	àâ6oŒÂ\\\\.S>¤›DÌÙCù˜ÿ0ŠË´ÐÆ£S\$2ÃòB‚ù«ù@&AŠ>ºLðkù¬4ÎAóÜ­3˜÷Ô°Ð@½;öÍ>pùÐüÉ¤‡\r¨\n°3|Î\0\nO‹Aø:6ƒô\0¥d7à«@8ýœ%`#Ã‰ˆ[ÐÀ=ÚDåÀÐ\n°ýÌÜ3u’LãóC™¢9ÏBCÔ:`£Ž‘\$!hÚ\$Ó“;ÐêB”20uÁ[¬8°ñC×	Ä<ôÃäúóç¯ŸÃëdPŠÃß|=q€2pí€V>˜û°áÃ÷	|*1\0Âç\rÐE\0©dAov´PÎt'?d,P­D*ü@	/Ÿ#6øÔCP‹BO\n¬©8Ä',5ÃÑüE€ ½ËLq\r?m¤Eq\nÂzþC@+¤är60åCê?3ß/¡Ì“ˆ\nPÜÙlHð•D—ü¯Í¤5\nóü°°ÂÆãói)D°„1(ú£Dƒï£7ƒæÏu>Üà\nà\$Aæüj4Í\0˜?ê4Áª?”ÑLK	Aæ¢>Ï½?Œü‹û€ÀqDI@³£\$;ð†D®Ž8	 &¾?;°c€—ÄJØ£bÑPû¯ÐÅþ\0	ðBÅ#3í`Â‚øˆ)ªÁ»ÌOÐ3CMZ50âEO6èÔC¯ì\0ÂÀŒ\\\$èÍÔûp[Ð9BãíÁª#cj<‘1Ä1B;còÅDBhÔ?Ëô@`*€ƒ¬.qbÄÐøX	o?;\0KÜp¤3¥8	ÐRCÌú6/®¤—ˆ\$>lÍ¤pIÀª,!€*\0®+ÜÀ>=÷]±wÅã\nT^pgÅºú#ó\0ž?\$J@Ä	\0*CÈ*É7Æh\nñj?“ê:pArø”]Y€’ùÔL‹ËDbÑŒàúïBÑ4d@(Dä”ÌcÀEçÛâ@>\$Òà	4¾Ø‘þÑ†©</¶Ð?\n€/Äº>¬gpŽ>šŒü± ¤I6i8¾;³êÃèÆ‰cÝ1¢AZ6€!Æ}<j±¤D¢¤jÉ(F’?dÀÂÅ'óêït\0†üTeÂØø´1– ú ü£þAv?lnos3˜’„50†#Æ>¼ÈòÂœ_¯«Ûd°©¿³¬UÐºÁZPú©4DŽ|;Ðr£‘ÃCðñ€ˆø[9£ê¤¥ú5IÇ5²I‘É\0ûEOÜB\0{9q C‡|\"pUÇZÎPû` €²øý´GcœQCëGPúJO‹ñÂ6(ÚBïóÇz>Ú7ðÏFøöÈ0IÂ:¼vOŠÇ‘¢BÏuEäµ·,\\0ŽÇ¸r8îÂÈûqgA6>ÀýÑ74D÷0qÇG¥ûêÍ>-SE@# ÑÈÎGÒ÷¤.à*\0i\n\\-`*\0q\n\\eñ½ÁÿØ±\"Â—Œ)qu¤ýÃï³nùô@`>DÔ8	\0/Ä@þ„_±Ú€¤üw#îÇlƒÒG‚>Ô„²¾-+ß6¿Wl%°6½·l0®\$5´sÔÅ&Œ\r *\0e!èrÇÿœ€qIÂ” \"ÀæÑ> È˜3EILÅ\"‹â‰94G\$/ñ¦\0—´‚©\0¯ Ñ-2>/„ƒìå€˜üèÓGg\nà/¿LŒq®BP€\"#7ôzñáHMÔ…O‹ÈO\0Ì &£¶2L‘ƒÁT^P@Zúd¨À=”]Q—=çÌKCïEã\0ŒQO¢Æ\\øôs0¤¤>ƒèq—Czù¬†±—G„>¤†²¿ü	ÌÄ@?Œ0Â?ü\\oÂ¿³–èø4Md1‰9€‰\0¼ÍGò?m\rDÆÑü(Ô´LdòÃ\\KJ8\rE’Ðù-24U 0VAÛ”…R=ÈEäe£þ¤5!Ì2m³qðüÏÓAEÛô²V\$ÆüÏ•ÉâŒØÅI9Óü‘	C&ù\\GÀ)D «ü§½òü4çIç#pú«#ÆøŒ—ññCˆù\\x£ø¿C(\$òƒHÍ:NI(J\0Î‹ß\"w\0¿,)PØÇ¬‹íÏ‹4<þÔ!òŽ=ÞúœGošÄó‹âP‡¿6üìN±QDë\r[;‹A|KÒ'AAäP\0¥C:šÊ„Ì‰Ñ4Åã*To‘†£ÕD˜F^ÈûÉ‘\$)Ï¢»¬\n«É’àÍ)’(Sà‰\0ò’È(ý\$:ä­@à‚²Y8’‹JÐà#ÅÐ‚ë+œ¯\nQ5ß+`a+ ¸iþ`6xð‘¤ª†è: ÚŒà.ÐT‚:‰þa˜\0øŸcv(ƒ^X¨€Â¼H˜O.\"JÊðO\rÎË>ex-¾¨J¸€èKPïû¤rÔ‚-`2²€ÜË_à7€Å-!\"JØô¶òÝJêH.²ÚËo-ø.²Ý\$ª<¸BOÐ€`> ©dáµ\nêH\"òØ†o+›“§s‚Øè 3ƒ‘+¢± ©6¿/¡ƒa.Ð\r²ð†nd»²ïË¨é’?ˆô£z1\0¥àð‚?‰¨ 7€ˆâà<À?âãø\$Ó\n`+Aw*MQ¼Ã<Pýo¿°?,)#P>”àÂ€šøÌ„\0¦?jŒÞÄ“ÄVqÀ?“£ñ³\$¡	9¯õÆ-üÄ2ŒÌIÄÐîD9Ì³Lg1h[ÌÛÏ1ŒÄsC1sÞ©9Lz?à	 LWdÈovLŠþ#ðÐ9`Í¨0æ€Þ‰É¦W·–ˆh>\0>¦¢Å/)Dáü²·Lº¢¡ÀÌÀ\$ÍaÀ†¨9*ƒ<:C+àJËìKPJ¸\"—L\\Ã*bÌò 1ÔÀä6ë4ja+\0î%Qf ;KœE¬¹ÀÔš`è> >7¦tÒHw€¾MPn3I:fàD <LÄÊRÈ'¾.\$ðíBO\\²\nû	Ðø5ã86ÄÌ¹D1‰<\r¼³\$Z…œð’ƒ„ï4Š%rÌƒ¬²×àúÌþ\$€ƒË¶§»éo™^Ú\\°È\0øf[z“e…í6|Ö“gŒ&ñ8+M=6È5ˆ³\0Ò1Idì{™^fqdè¶ˆs7(|©tM.]HSó[€ø¬Ô ÕÍ;7yC„—šÎ¸mÎÌÞI|A‚Ê:`c †Êß8\rÒ…iÔÉƒ¤ßÓ@¬‚P`È~\rlËa=M3ã€áf‰<ëÀRå\0Ï!ûÀ@’ØeØ«ríÍdO‘t ¬‰T°³-æXY9A“˜:38áOÊÞadÐ¥ö’gL³fxË=4K\n&€ôu0KòÍ¨Ç,ô³o7¤€ëÄ†Ó,à½Î3Ë:h|’ÎKbá)AN¬úÄ`ì€Ñ:ØÎŒ€×;´ €Í»*sI&”á«Rsµ>\rX\r!\0\nÀàBsVM63˜KâO×:Ä®ƒƒc5„× úÎæ‰X!AœQ9z%`º{:èHòºDëE€îcv!‚Î,Èôá“:Xƒ)¬(üº%˜Ë2a&Œ«,ðl3Ó8j1è|’Í‡É=CRrÍË<â\$óŽ\"KB3äöÁ'9…:|÷)`Oj+îÀ9	}-õSÒ>2¬ëUU5ÜôBUNàóô÷²ÑNÄäìS¾NÄüì«ÈO²äû3±KNìÐŽˆ†¨ ×@:/ç7£ÄQ†¨ç!Ô@.’(&v9ÔédÓøŒ^þ“‡’Ø¬!ï¦[.pGc K#?¸füÐpÃe“Oæçd®€2\0k6)„,\rÿ65GmOFV™dåiÈx,ÿa=O@s³þc6…`Â¤Ø\rJ\0å;‰³H†(ù*ŽrÅ-Œ¾.íMÛ[ BÎ !(àóM¸LP«bUèÛpJÔ:î1úÞE“»¦º!:¢,ô:‚YB‚ò*KRÞ¤¾rÍ0Ø¬Lî“a6Å;6+2Æí)èUB`JsV0È:Ô0_B14/ÎúíAOáœNeúÈ)A~\rÚÈ öÃÌ –NPów“,È´C„î3œæ®¹ÌÞ°T3öq9}SQ\$ÄãA‚P“DÐ;!:À!îæ¸YŒÐsÄÎû6Ø“ÑÑRÔŒFt›#C¨Ï€øQ\\`rXr…<í'ò×72Ø¼´O-„w9Ó¤ùËb8à5€Å3{¡\0Ä7ø\ra\"ƒ\nh[j·ŸåFÛa)”Ñ+€2Ï<%’´M¢ê|®m¸|\nÀ54pˆþ	&bUQ¨8\0EŽÑ¥4AAN,ËàìËFØ•To(ÉG`šO•GA›³êËGlý`:†=è\0<\0Ðëê”ƒ²ŒTÌNÏ¬=.û´ 6Î–(ûSBÄ°ô\0,Jð?”.º(é†%“…,Ê?B.<2ðhMÎƒI`éÎŒá4ô¶*éË¯G°ëì'ÙI¸ÛíÊÑ9š¾ôžRX—E%,O\r,Êˆs³Ï*•(”}<Ú—@c©öRœj]Dþ`UR÷Î³,˜.²÷·d£¥rø¦’	\\·N•ÒÆl¸ÀØRÏ-ó“´µËšÜëkô·Q•K„½”¹,ƒIå.ÒíÒêšT·@1\0ÉK 4¼Òý/]04¾K›K\nC¨&•F,¶ô³SF0“ÔµS.-´ÉÊéKÅ2ÔÀRÏLe'ÀìÓ7L…0”ÏËoKõ3TËS.å4T‘:XÌ¾4‰Î9/:WRò9.Í62ôËËJ6ÀŽS	.ðc´¡Sv^ 0®»ËèO|L±MD%3î 4z3Id\n»ö•áú#tPq5h{!7Z‘Û»2 „ÆthÊ !îK€Ñ7YÝó1S³<»áh‹µ©½Ç-<ÎÍpÆø€jéÍÖà<4øÓ¹O˜%@‰OKBø°ôS¶!10Ô‡SÚÒëôõ‚YF…?UR4ÏÁ›ÓÜÇ!•õŒ~ÂXl´=¨ÇH|¶5QHýC&¸\"1M'µ8¯5a`Å?¢SPlõ`0—\\ÝmËÈTM,8'1eQaA&	\nÇTRèI¡ÑGÌ¿´ýÍZxôâ6yQÃ´ôñ¼aÀJÀ‹¼üûkU&ÿOXHá‚ÔphQEN†â=Cµ\"ˆLÉ›( ÚçQe@\0;ÐñQ®ÓPÔÅD\"€/—ú\rBà¼–tãµTžì\r<eÐÔeS}Om¾—EP­P\rüÓ«P5B•4U\rR==õBSÏR}Hã“Tè#µE\0Îô¥U‚=QE‚J<ýSð` Û‚¼1x\0ãU:óéOá/‚¼€+µN J`P!t8Õ\rT¥µ7 SõR58\nc>ÇÆºÈâ!ÊõŒ1{Ã€úÓ¼uE€ÚM4{Ö”4TÞíGa;Ž|ðñà5\"SÎÕýNkSä8»DÄÔ?JcU0Õ¯RtB¸{ð5qSåB„Ï,±\0ÆpÐàÔj†!‡\0006K¼1å ÂƒX@¦D¨V­å_ .Ô(¥_`-Öð`ÆD¼àua .‹•X\rFÃÕöðõRõ…ÐFD½•‚S÷RxhÁª<mXjïb­ÖWù_G\nVšÄ©èS¸ï\00074Ù\0ÒLRÁ\$QíX›pˆÄÓðù ×ê\$°Nó¡Ö&83&a+²€|l³Õ‰ÏÉQsÀA£…CXšú]Î_X]‚\0á+8+UzƒsRPÎ¨Q\0Ü\08Õ™PóOÝMU¶ÔH6!ªVX¤5†˜X…a¤ÇV/kÓVF”ý`‰TŸZ\0D5FÑOS½nákÖóTMSÕ¾U\rTMZÒºBðÍìoÓîÜEgÿWGµfµÅ„-YÁ(µ}V7T0BÀ©œ4Úð’Âòƒ[9‘5ÖX´åm¯ÿXhét>×LU`4\nÍŒTÑõ††o9­vÓ×FÊUm®Ö\"ýu†DÕ€	\rw+Ö˜\r`©V(ýVÏãPËÆÓjô]Kâœ4°ìoT.\$mDÄµ¶	S’à‚­e@3ÿ×­;@7mŒ:Èë¥¥“´dðÈ!õâ¥Zð£ôá»Q[œåõÑ5P•µ7;Sôº/BÖ!McÃG¹ÉT»Wõå(V–ÖÔòä¯•<7ó[lÓt…‡^Êô×ø\ri0ÁPÕÐÍa£|VX‰•áÌƒa[x9Hˆõ]¿õ¬^&m¹‚¼ƒÒ¤ù\0ÙXlã¤«Ìú•‚•Þ€»T‹ÐáOXl0£öØ(ô,Ï`€ØoaÈÕu€×ø3½‡U#Îô'0+Ó½8ñ]HT!XX\ryW@è¡\$ÛMQb¹‘-ä)ÓX	oõ†‚\n|Å`-qÎ-bÙ¶U‘VcŠÇÒÖ ‘3N=5vAg\rýŒÀ8<IGPBÔ9O^8.	Xk®ö;+\"Cµü×Z/åÂUUo[i`Ö\$×ïd].âÙ(s¼Ñå“ÔèÕ`-•Öâ½€óqªûe‘-ÂN¿=#[ÖMÙPè…ÅÑO^(B †”6ÍÏ_u–¶2:0mx ­Yg^5”-‘YG8”´AØÝc¯VVßÉdô6Í\">\ra­è™^íÈÐ®0õ\"ä±¿R¤¬–,·3Dä¯Åøß¡2iGÈ5§Í?:\rT!ƒwg„óM[7;[v{ÖªCs\rU9d×`ØÈyh\0h@ØÈ~ŸqT4Ì×_QVÍvÃø•F5ÔPƒs*ÄMc]Ió9Ú1T0m†V)S•ÓXÖ[üâÍ*Œ¨c“dA+Œ1hóbõ:×IhõM@Ýs>P¬ÛÍÞ9ûvuTË>¥Ž‚Ö½`	O5ÙccÛÍöjÏ?QëTmq\$¼¹—=(VÏ6F\rTr¶®~¥šÃ\0Ø|m•CÚ)[Õ‚N¨ÖÆ,dÐ+;µQm™-Å‡ðê\$µo²B-žsšÚÇRˆ­ÕàN›:’È/8‰>øb.°Û40>‡ÆÚñ,‹.tÚºJ¶\rÛ\rk®•6Û	WMmØ3[Ñx5œËêqÕÉÑìLb´6Í;`•Lm‹ÿ4•Iµ6^d!5`7¤:aOÕh4õµÀÐ-3üÒHÈUm˜€¶Ú’³^_ÀÔNTê±²[PHðÙØa=UH\rE µ\rjM¶•”SåPsN6ºMXQ 5Œæ	Ã\r’Û­YKqsþ[¾s-\0Öé®ï]¼aN³d5?ó+—Cf¼ÍÀRe^ø+@Ø[ÓP€5­ËÐGa‹öôÒµoM@w\0QyoKŽõUÛøe}¼Õ[¶_oK’Ž@Ûán»wxVýpEºäùPuo5öR“ñ8c·.¥	Uo5Áw\0ò\n(%ÓNp¤ëVÖ®ˆJàˆ AqtÏ×Zæ#Õˆ³òÜk6””ÜiEÜØV‹R{qü×fØ{3l@äPqH‹r!VS]úÈ6¥Ú'q«Ð@>R=E\0ùêSñ+UjõÊ”øYÓ[ÅºuUÕ¸Õ»rÌÜÇp»6Öõs]h'tË	mJ ¬8ñQUUuD’­m2z›Ð„àˆB¡K”ßÜÝv'P¿l]AAfËchÈ\"RåV«p´ÓXÌü;UË5öÜŽÆåÒcƒÖ°zPTuUQYëõíZ¯5åU¹…ýJen5ÀÜnÞÕovÅs=Hu½ÙÅZõoa‚itÝoUÀÚ»uuH5nÝ=jSÐÀUPZMNÄàˆÿQmobF·A>´]i\\¨G\rTŸvÏÖ‚Ôâ\"•Ä2Ø×v4Î³=]¶2åz\n=:¢\rh*s¯×fÅÓw_ÔäÊUt8Å[Ý„8]Ÿ+=•ÐëGÕ×7z=n…Û—JÝòßuè8|«Å4u]ô	caÈÝzà×€YwíÊt]ÜªÔÕáÅä^€ˆÎrÌÞ)w­]Œ%‚i,˜¦õí¤e}w—0<Õ3ÕäµnÛLr½å.³Ýiy-Þ7(K&‡\r_;f‰[­Ìˆ\\\rXÃ+Hï…çÔøa=Ü³bÞnôc€	,c’!£Õ8\$m“VõvRæJ]g -†W¹OsˆôŽƒR( êÞ5]WHVC\\5@DÝ!s%Î’²^×sdñ%NÐÞ9úÈ7·Öƒ{U™¡+ÜÙI-îÕ¼€ïP\0\"FÐˆS5…ÒFÞÏ[Òâµz¶Åsk(7ÄEz•Ÿ÷ÇÖ1-å@ÝxñÌ¹Ú>M³g‡ïWM£âjÔ»n\nÈ ƒ^«tLµ·ÓUc}AÃVRÜúõ™@;ÕX-<sÔ<×t…¹C8^!P}Ì3q´d·\\Î¶LÄ3uÀÖúÛû\\-\rSlX{sàLÅNlÙåïL™ßŸnà‹¶&ZÅpút6_[\r±¢°¬ƒVÅV÷è„C~ÈIªE…?W%üUöÜ«u…[ÓATAW\rü÷•¦\rdáwøßÅV½ÛkÝù¶þÏh,8£ÅŠÏ”Üí×D×ÈØ»¦Ë­|añ¸6-_1O×Ã`j…ýo?7>\nÀXsôY‘nã^cÑÙ{jÈ7®ÚÄÚÊ:ÈÜ]E\"JVJe~×.ÙQHgžT3r…cÆÙVßBceø“3e^Õ€…9®8¤\nò ™Zð(ää‡ª½	;tæzôãÕ#	üq#à\0V.\nÂS/DkË/Èk4 Ÿ‰Ìø(iJÊ`¼†êuM5´l£GÀ–'¢Ò\0n`¼‹54èÁ\rÃ5 «t“B¡}´ÞÒZH€4iƒ:x4µÓŠæ5¡ö¡æ3àæö&ú`Ä¡£úamnÍ-³ön\r©èWƒ†¤a§ØÐËMXC´õ„KQm4ìÔþÈˆ™5…AXGˆîÕ@'€€ï…ºŸÀ:L¶Ô Y 3»\"˜@W÷ƒ²¨ÆŽ»,Õ°ïMà¼õQØ[apfJÂ;…îø`ÕÁ†ÈØc=RÞ°ËÀ¶~ÙV¸o¸—†éŸ¢žwócXn‘Ñ‡8K8t·j×â'øt5Ôèe¯B°:øãkx®yaîà£¾­ý‡›¤Íð·Fn×	”îî |:a09¶\$ècuöfâ\nï‹‹˜‰ºˆw>\"ÏËaˆÆ!8~Zð\\ƒÀx‡ºM‡¨#ØŒ·‹JÖ\$À×y‰HhMØQ‰H \$ù\0ó‰ƒ]ÀÓó‰`@3bS‡Ö#®×Ñ<KXïLµ…~Xf5S…¸«˜haw†˜åØjÔ6þ–§€^Ú“šŽß¼˜Õ³r€#€ªÎÖj\0%\0º¤%q;)9„ãg‰.Æ,bBD®£DÔ€~íË:rX3¾¯\nvßÅL­ü5Ü0 R•ìê¥Â/Í²NÐn_¹–ƒ‚!…)SPÒØ¡%þ0†=»ö+Š@BÖ9ùof`œö~)=§DŠp°@L>¼wÐˆ‚¬?L§2YIÌ>»ø!Ì?,šƒì@€÷Ð[ØÔG¤>¼˜ðÃÌ>÷,ROsÅ*dRð’cG¼Q¬ÜÅG!ðÐÃ¹œs°èÃq|øåAóìXqæ£ÔøPP%Éñ\\Px×Ã¿TI8ÖÅ¶Î¤s#ç£µ#„ ÅžŽˆ #ÄÏL<p_Å¹Ûà¼ÃûŽ>¯lEÿ;Cøô¾ó;øôÈ#£ÝQ}H_LY˜­Jy\$ÒKL/~=1Jãñ(ýÿäÀ¯ÎÇÁœ0d/\$ÙAe)lüÅËE‚­/ÔmÏ¡É54)QÅ€—ìt±÷GdqQÅÇÔQ1E£Ž„p0ùãÕ	ôd13Áñt¹!CÇæ?™\$ÃñŽ^>QÌÁñ|¹!B?ŽF9!cÿ„ '€WhAñLYÑÃä…pû1—Áñ–K±\\¬”y*ä½&ÆM£éA{Ôð~d=“Óà/ƒÃ“äpdå“tPRjÂæEAäí‘\\(Y:Ã\n,yP@iDy)9B\r´!Ód‡f=ÙLÄ4p d >ž>p™d©•V˜ýÂ•	–KpïÂe&PhBe“&Ap™dÑ'D&Y6es“ŽU:Bd?îO†å5\rŒ'Ke•FD™de•FE¢Cõ\0t(ï—´“|)-Çó#”)ð!Èm\nÜŠðl4?[âÒ›I\rL^r5cU1™ÒÂý\r,Rr?ãdRØãÍÜsÃþ£7&Ž^É!ÅõÔO1ðF°ÿÖ[Ñ-Æý,\0ù)ø\n°Æ¤BÃéäÓ”}¬ß?‹”^a¹æ!ó9pe?•»ùêf1n)ôNÎ†û³¢a¯~í¦ÓWËË}†eSèŒø>Ëø¢¼ÒJOÆæBµ\nÁ¡Pœë%\nÔ*AIleq™EØŒä^Ñ}€QD2p	G•ÄfmJ”Ðü¤íÊ\$Ë}Ò¹+’³-”ó5Eôg\0QTF6ÆYì	#òcé*ìÊƒçK4@[s‡Î8L¼ÖaN)CX•DÆ[ImRò\0006N9fƒz3‘ÎM=å~Ÿå9`%sgÏÝ=>¶‚ÏG9Œæ—ï¶¤T´ê²ƒ4ˆZø„Ïtlà†ç‚³86!‚_KthIÁŽÊÇvìÐ<LìC¢7I/!6t“bQû.²êÔŠMÍfÚózOF\\Î2¶gj\$²ò	‡OþçU@Wº54Ð™Ð\$öv´‹P3-Æ,\\Q;ž½áPÍ•4½·ºÚNGH72ÈTèè—Ïù6iSjgŽ#üÝÌ¹T2ãùŒ@9Ù7@l3ã˜p\n€\r#<O—7ž\0øNu;¬ý”.„¬Þ|õ“agóq††Wç”¤ùrÔO—=Ê©ö\$¼„ùy—Lßb(×Ææ]:…Iè(nqó³ÏËI`‹Õ„ÖàÉ†ÕÒu@%!Àœ5;ÀÃÇ3èK¡Ý`Ü›C,œä¯dVq X\0003Nù€>ÓOo3x»S„ÌÆ#³ÓÐ1†õ(©XIeVòÉÒx%UTº#q¢Np ‚Ò#\$­Œ®L)×f|CÝ3´»Ë¹Mäßb¿MGÍ%d4½—L»]KÁ³±èÛmÍwš6Þfé…˜è£ 8\rvÜËu9ÀrÓÔA¡x‹á\0h^‰´:bdghE4¤R™}Ðx˜ßAHÙ|ºEÝ¤9¡|ZIVs¤N’ºCÏ—.Ö‘Ö¢çnw<õZNÑDC.Ìèªò¶Ñ'IEµF=Q3?rÈ+K[Tô®—FÔÍ4\r)“@Ñpx—OÑx3à4ÍÌ—â<ÓÚ`˜qD…ò…0ÙÇ¥…óÍåè[A€PõÕiœ”‡úcXÛIšÏZé›EØdéœí¶4YQY§ô\\éÉE¥®óQEÕviK\0B\0WÚÝˆOZ?fOkEÇÙ’ïB^dÖ·éöâèLó1M„Æ5¦xÔÿ¨,+WgStØO\"Lý¨6 SH=C¬æ¹æ54ms:¹”eRô4›[‚&£¡¨£”:Ýšé½jûÝ#mºÓûÙ‘tÕ–6©•©lÕŽjbX5Š.KÕYb…Igje©ÈLú	)j–§\n_VÆ¦öªjwLÜZ¢j•©.§N™qT¼èn:ÉCIx@4Ô—žctÚ¬IªÝRîÍ.1~«:°^wö¬c+j¾s½€ŽóêÓ«.­—òƒù«~­vÓºg«–ªoJjÞÔí´»©,î¤Æ/!ždî­qêÿ¬%È\$Zb\rv°†·cOV% Œé×¬EJ!g5Ü(þ°õKÎëB£yôk)«R:Ìê˜ÆŸZÊa9~oÍŠênµ\0¨ëTØÞµ‰+ë\\Ä\0000¹›Ü‹‰ŽÔ=ƒ_¢Þª€¬…hmÔs—ç˜e½ÚÝjKzÐ»oXž`­DÕÚ¯T®¹€•¹UîºKþ-g€<N;žf¶ÚíU\r5~:îiõ®ö£¶ÆQA¶yšòUCÐrš’ëÕQLëZî6<mµ·*ç™qíDë‡|û Zýk¬ôg\"ñË­«kÑZ¦ëý=0IÕçëøêŽÀæM^ŸT½åZåë¬1¥Òº’™Ð^ÑU8l,&Ã‘Ýå}P6:’Ë«:vÃºIÑžfÄ{·?°õí%ÌlCžfÅWc<ß`vÄõKìc°È5{Þ«°ÞÄµ9lh|jïtä>MNRîôæ=Œæ(´èŠøZôD…=SÛø°lœ,95M¹7/qÆÉ˜°ÔUAÛCèS²ÎÊa…^ne~Ì\0º—³²ÕámÍ)³(%€¬…¢ÖP!÷3ìÕJFÊ;&ìÍ²–ÌÅA[¸‘Ksñlë³FÍÒö1Ë§ÜËV2§8ÖÍ”5é´p!!lü	VÏ\0–m\"1øI–\rí±&ÎÛIm3´¥ø5*‡|Ûågš.Zü¬N´tˆ6œ2å€³qMZ¦®c£ô]\rt-‘k ÄåZà/A¶Ô{YèpåíåWÉÐ›sÃ” _tÚ†vºàC´Úi;Eìã«vÑÛIí’.Ñ„Õm¶QŠð¶‚ŒYÜ™3#O…”ËGíšâ°mÀaÀZ1úáFƒUJþ±t!s\\‡¨M‚ÍÏsÜ´\r‹Ú«·£1H¸]=,²ŽÍItŽ×5(ˆ5Ýèx«X5o\\ð€–“Y°ö‹—§ˆÐVmARuøY•Vszˆ\";…Ò¿?;*PZ­,úLßA3X•U^§!OÙRÈ‘eµ&å4Œ].qáe:MÕiŽºf…	5cÃ3Ö–²ë}7t.·­ÓžvŸÏhŒë9Þ‘°%¥Aå€;Œéè:úõ³7z„òôh™díÕW%S]h‹¢Ð©{“É÷öâ×·Dùá;Ù¥·e³ ã]i¼î;µg&µV›¸]«»YOâ¹õ,>ä äÐýõök€Æ2åÊàÛ‚\"±-R@2à%þð€úo\rTRS1è_¼eÄ!C£_¼EÖ–UÉ‹µåuà\\ÙyS¢/Ë¼ê WÒNmJø!·¨€ð@–ÙÐ­P\r`9M¨ss#|X½ŽönÎµ½ÅïA¡ùw^õtýîÇtìÜZ?=´ÓÌ×èý§¬þ_eB•×\rèÏû`Î}óP]ÞPe:›èXÕºØI–UNËë6é‚CSíóòØÎÑRéoúMÛ­%Û–žõ`À¡PÞs>@CÁ!]EUj•ÔüNíûƒl*B…{\nˆSYÅ‰ÔúƒuOP&¤ÄÔ¿ÈDU\0^e\\\rõRLýµÞ¶U’¹rV“iõ5»·fóÀ¾í¶~Î=t¬ëU'ëèýŠ<[k=ÏUChø.Ý|üà2ïURkËÍI•CpG°é‚£!@ –Û<ƒ@õŠ¼Þã·¯µ'Ýfâ:?J0]T5î7YèeGµI÷¸ì­ÁfØœ*U\rS \rz%ðGuYþU'²ãÃŽ!¿ÀÕPÕÔðK®ø6œË/ÁM4<pËÂ‹öj3UÍIî\"mÁ?]í7*Ñ¼×|õsÁKA·ý‚FWÜö5üÕÀ·L6UÝ\\è@ÅÅäó@]t]MÛ6ˆ”Â\ro[Úmãž®#Œ­BÅ\"+ñ?ª±OÉöoÝ€eoXÆMv½Õgƒ\n†­Óö-ºu\0·SÄ\nèT<X_¡O¼Zß ×œ][¹p(¼^ñ…tàUiiyÆ<×`8ñ‚Uúöñ˜àÅÃƒNgFÕÏ2ÜW6{„dÕEÆÔË»Á€êkn|pNMµ<››„¼GÇSqÑ«ßÚXÒrqÌ·6U\nð#:qñ=8A9Ð»ÇÈ_Á Y;ÇÝ@õ½r	nFÝ‚ 7MsÉz€î^C¬ˆ<ãÄÿT>\\-žxð\\p£ØÜrqÙCV·31LMÄtÔ«j]·¯àAXöÅ×Ëßy¡NÔ÷“]Õz¥õ|\n]ß²íAS¾Ñ¼UâÙÉÍÛa'_w\$ñ¼EY+»ÍçF6]h%»‹ë‹¸É>Uôí'ÇŽûõtË]³G*œo—]+'*wñ³¸ð•\\®„™ÊÕTØòÅ´ì¬€1\0Ïas;KrÕË`\"\0ŒZ“Æþä¼µœÈóW.TÜ‚¥q’ò\0×T!Ç¤Òã*ÚÝW€‡]lrr‰Ó‹oÏÌ;*•z]!€uªõ¯O•Ì6Õ®\n`4/se´TDH.èŽêCW?7E¨é%“î’X9\0_gÈ<U_‘xÅKM¼ab¤AqOxˆ•\\Urá´·5œªÐhÚÍyš­Nµ[&”žqV¼Ï|â¶¿¼ìáõ¡ókTðU_•Aw9Üåîi7=º•”Ù­¤©_Vð6³¥7;;8íNEø&³ep!\n´¦ÒŒù¨¡ˆQ -³ê¡`êá4Ñ¾\r¸8Ö `à-€t\0‰ÅàÆc‘•Ø:l”CñgÁÜî@ÒaB—þüóŒÅ_o@¸H(7Ï_@`‡á*ÒÁ>IÕsäÒÇ>œû`×„ãLM4(ÓnÍ'‹…+Ù­ô&Ó£OøVtZÓÙ	\r>´ê #Odá^¡Žm:ahÍ)Nd).)¯TôtÔO=Ï;†p®fWt‰…ö`ò€Ý;l=)‘Ð°žíu[µ¥|­¶tµÒ°Ã\r”¶%ÒÙ\rˆ¶¡Ò•j½2ë,×J½4Œ0â{bI*t§¬r÷ôÈPpkÝ:¸?ÒÛÄ<·åÓ·J|\\tüá“Ó#ô„4[}ô™Ô8‘Øj\\\nëº?»/‹ëŽZ¡õ\nô×G}ômÒSÔ=E˜çÒx@X¶\0ã_J=K¨zöG\n´hÄWR05yŒÎ´çsÑÐ>=0Ø³¥|“Cì¤ãNGñ~ÂŒæRý]Â•Œ/ÙbÁ—	æPÐ‚å5”†ZÏB•\nÐúqÒ¤¤÷¡-YvÁ¡ì¹|É¢ŽœgøîãÉÖ`€*æüvHOŸD“4‘›ãÛ‘ŽGQEãvboÜäWó¯ÿÀÝ×Œ\0±¥¿\0003öQœÀ'_>@÷‹ö~ÀkøO¾¹_#ïõöøï`Ïù¾&<íu¿ìŽ°]È ù¬”¹Æç'†:ÑNEÅäÉH[‘Á¤-‹p+À³þI‘ÏHù“ühÑžÆ~ÿD¾ñ¡F½/g1£öwœ&0ö´Ed ÏlÄ÷hÝœÇ}„{qìä\0Ñ­FZ“|žÍv©ã9ÔÇíœ€ƒêH R4ñÈ–@r	Èl…‘¾#>?\$rñ3À×’61ÌIAê62Â»%ÔlpáÃo\"4\\à>J@Ðü‰ÍÈ¡\"¼ŠqyIëßrD´UšIiwÛòÒI\0\$£CìàÉI%<0‘fIeÐT›2W¿fäZñ~Ç;&BDCéÇÙ†7ÙeÓt5OàÉ£&¨ÑFBÛDñNI®Œãû]~@ìQ,´?)ža1,3™ ®a8J˜üh\"3pRs-¶æÀÔNú8æ“RYh\\ËæÖÚé{¦3F·ˆu5¢D!?{åS÷¹Ç\$ƒç19|ãE¿Ì§-¼Ê¹µÍš­\"åÓ´5¡syÙå51ç‰6'y<Ck‹O¨7w]0¼„Í¨îSœ SÞK“9tôyÃ…	ha¤:–MÈ0R¬çnÉ\$Ö¤K;;˜ €ˆ¸GÊ°l&B\nÁ¥Ð4\$éiE6–à•l²xû\"`·ŒØ\"huUŒõ:5Èí#Þåî÷*Ý(€4ð[7œ•¡,?îå{YÞÙTMs!€Ü…{ÒÅ“P\0,”Üâ)\$~SðßÐî¦äƒcûÀø¬±G4ÌÅYºÊí2s98A¤WÂe~ïü˜õP¦SUÜpÕQ–ÁÐ¿i÷;|­]©Êýë•P9PÁ3S–ªú:eÉý5ïW6‚Œ›#÷}_!tpYX^ûàúÍÇDdý®Hëéâ×4ÔPnŠ\\˜¸ãf¾£>MÔc¿äµ¶°ºÈÙ…¯:—Ñå\$Ó@…ÙÏgO•gùIu£\\wBŒéå•­^±VÃžT%jÅ#¸[¸òÉåÕéÂäó¤Ãßæ#q—voÏe;›8uæbI\0–ãq[¼òìÕ>3ôlÏ0ò Á‰\ræÌCJ&ô1„§=Ìü§ÍÏÇD­2\rˆe™5}óãÑ8.Ý€ÛÑšÊ^xYÑ¸'€.ôž*†CyÆÕ7S˜fœæ \rË)8#Gˆgë%‚V*\0a‰˜Lìf(s˜ \0b¸\$¨Ñz0¸\0€hŸ£À9ú2À`¡øâß¤Ë8\0jÞ’ú2°\0\0ké—¤\0úAéÇ¤`\0oé’Ì€úSê\0\0z}é—§Àz‹ê@þ”úè¿¥¾”zkêBÎ\0\0sê` zWèÀ”\0mêß¤À€n°’z¡èÈ \0nçÏª úmêG£~·úÏé÷­Àzqë\"Îª\0oê7§\0úËé¿®~©zŸég£`€rŸ®Þ¹úFÏ­žúj—±>Â,Éê·°Âz5èç²>úF·¦-\0Ä°~¿úÁèÏ¤\0ú¯ìðÞ±z…ì®Ü¾Ð\0aì‡´þËz“í§Þ½û;í—«>Áú¸‚k>Øú¸Ï¥Êú¹éG±¤\0sëß³>–€d¯¨þ¹úÔ‡¶þúÉí§\0ú_ìo« \0kî­³‰záëw¶žâ{£éo·ž—úqêw¬ÞÂz›è×´~±{@¢B@1û ‡¬~Û±_ïŸ¨ÞÝzÃì¾ÀúËï×£>Þz»êÇ®^õzÇêo©Þ\0síµ¾±z¬™‡®~Ôû­êG­^û«é§½¾‘€gîç´ž½ü9îÏªÞ½\0sðç©¾¦ü!ì·µ {ûì°\$©¬úqî\0¿\0Ä¨\$ž¯üIî\0ûð¦¾Ãû}éh {·êÇ°þ¢zýñ?³_\rzˆ§Á~¢N%ï­Þìz¥ñ'ºß{Œ ÞÆúÇê/À úUêG´·z±òÿ¬þ½üîO±ÞÐ{iðwÍö|›ó/ÉŸ{ïwªž”üÛòÍþÙ\0iï§ÉÀûÇé?Àÿ\n\0ièÏ¯¾è|Wèÿ±ûQðw¤+ûAëï¸ÿ?úÅé×Éò{_óÿ§ß ûÛî°^ôú¹êo¯ž¹üƒìçÎ¿R|#ð©ž¡|¥òç§š€iïoÆ?2|\rë'Çžš{‹õ°ßzÕô®&{±ñ_CúÂ§¤íËì?Ð~Žz™ì7Íœû!î7¥þ•üëXazãîƒ•þùz•óßÅiýƒò×Ãú¸Æ?_ü…ïOÛÞ¼ýEéÒ¾Ò\0gð²@mz‹î×Ìë|?êOÓß {­ò×§¿5ú÷ö·©>×ü_éàÃzaò_ÄVû_öè^—N%ñÿ´žÃý1íOÕþª}\rôw¥~ûý·õ	¿y}ë?¨>ï{ýõ¿¶_\rüôŸØžž{ø‚ÎÃ~!î°\$¿“€gòÇß?ˆüüØÿ™€còÇ®à’þYé Ÿ“ý÷úÆŸ€z¥ñ?zUöoÁ~è|—ðŸÔ_!}ìÿµ@~_é¨>ôþ5òçÆ^×{—ôÇ§ß úáîgÒ_b~wùÇ³þÐû—ñçÚ¾²ú‘ì_ë_yzí²k2zîÐžÿzÓðO¾žì{Sö®IþYëOÉŸ•\0mø‚Ìž£}Ûôš^Ÿ´{êwåÿ&|úð¿û\rû÷ß~øûæ³‡¶?­û§ùWîßûù?¯ß¨{-é‡¸Ð}%éOô>õ~gî?§Ÿ=üyòäŸD|™ö_ÇúkýŸØŸ6¬áèïòß¼}Sþð?\rþ‘ê¬_;üiîÇàßt~©êoÌ_8Qü×©_{YûO¬¿u|Qê÷×zëùïá>Àÿþ Ÿ~ýúOížÄ|ïñÏÍ¿Ãú‡þ/È_0{Còï¬¿±}qêÿÚE{%ë/ÑþÏ}öñþsÿ÷Ø/qŸI¾©\0jüÕõé×üŸŸ¸½ó|0üõþ‹Ùgù/ßb>í{&ùÉïSëG½¯Y²=ç}ªöÝ·+ðçË0¾¢z”þ-ì{û7ÌÏ«_¥@\$÷Yÿ‹×7ÜFž½=~} ÿ•ï‹Õ÷©¯‘`=¶€<ô‰ð»Ö'¼ïH‚½YÖýæ\0’q'àoŠ¿Å€øE8“óWå¯äÞÜ\0002€,ÿÕüCÖWÞ`^¦¾:zöþÿkð÷íKŸ`¾í{j÷5ì³éÏoå¾Ð~fõQìcòÇª¯–Ÿ¿°~@õ•÷ƒñØOžß6½M{Íqñ£óØÏ™_-¿,zšö™ùëùWÅŽ`?3z¦øEèÓòÇåoµž½’ô|Hû´'¶à@|DúañçÇÌ¯M^Þ=pHô•ësÒ(/sžíÀr{\0¡óóú·Ç/½Þë@R\rí“í‡§”_>¿'I]ðÛì×¯Ïáß:¿©FùùñàWÝðà>e|`úéî„g­O‡ß¬¾yz¸þêSóØ\npÞè@r|öùié·òÐ6Þ°¾´}šõŽûÿ·¥0ŸjÀH~s}øÑ˜\r¯œ¤Àì{\0!é«á·Õ¯HŸ†>4{¡\0\rüíG¸ÏRŸ¾ƒ|¨õ‘ñ#ÒÏzž¿A{~öðûÜ\rïå >ŸzTý]éáøO¶`=À¥|Êõ‘÷#ê—þÏež‘Àó|Põ©ó[Øˆ\"/žÁ˜¯­Õð¼èOþžŒ=Aù•ñ '­ÌÞ‘?{|àùî{ã—Ç¤ß->|\\öyéCâ7ìïà^@RzaUé3ÔãCàGÁzÒúIò¬·êÐ0À?Û‚dÛ•8“ÓhÐ9@’>÷%èþ-ñƒöÕïýwÀ›{öFâ4âP¬¿~!öø×üOø_=Œ‚#åéãÖ¨JŒé|rõª¨)H0ÏVŸË¿w‚—¥ëÛÞØ!O¦ß,¿‹ƒ+¥÷Ò×ðïÿ`ÀÝ|Àö>ÛÒ‡ïžÞêÀ}a)÷¬7²ÏÎà»½êzk\0väh!t4A6.KÒ\nÃÜÇô‹_0=V~Øú¾3ùx\nOÁ {@BŠûUêÄ‡£ïH`åAd€pù•÷—¨Pß À”zñ™ööÇ¨°pÞä=Lz5Yê+æ·ÙÀßí>IzÔý¡ð“ìá÷ O>‹ ø®	sä'«¯÷^Ð½ˆ~Nø-î¤w¨Oû^®¾Z€9õïˆ>°>Ÿ9¿ïƒVõ}ó»óª ß–%|bú¥ø;×8AÐFžõ¾½}Mæ{Ü8Ð q@ƒÿÔ¨(ïöß¬ž¿y°ðÅçÉíš QÑµžì#Ž|D÷R”H©!ÃòžÔEÖ<ø“3óöˆ»ã#„xƒ!	º'Z)!«ÒFoö\n”I”¡€KA’|µ	 –¤0ð’‘\\¤JuÔ…Žº,t<D”˜ù1ÚE†ìí/Ø†F°Ý¶ŸR„³	‘*TÃ9Ýo2\\E\nÁš8MŒk‹ŸÚ@‡	Â4D^Ñ€¤Ð˜–Á[«5àDœÑG¢ìA&ÇÖ‚\$–i§íÃì‡î©	ôÁ*çÛ÷’\ndh}±t)„whhlBK„¬}qrp\n`QD‘œI¡	UêJ°©ò;®…PÐúâÔW°¬Y¢äc@|.›8MÐÏ¶\"ÿ%B~Ü’’Q¦a-þC‚%šx6SF0ãˆ‚yad¸‚dRÿ°}ƒô,¤ÏÆ¥ŽJâ¥pã¹ÁZ,ÄCëÂÛG”†ÙÂ˜L.¯á#…\$,:Ø„ré‡Ù>žÿu“	…š5CÜÈ	„!>vÍ~Ê\0Óâ@·˜ø²¤„½É'©¢t†Çºó¢ä\$ÞËH?,0pp£ÀÌC\nG„ËF['è`ÂÁª2×…·Zùá{@aQ½ÃBâÓÀßÈŸ ' á’éfKª\rPøÒ(_¨pá/ ·Ba Ñ`Sá\$ž!”2Ú†j‚æ\n8\0jŽÙ‘ƒTXnDÛêVr²ˆØ¡s¦+…Ò‰Å4hQ(¹\0¤,Jà]í-ÀÄ­¯‰C1EÊM\0ªðÎãÁª!hF\0¢ñþWt ·™r¤ï†Z°¨\$!@R{³F†ÂˆáªPHÆQ”¦†9Q+ˆafb¡’\0(eÇ‚ä/ä\$*ÁÔTù\nEùU`Òæ¥^ŠÉºBð§†BL\0P’Y*8T°«€«C–I<Íš9t”h,¡\"²#hJ…\0‚ôÄ\"ZQN€(C\\{ñ’ô5ðåSC–‡^Æ²óãñPí!OBé®“NŠ:Hx'üQ91Å\$Ç‰!÷À0®»ØãÞCy\nS(U¶¨¤Âî…u\r3/t\\‰8“ Ž#8@¢à\nìÑ€9ÃybHœé›*7]R_3^8ˆ‰à>ò'„g aY~ÂEC`ì\0+»àj‰Ü\rØ8Žâ@£­ÈV`\n\"3D\$pØ€®°	8DD¾*5DGÇÂáŽ…wIQõ°	S“\$ÄFYÄ1ÌˆQ† H‹ÁDx¨ŠÛ²BcÖÉ+®FKÄf[BEL˜\0­“¯OÁÿ@&’…Òƒà?ä*ÈTÂZ¡TD:CŒtùÒ\$ƒgÒâ²J„‡\rš!‹\$xX(âb#!÷†Š“®\"¨}fEž¨\0PDÔ\róçÉ…¢*²TˆÊí	:<Ôrè Rv€C„‰ýØ[%æJˆ€¢-Cmˆ‹Å”#´@ú1PB—ˆðÌQq\"Hl„yb7ÃØˆdÊ\$FÄò¢C³@©žà˜LÑÐÃÄ\$ÞŠ\\EX’Äœ‡Þ@ý\nÙ’Ò‘‡îv;À=úÈ\0ID9\$lb*ÂT‡;\n~\$l%4‰Oà2‰ˆª˜é2	&@(Ù!D¸ˆn†R!k%ä\$©-\"`²„?;%S&ôÀÑ_BRCš~©ET4.R¡¡‡?bG\"&‘ˆ˜¬ÅéDQd„ÉÂ Ò„›R6 ¦ˆÔ|.'\"¤Q9â6(ˆÝB%ã'8™§â¢r\"*ˆ‚6'D(s€\náËDù=÷ lET‘,azŸÃŠÚ&H´¿QP¢ÄU‡žË‚t3ˆŠ±PB¡ÿ…ø‡t’HÄ&QØöÄŠ6Fd”ÌCdVqas2š3|Â!ó1¨H1aÍÂ§‰_¥	”(3þ1’0ÄLŠUò\"z+x†(Lñ™Ñ#ÝQñT#‘\"’²ŸˆëpDEèˆŒp¢1\0IˆÉFhª}uýC­,Nè±F™MDsF\0LGh¥ñPZ\"G›î*œUð‘¡u2š‰’„OZQŸj‰ÇR+\$I¸eQ\$EyH^%AúÈ®‘^¢N¢¶La%W8­¬§âLÅt>¥²+¤JèŸ‘,™³L>‹A‘9¢ˆ¬‘/‘Y²­Š¸Ê~,ä9”=çãP™DÃBOv+¤Lx´Œ¦ƒë¤‚‰™	FÚhšÏbºDÓÑÄü:,¬‘I\"ÅÂA‰»­”üN¸bqÅt‰Ë¬¬F¸¬‘qâ«Â¸Ùj+“4fWñ<âá …„f‹&.¨~ÈžÈöbÅË‰õº,œSSP¨âÂ¤ŠÉ\rÖC°˜\\l°â„E½C7­”üPØ®‘CÐ»¡€H#’(£!T›qEÏÐÅ‹Ç¦!¤Rlñ\"m3‰Ìg.)Aô8ÀÑ:áÍB­‹ÁZ0;j3Še%%¦ÇÀÙ†\$oŠãèük4‘PÑ²ÆAM\0ôT˜‹ñb1Â÷cÓJ12(«Ìz¢äÅÎ?ÍB)ÔHÈÅñ\":Ea‰sA‘4G×vÑ‚ÐèEwE¹\n´XD:‘_\0#ÆHA\$~†\$‚Óõq“£%æ\$ñ#è±,Ñ˜ôÅŒc®2ã\"h²Q†E–‰h{þ/k˜´(Gâ]ÅÿdM®/ÐÄ1›ÒYÅ§ŒæÌ2-Tdèµ¤ƒ^Å°C€q¼[HËñ2\$Å·C|%ùï¸L,„PÄÔ‹q^»!À±‡SE¿Œ44ñsc,²&‹˜Z'dU”ÑŽc73HÙ	J4¼]Hw‘ãLÆ\rˆ‡‚+iFDpþ#L²\$Œ.5’“þ±®@«EôBøÉ~|kÄ0!<\"ŠÅûLmhûáy\$¬AþÆÏ#Ž‚60	 	ib ¤ŠAHúl;(ÚÀ\0/¡ŽAH´H˜ÛñdçÆˆz}\rÑ¢„I0ºb– rEÁv7jD¨Ý.´cvqŒ¸Pt,Àùà£&¢ìJH€%#t)P	h8€&ƒ>¸Ê†\\+d)JÏ¶P\0 kÜÂ„7ÐiÐb§B”\$åZde3ë‘À£‚B”A¹û¸W¡ôøBÀ?C	z7œn¸W©ÈÍ¢#Õ®6é˜åhå#”ŸêŽf˜á/Ê+ÄÃ¯@'ÜcaÖ!ü,?‘>#¡!]iö\$º.\0	ÄxãžCÂ…c²18ê0ŒFýuÉlùñ 	ÉAé2WKì—à>¹ùÔñ»ã¯»:F¤)	øçf©~P¡%ö…Å­©ÿh	pÃl¡’4FˆèÜ˜ûÇ@‰Sª\$’(åñÞCé#kŽø|T0hðñ·£Â1«EÈŽüÿ°(ïº£ÉGŒ(žÜcäp¼b˜¿4f0ôy˜‹hà!ËŠ‘\"S²ó‘èG¨\0²ì†=.hóÑèÙ¾ˆ¼F¢ |.¦=¡õÙ…G²Hopt=rç¼ÝÓ2…å‚=¤z¸_QéãÐ:Ñ2²>ÈóæoLåÇ·Fh€5/¹&çæ#ì\"	HAÍ}ØûD“\"Â÷Dj-1øÈ^QöR2 NŒ6Í~?dw†1\"PtÃ\0ŽÒ„¶<œˆ©ÑßãüG–BZF?Ê&¹\0ÿ¤!0Ž÷q\\€pÿ!Ð£{â¾?øÒ4è¼\"Ã)^(W¨H¡ôH\nŠõ'²\08ÞÊÎ\0_BZŽp>ÀÓé°Ø\$n…ƒ^A\"3Ö;¨¢˜êGòA ÅÚ<kðÊQ.È1F« ö’š2aœ\"A&˜ùòtm#d\$Fê\0šLúz;8òÉ€\$#€¥!1B3Øâ aQ£=-í;³„gˆ¯¡¢ÇJ­!‘Óâ°ÕÕÆî®CzéÐÐ\$GßË	†C©*t`È‘d5£b M	£! ü’Ñ_\0S\r^ä‡èüôÄµC]\\¾ÅjBÜ6Ëò\$cwG–w‹’9j&¯ aO©\$‘4…Ž@REè^áôD´ÅL4,7èÜˆõãŸ{=Ê”?K%±IUãÁ£*G\rPÎâ0Ø{².Y`3	DìBDŠ'hƒNãá¤C—\$„GñøÆh\$cÈZ‡»!ê9Š0VR3Qâ¡ÿ‘¢~6CÔ€©2£uÇ‡0ƒ¦4,MXrG¹ÐÈã\0œ”:ü9ÜÑP\$ÕJH‘/üy§¾dwÇÛ@=‘1N(æ@a@()\n3#ñ[¯yôä\"ÜLsŠGà~˜^älÉ HDÔˆ.<y`\n\0À\"\"ˆeÐ˜†H¤}(‹`Õ	,F¡Ûj¨yh	Ð¡\"	DåvI<|v([\$\nÃË#~\$÷,;<d˜Ø­E¨‡\\h0zY'ˆ!à²¤@J”u!(_0ëƒôÆÝ@°„2\n>(EèÑÏ¨GVD“\"•Äi)6\$y fd~€fC4d:¤ †3›²¼•âJRWHÎF¸A‰À ÀC TŠ–Z@Í%¨Ìq2.(£rF…’‚9”„¢	PQ#G’ºFRbAŒ¥‘?‡Ù¡\"ù!`\nÈŸäÅGiG8‰ü©ï4ÚQÎHCAbLš(òh8¤ÍG–“8M,•4¿HñdÏ%NÜ~YÜœŽ”ÈÑ.»;@q&°ûs³¹5k3B¤@å%uœƒù6(Ñ\$× ØU%š7²'ˆHgìÏ¤¤	I¬‚6!9ñèL1	ÒŸÈ‘\$ñ&µ\$›95L‰#nÃ²#6{–¹þ£Eääí -'v@Qù²8ä…¢\0Ç:?GN7T@è^òhäHÉ£,•\n;Hcv-@)ŠbfK“5é>@³¤úIö\0É%®Kh¶°0©ú¥ŽjFs)âÓ|P0©U#‹°yxZ§-‚á£CC€þ¼åÜg¼‰/.O:ItFçäÓšCM€]¦ŸP`XÀ3àbŒÏ\0.&llÐÀ3Ò‹ÀÇ46<h¹Ô4¡F(Ì-K+øtˆ¼\$qªàAÌ0\0001€d\0^	í3ÚÄýÃ–7´\0\\ðOÎà+\0000z&o}ÂÈm‚u°2†÷JX6ÂRÛÔYK¦õ¥,†/\nø\0ÖSciÒ˜¾\0006”ÒáÒS3óMò™e0€8”ç)|-¬¦2å5ÊyH’SâÙ©KR•CÑÐ”É)âTR²¡¥5J‚_)Tœ¨Bä)À’€4•%)‚R¬¦‰Q’œ%J=Ð•/)æR¨ySò¢_òÊ£•üúU4©IP¦å:@V~ñ*¦Ut¨±cÒ¡å>Ê‰~³*¥íÛÉW¢¥TÁ@•*ÎTl©8(¬†•J´•~\n©U’¢Á@•-+.U¬¬ØAÒ¯@’Ên•¡+\nª)Zò°€’Êv•·)‚\n§¹[òž`o€0•RùUü¬YX2˜#ÊÄ”½+DûäyYR°%N>G•Ÿ+ÒS£äySR¾%fJñ•«+žS”®9KO‘åoJü•àùW°iXï_¥UË\n•',2WL®ùap%T½d•u,1|±i]Ò±¥IË•ç+ªTä±i^òÈ%:K•÷,’Wì±iZÒÃ¥0K•µ,²SÌ±i`²Ê%xK–,ÒV<	\\ÒÆ\0/Á –#,rYl±IgH%Ë–;2X«ÞYi\$ÖeT½–/,ÂRÔ´écrºå<ËN–‹-Z¬©YU0	åŸËT”µ\0žZœ©ÈòÕå¯/€O,ŽZ4¦òÉå´Êy€O,®YÄ©8òËå¸Ëj•»-nUD³Ç©RÃeºËn{y-v[´)jÙ \0Kx~w.[dµ‰kïo%¸Km—ôn\\4³9qÒáÓKx€­.Z\\§H ’ØeÍ=¯–É.ö¹iq2Ù@/Á—.*\\#Ö©rÒä¥Ô\0_,É->[ì¥©uòç%~Ë¯—?)Ò]|¶‰u²ëåÑÊœ—_.ž]\$ºùn’äå×Kw–y.¾Y¼¼BÌ’ß%åK•S/.]¤¯	yríåÚËH—-*^¼´É{2ðåÝ¾—žø*^ü¹yzðN¥T…|—a/_4½Xòù¥êJð—Í.ê]\$¾iw²%óKÀ•9/š^áÐ³˜²¯%Få”¹/ö_Ü¦)€>%iÌ8)+þ`1Â‰`2°%ÿJ¥˜qŠ[ÌÀÉró’Ì•_0<ÞÔ¸)]Rÿ¥[Ìw/Z`”Áits%àL—ó0r]d¿©‚Òòf\nÌ—Å0†atµÙÏV¥4Ì3–É0Î_„Ã9„rþÞ˜L5˜y0žaäÂ™†rÍÀ€izÒû2lÂ©…Ó&#={zø®_óÚ‡ÓwÌS˜œJb´À§¨Sf?3˜¹0eðÜÅùƒï[¦1\0s{ÿ1•þÌÆ‚^“=Ìl˜e/íõ|ÆÉ†ó&Ìp˜w0òÄÆÉˆ&!Lp˜Y1*`S×éKæAÌs˜ôŠdÇy€ïŸ¦AÌ{™1öd<ÇùÏY&4>Y™+-NdœÈi€ïŠ¦JÌŠ˜örd¬Èé“ó\$&MÌ’—öôrcCÖ¹•3&&SÌš˜õîeLÉé‚XæTÌ¢™g2’e|Êi€R¦4=™{2²eÜÊé‚µf^Ì²˜2ôÖeìËi˜ó.&aÌº˜Y’cCØÉš30&gÌÂ˜2ùfŒÌiƒïÒfhÌÊ™·32f¼Ìã…_&2Ê™Êö¾g<Í`7`I&:°ø‚Ë3ža)ÌP\$“7ž“L˜a3ú´ÎY‚“ 1?x˜ß3¹ëLÏ©OI¥ÃÌš	3jh\$Ï =¼Là™×.Vh3Ö™gs=æ~Ëäš#0Òh¼Ð7ð“9^åÍšpRb<ÑÉ¡ÏIž«Lå˜¥4Fb¬Ò‰š“8æ-Í(™Û4‚cÒ‰¡b&“Lâ™û1¶h‹è9œ³fœÍ}‰4îhCó¹£ó8ß Í;šFüîi±½§Ü“Dæ\rÌò|i3–d\$Ñ\0óT&—Ìã{·5BjÏ×§C{.g\0Íê	1¾WÜ’Ý&®‚šÀöÆkÕ°YY@æA:~E3òjSÜÉªRfuÌ”š#2Zk¼Ò¹Ÿ¯h&rÌœšï5e×y¡M&¾ÍtzÃ50éÌÏ)•SD^•Låz›6:j¬Ï×ºÓc¦¬ÍJzÅ6:j;Øiœ¯ŽfÍÍ™‰4EéÙ¹²³:ÞŸLå™¡4Ff”Ú‰¯SRžÃÍ¦›#6²jÍÉµQßÌe”«6ÚgDÐh\nÓ@à+M¯wZhDi´a§úM¸šGZl4©±NA:™þpRkÛiƒ³E\ríA:›|q÷\$Ý)¸pN¦zA:›4Bn¤Ûù…óSX|=Z›Ÿ76hÄÞÓ§fÛK¡›u4vo|Ý¹uS{æãÍ%	 Æ8˜YGN­#ídp|Ö4ÌcÅèÑqÆ¥AM¬\\_xØQg§ ²Œ½utØÉÀ‘ ¯… >DdŒè¨`\"ùF™œ0%¦pÑñX×H}¢IÆ™f9-‘2CXû‘¦P\0KJy:?L“hÍIVÑ5Æz(¼XxÓ1o#I2ñ‡Ž|´:.8Õ,°cTÅx…\nŽMôdè n­YcÌœ•¾rTf–DÒY˜ôÎunÈº1	œ²A((¢EÛ\$¡t÷DcXVÉ(!^Â¥‡[\nÞ%%é¿Ð§b,È/ˆ&)ê)T%±ØûÎtŠª†÷|=Js##Å	G.\\Ž`xŒ¨'ÆÁŠ	&2ÜEXËÌ˜gÅíAñ8QERS0 ÏÙÄ­>Ý8€”Ìá¹Äs¥u\$ë@'8ˆ\n²T91gÎ¤#i8­ÄâÙÅñBgUE˜#´Gr%¼ç9Õ‘cõN³?-8Ö(L;xšÑç\\Æ“qópÿ³PŽDäCÿ¦r\$P“ô³¬§_Åä\$¥š(LP6PNg'NÑœ¡;Fts\$);¨°'XE	’Ìƒâpì.H´‰€ç-Dne	.âØ§ŽÖ!ÅtŽ‘9¾/réÎ±]#ÎyŠÈŽ\\’\\çÙÞ(­fÎ‡ç;îpDà©ßsƒ\"é2šŒ¼ëý\\á(®“¤'Nû&îî+\$áùÓÓ¦§P»‹#:^xœê\0s¨xÈ›÷:–+¤â£ÿÑ]'VÅÙ?:ÒI´ZYÆ‘™\\Ã²=ø…‚uäï¸·Œ®aãNÂcÛ9\n.3!™Ñ=\"ã\0Y‹Ë\"šwÜ^†Xs“gžOA¯=/jÆQ3·\"ñ2Ÿ’ÌË:5Û5ô)³‘aŸËfŒ{Ñ2CV‘!Š³«5	Ä3T*0Õ­Èšœ~Š\n5¤7hq1;‰hÃ\$ÞHû.äe0ó	CÔwjŠNJÜ=©+pÊ‘Í¥C¢Š–ò(·Œt¡6Ä†‡ë ZoµyLågÅ·O¢|X¡À5ƒ\$åÉgànõ7´ùdÎ*2º'ðgB™½o¦˜iúÕ#’‚Vê)ù>Y>ÈP'Óïªò#^ý>ø´éÂ’Ó‹˜70m`[P9iiÎë¦~Ÿr0~}ë””¶Á	\\Ã}VX¸íšó5@>@¢’Ó©‰?5K€4)ù©¡gé§âkj¥R~j”ÀNóö[ÚÏÍW”›ø\$ŒýrÞSóZ]KŸ®v§{[P‡Ê'§ÙOêiîx‘§³OæÍmJf%š\0ÄáèÌS€À³³þ„¶'†pà ,•K<Õ˜RP´»•À`\\Ô³@]góyR\\8hØ `RÞ'ã7†À™H„çBc(7çf¼­1’¸c\0wMo3ÔsG@‘ä`7zg§žFP\"(Š@–mðÃÆÎH§:N3>eK:t%,†(ª´ L—MEâŠAVŸO¿M:qè¸5E‰ƒ“¨%-ŒŸ)@ŠjÚ†SL—…ME>dA“es¬•ø«Ÿ™Azˆ7Dë\nÙ‡µÐ.JÝ\rƒ5ÕlÄK•³\0n Út@\n2¹ð:Ã?Vš§º ®\"ƒ†5lÉ­³&×S†šê€Q[	}\0Ø³‚Ké>tG0T¾‰ãÃ»Ø:Ž¬\nÈj!YÞ+!Â¶š„° íŠÁ(-mØÁj!\nŽjÍ´(E Ð©â…!5@JÓé•}6 –Ò…áêT+A&¡bðZ‚èVE6iÎž«KŠ8BècaY(_®'QôÒWÕ	%`”\$£}n\\3Ì£º-4N«Ô¡¦ÆÝÂŒô5ÁEPÙáŽ†ˆsJ\"Ü½P*	hÒ‡+?åÂSë”ÐÑUbwfèHÑt'/\\xÐî¡\nrô\riF“T=¨y5¶P­A<J”<²Pæbüd*ÿP¢¯óPöFæ¨¥\re8'PÓÕ+µf¼'È¸¤Ó´D@0Ñ‘DmNê\")©À7Ñ Ê,E7X6\$dUÙî\r¢V&0¹Ú%fæ@¤4×UäP²g)Úa¦ži†Ó…¦ÓNdí7a<ˆ(¦·æ‰tJ\",áè¥¯² ¹>dë¸E€:Âæ(¦ÑRPQ S-Å84†³ˆ–OU?Í´û3°x`Gœ=gK¤øPb±ê	À'ðƒ¾xBk8.b4¨FV%U¨ÅXkJœxQŽ›ÝÌðÅá\nÇƒ/TãFŒ¥¥šÔaÏ\0m_eF\"‹¢å°!êš‡\rYm1F2RÓp I“þhÄµG¢òÔ(Øz¶Z3 “hÏ¸ém>‹Úhss4dsÑ„Qf¢Âq©\0Nä°Q2ÎÕXñ©5Ý âDÕŽ¡¤5žÑˆàTÔpû‰†k-BŠŽ\"ÛÚÊœ‚_Ñ¹^n}ùÞ¦¯thÝ£qqG8õ S-s§øQÄ¢Á>|+:-¬Ë“âˆ–hU-€x4±IÎ“åÑém×Gâù–€´hð·ôGÔ‰Ô0ÓåÑôªUËÕÚ>ôÉèB“£ðîôú”¸4.ZM„9[¸Ð…ôôôI`P:£ñC¼•ÃbÌýœÂÝs\nuÌ(V€€º–\n¢Øsú%T‰Ö£P¡'Bâ|Ë3êDæRQ\n ]?”¤þŠ6€aT_OÌ¤xâ¸C90ÍÜÁªQÖ5ÝI\n,¤TàT’«qC @*5J…ŽåÒMŸ©IT°èI¨‚£y’œê’ð>ªJ«„i&\n[I1¬Š‘šM\rcÀˆ˜å¤˜jþ“y±cŒîy™‡:ã±Nãž—BìM*t6ieÏ«\nÓ±ÀàÒyz\nj¦R\"tÐà‰ÂJ/ý; ”h‰>«|Òÿ½f¶\0¼ÃZ‘órÀÔC€ez&k`ŠÒp‡ šÅ\0s.„\$t†\$éSÆ#DM4xCšU‹ð)WÒ„\0ËJ…§¥*jV€¥\0*§\0\0ÏJ´ ólb€–ù\0¬`Z•¹×£vT°Mø=¡I'€ŠÞD¦¨_„™ZWà·ç³¸PÑô+½ê\n¥2NŒGS\"›€šf\$üj˜ª6ˆVž6µÉ5pTŠ>“Ò€3ZóXkÈ");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôža8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wþ\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹ž”ªÓ²Þ»\0\0;";break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$b;return$b;}function
idf_unescape($t){$Qd=substr($t,-1);return
str_replace($Qd.$Qd,$Qd,substr($t,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
number($X){return
preg_replace('~[^0-9]+~','',$X);}function
remove_slashes($If,$Jc=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($If)){foreach($X
as$Gd=>$W){unset($If[$x][$Gd]);if(is_array($W)){$If[$x][stripslashes($Gd)]=$W;$If[]=&$If[$x][stripslashes($Gd)];}else$If[$x][stripslashes($Gd)]=($Jc?$W:stripslashes($W));}}}}function
bracket_escape($t,$Na=false){static$th=array(':'=>':1',']'=>':2','['=>':3');return
strtr($t,($Na?array_flip($th):$th));}function
charset($h){return(version_compare($h->server_info,"5.5.3")>=0?"utf8mb4":"utf8");}function
h($P){return
str_replace("\0","&#0;",htmlspecialchars($P,ENT_QUOTES,'utf-8'));}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$db,$Nd="",$Pe="",$ib=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($db?" checked":"").($Pe?' onclick="'.h($Pe).'"':'').">";return($Nd!=""||$ib?"<label".($ib?" class='$ib'":"").">$J".h($Nd)."</label>":$J);}function
optionlist($Ve,$tg=null,$Oh=false){$J="";foreach($Ve
as$Gd=>$W){$We=array($Gd=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Gd).'">';$We=$W;}foreach($We
as$x=>$X)$J.='<option'.($Oh||is_string($x)?' value="'.h($x).'"':'').(($Oh||is_string($x)?(string)$x:$X)===$tg?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Ve,$Y="",$Oe=true){if($Oe)return"<select name='".h($C)."'".(is_string($Oe)?' onchange="'.h($Oe).'"':"").">".optionlist($Ve,$Y)."</select>";$J="";foreach($Ve
as$x=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ja,$Ve,$Y="",$vf=""){return($Ve?"<select$Ja><option value=''>$vf".optionlist($Ve,$Y,true)."</select>":"<input$Ja size='10' value='".h($Y)."' placeholder='$vf'>");}function
confirm(){return" onclick=\"return confirm('".lang(0)."');\"";}function
print_fieldset($jd,$Vd,$Zh=false,$Pe=""){echo"<fieldset><legend><a href='#fieldset-$jd' onclick=\"".h($Pe)."return !toggle('fieldset-$jd');\">$Vd</a></legend><div id='fieldset-$jd'".($Zh?"":" class='hidden'").">\n";}function
bold($Va,$ib=""){return($Va?" class='active $ib'":($ib?" class='$ib'":""));}function
odd($J=' class="odd"'){static$s=0;if(!$J)$s=-1;return($s++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($x,$X=null){static$Kc=true;if($Kc)echo"{";if($x!=""){echo($Kc?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$Kc=false;}else{echo"\n}\n";$Kc=true;}}function
ini_bool($td){$X=ini_get($td);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
set_password($Vh,$N,$V,$G){$_SESSION["pwds"][$Vh][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}function
q($P){global$h;return$h->quote($P);}function
get_vals($H,$e=0){global$h;$J=array();$I=$h->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$i=null,$jh=0){global$h;if(!is_object($i))$i=$h;$J=array();$i->timeout=$jh;$I=$i->query($H);$i->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$i=null,$n="<p class='error'>"){global$h;$ub=(is_object($i)?$i:$h);$J=array();$I=$ub->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($i)&&$n&&defined("PAGE_HEADER"))echo$n.error()."\n";return$J;}function
unique_array($K,$v){foreach($v
as$u){if(preg_match("~PRIMARY|UNIQUE~",$u["type"])){$J=array();foreach($u["columns"]as$x){if(!isset($K[$x]))continue
2;$J[$x]=$K[$x];}return$J;}}}function
escape_key($x){if(preg_match('(^([\w(]+)('.str_replace("_",".*",preg_quote(idf_escape("_"))).')([ \w)]+)$)',$x,$B))return$B[1].idf_escape(idf_unescape($B[2])).$B[3];return
idf_escape($x);}function
where($Z,$p=array()){global$h,$w;$J=array();foreach((array)$Z["where"]as$x=>$X){$x=bracket_escape($x,1);$e=escape_key($x);$J[]=$e.(($w=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$w=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($p[$x],q($X)));if($w=="sql"&&preg_match('~char|text~',$p[$x]["type"])&&preg_match("~[^ -@]~",$X))$J[]="$e = ".q($X)." COLLATE ".charset($h)."_bin";}foreach((array)$Z["null"]as$x)$J[]=escape_key($x)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$p=array()){parse_str($X,$bb);remove_slashes(array(&$bb));return
where($bb,$p);}function
where_link($s,$e,$Y,$Re="="){return"&where%5B$s%5D%5Bcol%5D=".urlencode($e)."&where%5B$s%5D%5Bop%5D=".urlencode(($Y!==null?$Re:"IS NULL"))."&where%5B$s%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$p,$M=array()){$J="";foreach($f
as$x=>$X){if($M&&!in_array(idf_escape($x),$M))continue;$Ga=convert_field($p[$x]);if($Ga)$J.=", $Ga AS ".idf_escape($x);}return$J;}function
cookie($C,$Y,$Xd=2592000){global$ba;$F=array($C,(preg_match("~\n~",$Y)?"":$Y),($Xd?time()+$Xd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;return
call_user_func_array('setcookie',$F);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Vh,$N,$V,$m=null){global$Xb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Xb))."|username|".($m!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($Vh!="server"||$N!=""?urlencode($Vh)."=".urlencode($N)."&":"")."username=".urlencode($V).($m!=""?"&db=".urlencode($m):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$me=null){if($me!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$me;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$me,$Sf=true,$wc=true,$Dc=false,$ih=""){global$h,$n,$b;if($wc){$Hg=microtime(true);$Dc=!$h->query($H);$ih=format_time($Hg);}$Fg="";if($H)$Fg=$b->messageQuery($H,$ih);if($Dc){$n=error().$Fg;return
false;}if($Sf)redirect($A,$me.$Fg);return
true;}function
queries($H){global$h;static$Mf=array();static$Hg;if(!$Hg)$Hg=microtime(true);if($H===null)return
array(implode("\n",$Mf),format_time($Hg));$Mf[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H).";";return$h->query($H);}function
apply_queries($H,$S,$sc='table'){foreach($S
as$Q){if(!queries("$H ".$sc($Q)))return
false;}return
true;}function
queries_redirect($A,$me,$Sf){list($Mf,$ih)=queries(null);return
query_redirect($Mf,$A,$me,$Sf,false,!$Sf,$ih);}function
format_time($Hg){return
lang(1,max(0,microtime(true)-$Hg));}function
remove_from_uri($jf=""){return
substr(preg_replace("~(?<=[?&])($jf".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Db){return" ".($E==$Db?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($x,$Kb=false){$Hc=$_FILES[$x];if(!$Hc)return
null;foreach($Hc
as$x=>$X)$Hc[$x]=(array)$X;$J='';foreach($Hc["error"]as$x=>$n){if($n)return$n;$C=$Hc["name"][$x];$qh=$Hc["tmp_name"][$x];$wb=file_get_contents($Kb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$qh":$qh);if($Kb){$Hg=substr($wb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Hg,$Yf))$wb=iconv("utf-16","utf-8",$wb);elseif($Hg=="\xEF\xBB\xBF")$wb=substr($wb,3);$J.=$wb."\n\n";}else$J.=$wb;}return$J;}function
upload_error($n){$je=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($n?lang(2).($je?" ".lang(3,$je):""):lang(4));}function
repeat_pattern($tf,$y){return
str_repeat("$tf{0,65535}",$y/65535)."$tf{0,".($y%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$y=80,$Og=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$y).")($)?)u",$P,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$y).")($)?)",$P,$B);return
h($B[1]).$Og.(isset($B[2])?"":"<i>...</i>");}function
format_number($X){return
strtr(number_format($X,0,".",lang(5)),preg_split('~~u',lang(6),-1,PREG_SPLIT_NO_EMPTY));}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($If,$md=array()){while(list($x,$X)=each($If)){if(!in_array($x,$md)){if(is_array($X)){foreach($X
as$Gd=>$W)$If[$x."[$Gd]"]=$W;}else
echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$Ec=false){$J=table_status($Q,$Ec);return($J?$J:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$J=array();foreach($b->foreignKeys($Q)as$q){foreach($q["source"]as$X)$J[$X][]=$q;}return$J;}function
enum_input($U,$Ja,$o,$Y,$mc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$ee);$J=($mc!==null?"<label><input type='$U'$Ja value='$mc'".((is_array($Y)?in_array($mc,$Y):$Y===0)?" checked":"")."><i>".lang(7)."</i></label>":"");foreach($ee[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?$Y==$s+1:(is_array($Y)?in_array($s+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ja value='".($s+1)."'".($db?' checked':'').'>'.h($b->editVal($X,$o)).'</label>';}return$J;}function
input($o,$Y,$r){global$h,$Bh,$b,$w;$C=h(bracket_escape($o["field"]));echo"<td class='function'>";if(is_array($Y)&&!$r){$Ea=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ea[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ea);$r="json";}$bg=($w=="mssql"&&$o["auto_increment"]);if($bg&&!$_POST["save"])$r=null;$Uc=(isset($_GET["select"])||$bg?array("orig"=>lang(8)):array())+$b->editFunctions($o);$Ja=" name='fields[$C]'";if($o["type"]=="enum")echo
nbsp($Uc[""])."<td>".$b->editInput($_GET["edit"],$o,$Ja,$Y);else{$Kc=0;foreach($Uc
as$x=>$X){if($x===""||!$X)break;$Kc++;}$Oe=($Kc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($o["field"])))."]']; if ($Kc > f.selectedIndex) f.selectedIndex = $Kc;\" onkeyup='keyupChange.call(this);'":"");$Ja.=$Oe;$cd=(in_array($r,$Uc)||isset($Uc[$r]));echo(count($Uc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Uc,$r===null||$cd?$r:"")."</select>":nbsp(reset($Uc))).'<td>';$vd=$b->editInput($_GET["edit"],$o,$Ja,$Y);if($vd!="")echo$vd;elseif($o["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$o["length"],$ee);foreach($ee[1]as$s=>$X){$X=stripcslashes(str_replace("''","'",$X));$db=(is_int($Y)?($Y>>$s)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$s]' value='".(1<<$s)."'".($db?' checked':'')."$Oe>".h($b->editVal($X,$o)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Oe>";elseif(($gh=preg_match('~text|lob~',$o["type"]))||preg_match("~\n~",$Y)){if($gh&&$w!="sqlite")$Ja.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ja.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ja>".h($Y).'</textarea>';}elseif($r=="json")echo"<textarea$Ja cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$le=(!preg_match('~int~',$o["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$o["length"],$B)?((preg_match("~binary~",$o["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$o["unsigned"]?1:0)):($Bh[$o["type"]]?$Bh[$o["type"]]+($o["unsigned"]?0:1):0));if($w=='sql'&&$h->server_info>=5.6&&preg_match('~time~',$o["type"]))$le+=7;echo"<input".((!$cd||$r==="")&&preg_match('~(?<!o)int~',$o["type"])?" type='number'":"")." value='".h($Y)."'".($le?" maxlength='$le'":"").(preg_match('~char|binary~',$o["type"])&&$le>20?" size='40'":"")."$Ja>";}}}function
process_input($o){global$b;$t=bracket_escape($o["field"]);$r=$_POST["function"][$t];$Y=$_POST["fields"][$t];if($o["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($o["auto_increment"]&&$Y=="")return
null;if($r=="orig")return($o["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($o["field"]):false);if($r=="NULL")return"NULL";if($o["type"]=="set")return
array_sum((array)$Y);if($r=="json"){$r="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$o["type"])&&ini_bool("file_uploads")){$Hc=get_file("fields-$t");if(!is_string($Hc))return
false;return
q($Hc);}return$b->processInput($o,$Y,$r);}function
fields_from_edit(){global$Wb;$J=array();foreach((array)$_POST["field_keys"]as$x=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$x];$_POST["fields"][$X]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$X){$C=bracket_escape($x,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($x==$Wb->primary),);}return$J;}function
search_tables(){global$b,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Qc=false;foreach(table_status('',true)as$Q=>$R){$C=$b->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$h->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Qc){echo"<ul>\n";$Qc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Qc?"</ul>":"<p class='message'>".lang(9))."\n";}function
dump_headers($kd,$ve=false){global$b;$J=$b->dumpHeaders($kd,$ve);$hf=$_POST["output"];if($hf!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($kd).".$J".($hf!="file"&&!preg_match('~[^0-9a-z]~',$hf)?".$hf":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($r,$e){return($r?($r=="unixepoch"?"DATETIME($e, '$r')":($r=="count distinct"?"COUNT(DISTINCT ":strtoupper("$r("))."$e)"):$e);}function
get_temp_dir(){$J=ini_get("upload_tmp_dir");if(!$J){if(function_exists('sys_get_temp_dir'))$J=sys_get_temp_dir();else{$Ic=@tempnam("","");if(!$Ic)return
false;$J=dirname($Ic);unlink($Ic);}}return$J;}function
password_file($j){$Ic=get_temp_dir()."/adminer.key";$J=@file_get_contents($Ic);if($J||!$j)return$J;$Sc=@fopen($Ic,"w");if($Sc){chmod($Ic,0660);$J=rand_string();fwrite($Sc,$J);fclose($Sc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$o,$hh){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Gd=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Gd):"")."<td>".select_value($W,$_,$o,$hh);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$o);if($_===null){if(is_mail($X))$_="mailto:$X";if($Kf=is_url($X))$_=(($Kf=="http"&&$ba)||preg_match('~WebKit~i',$_SERVER["HTTP_USER_AGENT"])?$X:"$Kf://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$o);if($J!==null){if($J==="")$J="&nbsp;";elseif(!is_utf8($J))$J="\0";elseif($hh!=""&&is_shortable($o))$J=shorten_utf8($J,max(0,+$hh));else$J=h($J);}return$b->selectVal($J,$_,$o,$X);}function
is_mail($jc){$Ha='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Vb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$tf="$Ha+(\\.$Ha+)*@($Vb?\\.)+$Vb";return
is_string($jc)&&preg_match("(^$tf(,\\s*$tf)*\$)i",$jc);}function
is_url($P){$Vb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Vb?\\.)+$Vb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$B)?strtolower($B[1]):"");}function
is_shortable($o){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$o["type"]);}function
count_rows($Q,$Z,$Ad,$Xc){global$w;$H=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($Ad&&($w=="sql"||count($Xc)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Xc).")$H":"SELECT COUNT(*)".($Ad?" FROM (SELECT 1$H$Yc) x":$H));}function
slow_query($H){global$b,$T;$m=$b->database();$jh=$b->queryTimeout();if(support("kill")&&is_object($i=connect())&&($m==""||$i->select_db($m))){$Ld=$i->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$T,'&kill=',$Ld,'\');
}, ',1000*$jh,');
</script>
';}else$i=null;ob_flush();flush();$J=@get_key_vals($H,$i,$jh);if($i){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$Pf=rand(1,1e6);return($Pf^$_SESSION["token"]).":$Pf";}function
verify_token(){list($T,$Pf)=explode(":",$_POST["token"]);return($Pf^$_SESSION["token"])==$T;}function
lzw_decompress($Ra){$Rb=256;$Sa=8;$kb=array();$dg=0;$eg=0;for($s=0;$s<strlen($Ra);$s++){$dg=($dg<<8)+ord($Ra[$s]);$eg+=8;if($eg>=$Sa){$eg-=$Sa;$kb[]=$dg>>$eg;$dg&=(1<<$eg)-1;$Rb++;if($Rb>>$Sa)$Sa++;}}$Qb=range("\0","\xFF");$J="";foreach($kb
as$s=>$jb){$ic=$Qb[$jb];if(!isset($ic))$ic=$di.$di[0];$J.=$ic;if($s)$Qb[]=$di.$ic[0];$di=$ic;}return$J;}function
on_help($pb,$Ag=0){return" onmouseover='helpMouseover(this, event, ".h($pb).", $Ag);' onmouseout='helpMouseout(this, event);'";}function
edit_form($a,$p,$K,$Jh){global$b,$w,$T,$n;$Tg=$b->tableName(table_status1($a,true));page_header(($Jh?lang(10):lang(11)),$n,array("select"=>array($a,$Tg)),$Tg);if($K===false)echo"<p class='error'>".lang(12)."\n";echo'<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$p)echo"<p class='error'>".lang(13)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$C=>$o){echo"<tr><th>".$b->fieldName($o);$Lb=$_GET["set"][bracket_escape($C)];if($Lb===null){$Lb=$o["default"];if($o["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Lb,$Yf))$Lb=$Yf[1];}$Y=($K!==null?($K[$C]!=""&&$w=="sql"&&preg_match("~enum|set~",$o["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$Jh&&$o["auto_increment"]?"":(isset($_GET["select"])?false:$Lb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$o);$r=($_POST["save"]?(string)$_POST["function"][$C]:($Jh&&$o["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$o["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$r="now";}input($o,$Y,$r);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo"<p>\n";if($p){echo"<input type='submit' value='".lang(14)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Jh?lang(15)."' onclick='return !ajaxForm(this.form, \"".lang(16).'...", this)':lang(17))."' title='Ctrl+Shift+Enter'>\n";}echo($Jh?"<input type='submit' name='delete' value='".lang(18)."'".confirm().">\n":($_POST||!$p?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}global$b,$h,$Xb,$fc,$pc,$n,$Uc,$Zc,$ba,$ud,$w,$ca,$Pd,$Ne,$uf,$Lg,$dd,$T,$vh,$Bh,$Ih,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Jc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Pd=array('en'=>'English','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','ca'=>'CatalÃ ','cs'=>'ÄŒeÅ¡tina','da'=>'Dansk','de'=>'Deutsch','es'=>'EspaÃ±ol','et'=>'Eesti','fa'=>'ÙØ§Ø±Ø³ÛŒ','fr'=>'FranÃ§ais','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'æ—¥æœ¬èªž','ko'=>'í•œêµ­ì–´','lt'=>'LietuviÅ³','nl'=>'Nederlands','no'=>'Norsk','pl'=>'Polski','pt'=>'PortuguÃªs','pt-br'=>'PortuguÃªs (Brazil)','ro'=>'Limba RomÃ¢nÄƒ','ru'=>'Ð ÑƒÑÑÐºÐ¸Ð¹ ÑÐ·Ñ‹Ðº','sk'=>'SlovenÄina','sl'=>'Slovenski','sr'=>'Ð¡Ñ€Ð¿ÑÐºÐ¸','ta'=>'à®¤â€Œà®®à®¿à®´à¯','th'=>'à¸ à¸²à¸©à¸²à¹„à¸—à¸¢','tr'=>'TÃ¼rkÃ§e','uk'=>'Ð£ÐºÑ€Ð°Ñ—Ð½ÑÑŒÐºÐ°','vi'=>'Tiáº¿ng Viá»‡t','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡',);function
get_lang(){global$ca;return$ca;}function
lang($t,$Ee=null){if(is_string($t)){$xf=array_search($t,get_translations("en"));if($xf!==false)$t=$xf;}global$ca,$vh;$uh=($vh[$t]?$vh[$t]:$t);if(is_array($uh)){$xf=($Ee==1?0:($ca=='cs'||$ca=='sk'?($Ee&&$Ee<5?1:2):($ca=='fr'?(!$Ee?0:1):($ca=='pl'?($Ee%10>1&&$Ee%10<5&&$Ee/10%10!=1?1:2):($ca=='sl'?($Ee%100==1?0:($Ee%100==2?1:($Ee%100==3||$Ee%100==4?2:3))):($ca=='lt'?($Ee%10==1&&$Ee%100!=11?0:($Ee%10>1&&$Ee/10%10!=1?1:2)):($ca=='ru'||$ca=='sr'||$ca=='uk'?($Ee%10==1&&$Ee%100!=11?0:($Ee%10>1&&$Ee%10<5&&$Ee/10%10!=1?1:2)):1)))))));$uh=$uh[$xf];}$Ea=func_get_args();array_shift($Ea);$Pc=str_replace("%d","%s",$uh);if($Pc!=$uh)$Ea[0]=format_number($Ee);return
vsprintf($Pc,$Ea);}function
switch_lang(){global$ca,$Pd;echo"<form action='' method='post'>\n<div id='lang'>",lang(19).": ".html_select("lang",$Pd,$ca,"this.form.submit();")," <input type='submit' value='".lang(20)."' class='hidden'>\n","<input type='hidden' name='token' value='".get_token()."'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&verify_token()){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$ca="en";if(isset($Pd[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ca=$_COOKIE["adminer_lang"];}elseif(isset($Pd[$_SESSION["lang"]]))$ca=$_SESSION["lang"];else{$ua=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$ee,PREG_SET_ORDER);foreach($ee
as$B)$ua[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ua);foreach($ua
as$x=>$Lf){if(isset($Pd[$x])){$ca=$x;break;}$x=preg_replace('~-.*~','',$x);if(!isset($ua[$x])&&isset($Pd[$x])){$ca=$x;break;}}}$vh=&$_SESSION["translations"];if($_SESSION["translations_version"]!=646742810){$vh=array();$_SESSION["translations_version"]=646742810;}function
get_translations($Od){switch($Od){case"en":$g="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Þa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%ÀPÀb2£a¸àr\n2›NCÈ(Þr4™Í1C`(:Ebç9AÈi:‰&ã™”åy·ˆFó½ÐY‚ˆ\r´\n– 8ZÔS=\$Aœ†¤`Ñ=ËÜŒ²‚ž0Ê\nÒãdFé	ŒÞn:ZÎ°)­ãQŒµ™öú£°Ak¾ßÄê}äˆe‹çADÍéœêaÊÄ¯ ¢„\\Ã}ö5ð#|@èhÚ3·ÃN¾}@¡ÑiÕ¦«ÁËžN›t¼Å~9‚ˆ™ÈöBØ­8¦:-pÎüˆKXÂ9,¢pÊ:ë8Öã(ß\0À‹(˜ž½­@ò¨¬-BüÆŽN’üŠ@.£®9Â#Èý3ˆ«®Ó‰ƒzÔ7:‹ðÚÞŒ­€@Fñ.1©¬ÚâÔ\r\"²\"Óˆ#c:9˜Ê;RŒ¦Ð¢Í<;·ìèÚ†\$#òÎ!,Ë3¾‚›2È€PŒ:Ò#Ê¾K#8Î€ŒìäïAcÐ7£Èîð -BÎ¼ŒŠHÇ®ð3––¶Â£‹Ç£;¿,ÎÍ|ä:¦Râp9ŒmëP(‰\\6Çmd²:³ØÆ€À-‚ÌùÇ›M,ÊKðA#FNœµ_TvhøƒÐKÃ.#gfXÖx É2 ’±Q`PŠ<í’2ÙvŠ.X“¦)Ù¶:û!¯2”JÄ Ð[¸3ÃbÖÑ¹q²\n¼Šƒz5V(Úù&Ñã˜æ3TülàŒ¼‘O«[~7'éÚÙ3¡p€àt.„xN†È†%‚º-‹MA67V\nJP½ŽÃ\rôˆb˜¤#2ãx×…ÁÜß;èÌ³¦jÖ”F£=þƒá\nNN64š´îõŽJ2b(íÈìe8Æœ7%	TA*\\Z©úî¿¢‡‰Ð€ŒÁèD4ƒ àáxïÁ…Éf¿Ë8ÎÇ¼cÅŽs¸^4#“*:oBú,Þa}mìU¨èã|Ÿ§ÐÄ’ÿä:ÂÈGQãa¬áZÚ8\\.\\¨„ºœŠK£\"PÀ¸¼„þ·¸ºË¼§qE¦¡\0 \$\n[ÇÈ¼Á\0P )‘g)3E›ÙÎwUkñëc0ÉRX—& ÚûÊž^t™ú)+2'Ê}MI«E:­Œž'U”vAz\"ƒrBRÊi}i|ŸâlÝàf0dÀ †G•Kdxìó@ÛL©(dô´½ žÂ¢¿F-)TšgŠ21yIPµ«8ó@UF¼’œàäŸz¿kÉÀØ˜ÒP½Q½3\$x(XÚ2¨\$‡¨É’0Œ©þ7ëpá‚IÈ:#q	È³†RÒÆF¸™D„pÂp \n¡@\"¨@Tx\"„À‹Ö@o\r„½Œ\"ƒNXaC\núG\0 ¨|‘¢™Sa<±§sòqÃ0aT5ó9«RY<â’Þjˆä®5E;£ˆjey§gè4’ÒŒÉAûZ(ÌŸ³T}Ñê¿0nâ\0¤(™¦Ó\\k,â&	~tÖ¸odÈý\0 ¬‚ÃI¢?(ÎSó‘#Ø\rÀéÔ<ÃC8hzOQë<h’Pêzz'^vOˆkŠJƒr(6Gi-8A:4ô±3Yœ‘	©ú™eéòËÂB±Vq(\nÁ¥+Ðt»\"dXmGíF‡ƒè°áá¬)é´‚‡%AÜ²W‰NUhÛÁq’Å¢}#óOý<2¨”(;ˆ—ÐnBa=Xa’;/!I¯³òLi°“èÅd,£:vKòÞF”‚._‹+1à2#šI	ƒ0 ((›6'JÃ5\$!<%±c\\‰ø‰×ZÐzÓ…zò¿WOƒ\r‚¢·¥V«_ãA±åŽÖÚÏ]é5œz5ñ3?Gí¡±V‘oZ£”†ØÙM®Gä¢‚9}µ VÜÙ•í•ÓÁ(q à¢@Ã(b¸ªø›Äò“¤[\\è7‡”ÆõdI	(×†ÆvK9ù	p³–P†u‘)vŒÏÜ½&#uÝèe™*4äÌÐ“{ŒY>™`Ž\$kì˜¢ù¾3\$àã;e¡¢½÷êù1€É2ÏžÁX\ný“§3pJ]ÁxUì1‚¤ª™_gè2ÊF•YÔEEü¼5´ÍŠÍ‰±<ØÃÄ™+7äZÚ¥Tšbšl9…‹õöÇ`‚KŸ:A#Ñ@Ç|–é\$iæÁ XSÌ««„f\n1]YNøaR#¬¦QËxo\nÃãù˜rÒÓÊ“%a{)4êü×@Kµ»eÜ«ƒò¼Í]‹W2e\\ÍÍ&tÏ¹±^·5‘{*¢°_z?rkckr`²!šÁ¼ ¢M‹ÉÍz4™hö3¤l…’ÐB7xàX.›ÊÓ2Êjo©©Î¨Ñ™CjâN#Ž³Ïùê–¨óVÐ[—ˆt„¾3)ÌSf48 ù>h2È|Ø‹I{îì¦»è¤Zé-×ˆWaGId\róxÈ)Õè¬\rŒï\nz(z¿S–\\LJjæ¡f-%	W°ädÞ£‰ƒUfÜƒe(ÚWÖyãVQ­÷®°öoÃÉW}­ê³²3µóÂ6¬>­g¿´7GÚ«]ÙJPS¸}]\\•|2òÈ_Öò®â¨2@Â\$.Ø±“2%&5\0­1¢õWËÚªé®\"Ù´,ÍæüûLž:J8ûN¼Æ™«ã#6¡²‰Î\r):)ÔqÔÌƒQá‘'ódBXÆÏ@A–³îNÄì¢nìºûŽp–³ÚòçEè»¤hXÓÜ9Ë/½ã\"÷Î°Ä˜áŽfñþÅÞjÿ‡\n•	_sžÑ\n¼bTß½y™ûª[@…¦¡ø‚1äd±-4üh¼žÿÏõ_;ôÞKÔq‰›êü¾£	\\ð\"þ†iÂ<GVÐÔ;4#NÌz|ÛÕA¬“}-ð:ÓV2Û'üM;›ÈñÄ­¬XŒ—Úþ/Ó¿·QXFb^=˜ùWIéRPÐ lpŒ4†0×¶‰¥#7—pÌÁKÁé'Rø±xô\n€Œ pwã\\R Î%\nþIMT%§rÐ\nàÔÞülŒF\"l3Þ™æ’TCN	¯ê\r/îëÊ\næ#ò6¯J;L›Š”³IpþÆ\n„Â|þBP’¢ ¢¢_¢@70pcHÚÙ Pé B!¤£Âç\"Â¤˜N¯1Ï–ÇÌ*—ÂDºüP’ÏËª£©ï˜Â¯pŸF0º¤\0¡PÀÜBJÊæMÅžMÌúŠ¤Äl¢\0˜“E¤‚ŸÐðZ¼ #NªŠæ%D¦œ%ô'bBà\$°›êò%é“¦6'd²-€ó@†<ÜëÆÚkÊvê£ø–OæyM¤Ù¬·	Ìáj¤/Ñ\rÎ£®Ô6mÈœešë…Î\"š-J²2ïD­ Ê¤v\$Íf‚B¥ñ Ù\nÌ€\\";break;case"ar":$g="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0T2]6QM…ŒO!bù#eØ\\É¥¤\$¸\\\nl+[\nÈdÊk4—O¡è&ÂÕ²‰…ÀQ)Ì…7lIçò„‚E\$…Ê‘¶Ím_7GT\r•eDÙƒ)*VÊ™³'T6U1ÙzžHØ]N*PZ,¡BT`Šªìî%VDª5ØAU0‰H S‹d!iQl(p(N¯…Â1÷e4înY7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ ­—6IÏEq¥ánÔh/\\äQY2ž´Òn3Î'’þ½v	•leîÊŽý†¬ç7©Ftl.nòl?O<B?û¢[%ß!ÅÌ§EzŽ¡-ˆk‰®Ðâ)ƒš ©@ê\n<­§Šònƒ°©Œü¡Ås\"B§!ïã¾Ì*¹\\ì'ÌbˆU'šÌHÐA°U ìÂÜ‘À,ºâˆ®hš‰¿R©íti!Ã/¯q”:†GP\n˜@èé™À\n«eŠ:¢.Ï\n&T ‹ŠF“¡´ˆ‡?IãÆî¯h™\\ÆIL}\nÉ;´U‚CÒòpð–&Ál¡OÌ]„Òë½6ï!ÑìÞ‘•pð<H	LSU\\oH(LýKÉ¥ª°ÃBÉrŒ“ë‘Ðe)±0“úI2*Ú¥Y'‰RF\\§JtU®‰dE+(…=YS6I°TUrjìY>éÊ\$œôœÀ¢§	ÕMUÃ¨Ø67ÎcrŒcÜêMp““¡\0¦(‰•‘ea°ìêk<K©è‡·‹­YOU¡³ˆOSINÐÅVWµt_c›¾RÊI¯“2¬åQnüf9JºÆøò÷\\ÕI³¶VA`\nïÖUÕ{e›†\\úW•¾6Ìc³åÆ«ä:&OfU”*«Ç#è6MCT0ŽMxÞ3ÃcÎ2±Ð…\r“L©lP\nƒ{d6ßÃÈ@:Ã˜ê1Œmàæ3^Á\0Ø7Œï8æ7Ã–ü0ŒãÎrö\0@6¼ã«ŠaJn!ŠbŒo#XÊ7 “6S.…Öé\r›ÓPj	OP}2ý*PÄ Â!«µ2TÅhl\\½É3\0¨>!„Ö²<²l—i&°rùÜÐŠå¡RDC	£æâŽMŸÌ9Žãxå`Œ£Àà4í#'b-^Ò3¡Ð p@¼‡xƒds¸2‡ \\ûƒ8/upH<WCxnà‰|‡#vè_9«ø5‚ |Chp7!µÕ‡@xÃ>D.l2œpÞ°Mû›.©ÌCg[ä\rÁÐ¨0#\$öŒ!/BO}&¦&ôL¼!/1¡³0hÁW\$¨œ®æX†ŒRdFÌ4äb“â!­X’8¶V¢éŠxŒLZ*â\\¶žësQ	ð¾2PQ\"Á1\$œ­°²©ìX/d¢bNª[|BØÅ¢¸R\"=‰OX¦“p’FƒÉ©4¬cƒ›«‡ Þ¶âMä>ÁÈ7†Ð@`So}'Õ‚\0ÆâåI¾•¨Ý¼TØMcTc\n<)…BDTëÃ1†J¥¶\n¸Ìê[&¤ŒZBt´c<F™*	Ûžæ6OfÂèYIì…¥³Çáœw[‹¬4w w\0P	@ÓÊ%úë‹ ü† ÒØ3˜ÜónþB0T\n7,Ó\n_t>\r2ÊZKiRtA,áq\n×nWB@%ìÇ®®¹xNT(@‚(\n¦ €\"P˜iÃ\0í	GrÓP%CN>6´ÄH!‘jÌ]²Lœ(µ”¦Z D¡˜0¯h|ƒl–`¿1³¨-ŒY/jÔ±ôY6ˆY50.à”’;T+„FÉ@™4Ô~ÚšyŽIõ¬3Ùë™Q¥Žfvk“¡`‰¤“Ta¬îÂ©ñTóE-¶Jv1û*È‘«-K®ÒÁYÖye“ºN@u­#¬cVÍ Š±f7ZÔ^éY(!é'Âš¿MŽÍ×£ÓÆ }³Gú|Ï´B¹fºŽ{ÍÒ>OI&°–2F`¥5¯\$–¸2äW†.ª0Òƒ(\nrÔ89ëÒÃ)¹g2/±cÄ4kŒÙ”kUêY¦M6TdÒCE!ñžÌY½öO‚L½°Ph†´ªœJz¿(EV¤¥Z	=j[¤¼Ñ“šNO)KT‹¡O¡åŠ¦«KÅ‘\\Ž•³¸Ç”­«:ˆÊØ\nÅ˜Q‰ÿ·&:4³²3aÎ\$Öšq˜>•üÇ£\$,²\"µ×Š6oÝÙB)‚e‚Áf¤çé•'k`Ña/?BÁß0ÈCƒšg2)#×»‹8L‰Žy“8\"†A–r‹uÈÎÕ\núHÅŽG|èÏÝüÇLe1`µr ÉÈ.9¿FÏ+ïsÉïC=>fn’Òº@Ê/FÁ´äp–É´K†ÞÉ?ÙH‚I¢`œŠ£\"x¤±º¦|°P\n­¿#××et‚ø•Ew::_\nKBø’ÙUžSyR5f¾VÅ^\\eBŒê+G\"Ù©óËå™ç„™¡úb¸q’Ç·³6\nê¿		…t,t•ÑÁ·PÀðRŠI8J\"x÷‚+ž!t7'TŠÚIñø­8Þ’œa¦Ú-åÈP·¨S\\½ñÌ	…R¦M3ºÕ¡ƒ£KLÂJ\$¢]«³ƒ*Èsf¤ÎûmvjQßjiwó3\$—ø\$äÃqtXVÞ:pê¹º¢EÃ@\n%S @¥ftŽ¡:,u³Œé#Ú}•t'ºÆ<1‰«(â<”-#9µ†·(.=”w•ïJrÏ÷îIÔ¢c°vy?Øh¨e¶'‚j¶ÆÚIÚJ«[uâß¿òf_æ™—ñ1ß¿8Ñb·s3<“1z‰&L*É îC=”,ý›tÐZq“>o¬=µ(jóÏ`×ó !ýéSÄŸR#lQðó‡\nc*€|’=òËµ&ù¿	?}“ä±jù×ø¾a…¢ÙK@Xe3*'-Ä0‰½ñ\\M\\tEšAªaÈÞþ\"<oèABËD@n¶Ëéæ®‚³¤HýÄýK(ò¨Ædå21(–N/ü\\bdþBVþ¥ºE\nOm–ûL/žOÅ˜åÍüÊ‚\0002-€ád”FÄó*‹oNTN\"øÐvS!ló¯Àóê‰†Yf ÝÎ1ÅHÉAVôPu	£	ïXóÆ /pœn/¦dÐìäðº©R\"mØäª yãæMÌ:ØUä®æÃEðÒòëî(/`+odÐ¡münÌP«	„È°óL:|\rÊcÓ^ÊP¼iå)0Íï>µÉì3N®ØéeUŽ4y¤Hëà/‘BŠ1EqPÐQß¢y'’@1JjeNHóôE°…®·QyQa%©q!‘s¯2/lfC±UVg¢¿1|(Qš\"Q^ä®¨ñj ‘¶M-ÀgÐ±\nq“äàMl¬!‘žêqÎF\$g± dñÑåÊï†À'2AA-¯¡e‡iwÑ>p*¥ˆñƒ\$Oï\rx®ä ÌÔÜfNZ*¢ä«Ž­%B\"løá¦zàïsB’=Å€t`è@Øi~\r Æ\r`@ƒ*\nÀ¬CŒohn\r ÌoÊ6&àŒ¡§6§Î\0Ä5ç.\n ¨ÀZ\0@u`Ç&ãÐÀ8ø,ØWn`@£\nS)ØJÂ—\$¤¸Šš\$¤^#ÄÞ¸…ŒY	ë,ZäGÉ&òrW\rTbPÀ®žÅRà@N>Pè8HïF p^±áH.hb (Â^'N†FÊ¬.âæ	€Þ#Î=3  `Ú}Ã^8c—\"Ä1\$ø[Æ	ÞjfTë#3ëÈ|sF¯ë5		5OŠ·eŽV¨ÂQŽ=NQ5.F\n…ô7ƒV5£_(iz\rààn½ísjºãÜ‘üÅª]MÓ\"’ÒC…ndåä\"Ø]Î`<%ÚYK/;k®ÁìáB²íƒ^Q:Þ¦NÇÊ}\0Ò¬+Î¥‚\nÀÒ î@¬ Æ ê\r«ºé‚kÊÊA¢'Aj:Œnû+S4­´®J&©ñKLð©ï1‚Z®ÊÞ¯Óe\"@†m#ˆ5æù>Sé9e?3öT‡’.Ä“†©íÆHG @l”G 	\0t	 š@¦\n`";break;case"bn":$g="àS)\nt]\0_ˆ 	XD)L¨„@Ð4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÐP²D§±©êêzê¦.SÉõE<ùOS«éékbÊOÌafêhb\0§Bïðør¦ª)—öªå²QŒÁWð²ëE‹{K§ÔPP~Í9\\§ël*‹_W	ãÞ7ôâÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Üº¸%3–©5Š!n€nJµmk”Åü©,qŸÁî«@á­‹œ(n+LÝ9ˆx£¡ÎkŠIB›Ä4Ã< ŒÀ šâ5mÊnÂ6\0êÀîjÀ€9èzžÐ ª,X‘¶í2À§§Î,(_)ìã7*¬è¶n¢\rÁ%3l¥ÃM”ˆ¨ \r²öã¢m¢ä‡KÑKp€LKÂúÙC	‹€S.ëIL•G3ÔW9ÊS·2bÙ!¯«|–Æð;I7ÅÒäŠë#´Û=ÀÐõMó“TŒRí/Ô\rÒž®­ÓY'ERj!*§¹ôâØƒÅ5eO¯;w4ÓÓ…‚Á°³’ÜWFóò‰,ÏÊ}!ITdÿX/‚Z¶*5¹O5ÚSyB§”+eÉQ„âŸ’ô1QT0¥*«qÈÈuáy)èM{SŒMƒ!°­Êð‹¶”†E©÷‰LPGŽ5ÒEòÂ0DÔÓ{ˆ¼DJQ}áj}X4E•Ûî.:’Ör*½„Ô–<|T–f\\@£c\$ñW“àHKdŽÔã´9s–àjšÙ„^r£‹Î³6NèÒ{n¼ñý`ØÄ€Sk£wE+Úý%æµþ¶V–°¼+¸dÝU”Ö…7µkÁqT	Û‘¡Ñ”¬ ‰DÍäÂˆÑnzÝEn@Œ:ƒcç\0½É\0Æ0Ñˆ¢&³rc|WÖÉzdœ„ÆÁ|UµÜ*ˆ«Øe6Â—ïöT!ÖBšùMt¸·\\÷vã1TìõM®ë]nI‚Sú’k¸3zkåÄŒ1OÃÃ>˜]RØÎ-Ë‡ªÂúûõ’ÔñÉê1+|­¾÷CXÂÃèMJ|ÑÁY_·³Y·7+“'¶âòizŽýñWÈ“Kén¬°ã¬wðÁ‘*ó\rÐ9\0£ºwÃr<¼3`Ø*Pä‡ÁL¤_ÈT\rçœ6¹Àò¨naÔ1†3âÃ3”°7†thÁaóPÜ0†pÂPgà€6£@ê~@s0¨­¼7¸)Á\0C\naH#)fÐkKq)¥™ÿbVÐQËÍ/AŽ¾Å4.†©±£z›Ú“wdj4íª‚Ü[·[f€·:¦TCˆšŒå\\(ÂŒ^âI\0…Ð`›/¨X¼™J1¨§ÐÂÏÐr=œ9‡pÞ™ÐeÀ4Â È\0<'‚`zƒ@tÀð^æ@.!’*†àÊt¯à¼2†é¨Ô:\r!¾k'.€t—á}9ÀÖðI\r¡À÷Ùªà/ ø¸Ÿ)Ü{:>‘P0†³ÈC¡è™ðÖgàé\nŒ‡b%E`?…ìÚ]a×QR…6I¦I\$Rù²PgIˆ¿²ˆTdJ‘EtÈÚ P	AS!…êYü¤Þ‘\0P\\LrG¤\rr\"Õï))yPfy(²f6WÂ¥AÅÒº”MaDK²´èQ	šgŽ(–Çh±ÊÊSN-ìÅÕýX\n!«Ò…³Iù,b£Y\0©ÒŠ·7DÄfÚo7%e;®Ã^ÄŒ-_­’Ž;à’GÃÉÞ4³£Í@CœÕŸGôùB âOÁÈ7†Ð@fd(•Gòj‚\0Ç,‰ó²’¬øB¥6”J\$xð\0žÂ¡x\r`ª×ð^ÉÊw„aöØ\"ÌkTŒ~¾¦’”YÖ;\\´)˜¨,QŒ‡vüÈØ÷Ò¼´ÎrNÀß2Á»A¤3‚\0¦çÁ\0f=§öK°Œ)cœgA¦uÊú@/œ³ÖD99 ]œDilî@%bÃ‘Ð®LFEÒ£ùO©Öé÷‘Œ3ƒUüŠ`KtÔVEb·pò¹[XŒƒ@Š[…QOpÑ´S8¥9†™KQA2†`Âå(v!²Ì5dF›×òyÎ1Ý6RÂ“Zl/e*Pµ¦ú\"N)]0«øX2ÑNßE1­©Ã+6ÌÍ’Î8Ç¨­\$*Å™{&·msž óšj|yÙ¢5DøC’\0’å!*(ÄNÇÓä•-ÚÂ¾^\$Æ’q¦\\v‘¥Ñåâ–òžâC/Mð-öðõKp¸Óæ”¬ALÂî	­ÏÂ™£¾wFtÙ‚bËdÂ•¨\\Ôõ‰)Þ•RÊ´‚S}3Q”×#©VüdÒùªtð£‘³å¢V^{Ìqás¾Õ	ZM¸¶L®3î%ž”dwÈSµP¦CÐeAÎ‡¯¼‚˜e=ÁŒýF¬ËôlÐÚ”SEÓ9ò«è#\rwF¾å‚\"`é}ûCâ×ªó`ÝW‹”<¿ŸwnäŽ<‚\0¤E8Ž×ZÁã~FÊy*ÜÁc&èp²YÎb:‘+ë}½t³O>yÂ› IÚÅ“–ÃÒq\rË2RóŠê²üžX(]Ñl¥ž³]t,‘cå¤ôÞŠzCJ)¯®ò8^E1ž%5ñ´ù£­ã¹Zå½Iê¸÷t³¢ÚŽ•ræ\r¡;OZdÐ»FÈ¦Á9:¹¸_³æ€²¼cìôqÒkŽúñyƒ²fÛè=‡ãókŽkZŸÀçUƒUu§{ÑuÀR\0žõåzüóeãù¿U Š?Ÿñ~‹S7E©×\r„”tž­GûÉ<×JA	û@|õuHÃø»\$KT\"{Ý¯U^Ç¼ RÎ‰ýûÃð±ãuïmðýÁ{ñ×¹Ïºèþß9tÝ›‘,¯¿Ã´âSøì§óHn„nehæ/”d ˜¿Œ\0³€î\$&œhEïhÁÂdæpðfSG~`FdWMÀX' ¢/Ò¤\n\\£\nü%¶`Üž©(¬iØÅâÔ.P(PÆLaŠ-„`eÅVeîÈôbÜ~B¾ð:G¢ž’\$¢2j -ˆ5NíîÆ»æ\$-Æ(/zí\nÎÛÁï%”&¦Lü28Å¹MÔÆfMcrmM0ù®\0ÿC5g²óŠÞø¥\\X0Údà”P ÂÃnH¢¯Rý	á¦b úf¢ˆÓèÖ„éèf0ðøHÝÝ\rfLÐ)àPíÑ3qq<öj\r=„o\nøÑP}îìÔ%ò{ñHÿñbâ1:Ã¬V;.,íÌI®ºÑÅŽþåRù¬²Ä­xÎ…Žj*|:Ñ”/\r OIMÌ\"IÐÎÉeh«e¹.VÜÖ…Pã!sDB;1\\Ñ1n:Õì¾ýÇh5g}…~\0PvNîlKàRiH&Hÿ-\"‚pæÌpêw1OXîé!Gãåa 8¥¤-#r'!\rrüD™¯e\$^ó²F·îã\"ÒNåðù'³òW16Ï'„Ó§Ì{QlËè\"ág³Ð±G\"/äQq5FÔ‚G˜eÑl7Qâõ2“%ôÖÇ”}QÜö±[%M°ê–£bRì.µñ,7ˆò\$“âñðƒ¯ÑØ§/zkoÃ\roQ±)¯\\CªX/”dÒmQ`÷2ÚRÒ¥.èúhÒèë/I.êa0’­bÎRŽwòJ2ŠÛî2E*í¾æ“2ê2efWÓó4S.¦Œ%»-3A5±60gî£åF7!1²è‘Bî+!\0£ÂÚÓR_7ÅPŠ-‚jïé(üI2ë~^,18LC1±å8¥-ìÉSLÄÑ7‚3Fºhþ×¢dÃŒ0î®Ne&Ô¡ê©\nÌ®PB“l\"t¢Ps^ÙsbÅÓ«8'¦KŠ\$T‡ð_Ì£’9nrm ×eŽcOðÓ+ÓY2±K4'S9„«-SCt8äódÔR§/Qèô´;*S-.zíÕ=\$ãCÐGR!&òÂøÂÝFlŽY²·\0’jkrC6ÑGªhí”O3SWER[I\r—IT++”†P%¬}Ô£4]6nxé˜qpÏ£Š¸ªÎÄ¯I\n&Ëp-”É:%o*±¤ÊtGDÞB\nàŽÅFa(”A3ô‹CEO.°ë´ƒ&“UH”uÕ,¢0jMAEô›-s,-† ¡c…óS4»LÆè*%ŽxMå·Òg”ªe\nGM·EÀé‹Š5u=\$•CUKŽ—,…‚©BˆjG„ÆÔ©ê\"Â¿CòD1s*²qJæeçø­T—13i)ÁQOY¤£YõˆÿuKS4RÑU­X.µ[FëPµMPô¬Âl[0:­u[\nÕ7\"³—FÑC(Ôs+äUPdUó™]õ¥R5•Gt^l¦#…ó3]3©`’}RrèTè©ëS;!èW6µôâ&èº3Ý[“Q1IÓDþ6#cµoUÕ§Q2÷_oIc”ãcÔ-+´`é–H#%IsÃ^(úÃôeI%SJî®I¯™X´o^Ö/Oõ–Qóß¶‡f©]óeTVîv…VÂ'íGQ)i/Œnï,@­»/ÔôÊ3­ö¿GäãWEŽ3ÌñQœôu:~Rå;Mi1ðÖ)FgHCRK\nývß.¤¡#nqÎ6íQ±JVSkvu0Ê\"¢«²,\$ÖsÐöì°ÙqU6Švÿw6fßa	nìÏoOjMªh8\r€V´àÒ`Ö	¸½ @ÈLˆ?hhŸ ÒÈn êËæŠ€ê•\0@Iþ\rÀ@\n ¨ÀZ\0@š Çw„j.·=Povu·+ó!ÅžÔÓsKWC6¹o×±1R¥1—1÷¿2ÃoWÇdQ7fKM&iv5s¡]GøB… 	·ywÔÖÊ\\!xùÎY\$ÐðÊjD`ÌiALDé'\\Õ¼wŽ%tv\rpL6;K±3\nÿo\"\0Ž…“r&•Ucnà	‹Î±„k…¸^Š‰^<ƒð@ÔÊò0²?4s†ûñxø÷‹/ãµ[ôGˆ7A¢‰>±Çm„[vZ¶W‰QRPˆ;ã\\«@x„D÷^–+Y‘`@¨sâ<Ä<—´ Þ\0é\râ–ø­<ŽE¶èÖ±9‹ïôváLlpÄ-Á<(‘ˆÜòuc¬g€¬jqv€)L/stØå·‘r‘Å>`\r£hËfÜu ”ÉR\r,†Þ\0Êg@¬\r Êà\nÀÂ`ê ÚÍC‰,ÑÊ|·3?#\n~Íö\nãù;—¥’‘”ˆoÏŒ(Ø‹^BÛ\\F\$’^]’.üxšÌÌ³afg“‰Ê‚üÌ¹Bk‹-æ„Cò<ˆk”yKŽwo•YY]U…˜\$[Æ§NGkV/5MLRÀ@	\0t	 š@¦\n`";break;case"ca":$g="E9j˜€æe3NCðP”\\33AD“iÀÞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4ž&\"ÀPÀb2£a¸àr\n1e€£yÈÒg4›Œ&ÀQ:¸h4ˆ\rC„à ’M†¡’Xa‰› ç+âûÀàÄ\\>RñÊLK&ó®ÂvŽÖÄ±ØÓ3ÐñÃ©ÂptŽ0Y\$lË1\"Pò ƒ„ådøé\$ŒSÓÞLà®\$ÓyÉò¨ü†ðËÎ)ínÔ+OoŸŠ§M|°õ)àN°S†,ê,}†ÏtÒD¢£¨â\n2\rÃ\$4ì’ 9ªŠ²’¬I¤4«ë\nb*\r#ƒæ)ã`NùŽ©(ÒË£(9ºƒ\nHã0K« !£îú†KÌD	(ðÈã+Ð2Ž‹³ &?ŠüPø«ïH¦—µÃ\"ëCøç®ÀP‡È#\n7,€…-#ªzp£EHÜ4ŒcJhÅ Ê2a–n|Ü4Î\rZ‚0Îøé9#ƒÓ¨±ŒP&¢òÈA(rê1ŽˆS!B1É[C¦rGôŒÑ5¦ŒKË´©@Ê¡9Á(ÈCËpÔÕEUÉsìþ½B2EYÅÎÏ3Lá+%ì(š1ØƒŽÃzR6\rƒxÆ	ã’ZLƒ¿iÏba†V¦ÖÌ¼Qµ:Œ”·( ÏÓ¤ã[YŒ@Âß Ì(ÝhZL @)Š\"c\"1²• è?OBöYã|L2S%1MRs`Å0C“\rRM%5„ê‹QÅì£ü7\$ãž6ô JU„Å‰Š\rk^„Bˆš*º¤€PŠ<\"Ã–j!ãÏÊõw1L†ƒâ0æ'’Ž¸àÏB’f6H SFÒ¤¨èÞ3Ïäòà(c<ÑŒ€¨7«‰ô¹ŸJsôÜ31T8Þ¼2OÄ‚<£Ã8Â¼¸ÙZ›\rÏÐÊaL.7nø@!Šb¼ŽÈø2ÁÆ9gðÜ×\$©:¬ºº\ní®zðÝ<§“®¼92›\nb™Í¨ÅÔÓ+£€Ò9E[’ëÊï3DÔ9³Î|Æb’Óp“Ðæ;®µ<	Ù2œ€@&ƒC(3¡Ð:ƒ€t…ã¿¼#ûâ^.£8^ïüð+¾ŒÁ!xEwMˆéê‹èÜð5„Aò(úÔsÐxÃ>AdÕ …2lÉ¨ap§”\0äÙ“Ñ1F¥²ØBL'B ‚¡ä6SÈ;®A(1+bº“zq/ÆÌ˜HL‡M’…!\00og(©A\0PTAJB„Y3›è\$óNúi/d¼¸Ñ@ãá Sæiã,¢XæŠÑè`äÔ“ÖŠaHª	™~?ÒFM\n‰1	\$D<šH„©ÊÚÿKjœÝ!@@eÙ%AÈô\0‚&7N1¬Ö‰O a6.¬Ù&3dxS\n„82|F	¢»Oˆ)PÈÒK\n‡‘°ô®˜Ê¿”äBu'°;2wDJÈK´WÂÍš(Ü¼Éõ\rä|*‚î½×ÉH#€Ì\0Œ!ÂxTäõœ¯ø®£àmM¡ÈÔ¬}ˆ(fEÉå5â+\"‘´³Z8P T³Œ@Š,êJtÂ, êU¡~šKŒÕ’RPšp\nCi\$BJÝ‰ÂÐ\nàêPÌLRÿ•¡±¤¥dÒ¨AÄ í“¸wŽr„j¨1HÜMyå<&°ž™ThÊ˜’dqŽ8›¼¤`ÙS¥‹vQV‡#i‰C&*Ä2®•\0ÊZ#+L‰YžŸø³+jBa¨4\"¢²žkrn\"à(+\"%Þ€™²—OaX—Â” aDªŒ¾¤J|6‡F‹::ŠIüÞ­ÒNÍº‹ÏCÅn\nõuP*!Xˆza	\\Š·äù]äñÏ<T´ò´†9Lây7&!Y¦¶+`(¤ø2F†âŒ™bÊmÍU·i\"(Éb†·I˜a£TrPÔéD	TÛ·J04ÊÔœ•Í66õ+ÙXGÒxE\rË00Œ1N zxOG=šSUjçP\n\nGè¼£0Šj	(ŒMžV>~Rš7® º’v@›SjAV‚ð@CU;L4•V`a€ÑBW2TE	àÆ~ˆüõuÞµ'£ð«pN&¶©‹‡@\\pUúEh¢ápfË¬«Â¤àc>Óˆ(mÃŠl:BD`aæôÊ'åg`òI5•mùÁ…w’LNéñRþÃùÑcƒ±1²ÉS%3l ÍBa=Šñð;«’@H‘Y\")`9 N2øn–m«”¤m…(—ã<¥šMIá’b¢ÄhòL&÷Ô;†PÅ•²*AÙ‘s¨×i}ŒD|aä›1øù™T! &…lÛZIï¥ÈA!¦Œ1d¬•;¥Áæ[š{¦äÒ@ø®¢æUÖdyF,cú¿õÄfÃÇ>)c\$KëÅlTKú4ìC5­rÖÀS¶~¡ì\\7nv“@1{TÍFTTÊóÀŸM6nŒƒ¢O««6ä]†#FÔcÆÉâ³§uÓhg„`((V	\rFãž“÷{N-Ö]R>Å’ØÌÂ¯òQk…m°µ]ÁðOkí=´,ü,ÐÜ¸¨d(“gkK'Ou0hÉ“nBç.š¸q)Ó›’”r©v¶ÞÛ4ý¢ó~[µí_\reò¥T*™{ýQç¬O]íPÆYI'Üÿl®¢Ç9þ2ÛY“D{½®×å5Û!Êò¬[ð>ë]aþÀ]»(ì‡³³\\ÓQ?@Ã¼ãgò}naµÁv…ë¬ðÍ¿~<ÚðtÛœ±í³oÍ/ŠO\0&e)í>\r‘u.îÀ¦B+M3 „f~ãq(Oe?ãË³ÿ<¶Ý€dêý¼Ú|\"‹+6OL—Ä”ÕL©ÂQBdÙÁ/p¬3Açª&Û£^¹îQÊ·Þ´ømn×‡YB–\$œÿ§wù‰gz§Žû?ƒ£±õ+gy)ïÛŒÞ‡®þ¾4Ù_»ðÞïØ¥¸íŸÎíÞÛÞÿú¢ë¬¸eÞEì\"®¬òs)°\"8ÇïÒû®Æì¯3OâèDØîdlþ¯&0ðôbæPmŒÔ°¦+Ž«¬1Åüü®“IÄÿÆ|5hù*Z9ÊCc(Ý'(¼.šýfP àâ;¡†GcüDÙ…ˆ”ð®·	 Ë!ypŠ&0Jµ¡\nP¨‰PX©Ð•\np˜MPÂŽõ#çNb1*„®RpË\rpºdÌá.ú§mnëœ¸« šÏàðÏÙ+Œ.°Ð­‘p¬ðÑÎ÷-x¹ëŽ EFP¼ë·°ìý„@DPœí‘0¾'>ý.ªƒÑ<\r\"b	´\r\"¼nèGOi:Y'\ný\$TQÅþU°P)„-f¹­Ûñmj´ÆÎ<¿‡•@Þ\$‚ø1zý0+Ç”×(#NïOäU­–OHHÞb\nÌ@†H Øi\nM	zÌJ&¾¨ƒ\nw…š&,ø˜g:@Ä#¦ð\n ¨ÀZìkÃãî~™†iÎÐÅãCOƒÆu 2DèÔfg\\^VHhs-Ê³ð>+Ä%ßi<1ãÔ?cúÙK¦1k¬øCÍqÏ¢L(ò¢B÷Mø1e¨\$£(v‚d—qö:`™&Ì6^Ãn2\rÒÆ­>DìÆ®Jd\nþØdSÎlä>«ªï)k)±¦kÇe*cy*®øOÕêzÛNŒ\nŠ¾6C5P§‡CØ&Ër’÷#ûDfe‚P*dpÏs)‹SRjãâXä-È”j—'3\0\\-Èâî\"ã\"\0x£Y€Ò!MäeåEB^MCù-à@³€Êê¸W êžê-£ú\\âô?€è=ê¹2æ/\"íê2\0003¶²¡\0qÆr¦ Ñîˆªsi\$R¤JÍM+/Ê7xs0\r345Ó:NPµ\$f	\\£0bÆEüC…\0O`	\0t	 š@¦\n`";break;case"cs":$g="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ði6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt¬@\nFC1 Ôl7APèÉ4TÚØªùÍ¾j\nb¯dWeH€èa1M†³Ì¬«šN€¢´eŠ¾Å^/Jà‚-{ÂJâpßlPÌDÜÒle2bçcèu:F¯ø×\rŽÈbÊ»ŒP€Ã77šàLDn¯[?j1F¤U5›/r(ß?y\$ßºâ¡±Š¡»”Í¦Ö´JòMxÃÉŠ‹(¨³So\0ë4šŽ‘Êu¾˜=\n Ü1µc(Ö*\nšª99*Ó^®¹ïÃXýƒ˜Öa¯£ ò8 QˆF&£˜Ø0B#Z:¾­ûˆ0¡Æ)02Ž ô1Œ P„4§£“L\ni©ŠRB8Ê7±€ä4Æ¢˜Ê=#Ãl:)*406Çƒ(ä P‹!	¨ P2ÄC|JÖ°lj(\"ÃHÐé#›z9Æ¢¤®0ºKèá4Íi¾ž.â´69¸è¢þC{ÜòMã¢–5µêX(\rãÐÚÒ\rÍê%5µ}#I´­ëfÁ\rcªÕºˆ“p5Ä(ÈCôÕUe]\rV]Zý.o`á@1b0ê7\rq  ŒãÊ3¹‘¬ýLP@PÖ2@ÉÐÒ;J¨°ÂÔ±s‚¶84dØ&&ˆ‰0mûö<•Èƒ`Ìã’æ1˜AN«óPIâˆ˜›²åmP=Xm‚4\$Àv4Š71c{ö;_¬[7¿…7J7´ÊPNu!IbŠ=á)Ä“ðèœÍ8ðÑG˜ùRñ»“ Å3HBÐÛ±Ø’6¢C“\"Ë‘dˆ»]{¶ V-—ãNTñC´þó\r”SÎ£3Ã0Ì¡\rÃ*V'Œ“ÌÚÈÍÊj¡;á\0Ú7\r÷‹PŽk˜@Nè¾½=´Á`@=mÚüI[þßÖ#lpØ6ÀNÃ±;.Ï´îë¶•û}ù¹M›¢k»o~ôØîû@í¿Á_76/\r~ì‰÷µ\"[fÝ¸O©C>¼ÆòŽs›ï?»ð:3HŒF:&…îö5§\0†)ŠB0\\kƒ+¾ïC2R6°SÑ3ÎïÚÞ»Ùv‰»ä14“Z4;8»)PªsÜ7Éü7wvqí¸ÍQ¿½Næ+O«º6Ê=á¶‚ŒY4Í¨4&Füˆ\n{Do<ò@C0=A :@àx/ðŒ-wF•q)à¼1‡0^VOØn}á¸‚%ìƒ:0ƒA|1\"5€ó7íƒ óöxaÍ™2˜T±€\$Ýá‘‚4”…	;}¡Î¿å8‹ƒfqäÕV1zI	Á:O‚¤•—’÷Oz;èøL»BøC!E5ëqa}ãê\0\"A‘œœgŠ¼\0P	@Gæ+H³á@¼†kcø'|ã8È0ÅÑB<†Ç&‘Äy'Œ—™Âg#I;x§UF‚tM^xZiÏìŽþ}PJšT*¬55BüOá1ë\\ b®D‘t\r-ÜÉ	Èv/è×¹ÂŒÌÖa‘Ôý’·+]I?((\\Ÿ\0žÂ£-/òåƒ§¶ôÅŠ¹(nòìÎÀ‚&Ú\rz~˜4†pêpÄi¦;¥c(Å§æVq˜5ôII9V\r¥ÌÇ£8G‰\"–Á´7Éâl‚¤Œ7äÁŸbHÚƒÑN	]+@0†CÔd:\$ÖU²RjÉèv\$Hí°Í68iM\"M\$4ñÓ‘BŽÂrf}	„:‡…TZKè„\$U¨‚¢D«‘TÂtèVŒËÁHÆEâ[ØR\$	id=ª”EÔ-;Ç€V×tÀ¯É1\$¤¥Q6þÚ\rÜ'Jåè¨sD™ 4GQ£¦bV‰šfU’–)‘9¾Y©…=–:y1v2{hDtÕ’kJÒ-:JI„úËähäyò‹åÁõ©Dƒ•1AÌ\\9NäL‹‘ªFGÉT+»ùONÍø† ÂQ.-Ð	á‰Ï6\ndÍ\rC.áQ¢CPJzG„HâRþbÂ}³•Vñ®Yõ+cÓ’Œ!Í¥†ÌÚIØdWÚVP¦Fj¨e`)‚-\0ð‡XÜ_7¨ã!Ð´jA\r±¨L\$|My9´ä›S±Zq0Gðä9aBqÔUÅ˜¤Ö'ŒD×ùŒŒËlg¯H­Í%5)›ðÌ¯×aÏ„Ê=ë0ÈCÍ©d €û¥³ZPQ¨C\r´ìØ¢þ•±å}X¾¥ Õ©–lO¬<æœÌÕÌç_ïùò	´Ör&VkŠ…»V‰MQÙ«¡nåµ&‚çNØ—ñäÎ–SU«Tf®}³Þ/©J ªêu³IÚ9h©}s¾ŽÍúFÍ‘(¥¡V:e&—8ÚdÌ«q&«þ) vœ€¯­%jÇYh™øôfxÑï­ÂëÅû­4^v\r‘OQg§ÙšuêÿmÚF>wÓ³ ñT‚¤£-õÂI32!ä~pFB‘FTpNÜ„Š¡TýÌ‚ÛsY¡RÄžòV©’VK\nˆªn‹ŒG\0w¤¢¡2²7MpSi7 µ‹-ò–©kÀöÔ•\n¡ØÌ¶·ŠV„¼J1)I°âr\0èdL9Æõ†;54©Íþ~7áÎ¦Ô;ýËØ€¾U”ßÝs_4ƒÒ¤©üÝHs¡Ï	ù¸'œß*c)MýžQVJtËËÓà~€ê¤¯¦®^Ó²”u#Æj©/l\n‡e¼u&µÚÙ‰'õpC@())Èi\n¶„í˜†L—:íX¦/ ‰÷ðØ¨‚DÿaHw•˜§Ÿ¢ŸZ4¶Š°‡\0A…\nÎüÁÃ\0Q’ÅJå\$>©&;2ÒzGR L×›äû`G9”§\rL¡v?Mi½‡P~]‡¥Ùv]f½’öÍÕ1_~ÆpS¿º”z®¨iw³)dì¯¬>|¢Ðw©Sùyù¾i_¡½È:<ÛiRÒ)9M„{Igÿ¼üu^„¶špù~ZÖ\rÿé–ýöùÞÒícštÏÈÈoÎø/Âý`Âý¯ºÕ ÐMX¶\\Ãjp§C¤ÄáÔ¦Þ‹ìR‚V¦îàÄÃ‰O…ð*Ä°/lü÷o°\rÍîÃ\0Þ\rM¶7ÅælpfªŠ¬#‡°hÈ&!Z(ãö\rIfPEHxÄ4ì#ÅV¤Â2¨AzpBócšŒPx&Æ^Œã¸ƒpö¯.\rÌŒp<‰²„É\nˆÈ+.L¥ÐM0R¬7ÍÚìÎœÃÆ:º*óSE™Þ¿ð÷oœf°üÀ04ìZ%oˆÊe.À,”Éˆö1ëq‹(ôýÞæàªÉq)ïuËT÷¥4Ðz±4#-»+W‘1`´+Ú3£Ö®f²Á`–\"¡|ÉnÜ\r4±D¾hÈ<ªØBl‚þÐ÷Q\"4®ˆþ°ÿ\rN©œÑ”üÑ™Ëœæà´Ãà@Èå€9°èS¨Ñ*TQP7±´X#q¾ÈOÌTJ°Ãß¢ü¬D”\rb€@orñŽöÑç¤hëï¯ñô@ÑùïóëÿB By‘Ð#qé!cœò°5.¸Cqë ñ±ëPh%<¬DäÆD­\"p8êqÅ2DAW²PÅrGq¨ìMï#lTÆrÆ2\\K\$>E‘'ÃtBL®”Ñ\$¯WÄ´ZrƒÒŽK’„”°Y À\r*0Æ.0E4ýC#©Ø<£”‰L±z§’×‘”m\r,H§,‡à¾p\0¶ÄÀtÒÄ#RÜ4rÌm\r.G %`–#'<<Åb^‡Jƒ¡-á22Ämã´Zmþ0þ`-“(CDÒÐ þM72iJù³2ð2\r5`†Q@Øc¢(eºoN\0TÊx¢ˆnÅJÈú^hoRAMýhÉ\nâH}.hòÝª\n ¨ÀZW1jX%#c8“32 Û-m'9¦tö°37.¯.gœö­TÓ5b b*\"íL¦œWl`¼¥Eðê\nÀô/ì¶JªåC\"	b8òBüC8­ê\0Šb\$Ê£òoPÂ@î1'€·©À¬© À* ÝkÂ'ÄàÜjB\$jô‘ëJEè¢œDCPÜNº0JÙ‡æ-¢ÞÒÎ¸¼¯Òfâ°çKEnÏD¦î(€à&£å8)E”i4wFo mààäãÆ(NƒGTd_icP­ òY…§ÐSã\$EàA†NÔ\$nØ½ˆ€åš¢B…KâHó\0ðW ¬'HÃÎB/03r%£öHîgIŒOÎJ(Ã\" ‰N±„\"<ÙtŽ<À´@E'J\\f#åfDæ0-æÀ’ æ°\"šGú²¦’¯Õ*±YFÔqQr<tæ\r5\0´\n)O«!ñì€Š†1†Z–dV!Æ²";break;case"da":$g="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"©ÀØo0™#cI°\\\n&˜MpciÔÚ :IM’¤ŽJs:0×#‘”ØsŒB„S™\nNF’™MÂ,¬Ó8…P£FY8€0Œ†cA¨Øn8‚Ž†óh(Þr4™Í&ã	°I7éS	Š|l…IÊFS%¦o7l51Ór¥œ°‹È(‰6˜n7ˆôé13š/”)‰°@a:0˜ì\n•º]—ƒtœŽe²ëåæó8€Íg:`ð¢	íöåh¸‚¶FÛþÈA´ŒàwZv \n)Þ0Å3Ëh\n!Ž¦~Çkjv¥-3Še,Ã’k\$SøV¢‰G¤Òä˜)ÎOÙíÂŽ‡“…üœ—8ƒ“Ð\rî;j˜ŒŽ€èž®#+°µ°œ2Žƒ´\"5¸C*É\n-\0P˜§¦°¦<ª(¦…<ðß­ƒ°Ü‰éÏˆê0¨óµÁ\"‚È¢ãsB­Qx¬Â\r¨ÉB²ž‚Ác¨Ö:°†C4ˆÀì4Œ£¸+Ë-J|	ÃËBØ\"èhÈS0Ê„³\\ÚšŽrlîÈ¬¦4è¼D0® Ü34rÖî\niÓ¸4Ë8æ²3Iû¦Ü/ô Ø‘>ðÒ6,0¨¦§cF3¤@PÉƒ<ÒóØŽc\$è\n\"`Z5¬’\0È7Bê±„€ÆžÐL1†B®Ñ{e/Ë#K%Ž‘¼s0YÈÀæ„² PžêÂˆ-°0ÀvˆÅ>¶ø(-Úðµ/âHÚ8RŠ•Þ“\rm²ÕphZPp§sIÓ¨ÙBÈÞ‚-(Þ3ÕR©6£¬*\rð,€<£ƒpæ:Œcê9ŒÃ«=\"-c˜X˜XÀÂ3Œ+[’¡ÍtàÝ_Œ¡@æ¤â¨Î<ÒëKB!ŠbŒ¬hJ–„\r}å)S[n9PI8˜ä<áÀÕ,`è“Äãš\r>®j%Q³C¤jnûÂñ´1â2Ä\$éJ 9VñŒ49\$S:±§[0\\ƒ@4'£0z\r¸àáxïÇ…Éd¼¬ã8^¥rãÂkOƒp^.ƒ’ä:pâøÄ™ÃXD]Èó`¥D!à^0‡Ï(@â,il³¨cŸv€´\0ÎYöëû¨2]†¹ó¨*;z´6ºÛ«B6µDRÛ¬êN¸1àÉ-½qÏ¸¹ê½Ò*‘IÂtË³a\0 \$\nn%ð'Ê(J˜€³¾LƒOrg,íž— @‘Jk\räy4³~ÜIQ,%Æ}!=0ÌOƒ¢-5½­sz·ZBŠjÍ¬3žCÞ[Èˆy`ä4¦°ÜÞ‹M&¡'“ÐâO©¡ÇX—„Èäßáš)aŒ”f“Ãƒ+aä¤•¾àžÂ¡FÏìãÁÐ×ÚØ /d\rÚ¨ÔÁŸ\"+ð¦²…ŸQ;'§°¥†—zÝTiJ¦Î”¢NcÁ\0k2Dpt\\ÉÃ¼\njÔž–¬\\F\nA•Þ¼HÄa‡n	û\"˜ì‚2Ä8æ‹€Îe\0R^Ä)C­ œ¨P*YL E	V£>EŠPaEË„¨({eÒ/\n‡ñÈÀƒ‚±m;2¨FDhC±m‡Á@»_æ0¦@ä”ÑLsÂ0lLÇ8I‰Äsä˜\rG´3¦xo¢’â\\‘Ý.2€j\n§§è\"jÖÓ°¦I3Å~­¥¸sÂüžÈ9tö<ÏÏ™% ºÊ\0¦´R¢u(ô¹Ðtïd;‚}ïÅùÂ×êF\n#tp\$‚–J?JZR<TS|)òVnWŒ¥\n…Ô»—ð¦CÒe83D›2Œ0D:Ó–w@W¢·É:NK´Öžà–åºi.ˆ•—õ¨iQâ /á,’ªPš0Å)n«è8*PÌNƒQ¶“EòNÉúØZ9¿­•º¸2‚Òo×:?y)\n–´0^ØÛ4`³™•ùk/á Ñ¾þV_!ˆïðŒCQžÍ<ú‡ˆ\\bj\0¼«'xbÈJpMf(SÄËjkbU¼šžÙ=®¶†0ZaJ–Ã‘	k`&Ü*Ûvñ-õÀf¾Ú’q®EÊ{h4¥«…ªyBx7<°û]®pd·‹Ø[ð]l£Í¹{×®è’p–ñÒœ4'X;§Rgˆé\$2bn`ý(…h[²L£‡)(ŠøW¡ŠJ©7)M÷'fØ’ ¨Úu -Ì<‘Smˆ•2 ,äš“¢ËËóÀŒÀ(\"†Ò.Þˆ,þB„Ÿãx©ÖQ ô2Ñ²„Þ\n<\$ôìÕÌŽ¨L§¥.3¿õ«”j®N(P,ËOü—U`Ð\n\r°À³ ¥PÂ^ú/¥ü(0’bLSî —‹ÙNÇT›s¦pcY…#Šfð—[¬AÊ|*e®Ý\\'['ÓP\n)™q\$@¥2LÂ¿r¡ŸSó¡L½¥èYK\r\$Û`ªs&ôžSßÐ}?f4ÄTÐøîÍ-Ú¹‚ß[¹(5ÍuŽ2æžÖ‹üØw¡²¶ˆ\"väYbb¥ä^×ÙÛ1vMÉÇ`'gY-3|î†Ôº–ÚâÖ‹³­\$É°“u×-!°¨éš²qEnÓE²wEsÞ’{{lÙ@+\"—­ äEúÒ®*ÎG½]-e\0q(!û?¬ô-ç¦…³ñA§Ò&ÜgoZÑÅ)“œˆÈ£É{…*\$õßÞ,g• *87uWMêƒ«=i\\IŽµÓZø.+\"—	5.}½ÒÍ\0ª]nýÿTz/GßÚ}2ÍŠ©¬­'Ûý;OÙL­Öµ–ø xúFÍ[—u¥kp}fÔ¯…º;b9¢ù¸èÅ~©‘JM/†Ù‘^§‰IÓdûa;6Èí\ry¼×…l;#¤øŸâç'h ©ºœô³	Õ¡Åñ* îÝ“×—ó÷ë1âOvjJ¼IÓÀÆ¼‡\\Ø~¸¥jÌ·«½˜kõþÛÆerOÚŠºöºÖü&5Mf'[×¿ þíþ§ÚVi¥õŸ˜hÀ©^+×Êñ×ì¿¬òÝAŸíö¤_Ëÿ£üõä¿ÖÔÙ,±Ý??ÙPW÷ºG¾þ_gÈýµNc4±ï8@ÒÏI\0¢’]„úã&J\\bäµO4¡èÄ¢~ËËáf>¼@ÍÎž\"inµBÆZ\"Ü0:îÃµÄÐÚíÌÛ+´¾VºðZÛJ\0d\r€V\rcÄ\rmÊ§lãþwã>4-f4ÃZÀŒœzC=0Àª\n€Œˆ Îu\$bPâN¸M¬Š…6z„½ð´º¢„*I”m”·Ú¸Ž0I\"0çhÌEîz/bfÏBþ7¬bÿcx/Œb¥U†Ÿoòx¢,5€/¦¸¤ÉB…£ž«jf~Ã\0U#œvâ¢ €R\"0å‰ž4(ªŒš=¢‚ÓBðÓƒÎW	FË:Ð‘>M‘BÁiÎÓì¤ŒÑPŠ6[¥p\rÊ{/ñ^2Iö[¨&#\"¢0¿‘r‘¤¶K¤êQ)< ‚2UÉ@	¬È@M`Ò%HAÍ%q°T©2ÅøÙ¢B/âRD)<J‚Mn–ABtÆ6;…·‚Ú)âþ\"ØœQ\n‰Ö°àÊ‰\"z@PMƒœ)ÆåÅP.mnG20Ê¯Âþb{GoJ)÷d¼Dï1#Åf\n\nÐxP\n5B.\r@";break;case"de":$g="S4›Œ‚”@s4˜ÍSü%ÌÐpQ ß\n6L†Sp€ìoŽ‘'C)¤@f2š\r†s)Î0a–…À¢i„ði6˜M‚ddêb’\$RCIœäÃ[0ÓðcIÌè œÈS:–y7§a”ót\$Ðt™ˆCˆÈf4†ãÈ(Øe†‰ç*,t\n%ÉMÐb¡„Äe6[æ@¢”Âr¿šd†àQfa¯&7‹Ôªn9°Ô‡CÑ–g/ÑÁ¯* )aRA`€êm+G;æ=DYÐë:¦ÖŽQÌùÂK\n†c\n|j÷']ä²C‚ÿ‡ÄâÁ\\¾</‡ÛærQÓ¯@Ýš…S´—¬†J97%?,äaäa#‡\\ç”ÎÂ1J*Ž£nªªÅ.2:¨ºÏÛ8âP:®¦ŽŽž—\r	fÂÏã:9#c2/KÞ-)SÞ¡µîz-:`T`æÍ0èíH49BpÊÎ:CÖã(Þ6Çë Ê	¤V‘£ƒÃ ƒËÔ6»h`ì¸Ãòâ(#˜æ;ãéÊt¥ÉƒxÎ€SÅ2LÈ;Âï1Œ»v:ÌlÔTåƒêÞŽ®¬¦Î¨¯x¬­á49 Rú¿¶ôqIH<qèÊ:¡ŠÒ9¤cÒˆCÊH„µ%L–ÍXAD&(ò@Ï+z4¤x‚3¨Ã(Î‘×Û”:¹e(­J*åX@RüõQ(õ^ÍÈÜÿŠƒ(ð:\r”zX5½gZ°!\0è¿-è8Ç)»bˆ˜‰r:r\r÷ø7…¢LjáÉj¤¬œVÊ2˜×KSSœá.…áˆcÔÛÏ3LÖ5Ã*r5-\\–\$£„Ë\n¡xŠ<dS3„÷ÒlÓ‰\$˜¦	5`ÎÞ0UƒÞ6P.Ú´ƒ (Þ3ÃbÏ\\6#l`´ÝÊÖ^9ÃzV6\rí @&MÈZ+bV\"Ìnƒßdä¨ë@–„\n ‰¨øƒ\rÈ¸Ðž )ÈØ:z=© Èf««ë(6¹7ÚþÂäl›2ƒ´íy^ÝŸî•Rn°í]¼¡[àÝ¿&b¦)Á\0¨7´Ï%®ÈçŠ/#\0 Í’#L£hêŒÄJxú?ØÅ!=jf éL\0Èÿwü=z¯3ìU¬3Žc ÃNPÃXŸ%s[dìýú÷àÊz^šªL<äÂê³”Ç‘î*w…íúþîÈƒBáŒÁèDWÃ p@¼‡xˆÐmháÈ&PÎÈØ/[F,„\0^—1‡%ÑÿðÄFQ¨\"Ì€8õúÉn€¼0ƒâÏÝ±Pnq¡’6kQkp8ÁÉy‘ÂžnA9X¤Ì*Ÿ`d^™'2'T(€ B™-‚¦b §Èfo«Q+d½2òÑÁ\0EGHÅÃüi	N'M­™HÀNyÔ)ÆDÎ*è›ãd:‘œŽ‚‚¢\n_‰O#áÈÑ)C;°B¤°Fòƒ*ù\rÍV,r`Â#?'\$Ý¿;ò|P4ŽH¤Ç\0\$ªQÂð¿‡\$0]92l®Ò;ðÐRYƒ\näqË»Sg(d™÷‘…tÕ«\":C\$\n/gT–E SÍ{Ë¨•¢”i\r¶kQF2“0 Â˜T©è„€QƒyJl†¥å‡§-åñå¤”°@ã‚[E¤MsÇ<\r‰¤—iÕ7(à¼d™EP²XÁš\0ÖRrÂtDtMr»§P\$Ðì`¨\rz#-5¦GHù°Š!Ê}7BÈÜ±3Ëð2!…º/€/\rXŒ¡UfÂp \n¡@\"¨K•A&ZŽx	Ñ‹\rÁ…\$#Ú¨í[‚`>é\"9)\$“òK	áÂŸ,Ð­A)ä §ó&¼Cl'0äT€›“ÚdÂqøom¬÷×—ByNÐE>'Íf™v.säH¼v!ô¶.iº…¤úÂgaÞº}‰þË°g~ÄÌqmFu14cÔ‚±‡\r+ ú®s|íCX0ÈKXSã¸-'N3-xd¸»’<;jTW„8!¶Ó³C‘¶´3Î~”°ÉÐkwnY{2XÓó<Ivù“êÍÁÄ+à‚ÄØ²f¢Ã(wº*P·ÕÄ—Ñ²´—à›HÃTˆU•Í¤ÿ#&¤†„a*ÒšSc#NIØh®¡Ö»²Âè¯ˆTÂä°êá%«…‹zä0Ñc¨ÖÈ\nCŒD°1Û`î\$ªg\nA¼þ4s˜.6ŒÌý9ä?gÙ¡”èªT E:èÃÈÓ	%¹°^XœÙ—TqT<¤f{IÉdÀƒY’X{CBf5¹EOª Zö9+&'»¼sbnjz\neƒ;™ÛSDB|Ž×æz²‰Mó®Õß›2ãÍjÏ=Ðåìàds	`Ê´_C†,¶¬\\6‹8e{7eý ™ž:|Î)?:™¼î_Ö¡b¥—2˜P{á%0m³:SH_¦i\nª(þ÷¤r–‹Œ»x{Q«~„¬Î£1†“d2Þ¡ƒq¢¼F0'(Z:Jvy»`FºäÊk\0¶c&0 ©S®b-æ«#™L=%EHC[)fk\"ˆ7‚@»Ó2™Ä½ÈÛ¢ÓÆJË2Õ+À-ƒ9<én{.ú+dÏƒ.žÌu–¯)\"€^*’ÎáÍVék´{QZýj Õ±n+ãßV­eæ½8˜~b°kíWã ƒ˜¥‚¨\$¿—é¸Î%¨:Ú¡R¯œ½v@L¬ ¦«U[\rg¸¿\n<{òÇuÞkƒlÒ¤ýq‚¥N/+²df›¯ôe/¾ìoe`üa™;ÑÃÞÞò5f»õþèÏ;ã]ãˆöþ&½²^=øÏ—½Ý¾4îšG1åmû»KþhÏDÈøÄ+ã¸~ŽÎ!ÓÊëS1ˆ7™Ï/Û1ªjF0y´'}fòõºeƒ}…8ö^?€öå1e©Ÿ®ÁÞèÀ{ÇÚ8É3\n*pÀ‚ÚJšsìŽ†ßbi)Mì-èÓÓD	­né1G;I>€ú_QÑò¶™YÖg”ÃøÛgq[4‰ëë|B:[D(¦/Z\r¯^%O®\rŒ0Î¾„–Á,éËÄ4,&Â£¾ðŽŽ²Ð,øÂxëCâ½åŽÿPBïæLÓ`ÎÅÐEË,Ç‹P0ðÎ‘ÐR)°Dù°QNŽÆðwÐLPl>6@”°Š¯ÆöŽ\0‚ÔM>yŒHú†8Æ>áÎý‚fóÈÁ/0©ný\0V…l¬¬\0S  ´pÚÐ{„kÐ‚´@Þ3§–:°âé€à (f\nC\"`ÖWîRÿK`Š âS…«ŽòÜNöK1\n#Úìë@²Ñ	Ñí¯±Î9@Ë±ï¾ð…»B¾â‘C1#Ðó\r°ðÈ\\ÂÂŠÃVö°>RL6S°¸îm1qÒâ‘n:±Y1\\fDf€0Ê1°~¶ºAãªö‹*CdÇñrðñ›‘|ù\"*L\"¦ñ«ÆI>=à®\r\$\nPGºTny\rOÊ™ è\ràà¬‡\0spÓh¤Þ\r½+,	f°Y§6)šª„Î‘Í¤;G6&T4ÂvõLÒB\0†P Øqøx¥^E£\n;\rÓ@@è\"Z*†~BOÈ†`ª\n€Œ p4©ðBÏÀ0lÈ‚ìëâpÕÄ-o,Ô¤øÂ;&-déšLiHçn>\$í°×\"TËƒÆcƒ\0¡ƒÞÜã²=ñ®›`4„šJƒr6.ÝÊ@‰~†r8c>·‚ÜGàôè@˜#D–	¢RØ¥\\¤cÞH¥@\r£¨ÅŒ\\¾q^#®#§¶.ê<¥Ö\$€RâŽ¥\$!Jø0n?/\rÞ# ×g.Æ)';‚ž\0Èm@á0s\$0S)*O1jKÑlB˜#³<º!ŽHq„–2éøž¦>R\0ñ6i®õ£„l¦J+Æf3-M-\$ .ƒ€AËP?\0êæŠÇ4+¸‘ÂtJË¹\r###Rúd”…\$™/ƒI/Å\rÓ®¨_M´@£,bË<ŸGˆ©¤¶)\\!E=åâ¸c†Jƒ8kVhÓŒ‹KåqDã¦„¥Øií %ŒX#ƒIà/b";break;case"es":$g="E9jÌÊg:œãðP”\\33AADãx€Ês\rç3IˆØeM±£‘ÐÂr‹s Òv7‹DYT˜Úaa¬b¦ØâE2H%’é„Z0%9¦P\nÊ[/Š›¢¦YôË2†Ìh5\rÇQ¸Òn3°×U Q¼äi3ÙÌ&ÈNªt2›„hñ„ç2&›Ì†“1¤Ç'Lç(>\")»ÞDËŒMçQ ÂvT£6ó±¦>g‹Þâ§SÃx½Ë£ÈüÈŽu“ëŽ@­¾æN <ˆfóqÒÏ¸”prcqÞ\n)çìæ}ç#u› Ò]üri¼Þ&fÉËvIÁ›æà¢©ÏP·Ùÿ‰Ö :›Œ\"\n€Ø¿2Ã´4¸J¥¾ê à?j Ò«&B Ò#\n\n³9ÈÂH”¿›‘\"kPÚ2²àPŒ2¥¯Û‚4-Ã!Œ*ôO4@)9MàÊõ£ äa•±p™¤Ã˜ÀŽ‹ú1/Éú×I20§4®svöÃîx†âGÒjsRkù'5èØ&\rëˆÜê·ÉC†âŽRñc\nÐ{pòMüß\r.tŽË®K,:Œc¢0,\nÃ¥\r*D0L#ß¶‘pœ:Œª,pÊÇÎxJ2ò¼4ýCQ¢óû,ÄÏÈÇ\rÕKÊF34¶æ°ÃI†YÍnsš Ñpž9FLB‚9ŒkËðŒ³;ÊñM@ÓCTêð<I,HÇW×s]Z6&£\n=`0ó\\¶›¹¨¨¦(‰€P’7ldFâ¢£ë\$§…ŒáCm8·pRa?ÑTšQ0¾ò|Ë#Q4•£4ÃÖ!±ú/ˆŒ¯ZŒ&óC1aRˆ(42HÂJF·\$ÍØŠ<\$™l_Š¥¨&a3&EâQs)\"D£d|Ì³i[\rã0ÌòV)‡`*/]W€P¨7§cÜà¿0õ¶‹Žc0ê•\r“JÎ9…‹ØäàŒ#8Â³»!L6¸ëÀP9…0ˆÞ5²B¦)ÎÈì¼Žp\\\nÔÀØ;?phÜÒ·û,+…ÌiPÌ·\r»O&Rš9n¾K”ñ¿sx@a•)ô“Îê}2P&Ó\r¾i…x£¯Ü<á?í<7S	ƒ\0¿/	@à¿cºÝP*ƒ€ÒÆœ8xý`Ì„C@è:Ð^Žÿ]î•ˆä-Ã8^¼ývÂòŽ8xD½¤í@éìëèÜ5„AöTúó€ð†|ÜˆÂ#ˆ±P\$@MÛá!„e.ƒÂL‚ eFH‹²Ó:¸2Ót„`ÿ‘‚ü‰˜1æxà•D\n™Ó?'ìþÂTûÕ©\n (PÞÌa  ”bAs#E™q“\$°æÈ¨yäT1»ÔœPšøs\"¥œá‡#¡C	K\$ÁšãüéZÑÆ5Ê|“æ:L;+CPUi§Ò6áÏ(v§Å{@\"@×q-2‚¥È1Í6(<É†V0@O‘\n\r € †GÊ‰\r‰’Š¤l@¹ñÍA2\n<)…Cøká£/Á¥Z‚ÖŠ‡GÀ=t8M‰Á:i¬:ÇèÎz(8Î1&ó\nBŠÜW ™£8¹OÄ\0\rèÄ•ªàXLt\$|9\0@‚¤=–…•’X%\$OSRFó¢ø¬F!r\$?IáŸù”šÂÚ!*YòBÐA\nF&m ž‚•.¡´14xàÃd½FdR†Pâ@	9D)«!3ž´KŠÔA<8*ô\n‘ ÉólpMÆQš¹ÏP1&,Æ›³;1oI‰þœ. ÂŽy4<§èÝ°ˆ¯)Ò‰Ù‹±|“*Œ…YÑ%5ºÂ>¶Õ¿¨Ìy(+fi!ž	ûg®¤d†£Øðp!K&-\$`¬æ×HÄ\0“'à¬‰üË)\0êMTºàÅMP—óÅºûáéHLé¤2ÊÓ†¿«åŠG˜Æ,ƒ–ç³TMaR¸—ã CÕ/=AÁ{¬Ô§UËÀd<uQ—68~Ë;ƒ.˜€¤ê£ÚµEôB‰\"åÞ`ëcaÆü³ÜR°ËyPd€–sžÃTYˆVtÕÞòA<C’3ˆ=ã§¬¬©£n%&î«V\\§± U­,Ã \\Óê.Îa2²:Ör)áLÁÐ/JPÂÙ%<·Ô½	Pe\rH¡{§£ˆ‡š.TÀ¼¬ªf~eƒz¥T]N¤eo„	1ÁašæÓ…™>%aša+P\\pý+A¸†O†ñNÅxµ“#jP¡›˜+AâÌZQz±òÂÚªi€•{º8'WWJ[ª`aØ¿',Åá+!6SÄY Ô¼[–ÉžU1	\rºA2ÙLåƒÌç¿öXg»Î•@9™â=r´\"çôí¥RÜbJqD(*GbPàÔÍ9”T'bÙ(¿h²-é²ÿ;´C-,Í>B¬¨\n		]–õù[ò‹.9jPÁ&e6Ð\n™ä|¸¸k|T¿˜+¯¶ºùN”ƒ²vë­µ³…ö©ë³\\„lìR7GgÛ˜¼lnÕ¢”6£Ÿ÷è_WèoI&î·¶[*hÎR=Ž‡éé’J®N!¿\$›¹}Ã”¶è° £¾{Ûbæ[•M¿0Æ§<(kàžqí#Ly +…“nèˆm?Q	²­%¨\nh^ÜFŒ‚¨Ï\rt\\¶­[d5HÆ**é*w©KlrŽ6Îy\\	ÚjOj±L9&v¹žìÞAmYäª8LUÃs»_´¶¼	‡ü››¼c„s\$ÊØÞF©ÂŽã†Æ?ukÕ0á—ë\$Ì8­\rîÊ\rãû²0Îë­Ú8žÀ¸|×³ÝŽ'Ëv¨L@ÖÞØ\"ÝrKÑÁXçÑ6^ŽÛ•è=º<Ú|5×.ï<ü®qˆ²p\$Û¾q\$\0PIWƒ¹Çv*õ‘!yÊ'91Á³ ‘<¡6JèT†æÝ_wiÚÛy'ÁÛp®‰»ºwˆá[Ï=m’!ûî[S¶Û|B{_.ùÎ—¢vÞloÔq&&wö}\n©ÑoåúéÏ }È©Ñ-­Ð`Àƒð¯LoÿjÙ]ûÁt^éI*±ð›õÐ@DH¾ÀÞŒ‹ò^Ž|Ý‹jd¿èüO–æ¾ã°ïÒæfU¬¾[¯€ýjÕp&<ÜúèôUË4ýçP\n[\$\$ácú¥¤”\$\0ìqO´JlHõIY\0î]Å0Ëï¨Û.ÛpùP0åÏÔaâ\rð}¥	L¢HÐZ×/¾ÙJ<èm³î’fª=	ƒŒ#K–»4JÐtè«¶‰PÂ>0ØH1¼>0,0Š%Ê¼¤¬¦eiPØ¼Ê:c0¼þ#žÀ„	kkw®‹¬×€/ÀÐ×¥î.Kv^\rÒ<âF¿vTÐ>­OŽµî­¤ÇˆîÍãç˜/D’\$Âèƒ0ÂRc/Ä,Xë\"bÃQ^€J¥Ly`†GÀØhª0È|Û„9ŒÓB,Ö`äl¢dÆLãì‚o\\n\0ª\n€Œ pó#†0bÐ&LPêÈ¶ÎL]ÏL#DˆÇä4#l„ÑŠ®¤Êˆ—ælº\0ò×¯ Ï\rìÜ0²=ƒŒ<…’C‚ò½&<¿ò¼©àäôËOg`  dÔEÂÔhB~±db:r(Ž\0©|\"ìdõö#å²ïCf³¢03ÏŽÉ»\nª:@_ÃJDƒˆŒòF/£0Ùo8‡éX5Òk\$Æ/Í \\rJíè62H~8Æè´'¢÷d\08/²³À„>Æ¬¯2ÛèJOíÆ±n,¥ªçJ@Zr´áZáÅš Ž¤Ãü#£ÑÀaƒ^D‰XO”qÀíüÄ‰z¤`á(Ë@ºCôtnœ´bIƒvGÊÜ’TÔ*ziºcî`¬ªy\0\$¶yË.b£`&ç‹-ëA.2_.…ÄŒ1E”EÀŠ/O ÚQp;+€V­T	\0t	 š@¦\n`";break;case"et":$g="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$ÔX\nFC1 Ôl7AGHñ Ò\n7œ&xTŒØ\n*LPÚ|ž ¨Ôê³jÂ\n)šNfS™Òÿ9àÍf\\U}:¤“RÉ¼ê 4NÒ“q¾Uj;FŒ¦| €éž:œ/ÇIIÒÍÃ ³RœË7…Ãí°˜a¨Ã½a©˜±¶†t“áp¨QŸ–lÛï7×ŒüÕÁ9äóÐQ.SÃwL°Þìëá(LŽ¦èG›ye:^#&X_v ¤RèÓ©‹~2§,X2­Cj€(L3|²ˆðÄ4Œ€Pœ:£Ô  Îê†88#(ìÞ·ãZ‘-á\0000°€!-£ä\nÉxä5„Bz:ëHÖB8Ê7¯èµ/âd(\\‚ÿ )0Þ7´ñx§3q|óŒ-ðÜ“,ïHå'­òHÉ%¤h°˜7­ˆ«ÁBS‚Þ;h<‚†¡‘‚FÞ1“ë	8*“~Â¨£Z¦¢,âjúß²I Êø…°’\"Šñåª7íŠŽP­¡­@TŒ9Ä#Hä5¨‚ÿ*@HKS£#¢Îï2H»×A'R|·ÈÊ“·R‰ã¢t2CE•%ŒÓÓ¬[2ž²C`è\nMD¿Š‘E\\•\r#XÖ£Dí ínÃ¨Ø64Ë’\nŠŒlc\0(‰h ì9 P‚óÈ»g\"´ãéCtúÞBÃ\n0@U@è7mú~¦Ëý&¿ÌÉ&¯”¢+!ÓT;3³ÔÍ6¢^RPË&'H¬D2 Q†J­x\"\$©Xä’B*s™f˜à@¡¶“É‰ds+Œcñ}·XÙÑ{*ËÅÉHÞ3ÈÚzšÌóJ\\R\ròá'¸¬`óÊÆ1°ƒ˜Íq/B9…0å¯Œ#:2ö!OÄä…<ã(P9…- ß£\n¦b˜¤#m£ƒÔö%qKÒ²Ò6çc«v4¦±Ž°ß\r›UvŽ–£rzÂ¨Í¦Ê4ÖÈÙŒïZ©Äñ{JÙÈ(|¼ÔÄŒ©ªnÂÀ‰R9Ç9˜@2…DƒÁ\0xßÊ3¡Ð:ƒ€t…ã¿´\$•Øä-#8^ú|cÃY°õp^\\®Íè‹í“5„Aö`8 ²Ü:xÂÁH&¸7sN×Q *D©8zþÝ1‰u½[ÀÃ4Iù7á°þ¸\"¨MB)P)åèù“èù€JŒµÎ|\r4ê.p „%„çØÂ£RßY©þ\re¥ç+CÐÙ7@.žÓ‚ÖTSH|S^žIéƒ‡°¡HNÜIIùA\$Š“,	)3§ÄÁ³LkÁÎ.Z†d¾å\nc%Ê7Ÿ@@Üéƒæ	ßBjxS\n€µ ÆºôÝQÔ\r\$Ê6)È²ìZºÂ!qˆ²\$ äIz˜_RmÈ‚T€-0j(:HÎºOa©s°`ß ðÎšì˜Ñ9&0T‡)æ3ŒvHV½ô`KÑ‘.§ Ç€ÌZJxg=ˆˆ<£ÂÈ)–-á<'\0ª A\nN@@(L³­2ŠÙ'Z¸0§4†G'Ég\n„x ¶VÙ\nÄÉl•@{_5ËÔ€þŒ2.SÇTà\nC²®èÛ-=ä|ÂµŠ®]jx\\a†“VjÊ	‘~.­1Áé:ž™!5LLLx(ðáA‹_\$ðCW3C)½<SÍqžT–‚@V‚_WÎœ†O‚L€…8áÔß!§FJ™”ÉUZÁ@u\0[i‹A0ÔCxrR|(\r•œ¤ÖJ\\él/UÐ‹W-&ËÁœ,ø·—æFêðiJ”!¤\0àÞaQf±çHxB›&.9²wQÜÔ°“Õà’cP\naæü…ÂržÂ\nã[5@À½8†ôØ­2Sê\"hX¦KÕrÐ8'­²\n'øg4É[²UpÅ%ÅF¡P)ŽÂ(RG‹¼^¦¤æ{›¦„]É§z¢”(P•x\$¦\\B(V¡8*4yNÐË:©µ©,5¥ßGŽiFxdéÑËæä©\0/ µS+þZƒt·%îˆÝ”fÚIxjK\\ªG k¡{	wXò¨Iª«¹øÔ5%B}48pªª¢‡1e)ÅÕø†¼dŸ¢ÁÝÇç…#sâ—Ã¹)„lŽÒBBHÉ- Éh@”ÅS‰2‰(’,œ‘d§ábÏÉs30 ç_2¤\r8Í… aªˆÎ”“È¬A æmÁgX’àuu«@:™“qnQ¡!(jËÏÜµ„Ýa&µú/¹ý!…CšTJ’SSò\r‹×ÁA¨ÅÂÂI?AßÃpRXr955AÆª(½Yaˆn±ÔÅÎÀ]oa(\\M’\$ä ZS²ÙKŒ•«ŠÂ†Rò®WÐM-Ï°å´«*·ÚÛcjlôæ¶s.Œv Hía§µ’øv²o Ú{\\ÉPe´‡e¼e´Q‘àNØWá’k­QQ5Y{ß‰—c<…]ìù†™¨kŽ¬á¬•1¢9ºËö–t:EÒÔ³Q€¶#B«êpü{ª±¡´hœ—tk¶Ó¯‹ß#c*s“Rû­±C/áB©^ži7ò¢×ÔòSáž‡¡F!s6ößÍ29Ëwÿ(ÔhÄZÍ€ju>=\r|kBz§V·Ý?­îyÄKØL°F°¢ÔôÌÚÃ¡Ã8\"ì€]ãp=¹z÷µAÞäm¶“®á=i\\Ð¹Aš`qn€r­–µUlZhP…lÖ3»<>ð²	Kê¶úi\\jlâÑmP9¢ŠQêGšõîqh*¯²R\0§šðSì=ÊŽ÷|×^ÂŽÓS0‰ø>Í;Ú˜ðPÆûQüáy{¤çì¼»Œ}_žqˆÒâÁÝ(r+÷ØNEWë?Ð@Eñ¾aRûÁÍÚ…¯t<!'ÿôÑÅî££xýÏ®ú&B@¼ê¦½HøüNNÑ¬‚ç‹ÐÓåë/jæð\"ç°)¯¶ÕŠÕ‹V—efÚel«F,5‚Îý‚làÜV¨ãÇ*…°RSHnGH0¯ À”\$ƒÍS\rY¦!>/p‰ð:Öp1Ì«¤Šk °\$ðozêL‚ pªˆíÊbÍâðpVkÂ Ëþ¸…\\F€ú\"ºŠi†DëLvÆºÈ*ü…°Ý\r0ºüÅpÐ¡¯ÔW‘Iäh¨ºË°»EäDÏ¬ûÊ­c§\rp°Õ„®AC~ûPæë°šÄCÜK0•mx:¬‚	ˆ,ÈH\0 %„‹·¦@I&¥ç\rŒCæ¯Æˆ}À\\*#hI&‚KŽUoyvÔ`–× Ü¢ÍîÄ,Þ´\"lèÑx!%F.®”¼-ÂMh9ò †H`Ø`Ö&e0Db)izüâ.h=€ª\n€Œ px`Üh\n9¢j~âÒ\$¥®ÅL\"j×˜Y¤¸'§†?Í/\"m`Ì(T\rëÒN¼/íÀ£ÍžæÃÎÎÂr=ª×#‘À\$\"!&¨¥„ÇÂ>9Ï0ÅJLâH^2`NI°¨ lÔRëŒ4ÅÄe\rÅ,>€ÍN¸>\$\rHÝY(HœI?Å¤¥-G ÒŸ	j†\rîè`ŽÀ¡’›(p¯Bö°Â@34%\"æÒ°UÂN±rÃ+Ã¦Q+(­¦!Ñ\npL¤Œfb#èŠí²d\$ô‘Íì¡-ÆÝâ90e¸¡cüŽ\"†Ÿ@¤ÃâlÏ¤ˆ#rØ\0¬„ÀîNÀÇ1©ÚÔžÂÎI\"dðE~	h(Hb#m¬O%¨,²’·R¢KL)ï²dMŠ¤2¤¢Ò²S †yÌúk£Y2k1ÃB³3	+Ž0hæ>†Èo…ä7ÃV\$’„‘@œ\$D-à	\0t	 š@¦\n`";break;case"fa":$g="ÙB¶ðÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+XÄ!(A²„„¡¢Ètí^.§2•[\"S¶•-…\\ŽJ§ƒÒ)Cfh§›!(iª2o	D6›\n¾sRXÄ¨\0Sm`Û˜¬›k6ÚÑ¶µm­›kvÚá¶¹6Ò	¼C!ZáQ˜dJÉŠ°X¬‘+<NCiWÇQ»Mb\"´ÀÄí*Ì5o#™dìv\\¬Â%ZAôüö#—°g+­…¥>m±c‘ùƒ[—ŸPõvræsö\r¦ZUÍÄs³½LÂv4›ŒýK©\"ÑÊ[˜–±GXU°+)6\r‡ž*«’>n?a ¥&IYd„—ÈcC1È[fâÁê„U6©	Pœ¶H*|¡jÚ®¬¡\$+TÉ¬ÉZU9P“&—!”×%E‹ðö2Íz˜'esÎª 0“´–ˆr«41\"Èˆ=Ò	P¥?Ä:¢‰–oñÄèR@ÒÊ’\nÒ¤lœd¨ª,\\¥²ïªbÅÉ„#®é½i4¼ŽÁ,òZÂM‘«úC³RêË<–1\"K ÒÛí°p´þ•ÎèéÙ;‰*°p£.À¾\n´1»ŒÓtÏ7‰+þ¸d#Q'oÔÄà•éò,2=TáT„µcëW0êŒ)B¤Ìô°ÂÏ]tÉ ,ƒ²DB:…–1{S£¨\nÓ\nBñ{0ƒÑJ›)±h\"P=¨‰TÀ uC!>ï[¯l%vüM&!|ÂâSö»BüËÁ\0¦(‰•ªhúSë]É•\$%•¤Ç\\®‹´ÿ;0…lÎ0­:Ñe7F§”„oI·v[)Œ¶´–R)„®Îj†(þ9ì\"‡¶êÓ<Ì«6þÜ©\rˆÁ³«ãÑ-ãPÎF'Cå“ÆIäp•••\0Pä:\rƒd’”J³þÏ ñ‚7ŽKž5Sä50eÞá(òSŒ`ª2DF(U“úA&ÄQnÎi\$„B%mêFŽH/lêêÏµëDÞÏ¶;ß¹î³ú=¼ïuI¾¤¯×\0ðT]1Â¢)ø!ŠbŒƒxÖ2ÜZöZ\ntL‡Ü²Ã°O³b\\¦WfÅYÄ,~Û¼[É-pô·–êÕjÈ1>ONBPn®?H^èÿ j¿uYË®œVâÄ­ŽÓK¨\$Ä2œy³»i÷3Õ:¡¤¬è@!\0Ðƒ(f ˆ4@èÐ/áÞàÂiá¡ÈðäÁ{°ƒ!à:;\0æCxnà‰Ö.C¤áˆ6ÜÁ>bí¤¨äDà/ ù1¾Fö¤šÃ]B\r ‚\n£Ê›bb5˜+2[‰Qz\$9V¥–`LÓiP'\rô‘:h–”N,ÉÙ£tb±Ðí)gYS·¾ÐZCqA@\$Nbk‰íÑø’€PPÁKÅ,&¬Ê81\n×Ü\nOE)µÚ›„ƒcieÒ13¥¶HyMoÈQ(‚fVPkŠ Œyõ¼ÖÀ‹_‹¹{ˆüD8ÞÌ—ë–íˆ\$‘ òÃ¨ ¥VàÞÛ°UÐ4æ \0q¡”9Ì\0ÌƒxmA äëC°Œ6ðæfÄÆÀ0†pË%–D~F¹G¾ÔbTÉków\rÈ±ªtìJrV_ÉÝ\r–G¬qŽ¹F¤’V¿£Ð‚K-\$ž1E¸¿Äüt§(Ø£Ö½ÙöŸ¨|¯…î'¡6Tô7tÎÛ‚0TŽÏd‘5øjØˆr/å#ÇÂŸK	\$|faK•ÖÄšIòV3Ï(×IÍ8¨o ('„à@B€D!P\"ÔÊœ(LµQj¦l®Ö¤dLQ-2¦n—ÔYaXK„›Ÿ…#\rY¤x´P‡ WH¶WFL½Z¾Ÿ³8=HÐ÷4ãôGâÑ)oqéÏ«T'],Jn|LEÒ-G&|DENM©?*Å%‰[²Œ¦9T;:ÞÔ¨\$©œ<õ­ÚƒÓbIÒu2Õ8Ðm“›³“Ý6)õTbÌX-*¯F%šÅÑÒJõðõªUªCEq(\0é9Ó&ïÊ¨¾Šh„C6èPÛ1¬²D”\\¸5xAî¥à|É˜ÔªŽ…*MKU^¡)EqÊ;:²V9§¨húÒ­J\\cLŠ6¨ÊíE‰[tFìÐ_6ˆ½#?¸¤I¥‰MXs+©?\nßS®ƒ	Q€JÇöÌáƒ¶gìT,­v :Zˆ™j2¿LíöúÊüTÂí0o§ág¾èˆ [öÆ6\\ù?hµiÁ>b©Ó´«o'˜\rdfÓ óD˜Ì˜¦¦\n¬òØ¬aµ&V\nÈÓ0\$˜XrÒg6†6ƒZÇs˜	å&Ç7\$íCÓ0r’‚B§2#æ¸†ˆÍbO5Î›0frL3ömµÄ‡6\\²¶Ñ\"¥Ì/…+ÒÄæKÎCÛ£•·Käq3¡N+‡²Èß¤P~•7Mïàý¢&…Éå8i§>êÚ;^ÎzµIššš‰•HëÇ TöX›\\«p\"9³E+;0…4v°a	IÈ‰¥\\D´Ü¬Å«µÛYS­dä‹Lí'Qó7iŽ66á\0Pï3ràã‰jvÓèhemRcÄÉçóxà¦\\§·Ê¢:å†Œ¥ôEbu:»UÜšW–mRRO@´dÓpóÄhi^ÂøS’®/\\øCši¦ÿ\n¼-@n'S±ö1`£'*äbÂ©r°€P€)«¤Í[6UmSfðÞõŠÜÚFVƒs™œÙ±zÑÛ¼–oˆ¸è}6ÚdÓs´6.íßrªsü›€™&ÈšïvÄ†K#ºÛåµÝ™¦S®S½·hµ)”ú3„~Š÷§\r%wFóî=âåsŽ¢eä®MoÐ‘»Íqï”krLá™i×ƒ\$>{âÖ>òËè[—Ë\"_1Qº¾å~pTÜ=Qbƒ@“Ûß«BTeŽ¥É¥XÃP¢©Dè%gÅ´Õi¼‘@+Îâó‹÷™8Äy\ngC9ŠR1ÀöÕ‡ËëÖ^|†ÞÞoìýVáê·ç¬í;L§¬•ø~ãèÉ.–O}v1»]êðî_Ý†¿ŠvÂ_Ñÿ•Ta°Dç§®>âMetI‰£¢Œ?a°¨Ôc~\rLîëÎ~Ò9Md±/îôk]môü>þÎÞØ¦DÄ-žôEü½ƒŠF*Ä¶ÐDD°NWÆ:õpXÊDúã†ZF(¸:ÈÄk«Íƒ×p200†þn¤î%-¥ý†.ÃP†ÿn¥\n0‚•‹\n°õpœë­0hüpªÆKfoÐŠ¬ðÆô.U	«\\BŒfÊðjþ¯³¦1\rÇ\nOW‹tddx>Ð,üã^Ê-xìmúø„É­EG!ª°q0à}N÷íÔ¦Be­df,E‚¹g\0Iüfå¨Ì\nðÝHŒf^1íub“/ž±DØ\\\"œM'*¾Í³kˆIì¹…¼ÝBdO(ÍÌÆkK\$)‡lÝ©Þ¨p˜ÛÍz5.® Æ€ä\r€V›€Ò`ÖË\rÆû.¨°k‡à`„6\n ¨ÀZ‚.Ê'/ 2&jðÏnÜÐq²\n¼k^B¢Là@Þ‘¶÷gK0ÒGæ @~¹q7P!%° í™dÌ”R_ÎbxªìMMÇäxQÖöb¸¦ZCjLåç&ø*Z–¶Ó²TÍBV}âVÔˆ¨\$Ã¸¬åŽMbÎRF€ßúMDÛÊ‚M‹XømÝ'ÃŒµë 8‹xÞ2ˆù/pIŽ)Ž['‹é'ñå‹])Ò­#~or‡*rŠ÷	üûF¹ å˜Xdn5d)qîù*æà„Þç”ÉeÀZî ÃŽL^hjïclÓä¸¤Ì<ûÎ4\\cø0ÊÈÙ†@½†!RºwÈn½ãÞ1M8íÂ=É8ˆÃµƒ&RIð¡M)8‘\"zÒë§2éæø4Kø°ð'3R£s/É0d2sP	l™fœ¡…º>ce‚7æÆ3€";break;case"fr":$g="ÃE§1iØÞu9ˆfS‘ÐÂi7\n¢‘\0ü%ÌÂ˜(’m8Îg3IˆØeæ™¾IÄcIŒÐi†DÃ‚i6L¦Ä°Ã22@æsY¼2:JeS™\ntL”M&Óƒ‚  ˆPs±†LeCˆÈf4†ãÈ(ìi¤‚¥Æ“<BŽ\n LgSt¢gMæCLÒ7Øj“–?ƒ7Y3™ÔÙ:NŠÐxI¸Na;OB†'„™,f“¤&Bu®›L§K¡†  õØ^ó\rf“Îˆ¦ì­ôç½9¹g!uz¢c7›Ž‘¬Ã'Œíöz\\Ã/;{ºíxúkG'•®œ,shy»¤f3a}á¸ÎîB«¶6\r#›+£ª€“µc¬¦`NÂ%\nJž< LˆÒì¡*¢®¬©Šâ¼¢¹ë@*#‚•((Â7\0Pœ7£*Žˆ‘zPÝ„DÊBÐ0˜es\nŽˆKðÓB“82Œ#¨#²q£&±'	Ü\n#¢˜òç˜eCt\nhcSÀQhçF,R¢¤µtMt+\n»#s&°t|í1©¬_\r¾Ìé?»jÕìµˆb†Â»C+\0ü)Š”2O3Ú: Ò‰´\"ž¹ã“:7“Æ1Êì(ÐO@Óéó‘IFc«R6˜ØÉ½¢.2xÆ€HK`XV\$»]¶Âº\"3³gCŒ\0ÎÍ•#=û\nVl|9SÎ‹L–\$)}‚a—18ä®C#&1¶iÂô‰‰ciI	ŽËÿ¥#ª|2Ãƒj>Â˜ÇyªIò&)ë“É£(â:˜eV)Š\"c!xWƒ+´J#¤iAât’Éuº8ó›-¾\0U_Tá¡\0Å;a4ÀÝ=3æ_&Cšm^2\r°˜0ˆæ~T¨s&Ž¡á#b{™ÀÙ­3œ£¢…Ö»×e@Ï>#÷*èˆ£Æ¼ÇˆzTÂÖK8¨NéN§>`ÃF€@É=†3î‹F„W8²”4%ÍzøÂ§B%ß<à%Ô7ŽK±›ñ0årT¦È=4+×òÕW.\0Ü²JðÉyÃ¶\0Úî Ap*,|láÇ°ª/%wð¦©Ì s_6Õ·á?[t)OHXáN7AÈt*\rã^<b˜¤#=«,¤º°D óŒ¨Üƒsjêd3%Ãk<‡²©ÓÍ¨4–3'sBDc„—=ó<Î ÛæB¢]w®üÔ¥>ñƒzo%´‘’‚zÀ²Ø: ðž†ƒ*è\"\rð8 ^Ã¼!Á„2<rrKƒ8/cÐ©€¡£²Á²Ml:A¾I—˜k@ù®«¶Çˆz€¼0ƒæbR»€NQC2œ	“Þ6P-G/8€hKû5gèíš—ÄR1#PÌåBÒH£	cVÊÍ>™„î…ÐÌg2 €(€ G¨pkÊh‚¨E\r1_1Ì†âJrSê‡ˆ\nƒž2í³9€î}™WŒQ	`u\r®9!’žsÉI“†HT½˜²÷\"Øuêô˜!äÈUa¤wÆœÔš¸Wžøo&L…¶eX›a…\$8 ¢a)!Ž`£¸f£œáÅa†µ­¸VÞBB€O\naPŸ:Ð@µ×š:©8T†IŒçr²eHØÍu‚¿’Œ«ˆ ž½eùÍ‹Ã.<šðä¶ØLu\nŠYyj#Èl\rð‘¢•®HŠY[&`&'º‚¤wGŒxÎ¯rbJÉi/+³cPƒ’g:‰”¯?ÏòaI…„†6Uè\n	á8P T´êž@Š-BFHÑ¦“Ó±Bœ…K“sš‹*\rê'E+á}ÔbÃ„Ž#¡X£¯Ã[HÌ™ùAÉ+×ÐÀŽÉ‹æ°ù¤2 œ0©\r8ýªÂI‘ë!¯Š¾¼kÉCP>çäý§Fhœ³8)DAë„LVKl6)á›ÇÃ²TR¼¼3±éuÄ†¨N‚šÌ`‹A˜¶Æ¥gZ£BOmžÄØû9dˆêõD³²º,'rB\0Ud]jÍ.š\nÖ‚”ra10<B]Éê`ÅúP+\"`4—<‡1öJ.iTI¡„3OôŠVÎˆIR+‚› jr.\"'!ïq ”s%ª‘ÖH0R™#Éò%†=¸´ªQì±¢@Áµ0ßT))!á—¸IˆIÂiá´ƒ!Õ6U&¸µúÚ)´¼¥ëÌ3Ó%%^i³SÆáMâZ(\\¡'\rØÌþƒ2Šƒ’ˆp†¥•¥QzMas(ŽŒ1“	…W¨âkÛ&rÙèBMhÁ°#*ns3Š7å~x Ìè3˜UŒ°3bGb3¿\"5Þƒ“Û 5!Ž<0Æ˜C›˜x¹Ä”ÜDSÛª[¹Ñ†0î3É¨Y¹÷?Šñ3ƒƒ)ZTh‹OUYØ\rª=8;Ýå+‘:x¹’a#°ñ£ôŽ{ÒšÕj¶%™RævÕAªg­&gsö´:Z¿]˜õêéñ1°&:hŽµÒ]‰š)Z)§ò5ê\0œ6’\"Fr.œ¡\$«Àe˜¨ÀRŠT‚2!•¦ÅneøÃ(bØz=KQ¦`2ö­+¯=ƒ›NC2ùÑ1GhøÄIÕî+Ùy‘Ð–ËÛ%±gèÇ¼Ä4îÆêéŽ±ò{hELx´„°É•~6*a÷	ãâ§^q…ÉIß'å1&r¾ZD%\$'l9Y²'ËC)ø?Z'¶’eÍ¥æœåû€žthÏåã=Õ2Q:Xz’ÐÙràÖ\\iE±ÅjWÁ@0ä[öL+8\nìš1Õ*›EŽÜŽë¤Ÿa&Ë®Ð©Œ•i’V°ÞÂ Uön/ÿUè¶ºÈNî‘Èm´Ö]§ÛfÝl\nW}’SÉ•*Ô|o˜!>k©tN›ã-¼|ó]+¼¢fËlñ=µô¦Ø•†ŒÜšA=ó^FÒólÏ½ÃLô‹cßRv—îº‡!õšyõG ÊIÏá=Gm´y­N`õàeÐZg6è]¢@OMús+Ÿr\ruöÆ˜Ùt„üµ5çˆT>çôÃŠ‰-õºé•;ùbºbþÎžüÏÜÿoâÅNXþŒ\\ü®Xê/ˆé‚”©ç³b8Ã¤vIØú®\rí¼ˆú7¥úxÆ*7B|«g0(Ü6€@,õL°ÃNî3¨¾!0 r\$BÐ0‘ÃØÙK\"…°ÃÞÆHøS6cçDªVoû\0ìXÅËä,åX@¤öÂ®2: ‚ÆËh!LqŠU°o”ûð	èòôÉê;°Çƒ&è^ÊïbU„\0	ŽNÊPÊP8÷l÷©Jæ#'ìãÏ’ï™SÀÊåQô°öglo¬£ì‡\r±±§*ò(n: ¨QÉ”:\$„.\$ÁÃ\"LÂ`biÃ@‡Íxè¯Æú±÷ŽI\0‘[®[\0o(3L—ÏÍDM‡Ä'§ÈÇnåÆb>E„;åJÊÊ+%¦îQ%\nñŒÿIÌHPï¤à2¦DF.š”†JÇqh´Pó1oƒ»ÐÒä1xþÈÆQ¿í:è‘ˆ1×Ñ•\nñæÃÏlŠ·îDòO‹núøp×mÞ±ôEQêÄò\0_*]ìtÇ‘ùL€åÜÇ,dGÌÀõpÁ\"’\"åù N§ §!R*Æ,w#©\nÒI#²NGäOààÉ¬Ÿ¬‡DX@Œ·#ñè+÷Ä&ËDØ+²5ð÷&Ò€Ë‘ùBt	ô÷”EŒ\"ê`WÅº ÇœÌñ¢·ïG.Ê3f,ä¬Þ·¢\$fø³ò¸ß2¾ïBu	²1çŠJ&!Ëð2ÐkìÎãˆ#rÃ/¦X&?/rˆï`†,@Øjl\r&J5pa\réìÌoñ'\"v)M²¯ð„53bÉ,ÆC3‰p§ ¨ÀZ\rTû‘uÂÀ¤/²Ö³P)RÌüÅÈÙïÞ#ÂZŒPœN	HnÎÏ2N³\nI[f\"iÊÄO–1äÓ'	Ðêì|\0E8àä†3#2cˆ—ÂQ1êVì†¶]¢Ð™ègÓ<¶> ØoB·\0[:3ä^—¶ØÂ”ë\"63T,C²˜->³>³5R*¯n‡?sæ¸“\0´T;í6³ù>”'pË@‚AÒÌSšüÇ;gN”‡•	­”G¸#¥º\\%ÂÌ+BkâMÒ\\_#ü«ÊFRì«EEê?Ì(©âƒÛ&ð \$´ý‹ƒ\r†×‹‡'¢\nË,§JÂ^ÊP0\0Ü(ä¾@ãÞ€\$š”NÊâ¢Æ\rÆJ:*ó@Jú°ðÞd),õ/=Tº°±<q…ÙóHD_JlC‹ò1»,`	\\­àa!Má#ä]ä\nG>\rÀ";break;case"hu":$g="B4žŽ†ó˜€Äe7Œ£ðP”\\33\r¬5	ÌÞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\Ü@\nFC1 Ôl7AL5å æ\nL”“LtÒn1ÁeJ°Ã7)ž£F³)Î\n!aOL5ÑÊíx‚›L¦sT¢ÃV\r–*DAq2QÇ™¹dÞu'c-LÞ 8'cI³'…ëÎ§!†³!4Pd&é–nM„J•6þA»•«ÁpØ<W>do6N›è¡ÌÂ\n)êîæpW7­Ñc\r[è6+Ž*JÎUn\\tó(;‰1º(6?Oàôÿ'ïZ`AJ–‚cJ²92¬3ž:)é’h6¢²­« PŒ”5Oëþa–izTVŽªÞÀ¢ƒh\"\"‰@ô\r##:ð1e³Xò #d·‰f=7ÀPŽ2¤ªKdï‰Š¶œ7£ ÄŠ+q[95Œt>6D0„	IC\rJ\rô¦PÊ¬BP«Žˆ\"¯£=A\0åB Â9;cbJðƒê5¥Lk¾'*ì”‰–i æÌ/nôòŠ/©GRë¾a“CRB««0\0J2 É èÔu*‰SÕ38Ô:B[fÿÀTŒ<:ÃXÆ4ÄƒZp3Œê@Ï¢µŠãG¾³8ä4;\0Þ9IŠ7.l[ê¼¥c[7Fã]ž«5„Y2mJÃ<¦)bÖ6Õ€Œ:Ã¶â„˜Æ0Ï\0¢&6Ýð¼§ª6·ÊäT©¥wdÜÉí2NtË)JŽ.‚S(«¾)ªø\"%SÍ4ðc©Œ4¤YŒ^5‰Ìò­ë’BƒdÚ>ƒ8Ò:£}|\$£…ž½ÜxŠ<gÓå&¾/ÐÍA”\rùU\$0Ê9jƒ’8 ŽÕ¤\$îIKÓ5ÛZ7ŒÃ2€…&õ“é6¾¢ Þ×àA\\c¨Æ1°£˜ÍxC#~l7abB9)€Î0®áT«¾2…˜R›˜dL°«´u\nb˜¤#&ÐÞ7cfZØ6•#Ô9&#ëu>c}\n<\nåŽA»[¢ã×XÃˆ©0ÈÊ5\"“çÊ¶Îtç: ïIt5v;ùß£˜æ;Ùõ Ë¢\r*@ÉÔ‰ˆÐ¤ÁèD4ƒ àáxïù…Ú‡…Auž3…èGú\nË€\r.Œ‚#†ƒ9I}A}J«D™àp6ÌD:À^Aò\"E%f*BNŒ#Š)Dd97’…CkÁxd ¤†PÖBƒX r-æ†äB Hd*çd­ÇxJÃÍ\rÁ¤ãòòïqB\$	7âïÌ›…MeÍ‡C:§Å9pä\rö‚\0 „HAñ,ë‚˜‚ƒ™rŽY¬Š—2eƒq0J,ê²zØ±Z3©Ž,†ò•Óáru\n!r:È6Ìù‚0Ð ²nHˆy4à€2#S\\R£JÔ8¤êaJPfD”B]ÈÑÀsa?F™6AC€a\$Üø‹¤0E¡‰1\n<)…HäoœQâÙmæ©”¿Qe\\¤ èàƒ´²p§úBÌˆ4AÏùVdDUÜ6\0@½ã‰»OÍ@˜`Ó\"šû&FÔÖ›Bb‚¤a_\nž´R”ƒ‰”£\$¥,©\\àLq\rkÁ€Ekx\n”EG²#–·Œq*ÇÌèÑ\0Ì2~L2šÆb¿Š3Ø!Txø¢„T~—8z¢áÁ]«Ô^C0a^*h†É>yL™•áåk÷T¹¢sŠì¥•5F–É9ôA2˜E4ÞJH v;d·¹W/ŽÔp™MH9”ö¢ÅH)(\$ŠhÕäÍX\"CY'êÕ‘©Å<Ô+:hjaì—†o™Ð\n\nÇü˜±f¯†^.Ú?Ò\n–JÚ\$‘¥1ÁEð¡bËy‰mf²È!äChHE§t¤¦ãâÒ¢¾\nd2€ †IQIY<X1•ÉSëkŽb¬¼Ö^ÕKùQ%%£©Z/FCxpA%j=ø]pî(xcê5Ò©¿]’wX¡žVAsZàI n†ÈQ*3+\n†É`¤óy Hr\\ÉÐŠ^\$\r™¾[Í9X“ØX»–y>F@()0\"ï^B,i4Aå‰¡ä@€!Vw®¢Ã¦W|Œå6Á®f-S¢A×Ê©å}T‘`äª&ÄÕgÔ¸]…JÑènè·9¸Ú°C)ªUóEÁaÕžzJ9w+/´\0š™…\n>9k×\\\\Uñ†2˜Ð¥âo31ÑIB˜ûäSñY„Å±Ç²€ÃŒÃ5É×«(ì¤Mâqwåó4w0\\±v@›áÜŠApž(§¤Þ½Šœ“›ªY=ŸŒ;–ðŒ…É‘(¢U@åÚR¡¢*N‹:ÆÛ5¯‚Bmr]¹0\$i,‡#:€¸eGN~Þ¢¢†\nbÒíÜãôpŽF9QÅ†M›Lw¥É©Ö„‰0#¹x–³·‡Æ‰ŸJª%žÑ‚:I\\Â5½NùX%\n~‰’°Øk¬ÎÚt-í)\r±a¶Š¡=©ŒÆÖ] ^Ô©Ÿu¾²[’sºKn¤Ûs©F’ÉÞ9+Ç–õ¤ŸáR~YÉ1Á¿6É’Š)S0åE|Øt\r*íÑ¬JÂ	EOœM^Wþ5Ä©n¤v–«pÛŽS©w.aâHzÔJZiÛC·•©úL¤¨Ã¢£` £LÐSn·ù8NµÁŠW*Ãº÷iOèfô2tV\\ŒyzÛü¢­Öðò¶ûê®\\µLë7N8[á”²69n7UcÜÝu}ôî;b–ºûÍÜ€ÎÁù¿¼KZ>ð+C¶LÆÙ“ælx{Û‰aÿÀæ›‰<!²ðÙOÄ÷ÞïÞ|cÇK»‹´mèèýªÜùúï=^ ‚áÝ¿Cw³ÃKß=eÜŸtŽ†Cpì@õF™Ðn2åÑ:BôfJ_\rãS¸XÜ1÷b¥{ïyUÆ%°ÄÛ|è`àCæ¾5¦Çâ•Ñ>ÜTj!šÓ¼gÿ õÂÓ{ÍàwëÙ?¯º¶ßûû‚Á‹ÚÁÅ\$'-üQOTî„+\0§Š¬MØÜÐ·b”íÏhÍ iB°i†œ;î¨ÈÌí0ÝÄë‹i\0ïYlp\$ßl#ðFÞJ¨;ðW®Èi¦F	b´µìú#Êû%ò1\"N2ªz¢	3 ä+m PNùÎ“ëüÖŽç¤í	°,P/fßeÞW.C\0ð^©ç/qI¶RP®WN;\np0d`Š\r»ðg*ô¡„ˆ9Dî9b^á‚®´Eži£Ù–\npó0Í\n®áãØÞOYÉG]&7\"öNÊØo	MÌ¤¯“&S¯`ñÕÑ,`ðÚdmÞ½	SpiÎ½0HÞ‘G)S'p¼q\\½Q:dqd¼«Õ&V»Do+hÚ\n’K¬D‘(ÝÍKŒHQVö±Q•n?`æ3k^ò¤Þ\rÈr‡cî§°ÞÙ#Vâ¥ŠU Ì®ªï Ê›-¼/ìGc³§2¬±×†	ÑàÓ&ÒÁGH¥BVÙ,ŒŽ%FÄÑî!¨<ýd0Ì¯:Ç¥RÛRð²Äról¢ß`†P ØiXâhbtiÊ¦©>7\"\$\"àÒÇ\nAÂnÉØ× æ)G¢q ª\n€Œ p3âñ\$Q°Î¯4ž¦~?ñäðgg²v'ò{'2€O’x·\"<\$D\$‚@k´ Eð%âbÞb<²E\$‹øMaBä Ôš0ñ¤KÂ~šÒ¼:£Ð8)¢ü†œãŽ0ì(c¢*\"†R&ã°7¤\0`C°Qáf©`ÞjÇ/ÉÈg\"’ƒ|SamÊÂ|LQm|ÕÍÞÞÂb©#8Š+r³âú×„b3hxêH‹3EÀ†\$b'Â,Úó2ÞÍyÓ28ƒl £T‡Âsk‚âG0GÆß“8Èp+%}ÂÜü(±3aB\re¢_ šÌJ	©˜·Žh{åÌÙ&&^¤ˆZ+^ç*4<£|#@Ò\"7\0@\nÈˆêô Æ¦p¥sm;Â?êž#ñ¹\r'›‘¸	CVR\r“+:Óð°#4%¶=L+ŽªèÅ¢-a?ó>ºÂ*ªk¦)¶'D;³¾.L×<e*ð°8+ ÛŽìjÌqDl,0-af±@à}àÚ\r ";break;case"id":$g="A7\"É„Öi7„¢á™˜@s\r0#X‚p0Ó)¸ÎuÌ&ˆÊr5˜NbàQÊs0œ¤²yIÎaE&“Ô\"Rn`FÉ€K61N†dºQ*\"piÑÐÊm:Ïå’Á€Äd3\rFÃqÀäk7œÍñàQ¼äi9Â&È‰¦…¥É’Â)’”\n)Ü\r'	ýÖï%˜Ü%…“yÔ@h0Œ¢q¼@p·&Ã)ž_QËN*µDÑp¨˜LYÉfÛ„ë¶iÅFNu›G#Æ[ñÓ‘„ð~Ö@¸Üp›X,æ‰'\rÄ¶G*0‚ˆò4ã£1éˆ#æîï\"çE˜1ÆSYÎ¬n¸Ñ¥rÙ¥@æuI.òÂTwP8#£;Æì :Rˆ§æÚ(ºõ0¢Þ¶HBN	LJ<ïã(ÞŽBCH\"#2–98or®À\$ì”P(@0~€ÄBTÔ4ŽÈš•+ Tvû¢°\0ä6§è(3cJIBd”Œ¡ð’²õE¨Ä¢©m{6ïJÒÃT2®‚(Ý±ê…‰*”ìÉd”É\0Î¸BÎ93±¸!± Rü§¨„Š³2–„·C¬Ì„ÉÃjþ('TÛ=«ªòÈèB4µ+Ð@Î#ÉHá#¤èB–’\nbˆ˜	hèÂ4§á\0ž:CèÊàJË²¸¸´\$®’JîKh¥RêH9j»²!²…‘e0LˆÄXR` Ì³ixÊ	-zÜ¯háoÙ’‚ó0Wºm&\nv“²8I#@6B@SÇ&,˜Þ3ÓpÜ2¥•hÙfÅ ÞËHƒpò\$¸Æ1¥ã˜Ì:”øÞ3¡˜X¨ŽXXÂ‘!BÍ4pÜ:ªÁ@æ¥˜5’ b˜¤#dCpì¹¢ap@%+xÛ†(‰ÈÌ·+pä¦¤ì‚ãŠÙ8bÖ¥ôã ¤ãH|·XÈ’?)d~«&HÀæ9ŽëtÒ2„ð2gAâ4O0z\r è8Ax^;ïr…“\$árÜ3…èï\n<=ëŠÖ„MHäÏ›˜¾Õ§XD[£ƒ8Ýà^0‡Ï’62Žƒ@ß4Ö”“‘#RŽŽ‰`ˆ¬ÎM¨ç¨±é‹p jÌ¾=¼M8©\"°åÛ¯ÎÍÃ>à \$\n	ºr¿¢r(áJ¢©¢»»%‚ÚÏ¡¼Ý¶C¨Ú¢\$“2¡\"=®'ÕééÒxŸ8ÖÌ©gNäxO\"°V%–’Li:M&T;riBx!Ô—‘ Ìø !‘À'JGA\0c\r…¤ÉºSþÇØ##\$(ð¦1D`dÌ˜4vv¢JœG%¥˜ä„I¡©—@'€’€ÜƒIçÆ/hÍ©¢„e ¦§êªB` ‰p¢‚£Ñ'	¤â.0äFŠTZƒýÛ‡\$\\ÀI\0cSˆÜ¶‚ˆxNT(@‚(\n €\"P˜d\0\n	Á…iÇd?\"¤b‚<	°!ƒüD€nRE°'‡è(f,P>h(«û°&( 6«òé#aGfE«\"¢‰ß:„A-XVÍ_39:Òø¥“0äÒŒÙ:2ì–&Ô”µÄ+%«4,£1Rºf…H˜˜™x0íÈ€V1)|º2–z§	'‰Ì: ÉÊìy‡Åç½Ž‘ávé]NÙîÓÉO!!,7ÇtD'!ÃKl!¡ó¨U‘aœeX2K£ª»VTÀg¢„%¦‚‚Ô¨„aµnä±erš¤áMõdPÎÃÿWÄŽVJà×c™q-‰ 1¦z;+—…=A ÚºäŠBN“KN\rŒ€ ¤Ê‚0-ç¸4 èT±+­F'qVóÎd\nC‘€‚›ªTÐx ¬óe[„¸([æ4È\rŒm’&SPØLÁ¡–—bš§a‰Œ¬“¥\$ÐJÕg¬µÂ—W+yÃu‰C6 ï(ØÓ¹\n¤„¢Òâj©òr\$U‚cRu%8vF&WÆä.S­4mEÀ€;†PÄ|ÅV6x•ajJ¯ë\$˜>Ã¼t¥™©£ÊÆâUó¼ª¨a ¦ø§ÐaKìivåaå&;ÒQ»/Ó,ÜË¼§,má'PýÝ5ÕÁyÊ=q½Eøä˜;Bõéis(éÞZ@˜/•û/ÁÕ_²ÙÉ€fI~W\$d–Hµ¦¹Ë¡§R)-Þ€ÂƒŽòŒæ	Ñ²u‘É‰RN˜:Ia¼G…i,ï=¸\"ñœHÏä—&“)Z	HÁ\0(6l3‚™ ‘&× wë¤ù™W\\¿È˜´‘&58y!M]K!Þp[±ÉS¬__&šPšÙ%bQ…§’ïæGÌÙVcß<±5\rjîË¸âB–ÈMO*E\0«>ËÖ‚XÅs(É¦¶jñëØ.9éçÒŠ_‚3uÓBIëÉ\"¯j²œtýsEã¿§Î·èå§ŽsÅÙ×Rêxé¨2¶EË,‚Á“ï+I:!ôÄÚ™ÌnJºI à€5c(vs_©0Ê,ïZÆÍxP5ó»#Š97l:UŠÎ>\\LÁ©]mtMÞœÔÔäàßö*L!ª\\WôÔ¢ÈêIGWƒAÕYQãk¨r5þÞãUk<ÂF’ÎñÃ*–ª íUyR.Kƒoè©*ŸÍ–;g\nPQRº;þÀqª¬X¢¯¢5yP¤tø‚§r®Ø0¬äÁÉ*uP(ã„ÍÌõŽ-áüß~ñe“’tçæb=TQVzN#¢<…%ƒq¨JûTïJñ5yÎi¿ÝYÒsÜˆÉ?]áÙ×ŸÎþ¯Ç;3¤êK¬ê,Žz‰Hí¹¿¯óý‹ÜxçwVôðÇsMG3CM=Þy×¾uìµÐü\ngéž\$t™øWM•lòp~ÿhÜðxÃÌ ?K*Hh7€«˜ç³è[ÐAo\ruŸ¦™þioìHGŒjbº«B–]G°;ÕÕØW\r^ƒ®`hH6¸EàH©kŠ²š°‡NC3)D°#-’6n:Ã5aP#Ðpècùäx–W]ª£)n%žÈ‘1]¦¼Têè	¿?èÔéb\rá;g‘XÃÕüz°cÔ\"£t#é\\ê#žf«Ü:Bˆa l4äP	€Þ(MËˆ¨\r¢Ü2eØL	p\$ŠäÜÍT-ÔT+UMð^.ºðN¿\0ßŠ!¿.ææ°Pî`Þ¤H€Ø¾ìÛ.Ïöµˆv¬F~Â|j\"“,x‰¥	…&ÆŒT\"H˜¢\\X#¬ªiðlìMÊM ¬\r ÊàœJz}ICˆ.c\n p9. V`â®VD J@Ì2SBF¹ƒ&Ìl¸9ð—X6&p! †O22i(T¦qè»PÈëƒ|C ÈAÂèR\nþAÇz1ÆÀ=ä 2 ";break;case"it":$g="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,¶Z0Œ†cA¨Øn8‚ŽÇS|\\oˆ™Í&ã€NŒ&(Ü‚ZM7™\r1ã„Išb2“M¾¢s:Û\$Æ“9†ZY7Dƒ	ÚC#\"'j	ž¢ ‹ˆ§!†© 4NzØS¶¯ÛfÊ  1É–³®Ï+k3ëö3	\r¬ç‚ÕJ´R[iÒ\n\"›&V»ñ3½NwîÔÃ0)µ¤Òln4ÑNtš]¡RÓÚ˜j	iPÒpôÆ£ÞÜfÚ6ã«Êª-ãª(ˆB#LâCfç8@ÊN¤)° Ž2è¤ êµP\"\0©Œ©Ë^Á2Ã“³Âb‚t9Žë@ÉÁcu	ˆ0*Ý¯£ÓÏ	‰ƒzÔ’Žr7Gp˜¬Õ7®ô=<\r3%±hÓ'¦\n˜åˆü¼/Kâ`Î*rúò½¢Mbèñ/ÂrÈ;#ÜKè8ÈCÊ¨„³¼òª!¢œå\$‹ðŒÄÐ@ Œã8ä2±´L&!°KêÎ±Ãˆë	‰ã’ô¶KÒRŠ£H´€éÀ‚c3ÂRÃ@òN¢\r\$PïÔ¦¥#Ü‡CµÐÈŒ\nbˆ™EÀHÂÖ1ÑéšÌ0³L+¶ÚÌÓÒÒ®Q³ŽLBú†p”L!ÑòÍ»¶w{j.q¸(3lë\n\$£‚Ð¹:ä9^—\0Ê˜Z«ªýtZÐ˜§s/Î:AD¯Ãcœ2’ ã0ÌéI	hŠÂB ÞŒHãË–Äc3¨àÙ!8Ác@9cÃµ„„ú\r­â¨aKê7h¨@!ŠbŒ§\$­“¥_…Á0µ³‰€Ø˜\"6èÒò1ÎË¹*”3.ÁmÂŸdIØÞ–ÐIÜn#\$0åCt‹\"C’j˜¤S~Çl'J äÌÅñ<¨Å2i!â`4Qã0z\r è8Ax^;òvÓšÉ\\´áz+Ï*j’áX93Ã§/ŒZxÜ5„Aõà8\$PxŒ!óÕšC#BòÐcƒ{˜ŽŒÌ]Gih˜¸û2HüŒ³ƒ0Ã°I\næ¥m2«zôO;Ò‘È”{¸0ÉÛ¾Ÿ<IÈŠôo@@(	‚ÑÞë“N(ÁJc{yã‚KWÒ¥GÉY¢ŒHÑõ Àü‚&~HP0DtÊ–‡¬‘Û=E\$…‡“\"LS¹#x¯;‡CRjÔzš<„t‚Ð@C#˜‚p™Ÿ6NqÍAªo†zø~R”\r\$À(ð¦HR\rG³üHÃnYPi§“ãƒI¶/Mx7àÎ—””a|¾’SFÉÛH &ø3‚‚\nMi €#Gä¯™Šñ^o!ÒŠ\0005&ü÷·¤ÊlVa<'\0ª A\nHÀ@(L²L·¡ÒC\"I\" .Q¾\"&†Nyö^D¹UªÔ¡%C‚‰0¡2†fÜÂ 1mSjð6¬¥b£CJ«='4ç…5ä™_™¯˜í`µPƒjo–hÕÀXÒ¢Õš¤lé–ÃvÙçJ3ik¯¢`›´O]+\\è‘SrfH#a& (+†ÿŽ‘¯~ÉÔ+'ÚHJ0:wqÍõžbnûß‰êXˆ‰rE(FQs\0´*\0†äR?c%Ìº°\$®¤ÐèpGHœ2¨ŒÎŒÝ\\«zs”ù®Ýçéz£i­§«ÆN•€/D©l&tÄÌCu;0¡MÎ\$™*ÿšÜYN«e1Q9š‹Q‚Æ0’³ÐòÆKIžEJ2§Õ £L.-a­ã\$Q¢QˆaF™:„bÐNK0R2&îC„S,ùQ»!Ë„Ñ\"Ã ˆ\$MI	°B¦X\0/ ´†øËJ^¡”FÃl3	á-•3;PÑ‡A`¸±{(l²þ°ªm–7glŒBVê“·´KBq‡1-z^«â0iOz¡¥G’Ögfn_{1qù²Øì}«0Lx¨Ü\"W'Úøu¹Í‰‹{•X™«Å Ü†ö£)È±)ŠN{Ù}I\n¢zçJ}’ÔG8rE (+†PÅ~QMð¡Všå_	õŸ™P°Zž¥¤³FÀg:X*ÀÔ2.ÔS¨Pd§\$ÂÔÄÒ—\\ru·¾n9ŠØÅªtTP9MæïˆÓ¡F¨ä•·p©G,&%:…Èúãˆªiõ\rj¸Þš¾ñä”‹õ6\0¬…ÒQm-¤ÍSôZÉY…EËá+Î*ÊºÈ»–Y(‡Ã—I¼ôÊH\"Ó‘}›ìdû¬j‚@i71@ 6JÐÊ–Nd›3­õ,LK41dC·zó¡\rÂáÑ?Egµ‰ëÚûL×°B¡¡±Ûw`t³HäE§´²bÑA¢jä€‹\\ŸÕ¨.Ø³mÛÇ€'W×Meëƒl(¶ÅVUM®mº´ªažª†[©¨&óU­Ê>ª\n¬Í2rÚ[/f±ìhÉuØÏO2¢ªcnFŠ™Ôµ/I8“·ªú9PÌ¸çSnrˆÑ–=÷äÛ²×NÞc%Š²‚œ¡ºKdaà1\0þ¸—ª sÚa—jÕjgjƒ}H‹	À‡7ü_ªäÁª§‚*¨Ö5NB%¼œâm\rÁË5.àœÑ	2\nîhqÖ.bÜÝŽm1]±VßÑym½é¦N'</ç¡B+Mc%va…\$q½C)áuoÓ™õÏXéúU’uï]å;h–ö‘ÌrOD&“ˆQ®Õ<{\"mR›¤ÕF¹™šî9Y/Lô2@É(t)Â®!ËzûUP^(v|a0ì{ƒ·œ#Ý|²›ðùÑyã÷Oñâ@(³¯hÓë½²¹ü·çÿÑ¤žÐÝûy»ó¾§Ð_DÛÐ'3öVþZåƒCí¸BaR¬Á>s¦>!Œ«[c8üŠÞú°çÌ¯åVuóä¬¦\"8‹¥_IñôGÞõÞOðúO¢KBA:BHÏ³\"ÔR{òpRÌÏ½O,ìÞˆ&!´ŸÒx˜sÒ-oð,¬æjn/Æff..BÜ0^%Þ#ƒd©ö‹ƒàØÍ†Óäæ½+H)C­P&7#ÌDŠääY@Ò% Œ#Òcœ\r€V†Â¬ƒ9irdèšH¦öò`ädðP=É¢*dñÀª\n€Œ p*\0Ü7%>ëŒØ‚`&Gê´k¢²#ŠEðÙ%`æÎ²åøÇÊZ\$¢Njå¢/j®CžÌo&jÐždÊÆù.¬°ÜLHš…B¦#Œ‚ÂZEÄ†/Ð\$&Cª\ræÒ8]îÈš]\0\0#\"­bÌydÔ£¢\$‚0L£NbÆ,­“˜W(ÞG´!‰—bC­È3,»ñ‘\"}1'ìÐ®¾{lˆ\$V2ô.†|‡Ãvf ôÊÌz¦‡ÔærR©ÏQL§¬ •Š •ÉÆN¥U¬þñ­þÏ	²=#¤.„.¶D&	§´\"\$­äîI`ÊìÔ D’¨±É^\"ØIÉ^¢â, Œš‰LÌî€§%è˜ÀÞ™`˜Vœ†eyn4êà9ÂÊÈ…¯\nóI^\n†=\nš%^N®L©ðÆ 	\0@š	 t\n`¦";break;case"ja":$g="åW'Ý\nc—ƒ/ É˜2-Þ¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<†Ìh5\rÇSRº9P¨:¢aKI ÐT\n\n>ŠœYgn4\nê·T:Shiê1zR‚ xL&ˆ±Îg`¢É¼ê 4NÆQ¸Þ 8'cI°Êg2œÄMyÔàd05‡CA§tt0˜¶ÂàS‘~­¦9¼þ†¦s­“=”Ð(§ª4›Œý>…rt/×®TR‚ò‰E:S*LÒ¡\0èU'¹«Õû(T#d	ƒHûE ÅqÌE”')xZœÅJA—©1Èþ Å®ƒè1@ƒ#Ð 9ªˆò¬£°D	séIUº*òÀƒ±\$Ê¨S/äl˜ ÑÎ_')<E§¤©`­’éé.RœÄËsÄ<r‘J8H*ìAU*‰¹•dB8WÇ*Ô†EÂ>U#‰ÂŽR‰8#åÊ8D*„<r_£ˆa˜EÉÎTÇIBý#êdÿ+ÆñÉlr’j¨HÎ³þA‘3Ì÷>Ç%Ê¨—E‚®Y§¥pîäÔ£•Eu\"9=Qd~ž”äYÒ@=Èá&Ž±É\$ ‘'16Z/´»¬%u‰cYI@BœäÙ]ÂäáÌDÈJê¼ðt%ÁÌE?GI,QÒ0ÉÔ„ðs„áÎZNiv]œÄ!4B´\\Ãw“\$m¤ÊJ…µîB'²Œ§*Á'I*[ÄÉJÛ PŒ:ƒcvä¶Á\0æ1Œ#s¼(‰ˆùfŽÈæWL]äFs’²åÕ7ûœòºU6AÏÔìAXe%‹cÍ_Ö~‘JZZbA“ÏKÖö×Õxž•KånÔhá;KÏúÀAL”Å²Y8–¥VÍ·°u¥>hî’êYeßrÜïÐØ:M#L#“X7ŒÃ0ØðŒ®eZÕéI`b Þ×¹(ò£pæ:Œcr9ŒØà@6\rã;Â9…ØåÏŒ#8Âð„ÀKo¯êá˜Ræ…Ás°ÑUb˜¤#Nó.\\ÆG)\rƒœÆ„qœÃÑ\r†ru\nPó)]¥Hþ(A¨y]šŸúü©=H+òÕêGä%Ö¨´:Ïy>ˆX`M!Ìá#aÃ˜w\ráÉo†PðKŠ€¸ÀÂjPf ˆ4@èÐ/áÞàÂèn¡ÈA0ÎÃ(n‡àá: ÒáÐ\"cáÈÜHFÎS%\r`ˆÚ\r°m‡!ÐðÂ‘ ŠG7­óyƒk5¤:fçanŽIõ¾Ñûß‰&'Â\$ö'eX÷^ú(~¾2zƒrBC¡\n2gd,Äð(€ ‚PZ\rAèE	‹Ò\"\n‰&h¨¾Ä¾ôD)“â±\"c÷Õ\\Š4oã¼’›	s”TeäW#ä€9Dx¯ˆUå“â€Pˆâ&CL’©…Ú«ÄèÆ1º'Þ¡Q\\\rrŠ\" •Yb0=@H°ypá4­ó]Cœ9‹ÇÝ8 âMÌeÁÈ7†Ð@aƒÇ‚\0Æë'I»<ÜÀ Â˜TgÊÕ>\"¢‚MD	7\$0@ˆäjõ([wQ%4A¢L9E„zD1è†&p\"âÈèµÑùD`,x¦1ò8cNÉs Š¾¸€@ƒHgM”\0ÌmMa´ƒá*–øi‰ðN2ÆJ='´éF®‘H%‡HƒlíHºˆQN¼˜8åKü'„à@B€D!P\"€ªÚ E	º”ª¤”¸SÀ”ÎÄ˜¤>´²Z€ ˆC0ac‘”;Ù<C/MÌ½<5cØ{ž(Š9¢á\"!HPDµ£•¯*X7b>Þ\nuST1N+V†°Ï…¦€e±3kí«B\$Ë‘s.ˆ6ãÛâ@L4XM¦-®V×¨7z¶–áT%ªö(Š}Å0§«Ëwq-‡0…H…Ep«TÔüqW±ì‚	\$Œ’’í©÷)|Š‰T–xAŠÈÜûÌÈç¬Õ P/ÖÛZ›o;Á¤=Pç¨pwøX)†SlÎd=çÄù—QƒDTvM©¨©u ÕøƒX)ÿI_’J÷H8J—UñKNY}€´\$ÐÞ\0²}¬!UêÁX›âÂ³Íaè¥²?±¦UÅy`˜¬Ü¦¯D”i„q/YÄè¬Hø¯/\"]Á6^Eî;‹üÁ0!Ë“AHOÖrÙ·u­QÛDnWg4¶lÏ—V¸‚,T“¼x Ñæm46,Ã &nÝÀ9 c]Ø Ó“Q£-\r;3å¡ „, ËÙnhSÂ˜s\"ô~…ÑZé½V÷má\"\$UÀ*•VžÝLŠUÛƒç”wmK©œ‰ÊA%Y»I0mF&Ä`çÄñÔš´Ð¢ššXQbWGM}±‚¸eTmn¤LQ¶ÍýÚûàÁMMÞš4^Ýk8PEäVG([Bµ|èm_öØäTqH^(±I‚µdal\"(ŽhŠGc°d‚ïZkWDÛŒHHöžåKQkG%Ž”1ÕEisNZ9Œ±˜Ôö÷ˆ6ßGíÉóè{¢ô}HÑà:è„p¿6íûu®ÂXê]3ª,¢Iaxs+M9âçôz9Dô#™‰©—á†£y~*MKöîá3Çkî¤»÷&]a{AôÇY§ên¶ Hƒˆ…g&t¨%ä½ˆDh¼©0,3íÀo6Û¤rþ—â<ÍÓów	fØÊ\"I¿O Ó7`úè­Ž,ë\rÏÏÛæêÏý·È^×ÐÛ:…®»sox·1ÍN“Ì­·Ø±¾µBM—ýãPù¬·Â¬x9Dˆ¼¹°°•IŠÔó¾hšŸdƒ?/•4Vþ£h½CëÕúÃXÖ§óÞaþì¡ñ4Ï»þ™;÷åjöe¸ú!È¥*&ÎÉ>ÉIF™¥œb+A 00õã.HmÊybR‡ò ÎrÅi4BÎ£DÉ,–äoD#:ÖÇ³ƒF\"¾€dØ040:ÖÉœ‘i¼µüŽšÆìšñïž=K>*ŒbÆoòÔ¯¬ÿe|Xâøï¢ÆœÿíëO’æPšÆE…\n¬F·OöÿP®Õªý® ?n²]á,aÊW\"ê¡t2Ìá¡6?B\0Ee¸¡|0Vgc¢ûÅ.ü.Å\0èûâ9Š]¬êü¦ÐO‚»%Ô]„ŒÈ0”ÈiH|§ÞPÞyEðÑŽrÐ¸%‘4G1:[\"[¥¶»¡ð,‚LçÜG!cïu\n˜î%k¯Ä¶ï¡16#ñxìOuð!dêÉ±gqm¡s\0GdþG¤~H0,øÏç.§%G‰käåf®‘¸ë‘¼ÐÀ–Ñ±\rQ@#‘¤#ñ¨ûQÂ–ä‡ÄÊÁË;ÑÎõÄßQøú®£ïm,¶ÊPˆ=°£!®â?’!.„šEÔ'‚®ÏdîÏñ§¬K¿ ’=Oà`Ð¬E±ÏÌk¦¾[vŠÆ¸kÁ2ëEœá,ãÉšI-CÉb¯dAÁna!Ï\rÐà/ÑrL‰b`EH^JT ÄR‘)R™-rh… çxg\r€VŸàÒ`Ö€§Ë*²ã†sˆº\r ÌsèÈ9€Œ©´¨§èÆ§ ª\n€Œ prrâ<C˜Ô/Ôl!lf(#®ªÂ.®¸‡ê\$•BÎ@›.2ç#œ1ÁÎå&ÀQm!%4c\"2mX¤Â¨@«Ü'¢)c	ŠxœƒÄØón‹H&5ƒ€9ò®*¡ Á<~+ˆp‡Bdƒ…\n3&ÆÓ•5!NaÊbó ëÓ¦eB8Ž! Ó’nåÓ\"é€¨dr5T5€Ä©ú\ràà’Â¨7<\"ÑpŽÑÐ]+ÅêÇSZNmvüKÞVOn¡‹ÇÌä´.Ê<¢#4 ‰3ƒ‚†`Ò²Ì)%€@\nÀÒ î@¬ Æ ê\r³dÈH!µ\$¨ÓŒnŒîB†%fÐ:eœH\0\n€å9´&¯Å‚Ût\n£OG\0¥O:³®Ç¢1:Æ.³3ºÑÀ†qT&ŒB§>€@6”8M‘Eøqjìp´˜ƒ*JIk\"ä¨är.TVB0@";break;case"ko":$g="ìE©©dHÚ•L@Ž¥’ØŠZºÑh‡Rå?	EÃ30Ø´D¨Äc±:¼“!#Ét+­Bœu¤Ódª‚<ˆLJÐÐøŒN\$¤H¤’iBvrìZÌˆ2Xê\\,S™\n…%“É–‘å\nÑØžVAá*zc±*ŠžD‘ú°0Œ†cA¨Øn8È¡´R`ìM¤iëóµXZ:×	JÔêÓ>€Ð]¨åÃ±N‘¿ —µô,Š	v%çqU°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€é²:œ†¦¼èh4ïN†æ‚ìP +ê[ÿG§bu,æÝ”#±õ¦“qŸ«ÒO){¡þM%K¤#Ëd£©`€Ì«z	Ëú[*KŒÉXvEJôLd£ ÄÉ*é„\n`¾©J<A@p*Ä€?DY8v\"¦9ªê#@N±%ypÄCµ²0T«ï“¡Á‡i0J¯äAW¯ðóìBGYXÊ“ÄƒC\0«L´ˆuˆÊ“daÚ§ ÑØ	,RÌxu•EJ\\NÈ¤i`­¤\$&†É¤TEAä\\Èv‰e\"Äg«GYM'—\$!Öûe‘,ÏM3Z!å\$Š—E»*NÑ1u°@@„áx—&u%+KÑ'\\Í4MRÝ:v%„ŠY–“ÚYaz‘0óë[×%•vƒ•³Rö”äbbRBHÈÈö–e)¯ä!@vs\"T‰ÂþË ð2édLŠU	‰@ê’§Y@V/ä»ôD?ÚÍ]ÈÒD”K«Ðb¡KÉˆ\nsÃ¨Ø67ÎcrcÂ7<\"ˆ˜ö•Ii@\\¯òIÖG“'aLN¾ÏÄ–óºtUYGM±×\\WKüÜvE!ÖS‘[Hæ–hù¾¯½]Ö2Ùm+¯æBèEq˜¨È¤ZA5®˜Ã1Q)dYDž—YUTYiFÐ´z½7eÈc™¤3¥¯lC`è94íH@0ŽMxÞ3ÃcÈ2¨55,³;¤Ù\nƒ{d6áãÈ@:Ã˜ê1Œmàæ3`Á\0Ø7Œï æ7Ã—0ŒãÈta-ž6¼ƒ«ŠaKžÂLÙÖH&b¦)È1\rk%€\\ö (UnÄéÇaF”pì?ï´¦þJð<èÊ©Îgedg~÷CÏoTC~J¥(\"hÂ9¸£“góŽc¸Þ9Yã(ð8\r;¨Éß‡ƒWºŒÁèD t\0è‚ðïÁpaŽ 7PäŸxgá”7A0ðq\\hi\rðT0änÃ£þç5‡†°D‚Hmä6Á@èxaÈŒBÓŽÖy¿†¡„5šðÒ\rœq47Cž!¢%IåŠ—ÂòŸ!\"AÈA	!C@h‘y¦\n ( ÔzA\0(*€¥‘ä¢;Ê%\0\"Ä\\Yñg‹(Ä¯ Tì£Þ!mýL.ÂLNY\n äÌ¤¢˜AÔ2&è R‹Â<HÈ¼ h¸Ò€ˆÇ\\=¥õ? 7Ä‡¢ˆI#¡å¹@Ò³ÍŒ@pRœƒzÝCˆu7‘\0003 ÞA\0Amíõx(—•fúW>³vPB€O\naPöªµš£*P-b°­¥qziLŒÍkÊ4¦”ò£&dpì‡u¡b„ÐT4N‚‘¡bø‚4žŠ1¸š¦œ\\+\rð)¹‚\0ÄC8 \nlHcpkÍ»úÁR.°õžaSïˆþ‚Ëiq*Ã‘®åüL‹Ö-¤;1]‹¹xðœ¨P*PI\0D¡0\"ÒÕâVÓê/âÀÊ«V+N	l\\0«;<”3\r°a\r’È¿‹Ñ(:ÅH˜«PvFB_Ä/ï@Á—åíGXÌv\n–g5ôÔØYIœ›“LöP¤tàBçèP	É'ë£]dõÂ¼3)4Ú–À‰ïŽzÁÍlv°•,•–³Gh”PD½é©(˜…\ndegIoXá¶áT=©Üè¢¨ç\"Ü]±N0E'ÑX:Du€µ’ô\"v£@¨¤k½^5SxCHz (!Ëpàê®XS¦ä1œPÈ~OÝiv.ÎB2öÎÍ›RVMQ_	JoXI&S*aU=hÙ¸†\$­‘l,>¬Ö\n»”vÒ\r8jó>«tzxÎkÆ”äîg•}M)ÁX²-9N/âØ˜\n¨œ¢b vˆ´˜Š*RU5µF£\$\nZÅ—iƒ°_ª9ãÈò!“%ùÓ\0^q …ÿÉÚô@¯òUI|jÀçs,XYžäSžÀ²5‘q¸¾5z‚»…ÌW4y4Óc\\Y‹ª‡Ê'&W<ŸW0L¢R[tHHÊÄáµ2†IÉY-%äÄ…ŸtYZ™	òS.GDê¡NéñN’1€ ®CfNÄ«8Kw¥JÈ‰z5¥c<`®!RœBDË2,d)^²É ÂE¡åâ~ÅØ¯«t‰2ldÌ©—/K0¡dó_+ð–Ð™›]¬d,}¯p‹Zû\nÀT±66šBælO\\Ë%Œ’½Ä/_-µòuÅ¼¹&üîMy6ÚÒ%O]eš‡¶7é#Ø‚)Ò\$Ubàû	\"¯‡S;Õßâ/€˜RIÀcÕÞf&oÒÿ{mî¯2jød½™‘\r5ê½¶z¡¤¸Â¿ÊÐ)áü1'âJÞ›,.?ÛÇïs##[«½”Æærnµ¢:…ñ•Ð{6ºó&¤kÖìk[»žröÁÊ,§AÉB÷–ØMÌo}–kK5œ]ò×aù]}é§>ï3®¯€è€ëm•œ¶Ž•¹x¾…®—ìÊ‹›„:ðÞ_ºPL\\)ÖÊšÏÉKŠôÎÓ±;eý ÍžÃ×Ü\rØü\r ðwý›qmß¸|Mþè=Jvs¾1+EjGžÒ—i‰Zý)ŒmŽ’y6™:^Ã)5\0i\$%SØ³ã·VáwPù(>;Îq#~ýOŒªÀ¯W„¯¯ö>Bþx¦s¼LMÇï´ß³æWx»:ºì^*õ¿ß÷‡Ü›üSÊtO/`E¹RèMoYli»ïÛü¾[µ7Þ–‘|§T”xÌÁD%§²ÿdPÊ8;¡\"h–:ÃÒH®âÃÌRêf˜î9§Žå/Ø[eºAg¬þçÆ:/Xa*[‚qOôCðDýešPj´\"rÃäH*ü¤âiÂðÉÎñ<°lèÀ.Äü ^û/ç…ºCäëpiÐn²¦²ýˆ˜Od’#Ê’Æd­ºûïÞŽ„ôÄð®¤rGoVÚJºì/\$ip³¤â°\n°ÄFÐß0ÌNPPjlÀ©ÎÇðtÆÀlî(éq¢ŸÎÀd1À‘ýOïüýOòÅd„ðÄdÄLM\r¤lë%ë\rŒPúpéöV@|àÐ«¯<hFˆTª@4%àF†ôáØå¸¾Lr³+7	ƒ+\"¯¢<ÿîàYHÖüÏêVaj»\"?GLKqŒ?q“\0YÊôÙ\0Ùp¾®€†màØi‚\r Æ\r`@ƒiúª*¦8Ç‡\0ÒÇ‡â‚Ê† ê}	ü‡Éð\n ¨ÀZ\0@‚€ÇCÊÙÎô3í¤há@i!21ÎÛ+ŒÝHÌmkÊP:1Ò&@›QèKahW!fHp2Ã0fl\"ÁòN×C&Ab¼,ðá\0flÒŸiL< 	’p†§Þ5ã†9mh]D\"A`’/ jÄ,mçaÃ‹m´ú2,D\\!‚Q#­Ñ*L“\$0é²’ÛÑNÆ\n†7ƒV5£^@Ê—àÞ\0èÍk”~ò¾>¡f‘ÁÖý.z›…Æ±ÅÌÞÄ/\$ÔB*Š+N÷®\$DN@Eâ@a8]f#ÃˆÀÒªK“À@\nÀÒ î@¬ Æ ê\r¢þ)# ´ò\"H¡m\0Å´ŠhúeajÁÇR›2\$Š )2ónžçêò·ÄúcŽFô‘ ‰‹˜n³\"‡gÓ2fõ. @6ó5	ð~l„L©%¾:J’#Ñ2O<J>€t#á";break;case"lt":$g="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF €0Œ†cA¨Øn8‚©Ui0‚ç#IœÒn–P!ÌD¼@l2›Ž‘³Kg\$)L†=&:\nb+ uÃÍül·F0j´²o:ˆ\r#(€Ý8YÆ›œË/:EŽ§ÝÌ@t4M´æÂHI®Ì'S9¾ÿ°Pì¶›hñ¤å§b&NqÑÊõ|‰J˜ˆPQO’n3‚·­¯}Wâð±ãY¤éË,—#H(—,1XIÛ3&òì7÷tÙ»,AuPˆËdtÜº–iÈæž§ézˆ£8jJ–’\nÃäÐ´#RìÓ(‹Ê)h\"¼°<¢ Â:/»~6 Ê*©D@†ˆƒ°Ê5±Î›<+8×!¢8Ê7±ŠÈ¥¹®[‚9ª8Ê•¹£(å,ˆl¶ÊRÔ)Äƒ„@b—Ãzk)1èÝ	½#ÒØ\nhÒ5®‚þ((\rì—?S4Ðè%KP‚:<c[ˆ2K«Œh)KNÚ<³ÑŠUŽOò½¯­à@; ƒÐÉE8ôkˆ¸.HÛ‚÷ŽªZ^Å*âÔŒÒï(\0MIS ƒ:	UTµ8è»S¼ò¿ˆÓHÖ1Ìãz Œî5]^HHÊ®\"«û69Ž£) #Jüò¥rÂØ5%H°éHPÈ&%UDO¸h³8³IÃ*9¥hmr6\r[ZÊŽcÂ79¢ˆ˜²ÄnÙ¶U¨êÐ„HÜ1¸ÒðèCãJö9;`Sðê=ÔZùi„äx¸ÌÄL¼×S†^£DŽð\nt-šâd¹;˜\"O²ü0­‰~[\$L£K6Î×¨h’6ŽV©FƒÊyTS›ùcRö;1îhÇ“Iýnò£–sÈÁÌ¨Þ3ÃbÎ2¤“ºS9Œëø¨7¢ÉXÜ<ßƒu˜1Œløæ3·ŠD³nÁcOˆBÎûÉÍJ6¬øÊaJH‡®i²ÏW%â¦)Í;â¸¨p@!^é›åz@>±µö3˜µXxAÁîZH%Pé|?µÍ#;úÊÊJ#u°“µõÕvÌ¥N©}OßéOEœ÷ƒwNû«Œ³f5\$i,Û%?J\0æ;¬u(Ê<\ròõÑ‘ÐãÁèD4ƒ àáxïý…ÃÈã\nrÅŒ3‚òãƒÁsnÁ¤7†à^Xr3ÁÑùóZ½ÃX\"Ìüý¤râà/ ùzjÓž„ÄœÊãô’›”\$LÏ¦t&DQ!+´Ó¬Ò<”9Ä#\r±¹3ˆOÙý\r00µ–ÔBPˆñô2ï`üÃ„J˜P	@ýÁ.\0 éÉäbÈœ¹3.Y¶-—^ÆÛ›Æ\nÆøÂ\"¸VJ©-%åÁ‡%‚ÀPš	\rÀº!3ºŠI³ÓÌ9ã*Ny&AŒ°ã,mˆaqT¦ Õ`âLøt#áÉ\0‚ÿÛ9¿5Ä2DÌ¬œ%äDÏ@ øÙ´@'…0©Ú‘w¥j‹éiš‹@25‘‡\nKá&¤ÕëHçgC1ePä\rb:ç‚pÐü;>Ò@5ùZ½×áû\rïùÂªbË0×Ñ3†TÍ¢Œ\"ã¥>í¡yD¥ m“)-%ò¸XÑ™8¤\0¨p\\ÍV¡Ð´)ÒÎ½ØY¸O\\¹Ò‘ Ë¡˜\"R,ÿ®ÔÈƒƒ'”…HMJ\$@‹>\r‹ ‡ä@!ÚD”7ÙD¤	he<ÑÁ2ÎTœ_;‡xðKuºFâ¯QñÐÆ4È’ˆÑ#Éa#‡•ð›f<‘™Ê’“ ˆfK2UP’3àÔÙ«á-D¹+élP\rò6OlÆ¸2RÙY¢¡¨ûVšú™%#yr!*BZ‚YgD1žP„î]%é1µ†u	d!¿‹Qr\$Ô Ý3‰ÕˆŽôà’ô2…lý©NöÉP™D&	}M=ŠªCGÁÇ\$’àË˜d¤õ†ÚÖHÑYÈcWHå0 ÐÒ¤‹U»S1z7ÙÙ™ðn‹‘\"1e,ooä%À(bŠY:ëG=J­;URNµ<s8§£Àx‹*JC—Þ%8<¢E}'\\¦lË™H^Î‘\\EÌw:Ä>Z“(oo!’m«ã\0+ˆ™Ý§LÄ<Úÿ`TzB(ð¸r^×âþD„¸¥T%VÊr«T\nˆ9«°ÃN>ÇuT\\dÀ	Ä\$ÍH¢4QÊŠÇö9Ð€œŒ/—ù.É\"¿%˜R™.áaG#Øèìå@Ò²¶GËGc.äÜÁ“çRÈf6&–ì—\nýËÎÅ—r©sÖY6Y°ŠdÂ™´|uÙ+B˜Zí¢3V}Ð¯C Í_×Œ”R;®âbv&h—lÔ˜ŸÄ&F5£Ê'â\":\"~e…,¼jTq	OÅI‘0+ir<Hã(¦Æ³&ã?Fž/¼ªâÐ×²H!{gË•–qPæc.õ˜†KÏÅ.Z»oeIg˜gÆÜ¸ðÆ•Vý¼‹Ï†æn2Ivšql|9Ã&ï·¾–e€ißyW#KmÉj[„ð_BWo9ÅàÓˆ¼¶8‰ÌCøá¨)hKiÝAÌÿ¤N7ÈÏý\"á”µž(x¾`×Œ”P¢#¿39Ò½\$¡m!T§Gîùªœ›šOÊè•n˜5¯}æww°\néS+¦	x^’é&ýêu©šunÊî§[®[›²-û‰Ú\\ÀêŒÒ¿]\"W½,}bìý¹õþÕšÄHÝ÷^éF#†pÜÛËy·/æM¿¾û6UðëÁi=+œ³*¢]ï3€Ÿ‡GƒÒþRç4Ùr…4 ÿ’ûûˆŽõÞãÒIÚ”}éô^·Ózöm»õuí½èÍsJ«äŒÙ·@.†‚*h‚G˜!#¦}\n4³ƒbëÓáÀòŒ!édøÂ¬âQSÚRáágæ†ËpúÓ‰~ÎÆ(¥iû3Çë“Ñj ¢±o¦›oi?8À•)AÝå4Á+¬»\rÎß]\0-¤îX²P\nR0îÍàíˆR®Rc˜0,B5ORî0ÝL@\"0ïmÉ£ºöîÞ\r´QÍ™¬=\"0±üÂÂM‡ž,#Î!°,Ð¨üN&6cª<¯.ñ°3.£/2ñB±4ñË¨	nÌ×åtXŒZdDôK	…ãMß\nG­\n¹°±	o1`ð¶ÊJçªbI\$3äºˆi\rðœ†dRïP\$ ÌI2™°ÂÅ	aÄj¦0ábH¦£	ÇgT# àØPÄù«þ,ƒ<I±\nÜgŒÀ+ð	1(ÀPHì\n,\r°_‘JIP^	„J-PskªÅD¢SÈ¨ÜMàIìV{ŽÔŽ0ddD#/pxËÚ\r*\0/Ì10Ê,&Rr°®¢eDP¢þUc3	oÈÁ¤ð6oâ@l}«¡N* q¤ò±©-%1´ß¬\\«ìUmrYmh	ÆQžM‘:ò\r¾ÍíÌÑõ_¢¸Î€†O\0Øi\\\r ÆÙèª€”Tu¢jÆè;ÂzžhL¦ÅL…§\n ¨ÀZ\0@. ÆKG.\$’±å>#* ÐòR¡MPªÈó¯\"ª­A%§&¢0nDxD&´¯F˜à«|	²M\"…ž\"¸ÀcŒQ‹ì	ÂÆ-‚öqƒŠ¾¥8Î^â!2{@ê=§¯)c3gZÁ¢ÆKGlL‚\\J¤h¦+\0¾¾i¨: ™-ÈL,c*4¢ÂYl¢8Àô§Ì.!­ð·§œ ì\\Â¸+aB?ÃBxÒþ‹Éf«\n ®Íüß'¢Á¢*}\$ÐJ3(MÎõS \nƒX.^2d]#iX\rä¬\\+€Žßó&:ð\$»ÊXÅQË@/ï1Š„IîFŽÄ@.ˆ¼/Æ\\ÊfF‘X&Ó³`ÒF,<Ýk<¢L.bÉ3Ræ ï Æ ê\r 	óNq’ö=À‚-Í<\$Öa¢¹¤ØF@æb ¨_³=S«C°vj˜±v°êœ«\"þ	sLLëìcŒCã*%s ,Ê/J§:ÐÜÃÐÐ)²DÊjÁã\n2(r°\0/cÒ@";break;case"nl":$g="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ÐÂn2†X!ÀØo0™¦áp(ša<M§Sl¨ÞeŽ2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9¬Ô`1ÆƒQ°Üp9 &pQ¼äi3šMÐ`(¢É¤fË”ÐY;ÃM`¢¤þÃ@™ß°¹ªÈ\n,›à¦ƒ	ÚXn7ˆs±¦å©4'S’‡,:*R£	Šå5'œt)<_u¼¢ÌÄã”ÈåFÄœ¡†àQO;zºnwf8°A®0œÆñ—æ¡§xÿ\"Tê_oæ#‘ÔÓ‹õû}âOÃ7›<!”ð¢jðæ*ƒš°­%\n2Jê c’2@Ì“Ø÷!ƒ’”2¦C2ô4˜eZþƒÈà’2I3ÈˆŠxþ°/+…¤¬:ô00p@Ž,	š,' NKà2ãj»Œ P˜¤±B†ÚŒ#šH<É#(Úæ¡®\$\$ùB£›¶0Êb¸Â1 î¦¸ TRÁI²(’7%ã;ÀÃ£ÃR(ê\rÈä„6Œ”r7*rrä1¥ps˜Æ¬H¨èöÐ¨ê9B²¼;„ á&ÉÔjŽÒ)=&9Ò Pœ¯´€Ò•Êa*R1)XS\$ULH%À@PŒ:ÔbÆÄÌˆ´Ÿ¹k«ˆ0¯¢ší@²\"Ì—ÄiC2ÄnT^5¤¡\n3¥`Pƒ[D•›Ú6É`æ1·¢˜¢&{Z9Kó\r¬:µA\0ÜžHK¼êºÙ,Ìé·³<™'S#u7NŠs¤î<ƒPô¼28\n6»˜e{}SJ+a€P¤2Ì\n \$£…††²\"(ñV%,Áß¸s\"×Ms›Š P×X”;0ÍR1°Þ3XëÐÊšŠµÛ7Ð7(\$ø:ŒcH9ŒÃ¨Ùi#kÐæëPúHÂ3ÆŠ*ôª%#jõv¡@æ·ª:2/\0†)ŠB2|å…ÁÅ”SŽƒ c2ì£ÈmÊ8+£-C hHÛÁ¤àÎ2h„N+ÊŠ¦âY @¿ð,÷ÂÔ*‹–hlºo\$¸÷üÆâ¿¹kn¡ã¸4AÃ0zL# àáxïß…ÉŽÄ½ŽArì3…éŸ’ÿÇCJÄ„M äŽ¸¾Û\$ãXDc‰t¤™Žà^0‡Ð.Œ\rzSvåJŠfèÿj)éðŒŸ¨œd¾:\r,ô>BHù†/çÿ ¼dŽAm„p\0l\$ˆ)0ö\"vA\0(*­ ‹¶¤ðÂ¡ymIí“rrNÉêtDÇ\rµœ\"Fƒxtn­Ýô‘´\nMBI,á¶ÂœEI›ë6EMêQÁ\0f)„ô †G†à‰Âd½~f¤Èá5\n<)…@ZËá³*,¦Ã&ìb‹“_?¤ïÂIL`\\¤PâCPÎuÉaUŒ±! Î¢Ê^&¦d‚®Šk	y1R\$‰¶®%È†‹‘Ã\r'p#H VÊ‹Xoº\$Ä¸€Ž!5ÅØ2—‚ŠC€\n†@–\".\0U\n …@‹+Á\0D¡0\"Ë`ÏÊAKiL(”¸@ˆlÃ1ˆ‰\"„Âfµ)¹ˆ\"PÌZ‘Ë#€ †Rn\$ÇeFŸ“ölq?Má<6Çb.\\r<g•Â1¡`b)8š±Òåç˜j8ÎA3\$¹ö·ˆëdÊyP“¯A“H\n\n1§´iÙ’f\r„’fòE£ÑÄ@!•G¤„@àt€¯6<‘`‚IÓ³kR!± Yäv¨i‘›ò²i˜Å.‰Î`S\r\$*o\$àÙ¢%iå»°SÍ= ôbl,0“UC½>0rþ`¥4ÖLƒÁ‘«çøá)%(dBL9Ÿ—Ú^¿«9Ì”pÀ3ÊpÊÖ‰;*PeÝ7Ò,+á8éÒ½Q\"üg¤/F- ‡C£+›(tJŠ!…‰)žœDY}%t(à¬ aW²v: Aˆhy\"¤‚Veú«%&TÈ…ŽšIî…€ŸœS¬««Œ]Š\0›mjH\"£·ˆ~ßÛ2?HiÔ\rpÊUÌC8Vè•ËeÕe¨·U¦QRÂÔíÕË8 ºÙZ{n”/#M\$—žäÛ³½oSÍ»ç1#¶\$Ã¹+(-È‚`LŽf) –ÈœlïI\$L‰µÕcî“¥\rD\0001aƒˆ‚°]6ÁRbÝ_³šjƒ‚É‘ª\$™ª0Cqjmù²ÄdKúß6H`™•,6T”èADåL‘£êÄ©!`r©È~d„èGÝÔ	*’=£ wè!èe%Þº´¦2zÌI·S-f\n`Àî!5Ì¡²eLö}‰ÊÙÔuß9`Š\$v_ãüÆê	ÁçvJ¨ÕŒÅÏóMwD»kc÷(f8q¢‰TÌ«„¼ž‚…¦JÁJžÐÔ–Ýê@çí_„íðÛA'òüÌ6Jéê;£3%ÕËì–ZzÂ˜IË´\\0Ía«.¦½;„q‚°wâ,u½24L7´àÉeï­ê—6ØbËt®.ÌÙÛCØý¦Ø6­Ð¸zµYJIL%Fºž™z¹ÊZëº+¾°Ê2‹snýÓªöÁX­@µzÚêìá~ó ¢Í²ŠßPlÇò9\"G\0Pn:Îƒ&^« NŽ<8Î\0B¥?€‡ãñR`ˆé¯Cä²94I÷¥t®Öª¶ÓGi¹[žºM Ó¾djºÌ;ÍF¨ýÕ@²gE«ÿ|ô®…^p¡Ì³/€’S—7]ês‹ª¿þ‡£€W[ }[¦fžÃfˆfSŒ‡´2ž£œ.'\\Ìo å—3áÛ?Ô¦†“¡e6m–FÝc¤eíµàµ®gèžg£mñÙ•šµÐ©NøÍ¡å‘[¹^ùoÔëo'kH¢4©j®žÉ]eù†_PÓ».ä~ž¼–lB?±µç®ˆþ§ªûvP}Ñ3ö*LÎ¨&_ñû“âðý‹ïþI,ø–ÁxO‘`Å‚Þ]ƒìWÛ™öjúŸ~¸vº÷öm <äé\"ö+<{þ®Ÿé'ÆÏþM¬¿zö7P¿™Àæ äò\nL\\Íã!bf/c˜Me!ezUƒFð\"¦5P¸°²¯Ìq‚J\\Ë¨‰\r&œÃEXkãTœe‚Å’µåFJO¶ÖKÛ Ú*n¾ÿ\0†PàØ`Ö#ÂB\\Ãú8Lè;#øç¢d!Kº92àŒ4Ï¤¥¢\$kL\n ¨ÀZX†ØN¢j¸>ë§X#†é4d¢½kÚ¶‚ŠêË¡°¾%n’#4(\">\$.njb OÊç`š}@ÒËTbâ„šb,È£ÿ.:#Ìb\0E”z0€°…£Š6XùãÀ‹F¶FbâA„’HÌïà˜ÀçîFÈÀKÎ.J¤AÀæ›\$ËêL(\"æË*~0±X8Cˆ%Ñ1ca#„`î\"ãÅÌ+Î’ÍqeÎ\nþL¼ËBä*c8sÂF8P4'J†vUQhQâ,WpkÂŠŸJ\"ÆDH¥ôZIžZªÆÑm/–nÃ*bËž9‚nP)&#Â%.‚£ ÆQD¦šBtX¥%¬;`ØJü›éÄ)‚äÃ@¯ÂV/©œMæïÂ†*d¶°bÇ\rDH²7€è\"É€¼PI¼AÃ^hÃ^.ñùi\$«N÷j*eð\0jI¢\r`ObTEÀ	\0t	 š@¦\n`";break;case"no":$g="E9‡QÌÒk5™NCðP”\\33AAD³©¸ÜeAá\"a„ætŒÎ˜Òl‰¦\\Úu6ˆ’xéÒA%“ÇØkƒ‘ÈÊl9Æ!B)Ì…)#IÌ¦á–ZiÂ¨q£,¤@\nFC1 Ôl7AGCy´o9Læ“q„Ø\n\$›Œô¹‘„Å?6B¥%#)’Õ\nÌ³hÌZárºŒ&KÐ(‰6˜nW˜úmj4`éqƒ–e>¹ä¶\rKM7'Ð*\\^ëw6^MÒ’a„Ï>mvò>Œät á4Â	õúç¸ÝOŽ[¶¬ß½à0´È½Gy›`N-1¬B9{Åmi²Õ¼&½@€Âvœl±”ÝçH¥S\$Ñc/ß¾õ¡C ò80r`6° Â²zd4ŒŒèÐ8îúØa”ÍÀœÁŽƒ²ïã*ÊÁ­-Ê 9b˜ò¨¬Ìå9oÄ…-£°Ü\nó:9B0Pè»#Ã+rç·«dn(!LŠ.7:Ccž¶O ØÞŒXÃ(ª,&ñƒ«–\"µ-Xì4Œ£¸05HÄ~Ø-âpòâ1hhÈô)\0ÎcêþÊ)øÎÈªZ5\rè¼R0°@Ü3AcrÙ?ŠiÛ¼4ËC:6³*\0èÀ­@6­ˆKS!\nc[7! P¨§#íÎÆBC\$2<Ë•\0:¶-zðŽc\$ÀŠ\"`Z5¬²PÈ7Bê²T)õM´Ã‚.#­ÜÏ0£¬× ÚóJ\n5C+\"	é,éwÅ+ÇÒƒtÜ7 ´ÌkÊÖÀ	#háN°*[}·÷%ÍWMˆm]Õ%ÕqŠÊ€\rÈú|¦c`Z4'cËp,è ÂçÃ5jªÈc;{eÕCxÞISz*9Ž£ÆþŽc5pŽIøˆXÏÍí°Â¶0ª\$çP\rÖXÊaJR*ŒãÈØ¿.A\0†)ŠB6(7ÔA\0Z0MK§oÞ#ŒŒ÷f\n£¤“Qá<Ø(C”˜dÀÖéYcbv8:ZÞ 7<Ã;ÑµÈ¨°@88ctê:%)Z¢9£„t´Njó½ñ\0x0„B|3¡Ð›Ð^ŽýH\\Åè‹ÒÐ3…ê_b<\$ˆÓB…áê9.c§B/ŒHíP×Èà¼ÙèPxŒ!óÛ,Œc|ûznÊµlc¥RR—Æ[®ï^‰ÚlŒ\r®í5wKÂ2N|AJ”®+š™eÌoš‚ÃþÏsàô‰Ð¸|ïH(€ _Â'å×‚Š\nJib­”¥—7ÉcNjÀ\$EA”Yh2!ÍB6rVSÉy12Hý\\†b~©L\rèÁ÷ÖÆßŠ[=\nHû?B\"XéB\0€7õÐRÓ˜t\r	dŸêNfFx †G[ŒÉLi8 “(–hœ‘s)šF¢•y\r-u·0@_A 1ž\n˜ÀÜÎËÁC‡žÀ²èü²ÃP¤˜3¥â=	C™~'ÍÜ4¡çÀcÁ\0k2DprDI¤e !M`‚ÒLpis*‘WÒü{%Ò)9ÈäŒ\nYHYÈ 2å\$e\0R;E\n=rà@B€D!P\"ËÐ@(L³‰†ôœ!Š8cê Í)¢B	‘Õ!bÜŸÂ eQŠàébÝæj‰{ì|ÀM¶LƒåÕ\$\n\00068´Hç¤ö\"èD#.¬ÚkO-D	+\$‚JWm„`41óÒyŒ s;ð%\$©AVáºˆ‰½„P¤„¼Ãzï¢Hžn±ùDðL\0SGét9ÓE\r!(:z‰Î@X_Ñ(¬•Þµõ/L©ØGlÒ^)¼ªÉiÀ•Rð*hòŠCHzHA²‡Œ”fú›‘N|AšÔW‚ë%,52ªªœÁ‚\\ÎP«L¸˜ÂZ¿VÁ…­ÑÈ‰’u`M1oM 2Îö*Ie™}–Âá¹ð¨ZY1R75ôÞ×ô&ZªH{¦Iï‘Â–ªKã0\r”­@B\$‚’Ë-‹õˆ)åÚs\réêFg,#RNFMñýqð –ôðyW¶æ(2'tço\0K-Òe†g°t‚xKgvìÅ¸sL˜Ã‘	q€&á+›‹qÁÉ¹vüÅ”7åt.“ô11b(•fãÑ§ºäñ’[y%uƒ¥Æ'— %‚ë}\$n ½fþìßR&žÂ&TJ)‡zZRRq##¤~^`‰/‚É™ˆ %RxWÀŒQ!HÀpÊ¥y\n“Ö¾„¼\0OŠ’í¸¾’[\\[Øi¢ Æ®ub‰ËBdUDì˜ÖÇù¸i)]Ò˜Pè’nvƒ#AîÒ/f,¢äàæ‚Î’F%556L‘Dò^\\9€Äƒ-–ë9²ÉÒ]sæÓ4ClF,ˆ¥š–>~0äß•JPÐòÏ„Î(\\öÇô\$ˆš'‘&C—[Uaõ(y›%é\n“6flÏª¸Æz7¡)¦PÒðCMÌ>Œ@Ç;C®0¥0Ž+Yê«rñÍ™+V-½]¤ÖÃà\\§m‚QÕ¸©[cËúð”ìˆÚtŠ»|ïƒg•™v	)º¥¾Ðás~¯Ç»iÁøÜðÓt[˜	Û¶2näo÷À 7sÞ`eª’!9«eí9d¸¥¥ƒ°»Ja}ñÀ·ÞßÚTSmW`ÊÖÐsé¬Ybi¢‡ÄµyQ\"‚R¹²ÎÞÓ,}O°¡ÂÙ\\îq§â\\RµMvƒ˜AõRçq\"|h«ÿU”ŸoùÕ¾l&û%Uå5—…»_+õ¯âµ®n¦@ïµÍBi¢½;¨dü–/Páy.kIËÓ“=¥Ûý[†v¿Á6ÏfIœ)õzöP­+Ø†2÷U¢ºËSa#DæÍŽïÇ§º±ûAh’^VÕeïÄvŽ¥ã6öíëoƒ·’U¡Q¿•;t„¾±¤…°×?–Uc¹z6PC'ž´\r/ \$`Js×ä²d³ý—lî}—ÛûÛÁIO•(>à¥Òß@Á>²USgÅlÏ–3_mì¾W×yÿ¤L´Å‡²KvûWÁö¬I ÉßUXƒî³o”®6?ðúV	û¨TB\nÆ\$GãÿjÈ/‹þä'lxÿöÚ/¤Éedc2SmÖZ`Žc¶‘¢”^ã–°âœ=†* ÅR¶ïNf‡ü¢NôÝ0,ŠjD(cßN®	ižNBdˆÂÜS`‚ÐDSk˜Ü¡J¼8»ƒÞmÌÝÀd&\r€V\rcÌ!R=¬ò`Ì4ƒ†ÒƒXlì.Ž0}d2I~\n€Œ(¯¥P\rè6%0^ÉÀÒ•#~ÊKîÞP¹ÄP|„äÆäÅ„¦MLÒ)nŽÈ‚~í9cŠÈ/öæƒŒÄM8#Š 0Ž®(ì?ŒXÑ©b0(—*H9‡C¤AæJÀS\"0æéÈAc¬Ìº5ÍL¡íR:CÞX¾ûðÛJÕdGÍÑ2¡‘J¢¤X€àÑÑEošêìÄ6-\$Ôñ\\žâf2#ÌŽQf©éN”\$Ê¥¥\"°Ž:sˆÖè±p9`šˆÂÐ1Ä­c®q¨ÃÉ,™¢UÂÒ-Ê¢ÅªÈLÊT'pX¤þ\\±{\nè\"Úžªè\neÂ!VrC”Y í6Éê0Šþ2OØÇ÷‡™±b0\0†'Ñ,e‘¼”CÌªDæLjÊ÷¯Š0ä€æxå~\n­¤Ôþb.\r ";break;case"pl":$g="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„Ý…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I°€0Œ†cA¨Øn8‚ŽX1”b2ž„£i¦<\n!GjÇC\rÀÙ6\"™'C©¨D7™8kÌä@r2ÑŽFFÌï6ÆÕŽ§éÞZÅB’³.Æj4ˆ æ­UöˆiŒ'\nÍÊév7v;=¨ƒSF7&ã®A¥<éØ‰ÞÒvwCù»ÝN¬ A¹g\rÈ(ªs:èD®\\×<˜¡ç#Ð( r7œÏ\\±…xy¤Àô¦ã)žV¹>Óä2½ˆA\n‚¦ª o³|­!êà*#‚û0j3<‘Œ Pœ:°#’=?Œ8Â¾7Á\0Æ=(È¨È Ãzh¼\r*\0åŠhz’ã(ßŽƒ’ì	ŠË„\nLLXÖC\n\np\"h9;ÉŒ3#ï8‘¥#zñ'(,Sr1\rØØ7Œî0æ4¹nhÂº¹kãX9 £TÚ(\rãXÂ˜´HòÜ)È#¨ÖÂ#­jüØK¬…ÀƒšA#¼ÛD¡í¢M¢td2È‰Œ‰3:!-C&NKSÔl¨îµO3ÙxÃ¨Ü5´ëp‚Ž?£\rs(Tã ô‡¨Ãb†óŠcxäÂ0ÉèØ2ÎÄ(Ç/H«¨èÃ¥#«ü„¿(:tÂH†7(ñØ®ž#:‚†%/ãü…À£œõt:ú‚¾PîkèŒ¡\0¦(‰€P‚:©Á\0’7l„BàCxè;²¯`9Ïm)EÉ¯™3>Ìs.7Ks\"]»Øž*¹d£FOmŠy2z:TH@äÌ¢«80Ãh‚ìúÊÃ¤5,ÕÀP’6Žu¶\"§ZMŸ”â…›ÙK“n;0£ÙÄ¡™eàôþê¤+®\r’Æ‚ èH@7ŒÃ2Dþ&×\\Ï4°Í“Dû%ihë1g£*1œdèŒ!b0Îoî6“|%«šƒS«ˆ:9ap»›Â®2ïzÌÉ¿||®Ü59q-g,\$dPòX@óËsÖõ¾süGCÀÍõÓwC7ñoØF¸Bl'!ùÚ2K£º§\rh€@!ŠbŒ`^éiHÂüŒÖpÚ:ƒ§Õç»ˆóÑ£É^’6¥Ú~‡¦Òˆæ5(>•ÜøD…qÍÍ5&Æ>û	kqVK¡p Ð—  ä¥W/\"Vÿ €a{€ð †ƒ è\"\rÐ:\0tÁxw…@¸0†G\$rÎà¼8À^CÁ\rÉ­âðDkCg¡Ò…ðÄúU¸\"ÆÈ4´…¦ÃÖ€<á„'ÄÃpÄ®F!˜“èT1}Bäž&Â”A	aAŒ„¤šž‚z»Šú Í¬1@½“©©à€(€ fÑ\rè	¯ Uô†(»…§ð¹È)ú–¡@ú’òbLË²Õmõ¤’˜´ŠÙóMgÐ¹1Ø´ÍÜø(*\0¥ÍÇ&hhÎÐ™;‘µæWœ^*&Œ€¿ôTÐ(k>­â²zN—a?”ä‰†#è©h‡²t\\Sg&&¾V½ îL lmF¬Œ\$ˆ@‹A…ÈÕ@\$XCY5Œ%<®‰€×àñ.džW¹§pâ‰+gÊ:'a2S l¨\r:¸\0õ5DÌ×.j(7E˜¶p0iM\$vM†ª,‚C›q€Ó]€ÃRFjXLr\$À^RäÈãã)QÅ:\$¦BÃ{^. €#I)N•\n,‰­8§:B\\M‚Xl²‚:2ÜÓ ª‘`Ì ¶Š×¡´’Q3pnªÃ^Bµp’–ÅmƒC	É8è’ˆík¡ë½õ&ø†ƒªB«pA-åÒ!ÀPO\nü+¾ªR\nQ£~„\$Ÿ¡Ð–È|bÆ ëÆ™bw\rÑïŸ„ÐÇ°ÎÅSºõ³…ÑRRwâ–µPŸÓ1Y©Ÿæa'['=BÃÑñ/„¦1ÖtãWYê’ÔúOö ÊÉb2”ò™Üd‹ o©ÁÍ¢±º*ŸËá„#!]F¿Ê@‚\nƒŽ§¼1Êr ™êù Oð£^2Þ€›(dÄ÷,ê£Q­eV2ÈL×-24CÊ-°14¢³v‰õ¹D§~Î!çšgeÃÑ Lµ—•5£ÎÐ¿…úÇú”JF\rÁ‘¦FhQ®\$™ \\ºg.RðC(†ÅE+(bëuJEu6°šæúe‡18áécü„é²{D	·žp¤\\_EÙV™”û¤iC¨r F¤3+epAAŠÉ\"'ì…ePÃBu‰è¼IæÅiÂÿ#õåÈò¼äêÎŠ¬Ç™ôsæy2wTÙç\"@ôŽ~¼oÕû†WmÙõ°ÏøÉ»M\n_nˆxš)ùèÂ[£è¥¯]¿>©çfåô½SÓEFiÛ§êö‘ÔzMO*ç—M:&_ß[ý´Î»ÓzÎ ê˜SÆ¿Ñ¥ajÂŸ±P¶˜.Î[déí³gÓÎ6ìB>ía–Èif‡À;Ýºbãi1\$#Dr©n‚ª«¥vÌÍÓ¸0”§iîA—†šo„\nw«ÂdGò7t×“dH	=5‘î±U°ÉWCž.fú§¤øp°	&âF„Œ³’ëEoÕ˜÷Ïy Á¬édõ<\\íÖJ>§€§f’4¥Aæ\$¥Ç(0êOƒM¹½DÛ—g«ÃncX‚×-ð›KúPzE»‚5›šÐx5†Ê'PçpGHý7Óz0é%„MóÙ×Ðõl_wôØ/gÄhê1°Å´ë”‰B…†9!ªb÷ò³ûÙn®U¶­øNl,*Ïî†Á…â¢wØº”èÔ/6¡@ào±0¯6?ÇQ.kô\r=¦¹¥÷]?ü†JìœÒÇ—Ú­\nõ/‹Xõâm==·ö}M‰¬ìÕÂ`ö]GÕ{]EÕÂ«*jR•'\\[nÖÙs3÷|ÎßP~nÌ~Š'ú}—ßNwò×§ÄçwQsp«ÀCB?=Ó,(_ÅÔÿB?øú€‡ûmŸ©sÖÔýŽg÷u¾Èþ\"êÓoèÖOîÐCÿL®ÿŽ´ìcë\0æøÍ\$T0ÖÀ©*–.@ÞI6ûoXæÊÇP1IÐëp 70?ìxûozìðLÅŒ\\Æ\nÚ:¬®LêÚ­ì@('Î>K–?” åæjì^c„-gi\"% ÜAàè%£òÅ\$`-r©ÐhZŠÜÃÊà\$œIÇ\"-ƒæ‹d	‹ÑH>@‚ £­ëÌw)6ëÓ\n\"ˆplhR¡ÌìqÈ²9€ Âã\"Ã0êN òon=ÐôR\nÚýïVú¯]@äQÐöªOvìV÷âlù&¢}qÃ\$Ú]lÄkçýâVêZ¸\0óiB÷cÿE‘:ëq?/(&ÌNÙ‘T:Q(¹¥bÜOV‹EÅ§ˆ!àÆ=€8Å®ÁÆOCÀáqF}Q8gæ’«(†@‡\$wÀÒ¯,¬©Ðï¨ê±ïÛ¯ŠüŽÑÑ³ÃëÑ,ºVã”9‘b3Ë\$Û¯–ÖËñæùGÖÿqåÀî£†²5JöJ Ö&†»ÑÍâêò	 ÃOhûY!ƒ#!ÒÿÐJêñbN’ª¸ñë#’,M¯-‘æòJýñÎìÌæñcr@jr`]lŒÇrU!O¬}Òj6ÐIP[&ƒ Èxé2Vû°[,‹(,†§)\"|Èâ\0E¬Ã‰BJ£îÍD6*Òo²s*Ä¯+/§'ÏÌh&†\$o¦:Æ³\0Âàæý%ó1ø#£¼yÐHlRÃ63²êC«4JM²T%\$¥ÄÿI\n_/ï0&„\r3	/Íˆ(Qx¿C.0ã6*£\nTH<ýs\n\r1”8\rÚ:K¬ÔP\nç'iFÔÓJþ³DÔ&2Âld‚\r€V\rbªžB„îhŒ\"N iN9\nŠ¦J11¨¤³)dÖ\$Ðxæbø!Ï)\n\0ª\n€Œ p&ÍhÏRÂ*†iG|Ôóª2pFé)Ñ;‘;RÞrÓº2ƒ-Ç;/½DÈÖæs¤º#§\0Ä#£òõä_ƒ_\$ç€Ì}2 ªJÃXÉ¢J9ÄøÅÂ>ƒ ñH)ÌÄ.c	oäpø%¢5CLˆ­¨¸Ç¤¸Ršå.V:Nœ/Æýâ§,\\&/lò«ûEn¶ Jt%¨xÞ´R(”i<0(ÃhwÔeEOv·±¹HtyH®`„ZNƒHNÁHƒR!‘Ã\"Ç£äXN`-Ê 4NsóøÈÊ\n`Öíó†I	.§Ô¡TÐ6ô×	Âtªì<‘…\rFJ-ÄŠ™¢ƒ5¥^Q\$N@‚ì\$N„#Åßê¤=F«I‰’è3*\"PS*\ngœztí'Qt^‰å3IBmCFóøI‹kM’ú3á7Ãi@‘ô6ÆgPPj?J‘„Û!²<-Ä¶B^]\nb\r«fàÚEDXMbÜ% ";break;case"pt":$g="T2›DŒÊr:OFø(J.™„0Q9†£7ˆj‘ÀÞs9°Õ§c)°@e7&‚2f4˜ÍSIÈÞ.&Ó	¸Ñ6°Ô'ƒI¶2d—ÌfsXÌl@%9§jTÒl 7Eã&Z!Î8†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘ZÔž»	&))„ç8&›Ì†™ŽX\n\$›Žpy­ò1~4× \"‘–ï^Î&ó¨€Ða’V#'¬¨Ùž2œÄHÉÔàd0ÂvfŒÎÏ¯œÎ²ÍÁÈÂâK\$ðSy¸éxáË`†\\[\rOZõƒ?£ÅåÞ2wYné6M”[Æ<“‹7ÏESž<¡tµƒ®L@:§pÙ+ˆK\$a–­ŠžÃJ¢d«##R„Ì3IÀ¨4£ÍÈ2¦pÒ¤6C‚JÚ¹ïZ¤8È±t6 èø\"7.›Lº P†0ÃiX!/\nê¹\nN ÊãŒ¯ˆÊóÇBc2Á\"ŒKh–Ãa\0„Ã°ªÜDÊ•E¬+?ñ(Ó®’Ò}Êoô£,EÂ+œ91âjºLnRÉÌòÓ^1®+Ì¡EÌJ½8%­‹Î:Žƒ¬à1,[å%JôkF±‰‹•CTE‰ÃxìŒÈ,ûh‡\0Ä<¡ HKRÔèJ()¤£,øæ±â0ê¬ºðJ( ºµËb\n	°ÇM¸Ã‹†6XÈ8@6\rìrö'ŽPÜüCc:9 Ît‡%\r£Jœ§iê#(HñQˆ.³±[\r‰315è›7FÏŠz¤˜¢&2u¬€¥\r @ ÑŠ„çŒk“òC;¿8±T«–Í2¼¯@I¸BŽvKä!®´¾:: 1¨‹‘ä³+0Mˆ¥‚4µÈÚï	#j<„1â(ñ›°N6@•¥·{\nR¦YŒ=9CäÎÔQpØóMJ–J£xÌ3=cpË öìü‰¶)\n0œêz<¿ìê1 É\0Ì:¤ÖbîÉ˜å´#8Â¼åVkÔ@ÊaL,7i@@!Šb¾¥*Ö¤ÁÜ•9Izè6î	bâÕ-Ñe´œV	ú„ŽZôp‚a(çµì)¼µÓ2êààšõ{®nü¿t,ß‹tšÃuë9Žë¥KÛ&®§* ƒC:3¡Ð:ƒ€t…ã¿¼Gò.ƒ8^”|÷:P9Ï¡xDßC<ê‹÷‚z5„Aöj85ýèxaÈ-À\$r~©X<q-ô:ÖºOX	8&ÈÉºet•‰!PÉØç–äEŒ¸hBhõ€œJB\0 ˆ¿ bCÂ€H\nLÛCAP\$œ¯!3Èò\$°œöÄƒ\nê2åà;9\$>IÀQ8g:'¥‚PÊ,+J¦9›øêVò‹Åpƒ´@åO¹-?J|é •J„E\"AäÒ \$>j jxðÙÕ’WÉ6 Jññ4fˆ*Ì?ÁÒ><gäN€O\naQ#¬Ob€8ä6åRd¤,—âxOˆÌu1¹m8ìg`ìZ9¸˜0äáˆÌqj1ÕyŸ÷øÑÄ®EÙ|¯³òW‹˜*C5îßbé’ø¶\0äI‘8fœ’ EO_“¸\"Œ%v›”ú‚xNT(@‚,èA\"„À‹<ò,’§06+u8—ÒˆP%ƒQ\"ÃÎ\\¹\\œŸÎ€àº•Ò/C’­§‚Ý?RCHÇ9¯	Š}9F°a‹2ˆQ”bžYAÀ–:È³JfÃÆN\n™½‡„€œæÂ;hÉ­Œ9š(\\œP§PU£¢NzÝRtŠÅYµöWOË?9A¹OFŠš˜ºYIJI0ÅšìH VsÅ’–“\rËV íŠ\\‡0u\rÊp‰¢¥\r7ÔÌ¼1†e@\$¦ô¾ho­õð ¨’ôYðo\r‘\$ë¶2ta,Z¯Ltdø‡ž•‘	€) ”jrÉØñ‰‘9Ê\0 ¬fV=ˆ\\AÑ©ú^@PÃ²x˜«õ(ÆÈÐ­¶¶tWäh‘^/ÊÛ©cH*iÊ›f¡*©‰ÀU‘¨T·ÏÈ9+³rZ\rÓ ëµ£œ²ËÀk;1\$V›„æÍÉrX5|Å¿äÚIr.FE’Õ2ª]¡È«—™fëÚz5oà¼°·ö˜’ÃzªT¸ÐJ4Ú°	~VJ!Ü”üg°AÉ@àƒð‚ÂK†ë°Æ\rÃXr3‘XP€d§_²™•Ì&ÏIÃa8C1ÒM±#«9—ó?æ·‚¯ûpI„L8ãðñÝY²a9ÁdbpÎ²Æ[‹xÎðîEÜ69F4¥žŒÂÎ%Â`ÌˆA\rÌ[Á8„dñ¥ÄÊƒ³)GÎ‰n1ÐîC=9? Æ¢ªS-P¤Ç2soåÄ#çœåhìŒIô‰		.’—V_J.4=&.—¢ö¨pÉ%=…æÒêƒ@àÒ–Õ¸¤Ú xã0f£ê·W®­f°QÚÊ¡Xýxµ‰^qŸ,\\ßZÀQ’}¦/EÑÄ„ê*J. D\"«BZÍôNÜ¢\nýNÏ£p6ÙÏ—If-{clîº\n(ÛÇbÚ£íÍ»Hs’\0Q•Wo;.¡¼[¯jMB©õf/Ú¨‹5ÿ¨±{dq%j6ó‰*©1JwÃ¥ dˆUmœ®Òc!´¼‰”ñ¥inY<±8ò»eq‰ð»MÅu£b•Ír7ÂÆsZEàÃ†ëB¹f¦çéÃjAíã“ræÍþt6¨]/ªéN®î/*¨PN~OìÚK­óŠb×\nªAƒ6x×\$eÙ¡€ÞÝPßL/äÔÿ\"E¾‰;¿ yJÅvfX¡®Ë#81=2Jäšï77½Í”mÕ!ç^é÷G]Ø¿Û4–ô1÷\"‘Ýùl-=\\åÛœzœEÉz•BõÜ§dõ»ëE’[&¾ØjÇd}Ù@Ö;×ßüÃ²^Ã9_€—.:å¾\ný\$JÍ”TlêÖ×KiØŒº×ù‡5ëŒ¥æðŽ¤ì¿Ôü—Ç¬òÿÐ°¿Uîøøv”ú\"Z­•ÁØ¸¬LŽÿÚù¤löæÞÿ&Æùê¼ükÜ'.ìL\n.?¢i…®ÑÄ´XÁ†Eü%oÌÕŠ„V)Ï\"þm•€ë°. VÞª„ÿm*°;°hÁ¯\"\"ï/é®*´°Th.íã”9êºBìºl´°„ð‰ðn»OLåO’þÀAë¨£ë®ô°£	‚r *ù‹â>dÄL…\nê/|'\0«å\0%°”´°Ê¿Ád	\r8\rãž¶Œ«¶oÔ8Æÿ\0çb6fºüì=¯à\$¼ÛÎéE˜Zfþí£h0BöÛcoå¼3nŽÅ‚nÉ*2Nvc	´<àØ`Æ=e’¢ÂAMC:”°ÛêZ\$íH ZY‚¦™ªs‰\0000‡ `¨ÀZa#éÌrç,2Ô,ÄrŒñˆ½pÅ¨@)¢8C'ØˆfÀOp¬ Œ±oê1€ò³ƒ\nÜb)	C\rdLj«À\rÀÖý«Œ¦B/GP%‰ (FæF¡†Fž(¢ä	‰c»‰‚(ÑV7E®çë\0²£^Tq¶0ÆìVðP6MþS%ü7 ÊpÊ>6R6@ÌF‚³ÈžA‹5ãdóqFvç#-š0²9#ÐŠ0Í\$ƒL¹…L§\ràà9åºRW#c–R\$˜»†F3#”àâó#O:0ÊRÚ\"t¡ðeªà\$Àïíâi*X:Â2I@ì3±Ài¤›\"ÆCåJ´àÊí¤Xd\0xµ@‚/\$L1êÔ.¦7h1ë¥\" ¦#Ì¦n/*C§*4¾d\0Ë\"Ç,BW,q,ð'p<%ev~I=Á\0FjfCq@o\$h";break;case"pt-br":$g="V7˜Øj¡ÐÊmÌ§(1èÂ?	EÃ30€æ\n'0Ôfñ\rR 8Îg6´ìe6¦ã±¤ÂrG%ç©¤ìoŠ†i„ÜhŽXjÁ¤Û2LŽSI´pá6šN†šLv>%9§\$\\Ön 7F£†Z)Î\r9†Ìh5\rÇQØÂz4›ÁFó‘¤Îi7M‘‹ªË„&)A„ç9\"™*RðQ\$Üs…šNXHÞÓfƒˆF[ý˜å\"œ–MçQ Ã'°S¯²ÓfÊs‚Ç§!†\r4gà¸½¬ä§‚»føæÎLªo7TÍÇY|«%Š7RA\\yi¸ÏÛäuL¢bû0Õ4à¢\$ ËŠÍ’rFùè(ªsÊ/‚6¿ö:³\0êž„\rëp² Ì¹†Z¶á°­«ªh@5(ló@œŠƒJBÜƒ(ÌÀ*‰@”7C˜ê¡¯«Ò2]\r¨ZDö7Ãœ C!Œ0ëLP¼BËB8Êú=ëìl&3ìR.)É¨<l)¡ij’Í¾ñ9C»i[]1Ï;Ç1xŠèÆ¬Ø˜7¯ãtF9'£rVƒK­¨Æ¼°)ƒz¤¢âjDõ<M0ê:±¨ ˆ4Ò%©\"7CÑ(]õPt,l'\rêü„Ò½KÐJ2òƒ4ýCQ¶ó¨Ë;º Œ:¬%<Tˆ,‘‡YAˆ¸ ÓŒt³6š0I¢\rˆ	ã”tÊC£F9¡NˆÊIŠŒèÎ*\nñ ÃÀè½5ºÄUãbRÅMª,1§Ñ»èŸ*¢˜¢&2£uœƒÎhàƒA¾Š¦1¯L[Î?c)DQN¨…0Ûs\$ùHa)ƒoa>¢•‰x¤l\"ã#¬¥†ápÇ=ÅõÚl4ˆòÿ‰#jB†2‚(ñ—¾¾.á±ƒdl1a™Ê‹ã˜Ö÷U“ÈD³mSX—¼cxÌ3\rŒ\0Êã,Òt7¨)ðó2ã¨Æ…\$c0ê”Ø³hæ £–¶0Œú¬ÜÀAÕ¢é Á@æÃxÖ•„¦)Ï\"X¡ê*H\\LékªŽËàÛ±¥ëËb»E¶–¨’·µC!L“zã6ôrÇ™³QÈÃ´eïãü˜l¸ð[\0ÔÊy9ê`PšÇQI9Žëå@²Ô‡Ã‡‘ÐÑŒÁèD4ƒ àáxïé…ÑÎæ……ËàÎ¥~å¼•ŽsÀ^8cÎ÷ùBýÒŸ\ra}–Ž\r¯*:xÂAÍÄZ:(¾	ë{<Ñ7§æqÙ|7èÈÌ5f‡)°6çÀÖ˜¶PdÜ1œ#¡\n ‡ÀžÂ^@hÉdIÈ \n (hÌ!((+\0¤•d*dƒ™!\rÄØ”“äœÃJ]‹ˆÎ˜\0ìá\n a'!Dê’˜ÊD(Ðñ®Æ\\ˆŠzp*H…‡‡;9ú&ô›“\0Â€Ý£ù‡ÄT<š´\nU\rŒ3dà#F°‹1ü4ä!Z½r`ÿàcX¨þ àÛ¨P	áL*&C¶ÉëáL €3£S²ÔÁBÔ‡†¶HänŒïÌñÂG„TË³\r`¹†u-âM(„“äüCz9È1à@¼‚aüeÅ\0Œ!jð<‘\\†@8ô}²U{Ü×ti‰óçt¤]€.c}xNT(@‚*ÈœA\"„À‹:ÂHL‡<6+/<“P%ãQ?³Ö†I	:'„ø ,€à¸•ÉìCÑD¨ÃÇ—sóGë€É4Sª\r9E(îÙL¬0ÂÏª~\$ñ™žð^’G¤i‘&&~à¢8¡p±)C‚B˜©r|?¼4Ë¹Û\\úª¢ÄÂ›°ÖHEØ±.&ÆT³ÊZÃ‘zL,ÑP+ÇB‹Â³‘(dœÏ€¦8bŽÐV!n‰üƒ§ó.ÔG(qAäga\\-+Q6I6\0Që5s*Á’fÂogRÂ3“vëòÓ°,¹A­4¨ˆ0dPôý˜±Ö?¢D\nÆ}q“»»§ª;b4ì†–ÀÄ‘0\$¶–Ó¬’üAèQf0H¦•ESÁÕsTñÕù-6”0T/¡ó‡\".­m5¹÷â€  T	òsX†\0005ž0‚3Ž7Ô 7+I9ÑEáŸ³j•8Ñ5«ÁÈÓ–e*Ñ2‰FÊ˜–•LhÔá§Tª‚ü\$ÓOR…ñ‘å‘U¨7LÚ/¹¤¿ÄÈ3ôÊ€Mk·ÈÃ`ZÀéÛ‰¢ÁF™X\rD!'èç§«!Ñ®W§ÀœªkàØä{%8ºcŸ{0t¤Â»\0ãEƒŽ3YÓ†ŽV:«Ù¦¢ŒToä]ø@£ªLÊñzÊ¬ÂX0Ü°S`ø]0_•·tCÒ#‡™+Å„JùUÍˆ„˜pÊŸÎKÈ„À®Âos‰yâ!°9”ƒÆBÏZ~›ÃBÊBU{xHI£Y—Ö\0µ\n6(«Ç^]®e‘&pÚ§tõ›\\@NB~ ¿.2žVƒ¨ÔHtÕ*o•Fà2!ÌÖxÆërQ“Ì\rA ƒ^3­n`˜NÂØ†/^¸Úz³‰uAS¶y®ƒŠ:ß3ueb¬÷t”Ð¢¡’Ý>³EU;N—B¢^Tì&Ü/Š¤'›‹GkkF¤#d)\$ø†Ö†#¢·|Z	ìFI ¼Ï[Mj+>§[:Ÿ6ÇM™¸9D\\PÑ»[Åøƒ=ãFãŠmA°øÍPäš·~£ZƒRXW\"åZ} ±ä	Å\r”ÖN\"Ës}[É¹ß5cüâÚàù©@ÌØR»¦¶äÌopEüÔ7·`çzUÞÅ]?`Vn:® 1ôÖÝšû{6ðet»SM‡ÙM…¾›=«ôM“Û›í¼çŠ´ö¾J’¶F°SÚ†ß)Å²v+l“ƒÍš ·(ä€¶„;Œ>iÄ–®ŠètÑ)|¡ÇìŽ	Û3œG/îÃX7Ž§y'åô?™Dç¸v~ùp¶ÅªˆwÅ¤üd¢·\n´˜MÙíMlÝdîÛû¼|“Î;nfùÆw¿íiÌ	‚\\z¦ð/žÙÅº\ráÿ/—ŽiøµfÏð›ßÄLu~íâ¼ßÃô/RJ«!FFî™C‘Êî~,&\n06äª`é2écûê€ï²éŽè­•°ú®Nè¨ÆVaRª¢HbŒ_/çåb\\o±ˆ¾~bô .Íºa£FÛGb¦¤¨&‚^Â]NN—àËUÄe•dO¯]îî+p,š0yÐC	P‡	SPpçp¥ÍE*j°´/P¢¹…†úÀüÐ¾/Ë‹Íý‰Æçï×	#\rpÌ!kn¹/‰K‰€¨ êþ%¾Óä²¢p§\rQKg\$üŽŒÕ1\nE-nèÌ	\rƒlÂG;‡áÃ6TÊ1¢Fý\"\n*˜êñ8ªÑ>åm÷(´Ø,BeŠhÅLñe¾1CÝ(TÂ¤4.pÃì¿h|\nw.Âgïh=@Øi\r%„\"ÀÞCF“ÐX?lP­£® ZX¢rÉ†€\0€ƒpIÆ\n€Œ p%Eì\rã\$;ÌZêMVÖí2ÊÑIŒx™fiˆ4*ÍÌ\$hx%#0NË”—m–³ïÚÀòH#ÝB/Æj\n¢¦Öšº`Ü\rc¬2pÐ(Ü]†07ñ¢ökœ(dÚFÁ†E(ÂôMdr0¿%FäÞiFÅžÇÂªÿíL\\p÷Qè1 äVØ@Â·'-˜gRw#\$¬1Ä08„ïC Þx'†Pò„°ÒŠ×ææÈ²’]2–ìÇ4o’ž*b¢R£'CœùÊD#ŽT½Ò¦1¤ú»¬Ü[¨ËË.B~àO8´Å¦c‰Vâ8I€ì4rëçl7Ã2¯²ÄT6 îJ²W¤YÀ¯Æ0-`2ŠÄ/¯‚é Ëc6¸R|2ŠDXq¦&%Å.R¨ê8¥kbÀË0È0Ä•\"@%³K°–õËŽ|ã²FÍ†Fˆ¨QR®7 m‚ø ";break;case"ro":$g="S:›Ž†VBlÒ 9šLçS¡ˆƒÁBQpÌÍŽ¢	´@p:\$\"¸Üc‡œŒf˜ÒÈLšL§#©²>e„LÎÓ1p(/˜Ìæ¢i„ðiL†ÓIÌ@-	NdùéÆe9%´	‘È@n™hõ˜|ôX\nFC1 Ôl7AFsy°o9B&ã\rÙ†Ž7FÔ°É82`uøÙÎZ:LFSa–zE2`xHx(’n9ÌÌ¹Äg’IŽf;ÌÌÓ=,›ãfƒî¾oÞNÆœ©ž° :n§N,èh¦ð2YYéNû;Ò¹ÆÎê ˜AÌføìë×2ær'-Kk{3ùºš>²±1¢`÷½“¢ÈL@Î[àQ2ÁBz2§Ë¨Þ„ ¨:Ã/a6¡îÂò2¡Ä´J©'©û²¡&Ëš::ì8Ô0§¢ Ò/!àÒÂ¸+ËMc\"1Ic²à)	ìü\r)¤[¥cÂ1¿P\$T80KÜ&\nH!6òˆã(Þ6Œ££ZþÄp §0®’t™ÆìBpÆQ¢ð\nšê0BÃ1TÏËÌè˜7Œðšp8&j(Ü2 Lè¦Ê²cØÎˆ2TH÷+)¤˜†N‚hÞÌ¥ÉCÜò õD<o-5N\r4ó”É‰¨¿´\rbºœ\rÍ“:Œ\0ßG€Mq]QÐLÌÊÑÎˆŒ€ŒpHÓ\0Œï%òBÐKºò€°î’ñRL;Vò5pŒÞÿ)ƒ£ú€ŒêCFàBé¨ëeªÐJXãblÈŒP«V0Î¢&ˆê™6‹È˜I©`ÂËlS;onE²9¹ô{KS4ë®Á°±tòXÆ5Jb#*‹ƒbÕÒ’Ç–X–cƒ*¸°  Ý7ƒ-Óe‰#hám³¢(ñŸŽW0†û=µ[(c“Ä]=eÃFM:46#6öCd¼6(Ý]Ã0Ø½²Ìò˜Ú ÞÜPÃÌÐ£®9Žc2†6P Xà[pÃ@Á°m~¦,P9…)è†)ŠB3€7t@A ÀãHÄÞÁ«/)Òp3/\n*«ò{;4m>ä¬E2\n†Ð¡(4ŽBÚŠÅoc•\0„:ã³®íÐò`ÃÒ3,\rj:§¢hÂ¬¦hÿ–9ŽëÅr±+ÃÌ‡‰`ÐòÁèD4ƒ àáxïó…ÊWž/8_D}ãÄ0„»xDå?rï¼/ß7àÖó=U. xÃ>*%9.u6ãÏ‹‘reiB%©iX\r.É\n¥àÊ—y8g\\—(2ðœñ=#HYæ;WæL4,1gœÉÃ¯\n7]D˜DpÖÛ=À ©8”Ò…Qzlli¸¯1B6l%…`Å¬×L¤áPuGÐ›RŽG‘y%V&µ#”Ö\nº%Ž€¬‘ÄbhËÊ\rEááhOBI&É•r­JÑ¡\rÊäãœ“ÈÀ¢¡-wDx ”¶ÈWŽ;’màÐœS¢¾y%`0†¢†xS\nÉAŸcâyÈT/+•+rŠAÉ	Pí<ÅÄâˆJI|vŠ	*ÅÇPw	qIH%™GÓÈ“I;CaÌØGÂV`Nx)NÑË†p@×ù[B¦ì–`¨äƒrlùmÁ9–ÉÈr'aÉÅ5\"’‡Gn) “¸ “ L%µM±•RµgÑï?FùhEž±,ž½~3(Ž Ð™K±qw€¤ž¹ÃréKˆdeæŽÃ(famhbúÀÖŠ[TˆN\r C9×ŒJy”Uˆ@utÔ˜SrL#;?\r'f’Í\r‹/t™±†BÊL\"ŒcÒÐœ0²ZÊÓ&f„ª 3ê›5e‘•1ÄJÇÕ¢¶4§ø¬’ÅB®ÊÁ”MáZ–CS*t–àV«pmC’Â¤ [¨,/Ê†’XDà*HÒ´¼b@a°,¿³çtÃ‚bÔ¦ziîÚL’Œ:HÍ4¶H‹jÇ„T2f›,:åìíÌx°•*¡ªŒ-P©hKµ¦šA¸Î™óbËdJ¦ÙÈ2ÅrN‘„f–Ø†ðàÈgë#¥Ì.˜žæJL¡q3¸†–ƒI5øLUZ6îw8è  óëÐAM.\\^\nÁuyÕS&GehgBb“ƒº*á’äžòÝ‰:Ê!=¨Rw\n + GŒ£²˜”ŒïJ:ìLš0ÙL©üˆo¤M\\‚ðA‹\rLcVjù\\Æ%¾WVXQ`mõÚ¨Õ¨Ú¿ÆÊÈÑK³?âÀ	ÇLº“#\nŽ55YÏÅPJÈY§\$\n_ÀPôÌÉÁbÇÙ<ž«üTÛ³N1@»0vAn\rÍ8üœ:šrêæ`\nhY?9Ò´îƒ½;V	%Uä?y€SÄª|½\\ŠôT'8™åû¦Oh173¬ŸÄA`T&›Mï'BM<Ž”Zº·UhE A‰†&R\nIÞ­_‰£<+%âÃ-CÈ+A<L¤à®e`³‘J<ŽÒ6U‘2fÃ–—Ñ!»d)V¿êÆ1V¦j§ìvu²gÁRÙ›dú8„ŠnCÛ¶­mÐ«7UW¹ZeÞe7ŽÍuØ:iŠS%2øß\nµe£¯]&”¦/ræÃbsKeeÝ©Q«ÊRÁÀY¡£µñ\r'\n#/C©ž¹× ¼Æ¢7¾·¢ONµ!9>F»–]Â¡—Žù*Ú2ºƒ\rùEAÑVÕ:Í0ëÙÛCiTfœÍwm<†‹íÁOz5aè;È­Ê“Sú@†}S#e}ÏXÚKMêV¥—ôž†höO¶-H¢öm÷Õú{Qj}»”äŠžT!•:!®g<Ÿ0QáS)c,‹ÐºîõÜà'¾o®ýÍpÁ‰+Âcnkˆç'Û=×,6P‡;¢„ž'_ÄU¤'´¼û2ô'ëšx9×ýM†¼>Œ÷xŽ­ì5\rR@òBtÈã–ô…_½Q>Aø6\rëA•½Áï}c1}!½Ã\\†(£:èü€òë¦¨_º ·ìØêŸìs¢¼tZàÃWu®ÆWR¾îËû†gR­º·Š•…uÏ^¶ïòTJV”ÏJÙîÐÚP·p]olßÎi®T·¥ ÂÅ]Bß-²Ý¬óÌ0T4ÞlŽÞÌôÂð0\$Blñ”Zeß¯âÞ£ÁÌ2eR°dK­¦*ëP:@ÌaDC²\\Â~Q¥ª:cªD£†ÔÈPb… fï\$SÜôÎÒî0œÁp õÐFëðªðD”íÏn¶ë–Ð¥A%3o	ä”ìIb´° =Êß\nÀä3¤ž(cÈ\$Oh/%–AVãL.  ÂAw\n0ôêŸüQP½Îãá71½Ì=Ñ q\$!ñ\rQ5±#A7Áv¢Ä4å°\n?LòÃªÈàÃny^dd€ºñ\\i1`Ûj,/+àÓñV«dSŠ	\"´ÿñ‚!Q‡.¹ç“&ùÑëÝDÐEF}°/`ªF(–Ä1ˆ Q€Q¶M±½NQ0]qºF±¿€	–j@ÈÁ0Ð3  P§<äCôËâ®@.¸?G²'Xñ4²\0JC o«…¢o\núk`qã\"&Åp¢ÑðýoóqÐ:ì„ÊhÈ2ÒÿÑÐ'>ðÂòqD¼\r€V’eR\rm47\n˜½ET‚hv†Ù\$:g\"ˆ§B´2n\\\0ª\n€Œ pBÂNŸª2Ì¥rHÄW'(h¬ÖÍ²œ\$Ï&>iÉ*L²†\":#âB\$fªQ£\"ªˆú0..ÆD`¤ª³®:<#4Z®&‚>¡ƒ%ÏåE&°B8“ÑØ&È@8\"Àà€A9ÂzN%Ò/€&¤bdäþ)CÐ?ªW)øÙcŠNŠE1ƒUË~UŠ¤ªÍôu0æq+s>QŽLÿÌèÞã+5sFºËdS5ê« îÎÚ&Ë3ã*)Ãh6Ã&rK­1«H“\\'P¿älf/*q,äœEe¢_„bÉåÖùsª;³°iÂö¾ƒ²:H ^MZrÄÐV.FÇ”?N8 @\nÂdà®‡R‹@	àá8…Fïbø‰k6´ÂwNôkòBc:m4ÑJbâBÅ/²ò¬ÃÝ;@›A£J´Çª:1\\1b‹=‚û=Ãv³å…‘H±?	Åš#­¦H|(sHT‘Þ	\0t	 š@¦\n`";break;case"ru":$g="ÐI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hÐX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ð&‚æ	­èp¤CE#©¢êµyl²Ÿ\n@N'R)ø´@%9¨í*I.’Z¤3¹Â{“AZ(š˜ÂTq\0(`1ÆƒQ°Üp9Œ¯ðXi\$fi'BÝãðûæ2’•,l±Æ„~C>Ò4P·üT!ÕHæˆkš‚®hRðóHbúˆ°šÊ4ø½i6FFc{Y”…3¦-j´rÉ¼ê 4NÆQ¸Þ 8'cI°Êg2œÄO9Ôàd0<‡CA§ä:#Ü¹”)#d¡µîÃ ŒÀ©),zn™¥LÓŠÖ®ém&êÜ0¸NÄ.„A%Â\noÒ7ðd\r«‹’”ÂŒC8¡”h…*ôš¨ªhéZ¨]9kcFhÉ0¦:î2¢FHÈ1s ©SŒÑ¯*in‚²hÙÉ‰9!©ôL«.™Hµ—hé¡\rË,	Á°²dÄ¦«šë3H¡(¤J’XãD’ÂØí4ÆNì()|Œ’‰€¿F³Úí†‰¦Ð¹t™ÒŠ#Œšë\nÇ1Pqsåšã,îJšSæ„\në³î\rHhR±Ìæ»ÉÔ‚„-rOB°Í»Ñ,;´¨×\$ý-ÊhÊ¾¬§ðúÀØ­:ï+¸hÉ<æ%¶ŠPÀ‘éQd RRÏ\$šZ±&š³QÛŽC  VÉ‹„Á-”³M0äi7÷DqEÂ19 L&K<eÒ÷ªØÝàÈÕ¡K]®­xº!(ÈÔ§I¨“eÝ/•äøÖ\\ÃÑ¥íKHe\"bŸ)d2š\\#\$‚]t¶}\\#7Õ à£7}\nGcU¢UZ³…¬\\’à®‡Dg„£9IkIÈÉ6¦©î}JÝ,õ¥Æõ-tXZ°Œ:ƒcç\0½È¸Æ0Ñ@¢&%Ic­­¤Úš)ÙÃ±T¡J\rFãK4†âRÌ#µ5bI+¥à¤\\š¦AÐ„Õ|b˜G7…e²ªTà6eƒñ½\\u€44æ:ëŽEÚÀ÷<iaø*}0Õ+(^–ö=Ã|Ã+iU:F'ÆÊ)Œ•®¡k:ºd×Fm²ZÜ»6;ä:¾\\pxˆo¦ª™½üå\rƒ ä;®øÂ oÁ˜6\"°Ê\\È	¥L@(*óÎ\\\0yÔ70êÃña™¼\0ØÃ:+`°ù‡(\$C8aE`‚²ÀÚŠÃ©úÌ—3¦†™œG*))ª¢¬Â˜RÏ™}¦\\J—9‡aŒ<ç˜rÖXƒ%Hð¯B³Q›deqé,ØŠ‰ˆy7KÀÏ¯\"\nÙÁypå=‡~P\\‰LDÂà•FRlWÅÔ\$*d\r“á|¼#ñÇ]Ë1.èÈºÐƒ(á40‡3ôDaÜ7‡&NCÀp\r0\0002DpxO\0Àô€è€:à¼;ÊÐ\\C\$/\rÁ”9é*Áxe\rÒä<¨*C|»Mì9\0é)úp¬à’Cî\r²è:À^Año>SLþöN}\rg4‡CÑ- „³\rÁÑ'’ƒÞZRXfÔ»%þQQÃEÈl¢±LîaÛS¤oÐ1†&'^?øèhž‘xé”hÐ4<éÙ\n&Kì-Ã‚††Ñ3cwO8‚á\rh9Ú‰g9B¥IåQ2d*¨saMŒlŒä-‚P\\Ô©%3ˆ™¢ÆÞÞõ&Ò÷\nÛgã	DÎUÉ±º£L:\$ž'2…–e˜€¹ˆã@Q”E¦ã×ZÒ›E\$‘`òw\0d\r,œóN`ç.¦ùý>P\08‡Sã9ƒ0r\rá´c¤ü—@€1Áúî|ëÔ‘>´ÝQU|Ôš-²Ç«t–\"Ÿ \n<)…@Z·ži²¬kêËYZÔíJ˜Œ²É­-/Q£hãî[îÈÙÓ¤(LVEVõ¤ÖzzKUª¡%UT‡“šˆÁ1M8ÆÁq¼º÷Žˆ iµþWþ œÑ\ròÀJ\0ÄC8 \nncÚyd ÁP(^PÜÉÃLÐ’³šrÞÛa+¸r<rÕqè¸ç*£Oª-Rœ¼3ÙFå‘»e<Ò\\½µ5R„aV\"ÐÎ]a«ò6·¬Rƒâ‡˜S\\­ÆB%”þ«Vm­Èª·L`‚ eÁ…¼N`ìCe~#\"h»”ö,CÍ»— Øäã>Èw=â ‘i)N'–µ=ÈBÈ&=k‡å—aDs‚ÜŒÖSk•‚ÖRFÉ:×\rn­H….km#('aW“!*	¤E„”“'»ì+QJÔhÄK\$÷Ã†Ggbž4rÆWŽ’59cŠ4Yôq(,ÕèflºêÍ#A« ’ˆö\"ÕˆEŽK0¸©´P-H\n\0¶ŠQe7«ðypI2’¦zv¿¶ØC@O1¬8ÂˆÉ¾;X8^a\n8Ã°¥RÂåÑóÕgÔ\"Ñ@iA”;!Žä\na”÷3ô3jÞÎER¤ °ªnuxœX1>‡…¦ØÃµI‰Sq·‰Kz7M_<7®OˆùÚn	ÚdüÓ!ÅJâŒOVU8±E1\r[/]Õ1uaPY‘Î|¹¨¡&w9ggÈÑŸbe&ŠÑKGåYÖ+b›ÍÊ.[¨UO-ýôIÉ9b\$kñ\$çJ;ª\\®êe7ÅŒMHÈ¥tÍ ªc¨MkyVüB3·¼ÑÕú\r¶Î‰­+•*ûúîCü®š,÷{NÊç li~HfDÃ*äe€¼Æ²Ê¸¨‰0`\n…b?áÖ!ä·ÀjžÃùÉ]+âö=Q«a›iof.‘ÆQ€HÐònOˆ/Y‰‡š!ÞuŠ°—6ò™gibãÔz¯(â=s\"ÌLÙyÈëí][«þçÒi¸àvéI5¹y7‹G–µqT¦…ƒòó=ÿ­û%‹íúzG^þ\$ž£ðzÊ·Sßäz?˜¼Å£¯ú…÷ìô‡÷¨Æ£‚ØþŠ&Nâ‚þë,Í\r\0Ftä	‹ò¿«â0÷ÂB%æ\n ÂXvá¢'\"ö'B;\"†øo\$%°,&\"Xï°6N /æÜŽB(¯^a„xa-úA…àÌÏ†á! Mð:N\"á‰;D—Â-`õg-\0„Ä|°S¥ÌÛ\ržví<F­Š)£TTm`.¤¤*G&KKfï…~Iã8Š¬\\çªÄeðÚE¼D'0îìÀ0,µJ0\"R&,ß‚ç	œBlª¢.upkPö~íbØSöÂpþm¤üÛ«*gÇŽ*‚úNPïàñ[¦ÃïŽä¯é.cQ3.”'í8Ò_,N&LRÆÍÒâ…XðF'ÃŸª0‹Ää)ð¶U\$JæM¢5n\"ªÉîJ1‚[‘†*-ÀcÌ\\Ä¤êF1P¬îZËŽ\$,ht%”ââeóÎ,öá¥\0øñ´âB˜áÌ˜žNï PCÙÀRÅ±XÅê¦[CVS¤·‰ë¦ÜÐBBÃÑlÏqîÓÁq8‹d<¦&w±Åû ‘õÑ'í,øÎí ²\$[±¼öÒXÃîFÒò2·‡âË±úÞPðîLþS\ržwÇpßˆÐx²8ù¹#èrF[Q\$þ¨%‘ZS*ìNâ°„ÛbO\$’~S:ù1õ!#)ïÿ(QRB®¾a²\$”ÿc¬÷rRQ:óò÷²«’®8ïC\nbK(Ë ¿&–Q’ÆK²£'0À®Zb.`ÁA,q(*¼!Èû)²þŸIù0D¼óó\n³ÀÓ¶…}1“\"M­\$SáQÔ,F¡â>žHúìrUäh£®0D ë§ÌPÇ'œEÞCÍ³FµîdOì²âÙcY4bØN‚nVã†nõ6S‚Pª2{ÀRéã8bÂ`îsL}\rÊ/Õ2Îbæq‚;SnJp—7Iö0’dc'Ð7ptu2ÌGEK¨˜åjªRS@c­þ×îF ÅR6©ó\0Müà?±]?óòÎÃõ@²@ñ7,’(Ïïó%Æºat	?”²@íeXr´\"þ±ý@Ô+C¦ÃCòï@q@GÅDë³D~¢mF|l_D³ÜâÐ5Ft\\Çô;\$P™GIíGŒNª4Ra¡3Î\$\$6à\"ÄÖXR#Xô†²ÏºÂF0Î2¶;RŽAï%q+#óò@Òá+±I ô%¬BÓôÏL7¢ï3’â­´cÊ ÆxÔ°l®I=îéK®Ã):íT}OÌg´ûBÒG+TÝ+‚`eÅ\$#^óÐ~B¨*ÑfA„g ¨F!8E¢äB¤Ê¸„N0ìÐq-Q’Û&%™S­¯JT¼cåýTŠ\\¡\$gU\"VT£T5l§rèc¡U2Ëò?Fôî&õdÂU\rÕpzUOU5|µšýì=TGZuKWUŠll)¡A3úµ(vþQ35å.u”ÂÆ0»1iG®ç^5Äæ¥n/p!sUqÿ2\$üæÂð-@6_`uù3T&y•ÝEnzñŠ‰aAZµã`U÷b¢\0CÊeE´ƒC†”¦µ‚ZJ[_´F*/6ßÅœJŠmTu¹)Î•Xí	e.„¥¢eZ__´gN‚æ²û\r²ØÔLÕ +k+	å>+p–HrÓÔ¨ÖOŠôUhE-bõôªLï•j’ÝOD\$±ª‘j/3!v½(©ÜZæÉ“ìtäGBã–ùæŠùmáV¶Ú¡iñ'1õ‘Ö¼ù¦Ilf7fR¤ž’–ùÂgp’ÉoÒ<¡·.¯ gô\r€W2âšTdÕBeÊ®lˆHŸŠŽíh¦¢WäÏN@Œ½éÂ©\0Äœ‹À\n ¨ÀZ\0@—@Æ›ÄVö)ç²k\$Ñ!—\0ðÊñ\rúõ&)x£75l‹·ŒçÈ¾÷·–Ú÷…h[nÏ!tŸäëdõtaeœNðÎžó˜¦WñE-À	·xÀó<3OˆæN\0)SËdea]÷PL\nŽ©÷=‰æþ¯‚P‘x0eÖÒ£é\"Ù4 AVTÖGUxT·=ŽYÕ²*aÂà˜¼jäE€ƒëÈ\r©*<ƒð@šO0ê×óÆ¸…ý\\1`c…D*\$°ÎsIý†W×†’î¡ð×åk‡CIøzÔ²rBîÓvâ5í‡“×‰k'èé_Óû‰à¨oƒâ<Ä<—b±`Þ\0éíÆ“¸ ÛÓMj´½AÍ´Z¢îW¡tÓÔáyìo^mš³ó\nÚ²NyÅÌ¶ÁqÈã&àZ\\!úéâîr¦¨¨ø,T@‘‰\r,Ü@Êdà¬\r Êà\nÀÂ`ê Ûã4»&Ò&W±nA hQlÇP2%ÔÞ”ÊkŒÍiPÅ\nsæHpÌ^,¾Î,¸v°ÐÌ_R&†Ní*å-\"üÔ¶8Í•I™C¢h\0?#È‚'’¸ÊÙ“u9SÕƒvqfÕL¨u¨|9\niqœ4ò	‘o³ˆM¶QáNA )!9žÄ\n ";break;case"sk":$g="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØÞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹H€0Œ†cA¨Øn8‚Ž)èÉDÍ&sLêb\nb¯M&}0èa1gæ³Ì¤«k02pQZ@Å_bÔ·‹Õò0 _0’’É¾’hÄÓ\rÒY§83™Nb¤„êpŽ/ÆƒN®þbœa±ùaWw’M\ræ¹+o;I”³ÁCv˜ÍìMÔÎ\nßò±ÛDb#Ì&Æ*…†­¦0•ì<šñ§“—P9P¼æÙçÐÊ96JPÊ·©#Ð@ Ã4Œ£Zš9ª*2¨«¶ªÒ¸ì2;’Ù'ã˜Öa•-`ò8 QˆF<ã˜Ø0B\"`­?ˆ³Œ0¡¢Ê“½ƒÊKª`9.œÆã(Þ6Œ££2ô I˜ÛŠcÊ³\r¨sþžŽ@P ÏC%l6ŸÀPÕ\$hÂÛ­±cð4b`9¸œX*NLÝ´³lÞœÁ˜á¹A\0ÉÅ‚ÐÞú½ŽË%£Xèˆ)L78ÐÐŸ¯””ø¢6ì€:Bs£MØ×£ @1 ƒ TÕuhóWÕU`ÔÖŽÓõ\0ÆÃ¨Ü5Œsè‚3ŽC(Îè¯o._/ŽP5ŒhÞŸ§¯•\r%Aƒ#\$J´8.b\\4Ž‘iˆ]2;X«×\0Pƒ`Y5èØ65Œp†cÜ‡\n\"`@µ¼õ8õw­h@\$Á6-'rã¢l1ƒ«¾É½TÛ–Ø°mA-TœâéJ•\0¬<áË’ˆ9äHÛP\nyK×ALøÉB=D¢~\0PŽÈÅ)	#j5\0B(ñŸÜ¹Kˆ9tëPcÒ‡eÑ`í×l˜Ù%Lê’Ž©ƒxÌ3\r‹¨Ê”‰ã\$ôPÎ`¨7¤/XÜ<„ðæ:ŒqÐæ9ŒØ@.ƒpæ5ƒ–à0Œã\nêpõ€Úºà£(P9…)HœŒÅc¢t^µŽrb˜¤#ÁÊí&7\"˜3\"y\\ÜP¢ƒÓFäì›7V9ÏŠbÖ2ŒC,ÚŽ×úäÍª‹U8\rãsúµ¼¯ÃÀO=œ9_ïÈæý„s0¥)Z²ÿßñ æ;¢uR®8\r6(ÉÐ‡ˆ²H2ŒÁèD4ƒ àáxïû…ËçŒAr&Áy9€!àÙ7àÒñAx\"^¡ÈÔ‡GÜÍÂú\r`ˆ3ÐàNX<á„ ð@’ h#nf†ÖS\"ÿ?í¸œ‡G„Ýà;ÆvêL\"Vœ°b%š“rrˆ	Iy/eôÌ#ÊyÖ*”Ga9 %·|5lËÄFƒ#?zî\\éDPõÅlI<à€ç\"¨\\¢gŠO5=u‚SBá›½~N4?s¬–’òbÛÝôyŽø›ˆ¸òn®„-z¢Ý³Òz…8”„’Lò‚\r*¨ÑÈ7h•T!6¦`2‡êj¤f?'ð †Gö÷!›dÚÃhjÃƒ„lih¶\nÖÂyIâ`Cè„(ð¦„‘ŠLòºi’(KùÁ'IêÈé !oa¥%bæN(¡ªM,U†›„”k2e|¼c^HáÁUeÌ5ú&ò÷1DX#@ peˆgÄNAÂ™T‘ÈbW?ä¤!‡PÈ¢hk'äB<–¢&r±É‰@('„à@B€D!P\"ÑÊ<(L´‘P–ÓC¢çæ–³:_.I, \$ (*\"5Ìº\n,\nËL_C¤ZûiÚS€ –‘áj?—’m@žÇ%áªWÄ@¢B%‹V[™:]\\›ªF¢c“lÝœ‘fššIHDf-9™·\$ØA+%°P³¨€|ëC®lhù´s€ëÈƒ0MÍP(g\\Oák\ríØäU˜hˆqW!XÿÑ,SÔGH(‰þ~bùæŒ.ÕÕ6Ï'Æ˜„Á¾Ð”ê8zÛKgåœ“\n4ŸB¡€SÆ‡ôŽÂG5+€Ælƒ%•ì˜)JÓ\\² _¡*=„´ÖZ™¸&Á¢À§LEÐp¡Œ0…¢+ºÇ,ºÞûâÈjA\rõ5|ê™(Ž‡¨ÇD…õ´ðsRà°\n[8ÿ¥¨V¾¡k—¯!‘ÛbVMx\nÎ¥ËË&€Ô‚%\n¤rZ@Ò‹T%…aêU.`”¼™Ó,a úØž_î9U@¼¯+2´3Âd¬ŽPUÉø`'²;;˜D½ë?ÉÕÀWwª¤ãÑMUX™¤à\\r­`YUÝG\\²ïðáI®á§/“˜~ˆU†d±é?3æœÖíò¶nwÙ?9rBÇs´‡ÌOT¶¤ã‘L¬D`¨ø#ú‚Ò%1Ó,Š¾­Ž‹É3éÌèÔôÄRVŒøj]\r¥ôþŠÕl4öhóç¦bâqrü‡r@	&™)L©©_…}‰»£Òø•¡ì†¯ê„§SþË‘)ÚX;»ƒ‘B¦Ö#Ä:å•”ã¶OJ4³JT¤’bˆ¢4ªÍÝ*0HB£Y¤¶FqªÛ0ä”Å@ìyRIA»êš“sºOY.Ä¥-ðÅWÃŽ\nŽ§ŽãE²aÅ42é;n»ÓwÅ	)¼w†¢¼7u+ï(åW\nòñ~]¢+÷)§œÒ ónÑù•5[®õ¥JD\rú\røx^\"7D\ndÙ“¨”)%£/Î\\XSImPØ‰Bu.w¤o®†Å@ßS½²€«×bo9ÆwåHÄvÀðË/Eêq2.~D\nz•®V,óî^’®¯AðlËÂòXì¤ø÷:ñuÓÆñ†§Ð8šfðœ´‹w2Ñ±™D­ö1¨]ÆUç<=|ç%E¨øo.Ãú-ôÌ¿Çyî?ºd*Î?A‹¢Káˆ¹.Ùv:ûg1žtmÏ§å{ßíLOø|Û¸f\rU˜þN|Í3{ïQð~‘0ø„ƒ:×î›\">Fe²Ú†ÐüDÅÑÆæÞ§Ä¹z~	þ\"7ùüoîýÁZ@ïàþL¼õâ&BRKð\ràÔTdB\"ÈÞ'ð¦\ndGH>¨p„¢ˆ·‚fCç06%Fs\0èDg\0&eU!}'‹Ò_0V†èÆ‡OD}‚êãÇ0¾¢®žB6`N<D%š,†âö(+'®\$ïþÀÐÁ¿kû-’^«È¨+þ·B<ÀC–+*d½k¾¼%jø¯¬¶.AÏæ¯Oæ/í¥1í:óÄÆFLë+Á\rc°Å‚„(ÏTè,V<pî9ok.u©i,d`ó.:¢ˆ¡Ðü(c&ôân0í\rÒàÎ8jœx¤½€–\$Á|PoÎ»èžAò'P nœClLù¥ õôþ¯n÷q\\ûÏN(ûœõŒNt¾C€o%~X+cÈyE dQq„^”°ÑŽ÷‘’¦ ì\$¥pÔ0F¬\rbzA0‡+§ïWqºX1yq|xQ¸'1ÍíbÐ²A±Ê\r1žô1çq¼T\nzË0÷\r1úþq{¾ç0àiEDè.lî`üÎTÁ²\"ËÏüÁ’ {\r9\"Ì+RÂlDÁFëãîÆ¤4Ç\"QÅ Ä¶¤ºKòc#Â®A&Ìm'} ’=\r ´\$bL0{¯º§d¶¥·(¤>feœÓ†ãÉÄÃE`²FìÕÊðQ§‹ëµ+/¸c\n-85Ò¬H»,LNml	b@uåœVt\r‚‚J «*Å·+.B2\$æÂB9.&s-@Ð¡„”\r€V\rfÂ\re(@\"f‘#Î8Â‚p\"k´:Dt@2	D#â˜†éw.ê£à¨ÀZˆA\"6:Í6Ž¢\\hlÑlôÌÒÌíê6J5,/°ýOµ,ór m-szÏmlåf–\"¢ª‹:#çxjZNC	³ZÄJ\nÈ¾¢FD£^à¬ŠÅ&)#dVâBêFn5'Él©;±%2õEN¢ÄT@g.@˜\râø:Óñ?ET\r°±DY.­B‘ÓêÉå9zñÆ¦fâÝt]OvêÂ`¯oB.Ü¯”OèÃ®g\nt\$ãc\r.^ÃT›BUb¬xÀÞ\\qkŽ|îwDwÐ½:àóÅé¢èŽy*#¤§Š|³ƒéžh©…HÐpîã¨ˆ¤qiPé`¤É„J%cd3&ÃF @\nÄã,¤ªfÔ^ãŽ†YÀ‚&n¿Lã\ndIM9#fÓ¼1†GAÂß;êÂ«ŠÈî©Ç@O(D£ð«JÄ1ŠŸC‹xYÀ†X¬p„´®/t²@byK±É…’\nV_`¬¦ô9ÂFb	\0@š	 t\n`¦";break;case"sl":$g="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rðY”]0šŽÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†^ #!˜Ðj6Ž ¨!„ôn7‚£F“9¦<l‹IŽ†”Ù/*ÁL†QZ¨v¾¤Çc”øÒc—–MçQ Ã3Ž›àg#N\0Øe3™Nb	P€êp”@s†ƒNnæbËËÊfƒ”.ù«ÖÃèé†Pl5MBÖz67Q ¢ž>Ügâk5Û3tâÿr¡ÏD“Ñ‹(ÅPß	FSÔìU8F®—ÂÊzi6‹3ÞiŠI2Ôósy’Oõ”ÏÂ\nE.š¡¾Ššæ›/bè†;Zä4ŽáŠP ,°Â)ƒ êŽ6ˆHÂŠ°Nè!-Ãä†Bj\n‘D‚8Ê7£(è9!1 ¦î#Ãk^Ò .—È`ÖïÀÃP§œZECšA¬Ð›Ê4¦Ì(2B£Z5#Ìœ ÇÂn¢êÊ oÀè–B€Þ5Œ)L=íhÈ1-\"š2Å­“Â3²ã#‰9Î«’è»-\"pÞýÎc\$Z:!ï°Ä˜Ž€HKEQƒ\rH\rI-&Qt­éº£+(Ã¨Ü5Œr„¨-ƒë5B.›°„¯ƒZŒ9'‰Óˆ\$²ºÈÛ&#z*	BI	ˆƒxÙ5K)b©\n®P£`ØÎ.Œº(1¡nüÐÞŠbˆ˜â(ÈÉf­\ng_ŽÈ]žú àPæåFSãâ“QcÔãy6W|è´Š©õÓ0_HË“:&÷¬¨ò¸Ã¨*ŽÃ|<êa°õú:_óòë%Þ°›W‚CM;O‘xÅ1‘¢3ÉÒ —‰ã\$¢“r ¨7²Cj<³Ãpæ:ŒxPæ9ŒÖˆ@-¹ÓÕçæÚ6”xA\rÃªaJ^‹§2‹âÎLúØ†)ŠB0\\LÎÃp÷„246Ú1@ì>Z:%ò|¢›Ž£˜à2»óUf¦ê4Â–\rŠ¶Èóo@Þõ<+@íræ2Ö^€¥âl6€ŽH69ŽèÓì2jõ±‡‰»X2ŒÁèD4ƒ àáxïÙ…Í¶¡OÈÐÎ¾=àð€çCHÞ7á¨93#§T/µXÖÂHÚ82ó¨èã|þ3t8ÐúëšxÂ¢\$ˆ=›*vé2Ýx›æ<2ÖÓ	\"M\rã=|F¾*´>AMèdLGè‹&¶ød „”4sB~Ÿ{d	@‚\nHé&K,4Üö®ZÉ*M„’â`L‰ pGa†’@}àáF!4ð›‚à“›1\$GÆ8sÎF\\bƒ…*0£‡2^H˜y1dœ4ŸbÐOÙˆn>ÁÐÒ²\nC©š'á˜óÀ‚¡‹rž4ml1’#\r+š3-Ô‚“’vd IùPpD(ð¦Z}¨ìDFÞ(al/Ž)Ž9‘òLxW9\nR¤ô#Oë#‰k`æ™ò@m-€n„ÆÓˆ€&á*AB}Aì'ï–.\"Ä¦‰˜r%áPÝ`Önª°GT4›žAÓs?¡gRÈ˜±¥]Sé\"|±ƒ‚Ø:hµÍÕkRªB‹d!0šHQé=\$«03¢O×Hl‹ (%¢Ãâ\\Ã”Û%îF§“‚fq|fÉýOÊÁY²€EÁ–“ãb`avJ)eŒ’ð„Y¦q’F<9C¶V§úô,Ëñ\"(4 Ì’õN(Ñp™0ÞÏ”Úr#gÅ³‡dÈ@RT\nÊxî“g¸žá“(fJ@òoDà”)	”Ê%lsIàt§'‡2fš€PZ=Òù™'ó.qòTh°85\$¨ŒÌ¸c )è-QD<Ö(T\"~¡‚7WòžKàTªÌh•ÆöÎœR:&½|bÜ¸Ã[1SŒ6x„8\\“Ý+D‹y™Ãt%¹¹!6&pBä|_,a1\"„Ê†Ä|™_9í·#ó¨÷Ï´\0œä¥	„fÖJ_dÏ*m¿ Ém4/ŒMŠž³Ä‰Ú	Á„8>2n¡{&i¼¾4à^Vq„0ËaKÝ\"J©n©…ºá–ìÝ7Ùrƒ*o~Ü7–ößL•àŽõ7«œ	G>×XÃ•`™¯R‹Jeò·¦ø(W-ê½–n÷¯2(\\Ïåó»F4‚ëïrCÕË¿NEÁ^kÿ€páÀw¹:eDpI8Ál+_Œ3x¯Þ¿× Ùâ|6¾!i®\nèâ6®IƒªÛŽuüÁã¿Šð’Â„žä4áq	á¿7Ù~Þ|ƒïxy“4ì•‰ÏvÉ¸_!d,‰”ÈRÖÊØC	à–ñfCÊY0™,Ç~b>'/‹óÌÐá²¥\0•ÅGÚU1Ï…5ßÀ@ð×ÛúWå —›ÚßíÁB‡ý4[6eÃ¡P#š=³Pë-\$Æ‡BQÂæ”Š‘µ¸¶á3¦’FE	’#Ú­SÛeˆ_b°0À(\"—²~GË„ÿPÈ»C1é’È\\l¼*C…\0¦!ñÙ[:‹ýG–uÏCQ3	EŸõrb÷ÇaÙîß’®ÜÅLQ_5\r9vJ‰ÝáÔC*‘t¡/E£]¦cZ—:L/³ðHLæ™@Ü\0»pze¾ç|	5êÀ³…Œœ³A‡2Àlƒ‰]k¼ st“º’e@p[zŠ‹çûC’nÍ §¢.ÑCùUýÝËwrÉ‡¯=·”yLQ¶Í¶íÜª¶tÖ¿ùëéÓ;Œn„Í-È@/,IM{–žÎ%Mì5ÞÞ«¹1­Ó¾Ýrúœ×Ø&c(}›¯œÚn¾\r=³¯vø]ÜCdî››‘LÝ‚®žfï„/¯÷þÅà{žåè+Ïß,Etå²2äFô¿Ëƒw™7~l„èn‡¶’UóRãÒôýÛêX6FÑR›Ží4(ciï»šSfa“PfÈ’‡ÆÐU÷ÏÌ›×ó£¥½ªXÆXh*Xm\n‘T&ß,ñ£\$AC2ž>(ÆCÀ<ê½¬ *Ã{bo¼\\-‰ÜÖ`ü¹Ÿ]½ËìO‡ÓuZÜÿcìån”ôþO-o.v†Bð£¤ÀNäò¶£ê(o<å¯RX«mGôíÎ)gó-\nõÎxõ*Tþcïä~èdÀ€PLª ÂWâX¯\r°|f¢GÆý@Ö1€Þ^ÈœO!âåŠ,­Ëe¨î°ˆîP€3ÐOäO¦ÒTEHJî±OË°O‚Lh%FT¯¼Çîw\nð”/£ZÈïˆ›Df\rbf\rÅ±n–8‚‡\rf\0ðšåðá\rCãp2ìãTO…ó0òÔËzf0ñ\r‚Ò\nŽ7\0O>õ1é0D¯£8›PPA`à²„Ô³ÂvÐÃê Êbô10\$q5	p5	ÊT³¤}î¡0¬À‘P;Ñ+Ñ2³áˆ„7\0H'¤_äq7p‘CÛŽuq@¬¢x/cb-\$Í	¶ƒ‚øe ìßmØñŒh>Ë8gÌ±¶K\"¨É#ÌgÎÖÌ–˜QÌ¤ã4ïQÄCHfÐÌ­ã4Pb^ë‡†—¢b8r¸£vQñ´CKo&íÏ,P¥ÁÒõÈîñ¼/E¾ÒÜî-Í–EÎõ\"¬bò²0Ú‘ðý„^\r€Vë\r\nƒn 'È\"£~¦\"^É@iðS6€ª\n€Œ p/`Üâða­Áºì™(O@f òîòËR>,@ïÌÆœ)(’˜0è>÷b6Å£¬%&,ÞDJ> ÒÀò@¤.ÀÃÀæ¶’X¼+vH&Ñ-åœáH„ÛÐ‚~ø-Òê3ô¼-ø\$£UàÝ€È8\$&	€Þ6ÃŽS“æ CBBfZmþµeÜMäðÂ(\rd®ª/3E­„øŸl>Ûf.ÄxtKE57„ôLÜC.3c2ê€àà\$¤lß\0É5Å¬6.\\%~ø#ó.Å¨Ü`ÐÿMê¦bt'’Th	:ß%Oœ°\$œ€hæ³‰ž+\0¬ÄdJ%%<\r)\r7À@\nÀÒ î/²Ö¤.@Ÿ7e„;¥t\"ÞcÑø±	þ–0z,£Ó>1úŸæl #\$åTNŠ^Êˆ H³X±\0† ³È|G1<Âu==ïFDc¼?bPÓ@@CFv—iæ";break;case"sr":$g="ÐJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãðP”\\33`¦‚†h¦¡ÐE¤¢¾†Cš©\\fÑLJâ°¦‚þe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍÐñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAèBÀPÀb2£a¸às\$_ÅàTù²úI0Œ.\"uÌZîH‘™-á0ÕƒAcYXZç5åV\$Q´4«YŒiq—ÌÂc9m:¡MçQ Âv2ˆ\rÆñÀäi;M†S9”æ :q§!„éÁ:\r<ó¡„ÅËµÉ«èx­b¾˜’xš>Dšq„M«÷|];Ù´RT‰RÔ)·ãHÜ3½)CØ÷‚öµmjˆ\$í¢¥?ÆƒFÏ1EÁ¢D4æ„8±ª‘t’%L‚nú5æ8¦¤ì‘x‚&‘45-èJÌh%¬éz‚)Å¢«!I‹:Û¬ˆÐµ *úð±H¨\"ŽÖh\"|˜>‰‚r\\-q,2ž5ÏZÈû¡¬”¦¬E\$‹+\$’JòÅðz¢Å,mZHQ&EÔ‚A6”€Œ#LtU8²’i’RÚrX\$ŠTf·À´|˜^@­b1'¢ñ\"ÜÈËŠÒÈ_>\rRFÅ‘\nl¸¶ê «ÌqÌ…\"¤„ýúÐfDÅ<ï”¥YÈu¬.Î³ô´ÝV­©¤+Y22-Îè»Ë;Q(±\0ŠµZøÌeœ#Z­œqf3Œòj\n#l¥Îõ¥PŒˆ#>ó¡€MÙw(²åvÜW‚^ó\$•ýÅaE%#ÊNÄ2n³@¬ììö±*¢¾þÖ3„ÖŒ3¶Õq2J	m%¶=6¤?o;º³µq0Â”%p›CX6.J<´õtI“³é‹’	™£ƒCT\\;[Òî(”¦±DŸ Íb¹³l]ƒ¿âˆ™E,uoç	Ú^§²Þ†DHIÃ˜ªPÈž<o+o±­7]êz+)E•uÃTm»{ïµW!I´°Ö‡Ãi‘yr2—|±‹¥‰%1{Â§*\n–¡¶«¥úÆrÅº†Å±8¤É¦Ø’n5^é­¸UkÄÎ5«%Ußû0Ø:MËv#“‚7ŒÃ0Ù«Y=/5í*\rî Ú0ÃÈ@:Ã˜ê1Œnpæ3£`@6\rã<9…Ž€åé#8Ãeæ6ÀC«®aJÖ¢,r%(Aâ¦‚3TG ¸‚,‚ì¶Öº5.¥9>¹’!-m¸ˆ“ãX‡\nëuy'˜µ²\n@Éá¬\",õtcàºK'•®©Å™¬!uf5Ì” šC™×G0îÃ’í¡à8—|  <&õß`zƒ@tÀð^âÀ.!‘øàÊt@à¼2†èÈ»Õ\r!¾3# ïNht‰á|ï½\0ÖðI\r¡Àå†ØÊà/ ø€AŽÈo]§FC†ÖpCHt8±}çÅàÜZ+DÎ@º(tXE²Ž&+b\r-48ÂÈ#ª„\$òRÖfLuŽA×1r‰+ZÁGˆâ‹C šº €(€¡,šÂ¯.(ýƒ“Sj³Xa‹¯Ü™?¤'3•+™B%®;¾ßÙy.YB5DgH1®]Éœ÷­÷(æF‰T,ivaÀ¹â@ \"*E„ ²°ÿÑ+Hà(\$’òîÃ i]§I8Ë\"ÎÑÏwÁÄ:œé\$ƒo\r € ÅÇ‰ÎÌeðPã¡DaáÍ›Š'¢Ô¿1xS\n’õÖ“9ó&•Ä\nG(A«4D4X©¤´&j†~C50R¨	tM½>§xFFŒ2R‚œ³ÄXÓû‚N²ŽÈPæPÑ¼oAéÇÀßÝà A¤3‚\0¦Ô\0f9GäÄ°Œ&;Ð]¡¦=Ä	%\$k£t89ÀzXœÒMÉØL“²¶þPè¡eu,•&ÖÄxNT(@‚( ´‰OÅ>j‘á<¥³\0÷¡`\n@U™\"„À‹h-¤c\$I£&Ñb–È‹ VÁr˜µL,ªy@&ÈT¢*¢%r#+Q\ná9‘!~šY‰”bïÄ³ÉÄ‚ eÁ…îÉ ìCeSRzy¶\0š[©EB\r%o¿ÄR'Ú©H230«­¤LÇ¯b¿“!¤š‚ÉrsŸ,hÎÒ+Ø2ê\\[™SáT·!5Ppœ !b\rP•~§.\rË4F1Ò°êW%ÍÁ®ŽT¼8ã»ss%»«RLO°c\nWd`˜0hD­`5ìªRË*2JØV‰\n#§>˜¤BòAÕ^†f”˜	¶ç1f<îÆ‰6qUæ#•¡÷\"%Ð¸”Ü¢Z	 žµDÉ™X‡Ee.y(b\nÙ§“üÃHz (!Ñ àü³ØS§,1pÈæðò[Cˆ¥ØNy™+a<²gÊnIøuq,*½dž+âlÇg*mËykª5¨¶FBí–÷LMÄÊÝ&K^øK3Þ³]êgV4‹|Ò—æI[E.Nd ”XM’®×ÊÚœ“˜3KUZý'˜ã%\rþ‰©êx­D+±±ú(¨vükeÏùt9†\\X¬€“bRtaÃËµ‰] ¼o£e¬×¾ÿBBÃ€¶õÎÅÍNøFÄè‹AR‘\nnMò˜ª¾Uæµ¸[ŽÒÄÀýÏ0\\\\Ç\nË¤ï‡AsÄª_ž|Yv¶ü5Œ–ÉnãºSp’n ¸ÊÚ|?“‘'*³§,àYhÛóœg·ó)²¼ØÚyÉ©ÓsªçÜNÚÒP¸¼Ñ§üç’^LŸyG@*¼¬—Z~º0ß:ä®°u>RázQ¡à½i!uÎ×»gíÝ‹¥Õ4X\n	•òÀQîHÉ,*h…Ñ»æj­^9sTE:ª!NOÈÈ‰¸^0¶–ë…<N¿Y5Š_!ç¡JF9í¡'!b„˜ô£Cr³¦‚›¼o¨gNœh	rQÃUyöÇv–Þ5V7¼Ë\"ÇC++‘g	ˆr§Ç?;Ñ\n²tª¯fiKÊI¡sVË‚O±„£Ì¼»Ôðú'±Fã#þL¹	ºš\r?ºSñ®¢!¿9µË±:iŸ4èÇfC@ýbÖÿ¥þ…P\0001ä4ÏøÎ¢ÆÿïÎhd«F®ýŒT¸çI\0ì\nTCX«\0#:Rh”«ŒM‰ª±J”©‚ì”eb¾0Xb›§Yï«Ši‚HPTJXBÍ>«hF\"e\0000éD°º¤ÄÔËêÔ&.D­8WKF—ÃÚfCä¸‚rNA 3œU‹â¨OÌþý,rþ²¸Ì#¬2èÍÖÁp8Å°Â®¤ÂLj„áLeb¬é¶Ãç#H?-m®1GÙ¥èUNa\ræ\$jÐý\0OÕ¢×¨Jh¥Éè&°‰âÒ©Þ\\ëî›\$ˆ+®FZb,L#äèN0üîbãŽÆäjr¯Öë‘P«‚­HíòŽe1e‘kíºfhV®[n\rN6é#<+˜\$`ž+ðÄm3×+{ð‹/Çº×ƒÖèÐì&írÄqhDÊ°>ë¼*Š°hÌ&¬¨Ù¬d3îÎ>/¸ò†šLB|¦vÖt´ñê*ñîb…ép”Õ	Y‚¯‡8cñL\\&žÿï&W d©~-©HÜÏ’Ã¢,Eq¸>+±ÂHÕä5FiÍ5ÐÿÍjØ«’ªåÈö¥´¾„|üñ:5æšpd2ryÍÜGQA(g/	¨ÝM'#ò”6’jÜ(<pÀ1‘®Ä2„-‘|+ò¯=R¼2rÀ¾P#)±ÖÖD\$>/õ*ÂŠÝ,VøLµ.Eb`±é”Dš@¤ˆÙH÷Ò8#duiR>®ø&&\$¹+µ(ÐS¥u'Ð,pó2sÒ˜[Ñ13&ócî†gK¼dïxÔmfXiØÇÇZFüpÕ-H=¦	 f{6-±6cÎølzÖcñ'\$Xå\"ÚJ¸ºëŠvs!2È–âžëˆ!7s>š“•2ÒfñrÉ5RÚÑâŸ.MÖW£â5ÓºÎ“:Ñ!r…8ó;r-Š³âz¾XªFXp¤ÀºÍ~Ù\rƒ9sÐxÍ€ÙRÅ(Ç?\"%@Ó3ÓÛ43V>\"?M”\$‘#\npiwAÄ\r%\rÀ%®½mÝ<Au?‘±+¤µ\0tA@3±+¤cCëy=pï-a ®y3ðbÛs(*Òk¤Z×äÆ*DßËI7èDîÆ0œQ²à4ƒ l~åíì=±õHÐóI\r×HOXätœ™®úI\rîE²úYô¶ìØÀÔž=.fâ±âkñJ4Êø2BH,_MNf.nÈå´Ìü¥˜þä4Îügp\r€VÀô[ ³ˆBJš.ó\"3.½¡(@Œ®i¨r­I \rË6\n€Œ pÊi@@Îë“)t¬Ÿå–ãÎt˜ŸËW/CÍH•[K, Œ¨\"ld§n¦Ä´32.Z€›SàÌ-~%µC²~e”<Ä	Fõ¤@ÆN¥Y!zÆEÏ1wPéGR 1'†ˆá·MÐBZ­…\\KP/\"`ør%IN\"Pš ¬Ó4'NÒýS¾P4Rêõé\"õìæ2áâ’4É]_¬íTšTHrJÎý_ì_2a°\r_ÂN	v11Tp#àö)&’ANŽ\rÈbQ¶1s\nÆoXÄWÃ@œâHEp;ìH5K±\nseJjrK³3ƒ)!Ë‚@«”3çXí°å]†.Vàà†èt\r+ÐÏ Ê] ¬\r Êà\nÀÂ`ê ÛGŠ¹cšm†r*Ê\\ÉçËó†ôqF)Õò>Í¤ÒGD*ö–„U›W%œ=©AæåN1iÔv6ðL,4¶4à†wÃ¬8'Ÿiö¢ÏEÚ96®sðGí¶%¿å¸mµËe@âgB¢æ";break;case"ta":$g="àW* øiÀ¯FÁ\\Hd_†«•Ðô+ÁBQpÌÌ 9‚¢Ðt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆ¯CˆÈf4†ãÍ~ùL›âg²Éù”Úp:E5ûe&­Ö@.•î¬£ƒËqu­¢»ƒW[•è¬\"¿+@ñm´î\0µ«,-ô­Ò»[Ü×‹&ó¨€Ða;Dãx€àr4&Ã)œÊs<´!„éâ:\r?¡„Äö8\nRl‰¬Êüž¬Î[zR.ì<›ªË\nú¤8N\"ÀÑ0íêä†AN¬*ÚÃ…q`½Ã	\no\0Ò7ð2k,îSD)Y¤,«:Ò„)\rkfä¸.b¬á:®C• ÁlJ¾ä”ÂNr\$ƒÂÅ¢¯‘)2¬ª0©\n¶Ëq\$&‚ í¹±*A\$€:S®·ºPz±Çik\0Ò¸Ü9#xÜ£ ÊU-¬P¼	J8“\r,suY©ËÔBæ¸Ú\"¨\"+I\\Š•Ô²#6Æî|\"Ü¢Êµ(„+är\0Ü7¨¼CUÄðRl·,ÊA\\«'\rí{E­H_*Ñ4èØ©ðP)ŽDXÕÒ\$B\0Tº2º&4\ršR¾BÕ\$žÏ.k{¡Îk=8ÞFá@Ž2ãhËfµN=ÂÞ®}Îß%t\\)Äý“YcÈæû¶‚®«Š±2§,5Í–2ŽOåƒSHr­OTÙe\n£ž!ƒVHýrC\nRR¥BÍ„Áä54BÆåhŽ5)Õ–¼1+%’\\à«I‘‘À•B¤I’qi)ôSGZ¸0‹m—·0¥‡oMór•3_5LCmDŠa¤RË«†Ô‚SÉúÒ\"¾X¬ÃW©JwK¹šŒPn)Ô”¼Úæû§¢5†‘.:ºõ_opÌ\\\\Ðm6È+¾Êá(ÉU¢òÜÂXÙ_°Æ[Pë2BmªmŠF®¦Õ‚0ê7c¤û=«üdÙU)ÝHP Œã8äö¾Ýžá&ÑýZ€auŠ(¦Î‘/KTwýK,ó‰~¯¦Ûš#äÊrûµnöš!pD1€Ä/²Æ6ÒfÒjóéEÊ^-¨u£¨Ø6>/óØcÜŠˆL)¿26dnJøpëO¾'ÎÛ²!Å­fšËèf/½º\$—Ø”ài¡q¥¾5õ\"ÙÞò@W®\r»BðS•ù±fô6ØTæ\\!Hqèa9´&â^ƒà`ïÑŸ+4ka2…	¸˜Cw>\\›¥.ÏÑ !&èÕ  î¨·½¨N¤RÖ4q]Ü6ç²©ÞSß\"I“ð’iÃxrŒB&ä‰cb_Èù~Á‘\\àaÕ‡qª¶”/	 ¹tkŒˆ³	ó¥‰eÉB—\"«Sw)¥2?\"ž¾CbÍGlî†~xfÁ±†S€gËÉoKe%@ÞyCkþ ×‡0êÃïa™û†ÑXs‡Ä9K°ÂÃ\n+IÎ†ÔVO¸(`¤¯0¦‚1H6fDD\$vôÝZø7¤Ò©„p¸S”lƒÎƒ¤èþècR&G«M9&”Íl¯L®;¨v\$a\ng)ÁÒ/e†N(u	‹°ÀÄ +…»X-­BrèŒ>W'<·ÀYä Arºžª¾|6×¦ÑHG~m­ïPCbšœ‡0ï\\¸eÀ4»ðÉJAàa;Îü3ÐD t\0è‚ðïUÁqEšÁ¹ˆèâÁxe\rÕ…<Ö\$øŸx\"!È÷JœÏûþ\r`ˆFò„i«t€¼0ƒâþ|qù\rî\\ù	rÏi‡™ˆKš¸ƒ¥“ÔeÎrh\"\nÄd‰¸©Æ…K!sA¥ð›6gA>IEAñ‰ª—àQP“Ðs7b¹5–‚P ´D´\0,¼³TÑ7.V6œe]&ÜyÖvV;å–O,´Z2Þäß3Ûa—(©[£‘Ú‹%žrÅ#?šÜ}*-òº7&ß¢˜Œ€jJÆ¨°[ì±\0UÓÜÞ›…àù0žÑz%%«Ò½)=)¸KÝÔÉÖ±‹òw%êòŠZ„y„¤ü5·µjßõc?Ô`\n	\$|<À@K—<–-ë~ƒ¿!Ô÷Ø°Ì—h !’­Ó³óX\0c(lxøã\nx{Ž¼‘d·ÏV¡Q\n<)…D(Ó—!¯µ9^e—èØÐÄ+Ò.šÏ¹Ôc©=¡sÀ³ÑøgÛ?iø3ÎC“ÁOØž¢†WbzC-¸pÑØbS(ñ3ý\rÒð¡G/RƒvN\0‚êþÏUJÁRà?ç.c„ršxÛÒ@Ä•&4Ð³¦æo»nBL¥aßø«xNT(@‚(\n× €\"P˜v:“Èý—*=_Ê£ÍGŠE3-VÜkYšFDI¤	LlsÛVé6ìÝ¶TöR”\0Ï,;Lå´~o0ŠÞ@Êƒö±aØ0†ÌhWÒ‹zA÷Õ)GÈÔŒ®D‹š¯mÆ›?q)q_&8C´L±³ òh‘J{3Ž*Í¯3ëã\\i)\$ÉíyR‹µâû6ÝY–g>ˆUÒ¤3ñ ærªC™‘ykiÈõBÂ®ÜQç¼›1—CÉJõÊ\"3œò¸‡#RFƒ¼iI£{ƒJMLçA9—\$T~‘ÜºyuHtúÒ…ïvDZCy\"ŽÒzw½ÐÇ­D<ìÉÐ€iL_Ñï`Ä\nƒ\"pJ|'yj+,þ‡@ë6ÈÙðÀÄFð@ušÎ8¡œ4}p-…fvuýy\"îÆ%\r¾\\ÀuÎ?LC\n[Ýß‡0ÐÈ¡¼&ÚÚÛm{OÒcó‚E¤=P×hp›)†SØìC(dÝ9ÄÉ8ŸÁ\rN:¾òÖmAÒîŽD`Ý¿%c—\naŒ4`Ã7\$Ê]Ð†‡v7ÊM—œ}«faÒÎ:ˆdçndÿí`»ÊÅÊ„(ðËX:‰Ð\rºæ†#FNn’(Í/¨‘îÂ¤¤íÏæWí\\Aã¨ágNÀ¤Œ,iƒ…øé.ºçVtˆ  ð`Ýä°ÚZ@ïTgKV}¤ÐDKº¿ˆhCG¡Ö\\ÊVsD¤bÆ„&¨Wn'àŒŽ)rŽb¾M¤,€°ž²Ð„ïjb.°Ìð®ùÎœÍÆTPoL£HBfdÚNÐ¤ˆBå–¿Ä-ãìX„D€V‰ ACŒs¨¶#g/ð7'9.ž¸ðzîÒÝ¤énz%î‘ÎèõäèÄ4^o€ƒ¡™g;MžžˆC±<lñ@k±ÀÄuÉÐëPhòkNqn¢¼îŽdKÔòƒ‘ÍÑ‰íbzp>q\rÑ|Á*\"\$ÜŽ ç±7Q:½a\\¿fzf(¦þèQ\$–0[ïÄºJMñ*ÿÐáq¤·QªAH‹‘>é\\I\nQ°xÆ×îCÑj“Ñ3±s„½›%;ã®m’IH@˜ÔpâB0…}	èá‚¸–ˆFµÂ‚(b‹R4Î\rµêU#Ê¢Š\0'òFÑÀRû1êåW5HÕNîq!nEÄ«fr‰Ú“ÄluM¬[rš¾oäàI\$ñ–mz:«:eŽ‚â–ë„hâŽ­æîŽähŠ&Ãè'\nbÎ¦QúUgÍ™%ä¼l¯b¼’·Ž#Lµ(€Cf% PcØ”Æ5¤ë „…‘ÆAD,å%²ªt\nFXGÜíh… Ï¥0}Nr2Þ~sÑ­3Ð”ÃÐk3s3J+3’*¬ØÆ·€j’l´ç óT/£€àÒç,Ó+6±å‘éñ7Hdþêi	\nU/…}&ò53ó“ó|…©í+©8RQ.:±dB”ÜjfäGŽÁ=ätt¥&R¤àtL\0¥Â~ÞÍðßM¼rP¹.„Fò¼z¢Þá|9³ÿðˆEi@­¶¹ÊÚ“Ï,&nŽ†´’H…‘OB¦\0üÀÈ¨O9¨_9ól…¤€Ó¨oÙÐL…­Îñt8¨@@\n€ò\rÙOøü“³\0}­ÔzF)ÍË\rL»<Q§1.S(äòï5Ó‹DÑìé´‡îÆUG¥<Æ“H4@Õˆ%8rq9TNçÔRå´¨ç§;0ì‡ÒÑK“£KÔžåT£òì”ÉK0G:77´Ú¸TÃN4Ç8îÍ1ó;Lð:à¨Ç?l,ûSITÓ;´›;èJ’”(f•PZíS¹I“q:tòu25’ôéTGK³­ScZhðº÷4K4–‹&ù-•.’µW'e*bâ!L×\0tuT(aJ¯ìs1·@j+.éðžÉÏCG§TíaIsQh7¦féuq(Q#YUyNaS‡4i‚9±Ä%5§!PY\$î¸±OQ.‹Tt×T³7\\´µ‘eWgÃNµÙNór¥“\\Í[^n²ƒôÍÑ4ó?M•Þ·#|³Ã‹8ní4s_èY(e‚5´÷³Eð\$WL)\$&—*o4Ó/`±ÑúNpúfÆ ¬I‚rí|\n€‚·GK®ö&„A°S”ŒÌí\\á–i¬f`üq°[CVÀ67\\óè¶iÙÝhÐ¡ZÔty“Úç®u•sÉãN`QeàƒF ²\n\0Š·kY/éfñ±g(«+vz´ªZimU_‘6!<ðÍÓiÖä¥6™FÑskt\rb“¶ríjm’ºAFá%Õ·pYõÝ5w^5}I5×MUñSV8WDP5L³!RÕdSÃK÷A^3áU(‡“·>pÆˆO“¦N P£Â²pè“-·)u56ñ7iÃz ÆwJósœ ·ƒOx‘ûvµÿv÷“whæìõ`W7NÓ½CzGGz†LLŠ4—s{™D7äÈ×É=}7—{U+v(ÒJD?SG¸8®%/×q/¶¢ø[uTrþEê,õ¿?OzîkðX\"ÊTÀPÖBêkU#‡3'5YƒwÕcu¡rÕ‹ƒƒgƒÎ{rT·Q•2^¶ØMUŽ{`7MQu1„Ó¾uÇ`vL÷^°*q11ˆš’÷…×X}8tÏøzØiØJQ0)Ø†Þ˜‹‰°ïvL›2LŒé1j—\rRUAG—7…˜q|ÉEU¯ŒMé~×aŠømyõò•öØØ…u²nW½Q¸ÑŒíŠlÄÃ1Q}ˆ7ìÂ‡±t¸ÐþŠÂ~54iw°Ÿ„3oŒó_Yñy\$Ð8Ü™xEŽy\r‹Ö¬Öó“·×ˆðB—·†¸žþ0r¥¶íøÉwëÝ”w=„^¥…è“‘Ñ8òÐµï{ù2ç0q˜t1Y‡^˜™‘˜á`™/DµIk˜5Ñi9_˜±–™™puýŽÈsuùAšy2‡N~Ýx·=JSmnžÐÁ2Ÿ—9-8˜Zº…HS%÷¹èî¦3žøxÍUp¨ÐòpôðŸžºKÍ;YÑ”Y«`ÓV	\nrý¯¤}u›XPi“\$q®âzòŠì±	vÌu„OðD1øº+š\$ñN‡,ñ­gw;IÅ1à·u±JXß¦Š_¦×Z.9‘WÂéÎô'óOÔj4d-@EpŸG;”ºe_ÒˆXDW÷ZIQÏ`7)2xTÀ­µ¼n´Ÿ§™£{zÃ}õ] µDkÅç¬ñ¯!2~eš\r€VÈ@Ò`Ö•\r©OÐÆƒâ—\r Ì—k+ÀŒ=cÄ\r¯±`Ä±-\n ¨ÀZ\0Ae›E‚½¥Øê…¨Ï+WóB1€aÊìŽ7³¥l2%%ïŽY{7ZÕi×%KfÀ– ¼ZFÍCµuþÁû]yöº²W÷…oYƒç‰(+[šX¦rVHAë!£¦û±38À—-¥”ö`ØÏDöxuU1Ö±±¬¸³2-¥w0!‰—1„*Kg<•ejù`rd¸œ‚ßRûºÄ2qRåŒˆRÿ|Ç®	Ed[ÁŠ°Èâ<Cê?¸hÇ½b/¾A¸§ºk[oë¹>à8©—[…“	’ äuçú>â7|INö .œjš¥Äy­µ¹ž¤ç<†­ïa¢¹a¯©<°§ž¶7œ:6è[„O¢·+9\0¨ð#à;ãÂ&È\0Þ5(øªÃ•5ÃÑÃÖšAÅ@u\nèRóL,:¼Ë¼‘Ö%k†xËô ×òËw\$X•§‡\rpi]R{tlE<üååòƒìÓG~øØýÌ±&§î=\rúø¢\0¬\r ÊàïÀÆ ê\r³9—sK‚öü'àŸË	¬ø¯Cam³&4âTƒ2q£q™ã±9™Ø'=\0P\nœNví©èÖD:ãd”÷«%pfz¥,÷ae¯Æ&êÂ—ÚN3)AÇÅògØk\rØ} •œ´ÕÒùKbÒhÞŽ\0º–ˆ¾[o<Û‹öüàDcsn§½c`	\0@š	 t\n`¦";break;case"th":$g="à\\! ˆMÀ¹@À0tD\0†Â \nX:&\0§€*à\n8Þ\0­	EÃ30‚/\0ZB (^\0µAàK…2\0ª•À&«‰bâ8¸KGàn‚ŒÄà	I”?J\\£)«Šbå.˜®)ˆ\\ò—S§®\"•¼s\0CÙWJ¤¶_6\\+eV¸6r¸JÃ©5kÒá´]ë³8õÄ@%9«9ªæ4·®fv2° #!˜Ðj6Ž5˜Æ:ïi\\ (µzÊ³y¾W eÂj‡\0MLrS«‚{q\0¼×§Ú|\\Iq	¾në[­Rã|¸”é¦›©ž7;ZÁá4	=j„¸´Þ.óùê°Y7Dƒ	ØÊ 7Ä‘¤ìi6LæS˜€èù£€È0Žxè4\r/èè0ŒOËÚ¶í‘p—²\0@«-±p¢BP¤,ã»JQpXD1’™«jCb¹2ÂÎ±;èó¤…—\$3€¸\$›Ú4Ã<3«°ô/¬m£Jæ¹î‹®®å†á'ê6¯¹DÚ²Š6ªÉ@»•)[t‡¯ÌÀÁ+.Ú~¶ Êñs0/íŠpé#\r“Rµ'éL[IÎ“Ê•EhD)1q7±óŒhæ§ Þ\rlŸ\n(‹ÂE¤£9ÁîÂÀ¨*P“³>—t\\›8Ò*/¨ÔTI9—Ü&€‹35 khð§¤Ë_ÈñÒH\"U¹³Œ°×Fò™q8Åã·.§Îe|€Õö’&“l UPÛIú¶ž¦sLìJ«/\$ý'§¥Ûa·òÊæ‘jYfIŠŠ²¿Û±ÅaY93dÅ\\!W™qJC”Mc=a6¥¬ïT	Ü^RÛQShžÑ+;¤ŸÄ…íF«ù!pYÞë›.øêá^°Óƒ,EŠªg+^ñ;ybãFbíÓ·D©“r­¦iûÃD£‹ËmU2Å>ÇÔQ£·¨°6ZP‹ê§wÎZ¼Dð¸7‹Oa6%>žÔNÞÍZamãŒ‰3•\r%×ös`9ûŽ¬¬0ãÂäS¸\"Ç×Väã\r'ó‰B¬ MŠ»JYzé;hÓ¥lïiû³Pë2ÆP¶ÙMÍž¹¼øÚO\nËÑ»pá)È;©êwQ'³Š·poÖrh^Y.QV+³²»·#`PŒ:ƒcý?!\0æ1Œ#wi“­\\:Ð\nbˆ™mI+‚wÑd°ãm£äµ›ý’w8%¦»Eª‘ý•  ü1½ëÆ¾è	«o‡…jœ\"ºÏ‘c\"oÍ©ª‰_è‡zAŒ4PÚJËLLG–	ÁX.‚œ‚Á…A;¶³UÊáLP%Y(2ÖÜ°˜kmé	<6Wá{›;ìòœ6œÖ[*ÜOmÁJb³\nœh.Áè0ÞÒÃ;Bà(6@äAê!È÷†ðÌƒb<¨=3Â ]Ó2ôdFä*óåÃpyÔ70êÃüa™æ\0ØÃ:<`°ÿ(äC8aG€‚E‚VêQàu@  9‚“ŠsZI`I¸¢ÖØS\nA»Rà”‘yÛ6±í–XtÅ%b-båö\"É·>väÊSRQïµÇQ1s¥¾\08ÈV»Õ*bå`)Ç ÒÃr‚–®‘6ÂÚ2‚˜	 œªÆ|Ç!f®Z7%¿1%ÂÜR*Ü¬ÐÂÐ(r>s¼9‡pÞ›¨eÀ4ÅÀÈ\0<„¢.`zƒ@tÀð^è€.!’HàÊt÷à¼2†ê8,u™ôx<ðä~Ã¥è5ê†°D‚Hmä6ÑÐèxaÊ\\STÛ©ÿ§¡„5žðÒŽÙÊ³¾jj©NÅUƒ)#÷&tÐ8²˜éô4¡ê‡NÁÇ˜ÇÅ1+ZNJ!n'bw	\0 \n (\0PbJ‚BýD»cÆ@\npVÍfœ¢ªUÊÌJ–EB®ùP“ês~<Î¸€:2º¡‹R/is]ÒWÂXS²X*ªuÒØ]Ž°Lh‹*Ã¶ñ¦ÒÜ›‰©\$C4–ß¥º—+\$’‡“Ò in§Æ¤:;PPAý‹Ä:ŸÊƒo\r € ÑHÅ<=Ž?Ücýrg™ûAö*7Êö\\+MP…Pý¹ò¶WIíT)\"à»k]Ê‚&vÎ¾ºu¸%›µµQgHP‚ÔDÑoywfÉPÚ^sO3tj%íIÇ¢Žëk.DÖž{~õ&ŠôLB@ÄC;Ü{À€3ƒÞ}á F\n•Õê·PÓL§½H¨ø²èÝ;Œuzî}<©ÒfÇˆ‹=.q%’ãc;–W ('„à@B€D!P\"åL¬(L¹qÉ£¤‹	š,Kp£A™Xg =³\"vtNiÁE77«RçTÞºq¯ÐÜ«µ”¯[äRoá2†`Âó*@v!²æ•™§5•b”8\"áð[e» J(G‹†pè/byuRÁ³²'ªÛ`K„±®<˜–0¸‰JòBÒÇcl-•Sð ýwö%åK?&ë‰°©ÖÔQ—¬J^¹c²¡ëMÖ2scíc¿²§)nq	°j(Ud’|ãCVc&¯‡\r+bZ%©)B”FHOí².dapÃ×]­;°­»„ý\\«¢—‡©Å†²W?~È.ý1è­©KE¸b3)Ã+(¡L¦²s«O\na¤=Pîp’\\šfŸÆC\"W7\0)éÄéK9¶\n£É¶El ôâ›W Ü‡ëæ¤#›H>}tˆq€Ò`ÿôO›ËY¾\\ü§šóÖ­g^ó¦1Ô/f—OÐ0ÈµN§\0µžÀvÜ™äN“„g\n%\\E ¬¡Dêï»~Ï©%©ŠÜWDIØð¹;½NëÁÕûp9jù’áÜS[ˆ¼£d5®Iú/¼åqmi«9¹…Á†u Ö;ØxUŠ£`¹ú«@g¯„Í¼:9G[œÊ—Ù,VÌŽ\0¼Ì{¤J”º¦[Œ„¬fß0“Ùò%´¨#°aÛ¯µIígòç¨ªß8½½Áì(?bcÏ1æ=ª™ÇñQ©¥cß-¿»…<ÜçGoê7·‹õëÿÌHÊ£á¨ÏŒßè	ŒnÇk¢àæ+'ÖøGÚâÄ¨2e8Lªþw£WlSd`,äöÏ„~†ŠÜË`ãAé~oeò_c¾ï`® ÄÇì‚ÅŒ\\áBÜû¦BPF9C(é-,lÙ°\"B‡GjÄE¥¼_CšŒ©†..²ûÇH½Ap6Œè^…YÅX'â@€IÆá…’~Fö&h€öD£µ¤Q,4“‰¦vn†m°\"Ùƒ¶ÙÏôÚ¬B\$4üË8<-A\rL\rå–S\"^1î4e\r†ö|,ÙðöæFDˆ%ˆpÚ™CŠ;pÂ*b·@5m\$ƒONèQ0(ˆçô™láfýÃNÎî³ªžÚìôˆî!\nm<E«\"Õðž‡Å:B„ìpÄø+fŠB³,ù1zHJ“k<ÎoóhaÏ9CZì‡üêHnªén®éÑ‘¶†±´L.°ûŽŒYN**ìûQŽY`S,Îˆæ'ù†ø|ñ2ÿq¨è‘LEºñhXëÑ»eúÛh	­’×Î0T‘÷X±üìñ°„òb²r‡ÒÈ“!®¼„D‚ñØDEB¡ˆš„rNþoM#ò9\$ŽlúDLª.¢:H8È# åÊ˜ÕïZãåóIˆ+±	‘ªÔ\"ú°i8W/œ%ï nÃ¶ølþ‹*þËñ\$í©ÈÎâ8Îæ“‘ñ\rÒ#/¸íÐ0Èò ½oÁ*î o’+ò{&rÓ+ï¸Éäþ1ñ’e,ñ¼8Ð•ïÄ¿É’˜2&ƒkæ'i¬;ÍÐýÑÎ}äøS®xk%5‘W25 ÅXh®Ü­Gb!Kô“QNØƒÃ2æŠé‚æSñ˜2‰fø.Q:oÏÜçxÍ\$DÍ“&ì\r¶ìEC+²€íïÝ/RÄÉg®ä1A'Â¿ÅÉfEø¬ó!7%ÍÅ€~„ã)2q.Q¬jÎÑ\0çÈa;2Q2|;®.”ÛFÏ.ÅYËnçæ¸oo<rï@ôO<²Í%r\$9³ê-“ï8Sµ;ñ«'R-.³Âó¥“@#?Õ/ÓÛA2â´\r.†Ç>”\"c=³ýC-Ú[“ñ'îÖQ‘n‡£¢6Ž³ÐrÔF¥´'roq8<#Q4Rÿ	CÂPÀ\nCÒˆÅ%ð5?p/”€’T‡.;”+;Ò.hÔI4„¢ÔˆIô 8Q1?’ÑI´(ìÔ,€`@y`ÜåêG³º‚Æ>k¢ È¨¸Û3®4ÉLÉ¡NOOM€ßMÔàäÐã1šUÄ)e¶b.	GLÖæiš¹Š:4®Ù£&u¹´Ê=ô!4#K‘IRµS2ï·KæÁJS‰˜µRõ\"9FìµKMH¨AUU-R3#Õ7Hóçf`U•=TŒTÒÑWÐ¡P0c/µ5KSÎ8Ñ&9B·•\0 O?XÕ¦U°bõ&<µªªVäÈ\nƒêïU²S'ÕÄð\n/\\Ô½VTÔ/&uÓ\\•×W3ÙY“ÝUôLáLUæð5¬4àA_ê.[OþY\r3D†\0U[ÏY\\\r«_4	.uû5¸Vu¾°’-X‘½=tæõ	bÃ(v;\0		Þ\r(Ò–Õï@´«8µz]ÊŠ`kÛ*mÒM×GLë|DM1BG,tpJ6fnˆKE!	:'t[hføm‚²ùïÛBQQðþ§‰+v¶i¶Œþ‰@ŠÀØk¸\r Æ\rlŒâœõ9íÎÃ‚V+\0àÚ©à\0Ä¨É¢\n ¨ÀZ\0AQê€G€Îý¢8Ò­T,š+¯ªñbY=Í	Mh6po¨Ì<Tvˆbf°à	·ÀòÐ\"î'etcžC‚º†Fõn\$N\\\$¿b/Ãn“*ŽñEÃm£œÌÉÏ[ÍBuÝöèÚ´\n±æF†6æUQ0v@˜\rê'q¡zIžãÞ@daGøî¾U¹81uÑ/ªìŠÈèz„\n’Í\r9É<¤òÛdóhÖ©i2³s—Ý!wÂÇhÑQY—5²UW‘\n‡ ?ƒÖ=£ßo«´\ràáHI ä©ÿ}®‡Kfød3äYghrKçrdÀ+·þiñ¿“m#÷\$OJýÑÚE±ÞwQÅ—LÎÆÀw8J““S„nŸw¬ãEPbãJÖÐ’øB@Š.\r-&ä€Ên ¬\r Êà\nÀÂ`ê Û:1[CGb†GèUÂzÓ®Ï¸ÔBsN”8, dÅEs·~1£¶_#¦Y'eÆ+7âI¢¦U%DpR@×˜PDDYÍ_#…PciÅi`†‹˜ˆ¨iãˆÈÃ‚@@>ø›VµV0IçFR‚»”wDbû6‡¢à;y:.gf	\0@š	 t\n`¦";break;case"tr":$g="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùœ@\nFC1 Ôl7ASv*|%4š F`(¨a1\râ	!®Ã^¦2Q×|%˜O3ã¥ÐßvMóÃA†\\ 7\\Îó´ÀÎe9ˆ—3©ÀÈa:sFƒNdépÉð'˜éÐ«ÖËtFKÅèÝ!¦vtÓ	´@e×ñÐ#>¿±ÇœÍæã‘„×ßßÌ ¢œ‚%Ö%M†Ã	º™:ž»§I÷r…?ÏÀÌF˜ù¸Ò 5ö»”	ý\"iñh`tÊtëTù;©ðÆ¡Ž‹Àä£î£òŒ#’Ý#Cd<CkºëLºPX9ã`Ò*˜#Œ£z˜:A\"cJÐÁ¤V‘:ƒ¨Ü:©í|\0ú@eˆ(A£{¸\nÉx@·ŒPt#½ƒJÊI‹ÞÆ¼…Œ0Èæ2˜e;0Ž	óX£ÐæÐÁÂ:49/rð6¯\nˆÊ©ÉDøèöAëŠpž*J¢Ë9ÁÂÌœøAe‹\\Œ‰³:4%<¸2Ä´#9cZ’6ðk_5Œ­Ã¦ ¹ SI,½c’è#®¢‚¶JƒÄùCš|úOµR†ðÆC`ê©Ž«èòÜAíóO;3Pk{*\nbˆ˜øDÉÕr'³p´æ5„ä£2È5¸îªØ2+èúMÓ„÷:¤òE@Ü3Ôår\\Ð°A³ØëH6å#-ÏWGIJVÛ£ÐÜ³!#[O‰òË¨x.:®W}myAÉuì¸HÀUËsÕ´p6EKA­Þ3ÐðÜ2¤æŸ\rxRÌ*\rëœ,7!d9Æƒ09ŒÎÐ@¹èæ3C–r0Œã\nX–QHfÐ…˜R“Ä˜äƒA\0P!ŠbŒ„S€åŽ¡pAHCjxÐnmD’;c\nN!8[Ï]¢òÎa™.’ãÊ2'É=™yŽ­ðç3zf6ƒ®6/ Ì˜³C.ã£JËÀË¯¨&Œ3<(æ;¤´(Ê<`Ê2mAâ.4C(Ì„C@è:Ð^Žþ(\\0Œš’<\$£8^˜ùãÃôƒ9axE`ŽL¸éÞë‹º5„Að’6ŽÐÜ:xÂ(ŒÌN4\rô+6‚9ÍÒÂŽön˜Žœ2vœJntÉÀß‡Cž@Ñò\r„ùÂ%\"NOç(eÔ‰†àHYY\n (0œÐA#¤VÈ§Å:¡=çð§˜TòUQŽ#ÍpøÚ‡ŒBþ%ŒX˜70•QÜd‡Ìˆ(øÉ+ƒp €&9W.@Ê*é#Ð„÷2@ä´Õy'	\$<’'€Ò¡L‰…JäpÑšP@îCˆu‚À€3\$L´^ItáÐ49€Æ\\’¼e3.¤Ë²ÑaÉ±x%áh\0žÂ¡²#ä¤CÀò{ÕQlJ\$š™÷ÚÉ³s#L­ì¸ØªCÈgFLIa-,èOœ\r<á¸“˜¢xÎë:|¡½ä2BlC8 X«3ZH¸F\ntî¨Xl	)…~ñ²78¢<ÅŠC€;¡…ß ÓÌµÐlI'q=”,‚xNT(@‚+^	ÍÝ7ÞjÌ  ‰½u'Â@{¸)œˆ\"P˜gDêšw	à ¥Ô÷=Íl2Ï –Ž[\$¨ía\"wsD‰ñn@À*+PêÎ¤2egI„; ÂvŒ(v-‘©‘@\0Ú“‘é\",æÁã¦hûLžm\"TÐ#yôdê–Ö²)á™‘G½{ŸBN½_»R§œˆP ÈjzB©¥\r+­dýaâÝ_ÁŠ!²Ên/ ÐUq	ðÖ^ØDq¾(¸±xšàmOµ¤E7\\Ô4§¼˜ùHsVƒE#î~SÄ¡bIËyz0f¡Íº„´æúD.S\\ê— Ñ0p'GL)©ÊÍdEÕ5º”¾³XLé¥5±\0ÞkèÞ„ \"Ûv¿á\néN)ðãÜs€Të#¡š¶OTèÂE‹ŸšsUQX¦\0i¤…ºì­¬q X±G*©Ÿ4¢™s0¼á4¥˜mKLü7RÁ<î7ÅèKÑ³uG²'%æuhu’ÉA*( ^UÔRØKê!E<ƒ€ 0^\0{\$ñ\"·¤½’ÉlfQbmÀÚú¡pq…ÁSÄà!ÒcUÁp	\nxCaabß¼3u)Xì?D°~#¡–â‹Ð!ðÕÑNEK ÖI….¤E¬'‹Dý:ÆË\räL:áTN 69:Qe¥†>AÆ‡È8\\˜²RH¨€˜XÜÈ‰I&¤d‘Ö}Óu%äÀ{„	8SFHÓ!x¢Ã(b\"§³Â¢}×á>éægšPpH4^þ¯0æEÜŠ8DuŸyŠttÄš¥’’îÁEð*&»h/\n‰µ®xfU¨9…#\"ð73ã·‰êÆ¼PQFëÍ“f‹ž¾„[<Ô8^¸ÈûÚ‹þ¿ó´äl†Õ£è6†ó6½nŸKñ<Å6´•\"ÙÊW’øˆÖõ†û¿|¦½Çsws·ŒQmu×¶qõ¿%šÖ»—‹p\\¡\"´6êÜO‡YômUP¬Kƒilê²ÅÖò¯Uà€ÒçÎ\r=¶×©•Jþ1;ý\0ƒi[|¯¦N’yO3ã|µxòö4»H¿ÇÌmwm×ÌI?DÔÒáóŒ|Ëƒ\r@ÍF(9_+ÔDþdÃÅ-c•aqäÅ\0'ªul2TúÑ>Æøë°@l{²n…Ò¸÷Rªëþá4»›¸[`pžñ5;×Fæ‚âÜu cã­ËY@óI…ÁXP/\rØ„u‰@®Õ©¨‹9gšKUuþMŽÒ2òÉ€ÇáQ>º<±¬0°¨@œƒ4r\$ï*Zå;¥º\\®oMAÔ?ˆSdGlö&þæü#d¦am^Uyî»NÙ|}no¼ßæ_äoï8/¯Ëãß`Áw¾ßvMôû¿G¤}Í)ðÿ3ç¯ý&T\$ŠÎôëTHU–ô-|—vH¥Î–ŒöSzûL|ÿÃ|øoÀ•§ZÿïÈð… \rÅ\$‘æÐûËˆ)64.Lé°PR@ÒRÔ¬°\$#p)®|D…¸6‚6/>ò*ðCÞèNà·DÛÏÊáP éÐ^%i®%pb¿îTP\\²\r¯æP~M¯Ñðˆ»…Ÿ\0\rž»°u\0°˜»PˆúK »(øp¯	¯®E†;ÏÄ+ò>d«Š¬Ù#²¿PÊæÐ,ûîs\r0È¼Nxb¬¹\$féRÿ°¥äüíÀ@^£ÇŠ-‰T!iŒ¬âD¦e*#Œ¬Ì«Ë,p™QqO6˜±£T\ràà\"Ä~3gÊÿåÀ¬ëìúíìRÁ£bí‘NìM’½Ž\nž„„øb˜ZÚâX×CÚ4@†E\0Ød¢/å•0—ÆÜLbl~Â\n ¨ÀZ~Ø§â8Œ˜P±Yä„9Æ±ÑRë¬EÑ°[‘´§QÜ%€«±pSJ®tq¦ÐÄ%\$<,¬LAÃh/-vžb§pÚO‘jä‹Ü&Mt`˜¼>¼Â|_…À>0ÔtC„(€U£–1)ƒ6\$¢\$š‚.ˆ\rf\"êÂax:@ò1(Fe¬Ú,Œ¢d¸¶Ï§‹+‹%‡8É6UaË6sƒ&Kª i@”B1¢B#²ø’pGÇ81ìèú­ì`2LA©,¬%…ÎçJ:âeq‘–J=+ „\rç>ª\r”‰®t„È˜</E\n\nÀÒ îH\0Â)ç/²|”)G(CD{DèeÂ4DÖ/‰æerÈºãz=€@£]+ædÛR8«NX'â/%Ê2-êz¡òjGà†w#@4Eœ%âØ!f—òÝ„Z-àÖ2¨nCê ƒ)ã>SÅ@";break;case"uk":$g="ÐI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”žCˆÈf4†ãÌj¾¯SdRêBû\rh¡åSEÕ6\rVG!TI´ÂV±‘ÌÐÔ{Z‚L•¬éòÊ”i%QÏB×ØÜvUXh£ÚÊZ<,›Î¢A„ìeâÈÒv4›¦s)Ì@tåNC	Ót4zÇC	‹¥kK´4\\L+U0\\F½>¿kCß5ˆAø™2@ƒ\$M›à¬4é‹TA¥ŠJ\\GB›Œ4Ã;äõ!/«î¿(+`˜²ê’P¤¿ê{\\’µ\r'¬²TÏSX6„‹VZ(è\"I(L©` Œ¹ Ê±\nËf@¦‘\\¦‹’š¦.)Dæ‰™«(S³kZÚ±-êê„—.ëYD’¡~ÈHMƒVƒF: ‚£E:f¡FèÑ(É³ËšlÉGÓL•·‘A¡;–Szu CD´RöJ©‘`hr@=„¼®Á†BƒÎs;ãMNrJ¨Û­)ŠS3NéjfB£TÝ…ÑˆÑ54T4´62(Ñ>É«)ŒF#DMRD¨kgVhI…t˜—;ršFêöH‹¡ªeŒ_7iŠ]EÚA	MªüH”±\0Õ¨µ.AÂjã}c\\ñf‘·-Ýë7ß³bÐ\$›Gm¶¯úJ«Ý)ŒÊ ¢c\"Ð,IxâP¦*ÏbøÎ)f%óyenEÊÍ×O”Z 4k¡.´,Éå­ÍžÄ‚5oA¡Ü%­[4d5¼ñA0é²„„P„E­(™JÈ}3;áP\n’X3¨rvÄT0Ã¨Ø6:ï+¤ŒcÝŠ\"d>•áäa\r&žŽÙ²Rno7Õü¤‡!°Z5B·ÍãÓéKéFÂ÷ýî™ÀxÕÒ§©zuÉ)<f”h¨îÂP¦ˆ4ƒÊ]EzS]S7Rcõ?3Usw/e¤f^hÕKÖÍeœh±úëßÝû·Z˜tÜ\\=jB˜)£ƒçv¹pö[×Tt{e’ï`PØ:@S‚áŒ#“7ŒÃ0Ù«Z«5¢ Þå»pò£pæCc:¡Ì36`@xgBÍ>GöC8aB\0‚	±€@P€u;À 9‚’ÖfÚ†.«f\0†ÂFk«ÂâG]Jeº)aX¡\\,£DD”JÅ»ò&¤-’BN÷ÒD3ˆbÝ¥+Sl.Z®*%ÐG·7Œ½Ì‰%FåDF#Ä\\ÏQ©¡G	“en¡¡5Œ\"Ê&¤5Eù\rHÄð&†æwƒ‘ÌŽÁÌ;†ðäÄƒ(x¥õH\\	Ä}A˜‚ Ð p@¼‡y,ƒdƒ¸2‡ ]ƒ8/¡ºQƒ¼ÿƒHo”€‰´‡#¨\$h_<Í¸5‚ |Chp:A¶Q‡@xÃ>K\\2ž\0ÞÄŽÄ!¬äès\$ëù“¸:E*¶Fˆ—?H¨©¸T2Ïþa®˜Ð¥b!Í³\\?Ž])›5cÑ¾?¥%%DÀ €-iFvŸT®\n8)Gð¥çÈRT)ãDG2TD|^oÇù5 ‚\\gA\n?l™ï«ò%G®¨þ”òÖÖ(ö.ËP‚GŒPŠ.£Ä5ë›ÕøR\rêj†ë„Ä6\n,ç]ÛWÌŠ”gbÚ9%QyÇ&÷ÎcT7,äð\$‘pòp\0d\r,HåLðç(æAá:Ï¨8‡S«3Ã0r\rá´4ü#Éà”`€1ÀŠ¾uëz:‡¡§CòHsSÐ”¦‹¤Åà \n<)…F€±U]E=-L—U\nA	†6 ‚úS\\	GJEvM´aG¥s3¹¯#e0Ó9 %Äà© u¾ÍD¹À«\r´7?ÉtäÈ ‘!ˆ4†p@Ûˆ ÇDä	‚ P¸A¹‰™s¦|Î¹Uª¶UðäqäòaKÁ®2eJ5\rMÊ)ã²\$6JÈ3¹ALÙrL&!é'ÎôŽeŸ}È!\nh36ñ\r­ý3+\r69öòBÏÙ£S0ÂqªF˜‹Õ•Eäi1•1~‘SZ¦ˆ°§[€(f-šg‡`Â+2²)¶Qj)uÈÖÃÏ‡­\núªõ°Ê¨[• Ëí ¶wŠŠLåÎ®–I]BŸ\\Ô©U=wb±Ó -k\n D; ±Ø™«`¶\0©å	Ì%‹[Q[îUØ¹‡±PC¤yŠÑÏ\"4Y\\²QÏ}ícÓë\rùú?Nk²'97—&rO,@¢5ÍÊXVÂ{O‰ô¯gbTpXª%…¹–\\IDÄØÝ­&Yñ\$r6FÑMŸ³|¡Wjœ·ÍL¦;<ô™j\r\r!è2€ ‡ZÃ„×¡L2 Æwƒ&O&/IáÂbi£Ÿt.¼XD+j¿\rÐ´Ã„Å‚+è¬ÕñMeh­Þ’˜Bšú‚²l(—=ÍkR#FUN,|hLpÐÕ8£è|£ˆ'›'C÷ŽQû	z(b¹‰Û¯µ^§ñÁ¨yë¸’ðâ¼ÍÓQ¾'MùßÓÅ­ã Mé1¬R F‹k§(„½	¸ò½©NWº…#B ™¼i›8€–òw–Ižs•H:ŸÄùÎJ©¡GHö+7^Oyz‚Ê_l”ÑtÇMÇU2¢ã¬uEÃM™Ð=-ÑÊfKbÖÑf½¥Ñ)Ç*™Bœ›U\$ýMwõUÎ€ObaÝ•ï¨ŠiÚte¼¤·¯iéÚ{¢ýP1C¼ö58€»7~iÄŸÀêï/¼.ìîE™‰uç«èËÝé®Q‘9˜Ž¼–ó7\$ò0ÞÉä;îâò}©¥ðXåÞ=jêñù0©úŸ\0T=¯lDáŒû®«ü²U^Sàx.ÚGö·g¦†´&]kµZƒ¹ïWÁq=óË\nÌ\$hOîsÓcÌ&ôU&å»@FÏ\\…=²ÓbÔôDÕ^A•{ÞKˆ]Û\r¢V\\(OîB¥Þ\\?o€*OÀýƒä5dÊ¨à‹HJ„Tb¦(Ír¾¨XˆÖoc:ßŠpˆcÎ”PCFÖ,ŠŠ„X‹(Ý'†4Îj@Ð:àD5\0OÈ÷aÌ\$ˆÎÌÌÏ‡æ(¾ß>ðÂãï·ÏP‰§ ¾-6ÄÄÛ„Lzj	x{ð|öí¶ÖãDvÄT‚¶óF·\np¼`Í#dnÁÎ€âTºÁ§ Û°Ð½…Þ*\n Y„&úc\$j¤nh¬#ÄBMÍäÖ‚¨OÂ´0ªr£¡F\nÁpâ6é÷Â=0øÓmèw¢Üê_mi>îŽLÝ­àtdŠÂ*4hn\nx!lD%@SL*{Ì¸rìöË!OND—\n,¶TÌÜÏ‘\rJ\n!7Ë(EO—°9§³&y„6y°Ý\nEƒÑ¨Î°ÉÍMÚÏ1Ç¶ÚjÏ¯\$}o¡gW1²VŽäŠ'¸Ž”ˆðÆî0~dÎ°DtF0ÂzïPDÈÈkp&2zæªdÄx÷.öHqÂa°ŽòFPvT’ Šû!£!èBæê–óFHh‡ñG#1ó#rù2@Ê²Dæ’JEò&ø²*Šb\"ñÿ±æïNøEÆàåø½R/1‡+Ä!kÈí¥¼òŽ22}ÃÓ(kË*2á!ÍcÒ˜çæÂ\$3d|Ñ\n[ÑZ*âê%n“-Ãà êB_\n fZ¦ã,?\$7,°¬¤8aIºæ)Árq<Ý&çª@ä¯ºÊ%K,ã ãÈ¶¡¨l¢+-*DKÂìxB¯’µ*5*KÒáMö´#%†»ð¬S-ÖrgàrZÐQÃÙH_bŒÛ2«%Òâ­°7r“B‹“w8ai,K‘¬è÷ŠU7¥ýNtÓŠÌ²—	¦F…µ7ñÇ(3º+³±°Ù,P‘60!D—<‡¶ÎgNÎ°G;Êãù¡tVO5\nÅ€\rÀ&MTÈ…u3ÓzŠÏðRä§ÐÒqÐ!Ç\"vÎg\$Žl^s²ÍëåÁ>Ðt%\",Ý%‘ý*Ó‘B4ô9ÐÂò’Ã9Ò±D<&æTxÆjaÔ`0ECTHæñY>‚?	EæY=ÎÓåFÒ!GXÃ¢ hzˆòÑA¢â¡Ê ãèädT¼†À§t=³·C*_‡J¤¼²óÍçO,eÌ.­\0œB\rJÔÅK21<1¸ïR3>T»M4À.”¯=ðÛî;KÑgMtÂ†Í¶ÃÔ+TãI9”ujùNn&L”õHUÃÌ8á°	P´·(.¡.,+óÍMòÕ78EQT÷,tfÝªTŽ/H3¢`U,V! NDû:ÓèS-Àè†ŠèÐÁ#±ƒ;S,urM.ŠWù<C(5†V°f‹,­DóÏER‚¤*JsDB4nÃl	éÈÙÕ\nã=e?#š÷T]ôñ2£tF[ð¨Õ}@Ðpo6õµÝ\$i¯42a^oß]+FXHå%e]òxBÖVh3åpYÏZÖŽ)´	6\0Ÿ³\r[E°X5¡T€îrtõâƒ^5Í2*â•\"–@¦EcvK\n6øÅBô\r||€Ørº7Ã*¼‹K!†41´–=QÅ6EÀ'B@È‚xË˜‚àêŽà@Iš· ª\n€Œ p	FiŽB\0Îõ:î±fQíÓx øn»llg|hŒM–Ðñ.´ô´Çl‡‘¶áÈABd°GLìÅ¼dÕ5Ç¨	¶¶ÀòBadZCt%.¶CêD¤4? N‡X–ð5eš‡ÖË2Æê³6‡\\‚m!èâ2púÖ‘ôo,l)\$t#JzzÒ@˜¸\n´B7ivÈ.Ã;ƒÈpí\n†ãêÏJnÆ§”ÖÇ¢ÛÓMÃ2CfÇp‘yé/ò/‰ý_rÇzPªe²ªQ\r\\üU¯TP¨×	¿\$Í)U‚£ðÍy0ëDÌ\$÷.o%7Âœð»}—¨C%õ9EáÌÞ¼Ò{w¶Ze\n!rÄ‹4³˜Ux°í:Ý“`ã]	è¥´Ã!äüñH®Nê\0ÒÅív¦\$\nÀÒ î@¬ Æ ê\r¬I~\"†M÷‰a¥f.þÐn|,üQ­žM'‡ UÜû“f=„7ˆìzì~r£ý'1	´Ï,½X~þx–#W½<—(×ÇÔ;£8E„xbC¡…T¥OÔÔD3Æ½bÛB.¦Oc&Ñª>";break;case"vi":$g="Bp®”&á†³‚š *ó(J.™„0Q,ÐÃZŒâ¤)vƒŽ@Tf™\nípj£pº*ÃV˜ÍÃC`á]¦ÌrY<•#\$b\$L2–€@%9¥ÅIÄô×ŒÆÎ“„œ§4Ë…€¡€Äd3\rFÃqÀät9N1 QŠE3Ú¡±hÄj[—J;±ºŠo—ç\nÓ(©Ubµ´da¬®ÆIÂ¾Ri¦Då\0\0A)÷XÞ8@q:žg!ÏC½_#yÃÌ¸™6:‚¶ëÑÚ‹Ì.—òŠšíK;×.ð€¢™„ìi¶n÷»øì¬ÛÀ€ðÁEƒ{\rB\n'î¹»Ší_ÌÁˆ2œka§‚!W¹&Asv6Î'HáÈÞÆ»ÉÛä÷ ÉvO„IvL®Ã˜Â:‡J8æ¥©©B‚a”kºjÊ*Ì#ìÓŠX„\n\npEÉš44…K\nÁd‹ÀñÈ@3Äè!ªpK P›k¼<ÈH\n3°Ã|•’/Ð\"1J'\0\0P¦¦‹RÙ!”1²dœì2V‚#I²pN¾¦ï&	¨	Zþ)è	RÜˆf1B‰§CÖË\r‘Ü˜„ˆA¯¯™Z8B<@Ë(4=9%3÷.—sdn4Ê®ØÊëÏì»3-PH Æ€”±äa—Hl`Â\nxëD˜e`Üô9M‚ß&0î²2/#Èè2…˜SO1B„§Jv7RUâpJ®ÈñGF\n•«®5¸%û½¯åN]•2†Q7,tW¥Ã³FG	AQ±6’>hv4D4È	 íI/+|´¢ÊÑ4¶\n#©†T¿ƒ£ºP ‹t‚¯omÎÍ\rŠl¬)Š\"c\rh¤±&IƒÅ>\rÃ41¶J¤‚¦\"dL>c(Zi æ™Sì*˜\rèž€6°¯quT¿µbw›g\0VÕmcúÔ ´£ÁE%©u;»qö–:0ÒVŠØ­ƒõ>@ïS+Q\$ÍÎ~4h VTÅ\r‹@,ìÐÂ9¡\0Þ3ÔÜ2©cCºPì˜eª&0¤ƒ¢Š’)òv2ÓáÓÜS~ã X\"ålŽ½8ê±É³A-€ùUàÜÊŒ)t‡Û‰Áë­\nl)Ü˜ÓÑô±´SJ%2RH1D4ü—EXê—P²\";Å¿ƒÃþ3¥Â…ù3¨…®ç©©Ü/¾eøéâC‘#’xåÕä«´å:>s½Íô;/åòKA\0<(a¡À`zƒ@tÀð^à€.!6\0ÊpoAœ†PÝCÂÃ\rÁÌ4Ÿð^ˆãá”:@p¾ƒbU\r`ˆsÒA…	2|!´ðÂ™áSm½q‰‚ŠA.iGÀ 3èÆ™¡Îò\\]\nŠ‰§Î& d‚™AŸ-åÝ€³Át-ÏàP	@š-Ó4G„¹ý'd™4RRÜº±qQ!ã·Oãª~e!¬‹¨˜!Õ1 ¸‡ª†C²jbŒþ/r¾S³F'öI	ÒìqIúP(qÖ-°óˆÁú?1Ý<òôI.	\$H<·ÓÔV\0n\rçð9Áå€GCHsA!”ÔE3øñ×0R\"iˆ(l\ròö6Ì àaY.½@™’CÉQ,á@'…0¨çóÉ'0\0\$>Ø†^ÖÙ0‡DvI¢xJ#Üg'r!DUQÕªVñMñBI\nD±ŒF†-:ˆ„UÉ÷(„°õ&âì‚¤l7Åø¿:6Ñ[R{9)ún('¦ŽÖ[™\$iÍPrÚ®Ò*1d‘S¿\"QG[!\$hï&j(¸ÏÛ/'\\ä£ ™KR\n…?TU€˜d|.ÈBcb5[„@Ê{yØ0†ÀêWÚ¬&“É,«ÓvŒG†¥ÝIÂU•Y,_u°@ñSËY“Õ ÊzÔcÂ‰K.À?¶\n.ÄX §‚†%ê¨,eh–A›²\$¨•ƒšX­þ¸P²–ê·\n…¤Ð•\"/Kžði|\r¡	!\n#Tl°†EPÝk–0\n\nÅüõWÂ8™íÁº(§]/xÄÅÒ0£¥åŒ\"^LIœô&ää†­‘ZŠWÙ8ª‡mÅœÆŽPÜÊÕŽd¡Ž’h®U¢¶¡w8÷ ¶È	À‰H¤àã«…aT¯’¾§†§•Põn…öhF!m¸ªVêCv(ÝZª(ßëY“l*\$\\\"j	ÿ+KJ‚“}XŠ#HîI5U¤ª¡ŠŠšnšš>Ìh„^T€^Ùw]¨CÝ‡\\x !ÓÈ\$™#ÔÀ±'tØ§¶èËy3&·LO—dLpˆ&?È¤jÆf€Aâ‘Pì”é(!%Øüƒc»ËI›çY„	Ó‘v(LÈ1Qq\$ã3äÌ{ƒ`©ü?ÁÜŠ4:\"qIío»+‘gÈ’DåP­ ™É‹Xšj)ClÚ¢ÅKH–‡À‘“\nÌi”¦iO§Ò>¢L·Ã:Ot¦NYv)ôÐ¼cdƒ|ÝòÏÕ¹¤˜‰áÑÉ·ržªò†U×…¹Y\"Å½A ‘)«ó§9ë`Hïzò°‘HšW'â\\h\r•†#¬í™¡íÁ¶R!A’BŽ}¶hñEBL¤9Ì_’“q2õ%¡ß9õîÃÞ\\ê™~+¡t,KgD|ÃšÊø‡t”´™o¤÷¿,F‹¿7Ñóm¤3º®žìm†ÛTEÆÎ1\r½ª^G%.ÀJÇ[5ÊÂéMû³pÖéåÌÒßÑKµÉWÅÖQœti¹9Û5²¨RÉÙ˜âÚ3ti¡4VæÐz£0}Ì÷¨õ…vªNÏŽ‹åàëˆÜ;£Ü}l]óÌ´drá‹ê±åXm¹Î·sÁ×9rær\r}çï\\›¾‰×»Z\$J•HÜ¹U³PâºoG—tÞ¬^hutq:ˆåxÑÉïŸ)Ç7Åù(uFÛqæn\n£re¼¤O8¥Vƒ!îóðNç#~š²õ¨‚ÍyÖÂU‹+3fEÕµ†ïÒOÀ+›ÏñŒßÈÒ|zÃØžñz>=ù^øŒ]Ó:²½*ß§Î““‰Õ/Yésóù†=Õ3lý¿/ÝŠl—Cý¸£?š^ò\$¢Ãr	l\":¥ZI!vH\nfV0\n\"åZt`Èk\r<ŽrC+A,D‚ÏÔíŽxìÎÐq* Æ‹Ð4¨P8_‡Ï~r¢<âJ¾¬Zh¬ì1PbÇ‹°QÍöAKß‚ö«cVJiÜ¨®ìæçþ&2Lm\"èÍ„(pFÊŠq/Öí¤Û	*Šÿ&Š|ð -PCìPyÐŒü/20#^þçœõ%\0¤Ð±ÅìMºOo8®Ä•	Ë+pBê¯b/î PÈW0÷B\rpì]Ñ†Å2\$„pS¬Lþìþü§<é:M¤ß‘\0Æ×ŽâÉõ¢±*HDˆÀÃ¾§Ä·ï&ZÊÔUP5¨5ƒž¢wÃVVì~Äc²³¥lÎ/¨=mb{ƒ˜*@\"áRQ‚Õáwå~ö(˜ÎN×b\\	Ãæ¢bÐ\r(ÅÀ|kxGrß¦\$šBMbH¹.&\"ôáJG¤ì €ª\n€Œ pèÊ:%\0J¢¬\rV¤è°“â<\$ï‰ºn,j@êJ§H) 	°€òâüIy±ÂèðNSq¾±6(£j,àäJ­ä¯Ã\$6IE>¬jÎT2\nPbÎbf*©l 8CøÃöÛvú¸%QNAA.î/tÛê`ð¯rq†”Ë¹ãr4çtûrŠ”H7„c\"6õÄû+Ô[!X[eº^oU%¥TÇ(p'mâGfÖLc„ÞÃxßÎ	jÈ&‘e Õ.&ºBpžËðô+ê›rÂ¤Íð¯%pˆÌ¶N\0ÂX`äS…@ÊX\0¬\r Êñ±ì<%°-R¦7€áB¬¬„>wGy#ïêªA^0 ˜¸dGãÚG¦¨QJ^â\nmjG.‰¼4hr®sZúd‚9²¤vpp&‘1\r3XŸ20\nÐ¸©HÎ-€K+v3¥0SQ®Å–Â‹°4b¢";break;case"zh":$g="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ð S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ð€Js!Kd²u´eåV¦©ÅDªX,#!˜Ðj6Ž §:¥t\nr£“îU:.Z²PË‘.…\rVWd^%äŒµ’r¡T²Ô¼*°s#UÕ`QdÞu'c(€ÜoF“±¤Øe3™Nb¦`êp2N™S¡ Ó£:LYñta~¨&6ÛŠ‹•r¶s®Ôükžó{¾”òf“qŸw¹ß-œ×ü\n–2‹Œ #*«B!@éL©N…zµÐ¨@F«÷:QQãW­àÏs¡~™r.“ndJ¥ÊX’¨ËŠ;.ÚM(ìbx¦¥¹dè*ŒcÚTÄAns–%ÙÊO-Ç3¨ì!J—ç1.[\$¹h´¤¹ÎVÈÉdŒDcìMœ¤Al²¤‹‚N-9@€§)6_¥éDî’ë£Þs–eÛ‚‡%ÊyPœ¤Ìž÷B¥ºF­ys”\nZÃ±()tI¬„Ì4^’­ÙÌF'<Ý\$Î'I\0DœÄYS1RZLÇ9H]8\$™ÌO±\\s…ÉÐSÒ1}GR’ê¥)v]PJ2ÐE%“Ôù?H%í\0\$Ý*H	i Nå¤–“—g1¡—¤iÎ^•ÉiÀD}`L©öKÆFr4Vž%ÅaÍBPÅÓÀHG1ÙÊE€#£`ØÒ6Lø@9ŒcÜ\nbˆ˜r’(ñvñ9Uo•)DO\$=”þg)xôœ»sLR5rÍxarsÁyeG1Å?ŠbØÑ‡Íg1LA4Ìs¤·0—Ž®Xrë>3ORtÏ@ÍSf9ƒYUTúTC`è91¬x@0ŽL¨Þ3Ãc˜2¶§1fT\$£Ò*\rìÀÛw!\0ê7c¨Æ1´C˜Ír„`Þ3¹ƒ˜XÒZèÂ3Œ.`A»µ Úæ­XP9…:‹\0†)ŠB0@“”‡9F*Ø	’S¤y#=&«©ÊF’°V§ª­¸Eì`§²#xÝRÁÏ±!‘³ãÉr“´ßÎ®âhÂ9µc“3ÝŽc¸Þ9Tƒ(ð8\r:HÈàÂÈé#0z\r è8Ax^;ûpÂ2ocpÊ9ÞÎŒ£wÐ<5{SõW@äÐŽž˜¾ÙÝÃXD	#hàgÃké€ð†|Q5¡½RP@ÖÃY•\r!ÐÌ¾6¶øƒpt6®œ9‡7Þ©Eø…\"„]ŽD*ÈH¯Bh(¸#øo.\"q>	A^œÓ©:@\$\0AÏúEð¨÷ÁQÈ`‰ANJˆ†`+SIŒØBºâ\\L	‘&¤ÜœˆD@9…pµPG•cÈ——úß Æ’&Z0d\r*ËÁ@æú`i®4m\$8‡SE0r\rá´ÀÓÝñ­} €1¶¨îi#Ó¿4&Ô˜¯±HpáÐP	áL*Cö>bÉ[0åH°å\"Ð€«øOF¨H…XKz/aHcq]®¬Ó¶§¾ÑÁ\0b\r!œ/˜1ž2¦uç„`©—r¤\r/ùáÁH'2\$„ŽáÈÊ>BÐ)³UX£˜P%^.@PO	À€*…\0ˆB E3¬\"P˜gŠ,ñ€Z¥òÐ#Ä€ŸÈa\r!Å`%EûÊÁ=Â9Ð(f+–\n`Â#ñ-sâEpvÀ€.‚0é˜G„QtxEÒ¢È)ÅÙà<H˜Ã‰LÄ™ŒA¨<ïS*nšÌc>OÔý6366%ŒDŸ§Œ_‰±Î*Z9Iªlrˆñ1 Š:B3r(\"i°œˆ\$ÁâÏZ‡B  ›]ºKµ9Ñnå	lå³œñ©°¦CÐeAA‡û`9Ÿf¬2Ó¾xU€ÍHJ³¶/”¢–¯§¾©EtÁ“‹	QêE\\Š+@KEÐ,‚mGŠÄ‰h·CB(PÂ%*“ÕTH¥›8\"Ó5öíË[âÐ&ÅÑC¤I‹áÌ#Œ{`¬Æ¼²Ö.‹…Oª+8ü‚PÍÕFQ	qÑ>)O%¦f-TLª0@Áî¤wšô\nñD=# ÔW‰WbÞAúâ]\$‹Ê\$Äl,†b&Z¸ÈL*ïÅ#1˜”ÏziÛ¢[è”Dß‘Bä¾Ãà(&M9¯ ƒ½uAd ’@R‰éM€‘`ñÎÉ¡^!·¡}%U¾–Ð\n\ná”1cä¯o±X¶­çØHR<’VÐ”(˜[Q'0­WbìB­u\n¡ïaäå G)QŒÇ0¸„V@ã¢ø`Z ƒ³ˆ9ØñIC‡=¬§H8s	±hå3Æz.ødê-+NƒÎ”ôð¤ìö,­™ÑÚ*ž\\&Ktþ´˜Iˆå`.ÄÁ6ƒ”@Ãº¥DbˆC(l·#PÌ„F¯ÓZ”´ í#i,ø¼w²ÒÚ\n	«dF4\"…D’Ð\$§Öžgj‰£Ü”µKû?J^-¨K)Þ·bu* h;€Í*&ÌÎ´ùŠ³Íµ·-—Ò›jËFRî:€ƒBwbí1ƒ÷†òˆµ›\0R<p>	Úº3QÎ	Å£öÕ¶àüàð«p‚­MR¢HFg›Z!ø”!„hhB×xižEÁ	â¤êSkô8ìJ˜¨âÓ“Œ.GÇ/„…É‹U¯uÑÑ#\"S_è»Mù’7¨GAðkqjø»6ÛE¢4ÛK;¶Eý£RVe#î~¤Ô¯UáŒÓ¬)ju·Ôÿ]Hû‹‚]Ò™Â:Š™ìÄ£«\\ÖJK¾Úíçw·«¼·˜9l-Ê%”%A^Æu\$pHæo\rÕ;Üg„¨]š¡½»GRñ»ÕdöÖiäü•î=¥H³\\aØ“®»]ÓËˆ?²ï¢ª3ž	±=Éµn‹ÎÛÚ©ye?í9w‘S>àK˜Î²z`¹?—vLíì=¶ª ¢/ßyÁsì=\"Ÿú+«Ü;yo½Ò‘·_]-|Ÿ·q~ï›ê_~ÞäSõ¿ïÊˆ¥÷?©ñï ·û??øüšä…Œ`Hwa 2Øß0»fÊle\"ÐA>¦KÜ;dn»LljlËI¾)ät-\n\"l\"Œ±£ƒä–À¶ÐêªÀS¡zÀÌ1€†h`Øi\r Æ\r`@uI€¢Ê05†´€ÒÆº‚cjÉ”àêw‰‚‚GV\n ¨ÀZ\0@} Çš6­úÃïæZ0O|#B8ª„#È½6	°qP(aÐ!(a\"â,ÆÍ£=CèåCŽ/‹˜¹Ë e¬ùÐºÔx¨!B¡Ò¤–ŠâÓÀ˜\rç¾9ƒ©~\r§†2£R6\"Z'BãávQA<H2ÍBÊf¢êÑáÐ¡X¥M.³o\$î\r°öJe`¨]#D2#&2 Ä©\rààŒL°'—Ž(ìE.å\$œ@AÌVëJ”ÂÐ×M8ÓÉLØjJç+Š¼dRFlœôtw Ò¢ë\0ÿ @\nÀÒ î@¬ Æ ê\r¢0‚¤,ÔåµAÌgB¼å&\$ÀÍ!cÇ\nTG%:¬ªÁÜ1?*a%º°f’5C*kq¹Ñt;\n”oŠß1¦å\$æãýdT@	\0t	 š@¦\n`";break;case"zh-tw":$g="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ð S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ ,#!˜Ðj6Ž1uL\0¼–£“îU:.–²I9“ˆ—BÍæK&]\nDªXç[ªÅ}-,°r¨“ÖûÎöŒ¿‹&ó¨€Ða;Dãx€àr4&Ã)œÊs3§SÂtÍ\rAÐÂbÒ¥¨E•E1»ÞÔ£Êg:åxç]#0, (§˜4›Œü\r÷ñˆÅG‘qäZ†–¢SÅ )ÐªOLP\0¨ýÎ”«:}µï»áÚr¢òå´yZî¤se¢\\BœÅABs–¤ @¤2*bPr–î\n¦ª²/kÞÁ)ÒP“Ç)<·Ä©p¨’êY.R®DùÌLGI,I¥¥i.Oc’t’\0F¢å±dtì)Ê\\—È*ð’ëÛâ»/ÉÊ]g9f]Á…‹Ø^K’ LªÇ)pYÊr•ä2´.«ºó)•h¹2]¥Å*–X!rBœóœê\$	qól£@%yÎRPa s-¯a~WÄ¡r’GALKIÔ•)KPËÍ:ë±\$ñÒPO„Ù\\‡Œ\0Ä<¶@æÐ–åìJ\\PÙr’B–HŠÜreÙÌBñùÎ^Õg1IJd}\0Lª1TP\$ñÌ\\u¢xŸ àP¨2 @t’¥¼¦S%¤Z:^“€PŒ:ƒcRÛ´\0æ1Œ#sœ(‰‡)\"^Ù)ÐC•G-ånÔªYIÆKqÊÞ7Ôõ*\\Ô2”©T…D¾QÔ†,]Ñ¯ž;'d´Ž;8Äñm“)ebvž¥¤a_?œ¹ÑÊC—InPsåYô¾<Ú4á¤ÍÚ9Q–­Ô\rIàPØ:L“(#“47ŒÃ0ØèŒ­Ôû:h0ÞÎ¸ò£pæ:ŒcN9Œ×À@6\rã;¢9…Hå·Œ#8Âè„@KV®ˆëXÖ{23‘	¤!ŠbŒÔãXÊ7/Ï‘täk¯>—‘â`¾¤±]‘	ñOìùùtÈŠ{¸Ò7Á(YP\$tZ†IÓ0ý©\nR²\"hÂ9¶“=çŽc¸Þ9U·@à4ëÃ \\ƒ-¯ÁèD4ƒ àáxï÷…ÃÉÆÃ(äzã8_ÏÿwO>ÝØnà‰}‡#L0_75‚ |Chp4µÏ‡@xÃ>Aæ¢\n Þ«MP m®yÄ® àý›kõ\rÁÐÝ;ç\0ã¾èxPÐ(…Xå®Ðø0F*A(-˜Âä\"V@»IJTWŽa-°P	A a\n‚R„0D‚\"aó“®TšŽa\$G@­Œ¬ód< Dq.&ÉË\"Ì+…ª»t…2‰Á\0OÊ	gt'ÍRŽQ(„l	!˜–¶J­3‹¨9¹ø@lÍC^!ÔÓ® Ìƒxmù¶G¤lœø mòJš™0ôÍ1º\n<)…@@ËÅ#\r(ùo‰²…0æ\nqÈYÁ–&\"´ƒ‰™•`ôÖ7Çä×pià€)°@@š4Oˆ#@ ×r­\r0Eë® Ó'¥¢’¡ÈÌ¿rZ)°äÂtˆÑjRÅ\0¡(I\0'„à@B€D!P\"€ª\n E	†\$Å€(jî‹Žrd¢\n#Pµw«Qp©Ä(\n”3ðºƒ°a\r’pó\nv:8£0Ç`O£¸w:\"‚ìöPÈ¸§g‹Æ(È!zT25F¡SòxÄÈ¤2-IBUF„ÊP‡«É”JŽq š…@‹Z§å&´Ð+„R»\"â,@a\n[Š@ç\" ¹\nÂ&ŠBë=àÅ(©b¼C‹Pm9T±!\n(º¯å!@:S®`ÄJÔ´Ä¢§B˜iA”9B}¤w&1›\0ÈxjÁå‡îRe4fX-TymB\"©L©µ:ÊÚEl\"âÐQQx’Ç\"“ccžâ\\k‘>Ç0º]U ‘2ÈÍ;³â}OÉüy…8¸u•0Uöˆ\"éÅâ\"òòaÌžÒGax‰ÛM›½‚ñkQêÔ.–°äGl]‹k<^o1óCGÀt!Ò–'Å(è\"‰Ôñ>:YÑç<®,ð@«y-âÜÇŽl!„…O	oÅ˜ú2~Åè±\"|_ÄbæÁ˜@»”eâ3d]ú§Wâ TŽ\\|(DbU¨â|'28ŒA2uÎðA(¸s)d”¦“¢B,òÙ8)Ä/»ñÎ-„œ7‡\"N!¼€/©ê\\K×µ ¼@ G&r‰|T!!c26\$Éù\\¬1Q€åÍƒ˜VŠ\"Z Ðò‰QzŠ¡HLkˆ0·0@aRÅÂ«\$\\À˜6v!E@égÄTçeR+þjªõ1ßŽa6-½(ê« !UHbµÒª‘\$³3fgVn}›%ßÜ•>.j¶uˆWg1½¢ÓRu£÷9å\0(„Ë@% ü«ñ§Q\"bÂ#s½Ê9w>ÚK[Œ–íK”¥®eÅ¸ðúæÜt?HwX—‹‹±w¡MÉh´y-UG±êÔlÈ6XÃãŠ/U5é½hm¦§3µYª\\KÞ†”Çøyâ<›%¨q‘ËÉye¸dÜ{±Í¤Óù•ºâBFöôã«ZÖYGC¬±Ž3Æ¼¦Ø“ùó>çèµæ›?§]Þ£Ë¹/UêùÝ¥[(’9WTT%#ô9aš§¸[Ä}v‰ÄÊ&¬wî§ˆUdìÈß2v˜kÐß78á‘á)sÝµã½ûµ•.ñ.ç[ŸúíJv]“v.ÑŠeçëz£îj¦Òœ/œ»•UŸAo½ªÜ—Óú-•±=e¼ô*w¦L·Sc~Ýd{ŸUÆ«¼À¨gšü,\rËþ÷ª\0KV¥\"ÉDéÂ½kw‚#&>Â1‹¡o;Ä:\0÷JX¨‰Â#úÅ`ü¿ŸâuEs\\¹\0¹x7ûÖ¯Þ‰¿ª§'ÅKó’Ñ6D\"DîªDöª²­côý+Ï\0Á.üasOÚcpþ°#\0I\0AçÐRÐ,ÿ-Ó\0j¬ô­.¼+ÆL½0Jõï¾æH½kÛf9«Ø¼¯¼ðQËÊEäbFdt÷¿LC‚Á°†÷ðjÁCêCpŒ2 yàÐ«^ÿ¥¤¯†lhAD©Œ8É€@\n	@nÈ^N)n‡MÑÁÐ…\naz\"áp¢\\,”wÄ\"ák\r\rUŒ˜Ø-`ãöé,h2 †k\0ØiV\r Æ\r`@†'Ä¦*f6&ØƒàÒÆÞãtÉÂ„@êz\\3G\n ¨ÀZ\0@sàÇÃ¤7NgÇ–Å¬Œ\"4#Š¸jŒ\$Hnn@›Ñ0P.ÐÓMH9ƒ#–ÔÄx¾‹p»¯â«lî)hü¯¶;…N,¦\rçä:#¦	‘´q‡®3C\\6Æ\$®¢æd¡<^­jÔ!Î,­’ã!Ð¡¨qÞÙnnØ¬Ó\rÑ\rÏ:Ìá&(EðD2 ¨_ƒN2Ã03@Ä©R\rààŒª´g¼Àæœì/°öOPL\"ªªÌX…Œ%«ŽÛ²(àŠJðmü¤Ž\r\"‘ÚÐÁ,\"ÌJÿœz Ò¦KE\n@@\nÀÒ î@¬ Æ ê\r±¤\0fzÃÂÆbºe0ÄÄìÙÑ¨-@O‚Ê<Ñä¨cò1\nÂjÇ*ê”<Ñõ€†kÃ^3FÛ&Ri\"@@4Rt%¬\0¸E¤OèïÌ™°tFDh	\0@š	 t\n`¦";break;}$vh=array();foreach(explode("\n",lzw_decompress($g))as$X)$vh[]=(strpos($X,"\t")?explode("\t",$X):$X);return$vh;}if(!$vh)$vh=get_translations($ca);if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$xf=array_search("SQL",$b->operators);if($xf!==false)unset($b->operators[$xf]);}function
dsn($cc,$V,$G){try{parent::__construct($cc,$V,$G);}catch(Exception$uc){auth_error($uc->getMessage());}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$Ch=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
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
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Xb=array();class
Min_SQL{var$_conn;function
Min_SQL($h){$this->_conn=$h;}function
select($Q,$M,$Z,$Xc,$Xe=array(),$z=1,$E=0,$Ef=false){global$b,$w;$Ad=(count($Xc)<count($M));$H=$b->selectQueryBuild($M,$Z,$Xc,$Xe,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$Xc&&$Ad&&$w=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Xc&&$Ad?"\nGROUP BY ".implode(", ",$Xc):"").($Xe?"\nORDER BY ".implode(", ",$Xe):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");$Hg=microtime(true);$J=$this->_conn->query($H);if($Ef)echo$b->selectQuery($H,format_time($Hg));return$J;}function
delete($Q,$Nf,$z=0){$H="FROM ".table($Q);return
queries("DELETE".($z?limit1($H,$Nf):" $H$Nf"));}function
update($Q,$O,$Nf,$z=0,$vg="\n"){$Th=array();foreach($O
as$x=>$X)$Th[]="$x = $X";$H=table($Q)." SET$vg".implode(",$vg",$Th);return
queries("UPDATE".($z?limit1($H,$Nf):" $H$Nf"));}function
insert($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$L,$Cf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Xb["sqlite"]="SQLite 3";$Xb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$_f=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($Ic){$this->_link=new
SQLite3($Ic);$Wh=$this->_link->version();$this->server_info=$Wh["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Ic){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Ic);}function
query($H,$Ch=false){$se=($Ch?"unbufferedQuery":"query");$I=@$this->_link->$se($H,SQLITE_BOTH,$n);$this->error="";if(!$I){$this->error=$n;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$o];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$x=>$X)$J[($x[0]=='"'?idf_unescape($x):$x)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$tf='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($tf\\.)?$tf\$~",$C,$B)){$Q=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Ic){$this->dsn(DRIVER.":$Ic","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Ic){if(is_readable($Ic)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Ic)?$Ic:dirname($_SERVER["SCRIPT_FILENAME"])."/$Ic")." AS a")){$this->Min_SQLite($Ic);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$Cf){$Th=array();foreach($L
as$O)$Th[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$Th));}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$vg=" "){return" $H$Z".($z!==null?$vg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($m,$nb){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($l){return
array();}function
table_status($C=""){global$h;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$h->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$h;$J=array();$Cf="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Lb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Lb,$B)?str_replace("''","'",$B[1]):($Lb=="NULL"?null:$Lb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($Cf!="")$J[$Cf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$Cf=$C;}}$Fg=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$Fg,$ee,PREG_SET_ORDER);foreach($ee
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($Q,$i=null){global$h;if(!is_object($i))$i=$h;$J=array();$Fg=$i->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$Fg,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$ee,PREG_SET_ORDER);foreach($ee
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($Q)as$C=>$o){if($o["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$Gg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$i);foreach(get_rows("PRAGMA index_list(".table($Q).")",$i)as$K){$C=$K["name"];$u=array("type"=>($K["unique"]?"UNIQUE":"INDEX"));$u["lengths"]=array();$u["descs"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$i)as$lg){$u["columns"][]=$lg["name"];$u["descs"][]=null;}if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$Gg[$C],$Yf)){preg_match_all('/("[^"]*+")+( DESC)?/',$Yf[2],$ee);foreach($ee[2]as$x=>$X){if($X)$u["descs"][$x]='1';}}if(!$J[""]||$u["type"]!="UNIQUE"||$u["columns"]!=$J[""]["columns"]||$u["descs"]!=$J[""]["descs"]||!preg_match("~^sqlite_~",$C))$J[$C]=$u;}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$q=&$J[$K["id"]];if(!$q)$q=$K;$q["source"][]=$K["from"];$q["target"][]=$K["to"];}return$J;}function
view($C){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
check_sqlite_name($C){global$h;$Cc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Cc)\$~",$C)){$h->error=lang(21,str_replace("|",", ",$Cc));return
false;}return
true;}function
create_database($m,$d){global$h;if(file_exists($m)){$h->error=lang(22);return
false;}if(!check_sqlite_name($m))return
false;try{$_=new
Min_SQLite($m);}catch(Exception$uc){$h->error=$uc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($l){global$h;$h->Min_SQLite(":memory:");foreach($l
as$m){if(!@unlink($m)){$h->error=lang(22);return
false;}}return
true;}function
rename_database($C,$d){global$h;if(!check_sqlite_name($C))return
false;$h->Min_SQLite(":memory:");$h->error=lang(22);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$of){$Nh=($Q==""||$Mc);foreach($p
as$o){if($o[0]!=""||!$o[1]||$o[2]){$Nh=true;break;}}$c=array();$ff=array();foreach($p
as$o){if($o[1]){$c[]=($Nh?$o[1]:"ADD ".implode($o[1]));if($o[0]!="")$ff[$o[0]]=$o[1][0];}}if(!$Nh){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($Q,$C,$c,$ff,$Mc))return
false;if($La)queries("UPDATE sqlite_sequence SET seq = $La WHERE name = ".q($C));return
true;}function
recreate_table($Q,$C,$p,$ff,$Mc,$v=array()){if($Q!=""){if(!$p){foreach(fields($Q)as$x=>$o){$p[]=process_field($o,$o);$ff[$x]=idf_escape($x);}}$Df=false;foreach($p
as$o){if($o[6])$Df=true;}$ac=array();foreach($v
as$x=>$X){if($X[2]=="DROP"){$ac[$X[1]]=true;unset($v[$x]);}}foreach(indexes($Q)as$Jd=>$u){$f=array();foreach($u["columns"]as$x=>$e){if(!$ff[$e])continue
2;$f[]=$ff[$e].($u["descs"][$x]?" DESC":"");}if(!$ac[$Jd]){if($u["type"]!="PRIMARY"||!$Df)$v[]=array($u["type"],$Jd,$f);}}foreach($v
as$x=>$X){if($X[0]=="PRIMARY"){unset($v[$x]);$Mc[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($Q)as$Jd=>$q){foreach($q["source"]as$x=>$e){if(!$ff[$e])continue
2;$q["source"][$x]=idf_unescape($ff[$e]);}if(!isset($Mc[" $Jd"]))$Mc[]=" ".format_foreign_key($q);}queries("BEGIN");}foreach($p
as$x=>$o)$p[$x]="  ".implode($o);$p=array_merge($p,array_filter($Mc));if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$p)."\n)"))return
false;if($Q!=""){if($ff&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$ff).") SELECT ".implode(", ",array_map('idf_escape',array_keys($ff)))." FROM ".table($Q)))return
false;$zh=array();foreach(triggers($Q)as$xh=>$kh){$wh=trigger($xh);$zh[]="CREATE TRIGGER ".idf_escape($xh)." ".implode(" ",$kh)." ON ".table($C)."\n$wh[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$v))return
false;foreach($zh
as$wh){if(!queries($wh))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$U,$C,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($Q."_"))." ON ".table($Q)." $f";}function
alter_indexes($Q,$c){foreach($c
as$Cf){if($Cf[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Yh){return
apply_queries("DROP VIEW",$Yh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Yh,$bh){return
false;}function
trigger($C){global$h;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");$t='(?:[^`"\\s]+|`[^`]*`|"[^"]*")+';$yh=trigger_options();preg_match("~^CREATE\\s+TRIGGER\\s*$t\\s*(".implode("|",$yh["Timing"]).")\\s+([a-z]+)(?:\\s+OF\\s+($t))?\\s+ON\\s*$t\\s*(?:FOR\\s+EACH\\s+ROW\\s)?(.*)~is",$h->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);$Ge=$B[3];return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]).($Ge?" OF":""),"Of"=>($Ge[0]=='`'||$Ge[0]=='"'?idf_unescape($Ge):$Ge),"Trigger"=>$C,"Statement"=>$B[4],);}function
triggers($Q){$J=array();$yh=trigger_options();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*('.implode("|",$yh["Timing"]).')\\s*(.*)\\s+ON\\b~iU',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","UPDATE OF","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$H){return$h->query("EXPLAIN QUERY PLAN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($pg){return
true;}function
create_sql($Q,$La){global$h;$J=$h->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$C=>$u){if($C=='')continue;$J.=";\n\n".index_sql($Q,$u['type'],$C,"(".implode(", ",array_map('idf_escape',$u['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($Gb){}function
trigger_sql($Q,$Mg){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$h;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$x)$J[$x]=$h->result("PRAGMA $x");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Ue){list($x,$X)=explode("=",$Ue,2);$J[$x]=$X;}return$J;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Fc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Fc);}$w="sqlite";$Bh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Lg=array_keys($Bh);$Ih=array();$Se=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Uc=array("hex","length","lower","round","unixepoch","upper");$Zc=array("avg","count","count distinct","group_concat","max","min","sum");$fc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Xb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$_f=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($qc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){global$b;$m=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$m!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Wh=pg_version($this->_link);$this->server_info=$Wh["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($Gb){global$b;if($Gb==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($Gb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$Ch=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
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
connect($N,$V,$G){global$b;$m=$b->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($m!=""?addcslashes($m,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($Gb){global$b;return($b->database()==$Gb);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$Cf){global$h;foreach($L
as$O){$Jh=array();$Z=array();foreach($O
as$x=>$X){$Jh[]="$x = $X";if(isset($Cf[idf_unescape($x)]))$Z[]="$x = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$Jh)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2])){if($h->server_info>=9)$h->query("SET application_name = 'Adminer'");return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$vg=" "){return" $H$Z".($z!==null?$vg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$nb){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){$H="SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema()";if(support('materializedview'))$H.="
UNION ALL
SELECT matviewname, 'MATERIALIZED VIEW'
FROM pg_matviews
WHERE schemaname = current_schema()";$H.="
ORDER BY 1";return
get_key_vals($H);}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' WHEN 'mv' THEN 'materialized view' WHEN 'f' THEN 'foreign table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v','mv','f')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($R){return
in_array($R["Engine"],array("view","materialized view"));}function
fk_support($R){return
true;}function
fields($Q){$J=array();$Ca=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?([a-z ]+)?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$y,$K["length"],$wa,$Fa)=$B;$K["length"].=$Fa;$cb=$U.$wa;if(isset($Ca[$cb])){$K["type"]=$Ca[$cb];$K["full_type"]=$K["type"].$y.$Fa;}else{$K["type"]=$U;$K["full_type"]=$K["type"].$y.$wa.$Fa;}$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$i=null){global$h;if(!is_object($i))$i=$h;$J=array();$Ug=$i->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ug AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Ug AND ci.oid = i.indexrelid",$i)as$K){$Zf=$K["relname"];$J[$Zf]["type"]=($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX"));$J[$Zf]["columns"]=array();foreach(explode(" ",$K["indkey"])as$qd)$J[$Zf]["columns"][]=$f[$qd];$J[$Zf]["descs"]=array();foreach(explode(" ",$K["indoption"])as$rd)$J[$Zf]["descs"][]=($rd&1?'1':null);$J[$Zf]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$Ne;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$de)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$de[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$de[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($Ne)~",$B[4],$de)?$de[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Ne)~",$B[4],$de)?$de[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($m){return($m=="information_schema");}function
error(){global$h;$J=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($l){global$h;$h->close();return
apply_queries("DROP DATABASE",$l,'idf_escape');}function
rename_database($C,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$of){$c=array();$Mf=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c[]="DROP $e";else{$Sh=$X[5];unset($X[5]);if(isset($X[6])&&$o[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($o[0]=="")$c[]=($Q!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$Mf[]="ALTER TABLE ".table($Q)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($o[0]!=""||$Sh!="")$Mf[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Sh!=""?substr($Sh,9):"''");}}$c=array_merge($c,$Mc);if($Q=="")array_unshift($Mf,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Mf,"ALTER TABLE ".table($Q)."\n".implode(",\n",$c));if($Q!=""&&$Q!=$C)$Mf[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$rb!="")$Mf[]="COMMENT ON TABLE ".table($C)." IS ".q($rb);if($La!=""){}foreach($Mf
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$c){$j=array();$Yb=array();$Mf=array();foreach($c
as$X){if($X[0]!="INDEX")$j[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Yb[]=idf_escape($X[1]);else$Mf[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." (".implode(", ",$X[2]).")";}if($j)array_unshift($Mf,"ALTER TABLE ".table($Q).implode(",",$j));if($Yb)array_unshift($Mf,"DROP INDEX ".implode(", ",$Yb));foreach($Mf
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Yh){return
drop_tables($Yh);}function
drop_tables($S){foreach($S
as$Q){$Ig=table_status($Q);if(!queries("DROP ".strtoupper($Ig["Engine"])." ".table($Q)))return
false;}return
true;}function
move_tables($S,$Yh,$bh){foreach(array_merge($S,$Yh)as$Q){$Ig=table_status($Q);if(!queries("ALTER ".strtoupper($Ig["Engine"])." ".table($Q)." SET SCHEMA ".idf_escape($bh)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$L=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($Q))as$K)$J[$K["trigger_name"]]=array($K["condition_timing"],$K["event_manipulation"]);return$J;}function
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
explain($h,$H){return$h->query("EXPLAIN $H");}function
found_rows($R,$Z){global$h;if(preg_match("~ rows=([0-9]+)~",$h->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Yf))return$Yf[1];return
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
set_schema($og){global$h,$Bh,$Lg;$J=$h->query("SET search_path TO ".idf_escape($og));foreach(types()as$U){if(!isset($Bh[$U])){$Bh[$U]=0;$Lg[lang(23)][]=$U;}}return$J;}function
use_sql($Gb){return"\connect ".idf_escape($Gb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$h;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($h->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Fc){global$h;return
preg_match('~^(database|table|columns|sql|indexes|comment|view|'.($h->server_info>=9.3?'materializedview|':'').'scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$Fc);}$w="pgsql";$Bh=array();$Lg=array();foreach(array(lang(24)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(25)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(26)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(27)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(28)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(29)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$x=>$X){$Bh+=$X;$Lg[$x]=array_keys($X);}$Ih=array();$Se=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","ILIKE","ILIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Uc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Zc=array("avg","count","count distinct","max","min","sum");$fc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Xb["oracle"]="Oracle";if(isset($_GET["oracle"])){$_f=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($qc,$n){if(ini_bool("html_errors"))$n=html_entity_decode(strip_tags($n));$n=preg_replace('~^[^:]*: ~','',$n);$this->error=$n;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Gb){return
true;}function
query($H,$Ch=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$n=oci_error($this->_link);$this->errno=$n["code"];$this->error=$n["message"];return
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
select_db($Gb){return
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
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$D=0,$vg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($m,$nb){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($l){return
array();}function
table_status($C=""){$J=array();$qg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $qg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $qg":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$y="$K[DATA_PRECISION],$K[DATA_SCALE]";if($y==",")$y=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($y?"($y)":""),"type"=>strtolower($U),"length"=>$y,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$i=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$K){$od=$K["INDEX_NAME"];$J[$od]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$od]["columns"][]=$K["COLUMN_NAME"];$J[$od]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$od]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
explain($h,$H){$h->query("EXPLAIN PLAN FOR $H");return$h->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$of){$c=$Yb=array();foreach($p
as$o){$X=$o[1];if($X&&$o[0]!=""&&idf_escape($o[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($o[0])." TO $X[0]");if($X)$c[]=($Q!=""?($o[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$Yb[]=idf_escape($o[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$c)))&&(!$Yb||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$Yb).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){$J=array();$H="SELECT c_list.CONSTRAINT_NAME as NAME,
c_src.COLUMN_NAME as SRC_COLUMN,
c_dest.OWNER as DEST_DB,
c_dest.TABLE_NAME as DEST_TABLE,
c_dest.COLUMN_NAME as DEST_COLUMN,
c_list.DELETE_RULE as ON_DELETE
FROM ALL_CONSTRAINTS c_list, ALL_CONS_COLUMNS c_src, ALL_CONS_COLUMNS c_dest
WHERE c_list.CONSTRAINT_NAME = c_src.CONSTRAINT_NAME
AND c_list.R_CONSTRAINT_NAME = c_dest.CONSTRAINT_NAME
AND c_list.CONSTRAINT_TYPE = 'R'
AND c_src.TABLE_NAME = ".q($Q);foreach(get_rows($H)as$K)$J[$K['NAME']]=array("db"=>$K['DEST_DB'],"table"=>$K['DEST_TABLE'],"source"=>array($K['SRC_COLUMN']),"target"=>array($K['DEST_COLUMN']),"on_delete"=>$K['ON_DELETE'],"on_update"=>null,);return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Yh){return
apply_queries("DROP VIEW",$Yh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$h;return$h->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($pg){global$h;return$h->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($pg));}function
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
support($Fc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Fc);}$w="oracle";$Bh=array();$Lg=array();foreach(array(lang(24)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(25)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(26)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(27)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$x=>$X){$Bh+=$X;$Lg[$x]=array_keys($X);}$Ih=array();$Se=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Uc=array("length","lower","round","upper");$Zc=array("avg","count","count distinct","max","min","sum");$fc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Xb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$_f=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->errno=$n["code"];$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$sd=sqlsrv_server_info($this->_link);$this->server_info=$sd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Gb){return$this->query("USE ".idf_escape($Gb));}function
query($H,$Ch=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
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
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'DateTime'))$K[$x]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$o=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$o["Name"];$J->orgname=$o["Name"];$J->type=($o["Type"]==1?254:0);return$J;}function
seek($D){for($s=0;$s<$D;$s++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Gb){return
mssql_select_db($Gb);}function
query($H,$Ch=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$o=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$o);}}class
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
insertUpdate($Q,$L,$Cf){foreach($L
as$O){$Jh=array();$Z=array();foreach($O
as$x=>$X){$Jh[]="$x = $X";if(isset($Cf[idf_unescape($x)]))$Z[]="$x = $X";}if(!queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Jh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($t){return"[".str_replace("]","]]",$t)."]";}function
table($t){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($H,$Z,$z,$D=0,$vg=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$nb){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($m));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($l){global$h;$J=array();foreach($l
as$m){$h->select_db($m);$J[$m]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
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
information_schema($m){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($l){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$l)));}function
rename_database($C,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".number($_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$of){$c=array();foreach($p
as$o){$e=idf_escape($o[0]);$X=$o[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($o[0]=="")$c["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Mc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Mc)$c[""]=$Mc;foreach($c
as$x=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $x".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$c){$u=array();$Yb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Yb[]=idf_escape($X[1]);else$u[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$u||queries("DROP INDEX ".implode(", ",$u)))&&(!$Yb||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$Yb)));}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$H){$h->query("SET SHOWPLAN_ALL ON");$J=$h->query($H);$h->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$q=&$J[$K["FK_NAME"]];$q["table"]=$K["PKTABLE_NAME"];$q["source"][]=$K["FKCOLUMN_NAME"];$q["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Yh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Yh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Yh,$bh){return
apply_queries("ALTER SCHEMA ".idf_escape($bh)." TRANSFER",array_merge($S,$Yh));}function
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
array("Timing"=>array("AFTER","INSTEAD OF"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!="")return$_GET["ns"];return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($og){return
true;}function
use_sql($Gb){return"USE ".idf_escape($Gb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
support($Fc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Fc);}$w="mssql";$Bh=array();$Lg=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(25)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(26)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(27)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$x=>$X){$Bh+=$X;$Lg[$x]=array_keys($X);}$Ih=array();$Se=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Uc=array("len","lower","round","upper");$Zc=array("avg","count","count distinct","max","min","sum");$fc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Xb['firebird']='Firebird (alpha)';if(isset($_GET["firebird"])){$_f=array("interbase");define("DRIVER","firebird");if(extension_loaded("interbase")){class
Min_DB{var$extension="Firebird",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=ibase_connect($N,$V,$G);if($this->_link){$Lh=explode(':',$N);$this->service_link=ibase_service_attach($Lh[0],$V,$G);$this->server_info=ibase_server_info($this->service_link,IBASE_SVC_SERVER_VERSION);}else{$this->errno=ibase_errcode();$this->error=ibase_errmsg();}return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Gb){return($Gb=="domain");}function
query($H,$Ch=false){$I=ibase_query($H,$this->_link);if(!$I){$this->errno=ibase_errcode();$this->error=ibase_errmsg();return
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
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return
ibase_fetch_assoc($this->_result);}function
fetch_row(){return
ibase_fetch_row($this->_result);}function
fetch_field(){$o=ibase_field_info($this->_result,$this->_offset++);return(object)array('name'=>$o['name'],'orgname'=>$o['name'],'type'=>$o['type'],'charsetnr'=>$o['length'],);}function
__destruct(){ibase_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
get_databases($Lc){return
array("domain");}function
limit($H,$Z,$z,$D=0,$vg=" "){$J='';$J.=($z!==null?$vg."FIRST $z".($D?" SKIP $D":""):"");$J.=" $H$Z";return$J;}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$nb){}function
engines(){return
array();}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
tables_list(){global$h;$H='SELECT RDB$RELATION_NAME FROM rdb$relations WHERE rdb$system_flag = 0';$I=ibase_query($h->_link,$H);$J=array();while($K=ibase_fetch_assoc($I))$J[$K['RDB$RELATION_NAME']]='table';ksort($J);return$J;}function
count_tables($l){return
array();}function
table_status($C="",$Ec=false){global$h;$J=array();$Eb=tables_list();foreach($Eb
as$u=>$X){$u=trim($u);$J[$u]=array('Name'=>$u,'Engine'=>'standard',);if($C==$u)return$J[$u];}return$J;}function
is_view($R){return
false;}function
fk_support($R){return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"]);}function
fields($Q){global$h;$J=array();$H='SELECT r.RDB$FIELD_NAME AS field_name,
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
WHERE r.RDB$RELATION_NAME = '.q($Q).'
ORDER BY r.RDB$FIELD_POSITION';$I=ibase_query($h->_link,$H);while($K=ibase_fetch_assoc($I))$J[trim($K['FIELD_NAME'])]=array("field"=>trim($K["FIELD_NAME"]),"full_type"=>trim($K["FIELD_TYPE"]),"type"=>trim($K["FIELD_SUB_TYPE"]),"default"=>trim($K['FIELD_DEFAULT_VALUE']),"null"=>(trim($K["FIELD_NOT_NULL_CONSTRAINT"])=="YES"),"auto_increment"=>'0',"collation"=>trim($K["FIELD_COLLATION"]),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"comment"=>trim($K["FIELD_DESCRIPTION"]),);return$J;}function
indexes($Q,$i=null){$J=array();return$J;}function
foreign_keys($Q){return
array();}function
collations(){return
array();}function
information_schema($m){return
false;}function
error(){global$h;return
h($h->error);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($og){return
true;}function
support($Fc){return
preg_match("~^(columns|sql|status|table)$~",$Fc);}$w="firebird";$Se=array("=");$Uc=array();$Zc=array();$fc=array();}$Xb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$_f=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($Gb){return($Gb=="domain");}function
query($H,$Ch=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$Pg=0;foreach($I
as$Ed)$Pg+=$Ed->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Pg,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
Min_Result($I){foreach($I
as$Ed){$K=array();if($Ed->Name!='')$K['itemName()']=(string)$Ed->Name;foreach($Ed->Attribute
as$Ia){$C=$this->_processValue($Ia->Name);$Y=$this->_processValue($Ia->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($ic){return(is_object($ic)&&$ic['encoding']=='base64'?base64_decode($ic):(string)$ic);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Kd=array_keys($this->_rows[0]);return(object)array('name'=>$Kd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$Cf="itemName()";function
_chunkRequest($ld,$va,$F,$yc=array()){global$h;foreach(array_chunk($ld,25)as$gb){$kf=$F;foreach($gb
as$s=>$jd){$kf["Item.$s.ItemName"]=$jd;foreach($yc
as$x=>$X)$kf["Item.$s.$x"]=$X;}if(!sdb_request($va,$kf))return
false;}$h->affected_rows=count($ld);return
true;}function
_extractIds($Q,$Nf,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Nf,$ee))$J=array_map('idf_unescape',$ee[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($Q).$Nf.($z?" LIMIT 1":"")))as$Ed)$J[]=$Ed->Name;}return$J;}function
select($Q,$M,$Z,$Xc,$Xe=array(),$z=1,$E=0,$Ef=false){global$h;$h->next=$_GET["next"];$J=parent::select($Q,$M,$Z,$Xc,$Xe,$z,$E,$Ef);$h->next=0;return$J;}function
delete($Q,$Nf,$z=0){return$this->_chunkRequest($this->_extractIds($Q,$Nf,$z),'BatchDeleteAttributes',array('DomainName'=>$Q));}function
update($Q,$O,$Nf,$z=0,$vg="\n"){$Mb=array();$wd=array();$s=0;$ld=$this->_extractIds($Q,$Nf,$z);$jd=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$x=>$X){$x=idf_unescape($x);if($X=="NULL"||($jd!=""&&array($jd)!=$ld))$Mb["Attribute.".count($Mb).".Name"]=$x;if($X!="NULL"){foreach((array)$X
as$Gd=>$W){$wd["Attribute.$s.Name"]=$x;$wd["Attribute.$s.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Gd)$wd["Attribute.$s.Replace"]="true";$s++;}}}$F=array('DomainName'=>$Q);return(!$wd||$this->_chunkRequest(($jd!=""?array($jd):$ld),'BatchPutAttributes',$F,$wd))&&(!$Mb||$this->_chunkRequest($ld,'BatchDeleteAttributes',$F,$Mb));}function
insert($Q,$O){$F=array("DomainName"=>$Q);$s=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$s.Name"]=$C;$F["Attribute.$s.Value"]=(is_array($Y)?$X:idf_unescape($Y));$s++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($Q,$L,$Cf){foreach($L
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
support($Fc){return
preg_match('~sql~',$Fc);}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($m,$nb){}function
tables_list(){global$h;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$Q)$J[(string)$Q]='table';if($h->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Ec=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$Q=>$U){$K=array("Name"=>$Q,"Auto_increment"=>"");if(!$Ec){$re=sdb_request('DomainMetadata',array('DomainName'=>$Q));if($re){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$x=>$X)$K[$x]=(string)$re->$X;}}if($C!="")return$K;$J[$Q]=$K;}return$J;}function
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
limit($H,$Z,$z,$D=0,$vg=" "){return" $H$Z".($z!==null?$vg."LIMIT $z":"");}function
unconvert_field($o,$J){return$J;}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$of){return($Q==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($S){foreach($S
as$Q){if(!sdb_request('DeleteDomain',array('DomainName'=>$Q)))return
false;}return
true;}function
count_tables($l){foreach($l
as$m)return
array($m=>count(tables_list()));}function
found_rows($R,$Z){return($Z?null:$R["Rows"]);}function
last_id(){}function
hmac($Ba,$Eb,$x,$Rf=false){$Ua=64;if(strlen($x)>$Ua)$x=pack("H*",$Ba($x));$x=str_pad($x,$Ua,"\0");$Hd=$x^str_repeat("\x36",$Ua);$Id=$x^str_repeat("\x5C",$Ua);$J=$Ba($Id.pack("H*",$Ba($Hd.$Eb)));if($Rf)$J=pack("H*",$J);return$J;}function
sdb_request($va,$F=array()){global$b,$h;list($hd,$F['AWSAccessKeyId'],$rg)=$b->credentials();$F['Action']=$va;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$x=>$X)$H.='&'.rawurlencode($x).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$hd)."\n/\n$H",$rg,true)));@ini_set('track_errors',1);$Hc=@file_get_contents((preg_match('~^https?://~',$hd)?$hd:"http://$hd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Hc){$h->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$ei=simplexml_load_string($Hc);if(!$ei){$n=libxml_get_last_error();$h->error=$n->message;return
false;}if($ei->Errors){$n=$ei->Errors->Error;$h->error="$n->Message ($n->Code)";return
false;}$h->error='';$ah=$va."Result";return($ei->$ah?$ei->$ah:true);}function
sdb_request_all($va,$ah,$F=array(),$jh=0){$J=array();$Hg=($jh?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$ei=sdb_request($va,$F);if(!$ei)break;foreach($ei->$ah
as$ic)$J[]=$ic;if($z&&count($J)>=$z){$_GET["next"]=$ei->NextToken;break;}if($jh&&microtime(true)-$Hg>$jh)return
false;$F['NextToken']=$ei->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($ei->NextToken);return$J;}$w="simpledb";$Se=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Uc=array();$Zc=array("count");$fc=array(array("json"));}$Xb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$_f=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$m=$b->database();$Ve=array();if($V!=""){$Ve["username"]=$V;$Ve["password"]=$G;}if($m!="")$Ve["db"]=$m;try{$this->_link=@new
MongoClient("mongodb://$N",$Ve);return
true;}catch(Exception$uc){$this->error=$uc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($Gb){try{$this->_db=$this->_link->selectDB($Gb);return
true;}catch(Exception$uc){$this->error=$uc->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
Min_Result($I){foreach($I
as$Ed){$K=array();foreach($Ed
as$x=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$x]=63;$K[$x]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Kd=array_keys($this->_rows[0]);$C=$Kd[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$Cf="_id";function
select($Q,$M,$Z,$Xc,$Xe=array(),$z=1,$E=0,$Ef=false){$M=($M==array("*")?array():array_fill_keys($M,true));$Cg=array();foreach($Xe
as$X){$X=preg_replace('~ DESC$~','',$X,1,$Ab);$Cg[$X]=($Ab?-1:1);}return
new
Min_Result($this->_conn->_db->selectCollection($Q)->find(array(),$M)->sort($Cg)->limit(+$z)->skip($E*$z));}function
insert($Q,$O){try{$J=$this->_conn->_db->selectCollection($Q)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$uc){$this->_conn->error=$uc->getMessage();return
false;}}}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
error(){global$h;return
h($h->error);}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
get_databases($Lc){global$h;$J=array();$Jb=$h->_link->listDBs();foreach($Jb['databases']as$m)$J[]=$m['name'];return$J;}function
collations(){return
array();}function
db_collation($m,$nb){}function
count_tables($l){global$h;$J=array();foreach($l
as$m)$J[$m]=count($h->_link->selectDB($m)->getCollectionNames(true));return$J;}function
tables_list(){global$h;return
array_fill_keys($h->_db->getCollectionNames(true),'table');}function
table_status($C="",$Ec=false){$J=array();foreach(tables_list()as$Q=>$U){$J[$Q]=array("Name"=>$Q);if($C==$Q)return$J[$Q];}return$J;}function
information_schema(){}function
is_view($R){}function
drop_databases($l){global$h;foreach($l
as$m){$cg=$h->_link->selectDB($m)->drop();if(!$cg['ok'])return
false;}return
true;}function
indexes($Q,$i=null){global$h;$J=array();foreach($h->_db->selectCollection($Q)->getIndexInfo()as$u){$Pb=array();foreach($u["key"]as$e=>$U)$Pb[]=($U==-1?'1':null);$J[$u["name"]]=array("type"=>($u["name"]=="_id_"?"PRIMARY":($u["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($u["key"]),"lengths"=>array(),"descs"=>$Pb,);}return$J;}function
fields($Q){return
fields_from_edit();}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
foreign_keys($Q){return
array();}function
fk_support($R){}function
engines(){return
array();}function
found_rows($R,$Z){global$h;return$h->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$of){global$h;if($Q==""){$h->_db->createCollection($C);return
true;}}function
drop_tables($S){global$h;foreach($S
as$Q){$cg=$h->_db->selectCollection($Q)->drop();if(!$cg['ok'])return
false;}return
true;}function
truncate_tables($S){global$h;foreach($S
as$Q){$cg=$h->_db->selectCollection($Q)->remove();if(!$cg['ok'])return
false;}return
true;}function
alter_indexes($Q,$c){global$h;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$h->_db->command(array("deleteIndexes"=>$Q,"index"=>$C));else{$f=array();foreach($O
as$e){$e=preg_replace('~ DESC$~','',$e,1,$Ab);$f[$e]=($Ab?-1:1);}$J=$h->_db->selectCollection($Q)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$h->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$h;return$h->last_id;}function
table($t){return$t;}function
idf_escape($t){return$t;}function
support($Fc){return
preg_match("~database|indexes~",$Fc);}$w="mongo";$Se=array("=");$Uc=array();$Zc=array();$fc=array(array("json"));}$Xb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$_f=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($rf,$wb=array(),$se='GET'){@ini_set('track_errors',1);$Hc=@file_get_contents($this->_url.'/'.ltrim($rf,'/'),false,stream_context_create(array('http'=>array('method'=>$se,'content'=>json_encode($wb),'ignore_errors'=>1,))));if(!$Hc){$this->error=$php_errormsg;return$Hc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Hc;return
false;}$J=json_decode($Hc,true);if($J===null){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$vb=get_defined_constants(true);foreach($vb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($rf,$wb=array(),$se='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($rf,'/'),$wb,$se);}function
connect($N,$V,$G){$this->_url="http://$V:$G@$N/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($Gb){$this->_db=$Gb;return
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
select($Q,$M,$Z,$Xc,$Xe=array(),$z=1,$E=0,$Ef=false){global$b;$Eb=array();$H="$Q/_search";if($M!=array("*"))$Eb["fields"]=$M;if($Xe){$Cg=array();foreach($Xe
as$lb){$lb=preg_replace('~ DESC$~','',$lb,1,$Ab);$Cg[]=($Ab?array($lb=>"desc"):$lb);}$Eb["sort"]=$Cg;}if($z){$Eb["size"]=+$z;if($E)$Eb["from"]=($E*$z);}foreach($Z
as$X){list($lb,$Qe,$X)=explode(" ",$X,3);if($lb=="_id")$Eb["query"]["ids"]["values"][]=$X;elseif($lb.$X!=""){$eh=array("term"=>array(($lb!=""?$lb:"_all")=>$X));if($Qe=="=")$Eb["query"]["filtered"]["filter"]["and"][]=$eh;else$Eb["query"]["filtered"]["query"]["bool"]["must"][]=$eh;}}if($Eb["query"]&&!$Eb["query"]["filtered"]["query"]&&!$Eb["query"]["ids"])$Eb["query"]["filtered"]["query"]=array("match_all"=>array());$Hg=microtime(true);$qg=$this->_conn->query($H,$Eb);if($Ef)echo$b->selectQuery("$H: ".print_r($Eb,true),format_time($Hg));if(!$qg)return
false;$J=array();foreach($qg['hits']['hits']as$gd){$K=array();if($M==array("*"))$K["_id"]=$gd["_id"];$p=$gd['_source'];if($M!=array("*")){$p=array();foreach($M
as$x)$p[$x]=$gd['fields'][$x];}foreach($p
as$x=>$X){if($Eb["fields"])$X=$X[0];$K[$x]=(is_array($X)?json_encode($X):$X);}$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2]))return$h;return$h->error;}function
support($Fc){return
preg_match("~database|table|columns~",$Fc);}function
logged_user(){global$b;$k=$b->credentials();return$k[1];}function
get_databases(){global$h;$J=$h->rootQuery('_aliases');if($J){$J=array_keys($J);sort($J,SORT_STRING);}return$J;}function
collations(){return
array();}function
db_collation($m,$nb){}function
engines(){return
array();}function
count_tables($l){global$h;$J=$h->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$h;$J=$h->query('_mapping');if($J)$J=array_fill_keys(array_keys($J[$h->_db]["mappings"]),'table');return$J;}function
table_status($C="",$Ec=false){global$h;$qg=$h->query("_search?search_type=count",array("facets"=>array("count_by_type"=>array("terms"=>array("field"=>"_type",)))),"POST");$J=array();if($qg){foreach($qg["facets"]["count_by_type"]["terms"]as$Q)$J[$Q["term"]]=array("Name"=>$Q["term"],"Engine"=>"table","Rows"=>$Q["count"],);if($C!=""&&$C==$Q["term"])return$J[$C];}return$J;}function
error(){global$h;return
h($h->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$i=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($Q){global$h;$I=$h->query("$Q/_mapping");$J=array();if($I){$ce=$I[$Q]['properties'];if(!$ce)$ce=$I[$h->_db]['mappings'][$Q]['properties'];if($ce){foreach($ce
as$C=>$o){$J[$C]=array("field"=>$C,"full_type"=>$o["type"],"type"=>$o["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);if($o["properties"]){unset($J[$C]["privileges"]["insert"]);unset($J[$C]["privileges"]["update"]);}}}}return$J;}function
foreign_keys($Q){return
array();}function
table($t){return$t;}function
idf_escape($t){return$t;}function
convert_field($o){}function
unconvert_field($o,$J){return$J;}function
fk_support($R){}function
found_rows($R,$Z){return
null;}function
create_database($m){global$h;return$h->rootQuery(urlencode($m),array(),'PUT');}function
drop_databases($l){global$h;return$h->rootQuery(urlencode(implode(',',$l)),array(),'DELETE');}function
drop_tables($S){global$h;$J=true;foreach($S
as$Q)$J=$J&&$h->query(urlencode($Q),array(),'DELETE');return$J;}$w="elastic";$Se=array("=","query");$Uc=array();$Zc=array();$fc=array(array("json"));}$Xb=array("server"=>"MySQL")+$Xb;if(!defined("DRIVER")){$_f=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$G){mysqli_report(MYSQLI_REPORT_OFF);list($hd,$wf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$hd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($wf)?$wf:ini_get("mysqli.default_port")),(!is_numeric($wf)?$wf:null));return$J;}function
set_charset($ab){if(parent::set_charset($ab))return
true;parent::set_charset('utf8');return$this->query("SET NAMES $ab");}function
result($H,$o=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$o];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link)$this->server_info=mysql_get_server_info($this->_link);else$this->error=mysql_error();return(bool)$this->_link;}function
set_charset($ab){if(function_exists('mysql_set_charset')){if(mysql_set_charset($ab,$this->_link))return
true;mysql_set_charset('utf8',$this->_link);}return$this->query("SET NAMES $ab");}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Gb){return
mysql_select_db($Gb,$this->_link);}function
query($H,$Ch=false){$I=@($Ch?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
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
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);return
true;}function
set_charset($ab){$this->query("SET NAMES $ab");}function
select_db($Gb){return$this->query("USE ".idf_escape($Gb));}function
query($H,$Ch=false){$this->setAttribute(1000,!$Ch);return
parent::query($H,$Ch);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$O){return($O?parent::insert($Q,$O):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$L,$Cf){$f=array_keys(reset($L));$Af="INSERT INTO ".table($Q)." (".implode(", ",$f).") VALUES\n";$Th=array();foreach($f
as$x)$Th[$x]="$x = VALUES($x)";$Og="\nON DUPLICATE KEY UPDATE ".implode(", ",$Th);$Th=array();$y=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($Th&&(strlen($Af)+$y+strlen($Y)+strlen($Og)>1e6)){if(!queries($Af.implode(",\n",$Th).$Og))return
false;$Th=array();$y=0;}$Th[]=$Y;$y+=strlen($Y)+2;}return
queries($Af.implode(",\n",$Th).$Og);}}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
table($t){return
idf_escape($t);}function
connect(){global$b;$h=new
Min_DB;$k=$b->credentials();if($h->connect($k[0],$k[1],$k[2])){$h->set_charset(charset($h));$h->query("SET sql_quote_show_create = 1, autocommit = 1");return$h;}$J=$h->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($mg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$mg;return$J;}function
get_databases($Lc){global$h;$J=get_session("dbs");if($J===null){$H=($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Lc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$vg=" "){return" $H$Z".($z!==null?$vg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($m,$nb){global$h;$J=null;$j=$h->result("SHOW CREATE DATABASE ".idf_escape($m),1);if(preg_match('~ COLLATE ([^ ]+)~',$j,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$j,$B))$J=$nb[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals($h->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($l){$J=array();foreach($l
as$m)$J[$m]=count(get_vals("SHOW TABLES IN ".idf_escape($m)));return$J;}function
table_status($C="",$Ec=false){global$h;$J=array();foreach(get_rows($Ec&&$h->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){global$h;return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"])||(preg_match('~NDB~i',$R["Engine"])&&version_compare($h->server_info,'5.6')>=0);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$i=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$i)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($Q){global$h,$Ne;static$tf='`(?:[^`]|``)+`';$J=array();$Bb=$h->result("SHOW CREATE TABLE ".table($Q),1);if($Bb){preg_match_all("~CONSTRAINT ($tf) FOREIGN KEY ?\\(((?:$tf,? ?)+)\\) REFERENCES ($tf)(?:\\.($tf))? \\(((?:$tf,? ?)+)\\)(?: ON DELETE ($Ne))?(?: ON UPDATE ($Ne))?~",$Bb,$ee,PREG_SET_ORDER);foreach($ee
as$B){preg_match_all("~$tf~",$B[2],$Dg);preg_match_all("~$tf~",$B[5],$bh);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Dg[0]),"target"=>array_map('idf_unescape',$bh[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
view($C){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$x=>$X)asort($J[$x]);return$J;}function
information_schema($m){global$h;return($h->server_info>=5&&$m=="information_schema")||($h->server_info>=5.5&&$m=="performance_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
error_line(){global$h;if(preg_match('~ at line ([0-9]+)$~',$h->error,$Yf))return$Yf[1]-1;}function
create_database($m,$d){return
queries("CREATE DATABASE ".idf_escape($m).($d?" COLLATE ".q($d):""));}function
drop_databases($l){$J=apply_queries("DROP DATABASE",$l,'idf_escape');restart_session();set_session("dbs",null);return$J;}function
rename_database($C,$d){$J=false;if(create_database($C,$d)){$ag=array();foreach(tables_list()as$Q=>$U)$ag[]=table($Q)." TO ".idf_escape($C).".".table($Q);$J=(!$ag||queries("RENAME TABLE ".implode(", ",$ag)));if($J)queries("DROP DATABASE ".idf_escape(DB));restart_session();set_session("dbs",null);}return$J;}function
auto_increment(){$Ma=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$u){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$u["columns"],true)){$Ma="";break;}if($u["type"]=="PRIMARY")$Ma=" UNIQUE";}}return" AUTO_INCREMENT$Ma";}function
alter_table($Q,$C,$p,$Mc,$rb,$nc,$d,$La,$of){$c=array();foreach($p
as$o)$c[]=($o[1]?($Q!=""?($o[0]!=""?"CHANGE ".idf_escape($o[0]):"ADD"):" ")." ".implode($o[1]).($Q!=""?$o[2]:""):"DROP ".idf_escape($o[0]));$c=array_merge($c,$Mc);$Ig=($rb!==null?" COMMENT=".q($rb):"").($nc?" ENGINE=".q($nc):"").($d?" COLLATE ".q($d):"").($La!=""?" AUTO_INCREMENT=$La":"");if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)$Ig$of");if($Q!=$C)$c[]="RENAME TO ".table($C);if($Ig)$c[]=ltrim($Ig);return($c||$of?queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c).$of):true);}function
alter_indexes($Q,$c){foreach($c
as$x=>$X)$c[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Yh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Yh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Yh,$bh){$ag=array();foreach(array_merge($S,$Yh)as$Q)$ag[]=table($Q)." TO ".idf_escape($bh).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$ag));}function
copy_tables($S,$Yh,$bh){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($bh==DB?table("copy_$Q"):idf_escape($bh).".".table($Q));if(!queries("\nDROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($Yh
as$Q){$C=($bh==DB?table("copy_$Q"):idf_escape($bh).".".table($Q));$Xh=view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Xh[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Event"=>array("INSERT","UPDATE","DELETE"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$h,$pc,$ud,$Bh;$Ca=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Ah="((".implode("|",array_merge(array_keys($Bh),$Ca)).")\\b(?:\\s*\\(((?:[^'\")]|$pc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s,]+)['\"]?)?";$tf="\\s*(".($U=="FUNCTION"?"":$ud).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Ah";$j=$h->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$tf\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Ah\\s+":"")."(.*)~is",$j,$B);$p=array();preg_match_all("~$tf\\s*,?~is",$B[1],$ee,PREG_SET_ORDER);foreach($ee
as$jf){$C=str_replace("``","`",$jf[2]).$jf[3];$p[]=array("field"=>$C,"type"=>strtolower($jf[5]),"length"=>preg_replace_callback("~$pc~s",'normalize_enum',$jf[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$jf[8] $jf[7]"))),"null"=>1,"full_type"=>$jf[4],"inout"=>strtoupper($jf[1]),"collation"=>strtolower($jf[9]),);}if($U!="FUNCTION")return
array("fields"=>$p,"definition"=>$B[11]);return
array("fields"=>$p,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
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
set_schema($og){return
true;}function
create_sql($Q,$La){global$h;$J=$h->result("SHOW CREATE TABLE ".table($Q),1);if(!$La)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Gb){return"USE ".idf_escape($Gb);}function
trigger_sql($Q,$Mg){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$K)$J.="\n".($Mg=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($o){if(preg_match("~binary~",$o["type"]))return"HEX(".idf_escape($o["field"]).")";if($o["type"]=="bit")return"BIN(".idf_escape($o["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))return"AsWKT(".idf_escape($o["field"]).")";}function
unconvert_field($o,$J){if(preg_match("~binary~",$o["type"]))$J="UNHEX($J)";if($o["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$o["type"]))$J="GeomFromText($J)";return$J;}function
support($Fc){global$h;return!preg_match("~scheme|sequence|type|view_trigger".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|routine|trigger|view":""):"")."~",$Fc);}$w="sql";$Bh=array();$Lg=array();foreach(array(lang(24)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(25)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(26)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(30)=>array("enum"=>65535,"set"=>64),lang(27)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(29)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$x=>$X){$Bh+=$X;$Lg[$x]=array_keys($X);}$Ih=array("unsigned","zerofill","unsigned zerofill");$Se=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Uc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Zc=array("avg","count","count distinct","group_concat","max","min","sum");$fc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.2.1";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($j=false){return
password_file($j);}function
bruteForceKey(){return$_SERVER["REMOTE_ADDR"];}function
database(){return
DB;}function
databases($Lc=true){return
get_databases($Lc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Xb;echo'<table cellspacing="0">
<tr><th>',lang(31),'<td>',html_select("auth[driver]",$Xb,DRIVER,"loginDriver(this);"),'<tr><th>',lang(32),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input type="password" name="auth[password]">
<tr><th>',lang(35),'<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
focus(username);
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".lang(36)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(37))."\n";}function
login($ae,$G){return
true;}function
tableName($Sg){return
h($Sg["Name"]);}function
fieldName($o,$Xe=0){return'<span title="'.h($o["full_type"]).'">'.h($o["field"]).'</span>';}function
selectLinks($Sg,$O=""){echo'<p class="links">';$Zd=array("select"=>lang(38));if(support("table")||support("indexes"))$Zd["table"]=lang(39);if(support("table")){if(is_view($Sg))$Zd["view"]=lang(40);else$Zd["create"]=lang(41);}if($O!==null)$Zd["edit"]=lang(42);foreach($Zd
as$x=>$X)echo" <a href='".h(ME)."$x=".urlencode($Sg["Name"]).($x=="edit"?$O:"")."'".bold(isset($_GET[$x])).">$X</a>";echo"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Rg){return
array();}function
backwardKeysPrint($Oa,$K){}function
selectQuery($H,$ih){global$w;return"<p><code class='jush-$w'>".h(str_replace("\n"," ",$H))."</code> <span class='time'>($ih)</span>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>":"")."</p>";}function
rowDescription($Q){return"";}function
rowDescriptions($L,$Nc){return$L;}function
selectLink($X,$o){}function
selectVal($X,$_,$o,$ef){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$o["type"])&&!preg_match("~var~",$o["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$o["type"])&&!is_utf8($X))$J=lang(43,strlen($ef));return($_?"<a href='".h($_)."'".(is_url($_)?" rel='noreferrer'":"").">$J</a>":$J);}function
editVal($X,$o){return$X;}function
selectColumnsPrint($M,$f){global$Uc,$Zc;print_fieldset("select",lang(44),$M);$s=0;$M[""]=array();foreach($M
as$x=>$X){$X=$_GET["columns"][$x];$e=select_input(" name='columns[$s][col]' onchange='".($x!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Uc||$Zc?"<select name='columns[$s][fun]' onchange='helpClose();".($x!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array(lang(45)=>$Uc,lang(46)=>$Zc)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$s++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$v){print_fieldset("search",lang(47),$Z);foreach($v
as$s=>$u){if($u["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$u["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$s]' value='".h($_GET["fulltext"][$s])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$s]",1,isset($_GET["boolean"][$s]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Za="this.nextSibling.onchange();";for($s=0;$s<=count($_GET["where"]);$s++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$s][col]' onchange='$Za'",$f,$X["col"],"(".lang(48).")"),html_select("where[$s][op]",$this->operators,$X["op"],$Za),"<input type='search' name='where[$s][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($Xe,$f,$v){print_fieldset("sort",lang(49),$Xe);$s=0;foreach((array)$_GET["order"]as$x=>$X){if($X!=""){echo"<div>".select_input(" name='order[$s]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$s]",1,isset($_GET["desc"][$x]),lang(50))."</div>\n";$s++;}}echo"<div>".select_input(" name='order[$s]' onchange='selectAddRow(this);'",$f),checkbox("desc[$s]",1,false,lang(50))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(51)."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($hh){if($hh!==null){echo"<fieldset><legend>".lang(52)."</legend><div>","<input type='number' name='text_length' class='size' value='".h($hh)."'>","</div></fieldset>\n";}}function
selectActionPrint($v){echo"<fieldset><legend>".lang(53)."</legend><div>","<input type='submit' value='".lang(44)."'>"," <span id='noindex' title='".lang(54)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($v
as$u){if($u["type"]!="FULLTEXT")$f[reset($u["columns"])]=1;}$f[""]=1;foreach($f
as$x=>$X)json_row($x);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($kc,$f){}function
selectColumnsProcess($f,$v){global$Uc,$Zc;$M=array();$Xc=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Uc)||in_array($X["fun"],$Zc)))){$M[$x]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Zc))$Xc[]=$M[$x];}}return
array($M,$Xc);}function
selectSearchProcess($p,$v){global$h,$w;$J=array();foreach($v
as$s=>$u){if($u["type"]=="FULLTEXT"&&$_GET["fulltext"][$s]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$u["columns"])).") AGAINST (".q($_GET["fulltext"][$s]).(isset($_GET["boolean"][$s])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$tb=" $X[op]";if(preg_match('~IN$~',$X["op"])){$nd=process_length($X["val"]);$tb.=" ".($nd!=""?$nd:"(NULL)");}elseif($X["op"]=="SQL")$tb=" $X[val]";elseif($X["op"]=="LIKE %%")$tb=" LIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif($X["op"]=="ILIKE %%")$tb=" ILIKE ".$this->processInput($p[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$tb.=" ".$this->processInput($p[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$tb;else{$ob=array();foreach($p
as$C=>$o){$Cd=preg_match('~char|text|enum|set~',$o["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$o["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$Cd)){$C=idf_escape($C);$ob[]=($w=="sql"&&$Cd&&!preg_match("~^utf8_~",$o["collation"])?"CONVERT($C USING ".charset($h).")":$C);}}$J[]=($ob?"(".implode("$tb OR ",$ob)."$tb)":"0");}}}return$J;}function
selectOrderProcess($p,$v){$J=array();foreach((array)$_GET["order"]as$x=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$x])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Nc){return
false;}function
selectQueryBuild($M,$Z,$Xc,$Xe,$z,$E){return"";}function
messageQuery($H,$ih){global$w;restart_session();$ed=&get_session("queries");$jd="sql-".count($ed[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$ed[$_GET["db"]][]=array($H,time(),$ih);return" <span class='time'>".@date("H:i:s")."</span> <a href='#$jd' onclick=\"return !toggle('$jd');\">".lang(55)."</a>"."<div id='$jd' class='hidden'><pre><code class='jush-$w'>".shorten_utf8($H,1000).'</code></pre>'.($ih?" <span class='time'>($ih)</span>":'').(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($ed[$_GET["db"]])-1)).'">'.lang(10).'</a>':'').'</div>';}function
editFunctions($o){global$fc;$J=($o["null"]?"NULL/":"");foreach($fc
as$x=>$Uc){if(!$x||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Uc
as$tf=>$X){if(!$tf||preg_match("~$tf~",$o["type"]))$J.="/$X";}if($x&&!preg_match('~set|blob|bytea|raw|file~',$o["type"]))$J.="/SQL";}}if($o["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J=lang(56);return
explode("/",$J);}function
editInput($Q,$o,$Ja,$Y){if($o["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ja value='-1' checked><i>".lang(8)."</i></label> ":"").($o["null"]?"<label><input type='radio'$Ja value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ja,$o,$Y,0);return"";}function
processInput($o,$Y,$r=""){if($r=="SQL")return$Y;$C=$o["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$r))$J="$r()";elseif(preg_match('~^current_(date|timestamp)$~',$r))$J=$r;elseif(preg_match('~^([+-]|\\|\\|)$~',$r))$J=idf_escape($C)." $r $J";elseif(preg_match('~^[+-] interval$~',$r))$J=idf_escape($C)." $r ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$r))$J="$r(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$r))$J="$r($J)";return
unconvert_field($o,$J);}function
dumpOutput(){$J=array('text'=>lang(57),'file'=>lang(58));if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($m){}function
dumpTable($Q,$Mg,$Dd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Mg)dump_csv(array_keys(fields($Q)));}else{if($Dd==2){$p=array();foreach(fields($Q)as$C=>$o)$p[]=idf_escape($C)." $o[full_type]";$j="CREATE TABLE ".table($Q)." (".implode(", ",$p).")";}else$j=create_sql($Q,$_POST["auto_increment"]);set_utf8mb4($j);if($Mg&&$j){if($Mg=="DROP+CREATE"||$Dd==1)echo"DROP ".($Dd==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($Dd==1)$j=remove_definer($j);echo"$j;\n\n";}}}function
dumpData($Q,$Mg,$H){global$h,$w;$ge=($w=="sqlite"?0:1048576);if($Mg){if($_POST["format"]=="sql"){if($Mg=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$p=fields($Q);}$I=$h->query($H,1);if($I){$wd="";$Xa="";$Kd=array();$Og="";$Gc=($Q!=''?'fetch_assoc':'fetch_row');while($K=$I->$Gc()){if(!$Kd){$Th=array();foreach($K
as$X){$o=$I->fetch_field();$Kd[]=$o->name;$x=idf_escape($o->name);$Th[]="$x = VALUES($x)";}$Og=($Mg=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Th):"").";\n";}if($_POST["format"]!="sql"){if($Mg=="table"){dump_csv($Kd);$Mg="INSERT";}dump_csv($K);}else{if(!$wd)$wd="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$Kd)).") VALUES";foreach($K
as$x=>$X){$o=$p[$x];$K[$x]=($X!==null?unconvert_field($o,preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&$X!=''?$X:q($X)):"NULL");}$mg=($ge?"\n":" ")."(".implode(",\t",$K).")";if(!$Xa)$Xa=$wd.$mg;elseif(strlen($Xa)+4+strlen($mg)+strlen($Og)<$ge)$Xa.=",$mg";else{echo$Xa.$Og;$Xa=$wd.$mg;}}}if($Xa)echo$Xa.$Og;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$h->error)."\n";}}function
dumpFilename($kd){return
friendly_url($kd!=""?$kd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($kd,$ve=false){$hf=$_POST["output"];$Ac=(preg_match('~sql~',$_POST["format"])?"sql":($ve?"tar":"csv"));header("Content-Type: ".($hf=="gz"?"application/x-gzip":($Ac=="tar"?"application/x-tar":($Ac=="sql"||$hf!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($hf=="gz")ob_start('ob_gzencode',1e6);return$Ac;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.lang(59)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(60):lang(61))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(62)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(63)."</a>\n":"");return
true;}function
navigation($ue){global$ia,$w,$Xb,$h;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($ue=="auth"){$Kc=true;foreach((array)$_SESSION["pwds"]as$Vh=>$zg){foreach($zg
as$N=>$Qh){foreach($Qh
as$V=>$G){if($G!==null){if($Kc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Kc=false;}$Jb=$_SESSION["db"][$Vh][$N][$V];foreach(($Jb?array_keys($Jb):array(""))as$m)echo"<a href='".h(auth_url($Vh,$N,$V,$m))."'>($Xb[$Vh]) ".h($V.($N!=""?"@$N":"").($m!=""?" - $m":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$ue&&DB!=""){$h->select_db(DB);$S=table_status('',true);}if(support("sql")){echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.2.1",'"></script>
<script type="text/javascript">
';if($S){$Zd=array();foreach($S
as$Q=>$U)$Zd[]=preg_quote($Q,'/');echo"var jushLinks = { $w: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Zd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$w;\n";}echo'bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($ue);if(DB==""||!$ue){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".lang(55)."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".lang(64)."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(65)."</a>\n";}if($_GET["ns"]!==""&&!$ue&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(66)."</a>\n";if(!$S)echo"<p class='message'>".lang(9)."\n";else$this->tablesPrint($S);}}}function
databasesPrint($ue){global$b,$h;$l=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Hb=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".lang(67)."'>DB</span>: ".($l?"<select name='db'$Hb>".optionlist(array(""=>"")+$l,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".lang(20)."'".($l?" class='hidden'":"").">\n";if($ue!="db"&&DB!=""&&$h->select_db(DB)){if(support("scheme")){echo"<br>".lang(68).": <select name='ns'$Hb>".optionlist(array(""=>"")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$Q=>$Ig){echo'<a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q,"select").">".lang(69)."</a> ";$C=$this->tableName($Ig);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($Ig)?"view":""),"structure")." title='".lang(39)."'>$C</a>":"<span>$C</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$Se;function
page_header($lh,$n="",$Wa=array(),$mh=""){global$ca,$ia,$b,$Xb,$w;page_headers();if(is_ajax()&&$n){page_messages($n);exit;}$nh=$lh.($mh!=""?": $mh":"");$oh=strip_tags($nh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="',$ca,'" dir="',lang(70),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>',$oh,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.2.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.2.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.1",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.2.1",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(70),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\"");?>>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = '<?php echo
js_escape(lang(71)),'\';
</script>

<div id="help" class="jush-',$w,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Wa!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Xb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(32));if($Wa===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wa)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Wa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Wa
as$x=>$X){$Ob=(is_array($X)?$X[1]:h($X));if($Ob!="")echo"<a href='".h(ME."$x=").urlencode(is_array($X)?$X[0]:$X)."'>$Ob</a> &raquo; ";}}echo"$lh\n";}}echo"<h2>$nh</h2>\n","<div id='ajaxstatus' class='jsonly hidden'></div>\n";restart_session();page_messages($n);$l=&get_session("dbs");if(DB!=""&&$l&&!in_array(DB,$l,true))$l=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($n){$Kh=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$qe=$_SESSION["messages"][$Kh];if($qe){echo"<div class='message'>".implode("</div>\n<div class='message'>",$qe)."</div>\n";unset($_SESSION["messages"][$Kh]);}if($n)echo"<div class='error'>$n</div>\n";}function
page_footer($ue=""){global$b,$T;echo'</div>

';switch_lang();if($ue!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(72),'" id="logout">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($ue);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($xe){while($xe>=2147483648)$xe-=4294967296;while($xe<=-2147483649)$xe+=4294967296;return(int)$xe;}function
long2str($W,$ai){$mg='';foreach($W
as$X)$mg.=pack('V',$X);if($ai)return
substr($mg,0,end($W));return$mg;}function
str2long($mg,$ai){$W=array_values(unpack('V*',str_pad($mg,4*ceil(strlen($mg)/4),"\0")));if($ai)$W[]=strlen($mg);return$W;}function
xxtea_mx($gi,$fi,$Pg,$Gd){return
int32((($gi>>5&0x7FFFFFF)^$fi<<2)+(($fi>>3&0x1FFFFFFF)^$gi<<4))^int32(($Pg^$fi)+($Gd^$gi));}function
encrypt_string($Kg,$x){if($Kg=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Kg,true);$xe=count($W)-1;$gi=$W[$xe];$fi=$W[0];$Lf=floor(6+52/($xe+1));$Pg=0;while($Lf-->0){$Pg=int32($Pg+0x9E3779B9);$ec=$Pg>>2&3;for($if=0;$if<$xe;$if++){$fi=$W[$if+1];$we=xxtea_mx($gi,$fi,$Pg,$x[$if&3^$ec]);$gi=int32($W[$if]+$we);$W[$if]=$gi;}$fi=$W[0];$we=xxtea_mx($gi,$fi,$Pg,$x[$if&3^$ec]);$gi=int32($W[$xe]+$we);$W[$xe]=$gi;}return
long2str($W,false);}function
decrypt_string($Kg,$x){if($Kg=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Kg,false);$xe=count($W)-1;$gi=$W[$xe];$fi=$W[0];$Lf=floor(6+52/($xe+1));$Pg=int32($Lf*0x9E3779B9);while($Pg){$ec=$Pg>>2&3;for($if=$xe;$if>0;$if--){$gi=$W[$if-1];$we=xxtea_mx($gi,$fi,$Pg,$x[$if&3^$ec]);$fi=int32($W[$if]-$we);$W[$if]=$fi;}$gi=$W[$xe];$we=xxtea_mx($gi,$fi,$Pg,$x[$if&3^$ec]);$fi=int32($W[0]-$we);$W[0]=$fi;$Pg=int32($Pg-0x9E3779B9);}return
long2str($W,true);}$h='';$dd=$_SESSION["token"];if(!$dd)$_SESSION["token"]=rand(1,1e6);$T=get_token();$uf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$uf[$x]=$X;}}function
add_invalid_login(){global$b;$Ic=get_temp_dir()."/adminer.invalid";$Sc=@fopen($Ic,"r+");if(!$Sc){$Sc=@fopen($Ic,"w");if(!$Sc)return;}flock($Sc,LOCK_EX);$zd=unserialize(stream_get_contents($Sc));$ih=time();if($zd){foreach($zd
as$_d=>$X){if($X[0]<$ih)unset($zd[$_d]);}}$yd=&$zd[$b->bruteForceKey()];if(!$yd)$yd=array($ih+30*60,0);$yd[1]++;$xg=serialize($zd);rewind($Sc);fwrite($Sc,$xg);ftruncate($Sc,strlen($xg));flock($Sc,LOCK_UN);fclose($Sc);}$Ka=$_POST["auth"];if($Ka){$zd=unserialize(@file_get_contents(get_temp_dir()."/adminer.invalid"));$yd=$zd[$b->bruteForceKey()];$Ce=($yd[1]>30?$yd[0]-time():0);if($Ce>0)auth_error(lang(73,ceil($Ce/60)));session_regenerate_id();$Vh=$Ka["driver"];$N=$Ka["server"];$V=$Ka["username"];$G=(string)$Ka["password"];$m=$Ka["db"];set_password($Vh,$N,$V,$G);$_SESSION["db"][$Vh][$N][$V][$m]=true;if($Ka["permanent"]){$x=base64_encode($Vh)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($m);$Ff=$b->permanentLogin(true);$uf[$x]="$x:".base64_encode($Ff?encrypt_string($G,$Ff):"");cookie("adminer_permanent",implode(" ",$uf));}if(count($_POST)==1||DRIVER!=$Vh||SERVER!=$N||$_GET["username"]!==$V||DB!=$m)redirect(auth_url($Vh,$N,$V,$m));}elseif($_POST["logout"]){if($dd&&!verify_token()){page_header(lang(72),lang(74));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),lang(75));}}elseif($uf&&!$_SESSION["pwds"]){session_regenerate_id();$Ff=$b->permanentLogin();foreach($uf
as$x=>$X){list(,$hb)=explode(":",$X);list($Vh,$N,$V,$m)=array_map('base64_decode',explode("-",$x));set_password($Vh,$N,$V,decrypt_string(base64_decode($hb),$Ff));$_SESSION["db"][$Vh][$N][$V][$m]=true;}}function
unset_permanent(){global$uf;foreach($uf
as$x=>$X){list($Vh,$N,$V,$m)=array_map('base64_decode',explode("-",$x));if($Vh==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$m==DB)unset($uf[$x]);}cookie("adminer_permanent",implode(" ",$uf));}function
auth_error($n){global$b,$dd;$n=h($n);$_g=session_name();if(isset($_GET["username"])){header("HTTP/1.1 403 Forbidden");if(($_COOKIE[$_g]||$_GET[$_g])&&!$dd)$n=lang(76);else{add_invalid_login();$G=get_password();if($G!==null){if($G===false)$n.='<br>'.lang(77,'<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}if(!$_COOKIE[$_g]&&$_GET[$_g]&&ini_bool("session.use_only_cookies"))$n=lang(78);$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header(lang(36),$n,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");exit;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(79),lang(80,implode(", ",$_f)),false);page_footer("auth");exit;}$h=connect();}$Wb=new
Min_Driver($h);if(!is_object($h)||!$b->login($_GET["username"],get_password()))auth_error((is_string($h)?$h:lang(81)));if($Ka&&$_POST["token"])$_POST["token"]=$T;$n='';if($_POST){if(!verify_token()){$td="max_input_vars";$ke=ini_get($td);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$x){$X=ini_get($x);if($X&&(!$ke||$X<$ke)){$td=$x;$ke=$X;}}}$n=(!$_POST["token"]&&$ke?lang(82,"'$td'"):lang(74).' '.lang(83));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$n=lang(84,"'post_max_size'");if(isset($_GET["sql"]))$n.=' '.lang(85);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
select($I,$i=null,$af=array(),$z=0){global$w;$Zd=array();$v=array();$f=array();$Ta=array();$Bh=array();$J=array();odd('');for($s=0;(!$z||$s<$z)&&($K=$I->fetch_row());$s++){if(!$s){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($Fd=0;$Fd<count($K);$Fd++){$o=$I->fetch_field();$C=$o->name;$Ze=$o->orgtable;$Ye=$o->orgname;$J[$o->table]=$Ze;if($af&&$w=="sql")$Zd[$Fd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($Ze!=""){if(!isset($v[$Ze])){$v[$Ze]=array();foreach(indexes($Ze,$i)as$u){if($u["type"]=="PRIMARY"){$v[$Ze]=array_flip($u["columns"]);break;}}$f[$Ze]=$v[$Ze];}if(isset($f[$Ze][$Ye])){unset($f[$Ze][$Ye]);$v[$Ze][$Ye]=$Fd;$Zd[$Fd]=$Ze;}}if($o->charsetnr==63)$Ta[$Fd]=true;$Bh[$Fd]=$o->type;echo"<th".($Ze!=""||$o->name!=$Ye?" title='".h(($Ze!=""?"$Ze.":"").$Ye)."'":"").">".h($C).($af?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$x=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ta[$x]&&!is_utf8($X))$X="<i>".lang(43,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($Bh[$x]==254)$X="<code>$X</code>";}if(isset($Zd[$x])&&!$f[$Zd[$x]]){if($af&&$w=="sql"){$Q=$K[array_search("table=",$Zd)];$_=$Zd[$x].urlencode($af[$Q]!=""?$af[$Q]:$Q);}else{$_="edit=".urlencode($Zd[$x]);foreach($v[$Zd[$x]]as$lb=>$Fd)$_.="&where".urlencode("[".bracket_escape($lb)."]")."=".urlencode($K[$Fd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($s?"</table>":"<p class='message'>".lang(12))."\n";return$J;}function
referencable_primary($ug){$J=array();foreach(table_status('',true)as$Tg=>$Q){if($Tg!=$ug&&fk_support($Q)){foreach(fields($Tg)as$o){if($o["primary"]){if($J[$Tg]){unset($J[$Tg]);break;}$J[$Tg]=$o;}}}}return$J;}function
textarea($C,$Y,$L=10,$ob=80){global$w;echo"<textarea name='$C' rows='$L' cols='$ob' class='sqlarea jush-$w' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($x,$o,$nb,$Oc=array()){global$Lg,$Bh,$Ih,$Ne;$U=$o["type"];echo'<td><select name="',$x,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),'>';if($U&&!isset($Bh[$U])&&!isset($Oc[$U]))array_unshift($Lg,$U);if($Oc)$Lg[lang(86)]=$Oc;echo
optionlist($Lg,$U),'</select>
<td><input name="',$x,'[length]" value="',h($o["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$o["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();"><td class="options">';echo"<select name='$x"."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.lang(87).')'.optionlist($nb,$o["collation"]).'</select>',($Ih?"<select name='$x"."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($Ih,$o["unsigned"]).'</select>':''),(isset($o['on_update'])?"<select name='$x"."[on_update]'".(preg_match('~timestamp|datetime~',$U)?"":" class='hidden'").'>'.optionlist(array(""=>"(".lang(88).")","CURRENT_TIMESTAMP"),$o["on_update"]).'</select>':''),($Oc?"<select name='$x"."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".lang(89).")".optionlist(explode("|",$Ne),$o["on_delete"])."</select> ":" ");}function
process_length($y){global$pc;return(preg_match("~^\\s*\\(?\\s*$pc(?:\\s*,\\s*$pc)*+\\s*\\)?\\s*\$~",$y)&&preg_match_all("~$pc~",$y,$ee)?"(".implode(",",$ee[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$y)));}function
process_type($o,$mb="COLLATE"){global$Ih;return" $o[type]".process_length($o["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$o["type"])&&in_array($o["unsigned"],$Ih)?" $o[unsigned]":"").(preg_match('~char|text|enum|set~',$o["type"])&&$o["collation"]?" $mb ".q($o["collation"]):"");}function
process_field($o,$_h){global$w;$Lb=$o["default"];return
array(idf_escape(trim($o["field"])),process_type($_h),($o["null"]?" NULL":" NOT NULL"),(isset($Lb)?" DEFAULT ".((preg_match('~time~',$o["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Lb))||($w=="sqlite"&&preg_match('~^CURRENT_(TIME|TIMESTAMP|DATE)$~i',$Lb))||($o["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Lb))||($w=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Lb))?$Lb:q($Lb)):""),(preg_match('~timestamp|datetime~',$o["type"])&&$o["on_update"]?" ON UPDATE $o[on_update]":""),(support("comment")&&$o["comment"]!=""?" COMMENT ".q($o["comment"]):""),($o["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(preg_match("~$x|$X~",$U))return" class='$x'";}}function
edit_fields($p,$nb,$U="TABLE",$Oc=array(),$sb=false){global$h,$ud;echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?lang(90):lang(91)),'<td>',lang(92),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>',lang(93),'<td>',lang(94);if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="',lang(56),'">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td>',lang(95),(support("comment")?"<td".($sb?"":" class='hidden'").">".lang(96):"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.1' alt='+' title='".lang(97)."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$s=>$o){$s++;$bf=$o[($_POST?"orig":"field")];$Sb=(isset($_POST["add"][$s-1])||(isset($o["field"])&&!$_POST["drop_col"][$s]))&&(support("drop_col")||$bf=="");echo'<tr',($Sb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$s][inout]",explode("|",$ud),$o["inout"]):""),'<th>';if($Sb){echo'<input name="fields[',$s,'][field]" value="',h($o["field"]),'" onchange="editingNameChange(this);',($o["field"]!=""||count($p)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$s,'][orig]" value="',h($bf),'">
';edit_type("fields[$s]",$o,$nb,$Oc);if($U=="TABLE"){echo'<td>',checkbox("fields[$s][null]",1,$o["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$s,'"';if($o["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$s][has_default]",1,$o["has_default"]),'<input name="fields[',$s,'][default]" value="',h($o["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($sb?"":" class='hidden'")."><input name='fields[$s][comment]' value='".h($o["comment"])."' maxlength='".($h->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.1' alt='+' title='".lang(97)."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.2.1' alt='^' title='".lang(98)."'>&nbsp;"."<input type='image' class='icon' name='down[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.2.1' alt='v' title='".lang(99)."'>&nbsp;":""),($bf==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$s]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.1' alt='x' title='".lang(100)."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$p){ksort($p);$D=0;if($_POST["up"]){$Qd=0;foreach($p
as$x=>$o){if(key($_POST["up"])==$x){unset($p[$x]);array_splice($p,$Qd,0,array($o));break;}if(isset($o["field"]))$Qd=$D;$D++;}}elseif($_POST["down"]){$Qc=false;foreach($p
as$x=>$o){if(isset($o["field"])&&$Qc){unset($p[key($_POST["down"])]);array_splice($p,$D,0,array($Qc));break;}if(key($_POST["down"])==$x)$Qc=$o;$D++;}}elseif($_POST["add"]){$p=array_values($p);array_splice($p,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($Vc,$Hf,$f,$Me){if(!$Hf)return
true;if($Hf==array("ALL PRIVILEGES","GRANT OPTION"))return($Vc=="GRANT"?queries("$Vc ALL PRIVILEGES$Me WITH GRANT OPTION"):queries("$Vc ALL PRIVILEGES$Me")&&queries("$Vc GRANT OPTION$Me"));return
queries("$Vc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$Hf).$f).$Me);}function
drop_create($Yb,$j,$Zb,$fh,$bc,$A,$pe,$ne,$oe,$Je,$_e){if($_POST["drop"])query_redirect($Yb,$A,$pe);elseif($Je=="")query_redirect($j,$A,$oe);elseif($Je!=$_e){$Cb=queries($j);queries_redirect($A,$ne,$Cb&&queries($Yb));if($Cb)queries($Zb);}else
queries_redirect($A,$ne,queries($fh)&&queries($bc)&&queries($Yb)&&queries($j));}function
create_trigger($Me,$K){global$w;$kh=" $K[Timing] $K[Event]".($K["Event"]=="UPDATE OF"?" ".idf_escape($K["Of"]):"");return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($w=="mssql"?$Me.$kh:$kh.$Me).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($ig,$K){global$ud;$O=array();$p=(array)$K["fields"];ksort($p);foreach($p
as$o){if($o["field"]!="")$O[]=(preg_match("~^($ud)\$~",$o["inout"])?"$o[inout] ":"").idf_escape($o["field"]).process_type($o,"CHARACTER SET");}return"CREATE $ig ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($q){global$Ne;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$q["source"])).") REFERENCES ".table($q["table"])." (".implode(", ",array_map('idf_escape',$q["target"])).")".(preg_match("~^($Ne)\$~",$q["on_delete"])?" ON DELETE $q[on_delete]":"").(preg_match("~^($Ne)\$~",$q["on_update"])?" ON UPDATE $q[on_update]":"");}function
tar_file($Ic,$ph){$J=pack("a100a8a8a8a12a12",$Ic,644,0,0,decoct($ph->size),decoct(time()));$fb=8*32;for($s=0;$s<strlen($J);$s++)$fb+=ord($J[$s]);$J.=sprintf("%06o",$fb)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$ph->send();echo
str_repeat("\0",511-($ph->size+511)%512);}function
ini_bytes($td){$X=ini_get($td);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($sf){global$w,$h;$Mh=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($h->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($h->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($sf[$w]?"<a href='$Mh[$w]$sf[$w]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}function
ob_gzencode($P){return
gzencode($P);}function
db_size($m){global$h;if(!$h->select_db($m))return"?";$J=0;foreach(table_status()as$R)$J+=$R["Data_length"]+$R["Index_length"];return
format_number($J);}function
set_utf8mb4($j){global$h;static$O=false;if(!$O&&preg_match('~\butf8mb4~i',$j)){$O=true;echo"SET NAMES ".charset($h).";\n\n";}}function
connect_error(){global$b,$h,$T,$n,$Xb;if(DB!=""){header("HTTP/1.1 404 Not Found");page_header(lang(35).": ".h(DB),lang(101),true);}else{if($_POST["db"]&&!$n)queries_redirect(substr(ME,0,-1),lang(102),drop_databases($_POST["db"]));page_header(lang(103),$n,false);echo"<p class='links'>\n";foreach(array('database'=>lang(104),'privileges'=>lang(63),'processlist'=>lang(105),'variables'=>lang(106),'status'=>lang(107),)as$x=>$X){if(support($x))echo"<a href='".h(ME)."$x='>$X</a>\n";}echo"<p>".lang(108,$Xb[DRIVER],"<b>".h($h->server_info)."</b>","<b>$h->extension</b>")."\n","<p>".lang(109,"<b>".h(logged_user())."</b>")."\n";$l=$b->databases();if($l){$pg=support("scheme");$nb=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".lang(35)." - <a href='".h(ME)."refresh=1'>".lang(110)."</a>"."<td>".lang(111)."<td>".lang(112)."<td>".lang(113)." - <a href='".h(ME)."dbsize=1' onclick=\"return !ajaxSetHtml('".js_escape(ME)."script=connect');\">".lang(114)."</a>"."</thead>\n";$l=($_GET["dbsize"]?count_tables($l):array_flip($l));foreach($l
as$m=>$S){$hg=h(ME)."db=".urlencode($m);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$m,in_array($m,(array)$_POST["db"])):""),"<th><a href='$hg'>".h($m)."</a>";$d=nbsp(db_collation($m,$nb));echo"<td>".(support("database")?"<a href='$hg".($pg?"&amp;ns=":"")."&amp;database=' title='".lang(59)."'>$d</a>":$d),"<td align='right'><a href='$hg&amp;schema=' id='tables-".h($m)."' title='".lang(62)."'>".($_GET["dbsize"]?$S:"?")."</a>","<td align='right' id='size-".h($m)."'>".($_GET["dbsize"]?db_size($m):"?"),"\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".lang(115)." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".lang(116)."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$T'>\n","</form>\n";}}page_footer("db");}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$h->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header(lang(68).": ".h($_GET["ns"]),lang(117),true);page_footer("ns");exit;}}$Ne="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
TmpFile(){$this->handler=tmpfile();}function
write($xb){$this->size+=strlen($xb);fwrite($this->handler,$xb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$pc="'(?:''|[^'\\\\]|\\\\.)*'";$ud="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$p=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$Wb->select($a,$M,array(where($_GET,$p)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$p=fields($a);if(!$p)$n=error();$R=table_status1($a,true);page_header(($p&&is_view($R)?lang(118):lang(119)).": ".h($a),$n);$b->selectLinks($R);$rb=$R["Comment"];if($rb!="")echo"<p>".lang(96).": ".h($rb)."\n";if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(120)."<td>".lang(92).(support("comment")?"<td>".lang(96):"")."</thead>\n";foreach($p
as$o){echo"<tr".odd()."><th>".h($o["field"]),"<td><span title='".h($o["collation"])."'>".h($o["full_type"])."</span>",($o["null"]?" <i>NULL</i>":""),($o["auto_increment"]?" <i>".lang(56)."</i>":""),(isset($o["default"])?" <span title='".lang(95)."'>[<b>".h($o["default"])."</b>]</span>":""),(support("comment")?"<td>".nbsp($o["comment"]):""),"\n";}echo"</table>\n";}if(!is_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".lang(121)."</h3>\n";$v=indexes($a);if($v){echo"<table cellspacing='0'>\n";foreach($v
as$C=>$u){ksort($u["columns"]);$Ef=array();foreach($u["columns"]as$x=>$X)$Ef[]="<i>".h($X)."</i>".($u["lengths"][$x]?"(".$u["lengths"][$x].")":"").($u["descs"][$x]?" DESC":"");echo"<tr title='".h($C)."'><th>$u[type]<td>".implode(", ",$Ef)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.lang(122)."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".lang(86)."</h3>\n";$Oc=foreign_keys($a);if($Oc){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(123)."<td>".lang(124)."<td>".lang(89)."<td>".lang(88)."<td>&nbsp;</thead>\n";foreach($Oc
as$C=>$q){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$q["source"]))."</i>","<td><a href='".h($q["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($q["db"]),ME):($q["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($q["ns"]),ME):ME))."table=".urlencode($q["table"])."'>".($q["db"]!=""?"<b>".h($q["db"])."</b>.":"").($q["ns"]!=""?"<b>".h($q["ns"])."</b>.":"").h($q["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$q["target"]))."</i>)","<td>".nbsp($q["on_delete"])."\n","<td>".nbsp($q["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.lang(125).'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.lang(126)."</a>\n";}}if(support(is_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".lang(127)."</h3>\n";$zh=triggers($a);if($zh){echo"<table cellspacing='0'>\n";foreach($zh
as$x=>$X)echo"<tr valign='top'><td>".h($X[0])."<td>".h($X[1])."<th>".h($x)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($x))."'>".lang(125)."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.lang(128)."</a>\n";}}elseif(isset($_GET["schema"])){page_header(lang(62),"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Vg=array();$Wg=array();$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE["adminer_schema-".str_replace(".","_",DB)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$ee,PREG_SET_ORDER);foreach($ee
as$s=>$B){$Vg[$B[1]]=array($B[2],$B[3]);$Wg[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$rh=0;$Qa=-1;$og=array();$Wf=array();$Ud=array();foreach(table_status('',true)as$Q=>$R){if(is_view($R))continue;$xf=0;$og[$Q]["fields"]=array();foreach(fields($Q)as$C=>$o){$xf+=1.25;$o["pos"]=$xf;$og[$Q]["fields"][$C]=$o;}$og[$Q]["pos"]=($Vg[$Q]?$Vg[$Q]:array($rh,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$Sd=$Qa;if($Vg[$Q][1]||$Vg[$X["table"]][1])$Sd=min(floatval($Vg[$Q][1]),floatval($Vg[$X["table"]][1]))-1;else$Qa-=.1;while($Ud[(string)$Sd])$Sd-=.0001;$og[$Q]["references"][$X["table"]][(string)$Sd]=array($X["source"],$X["target"]);$Wf[$X["table"]][$Q][(string)$Sd]=$X["target"];$Ud[(string)$Sd]=true;}}$rh=max($rh,$og[$Q]["pos"][0]+2.5+$xf);}echo'<div id="schema" style="height: ',$rh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Wg)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$rh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($og
as$C=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($Q["fields"]as$o){$X='<span'.type_class($o["type"]).' title="'.h($o["full_type"].($o["null"]?" NULL":'')).'">'.h($o["field"]).'</span>';echo"<br>".($o["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$ch=>$Xf){foreach($Xf
as$Sd=>$Tf){$Td=$Sd-$Vg[$C][1];$s=0;foreach($Tf[0]as$Dg)echo"\n<div class='references' title='".h($ch)."' id='refs$Sd-".($s++)."' style='left: $Td"."em; top: ".$Q["fields"][$Dg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Td)."em;'></div></div>";}}foreach((array)$Wf[$C]as$ch=>$Xf){foreach($Xf
as$Sd=>$f){$Td=$Sd-$Vg[$C][1];$s=0;foreach($f
as$bh)echo"\n<div class='references' title='".h($ch)."' id='refd$Sd-".($s++)."' style='left: $Td"."em; top: ".$Q["fields"][$bh]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.2.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Td)."em;'></div></div>";}}echo"\n</div>\n";}foreach($og
as$C=>$Q){foreach((array)$Q["references"]as$ch=>$Xf){foreach($Xf
as$Sd=>$Tf){$te=$rh;$ie=-10;foreach($Tf[0]as$x=>$Dg){$yf=$Q["pos"][0]+$Q["fields"][$Dg]["pos"];$zf=$og[$ch]["pos"][0]+$og[$ch]["fields"][$Tf[1][$x]]["pos"];$te=min($te,$yf,$zf);$ie=max($ie,$yf,$zf);}echo"<div class='references' id='refl$Sd' style='left: $Sd"."em; top: $te"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($ie-$te)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">',lang(129),'</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$n){$_b="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$x)$_b.="&$x=".urlencode($_POST[$x]);cookie("adminer_export",substr($_b,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$Ac=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$Bd=preg_match('~sql~',$_POST["format"]);if($Bd){echo"-- Adminer $ia ".$Xb[DRIVER]." dump\n\n";if($w=="sql"){echo"SET NAMES utf8;
SET time_zone = '+00:00';
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
";$h->query("SET time_zone = '+00:00';");}}$Mg=$_POST["db_style"];$l=array(DB);if(DB==""){$l=$_POST["databases"];if(is_string($l))$l=explode("\n",rtrim(str_replace("\r","",$l),"\n"));}foreach((array)$l
as$m){$b->dumpDatabase($m);if($h->select_db($m)){if($Bd&&preg_match('~CREATE~',$Mg)&&($j=$h->result("SHOW CREATE DATABASE ".idf_escape($m),1))){set_utf8mb4($j);if($Mg=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($m).";\n";echo"$j;\n";}if($Bd){if($Mg)echo
use_sql($m).";\n\n";$gf="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$ig){foreach(get_rows("SHOW $ig STATUS WHERE Db = ".q($m),null,"-- ")as$K){$j=remove_definer($h->result("SHOW CREATE $ig ".idf_escape($K["Name"]),2));set_utf8mb4($j);$gf.=($Mg!='DROP+CREATE'?"DROP $ig IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$j;;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K){$j=remove_definer($h->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3));set_utf8mb4($j);$gf.=($Mg!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"")."$j;;\n\n";}}if($gf)echo"DELIMITER ;;\n\n$gf"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Yh=array();foreach(table_status('',true)as$C=>$R){$Q=(DB==""||in_array($C,(array)$_POST["tables"]));$Eb=(DB==""||in_array($C,(array)$_POST["data"]));if($Q||$Eb){if($Ac=="tar"){$ph=new
TmpFile;ob_start(array($ph,'write'),1e5);}$b->dumpTable($C,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$Yh[]=$C;elseif($Eb){$p=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($p,$p)." FROM ".table($C));}if($Bd&&$_POST["triggers"]&&$Q&&($zh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$zh\nDELIMITER ;\n";if($Ac=="tar"){ob_end_flush();tar_file((DB!=""?"":"$m/")."$C.csv",$ph);}elseif($Bd)echo"\n";}}foreach($Yh
as$Xh)$b->dumpTable($Xh,$_POST["table_style"],1);if($Ac=="tar")echo
pack("x512");}}}if($Bd)echo"-- ".$h->result("SELECT NOW()")."\n";exit;}page_header(lang(65),$n,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Ib=array('','USE','DROP+CREATE','CREATE');$Xg=array('','DROP+CREATE','CREATE');$Fb=array('','TRUNCATE+INSERT','INSERT');if($w=="sql")$Fb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".lang(130)."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".lang(131)."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($w=="sqlite"?"":"<tr><th>".lang(35)."<td>".html_select('db_style',$Ib,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],lang(132)):"").(support("event")?checkbox("events",1,$K["events"],lang(133)):"")),"<tr><th>".lang(112)."<td>".html_select('table_style',$Xg,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],lang(56)).(support("trigger")?checkbox("triggers",1,$K["triggers"],lang(127)):""),"<tr><th>".lang(134)."<td>".html_select('data_style',$Fb,$K["data_style"]),'</table>
<p><input type="submit" value="',lang(65),'">
<input type="hidden" name="token" value="',$T,'">

<table cellspacing="0">
';$Bf=array();if(DB!=""){$db=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$db onclick='formCheck(this, /^tables\\[/);'>".lang(112)."</label>","<th style='text-align: right;'><label class='block'>".lang(134)."<input type='checkbox' id='check-data'$db onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Yh="";$Yg=tables_list();foreach($Yg
as$C=>$U){$Af=preg_replace('~_.*~','',$C);$db=($a==""||$a==(substr($a,-1)=="%"?"$Af%":$C));$Ef="<tr><td>".checkbox("tables[]",$C,$db,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Yh.="$Ef\n";else
echo"$Ef<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$db,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$Bf[$Af]++;}echo$Yh;if($Yg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(35)."</label></thead>\n";$l=$b->databases();if($l){foreach($l
as$m){if(!information_schema($m)){$Af=preg_replace('~_.*~','',$m);echo"<tr><td>".checkbox("databases[]",$m,$a==""||$a=="$Af%",$m,"formUncheck('check-databases');","block")."\n";$Bf[$Af]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Kc=true;foreach($Bf
as$x=>$X){if($x!=""&&$X>1){echo($Kc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$x%")."'>".h($x)."</a>";$Kc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(63));$I=$h->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Vc=$I;if(!$I)$I=$h->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Vc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(33)."<th>".lang(32)."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.lang(10)."</a>\n";if(!$Vc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".lang(10)."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.lang(135)."</a>";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$fd=&get_session("queries");$ed=&$fd[DB];if(!$n&&$_POST["clear"]){$ed=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?lang(64):lang(55)),$n);if(!$n&&$_POST){$Sc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Sc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Sc?fread($Sc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Lf=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$ed||reset(end($ed))!=$Lf){restart_session();$ed[]=array($Lf,time());set_session("queries",$fd);stop_session();}}$Eg="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\r?\n)";$Nb=";";$D=0;$mc=true;$i=connect();if(is_object($i)&&DB!="")$i->select_db(DB);$qb=0;$rc=array();$Yd=0;$lf='[\'"'.($w=="sql"?'`#':($w=="sqlite"?'`[':($w=="mssql"?'[':''))).']|/\\*|-- |$'.($w=="pgsql"?'|\\$[^$]*\\$':'');$sh=microtime(true);parse_str($_COOKIE["adminer_export"],$xa);$dc=$b->dumpFormat();unset($dc["sql"]);while($H!=""){if(!$D&&preg_match("~^$Eg*DELIMITER\\s+(\\S+)~i",$H,$B)){$Nb=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Nb)."\\s*|$lf)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($Qc,$xf)=$B[0];if(!$Qc&&$Sc&&!feof($Sc))$H.=fread($Sc,1e5);else{if(!$Qc&&rtrim($H)=="")break;$D=$xf+strlen($Qc);if($Qc&&rtrim($Qc)!=$Nb){while(preg_match('('.($Qc=='/*'?'\\*/':($Qc=='['?']':(preg_match('~^-- |^#~',$Qc)?"\n":preg_quote($Qc)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$mg=$B[0][0];if(!$mg&&$Sc&&!feof($Sc))$H.=fread($Sc,1e5);else{$D=$B[0][1]+strlen($mg);if($mg[0]!="\\")break;}}}else{$mc=false;$Lf=substr($H,0,$xf);$qb++;$Ef="<pre id='sql-$qb'><code class='jush-$w'>".shorten_utf8(trim($Lf),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$Ef;ob_flush();flush();}$Hg=microtime(true);if($h->multi_query($Lf)&&is_object($i)&&preg_match("~^$Eg*USE\\b~isU",$Lf))$i->query($Lf);do{$I=$h->store_result();$ih=" <span class='time'>(".format_time($Hg).")</span>".(strlen($Lf)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Lf))."'>".lang(10)."</a>":"");if($h->error){echo($_POST["only_errors"]?$Ef:""),"<p class='error'>".lang(136).($h->errno?" ($h->errno)":"").": ".error()."\n";$rc[]=" <a href='#sql-$qb'>$qb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$z=$_POST["limit"];$af=select($I,$i,array(),$z);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n";$De=$I->num_rows;echo"<p>".($De?($z&&$De>$z?lang(137,$z):"").lang(138,$De):""),$ih;$jd="export-$qb";$_c=", <a href='#$jd' onclick=\"return !toggle('$jd');\">".lang(65)."</a><span id='$jd' class='hidden'>: ".html_select("output",$b->dumpOutput(),$xa["output"])." ".html_select("format",$dc,$xa["format"])."<input type='hidden' name='query' value='".h($Lf)."'>"." <input type='submit' name='export' value='".lang(65)."'><input type='hidden' name='token' value='$T'></span>\n";if($i&&preg_match("~^($Eg|\\()*SELECT\\b~isU",$Lf)&&($zc=explain($i,$Lf))){$jd="explain-$qb";echo", <a href='#$jd' onclick=\"return !toggle('$jd');\">EXPLAIN</a>$_c","<div id='$jd' class='hidden'>\n";select($zc,$i,$af);echo"</div>\n";}else
echo$_c;echo"</form>\n";}}else{if(preg_match("~^$Eg*(CREATE|DROP|ALTER)$Eg+(DATABASE|SCHEMA)\\b~isU",$Lf)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($h->info)."'>".lang(139,$h->affected_rows)."$ih\n";}$Hg=microtime(true);}while($h->next_result());$Yd+=substr_count($Lf.$Qc,"\n");$H=substr($H,$D);$D=0;}}}}if($mc)echo"<p class='message'>".lang(140)."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(141,$qb-count($rc))," <span class='time'>(".format_time($sh).")</span>\n";}elseif($rc&&$qb>1)echo"<p class='error'>".lang(136).": ".implode("",$rc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$wc="<input type='submit' value='".lang(142)."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Lf=$_GET["sql"];if($_POST)$Lf=$_POST["query"];elseif($_GET["history"]=="all")$Lf=$ed;elseif($_GET["history"]!="")$Lf=$ed[$_GET["history"]][0];echo"<p>";textarea("query",$Lf,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$wc\n",lang(143).": <input type='number' name='limit' class='size' value='".h($_POST?$_POST["limit"]:$_GET["limit"])."'>\n";}else{echo"<fieldset><legend>".lang(144)."</legend><div>",(ini_bool("file_uploads")?"SQL (&lt; ".ini_get("upload_max_filesize")."B): <input type='file' name='sql_file[]' multiple>\n$wc":lang(145)),"</div></fieldset>\n","<fieldset><legend>".lang(146)."</legend><div>",lang(147,"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(148).'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),lang(149))."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),lang(150))."\n","<input type='hidden' name='token' value='$T'>\n";if(!isset($_GET["import"])&&$ed){print_fieldset("history",lang(151),$_GET["history"]!="");for($X=end($ed);$X;$X=prev($ed)){$x=key($ed);list($Lf,$ih,$hc)=$X;echo'<a href="'.h(ME."sql=&history=$x").'">'.lang(10)."</a>"." <span class='time' title='".@date('Y-m-d',$ih)."'>".@date("H:i:s",$ih)."</span>"." <code class='jush-$w'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Lf)))),80,"</code>").($hc?" <span class='time'>($hc)</span>":"")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(152)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(153)."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$p=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$p):""):where($_GET,$p));$Jh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($p
as$C=>$o){if(!isset($o["privileges"][$Jh?"update":"insert"])||$b->fieldName($o)=="")unset($p[$C]);}if($_POST&&!$n&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($Jh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$v=indexes($a);$Eh=unique_array($_GET["where"],$v);$Of="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,lang(154),$Wb->delete($a,$Of,!$Eh));else{$O=array();foreach($p
as$C=>$o){$X=process_input($o);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($Jh){if(!$O)redirect($A);queries_redirect($A,lang(155),$Wb->update($a,$O,$Of,!$Eh));if(is_ajax()){page_headers();page_messages($n);exit;}}else{$I=$Wb->insert($a,$O);$Rd=($I?last_id():0);queries_redirect($A,lang(156,($Rd?" $Rd":"")),$I);}}}$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($p
as$C=>$o){if(isset($o["privileges"]["select"])){$Ga=convert_field($o);if($_POST["clone"]&&$o["auto_increment"])$Ga="''";if($w=="sql"&&preg_match("~enum|set~",$o["type"]))$Ga="1*".idf_escape($C);$M[]=($Ga?"$Ga AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$Wb->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$p){if(!$Z){$I=$Wb->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($Wb->primary=>"");}if($K){foreach($K
as$x=>$X){if(!$Z)$K[$x]=null;$p[$x]=array("field"=>$x,"null"=>($x!=$Wb->primary),"auto_increment"=>($x==$Wb->primary));}}}edit_form($a,$p,$K,$Jh);}elseif(isset($_GET["create"])){$a=$_GET["create"];$mf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$x)$mf[$x]=$x;$Vf=referencable_primary($a);$Oc=array();foreach($Vf
as$Tg=>$o)$Oc[str_replace("`","``",$Tg)."`".str_replace("`","``",$o["field"])]=$Tg;$df=array();$R=array();if($a!=""){$df=fields($a);$R=table_status($a);if(!$R)$n=lang(9);}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$n){if($_POST["drop"])queries_redirect(substr(ME,0,-1),lang(157),drop_tables(array($a)));else{$p=array();$Da=array();$Nh=false;$Mc=array();ksort($K["fields"]);$cf=reset($df);$Aa=" FIRST";foreach($K["fields"]as$x=>$o){$q=$Oc[$o["type"]];$_h=($q!==null?$Vf[$q]:$o);if($o["field"]!=""){if(!$o["has_default"])$o["default"]=null;if($x==$K["auto_increment_col"])$o["auto_increment"]=true;$Jf=process_field($o,$_h);$Da[]=array($o["orig"],$Jf,$Aa);if($Jf!=process_field($cf,$cf)){$p[]=array($o["orig"],$Jf,$Aa);if($o["orig"]!=""||$Aa)$Nh=true;}if($q!==null)$Mc[idf_escape($o["field"])]=($a!=""&&$w!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Oc[$o["type"]],'source'=>array($o["field"]),'target'=>array($_h["field"]),'on_delete'=>$o["on_delete"],));$Aa=" AFTER ".idf_escape($o["field"]);}elseif($o["orig"]!=""){$Nh=true;$p[]=array($o["orig"]);}if($o["orig"]!=""){$cf=next($df);if(!$cf)$Aa="";}}$of="";if($mf[$K["partition_by"]]){$pf=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$x=>$X){$Y=$K["partition_values"][$x];$pf[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$of.="\nPARTITION BY $K[partition_by]($K[partition])".($pf?" (".implode(",",$pf)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$of.="\nREMOVE PARTITIONING";$me=lang(158);if($a==""){cookie("adminer_engine",$K["Engine"]);$me=lang(159);}$C=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$me,alter_table($a,$C,($w=="sqlite"&&($Nh||$Mc)?$Da:$p),$Mc,($K["Comment"]!=$R["Comment"]?$K["Comment"]:null),($K["Engine"]&&$K["Engine"]!=$R["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$R["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?number($K["Auto_increment"]):""),$of));}}page_header(($a!=""?lang(41):lang(66)),$n,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Bh["int"])?"int":(isset($Bh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$R;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($df
as$o){$o["has_default"]=isset($o["default"]);$K["fields"][]=$o;}if(support("partitioning")){$Tc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$h->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Tc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$pf=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Tc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$pf[""]="";$K["partition_names"]=array_keys($pf);$K["partition_values"]=array_values($pf);}}}$nb=collations();$oc=engines();foreach($oc
as$nc){if(!strcasecmp($nc,$K["Engine"])){$K["Engine"]=$nc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo
lang(160),': <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($oc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".lang(161).")")+$oc,$K["Engine"])."</select>":""),' ',($nb&&!preg_match("~sqlite|mssql~",$w)?html_select("Collation",array(""=>"(".lang(87).")")+$nb,$K["Collation"]):""),' <input type="submit" value="',lang(14),'">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$sb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$sb){foreach($K["fields"]as$o){if($o["comment"]!=""){$sb=true;break;}}}edit_fields($K["fields"],$nb,"TABLE",$Oc,$sb);echo'</table>
<p>
',lang(56),': <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,lang(162),"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($sb?" checked":"").">".lang(96)."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($h->server_info>=5.5?2048:60).'"'.($sb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(14),'">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}if(support("partitioning")){$nf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",lang(163),$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$mf,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
',lang(164),': <input type="number" name="partitions" class="size',($nf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($nf?"":" class='hidden'"),'>
<thead><tr><th>',lang(165),'<th>',lang(166),'</thead>
';foreach($K["partition_names"]as$x=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($x==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$x]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$pd=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($h->server_info>=5.6?'|InnoDB':'').'~i',$R["Engine"]))$pd[]="FULLTEXT";$v=indexes($a);$Cf=array();if($w=="mongo"){$Cf=$v["_id_"];unset($pd[0]);unset($v["_id_"]);}$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$u){$C=$u["name"];if(in_array($u["type"],$pd)){$f=array();$Wd=array();$Pb=array();$O=array();ksort($u["columns"]);foreach($u["columns"]as$x=>$e){if($e!=""){$y=$u["lengths"][$x];$Ob=$u["descs"][$x];$O[]=idf_escape($e).($y?"(".(+$y).")":"").($Ob?" DESC":"");$f[]=$e;$Wd[]=($y?$y:null);$Pb[]=$Ob;}}if($f){$xc=$v[$C];if($xc){ksort($xc["columns"]);ksort($xc["lengths"]);ksort($xc["descs"]);if($u["type"]==$xc["type"]&&array_values($xc["columns"])===$f&&(!$xc["lengths"]||array_values($xc["lengths"])===$Wd)&&array_values($xc["descs"])===$Pb){unset($v[$C]);continue;}}$c[]=array($u["type"],$C,$O);}}}foreach($v
as$C=>$xc)$c[]=array($xc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),lang(167),alter_indexes($a,$c));}page_header(lang(121),$n,array("table"=>$a),h($a));$p=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$x=>$u){if($u["columns"][count($u["columns"])]!="")$K["indexes"][$x]["columns"][]="";}$u=end($K["indexes"]);if($u["type"]||array_filter($u["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($v
as$x=>$u){$v[$x]["name"]=$x;$v[$x]["columns"][]="";}$v[]=array("columns"=>array(1=>""));$K["indexes"]=$v;}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th>',lang(168),'<th><input type="submit" style="left: -1000px; position: absolute;">',lang(169),'<th>',lang(170);?>
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.2.1' alt='+' title='<?php echo
lang(97),'\'></noscript>&nbsp;
</thead>
';if($Cf){echo"<tr><td>PRIMARY<td>";foreach($Cf["columns"]as$x=>$e){echo
select_input(" disabled",$p,$e),"<label><input disabled type='checkbox'>".lang(50)."</label> ";}echo"<td><td>\n";}$Fd=1;foreach($K["indexes"]as$u){if(!$_POST["drop_col"]||$Fd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$Fd][type]",array(-1=>"")+$pd,$u["type"],($Fd==count($K["indexes"])?"indexesAddRow(this);":1)),"<td>";ksort($u["columns"]);$s=1;foreach($u["columns"]as$x=>$e){echo"<span>".select_input(" name='indexes[$Fd][columns][$s]' onchange=\"".($s==count($u["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($w=="sql"?"":$_GET["indexes"]."_")."');\"",($p?array_combine($p,$p):$p),$e),($w=="sql"||$w=="mssql"?"<input type='number' name='indexes[$Fd][lengths][$s]' class='size' value='".h($u["lengths"][$x])."'>":""),($w!="sql"?checkbox("indexes[$Fd][descs][$s]",1,$u["descs"][$x],lang(50)):"")," </span>";$s++;}echo"<td><input name='indexes[$Fd][name]' value='".h($u["name"])."' autocapitalize='off'>\n","<td><input type='image' class='icon' name='drop_col[$Fd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.2.1' alt='x' title='".lang(100)."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$Fd++;}echo'</table>
<p>
<input type="submit" value="',lang(14),'">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$n&&!isset($_POST["add_x"])){$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(171),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),lang(172),rename_database($C,$K["collation"]));}else{$l=explode("\n",str_replace("\r","",$C));$Ng=true;$Qd="";foreach($l
as$m){if(count($l)==1||$m!=""){if(!create_database($m,$K["collation"]))$Ng=false;$Qd=$m;}}restart_session();set_session("dbs",null);queries_redirect(ME."db=".urlencode($Qd),lang(173),$Ng);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),lang(174));}}page_header(DB!=""?lang(59):lang(175),$n,array(),h(DB));$nb=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$nb);elseif($w=="sql"){foreach(get_vals("SHOW GRANTS")as$Vc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Vc,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($nb?html_select("collation",array(""=>"(".lang(87).")")+$nb,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(116)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.2.1' alt='+' title='".lang(97)."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$n){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,lang(176));else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,lang(177));elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,lang(178));else
redirect($_);}}page_header($_GET["ns"]!=""?lang(60):lang(61),$n);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="<?php echo
lang(14),'">
';if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".lang(116)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header(lang(179).": ".h($da),$n);$ig=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$nd=array();$gf=array();foreach($ig["fields"]as$s=>$o){if(substr($o["inout"],-3)=="OUT")$gf[$s]="@".idf_escape($o["field"])." AS ".idf_escape($o["field"]);if(!$o["inout"]||substr($o["inout"],0,2)=="IN")$nd[]=$s;}if(!$n&&$_POST){$Ya=array();foreach($ig["fields"]as$x=>$o){if(in_array($x,$nd)){$X=process_input($o);if($X===false)$X="''";if(isset($gf[$x]))$h->query("SET @".idf_escape($o["field"])." = $X");}$Ya[]=(isset($gf[$x])?"@".idf_escape($o["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Ya).")";echo"<p><code class='jush-$w'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(10)."</a>\n";if(!$h->multi_query($H))echo"<p class='error'>".error()."\n";else{$i=connect();if(is_object($i))$i->select_db(DB);do{$I=$h->store_result();if(is_object($I))select($I,$i);else
echo"<p class='message'>".lang(180,$h->affected_rows)."\n";}while($h->next_result());if($gf)select($h->query("SELECT ".implode(", ",$gf)));}}echo'
<form action="" method="post">
';if($nd){echo"<table cellspacing='0'>\n";foreach($nd
as$x){$o=$ig["fields"][$x];$C=$o["field"];echo"<tr><th>".$b->fieldName($o);$Y=$_POST["fields"][$C];if($Y!=""){if($o["type"]=="enum")$Y=+$Y;if($o["type"]=="set")$Y=array_sum($Y);}input($o,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(179),'">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$me=($_POST["drop"]?lang(181):($C!=""?lang(182):lang(183)));$A=ME."table=".urlencode($a);$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$bh=array();foreach($K["source"]as$x=>$X)$bh[$x]=$K["target"][$x];$K["target"]=$bh;if($w=="sqlite")queries_redirect($A,$me,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Yb="\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$Yb,$A,$me);else{query_redirect($c.($C!=""?"$Yb,":"")."\nADD".format_foreign_key($K),$A,$me);$n=lang(184)."<br>$n";}}}page_header(lang(185),$n,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Oc=foreign_keys($a);$K=$Oc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$Dg=array_keys(fields($a));$bh=($a===$K["table"]?$Dg:array_keys(fields($K["table"])));$Uf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo
lang(186),':
',html_select("table",$Uf,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(187),'"></noscript>
<table cellspacing="0">
<thead><tr><th>',lang(123),'<th>',lang(124),'</thead>
';$Fd=0;foreach($K["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$Dg,$X,($Fd==count($K["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$x)."]",$bh,$K["target"][$x]);$Fd++;}echo'</table>
<p>
',lang(89),': ',html_select("on_delete",array(-1=>"")+explode("|",$Ne),$K["on_delete"]),' ',lang(88),': ',html_select("on_update",array(-1=>"")+explode("|",$Ne),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="',lang(14),'">
<noscript><p><input type="submit" name="add" value="',lang(188),'"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;if($_POST&&!$n){$C=trim($K["name"]);$Ga=" AS\n$K[select]";$A=ME."table=".urlencode($C);$me=lang(189);if($_GET["materialized"])$U="MATERIALIZED VIEW";else{$U="VIEW";if($w=="pgsql"){$Ig=table_status($C);$U=($Ig?strtoupper($Ig["Engine"]):$U);}}if(!$_POST["drop"]&&$a==$C&&$w!="sqlite"&&$U!="MATERIALIZED VIEW")query_redirect(($w=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ga,$A,$me);else{$dh=$C."_adminer_".uniqid();drop_create("DROP $U ".table($a),"CREATE $U ".table($C).$Ga,"DROP $U ".table($C),"CREATE $U ".table($dh).$Ga,"DROP $U ".table($dh),($_POST["drop"]?substr(ME,0,-1):$A),lang(190),$me,lang(191),$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;if(!$n)$n=error();}page_header(($a!=""?lang(40):lang(192)),$n,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>',lang(170),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$xd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Jg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$n){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(193));elseif(in_array($K["INTERVAL_FIELD"],$xd)&&isset($Jg[$K["STATUS"]])){$ng="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(194):lang(195)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$ng.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$ng)."\n".$Jg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(196).": ".h($aa):lang(197)),$n);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(170),'<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">',lang(198),'<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">',lang(199),'<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>',lang(200),'<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$xd,$K["INTERVAL_FIELD"]),'<tr><th>',lang(107),'<td>',html_select("STATUS",$Jg,$K["STATUS"]),'<tr><th>',lang(96),'<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",lang(201)),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$ig=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$n){$dh="$K[name]_adminer_".uniqid();drop_create("DROP $ig ".idf_escape($da),create_routine($ig,$K),"DROP $ig ".idf_escape($K["name"]),create_routine($ig,array("name"=>$dh)+$K),"DROP $ig ".idf_escape($dh),substr(ME,0,-1),lang(202),lang(203),lang(204),$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?lang(205):lang(206)).": ".h($da):(isset($_GET["function"])?lang(207):lang(208))),$n);if(!$_POST&&$da!=""){$K=routine($da,$ig);$K["name"]=$da;}$nb=get_vals("SHOW CHARACTER SET");sort($nb);$jg=routine_languages();echo'
<form action="" method="post" id="form">
<p>',lang(170),': <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($jg?lang(19).": ".html_select("language",$jg,$K["language"]):""),'<input type="submit" value="',lang(14),'">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$nb,$ig);if(isset($_GET["function"])){echo"<tr><td>".lang(209);edit_type("returns",$K["returns"],$nb);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($da!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,lang(210));elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,lang(211));elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,lang(212));else
redirect($_);}page_header($fa!=""?lang(213).": ".h($fa):lang(214),$n);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="',lang(14),'">
';if($fa!="")echo"<input type='submit' name='drop' value='".lang(116)."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$n){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,lang(215));else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,lang(216));}page_header($ga!=""?lang(217).": ".h($ga):lang(218),$n);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".lang(116)."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".lang(14)."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$yh=trigger_options();$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$n&&in_array($_POST["Timing"],$yh["Timing"])&&in_array($_POST["Event"],$yh["Event"])&&in_array($_POST["Type"],$yh["Type"])){$Me=" ON ".table($a);$Yb="DROP TRIGGER ".idf_escape($C).($w=="pgsql"?$Me:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Yb,$A,lang(219));else{if($C!="")queries($Yb);queries_redirect($A,($C!=""?lang(220):lang(221)),queries(create_trigger($Me,$_POST)));if($C!="")queries(create_trigger($Me,$K+array("Type"=>reset($yh["Type"]))));}}$K=$_POST;}page_header(($C!=""?lang(222).": ".h($C):lang(223)),$n,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(224),'<td>',html_select("Timing",$yh["Timing"],$K["Timing"],"triggerChange(/^".preg_quote($a,"/")."_[ba][iud]$/, '".js_escape($a)."', this.form);"),'<tr><th>',lang(225),'<td>',html_select("Event",$yh["Event"],$K["Event"],"this.form['Timing'].onchange();"),(in_array("UPDATE OF",$yh["Event"])?" <input name='Of' value='".h($K["Of"])."' class='hidden'>":""),'<tr><th>',lang(92),'<td>',html_select("Type",$yh["Type"],$K["Type"]),'</table>
<p>',lang(170),': <input name="Trigger" value="',h($K["Trigger"]);?>" maxlength="64" autocapitalize="off">
<script type="text/javascript">document.getElementById('form')['Timing'].onchange();</script>
<p><?php textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="',lang(14),'">
';if($C!=""){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$Hf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$yb)$Hf[$yb][$K["Privilege"]]=$K["Comment"];}$Hf["Server Admin"]+=$Hf["File access on server"];$Hf["Databases"]["Create routine"]=$Hf["Procedures"]["Create routine"];unset($Hf["Procedures"]["Create routine"]);$Hf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$Hf["Columns"][$X]=$Hf["Tables"][$X];unset($Hf["Server Admin"]["Usage"]);foreach($Hf["Tables"]as$x=>$X)unset($Hf["Databases"][$x]);$ze=array();if($_POST){foreach($_POST["objects"]as$x=>$X)$ze[$X]=(array)$ze[$X]+(array)$_POST["grants"][$x];}$Wc=array();$Ke="";if(isset($_GET["host"])&&($I=$h->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$ee,PREG_SET_ORDER)){foreach($ee
as$X){if($X[1]!="USAGE")$Wc["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$Wc["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Ke=$B[1];}}if($_POST&&!$n){$Le=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Le",ME."privileges=",lang(226));else{$Ae=q($_POST["user"])."@".q($_POST["host"]);$qf=$_POST["pass"];if($qf!=''&&!$_POST["hashed"]){$qf=$h->result("SELECT PASSWORD(".q($qf).")");$n=!$qf;}$Cb=false;if(!$n){if($Le!=$Ae){$Cb=queries(($h->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ae IDENTIFIED BY PASSWORD ".q($qf));$n=!$Cb;}elseif($qf!=$Ke)queries("SET PASSWORD FOR $Ae = ".q($qf));}if(!$n){$fg=array();foreach($ze
as$Fe=>$Vc){if(isset($_GET["grant"]))$Vc=array_filter($Vc);$Vc=array_keys($Vc);if(isset($_GET["grant"]))$fg=array_diff(array_keys(array_filter($ze[$Fe],'strlen')),$Vc);elseif($Le==$Ae){$Ie=array_keys((array)$Wc[$Fe]);$fg=array_diff($Ie,$Vc);$Vc=array_diff($Vc,$Ie);unset($Wc[$Fe]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Fe,$B)&&(!grant("REVOKE",$fg,$B[2]," ON $B[1] FROM $Ae")||!grant("GRANT",$Vc,$B[2]," ON $B[1] TO $Ae"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Le!=$Ae)queries("DROP USER $Le");elseif(!isset($_GET["grant"])){foreach($Wc
as$Fe=>$fg){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Fe,$B))grant("REVOKE",array_keys($fg),$B[2]," ON $B[1] FROM $Ae");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(227):lang(228)),!$n);if($Cb)$h->query("DROP USER $Ae");}}page_header((isset($_GET["host"])?lang(33).": ".h("$ha@$_GET[host]"):lang(135)),$n,array("privileges"=>array('',lang(63))));if($_POST){$K=$_POST;$Wc=$ze;}else{$K=$_GET+array("host"=>$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Ke;if($Ke!="")$K["hashed"]=true;$Wc[(DB==""||$Wc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(32),'<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>',lang(33),'<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>',lang(34),'<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],lang(229),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".lang(63).doc_link(array('sql'=>"grant.html#priv_level"));$s=0;foreach($Wc
as$Fe=>$Vc){echo'<th>'.($Fe!="*.*"?"<input name='objects[$s]' value='".h($Fe)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$s]' value='*.*' size='10'>*.*");$s++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(32),"Databases"=>lang(35),"Tables"=>lang(119),"Columns"=>lang(120),"Procedures"=>lang(230),)as$yb=>$Ob){foreach((array)$Hf[$yb]as$Gf=>$rb){echo"<tr".odd()."><td".($Ob?">$Ob<td":" colspan='2'").' lang="en" title="'.h($rb).'">'.h($Gf);$s=0;foreach($Wc
as$Fe=>$Vc){$C="'grants[$s][".h(strtoupper($Gf))."]'";$Y=$Vc[strtoupper($Gf)];if($yb=="Server Admin"&&$Fe!=(isset($Wc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(231)."<option value='0'".($Y=="0"?" selected":"").">".lang(232)."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($Gf=="All privileges"?" id='grants-$s-all'":($Gf=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$s-all');\""))."></label>";$s++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(14),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(116),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Md=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".number($X)))$Md++;}queries_redirect(ME."processlist=",lang(233,$Md),$Md||!$_POST["kill"]);}page_header(lang(105),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$s=-1;foreach(process_list()as$s=>$K){if(!$s){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$x=>$X)echo"<th>$x".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($x),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K["Id"],0):"");foreach($K
as$x=>$X)echo"<td>".(($w=="sql"&&$x=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($w=="pgsql"&&$x=="current_query"&&$X!="<IDLE>")||($w=="oracle"&&$x=="sql_text"&&$X!="")?"<code class='jush-$w'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.lang(234).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($s+1)."/".lang(235,$h->result("SELECT @@max_connections")),"<p><input type='submit' value='".lang(236)."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$v=indexes($a);$p=fields($a);$Oc=column_foreign_keys($a);$He="";if($R["Oid"]){$He=($w=="sqlite"?"rowid":"oid");$v[]=array("type"=>"PRIMARY","columns"=>array($He));}parse_str($_COOKIE["adminer_import"],$ya);$gg=array();$f=array();$hh=null;foreach($p
as$x=>$o){$C=$b->fieldName($o);if(isset($o["privileges"]["select"])&&$C!=""){$f[$x]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($o))$hh=$b->selectLengthProcess();}$gg+=$o["privileges"];}list($M,$Xc)=$b->selectColumnsProcess($f,$v);$Ad=count($Xc)<count($M);$Z=$b->selectSearchProcess($p,$v);$Xe=$b->selectOrderProcess($p,$v);$z=$b->selectLimitProcess();$Tc=($M?implode(", ",$M):"*".($He?", $He":"")).convert_fields($f,$p,$M)."\nFROM ".table($a);$Yc=($Xc&&$Ad?"\nGROUP BY ".implode(", ",$Xc):"").($Xe?"\nORDER BY ".implode(", ",$Xe):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Fh=>$K){$Ga=convert_field($p[key($K)]);$M=array($Ga?$Ga:idf_escape(key($K)));$Z[]=where_check($Fh,$p);$J=$Wb->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$n){$ci=$Z;if(!$_POST["all"]&&is_array($_POST["check"])){$eb=array();foreach($_POST["check"]as$bb)$eb[]=where_check($bb,$p);$ci[]="((".implode(") OR (",$eb)."))";}$ci=($ci?"\nWHERE ".implode(" AND ",$ci):"");$Cf=$Hh=null;foreach($v
as$u){if($u["type"]=="PRIMARY"){$Cf=array_flip($u["columns"]);$Hh=($M?$Cf:array());break;}}foreach((array)$Hh
as$x=>$X){if(in_array(idf_escape($x),$M))unset($Hh[$x]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Hh===array())$H="SELECT $Tc$ci$Yc";else{$Dh=array();foreach($_POST["check"]as$X)$Dh[]="(SELECT".limit($Tc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p).$Yc,1).")";$H=implode(" UNION ALL ",$Dh);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Oc)){if($_POST["save"]||$_POST["delete"]){$I=true;$za=0;$O=array();if(!$_POST["delete"]){foreach($f
as$C=>$X){$X=process_input($p[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($Hh===array()&&is_array($_POST["check"]))||$Ad){$I=($_POST["delete"]?$Wb->delete($a,$ci):($_POST["clone"]?queries("INSERT $H$ci"):$Wb->update($a,$O,$ci)));$za=$h->affected_rows;}else{foreach((array)$_POST["check"]as$X){$bi="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$p);$I=($_POST["delete"]?$Wb->delete($a,$bi,1):($_POST["clone"]?queries("INSERT".limit1($H,$bi)):$Wb->update($a,$O,$bi)));if(!$I)break;$za+=$h->affected_rows;}}}$me=lang(237,$za);if($_POST["clone"]&&$I&&$za==1){$Rd=last_id();if($Rd)$me=lang(156," $Rd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$me,$I);if(!$_POST["delete"]){edit_form($a,$p,(array)$_POST["fields"],!$_POST["clone"]);page_footer();exit;}}elseif(!$_POST["import"]){if(!$_POST["val"])$n=lang(238);else{$I=true;$za=0;foreach($_POST["val"]as$Fh=>$K){$O=array();foreach($K
as$x=>$X){$x=bracket_escape($x,1);$O[idf_escape($x)]=(preg_match('~char|text~',$p[$x]["type"])||$X!=""?$b->processInput($p[$x],$X):"NULL");}$I=$Wb->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($Fh,$p),!($Ad||$Hh===array())," ");if(!$I)break;$za+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(237,$za),$I);}}elseif(!is_string($Hc=get_file("csv_file",true)))$n=upload_error($Hc);elseif(!preg_match('~~u',$Hc))$n=lang(239);else{cookie("adminer_import","output=".urlencode($ya["output"])."&format=".urlencode($_POST["separator"]));$I=true;$ob=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Hc,$ee);$za=count($ee[0]);$Wb->begin();$vg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($ee[0]as$x=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$vg]*)$vg~",$X.$vg,$fe);if(!$x&&!array_diff($fe[1],$ob)){$ob=$fe[1];$za--;}else{$O=array();foreach($fe[1]as$s=>$lb)$O[idf_escape($ob[$s])]=($lb==""&&$p[$ob[$s]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$lb))));$L[]=$O;}}$I=(!$L||$Wb->insertUpdate($a,$L,$Cf));if($I)$Wb->commit();queries_redirect(remove_from_uri("page"),lang(240,$za),$I);$Wb->rollback();}}}$Tg=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header(lang(44).": $Tg",$n);$O=null;if(isset($gg["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Oc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$O);if(!$f&&support("table"))echo"<p class='error'>".lang(241).($p?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($Z,$f,$v);$b->selectOrderPrint($Xe,$f,$v);$b->selectLimitPrint($z);$b->selectLengthPrint($hh);$b->selectActionPrint($v);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Rc=$h->result(count_rows($a,$Z,$Ad,$Xc));$E=floor(max(0,$Rc-1)/$z);}$sg=$M;if(!$sg){$sg[]="*";if($He)$sg[]=$He;}$zb=convert_fields($f,$p,$M);if($zb)$sg[]=substr($zb,2);$I=$Wb->select($a,$sg,$Z,$Xc,$Xe,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($w=="mssql"&&$E)$I->seek($z*$E);$lc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$w=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$Xc&&$Ad&&$w=="sql")$Rc=$h->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".lang(12)."\n";else{$Pa=$b->backwardKeys($a,$Tg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Xc&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(242)."</a>");$ye=array();$Uc=array();reset($M);$Qf=1;foreach($L[0]as$x=>$X){if($x!=$He){$X=$_GET["columns"][key($M)];$o=$p[$M?($X?$X["col"]:current($M)):$x];$C=($o?$b->fieldName($o,$Qf):($X["fun"]?"*":$x));if($C!=""){$Qf++;$ye[$x]=$C;$e=idf_escape($x);$id=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$Ob="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($id.($Xe[0]==$e||$Xe[0]==$x||(!$Xe&&$Ad&&$Xc[0]==$e)?$Ob:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($id.$Ob)."' title='".lang(50)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.lang(47).'" class="text jsonly"> =</a>';echo"</span>";}$Uc[$x]=$X["fun"];next($M);}}$Wd=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$x=>$X)$Wd[$x]=max($Wd[$x],min(40,strlen(utf8_decode($X))));}}echo($Pa?"<th>".lang(243):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Oc)as$xe=>$K){$Eh=unique_array($L[$xe],$v);if(!$Eh){$Eh=array();foreach($L[$xe]as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$Eh[$x]=$X;}}$Fh="";foreach($Eh
as$x=>$X){if(($w=="sql"||$w=="pgsql")&&strlen($X)>64){$x=(strpos($x,'(')?$x:idf_escape($x));$x="MD5(".($w=='sql'&&preg_match("~^utf8_~",$p[$x]["collation"])?$x:"CONVERT($x USING ".charset($h).")").")";$X=md5($X);}$Fh.="&".($X!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$Xc&&$M?"":"<td>".checkbox("check[]",substr($Fh,1),in_array(substr($Fh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($Ad||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Fh)."'>".lang(244)."</a>"));foreach($K
as$x=>$X){if(isset($ye[$x])){$o=$p[$x];if($X!=""&&(!isset($lc[$x])||$lc[$x]!=""))$lc[$x]=(is_mail($X)?$ye[$x]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$o["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($x).$Fh;if(!$_&&$X!==null){foreach((array)$Oc[$x]as$q){if(count($Oc[$x])==1||end($q["source"])==$x){$_="";foreach($q["source"]as$s=>$Dg)$_.=where_link($s,$q["target"][$s],$L[$xe][$Dg]);$_=($q["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($q["db"]),ME):ME).'select='.urlencode($q["table"]).$_;if(count($q["source"])==1)break;}}}if($x=="COUNT(*)"){$_=ME."select=".urlencode($a);$s=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Eh))$_.=where_link($s++,$W["col"],$W["val"],$W["op"]);}foreach($Eh
as$Gd=>$W)$_.=where_link($s++,$Gd,$W);}$X=select_value($X,$_,$o,$hh);$jd=h("val[$Fh][".bracket_escape($x)."]");$Y=$_POST["val"][$Fh][bracket_escape($x)];$gc=!is_array($K[$x])&&is_utf8($X)&&$L[$xe][$x]==$K[$x]&&!$Uc[$x];$gh=preg_match('~text|lob~',$o["type"]);if(($_GET["modify"]&&$gc)||$Y!==null){$ad=h($Y!==null?$Y:$K[$x]);echo"<td>".($gh?"<textarea name='$jd' cols='30' rows='".(substr_count($K[$x],"\n")+1)."'>$ad</textarea>":"<input name='$jd' value='$ad' size='$Wd[$x]'>");}else{$be=strpos($X,"<i>...</i>");echo"<td id='$jd' onclick=\"selectClick(this, event, ".($be?2:($gh?1:0)).($gc?"":", '".h(lang(245))."'").");\">$X";}}}if($Pa)echo"<td>";$b->backwardKeysPrint($Pa,$L[$xe]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$vc=true;if($_GET["page"]!="last"){if(!+$z)$Rc=count($L);elseif($w!="sql"||!$Ad){$Rc=($Ad?false:found_rows($R,$Z));if($Rc<max(1e4,2*($E+1)*$z))$Rc=reset(slow_query(count_rows($a,$Z,$Ad,$Xc)));else$vc=false;}}if(+$z&&($Rc===false||$Rc>$z||$E)){echo"<p class='pages'>";$he=($Rc===false?$E+(count($L)>=$z?2:1):floor(($Rc-1)/$z));if($w!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(246)."', '".($E+1)."'), event); return false;\">".lang(246)."</a>:",pagination(0,$E).($E>5?" ...":"");for($s=max(1,$E-4);$s<min($he,$E+5);$s++)echo
pagination($s,$E);if($he>0){echo($E+5<$he?" ...":""),($vc&&$Rc!==false?pagination($he,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$he'>".lang(247)."</a>");}echo(($Rc===false?count($L)+1:$Rc-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(248).'...\');" class="loadmore">'.lang(249).'</a>':'');}else{echo
lang(246).":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($he>$E?pagination($E+1,$E).($he>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Rc!==false?"(".($vc?"":"~ ").lang(138,$Rc).") ":"");$Tb=($vc?"":"~ ").$Rc;echo
checkbox("all",1,0,lang(250),"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Tb' : checked); selectCount('selected2', this.checked || !checked ? '$Tb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>',lang(242),'</legend><div>
<input type="submit" value="',lang(14),'"',($_GET["modify"]?'':' title="'.lang(238).'"'),'>
</div></fieldset>
<fieldset><legend>',lang(115),' <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="',lang(10),'">
<input type="submit" name="clone" value="',lang(234),'">
<input type="submit" name="delete" value="',lang(18),'"',confirm(),'>
</div></fieldset>
';}$Pc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Pc['sql']);break;}}if($Pc){print_fieldset("export",lang(65)." <span id='selected2'></span>");$hf=$b->dumpOutput();echo($hf?html_select("output",$hf,$ya["output"])." ":""),html_select("format",$Pc,$ya["format"])," <input type='submit' name='export' value='".lang(65)."'>\n","</div></fieldset>\n";}echo(!$Xc&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",lang(64),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ya["format"],1);echo" <input type='submit' name='import' value='".lang(64)."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($lc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$T'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$Ig=isset($_GET["status"]);page_header($Ig?lang(107):lang(106));$Uh=($Ig?show_status():show_variables());if(!$Uh)echo"<p class='message'>".lang(12)."\n";else{echo"<table cellspacing='0'>\n";foreach($Uh
as$x=>$X){echo"<tr>","<th><code class='jush-".$w.($Ig?"status":"set")."'>".h($x)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Qg=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$R){json_row("Comment-$C",nbsp($R["Comment"]));if(!is_view($R)){foreach(array("Engine","Collation")as$x)json_row("$x-$C",nbsp($R[$x]));foreach($Qg+array("Auto_increment"=>0,"Rows"=>0)as$x=>$X){if($R[$x]!=""){$X=format_number($R[$x]);json_row("$x-$C",($x=="Rows"&&$X&&$R["Engine"]==($Fg=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Qg[$x]))$Qg[$x]+=($R["Engine"]!="InnoDB"||$x!="Data_free"?$R[$x]:0);}elseif(array_key_exists($x,$R))json_row("$x-$C");}}}foreach($Qg
as$x=>$X)json_row("sum-$x",format_number($X));json_row("");}elseif($_GET["script"]=="kill")$h->query("KILL ".number($_POST["kill"]));else{foreach(count_tables($b->databases())as$m=>$X){json_row("tables-$m",$X);json_row("size-$m",db_size($m));}json_row("");}exit;}else{$Zg=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Zg&&!$n&&!$_POST["search"]){$I=true;$me="";if($w=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$me=lang(251);}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$me=lang(252);}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$me=lang(253);}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$me=lang(254);}elseif($w!="sql"){$I=($w=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$me=lang(255);}elseif(!$_POST["tables"])$me=lang(9);elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$me.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$me,$I);}page_header(($_GET["ns"]==""?lang(35).": ".h(DB):lang(68).": ".h($_GET["ns"])),$n,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".lang(256)."</h3>\n";$Yg=tables_list();if(!$Yg)echo"<p class='message'>".lang(9)."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".lang(257)." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(47)."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">';$Ub=doc_link(array('sql'=>'show-table-status.html'));echo'<th>'.lang(119),'<td>'.lang(258).doc_link(array('sql'=>'storage-engines.html')),'<td>'.lang(111).doc_link(array('sql'=>'charset-mysql.html')),'<td>'.lang(259).$Ub,'<td>'.lang(260).$Ub,'<td>'.lang(261).$Ub,'<td>'.lang(56).doc_link(array('sql'=>'example-auto-increment.html')),'<td>'.lang(262).$Ub,(support("comment")?'<td>'.lang(96).$Ub:''),"</thead>\n";$S=0;foreach($Yg
as$C=>$U){$Xh=($U!==null&&!preg_match('~table~i',$U));echo'<tr'.odd().'><td>'.checkbox(($Xh?"views[]":"tables[]"),$C,in_array($C,$Zg,true),"","formUncheck('check-all');"),'<th>'.(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($C).'" title="'.lang(39).'">'.h($C).'</a>':h($C));if($Xh){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(40).'">'.(preg_match('~materialized~i',$U)?lang(263):lang(118)).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(38).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(41)),"Index_length"=>array("indexes",lang(122)),"Data_free"=>array("edit",lang(42)),"Auto_increment"=>array("auto_increment=1&create",lang(41)),"Rows"=>array("select",lang(38)),)as$x=>$_){$jd=" id='$x-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$x=="Rows"||(support("indexes")&&$x!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$jd title='$_[1]'>?</a>":"<span$jd>?</span>"):"<td id='$x-".h($C)."'>&nbsp;");}$S++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(235,count($Yg)),"<td>".nbsp($w=="sql"?$h->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$x)echo"<td align='right' id='sum-$x'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Rh="<input type='submit' value='".lang(264)."'".on_help("'VACUUM'")."> ";$Te="<input type='submit' name='optimize' value='".lang(265)."'".on_help($w=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".lang(115)." <span id='selected'></span></legend><div>".($w=="sqlite"?$Rh:($w=="pgsql"?$Rh.$Te:($w=="sql"?"<input type='submit' value='".lang(266)."'".on_help("'ANALYZE TABLE'")."> ".$Te."<input type='submit' name='check' value='".lang(267)."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".lang(268)."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".lang(269)."'".confirm().on_help($w=="sqlite"?"'DELETE'":"'TRUNCATE".($w=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".lang(116)."'".confirm().on_help("'DROP TABLE'").">\n";$l=(support("scheme")?$b->schemas():$b->databases());if(count($l)!=1&&$w!="sqlite"){$m=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(270).": ",($l?html_select("target",$l,$m):'<input name="target" value="'.h($m).'" autocapitalize="off">')," <input type='submit' name='move' value='".lang(271)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(272)."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")."\">\n";echo"<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.lang(66)."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.lang(192)."</a>\n":""),(support("materializedview")?'<a href="'.h(ME).'view=&amp;materialized=1">'.lang(273)."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".lang(132)."</h3>\n";$kg=routines();if($kg){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(170).'<td>'.lang(92).'<td>'.lang(209)."<td>&nbsp;</thead>\n";odd('');foreach($kg
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.lang(125)."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(208).'</a>':'').'<a href="'.h(ME).'function=">'.lang(207)."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".lang(274)."</h3>\n";$wg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema() ORDER BY sequence_name");if($wg){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(170)."</thead>\n";odd('');foreach($wg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".lang(214)."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".lang(23)."</h3>\n";$Ph=types();if($Ph){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(170)."</thead>\n";odd('');foreach($Ph
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".lang(218)."</a>\n";}if(support("event")){echo"<h3 id='events'>".lang(133)."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(170)."<td>".lang(275)."<td>".lang(198)."<td>".lang(199)."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?lang(276)."<td>".$K["Execute at"]:lang(200)." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.lang(125).'</a>';}echo"</table>\n";$tc=$h->result("SELECT @@event_scheduler");if($tc&&$tc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($tc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.lang(197)."</a>\n";}if($Yg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();