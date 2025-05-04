<?php
function displayCards() {
    $cards = [
        [
            "img" => "assets/img//lecture-series.jpg",
            "title" => "Lectures, debates and discussions",
            "description" => "Enjoy talks and debates that shine new light on the Museum's collection."
        ],
        [
            "img" => "assets/img//Performance Laboratory26x4.jpg",
            "title" => "Performances",
            "description" => "Immerse yourself in the rich cultures of the world with a range of shows."
        ],
        [
            "img" => "assets/img//What-are-online-virtual-events-2.jpg",
            "title" => "Online events",
            "description" => "Enjoy events at home or on the go with our programme of events streamed online."
        ],
        [
            "img" => "assets/img//601039l5.jpg",
            "title" => "Festivals and special events",
            "description" => "Make connections at a special event or cultural festival."
        ],
        [
            "img" => "assets/img//open-day-autumn-banner-2023.jpg",
            "title" => "Short courses and study days",
            "description" => "Our courses will help you learn a new skill or expand your knowledge."
        ],
        [
            "img" => "assets/img//62ea33c5c69f445885ff9e68_what-is-a-workshop.jpg",
            "title" => "Workshops",
            "description" => "Deepen your understanding of a cultural tradition at a hands-on practical workshop."
        ],
        [
            "img" => "assets/img//katherine-liontas-warren-opening-2348.jpg",
            "title" => "Gallery talks",
            "description" => "Explore the Museum galleries with our free lunchtime talks."
        ],
        [
            "img" => "assets/img//images.jpg",
            "title" => "Film screenings",
            "description" => "Our film screenings offer a fresh look at the exhibitions."
        ],
        [
            "img" => "assets/img//imagess.jpg",
            "title" => "Accessible events",
            "description" => "Choose from Deaf-led tours, object-handling sessions and more."
        ],
        [
            "img" => "assets/img//Symposiaandspecialistlectures.jpg",
            "title" => "Symposia and specialist lectures",
            "description" => "Encounter cutting edge research from around the world through specialist conferences, symposia and lectures."
        ],
        [
            "img" => "assets/img//esol-image.jpg",
            "title" => "ESOL",
            "description" => "Book a session with an experienced ESOL teacher which uses a unique object-based approach to learning English."
        ],
        [
            "img" => "assets/img//1111.jpg",
            "title" => "Demonstrations",
            "description" => "Encounter cultural traditions from around the world at a demonstration."
        ]
    ];

    foreach ($cards as $index => $card) {
        if ($index % 4 === 0) {
            echo "<div class='container-carry-cards-of-Exhibitions'>";
        }

        echo "
        <div class='first-Card'>
            <img src='{$card['img']}' style='height:300px; width:300px;' alt=''>
            <div class='first-card-info'>
                <h3>{$card['title']}</h3>
                <p>{$card['description']}</p>
            </div>
        </div>";

        if (($index + 1) % 4 === 0) {
            echo "</div>
                <div class='split-line'>
                    <span class='line'></span>
                    <span class='right-text'>Exhibitions and events ➤</span>
                </div>";
        }
    }

    if (count($cards) % 4 !== 0) {
        echo "</div>";
    }
}
?>
