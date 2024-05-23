let nodephp = require('node-php');
let express = require('express'); //обозначаем что express это фреймворк и называем его express
let app = express(); // наше приложение использует его
let serv = require('http').Server(app); //а сервер в свою очередь обслуживает приложение которое использует фреймворк
 

app.get('/',function(req, res) {  //обработчик маршрута к указанному url (приложение получает...)
	res.sendFile(__dirname + '');  //... а получает оно абсолютный путь к каталогу + сам каталог
});
app.use('',express.static(__dirname + '')); //приложение  использует постоянный неизменный адрес из папки клиент (файл индекс)

serv.listen(2000); //сервер запускается на 2000 порте
console.log("Server started."); //"сервер запущен"