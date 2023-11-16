<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Kraken - FAQ</title>
      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
         crossorigin="anonymous"
         />
      <style>
        h3.text-primary, h6.text-primary {
            color: #000994 !important;
        }
      </style>
   </head>
   <body>
      <!-- Navbar -->
      <?php include "../controller/navbar.php" ?>

      <!-- Main Section -->
      <div class="d-flex justify-content-center">
         <div class="accordion w-50" id="basicAccordion">
            <!--Section: FAQ-->
            <section>
               <h3 class="text-center mb-4 pb-2 text-primary fw-bold mt-3">FAQ</h3>
               <p class="text-center mb-5">
                  Find the answers for the most frequently asked questions below
               </p>
               <div class="row">
                  <div class="col-md-6 col-lg-4 mb-4">
                     <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> A simple
                        question?
                     </h6>
                     <p>
                        <strong><u>Absolutely!</u></strong> We work with top payment companies which guarantees
                        your
                        safety and
                        security. All billing information is stored on our payment processing partner.
                     </p>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-4">
                     <h6 class="mb-3 text-primary"><i class="fas fa-pen-alt text-primary pe-2"></i> A question
                        that
                        is longer then the previous one?
                     </h6>
                     <p>
                        <strong><u>Yes, it is possible!</u></strong> You can cancel your subscription anytime in
                        your
                        account. Once the subscription is
                        cancelled, you will not be charged next month.
                     </p>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-4">
                     <h6 class="mb-3 text-primary"><i class="fas fa-user text-primary pe-2"></i> A simple
                        question?
                     </h6>
                     <p>
                        Currently, we only offer monthly subscription. You can upgrade or cancel your monthly
                        account at any time with no further obligation.
                     </p>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-4">
                     <h6 class="mb-3 text-primary"><i class="fas fa-rocket text-primary pe-2"></i> A simple
                        question?
                     </h6>
                     <p>
                        Yes. Go to the billing section of your dashboard and update your payment information.
                     </p>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-4">
                     <h6 class="mb-3 text-primary"><i class="fas fa-home text-primary pe-2"></i> A simple
                        question?
                     </h6>
                     <p><strong><u>Unfortunately no</u>.</strong> We do not issue full or partial refunds for any
                        reason.
                     </p>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-4">
                     <h6 class="mb-3 text-primary"><i class="fas fa-book-open text-primary pe-2"></i> Another
                        question that is longer than usual
                     </h6>
                     <p>
                        Of course! We’re happy to offer a free plan to anyone who wants to try our service.
                     </p>
                  </div>
               </div>
            </section>
         </div>
      </div>

      <!-- footer -->
      <?php include "../controller/footer.php" ?>
      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
         crossorigin="anonymous"
         ></script>
   </body>
</html>