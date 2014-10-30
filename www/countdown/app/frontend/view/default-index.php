<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<STYLE type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}
</STYLE>
<LINK href="{$this->data['baseurl']}images/slideshow_buttontitle.css" rel="stylesheet" type="text/css">
<BODY>
<SCRIPT src="{$this->data['baseurl']}images/jquery-1.3.2.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="{$this->data['baseurl']}images/slideshow_buttontitle.js" type="text/javascript"></SCRIPT>
<SCRIPT language="javascript" type="text/javascript">
    $(function() {
        $("#slideshow1").slideshow_buttontitle({
            time_interval: '3000',
            window_background_color: "#FFF",
            window_padding: '1',
            window_width: '1000',
            window_height: '250',
            border_size: '1',
            border_color: 'black',
            title_text_color: 'white',
            title_background_color: '#42AEC2',
            button_color: '#84C5D2',
            button_current_color: '#2C7E8F',
            button_size: '15'
        });
    });
</SCRIPT>

<DIV style="margin: 0px auto ;" align="center">
    <DIV class="slideshow_buttontitle" id="slideshow1">
        <UL>
            <!--{loop $this->data['rows'] $k $v}-->
             <LI><A target="_blank" title="{$v['title']}" href="{$v['url']}"><IMG alt="{$v['title']}"  src="{$v['img']}"></A></LI>
             <!--{/loop}-->
        </UL>
        <DIV class="slideshow_simple1_title"></DIV>
        <UL class="slideshow_simple1_nav">
            <!--{loop $this->data['rows'] $k $v}-->
            <LI></LI>
            <!--{/loop}-->
        </UL>
        <DIV style="clear: both;"></DIV></DIV>
    <DIV style="height: 30px;"></DIV>
   </DIV></BODY></HTML>
