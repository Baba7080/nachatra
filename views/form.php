

<form method="post" action = "index.php?c=My&a=savePuja" type="POST" id="contactForm" data-sb-form-api-token="API_TOKEN" >
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="userName" id="name" type="text" placeholder="आपका नाम *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" name="phoneNo" type="tel" placeholder="आपका फ़ोन नंबर *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-4 justify-content-center">
                        <div class="form-group">
                                <!-- Name input-->
                            </div>
                            <div class="form-group form-group-textarea mb-md-0" style = "padding-left:200px ; padding-top:50px ">
                                <!-- Message input-->
                                <label for="dateInput" class = "text-white"><b>तारीख चुनें</b></label>
                                <input type="date" id="dateInput" name="selectedDate">
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">अपॉइंटमेंट बुक करें</button></div>
                </form>