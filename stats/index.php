
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="index.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="shortcut icon" href="img/logo.png">
<meta charset="utf-8">
<title>Crash Protect | Статистика бота</title>
</head>
<body>
<script src='js/fade.js'></script>
<script src='js/counter.js'></script>
<script>
    function invite()
    {var win = window.open('https://discord.com/api/oauth2/authorize?client_id=752367350657056851&permissions=268823806&scope=bot%20applications.commands', '_blank'); win.focus();}
    function support()
    {var win = window.open('https://discord.gg/2dWdZCj', '_blank'); win.focus();}
    function docs()
    {var win = window.open('https://windows2003server2003.gitbook.io/crash-protect', '_blank'); win.focus();}
    function status()
    {var win = window.open('https://crashprotect.statuspage.io', '_blank'); win.focus();}
</script>
<!--- Глав. SPAN --->
<div class='menu'>
<h1 class='menu_child' style="color: #0070FA;"><a href='/' class='translate'>Crash Protect</a></h1>
<span class='menu_child menu_element translate' onclick="invite();">Добавить в Discord</span>
<span class='menu_child menu_element translate' onclick="support();">Поддержка</span>
<span class='menu_child menu_element translate' onclick="docs();">Документация</span>
<span class='menu_child menu_element translate' onclick="status();">Статус</span>
</div>
<center>
  <h1>Статистика</h1>
  <br>
  <div class="shard">
  <h3>Шард <span style="color: #0070FA">0</span></h3>
  <p>Задержка: <span style="color: #0070FA" id="shard0p">-</span></p>
  <p>Серверов: <span style="color: #0070FA" id="shard0s">-</span></p>
  </div>
  <div class="shard">
  <h3>Шард <span style="color: #0070FA">1</span></h3>
  <p>Задержка: <span style="color: #0070FA" id="shard1p">-</span></p>
  <p>Серверов: <span style="color: #0070FA" id="shard1s">-</span></p>
  </div>
  <div class="shard">
  <h3>Шард <span style="color: #0070FA">2</span></h3>
  <p>Задержка: <span style="color: #0070FA" id="shard2p">-</span></p>
  <p>Серверов: <span style="color: #0070FA" id="shard2s">-</span></p>
  </div>
  <br>
  <p style="font-size: 30px;">Средняя задержка: <span style="color: #0070FA" id="avg">-</span></p>
</center>
<iframe class='translate discord' style='float: right;' src="https://discord.com/widget?id=752393789577887835&theme=dark" width="300" height="450" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
<div class='footer'>
<span class='footer_child' style='font-size: 20px; left: 0; bottom: 15px; position: fixed;'>© 2021, Cymon. Все права защищены.</span>
</div>
</body>
</html>

<?php
$shard0ping = file_get_contents('https://vegabot.xyz/crashprotect/stats/ping-shard0.data');
$shard0guilds = file_get_contents('https://vegabot.xyz/crashprotect/stats/servers-shard0.data');
$shard1ping = file_get_contents('https://vegabot.xyz/crashprotect/stats/ping-shard1.data');
$shard1guilds = file_get_contents('https://vegabot.xyz/crashprotect/stats/servers-shard1.data');
$shard2ping = file_get_contents('https://vegabot.xyz/crashprotect/stats/ping-shard2.data');
$shard2guilds = file_get_contents('https://vegabot.xyz/crashprotect/stats/servers-shard2.data');
$avgping = file_get_contents('https://vegabot.xyz/crashprotect/stats/avg-ping.data');
echo "<script>count('shard0p', 0, $shard0ping, 1000, '', ' мс', 1);</script>";
echo "<script>count('shard0s', 0, $shard0guilds, 1000, '', '', 2);</script>";
echo "<script>count('shard1p', 0, $shard1ping, 1000, '', ' мс', 1);</script>";
echo "<script>count('shard1s', 0, $shard1guilds, 1000, '', '', 2);</script>";
echo "<script>count('shard2p', 0, $shard2ping, 1000, '', ' мс', 1);</script>";
echo "<script>count('shard2s', 0, $shard2guilds, 1000, '', '', 2);</script>";
echo "<script>count('avg', 0, $avgping, 1000, '', ' мс', 1);</script>";
?>