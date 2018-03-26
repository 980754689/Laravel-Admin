<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <title>首页</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="{{ admin_asset('/home/css/style.css') }}" />
    <script src="{{ admin_asset('/home/js/jquery.js') }}"></script>
    <script src="{{ admin_asset('/home/js/lib.js') }}"></script>
</head>

<body>
    <div class="header">
        <div class="wp">
            <div class="logo">
                <a href="">
                    <img src="images/logo.png" alt="" />
                </a>
            </div>
            <div class="hdr">
                <ul>
                    <li>
                        <a href="javascript:;"><i></i></a>
                        <div class="so">
                            <input type="text" class="inp" />
                        </div>
                    </li>
                    <li>
                        <a href="">登录</a>
                    </li>
                    <li>
                        <a href="">注册</a>
                    </li>
                    <li>
                        <a href="">速买网</a>
                    </li>
                    <li>
                        <dl class="m-lang">
                            <dt><img src="images/ditu.png" alt="" /><i></i></dt>
                            <dd>
                                <a href="">中文</a>
                                <a href="">英文</a>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="wp">
            <ul>
                <li><a href="">关于上上</a></li>
                <li><a href="">发展战略</a></li>
                <li><a href="">资讯中心</a></li>
                <li><a href="">上上产业</a></li>
                <li><a href="">研发创新</a></li>
                <li><a href="">品牌中心</a></li>
                <li><a href="">服务中心</a></li>
                <li><a href="">人才中心</a></li>
                <li><a href="">线上交易</a></li>
            </ul>
        </div>
    </div>
    <div class="banner">
        <div class="bg"></div>
        <div class="slider">
            <a href="" class="items" style="background-image: url(images/ban-lb2.jpg);"></a>
            <a href="" class="items" style="background-image: url(images/ban-lb2.jpg);"></a>
            <a href="" class="items" style="background-image: url(images/ban-lb2.jpg);"></a>
        </div>
    </div>
    <div class="main-index">
        <div class="snav">
            <div class="wp">
                <ul>
                    <li>
                        <a href="" class="items">
						<span class="ico" style="background-image: url({{ admin_asset('/home/images/l-ico1.png') }});"></span>
						<p>智能制造</p>
					  <span class="en">Intelligent manufacturing</span>
					</a>
                    </li>
                    <li>
                        <a href="" class="items">
						<span class="ico" style="background-image: url(images/l-ico2.png);"></span>
						<p>智能服务</p>
						<span class="en">Intelligent service</span>
					</a>
                    </li>
                    <li>
                        <a href="" class="items">
						<span class="ico" style="background-image: url(images/l-ico3.png);"></span>
						<p>上上智汇</p>
						<span class="en">Shangshang Newell</span>
					</a>
                    </li>
                    <li>
                        <a href="" class="items">
						<span class="ico" style="background-image: url(images/l-ico4.png);"></span>
						<p>产品货架</p>
						<span class="en">Product shelf</span>
					</a>
                    </li>
                    <li>
                        <a href="" class="items">
						<span class="ico" style="background-image: url(images/l-ico5.png);"></span>
						<p>技术货架</p>
						<span class="en">Technical shelf</span>
					</a>
                    </li>
                    <li>
                        <a href="" class="items">
						<span class="ico" style="background-image: url(images/l-ico6.png);"></span>
						<p>案例货架</p>
						<span class="en">Case shelf</span>
					</a>
                    </li>
                    <li>
                        <a href="" class="items">
						<span class="ico" style="background-image: url(images/l-ico7.png);"></span>
						<p>现货超市</p>
						<span class="en">Spot supermarket</span>
					</a>
                    </li>
                    <li>
                        <a href="" class="items">
						<span class="ico" style="background-image: url(images/l-ico8.png);"></span>
						<p>工厂定制</p>
						<span class="en">Factory customization</span>
					</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="wp">
            <div class="row-index1">
                <div class="items">
                    <div class="tit">
                        <img src="images/word-lb1.png" alt="">
                        <div class="ico"></div>
                    </div>
                    <span class="en">Intelligent manufacturing</span>
                    <h4>打造上上智能制造样板工厂</h4>
                    <p>作为制造业企业，我们响应“中国制造2025”计划，从设备革新<br>、数据抓取、产品提质等多方面入手，改善传统制造业<br>待完善的地方，描摹新的制造业蓝图。</p>
                </div>
                <div class="items">
                    <div class="tit">
                        <img src="images/word-lb1.png" alt="">
                        <div class="ico"></div>
                    </div>
                    <span class="en">Intelligent service</span>
                    <h4>打造上上管道行业全产业链智能服务平</h4>
                    <p>用我们改良制造业的理念以及我们自主开发的相关软件，去服务自身的同<br>时，辐射整个不锈钢乃至工业领域，包括我们的客户群体，<br> 用互联网</p>
                </div>
            </div>
            <div class="row-index2">
                <ul class="ul-tab-lb2 TAB_CLICK" id=".m-box-lb">
                    <li class="on">
                        <a href="javascript:;" class="items">
                            <div class="img">
                                <img src="images/l-ico9.png" alt="">
                            </div>
                            <div class="txt">
                                <h4>集团动态<em>Group Dynamics</em></h4>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="items">
                            <div class="img">
                                <img src="images/l-ico10.png" alt="">
                            </div>
                            <div class="txt">
                                <h4>上上智汇<em>Shangshang Newell</em></h4>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="items">
                            <div class="img">
                                <img src="images/l-ico11.png" alt="">
                            </div>
                            <div class="txt">
                                <h4>上上工学院<em>Shangshang Engineering Institute</em></h4>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="m-box-lb">
                    <ul class="ul-con-lb2">
                        <li>
                            <div class="items">
                                <h4><a href="">热烈庆祝松阳上上德盛不锈钢有限公司被认...</a></h4>
                                <p>2016年11月21日，经浙江省科学技术厅、浙江省财政厅、浙江省国家税务局、浙江省地方税务局联合审定并经国家科技部备案审查...</p>
                                <span class="date">2016-11-24</span>
                            </div>
                        </li>
                        <li>
                            <div class="items">
                                <h4><a href="">盛景网联工业互联网主管合伙人袁子文一行...</a></h4>
                                <p>2016年11月21日，经浙江省科学技术厅、浙江省财政厅、浙江省国家税务局、浙江省地方税务局联合审定并经国家科技部备案审查...</p>
                                <span class="date">2016-11-24</span>
                            </div>
                        </li>
                        <li>
                            <div class="items">
                                <h4><a href="">庆“五一”迎“五四”！“凝聚你我力量•共创...</a></h4>
                                <p>2016年11月21日，经浙江省科学技术厅、浙江省财政厅、浙江省国家税务局、浙江省地方税务局联合审定并经国家科技部备案审查...</p>
                                <span class="date">2016-11-24</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="m-box-lb dn">
                    <ul class="ul-con-lb2">
                        <li>
                            <div class="items">
                                <h4><a href="">22热烈庆祝松阳上上德盛不锈钢有限公司被认...</a></h4>
                                <p>2016年11月21日，经浙江省科学技术厅、浙江省财政厅、浙江省国家税务局、浙江省地方税务局联合审定并经国家科技部备案审查...</p>
                                <span class="date">2016-11-24</span>
                            </div>
                        </li>
                        <li>
                            <div class="items">
                                <h4><a href="">盛景网联工业互联网主管合伙人袁子文一行...</a></h4>
                                <p>2016年11月21日，经浙江省科学技术厅、浙江省财政厅、浙江省国家税务局、浙江省地方税务局联合审定并经国家科技部备案审查...</p>
                                <span class="date">2016-11-24</span>
                            </div>
                        </li>
                        <li>
                            <div class="items">
                                <h4><a href="">庆“五一”迎“五四”！“凝聚你我力量•共创...</a></h4>
                                <p>2016年11月21日，经浙江省科学技术厅、浙江省财政厅、浙江省国家税务局、浙江省地方税务局联合审定并经国家科技部备案审查...</p>
                                <span class="date">2016-11-24</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="m-box-lb dn">
                    <ul class="ul-con-lb2">
                        <li>
                            <div class="items">
                                <h4><a href="">333热烈庆祝松阳上上德盛不锈钢有限公司被认...</a></h4>
                                <p>2016年11月21日，经浙江省科学技术厅、浙江省财政厅、浙江省国家税务局、浙江省地方税务局联合审定并经国家科技部备案审查...</p>
                                <span class="date">2016-11-24</span>
                            </div>
                        </li>
                        <li>
                            <div class="items">
                                <h4><a href="">盛景网联工业互联网主管合伙人袁子文一行...</a></h4>
                                <p>2016年11月21日，经浙江省科学技术厅、浙江省财政厅、浙江省国家税务局、浙江省地方税务局联合审定并经国家科技部备案审查...</p>
                                <span class="date">2016-11-24</span>
                            </div>
                        </li>
                        <li>
                            <div class="items">
                                <h4><a href="">庆“五一”迎“五四”！“凝聚你我力量•共创...</a></h4>
                                <p>2016年11月21日，经浙江省科学技术厅、浙江省财政厅、浙江省国家税务局、浙江省地方税务局联合审定并经国家科技部备案审查...</p>
                                <span class="date">2016-11-24</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="" class="g-more-lb">MORE+</a>
            </div>
            <div class="row-index3">
                <div class="m-part-lb">
                    <div class="left">
                        <div class="con">
                            <div class="ico" style="background-image: url(images/lb-ico1.png);"></div>
                            <h4>我们的产品<em class="en">Our products</em></h4>
                        </div>
                    </div>
                    <div class="right">
                        <div class="slick-lb1">
                            <div class="slider">
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb7.jpg" alt="">
                                    </div>
                                    <p>盘管</p>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb7.jpg" alt="">
                                    </div>
                                    <p>管件系列</p>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb7.jpg" alt="">
                                    </div>
                                    <p>焊管</p>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb7.jpg" alt="">
                                    </div>
                                    <p>毛细管</p>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb7.jpg" alt="">
                                    </div>
                                    <p>盘管</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-part-lb">
                    <div class="left">
                        <div class="con">
                            <div class="ico" style="background-image: url(images/lb-ico2.png);"></div>
                            <h4>我们的案例<em class="en">Our case</em></h4>
                        </div>
                    </div>
                    <div class="right">
                        <div class="slick-lb2">
                            <div class="slider">
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb8.jpg" alt="">
                                    </div>
                                    <div class="txt">
                                        <h4>石油精练装置用不锈钢</h4>
                                        <p>以石油炼厂废气、天然气或石脑油作原料，通过一系列化学反应可以制取乙烯、丙烯、乙快等...</p>
                                    </div>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb8.jpg" alt="">
                                    </div>
                                    <div class="txt">
                                        <h4>石油精练装置用不锈钢</h4>
                                        <p>以石油炼厂废气、天然气或石脑油作原料，通过一系列化学反应可以制取乙烯、丙烯、乙快等...</p>
                                    </div>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb8.jpg" alt="">
                                    </div>
                                    <div class="txt">
                                        <h4>石油精练装置用不锈钢</h4>
                                        <p>以石油炼厂废气、天然气或石脑油作原料，通过一系列化学反应可以制取乙烯、丙烯、乙快等...</p>
                                    </div>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb8.jpg" alt="">
                                    </div>
                                    <div class="txt">
                                        <h4>石油精练装置用不锈钢</h4>
                                        <p>以石油炼厂废气、天然气或石脑油作原料，通过一系列化学反应可以制取乙烯、丙烯、乙快等...</p>
                                    </div>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb8.jpg" alt="">
                                    </div>
                                    <div class="txt">
                                        <h4>石油精练装置用不锈钢</h4>
                                        <p>以石油炼厂废气、天然气或石脑油作原料，通过一系列化学反应可以制取乙烯、丙烯、乙快等...</p>
                                    </div>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb8.jpg" alt="">
                                    </div>
                                    <div class="txt">
                                        <h4>石油精练装置用不锈钢</h4>
                                        <p>以石油炼厂废气、天然气或石脑油作原料，通过一系列化学反应可以制取乙烯、丙烯、乙快等...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-part-lb">
                    <div class="left">
                        <div class="con">
                            <div class="ico" style="background-image: url(images/lb-ico3.png);"></div>
                            <h4>我们的客户<em class="en">Our clients</em></h4>
                        </div>
                    </div>
                    <div class="right">
                        <div class="slick-lb1 other">
                            <div class="slider">
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb9.jpg" alt="">
                                    </div>
                                    <p>中国石油</p>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb9.jpg" alt="">
                                    </div>
                                    <p>中国海油</p>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb9.jpg" alt="">
                                    </div>
                                    <p>中国石油</p>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb9.jpg" alt="">
                                    </div>
                                    <p>中国石油</p>
                                </a>
                                <a href="" class="items">
                                    <div class="img">
                                        <img src="images/img-lb9.jpg" alt="">
                                    </div>
                                    <p>中国石油</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="wp">
            <div class="fd-left">
                <ul class="fd-nv">
                    <li>
                        <a href="">关于上上</a>
                        <a href="">发展战略</a>
                        <a href="">资讯中心</a>
                    </li>
                    <li>
                        <a href="">上上产业</a>
                        <a href="">研发创新</a>
                        <a href="">品牌中心</a>
                    </li>
                    <li class="last">
                        <a href="">服务中心</a>
                        <a href="">人才中心</a>
                        <a href="">线上交易</a>
                    </li>
                </ul>
                <div class="fd-net">
                    <h4>上上网站群</h4>
                    <dl class="m-select">
                        <dt>上上官网<i></i></dt>
                        <dd>
                            <a href="">上上官网1</a>
                            <a href="">上上官网2</a>
                            <a href="">上上官网3</a>
                        </dd>
                    </dl>
                </div>
                <div class="c"></div>
                <p class="copyright">上上德盛集团有限公司 备案号：沪ICP备05025340号-2<span>网址：<a href="http://www.shangshang.com.cn">www.shangshang.com.cn</a></span></p>
            </div>
            <div class="fd-right">
                <h4>关注我们</h4>
                <ul>
                    <li>
                        <div class="pic">
                            <img src="images/q-eq2.jpg" alt="" />
                        </div>
                        <p>上上智汇</p>
                    </li>
                    <li>
                        <div class="pic">
                            <img src="images/q-eq2.jpg" alt="" />
                        </div>
                        <p>微信公众号</p>
                    </li>
                    <li>
                        <div class="pic">
                            <img src="images/q-eq2.jpg" alt="" />
                        </div>
                        <p>上上工学院</p>
                    </li>
                    <li>
                        <div class="pic">
                            <img src="images/q-eq2.jpg" alt="" />
                        </div>
                        <p>上上产品网</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 右侧悬浮 -->
    <ul class="ul-float">
        <li>
            <a href="" class="weixin"></a>
            <div class="box">
                <div class="img">
                    <img src="images/q-eq.jpg" alt="" />
                </div>
            </div>
        </li>
        <li>
            <a href="" class="weibo"></a>
        </li>
        <li>
            <a href="" class="tel"></a>
        </li>
        <li>
            <a href="javascript:;" class="toTop"></a>
        </li>
    </ul>
    <link rel="stylesheet" href="{{ admin_asset('/home/css/slick.css') }}">
    <script src="{{ admin_asset('/home/js/slick.min.js') }}"></script>
    <script>
        $(function() {
            $('.banner .slider').slick({
                dots: true,
                arrows: true
            });
            $('.slick-lb1 .slider').slick({
                dots: false,
                arrows: true,
                slidesToShow: 4
            });
            $('.slick-lb2 .slider').slick({
                dots: false,
                arrows: true,
                slidesToShow: 2,
                rows: 2
            });
        });
    </script>
</body>

</html>