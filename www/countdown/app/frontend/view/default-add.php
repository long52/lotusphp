<div class="area">
  <form action="{url('default', 'DoAdd')}" method="post"  enctype="multipart/form-data" name="theform" id="theform" onsubmit="return validate(this)">
    <table border="0" cellpadding="0" cellspacing="0" class="listtable">
      <caption>
      添加联系人
      </caption>
      <tbody class="stripe">

        <tr>
          <td>标题</td>
          <td><input name="data[title]" type="text" size="80" maxlength="100" /></td>
        </tr>
        <tr>
          <td>图片地址</td>
          <td><input name="data[img]" type="text" size="80" maxlength="100" /></td>
        </tr>
        <tr>
          <td>链接地址</td>
          <td><input name="data[url]" type="text" size="80" maxlength="100" /></td>
        </tr>

      </tbody>
    </table>
    <div class="button_box">
      <input class="btn" name="dosubmit" type="submit" value="提交" />
    </div>
  </form>
</div>