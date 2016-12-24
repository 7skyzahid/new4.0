
            <!-- Form -->
            <form method="post" name="contactform" id="contactform"  action="/addorder">
                {!! csrf_field() !!}


                <fieldset>

                    <div>
                        <label>Card No:</label>
                        <input name="cardNumber" type="text" id="name" />
                    </div>

                    <div>
                        <label>Card Expiry:</label>
                        <input name="cardExpiry" type="text" id="name" />
                    </div>

                    <div>
                        <label>Card CVC:</label>
                        <input name="cardCVC" type="text" id="name" />
                    </div>
                    <div>
                        <label>Subscription:</label>
                        <input name="subscribed" type="checkbox" id="name" />
                    </div>





                </fieldset>
                <div id="result"></div>
                <input  class="submit" id="submit" type="submit" value="Send" />
                <div class="clearfix"></div>
                <div class="margin-bottom-40"></div>
            </form>

