function oauth() {
    this.init();
}

/**初始化一些事件, 或者加载页面*/
oauth.prototype.init = function() {
    var that = this;
    $('#fbLogin').click(function(event){
        event.stopPropagation();
        event.preventDefault();
        oauth.prototype.checkFbHashLogin();
        oauth.prototype.facebookLogin();
    });
};

/**Facebook 认证 start*/
oauth.prototype.facebookLogin = function(){//访问令牌
    var appID = '<YOUR CLIENT ID>';
    var path = 'https://www.facebook.com/dialog/oauth?';
    var queryParams = ['client_id=' + appID,
    'redirect_uri=' + window.location,
    'response_type=token'];
    var query = queryParams.join('&');
    var url = path + query;
    window.location.replace(url);
};

oauth.prototype.checkFbHashLogin = function() {//检查和使用令牌
    if (window.location.hash.length > 3) {
        var hash = window.location.hash.substring(1);
        if(hash.split('=')[0] == 'access_token'){
            var path = "https://graph.facebook.com/me?";
            var queryParams = [hash, 'callback=displayUser'];
            var query = queryParams.join('&');
            var url = path + query;
            
            var script = document.createElement('script');
            script.src = url;
            document.body.appendChild(script);
        }
    }
};
oauth.prototype.displayUser = function(user) {//回调函数，用户信息转化
    setTimeout(function () { }, 1000);
    if (user.id != null && user.id != "undefined") {
       //.....
    }else {
        alert('user error');
    }
};
/**Facebook 认证 end*/

$(function() {
    var oauth = new oauth();
});

String.prototype.trim = function(){
    return this.replace(/(^\s*)|(\s*$)/g, "");
};