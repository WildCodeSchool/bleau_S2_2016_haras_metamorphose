/**
 * Created by juliengrima on 06/12/2016.
 */

// ********************************************************************
// *                       Appel Fonction
// ********************************************************************
jQuery(document).ready(function($) {

    console.log('MA FONCTION CALENDAR-EVENT EST OK !!');
    console.log('jQuery de main.js a démarré le test est bon');

    // FULL CALENDAR
    calendar();

});

// ********************************************************************
// *                        Full Calendar
// ********************************************************************

function calendar() {
    console.log('MON CALENDAR');
    $(document).ready(function() {

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            lang: 'fr',
            navLinks: true, // Peut cliquer sur jour/semaine pour avoir une vue
            selectable: true,
            selectHelper: true,
            select: function(start, end) {
                var title = prompt('Event Title:');
                var eventData;
                if (title) {
                    eventData = {
                        title: title,
                        content: contents,
                        start: start,
                        end: end
                    };
                    $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                }
                $('#calendar').fullCalendar('unselect');
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events

            events: [

                        // your event source
                        {
                            id:'1',
                            start: '2016-12-07',
                            end: '2016-12-08',
                            title: 'HELLO',
                            color: 'yellow',    // an option!
                            textColor: 'black'  // an option!
                        }

                        // any other sources...

                    ]


                    /*Routing.generate('events'),

                    dayClick: function(date) {
                        console.log(roles);
                        if (date._d >= current_date_time && roles != null){
                            window.location = Routing.generate('events') + date.format() + '/new';
                        }
                    },

                    eventRender: function(event, element, calEvent) {
                        var editEvent = Routing.generate('events') + event.id + '/edit';
                        element.each(function() {
                            element.append(
                                '</br>' +
                                '<strong>' +
                                event.titre +
                                '</strong>'
                            );
                        })
                    },
                    eventClick:  function(calEvent){
                        var day = moment(calEvent.start._d).format("dddd Do MMMM YYYY");
                        var ponctuation = ' de ';
                        var startTime = moment(calEvent.start._i).format('HH:mm à ');
                        var endTime = moment(calEvent.end._i).format("HH:mm");
                        var Time = 'Le ' + day + ponctuation + startTime + endTime;
                        var editEvent = Routing.generate('events') + calEvent.id + '/edit';
                        var deleteEvent = Routing.generate('events') + calEvent.id + '/delete';

                        $('#modalTime').html(Time);
                        $('#modalTitle').html( calEvent.titre );
                        console.log(calEvent);
                        if (calEvent.images.url != null){
                            $('#imgevent').html( '<img src="' + asset + calEvent.images.webPath + '" alt="' + calEvent.images.alt +'"/>' );
                        }
                        $('#fullCalModal').modal();

                        $('#delete_event').show();
                        $('#delete_event').attr('href', deleteEvent);
                        $('#edit_event').show();
                        $('#edit_event').attr('href', editEvent);

                    }*/

        });

    });
}

