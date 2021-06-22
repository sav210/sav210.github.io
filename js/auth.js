async function getauth(code){
    const payload = {
        "client_id": '752367350657056851',
        "client_secret": 'Cb7KcxZIcrQaaKU9tfjqbZ-Ykmb6xZU7',
        "grant_type": "authorization_code",
        "code": code,
        "redirect_uri": "https://crashprotect.ml/auth",
        "scope": 'identify%20email%20guilds'
    };
    const response = await fetch('https://discord.com/api/oauth2/token', {
        method: 'POST',
        body: new URLSearchParams(payload),
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        }
        })
    var res = await response.json();
    console.log(res);
    return res
}
async function auth(code){
    const fetchDiscordUserInfo = await fetch('https://discord.com/api/users/@me', {
    headers: {
        'Authorization': "Bearer " + code,
        'Content-Type': 'application/x-www-form-urlencoded'
    }
    });
    const userInfo = await fetchDiscordUserInfo.json();
    return userInfo;
}
async function guilds(code){
    const fetchDiscordUserInfo = await fetch('https://discord.com/api/users/@me/guilds', {
    headers: {
        'Authorization': "Bearer " + code,
        'Content-Type': 'application/x-www-form-urlencoded'
    }
    });
    const g = await fetchDiscordUserInfo.json();
    return g;
}