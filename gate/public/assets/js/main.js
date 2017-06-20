$(document).ready(function() {

    // page to top
    var main;
    main = new PagePlugin();
    $(window).on('load',this,function(){
        main.init();
        $(document).on('click','a[href^=#]',function(){
            main.pageScroll(this);
        });
    });
});


///////////////////////////////
////// クラス定義（コンストラクタ）
///////////////////////////////

// page scroll
PagePlugin = function(op) {
    this.speed=500;
};


/////////////////////
///////// メソッド定義
/////////////////////

// page scroll
PagePlugin.prototype = {
    init: function(){
        var self;
        self = this;

    },
    pageScroll:function(el){
        var self,href,target,position;
        self = this;

        href= $(el).attr("href");
        target = $(href == "#" || href == "" ? 'html' : href);
        position = target.offset().top;
        $("html, body").animate({scrollTop:position}, self.speed);
    }

};


//$(function(){
//    $("#regist").submit(function(){
//        alert();
//    });
//});
