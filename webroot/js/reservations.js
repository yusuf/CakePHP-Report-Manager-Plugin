$(document).ready(function(){

	$('#payment').change(function(){
		total_ticket_price = $('#total_ticket_price').val();
		payment = $('#payment').val();
		balance = payment - total_ticket_price;
		$('#balance').text(balance);
	});
	$('#ticket_sell').click(function(event){
		event.preventDefault();
		// error checking for amount
		amount = 1*$('#total_ticket_price').val();
		payment = 1*$('#payment').val();
		balance = payment-amount;
		if (payment < amount) {
			alert("Payment Less than Total Ticket Amount: "+balance);
		} else {
			customer_name = $('#customer_name').val();
			customer_no = $('#customer_no').val();
			customer_email = $('#customer_email').val();
			eventschedule = $('#eventschedule').val();
			seatsprice = $('#ticket_seats').text().trim();
			console.log(seatsprice);
			var url = docRoot + "reservations/add/";
			var sales_form = $(
				'<form action="' + url + '" method = "POST">' +
				'<input type="hidden" name="data[Customer][name]" value="' + escape(customer_name) + '" />' +
				'<input type="hidden" name="data[Customer][contact_no]" value="' + escape(customer_no) + '" />' +
				'<input type="hidden" name="data[Customer][email]" value="' + escape(customer_email) + '" />' +
				'<input type="hidden" name="data[seatsprice]" value="' + escape(seatsprice) + '" />' +
				'<input type="hidden" name="data[eventschedule_id]" value="' + escape(eventschedule) + '" />' +
				'<input type="hidden" name="amount" value="' + escape(amount) + '" />' +
				'<input type="hidden" name="sR" value="1" />' +
				'</form>'
			);
			$('body').append(sales_form);
			$(sales_form).submit();
		}
	});

	$('#ticket_reserve').click(function(event){
		event.preventDefault();
		// simple error checking for empty values

		customer_name = $("#customer_name").val();
		customer_no = $("#customer_no").val();
		customer_email = $("#customer_email").val();
		eventschedule = $("#eventschedule").val();
		seats = $("#ticket_seats").text().trim();

		if(customer_name === "" || customer_no === ""){
			alert("Please fill customer name and number");
		} else {
			var url = docRoot + "reservations/add/";
			var reservation_form = $(
				'<form action="' + url + '" method = "POST">' +
				'<input type="hidden" name="data[Customer][name]" value="' + escape(customer_name) + '" />' +
				'<input type="hidden" name="data[Customer][contact_no]" value="' + escape(customer_no) + '" />' +
				'<input type="hidden" name="data[Customer][email]" value="' + escape(customer_email) + '" />' +
				'<input type="hidden" name="data[seats]" value="' + escape(seats) + '" />' +
				'<input type="hidden" name="data[eventschedule_id]" value="' + escape(eventschedule) + '" />' +
				'<input type="hidden" name="sR" value="2" />' +
				'</form>'
			);
			$('body').append(reservation_form);
			$(reservation_form).submit();
	    }
	});
});