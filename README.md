### CHECKEAR HASH MD5

Check MD5 Creado por MainIndex.
Escrito en PHP, JavaScript, CSS y cURL.

Check MD5 viene en el paquete de herramientas VIP de CloudChkr.

### Código Obligatorios

```
**Index.php**
<script type="text/javascript" src="js/check.js"></script>
```

```
**Check.php**
require_once 'includes/class_curl.php';
```

### NO MODIFICAR

```
**Check.php**
$page = curl("https://www.md5.ovh/index.php?controler=Md5_decrypt&md5={$pwd}","",$cookie); //API
```

### Desarrollado por
* **Joaquin Centurion** - *MainIndex Fundador* - 
