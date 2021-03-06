<?php
/** Tunisian Spoken Arabic (   زَوُن)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Abanima
 * @author Csisc
 * @author Kuwaity26
 * @author Malekbr
 */

$fallback = 'ar';

$rtl = true;

$messages = array(
# User preference toggles
'tog-underline' => 'ضع خطا تحت الوصلات:',
'tog-hideminor' => 'أخف التعديلات الطفيفة في أحدث التغييرات',
'tog-hidepatrolled' => 'أخف التعديلات المراجعة في أحدث التغييرات',
'tog-newpageshidepatrolled' => 'أخف الصفحات المراجعة من قائمة الصفحات الجديدة',
'tog-extendwatchlist' => 'مدد قائمة المراقبة لعرض كل التغييرات، وليس الأحدث فقط',
'tog-usenewrc' => ')جمّع التعديلات حسب الصفحة في أحدث التغييرات وقائمة المراقبة (يتطلب جافاسكربت',
'tog-numberheadings' => 'رقم العناوين تلقائيا',
'tog-showtoolbar' => 'أظهر شريط التحرير (يتطلب جافاسكربت)',
'tog-editondblclick' => 'عدل الصفحات عند الضغط المزدوج (جافاسكربت)',
'tog-editsectiononrightclick' => 'فعل تعديل الأقسام بواسطة كبسة الفأرة اليمين على عناوين الأقسام (جافاسكريبت)',
'tog-rememberpassword' => 'تذكر دخولي على هذا المتصفح (إلى {{PLURAL:$1||يوم واحد|يومين|$1 أيام|$1 يومًا|$1 يوم}} كحد أقصى)',
'tog-watchcreations' => 'أضف الصفحات التي أنشئها والملفات التي أرفعها إلى قائمة مراقبتي.',
'tog-watchdefault' => 'أضف الصفحات والملفات التي أعدلها إلى قائمة مراقبتي',
'tog-watchmoves' => 'أضف الصفحات والملفات التي أنقلها إلى قائمة مراقبتي',
'tog-watchdeletion' => 'أضف الصفحات والملفات التي أحذفها إلى قائمة مراقبتي',
'tog-minordefault' => 'علم كل التعديلات طفيفة افتراضيا',
'tog-previewontop' => 'أظهر العرض المسبق قبل صندوق التحرير',
'tog-previewonfirst' => 'أظهر معاينة مع أول تعديل',
'tog-enotifwatchlistpages' => 'أرسل لي رسالة إلكترونية عندما تُغيّر صفحة أو ملف في قائمة مراقبتي',
'tog-enotifusertalkpages' => 'أرسل لي رسالة إلكترونية عندما تعدل صفحة نقاشي',
'tog-enotifminoredits' => 'أرسل لي رسالة إلكترونية عن التعديلات الطفيفة للصفحات والملفات أيضا',
'tog-enotifrevealaddr' => 'أظهر عنوان بريدي الإلكتروني في رسائل الإخطار',
'tog-shownumberswatching' => 'اعرض عدد المستخدمين المراقبين',
'tog-oldsig' => 'التوقيع الحالي:',
'tog-fancysig' => 'عامل التوقيع كنص ويكي (بدون وصلة أوتوماتيكية)',
'tog-uselivepreview' => 'استخدم الاستعراض السريع (جافاسكريبت) (تجريبي)',
'tog-forceeditsummary' => 'نبهني عند إدخال ملخص تعديل فارغ',
'tog-watchlisthideown' => 'أخف تعديلاتي من قائمة المراقبة',
'tog-watchlisthidebots' => 'أخف تعديلات البوت من قائمة المراقبة',
'tog-watchlisthideminor' => 'أخف التعديلات الطفيفة من قائمة المراقبة',
'tog-watchlisthideliu' => 'أخف تعديلات المستخدمين المسجلين من قائمة المراقبة',
'tog-watchlisthideanons' => 'أخف تعديلات المستخدمين المجهولين من قائمة المراقبة',
'tog-watchlisthidepatrolled' => 'أخف التعديلات المراجعة من قائمة المراقبة',
'tog-ccmeonemails' => 'أرسل لي نسخا من رسائل البريد الإلكتروني التي أرسلها للمستخدمين الآخرين',
'tog-diffonly' => 'لا تعرض محتوى الصفحة أسفل الفروقات',
'tog-showhiddencats' => 'أظهر التصنيفات المخفية',
'tog-norollbackdiff' => 'أزل الفرق بعد القيام باسترجاع',

'underline-always' => 'دائما',
'underline-never' => 'أبدا',
'underline-default' => 'تبعا لإعدادات المتصفح',

# Font style option in Special:Preferences
'editfont-style' => 'نمط خط منطقة التحرير:',
'editfont-default' => 'تبعا لإعدادات المتصفح',
'editfont-monospace' => 'خط ثابت العرض',
'editfont-sansserif' => 'خط بلا زوائد',
'editfont-serif' => 'خط بزوائد',

# Dates
'sunday' => 'ela7ad',
'monday' => 'elithnaine',
'tuesday' => 'etholatha',
'wednesday' => 'elirbi3a',
'thursday' => 'el5amis',
'friday' => 'eljom3a',
'saturday' => 'essibt',
'sun' => 'ela7ad',
'mon' => 'el ithnaine',
'tue' => 'ethlath',
'wed' => 'elirb3a',
'thu' => 'el5mis',
'fri' => 'ejjom3a',
'sat' => 'essibt',
'january' => 'Janvi',
'february' => 'Fivri',
'march' => 'Mars',
'april' => 'Avril',
'may_long' => 'Mai',
'june' => 'Juin',
'july' => 'Juilia',
'august' => 'Août',
'september' => 'Septembre',
'october' => 'Octobre',
'november' => 'Novembre',
'december' => 'Décembre',
'january-gen' => 'Janvi',
'february-gen' => 'Fivri',
'march-gen' => 'Mars',
'april-gen' => 'Avril',
'may-gen' => 'Mai',
'june-gen' => 'Juin',
'july-gen' => 'Juilia',
'august-gen' => 'Août',
'september-gen' => 'Septembre',
'october-gen' => 'Octobre',
'november-gen' => 'Novembre',
'december-gen' => 'Décembre',
'jan' => 'Janv',
'feb' => 'Fivr',
'mar' => 'Mars',
'apr' => 'Avrl',
'may' => 'Mai',
'jun' => 'Juin',
'jul' => 'Juil',
'aug' => 'Août',
'sep' => 'Sept',
'oct' => 'Oct',
'nov' => 'Nov',
'dec' => 'Déc',

# Categories related messages
'pagecategories' => '{{PLURAL:Catégorie weħed|Zouz catégories|$1 catégories|$1 en catégorie}}',
'category_header' => 'صفحات تصنيف "$1"',
'subcategories' => 'التصنيفات الفرعية',
'category-media-header' => 'الوسائط في التصنيف "$1"',
'category-empty' => "''هذا التصنيف لا يحتوي حاليا على صفحات أو وسائط.''",
'hidden-categories' => '{{PLURAL:Catégorie mkhabia waħda|Zouz catégories mkhabbin|$1 catégories mkhabbin|$1 en catégorie mkhabia}}',
'hidden-category-category' => 'تصنيفات مخفية',
'category-subcat-count' => '{{PLURAL:$2|لا تصانيف فرعية في هذا التصنيف|هذا التصنيف فيه التصنيف الفرعي التالي فقط.|هذا التصنيف فيه {{PLURAL:$1||هذا التصنيف الفرعي|هذين التصنيفين الفرعيين|هذه ال$1 تصانيف الفرعية|هذه ال$1 تصنيفا فرعيا|هذه ال$1 تصنيف فرعي}}، من إجمالي $2.}}',
'category-subcat-count-limited' => 'هذا التصنيف فيه {{PLURAL:$1||التصنيف الفرعي التالي|التصنيفين الفرعيين التاليين|$1 تصانيف فرعية تالية|$1 تصنيفا فرعيا تاليا|$1 تصنيف فرعي تالي}}.',
'category-article-count' => '{{PLURAL:$2|لا يحتوي هذا التصنيف أي صفحات.|هذا التصنيف يحتوي على الصفحة التالية فقط.|{{PLURAL:$1||الصفحة التالية|الصفحتان التاليتان|ال$1 صفحات التالية|ال$1 صفحة التالية|ال$1 صفحة التالية}} في هذا التصنيف، من إجمالي $2.}}',
'category-article-count-limited' => '{{PLURAL:$1||الصفحة التالية|الصفحتان التاليتان|ال$1 صفحات التالية|ال$1 صفحة التالية|ال$1 صفحة التالية}} في التصنيف الحالي.',
'category-file-count' => '{{PLURAL:$2|لا يحتوي هذا التصنيف أي صفحات.|هذا التصنيف يحتوي على الصفحة التالية فقط.|{{PLURAL:$1||الصفحة التالية|الصفحتان التاليتان|ال$1 صفحات التالية|ال$1 صفحة التالية|ال$1 صفحة التالية}} في هذا التصنيف، من إجمالي $2.}}',
'category-file-count-limited' => '{{PLURAL:$1|الملف التالي|الملفان التاليان|ال$1 ملفات التالية|ال$1 ملفًا تاليًا|ال$1 ملف تالٍ}} في التصنيف الحالي.',
'listingcontinuesabbrev' => 'متابعة',
'index-category' => 'صفحات مفهرسة',
'noindex-category' => 'صفحات غير مفهرسة',
'broken-file-category' => 'صفحات تحتوي وصلات ملفات معطوبة',

'about' => 'عن',
'article' => 'صفحة محتوى',
'newwindow' => '(تفتح في نافذة جديدة)',
'cancel' => 'ifsa5',
'moredotdotdot' => 'المزيد...',
'mypage' => 'صفحتي',
'mytalk' => 'نقاشي',
'anontalk' => 'النقاش لعنوان الأيبي هذا',
'navigation' => 'Navigui',
'and' => '&#32;و',

# Cologne Blue skin
'qbfind' => 'جد',
'qbbrowse' => 'ara',
'qbedit' => 'modifi el page (baddelha)',
'qbpageoptions' => 'هذه الصفحة',
'qbmyoptions' => 'صفحاتي',
'faq' => 'الأسئلة الأكثر تكرارا',
'faqpage' => 'Project:أسئلة متكررة',

# Vector skin
'vector-action-addsection' => 'أضف موضوعا',
'vector-action-delete' => 'احذف',
'vector-action-move' => 'انقل',
'vector-action-protect' => 'احم',
'vector-action-undelete' => 'استرجع الحذف',
'vector-action-unprotect' => 'غير الحماية',
'vector-view-create' => 'أنشئ',
'vector-view-edit' => 'Baddel',
'vector-view-history' => "Warri l'historique",
'vector-view-view' => 'Aqra',
'vector-view-viewsource' => 'اعرض المصدر',
'actions' => 'Aεmel',
'namespaces' => 'El espaces de noms',
'variants' => 'Anweε',

'errorpagetitle' => 'ghalath',
'returnto' => 'ارجع إلى $1.',
'tagline' => 'Fima ykhoss {{SITENAME}}',
'help' => 'Mouεawna',
'search' => 'Lawwej',
'searchbutton' => 'Lawwej',
'go' => 'اذهب',
'searcharticle' => 'اذهب',
'history' => 'teri5 el milaf',
'history_short' => 'Historique',
'updatedmarker' => 'تم تحديثها منذ زيارتي الأخيرة',
'printableversion' => 'Copie bech tetetbaε',
'permalink' => 'Lien deyem',
'print' => 'itthba3',
'view' => 'عرض',
'edit' => 'Baddel',
'create' => 'أنشئ',
'editthispage' => 'modifi hal page',
'create-this-page' => 'أنشئ هذه الصفحة',
'delete' => 'احذف',
'deletethispage' => 'احذف هذه الصفحة',
'undelete_short' => 'استرجاع {{PLURAL:$1|تعديل واحد|تعديلين|$1 تعديلات|$1 تعديل|$1 تعديلا}}',
'viewdeleted_short' => 'عرض {{PLURAL:$1|تعديل محذوف|$1 تعديلات محذوفة}}',
'protect' => 'احم',
'protect_change' => 'غير',
'protectthispage' => 'احم هذه الصفحة',
'unprotect' => 'غير الحماية',
'unprotectthispage' => 'غير حماية هذه الصفحة',
'newpage' => 'صفحات جديدة',
'talkpage' => 'ناقش هذه الصفحة',
'talkpagelinktext' => 'Ħdith',
'specialpage' => 'صفحة خاصة',
'personaltools' => 'Outils mteεek',
'postcomment' => 'قسم جديد',
'articlepage' => 'عرض صفحة المحتوى',
'talk' => 'Ħdith',
'views' => 'Affichages',
'toolbox' => 'Outils',
'userpage' => 'عرض صفحة المستخدم',
'projectpage' => 'عرض صفحة المشروع',
'imagepage' => 'عرض صفحة الملف',
'mediawikipage' => 'عرض صفحة الرسالة',
'templatepage' => 'عرض صفحة القالب',
'viewhelppage' => 'عرض صفحة المساعدة',
'categorypage' => 'عرض صفحة التصنيف',
'viewtalkpage' => 'عرض النقاش',
'otherlanguages' => 'Bloughat okhra',
'redirectedfrom' => '(تم التحويل من $1)',
'redirectpagesub' => 'صفحة تحويل',
'lastmodifiedat' => 'Ekher tabdil elhassafħa nhar $2, mεa $1.',
'viewcount' => '{{PLURAL:$1|لم تعرض هذه الصفحة أبدا|تم عرض هذه الصفحة مرة واحدة|تم عرض هذه الصفحة مرتين|تم عرض هذه الصفحة $1 مرات|تم عرض هذه الصفحة $1 مرة}}.',
'protectedpage' => 'صفحة محمية',
'jumpto' => 'Emchi el:',
'jumptonavigation' => 'Navigation',
'jumptosearch' => 'Lawwej',
'view-pool-error' => 'عذرا، الخوادم منهكة حاليا.
يحاول مستخدمون كثر الوصول إلى هذه الصفحة.
من فضلك انتظر قليلا قبل أن تحاول الوصول إلى هذه الصفحة مجددا.

$1',
'pool-timeout' => 'انتهاء الانتظار للقفل',
'pool-queuefull' => 'طابور الاقتراع ملئ',
'pool-errorunknown' => 'خطأ غير معروف',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'Fima ykhoss {{SITENAME}}',
'aboutpage' => 'Project:Fima ykhoss',
'copyright' => 'المحتوى متوفر تحت $1.',
'copyrightpage' => '{{ns:project}}:حقوق النسخ',
'currentevents' => 'Laħdeth mtaε tawa',
'currentevents-url' => 'Project:Laħdeth mtaε tawa',
'disclaimers' => "Ɛadam mas'ouliya",
'disclaimerpage' => "Project:Ɛadam mas'ouliya bsifa εamma",
'edithelp' => 'مساعدة التحرير',
'mainpage' => 'Elpage principale',
'mainpage-description' => 'Elpage principale',
'policy-url' => 'Project:سياسة',
'portal' => 'Mojtamaε',
'portal-url' => 'Project:Mojtamaε',
'privacy' => 'Syeset elconfidentialité',
'privacypage' => 'Project:Syeset elconfidentialité',

'badaccess' => 'خطأ في السماح',
'badaccess-group0' => 'ليس من المسموح لك تنفيذ الفعل الذي طلبته.',
'badaccess-groups' => 'الفعل الذي طلبته مقصور على المستخدمين في {{PLURAL:$2||مجموعة|واحدة من مجموعتي|واحدة من مجموعات}}: $1.',

'versionrequired' => 'تلزم نسخة $1 من ميدياويكي',
'versionrequiredtext' => 'تلزم النسخة $1 من ميدياويكي لاستعمال هذه الصفحة. انظر [[Special:Version|صفحة النسخة]]',

'ok' => 'ok',
'retrievedfrom' => 'Tekhdhet men "$1"',
'youhavenewmessages' => 'توجد لديك $1 ($2).',
'youhavenewmessagesmulti' => 'لديك رسائل جديدة على $1',
'editsection' => 'Baddel essafħa',
'editold' => 'Baddel',
'viewsourceold' => 'اعرض المصدر',
'editlink' => 'modifi el page (baddelha)',
'viewsourcelink' => 'Warri essource',
'editsectionhint' => 'Baddel essection: $1',
'toc' => 'Contenu',
'showtoc' => 'اعرض',
'hidetoc' => 'أخف',
'collapsible-collapse' => 'اطو',
'collapsible-expand' => 'وسع',
'thisisdeleted' => 'أأعرض أو أسترجع $1؟',
'viewdeleted' => 'أأعرض $1؟',
'restorelink' => '{{PLURAL:$1|$1 تعديل محذوف|تعديلا واحدا محذوفا|تعديلين محذوفين|$1 تعديلات محذوفة|$1 تعديلا محذوفا|$1 تعديلا محذوفا}}',
'feedlinks' => 'التغذية:',
'feed-invalid' => 'نوع اشتراك التلقيم غير صحيح.',
'feed-unavailable' => 'التلقيمات غير متوفرة',
'site-rss-feed' => '$1 تلقيم أر إس إس',
'site-atom-feed' => 'Flux Atom mtaε $1',
'page-rss-feed' => '"$1" تلقيم أر إس إس',
'page-atom-feed' => '$1 تلقيم أتوم',
'red-link-title' => '$1 (Essafħa mouch mawjouda)',
'sort-descending' => 'ترتيب تنازلي',
'sort-ascending' => 'ترتيب تصاعدي',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Safħa',
'nstab-user' => 'صفحة مستخدم',
'nstab-media' => 'صفحة وسيط',
'nstab-special' => 'Safħa spéciale',
'nstab-project' => 'صفحة مشروع',
'nstab-image' => 'Fichier',
'nstab-mediawiki' => 'رسالة',
'nstab-template' => 'قالب',
'nstab-help' => 'صفحة مساعدة',
'nstab-category' => 'تصنيف',

# Main script and global functions
'nosuchaction' => 'لا يوجد فعل كهذا',
'nosuchactiontext' => 'الفعل المحدد بواسطة المسار غير صحيح.
ربما تكون قد كتبت المسار بطريقة غير صحيحة، أو اتبعت وصلة غير صحيحة.
هذا ربما يشير أيضا إلى علة في {{SITENAME}}.',
'nosuchspecialpage' => 'لا توجد صفحة خاصة بهذا الاسم',
'nospecialpagetext' => '<strong>لقد طلبت صفحة خاصة غير صحيحة.</strong>

قائمة بالصفحات الخاصة الصحيحة يمكن إيجادها في [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'ghalath',
'databaseerror' => 'خطأ في قاعدة البيانات',
'laggedslavemode' => "'''تحذير:''' الصفحة قد لا تحتوي على أحدث التحديثات.",
'readonly' => 'قاعدة البيانات مغلقة',
'enterlockreason' => 'أدخل سببا للغلق، متضمنا تقديرا لوقت رفع الغلق',
'readonlytext' => 'قاعدة البيانات مغلقة حاليا أمام المدخلات الجديدة والتعديلات الأخرى، السبب غالبا ما يكون الصيانة، وستعود قاعدة البيانات للوضع الطبيعي قريبا.

الإداري الذي أغلق قاعدة البيانات أعطى التفسير التالي: $1',
'missing-article' => 'Elbase de données malqatech ettexte mtaε essafħa elli supposée talqaha, welli esmha "$1" $2.

Hedha elli ysir elεada waqtelli tħel farq qdim walla lien mtaε l\'historique mtaε safħa tnaħħat.

Idha ken mouch hedheka li sar, rak momken lqit mochkla fel programme.
Aman qoul elweħeb mel les [[Special:ListUsers/sysop|administrateurs]], waεtih ellien elli ħabit temchilou.',
'missingarticle-rev' => '(رقم المراجعة: $1)',
'missingarticle-diff' => '(فرق: $1، $2)',
'readonly_lag' => 'تم إغلاق قاعدة البيانات تلقائيا حتى تستطيع الخواديم التابعة ملاحقة الخادوم الرئيسي',
'internalerror' => 'خطأ داخلي',
'internalerror_info' => 'خطأ داخلي: $1',
'fileappenderrorread' => 'تعذرت قراءة "$1" أثناء الإضافة.',
'fileappenderror' => 'تعذرت إضافة "$1" إلى "$2".',
'filecopyerror' => 'لم يمكن نسخ الملف "$1" إلى "$2".',
'filerenameerror' => 'لم يمكن إعادة تسمية الملف "$1" إلى "$2".',
'filedeleteerror' => 'لم يمكن حذف الملف "$1".',
'directorycreateerror' => 'لم يمكن إنشاء المجلد "$1".',
'filenotfound' => 'لم يمكن إيجاد الملف "$1".',
'fileexistserror' => 'غير قادر على الكتابة للملف "$1": الملف موجود',
'unexpected' => 'قيمة غير متوقعة: "$1"="$2".',
'formerror' => 'خطأ: لم يمكن تنفيذ الاستمارة',
'badarticleerror' => 'لا يمكن إجراء هذا الفعل على هذه الصفحة.',
'cannotdelete' => 'تعذر حذف الصفحة أو الملف "$1".
ربما حذفها شحص آخر.',
'cannotdelete-title' => 'لا يمكن حذف الصفحة "$1"',
'delete-hook-aborted' => 'faskhan wa9fou flash.
mahouwech mobarrar',
'badtitle' => 'عنوان سيء',
'badtitletext' => 'عنوان الصفحة المطلوب إما غير صحيح أو فارغ، وربما الوصلة بين اللغات أو بين المشاريع خاطئة.
ومن الممكن وجود رموز لا تصلح للاستخدام في العناوين.',
'perfcached' => 'البيانات التالية مختزنة وقد لا تكون محدثة. {{PLURAL:$1||نتيجة واحدة|نتيجتان|$1 نتائج|$1 نتيجة}} على الأكثر {{PLURAL:$1||مختزنة|مختزنتان|مختزنة}}.',
'perfcachedts' => 'البيانات التالية مختزنة وكان آخر تحديث لها في $1. {{PLURAL:$4||نتيجة واحدة|نتيجتان|$4 نتائج|$4 نتيجة}} على الأكثر {{PLURAL:$4||مختزنة|مختزنتان|مختزنة}}.',
'querypage-no-updates' => 'التحديثات لهذه الصفحة معطلة حاليا.
البيانات هنا لن يتم تحديثها حاليا.',
'viewsource' => 'اعرض المصدر',
'viewsource-title' => 'إظهار مصدر $1',
'actionthrottled' => 'لا يمكن عمل المزيد من هذا الفعل',
'actionthrottledtext' => 'كإجراء ضد السبام، أنت ممنوع من إجراء هذا الفعل عدد كبير من المرات في فترة زمنية قصيرة، ولقد تجاوزت هذا الحد.
من فضلك حاول مرة ثانية خلال عدة دقائق.',
'protectedpagetext' => 'هذه الصفحة تمت حمايتها لمنع التعديل.',
'viewsourcetext' => 'يمكنك رؤية ونسخ مصدر هذه الصفحة:',
'viewyourtext' => "يمكنك رؤية ونسخ مصدر ''' تعديلاتك ''' في هذه الصفحة:",
'protectedinterface' => 'هذه الصفحة توفر نص الواجهة للبرنامج، وهي مقفلة لمنع التخريب.',
'editinginterface' => "'''تحذير:''' أنت تقوم بتحرير صفحة تستخدم في الواجهة النصية للبرنامج.
سوف تؤثر التغييرات على هذه الصفحة على مظهر واجهة المستخدم للمستخدمين الآخرين.
للترجمات، من فضلك استخدم مشروع ترجمة ميدياويكي [//translatewiki.net/wiki/Main_Page?setlang=ar translatewiki.net].",
'cascadeprotected' => 'تمت حماية هذه الصفحة من التعديل لأنها مدمجة في {{PLURAL:$1||الصفحة التالية، والتي|الصفحتين التاليتين، واللتين|الصفحات التالية، والتي}} تم استعمال خاصية "حماية الصفحات المدمجة" {{PLURAL:$1||بها|بهما|بها}}:
$2',
'namespaceprotected' => "لا تمتلك الصلاحية لتعديل الصفحات في نطاق '''$1'''.",
'customcssprotected' => 'أنت لا تمتلك السماح لتعديل صفحة الCSS هذه، لأنها تحتوي على الإعدادات الشخصية لمستخدم آخر.',
'customjsprotected' => 'أنت لا تمتلك السماح لتعديل صفحة الجافاسكريبت هذه، لأنها تحتوي على الإعدادات الشخصية لمستخدم آخر.',
'ns-specialprotected' => 'الصفحات الخاصة لا يمكن تعديلها.',
'titleprotected' => "{{GENDER:$1|حمى|حمت}} [[User:$1|$1]] هذا العنوان من الإنشاء.
السبب المعطى هو ''$2''.",
'filereadonlyerror' => 'تعذر تعديل الملف "$1" لأن مستودع الملف "$2" في وضع القراءة فقط. 

المدير الذي قام بغلقه قدم التفسير التالي: "$3".',
'invalidtitle-knownnamespace' => 'عنوان غير صالح في النطاق «$2» مع نص «$3»',
'invalidtitle-unknownnamespace' => 'عنوان غير صالح ذو نطاق غير معروف رقم $1 ونص «$2»',
'exception-nologin' => 'غير مسجل الدخول',
'exception-nologin-text' => "hedhi ess'af7a wa 2ella el action te7tej mennek bech etloginni il hedha el wiki",

# Virus scanner
'virus-badscanner' => "ضبط سيء: ماسح فيروسات غير معروف: ''$1''",
'virus-scanfailed' => 'فشل المسح (كود $1)',
'virus-unknownscanner' => 'مضاد فيروسات غير معروف:',

# Login and logout pages
'logouttext' => "'''أنت الآن غير مسجل الدخول.'''

تستطيع المتابعة باستعمال {{SITENAME}} كمجهول، أو <span class='plainlinks'>[$1 الدخول مرة أخرى]</span> بنفس الاسم أو باسم آخر.
من الممكن أن ترى بعض الصفحات كما لو أنك مسجل الدخول، وذلك حتى تقوم بإفراغ الصفحات المختزنة في المتصفح لديك.",
'yourname' => 'اسم المستخدم:',
'yourpassword' => 'كلمة السر:',
'yourpasswordagain' => 'أعد كتابة كلمة السر:',
'remembermypassword' => 'تذكر دخولي على هذا الحاسوب (إلى {{PLURAL:$1||يوم واحد|يومين|$1 أيام|$1 يومًا|$1 يوم}} كحد أقصى)',
'yourdomainname' => 'نطاقك:',
'externaldberror' => 'هناك إما خطأ في دخول قاعدة البيانات الخارجية أو أنه غير مسموح لك بتحديث حسابك الخارجي.',
'login' => 'ادخل',
'nav-login-createaccount' => 'Connecti / aεmel compte',
'loginprompt' => 'يجب أن تكون الكوكيز لديك مفعلة لتسجل الدخول إلى {{SITENAME}}.',
'userlogin' => 'ادخل / أنشئ حسابا',
'userloginnocreate' => 'دخول',
'logout' => 'اخرج',
'userlogout' => 'خروج',
'notloggedin' => 'غير مسجل الدخول',
'nologin' => "ألا تمتلك حسابا؟ '''$1'''.",
'nologinlink' => 'أنشئ حسابا',
'createaccount' => 'أنشئ حسابا',
'gotaccount' => "تمتلك حسابا بالفعل؟ '''$1'''.",
'gotaccountlink' => 'ادخل',
'userlogin-resetlink' => 'أنسيت بيانات الولوج؟',
'createaccountmail' => 'بواسطة البريد الإلكتروني',
'createaccountreason' => 'السبب:',
'badretype' => 'كلمات السر التي أدخلتها لا تتطابق.',
'userexists' => 'اسم المستخدم الذي تم إدخاله مستعمل بالفعل.
الرجاء اختيار اسم مختلف.',
'loginerror' => 'خطأ في الدخول',
'createaccounterror' => 'تعذر إنشاء حساب المستخدم: $1',
'nocookiesnew' => 'تم إنشاء حساب المستخدم، ولكنك لست مسجل الدخول بعد.
يستخدم {{SITENAME}} كوكيز لتسجيل الدخول.
لديك الكوكيز معطلة.
من فضلك فعلها، ثم سجل الدخول باسم المستخدم وكلمة السر الجديدين.',
'nocookieslogin' => 'يستخدم {{SITENAME}} الكوكيز لتسجيل الدخول.
الكوكيز معطلة لديك.
من فضلك فعلها ثم حاول مرة أخرى.',
'nocookiesfornew' => 'لم يتم إنشاء حساب المستخدم، لأننا لم نستطع تأكيد مصدره. 
تأكد من أن ملفات تعريف الارتباط (الكوكيز) مفعلة عندك، ثم أعد تحميل الصفحة وحاول مرة أخرى.',
'noname' => 'لم تحدد اسم مستخدم صحيح.',
'loginsuccesstitle' => 'تم الدخول بشكل صحيح',
'loginsuccess' => "'''لقد قمت بتسجيل الدخول ل{{SITENAME}} باسم \"\$1\".'''",
'nosuchuser' => 'لا يوجد مستخدم بالاسم "$1".
أسماء المستخدمين حساسة لحالة الحروف.
تأكد من إملاء الاسم، أو [[Special:UserLogin/signup|قم بإنشاء حساب جديد]].',
'nosuchusershort' => 'لا يوجد مستخدم باسم $1".
تأكد من إملاء الاسم.',
'nouserspecified' => 'يجب عليك تحديد اسم مستخدم.',
'login-userblocked' => 'هذا المستخدم ممنوع. لا يسمح بالولوج.',
'wrongpassword' => 'كلمة السر التي أدخلتها غير صحيحة.
من فضلك حاول مرة أخرى.',
'wrongpasswordempty' => 'كلمة السر المدخلة كانت فارغة.
من فضلك حاول مرة أخرى.',
'passwordtooshort' => 'يجب أن تتكون كلمة السر على الأقل من {{PLURAL:$1|حرف واحد|حرفين|$1 حروف|$1 حرفا|$1 حرف}}.',
'password-name-match' => 'يجب أن تكون كلمة المرور مختلفة عن اسم المستخدم.',
'password-login-forbidden' => 'تم منع استخدام اسم المستخدم هذا وكلمة السر.',
'mailmypassword' => 'أرسل لي كلمة سر جديدة',
'passwordremindertitle' => 'كلمة سر مؤقتة جديدة ل{{SITENAME}}',
'passwordremindertext' => 'لقد طلب شخص ما (غالبا أنت، من عنوان الآيبي $1) كلمة سر جديدة ل{{SITENAME}} ($4).
أنشئت كلمة سر مؤقتة للمستخدم "$2" وجعلت "$3".
لو أن هذا ما تريده، فعليك أن تقوم بتسجيل الدخول واختيار كلمة سر جديدة الآن.
سوف تنتهي مدة صلاحية كلمة سرك المؤقتة في غضون {{PLURAL:$5|أقل من يوم واحد|يوم واحد|يومين|$5 أيام|$5 يوما|$5 يوم}}.

إذا كان الذي قام بهذا الطلب شخص آخر أو إذا تذكرت كلمة سرك ولا ترغب  في تغييرها، فبإمكانك أن تتجاهل هذه الرسالة وأن تستمر في استخدام كلمة سرك القديمة.',
'noemail' => 'لا يوجد عنوان بريد إلكتروني مسجل للمستخدم "$1".',
'noemailcreate' => 'عليك تقديم عنوان بريد إلكتروني صالح',
'passwordsent' => 'تم إرسال كلمة سر جديدة إلى عنوان البريد الإلكتروني المسجل للمستخدم "$1".
من فضلك حاول تسجيل الدخول مرة ثانية بعد استلامها.',
'blocked-mailpassword' => 'تم منع عنوان الأيبي الخاص بك من التحرير، ولمنع التخريب لا يمكنك أن تستخدم خاصية استرجاع كلمة السر.',
'eauthentsent' => 'تم إرسال رسالة تأكيد إلكترونية إلى العنوان المسمى.
حتى ترسل أي رسالة أخرى لذلك الحساب عليك أن تتبع التعليمات الواردة في الرسالة لتأكيد أن هذا الحساب هو لك بالفعل.',
'throttled-mailpassword' => 'تم بالفعل إرسال تذكير بكلمة السر، في ال{{PLURAL:$1||ساعة الماضية|ساعتين الماضيتين|$1 ساعات الماضية|$1 ساعة الماضية}}.
لمنع التخريب، سيتم إرسال تذكير واحد كل {{PLURAL:$1||ساعة|ساعتين|$1 ساعات|$1 ساعة}}.',
'mailerror' => 'خطأ أثناء إرسال البريد: $1',
'acct_creation_throttle_hit' => 'أنشأ زوار هذه الويكي باستخدام عنوان آيبيك {{PLURAL:$1||حسابا واحدا|حسابين|$1 حسابات|$1 حسابا|$1 حساب}} في اليوم الماضي، وهو الحد الأقصى المسموح به في هذه الفترة الزمنية.
وكنتيجة لذلك، لن يتمكن الزوار الذين يستخدمون عنوان الأيبي هذا من إنشاء أي حسابات أخرى حاليا.',
'emailauthenticated' => 'تم تأكيد بريدك الإلكتروني في $2 الساعة $3.',
'emailnotauthenticated' => 'لم يتم التحقق من بريدك الإلكتروني.
لن يتم إرسال رسائل لأي من الميزات التالية.',
'noemailprefs' => 'حدد عنوان بريد إلكتروني في تفضيلاتك لهذه الخصائص لتعمل.',
'emailconfirmlink' => 'أكد عنوان بريدك الإلكتروني',
'invalidemailaddress' => 'لا يمكن قبول عنوان البريد الإلكتروني حيث تبدو صيغته خاطئة.
ضع عنوانا مضبوطا أو أفرغ هذا الحقل.',
'cannotchangeemail' => 'تغيير عنوان البريد الإلكتروني لهذا الحساب غير ممكن على هذا الويكي',
'emaildisabled' => 'لا يمكن إرسال رسائل البريد الإلكتروني من هذا الموقع.',
'accountcreated' => 'تم إنشاء الحساب',
'accountcreatedtext' => 'تم إنشاء الحساب الخاص ب$1.',
'createaccount-title' => 'إنشاء حساب في {{SITENAME}}',
'createaccount-text' => 'شخص ما أنشأ حسابا لعنوان بريدك الإلكتروني في {{SITENAME}} ($4) بالاسم "$2"، كلمة السر "$3".
ينبغي عليك تسجيل الدخول وتغيير كلمة السر الخاصة بك الآن.

يمكنك تجاهل هذه الرسالة، لو تم إنشاء هذا الحساب بالخطأ.',
'usernamehasherror' => 'لا يمكن أن يحتوي اسم المستخدم على محارف هاش',
'login-throttled' => 'لقد قمت بمحاولات دخول كثيرة جدا مؤخرا.
من فضلك انتظر قبل المحاولة مرة أخرى.',
'login-abort-generic' => 'لم ينجح ولوجك - إجهاض',
'loginlanguagelabel' => 'اللغة: $1',
'suspicious-userlogout' => 'رفض طلب خروجك لأنه يبدو كأنه أرسل عن طريق متصفح معطوب أو وسيط تخزين.',

# Email sending
'php-mail-error-unknown' => "خطأ غير معروف في وظيفة البريد PHP's mail()",
'user-mail-no-addy' => 'لقد حاولت إرسال بريد إلكتروني دون عنوان بريد إلكتروني.',

# Change password dialog
'resetpass_announce' => 'تم تسجيل دخولك بكلمة سر مؤقتة.
للدخول بشكل نهائي، يجب عليك ضبط كلمة سر جديدة هنا:',
'resetpass_header' => 'غير كلمة سر الحساب',
'oldpassword' => 'كلمة السر القديمة:',
'newpassword' => 'كلمة السر الجديدة:',
'retypenew' => 'أعد كتابة كلمة السر الجديدة:',
'resetpass_submit' => 'ضبط كلمة السر والدخول',
'changepassword-success' => 'تم تغيير كلمة السر الخاصة بك بنجاح! يتم تسجيل دخولك الآن...',
'resetpass_forbidden' => 'كلمات السر لا يمكن تغييرها',
'resetpass-no-info' => 'يجب أن تكون مسجل الدخول للوصول إلى هذه الصفحة مباشرة.',
'resetpass-submit-loggedin' => 'تغيير كلمة السر',
'resetpass-submit-cancel' => 'ifsa5',
'resetpass-wrong-oldpass' => 'كلمة سر حالية أو مؤقتة غير صحيحة.
ربما تكون غيرت كلمة السر الخاصة بك بنجاح أو طلبت كلمة سر مؤقتة جديدة.',
'resetpass-temp-password' => 'كلمة سر مؤقتة:',

# Special:PasswordReset
'passwordreset' => 'إعادة ضبط كلمة السر',
'passwordreset-legend' => 'إعادة تعيين كلمة السر',
'passwordreset-disabled' => 'عُطّلت إعادة تعيين كلمة السر على هذه الويكي.',
'passwordreset-username' => 'اسم المستخدم:',
'passwordreset-domain' => 'النطاق:',
'passwordreset-capture' => 'أأعرض البريد الإلكتروني الناتج؟',
'passwordreset-capture-help' => 'إذا علّمت هذا الصندوق فسيعرض لك البريد الإلكتروني (الذي يحتوي كلمة سر مؤقتة) وسيرسل أيضا للمستخدم.',
'passwordreset-email' => 'عنوان البريد الإلكتروني:',
'passwordreset-emailtitle' => 'تفاصيل حساب {{SITENAME}}',
'passwordreset-emailtext-ip' => 'احد ما (قد يكون انت$1)طلب مذكرة تفاصيل الحساب ل{{SITENAME}} ($4).المستخدم الاتي {{PLURAL:$3|الحساب هو|الحسابات هي}} قد قرن بهذا العنوان :

$2

{{PLURAL:$3|كلمة المرور المؤقتة|كلمات المرور المؤقة}}سينتهي في {{PLURAL:$5|يوم|ايام$5 }}
من الافضل ان تسجل الدخول وتختار كلمة مرور جديدة الان .
إذا قام شخص آخر بهذا الطلب، أو إذا  تذكرت كلمة المرور الأصلية الخاصة بك،ولم تعد ترغب في تغييره، يمكنك تجاهل هذه الرسالة ومتابعة استخدام  كلمة المرورالقديمة.',
'passwordreset-emailtext-user' => 'احد ما (قد يكون انت$1)طلب مذكرة تفاصيل الحساب ل{{SITENAME}} ($4).المستخدم الاتي {{PLURAL:$3|الحساب هو|الحسابات هي}} قد قرن بهذا العنوان :

$2

{{PLURAL:$3|كلمة المرور المؤقتة|كلمات المرور المؤقة}}سينتهي في {{PLURAL:$5|يوم|ايام$5 }}
من الافضل ان تسجل الدخول وتختار كلمة مرور جديدة الان .
إذا قام شخص آخر بهذا الطلب، أو إذا  تذكرت كلمة المرور الأصلية الخاصة بك،ولم تعد ترغب في تغييره، يمكنك تجاهل هذه الرسالة ومتابعة استخدام  كلمة المرورالقديمة.',
'passwordreset-emailelement' => 'اسم المستخدم: $1
كلمة السر المؤقتة: $2',
'passwordreset-emailsent' => 'أرسل بريد إلكتروني تذكيري',
'passwordreset-emailsent-capture' => 'أرسل بريد إلكتروني تذكيري وهو معروض بالأسفل.',
'passwordreset-emailerror-capture' => 'ولّد بريد إلكتروني تذكيري وهو معروض بالأسفل لكن فشل إرساله للمستخدم: $1',

# Special:ChangeEmail
'changeemail' => 'تغيير عنوان البريد الإلكتروني',
'changeemail-header' => 'تغيير عنوان البريد الإلكتروني للحساب',
'changeemail-text' => 'أكمل هذا النموذج لتغيير عنوان البريد الإلكتروني. سوف تحتاج إلى إدخال كلمة السر الخاصة بك لتأكيد هذا التغيير.',
'changeemail-no-info' => 'يجب تسجيل الدخول للوصول إلى هذه الصفحة مباشرة.',
'changeemail-oldemail' => 'عنوان البريد الإلكتروني الحالي:',
'changeemail-newemail' => 'عنوان البريد الإلكتروني الجديد:',
'changeemail-none' => '(لا شيء)',
'changeemail-submit' => 'غيّر البريد الإلكتروني',
'changeemail-cancel' => 'ifsa5',

# Edit page toolbar
'bold_sample' => 'نص غليظ',
'bold_tip' => 'نص غليظ',
'italic_sample' => 'نص مائل',
'italic_tip' => 'نص مائل',
'link_sample' => 'عنوان وصلة',
'link_tip' => 'وصلة داخلية',
'extlink_sample' => 'http://www.example.com عنوان الوصلة',
'extlink_tip' => 'وصلة خارجية (تذكر بادئة http://)',
'headline_sample' => 'نص عنوان رئيسي',
'headline_tip' => 'عنوان من المستوى الثاني',
'nowiki_sample' => 'أدخل النص غير المنسق هنا',
'nowiki_tip' => 'أهمل تهيئة الويكي',
'image_tip' => 'ملف مدرج',
'media_tip' => 'وصلة ملف',
'sig_tip' => 'توقيعك مع الساعة والتاريخ',
'hr_tip' => 'خط أفقي (تجنب الاستخدام بكثرة)',

# Edit pages
'summary' => 'ملخص:',
'subject' => 'موضوع/عنوان:',
'minoredit' => 'هذا تعديل طفيف',
'watchthis' => 'راقب هذه الصفحة',
'savearticle' => 'احفظ الصفحة',
'preview' => 'معاينة',
'showpreview' => 'أظهر معاينة',
'showlivepreview' => 'عرض مباشر',
'showdiff' => 'أظهر التغييرات',
'anoneditwarning' => "'''تحذير:''' لم تقم بالدخول.
سيسجل عنوان الآيبي خاصتك في تاريخ هذه الصفحة.",
'anonpreviewwarning' => "''أنت غير مسجل الدخول. الحفظ سيسجل عنوان الأيبي الخاص بك في تاريخ هذه الصفحة.''",
'missingsummary' => "'''تنبيه:''' لم تقم بكتابة ملخص للتعديل.
إذا قمت بضغط حفظ الصفحة مرة أخرى، فيتم حفظ تعديلك بدون ملخص.",
'missingcommenttext' => 'من فضلك أدخل تعليقا في الأسفل.',
'missingcommentheader' => "'''تنبيه:''' لم تقم بوضع موضوع/عنوان لهذا التعليق.
إذا قمت بالضغط على \"{{int:savearticle}}\" مجددا، سيتم حفظ تعليقك بدون عنوان.",
'summary-preview' => 'معاينة الملخص:',
'subject-preview' => 'معاينة للموضوع/العنوان:',
'blockedtitle' => 'المستخدم ممنوع',
'blockedtext' => "'''اسم المستخدم أو عنوان الأيبي الخاص بك تم منعه.'''

قام بالمنع $1.
سبب المنع هو: ''$2''.

* بداية المنع: $8
* انتهاء المنع: $6
* الممنوع المقصود: $7

يمكنك الاتصال ب$1 أو مع أحد [[{{MediaWiki:Grouppage-sysop}}|الإداريين]] للنقاش حول المنع.
لا يمكنك استخدام خاصية 'مراسلة هذا المستخدم' إلا إذا كنت قد وضعت عنوان بريدي صحيح في [[Special:Preferences|تفضيلات حسابك]] ولم يتم منعك من استخدامها.
عنوان الأيبي الخاص بك حاليا هو $3، ورقم المنع هو #$5.
من فضلك اذكر كل التفاصيل بالأعلى في أي استعلامات تقوم بها.",
'autoblockedtext' => 'تم منع عنوان آيبيك تلقائيا لأن مستخدما آخرا ممنوعا بواسطة $1 استخدمه.
السبب الممنوح هو التالي:

:\'\'$2\'\'

* بداية المنع: $8
* انتهاء المنع: $6
* الممنوع المقصود: $7

يمكنك أن تتصل ب $1 أو أحد [[{{MediaWiki:Grouppage-sysop}}|الإداريين]] الآخرين لمناقشة المنع.

لاحظ أنه لا يمكنك استخدام خاصية "إرسال رسالة لهذا المستخدم" إلا لو كان لديك عنوان بريد إلكتروني صحيح مسجل في [[Special:Preferences|تفضيلاتك]] ولم يتم منعك من استخدامه.

عنوان آيبيك الحالي $3، ورقم المنع #$5.
من فضلك اذكر كل التفاصيل بالأعلى في أي استعلامات تقوم بها.',
'blockednoreason' => 'لا سبب معطى',
'whitelistedittext' => 'يجب عليك $1 لتتمكن من تعديل الصفحات.',
'confirmedittext' => 'يجب عليك تأكيد بريدك الإلكتروني قبل تعديل الصفحات.
من فضلك اكتب وأكد بريدك الإلكتروني من خلال [[Special:Preferences|تفضيلاتك]].',
'nosuchsectiontitle' => 'تعذر إيجاد القسم',
'nosuchsectiontext' => 'لقد حاولت تحرير قسم غير موجود.
ربما يكون قد تم نقله أو حذفه أثناء مشاهدتك للصفحة.',
'loginreqtitle' => 'تسجيل الدخول مطلوب',
'loginreqlink' => 'الولوج',
'loginreqpagetext' => 'يجب عليك $1 لتشاهد صفحات أخرى.',
'accmailtitle' => 'تم إرسال كلمة السر.',
'accmailtext' => "كلمة سر مولدة عشوائيا ل [[User talk:$1|$1]] تم إرسالها إلى $2.

كلمة السر لهذا الحساب الجديد يمكن تغييرها في صفحة ''[[Special:ChangePassword|تغيير كلمة السر]]'' عند تسجيل الدخول.",
'newarticle' => '(جديد)',
'newarticletext' => "لقد تبعت وصلة لصفحة لم يتم إنشائها بعد.
لإنشاء هذه الصفحة ابدأ الكتابة في الصندوق بالأسفل (انظر في [$1 صفحة المساعدة] للمزيد من المعلومات).
إذا كانت زيارتك لهذه الصفحة بالخطأ، اضغط على زر ''رجوع'' في متصفح الإنترنت لديك.",
'anontalkpagetext' => "----''هذه صفحة نقاش لمستخدم مجهول لم يقم بإنشاء حساب بعد أو لا يستعمل ذلك الحساب.
لذا فيجب علينا استعمال رقم الأيبي للتعرف عليه/عليها.
مثل هذا العنوان يمكن أن يشترك فيه عدة مستخدمين.
لو كنت مستخدما مجهولا وتشعر بأن تعليقات لا تخصك تم توجيهها إليك، من فضلك [[Special:UserLogin/signup|أنشئ حسابا]] أو [[Special:UserLogin|سجل الدخول]] لتجنب الارتباك المستقبلي مع مستخدمين مجهولين آخرين.''",
'noarticletext' => 'Mafamma ħatta texte tawa f\'essafħa hedhi.
Tnajjem [[Special:Search/{{PAGENAME}}|tfarkes εal titre mtaε essafħa]] fi safħat okhrine, <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} tfarkes f\'elhistoriques elli εandhom εaleqa], 
walla [{{fullurl:{{FULLPAGENAME}}|action=edit}} tbaddel essafħa hedhi]</span>',
'noarticletext-nopermission' => 'لا يوجد حاليا أي نص في هذه الصفحة.يمكنك [[Special:Search/{{PAGENAME}}|البحث عن عنوان هذه الصفحة]] في الصفحات الأخرى,أو <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} بحث السجلات المتصلة]</span>.',
'userpage-userdoesnotexist' => 'حساب المستخدم "<nowiki>$1</nowiki>" غير مسجل.
من فضلك تأكد أنك تريد إنشاء/تعديل هذه الصفحة.',
'userpage-userdoesnotexist-view' => 'حساب المستخدم "$1" غير مسجل.',
'blocked-notice-logextract' => 'هذا المستخدم ممنوع حاليا.
آخر مدخلة في سجل المنع موفرة بالأسفل كمرجع:',
'clearyourcache' => "'''ملاحظة:''' بعد الحفظ, أنت ربما تحتاج إلى إفراغ كاش متصفحك لرؤية التغييرات.
* '''فيرفكس / سفاري:''' اضغط ''Shift'' أثناء ضغط ''Reload'', أو اضغط أيا من ''Ctrl-F5'' أو ''Ctrl-R'' (''⌘-R'' على ماك)
* '''جوجل كروم:''' اضغط ''Ctrl-Shift-R'' (''⌘-Shift-R'' على ماك)
* '''إنترنت إكسبلورر:''' اضغط ''Ctrl'' أثناء ضغط ''Refresh''، أو اضغط ''Ctrl-F5''
* '''كنكرر:''' اضغط ''Reload'' أو اضغط ''F5''
* '''أوبرا:''' أفرغ الكاش في ''Tools → Preferences''",
'usercssyoucanpreview' => "'''ملاحظة:''' استعمل زر \"{{int:showpreview}}\" لتجربة CSS الجديد قبل حفظ الصفحة.",
'userjsyoucanpreview' => "'''ملاحظة:''' استعمل زر \"{{int:showpreview}}\" لتجربة جافاسكربت الجديدة قبل حفظ الصفحة.",
'usercsspreview' => "'''تذكر أنك تقوم بعرض الأنماط المتراصة (CSS) الخاصة بك فقط
لم يتم حفظها بعد!'''",
'userjspreview' => "'''تذكر أنك فقط تجرب/تعاين جافاسكربت.'''
'''لم يتم الحفظ بعد!'''",
'sitecsspreview' => "''' تذكر أنك فقط في وضع المعاينة لهذا CSS ''' 
''' ولم يتم حفظ الصفحة بعد! '''",
'sitejspreview' => "''' تذكر أنك فقط في وضع المعاينة لكود JavaScript هذا''' 
''' ولم يتم حفظه بعد! '''",
'userinvalidcssjstitle' => "'''تحذير:''' لا توجد واجهة  \"\$1\".
تذكر أن ملفات ال.css و ال.js تستخدم حروف صغيرة في العنوان ، كمثال {{ns:user}}:Foo/vector.css و ليس {{ns:user}}:Foo/Vector.css.",
'updated' => '(محدثة)',
'note' => "'''ملاحظة:'''",
'previewnote' => "'''تذكر أن هذه مجرد معاينة أولية.'''
لم تحفظ تغييراتك إلى الآن!",
'continue-editing' => 'أكمل التحرير',
'previewconflict' => 'هذا العرض يوضح النص الموجود في صندوق التحرير العلوي والذي سيظهر إذا اخترت الحفظ.',
'session_fail_preview' => "'''عذرا! لم نتمكن من حفظ التعديلات التي قمت بها نتيجة لضياع بيانات هذه الجلسة.
من فضلك حاول مرة أخرى.
في حال استمرار المشكلة حاول أن تقوم [[Special:UserLogout|بالخروج]] ومن ثم الولوج مرة أخرى.'''",
'session_fail_preview_html' => "'''عذرا! لم نستطع معالجة تعديلك بسبب فقدان بيانات الجلسة.'''

''لأن {{SITENAME}} بها HTML الخام مفعلة، العرض المسبق مخفي كاحتياط ضد هجمات الجافا سكريبت.''

'''إذا كانت هذه محاولة تعديل صادقة، من فضلك حاول مرة أخرى.
إذا كانت مازالت لا تعمل، حاول [[Special:UserLogout|تسجيل الخروج]] ثم تسجيل الدخول مجددا.'''",
'token_suffix_mismatch' => "'''تعديلك تم رفضه لأن عميلك أخطأ في علامات الترقيم
في نص التعديل. تم رفض التعديل لمنع فساد نص المقالة.
هذا يحدث أحيانا عندما تستخدم خدمة بروكسي مجهول معيبة مبنية على الوب.'''",
'edit_form_incomplete' => "'''بعض أجزاء من نموذج التعديل لم تصل إلى الخادم؛ تأكد من أن تعديلاتك لم تمس وحاول مجددا.'''",
'editing' => 'تحرير $1',
'creating' => 'إنشاء «$1»',
'editingsection' => 'تحرير $1 (قسم)',
'editingcomment' => 'تعديل $1 (قسم جديد)',
'editconflict' => 'تضارب في التحرير: $1',
'explainconflict' => "لقد عدل شخص آخر هذه الصفحة بعد أن بدأت أنت بتحريرها.
صندوق النصوص العلوي يحتوي على النص الموجود حاليا في الصفحة.
والتغييرات التي قمت أنت بها موجودة في الصندوق في أسفل الصفحة.
يجب أن تقوم بدمج تغييراتك في النص الموجود حاليا.
'''فقط''' ما هو موجود في الصندوق العلوي هو ما سيتم حفظه عند الضغط على زر \"حفظ الصفحة\".",
'yourtext' => 'نصك',
'storedversion' => 'النسخة المخزنة',
'nonunicodebrowser' => "'''تحذير: متصفحك لا يتوافق مع الترميز الموحد.
تمت معالجة هذا لكي تتمكن من تحرير الصفحات بأمان: الحروف التي ليست ASCII سوف تظهر في صندوق التحرير كأكواد سداسي عشرية.'''",
'editingold' => "''' تحذير: أنت تقوم الآن بتحرير نسخة قديمة من هذه الصفحة.
إذا قمت بحفظها، ستفقد كافة التغييرات التي حدثت بعد هذه النسخة. '''",
'yourdiff' => 'الفروق',
'copyrightwarning' => "من فضلك لاحظ أن جميع المساهمات ل {{SITENAME}} خاضعة وصادرة تحت ترخيص $2 (انظر في $1 للمزيد من التفاصيل)
إذا لم ترد أن تخضع كتابتك للتعديل والتوزيع الحر، لا تضعها هنا<br />.
كما أنك تتعهد بأنك قمت بكتابة ما هو موجود بنفسك، أو قمت بنسخها من مصدر يخضع ضمن الملكية العامة، أو مصدر حر آخر.
'''لا ترسل أي عمل ذي حقوق محفوظة بدون الإذن من صاحب الحق'''.",
'copyrightwarning2' => "من فضلك لاحظ أن جميع المساهمات في {{SITENAME}} يمكن أن تعدل أو تتغير أو تزال من قبل المساهمين الآخرين.
إذا لم تكن ترغب أن تعدل مشاركاتك بهذا الشكل، لا تضعها هنا.<br />
أنت تقر أيضا أنك كتبت هذا بنفسك، أو نسخته من مصدر يخضع للملكية العامة، أو مصدر حر آخر (انظر $1 للتفاصيل).
'''لا تضف أي عمل ذي حقوق محفوظة بدون تصريح!'''",
'longpageerror' => "'''خطأ: النص الذي قمت بإدخاله {{PLURAL:$1|واحد كيلوبايت|$1 كيلوبيات}} أطول, وهو أطول من الحد الأقصى {{PLURAL:$2|واحد كيلوبايت|$2 كيلوبايت}}.'''
و يتعذر حفظه.",
'readonlywarning' => "'''تحذير: لقد أغلقت قاعدة البيانات للصيانة، لذلك لن تتمكن من حفظ التعديلات التي قمت بها حاليا.
إذا رغبت بإمكانك أن تنسخ النص الذي تعمل عليه وتحفظه في ملف نصي إلى وقت لاحق.'''

الإداري الذي أغلقها أعطى هذا التفسير: $1",
'protectedpagewarning' => "'''تحذير: تمت حماية هذه الصفحة حتى يمكن للمستخدمين ذوي الصلاحيات الإدارية فقط تعديلها.'''
آخر مدخلة سجل موفرة بالأسفل كمرجع:",
'semiprotectedpagewarning' => "'''ملاحظة:''' تمت حماية هذه الصفحة بحيث يمكن للمستخدمين المسجلين فقط تعديلها.
آخر مدخلة سجل موفرة بالأسفل كمرجع:",
'cascadeprotectedwarning' => "'''تحذير:''' تمت حماية هذه الصفحة بحيث يستطيع المستخدمون ذوو الصلاحيات الإدارية فقط تعديلها، وذلك لأنها مدمجة في {{PLURAL:\$1||الصفحة التالية والتي تمت حمايتها|الصفحتين التاليتين واللتين تمت حمايتها|الصفحات التالية والتي تمت حمايتها}} بخاصية \"حماية الصفحات المدمجة\":",
'titleprotectedwarning' => "'''تحذير:  هذه الصفحة تمت حمايتها بحيث أن [[Special:ListGroupRights|صلاحيات معينة]] مطلوبة لإنشائها.'''
آخر مدخلة سجل موفرة بالأسفل كمرجع:",
'templatesused' => '{{PLURAL:$1||القالب المستخدم|القالبان المستخدمان|القوالب المستخدمة}} في هذه الصفحة:',
'templatesusedpreview' => '{{PLURAL:$1||القالب المستخدم|القالبان المستخدمان|القوالب المستخدمة}} في هذه المعاينة:',
'templatesusedsection' => '{{PLURAL:$1||القالب المستخدم|القالبان المستخدمان|القوالب المستخدمة}} في هذا القسم:',
'template-protected' => '(protégé)',
'template-semiprotected' => '(حماية جزئية)',
'hiddencategories' => '{{PLURAL:$1|هذه الصفحة غير موجودة في أي تصنايف مخفية|هذه الصفحة موجودة في تصنيف مخفي واحد|هذه الصفحة موجودة في تصنيفين مخفيين|هذه الصفحة موجودة في $1 تصانيف مخفية|هذه الصفحة موجودة في $1 تصنيفا مخفيا|هذه الصفحة موجودة في $1 تصنيف مخفي}}:',
'nocreatetext' => 'قام {{SITENAME}} بتحديد القدرة على إنشاء صفحات جديدة.
يمكنك العودة وتحرير صفحة موجودة بالفعل، أو [[Special:UserLogin|الدخول أو تسجيل حساب]].',
'nocreate-loggedin' => 'أنت لا تمتلك الصلاحية لإنشاء صفحات جديدة.',
'sectioneditnotsupported-title' => 'تعديل الأقسام غير مدعوم',
'sectioneditnotsupported-text' => 'تعديل الأقسام غير مدعوم في هذه الصفحة',
'permissionserrors' => 'أخطاء السماحات',
'permissionserrorstext' => 'لا تمتلك الصلاحية لفعل هذا، {{PLURAL:$1||للسبب التالي|للسببين التاليين|للأسباب التالية}}:',
'permissionserrorstext-withaction' => 'لا تملك الصلاحيات ل$2، لل{{PLURAL:$1||سبب التالي|سببين التاليين|أسباب التالية}}:',
'recreate-moveddeleted-warn' => "'''تحذير: أنت تقوم بإعادة إنشاء صفحة سبق حذفها.'''

يجب عليك التيقن من أن الاستمرار بتحرير هذه الصفحة ملائم.
سجلا الحذف والنقل لهذه الصفحة معروضان هنا للتيسير:",
'moveddeleted-notice' => 'هذه الصفحة تم حذفها.
سجلا الحذف والنقل للصفحة معروضان بالأسفل كمرجع.',
'log-fulllog' => 'أظهر السجل الكامل',
'edit-hook-aborted' => 'التعديل تم تركه بواسطة الخطاف.
لم يعط تفسيرا.',
'edit-gone-missing' => 'لم يمكن تحديث الصفحة.
يبدو أنه تم حذفها.',
'edit-conflict' => 'تضارب تحريري.',
'edit-no-change' => 'تعديلك تم تجاهله، لأنه لم يحدث أي تعديل للنص.',
'edit-already-exists' => 'لم يمكن إنشاء صفحة جديدة.
هي موجودة بالفعل.',
'defaultmessagetext' => 'نص الرسالة الافتراضي',

# Parser/template warnings
'expensive-parserfunction-warning' => "'''تحذير:''' هذه الصفحة تحتوي على استدعاءات دالة محلل كثيرة مكلفة.

ينبغي أن تكون أقل من {{PLURAL:$2||استدعاء واحد|استدعاءين|$2 استدعاءات|$2 استدعاء}}، يوجد الآن {{PLURAL:$1|استدعاء واحد|استدعاءان|$2 استدعاءات|$2 استدعاء}}.",
'expensive-parserfunction-category' => 'صفحات يوجد بها استدعاءات دوال محلل كثيرة ومكلفة',
'post-expand-template-inclusion-warning' => "'''تحذير:''' حجم تضمين القالب كبير جدا.
بعض القوالب لن تضمن.",
'post-expand-template-inclusion-category' => 'الصفحات حيث تم تجاوز حجم تضمين القالب',
'post-expand-template-argument-warning' => "'''تحذير:''' هذه الصفحة تحتوي على عامل قالب واحد على الأقل له حجم تمدد كبير جدا.
هذه العوامل تم حذفها.",
'post-expand-template-argument-category' => 'صفحات تحتوي مدخلات القالب المحذوفة',
'parser-template-loop-warning' => 'تم كشف حلقة قالب: [[$1]]',
'parser-template-recursion-depth-warning' => 'تم تجاوز حد عمق فرد القوالب ($1)',
'language-converter-depth-warning' => 'تم تخطي حد عمق محول اللغة ($1)',
'node-count-exceeded-category' => 'الصفحات التي حدث فيها تجاوز تعداد العقد',
'node-count-exceeded-warning' => 'تجاوزت هذه الصفحة تعداد العقد',
'expansion-depth-exceeded-category' => 'الصفحات التي حدث فيها تجاوز عمق التوسيع',
'expansion-depth-exceeded-warning' => 'الصفحة تجاوزت عمق التوسيع',
'parser-unstrip-loop-warning' => 'حلقة معراة تم الكشف عنها',
'parser-unstrip-recursion-limit' => 'تعدى حد العودية Unstrip  ($1)',

# "Undo" feature
'undo-success' => 'يمكن استرجاع التعديل.
من فضلك تحقق من المقارنة بالأسفل للتأكد من أن هذا هو ما تريد أن تفعله، وبعد ذلك احفظ التغييرات بالأسفل للانتهاء من استرجاع التعديل.',
'undo-failure' => 'لم يمكن استرجاع التعديل بسبب تعديلات متعارضة تمت على الصفحة.',
'undo-norev' => 'فشل في الرجوع عن التعديل حيث أنه غير موجود أو تم حذفه.',
'undo-summary' => 'الرجوع عن التعديل $1 بواسطة [[Special:Contributions/$2|$2]] ([[User talk:$2|نقاش]])',

# Account creation failure
'cantcreateaccounttitle' => 'لا يمكن إنشاء حساب',
'cantcreateaccount-text' => "إنشاء الحسابات من عنوان الأيبي هذا ('''$1''') تم منعه بواسطة [[User:$3|$3]].

السبب المعطى بواسطة $3 هو ''$2''",

# History pages
'viewpagelogs' => 'اعرض سجلات هذه الصفحة',
'nohistory' => 'لا يوجد تاريخ للتعديلات لهذه الصفحة.',
'currentrev' => 'المراجعة الحالية',
'currentrev-asof' => 'المراجعة الحالية بتاريخ $1',
'revisionasof' => 'Version mtaε $1',
'revision-info' => 'مراجعة $1 بواسطة $2',
'previousrevision' => '→ مراجعة أقدم',
'nextrevision' => 'مراجعة أحدث ←',
'currentrevisionlink' => 'المراجعة الحالية',
'cur' => 'الحالي',
'next' => 'التالي',
'last' => 'السابق',
'page_first' => 'الأولى',
'page_last' => 'الأخيرة',
'histlegend' => 'اختيار الفرق: علم على صناديق النسخ للمقارنة واضغط قارن بين النسخ المختارة أو الزر بالأسفل.<br />
مفتاح: (الحالي) = الفرق مع النسخة الحالية
(السابق) = الفرق مع النسخة السابقة، ط = تغيير طفيف',
'history-fieldset-title' => 'تصفح التاريخ',
'history-show-deleted' => 'المحذوفة فقط',
'histfirst' => 'أول',
'histlast' => 'آخر',
'historysize' => '({{PLURAL:$1|1 بايت|$1 بايت}})',
'historyempty' => '(فارغ)',

# Revision feed
'history-feed-title' => 'تاريخ المراجعة',
'history-feed-description' => 'تاريخ التعديل لهذه الصفحة في الويكي',
'history-feed-item-nocomment' => '$1 في $2',
'history-feed-empty' => 'الصفحة المطلوبة غير موجودة.
من المحتمل أن تكون هذه الصفحة قد حذفت من الويكي، أو نقلت.
حاول [[Special:Search|البحث في الويكي]] عن صفحات جديدة ذات صلة.',

# Revision deletion
'rev-deleted-comment' => '(أزيل ملخص التعديل)',
'rev-deleted-user' => '(اسم المستخدم تمت إزالته)',
'rev-deleted-event' => '(فعل السجل تمت إزالته)',
'rev-deleted-user-contribs' => '[اسم المستخدم أو عنوان الأيبي تمت إزالته - التعديل مخفي من المساهمات]',
'rev-deleted-text-permission' => "'''حُذِفت''' مراجعة هذه الصفحة.
يمكنك العثور على التفاصيل في [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} سجل الحذف].",
'rev-deleted-text-unhide' => "'''حُذِفت''' مراجعة الصفحة هذه.
يمكن العثور على تفاصيل في [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} سجل الحذف].
مازال بإمكانك [$1 رؤية هذه المراجعة] إذا أردت المتابعة.",
'rev-suppressed-text-unhide' => "'''أُخفيت''' مراجعة الصفحة هذه.
يمكنك العثور على التفاصيل في [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} سجل الإخفاء].
بإمكانك [$1 رؤية هذه المراجعة] إذا أردت المتابعة.",
'rev-deleted-text-view' => "'''حُذِفت''' مراجعة هذه الصفحة.
يمكنك رؤيتها؛ ويمكنك العثور على التفاصيل في [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} سجل الحذف].",
'rev-suppressed-text-view' => "'''أُخفيت''' مراجعة الصفحة هذه.
يمكنك رؤيتها؛ ويمكنك العثور على التفاصيل في  [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} سجل الإخفاء].",
'rev-deleted-no-diff' => "لا يمكنك رؤية هذا الفرق لأن إحدى المراجعات '''حُذِفت'''.
يمكنك العثور على التفاصيل في [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} سجل الحذف].",
'rev-suppressed-no-diff' => "ليس بإمكانك مشاهدة هذا الفرق لأن إحدى المراجعات '''حذفت'''.",
'rev-deleted-unhide-diff' => "'''حُذِفت''' إحدى مراجعتي هذا الفرق.
يمكن العثور على التفاصيل في [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} سجل الحذف].
بإمكانك [$1 رؤية هذا الفرق] إذا أردت المتابعة.",
'rev-suppressed-unhide-diff' => "'''أُخفيت''' إحدى مراجعتي هذا الفرق.
يمكنك العثور على التفاصيل في [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} سجل الإخفاء].
بإمكانك [$1 رؤية هذا الفرق] إذا أردت المتابعة.",
'rev-deleted-diff-view' => "'''حُذِفت''' إحدى مراجعتي هذا الفرق.
يمكنك رؤية الفرق؛ ويمكنك العثور على التفاصيل في [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} سجل الحذف].",
'rev-suppressed-diff-view' => "'''أُخفيت''' إحدى مراجعتي هذا الفرق.
يمكنك رؤية هذا الفرق؛ ويمكنك العثور على التفاصيل في [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} سجل الإخفاء].",
'rev-delundel' => 'أظهر/أخف',
'rev-showdeleted' => 'أظهر',
'revisiondelete' => 'حذف/استرجاع المراجعات',
'revdelete-nooldid-title' => 'مراجعة هدف غير صحيحة',
'revdelete-nooldid-text' => 'إما أنك لم تحدد مراجعة (أو مراجعات) معينة هدفا لهذه الوظيفة، أو أن المراجعة المحددة غير موجودة، أو أنك تحاول إخفاء المراجعة الحالية.',
'revdelete-no-file' => 'الملف المحدد غير موجود.',
'revdelete-show-file-confirm' => 'هل أنت متأكد أنك تريد رؤية مراجعة محذوفة للملف "<nowiki>$1</nowiki>" بتاريخ $2 الساعة $3؟',
'revdelete-show-file-submit' => 'نعم',
'logdelete-selected' => "'''{{PLURAL:$1|حدث السجل المختار|أحداث السجل المختارة}}:'''",
'revdelete-confirm' => 'الإداريون الآخرون في {{SITENAME}} سيظل بإمكانهم رؤية المحتوى المخفي ويمكنهم استرجاعه مجددا من خلال هذه الواجهة نفسها، مالم يتم وضع قيود إضافية.
من فضلك أكد أنك تنوي فعل هذا، وأنك تفهم العواقب، وأنك تفعل هذا بالتوافق مع [[{{MediaWiki:Policy-url}}|السياسة]].',
'revdelete-suppress-text' => "الإخفاء ينبغي أن يتم استخدامه '''فقط''' في الحالات التالية:
* معلومات شخصية غير ملائمة
*: ''عناوين المنازل وأرقام التليفونات، أرقام الضمان الاجتماعي، إلى آخره.''",
'revdelete-legend' => 'وضع ضوابط رؤية',
'revdelete-hide-text' => 'أخف نص المراجعة',
'revdelete-hide-image' => 'أخف محتوى الملف',
'revdelete-hide-name' => 'أخف الفعل والهدف',
'revdelete-hide-comment' => 'أخف تعليق التعديل',
'revdelete-hide-user' => 'أخف اسم/آيبي المستخدم',
'revdelete-hide-restricted' => 'أخف البيانات عن الإداريين إضافة إلى الآخرين',
'revdelete-radio-same' => '(لا تغير)',
'revdelete-radio-set' => 'نعم',
'revdelete-radio-unset' => 'لا',
'revdelete-suppress' => 'أخف البيانات عن مديري النظام والبقية',
'revdelete-unsuppress' => 'إزالة الضوابط من المراجعات المسترجعة',
'revdelete-log' => 'السبب:',
'revdelete-submit' => 'طبق على {{PLURAL:$1||المراجعة المختارة|المراجعتين المختارتين|المراجعات المختارة}}',
'revdelete-success' => "'''تم تحديث رؤية المراجعات بنجاح.'''",
'revdelete-failure' => "'''تعذر تحديث رؤية المراجعة:'''
$1",
'logdelete-success' => "'''تم ضبط رؤية السجلات بنجاح.'''",
'logdelete-failure' => "'''تعذر ضبط رؤية السجل:'''
$1",
'revdel-restore' => 'تغيير الرؤية',
'pagehist' => 'تاريخ صفحة',
'deletedhist' => 'التاريخ المحذوف',
'revdelete-hide-current' => 'خطأ عند إحفاء العنصر المؤرخ في $2 $1: هذه هي المراجعة الحالية.
لا يمكن إخفاؤها.',
'revdelete-show-no-access' => 'خطأ في إظهار العنصر ذا التاريخ $2 $1: هذا العنصر معلم ك"مقيد".
ليس لك صلاحية الوصول إليه.',
'revdelete-modify-no-access' => 'خطأ في تعديل العنصر ذا التاريخ $2 $1: هذا العنصر معلم ك"مقيد".
ليس لك صلاحية الوصول إليه.',
'revdelete-modify-missing' => 'خطأ في تعديل العنصر ذا الهوية $1: العنصر مفقود من قاعدة البيانات!',
'revdelete-no-change' => "'''تحذير:''' العنصر ذو التاريخ $2 $1 لديه أصلا إعدادات الظهور المطلوبة.",
'revdelete-concurrent-change' => 'خطأ في تعديل العنصر ذي التاريخ $2 $1: تظهر حالته أن شخصا آخر عدله أثناء محاولتك تعديله.
من فضلك راجع السجلات.',
'revdelete-only-restricted' => 'خطأ إخفاء العنصر المؤرخ $2, $1: لا تستطيع تنحية العناصر من عرض الإداريين بدون أن تحدد أيضا إحدى خيارات التنحية الأخرى.',
'revdelete-reason-dropdown' => '* أسباب حذف عامة
** خرق لحقوق النشر
** معلومات شخصية غير ملائمة
**معلومات تشهيرية محتملة',
'revdelete-otherreason' => 'سبب آخر/إضافي:',
'revdelete-reasonotherlist' => 'سبب آخر',
'revdelete-edit-reasonlist' => 'عدل أسباب الحذف',
'revdelete-offender' => 'مؤلف المراجعة:',

# Suppression log
'suppressionlog' => 'سجل الإخفاء',
'suppressionlogtext' => 'بالأسفل قائمة بعمليات الحذف والمنع التي تتضمن محتوى مخفيا عن الإداريين.
انظر [[Special:BlockList|قائمة منع الآيبي]] لترى عمليات المنع القائمة الآن.',

# History merging
'mergehistory' => 'دمج تواريخ الصفحة',
'mergehistory-header' => 'هذه الصفحة تسمح لك بدمج نسخ تاريخ صفحة ما إلى صفحة أخرى.
تأكد من أن هذا التغيير سيحافظ على استمرار تاريخ الصفحة.',
'mergehistory-box' => 'دمج مراجعات صفحتين:',
'mergehistory-from' => 'الصفحة المصدر:',
'mergehistory-into' => 'الصفحة الهدف:',
'mergehistory-list' => 'تاريخ التعديل القابل للدمج',
'mergehistory-merge' => 'المراجعات التالية من [[:$1]] يمكن دمجها إلى [[:$2]].
استخدم عامود الصناديق لدمج المراجعات التي تم إنشاؤها في وقبل الوقت المحدد.
لاحظ أن استخدام وصلات التصفح سيعيد ضبط هذا العامود.',
'mergehistory-go' => 'عرض التعديلات القابلة للدمج',
'mergehistory-submit' => 'دمج المراجعات',
'mergehistory-empty' => 'لا مراجعات يمكن دمجها.',
'mergehistory-success' => '$3 {{PLURAL:$3|مراجعة|مراجعة}} من [[:$1]] تم دمجها بنجاح في [[:$2]].',
'mergehistory-fail' => 'غير قادر على عمل دمج التاريخ، من فضلك أعد التحقق من محددات الصفحة والزمن.',
'mergehistory-no-source' => 'الصفحة المصدر $1 غير موجودة.',
'mergehistory-no-destination' => 'الصفحة الهدف $1 غير موجودة.',
'mergehistory-invalid-source' => 'الصفحة المصدر يجب أن تكون عنوانا صحيحا.',
'mergehistory-invalid-destination' => 'الصفحة الهدف يجب أن تكون عنوانا صحيحا.',
'mergehistory-autocomment' => 'دمج [[:$1]] في [[:$2]]',
'mergehistory-comment' => 'دمج [[:$1]] في [[:$2]]: $3',
'mergehistory-same-destination' => 'صفحتا المصدر والهدف لا يمكن أن تكونا نفس الشيء',
'mergehistory-reason' => 'السبب:',

# Merge log
'mergelog' => 'سجل الدمج',
'pagemerge-logentry' => 'دمج [[$1]] إلى [[$2]] (المراجعات حتى $3)',
'revertmerge' => 'إلغاء الدمج',
'mergelogpagetext' => 'بالأسفل قائمة بأحدث عمليات الدمج لتاريخ صفحة ما إلى أخرى.',

# Diffs
'history-title' => ' «$1»: تاريخ المراجعة',
'difference-title' => '«$1»: الفرق بين المراجعتين',
'difference-title-multipage' => '«$1» و«$2»: الفرق بين الصفحتين',
'difference-multipage' => '(الفرق بين الصفحتين)',
'lineno' => 'Star $1:',
'compareselectedversions' => 'قارن بين النسختين المختارتين',
'showhideselectedversions' => 'أظهر/أخف المراجعات المختارة',
'editundo' => 'Rajjaε',
'diff-multi-manyusers' => '({{PLURAL:$1||مراجعة واحدة متوسطة غير معروضة أجراها|مراجعتان متوسطتان غير معروضتان أجراهما|$1 مراجعات متوسطة غير معروضة أجراها|$1 مراجعة متوسطة غير معروضة أجراها}} أكثر من {{PLURAL:$2||مستخدم واحد|مستخدمين|$2 مستخدمين|$2 مستخدمًا|$2 مستخدم}}.)',

# Search results
'searchresults' => 'Elrésultats mtaε elrecherche',
'searchresults-title' => 'Elrésultats mtaε elrecherche εla "$1"',
'prevn' => '{{PLURAL:$1|$1}} السابقة',
'nextn' => '{{PLURAL:$1|$1}} التالية',
'prevn-title' => '$1 {{PLURAL:$1|نتيجة|نتيجة}} سابقة',
'nextn-title' => '$1 {{PLURAL:$1|نتيجة|نتيجة}} سابقة',
'shown-title' => ' Warri{{PLURAL:Résultat weħed|Zouz résultats|$1  résultats|$1 en résultat}} men kol safħa',
'viewprevnext' => 'Chouf ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-exists' => "'''famma ss'af7a ismha \"[[:\$1]]\" fi hedha el wiki.'''",
'searchmenu-new' => "'''أنشئ الصفحة \"[[:\$1]]\" في هذا الويكي!'''",
'searchprofile-articles' => 'Safħat mtaε contenu',
'searchprofile-project' => 'Safħat mtaε elmouεawna w les projets',
'searchprofile-images' => 'Multimédia',
'searchprofile-everything' => 'Kol chay',
'searchprofile-advanced' => 'Avancé',
'searchprofile-articles-tooltip' => 'Farkes fi $1',
'searchprofile-project-tooltip' => 'Farkis fi $1',
'searchprofile-images-tooltip' => "Farkes f'elfichiers",
'searchprofile-everything-tooltip' => 'Farkes kol chay (ħatta safħat leħdith)',
'searchprofile-advanced-tooltip' => 'Ekhtar les espaces de noms elli bech tfarkes εlihom',
'search-result-size' => '$1 ({{PLURAL:Ħatta kelma|Kelma waħda|Kelmtin|$2 kelmat|$2 en kelma}})',
'search-result-category-size' => '{{PLURAL:$1|لا أعضاء|عضو واحد|عضوان|$1 أعضاء|$1 عضوًا|$1 عضو}} ({{PLURAL:$2|لا تصانيف فرعية|تصنيف فرعي واحد|تصنيفان فرعيان|$2 تصنيفات فرعية|$2 تصنيفًا فرعيًا|$2 تصنيف فرعي}} و{{PLURAL:$3|لا ملفات|ملف واحد|ملفان|$3 ملفات|$3 ملفًا|$3 ملف}})',
'search-redirect' => '(تحويلة $1)',
'search-section' => '(section $1)',
'search-suggest' => 'هل كنت تقصد: $1',
'searchrelated' => 'مرتبطة',
'searchall' => 'Elkol',
'showingresultsheader' => "{{PLURAL:$5|النتيجة '''$1''' من'''$3'''|النتائج '''$1 - $2''' من'''$3'''}} ل'''$4'''",
'search-nonefound' => 'لا توجد نتائج تطابق الاستعلام.',

# Preferences page
'mypreferences' => 'تفضيلاتي',
'youremail' => 'البريد:',
'yourrealname' => 'الاسم الحقيقي:',
'prefs-help-email' => 'عنوان البريد الإلكتروني هو أمر اختياري، ولكن ستحتاج لإعادة تعيين كلمة المرور، إن نسيت كلمة المرور الخاصة بك.',
'prefs-help-email-others' => 'يمكنك أيضا اختيار للسماح للآخرين الاتصال بك عن طريق صفحة المستخدم أو نقاش المستخدم الخاص بك دون الحاجة إلى الكشف عن الهوية الخاصة بك.',

# Special:Log/newusers
'newuserlogpage' => 'سجل إنشاء المستخدمين',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'modifi hal page',

# Recent changes
'nchanges' => '{{PLURAL:$1|لا تغييرات|تغيير واحد|تغييران|$1 تغييرات|$1 تغييرا|$1 تغيير}}',
'recentchanges' => 'Ajad tabdilet',
'recentchanges-legend' => 'خيارات أحدث التغييرات',
'recentchanges-summary' => 'تابع أحدث التغييرات للويكي عبر هذه التلقيمة.',
'recentchanges-feed-description' => 'تابع أحدث التغييرات للويكي عبر هذه التلقيمة.',
'recentchanges-label-newpage' => 'أنشأ هذا التعديل صفحة جديدة',
'recentchanges-label-minor' => 'هذا تعديل طفيف',
'recentchanges-label-bot' => 'أجرى هذا التعديل بوت',
'recentchanges-label-unpatrolled' => 'لم يراجع هذا التعديل إلى الآن',
'rcnotefrom' => "بالأسفل التغييرات منذ '''$2''' (إلى '''$1''' معروضة).",
'rclistfrom' => 'أظهر التغييرات بدءا من $1',
'rcshowhideminor' => '$1 التعديلات الطفيفة',
'rcshowhidebots' => '$1 البوتات',
'rcshowhideliu' => '$1 المستخدمين المسجلين',
'rcshowhideanons' => '$1 المستخدمين المجهولين',
'rcshowhidepatr' => '$1 التعديلات المراجعة',
'rcshowhidemine' => '$1 تعديلاتي',
'rclinks' => 'أظهر آخر $1 تعديل في آخر $2 يوم<br />$3',
'diff' => 'Farq',
'hist' => 'Hist',
'hide' => 'أخف',
'show' => 'اعرض',
'minoreditletter' => 'thafif',
'newpageletter' => 'jadid',
'boteditletter' => 'bot',
'rc-enhanced-expand' => 'عرض التفاصيل (يتطلب جافاسكريبت)',
'rc-enhanced-hide' => 'أخفِ التفاصيل',

# Recent changes linked
'recentchangeslinked' => 'تغييرات ذات علاقة',
'recentchangeslinked-toolbox' => 'Tabdilet them',
'recentchangeslinked-title' => 'التغييرات المرتبطة ب "$1"',
'recentchangeslinked-summary' => "هذه قائمة بالتغييرات التي تمت حديثا للصفحات الموصولة من صفحة معينة (أو إلى الأعضاء ضمن تصنيف معين).
الصفحات في [[Special:Watchlist|قائمة مراقبتك]] '''عريضة'''",
'recentchangeslinked-page' => 'اسم الصفحة:',
'recentchangeslinked-to' => 'أظهر التغييرات للصفحات الموصولة للصفحة المعطاة عوضا عن ذلك',

# Upload
'upload' => "Abεeth des fichiers l'esserveur",
'uploadlogpage' => 'سجل الرفع',
'filedesc' => 'ملخص:',
'uploadedimage' => 'رفع "[[$1]]"',

'license' => 'ترخيص:',
'license-header' => 'licence',

# File description page
'file-anchor-link' => 'milaf (Fichier)',
'filehist' => 'teri5 el milaf',
'filehist-help' => 'اضغط على وقت/زمن لرؤية الملف كما بدا في هذا الزمن.',
'filehist-revert' => 'استرجع',
'filehist-current' => 'حالي',
'filehist-datetime' => 'وقت/زمن',
'filehist-thumb' => 'صورة مصغرة',
'filehist-thumbtext' => 'تصغير للنسخة بتاريخ $1',
'filehist-user' => 'مستخدم',
'filehist-dimensions' => 'الأبعاد',
'filehist-comment' => 'ta3li9at',
'imagelinks' => 'استخدام الملف',
'linkstoimage' => '{{PLURAL:$1||الصفحة التالية تصل|الصفحتان التاليتان تصلان|ال$1 صفحات التالية تصل|ال$1 صفحة التالية تصل}} إلى هذا الملف:',
'nolinkstoimage' => 'لا توجد صفحات تصل لهذا الملف.',
'sharedupload-desc-here' => 'هذا الملف من $1 ويمكن استخدامه بواسطة المشاريع الأخرى.
الوصف على [$2 صفحة وصف الملف] هناك معروض بالأسفل.',

# Random page
'randompage' => 'Safħa elli tji',

# Statistics
'statistics' => 'إحصاءات',

# Miscellaneous special pages
'nbytes' => '{{PLURAL:Octet weħed|Zouz octets|$1 octets|$1 en octet}}',
'nmembers' => '{{PLURAL:$1|لا أعضاء|عضو واحد|عضوان|$1 أعضاء|$1 عضوا|$1 عضو}}',
'prefixindex' => 'كل الصفحات بالبادئة',
'usercreated' => '{{GENDER:$3|أنشأه|أنشأته}} في $1 الساعة $2',
'newpages' => 'Safħat jdod',
'move' => 'انقل',
'pager-newer-n' => '{{PLURAL:$1|أقدم 1|أقدم $1}}',
'pager-older-n' => '{{PLURAL:$1|أقدم 1|أقدم $1}}',

# Book sources
'booksources' => 'مصادر كتاب',
'booksources-search-legend' => 'البحث عن مصادر الكتب',
'booksources-go' => 'اذهب',

# Special:Log
'log' => 'سجلات',

# Special:AllPages
'allpages' => "kol ess'afa7at",
'alphaindexline' => '$1 إلى $2',
'allarticles' => "kol ess'afa7at",
'allpagessubmit' => 'اذهب',

# Special:Categories
'categories' => 'تصنيفات',

# Special:LinkSearch
'linksearch-line' => '$1 موصولة من $2',

# Special:ListGroupRights
'listgrouprights-members' => '(قائمة الأعضاء)',

# Email user
'emailuser' => 'إرسال رسالة لهذا المستخدم',

# Watchlist
'watchlist' => 'قائمة مراقبتي',
'mywatchlist' => 'قائمة مراقبتي',
'watchlistfor2' => 'ل$1 $2',
'watch' => 'راقب',
'unwatch' => 'أوقف المراقبة',
'watchlist-details' => '{{PLURAL:$1||صفحة واحدة|صفحتان|$1 صفحات|$1 صفحة}} في قائمة مراقبتك، بدون عد صفحات النقاش.',
'wlshowlast' => 'عرض آخر $1 ساعات $2 أيام $3',
'watchlist-options' => 'خيارات قائمة المراقبة',

# Delete
'actioncomplete' => 'انتهاء العملية',
'actionfailed' => 'الفعل فشل',
'dellogpage' => 'سجل الحذف',

# Rollback
'rollbacklink' => 'rajjaε',

# Protect
'protectlogpage' => 'سجل الحماية',
'protectedarticle' => 'حمى "[[$1]]"',

# Undelete
'undeletelink' => 'اعرض/استعد',
'undeleteviewlink' => 'اعرض',

# Namespace form on various pages
'namespace' => 'النطاق',
'invert' => 'اعكس الاختيار',
'blanknamespace' => '(Principal)',

# Contributions
'contributions' => 'مساهماتي',
'contributions-title' => 'مساهمات المستخدم $1',
'mycontris' => 'مساهماتي',
'contribsub2' => 'ل$1 ($2)',
'uctop' => '(top)',
'month' => 'من سنة (وأقدم):',
'year' => 'من سنة (وأقدم):',

'sp-contributions-newbies' => 'اعرض مساهمات الحسابات الجديدة فقط',
'sp-contributions-blocklog' => 'سجل المنع',
'sp-contributions-uploads' => 'مرفوعات',
'sp-contributions-logs' => 'سجلات',
'sp-contributions-talk' => 'نقاش',
'sp-contributions-search' => 'بحث عن مساهمات',
'sp-contributions-username' => 'عنوان أيبي أو اسم مستخدم:',
'sp-contributions-toponly' => 'أظهر أعلى المراجعات فقط',
'sp-contributions-submit' => 'lawwej',

# What links here
'whatlinkshere' => 'Chnowa elli ywassel elhouni',
'whatlinkshere-title' => 'الصفحات التي تصل إلى "$1"',
'whatlinkshere-page' => "ss'af7a:",
'linkshere' => "الصفحات التالية تصل إلى '''[[:$1]]''':",
'nolinkshere' => "لا توجد صفحات تصل إلى '''[[:$1]]'''.",
'isredirect' => 'صفحة تحويل',
'istemplate' => 'مضمن',
'isimage' => 'وصلة ملف',
'whatlinkshere-prev' => '{{PLURAL:$1|previous|previous $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|القادمة|ال$1 القادمة}}',
'whatlinkshere-links' => '← وصلات',
'whatlinkshere-hideredirs' => '$1 التحويلات',
'whatlinkshere-hidetrans' => '$1 التضمينات',
'whatlinkshere-hidelinks' => '$1 الوصلات',
'whatlinkshere-hideimages' => '$1 وصلة صورة',
'whatlinkshere-filters' => 'مرشحات',

# Block/unblock
'ipboptions' => 'ساعتين:2 hours,يوم واحد:1 day,3 أيام:3 days,أسبوع واحد:1 week,أسبوعين:2 weeks,شهر واحد:1 month,3 أشهر:3 months,6 أشهر:6 months,سنة واحدة:1 year,دائم:infinite',
'ipblocklist' => 'المستخدمون الممنوعون',
'blocklink' => 'Bloqui',
'unblocklink' => 'ارفع المنع',
'change-blocklink' => 'تغيير المنع',
'contribslink' => 'Mousehmet',
'blocklogpage' => 'سجل المنع',
'blocklogentry' => 'منع "[[$1]]" لفترة زمنية مدتها $2 $3',
'block-log-flags-nocreate' => 'إنشاء الحسابات ممنوع',

# Move page
'movelogpage' => 'سجل النقل',
'revertmove' => 'استرجع',

# Export
'export' => 'تصدير صفحات',

# Namespace 8 related
'allmessagesname' => 'الاسم',
'allmessagesdefault' => 'النص الافتراضي',

# Thumbnails
'thumbnail-more' => 'Kabber',
'thumbnail_error' => 'خطأ في إنشاء صورة مصغرة: $1',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'صفحة المستخدم الخاصة بك',
'tooltip-pt-mytalk' => 'صفحة نقاشك',
'tooltip-pt-preferences' => 'تفضيلاتي',
'tooltip-pt-watchlist' => 'قائمة الصفحات التي تراقب التغييرات التي تحدث بها',
'tooltip-pt-mycontris' => 'قائمة مساهماتك',
'tooltip-pt-login' => 'Madhabina ken tconnecti, ama mouch bessif',
'tooltip-pt-logout' => 'خروج',
'tooltip-ca-talk' => 'Discussion εal contenu mtaε essafħa',
'tooltip-ca-edit' => 'Tannjem tbaddel essafħa hedhi. Aman enzel εal bouton mtaε elvue el msabqa qbal matsajjel.',
'tooltip-ca-addsection' => 'ابدأ قسما جديدا',
'tooltip-ca-viewsource' => 'El safħa protégée.
Tnajjem tchouf essource mteεha.',
'tooltip-ca-history' => 'Copiet qdom mtaε essafħa hedhi',
'tooltip-ca-protect' => 'احم هذه الصفحة',
'tooltip-ca-delete' => 'احذف هذه الصفحة',
'tooltip-ca-move' => 'علم هذه الصفحة',
'tooltip-ca-watch' => 'أضف هذه الصفحة إلى قائمة مراقبتك',
'tooltip-ca-unwatch' => 'أزل هذه الصفحة من قائمة مراقبتك',
'tooltip-search' => 'Lawwej fi {{SITENAME}}',
'tooltip-search-go' => 'اذهب إلى صفحة بالاسم نفسه إن وجدت',
'tooltip-search-fulltext' => "Farkes f'essafħat εattexte hedha",
'tooltip-p-logo' => "Emchi l'elpage principale",
'tooltip-n-mainpage' => "Emchi l'elpage principale",
'tooltip-n-mainpage-description' => "Emchi l'elpage principale",
'tooltip-n-portal' => "Ɛ'almachrouε, chnowa tnajem taεmel, win talqa elli ħajtek bih",
'tooltip-n-currentevents' => ' Alqa information εla aham laħdeth mtaε tawa',
'tooltip-n-recentchanges' => "Lista mtaε ajad ettabdilat f'elwiki",
'tooltip-n-randompage' => 'Ħell safħa elli tji',
'tooltip-n-help' => 'Mouεawna',
'tooltip-t-whatlinkshere' => 'Lista mtaε safħat elwiki elkol elli twassel elhouni',
'tooltip-t-recentchangeslinked' => "Aham ettabldilet f'essafħat elli ywaslou l'essafħa hedhi",
'tooltip-feed-atom' => 'تلقيم أتوم لهذه الصفحة',
'tooltip-t-contributions' => 'رؤية قائمة مساهمات هذا المستخدم',
'tooltip-t-emailuser' => 'أرسل رسالة لهذا المستخدم',
'tooltip-t-upload' => "Abεeth des fichiers l'esserveur",
'tooltip-t-specialpages' => 'Lista mtaε essafħat esspéciales elkol',
'tooltip-t-print' => "Version l'ettabεan mtaε essafħa hedhi.",
'tooltip-t-permalink' => "Lien dayem l'elversion hedhi mtaε essafħa",
'tooltip-ca-nstab-main' => 'Chouf elcontenu mtaε essafħa',
'tooltip-ca-nstab-user' => 'اعرض صفحة المستخدم',
'tooltip-ca-nstab-special' => 'هذه صفحة خاصة، لا تستطيع أن تعدل الصفحة نفسها',
'tooltip-ca-nstab-project' => 'رؤية صفحة المحتوى',
'tooltip-ca-nstab-image' => 'رؤية صفحة الملف',
'tooltip-ca-nstab-template' => 'رؤية القالب',
'tooltip-ca-nstab-category' => 'رؤية صفحة التصنيف',
'tooltip-minoredit' => 'علم على هذا كتعديل طفيف',
'tooltip-save' => 'احفظ تغييراتك',
'tooltip-preview' => 'اعرض تغييراتك، من فضلك استخدم هذا قبل الحفظ!',
'tooltip-diff' => 'اعرض التغييرات التي قمت بها للنص.',
'tooltip-compareselectedversions' => 'شاهد الفروق بين النسختين المختارتين من هذه الصفحة.',
'tooltip-watch' => 'أضف هذه الصفحة إلى قائمة مراقبتك',
'tooltip-rollback' => '"Rajjaε" yrajjeε ettabdilet f\'hassafħa el\'ekher weħed baddel fi nazla waħda.',
'tooltip-undo' => '"رجوع" تسترجع هذا التعديل وتفتح نافذة التعديل في نمط العرض المسبق. تسمح بإضافة سبب في الملخص.
"Annuler" trajjeε eltabdila lekhra w tħel fenêtre mtaε  el tabdil mtaε elvue el msabqa. Tnajjem tqoul εlech f\'ettalkhis.',
'tooltip-summary' => 'أدخل ملخصا قصيرا',

# Browsing diffs
'previousdiff' => '→ التعديل السابق',
'nextdiff' => 'التعديل اللاحق ←',

# Media information
'file-info-size' => '$1 × $2 بكسل حجم الملف: $3، نوع MIME: $4',
'file-nohires' => 'لا توجد دقة أعلى متوفرة.',
'svg-long-desc' => 'ملف SVG، أبعاده $1 × $2 بكسل، حجم الملف: $3',
'show-big-image' => 'دقة كاملة',

# Bad image list
'bad_image_list' => "Elformat kima hakka:
Les élements mtaε lista (lostra elli yabdew b' *) yetħesbou.
Ellien lowel fi star yelzmou ykoun lien el fichier khayeb.
Ay lien ekher fi nafs estar yetħseb exception, maħneha des pages win elfichier ynajem ykoun fi star.",

# Metadata
'metadata' => 'بيانات ميتا',
'metadata-help' => 'هذا الملف يحتوي على معلومات إضافية، غالبا ما تكون أضيفت من قبل الكاميرا الرقمية أو الماسح الضوئي المستخدم في إنشاء الملف.
إذا كان الملف قد عدل عن حالته الأصلية، فبعض التفاصيل قد لا تعبر عن الملف المعدل.',
'metadata-fields' => 'حقول معطيات الميتا الموجودة في هذه الرسالة سوف تعرض في صفحة الصورة عندما يكون جدول معطيات الميتا مضغوطا.
الحقول الأخرى ستكون مخفية افتراضيا.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'الكل',
'namespacesall' => 'الكل',
'monthsall' => 'الكل',

# Watchlist editing tools
'watchlisttools-view' => 'اعرض التغييرات المرتبطة',
'watchlisttools-edit' => 'اعرض قائمة المراقبة وعدلها',
'watchlisttools-raw' => 'عدل قائمة المراقبة الخام',

# Core parser functions
'duplicate-defaultsort' => '\'\'\'تحذير:\'\'\' مفتاح الترتيب الافتراضي "$2" يتجاوز مفتاح الترتيب الافتراضي السابق "$1".',

# Special:SpecialPages
'specialpages' => 'Safħat spéciales',

# External image whitelist
'external_image_whitelist' => ' #<pre>اترك هذا السطر تماما كما هو
#ضع منثورات التعبيرات المنتظمة (فقط الجزء الذي يذهب بين //) بالأسفل
#هذه ستتم مطابقتها مع مسارات الصور الخرجية (الموصولة بشكل مباشر)
#هذه التي تطابق سيتم عرضها كصور، غير ذلك فقط وصلة إلى الصورة سيتم عرضها
#السطور التي تبدأ ب# تتم معاملتها كتعليقات
#هذا لا يتأثر بحالة الحروف

#ضع كل منثورات التعبيرات المنتظمة فوق هذا السطر. اترك هذا السطر تماما كما هو</pre>',

# Special:Tags
'tag-filter' => 'مرشح [[Special:Tags|الوسوم]]:',

);
