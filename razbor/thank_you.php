<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Спасибо за ваш выбор!</title>
  <style>
    body {
      background-color: #000; /* Темный фон */
      color: white; /* Белый цвет текста */
      font-family: Arial, sans-serif; /* Современный шрифт */
      text-align: center; /* Выравнивание текста по центру */
      margin: 0;
      padding-top: 20%; /* Отступ сверху */
    }
    h1 {
      font-size: 3em; /* Большой размер заголовка */
    }
    p {
      font-size: 1.7em; /* Размер параграфа */
    }
  </style>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(95910306, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/95910306" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7Q9N1E1HCW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7Q9N1E1HCW');
</script>


</head>
<body>


  <h1>Спасибо!</h1>
  <p>Сейчас вы будете перенаправлены...</p>

  <script>
    var params = new URLSearchParams(window.location.search);
    var service = params.get('service');
    var phone = params.get('phone');

    setTimeout(function() {
      if (service === 'WhatsApp') {
        window.location.href = `https://api.whatsapp.com/send?phone=77073666909`;
      } else if (service === 'Telegram') {
        window.location.href = `tg://resolve?domain=+77073666909`;
      }
    }, 3000);
  </script>
</body>
</html>
