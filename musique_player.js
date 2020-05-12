var audioObj = '';
var currentLink = '';
var currentId = '';
var isRepeat = false;
var isRandom = false;
var volume = 0.5;
var lyrics = function (elem) {
    self = elem;
    if ($(self).parent().children('.lyrics')[0]) {
        $(self).parent().children('.lyrics').remove();
        return;
    }
    $.ajax({
        type: "GET",
        data: {
            q_track: $(self).parent().attr('data-name'),
            q_artist: $(self).parent().attr('data-chanteur'),
            apikey:"1abc619bb6955486b2310adecfdcef35",
            format:"jsonp",
            callback:"jsonp_callback"
        },
        url: "http://api.musixmatch.com/ws/1.1/track.search",
        dataType: "jsonp",
        jsonpCallback: 'jsonp_callback',
        contentType: 'application/json',
        success: function(data) {
            var track_id = data['message']['body']['track_list']['0']['track']['track_id'];
            if (track_id) {
                $.ajax({
                    type: "GET",
                    data: {
                        track_id: track_id,
                        apikey:"1abc619bb6955486b2310adecfdcef35",
                        format:"jsonp",
                        callback:"jsonp_callback"
                    },
                    url: "http://api.musixmatch.com/ws/1.1/track.lyrics.get",
                    datatype: "jsonp",
                    jsonpcallback: 'jsonp_callback',
                    contenttype: 'application/json',
                    success: function(data) {
                        data = data.slice(0, -2);
                        data = data.substring(15);
                        data = JSON.parse(data);
                        var lyrics = data['message']['body']['lyrics']['lyrics_body'];
                        $.ajax({
                            type: "POST",
                            data: {
                                'lyrics': lyrics
                            },
                            url: "http://myphp.com/parser.php",
                            datatype: "json",
                            success: function(data) {
                                $(self).parent().append('<div class="lyrics">'+data+'</div>');
                            }
                        });
                    }
                });
            }
        }
    });
};
$("input").focus(
    function () {
        $(this).addClass('infocus');
    }
);
$("input").focusout(
    function () {
        $(this).removeClass('infocus');
    }
);
$('body').keypress(function(e) {
    if (e.which == 32 && $('.infocus')[0]) {
        return;
    }
    if (e.which == 32) {
        e.preventDefault();
    }
    if (e.which == 32 && audioObj !== '' && document.activeElement.nodeName !== 'INPUT') {
        audioObj.paused ?
            $("div[data-id="+currentId+"]").children('.actions').children('.play').trigger('click') :
            $("div[data-id="+currentId+"]").children('.actions').children('.pause').trigger('click');
    }
    if (e.which == 13) {
        $('body').animate({ scrollTop: $('div[data-status=current]').offset().top - 500 }, 1000);
    }
});

var play = function (link, e) {
    if (audioObj == '') {
        currentLink = link;
        audioObj = new Audio(link);
        audioObj.volume = volume;
        currentId = $(e).parents('.song-item').attr('data-id');
        document.title = $(e).parents('.song-item').attr('data-name')
    }
    if (currentLink !== link && audioObj != '') {
        currentLink = link;
        audioObj.pause();
        audioObj.currentTime = 0;
        audioObj = new Audio(link);
        audioObj.volume = volume;
        currentId = $(e).parents('.song-item').attr('data-id');
        document.title = $(e).parents('.song-item').attr('data-name');
        $('div[data-status=current]').removeAttr('data-status');
        $('.pause').css('display', 'none');
        $('.play').css('display', 'block');
    }
    audioObj.onended = function () {
        if (isRepeat) {
            audioObj.play();
            return;
        }
        $('.pause').css('display', 'none');
        $('.play').css('display', 'block');
        if (isRandom) {
            var length = $('.song-item').length - 1;
            currentId = randomInteger($('.song-item').eq(0).attr('data-id'), $('.song-item').eq(length).attr('data-id'));
        } else {
            currentId = parseInt(currentId) +  1;
        }
        $("div[data-id="+currentId+"]").children('.actions').children('.play').trigger('click');
    }
    setTimeout(function () {      
        audioObj.play();
    }, 150);
    $('.media-info').children('.name').text($("div[data-id="+currentId+"]").attr('data-name'));
    $('.media-info').children('.artist').text($("div[data-id="+currentId+"]").attr('data-chanteur'));
    $(e).parent().children('.pause').css('display', 'block');
    $(e).parents('.song-item').attr('data-status', 'current');
    $(e).css('display', 'none');
    $('.current').children('.actions').children('.play').css('display', 'none');
    $('.current').children('.actions').children('.pause').css('display', 'block');
}

var pause = function (link, e) {
    audioObj.pause();
    $('.pause').css('display', 'none');
    $('.play').css('display', 'block');
    $('.current').children('.play').css('display', 'block');
    $('.current').children('.pause').css('display', 'none');
}

var repeat = function () {
    if ($('.repeat').hasClass('active')) {
        isRepeat = false;
        $('.repeat').removeClass('active');
    } else {
        $('.repeat').addClass('active');
        isRepeat = true;
    }
}
var random = function () {
    if ($('.random').hasClass('active')) {
        isRandom = false;
        $('.random').removeClass('active');
    } else {
        $('.random').addClass('active');
        isRandom = true;
    }
}
var el = document.getElementsByClassName('vol')[0];
el.onwheel = volChange;
$('.vol').hover(function () {
        $('body').css("overflow", "hidden");
        $('.vol').css("overflow", "auto");
    },
    function () {
        $('body').css("overflow", "auto");
});
function volChange (event) {
    var currentWidth = ( 100 * parseFloat($('.percent').css('width')) / parseFloat($('.percent').parent().css('width')) );
    if (audioObj !== '') {
        if (event.deltaY > 0 && audioObj.volume < 1) {
            volume = volume + 0.02;
            audioObj.volume = audioObj.volume + 0.02;
            $('.percent').css('width', currentWidth+2+'%');
        } else {
            volume = volume - 0.02;
            audioObj.volume = audioObj.volume - 0.02;
            $('.percent').css('width', currentWidth-2+'%');
        }
    }
}
function randomInteger(min, max) {
  return Math.floor(Math.random() * max + 1) + min;
}
$('.current').children('.actions').children('.play').click(function () {
    if (audioObj == '') {
        $("div[data-id='1']").children('.actions').children('.play').trigger('click');
    } else {
        $("div[data-id="+currentId+"]").children('.actions').children('.play').trigger('click');
    }
});
$('.current').children('.actions').children('.pause').click(function () {
    $("div[data-id="+currentId+"]").children('.actions').children('.pause').trigger('click');
});
$('body').dbKeypress(37, function () {
    if (audioObj !== '') {
        var previousSong = currentId - 1;
        if (previousSong >= 1) {
            $("div[data-id="+previousSong+"]").children('.actions').children('.play').trigger('click');
        }
    }
});
$('body').dbKeypress(39, function () {
    if (audioObj !== '') {
        var nextSong = Number(currentId) + 1;
        if (nextSong <= $('.song-item').length) {
            $("div[data-id="+nextSong+"]").children('.actions').children('.play').trigger('click');
        }
    }
});
$('body').keyup(38, function (e) {
    if (audioObj !== '' && volume < 1) {
        e.preventDefault();
        volume = volume + 0.02;
        audioObj.volume = audioObj.volume + 0.02;
    }
});
$('body').keyup(40, function (e) {
    if (audioObj !== '' && volume > 0) {
        e.preventDefault();
        volume = volume - 0.02;
        audioObj.volume = audioObj.volume - 0.02;
    }
});
