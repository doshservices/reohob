"use strict";var Custom=function(){var t=function(t,e){$(t).slimScroll({height:e,railVisible:!0,size:"4px",opacity:0}).mouseover(function(){$(this).next(".slimScrollBar").css("opacity",.4)})};return{init:function(){var e,o,n,a,i,s,c,l,r,h,d,p;0!==$("#sidebar-nav").length&&(t("#sidebar-nav","auto"),$("#sidebar-nav .sub-nav").on("click",function(t){t.stopPropagation();var e=$(this);e.next().hasClass("show")?(e.next().removeClass("show"),e.removeClass("active"),e.next().slideUp(350)):(e.parent().parent().find(".sub-nav-item").removeClass("show").slideUp(350),e.parent().parent().find(".sub-nav").removeClass("active"),e.next().toggleClass("show"),e.toggleClass("active"),e.next().slideToggle(350))})),e=$("#hamburger"),o=$(".search-form button"),n=$("#search-input a"),a=$(".card-close"),e.on("click",function(t){t.stopPropagation(),$("body").toggleClass("js-mini-sidebar")}),o.on("click",function(t){t.stopPropagation(),$("#search-input").addClass("show")}),n.on("click",function(t){t.stopPropagation(),$(this).parent().removeClass("show")}),a.on("click",function(){$(this).closest(".card").addClass("js-card-hide")}),i=$('[data-toggle="tooltip"]'),s=$('[data-toggle="popover"]'),c=$("#tagsinput"),l=$("#image-upload"),r=$(".drop-file"),i.length&&i.tooltip(),s.length&&s.popover(),c.length&&c.tagsinput(),l.length&&l.dropify(),r.length&&r.dropify(),0!==(h=$(".data-line")).length&&h.css("width",function(){return $(this).attr("data-width")+"%"}),d=$("#check-all"),p=$(".child-check"),0!==d.length&&(d.on("click",function(){p.prop("checked",this.checked)}),p.on("click",function(){$(".child-check:checked").length===p.length?d.prop("checked",!0):d.prop("checked",!1)})),$(".scrollbar").length&&t(".scrollbar","auto")}}}();$(document).ready(function(){Custom.init()}),$(window).on("load",function(){$("#loader").fadeOut(1e3)});
//# sourceMappingURL=custom.js.map