	<div id="myModal" class="sui-modal hide fade" role="dialog" tabIndex="-1" data-hasfoot="false">
		<div class="modal-dialog">    
			<div class="modal-content">      
				<div class="modal-header">        
				<button aria-hidden="true" class="sui-close" type="button" data-dismiss="modal">×</button>        
				<h4 id="myModalLabel" class="modal-title">Modal title</h4>      
				</div>      
				<div class="modal-body">
					</div>      
				<div class="modal-footer">        
					<button class="sui-btn btn-primary btn-large" type="button" data-ok="modal">可自定ok</button>        
					<button class="sui-btn btn-default btn-large" type="button" data-dismiss="modal">可自定dismiss</button>      
				</div>    
			</div>  
		</div>
	</div>
<div id="daoh" class="bottom-susp">
	<div class="left_logo">
		<a href="<?php echo APP_WEB_INDEX_ROOT?>/trade/index?vers=<?php echo REAL_ROOT_VER;?>">
		<img style="padding-right: 5px;" src="http://cdn.zzgdapp.com/trade/web/images/ayjy.png" align="absmiddle" /><img
			src="http://cdn.zzgdapp.com/trade/web/images/logo_jy.png" alt="" /></a>
	</div>

	
	
	<div id="versionshow" style="position: fixed; right: 280px; z-index: 2;">
		<ul style="list-style: none;">
			<li class="mfb" id='mfb1'></li>
			<li class="mfbzk" id='mfb2'>
				<ul style="list-style: none;">
					<li class="mfbzk_top" id="versionorvip"></li>
					<!-- 加载中... -->
					<li class="mfbzk_mid">还剩<font id="overdaytime" color="#ff5011"></font>天到期<br />
						<button id="ljsjbt" class="ljsj" onclick="showAdMsg('gaojiban-tk');">立即升级</button></li>
					<li class="mfbzk_foot"></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="navBar">
		<ul class="nav clearfix">
			<li id="m1" class="m" style="display: none;">
				<h3>
					<a href="#"><img style="padding-right: 5px; margin-top: -4px;"
						src="http://cdn.zzgdapp.com/trade/web/images/xx.png" alt=""
						align="absmiddle" />消息 <font
						style="color: #ff5011; font-weight: bold;">9</font><img
						style="padding: 0px 0px 3px 5px;"
						src="http://cdn.zzgdapp.com/trade/web/images/xl.png" alt="" /></a>
				</h3>
				<ul class="sub" style="display: none;">
					<li><a href="#"><font style="color: #ff5011; font-weight: bold;">[私信]</font>
							您的高级版即将到期，请及时续费！<img style="padding-left: 3px;"
							src="http://cdn.zzgdapp.com/trade/web/images/new.png" alt=""
							align="absmiddle" /></a></li>
					<li><a href="#"><font style="color: #ff5011; font-weight: bold;">[私信]</font>
							您的高级版即将到期，请及时续费！<img style="padding-left: 3px;"
							src="http://cdn.zzgdapp.com/trade/web/images/new.png" alt=""
							align="absmiddle" /></a></li>
					<li><a href="#">每月1号是会员服务日，订购一年8折优惠。<img style="padding-left: 3px;"
							src="http://cdn.zzgdapp.com/trade/web/images/hot.png" alt=""
							align="absmiddle" /></a></li>
					<div style="padding: 5px 10px;">
						<a href="#">忽略所有消息</a> | <a href="#">全部消息</a>
					</div>
				</ul>
			</li>
			<div style="float: left; display: none;">
				<img src="http://cdn.zzgdapp.com/trade/web/images/fex_1.png" alt="" />
			</div>
			<li id="m2" class="m">
				<h3>
					<a href="javascript:void(0);" onclick="setSystem()"><img style="padding-right: 5px; margin-top: -4px;"
						src="http://cdn.zzgdapp.com/trade/web/images/sz.png" alt=""
						align="absmiddle" />设置<!--<img style="padding: 0px 0px 3px 5px;"
						src="http://cdn.zzgdapp.com/trade/web/images/xl.png" alt="" />--></a>
				</h3>
				<!--<ul class="sub" style="display: none;">
					<li><a href="javascript:void(0);" onclick="setSystem()">&nbsp;系统设置</a></li>
					<li><a href="javascript:showMsg('sendh');" onclick="mofirst('external_newadd')">&nbsp;发货设置</a></li>
                    <li><a href="javascript:showMsg('cfsz');" onclick="cfsz()">&nbsp;催付设置</a></li>
                    <li><a href="javascript:showMsg('pingj');" onclick="funduan('pingid')">&nbsp;短语设置</a></li>
                    <li><a href="javascript:load_glset();" onclick="showMsg('glset_form')">&nbsp;功能设置</a></li>
				</ul>-->
			</li>
			<div style="float: left;">
				<img src="http://cdn.zzgdapp.com/trade/web/images/fex_1.png" alt="" />
			</div>
			<li id="m2" class="m">
				<h3>
					<a href="#"><img style="padding-right: 5px; margin-top: -4px;"
						src="http://cdn.zzgdapp.com/trade/web/images/gd.png" alt=""
						align="absmiddle" />更多<img style="padding: 0px 0px 3px 5px;"
						src="http://cdn.zzgdapp.com/trade/web/images/xl.png" alt="" /></a>
				</h3>
				<ul class="sub" style="display: none;">
					<li><a href="javascript:openlines('http://bangpai.taobao.com/group/thread/15074034-288993963.htm?spm=pcjiaoyitijianyi');" target="_blank" >&nbsp;问题建议</a></li>
					<li><a href="http://bangpai.taobao.com/group/thread/15074034-286749181.htm?spm=0.0.0.0.6NJl0D" target="_blank" onclick="tradePoint('','使用教程[更多]');">&nbsp;使用教程</a></li>
					<li><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/upLog?vers=<?php echo REAL_ROOT_VER;?>">&nbsp;更新日志</a></li>
					<!-- <li><a href="javascript:showMsg('lookTv');">&nbsp;关注电台</a></li> -->
                    <li id="goodgods" style="display:;"><a href="javascript:openlines('http://bangpai.taobao.com/group/thread/15074034-288819203.htm?spm=pcjiaoyihaopingyoujiang'); " onclick="tradePoint('','好评有礼');">&nbsp;好评有奖</a></li>
					<!-- <li style="width: 56px;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/item/titleSet?vers=<?php echo REAL_ROOT_VER;?>">爱用设置</a></li> -->
				</ul>
			</li>
			<div style="float: left;">
				<img src="http://cdn.zzgdapp.com/trade/web/images/fex_1.png" alt="" />
			</div>

			<li id="m3" class="m">
				<h3>
					<a href="#"><img style="padding-right: 5px; margin-top: -4px;"
						src="http://cdn.zzgdapp.com/trade/web/images/dh.png" alt=""
						align="absmiddle" />导航<img style="padding: 0px 0px 3px 5px;"
						src="http://cdn.zzgdapp.com/trade/web/images/xl.png" alt="" /></a>
				</h3>
				<ul class="sub" style="display: none;">
					<li style="border: 0px #f1f1f1 solid;">
						<ul class="dxyx">
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 100px; color: #333; font-weight: bold;">&nbsp;&nbsp;提升效率</li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/batchEvaluation?vers=<?php echo REAL_ROOT_VER;?>" >&nbsp;&nbsp;批量评价</a></li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/index?vers=<?php echo REAL_ROOT_VER;?>#tradeStatus=wait_seller_send_goods">&nbsp;&nbsp;批量发货</a></li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/printSend?vers=<?php echo REAL_ROOT_VER;?>">&nbsp;&nbsp;批量打印</a></li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/index?vers=<?php echo REAL_ROOT_VER;?>#tradeStatus=wait_buyer_pay">&nbsp;&nbsp;批量免邮</a></li>
						</ul>
					</li>

					<li style="border: 0px #f1f1f1 solid;">
						<ul class="dxyx">
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 100px; color: #333; font-weight: bold;">&nbsp;提升信誉</li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/zdrate?vers=<?php echo REAL_ROOT_VER;?>" >&nbsp;自动评价</a></li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/interceptor?vers=<?php echo REAL_ROOT_VER;?>" >&nbsp;差评拦截</a></li>
						</ul>
					</li>

					<li style="border: 0px #f1f1f1 solid;">
						<ul class="dxyx">
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 100px; color: #333; font-weight: bold;">短信关怀</li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/sms?vers=<?php echo REAL_ROOT_VER;?>">订单催付提醒</a></li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/sms?vers=<?php echo REAL_ROOT_VER;?>">订单发货提醒</a></li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/index?vers=<?php echo REAL_ROOT_VER;?>">手动发送短信</a></li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/sms?vers=<?php echo REAL_ROOT_VER;?>">自定义发短信</a></li>
						</ul>
					</li>

					<li style="border: 0px #f1f1f1 solid;">
						<ul class="ayjz">
							<li
								style="border: 0px #f1f1f1 solid; padding: 5px; width: 100px; color: #333; font-weight: bold;">爱用家族</li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a
								target="_blank"
								href="http://fuwu.taobao.com/ser/detail.htm?service_code=FW_GOODS-1827490"><img
									style="padding-right: 5px;"
									src="http://cdn.zzgdapp.com/trade/web/images/ayjy.png"
									align="absmiddle" />爱用交易</a></li>
							<!-- http://fuwu.taobao.com/ser/detail.htm?service_code=FW_GOODS-1827490 -->
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a
								target="_blank"
								href="http://fuwu.taobao.com/ser/detail.htm?service_code=FW_GOODS-1828810"><img
									style="padding-right: 5px;"
									src="http://cdn.zzgdapp.com/trade/web/images/aysp.png"
									align="absmiddle" />爱用商品</a></li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a
								target="_blank"
								href="http://fuwu.taobao.com/ser/detail.htm?service_code=FW_GOODS-1856541"><img
									style="padding-right: 5px;"
									src="http://cdn.zzgdapp.com/trade/web/images/aygx.png"
									align="absmiddle" />爱用供销</a></li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 80px;"><a
								target="_blank"
								href="http://fuwu.taobao.com/ser/detail.htm?service_code=FW_GOODS-1887064"><img
									style="padding-right: 5px;"
									src="http://cdn.zzgdapp.com/trade/web/images/aysj.png"
									align="absmiddle" />爱用数据</a></li>
						</ul>
					</li>

					<li style="border: 0px #f1f1f1 solid;">
						<ul class="gzdt">
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 100px; color: #333; font-weight: bold;">用手机千牛扫一扫</li>
							<li style="border: 0px #f1f1f1 solid; padding: 5px; width: 100px;"><img
								src="http://cdn.zzgdapp.com/trade/web/images/dt.jpeg" width="90"
								height="90" alt="" /><span id="kfrx"><img
									style="padding-right: 5px;"
									src="http://cdn.zzgdapp.com/trade/web/images/rxdh.png"
									align="absmiddle" /><b>4006-550-850</b></span></li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>

<div class="topNav" >
	<div class="topNav-width clearfix">
		<dl class="tnLeft">
			<dd id="indexsel">
				<h3><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/index?vers=<?php echo REAL_ROOT_VER;?>"><img src="http://cdn.zzgdapp.com/trade/web/images/ddgl1.png" alt="" align="absmiddle" style="padding: 0px 3px 1px 0px; height: 13px;" />订单管理</a></h3>
			</dd>
			<div style="float: left; margin-top: 10px;">
				<img src="http://cdn.zzgdapp.com/trade/web/images/fgx_2.png" alt="" />
			</div>
			
			<dd id="pjglsel">
				<h3><a href="#"><img src="http://cdn.zzgdapp.com/trade/web/images/pjgl.png" alt="" align="absmiddle" style="padding: 0px 3px 3px 0px; height: 12px;" />评价管理<img src="http://cdn.zzgdapp.com/trade/web/images/xl.png" alt="" align="absmiddle" style="padding: 0px 0px 4px 3px;" /></a></h3>
				<ul style="width: 100px;">
					<li><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/evaluate?vers=<?php echo REAL_ROOT_VER;?>" >店铺评价</a></li>
	                <li><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/batchEvaluation?vers=<?php echo REAL_ROOT_VER;?>" >批量评价</a></li>
				</ul>
			</dd>
			<div style="float: left; margin-top: 10px;">
				<img src="http://cdn.zzgdapp.com/trade/web/images/fgx_2.png" alt="" />
			</div>
			
			<dd id="dyfhsel">
				<h3><a href="#"><img src="http://cdn.zzgdapp.com/trade/web/images/dyfh.png" alt="" align="absmiddle" style="padding: 0px 3px 3px 0px; height: 12px;" />打单发货<img src="http://cdn.zzgdapp.com/trade/web/images/xl.png" alt="" align="absmiddle" style="padding: 0px 0px 4px 3px;" /></a></h3>
				<ul style="width: 100px;">
					<li><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/printSend?vers=<?php echo REAL_ROOT_VER;?>" >批量打印</a></li>
                    <li><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/customPrint?vers=<?php echo REAL_ROOT_VER;?>" >自定义打印</a></li>
                    <li id="recruitid" style="display: none;"><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/facePrint?vers=<?php echo REAL_ROOT_VER;?>" >易单宝打印</a></li>
                    <li><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/fastMo?vers=<?php echo REAL_ROOT_VER;?>" >快递单模板</a></li>
                    <li><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/sendMo?vers=<?php echo REAL_ROOT_VER;?>" >发货单模板</a></li>
                    <li><a href="javascript:totitleSet();">商品简称</a></li>
				</ul>
			</dd>
			<div style="float: left; margin-top: 10px;">
				<img src="http://cdn.zzgdapp.com/trade/web/images/fgx_2.png" alt="" />
			</div>
			
			<dd id="zdpjsel">
				<h3><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/zdrate?vers=<?php echo REAL_ROOT_VER;?>" ><img src="http://cdn.zzgdapp.com/trade/web/images/zpj2.png" alt="" align="absmiddle" style="padding: 0px 3px 1px 0px; height: 12px;" />自动评价<span id="zdratexx"></span></a></h3>
			</dd>
			<div style="float: left; margin-top: 10px;">
				<img src="http://cdn.zzgdapp.com/trade/web/images/fgx_2.png" alt="" />
			</div>
			
			<dd id="cpsljsel">
				<h3><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/interceptor?vers=<?php echo REAL_ROOT_VER;?>"><img src="http://cdn.zzgdapp.com/trade/web/images/cpslj.png" alt="" align="absmiddle" style="padding: 0px 3px 1px 0px; height: 12px;" />差评拦截<span id="defenratexx"></span></a></h3>
			</dd>
			<div style="float: left; margin-top: 10px;">
				<img src="http://cdn.zzgdapp.com/trade/web/images/fgx_2.png" alt="" />
			</div>
			
			<dd id="dxghsel">
				<h3><a href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/sms?vers=<?php echo REAL_ROOT_VER;?>"><img src="http://cdn.zzgdapp.com/trade/web/images/dxgh.png" alt="" align="absmiddle" style="padding: 0px 3px 1px 0px; height: 11px;" />短信关怀</a></h3>
			</dd>
		</dl>
	</div>
</div>

<div id="daohfoots" class="bottom-susp" style="position: fixed; bottom: 0px; background-color: #eee; width: 100%; z-index: 1;">
	<div class="row">
		<div class="span7" style="">
			<div style="margin-left: 10px;">
				<img alt="HOT" src="" style="display: none;"> <a class="footercont"
					href="javascript:openlines('http://bangpai.taobao.com/group/thread/15074034-290896569.htm')"
					><span id="footercont" style="color: #333;">爱用交易改版升级，视觉效果更佳，更多惊喜，邀您体验！“吐槽”请点击这里~~~</span></a>
			</div>
		</div>
		<div class="span2" style="float: right;">
			<a href="#"
				style="text-decoration: none; float: right; margin-right: 10px;"
				onclick="wangwangPP('爱用科技');"> <img border="0" class="wwkfim"
				style="margin-top: -1px;" src="" />
			</a>
		</div>
	</div>
</div>
	<!--Profile Form提前续费有优惠-->
      <div id="activitys" class="mesWindow" style="Z-INDEX:99998; POSITION:absolute;height:380px; width:580px;display:none;background-color:#FFF;">
		 <div class="mesWindowTop" style="height:35px;">
            <button type="button" class="close" style="margin-top: 6px;" onclick="closeMsg('');">×</button>
            <h4>提前续费有优惠</h4>
         </div>
	    <div class="modal-body" style="" id="activityes">
		</div>
		<div class="footer">
			 <div  class="mesWindowBottom">	
				 <input type="button" onclick="closeMsg('');" value="关闭">	
			 </div>
		 </div>
	</div>     
      <!--Profile Form关注电台有礼-->
      <div id="lookTv" class="mesWindow" style="Z-INDEX:99998; POSITION:absolute;height:380px; width:530px;display:none;background-color:#FFF;">
		 <div class="mesWindowTop" style="height:35px;">
            <button type="button" class="close" style="margin-top: 6px;" onclick="closeMsg('');">×</button>
            <h4>订阅电台有礼</h4>
         </div>
	    <div class="modal-body" style="">
			<span style="color: red;">订阅后联系客服旺旺即可9折订购爱用交易高级版。</span><span>订阅后可以随时获取最新功能和促销活动！</span><a target="_blank"  id="wwkfon" href="javascript:void();" onclick="wangwangPP('爱用科技')"><img border="0" class="wwkfim" src="http://amos.im.alisoft.com/online.aw?v=2&uid=爱用科技&site=cntaobao&s=2&charset=utf-8" alt="点击这里给我发消息" />&nbsp;爱用客服</a>
			<h4>如何订阅</h4>
			<p>用手机打开千牛，右上角点击“扫一扫”按钮，然后扫描下方二维码订阅即可。当然电脑上也可以订阅哦，请<a href="javascript:openlines('http://bangpai.taobao.com/group/thread/15074034-289628008.htm?spm=pcjiaoyiguanzhudiantaiyouli');">猛戳这里！</a></p>
			<img src="http://cdn.zzgdapp.com/gx/web/images/u12.jpg" style="margin: auto;display: block;width: 147px;height: 147px;"/>
		</div>
		<div class="footer">
			 <div  class="mesWindowBottom">	
				 <input type="button" onclick="closeMsg('');" value="关闭">	
			 </div>
		 </div>
	</div>      
    <!--Profile Form提建议-->
	 <div id="myModal" class="mesWindow" style="Z-INDEX:99998; POSITION:absolute;height:280px; width:450px;display:none;background-color:#FFF;">
		 <div class="mesWindowTop" style="height:35px;">
            <button type="button" class="close" style="margin-top: 6px;" onclick="closeMsg('');">×</button>
            <h4>提建议</h4>
         </div>
		 <div class="modal-body">
             <textarea class="textarea" id="suggest" placeholder="请输入您宝贵的建议..." style="width: 405px; height: 150px;resize: none;"></textarea>
        </div>
		<div class="footer">
			 <div  class="mesWindowBottom">	
				 <input type="button" style="padding: 3px 10px;" class="btn btn-primary" onclick="sentsuggest();" value="确定"><input type="button" onclick="closeMsg('');" style="margin-left:8px;padding: 3px 10px;" value="关闭">	
			 </div>
		 </div>
	 </div>
    <!--Profile Form温馨提示-->
    <div id="hint" class="sui-modal hide fade" role="dialog" tabIndex="-1" data-hasfoot="true" data-backdrop="static" data-width="460px" style="display:none;">
		<div class="modal-dialog">    
			<div class="modal-content">      
				<div class="modal-header">        
					<button aria-hidden="true" class="sui-close" type="button" data-dismiss="modal">×</button>        
					<h4 class="modal-title">温馨提示</h4>      
				</div>
				 <div class="modal-body" style=" max-height: 100px;">
		 			<div id="hints"></div>
        		</div>
        		<div class="modal-footer">  
					<input type="button" class="sui-btn btn-primary btn-large"  data-dismiss="modal" value="关闭">  
				</div>    
			</div>  
		</div>
	</div>
	 <!-- 三秒自动关闭弹窗，无关闭按钮 -->
	 	 <div id="hint_autoclocs" class="mesWindow" style="Z-INDEX:99999; POSITION:absolute;height:150px; width:250px;display:none;background-color:#FFF;">
		 <div class="mesWindowTop" style="height:35px;">
            <button type="button" class="close" style="margin-top: 6px;" msgstu="again" onclick="closeMsg('');">×</button>
            <h5>温馨提示</h5>
         </div>
		 <div class="modal-body">
		 	<p id="hints_autoclocs"></p>
        </div>
		<div class="footer">
			
		 </div>
	 </div>
	 
	     <!--Profile Form温馨提示-->
	    <div id="send_addr" class="mesWindow" style="Z-INDEX:99999; POSITION:absolute;height:150px; width:460px;display:none;background-color:#FFF;">
		 <div class="mesWindowTop" style="height:35px;">
            <button type="button" class="close" style="margin-top: 6px;" msgstu="again" onclick="closeMsg('');">×</button>
            <h5>温馨提示</h5>
         </div>
		 <div class="modal-body">
		 	<p >您还没有设置默认的退、发货地址，请设置后再发货，否则将导致发货失败</p>
        </div>
		<div class="footer">
			 <div  class="mesWindowBottom">	
			 	<input type="hidden" >
			 	<input type="button" class="btn btn-primary" style="padding: 3px 10px;"  onclick="addsendaddr()" value="前往卖家地址库">
			 	<!--<input type="button" class="btn btn-primary" style="padding: 3px 10px;"  onclick="senderror()" value="发送错误信息">
				  <input type="button" msgstu="again" class="btn"  onclick="closeMsg('');" value="关闭">	 -->
			 </div>
		 </div>
	 </div>
	 <!--Profile Form温馨提示-->
	 <div id="hint_vip" tabindex="-1" role="dialog" data-hasfoot="true" data-backdrop="static" class="sui-modal hide fade" data-width="450px" >
  					<div class="modal-dialog">
    					<div class="modal-content">
    						  <div class="modal-header">
      								  <button type="button" data-dismiss="modal" aria-hidden="true" class="sui-close">×</button>
       									 <h4 id="myModalLabel" class="modal-title">温馨提示</h4>
    					  	  </div>
      						 <div class="modal-body" >
				             	<p id="hints_vip"></p>
		 						<p id="hints_vips" style="display: none;"></p>
				             </div>
      						  <div class="modal-footer">
      						     <button class="sui-btn btn-primary" style="padding: 3px 10px;" id="lookerror"  onclick="lookerror();" >查看错误源</button>
      					   		 <button data-ok="modal" data-toggle="modal"  data-keyboard="false" class="sui-btn btn-primary btn-lg" onclick="senderror();" >发送错误信息</button>
       							 <button type="button" data-dismiss="modal" class="sui-btn btn-default btn-large">关闭</button>
      						 </div>
    					</div>
  					</div>
			  </div>
