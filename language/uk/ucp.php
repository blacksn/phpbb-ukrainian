<?php
/**
*
* ucp [Ukrainian]
*
* @package language
* @version $Id: ucp.php 9001 2008-10-11 16:35:27Z toonarmy $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'PRIVACY_POLICY'	=> 'Ця політика детально пояснює, як “%1$s” і його підрозділи (надалі “ми”, “наш”, “%1$s”, “%2$s”) і phpBB (надалі “вони”, “їх”, “їхнє”, “Програмне забезпечення phpBB”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) використовують інформацію, отриману під час будь-якої вашої сесії (надалі “інформація про вас”).<br />
	<br />
	Інформація про вас збирається двома способами. Поперше, перегляд “%1$s” призведе до створення програмним забезпеченням phpBB деякої кількості файлів cookies (невеликих текстових файлів, які завантажуються в папку тимчасових файлів вашого браузера на вашому комп\'ютері. Перші два файли cookies містять лише ідентифікатор користувача (надалі “user-id”) і ідентифікатор анонімної сесії (надалі “session-id”), які автоматично присвоюються вам програмним забезпеченням phpBB. Третій файл cookie буде створено після перегляду однієї з тем форуму “%1$s”, він використовується для зберігання інформації про те, які теми вже були переглянуті вами, збільшуючи зручність користування форумом.<br />
	<br />
	Також під час перегляду “%1$s”можливе створення файлів cookies, які не стосуються програмного забезпечення phpBB, однак вони виходять за рамки цього документу, оскільки він поширюється виключно на сторінки, створені програмним забезпеченням phpBB. Друге джерело одержання інформації про вас є дані, які ви нам відсилаєте. Ними можуть бути, і цим не вичерпуються такі дані: повідомлення розміщені під обліковим записом гостя (надалі “анонімні повідомлення”), дані вказані при реєстрації на “%1$s” (надалі “ваш обліковий запис”) і повідомлення, розміщені вами після реєстрації і авторизації (надалі “ваші повідомлення”).<br />
	<br />
	Ваш обліковий запис - це обов\'язково унікальне ім\'я, яке дозволяє ідентифікувати вас (надалі “ваше ім\'я користувача”), індивідуальний пароль, який використовується для входу під вашим обліковим записом (надалі “ваш пароль”) і власна реальна адреса e-mail (надалі “ваш e-mail”). Ваша інформація про ваш обліковий запис на “%1$s” захищена законами про захист інформації країни, яка надає нам послуги хостингу. Будь-яка інформація, окрім вашого імені користувача, вашого паролю і вашої адреси e-mail, яка запитується в процесі реєстрації може бути необхідною або необов\'язковою, на розсуд “%1$s”. У будь-якому випадку, ви маєте право обирати, яка інформація про ваш обліковий запис буде загальнодоступною. Крім того, в налаштуваннях вашого облікового запису, ви маєте можливість погодитись чи відмовитись від отримання e-mail повідомлень, які розсилаються програмним забезпеченням phpBB.<br />
	<br />
	Ваш пароль надійно зашифровано (одностороннім хешем). Проте, не рекомендується використання одного й того ж паролю на різних вебсайтах. Ваш пароль є єдиним способом доступу до вашого облікового запису на “%1$s”, тому, будь-ласка, тримайте його в таємниці, і при будь-яких обставинах ніхто з “%1$s”, phpBB чи якісь треті особи, не мають права запитати ваш пароль. Якщо ви забудете ваш пароль до вашого облікового запису, ви можете скористатись функцією “Я забув свій пароль”, яка передбачена програмним забезпеченням phpBB. Під час цієї процедури вам буде необхідно ввести ваше ім\'я користувача та ваш e-mail, після чого програмне забезпечення phpBB згенерує новий пароль до вашого облікового запису.<br />
	',
	'HIDE_ONLINE_EXPLAIN'	=> 'Зміна цього налаштування не набере сили до вашого наступного відвідування форуму.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Лист активації було надіслано на адресу e-mail адміністратора.', 
	'ACCOUNT_ACTIVE_PROFILE'	=> 'Ваш обліковий запис було успішно повторно активовано.',
	'ACCOUNT_EMAIL_CHANGED'	=> 'Ваш обліковий запис оновлено. Цей форум вимагає повторної активації облікового запису після зміни адреси e-mail. Ключ активації було надіслано на вказану вами нову адресу e-mail. Будь-ласка, перевірте вашу пошту для отримання додаткової інформації.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Ваш обліковий запис оновлено. Цей форум вимагає повторної активації облікового запису адміністраторами після зміни адреси e-mail. Їм було надіслано листа електронною поштою, вас буде проінформовано, коли ваш обліковий запис буде повторно активовано.',
	'AVATAR_FEATURES_DISABLED'	=> 'Функцію аватарів вимнено.',
	'LOGOUT_FAILED'	=> 'Ви не вилогувались, оскільки запит не відповідав вашій сесії. Будь-ласка, зв\'яжіться з адміністратором форуму, якщо проблема буде повторюватись.',
	'NO_PASSWORD_SUPPLIED'	=> 'Ви не можете залогуватись без пароля.',
	'PM_NO_USERS'	=> 'Задані учасники не існують.',
	'PM_USERS_REMOVED_NO_PM'	=> 'Деякі користувачі не можуть бути додані, оскільки вони вимкнули отримання приватних повідомлень.',
	'TERMS_OF_USE_CONTENT'	=> 'Реєструючись на форумі “%1$s” (надалі “ми”, “наш”, “%1$s”, “%2$s”), ви підтверджуєте свою згоду з наступними умовами. Якщо ви не погоджуєтесь з ними, будь-ласка, не заходьте і/або не користуйтесь “%1$s”. Ми залишаємо за собою право змінювати ці правила будь-коли, і зробимо усе для того, щоб проінформувати вас про це, однак з вашої сторони було б розумно переглядати періодично цей текст на предмет змін, оскільки користування форумом “%1$s” після оновлення чи виправлення умов користування означає вашу згоду з ними.<br />
	<br />
	Наші форуми працюють на базі скрипта phpBB (надалі “вони”, “їхнє”, “програмне забезпечення phpBB”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”), яке є рішенням для створення форумів, яке випущене за ліцензією “<a href="http://www.gnu.org/licenses/gpl.html">General Public License</a>” (надалі “GPL”) і може бути завантаженим з сайту <a href="http://www.phpbb.com/">www.phpbb.com</a>. Обмеження ліцензії GPL для програмного забезпечення phpBB суворо пов\'язані з організацією і підтримкою інтернет-дискусій і не впливають на те, що дозволяється/забороняється адміністрацією чи на поведінку в них. Для додаткової інформації про phpBB, будь-ласка, перегляньте: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Ви погоджуєтесь не розміщувати образливі, непристойні, вульгарні, наклепницькі, ненависні, погрозливі, порнографічні та інші матеріали, які можуть порушувати закони вашої країни, країни, яка надає послуги хостингу для форуму “%1$s” чи міжнародне право. Такі дії можуть призвести до негайної і постійної відмови у доступі до форуму, при цьому ваш інтернет-провайдер буде повідомлений про це, якщо ми будемо вважати це за необхідне. IP-адреси усіх повідомлень зберігаються для забезпечення проведення такої політики. Ви погоджуєтесь, що адміністратори “%1$s” мають право видаляти, редагувати, переносити та закривати будь-яку тему в будь-який час на свій розсуд . Як користувач ви погоджуєтесь, що уся інформація введена вами буде зберігатись в базі даних. Хоча ця інформація не буде відкрита третім особам без вашої згоди, ні адміністрація “%1$s”, ні phpBB не буде нести відповідальність за будь-які дії хакерів, які можуть призвести до несанкціонованого доступу до неї.
	',
));
// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'	=> 'Ваш обліковий запис активовано. Дякуємо за реєстрацію',
	'ACCOUNT_ACTIVE_ADMIN'	=> 'Обліковий запис активовано',
	'ACCOUNT_ADDED'	=> 'Дякуємо за реєстрацію, ваш обліковий запис створено. Тепер ви можете увійти, скориставшись вашим іменем користувача та паролем',
	'ACCOUNT_COPPA'	=> 'Ваш обліковий запис створено, але необхідне його схвалення адміністратором, будь-ласка, перевірте вашу електронну пошту для детальної інформації.',
	'ACCOUNT_INACTIVE'	=> 'Ваш обліковий запис створено. Проте, цей форум вимагає активації облікового запису, ключ активації надіслано на адресу e-mail, яку ви вказали. Будь-ласка перевірте вашу електронну пошту для додаткової інформації',
	'ACCOUNT_INACTIVE_ADMIN'	=> 'Ваш обліковий запис створено. Проте, цей форум вимагає активації облікового запису одного з адміністраторів. Їм було вислано e-mail і ви будете проінформовані, коли ваш обліковий запис буде активовано',
	'ACTIVATION_EMAIL_SENT'	=> 'Лист активації було вислано на вашу адресу e-mail',
	'ADD'	=> 'Додати',
	'ADD_BCC'	=> 'Додати [Копія]',
	'ADD_FOES'	=> 'Додати нових недругів',
	'ADD_FOES_EXPLAIN'	=> 'Ви можете ввести декілька імен користувачів, кожне на окремій стрічці',
	'ADD_FOLDER'	=> 'Додати папку',
	'ADD_FRIENDS'	=> 'Додати нових друзів',
	'ADD_FRIENDS_EXPLAIN'	=> 'Ви можете ввести декілька імен користувачів, кожне на окремій стрічці',
	'ADD_NEW_RULE'	=> 'Додати нове правило',
	'ADD_RULE'	=> 'Додати правило',
	'ADD_TO'	=> 'Додати [Кому]',
 	'ADD_USERS_UCP_EXPLAIN' => 'Тут ви можете додавати нових користувачів до групи. Ви можете вибрати, чи стане ця група групою за замовчуванням для доданих до неї користувачів. Вводьте кожне ім\'я користувача з нової стрічки.',
	'ADMIN_EMAIL'	=> 'Отримувати листи від адміністраторів форуму',
	'AGREE'	=> 'Я погоджуюсь з цими умовами',
	'ALLOW_PM'	=> 'Дозволити учасникам присилати вам приватні повідомлення',
	'ALLOW_PM_EXPLAIN'	=> 'Зауважте, що адміністратори і модератори завжди будуть мати змогу посилати вам повідомлення.',
	'ALREADY_ACTIVATED'	=> 'Ви вже активували свій обліковий запис',
	'ATTACHMENTS_EXPLAIN'	=> 'Це список приєднаних до ваших повідомлень файлів в цьому форумі.',
	'ATTACHMENTS_DELETED'	=> 'Приєднані файли успішно видалено.',
	'ATTACHMENT_DELETED'	=> 'Приєднаний файл успішно видалено.',
	'AVATAR_CATEGORY'	=> 'Категорія',
	'AVATAR_EXPLAIN'	=> 'Максимальні розміри: ширина %1$d точок, висота %2$d точок, розмір файлу %3$.2f Кб.',
	'AVATAR_GALLERY'	=> 'Галерея аватарів',
 	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Не вдалось завантажити аватар в %s',
 	'AVATAR_NOT_ALLOWED' => 'Ваш аватар не може бути відображено, оскільки аватари вимкнено.',	
  	'AVATAR_PAGE'	=> 'Сторінка',
 	'AVATAR_TYPE_NOT_ALLOWED' => 'Ваш поточний аватар не може бути відображено, оскільки його тип заборонено.',
	'AVATAR_PAGE'	=> 'Сторінка',
	'BACK_TO_DRAFTS'	=> 'Повернутись до збережених чернеток',
	'BACK_TO_LOGIN'	=> 'Повернутись на сторінку логування',
	'BIRTHDAY'	=> 'День народження',
	'BIRTHDAY_EXPLAIN'	=> 'Якщо ви вкажете хоча б рік народження, ваш вік буде відображатись на форумі.',
	'BOARD_DATE_FORMAT'	=> 'Формат дати',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Синтакс ідентичний до функції PHP <a href="http://www.php.net/date">date()</a>',
	'BOARD_DST'	=> 'Зараз діє літній час',
	'BOARD_LANGUAGE'	=> 'Мова',
	'BOARD_STYLE'	=> 'Стиль форуму',
	'BOARD_TIMEZONE'	=> 'Мій часовий пояс',
	'BOOKMARKS'	=> 'Закладки',
	'BOOKMARKS_EXPLAIN'	=> 'Ви можете додати цю тему в закладки для перегляду в майбутньому. Для видалення закладок поставте галочку напроти тих, які ви хочете видалити і натисніть кнопку <em>Видалити відмічені закладки</em>.',
	'BOOKMARKS_DISABLED'	=> 'Закладки вимкнені в цьому форумі',
	'BOOKMARKS_REMOVED'	=> 'Закладки успішно видалено',
	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Ви більше не можете редагувати чи видалити це повідомлення',
	'CANNOT_MOVE_TO_SAME_FOLDER'	=> 'Повідомлення не можуть бути переміщеними до папки, яку ви хочете видалити.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Повідомлення не можуть бути переміщені з Вихідних.',
	'CANNOT_RENAME_FOLDER'	=> 'Ця папка не може бути перейменована.',
	'CANNOT_REMOVE_FOLDER'	=> 'Ця папка не може бути видалена.',
	'CHANGE_DEFAULT_GROUP'	=> 'Змінити групу за замовчуванням',
	'CHANGE_PASSWORD'	=> 'Змінити пароль',
	'CLICK_RETURN_FOLDER'	=> '%1$sПовернутись в папку “%3$s” %2$s',
	'CONFIRMATION'	=> 'Підтвердження реєстрації',
	'CONFIRM_CHANGES'	=> 'Підтвердити зміни',
	'CONFIRM_EMAIL'	=> 'Підтвердження адреси e-mail',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'Вводьте адресу e-mail лише якщо хочете її змінити.',
	'CONFIRM_EXPLAIN'	=> 'З метою запобігання автоматичним реєстраціям адміністратор форуму вимагає від вас вводу коду підтвердження. Код зображений на малюнку, який ви бачите внизу. Якщо ви з якихось причин не можете прочитати цей код, будь-ласка, зв\'яжіться  з %sАдміністратором форуму%s.',
        'VC_REFRESH'            => 'Оновити код підтвердження',
        'VC_REFRESH_EXPLAIN'      => 'Якщо ви не можете прочитати код, ви можете надіслати запит на отримання нового, настиснувши на кнопку.',
	'CONFIRM_PASSWORD'	=> 'Підтвердження паролю',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Вводьте підтвердження паролю лише якщо ви змінили його вище',
	'COPPA_BIRTHDAY'	=> 'Для продовження процедури реєтрації, будь-ласка, вкажіть, коли ви народились.',
	'COPPA_COMPLIANCE'	=> 'Згода по COPPA',
	'COPPA_EXPLAIN'	=> 'Будь-ласка, зауважте, що натискання кнопки "Відправка" створить ваш обліковий запис. Але його не буде активовано допоки хтось з ваших батьків чи опікун схвалить вашу реєстрацію. По електронній пошті вам буде вислано копію необхідної форми з вказівками, куди її відправити.',
	'CREATE_FOLDER'	=> 'Додати папку…',
	'CURRENT_IMAGE'	=> 'Поточне зображення',
	'CURRENT_PASSWORD'	=> 'Поточний пароль',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Вам необхідно ввести ваш поточний пароль, якщо ви бажаєте змінити ваше ім\'я користувача, адресу e-mail чи пароль.',
	'CUR_PASSWORD_ERROR'	=> 'Пароль, введений вами, не співпадає з поточним паролем.',
	'CUSTOM_DATEFORMAT'	=> 'Інший…',
	'DEFAULT_ACTION'	=> 'Дії за замовчуванням',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Ці дії буде виконано, якщо нічого з вищевказаного не може бути застосоване',
	'DEFAULT_ADD_SIG'	=> 'Приєднати мій підпис за замовчуванням',
	'DEFAULT_BBCODE'	=> 'Увімкнути BBCode за замовчуванням',
	'DEFAULT_NOTIFY'	=> 'Повідомляти мене про відповіді за замовчуванням',
	'DEFAULT_SMILIES'	=> 'Увімкнути смайлики за замовчуванням',
	'DEFINED_RULES'	=> 'Визначені правила',
	'DELETED_TOPIC'	=> 'Тему було видалено',
	'DELETE_ATTACHMENT'	=> 'Видалити приєднаний файл',
	'DELETE_ATTACHMENTS'	=> 'Видалити приєднані файли',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Ви впевнені, що хочете видалити цей приєднаний файл?',
	'DELETE_ATTACHMENTS_CONFIRM'	=> 'Ви впевнені, що хочете видалити ці приєднані файли?',
	'DELETE_AVATAR'	=> 'Видалити зображення',
	'DELETE_COOKIES_CONFIRM'	=> 'Ви впевнені, що хочете видалити усі встановлені форумом файли cookie?',
	'DELETE_MARKED_PM'	=> 'Видалити відмічені повідомлення',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Ви впевнені, що хочете видалити усі відмічені повідомлення?',
	'DELETE_OLDEST_MESSAGES'	=> 'Видалити найстаріші повідомлення',
	'DELETE_MESSAGE'	=> 'Видалити повідомлення',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ви впевнені, що хочете видалити це приватне повідомлення?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Видалити усі повідомлення разом з папкою',
	'DELETE_RULE'	=> 'Видалити правило',
	'DELETE_RULE_CONFIRM'	=> 'Ви впевнені, що хочете видалити це правило?',
	'DEMOTE_SELECTED'	=> 'Відмовитись від лідерства',
	'DISABLE_CENSORS'	=> 'Увімкнути цензуру слів',
	'DISPLAY_GALLERY'	=> 'Показати галерею',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Введений домен e-mail немає коректного запису MX.',
	'DOWNLOADS'	=> 'Завантаження',
	'DRAFTS_DELETED'	=> 'Усі обрані чернетки успішно видалено.',
	'DRAFTS_EXPLAIN'	=> 'Тут ви можете переглядати, редагувати та видаляти ваші збережені чернетки.',
	'DRAFT_UPDATED'	=> 'Чернетку успішно оновлено.',
	'EDIT_DRAFT_EXPLAIN'	=> 'Тут ви маєте можливість відредагувати вашу чернетку. Чернетки не містять файли і опитування.',
	'EMAIL_BANNED_EMAIL'	=> 'Введена адреса e-mail недозволена для використання.',
	'EMAIL_INVALID_EMAIL'	=> 'Введена вами адреса e-mail невірна.',
	'EMAIL_REMIND'	=> 'Адреса e-mail, вказана вами при реєстрації.',
	'EMAIL_TAKEN_EMAIL'	=> 'Введена адреса e-mail вже використовується',
	'EMPTY_DRAFT'	=> 'Ви повинні ввести повідомлення, щоб зберегти зміни',
	'EMPTY_DRAFT_TITLE'	=> 'Ви повинні ввести назву чернетки',
	'EXPORT_AS_XML'	=> 'Експорт в XML',
	'EXPORT_AS_CSV'	=> 'Експорт в CSV',
	'EXPORT_AS_CSV_EXCEL'	=> 'Експорт в CSV (Excel)',
	'EXPORT_AS_TXT'	=> 'Експорт в TXT',
	'EXPORT_AS_MSG'	=> 'Експорт в MSG',
	'EXPORT_FOLDER'	=> 'Експорт папки',
	'FIELD_REQUIRED'	=> 'Поле “%s” повинно бути заповненим.',
	'FIELD_TOO_SHORT'	=> 'Поле “%1$s” надто коротке, мінімально допустима довжина %2$d символів.',
	'FIELD_TOO_LONG'	=> 'Поле “%1$s” надто довге, максимально допустима довжина  %2$d символів.',
	'FIELD_TOO_SMALL'	=> 'Значення “%1$s” надто мале, мінімально допустиме значення %2$d.',
	'FIELD_TOO_LARGE'	=> 'Значення “%1$s” надто велике, максимально допустиме значення %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Поле “%s” містить некоректні символи, дозволені лише цифри.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Поле “%s” містить некоректні символи, дозволені лише буквенно-числові символи.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Поле “%s” містить некоректні символи, дозволені лише буквенно-числові символи, пробіли та символи -+_[].',
	'FIELD_INVALID_DATE'	=> 'Поле “%s” містить некоректну дату.',
	'FOE_MESSAGE'	=> 'Повідомлення від недруга',
	'FOES_EXPLAIN'	=> 'Недруги - користувачі, які будуть ігноруватись за замовчуванням. Повідомлення цих користувачів не будуть відображені повністю і приватні повідомлення будуть заборонені. Майте на увазі, ви не можете ігнорувати модераторів та адміністраторів.',
	'FOES_UPDATED'	=> 'Ваш список недругів успішно оновлено',
	'FOLDER_ADDED'	=> 'Папку успішно додано',
	'FOLDER_MESSAGE_STATUS'	=> '%1$d з %2$d повідомлень зайнято',
 	'FOLDER_NAME_EMPTY' => 'Необхідно ввести ім\'я для цієї папки.',
	'FOLDER_NAME_EXIST'	=> 'Папка <strong>%s</strong> вже існує',
	'FOLDER_OPTIONS'	=> 'Властивості папки',
	'FOLDER_RENAMED'	=> 'Папку успішно перейменовано',
	'FOLDER_REMOVED'	=> 'Папку успішно видалено',
	'FOLDER_STATUS_MSG'	=> 'Папка %1$d%% повна (%2$d з %3$d повідомлень stored)',
	'FORWARD_PM'	=> 'Переслати ПП',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Для подальшого користування форумом вам необхідно змінити ваш пароль',
	'FRIEND_MESSAGE'	=> 'Повідомлення від друга',
	'FRIENDS'	=> 'Друзі',
	'FRIENDS_EXPLAIN'	=> 'Список друзів дозволяє вам отримати швидкий доступ до учасників форуму, з якими ви часто контактуєте. Якщо стиль форуму підтримує відповідні функції, всі повідомлення друзів будуть виділені при перегляді.',
	'FRIENDS_OFFLINE'	=> 'Офлайн',
	'FRIENDS_ONLINE'	=> 'Онлайн',
	'FRIENDS_UPDATED'	=> 'Ваш список друзів успішно оновлено',
	'FULL_FOLDER_OPTION_CHANGED'	=> 'Дія, яка виконується у випадку переповнення папки, успішно змінена',
	'FWD_ORIGINAL_MESSAGE'	=> '-------- Оригінал повідомлення --------',
	'FWD_SUBJECT'	=> 'Тема: %s',
	'FWD_DATE'	=> 'Дата: %s',
	'FWD_FROM'	=> 'Від: %s',
	'FWD_TO'	=> 'Кому: %s',
	'GLOBAL_ANNOUNCEMENT'	=> 'Загальне оголошення',
	'HIDE_ONLINE'	=> 'Приховати моє перебування на форумі',
	'HOLD_NEW_MESSAGES'	=> 'Не приймати нових повідомлень (Нові повідомлення будуть відкладені до появи вільного місця)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Нові повідомлення будуть відкладені',
	'IF_FOLDER_FULL'	=> 'Якщо папка переповнена',
	'IMPORTANT_NEWS'	=> 'Важливі оголошення',
	'INVALID_USER_BIRTHDAY'         => 'Введена дата народження не є коректною.',
	'INVALID_CHARS_USERNAME'	=> 'Ім\'я користувача містить заборонені символи.',
	'INVALID_CHARS_NEW_PASSWORD'	=> 'Пароль не містить необхідних символів.',
	'ITEMS_REQUIRED'	=> 'Поля, помічені * необхідні для заповнення',
	'JOIN_SELECTED'	=> 'Вступити в обрану',
	'LANGUAGE'	=> 'Мова',
	'LINK_REMOTE_AVATAR'	=> 'Зовнішнє посилання',
	'LINK_REMOTE_AVATAR_EXPLAIN'	=> 'Введіть адресу URL файлу зображення, який ви хочете використати в якості аватару.',
	'LINK_REMOTE_SIZE'	=> 'Розміри аватару',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Вкажіть висоту і ширину аватару, залиште порожнім для спроби автоматичного визначення.',
	'LOGIN_EXPLAIN_UCP'	=> 'Будь-ласка, авторизуйтесь для входу в Панель керування',
	'LOGIN_REDIRECT'	=> 'Ви успішно залогувались.',
	'LOGOUT_REDIRECT'	=> 'Ви успішно вилогувались.',
	'MARK_IMPORTANT'	=> 'Позначити як важливе',
	'MARKED_MESSAGE'	=> 'Відмічені повідомлення',
	'MAX_FOLDER_REACHED'	=> 'Досягнуто максимально допустимої кількості папок користувача',
	'MESSAGE_BY_AUTHOR'	=> '',
	'MESSAGE_COLOURS'	=> 'Кольори повідомлень',
	'MESSAGE_DELETED'	=> 'Повідомлення успішно видалене',
	'MESSAGE_HISTORY'	=> 'Історія повідомлень',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Автор видалив повідомлення до того, як ви встигли прочитати його',
	'MESSAGE_SENT_ON'	=> 'від',
	'MESSAGE_STORED'	=> 'Повідомлення успішно відправлене',
	'MESSAGE_TO'	=> 'до',
	'MESSAGES_DELETED'	=> 'Повідомлення успішно видалені',
	'MOVE_DELETED_MESSAGES_TO'	=> 'Перемістити повідомлення з видаленої папки в папку',
	'MOVE_DOWN'	=> 'Посунути донизу',
	'MOVE_MARKED_TO_FOLDER'	=> 'Перемістити помічені в папку  %s',
	'MOVE_PM_ERROR'	=> 'Під час переміщення повідомлень до нової папки сталася помилка, лише %1d з %2d повідомлень було переміщено.',
	'MOVE_TO_FOLDER'	=> 'Перемістити в папку',
	'MOVE_UP'	=> 'Підняти доверху',
	'NEW_EMAIL_ERROR'	=> 'Введені вами адреси email не співпадають.',
	'NEW_FOLDER_NAME'	=> 'Нове ім\'я папки',
	'NEW_PASSWORD'	=> 'Новий пароль',
	'NEW_PASSWORD_ERROR'	=> 'Введені вами паролі не співпадають.',
	'NOTIFY_METHOD'	=> 'Спосіб повідомлення',
	'NOTIFY_METHOD_BOTH'	=> 'Обидва',
	'NOTIFY_METHOD_EMAIL'	=> 'Лише e-mail',
	'NOTIFY_METHOD_EXPLAIN'	=> 'Метод відправки повідомлень через форум.',
	'NOTIFY_METHOD_IM'	=> 'Лише Jabber',
	'NOTIFY_ON_PM'	=> 'Повідомте мене про надходження нових приватних повідомлень',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Ви не можете додати анонімного користувача до вашого списку друзів.',
 	'NOT_ADDED_FRIENDS_BOTS' => 'Ви не можете додати бота в список друзів.',
	'NOT_ADDED_FRIENDS_FOES'	=> 'Ви не можете додавати користувачів, які в вашому списку недругів',
	'NOT_ADDED_FRIENDS_SELF'	=> 'Ви не можете додати себе в список друзів',
	'NOT_ADDED_FOES_MOD_ADMIN'	=> 'Ви не можете додавати адміністраторів та модераторів в свій список недругів.',
	'NOT_ADDED_FOES_ANONYMOUS'	=> 'Ви не можете додати анонімного користувача до вашого списку недругів.',
 	'NOT_ADDED_FOES_BOTS' => 'Ви не можете додати бота до списку недругів.',
	'NOT_ADDED_FOES_FRIENDS'	=> 'Ви не можете додавати користувачів, які є в вашому списку друзів, в свій список недругів.',
	'NOT_ADDED_FOES_SELF'	=> 'Ви не можете додати себе в список недругів.',
	'NOT_AGREE'	=> 'Я не погоджуюсь з цими умовами',
	'NOT_ENOUGH_SPACE_FOLDER'	=> 'Папка “%s” заповнена. Дана операція не виконана.',
	'NOT_MOVED_MESSAGE'	=> 'Вам прийшло 1 приватне повідомлення, яке знаходиться в стані очікування через те, що ваша папка вхідних повідомлень переповнена.',
	'NOT_MOVED_MESSAGES'	=> 'Вам прийшло %d приватних повідомлень, які знаходиться в стані очікування через те, що ваша папка вхідних повідомлень переповнена.',
	'NO_ACTION_MODE'	=> 'Не вибрано жодних дій для повідомлень.',
	'NO_AUTHOR'	=> 'Не вказаний автор для цього повідомлення',
	'NO_AVATAR_CATEGORY'	=> 'Немає',
	'NO_AUTH_DELETE_MESSAGE'	=> 'Ви не можете видаляти приватні повідомлення.',
	'NO_AUTH_EDIT_MESSAGE'	=> 'Ви не можете редагувати приватні повідомлення.',
	'NO_AUTH_FORWARD_MESSAGE'	=> 'Ви не можете пересилати приватні повідомлення.',
	'NO_AUTH_GROUP_MESSAGE'	=> 'Ви не можете надсилати приватні повідомлення групам.',
	'NO_AUTH_PASSWORD_REMINDER'      => 'Ви не можете відсилати запит на новий пароль.',
   	'NO_AUTH_READ_HOLD_MESSAGE'      => 'Ви не можете читати приватні повідомлення, які знаходяться на утримуванні.',
	'NO_AUTH_READ_MESSAGE'	=> 'Ви не можете переглядати приватні повідомлення.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Ви не можете переглянути це повідомлення, воно було видалене автором.',
	'NO_AUTH_SEND_MESSAGE'	=> 'Ви не можете надсилати приватні повідомлення.',
	'NO_AUTH_SIGNATURE'	=> 'Ви не можете використовувати підпис',
	'NO_BCC_RECIPIENT'	=> 'Немає',
	'NO_BOOKMARKS'	=> 'У вас немає закладок',
	'NO_BOOKMARKS_SELECTED'	=> 'Ви не робили закладок',
	'NO_EDIT_READ_MESSAGE'		=> 'Приватне повідомлення не може бути відредагованим, оскільки воно вже було прочитане.',
	'NO_EMAIL_USER'	=> 'Введена інформація про адресу електронної пошти/ім\'я користувача не знайдена',
	'NO_FOES'	=> 'Список недругів порожній',
	'NO_FRIENDS'	=> 'Список друзів порожній',
	'NO_FRIENDS_OFFLINE'	=> 'Немає друзів офлайн',
	'NO_FRIENDS_ONLINE'	=> 'Немає друзів онлайн',
	'NO_GROUP_SELECTED'	=> 'Група не обрана',
	'NO_IMPORTANT_NEWS'	=> 'Немає важливих повідомлень',
	'NO_MESSAGE'	=> 'Приватне повідомлення не знайдено',
	'NO_NEW_FOLDER_NAME'	=> 'Ви повинні задати ім\'я нової папки',
	'NO_NEWER_PM'	=> 'Немає нових повідомлень',
	'NO_OLDER_PM'	=> 'Немає старих повідомлень',
	'NO_RECIPIENT'	=> 'Не вказаний одержувач',
	'NO_RULES_DEFINED'	=> 'Правил не встановлено',
	'NO_SAVED_DRAFTS'	=> 'Немає збережених чернеток',
	'NO_TO_RECIPIENT'	=> 'Немає',
	'NO_WATCHED_FORUMS'	=> 'Ви не слідкуєте за жодним форумом.',
	'NO_WATCHED_SELECTED'      => 'Ви не обрали жодної теми або форуму для підписки.',
	'NO_WATCHED_TOPICS'	=> 'Ви не слідкуєте за жодною темою.',
	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Пароль повинен мати довжину від %1$d до %2$d символів і повинен містити букви та цифри',
	'PASS_TYPE_ANY_EXPLAIN'	=> 'Пароль повинен мати довжину від %1$d до %2$d символів.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Пароль повинен мати довжину від %1$d до %2$d символів і повинен містити символи різного регістру',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Пароль повинен мати довжину від %1$d до %2$d символів і повинен містити символи',
	'PASSWORD'	=> 'Пароль',
	'PASSWORD_ACTIVATED'	=> 'Ваш новий пароль активовано',
	'PASSWORD_UPDATED'	=> 'Новий пароль було успішно надіслано на вашу адресу електронної пошти, яку ви вказали при реєстрації.',
	'PERMISSIONS_RESTORED'	=> 'Ваші права доступу успішно відновлено .',
	'PERMISSIONS_TRANSFERRED'	=> 'Успішно перенесені права доступу користувача <strong>%s</strong>. Тепер ви можете переглядати форум з його правами доступу.<br />Зауважте, що тепер ви не маєте прав доступу адміністратора. Ви можете повернути ваші попередні права доступу в будь-яким момент.',
	'PM_DISABLED'	=> 'Приватні повідомлення вимкнені на цьому форумі',
	'PM_FROM'	=> 'Від',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Повідомлення надійшло від вже незареєстрованого користувача.',
	'PM_ICON'	=> 'Значок ПП',
	'PM_INBOX'	=> 'Вхідні',
	'PM_OUTBOX'	=> 'Вихідні',
	'PM_SENTBOX'	=> 'Відправлені повідомлення',
	'PM_SUBJECT'	=> 'Тема повідомлення',
	'PM_TO'	=> 'Кому',
	'POPUP_ON_PM'	=> 'Спливаюче вікно при надходженні нового приватного повідомлення',
	'POST_EDIT_PM'	=> 'Редагувати повідомлення',
	'POST_FORWARD_PM'	=> 'Переслати повідомлення',
	'POST_NEW_PM'	=> 'Відправити повідомлення',
	'POST_PM_LOCKED'	=> 'Приватне повідомлення заблоковане',
	'POST_PM_POST'	=> 'Цитувати повідомлення',
	'POST_QUOTE_PM'	=> 'Цитувати повідомлення',
	'POST_REPLY_PM'	=> 'Відповісти на повідомлення',
	'PRINT_PM'	=> 'Версія для друку',
	'PREFERENCES_UPDATED'	=> 'Ваші налаштування оновлено.',
	'PROFILE_INFO_NOTICE'	=> 'Зауважте, що ця інформація буде доступною для перегляду іншим користувачам. Будьте уважні при розміщенні персональних даних. Усі поля позначені * обов\'язкові для заповнення.',
	'PROFILE_UPDATED'	=> 'Ваш профіль оновлено.',
	'RECIPIENT'	=> 'Одержувач',
	'RECIPIENTS'	=> 'Одержувачі',
	'REGISTRATION'	=> 'Реєстрація',
	'RELEASE_MESSAGES'	=> '%sДодати усі повідомлення, які знаходяться в стані очікування%s… Вони будуть відсортовані в відповідній папці при наявності вільного місця.',
	'REMOVE_ADDRESS'	=> 'Видалити адресу',
	'REMOVE_SELECTED_BOOKMARKS'	=> 'Видалити обрані закладки',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Ви впевнені, що хочете видалити усі обрані закладки?',
	'REMOVE_BOOKMARK_MARKED'	=> 'Видалити відмічені закладки',
	'REMOVE_FOLDER'	=> 'Видалити папку',
	'REMOVE_FOLDER_CONFIRM'	=> 'Ви впевнені, що хочете видалити цю папку?',
	'RENAME'	=> 'Перейменувати',
	'RENAME_FOLDER'	=> 'Перейменувати папку',
	'REPLIED_MESSAGE'	=> 'Ви відповіли на це повідомлення',
 	'REPLY_TO_ALL' => 'Відповісти відправнику та всім одержувачам.',
 	'REPORT_PM' => 'Поскаржитись на приватне повідомлення',
	'RESIGN_SELECTED'	=> 'Вийти з обраної групи',
	'RETURN_FOLDER'	=> '%1$sПовернутись в попередню папку%2$s',
	'RETURN_UCP'	=> '%sПовернутись в Панель керування%s',
	'RULE_ADDED'	=> 'Правило успішно додано',
	'RULE_ALREADY_DEFINED'	=> 'Це правило було додано раніше',
	'RULE_DELETED'	=> 'Правило успішно видалено',
	'RULE_NOT_DEFINED'	=> 'Правило вказане некоректно',
	'RULE_REMOVED_MESSAGE'	=> 'Видалено 1 приватне повідомлення відповідно до встановлених фільтрів.',
	'RULE_REMOVED_MESSAGES'	=> 'Видалено %d приватних повідомлень відповідно до встановлених фільтрів.',
	'SAME_PASSWORD_ERROR'	=> 'Пароль, який ви ввели ідентичний вашому поточному паролю',
	'SEARCH_YOUR_POSTS'	=> 'Показати ваші повідомлення',
	'SEND_PASSWORD'	=> 'Вислати пароль',
	'SENT_AT'	=> 'Відправлено на',
	'SHOW_EMAIL'	=> 'Показувати учасникам мою адресу e-mail',
	'SIGNATURE_EXPLAIN'	=> 'Це текст, який буде додаватись внизу написаних вами повідомлень. Він обмежується %d символами',
	'SIGNATURE_PREVIEW'	=> 'Ваш підпис буде виглядати так:',
	'SIGNATURE_TOO_LONG'	=> 'Ваш підпис надто довгий.',
	'SORT'	=> 'Сортувати',
	'SORT_COMMENT'	=> 'Опис файлу',
	'SORT_DOWNLOADS'	=> 'Завантажено',
	'SORT_EXTENSION'	=> 'Розширення',
	'SORT_FILENAME'	=> 'Ім\'я файлу',
	'SORT_POST_TIME'	=> 'Час',
	'SORT_SIZE'	=> 'Розмір файлу',
	'TIMEZONE'	=> 'Часовий пояс',
	'TO'	=> 'Кому',
	'TOO_MANY_RECIPIENTS'	=> 'Ви намагались відправити приватне повідомлення занадто багатьом одержувачам',
	'TOO_MANY_REGISTERS'	=> 'Ви перевищили максимальну кількість спроб реєстрації протягом цієї сесії. Спробуйте, будь-ласка, пізніше.',
	'UCP'	=> 'Панель керування',
	'UCP_ACTIVATE'	=> 'Активувати обліковий запис',
	'UCP_ADMIN_ACTIVATE'	=> 'Зауважте, що необхідно ввести правильну адресу електронної пошти перед активацією. Адміністратор перегляне ваш обліковий запис і у випадку схвалення ви отримаєте e-mail повідомлення на задану вами адресу.',
	'UCP_AIM'	=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'	=> 'Приєднані файли',
	'UCP_COPPA_BEFORE'	=> 'До %s',
	'UCP_COPPA_ON_AFTER'	=> '%s і після',
	'UCP_EMAIL_ACTIVATE'	=> 'Зауважте, вам необхідно ввести реальну адресу e-mail для того, щоб активувати ваш обліковий запис. На вказану вами адресу прийде лист з посиланням для активації облікового запису.',
	'UCP_ICQ'	=> 'Номер ICQ',
	'UCP_JABBER'	=> 'Адреса Jabber',
	'UCP_MAIN'	=> 'Огляд',
	'UCP_MAIN_ATTACHMENTS'	=> 'Керування приєднаними файлами',
	'UCP_MAIN_BOOKMARKS'	=> 'Керування закладками',
	'UCP_MAIN_DRAFTS'	=> 'Керування чернетками',
	'UCP_MAIN_FRONT'	=> 'Головна сторінка',
	'UCP_MAIN_SUBSCRIBED'	=> 'Керування підписками',
	'UCP_MSNM'	=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'	=> 'Ви не розміщали файлів',
	'UCP_PREFS'	=> 'Налаштування форуму',
	'UCP_PREFS_PERSONAL'	=> 'Загальні налаштування',
	'UCP_PREFS_POST'	=> 'Налаштування повідомлень',
	'UCP_PREFS_VIEW'	=> 'Налаштування відображення',
	'UCP_PM'	=> 'Приватні повідомлення',
	'UCP_PM_COMPOSE'	=> 'Написати повідомлення',
	'UCP_PM_DRAFTS'	=> 'Керування чернетками ПП',
	'UCP_PM_OPTIONS'	=> 'Налаштування',
	'UCP_PM_POPUP'	=> 'Приватні повідомлення',
	'UCP_PM_POPUP_TITLE'	=> 'Спливаюче вікно при отриманні нового приватного повідомлення',
	'UCP_PM_UNREAD'	=> 'Непрочитані повідомлення',
	'UCP_PM_VIEW'	=> 'Переглянути повідомлення',
	'UCP_PROFILE'	=> 'Профіль',
	'UCP_PROFILE_AVATAR'	=> 'Налаштування аватару',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Редагувати профіль',
	'UCP_PROFILE_REG_DETAILS'	=> 'Налаштування облікового запису',
	'UCP_PROFILE_SIGNATURE'	=> 'Редагувати підпис',
	'UCP_USERGROUPS'	=> 'Групи',
	'UCP_USERGROUPS_MEMBER'	=> 'Участь в групах',
	'UCP_USERGROUPS_MANAGE'	=> 'Керування групами',
	'UCP_REGISTER_DISABLE'	=> 'Створення нового облікового запису зараз неможливе.',
	'UCP_REMIND'	=> 'Вислати пароль',
	'UCP_RESEND'	=> 'Вислати лист активації',
	'UCP_WELCOME'	=> 'Вітаємо вас в Панелі керування. Звідси ви можете  контролювати, переглядати і змінювати ваш профіль, налаштування, підписку на форуми і теми. Також ви можете надсилати приватні повідомлення іншим учасникам (якщо це дозволено). Будь-ласка, переконайтесь, що ви прочитали усі оголошення адміністрації, перед тим як продовжувати.',
	'UCP_YIM'	=> 'Yahoo Messenger',
	'UCP_ZEBRA'	=> 'Друзі та Недруги',
	'UCP_ZEBRA_FOES'	=> 'Керування недругами',
	'UCP_ZEBRA_FRIENDS'	=> 'Керування друзями',
 	'UNDISCLOSED_RECIPIENT'			=> 'Нерозкритий отримувач',
	'UNKNOWN_FOLDER'	=> 'Невідома папка',
	'UNWATCH_MARKED'	=> 'Відписатись від позначеного',
	'UPLOAD_AVATAR_FILE'	=> 'Завантажити з вашого комп\'ютера',
	'UPLOAD_AVATAR_URL'	=> 'Завантажити з URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'	=> 'Введіть адресу URL зображення, його буде скопійовано на цей сайт.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Ім\'я користувача повинне мати довжину від %1$d до %2$d символів та містити лише букви та числа',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'	=> 'Ім\'я користувача повинне мати довжину від %1$d до %2$d символів та містити лише букви та числа, пробіл і символи -+_[].',
	'USERNAME_ASCII_EXPLAIN'	=> 'Ім\'я користувача повинне мати довжину від %1$d до %2$d символів та містити лише символи ASCII без спеціальних символів',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Ім\'я користувача повинне мати довжину від %1$d до %2$d символів та містити лише букви та цифри',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'	=> 'Ім\'я користувача повинне мати довжину від %1$d до %2$d символів та містити лише letter, цифри, пробіл або символи -+_[].',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Довжина повинна бути від %1$d до %2$d символів.',
	'USERNAME_TAKEN_USERNAME'	=> 'Введене вами ім\'я користувача вже використовується, будь-ласка оберіть інше.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Введене вами ім\'я користувача заборонене.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Введені вами імена користувачів не знайдено або ці користувачі не активували облікові записи.',
	'VIEW_AVATARS'	=> 'Відображати аватари',
	'VIEW_EDIT'	=> 'Перегляд/Редагування',
	'VIEW_FLASH'	=> 'Відображати Flash-анімації',
	'VIEW_IMAGES'	=> 'Відображати зображення в повідомленнях',
	'VIEW_NEXT_HISTORY'	=> 'Наступне ПП в архіві',
	'VIEW_NEXT_PM'	=> 'Наступне ПП',
	'VIEW_PM'	=> 'Переглянути повідомлення',
	'VIEW_PM_INFO'	=> 'Інформація про повідомлення',
	'VIEW_PM_MESSAGE'	=> '1 повідомлення',
	'VIEW_PM_MESSAGES'	=> '%d повідомлень',
	'VIEW_PREVIOUS_HISTORY'	=> 'Попереднє ПП в архіві',
	'VIEW_PREVIOUS_PM'	=> 'Попереднє ПП',
	'VIEW_SIGS'	=> 'Відображати підписи',
	'VIEW_SMILIES'	=> 'Відображати смайлики як зображення',
	'VIEW_TOPICS_DAYS'	=> 'Відображати теми за попередні дні',
	'VIEW_TOPICS_DIR'	=> 'Порядок сортування тем',
	'VIEW_TOPICS_KEY'	=> 'Відображати теми відсортовані за',
	'VIEW_POSTS_DAYS'	=> 'Відображати повідомлення за попередні дні',
	'VIEW_POSTS_DIR'	=> 'Порядок сортування повідомлень',
	'VIEW_POSTS_KEY'	=> 'Відображати повідомлення відсортовані за',
	'WATCHED_EXPLAIN'	=> 'Внизу показаний список форумів і тем, на які ви підписані. Вас буде повідомлено про надходження нових повідомлень в них. Щоб відписатись, відмітьте відповідні форуми або теми і натисніть <em>Відписатись від відмічених</em>.',
	'WATCHED_FORUMS'	=> 'Підписки на форуми',
	'WATCHED_TOPICS'	=> 'Підписки на теми',
	'WRONG_ACTIVATION'	=> 'Ключ активації, який ви вказали, відсутній в базі даних',

	'YOUR_DETAILS'	=> 'Ваша активність',
	'YOUR_FOES'	=> 'Ваші недруги',
	'YOUR_FOES_EXPLAIN'	=> 'Для видалення користувачів оберіть їх і натисніть "Надіслати"',
	'YOUR_FRIENDS'	=> 'Ваші друзі',
	'YOUR_FRIENDS_EXPLAIN'	=> 'Для видалення користувачів оберіть їх і натисніть "Відправити"',
	'YOUR_WARNINGS'	=> 'Ваш рівень попереджень',

	'PM_ACTION'	=> array(
		'PLACE_INTO_FOLDER'	=> 'Перемістити в папку',
		'MARK_AS_READ'	=> 'Позначити як прочитане',
		'MARK_AS_IMPORTANT'	=> 'Позначити повідомлення',
		'DELETE_MESSAGE'	=> 'Видалити повідомлення',
	),
	'PM_CHECK'	=> array(
		'SUBJECT'	=> 'Тема',
		'SENDER'	=> 'Відправник',
		'MESSAGE'	=> 'Повідомлення',
		'STATUS'	=> 'Статус повідомлення',
		'TO'	=> 'Кому',
	),
	'PM_RULE'	=> array(
		'IS_LIKE'	=> 'містить',
		'IS_NOT_LIKE'	=> 'не містить',
		'IS'	=> 'відповідає',
		'IS_NOT'	=> 'не відповідає',
		'BEGINS_WITH'	=> 'починається з',
		'ENDS_WITH'	=> 'закінчується на',
		'IS_FRIEND'	=> 'друг',
		'IS_FOE'	=> 'недруг',
		'IS_USER'	=> 'користувач',
		'IS_GROUP'	=> 'входить в групу',
		'ANSWERED'	=> 'надіслана відповідь',
		'FORWARDED'	=> 'відправлене',
		'TO_GROUP'	=> 'в мою групу за замовчуванням',
		'TO_ME'	=> 'мені',
	),


	'GROUPS_EXPLAIN'	=> 'Групи надають адміністраторам більше можливостей керування користувачами. За замовчуванням ви будете учасником певної групи. Від групи залежить ваше відображення на форумі, наприклад, колір вашого імені, аватар, звання, і т.п. В залежності від того, чи дозволено це адміністратором, ви можете змінити свою групу за замовчуванням. Ви можете бути перенесені до іншої групи або вам може бути дозволено вступити в інші групи. Деякі групи можуть надавати додаткові права доступу для перегляду вмісту чи розширяти ваші можливості в іншому.',
	'GROUP_LEADER'	=> 'Лідер групи',
	'GROUP_MEMBER'	=> 'Учасник групи',
	'GROUP_PENDING'	=> 'Очікує на вступ до групи',
	'GROUP_NONMEMBER'	=> 'Не входить до жодної групи',
	'GROUP_DETAILS'	=> 'Інформація про групу',
	
	'NO_LEADER'	=> 'Немає лідерів групи',
	'NO_MEMBER'	=> 'Немає учасників групи',
	'NO_PENDING'	=> 'Немає очікувачів на вступ до групи',
	'NO_NONMEMBER'	=> 'Немає порожніх груп',
));

?>