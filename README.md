# cotcp
"CotCP" - Theme Cotonti Control Panel

# Cotonti Siena Admin Theme - CotCP

A minimalist admin panel theme for CMF Cotonti Siena v.0.9.26, built with Bootstrap 5.3.6. Supports both "dark" and "light" modes for a clean and modern user experience.

## Installation

1. Download or clone the `cotcp` folder to the `/themes/admin/` directory of your Cotonti installation.
2. **Important**: When uploading files via FTP, ensure there are no transfer errors. Re-upload any missing files if necessary.
3. Open the `/datas/config.php` file and locate the line (approximately line 55):
   ```php
   $cfg['admintheme'] = '';
   ```
   Replace it with:
   ```php
   $cfg['admintheme'] = 'cotcp';
   ```
4. Save the file, clear the cache, and the installation is complete.

## Bug Reports and Support

For bug reports, support, or discussions related to the CotCP admin theme, please use the [Forum Section](https://abuyfile.com/forums/cotonti/original/skins/cotcp)



# Тема админ-панели Cotonti Siena - CotCP

Минималистичная тема для панели управления CMF Cotonti Siena v.0.9.26, созданная на основе Bootstrap 5.3.6. Поддерживает "ночной" и "дневной" режимы для удобного и современного интерфейса.

## Установка

1. Скачайте или клонируйте папку `cotcp` в директорию `/themes/admin/` вашей установки Cotonti.
2. **Важно**: При загрузке файлов по FTP убедитесь, что нет ошибок передачи. Если какие-либо файлы пропущены, загрузите их повторно.
3. Откройте файл `/datas/config.php` и найдите строку (примерно 55-я строка):
   ```php
   $cfg['admintheme'] = '';
   ```
   Замените её на:
   ```php
   $cfg['admintheme'] = 'cotcp';
   ```
4. Сохраните файл, очистите кеш, и установка завершена.

## Отчёты об ошибках и поддержка

Для сообщений об ошибках, поддержки или обсуждения шаблона CotCP используйте раздел [Форума](https://abuyfile.com/ru/forums/cotonti/original/skins/cotcp) 
