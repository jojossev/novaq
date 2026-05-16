<div class="content-wrapper">
    <section class="content-header mt-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-8 ">
                    <h4>Santé système</h4>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Accueil</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('admin/system_health') ?>">Santé système</a></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info p-4 system_health_table">
                            <h4 class="">Système Analytics</h4>
                            <hr>
                            <div class="d-flex">
                                <h6 class="text-bold"> Versions PHP actuelle : </h6>
                                <p class="mb-0 mx-3"> 8.1</p>
                            </div>
                            <div class="d-flex">
                                <h6 class="text-bold"> Versions PHP minimale requise : </h6>
                                <p class="mb-0 mx-3"> 7.4</p>
                            </div>
                            <div class="d-flex">
                                <h6 class="text-bold"> Versions PHP maximale requise : </h6>
                                <p class="mb-0 mx-3"> 8.3</p>
                            </div>

                            <div class="mt-4">
                            <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="col">N°|Numéro</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Description</th>
                                        </tr>
                                        <tr scope="row">
                                            <td>1.</td>
                                            <td>cURL Extension</td>
                                            <td>Doit activer cette extension sur votre serveur (cPanel). Ceci est utilisé pour les méthodes de paiement.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>2.</td>
                                            <td>Zip Extension</td>
                                            <td>Doit activer cette extension sur votre serveur (cPanel). Ceci est utilisé pour le système de mise à jour via des fichiers zip.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>3.</td>
                                            <td>Upload_tmp_dir </td>
                                            <td>Doit définir Upload_tmp_dir sur votre serveur (cPanel).</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>4.</td>
                                            <td>Open SSL Extension</td>
                                            <td>Doit activer cette extension sur votre serveur (cPanel).</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>4.</td>
                                            <td>5.</td>
                                            <td>Paramètres de notification</td>
                                            <td>Pour activer les notifications push de l'application, veuillez suivre ces étapes : <br>
                                                &emsp;1. Set your Vap ID key from Firebase account.( Firebase → Project Paramètres → Cloud Messaging → Web Configuration → here you have to generate it ) <br>
                                                &emsp;2. Set your Firebase project ID. ( Firebase → Project Paramètres → General → Project ID ) <br>
                                                &emsp;3. Upload the service account JSON file associated with your Firebase account. ( Firebase → Project Paramètres → Service Account → Generate new private key ) <br>
                                                Ces actions sont nécessaires pour garantir une configuration et un fonctionnement corrects des notifications push au sein de l'application.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>5.</td>
                                            <td>6.</td>
                                            <td>E-mail Paramètres <a href="https://www.gmass.co/smtp-test" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>You need to set SMTP E-mail Paramètres for E-mail Notification.For this setting you need to check your server SMTP Paramètres e-mails. If that is not working then Ask your support to check your SMTP settings.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4 class="mt-4"> For Paiement Paramètres</h4>
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr scope="row">
                                            <th scope="col">N°|Numéro</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Description</th>
                                        </tr>
                                        <tr scope="row">
                                            <td>6.</td>
                                            <td>Paypal Paiements <a href="https://www.paypal.com/in/business" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>You need to create Paypal Paiements Account on official bussiness site.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>7.</td>
                                            <td>Razorpay Paiements <a href="https://razorpay.com/" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>You need to create Razorpay Paiements Account on official bussiness site.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>8.</td>
                                            <td>Paystack Paiements <a href="https://paystack.com/" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>You need to create Paystack Paiements Account on official bussiness site.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>9.</td>
                                            <td>Stripe Paiements <a href="https://stripe.com/in" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>You need to create Stripe Paiements Account on official bussiness site.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>10.</td>
                                            <td>Flutterwave Paiements <a href="https://flutterwave.com/us/" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>You need to create Flutterwave Paiements Account on official bussiness site.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>11.</td>
                                            <td>Paytm Paiements <a href="https://business.paytm.com/" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>You need to create Paytm Paiements Account on official bussiness site.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>12.</td>
                                            <td>Midtrans Paiements <a href="https://midtrans.com/" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>You need to create Midtrans Paiements Account on official bussiness site.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>13.</td>
                                            <td>Myfatoorah Paiements <a href="https://www.myfatoorah.com/" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>You need to create Myfatoorah Paiements Account on official bussiness site.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>14.</td>
                                            <td>Instamojo Paiements <a href="https://www.instamojo.com/" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>You need to create Instamojo Paiements Account on official bussiness site.</td>
                                        </tr>
                                        <tr scope="row">
                                            <td>15.</td>
                                            <td>Téléphone pe Paiements <a href="https://www.phonepe.com/" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>You need to create Téléphone pe Paiements Account on official bussiness site.</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h4 class="mt-4"> For Livraison Paramètres</h4>
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr scope="row">
                                            <th scope="col">N°|Numéro</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Description</th>
                                        </tr>
                                        <tr scope="row">
                                            <td>16.</td>
                                            <td>Local Livraison</td>
                                            <td>Pour utiliser la livraison locale, veuillez suivre ces étapes : <br>
                                                &emsp;1. Définissez le système de livrabilité depuis le panneau d'administration → Système → Paramètres boutique (activer par code postal ou par ville). <br>
                                                &emsp;2. Ajouter cities in admin panel → location → city. <br>
                                                &emsp;3. Ajouter zipcodes in admin panel → location → zipcodes ( for zipcode wise delivrability). <br>
                                                These actions are necessary to ensure proper configuration and functionality of local shipping within the application. <br>
                                            </td>
                                        </tr>
                                        <tr scope="row">
                                            <td>17.</td>
                                            <td>Méthode de livraison standard (Shiprocket) <a href="https://www.shiprocket.in/" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>Pour utiliser la livraison standard, veuillez suivre ces étapes : <br>
                                                &emsp;1. Définissez vos identifiants API Shiprocket. <br>
                                                &emsp;2. Définissez votre adresse de retrait. <br>
                                                These actions are necessary to ensure proper configuration and functionality of local shipping within the application.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h4 class="mt-4"> For Authentication Paramètres</h4>
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr scope="row">
                                            <th scope="col">N°|Numéro</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Description</th>
                                        </tr>
                                        <tr scope="row">
                                            <td>18.</td>
                                            <td>Firebase</td>
                                            <td>Pour utiliser Firebase, veuillez suivre ces étapes : <br>
                                                &emsp;1. Set Firebase settings from admin panel → Paramètres Web → Firebase Paramètres. <br>
                                                &emsp;2. Ajouter 'test' in databaseURL and measurementId . <br>
                                                These actions are necessary to ensure proper configuration and functionality of Firebase within the application. <br>
                                            </td>
                                        </tr>
                                        <tr scope="row">
                                            <td>19.</td>
                                            <td>Passerelle SMS personnalisée <a href="https://www.twilio.com/en-us" target="_blank"><i class="fa fa-link"></i></a></td>
                                            <td>To use Passerelle SMS personnalisée , please complete these steps : <br>
                                                &emsp;1. Set your custom sms gateway settings from Admin panel → Système → SMS Gateway Paramètres. <br>
                                                &emsp;2. Dans l'URL de base, ajoutez l'URL de base de votre passerelle SMS. <br>
                                                &emsp;3. Ajouter authorization token in header. <br>
                                                &emsp;2. Ajouter body data in Body. <br>
                                                These actions are necessary to ensure proper configuration and functionality of SMS Gateway within the application.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>