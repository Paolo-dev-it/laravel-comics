<section>
    <div class="gena">
        <div class="container">
            <div class="flex">
                <div class="btn">
                    <button>SIGN-UP NOW!</button>
                </div>

                <div class="social">
                    <a href="#"><strong>FOLLOW US!</strong></a>
                    <img src="{{ asset('img/footer-facebook.png') }}" alt="" />
                    <img src="{{ asset('img/footer-twitter.png') }}" alt="" />
                    <img src="{{ asset('img/footer-youtube.png') }}" alt="" />
                    <img src="{{ asset('img/footer-pinterest.png') }}" alt="" />
                    <img src="{{ asset('img/footer-periscope.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>




<style>
    .gena {
        background-color: black;
        width: 100%;
    }

    .flex {
        display: flex;
        justify-content: space-between;
    }

    .social {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 400px;
        padding: 20px;
    }

    img {
        width: 30px;
        height: 30px;
    }

    a {
        text-decoration: none;
        color: blue;
    }

    .btn {
        display: flex;
        align-items: center;
        padding: 20px;
    }

    button {
        padding: 1rem;
        border: 3px solid blue;
        color: white;
        background-color: black;
    }

    .container {
        width: 90%;
        margin: auto;
    }
</style>
