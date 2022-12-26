var clicked;
var origtitle;
var newtitle;
var track;
var tracklist;

function initPage(tracklistIn) {
  tracklist = tracklistIn;
  origtitle = document.title;

  $(".playmusic").click(function () {
    if ($(this).parent().parent().siblings("td").hasClass("stop")) {
      $(this).parent().parent().siblings("td").removeClass("stop");
      $(this).parent().parent().siblings("td").addClass("play");
      $("#player").jPlayer("pause");
      document.title = "■ " + newtitle + " - " + origtitle;
    } else if (
      $("#player").data().jPlayer.status.paused &&
      track == $(this).attr("id")
    ) {
      $(this).parent().parent().siblings("td").addClass("stop");
      $("td").removeClass("play");
      $("#player").jPlayer("play");
      document.title = "▶ " + newtitle + " - " + origtitle;
    } else if (track != $(this).attr("id")) {
      newtitle = $(this).attr("title");
      async($(this).attr("id"));
      $("td").removeClass("stop").removeClass("play");
      $(this).parent().parent().siblings("td").addClass("stop");
    }
  });

  $("#player").jPlayer({
    swfPath: "./lib/js/player/",
    solution: "html",
    supplied: "mp3",
    wmode: "window",
    cssSelectorAncestor: "",
    cssSelector: {
      play: ".play",
      pause: ".pause",
      seekBar: ".seek-bar",
      playBar: ".play-bar",
      currentTime: ".time",
    },
    ended: function () {
      clicked = 0;
      async(track + 1);
    },
  });
}

function async(id) {
  if (clicked == id) {
    $("#player").jPlayer("stop");
    clicked = null;
    track = null;
    $("#fixed-np").html(null);
    document.title = origtitle;
  } else if (clicked == 0) {
    clicked = parseInt(id);
    track = parseInt(id);
    file = "/lib/music/";
    n = id.toString();
    file = file + tracklist[id].file;
    $("#player")
      .jPlayer("stop")
      .jPlayer("setMedia", { mp3: file })
      .jPlayer("play");
    newtitle = $("#track-" + id).attr("title");

    $("#track-" + (id - 1))
      .parent()
      .parent()
      .siblings("td")
      .removeClass("stop")
      .removeClass("play");
    $("#track-" + id)
      .parent()
      .parent()
      .siblings("td")
      .addClass("stop");

    document.title = "▶ " + newtitle + " - " + origtitle;
  } else {
    id = id.replace("track-", "");
    clicked = parseInt(id);
    track = parseInt(id);
    var file = "/lib/music/";
    var n = id.toString();
    file = file + tracklist[id].file;
    $("#player")
      .jPlayer("stop")
      .jPlayer("setMedia", { mp3: file })
      .jPlayer("play");

    document.title = "▶ " + newtitle + " - " + origtitle;
  }
}
