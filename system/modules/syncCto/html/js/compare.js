/* Copyright (c) MEN AT WORK 2012 :: LGPL license */
window.addEvent("domready",function(){$$("input[name=delete]").set("disabled",true);$each($$(".checkbox input[type=checkbox]"),function(c){c.addEvents({click:function(){var d=($$(".checkbox input[type=checkbox]:checked").length!=0)?true:false;if(d==true){$$("input[name=delete]").set("disabled",false);$$("input[name=transfer]").set("disabled",true)}else{$$("input[name=delete]").set("disabled",true);$$("input[name=transfer]").set("disabled",false)}}})});if(window.HtmlTable){$$("body").addClass("table-sort");HtmlTable.defineParsers({dimension:{match:".*(Bytes|kB|mB|gB)",convert:function(){var d=this.get("text").replace(/.*(\d|,| )/,"").toString().toLowerCase();var c=this.get("text").replace(",",".").toFloat();if(d=="kb"){c=c*1024}else{if(d=="mb"){c=c*[Math.pow(1024,2)]}else{if(d=="gb"){c=c*[Math.pow(1024,3)]}}}return c},number:true}});var b=new HtmlTable($("normalfilelist"),{sortIndex:0,parsers:["string","dimension","string"],sortable:true}).enableSort({sortable:true,sortIndex:0});var a=new HtmlTable($("bigfilelist"),{sortIndex:0,parsers:["string","dimension","string"],sortable:true}).enableSort({sortable:true,sortIndex:0})}});