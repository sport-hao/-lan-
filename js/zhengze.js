"use strict";var regtel=/^\d+$/,regNum=/^\d+$/,regLetter=/^[a-zA-Z]+$/,regChar=/^[!@#$]+$/,_regNum=/\d+/,_regLetter=/[a-zA-Z]+/,_regChar=/[!@#$]+/;$(".box1").blur(function(){regtel.test($(".box1").val())||$(".box1").val("请输出纯数字")});var pwdls=/^\w.{6,15}$/;$(".box2").blur(function(){pwdls.test($(".box2").val())||$(".box2").val("请输入七位以上数字或字母"),regNum.test($(".box2").val())||regLetter.test($(".box2").val())||regChar.test($(".box2").val())?($(".ospann").css({"border-left":"50px solid green"}),$(".ospann").html("弱")):_regNum.test($(".box2").val())&&_regLetter.test($(".box2").val())&&_regChar.test($(".box2").val())?($(".ospann").css({"border-left":"150px solid red"}),$(".ospann").html("强")):($(".ospann").css({"border-left":"100px solid pink"}),$(".ospann").html("中"))});