<section>
    <div class="gen">
        <div class="jumbotron">
            <div class="currentSeries">
                <p>CURRENT SERIES</p>
            </div>
        </div>
    </div>
</section>


<style lang="scss" scoped>
    .gen {
        width: 100%;
    }

    .jumbotron {
        width: 100%;
        height: 300px;
        background-image: url('../img/jumbotron.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .currentSeries {
        width: 200px;
        height: 50px;
        background-color: blue;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        position: absolute;
        bottom: -25px;
        left: 125px;
    }

    .gen {
        background-color: white;
        width: 100%;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 80%;
        margin: auto;
    }

    .navList {
        display: flex;
    }

    .listContainer {
        margin: 0 10px;
        height: 100px;
        display: flex;
        align-items: center;
    }


    a {
        text-decoration: none;
        color: black;


    }

    .listContainer:hover {

        border-bottom: 4px solid blue;
    }

    a {
        color: blue;
    }

    img {
        width: 70px;
    }
</style>
