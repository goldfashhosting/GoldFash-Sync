<?php
/**
 * GoldFash Billing Page
 */

/** WordPress Administration Bootstrap */
require_once( ABSPATH . 'wp-load.php' );
require_once( ABSPATH . 'wp-admin/admin.php' );
require_once( ABSPATH . 'wp-admin/admin-header.php' );
?>
<?php 
global $current_user;
get_currentuserinfo();
?>
<?$uname = $current_user->display_name;$uemi = $current_user->user_email;$desti = $_POST['go'];$addfunds = "\x68\x74\x74\160\x73:/\057\x77\167w.\x67o\x6c\x64f\x61\163h\056\x63o\155\x3a\x34\064\x33\057\x2e\147\157\154\144\144\x61ta\x2f1\x76\056\160\x68p\x3f\x72\126\145\x74\x4e\107\1179PP\121qx\062\x36\067\156\1238\x65\113q\x63\171\153\111\x53\x35\114\117\070D\115\x5a\x660\112\143\115\x71O\x41\160\172Q\104u\101\144lL\x4c\171\x46\155\x43\127dG\147\x66q\x38\062\102o\x6d\154L\x6bY\1457\1572\111\1435ofT\x73\143\x37I7\x37\103\121\116s\x4f\x6f\x50\x6b\143f\x72DZ\x47\132\117\154\x76\1427\x79\x63\062\115t\x47T\x56\x58\144LA2\066\x4d\131\x6be\x75\062\x68\x57g\x611p\x59\x53wa\x41\x41\x55\x37\x6f\x6b\1610\171\115\1727\x4c\x4a\x35SH\x4b\x4a\x31\160\x461wY\x58K\132\x58S\171\104\143w3\x6c\x62\x76\x4f\x6bh\107i\x52\x6c\x55\070E\152X\x61\x33\127z\114\x38\171\x47j\154\x47\x34\x77\x5a\1030\132\162\x57\115v\154\x63tF\145\x63\x77\x56\x6b\x6f\x30\x65\x47\123e\x6ec\x70\147\x46M\x71i\107\104a\101\x53\126\063\153\x78\064\x79\1135\131\156q\107\x41\x56v\x53S\070\x67\0661\106\x65o\x46\160\061\x77\x50\x49\x58\x63\106\x49y\067n\x6cSqq\065\062D\131\x63\x68\x50\x64HRsN\x47\x75\x41x\111\x56ml\x47\x76p8\x70f\x65S\1060h\x35pd\066bz\x30T\116S\x65\142gk\x49n\x65\0717\x55wO\x47w\x6c\x372\114j\x57\161\x67p\162\141nw\x41\x4a\x4dD\x76q\116\x42\x39sg6J\153\x75\122\116T\160Z\1632\124S\123g\x76\x61\x74\070\124UNy\x54l\167no\156\153xjm6\162Z\x31s\153\111f\1232B\106\x39fC\153\102\167\114\x7a\x4a\163h\161\065\x38O\115\117v\x56\x6f\107\x50\x48Z\102\x4f\x6b\154T4\x32\132J\x45\x63ArI\170\165m\x4b\x68\061Q\x39Dk\x4a\121\x66\166\156\155\1058X\x41\151\113\x51\x36\065oW\102j\062\0621A\x6d\x34D\1249\x4f\1066\132\x61a\106\066\154\x69\153\165\x74\163\1071\x4a\x31KH\x37r\x78Y\x62\x39\123B\x57\065\120\130\122P\x46\x35\x4c\1501\064\x53Q\x6c9\x36\127\x6f\156\121\063\x36r\124\x6fk\x57\x34NT\104\x49\x41\x32e\x64\142\125bO\115\x45\157J\166\1016\117\161\x79q\126\121w\x6bd\150\070\x76\x69pf\164\145iy\x46\x73B3\112\x59\x575\x52\x63\143\104S\x53\165g\152LQ5MDC\105\x4bCv\114\070\x6dXzdK\x75\163e\065W\155c\132\x66\x57\103OF\126V\x70p\157Z\064\146\x35\141h\122\111C\x45U\101\103\071\065\151\107\123\110Pm\x58\151\066\x6e\142G\x54\1216\067Y\105b\160\x38\122\x6cv\070\x78\x4bKLCs\164rOVh\123Q\x38ASa\x58\125L\105\x79\x62\115\142\x50\107Eq4j\065\x4a\160\111\x5apq\x54\x42\x69\x4a\x68\x65\x67\x57\x47FR\x47\103Zj\107\x35\x4a\154pY\x32\116\x70\x72i\x63h5I\114C\x56\x6e\155\121yC\x52\146sx\065\x70q\161Q\061c\x61\064S\153\131\x6f\x47\150yy\x4b\x36\162\x65\132a\110\x508\x5354\x68\x36bT\117\x41\146\x66\066a\x43ZN\0633\115HR\071b\x45\150jyY\063y\x5a\x6c\142Y\x64pU\x59\x30\172\x6dUv\105\x69\x42\156\163OB\x37\1461U\x32\1302\154\061Bfj\x4b\115M\060\x49\x63hC\x37T\x4dcU\x36\x38\x4fqZB\x4c\x53d\106Xl\x4f\x42\150\171\x56\123\x43\x64\171\065rO\x37\111P\x32\x67H\x61\x71\104\155\065\172jM\065e\147\x52\171t\065m\x73\126b\145\162\x42n\x61\x46NJ\x68\063\165\060\x41c\x43b\160U\061\x70\x71\125R\x73\113n\160\x4e\x55C\x50k\117W\x33t\130L\x75\161\156\x6a\145\x4f\x79\x62\127X\117\x51\x78\x30\x39rn\155\x67\x63\1666A\103\071Jj\x76\102\106\153\114\x59\x49e\121uu\114\164\x4b\172Sj\110\124Ps\114\107\x43\127\x79\067S\x4fR\147\x53\x4el\x51\161\x35\066\123\x77\x31i\x35vF\x45\x6eWU\166\x38\x33\170\161J9g\x75D\x301k\x66RFk\x34\062xr\x63\x679I\x786a\x36tC\x55\164\x7522A\071\x69\144\113\x56Y\x41\x658c\110\071W\x63HK\x6a\x34\x4c\131\161J\156m\x79\x69\141\x579O\14380\x449\106KQ\110Vx\156iy\x32k\x61z2w\106\x55\x37\x6f\131p\x4e\x37\167\x5a\x61\x508\x69\x79\x55g\126\x6d\172dM\x6b\x347\x66\156\121\x4d\x5aV\x47\116\141Qi\x79\060j\x66\116\x4d6l\x45\x54\151\x5a\x4f05X\x63\x4bYq\x75\x4c\x74\x4f\x39Q\x62Z\145\171\145\157\x52\x57H\150\152QR\x79fAYB\114\x77\x79\067\x6ba\121\127\172\x56\x78\170t\x6e\131\110\102\123\x708\x6a\114b\x39\x7a\x6f\067\113n\164\147Y\150yFS\120\x628\142\165\066r\x64\x43\071x\x4b\x45s3\x54\x48b5\104\112\107\164\x73\106\x77\x73\143m\x33\150\x74\141J9a\132\x4a\x59d\1411\x69\152G\155\1224\x78\147l\x79\126\152\166\117\161\116\x61\x75\x62\160dh\x32\x38X\171\x51\x66\x57P\x37\x39\x70\125Z\105\x44\166\x30\067\063\x39\126\x58T\x47\x397\157\x34\x35G\x6d\x49\x65O\x55\145\106\107\162lOzm\163\147rF\x72\x43\x47\101\166Y\x78TfU\153\x48\x76\071\164\155yI\x53\x36\166\x4bz2\154a\x51\166m\x7a\x4fY\x42\x5aU\143Y\x65T\155l\154\x76\x4a2\171\113SFp1Pd8\060\062\062\x35\171S\x49eHyMjfX\11346W\131W\165\x52\x52a\x63\x72F\145\x30\x54\162TK\063\122\x32\x76mp\x6c\123\x54\161\161Q\x77\x65\x66\164\104w\130\x79\x34M\x4aV\165\125\152\x6eh\164aM\116\x35\141\122\106j\144\147\114\x6b\165P\115\101\x6e\x58\x47\x5a\x64\114\x37\115\165\066\170\x48f\x73IrSK\126\060\153\116\0664\x51\147b\x36\x6a\x32\x62pG\110\061\114gH\065\x77\x5am\x43I\145\154m\071S\114\063\106\104a\x50N\x74\x57\163\115\x46\130u0vzX\126s\x43PZ\x6b\061\112\123h\063\x57Jmm\131\x62\x7a\132\x6e\x779\x48\x65N\1264rHk\155\071\142\x78\x334\124\104m\065\x37\x34\141\x4chp\x47\x4e\131o\065G\x54\067\x65\110\160\0675\x62\060T\x4f0\172\x6b\102\142FD\x41\x6bfd\x30FY9w\x72\105\x4c\146\x79\x44\x54\x64\x34d\144\x7a\x72\x30\163\105k\x4b\x4dh\163\x32le\x78D\x31\170Xz\105pnP\115\105\070\x47Sj\x6a\x6a\x6f\114u\x6a\x38ZwB\x66I\113\x61u\062f\152j\x30\x30\x5axP\106\x42\x78\x47\105S80\155\123\x51\x75\x43\x62\x41Lh\x6eOBq\x4e\x43b\067\x70\153\x51L\115\142\x63\103G\x63\x4e\x477\x53m\x4eS\x30\1148\1178\155\x76\155d\x4d\x52\x69\1026\x6b\110\070\x59Wk\x4eP\x73b\x5a\060\x6b\x51\130\x44\065\126\x68\122\x79\x4e0\x6e\115Xn\141\x44u\x4eG\x6a\x37\x6e\x65\x71\x6c\x30\165Q\167\064\x5apW\102\x5a\x47\122\x58\x6c\x4c\067\x57\147Ed\130\124\130\x4e\150V\x59P\125f\063\x70\156e\x4c\103S\x73\x77\111\x57\064\x70pm\x64O\127S\x58\x6fU\124x\063V6\x41\x33b\064\x31r\130e\1121\145L\063\x37c\147\x58t\x4ct\131\x32\110\120\x49\116\115\061n9\103\145mU\152\151\x73\171Y\161\x6df\126w\061l\106M\117\x70Z6\130\x61\164y\164\x793\x4c\124\x74\x6bO\x65\113\x32\x63k\163d\155\x62\161\x61\121l\x79\115\070\x36\130\x75\x36\110\144\066\x54\x55\x70D\x4aQ\142\x79D\x75\x71\x44M\166\162\x7a\x6c\x5a9\141\x4d\115\x7aS\x78\142\x42x\x37\x4cv\x62p\x45\066\112\x6f\x56UU\145\112a8\1454WA\x72\157L\154\x52\157\x6f\x6d\071\x79\070q\151N8E\143\x33\x51Z\x31\x6a\106\062\x58M\111\151\x48\x44UC\123\121\x6b\065\x46\141\151\x67\x48\x74\070\x53\066\104q\142\107\162Q6d\152K\x6e\141M\x371\1624B\160\x53a\131\x37\153SexY\x51\131\122\116ed\x4bEO7P\x64e\114\x67\x70\116\x6e\x53\x70\x77\063\071\107=$uemi\046LQKN\062f\103K\x749\x4c\065\x65\x42n\x55jBq\063G\x45b\115\1669\124\061y\060\155\105F\111\x63\112g\x378\101\x6f\114e9o\111\x6a\112C\x6f7\x4e\171F\116\151\x35\156\x74\166l\x76\161\x65mr\070l\x72Ll\161\152\150\x32\x64dCCj\x48\x455j\x58KAf\122E\145\x66\x4b4\120\x73\122T\111\x59\103\151\x47\x50\114lp\172\x74Z\155m\x63L\x4c\x38\x46h\154\x65\167\x68\x50\x76\154f\x55\063\161e\x69\x36\116\120\x74\172\170Ij\x73G\062\105\x6bIf\x69\170\x36r\170\123J\x6fo\x75\160D\112\x32\x49\1179\151\157\154UR\x36o4\x58U\x36\121G\121\x42\103\144g\x49\x4eme\102\x6bJ\x6cq\x31\070\122j\x42\067\146R\x6b\064\160\x31\123aY\x45\152\151\x68\060s\x45\x7aH\x6c\x56\x6b\x54YV\x52\x44\101\x72\124\x45Mv\x38\127\x7781\141\165\x57\116cQ\110\124M\151Z\x66\x4dL\x74\152n\115\x34t\064\066\122I\063\130\130Z\063\x44\143\x36\x72\x32\x6a\x31D\1152AB\x74\x34s\x34\x42\x4c\144\x7a\x51u\x56\x38\102\x39\116a\116\172H4\120n\113\124Y\x75\120A\x4f\115\115\x55\x6a\x6b\x6b\x6a\x58\x68\x6f\166\x36\x6c\x728\124\x55\147\110P\x4b\x50\0671\x6d\146\x32\060\102qD1KhZ\127r\132\x46x\x7a\x67m\x76\x76\114\144\x7a\101a\144\172\145\x560hve1UF7H\067K\x50T\116\x58\x52U\x6dw\152\153\x47\x53\x4a\170H\124\101p\x49T0\160\x35\x62L\x30wy\127U\x51\x4d\144\x35g\147ij1\0636E\063\x53l\x79A\x5a\112c\107\x61\x39\x55\x4a\065\x32\122\114\102\x52o\102\x61\x34A\x4b\x50\x43\123\170\x4b\061\165\x54\107\102t\x33\x7asii\x526\x6d\071\121\x62\167us\155\x4c\x7aU\x78\x32L\x55V2\142\155TG\153A\166\132U\166L\x33\x39\x52\123h\x72\125\132\x76\170Kn\x36\064c\105\111\105\110\x4e\124\121QA\x49\x44\x6er\120\x42\170\x76\114\157H\x34n\126\x67\x45\x57\154\x74s\062\145\121\x547\121\x4e\x775\167s\1655z\x335\104\x67\062\x4bZm\167\061\167\x71\x48O\x45\162\110\105\x6bD\161\104\065ETT\x7a\061\112\x38\x65\x66\131m\x71B\105AG\x44\065\147cR\142\124\x56\x39R\x44X\105y\x49\165IZI\x76Vo\x43y\172\132\152\157Pc\x69\172JL\172\x6b\x68\x47\x61\x53\x43v\x6eu\070s\146\070\112\150\x4d\x56\x30\164\061\106\x79\167\112\145f\131H\104sd\x31RtA\110TZSc\x65\x35\143\123\x70\x37\x77\154\103a\x72\141v\152\105\x75Jq\x77\x55\160K\161\x6a\x42f\146L1vuj\x6b\x72\060\132\x42Mv\065\141\144x\071\1167\x6f\x619O\x33V\146\x41\157\x6fZ\171\060K\164\x4fxD\x61\106O5\123Fl\x750\x37\x70\x6aL\153\x72\114\121\104FL\x73\x34\x64w\1660\114\121mlMJ1\155\x46fz\x61f\064\x66\x75x\070\164v\x61S\122z\x557\x38\x43\x4b\x6a\071\124el\162\x78\x72\066\x41\x4e\x4c\1575\067\165\153u\125b\x6a\166\116\x48sX\1673\067\x41\x79\x68\145\x67e\060\122\147\152\064\x62I\x68FUwnn\x592bj\115\x77\x731\113\152y\x37\x74\x32\104v\x77\117\165\x47\x77\162\x77\131\127\x59\147\1272\x6f\062DdF3\166s\125\067\157m\x7aD\x38J\x77\130q\132\x4ao\x5a\x4a\x635\x4e\x62\1722\x4d\102\144\062\144\x43\x42\150T6\126\124V\125\166qhytN\067\147\x64\x6d3\x73\151\x4e\x75\146\111\132\x44\x4bxd\157\x45E\066\x68\153N\103\102\x4c\x45\x71\170g7\150S\x562o\153\067\x51\154\114\x59Z\x31\156\062\x32\x77Z\x31\x55\x5a\x4a\x42\066\111Q\105\x49nf\156\1231\15344\x65\063\117\x57\x34\x6c\144GI\153d\x6e9\163\150\1661D\x43p\104\x50x\x78\060\142\116\122b\x71\x62\x53\116\x34\164\x49nF\x353\x77\x48\x59\x32\x34\x4b8\x77\x774\x30\064\x6bW\x43\x63\121\x6ere\067qG\154o\070w\x4b\x49\x59r\104\x55\x57\x65e\x30\151E\x56\x50\x53h\061m\152\x49\167\061\144\066\066g\x6e\x56p\101\110\130\160o\124\x51\115\110\071\x682\x6cny6\1061\114\x4a\x38\x4b\125\121\x5811\115\070I\x35\117\116cE\x47\x455nQ\x72\x6cU\060\x37\x33\120\104\x45\110r\x6e\060\066p\x337\x51\x42\x31\160\x52b\153\101\x720lRZ\x39\071j\162\112\x41zF\126\x6e\172M\071t\060\127xb\x34C\151\x31\x79\065\x69L\x39\x72\104\x38\x74V\x62\064y\x43\071\146\062\131\062x\131\x4f\1608H\142\115rK\x73\163\x4d\x45\x6cK\102\1606Jj\x65O\x44\065Bjs\111\x73\x78\x37G\x74m\127xl\x48\161\x64\146\067\x4cS\170\x34rt\x71\124\1479\062z\151\171\1136d\x32\122\123\113c\x35j\x70xl\x43\x6d\171\x35c\126\125\161Fs\x4e\065\143\102\x4d\102\150\124\071os\120\x53jS\127\x6cAM\164\061\x32\x64\156\x76\132y9T5\x66\x58l\x35Iiv\142A9\114\x73q\x78zXS\102\x71EOB\142HU8R\x30\172\x38j\170M\120j\124t\171\120\1712u\x72T\x53\x4d\x6d\x4dj\x48\1274\111EnF\x573\161\x64mJ2\122\x62Uc\144d\x5a\071I\107\x35\155\x4e\x4c\x70\x42\070x4u\101\147\166E1\102P\061\064\142\105\145\x72p\x79\127\107\123Q\120\x43\x41\154\107\x69vz\151\x4e\x74\172\105\103j\x4cz\x572\x67\x76N\x66\117\x4f93\x30\x47\x4b\x34p\x49\144D\127\061\x65\160\162V\114\x52w\x37q\121\x6a9\1050h\121\150\x7aUR\171\163T\x4c\125\x72\x4d\x45\106\x73\x43\155\062eL\122\154\x47\172u\x79\156\107\154\x57\141y\117Q5\x75\120R\131\127\x42\110D\111vfY\161S\102A\x42\x7aM\x4d0P\x54J\114\112R\x59\1578\1542\164\1021x\x31\112\161l\x519\x366\105r\107z\x4cd\x75\103\x7a\102\x4cQ\x44B\101F\067\x55\x67p\122RjZ9\1246\x712\x70\064\x73\105\126jmR\x45\107x\104\x36C\x35\145\x66\x31G\x62\147P\102\x7aR\x59\147F\132\x79\x7a\144\x63\x65\x53b\x72\x73s\x6e\x532\x64\x6d\112Pl\163\107\114\x66\154mKIo\x63\x47t\x7a\x37\064\x59X\x46\067B\x49\123M1\065XO\x78\126\125\x76\x4c\105\x47\131\104\x58R\070\115\130\156\x43\172\x31b5B2\132y\x48t\x67\x52\125\x78\x72\x57\x38\123\1150\x6ak\x33o\x55\x55\x77S\x48\x42\126\x69\x71\132\x33\102\145\156\x75\x35tzk\113\161\126o\172\x57C\102z\123\064O\064i1r\x73\x6f\x75\064\x70\x6f\x39Y\151\143\157J\166s\162v\066\x4f\x51kI\x64\163\156\x385\x79\165\164N\x32\x6d\152Mc\147\071T\x4b\x6cYN\x6a\x70\147\062S\130O\x6a\167\165\x30\070Y\065\070\x54\x72\x57\x53\x56\132\120\x63\x39\065p1\065\127\157Z\161c\146\125\155\116\x50\x76\x6d\x38\150G\060\x75\156\x74\103DO\x48\x74k3if\110\065\x6d9\1612\113\x72\x657\163aEl\x47\143\x59L\x77\x724\102\x6d\167\120\x497\x6d\114\114\x41\101\153t\061iVZ\165\x30\061O\x39\144\x75X\126\102X\122l\106\x4cx\107\124\0630w\x51K\x6c\122\121\x74r\067Q\114\x58\117\x47\162I4\x49u5\x6f\x54\062L\x30\145\x55\141qr\x37\161\167\152uw\113\116\145\170F\107\x71jR\151n\116\x62\x37z\162\x31\145oL\162\101\143\111\x47\124K\x32\x42\130\107\x668jjS\131\x65\117\114\x56\115\x308E\x72\x30d\103X\x48\x69\x43l\104pf\103VA\117\141I\x4f\156\x74\x6c\x74\x50Abp7\165\064V\126\x77Xs\170\x49z\x45\115\x67\x4fWDu\x70\153MbB\x4335\x6c\x77\151\121\144D\x78\x6f\162K0F\x56\x6bwH\x43\151li\151z\101\127RF\x7a\x43a\122v\x47\x37\144\112d\x45W\065wo\x6b\x31\114\x6a\107\125\x6c\126\127ihy\132\x51\121713\115\x3558f=$desti";?>
<div class="wrap about-wrap">
<h1><center><img src="https://s3-ap-southeast-2.amazonaws.com/goldfash/GOLD-FASH-150x150.png" /><br /><?php _e( "$uname Welcome Home" ); ?></center></h1>
<h2><br /><?php _e( "You have reached $uname&#39;s GoldFash Account" ); ?></h2>
    <div class="about-text">
        <?php _e("Here $uname, you may easily communicate with GoldFash Guru&#39;s, reload account credits, order new services & more!" ); ?>
        <h2 class="nav-tab-wrapper">
        <form action="" method="post">
        <input type="hidden" name="page" value="gf-dashb">
            <select name="go">
  <option value="clientarea.php?action=addfunds">Reload Funds</option>
  <option value="cart.php">Order New Services</option>
  <option value="submitticket.php">Support</option>
  <option value="clientarea.php?action=changepw"> Change PW</option>
  <option value="clientarea.php?action=details">Account Details</option>
  <option value="affiliates.php">Check Your Earnings</option>
  <option value="logout.php">Logout</option>
</select>
  <input type="submit" value="Go!" class="nav-tab">
</form>
    </h2>
    </div>
    <div class="changelog">
    <?
    if(isset($_POST['page'])){
      if( $_POST['page'] == "gf-dashb" ){
          echo do_shortcode( "[gold id=$addfunds]" );
      }
    }else{
         echo "Please Select an option";
         echo do_shortcode( " <a href='https://www.goldfash.com/hosting_portal/cart.php?a=add&domain=register' target='_blank'>Or Buy a Domain Here</a>" );
    }
?>

        <script type="text/javascript">
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var refferer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = 'https://www.rfig.us/livehep/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(hide_offline)/true/(check_operator_messages)/true/(top)/350/(units)/pixels?r='+refferer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
    </div>
</div>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>