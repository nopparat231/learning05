
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>

<script language="javascript">
    var count=0;
    var timerVar=null;
    window.onload=function(){
        timerVar=setTimeout("setTimer()",1000);
    }
    
    function setTimer(){
        clearTimeout(timerVar);
        count+=1;
        var item=document.getElementById("time_value");
        item.value=count;
        timerVar=setTimeout("setTimer()",1000);
    }

    $(document).ready(function(){

    $("#btn1").click(function(){

            $.post("savetime.php", { 
            data1: $("#time_value").val(), 
            data2: $("#txt2").val()});
        });
    });
</script>



    <input type="text" name="time_value" id="time_value" value="0" />  
    <input type="text" id="txt2">
    <button class="btn btn-secondary" id="btn1" >ส่งคำตอบ</button>

<div id="div1"></div>
