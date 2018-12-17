<section id="slider-area">
    <!--== slide Item One ==-->
    <div class="single-slide-item overlay" style="background-image: url({{asset('assets')}}/frontend/img/banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="book-a-car">
                        <form action="{{ route('home.search') }}">

                            <!--== Car Choose ==-->
                            <div class="choose-car-type book-item">
                                <h4>CHOOSE CAR TYPE:</h4>
                                <select class="custom-select">
                                    <option selected>Select</option>
                                    <option value="1">BMW</option>
                                    <option value="2">Audi</option>
                                    <option value="3">Lexus</option>
                                </select>
                            </div>
                            <!--== Car Choose ==-->

                            <!--== Car Choose ==-->
                            <div class="choose-car-type book-item">
                                <h4>CHOOSE CATEGORY:</h4>
                                <select class="custom-select">
                                    <option selected>Select</option>
                                    <option value="1">BMW</option>
                                    <option value="2">Audi</option>
                                    <option value="3">Lexus</option>
                                </select>
                            </div>
                            <!--== Car Choose ==-->

                            <!--== Pick Up Location ==-->
                            <div class="pickup-location book-item">
                                <h4>SITS:</h4>
                                <select class="custom-select">
                                    <option selected>Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <!--== Pick Up Location ==-->

                            <div class="book-button text-center">
                                <button class="book-now-btn">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-7 text-right">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="slider-right-text">
                                <h1>BOOK A CAR TODAY!</h1>
                                <p> Let’s find a car for you. The trusted, <br/>smart and easy way to rent a car,
                                    countrywide. <br />The trusted, smart a car for you. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== slide Item One ==-->
</section>
