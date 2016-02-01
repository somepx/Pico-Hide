PicoMenuHiding, to hide an page from the pico menu
================================================

Pico v.1.0 - ready!

A simple plugin to add the possibility to hide pages from navigation in Pico CMS.
The pages will still be accessible by browsing their URL directly.

Install
-------
1. Place the 'PicoMenuHiding.php' file in your Pico install 'plugins' folder.

2. Place the following in your `config/config.php` file to activate it
```
$config[ 'PicoMenuHiding.enabled' ] = TRUE;
```

3. Add 'Hiding: 1' or 'Hiding: 0' or leave tag empty in your page meta data. Example:
```
/* 
Title: Example page
Author: John Doe
Date: 2016/2/1
Hiding: 1 
*/
```

5. Thats it, have fun    :)

---
hope you like this. if something goes wrong, ask me.

Forked from: https://github.com/ollierik/Pico-Placing