<!--Profile Form温馨提示two-->
	<div id="twohint" class="sui-modal hide fade" role="dialog" tabIndex="-1" data-hasfoot="true" data-backdrop="static" data-width="300px" style="display:none;">
		<div class="modal-dialog">    
			<div class="modal-content">      
				<div class="modal-header">        
					<button aria-hidden="true" class="sui-close" type="button" data-dismiss="modal">×</button>        
					<h4 class="modal-title">温馨提示</h4>      
				</div> 
		 		<div class="modal-body">
		 			<p id="twohints"></p>
        		</div>
				<div class="modal-footer">     
					<button id="hintok" class="sui-btn btn-primary btn-large" type="button" data-ok="modal">确定</button>    
					<button id="hintno" class="sui-btn btn-default btn-large" type="button" data-dismiss="modal">关闭</button>      
				</div>    
			</div>  
		</div>
	</div>
	 <!--Profile Form温馨提示-->
	 <div id="testmsg" class="mesWindow" style="Z-INDEX:99999; POSITION:absolute;height:230px; width:650px;display:none;background-color:#FFF;">
		 <div class="mesWindowTop" style="height:35px;">
            <button type="button" class="close" style="margin-top: 6px;" onclick="closeMsg('');">×</button>
            <h5>温馨提示</h5>
         </div>
		 <div class="mesWindowContent" style="max-height: 430px;">
		 	<p id="testmsgs"></p>
        </div>
		<div class="footer">
			 <div  class="mesWindowBottom">
			 <input type="button" id="hintok" style="padding: 3px 10px;" class="btn btn-primary" onclick="" value="确定"><input type="button" id="hintno" onclick="closeMsg('');" style="margin-left:8px;padding: 3px 10px;" value="关闭">		
			 </div>
		 </div>
	 </div>

    
    <!--Profile Form常用短语设置
    <div id="pingj" class="mesWindow" style="Z-INDEX:99998; POSITION:absolute;height:340px; width:560px;display:none;background-color:#FFF;">
		 <div class="mesWindowTop" style="height:35px;">
            <button type="button" class="close" style="margin-top: 6px;" onclick="closeMsg('');">×</button>
            <h4>常用短语设置</h4>
         </div>
         <ul class="nav nav-tabs" id="myTab" style="margin:10px;">
		  <li class="active"><a data-toggle="tab" href="#pingd" onclick="funduan('pingid')">常用评价短语</a></li>
		  <li ><a data-toggle="tab" href="#beid" onclick="funduan('beiid')">常用备注短语</a> </li>
          <li ><a data-toggle="tab" href="#liud" onclick="funduan('liuid')">常用退款留言短语</a> </li>
    	</ul>
		 <div class="modal-body">
			 <div class="tab-content">
				  <div id="pingd" class="tab-pane active">
				   <form class="form-horizontal">
		           <textarea class="textarea" id="pingid" placeholder="请输入你要设置的评价短语" style="width: 515px; height: 150px"></textarea>
		           </form>
				  </div>
				  <div id="beid" class="tab-pane">
				   <form class="form-horizontal">
		           <textarea class="textarea" id="beiid" placeholder="请输入你要设置的备注短语" style="width: 515px; height: 150px"></textarea>
		           </form>
				  </div>
				  <div id="liud" class="tab-pane">
				   <form class="form-horizontal">
		           <textarea class="textarea" id="liuid" placeholder="请输入你要设置的退货留言短语" style="width: 515px; height: 150px"></textarea>
		           </form>
				  </div>
				  </div>
	        </div>
		<div class="footer">
			 <div  class="mesWindowBottom">	
				 <input type="button" class="btn btn-primary" style="padding: 3px 10px;" onclick="tijiao();" value="确定"><input type="button" onclick="closeMsg('');" style="margin-left:8px;padding: 3px 10px;" value="关闭">	
			 </div>
		 </div>
	 </div>-->
	 <!--Profile Form订购高级版--->
	 <div id="buyvip" tabindex="-1" role="dialog" data-hasfoot="true" data-backdrop="static" class="sui-modal hide fade" data-width="720px" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-hidden="true" class="sui-close">×</button>
        <h4 id="myModalLabel" class="modal-title">请订购后再重新打开插件使用所有功能！</h4>
      </div>
      <div class="modal-body" style="overflow: hidden;">
      	<div style="font-size: 14px ; width: 700px ; margin: auto ; padding: 0; color: #000000 ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif;">
			     <div style="float: none;margin: 0.0px;width: 700.0px;"><img src="http://img04.taobaocdn.com/imgextra/i4/877021141/TB2XzaOXVXXXXXbXpXXXXXXXXXX-877021141.png" /></div>
				 <div style=" float: none;margin: 0.0px;width: 700.0px;"><img src="http://img04.taobaocdn.com/imgextra/i4/877021141/TB28UWOXVXXXXbjXXXXXXXXXXXX-877021141.png" /></div>
				 <div class="pay"><a href=javascript:openlines_s("http://qianniu.fuwu.taobao.com/ser/confirmOrder.htm?&amp;commonParams=activityCode:ACT_877021141_140520133428;agentId:marketing-0;marketKey:FWSPP_MARKETING_URL;promIds:[10330152]&amp;subParams=cycleNum:3,cycleUnit:2,itemCode:FW_GOODS-1827490-v2&amp;sign=AA84C5900A0D6DCFF9E6AA8636F26CA1")><img style="padding-top: 38px;" src="http://img03.taobaocdn.com/imgextra/i3/877021141/TB2U_KOXVXXXXb5XXXXXXXXXXXX-877021141.png" /></a><a href=javascript:openlines_s("http://qianniu.fuwu.taobao.com/ser/confirmOrder.htm?&amp;commonParams=activityCode:ACT_877021141_140520133428;agentId:marketing-0;marketKey:FWSPP_MARKETING_URL;promIds:[10330152]&amp;subParams=cycleNum:6,cycleUnit:2,itemCode:FW_GOODS-1827490-v2&amp;sign=11E7A92AFB51592F61296025864744BE")><img style="padding-top: 38px;" src="http://img04.taobaocdn.com/imgextra/i4/877021141/TB2Py1OXVXXXXc4XXXXXXXXXXXX-877021141.png" /></a><a href=javascript:openlines_s("http://qianniu.fuwu.taobao.com/ser/confirmOrder.htm?&amp;commonParams=activityCode:ACT_877021141_140520133428;agentId:marketing-0;marketKey:FWSPP_MARKETING_URL;promIds:[10330152]&amp;subParams=cycleNum:12,cycleUnit:2,itemCode:FW_GOODS-1827490-v2&amp;sign=74CCAC854C79525290FE8B2A407D979F")><img src="http://img04.taobaocdn.com/imgextra/i4/877021141/TB2ZrGPXVXXXXacXXXXXXXXXXXX-877021141.png" /></a></div>
				 <div class="info">
				      <div class="info_left" id="neworder">付款后请关闭插件，再点击“交易管理”进入方可使用高级版功能！</div>
					  <div class="info_right">客服咨询：<a href="javascript:void();" onclick="wangwangPP('爱用科技')"><img alt="点这里给我发消息" border="0" src="http://cdn.zzgdapp.com/item/web/img/online.png" /></a></div>
					  <div class="clear"></div>
				 </div>
			</div>
      </div>

    </div>
  </div>
</div>
    <div id="erroinfo" class="modal hide fade">
            <div class="modal-header">
                <button type="button" class="close" id="hehehe" onclick="" data-dismiss="modal">×</button>
                <h4>温馨提示</h4>
            </div>
            <div class="modal-body"  id="errodata2">
            </div>
            <div class="modal-footer">
               <a style="margin-left: 3px;" href="javascript:void(0)"class="btn" id="hahaha" onclick="" data-dismiss="modal">确定</a>
            </div>
        </div>
        <div class="modal hide fade" id="twosure2">
			        <div class="modal-header">
			            <button type="button" class="close" data-dismiss="modal">×</button>
			            <h4>温馨提示</h4>
			        </div>
			        <div class="modal-body" id="twosureboby2"></div>
			        <div class="modal-footer">
			            <a href="javascript:void(0);" class="sui-btn btn-primary" data-dismiss="modal" id="twosureon2" onclick="">确定</a> <a href="javascript:void(0);"
			                class="btn" data-dismiss="modal">取消</a>
			        </div>
	    </div>
	    <!--Profile Form一键导入黑名单-->
     <div id="systems" tabindex="-1" role="dialog" data-hasfoot="tue" data-backdrop="static" class="sui-modal hide fade" data-width="650px" data-height='300px' style="font-size: 12px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-hidden="true" class="sui-close">×</button>
        <h4 id="myModalLabel" class="modal-title">我的设置</h4>
      </div>
      <div class="modal-body" >
      	<div class="grid-demo">
      		<div class="sui-row-fluid">
      			<div  class="span2">
		<ul class="sui-nav nav-tabs nav-primary  tab-vertical ">
		  <li class="active"><a class="sendh" href="#sendh" data-toggle="tab" onclick="showsendh();">卖家地址库</a></li>
		  <li ><a   href="javascript:$('.setwl').show();$('.setlan').hide();$('#setwl').tab('show');setwlcompay('mozj');" >设置物流</a></li>
		  <li class="setwl"  style="margin-left: 20px;"><a id="setwl" href="#setonwl" data-toggle="tab" onclick="setwlcompay('mozj')" >在线下单</a></li>
		  <li class="setwl" style="margin-left: 20px;"><a href="#setoffwl" data-toggle="tab"  onclick="setwlcompay('mozj2')" >自己联系</a></li>
		 
		  <li><a href="javascript:$('.setlan').show();$('.setwl').hide();$('#setlan').tab('show');funduan('beiid');">短语设置</a></li>
		  <li class="setlan" style="margin-left: 20px;"><a id="setlan" href="#beizfast" data-toggle="tab" onclick="funduan('beiid')">备注短语</a></li>
		  <li class="setlan" style="margin-left: 20px;"><a href="#ratefast" data-toggle="tab" onclick="funduan('pingid')">评价短语</a></li>
		  <li class="setlan" style="margin-left: 20px;"><a href="#refundfast" data-toggle="tab" onclick="funduan('liuid')">退款留言</a></li>
		  <li class="setlan" style="margin-left: 20px;"><a href="#wwckfast" data-toggle="tab" onclick="cfsz()">旺旺催付</a></li>
		  <li><a href="#glsz" data-toggle="tab" onclick="load_glset();">地址预警</a></li>
		</ul>
		</div>
		<div  class="span10">
			<div class="tab-content"  style="max-height: 300px;overflow: auto;">
				<div id="sendh" class="tab-pane active" >
						<div style="text-align: right;margin-bottom: 10px;">
							<a  class="sui-btn  btn-primary"  onclick="showadd()" >新增地址库</a>
						</div>
	                    <table class="sui-table table-striped table-bordered table-hover" style="text-align:center;" id="external_newadds" >
				            <thead ><tr style="background-color:silvery;">
				            	<th width="13%">发货地址</th>
				            	<th width="13%">退货地址</th>
				            	<th width="52%">地址详情</th>
				            	<th width="22%">操作</th>
				            </tr></thead>
						    <tbody id="external_newadd">
						    	<tr>
						    		<td>
						    			<div class="sui-loading loading-small " style="overflow: hidden;"><i class="sui-icon icon-pc-loading"></i></div>
						    		</td>
						    	</tr>
						    </tbody >
		       			</table>
			  </div>
			  <!--Profile Form默认在线下单公司-->
			  <div id="setonwl" class="tab-pane" >
			  	<div class="sui-msg msg-block msg-tips" >
					<div class="msg-con">每项物流服务最多可设置5个默认物流公司！</div>
					<s class="msg-icon"></s>
				</div>
				<div style="position:absolute;right:30px">
					<button type="button"  class="sui-btn btn-primary " onclick="savesend('online');">保存</button>
        		</div>
				  	<div id="mozj" style="width: 100%;">
				  		<div class="sui-loading loading-small " style="overflow: hidden;"><i class="sui-icon icon-pc-loading"></i></div>
					</div>
				
			  </div>
			  <!--Profile Form默认自己联系物流公司-->
			  <div id="setoffwl" class="tab-pane" >
			  	<div class="sui-msg msg-block msg-tips" >
					<div class="msg-con">每项物流服务最多可设置5个默认物流公司！</div>
					<s class="msg-icon"></s>
				</div>
				<div style="position:absolute;right:30px">
					<button type="button"  class="sui-btn btn-primary " onclick="savesend('offline');">保存</button>
        		</div>
				<div id="mozj2" style="width: 100%;">
				  		<div class="sui-loading loading-small " style="overflow: hidden;"><i class="sui-icon icon-pc-loading"></i></div>
					</div>

			  </div>
			  <!--Profile Form备注短语设置-->
	        <div id="beizfast" class="tab-pane" >
	        	<div class="sui-msg msg-block msg-tips" >
					<div class="msg-con">换行即可新增短语，每行为一条短语！</div>
					<s class="msg-icon"></s>
				</div>
				   <form class="sui-form form-horizontal">
		           <textarea class="textarea" id="beiid" placeholder="请输入你要设置的备注短语" rows="10" style="width: 97%;resize: none;"></textarea>
		           </form>
		           <div style="float: right;">
					<button type="button"  class="sui-btn btn-primary " onclick="savefast('beiid');">保存</button>
        		</div>
				  </div>
				  <!--Profile Form评价短语设置-->
			  <div id="ratefast" class="tab-pane" >
			  	<div class="sui-msg msg-block msg-tips" >
					<div class="msg-con">换行即可新增短语，每行为一条短语！</div>
					<s class="msg-icon"></s>
				</div>
				   <form class="sui-form form-horizontal">
		           <textarea class="textarea" id="pingid" placeholder="请输入你要设置的评价短语" rows="10" style="width: 97%;resize: none;"></textarea>
		           </form>
		           <div style="float: right;">
					<button type="button"  class="sui-btn btn-primary " onclick="savefast('pingid');">保存</button>
        		</div>
				  </div>
				  <!--Profile Form退款留言短语设置-->
				  <div id="refundfast" class="tab-pane" >
				  	<div class="sui-msg msg-block msg-tips" >
					<div class="msg-con">换行即可新增短语，每行为一条短语！</div>
					<s class="msg-icon"></s>
				</div>
					   <form class="sui-form form-horizontal">
			           <textarea class="textarea" id="liuid" placeholder="请输入你要设置的退款留言短语" rows="10" style="width: 97%;resize: none;"></textarea>
			           </form>
			           <div style="float: right;">
					<button type="button"  class="sui-btn btn-primary " onclick="savefast('liuid');">保存</button>
        		</div>
				  </div>
				  <!--Profile Form催付设置-->
				  <div id="wwckfast" class="tab-pane">
				  	<p>
						<a href="javascript:void(0);" onclick="addcf('<买家姓名>');" >&lt;买家姓名&gt;</a>
				    	<a href="javascript:void(0);" onclick="addcf('<买家旺旺>');"  >&lt;买家旺旺&gt;</a>
				    	<a href="javascript:void(0);" onclick="addcf('<卖家旺旺>');"  >&lt;卖家旺旺&gt;</a>
				    	<a href="javascript:void(0);" onclick="addcf('<订单编号>');"  >&lt;订单编号&gt;</a>
				    	<a href="javascript:void(0);" onclick="addcf('<下单时间>');"  >&lt;下单时间&gt;</a>
				    	<a href="javascript:void(0);" onclick="addcf('<订单链接>');"  >&lt;订单链接&gt;</a>
		    		</p>
		    <p style="color: red;">* 先用鼠标选择要插入的位置，点击<名称>就可以插入对应的值哦！</p>
		    <form class="sui-form form-horizontal">
		    <textarea class="textarea"  onmousedown="savePos(this)" onmouseup="savePos(this)" name="ta" id="ta" style="width: 97%; height: 60px;resize: none;"></textarea>
		    </form>
		    <p>插入催付模版：<input type="button" onclick="recfsz();" id="recfsz_but" class="sui-btn btn-mini btn-primary" style="float:right;" value="催付刷新 ">
		    				<span  id="recfsz_refsh"  style="float:right;display:none;text-align:center; padding:0 5px;">
			<img src="http://cdn.zzgdapp.com/trade/mobile/images/loding.gif" align="absmiddle" />
				</span>	
		    </p>
			<a href="javascript:void(0)" onclick="addcf('亲爱的\<买家姓名\>，您拍下的订单\<订单编号\>我们一直留着，麻烦付款一下。稍后我们会立即为您发货。详情链接：\<订单链接\>');"><p style="width: 97%;margin: 0px 0px -10px 0px;padding: 0px;border:1px solid #ccc;text-align:center" class="font_wsl">亲爱的&lt;买家姓名&gt;，您拍下的订单&lt;订单编号&gt;我们一直留着，麻烦付款一下。稍后我们会立即为您发货。详情链接：&lt;订单链接&gt; </p></a><br/>
			<a href="javascript:void(0)" onclick="addcf('亲爱的\<买家姓名\>，您在\<卖家旺旺\>购买的宝贝还未付款哦，请尽快付款以便我们以最快的速度发货哦！详情链接：\<订单链接\>');"><p style="width: 97%;margin: 0px 0px -10px 0px;padding: 0px;border:1px solid #ccc;text-align:center" class="font_wsl">亲爱的&lt;买家姓名&gt;，您在&lt;卖家旺旺&gt;购买的宝贝还未付款哦，请尽快付款以便我们以最快的速度发货哦！详情链接：&lt;订单链接&gt; </p></a><br/>
			<a href="javascript:void(0)" onclick="addcf('亲爱的\<买家旺旺\>，您下单的宝贝还没付款哦。我们会为您预留1天，每天下午4点前付款会当天发货哦。详情链接：\<订单链接\>');"><p style="width: 97%;margin: 0px 0px -10px 0px;padding: 0px;border:1px solid #ccc;text-align:center" class="font_wsl">亲爱的&lt;买家旺旺&gt;，您下单的宝贝还没付款哦。我们会为您预留1天，每天下午4点前付款会当天发货哦。详情链接：&lt;订单链接&gt; </p></a>
			<br />
			<div style="float: right;">
					<button type="button"  class="sui-btn btn-primary " onclick="cfsave();">保存</button>
        		</div>
				  </div>
				  <!--Profile Form预警地址-->
				  <div id="glsz" class="tab-pane" >

		 <form class="sui-form form-horizontal">
		 	<div class="sui-msg msg-block msg-tips" >
					<div class="msg-con">如地址中含有特殊地址，地址将会红色显示， 地址之间用逗号隔开。</div>
					<s class="msg-icon"></s>
				</div>
		 		<label  class="checkbox-pretty">
					<input type="checkbox"  id="tsaddr_check"  ><span>乡镇特殊地址提醒</span>
				</label>
		 	<p>
		 	<textarea class="textarea" id="dangeraddr" placeholder="村, 镇, 乡, 旗, 屯, 自治区, 自治州, 邮电, 邮局, 政府, 监狱, 军区, 部队, 寺, 庙, 香港, 澳门, 台湾, 海外" rows="10" style="width: 97%;resize: none;"></textarea>
		 	
		 	</p>
		 </form>
		 		<div style="float: right;">
		 			
					<button type="button"  class="sui-btn btn-primary " onclick="saveglsz();">保存</button>
        		</div>
				  </div>
			  </div>
	        </div>
	       </div>
	       </div>
	      </div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" data-ok="modal" class="sui-btn btn-primary btn-large" onclick="importing();">确定导入</button>
        <button type="button" data-dismiss="modal" class="sui-btn btn-default btn-large">取消</button>
      </div>-->
    </div>
  </div>
