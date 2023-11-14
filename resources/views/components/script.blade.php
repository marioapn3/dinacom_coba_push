<script src="{{ asset('assets/js/aos.js') }}"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
    <script>
        new TypeIt("#title_dinacom", {
                speed: 50,
                waitUntilVisible: true,
            })
            .type("DiNa", {
                delay: 300
            })
            .move(-1)
            .delete(1)
            .type("n")
            .move(null, {
                to: "END"
            })
            .type("Com")
            .move(-2)
            .delete(1)
            .type("c")
            .move(null, {
                to: "END"
            })

            .pause(300)

            .type(" 2023")

            .pause(500)

            .go()
            ;
    </script>