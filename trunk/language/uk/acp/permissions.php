<?php
/**
*
* acp_permissions [Ukrainian]
*
* @package language
* @version $Id: permissions.php,v 1.38 2007/10/08 14:38:26 acydburn Exp $
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

$lang = array_merge($lang, array(
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Права доступу надзвичайно деталізовані і згруповані в чотири основні розділи:</p>

		<h2>Глобальні права доступу</h2>
		<p>Використовуються для контролю доступу на глобальному рівні і застосовуються до всього форуму загалом. Далі вони розділені на права доступу користувачів, права доступу груп, адміністраторів та глобальних модераторів.</p>

		<h2>Локальні права доступу</h2>
		<p>Використовуються для контролю доступу на рівні форумів. Далі вони розділені на доступ до форумів, модераторів форуму, форумні права користувачів та форумні права груп.</p>

		<h2>Ролі</h2>
		<p>Використовуються для створення типових наборів права доступу, щоб надалі можна було призначати права, які базуються на ролевому доступі. Ролі за замовчуванням повинні задовільняти потреби адміністрування великих та малих форумів, але крім цього, в кожному з чотирьох розділів ви можете додавати/редагувати/видаляти ролі так, як ви вважаєте за потрібне.</p>

		<h2>Маски прав доступу</h2>
		<p>Використовуються для перегляду чинних прав доступу, встановлених для користувачів, модераторів (локальних та глобальних), адміністраторів та форумів.</p>
	
		<br />

		<p>Для отримання більш детальної інформації по встановленню та керуванню правами доступу на вашому форумі phpBB3, перегляньте, будь-ласка, <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Розділ 1.5 нашого посібника</a>.</p>
	',

	'ACL_NEVER'				=> 'Ніколи',
	'ACL_SET'				=> 'Налаштування прав доступу',
	'ACL_SET_EXPLAIN'		=> 'Права доступу базуються на простій системі <samp>ТАК</samp>/<samp>НІ</samp>. Встановлення значення <samp>НІКОЛИ</samp> для користувача або групи ігнорує усі інші значення, встановлені для цієї опції. Якщо ви не хочете встановлювати значення для опції для даного користувача або групи, оберіть <samp>НІ</samp>. Якщо значення для цієї опції встановлені ще десь, вони будуть мати більш високий пріоритет, якщо не встановлено <samp>НІКОЛИ</samp>. Усі відмічені об\'єкти (з встановленою біля них галочкою) відображають встановлені права доступу.',
	'ACL_SETTING'			=> 'Налаштування',

	'ACL_TYPE_A_'			=> 'Права адміністратора',
	'ACL_TYPE_F_'			=> 'Доступ до форумів',
	'ACL_TYPE_M_'			=> 'Права модератора',
	'ACL_TYPE_U_'			=> 'Права користувача',

	'ACL_TYPE_GLOBAL_A_'	=> 'Права адміністратора',
	'ACL_TYPE_GLOBAL_U_'	=> 'Права користувача',
	'ACL_TYPE_GLOBAL_M_'	=> 'Права супермодератора',
	'ACL_TYPE_LOCAL_M_'		=> 'Права модератора форуму',
	'ACL_TYPE_LOCAL_F_'		=> 'Доступ до форумів',
	
	'ACL_NO'				=> 'Ні',
	'ACL_VIEW'				=> 'Перегляд прав доступу',
	'ACL_VIEW_EXPLAIN'		=> 'Тут ви можете бачити чинні права користувача/групи. Червоний квадрат вказує на відсутність прав доступу в користувача або групи, зелений - на наявність цих прав.',
	'ACL_YES'				=> 'Так',

	'WRONG_PERMISSION_SETTING_FORMAT'			=> 'Налаштування прав доступу мають невірний формат, phpBB не може обробити їх коректно.', 
	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Тут ви можете встановлювати права доступу адміністратора користувачам або групам. Усі користувачі з адміністративними правами доступу можуть переглядати панель адміністратора.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Тут ви можете призначати користувачів та групи модераторами форуму. Для призначення прав доступу до форумів користувачам, а також прав доступу супермодераторів та адміністраторів, будь-ласка, використовуйте відповідний розділ.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN' => 'Тут ви можете cкопіювати форумні права доступу з одного форуму в інший або в декілька інших форумів.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Тут ви можете змінювати права доступу до форумів для користувачів та груп. Для призначення модераторів та адміністраторів використовуйте відповідний розділ.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Тут ви можете встановлювати права доступу супермодераторів користувачам або групам. Супермодератори подібні до звичайних модераторів, за винятком того, що вони мають доступ до усіх форумів.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Тут ви можете встановлювати форумні права доступу групам.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Тут ви можете встановлювати глобальні права доступу групам - права користувачів, права супермодераторів та права адміністраторів. Права користувачів включають такі можливості, як використання аватарів, надсилання приватних повідомлень і т.п., права доступу супермодераторів - схвалення повідомлень, керування темами, керування забороною доступу та інші, права доступу адміністраторів - зміну права доступу, створення нових кодів BBCode, керування форумами і т.п. Індивідуально змінювати права доступу користувачів слід змінювати в особливих випадках, найбільш зручний спосіб полягає у додаванні користувачів до груп і встановленні прав доступу групі.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Тут ви можете керувати адміністративними ролями. Ролі включають чинні права доступу, при зміні налаштувань ролі, зміняться права доступу користувачів та груп, яким призначена дана роль.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Тут ви можете керувати форумними ролями. Ролі включають чинні права доступу, при зміні налаштувань ролі, зміняться права доступу користувачів та груп, яким призначена дана роль.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Тут ви можете керувати ролями модераторів. Ролі включають чинні права доступу, при зміні налаштувань ролі, зміняться права доступу користувачів та груп, яким призначена дана роль.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Тут ви можете керувати ролями користувачів. Ролі включають чинні права доступу, при зміні налаштувань ролі, зміняться права доступу користувачів та груп, яким призначена дана роль.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Тут ви можете встановлювати форумні права доступу користувачам.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Тут ви можете встановлювати глобальні права доступу користувачам - права доступу користувачів, права супермодераторів та права адміністраторів. Права користувачів включають такі можливості, як використання аватарів, надсилання приватних повідомлень і т.п., права доступу супермодераторів - схвалення повідомлень, керування темами, керування забороною доступу та інші, права доступу адміністраторів - зміну права доступу, створення нових кодів BBCode, керування форумами і т.п. Індивідуально змінювати права доступу користувачів слід змінювати в особливих випадках, найбільш зручний спосіб полягає у додаванні користувачів до груп і встановленні прав доступу групі.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Тут ви можете переглядати чинні адміністративні права доступу, встановлені обраним користувачам/групам.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Тут ви можете переглядати права доступу супермодераторів, встановлені обраним користувачам/групам.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Тут ви можете переглядати форумні права доступу, встановлені обраним користувачам/групам та форумам.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Тут ви можете переглядати форумні права доступу модераторів, встановлені обраним користувачам/групам та форумам.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Тут ви можете переглядати чинні права доступу, встановлені обраним користувачам/групам.',

	'ADD_GROUPS'				=> 'Додати групи',
	'ADD_PERMISSIONS'			=> 'Додати права доступу',
	'ADD_USERS'					=> 'Додати користувачів',
	'ADVANCED_PERMISSIONS'		=> 'Розширені права доступу',
	'ALL_GROUPS'				=> 'Обрати усі групи',
	'ALL_NEVER'					=> 'Усі <samp>НІКОЛИ</samp>',
	'ALL_NO'					=> 'Усі <samp>НІ</samp>',
	'ALL_USERS'					=> 'Обрати усіх користувачів',
	'ALL_YES'					=> 'Усі <samp>ТАК</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Застосувати усі права доступу',
	'APPLY_PERMISSIONS'			=> 'Застосувати права доступу',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Права доступу та роль, визначені для цього елементу будуть застосовані для нього та усіх відмічених елементів.',
	'AUTH_UPDATED'				=> 'права доступу оновлено.',

   'COPY_PERMISSIONS_CONFIRM' => 'Ви впевнені, що хочете виконати цю дію? Майте на увазі, що ця дія перезапише всі наявні права обраних форумів.', 
   'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN' => 'Форум, з якого ви хочете скопіювати права доступу.', 
   'COPY_PERMISSIONS_FORUM_TO_EXPLAIN' => 'Форуми, до яких ви хочете застосувати скопійовані права доступу.', 
   'COPY_PERMISSIONS_FROM' => 'Копіювати права з форуму', 
   'COPY_PERMISSIONS_TO' => 'Застосувати права до форумів',

	'CREATE_ROLE'				=> 'Створити роль',
	'CREATE_ROLE_FROM'			=> 'Використати налаштування від…',
	'CUSTOM'					=> 'Інше…',

	'DEFAULT'					=> 'За замовчуванням',
	'DELETE_ROLE'				=> 'Видалити роль',
	'DELETE_ROLE_CONFIRM'		=> 'Ви впевнені, що хочете видалити цю роль? Елементи з даною роллю <strong>не</strong> втратять налаштування доступу.',
	'DISPLAY_ROLE_ITEMS'		=> 'Переглянути елементи з даною роллю',

	'EDIT_PERMISSIONS'			=> 'Редагувати права доступу',
	'EDIT_ROLE'					=> 'Редагувати роль',

	'GROUPS_NOT_ASSIGNED'		=> 'Немає груп з даною роллю',

	'LOOK_UP_GROUP'				=> 'Переглянути групу',
	'LOOK_UP_USER'				=> 'Переглянути користувача',

	'MANAGE_GROUPS'		=> 'Керувати групами',
	'MANAGE_USERS'		=> 'Керувати користувачами',

	'NO_AUTH_SETTING_FOUND'		=> 'Налаштування прав доступу не встановлено.',
	'NO_ROLE_ASSIGNED'			=> 'Роль не призначено.',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Встановлення цієї ролі не змінить права доступу. Якщо ви хочете зняти/видалити усі права доступу, вам необхідно скористатись посиланням “Усі <samp>НІ</samp>”.',
	'NO_ROLE_AVAILABLE'			=> 'Немає доступних ролей',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Будь-ласка, назвіть роль.',
	'NO_ROLE_SELECTED'			=> 'Роль не знайдено.',
	'NO_USER_GROUP_SELECTED'	=> 'Ви не обрали жодного користувача чи групу.',

	'ONLY_FORUM_DEFINED'	=> 'Ви визначили лише форуми у вашому виборі. Будь-ласка, оберіть хоча б одного користувача або групу.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'права доступу та роль будуть застосовані до усіх відмічених об\'єктів',
	'PLUS_SUBFORUMS'				=> '+підфоруми',

	'REMOVE_PERMISSIONS'			=> 'Видалити права доступу',
	'REMOVE_ROLE'					=> 'Видалити роль',
	'RESULTING_PERMISSION'			=> 'Кінцеві права доступу',
	'ROLE'							=> 'Роль',
	'ROLE_ADD_SUCCESS'				=> 'Роль успішно додано.',
	'ROLE_ASSIGNED_TO'				=> 'Користувачі/групи, яким призначено роль %s',
	'ROLE_DELETED'					=> 'Роль видалено  успішно.',
	'ROLE_DESCRIPTION'				=> 'Опис ролі',

	'ROLE_ADMIN_FORUM'			=> 'Адміністратор форумів',
	'ROLE_ADMIN_FULL'			=> 'Адміністратор усього форуму',
	'ROLE_ADMIN_STANDARD'		=> 'Стандартний адміністратор',
	'ROLE_ADMIN_USERGROUP'		=> 'Адміністратор користувачів та груп',
	'ROLE_FORUM_BOT'			=> 'Доступ бота',
	'ROLE_FORUM_FULL'			=> 'Повний доступ',
	'ROLE_FORUM_LIMITED'		=> 'Обмежений доступ',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Обмежений доступ + Голосування',
	'ROLE_FORUM_NOACCESS'		=> 'Немає доступу',
	'ROLE_FORUM_ONQUEUE'		=> 'З попереднім схваленням',
	'ROLE_FORUM_POLLS'			=> 'Стандартний доступ + Голосування',
	'ROLE_FORUM_READONLY'		=> 'Доступ лише читання',
	'ROLE_FORUM_STANDARD'		=> 'Стандартний доступ',
   'ROLE_FORUM_NEW_MEMBER'		=> 'Права доступу нового користувача',
	'ROLE_MOD_FULL'				=> 'Супермодератор',
	'ROLE_MOD_QUEUE'			=> 'Премодератор',
	'ROLE_MOD_SIMPLE'			=> 'Простий модератор',
	'ROLE_MOD_STANDARD'			=> 'Стандартний модератор',
	'ROLE_USER_FULL'			=> 'Усі можливості',
	'ROLE_USER_LIMITED'			=> 'Обмежені можливості',
	'ROLE_USER_NOAVATAR'		=> 'Без аватару',
	'ROLE_USER_NOPM'			=> 'Без приватних повідомлень',
	'ROLE_USER_STANDARD'		=> 'Стандартні можливості',
   'ROLE_USER_NEW_MEMBER'		=> 'Можливості нового користувача',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Має доступ до керування форумом та налаштувань форумних прав доступу.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Має доступ до усіх адміністративних функцій цього форуму.<br />Не рекомендується.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Має доступ до більшості адміністративних функцій, окрім налаштування серверу та системи.',
 	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Може керувати групами та користувачами: Може змінювати права доступу, налаштування, керувати заборонами та званнями.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Цю роль рекомендується встановлювати ботам і пошуковим павукам.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Може використовувати усі можливості форуму, включаючи розміщення оголошень та прикріплених тем. Також може ігнорувати затримку флуду.<br />Не рекомендується для звичайних користувачів.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Може використовувати деякі можливості форуму, але не може приєднувати файли або використовувати значки повідомлень.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'		=> 'Аналогічно до Обмеженого доступу, але з можливістю створення голосувань.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Не має прав бачити та заходити на форум.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Може використовувати усі основні можливості форуму, включаючи приєднання файлів, але повідомлення та теми потребують схвалення модератором.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Аналогічно до Стандартного доступу, але з можливістю створення голосувань.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Може читати форум, але не може створювати нові теми та відповідати на повідомлення.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Може використовувати усі основні можливості форуму, включаючи приєднання файлів та видалення власних тем, але не може блокувати власні теми та створювати голосування.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER' => 'Роль для членів спеціальної групи "Нові користувачі", що обмежує можливості нових зареєстрованих користувачів.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Може використовувати усі можливості модерування, включаючи заборону доступу.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Може здійснювати лише схвалення та редагування повідомлень.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Може виконувати лише основні дії в темах. Не може надсилати попередження або використовувати відкладену модерацію.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Може використовувати більшість засобів модерування, але не може забороняти доступ користувачам та змінювати автора повідомлення.',
   'ROLE_DESCRIPTION_USER_NEW_MEMBER' => 'Роль для членів спеціальної групи "Нові користувачі", що обмежує можливості нових зареєстрованих користувачів.',

	'ROLE_DESCRIPTION_USER_FULL'			=> 'Може використовувати усі доступні для користувачів можливості форуму, включаючи зміну імені користувача та ігнорування затримки флуду.<br />Не рекомендується.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Має доступ до основних можливостей користувача. Приєднання файлів, електронна пошта, миттєві повідомлення не дозволяються.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Має обмежений набір можливостей, і не може встановлювати аватар.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Має обмежений набір можливостей, і не може використовувати приватні повідомлення.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Має доступ до більшості, але не усіх можливостей користувача. Не може змінювати ім\'я користувача та ігнорувати затримку флуду.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Ви можете ввести коротке пояснення до ролі, її призначення. Текст, який ви введете тут, буде також відображено на сторінці встановлення прав доступу.',
	'ROLE_DESCRIPTION_LONG'			=> 'Опис ролі надто довгий, будь-ласка, зменшіть його до 4000 символів.',
	'ROLE_DETAILS'					=> 'Інформація про роль',
	'ROLE_EDIT_SUCCESS'				=> 'Роль відредаговано успішно.',
	'ROLE_NAME'						=> 'Назва ролі',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Для даного типу прав доступу існує роль з назвою <strong>%s</strong>.',
	'ROLE_NOT_ASSIGNED'				=> 'Роль ще не призначено.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Обрані форуми не існують.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Обраних груп не існує.',
	'SELECTED_USER_NOT_EXIST'		=> 'Обраних користувачів не існує.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Форум, який ви обираєте тут, включить до вибору усі підфоруми.',
	'SELECT_ROLE'					=> 'Оберіть роль…',
	'SELECT_TYPE'					=> 'Оберіть тип',
	'SET_PERMISSIONS'				=> 'Встановити права доступу',
	'SET_ROLE_PERMISSIONS'			=> 'Встановити рольові права доступу',
	'SET_USERS_PERMISSIONS'			=> 'Встановити users права доступу',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Встановити форумні права доступу користувачів',

	'TRACE_DEFAULT'					=> 'За замовчуванням значення для усіх права доступу встановлено в <samp>НІ</samp> (не налаштовано). Отже, права доступу можуть бути визначені іншими налаштуваннями.',
	'TRACE_FOR'						=> 'Результат для',
	'TRACE_GLOBAL_SETTING'			=> '%s (глобально)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Встановлене значення права доступу для цієї групи -  <samp>НІКОЛИ</samp> відповідає кінцевому, тому збережено раніше встановлене значення.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Встановлене значення права групи для цього форуму - <samp>НІКОЛИ</samp> відповідає кінцевому , тому збережено раніше встановлене значення.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Встановлене значення права доступу для цієї групи -  <samp>НІКОЛИ</samp>, яке стає новим кінцевим значенням, оскільки воно не було задане раніше (встановлено в <samp>НІ</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Встановлене значення права групи для цього форуму - <samp>НІКОЛИ</samp>, яке стає новим кінцевим значенням, оскільки воно не було задане раніше (встановлено в <samp>НІ</samp>).',

	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Встановлене значення права доступу для цієї групи -  <samp>НІКОЛИ</samp> замінює встановлене кінцеве <samp>ТАК</samp> на <samp>НІКОЛИ</samp> для даного користувача.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Встановлене значення права групи для цього форуму - <samp>НІКОЛИ</samp> замінює встановлене кінцеве <samp>ТАК</samp> на <samp>НІКОЛИ</samp> для даного користувача.',	
	'TRACE_GROUP_NO'			=> 'Встановлене значення права доступу для цієї групи -  <samp>НІ</samp>, тому збережено раніше встановлене значення.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Встановлене значення права доступу для цієї групи на даному форумі - <samp>НІ</samp>, тому збережено раніше встановлене значення.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Встановлене значення права доступу для цієї групи -  <samp>ТАК</samp>, але кінцеве <samp>НІКОЛИ</samp> не може бути замінено.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Встановлене значення права групи для цього форуму - <samp>ТАК</samp>, але кінцеве <samp>НІКОЛИ</samp> не може бути замінено.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Встановлене значення права доступу для цієї групи -  <samp>ТАК</samp>, яке стає новим кінцевим значенням, оскільки воно не було задане раніше (встановлено в <samp>НІ</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Встановлене значення права групи для цього форуму - <samp>ТАК</samp>, яке стає новим кінцевим значенням, оскільки воно не було задане раніше (встановлено в <samp>НІ</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Встановлене значення права доступу для цієї групи -  <samp>ТАК</samp> і кінцеве право також <samp>ТАК</samp>, тому збережено раніше встановлене значення.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Встановлене значення права групи для цього форуму - <samp>ТАК</samp> і кінцеве право також <samp>ТАК</samp>, тому збережено раніше встановлене значення.',
	'TRACE_PERMISSION'				=> 'Відслідкувати глобальне право доступу - %s',
	'TRACE_RESULT'					=> 'Відслідкувати результат',
	'TRACE_SETTING'					=> 'Відслідкувати налаштування',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Незалежно від форуму встановлене право доступу користувача - <samp>ТАК</samp>, але кінцеве значення права доступу вже встанолено в <samp>ТАК</samp>, тому збережено раніше встановлене значення. %sВідслідкувати глобальне право доступу%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Незалежно від форуму встановлене право доступу користувача - <samp>ТАК</samp>, яке замінює поточне локальне значення <samp>НІКОЛИ</samp>. %sВідслідкувати глобальне право доступу%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Незалежно від форуму встановлене право доступу користувача - <samp>НІКОЛИ</samp>, яке не впливає на поточне локальне значення. %sВідслідкувати глобальне право доступу%s',

	'TRACE_USER_FOUNDER'					=> 'Користувач є засновником, тому для нього завжди встановлене значення прав доступу адміністратора за замовчуванням <samp>ТАК</samp>.',
	'TRACE_USER_KEPT'						=> 'Встановлене значення права користувача - <samp>НІ</samp>, тому збережено раніше встановлене значення.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Встановлене значення права користувача для цього форуму - <samp>НІ</samp>, тому збережено раніше встановлене значення.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Встановлене значення права користувача -  <samp>НІКОЛИ</samp> і кінцеве право також <samp>НІКОЛИ</samp>, нічого не змінено.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Встановлене значення права користувача для цього форуму - <samp>НІКОЛИ</samp> і кінцеве право також <samp>НІКОЛИ</samp>, нічого не змінено.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Встановлене значення права користувача - <samp>НІКОЛИ</samp>, яке стає новим кінцевим, оскільки було встановлено НІ.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Встановлене значення права користувача для цього форуму - <samp>НІКОЛИ</samp>, яке стає новим кінцевим, оскільки було встановлено НІ.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Встановлене значення права користувача - <samp>НІКОЛИ</samp> і замінює встановлене раніше <samp>ТАК</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Встановлене значення права користувача для цього форуму - <samp>НІКОЛИ</samp> і замінює встановлене раніше <samp>ТАК</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Встановлене значення права користувача - <samp>НІ</samp> і кінцеве право було встановлено в НІ, тому встановлено значення за замовчуванням - <samp>НІКОЛИ</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Встановлене значення права користувача для цього форуму - <samp>НІ</samp> і кінцеве право було встановлено в НІ, тому встановлено значення за замовчуванням - <samp>НІКОЛИ</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Встановлене значення права користувача - <samp>ТАК</samp>, але кінцеве <samp>НІКОЛИ</samp> не може бути замінено.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Встановлене значення права користувача для цього форуму - <samp>ТАК</samp>, але кінцеве <samp>НІКОЛИ</samp> не може бути замінено.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Встановлене значення права користувача - <samp>ТАК</samp>, яке стає новим кінцевим, оскільки було встановлено <samp>НІ</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Встановлене значення права користувача для цього форуму - <samp>ТАК</samp>, яке стає новим кінцевим, оскільки було встановлено <samp>НІ</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Встановлене значення права користувача - <samp>ТАК</samp>  і кінцеве право також <samp>ТАК</samp>, нічого не змінено.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Встановлене значення права користувача для цього форуму - <samp>ТАК</samp>  і кінцеве право також <samp>ТАК</samp>, нічого не змінено.',
	'TRACE_WHO'								=> 'Хто',
	'TRACE_TOTAL'							=> 'Підсумок',

	'USERS_NOT_ASSIGNED'			=> 'Немає користувачів з даною роллю',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'є учасником наступних попередньо встановлених груп за замовчуванням',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'є учасником наступних визначених користувачами груп',

	'VIEW_ASSIGNED_ITEMS'	=> 'Перегляд призначених елементів',
	'VIEW_LOCAL_PERMS'		=> 'Локальні права доступу',
	'VIEW_GLOBAL_PERMS'		=> 'Глобальні права доступу',
	'VIEW_PERMISSIONS'		=> 'Переглянути права доступу',

	'WRONG_PERMISSION_TYPE'	=> 'Обрано невірний тип прав доступу.',
));

?>