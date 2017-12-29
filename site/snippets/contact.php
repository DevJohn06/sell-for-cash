<section id="section-contact" class="section section--contact">
        <div class="space--top-4 uk-container">
            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-2">
                    <h1 class="section__header--contact">
                        Contact us
                    </h1>
                </div>
                <div class="uk-width-1-2 align-right">
                    <div>
                        <a href="#" class="section__info">
                            202-869-4330
                        </a>
                    </div>
                    <div>
                        <a href="" class="section__info">
                            info@sellforcash.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- form start -->
        <form class="form--contact" action="">
            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-1@m uk-width-1-2@l content--center">
                    <div class="uk-grid-collapse" uk-grid>
                        <div class="uk-width-1-2@m uk-width-1-2@l">
                            <span class="input input--kohana">
                                <input class="input__field--section-contact input__field input__field--kohana" type="text" id="firstname" />
                                <label class="input__label input__label--kohana" for="firstname">
                                    <i class="fa fa-fw uk-icon-user icon icon--kohana"></i>
                                    <span class="input__label-content input__label-content--kohana">Name</span>
                                </label>
                            </span>
                        </div>
                        <div class="uk-width-1-2@m uk-width-1-2@l">
                            <span class="input input--kohana">
                                <input class="input__field--section-contact input__field input__field--kohana" type="text" id="lastname" />
                                <label class="input__label input__label--kohana" for="lastname">
                                    <i class="fa fa-fw uk-icon-user icon icon--kohana"></i>
                                    <span class="input__label-content input__label-content--kohana">Last name</span>
                                </label>
                            </span>
                        </div>
                    </div>
                    <div class="space--top-2">
                        <span class="input input--kohana">
                            <input class="input__field--section-contact input__field input__field--kohana" type="email" id="email" />
                            <label class="input__label input__label--kohana" for="email">
                                <i class="fa fa-fw uk-icon-envelope icon icon--kohana"></i>
                                <span class="input__label-content input__label-content--kohana">Email</span>
                            </label>
                        </span>
                    </div>
                    <div class="space--top-1">
                        <span class="input input--kohana">
                            <input class="input__field--section-contact input__field input__field--kohana" type="text" id="contact" />
                            <label class="input__label input__label--kohana" for="email">
                                <i class="fa fa-fw uk-icon-phone icon icon--kohana"></i>
                                <span class="input__label-content input__label-content--kohana">Phone</span>
                            </label>
                        </span>
                    </div>
                </div>

                <div class="uk-text-center uk-width-1-1@m uk-width-1-2@l">
                    <div class="container--textarea">
                        <span class="input input--kohana">
                            <textarea class="input__field--section-contact input__field input__field--kohana" name="message" id="" cols="30" rows="10"></textarea>
                            <label class="input__label input__label--kohana" for="message">
                                <i class="fa fa-fw uk-icon-comment icon icon--kohana"></i>
                                <span class="input__label-content input__label-content--kohana">Message</span>
                            </label>
                        </span>
                    </div>

                    <div class="uk-inline space--top-2">
                        <button uk-toggle="target: #appointment-modal" type="button" class="uk-button-primary button button--blue">Book for an appointment</button>
                        <div uk-dropdown="mode: click"></div>
                    </div>

                    <div class="space--top-2">
                        <button type="submit" class="uk-button-primary button button--green">
                            Submit
                        </button>
                    </div>


                    <!-- book appointment modal -->
                    <div id="appointment-modal" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body">
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <div class="uk-text-center">
                                <h2 class="uk-modal-title text--color-blue">Book appointment</h2>
                                <form id="form-appointment" action="">
                                    <div class="uk-width-1-1@m uk-width-1-1@l">
                                        <span class="input input--kohana">
                                            <input class="input__field--section-contact input__field input__field--kohana" type="text" id="firstn" />
                                            <label class="input__label input__label--kohana" for="firstn">
                                                <i class="fa fa-fw uk-icon-user icon icon--kohana"></i>
                                                <span class="input__label-content input__label-content--kohana">First name</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="uk-width-1-1@m uk-width-1-1@l">
                                        <span class="input input--kohana">
                                            <input class="input__field--section-contact input__field input__field--kohana" type="text" id="lastn" />
                                            <label class="input__label input__label--kohana" for="lastn">
                                                <i class="fa fa-fw uk-icon-user icon icon--kohana"></i>
                                                <span class="input__label-content input__label-content--kohana">Last name</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="uk-width-1-1@m uk-width-1-1@l">
                                        <span class="input input--kohana">
                                            <input class="input__field--section-contact input__field input__field--kohana" type="text" id="email" />
                                            <label class="input__label input__label--kohana" for="email">
                                                <i class="fa fa-fw uk-icon-user icon icon--kohana"></i>
                                                <span class="input__label-content input__label-content--kohana">Email</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="uk-width-1-1@m uk-width-1-1@l">
                                        <span class="input input--kohana">
                                            <input class="input__field--section-contact input__field input__field--kohana" type="text" id="phone" />
                                            <label class="input__label input__label--kohana" for="firstname">
                                                <i class="fa fa-fw uk-icon-user icon icon--kohana"></i>
                                                <span class="input__label-content input__label-content--kohana">Phone no.:</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="uk-width-1-1@m uk-width-1-1@l">
                                        <span class="input input--kohana">
                                            <input class="input__field--section-contact input__field input__field--kohana" type="text" id="modalDate" />
                                            <label class="input__label input__label--kohana" for="firstname">
                                                <i class="fa fa-fw uk-icon-user icon icon--kohana"></i>
                                                <span class="input__label-content input__label-content--kohana">Appointment Date</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="uk-width-1-1@m uk-width-1-1@l">
                                        <span class="input input--kohana">
                                            <input class="input__field--section-contact input__field input__field--kohana" type="text" id="modalTime" />
                                            <label class="input__label input__label--kohana" for="firstname">
                                                <i class="fa fa-fw uk-icon-user icon icon--kohana"></i>
                                                <span class="input__label-content input__label-content--kohana">Appointment Time</span>
                                            </label>
                                        </span>
                                    </div>

                                    <div class="space--top-2">
                                        <button type="submit" class="uk-button-primary button button--green">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- book appointment modal end -->
                </div>
            </div>
        </form>
        <!-- form end -->
    </section>
   