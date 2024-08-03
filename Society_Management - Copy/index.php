<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | UDHYAM KUNJ</title>
    <?php
    @include "include/header_link.html";
    ?>

</head>

<body>

    <?php
    @include "include/header.html";
    ?>
    <div id="loading">
    </div>

    <div class="banner-container">
        <!-- <h2 class="white pb-3">Happiness per Square Foot</h2> -->

        <!-- <form id="search-form">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form> -->



        <div class="banner-content white">
            Udhyam Kunj is webapp where society members can get all the updates related to their society. The members
            also get notified with notices and events held in society and can see information about members in society.
            Members can also post complaints regarding any issue in society

            <div class="banner-button">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_sign_up">
                    Sign Up
                </button>
            </div>

        </div>

        <div class="banner-img">
            <img src="./assets/img/building.jpg" alt="" srcset="">
        </div>



    </div>

    <div class="page-container" id="rule_guideline">
        <h1 class="city-heading">
            Rules and Guideline
        </h1>
        <ul>
            <li>Members and residents are required to keep their flats/homes and nearby premises clean and habitable.
            </li>
            <li>The residents should also maintain proper cleanliness etiquette while using common areas, parking lot,
                etc. and not throw litter from their balconies and windows.</li>
            <li>Members must regularly pay the maintenance charges and all other dues necessitated by the society.</li>
            <li>Keeping pets is allowed after submitting the required NOC to the society. But if pets like dogs are
                creating any kind of disturbance to other society members then the pets won’t be allowed.</li>
            <li>Every member of the society should park their vehicles in their respective allotted parking spaces only.
            </li>
            <li> After using the community hall for any event or function it should be cleaned and no damages should be
                caused.</li>
            <li>No member can occupy the area near their front doors, corridors, passage for their personal usage.</li>
            <li>Salesmen, vendors or any other sellers are not allowed to enter the premises.</li>
            <li>Wastage and over usage of water is not allowed.</li>
            <li>Smoking in lobbies, passage is not allowed. If any irresponsible person is found smoking in the no
                smoking zone, he/she shall be charged with penalty.</li>
        </ul>

    </div>

    <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="signup-form" class="form" role="form">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-university"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="college_name" placeholder="College Name" maxlength="150" required>
                        </div>

                        <div class="form-group">
                            <span>I'm a</span>
                            <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                            <label for="gender-male">
                            </label>
                            <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                            <label for="gender-female">
                                Female
                            </label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <span>Already have an account?
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <?php
    @include "include/adminLoginModal.html";
    @include "include/userLoginModal.html";
    @include "include/footer.html";


    ?>
  

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


    <script src="./assets/vendor/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    <script src="./assets/vendor/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>