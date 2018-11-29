<?php 
$datetime=explode('/', $_GET['date']);
    //fecha 1 y hora 1
    $datetime1=explode('T', $datetime[0]);
    $date1 = new DateTime($datetime1[0]);
    $time1=new DateTime($datetime1[1]);
     $date1->format('Y-m-d');
     $time1->format('H:i:s');

     //fecha 2 y hora 2
    $datetime2=explode('T', $datetime[1]);
    $date2 = new DateTime($datetime2[0]);
    $time2=new DateTime($datetime2[1]);
     $date2->format('Y-m-d');
     $time2->format('H:i:s');

?>
<html lang="es" data-initial-view-key="EVENT" data-base-title="Skynet S.A. - Calendar"><head>
<title>Skynet S.A. - Calendar - Detalles del evento</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style nonce="">body, html {font-family:Roboto,Helvetica,Arial,sans-serif;}/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto Regular'), local('Roboto-Regular'), url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto Regular'), local('Roboto-Regular'), url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto Regular'), local('Roboto-Regular'), url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto Regular'), local('Roboto-Regular'), url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto Regular'), local('Roboto-Regular'), url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto Regular'), local('Roboto-Regular'), url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto Regular'), local('Roboto-Regular'), url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
@font-face {
  font-family: 'Material Icons Extended';
  font-style: normal;
  font-weight: 400;
  src: url(//fonts.gstatic.com/s/materialiconsextended/v42/kJEjBvgX7BgnkSrUwT8UnLVc38YydejYY-oE_LvJ.woff2) format('woff2');
}
/* cyrillic */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Google Sans Regular'), local('GoogleSans-Regular'), url(//fonts.gstatic.com/s/googlesans/v5/4UaGrENHsxJlGDuGo1OIlL3Kwp5MKg.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Google Sans Regular'), local('GoogleSans-Regular'), url(//fonts.gstatic.com/s/googlesans/v5/4UaGrENHsxJlGDuGo1OIlL3Nwp5MKg.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* latin-ext */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Google Sans Regular'), local('GoogleSans-Regular'), url(//fonts.gstatic.com/s/googlesans/v5/4UaGrENHsxJlGDuGo1OIlL3Awp5MKg.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Google Sans Regular'), local('GoogleSans-Regular'), url(//fonts.gstatic.com/s/googlesans/v5/4UaGrENHsxJlGDuGo1OIlL3Owp4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 500;
  src: local('Google Sans Medium'), local('GoogleSans-Medium'), url(//fonts.gstatic.com/s/googlesans/v5/4UabrENHsxJlGDuGo1OIlLU94Yt3CwZ-Pw.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 500;
  src: local('Google Sans Medium'), local('GoogleSans-Medium'), url(//fonts.gstatic.com/s/googlesans/v5/4UabrENHsxJlGDuGo1OIlLU94YtwCwZ-Pw.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* latin-ext */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 500;
  src: local('Google Sans Medium'), local('GoogleSans-Medium'), url(//fonts.gstatic.com/s/googlesans/v5/4UabrENHsxJlGDuGo1OIlLU94Yt9CwZ-Pw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 500;
  src: local('Google Sans Medium'), local('GoogleSans-Medium'), url(//fonts.gstatic.com/s/googlesans/v5/4UabrENHsxJlGDuGo1OIlLU94YtzCwY.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Google Sans Bold'), local('GoogleSans-Bold'), url(//fonts.gstatic.com/s/googlesans/v5/4UabrENHsxJlGDuGo1OIlLV154t3CwZ-Pw.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Google Sans Bold'), local('GoogleSans-Bold'), url(//fonts.gstatic.com/s/googlesans/v5/4UabrENHsxJlGDuGo1OIlLV154twCwZ-Pw.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* latin-ext */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Google Sans Bold'), local('GoogleSans-Bold'), url(//fonts.gstatic.com/s/googlesans/v5/4UabrENHsxJlGDuGo1OIlLV154t9CwZ-Pw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Google Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Google Sans Bold'), local('GoogleSans-Bold'), url(//fonts.gstatic.com/s/googlesans/v5/4UabrENHsxJlGDuGo1OIlLV154tzCwY.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>


<link rel="stylesheet" href="https://calendar.google.com/calendar/_/scs/calendar-static/_/ss/k=calendar.mat.1vvnig5o8rfjf.L.W.O/am=ABDCUkAI/d=0/rs=ANwU0p5KqtzUSsgEPpFUGpDoulhzSbvBVQ">

<link rel="stylesheet" href="https://calendar.google.com//calendar.google.com/calendar/static/087a26e97313666a94a2694a3236ce5bshare_client_fastui.css">
<style nonce="">
    @import url('https://fonts.googleapis.com/css?lang=es&family=Product+Sans|Roboto:400,700');.gb_qb{font:13px/27px Roboto,RobotoDraft,Arial,sans-serif;z-index:986}@-webkit-keyframes gb__a{0%{opacity:0}50%{opacity:1}}@keyframes gb__a{0%{opacity:0}50%{opacity:1}}a.gb_wa{border:none;color:#4285f4;cursor:default;font-weight:bold;outline:none;position:relative;text-align:center;text-decoration:none;text-transform:uppercase;white-space:nowrap;-webkit-user-select:none}a.gb_wa:hover:after,a.gb_wa:focus:after{background-color:rgba(0,0,0,.12);content:'';height:100%;left:0;position:absolute;top:0;width:100%}a.gb_wa:hover,a.gb_wa:focus{text-decoration:none}a.gb_wa:active{background-color:rgba(153,153,153,.4);text-decoration:none}a.gb_xa{background-color:#4285f4;color:#fff}a.gb_xa:active{background-color:#0043b2}.gb_ya{-webkit-box-shadow:0 1px 1px rgba(0,0,0,.16);box-shadow:0 1px 1px rgba(0,0,0,.16)}.gb_wa,.gb_xa,.gb_za,.gb_Aa{display:inline-block;line-height:28px;padding:0 12px;-webkit-border-radius:2px;border-radius:2px}.gb_za{background:#f8f8f8;border:1px solid #c6c6c6}.gb_Aa{background:#f8f8f8}.gb_za,#gb a.gb_za.gb_za,.gb_Aa{color:#666;cursor:default;text-decoration:none}#gb a.gb_Aa.gb_Aa{cursor:default;text-decoration:none}.gb_Aa{border:1px solid #4285f4;font-weight:bold;outline:none;background:#4285f4;background:-webkit-linear-gradient(top,#4387fd,#4683ea);background:linear-gradient(top,#4387fd,#4683ea);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#4387fd,endColorstr=#4683ea,GradientType=0)}#gb a.gb_Aa.gb_Aa{color:#fff}.gb_Aa:hover{-webkit-box-shadow:0 1px 0 rgba(0,0,0,.15);box-shadow:0 1px 0 rgba(0,0,0,.15)}.gb_Aa:active{-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,.15);box-shadow:inset 0 2px 0 rgba(0,0,0,.15);background:#3c78dc;background:-webkit-linear-gradient(top,#3c7ae4,#3f76d3);background:linear-gradient(top,#3c7ae4,#3f76d3);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4,endColorstr=#3f76d3,GradientType=0)}.gb_7a{display:none!important}.gb_8a{visibility:hidden}.gb_8c{display:inline-block;vertical-align:middle}.gb_Pc{position:relative}.gb_b{display:inline-block;outline:none;vertical-align:middle;-webkit-border-radius:2px;border-radius:2px;-webkit-box-sizing:border-box;box-sizing:border-box;height:40px;width:40px;color:#000;cursor:pointer;text-decoration:none}#gb#gb a.gb_b{color:#000;cursor:pointer;text-decoration:none}.gb_sb{border-color:transparent;border-bottom-color:#fff;border-style:dashed dashed solid;border-width:0 8.5px 8.5px;display:none;position:absolute;left:11.5px;top:43px;z-index:1;height:0;width:0;-webkit-animation:gb__a .2s;animation:gb__a .2s}.gb_tb{border-color:transparent;border-style:dashed dashed solid;border-width:0 8.5px 8.5px;display:none;position:absolute;left:11.5px;z-index:1;height:0;width:0;-webkit-animation:gb__a .2s;animation:gb__a .2s;border-bottom-color:#ccc;border-bottom-color:rgba(0,0,0,.2);top:42px}x:-o-prefocus,div.gb_tb{border-bottom-color:#ccc}.gb_aa{background:#fff;border:1px solid #ccc;border-color:rgba(0,0,0,.2);color:#000;-webkit-box-shadow:0 2px 10px rgba(0,0,0,.2);box-shadow:0 2px 10px rgba(0,0,0,.2);display:none;outline:none;overflow:hidden;position:absolute;right:8px;top:62px;-webkit-animation:gb__a .2s;animation:gb__a .2s;-webkit-border-radius:2px;border-radius:2px;-webkit-user-select:text}.gb_8c.gb_g .gb_sb,.gb_8c.gb_g .gb_tb,.gb_8c.gb_g .gb_aa,.gb_g.gb_aa{display:block}.gb_8c.gb_g.gb_Ff .gb_sb,.gb_8c.gb_g.gb_Ff .gb_tb{display:none}.gb_Hf{position:absolute;right:8px;top:62px;z-index:-1}.gb_bb .gb_sb,.gb_bb .gb_tb,.gb_bb .gb_aa{margin-top:-10px}.gb_8c:first-child,#gbsfw:first-child+.gb_8c{padding-left:4px}.gb_Dc{position:relative}.gb_ie .gb_Dc,.gb_ae .gb_Dc{float:right}.gb_b{padding:8px;cursor:pointer}.gb_Qe button:focus svg,.gb_Ta .gb_Fb:not(.gb_wa):focus img,.gb_b:focus{background-color:rgba(0,0,0,0.20);outline:none;-webkit-border-radius:50%;border-radius:50%}.gb_8c{padding:4px}.gb_aa{z-index:991;line-height:normal}.gb_aa.gb_Re{left:8px;right:auto}@media (max-width:350px){.gb_aa.gb_Re{left:0}}.gb_Se .gb_aa{top:56px}.gb_8 .gb_b,.gb_9 .gb_8 .gb_b{background-position:-64px -29px}.gb_S .gb_8 .gb_b{background-position:-29px -29px;opacity:1}.gb_8 .gb_b,.gb_8 .gb_b:hover,.gb_8 .gb_b:focus{opacity:1}.gb_Bd{display:none}.gb_9b{display:inline-block;position:relative;top:2px;-webkit-user-select:none}.gb_ye .gb_9b{display:none}.gb_Dd .gb_ac{line-height:normal;position:relative;padding-left:16px}.gb_ze .gb_ac.gb_Ae{padding-left:4px}.gb_cc .gb_Ec:before{content:url('https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg');display:inline-block;height:24px;width:74px}.gb_cc .gb_Ec{height:24px;width:74px;display:inline-block;vertical-align:middle}.gb_cc{display:inline-block;vertical-align:middle}.gb_cc .gb_Ec,.gb_cc.gb_Be,.gb_cc:not(.gb_Be):not(:focus){outline:none}.gb_Va{display:inline-block;vertical-align:middle}.gb_fc{border:none;display:block;visibility:hidden}img.gb_Wa{border:0;vertical-align:middle}.gb_ee .gb_cc .gb_Ec:before{content:url('https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_light_clr_74x24px.svg')}.gb_de .gb_cc .gb_Ec:before{content:url('https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_dark_clr_74x24px.svg')}@media screen and (-ms-high-contrast:black-on-white){.gb_ee .gb_cc .gb_Ec:before{content:url('https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_dark_clr_74x24px.svg')}}@media screen and (-ms-high-contrast:white-on-black){.gb_de .gb_cc .gb_Ec:before{content:url('https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_light_clr_74x24px.svg')}}.gb_Va{background-repeat:no-repeat}.gb_me{display:inline-block;font-family:'Product Sans',Arial,sans-serif;font-size:22px;line-height:24px;padding-left:8px;position:relative;top:-1.5px;vertical-align:middle}.gb_Wa.gb_Ce{padding-right:4px}.gb_he.gb_me{opacity:.54}.gb_le:focus .gb_me{text-decoration:underline}.gb_Ae img.gb_Wa{margin-bottom:4px}.gb_Uc{color:inherit;font-size:22px;font-weight:400;line-height:48px;overflow:hidden;padding-left:16px;position:relative;text-overflow:ellipsis;vertical-align:middle;top:2px;white-space:nowrap;-webkit-flex:1 1 auto;flex:1 1 auto}.gb_Ta.gb_Ua .gb_Vc{position:relative;top:-2px}.gb_Ta.gb_Ua .gb_Uc{font-size:20px}.gb_Ta{min-width:320px;position:relative;-webkit-transition:box-shadow 250ms;transition:box-shadow 250ms}.gb_Ta.gb_Cd .gb_Bc{display:none}.gb_Ta.gb_Cd .gb_Dd{height:56px}header.gb_Ta{display:block}.gb_Ta svg{fill:currentColor}.gb_Ed{position:fixed;top:0;width:100%}.gb_Fd{-webkit-box-shadow:0 4px 5px 0 rgba(0,0,0,0.14),0 1px 10px 0 rgba(0,0,0,0.12),0 2px 4px -1px rgba(0,0,0,0.2);box-shadow:0 4px 5px 0 rgba(0,0,0,0.14),0 1px 10px 0 rgba(0,0,0,0.12),0 2px 4px -1px rgba(0,0,0,0.2)}.gb_Hd{height:64px}.gb_Ta:not(.gb_pc) .gb_Xc.gb_Zc:not(.gb_Id),.gb_Ta:not(.gb_pc) .gb_xd:not(.gb_Id),.gb_Ta.gb_Jd .gb_Xc.gb_Zc.gb_Id,.gb_Ta.gb_Jd .gb_xd.gb_Id{display:none!important}.gb_Dd{-webkit-box-sizing:border-box;box-sizing:border-box;position:relative;width:100%;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-box-pack:space-between;-webkit-justify-content:space-between;justify-content:space-between;min-width:-webkit-min-content;min-width:-moz-min-content;min-width:-ms-min-content;min-width:min-content}.gb_Ta:not(.gb_Ua) .gb_Dd{padding:8px}.gb_Ta.gb_Kd .gb_Dd{-webkit-flex:1 0 auto;flex:1 0 auto}.gb_Ta .gb_Dd.gb_Ld.gb_Md{min-width:0}.gb_Ta.gb_Ua .gb_Dd{padding:4px;min-width:0}.gb_Bc{height:48px;vertical-align:middle;white-space:nowrap;-webkit-box-align:center;-webkit-align-items:center;align-items:center;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-user-select:none}.gb_Od>.gb_Bc{display:table-cell;width:100%}.gb_Bc.gb_Pd:not(.gb_Qd) .gb_Rd{padding-left:16px}.gb_Bc.gb_Sd.gb_Pd:not(.gb_Qd) .gb_Rd,.gb_Bc.gb_Td:not(.gb_Qd) .gb_Rd{padding-right:16px}.gb_Bc:not(.gb_Qd) .gb_Rd{width:100%;-webkit-flex:1 1 auto;flex:1 1 auto}.gb_Rd.gb_8a{display:none}.gb_Ud.gb_Vd>.gb_Wd{min-width:initial!important;min-width:auto!important}.gb_Xd{padding-right:32px;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-flex:1 0 auto;flex:1 0 auto}.gb_Xd.gb_Zd{padding-right:0}.gb_Ta.gb_Ua .gb_Xd:not(.gb_Zd){padding-right:8px}.gb_Ta.gb_Ua .gb_Xd:not(.gb_0d),.gb_Dd.gb_Ld.gb_Md>.gb_Xd{-webkit-flex:1 1 auto;flex:1 1 auto;overflow:hidden}.gb_Ta.gb_Ua .gb_Ud:not(.gb_0d),.gb_Dd.gb_Ld.gb_Md>.gb_Ud{-webkit-flex:0 0 auto;flex:0 0 auto}.gb_Ud{-webkit-flex:1 1 100%;flex:1 1 100%}.gb_1d,.gb_2d:not(.gb_Ld):not(.gb_Vd).gb_3d{-webkit-box-pack:flex-end;-webkit-justify-content:flex-end;justify-content:flex-end}.gb_2d:not(.gb_Ld):not(.gb_Vd){-webkit-box-pack:center;-webkit-justify-content:center;justify-content:center}.gb_2d:not(.gb_Ld):not(.gb_Vd).gb_4d,.gb_2d:not(.gb_Ld):not(.gb_Vd).gb_5d{-webkit-box-pack:flex-start;-webkit-justify-content:flex-start;justify-content:flex-start}.gb_Ud.gb_Ld,.gb_Ud.gb_Vd{-webkit-box-pack:space-between;-webkit-justify-content:space-between;justify-content:space-between}.gb_Ud>:only-child{display:inline-block}.gb_Cc.gb_6d.gb_7d{padding-left:4px}.gb_Cc.gb_6d.gb_8d{padding-left:0}.gb_Ta.gb_Ua .gb_Cc.gb_6d.gb_8d{padding-left:4px;padding-right:0}.gb_7d{display:inline}.gb_Cc.gb_6d{-webkit-box-sizing:border-box;box-sizing:border-box;padding-left:32px;-webkit-flex:0 0 auto;flex:0 0 auto;-webkit-box-pack:flex-end;-webkit-justify-content:flex-end;justify-content:flex-end}.gb_Uc{display:inline-block}.gb_Cc{height:48px;line-height:normal;padding:0 4px}.gb_ae{height:48px}.gb_Ta.gb_ae{min-width:initial;min-width:auto}.gb_ae .gb_Cc{float:right}.gb_be{font-size:14px;max-width:200px;overflow:hidden;padding:0 12px;text-overflow:ellipsis;white-space:nowrap;-webkit-user-select:text}.gb_Ta{color:black}.gb_ce{background-color:#fff;-webkit-transition:background-color .4s;transition:background-color .4s}.gb_de{color:black;background-color:#e0e0e0}.gb_ee{color:white;background-color:#616161}.gb_Ta a,.gb_lc a{color:inherit}.gb_X{color:rgba(0,0,0,0.87)}.gb_Ta svg,.gb_lc svg{color:black;opacity:.54}.gb_ee svg{color:white;opacity:1}.gb_fe:hover,.gb_fe:focus,.gb_ge:hover,.gb_ge:focus{opacity:.85}.gb_he{color:inherit;opacity:1;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased}.gb_ee .gb_he,.gb_de .gb_he{opacity:1}.gb_ie>*{display:block;min-height:48px}.gb_Ta.gb_Ua .gb_ie>*{padding-top:4px;padding-bottom:4px;padding-left:16px}.gb_Ta:not(.gb_Ua) .gb_ie>*{padding-top:8px;padding-bottom:8px;padding-left:24px}.gb_Ta:not(.gb_Ua) .gb_Xd .gb_9b{-webkit-box-align:center;-webkit-align-items:center;align-items:center;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex}.gb_ie .gb_9b{display:table-cell;height:48px;vertical-align:middle}.gb_ie .gb_Cc,.gb_ie .gb_7d{background-color:#f5f5f5;display:block}.gb_ie .gb_7d .gb_8c{float:right}.gb_Ta.gb_Ua .gb_ie .gb_Cc,.gb_Ta.gb_Ua .gb_ie .gb_7d{padding:4px}.gb_Ta:not(.gb_Ua) .gb_ie .gb_Cc,.gb_Ta:not(.gb_Ua) .gb_ie .gb_7d{padding:8px}.gb_ie .gb_ab{width:40px}.gb_ie .gb_db{position:absolute;right:0;top:50%}.gb_je{position:relative}.gb_lc.gb_ke{-webkit-overflow-scrolling:touch}.gb_lc .gb_le{text-decoration:none}.gb_lc .gb_me{display:inline;white-space:normal;word-break:break-all;word-break:break-word}body.gb_ne [data-ogpc]{-webkit-transition:margin-left .25s cubic-bezier(0.4,0.0,0.2,1),visibility 0s linear .25s;transition:margin-left .25s cubic-bezier(0.4,0.0,0.2,1),visibility 0s linear .25s}body.gb_ne.gb_oe [data-ogpc]{-webkit-transition:margin-left .25s cubic-bezier(0.4,0.0,0.2,1),visibility 0s linear 0s;transition:margin-left .25s cubic-bezier(0.4,0.0,0.2,1),visibility 0s linear 0s}body [data-ogpc]{margin-left:0}body.gb_oe [data-ogpc]{margin-left:280px}.gb_pe{line-height:normal;padding-right:15px}a.gb_P,span.gb_P{color:rgba(0,0,0,0.87);text-decoration:none}.gb_ee a.gb_P,.gb_ee span.gb_P{color:white}a.gb_P:hover,a.gb_P:focus{opacity:.85;text-decoration:underline}.gb_Q{display:inline-block;padding-left:15px}.gb_Q .gb_P{display:inline-block;line-height:24px;outline:none;vertical-align:middle}.gb_se{padding-left:16px}.gb_se:not(.gb_Ua){padding-left:24px}.gb_te{color:black;opacity:.54}.gb_ue{background:white;-webkit-box-shadow:0 5px 5px -3px rgba(0,0,0,0.2),0 8px 10px 1px rgba(0,0,0,0.14),0 3px 14px 2px rgba(0,0,0,0.12);box-shadow:0 5px 5px -3px rgba(0,0,0,0.2),0 8px 10px 1px rgba(0,0,0,0.14),0 3px 14px 2px rgba(0,0,0,0.12);overflow-y:hidden;position:absolute;right:24px;top:48px}.gb_ve{background:#1a73e8;border:none;font-family:'Google Sans';font-weight:500;font-size:14px;letter-spacing:.25px;line-height:16px;margin-left:8px;margin-right:8px;min-width:50px;padding:10px 24px;text-align:center;vertical-align:middle;-webkit-border-radius:4px;border-radius:4px}.gb_Ta.gb_Ua .gb_ve{padding:10px 16px}.gb_Ra{background-color:rgba(255,255,255,0.88);cursor:pointer;display:inline-block;overflow:hidden;padding:0;vertical-align:middle;border:1px solid #dadce0;outline:none;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-border-radius:8px;border-radius:8px}.gb_Ra:hover{border:1px solid #d2e3fc;background-color:rgba(248,250,255,0.88)}.gb_Ra:focus{border:1px solid #fff;background-color:rgba(255,255,255);-webkit-box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 1px 3px 1px rgba(60,64,67,0.15);box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 1px 3px 1px rgba(60,64,67,0.15)}.gb_Sa{display:inline-block;padding-left:7px;padding-bottom:2px;text-align:center;vertical-align:middle}.gb_Ta:not(.gb_Ua) .gb_Ra{margin-left:12px}.gb_Ra .gb_Va.gb_Wa{min-width:0}.gb_9a{-webkit-background-size:32px 32px;background-size:32px 32px;-webkit-border-radius:50%;border-radius:50%;display:block;margin:0;overflow:hidden;position:relative;height:32px;width:32px;z-index:0}@media (min-resolution:1.25dppx),(-o-min-device-pixel-ratio:5/4),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_9a::before{display:inline-block;-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:left 0;transform-origin:left 0}.gb_Bb::before{display:inline-block;-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:left 0;transform-origin:left 0}}.gb_9a:hover,.gb_9a:focus{-webkit-box-shadow:0 1px 0 rgba(0,0,0,.15);box-shadow:0 1px 0 rgba(0,0,0,.15)}.gb_9a:active{-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,.15);box-shadow:inset 0 2px 0 rgba(0,0,0,.15)}.gb_9a:active::after{background:rgba(0,0,0,.1);-webkit-border-radius:50%;border-radius:50%;content:'';display:block;height:100%}.gb_ab{cursor:pointer;line-height:40px;min-width:30px;opacity:.75;overflow:hidden;vertical-align:middle;text-overflow:ellipsis}.gb_b.gb_ab{width:auto}.gb_ab:hover,.gb_ab:focus{opacity:.85}.gb_bb .gb_ab,.gb_bb .gb_cb{line-height:26px}#gb#gb.gb_bb a.gb_ab,.gb_bb .gb_cb{font-size:11px;height:auto}.gb_db{border-top:4px solid #000;border-left:4px dashed transparent;border-right:4px dashed transparent;display:inline-block;margin-left:6px;opacity:.75;vertical-align:middle}.gb_eb:hover .gb_db{opacity:.85}.gb_Ra>.gb_fb{padding:3px 3px 3px 4px}.gb_S .gb_ab,.gb_S .gb_db{opacity:1}#gb#gb.gb_S.gb_S a.gb_ab,#gb#gb .gb_S.gb_S a.gb_ab{color:#fff}.gb_S.gb_S .gb_db{border-top-color:#fff;opacity:1}.gb_9 .gb_9a:hover,.gb_S .gb_9a:hover,.gb_9 .gb_9a:focus,.gb_S .gb_9a:focus{-webkit-box-shadow:0 1px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2)}.gb_gb .gb_fb,.gb_hb .gb_fb{position:absolute;right:1px}.gb_fb.gb_R,.gb_ib.gb_R,.gb_eb.gb_R{-webkit-flex:0 1 auto;flex:0 1 auto;-webkit-flex:0 1 main-size;flex:0 1 main-size}.gb_jb.gb_kb .gb_ab{width:30px!important}.gb_lb.gb_8a{display:none}@-webkit-keyframes progressmove{0%{margin-left:-100%}to{margin-left:100%}}@keyframes progressmove{0%{margin-left:-100%}to{margin-left:100%}}.gb_mb.gb_7a{display:none}.gb_mb{background-color:#ccc;height:3px;overflow:hidden}.gb_nb{background-color:#f4b400;height:100%;width:50%;-webkit-animation:progressmove 1.5s linear 0s infinite;animation:progressmove 1.5s linear 0s infinite}.gb_pb{height:40px;position:absolute;right:-5px;top:-5px;width:40px}.gb_qb .gb_pb,.gb_rb .gb_pb{right:0;top:0}.gb_fb .gb_b{padding:4px}.gb_xe{display:none}.gb_gc{-webkit-border-radius:50%;border-radius:50%;display:inline-block;margin:0 4px;padding:12px;overflow:hidden;vertical-align:middle;cursor:pointer;height:24px;width:24px;-webkit-user-select:none;-webkit-flex:0 0 auto;flex:0 0 auto}.gb_Ua .gb_gc{margin:0 4px 0 0}.gb_gc:focus,.gb_gc:hover{background-color:rgba(0,0,0,0.071);outline:none}.gb_hc{display:none}.gb_ic{-webkit-transform:none;transform:none}.gb_kc{display:none}.gb_lc{background-color:#fff;bottom:0;color:#000;height:-webkit-calc(100vh - 100%);height:calc(100vh - 100%);overflow-y:auto;overflow-x:hidden;position:absolute;top:100%;z-index:990;will-change:visibility;visibility:hidden;display:-webkit-flex;display:flex;-webkit-flex-direction:column;flex-direction:column;-webkit-transition:transform .25s cubic-bezier(0.4,0.0,0.2,1),visibility 0s linear .25s;transition:transform .25s cubic-bezier(0.4,0.0,0.2,1),visibility 0s linear .25s}.gb_lc.gb_mc.gb_nc,.gb_lc.gb_mc.gb_nc:hover{overflow:visible}.gb_lc.gb_Ua{width:264px;-webkit-transform:translateX(-264px);transform:translateX(-264px)}.gb_lc:not(.gb_Ua){width:280px;-webkit-transform:translateX(-280px);transform:translateX(-280px)}.gb_lc.gb_g{-webkit-transform:translateX(0);transform:translateX(0);visibility:visible;-webkit-box-shadow:0 0 16px rgba(0,0,0,.28);box-shadow:0 0 16px rgba(0,0,0,.28);-webkit-transition:transform .25s cubic-bezier(0.4,0.0,0.2,1),visibility 0s linear 0s;transition:transform .25s cubic-bezier(0.4,0.0,0.2,1),visibility 0s linear 0s}.gb_oc.gb_pc{background-color:transparent;-webkit-box-shadow:0 0;box-shadow:0 0}.gb_oc.gb_pc>:not(.gb_qc){display:none}.gb_qc{display:-webkit-flex;display:flex;-webkit-flex:1 1 auto;flex:1 1 auto;-webkit-flex-direction:column;flex-direction:column}.gb_qc>.gb_rc{-webkit-flex:1 0 auto;flex:1 0 auto}.gb_qc>.gb_sc{-webkit-flex:0 0 auto;flex:0 0 auto}.gb_tc{list-style:none;margin-top:0;margin-bottom:0;padding:8px 0}.gb_lc:not(.gb_oc) .gb_tc:first-child{padding:0 0 8px 0}.gb_tc:not(:last-child){border-bottom:1px solid #ddd}.gb_uc{cursor:pointer}.gb_vc:empty{display:none}.gb_uc,.gb_vc{display:block;min-height:40px;padding-bottom:4px;padding-top:4px;font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;color:rgba(0,0,0,0.87)}.gb_lc.gb_Ua .gb_uc{padding-left:16px}.gb_lc:not(.gb_Ua) .gb_uc,.gb_lc:not(.gb_Ua) .gb_vc{padding-left:24px}.gb_uc:hover{background:rgba(0,0,0,0.12)}.gb_uc.gb_wc{background:rgba(0,0,0,0.12);font-weight:bold;color:rgba(0,0,0,0.87)}.gb_uc .gb_xc{text-decoration:none;display:inline-block;width:100%}.gb_uc .gb_xc:focus{outline:none}.gb_uc .gb_yc,.gb_vc{padding-left:32px;display:inline-block;line-height:40px;vertical-align:top;width:176px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.gb_qc.gb_0 .gb_xc:focus .gb_yc{text-decoration:underline}.gb_uc .gb_zc{height:24px;width:24px;float:left;margin-top:8px;vertical-align:middle}.gb_Mc .gb_Pc{font-size:14px;font-weight:bold;top:0;right:0}.gb_Mc .gb_b{display:inline-block;vertical-align:middle;-webkit-box-sizing:border-box;box-sizing:border-box;height:40px;width:40px}.gb_Mc .gb_sb{border-bottom-color:#e5e5e5}.gb_Qc{background-color:rgba(0,0,0,.55);color:white;font-size:12px;font-weight:bold;line-height:24px;margin:5px;padding:0 2px;text-align:center;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-border-radius:50%;border-radius:50%;height:24px;width:24px}.gb_Qc.gb_Rc{background-position:-79px 0}.gb_Qc.gb_Sc{background-position:-79px -64px}.gb_b:hover .gb_Qc,.gb_b:focus .gb_Qc{background-color:rgba(0,0,0,.85)}#gbsfw.gb_Tc{background:#e5e5e5;border-color:#ccc}.gb_9 .gb_Qc{background-color:rgba(0,0,0,.7)}.gb_S .gb_Qc.gb_Qc,.gb_S .gb_Jc .gb_Qc.gb_Qc,.gb_S .gb_Jc .gb_b:hover .gb_Qc,.gb_S .gb_Jc .gb_b:focus .gb_Qc{background-color:#fff;color:#404040}.gb_S .gb_Qc.gb_Rc{background-position:-54px -64px}.gb_S .gb_Qc.gb_Sc{background-position:0 -64px}.gb_Jc .gb_Qc.gb_Qc{background-color:#db4437;color:white}.gb_Jc .gb_b:hover .gb_Qc,.gb_Jc .gb_b:focus .gb_Qc{background-color:#a52714}.gb_De{line-height:20px;margin:2px;text-align:center;vertical-align:middle;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-border-radius:50%;border-radius:50%;height:20px;width:20px}.gb_Mc a{line-height:24px;-webkit-border-radius:50%;border-radius:50%}.gb_Ee.gb_Rc .gb_De{display:none}.gb_Ee svg{display:none;height:24px;width:24px}.gb_Ee.gb_Rc svg{display:block}.gb_Ee.gb_Sc svg{display:none}.gb_Jc .gb_De{color:white;background-color:#db4437;opacity:1}.gb_de .gb_Jc .gb_De{color:white;background-color:#db4437}.gb_ee .gb_Jc .gb_De{color:#212121;background-color:white}.gb_Fe{display:none}.gb_Cf{cursor:pointer;padding:13px}.gb_Df{background-color:rgba(0,0,0,0.1);-webkit-box-shadow:inset 1px 1px 3px rgba(0,0,0,.24);box-shadow:inset 1px 1px 3px rgba(0,0,0,.24);width:34px;height:17px;-webkit-border-radius:8px;border-radius:8px;position:relative;-webkit-transition:background-color ease 150ms;transition:background-color ease 150ms}.gb_Cf[aria-pressed=true] .gb_Df{background-color:rgba(255,255,255,0.1)}.gb_Ef{position:absolute;width:25px;height:25px;-webkit-border-radius:50%;border-radius:50%;-webkit-box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24);box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24);top:-4px;-webkit-transform:translateX(-12px);transform:translateX(-12px);background-color:white;-webkit-transition:transform ease 150ms;transition:transform ease 150ms}.gb_Cf[aria-pressed=true] .gb_Ef{-webkit-transform:translateX(20px);transform:translateX(20px)}.gb_Ef img{position:absolute;margin:5px;width:15px;height:15px}.gb_Wd{line-height:0;-webkit-user-select:none}.gb_Ud>.gb_Wd:only-child{float:right}.gb_Wd .gb_Le{display:inline-block}.gb_Wd .gb_Fb{cursor:pointer}.gb_Wd .gb_Fb img{opacity:.54;width:24px;height:24px;padding:12px}.gb_ee .gb_Wd .gb_Fb img{opacity:1}.gb_He{text-align:right}.gb_Le{text-align:initial}.gb_Wd .gb_Me,.gb_Wd .gb_Ne{display:table-cell;height:48px;vertical-align:middle}.gb_Wd .gb_Me{overflow:hidden}.gb_Wc{display:none}.gb_Wc.gb_g{display:block}.gb_Xc{background-color:#fff;-webkit-box-shadow:0 1px 0 rgba(0,0,0,0.08);box-shadow:0 1px 0 rgba(0,0,0,0.08);color:#000;position:relative;z-index:986}.gb_Zc{height:40px;padding:16px 24px;white-space:nowrap}.gb_0c{position:fixed;bottom:16px;padding:16px;right:16px;white-space:normal;width:328px;-webkit-transition:width .2s,bottom .2s,right .2s;transition:width .2s,bottom .2s,right .2s;-webkit-border-radius:2px;border-radius:2px;-webkit-box-shadow:0 5px 5px -3px rgba(0,0,0,0.2),0 8px 10px 1px rgba(0,0,0,0.14),0 3px 14px 2px rgba(0,0,0,0.12);box-shadow:0 5px 5px -3px rgba(0,0,0,0.2),0 8px 10px 1px rgba(0,0,0,0.14),0 3px 14px 2px rgba(0,0,0,0.12)}@media (max-width:400px){.gb_Xc.gb_0c{max-width:368px;width:auto;bottom:0;right:0}}.gb_Xc .gb_Fb{border:0;font-weight:500;font-size:14px;line-height:36px;min-width:32px;padding:0 16px;vertical-align:middle}.gb_Xc .gb_Fb:before{content:'';height:6px;left:0;position:absolute;top:-6px;width:100%}.gb_Xc .gb_Fb:after{bottom:-6px;content:'';height:6px;left:0;position:absolute;width:100%}.gb_Xc .gb_Fb+.gb_Fb{margin-left:8px}.gb_1c{height:48px;padding:4px;margin:-8px 0 0 -8px}.gb_0c .gb_1c{float:left;margin:-4px}.gb_2c{font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;overflow:hidden;vertical-align:top}.gb_Zc .gb_2c{display:inline-block;padding-left:8px;width:640px}.gb_0c .gb_2c{display:block;margin-left:56px;padding-bottom:16px}.gb_3c{background-color:inherit}.gb_Zc .gb_3c{display:inline-block;position:absolute;top:18px;right:24px}.gb_0c .gb_3c{text-align:right;padding-right:24px;padding-top:6px}.gb_3c .gb_4c{height:1.5em;margin:-.25em 10px -.25em 0;vertical-align:text-top;width:1.5em}.gb_5c{line-height:20px;font-size:16px;font-weight:700;color:rgba(0,0,0,.87)}.gb_0c .gb_5c{color:rgba(0,0,0,.87);font-size:16px;line-height:20px;padding-top:8px}.gb_Zc .gb_5c,.gb_Zc .gb_6c{width:640px}.gb_6c .gb_7c,.gb_6c{line-height:20px;font-size:13px;font-weight:400;color:rgba(0,0,0,.54)}.gb_0c .gb_6c .gb_7c{font-size:14px}.gb_0c .gb_6c{padding-top:12px}.gb_0c .gb_6c a{color:rgba(66,133,244,1)}.gb_8c.gb_9c{padding:0}.gb_9c .gb_aa{padding:26px 26px 22px 13px;background:#ffffff}.gb_ad.gb_9c .gb_aa{background:#4d90fe}a.gb_bd{color:#666666!important;font-size:22px;height:9px;opacity:.8;position:absolute;right:14px;top:4px;text-decoration:none!important;width:9px}.gb_ad a.gb_bd{color:#c1d1f4!important}a.gb_bd:hover,a.gb_bd:active{opacity:1}.gb_cd{padding:0;width:258px;white-space:normal;display:table}.gb_dd .gb_aa{top:62px;border:0;padding:16px;-webkit-box-shadow:4px 4px 12px rgba(0,0,0,0.4);box-shadow:4px 4px 12px rgba(0,0,0,0.4)}.gb_dd .gb_cd{width:328px}.gb_dd .gb_Aa,.gb_dd .gb_ed,.gb_dd .gb_7c,.gb_dd .gb_wa,.gb_fd{line-height:normal;font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif}.gb_dd .gb_Aa,.gb_dd .gb_ed,.gb_dd .gb_wa{font-weight:500}.gb_dd .gb_Aa,.gb_dd .gb_wa{border:0;padding:10px 8px}.gb_9c .gb_Aa:active{outline:none;-webkit-box-shadow:0 4px 5px rgba(0,0,0,.16);box-shadow:0 4px 5px rgba(0,0,0,.16)}.gb_dd .gb_ed{color:#222;margin-bottom:8px}.gb_dd .gb_7c{color:#808080;font-size:14px}.gb_gd{text-align:right;font-size:14px;padding-bottom:0;white-space:nowrap}.gb_gd .gb_hd{margin-left:8px}.gb_gd .gb_id.gb_hd img{background-color:inherit;-webkit-border-radius:initial;border-radius:initial;height:1.5em;margin:-0.25em 10px -0.25em 2px;vertical-align:text-top;width:1.5em}.gb_dd .gb_cd .gb_jd .gb_id{border:2px solid transparent}.gb_dd .gb_cd .gb_jd .gb_id:focus{border-color:#bbccff}.gb_dd .gb_cd .gb_jd .gb_id:focus:after,.gb_dd .gb_cd .gb_jd .gb_id:hover:after{background-color:transparent}.gb_fd{background-color:#404040;color:#fff;padding:16px;position:absolute;top:62px;min-width:328px;max-width:650px;right:8px;-webkit-border-radius:2px;border-radius:2px;-webkit-box-shadow:4px 4px 12px rgba(0,0,0,0.4);box-shadow:4px 4px 12px rgba(0,0,0,0.4)}.gb_fd a,.gb_fd a:visited{color:#5e97f6;text-decoration:none}.gb_kd{text-transform:uppercase}.gb_ld{padding-left:50px}.gb_ad .gb_cd{width:200px}.gb_ed{color:#333333;font-size:16px;line-height:20px;margin:0;margin-bottom:16px}.gb_ad .gb_ed{color:#ffffff}.gb_7c{color:#666666;line-height:17px;margin:0;margin-bottom:5px}.gb_ad .gb_7c{color:#ffffff}.gb_7c a.gb_nd{text-decoration:none;color:#5e97f6}.gb_7c a.gb_nd:visited{color:#5e97f6}.gb_7c a.gb_nd:hover,.gb_7c a.gb_nd:active{text-decoration:underline}.gb_od{position:absolute;background:transparent;top:-999px;z-index:-1;visibility:hidden;margin-top:1px;margin-left:1px}#gb .gb_9c{margin:0}.gb_9c .gb_Fb{background:#4d90fe;border-color:#3079ed;margin-top:15px}.gb_dd .gb_Aa{background:#4285f4}.gb_9c a.gb_Aa,#gb .gb_9c a.gb_Fb.gb_Fb{color:#ffffff}.gb_9c .gb_Fb:hover{background:#357ae8;border-color:#2f5bb7}.gb_pd .gb_Pc .gb_sb{border-bottom-color:#ffffff;display:block}.gb_qd .gb_Pc .gb_sb{border-bottom-color:#4d90fe;display:block}.gb_pd .gb_Pc .gb_tb,.gb_qd .gb_Pc .gb_tb{display:block}.gb_rd,.gb_jd{display:table-cell}.gb_rd{vertical-align:middle}.gb_dd .gb_rd{vertical-align:top}.gb_jd{padding-left:13px;width:100%}.gb_dd .gb_jd{padding-left:20px}.gb_sd{display:block;display:inline-block;padding:1em 0 0 0;position:relative;width:100%}.gb_td{color:#ff0000;font-style:italic;margin:0;padding-left:46px}.gb_sd .gb_ud{float:right;margin:-20px 0;width:-webkit-calc(100% - 46px);width:calc(100% - 46px)}.gb_vd svg{fill:grey}.gb_vd.gb_wd svg{fill:#4285f4}.gb_sd .gb_ud label:after{background-color:#4285f4}.gb_vd{display:inline;float:right;margin-right:22px;position:relative;top:-4px}.gb_xd{color:#ffffff;font-size:13px;font-weight:bold;height:25px;line-height:19px;padding-top:5px;padding-left:12px;position:relative;background-color:#4d90fe}.gb_xd .gb_yd{color:#ffffff;cursor:default;font-size:22px;font-weight:normal;position:absolute;right:12px;top:5px}.gb_xd .gb_hd,.gb_xd .gb_zd{color:#ffffff;display:inline-block;font-size:11px;margin-left:16px;padding:0 8px;white-space:nowrap}.gb_Ad{background:none;background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0.16)),to(rgba(0,0,0,0.2)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));background-image:linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));border-radius:2px;border:1px solid #dcdcdc;border:1px solid rgba(0,0,0,0.1);cursor:default!important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#160000ff,endColorstr=#220000ff);text-decoration:none!important;-webkit-border-radius:2px}.gb_Ad:hover{background:none;background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0.14)),to(rgba(0,0,0,0.2)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));background-image:linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));border:1px solid rgba(0,0,0,0.2);box-shadow:0 1px 1px rgba(0,0,0,0.1);-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#14000000,endColorstr=#22000000)}.gb_Ad:active{box-shadow:inset 0 1px 2px rgba(0,0,0,0.3);-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.3)}.gb_Ta .gb_wa{color:#4285f4}.gb_Ta .gb_xa{color:#fff}.gb_Ta .gb_Fb:not(.gb_Oe):focus{outline:none}.gb_gf,.gb_hf,.gb_if{display:none}.gb_Rd{height:48px;max-width:720px}.gb_Ud.gb_5d .gb_Rd{max-width:100%;-webkit-flex:1 1 auto;flex:1 1 auto}.gb_Od>.gb_Bc .gb_Rd{display:table-cell;vertical-align:middle;width:100%}.gb_Ud.gb_5d .gb_Rd .gb_Qe{margin-left:0;margin-right:0}.gb_Qe{background:rgba(0,0,0,0.04);border:1px solid rgba(0,0,0,0);-webkit-border-radius:4px;border-radius:4px;margin-left:auto;margin-right:auto;max-width:720px;position:relative;-webkit-transition:background 100ms ease-in,width 100ms ease-out;transition:background 100ms ease-in,width 100ms ease-out}.gb_Qe.gb_jf{-webkit-border-radius:4px 4px 0 0;border-radius:4px 4px 0 0}.gb_ee .gb_Qe{background:rgba(255,255,255,0.16)}.gb_kf.gb_Qe{background:rgba(255,255,255,1)}.gb_ee .gb_kf.gb_Qe .gb_9e{color:rgba(0,0,0,0.87)}.gb_Qe button{background:none;border:none;cursor:pointer;outline:none;padding:0 4px;line-height:0}.gb_Qe button svg,.gb_Qe button img{padding:7px;margin:4px}.gb_bf.gb_lf,.gb_mf.gb_lf{padding-left:2px;padding-right:2px}.gb_af .gb_bf{right:0}.gb_mf{display:none}.gb_bf,.gb_mf{float:left;position:absolute;top:0}.gb_nf{position:absolute;right:0;cursor:default;visibility:hidden;top:0;-webkit-transition:opacity 250ms ease-out;transition:opacity 250ms ease-out}.gb_of .gb_nf{right:35px}.gb_af .gb_nf{display:none}.gb_nf.gb_pf{visibility:inherit}.gb_9e::-ms-clear{display:none;height:0;width:0}.gb_qf{position:absolute;right:0;top:0}.gb_af .gb_qf{right:35px}.gb_af>.gb_rf{margin-left:auto;padding:0 11px}.gb_rf{height:46px;padding:0;margin-left:54px;margin-right:50px;overflow:hidden}.gb_of .gb_rf{margin-right:83px}.gb_9e{background:transparent;border:none;font:normal 16px Roboto,sans-serif;-webkit-font-variant-ligatures:none;font-variant-ligatures:none;height:46px;outline:none;padding:11px 16px 11px 16px;width:100%;-webkit-box-sizing:border-box;box-sizing:border-box}.gb_lf.gb_rf .gb_9e{padding-left:2px}.gb_lf.gb_rf{margin-left:50px}.gb_ee .gb_9e{color:rgba(255,255,255,0.7)}.gb_9e.gb_sf{padding-left:0}.gb_sf{height:46px;line-height:46px;padding-bottom:0;padding-top:0}.gb_Qe:not(.gb_8e) input::-webkit-input-placeholder{color:rgba(0,0,0,0.54)}.gb_ee .gb_Qe:not(.gb_8e) input::-webkit-input-placeholder{color:rgba(255,255,255,0.7)}.gb_Qe.gb_Qd:not(.gb_ha){background:transparent;float:right}.gb_Qe.gb_Qd:not(.gb_ha) .gb_rf,.gb_Qe.gb_Qd:not(.gb_ha) .gb_nf,.gb_Qe.gb_Qd:not(.gb_ha) .gb_qf{display:none}.gb_Qe.gb_Qd.gb_ha{margin-left:0;position:absolute;width:auto}.gb_Qe.gb_Qd.gb_ha:not(.gb_af) .gb_bf{display:none}.gb_Qe.gb_Qd .gb_bf{padding:0;position:static}.gb_Qe.gb_Qd.gb_ha .gb_mf{display:block}.gb_tf{position:relative}.gb_uf{margin:0 58px;padding:0;text-align:center;white-space:nowrap;-webkit-user-select:none;overflow:auto}.gb_uf::-webkit-scrollbar{display:none}.gb_Ua .gb_uf,.gb_Cd .gb_uf{margin:0}.gb_vf,.gb_wf{display:none;height:48px;position:absolute;top:0;width:100px}.gb_tf.gb_xf .gb_vf,.gb_tf.gb_yf .gb_wf{display:block}.gb_wf{pointer-events:none}.gb_vf{pointer-events:none;left:0}.gb_wf{right:0}.gb_zf{cursor:pointer;display:inline-table;outline:none}.gb_zf>.gb_Af{border:0 solid transparent;border-width:2px 0;display:table-cell;height:44px;padding:0 22px;opacity:.7;text-decoration:none;text-transform:uppercase;vertical-align:middle}.gb_zf.gb_wc:focus{background-color:rgba(0,0,0,.16)}.gb_zf.gb_wc>.gb_Af{border-bottom-color:black;opacity:1}.gb_ee .gb_zf.gb_wc>.gb_Af{border-bottom-color:white}.gb_de .gb_zf.gb_wc>.gb_Af{border-bottom-color:black}.gb_uf.gb_Bf>.gb_zf.gb_wc>.gb_Af{border-bottom-color:#4285f4;color:#4285f4}sentinel{}.gbii::before{content:url(https://lh3.googleusercontent.com/-tw2YEd0eQg0/AAAAAAAAAAI/AAAAAAAAAAA/APUIFaMYF5tLlgrnVSYern_wZnceggQJxg/s32-c-mo/photo.jpg)}.gbip::before{content:url(https://lh3.googleusercontent.com/-tw2YEd0eQg0/AAAAAAAAAAI/AAAAAAAAAAA/APUIFaMYF5tLlgrnVSYern_wZnceggQJxg/s96-c-mo/photo.jpg)}@media (min-resolution:1.25dppx),(-o-min-device-pixel-ratio:5/4),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gbii::before{content:url(https://lh3.googleusercontent.com/-tw2YEd0eQg0/AAAAAAAAAAI/AAAAAAAAAAA/APUIFaMYF5tLlgrnVSYern_wZnceggQJxg/s64-c-mo/photo.jpg)}.gbip::before{content:url(https://lh3.googleusercontent.com/-tw2YEd0eQg0/AAAAAAAAAAI/AAAAAAAAAAA/APUIFaMYF5tLlgrnVSYern_wZnceggQJxg/s192-c-mo/photo.jpg)}}
</style>



<style type="text/css">
    #gb192 .gb_W::before{left:0px;top:-345px}</style><style type="text/css">
</style>
</head>
<body class="KMkTad eOfoab EIlDfe nwoFuc" data-viewfamily="EVENT_EDIT" jslog="34346" jscontroller="phtQPb" jsaction="clickonly:cOuCgd;rcuQ6b:npT2md;F2qKcc:pN2nfb;yBqzXb:Lcmmbb;WTZC4c:adQrOb;dCMxEc:Q7lbz;qako4e:v82Rac;BHg2fb:dUbeYd;RVXH5b:jP5n7;j14R5:fe85xf;IHPIXb:sooqIb;GvneHb:.CLIENT;wINJic:.CLIENT;NEksLd:.CLIENT;keydown:.CLIENT;keyup:.CLIENT;keypress:.CLIENT;TkEEhc:.CLIENT" aria-busy="false">
   

<style type="text/css" nonce="">.ImULlc{ max-height: 0; }</style>
<div class="rUCtP" jscontroller="PxCGSb" jsaction="JIbuQc:Et2C0b(Fv8Rsb),MReJCc(QTgKSc),XoTXNd(jSti7);">
  
                        </div>
                        <div class="tEhMVd">
                            <div class="pSp5K">
                                <div class="KKOvEb">
                                    <header class="gb_Ta gb_qb NkK3Fc PTLZrb gb_Ua" ng-non-bindable="" id="gb" role="banner" style="background-color:#fff">
                                     
                                            <div class="gb_Dd gb_ce" style="background-color:#fff">
                                              
                                                                           <div class="gb_Cc gb_jb gb_Bc gb_6d" ng-non-bindable="" data-ogsr-up="">
                                                                               <div class="gb_Dc gb_9d">
                                                                               <div class="gb_7d">
                                                                                  
                                                                                              
                                                                                                           </div>
                                                                                                           <div class="gb_Ra gb_Qg gb_R" href="https://accounts.google.com/SignOutOptions?hl=es&amp;continue=https://calendar.google.com/calendar/r/eventedit%3Ftab%3Dmc&amp;service=cl" role="button" tabindex="0" style="max-height:48px;width:134px" aria-expanded="false"><div class="gb_Sa" style="line-height:32px;width:78px">
                                                                                                               <img class="gb_Wa gb_Va" src="https://www.google.com/a/cpanel/gestionx.com/images/logo.gif?service=google_gsuite" style="width:78px;max-height:32px">
                                                                                                               </div>
                                                                                                               <div class="gb_fb gb_8c gb_Qg gb_R gb_Jb gb_Ff gb_ob">
                                                                                                                   <div class="gb_Pc gb_ib gb_Qg gb_R">
                                                                                                                       <span class="gb_9a gbii">
    
</span></a>
<div class="gb_tb">
    
</div>
<div class="gb_sb">
    
</div>
</div>
</div>
</div>
</div>
</div>
<div class="gb_ba gb_aa gb_oa gb_ua" aria-label="Aplicaciones de Google" aria-hidden="true" role="region">
    <ul class="gb_da gb_6" aria-dropeffect="move">
        <li class="gb_T" aria-grabbed="false" id="ogbkddg:0">
            <a class="gb_O" data-pid="192" href="https://myaccount.google.com/?utm_source=OGB&amp;utm_medium=app" id="gb192" rel="noreferrer" target="_blank"><div class="gb_2">
                
            </div>
            <div class="gb_3">
                
            </div>
            <div class="gb_4">
                
            </div><div class="gb_5">
                
            </div>
         
                
                <li class="gb_T" aria-grabbed="false" id="ogbkddg:2">
                    <a class="gb_O" data-pid="49" href="https://drive.google.com/?tab=co&amp;authuser=0" id="gb49" rel="noreferrer" target="_blank">
                        <div class="gb_2">
                        
                    </div>
                    <div class="gb_3">
                        
                    </div>
                    <div class="gb_4">
                        
                    </div>
                    <div class="gb_5">
                        
                    </div>
                    <span class="gb_W" style="background-position:0 -966px">
                        
                    </span>
                    <span class="gb_X">Drive</span>
                    </a></li>
                    <li class="gb_T" aria-grabbed="false" id="ogbkddg:3">

                                <div class="gb_4"></div><div class="gb_5">
                                    
                                </div>
                                <span class="gb_W" style="background-position:0 -1311px">
                                    
                               
                                </a></li>
                                <li class="gb_T" aria-grabbed="false" id="ogbkddg:a">
                                    <a class="gb_O" data-pid="38" href="https://sites.google.com/?tab=c3" id="gb38" rel="noreferrer" target="_blank">
                                        <div class="gb_2">
                                            
                                        </div>
                                        <div class="gb_3">
                                        
                                    </div>
                                    <div class="gb_4">
                                        
                                    </div>
                                    <div class="gb_5">
                                        
                                    </div>
                                    <span class="gb_W" style="background-position:0 -1932px">
                                        
                                    </span>
                                    <span class="gb_X">Sites</span>
                                    </a>
                                    </li>
                                    <li class="gb_T" aria-grabbed="false" id="ogbkddg:b">
                                        <a class="gb_O" data-pid="53" href="https://contacts.google.com/?hl=es&amp;tab=cC" id="gb53" rel="noreferrer" target="_blank">
                                            <div class="gb_2">
                                            
                                        </div>
                                        <div class="gb_3">
                                            
                                        </div>
                                        <div class="gb_4">
                                            
                                        </div>
                                        <div class="gb_5">
                                            
                                        </div>
                                        <span class="gb_W" style="background-position:0 -2001px">
                                            
                                        </span>
                                        <span class="gb_X">Contactos</span>
                                        </a>
                                        </li>
                                        </ul>
                                        <div class="gb_qa gb_7a">
                                            <div class="gb_Z gb_W" style="background-position:0 -1380px"
                                            ></div>
                                           
                                                </div>
                                                <a class="gb_ea gb_5f" aria-label="Más aplicaciones Google" target="_blank" aria-expanded="false" aria-hidden="true">Más</a><span class="gb_fa">
                                                    
                                                </span>
                                                <ul class="gb_da gb_7" aria-dropeffect="move" aria-hidden="true">
                                                    
                                               
                                                   
                                                
                                                    
                                                            
                                                          
                                                                   
                                                                   
                                                                      </ul>
                                                                      <span class="gb_fa gb_ga">
                                                                          
                                                                      </span>
                                                                      <ul class="gb_da gb_ia gb_ja" aria-dropeffect="move" aria-hidden="true">
                                                                          
                                                                      </ul>
                                                                      <a class="gb_fa gb_4f" href="https://www.google.com/enterprise/marketplace" target="_blank" aria-hidden="true">Más aplicaciones de Marketplace</a>
                                                                      </div>
                                                                    
                                                                          
                                                                          <div class="gb_ub gb_aa" aria-label="Información de la cuenta" aria-hidden="true" img-loaded="1">
                                                                              <div class="gb_Kb">
                                                                              <div id="gbpbt">Esta cuenta la gestiona <b>gestionx.com</b>.
                                                                              </div>
                                                                              <a class="gb_vb" href="https://www.google.com/support/accounts/bin/answer.py?answer=181692&amp;hl=es" aria-describedby="gbpbt" target="_blank">Más información
                                                                              </a>
                                                                              </div>
                                                                              <div class="gb_xb">
                                                                                  <div class="gb_zb">
                                                                                         
                                                                                      <div class="gb_wb">
                                                                                          </div>
                                                                                  
                                                                                          </div
                                                                                          ></div
                                                                                          ><div class="gb_Lb">
                                                                                              <div class="gb_Nb gb_Ob" aria-hidden="false">
                                                                                              
                                                                                              
                                                                                                      
                                                                                                      </div>
                                                                                                  
                                                                                                      
                                                                                                      </div>
                                                                                                      <div class="gb_mb gb_7a"><div class="gb_nb">
                                                                                                          
                                                                                                      </div>
                                                                                                      </div>
                                                                                                      <div class="gb_Hb">
                                                                                                          <div>
                                                                                                         </div>
                                                                                                         <div>
                                                                                                             
                                                                                                         </div>
                                                                                                         </div>
                                                                                                         </div>
                                                                                                         </div>
                                                                                                         <div class="gb_Nd gb_ce" style="background-color:#fff"></div></header>
                                                                                                         <div jscontroller="F3TYEe" jsaction="qako4e:RySO6d;FTHiKf:t2BzTd;JIbuQc: cOuCgd" jslog="35392; track:JIbuQc" jsname="EcotYb" class="zlaSJd" style="display: none">
                                                                                                             <div role="button" class="U26fgb XHsn7e XiVK6d" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow="" aria-label="Crear evento" aria-disabled="false" tabindex="0" data-tooltip="Crear evento" data-tooltip-position="left" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0">
                                                                                                                 <div class="HaXdpb wb61gb">
                                                                                                             
                                                                                                         </div>
                                                                                                         <div class="HRp7vf MbhUzd" jsname="ksKsZd">
                                                                                                             
                                                                                                         </div><content class="Ip8zfc"><i class="Gw6Zhc"></i>
                                                                                                         </content>
                                                                                                         </div>
                                                                                                         </div>
                                                                                                         <div class="TOTjfb"><div class="AOL3Kb" jsname="QA0Szd">
                                                                                                             
                                                                                                         </div>
                                                                                                         <div id="YPCqFe" class="Xro3Db-nUpftc-EbqdBd">
                                                                                                             <div jsname="HfSojc" class="yEZXzc">
                                                                                                             
                                                                                                         </div>
                                                                                                         <div class="Xro3Db-nUpftc ymbhmd" role="main" aria-describedby="c5">
                                                                                                           
                                                                                                             <div class="p9lUpf" jsmodel="pulEHc" jscontroller="YLu0bc" ><div class="EQi2Gf">
                                                                                                                 <div class="UXzdrb">
                                                                                                                 <div role="button" class="U26fgb mUbCce fKz7Od rF3YF EwnKv TbpVhb" jslog="35394; track:JIbuQc"  data-tooltip="Cancelar creación del evento" id="xCancelBu">
                                                                                                                     <div class="VTBa7b MbhUzd" jsname="ksKsZd">
                                                                                                                         
                                                                                                                     </div>
                                                                                                                     <content class="xjKiLb">
                                                                                                                         <span style="top: -12px"><span class="DPvwYc NhjcAb" aria-hidden="true">
                                                                                                                         </span>
                                                                                                                         </span>
                                                                                                                         </content>
                                                                                                                         </div>
                                                                                                                         <div class="Kb2sf TgcD5e t4IwDf CCDcoc" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV;" jsshadow="" jsname="GYcwYe"><label class="xlxsj oJeWuf">
                                                                                                                             <div class="mVuQpd">
                                                                                                                                 <div class="kw5sif">
                        <input type="text" class="WpDZC zHQkBf" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Título" value="<?php echo  $_GET['titulo']?>" id="xTiIn" data-initial-value="" data-previous-value="">
                                                    <div jsname="LwH6nd" class="bojM1c snByac">
                                                        <?php if(isset($_GET['titulo']))
                                                        {}
                                                        else{echo 'Añade un título'; } ?>
                                                        
                                                                                                                                     </div>
                                                                                                                                     </div>
                                                                                                                                     </div>
                                                                                                                                     <div jsname="XmnwAc" class="DSC0Mc cXrdqd Y2Zypf" style="transform-origin: 259px center 0px;">
                                                                                                                                         
                                                                                                                                     </div>
                                                                                                                                     </label>
                                                                                                                                     <div class="wOWxX">
                                                                                                                                         <div jsname="ty6ygf" class="qCTOIe Is7Fhb">
                                                                                                                                         
                                                                                                                                     </div>
                                                                                                                                     <div jsname="B34EJ" class="cvUi3d RxsGPe" aria-atomic="true" aria-live="assertive" role="alert">
                                                                                                                                         
                                                                                                                                     </div>
                                                                                                                                     </div>
                                                                                                                                     </div>
            <div role="button" class="U26fgb O0WRkf zZhnYe e3Duub C0oVfc guz9kb"  jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow="" jsname="x8hlje" aria-label="Guardar" aria-disabled="false" tabindex="0" id="xSaveBu" onclick="GuardarEvento();">
                                                                                                                                         <div class="Vwe4Vb MbhUzd" jsname="ksKsZd">
                                                                                                                                             
                                                                                                                                         </div>
                                                                                                                                         <div class="ZFr60d CeoRYc">
                                                                                                                                             
                                                                                                                                         </div>
                                                                                                                                         <content class="CwaK9">
                                                                                                                        <span class="RveJvd snByac">Guardar</span>
                                                                                                                                         </content>
                                                                                                                                         </div>
                                                                                                                                         <div class="gyRY9e">
                                                                                                                                             
                                                                                                                                         </div>
                                                                                                                                         </div>
                                                                                                                                         <div class="kMp0We"><div aria-hidden="true" class="nGJqzd OLw7vb">
                                    
                                </div>
                                <div class="NI2kfb ">
                                    <div>
                                        <div class="kMp0We" id="xDaRaSel">
                                        <div class="NI2kfb sGOxme DX3x9d ECCms">
                                            <div jscontroller="OSFuaf" jsaction="EQ0fnc:NV7Tud(iKdrbf),Z7Nr4b(qPZlPe);VzRCPb:WtPr0b(B4GDSd),ZzUiqe(XCHdmd);olArZd:QOssie;raFkRe:SwAXrc;AHmuwe: Jt1EX;" class="TIJ73d gsTR5d HHB0d" jsname="L2QMlb">
                                                <div class="SmCjzc">
                                                    <div jscontroller="NNrqNc" jsname="iKdrbf" class="pQdjpb shor6 yqvK0e xxJcq" data-autofit="true" data-inline="false" data-allow-empty="false" data-ical="20180831">
                                                    <div jsaction="AHmuwe:Mty5ud; click:S9P5Je;YqO5N:YPqjbf; keydown:tk0cN;O22p3e:O22p3e">
                                                        <div class="Kb2sf QGLPie nXeosb t4IwDf CDELXb" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV;" jsshadow="" jsname="YPqjbf" style="width:116px">
                                                            <label class="xlxsj oJeWuf">
                                                                <div class="mVuQpd">
                                                            <div class="">
                                                                <!--fecha Inicial-->
                                                            <input type="text" class="WpDZC zHQkBf" jsname="YPqjbf" name='xStDaIn' id="xStDaIn"  data-date-format="yyyy-mm-dd" value="<?php echo $date1->format('Y-m-d')?>">
                                                            
                                                            </div></div><div jsname="XmnwAc" class="DSC0Mc cXrdqd Y2Zypf" style="transform-origin: 99px center 0px;"></div></label><div class="wOWxX"><div jsname="ty6ygf" class="qCTOIe Is7Fhb"></div><div jsname="B34EJ" class="cvUi3d RxsGPe" aria-atomic="true" aria-live="assertive" role="alert"></div></div></div></div>
                                                            <div class="gHQcAb SkyA8b" jsaction="GtM38c:gs6Kvc;EQ0fnc:cfz3Jf;" jsname="V68bde" tabindex="-1" id="c0" style="top: 120px; margin-left: 0px;">
                                                                <div jscontroller="swjUef" jsmodel="WQ8hxd" jsaction="dh0SRc:S6vrfb;Z1fWKd:KbbOyc;JIbuQc:MYFTse(VfNHU),tJiF1e(OCpkoe);keyup:dbqUTd; keydown:JIcVfb;" data-month="20180831" data-selected-date="20180831" data-is-not-tabbable="true" jsname="iAXDic" class="q1j8lf Jyewjb-haAclf cPMh0b">
                                                                    <div class="MSZkRb">
                                                                        <span jsname="B1A7Xe" class="r4nke ">Agosto de 2018</span>
                                                                <div role="button" class="U26fgb mUbCce fKz7Od rF3YF Vp20je j7k8V" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow="" jsname="VfNHU" aria-label="Mes anterior" aria-disabled="false" tabindex="-1" data-response-delay-ms="50" data-tooltip="Mes anterior" data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0"><div class="VTBa7b MbhUzd" jsname="ksKsZd">
                                                                    
                                                                </div>
                                                                <content class="xjKiLb">
                                                                    <span style="top: -9px">
                                                                       
                                                                        </span>
                                                                        </content>
                                                                        </div>
                                                                        <div role="button" class="U26fgb mUbCce fKz7Od rF3YF Vp20je Eh2tw" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow="" jsname="OCpkoe" aria-label="Mes siguiente" aria-disabled="false" tabindex="-1" data-response-delay-ms="50" data-tooltip="Mes siguiente" data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0"><div class="VTBa7b MbhUzd" jsname="ksKsZd"></div><content class="xjKiLb"><span style="top: -9px"><span class="DPvwYc sm8sCf NhjcAb" aria-hidden="true"></span></span></content></div></div><div role="grid" aria-readonly="true" aria-label="Agosto de 2018" class="HkPXyb"><div role="row" class="RWvJ9d"><span role="columnheader" aria-readonly="true" aria-label="Domingo" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Domingo" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">D</span><span class="ynRLnc">Domingo</span></span><span role="columnheader" aria-readonly="true" aria-label="Lunes" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Lunes" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">L</span><span class="ynRLnc">Lunes</span></span><span role="columnheader" aria-readonly="true" aria-label="Martes" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Martes" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">M</span><span class="ynRLnc">Martes</span></span><span role="columnheader" aria-readonly="true" aria-label="Miércoles" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Miércoles" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">X</span><span class="ynRLnc">Miércoles</span></span><span role="columnheader" aria-readonly="true" aria-label="Jueves" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Jueves" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">J</span><span class="ynRLnc">Jueves</span></span><span role="columnheader" aria-readonly="true" aria-label="Viernes" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Viernes" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">V</span><span class="ynRLnc">Viernes</span></span><span role="columnheader" aria-readonly="true" aria-label="Sábado" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Sábado" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">S</span><span class="ynRLnc">Sábado</span></span></div><div role="rowgroup" class="yRgNBf"><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180729" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">29</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180730" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">30</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180731" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">31</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180801" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">1</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180802" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">2</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180803" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">3</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180804" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">4
                                </div></span></div><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180805" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">5</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180806" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">6</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180807" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">7</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180808" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">8</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180809" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">9</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180810" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">10</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180811" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">11</div></span></div><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180812" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">12</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180813" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">13</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180814" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">14</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180815" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">15</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180816" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">16</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180817" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">17</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180818" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">18</div></span></div><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180819" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">19</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180820" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">20</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180821" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">21</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180822" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">22</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180823" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">23</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180824" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">24</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180825" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">25</div></span></div><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180826" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">26</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180827" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">27</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180828" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">28</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180829" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">29</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180830" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">30</div></span>
                                <span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf undefined i8dSE  folmac  TUH0Sd  iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180831" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="true" tabindex="-1" data-focusable="true"><div class="r4nke " aria-hidden="true">31</div><span role="presentation" class="U9Cd6d">31, hoy</span></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180901" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">1</div></span></div><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180902" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">2</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180903" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">3</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180904" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">4</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180905" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">5</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180906" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">6</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180907" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">7</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180908" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false">
                                    
                                    <div class="r4nke ">8</div></span></div></div></div></div></div></div>
                                    
                                    <div jscontroller="pyQ7oe" jsname="B4GDSd" class="pQdjpb shor6 " data-autofit="true" data-inline="false" data-ical="T000000">
                                        <div jsaction="AHmuwe:Mty5ud; click:S9P5Je;YqO5N:Lg5SV; keydown:Hq2uPe;O22p3e:fpfTEe"><div class="Kb2sf QGLPie nXeosb t4IwDf CDELXb" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV;" jsshadow="" jsname="YPqjbf" style="width:55px"><label class="xlxsj oJeWuf">
                                            <div class="mVuQpd">
                                                <div class="kw5sif">
                                                    <input type="text" class="WpDZC zHQkBf" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Hora de inicio" value="12:00am" id="xStTiIn" dir="ltr" data-initial-value="T000000"  badinput="false" aria-invalid="false" onclick="MostrarTime2('c1')">
                                                    </div>
                                                    </div>
                                                    <div jsname="XmnwAc" class="DSC0Mc cXrdqd">
                                                        
                                                    </div></label><div class="wOWxX"><div jsname="ty6ygf" class="qCTOIe Is7Fhb"></div><div jsname="B34EJ" class="cvUi3d RxsGPe" aria-atomic="true" aria-live="assertive" role="alert"></div></div></div></div><div class="gHQcAb SkyA8b" jsaction="GtM38c:gs6Kvc;keydown:Hq2uPe;" role="listbox" jsname="V68bde" tabindex="-1" id="c1">
                                    
                                    <div class="w8UdJc" jsname="rymPhb" role="presentation" tabindex="-1">
                                    
                                <div  data-ical="T000000" role="option" class="VKy0Ic VKy0Ini" aria-selected="true" onclick="CambiarFechaIni(this)">12:00am</div>
                                <div  data-ical="T003000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">12:30am</div>
                                <div  data-ical="T010000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">1:00am</div>
                                <div  data-ical="T013000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">1:30am</div>
                                <div  data-ical="T020000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">2:00am</div>
                                <div  data-ical="T023000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">2:30am</div>
                                <div  data-ical="T030000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">3:00am</div>
                                <div  data-ical="T033000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">3:30am</div>
                                <div  data-ical="T040000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">4:00am</div>
                                <div  data-ical="T043000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">4:30am</div>
                                <div  data-ical="T050000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">5:00am</div>
                                <div  data-ical="T053000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">5:30am</div>
                                <div  data-ical="T060000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">6:00am</div>
                                <div  data-ical="T063000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">6:30am</div>
                                <div  data-ical="T070000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">7:00am</div>
                                <div  data-ical="T073000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">7:30am</div>
                                <div  data-ical="T080000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">8:00am</div>
                                <div  data-ical="T083000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">8:30am</div>
                                <div  data-ical="T090000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">9:00am</div>
                                <div  data-ical="T093000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">9:30am</div>
                                <div  data-ical="T100000" role="option" class="VKy0Ic VKy0Ini" aria-selected="false" onclick="CambiarFechaIni(this)">10:00am</div>
                                <div  data-ical="T103000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">10:30am</div>
                                <div  data-ical="T110000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">11:00am</div>
                                <div  data-ical="T113000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">11:30am</div>
                                <div  data-ical="T120000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">12:00pm</div>
                                <div  data-ical="T123000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">12:30pm</div>
                                <div  data-ical="T130000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">1:00pm</div>
                                <div  data-ical="T133000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">1:30pm</div>
                                <div  data-ical="T140000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">2:00pm</div>
                                <div  data-ical="T143000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">2:30pm</div>
                                <div  data-ical="T150000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">3:00pm</div>
                                <div  data-ical="T153000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">3:30pm</div>
                                <div  data-ical="T160000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">4:00pm</div>
                                <div  data-ical="T163000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">4:30pm</div>
                                <div  data-ical="T170000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">5:00pm</div>
                                <div  data-ical="T173000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">5:30pm</div>
                                <div  data-ical="T180000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">6:00pm</div>
                                <div  data-ical="T183000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">6:30pm</div>
                                <div  data-ical="T190000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">7:00pm</div>
                                <div  data-ical="T193000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">7:30pm</div>
                                <div  data-ical="T200000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">8:00pm</div>
                                <div  data-ical="T203000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">8:30pm</div>
                                <div  data-ical="T210000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">9:00pm</div>
                                <div  data-ical="T213000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">9:30pm</div>
                                <div  data-ical="T220000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">10:00pm</div>
                                <div  data-ical="T223000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">10:30pm</div>
                                <div  data-ical="T230000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">11:00pm</div>
                                <div  data-ical="T233000" role="option" class="VKy0Ic VKy0Ini" onclick="CambiarFechaIni(this)">11:30pm</div>
                                
                                </div>
                                
                                </div></div>
                                <div jsname="PH80Af" class="rpgLwc" style="display:none;"></div></div><div class="NtP29">a</div><div class="SmCjzc"><div jscontroller="NNrqNc" jsname="qPZlPe" class="pQdjpb shor6 yqvK0e xxJcq" data-autofit="true" data-inline="false" data-allow-empty="false" data-ical="20180831"><div jsaction="AHmuwe:Mty5ud; click:S9P5Je;YqO5N:YPqjbf; keydown:tk0cN;O22p3e:O22p3e"><div class="Kb2sf QGLPie nXeosb t4IwDf CDELXb" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV;" jsshadow="" jsname="YPqjbf" style="width:116px"><label class="xlxsj oJeWuf"><div class="mVuQpd">
                                    <div class="kw5sif">
                                        <!--fecha Final-->
                                    <input type="text" class="WpDZC zHQkBf" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Fecha de finalización" id="xEnDaIn"  data-date-format="yyyy-mm-dd" value="<?php echo $date2->format('Y-m-d')?>">
                                    
                                    </div></div><div jsname="XmnwAc" class="DSC0Mc cXrdqd Y2Zypf" style="transform-origin: 59.375px center 0px;">
                                        
                                    </div>
                                    </label>
                                    </div></div><div class="gHQcAb SkyA8b" jsaction="GtM38c:gs6Kvc;EQ0fnc:cfz3Jf;" jsname="V68bde" tabindex="-1" id="c3" style="top: 120px; margin-left: -55.625px;"><div jscontroller="swjUef" jsmodel="WQ8hxd" jsaction="dh0SRc:S6vrfb;Z1fWKd:KbbOyc;JIbuQc:MYFTse(VfNHU),tJiF1e(OCpkoe);keyup:dbqUTd; keydown:JIcVfb;" data-month="20180831" data-selected-date="20180831" data-is-not-tabbable="true" jsname="iAXDic" class="q1j8lf Jyewjb-haAclf cPMh0b"><div class="MSZkRb"><span jsname="B1A7Xe" class="r4nke ">Agosto de 2018</span><div role="button" class="U26fgb mUbCce fKz7Od rF3YF Vp20je j7k8V" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow="" jsname="VfNHU" aria-label="Mes anterior" aria-disabled="false" tabindex="-1" data-response-delay-ms="50" data-tooltip="Mes anterior" data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0"><div class="VTBa7b MbhUzd" jsname="ksKsZd"></div><content class="xjKiLb"><span style="top: -9px"><span class="DPvwYc sm8sCf NhjcAb" aria-hidden="true"></span></span></content></div><div role="button" class="U26fgb mUbCce fKz7Od rF3YF Vp20je Eh2tw" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow="" jsname="OCpkoe" aria-label="Mes siguiente" aria-disabled="false" tabindex="-1" data-response-delay-ms="50" data-tooltip="Mes siguiente" data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0"><div class="VTBa7b MbhUzd" jsname="ksKsZd"></div><content class="xjKiLb"><span style="top: -9px"><span class="DPvwYc sm8sCf NhjcAb" aria-hidden="true"></span></span></content></div></div><div role="grid" aria-readonly="true" aria-label="Agosto de 2018" class="HkPXyb"><div role="row" class="RWvJ9d"><span role="columnheader" aria-readonly="true" aria-label="Domingo" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Domingo" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">D</span><span class="ynRLnc">Domingo</span></span><span role="columnheader" aria-readonly="true" aria-label="Lunes" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Lunes" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">L</span><span class="ynRLnc">Lunes</span></span><span role="columnheader" aria-readonly="true" aria-label="Martes" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Martes" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">M</span><span class="ynRLnc">Martes</span></span><span role="columnheader" aria-readonly="true" aria-label="Miércoles" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Miércoles" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">X</span><span class="ynRLnc">Miércoles</span></span><span role="columnheader" aria-readonly="true" aria-label="Jueves" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Jueves" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">J</span><span class="ynRLnc">Jueves</span></span><span role="columnheader" aria-readonly="true" aria-label="Viernes" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Viernes" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">V</span><span class="ynRLnc">Viernes</span></span><span role="columnheader" aria-readonly="true" aria-label="Sábado" class="SoBqBf " jscontroller="H5Cjge" jsaction="focus: eGiyHb;mouseenter: eGiyHb; touchstart: eGiyHb;" data-text="Sábado" data-tooltip-position="bottom" data-tooltip-vertical-offset="0" data-tooltip-horizontal-offset="0" data-tooltip-only-if-necessary="false"><span aria-hidden="true">S</span><span class="ynRLnc">Sábado</span></span></div><div role="rowgroup" class="yRgNBf"><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180729" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">29</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180730" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">30</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180731" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">31</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180801" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">1</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180802" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">2</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180803" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">3</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180804" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">4</div></span></div><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180805" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">5</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180806" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">6</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180807" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">7</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180808" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">8</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180809" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">9</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180810" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">10</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180811" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">11</div></span></div><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180812" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">12</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180813" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">13</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180814" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">14</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180815" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">15</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180816" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">16</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180817" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">17</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180818" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">18</div></span></div><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180819" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">19</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180820" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">20</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180821" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">21</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180822" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">22</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180823" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">23</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180824" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">24</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180825" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">25</div></span></div><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180826" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">26</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180827" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">27</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180828" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">28</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180829" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">29</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180830" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">30</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf undefined i8dSE  folmac  TUH0Sd  iMprOe" data-grid-cell="true" data-dragsource-type="13" data-date="20180831" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="true" tabindex="-1" data-focusable="true"><div class="r4nke " aria-hidden="true">31</div><span role="presentation" class="U9Cd6d">31, hoy</span></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180901" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">1</div></span></div><div role="row" class="RWvJ9d"><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180902" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">2</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180903" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">3</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180904" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">4</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180905" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">5</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180906" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">6</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180907" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">7</div></span><span class="W0m3G elYzab-cXXICe-Hjleke elYzab-DaY83b-ppHlrf uGtG7d " data-grid-cell="true" data-dragsource-type="13" data-date="20180908" data-opens-day-overview="undefined" jsaction="click:nngp;" role="gridcell" aria-selected="false" tabindex="-1" data-focusable="false"><div class="r4nke ">8</div></span></div></div></div></div></div></div></div>
                                
                                <div jscontroller="pyQ7oe" jsname="B4GDSd" class="pQdjpb shor6 " data-autofit="true" data-inline="false" data-ical="T000000">
                                        <div jsaction="AHmuwe:Mty5ud; click:S9P5Je;YqO5N:Lg5SV; keydown:Hq2uPe;O22p3e:fpfTEe">
                                            <div class="Kb2sf QGLPie nXeosb t4IwDf CDELXb" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV;" jsshadow="" jsname="YPqjbf" style="width:55px">
                                                <label class="xlxsj oJeWuf"><div class="mVuQpd">
                                                    <div class="kw5sif">
                                                    <input type="text" class="WpDZC zHQkBf" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Hora de Termino" value="12:00am" id="xStTiFin" dir="ltr" data-final-value="T000000"  badinput="false" aria-invalid="false" onclick="MostrarTime2('c2')" readonly>
                                                    </div>
                                                    </div>
                                                    
                                                    <div jsname="XmnwAc" class="DSC0Mc cXrdqd">
                                                        
                                                    </div>
                                                    </label>
                                                    <div class="wOWxX">
                                                        <div jsname="ty6ygf" class="qCTOIe Is7Fhb">
                                                            
                                                        </div>
                                                        <div jsname="B34EJ" class="cvUi3d RxsGPe" aria-atomic="true" aria-live="assertive" role="alert"></div></div>
                                                        </div>
                                                        </div>
                                        
                                        <!--div muestra fechas-->
                                        <div class="gHQcAb SkyA8b" jsaction="GtM38c:gs6Kvc;keydown:Hq2uPe;" role="listbox" jsname="V68bde" tabindex="-1" id="c2" 
                                        >
                                            
                                    
                        <div class="w8UdJc" jsname="rymPhb" role="presentation" tabindex="-1">
                                    
                            <div  data-ical="T000000" role="option" class="VKy0Ic VKy0Fi" aria-selected="true" onclick="CambiarFechaFin(this)">12:00am</div>
                            <div  data-ical="T003000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">12:30am</div>
                            <div  data-ical="T010000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">1:00am</div>
                            <div  data-ical="T013000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">1:30am</div>
                            <div  data-ical="T020000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">2:00am</div>
                            <div  data-ical="T023000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">2:30am</div>
                            <div  data-ical="T030000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">3:00am</div>
                            <div  data-ical="T033000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">3:30am</div>
                            <div  data-ical="T040000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">4:00am</div>
                            <div  data-ical="T043000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">4:30am</div>
                            <div  data-ical="T050000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">5:00am</div>
                            <div  data-ical="T053000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">5:30am</div>
                            <div  data-ical="T060000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">6:00am</div>
                            <div  data-ical="T063000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">6:30am</div>
                            <div  data-ical="T070000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">7:00am</div>
                            <div  data-ical="T073000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">7:30am</div>
                            <div  data-ical="T080000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">8:00am</div>
                            <div  data-ical="T083000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">8:30am</div>
                            <div  data-ical="T090000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">9:00am</div>
                            <div  data-ical="T093000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">9:30am</div>
                            <div  data-ical="T100000" role="option" class="VKy0Ic VKy0Fi" aria-selected="false" onclick="CambiarFechaFin(this)">10:00am</div>
                            <div  data-ical="T103000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">10:30am</div>
                            <div  data-ical="T110000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">11:00am</div>
                            <div  data-ical="T113000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">11:30am</div>
                            <div  data-ical="T120000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">12:00pm</div>
                            <div  data-ical="T123000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">12:30pm</div>
                            <div  data-ical="T130000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">1:00pm</div>
                            <div  data-ical="T133000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">1:30pm</div>
                            <div  data-ical="T140000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">2:00pm</div>
                            <div  data-ical="T143000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">2:30pm</div>
                            <div  data-ical="T150000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">3:00pm</div>
                            <div  data-ical="T153000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">3:30pm</div>
                            <div  data-ical="T160000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">4:00pm</div>
                            <div  data-ical="T163000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">4:30pm</div>
                            <div  data-ical="T170000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">5:00pm</div>
                            <div  data-ical="T173000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">5:30pm</div>
                            <div  data-ical="T180000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">6:00pm</div>
                            <div  data-ical="T183000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">6:30pm</div>
                            <div  data-ical="T190000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">7:00pm</div>
                            <div  data-ical="T193000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">7:30pm</div>
                            <div  data-ical="T200000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">8:00pm</div>
                            <div  data-ical="T203000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">8:30pm</div>
                            <div  data-ical="T210000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">9:00pm</div>
                            <div  data-ical="T213000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">9:30pm</div>
                            <div  data-ical="T220000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">10:00pm</div>
                            <div  data-ical="T223000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">10:30pm</div>
                            <div  data-ical="T230000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">11:00pm</div>
                            <div  data-ical="T233000" role="option" class="VKy0Ic VKy0Fi" onclick="CambiarFechaFin(this)">11:30pm</div>
                                
                                </div>
                                
                                </div></div>
                                <div aria-atomic="true" aria-live="assertive" role="alert" jsname="u0pjoe" class="L86gVd HKIe6b"></div></div></div></div><div class="kMp0We"><div class="NI2kfb xh6XFf ECCms"><label class="dRjtd"><div class="uVccjd i6LVBe i9xfbb N2RpBe" jscontroller="EcW08c" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le; contextmenu:mg9Pef" jsshadow="" jsname="uDrQPe" aria-label="Todo el día" tabindex="0" id="xAlDaCbx" role="checkbox" aria-checked="true"><div class="PkgjBf MbhUzd"></div><div class="uHMk6b fsHoPb"></div><div class="rq8Mwb"><div class="TCA6qd"><div class="MbUTNc oyD5Oc"></div><div class="Ii6cVc oyD5Oc"></div></div></div></div>Todo el día</label><div jscontroller="uIA3tf" jsname="T7keRc" jsaction="JIbuQc:WXLLAb(O1htCb);LNlWBf:MHfFJb;vuIKwd:wDdSY;" data-initialvalue="[&quot;20180831T000000&quot;,null,null,null,null,null,null,null,[],[],[],[],[]]" class="mPe9ad m9FZ8b"><div class="jZ0DTb nZK2Yd"><div role="listbox" aria-expanded="false" class="jgvuAb GfgKp" jscontroller="RT8tqe" jsaction="click:cOuCgd(LgbsSe); keydown:I481le; keypress:Kr2w4b; mousedown:UX7yZ(LgbsSe),npT2md(preventDefault=true); mouseup:lbsD7e(LgbsSe); mouseleave:JywGue; touchstart:p6p2H(LgbsSe); touchmove:FwuNnf; touchend:yfqBxc(LgbsSe|preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd(LgbsSe); focus:AHmuwe; blur:O22p3e;b5SvAb:TvD9Pc;Z2AmMb:b50fGb;arGABd:aqzPVe;" jsshadow="" jsname="O1htCb" aria-label="Periodicidad"><div jsname="LgbsSe" role="presentation"><div class="ry3kXd Ulgu9" jsname="d9BH4c" role="presentation"><div class="MocG8c mZytBb LMgvRb KKjvXb" jsname="wQNmvb" jsaction="aLn7Wb:npT2md;" data-value="[&quot;20180831T000000&quot;,null,null,null,null,null,null,null,[],[],[],[],[]]" aria-selected="true" tabindex="0" jslog="37641; track:aLn7Wb" role="option"><div class="kRoyt MbhUzd" jsname="ksKsZd" style="top: 14px; left: 26.7344px; width: 107px; height: 107px;"></div><content class="vRMGwf oJeWuf">No se repite</content></div><div class="MocG8c mZytBb LMgvRb" jsname="wQNmvb" jsaction="aLn7Wb:npT2md;" data-value="[&quot;20180831T000000&quot;,&quot;DAILY&quot;,true,&quot;RRULE:FREQ=DAILY&quot;,null,null,0,1,[],[],[],[],[]]" aria-selected="false" tabindex="-1" jslog="37639; track:aLn7Wb" role="option"><div class="kRoyt MbhUzd" jsname="ksKsZd"></div><content class="vRMGwf oJeWuf">Cada día</content></div><div class="MocG8c mZytBb LMgvRb" jsname="wQNmvb" jsaction="aLn7Wb:npT2md;" data-value="[&quot;20180831T000000&quot;,&quot;WEEKLY&quot;,true,&quot;RRULE:FREQ=WEEKLY;BYDAY=FR&quot;,null,null,0,1,[[0,5]],[],[],[],[]]" aria-selected="false" tabindex="-1" jslog="37643; track:aLn7Wb" role="option"><div class="kRoyt MbhUzd" jsname="ksKsZd"></div><content class="vRMGwf oJeWuf">Cada semana los viernes</content></div><div class="MocG8c mZytBb LMgvRb" jsname="wQNmvb" jsaction="aLn7Wb:npT2md;" data-value="[&quot;20180831T000000&quot;,&quot;MONTHLY&quot;,true,&quot;RRULE:FREQ=MONTHLY;BYDAY=-1FR&quot;,null,null,0,1,[[-1,5]],[],[],[],[]]" aria-selected="false" tabindex="-1" jslog="37640; track:aLn7Wb" role="option"><div class="kRoyt MbhUzd" jsname="ksKsZd"></div><content class="vRMGwf oJeWuf">Cada mes el último viernes</content></div><div class="MocG8c mZytBb LMgvRb" jsname="wQNmvb" jsaction="aLn7Wb:npT2md;" data-value="[&quot;20180831T000000&quot;,&quot;YEARLY&quot;,true,&quot;RRULE:FREQ=YEARLY&quot;,null,null,0,1,[],[],[],[],[]]" aria-selected="false" tabindex="-1" jslog="37637; track:aLn7Wb" role="option"><div class="kRoyt MbhUzd" jsname="ksKsZd"></div><content class="vRMGwf oJeWuf">Anualmente el 31 de agosto</content></div><div class="MocG8c mZytBb LMgvRb" jsname="wQNmvb" jsaction="aLn7Wb:npT2md;" data-value="[&quot;20180831T000000&quot;,&quot;WEEKLY&quot;,true,&quot;RRULE:FREQ=WEEKLY;BYDAY=MO,TU,WE,TH,FR&quot;,null,null,0,1,[[0,5],[0,1],[0,4],[0,2],[0,3]],[],[],[],[]]" aria-selected="false" tabindex="-1" jslog="37657; track:aLn7Wb" role="option"><div class="kRoyt MbhUzd" jsname="ksKsZd"></div><content class="vRMGwf oJeWuf">Todos los días laborables (de lunes a viernes)</content></div><div class="MocG8c mZytBb LMgvRb" jsname="wQNmvb" jsaction="aLn7Wb:npT2md;" data-value="C7uZwb" aria-selected="false" tabindex="-1" jslog="37638; track:aLn7Wb" role="option"><div class="kRoyt MbhUzd" jsname="ksKsZd"></div><content class="vRMGwf oJeWuf">Personalizar...</content></div></div><div class="e2CuFe eU809d" role="presentation"></div></div><div class="OA0qNb ncFHed" jsaction="click:dPTK6c(wQNmvb); mousedown:uYU8jb(wQNmvb); mouseup:LVEdXd(wQNmvb); mouseover:nfXz1e(wQNmvb); touchstart:Rh2fre(wQNmvb); touchmove:hvFWtf(wQNmvb); touchend:MkF9r(wQNmvb|preventMouseEvents=true)" role="presentation" jsname="V68bde" style="min-width: 107px; top: 120px; display: none;" aria-hidden="true"></div></div></div></div></div></div></div></div></div></div><div class="B5S4ge">
                                <div class="C32Mpb uJ4w1"></div><div class="C32Mpb Zlotdb">
                                
                                <div jscontroller="BIYI4" jsaction="GvneHb:GvneHb;" jsshadow="" class="r5F2ye" jsname="Li0BSb">
                                    <div class="fe4pJf" jsname="KYYiw">
                                </div>
                                </div>
                                </div>
                                <div class="C32Mpb FYEgid"><h2 tabindex="-1" class="ynRLnc">Detalles del evento y encontrar un hueco</h2>
                                <div jscontroller="prqp7d" jsaction="GvneHb:GvneHb;" jsshadow="" class="r5F2ye" jsname="tDXc4">
                                    <div class="mrslJ ZjAUM " jsname="I0Fcpe" jsaction="JIbuQc:JIbuQc; keydown:I481le;CBjnzf:dc6VWd;" role="tablist"><div class="ThdJC kaAt2 DvZJme KKjvXb j7nIZb" jscontroller="ragstd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef" jsname="AznF2e" aria-label="Información del evento" aria-controls="tabEventDetails" aria-selected="true" role="tab" tabindex="0" id="xEvtTab"><div class="FAGNtc MbhUzd" jsname="ksKsZd" style="top: 27px; left: 148px; width: 169px; height: 169px;"></div><content class="kx3Hed"><span class="LhpUSc">Información del evento</span>
                                    </content><div class="WwvKTc s7bIcf"></div></div><div class="w7qIhd s7bIcf" jsname="s3t1lf" style="left: 8px; width: 169px;"></div></div><div class="fe4pJf" jsname="KYYiw"><content class="HALYaf XQINac R21Rlc KKjvXb" jsname="PAiuue" role="tabpanel" id="tabEventDetails">
                                        
                                        
                                        <!--Añade Ubicacion-->
                                        <div class="FrSOzf"><div aria-hidden="true" class="tzcF6"><span class="DPvwYc uSx8Od" aria-hidden="true"></span></div><div class="j3nyw"><div jsname="ldnB1c" class="XI0mfe" aria-atomic="true" aria-live="assertive" role="alert">Los cambios solo se reflejarán en este calendario: cloud@gestionx.com.</div><div class="FoJt4b"><div id="xLocIn" jscontroller="JKaP9e" jsaction="CLIdJb:iktSbe;u7cUSb:uuoJzf;PUCh7:wY7prd;v819Lb:hOfV5c;" jsname="vHVaxd" class="PVQHSc zIeiH"><div jscontroller="GchbZb" jsaction="kxgsof:UsOR3d;fRPOBb:MxPR1d;isz31c:Mpi1Mb;" jsshadow="" class="TwDMuc"><content><div class="L6J0Pc VOEIyf IjMZm IIB0tc dgjdGd" jscontroller="pyFWwe" jsaction="keydown:I481le; focus: AHmuwe;AHmuwe:AHmuwe; mouseenter:npT2md;Mu8aMc:YPqjbf;Edq9ub:SDqDXe;e0gSlf:pX1iqf;" jsshadow="" data-persist-on-navigation="true" data-close-on-blur="true" jsname="yNrILb" data-renderer="fxS6vb" data-service="srwsrd"><div jscontroller="Jdbz6e" jsname="YPqjbf" jsshadow="" class="d1dlne WvJxMd" jsaction="rcuQ6b:npT2md; keydown:I481le; click:cOuCgd;YqO5N:YPqjbf" data-showselected="false" data-throttle-time="150"><div class="rFrNMe yNVtPc ULpymb zKHdkd Tyc9J RDPZE" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV;" jsshadow="" jsname="A51lKb" aria-disabled="true"><div class="aCsJod oJeWuf"><div class="aXBtI I0VJ4d Wic03c"><content class="A37UZe qgcB3c iHd5yb"><content><div></div></content></content><div class="Xb9hP">
                                            <input type="text" class="whsOnd zHQkBf" jsname="YPqjbf" autocomplete="off" tabindex="0" disabled="" aria-hidden="true" data-initial-value="">
                                            </div><content class="A37UZe sxyYjd MQL3Ob"><content><div></div></content></content><div class="i9lrp mIZh1c"></div><div jsname="XmnwAc" class="OabDMe cXrdqd"></div></div></div><div class="LXRPh"><div jsname="ty6ygf" class="ovnfwe Is7Fhb"></div><div jsname="B34EJ" class="dEOOab RxsGPe" aria-atomic="true" aria-live="assertive"></div></div></div><div class="rFrNMe Ax4B8 ULpymb zKHdkd Tyc9J" jscontroller="pxq3x" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV;" jsshadow="" jsname="dSO9oc"><div class="aCsJod oJeWuf"><div class="aXBtI I0VJ4d Wic03c"><content class="A37UZe qgcB3c iHd5yb"><content><content><div></div></content></content></content><div class="Xb9hP">
                                                
                                                <input type="text" class="whsOnd zHQkBf" jsname="YPqjbf" autocomplete="off" tabindex="0" value="Peru" id="Direccion">
                                                
                                                <div jsname="LwH6nd" class="ndJi5d snByac"><!--Añade una ubicación--></div></div><content class="A37UZe sxyYjd MQL3Ob"><content><content><div></div></content></content></content><div class="i9lrp mIZh1c"></div><div jsname="XmnwAc" class="OabDMe cXrdqd"></div></div></div><div class="LXRPh"><div jsname="ty6ygf" class="ovnfwe Is7Fhb"></div><div jsname="B34EJ" class="dEOOab RxsGPe" aria-atomic="true" aria-live="assertive"></div></div></div></div><div class="BBOA1c eh6FEc"><div jscontroller="ltDFwf" jsaction="transitionend:Zdx3Re" role="progressbar" class="sZwd7c B6Vhqe"><div class="xcNBHc um3FLe"></div><div jsname="cQwEuf" class="w2zcLc Iq5ZMc"></div><div class="MyvhI TKVRUb" jsname="P1ekSe"><span class="l3q5xe SQxu9c"></span></div><div class="MyvhI sUoeld"><span class="l3q5xe SQxu9c"></span></div></div></div><div class=" tWfTvb"><div class="u3WVdc jBmls" tabindex="-1" role="listbox" data-expanded="false" data-childcount="0" jsname="iuXDpb" jsaction="mousedown:npT2md(preventDefault=true);" id="nngdp154"></div></div></div></content></div></div></div></div></div>
                                        <!--Añade Ubicacion-->
                                        
                                        
                                    <!--tipo notificacion-->
                                    <div class="FrSOzf SiRzcd"><div aria-hidden="true" class="tzcF6"><span class="DPvwYc uSx8Od" aria-hidden="true"></span></div><div class="j3nyw GtKErc" id="xNtList"><div jsname="VPIWce" class="RFS23b" jscontroller="XI9sUc"><div jsname="bN97Pc"><ul class="COCaHe" aria-label="Notificaciones" jsaction="ViXxie:ZyFmad"></ul><div class="kMp0We" jsaction="JIbuQc:RIv54b"><div class="NI2kfb ohGU4b ECCms"><div role="button" class="U26fgb O0WRkf oG5Srb C0oVfc rhtYVe" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow="" jsname="mWZCyf" aria-label="Añadir una notificación" aria-disabled="false" tabindex="0"><div class="Vwe4Vb MbhUzd" jsname="ksKsZd"></div><div class="ZFr60d CeoRYc"></div><content class="CwaK9"><span class="RveJvd snByac"><!--Añadir una notificación-->Notificacion / Correo Electronico</span></content>
                                    <div jscontroller="pxq3x" jsshadow="" class="Kb2sf Dc8KZd t4IwDf CDELXb" jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV" jsname="zgL4vd"><label class="xlxsj oJeWuf"><div class="mVuQpd"><div class="kw5sif">
                                        
                                        <input jsname="YPqjbf" type="number" class="WpDZC zHQkBf" value="30" id='TimeNotifications' >
                                        
                                        </div></div><div jsname="XmnwAc" class="DSC0Mc cXrdqd Y2Zypf" style="transform-origin: 47.9219px center 0px;"></div></label><div class="wOWxX"><div jsname="ty6ygf" class="qCTOIe Is7Fhb"></div><div jsname="B34EJ" class="cvUi3d RxsGPe" aria-atomic="true" aria-live="assertive" role="alert"></div></div></div>
                                    </div></div></div></div></div></div>
                                    
                                    
                                    
                                    </div>
                                    <!--tipo notificacion-->
                                    
                                    <!--cuenta de goole-->
                                    <!--<div class="FrSOzf Cv8pif"><div aria-hidden="true" class="tzcF6"><span class="DPvwYc uSx8Od" aria-hidden="true"></span></div><div class="j3nyw PxPKzc"><p class="Hld1td" id="xCalOwn" jsname="Lo5txe">cloud@gestionx.com</p><div jscontroller="c3TXAc" jsaction="fXDjj:iktSbe;Z2AmMb:rBI2Jc;" class="K9PcHd" data-calendar="#7986CB" data-menu-classes="undefined" jsname="BdtoYc" id="ow105" __is_owner="true"><div role="button" class="U26fgb c7fp5b FS4hgd FpmPAb" jscontroller="iSvg6e" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue;touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc(preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd;focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;;keydown:I481le;" jsshadow="" jsname="ULdf" aria-label="Azul turquesa, color del evento" aria-disabled="false" tabindex="0" data-tooltip="Selecciona el color del evento" aria-haspopup="true" aria-expanded="false" data-anchor-corner="top-start" data-tooltip-vertical-offset="-12" data-tooltip-horizontal-offset="0" id="ow106" __is_owner="true"><div class="lVYxmb MbhUzd" jsname="ksKsZd" style="top: 22px; left: 44.7188px; width: 60px; height: 60px;"></div><div class="g4jUVc" aria-hidden="true"></div><content class="I3EnF oJeWuf"><span class="NlWrkb snByac"><div class="kImhzd"><div jsname="QPiGnd" class="azQ4Lc" style="background-color: rgb(3, 155, 229);"></div></div></span></content></div></div></div></div>-->
                                    <!--cuenta de goole-->
                                    
                                    <!--disponibilidad-->
                                    <div class="FrSOzf"><div aria-hidden="true" class="tzcF6"><span class="DPvwYc uSx8Od" aria-hidden="true"></span></div><div class="j3nyw WxPQPe" id="xBusySel"><div class="jZ0DTb"><div role="listbox" aria-expanded="false" class="jgvuAb GfgKp" jscontroller="RT8tqe" jsaction="click:cOuCgd(LgbsSe); keydown:I481le; keypress:Kr2w4b; mousedown:UX7yZ(LgbsSe),npT2md(preventDefault=true); mouseup:lbsD7e(LgbsSe); mouseleave:JywGue; touchstart:p6p2H(LgbsSe); touchmove:FwuNnf; touchend:yfqBxc(LgbsSe|preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd(LgbsSe); focus:AHmuwe; blur:O22p3e;b5SvAb:TvD9Pc;Z2AmMb:b50fGb;arGABd:aqzPVe;" jsshadow="" jsname="Hj4Xrb" aria-label="Show as"><div jsname="LgbsSe" role="presentation"><div class="ry3kXd Ulgu9" jsname="d9BH4c" role="presentation"><div class="MocG8c tAd9Z LMgvRb" jsname="wQNmvb" jsaction="" data-value="0" aria-selected="false" role="option" tabindex="-1"><div class="kRoyt MbhUzd" jsname="ksKsZd"></div><content class="vRMGwf oJeWuf">No disponible</content></div><div class="MocG8c tAd9Z LMgvRb KKjvXb" jsname="wQNmvb" jsaction="" data-value="1" aria-selected="true" role="option" tabindex="0"><div class="kRoyt MbhUzd" jsname="ksKsZd"></div><content class="vRMGwf oJeWuf">Disponible</content></div></div><div class="e2CuFe eU809d" role="presentation"></div></div><div class="OA0qNb ncFHed" jsaction="click:dPTK6c(wQNmvb); mousedown:uYU8jb(wQNmvb); mouseup:LVEdXd(wQNmvb); mouseover:nfXz1e(wQNmvb); touchstart:Rh2fre(wQNmvb); touchmove:hvFWtf(wQNmvb); touchend:MkF9r(wQNmvb|preventMouseEvents=true)" role="presentation" jsname="V68bde" style="display:none;"></div></div></div><div class="jZ0DTb mSGCub"><div role="listbox" aria-expanded="false" class="jgvuAb GfgKp" jscontroller="RT8tqe" jsaction="click:cOuCgd(LgbsSe); keydown:I481le; keypress:Kr2w4b; mousedown:UX7yZ(LgbsSe),npT2md(preventDefault=true); mouseup:lbsD7e(LgbsSe); mouseleave:JywGue; touchstart:p6p2H(LgbsSe); touchmove:FwuNnf; touchend:yfqBxc(LgbsSe|preventMouseEvents=true|preventDefault=true); touchcancel:JMtRjd(LgbsSe); focus:AHmuwe; blur:O22p3e;b5SvAb:TvD9Pc;Z2AmMb:b50fGb;arGABd:aqzPVe;" jsshadow="" jsname="y3puF" aria-label="Visibilidad"><div jsname="LgbsSe" role="presentation"><div class="ry3kXd Ulgu9" jsname="d9BH4c" role="presentation"><div class="MocG8c tAd9Z LMgvRb KKjvXb" jsname="wQNmvb" jsaction="" data-value="0" aria-selected="true" role="option" tabindex="0"><div class="kRoyt MbhUzd" jsname="ksKsZd"></div><content class="vRMGwf oJeWuf">Visibilidad predeterminada</content></div><div class="MocG8c tAd9Z LMgvRb" jsname="wQNmvb" jsaction="" data-value="1" aria-selected="false" role="option" tabindex="-1"><div class="kRoyt MbhUzd" jsname="ksKsZd"></div><content class="vRMGwf oJeWuf">Público</content></div><div class="MocG8c tAd9Z LMgvRb" jsname="wQNmvb" jsaction="" data-value="2" aria-selected="false" role="option" tabindex="-1"><div class="kRoyt MbhUzd" jsname="ksKsZd"></div><content class="vRMGwf oJeWuf">Privado</content></div></div><div class="e2CuFe eU809d" role="presentation"></div></div><div class="OA0qNb ncFHed" jsaction="click:dPTK6c(wQNmvb); mousedown:uYU8jb(wQNmvb); mouseup:LVEdXd(wQNmvb); mouseover:nfXz1e(wQNmvb); touchstart:Rh2fre(wQNmvb); touchmove:hvFWtf(wQNmvb); touchend:MkF9r(wQNmvb|preventMouseEvents=true)" role="presentation" jsname="V68bde" style="display:none;"></div></div></div><div jsname="ljs9mb" data-privacy="0" class="gUbJde" style="display: inline"><div class="P1LEuc " jsname="C19pz"><div class="StxAo SaqKKd QesPK"><a href="https://support.google.com/calendar?p=event_visibility&amp;hl=es" target="_blank" tabindex="0" aria-label="Más información sobre la privacidad del evento" class="fsGWN" aria-describedby="BZ9OCc"><span class="DPvwYc aStPEd k6YF6c" aria-hidden="true"></span></a><div class="ZohDKe hBau3e" jsname="o1ZB4b"><div class="" jsname="I91Esc"><div id="egeNub" class="EmURbc YbN2I"><span aria-hidden="true"><span id="BZ9OCc">De manera predeterminada, este evento se configurará con las opciones para compartir de este calendario: cualquier persona que pueda ver los detalles de otros eventos del calendario también podrá ver los de este evento.</span><div class="GlKfhb"><div role="presentation" class="U26fgb O0WRkf oG5Srb HQ8yf C0oVfc" jscontroller="VXdfxd" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue;focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;" jsshadow="" aria-disabled="false"><a class="FKF6mc TpQm9d" href="https://support.google.com/calendar?p=event_visibility&amp;hl=es" target="_blank" tabindex="-1"><div class="Vwe4Vb MbhUzd" jsname="ksKsZd"></div><div class="ZFr60d CeoRYc"></div><content class="CwaK9"><span class="RveJvd snByac">Más información</span></content></a></div></div></span></div></div></div></div></div></div><div class="kKroed" jsname="ljs9mb" data-privacy="1" style="display: none">Si haces público esta evento, expones todos su detalles a cualquier persona que tenga acceso a este calendario, incluso aunque no pueda ver los detalles de otros eventos.<br><a href="https://support.google.com/calendar?p=event_visibility&amp;hl=es" class="HvbOJ" target="_blank" rel="noopener noreferrer">Más información sobre visibilidad de eventos</a></div><div class="kKroed" jsname="ljs9mb" data-privacy="2" style="display: none">Si haces este evento privado, ocultas todos sus detalles a cualquier persona que tenga acceso a este calendario, a menos que tenga el nivel de acceso "Realizar cambios en eventos" o superior.<br><a href="https://support.google.com/calendar?p=event_visibility&amp;hl=es" class="HvbOJ" target="_blank" rel="noopener noreferrer">Más información sobre visibilidad de eventos</a></div><div class="kKroed" jsname="ljs9mb" data-privacy="4" style="display: none">Solamente tú podrás ver este evento, independientemente de cómo hayas configurado los ajustes para compartir el calendario.<br><a href="https://support.google.com/calendar?p=event_visibility&amp;hl=es" class="HvbOJ" target="_blank" rel="noopener noreferrer">Más información sobre visibilidad de eventos</a></div></div></div>
                                    <!--disponibilidad-->
                                    
                                    
                                    <!--añade un comentario-->
                                    <div class="FrSOzf tdXRXb"><div aria-hidden="true" class="tzcF6">
                                        <span class="DPvwYc sm8sCf uSx8Od" aria-hidden="true"><span class="NXNZhd">
                                        </span>
                                        </span>
                                        </div>
                                        <div class="j3nyw">
                                            <div class="DyOaYd" id="xDesc">
                                                <div jsname="NorrI" jscontroller="bcfLjf" jsaction="rcuQ6b:Rayp9d;svxTd:ssyhXe;keydown:MziKid" data-spc="false" data-rpf="true" class="ettIx lR3h6d" jsshadow="">
                                                    <content class="OiAIRd"><div jscontroller="zXKvFe" jsaction="JIbuQc:qoRYEd;" jsname="A8gci" class="BJTbWb">
                                                        <ul jsname="rymPhb" class="rhidPd" data-can-edit="true"></ul>
                                                    </div>
                                                    </content>
                                                    <div id="xDescIn" class="Sz0nN b4sm0d">
                                        <div jsname="V67aGc" class="iSSROb snByac" aria-hidden="false">
                                            <?php  if(isset($_GET['text']))
                                            {
                                                
                                            }
                                            else 
                                            {
                                                echo 'Añade una descripción';
                                            }
                                            ?>
                                            
                                        
                                        </div>
                                        
                                        <div jsname="L9AdLc" jsaction="focus:L35pef; touchend:L35pef; blur:MZpOXc; keyup:qdd8Be; paste:QD1hyc;" class="hInySc iuaqab editable" aria-label="Descripción" id="hInySc0" g_editable="true" role="textbox" contenteditable="true" style="direction: ltr;"><?php echo $_GET['text'];?>
                                        </div>
                                        <div class="tsIGMc mIZh1c">
                                            
                                        </div>
                                        <div class="PfAg4 cXrdqd"></div>
                                        </div></div><div aria-atomic="true" aria-live="assertive" role="alert" jsname="bjAuyd" class="L86gVd OqvMgc">El texto es demasiado largo. Recorta el texto o modifica el estilo para evitar que aparezca truncado.</div></div></div></div>
                                    <!--añade un comentario-->
                                    
                                    
                                    </content>
                                    
                                    
                                    
                                    
                                    </div></div></div></div>
                                  
                                    </div>
                                    </div>
                                    </div>
                                    <div class="kYrwHb" jsname="kYrwHb">
                                        
                                    </div>
                                    </div>
                                    </div>
                                    <div ng-non-bindable="">
                                        
                                    </div>
                                    </div>
                                    </div>
                                    <div id="yDmH0d" class="yDmH0d" style="width: 1059px; height: 794px;">
                                        
                                    </div>
                                    <div class="k77Iif-nUpftc-psdQ5e" jsname="j0uKKc" data-dragsource-ignore="true">
                                        
                                    </div><div id="gccFrame" class="ynRLnc" aria-hidden="true">
                                        
                                    </div>
                                    
                                   
                                  
                                        </div>
                                       
                           
                                   
                                    
                                 
                                    
                                    
                                    
                                    
                                
                                       
                                           
                                        
                                      
                                                
                                                </body>
                                                </html>
<style>
.VKy0Fi {cursor: pointer}
.VKy0Ini {cursor: pointer}
        
</style>                                                
                                                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function MostrarTime2($d)
{
    $('#'+$d).css('display','block');
}


function CambiarFechaFin(a)
{
    console.log(a);
    console.log($(a).attr("data-ical"));
    console.log($(a).html());
    let TimeNFomat=$(a).attr("data-ical");
    let TimeFinal=$(a).html();
    
    
    
    //quitamos todos los selecionados 
    $('.VKy0Fi').attr("aria-selected","false");
    //selesionamos lo que tiene nuestra lista 
    $(a).attr("aria-selected","true");
    
    //cambiamos el valor de la hora 
    $('#xStTiFin').val(TimeFinal)
    //cambiamos el valor de attr data-final-value
    $('#xStTiFin').attr("data-final-value",TimeNFomat)
    
    //ocultamos la lista una vez selecionado
    $('#c2').css('display','none');
    
}

function CambiarFechaIni(a)
{
    console.log(a);
    console.log($(a).attr("data-ical"));
    console.log($(a).html());
    let TimeNFomat=$(a).attr("data-ical");
    let TimeFinal=$(a).html();
    
    
    
    //quitamos todos los selecionados 
    $('.VKy0Ini').attr("aria-selected","false");
    //selesionamos lo que tiene nuestra lista 
    $(a).attr("aria-selected","true");
    
    //cambiamos el valor de la hora 
    $('#xStTiIn').val(TimeFinal)
    //cambiamos el valor de attr data-final-value
    $('#xStTiIn').attr("data-initial-value",TimeNFomat)
    
    //ocultamos la lista una vez selecionado
    $('#c1').css('display','none');
}

function GuardarEvento()
{
    //obtener los valores predertimandos
    
    var asunto =$('#xTiIn').val();
    var dir =$('#Direccion').val();

    var date1 =$('#xStDaIn').val();
    var time1 =$('#xStTiIn').attr('data-initial-value');
    var date2 =$('#xEnDaIn').val();
    var time2 =$('#xStTiFin').attr('data-final-value');
    
    var html_info=$('#hInySc0').html();
    var tiempo_noti=$('#TimeNotifications').val();
    var id_muro =<?php echo $_GET['id_muro']; ?>
    
    
    console.log(asunto);
    console.log(dir);
    console.log(html_info);
    console.log(date1);
    console.log(time1);
    console.log(date2);
    console.log(time2);
    console.log(tiempo_noti);
    //console.log(datetime1);
    //console.log(datetime2);
    console.log(id_muro);
    $.ajax({
          type: "POST",
          url: "inserta_cal1.php",
          data: {asunto:asunto,dir:dir,html_info:html_info,time1:time1,time2:time2,date1:date1,date2:date2,tiempo_noti:tiempo_noti,id_muro:id_muro},
          success: function(data){
               $("#lblPlanta").html(data);
            //showUser();
            }
        });
}





</script>

 <style>
     .dropdown-menu > li > a:hover > [class^="icon-"],
.dropdown-menu > li > a:focus > [class^="icon-"],
.dropdown-menu > li > a:hover > [class*=" icon-"],
.dropdown-menu > li > a:focus > [class*=" icon-"],
.dropdown-menu > .active > a > [class^="icon-"],
.dropdown-menu > .active > a > [class*=" icon-"],

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  background-color: #ffffff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  *border-right-width: 2px;
  *border-bottom-width: 2px;
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
     -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -webkit-background-clip: padding-box;
     -moz-background-clip: padding;
          background-clip: padding-box;
}

.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 1px;
}
.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}
.dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
     -moz-border-radius: 6px 0 6px 6px;
          border-radius: 6px 0 6px 6px;
}
.nav-tabs .dropdown-menu {
  -webkit-border-radius: 0 0 6px 6px;
     -moz-border-radius: 0 0 6px 6px;
          border-radius: 0 0 6px 6px;
}
.nav-pills .dropdown-menu {
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
}
.navbar .nav > li > .dropdown-menu:before {
  position: absolute;
  top: -7px;
  left: 9px;
  display: inline-block;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #ccc;
  border-left: 7px solid transparent;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  content: '';
}

.navbar .nav > li > .dropdown-menu:after {
  position: absolute;
  top: -6px;
  left: 10px;
  display: inline-block;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #ffffff;
  border-left: 6px solid transparent;
  content: '';
}

.navbar-fixed-bottom .nav > li > .dropdown-menu:before {
  top: auto;
  bottom: -7px;
  border-top: 7px solid #ccc;
  border-bottom: 0;
  border-top-color: rgba(0, 0, 0, 0.2);
}

.navbar-fixed-bottom .nav > li > .dropdown-menu:after {
  top: auto;
  bottom: -6px;
  border-top: 6px solid #ffffff;
  border-bottom: 0;
}
.navbar .pull-right > li > .dropdown-menu,
.navbar .nav > li > .dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.navbar .pull-right > li > .dropdown-menu:after,
.navbar .nav > li > .dropdown-menu.pull-right:after {
  right: 13px;
  left: auto;
}

.navbar .pull-right > li > .dropdown-menu .dropdown-menu,
.navbar .nav > li > .dropdown-menu.pull-right .dropdown-menu {
  right: 100%;
  left: auto;
  margin-right: -1px;
  margin-left: 0;
  -webkit-border-radius: 6px 0 6px 6px;
     -moz-border-radius: 6px 0 6px 6px;
          border-radius: 6px 0 6px 6px;
}
.open > .dropdown-menu {
  display: block;
}
.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
     -moz-border-radius: 0 6px 6px 6px;
          border-radius: 0 6px 6px 6px;
}
.dropup .dropdown-submenu > .dropdown-menu {
  top: auto;
  bottom: 0;
  margin-top: 0;
  margin-bottom: -2px;
  -webkit-border-radius: 5px 5px 5px 0;
     -moz-border-radius: 5px 5px 5px 0;
          border-radius: 5px 5px 5px 0;
}
.dropdown .dropdown-menu .nav-header {
  padding-right: 20px;
  padding-left: 20px;
}
.navbar .pull-right > li > .dropdown-menu:before,
.navbar .nav > li > .dropdown-menu.pull-right:before {
  right: 12px;
  left: auto;
}
 </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<script>
$(document).ready(function() {
            $('#xStDaIn').datepicker();
        });

$(document).ready(function() {
            $('#xEnDaIn').datepicker();
        });
        
</script>

<div id="lblPlanta">
     
    </div>




