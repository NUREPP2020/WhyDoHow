import telebot
import config
import pymysql
import pymysql.cursors

from telebot import types

bot = telebot.TeleBot(config.TOKEN)

@bot.message_handler(commands=['start'])
def welcome(message):
	sti = open('img/welcome.tgs','rb')
	bot.send_sticker(message.chat.id, sti)

	markup = types.InlineKeyboardMarkup(row_width=2)

	# keyboard сюда категории из таблички
	connection = pymysql.connect(
		#mysqli_connect("sql101.epizy.com", "epiz_25115942", "7ldQ3ZxVVk", "epiz_25115942_whydohow");
		#host="sql101.epizy.com",
		#user="epiz_25115942",
		#password="7ldQ3ZxVVk",
		#db="epiz_25115942_whydohow"
		host='localhost',
		user='root',
		password='root',
		db='whydohow'
	)
	with connection.cursor() as cursor:
		query = "SELECT `name` FROM `category`"
		cursor.execute(query)
		for row in cursor:
			strin = str(row)[2:len(row) - 4]
			item = types.InlineKeyboardButton(strin,callback_data=strin)
			markup.add(item)
	bot.send_message(message.chat.id, 'Выберите категорию', reply_markup=markup)

@bot.callback_query_handler(func=lambda call: True)
def callback_inline(call):
	try:
		if call.message:
			# 	with connection.cursor() as cursor:
			# 		query = "SELECT `id_post` FROM `post` WHERE `id_post` = '" + call.data + "' ORDER BY popularity LIMIT 10"
			# 		cursor.execute(query)
			#       i = 1
			# 		for row in cursor:
			#           if i < 11:
			#
			# 			     bot.send_message(call.message.chat.id, i+") " + "http://...../post.php?id=" + int(row)
			#
			bot.edit_message_text(chat_id=call.message.chat.id, message_id=call.message.message_id, text="Выберите категорию",reply_markup=None)
			bot.send_message(call.message.chat.id, 'Отличный выбор! ' + call.data)

	except Exception as e:
		print(repr(e))

#Run
bot.polling(none_stop=True)