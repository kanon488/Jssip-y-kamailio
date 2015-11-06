




var extension;

$(document).ready(function()
{
$("#llamar").click(function(){
		extension = $("#extension").val();
		



var configuration =
{
	'ws_servers': 'ws://148.226.55.24:8080',
  'uri': 'sip:eduardo@148.226.55.24',
  'password': '1234'

};

var ua = new JsSIP.UA(configuration);
ua.start();
//make an audio/video call
var session = null;

//HTML5 <video> elements in which local and remote video will be shown
var selfView = document.getElementById('my-video');
var remoteView = document.getElementById('peer-video');

//Register callbacks to desired call events
var eventHandlers = {
  'progress': function(e){
    console.log('llamada en progreso');
  },
  'failed': function(e){
    console.log('llamada fallo por la causa: '+ e.data.cause);
  },
  'ended': function(e){
    console.log('llamada terminada con  cause: '+ e.data.cause);
  },
  'confirmed': function(e){
    var local_stream = session.connection.getLocalStreams()[0];

    console.log('llamada  confirmada');

    // Attach local stream to selfView
    selfView = JsSIP.rtcninja.attachMediaStream(selfView, local_stream);
  },
  'addstream': function(e){
    var stream = e.stream;

    console.log('remote stream added');

    // Attach remote stream to remoteView
    remoteView = JsSIP.rtcninja.attachMediaStream(remoteView, stream);
  }
};



var options = {
  'eventHandlers': eventHandlers,
  'mediaConstraints': {'audio': true, 'video': false}
};

session =  ua.call('sip:'+extension+'@148.226.55.24',options);		
				
	
$("#colgar").click(function(){
  ua.stop();
});
  			
	});


});

