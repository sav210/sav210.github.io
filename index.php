
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/main.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="shortcut icon" href="img/logo.png">
<meta charset="utf-8">
<title>Crash Protect</title>
<meta name="description" content="Crash Protect — бот для защиты сервера от краша, спама и рейдов.">
<meta property="og:title" content="Crash Protect - надёжный защитник серверов Discord">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.crashprotect.ml/">
<meta property="og:image" content="img/crash_protect.png">
<meta name="theme-color" content="#0070FA">
<script src='js/counter.js'></script>
<script src='js/fade.js'></script>
<script src='js/auth.js'></script>
<script src='js/cookie.js'></script>
<script>
    function invite()
    {var win = window.open('https://discord.com/api/oauth2/authorize?client_id=752367350657056851&permissions=268823806&scope=bot%20applications.commands', '_blank'); win.focus();}
    function support()
    {var win = window.open('https://discord.gg/2dWdZCj', '_blank'); win.focus();}
    function docs()
    {var win = window.open('https://windows2003server2003.gitbook.io/crash-protect', '_blank'); win.focus();}
    function status()
    {var win = window.open('https://crashprotect.statuspage.io', '_blank'); win.focus();}
    function open_auth()
    {window.location.href = "https://discord.com/api/oauth2/authorize?client_id=752367350657056851&redirect_uri=http%3A%2F%2Fwww.crashprotect.ml%2Fauth&response_type=code&scope=identify%20email%20guilds";}
</script>
</head>
<body> <!--onload="fade('animated', 30, 1000); fade('servers', 30, 200); fade('invite_button', 30, 500);"-->
<!--- Глав. SPAN --->
<div class='menu'>
<h1 class='menu_child' style="color: #0070FA;"><a href='/' class='translate'>Crash Protect</a></h1>
<span class='menu_child menu_element translate' onclick="invite();">Добавить в Discord</span>
<span class='menu_child menu_element translate' onclick="support();">Поддержка</span>
<span class='menu_child menu_element translate' onclick="docs();">Документация</span>
<span class='menu_child menu_element translate' onclick="status();">Статус</span>
<span class='menu_child menu_element translate' onclick="open_auth();" style="color: #0070fa; font-weight: bold;" id="auth_button">Войти через Discord</span>
</div>
<center>
<span id='animated' style="padding-top: 100px; font-size: 50px;">Защита Discord сервера от <span id='ticker' style='color: #0070FA'></span></span>
<h1></h1>
<div class='button translate' onclick="invite();">Добавить в Discord</div>

<!--- Описание --->
<p style="padding-top: 50px; font-size: 35px;">Серверов: <span style="color: #0070fa;" id='servers'></span></p>
<img src='img/crash_protect.png' id='icon'>
<br>
<div class='interval'></div>
<p style='font-size: 40px;'>Возможности бота</p>
</center>
<br>
<p class='advantage_title'>🛡️ Защита от краша</p>
<p class='advantage_description'>Бот хорошо защищает от краша (удаления каналов, ролей и других ценных ресурсов сервера).</p>
<p class='advantage_description'>Он накажет нарушителя и восстановит удалённое.</p>
<br>
<p class='advantage_title'>✋ Защита от рейдов</p>
<p class='advantage_description'>Бот может предотвратить частые заходы на сервер (это может использоваться при рейде селфботами).</p>
<p class='advantage_description'>Рейд — мощная спам-атака, в ходе которой очень быстро отправляются сообщения.</p>
<br>
<p class='advantage_title'>👮‍♂️ Защита от спама</p>
<p class='advantage_description'>Если кто-то отправляет одинаковые сообщения, да ещё и с ссылками-приглашениями — он спамит.</p>
<p class='advantage_description'>Crash Protect накажет спамера — заглушит, выгонит или забанит.</p>
<br>
<p class='advantage_title'>🚩 Защита ролей</p>
<p class='advantage_description'>Данная функция позволяет защитить общедоступные роли (роли, которые имеют более 75% участников на сервере) от изменения прав.</p>
<br>
<p class='advantage_title'>💾 Резервные копии</p>
<p class='advantage_description'>Они позволяют сохранить сервер (его название, каналы, категории и роли с сохранением позиции, прав и настроек), чтобы в случае чрезвычайной ситуации можно было его загрузить.</p>
<p class='advantage_description'>Также вы можете настроить автоматическое сохранение, чтобы после глобального обновления сервера всё было записано.</p>
<br>
<center><p style='font-size: 30px;'>И многое другое!</p></center>
<iframe class='translate discord' style='float: right;' src="https://discord.com/widget?id=752393789577887835&theme=dark" width="300" height="450" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
<div class='footer'>
<span class='footer_child' style='font-size: 20px; float: bottom;'>© 2021, Cymon. Все права защищены.</span>
<span class='footer_child' style='font-size: 20px; float: bottom; cursor: pointer;' onclick='location.href = "http://www.crashprotect.ml/vote";'>Оценить бота</span>
<span class='footer_child' style='font-size: 20px; float: bottom; cursor: pointer;' onclick='location.href = "http://www.crashprotect.ml/stats";'>Статистика</span>
</div>
</body>
<div id="cookie_banner">
  <p class='ib'>Данный сайт использует файлы cookie. Нажимая на кнопку, вы соглашаетесь с этим.</p>
  <div id="cookie_button" onclick="accept_cookie()">СОГЛАСЕН</div>