</div>

     <div id="editsendh" tabindex="-1" role="dialog" data-hasfoot="true" data-width="550px"  class="sui-modal hide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-hidden="true" class="sui-close" >×</button>
        <h4 id="editsendhLabel" class="modal-title"></h4>
      </div>
      <div class="modal-body" >
      	<form class="sui-form form-horizontal sui-validate">
      		<div class="control-group">
		        <label for="more_name1" class="control-label">发货人姓名：</label>
			    <div class="controls">
			      <input type="text" id="more_name1"  data-rules="required" name="more_name1">
			    </div>
		    </div>
		    
		    <div class="control-group">
		        <label for="more_mobile1" class="control-label">手机：</label>
			    <div class="controls">
			      <input type="text" id="more_mobile1"  data-rules="required|mobile" name="more_mobile1">
			    </div>
			    
			</div>
			<div class="control-group">
				<label for="more_phone1" class="control-label">电话：</label>
			    <div class="controls">
			      <input type="text" id="more_phone1"  data-rules="required|tel" name="more_phone1">
			    </div>
		    </div>
		    <div class="control-group">
				<label class="control-label">省/市/区：</label>
			    <div class="controls">
			     <!--  <select style="width: 100px;" id="morep_id1">
		                            <option>省</option>
		                        </select>
		                        <select style="width: 100px;" id="morec_id1">
		                            <option>市</option>
		                        </select >
		                        <select style="width: 100px;" id="mored_id1">
		                            <option>区</option>
		                        </select> -->
		                        <span class="sui-dropdown dropdown-bordered select">
													<span class="dropdown-inner" >
														<a role="button" href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle">
															<input value=""id="w_Choice" type="hidden" onchange=p_Choice();>
															<i class="caret"></i>
												       		<span></span>
							       						</a>
							        					<ul role="menu" id="morep_id1" aria-labelledby="drop4" class="sui-dropdown-menu" style="width: 50px;">
							        					</ul>
													</span>
												</span>  
						                            <!--<select class="input-medium " data-rules="required" style="width: 130px;" id="more_shen"></select>-->
						                             <!--   <option>省</option>-->
						                            <span class="sui-dropdown dropdown-bordered select">
														<span class="dropdown-inner">
															<a role="button" href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle">
																<input value="" type="hidden" onchange="c_Choice()">
																<i class="caret"></i>
												       			<span></span>
							       							</a>
							        						<ul role="menu" id="morec_id1" aria-labelledby="drop4" class="sui-dropdown-menu" style="width: 50px;">
							        						</ul>
														</span>
													</span>  
						                            <!--<select class="input-medium " data-rules="required" style="width: 130px;" id="more_shi"></select >-->
						                             <!--   <option>市</option>-->
						                            <span class="sui-dropdown dropdown-bordered select">
														<span class="dropdown-inner">
															<a role="button" href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle">
																<input value="" type="hidden">
																<i class="caret"></i>
												       			<span></span>
							       							</a>
							        						<ul role="menu" id="mored_id1" aria-labelledby="drop4" class="sui-dropdown-menu" style="width: 50px;">
							        						</ul>
														</span>
													</span>  
			    </div>
		    </div>
		    <div class="control-group">
				<label for="more_address1" class="control-label">街道地址：</label>
			    <div class="controls">
			      <input type="text" id="more_address1" class="input-large"  data-rules="required" name="more_address1">
			    </div>
		    </div>
		    <div class="control-group">
				<label for="more_zip1" class="control-label">邮政编码：</label>
			    <div class="controls">
			      <input type="text" id="more_zip1"  data-rules="required|zip" name="more_zip1">
			    </div>
		    </div>
		    <div class="control-group">
				<label for="more_company1" class="control-label">公司：</label>
			    <div class="controls">
			      <input type="text" id="more_company1"   name="more_company1">
			    </div>
		    </div>
		    <div class="control-group">
				<label for="more_momes1" class="control-label">备注：</label>
			    <div class="controls">
			      <input type="text" id="more_momes1"   name="more_momes1">
			    </div>
		    </div>
		    <div class="controls">
		                   		如保存地址时提示“非法市”请<a href="javascript:upArea();">更新地址</a>后，再重新编辑保存
		    </div>
		    
		    
		</form>
      	<form class="sui-form">
		                    
		                    
		  </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="editsendhbut"  class="sui-btn btn-primary btn-large" onclick="sureeditk();">编辑</button>
        <button type="button" data-dismiss="modal" class="sui-btn btn-default btn-large" >取消</button>
      </div>
    </div>
  </div>
