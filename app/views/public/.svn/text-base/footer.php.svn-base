  <script type="text/javascript">
    var resize = function() {
      $container = $(".container");
      $container.height($(window).height() - $('.topNav').height() - $('#daoh').height() - $('#daohfoots').height());

    };
    resize();
    $(window).resize(resize);
  </script>
  <script>
/**
 * @author Duanhq
 * @email 306800838@qq.com
 */
function showbanner(){
				var pagelink=window.location.pathname;
			if(pagelink.indexOf("index")>0){
					$.ajax({
					    url: 'http://cdn.zzgdapp.com/yunying/trade/ad/hbaner.json?v='+new Date().getTime(),
					    type: 'GET',
					    dataType:'json',
					    timeout:10000,
				     	success: function(datas){ 
					    	if(typeof  datas=== 'string'){
					   			datas=JSON.parse(datas);
					   		}
					    	if(datas.lists.length>0){
					    		/*过滤初始banner*/
					    		var arr=new Array();for(index in datas.lists){var banner=datas.lists[index];if(banner.usermark==tmark||banner.isreport==1){var timestamp = datetime_to_unix(GetDateStr(0));if(timestamp<datetime_to_unix(banner.showend)&&timestamp>datetime_to_unix(banner.showstart)){arr.push(banner);}}}
						    	banneroption(arr);
					    	}else{
					    		console.log('not find banner');
					    		$('#adv_top').hide();
					    	}
				     },
				     error:function(msp){
				     	console.log(msp);
				     }
				 });
				 
				 
				 var oHead = document.getElementsByTagName('HEAD').item(0); 

			    var oScript= document.createElement("script"); 
			
			    oScript.type = "text/javascript"; 
			
			    oScript.src="http://cdn.zzgdapp.com/yunying/trade/js/ad.js?v="+new Date().getTime(); 
			
			    oHead.appendChild( oScript); 
			    oScript.onload = function(){
			    	console.log('Timeout javascirpt poper~');
			    	$.ajax({
					    url: 'http://cdn.zzgdapp.com/yunying/trade/ad/pop.json?v='+new Date().getTime(),
					    type: 'GET',
					    dataType:'json',
					    timeout:10000,
				     	success: function(datas){ 
					    	if(typeof  datas=== 'string'){
					   			datas=JSON.parse(datas);
					   		}
					    	if(datas.lists.length>0){
					    		/*过滤初始banner*/
					    		var arr=new Array();for(index in datas.lists){var banner=datas.lists[index];if(banner.usermark==tmark||banner.isreport==1){var timestamp = datetime_to_unix(GetDateStr(0));if(timestamp<datetime_to_unix(banner.showend)&&timestamp>datetime_to_unix(banner.showstart)){arr.push(banner);}}}
						    	banneroption(arr);
					    	}else{
					    		console.log('not find banner');
					    	}
				     },
				     error:function(msp){
				     	console.log(msp);
				     }
				 });
			    }
				 
			}else{
				console.log('not index page');
			}
	
	$.ajax({
			    url: 'http://cdn.zzgdapp.com/yunying/trade/ad/footer.json?v='+new Date().getTime(),
			    type: 'GET',
			    dataType:'json',
			    timeout:10000,
		     	success: function(datas){ 
			    	if(typeof  datas=== 'string'){
			   			datas=JSON.parse(datas);
			   		}
			    	if(datas.lists.length>0){
			    		/*过滤初始banner*/
			    		var arr=new Array();for(index in datas.lists){var banner=datas.lists[index];if(banner.usermark==tmark||banner.isreport==1){var timestamp = datetime_to_unix(GetDateStr(0));if(timestamp<datetime_to_unix(banner.showend)&&timestamp>datetime_to_unix(banner.showstart)){arr.push(banner);}}}
			    		banneroption(arr);
			    	}else{
			    		console.log('not find footer');
			    	}
		     },
		     error:function(msp){
		     	console.log(msp);
		     }
		 });
}
function banneroption(arr){
	if(arr.length>0){
		var arr_sub=new Array();
		var banner={}
		if(arr.length==1){
			banner=arr[0];
		}else{
			var level=arr[0].level;
			banner=arr[0];
			for(index in arr){
				var val=arr[index];
				if(val.level-level>0){
					level=val.level;
					banner=val;
				}
			}
			for(index in arr){if(arr[index].level!=banner.level){arr_sub.push(arr[index]);}}
		}
		switch(banner.type){
			case 'headertext':{showheader(banner,arr_sub,'txt');break;}
			case 'headerimg':{showheader(banner,arr_sub,'pic');break;}
			case 'footertxt':{showfooter(banner,arr_sub);break;}
			case 'popwindow':{showpoper(banner,arr_sub);break;}
		}
	}else{
		console.log('banner is bad!');
	}
}
function showpoper(banner,arr_sub){
	console.log('pop');
	console.log(banner);
		/**************Builde Banner's html***************/
	var urlbody='banner#'+banner.styletitle+'#'+banner.stylewidth+'#'+banner.styleheight;
	var html='';
	var index=0;
	if(banner.contents.length>1){
		index=Math.floor(Math.random()*banner.contents.length);
	}
	banner.content=banner.contents[index].content.replace(/\\/g,'');
	banner.adlink=banner.contents[index].adlink;
	banner.imgsrc=banner.contents[index].imgsrc;
	banner.spamurl=banner.contents[index].spamurl;
	
	
	if(banner.adlink==''||banner.adlink.length<5||banner.adlink==null){
		html='nolink';
	}
	/**************    View Action     ***************/
	
	if(banner.lasttimebefor>0&&vipuser==1){/*还剩n天到期显示*/
		var day=getratedays(viptime);
		if(day-banner.lasttimebefor>0){
			banneroption(arr_sub);
			console.log('mytime:'+day+'		befor:'+banner.lasttimebefor);	
			return;
		}
	}else if(banner.lasttimeafter>0&&vipuser==0){/*已经到期n天显示*/
		console.log('befor:'+banner.lasttimeafter);
		var day=getratedays(viptime);
		if(day-banner.lasttimeafter<0){
			banneroption(arr_sub);
			console.log('mytime:'+day+'		befor:'+banner.lasttimebefor);	
			return;
		}			
	}
	/**************    View rule       ***************/
	
	if(banner.forevershow==0){/*不永远显示*/
		if(banner.loginshow==1){/*每次登陆显示，关闭后不显示，再次登陆有效*/
			if(showprobability(banner.showprobability))return;
			if(html=='nolink'){
				ad_showpoper(banner);
			}else{
				var html='<div style="margin:auto ; padding: 0;"><a href="javascript:operpop(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\',\'no\');" ><img src="'+banner.imgsrc+'" border="0" /></a></div>';
				$.layer({
				        type: 1,
					    title: false, 
					    closeBtn: [0, true],
						border: [1, 0.3, '#000'],
					    shade: [0.5, '#000'], 
					    offset: [($(window).height() - 280)/2 + 'px', ''],
					    area: ['560px', '280px'],
						time:120,
						page: {
							html: html,
						},
						success: function(layerNow){
						},
						close: function(index){
						}
				});
				bannerspam(banner.isspam,banner.spamurl,'show');
			}
			
		}else{
			console.log('view showdaynum:'+banner.showdaynum);
			
			console.log('today:'+GetDateStr(0));
			var viewday=window.localStorage.getItem(user_nick+"bannerpopday");
			console.log('viewday:'+viewday);			
			if(viewday=='null'||viewday==null){
				if(showprobability(banner.showprobability))return;
				if(html=='nolink'){
					ad_showpoper(banner);
				}else{
					var html='<div style="margin:auto ; padding: 0;"><a href="javascript:operpop(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\',\'yes\');" ><img src="'+banner.imgsrc+'" border="0" /></a></div>';
					$.layer({
				        type: 1,
					    title: false, 
					    closeBtn: [0, true],
						border: [1, 0.3, '#000'],
					    shade: [0.5, '#000'], 
					    offset: [($(window).height() - 280)/2 + 'px', ''],
					    area: ['560px', '280px'],
						time:120,
						page: {
							html: html,
						},
						success: function(layerNow){
						},
						close: function(index){
							bannerspam(banner.isspam,banner.spamurl,'close');
							window.localStorage.setItem(user_nick+"bannerpopclose",'close');
						}
					});
					bannerspam(banner.isspam,banner.spamurl,'show');
				}
				window.localStorage.removeItem(user_nick+'bannerpopclose');
				window.localStorage.setItem(user_nick+"bannerpopday",GetDateStr(parseInt(banner.showdaynum)));
			}else{
				if(datetime_to_unix(GetDateStr(0))>datetime_to_unix(viewday)){
					if(showprobability(banner.showprobability))return;
					if(html=='nolink'){
						ad_showpoper(banner);
					}else{
						var html='<div style="margin:auto ; padding: 0;"><a href="javascript:operpop(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\',\'yes\');" ><img src="'+banner.imgsrc+'" border="0" /></a></div>';
						$.layer({
					        type: 1,
						    title: false, 
						    closeBtn: [0, true],
							border: [1, 0.3, '#000'],
						    shade: [0.5, '#000'], 
						    offset: [($(window).height() - 280)/2 + 'px', ''],
						    area: ['560px', '280px'],
							time:120,
							page: {
								html: html,
							},
							success: function(layerNow){
							},
							close: function(index){
								bannerspam(banner.isspam,banner.spamurl,'close');
								window.localStorage.setItem(user_nick+"bannerpopclose",'close');
							}
						});
						bannerspam(banner.isspam,banner.spamurl,'show');
					}
					window.localStorage.removeItem(user_nick+'bannerpopclose');
					window.localStorage.setItem(user_nick+"bannerpopday",GetDateStr(parseInt(banner.showdaynum)));
				}else{
					var isclose=window.localStorage.getItem(user_nick+'bannerpopclose');
					if(isclose!='close'){
						if(showprobability(banner.showprobability))return;
						if(html=='nolink'){
							ad_showpoper(banner);
						}else{
							var html='<div style="margin:auto ; padding: 0;"><a href="javascript:operpop(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\',\'yes\');" ><img src="'+banner.imgsrc+'" border="0" /></a></div>';
							$.layer({
						        type: 1,
							    title: false, 
							    closeBtn: [0, true],
								border: [1, 0.3, '#000'],
							    shade: [0.5, '#000'], 
							    offset: [($(window).height() - 280)/2 + 'px', ''],
							    area: ['560px', '280px'],
								time:120,
								page: {
									html: html,
								},
								success: function(layerNow){
								},
								close: function(index){
									bannerspam(banner.isspam,banner.spamurl,'close');
									window.localStorage.setItem(user_nick+"bannerpopclose",'close');
								}
							});
							bannerspam(banner.isspam,banner.spamurl,'show');
						}
					}
				}
			}
		}
	}else{
		if(html=='nolink'){
			ad_showpoper(banner);
		}else{
			var html='<div style="margin:auto ; padding: 0;"><a href="javascript:operpop(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\',\'no\');" ><img src="'+banner.imgsrc+'" border="0" /></a></div>';
			$.layer({
						        type: 1,
						        title: false, 
						        closeBtn: [0, true],
								border: [1, 0.3, '#000'],
						        shade: [0.5, '#000'], 
						       offset: [($(window).height() - 280)/2 + 'px', ''],
						        area: ['560px', '280px'],
								time:120,
								page: {
									html: html,
								},
								success: function(layerNow){
								},
								close: function(index){
									bannerspam(banner.isspam,banner.spamurl,'close');
								}
			});
			bannerspam(banner.isspam,banner.spamurl,'show');
		}
	}
}
function showfooter(banner,arr_sub){
	/**************Builde Banner's html***************/
	var urlbody='banner#'+banner.styletitle+'#'+banner.stylewidth+'#'+banner.styleheight;
	var html='';
	var index=0;
	if(banner.contents.length>1){
		index=Math.floor(Math.random()*banner.contents.length);
	}
	banner.content=banner.contents[index].content.replace(/\\/g,'');
	banner.adlink=banner.contents[index].adlink;
	banner.spamurl=banner.contents[index].spamurl;
	/**************    View Action     ***************/
	
	if(banner.lasttimebefor>0&&vipuser==1){/*还剩n天到期显示*/
		var day=getratedays(viptime);
		if(day-banner.lasttimebefor>0){
			banneroption(arr_sub);
			console.log('mytime:'+day+'		befor:'+banner.lasttimebefor);	
			return;
		}
	}else if(banner.lasttimeafter>0&&vipuser==0){/*已经到期n天显示*/
		console.log('befor:'+banner.lasttimeafter);
		var day=getratedays(viptime);
		if(day-banner.lasttimeafter<0){
			banneroption(arr_sub);
			console.log('mytime:'+day+'		befor:'+banner.lasttimebefor);	
			return;
		}			
	}
	/**************    View rule       ***************/
	$('.footercont').attr('href','#');
	if(banner.adlink==''||banner.adlink.length<5||banner.adlink==null){
	}else{
		$('.footercont').attr("onclick",'openbanner(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\')');
	}
	$('#footercont').html(banner.content);
	
	bannerspam(banner.isspam,banner.spamurl,'show');
}
function showheader(banner,arr_sub,btype){
	/**************Builde Banner's html***************/
	var urlbody='banner#'+banner.styletitle+'#'+banner.stylewidth+'#'+banner.styleheight;
	var html='';
	var index=0;
	if(banner.contents.length>1){
		index=Math.floor(Math.random()*banner.contents.length);
	}
	banner.content=banner.contents[index].content.replace(/\\/g,'');
	banner.adlink=banner.contents[index].adlink;
	banner.imgsrc=banner.contents[index].imgsrc;
	banner.spamurl=banner.contents[index].spamurl;
	
	
	if(banner.adlink==''||banner.adlink.length<5||banner.adlink==null){
		html='nolink';
	}
	/**************    View Action     ***************/
	
	if(banner.lasttimebefor>0&&vipuser==1){/*还剩n天到期显示*/
		var day=getratedays(viptime);
		if(day-banner.lasttimebefor>0){
			banneroption(arr_sub);
			console.log('mytime:'+day+'		befor:'+banner.lasttimebefor);	
			return;
		}
	}else if(banner.lasttimeafter>0&&vipuser==0){/*已经到期n天显示*/
		console.log('befor:'+banner.lasttimeafter);
		var day=getratedays(viptime);
		if(day-banner.lasttimeafter<0){
			banneroption(arr_sub);
			console.log('mytime:'+day+'		befor:'+banner.lasttimebefor);	
			return;
		}			
	}
	/**************    View rule       ***************/
	
	if(banner.forevershow==0){/*不永远显示*/
		if(banner.loginshow==1){/*每次登陆显示，关闭后不显示，再次登陆有效*/
			if(showprobability(banner.showprobability))return;
			if(html!='nolink'){
				if(btype=='pic'){
					html='<a href="#" onclick="closebanner(\''+banner.isspam+'\',\''+banner.spamurl+'\',\'close\',\'no\')" ><span style="float: right;margin-right: 5px;">×</span></a>'+
    					'<a href="#" onclick="openbanner(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\')"><div class="advpic" onload="this.width=$(window).width()-20" style="height:60px;background:url('+banner.imgsrc+') no-repeat center center"></div></a>';
				}else{
					html='<div class="sui-msg msg-large msg-block msg-tips" ><div class="msg-con"><a href="#" onclick="openbanner(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\')">'+banner.content+'<a/><button type="button" data-dismiss="msgs" class="sui-close" onclick="closebanner(\''+banner.isspam+'\',\''+banner.spamurl+'\',\'close\',\'no\')">×</button></div><s class="msg-icon"></s></div>';
				}
			}else{
				if(btype=='pic'){
					html='<a href="#" onclick="closebanner(\''+banner.isspam+'\',\''+banner.spamurl+'\',\'close\',\'no\')" ><span style="float: right;margin-right: 5px;">×</span></a>'+
    					'<a href="#" onclick=\'ad_showbanner('+JSON.stringify(banner)+');\' ><div class="advpic" onload="this.width=$(window).width()-20" style="height:60px;background:url('+banner.imgsrc+') no-repeat center center"></div></a>';
				}else{
					html='<div class="sui-msg msg-large msg-block msg-tips" ><div class="msg-con">'+banner.content+'<button type="button" data-dismiss="msgs" class="sui-close" onclick="closebanner(\''+banner.isspam+'\',\''+banner.spamurl+'\',\'close\',\'no\')">×</button></div><s class="msg-icon"></s></div>';
				}
			}
			$('#adv_top').html(html);
			$('#adv_top').show();
			bannerspam(banner.isspam,banner.spamurl,'show');
			if(btype=='pic'){
				window.onresize=function(){  
		                 $('.advpic').css('width',$(window).width()-20);
				}
			}
		}else{
			console.log('view showdaynum:'+banner.showdaynum);
			if(html!='nolink'){
				if(btype=='pic'){
					html='<a href="#" onclick="closebanner(\''+banner.isspam+'\',\''+banner.spamurl+'\',\'close\',\'yes\')" ><span style="float: right;margin-right: 5px;">×</span></a>'+
    					'<a href="#" onclick="openbanner(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\')"><div class="advpic" onload="this.width=$(window).width()-20" style="height:60px;background:url('+banner.imgsrc+') no-repeat center center"></div></a>';
				}else{
					html='<div class="sui-msg msg-large msg-block msg-tips" ><div class="msg-con"><a href="#" onclick="openbanner(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\')">'+banner.content+'<a/><button type="button" data-dismiss="msgs" onclick="closebanner(\''+banner.isspam+'\',\''+banner.spamurl+'\',\'close\',\'yes\')" class="sui-close">×</button></div><s class="msg-icon"></s></div>';
				}
			}else{
				if(btype=='pic'){
					html='<a href="#" onclick="closebanner(\''+banner.isspam+'\',\''+banner.spamurl+'\',\'close\',\'yes\')" ><span style="float: right;margin-right: 5px;">×</span></a>'+
    					'<a href="#" onclick=\'ad_showbanner('+JSON.stringify(banner)+');\' ><div class="advpic" onload="this.width=$(window).width()-20" style="height:60px;background:url('+banner.imgsrc+') no-repeat center center"></div></a>';

				}else{
					html='<div class="sui-msg msg-large msg-block msg-tips" ><div class="msg-con">'+banner.content+'<button type="button" data-dismiss="msgs" onclick="closebanner(\''+banner.isspam+'\',\''+banner.spamurl+'\',\'close\',\'yes\')" class="sui-close">×</button></div><s class="msg-icon"></s></div>';
				}
			}
			console.log('today:'+GetDateStr(0));
			var viewday=window.localStorage.getItem(user_nick+"bannerday");
			console.log('viewday:'+viewday);			
			if(viewday=='null'||viewday==null){
				if(showprobability(banner.showprobability))return;
				$('#adv_top').html(html);
				$('#adv_top').show();
				bannerspam(banner.isspam,banner.spamurl,'show');
				if(btype=='pic'){
					window.onresize=function(){  
			                 $('.advpic').css('width',$(window).width()-20);
					}
				}
				window.localStorage.removeItem(user_nick+'bannerclose');
				window.localStorage.setItem(user_nick+"bannerday",GetDateStr(parseInt(banner.showdaynum)));
			}else{
				if(datetime_to_unix(GetDateStr(0))>datetime_to_unix(viewday)){
					if(showprobability(banner.showprobability))return;
					$('#adv_top').html(html);
					$('#adv_top').show();
					bannerspam(banner.isspam,banner.spamurl,'show');
					if(btype=='pic'){
						window.onresize=function(){  
				                 $('.advpic').css('width',$(window).width()-20);
						}
					}
					window.localStorage.removeItem(user_nick+'bannerclose');
					window.localStorage.setItem(user_nick+"bannerday",GetDateStr(parseInt(banner.showdaynum)));
				}else{
					var isclose=window.localStorage.getItem(user_nick+'bannerclose');
					if(isclose!='close'){
						if(showprobability(banner.showprobability))return;
						$('#adv_top').html(html);
						$('#adv_top').show();
						bannerspam(banner.isspam,banner.spamurl,'show');
						if(btype=='pic'){
							window.onresize=function(){  
					                 $('.advpic').css('width',$(window).width()-20);
							}
						}
					}
				}
			}
		}
	}else{
		if(html!='nolink'){	
			if(btype=='pic'){
				html='<a href="#" onclick="openbanner(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\')"><div class="advpic" onload="this.width=$(window).width()-20" style="height:60px;background:url('+banner.imgsrc+') no-repeat center center"></div></a>';

			}else{
				html='<div class="sui-msg msg-large msg-block msg-tips" ><div class="msg-con"><a href="#" onclick="openbanner(\''+banner.openstyle+'\',\''+banner.adlink+'\',\''+banner.isspam+'\',\''+banner.spamurl+'\',\'click\',\''+urlbody+'\')">'+banner.content+'<a/></div><s class="msg-icon"></s></div>';
			}
		}else{
			if(btype=='pic'){
				html='<a href="#" onclick=\'ad_showbanner('+JSON.stringify(banner)+');\' ><div class="advpic" onload="this.width=$(window).width()-20" style="height:60px;background:url('+banner.imgsrc+') no-repeat center center"></div></a>';
	
			}else{
				html='<div class="sui-msg msg-large msg-block msg-tips" ><div class="msg-con">'+banner.content+'</div><s class="msg-icon"></s></div>';
			}
		}
		$('#adv_top').html(html);
		$('#adv_top').show();
		bannerspam(banner.isspam,banner.spamurl,'show');
		if(btype=='pic'){
			window.onresize=function(){  
				$('.advpic').css('width',$(window).width()-20);
			}
		}
	}
}
/**
 * Banner's spam
 * @author Duanhq
 * @param {int}    isspam
 * param {string} spamurl
 * @param {string} spamtype
 */
