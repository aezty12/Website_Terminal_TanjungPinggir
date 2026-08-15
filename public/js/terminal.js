/* =========================================
   TERMINAL TANJUNG PINGGIR
   JAVASCRIPT
========================================= */


/* =========================================
   MOBILE MENU
========================================= */

const menuToggle =
    document.getElementById("menuToggle");

const navMenu =
    document.querySelector(".nav-menu");


if (menuToggle) {

    menuToggle.addEventListener(
        "click",
        function () {

            navMenu.classList.toggle(
                "mobile-open"
            );

        }
    );

}


/* =========================================
   CLOSE MOBILE MENU
========================================= */

document
    .querySelectorAll(".nav-menu a")
    .forEach(function (link) {

        link.addEventListener(
            "click",
            function () {

                navMenu.classList.remove(
                    "mobile-open"
                );

            }
        );

    });


/* =========================================
   DEFAULT DATE
========================================= */

const travelDate =
    document.getElementById("travelDate");


if (travelDate) {

    const today =
        new Date().toISOString().split("T")[0];

    travelDate.value = today;

}


/* =========================================
   SEARCH SCHEDULE
========================================= */

const searchButton =
    document.getElementById("searchButton");

const destination =
    document.getElementById("destination");

const searchResult =
    document.getElementById("searchResult");


if (searchButton) {

    searchButton.addEventListener(
        "click",
        function () {

            const selectedDestination =
                destination.value;


            if (!selectedDestination) {

                searchResult.style.display =
                    "block";

                searchResult.style.background =
                    "#fff4e5";

                searchResult.style.color =
                    "#a35c00";

                searchResult.innerHTML =
                    "⚠️ Silakan pilih tujuan perjalanan terlebih dahulu.";

                return;

            }


            searchResult.style.display =
                "block";

            searchResult.style.background =
                "#eaf7ef";

            searchResult.style.color =
                "#13733d";


            searchResult.innerHTML =
                `
                ✓ Jadwal ditemukan untuk tujuan
                <strong>${selectedDestination}</strong>.
                Silakan lihat jadwal keberangkatan
                di bawah.
                `;


            document
                .getElementById("jadwal")
                .scrollIntoView({
                    behavior: "smooth"
                });


            filterSchedule(
                selectedDestination
            );

        }
    );

}


/* =========================================
   SCHEDULE FILTER
========================================= */

const filters =
    document.querySelectorAll(".filter");


filters.forEach(function (button) {

    button.addEventListener(
        "click",
        function () {

            filters.forEach(function (item) {

                item.classList.remove(
                    "active"
                );

            });


            button.classList.add("active");


            const filter =
                button.dataset.filter;


            filterSchedule(filter);

        }
    );

});


function filterSchedule(filter) {

    const rows =
        document.querySelectorAll(
            "#scheduleBody tr"
        );


    rows.forEach(function (row) {

        const destination =
            row.dataset.destination;


        if (
            filter === "all" ||
            destination === filter
        ) {

            row.style.display = "";

        } else {

            row.style.display = "none";

        }

    });

}


/* =========================================
   SWAP BUTTON
========================================= */

const swapButton =
    document.getElementById("swapButton");


if (swapButton) {

    swapButton.addEventListener(
        "click",
        function () {

            const from =
                document.getElementById(
                    "fromCity"
                );

            const to =
                document.getElementById(
                    "destination"
                );


            const oldValue =
                from.value;


            if (to.value) {

                from.value =
                    to.value;

            }


            if (oldValue) {

                const option =
                    [...to.options]
                    .find(
                        option =>
                            option.value === oldValue
                    );


                if (option) {

                    to.value =
                        oldValue;

                }

            }

        }
    );

}


/* =========================================
   SHOW ALL SCHEDULE
========================================= */

const showAll =
    document.getElementById("showAll");


if (showAll) {

    showAll.addEventListener(
        "click",
        function () {

            filters.forEach(function (item) {

                item.classList.remove(
                    "active"
                );

            });


            filters[0].classList.add(
                "active"
            );


            filterSchedule("all");


            document
                .getElementById("jadwal")
                .scrollIntoView({
                    behavior: "smooth"
                });

        }
    );

}


/* =========================================
   ANNOUNCEMENT
========================================= */

function showAnnouncement() {

    alert(
        "Pengumuman:\n\n" +
        "Penumpang disarankan datang " +
        "30 menit sebelum jadwal keberangkatan."
    );

}


/* =========================================
   GOOGLE MAPS
========================================= */

function openMap() {

    const url =
        "https://www.google.com/maps/search/?api=1&query=Terminal+Tanjung+Pinggir+Pematangsiantar";


    window.open(
        url,
        "_blank"
    );

}


/* =========================================
   NEXT BUS
========================================= */

function updateNextBus() {

    const times = [

        "08:00",
        "10:30",
        "13:00",
        "15:30"

    ];


    const now =
        new Date();


    const currentMinutes =
        now.getHours() * 60 +
        now.getMinutes();


    let next =
        times[times.length - 1];


    for (
        let i = 0;
        i < times.length;
        i++
    ) {

        const parts =
            times[i].split(":");


        const minutes =
            parseInt(parts[0]) * 60 +
            parseInt(parts[1]);


        if (
            minutes > currentMinutes
        ) {

            next =
                times[i];

            break;

        }

    }


    const nextBus =
        document.getElementById(
            "nextBusTime"
        );


    if (nextBus) {

        nextBus.textContent =
            next;

    }

}


updateNextBus();


/* =========================================
   PAGE LOADED
========================================= */

document.addEventListener(
    "DOMContentLoaded",
    function () {

        console.log(
            "Terminal Tanjung Pinggir berhasil dimuat."
        );

    }
);