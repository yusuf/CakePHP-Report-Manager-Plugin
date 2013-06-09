$(document).ready(function(){

           var settings = {
               rowCssPrefix: 'row-',
               colCssPrefix: 'col-',
               seatWidth: 35,
               seatHeight: 40,
               seatCss: 'seat',
               selectedSeatCss: 'selectedSeat',
               selectingSeatCss: 'selectingSeat'
           };

        $(function(){
            var $s = $('.slideshow').slides(),
                api = $s.eq(0).data('slides');
            $('select[name=transition]').on('change', function()
            {
              api.redraw( this.value );
            });
          });

        $('.slide').click(function(e){
          $('.carousel > li').removeClass('schedule-selected');
          var event = $(this).attr('data-event');
          e.stopPropagation();
          $(this).addClass('schedule-selected');
          var seats = $.ajax({
              url: 'http://localhost/olympus/seats/show_seats/'+event,
              type: "GET",
              dataType: "json"
            });

          var c1 = [],c2 = [], seatNo, className;

          seats.done(function(hall) {
              var reservedSeat = hall.booked_seats;
              $.each(hall.seats,function(index,side){

                if(index=='c1'){
                  $.each(side,function(i,seat){
                    seatNo = seat.Seat.id;
                    if((seat.Seatprice).length === 0){
                      sPrice = seat.Seat.price;
                    } else {
                      sPrice = seat.Seatprice;
                    }
                        className = settings.seatCss + ' ' + settings.rowCssPrefix + seat.Seat.row_no.toString() + ' ' + settings.colCssPrefix + seat.Seat.col_no.toString();
                        if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                            className += ' ' + settings.selectedSeatCss;
                        }

                    c1.push('<li class="' + className + '"' +
                                  'style="top:' + ((seat.Seat.row_no-1) * settings.seatHeight).toString() + 'px;left:' + ((seat.Seat.col_no-1) * settings.seatWidth).toString() + 'px">' +
                                  '<a data-price="' + sPrice + '" title="' + seat.Seat.row_name + seat.Seat.col_no + '">' + seat.Seat.row_name + seat.Seat.col_no + '</a>' +
                                  '</li>');
                  });
                }else{
                  $.each(side,function(i,seat){
                    seatNo = seat.Seat.id;
                    if((seat.Seatprice).length === 0){
                      sPrice = seat.Seat.price;
                    } else {
                      sPrice = seat.Seatprice;
                    }
                    className = settings.seatCss + ' ' + settings.rowCssPrefix + seat.Seat.row_no.toString() + ' ' + settings.colCssPrefix + seat.Seat.col_no.toString();
                      if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                          className += ' ' + settings.selectedSeatCss;
                      }

                    c2.push('<li class="' + className + '"' +
                                  'style="top:' + ((seat.Seat.row_no-1) * settings.seatHeight).toString() + 'px;left:' + ((seat.Seat.col_no-12) * settings.seatWidth).toString() + 'px">' +
                                  '<a data-price="' + sPrice + '" title="' + seat.Seat.row_name + seat.Seat.col_no + '">' + seat.Seat.row_name + seat.Seat.col_no + '</a>' +
                                  '</li>');
                  });
                }
              });

              $('#c1-place').html(c1.join(''));
              $('#c2-place').html(c2.join(''));
          });
        });

        $('.' + settings.seatCss).live('click',function () {
            if ($(this).hasClass(settings.selectedSeatCss)){
              alert('This seat is already reserved');
            }else{
              $(this).toggleClass(settings.selectingSeatCss);
            }
          });

        $('#btnSRTicket').click(function(event){
          event.preventDefault();
          var clect = [];
          var seats = {};
          var eventId = '';
          $.each($(".selectingSeat a"),function(index, value){
            seats.seat = ($(value).attr('title'));
            seats.price = ($(value).attr('data-price'));
            clect.push(JSON.stringify(seats));
          });
          // console.log((clect));

          eventId = $('.schedule-selected').attr('data-event');

          if(clect.length === 0 || eventId === ''){
            alert("Please select show date and seats");
          } else {

            var url = docRoot + "reservations/add/";
            var seat_form = $(
              '<form action="' + url + '" method = "POST">' +
              '<input type="hidden" name="eventschedule_id" value="' + escape(eventId) + '" />' +
              '<input type="hidden" name="seat_id[]" value="' + escape(clect) + '" />' +
              '<input type="hidden" name="sR" value="0" />' +
              '</form>'
              );
            $('body').append(seat_form);
            $(seat_form).submit();
          }

          
        });

        // });

          // $('#btnShow').click(function () {
          //     var str = [];
          //     $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.'+ settings.selectingSeatCss + ' a'), function (index, value) {
          //         str.push($(this).attr('title'));
          //     });
          //     alert(str.join(','));
          // });

          // $('#btnShowNew').click(function () {
          //     var str = [], item;
          //     $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
          //         item = $(this).attr('title');
          //         str.push(item);
          //     });
          //     alert(str.join(','));
          // });

});