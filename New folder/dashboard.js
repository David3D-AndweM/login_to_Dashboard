// Sample data for newsletters and events
var newslettersData = [
    { title: "Welcome to Our Platform!", content: "Thank you for joining us. We're excited to have you on board." },
    { title: "Newsletter 2", content: "This is the content of Newsletter 2." }
];

var eventsData = [
    { title: "Orientation Event", description: "Join us for an orientation event to get started!", meetingLink: "https://example.com/orientation" },
    { title: "Welcome Webinar", description: "Learn more about our platform in this welcome webinar.", meetingLink: "https://example.com/welcome-webinar" }
];

$(document).ready(function() {
    // Populate newsletters section
    var newslettersSection = $(".newsletters");
    newslettersData.forEach(function(newsletter) {
        var newsletterDiv = $("<div class='newsletter'></div>");
        newsletterDiv.append("<h3>" + newsletter.title + "</h3>");
        newsletterDiv.append("<p>" + newsletter.content + "</p>");
        newslettersSection.append(newsletterDiv);
    });

    // Populate events section
    var eventsSection = $(".events");
    eventsData.forEach(function(event) {
        var eventDiv = $("<div class='event'></div>");
        eventDiv.append("<h3>" + event.title + "</h3>");
        eventDiv.append("<p>" + event.description + "</p>");
        eventDiv.append("<button class='attend-button' data-meeting-link='" + event.meetingLink + "'>Attend</button>");
        eventsSection.append(eventDiv);
    });

    // Add event listener to attend buttons
    $(".attend-button").click(function() {
        var meetingLink = $(this).data("meeting-link");
        alert("You have marked your attendance. Meeting link: " + meetingLink);
    });
});

