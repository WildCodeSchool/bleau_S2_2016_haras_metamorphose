/**
 * Created by juliengrima on 06/12/2016.
 */

// ********************************************************************
// *                       Appel Fonction
// ********************************************************************
jQuery(document).ready(function($) {

    console.log('MA FONCTION CALENDAR-EVENT EST OK !!');
    console.log('jQuery de main.js a démarré le test est bon');
    console.log(role);
    // FULL CALENDAR
    calendar();

});

// ********************************************************************
// *                        Full Calendar
// ********************************************************************

function calendar() {
    console.log('MON CALENDAR');
    $(document).ready(function() {

        var current_date_time = new Date();
        var role = "ROLE_ADMIN";

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            lang: 'fr',
            navLinks: true, // Peut cliquer sur jour/semaine pour avoir une vue
            selectable: true, // Permet de cliquer sur la case pour envoyer au new
            selectHelper: true,

            /* GENERATION D'UN POP UP JS  */
            /*select: function(start, end) {
                var title = prompt('Event Title:');
                var eventData;
                if (title) {
                    eventData = {
                        title: title,
                        start: start,
                        end: end
                    };
                    $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                }
                $('#calendar').fullCalendar('unselect');
            },*/
            editable: true,
            eventLimit: true, // allow "more" link when too many events

            events: Routing.generate('agenda'),

            dayClick: function(date) {
                console.log(role);
                /* VERIFICATION QUE LA DATE SOIT PAS INFERIRIEUR  A LA SELECTION ET LA DEFINITION DES ROLES */
                if (date._d >= current_date_time && role == 'ROLE_ADMIN'){
                    window.location = Routing.generate('agenda') + date.format() + '/new';
                }
            }/*,*/

            /*eventRender: function(event, element, calEvent) {
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

            }
*/
        });

    });
}

