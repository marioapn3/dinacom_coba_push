<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
    @keyframes float {
        0% {

            transform: translatey(0px);
        }

        50% {

            transform: translatey(-20px);
        }

        100% {

            transform: translatey(0px);
        }
    }
</style>

<script>
    tailwind.config = {
        darkMode: false,
        theme: {
            // kalo mau nambahin kasih keterangan yes
            extend: {
                fontFamily: {
                    sarpanch: ["Sarpanch"],
                },
                colors: {
                    grape: {
                        // gradient kotak timeline
                        '300': "#290044", // bg about section
                        '400': "#511E74", // fqa,help section
                        '500': "#391751", // footer
                        // gradient main bg
                        '600': '#240049',
                        '700': '#0E0C1F',
                    },
                    pink: "#CC6AE5",
                    blue: "#4452D2",
                    purple: "#533B96"
                },
                dropShadow: {
                    buttonShadow: "0px 0px 30px #7E00FF",
                    pinkShadow: "0px 0px 150px #CC6AE5",
                    purpleShadow: "0px 0px 150px #9061DD",
                    blueShadow: "0px 0px 150px #6759D7"
                }
            },
        },

    };
</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Sarpanch&display=swap');
</style>