function bannerspam(isspam,spamurl,spamtype){
	if(isspam==1){
		spamurl=spamurl+'&n='+user_nick+'&e='+spamtype;
   		$.ajax({
				type: 'POST',
				data:{},
				url:spamurl,
				success: function(data){
					console.log('spamurl successful!'+data);
				},
				error: function(e){
					console.log('spamurl error:'+e);
				}
		});
	}else{
		console.log('should not spam');
	}
}
function closebanner(isspam,spamurl,spamtype,isc){
	$('#adv_top').hide();
	bannerspam(isspam,spamurl,spamtype);
	if(isc=='yes'){
		window.localStorage.setItem(user_nick+"bannerclose",'close');
	}
}
function openbanner(style,link,isspam,spamurl,spamtype,urlbody){
	QN.application.invoke({
		"cmd": "translateUrl",
		"param":{'url':link},
		"success": function (e){
			if(typeof  e=== 'string'){
				e = JSON.parse(e);
			 }
			 switch(style){
				case '0':{window.location.href=e.url;break;}
				case '1':{urlbody=urlbody.split('#');openline_qn(e.url,urlbody[0],urlbody[1],urlbody[2],urlbody[3]);break;}
				case '2':{window.open(e.url);break;}
			}
		}
	});
	bannerspam(isspam,spamurl,spamtype);
}
function operpop(style,link,isspam,spamurl,spamtype,urlbody,isc){
	layer.close(layer.index);
	QN.application.invoke({
		"cmd": "translateUrl",
		"param":{'url':link},
		"success": function (e){
			if(typeof  e=== 'string'){
				e = JSON.parse(e);
			 }
			 switch(style){
				case '0':{window.location.href=e.url;break;}
				case '1':{urlbody=urlbody.split('#');openline_qn(e.url,urlbody[0],urlbody[1],urlbody[2],urlbody[3]);break;}
				case '2':{window.open(e.url);break;}
			}
		}
	});
	bannerspam(isspam,spamurl,spamtype);
	if(isc=='yes'){
		window.localStorage.setItem(user_nick+"bannerpopclose",'close');
	}
	
}
function banneropen(){
	
	QN.application.invoke({
	   		"cmd" : "browserUrlEmbedded",
	   		"param" : { "url" : link,id : '1', "title" : "短信订购", "width" : '900', "height" : '720' }
	   	});
}
function getratedays(enddate){
		    var date2=new Date(Date.parse(enddate.replace(/-/g,"/")));
		    var s2=date2.getTime();
		    var date1=new Date();
		    var s1=date1.getTime();
		    ms=s1-s2;
			h=Math.floor(ms/(3600*1000*24));
			return Math.abs(h);
}
function showprobability(rand){
	var arr=new Array();
	for(var i=0;i<10;i++){
		if(i<rand){
			arr.push(1);
		}else{
			arr.push(0);	
		}
	}
	console.log(arr);
	var index=Math.floor(Math.random()*10);
	console.log(index);
	if(arr[index]=='0'){
		console.log('not show');
		return true;
	}else{
		console.log('yes show');
		return false;
	}
}
 
</script>