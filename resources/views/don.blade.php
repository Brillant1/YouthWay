@extends('partials.template')
@section('content')
<div class="modal fade" id="paypalModal" tabindex="-1" role="dialog" aria-labelledby="paypalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Finaliser le payement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div id="paypal-button-container"></div>
        </div>
    </div>
    </div>
</div>
    <div>
        <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
            <p class="text-center h3 rosette-text-orange fw-bold text-uppercase mb-3 ">Faites un don aujourd'hui</p>

            <div class=" mb-3 url-back">
                <a href="{{ URL::previous() }}" style="cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff8000" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                </a>
            </div>




                <div class="shadow detail-activite-content p-4">
                    <div class="">
                        <img src="{{ asset('images/contact.jpg') }}" alt="" class="w-100" style="height: 450px; width:100%; " >

                    </div>

                    <div>

                        <form action="" class="don-form mt-4 pt-4">
                            @csrf
                            <h3 class=" text-center">Nous avons besoin de vous connaître</h3>
                            <div class=" input-group row mt-2">
                                <label for="nom" class=" form-label p-0">Nom</label>
                                <input type="text" name="nom" id="nom" class=" form-control">
                            </div>
                            <div class=" input-group row mt-2">
                                <label for="prenom" class=" form-label p-0">Prénom</label>
                                <input type="text" name="prenom" id="prenom" class=" form-control">
                            </div>
                            <div class=" input-group row mt-2">
                                <label for="telephone" class=" form-label p-0">Téléphone</label>
                                <input type="text" name="telephone" id="telephone" class=" form-control">
                            </div>
                            <div class=" input-group row mt-2">
                                <label for="email" class=" form-label p-0">Adresse email</label>
                                <input type="email" name="email" id="email" class=" form-control">
                            </div>
                            <div class=" input-group row mt-2">
                                <label for="entreprise" class=" form-label p-0">Entreprise/Société <span class=" text-danger">(optionnel)</span></label>
                                <input type="text" name="entreprise" id="entreprise" class=" form-control">
                            </div>
                            <input type="hidden" name="transaction_id">
                            <input type="hidden" name="price" id="price" value="1000">
                        </form>
                    </div>
                    <div class="d-flex mt-3 justify-content-center align-items-center action-button">
                        <p class=" mt-3 me-3">Je veux payer par</p> &nbsp;
                        <a href="#" class="btn btn-primary px-5 rounded-pill me-3 kkiapay-button ">Carte bancaire/Mobile money</a>
                        <a href="#" class="btn rosette-bg-orange px-5 rounded-pill text-white ms-3  pay-event-with-paypal">Paypal</a>
                    </div>
                </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AX5ysXX-tJxBGszFfkyXCgjjxM3swEaUtX0Q3EPv7DKwZGIwoVkjUXHU5aR8VJSBRz_SWi2oF5DniPDb&components=buttons&currency=EUR&locale=fr_FR"></script>


    <script amount=5000 email="" position="center" theme="#032497F5" phone="97000000" firstname="" lastname=""
        sandbox="true" callback=" " key="0b7354b0ed5a11ec848227abfc492dc7" src="https://cdn.kkiapay.me/k.js"></script>
    <script>
        $('.pay-event-with-paypal').click(function(e){
            e.preventDefault();
            if ($('form input[name="nom"]').val() == "" || $('form input[name="prenom"]').val() == "" || $('form input[name="email"]').val() == "" || $('form input[name="telephone"]').val() == "") {
                alert('Veuillez remplir tous les champs du formulaire s\'il vous plaît');
            }
            else{
                let value = $('input[name="price"]').val();
                pay_with_paypal(value);
            }
        });
                function pay_with_paypal(total){
                    $('#paypalModal').modal('show');
                    $('#paypal-button-container').text('');
                    paypal.Buttons({
                        style: {
                            layout: 'vertical',
                            color:  'blue',
                            shape:  'rect',
                            label:  'paypal'
                        },
                        createOrder: function(data, actions) {
                            // let value = devise > 1 ? `${(total / devise).toFixed(2)}` : `${total}`;
                            let value = (total / 650).toFixed(2);
                            if(total){
                                return actions.order.create({
                                    purchase_units: [{
                                        amount: {
                                            value
                                        }
                                    }]
                                });
                            }
                        },
                        onApprove: function(data, actions) {
                            // This function captures the funds from the transaction.
                            return actions.order.capture().then(function(details) {
                                $('input[name="transaction_id"]').val(details.id);
                                validate_form();
                            });
                        }
                    }).render('#paypal-button-container');
                }

            function validate_form(){
                $('.contact-form').submit();
            }
    </script>

@endsection


