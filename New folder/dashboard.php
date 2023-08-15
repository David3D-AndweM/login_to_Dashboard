<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/dashboard.js"></script>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h2>Newsletters</h2>
            <div class="newsletters">
                <!-- JavaScript will populate this section -->
            </div>
        </div>
        <div class="col-md-4">
            <h2>Events</h2>
            <div class="events">
                <!-- JavaScript will populate this section -->
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var newslettersData = [
        { title: "Welcome to Our Platform!", content: "Thank you for joining us. We're excited to have you on board." },
        { title: "Orientation Event", content: "Learn about the features and benefits of our platform. Date: July 15th, 2023." }
        // Add more newsletters as needed
    ];

    var eventsData = [
        { title: "Welcome Event", description: "Join us for a fun-filled welcome event. Date: August 1st, 2023.", meetingLink: "https://example.com/meeting1" },
        { title: "Orientation Event", description: "Learn about the platform in our orientation event. Date: August 5th, 2023.", meetingLink: "https://example.com/meeting2" }
        // Add more events as needed
    ];

    $(document).ready(function() {
        var newslettersSection = $(".newsletters");
        newslettersData.forEach(function(newsletter) {
            var newsletterDiv = $("<div class='card mb-3'></div>");
            var cardBody = $("<div class='card-body'></div>");
            cardBody.append("<h3 class='card-title'>" + newsletter.title + "</h3>");
            cardBody.append("<p class='card-text'>" + newsletter.content + "</p>");
            newsletterDiv.append(cardBody);
            newslettersSection.append(newsletterDiv);
        });

        var eventsSection = $(".events");
        eventsData.forEach(function(event) {
            var eventDiv = $("<div class='card mb-3'></div>");
            var cardBody = $("<div class='card-body'></div>");
            cardBody.append("<h3 class='card-title'>" + event.title + "</h3>");
            cardBody.append("<p class='card-text'>" + event.description + "</p>");
            cardBody.append("<button class='btn btn-primary attend-button' data-meeting-link='" + event.meetingLink + "'>Attend</button>");
            eventDiv.append(cardBody);
            eventsSection.append(eventDiv);
        });

        $(".attend-button").click(function() {
            var meetingLink = $(this).data("meeting-link");
            alert("You have marked your attendance. Meeting link: " + meetingLink);
        });
    });
</script>
</body>
</html>
