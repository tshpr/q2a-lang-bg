<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	Translation to Bulgarian (c) 2013, Nikolay Hamov, http://tonove.info/

	File: qa-lang/bg/qa-lang-emails.php
	Version: 1.6.2
	Date: 2013-10-05 10:19:00 GMT
	Description: Language phrases for email notifications

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Вашият отговор в ^site_title има нов коментар от ^c_handle:\n\n^open^c_content^close\n\nВашият отговор беше:\n\n^open^c_context^close\n\nВие можете да отговорите чрез добавяне на ваш коментар:\n\n^url\n\nБлагодарим Ви,\n\n^site_title",
		'a_commented_subject' => 'Вашият отговор в ^site_title има нов коментар',
		'a_followed_body' => "Вашият отговор в ^site_title има нов свързан въпрос от ^q_handle:\n\n^open^q_title^close\n\nВашият отговор беше:\n\n^open^a_content^close\n\nКликнете връзката по-долу, за да отговорите на новия въпрос:\n\n^url\n\nБлагодарим Ви,\n\n^site_title",
		'a_followed_subject' => 'Вашият отговор в ^site_title има свързан въпрос',
		'a_selected_body' => "Поздравления! Вашият отговор в ^site_title е избран за най-добър от ^s_handle:\n\n^open^a_content^close\n\nВъпросът беше:\n\n^open^q_title^close\n\nКликнете връзката по-долу за да видите вашия отговор:\n\n^url\n\nThank you,\n\n^site_title",
		'a_selected_subject' => 'Вашият отговор в ^site_title е избран!',
		'c_commented_body' => "Нов коментар от ^c_handle беше добавен след Вашия коментар в ^site_title:\n\n^open^c_content^close\n\nДискусията е следната:\n\n^open^c_context^close\n\nМожете да отговорите чрез добавяне на друг коментар:\n\n^url\n\nБлагодарим Ви,\n\n^site_title",
		'c_commented_subject' => 'Вашият коментар в ^site_title беше добавен към',
		'confirm_body' => "Моля кликнете на връзката по-долу, за да потвърдите Вашия мейл за ^site_title.\n\n^url\n\nКод за потвърждение: ^code\n\nБлагодарим Ви,\n^site_title",
		'confirm_subject' => '^site_title - потвърждение на Вашия е-мейл',
		'feedback_body' => "Коментари:\n^message\n\nИме:\n^name\n\nЕ-мейл:\n^email\n\nПредишна страница:\n^previous\n\nПотребител:\n^url\n\nIP адрес:\n^ip\n\nБраузър:\n^browser",
		'feedback_subject' => '^ обратна връзка',
		'flagged_body' => "Пост от ^p_handle е получил ^flags:\n\n^open^p_context^close\n\nКликнете връзката по-долу за да видите поста:\n\n^url\n\n\nКликнете по-долу за де разгледате отбелязаните постове\n\n^a_url\n\n\nБлагодарим Ви,\n\n^site_title",
		'flagged_subject' => '^site_title има пост с флаг',
		'moderate_body' => "Пост от ^p_handle изисква Вашето одобрение:\n\n^open^p_context^close\n\nКликнете по-долу, за да одобрите или отхвърлите пост:\n\n^url\n\n\nКликнете по-долу за да разгледате всички чакащи постове:\n\n^a_url\n\n\nБлагодарим Ви,n\n^site_title",
		'moderate_subject' => '^site_title модерация',
		'new_password_body' => "Вашата нова парола за ^site_title е по-долу.\n\nПарола: ^password\n\nПрепоръчваме Ви да промените тази парола веднага след като влезете в сайта.\n\nБлагодарим Ви,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Вашата нова парола',
		'private_message_body' => "Беше Ви изпратено лично съобщение от ^f_handle в ^site_title:\n\n^open^message^close\n\n^moreБлагодарим Ви,\n\n^site_title\n\n\nАко искате да блокирате личните съобщения, посетете страницата на Вашия профил:\n^a_url",
		'private_message_info' => "Повече информация за ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Кликнете на връзката по-долу, за да отговорите на ^f_handle с лично съобщение:\n\n^url\n\n",
		'private_message_subject' => 'Съобщение от ^f_handle в ^site_title',
		'q_answered_body' => "Има отговор на Вашият въпрос в ^site_title от ^a_handle:\n\n^open^a_content^close\n\nВашият въпрос беше:\n\n^open^q_title^close\n\nАко харесвате този отговор, можете да го изберете като най-добър:\n\n^url\n\nБлагодарим Ви,\n\n^site_title",
		'q_answered_subject' => 'Вашият въпрос в ^site_title получи отговор',
		'q_commented_body' => "Вашият въпрос в ^site_title има нов коментар от ^c_handle:\n\n^open^c_content^close\n\nВашият въпрос беше:\n\n^open^c_context^close\n\nМожете да отговорите чрез добавяне на Вашия коментар:\n\n^url\n\nБлагодарим Ви,\n\n^site_title",
		'q_commented_subject' => 'Вашият въпрос в ^site_title има нов коментар',
		'q_posted_body' => "Има нов въпрос, поставен от ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nКликнете връзката по-долу, за да видите въпроса:\n\n^url\n\nБлагодарим Ви,\n\n^site_title",
		'q_posted_subject' => '^site_title има нов въпрос',
		'remoderate_body' => "Редактиран пост от ^p_handle изисква Вашето одобрение:\n\n^open^p_context^close\n\nКликнете по-долу за да одобрите или скриете редактирания пост::\n\n^url\n\n\nКликнете по-долу за да разгледате всички чакащи постове::\n\n^a_url\n\n\nБлагодарим Ви,\n\n^site_title",
		'remoderate_subject' => '^site_title модерация',
		'reset_body' => "Моля кликнете връзката по-долу, за да смените Вашата парола за ^site_title.\n\n^url\n\nКато алтернатива, въведете кода даден по-долу в съответното поле.\n\nКод: ^code\n\nАко не сте искали да смените паролата си, моля игнорирайте това съобщение.\n\nБлагодарим Ви,\n^site_title",
		'reset_subject' => '^site_title - смяна на забравена парола',
		'to_handle_prefix' => "^,\n\n",
		'u_registered_body' => "Нов потребител се е регистрирал като ^u_handle.\n\nКликнете по-долу за да видите профила му:\n\n^url\n\nБлагодарим Ви,\n\n^site_title",
		'u_to_approve_body' => "Нов потребител се е регистрирал като ^u_handle.\n\nКликнете по-долу за да го одобрите::\n\n^url\n\nКликнете по-долу за да разгледате всички потребители чакащи за одобрение::\n\n^a_url\n\nБлагодарим Ви,\n\n^site_title",
		'u_registered_subject' => '^site_title има нов регистриран потребител',
		'u_approved_body' => "Можете да видите вашия нов профил на потребител тук:\n\n^url\n\nБлагодарим Ви,\n\n^site_title",
		'u_approved_subject' => 'Вашият профил в ^site_title е одобрен',
		'wall_post_subject' => 'Поствайте на Вашата ^site_title стена',
		'wall_post_body' => "^f_handle е поствал на стената Ви в ^site_title:\n\n^open^post^close\n\nМожете да отговорите на поста тук:\n\n^url\n\nБлагодарим Ви,\n\n^site_title",
		'welcome_body' => "Благодарим Ви за регистрацията в ^site_title.\n\n^custom^confirmВашите детайли за влизане са следните:\n\nПотребителско име: ^handle\nемейл: ^email\n\nМоля запазете тази информация на сигурно място за използване в бъдеще.\n\nБлагодарим,\n\n^site_title\n^url",
		'welcome_confirm' => "Моля, кликнете по-долу, за да потвърдите е-мейл адреса Ви.\n\n^url\n\n",
		'welcome_subject' => 'Добре дошли в ^site_title!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
