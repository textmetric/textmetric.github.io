$("#successmessage1").hide();
$("#submitbutton1").click(function(){
	$.ajax({
		type: 'POST',
	    url: 'https://mandrillapp.com/api/1.0/messages/send.json',
	    data: {
			'key': '9SI6bIaAdIpKFJY7qpknnQ',
	        'message': {
				'from_email': $("#email-field1").val(),
	            'to': [
			    {
					'email': 'felipe.ramirez@orand.cl',
	                'type': 'to'
	            }
				],
			    'autotext': 'true',
	            'subject': 'TextMetric Contact',
	            'html': $("#message-field1").val()
			}
		}
		}).done(function(response) {
			console.log(response); // if you're into that sorta thing
			$("#email-field1").hide();
	        $("#message-field1").hide();
	        $("#submitbutton1").hide();
            $("#successmessage1").show();
		});
	});
	
$("#successmessage2").hide();
$("#submitbutton2").click(function(){
	$.ajax({
		type: 'POST',
	    url: 'https://mandrillapp.com/api/1.0/messages/send.json',
	    data: {
			'key': '9SI6bIaAdIpKFJY7qpknnQ',
	        'message': {
				'from_email': $("#email-field2").val(),
	            'to': [
			    {
					'email': 'felipe.ramirez@orand.cl',
	                'type': 'to'
	            }
				],
			    'autotext': 'true',
	            'subject': 'TextMetric Contact',
	            'html': $("#message-field2").val()
			}
		}
		}).done(function(response) {
			console.log(response); // if you're into that sorta thing
			$("#email-field2").hide();
	        $("#message-field2").hide();
	        $("#submitbutton2").hide();
            $("#successmessage2").show();
		});
	});