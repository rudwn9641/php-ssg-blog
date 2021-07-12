function Fullpage__init() {
  var myFullpage = new fullpage('#fullpage', {
    onLeave: function(origin, destination, direction){
      const no = destination.index + 1;
      
      $('.fly > span:first-child').text('0' + no);
    },
  });
}

Fullpage__init();