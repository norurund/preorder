@extends('layout')
<?PHP
session_start();
$flg=filter_input(INPUT_POST,"flg");
$a=filter_input(INPUT_POST,"a");
$b=filter_input(INPUT_POST,"b");
if($flg==1){
  $_SESSION["a"]=$a;
  $_SESSION["b"]=$b;
  print json_encode(["a"=>$a,"b"=>$b]);
  exit;
}elseif($flg==2){
  if(!isset($_SESSION["a"])){
    header('Location:'.$_SERVER["SCRIPT_NAME"]);
    exit;
  }
  print "完了";
  print "a=".htmlspecialchars($_SESSION["a"])."/";
  print "b=".htmlspecialchars($_SESSION["b"])."で登録";
  unset($_SESSION["a"]);
  unset($_SESSION["b"]);
  exit;
}else{
  print_r($_SESSION);
  unset($_SESSION["a"]);
  unset($_SESSION["b"]);
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(function(){

  $(document).on('click','#close',function(e){
    $('#dl').removeAttr('open');
  });
  $('#f1').on('submit',function(e){
    e.preventDefault();
    $.ajax({
      "type":"post",
      "data":new FormData($(this).get(0)),
      "dataType":"json",
      "cache":false,
      "processData": false,
      "contentType": false,
    }).done(function(data){
      $('#dl').remove();
      var form=$('<form method="post">');
      $('<div>').text("a:"+data.a).appendTo(form);
      $('<div>').text("b:"+data.b).appendTo(form);
      $('<input type="hidden" name="flg" value="2">').appendTo(form);
      $('<div>').html($('<input type="submit" value="登録"><input type="button" id="close" value="閉じる">')).appendTo(form);
      $('<dialog id="dl" open>').html(form).appendTo('body');
      console.log(data);
    });
  });
});
</script>
<form method="post" id="f1">
a:<input type="text" name="a"><br>
b:<input type="text" name="b"><br>
<input type="submit" value="send">
<input type="hidden" name="flg" value="1">
</form>