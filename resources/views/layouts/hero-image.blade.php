<style>
    body,
    html {
        height: 100%;
        margin: 0;
    }

    .hero-image {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('img/contact.png') }}");
        height: 50vh;
        /* Change to 50vh for better responsiveness */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .hero-text {
        text-align: center;
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }
</style>
