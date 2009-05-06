<?
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

/**
 * Русский языковой файл. 
 * Содержит все текстовки движка.
 */
return array(
	/**
	 * Блоги
	 */
	'blogs' => 'Блоги_$$',
	'blogs_title' => 'Название и смотритель_$$',
	'blogs_readers' => 'Читателей_$$',
	'blogs_rating' => 'Рейтинг_$$',
	'blogs_owner' => 'Смотритель_$$',
	'blogs_personal_title' => 'Блог им._$$',
	'blogs_personal_description' => 'Это ваш персональный блог._$$',
	
	'blog_no_topic' => 'Сюда еще никто не успел написать_$$',
	'blog_rss' => 'RSS лента_$$',
	'blog_rating' => 'Рейтинг_$$',
	'blog_vote_count' => 'голосов_$$',
	'blog_about' => 'О блоге_$$',
	/**
	 * Популярные блоги
	 */
	'blog_popular' => 'Популярные блоги_$$',
	'blog_popular_rating' => 'Рейтинг_$$',
	'blog_popular_all' => 'все блоги_$$',
	/**
	 * Пользователи блога
	 */
	'blog_user_count' => 'подписчиков_$$',
	'blog_user_administrators' => 'Администраторы_$$',
	'blog_user_moderators' => 'Модераторы_$$',
	'blog_user_moderators_empty' => 'Модераторов здесь не замеченно_$$',
	'blog_user_readers' => 'Читатели_$$',	
	'blog_user_readers_empty' => 'Читателей здесь не замеченно_$$',	
	/**
	 * Голосование за блог
	 */
	'blog_vote_up' => 'нравится_$$',
	'blog_vote_down' => 'не нравится_$$',
	'blog_vote_count_text' => 'всего проголосовавших:_$$',
	'blog_vote_error_already' => 'Вы уже голосовали за этот блог!_$$',
	'blog_vote_error_self' => 'Вы не можете голосовать за свой блог!_$$',
	'blog_vote_error_acl' => 'У вас не хватает рейтинга и силы для голосования!_$$',
	'blog_vote_ok' => 'Ваш голос учтен_$$',
	/**
	 * Вступление и выход из блога
	 */
	'blog_join' => 'вступить в блог_$$',	
	'blog_join_ok' => 'Вы вступили в блог_$$',	
	'blog_join_error_invite' => 'Присоедениться к этому блогу можно только по приглашению!_$$',	
	'blog_join_error_self' => 'Зачем вы хотите вступить в этот блог? Вы и так его хозяин!_$$',	
	'blog_leave' => 'покинуть блог_$$',	
	'blog_leave_ok' => 'Вы покинули блог_$$',	
	/**
	 * Меню блогов
	 */
	'blog_menu_all' => 'Все_$$',
	'blog_menu_all_good' => 'Хорошие_$$',
	'blog_menu_all_new' => 'Новые_$$',
	'blog_menu_all_list' => 'Все блоги_$$',
	'blog_menu_collective' => 'Коллективные_$$',
	'blog_menu_collective_good' => 'Хорошие_$$',
	'blog_menu_collective_new' => 'Новые_$$',
	'blog_menu_collective_bad' => 'Плохие_$$',
	'blog_menu_personal' => 'Персональные_$$',
	'blog_menu_personal_good' => 'Хорошие_$$',
	'blog_menu_personal_new' => 'Новые_$$',
	'blog_menu_personal_bad' => 'Плохие_$$',
	'blog_menu_top' => 'TOP_$$',
	'blog_menu_top_blog' => 'Блоги_$$',
	'blog_menu_top_topic' => 'Топики_$$',
	'blog_menu_top_comment' => 'Комментарии_$$',
	'blog_menu_top_period_24h' => 'За 24 часа_$$',
	'blog_menu_top_period_7d' => 'За 7 дней_$$',
	'blog_menu_top_period_30d' => 'За 30 дней_$$',
	'blog_menu_top_period_all' => 'За все время_$$',	
	'blog_menu_create' => 'Создать блог_$$',
	/**
	 * Создание/редактирование блога
	 */
	'blog_edit' => 'Редактировать_$$',
	'blog_create' => 'Создание нового блога_$$',
	'blog_create_acl' => 'Вы еще не достаточно окрепли чтобы создавать свой блог_$$',
	'blog_create_title' => 'Название блога_$$',
	'blog_create_title_notice' => 'Название блога должно быть наполнено смыслом, чтобы можно было понять, о чем будет блог._$$',
	'blog_create_title_error' => 'Название блога должно быть от 2 до 200 символов_$$',
	'blog_create_title_error_unique' => 'Блог с таким названием уже существует_$$',
	'blog_create_url' => 'URL блога_$$',
	'blog_create_url_notice' => 'URL блога, по которому он будет доступен. Может содержать только буквы латинского алфавита, цифры, дефис; пробелы будут заменены на "_". По смыслу URL  должен совпадать с названием блога, после его создания редактирование этого параметра будет недоступно_$$',
	'blog_create_url_error' => 'URL блога должен быть от 2 до 50 символов и только на латинице + цифры и знаки "-", "_"_$$',
	'blog_create_url_error_badword' => 'URL блога должен отличаться от:_$$',
	'blog_create_url_error_unique' => 'Блог с таким URL уже существует_$$',
	'blog_create_description' => 'Описание блога_$$',
	'blog_create_description_notice' => 'Между прочим, можно использовать html-теги_$$',
	'blog_create_description_error' => 'Текст описания блога должен быть от 10 до 3000 символов_$$',
	'blog_create_type' => 'Тип блога_$$',
	'blog_create_type_open' => 'Открытый_$$',
	'blog_create_type_notice' => 'Открытый — к этому блогу может присоединиться любой желающий, топики видны всем_$$',
	'blog_create_type_error' => 'Неизвестный тип блога_$$',
	'blog_create_rating' => 'Ограничение по рейтингу_$$',
	'blog_create_rating_notice' => 'Рейтинг, который необходим пользователю, чтобы написать в этот блог_$$',
	'blog_create_rating_error' => 'Значение ограничения рейтинга должно быть числом_$$',
	'blog_create_avatar' => 'Аватар_$$',
	'blog_create_avatar_error' => 'Не удалось загрузить аватар_$$',
	'blog_create_avatar_delete' => 'удалить_$$',
	'blog_create_submit' => 'Сохранить_$$',
	'blog_create_submit_notice' => 'После нажатия на кнопку «Сохранить», блог будет создан_$$',
	/**
	 * Управление блогом
	 */
	'blog_admin' => 'Управление блогом_$$',
	'blog_admin_not_authorization' => 'Для того, чтобы изменить блог, сначало нужно войти под своим аккаунтом._$$',
	'blog_admin_profile' => 'Профиль_$$',
	'blog_admin_users' => 'Пользователи_$$',
	'blog_admin_users_administrator' => 'администратор_$$',
	'blog_admin_users_moderator' => 'модератор_$$',
	'blog_admin_users_reader' => 'читатель_$$',
	'blog_admin_users_current_administrator' => 'это вы &mdash; настоящий администратор!_$$',
	'blog_admin_users_empty' => 'в блоге никто не состоит_$$',
	'blog_admin_users_submit' => 'сохранить_$$',
	'blog_admin_users_submit_notice' => 'После нажатия на кнопку «Сохранить», права пользователей будут сохранены_$$',
	'blog_admin_users_submit_ok' => 'Права сохранены_$$',
	'blog_admin_users_submit_error' => 'Что-то не так_$$',
	/**
	 * Топики
	 */
	'topic_title' => 'Топики_$$',
	'topic_read_more' => 'Читать дальше_$$',
	'topic_date' => 'дата_$$',
	'topic_user' => 'авторский текст_$$',
	'topic_comment_read' => 'читать комментарии_$$',
	'topic_comment_add' => 'комментировать_$$',
	'topic_comment_add_title' => 'написать комментарий_$$',
	'topic_comment_add_text_error' => 'Текст комментария должен быть от 2 до 3000 символов и не содержать разного рода каку_$$',
	'topic_comment_acl' => 'Ваш рейтинг слишком мал для написания комментариев_$$',
	'topic_comment_limit' => 'Вам нельзя писать комментарии слишком часто_$$',
	'topic_comment_notallow' => 'Автор топика запретил добавлять комментарии_$$',
	'topic_comment_spam' => 'Стоп! Спам!_$$',
	'topic_unpublish' => 'топик находится в черновиках_$$',
	'topic_favourite_add' => 'добавить в избранное_$$',
	'topic_favourite_add_ok' => 'Топик добавлен в избранное_$$',
	'topic_favourite_add_no' => 'Этого топика нет в вашем избранном_$$',
	'topic_favourite_add_already' => 'Этот топик уже есть в вашем избранном_$$',
	'topic_favourite_del' => 'удалить из избранного_$$',
	'topic_favourite_del_ok' => 'Топик удален из избранного_$$',
	
	'block_stream_comment_all' => 'Весь эфир_$$',
	'comments_all' => 'Прямой эфир_$$',
	/**
	 * Меню топиков
	 */
	'topic_menu_add' => 'Новые_$$',
	'topic_menu_add_topic' => 'Топик_$$',
	'topic_menu_add_question' => 'Опрос_$$',
	'topic_menu_add_link' => 'Ссылка_$$',
	'topic_menu_saved' => 'Черновики_$$',
	'topic_menu_published' => 'Опубликованные_$$',
	/**
	 * Создание топика
	 */
	'topic_topic_create' => 'Создание топика_$$',
	'topic_topic_edit' => 'Редактирование топика_$$',
	'topic_create' => 'написать_$$',
	'topic_create_blog' => 'В какой блог публикуем?_$$',
	'topic_create_blog_personal' => 'мой персональный блог_$$',
	'topic_create_blog_error_unknown' => 'Пытаетесь запостить топик в неизвестный блог?_$$',
	'topic_create_blog_error_nojoin' => 'Вы не состоите в этом блоге!_$$',
	'topic_create_blog_error_noacl' => 'Вы еще недостаточно окрепли, чтобы постить в этот блог_$$',
	'topic_create_title' => 'Заголовок_$$',
	'topic_create_title_notice' => 'Заголовок должен быть наполнен смыслом, чтобы можно было понять, о чем будет топик._$$',
	'topic_create_title_error' => 'Название топика должно быть от 2 до 200 символов_$$',
	'topic_create_text' => 'Текст_$$',
	'topic_create_text_notice' => 'Доступны html-теги_$$',
	'topic_create_text_error' => 'Текст топика должен быть от 2 до 15000 символов_$$',
	'topic_create_text_error_unique' => 'Вы уже писали топик с таким содержанием_$$',
	'topic_create_tags' => 'Метки_$$',
	'topic_create_tags_notice' => 'Метки нужно разделять запятой. Например: клон хабры, блоги, рейтинг, google, сиськи, кирпич._$$',
	'topic_create_tags_error_bad' => 'Проверьте правильность меток_$$',
	'topic_create_tags_error' => 'Метки топика должны быть от 2 до 50 символов с общей длиной не более 500 символов_$$',
	'topic_create_forbid_comment' => 'запретить комментировать_$$',
	'topic_create_forbid_comment_notice' => 'Если отметить эту галку, то нельзя будет оставлять комментарии к топику_$$',
	'topic_create_publish_index' => 'принудительно вывести на главную_$$',
	'topic_create_publish_index_notice' => 'Если отметить эту галку, то топик сразу попадёт на главную страницу (опция доступна только администраторам)_$$',
	'topic_create_submit_publish' => 'опубликовать_$$',
	'topic_create_submit_save' => 'сохранить в черновиках_$$',
	'topic_create_submit_preview' => 'предпросмотр_$$',
	'topic_create_submit_notice' => 'Если нажать кнопку «Сохранить в черновиках», текст топика будет виден только Вам, а рядом с его заголовком будет отображаться замочек. Чтобы топик был виден всем, нажмите «Опубликовать»._$$',
	'topic_create_notice' => 'Не забывайте: тег <cut> сокращает длинные записи, скрывая их целиком или частично под ссылкой («читать дальше»). Скрытая часть не видна в блоге, но доступна в полной записи на странице топика._$$',
	'topic_create_error' => 'Возникли технические неполадки при добавлении топика, пожалуйста повторите позже._$$',
	
	'topic_edit' => 'Редактировать_$$',
	'topic_delete' => 'Удалить_$$',
	'topic_delete_confirm' => 'Вы действительно хотите удалить топик?_$$',
	/**
	 * Топик-ссылка
	 */
	'topic_link' => 'топик-ссылка_$$',
	'topic_link_title' => 'Ссылки_$$',
	'topic_link_title_edit' => 'Редактирование ссылки_$$',
	'topic_link_title_create' => 'Добавление ссылки_$$',
	'topic_link_create' => 'Создание топика-ссылки_$$',
	'topic_link_edit' => 'Редактирование топика-ссылки_$$',
	'topic_link_count_jump' => 'переходов по ссылке:_$$',
	'topic_link_create_url' => 'Ссылка_$$',
	'topic_link_create_url_notice' => 'Например, http://livestreet.ru/blog/dev_livestreet/113.html_$$',
	'topic_link_create_url_error' => 'Ссылка должна быть от 2 до 200 символов_$$',
	'topic_link_create_text' => 'Краткое описание (максимум 500 символов, HTML-теги запрещены)_$$',
	'topic_link_create_text_notice' => 'HTML-теги запрещены_$$',
	'topic_link_create_text_error' => 'Описание ссылки должно быть от 10 до 500 символов_$$',
	/**
	 * Топик-опрос
	 */
	'topic_question_title' => 'Опросы_$$',
	'topic_question_title_edit' => 'Редактирование опроса_$$',
	'topic_question_title_create' => 'Добавление опроса_$$',
	'topic_question_vote' => 'голосовать_$$',
	'topic_question_vote_ok' => 'Ваш голос учтен._$$',
	'topic_question_vote_already' => 'Ваш голос уже учтен!_$$',
	'topic_question_vote_result' => 'Проголосовало_$$',
	'topic_question_abstain' => 'воздержаться_$$',
	'topic_question_abstain_result' => 'Воздержалось_$$',
	'topic_question_create' => 'Создание топика-опроса_$$',
	'topic_question_edit' => 'Редактирование топика-опроса_$$',
	'topic_question_create_title' => 'Вопрос_$$',
	'topic_question_create_title_notice' => 'Вопрос должен быть наполнен смыслом, чтобы можно было понять, о чем будет опрос._$$',
	'topic_question_create_title_error' => 'Вопрос должен быть от 2 до 200 символов_$$',
	'topic_question_create_answers' => 'Варианты ответов_$$',	
	'topic_question_create_answers_error' => 'Ответ должен быть от 1 до 100 символов_$$',	
	'topic_question_create_answers_error_min' => 'Вариантов ответа должно быть как минимум два_$$',	
	'topic_question_create_answers_error_max' => 'Максимально возможное число вариантов ответа 20_$$',	
	'topic_question_create_text' => 'Краткое описание (максимум 500 символов, HTML-теги запрещены)_$$',
	'topic_question_create_text_notice' => 'HTML-теги запрещены_$$',
	'topic_question_create_text_error' => 'Описание опроса должно быть не более 500 символов_$$',
	/**
	 * Голосование за топик
	 */
	'topic_vote_up' => 'нравится_$$',
	'topic_vote_down' => 'не нравится_$$',	
	'topic_vote_error_already' => 'Вы уже голосовали за этот топик!_$$',
	'topic_vote_error_self' => 'Вы не можете голосовать за свой топик!_$$',
	'topic_vote_error_guest' => 'для голосования необходимо авторизоваться_$$',
	'topic_vote_error_time' => 'Срок голосования за топик истёк!_$$',
	'topic_vote_error_acl' => 'У вас не хватает рейтинга и силы для голосования!_$$',
	'topic_vote_no' => 'пока никто не голосовал_$$',
	'topic_vote_ok' => 'Ваш голос учтен_$$',
	'topic_vote_ok_abstain' => 'Вы воздержались для просмотра рейтинга топика_$$',
	'topic_vote_count' => 'всего проголосовало_$$',
	
	/**
	 * Комментарии
	 */
	'comment_title' => 'Комментарии_$$',
	'comment_collapse' => 'свернуть_$$',
	'comment_expand' => 'развернуть_$$',
	'comment_goto_parent' => 'Ответ на_$$',
	'comment_goto_child' => 'Обратно к ответу_$$',
	'comment_bad_open' => 'раскрыть комментарий_$$',
	'comment_answer' => 'Ответить_$$',
	'comment_delete' => 'Удалить_$$',
	'comment_delete_ok' => 'Комментарий удален_$$',
	'comment_repair' => 'Восстановить_$$',
	'comment_repair_ok' => 'Комментарий восстановлен_$$',
	'comment_was_delete' => 'комментарий был удален_$$',
	'comment_add' => 'добавить_$$',
	'comment_preview' => 'предпросмотр_$$',
	'comment_unregistered' => 'Только зарегистрированные и авторизованные пользователи могут оставлять комментарии._$$',
	/**
	 * Голосование за комментарий
	 */
	'comment_vote_error' => 'Попробуйте проголосовать позже_$$',
	'comment_vote_error_value' => 'Голосовать можно только +1 либо -1!_$$',
	'comment_vote_error_acl' => 'У вас не хватает рейтинга и силы для голосования!_$$',
	'comment_vote_error_already' => 'Вы уже голосовали за этот комментарий!_$$',
	'comment_vote_error_time' => 'Срок голосования за комментарий истёк!_$$',
	'comment_vote_error_self' => 'Вы не можете голосовать за свой комментарий!_$$',
	'comment_vote_error_noexists' => 'Вы голосуете за несуществующий комментарий!_$$',
	'comment_vote_ok' => 'Ваш голос учтен_$$',
	
	
	/**
	 * Люди
	 */
	'people' => 'Люди_$$',
	
	
	/**
	 * Пользователь
	 */
	'user' => 'Пользователь_$$',
	'user_list' => 'Пользователи_$$',
	'user_list_new' => 'Новые пользователи_$$',
	'user_list_online_last' => 'Недавно были на сайте_$$',
	'user_good' => 'Позитивные_$$',
	'user_bad' => 'Негативные_$$',
	'user_privat_messages' => 'Личные сообщения_$$',
	'user_privat_messages_new' => 'У вас есть новые сообщения_$$',
	'user_settings' => 'Настройки_$$',
	'user_settings_profile' => 'профиля_$$',
	'user_settings_tuning' => 'сайта_$$',
	'user_login' => 'Логин или эл. почта_$$',
	'user_login_submit' => 'Войти_$$',
	'user_login_remember' => 'Запомнить меня_$$',
	'user_login_bad' => 'Что-то не так! Вероятно, неправильно указан логин (e-mail), или пароль._$$',
	'user_password' => 'Пароль_$$',
	'user_password_reminder' => 'Напомнить пароль_$$',
	'user_exit_notice' => 'Обязательно приходите еще._$$',
	'user_authorization' => 'Авторизация_$$',
	'user_registration' => 'Регистрация_$$',
	'user_write_prvmsg' => 'Написать письмо_$$',
	'user_friend_add' => 'Добавить в друзья_$$',
	'user_friend_add_ok' => 'У вас появился новый друг_$$',
	'user_friend_add_self' => 'Ваш друг - это вы!_$$',
	'user_friend_del' => 'Удалить из друзей_$$',
	'user_friend_del_ok' => 'У вас больше нет этого друга_$$',
	'user_friend_del_no' => 'Друг не найден!_$$',
	'user_rating' => 'Рейтинг_$$',
	'user_skill' => 'Сила_$$',
	'user_date_last' => 'Последний визит_$$',
	'user_date_registration' => 'Дата регистрации_$$',
	'user_empty' => 'нет таких_$$',
	'user_stats' => 'Статистика_$$',
	'user_stats_all' => 'Всего пользователей_$$',
	'user_stats_active' => 'Активные_$$',
	'user_stats_noactive' => 'Заблудившиеся_$$',
	'user_stats_sex_man' => 'Мужчины_$$',
	'user_stats_sex_woman' => 'Женщины_$$',
	'user_stats_sex_other' => 'Пол не указан_$$',
	
	/**
	 * Меню профиля пользователя
	 */
	'people_menu_users' => 'Пользователи_$$',
	'people_menu_users_all' => 'Все_$$',
	'people_menu_users_online' => 'Онлайн_$$',
	'people_menu_users_new' => 'Новые_$$',
	
	/**
	 * Регистрация
	 */
	'registration_invite' => 'Регистрация по приглашению_$$',
	'registration_invite_code' => 'Код приглашения_$$',
	'registration_invite_code_error' => 'Неверный код приглашения_$$',
	'registration_invite_check' => 'Проверить код_$$',
	'registration_activate_ok' => 'Поздравляем! Ваш аккаунт успешно активирован._$$',
	'registration_activate_error_code' => 'Неверный код активации!_$$',
	'registration_activate_error_reactivate' => 'Ваш аккаунт уже активирован_$$',
	'registration_confirm_header' => 'Активация аккаунта_$$',
	'registration_confirm_text' => 'Вы почти зарегистрировались, осталось только активировать аккаунт. Инструкции по активации отправлены по электронной почте на адрес, указанный при регистрации._$$',
	'registration' => 'Регистрация_$$',
	'registration_is_authorization' => 'Вы уже зарегистрированы у нас и даже авторизованы!_$$',
	'registration_login' => 'Имя пользователя_$$',
	'registration_login_error' => 'Неверный логин, допустим от 3 до 30 символов_$$',
	'registration_login_error_used' => 'Этот логин уже занят_$$',
	'registration_login_notice' => 'Может состоять только из букв (A-Z a-z), цифр (0-9). Знак подчеркивания (_) лучше не использовать. Длина имени не может быть меньше 3 и больше 20 символов._$$',
	'registration_mail' => 'Электропочта_$$',
	'registration_mail_error' => 'Неверный формат e-mail_$$',
	'registration_mail_error_used' => 'Этот e-mail уже используется_$$',
	'registration_mail_notice' => 'Для проверки регистрации и в целях безопасности нам нужен адрес вашей электропочты._$$',
	'registration_password' => 'Пароль_$$',
	'registration_password_error' => 'Неверный пароль, допустим от 5 символов_$$',
	'registration_password_error_different' => 'Пароли не совпадают_$$',
	'registration_password_notice' => 'Должен содержать не менее 5 символов и не может совпадать с логином. Не используйте простые пароли, будьте разумны._$$',
	'registration_password_retry' => 'Повторите пароль_$$',
	'registration_captcha' => 'Введите цифры и буквы_$$',
	'registration_captcha_error' => 'Неверный код_$$',
	'registration_submit' => 'Зарегистрироваться_$$',
	'registration_ok' => 'Поздравляем! Регистрация прошла успешно_$$',
			
	/**
	 * Голосование за пользователя
	 */
	'user_vote_up' => 'нравится_$$',
	'user_vote_down' => 'не нравится_$$',	
	'user_vote_error_already' => 'Вы уже голосовали за этого пользователя!_$$',
	'user_vote_error_self' => 'Вы не можете голосовать за себя!_$$',
	'user_vote_error_guest' => 'для голосования необходимо авторизоваться_$$',	
	'user_vote_error_acl' => 'У вас не хватает рейтинга и силы для голосования!_$$',	
	'user_vote_ok' => 'Ваш голос учтен_$$',	
	'user_vote_count' => 'голосов_$$',
	
	/**
	 * Меню профиля пользователя
	 */
	'user_menu_profile' => 'Профиль_$$',
	'user_menu_profile_whois' => 'Whois_$$',
	'user_menu_profile_favourites' => 'Избранное_$$',
	'user_menu_profile_tags' => 'Метки_$$',
	'user_menu_publication' => 'Публикации_$$',
	'user_menu_publication_blog' => 'Блог_$$',
	'user_menu_publication_comment' => 'Комментарии_$$',
	'user_menu_publication_comment_rss' => 'RSS лента_$$',
	
	/**
	 * Профиль
	 */
	'profile_privat' => 'Личное_$$',
	'profile_sex' => 'Пол_$$',
	'profile_sex_man' => 'мужской_$$',
	'profile_sex_woman' => 'женский_$$',
	'profile_birthday' => 'Дата рождения_$$',
	'profile_place' => 'Местоположение_$$',
	'profile_about' => 'О себе_$$',
	'profile_site' => 'Сайт_$$',
	'profile_activity' => 'Активность_$$',
	'profile_friends' => 'Друзья_$$',
	'profile_friends_self' => 'В друзьях у_$$',
	'profile_invite_from' => 'Пригласил_$$',
	'profile_invite_to' => 'Приглашенные_$$',
	'profile_blogs_self' => 'Создал_$$',
	'profile_blogs_join' => 'Состоит в_$$',
	'profile_blogs_moderation' => 'Модерирует_$$',
	'profile_blogs_administration' => 'Администрирует_$$',
	'profile_date_registration' => 'Зарегистрирован_$$',
	'profile_date_last' => 'Последний визит_$$',
	'profile_social_contacts' => 'Контакты и социальные сервисы_$$',
	
	
	
	/**
	 * Настройки
	 */
	'settings_profile_edit' => 'Изменение профиля_$$',
	'settings_profile_name' => 'Имя_$$',
	'settings_profile_name_notice' => 'Длина имени не может быть меньше 2 и больше 20 символов._$$',
	'settings_profile_mail' => 'E-mail_$$',
	'settings_profile_mail_error' => 'Неверный формат e-mail_$$',
	'settings_profile_mail_error_used' => 'Этот емайл уже занять_$$',
	'settings_profile_mail_notice' => 'Ваш реальный почтовый адрес, на него будут приходить уведомления_$$',
	'settings_profile_sex' => 'Пол_$$',
	'settings_profile_sex_man' => 'мужской_$$',
	'settings_profile_sex_woman' => 'женский_$$',
	'settings_profile_sex_other' => 'не скажу_$$',
	'settings_profile_birthday' => 'Дата рождения_$$',
	'settings_profile_country' => 'Страна_$$',
	'settings_profile_city' => 'Город_$$',
	'settings_profile_icq' => 'ICQ_$$',
	'settings_profile_site' => 'Сайт_$$',
	'settings_profile_site_url' => 'URL сайта_$$',
	'settings_profile_site_name' => 'название сайта_$$',
	'settings_profile_about' => 'О себе_$$',
	'settings_profile_password_current' => 'Текущий пароль_$$',
	'settings_profile_password_current_error' => 'Неверный текущий пароль_$$',
	'settings_profile_password_new' => 'Новый пароль_$$',
	'settings_profile_password_new_error' => 'Неверный пароль, допустим от 5 символов_$$',
	'settings_profile_password_confirm' => 'Еще раз новый пароль_$$',
	'settings_profile_password_confirm_error' => 'Пароли не совпадают_$$',
	'settings_profile_avatar' => 'Аватар_$$',
	'settings_profile_avatar_error' => 'Не удалось загрузить аватар_$$',
	'settings_profile_avatar_delete' => 'удалить_$$',
	'settings_profile_foto' => 'Фото_$$',
	'settings_profile_foto_error' => 'Фото_$$',
	'settings_profile_foto_delete' => 'удалить_$$',
	'settings_profile_submit' => 'сохранить профиль_$$',
	'settings_profile_submit_ok' => 'Профиль успешно сохранён_$$',
	'settings_invite' => 'Управление приглашениями_$$',
	'settings_invite_available' => 'Доступно_$$',
	'settings_invite_available_no' => 'У вас пока нет доступных инвайтов_$$',
	'settings_invite_used' => 'Использовано_$$',
	'settings_invite_mail' => 'Пригласить по e-mail адресу_$$',
	'settings_invite_mail_error' => 'Неверный формат e-mail_$$',
	'settings_invite_mail_notice' => 'На этот e-mail будет высланно приглашение для регистрации_$$',
	'settings_invite_many' => 'много_$$',
	'settings_invite_submit' => 'отправить приглашение_$$',
	'settings_invite_submit_ok' => 'Приглашение отправлено_$$',
	'settings_tuning' => 'Настройки сайта_$$',
	'settings_tuning_notice' => 'Уведомления на e-mail_$$',
	'settings_tuning_notice_new_topic' => 'при новом топике в блоге_$$',
	'settings_tuning_notice_new_comment' => 'при новом комментарии в топике_$$',
	'settings_tuning_notice_new_talk' => 'при новом личном сообщении_$$',
	'settings_tuning_notice_reply_comment' => 'при ответе на комментарий_$$',
	'settings_tuning_notice_new_friend' => 'при добавлении вас в друзья_$$',
	'settings_tuning_submit' => 'сохранить настройки_$$',
	'settings_tuning_submit_ok' => 'Настройки успешно сохранены_$$',
	
	
	/**
	 * Меню настроек
	 */
	'settings_menu' => 'Настройки_$$',
	'settings_menu_profile' => 'Профиль_$$',
	'settings_menu_tuning' => 'Тюнинг_$$',
	'settings_menu_invite' => 'Инвайты_$$',
	
	/**
	 * Восстановление пароля
	 */
	'password_reminder' => 'Восстановление пароля_$$',
	'password_reminder_email' => 'Ваш e-mail_$$',
	'password_reminder_submit' => 'Получить ссылку на изменение пароля_$$',
	'password_reminder_send_password' => 'Новый пароль отправлен на ваш адрес электронной почты._$$',
	'password_reminder_send_link' => 'Ссылка для восстановления пароля отправлена на ваш адрес электронной почты._$$',
	'password_reminder_bad_code' => 'Неверный код на восстановление пароля._$$',
	'password_reminder_bad_email' => 'Пользователь с таким e-mail не найден_$$',
	
	/**
	 * Панель
	 */
	'panel_b' => 'жирный_$$',
	'panel_i' => 'курсив_$$',
	'panel_u' => 'подчеркнутый_$$',
	'panel_s' => 'зачеркнутый_$$',
	'panel_url' => 'вставить ссылку_$$',
	'panel_url_promt' => 'Введите ссылку_$$',
	'panel_code' => 'код_$$',
	'panel_video' => 'видео_$$',
	'panel_image' => 'изображение_$$',
	'panel_cut' => 'кат_$$',
	'panel_quote' => 'цитировать_$$',
	
	/**
	 * Блоки
	 */
	'block_city_tags' => 'Города_$$',
	'block_country_tags' => 'Страны_$$',
	'block_blog_info' => 'Описание блога_$$',
	'block_blog_info_note' => 'Заметка_$$',
	'block_blog_info_note_text' => '<strong>Тег &lt;cut&gt; сокращает длинные записи</strong>, скрывая их целиком или частично под ссылкой («читать дальше»). Скрытая часть не видна в блоге, но доступна в полной записи на странице топика._$$',
	'block_blogs' => 'Блоги_$$',
	'block_blogs_top' => 'Топ_$$',
	'block_blogs_join' => 'Подключенные_$$',
	'block_blogs_join_error' => 'Вы не состоите в коллективных блогах_$$',
	'block_blogs_self' => 'Мои_$$',
	'block_blogs_self_error' => 'У вас нет своих коллективных блогов_$$',
	'block_blogs_all' => 'Все блоги_$$',
	'block_stream' => 'Прямой эфир_$$',
	'block_stream_topics' => 'Публикации_$$',
	'block_stream_topics_no' => 'Нет топиков._$$',
	'block_stream_comments' => 'Комментарии_$$',
	'block_stream_comments_no' => 'Нет комментариев._$$',
	'block_stream_comments_all' => 'Весь эфир_$$',
	
	'site_history_back' => 'Вернуться назад_$$',
	'site_go_main' => 'перейти на главную_$$',
	
	/**
	 * Поиск
	 */
	'search' => 'Поиск_$$',
	'search_submit' => 'Найти_$$',
	'search_results' => 'Результаты поиска_$$',
	'search_results_empty' => 'Удивительно, но поиск не дал результатов_$$',
	'search_results_count_topics' => 'топиков_$$',
	'search_results_count_comments' => 'комментариев_$$',
	
	/**
	 * Почта
	 */
	'talk_menu_inbox' => 'Почтовый ящик_$$',
	'talk_menu_inbox_list' => 'Переписка_$$',
	'talk_menu_inbox_create' => 'Новое письмо_$$',
	'talk_inbox' => 'Почтовый ящик_$$',
	'talk_inbox_target' => 'Адресаты_$$',
	'talk_inbox_title' => 'Тема_$$',
	'talk_inbox_date' => 'Тема_$$',
	'talk_inbox_delete' => 'Удалить переписку_$$',
	'talk_inbox_delete_confirm' => 'Действительно удалить переписку?_$$',
	'talk_comments' => 'Переписка_$$',
	'talk_comment_add_text_error' => 'Текст комментария должен быть от 2 до 3000 символов_$$',
	'talk_create' => 'Новое письмо_$$',
	'talk_create_users' => 'Кому_$$',
	'talk_create_users_error' => 'Необходимо указать, кому вы хотите отправить сообщение_$$',
	'talk_create_users_error_not_found' => 'У нас нет пользователя с логином_$$',
	'talk_create_title' => 'Заголовок_$$',
	'talk_create_title_error' => 'Заголовок сообщения должен быть от 2 до 200 символов_$$',
	'talk_create_text' => 'Сообщение_$$',
	'talk_create_text_error' => 'Текст сообщения должен быть от 2 до 3000 символов_$$',
	'talk_create_submit' => 'Отправить_$$',
	
	/**
	 * Рейтинг TOP
	 */
	'top' => 'Рейтинг_$$',
	'top_blogs' => 'TOP Блогов_$$',
	'top_topics' => 'TOP топиков_$$',
	'top_comments' => 'TOP комментариев_$$',
	
	/**
	 * Поиск по тегам
	 */
	'tag_title' => 'Поиск по тегам_$$',
	
	/**
	 * Постраничность
	 */
	'paging_next' => 'следующая_$$',
	'paging_previos' => 'предыдущая_$$',
	'paging_last' => 'последняя_$$',
	'paging_first' => 'первая_$$',
	'paging' => 'Страницы_$$',
	
	/**
	 * Загрузка изображений
	 */
	'uploadimg' => 'Вставка изображения_$$',
	'uploadimg_file' => 'Файл_$$',
	'uploadimg_file_error' => 'Невозможно обработать файл_$$',
	'uploadimg_url' => 'Ссылка на изображение_$$',
	'uploadimg_url_error_type' => 'Файл не является изображением_$$',
	'uploadimg_url_error_read' => 'Невозможно прочитать внешний файл_$$',
	'uploadimg_url_error_size' => 'Размер файла превышает максимальный в 500кБ_$$',
	'uploadimg_url_error' => 'Невозможно обработать внешний файл_$$',
	'uploadimg_align' => 'Выравнивание_$$',
	'uploadimg_align_no' => 'нет_$$',
	'uploadimg_align_left' => 'слева_$$',
	'uploadimg_align_right' => 'справа_$$',
	'uploadimg_submit' => 'Загрузить_$$',
	'uploadimg_cancel' => 'Отмена_$$',
	'uploadimg_title' => 'Описание_$$',
	
	/**
	 * Уведомления
	 */
	'notify_subject_comment_new' => 'К вашему топику оставили новый комментарий_$$',
	'notify_subject_comment_reply' => 'Вам ответили на ваш комментарий_$$',
	'notify_subject_topic_new' => 'Новый топик в блоге_$$',
	'notify_subject_registration_activate' => 'Регистрация_$$',
	'notify_subject_registration' => 'Регистрация_$$',
	'notify_subject_invite' => 'Приглашение на регистрацию_$$',
	'notify_subject_talk_new' => 'У вас новое письмо_$$',
	'notify_subject_talk_comment_new' => 'У вас новый комментарий к письму_$$',
	'notify_subject_user_friend_new' => 'Вас добавили в друзья_$$',
	'notify_subject_reminder_code' => 'Восстановление пароля_$$',
	'notify_subject_reminder_password' => 'Новый пароль_$$',
	
	
	'system_error_event_args' => 'Некорректное число аргументов при добавлении евента_$$',
	'system_error_event_method' => 'Добавляемый метод евента не найден_$$',
	'system_error_404' => 'К сожалению, такой страницы не существует. Вероятно, она была удалена с сервера, либо ее здесь никогда не было._$$',
	'system_error_module' => 'Не найден класс модуля_$$',
	'system_error_cache_type' => 'Неверный тип кеширования_$$',
	'system_error_template' => 'Не найден шаблон_$$',
	'system_error_template_block' => 'Не найден шаблон подключаемого блока_$$',
	
	
	'error' => 'Ошибка_$$',
	'attention' => 'Внимание_$$',
	'system_error' => 'Системная ошибка, повторите позже_$$',
	'exit' => 'выход_$$',
	'need_authorization' => 'Необходимо авторизоваться!_$$',
	'or' => 'или_$$',
	'window_close' => 'закрыть_$$',
	'not_access' => 'Нет доступа_$$',	
	'login' => 'Вход на сайт_$$',	
	'date_day' => 'день_$$',
	'date_month' => 'месяц_$$',
	'date_month_1' => 'января_$$',
	'date_month_2' => 'февраля_$$',
	'date_month_3' => 'марта_$$',
	'date_month_4' => 'апреля_$$',
	'date_month_5' => 'мая_$$',
	'date_month_6' => 'июня_$$',
	'date_month_7' => 'июля_$$',
	'date_month_8' => 'августа_$$',
	'date_month_9' => 'сентября_$$',
	'date_month_10' => 'октября_$$',
	'date_month_11' => 'ноября_$$',
	'date_month_12' => 'декабря_$$',	
	'date_year' => 'год_$$',
	
);

?>