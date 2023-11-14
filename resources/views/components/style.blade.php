<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

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
            extend: {
                fontFamily: {
                    ubuntu: ["Ubuntu Mono"],
                },
                colors: {
                    textgreen: "#5FCC9C",
                    btngreen: "#45EBA5",
                    lightgrn: "#ABEDD8",
                    darkgreen: "#005555",
                    medgrn: "#276161",
                },

            },
        },
    };
</script>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Ubuntu+Mono:wght@700&display=swap");
</style>
