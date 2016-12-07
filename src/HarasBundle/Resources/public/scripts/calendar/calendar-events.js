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
// *                    mFull Calendar
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
            defaultDate: '2016-09-12',
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectHelper: true,
            select: function(start, end) {
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
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                /*{
                    title: 'All Day Event',
                    start: '2016-09-01'
                },
                {
                    title: 'Long Event',
                    start: '2016-09-07',
                    end: '2016-09-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-09-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-09-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2016-09-11',
                    end: '2016-09-13'
                },
                {
                    title: 'Meeting',
                    start: '2016-09-12T10:30:00',
                    end: '2016-09-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2016-09-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2016-09-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2016-09-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2016-09-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2016-09-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2016-09-28'
                }*/
            ]
        });

    });
}

