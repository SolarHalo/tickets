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
            var queryParams = [hash, 'callback=displayUser'];
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
    	console.log(user.name);
    	console.log(user.first_name);
    	console.log(user.last_name);
    	console.log(user.link);
    	console.log(user.username);
    	console.log(user.gender);
    	console.log(user.locale);
    	console.log(user.age_range);
    	Oauth.prototype.login_search4gigs(user);
    }else {
        alert('user error');
    }
}
/**Facebook 认证 end*/

/**Facebook 认证成功之后的处理 start*/
Oauth.prototype.login_search4gigs = function(user) {
	$.ajax({
		   type: "POST",
		   url: "/register/addUser4FaceBook",
		   data: { "userid": user.id, "username": user.username, "firstname": user.first_name, "lastname": user.last_name, "email": user.email, "birthdate": ""},
		   error: {},
		   async: false,
		   cache: false,
		   success: function(json){
			   console.log(json);
			   if(json.trim()=='OK'){
				   window.location.href = "/index";
			    }else{
			    	 alert("登陆失败!");
			    }
		   }
	});
}
/**Facebook 认证成功之后的处理 end*/

$(function() {
    var oauth = new Oauth();
});

String.prototype.trim = function(){
    return this.replace(/(^\s*)|(\s*$)/g, "");
};