</div>
<script>
function ittoolspam(spamurl,spamtype){
	if(true){
		authmap=window.localStorage.getItem("authmap");
		spamurl='http://mcs.zzgdapp.com/ad/action?p='+spamurl+'&n='+user_nick+'&e='+spamtype+'&'+authmap;
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
</script>
<script>
/**
 * 系统设置
 * @author Duanhq
 */
function setSystem(){
	
	ittoolspam('AD20140730133000','xtszp');
	$('.sendh').tab('show');
	showsendh();
	
	$('.setwl').hide();
	$('.setlan').hide();
	$('#systems').modal('show');
}
/**
 * 显示卖家地址库-系统设置
 * @author Duanhq
 */
function showsendh(){
	 $('.setwl').hide();
	$('.setlan').hide();
  		 $("#external_newadd").html('<tr><td><div class="sui-loading loading-small " style="overflow: hidden;"><i class="sui-icon icon-pc-loading"></i></div></td></tr>');
		 $('#systems').modal('resize');
		 QN.top.invoke({
 		 "cmd": "taobao.logistics.address.search",
		 "method": "get",
		 "success": function(rsp){
			 if(typeof  rsp=== 'string'){
	            	rsp = JSON.parse(rsp);
	            }
			if(rsp.logistics_address_search_response){
				    var datas={};
				    window.ftdata={};
				     $("#external_newadd").empty()
	                for(index in rsp.logistics_address_search_response.addresses.address_result){
	                     var result=rsp.logistics_address_search_response.addresses.address_result[index];
	                    	datas.province=result.province;
                        	datas.city=result.city;
	                   		datas.country=result.country;
	                   		datas.addr=result.addr;
	                   		datas.zip_code=result.zip_code;
	                   		datas.contact_name=result.contact_name;
	                   		datas.phone=result.phone;
	                   		datas.mobile_phone=result.mobile_phone;
	                   		datas.memo=result.memo;
	                   		datas.seller_company=result.seller_company;
	                   		datas.get_def=result.get_def;
	                   		datas.cancel_def=result.cancel_def;
	                    if(datas.get_def)datas.active='checked';
	                    if(datas.cancel_def)datas.actives='checked';
	                    datas.contact_id=result.contact_id;
	                    ftdata[index]=datas;
	                    var source = $("#external_newaddmo").html();
		   	            var template=Handlebars.compile(source);
		   	            var htmlstr = template(datas);
		   	            $("#external_newadd").append(htmlstr);   	      
			   	         datas={};  
	          		  }
	          		  $('#systems').modal('resize');
			}
	        },
	        error: function(msp){
	        	$("#external_newadd").empty()
                if(typeof msp === 'string'){
                    var msp = JSON.parse(msp);
                }else{
                    var msp= msp;
                }
                if(msp.sub_code=='subuser.has-no-permission'){
               	 /* $("#errodata2").html('<p>该子帐号无此操作权限，请通过主帐号设置开通相应权限！</p>');
                    $("#erroinfo").modal('show'); */
               }else{
               		$.alert('<p>操作失败，请重试！</p>');
                }
                
            }
		 });
		 $('#systems').modal('resize');
}
/**
 * 设置默认发货地址
 */
function setaddr(id){
		 var morid=id;
		 for(index in ftdata){
			 if(ftdata[index]['contact_id']==morid)
			 {
  		              QN.top.invoke({
							"cmd": "taobao.logistics.address.modify",
							"param": {'contact_id':morid,
              				          'contact_name':ftdata[index]['contact_name'],
	              				      'province':ftdata[index]['province'],
	              				      'city':ftdata[index]['city'],
	              				      'addr':ftdata[index]['addr'],
	              				      'phone':ftdata[index]['phone'],
		              				  'mobile_phone':ftdata[index]['mobile_phone'],
			              			  'country':ftdata[index]['country'],
				              		  'zip_code':ftdata[index]['zip_code'],
	              				      'get_def':true},
									  "success": function(rsp){
										  if(typeof  rsp=== 'string'){
							  					rsp = JSON.parse(rsp);
								            	}
	 	                     		    		if(rsp.error_response){
	 	                     		    			$.alert('<p>操作失败，请重试！</p>');
	 	                     	                 }else if(rsp.logistics_address_modify_response){
		 	                     	                	layer.msg('操作成功!', 1, 1);
	 	                     	                 }else{
		 	                     	                	$.alert('<p>操作失败，请重试！</p>');
	 	                     	                 }
	 	                     			 }
  		              			 });
			 }
		 }
}
/**
 * 设置默认退货地址
 */
function setaddr2(id){
		 var morid=id;
		 for(index in ftdata){
			 if(ftdata[index]['contact_id']==morid)
			 {
  		               QN.top.invoke({
							"cmd": "taobao.logistics.address.modify",
							"param": {'contact_id':morid,
              				          'contact_name':ftdata[index]['contact_name'],
	              				      'province':ftdata[index]['province'],
	              				      'city':ftdata[index]['city'],
	              				      'addr':ftdata[index]['addr'],
	              				      'phone':ftdata[index]['phone'],
		              				  'mobile_phone':ftdata[index]['mobile_phone'],
			              			  'country':ftdata[index]['country'],
				              		  'zip_code':ftdata[index]['zip_code'],
	              				      'cancel_def':true},
									  "success": function(rsp){
										  if(typeof  rsp=== 'string'){
							  					rsp = JSON.parse(rsp);
								            	}
	 	                     		    		if(rsp.error_response){
	 	                     		    			$.alert('<p>操作失败，请重试！</p>');
	 	                     	                 }else if(rsp.logistics_address_modify_response){
		 	                     	                	layer.msg('操作成功!', 1, 1);
	 	                     	                 }else{
		 	                     	                	$.alert('<p>操作失败，请重试！</p>');
	 	                     	                 }
	 	                     			 }
  		              			 });
			 }
		 }
}
/**
 * 删除地址库
 * @author Duanhq
 */
function sfdelete(sftid){
	$('#systems').modal('shadeIn');
	/*$("#twohints").html('<p>您确定要删除这个地址库吗,删除后将无法恢复！</p>');
	document.getElementById('hintok').setAttribute("onclick", "sureaddele("+sftid+");");
	$('#twohint').modal('show');*/
	$.confirm({
      title: '删除地址库',
      body: '您确定要删除这个地址库吗,删除后将无法恢复！',
      backdrop: false,
      okHide: function() {
      	sureaddele(sftid);
        /*$.alert({
          hasfoot: false,
          backdrop: false,
          title: '温馨提示',
          body: '删除地址库成功',
          timeout: 1000
        });*/
      },
      hide: function() {
        return $('#systems').modal('shadeOut');
      }
    });
    
}
function sureaddele(sftid){
	QN.top.invoke({
		 "cmd": "taobao.logistics.address.remove",
		 "param": {'contact_id':sftid},
		 "success": function (e){
			 if(typeof  e=== 'string'){
	            	e = JSON.parse(e);
	            }
			 var ruselt=e.logistics_address_remove_response.address_result.modify_date;
			 if(ruselt!=''){
				 	layer.msg('操作成功!', 1, 1);
	                $('#ext'+sftid).remove();
	            }else{
	            	$.alert('<p>操作失败，请重试！</p>');
	             }
		 },
		 error: function(msp){
             if(typeof msp === 'string'){
                 var msp = JSON.parse(msp);
             }else{
                 var msp= msp;
             }
             if(msp.sub_code=='subuser.has-no-permission'){
            	/*  $("#hints").html('<p>该子帐号无此操作权限，请通过主帐号设置开通相应权限！</p>');
		 	     showMsg('hint'); */
            }else{
            	$.alert('<p>'+msp.sub_msg+'</p>');
             }
         }
	 });
}
/**
 * 编辑地址库
 * @author Duanhq
 */
var sfedits;
function sfedit(sfktid){
	loadaddresS();
	$('#systems').modal('shadeIn');
	$("#morec_id1").empty();
	$("#mored_id1").empty();
	sfedits=sfktid;
	var areadata = window.localStorage.getItem("areadata");
	for(index in ftdata){
		 if(ftdata[index]['contact_id']==sfktid)
		 {  
				/*var p = document.getElementById("morep_id1");*/
		     	/*var morep = p.options;*/ 
		     	/*var morep = $("#morep_id1 li").length;*/
		     	/*var morep =$("#morep_id1 li:eq(0)").children('a').html();*/
		     	
		     	var tempValuep ='';
		     	templength =$("#morep_id1 li").length;
		     	for(var i=0;i<templength; i++){
		     		
		     		/*tempValuep = morep[i].value.split(',');*/
		     		tempValuep = $("#morep_id1 li:eq('"+i+"')").children('a').html();
		     		if(tempValuep == ftdata[index]['province'])  
		     		{
		     			/*morep[i].selected = true;*/
		     			$("#morep_id1 li").attr('class','');
		     			$("#morep_id1").siblings('a').children('input').val($("#morep_id1 li:eq('"+i+"') a").attr('value'));
		     			$("#morep_id1").siblings('a').children('span').html(tempValuep);
		     			$("#morep_id1 li a[value='"+$("#morep_id1 li:eq('"+i+"') a").attr('value')+"']").parent('li').attr('class','active');
		     			
		     			/*$("#morep_id1 li").attr('class','');
		     	        $("#morep_id1").siblings('a').children('input').val($("#morep_id1 li:eq('"+i+"') a").attr('value'));
		     	        $("#morep_id1").siblings('a').children('span').html(tempValuep);
		     	        $("#morep_id1 li a[value='"+tempValuep+"']").parent('li').attr('class','active');*/
		     			/*var sel= $("#morep_id1").find('option:selected').val();*/
						var sel = $("#morep_id1").siblings('a').children('input').val();		     			
		     			var object = eval("(" + areadata + ")");
		    			var vals = sel.split(",");
		    			var citys = object['citys'][vals[0]];
		    			var citycode = '';
		    			for(var i=0;i<citys.length;i++)
		    			{ 
		    				if(i==0)
		    				{   citycode = citys[i]['addcode'];
		    					/*$("#morec_id1").append("<option selected='selected' value='"+citys[i]['addcode']+","+citys[i]['address']+"'>"+citys[i]['address']+"</option>");*/
		    				 $("#morec_id1").siblings('a').children('input').val(citys[i]["addcode"]+','+citys[i]["address"]+'">'+citys[i]['address']);
		    			    	$("#morec_id1").siblings('a').children('span').html(citys[i]['address']);
		    			    	$("#morec_id1").append('<li role="presentation" class="active"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+citys[i]["addcode"]+','+citys[i]["address"]+'">'+citys[i]['address']+'</a></li>');
		    				}else{
		    				/*	$("#morec_id1").append("<option  value='"+citys[i]['addcode']+","+citys[i]['address']+"'>"+citys[i]['address']+"</option>");*/
		    		        	$("#morec_id1").append('<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+citys[i]["addcode"]+','+citys[i]["address"]+'">'+citys[i]['address']+'</a></li>');
		    				}
		    				
		    			}
		     			break;
		     		}
		     	}
		     	/*var c = document.getElementById("morec_id1");
		     	var morec = c.options;*/
		     	var tempValuec='';
		     	/*for(var i=0;i<morec.length; i++){*/
		     	for(var i=0;i<$("#morec_id1 li").length; i++){
		     		/*tempValuec = morec[i].value.split(',');*/
		     		tempValuec = $("#morec_id1 li:eq('"+i+"')").children('a').html();
		     		if(tempValuec == ftdata[index]['city'])   
		     		{
		     			/*morec[i].selected = true;*/
		     			$("#morec_id1 li").attr('class','');
		     			$("#morec_id1").siblings('a').children('input').val($("#morec_id1 li:eq('"+i+"') a").attr('value'));
		     			$("#morec_id1").siblings('a').children('span').html(tempValuec);
		     			 $("#morec_id1 li a[value='"+$("#morec_id1 li:eq('"+i+"') a").attr('value')+"']").parent('li').attr('class','active');
		     			 
		     			/*$("#morec_id1 li").attr('class','');
		     	        $("#morec_id1").siblings('a').children('input').val($("#morep_id1 li:eq('"+i+"') a").attr('value'));
		     	        $("#morec_id1").siblings('a').children('span').html(tempValuec);
		     	        $("#morec_id1 li a[value='"+tempValued+"']").parent('li').attr('class','active');*/
		     				/*var sel= $("#morec_id1").find('option:selected').val();*/
		     			 var sel=$("#morec_id1").siblings('a').children('input').val();
		     				var object = eval("(" + areadata + ")");
		     				var vals = sel.split(",");
		     				var districts = object['districts'][vals[0]];
		     				for(var i=0;i<districts.length;i++)
		     				{ 
		     					if(i==0)
		     					{   
		     						/*$("#mored_id1").append("<option selected='selected' value='"+districts[i]['addcode']+","+districts[i]['address']+"'>"+districts[i]['address']+"</option>");*/
		     						$("#mored_id1").siblings('a').children('input').val(districts[i]["addcode"]+','+districts[i]["address"]);
		     			        	$("#mored_id1").siblings('a').children('span').html(districts[i]['address']);
		     			        	$("#mored_id1").append('<li role="presentation" class="active"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+districts[i]["addcode"]+','+districts[i]["address"]+'">'+districts[i]['address']+'</a></li>');
		     					}else{
		     						/*$("#mored_id1").append("<option  value='"+districts[i]['addcode']+","+districts[i]['address']+"'>"+districts[i]['address']+"</option>");*/
		     			        	$("#mored_id1").append('<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+districts[i]["addcode"]+','+districts[i]["address"]+'">'+districts[i]['address']+'</a></li>');
		     					}
		     				}
		     			break;
		     		}
		     	}
		     	/*var d = document.getElementById("mored_id1");
		     	var mored = d.options;*/
		     	
		     	var tempValued='';
			/*for(var i=0;i<mored.length; i++){*/
				
		     	for(var i=0;i<$("#mored_id1 li").length; i++){
			     	
		     		/*tempValued = mored[i].value.split(',');*/
		     		tempValued = $("#mored_id1 li:eq('"+i+"')").children('a').html();
		     	
		     		if(tempValued == ftdata[index]['country'])   
		     		{
		     			/*mored[i].selected = true;*/
		     			$("#mored_id1 li").attr('class','');
		     			$("#mored_id1").siblings('a').children('input').val($("#mored_id1 li:eq('"+i+"') a").attr('value'));
		     			$("#mored_id1").siblings('a').children('span').html(tempValued);
		     			 $("#mored_id1 li a[value='"+$("#mored_id1 li:eq('"+i+"') a").attr('value')+"']").parent('li').attr('class','active');
		     			/*$("#mored_id1 li").attr('class','');
		     	        $("#mored_id1").siblings('a').children('input').val($("#morep_id1 li:eq('"+i+"') a").attr('value'));
		     	        $("#mored_id1").siblings('a').children('span').html(tempValued);
		     	        $("#mored_id1 li a[value='"+tempValued+"']").parent('li').attr('class','active');*/
		     			break;
		     		}
		     	}
			document.getElementById("more_name1").value=ftdata[index]['contact_name'];
			document.getElementById("more_zip1").value=ftdata[index]['zip_code'];
			document.getElementById("more_address1").value=ftdata[index]['addr'];
			document.getElementById("more_mobile1").value=ftdata[index]['mobile_phone'];
			if(ftdata[index]['phone']!=undefined||typeof(ftdata[index]['phone'])!="undefined")document.getElementById("more_phone1").value=ftdata[index]['phone'];
			if(ftdata[index]['seller_company']!=undefined||typeof(ftdata[index]['seller_company'])!="undefined")document.getElementById("more_company1").value=ftdata[index]['seller_company'];
			if(ftdata[index]['memo']!=undefined||typeof(ftdata[index]['memo'])!="undefined")document.getElementById("more_momes1").value=ftdata[index]['memo'];
		 }
	}
	$('#editsendhLabel').html('编辑地址库');
	$('#editsendh').modal('show');
	$('#editsendh').on('hidden', function(e){$('#systems').modal('shadeOut');})
}
function sureeditk(){
	$('#systems').modal('shadeOut');
	var sfktid=sfedits;
	for(index in ftdata){
		 if(ftdata[index]['contact_id']==sfktid)
		 {
			    /*var province=$("#morep_id1").find("option:selected").text();
					var city=$("#morec_id1").find("option:selected").text();
					var country=$("#mored_id1").find("option:selected").text();*/
				var province=$("#morep_id1").siblings('a').children('span').text();			    
				var city=$("#morec_id1").siblings('a').children('span').text();			    
				var country=$("#mored_id1").siblings('a').children('span').text();		
				
				var addr=$('#more_address1').val();
				var memos=$('#more_momes1').val();
				var mobile_phone=$('#more_mobile1').val();
				var phone=$('#more_phone1').val();
				var zip_code=$('#more_zip1').val();
				var contact_name=$('#more_name1').val();
				var company=$('#more_company1').val();
				var get_def=false;
				var cancel_def=false;  
				var regzip = /^\d{6}$/;
				var regmobile = /^\d\d{7,15}$/;
				var ph = /^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;   
					if(country==''){							
							country='.';
						}
				if(zip_code==''||contact_name==''||addr==''){
					layer.msg("亲，请填写完整的收货信息!", 2, function(){});
				}else if(!regzip.test(zip_code)&&zip_code!=''){
					layer.msg("亲，邮编只能是6位数字!", 2, function(){});
				}else if(addr.length<4||addr.length>60){
					layer.msg("区县以下的街道地址最少要4个字，最多不能超过60个字!", 2, function(){});
				}else if(phone==''&&mobile_phone==''){
					layer.msg("亲，电话和手机不能都为空!", 2, function(){});
				}else if(phone!=''&&!ph.test(phone)){
					layer.msg("电话请按此格式填写:区号-电话-分机号码！", 2, function(){});
				}else if(!regmobile.test(mobile_phone)&&mobile_phone!=''){
					layer.msg("手机号码必须由8到16位数字构成！", 2, function(){});
				}else{
					$('#editsendh').modal('hide');
					
						QN.top.invoke({
							"cmd": "taobao.logistics.address.modify ",
							"param": {'contact_id':sfktid,'contact_name':contact_name,
								'province':province,
								'city':city,
								'country':country,
								'addr':addr,
								'zip_code':zip_code,
								'phone':phone,
								'mobile_phone':mobile_phone,
								'seller_company':company,
								'memo':memos,
								'get_def':ftdata[index]['get_def'],
								'cancel_def':ftdata[index]['cancel_def']},
								    "success": function(rsp){
								    	
								    	if(typeof  rsp=== 'string'){
						  					rsp = JSON.parse(rsp);
							            }
							    		if(rsp.logistics_address_modify_response.address_result.modify_date!=''){
						  		 	        layer.msg('操作成功!', 1, 1);
					                        showsendh();
								          }else{
								        	  $.alert('<p>操作失败,请重试！</p>');
								          }
								    },
								    error: function(msp){
					                    if(typeof msp === 'string'){
					                        var msp = JSON.parse(msp);
					                    }else{
					                        var msp= msp;
					                    }
					                    if(msp.sub_code=='subuser.has-no-permission'){
					                    	/* $("#hints").html('<p>该子帐号无此操作权限，请通过主帐号设置开通相应权限！</p>');
							  		 	    showMsg('hint'); */
					                    }else if(msp.sub_msg!=''){
					                    	$.alert('<p>'+msp.sub_msg+'</p>');
					                    }else{
					                    	$.alert('<p>操作失败,请重试！</p>');
						                    }
					                }    		       	
						 });
					}


			 }
	}
}
function upArea(){
		 $.ajax({
			    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/getArea',
			    type: 'POST',
			    dataType:'html',
			    data:{},
			    timeout:10000,
		     	success: function(datas){ 
			    	 window.localStorage.setItem("areadata",datas); 
			    	 sfedit(sfedits);   
			    	 /* $("#hints").html('<p>更新成功！</p>');
			 	        showMsg('hint');*/
		     },
		     error:function(msp){
		     	console.log(msp);
		     }
		 });
}
	/* Profile Form 取省市区*/
	function loadaddresS()
	{
		
		 var areadata = window.localStorage.getItem("areadata");
		 if(areadata=="null"||areadata==null||areadata.length<5){
			 $.ajax({
				    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/getArea',
				    type: 'POST',
				    dataType:'html',
				    data:{},
				    timeout:10000,
			     	success: function(datas){ 
				    	 window.localStorage.setItem("areadata",datas); 
				    	 loaddatA();   
			     }
			 });
		 }else{
			 loaddatA();
			 }
	}
	
	/* Profile Form取省*/
	function loaddatA(){
		var areadata = window.localStorage.getItem("areadata");
		$("#morep_id1").empty();
		$("#morec_id1").empty();
		$("#mored_id1").empty();
		var object = eval("(" + areadata + ")");
		var provinces = object['province'];		
		var procode ='';
		for(var i=0;i<provinces.length;i++)
		{ 
			if(provinces[i]['address']=='上海')
			{   procode = provinces[i]['addcode'];
				/*$("#morep_id1").append("<option selected='selected' value='"+provinces[i]['addcode']+","+provinces[i]['address']+"'>"+provinces[i]['address']+"</option>");*/
				$("#morep_id1").siblings('a').children('input').val(provinces[i]["addcode"]+','+provinces[i]["address"]+'">'+provinces[i]['address']);
		    	$("#morep_id1").siblings('a').children('span').html(provinces[i]['address']);
		    	$("#morep_id1").append('<li role="presentation" class="active"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+provinces[i]["addcode"]+','+provinces[i]["address"]+'">'+provinces[i]['address']+'</a></li>'); 
			}else{
				/*$("#morep_id1").append("<option  value='"+provinces[i]['addcode']+","+provinces[i]['address']+"'>"+provinces[i]['address']+"</option>");*/
	        	$("#morep_id1").append('<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+provinces[i]["addcode"]+','+provinces[i]["address"]+'">'+provinces[i]['address']+'</a></li>');
			}
		}
		var citys = object['citys'][procode];
		var citycode = '';
		for(var i=0;i<citys.length;i++)
		{ 
			if(citys[i]['address']=='上海市')
			{   citycode = citys[i]['addcode'];
			
				/*$("#morec_id1").append("<option selected='selected' value='"+citys[i]['addcode']+","+citys[i]['address']+"'>"+citys[i]['address']+"</option>");*/
			 	$("#morec_id1").siblings('a').children('input').val(citys[i]["addcode"]+','+citys[i]["address"]+'">'+citys[i]['address']);
		    	$("#morec_id1").siblings('a').children('span').html(citys[i]['address']);
		    	$("#morec_id1").append('<li role="presentation" class="active"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+citys[i]["addcode"]+','+citys[i]["address"]+'">'+citys[i]['address']+'</a></li>');
			}else{
				/*$("#morec_id1").append("<option  value='"+citys[i]['addcode']+","+citys[i]['address']+"'>"+citys[i]['address']+"</option>");*/
	        	$("#morec_id1").append('<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+citys[i]["addcode"]+','+citys[i]["address"]+'">'+citys[i]['address']+'</a></li>');
				
			}
		}
		var districts = object['districts'][citycode];
		for(var i=0;i<districts.length;i++)
		{ 
			if(districts[i]['address']=='杨浦区')
			{   
				/*$("#mored_id1").append("<option selected='selected' value='"+districts[i]['addcode']+","+districts[i]['address']+"'>"+districts[i]['address']+"</option>");*/
				$("#mored_id1").siblings('a').children('input').val(districts[i]["addcode"]+','+districts[i]["address"]);
	        	$("#mored_id1").siblings('a').children('span').html(districts[i]['address']);
	        	$("#mored_id1").append('<li role="presentation" class="active"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+districts[i]["addcode"]+','+districts[i]["address"]+'">'+districts[i]['address']+'</a></li>');
			}else{
				/*$("#mored_id1").append("<option  value='"+districts[i]['addcode']+","+districts[i]['address']+"'>"+districts[i]['address']+"</option>");*/
	        	$("#mored_id1").append('<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+districts[i]["addcode"]+','+districts[i]["address"]+'">'+districts[i]['address']+'</a></li>');
			}
			
		}
		$("#morep_id1").trigger("create");
		$("#morec_id1").trigger("create");
		$("#mored_id1").trigger("create");
		/*$("#morep_id1").change(p_Choice);
		$("#morec_id1").change(c_Choice);*/
	}
	/* Profile Form取省下面的市区*/
	function p_Choice()
	{   
		var areadata = window.localStorage.getItem("areadata");
		/*var sel= $("#morep_id1").find('option:selected').val();*/
		var sel=$("#morep_id1").siblings('a').children('input').val();	
		if(areadata!=null)
		{
			var object = eval("(" + areadata + ")");
			var vals = sel.split(",");
			/*取得城市的父CODE*/
			var citys = object['citys'][vals[0]];
			$("#morec_id1").empty();		
			var citycode = '';
			for(var i=0;i<citys.length;i++)
			{ 
				if(i==0)
				{   citycode = citys[i]['addcode'];
					/*$("#morec_id1").append("<option selected='selected' value='"+citys[i]['addcode']+","+citys[i]['address']+"'>"+citys[i]['address']+"</option>");*/
				$("#morec_id1").siblings('a').children('input').val(citys[i]["addcode"]+','+citys[i]["address"]+','+citys[i]['address']);
	        	$("#morec_id1").siblings('a').children('span').html(citys[i]['address']);
	        	$("#morec_id1").append('<li role="presentation" class="active"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+citys[i]["addcode"]+','+citys[i]["address"]+'">'+citys[i]['address']+'</a></li>');
				}else{
					/*$("#morec_id1").append("<option  value='"+citys[i]['addcode']+","+citys[i]['address']+"'>"+citys[i]['address']+"</option>");*/
	            	$("#morec_id1").append('<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+citys[i]["addcode"]+','+citys[i]["address"]+'">'+citys[i]['address']+'</a></li>');
				}
				
			}
			var districts = object['districts'][citycode];
			$("#mored_id1").empty();	
			for(var i=0;i<districts.length;i++)
			{ 
				if(i==0)
				{   
				/*	$("#mored_id1").append("<option selected='selected' value='"+districts[i]['addcode']+","+districts[i]['address']+"'>"+districts[i]['address']+"</option>");*/
					$("#mored_id1").siblings('a').children('input').val(districts[i]["addcode"]+','+districts[i]["address"]);
	            	$("#mored_id1").siblings('a').children('span').html(districts[i]['address']);
	            	$("#mored_id1").append('<li role="presentation" class="active"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+districts[i]["addcode"]+','+districts[i]["address"]+'">'+districts[i]['address']+'</a></li>');
				}else{
					/*$("#mored_id1").append("<option  value='"+districts[i]['addcode']+","+districts[i]['address']+"'>"+districts[i]['address']+"</option>");*/
	            	$("#mored_id1").append('<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+districts[i]["addcode"]+','+districts[i]["address"]+'">'+districts[i]['address']+'</a></li>');
				}
				
			}
			$("#morec_id1").trigger("create");
			$("#mored_id1").trigger("create");
			$("#morec_id1").change(c_Choice);
		}
	}
	/* Profile Form取市下面的区*/
	function c_Choice()
	{
		var areadata = window.localStorage.getItem("areadata");
		
		/*var sel= $("#morec_id1").find('option:selected').val();*/
		 var sel=$("#morec_id1").siblings('a').children('input').val();
		if(areadata!=null)
		{
			var object = eval("(" + areadata + ")");

			var vals = sel.split(",");

			var districts = object['districts'][vals[0]];
			$("#mored_id1").empty();	
			for(var i=0;i<districts.length;i++)
			{ 
				if(i==0)
				{   
					/*$("#mored_id1").append("<option selected='selected' value='"+districts[i]['addcode']+","+districts[i]['address']+"'>"+districts[i]['address']+"</option>");*/
					$("#mored_id1").siblings('a').children('input').val(districts[i]["addcode"]+','+districts[i]["address"]);
	            	$("#mored_id1").siblings('a').children('span').html(districts[i]['address']);
	            	$("#mored_id1").append('<li role="presentation" class="active"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+districts[i]["addcode"]+','+districts[i]["address"]+'">'+districts[i]['address']+'</a></li>');
				}else{
					/*$("#mored_id1").append("<option  value='"+districts[i]['addcode']+","+districts[i]['address']+"'>"+districts[i]['address']+"</option>");*/
	            	$("#mored_id1").append('<li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:void(0);" value="'+districts[i]["addcode"]+','+districts[i]["address"]+'">'+districts[i]['address']+'</a></li>');
				}
				
			}
			$("#mored_id1").trigger("create");
		}
	}
/**
 * 新增卖家地址库
 * @author Duanhq
 */
function showadd(){
	loadaddresS();
	document.getElementById("more_name1").value='';
	document.getElementById("more_zip1").value='';
	document.getElementById("more_address1").value='';
	document.getElementById("more_mobile1").value='';
	document.getElementById("more_phone1").value='';
	document.getElementById("more_company1").value='';
	document.getElementById("more_momes1").value='';
	$('#systems').modal('shadeIn');
	$('#editsendhLabel').html('新增地址库');
	document.getElementById('editsendhbut').setAttribute("onclick", "sureadd();");
	$('#editsendhbut').html('新增');
	$('#editsendh').modal('show');
	$('#editsendh').on('hidden', function(e){$('#systems').modal('shadeOut');})
}
function sureadd()
{
		/*var province=$("#morep_id1").find("option:selected").text();
		var city=$("#morec_id1").find("option:selected").text();
		var country=$("#mored_id1").find("option:selected").text();*/
		var province=$("#morep_id1").siblings('a').children('span').text();	
		var city=$("#morec_id1").siblings('a').children('span').text();	
		var country=$("#mored_id1").siblings('a').children('span').text();
		var addr=$('#more_address1').val();
		var memos=$('#more_momes1').val();
		var mobile_phone=$('#more_mobile1').val();
		var phone=$('#more_phone1').val();
		var zip_code=$('#more_zip1').val();
		var contact_name=$('#more_name1').val();
		var company=$('#more_company1').val();
		var get_def=false;
		var cancel_def=false;  
		var regzip = /^\d{6}$/;
		var regmobile = /^\d\d{7,15}$/;
		var ph = /^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;  
		/* newaddress=='' || */		
		if(zip_code==''||contact_name==''||addr==''){
			layer.msg("亲，请填写完整的收货信息!", 2, function(){});
		}else if(!regzip.test(zip_code)&&zip_code!=''){
			layer.msg("亲，邮编只能是6位数字!", 2, function(){});
		}else if(addr.length<4||addr.length>60){
			layer.msg("区县以下的街道地址最少要4个字，最多不能超过60个字!", 2, function(){});
		}else if(phone==''&&mobile_phone==''){
			layer.msg("亲，电话和手机不能都为空!", 2, function(){});
		}else if(phone!=''&&!ph.test(phone)){
			layer.msg("电话请按此格式填写:区号-电话-分机号码！", 2, function(){});
		}else if(!regmobile.test(mobile_phone)&&mobile_phone!=''){
			layer.msg("手机号码必须由8到16位数字构成！", 2, function(){});
		}else{
			$('#editsendh').modal('hide');
				QN.top.invoke({
					"cmd": "taobao.logistics.address.add",
					"param": {'contact_name':contact_name,
						'province':province,
						'city':city,
						'country':country,
						'addr':addr,
						'zip_code':zip_code,
						'phone':phone,
						'mobile_phone':mobile_phone,
						'seller_company':company,
						'memo':memos,
						'get_def':get_def,
						'cancel_def':cancel_def},
						    "success": function(rsp){
						    	if(typeof  rsp=== 'string'){
				  					rsp = JSON.parse(rsp);
					            }
					    		if(rsp.logistics_address_add_response){
					    			layer.msg('操作成功!', 1, 1);
					    			showsendh();
						          }else{
						        	  $.alert('<p>区县以下的街道地址不能全是字母！</p>');
						          }
						    },
						    error: function(msp){
			                    /*请求出错处理 */
			                    /* alert(JSON.stringify(msp));*/
			                    if(typeof msp === 'string'){
			                        var msp = JSON.parse(msp);
			                    }else{
			                        var msp= msp;
			                    }
			                    if(msp.sub_code=='subuser.has-no-permission'){
			                    	/* $("#hints").html('<p>该子帐号无此操作权限，请通过主帐号设置开通相应权限！</p>');
						     	    showMsg('hint'); */
			                    }else if(msp.sub_msg=='地址数目已满20条'){
			                    	$.alert('<p>地址数目已满20条，请先删除旧的地址后再进行添加！</p>');
			                    }else{
			                    	$.alert('<p>'+msp.sub_msg+'</p>');
				                    }
			                }    		       	
				 });
			}
}
/**
 * 设置默认物流公司
 */
function setwlcompay(mozjid){
		$("#mozj").html('<div class="sui-loading loading-small " style="overflow: hidden;"><i class="sui-icon icon-pc-loading"></i></div>');
		$("#mozj2").html('<div class="sui-loading loading-small " style="overflow: hidden;"><i class="sui-icon icon-pc-loading"></i></div>');
		if(mozjid=="mozj2"){
			var order_mode="offline";
		}else{
				var order_mode="online";
		}
		QN.top.invoke({
			 "cmd": "taobao.logistics.companies.get",
	    	 "param": {'fields':"id,code,name",is_recommended:true,'order_mode':order_mode},
	    	 "method": "get",
	    	 "success": function(rsp){
	    	 		$("#"+mozjid).empty();

		    		 if(typeof  rsp=== 'string'){
		  					rsp = JSON.parse(rsp);
			            }
				    	if(rsp.logistics_companies_get_response){
			    			 for(index in rsp.logistics_companies_get_response.logistics_companies.logistics_company){
				    			 var order=rsp.logistics_companies_get_response.logistics_companies.logistics_company[index];
				    			 var data={};
				    			 data.name=order.name;
				    			 data.code=order.code;
				    			 data.id=order.id;
					    		 var source = $("#setlist_template").html();
			    	             var template = Handlebars.compile(source);
			    	             var htmlstr = template(data);
			    	             $("#"+mozjid).append(htmlstr);
			    			 }
			    			  $('#systems').modal('resize');
			    			  loadcheck(order_mode);
			    		}
			    			 
					},
					 error: function(msp){
					 	$('#systems').modal('resize');
					 	$("#"+mozjid).empty();
		                    if(typeof msp === 'string'){
		                        var msp = JSON.parse(msp);
		                    }else{
		                        var msp= msp;
		                    }
		                    if(msp.sub_code=='subuser.has-no-permission'){
				    			/* $("#hints").html('<p>该子帐号无此操作权限，请通过主帐号设置开通相应权限！</p>');
	          		 	        showMsg('hint'); */
		                    }else{
		                    	$.alert('<p>操作失败，请重试！</p>');
		                    }
		                }  
		});
		$('#systems').modal('resize');
}

function loadcheck(fenl){
		var mode=fenl;
		var comptys=window.localStorage.getItem("compty"+user_nick);
		 if(comptys==''|| comptys==null){
			 $.ajax({
				    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/getsend',
				    type: 'GET',
				    dataType:'html',
				    data:{nick:user_nick},
				    timeout:10000,
				    success: function(data){
				    	 	window.localStorage.setItem("compty"+user_nick,data);   			
				    	 	var data=JSON.parse(data);
					 	    var datas={};
					 	    for(index in data){
					 	        order=data[index];
					 	        if(order.mode==mode){
					 	        	datas.code=order.code.split(",");/*快递公司编码*/
					 	        }
					 	    }
					 	    for(index in datas.code){
					 	        var code=datas.code[index];
					 	    	$("#"+code).parent('label').checkbox().checkbox('check');
					 	    }
				     },
				    error: function(e){
			        },
				 });
		 }else{
			 	var data=JSON.parse(comptys);
		 	    var datas={};
		 	    for(index in data){
		 	        order=data[index];
		 	        if(order.mode==mode){
		 	        	datas.code=order.code.split(",");/*快递公司编码*/
		 	        }
		 	    }
		 	    for(index in datas.code){
		 	        var code=datas.code[index];
		 	    	$("#"+code).parent('label').checkbox().checkbox('check');
		 	    }
			 }
}
/**
 * 保存默认物流设置
 */
function savesend(savesen){
		var num = 0;
		var checked = document.getElementsByName("checkbox[]");
		var mychecked='';
		for (var i=0;i<checked.length ;i++ )
	    {
		        if(checked[i].checked){
		            mychecked+=checked[i].value;
		        	num++;
		        }
	    }
	    if(num > 5){
	    	layer.msg("亲，默认最多选择5个物流公司哦!", 2, function(){});
		}else{
			mychecked=mychecked.substr(0,mychecked.length-1);
			$.ajax({
			    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/saveSend',
			    type: 'POST',
			    dataType:'html',
			    data:{nick:user_nick,mode:savesen,checkbox:mychecked},
			    timeout:10000,
		        success: function(data, textStatus){
                    window.localStorage.removeItem("compty"+user_nick);
                    layer.msg('操作成功!', 1, 1);
		        },
		        error: function(){
		        	$.alert('<p>操作失败，请重试！</p>');
		        }
		    });
		}
}
/**
 * 设置快捷短语-获取评价短语内容
 */
function funduan(wsxyu){
	$('#systems').modal('resize');
	 var duanyu=wsxyu;
	 if(duanyu=="pingid"){
			var types="fast_rate";
			}else if(duanyu=="beiid"){
				var types="fast_beiw";
				}else{
					var types="fast_memo";
			}
	 QN.application.invoke({
		 "cmd": "getLoginuser",
		 "success": function (e){
			 if(typeof  e=== 'string'){
	            	e = JSON.parse(e);
	            }
		     user_nick=decodeURI(e.user_nick);
		 if(window.localStorage.getItem(types+user_nick)==''|| window.localStorage.getItem(types+user_nick)==null)
			{
			 $.ajax({
				    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/getFast',
				    type: 'POST',
				    dataType:'html',
				    data:{nick:user_nick,types:types},
				    timeout:10000,
				    success: function(data){/*获取成功*/
				    	 window.localStorage.setItem(types+user_nick,data);
					    	var val=data.split('\\n');
					    	var mydata='';
					    	if(val!=null&&val.length>1){
						    	for(index in val){
							    	mydata+=val[index]+'\n';
						    	}
						    	 document.getElementById(duanyu).value =mydata; 
					    	}else{
					    		 document.getElementById(duanyu).value =data; 
					    	}
					    	$('#systems').modal('resize');
			     }
			 });
		     }else{
				var data=window.localStorage.getItem(types+user_nick);
				var val=data.split('\\n');
		    	var mydata='';
		    	if(val!=null&&val.length>1){
			    	for(index in val){
				    	mydata+=val[index]+'\n';
			    	}
			    	 document.getElementById(duanyu).value =mydata; 
		    	}else{
		    		 document.getElementById(duanyu).value =data; 
		    	}
		    	$('#systems').modal('resize');
				
		     }
		 }
	 });
}
function savefast(duanyu){
	var text=$("#"+duanyu).val();
		text=text.split("\n");
		var conttt='';
		for(index in text){
			if(text[index]!=''){
			if(conttt==''){
				conttt=text[index];
				}else{
			    conttt+=';'+text[index];
			}}
			}
		if(duanyu=='pingid'){
			var types='fast_rate';
			}else if(duanyu=='beiid'){
				var types='fast_beiw';
				}else{
					var types='fast_memo';
					}
					$.ajax({
					    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/setFast',
					    type: 'POST',
					    dataType:'html',
					    data:{nick:user_nick,text:conttt,types:types},
					    timeout:10000,
				     	success: function(data){/*获取成功*/
				    	 if(data>0){
				    		 layer.msg('操作成功!', 1, 1);
                             window.localStorage.removeItem(types+user_nick);
                            }else{
                            	$.alert('<p>操作失败，请重试！</p>');
                             }
				     }
				 });
}
/**
 * 旺旺催付设置
 */
function cfsz(){
	
	 $('#recfsz_but').show();
	 $('#recfsz_refsh').hide();
	 
	 QN.application.invoke({
		 "cmd": "getLoginuser",
		 "success": function (e){
			 if(typeof  e=== 'string'){
	            	e = JSON.parse(e);
	            }
		 user_nick=decodeURI(e.user_nick);
		 if(window.localStorage.getItem('ucontent'+user_nick)==''||window.localStorage.getItem('cuifucontent'+user_nick)==null){
			 $.ajax({
				    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/fastpay',
				    type: 'POST',
				    dataType:'html',
				    data:{nick:user_nick},
				    timeout:10000,
			        success: function(data){
			        	document.getElementById('ta').value =data; 
			        	window.localStorage.setItem('cuifucontent'+user_nick,data);
			        	$('#systems').modal('resize');
			        	
					},
			       error: function(){
			       	$('#systems').modal('resize');
			       	$.alert('<p>获取失败，请重试！</p>');
				}
		    });
		 }else{
			 document.getElementById('ta').value =window.localStorage.getItem('cuifucontent'+user_nick);
			 $('#systems').modal('resize');
			 }
		 },
	 });
	 $('#systems').modal('resize');
}
/**
 * 保存旺旺催付短语设置
 */
 function cfsave(){
	 closeMsg('');
	 tradePoint(user_nick,'催付设置确定');
	 if(vipuser==0){
	 		$('#systems').modal('hide');
	      	$('#buyvip').modal('show');
	      	return;
	    }
	 	 var fastpay=document.getElementById('ta').value;
		 $.ajax({
			    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/savefastpay',
			    type: 'POST',
			    dataType:'html',
			    data:{nick:user_nick,fastpay:fastpay},
			    timeout:10000,
		        success: function(data){
		        	if(data!=''){
		        		layer.msg('操作成功!', 1, 1);
			            window.localStorage.removeItem('cuifucontent'+user_nick); 
			        }else{
			        	$.alert('<p>操作失败，请重试！</p>');
				        }
				},
		       error: function(){
		       	$.alert('<p>操作失败，请重试！</p>');
			}
	    });
}
 /**
  * 刷新催付短语
  * @author Duanhq
  */
 function recfsz(){
 	$('#recfsz_but').hide();
 	$('#recfsz_refsh').show();
 	$('#ta').val('');
 	if(user_nick==null||user_nick==''||user_nick=='null'){
 		 QN.application.invoke({
 			 "cmd": "getLoginuser",
 			 "success": function (e){
 				 if(typeof  e=== 'string'){
 		            	e = JSON.parse(e);
 		            }
 			 		user_nick=decodeURI(e.user_nick);
		  			$.ajax({
					    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/fastpay',
					    type: 'POST',
					    dataType:'html',
					    data:{nick:user_nick},
					    timeout:10000,
 				        success: function(data){
 				        	document.getElementById('ta').value =data; 
 				        	window.localStorage.setItem('cuifucontent'+user_nick,data);
 				        	setTimeout(function(){
				        		$('#recfsz_refsh').hide();
				        		$('#recfsz_but').show();
				        	},2000);
 				        	
 						},
 				       error: function(){
  				    	  $('#recfsz_but').show();
    			        	setTimeout(function(){
    			        		$('#recfsz_refsh').hide();
    			        		$('#recfsz_but').show();
    			        	},2000);
    			        	$.alert('<p>操作失败，请重试！</p>');
 						}
 			    	});
 			 },
 		 });
 	}else{
		 		$.ajax({
				    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/fastpay',
				    type: 'POST',
				    dataType:'html',
				    data:{nick:user_nick},
				    timeout:10000,
 			        success: function(data){
 			        	document.getElementById('ta').value =data; 
 			        	window.localStorage.setItem('cuifucontent'+user_nick,data);
			        	setTimeout(function(){
				        		$('#recfsz_refsh').hide();
				        		$('#recfsz_but').show();
				        	},2000);
 					},
 			       error: function(){
  			    	  $('#recfsz_but').show();
			        	setTimeout(function(){
			        		$('#recfsz_refsh').hide();
			        	},1000);
			        	$.alert('<p>操作失败，请重试！</p>');
 				}
 		    });
 	}

 }
/**
 * 地址预警设置
 */
function load_glset(){
	$('#systems').modal('resize');
	$('.setwl').hide();
	$('.setlan').hide();
	$.ajax({
		type:"post",
		url:"<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/getuserglsz",
		dataType:'html',
		data:{'nick':user_nick},
		timeout:500,
		error:function(msp){},
		success:function(rsp){
			$('#systems').modal('resize');
			if(typeof rsp==='string'){rsp=JSON.parse(rsp);}
			if(rsp.tsdz){
				if(rsp.tsdz.split(';')[0]=='on'){
					$("#tsaddr_check").parent('label').checkbox().checkbox('check');
					if(rsp.tsdz.split(';')[1]){
						$("#dangeraddr").val(rsp.tsdz.split(';')[1]);
					}else{
						$("#dangeraddr").val('村, 镇, 乡, 旗, 屯, 自治区, 自治州, 邮电, 邮局, 政府, 监狱, 军区, 部队, 寺, 庙, 香港, 澳门, 台湾, 海外');
					}
				}else{
					if(rsp.tsdz.split(';')[1]){
						$("#dangeraddr").val(rsp.tsdz.split(';')[1]);
					}else{
						$("#dangeraddr").val('村, 镇, 乡, 旗, 屯, 自治区, 自治州, 邮电, 邮局, 政府, 监狱, 军区, 部队, 寺, 庙, 香港, 澳门, 台湾, 海外');
					}
				}
			}else{
				$("#dangeraddr").val('村, 镇, 乡, 旗, 屯, 自治区, 自治州, 邮电, 邮局, 政府, 监狱, 军区, 部队, 寺, 庙, 香港, 澳门, 台湾, 海外');
			}
		}
	});
	
}
function saveglsz(){
	if(vipuser==0){/*是免费用户*/
		$('#buyvip').modal('show');
		$('#systems').modal('hide');
		return;
	}
	var info={};
	info.nick=user_nick;
	if(document.getElementById("tsaddr_check").checked){
		if($("#dangeraddr").val()==''||$("#dangeraddr").val()==null||$("#dangeraddr").val()=='null'){
			layer.msg('请输入特殊地址哦', 2, 0);
			return;
		}else{
			info.tsdz='on;'+$("#dangeraddr").val().replace(/，/,',');/*特殊地址*/
		}
	}else{
		info.tsdz='off;'+$("#dangeraddr").val().replace(/，/,',');/*特殊地址*/
	}
	/*layer.msg('保存成功', 2, 1);*/
	$.ajax({
		type:"post",
		url:"<?php echo APP_WEB_INDEX_ROOT?>/iytrade/saveglsz",
		dataType:'html',
		data:info,
		timeout:1000,
		error:function(msp){
			layer.msg('保存失败', 2, 0);
		},
		success:function(rsp){
			layer.msg('保存成功', 2, 1);
			window.localStorage.removeItem(user_nick+'Glset');
			window.localStorage.setItem(user_nick+'Glset',info.tsdz);
		}
	});
}
</script>
<script type="text/javascript">
var vipuser=0;/*初级版，高级版用户身份标识，高级版用户为1*/
var viptime='off';/*高级版用户订购到期时间*/
var actviptime='off';/*运营活动用户订购到期时间*/
var user_nick;
var SumbuyTimes;/*时间，倒计时*/
var usertime="";
var onbutton='';
var isactB=false;
var testUser=false;
var autorate='off';
var tmark='off';
/**
 * 初始加载，同步订购信息
 * @author Duanhq
 */
function onload_viptime(type){
	$('#errorpage').val(type);
	if(type=='index'||type=='gentlytask'||type=='printSend'||type=='refundinfo'||type=='tradedetail'){
		var shash=window.location.hash.substr(1);
		if(shash==null||shash=="null"||shash==''){
			console.log('no hava authmap');
		}else{
			if(type=='index'){
				window.localStorage.setItem("authmap",shash);
			}
			
		}
		
		var params = shash.split('&');
		var map = new HashMap();
		for (var i in params) {
		    var p = params[i].split("=");
		    if (p.length == 2) {
		        map.put(p[0], p[1]);
		    }
		}
		user_nick=map.get('nick');
		user_nick=decodeURIComponent(user_nick);
		user_nick=user_nick.split(":")[0];
		if(user_nick==null||user_nick=="null"||user_nick==''){
			user_nick=window.localStorage.getItem("loginnick");
		}else{
			window.localStorage.setItem("loginnick",user_nick);
		}

		vipuser=map.get("vipuser");/*身份信息*/
		viptime=map.get("vip_time");/*订购到期时间*/
		actviptime=map.get("actvip_time");/*订购到期时间*/
		testUser=map.get("testUser");/*试用版*/
		autorate=map.get('autorate');
		tmark=map.get('tmark');
		var actType=map.get('actType');
		if(actType=='defen'){
			showMsg('defenrate_contents');
		}else if(actType=='zdrate'){
			showMsg('zdrate_content');
		}
		if(tmark==null||tmark==''||tmark=="null"){
			tmark=window.localStorage.getItem("tmark");
		}else{
			window.localStorage.setItem("tmark",tmark);
		}
		
		if(user_nick==''|| user_nick==null||user_nick.length<2||user_nick=='null'){
			setTimeout(refshvip_top,1000);
		}else{
			
			/**获取身份信息**/
			if(vipuser==null||vipuser==''||vipuser=="null"){
				vipuser=window.localStorage.getItem("vipuser"+user_nick);
				if(vipuser==3){
					isactB=true;
					vipuser=1;
				}
				if(vipuser!=1&&vipuser!=0){
					vipuser=0;
				}
			}else{
				window.localStorage.setItem("vipuser"+user_nick,vipuser);
			}
			
			/**获取到期时间**/
			if(viptime==null||viptime==''||viptime=='null'){
				viptime=window.localStorage.getItem("viptime"+user_nick);
				if(viptime==null||viptime==''||viptime=='null'){
		    		viptime='off';
				}
			}else{
				window.localStorage.setItem("viptime"+user_nick,viptime);
			}
			/**运营活动用户时间**/
			if(actviptime==null||actviptime==''||actviptime=="null"){
				actviptime=window.localStorage.getItem("actviptime"+user_nick);
				if(actviptime==null||actviptime=='null'||actviptime==''){
					actviptime='off';
				}
			}else{
				window.localStorage.setItem("actviptime"+user_nick,actviptime);
			}
			/**试用版用户**/
			if(testUser==null||testUser==''||testUser=="null"){
				testUser=window.localStorage.getItem("testUser"+user_nick);
				if(testUser==null||testUser=='null'||testUser==''){
					testUser='off';
				}
			}else{
				window.localStorage.setItem("testUser"+user_nick,testUser);
			}
			/**同步Top到期时间**/
			usertime=window.localStorage.getItem("usertime"+user_nick);
			if(usertime==null||usertime==""||usertime.length<5){
				usertime='';
			}else{
				/* $("#Busertime").text(usertime.split(' ')[0]); */
			}
			
			
			setTimeout(refshvip,1000);
			
		}
	}else{
		user_nick=window.localStorage.getItem("loginnick");
		tmark=window.localStorage.getItem("tmark");
		if(user_nick==''|| user_nick==null||user_nick.length<2||user_nick=='null'){
			user_nick='';
			vipuser=0;
			viptime='off';
		}else{
			vipuser=window.localStorage.getItem("vipuser"+user_nick);
			if(vipuser==3){
				isactB=true;
				vipuser=1;
			}
			if(vipuser!=1&&vipuser!=0&&vipuser){
				vipuser=0;
			}
			viptime=window.localStorage.getItem("viptime"+user_nick);
			if(viptime==null||viptime==''||viptime=='null'){
				viptime='off';
			}
			actviptime=window.localStorage.getItem("actviptime"+user_nick);
			if(actviptime==null||actviptime=='null'||actviptime==''){
				actviptime='off';
			}
			testUser=window.localStorage.getItem("testUser"+user_nick);
			if(testUser==null||testUser=='null'||testUser==''){
				testUser='off';
			}

		}
		if(vipuser==0){
			usertime=window.localStorage.getItem("usertime"+user_nick);
			if(usertime==null||usertime==""||usertime.length<5){
				usertime='';
			}else{
				/* $("#Busertime").text(usertime.split(' ')[0]); */
			}
		}
	}
	if(vipuser==3){
		isactB=true;
		vipuser=1;
	}
	if(isactB){
		var diff=getTimeDiff(actviptime);
		if(Number(diff)<=0){
			isactB=false;
			vipuser=0;
		}
	}
	var viptimes=window.localStorage.getItem("usertime"+user_nick);
	if(viptimes==''|| viptimes==null||viptimes=='null'){
		if(actviptime!='off'){
			userVer(true,actviptime);
		}
		/**
		*这里需要容错
		**/
	}else{
		if(vipuser==1){
			var vipuserz=true;
			if(actviptime!='off'){
				userVer(vipuserz,actviptime);
			}else{
				userVer(vipuserz,viptime);
			}
			
		}else {
			var vipuserz=false;
			userVer(vipuserz,viptimes);
		}
	}
	showbanner();
	/*showActB(type);*/

}

/**
 * 分页方法
 */
function pagin(divId,fun,pageno,pageNum,pageAll){if(pageAll<1){return}var f="";var n="";var first=Number(pageno)-Number(1);var next=Number(pageno)+Number(1);if(first==1||first>1){var f='<li><a href="javascript:'+fun+"("+first+')">上一页</a></li>'}if(next==pageNum||next<pageNum){var n='<li><a href="javascript:'+fun+"("+next+')">下一页</a></li>'}var str='<div style="margin-top:-10px;"><table width="100%"><tr><td align="left">第'+pageno+"页，共"+pageNum+"页(共"+pageAll+'条记录)</td><td align="right"><div class="sui-pagination""><ul>'+f;if(pageNum>5){if(pageno<3){for(var i=1;i<=5;i++){if(i==pageno){str+='<li  class="active"><a href="javascript:'+fun+"("+i+')">'+i+"</a></li>"}else{str+='<li><a href="javascript:'+fun+"("+i+')">'+i+"</a></li>"}}str+="<li><span>...</span></li>"}else{if(pageNum-pageno>2){var pagenoTemp=pageno-2;str+="<li><span>...</span></li>";for(var i=pagenoTemp;i<pagenoTemp+5;i++){if(i==pageno){str+='<li class="active"><a href="javascript:'+fun+"("+i+')">'+i+"</a></li>"}else{str+='<li><a href="javascript:'+fun+"("+i+')">'+i+"</a></li>"}}str+="<li><span>...</span></li>"}else{for(var i=pageNum-4;i<=pageNum;i++){if(i==pageno){str+='<li  class="active"><a href="javascript:'+fun+"("+i+')">'+i+"</a></li>"}else{str+='<li><a href="javascript:'+fun+"("+i+')">'+i+"</a></li>"}}}}}else{for(var i=1;i<=pageNum;i++){if(i==pageno){str+='<li  class="active"><a href="javascript:'+fun+"("+i+')">'+i+"</a></li>"}else{str+='<li><a href="javascript:'+fun+"("+i+')">'+i+"</a></li>"}}}str+=n+"</ul> <div><span>共"+pageNum+'页&nbsp;</span><span>到<input id="'+divId+'clk" type="text" class="page-num"><button class="page-confirm" onclick="cdgwzyjump('+divId+","+fun+","+pageNum+')">确定</button>页</span></div></div></td></tr></table></div>';$("#"+divId).append(str)};
function cdgwzyjump(clk,fun,allpages){var i=clk.id+"clk";var pages=$("#"+i).val();var reg=/^\d+$/;if(pages==""||pages==null||pages=="null"){layer.msg("请输入页数",1,3);return}else{if(reg.test(pages)==false){layer.msg("输入的数字必须是正整数！",1,3);return}else{if(pages>allpages){layer.msg("输入的数字超出最大页数！",1,3);return}else{if(pages==0||pages<1){layer.msg("输入的数字小于最小页数！",1,3);return}else{var ii=fun;ii(pages)}}}}};
/**
 * 发送订购信息错误
 * @author Duanhq
 */
function sendviperror(nick,text){
	$.ajax({
	    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/viperror',
	    type: 'POST',
	    dataType:'html',
	    data:{nick:nick,textarea:text},
	    timeout:10000,
        success: function(data){
			},
        error: function(){
			}
	    });
}
/**
 * 查看错误源码
 * @author Duanhq
 */
function lookerror(){
	$('#hints_vips').show();
	$('#lookerror').hide();
}
/**
 * 错误收集
 * @author Duanhq
 */
function geterrorinfo(topapi,msp){
	$("#hints_vip").empty();
	$("#hints_vips").empty();
	$('#hints_vips').hide();
	$('#lookerror').show();
    if(msp.sub_msg){
    	$("#hints_vip").html('<p>'+msp.sub_msg+'</p>');
    }else{
    	$("#hints_vip").html('<p>操作失败，请重试！</p>');
    }
  	$("#hints_vips").html('<p>'+topapi+'=>'+JSON.stringify(msp)+'</p>');
  	$("#hint_vip").modal('show');
}
/**
 * 发送错误信息至后台
 * @author Duanhq
 */
function senderror(){
	var text=$('#hints_vips').text();
	var errorpage=$('#errorpage').val();
	$.ajax({
	    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/sendviperror',
	    type: 'POST',
	    dataType:'html',
	    data:{nick:user_nick,textarea:text,errorpage:errorpage},
	    timeout:10000,
        success: function(data){
        	layer.msg('发送成功!', 1, 1);
		},
        error: function(){
        	layer.msg('发送错信信息失败！', 1, 3);
		}
	    });
}
/***
 * 同步订购
 * @author Duanhq
 */
function refshvip(){
try{
    QN.top.invoke({
        "cmd": "taobao.vas.subscribe.get",
        "param": {
            	"nick":user_nick,
				 "article_code":"FW_GOODS-1827490"
        		},
        "method": "get",
        "success": function (rsp){

			if(typeof rsp=='string'){
				var rsp=JSON.Parse(rsp);
				}else {
					var rsp=rsp
				}
			if(rsp.vas_subscribe_get_response){
    			var subscribe=rsp.vas_subscribe_get_response.article_user_subscribes.article_user_subscribe;
    			for(index in subscribe){
        			var vip=subscribe[index];
        			/* $("#Busertime").text(vip.deadline.split(' ')[0]); */
        			if(vip.item_code=='FW_GOODS-1827490-1'){
        				
        				window.localStorage.setItem("usertime"+user_nick,vip.deadline);
        				$("#goodgods").attr("style","display:none;");
        				var url='http://cdn.zzgdapp.com/yunying/pcjiaoyidinggouye.html';
        				var vipuserz=false;
        				var diff='';
        				if(actviptime!='off'&&getTimeDiff(actviptime)>0){
        					vipuser=1;
        					vipuserz=true;
        					isactB=true;
							diff=getTimeDiff(actviptime);
						}else{
							vipuser=0;
							diff=getTimeDiff(vip.deadline);
						}
						if(Number(diff)<=0){
							vipuserz=false;
							vipuser=0;
						}
        				$('#mfb1').empty().append( '<span style="color:#FFF">'+(vipuserz ? "高级版" : "初级版") + '</span>' );

        				$('#versionorvip').empty().append( '<span style="color:#FFF">'+(vipuserz ? "高级版" : "初级版") + '</span>' );
        				$('#overdaytime').empty().html(diff);
        				if(isactB&&Number(diff)>0){
        					$('#mfb1').empty().append( '<span style="color:#FFF">试用版</span>' );
        					$('#versionorvip').empty().append( '<span style="color:#FFF">试用版</span>' );
        					switch(diff){
								case 7:{$('#overdaytime').html(5);break;}
								case 6:{$('#overdaytime').html(4);break;}
								case 5:{$('#overdaytime').html(3);break;}
								case 4:{$('#overdaytime').html(2);break;}
								case 3:{$('#overdaytime').html(1);break;}
							}
        					window.localStorage.setItem("vipuser"+user_nick,3);
        				}else{
        					window.localStorage.setItem("vipuser"+user_nick,vipuser);
        				}
        				
        				
        				$('#ljsjbt').attr("onclick","javascript:openlines('"+url+"');");
        				$('#ljsjbt').html(vipuserz ? "立即续费" : "立即升级");
        				if(!vipuserz)$('#kfrx').hide();
        				//$('#ljsjbt').empty().append("<a style='color:#FFF' href=\"" +"javascript:openlines('"+url+"');\">" + (vipuserz ? "<span  style='background-color:red;'>立即续费</span>" : "<span  style='background-color:red;color:#FFF'>立即升级</span></a>" );
    					
        			}else if(vip.item_code=='FW_GOODS-1827490-v2'){
        				vipuser=1;
        				$('#wwgonggao').hide();
        				deadline=vip.deadline;
        				window.localStorage.setItem("usertime"+user_nick,vip.deadline);
        				$("#goodgods").attr("style","");
        				var url='http://cdn.zzgdapp.com/yunying/pcjiaoyidinggouye.html';
        				var vipuserz=true;
        				var diff='';
        				if(actviptime!='off'&&getTimeDiff(actviptime)>0){
							diff=getTimeDiff(actviptime);
						}else{
							diff=getTimeDiff(vip.deadline);
						}
						if(Number(diff)<=0){
							vipuserz=false;
							vipuser=0;
						}
        				$('#mfb1').empty().append( '<span style="color:#FFF">'+(vipuserz ? "高级版" : "初级版") + '</span>' );
        				$('#versionorvip').empty().append( '<span style="color:#FFF">'+(vipuserz ? "高级版" : "初级版") + '</span>' );
        				$('#overdaytime').empty().html(diff);
        				$('#ljsjbt').attr("onclick","javascript:openlines('"+url+"');");
        				$('#ljsjbt').html(vipuserz ? "立即续费" : "立即升级");
        				if(!vipuserz)$('#kfrx').hide();
       					window.localStorage.setItem("vipuser"+user_nick,vipuser);
    					window.localStorage.setItem("viptime"+user_nick,deadline);
        				if(datetime_to_unix(deadline) > datetime_to_unix(GetDateStr(0))){
                  			 /*订购没有到期*/
                			if(viptime!='off'){
                				viptime=decodeURI(viptime);
                    				if(datetime_to_unix(deadline)>datetime_to_unix(viptime)){
                    					$.ajax({
                    					    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/upViptime',
                    					    type: 'POST',
                    					    dataType:'html',
                    					    data:{nick:user_nick,viptime:deadline},
                    					    timeout:10000,
	       		           			        success: function(data){
	       			           			       
	       		           			        },
	       		           			        error: function(){
	       		
	       		           			        }
       		           			    });
                    				}else if(datetime_to_unix(deadline)<datetime_to_unix(viptime)){
                        				/*订购时间小于实际数据库到期时间*/
                    					$.ajax({
                    					    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/upViptime',
                    					    type: 'POST',
                    					    dataType:'html',
                    					    data:{nick:user_nick,viptime:deadline},
                    					    timeout:10000,
         		           			        success: function(data){
         		           			        },
         		           			        error: function(){
         		           			        }
	         		           			    });

	                    				}
	                   		}else{/*写数据库*/
	                   			$.ajax({
            					    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/upViptime',
            					    type: 'POST',
            					    dataType:'html',
            					    data:{nick:user_nick,viptime:deadline},
            					    timeout:10000,
       	           			        success: function(data, textStatus){
       	           			        },
       	           			        error: function(){
       	           			        }
       	           			   		});
	                   		}
              			 }else{
                  			 /*订购已到期*/
              			 }
        			}
				}
   			 
	    		
    		}
        },
        "error":function(msp){
         	/* $("#hints_vip").html('<p>订购日期同步失败，可能导致您无法使用高级版功能，您可以发送错误至后台或者联系客服</p>');
          	$("#hints_vips").html('<p>'+JSON.stringify(msp)+'</p>');
    	   showMsg('hint_vip');*/
        	sendviperror(user_nick,JSON.stringify(msp));
        }
    });
}catch(e){
	sendviperror(user_nick+':同步订购',e);
}

}
/**
 * 同步订购：调用TOP获取user_nick
 * @author Duanhq
 */
function refshvip_top(){
try{	
	QN.application.invoke({
		 "cmd": "getLoginuser",
		 "success": function (e){
			 if(typeof  e=== 'string'){
	            	e = JSON.parse(e);
	            }
		 	user_nick=decodeURI(e.user_nick);
		 	window.localStorage.setItem("loginnick",user_nick);
		 	/**获取身份信息**/
			if(vipuser==null||vipuser==''||vipuser=="null"){
				vipuser=window.localStorage.getItem("vipuser"+user_nick);
				if(vipuser!=1&&vipuser!=0){
					vipuser=0;
				}
			}else{
				window.localStorage.setItem("vipuser"+user_nick,vipuser);
			}
			/**获取到期时间**/
			if(viptime==null||viptime==''||viptime=='null'){
				viptime=window.localStorage.getItem("viptime"+user_nick);
				if(viptime!='off'&&viptime.length<5){
		    		viptime='off';
				}
			}else{
				window.localStorage.setItem("viptime"+user_nick,viptime);
			}
			/**运营活动用户时间**/
			if(actviptime==null||actviptime==''||actviptime=="null"){
				actviptime=window.localStorage.getItem("actviptime"+user_nick);
				if(actviptime==null||actviptime=='null'||actviptime==''){
					actviptime='off';
				}
			}else{
				window.localStorage.setItem("actviptime"+user_nick,actviptime);
			}
			/**试用版用户**/
			if(testUser==null||testUser==''||testUser=="null"){
				testUser=window.localStorage.getItem("testUser"+user_nick);
				if(testUser==null||testUser=='null'||testUser==''){
					testUser='off';
				}
			}else{
				window.localStorage.setItem("testUser"+user_nick,testUser);
			}
			/**同步Top到期时间**/
		 	refshvip();
		 },
	       error: function(msg){
	    	   	vipuser=0;
	    	   	viptime='off';
	    		sendviperror('未知用户','获取登录用户名称失败'+JSON.stringify(msg));
		}
	 });
}catch(e){
   	vipuser=0;
   	viptime='off';
	sendviperror('getLoginuser',e);
}
}
function userVer(vipuserz,OverTime){
try{
	if(vipuserz){
		$("#goodgods").attr("style","");
		var url='http://cdn.zzgdapp.com/yunying/pcjiaoyidinggouye.html';
	}else{
		$("#goodgods").attr("style","display:none;");
		var url='http://cdn.zzgdapp.com/yunying/pcjiaoyidinggouye.html';
	}
	var diff=getTimeDiff(OverTime);
	if(Number(diff)<=0){
		vipuserz=false;
		vipuser=0;
	}
	$('#mfb1').empty().append( '<span style="color:#FFF">'+(vipuserz ? "高级版" : "初级版") + '</span>' );
	$('#versionorvip').empty().append( '<span style="color:#FFF">'+(vipuserz ? "高级版" : "初级版") + '</span>' );
	$('#overdaytime').empty().html(diff);
	$('#ljsjbt').attr("onclick","javascript:openlines('"+url+"');");
	$('#ljsjbt').html(vipuserz ? "立即续费" : "立即升级");
			//$('#versioninfo').empty().append( '<span style="color:#FFF">'+(vipuserz ? "高级版" : "初级版") + "，" + diff +"</span><a style='color:#FFF' href=\"" +
			//"javascript:openlines('"+url+"');\">" + (vipuserz ? "<span  style='background-color:red;color:#FFF'>立即续费</span>" : "<span  style='background-color:red''>立即升级</span>") + "</a>" );
	if(isactB&&Number(diff)>0){
		switch(diff){
			case 7:{$('#overdaytime').html(5);break;}
			case 6:{$('#overdaytime').html(4);break;}
			case 5:{$('#overdaytime').html(3);break;}
			case 4:{$('#overdaytime').html(2);break;}
			case 3:{$('#overdaytime').html(1);break;}
		}
       $('#mfb1').empty().append( '<span style="color:#FFF">试用版</span>' );
       $('#versionorvip').empty().append( '<span style="color:#FFF">试用版</span>' );
    }
}catch(e){
		$('#versioninfo').empty();
		}
}
/**
 * 点击埋点
 */
function clickMaiDian( path )
{
	$.ajax({
		type:"post",
		url:"<?php echo APP_WEB_INDEX_ROOT?>/tc/tradePoint",
		async:true,
		data : { 'nick' : user_nick, 'path' : path },
		timeout : 5000,
		success : function(data) {
		}
	});
}
function showGaoJiban(){
	if($("#coa").attr("name")){
		$("#orderdetails").hide();
		$("#coa").html("点击查看");
		$("#lianxkf").html("高级版具体有哪些功能？或者咨询客服");
		$("#coa").attr("name","");
	}else{
		$("#orderdetails").show();
		$("#coa").html("点击隐藏");
		$("#lianxkf").html("或者咨询客服");
		$("#coa").attr("name","qishi");
	}
}
 /**
  * 订购各种跳转
  * @author wsx
  */
  function openlines(urls){

	 /*  var url='http://qianniu.fuwu.taobao.com/ser/detail.htm?service_code=FW_GOODS-1827490&tracelog=qianniupc';
	    QN.application.invoke({
	   		"cmd" : "browserUrlEmbedded",
	   		"param" : { "url" : url,id : '1', "title" : "升级爱用交易", "width" : '800', "height" : '527' }
	   	}); */
	    if(onbutton==''){onbutton='版本信息[升级]';}
	 	var yoozs=0;
	  	var buyurl=urls;
		 switch(buyurl){
			case 1:{yoozs=1;buyurl='http://cdn.zzgdapp.com/yunying/pcjiaoyidinggouye.html';tradePoint(user_nick,onbutton+'一年');break;}
			case 2:{yoozs=1;buyurl='http://cdn.zzgdapp.com/yunying/pcjiaoyidinggouye.html';tradePoint(user_nick,onbutton+'半年');break;}
			case 3:{yoozs=1;buyurl='http://cdn.zzgdapp.com/yunying/pcjiaoyidinggouye.html';tradePoint(user_nick,onbutton+'一季度');break;}
			case 4:{yoozs=1;buyurl='http://cdn.zzgdapp.com/yunying/pcjiaoyidinggouye.html';tradePoint(user_nick,onbutton+'一个月');break;}
			case 5:{yoozs=1;buyurl='http://bangpai.taobao.com/group/thread/15074034-289762745.htm?spm=jiaoyiheshangpin';tradePoint(user_nick,'套餐包');break;}
			}
			if(yoozs==0){
				tradePoint(user_nick,onbutton);
			}
			if(buyurl=='http://cdn.zzgdapp.com/yunying/pcjiaoyidinggouye.html'){
				/*QN.application.invoke({
			   		"cmd" : "openAttachWindow",
			   		"param" : {
			   			event:"yunyings",
			   			width:780,
			   			height:650,
			   			title:'订购爱用交易高级版'
			   			}
			   	});*/
			   	$('#buyvip').modal('show');
			   	return;
			}
        	 QN.application.invoke({
       			"cmd" : "browserUrl",
       			"param" : { "url" : buyurl}
       		});
			 /*QN.application.invoke({
		   		"cmd" : "browserUrlEmbedded",
		   		"param" : { "url" : buyurl,id : '1', "title" : "订购爱用交易高级版", "width" : '800', "height" : '650' }
		   	}); */
			 /*QN.application.invoke({
			   		"cmd" : "openAttachWindow",
			   		"param" : {
			   			event:"yunyings",
			   			width:780,
			   			height:650,
			   			title:'订购爱用交易高级版'
			   			}
			   	});*/
	       	
 	}
 	function openlines_buyvip(buyurl){
 		$('#buyvip').modal('show');
		/* QN.application.invoke({
		   		"cmd" : "openAttachWindow",
		   		"param" : {
		   			event:"yunyings",
		   			width:780,
		   			height:650,
		   			title:'该功能需订购高级版并重新打开插件才能使用(当前版本:初级版)'
		   			}
		   	});*/
 	 	/*
 					 QN.application.invoke({
		   		"cmd" : "browserUrlEmbedded",
		   		"param" : { "url" : buyurl,id : '1', "title" : "该功能需订购高级版并重新打开插件才能使用(当前版本:初级版)", "width" : '800', "height" : '650' }
		   	}); */
	       	
 	}
 	function openlines_s(urls){
 			QN.application.invoke({
		 "cmd": "translateUrl",
		 "param":{'url':urls},
		 "success": function (e){
			 if(typeof  e=== 'string'){
	            	e = JSON.parse(e);
	            }
			window.open(e.url);
		 }
	});
 	}
function openline_qn(link,id,title,width,height){
	QN.application.invoke({
	   		"cmd" : "browserUrlEmbedded",
	   		"param" : { "url" : link,"id" : id, "title" : title, "width" : width, "height" : height }
	   	});
}
 /*******************日期时间转换unix时间戳****************/
 function datetime_to_unix(datetime){
     var tmp_datetime = datetime.replace(/:/g,'-');
     tmp_datetime = tmp_datetime.replace(/ /g,'-');
     var arr = tmp_datetime.split("-");
     var now = new Date(Date.UTC(arr[0],arr[1]-1,arr[2],arr[3]-8,arr[4],arr[5]));
     return parseInt(now.getTime()/1000);
 }
 /*******************获取时间,0为今天,-1为一天前****************/
 function GetDateStr(AddDayCount){
     var dd = new Date();
     dd.setDate(dd.getDate()+AddDayCount);/*获取AddDayCount天后的日期*/
     var y = dd.getFullYear();
     var m = dd.getMonth()+1;/*获取当前月份的日期*/
     var d = dd.getDate();
     return dd.format();
 }
 /**************************系统*******************/
 Date.prototype.format = function(format){
     /*
      * eg:format="yyyy-MM-dd hh:mm:ss";
      */
     if(!format){
         format = "yyyy-MM-dd hh:mm:ss";
     }
     var o = {
         "M+": this.getMonth() + 1, /* month*/
         "d+": this.getDate(), /* day*/
         "h+": this.getHours(), /* hour*/
         "m+": this.getMinutes(), /* minute*/
         "s+": this.getSeconds(), /* second*/
         "q+": Math.floor((this.getMonth() + 3) / 3), /* quarter*/
         "S": this.getMilliseconds()

     };
     if (/(y+)/.test(format)) {
         format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
     }
     for (var k in o) {
         if (new RegExp("(" + k + ")").test(format)) {
             format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" +o[k]).length));
         }
     }
     return format;
 };
/**
 * @author chenlonge
 * @param 获取某日期距离今天的日期
 */
function getTimeDiff(activityday){
	var date2=new Date(Date.parse(activityday.replace(/-/g,"/")));
	var s2=date2.getTime();
	var date1=new Date();
	var s1=date1.getTime();
	var ms=s1-s2;
	var h=Math.floor(ms/(3600*1000*24));
	if( h < 0 ){
	return Math.abs(h);
	}else{	
		return '-'+h;
	}
}


 /**
  * js_HashMap方法
  * @author Duanhq
  */
 function HashMap(){var size=0;var entry=new Object();this.put=function(key,value){if(!this.containsKey(key)){size++}entry[key]=value};this.get=function(key){if(this.containsKey(key)){return entry[key]}else{return null}};this.remove=function(key){if(delete entry[key]){size--}};this.containsKey=function(key){return(key in entry)};this.containsValue=function(value){for(var prop in entry){if(entry[prop]==value){return true}}return false};this.values=function(){var values=new Array(size);for(var prop in entry){values.push(entry[prop])}return values};this.keys=function(){var keys=new Array(size);for(var prop in entry){keys.push(prop)}return keys};this.size=function(){return size}};
</script>   
<script type="text/javascript">
	var start=0; 
	var end=0; 
	function addcf(span){ 
		var textBox = document.getElementById("ta"); 
		var pre = textBox.value.substr(0, start); 
		var post = textBox.value.substr(end); 
		textBox.value = pre + span + post; 
	}
	function fSetValue(textBox,pre,post){
		textBox.value = pre + post;	
		fSetPos(textBox,pre);
	}
	function fSetPos(textBox,pre){
		setCursorPosition(textBox,pre.length);
	}
	function fBackSpace(textBox,pre,post){
		var find = ";";
		var reg = new RegExp(find,"g");
		if(pre.substr(pre.length-1)==";"){  //整分隔
			pre = pre.substr(0,pre.length-1);			
		}else{
			post = post.substr(post.indexOf(";")+1);
		}
		pre = pre.substr(0,pre.lastIndexOf(";")+1);	
		fSetValue(textBox,pre,post);	
	}
	function fDeleSpace(textBox,pre,post){
		var find = ";";
		var reg = new RegExp(find,"g");
		if(pre=="" || pre.substr(pre.length-1)==";"){  //整分隔			
		}else{
			pre = pre.substr(0,pre.lastIndexOf(";")+1);
		}
		post = post.substr(post.indexOf(";")+1);
		fSetValue(textBox,pre,post);
	}
	function fLeftArrow(textBox,pre,post){
		var find = ";";
		var reg = new RegExp(find,"g");
		if(pre.substr(pre.length-1)==";"){  //整分隔
			pre = pre.substr(0,pre.length-1);
		}
		pre = pre.substr(0,pre.lastIndexOf(";")+2);
		fSetPos(textBox,pre);
	}
	function fRightArrow(textBox,pre,post){
		var find = ";";
		var reg = new RegExp(find,"g");
		var post_ = post.substr(0,post.indexOf(";"));		
		pre = pre + post_;				
		fSetPos(textBox,pre);
	}
	function savePos1(textBox){
		var pre = textBox.value.substr(0, start);
		var post = textBox.value.substr(end);		
		if(event.keyCode==8 && event.srcElement.id=="ta" && start>0){//前删除
			fBackSpace(textBox,pre,post);		
		}else if(event.keyCode==46 && event.srcElement.id=="ta" && post!=""){//后删除
			fDeleSpace(textBox,pre,post);
		}else if(event.keyCode==37 && event.srcElement.id=="ta" && start>0){//向左			
			fLeftArrow(textBox,pre,post);
		}else if(event.keyCode==39 && event.srcElement.id=="ta" && post!=""){//向左
			fRightArrow(textBox,pre,post);
		}
		savePos(textBox);		
	}
	function savePos(textBox){ 
		//如果是Firefox(1.5)的话，方法很简单 
		if(typeof(textBox.selectionStart) == "number"){ 
			start = textBox.selectionStart; 
			end = textBox.selectionEnd; 
		} 
		//下面是IE(6.0)的方法，麻烦得很，还要计算上'\n' 
		else if(document.selection){ 
			var range = document.selection.createRange(); 
			if(range.parentElement().id == textBox.id){
				// create a selection of the whole textarea 
				var range_all = document.body.createTextRange(); 
				range_all.moveToElementText(textBox); 
				//两个range，一个是已经选择的text(range)，一个是整个textarea(range_all) 
				//range_all.compareEndPoints()比较两个端点，如果range_all比range更往左(further to the left)，则 		//返回小于0的值，则range_all往右移一点，直到两个range的start相同。 
// calculate selection start point by moving beginning of range_all to beginning of range 
				for (start=0; range_all.compareEndPoints("StartToStart", range) < 0; start++) 
					range_all.moveStart('character', 1); 
// get number of line breaks from textarea start to selection start and add them to start 
// 计算一下\n 
				for (var i = 0; i <= start; i ++){
					if (textBox.value.charAt(i) == '\n')
						start++;
				}
				// create a selection of the whole textarea 
				var range_all = document.body.createTextRange(); 
				range_all.moveToElementText(textBox); 
				// calculate selection end point by moving beginning of range_all to end of range 
				for (end = 0; range_all.compareEndPoints('StartToEnd', range) < 0; end ++)
					range_all.moveStart('character', 1); 
				// get number of line breaks from textarea start to selection end and add them to end 
				for (var i = 0; i <= end; i ++){
					if (textBox.value.charAt(i) == '\n')
						end ++; 
				}
			}
		}
	if(event.keyCode==39 && event.srcElement.id=="ta"){		
		if(textBox.value.length!=end){
			start = start + 1;
			end = end + 1;
		}
	}
	if(event.keyCode==37 && event.srcElement.id=="ta"){		
			start = start - 1;
			end = end - 1;
	}
	//document.getElementById("start").value = start;
	//document.getElementById("end").value = end;
	}
	//设置光标位置函数 
	function setCursorPosition(ctrl, pos){ 
		if(ctrl.setSelectionRange){ 
			ctrl.focus(); 
			ctrl.setSelectionRange(pos,pos); 
		}else if (ctrl.createTextRange) { 
			var range = ctrl.createTextRange(); 
			range.collapse(true); 
			range.moveEnd('character', pos); 
			range.moveStart('character', pos); 
			range.select(); 
		} 
	}
	function faaa(){
		if(event.keyCode==37){
		}
	}
</script>
 <script type="text/javascript">
 wwkf();
 function wwkf(){
	 var nowtime = new Date();
	 var pdtime=nowtime.format("yyyy-MM-dd hh:mm:ss");
	 var pdtime1=nowtime.format("yyyy-MM-dd")+' 08:00:00';
	 var pdtime2=nowtime.format("yyyy-MM-dd")+' 23:59:59';
	 if(datetime_to_unix(pdtime)>datetime_to_unix(pdtime1)&&datetime_to_unix(pdtime)<datetime_to_unix(pdtime2)){
		 $(".wwkfim").attr("src","http://cdn.zzgdapp.com/trade/web/images/online.png");
		 }else{
			 $(".wwkfim").attr("src","http://cdn.zzgdapp.com/trade/web/images/offline.png");
			 }
	 }
 
 function tozdrate(){
		QN.application.invoke({
			 "cmd": "getLoginuser",
			 "success": function (e){
				 if(typeof  e=== 'string'){
		            	e = JSON.parse(e);
		            }
			 var mynick=decodeURI(e.user_nick);
			 var subnick='';
			 if(e.sub_user_nick!=null&&e.sub_user_nick!=''){
				 	subnick=decodeURI(e.sub_user_nick);
			 }
			 $.ajax({
				    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/zdrate',
				    type: 'POST',
				    dataType:'html',
				    data:{nick:mynick},
				    timeout:10000,
			        success: function(data){
				        var mydata=data;
			    		if(mydata=='off'){
				    		if(subnick!=''){
				    			$("#hints").html('<p>子帐号无法进行自动评价授权，请使用主帐号授权后再使用此自动评价功能</p>');
		             	        showMsg('hint');
				    		}else{
				    			QN.application.invoke({
				    				 "cmd": "translateUrl",
				    				 "param":{'url':"https://oauth.taobao.com/authorize?response_type=code&client_id=21085840&redirect_uri=<?php echo APP_WEB_INDEX_ROOT;?>/tc/trades?state=tradepc&scope=item&view=web"},
				    				 "success": function (e){
				    					 if(typeof  e=== 'string'){
				    			            	e = JSON.parse(e);
				    			            }
				    					 window.location.href=e.url;
				    				 }
				    			});
				    		}
				        }else{
				        	window.location.href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/zdrate?vers=<?php echo REAL_ROOT_VER;?>"; 

				        }
					},
			       error: function(){
				}
			    });
			 }
		 });
	} 
 function sentsuggest(){
	 var textareas=$('#suggest').val();
	 if(textareas.length<3||textareas.length>120){
         $("#hints").html('<p>输入的建议信息必须在3~120个字之间！</p>');
         showMsg('hint');
		 }else{
	 QN.application.invoke({
		 "cmd": "getLoginuser",
		 "success": function (e){
			 if(typeof  e=== 'string'){
	            	e = JSON.parse(e);
	            }
		 	 user_nick=decodeURI(e.user_nick);
			 $.ajax({
				    url: '<?php echo APP_WEB_INDEX_ROOT;?>/iytrade/saveMemo',
				    type: 'POST',
				    dataType:'html',
				    data:{nick:user_nick,textarea:textareas},
				    timeout:10000,
			        success: function(data){
				        if(data>0){
					        $("#hints").html('<p>提交成功！</p>');
                            showMsg('hint');
                            }else{ 
                            	$("#hints").html('<p>提交失败！</p>');
                                showMsg('hint');
                            }
					},
			       error: function(){
			    	   $("#errodata2").html('<p>提交失败！error</p>');
                       $("#erroinfo").modal('show');
			
				}
		    });
		 }
	 });
	 }
	 }


 function mofirst(newaddid){
	 QN.application.invoke({
		 "cmd": "getLoginuser",
		 "success": function (rsp){
			 if(typeof  rsp=== 'string'){
  					rsp = JSON.parse(rsp);
	            }
			user_nick=decodeURI(rsp.user_nick);
			 if(checkiid!=''){
				 mozj(checkiid);
				 }else{
				 moft(newaddid);
					 }
		 }
	 });
	 }




function wangwangPP(pjnick){
		var info  = "";
		var os = navigator.platform;
		var userAgent = navigator.userAgent;
		if(os.indexOf("Win") > -1){
			if(userAgent.indexOf("Windows NT 5.0") > -1){
				info += "Win2000";
			}else if(userAgent.indexOf("Windows NT 5.1") > -1){
				info += "WinXP";
			}else if(userAgent.indexOf("Windows NT 5.2") > -1){
				info += "Win2003";
			}else if(userAgent.indexOf("Windows NT 6.0") > -1){
				info += "WindowsVista";
			}else if(userAgent.indexOf("Windows NT 6.1") > -1 || userAgent.indexOf("Windows 7") > -1){
				info += "Win7";
			}else if(userAgent.indexOf("Windows 8") > -1 || userAgent.indexOf("Windows NT 6.2") > -1){
				info += "Win8";
			}else{
				info += "Other";
			}
		}else if(os.indexOf("Mac") > -1){
			info += "Mac";
		}else if(os.indexOf("X11") > -1){
			info += "Unix";
		}else if(os.indexOf("Linux") > -1){
			info += "Linux";
		}else{
			info += "Other";
		}
		var content='电脑系统【'+info+'】_插件应用：【爱用交易管理】_PC千牛版本：【';
		
	  QN.application.invoke({
			  cmd: "getVersion",
			  success: function(e){
				 if(typeof  e=== 'string'){
			          e = JSON.parse(e);
			      }
				 content=content+e.version+'】';
				 wangwangPC(pjnick,content);
			  }
			});
}

function wangwangP(pjnick){
	var wangwangnick='cntaobao'+pjnick;
	QN.wangwang.invoke({
	    "category": 'wangwang', 
	    "cmd": 'chat',
	    "param": {'uid':wangwangnick},
	    "success": function (rsp) {
	    },
	    "error": function(msp){
        }  
	});
}
function wangwangPC_vip(pjnickc,contents){
        	contents=contents.replace(/，，/g,'');
        	contents=contents.replace(/undefined/g,'');
        	wangwangPC(pjnickc,contents);
}
function wangwangPC(pjnickc,contents){
	var wangwangnick='cntaobao'+pjnickc;
	var content=contents;
	QN.wangwang.invoke({
	    "category": 'wangwang', 
	    "cmd": 'chat',
	    "param": {'uid':wangwangnick},
	    "success": function (rsp) {
	    	QN.wangwang.invoke({
	 	        category: 'wangwang',
	 	        cmd: 'insertText2Inputbox',
	 	        param: {'uid':wangwangnick,'text':content,'type':0},
	 	        success: function (rsp) {
	 	        },
	 	       error: function(msp){
               }
	 	    });
	    },
	    "error": function(msp){
        }  
	});
}



function colorClick(colvar){
	$("#indexsel").attr("class","dqzt");
}
function totitleSet(){
	if(EV_MsgBox_ID!='')closeMsg('');
	var titleonce = window.localStorage.getItem("titleonce"+user_nick);
	if(titleonce=="null"||titleonce==null){
		window.localStorage.setItem("titleonce"+user_nick,"wangsx");
        $("#twohints").html('<p>使用“商品简称管理”功能，需到插件中心将爱用商品设置为商品管理默认插件之后再使用！</p>');
		document.getElementById('hintok').setAttribute("onclick", "totitleSet();");
		$('#twohint').modal('show');
	}else{
	    QN.plugin.invoke({
	    	"cmd": "titleSet",
	    	"param": {},
	    	"category": "shangpinguanli"
	    	});
		}
}
function tradedots(type){
$.ajax({
	url:'http://cdn.zzgdapp.com/iysta/trade/trade'+type,
	type:'GET',
	success:function(s){},
	error:function(b){}
});
}
/**
 * Created with need.
 * User: wangsx
 * Date: 14-4-26
 * Time: 14:00 
 * 按钮埋点
 */	
function tradePoint(nick,path){
	if(nick=='')nick=user_nick;
	var paths=path+'付费';
	if(vipuser!=1){	
		switch(paths){
			case '首页旺旺催付付费':{onbutton=paths;break;}
			case '详情催付按钮付费':{onbutton=paths;break;}
			case '首页批量发货确定付费':{onbutton=paths;break;}
			case '添加新快递单模板付费':{onbutton=paths;break;}
			case '批量备注付费':{onbutton=paths;break;}
			case '批量评价确定付费':{onbutton=paths;break;}
			case '差评拦截开关付费':{onbutton=paths;break;}
			case '设为默认快递单付费':{onbutton=paths;break;}
			case '保存快递单模板付费':{onbutton=paths;break;}
			case '开启自动评价付费':{onbutton=paths;break;}
			case '打印发货之批量打印快递单付费':{onbutton=paths;break;}
			case '打印发货之批量打印发货单付费':{onbutton=paths;break;}
			case '打印发货之批量发货按钮付费':{onbutton=paths;break;}
			case '催付设置确定付费':{onbutton=paths;break;}
		}
		$.ajax({
			type:"post",
			url:"<?php echo APP_WEB_INDEX_ROOT?>/tc/tradePoint",
			async:true,
			data : { 'nick' : nick, 'path' : path },
			timeout : 5000,
			success : function(data) {
			}
		});
	}else{	
		var gjb='';
			if(path=='高级版离过期还有28天'){
				gjb='vip28';
			}else if(path=='高级版离过期还有15天'){
				gjb='vip15';
			}else if(path=='高级版离过期还有7天'){
				gjb='vip7';
			}else if(path=='高级版离过期还有3天'){
				gjb='vip3';
			}else if(path=='版本信息[升级]'){
				gjb='版本信息[续费]';/*高级版就是续费*/
			}else{
				return;
			}
							
		$.ajax({
			type:"post",
			url:"<?php echo APP_WEB_INDEX_ROOT?>/tc/tradePoint",
			async:true,
			data : { 'nick' : nick, 'path' : gjb },
			timeout : 5000,
			success : function(data) {
			}
		});
	}
}
 </script>
 <!--  <script type="text/javascript" src="http://g.tbcdn.cn/sj/mqn-qrcode/js/qn-promotion-qrcode.js?t=201312041810" data-uri="http://to.taobao.com/2RV6Nfy" data-txt="扫一扫下千牛" charset="utf-8"></script> -->
 <!--Profile Form下面是模版 -->
<script id="external_newaddmo" type="text/x-handlebars-template">
<tr id="ext{{contact_id}}">
	<td width="10%">
		<label class="radio-pretty  inline {{active}}" >
			<input type="radio"  name="fhaddr"  value="good" onclick="setaddr({{contact_id}})" {{active}}><span>默认</span>
		</label>
	</td>
	<td width="10%">
		<label class="radio-pretty  inline {{actives}}" >
			<input type="radio"  name="thaddr"  value="good" onclick="setaddr2({{contact_id}})" {{actives}}><span>默认</span>
		</label>
	</td>
	<td width="60%">{{province}},{{city}},{{country}},{{addr}},{{zip_code}},{{contact_name}},{{phone}},{{mobile_phone}}</td>
	<td width="20%"><a href="javascript:sfdelete({{contact_id}})">删除</a>&nbsp;<a href="javascript:sfedit({{contact_id}})">编辑</a></td>
</tr>
</script>
<script id="setlist_template" type="text/x-handlebars-template">
	<label class="checkbox-pretty inline span3" >
	    <input type="checkbox" id="{{code}}" value="{{id}},{{code}},{{name}};" name="checkbox[]"><span>{{name}}</span>
	 </label>
</script>
<style type="text/css">
.mesWindow{border:#666 1px solid;background:#fff;border-radius: 5px;}
.mesWindowTop{border-bottom:#eee 1px solid;margin-left:4px;padding:3px;font-weight:bold;text-align:left;font-size:12px;}
.mesWindowBottom{padding: 6px 10px 6px;margin-bottom: 0;text-align: right;border-top: 1px solid #ddd;background-color: #f5f5f5;-webkit-border-radius: 0 0 6px 6px;-moz-border-radius: 0 0 6px 6px;border-radius: 0 0 6px 6px;-webkit-box-shadow: inset 0 1px 0 #fff;-moz-box-shadow: inset 0 1px 0 #fff;box-shadow: inset 0 1px 0 #fff;}
.mesWindow .close{height:15px;width:28px;border:none;cursor:pointer;text-decoration:underline;background:#fff;text-decoration:none;}
.formk{display:block;padding:4px 0}
.footer{position: absolute;bottom: 0;width: 100%;clear:both;}
.mesWindowContent{max-height: 360px;padding: 15px;overflow-y: auto;}
</style>
<script type="text/javascript">
    var EV_MsgBox_ID=""; //重要
    //弹出对话窗口(msgID-要显示的div的id)
    function showMsg(msgID){

    	document.body.style.overflow='hidden'
    	 //创建大大的背景框
      	 if(EV_MsgBox_ID!='')closeMsg('');
    	 var bgObj=document.createElement("div");
    	 bgObj.setAttribute('id','EV_bgModeAlertDiv');
    	 document.body.appendChild(bgObj);
    	 //背景框满窗口显示
    	 EV_Show_bgDiv();
    	 //把要显示的div居中显示
    	 EV_MsgBox_ID=msgID;
    	 EV_Show_msgDiv();
    }
    //关闭对话窗口
    function closeMsg(againMsg){
    	document.body.style.overflow='';
        try{
    	 var msgObj=document.getElementById(EV_MsgBox_ID);
    	 var bgObj=document.getElementById("EV_bgModeAlertDiv");
    	 msgObj.style.display="none";
    	 document.body.removeChild(bgObj);
    	 EV_MsgBox_ID="";
    	 if(againMsg!=''){
        	 showMsg(againMsg);
        	 $("input[msgstu='again']").attr("onclick","closeMsg('');");
    	 }
        }catch(e){
            }
    }
    //窗口大小改变时更正显示大小和位置
    window.onresize=function(){
    	 if (EV_MsgBox_ID.length>0){
    		 EV_Show_bgDiv();
    		 EV_Show_msgDiv();
    	 }
    }
    //窗口滚动条拖动时更正显示大小和位置
    window.onscroll=function(){
    	 if (EV_MsgBox_ID.length>0){
    		 EV_Show_bgDiv();
    		 EV_Show_msgDiv();
    	 }
    }
    //把要显示的div居中显示
    function EV_Show_msgDiv(){
    	 var msgObj   = document.getElementById(EV_MsgBox_ID);
    	 msgObj.style.display  = "block";
    	 var msgWidth = msgObj.scrollWidth;
    	 var msgHeight= msgObj.scrollHeight;
    	 var bgTop=EV_myScrollTop();
    	 var bgLeft=EV_myScrollLeft();
    	 var bgWidth=EV_myClientWidth();
    	 var bgHeight=EV_myClientHeight();
    	 var msgTop=bgTop+Math.round((bgHeight-msgHeight)/2);
    	 var msgLeft=bgLeft+Math.round((bgWidth-msgWidth)/2);
    	 msgObj.style.position = "absolute";
    	 msgObj.style.top      = msgTop+"px";
    	 msgObj.style.left     = msgLeft+"px";
    	 msgObj.style.zIndex   = "10001";
     }
    //背景框满窗口显示
    function EV_Show_bgDiv(){
    	 var bgObj=document.getElementById("EV_bgModeAlertDiv");
    	 var bgWidth=EV_myClientWidth();
    	 var bgHeight=EV_myClientHeight();
    	 var bgTop=EV_myScrollTop();
    	 var bgLeft=EV_myScrollLeft();
    	 bgObj.style.position   = "absolute";
    	 bgObj.style.top        = bgTop+"px";
    	 bgObj.style.left       = bgLeft+"px";
    	 bgObj.style.width      = bgWidth + "px";
    	 bgObj.style.height     = bgHeight + "px";
    	 bgObj.style.zIndex     = "10000";
    	 bgObj.style.background = "#777";
    	 bgObj.style.filter     = "progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=60,finishOpacity=60);";
    	 bgObj.style.opacity    = "0.6";
    }
    //网页被卷去的上高度
    function EV_myScrollTop(){
    	 var n=window.pageYOffset 
    	 || document.documentElement.scrollTop 
    	 || document.body.scrollTop || 0;
    	 return n;
    }
    //网页被卷去的左宽度
    function EV_myScrollLeft(){
    	 var n=window.pageXOffset 
    	 || document.documentElement.scrollLeft 
    	 || document.body.scrollLeft || 0;
    	 return n;
    }
    //网页可见区域宽
    function EV_myClientWidth(){
    	 var n=document.documentElement.clientWidth 
    	 || document.body.clientWidth || 0;
    	 return n;
    }
    //网页可见区域高
    function EV_myClientHeight(){
    	 var n=document.documentElement.clientHeight 
    	 || document.body.clientHeight || 0;
    	 return n;
    }

    $(".nav").slide({ type:"menu",  titCell:".m", targetCell:".sub", delayTime:0, triggerTime:0,returnDefault:true,defaultPlay:false  });
	$(".topNav").slide({ type:"menu",  titCell:"dd", targetCell:"ul", delayTime:0,defaultPlay:false,returnDefault:true  });
	$(function(){
		$('#mfb2').hide();
		   $('#mfb1').parents('ul').mouseover(function(){
		     $('#mfb1').hide();
		     $('#mfb2').show();
		   });
		   $('#mfb2').mouseout(function(){
		   	 $('#mfb2').hide();
		     $('#mfb1').show();
		   });
		});
	faceShow();
	function faceShow(){
		try{
		var recruitid=',dressa2z,xianhui889,你看到我了吗,vigossde,tb18621104137,巾美康禄美专卖店,zqylp,贴心内衣连锁店,dhmould,衣部落商行,民族小西北,hlbyc1066,阿木童数码专营店,swq2008xinmi,lt173,长缨电器专营店,yy592413627,刘勇刚2011,飞翔电子1314,dylanqueen旗舰店,qingsongzhang,欧歌德,ping900210,嘟嘟兔旗舰店,九有汽车用品,乐格格吉祥,直径旗舰店,wanghuazhu_1986,huangfasong139,chengzhi545,镇平棉花糖,zhaox868,博兰卡旗舰店,诚信心网,sam200899,柏诗宣旗舰店,泛泛之辈90后,维康医疗商城,liang梁建辉,cong86083550,萃林食品专营店,mikoo66,dandan520lzc,sushunjin88,喵了个咪的102,王洪满333,枫缘s小园,鑫宇花木园艺,tb38080795,tigerhgt,海声淘,tb2875085,ymlz0918,tb9996172,ljbhyy,玲伊儿,山歌农庄食品旗舰店,tb5750992_2012,kezhaozi,唯美敏久,lulishu123,一棵小松树品牌店,tb8787554_2012,伍仲花,tb091032,速成电脑,装备帝国,膜法传奇1853实体店代理商,昵称盖罗嗦,博亿画坊,炫酷潮流服饰直营店,华欣艺术盆,王朝家居,lixye,钻石书屋,焦作快递1,理想鞋类专营店,清香窗纱,好吃的酥糖,韦唯小韦唯的韦唯,le百氏,所谓迷途,只是说说6,祥子岳,败家mm_2008,ruina_yuqing0611,稻草人邦购,袁童星,slliy1108,asd_love,tb078691_2013,靓容颜99,充值中心秒充,jiexiaobao2013,宏达电器商场,cj7751641,玉花办公专营店,熊来了旗舰店,k1003306647,午子特产,ll88519,灵草之家,qq545038571,欢喜go购,潮猫格格,萧瑟之雪,阳光之桐,幻影蝶梦1990,19891211fang,东莞平杨,cookny,dy信誉,nbazone28,魅惑轩妆,为何对你动情,mingyang625,wangye239233,vip171365253,duanjingli168,qianyongtao88,嘉嘉967,chy19870626chy,北京珠宝店,罗林_dear,xdl619,康乐宁个人护理专家,yanglikaixin,心野生哥,中能博通数码专营店,cch8353372921,陕西忒色,墨竹品牌,欧逸整体家居直营店,湖南中骑,675452563东哥,donlian123,真爱实木家具店,老脸1,guantongyun,新达123456,yanxi390,feng191253816,liqing0983,hujiling20,meishishua,m459057825,臧成建2011,0469shop,konglone,yyfu89,运动饰家,hsl728262966,唯依时尚前线,huan370823280,大唐龙凤旗舰店,鸿旗惠民鞋服,李老师直销店,inlove1314520,fhy1215,wangkai520min,奈小m,tb_9108078,红红火火家居88,诚信为荣v失信可耻,miss855848,开怀依足旗舰店,圣比鹰,wzq8888886,fxgjyyf,sam0614,琴牵一线26,哇哒噢,凋零的泪珠,融得利深圳专卖店,国产凌凌漆1号,tb0790720_2011,tb_867970,wangdan01126,粉色DHC,利鑫数码广场,tcrj0507,喜信购,红子樱桃,便卖全球,zwyzhq520,xurencaityy,junjundaxia1,androidzhuanmai,雨过天枫,grainger,时尚潮人exo,2009超越非凡,lylus,伊姿依尚旗舰店,卡锐迪服饰专营店,rory概念店,龙予寒,红星工具,羽都旗舰店,庚和电子gh,yzd1019,独占1朵花9,fangmin018,fangmin018,fangmin018,undefined,小熊兰尼,稻草屋旗舰店,百谷优选旗舰店,多多来了81197,悠悠美妆小铺,玫瑰待放,白小白0105,dellboss,qian_qiufeng,中山市温娜服饰有限公司,knifo,儒林食品专营店,豆蔻丽族,today20070408,淘我喜欢1081,xslotus旗舰店,kidorable旗舰店,lwzsandie,幽灵体验店,3fffc,大信母婴专营店,经典时尚旗航店,零点三分1,q3534575,龙泰达柠檬,你评网,宝贝风云001';
		var user_nickx=window.localStorage.getItem("loginnick");
		if(user_nickx==''|| user_nickx==null||user_nickx.length<2||user_nickx=='null'){
			 QN.application.invoke({
	      		 "cmd": "getLoginuser",
	      		 "success": function (e){
	      			 if(typeof  e=== 'string'){
	      	            	e = JSON.parse(e);
	      	            }
		      		 user_nickx=decodeURI(e.user_nick);
	        		 window.localStorage.setItem("loginnick",user_nickx);
	        		 if(recruitid.indexOf(','+user_nickx)>-1)$("#recruitid").show();
	      		 }
	      		 });
			}else  if(recruitid.indexOf(','+user_nickx)>-1)$("#recruitid").show();
		}catch(e){}
		}
</script>

<!--
<script>
function showActB(type){
	console.log(actviptime);
	console.log(isactB);
if(actviptime!='off'&&isactB){
	var diff=getTimeDiff(actviptime);
	console.log(type);
	console.log(actviptime);
	switch(diff){
		case 7:
		{
			if(type=='index'){
				
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">恭喜！您获得爱用交易免费试用5天高级版体验期，试用期内免费使用所有高级版功能哦！s</div>');
				$('#adv_tops').show();
				var newuser = window.localStorage.getItem(user_nick+'newuser');
			  	if(newuser!='yes'||newuser==''||newuser==null){
			  		window.localStorage.setItem(user_nick+'newuser','yes');
			  		showaaa(0);
			  	}
				
			}else if(type=='zdrate'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：距自动评价功能体验期结束还有5天，为了不影响您的店铺DSR评分值请<a href="javascript:actBclick(\'自动评价\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='interceptor'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：距差评拦截功能体验期结束还有5天，为了不影响您的店铺好评率请<a href="javascript:actBclick(\'拦截\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}
			$('#overdaytime').html(5);
			console.log('第一天');
			break;
		}
		case 6:
		{
			var newuser = window.localStorage.getItem(user_nick+'newuser2_rate');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#zdratexx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
				
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_defenlog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#defenlogxx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');	
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_defen');		
			if(newuser==''||newuser==null||newuser=='null'){		
				$('#defenratexx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_ratelog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#neutralnum').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
			}
			
			if(type=='zdrate'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：距自动评价功能体验期结束还有4天，为了不影响您的店铺DSR评分值请<a href="javascript:actBclick(\'自动评价\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='interceptor'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：距差评拦截功能体验期结束还有4天，为了不影响您的店铺好评率请<a href="javascript:actBclick(\'拦截\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}
			$('#overdaytime').html(4);
			console.log('第2天');
			break;
		}
		case 5:
		{
			var newuser = window.localStorage.getItem(user_nick+'newuser2_rate');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#zdratexx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
				
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_defenlog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#defenlogxx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');	
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_defen');		
			if(newuser==''||newuser==null||newuser=='null'){		
				$('#defenratexx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_ratelog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#neutralnum').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
			}
			if(type=='zdrate'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：距自动评价功能体验期结束还有3天，为了不影响您的店铺DSR评分值请<a href="javascript:actBclick(\'自动评价\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='interceptor'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：距差评拦截功能体验期结束还有3天，为了不影响您的店铺好评率请<a href="javascript:actBclick(\'拦截\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='index'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">提醒：您的高级版体验期还有3天，结束后将自动关闭所有高级版功能，建议<a href="javascript:actBclick(\'首页\');">升级高级版</a>！</div>');
				$('#adv_tops').show();
			}
			$('#overdaytime').html(3);
			console.log('3');
			break;
		}
		case 4:
		{
			var newuser = window.localStorage.getItem(user_nick+'newuser2_rate');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#zdratexx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
				
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_defenlog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#defenlogxx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');	
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_defen');		
			if(newuser==''||newuser==null||newuser=='null'){		
				$('#defenratexx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_ratelog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#neutralnum').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
			}
			if(type=='zdrate'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：距自动评价功能体验期结束还有2天，为了不影响您的店铺DSR评分值请<a href="javascript:actBclick(\'自动评价\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='interceptor'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：距差评拦截功能体验期结束还有2天，为了不影响您的店铺好评率请<a href="javascript:actBclick(\'拦截\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='index'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">提醒：您的高级版体验期还有2天，结束后将自动关闭所有高级版功能，建议<a href="javascript:actBclick(\'首页\');">升级高级版</a>！</div>');
				$('#adv_tops').show();
			}
			$('#overdaytime').html(2);
			console.log('第4天');
			break;
		}
		case 3:
		{
			var newuser = window.localStorage.getItem(user_nick+'newuser2_rate');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#zdratexx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
				
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_defenlog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#defenlogxx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');	
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_defen');		
			if(newuser==''||newuser==null||newuser=='null'){		
				$('#defenratexx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_ratelog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#neutralnum').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
			}
			if(type=='zdrate'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：距自动评价功能体验期结束还有1天，为了不影响您的店铺DSR评分值请<a href="javascript:actBclick(\'自动评价\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='interceptor'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：距差评拦截功能体验期结束还有1天，为了不影响您的店铺好评率请<a href="javascript:actBclick(\'拦截\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='index'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">提醒：您的高级版体验期还有1天，结束后将自动关闭所有高级版功能，建议<a href="javascript:actBclick(\'首页\');">升级高级版</a>！</div>');
				$('#adv_tops').show();
			}
			$('#overdaytime').html(1);
			console.log('第5天');
			break;
		}
		case 2:
		{
			var isnewuser = window.localStorage.getItem(user_nick+'isnewuser');
			if(isnewuser==''||isnewuser==null||isnewuser=='null'){
				window.localStorage.removeItem(user_nick+'newuser2_defenlog');
				window.localStorage.removeItem(user_nick+'newuser2_ratelog');
				window.localStorage.removeItem(user_nick+'newuser2_rate');
				window.localStorage.removeItem(user_nick+'newuser2_defen');
				window.localStorage.setItem(user_nick+'isnewuser','yes');
			}
			var newuser = window.localStorage.getItem(user_nick+'newuser2_defenlog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#defenlogxx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');	
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_ratelog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#neutralnum').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
			}
			if(type=='zdrate'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：您的自动评价验期已结束，现在为您保留2天，为了不影响您的店铺DSR评分值请<a href="javascript:actBclick(\'自动评价\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='interceptor'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：您的差评拦截体验期已结束，现在为您保留2天，为了不影响您的店铺好评率请<a href="javascript:actBclick(\'拦截\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='index'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">提示：您的高级版体验期已结束，自动为您保留2天，为了不影响店铺质量，请<a href="javascript:actBclick(\'首页\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}
			console.log('第6天');
			break;
		}
		case 1:
		{
			var isnewuser = window.localStorage.getItem(user_nick+'isnewuser');
			if(isnewuser==''||isnewuser==null||isnewuser=='null'){
				window.localStorage.removeItem(user_nick+'newuser2_defenlog');
				window.localStorage.removeItem(user_nick+'newuser2_ratelog');
				window.localStorage.removeItem(user_nick+'newuser2_rate');
				window.localStorage.removeItem(user_nick+'newuser2_defen');
				window.localStorage.setItem(user_nick+'isnewuser','yes');
			}
			var newuser = window.localStorage.getItem(user_nick+'newuser2_defenlog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#defenlogxx').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');	
			}
			newuser = window.localStorage.getItem(user_nick+'newuser2_ratelog');
			if(newuser==''||newuser==null||newuser=='null'){
				$('#neutralnum').html(' <img src="http://cdn.zzgdapp.com/trade/web/images/topxx.png" />');
			}
			if(type=='zdrate'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：您的自动评价验期已结束，现在为您保留1天，为了不影响您的店铺DSR评分值请<a href="javascript:actBclick(\'自动评价\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='interceptor'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：您的差评拦截体验期已结束，现在为您保留1天，为了不影响您的店铺好评率请<a href="javascript:actBclick(\'拦截\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}else if(type=='index'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">提示：您的高级版体验期已结束，自动为您保留1天，为了不影响店铺质量，请<a href="javascript:actBclick(\'首页\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
			}
			console.log('第7天');
			break;
		}
	}

}else{
	if(type=='index'){
	  var oHead = document.getElementsByTagName('HEAD').item(0); 

    var oScript= document.createElement("script"); 

    oScript.type = "text/javascript"; 

    oScript.src="http://cdn.zzgdapp.com/yunying/trade/advertisement/guanggaotiao.js"; 

    oHead.appendChild( oScript);
   }
   if(vipuser==0&&autorate=='on'){
   	$.ajax({
				type: 'POST',
				data:{nick:user_nick,sel:'off'},
				url: 'http://trade.zzgdapp.com/iytrade/closeauto',
				success: function(data){
					console.log('successful!');
				},
				error: function(){
				}
		});
   }
   if(vipuser==0&&testUser=='yes'){
   		if(type=='zdrate'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：您的自动评价验期已结束，为了不影响您的店铺DSR评分值请<a href="javascript:actBclick(\'自动评价\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
		}else if(type=='interceptor'){
				$('#adv_tops').append('<div style="color: #333333 ; border: 1px #fdb08e solid ; line-height:20px ; padding: 2px 10px 3px 10px ; font-size: 14px ; background: #fff ; font-family: "微软雅黑", "宋体",Helvetica,Arial, sans-serif; ">通知：您的差评拦截体验期已结束，为了不影响您的店铺好评率请<a href="javascript:actBclick(\'拦截\');">立即升级</a>高级版！</div>');
				$('#adv_tops').show();
		}
   }
}
}
function actBclick(type){
	tradePoint(user_nick,'先尝后买'+type);
	$('#buyvip').modal('show');
}
function actzdrate(){
	layer.close(layer.index);
	showMsg('zdrate_content');
}
function actdefenrate(){
	layer.close(layer.index);
	showMsg('defenrate_contents');
	
}
function showaaa(set){
	if(set>0){
		try{
		layer.close(layer.index);
		}catch(e){console.log(e);}
	}
	set++;
	var htmldivstr='<div><img src="http://cdn.zzgdapp.com/trade/web/images/jy'+set+'.png" border="0" usemap="#Map" />';
	var picmap='';
	switch(set){
		case 1:
		{
			picmap='<map name="Map" id="Map"><area shape="rect" coords="280,388,470,440" href="javascript:showaaa('+set+');"/></map></div>';
			break;
		}
		case 2:
		{
			picmap='<map name="Map" id="Map"><area shape="rect" coords="300,430,493,488" href="javascript:actzdrate();"/><area shape="rect" coords="505,441,552,468" href="javascript:showaaa('+set+');"/></map></div>';

			break;
		}
		case 3:
		{
			picmap='<map name="Map" id="Map"><area shape="rect" coords="300,430,493,488" href="javascript:actdefenrate();"/><area shape="rect" coords="505,441,552,468" href="javascript:showaaa('+set+');"/></map></div>';
			break;
		}
		case 4:
		{
			picmap='<map name="Map" id="Map"><area shape="rect" coords="152,380,244,409" href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/printSend?vers=<?php echo REAL_ROOT_VER;?>"/><area shape="rect" coords="551,507,643,540" href="<?php echo APP_WEB_INDEX_ROOT;?>/trade/sms?vers=<?php echo REAL_ROOT_VER;?>"/><area shape="rect" coords="721,25,752,55" href="javascript:layer.close(layer.index);"/></map></div>';
			break;
		}
		case 5:
		{
			return;
		}
	}
	htmldivstr+=picmap;
	                $.layer({
	            	    type: 1,
	            	    closeBtn: false,
	            	    shadeClose: false,
	            	    shade: [0.8, '#333'],
	            		border: [0],
	            	    time: '0',
	            	    title: false,
	            	    area: ['auto','auto'],
	            	   	offset: ['0px', '0px'],
	            	    fadeIn: 100,
	            	    move: false,
	            	    page: {
	            	    	html: htmldivstr,
	            	    }
	            	});
}
</script>-->
<!--<script type="text/javascript" src="http://cdn.zzgdapp.com/trade/web/yunyin/autorates.js" ></script>-->

