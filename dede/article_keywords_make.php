<?
require_once(dirname(__FILE__)."/config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ؼ���ά��</title>
<link href="base.css" rel="stylesheet" type="text/css">
</head>
<body background='img/allbg.gif' leftmargin='8' topmargin='8'>
<table width="98%" border="0" cellpadding="3" cellspacing="1" bgcolor="#666666" align="center">
    <tr> 
      <td height="20" background='img/tbg.gif'> <table width="98%" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td width="30%" height="18"><strong>�ؼ���ά����</strong></td>
            <td width="70%" align="right"><input name="kw" type="button" id="kw" value="���عؼ��ֹ���ҳ" onClick="location='article_keywords_main.php';"></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td height="48" bgcolor="#FFFFFF">�������򵼰����Զ�������ϵͳ�ڵĹؼ��֣���ͳ�ƹؼ��ֵ���������������������������������Ĺؼ��ֻ�������Ĺؼ��֣�������ĵ�������������׼ȷ�ԣ�����������ֱ�����ڴ��жԹؼ��ֽ��з����������뵽���ݿ�ģ���˱������Ƚ�ռ���ڴ棬�������ĵ������ܴ���ʹ�õ��������������������޷���ɱ�������<br/>
        ����������ֻ��������Ƶ���Ĺؼ������ݣ�����Ƶ�����Զ���Ƶ���������ֹ�ָ�����ݵĹ�ϵ�֡�<br/>
        ���������������ǲɼ������ģ������á��Զ���ȡ�ؼ��֡��Ĺ��ܶ�δ�йؼ��ֵ����½��зִ�������Ȼ���ټ��ؼ��֡�</td>
    </tr>
    <tr> 
      
    <td height="31" bgcolor="#FAFAF1" align="center">
	[<a href="article_keywords_analyse.php" target="stafrm"><u>������еĹؼ���</u></a>]
	&nbsp;&nbsp;
	[<a href="article_keywords_fetch.php" target="stafrm"><u>�Զ���ȡ�ؼ���</u></a>]</td>
    </tr>
  <tr bgcolor="#E6F3CD"> 
    <td height="20"> <table width="100%">
        <tr> 
          <td width="74%"><strong>�����</strong></td>
          <td width="26%" align="right"> <script language='javascript'>
            	function ResizeDiv(obj,ty)
            	{
            		if(ty=="+") document.all[obj].style.pixelHeight += 50;
            		else if(document.all[obj].style.pixelHeight>80) document.all[obj].style.pixelHeight = document.all[obj].style.pixelHeight - 50;
            	}
            	</script>
            [<a href='#' onClick="ResizeDiv('mdv','+');">����</a>] [<a href='#' onClick="ResizeDiv('mdv','-');">��С</a>] 
          </td>
        </tr>
      </table></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td id="mtd"> <div id='mdv' style='width:100%;height:100;'> 
        <iframe name="stafrm" frameborder="0" id="stafrm" width="100%" height="100%"></iframe>
      </div>
      <script language="JavaScript">
	  document.all.mdv.style.pixelHeight = screen.height - 360;
	  </script> </td>
  </tr>
</table>
</body>
</html>