"use strict";var ChartistDemo={init:function(){0!==$("#chartist-1").length&&new Chartist.Line("#chartist-1",{labels:["Monday","Tuesday","Wednesday","Thursday","Friday"],series:[[12,9,7,8,5],[2,1,3.5,7,3],[1,3,4,5,6]]},{fullWidth:!0,showArea:!0,chartPadding:{right:40}}),function(){if(0!==$("#chartist-2").length){var e={labels:[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16],series:[[5,5,10,8,7,5,4,null,null,null,10,10,7,8,6,9],[10,15,null,12,null,10,12,15,null,null,12,null,14,null,null,null],[null,null,null,null,3,4,1,3,4,6,7,9,5,null,null,null],[{x:3,y:3},{x:4,y:3},{x:5,y:void 0},{x:6,y:4},{x:7,y:null},{x:8,y:4},{x:9,y:4}]]};new Chartist.Line("#chartist-2",e,{fullWidth:!0,chartPadding:{right:10},low:0})}}(),function(){if(0!==$("#chartist-3").length){var e=function(e){return Array.apply(null,new Array(e))},t=e(52).map(Math.random).reduce(function(e,t,n){return e.labels.push(n+1),e.series.forEach(function(e){e.push(100*Math.random())}),e},{labels:[],series:e(4).map(function(){return new Array})});new Chartist.Line("#chartist-3",t,{showLine:!1,axisX:{labelInterpolationFnc:function(e,t){return t%13==0?"W"+e:null}}})}}(),0!==$("#chartist-4").length&&new Chartist.Bar("#chartist-4",{labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],series:[[5,4,3,7,5,10,3,4,8,10,6,8],[3,2,9,5,4,6,4,6,7,8,7,4]]},{seriesBarDistance:10},[["screen and (max-width: 640px)",{seriesBarDistance:5,axisX:{labelInterpolationFnc:function(e){return e[0]}}}]]),0!==$("#chartist-5").length&&new Chartist.Bar("#chartist-5",{labels:["Q1","Q2","Q3","Q4"],series:[[8e5,12e5,14e5,13e5],[2e5,4e5,5e5,3e5],[1e5,2e5,4e5,6e5]]},{stackBars:!0,axisY:{labelInterpolationFnc:function(e){return e/1e3+"k"}}}).on("draw",function(e){"bar"===e.type&&e.element.attr({style:"stroke-width: 30px"})}),0!==$("#chartist-6").length&&new Chartist.Bar("#chartist-6",{labels:["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],series:[[5,4,3,7,5,10,3],[3,2,9,5,4,6,4]]},{seriesBarDistance:10,reverseData:!0,horizontalBars:!0,axisY:{offset:70}}),function(){if(0!==$("#chartist-7").length){var e={series:[5,3,4]},t=function(e,t){return e+t};new Chartist.Pie("#chartist-7",e,{labelInterpolationFnc:function(n){return Math.round(n/e.series.reduce(t)*100)+"%"}})}}(),0!==$("#chartist-8").length&&new Chartist.Pie("#chartist-8",{series:[20,10,30,40]},{donut:!0,donutWidth:60,startAngle:270,total:200,showLabel:!1}),function(){if(0!==$("#chartist-9").length){var e=new Chartist.Pie("#chartist-9",{series:[10,20,50,20,5,50,15],labels:[1,2,3,4,5,6,7]},{donut:!0,showLabel:!1});e.on("draw",function(e){if("slice"===e.type){var t=e.element._node.getTotalLength();e.element.attr({"stroke-dasharray":t+"px "+t+"px"});var n={"stroke-dashoffset":{id:"anim"+e.index,dur:1e3,from:-t+"px",to:"0px",easing:Chartist.Svg.Easing.easeOutQuint,fill:"freeze"}};0!==e.index&&(n["stroke-dashoffset"].begin="anim"+(e.index-1)+".end"),e.element.attr({"stroke-dashoffset":-t+"px"}),e.element.animate(n,!1)}}),e.on("created",function(){window.__anim21278907124&&(clearTimeout(window.__anim21278907124),window.__anim21278907124=null),window.__anim21278907124=setTimeout(e.update.bind(e),1e4)})}}(),function(){if(0!==$("#chartist-10").length){var e=new Chartist.Line("#chartist-10",{labels:["1","2","3","4","5","6","7","8","9","10","11","12"],series:[[12,9,7,8,5,4,6,2,3,3,4,6],[4,5,3,7,3,5,5,3,4,4,5,5],[5,3,4,5,6,3,3,4,5,6,3,4],[3,4,5,6,7,6,4,5,6,7,6,3]]},{low:0}),t=0;e.on("created",function(){t=0}),e.on("draw",function(e){if(t++,"line"===e.type)e.element.animate({opacity:{begin:80*t+1e3,dur:500,from:0,to:1}});else if("label"===e.type&&"x"===e.axis)e.element.animate({y:{begin:80*t,dur:500,from:e.y+100,to:e.y,easing:"easeOutQuart"}});else if("label"===e.type&&"y"===e.axis)e.element.animate({x:{begin:80*t,dur:500,from:e.x-100,to:e.x,easing:"easeOutQuart"}});else if("point"===e.type)e.element.animate({x1:{begin:80*t,dur:500,from:e.x-10,to:e.x,easing:"easeOutQuart"},x2:{begin:80*t,dur:500,from:e.x-10,to:e.x,easing:"easeOutQuart"},opacity:{begin:80*t,dur:500,from:0,to:1,easing:"easeOutQuart"}});else if("grid"===e.type){var n={begin:80*t,dur:500,from:e[e.axis.units.pos+"1"]-30,to:e[e.axis.units.pos+"1"],easing:"easeOutQuart"},a={begin:80*t,dur:500,from:e[e.axis.units.pos+"2"]-100,to:e[e.axis.units.pos+"2"],easing:"easeOutQuart"},i={};i[e.axis.units.pos+"1"]=n,i[e.axis.units.pos+"2"]=a,i.opacity={begin:80*t,dur:500,from:0,to:1,easing:"easeOutQuart"},e.element.animate(i)}}),e.on("created",function(){window.__exampleAnimateTimeout&&(clearTimeout(window.__exampleAnimateTimeout),window.__exampleAnimateTimeout=null),window.__exampleAnimateTimeout=setTimeout(e.update.bind(e),12e3)})}}(),0!==$("#chartist-11").length&&new Chartist.Line("#chartist-11",{labels:["Mon","Tue","Wed","Thu","Fri","Sat"],series:[[1,5,2,5,4,3],[2,3,4,8,1,2],[5,4,3,2,1,.5]]},{low:0,showArea:!0,showPoint:!1,fullWidth:!0}).on("draw",function(e){"line"!==e.type&&"area"!==e.type||e.element.animate({d:{begin:2e3*e.index,dur:2e3,from:e.path.clone().scale(1,0).translate(0,e.chartRect.height()).stringify(),to:e.path.clone().stringify(),easing:Chartist.Svg.Easing.easeOutQuint}})})}};$(document).ready(function(){ChartistDemo.init()});
//# sourceMappingURL=init.chartist.js.map
