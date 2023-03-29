<?php /*Template Name:Privacy*/
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<body>
    <div class="wrapper">
        <?php include_once 'inc/nav.php' ?>
        <div class="empty-div"></div>

        <main class="position-relative">
      <div class="cog-bg-gradient cog-bg-gradient--lght"></div>
      <section class="cog-content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-xl-10 mx-auto">
              <h1 class="h2 fw-xbold mb-3 mb-md-4 pb-md-2 cog-clr-darkgray">Privacy Policy</h1>
              <p>Privacy of our valued customer is very important. We strongly believe that the personal information of our customers should not be shared with the third party without the prior consent or request from the customer. Privacy is the right of an individual and at Cognixia- A Collabera Learning Solutions Company, the information of the customer such as contact number, email ID, personal address, etc is used only for the internal purpose and not for sale. Your contact information is stored in our database and is only used to contact you during the course of your training with and after the announcement of our latest deals, news, etc. We at Cognixia condemn the unauthorized reach and misuse and/or disclosure of the personal information of the customer and we have strict guidelines and high-security features to prevent the same. Any changes in our ‘Privacy Policy’ will be posted here on the website.</p>
              <h5>Secure Online Payments</h5>
              <p>The visitor on our website please take a note that your name, email address, and other personal information submitted on our website may be stored with us and may also appear on the website. Like other platforms, our server log files also receives general information such as IP address of the visitor, cookie etc. For the financial transactions by credit card, Cognixia uses a 3rd party secure payment gateway provided by “PayU” and the credit card details are ‘not stored’ with, instead the Cognixia information is securely stored and encrypted with Visa/MasterCard.</p>
              <h5>Smart Cookies</h5>
              <p>We use ‘Cookies’ to keep track of your current shopping session to personalize your experience and so that you may retrieve your shopping cart at any time. ‘Cookies’ are tiny text files which our Website places on your computer’s hard drive to store information about your shopping session and to identify your computer.</p>
            </div>
          </div>
        </div>
      </section>
    </main>
       
    </div>
    <?php include_once 'footer.php'; ?>
</body>

</html>