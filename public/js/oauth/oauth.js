function Oauth() {
    this.init();
}

/**初始化一些事件, 或者加载页面*/
Oauth.prototype.init = function() {
    var that = this;
  Oauth.prototype.checkFbHashLogin();
    $('table.bor-none td .btn-blue').click(function(event){
        event.stopPropagation();
        Oauth.prototype.facebookLogin();
//        Oauth.prototype.checkFbHashLogin();
    });
};

/**Facebook 认证 start*/
Oauth.prototype.facebookLogin = function(){//访问令牌
    var appID = '155660824640623';
    var path = 'https://www.facebook.com/dialog/oauth?';
    var queryParams = ['client_id=' + appID,
    'redirect_uri=' + 'http://search4gigs.com/login',
    'response_type=token'];
    var query = queryParams.join('&');
    var url = path + query;
    console.log(url);
    window.location.replace(url);
};

Oauth.prototype.checkFbHashLogin = function() {//检查和使用令牌
    if (window.location.hash.length > 3) {
        var hash = window.location.hash.substring(1);
        if(hash.split('=')[0] == 'access_token'){
            var path = "https://graph.facebook.com/me?";
            var queryParams = [hash, 'callback=displayUser(user)'];
            var query = queryParams.join('&');
            var url = path + query;
            
            var script = document.createElement('script');
            script.src = url;
            document.body.appendChild(script);
        }
    }
};
function displayUser(user) {//回调函数，用户信息转化
    setTimeout(function () { }, 1000);
    if (user.id != null && user.id != "undefined") {
       //.....
    	console.log(user.id);
    }else {
        alert('user error');
    }
}
/**Facebook 认证 end*/

$(function() {
    var oauth = new Oauth();
});

String.prototype.trim = function(){
    return this.replace(/(^\s*)|(\s*$)/g, "");
};