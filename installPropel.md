# Установка #

Устанавливаем Denwer3\_Base\_2010-11-07\_a2.2.4\_p5.3.1\_m5.1.40\_pma3.2.3.exe
> Закрываем браузер.
> Путь: D:\WebServers
> Имя виртуального диска: U.
  1. 

> Запускаем Денвер. Возможно потребуется отключить перед этим Skype, Microsoft Reporting тра-та-та.

Откючаем Денвер.
Теперь ставим Denwer3\_PHP5\_2010-11-07\_php5.3.1.exe

Установка PEAR
0) остановить Denwer
1) открыть файл – диск:\denwer\usr\local\php5\go-pear.bat
2) заменить полностью содержимое файла go-pear.bat на:
@ECHO OFF
set PHP\_BIN=php.exe
%PHP\_BIN% -d output\_buffering=0 -d phar.require\_hash=0 PEAR\go-pear.phar
pause
3) запустить файл go-pear.bat
4) После выбирать опции, как указано ниже:
(system|local) [system](system.md) : local
Please confirm local copy by typing 'yes' : yes
1-12, 'all' or Enter to continue: Enter
5) после окончания установки, запускаем cmd в директории диск:\denwer
\usr\local\php5\
pear upgrade PEAR ?????????это не нужно вроде
Устанавливаем PROPEL
Находясь в той же директории (диск:\denwer\usr\local\php5\)
вводим в командной строке:
pear channel-discover pear.propelorm.org
pear channel-discover pear.phing.info
pear install propel/propel\_generator
pear install propel/propel\_runtime

---

Установка отладчика для NetBeans
Добавить в php.ini

zend\_extension=U:/usr/local/php5/ext/php\_xdebug-2.1.2-5.3-vc6.dll
xdebug.remote\_enable=on
xdebug.remote\_handler=dbgp
xdebug.remote\_host=localhost
xdebug.remote\_port=9000

и положить по пути zend\_extension=U:/usr/local/php5/ext/php\_xdebug-2.1.2-5.3-vc6.dll соответсвующий файл.

Слить веб-сайт в папку home. (home/cyberstore.ru/)

Запуск Propel.

Открыть консоль в папке с файлами schema.xml,build.properties,...
Запустить propel-gen
В файле pging.bat поменять путь к php.exe


