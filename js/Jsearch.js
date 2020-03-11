jQuery.fn.Jsearch=function(param={content:"",url:""}) {
    console.log(param.content);
    console.log(param.url);
    this.keypress(function() {
        $.get(param.url,{search:this.value},function(data){
            console.log(data);
        });
    });
}
jQuery.fn.dload=function() {
    $(window).scroll(function (e) {
       if ($(window).scrollTop()==$(document).height()-$(window).height()) {
           console.log($(window).scrollTop());
       } 
    });
}