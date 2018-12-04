<<<<<<< HEAD
var get_gssdata = (callback) => {
    $.getJSON(
      "https://spreadsheets.google.com/feeds/cells/1P6LvzwwUZwcxbn2hwphc9pQI0EqEhEub_2JzDo-6rLg/od6/public/values?alt=json",
      function(d) {
        var arr = [];

        //配列多次元化
        for (var i = 0; i < d.feed.entry.length; i++) {
          arr[d.feed.entry[i].gs$cell.col - 1] = [];
        }

        //データ取得
        for (var i = 0; i < d.feed.entry.length; i++) {
          var dd = d.feed.entry[i];
          arr[dd.gs$cell.col - 1][dd.gs$cell.row - 1] = dd.gs$cell.$t;
        }

        callback(arr);
      }
    );
=======
var get_gssdata = (callback) => {
    $.getJSON(
      "https://spreadsheets.google.com/feeds/cells/1P6LvzwwUZwcxbn2hwphc9pQI0EqEhEub_2JzDo-6rLg/od6/public/values?alt=json",
      function(d) {
        var arr = [];

        //配列多次元化
        for (var i = 0; i < d.feed.entry.length; i++) {
          arr[d.feed.entry[i].gs$cell.col - 1] = [];
        }

        //データ取得
        for (var i = 0; i < d.feed.entry.length; i++) {
          var dd = d.feed.entry[i];
          arr[dd.gs$cell.col - 1][dd.gs$cell.row - 1] = dd.gs$cell.$t;
        }

        callback(arr);
      }
    );
>>>>>>> 863fa6848187631d70e9adb5b3a5c233f31bf8eb
  };