</div>
<script>
function type(element, typing=true, speed=50, word=0)
{
	function words()
  {
  switch(word)
  {
  	case 0: return 'краша';
    case 1: return 'спама';
    case 2: return 'рейдов';
    case 3: return 'атак';
  }
  }
  var obj = document.getElementById(element);
  var content = words();
  var length = content.length;
  var current = 0;
  
  if(typing)
  {
	obj.innerHTML = "|";
  }
  else
  {
  current = length;
  }
  var func = setInterval(() => {
		if(typing)
    {
    	if(current < length)
      {
      	current++;
      }
      else{
      	clearInterval(func);
        setTimeout(() => {
        	type(element, false, speed, curword);
        }, 5000);
      }
    }
    else
    {
    	if(current > 0)
      {
      	current--;
      }
      else{
      	clearInterval(func);
      }
    }
    obj.innerHTML = content.substring(0, current) + "|";
  }, speed);
}
</script>
<script>
	var curword = 0;
	type('ticker', true, 50, curword);
	setInterval(() => {
		if (curword < 3)
		{
			curword++;
		}
		else{
			curword = 0;
		}
		type('ticker', true, 50, curword);
	}, 7000);
</script>
<script>
  var cook = readCookie("accepted");
  var authcode = readCookie("authcode");
  if(cook == null)
  {
      var banner = document.getElementById("cookie_banner");
      banner.style.visibility = "visible";
      setTimeout(function(){
      banner.style.opacity = "1";
      },1000);
  }
  function accept_cookie()
  {
      var banner = document.getElementById("cookie_banner");
      document.cookie = "accepted=1; path=/"
      banner.style.opacity = "0";
      setTimeout(function(){
          banner.style.visibility = "hidden";
      },1000);
  }
  async function main(){
  if(authcode != null)
  {
      var invite = document.getElementById("auth_button");
      var ac = await auth(authcode);
      var username = ac['username'];
      var tag = ac['discriminator'];
      if(username != undefined && username != undefined)
      {
          invite.innerHTML = `<b>${username}#${tag}</b>`;
          invite.onclick = 'logout();';
          /*document.getElementById("avatar").src = `https://cdn.discordapp.com/avatars/${ac['id']}/${ac['avatar']}.png?size=32`
          document.getElementById("avatar").style.display = "inline-block";*/
      }
      else
      {
          document.cookie = "authcode=null;expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/"
      }
  }}
  function logout()
  {
    document.cookie = "authcode=null;expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/"
    window.location.reload();
  }
main();
</script>
</html>

<?php
$guilds = intval(file_get_contents('https://vegabot.xyz/crashprotect/data/servers.data'));
echo "<script>count('servers', 0, $guilds, 1000, '', '', 3)</script>";
?>