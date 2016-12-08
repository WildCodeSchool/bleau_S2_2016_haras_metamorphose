/**
 * Created by juliengrima on 06/12/2016.
 */

// ********************************************************************
// *                       Appel Fonction
// ********************************************************************
jQuery(document).ready(function($) {

    console.log('CALENDAR-EVENTS.JS a démarré : ligne 10');
    console.log(role);
    // FULL CALENDAR
    calendar();

});

// ********************************************************************
// *                        Full Calendar
// ********************************************************************

function calendar() {
    console.log('CALENDAR-EVENTS - FONCTION CALENDAR a démarré : ligne 22');
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

    /* ---------------------------- GENERATION D'UN POP UP JS ---------------------------- */
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
    /* ----------------------------------------------------------------------------------- */

            firstDay: 1, // jour ou l'agenda commentce 1 = lundi, 2 = mardi , etc...
            weekNumbers: true, // affichage du numéro de la semaine en cour
            businessHours: { // heure de travail
                start: '09:00',
                end: '23:00',
                dow: [1, 2, 3, 4, 5]
            },
            handleWindowResize: true, // redimenssionne auto du calendrier en fonction de la width du navigateur
            weekends: true, // affichage des weekends
            slotLabelFormat: 'HH:mm', // format de l'heure sur les slots
            timeFormat: 'HH:mm',
            minTime: "08:00:00", // heure de début du calendar
            slotEventOverlap: false, // Les évènements ne se chevauchent pas

            editable: true,
            eventLimit: true, // allow "more" link when too many events

            events: Routing.generate('agenda_index'),

            dayClick: function(date) {

                console.log(role);
                console.log('CALENDAR-EVENTS.JS - FONCTION DAYCLICK a démarré : ligne 76');

                /* VERIFICATION QUE LA DATE SOIT PAS INFERIRIEUR  A LA SELECTION ET LA DEFINITION DES ROLES */
                if (date._d >= current_date_time && role == 'ROLE_ADMIN'){
                    // lors du click sur la case il renvoie la date vers la page new
                    window.location = Routing.generate('agenda') + date.format() + '/new';
                }
            },

            eventRender: function(event, element, calEvent) {
                var editEvent = Routing.generate('agenda') + event.id + '/edit';

                console.log('CALENDAR-EVENTS.JS - FONCTION EVENTRENDER a démarré : ligne 89');

                element.each(function() {
                    element.append(
                        '<h6>' +
                        event.titre +
                        '</h6>'
                    );
                })
            },
            eventClick:  function(calEvent){
                var day = moment(calEvent.start._d).format("dddd Do MMMM YYYY");
                var ponctuation = ' de ';
                var startTime = moment(calEvent.start._i).format('HH:mm à ');
                var endTime = moment(calEvent.end._i).format("HH:mm");
                var Time = 'Le ' + day + ponctuation + startTime + endTime;
                var editEvent = Routing.generate('agenda') + calEvent.id + '/edit';
                var deleteEvent = Routing.generate('agenda') + calEvent.id + '/delete';

                console.log('CALENDAR-EVENTS.JS - FONCTION EVENTCLICK a démarré : ligne 110');
                console.log(calEvent);
                console.log(day);
                console.log(ponctuation);
                console.log(startTime);
                console.log(endTime);

                // $('#modalTime').html(Time);
                // $('#modalTitle').html( calEvent.titre );
                // console.log(calEvent);
                // if (calEvent.images.url != null){
                //     $('#imgevent').html( '<img src="' + asset + calEvent.images.webPath + '" alt="' + calEvent.images.alt +'"/>' );
                // }
                // $('#fullCalModal').modal();
                //
                // $('#delete_event').show();
                // $('#delete_event').attr('href', deleteEvent);
                // $('#edit_event').show();
                // $('#edit_event').attr('href', editEvent);

            }

        });

    });
}

