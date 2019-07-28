<iframe width="420" height="315" src="//www.youtube.com/embed/qCNTerq58DM" frameborder="0" allowfullscreen></iframe>

<div>Click the thumbnail</div>

<style type="text/css">
	div {float:left;margin:20px;}
iframe {display:none;}
img {float:left;width:120px;height:90px;cursor:pointer;}
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script type="text/javascript">
	    var iframe           = $('iframe:first');
    var iframe_src       = iframe.attr('src');
    var youtube_video_id = iframe_src.match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();
    
    if (youtube_video_id.length == 11) {
        var video_thumbnail = $('<img src="//img.youtube.com/vi/'+youtube_video_id+'/0.jpg">');
        $('body').append(video_thumbnail);
    
        $('img:first').click(function() {
            $('iframe:first').fadeToggle('400');
        });
    }
</script>