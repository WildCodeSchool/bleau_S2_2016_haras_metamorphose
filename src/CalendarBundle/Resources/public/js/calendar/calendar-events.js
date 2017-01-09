/**
 * Created by juliengrima on 06/12/2016.
 */

// ********************************************************************
// *                       Appel Fonction
// ********************************************************************
jQuery(document).ready(function($) {

    console.log('CALENDAR-EVENTS.JS a démarré : ligne 10');

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
        var role = "";
        console.log(role);

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

            /* ------------------------ FONCTION DU RENDU DE L'EVENEMENT ------------------------------*/
            eventRender: function(event, element) {

                console.log('CALENDAR-EVENTS.JS - FONCTION EVENTRENDER a démarré : ligne 93');

                var editEvent = Routing.generate('agenda') + event.id + '/edit';

                element.each(function() {
                    element.append(
                        '<h6>' +
                        event.titre +
                        '</h6>'
                    );
                })
            },

            /* ------------------------- FONCTION DU CLICK SUR EVENT ------------------------------*/
            eventClick: function(calEvent){

                    console.log('CALENDAR-EVENT.JS - FONCTION EVENTCLICK a démarré :ligne 108');

                    var day = moment(calEvent.start._d).format("dddd Do MMMM YYYY");
                    // .format();
                    // dddd = jour en character
                    // Do = date du jour en chiffre (fontionne uniquement apres dddd)
                    // MMMMM = mois en character
                    // YYYY = année en chiffre

                    var ponctuation1 = "de";
                    var ponctuation2 = "à";
                    var startTime = moment(calEvent.start._i).format('HH:mm à ');
                    var endTime = moment(calEvent.end._i).format("HH:mm");
                    var Time = 'Le ' + day + ponctuation1 + startTime + ponctuation2 + endTime;
                    var editEvent = Routing.generate('agenda') + calEvent.id + '/edit';
                    var deleteEvent = Routing.generate('agenda') + calEvent.id + '/delete';

                    $('#modalTime').html(Time);
                    $('#modalTitle').html(calEvent.titre);
                    $('#modalTexte').html(calEvent.texte);

                    // $('#fullCalModal').modal();
                    $('#fullCalModal').modal('open');

                    $('#edit_event').show();
                    $('#edit_event').attr('href', editEvent);

                    $('#delete_event').show();
                    $('#delete_event').attr('href', deleteEvent);
            }

        });

    });
}

